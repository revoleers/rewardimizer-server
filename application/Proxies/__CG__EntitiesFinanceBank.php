<?php

namespace Proxies\__CG__\Entities\Finance;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Bank extends \Entities\Finance\Bank implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function getBankId()
    {
        $this->__load();
        return parent::getBankId();
    }

    public function setBankName($bankName)
    {
        $this->__load();
        return parent::setBankName($bankName);
    }

    public function getBankName()
    {
        $this->__load();
        return parent::getBankName();
    }

    public function addService(\Entities\Finance\Service $services)
    {
        $this->__load();
        return parent::addService($services);
    }

    public function getServices()
    {
        $this->__load();
        return parent::getServices();
    }

    public function addCard(\Entities\Wallet\Card $cards)
    {
        $this->__load();
        return parent::addCard($cards);
    }

    public function getCards()
    {
        $this->__load();
        return parent::getCards();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'bank_id', 'bank_name', 'cards', 'services');
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