<?php
/**
 * File for class OvhStructTelephonyAbbreviatedNumberListPaginatedResponse
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyAbbreviatedNumberListPaginatedResponse originally named telephonyAbbreviatedNumberListPaginatedResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyAbbreviatedNumberListPaginatedResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhStructTelephonyAbbreviatedNumberListPaginatedReturn
	 */
	public $return;
	/**
	 * Constructor method for telephonyAbbreviatedNumberListPaginatedResponse
	 * @see parent::__construct()
	 * @param OvhStructTelephonyAbbreviatedNumberListPaginatedReturn $_return
	 * @return OvhStructTelephonyAbbreviatedNumberListPaginatedResponse
	 */
	public function __construct($_return = NULL)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Get return value
	 * @return OvhStructTelephonyAbbreviatedNumberListPaginatedReturn|null
	 */
	public function getReturn()
	{
		return $this->return;
	}
	/**
	 * Set return value
	 * @param OvhStructTelephonyAbbreviatedNumberListPaginatedReturn $_return the return
	 * @return OvhStructTelephonyAbbreviatedNumberListPaginatedReturn
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
	 * @return OvhStructTelephonyAbbreviatedNumberListPaginatedResponse
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