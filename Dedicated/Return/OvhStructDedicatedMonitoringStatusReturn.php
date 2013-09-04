<?php
/**
 * File for class OvhStructDedicatedMonitoringStatusReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedMonitoringStatusReturn originally named dedicatedMonitoringStatusReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedMonitoringStatusReturn extends OvhWsdlClass
{
	/**
	 * The disabled
	 * @var boolean
	 */
	public $disabled;
	/**
	 * Constructor method for dedicatedMonitoringStatusReturn
	 * @see parent::__construct()
	 * @param boolean $_disabled
	 * @return OvhStructDedicatedMonitoringStatusReturn
	 */
	public function __construct($_disabled = NULL)
	{
		parent::__construct(array('disabled'=>$_disabled));
	}
	/**
	 * Get disabled value
	 * @return boolean|null
	 */
	public function getDisabled()
	{
		return $this->disabled;
	}
	/**
	 * Set disabled value
	 * @param boolean $_disabled the disabled
	 * @return boolean
	 */
	public function setDisabled($_disabled)
	{
		return ($this->disabled = $_disabled);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedMonitoringStatusReturn
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