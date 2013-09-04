<?php
/**
 * File for class OvhStructTelephonyOfferInfoSipAccountStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyOfferInfoSipAccountStruct originally named telephonyOfferInfoSipAccountStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyOfferInfoSipAccountStruct extends OvhWsdlClass
{
	/**
	 * The username
	 * @var string
	 */
	public $username;
	/**
	 * The extension
	 * @var string
	 */
	public $extension;
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The lastLogin
	 * @var string
	 */
	public $lastLogin;
	/**
	 * The localAdress
	 * @var string
	 */
	public $localAdress;
	/**
	 * The publicAdress
	 * @var string
	 */
	public $publicAdress;
	/**
	 * Constructor method for telephonyOfferInfoSipAccountStruct
	 * @see parent::__construct()
	 * @param string $_username
	 * @param string $_extension
	 * @param string $_domain
	 * @param string $_lastLogin
	 * @param string $_localAdress
	 * @param string $_publicAdress
	 * @return OvhStructTelephonyOfferInfoSipAccountStruct
	 */
	public function __construct($_username = NULL,$_extension = NULL,$_domain = NULL,$_lastLogin = NULL,$_localAdress = NULL,$_publicAdress = NULL)
	{
		parent::__construct(array('username'=>$_username,'extension'=>$_extension,'domain'=>$_domain,'lastLogin'=>$_lastLogin,'localAdress'=>$_localAdress,'publicAdress'=>$_publicAdress));
	}
	/**
	 * Get username value
	 * @return string|null
	 */
	public function getUsername()
	{
		return $this->username;
	}
	/**
	 * Set username value
	 * @param string $_username the username
	 * @return string
	 */
	public function setUsername($_username)
	{
		return ($this->username = $_username);
	}
	/**
	 * Get extension value
	 * @return string|null
	 */
	public function getExtension()
	{
		return $this->extension;
	}
	/**
	 * Set extension value
	 * @param string $_extension the extension
	 * @return string
	 */
	public function setExtension($_extension)
	{
		return ($this->extension = $_extension);
	}
	/**
	 * Get domain value
	 * @return string|null
	 */
	public function getDomain()
	{
		return $this->domain;
	}
	/**
	 * Set domain value
	 * @param string $_domain the domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get lastLogin value
	 * @return string|null
	 */
	public function getLastLogin()
	{
		return $this->lastLogin;
	}
	/**
	 * Set lastLogin value
	 * @param string $_lastLogin the lastLogin
	 * @return string
	 */
	public function setLastLogin($_lastLogin)
	{
		return ($this->lastLogin = $_lastLogin);
	}
	/**
	 * Get localAdress value
	 * @return string|null
	 */
	public function getLocalAdress()
	{
		return $this->localAdress;
	}
	/**
	 * Set localAdress value
	 * @param string $_localAdress the localAdress
	 * @return string
	 */
	public function setLocalAdress($_localAdress)
	{
		return ($this->localAdress = $_localAdress);
	}
	/**
	 * Get publicAdress value
	 * @return string|null
	 */
	public function getPublicAdress()
	{
		return $this->publicAdress;
	}
	/**
	 * Set publicAdress value
	 * @param string $_publicAdress the publicAdress
	 * @return string
	 */
	public function setPublicAdress($_publicAdress)
	{
		return ($this->publicAdress = $_publicAdress);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyOfferInfoSipAccountStruct
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