<?php
/**
 * File for class OvhStructRtmMemoryModuleStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRtmMemoryModuleStruct originally named rtmMemoryModuleStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRtmMemoryModuleStruct extends OvhWsdlClass
{
	/**
	 * The moduleName
	 * @var string
	 */
	public $moduleName;
	/**
	 * The value
	 * @var string
	 */
	public $value;
	/**
	 * Constructor method for rtmMemoryModuleStruct
	 * @see parent::__construct()
	 * @param string $_moduleName
	 * @param string $_value
	 * @return OvhStructRtmMemoryModuleStruct
	 */
	public function __construct($_moduleName = NULL,$_value = NULL)
	{
		parent::__construct(array('moduleName'=>$_moduleName,'value'=>$_value));
	}
	/**
	 * Get moduleName value
	 * @return string|null
	 */
	public function getModuleName()
	{
		return $this->moduleName;
	}
	/**
	 * Set moduleName value
	 * @param string $_moduleName the moduleName
	 * @return string
	 */
	public function setModuleName($_moduleName)
	{
		return ($this->moduleName = $_moduleName);
	}
	/**
	 * Get value value
	 * @return string|null
	 */
	public function getValue()
	{
		return $this->value;
	}
	/**
	 * Set value value
	 * @param string $_value the value
	 * @return string
	 */
	public function setValue($_value)
	{
		return ($this->value = $_value);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRtmMemoryModuleStruct
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