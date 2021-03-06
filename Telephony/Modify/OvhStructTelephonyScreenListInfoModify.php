<?php
/**
 * File for class OvhStructTelephonyScreenListInfoModify
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyScreenListInfoModify originally named telephonyScreenListInfoModify
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyScreenListInfoModify extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The number
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $number;
	/**
	 * The country
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $country;
	/**
	 * The screenListType
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $screenListType;
	/**
	 * The numbersScreen
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfStringType
	 */
	public $numbersScreen;
	/**
	 * The naturesScreen
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfStringType
	 */
	public $naturesScreen;
	/**
	 * Constructor method for telephonyScreenListInfoModify
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_number
	 * @param string $_country
	 * @param string $_screenListType
	 * @param OvhStructMyArrayOfStringType $_numbersScreen
	 * @param OvhStructMyArrayOfStringType $_naturesScreen
	 * @return OvhStructTelephonyScreenListInfoModify
	 */
	public function __construct($_session = NULL,$_number = NULL,$_country = NULL,$_screenListType = NULL,$_numbersScreen = NULL,$_naturesScreen = NULL)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'screenListType'=>$_screenListType,'numbersScreen'=>($_numbersScreen instanceof OvhStructMyArrayOfStringType)?$_numbersScreen:new OvhStructMyArrayOfStringType($_numbersScreen),'naturesScreen'=>($_naturesScreen instanceof OvhStructMyArrayOfStringType)?$_naturesScreen:new OvhStructMyArrayOfStringType($_naturesScreen)));
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
	 * Get screenListType value
	 * @return string|null
	 */
	public function getScreenListType()
	{
		return $this->screenListType;
	}
	/**
	 * Set screenListType value
	 * @param string $_screenListType the screenListType
	 * @return string
	 */
	public function setScreenListType($_screenListType)
	{
		return ($this->screenListType = $_screenListType);
	}
	/**
	 * Get numbersScreen value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getNumbersScreen()
	{
		return $this->numbersScreen;
	}
	/**
	 * Set numbersScreen value
	 * @param OvhStructMyArrayOfStringType $_numbersScreen the numbersScreen
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setNumbersScreen($_numbersScreen)
	{
		return ($this->numbersScreen = $_numbersScreen);
	}
	/**
	 * Get naturesScreen value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getNaturesScreen()
	{
		return $this->naturesScreen;
	}
	/**
	 * Set naturesScreen value
	 * @param OvhStructMyArrayOfStringType $_naturesScreen the naturesScreen
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setNaturesScreen($_naturesScreen)
	{
		return ($this->naturesScreen = $_naturesScreen);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyScreenListInfoModify
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