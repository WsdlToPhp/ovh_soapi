<?php
/**
 * File for class OvhStructTelephonyConferenceParamsReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyConferenceParamsReturn originally named telephonyConferenceParamsReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyConferenceParamsReturn extends OvhWsdlClass
{
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The lang
	 * @var string
	 */
	public $lang;
	/**
	 * The pin
	 * @var int
	 */
	public $pin;
	/**
	 * The enterMuted
	 * @var boolean
	 */
	public $enterMuted;
	/**
	 * The announceStatus
	 * @var boolean
	 */
	public $announceStatus;
	/**
	 * The announceFilename
	 * @var string
	 */
	public $announceFilename;
	/**
	 * The recordStatus
	 * @var boolean
	 */
	public $recordStatus;
	/**
	 * The reportStatus
	 * @var string
	 */
	public $reportStatus;
	/**
	 * The reportMail
	 * @var string
	 */
	public $reportMail;
	/**
	 * The eventsHash
	 * @var string
	 */
	public $eventsHash;
	/**
	 * Constructor method for telephonyConferenceParamsReturn
	 * @see parent::__construct()
	 * @param string $_number
	 * @param string $_lang
	 * @param int $_pin
	 * @param boolean $_enterMuted
	 * @param boolean $_announceStatus
	 * @param string $_announceFilename
	 * @param boolean $_recordStatus
	 * @param string $_reportStatus
	 * @param string $_reportMail
	 * @param string $_eventsHash
	 * @return OvhStructTelephonyConferenceParamsReturn
	 */
	public function __construct($_number = NULL,$_lang = NULL,$_pin = NULL,$_enterMuted = NULL,$_announceStatus = NULL,$_announceFilename = NULL,$_recordStatus = NULL,$_reportStatus = NULL,$_reportMail = NULL,$_eventsHash = NULL)
	{
		parent::__construct(array('number'=>$_number,'lang'=>$_lang,'pin'=>$_pin,'enterMuted'=>$_enterMuted,'announceStatus'=>$_announceStatus,'announceFilename'=>$_announceFilename,'recordStatus'=>$_recordStatus,'reportStatus'=>$_reportStatus,'reportMail'=>$_reportMail,'eventsHash'=>$_eventsHash));
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
	 * @return int|null
	 */
	public function getPin()
	{
		return $this->pin;
	}
	/**
	 * Set pin value
	 * @param int $_pin the pin
	 * @return int
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
	 * Get announceFilename value
	 * @return string|null
	 */
	public function getAnnounceFilename()
	{
		return $this->announceFilename;
	}
	/**
	 * Set announceFilename value
	 * @param string $_announceFilename the announceFilename
	 * @return string
	 */
	public function setAnnounceFilename($_announceFilename)
	{
		return ($this->announceFilename = $_announceFilename);
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
	 * Get eventsHash value
	 * @return string|null
	 */
	public function getEventsHash()
	{
		return $this->eventsHash;
	}
	/**
	 * Set eventsHash value
	 * @param string $_eventsHash the eventsHash
	 * @return string
	 */
	public function setEventsHash($_eventsHash)
	{
		return ($this->eventsHash = $_eventsHash);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyConferenceParamsReturn
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