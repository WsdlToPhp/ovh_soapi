<?php
/**
 * File for class OvhStructCrontabInfoReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructCrontabInfoReturn originally named crontabInfoReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructCrontabInfoReturn extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The path
	 * @var string
	 */
	public $path;
	/**
	 * The desc
	 * @var string
	 */
	public $desc;
	/**
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * The enabled
	 * @var boolean
	 */
	public $enabled;
	/**
	 * The programLanguage
	 * @var string
	 */
	public $programLanguage;
	/**
	 * The weekDay
	 * @var string
	 */
	public $weekDay;
	/**
	 * The days
	 * @var OvhStructMyArrayOfIntType
	 */
	public $days;
	/**
	 * The hours
	 * @var OvhStructMyArrayOfIntType
	 */
	public $hours;
	/**
	 * Constructor method for crontabInfoReturn
	 * @see parent::__construct()
	 * @param int $_id
	 * @param string $_path
	 * @param string $_desc
	 * @param string $_email
	 * @param boolean $_enabled
	 * @param string $_programLanguage
	 * @param string $_weekDay
	 * @param OvhStructMyArrayOfIntType $_days
	 * @param OvhStructMyArrayOfIntType $_hours
	 * @return OvhStructCrontabInfoReturn
	 */
	public function __construct($_id = NULL,$_path = NULL,$_desc = NULL,$_email = NULL,$_enabled = NULL,$_programLanguage = NULL,$_weekDay = NULL,$_days = NULL,$_hours = NULL)
	{
		parent::__construct(array('id'=>$_id,'path'=>$_path,'desc'=>$_desc,'email'=>$_email,'enabled'=>$_enabled,'programLanguage'=>$_programLanguage,'weekDay'=>$_weekDay,'days'=>($_days instanceof OvhStructMyArrayOfIntType)?$_days:new OvhStructMyArrayOfIntType($_days),'hours'=>($_hours instanceof OvhStructMyArrayOfIntType)?$_hours:new OvhStructMyArrayOfIntType($_hours)));
	}
	/**
	 * Get id value
	 * @return int|null
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set id value
	 * @param int $_id the id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
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
	 * Get enabled value
	 * @return boolean|null
	 */
	public function getEnabled()
	{
		return $this->enabled;
	}
	/**
	 * Set enabled value
	 * @param boolean $_enabled the enabled
	 * @return boolean
	 */
	public function setEnabled($_enabled)
	{
		return ($this->enabled = $_enabled);
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
	 * @return OvhStructMyArrayOfIntType|null
	 */
	public function getDays()
	{
		return $this->days;
	}
	/**
	 * Set days value
	 * @param OvhStructMyArrayOfIntType $_days the days
	 * @return OvhStructMyArrayOfIntType
	 */
	public function setDays($_days)
	{
		return ($this->days = $_days);
	}
	/**
	 * Get hours value
	 * @return OvhStructMyArrayOfIntType|null
	 */
	public function getHours()
	{
		return $this->hours;
	}
	/**
	 * Set hours value
	 * @param OvhStructMyArrayOfIntType $_hours the hours
	 * @return OvhStructMyArrayOfIntType
	 */
	public function setHours($_hours)
	{
		return ($this->hours = $_hours);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructCrontabInfoReturn
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