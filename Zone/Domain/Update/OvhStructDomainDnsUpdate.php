<?php
/**
 * File for class OvhStructDomainDnsUpdate
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDomainDnsUpdate originally named domainDnsUpdate
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDomainDnsUpdate extends OvhWsdlClass
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
	 * The dns1
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $dns1;
	/**
	 * The ip1
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $ip1;
	/**
	 * The dns2
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $dns2;
	/**
	 * The ip2
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $ip2;
	/**
	 * The dns3
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $dns3;
	/**
	 * The ip3
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $ip3;
	/**
	 * The dns4
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $dns4;
	/**
	 * The ip4
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $ip4;
	/**
	 * The dns5
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $dns5;
	/**
	 * The ip5
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $ip5;
	/**
	 * Constructor method for domainDnsUpdate
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_domain
	 * @param string $_dns1
	 * @param string $_ip1
	 * @param string $_dns2
	 * @param string $_ip2
	 * @param string $_dns3
	 * @param string $_ip3
	 * @param string $_dns4
	 * @param string $_ip4
	 * @param string $_dns5
	 * @param string $_ip5
	 * @return OvhStructDomainDnsUpdate
	 */
	public function __construct($_session = NULL,$_domain = NULL,$_dns1 = NULL,$_ip1 = NULL,$_dns2 = NULL,$_ip2 = NULL,$_dns3 = NULL,$_ip3 = NULL,$_dns4 = NULL,$_ip4 = NULL,$_dns5 = NULL,$_ip5 = NULL)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'dns1'=>$_dns1,'ip1'=>$_ip1,'dns2'=>$_dns2,'ip2'=>$_ip2,'dns3'=>$_dns3,'ip3'=>$_ip3,'dns4'=>$_dns4,'ip4'=>$_ip4,'dns5'=>$_dns5,'ip5'=>$_ip5));
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
	 * Get dns1 value
	 * @return string|null
	 */
	public function getDns1()
	{
		return $this->dns1;
	}
	/**
	 * Set dns1 value
	 * @param string $_dns1 the dns1
	 * @return string
	 */
	public function setDns1($_dns1)
	{
		return ($this->dns1 = $_dns1);
	}
	/**
	 * Get ip1 value
	 * @return string|null
	 */
	public function getIp1()
	{
		return $this->ip1;
	}
	/**
	 * Set ip1 value
	 * @param string $_ip1 the ip1
	 * @return string
	 */
	public function setIp1($_ip1)
	{
		return ($this->ip1 = $_ip1);
	}
	/**
	 * Get dns2 value
	 * @return string|null
	 */
	public function getDns2()
	{
		return $this->dns2;
	}
	/**
	 * Set dns2 value
	 * @param string $_dns2 the dns2
	 * @return string
	 */
	public function setDns2($_dns2)
	{
		return ($this->dns2 = $_dns2);
	}
	/**
	 * Get ip2 value
	 * @return string|null
	 */
	public function getIp2()
	{
		return $this->ip2;
	}
	/**
	 * Set ip2 value
	 * @param string $_ip2 the ip2
	 * @return string
	 */
	public function setIp2($_ip2)
	{
		return ($this->ip2 = $_ip2);
	}
	/**
	 * Get dns3 value
	 * @return string|null
	 */
	public function getDns3()
	{
		return $this->dns3;
	}
	/**
	 * Set dns3 value
	 * @param string $_dns3 the dns3
	 * @return string
	 */
	public function setDns3($_dns3)
	{
		return ($this->dns3 = $_dns3);
	}
	/**
	 * Get ip3 value
	 * @return string|null
	 */
	public function getIp3()
	{
		return $this->ip3;
	}
	/**
	 * Set ip3 value
	 * @param string $_ip3 the ip3
	 * @return string
	 */
	public function setIp3($_ip3)
	{
		return ($this->ip3 = $_ip3);
	}
	/**
	 * Get dns4 value
	 * @return string|null
	 */
	public function getDns4()
	{
		return $this->dns4;
	}
	/**
	 * Set dns4 value
	 * @param string $_dns4 the dns4
	 * @return string
	 */
	public function setDns4($_dns4)
	{
		return ($this->dns4 = $_dns4);
	}
	/**
	 * Get ip4 value
	 * @return string|null
	 */
	public function getIp4()
	{
		return $this->ip4;
	}
	/**
	 * Set ip4 value
	 * @param string $_ip4 the ip4
	 * @return string
	 */
	public function setIp4($_ip4)
	{
		return ($this->ip4 = $_ip4);
	}
	/**
	 * Get dns5 value
	 * @return string|null
	 */
	public function getDns5()
	{
		return $this->dns5;
	}
	/**
	 * Set dns5 value
	 * @param string $_dns5 the dns5
	 * @return string
	 */
	public function setDns5($_dns5)
	{
		return ($this->dns5 = $_dns5);
	}
	/**
	 * Get ip5 value
	 * @return string|null
	 */
	public function getIp5()
	{
		return $this->ip5;
	}
	/**
	 * Set ip5 value
	 * @param string $_ip5 the ip5
	 * @return string
	 */
	public function setIp5($_ip5)
	{
		return ($this->ip5 = $_ip5);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDomainDnsUpdate
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