<?php

namespace Entities\Wallet;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\Wallet\CardType
 */
class CardType
{
    /**
     * @var integer $cardtype_id
     */
    private $cardtype_id;

    /**
     * @var string $cardtype_name
     */
    private $cardtype_name;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    private $cards;

    public function __construct()
    {
        $this->cards = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get cardtype_id
     *
     * @return integer 
     */
    public function getCardtypeId()
    {
        return $this->cardtype_id;
    }

    /**
     * Set cardtype_name
     *
     * @param string $cardtypeName
     * @return CardType
     */
    public function setCardtypeName($cardtypeName)
    {
        $this->cardtype_name = $cardtypeName;
        return $this;
    }

    /**
     * Get cardtype_name
     *
     * @return string 
     */
    public function getCardtypeName()
    {
        return $this->cardtype_name;
    }

    /**
     * Add cards
     *
     * @param Entities\Wallet\Card $cards
     * @return CardType
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