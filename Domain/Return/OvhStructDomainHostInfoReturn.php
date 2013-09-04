<?php
/**
 * File for class OvhStructDomainHostInfoReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDomainHostInfoReturn originally named domainHostInfoReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDomainHostInfoReturn extends OvhWsdlClass
{
	/**
	 * The hostname
	 * @var string
	 */
	public $hostname;
	/**
	 * The ipv4
	 * @var string
	 */
	public $ipv4;
	/**
	 * The ipv6
	 * @var string
	 */
	public $ipv6;
	/**
	 * Constructor method for domainHostInfoReturn
	 * @see parent::__construct()
	 * @param string $_hostname
	 * @param string $_ipv4
	 * @param string $_ipv6
	 * @return OvhStructDomainHostInfoReturn
	 */
	public function __construct($_hostname = NULL,$_ipv4 = NULL,$_ipv6 = NULL)
	{
		parent::__construct(array('hostname'=>$_hostname,'ipv4'=>$_ipv4,'ipv6'=>$_ipv6));
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
	 * Get ipv4 value
	 * @return string|null
	 */
	public function getIpv4()
	{
		return $this->ipv4;
	}
	/**
	 * Set ipv4 value
	 * @param string $_ipv4 the ipv4
	 * @return string
	 */
	public function setIpv4($_ipv4)
	{
		return ($this->ipv4 = $_ipv4);
	}
	/**
	 * Get ipv6 value
	 * @return string|null
	 */
	public function getIpv6()
	{
		return $this->ipv6;
	}
	/**
	 * Set ipv6 value
	 * @param string $_ipv6 the ipv6
	 * @return string
	 */
	public function setIpv6($_ipv6)
	{
		return ($this->ipv6 = $_ipv6);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDomainHostInfoReturn
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