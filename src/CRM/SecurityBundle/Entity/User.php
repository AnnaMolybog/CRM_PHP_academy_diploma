<?php

namespace CRM\SecurityBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 */
class User implements  UserInterface
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var int
     */
    private $roleId;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set roleId
     *
     * @param integer $roleId
     *
     * @return User
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;
    
        return $this;
    }

    /**
     * Get roleId
     *
     * @return integer
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function getRoles()
    {
        return explode(' ', $this->getRole()->getRole());
    }

    public function eraseCredentials()
    {
    }
    /**
     * @var \CRM\SecurityBundle\Entity\Role
     */
    private $role;


    /**
     * Set role
     *
     * @param \CRM\SecurityBundle\Entity\Role $role
     *
     * @return User
     */
    public function setRole(\CRM\SecurityBundle\Entity\Role $role = null)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return \CRM\SecurityBundle\Entity\Role
     */
    public function getRole()
    {
        return $this->role;
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
     * @return User
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
     * @return User
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
