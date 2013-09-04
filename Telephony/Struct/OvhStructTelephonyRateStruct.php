<?php
/**
 * File for class OvhStructTelephonyRateStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyRateStruct originally named telephonyRateStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyRateStruct extends OvhWsdlClass
{
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The countrySuffixe
	 * @var string
	 */
	public $countrySuffixe;
	/**
	 * The price
	 * @var float
	 */
	public $price;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * Constructor method for telephonyRateStruct
	 * @see parent::__construct()
	 * @param string $_country
	 * @param string $_countrySuffixe
	 * @param float $_price
	 * @param string $_type
	 * @return OvhStructTelephonyRateStruct
	 */
	public function __construct($_country = NULL,$_countrySuffixe = NULL,$_price = NULL,$_type = NULL)
	{
		parent::__construct(array('country'=>$_country,'countrySuffixe'=>$_countrySuffixe,'price'=>$_price,'type'=>$_type));
	}
	/**
	 * Get country value
	 * @return string|null
	 */
	public function getCountry()
	{
		return $this->country;
	}
	/**
	 * Set country value
	 * @param string $_country the country
	 * @return string
	 */
	public function setCountry($_country)
	{
		return ($this->country = $_country);
	}
	/**
	 * Get countrySuffixe value
	 * @return string|null
	 */
	public function getCountrySuffixe()
	{
		return $this->countrySuffixe;
	}
	/**
	 * Set countrySuffixe value
	 * @param string $_countrySuffixe the countrySuffixe
	 * @return string
	 */
	public function setCountrySuffixe($_countrySuffixe)
	{
		return ($this->countrySuffixe = $_countrySuffixe);
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
	 * Get type value
	 * @return string|null
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set type value
	 * @param string $_type the type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyRateStruct
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