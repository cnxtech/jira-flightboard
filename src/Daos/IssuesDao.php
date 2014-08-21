<?php

/**
 * @package JiraDashboard\Daos
 * @author toni <toni.lopez@shazam.com>
 */

namespace JiraDashboard\Daos;

/**
 * DAO for issues.
 *
 * @package JiraDashboard\Daos
 */

interface IssuesDao
{
    /**
     * @param string $project
     * @param array $priorities
     * @return array
     * @throws \Exception
     */
    public function getByPriority($project, array $priorities);

    /**
     * @param string $project
     * @param array $status
     * @return array
     * @throws \Exception
     */
    public function getByStatus($project, array $status);

    /**
     * @param string $projectKey
     * @return int
     */
    public function getProjectId($projectKey);

    /**
     * @param int $issueId
     * @return array
     */
    public function getChangeLog($issueId);

    /**
     * @param int $issueId
     * @return array
     */
    public function getIssuesByEpic($epicId);
}
