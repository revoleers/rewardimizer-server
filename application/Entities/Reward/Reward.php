<?php

namespace Entities\Reward;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\Reward\Reward
 */
class Reward
{
    /**
     * @var integer $reward_id
     */
    private $reward_id;

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
     * @var Entities\Finance\SpendCategory
     */
    private $spend_category;

    /**
     * @var Entities\Wallet\Card
     */
    private $card;


    /**
     * Get reward_id
     *
     * @return integer 
     */
    public function getRewardId()
    {
        return $this->reward_id;
    }

    /**
     * Set created_at
     *
     * @param datetime $createdAt
     * @return Reward
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
     * @return Reward
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
     * @return Reward
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
     * Set spend_category
     *
     * @param Entities\Finance\SpendCategory $spendCategory
     * @return Reward
     */
    public function setSpendCategory(\Entities\Finance\SpendCategory $spendCategory = null)
    {
        $this->spend_category = $spendCategory;
        return $this;
    }

    /**
     * Get spend_category
     *
     * @return Entities\Finance\SpendCategory 
     */
    public function getSpendCategory()
    {
        return $this->spend_category;
    }

    /**
     * Set card
     *
     * @param Entities\Wallet\Card $card
     * @return Reward
     */
    public function setCard(\Entities\Wallet\Card $card = null)
    {
        $this->card = $card;
        return $this;
    }

    /**
     * Get card
     *
     * @return Entities\Wallet\Card 
     */
    public function getCard()
    {
        return $this->card;
    }
}