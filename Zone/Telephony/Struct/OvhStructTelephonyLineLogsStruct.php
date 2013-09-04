<?php
/**
 * File for class OvhStructTelephonyLineLogsStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyLineLogsStruct originally named telephonyLineLogsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyLineLogsStruct extends OvhWsdlClass
{
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The list
	 * @var OvhStructMyArrayOfTelephonyLineLogsListStructType
	 */
	public $list;
	/**
	 * The totalRecords
	 * @var int
	 */
	public $totalRecords;
	/**
	 * Constructor method for telephonyLineLogsStruct
	 * @see parent::__construct()
	 * @param string $_number
	 * @param OvhStructMyArrayOfTelephonyLineLogsListStructType $_list
	 * @param int $_totalRecords
	 * @return OvhStructTelephonyLineLogsStruct
	 */
	public function __construct($_number = NULL,$_list = NULL,$_totalRecords = NULL)
	{
		parent::__construct(array('number'=>$_number,'list'=>($_list instanceof OvhStructMyArrayOfTelephonyLineLogsListStructType)?$_list:new OvhStructMyArrayOfTelephonyLineLogsListStructType($_list),'totalRecords'=>$_totalRecords));
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
	 * @return OvhStructMyArrayOfTelephonyLineLogsListStructType|null
	 */
	public function getList()
	{
		return $this->list;
	}
	/**
	 * Set list value
	 * @param OvhStructMyArrayOfTelephonyLineLogsListStructType $_list the list
	 * @return OvhStructMyArrayOfTelephonyLineLogsListStructType
	 */
	public function setList($_list)
	{
		return ($this->list = $_list);
	}
	/**
	 * Get totalRecords value
	 * @return int|null
	 */
	public function getTotalRecords()
	{
		return $this->totalRecords;
	}
	/**
	 * Set totalRecords value
	 * @param int $_totalRecords the totalRecords
	 * @return int
	 */
	public function setTotalRecords($_totalRecords)
	{
		return ($this->totalRecords = $_totalRecords);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyLineLogsStruct
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