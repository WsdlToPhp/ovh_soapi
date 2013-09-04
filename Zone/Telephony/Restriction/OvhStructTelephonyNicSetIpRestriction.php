<?php
/**
 * File for class OvhStructTelephonyNicSetIpRestriction
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyNicSetIpRestriction originally named telephonyNicSetIpRestriction
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyNicSetIpRestriction extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The ips
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfStringType
	 */
	public $ips;
	/**
	 * Constructor method for telephonyNicSetIpRestriction
	 * @see parent::__construct()
	 * @param string $_session
	 * @param OvhStructMyArrayOfStringType $_ips
	 * @return OvhStructTelephonyNicSetIpRestriction
	 */
	public function __construct($_session = NULL,$_ips = NULL)
	{
		parent::__construct(array('session'=>$_session,'ips'=>($_ips instanceof OvhStructMyArrayOfStringType)?$_ips:new OvhStructMyArrayOfStringType($_ips)));
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
	 * Get ips value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getIps()
	{
		return $this->ips;
	}
	/**
	 * Set ips value
	 * @param OvhStructMyArrayOfStringType $_ips the ips
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setIps($_ips)
	{
		return ($this->ips = $_ips);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyNicSetIpRestriction
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