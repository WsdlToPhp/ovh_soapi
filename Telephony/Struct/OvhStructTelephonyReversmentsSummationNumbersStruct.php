<?php
/**
 * File for class OvhStructTelephonyReversmentsSummationNumbersStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyReversmentsSummationNumbersStruct originally named telephonyReversmentsSummationNumbersStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyReversmentsSummationNumbersStruct extends OvhWsdlClass
{
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The list
	 * @var OvhStructMyArrayOfTelephonyReversmentsSummationStructType
	 */
	public $list;
	/**
	 * Constructor method for telephonyReversmentsSummationNumbersStruct
	 * @see parent::__construct()
	 * @param string $_number
	 * @param OvhStructMyArrayOfTelephonyReversmentsSummationStructType $_list
	 * @return OvhStructTelephonyReversmentsSummationNumbersStruct
	 */
	public function __construct($_number = NULL,$_list = NULL)
	{
		parent::__construct(array('number'=>$_number,'list'=>($_list instanceof OvhStructMyArrayOfTelephonyReversmentsSummationStructType)?$_list:new OvhStructMyArrayOfTelephonyReversmentsSummationStructType($_list)));
	}
	/**
	 * Get number value
	 * @return string|null
	 */
	public function getNumber()
	{
		return $this->number;
	}
	/**
	 * Set number value
	 * @param string $_number the number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get list value
	 * @return OvhStructMyArrayOfTelephonyReversmentsSummationStructType|null
	 */
	public function getList()
	{
		return $this->list;
	}
	/**
	 * Set list value
	 * @param OvhStructMyArrayOfTelephonyReversmentsSummationStructType $_list the list
	 * @return OvhStructMyArrayOfTelephonyReversmentsSummationStructType
	 */
	public function setList($_list)
	{
		return ($this->list = $_list);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyReversmentsSummationNumbersStruct
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