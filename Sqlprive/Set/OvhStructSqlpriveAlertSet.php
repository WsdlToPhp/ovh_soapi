<?php
/**
 * File for class OvhStructSqlpriveAlertSet
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructSqlpriveAlertSet originally named sqlpriveAlertSet
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructSqlpriveAlertSet extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The server
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $server;
	/**
	 * The email
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $email;
	/**
	 * The smsAccount
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $smsAccount;
	/**
	 * The smsNumber
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $smsNumber;
	/**
	 * The alert
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfStringType
	 */
	public $alert;
	/**
	 * Constructor method for sqlpriveAlertSet
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_server
	 * @param string $_email
	 * @param string $_smsAccount
	 * @param string $_smsNumber
	 * @param OvhStructMyArrayOfStringType $_alert
	 * @return OvhStructSqlpriveAlertSet
	 */
	public function __construct($_session = NULL,$_server = NULL,$_email = NULL,$_smsAccount = NULL,$_smsNumber = NULL,$_alert = NULL)
	{
		parent::__construct(array('session'=>$_session,'server'=>$_server,'email'=>$_email,'smsAccount'=>$_smsAccount,'smsNumber'=>$_smsNumber,'alert'=>($_alert instanceof OvhStructMyArrayOfStringType)?$_alert:new OvhStructMyArrayOfStringType($_alert)));
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
	 * Get server value
	 * @return string|null
	 */
	public function getServer()
	{
		return $this->server;
	}
	/**
	 * Set server value
	 * @param string $_server the server
	 * @return string
	 */
	public function setServer($_server)
	{
		return ($this->server = $_server);
	}
	/**
	 * Get email value
	 * @return string|null
	 */
	public function getEmail()
	{
		return $this->email;
	}
	/**
	 * Set email value
	 * @param string $_email the email
	 * @return string
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
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
	 * Get smsNumber value
	 * @return string|null
	 */
	public function getSmsNumber()
	{
		return $this->smsNumber;
	}
	/**
	 * Set smsNumber value
	 * @param string $_smsNumber the smsNumber
	 * @return string
	 */
	public function setSmsNumber($_smsNumber)
	{
		return ($this->smsNumber = $_smsNumber);
	}
	/**
	 * Get alert value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getAlert()
	{
		return $this->alert;
	}
	/**
	 * Set alert value
	 * @param OvhStructMyArrayOfStringType $_alert the alert
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setAlert($_alert)
	{
		return ($this->alert = $_alert);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructSqlpriveAlertSet
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