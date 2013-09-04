<?php
/**
 * File for class OvhStructTelephonySmsSetQuotaNotification
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySmsSetQuotaNotification originally named telephonySmsSetQuotaNotification
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySmsSetQuotaNotification extends OvhWsdlClass
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
	 * The support
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $support;
	/**
	 * The alertNumber
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $alertNumber;
	/**
	 * The alertThreshold
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $alertThreshold;
	/**
	 * Constructor method for telephonySmsSetQuotaNotification
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_smsAccount
	 * @param string $_login
	 * @param string $_support
	 * @param string $_alertNumber
	 * @param string $_alertThreshold
	 * @return OvhStructTelephonySmsSetQuotaNotification
	 */
	public function __construct($_session = NULL,$_smsAccount = NULL,$_login = NULL,$_support = NULL,$_alertNumber = NULL,$_alertThreshold = NULL)
	{
		parent::__construct(array('session'=>$_session,'smsAccount'=>$_smsAccount,'login'=>$_login,'support'=>$_support,'alertNumber'=>$_alertNumber,'alertThreshold'=>$_alertThreshold));
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
	 * Get support value
	 * @return string|null
	 */
	public function getSupport()
	{
		return $this->support;
	}
	/**
	 * Set support value
	 * @param string $_support the support
	 * @return string
	 */
	public function setSupport($_support)
	{
		return ($this->support = $_support);
	}
	/**
	 * Get alertNumber value
	 * @return string|null
	 */
	public function getAlertNumber()
	{
		return $this->alertNumber;
	}
	/**
	 * Set alertNumber value
	 * @param string $_alertNumber the alertNumber
	 * @return string
	 */
	public function setAlertNumber($_alertNumber)
	{
		return ($this->alertNumber = $_alertNumber);
	}
	/**
	 * Get alertThreshold value
	 * @return string|null
	 */
	public function getAlertThreshold()
	{
		return $this->alertThreshold;
	}
	/**
	 * Set alertThreshold value
	 * @param string $_alertThreshold the alertThreshold
	 * @return string
	 */
	public function setAlertThreshold($_alertThreshold)
	{
		return ($this->alertThreshold = $_alertThreshold);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySmsSetQuotaNotification
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