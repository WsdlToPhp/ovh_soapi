<?php
/**
 * File for class OvhStructTelephonyLineSwitchPossibilityPriceStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyLineSwitchPossibilityPriceStruct originally named telephonyLineSwitchPossibilityPriceStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyLineSwitchPossibilityPriceStruct extends OvhWsdlClass
{
	/**
	 * The offer
	 * @var string
	 */
	public $offer;
	/**
	 * The price
	 * @var string
	 */
	public $price;
	/**
	 * Constructor method for telephonyLineSwitchPossibilityPriceStruct
	 * @see parent::__construct()
	 * @param string $_offer
	 * @param string $_price
	 * @return OvhStructTelephonyLineSwitchPossibilityPriceStruct
	 */
	public function __construct($_offer = NULL,$_price = NULL)
	{
		parent::__construct(array('offer'=>$_offer,'price'=>$_price));
	}
	/**
	 * Get offer value
	 * @return string|null
	 */
	public function getOffer()
	{
		return $this->offer;
	}
	/**
	 * Set offer value
	 * @param string $_offer the offer
	 * @return string
	 */
	public function setOffer($_offer)
	{
		return ($this->offer = $_offer);
	}
	/**
	 * Get price value
	 * @return string|null
	 */
	public function getPrice()
	{
		return $this->price;
	}
	/**
	 * Set price value
	 * @param string $_price the price
	 * @return string
	 */
	public function setPrice($_price)
	{
		return ($this->price = $_price);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyLineSwitchPossibilityPriceStruct
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