<?php
/**
 * File for class OvhStructTelephonySmsSetUserQuota
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySmsSetUserQuota originally named telephonySmsSetUserQuota
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySmsSetUserQuota extends OvhWsdlClass
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
	 * The login
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $login;
	/**
	 * The status
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $status;
	/**
	 * The quotaDiff
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $quotaDiff;
	/**
	 * Constructor method for telephonySmsSetUserQuota
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_smsAccount
	 * @param string $_login
	 * @param string $_status
	 * @param string $_quotaDiff
	 * @return OvhStructTelephonySmsSetUserQuota
	 */
	public function __construct($_session = NULL,$_smsAccount = NULL,$_login = NULL,$_status = NULL,$_quotaDiff = NULL)
	{
		parent::__construct(array('session'=>$_session,'smsAccount'=>$_smsAccount,'login'=>$_login,'status'=>$_status,'quotaDiff'=>$_quotaDiff));
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
	 * Get login value
	 * @return string|null
	 */
	public function getLogin()
	{
		return $this->login;
	}
	/**
	 * Set login value
	 * @param string $_login the login
	 * @return string
	 */
	public function setLogin($_login)
	{
		return ($this->login = $_login);
	}
	/**
	 * Get status value
	 * @return string|null
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set status value
	 * @param string $_status the status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get quotaDiff value
	 * @return string|null
	 */
	public function getQuotaDiff()
	{
		return $this->quotaDiff;
	}
	/**
	 * Set quotaDiff value
	 * @param string $_quotaDiff the quotaDiff
	 * @return string
	 */
	public function setQuotaDiff($_quotaDiff)
	{
		return ($this->quotaDiff = $_quotaDiff);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySmsSetUserQuota
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