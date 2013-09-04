<?php
/**
 * File for class OvhStructTelephonyDelClosureEvents
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyDelClosureEvents originally named telephonyDelClosureEvents
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyDelClosureEvents extends OvhWsdlClass
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
	 * The deleteAll
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $deleteAll;
	/**
	 * The uids
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfStringType
	 */
	public $uids;
	/**
	 * Constructor method for telephonyDelClosureEvents
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_number
	 * @param string $_country
	 * @param int $_deleteAll
	 * @param OvhStructMyArrayOfStringType $_uids
	 * @return OvhStructTelephonyDelClosureEvents
	 */
	public function __construct($_session = NULL,$_number = NULL,$_country = NULL,$_deleteAll = NULL,$_uids = NULL)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'deleteAll'=>$_deleteAll,'uids'=>($_uids instanceof OvhStructMyArrayOfStringType)?$_uids:new OvhStructMyArrayOfStringType($_uids)));
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
	 * Get deleteAll value
	 * @return int|null
	 */
	public function getDeleteAll()
	{
		return $this->deleteAll;
	}
	/**
	 * Set deleteAll value
	 * @param int $_deleteAll the deleteAll
	 * @return int
	 */
	public function setDeleteAll($_deleteAll)
	{
		return ($this->deleteAll = $_deleteAll);
	}
	/**
	 * Get uids value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getUids()
	{
		return $this->uids;
	}
	/**
	 * Set uids value
	 * @param OvhStructMyArrayOfStringType $_uids the uids
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setUids($_uids)
	{
		return ($this->uids = $_uids);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyDelClosureEvents
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