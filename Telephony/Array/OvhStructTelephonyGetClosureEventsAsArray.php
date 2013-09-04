<?php
/**
 * File for class OvhStructTelephonyGetClosureEventsAsArray
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyGetClosureEventsAsArray originally named telephonyGetClosureEventsAsArray
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyGetClosureEventsAsArray extends OvhWsdlClass
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
	 * The dateStart
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $dateStart;
	/**
	 * The dateEnd
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $dateEnd;
	/**
	 * The categories
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfStringType
	 */
	public $categories;
	/**
	 * Constructor method for telephonyGetClosureEventsAsArray
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_number
	 * @param string $_country
	 * @param string $_dateStart
	 * @param string $_dateEnd
	 * @param OvhStructMyArrayOfStringType $_categories
	 * @return OvhStructTelephonyGetClosureEventsAsArray
	 */
	public function __construct($_session = NULL,$_number = NULL,$_country = NULL,$_dateStart = NULL,$_dateEnd = NULL,$_categories = NULL)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'dateStart'=>$_dateStart,'dateEnd'=>$_dateEnd,'categories'=>($_categories instanceof OvhStructMyArrayOfStringType)?$_categories:new OvhStructMyArrayOfStringType($_categories)));
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
	 * Get dateStart value
	 * @return string|null
	 */
	public function getDateStart()
	{
		return $this->dateStart;
	}
	/**
	 * Set dateStart value
	 * @param string $_dateStart the dateStart
	 * @return string
	 */
	public function setDateStart($_dateStart)
	{
		return ($this->dateStart = $_dateStart);
	}
	/**
	 * Get dateEnd value
	 * @return string|null
	 */
	public function getDateEnd()
	{
		return $this->dateEnd;
	}
	/**
	 * Set dateEnd value
	 * @param string $_dateEnd the dateEnd
	 * @return string
	 */
	public function setDateEnd($_dateEnd)
	{
		return ($this->dateEnd = $_dateEnd);
	}
	/**
	 * Get categories value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getCategories()
	{
		return $this->categories;
	}
	/**
	 * Set categories value
	 * @param OvhStructMyArrayOfStringType $_categories the categories
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setCategories($_categories)
	{
		return ($this->categories = $_categories);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyGetClosureEventsAsArray
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