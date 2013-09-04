<?php
/**
 * File for class OvhStructZoneEntryAddCustom
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructZoneEntryAddCustom originally named zoneEntryAddCustom
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructZoneEntryAddCustom extends OvhWsdlClass
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
	 * The fieldtype
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $fieldtype;
	/**
	 * The hostingtype
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $hostingtype;
	/**
	 * The hosting
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $hosting;
	/**
	 * The subdomain
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $subdomain;
	/**
	 * The priority
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $priority;
	/**
	 * The target
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $target;
	/**
	 * The country
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $country;
	/**
	 * Constructor method for zoneEntryAddCustom
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_domain
	 * @param string $_fieldtype
	 * @param string $_hostingtype
	 * @param string $_hosting
	 * @param string $_subdomain
	 * @param string $_priority
	 * @param string $_target
	 * @param string $_country
	 * @return OvhStructZoneEntryAddCustom
	 */
	public function __construct($_session = NULL,$_domain = NULL,$_fieldtype = NULL,$_hostingtype = NULL,$_hosting = NULL,$_subdomain = NULL,$_priority = NULL,$_target = NULL,$_country = NULL)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'fieldtype'=>$_fieldtype,'hostingtype'=>$_hostingtype,'hosting'=>$_hosting,'subdomain'=>$_subdomain,'priority'=>$_priority,'target'=>$_target,'country'=>$_country));
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
	 * Get hostingtype value
	 * @return string|null
	 */
	public function getHostingtype()
	{
		return $this->hostingtype;
	}
	/**
	 * Set hostingtype value
	 * @param string $_hostingtype the hostingtype
	 * @return string
	 */
	public function setHostingtype($_hostingtype)
	{
		return ($this->hostingtype = $_hostingtype);
	}
	/**
	 * Get hosting value
	 * @return string|null
	 */
	public function getHosting()
	{
		return $this->hosting;
	}
	/**
	 * Set hosting value
	 * @param string $_hosting the hosting
	 * @return string
	 */
	public function setHosting($_hosting)
	{
		return ($this->hosting = $_hosting);
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
	 * Get priority value
	 * @return string|null
	 */
	public function getPriority()
	{
		return $this->priority;
	}
	/**
	 * Set priority value
	 * @param string $_priority the priority
	 * @return string
	 */
	public function setPriority($_priority)
	{
		return ($this->priority = $_priority);
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
	 * Get country value
	 * @return string|null
	 */
	public function getCountry()
	{
		return $this->country;
	}
	/**
	 * Set country value
	 * @param string $_country the country
	 * @return string
	 */
	public function setCountry($_country)
	{
		return ($this->country = $_country);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructZoneEntryAddCustom
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