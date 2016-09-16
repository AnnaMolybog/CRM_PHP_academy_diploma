<?php

namespace CRM\AppBundle\Entity;

/**
 * Approval_Schema
 */
class Approval_Schema
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $amountCondition;


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
     * Set amountCondition
     *
     * @param string $amountCondition
     *
     * @return Approval_Schema
     */
    public function setAmountCondition($amountCondition)
    {
        $this->amountCondition = $amountCondition;

        return $this;
    }

    /**
     * Get amountCondition
     *
     * @return string
     */
    public function getAmountCondition()
    {
        return $this->amountCondition;
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
     * @return Approval_Schema
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
    private $role;


    /**
     * Add role
     *
     * @param \CRM\SecurityBundle\Entity\Role $role
     *
     * @return Approval_Schema
     */
    public function addRole(\CRM\SecurityBundle\Entity\Role $role)
    {
        $this->role[] = $role;

        return $this;
    }

    /**
     * Remove role
     *
     * @param \CRM\SecurityBundle\Entity\Role $role
     */
    public function removeRole(\CRM\SecurityBundle\Entity\Role $role)
    {
        $this->role->removeElement($role);
    }

    /**
     * Get role
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRole()
    {
        return $this->role;
    }
}
