<?php
/**
 * File for class OvhStructTelephonyHuntingModificationSimultaneousCalls
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyHuntingModificationSimultaneousCalls originally named telephonyHuntingModificationSimultaneousCalls
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyHuntingModificationSimultaneousCalls extends OvhWsdlClass
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
	 * The billingAccount
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $billingAccount;
	/**
	 * The numberOfCalls
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $numberOfCalls;
	/**
	 * Constructor method for telephonyHuntingModificationSimultaneousCalls
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_number
	 * @param string $_country
	 * @param string $_billingAccount
	 * @param int $_numberOfCalls
	 * @return OvhStructTelephonyHuntingModificationSimultaneousCalls
	 */
	public function __construct($_session = NULL,$_number = NULL,$_country = NULL,$_billingAccount = NULL,$_numberOfCalls = NULL)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'billingAccount'=>$_billingAccount,'numberOfCalls'=>$_numberOfCalls));
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
	 * Get billingAccount value
	 * @return string|null
	 */
	public function getBillingAccount()
	{
		return $this->billingAccount;
	}
	/**
	 * Set billingAccount value
	 * @param string $_billingAccount the billingAccount
	 * @return string
	 */
	public function setBillingAccount($_billingAccount)
	{
		return ($this->billingAccount = $_billingAccount);
	}
	/**
	 * Get numberOfCalls value
	 * @return int|null
	 */
	public function getNumberOfCalls()
	{
		return $this->numberOfCalls;
	}
	/**
	 * Set numberOfCalls value
	 * @param int $_numberOfCalls the numberOfCalls
	 * @return int
	 */
	public function setNumberOfCalls($_numberOfCalls)
	{
		return ($this->numberOfCalls = $_numberOfCalls);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyHuntingModificationSimultaneousCalls
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