<?php
/**
 * File for class OvhStructDedicatedFailoverRipeGetIpResponse
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedFailoverRipeGetIpResponse originally named dedicatedFailoverRipeGetIpResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedFailoverRipeGetIpResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhStructMyArrayOfDedicatedRipeGetIpStructType
	 */
	public $return;
	/**
	 * Constructor method for dedicatedFailoverRipeGetIpResponse
	 * @see parent::__construct()
	 * @param OvhStructMyArrayOfDedicatedRipeGetIpStructType $_return
	 * @return OvhStructDedicatedFailoverRipeGetIpResponse
	 */
	public function __construct($_return = NULL)
	{
		parent::__construct(array('return'=>($_return instanceof OvhStructMyArrayOfDedicatedRipeGetIpStructType)?$_return:new OvhStructMyArrayOfDedicatedRipeGetIpStructType($_return)));
	}
	/**
	 * Get return value
	 * @return OvhStructMyArrayOfDedicatedRipeGetIpStructType|null
	 */
	public function getReturn()
	{
		return $this->return;
	}
	/**
	 * Set return value
	 * @param OvhStructMyArrayOfDedicatedRipeGetIpStructType $_return the return
	 * @return OvhStructMyArrayOfDedicatedRipeGetIpStructType
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
	 * @return OvhStructDedicatedFailoverRipeGetIpResponse
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