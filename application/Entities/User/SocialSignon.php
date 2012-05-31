<?php

namespace Entities\User;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\User\SocialSignon
 */
class SocialSignon
{
    /**
     * @var integer $socialsignon_id
     */
    private $socialsignon_id;

    /**
     * @var string $socialsignon_identifier
     */
    private $socialsignon_identifier;

    /**
     * @var datetime $created_at
     */
    private $created_at;

    /**
     * @var datetime $modified_at
     */
    private $modified_at;

    /**
     * @var Entities\User\User
     */
    private $user;

    /**
     * @var Entities\User\User
     */
    private $created_by;

    /**
     * @var Entities\User\User
     */
    private $modified_by;


    /**
     * Get socialsignon_id
     *
     * @return integer 
     */
    public function getSocialsignonId()
    {
        return $this->socialsignon_id;
    }

    /**
     * Set socialsignon_identifier
     *
     * @param string $socialsignonIdentifier
     * @return SocialSignon
     */
    public function setSocialsignonIdentifier($socialsignonIdentifier)
    {
        $this->socialsignon_identifier = $socialsignonIdentifier;
        return $this;
    }

    /**
     * Get socialsignon_identifier
     *
     * @return string 
     */
    public function getSocialsignonIdentifier()
    {
        return $this->socialsignon_identifier;
    }

    /**
     * Set created_at
     *
     * @param datetime $createdAt
     * @return SocialSignon
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
     * @return SocialSignon
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
     * Set user
     *
     * @param Entities\User\User $user
     * @return SocialSignon
     */
    public function setUser(\Entities\User\User $user = null)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Get user
     *
     * @return Entities\User\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set created_by
     *
     * @param Entities\User\User $createdBy
     * @return SocialSignon
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
     * @return SocialSignon
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