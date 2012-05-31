<?php

namespace Entities\Google;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\Google\PlaceType
 */
class PlaceType
{
    /**
     * @var integer $googleplacetype_id
     */
    private $googleplacetype_id;

    /**
     * @var string $googleplacetype_name
     */
    private $googleplacetype_name;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $merchant_codes;

    public function __construct()
    {
        $this->merchant_codes = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get googleplacetype_id
     *
     * @return integer 
     */
    public function getGoogleplacetypeId()
    {
        return $this->googleplacetype_id;
    }

    /**
     * Set googleplacetype_name
     *
     * @param string $googleplacetypeName
     * @return PlaceType
     */
    public function setGoogleplacetypeName($googleplacetypeName)
    {
        $this->googleplacetype_name = $googleplacetypeName;
        return $this;
    }

    /**
     * Get googleplacetype_name
     *
     * @return string 
     */
    public function getGoogleplacetypeName()
    {
        return $this->googleplacetype_name;
    }

    /**
     * Add merchant_codes
     *
     * @param Entities\Finance\MerchantCode $merchantCodes
     * @return PlaceType
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