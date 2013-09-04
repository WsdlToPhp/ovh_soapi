<?php
/**
 * File for class OvhStructTelephonyLineSwitchOldOfferPossibility
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyLineSwitchOldOfferPossibility originally named telephonyLineSwitchOldOfferPossibility
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyLineSwitchOldOfferPossibility extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The numbers
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfStringType
	 */
	public $numbers;
	/**
	 * The country
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $country;
	/**
	 * Constructor method for telephonyLineSwitchOldOfferPossibility
	 * @see parent::__construct()
	 * @param string $_session
	 * @param OvhStructMyArrayOfStringType $_numbers
	 * @param string $_country
	 * @return OvhStructTelephonyLineSwitchOldOfferPossibility
	 */
	public function __construct($_session = NULL,$_numbers = NULL,$_country = NULL)
	{
		parent::__construct(array('session'=>$_session,'numbers'=>($_numbers instanceof OvhStructMyArrayOfStringType)?$_numbers:new OvhStructMyArrayOfStringType($_numbers),'country'=>$_country));
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
	 * Get numbers value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getNumbers()
	{
		return $this->numbers;
	}
	/**
	 * Set numbers value
	 * @param OvhStructMyArrayOfStringType $_numbers the numbers
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setNumbers($_numbers)
	{
		return ($this->numbers = $_numbers);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyLineSwitchOldOfferPossibility
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