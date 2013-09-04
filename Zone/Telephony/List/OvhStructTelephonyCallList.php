<?php
/**
 * File for class OvhStructTelephonyCallList
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyCallList originally named telephonyCallList
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyCallList extends OvhWsdlClass
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
	 * The listBegin
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $listBegin;
	/**
	 * The listLimit
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $listLimit;
	/**
	 * The listType
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $listType;
	/**
	 * The date
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $date;
	/**
	 * The callReceived
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $callReceived;
	/**
	 * The filterSearch
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $filterSearch;
	/**
	 * The filterValue
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $filterValue;
	/**
	 * The planType
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $planType;
	/**
	 * Constructor method for telephonyCallList
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_number
	 * @param string $_country
	 * @param int $_listBegin
	 * @param int $_listLimit
	 * @param string $_listType
	 * @param string $_date
	 * @param boolean $_callReceived
	 * @param string $_filterSearch
	 * @param string $_filterValue
	 * @param string $_planType
	 * @return OvhStructTelephonyCallList
	 */
	public function __construct($_session = NULL,$_number = NULL,$_country = NULL,$_listBegin = NULL,$_listLimit = NULL,$_listType = NULL,$_date = NULL,$_callReceived = NULL,$_filterSearch = NULL,$_filterValue = NULL,$_planType = NULL)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'listBegin'=>$_listBegin,'listLimit'=>$_listLimit,'listType'=>$_listType,'date'=>$_date,'callReceived'=>$_callReceived,'filterSearch'=>$_filterSearch,'filterValue'=>$_filterValue,'planType'=>$_planType));
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
	 * Get listBegin value
	 * @return int|null
	 */
	public function getListBegin()
	{
		return $this->listBegin;
	}
	/**
	 * Set listBegin value
	 * @param int $_listBegin the listBegin
	 * @return int
	 */
	public function setListBegin($_listBegin)
	{
		return ($this->listBegin = $_listBegin);
	}
	/**
	 * Get listLimit value
	 * @return int|null
	 */
	public function getListLimit()
	{
		return $this->listLimit;
	}
	/**
	 * Set listLimit value
	 * @param int $_listLimit the listLimit
	 * @return int
	 */
	public function setListLimit($_listLimit)
	{
		return ($this->listLimit = $_listLimit);
	}
	/**
	 * Get listType value
	 * @return string|null
	 */
	public function getListType()
	{
		return $this->listType;
	}
	/**
	 * Set listType value
	 * @param string $_listType the listType
	 * @return string
	 */
	public function setListType($_listType)
	{
		return ($this->listType = $_listType);
	}
	/**
	 * Get date value
	 * @return string|null
	 */
	public function getDate()
	{
		return $this->date;
	}
	/**
	 * Set date value
	 * @param string $_date the date
	 * @return string
	 */
	public function setDate($_date)
	{
		return ($this->date = $_date);
	}
	/**
	 * Get callReceived value
	 * @return boolean|null
	 */
	public function getCallReceived()
	{
		return $this->callReceived;
	}
	/**
	 * Set callReceived value
	 * @param boolean $_callReceived the callReceived
	 * @return boolean
	 */
	public function setCallReceived($_callReceived)
	{
		return ($this->callReceived = $_callReceived);
	}
	/**
	 * Get filterSearch value
	 * @return string|null
	 */
	public function getFilterSearch()
	{
		return $this->filterSearch;
	}
	/**
	 * Set filterSearch value
	 * @param string $_filterSearch the filterSearch
	 * @return string
	 */
	public function setFilterSearch($_filterSearch)
	{
		return ($this->filterSearch = $_filterSearch);
	}
	/**
	 * Get filterValue value
	 * @return string|null
	 */
	public function getFilterValue()
	{
		return $this->filterValue;
	}
	/**
	 * Set filterValue value
	 * @param string $_filterValue the filterValue
	 * @return string
	 */
	public function setFilterValue($_filterValue)
	{
		return ($this->filterValue = $_filterValue);
	}
	/**
	 * Get planType value
	 * @return string|null
	 */
	public function getPlanType()
	{
		return $this->planType;
	}
	/**
	 * Set planType value
	 * @param string $_planType the planType
	 * @return string
	 */
	public function setPlanType($_planType)
	{
		return ($this->planType = $_planType);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyCallList
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