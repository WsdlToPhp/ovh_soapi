<?php
/**
 * File for class OvhStructTelephonyDepositMovementModify
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyDepositMovementModify originally named telephonyDepositMovementModify
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyDepositMovementModify extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The billingAccountSource
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $billingAccountSource;
	/**
	 * The billingAccountDestination
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $billingAccountDestination;
	/**
	 * The amount
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $amount;
	/**
	 * Constructor method for telephonyDepositMovementModify
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_billingAccountSource
	 * @param string $_billingAccountDestination
	 * @param int $_amount
	 * @return OvhStructTelephonyDepositMovementModify
	 */
	public function __construct($_session = NULL,$_billingAccountSource = NULL,$_billingAccountDestination = NULL,$_amount = NULL)
	{
		parent::__construct(array('session'=>$_session,'billingAccountSource'=>$_billingAccountSource,'billingAccountDestination'=>$_billingAccountDestination,'amount'=>$_amount));
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
	 * Get billingAccountSource value
	 * @return string|null
	 */
	public function getBillingAccountSource()
	{
		return $this->billingAccountSource;
	}
	/**
	 * Set billingAccountSource value
	 * @param string $_billingAccountSource the billingAccountSource
	 * @return string
	 */
	public function setBillingAccountSource($_billingAccountSource)
	{
		return ($this->billingAccountSource = $_billingAccountSource);
	}
	/**
	 * Get billingAccountDestination value
	 * @return string|null
	 */
	public function getBillingAccountDestination()
	{
		return $this->billingAccountDestination;
	}
	/**
	 * Set billingAccountDestination value
	 * @param string $_billingAccountDestination the billingAccountDestination
	 * @return string
	 */
	public function setBillingAccountDestination($_billingAccountDestination)
	{
		return ($this->billingAccountDestination = $_billingAccountDestination);
	}
	/**
	 * Get amount value
	 * @return int|null
	 */
	public function getAmount()
	{
		return $this->amount;
	}
	/**
	 * Set amount value
	 * @param int $_amount the amount
	 * @return int
	 */
	public function setAmount($_amount)
	{
		return ($this->amount = $_amount);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyDepositMovementModify
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