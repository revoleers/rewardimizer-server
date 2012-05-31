<?php

namespace Entities\Finance;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\Finance\Bank
 */
class Bank
{
    /**
     * @var integer $bank_id
     */
    private $bank_id;

    /**
     * @var string $bank_name
     */
    private $bank_name;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $cards;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $services;

    public function __construct()
    {
        $this->cards = new \Doctrine\Common\Collections\ArrayCollection();
        $this->services = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get bank_id
     *
     * @return integer 
     */
    public function getBankId()
    {
        return $this->bank_id;
    }

    /**
     * Set bank_name
     *
     * @param string $bankName
     * @return Bank
     */
    public function setBankName($bankName)
    {
        $this->bank_name = $bankName;
        return $this;
    }

    /**
     * Get bank_name
     *
     * @return string 
     */
    public function getBankName()
    {
        return $this->bank_name;
    }

    /**
     * Add cards
     *
     * @param Entities\Wallet\Card $cards
     * @return Bank
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

    /**
     * Add services
     *
     * @param Entities\Finance\Service $services
     * @return Bank
     */
    public function addService(\Entities\Finance\Service $services)
    {
        $this->services[] = $services;
        return $this;
    }

    /**
     * Get services
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getServices()
    {
        return $this->services;
    }
}