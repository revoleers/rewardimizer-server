<?php
interface Revoleers_Auth_Strategy_Interface extends Zend_Auth_Adapter_Interface
{
  public function setAdapter(Revoleers_Auth_Adapter_Multipath $adapter);
  public function getForm();
  public function shouldAuthenticate();
}