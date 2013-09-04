<?php
/**
 * File for class OvhStructRedirectedEmailModify
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRedirectedEmailModify originally named redirectedEmailModify
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRedirectedEmailModify extends OvhWsdlClass
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
	 * The old_target
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $old_target;
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
	 * Constructor method for redirectedEmailModify
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_domain
	 * @param string $_redirected
	 * @param string $_old_target
	 * @param string $_target
	 * @param string $_subdomain
	 * @return OvhStructRedirectedEmailModify
	 */
	public function __construct($_session = NULL,$_domain = NULL,$_redirected = NULL,$_old_target = NULL,$_target = NULL,$_subdomain = NULL)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'redirected'=>$_redirected,'old_target'=>$_old_target,'target'=>$_target,'subdomain'=>$_subdomain));
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
	 * Get old_target value
	 * @return string|null
	 */
	public function getOld_target()
	{
		return $this->old_target;
	}
	/**
	 * Set old_target value
	 * @param string $_old_target the old_target
	 * @return string
	 */
	public function setOld_target($_old_target)
	{
		return ($this->old_target = $_old_target);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRedirectedEmailModify
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