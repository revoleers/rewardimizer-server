<?php

namespace Entities\Wallet;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\Wallet\Wallet
 */
class Wallet
{
    /**
     * @var integer $wallet_id
     */
    private $wallet_id;

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
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $cards;

    public function __construct()
    {
        $this->cards = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get wallet_id
     *
     * @return integer 
     */
    public function getWalletId()
    {
        return $this->wallet_id;
    }

    /**
     * Set created_at
     *
     * @param datetime $createdAt
     * @return Wallet
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
     * @return Wallet
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
     * @return Wallet
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
     * @return Wallet
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
     * @return Wallet
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

    /**
     * Add cards
     *
     * @param Entities\Wallet\Card $cards
     * @return Wallet
     */
    public function addCard(\Entities\Wallet\Card $cards)
    {
        $this->cards[] = $cards;
        return $this;
    }

    /**
     * Get cards
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCards()
    {
        return $this->cards;
    }
}