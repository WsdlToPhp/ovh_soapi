<?php
/**
 * File for class OvhStructOrtDomainAdd
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructOrtDomainAdd originally named ortDomainAdd
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructOrtDomainAdd extends OvhWsdlClass
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
	 * The subdomain
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $subdomain;
	/**
	 * The target
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $target;
	/**
	 * The type
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $type;
	/**
	 * The overwrite
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $overwrite;
	/**
	 * Constructor method for ortDomainAdd
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_domain
	 * @param string $_subdomain
	 * @param string $_target
	 * @param string $_type
	 * @param int $_overwrite
	 * @return OvhStructOrtDomainAdd
	 */
	public function __construct($_session = NULL,$_domain = NULL,$_subdomain = NULL,$_target = NULL,$_type = NULL,$_overwrite = NULL)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'subdomain'=>$_subdomain,'target'=>$_target,'type'=>$_type,'overwrite'=>$_overwrite));
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
	 * Get type value
	 * @return string|null
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set type value
	 * @param string $_type the type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get overwrite value
	 * @return int|null
	 */
	public function getOverwrite()
	{
		return $this->overwrite;
	}
	/**
	 * Set overwrite value
	 * @param int $_overwrite the overwrite
	 * @return int
	 */
	public function setOverwrite($_overwrite)
	{
		return ($this->overwrite = $_overwrite);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructOrtDomainAdd
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