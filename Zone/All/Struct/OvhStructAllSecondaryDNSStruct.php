<?php
/**
 * File for class OvhStructAllSecondaryDNSStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructAllSecondaryDNSStruct originally named allSecondaryDNSStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructAllSecondaryDNSStruct extends OvhWsdlClass
{
	/**
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * The secondary
	 * @var OvhStructMyArrayOfSecondaryDNSStructType
	 */
	public $secondary;
	/**
	 * Constructor method for allSecondaryDNSStruct
	 * @see parent::__construct()
	 * @param string $_ip
	 * @param OvhStructMyArrayOfSecondaryDNSStructType $_secondary
	 * @return OvhStructAllSecondaryDNSStruct
	 */
	public function __construct($_ip = NULL,$_secondary = NULL)
	{
		parent::__construct(array('ip'=>$_ip,'secondary'=>($_secondary instanceof OvhStructMyArrayOfSecondaryDNSStructType)?$_secondary:new OvhStructMyArrayOfSecondaryDNSStructType($_secondary)));
	}
	/**
	 * Get ip value
	 * @return string|null
	 */
	public function getIp()
	{
		return $this->ip;
	}
	/**
	 * Set ip value
	 * @param string $_ip the ip
	 * @return string
	 */
	public function setIp($_ip)
	{
		return ($this->ip = $_ip);
	}
	/**
	 * Get secondary value
	 * @return OvhStructMyArrayOfSecondaryDNSStructType|null
	 */
	public function getSecondary()
	{
		return $this->secondary;
	}
	/**
	 * Set secondary value
	 * @param OvhStructMyArrayOfSecondaryDNSStructType $_secondary the secondary
	 * @return OvhStructMyArrayOfSecondaryDNSStructType
	 */
	public function setSecondary($_secondary)
	{
		return ($this->secondary = $_secondary);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructAllSecondaryDNSStruct
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