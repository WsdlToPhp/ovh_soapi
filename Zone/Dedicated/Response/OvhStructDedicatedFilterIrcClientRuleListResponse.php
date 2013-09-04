<?php
/**
 * File for class OvhStructDedicatedFilterIrcClientRuleListResponse
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedFilterIrcClientRuleListResponse originally named dedicatedFilterIrcClientRuleListResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedFilterIrcClientRuleListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhStructMyArrayOfDedicatedFilterIrcRuleStructType
	 */
	public $return;
	/**
	 * Constructor method for dedicatedFilterIrcClientRuleListResponse
	 * @see parent::__construct()
	 * @param OvhStructMyArrayOfDedicatedFilterIrcRuleStructType $_return
	 * @return OvhStructDedicatedFilterIrcClientRuleListResponse
	 */
	public function __construct($_return = NULL)
	{
		parent::__construct(array('return'=>($_return instanceof OvhStructMyArrayOfDedicatedFilterIrcRuleStructType)?$_return:new OvhStructMyArrayOfDedicatedFilterIrcRuleStructType($_return)));
	}
	/**
	 * Get return value
	 * @return OvhStructMyArrayOfDedicatedFilterIrcRuleStructType|null
	 */
	public function getReturn()
	{
		return $this->return;
	}
	/**
	 * Set return value
	 * @param OvhStructMyArrayOfDedicatedFilterIrcRuleStructType $_return the return
	 * @return OvhStructMyArrayOfDedicatedFilterIrcRuleStructType
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
	 * @return OvhStructDedicatedFilterIrcClientRuleListResponse
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