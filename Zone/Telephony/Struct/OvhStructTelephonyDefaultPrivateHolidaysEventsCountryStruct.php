<?php
/**
 * File for class OvhStructTelephonyDefaultPrivateHolidaysEventsCountryStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyDefaultPrivateHolidaysEventsCountryStruct originally named telephonyDefaultPrivateHolidaysEventsCountryStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyDefaultPrivateHolidaysEventsCountryStruct extends OvhWsdlClass
{
	/**
	 * The dates
	 * @var OvhStructMyArrayOfStringType
	 */
	public $dates;
	/**
	 * The tzid
	 * @var string
	 */
	public $tzid;
	/**
	 * Constructor method for telephonyDefaultPrivateHolidaysEventsCountryStruct
	 * @see parent::__construct()
	 * @param OvhStructMyArrayOfStringType $_dates
	 * @param string $_tzid
	 * @return OvhStructTelephonyDefaultPrivateHolidaysEventsCountryStruct
	 */
	public function __construct($_dates = NULL,$_tzid = NULL)
	{
		parent::__construct(array('dates'=>($_dates instanceof OvhStructMyArrayOfStringType)?$_dates:new OvhStructMyArrayOfStringType($_dates),'tzid'=>$_tzid));
	}
	/**
	 * Get dates value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getDates()
	{
		return $this->dates;
	}
	/**
	 * Set dates value
	 * @param OvhStructMyArrayOfStringType $_dates the dates
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setDates($_dates)
	{
		return ($this->dates = $_dates);
	}
	/**
	 * Get tzid value
	 * @return string|null
	 */
	public function getTzid()
	{
		return $this->tzid;
	}
	/**
	 * Set tzid value
	 * @param string $_tzid the tzid
	 * @return string
	 */
	public function setTzid($_tzid)
	{
		return ($this->tzid = $_tzid);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyDefaultPrivateHolidaysEventsCountryStruct
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