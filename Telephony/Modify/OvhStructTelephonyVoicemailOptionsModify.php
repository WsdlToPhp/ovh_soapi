<?php
/**
 * File for class OvhStructTelephonyVoicemailOptionsModify
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyVoicemailOptionsModify originally named telephonyVoicemailOptionsModify
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyVoicemailOptionsModify extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The number
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $number;
	/**
	 * The country
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $country;
	/**
	 * The redirection1
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $redirection1;
	/**
	 * The redirection1Email
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $redirection1Email;
	/**
	 * The redirection2
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $redirection2;
	/**
	 * The redirection2Email
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $redirection2Email;
	/**
	 * The redirection3
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $redirection3;
	/**
	 * The redirection3Email
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $redirection3Email;
	/**
	 * The redirection4
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $redirection4;
	/**
	 * The redirection4Email
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $redirection4Email;
	/**
	 * The redirection5
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $redirection5;
	/**
	 * The redirection5Email
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $redirection5Email;
	/**
	 * The announceMessage
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $announceMessage;
	/**
	 * The keepMessage
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $keepMessage;
	/**
	 * The audioformat
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $audioformat;
	/**
	 * The fromEmail
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $fromEmail;
	/**
	 * The fromName
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $fromName;
	/**
	 * The doNotRecord
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $doNotRecord;
	/**
	 * The forcePassword
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $forcePassword;
	/**
	 * Constructor method for telephonyVoicemailOptionsModify
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_number
	 * @param string $_country
	 * @param string $_redirection1
	 * @param string $_redirection1Email
	 * @param string $_redirection2
	 * @param string $_redirection2Email
	 * @param string $_redirection3
	 * @param string $_redirection3Email
	 * @param string $_redirection4
	 * @param string $_redirection4Email
	 * @param string $_redirection5
	 * @param string $_redirection5Email
	 * @param string $_announceMessage
	 * @param boolean $_keepMessage
	 * @param string $_audioformat
	 * @param string $_fromEmail
	 * @param string $_fromName
	 * @param boolean $_doNotRecord
	 * @param boolean $_forcePassword
	 * @return OvhStructTelephonyVoicemailOptionsModify
	 */
	public function __construct($_session = NULL,$_number = NULL,$_country = NULL,$_redirection1 = NULL,$_redirection1Email = NULL,$_redirection2 = NULL,$_redirection2Email = NULL,$_redirection3 = NULL,$_redirection3Email = NULL,$_redirection4 = NULL,$_redirection4Email = NULL,$_redirection5 = NULL,$_redirection5Email = NULL,$_announceMessage = NULL,$_keepMessage = NULL,$_audioformat = NULL,$_fromEmail = NULL,$_fromName = NULL,$_doNotRecord = NULL,$_forcePassword = NULL)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'redirection1'=>$_redirection1,'redirection1Email'=>$_redirection1Email,'redirection2'=>$_redirection2,'redirection2Email'=>$_redirection2Email,'redirection3'=>$_redirection3,'redirection3Email'=>$_redirection3Email,'redirection4'=>$_redirection4,'redirection4Email'=>$_redirection4Email,'redirection5'=>$_redirection5,'redirection5Email'=>$_redirection5Email,'announceMessage'=>$_announceMessage,'keepMessage'=>$_keepMessage,'audioformat'=>$_audioformat,'fromEmail'=>$_fromEmail,'fromName'=>$_fromName,'doNotRecord'=>$_doNotRecord,'forcePassword'=>$_forcePassword));
	}
	/**
	 * Get session value
	 * @return string|null
	 */
	public function getSession()
	{
		return $this->session;
	}
	/**
	 * Set session value
	 * @param string $_session the session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get number value
	 * @return string|null
	 */
	public function getNumber()
	{
		return $this->number;
	}
	/**
	 * Set number value
	 * @param string $_number the number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get country value
	 * @return string|null
	 */
	public function getCountry()
	{
		return $this->country;
	}
	/**
	 * Set country value
	 * @param string $_country the country
	 * @return string
	 */
	public function setCountry($_country)
	{
		return ($this->country = $_country);
	}
	/**
	 * Get redirection1 value
	 * @return string|null
	 */
	public function getRedirection1()
	{
		return $this->redirection1;
	}
	/**
	 * Set redirection1 value
	 * @param string $_redirection1 the redirection1
	 * @return string
	 */
	public function setRedirection1($_redirection1)
	{
		return ($this->redirection1 = $_redirection1);
	}
	/**
	 * Get redirection1Email value
	 * @return string|null
	 */
	public function getRedirection1Email()
	{
		return $this->redirection1Email;
	}
	/**
	 * Set redirection1Email value
	 * @param string $_redirection1Email the redirection1Email
	 * @return string
	 */
	public function setRedirection1Email($_redirection1Email)
	{
		return ($this->redirection1Email = $_redirection1Email);
	}
	/**
	 * Get redirection2 value
	 * @return string|null
	 */
	public function getRedirection2()
	{
		return $this->redirection2;
	}
	/**
	 * Set redirection2 value
	 * @param string $_redirection2 the redirection2
	 * @return string
	 */
	public function setRedirection2($_redirection2)
	{
		return ($this->redirection2 = $_redirection2);
	}
	/**
	 * Get redirection2Email value
	 * @return string|null
	 */
	public function getRedirection2Email()
	{
		return $this->redirection2Email;
	}
	/**
	 * Set redirection2Email value
	 * @param string $_redirection2Email the redirection2Email
	 * @return string
	 */
	public function setRedirection2Email($_redirection2Email)
	{
		return ($this->redirection2Email = $_redirection2Email);
	}
	/**
	 * Get redirection3 value
	 * @return string|null
	 */
	public function getRedirection3()
	{
		return $this->redirection3;
	}
	/**
	 * Set redirection3 value
	 * @param string $_redirection3 the redirection3
	 * @return string
	 */
	public function setRedirection3($_redirection3)
	{
		return ($this->redirection3 = $_redirection3);
	}
	/**
	 * Get redirection3Email value
	 * @return string|null
	 */
	public function getRedirection3Email()
	{
		return $this->redirection3Email;
	}
	/**
	 * Set redirection3Email value
	 * @param string $_redirection3Email the redirection3Email
	 * @return string
	 */
	public function setRedirection3Email($_redirection3Email)
	{
		return ($this->redirection3Email = $_redirection3Email);
	}
	/**
	 * Get redirection4 value
	 * @return string|null
	 */
	public function getRedirection4()
	{
		return $this->redirection4;
	}
	/**
	 * Set redirection4 value
	 * @param string $_redirection4 the redirection4
	 * @return string
	 */
	public function setRedirection4($_redirection4)
	{
		return ($this->redirection4 = $_redirection4);
	}
	/**
	 * Get redirection4Email value
	 * @return string|null
	 */
	public function getRedirection4Email()
	{
		return $this->redirection4Email;
	}
	/**
	 * Set redirection4Email value
	 * @param string $_redirection4Email the redirection4Email
	 * @return string
	 */
	public function setRedirection4Email($_redirection4Email)
	{
		return ($this->redirection4Email = $_redirection4Email);
	}
	/**
	 * Get redirection5 value
	 * @return string|null
	 */
	public function getRedirection5()
	{
		return $this->redirection5;
	}
	/**
	 * Set redirection5 value
	 * @param string $_redirection5 the redirection5
	 * @return string
	 */
	public function setRedirection5($_redirection5)
	{
		return ($this->redirection5 = $_redirection5);
	}
	/**
	 * Get redirection5Email value
	 * @return string|null
	 */
	public function getRedirection5Email()
	{
		return $this->redirection5Email;
	}
	/**
	 * Set redirection5Email value
	 * @param string $_redirection5Email the redirection5Email
	 * @return string
	 */
	public function setRedirection5Email($_redirection5Email)
	{
		return ($this->redirection5Email = $_redirection5Email);
	}
	/**
	 * Get announceMessage value
	 * @return string|null
	 */
	public function getAnnounceMessage()
	{
		return $this->announceMessage;
	}
	/**
	 * Set announceMessage value
	 * @param string $_announceMessage the announceMessage
	 * @return string
	 */
	public function setAnnounceMessage($_announceMessage)
	{
		return ($this->announceMessage = $_announceMessage);
	}
	/**
	 * Get keepMessage value
	 * @return boolean|null
	 */
	public function getKeepMessage()
	{
		return $this->keepMessage;
	}
	/**
	 * Set keepMessage value
	 * @param boolean $_keepMessage the keepMessage
	 * @return boolean
	 */
	public function setKeepMessage($_keepMessage)
	{
		return ($this->keepMessage = $_keepMessage);
	}
	/**
	 * Get audioformat value
	 * @return string|null
	 */
	public function getAudioformat()
	{
		return $this->audioformat;
	}
	/**
	 * Set audioformat value
	 * @param string $_audioformat the audioformat
	 * @return string
	 */
	public function setAudioformat($_audioformat)
	{
		return ($this->audioformat = $_audioformat);
	}
	/**
	 * Get fromEmail value
	 * @return string|null
	 */
	public function getFromEmail()
	{
		return $this->fromEmail;
	}
	/**
	 * Set fromEmail value
	 * @param string $_fromEmail the fromEmail
	 * @return string
	 */
	public function setFromEmail($_fromEmail)
	{
		return ($this->fromEmail = $_fromEmail);
	}
	/**
	 * Get fromName value
	 * @return string|null
	 */
	public function getFromName()
	{
		return $this->fromName;
	}
	/**
	 * Set fromName value
	 * @param string $_fromName the fromName
	 * @return string
	 */
	public function setFromName($_fromName)
	{
		return ($this->fromName = $_fromName);
	}
	/**
	 * Get doNotRecord value
	 * @return boolean|null
	 */
	public function getDoNotRecord()
	{
		return $this->doNotRecord;
	}
	/**
	 * Set doNotRecord value
	 * @param boolean $_doNotRecord the doNotRecord
	 * @return boolean
	 */
	public function setDoNotRecord($_doNotRecord)
	{
		return ($this->doNotRecord = $_doNotRecord);
	}
	/**
	 * Get forcePassword value
	 * @return boolean|null
	 */
	public function getForcePassword()
	{
		return $this->forcePassword;
	}
	/**
	 * Set forcePassword value
	 * @param boolean $_forcePassword the forcePassword
	 * @return boolean
	 */
	public function setForcePassword($_forcePassword)
	{
		return ($this->forcePassword = $_forcePassword);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyVoicemailOptionsModify
	 */
	public static function __set_state(array $_array,$_className = __CLASS__)
	{
		return parent::__set_state($_array,$_className);
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>