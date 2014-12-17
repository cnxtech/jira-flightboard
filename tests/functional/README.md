# Headless Browser UI Tests

Before starting
------------
You need ```nodejs``` and ```npm```:
```
sudo yum install nodejs npm -y
```
Then you need to install ```phantomjs``` globally:
```
sudo npm install -g phantomjs
```
You need also the ```selenium-server-standalone-*.jar```:
```
wget http://selenium-release.storage.googleapis.com/2.44/selenium-server-standalone-2.44.0.jar
```
And finnally install npm dependencies (in this same directory):
```
ant install-npm-dependencies
```
Add your ```config/default.json``` file pointing to the correct URL and with the correct credentials.
You have a ```config/sample.json``` with the expected structure.

Test environment setup
------------
Run your selenium server:
```
java -jar selenium-server-standalone-2.44.0.jar -role hub > /dev/null 2>&1 &
```
Let's run phantomjs too:
```
phantomjs --webdriver=4445 --webdriver-selenium-grid-hub=http://127.0.0.1:4444 > /dev/null 2>&1 &
```

Run tests
------------
In this directory:
```
ant
```
**Important**: Read the *After running tests* section.

After running tests
------------
We need to kill selenium and phantomjs processes. You could:
```
pid=`ps aux | grep "$seleniumFile" | cut -d ' ' -f 2`
kill -9 $pid

pid=`ps aux | grep "/usr/bin/phantomjs" | cut -d ' ' -f 2`
kill -9 $pid
```
