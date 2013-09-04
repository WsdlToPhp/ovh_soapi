<?php
/**
 * File for class OvhStructTelephonySetTimeZoneNumber
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySetTimeZoneNumber originally named telephonySetTimeZoneNumber
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySetTimeZoneNumber extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The number
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $number;
	/**
	 * The countryCode
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $countryCode;
	/**
	 * The timeZone
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $timeZone;
	/**
	 * Constructor method for telephonySetTimeZoneNumber
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_number
	 * @param string $_countryCode
	 * @param string $_timeZone
	 * @return OvhStructTelephonySetTimeZoneNumber
	 */
	public function __construct($_session = NULL,$_number = NULL,$_countryCode = NULL,$_timeZone = NULL)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'countryCode'=>$_countryCode,'timeZone'=>$_timeZone));
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
	 * Get timeZone value
	 * @return string|null
	 */
	public function getTimeZone()
	{
		return $this->timeZone;
	}
	/**
	 * Set timeZone value
	 * @param string $_timeZone the timeZone
	 * @return string
	 */
	public function setTimeZone($_timeZone)
	{
		return ($this->timeZone = $_timeZone);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySetTimeZoneNumber
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