<?php
/**
 * File for class OvhStructSupportGetThreadsResponse
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructSupportGetThreadsResponse originally named supportGetThreadsResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructSupportGetThreadsResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhStructMyArrayOfSupportThreadDetailStructType
	 */
	public $return;
	/**
	 * Constructor method for supportGetThreadsResponse
	 * @see parent::__construct()
	 * @param OvhStructMyArrayOfSupportThreadDetailStructType $_return
	 * @return OvhStructSupportGetThreadsResponse
	 */
	public function __construct($_return = NULL)
	{
		parent::__construct(array('return'=>($_return instanceof OvhStructMyArrayOfSupportThreadDetailStructType)?$_return:new OvhStructMyArrayOfSupportThreadDetailStructType($_return)));
	}
	/**
	 * Get return value
	 * @return OvhStructMyArrayOfSupportThreadDetailStructType|null
	 */
	public function getReturn()
	{
		return $this->return;
	}
	/**
	 * Set return value
	 * @param OvhStructMyArrayOfSupportThreadDetailStructType $_return the return
	 * @return OvhStructMyArrayOfSupportThreadDetailStructType
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
	 * @return OvhStructSupportGetThreadsResponse
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