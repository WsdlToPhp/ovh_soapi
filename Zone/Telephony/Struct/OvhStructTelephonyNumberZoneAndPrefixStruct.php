<?php
/**
 * File for class OvhStructTelephonyNumberZoneAndPrefixStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyNumberZoneAndPrefixStruct originally named telephonyNumberZoneAndPrefixStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyNumberZoneAndPrefixStruct extends OvhWsdlClass
{
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The zone
	 * @var string
	 */
	public $zone;
	/**
	 * The prefix
	 * @var string
	 */
	public $prefix;
	/**
	 * Constructor method for telephonyNumberZoneAndPrefixStruct
	 * @see parent::__construct()
	 * @param string $_country
	 * @param string $_type
	 * @param string $_zone
	 * @param string $_prefix
	 * @return OvhStructTelephonyNumberZoneAndPrefixStruct
	 */
	public function __construct($_country = NULL,$_type = NULL,$_zone = NULL,$_prefix = NULL)
	{
		parent::__construct(array('country'=>$_country,'type'=>$_type,'zone'=>$_zone,'prefix'=>$_prefix));
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
	 * Get type value
	 * @return string|null
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set type value
	 * @param string $_type the type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get zone value
	 * @return string|null
	 */
	public function getZone()
	{
		return $this->zone;
	}
	/**
	 * Set zone value
	 * @param string $_zone the zone
	 * @return string
	 */
	public function setZone($_zone)
	{
		return ($this->zone = $_zone);
	}
	/**
	 * Get prefix value
	 * @return string|null
	 */
	public function getPrefix()
	{
		return $this->prefix;
	}
	/**
	 * Set prefix value
	 * @param string $_prefix the prefix
	 * @return string
	 */
	public function setPrefix($_prefix)
	{
		return ($this->prefix = $_prefix);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyNumberZoneAndPrefixStruct
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