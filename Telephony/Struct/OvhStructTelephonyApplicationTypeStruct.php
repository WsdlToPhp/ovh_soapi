<?php
/**
 * File for class OvhStructTelephonyApplicationTypeStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyApplicationTypeStruct originally named telephonyApplicationTypeStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyApplicationTypeStruct extends OvhWsdlClass
{
	/**
	 * The label
	 * @var string
	 */
	public $label;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * Constructor method for telephonyApplicationTypeStruct
	 * @see parent::__construct()
	 * @param string $_label
	 * @param string $_description
	 * @return OvhStructTelephonyApplicationTypeStruct
	 */
	public function __construct($_label = NULL,$_description = NULL)
	{
		parent::__construct(array('label'=>$_label,'description'=>$_description));
	}
	/**
	 * Get label value
	 * @return string|null
	 */
	public function getLabel()
	{
		return $this->label;
	}
	/**
	 * Set label value
	 * @param string $_label the label
	 * @return string
	 */
	public function setLabel($_label)
	{
		return ($this->label = $_label);
	}
	/**
	 * Get description value
	 * @return string|null
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set description value
	 * @param string $_description the description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyApplicationTypeStruct
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