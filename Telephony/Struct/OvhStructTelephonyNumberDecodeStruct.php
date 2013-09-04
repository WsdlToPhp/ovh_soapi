<?php
/**
 * File for class OvhStructTelephonyNumberDecodeStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyNumberDecodeStruct originally named telephonyNumberDecodeStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyNumberDecodeStruct extends OvhWsdlClass
{
	/**
	 * The numberDisplay
	 * @var string
	 */
	public $numberDisplay;
	/**
	 * The numberInternal
	 * @var string
	 */
	public $numberInternal;
	/**
	 * The numberInternational
	 * @var string
	 */
	public $numberInternational;
	/**
	 * The numberNational
	 * @var string
	 */
	public $numberNational;
	/**
	 * The countryCode
	 * @var string
	 */
	public $countryCode;
	/**
	 * The language
	 * @var string
	 */
	public $language;
	/**
	 * The cirpackNature
	 * @var string
	 */
	public $cirpackNature;
	/**
	 * The cirpackNumber
	 * @var string
	 */
	public $cirpackNumber;
	/**
	 * Constructor method for telephonyNumberDecodeStruct
	 * @see parent::__construct()
	 * @param string $_numberDisplay
	 * @param string $_numberInternal
	 * @param string $_numberInternational
	 * @param string $_numberNational
	 * @param string $_countryCode
	 * @param string $_language
	 * @param string $_cirpackNature
	 * @param string $_cirpackNumber
	 * @return OvhStructTelephonyNumberDecodeStruct
	 */
	public function __construct($_numberDisplay = NULL,$_numberInternal = NULL,$_numberInternational = NULL,$_numberNational = NULL,$_countryCode = NULL,$_language = NULL,$_cirpackNature = NULL,$_cirpackNumber = NULL)
	{
		parent::__construct(array('numberDisplay'=>$_numberDisplay,'numberInternal'=>$_numberInternal,'numberInternational'=>$_numberInternational,'numberNational'=>$_numberNational,'countryCode'=>$_countryCode,'language'=>$_language,'cirpackNature'=>$_cirpackNature,'cirpackNumber'=>$_cirpackNumber));
	}
	/**
	 * Get numberDisplay value
	 * @return string|null
	 */
	public function getNumberDisplay()
	{
		return $this->numberDisplay;
	}
	/**
	 * Set numberDisplay value
	 * @param string $_numberDisplay the numberDisplay
	 * @return string
	 */
	public function setNumberDisplay($_numberDisplay)
	{
		return ($this->numberDisplay = $_numberDisplay);
	}
	/**
	 * Get numberInternal value
	 * @return string|null
	 */
	public function getNumberInternal()
	{
		return $this->numberInternal;
	}
	/**
	 * Set numberInternal value
	 * @param string $_numberInternal the numberInternal
	 * @return string
	 */
	public function setNumberInternal($_numberInternal)
	{
		return ($this->numberInternal = $_numberInternal);
	}
	/**
	 * Get numberInternational value
	 * @return string|null
	 */
	public function getNumberInternational()
	{
		return $this->numberInternational;
	}
	/**
	 * Set numberInternational value
	 * @param string $_numberInternational the numberInternational
	 * @return string
	 */
	public function setNumberInternational($_numberInternational)
	{
		return ($this->numberInternational = $_numberInternational);
	}
	/**
	 * Get numberNational value
	 * @return string|null
	 */
	public function getNumberNational()
	{
		return $this->numberNational;
	}
	/**
	 * Set numberNational value
	 * @param string $_numberNational the numberNational
	 * @return string
	 */
	public function setNumberNational($_numberNational)
	{
		return ($this->numberNational = $_numberNational);
	}
	/**
	 * Get countryCode value
	 * @return string|null
	 */
	public function getCountryCode()
	{
		return $this->countryCode;
	}
	/**
	 * Set countryCode value
	 * @param string $_countryCode the countryCode
	 * @return string
	 */
	public function setCountryCode($_countryCode)
	{
		return ($this->countryCode = $_countryCode);
	}
	/**
	 * Get language value
	 * @return string|null
	 */
	public function getLanguage()
	{
		return $this->language;
	}
	/**
	 * Set language value
	 * @param string $_language the language
	 * @return string
	 */
	public function setLanguage($_language)
	{
		return ($this->language = $_language);
	}
	/**
	 * Get cirpackNature value
	 * @return string|null
	 */
	public function getCirpackNature()
	{
		return $this->cirpackNature;
	}
	/**
	 * Set cirpackNature value
	 * @param string $_cirpackNature the cirpackNature
	 * @return string
	 */
	public function setCirpackNature($_cirpackNature)
	{
		return ($this->cirpackNature = $_cirpackNature);
	}
	/**
	 * Get cirpackNumber value
	 * @return string|null
	 */
	public function getCirpackNumber()
	{
		return $this->cirpackNumber;
	}
	/**
	 * Set cirpackNumber value
	 * @param string $_cirpackNumber the cirpackNumber
	 * @return string
	 */
	public function setCirpackNumber($_cirpackNumber)
	{
		return ($this->cirpackNumber = $_cirpackNumber);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyNumberDecodeStruct
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