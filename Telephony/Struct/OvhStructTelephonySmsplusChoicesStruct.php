<?php
/**
 * File for class OvhStructTelephonySmsplusChoicesStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySmsplusChoicesStruct originally named telephonySmsplusChoicesStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySmsplusChoicesStruct extends OvhWsdlClass
{
	/**
	 * The level
	 * @var int
	 */
	public $level;
	/**
	 * The price
	 * @var float
	 */
	public $price;
	/**
	 * The priceReversed
	 * @var float
	 */
	public $priceReversed;
	/**
	 * The shortCodeCategory
	 * @var int
	 */
	public $shortCodeCategory;
	/**
	 * The publicType
	 * @var string
	 */
	public $publicType;
	/**
	 * The rates
	 * @var string
	 */
	public $rates;
	/**
	 * The applicationTypes
	 * @var OvhStructMyArrayOfTelephonyApplicationTypeStructType
	 */
	public $applicationTypes;
	/**
	 * The shortCodes
	 * @var OvhStructMyArrayOfStringType
	 */
	public $shortCodes;
	/**
	 * Constructor method for telephonySmsplusChoicesStruct
	 * @see parent::__construct()
	 * @param int $_level
	 * @param float $_price
	 * @param float $_priceReversed
	 * @param int $_shortCodeCategory
	 * @param string $_publicType
	 * @param string $_rates
	 * @param OvhStructMyArrayOfTelephonyApplicationTypeStructType $_applicationTypes
	 * @param OvhStructMyArrayOfStringType $_shortCodes
	 * @return OvhStructTelephonySmsplusChoicesStruct
	 */
	public function __construct($_level = NULL,$_price = NULL,$_priceReversed = NULL,$_shortCodeCategory = NULL,$_publicType = NULL,$_rates = NULL,$_applicationTypes = NULL,$_shortCodes = NULL)
	{
		parent::__construct(array('level'=>$_level,'price'=>$_price,'priceReversed'=>$_priceReversed,'shortCodeCategory'=>$_shortCodeCategory,'publicType'=>$_publicType,'rates'=>$_rates,'applicationTypes'=>($_applicationTypes instanceof OvhStructMyArrayOfTelephonyApplicationTypeStructType)?$_applicationTypes:new OvhStructMyArrayOfTelephonyApplicationTypeStructType($_applicationTypes),'shortCodes'=>($_shortCodes instanceof OvhStructMyArrayOfStringType)?$_shortCodes:new OvhStructMyArrayOfStringType($_shortCodes)));
	}
	/**
	 * Get level value
	 * @return int|null
	 */
	public function getLevel()
	{
		return $this->level;
	}
	/**
	 * Set level value
	 * @param int $_level the level
	 * @return int
	 */
	public function setLevel($_level)
	{
		return ($this->level = $_level);
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
	 * Get shortCodeCategory value
	 * @return int|null
	 */
	public function getShortCodeCategory()
	{
		return $this->shortCodeCategory;
	}
	/**
	 * Set shortCodeCategory value
	 * @param int $_shortCodeCategory the shortCodeCategory
	 * @return int
	 */
	public function setShortCodeCategory($_shortCodeCategory)
	{
		return ($this->shortCodeCategory = $_shortCodeCategory);
	}
	/**
	 * Get publicType value
	 * @return string|null
	 */
	public function getPublicType()
	{
		return $this->publicType;
	}
	/**
	 * Set publicType value
	 * @param string $_publicType the publicType
	 * @return string
	 */
	public function setPublicType($_publicType)
	{
		return ($this->publicType = $_publicType);
	}
	/**
	 * Get rates value
	 * @return string|null
	 */
	public function getRates()
	{
		return $this->rates;
	}
	/**
	 * Set rates value
	 * @param string $_rates the rates
	 * @return string
	 */
	public function setRates($_rates)
	{
		return ($this->rates = $_rates);
	}
	/**
	 * Get applicationTypes value
	 * @return OvhStructMyArrayOfTelephonyApplicationTypeStructType|null
	 */
	public function getApplicationTypes()
	{
		return $this->applicationTypes;
	}
	/**
	 * Set applicationTypes value
	 * @param OvhStructMyArrayOfTelephonyApplicationTypeStructType $_applicationTypes the applicationTypes
	 * @return OvhStructMyArrayOfTelephonyApplicationTypeStructType
	 */
	public function setApplicationTypes($_applicationTypes)
	{
		return ($this->applicationTypes = $_applicationTypes);
	}
	/**
	 * Get shortCodes value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getShortCodes()
	{
		return $this->shortCodes;
	}
	/**
	 * Set shortCodes value
	 * @param OvhStructMyArrayOfStringType $_shortCodes the shortCodes
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setShortCodes($_shortCodes)
	{
		return ($this->shortCodes = $_shortCodes);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySmsplusChoicesStruct
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