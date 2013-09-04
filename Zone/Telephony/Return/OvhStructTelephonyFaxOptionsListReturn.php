<?php
/**
 * File for class OvhStructTelephonyFaxOptionsListReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyFaxOptionsListReturn originally named telephonyFaxOptionsListReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyFaxOptionsListReturn extends OvhWsdlClass
{
	/**
	 * The callNumber
	 * @var string
	 */
	public $callNumber;
	/**
	 * The countryCode
	 * @var string
	 */
	public $countryCode;
	/**
	 * The fromName
	 * @var string
	 */
	public $fromName;
	/**
	 * The fromEmail
	 * @var string
	 */
	public $fromEmail;
	/**
	 * The faxQuality
	 * @var string
	 */
	public $faxQuality;
	/**
	 * The faxTagLine
	 * @var string
	 */
	public $faxTagLine;
	/**
	 * The faxMaxCall
	 * @var int
	 */
	public $faxMaxCall;
	/**
	 * The receivId
	 * @var string
	 */
	public $receivId;
	/**
	 * The senderId
	 * @var string
	 */
	public $senderId;
	/**
	 * The redirection1Email
	 * @var string
	 */
	public $redirection1Email;
	/**
	 * The redirection2Email
	 * @var string
	 */
	public $redirection2Email;
	/**
	 * The redirection3Email
	 * @var string
	 */
	public $redirection3Email;
	/**
	 * The redirection4Email
	 * @var string
	 */
	public $redirection4Email;
	/**
	 * The redirection5Email
	 * @var string
	 */
	public $redirection5Email;
	/**
	 * Constructor method for telephonyFaxOptionsListReturn
	 * @see parent::__construct()
	 * @param string $_callNumber
	 * @param string $_countryCode
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
	 * @return OvhStructTelephonyFaxOptionsListReturn
	 */
	public function __construct($_callNumber = NULL,$_countryCode = NULL,$_fromName = NULL,$_fromEmail = NULL,$_faxQuality = NULL,$_faxTagLine = NULL,$_faxMaxCall = NULL,$_receivId = NULL,$_senderId = NULL,$_redirection1Email = NULL,$_redirection2Email = NULL,$_redirection3Email = NULL,$_redirection4Email = NULL,$_redirection5Email = NULL)
	{
		parent::__construct(array('callNumber'=>$_callNumber,'countryCode'=>$_countryCode,'fromName'=>$_fromName,'fromEmail'=>$_fromEmail,'faxQuality'=>$_faxQuality,'faxTagLine'=>$_faxTagLine,'faxMaxCall'=>$_faxMaxCall,'receivId'=>$_receivId,'senderId'=>$_senderId,'redirection1Email'=>$_redirection1Email,'redirection2Email'=>$_redirection2Email,'redirection3Email'=>$_redirection3Email,'redirection4Email'=>$_redirection4Email,'redirection5Email'=>$_redirection5Email));
	}
	/**
	 * Get callNumber value
	 * @return string|null
	 */
	public function getCallNumber()
	{
		return $this->callNumber;
	}
	/**
	 * Set callNumber value
	 * @param string $_callNumber the callNumber
	 * @return string
	 */
	public function setCallNumber($_callNumber)
	{
		return ($this->callNumber = $_callNumber);
	}
	/**
	 * Get countryCode value
	 * @return string|null
	 */
	public function getCountryCode()
	{
		return $this->countryCode;
	}
	/**
	 * Set countryCode value
	 * @param string $_countryCode the countryCode
	 * @return string
	 */
	public function setCountryCode($_countryCode)
	{
		return ($this->countryCode = $_countryCode);
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
	 * @return OvhStructTelephonyFaxOptionsListReturn
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