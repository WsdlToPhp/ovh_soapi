<?php
/**
 * File for class OvhStructDedicatedNetworkInterfaceStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedNetworkInterfaceStruct originally named dedicatedNetworkInterfaceStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedNetworkInterfaceStruct extends OvhWsdlClass
{
	/**
	 * The reverse
	 * @var string
	 */
	public $reverse;
	/**
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * The ipv6
	 * @var string
	 */
	public $ipv6;
	/**
	 * The mac
	 * @var string
	 */
	public $mac;
	/**
	 * The switch
	 * @var string
	 */
	public $switch;
	/**
	 * The icmp_drop
	 * @var boolean
	 */
	public $icmp_drop;
	/**
	 * The failover
	 * @var boolean
	 */
	public $failover;
	/**
	 * The routedTo
	 * @var string
	 */
	public $routedTo;
	/**
	 * The ssl
	 * @var boolean
	 */
	public $ssl;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * Constructor method for dedicatedNetworkInterfaceStruct
	 * @see parent::__construct()
	 * @param string $_reverse
	 * @param string $_ip
	 * @param string $_ipv6
	 * @param string $_mac
	 * @param string $_switch
	 * @param boolean $_icmp_drop
	 * @param boolean $_failover
	 * @param string $_routedTo
	 * @param boolean $_ssl
	 * @param string $_country
	 * @return OvhStructDedicatedNetworkInterfaceStruct
	 */
	public function __construct($_reverse = NULL,$_ip = NULL,$_ipv6 = NULL,$_mac = NULL,$_switch = NULL,$_icmp_drop = NULL,$_failover = NULL,$_routedTo = NULL,$_ssl = NULL,$_country = NULL)
	{
		parent::__construct(array('reverse'=>$_reverse,'ip'=>$_ip,'ipv6'=>$_ipv6,'mac'=>$_mac,'switch'=>$_switch,'icmp_drop'=>$_icmp_drop,'failover'=>$_failover,'routedTo'=>$_routedTo,'ssl'=>$_ssl,'country'=>$_country));
	}
	/**
	 * Get reverse value
	 * @return string|null
	 */
	public function getReverse()
	{
		return $this->reverse;
	}
	/**
	 * Set reverse value
	 * @param string $_reverse the reverse
	 * @return string
	 */
	public function setReverse($_reverse)
	{
		return ($this->reverse = $_reverse);
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
	 * Get mac value
	 * @return string|null
	 */
	public function getMac()
	{
		return $this->mac;
	}
	/**
	 * Set mac value
	 * @param string $_mac the mac
	 * @return string
	 */
	public function setMac($_mac)
	{
		return ($this->mac = $_mac);
	}
	/**
	 * Get switch value
	 * @return string|null
	 */
	public function getSwitch()
	{
		return $this->switch;
	}
	/**
	 * Set switch value
	 * @param string $_switch the switch
	 * @return string
	 */
	public function setSwitch($_switch)
	{
		return ($this->switch = $_switch);
	}
	/**
	 * Get icmp_drop value
	 * @return boolean|null
	 */
	public function getIcmp_drop()
	{
		return $this->icmp_drop;
	}
	/**
	 * Set icmp_drop value
	 * @param boolean $_icmp_drop the icmp_drop
	 * @return boolean
	 */
	public function setIcmp_drop($_icmp_drop)
	{
		return ($this->icmp_drop = $_icmp_drop);
	}
	/**
	 * Get failover value
	 * @return boolean|null
	 */
	public function getFailover()
	{
		return $this->failover;
	}
	/**
	 * Set failover value
	 * @param boolean $_failover the failover
	 * @return boolean
	 */
	public function setFailover($_failover)
	{
		return ($this->failover = $_failover);
	}
	/**
	 * Get routedTo value
	 * @return string|null
	 */
	public function getRoutedTo()
	{
		return $this->routedTo;
	}
	/**
	 * Set routedTo value
	 * @param string $_routedTo the routedTo
	 * @return string
	 */
	public function setRoutedTo($_routedTo)
	{
		return ($this->routedTo = $_routedTo);
	}
	/**
	 * Get ssl value
	 * @return boolean|null
	 */
	public function getSsl()
	{
		return $this->ssl;
	}
	/**
	 * Set ssl value
	 * @param boolean $_ssl the ssl
	 * @return boolean
	 */
	public function setSsl($_ssl)
	{
		return ($this->ssl = $_ssl);
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
	 * @return OvhStructDedicatedNetworkInterfaceStruct
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