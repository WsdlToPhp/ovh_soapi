<?php
/**
 * File for class OvhStructTelephonyNumberCityForZoneList
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyNumberCityForZoneList originally named telephonyNumberCityForZoneList
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyNumberCityForZoneList extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The zone
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $zone;
	/**
	 * Constructor method for telephonyNumberCityForZoneList
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_zone
	 * @return OvhStructTelephonyNumberCityForZoneList
	 */
	public function __construct($_session = NULL,$_zone = NULL)
	{
		parent::__construct(array('session'=>$_session,'zone'=>$_zone));
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyNumberCityForZoneList
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