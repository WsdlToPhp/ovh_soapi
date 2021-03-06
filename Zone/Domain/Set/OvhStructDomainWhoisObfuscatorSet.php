<?php
/**
 * File for class OvhStructDomainWhoisObfuscatorSet
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDomainWhoisObfuscatorSet originally named domainWhoisObfuscatorSet
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDomainWhoisObfuscatorSet extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The domain
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $domain;
	/**
	 * The field
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $field;
	/**
	 * Constructor method for domainWhoisObfuscatorSet
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_domain
	 * @param string $_field
	 * @return OvhStructDomainWhoisObfuscatorSet
	 */
	public function __construct($_session = NULL,$_domain = NULL,$_field = NULL)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'field'=>$_field));
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
	 * Get field value
	 * @return string|null
	 */
	public function getField()
	{
		return $this->field;
	}
	/**
	 * Set field value
	 * @param string $_field the field
	 * @return string
	 */
	public function setField($_field)
	{
		return ($this->field = $_field);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDomainWhoisObfuscatorSet
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