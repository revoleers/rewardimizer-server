<?php

namespace Proxies\__CG__\Entities\Reward;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Reward extends \Entities\Reward\Reward implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getRewardId()
    {
        $this->__load();
        return parent::getRewardId();
    }

    public function setCreatedAt($createdAt)
    {
        $this->__load();
        return parent::setCreatedAt($createdAt);
    }

    public function getCreatedAt()
    {
        $this->__load();
        return parent::getCreatedAt();
    }

    public function setModifiedAt($modifiedAt)
    {
        $this->__load();
        return parent::setModifiedAt($modifiedAt);
    }

    public function getModifiedAt()
    {
        $this->__load();
        return parent::getModifiedAt();
    }

    public function setUser(\Entities\User\User $user = NULL)
    {
        $this->__load();
        return parent::setUser($user);
    }

    public function getUser()
    {
        $this->__load();
        return parent::getUser();
    }

    public function setSpendCategory(\Entities\Finance\SpendCategory $spendCategory = NULL)
    {
        $this->__load();
        return parent::setSpendCategory($spendCategory);
    }

    public function getSpendCategory()
    {
        $this->__load();
        return parent::getSpendCategory();
    }

    public function setCard(\Entities\Wallet\Card $card = NULL)
    {
        $this->__load();
        return parent::setCard($card);
    }

    public function getCard()
    {
        $this->__load();
        return parent::getCard();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'reward_id', 'created_at', 'modified_at', 'user', 'spend_category', 'card');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}