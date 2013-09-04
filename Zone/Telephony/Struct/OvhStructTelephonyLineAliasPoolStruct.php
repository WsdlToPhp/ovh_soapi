<?php
/**
 * File for class OvhStructTelephonyLineAliasPoolStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyLineAliasPoolStruct originally named telephonyLineAliasPoolStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyLineAliasPoolStruct extends OvhWsdlClass
{
	/**
	 * The poolNumber
	 * @var int
	 */
	public $poolNumber;
	/**
	 * The service
	 * @var string
	 */
	public $service;
	/**
	 * The display
	 * @var string
	 */
	public $display;
	/**
	 * Constructor method for telephonyLineAliasPoolStruct
	 * @see parent::__construct()
	 * @param int $_poolNumber
	 * @param string $_service
	 * @param string $_display
	 * @return OvhStructTelephonyLineAliasPoolStruct
	 */
	public function __construct($_poolNumber = NULL,$_service = NULL,$_display = NULL)
	{
		parent::__construct(array('poolNumber'=>$_poolNumber,'service'=>$_service,'display'=>$_display));
	}
	/**
	 * Get poolNumber value
	 * @return int|null
	 */
	public function getPoolNumber()
	{
		return $this->poolNumber;
	}
	/**
	 * Set poolNumber value
	 * @param int $_poolNumber the poolNumber
	 * @return int
	 */
	public function setPoolNumber($_poolNumber)
	{
		return ($this->poolNumber = $_poolNumber);
	}
	/**
	 * Get service value
	 * @return string|null
	 */
	public function getService()
	{
		return $this->service;
	}
	/**
	 * Set service value
	 * @param string $_service the service
	 * @return string
	 */
	public function setService($_service)
	{
		return ($this->service = $_service);
	}
	/**
	 * Get display value
	 * @return string|null
	 */
	public function getDisplay()
	{
		return $this->display;
	}
	/**
	 * Set display value
	 * @param string $_display the display
	 * @return string
	 */
	public function setDisplay($_display)
	{
		return ($this->display = $_display);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyLineAliasPoolStruct
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