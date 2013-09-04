<?php
/**
 * File for class OvhStructDedicatedMonitoringServiceListResponse
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedMonitoringServiceListResponse originally named dedicatedMonitoringServiceListResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedMonitoringServiceListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhStructMyArrayOfDedicatedMonitoringServiceStructType
	 */
	public $return;
	/**
	 * Constructor method for dedicatedMonitoringServiceListResponse
	 * @see parent::__construct()
	 * @param OvhStructMyArrayOfDedicatedMonitoringServiceStructType $_return
	 * @return OvhStructDedicatedMonitoringServiceListResponse
	 */
	public function __construct($_return = NULL)
	{
		parent::__construct(array('return'=>($_return instanceof OvhStructMyArrayOfDedicatedMonitoringServiceStructType)?$_return:new OvhStructMyArrayOfDedicatedMonitoringServiceStructType($_return)));
	}
	/**
	 * Get return value
	 * @return OvhStructMyArrayOfDedicatedMonitoringServiceStructType|null
	 */
	public function getReturn()
	{
		return $this->return;
	}
	/**
	 * Set return value
	 * @param OvhStructMyArrayOfDedicatedMonitoringServiceStructType $_return the return
	 * @return OvhStructMyArrayOfDedicatedMonitoringServiceStructType
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
	 * @return OvhStructDedicatedMonitoringServiceListResponse
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