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
            'search?jql=project="%s" and priority in(%s) and status in ("Open", "Stable", "All clear")&maxResults=-1',
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
            'search?jql=project="%s" and (%s) &maxResults=-1',
            $project,
            $status
        );
        $query = str_replace(' ', '+', $query);

        return parent::query($query);
    }

    /**
     * @param string $projectKey
     * @return int
     */
    public function getProjectId($projectKey)
    {
        $project = parent::query('project/' . $projectKey);

        return (int) $project['id'];
    }

    /**
     * @param int $issueId
     * @return array
     */
    public function getChangeLog($issueId)
    {
        $response = parent::query('issue/' . $issueId . '?expand=changelog');

        return isset($response['changelog']['histories'])
            ? $response['changelog']['histories']
            : array();
    }
}
