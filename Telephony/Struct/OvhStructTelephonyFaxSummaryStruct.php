<?php
/**
 * File for class OvhStructTelephonyFaxSummaryStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyFaxSummaryStruct originally named telephonyFaxSummaryStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyFaxSummaryStruct extends OvhWsdlClass
{
	/**
	 * The low
	 * @var OvhStructTelephonyFaxSummaryDetailsStruct
	 */
	public $low;
	/**
	 * The high
	 * @var OvhStructTelephonyFaxSummaryDetailsStruct
	 */
	public $high;
	/**
	 * Constructor method for telephonyFaxSummaryStruct
	 * @see parent::__construct()
	 * @param OvhStructTelephonyFaxSummaryDetailsStruct $_low
	 * @param OvhStructTelephonyFaxSummaryDetailsStruct $_high
	 * @return OvhStructTelephonyFaxSummaryStruct
	 */
	public function __construct($_low = NULL,$_high = NULL)
	{
		parent::__construct(array('low'=>$_low,'high'=>$_high));
	}
	/**
	 * Get low value
	 * @return OvhStructTelephonyFaxSummaryDetailsStruct|null
	 */
	public function getLow()
	{
		return $this->low;
	}
	/**
	 * Set low value
	 * @param OvhStructTelephonyFaxSummaryDetailsStruct $_low the low
	 * @return OvhStructTelephonyFaxSummaryDetailsStruct
	 */
	public function setLow($_low)
	{
		return ($this->low = $_low);
	}
	/**
	 * Get high value
	 * @return OvhStructTelephonyFaxSummaryDetailsStruct|null
	 */
	public function getHigh()
	{
		return $this->high;
	}
	/**
	 * Set high value
	 * @param OvhStructTelephonyFaxSummaryDetailsStruct $_high the high
	 * @return OvhStructTelephonyFaxSummaryDetailsStruct
	 */
	public function setHigh($_high)
	{
		return ($this->high = $_high);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyFaxSummaryStruct
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