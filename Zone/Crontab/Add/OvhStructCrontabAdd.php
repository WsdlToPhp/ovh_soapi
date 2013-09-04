<?php
/**
 * File for class OvhStructCrontabAdd
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructCrontabAdd originally named crontabAdd
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructCrontabAdd extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The domain
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $domain;
	/**
	 * The path
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $path;
	/**
	 * The programLanguage
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $programLanguage;
	/**
	 * The weekDay
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $weekDay;
	/**
	 * The days
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $days;
	/**
	 * The hours
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $hours;
	/**
	 * The desc
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $desc;
	/**
	 * The email
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $email;
	/**
	 * The otherEmail
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $otherEmail;
	/**
	 * Constructor method for crontabAdd
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_domain
	 * @param string $_path
	 * @param string $_programLanguage
	 * @param string $_weekDay
	 * @param string $_days
	 * @param string $_hours
	 * @param string $_desc
	 * @param string $_email
	 * @param string $_otherEmail
	 * @return OvhStructCrontabAdd
	 */
	public function __construct($_session = NULL,$_domain = NULL,$_path = NULL,$_programLanguage = NULL,$_weekDay = NULL,$_days = NULL,$_hours = NULL,$_desc = NULL,$_email = NULL,$_otherEmail = NULL)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'path'=>$_path,'programLanguage'=>$_programLanguage,'weekDay'=>$_weekDay,'days'=>$_days,'hours'=>$_hours,'desc'=>$_desc,'email'=>$_email,'otherEmail'=>$_otherEmail));
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
	 * Get domain value
	 * @return string|null
	 */
	public function getDomain()
	{
		return $this->domain;
	}
	/**
	 * Set domain value
	 * @param string $_domain the domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get path value
	 * @return string|null
	 */
	public function getPath()
	{
		return $this->path;
	}
	/**
	 * Set path value
	 * @param string $_path the path
	 * @return string
	 */
	public function setPath($_path)
	{
		return ($this->path = $_path);
	}
	/**
	 * Get programLanguage value
	 * @return string|null
	 */
	public function getProgramLanguage()
	{
		return $this->programLanguage;
	}
	/**
	 * Set programLanguage value
	 * @param string $_programLanguage the programLanguage
	 * @return string
	 */
	public function setProgramLanguage($_programLanguage)
	{
		return ($this->programLanguage = $_programLanguage);
	}
	/**
	 * Get weekDay value
	 * @return string|null
	 */
	public function getWeekDay()
	{
		return $this->weekDay;
	}
	/**
	 * Set weekDay value
	 * @param string $_weekDay the weekDay
	 * @return string
	 */
	public function setWeekDay($_weekDay)
	{
		return ($this->weekDay = $_weekDay);
	}
	/**
	 * Get days value
	 * @return string|null
	 */
	public function getDays()
	{
		return $this->days;
	}
	/**
	 * Set days value
	 * @param string $_days the days
	 * @return string
	 */
	public function setDays($_days)
	{
		return ($this->days = $_days);
	}
	/**
	 * Get hours value
	 * @return string|null
	 */
	public function getHours()
	{
		return $this->hours;
	}
	/**
	 * Set hours value
	 * @param string $_hours the hours
	 * @return string
	 */
	public function setHours($_hours)
	{
		return ($this->hours = $_hours);
	}
	/**
	 * Get desc value
	 * @return string|null
	 */
	public function getDesc()
	{
		return $this->desc;
	}
	/**
	 * Set desc value
	 * @param string $_desc the desc
	 * @return string
	 */
	public function setDesc($_desc)
	{
		return ($this->desc = $_desc);
	}
	/**
	 * Get email value
	 * @return string|null
	 */
	public function getEmail()
	{
		return $this->email;
	}
	/**
	 * Set email value
	 * @param string $_email the email
	 * @return string
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
	}
	/**
	 * Get otherEmail value
	 * @return string|null
	 */
	public function getOtherEmail()
	{
		return $this->otherEmail;
	}
	/**
	 * Set otherEmail value
	 * @param string $_otherEmail the otherEmail
	 * @return string
	 */
	public function setOtherEmail($_otherEmail)
	{
		return ($this->otherEmail = $_otherEmail);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructCrontabAdd
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