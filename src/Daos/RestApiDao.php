<?php

/**
 * @package JiraDashboard\Daos
 * @author toni <toni.lopez@shazam.com>
 */

namespace JiraDashboard\Daos;

/**
 * @package JiraDashboard\Daos
 */

abstract class RestApiDao
{
    /**
     * @var string
     */
    protected $baseUrl;

    /**
     * @var null|string
     */
    protected $authenticationToken;

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
    protected function query($endpoint)
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
            var_dump($httpStatus, $responseArray);
            throw new \Exception();
        }

        return $responseArray;
    }
} 
