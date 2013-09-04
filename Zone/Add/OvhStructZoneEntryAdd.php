<?php
/**
 * File for class OvhStructZoneEntryAdd
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructZoneEntryAdd originally named zoneEntryAdd
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructZoneEntryAdd extends OvhWsdlClass
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
	 * The fieldtype
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $fieldtype;
	/**
	 * The target
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $target;
	/**
	 * The overwrite
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $overwrite;
	/**
	 * Constructor method for zoneEntryAdd
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_domain
	 * @param string $_subdomain
	 * @param string $_fieldtype
	 * @param string $_target
	 * @param boolean $_overwrite
	 * @return OvhStructZoneEntryAdd
	 */
	public function __construct($_session = NULL,$_domain = NULL,$_subdomain = NULL,$_fieldtype = NULL,$_target = NULL,$_overwrite = NULL)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'subdomain'=>$_subdomain,'fieldtype'=>$_fieldtype,'target'=>$_target,'overwrite'=>$_overwrite));
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
	 * Get fieldtype value
	 * @return string|null
	 */
	public function getFieldtype()
	{
		return $this->fieldtype;
	}
	/**
	 * Set fieldtype value
	 * @param string $_fieldtype the fieldtype
	 * @return string
	 */
	public function setFieldtype($_fieldtype)
	{
		return ($this->fieldtype = $_fieldtype);
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
	 * Get overwrite value
	 * @return boolean|null
	 */
	public function getOverwrite()
	{
		return $this->overwrite;
	}
	/**
	 * Set overwrite value
	 * @param boolean $_overwrite the overwrite
	 * @return boolean
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
	 * @return OvhStructZoneEntryAdd
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