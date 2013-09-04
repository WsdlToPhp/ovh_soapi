<?php
/**
 * File for class OvhStructTelephonyBillDetailsCSV
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyBillDetailsCSV originally named telephonyBillDetailsCSV
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyBillDetailsCSV extends OvhWsdlClass
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
	 * The date
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $date;
	/**
	 * The received
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $received;
	/**
	 * Constructor method for telephonyBillDetailsCSV
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_billingAccount
	 * @param string $_date
	 * @param boolean $_received
	 * @return OvhStructTelephonyBillDetailsCSV
	 */
	public function __construct($_session = NULL,$_billingAccount = NULL,$_date = NULL,$_received = NULL)
	{
		parent::__construct(array('session'=>$_session,'billingAccount'=>$_billingAccount,'date'=>$_date,'received'=>$_received));
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
	 * Get received value
	 * @return boolean|null
	 */
	public function getReceived()
	{
		return $this->received;
	}
	/**
	 * Set received value
	 * @param boolean $_received the received
	 * @return boolean
	 */
	public function setReceived($_received)
	{
		return ($this->received = $_received);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyBillDetailsCSV
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