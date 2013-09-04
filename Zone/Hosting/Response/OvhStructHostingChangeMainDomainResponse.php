<?php
/**
 * File for class OvhStructHostingChangeMainDomainResponse
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructHostingChangeMainDomainResponse originally named hostingChangeMainDomainResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructHostingChangeMainDomainResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhStructHostingChangeMainDomainReturn
	 */
	public $return;
	/**
	 * Constructor method for hostingChangeMainDomainResponse
	 * @see parent::__construct()
	 * @param OvhStructHostingChangeMainDomainReturn $_return
	 * @return OvhStructHostingChangeMainDomainResponse
	 */
	public function __construct($_return = NULL)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Get return value
	 * @return OvhStructHostingChangeMainDomainReturn|null
	 */
	public function getReturn()
	{
		return $this->return;
	}
	/**
	 * Set return value
	 * @param OvhStructHostingChangeMainDomainReturn $_return the return
	 * @return OvhStructHostingChangeMainDomainReturn
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
	 * @return OvhStructHostingChangeMainDomainResponse
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