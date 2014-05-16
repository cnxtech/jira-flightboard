<?php

/**
 * @package IncidentDashboard\Daos
 * @author toni <toni.lopez@shazam.com>
 */

namespace IncidentDashboard\Daos;

/**
 * DAO for issues.
 *
 * @package IncidentDashboard\Daos
 */

interface IssuesDao
{
    /**
     * @param string $project
     * @param array $priorities
     * @return array
     * @throws \Exception
     */
    public function get($project, array $priorities);
} 
