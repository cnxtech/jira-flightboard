<?php

/**
 * Copyright 2014 Shazam Entertainment Limited
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not use this 
 * file except in compliance with the License.
 *
 * You may obtain a copy of the License at http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software distributed under 
 * the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR 
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the specific 
 * language governing permissions and limitations under the License.
 *
 * @author toni <toni.lopez@shazam.com>
 */

return array (
  'expand' => 'schema,names',
  'startAt' => 0,
  'maxResults' => 1000,
  'total' => 609,
  'issues' => 
  array (
    0 => 
    array (
      'expand' => 'editmeta,renderedFields,transitions,changelog,operations',
      'id' => '92625',
      'self' => 'https://jira.shazamteam.net/rest/api/2/issue/92625',
      'key' => 'SRM-866',
      'fields' => 
      array (
        'progress' => 
        array (
          'progress' => 0,
          'total' => 0,
        ),
        'summary' => 'Maps my-sql sig store',
        'customfield_11350' => NULL,
        'customfield_10114' => NULL,
        'customfield_10113' => NULL,
        'issuetype' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/issuetype/16',
          'id' => '16',
          'description' => 'A big user story that needs to be broken down.',
          'iconUrl' => 'https://jira.shazamteam.net/images/icons/issuetypes/epic.png',
          'name' => 'Epic',
          'subtask' => false,
        ),
        'customfield_10110' => NULL,
        'votes' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/issue/SRM-866/votes',
          'votes' => 0,
          'hasVoted' => false,
        ),
        'fixVersions' => 
        array (
          0 => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/version/14330',
            'id' => '14330',
            'description' => '',
            'name' => 'November 14',
            'archived' => false,
            'released' => false,
          ),
        ),
        'resolution' => NULL,
        'resolutiondate' => NULL,
        'timespent' => NULL,
        'reporter' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=david.shrimpton',
          'name' => 'david.shrimpton',
          'emailAddress' => 'david.shrimpton@shazamteam.com',
          'avatarUrls' => 
          array (
            '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=david.shrimpton&avatarId=11648',
            '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=david.shrimpton&avatarId=11648',
            '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=david.shrimpton&avatarId=11648',
            '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=david.shrimpton&avatarId=11648',
          ),
          'displayName' => 'David Shrimpton',
          'active' => true,
        ),
        'aggregatetimeoriginalestimate' => NULL,
        'customfield_10350' => NULL,
        'updated' => '2014-11-17T15:56:32.000+0000',
        'created' => '2014-11-17T07:26:29.000+0000',
        'description' => 'Store signatures in a mysql database on the map server that replicates out to GPU nodes with slave mysql instances; hence GPU nodes have local access to all sigs.
     i.e. maps pushes sigs onto gpu nodes rather then gpu nodes pull sigs from the map machines. We are using mysql as our signature distribution mechanism.',
        'priority' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/priority/4',
          'iconUrl' => 'https://jira.shazamteam.net/images/icons/priorities/minor.png',
          'name' => 'Minor',
          'id' => '4',
        ),
        'duedate' => NULL,
        'issuelinks' => 
        array (
        ),
        'customfield_10950' => NULL,
        'watches' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/issue/SRM-866/watchers',
          'watchCount' => 1,
          'isWatching' => false,
        ),
        'customfield_10024' => NULL,
        'subtasks' => 
        array (
        ),
        'status' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/status/10088',
          'description' => '',
          'iconUrl' => 'https://jira.shazamteam.net/images/icons/statuses/generic.png',
          'name' => 'December',
          'id' => '10088',
        ),
        'customfield_11250' => NULL,
        'customfield_10650' => NULL,
        'labels' => 
        array (
        ),
        'customfield_11150' => NULL,
        'customfield_10953' => '#dcedff',
        'workratio' => -1,
        'assignee' => NULL,
        'customfield_10951' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/customFieldOption/11200',
          'value' => 'To Do',
          'id' => '11200',
        ),
        'customfield_10952' => 'Maps my-sql sig store',
        'customfield_11050' => NULL,
        'customfield_10550' => NULL,
        'customfield_10250' => '72266',
        'aggregatetimeestimate' => NULL,
        'project' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/project/11050',
          'id' => '11050',
          'key' => 'SRM',
          'name' => 'Shazam Road Map',
          'avatarUrls' => 
          array (
            '16x16' => 'https://jira.shazamteam.net/secure/projectavatar?size=xsmall&pid=11050&avatarId=12021',
            '24x24' => 'https://jira.shazamteam.net/secure/projectavatar?size=small&pid=11050&avatarId=12021',
            '32x32' => 'https://jira.shazamteam.net/secure/projectavatar?size=medium&pid=11050&avatarId=12021',
            '48x48' => 'https://jira.shazamteam.net/secure/projectavatar?pid=11050&avatarId=12021',
          ),
          'projectCategory' => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/projectCategory/10081',
            'id' => '10081',
            'description' => 'Projects that concentrate on delivering a feature',
            'name' => 'Features',
          ),
        ),
        'versions' => 
        array (
          0 => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/version/14330',
            'id' => '14330',
            'description' => '',
            'name' => 'November 14',
            'archived' => false,
            'released' => false,
          ),
        ),
        'customfield_10170' => NULL,
        'environment' => NULL,
        'timeestimate' => NULL,
        'aggregateprogress' => 
        array (
          'progress' => 0,
          'total' => 0,
        ),
        'lastViewed' => NULL,
        'components' => 
        array (
          0 => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/component/11257',
            'id' => '11257',
            'name' => 'Recognition Infrastructure',
            'description' => 'San Diego Team',
          ),
        ),
        'timeoriginalestimate' => NULL,
        'aggregatetimespent' => NULL,
      ),
      'changelog' => 
      array (
        'startAt' => 0,
        'maxResults' => 1,
        'total' => 1,
        'histories' => 
        array (
          0 => 
          array (
            'id' => '944347',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=Ameen.Abed',
              'name' => 'Ameen.Abed',
              'emailAddress' => 'ameen.abed@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=ameen.abed&avatarId=11621',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=ameen.abed&avatarId=11621',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=ameen.abed&avatarId=11621',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=ameen.abed&avatarId=11621',
              ),
              'displayName' => 'Ameen Abed',
              'active' => true,
            ),
            'created' => '2014-11-17T15:56:32.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'status',
                'fieldtype' => 'jira',
                'from' => '1',
                'fromString' => 'Open',
                'to' => '10088',
                'toString' => 'December',
              ),
            ),
          ),
        ),
      ),
    ),
    1 => 
    array (
      'expand' => 'editmeta,renderedFields,transitions,changelog,operations',
      'id' => '92624',
      'self' => 'https://jira.shazamteam.net/rest/api/2/issue/92624',
      'key' => 'SRM-865',
      'fields' => 
      array (
        'progress' => 
        array (
          'progress' => 0,
          'total' => 0,
        ),
        'summary' => 'Maps orchestrated sig loading',
        'customfield_11350' => NULL,
        'customfield_10114' => NULL,
        'customfield_10113' => NULL,
        'issuetype' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/issuetype/16',
          'id' => '16',
          'description' => 'A big user story that needs to be broken down.',
          'iconUrl' => 'https://jira.shazamteam.net/images/icons/issuetypes/epic.png',
          'name' => 'Epic',
          'subtask' => false,
        ),
        'customfield_10110' => NULL,
        'votes' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/issue/SRM-865/votes',
          'votes' => 0,
          'hasVoted' => false,
        ),
        'fixVersions' => 
        array (
          0 => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/version/14330',
            'id' => '14330',
            'description' => '',
            'name' => 'November 14',
            'archived' => false,
            'released' => false,
          ),
        ),
        'resolution' => NULL,
        'resolutiondate' => NULL,
        'timespent' => NULL,
        'reporter' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=david.shrimpton',
          'name' => 'david.shrimpton',
          'emailAddress' => 'david.shrimpton@shazamteam.com',
          'avatarUrls' => 
          array (
            '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=david.shrimpton&avatarId=11648',
            '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=david.shrimpton&avatarId=11648',
            '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=david.shrimpton&avatarId=11648',
            '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=david.shrimpton&avatarId=11648',
          ),
          'displayName' => 'David Shrimpton',
          'active' => true,
        ),
        'aggregatetimeoriginalestimate' => NULL,
        'customfield_10350' => NULL,
        'updated' => '2014-11-17T15:56:51.000+0000',
        'created' => '2014-11-17T07:25:07.000+0000',
        'description' => 'Rather the GPU nodes updating cards at random intervals; maps server orchestrates when each card updates',
        'priority' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/priority/4',
          'iconUrl' => 'https://jira.shazamteam.net/images/icons/priorities/minor.png',
          'name' => 'Minor',
          'id' => '4',
        ),
        'duedate' => NULL,
        'issuelinks' => 
        array (
        ),
        'customfield_10950' => NULL,
        'watches' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/issue/SRM-865/watchers',
          'watchCount' => 1,
          'isWatching' => false,
        ),
        'customfield_10024' => NULL,
        'subtasks' => 
        array (
        ),
        'status' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/status/10087',
          'description' => '',
          'iconUrl' => 'https://jira.shazamteam.net/images/icons/statuses/generic.png',
          'name' => 'November',
          'id' => '10087',
        ),
        'customfield_11250' => NULL,
        'customfield_10650' => NULL,
        'labels' => 
        array (
        ),
        'customfield_11150' => NULL,
        'customfield_10953' => '#eacda0',
        'workratio' => -1,
        'assignee' => NULL,
        'customfield_10951' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/customFieldOption/11200',
          'value' => 'To Do',
          'id' => '11200',
        ),
        'customfield_10952' => 'Maps orchestrated sig loading',
        'customfield_11050' => NULL,
        'customfield_10550' => NULL,
        'customfield_10250' => '72265',
        'aggregatetimeestimate' => NULL,
        'project' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/project/11050',
          'id' => '11050',
          'key' => 'SRM',
          'name' => 'Shazam Road Map',
          'avatarUrls' => 
          array (
            '16x16' => 'https://jira.shazamteam.net/secure/projectavatar?size=xsmall&pid=11050&avatarId=12021',
            '24x24' => 'https://jira.shazamteam.net/secure/projectavatar?size=small&pid=11050&avatarId=12021',
            '32x32' => 'https://jira.shazamteam.net/secure/projectavatar?size=medium&pid=11050&avatarId=12021',
            '48x48' => 'https://jira.shazamteam.net/secure/projectavatar?pid=11050&avatarId=12021',
          ),
          'projectCategory' => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/projectCategory/10081',
            'id' => '10081',
            'description' => 'Projects that concentrate on delivering a feature',
            'name' => 'Features',
          ),
        ),
        'versions' => 
        array (
          0 => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/version/14330',
            'id' => '14330',
            'description' => '',
            'name' => 'November 14',
            'archived' => false,
            'released' => false,
          ),
        ),
        'customfield_10170' => NULL,
        'environment' => NULL,
        'timeestimate' => NULL,
        'aggregateprogress' => 
        array (
          'progress' => 0,
          'total' => 0,
        ),
        'lastViewed' => NULL,
        'components' => 
        array (
          0 => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/component/11257',
            'id' => '11257',
            'name' => 'Recognition Infrastructure',
            'description' => 'San Diego Team',
          ),
        ),
        'timeoriginalestimate' => NULL,
        'aggregatetimespent' => NULL,
      ),
      'changelog' => 
      array (
        'startAt' => 0,
        'maxResults' => 2,
        'total' => 2,
        'histories' => 
        array (
          0 => 
          array (
            'id' => '944346',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=Ameen.Abed',
              'name' => 'Ameen.Abed',
              'emailAddress' => 'ameen.abed@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=ameen.abed&avatarId=11621',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=ameen.abed&avatarId=11621',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=ameen.abed&avatarId=11621',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=ameen.abed&avatarId=11621',
              ),
              'displayName' => 'Ameen Abed',
              'active' => true,
            ),
            'created' => '2014-11-17T15:56:27.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'status',
                'fieldtype' => 'jira',
                'from' => '1',
                'fromString' => 'Open',
                'to' => '10088',
                'toString' => 'December',
              ),
            ),
          ),
          1 => 
          array (
            'id' => '944350',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=Ameen.Abed',
              'name' => 'Ameen.Abed',
              'emailAddress' => 'ameen.abed@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=ameen.abed&avatarId=11621',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=ameen.abed&avatarId=11621',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=ameen.abed&avatarId=11621',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=ameen.abed&avatarId=11621',
              ),
              'displayName' => 'Ameen Abed',
              'active' => true,
            ),
            'created' => '2014-11-17T15:56:51.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'status',
                'fieldtype' => 'jira',
                'from' => '10088',
                'fromString' => 'December',
                'to' => '10087',
                'toString' => 'November',
              ),
            ),
          ),
        ),
      ),
    ),
    2 => 
    array (
      'expand' => 'editmeta,renderedFields,transitions,changelog,operations',
      'id' => '92623',
      'self' => 'https://jira.shazamteam.net/rest/api/2/issue/92623',
      'key' => 'SRM-864',
      'fields' => 
      array (
        'progress' => 
        array (
          'progress' => 0,
          'total' => 0,
        ),
        'summary' => 'Super Ingest - Super Duper performance and capacity profiling',
        'customfield_11350' => NULL,
        'customfield_10114' => NULL,
        'customfield_10113' => NULL,
        'issuetype' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/issuetype/16',
          'id' => '16',
          'description' => 'A big user story that needs to be broken down.',
          'iconUrl' => 'https://jira.shazamteam.net/images/icons/issuetypes/epic.png',
          'name' => 'Epic',
          'subtask' => false,
        ),
        'customfield_10110' => NULL,
        'votes' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/issue/SRM-864/votes',
          'votes' => 0,
          'hasVoted' => false,
        ),
        'fixVersions' => 
        array (
          0 => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/version/14330',
            'id' => '14330',
            'description' => '',
            'name' => 'November 14',
            'archived' => false,
            'released' => false,
          ),
        ),
        'resolution' => NULL,
        'resolutiondate' => NULL,
        'timespent' => NULL,
        'reporter' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=david.shrimpton',
          'name' => 'david.shrimpton',
          'emailAddress' => 'david.shrimpton@shazamteam.com',
          'avatarUrls' => 
          array (
            '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=david.shrimpton&avatarId=11648',
            '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=david.shrimpton&avatarId=11648',
            '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=david.shrimpton&avatarId=11648',
            '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=david.shrimpton&avatarId=11648',
          ),
          'displayName' => 'David Shrimpton',
          'active' => true,
        ),
        'aggregatetimeoriginalestimate' => NULL,
        'customfield_10350' => NULL,
        'updated' => '2014-11-17T15:56:14.000+0000',
        'created' => '2014-11-17T07:23:41.000+0000',
        'description' => NULL,
        'priority' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/priority/4',
          'iconUrl' => 'https://jira.shazamteam.net/images/icons/priorities/minor.png',
          'name' => 'Minor',
          'id' => '4',
        ),
        'duedate' => NULL,
        'issuelinks' => 
        array (
        ),
        'customfield_10950' => NULL,
        'watches' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/issue/SRM-864/watchers',
          'watchCount' => 1,
          'isWatching' => false,
        ),
        'customfield_10024' => NULL,
        'subtasks' => 
        array (
        ),
        'status' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/status/10087',
          'description' => '',
          'iconUrl' => 'https://jira.shazamteam.net/images/icons/statuses/generic.png',
          'name' => 'November',
          'id' => '10087',
        ),
        'customfield_11250' => NULL,
        'customfield_10650' => NULL,
        'labels' => 
        array (
        ),
        'customfield_11150' => NULL,
        'customfield_10953' => '#fdf4bb',
        'workratio' => -1,
        'assignee' => NULL,
        'customfield_10951' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/customFieldOption/11200',
          'value' => 'To Do',
          'id' => '11200',
        ),
        'customfield_10952' => 'Super Ingest - Super Duper performance and capacity profiling',
        'customfield_11050' => NULL,
        'customfield_10550' => NULL,
        'customfield_10250' => '72264',
        'aggregatetimeestimate' => NULL,
        'project' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/project/11050',
          'id' => '11050',
          'key' => 'SRM',
          'name' => 'Shazam Road Map',
          'avatarUrls' => 
          array (
            '16x16' => 'https://jira.shazamteam.net/secure/projectavatar?size=xsmall&pid=11050&avatarId=12021',
            '24x24' => 'https://jira.shazamteam.net/secure/projectavatar?size=small&pid=11050&avatarId=12021',
            '32x32' => 'https://jira.shazamteam.net/secure/projectavatar?size=medium&pid=11050&avatarId=12021',
            '48x48' => 'https://jira.shazamteam.net/secure/projectavatar?pid=11050&avatarId=12021',
          ),
          'projectCategory' => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/projectCategory/10081',
            'id' => '10081',
            'description' => 'Projects that concentrate on delivering a feature',
            'name' => 'Features',
          ),
        ),
        'versions' => 
        array (
          0 => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/version/14330',
            'id' => '14330',
            'description' => '',
            'name' => 'November 14',
            'archived' => false,
            'released' => false,
          ),
        ),
        'customfield_10170' => NULL,
        'environment' => NULL,
        'timeestimate' => NULL,
        'aggregateprogress' => 
        array (
          'progress' => 0,
          'total' => 0,
        ),
        'lastViewed' => NULL,
        'components' => 
        array (
          0 => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/component/11257',
            'id' => '11257',
            'name' => 'Recognition Infrastructure',
            'description' => 'San Diego Team',
          ),
        ),
        'timeoriginalestimate' => NULL,
        'aggregatetimespent' => NULL,
      ),
      'changelog' => 
      array (
        'startAt' => 0,
        'maxResults' => 1,
        'total' => 1,
        'histories' => 
        array (
          0 => 
          array (
            'id' => '944345',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=Ameen.Abed',
              'name' => 'Ameen.Abed',
              'emailAddress' => 'ameen.abed@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=ameen.abed&avatarId=11621',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=ameen.abed&avatarId=11621',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=ameen.abed&avatarId=11621',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=ameen.abed&avatarId=11621',
              ),
              'displayName' => 'Ameen Abed',
              'active' => true,
            ),
            'created' => '2014-11-17T15:56:14.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'status',
                'fieldtype' => 'jira',
                'from' => '1',
                'fromString' => 'Open',
                'to' => '10087',
                'toString' => 'November',
              ),
            ),
          ),
        ),
      ),
    ),
    3 => 
    array (
      'expand' => 'editmeta,renderedFields,transitions,changelog,operations',
      'id' => '92621',
      'self' => 'https://jira.shazamteam.net/rest/api/2/issue/92621',
      'key' => 'SRM-863',
      'fields' => 
      array (
        'progress' => 
        array (
          'progress' => 0,
          'total' => 0,
        ),
        'summary' => 'GPU Performance Investigation and fix',
        'customfield_11350' => NULL,
        'customfield_10114' => NULL,
        'customfield_10113' => NULL,
        'issuetype' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/issuetype/16',
          'id' => '16',
          'description' => 'A big user story that needs to be broken down.',
          'iconUrl' => 'https://jira.shazamteam.net/images/icons/issuetypes/epic.png',
          'name' => 'Epic',
          'subtask' => false,
        ),
        'customfield_10110' => NULL,
        'votes' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/issue/SRM-863/votes',
          'votes' => 0,
          'hasVoted' => false,
        ),
        'fixVersions' => 
        array (
          0 => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/version/14330',
            'id' => '14330',
            'description' => '',
            'name' => 'November 14',
            'archived' => false,
            'released' => false,
          ),
        ),
        'resolution' => NULL,
        'resolutiondate' => NULL,
        'timespent' => NULL,
        'reporter' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=david.shrimpton',
          'name' => 'david.shrimpton',
          'emailAddress' => 'david.shrimpton@shazamteam.com',
          'avatarUrls' => 
          array (
            '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=david.shrimpton&avatarId=11648',
            '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=david.shrimpton&avatarId=11648',
            '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=david.shrimpton&avatarId=11648',
            '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=david.shrimpton&avatarId=11648',
          ),
          'displayName' => 'David Shrimpton',
          'active' => true,
        ),
        'aggregatetimeoriginalestimate' => NULL,
        'customfield_10350' => NULL,
        'updated' => '2014-11-17T20:02:48.000+0000',
        'created' => '2014-11-17T07:02:09.000+0000',
        'description' => 'Looking at the data it appears we are far slower today then a year ago and we need to know why and fix if possible. ',
        'priority' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/priority/4',
          'iconUrl' => 'https://jira.shazamteam.net/images/icons/priorities/minor.png',
          'name' => 'Minor',
          'id' => '4',
        ),
        'duedate' => NULL,
        'issuelinks' => 
        array (
        ),
        'customfield_10950' => NULL,
        'watches' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/issue/SRM-863/watchers',
          'watchCount' => 1,
          'isWatching' => false,
        ),
        'customfield_10024' => NULL,
        'subtasks' => 
        array (
        ),
        'status' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/status/10087',
          'description' => '',
          'iconUrl' => 'https://jira.shazamteam.net/images/icons/statuses/generic.png',
          'name' => 'November',
          'id' => '10087',
        ),
        'customfield_11250' => NULL,
        'customfield_10650' => NULL,
        'labels' => 
        array (
        ),
        'customfield_11150' => NULL,
        'customfield_10953' => '#e2ceec',
        'workratio' => -1,
        'assignee' => NULL,
        'customfield_10951' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/customFieldOption/11200',
          'value' => 'To Do',
          'id' => '11200',
        ),
        'customfield_10952' => 'GPU Performance Investigation and fix',
        'customfield_11050' => NULL,
        'customfield_10550' => NULL,
        'customfield_10250' => '62903',
        'aggregatetimeestimate' => NULL,
        'project' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/project/11050',
          'id' => '11050',
          'key' => 'SRM',
          'name' => 'Shazam Road Map',
          'avatarUrls' => 
          array (
            '16x16' => 'https://jira.shazamteam.net/secure/projectavatar?size=xsmall&pid=11050&avatarId=12021',
            '24x24' => 'https://jira.shazamteam.net/secure/projectavatar?size=small&pid=11050&avatarId=12021',
            '32x32' => 'https://jira.shazamteam.net/secure/projectavatar?size=medium&pid=11050&avatarId=12021',
            '48x48' => 'https://jira.shazamteam.net/secure/projectavatar?pid=11050&avatarId=12021',
          ),
          'projectCategory' => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/projectCategory/10081',
            'id' => '10081',
            'description' => 'Projects that concentrate on delivering a feature',
            'name' => 'Features',
          ),
        ),
        'versions' => 
        array (
          0 => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/version/14330',
            'id' => '14330',
            'description' => '',
            'name' => 'November 14',
            'archived' => false,
            'released' => false,
          ),
        ),
        'customfield_10170' => NULL,
        'environment' => NULL,
        'timeestimate' => NULL,
        'aggregateprogress' => 
        array (
          'progress' => 0,
          'total' => 0,
        ),
        'lastViewed' => NULL,
        'components' => 
        array (
          0 => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/component/11352',
            'id' => '11352',
            'name' => 'Recognition Algorithm',
            'description' => 'Recognition Algorithm',
          ),
        ),
        'timeoriginalestimate' => NULL,
        'aggregatetimespent' => NULL,
      ),
      'changelog' => 
      array (
        'startAt' => 0,
        'maxResults' => 4,
        'total' => 4,
        'histories' => 
        array (
          0 => 
          array (
            'id' => '944339',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=casey.baker',
              'name' => 'casey.baker',
              'emailAddress' => 'casey.baker@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=casey.baker&avatarId=12631',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=casey.baker&avatarId=12631',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=casey.baker&avatarId=12631',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=casey.baker&avatarId=12631',
              ),
              'displayName' => 'Casey Baker',
              'active' => true,
            ),
            'created' => '2014-11-17T15:52:30.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'status',
                'fieldtype' => 'jira',
                'from' => '1',
                'fromString' => 'Open',
                'to' => '10087',
                'toString' => 'November',
              ),
            ),
          ),
          1 => 
          array (
            'id' => '944667',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=casey.baker',
              'name' => 'casey.baker',
              'emailAddress' => 'casey.baker@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=casey.baker&avatarId=12631',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=casey.baker&avatarId=12631',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=casey.baker&avatarId=12631',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=casey.baker&avatarId=12631',
              ),
              'displayName' => 'Casey Baker',
              'active' => true,
            ),
            'created' => '2014-11-17T19:36:41.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'status',
                'fieldtype' => 'jira',
                'from' => '10087',
                'fromString' => 'November',
                'to' => '10088',
                'toString' => 'December',
              ),
            ),
          ),
          2 => 
          array (
            'id' => '944672',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=henrich',
              'name' => 'henrich',
              'emailAddress' => 'charles.henrich@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=henrich&avatarId=10443',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=henrich&avatarId=10443',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=henrich&avatarId=10443',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=henrich&avatarId=10443',
              ),
              'displayName' => 'Charles Henrich',
              'active' => true,
            ),
            'created' => '2014-11-17T20:02:45.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'status',
                'fieldtype' => 'jira',
                'from' => '10088',
                'fromString' => 'December',
                'to' => '10087',
                'toString' => 'November',
              ),
            ),
          ),
          3 => 
          array (
            'id' => '944673',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=henrich',
              'name' => 'henrich',
              'emailAddress' => 'charles.henrich@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=henrich&avatarId=10443',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=henrich&avatarId=10443',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=henrich&avatarId=10443',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=henrich&avatarId=10443',
              ),
              'displayName' => 'Charles Henrich',
              'active' => true,
            ),
            'created' => '2014-11-17T20:02:48.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Rank',
                'fieldtype' => 'custom',
                'from' => '',
                'fromString' => '',
                'to' => '',
                'toString' => 'Ranked higher',
              ),
            ),
          ),
        ),
      ),
    ),
    4 => 
    array (
      'expand' => 'editmeta,renderedFields,transitions,changelog,operations',
      'id' => '92078',
      'self' => 'https://jira.shazamteam.net/rest/api/2/issue/92078',
      'key' => 'SRM-862',
      'fields' => 
      array (
        'progress' => 
        array (
          'progress' => 0,
          'total' => 0,
        ),
        'summary' => 'Windows app support ',
        'customfield_11350' => NULL,
        'customfield_10114' => NULL,
        'customfield_10113' => NULL,
        'issuetype' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/issuetype/16',
          'id' => '16',
          'description' => 'A big user story that needs to be broken down.',
          'iconUrl' => 'https://jira.shazamteam.net/images/icons/issuetypes/epic.png',
          'name' => 'Epic',
          'subtask' => false,
        ),
        'customfield_10110' => NULL,
        'votes' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/issue/SRM-862/votes',
          'votes' => 0,
          'hasVoted' => false,
        ),
        'fixVersions' => 
        array (
          0 => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/version/14330',
            'id' => '14330',
            'description' => '',
            'name' => 'November 14',
            'archived' => false,
            'released' => false,
          ),
        ),
        'resolution' => NULL,
        'resolutiondate' => NULL,
        'timespent' => NULL,
        'reporter' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=david.shrimpton',
          'name' => 'david.shrimpton',
          'emailAddress' => 'david.shrimpton@shazamteam.com',
          'avatarUrls' => 
          array (
            '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=david.shrimpton&avatarId=11648',
            '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=david.shrimpton&avatarId=11648',
            '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=david.shrimpton&avatarId=11648',
            '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=david.shrimpton&avatarId=11648',
          ),
          'displayName' => 'David Shrimpton',
          'active' => true,
        ),
        'aggregatetimeoriginalestimate' => NULL,
        'customfield_10350' => NULL,
        'updated' => '2014-11-10T11:30:40.000+0000',
        'created' => '2014-11-10T07:58:34.000+0000',
        'description' => NULL,
        'priority' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/priority/4',
          'iconUrl' => 'https://jira.shazamteam.net/images/icons/priorities/minor.png',
          'name' => 'Minor',
          'id' => '4',
        ),
        'duedate' => NULL,
        'issuelinks' => 
        array (
        ),
        'customfield_10950' => NULL,
        'watches' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/issue/SRM-862/watchers',
          'watchCount' => 1,
          'isWatching' => false,
        ),
        'customfield_10024' => NULL,
        'subtasks' => 
        array (
        ),
        'status' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/status/10087',
          'description' => '',
          'iconUrl' => 'https://jira.shazamteam.net/images/icons/statuses/generic.png',
          'name' => 'November',
          'id' => '10087',
        ),
        'customfield_11250' => NULL,
        'customfield_10650' => NULL,
        'labels' => 
        array (
        ),
        'customfield_11150' => NULL,
        'customfield_10953' => '#dcedff',
        'workratio' => -1,
        'assignee' => NULL,
        'customfield_10951' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/customFieldOption/11200',
          'value' => 'To Do',
          'id' => '11200',
        ),
        'customfield_10952' => 'Windows app support ',
        'customfield_11050' => NULL,
        'customfield_10550' => NULL,
        'customfield_10250' => '71798',
        'aggregatetimeestimate' => NULL,
        'project' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/project/11050',
          'id' => '11050',
          'key' => 'SRM',
          'name' => 'Shazam Road Map',
          'avatarUrls' => 
          array (
            '16x16' => 'https://jira.shazamteam.net/secure/projectavatar?size=xsmall&pid=11050&avatarId=12021',
            '24x24' => 'https://jira.shazamteam.net/secure/projectavatar?size=small&pid=11050&avatarId=12021',
            '32x32' => 'https://jira.shazamteam.net/secure/projectavatar?size=medium&pid=11050&avatarId=12021',
            '48x48' => 'https://jira.shazamteam.net/secure/projectavatar?pid=11050&avatarId=12021',
          ),
          'projectCategory' => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/projectCategory/10081',
            'id' => '10081',
            'description' => 'Projects that concentrate on delivering a feature',
            'name' => 'Features',
          ),
        ),
        'versions' => 
        array (
          0 => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/version/14330',
            'id' => '14330',
            'description' => '',
            'name' => 'November 14',
            'archived' => false,
            'released' => false,
          ),
        ),
        'customfield_10170' => NULL,
        'environment' => NULL,
        'timeestimate' => NULL,
        'aggregateprogress' => 
        array (
          'progress' => 0,
          'total' => 0,
        ),
        'lastViewed' => NULL,
        'components' => 
        array (
          0 => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/component/11252',
            'id' => '11252',
            'name' => 'Web Team',
            'description' => 'Web Team',
          ),
        ),
        'timeoriginalestimate' => NULL,
        'aggregatetimespent' => NULL,
      ),
      'changelog' => 
      array (
        'startAt' => 0,
        'maxResults' => 2,
        'total' => 2,
        'histories' => 
        array (
          0 => 
          array (
            'id' => '936866',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=henrich',
              'name' => 'henrich',
              'emailAddress' => 'charles.henrich@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=henrich&avatarId=10443',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=henrich&avatarId=10443',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=henrich&avatarId=10443',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=henrich&avatarId=10443',
              ),
              'displayName' => 'Charles Henrich',
              'active' => true,
            ),
            'created' => '2014-11-10T11:30:32.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'status',
                'fieldtype' => 'jira',
                'from' => '1',
                'fromString' => 'Open',
                'to' => '10087',
                'toString' => 'November',
              ),
            ),
          ),
          1 => 
          array (
            'id' => '936867',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=henrich',
              'name' => 'henrich',
              'emailAddress' => 'charles.henrich@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=henrich&avatarId=10443',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=henrich&avatarId=10443',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=henrich&avatarId=10443',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=henrich&avatarId=10443',
              ),
              'displayName' => 'Charles Henrich',
              'active' => true,
            ),
            'created' => '2014-11-10T11:30:40.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Flagged',
                'fieldtype' => 'custom',
                'from' => '[10130]',
                'fromString' => 'Impediment',
                'to' => '',
                'toString' => '',
              ),
            ),
          ),
        ),
      ),
    ),
    5 => 
    array (
      'expand' => 'editmeta,renderedFields,transitions,changelog,operations',
      'id' => '91614',
      'self' => 'https://jira.shazamteam.net/rest/api/2/issue/91614',
      'key' => 'SRM-861',
      'fields' => 
      array (
        'progress' => 
        array (
          'progress' => 0,
          'total' => 0,
        ),
        'summary' => 'Menlo Park to Redwood City Office Move',
        'customfield_11350' => NULL,
        'customfield_10114' => NULL,
        'customfield_10113' => NULL,
        'issuetype' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/issuetype/16',
          'id' => '16',
          'description' => 'A big user story that needs to be broken down.',
          'iconUrl' => 'https://jira.shazamteam.net/images/icons/issuetypes/epic.png',
          'name' => 'Epic',
          'subtask' => false,
        ),
        'customfield_10110' => NULL,
        'votes' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/issue/SRM-861/votes',
          'votes' => 0,
          'hasVoted' => false,
        ),
        'fixVersions' => 
        array (
          0 => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/version/14330',
            'id' => '14330',
            'description' => '',
            'name' => 'November 14',
            'archived' => false,
            'released' => false,
          ),
        ),
        'resolution' => NULL,
        'resolutiondate' => NULL,
        'timespent' => NULL,
        'reporter' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=david.shrimpton',
          'name' => 'david.shrimpton',
          'emailAddress' => 'david.shrimpton@shazamteam.com',
          'avatarUrls' => 
          array (
            '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=david.shrimpton&avatarId=11648',
            '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=david.shrimpton&avatarId=11648',
            '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=david.shrimpton&avatarId=11648',
            '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=david.shrimpton&avatarId=11648',
          ),
          'displayName' => 'David Shrimpton',
          'active' => true,
        ),
        'aggregatetimeoriginalestimate' => NULL,
        'customfield_10350' => NULL,
        'updated' => '2014-11-19T16:45:13.000+0000',
        'created' => '2014-11-04T11:19:24.000+0000',
        'description' => NULL,
        'priority' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/priority/4',
          'iconUrl' => 'https://jira.shazamteam.net/images/icons/priorities/minor.png',
          'name' => 'Minor',
          'id' => '4',
        ),
        'duedate' => NULL,
        'issuelinks' => 
        array (
        ),
        'customfield_10950' => NULL,
        'watches' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/issue/SRM-861/watchers',
          'watchCount' => 1,
          'isWatching' => false,
        ),
        'customfield_10024' => NULL,
        'subtasks' => 
        array (
        ),
        'status' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/status/3',
          'description' => 'This issue is being actively worked on at the moment by the assignee.',
          'iconUrl' => 'https://jira.shazamteam.net/images/icons/statuses/assigned.png',
          'name' => 'In Progress',
          'id' => '3',
        ),
        'customfield_11250' => NULL,
        'customfield_10650' => NULL,
        'labels' => 
        array (
        ),
        'customfield_11150' => NULL,
        'customfield_10953' => '#eacda0',
        'workratio' => -1,
        'assignee' => NULL,
        'customfield_10951' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/customFieldOption/11200',
          'value' => 'To Do',
          'id' => '11200',
        ),
        'customfield_10952' => 'Menlo Park to Redwood City Office Move',
        'customfield_11050' => NULL,
        'customfield_10550' => NULL,
        'customfield_10250' => '71415',
        'aggregatetimeestimate' => NULL,
        'project' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/project/11050',
          'id' => '11050',
          'key' => 'SRM',
          'name' => 'Shazam Road Map',
          'avatarUrls' => 
          array (
            '16x16' => 'https://jira.shazamteam.net/secure/projectavatar?size=xsmall&pid=11050&avatarId=12021',
            '24x24' => 'https://jira.shazamteam.net/secure/projectavatar?size=small&pid=11050&avatarId=12021',
            '32x32' => 'https://jira.shazamteam.net/secure/projectavatar?size=medium&pid=11050&avatarId=12021',
            '48x48' => 'https://jira.shazamteam.net/secure/projectavatar?pid=11050&avatarId=12021',
          ),
          'projectCategory' => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/projectCategory/10081',
            'id' => '10081',
            'description' => 'Projects that concentrate on delivering a feature',
            'name' => 'Features',
          ),
        ),
        'versions' => 
        array (
          0 => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/version/14330',
            'id' => '14330',
            'description' => '',
            'name' => 'November 14',
            'archived' => false,
            'released' => false,
          ),
        ),
        'customfield_10170' => NULL,
        'environment' => NULL,
        'timeestimate' => NULL,
        'aggregateprogress' => 
        array (
          'progress' => 0,
          'total' => 0,
        ),
        'lastViewed' => NULL,
        'components' => 
        array (
          0 => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/component/11258',
            'id' => '11258',
            'name' => 'Infrastructure Ops',
            'description' => 'Infrastructure Operations',
          ),
        ),
        'timeoriginalestimate' => NULL,
        'aggregatetimespent' => NULL,
      ),
      'changelog' => 
      array (
        'startAt' => 0,
        'maxResults' => 21,
        'total' => 21,
        'histories' => 
        array (
          0 => 
          array (
            'id' => '931648',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=david.shrimpton',
              'name' => 'david.shrimpton',
              'emailAddress' => 'david.shrimpton@shazamteam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=david.shrimpton&avatarId=11648',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=david.shrimpton&avatarId=11648',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=david.shrimpton&avatarId=11648',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=david.shrimpton&avatarId=11648',
              ),
              'displayName' => 'David Shrimpton',
              'active' => true,
            ),
            'created' => '2014-11-04T11:19:49.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'status',
                'fieldtype' => 'jira',
                'from' => '1',
                'fromString' => 'Open',
                'to' => '10087',
                'toString' => 'November',
              ),
            ),
          ),
          1 => 
          array (
            'id' => '931653',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T11:21:44.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'status',
                'fieldtype' => 'jira',
                'from' => '10087',
                'fromString' => 'November',
                'to' => '3',
                'toString' => 'In Progress',
              ),
            ),
          ),
          2 => 
          array (
            'id' => '931736',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T11:52:34.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '90514',
                'toString' => 'OPS-17869',
              ),
            ),
          ),
          3 => 
          array (
            'id' => '931738',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T11:52:34.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '90507',
                'toString' => 'OPS-17863',
              ),
            ),
          ),
          4 => 
          array (
            'id' => '931740',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T11:52:34.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '90509',
                'toString' => 'OPS-17865',
              ),
            ),
          ),
          5 => 
          array (
            'id' => '931742',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T11:52:34.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '90508',
                'toString' => 'OPS-17864',
              ),
            ),
          ),
          6 => 
          array (
            'id' => '931744',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T11:52:34.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '89559',
                'toString' => 'OPS-17729',
              ),
            ),
          ),
          7 => 
          array (
            'id' => '931746',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T11:52:35.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '91248',
                'toString' => 'OPS-17982',
              ),
            ),
          ),
          8 => 
          array (
            'id' => '931748',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T11:52:35.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '90513',
                'toString' => 'OPS-17868',
              ),
            ),
          ),
          9 => 
          array (
            'id' => '931750',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T11:52:35.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '90511',
                'toString' => 'OPS-17866',
              ),
            ),
          ),
          10 => 
          array (
            'id' => '931752',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T11:52:35.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '91466',
                'toString' => 'OPS-18020',
              ),
            ),
          ),
          11 => 
          array (
            'id' => '931754',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T11:52:35.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '90512',
                'toString' => 'OPS-17867',
              ),
            ),
          ),
          12 => 
          array (
            'id' => '931756',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T11:52:35.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '89644',
                'toString' => 'OPS-17744',
              ),
            ),
          ),
          13 => 
          array (
            'id' => '931758',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T11:52:36.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '91118',
                'toString' => 'OPS-17969',
              ),
            ),
          ),
          14 => 
          array (
            'id' => '931760',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T11:52:36.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '91465',
                'toString' => 'OPS-18019',
              ),
            ),
          ),
          15 => 
          array (
            'id' => '947547',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=james.ho',
              'name' => 'james.ho',
              'emailAddress' => 'james.ho@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=james.ho&avatarId=12026',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=james.ho&avatarId=12026',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=james.ho&avatarId=12026',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=james.ho&avatarId=12026',
              ),
              'displayName' => 'James Ho',
              'active' => true,
            ),
            'created' => '2014-11-19T10:58:23.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '92840',
                'toString' => 'OPS-18264',
              ),
            ),
          ),
          16 => 
          array (
            'id' => '947549',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=james.ho',
              'name' => 'james.ho',
              'emailAddress' => 'james.ho@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=james.ho&avatarId=12026',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=james.ho&avatarId=12026',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=james.ho&avatarId=12026',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=james.ho&avatarId=12026',
              ),
              'displayName' => 'James Ho',
              'active' => true,
            ),
            'created' => '2014-11-19T10:58:33.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '92841',
                'toString' => 'OPS-18265',
              ),
            ),
          ),
          17 => 
          array (
            'id' => '947551',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=james.ho',
              'name' => 'james.ho',
              'emailAddress' => 'james.ho@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=james.ho&avatarId=12026',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=james.ho&avatarId=12026',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=james.ho&avatarId=12026',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=james.ho&avatarId=12026',
              ),
              'displayName' => 'James Ho',
              'active' => true,
            ),
            'created' => '2014-11-19T10:58:43.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '92862',
                'toString' => 'OPS-18270',
              ),
            ),
          ),
          18 => 
          array (
            'id' => '947553',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=james.ho',
              'name' => 'james.ho',
              'emailAddress' => 'james.ho@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=james.ho&avatarId=12026',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=james.ho&avatarId=12026',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=james.ho&avatarId=12026',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=james.ho&avatarId=12026',
              ),
              'displayName' => 'James Ho',
              'active' => true,
            ),
            'created' => '2014-11-19T10:58:52.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '92863',
                'toString' => 'OPS-18271',
              ),
            ),
          ),
          19 => 
          array (
            'id' => '947927',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=james.ho',
              'name' => 'james.ho',
              'emailAddress' => 'james.ho@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=james.ho&avatarId=12026',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=james.ho&avatarId=12026',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=james.ho&avatarId=12026',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=james.ho&avatarId=12026',
              ),
              'displayName' => 'James Ho',
              'active' => true,
            ),
            'created' => '2014-11-19T16:45:13.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '92955',
                'toString' => 'OPS-18289',
              ),
            ),
          ),
          20 => 
          array (
            'id' => '947930',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=james.ho',
              'name' => 'james.ho',
              'emailAddress' => 'james.ho@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=james.ho&avatarId=12026',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=james.ho&avatarId=12026',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=james.ho&avatarId=12026',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=james.ho&avatarId=12026',
              ),
              'displayName' => 'James Ho',
              'active' => true,
            ),
            'created' => '2014-11-19T16:45:48.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '92956',
                'toString' => 'OPS-18290',
              ),
            ),
          ),
        ),
      ),
    ),
    6 => 
    array (
      'expand' => 'editmeta,renderedFields,transitions,changelog,operations',
      'id' => '91613',
      'self' => 'https://jira.shazamteam.net/rest/api/2/issue/91613',
      'key' => 'SRM-860',
      'fields' => 
      array (
        'progress' => 
        array (
          'progress' => 0,
          'total' => 0,
        ),
        'summary' => 'Windows Encryption Solution',
        'customfield_11350' => NULL,
        'customfield_10114' => NULL,
        'customfield_10113' => NULL,
        'issuetype' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/issuetype/16',
          'id' => '16',
          'description' => 'A big user story that needs to be broken down.',
          'iconUrl' => 'https://jira.shazamteam.net/images/icons/issuetypes/epic.png',
          'name' => 'Epic',
          'subtask' => false,
        ),
        'customfield_10110' => NULL,
        'votes' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/issue/SRM-860/votes',
          'votes' => 0,
          'hasVoted' => false,
        ),
        'fixVersions' => 
        array (
          0 => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/version/14330',
            'id' => '14330',
            'description' => '',
            'name' => 'November 14',
            'archived' => false,
            'released' => false,
          ),
        ),
        'resolution' => NULL,
        'resolutiondate' => NULL,
        'timespent' => NULL,
        'reporter' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=david.shrimpton',
          'name' => 'david.shrimpton',
          'emailAddress' => 'david.shrimpton@shazamteam.com',
          'avatarUrls' => 
          array (
            '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=david.shrimpton&avatarId=11648',
            '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=david.shrimpton&avatarId=11648',
            '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=david.shrimpton&avatarId=11648',
            '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=david.shrimpton&avatarId=11648',
          ),
          'displayName' => 'David Shrimpton',
          'active' => true,
        ),
        'aggregatetimeoriginalestimate' => NULL,
        'customfield_10350' => NULL,
        'updated' => '2014-11-11T17:25:11.000+0000',
        'created' => '2014-11-04T11:18:08.000+0000',
        'description' => NULL,
        'priority' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/priority/4',
          'iconUrl' => 'https://jira.shazamteam.net/images/icons/priorities/minor.png',
          'name' => 'Minor',
          'id' => '4',
        ),
        'duedate' => NULL,
        'issuelinks' => 
        array (
        ),
        'customfield_10950' => NULL,
        'watches' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/issue/SRM-860/watchers',
          'watchCount' => 1,
          'isWatching' => false,
        ),
        'customfield_10024' => NULL,
        'subtasks' => 
        array (
        ),
        'status' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/status/3',
          'description' => 'This issue is being actively worked on at the moment by the assignee.',
          'iconUrl' => 'https://jira.shazamteam.net/images/icons/statuses/assigned.png',
          'name' => 'In Progress',
          'id' => '3',
        ),
        'customfield_11250' => NULL,
        'customfield_10650' => NULL,
        'labels' => 
        array (
        ),
        'customfield_11150' => NULL,
        'customfield_10953' => '#fdf4bb',
        'workratio' => -1,
        'assignee' => NULL,
        'customfield_10951' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/customFieldOption/11200',
          'value' => 'To Do',
          'id' => '11200',
        ),
        'customfield_10952' => 'Windows Encryption Solution',
        'customfield_11050' => NULL,
        'customfield_10550' => NULL,
        'customfield_10250' => '71414',
        'aggregatetimeestimate' => NULL,
        'project' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/project/11050',
          'id' => '11050',
          'key' => 'SRM',
          'name' => 'Shazam Road Map',
          'avatarUrls' => 
          array (
            '16x16' => 'https://jira.shazamteam.net/secure/projectavatar?size=xsmall&pid=11050&avatarId=12021',
            '24x24' => 'https://jira.shazamteam.net/secure/projectavatar?size=small&pid=11050&avatarId=12021',
            '32x32' => 'https://jira.shazamteam.net/secure/projectavatar?size=medium&pid=11050&avatarId=12021',
            '48x48' => 'https://jira.shazamteam.net/secure/projectavatar?pid=11050&avatarId=12021',
          ),
          'projectCategory' => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/projectCategory/10081',
            'id' => '10081',
            'description' => 'Projects that concentrate on delivering a feature',
            'name' => 'Features',
          ),
        ),
        'versions' => 
        array (
          0 => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/version/14330',
            'id' => '14330',
            'description' => '',
            'name' => 'November 14',
            'archived' => false,
            'released' => false,
          ),
        ),
        'customfield_10170' => NULL,
        'environment' => NULL,
        'timeestimate' => NULL,
        'aggregateprogress' => 
        array (
          'progress' => 0,
          'total' => 0,
        ),
        'lastViewed' => NULL,
        'components' => 
        array (
          0 => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/component/11258',
            'id' => '11258',
            'name' => 'Infrastructure Ops',
            'description' => 'Infrastructure Operations',
          ),
        ),
        'timeoriginalestimate' => NULL,
        'aggregatetimespent' => NULL,
      ),
      'changelog' => 
      array (
        'startAt' => 0,
        'maxResults' => 36,
        'total' => 36,
        'histories' => 
        array (
          0 => 
          array (
            'id' => '931647',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=david.shrimpton',
              'name' => 'david.shrimpton',
              'emailAddress' => 'david.shrimpton@shazamteam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=david.shrimpton&avatarId=11648',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=david.shrimpton&avatarId=11648',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=david.shrimpton&avatarId=11648',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=david.shrimpton&avatarId=11648',
              ),
              'displayName' => 'David Shrimpton',
              'active' => true,
            ),
            'created' => '2014-11-04T11:19:45.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'status',
                'fieldtype' => 'jira',
                'from' => '1',
                'fromString' => 'Open',
                'to' => '10087',
                'toString' => 'November',
              ),
            ),
          ),
          1 => 
          array (
            'id' => '931652',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T11:21:42.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'status',
                'fieldtype' => 'jira',
                'from' => '10087',
                'fromString' => 'November',
                'to' => '3',
                'toString' => 'In Progress',
              ),
            ),
          ),
          2 => 
          array (
            'id' => '931697',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T11:50:11.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '90538',
                'toString' => 'OPS-17878',
              ),
            ),
          ),
          3 => 
          array (
            'id' => '931699',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T11:50:11.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '90533',
                'toString' => 'OPS-17874',
              ),
            ),
          ),
          4 => 
          array (
            'id' => '931701',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T11:50:11.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '90534',
                'toString' => 'OPS-17875',
              ),
            ),
          ),
          5 => 
          array (
            'id' => '931703',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T11:50:11.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '90213',
                'toString' => 'OPS-17828',
              ),
            ),
          ),
          6 => 
          array (
            'id' => '931705',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T11:50:11.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '90535',
                'toString' => 'OPS-17876',
              ),
            ),
          ),
          7 => 
          array (
            'id' => '931707',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T11:50:11.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '91249',
                'toString' => 'OPS-17983',
              ),
            ),
          ),
          8 => 
          array (
            'id' => '931709',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T11:50:12.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '90540',
                'toString' => 'OPS-17880',
              ),
            ),
          ),
          9 => 
          array (
            'id' => '931711',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T11:50:12.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '90530',
                'toString' => 'OPS-17871',
              ),
            ),
          ),
          10 => 
          array (
            'id' => '931713',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T11:50:12.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '90541',
                'toString' => 'OPS-17881',
              ),
            ),
          ),
          11 => 
          array (
            'id' => '931715',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T11:50:12.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '90207',
                'toString' => 'OPS-17827',
              ),
            ),
          ),
          12 => 
          array (
            'id' => '931717',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T11:50:12.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '90537',
                'toString' => 'OPS-17877',
              ),
            ),
          ),
          13 => 
          array (
            'id' => '931719',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T11:50:12.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '90539',
                'toString' => 'OPS-17879',
              ),
            ),
          ),
          14 => 
          array (
            'id' => '931721',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T11:50:13.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '90529',
                'toString' => 'OPS-17870',
              ),
            ),
          ),
          15 => 
          array (
            'id' => '931723',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T11:50:13.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '90532',
                'toString' => 'OPS-17873',
              ),
            ),
          ),
          16 => 
          array (
            'id' => '931725',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T11:50:13.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '90531',
                'toString' => 'OPS-17872',
              ),
            ),
          ),
          17 => 
          array (
            'id' => '932262',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-04T17:31:04.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '91661',
                'toString' => 'OPS-18042',
              ),
            ),
          ),
          18 => 
          array (
            'id' => '933235',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-05T15:03:12.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '91760',
                'toString' => 'OPS-18071',
              ),
            ),
          ),
          19 => 
          array (
            'id' => '933241',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-05T15:04:42.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '91761',
                'toString' => 'OPS-18072',
              ),
            ),
          ),
          20 => 
          array (
            'id' => '933252',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-05T15:06:13.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '91762',
                'toString' => 'OPS-18073',
              ),
            ),
          ),
          21 => 
          array (
            'id' => '933257',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-05T15:07:34.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '91763',
                'toString' => 'OPS-18074',
              ),
            ),
          ),
          22 => 
          array (
            'id' => '933259',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-05T15:08:37.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '91764',
                'toString' => 'OPS-18075',
              ),
            ),
          ),
          23 => 
          array (
            'id' => '933263',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-05T15:11:39.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '91766',
                'toString' => 'OPS-18076',
              ),
            ),
          ),
          24 => 
          array (
            'id' => '933266',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-05T15:12:24.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '91767',
                'toString' => 'OPS-18077',
              ),
            ),
          ),
          25 => 
          array (
            'id' => '933269',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-05T15:13:32.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '91769',
                'toString' => 'OPS-18078',
              ),
            ),
          ),
          26 => 
          array (
            'id' => '933272',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-05T15:14:32.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '91770',
                'toString' => 'OPS-18079',
              ),
            ),
          ),
          27 => 
          array (
            'id' => '940270',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-11T17:23:10.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => '91770',
                'fromString' => 'OPS-18079',
                'to' => NULL,
                'toString' => NULL,
              ),
            ),
          ),
          28 => 
          array (
            'id' => '940279',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-11T17:25:08.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => '91761',
                'fromString' => 'OPS-18072',
                'to' => NULL,
                'toString' => NULL,
              ),
            ),
          ),
          29 => 
          array (
            'id' => '940282',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-11T17:25:08.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => '91769',
                'fromString' => 'OPS-18078',
                'to' => NULL,
                'toString' => NULL,
              ),
            ),
          ),
          30 => 
          array (
            'id' => '940285',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-11T17:25:09.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => '91762',
                'fromString' => 'OPS-18073',
                'to' => NULL,
                'toString' => NULL,
              ),
            ),
          ),
          31 => 
          array (
            'id' => '940292',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-11T17:25:10.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => '91760',
                'fromString' => 'OPS-18071',
                'to' => NULL,
                'toString' => NULL,
              ),
            ),
          ),
          32 => 
          array (
            'id' => '940295',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-11T17:25:10.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => '91763',
                'fromString' => 'OPS-18074',
                'to' => NULL,
                'toString' => NULL,
              ),
            ),
          ),
          33 => 
          array (
            'id' => '940298',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-11T17:25:10.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => '91767',
                'fromString' => 'OPS-18077',
                'to' => NULL,
                'toString' => NULL,
              ),
            ),
          ),
          34 => 
          array (
            'id' => '940301',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-11T17:25:11.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => '91766',
                'fromString' => 'OPS-18076',
                'to' => NULL,
                'toString' => NULL,
              ),
            ),
          ),
          35 => 
          array (
            'id' => '940304',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=sonny.lam',
              'name' => 'sonny.lam',
              'emailAddress' => 'sonny.lam@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=sonny.lam&avatarId=10525',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=sonny.lam&avatarId=10525',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=sonny.lam&avatarId=10525',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=sonny.lam&avatarId=10525',
              ),
              'displayName' => 'Sonny Lam',
              'active' => true,
            ),
            'created' => '2014-11-11T17:25:11.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => '91764',
                'fromString' => 'OPS-18075',
                'to' => NULL,
                'toString' => NULL,
              ),
            ),
          ),
        ),
      ),
    ),
    7 => 
    array (
      'expand' => 'editmeta,renderedFields,transitions,changelog,operations',
      'id' => '90790',
      'self' => 'https://jira.shazamteam.net/rest/api/2/issue/90790',
      'key' => 'SRM-858',
      'fields' => 
      array (
        'progress' => 
        array (
          'progress' => 0,
          'total' => 0,
        ),
        'summary' => 'Embeddable chart widget',
        'customfield_11350' => NULL,
        'customfield_10114' => NULL,
        'customfield_10113' => NULL,
        'issuetype' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/issuetype/16',
          'id' => '16',
          'description' => 'A big user story that needs to be broken down.',
          'iconUrl' => 'https://jira.shazamteam.net/images/icons/issuetypes/epic.png',
          'name' => 'Epic',
          'subtask' => false,
        ),
        'customfield_10110' => NULL,
        'votes' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/issue/SRM-858/votes',
          'votes' => 0,
          'hasVoted' => false,
        ),
        'fixVersions' => 
        array (
        ),
        'resolution' => NULL,
        'resolutiondate' => NULL,
        'timespent' => NULL,
        'reporter' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=henrich',
          'name' => 'henrich',
          'emailAddress' => 'charles.henrich@shazam.com',
          'avatarUrls' => 
          array (
            '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=henrich&avatarId=10443',
            '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=henrich&avatarId=10443',
            '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=henrich&avatarId=10443',
            '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=henrich&avatarId=10443',
          ),
          'displayName' => 'Charles Henrich',
          'active' => true,
        ),
        'aggregatetimeoriginalestimate' => NULL,
        'customfield_10350' => NULL,
        'updated' => '2014-11-02T22:46:30.000+0000',
        'created' => '2014-10-24T17:09:45.000+0100',
        'description' => 'We need an iframable simple web widget that shows a chart that a local news website for example could embed into their own site. ',
        'priority' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/priority/3',
          'iconUrl' => 'https://jira.shazamteam.net/images/icons/priorities/major.png',
          'name' => 'Major',
          'id' => '3',
        ),
        'duedate' => NULL,
        'issuelinks' => 
        array (
        ),
        'customfield_10950' => NULL,
        'watches' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/issue/SRM-858/watchers',
          'watchCount' => 1,
          'isWatching' => false,
        ),
        'customfield_10024' => NULL,
        'subtasks' => 
        array (
        ),
        'status' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/status/10088',
          'description' => '',
          'iconUrl' => 'https://jira.shazamteam.net/images/icons/statuses/generic.png',
          'name' => 'December',
          'id' => '10088',
        ),
        'customfield_11250' => NULL,
        'customfield_10650' => NULL,
        'labels' => 
        array (
        ),
        'customfield_11150' => NULL,
        'customfield_10953' => '#dcedff',
        'workratio' => -1,
        'assignee' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=suchema.oyetey',
          'name' => 'suchema.oyetey',
          'emailAddress' => 'suchema.oyetey@shazam.com',
          'avatarUrls' => 
          array (
            '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=suchema.oyetey&avatarId=10449',
            '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=suchema.oyetey&avatarId=10449',
            '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=suchema.oyetey&avatarId=10449',
            '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=suchema.oyetey&avatarId=10449',
          ),
          'displayName' => 'Suchema Oyetey',
          'active' => true,
        ),
        'customfield_10951' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/customFieldOption/11200',
          'value' => 'To Do',
          'id' => '11200',
        ),
        'customfield_10952' => 'Embeddable chart widget',
        'customfield_11050' => NULL,
        'customfield_10550' => NULL,
        'customfield_10250' => '70782',
        'aggregatetimeestimate' => NULL,
        'project' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/project/11050',
          'id' => '11050',
          'key' => 'SRM',
          'name' => 'Shazam Road Map',
          'avatarUrls' => 
          array (
            '16x16' => 'https://jira.shazamteam.net/secure/projectavatar?size=xsmall&pid=11050&avatarId=12021',
            '24x24' => 'https://jira.shazamteam.net/secure/projectavatar?size=small&pid=11050&avatarId=12021',
            '32x32' => 'https://jira.shazamteam.net/secure/projectavatar?size=medium&pid=11050&avatarId=12021',
            '48x48' => 'https://jira.shazamteam.net/secure/projectavatar?pid=11050&avatarId=12021',
          ),
          'projectCategory' => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/projectCategory/10081',
            'id' => '10081',
            'description' => 'Projects that concentrate on delivering a feature',
            'name' => 'Features',
          ),
        ),
        'versions' => 
        array (
        ),
        'customfield_10170' => NULL,
        'environment' => NULL,
        'timeestimate' => NULL,
        'aggregateprogress' => 
        array (
          'progress' => 0,
          'total' => 0,
        ),
        'lastViewed' => NULL,
        'components' => 
        array (
          0 => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/component/11252',
            'id' => '11252',
            'name' => 'Web Team',
            'description' => 'Web Team',
          ),
        ),
        'timeoriginalestimate' => NULL,
        'aggregatetimespent' => NULL,
      ),
      'changelog' => 
      array (
        'startAt' => 0,
        'maxResults' => 2,
        'total' => 2,
        'histories' => 
        array (
          0 => 
          array (
            'id' => '926547',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=henrich',
              'name' => 'henrich',
              'emailAddress' => 'charles.henrich@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=henrich&avatarId=10443',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=henrich&avatarId=10443',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=henrich&avatarId=10443',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=henrich&avatarId=10443',
              ),
              'displayName' => 'Charles Henrich',
              'active' => true,
            ),
            'created' => '2014-10-24T17:09:50.000+0100',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'status',
                'fieldtype' => 'jira',
                'from' => '1',
                'fromString' => 'Open',
                'to' => '10087',
                'toString' => 'November',
              ),
            ),
          ),
          1 => 
          array (
            'id' => '930272',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=henrich',
              'name' => 'henrich',
              'emailAddress' => 'charles.henrich@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=henrich&avatarId=10443',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=henrich&avatarId=10443',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=henrich&avatarId=10443',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=henrich&avatarId=10443',
              ),
              'displayName' => 'Charles Henrich',
              'active' => true,
            ),
            'created' => '2014-11-02T22:46:30.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'status',
                'fieldtype' => 'jira',
                'from' => '10087',
                'fromString' => 'November',
                'to' => '10088',
                'toString' => 'December',
              ),
            ),
          ),
        ),
      ),
    ),
    8 => 
    array (
      'expand' => 'editmeta,renderedFields,transitions,changelog,operations',
      'id' => '90355',
      'self' => 'https://jira.shazamteam.net/rest/api/2/issue/90355',
      'key' => 'SRM-857',
      'fields' => 
      array (
        'progress' => 
        array (
          'progress' => 0,
          'total' => 0,
        ),
        'summary' => 'Comprehensive Capacity Graphing',
        'customfield_11350' => NULL,
        'customfield_10114' => NULL,
        'customfield_10113' => NULL,
        'issuetype' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/issuetype/16',
          'id' => '16',
          'description' => 'A big user story that needs to be broken down.',
          'iconUrl' => 'https://jira.shazamteam.net/images/icons/issuetypes/epic.png',
          'name' => 'Epic',
          'subtask' => false,
        ),
        'customfield_10110' => NULL,
        'votes' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/issue/SRM-857/votes',
          'votes' => 0,
          'hasVoted' => false,
        ),
        'fixVersions' => 
        array (
          0 => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/version/14330',
            'id' => '14330',
            'description' => '',
            'name' => 'November 14',
            'archived' => false,
            'released' => false,
          ),
        ),
        'resolution' => NULL,
        'resolutiondate' => NULL,
        'timespent' => NULL,
        'reporter' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=david.shrimpton',
          'name' => 'david.shrimpton',
          'emailAddress' => 'david.shrimpton@shazamteam.com',
          'avatarUrls' => 
          array (
            '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=david.shrimpton&avatarId=11648',
            '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=david.shrimpton&avatarId=11648',
            '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=david.shrimpton&avatarId=11648',
            '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=david.shrimpton&avatarId=11648',
          ),
          'displayName' => 'David Shrimpton',
          'active' => true,
        ),
        'aggregatetimeoriginalestimate' => NULL,
        'customfield_10350' => NULL,
        'updated' => '2014-11-04T16:43:14.000+0000',
        'created' => '2014-10-19T15:33:26.000+0100',
        'description' => 'This should give us capacity graphs for every one of our production systems (e.g. recognition, ingestion, etc.).',
        'priority' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/priority/4',
          'iconUrl' => 'https://jira.shazamteam.net/images/icons/priorities/minor.png',
          'name' => 'Minor',
          'id' => '4',
        ),
        'duedate' => NULL,
        'issuelinks' => 
        array (
        ),
        'customfield_10950' => NULL,
        'watches' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/issue/SRM-857/watchers',
          'watchCount' => 1,
          'isWatching' => false,
        ),
        'customfield_10024' => NULL,
        'subtasks' => 
        array (
        ),
        'status' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/status/10088',
          'description' => '',
          'iconUrl' => 'https://jira.shazamteam.net/images/icons/statuses/generic.png',
          'name' => 'December',
          'id' => '10088',
        ),
        'customfield_11250' => NULL,
        'customfield_10650' => NULL,
        'labels' => 
        array (
        ),
        'customfield_11150' => NULL,
        'customfield_10953' => '#eacda0',
        'workratio' => -1,
        'assignee' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=ben.belchak',
          'name' => 'ben.belchak',
          'emailAddress' => 'ben.belchak@shazam.com',
          'avatarUrls' => 
          array (
            '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&avatarId=10242',
            '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&avatarId=10242',
            '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&avatarId=10242',
            '48x48' => 'https://jira.shazamteam.net/secure/useravatar?avatarId=10242',
          ),
          'displayName' => 'Ben Belchak',
          'active' => true,
        ),
        'customfield_10951' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/customFieldOption/11200',
          'value' => 'To Do',
          'id' => '11200',
        ),
        'customfield_10952' => 'Comprehensive Capacity Graphing',
        'customfield_11050' => NULL,
        'customfield_10550' => NULL,
        'customfield_10250' => '70405',
        'aggregatetimeestimate' => NULL,
        'project' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/project/11050',
          'id' => '11050',
          'key' => 'SRM',
          'name' => 'Shazam Road Map',
          'avatarUrls' => 
          array (
            '16x16' => 'https://jira.shazamteam.net/secure/projectavatar?size=xsmall&pid=11050&avatarId=12021',
            '24x24' => 'https://jira.shazamteam.net/secure/projectavatar?size=small&pid=11050&avatarId=12021',
            '32x32' => 'https://jira.shazamteam.net/secure/projectavatar?size=medium&pid=11050&avatarId=12021',
            '48x48' => 'https://jira.shazamteam.net/secure/projectavatar?pid=11050&avatarId=12021',
          ),
          'projectCategory' => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/projectCategory/10081',
            'id' => '10081',
            'description' => 'Projects that concentrate on delivering a feature',
            'name' => 'Features',
          ),
        ),
        'versions' => 
        array (
          0 => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/version/14330',
            'id' => '14330',
            'description' => '',
            'name' => 'November 14',
            'archived' => false,
            'released' => false,
          ),
        ),
        'customfield_10170' => NULL,
        'environment' => NULL,
        'timeestimate' => NULL,
        'aggregateprogress' => 
        array (
          'progress' => 0,
          'total' => 0,
        ),
        'lastViewed' => NULL,
        'components' => 
        array (
          0 => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/component/11261',
            'id' => '11261',
            'name' => 'Service Engineering',
            'description' => 'Service Engineer\'s UK',
          ),
        ),
        'timeoriginalestimate' => NULL,
        'aggregatetimespent' => NULL,
      ),
      'changelog' => 
      array (
        'startAt' => 0,
        'maxResults' => 2,
        'total' => 2,
        'histories' => 
        array (
          0 => 
          array (
            'id' => '921461',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=david.shrimpton',
              'name' => 'david.shrimpton',
              'emailAddress' => 'david.shrimpton@shazamteam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=david.shrimpton&avatarId=11648',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=david.shrimpton&avatarId=11648',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=david.shrimpton&avatarId=11648',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=david.shrimpton&avatarId=11648',
              ),
              'displayName' => 'David Shrimpton',
              'active' => true,
            ),
            'created' => '2014-10-19T15:33:35.000+0100',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'status',
                'fieldtype' => 'jira',
                'from' => '1',
                'fromString' => 'Open',
                'to' => '10087',
                'toString' => 'November',
              ),
            ),
          ),
          1 => 
          array (
            'id' => '932171',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=ben.belchak',
              'name' => 'ben.belchak',
              'emailAddress' => 'ben.belchak@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&avatarId=10242',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&avatarId=10242',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&avatarId=10242',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?avatarId=10242',
              ),
              'displayName' => 'Ben Belchak',
              'active' => true,
            ),
            'created' => '2014-11-04T16:43:14.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'status',
                'fieldtype' => 'jira',
                'from' => '10087',
                'fromString' => 'November',
                'to' => '10088',
                'toString' => 'December',
              ),
            ),
          ),
        ),
      ),
    ),
    9 => 
    array (
      'expand' => 'editmeta,renderedFields,transitions,changelog,operations',
      'id' => '90277',
      'self' => 'https://jira.shazamteam.net/rest/api/2/issue/90277',
      'key' => 'SRM-856',
      'fields' => 
      array (
        'progress' => 
        array (
          'progress' => 0,
          'total' => 0,
        ),
        'summary' => 'Spotify Ingestion',
        'customfield_11350' => NULL,
        'customfield_10114' => NULL,
        'customfield_10113' => NULL,
        'issuetype' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/issuetype/16',
          'id' => '16',
          'description' => 'A big user story that needs to be broken down.',
          'iconUrl' => 'https://jira.shazamteam.net/images/icons/issuetypes/epic.png',
          'name' => 'Epic',
          'subtask' => false,
        ),
        'customfield_10110' => NULL,
        'votes' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/issue/SRM-856/votes',
          'votes' => 0,
          'hasVoted' => false,
        ),
        'fixVersions' => 
        array (
          0 => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/version/14131',
            'id' => '14131',
            'name' => 'October 14',
            'archived' => false,
            'released' => false,
          ),
        ),
        'resolution' => NULL,
        'resolutiondate' => NULL,
        'timespent' => NULL,
        'reporter' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=richard.tang',
          'name' => 'richard.tang',
          'emailAddress' => 'richard.tang@shazam.com',
          'avatarUrls' => 
          array (
            '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=richard.tang&avatarId=12020',
            '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=richard.tang&avatarId=12020',
            '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=richard.tang&avatarId=12020',
            '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=richard.tang&avatarId=12020',
          ),
          'displayName' => 'Richard Tang',
          'active' => true,
        ),
        'aggregatetimeoriginalestimate' => NULL,
        'customfield_10350' => NULL,
        'updated' => '2014-11-17T14:00:05.000+0000',
        'created' => '2014-10-17T11:24:01.000+0100',
        'description' => NULL,
        'priority' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/priority/4',
          'iconUrl' => 'https://jira.shazamteam.net/images/icons/priorities/minor.png',
          'name' => 'Minor',
          'id' => '4',
        ),
        'duedate' => NULL,
        'issuelinks' => 
        array (
        ),
        'customfield_10950' => NULL,
        'watches' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/issue/SRM-856/watchers',
          'watchCount' => 1,
          'isWatching' => false,
        ),
        'customfield_10024' => NULL,
        'subtasks' => 
        array (
        ),
        'status' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/status/3',
          'description' => 'This issue is being actively worked on at the moment by the assignee.',
          'iconUrl' => 'https://jira.shazamteam.net/images/icons/statuses/assigned.png',
          'name' => 'In Progress',
          'id' => '3',
        ),
        'customfield_11250' => NULL,
        'customfield_10650' => NULL,
        'labels' => 
        array (
          0 => 'Executive',
        ),
        'customfield_11150' => NULL,
        'customfield_10953' => '#fdf4bb',
        'workratio' => -1,
        'assignee' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=chris.willmore',
          'name' => 'chris.willmore',
          'emailAddress' => 'chris.willmore@shazam.com',
          'avatarUrls' => 
          array (
            '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=chris.willmore&avatarId=11121',
            '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=chris.willmore&avatarId=11121',
            '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=chris.willmore&avatarId=11121',
            '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=chris.willmore&avatarId=11121',
          ),
          'displayName' => 'Chris Willmore',
          'active' => true,
        ),
        'customfield_10951' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/customFieldOption/11200',
          'value' => 'To Do',
          'id' => '11200',
        ),
        'customfield_10952' => 'Spotify',
        'customfield_11050' => NULL,
        'customfield_10550' => NULL,
        'customfield_10250' => '2780',
        'aggregatetimeestimate' => NULL,
        'project' => 
        array (
          'self' => 'https://jira.shazamteam.net/rest/api/2/project/11050',
          'id' => '11050',
          'key' => 'SRM',
          'name' => 'Shazam Road Map',
          'avatarUrls' => 
          array (
            '16x16' => 'https://jira.shazamteam.net/secure/projectavatar?size=xsmall&pid=11050&avatarId=12021',
            '24x24' => 'https://jira.shazamteam.net/secure/projectavatar?size=small&pid=11050&avatarId=12021',
            '32x32' => 'https://jira.shazamteam.net/secure/projectavatar?size=medium&pid=11050&avatarId=12021',
            '48x48' => 'https://jira.shazamteam.net/secure/projectavatar?pid=11050&avatarId=12021',
          ),
          'projectCategory' => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/projectCategory/10081',
            'id' => '10081',
            'description' => 'Projects that concentrate on delivering a feature',
            'name' => 'Features',
          ),
        ),
        'versions' => 
        array (
        ),
        'customfield_10170' => NULL,
        'environment' => NULL,
        'timeestimate' => NULL,
        'aggregateprogress' => 
        array (
          'progress' => 0,
          'total' => 0,
        ),
        'lastViewed' => NULL,
        'components' => 
        array (
          0 => 
          array (
            'self' => 'https://jira.shazamteam.net/rest/api/2/component/11255',
            'id' => '11255',
            'name' => 'Ingestion Team',
            'description' => 'Estonia Team',
          ),
        ),
        'timeoriginalestimate' => NULL,
        'aggregatetimespent' => NULL,
      ),
      'changelog' => 
      array (
        'startAt' => 0,
        'maxResults' => 22,
        'total' => 22,
        'histories' => 
        array (
          0 => 
          array (
            'id' => '920987',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=richard.tang',
              'name' => 'richard.tang',
              'emailAddress' => 'richard.tang@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=richard.tang&avatarId=12020',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=richard.tang&avatarId=12020',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=richard.tang&avatarId=12020',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=richard.tang&avatarId=12020',
              ),
              'displayName' => 'Richard Tang',
              'active' => true,
            ),
            'created' => '2014-10-17T11:24:10.000+0100',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'status',
                'fieldtype' => 'jira',
                'from' => '1',
                'fromString' => 'Open',
                'to' => '10086',
                'toString' => 'October',
              ),
            ),
          ),
          1 => 
          array (
            'id' => '920988',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=richard.tang',
              'name' => 'richard.tang',
              'emailAddress' => 'richard.tang@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=richard.tang&avatarId=12020',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=richard.tang&avatarId=12020',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=richard.tang&avatarId=12020',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=richard.tang&avatarId=12020',
              ),
              'displayName' => 'Richard Tang',
              'active' => true,
            ),
            'created' => '2014-10-17T11:24:14.000+0100',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Rank',
                'fieldtype' => 'custom',
                'from' => '',
                'fromString' => '',
                'to' => '',
                'toString' => 'Ranked higher',
              ),
            ),
          ),
          2 => 
          array (
            'id' => '920989',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=richard.tang',
              'name' => 'richard.tang',
              'emailAddress' => 'richard.tang@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=richard.tang&avatarId=12020',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=richard.tang&avatarId=12020',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=richard.tang&avatarId=12020',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=richard.tang&avatarId=12020',
              ),
              'displayName' => 'Richard Tang',
              'active' => true,
            ),
            'created' => '2014-10-17T11:26:09.000+0100',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'priority',
                'fieldtype' => 'jira',
                'from' => '3',
                'fromString' => 'Major',
                'to' => '4',
                'toString' => 'Minor',
              ),
            ),
          ),
          3 => 
          array (
            'id' => '920990',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=richard.tang',
              'name' => 'richard.tang',
              'emailAddress' => 'richard.tang@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=richard.tang&avatarId=12020',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=richard.tang&avatarId=12020',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=richard.tang&avatarId=12020',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=richard.tang&avatarId=12020',
              ),
              'displayName' => 'Richard Tang',
              'active' => true,
            ),
            'created' => '2014-10-17T11:26:14.000+0100',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'labels',
                'fieldtype' => 'jira',
                'from' => NULL,
                'fromString' => '',
                'to' => NULL,
                'toString' => 'Executive',
              ),
            ),
          ),
          4 => 
          array (
            'id' => '921111',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=chris.willmore',
              'name' => 'chris.willmore',
              'emailAddress' => 'chris.willmore@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=chris.willmore&avatarId=11121',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=chris.willmore&avatarId=11121',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=chris.willmore&avatarId=11121',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=chris.willmore&avatarId=11121',
              ),
              'displayName' => 'Chris Willmore',
              'active' => true,
            ),
            'created' => '2014-10-17T13:18:02.000+0100',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '90202',
                'toString' => 'DMT-2185',
              ),
            ),
          ),
          5 => 
          array (
            'id' => '924967',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=Patricia.Beyet',
              'name' => 'Patricia.Beyet',
              'emailAddress' => 'patricia.beyet@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=patricia.beyet&avatarId=12022',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=patricia.beyet&avatarId=12022',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=patricia.beyet&avatarId=12022',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=patricia.beyet&avatarId=12022',
              ),
              'displayName' => 'Patricia Beyet',
              'active' => true,
            ),
            'created' => '2014-10-21T17:58:01.000+0100',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'status',
                'fieldtype' => 'jira',
                'from' => '10086',
                'fromString' => 'October',
                'to' => '3',
                'toString' => 'In Progress',
              ),
            ),
          ),
          6 => 
          array (
            'id' => '925381',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=richard.tang',
              'name' => 'richard.tang',
              'emailAddress' => 'richard.tang@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=richard.tang&avatarId=12020',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=richard.tang&avatarId=12020',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=richard.tang&avatarId=12020',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=richard.tang&avatarId=12020',
              ),
              'displayName' => 'Richard Tang',
              'active' => true,
            ),
            'created' => '2014-10-22T15:23:04.000+0100',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'RemoteIssueLink',
                'fieldtype' => 'jira',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '10950',
                'toString' => 'This issue links to "Spotify Addition to SuperTrack (Web Link)"',
              ),
            ),
          ),
          7 => 
          array (
            'id' => '926313',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=chris.willmore',
              'name' => 'chris.willmore',
              'emailAddress' => 'chris.willmore@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=chris.willmore&avatarId=11121',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=chris.willmore&avatarId=11121',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=chris.willmore&avatarId=11121',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=chris.willmore&avatarId=11121',
              ),
              'displayName' => 'Chris Willmore',
              'active' => true,
            ),
            'created' => '2014-10-24T14:06:24.000+0100',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '90754',
                'toString' => 'DMT-2218',
              ),
            ),
          ),
          8 => 
          array (
            'id' => '926345',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=Patricia.Beyet',
              'name' => 'Patricia.Beyet',
              'emailAddress' => 'patricia.beyet@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=patricia.beyet&avatarId=12022',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=patricia.beyet&avatarId=12022',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=patricia.beyet&avatarId=12022',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=patricia.beyet&avatarId=12022',
              ),
              'displayName' => 'Patricia Beyet',
              'active' => true,
            ),
            'created' => '2014-10-24T14:27:51.000+0100',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '90762',
                'toString' => 'DMT-2220',
              ),
            ),
          ),
          9 => 
          array (
            'id' => '927802',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=chris.willmore',
              'name' => 'chris.willmore',
              'emailAddress' => 'chris.willmore@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=chris.willmore&avatarId=11121',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=chris.willmore&avatarId=11121',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=chris.willmore&avatarId=11121',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=chris.willmore&avatarId=11121',
              ),
              'displayName' => 'Chris Willmore',
              'active' => true,
            ),
            'created' => '2014-10-28T15:36:34.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '91014',
                'toString' => 'DMT-2227',
              ),
            ),
          ),
          10 => 
          array (
            'id' => '939655',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=chris.willmore',
              'name' => 'chris.willmore',
              'emailAddress' => 'chris.willmore@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=chris.willmore&avatarId=11121',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=chris.willmore&avatarId=11121',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=chris.willmore&avatarId=11121',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=chris.willmore&avatarId=11121',
              ),
              'displayName' => 'Chris Willmore',
              'active' => true,
            ),
            'created' => '2014-11-11T07:51:17.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '92226',
                'toString' => 'DMT-2268',
              ),
            ),
          ),
          11 => 
          array (
            'id' => '939660',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=chris.willmore',
              'name' => 'chris.willmore',
              'emailAddress' => 'chris.willmore@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=chris.willmore&avatarId=11121',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=chris.willmore&avatarId=11121',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=chris.willmore&avatarId=11121',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=chris.willmore&avatarId=11121',
              ),
              'displayName' => 'Chris Willmore',
              'active' => true,
            ),
            'created' => '2014-11-11T07:55:59.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '92225',
                'toString' => 'DMT-2267',
              ),
            ),
          ),
          12 => 
          array (
            'id' => '943862',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=chris.willmore',
              'name' => 'chris.willmore',
              'emailAddress' => 'chris.willmore@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=chris.willmore&avatarId=11121',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=chris.willmore&avatarId=11121',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=chris.willmore&avatarId=11121',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=chris.willmore&avatarId=11121',
              ),
              'displayName' => 'Chris Willmore',
              'active' => true,
            ),
            'created' => '2014-11-17T11:43:19.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '92649',
                'toString' => 'DMT-2281',
              ),
            ),
          ),
          13 => 
          array (
            'id' => '943867',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=chris.willmore',
              'name' => 'chris.willmore',
              'emailAddress' => 'chris.willmore@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=chris.willmore&avatarId=11121',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=chris.willmore&avatarId=11121',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=chris.willmore&avatarId=11121',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=chris.willmore&avatarId=11121',
              ),
              'displayName' => 'Chris Willmore',
              'active' => true,
            ),
            'created' => '2014-11-17T11:45:45.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '92650',
                'toString' => 'DMT-2282',
              ),
            ),
          ),
          14 => 
          array (
            'id' => '943872',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=chris.willmore',
              'name' => 'chris.willmore',
              'emailAddress' => 'chris.willmore@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=chris.willmore&avatarId=11121',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=chris.willmore&avatarId=11121',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=chris.willmore&avatarId=11121',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=chris.willmore&avatarId=11121',
              ),
              'displayName' => 'Chris Willmore',
              'active' => true,
            ),
            'created' => '2014-11-17T11:47:00.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '92652',
                'toString' => 'DMT-2283',
              ),
            ),
          ),
          15 => 
          array (
            'id' => '943882',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=chris.willmore',
              'name' => 'chris.willmore',
              'emailAddress' => 'chris.willmore@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=chris.willmore&avatarId=11121',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=chris.willmore&avatarId=11121',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=chris.willmore&avatarId=11121',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=chris.willmore&avatarId=11121',
              ),
              'displayName' => 'Chris Willmore',
              'active' => true,
            ),
            'created' => '2014-11-17T11:50:23.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '92653',
                'toString' => 'DMT-2284',
              ),
            ),
          ),
          16 => 
          array (
            'id' => '943884',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=chris.willmore',
              'name' => 'chris.willmore',
              'emailAddress' => 'chris.willmore@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=chris.willmore&avatarId=11121',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=chris.willmore&avatarId=11121',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=chris.willmore&avatarId=11121',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=chris.willmore&avatarId=11121',
              ),
              'displayName' => 'Chris Willmore',
              'active' => true,
            ),
            'created' => '2014-11-17T11:51:04.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => NULL,
                'fromString' => NULL,
                'to' => '92654',
                'toString' => 'DMT-2285',
              ),
            ),
          ),
          17 => 
          array (
            'id' => '944050',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=chris.willmore',
              'name' => 'chris.willmore',
              'emailAddress' => 'chris.willmore@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=chris.willmore&avatarId=11121',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=chris.willmore&avatarId=11121',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=chris.willmore&avatarId=11121',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=chris.willmore&avatarId=11121',
              ),
              'displayName' => 'Chris Willmore',
              'active' => true,
            ),
            'created' => '2014-11-17T13:59:10.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => '92649',
                'fromString' => 'DMT-2281',
                'to' => NULL,
                'toString' => NULL,
              ),
            ),
          ),
          18 => 
          array (
            'id' => '944054',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=chris.willmore',
              'name' => 'chris.willmore',
              'emailAddress' => 'chris.willmore@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=chris.willmore&avatarId=11121',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=chris.willmore&avatarId=11121',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=chris.willmore&avatarId=11121',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=chris.willmore&avatarId=11121',
              ),
              'displayName' => 'Chris Willmore',
              'active' => true,
            ),
            'created' => '2014-11-17T13:59:31.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => '92650',
                'fromString' => 'DMT-2282',
                'to' => NULL,
                'toString' => NULL,
              ),
            ),
          ),
          19 => 
          array (
            'id' => '944057',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=chris.willmore',
              'name' => 'chris.willmore',
              'emailAddress' => 'chris.willmore@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=chris.willmore&avatarId=11121',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=chris.willmore&avatarId=11121',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=chris.willmore&avatarId=11121',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=chris.willmore&avatarId=11121',
              ),
              'displayName' => 'Chris Willmore',
              'active' => true,
            ),
            'created' => '2014-11-17T13:59:47.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => '92652',
                'fromString' => 'DMT-2283',
                'to' => NULL,
                'toString' => NULL,
              ),
            ),
          ),
          20 => 
          array (
            'id' => '944061',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=chris.willmore',
              'name' => 'chris.willmore',
              'emailAddress' => 'chris.willmore@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=chris.willmore&avatarId=11121',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=chris.willmore&avatarId=11121',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=chris.willmore&avatarId=11121',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=chris.willmore&avatarId=11121',
              ),
              'displayName' => 'Chris Willmore',
              'active' => true,
            ),
            'created' => '2014-11-17T14:00:05.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => '92653',
                'fromString' => 'DMT-2284',
                'to' => NULL,
                'toString' => NULL,
              ),
            ),
          ),
          21 => 
          array (
            'id' => '944064',
            'author' => 
            array (
              'self' => 'https://jira.shazamteam.net/rest/api/2/user?username=chris.willmore',
              'name' => 'chris.willmore',
              'emailAddress' => 'chris.willmore@shazam.com',
              'avatarUrls' => 
              array (
                '16x16' => 'https://jira.shazamteam.net/secure/useravatar?size=xsmall&ownerId=chris.willmore&avatarId=11121',
                '24x24' => 'https://jira.shazamteam.net/secure/useravatar?size=small&ownerId=chris.willmore&avatarId=11121',
                '32x32' => 'https://jira.shazamteam.net/secure/useravatar?size=medium&ownerId=chris.willmore&avatarId=11121',
                '48x48' => 'https://jira.shazamteam.net/secure/useravatar?ownerId=chris.willmore&avatarId=11121',
              ),
              'displayName' => 'Chris Willmore',
              'active' => true,
            ),
            'created' => '2014-11-17T14:01:14.000+0000',
            'items' => 
            array (
              0 => 
              array (
                'field' => 'Epic Child',
                'fieldtype' => 'custom',
                'from' => '92654',
                'fromString' => 'DMT-2285',
                'to' => NULL,
                'toString' => NULL,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
