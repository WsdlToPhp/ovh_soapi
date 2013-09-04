<?php
/**
 * File for class OvhStructTelephonyLineGetOfferPricesResponse
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyLineGetOfferPricesResponse originally named telephonyLineGetOfferPricesResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyLineGetOfferPricesResponse extends OvhWsdlClass
{
	/**
	 * The return
	 * @var OvhStructMyArrayOfTelephonyLineSwitchPossibilityPriceStructType
	 */
	public $return;
	/**
	 * Constructor method for telephonyLineGetOfferPricesResponse
	 * @see parent::__construct()
	 * @param OvhStructMyArrayOfTelephonyLineSwitchPossibilityPriceStructType $_return
	 * @return OvhStructTelephonyLineGetOfferPricesResponse
	 */
	public function __construct($_return = NULL)
	{
		parent::__construct(array('return'=>($_return instanceof OvhStructMyArrayOfTelephonyLineSwitchPossibilityPriceStructType)?$_return:new OvhStructMyArrayOfTelephonyLineSwitchPossibilityPriceStructType($_return)));
	}
	/**
	 * Get return value
	 * @return OvhStructMyArrayOfTelephonyLineSwitchPossibilityPriceStructType|null
	 */
	public function getReturn()
	{
		return $this->return;
	}
	/**
	 * Set return value
	 * @param OvhStructMyArrayOfTelephonyLineSwitchPossibilityPriceStructType $_return the return
	 * @return OvhStructMyArrayOfTelephonyLineSwitchPossibilityPriceStructType
	 */
	public function setReturn($_return)
	{
		return ($this->return = $_return);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyLineGetOfferPricesResponse
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