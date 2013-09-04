<?php
/**
 * File for class OvhStructTelephonySmsUserStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySmsUserStruct originally named telephonySmsUserStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySmsUserStruct extends OvhWsdlClass
{
	/**
	 * The login
	 * @var string
	 */
	public $login;
	/**
	 * The quota
	 * @var string
	 */
	public $quota;
	/**
	 * The quotaStatus
	 * @var string
	 */
	public $quotaStatus;
	/**
	 * The alertThreshold
	 * @var string
	 */
	public $alertThreshold;
	/**
	 * The support
	 * @var string
	 */
	public $support;
	/**
	 * The alertNumber
	 * @var string
	 */
	public $alertNumber;
	/**
	 * Constructor method for telephonySmsUserStruct
	 * @see parent::__construct()
	 * @param string $_login
	 * @param string $_quota
	 * @param string $_quotaStatus
	 * @param string $_alertThreshold
	 * @param string $_support
	 * @param string $_alertNumber
	 * @return OvhStructTelephonySmsUserStruct
	 */
	public function __construct($_login = NULL,$_quota = NULL,$_quotaStatus = NULL,$_alertThreshold = NULL,$_support = NULL,$_alertNumber = NULL)
	{
		parent::__construct(array('login'=>$_login,'quota'=>$_quota,'quotaStatus'=>$_quotaStatus,'alertThreshold'=>$_alertThreshold,'support'=>$_support,'alertNumber'=>$_alertNumber));
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
	 * Get quota value
	 * @return string|null
	 */
	public function getQuota()
	{
		return $this->quota;
	}
	/**
	 * Set quota value
	 * @param string $_quota the quota
	 * @return string
	 */
	public function setQuota($_quota)
	{
		return ($this->quota = $_quota);
	}
	/**
	 * Get quotaStatus value
	 * @return string|null
	 */
	public function getQuotaStatus()
	{
		return $this->quotaStatus;
	}
	/**
	 * Set quotaStatus value
	 * @param string $_quotaStatus the quotaStatus
	 * @return string
	 */
	public function setQuotaStatus($_quotaStatus)
	{
		return ($this->quotaStatus = $_quotaStatus);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySmsUserStruct
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