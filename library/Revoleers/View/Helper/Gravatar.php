<?php

class Revoleers_View_Helper_Gravatar extends Zend_View_Helper_Abstract
{
    /**
	* Compile a gravatar url.
	*
	* @param string $email User's email.
	* @param int $size Size of avatar (it's squared).
	* @param string $rating Rating of avatar.
	* @param string $default Image style to show if no avatar found.
	*
	* @return string A gravatar url.
	*
	* @see http://en.gravatar.com/site/implement/url
	*/
    public function gravatar($email, $size = 80, $rating = "g", $default = "mm")
    {
        $url = "http://www.gravatar.com/avatar/";
        $url .= md5(strtolower(trim($email)));
        $url .= "?s={$size}&amp;r={$rating}&amp;d={$default}";

        return $url;
    }
}
