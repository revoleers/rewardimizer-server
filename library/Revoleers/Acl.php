<?php

class Revoleers_Acl extends Zend_Acl {
    public function __construct($roles, $resource)
    {       
        $resourceObj = new Zend_Acl_Resource($resource);
        $this->add($resourceObj);
        
        // parse user specific roles
        foreach ($roles as $rolename => $aclfields) {
            $role = new Zend_Acl_Role($rolename);
            if (isset($aclfields['inherits'])) {
                $this->addRole($role,$aclfields['inherits']);
            } else { 
                $this->addRole($role);
            }
            
            if (isset($aclfields['acl'])) {
                $privileges = $aclfields['acl'];
                foreach($privileges as $arr) {
                    $privilege = $arr['privilege'];
                    
                    if (isset($arr['assertion'])) {
                        $assertObj = $arr['assertion'];
                        $assertion = new $assertObj();
                        $this->allow($role, $resource, $privilege, $assertion);
                    } else {
                        $this->allow($role, $resource, $privilege);
                    }
                }
            }
        }
    }
}