<?php
/**
 * File for class OvhStructTelephonyScreenStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyScreenStruct originally named telephonyScreenStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyScreenStruct extends OvhWsdlClass
{
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The numberScreen
	 * @var string
	 */
	public $numberScreen;
	/**
	 * The natureScreen
	 * @var string
	 */
	public $natureScreen;
	/**
	 * Constructor method for telephonyScreenStruct
	 * @see parent::__construct()
	 * @param string $_status
	 * @param string $_numberScreen
	 * @param string $_natureScreen
	 * @return OvhStructTelephonyScreenStruct
	 */
	public function __construct($_status = NULL,$_numberScreen = NULL,$_natureScreen = NULL)
	{
		parent::__construct(array('status'=>$_status,'numberScreen'=>$_numberScreen,'natureScreen'=>$_natureScreen));
	}
	/**
	 * Get status value
	 * @return string|null
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set status value
	 * @param string $_status the status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get numberScreen value
	 * @return string|null
	 */
	public function getNumberScreen()
	{
		return $this->numberScreen;
	}
	/**
	 * Set numberScreen value
	 * @param string $_numberScreen the numberScreen
	 * @return string
	 */
	public function setNumberScreen($_numberScreen)
	{
		return ($this->numberScreen = $_numberScreen);
	}
	/**
	 * Get natureScreen value
	 * @return string|null
	 */
	public function getNatureScreen()
	{
		return $this->natureScreen;
	}
	/**
	 * Set natureScreen value
	 * @param string $_natureScreen the natureScreen
	 * @return string
	 */
	public function setNatureScreen($_natureScreen)
	{
		return ($this->natureScreen = $_natureScreen);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyScreenStruct
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