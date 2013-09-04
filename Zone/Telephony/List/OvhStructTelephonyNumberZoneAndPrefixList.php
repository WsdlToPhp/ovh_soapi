<?php
/**
 * File for class OvhStructTelephonyNumberZoneAndPrefixList
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyNumberZoneAndPrefixList originally named telephonyNumberZoneAndPrefixList
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyNumberZoneAndPrefixList extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The country
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $country;
	/**
	 * The types
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfStringType
	 */
	public $types;
	/**
	 * Constructor method for telephonyNumberZoneAndPrefixList
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_country
	 * @param OvhStructMyArrayOfStringType $_types
	 * @return OvhStructTelephonyNumberZoneAndPrefixList
	 */
	public function __construct($_session = NULL,$_country = NULL,$_types = NULL)
	{
		parent::__construct(array('session'=>$_session,'country'=>$_country,'types'=>($_types instanceof OvhStructMyArrayOfStringType)?$_types:new OvhStructMyArrayOfStringType($_types)));
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
	 * Get types value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getTypes()
	{
		return $this->types;
	}
	/**
	 * Set types value
	 * @param OvhStructMyArrayOfStringType $_types the types
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setTypes($_types)
	{
		return ($this->types = $_types);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyNumberZoneAndPrefixList
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