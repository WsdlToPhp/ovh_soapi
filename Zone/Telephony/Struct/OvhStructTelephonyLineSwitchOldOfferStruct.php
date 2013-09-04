<?php
/**
 * File for class OvhStructTelephonyLineSwitchOldOfferStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyLineSwitchOldOfferStruct originally named telephonyLineSwitchOldOfferStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyLineSwitchOldOfferStruct extends OvhWsdlClass
{
	/**
	 * The number
	 * @var string
	 */
	public $number;
	/**
	 * The offers
	 * @var OvhStructMyArrayOfTelephonyLineSwitchPossibilityPriceStructType
	 */
	public $offers;
	/**
	 * Constructor method for telephonyLineSwitchOldOfferStruct
	 * @see parent::__construct()
	 * @param string $_number
	 * @param OvhStructMyArrayOfTelephonyLineSwitchPossibilityPriceStructType $_offers
	 * @return OvhStructTelephonyLineSwitchOldOfferStruct
	 */
	public function __construct($_number = NULL,$_offers = NULL)
	{
		parent::__construct(array('number'=>$_number,'offers'=>($_offers instanceof OvhStructMyArrayOfTelephonyLineSwitchPossibilityPriceStructType)?$_offers:new OvhStructMyArrayOfTelephonyLineSwitchPossibilityPriceStructType($_offers)));
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
	 * Get offers value
	 * @return OvhStructMyArrayOfTelephonyLineSwitchPossibilityPriceStructType|null
	 */
	public function getOffers()
	{
		return $this->offers;
	}
	/**
	 * Set offers value
	 * @param OvhStructMyArrayOfTelephonyLineSwitchPossibilityPriceStructType $_offers the offers
	 * @return OvhStructMyArrayOfTelephonyLineSwitchPossibilityPriceStructType
	 */
	public function setOffers($_offers)
	{
		return ($this->offers = $_offers);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyLineSwitchOldOfferStruct
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