<?php
/**
 * File for class OvhStructTelephonyBillingAccountSummaryReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyBillingAccountSummaryReturn originally named telephonyBillingAccountSummaryReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyBillingAccountSummaryReturn extends OvhWsdlClass
{
	/**
	 * The billingAccount
	 * @var OvhStructTelephonyBillingAccountSummaryBillingAccountStruct
	 */
	public $billingAccount;
	/**
	 * The lines
	 * @var OvhStructMyArrayOfTelephonyBillingAccountSummaryLineStructType
	 */
	public $lines;
	/**
	 * Constructor method for telephonyBillingAccountSummaryReturn
	 * @see parent::__construct()
	 * @param OvhStructTelephonyBillingAccountSummaryBillingAccountStruct $_billingAccount
	 * @param OvhStructMyArrayOfTelephonyBillingAccountSummaryLineStructType $_lines
	 * @return OvhStructTelephonyBillingAccountSummaryReturn
	 */
	public function __construct($_billingAccount = NULL,$_lines = NULL)
	{
		parent::__construct(array('billingAccount'=>$_billingAccount,'lines'=>($_lines instanceof OvhStructMyArrayOfTelephonyBillingAccountSummaryLineStructType)?$_lines:new OvhStructMyArrayOfTelephonyBillingAccountSummaryLineStructType($_lines)));
	}
	/**
	 * Get billingAccount value
	 * @return OvhStructTelephonyBillingAccountSummaryBillingAccountStruct|null
	 */
	public function getBillingAccount()
	{
		return $this->billingAccount;
	}
	/**
	 * Set billingAccount value
	 * @param OvhStructTelephonyBillingAccountSummaryBillingAccountStruct $_billingAccount the billingAccount
	 * @return OvhStructTelephonyBillingAccountSummaryBillingAccountStruct
	 */
	public function setBillingAccount($_billingAccount)
	{
		return ($this->billingAccount = $_billingAccount);
	}
	/**
	 * Get lines value
	 * @return OvhStructMyArrayOfTelephonyBillingAccountSummaryLineStructType|null
	 */
	public function getLines()
	{
		return $this->lines;
	}
	/**
	 * Set lines value
	 * @param OvhStructMyArrayOfTelephonyBillingAccountSummaryLineStructType $_lines the lines
	 * @return OvhStructMyArrayOfTelephonyBillingAccountSummaryLineStructType
	 */
	public function setLines($_lines)
	{
		return ($this->lines = $_lines);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyBillingAccountSummaryReturn
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