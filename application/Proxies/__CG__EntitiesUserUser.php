<?php

namespace Proxies\__CG__\Entities\User;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class User extends \Entities\User\User implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function getUserId()
    {
        $this->__load();
        return parent::getUserId();
    }

    public function setUserFirstname($userFirstname)
    {
        $this->__load();
        return parent::setUserFirstname($userFirstname);
    }

    public function getUserFirstname()
    {
        $this->__load();
        return parent::getUserFirstname();
    }

    public function setUserLastname($userLastname)
    {
        $this->__load();
        return parent::setUserLastname($userLastname);
    }

    public function getUserLastname()
    {
        $this->__load();
        return parent::getUserLastname();
    }

    public function setUserMiddlename($userMiddlename)
    {
        $this->__load();
        return parent::setUserMiddlename($userMiddlename);
    }

    public function getUserMiddlename()
    {
        $this->__load();
        return parent::getUserMiddlename();
    }

    public function setUserEmail($userEmail)
    {
        $this->__load();
        return parent::setUserEmail($userEmail);
    }

    public function getUserEmail()
    {
        $this->__load();
        return parent::getUserEmail();
    }

    public function setUserAgreeterms($userAgreeterms)
    {
        $this->__load();
        return parent::setUserAgreeterms($userAgreeterms);
    }

    public function getUserAgreeterms()
    {
        $this->__load();
        return parent::getUserAgreeterms();
    }

    public function setUserAdmin($userAdmin)
    {
        $this->__load();
        return parent::setUserAdmin($userAdmin);
    }

    public function getUserAdmin()
    {
        $this->__load();
        return parent::getUserAdmin();
    }

    public function setStatus($status)
    {
        $this->__load();
        return parent::setStatus($status);
    }

    public function getStatus()
    {
        $this->__load();
        return parent::getStatus();
    }

    public function setDeleted($deleted)
    {
        $this->__load();
        return parent::setDeleted($deleted);
    }

    public function getDeleted()
    {
        $this->__load();
        return parent::getDeleted();
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

    public function setWallet(\Entities\Wallet\Wallet $wallet = NULL)
    {
        $this->__load();
        return parent::setWallet($wallet);
    }

    public function getWallet()
    {
        $this->__load();
        return parent::getWallet();
    }

    public function addSocialSignon(\Entities\User\SocialSignon $socialsignons)
    {
        $this->__load();
        return parent::addSocialSignon($socialsignons);
    }

    public function getSocialsignons()
    {
        $this->__load();
        return parent::getSocialsignons();
    }

    public function setCreatedBy(\Entities\User\User $createdBy = NULL)
    {
        $this->__load();
        return parent::setCreatedBy($createdBy);
    }

    public function getCreatedBy()
    {
        $this->__load();
        return parent::getCreatedBy();
    }

    public function setModifiedBy(\Entities\User\User $modifiedBy = NULL)
    {
        $this->__load();
        return parent::setModifiedBy($modifiedBy);
    }

    public function getModifiedBy()
    {
        $this->__load();
        return parent::getModifiedBy();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'user_id', 'user_firstname', 'user_lastname', 'user_middlename', 'user_email', 'user_agreeterms', 'user_admin', 'status', 'deleted', 'created_at', 'modified_at', 'wallet', 'socialsignons', 'created_by', 'modified_by');
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