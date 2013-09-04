<?php
/**
 * File for class OvhStructTelephonyFunctionKeyModify
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyFunctionKeyModify originally named telephonyFunctionKeyModify
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyFunctionKeyModify extends OvhWsdlClass
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
	 * The keyNum
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $keyNum;
	/**
	 * The function
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $function;
	/**
	 * The relatedNumber
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $relatedNumber;
	/**
	 * Constructor method for telephonyFunctionKeyModify
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_number
	 * @param string $_country
	 * @param int $_keyNum
	 * @param string $_function
	 * @param string $_relatedNumber
	 * @return OvhStructTelephonyFunctionKeyModify
	 */
	public function __construct($_session = NULL,$_number = NULL,$_country = NULL,$_keyNum = NULL,$_function = NULL,$_relatedNumber = NULL)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'keyNum'=>$_keyNum,'function'=>$_function,'relatedNumber'=>$_relatedNumber));
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
	 * Get keyNum value
	 * @return int|null
	 */
	public function getKeyNum()
	{
		return $this->keyNum;
	}
	/**
	 * Set keyNum value
	 * @param int $_keyNum the keyNum
	 * @return int
	 */
	public function setKeyNum($_keyNum)
	{
		return ($this->keyNum = $_keyNum);
	}
	/**
	 * Get function value
	 * @return string|null
	 */
	public function getFunction()
	{
		return $this->function;
	}
	/**
	 * Set function value
	 * @param string $_function the function
	 * @return string
	 */
	public function setFunction($_function)
	{
		return ($this->function = $_function);
	}
	/**
	 * Get relatedNumber value
	 * @return string|null
	 */
	public function getRelatedNumber()
	{
		return $this->relatedNumber;
	}
	/**
	 * Set relatedNumber value
	 * @param string $_relatedNumber the relatedNumber
	 * @return string
	 */
	public function setRelatedNumber($_relatedNumber)
	{
		return ($this->relatedNumber = $_relatedNumber);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyFunctionKeyModify
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