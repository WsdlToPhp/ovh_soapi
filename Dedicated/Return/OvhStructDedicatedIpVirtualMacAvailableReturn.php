<?php
/**
 * File for class OvhStructDedicatedIpVirtualMacAvailableReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedIpVirtualMacAvailableReturn originally named dedicatedIpVirtualMacAvailableReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedIpVirtualMacAvailableReturn extends OvhWsdlClass
{
	/**
	 * The ip
	 * @var OvhStructMyArrayOfStringType
	 */
	public $ip;
	/**
	 * The mac
	 * @var OvhStructMyArrayOfStringType
	 */
	public $mac;
	/**
	 * Constructor method for dedicatedIpVirtualMacAvailableReturn
	 * @see parent::__construct()
	 * @param OvhStructMyArrayOfStringType $_ip
	 * @param OvhStructMyArrayOfStringType $_mac
	 * @return OvhStructDedicatedIpVirtualMacAvailableReturn
	 */
	public function __construct($_ip = NULL,$_mac = NULL)
	{
		parent::__construct(array('ip'=>($_ip instanceof OvhStructMyArrayOfStringType)?$_ip:new OvhStructMyArrayOfStringType($_ip),'mac'=>($_mac instanceof OvhStructMyArrayOfStringType)?$_mac:new OvhStructMyArrayOfStringType($_mac)));
	}
	/**
	 * Get ip value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getIp()
	{
		return $this->ip;
	}
	/**
	 * Set ip value
	 * @param OvhStructMyArrayOfStringType $_ip the ip
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setIp($_ip)
	{
		return ($this->ip = $_ip);
	}
	/**
	 * Get mac value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getMac()
	{
		return $this->mac;
	}
	/**
	 * Set mac value
	 * @param OvhStructMyArrayOfStringType $_mac the mac
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setMac($_mac)
	{
		return ($this->mac = $_mac);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedIpVirtualMacAvailableReturn
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