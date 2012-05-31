<?php

namespace Entities\Reward;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\Reward\Program
 */
class Program
{
    /**
     * @var integer $program_id
     */
    private $program_id;

    /**
     * @var string $program_name
     */
    private $program_name;

    /**
     * @var text $program_desc
     */
    private $program_desc;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $cards;

    public function __construct()
    {
        $this->cards = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get program_id
     *
     * @return integer 
     */
    public function getProgramId()
    {
        return $this->program_id;
    }

    /**
     * Set program_name
     *
     * @param string $programName
     * @return Program
     */
    public function setProgramName($programName)
    {
        $this->program_name = $programName;
        return $this;
    }

    /**
     * Get program_name
     *
     * @return string 
     */
    public function getProgramName()
    {
        return $this->program_name;
    }

    /**
     * Set program_desc
     *
     * @param text $programDesc
     * @return Program
     */
    public function setProgramDesc($programDesc)
    {
        $this->program_desc = $programDesc;
        return $this;
    }

    /**
     * Get program_desc
     *
     * @return text 
     */
    public function getProgramDesc()
    {
        return $this->program_desc;
    }

    /**
     * Add cards
     *
     * @param Entities\Wallet\Card $cards
     * @return Program
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