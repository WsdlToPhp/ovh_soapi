<?php
/**
 * File for class OvhStructTelephonyFaxOptionsModify
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyFaxOptionsModify originally named telephonyFaxOptionsModify
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyFaxOptionsModify extends OvhWsdlClass
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
	 * The fromName
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $fromName;
	/**
	 * The fromEmail
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $fromEmail;
	/**
	 * The faxQuality
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $faxQuality;
	/**
	 * The faxTagLine
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $faxTagLine;
	/**
	 * The faxMaxCall
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $faxMaxCall;
	/**
	 * The receivId
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $receivId;
	/**
	 * The senderId
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $senderId;
	/**
	 * The redirection1Email
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $redirection1Email;
	/**
	 * The redirection2Email
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $redirection2Email;
	/**
	 * The redirection3Email
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $redirection3Email;
	/**
	 * The redirection4Email
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $redirection4Email;
	/**
	 * The redirection5Email
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $redirection5Email;
	/**
	 * Constructor method for telephonyFaxOptionsModify
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_number
	 * @param string $_country
	 * @param string $_fromName
	 * @param string $_fromEmail
	 * @param string $_faxQuality
	 * @param string $_faxTagLine
	 * @param int $_faxMaxCall
	 * @param string $_receivId
	 * @param string $_senderId
	 * @param string $_redirection1Email
	 * @param string $_redirection2Email
	 * @param string $_redirection3Email
	 * @param string $_redirection4Email
	 * @param string $_redirection5Email
	 * @return OvhStructTelephonyFaxOptionsModify
	 */
	public function __construct($_session = NULL,$_number = NULL,$_country = NULL,$_fromName = NULL,$_fromEmail = NULL,$_faxQuality = NULL,$_faxTagLine = NULL,$_faxMaxCall = NULL,$_receivId = NULL,$_senderId = NULL,$_redirection1Email = NULL,$_redirection2Email = NULL,$_redirection3Email = NULL,$_redirection4Email = NULL,$_redirection5Email = NULL)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'fromName'=>$_fromName,'fromEmail'=>$_fromEmail,'faxQuality'=>$_faxQuality,'faxTagLine'=>$_faxTagLine,'faxMaxCall'=>$_faxMaxCall,'receivId'=>$_receivId,'senderId'=>$_senderId,'redirection1Email'=>$_redirection1Email,'redirection2Email'=>$_redirection2Email,'redirection3Email'=>$_redirection3Email,'redirection4Email'=>$_redirection4Email,'redirection5Email'=>$_redirection5Email));
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
	 * Get faxQuality value
	 * @return string|null
	 */
	public function getFaxQuality()
	{
		return $this->faxQuality;
	}
	/**
	 * Set faxQuality value
	 * @param string $_faxQuality the faxQuality
	 * @return string
	 */
	public function setFaxQuality($_faxQuality)
	{
		return ($this->faxQuality = $_faxQuality);
	}
	/**
	 * Get faxTagLine value
	 * @return string|null
	 */
	public function getFaxTagLine()
	{
		return $this->faxTagLine;
	}
	/**
	 * Set faxTagLine value
	 * @param string $_faxTagLine the faxTagLine
	 * @return string
	 */
	public function setFaxTagLine($_faxTagLine)
	{
		return ($this->faxTagLine = $_faxTagLine);
	}
	/**
	 * Get faxMaxCall value
	 * @return int|null
	 */
	public function getFaxMaxCall()
	{
		return $this->faxMaxCall;
	}
	/**
	 * Set faxMaxCall value
	 * @param int $_faxMaxCall the faxMaxCall
	 * @return int
	 */
	public function setFaxMaxCall($_faxMaxCall)
	{
		return ($this->faxMaxCall = $_faxMaxCall);
	}
	/**
	 * Get receivId value
	 * @return string|null
	 */
	public function getReceivId()
	{
		return $this->receivId;
	}
	/**
	 * Set receivId value
	 * @param string $_receivId the receivId
	 * @return string
	 */
	public function setReceivId($_receivId)
	{
		return ($this->receivId = $_receivId);
	}
	/**
	 * Get senderId value
	 * @return string|null
	 */
	public function getSenderId()
	{
		return $this->senderId;
	}
	/**
	 * Set senderId value
	 * @param string $_senderId the senderId
	 * @return string
	 */
	public function setSenderId($_senderId)
	{
		return ($this->senderId = $_senderId);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyFaxOptionsModify
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