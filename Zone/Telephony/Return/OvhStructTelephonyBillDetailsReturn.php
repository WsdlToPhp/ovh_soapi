<?php
/**
 * File for class OvhStructTelephonyBillDetailsReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyBillDetailsReturn originally named telephonyBillDetailsReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyBillDetailsReturn extends OvhWsdlClass
{
	/**
	 * The fromDate
	 * @var string
	 */
	public $fromDate;
	/**
	 * The toDate
	 * @var string
	 */
	public $toDate;
	/**
	 * The list
	 * @var OvhStructMyArrayOfTelephonyCallStructType
	 */
	public $list;
	/**
	 * Constructor method for telephonyBillDetailsReturn
	 * @see parent::__construct()
	 * @param string $_fromDate
	 * @param string $_toDate
	 * @param OvhStructMyArrayOfTelephonyCallStructType $_list
	 * @return OvhStructTelephonyBillDetailsReturn
	 */
	public function __construct($_fromDate = NULL,$_toDate = NULL,$_list = NULL)
	{
		parent::__construct(array('fromDate'=>$_fromDate,'toDate'=>$_toDate,'list'=>($_list instanceof OvhStructMyArrayOfTelephonyCallStructType)?$_list:new OvhStructMyArrayOfTelephonyCallStructType($_list)));
	}
	/**
	 * Get fromDate value
	 * @return string|null
	 */
	public function getFromDate()
	{
		return $this->fromDate;
	}
	/**
	 * Set fromDate value
	 * @param string $_fromDate the fromDate
	 * @return string
	 */
	public function setFromDate($_fromDate)
	{
		return ($this->fromDate = $_fromDate);
	}
	/**
	 * Get toDate value
	 * @return string|null
	 */
	public function getToDate()
	{
		return $this->toDate;
	}
	/**
	 * Set toDate value
	 * @param string $_toDate the toDate
	 * @return string
	 */
	public function setToDate($_toDate)
	{
		return ($this->toDate = $_toDate);
	}
	/**
	 * Get list value
	 * @return OvhStructMyArrayOfTelephonyCallStructType|null
	 */
	public function getList()
	{
		return $this->list;
	}
	/**
	 * Set list value
	 * @param OvhStructMyArrayOfTelephonyCallStructType $_list the list
	 * @return OvhStructMyArrayOfTelephonyCallStructType
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
	 * @return OvhStructTelephonyBillDetailsReturn
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