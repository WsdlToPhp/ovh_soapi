<?php
/**
 * File for class OvhStructTelephonyFaxCampaignListReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyFaxCampaignListReturn originally named telephonyFaxCampaignListReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyFaxCampaignListReturn extends OvhWsdlClass
{
	/**
	 * The totalRecords
	 * @var int
	 */
	public $totalRecords;
	/**
	 * The list
	 * @var OvhStructMyArrayOfTelephonyFaxCampaignStructType
	 */
	public $list;
	/**
	 * Constructor method for telephonyFaxCampaignListReturn
	 * @see parent::__construct()
	 * @param int $_totalRecords
	 * @param OvhStructMyArrayOfTelephonyFaxCampaignStructType $_list
	 * @return OvhStructTelephonyFaxCampaignListReturn
	 */
	public function __construct($_totalRecords = NULL,$_list = NULL)
	{
		parent::__construct(array('totalRecords'=>$_totalRecords,'list'=>($_list instanceof OvhStructMyArrayOfTelephonyFaxCampaignStructType)?$_list:new OvhStructMyArrayOfTelephonyFaxCampaignStructType($_list)));
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
	 * Get list value
	 * @return OvhStructMyArrayOfTelephonyFaxCampaignStructType|null
	 */
	public function getList()
	{
		return $this->list;
	}
	/**
	 * Set list value
	 * @param OvhStructMyArrayOfTelephonyFaxCampaignStructType $_list the list
	 * @return OvhStructMyArrayOfTelephonyFaxCampaignStructType
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
	 * @return OvhStructTelephonyFaxCampaignListReturn
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