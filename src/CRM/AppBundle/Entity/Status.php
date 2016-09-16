<?php

namespace CRM\AppBundle\Entity;

/**
 * Status
 */
class Status
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;


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
     * Set name
     *
     * @param string $name
     *
     * @return Status
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $project;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->project = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add project
     *
     * @param \CRM\AppBundle\Entity\Project $project
     *
     * @return Status
     */
    public function addProject(\CRM\AppBundle\Entity\Project $project)
    {
        $this->project[] = $project;

        return $this;
    }

    /**
     * Remove project
     *
     * @param \CRM\AppBundle\Entity\Project $project
     */
    public function removeProject(\CRM\AppBundle\Entity\Project $project)
    {
        $this->project->removeElement($project);
    }

    /**
     * Get project
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProject()
    {
        return $this->project;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $project_user_status;


    /**
     * Add projectUserStatus
     *
     * @param \CRM\AppBundle\Entity\Project_User_Status $projectUserStatus
     *
     * @return Status
     */
    public function addProjectUserStatus(\CRM\AppBundle\Entity\Project_User_Status $projectUserStatus)
    {
        $this->project_user_status[] = $projectUserStatus;

        return $this;
    }

    /**
     * Remove projectUserStatus
     *
     * @param \CRM\AppBundle\Entity\Project_User_Status $projectUserStatus
     */
    public function removeProjectUserStatus(\CRM\AppBundle\Entity\Project_User_Status $projectUserStatus)
    {
        $this->project_user_status->removeElement($projectUserStatus);
    }

    /**
     * Get projectUserStatus
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProjectUserStatus()
    {
        return $this->project_user_status;
    }
}
