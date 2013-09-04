<?php
/**
 * File for class OvhStructDedicatedSecondaryDNSAdd
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedSecondaryDNSAdd originally named dedicatedSecondaryDNSAdd
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedSecondaryDNSAdd extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The hostname
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $hostname;
	/**
	 * The ip
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $ip;
	/**
	 * The domain
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $domain;
	/**
	 * The nameserver
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $nameserver;
	/**
	 * The nameserverIp
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $nameserverIp;
	/**
	 * Constructor method for dedicatedSecondaryDNSAdd
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_hostname
	 * @param string $_ip
	 * @param string $_domain
	 * @param string $_nameserver
	 * @param string $_nameserverIp
	 * @return OvhStructDedicatedSecondaryDNSAdd
	 */
	public function __construct($_session = NULL,$_hostname = NULL,$_ip = NULL,$_domain = NULL,$_nameserver = NULL,$_nameserverIp = NULL)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'ip'=>$_ip,'domain'=>$_domain,'nameserver'=>$_nameserver,'nameserverIp'=>$_nameserverIp));
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
	 * Get hostname value
	 * @return string|null
	 */
	public function getHostname()
	{
		return $this->hostname;
	}
	/**
	 * Set hostname value
	 * @param string $_hostname the hostname
	 * @return string
	 */
	public function setHostname($_hostname)
	{
		return ($this->hostname = $_hostname);
	}
	/**
	 * Get ip value
	 * @return string|null
	 */
	public function getIp()
	{
		return $this->ip;
	}
	/**
	 * Set ip value
	 * @param string $_ip the ip
	 * @return string
	 */
	public function setIp($_ip)
	{
		return ($this->ip = $_ip);
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
	 * Get nameserver value
	 * @return string|null
	 */
	public function getNameserver()
	{
		return $this->nameserver;
	}
	/**
	 * Set nameserver value
	 * @param string $_nameserver the nameserver
	 * @return string
	 */
	public function setNameserver($_nameserver)
	{
		return ($this->nameserver = $_nameserver);
	}
	/**
	 * Get nameserverIp value
	 * @return string|null
	 */
	public function getNameserverIp()
	{
		return $this->nameserverIp;
	}
	/**
	 * Set nameserverIp value
	 * @param string $_nameserverIp the nameserverIp
	 * @return string
	 */
	public function setNameserverIp($_nameserverIp)
	{
		return ($this->nameserverIp = $_nameserverIp);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedSecondaryDNSAdd
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