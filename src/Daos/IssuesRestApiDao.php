<?php

/**
 * @package IncidentDashboard\Daos
 * @author toni <toni.lopez@shazam.com>
 */

namespace IncidentDashboard\Daos;

/**
 * @package IncidentDashboard\Daos
 */

class IssuesRestApiDao extends RestApiDao implements IssuesDao
{
    /**
     * @param string $project
     * @param array $priorities
     * @return array
     * @throws \Exception
     */
    public function get($project, array $priorities)
    {
        $priorities = implode(',', $priorities);
        $query = sprintf(
            '?jql=project="%s" and priority in(%s)&maxResults=-1',
            $project,
            $priorities
        );
        $query = str_replace(' ', '+', $query);

        return parent::query($query);
    }
}
