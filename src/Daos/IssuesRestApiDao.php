<?php

/**
 * @package JiraDashboard\Daos
 * @author toni <toni.lopez@shazam.com>
 */

namespace JiraDashboard\Daos;

/**
 * @package JiraDashboard\Daos
 */

class IssuesRestApiDao extends RestApiDao implements IssuesDao
{
    /**
     * @param string $project
     * @param array $priorities
     * @return array
     * @throws \Exception
     */
    public function getByPriority($project, array $priorities)
    {
        $priorities = implode(',', $priorities);
        $query = sprintf(
            '?jql=project="%s" and priority in(%s) and status="Open"&maxResults=-1',
            $project,
            $priorities
        );
        $query = str_replace(' ', '+', $query);

        return parent::query($query);
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
            '?jql=project="%s" and (%s) &maxResults=-1',
            $project,
            $status
        );
        $query = str_replace(' ', '+', $query);

        return parent::query($query);
    }
}
