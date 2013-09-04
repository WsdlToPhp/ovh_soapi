<?php
/**
 * File for class OvhStructRtmSystemKernelStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRtmSystemKernelStruct originally named rtmSystemKernelStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRtmSystemKernelStruct extends OvhWsdlClass
{
	/**
	 * The version
	 * @var string
	 */
	public $version;
	/**
	 * The current
	 * @var string
	 */
	public $current;
	/**
	 * The current_26
	 * @var string
	 */
	public $current_26;
	/**
	 * The current_ipv6
	 * @var string
	 */
	public $current_ipv6;
	/**
	 * The release
	 * @var string
	 */
	public $release;
	/**
	 * Constructor method for rtmSystemKernelStruct
	 * @see parent::__construct()
	 * @param string $_version
	 * @param string $_current
	 * @param string $_current_26
	 * @param string $_current_ipv6
	 * @param string $_release
	 * @return OvhStructRtmSystemKernelStruct
	 */
	public function __construct($_version = NULL,$_current = NULL,$_current_26 = NULL,$_current_ipv6 = NULL,$_release = NULL)
	{
		parent::__construct(array('version'=>$_version,'current'=>$_current,'current_26'=>$_current_26,'current_ipv6'=>$_current_ipv6,'release'=>$_release));
	}
	/**
	 * Get version value
	 * @return string|null
	 */
	public function getVersion()
	{
		return $this->version;
	}
	/**
	 * Set version value
	 * @param string $_version the version
	 * @return string
	 */
	public function setVersion($_version)
	{
		return ($this->version = $_version);
	}
	/**
	 * Get current value
	 * @return string|null
	 */
	public function getCurrent()
	{
		return $this->current;
	}
	/**
	 * Set current value
	 * @param string $_current the current
	 * @return string
	 */
	public function setCurrent($_current)
	{
		return ($this->current = $_current);
	}
	/**
	 * Get current_26 value
	 * @return string|null
	 */
	public function getCurrent_26()
	{
		return $this->current_26;
	}
	/**
	 * Set current_26 value
	 * @param string $_current_26 the current_26
	 * @return string
	 */
	public function setCurrent_26($_current_26)
	{
		return ($this->current_26 = $_current_26);
	}
	/**
	 * Get current_ipv6 value
	 * @return string|null
	 */
	public function getCurrent_ipv6()
	{
		return $this->current_ipv6;
	}
	/**
	 * Set current_ipv6 value
	 * @param string $_current_ipv6 the current_ipv6
	 * @return string
	 */
	public function setCurrent_ipv6($_current_ipv6)
	{
		return ($this->current_ipv6 = $_current_ipv6);
	}
	/**
	 * Get release value
	 * @return string|null
	 */
	public function getRelease()
	{
		return $this->release;
	}
	/**
	 * Set release value
	 * @param string $_release the release
	 * @return string
	 */
	public function setRelease($_release)
	{
		return ($this->release = $_release);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRtmSystemKernelStruct
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