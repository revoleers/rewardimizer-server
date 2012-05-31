<?php

interface Revoleers_Mail_Template_Interface {
	public function populate (Revoleers_Model_Abstract $model);
	
    public function setRecipientEmail ();
    
    public function getRecipientEmail ();   
    
    public function setRecipientName ();
    
    public function getRecipientName ();
    
    public function setFrom ();
    
    public function getFrom ();
    
    public function setSubject ();
    
    public function getSubject ();
    
    public function setBodyText ();
    
    public function getBodyText ();
    
    public function setBodyHtml ();
    
    public function getBodyHtml ();
    
    public function setSenderEmail ();
    
    public function getSenderEmail ();
    
    public function setSenderName ();
    
    public function getSenderName ();
}