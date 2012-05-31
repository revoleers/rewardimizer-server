<?php

/**
 *  Form class that by default adds a Hash to a Zend_Form.
 */
class Revoleers_Form extends Zend_Form
{
    protected $_hashElement = null;
    
    /**
     * Basic element filters
     * @var array
     */
    protected $elementFilters = array('StringTrim', 'StripTags');
    

    public function __construct($options = null)
    {
        $this->_setupTranslation();
        
        $this->addPrefixPath('Revoleers_Form_Element', 'Revoleers/Form/Element', 'element');
        
        parent::__construct($options);

        // add a hash to this form unless a config setting says otherwise
        $this->_hashElement = Revoleers_Util_Hash::checkAddHashToForm($this);
        
        $this->addElementPrefixPath('Revoleers_Validate', 'Revoleers/Validate', 'validate');
        $this->addElementPrefixPath('Revoleers_Form_Decorator', 'Revoleers/Form/Decorator/', 'decorator');
    }

    public function getHashElement()
    {
        return $this->_hashElement;
    }
    
    /**
     * Retrieve error messages with custom labels
     *
     * @return array
     */
    public function getServerErrors()
    {
        $srvErrors   = array();
        $errMessages = $this->getMessages();
        
        foreach ($errMessages as $name => $err) {
            if (is_array($err)) {
                foreach ($err as $errName => $errMessage) {
                    $label = $this->getElement($name)->getLabel();
                    $srvErrors[$label] = $errMessage;
                }
            }
            else {
                if (preg_match('/:/', $err) > 0) {
                    $err = explode(':', $err);
                    $srvErrors[$err[0]] = $err[1];
                } else {
                    if (preg_match('/Date/', $err) > 0) {
                        $srvErrors['Start/End Date'] = $err;
                    }
                    else {
                        $srvErrors['Other'] = $err;
                    }
                }
            }
        }
        
        return $srvErrors;
    }
    
    protected function _setupTranslation()
    {
        if(self::getDefaultTranslator()) {
            return;
        }
        $path = dirname(__FILE__) . '/Translate/forms.php';
        $translate = new Zend_Translate('array', $path, 'en');
        Zend_Form::setDefaultTranslator($translate);
    }

    /**
     * Load the default decorators
     *
     * @return void
     */
    public function loadDefaultDecorators()
    {
        if ($this->loadDefaultDecoratorsIsDisabled()) {
            return $this;
        }

        $decorators = $this->getDecorators();
        if (empty($decorators)) {
            $this->addDecorator('FormElements')
                 ->addDecorator('Form');
        }
        return $this;
    }
}