<?php
/**
 * File for class OvhStructTelephonyPlugAndPhoneReinitConfigurationReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyPlugAndPhoneReinitConfigurationReturn originally named telephonyPlugAndPhoneReinitConfigurationReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyPlugAndPhoneReinitConfigurationReturn extends OvhWsdlClass
{
	/**
	 * The autoConfigurationCode
	 * @var string
	 */
	public $autoConfigurationCode;
	/**
	 * The contactsBookKey
	 * @var string
	 */
	public $contactsBookKey;
	/**
	 * The serverUrl
	 * @var string
	 */
	public $serverUrl;
	/**
	 * Constructor method for telephonyPlugAndPhoneReinitConfigurationReturn
	 * @see parent::__construct()
	 * @param string $_autoConfigurationCode
	 * @param string $_contactsBookKey
	 * @param string $_serverUrl
	 * @return OvhStructTelephonyPlugAndPhoneReinitConfigurationReturn
	 */
	public function __construct($_autoConfigurationCode = NULL,$_contactsBookKey = NULL,$_serverUrl = NULL)
	{
		parent::__construct(array('autoConfigurationCode'=>$_autoConfigurationCode,'contactsBookKey'=>$_contactsBookKey,'serverUrl'=>$_serverUrl));
	}
	/**
	 * Get autoConfigurationCode value
	 * @return string|null
	 */
	public function getAutoConfigurationCode()
	{
		return $this->autoConfigurationCode;
	}
	/**
	 * Set autoConfigurationCode value
	 * @param string $_autoConfigurationCode the autoConfigurationCode
	 * @return string
	 */
	public function setAutoConfigurationCode($_autoConfigurationCode)
	{
		return ($this->autoConfigurationCode = $_autoConfigurationCode);
	}
	/**
	 * Get contactsBookKey value
	 * @return string|null
	 */
	public function getContactsBookKey()
	{
		return $this->contactsBookKey;
	}
	/**
	 * Set contactsBookKey value
	 * @param string $_contactsBookKey the contactsBookKey
	 * @return string
	 */
	public function setContactsBookKey($_contactsBookKey)
	{
		return ($this->contactsBookKey = $_contactsBookKey);
	}
	/**
	 * Get serverUrl value
	 * @return string|null
	 */
	public function getServerUrl()
	{
		return $this->serverUrl;
	}
	/**
	 * Set serverUrl value
	 * @param string $_serverUrl the serverUrl
	 * @return string
	 */
	public function setServerUrl($_serverUrl)
	{
		return ($this->serverUrl = $_serverUrl);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyPlugAndPhoneReinitConfigurationReturn
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