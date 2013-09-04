<?php
/**
 * File for class OvhStructSqlpriveAlertInfotReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructSqlpriveAlertInfotReturn originally named sqlpriveAlertInfotReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructSqlpriveAlertInfotReturn extends OvhWsdlClass
{
	/**
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * The alert
	 * @var OvhStructMyArrayOfStringType
	 */
	public $alert;
	/**
	 * The smsNumber
	 * @var string
	 */
	public $smsNumber;
	/**
	 * The smsAccount
	 * @var string
	 */
	public $smsAccount;
	/**
	 * Constructor method for sqlpriveAlertInfotReturn
	 * @see parent::__construct()
	 * @param string $_email
	 * @param OvhStructMyArrayOfStringType $_alert
	 * @param string $_smsNumber
	 * @param string $_smsAccount
	 * @return OvhStructSqlpriveAlertInfotReturn
	 */
	public function __construct($_email = NULL,$_alert = NULL,$_smsNumber = NULL,$_smsAccount = NULL)
	{
		parent::__construct(array('email'=>$_email,'alert'=>($_alert instanceof OvhStructMyArrayOfStringType)?$_alert:new OvhStructMyArrayOfStringType($_alert),'smsNumber'=>$_smsNumber,'smsAccount'=>$_smsAccount));
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructSqlpriveAlertInfotReturn
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