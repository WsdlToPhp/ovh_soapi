<?php
/**
 * File for class OvhStructTelephonyListSummationCallsFromBillingAccount
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyListSummationCallsFromBillingAccount originally named telephonyListSummationCallsFromBillingAccount
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyListSummationCallsFromBillingAccount extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The billingAccount
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $billingAccount;
	/**
	 * The reversableDelay
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $reversableDelay;
	/**
	 * Constructor method for telephonyListSummationCallsFromBillingAccount
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_billingAccount
	 * @param string $_reversableDelay
	 * @return OvhStructTelephonyListSummationCallsFromBillingAccount
	 */
	public function __construct($_session = NULL,$_billingAccount = NULL,$_reversableDelay = NULL)
	{
		parent::__construct(array('session'=>$_session,'billingAccount'=>$_billingAccount,'reversableDelay'=>$_reversableDelay));
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
	 * Get reversableDelay value
	 * @return string|null
	 */
	public function getReversableDelay()
	{
		return $this->reversableDelay;
	}
	/**
	 * Set reversableDelay value
	 * @param string $_reversableDelay the reversableDelay
	 * @return string
	 */
	public function setReversableDelay($_reversableDelay)
	{
		return ($this->reversableDelay = $_reversableDelay);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyListSummationCallsFromBillingAccount
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