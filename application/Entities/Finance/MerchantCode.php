<?php

namespace Entities\Finance;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\Finance\MerchantCode
 */
class MerchantCode
{
    /**
     * @var integer $merchantcode_id
     */
    private $merchantcode_id;

    /**
     * @var integer $merchantcode_code
     */
    private $merchantcode_code;

    /**
     * @var string $merchantcode_name
     */
    private $merchantcode_name;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $purchases;

    /**
     * @var Entities\Finance\SpendCategory
     */
    private $spend_category;

    /**
     * @var Entities\Google\PlaceType
     */
    private $place_type;

    public function __construct()
    {
        $this->purchases = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get merchantcode_id
     *
     * @return integer 
     */
    public function getMerchantcodeId()
    {
        return $this->merchantcode_id;
    }

    /**
     * Set merchantcode_code
     *
     * @param integer $merchantcodeCode
     * @return MerchantCode
     */
    public function setMerchantcodeCode($merchantcodeCode)
    {
        $this->merchantcode_code = $merchantcodeCode;
        return $this;
    }

    /**
     * Get merchantcode_code
     *
     * @return integer 
     */
    public function getMerchantcodeCode()
    {
        return $this->merchantcode_code;
    }

    /**
     * Set merchantcode_name
     *
     * @param string $merchantcodeName
     * @return MerchantCode
     */
    public function setMerchantcodeName($merchantcodeName)
    {
        $this->merchantcode_name = $merchantcodeName;
        return $this;
    }

    /**
     * Get merchantcode_name
     *
     * @return string 
     */
    public function getMerchantcodeName()
    {
        return $this->merchantcode_name;
    }

    /**
     * Add purchases
     *
     * @param Entities\Finance\Purchase $purchases
     * @return MerchantCode
     */
    public function addPurchase(\Entities\Finance\Purchase $purchases)
    {
        $this->purchases[] = $purchases;
        return $this;
    }

    /**
     * Get purchases
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPurchases()
    {
        return $this->purchases;
    }

    /**
     * Set spend_category
     *
     * @param Entities\Finance\SpendCategory $spendCategory
     * @return MerchantCode
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
     * Set place_type
     *
     * @param Entities\Google\PlaceType $placeType
     * @return MerchantCode
     */
    public function setPlaceType(\Entities\Google\PlaceType $placeType = null)
    {
        $this->place_type = $placeType;
        return $this;
    }

    /**
     * Get place_type
     *
     * @return Entities\Google\PlaceType 
     */
    public function getPlaceType()
    {
        return $this->place_type;
    }
}