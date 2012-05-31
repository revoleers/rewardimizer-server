<?php

namespace Entities\Finance;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\Finance\Purchase
 */
class Purchase
{
    /**
     * @var integer $purchase_id
     */
    private $purchase_id;

    /**
     * @var decimal $purchase_total
     */
    private $purchase_total;

    /**
     * @var string $purchase_merchantname
     */
    private $purchase_merchantname;

    /**
     * @var integer $purchase_points
     */
    private $purchase_points;

    /**
     * @var datetime $created_at
     */
    private $created_at;

    /**
     * @var datetime $modified_at
     */
    private $modified_at;

    /**
     * @var Entities\Wallet\Card
     */
    private $card;

    /**
     * @var Entities\Finance\MerchantCode
     */
    private $merchant_code;

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
     * Get purchase_id
     *
     * @return integer 
     */
    public function getPurchaseId()
    {
        return $this->purchase_id;
    }

    /**
     * Set purchase_total
     *
     * @param decimal $purchaseTotal
     * @return Purchase
     */
    public function setPurchaseTotal($purchaseTotal)
    {
        $this->purchase_total = $purchaseTotal;
        return $this;
    }

    /**
     * Get purchase_total
     *
     * @return decimal 
     */
    public function getPurchaseTotal()
    {
        return $this->purchase_total;
    }

    /**
     * Set purchase_merchantname
     *
     * @param string $purchaseMerchantname
     * @return Purchase
     */
    public function setPurchaseMerchantname($purchaseMerchantname)
    {
        $this->purchase_merchantname = $purchaseMerchantname;
        return $this;
    }

    /**
     * Get purchase_merchantname
     *
     * @return string 
     */
    public function getPurchaseMerchantname()
    {
        return $this->purchase_merchantname;
    }

    /**
     * Set purchase_points
     *
     * @param integer $purchasePoints
     * @return Purchase
     */
    public function setPurchasePoints($purchasePoints)
    {
        $this->purchase_points = $purchasePoints;
        return $this;
    }

    /**
     * Get purchase_points
     *
     * @return integer 
     */
    public function getPurchasePoints()
    {
        return $this->purchase_points;
    }

    /**
     * Set created_at
     *
     * @param datetime $createdAt
     * @return Purchase
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
     * @return Purchase
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
     * Set card
     *
     * @param Entities\Wallet\Card $card
     * @return Purchase
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

    /**
     * Set merchant_code
     *
     * @param Entities\Finance\MerchantCode $merchantCode
     * @return Purchase
     */
    public function setMerchantCode(\Entities\Finance\MerchantCode $merchantCode = null)
    {
        $this->merchant_code = $merchantCode;
        return $this;
    }

    /**
     * Get merchant_code
     *
     * @return Entities\Finance\MerchantCode 
     */
    public function getMerchantCode()
    {
        return $this->merchant_code;
    }

    /**
     * Set user
     *
     * @param Entities\User\User $user
     * @return Purchase
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
     * @return Purchase
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
     * @return Purchase
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