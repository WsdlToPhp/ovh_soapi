<?php
/**
 * File for class OvhStructServiceListPaginatedResponse
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructServiceListPaginatedResponse originally named serviceListPaginatedResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructServiceListPaginatedResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhStructServiceListPaginatedStruct
	 */
	public $return;
	/**
	 * Constructor method for serviceListPaginatedResponse
	 * @see parent::__construct()
	 * @param OvhStructServiceListPaginatedStruct $_return
	 * @return OvhStructServiceListPaginatedResponse
	 */
	public function __construct($_return = NULL)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Get return value
	 * @return OvhStructServiceListPaginatedStruct|null
	 */
	public function getReturn()
	{
		return $this->return;
	}
	/**
	 * Set return value
	 * @param OvhStructServiceListPaginatedStruct $_return the return
	 * @return OvhStructServiceListPaginatedStruct
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
	 * @return OvhStructServiceListPaginatedResponse
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