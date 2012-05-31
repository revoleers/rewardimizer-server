<?php

namespace Entities\Finance;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\Finance\SpendCategory
 */
class SpendCategory
{
    /**
     * @var integer $spendcategory_id
     */
    private $spendcategory_id;

    /**
     * @var string $spendcategory_name
     */
    private $spendcategory_name;

    /**
     * @var string $spendcategory_desc
     */
    private $spendcategory_desc;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $merchant_codes;

    public function __construct()
    {
        $this->merchant_codes = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get spendcategory_id
     *
     * @return integer 
     */
    public function getSpendcategoryId()
    {
        return $this->spendcategory_id;
    }

    /**
     * Set spendcategory_name
     *
     * @param string $spendcategoryName
     * @return SpendCategory
     */
    public function setSpendcategoryName($spendcategoryName)
    {
        $this->spendcategory_name = $spendcategoryName;
        return $this;
    }

    /**
     * Get spendcategory_name
     *
     * @return string 
     */
    public function getSpendcategoryName()
    {
        return $this->spendcategory_name;
    }

    /**
     * Set spendcategory_desc
     *
     * @param string $spendcategoryDesc
     * @return SpendCategory
     */
    public function setSpendcategoryDesc($spendcategoryDesc)
    {
        $this->spendcategory_desc = $spendcategoryDesc;
        return $this;
    }

    /**
     * Get spendcategory_desc
     *
     * @return string 
     */
    public function getSpendcategoryDesc()
    {
        return $this->spendcategory_desc;
    }

    /**
     * Add merchant_codes
     *
     * @param Entities\Finance\MerchantCode $merchantCodes
     * @return SpendCategory
     */
    public function addMerchantCode(\Entities\Finance\MerchantCode $merchantCodes)
    {
        $this->merchant_codes[] = $merchantCodes;
        return $this;
    }

    /**
     * Get merchant_codes
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getMerchantCodes()
    {
        return $this->merchant_codes;
    }
}