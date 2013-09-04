<?php
/**
 * File for class OvhStructRedirectedEmailAdd
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRedirectedEmailAdd originally named redirectedEmailAdd
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRedirectedEmailAdd extends OvhWsdlClass
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
	 * The redirected
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $redirected;
	/**
	 * The target
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $target;
	/**
	 * The subdomain
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $subdomain;
	/**
	 * The localCopy
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $localCopy;
	/**
	 * Constructor method for redirectedEmailAdd
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_domain
	 * @param string $_redirected
	 * @param string $_target
	 * @param string $_subdomain
	 * @param boolean $_localCopy
	 * @return OvhStructRedirectedEmailAdd
	 */
	public function __construct($_session = NULL,$_domain = NULL,$_redirected = NULL,$_target = NULL,$_subdomain = NULL,$_localCopy = NULL)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'redirected'=>$_redirected,'target'=>$_target,'subdomain'=>$_subdomain,'localCopy'=>$_localCopy));
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
	 * Get redirected value
	 * @return string|null
	 */
	public function getRedirected()
	{
		return $this->redirected;
	}
	/**
	 * Set redirected value
	 * @param string $_redirected the redirected
	 * @return string
	 */
	public function setRedirected($_redirected)
	{
		return ($this->redirected = $_redirected);
	}
	/**
	 * Get target value
	 * @return string|null
	 */
	public function getTarget()
	{
		return $this->target;
	}
	/**
	 * Set target value
	 * @param string $_target the target
	 * @return string
	 */
	public function setTarget($_target)
	{
		return ($this->target = $_target);
	}
	/**
	 * Get subdomain value
	 * @return string|null
	 */
	public function getSubdomain()
	{
		return $this->subdomain;
	}
	/**
	 * Set subdomain value
	 * @param string $_subdomain the subdomain
	 * @return string
	 */
	public function setSubdomain($_subdomain)
	{
		return ($this->subdomain = $_subdomain);
	}
	/**
	 * Get localCopy value
	 * @return boolean|null
	 */
	public function getLocalCopy()
	{
		return $this->localCopy;
	}
	/**
	 * Set localCopy value
	 * @param boolean $_localCopy the localCopy
	 * @return boolean
	 */
	public function setLocalCopy($_localCopy)
	{
		return ($this->localCopy = $_localCopy);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRedirectedEmailAdd
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