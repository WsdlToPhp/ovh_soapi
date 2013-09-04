<?php
/**
 * File for class OvhStructTelephonyLineLogsNotificationOptionsReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyLineLogsNotificationOptionsReturn originally named telephonyLineLogsNotificationOptionsReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyLineLogsNotificationOptionsReturn extends OvhWsdlClass
{
	/**
	 * The frequency
	 * @var string
	 */
	public $frequency;
	/**
	 * The sendIfNull
	 * @var boolean
	 */
	public $sendIfNull;
	/**
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * Constructor method for telephonyLineLogsNotificationOptionsReturn
	 * @see parent::__construct()
	 * @param string $_frequency
	 * @param boolean $_sendIfNull
	 * @param string $_email
	 * @return OvhStructTelephonyLineLogsNotificationOptionsReturn
	 */
	public function __construct($_frequency = NULL,$_sendIfNull = NULL,$_email = NULL)
	{
		parent::__construct(array('frequency'=>$_frequency,'sendIfNull'=>$_sendIfNull,'email'=>$_email));
	}
	/**
	 * Get frequency value
	 * @return string|null
	 */
	public function getFrequency()
	{
		return $this->frequency;
	}
	/**
	 * Set frequency value
	 * @param string $_frequency the frequency
	 * @return string
	 */
	public function setFrequency($_frequency)
	{
		return ($this->frequency = $_frequency);
	}
	/**
	 * Get sendIfNull value
	 * @return boolean|null
	 */
	public function getSendIfNull()
	{
		return $this->sendIfNull;
	}
	/**
	 * Set sendIfNull value
	 * @param boolean $_sendIfNull the sendIfNull
	 * @return boolean
	 */
	public function setSendIfNull($_sendIfNull)
	{
		return ($this->sendIfNull = $_sendIfNull);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyLineLogsNotificationOptionsReturn
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