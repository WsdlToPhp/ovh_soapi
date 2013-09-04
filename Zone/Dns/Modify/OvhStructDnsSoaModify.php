<?php
/**
 * File for class OvhStructDnsSoaModify
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDnsSoaModify originally named dnsSoaModify
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDnsSoaModify extends OvhWsdlClass
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
	 * The ttl
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $ttl;
	/**
	 * Constructor method for dnsSoaModify
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_domain
	 * @param int $_ttl
	 * @return OvhStructDnsSoaModify
	 */
	public function __construct($_session = NULL,$_domain = NULL,$_ttl = NULL)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'ttl'=>$_ttl));
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
	 * Get ttl value
	 * @return int|null
	 */
	public function getTtl()
	{
		return $this->ttl;
	}
	/**
	 * Set ttl value
	 * @param int $_ttl the ttl
	 * @return int
	 */
	public function setTtl($_ttl)
	{
		return ($this->ttl = $_ttl);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDnsSoaModify
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