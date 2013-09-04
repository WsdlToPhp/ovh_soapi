<?php
/**
 * File for class OvhStructTelephonyAvailableFunctionStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyAvailableFunctionStruct originally named telephonyAvailableFunctionStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyAvailableFunctionStruct extends OvhWsdlClass
{
	/**
	 * The function
	 * @var string
	 */
	public $function;
	/**
	 * The relatedValue
	 * @var string
	 */
	public $relatedValue;
	/**
	 * The defaultValue
	 * @var string
	 */
	public $defaultValue;
	/**
	 * The possibilities
	 * @var OvhStructMyArrayOfStringType
	 */
	public $possibilities;
	/**
	 * Constructor method for telephonyAvailableFunctionStruct
	 * @see parent::__construct()
	 * @param string $_function
	 * @param string $_relatedValue
	 * @param string $_defaultValue
	 * @param OvhStructMyArrayOfStringType $_possibilities
	 * @return OvhStructTelephonyAvailableFunctionStruct
	 */
	public function __construct($_function = NULL,$_relatedValue = NULL,$_defaultValue = NULL,$_possibilities = NULL)
	{
		parent::__construct(array('function'=>$_function,'relatedValue'=>$_relatedValue,'defaultValue'=>$_defaultValue,'possibilities'=>($_possibilities instanceof OvhStructMyArrayOfStringType)?$_possibilities:new OvhStructMyArrayOfStringType($_possibilities)));
	}
	/**
	 * Get function value
	 * @return string|null
	 */
	public function getFunction()
	{
		return $this->function;
	}
	/**
	 * Set function value
	 * @param string $_function the function
	 * @return string
	 */
	public function setFunction($_function)
	{
		return ($this->function = $_function);
	}
	/**
	 * Get relatedValue value
	 * @return string|null
	 */
	public function getRelatedValue()
	{
		return $this->relatedValue;
	}
	/**
	 * Set relatedValue value
	 * @param string $_relatedValue the relatedValue
	 * @return string
	 */
	public function setRelatedValue($_relatedValue)
	{
		return ($this->relatedValue = $_relatedValue);
	}
	/**
	 * Get defaultValue value
	 * @return string|null
	 */
	public function getDefaultValue()
	{
		return $this->defaultValue;
	}
	/**
	 * Set defaultValue value
	 * @param string $_defaultValue the defaultValue
	 * @return string
	 */
	public function setDefaultValue($_defaultValue)
	{
		return ($this->defaultValue = $_defaultValue);
	}
	/**
	 * Get possibilities value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getPossibilities()
	{
		return $this->possibilities;
	}
	/**
	 * Set possibilities value
	 * @param OvhStructMyArrayOfStringType $_possibilities the possibilities
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setPossibilities($_possibilities)
	{
		return ($this->possibilities = $_possibilities);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyAvailableFunctionStruct
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