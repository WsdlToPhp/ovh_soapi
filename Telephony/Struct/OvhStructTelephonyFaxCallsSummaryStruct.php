<?php
/**
 * File for class OvhStructTelephonyFaxCallsSummaryStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyFaxCallsSummaryStruct originally named telephonyFaxCallsSummaryStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyFaxCallsSummaryStruct extends OvhWsdlClass
{
	/**
	 * The high
	 * @var OvhStructTelephonyFaxCallsSummaryDetailsStruct
	 */
	public $high;
	/**
	 * The low
	 * @var OvhStructTelephonyFaxCallsSummaryDetailsStruct
	 */
	public $low;
	/**
	 * Constructor method for telephonyFaxCallsSummaryStruct
	 * @see parent::__construct()
	 * @param OvhStructTelephonyFaxCallsSummaryDetailsStruct $_high
	 * @param OvhStructTelephonyFaxCallsSummaryDetailsStruct $_low
	 * @return OvhStructTelephonyFaxCallsSummaryStruct
	 */
	public function __construct($_high = NULL,$_low = NULL)
	{
		parent::__construct(array('high'=>$_high,'low'=>$_low));
	}
	/**
	 * Get high value
	 * @return OvhStructTelephonyFaxCallsSummaryDetailsStruct|null
	 */
	public function getHigh()
	{
		return $this->high;
	}
	/**
	 * Set high value
	 * @param OvhStructTelephonyFaxCallsSummaryDetailsStruct $_high the high
	 * @return OvhStructTelephonyFaxCallsSummaryDetailsStruct
	 */
	public function setHigh($_high)
	{
		return ($this->high = $_high);
	}
	/**
	 * Get low value
	 * @return OvhStructTelephonyFaxCallsSummaryDetailsStruct|null
	 */
	public function getLow()
	{
		return $this->low;
	}
	/**
	 * Set low value
	 * @param OvhStructTelephonyFaxCallsSummaryDetailsStruct $_low the low
	 * @return OvhStructTelephonyFaxCallsSummaryDetailsStruct
	 */
	public function setLow($_low)
	{
		return ($this->low = $_low);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyFaxCallsSummaryStruct
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