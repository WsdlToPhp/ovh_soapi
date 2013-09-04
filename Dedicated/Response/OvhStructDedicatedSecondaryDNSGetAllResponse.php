<?php
/**
 * File for class OvhStructDedicatedSecondaryDNSGetAllResponse
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedSecondaryDNSGetAllResponse originally named dedicatedSecondaryDNSGetAllResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedSecondaryDNSGetAllResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhStructMyArrayOfAllSecondaryDNSStructType
	 */
	public $return;
	/**
	 * Constructor method for dedicatedSecondaryDNSGetAllResponse
	 * @see parent::__construct()
	 * @param OvhStructMyArrayOfAllSecondaryDNSStructType $_return
	 * @return OvhStructDedicatedSecondaryDNSGetAllResponse
	 */
	public function __construct($_return = NULL)
	{
		parent::__construct(array('return'=>($_return instanceof OvhStructMyArrayOfAllSecondaryDNSStructType)?$_return:new OvhStructMyArrayOfAllSecondaryDNSStructType($_return)));
	}
	/**
	 * Get return value
	 * @return OvhStructMyArrayOfAllSecondaryDNSStructType|null
	 */
	public function getReturn()
	{
		return $this->return;
	}
	/**
	 * Set return value
	 * @param OvhStructMyArrayOfAllSecondaryDNSStructType $_return the return
	 * @return OvhStructMyArrayOfAllSecondaryDNSStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedSecondaryDNSGetAllResponse
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