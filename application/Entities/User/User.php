<?php

namespace Entities\User;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\User\User
 */
class User
{
    /**
     * @var integer $user_id
     */
    private $user_id;

    /**
     * @var string $user_firstname
     */
    private $user_firstname;

    /**
     * @var string $user_lastname
     */
    private $user_lastname;

    /**
     * @var string $user_middlename
     */
    private $user_middlename;

    /**
     * @var string $user_email
     */
    private $user_email;

    /**
     * @var boolean $user_agreeterms
     */
    private $user_agreeterms;

    /**
     * @var boolean $user_admin
     */
    private $user_admin;

    /**
     * @var boolean $status
     */
    private $status;

    /**
     * @var boolean $deleted
     */
    private $deleted;

    /**
     * @var datetime $created_at
     */
    private $created_at;

    /**
     * @var datetime $modified_at
     */
    private $modified_at;

    /**
     * @var Entities\Wallet\Wallet
     */
    private $wallet;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $socialsignons;

    /**
     * @var Entities\User\User
     */
    private $created_by;

    /**
     * @var Entities\User\User
     */
    private $modified_by;

    public function __construct()
    {
        $this->socialsignons = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get user_id
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set user_firstname
     *
     * @param string $userFirstname
     * @return User
     */
    public function setUserFirstname($userFirstname)
    {
        $this->user_firstname = $userFirstname;
        return $this;
    }

    /**
     * Get user_firstname
     *
     * @return string 
     */
    public function getUserFirstname()
    {
        return $this->user_firstname;
    }

    /**
     * Set user_lastname
     *
     * @param string $userLastname
     * @return User
     */
    public function setUserLastname($userLastname)
    {
        $this->user_lastname = $userLastname;
        return $this;
    }

    /**
     * Get user_lastname
     *
     * @return string 
     */
    public function getUserLastname()
    {
        return $this->user_lastname;
    }

    /**
     * Set user_middlename
     *
     * @param string $userMiddlename
     * @return User
     */
    public function setUserMiddlename($userMiddlename)
    {
        $this->user_middlename = $userMiddlename;
        return $this;
    }

    /**
     * Get user_middlename
     *
     * @return string 
     */
    public function getUserMiddlename()
    {
        return $this->user_middlename;
    }

    /**
     * Set user_email
     *
     * @param string $userEmail
     * @return User
     */
    public function setUserEmail($userEmail)
    {
        $this->user_email = $userEmail;
        return $this;
    }

    /**
     * Get user_email
     *
     * @return string 
     */
    public function getUserEmail()
    {
        return $this->user_email;
    }

    /**
     * Set user_agreeterms
     *
     * @param boolean $userAgreeterms
     * @return User
     */
    public function setUserAgreeterms($userAgreeterms)
    {
        $this->user_agreeterms = $userAgreeterms;
        return $this;
    }

    /**
     * Get user_agreeterms
     *
     * @return boolean 
     */
    public function getUserAgreeterms()
    {
        return $this->user_agreeterms;
    }

    /**
     * Set user_admin
     *
     * @param boolean $userAdmin
     * @return User
     */
    public function setUserAdmin($userAdmin)
    {
        $this->user_admin = $userAdmin;
        return $this;
    }

    /**
     * Get user_admin
     *
     * @return boolean 
     */
    public function getUserAdmin()
    {
        return $this->user_admin;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return User
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return User
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set created_at
     *
     * @param datetime $createdAt
     * @return User
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
        return $this;
    }

    /**
     * Get created_at
     *
     * @return datetime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set modified_at
     *
     * @param datetime $modifiedAt
     * @return User
     */
    public function setModifiedAt($modifiedAt)
    {
        $this->modified_at = $modifiedAt;
        return $this;
    }

    /**
     * Get modified_at
     *
     * @return datetime 
     */
    public function getModifiedAt()
    {
        return $this->modified_at;
    }

    /**
     * Set wallet
     *
     * @param Entities\Wallet\Wallet $wallet
     * @return User
     */
    public function setWallet(\Entities\Wallet\Wallet $wallet = null)
    {
        $this->wallet = $wallet;
        return $this;
    }

    /**
     * Get wallet
     *
     * @return Entities\Wallet\Wallet 
     */
    public function getWallet()
    {
        return $this->wallet;
    }

    /**
     * Add socialsignons
     *
     * @param Entities\User\SocialSignon $socialsignons
     * @return User
     */
    public function addSocialSignon(\Entities\User\SocialSignon $socialsignons)
    {
        $this->socialsignons[] = $socialsignons;
        return $this;
    }

    /**
     * Get socialsignons
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getSocialsignons()
    {
        return $this->socialsignons;
    }

    /**
     * Set created_by
     *
     * @param Entities\User\User $createdBy
     * @return User
     */
    public function setCreatedBy(\Entities\User\User $createdBy = null)
    {
        $this->created_by = $createdBy;
        return $this;
    }

    /**
     * Get created_by
     *
     * @return Entities\User\User 
     */
    public function getCreatedBy()
    {
        return $this->created_by;
    }

    /**
     * Set modified_by
     *
     * @param Entities\User\User $modifiedBy
     * @return User
     */
    public function setModifiedBy(\Entities\User\User $modifiedBy = null)
    {
        $this->modified_by = $modifiedBy;
        return $this;
    }

    /**
     * Get modified_by
     *
     * @return Entities\User\User 
     */
    public function getModifiedBy()
    {
        return $this->modified_by;
    }
}