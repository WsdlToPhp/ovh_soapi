<?php
/**
 * File for class OvhStructDedicatedAddServiceMonitoringAlertSMS
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedAddServiceMonitoringAlertSMS originally named dedicatedAddServiceMonitoringAlertSMS
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedAddServiceMonitoringAlertSMS extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The ip
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $ip;
	/**
	 * The port
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $port;
	/**
	 * The itemId
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $itemId;
	/**
	 * The smsAccount
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $smsAccount;
	/**
	 * The phoneNumberTo
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $phoneNumberTo;
	/**
	 * Constructor method for dedicatedAddServiceMonitoringAlertSMS
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_ip
	 * @param int $_port
	 * @param int $_itemId
	 * @param string $_smsAccount
	 * @param string $_phoneNumberTo
	 * @return OvhStructDedicatedAddServiceMonitoringAlertSMS
	 */
	public function __construct($_session = NULL,$_ip = NULL,$_port = NULL,$_itemId = NULL,$_smsAccount = NULL,$_phoneNumberTo = NULL)
	{
		parent::__construct(array('session'=>$_session,'ip'=>$_ip,'port'=>$_port,'itemId'=>$_itemId,'smsAccount'=>$_smsAccount,'phoneNumberTo'=>$_phoneNumberTo));
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
	 * Get ip value
	 * @return string|null
	 */
	public function getIp()
	{
		return $this->ip;
	}
	/**
	 * Set ip value
	 * @param string $_ip the ip
	 * @return string
	 */
	public function setIp($_ip)
	{
		return ($this->ip = $_ip);
	}
	/**
	 * Get port value
	 * @return int|null
	 */
	public function getPort()
	{
		return $this->port;
	}
	/**
	 * Set port value
	 * @param int $_port the port
	 * @return int
	 */
	public function setPort($_port)
	{
		return ($this->port = $_port);
	}
	/**
	 * Get itemId value
	 * @return int|null
	 */
	public function getItemId()
	{
		return $this->itemId;
	}
	/**
	 * Set itemId value
	 * @param int $_itemId the itemId
	 * @return int
	 */
	public function setItemId($_itemId)
	{
		return ($this->itemId = $_itemId);
	}
	/**
	 * Get smsAccount value
	 * @return string|null
	 */
	public function getSmsAccount()
	{
		return $this->smsAccount;
	}
	/**
	 * Set smsAccount value
	 * @param string $_smsAccount the smsAccount
	 * @return string
	 */
	public function setSmsAccount($_smsAccount)
	{
		return ($this->smsAccount = $_smsAccount);
	}
	/**
	 * Get phoneNumberTo value
	 * @return string|null
	 */
	public function getPhoneNumberTo()
	{
		return $this->phoneNumberTo;
	}
	/**
	 * Set phoneNumberTo value
	 * @param string $_phoneNumberTo the phoneNumberTo
	 * @return string
	 */
	public function setPhoneNumberTo($_phoneNumberTo)
	{
		return ($this->phoneNumberTo = $_phoneNumberTo);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedAddServiceMonitoringAlertSMS
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