<?php

namespace CRM\AppBundle\Entity;

/**
 * Project
 */
class Project
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
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var int
     */
    private $paybackPeriod;

    /**
     * @var int
     */
    private $categoryId;

    /**
     * @var int
     */
    private $schemaId;

    /**
     * @var \DateTime
     */
    private $createdAt = null;

    /**
     * @var \DateTime
     */
    private $approvedAt;

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
     * Set name
     *
     * @param string $name
     *
     * @return Project
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
     * Set description
     *
     * @param string $description
     *
     * @return Project
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set currency
     *
     * @param string $currency
     *
     * @return Project
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set amount
     *
     * @param float $amount
     *
     * @return Project
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set paybackPeriod
     *
     * @param integer $paybackPeriod
     *
     * @return Project
     */
    public function setPaybackPeriod($paybackPeriod)
    {
        $this->paybackPeriod = $paybackPeriod;

        return $this;
    }

    /**
     * Get paybackPeriod
     *
     * @return int
     */
    public function getPaybackPeriod()
    {
        return $this->paybackPeriod;
    }

    /**
     * Set categoryId
     *
     * @param integer $categoryId
     *
     * @return Project
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return int
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set schemaId
     *
     * @param integer $schemaId
     *
     * @return Project
     */
    public function setSchemaId($schemaId)
    {
        $this->schemaId = $schemaId;

        return $this;
    }

    /**
     * Get schemaId
     *
     * @return int
     */
    public function getSchemaId()
    {
        return $this->schemaId;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Project
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set approvedAt
     *
     * @param \DateTime $approvedAt
     *
     * @return Project
     */
    public function setApprovedAt($approvedAt)
    {
        $this->approvedAt = $approvedAt;

        return $this;
    }

    /**
     * Get approvedAt
     *
     * @return \DateTime
     */
    public function getApprovedAt()
    {
        return $this->approvedAt;
    }

    /**
     * Set statusId
     *
     * @param integer $statusId
     *
     * @return Project
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
     * @var \CRM\AppBundle\Entity\Category
     */
    private $category;


    /**
     * Set category
     *
     * @param \CRM\AppBundle\Entity\Category $category
     *
     * @return Project
     */
    public function setCategory(\CRM\AppBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \CRM\AppBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * @var \CRM\AppBundle\Entity\Status
     */
    private $status;


    /**
     * Set status
     *
     * @param \CRM\AppBundle\Entity\Status $status
     *
     * @return Project
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
    /**
     * @var \CRM\AppBundle\Entity\Approval_Schema
     */
    private $approval_schema;


    /**
     * Set approvalSchema
     *
     * @param \CRM\AppBundle\Entity\Approval_Schema $approvalSchema
     *
     * @return Project
     */
    public function setApprovalSchema(\CRM\AppBundle\Entity\Approval_Schema $approvalSchema = null)
    {
        $this->approval_schema = $approvalSchema;

        return $this;
    }

    /**
     * Get approvalSchema
     *
     * @return \CRM\AppBundle\Entity\Approval_Schema
     */
    public function getApprovalSchema()
    {
        return $this->approval_schema;
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
     * @return Project
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
    private $project_user_status;


    /**
     * Add projectUserStatus
     *
     * @param \CRM\AppBundle\Entity\Project_User_Status $projectUserStatus
     *
     * @return Project
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
    /**
     * @var integer
     */
    private $userId;


    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Project
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set user
     *
     * @param \CRM\SecurityBundle\Entity\User $user
     *
     * @return Project
     */
    public function setUser(\CRM\SecurityBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }
}
