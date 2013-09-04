<?php
/**
 * File for class OvhStructRtmMotherboardStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRtmMotherboardStruct originally named rtmMotherboardStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRtmMotherboardStruct extends OvhWsdlClass
{
	/**
	 * The manufacture
	 * @var string
	 */
	public $manufacture;
	/**
	 * The modelName
	 * @var string
	 */
	public $modelName;
	/**
	 * Constructor method for rtmMotherboardStruct
	 * @see parent::__construct()
	 * @param string $_manufacture
	 * @param string $_modelName
	 * @return OvhStructRtmMotherboardStruct
	 */
	public function __construct($_manufacture = NULL,$_modelName = NULL)
	{
		parent::__construct(array('manufacture'=>$_manufacture,'modelName'=>$_modelName));
	}
	/**
	 * Get manufacture value
	 * @return string|null
	 */
	public function getManufacture()
	{
		return $this->manufacture;
	}
	/**
	 * Set manufacture value
	 * @param string $_manufacture the manufacture
	 * @return string
	 */
	public function setManufacture($_manufacture)
	{
		return ($this->manufacture = $_manufacture);
	}
	/**
	 * Get modelName value
	 * @return string|null
	 */
	public function getModelName()
	{
		return $this->modelName;
	}
	/**
	 * Set modelName value
	 * @param string $_modelName the modelName
	 * @return string
	 */
	public function setModelName($_modelName)
	{
		return ($this->modelName = $_modelName);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRtmMotherboardStruct
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