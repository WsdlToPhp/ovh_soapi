<?php
/**
 * File for class OvhStructTelephonyConferenceStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyConferenceStruct originally named telephonyConferenceStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyConferenceStruct extends OvhWsdlClass
{
	/**
	 * The room
	 * @var string
	 */
	public $room;
	/**
	 * The countryCode
	 * @var string
	 */
	public $countryCode;
	/**
	 * The callNumber
	 * @var string
	 */
	public $callNumber;
	/**
	 * The language
	 * @var string
	 */
	public $language;
	/**
	 * The customAnnounce
	 * @var boolean
	 */
	public $customAnnounce;
	/**
	 * The recordAnnounce
	 * @var boolean
	 */
	public $recordAnnounce;
	/**
	 * The mailReport
	 * @var boolean
	 */
	public $mailReport;
	/**
	 * The customMailReportAddress
	 * @var string
	 */
	public $customMailReportAddress;
	/**
	 * The askName
	 * @var boolean
	 */
	public $askName;
	/**
	 * The tellMemberCount
	 * @var boolean
	 */
	public $tellMemberCount;
	/**
	 * The moderatorCountryCode
	 * @var string
	 */
	public $moderatorCountryCode;
	/**
	 * The moderatorCallNumber
	 * @var string
	 */
	public $moderatorCallNumber;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The dtmfmenu
	 * @var boolean
	 */
	public $dtmfmenu;
	/**
	 * The announce_rcv
	 * @var boolean
	 */
	public $announce_rcv;
	/**
	 * The announce_snd
	 * @var boolean
	 */
	public $announce_snd;
	/**
	 * The recordConf
	 * @var boolean
	 */
	public $recordConf;
	/**
	 * Constructor method for telephonyConferenceStruct
	 * @see parent::__construct()
	 * @param string $_room
	 * @param string $_countryCode
	 * @param string $_callNumber
	 * @param string $_language
	 * @param boolean $_customAnnounce
	 * @param boolean $_recordAnnounce
	 * @param boolean $_mailReport
	 * @param string $_customMailReportAddress
	 * @param boolean $_askName
	 * @param boolean $_tellMemberCount
	 * @param string $_moderatorCountryCode
	 * @param string $_moderatorCallNumber
	 * @param string $_status
	 * @param boolean $_dtmfmenu
	 * @param boolean $_announce_rcv
	 * @param boolean $_announce_snd
	 * @param boolean $_recordConf
	 * @return OvhStructTelephonyConferenceStruct
	 */
	public function __construct($_room = NULL,$_countryCode = NULL,$_callNumber = NULL,$_language = NULL,$_customAnnounce = NULL,$_recordAnnounce = NULL,$_mailReport = NULL,$_customMailReportAddress = NULL,$_askName = NULL,$_tellMemberCount = NULL,$_moderatorCountryCode = NULL,$_moderatorCallNumber = NULL,$_status = NULL,$_dtmfmenu = NULL,$_announce_rcv = NULL,$_announce_snd = NULL,$_recordConf = NULL)
	{
		parent::__construct(array('room'=>$_room,'countryCode'=>$_countryCode,'callNumber'=>$_callNumber,'language'=>$_language,'customAnnounce'=>$_customAnnounce,'recordAnnounce'=>$_recordAnnounce,'mailReport'=>$_mailReport,'customMailReportAddress'=>$_customMailReportAddress,'askName'=>$_askName,'tellMemberCount'=>$_tellMemberCount,'moderatorCountryCode'=>$_moderatorCountryCode,'moderatorCallNumber'=>$_moderatorCallNumber,'status'=>$_status,'dtmfmenu'=>$_dtmfmenu,'announce_rcv'=>$_announce_rcv,'announce_snd'=>$_announce_snd,'recordConf'=>$_recordConf));
	}
	/**
	 * Get room value
	 * @return string|null
	 */
	public function getRoom()
	{
		return $this->room;
	}
	/**
	 * Set room value
	 * @param string $_room the room
	 * @return string
	 */
	public function setRoom($_room)
	{
		return ($this->room = $_room);
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
	 * Get language value
	 * @return string|null
	 */
	public function getLanguage()
	{
		return $this->language;
	}
	/**
	 * Set language value
	 * @param string $_language the language
	 * @return string
	 */
	public function setLanguage($_language)
	{
		return ($this->language = $_language);
	}
	/**
	 * Get customAnnounce value
	 * @return boolean|null
	 */
	public function getCustomAnnounce()
	{
		return $this->customAnnounce;
	}
	/**
	 * Set customAnnounce value
	 * @param boolean $_customAnnounce the customAnnounce
	 * @return boolean
	 */
	public function setCustomAnnounce($_customAnnounce)
	{
		return ($this->customAnnounce = $_customAnnounce);
	}
	/**
	 * Get recordAnnounce value
	 * @return boolean|null
	 */
	public function getRecordAnnounce()
	{
		return $this->recordAnnounce;
	}
	/**
	 * Set recordAnnounce value
	 * @param boolean $_recordAnnounce the recordAnnounce
	 * @return boolean
	 */
	public function setRecordAnnounce($_recordAnnounce)
	{
		return ($this->recordAnnounce = $_recordAnnounce);
	}
	/**
	 * Get mailReport value
	 * @return boolean|null
	 */
	public function getMailReport()
	{
		return $this->mailReport;
	}
	/**
	 * Set mailReport value
	 * @param boolean $_mailReport the mailReport
	 * @return boolean
	 */
	public function setMailReport($_mailReport)
	{
		return ($this->mailReport = $_mailReport);
	}
	/**
	 * Get customMailReportAddress value
	 * @return string|null
	 */
	public function getCustomMailReportAddress()
	{
		return $this->customMailReportAddress;
	}
	/**
	 * Set customMailReportAddress value
	 * @param string $_customMailReportAddress the customMailReportAddress
	 * @return string
	 */
	public function setCustomMailReportAddress($_customMailReportAddress)
	{
		return ($this->customMailReportAddress = $_customMailReportAddress);
	}
	/**
	 * Get askName value
	 * @return boolean|null
	 */
	public function getAskName()
	{
		return $this->askName;
	}
	/**
	 * Set askName value
	 * @param boolean $_askName the askName
	 * @return boolean
	 */
	public function setAskName($_askName)
	{
		return ($this->askName = $_askName);
	}
	/**
	 * Get tellMemberCount value
	 * @return boolean|null
	 */
	public function getTellMemberCount()
	{
		return $this->tellMemberCount;
	}
	/**
	 * Set tellMemberCount value
	 * @param boolean $_tellMemberCount the tellMemberCount
	 * @return boolean
	 */
	public function setTellMemberCount($_tellMemberCount)
	{
		return ($this->tellMemberCount = $_tellMemberCount);
	}
	/**
	 * Get moderatorCountryCode value
	 * @return string|null
	 */
	public function getModeratorCountryCode()
	{
		return $this->moderatorCountryCode;
	}
	/**
	 * Set moderatorCountryCode value
	 * @param string $_moderatorCountryCode the moderatorCountryCode
	 * @return string
	 */
	public function setModeratorCountryCode($_moderatorCountryCode)
	{
		return ($this->moderatorCountryCode = $_moderatorCountryCode);
	}
	/**
	 * Get moderatorCallNumber value
	 * @return string|null
	 */
	public function getModeratorCallNumber()
	{
		return $this->moderatorCallNumber;
	}
	/**
	 * Set moderatorCallNumber value
	 * @param string $_moderatorCallNumber the moderatorCallNumber
	 * @return string
	 */
	public function setModeratorCallNumber($_moderatorCallNumber)
	{
		return ($this->moderatorCallNumber = $_moderatorCallNumber);
	}
	/**
	 * Get status value
	 * @return string|null
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set status value
	 * @param string $_status the status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get dtmfmenu value
	 * @return boolean|null
	 */
	public function getDtmfmenu()
	{
		return $this->dtmfmenu;
	}
	/**
	 * Set dtmfmenu value
	 * @param boolean $_dtmfmenu the dtmfmenu
	 * @return boolean
	 */
	public function setDtmfmenu($_dtmfmenu)
	{
		return ($this->dtmfmenu = $_dtmfmenu);
	}
	/**
	 * Get announce_rcv value
	 * @return boolean|null
	 */
	public function getAnnounce_rcv()
	{
		return $this->announce_rcv;
	}
	/**
	 * Set announce_rcv value
	 * @param boolean $_announce_rcv the announce_rcv
	 * @return boolean
	 */
	public function setAnnounce_rcv($_announce_rcv)
	{
		return ($this->announce_rcv = $_announce_rcv);
	}
	/**
	 * Get announce_snd value
	 * @return boolean|null
	 */
	public function getAnnounce_snd()
	{
		return $this->announce_snd;
	}
	/**
	 * Set announce_snd value
	 * @param boolean $_announce_snd the announce_snd
	 * @return boolean
	 */
	public function setAnnounce_snd($_announce_snd)
	{
		return ($this->announce_snd = $_announce_snd);
	}
	/**
	 * Get recordConf value
	 * @return boolean|null
	 */
	public function getRecordConf()
	{
		return $this->recordConf;
	}
	/**
	 * Set recordConf value
	 * @param boolean $_recordConf the recordConf
	 * @return boolean
	 */
	public function setRecordConf($_recordConf)
	{
		return ($this->recordConf = $_recordConf);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyConferenceStruct
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