#!/bin/bash

# Check everything is set up
if [[ `rpm -qa nodejs` == ""  ]]
then
    echo "Installing nodejs..."
    sudo yum install nodejs -y > /dev/null
fi
if [[ `rpm -qa npm` == ""  ]]
then
    echo "Installing npm..."
    sudo yum install npm -y > /dev/null
fi
if [[ `npm list -g 2>&1 | grep phantomjs` == "" ]]
then
    echo "Installing phantomjs globally"
    sudo npm install -g phantomjs > /dev/null
fi
if [[ `ls node_modules` == "" ]]
then
    echo "Installing npm packages"
    npm install > /dev/null
fi

seleniumFile="selenium-server-standalone-2.44.0.jar"
url="http://selenium-release.storage.googleapis.com/2.44/$seleniumFile"
if ! [[ -e "$seleniumFile" ]]
then
    echo "$seleniumFile not found. Downloading it from $url"
    wget $url >/dev/null 2>&1

    if ! [[ -e "$seleniumFile" ]]
    then
        echo "ERROR: Could not download $seleniumFile. Exiting."
        exit 1
    fi
fi

# Clean previous processes
process=`ps aux | grep "$seleniumFile"`
if ! [[ "" == "$process" ]]
then
    pid=`echo $process | cut -d ' ' -f 2`
    kill -9 $pid > /dev/null 2>&1
fi
process=`ps aux | grep "phantomjs"`
if ! [[ "" == "$process" ]]
then
    pid=`echo $process | cut -d ' ' -f 2`
    kill -9 $pid > /dev/null 2>&1
fi

# Start selenium and phantomjs
echo "Running selenium..."
java -jar $seleniumFile -role hub > /dev/null 2>&1 &
sleep 2
echo "Running phantomjs..."
phantomjs --webdriver=4445 --webdriver-selenium-grid-hub=http://127.0.0.1:4444 > /dev/null 2>&1 &

# Tests
./node_modules/mocha/bin/mocha --timeout 100000 cases/*.js

# Clean up processes
process=`ps aux | grep "$seleniumFile"`
if [[ "" != "$process"  ]]
then
    pid=`echo $process | cut -d ' ' -f 2`
    kill -9 $pid > /dev/null 2>&1
fi
process=`ps aux | grep "/usr/bin/phantomjs"`
if [[ "" != "$process"  ]]
then
    pid=`echo $process | cut -d ' ' -f 2`
    kill -9 $pid > /dev/null 2>&1
fi
