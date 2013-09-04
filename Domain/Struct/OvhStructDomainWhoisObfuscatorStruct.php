<?php
/**
 * File for class OvhStructDomainWhoisObfuscatorStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDomainWhoisObfuscatorStruct originally named domainWhoisObfuscatorStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDomainWhoisObfuscatorStruct extends OvhWsdlClass
{
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The email
	 * @var boolean
	 */
	public $email;
	/**
	 * The address
	 * @var boolean
	 */
	public $address;
	/**
	 * The phone
	 * @var boolean
	 */
	public $phone;
	/**
	 * Constructor method for domainWhoisObfuscatorStruct
	 * @see parent::__construct()
	 * @param string $_domain
	 * @param boolean $_email
	 * @param boolean $_address
	 * @param boolean $_phone
	 * @return OvhStructDomainWhoisObfuscatorStruct
	 */
	public function __construct($_domain = NULL,$_email = NULL,$_address = NULL,$_phone = NULL)
	{
		parent::__construct(array('domain'=>$_domain,'email'=>$_email,'address'=>$_address,'phone'=>$_phone));
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
	 * Get email value
	 * @return boolean|null
	 */
	public function getEmail()
	{
		return $this->email;
	}
	/**
	 * Set email value
	 * @param boolean $_email the email
	 * @return boolean
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
	}
	/**
	 * Get address value
	 * @return boolean|null
	 */
	public function getAddress()
	{
		return $this->address;
	}
	/**
	 * Set address value
	 * @param boolean $_address the address
	 * @return boolean
	 */
	public function setAddress($_address)
	{
		return ($this->address = $_address);
	}
	/**
	 * Get phone value
	 * @return boolean|null
	 */
	public function getPhone()
	{
		return $this->phone;
	}
	/**
	 * Set phone value
	 * @param boolean $_phone the phone
	 * @return boolean
	 */
	public function setPhone($_phone)
	{
		return ($this->phone = $_phone);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDomainWhoisObfuscatorStruct
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