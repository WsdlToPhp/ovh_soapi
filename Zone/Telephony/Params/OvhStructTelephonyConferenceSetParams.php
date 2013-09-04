<?php
/**
 * File for class OvhStructTelephonyConferenceSetParams
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyConferenceSetParams originally named telephonyConferenceSetParams
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyConferenceSetParams extends OvhWsdlClass
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
	 * The lang
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $lang;
	/**
	 * The pin
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $pin;
	/**
	 * The enterMuted
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $enterMuted;
	/**
	 * The announceStatus
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $announceStatus;
	/**
	 * The recordStatus
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $recordStatus;
	/**
	 * The reportStatus
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $reportStatus;
	/**
	 * The reportMail
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $reportMail;
	/**
	 * Constructor method for telephonyConferenceSetParams
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_number
	 * @param string $_country
	 * @param string $_lang
	 * @param string $_pin
	 * @param boolean $_enterMuted
	 * @param boolean $_announceStatus
	 * @param boolean $_recordStatus
	 * @param string $_reportStatus
	 * @param string $_reportMail
	 * @return OvhStructTelephonyConferenceSetParams
	 */
	public function __construct($_session = NULL,$_number = NULL,$_country = NULL,$_lang = NULL,$_pin = NULL,$_enterMuted = NULL,$_announceStatus = NULL,$_recordStatus = NULL,$_reportStatus = NULL,$_reportMail = NULL)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'lang'=>$_lang,'pin'=>$_pin,'enterMuted'=>$_enterMuted,'announceStatus'=>$_announceStatus,'recordStatus'=>$_recordStatus,'reportStatus'=>$_reportStatus,'reportMail'=>$_reportMail));
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
	 * Get lang value
	 * @return string|null
	 */
	public function getLang()
	{
		return $this->lang;
	}
	/**
	 * Set lang value
	 * @param string $_lang the lang
	 * @return string
	 */
	public function setLang($_lang)
	{
		return ($this->lang = $_lang);
	}
	/**
	 * Get pin value
	 * @return string|null
	 */
	public function getPin()
	{
		return $this->pin;
	}
	/**
	 * Set pin value
	 * @param string $_pin the pin
	 * @return string
	 */
	public function setPin($_pin)
	{
		return ($this->pin = $_pin);
	}
	/**
	 * Get enterMuted value
	 * @return boolean|null
	 */
	public function getEnterMuted()
	{
		return $this->enterMuted;
	}
	/**
	 * Set enterMuted value
	 * @param boolean $_enterMuted the enterMuted
	 * @return boolean
	 */
	public function setEnterMuted($_enterMuted)
	{
		return ($this->enterMuted = $_enterMuted);
	}
	/**
	 * Get announceStatus value
	 * @return boolean|null
	 */
	public function getAnnounceStatus()
	{
		return $this->announceStatus;
	}
	/**
	 * Set announceStatus value
	 * @param boolean $_announceStatus the announceStatus
	 * @return boolean
	 */
	public function setAnnounceStatus($_announceStatus)
	{
		return ($this->announceStatus = $_announceStatus);
	}
	/**
	 * Get recordStatus value
	 * @return boolean|null
	 */
	public function getRecordStatus()
	{
		return $this->recordStatus;
	}
	/**
	 * Set recordStatus value
	 * @param boolean $_recordStatus the recordStatus
	 * @return boolean
	 */
	public function setRecordStatus($_recordStatus)
	{
		return ($this->recordStatus = $_recordStatus);
	}
	/**
	 * Get reportStatus value
	 * @return string|null
	 */
	public function getReportStatus()
	{
		return $this->reportStatus;
	}
	/**
	 * Set reportStatus value
	 * @param string $_reportStatus the reportStatus
	 * @return string
	 */
	public function setReportStatus($_reportStatus)
	{
		return ($this->reportStatus = $_reportStatus);
	}
	/**
	 * Get reportMail value
	 * @return string|null
	 */
	public function getReportMail()
	{
		return $this->reportMail;
	}
	/**
	 * Set reportMail value
	 * @param string $_reportMail the reportMail
	 * @return string
	 */
	public function setReportMail($_reportMail)
	{
		return ($this->reportMail = $_reportMail);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyConferenceSetParams
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