<?php
/**
 * File for class OvhStructTelephonyNumberCityForZoneStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyNumberCityForZoneStruct originally named telephonyNumberCityForZoneStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyNumberCityForZoneStruct extends OvhWsdlClass
{
	/**
	 * The city
	 * @var string
	 */
	public $city;
	/**
	 * The postalCode
	 * @var string
	 */
	public $postalCode;
	/**
	 * Constructor method for telephonyNumberCityForZoneStruct
	 * @see parent::__construct()
	 * @param string $_city
	 * @param string $_postalCode
	 * @return OvhStructTelephonyNumberCityForZoneStruct
	 */
	public function __construct($_city = NULL,$_postalCode = NULL)
	{
		parent::__construct(array('city'=>$_city,'postalCode'=>$_postalCode));
	}
	/**
	 * Get city value
	 * @return string|null
	 */
	public function getCity()
	{
		return $this->city;
	}
	/**
	 * Set city value
	 * @param string $_city the city
	 * @return string
	 */
	public function setCity($_city)
	{
		return ($this->city = $_city);
	}
	/**
	 * Get postalCode value
	 * @return string|null
	 */
	public function getPostalCode()
	{
		return $this->postalCode;
	}
	/**
	 * Set postalCode value
	 * @param string $_postalCode the postalCode
	 * @return string
	 */
	public function setPostalCode($_postalCode)
	{
		return ($this->postalCode = $_postalCode);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyNumberCityForZoneStruct
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