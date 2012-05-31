<?php

namespace Entities\Wallet;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\Wallet\Card
 */
class Card
{
    /**
     * @var integer $card_id
     */
    private $card_id;

    /**
     * @var string $card_name
     */
    private $card_name;

    /**
     * @var integer $card_priority
     */
    private $card_priority;

    /**
     * @var datetime $created_at
     */
    private $created_at;

    /**
     * @var datetime $modified_at
     */
    private $modified_at;

    /**
     * @var Entities\Reward\Program
     */
    private $program;

    /**
     * @var Entities\Wallet\CardType
     */
    private $card_type;

    /**
     * @var Entities\Finance\Bank
     */
    private $bank;

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
    private $wallets;

    public function __construct()
    {
        $this->wallets = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get card_id
     *
     * @return integer 
     */
    public function getCardId()
    {
        return $this->card_id;
    }

    /**
     * Set card_name
     *
     * @param string $cardName
     * @return Card
     */
    public function setCardName($cardName)
    {
        $this->card_name = $cardName;
        return $this;
    }

    /**
     * Get card_name
     *
     * @return string 
     */
    public function getCardName()
    {
        return $this->card_name;
    }

    /**
     * Set card_priority
     *
     * @param integer $cardPriority
     * @return Card
     */
    public function setCardPriority($cardPriority)
    {
        $this->card_priority = $cardPriority;
        return $this;
    }

    /**
     * Get card_priority
     *
     * @return integer 
     */
    public function getCardPriority()
    {
        return $this->card_priority;
    }

    /**
     * Set created_at
     *
     * @param datetime $createdAt
     * @return Card
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
     * @return Card
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
     * Set program
     *
     * @param Entities\Reward\Program $program
     * @return Card
     */
    public function setProgram(\Entities\Reward\Program $program = null)
    {
        $this->program = $program;
        return $this;
    }

    /**
     * Get program
     *
     * @return Entities\Reward\Program 
     */
    public function getProgram()
    {
        return $this->program;
    }

    /**
     * Set card_type
     *
     * @param Entities\Wallet\CardType $cardType
     * @return Card
     */
    public function setCardType(\Entities\Wallet\CardType $cardType = null)
    {
        $this->card_type = $cardType;
        return $this;
    }

    /**
     * Get card_type
     *
     * @return Entities\Wallet\CardType 
     */
    public function getCardType()
    {
        return $this->card_type;
    }

    /**
     * Set bank
     *
     * @param Entities\Finance\Bank $bank
     * @return Card
     */
    public function setBank(\Entities\Finance\Bank $bank = null)
    {
        $this->bank = $bank;
        return $this;
    }

    /**
     * Get bank
     *
     * @return Entities\Finance\Bank 
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * Set created_by
     *
     * @param Entities\User\User $createdBy
     * @return Card
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
     * @return Card
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
     * Add wallets
     *
     * @param Entities\Wallet\Wallet $wallets
     * @return Card
     */
    public function addWallet(\Entities\Wallet\Wallet $wallets)
    {
        $this->wallets[] = $wallets;
        return $this;
    }

    /**
     * Get wallets
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getWallets()
    {
        return $this->wallets;
    }
}