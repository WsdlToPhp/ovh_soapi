<?php
/**
 * File for class OvhStructTelephonyFunctionKeyStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyFunctionKeyStruct originally named telephonyFunctionKeyStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyFunctionKeyStruct extends OvhWsdlClass
{
	/**
	 * The keyNum
	 * @var int
	 */
	public $keyNum;
	/**
	 * The function
	 * @var string
	 */
	public $function;
	/**
	 * The relatedNumber
	 * @var string
	 */
	public $relatedNumber;
	/**
	 * The label
	 * @var string
	 */
	public $label;
	/**
	 * The default
	 * @var string
	 */
	public $default;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The functionList
	 * @var OvhStructMyArrayOfTelephonyAvailableFunctionStructType
	 */
	public $functionList;
	/**
	 * Constructor method for telephonyFunctionKeyStruct
	 * @see parent::__construct()
	 * @param int $_keyNum
	 * @param string $_function
	 * @param string $_relatedNumber
	 * @param string $_label
	 * @param string $_default
	 * @param string $_type
	 * @param OvhStructMyArrayOfTelephonyAvailableFunctionStructType $_functionList
	 * @return OvhStructTelephonyFunctionKeyStruct
	 */
	public function __construct($_keyNum = NULL,$_function = NULL,$_relatedNumber = NULL,$_label = NULL,$_default = NULL,$_type = NULL,$_functionList = NULL)
	{
		parent::__construct(array('keyNum'=>$_keyNum,'function'=>$_function,'relatedNumber'=>$_relatedNumber,'label'=>$_label,'default'=>$_default,'type'=>$_type,'functionList'=>($_functionList instanceof OvhStructMyArrayOfTelephonyAvailableFunctionStructType)?$_functionList:new OvhStructMyArrayOfTelephonyAvailableFunctionStructType($_functionList)));
	}
	/**
	 * Get keyNum value
	 * @return int|null
	 */
	public function getKeyNum()
	{
		return $this->keyNum;
	}
	/**
	 * Set keyNum value
	 * @param int $_keyNum the keyNum
	 * @return int
	 */
	public function setKeyNum($_keyNum)
	{
		return ($this->keyNum = $_keyNum);
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
	 * Get relatedNumber value
	 * @return string|null
	 */
	public function getRelatedNumber()
	{
		return $this->relatedNumber;
	}
	/**
	 * Set relatedNumber value
	 * @param string $_relatedNumber the relatedNumber
	 * @return string
	 */
	public function setRelatedNumber($_relatedNumber)
	{
		return ($this->relatedNumber = $_relatedNumber);
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
	 * Get default value
	 * @return string|null
	 */
	public function getDefault()
	{
		return $this->default;
	}
	/**
	 * Set default value
	 * @param string $_default the default
	 * @return string
	 */
	public function setDefault($_default)
	{
		return ($this->default = $_default);
	}
	/**
	 * Get type value
	 * @return string|null
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set type value
	 * @param string $_type the type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get functionList value
	 * @return OvhStructMyArrayOfTelephonyAvailableFunctionStructType|null
	 */
	public function getFunctionList()
	{
		return $this->functionList;
	}
	/**
	 * Set functionList value
	 * @param OvhStructMyArrayOfTelephonyAvailableFunctionStructType $_functionList the functionList
	 * @return OvhStructMyArrayOfTelephonyAvailableFunctionStructType
	 */
	public function setFunctionList($_functionList)
	{
		return ($this->functionList = $_functionList);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyFunctionKeyStruct
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