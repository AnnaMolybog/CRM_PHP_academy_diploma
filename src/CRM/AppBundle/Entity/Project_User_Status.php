<?php

namespace CRM\AppBundle\Entity;

/**
 * Project_User_Status
 */
class Project_User_Status
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $projectId;

    /**
     * @var int
     */
    private $userId;

    /**
     * @var int
     */
    private $statusId;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set projectId
     *
     * @param integer $projectId
     *
     * @return Project_User_Status
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * Get projectId
     *
     * @return int
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Project_User_Status
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set statusId
     *
     * @param integer $statusId
     *
     * @return Project_User_Status
     */
    public function setStatusId($statusId)
    {
        $this->statusId = $statusId;

        return $this;
    }

    /**
     * Get statusId
     *
     * @return int
     */
    public function getStatusId()
    {
        return $this->statusId;
    }
    /**
     * @var \CRM\AppBundle\Entity\Project
     */
    private $project;

    /**
     * @var \CRM\SecurityBundle\Entity\User
     */
    private $user;

    /**
     * @var \CRM\AppBundle\Entity\Status
     */
    private $status;


    /**
     * Set project
     *
     * @param \CRM\AppBundle\Entity\Project $project
     *
     * @return Project_User_Status
     */
    public function setProject(\CRM\AppBundle\Entity\Project $project = null)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \CRM\AppBundle\Entity\Project
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set user
     *
     * @param \CRM\SecurityBundle\Entity\User $user
     *
     * @return Project_User_Status
     */
    public function setUser(\CRM\SecurityBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \CRM\SecurityBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set status
     *
     * @param \CRM\AppBundle\Entity\Status $status
     *
     * @return Project_User_Status
     */
    public function setStatus(\CRM\AppBundle\Entity\Status $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \CRM\AppBundle\Entity\Status
     */
    public function getStatus()
    {
        return $this->status;
    }
}
