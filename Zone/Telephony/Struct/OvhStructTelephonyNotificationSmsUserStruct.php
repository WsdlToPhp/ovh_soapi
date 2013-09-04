<?php
/**
 * File for class OvhStructTelephonyNotificationSmsUserStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyNotificationSmsUserStruct originally named telephonyNotificationSmsUserStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyNotificationSmsUserStruct extends OvhWsdlClass
{
	/**
	 * The support
	 * @var string
	 */
	public $support;
	/**
	 * The alertThreshold
	 * @var int
	 */
	public $alertThreshold;
	/**
	 * The alertNumber
	 * @var string
	 */
	public $alertNumber;
	/**
	 * The alertEmail
	 * @var string
	 */
	public $alertEmail;
	/**
	 * Constructor method for telephonyNotificationSmsUserStruct
	 * @see parent::__construct()
	 * @param string $_support
	 * @param int $_alertThreshold
	 * @param string $_alertNumber
	 * @param string $_alertEmail
	 * @return OvhStructTelephonyNotificationSmsUserStruct
	 */
	public function __construct($_support = NULL,$_alertThreshold = NULL,$_alertNumber = NULL,$_alertEmail = NULL)
	{
		parent::__construct(array('support'=>$_support,'alertThreshold'=>$_alertThreshold,'alertNumber'=>$_alertNumber,'alertEmail'=>$_alertEmail));
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
	 * Get alertThreshold value
	 * @return int|null
	 */
	public function getAlertThreshold()
	{
		return $this->alertThreshold;
	}
	/**
	 * Set alertThreshold value
	 * @param int $_alertThreshold the alertThreshold
	 * @return int
	 */
	public function setAlertThreshold($_alertThreshold)
	{
		return ($this->alertThreshold = $_alertThreshold);
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
	 * Get alertEmail value
	 * @return string|null
	 */
	public function getAlertEmail()
	{
		return $this->alertEmail;
	}
	/**
	 * Set alertEmail value
	 * @param string $_alertEmail the alertEmail
	 * @return string
	 */
	public function setAlertEmail($_alertEmail)
	{
		return ($this->alertEmail = $_alertEmail);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyNotificationSmsUserStruct
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