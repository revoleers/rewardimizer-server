<?php

class Revoleers_Social_Janrain_Call
{
   public static function factory ($type, $params = array())
    {
        $call;
        
        switch ($type) {
            case Revoleers_Social_Janrain::AUTH_INFO:
                $call =  new Revoleers_Social_Janrain_Call_AuthInfo($params);
                break;
            case Revoleers_Social_Janrain::GET_CONTACTS:
                $call =  new Revoleers_Social_Janrain_Call_GetContacts();
                break;
            default:
                throw new Exception("Call $type not found");
        }
        
        return $call;
    }
}