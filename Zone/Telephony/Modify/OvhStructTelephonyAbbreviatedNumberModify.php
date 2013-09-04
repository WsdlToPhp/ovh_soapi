<?php
/**
 * File for class OvhStructTelephonyAbbreviatedNumberModify
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyAbbreviatedNumberModify originally named telephonyAbbreviatedNumberModify
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyAbbreviatedNumberModify extends OvhWsdlClass
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
	 * The abbreviatedNumber
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $abbreviatedNumber;
	/**
	 * The relatedNumber
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $relatedNumber;
	/**
	 * The name
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $name;
	/**
	 * The surname
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $surname;
	/**
	 * Constructor method for telephonyAbbreviatedNumberModify
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_number
	 * @param string $_country
	 * @param string $_abbreviatedNumber
	 * @param string $_relatedNumber
	 * @param string $_name
	 * @param string $_surname
	 * @return OvhStructTelephonyAbbreviatedNumberModify
	 */
	public function __construct($_session = NULL,$_number = NULL,$_country = NULL,$_abbreviatedNumber = NULL,$_relatedNumber = NULL,$_name = NULL,$_surname = NULL)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'abbreviatedNumber'=>$_abbreviatedNumber,'relatedNumber'=>$_relatedNumber,'name'=>$_name,'surname'=>$_surname));
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
	 * Get abbreviatedNumber value
	 * @return string|null
	 */
	public function getAbbreviatedNumber()
	{
		return $this->abbreviatedNumber;
	}
	/**
	 * Set abbreviatedNumber value
	 * @param string $_abbreviatedNumber the abbreviatedNumber
	 * @return string
	 */
	public function setAbbreviatedNumber($_abbreviatedNumber)
	{
		return ($this->abbreviatedNumber = $_abbreviatedNumber);
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
	 * Get name value
	 * @return string|null
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set name value
	 * @param string $_name the name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get surname value
	 * @return string|null
	 */
	public function getSurname()
	{
		return $this->surname;
	}
	/**
	 * Set surname value
	 * @param string $_surname the surname
	 * @return string
	 */
	public function setSurname($_surname)
	{
		return ($this->surname = $_surname);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyAbbreviatedNumberModify
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