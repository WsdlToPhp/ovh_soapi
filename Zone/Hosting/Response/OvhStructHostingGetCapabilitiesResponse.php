<?php
/**
 * File for class OvhStructHostingGetCapabilitiesResponse
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructHostingGetCapabilitiesResponse originally named hostingGetCapabilitiesResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructHostingGetCapabilitiesResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhStructHostingGetCapabilitiesReturn
	 */
	public $return;
	/**
	 * Constructor method for hostingGetCapabilitiesResponse
	 * @see parent::__construct()
	 * @param OvhStructHostingGetCapabilitiesReturn $_return
	 * @return OvhStructHostingGetCapabilitiesResponse
	 */
	public function __construct($_return = NULL)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Get return value
	 * @return OvhStructHostingGetCapabilitiesReturn|null
	 */
	public function getReturn()
	{
		return $this->return;
	}
	/**
	 * Set return value
	 * @param OvhStructHostingGetCapabilitiesReturn $_return the return
	 * @return OvhStructHostingGetCapabilitiesReturn
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
	 * @return OvhStructHostingGetCapabilitiesResponse
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