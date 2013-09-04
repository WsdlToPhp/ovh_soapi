<?php
/**
 * File for class OvhStructDedicatedMonitoringServiceAddSMS
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedMonitoringServiceAddSMS originally named dedicatedMonitoringServiceAddSMS
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedMonitoringServiceAddSMS extends OvhWsdlClass
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
	 * The port
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $port;
	/**
	 * The protocol
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $protocol;
	/**
	 * The period
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $period;
	/**
	 * The string
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $string;
	/**
	 * The url
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $url;
	/**
	 * The smsAccount
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $smsAccount;
	/**
	 * The phoneNumberTo
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $phoneNumberTo;
	/**
	 * Constructor method for dedicatedMonitoringServiceAddSMS
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_hostname
	 * @param string $_ip
	 * @param int $_port
	 * @param string $_protocol
	 * @param string $_period
	 * @param string $_string
	 * @param string $_url
	 * @param string $_smsAccount
	 * @param string $_phoneNumberTo
	 * @return OvhStructDedicatedMonitoringServiceAddSMS
	 */
	public function __construct($_session = NULL,$_hostname = NULL,$_ip = NULL,$_port = NULL,$_protocol = NULL,$_period = NULL,$_string = NULL,$_url = NULL,$_smsAccount = NULL,$_phoneNumberTo = NULL)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'ip'=>$_ip,'port'=>$_port,'protocol'=>$_protocol,'period'=>$_period,'string'=>$_string,'url'=>$_url,'smsAccount'=>$_smsAccount,'phoneNumberTo'=>$_phoneNumberTo));
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
	 * Get port value
	 * @return int|null
	 */
	public function getPort()
	{
		return $this->port;
	}
	/**
	 * Set port value
	 * @param int $_port the port
	 * @return int
	 */
	public function setPort($_port)
	{
		return ($this->port = $_port);
	}
	/**
	 * Get protocol value
	 * @return string|null
	 */
	public function getProtocol()
	{
		return $this->protocol;
	}
	/**
	 * Set protocol value
	 * @param string $_protocol the protocol
	 * @return string
	 */
	public function setProtocol($_protocol)
	{
		return ($this->protocol = $_protocol);
	}
	/**
	 * Get period value
	 * @return string|null
	 */
	public function getPeriod()
	{
		return $this->period;
	}
	/**
	 * Set period value
	 * @param string $_period the period
	 * @return string
	 */
	public function setPeriod($_period)
	{
		return ($this->period = $_period);
	}
	/**
	 * Get string value
	 * @return string|null
	 */
	public function getString()
	{
		return $this->string;
	}
	/**
	 * Set string value
	 * @param string $_string the string
	 * @return string
	 */
	public function setString($_string)
	{
		return ($this->string = $_string);
	}
	/**
	 * Get url value
	 * @return string|null
	 */
	public function getUrl()
	{
		return $this->url;
	}
	/**
	 * Set url value
	 * @param string $_url the url
	 * @return string
	 */
	public function setUrl($_url)
	{
		return ($this->url = $_url);
	}
	/**
	 * Get smsAccount value
	 * @return string|null
	 */
	public function getSmsAccount()
	{
		return $this->smsAccount;
	}
	/**
	 * Set smsAccount value
	 * @param string $_smsAccount the smsAccount
	 * @return string
	 */
	public function setSmsAccount($_smsAccount)
	{
		return ($this->smsAccount = $_smsAccount);
	}
	/**
	 * Get phoneNumberTo value
	 * @return string|null
	 */
	public function getPhoneNumberTo()
	{
		return $this->phoneNumberTo;
	}
	/**
	 * Set phoneNumberTo value
	 * @param string $_phoneNumberTo the phoneNumberTo
	 * @return string
	 */
	public function setPhoneNumberTo($_phoneNumberTo)
	{
		return ($this->phoneNumberTo = $_phoneNumberTo);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedMonitoringServiceAddSMS
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