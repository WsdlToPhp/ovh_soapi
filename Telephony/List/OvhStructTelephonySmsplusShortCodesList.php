<?php
/**
 * File for class OvhStructTelephonySmsplusShortCodesList
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySmsplusShortCodesList originally named telephonySmsplusShortCodesList
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySmsplusShortCodesList extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The shortCode
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $shortCode;
	/**
	 * The shortCodeCategory
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $shortCodeCategory;
	/**
	 * The publicType
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $publicType;
	/**
	 * The price
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var float
	 */
	public $price;
	/**
	 * The rates
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $rates;
	/**
	 * Constructor method for telephonySmsplusShortCodesList
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_shortCode
	 * @param int $_shortCodeCategory
	 * @param string $_publicType
	 * @param float $_price
	 * @param string $_rates
	 * @return OvhStructTelephonySmsplusShortCodesList
	 */
	public function __construct($_session = NULL,$_shortCode = NULL,$_shortCodeCategory = NULL,$_publicType = NULL,$_price = NULL,$_rates = NULL)
	{
		parent::__construct(array('session'=>$_session,'shortCode'=>$_shortCode,'shortCodeCategory'=>$_shortCodeCategory,'publicType'=>$_publicType,'price'=>$_price,'rates'=>$_rates));
	}
	/**
	 * Get session value
	 * @return string|null
	 */
	public function getSession()
	{
		return $this->session;
	}
	/**
	 * Set session value
	 * @param string $_session the session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get shortCode value
	 * @return string|null
	 */
	public function getShortCode()
	{
		return $this->shortCode;
	}
	/**
	 * Set shortCode value
	 * @param string $_shortCode the shortCode
	 * @return string
	 */
	public function setShortCode($_shortCode)
	{
		return ($this->shortCode = $_shortCode);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySmsplusShortCodesList
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