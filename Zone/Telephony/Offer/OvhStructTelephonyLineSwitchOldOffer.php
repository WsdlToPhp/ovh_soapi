<?php
/**
 * File for class OvhStructTelephonyLineSwitchOldOffer
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyLineSwitchOldOffer originally named telephonyLineSwitchOldOffer
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyLineSwitchOldOffer extends OvhWsdlClass
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
	 * The offers
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfStringType
	 */
	public $offers;
	/**
	 * The billingAccount
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $billingAccount;
	/**
	 * Constructor method for telephonyLineSwitchOldOffer
	 * @see parent::__construct()
	 * @param string $_session
	 * @param OvhStructMyArrayOfStringType $_numbers
	 * @param OvhStructMyArrayOfStringType $_offers
	 * @param string $_billingAccount
	 * @return OvhStructTelephonyLineSwitchOldOffer
	 */
	public function __construct($_session = NULL,$_numbers = NULL,$_offers = NULL,$_billingAccount = NULL)
	{
		parent::__construct(array('session'=>$_session,'numbers'=>($_numbers instanceof OvhStructMyArrayOfStringType)?$_numbers:new OvhStructMyArrayOfStringType($_numbers),'offers'=>($_offers instanceof OvhStructMyArrayOfStringType)?$_offers:new OvhStructMyArrayOfStringType($_offers),'billingAccount'=>$_billingAccount));
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
	 * Get offers value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getOffers()
	{
		return $this->offers;
	}
	/**
	 * Set offers value
	 * @param OvhStructMyArrayOfStringType $_offers the offers
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setOffers($_offers)
	{
		return ($this->offers = $_offers);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyLineSwitchOldOffer
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