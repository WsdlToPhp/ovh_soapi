<?php
/**
 * File for class OvhStructTelephonySpareListReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySpareListReturn originally named telephonySpareListReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySpareListReturn extends OvhWsdlClass
{
	/**
	 * The list
	 * @var OvhStructMyArrayOfTelephonySpareInfoStructType
	 */
	public $list;
	/**
	 * The total
	 * @var int
	 */
	public $total;
	/**
	 * The serviceInfo
	 * @var OvhStructTelephonySpareServiceInfoStruct
	 */
	public $serviceInfo;
	/**
	 * Constructor method for telephonySpareListReturn
	 * @see parent::__construct()
	 * @param OvhStructMyArrayOfTelephonySpareInfoStructType $_list
	 * @param int $_total
	 * @param OvhStructTelephonySpareServiceInfoStruct $_serviceInfo
	 * @return OvhStructTelephonySpareListReturn
	 */
	public function __construct($_list = NULL,$_total = NULL,$_serviceInfo = NULL)
	{
		parent::__construct(array('list'=>($_list instanceof OvhStructMyArrayOfTelephonySpareInfoStructType)?$_list:new OvhStructMyArrayOfTelephonySpareInfoStructType($_list),'total'=>$_total,'serviceInfo'=>$_serviceInfo));
	}
	/**
	 * Get list value
	 * @return OvhStructMyArrayOfTelephonySpareInfoStructType|null
	 */
	public function getList()
	{
		return $this->list;
	}
	/**
	 * Set list value
	 * @param OvhStructMyArrayOfTelephonySpareInfoStructType $_list the list
	 * @return OvhStructMyArrayOfTelephonySpareInfoStructType
	 */
	public function setList($_list)
	{
		return ($this->list = $_list);
	}
	/**
	 * Get total value
	 * @return int|null
	 */
	public function getTotal()
	{
		return $this->total;
	}
	/**
	 * Set total value
	 * @param int $_total the total
	 * @return int
	 */
	public function setTotal($_total)
	{
		return ($this->total = $_total);
	}
	/**
	 * Get serviceInfo value
	 * @return OvhStructTelephonySpareServiceInfoStruct|null
	 */
	public function getServiceInfo()
	{
		return $this->serviceInfo;
	}
	/**
	 * Set serviceInfo value
	 * @param OvhStructTelephonySpareServiceInfoStruct $_serviceInfo the serviceInfo
	 * @return OvhStructTelephonySpareServiceInfoStruct
	 */
	public function setServiceInfo($_serviceInfo)
	{
		return ($this->serviceInfo = $_serviceInfo);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySpareListReturn
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