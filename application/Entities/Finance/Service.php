<?php

namespace Entities\Finance;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\Finance\Service
 */
class Service
{
    /**
     * @var integer $service_id
     */
    private $service_id;

    /**
     * @var string $service_name
     */
    private $service_name;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $banks;

    public function __construct()
    {
        $this->banks = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get service_id
     *
     * @return integer 
     */
    public function getServiceId()
    {
        return $this->service_id;
    }

    /**
     * Set service_name
     *
     * @param string $serviceName
     * @return Service
     */
    public function setServiceName($serviceName)
    {
        $this->service_name = $serviceName;
        return $this;
    }

    /**
     * Get service_name
     *
     * @return string 
     */
    public function getServiceName()
    {
        return $this->service_name;
    }

    /**
     * Add banks
     *
     * @param Entities\Finance\Bank $banks
     * @return Service
     */
    public function addBank(\Entities\Finance\Bank $banks)
    {
        $this->banks[] = $banks;
        return $this;
    }

    /**
     * Get banks
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getBanks()
    {
        return $this->banks;
    }
}