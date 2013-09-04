<?php
/**
 * File for class OvhStructTelephonySmsSenderAdd
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySmsSenderAdd originally named telephonySmsSenderAdd
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySmsSenderAdd extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The smsAccount
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $smsAccount;
	/**
	 * The sender
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $sender;
	/**
	 * The reason
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $reason;
	/**
	 * Constructor method for telephonySmsSenderAdd
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_smsAccount
	 * @param string $_sender
	 * @param string $_reason
	 * @return OvhStructTelephonySmsSenderAdd
	 */
	public function __construct($_session = NULL,$_smsAccount = NULL,$_sender = NULL,$_reason = NULL)
	{
		parent::__construct(array('session'=>$_session,'smsAccount'=>$_smsAccount,'sender'=>$_sender,'reason'=>$_reason));
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
	 * Get sender value
	 * @return string|null
	 */
	public function getSender()
	{
		return $this->sender;
	}
	/**
	 * Set sender value
	 * @param string $_sender the sender
	 * @return string
	 */
	public function setSender($_sender)
	{
		return ($this->sender = $_sender);
	}
	/**
	 * Get reason value
	 * @return string|null
	 */
	public function getReason()
	{
		return $this->reason;
	}
	/**
	 * Set reason value
	 * @param string $_reason the reason
	 * @return string
	 */
	public function setReason($_reason)
	{
		return ($this->reason = $_reason);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySmsSenderAdd
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