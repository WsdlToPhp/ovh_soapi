<?php
/**
 * File for class OvhStructTelephonyFaxCallList
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyFaxCallList originally named telephonyFaxCallList
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyFaxCallList extends OvhWsdlClass
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
	 * The faxReceived
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $faxReceived;
	/**
	 * Constructor method for telephonyFaxCallList
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_number
	 * @param string $_country
	 * @param int $_listBegin
	 * @param int $_listLimit
	 * @param boolean $_faxReceived
	 * @return OvhStructTelephonyFaxCallList
	 */
	public function __construct($_session = NULL,$_number = NULL,$_country = NULL,$_listBegin = NULL,$_listLimit = NULL,$_faxReceived = NULL)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'listBegin'=>$_listBegin,'listLimit'=>$_listLimit,'faxReceived'=>$_faxReceived));
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
	 * Get faxReceived value
	 * @return boolean|null
	 */
	public function getFaxReceived()
	{
		return $this->faxReceived;
	}
	/**
	 * Set faxReceived value
	 * @param boolean $_faxReceived the faxReceived
	 * @return boolean
	 */
	public function setFaxReceived($_faxReceived)
	{
		return ($this->faxReceived = $_faxReceived);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyFaxCallList
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