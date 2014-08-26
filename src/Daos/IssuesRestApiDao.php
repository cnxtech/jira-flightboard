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
            'search?jql=project="%s" and (%s) &maxResults=-1&expand=changelog',
            $project,
            $status
        );
        $query = str_replace(' ', '+', $query);

        return parent::query($query);
    }

    /**
     * @param istring $epicKey
     * @return array
     */
    public function getIssuesByEpic($epicKey)
    {
        $query = sprintf('search?jql="Epic Link"=%s &maxResults=-1', $epicKey);
        $query = str_replace(' ', '+', $query);

        return parent::query($query);
    }
}
