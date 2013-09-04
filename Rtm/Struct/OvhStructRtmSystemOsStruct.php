<?php
/**
 * File for class OvhStructRtmSystemOsStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRtmSystemOsStruct originally named rtmSystemOsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRtmSystemOsStruct extends OvhWsdlClass
{
	/**
	 * The current
	 * @var string
	 */
	public $current;
	/**
	 * The os
	 * @var string
	 */
	public $os;
	/**
	 * Constructor method for rtmSystemOsStruct
	 * @see parent::__construct()
	 * @param string $_current
	 * @param string $_os
	 * @return OvhStructRtmSystemOsStruct
	 */
	public function __construct($_current = NULL,$_os = NULL)
	{
		parent::__construct(array('current'=>$_current,'os'=>$_os));
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
	 * Get os value
	 * @return string|null
	 */
	public function getOs()
	{
		return $this->os;
	}
	/**
	 * Set os value
	 * @param string $_os the os
	 * @return string
	 */
	public function setOs($_os)
	{
		return ($this->os = $_os);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRtmSystemOsStruct
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