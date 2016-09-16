<?php

namespace CRM\SecurityBundle\Entity;

/**
 * Role
 */
class Role
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $role;

    /**
     * @var integer
     */
    private $sequence;

    /**
     * Get sequence
     *
     * @return integer
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Set sequence
     *
     * @param integer $sequence
     *
     * @return Role
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;
    }

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
     * Set role
     *
     * @param string $role
     *
     * @return Role
     */
    public function setRole($role)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add user
     *
     * @param \CRM\SecurityBundle\Entity\User $user
     *
     * @return Role
     */
    public function addUser(\CRM\SecurityBundle\Entity\User $user)
    {
        $this->user[] = $user;
    
        return $this;
    }

    /**
     * Remove user
     *
     * @param \CRM\SecurityBundle\Entity\User $user
     */
    public function removeUser(\CRM\SecurityBundle\Entity\User $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $approval_schema;


    /**
     * Add approvalSchema
     *
     * @param \CRM\AppBundle\Entity\Approval_Schema $approvalSchema
     *
     * @return Role
     */
    public function addApprovalSchema(\CRM\AppBundle\Entity\Approval_Schema $approvalSchema)
    {
        $this->approval_schema[] = $approvalSchema;

        return $this;
    }

    /**
     * Remove approvalSchema
     *
     * @param \CRM\AppBundle\Entity\Approval_Schema $approvalSchema
     */
    public function removeApprovalSchema(\CRM\AppBundle\Entity\Approval_Schema $approvalSchema)
    {
        $this->approval_schema->removeElement($approvalSchema);
    }

    /**
     * Get approvalSchema
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getApprovalSchema()
    {
        return $this->approval_schema;
    }
}
