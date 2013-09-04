<?php
/**
 * File for class OvhStructTelephonyFMHuntingModificationMembers
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyFMHuntingModificationMembers originally named telephonyFMHuntingModificationMembers
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyFMHuntingModificationMembers extends OvhWsdlClass
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
	 * The list_destinations
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfStringType
	 */
	public $list_destinations;
	/**
	 * The list_noReplyTimer
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfIntType
	 */
	public $list_noReplyTimer;
	/**
	 * The list_logged
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfBooleanType
	 */
	public $list_logged;
	/**
	 * Constructor method for telephonyFMHuntingModificationMembers
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_number
	 * @param string $_country
	 * @param string $_billingAccount
	 * @param OvhStructMyArrayOfStringType $_list_destinations
	 * @param OvhStructMyArrayOfIntType $_list_noReplyTimer
	 * @param OvhStructMyArrayOfBooleanType $_list_logged
	 * @return OvhStructTelephonyFMHuntingModificationMembers
	 */
	public function __construct($_session = NULL,$_number = NULL,$_country = NULL,$_billingAccount = NULL,$_list_destinations = NULL,$_list_noReplyTimer = NULL,$_list_logged = NULL)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'billingAccount'=>$_billingAccount,'list_destinations'=>($_list_destinations instanceof OvhStructMyArrayOfStringType)?$_list_destinations:new OvhStructMyArrayOfStringType($_list_destinations),'list_noReplyTimer'=>($_list_noReplyTimer instanceof OvhStructMyArrayOfIntType)?$_list_noReplyTimer:new OvhStructMyArrayOfIntType($_list_noReplyTimer),'list_logged'=>($_list_logged instanceof OvhStructMyArrayOfBooleanType)?$_list_logged:new OvhStructMyArrayOfBooleanType($_list_logged)));
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
	 * Get list_destinations value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getList_destinations()
	{
		return $this->list_destinations;
	}
	/**
	 * Set list_destinations value
	 * @param OvhStructMyArrayOfStringType $_list_destinations the list_destinations
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setList_destinations($_list_destinations)
	{
		return ($this->list_destinations = $_list_destinations);
	}
	/**
	 * Get list_noReplyTimer value
	 * @return OvhStructMyArrayOfIntType|null
	 */
	public function getList_noReplyTimer()
	{
		return $this->list_noReplyTimer;
	}
	/**
	 * Set list_noReplyTimer value
	 * @param OvhStructMyArrayOfIntType $_list_noReplyTimer the list_noReplyTimer
	 * @return OvhStructMyArrayOfIntType
	 */
	public function setList_noReplyTimer($_list_noReplyTimer)
	{
		return ($this->list_noReplyTimer = $_list_noReplyTimer);
	}
	/**
	 * Get list_logged value
	 * @return OvhStructMyArrayOfBooleanType|null
	 */
	public function getList_logged()
	{
		return $this->list_logged;
	}
	/**
	 * Set list_logged value
	 * @param OvhStructMyArrayOfBooleanType $_list_logged the list_logged
	 * @return OvhStructMyArrayOfBooleanType
	 */
	public function setList_logged($_list_logged)
	{
		return ($this->list_logged = $_list_logged);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyFMHuntingModificationMembers
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