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
 * @package JiraDashboard\Daos
 * @author toni <toni.lopez@shazam.com>
 */

namespace JiraDashboard\Daos;

class IssuesRestApiDao
{
    /**
     * @var string
     */
    private $baseUrl;

    /**
     * @var null|string
     */
    private $authenticationToken;

    /**
     * @param string $baseUrl
     * @param string|null $authenticationToken
     */
    public function __construct($baseUrl, $authenticationToken = null)
    {
        $this->baseUrl = $baseUrl;
        $this->authenticationToken = $authenticationToken;
    }

    /**
     * @param $endpoint
     * @return array
     * @throws \Exception
     */
    private function query($endpoint)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $this->baseUrl . $endpoint);

        if ($this->authenticationToken !== null) {
            curl_setopt(
                $ch,
                CURLOPT_HTTPHEADER,
                array('Authorization: Basic ' . $this->authenticationToken)
            );
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $responseJson = curl_exec($ch);
        $httpStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        $responseArray = json_decode($responseJson, true);
        if (200 != $httpStatus || $responseArray === null) {
            throw new \Exception();
        }

        return $responseArray;
    }

    /**
     * @param string $project
     * @param array $status
     * @return array
     * @throws \Exception
     */
    public function getByStatus($project, array $status)
    {
        foreach ($status as $key => $element) {
            $status[$key] = "status='$element'";
        }
        $status = implode(' or ', $status);

        $query = sprintf(
            'search?jql=project="%s" and (%s) &maxResults=-1&expand=changelog',
            $project,
            $status
        );
        $query = str_replace(' ', '+', $query);

        return $this->query($query);
    }
}
