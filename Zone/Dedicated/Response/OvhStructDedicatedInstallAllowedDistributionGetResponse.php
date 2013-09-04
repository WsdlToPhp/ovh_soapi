<?php
/**
 * File for class OvhStructDedicatedInstallAllowedDistributionGetResponse
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedInstallAllowedDistributionGetResponse originally named dedicatedInstallAllowedDistributionGetResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedInstallAllowedDistributionGetResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhStructDedicatedAllowedDistributionReturn
	 */
	public $return;
	/**
	 * Constructor method for dedicatedInstallAllowedDistributionGetResponse
	 * @see parent::__construct()
	 * @param OvhStructDedicatedAllowedDistributionReturn $_return
	 * @return OvhStructDedicatedInstallAllowedDistributionGetResponse
	 */
	public function __construct($_return = NULL)
	{
		parent::__construct(array('return'=>$_return));
	}
	/**
	 * Get return value
	 * @return OvhStructDedicatedAllowedDistributionReturn|null
	 */
	public function getReturn()
	{
		return $this->return;
	}
	/**
	 * Set return value
	 * @param OvhStructDedicatedAllowedDistributionReturn $_return the return
	 * @return OvhStructDedicatedAllowedDistributionReturn
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
	 * @return OvhStructDedicatedInstallAllowedDistributionGetResponse
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