<?php
/**
 * File for class OvhStructOverquotaInfoDayStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructOverquotaInfoDayStruct originally named overquotaInfoDayStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructOverquotaInfoDayStruct extends OvhWsdlClass
{
	/**
	 * The day
	 * @var int
	 */
	public $day;
	/**
	 * The value
	 * @var int
	 */
	public $value;
	/**
	 * Constructor method for overquotaInfoDayStruct
	 * @see parent::__construct()
	 * @param int $_day
	 * @param int $_value
	 * @return OvhStructOverquotaInfoDayStruct
	 */
	public function __construct($_day = NULL,$_value = NULL)
	{
		parent::__construct(array('day'=>$_day,'value'=>$_value));
	}
	/**
	 * Get day value
	 * @return int|null
	 */
	public function getDay()
	{
		return $this->day;
	}
	/**
	 * Set day value
	 * @param int $_day the day
	 * @return int
	 */
	public function setDay($_day)
	{
		return ($this->day = $_day);
	}
	/**
	 * Get value value
	 * @return int|null
	 */
	public function getValue()
	{
		return $this->value;
	}
	/**
	 * Set value value
	 * @param int $_value the value
	 * @return int
	 */
	public function setValue($_value)
	{
		return ($this->value = $_value);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructOverquotaInfoDayStruct
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