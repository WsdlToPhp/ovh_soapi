<?php
/**
 * File for class OvhStructTelephonySmsplusSummaryInfosStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySmsplusSummaryInfosStruct originally named telephonySmsplusSummaryInfosStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySmsplusSummaryInfosStruct extends OvhWsdlClass
{
	/**
	 * The quantity
	 * @var string
	 */
	public $quantity;
	/**
	 * The priceReversed
	 * @var float
	 */
	public $priceReversed;
	/**
	 * The price
	 * @var float
	 */
	public $price;
	/**
	 * Constructor method for telephonySmsplusSummaryInfosStruct
	 * @see parent::__construct()
	 * @param string $_quantity
	 * @param float $_priceReversed
	 * @param float $_price
	 * @return OvhStructTelephonySmsplusSummaryInfosStruct
	 */
	public function __construct($_quantity = NULL,$_priceReversed = NULL,$_price = NULL)
	{
		parent::__construct(array('quantity'=>$_quantity,'priceReversed'=>$_priceReversed,'price'=>$_price));
	}
	/**
	 * Get quantity value
	 * @return string|null
	 */
	public function getQuantity()
	{
		return $this->quantity;
	}
	/**
	 * Set quantity value
	 * @param string $_quantity the quantity
	 * @return string
	 */
	public function setQuantity($_quantity)
	{
		return ($this->quantity = $_quantity);
	}
	/**
	 * Get priceReversed value
	 * @return float|null
	 */
	public function getPriceReversed()
	{
		return $this->priceReversed;
	}
	/**
	 * Set priceReversed value
	 * @param float $_priceReversed the priceReversed
	 * @return float
	 */
	public function setPriceReversed($_priceReversed)
	{
		return ($this->priceReversed = $_priceReversed);
	}
	/**
	 * Get price value
	 * @return float|null
	 */
	public function getPrice()
	{
		return $this->price;
	}
	/**
	 * Set price value
	 * @param float $_price the price
	 * @return float
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
	 * @return OvhStructTelephonySmsplusSummaryInfosStruct
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