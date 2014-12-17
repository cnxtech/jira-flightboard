# Jira Flightboard
Web Service that displays Jira tickets as in a Flight Board.
Tickets are filtered and ordered based on a configuration file.

Set Up
------------

You need to set up your config file. To do that, copy the config/sample.yml as config/properties.yml.
The sections of this config file are:
 * **root_point**
 * **jira_api** where you will need to specify the token to authenticate to Jira and the endpoint.
 * **epics**
   * **project** Jira project name to pull tickets from.
   * **status** of tickets that we want to retrieve.
   * **fields** defines each of the different states that the flight can have. Each one is defined with **label** that will be displayed, **state** of the Jira ticket assigned to that label, **resolution** (idem), type of **sorting** (*time*, *team-group*) and **display**.
 * **smell_levels** to set the color and the age for each smell level.
 * **teams** is a map with the key as the name of the team (component field in Jira).

In *web/img/* you have to include the icons for each of the teams/components. The name of each icon has to be the id with *png* extension. For example, if the component id is 12934, the icon will be *web/img/12934.png*.

Usage
------------
After installing the rpm package, editing the config/properties.yml file and adding your icons, you are ready.
Just access to *http://127.0.0.1/jira-flightboard/epics*.
