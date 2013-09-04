<?php
/**
 * File for class OvhStructRtmSystemRtmStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRtmSystemRtmStruct originally named rtmSystemRtmStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRtmSystemRtmStruct extends OvhWsdlClass
{
	/**
	 * The status
	 * @var boolean
	 */
	public $status;
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
	 * Constructor method for rtmSystemRtmStruct
	 * @see parent::__construct()
	 * @param boolean $_status
	 * @param string $_version
	 * @param string $_current
	 * @return OvhStructRtmSystemRtmStruct
	 */
	public function __construct($_status = NULL,$_version = NULL,$_current = NULL)
	{
		parent::__construct(array('status'=>$_status,'version'=>$_version,'current'=>$_current));
	}
	/**
	 * Get status value
	 * @return boolean|null
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set status value
	 * @param boolean $_status the status
	 * @return boolean
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRtmSystemRtmStruct
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