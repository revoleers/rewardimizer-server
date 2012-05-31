<?php

class Revoleers_Social_Janrain_Provider
{ 
    public static function factory ($response)
    {
        $name = self::_getProvider($response);
        $provider;
        
        switch ($name) {
            case Revoleers_Social_Janrain::GOOGLE:
                $provider = new Revoleers_Social_Janrain_Provider_Google($response);
                break;
            case Revoleers_Social_Janrain::TWITTER:
                $provider = new Revoleers_Social_Janrain_Provider_Twitter($response);
                break;
            case Revoleers_Social_Janrain::FACEBOOK:
                $provider = new Revoleers_Social_Janrain_Provider_Facebook($response);
                break;
            case Revoleers_Social_Janrain::LINKEDIN:
                $provider = new Revoleers_Social_Janrain_Provider_LinkedIn($response);
                break;
            case Revoleers_Social_Janrain::YAHOO:
                $provider = new Revoleers_Social_Janrain_Provider_Yahoo($response);
                break;
            default:
                throw new Exception("Provider $name not found");
        }
        
        return $provider;
    }
    
    private function _getProvider ($response) {
        $json = Zend_Json::decode($response->getBody());
        
        if (!isset($json['profile']['providerName'])) {
            throw new Exception('Provider Name not found in response');
        }
        
        return $json['profile']['providerName'];
    }
}