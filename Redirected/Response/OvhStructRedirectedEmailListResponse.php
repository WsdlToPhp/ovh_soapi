<?php
/**
 * File for class OvhStructRedirectedEmailListResponse
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRedirectedEmailListResponse originally named redirectedEmailListResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRedirectedEmailListResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhStructMyArrayOfEmailRedirectionStructType
	 */
	public $return;
	/**
	 * Constructor method for redirectedEmailListResponse
	 * @see parent::__construct()
	 * @param OvhStructMyArrayOfEmailRedirectionStructType $_return
	 * @return OvhStructRedirectedEmailListResponse
	 */
	public function __construct($_return = NULL)
	{
		parent::__construct(array('return'=>($_return instanceof OvhStructMyArrayOfEmailRedirectionStructType)?$_return:new OvhStructMyArrayOfEmailRedirectionStructType($_return)));
	}
	/**
	 * Get return value
	 * @return OvhStructMyArrayOfEmailRedirectionStructType|null
	 */
	public function getReturn()
	{
		return $this->return;
	}
	/**
	 * Set return value
	 * @param OvhStructMyArrayOfEmailRedirectionStructType $_return the return
	 * @return OvhStructMyArrayOfEmailRedirectionStructType
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
	 * @return OvhStructRedirectedEmailListResponse
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