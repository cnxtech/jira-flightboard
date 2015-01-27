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
 * @author toni <toni.lopez@yourdomain.com>
 */

return array (
  'expand' => 'schema,names',
  'startAt' => 0,
  'maxResults' => 1000,
  'total' => 609,
  'issues' => 
  array (
    array(
        'key' => 'ABC-123',
        'fields' => array(
          'priority' => array('id' => 1),
          'summary' => 'the summary of the ticket',
          'versions' => array(array('name' => 'month-where-scheduled')),
          'components' => array(
            array('name' => 'iOS Team', 'key' => 'IOS', 'id' => 12345)
          ),
          'status' => array('name' => 'Open'),
          'resolution' => array('name' => 'Unresolved'),
          'created' => '2013-12-12 :12:12:11',
          'customfield_10250' => 123 //rank
        ),
        'changelog' => array()
    ),
    array(
        'key' => 'ABC-456',
        'fields' => array(
          'priority' => array('id' => 1),
          'summary' => 'the summary of the second ticket',
          'versions' => array(array('name' => 'month-where-scheduled_2')),
          'components' => array(
            array('name' => 'Android Team', 'key' => 'AND', 'id' => 12346)
          ),
          'status' => array('name' => 'Open'),
          'resolution' => array('name' => 'Unresolved'),
          'created' => '2013-12-12 :12:12:12',
          'customfield_10250' => 124 //rank
        ),
        'changelog' => array()
    ),
  ),
);
