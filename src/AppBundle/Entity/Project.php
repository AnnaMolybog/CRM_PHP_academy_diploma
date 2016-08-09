<?php

namespace AppBundle\Entity;

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
     * @var int
     */
    private $npv;

    /**
     * @var int
     */
    private $irr;

    /**
     * @var float
     */
    private $cashFlow1;

    /**
     * @var float
     */
    private $cashFlow2;

    /**
     * @var float
     */
    private $cashFlow3;

    /**
     * @var float
     */
    private $rop1;

    /**
     * @var float
     */
    private $rop2;

    /**
     * @var float
     */
    private $rop3;

    /**
     * @var float
     */
    private $cann1;

    /**
     * @var float
     */
    private $cann2;

    /**
     * @var float
     */
    private $cann3;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var integer
     */
    private $statusId;

    /**
     * @var \DateTime
     */
    private $approvedAt;

    /**
     * @var int
     */
    private $userId;

    /**
     * @var int
     */
    private $categoryId;


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
     * Set npv
     *
     * @param integer $npv
     *
     * @return Project
     */
    public function setN($npv)
    {
        $this->npv = $npv;

        return $this;
    }

    /**
     * Get npv
     *
     * @return int
     */
    public function getNPV()
    {
        return $this->npv;
    }

    /**
     * Set irr
     *
     * @param integer $irr
     *
     * @return Project
     */
    public function setIRR($irr)
    {
        $this->irr = $irr;

        return $this;
    }

    /**
     * Get irr
     *
     * @return int
     */
    public function getIRR()
    {
        return $this->irr;
    }

    /**
     * Set cashFlow1
     *
     * @param float $cashFlow1
     *
     * @return Project
     */
    public function setCashFlow1($cashFlow1)
    {
        $this->cashFlow1 = $cashFlow1;

        return $this;
    }

    /**
     * Get cashFlow1
     *
     * @return float
     */
    public function getCashFlow1()
    {
        return $this->cashFlow1;
    }

    /**
     * Set cashFlow2
     *
     * @param float $cashFlow2
     *
     * @return Project
     */
    public function setCashFlow2($cashFlow2)
    {
        $this->cashFlow2 = $cashFlow2;

        return $this;
    }

    /**
     * Get cashFlow2
     *
     * @return float
     */
    public function getCashFlow2()
    {
        return $this->cashFlow2;
    }

    /**
     * Set cashFlow3
     *
     * @param float $cashFlow3
     *
     * @return Project
     */
    public function setCashFlow3($cashFlow3)
    {
        $this->cashFlow3 = $cashFlow3;

        return $this;
    }

    /**
     * Get cashFlow3
     *
     * @return float
     */
    public function getCashFlow3()
    {
        return $this->cashFlow3;
    }

    /**
     * Set rop1
     *
     * @param float $rop1
     *
     * @return Project
     */
    public function setROP1($rop1)
    {
        $this->rop1 = $rop1;

        return $this;
    }

    /**
     * Get rop1
     *
     * @return float
     */
    public function getROP1()
    {
        return $this->rop1;
    }

    /**
     * Set rop2
     *
     * @param float $rop2
     *
     * @return Project
     */
    public function setROP2($rop2)
    {
        $this->rop2 = $rop2;

        return $this;
    }

    /**
     * Get rop2
     *
     * @return float
     */
    public function getROP2()
    {
        return $this->rop2;
    }

    /**
     * Set rop3
     *
     * @param float $rop3
     *
     * @return Project
     */
    public function setROP3($rop3)
    {
        $this->rop3 = $rop3;

        return $this;
    }

    /**
     * Get rop3
     *
     * @return float
     */
    public function getROP3()
    {
        return $this->rop3;
    }

    /**
     * Set cann1
     *
     * @param float $cann1
     *
     * @return Project
     */
    public function setCANN1($cann1)
    {
        $this->cann1 = $cann1;

        return $this;
    }

    /**
     * Get cann1
     *
     * @return float
     */
    public function getCANN1()
    {
        return $this->cann1;
    }

    /**
     * Set cann2
     *
     * @param float $cann2
     *
     * @return Project
     */
    public function setCANN2($cann2)
    {
        $this->cann2 = $cann2;

        return $this;
    }

    /**
     * Get cann2
     *
     * @return float
     */
    public function getCANN2()
    {
        return $this->cann2;
    }

    /**
     * Set cann3
     *
     * @param float $cann3
     *
     * @return Project
     */
    public function setCANN3($cann3)
    {
        $this->cann3 = $cann3;

        return $this;
    }

    /**
     * Get cann3
     *
     * @return float
     */
    public function getCANN3()
    {
        return $this->cann3;
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
     * @return integer
     */
    public function getStatusId()
    {
        return $this->statusId;
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
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
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
     * @var \AppBundle\Entity\Category
     */
    private $category;


    /**
     * Set npv
     *
     * @param integer $npv
     *
     * @return Project
     */
    public function setNpv($npv)
    {
        $this->npv = $npv;

        return $this;
    }

    /**
     * Set category
     *
     * @param \AppBundle\Entity\Category $category
     *
     * @return Project
     */
    public function setCategory(\AppBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AppBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * @var \AppBundle\Entity\User
     */
    private $user;


    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Project
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * @var \AppBundle\Entity\Status
     */
    private $status;


    /**
     * Set status
     *
     * @param \AppBundle\Entity\Status $status
     *
     * @return Project
     */
    public function setStatus(\AppBundle\Entity\Status $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \AppBundle\Entity\Status
     */
    public function getStatus()
    {
        return $this->status;
    }
}
