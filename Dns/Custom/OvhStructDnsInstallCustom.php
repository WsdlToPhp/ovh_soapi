<?php
/**
 * File for class OvhStructDnsInstallCustom
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDnsInstallCustom originally named dnsInstallCustom
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDnsInstallCustom extends OvhWsdlClass
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
	 * The mxtype
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $mxtype;
	/**
	 * The mx
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $mx;
	/**
	 * The country
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $country;
	/**
	 * The minimized
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $minimized;
	/**
	 * Constructor method for dnsInstallCustom
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_domain
	 * @param string $_subdomain
	 * @param string $_hostingtype
	 * @param string $_hosting
	 * @param string $_mxtype
	 * @param string $_mx
	 * @param string $_country
	 * @param boolean $_minimized
	 * @return OvhStructDnsInstallCustom
	 */
	public function __construct($_session = NULL,$_domain = NULL,$_subdomain = NULL,$_hostingtype = NULL,$_hosting = NULL,$_mxtype = NULL,$_mx = NULL,$_country = NULL,$_minimized = NULL)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'subdomain'=>$_subdomain,'hostingtype'=>$_hostingtype,'hosting'=>$_hosting,'mxtype'=>$_mxtype,'mx'=>$_mx,'country'=>$_country,'minimized'=>$_minimized));
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
	 * Get mxtype value
	 * @return string|null
	 */
	public function getMxtype()
	{
		return $this->mxtype;
	}
	/**
	 * Set mxtype value
	 * @param string $_mxtype the mxtype
	 * @return string
	 */
	public function setMxtype($_mxtype)
	{
		return ($this->mxtype = $_mxtype);
	}
	/**
	 * Get mx value
	 * @return string|null
	 */
	public function getMx()
	{
		return $this->mx;
	}
	/**
	 * Set mx value
	 * @param string $_mx the mx
	 * @return string
	 */
	public function setMx($_mx)
	{
		return ($this->mx = $_mx);
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
	 * Get minimized value
	 * @return boolean|null
	 */
	public function getMinimized()
	{
		return $this->minimized;
	}
	/**
	 * Set minimized value
	 * @param boolean $_minimized the minimized
	 * @return boolean
	 */
	public function setMinimized($_minimized)
	{
		return ($this->minimized = $_minimized);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDnsInstallCustom
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