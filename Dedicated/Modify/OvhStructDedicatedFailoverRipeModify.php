<?php
/**
 * File for class OvhStructDedicatedFailoverRipeModify
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedFailoverRipeModify originally named dedicatedFailoverRipeModify
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedFailoverRipeModify extends OvhWsdlClass
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
	 * The hostnameNew
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $hostnameNew;
	/**
	 * The networkIp
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $networkIp;
	/**
	 * The suffix
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $suffix;
	/**
	 * The ip
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $ip;
	/**
	 * Constructor method for dedicatedFailoverRipeModify
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_hostname
	 * @param string $_hostnameNew
	 * @param string $_networkIp
	 * @param int $_suffix
	 * @param string $_ip
	 * @return OvhStructDedicatedFailoverRipeModify
	 */
	public function __construct($_session = NULL,$_hostname = NULL,$_hostnameNew = NULL,$_networkIp = NULL,$_suffix = NULL,$_ip = NULL)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'hostnameNew'=>$_hostnameNew,'networkIp'=>$_networkIp,'suffix'=>$_suffix,'ip'=>$_ip));
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
	 * Get hostnameNew value
	 * @return string|null
	 */
	public function getHostnameNew()
	{
		return $this->hostnameNew;
	}
	/**
	 * Set hostnameNew value
	 * @param string $_hostnameNew the hostnameNew
	 * @return string
	 */
	public function setHostnameNew($_hostnameNew)
	{
		return ($this->hostnameNew = $_hostnameNew);
	}
	/**
	 * Get networkIp value
	 * @return string|null
	 */
	public function getNetworkIp()
	{
		return $this->networkIp;
	}
	/**
	 * Set networkIp value
	 * @param string $_networkIp the networkIp
	 * @return string
	 */
	public function setNetworkIp($_networkIp)
	{
		return ($this->networkIp = $_networkIp);
	}
	/**
	 * Get suffix value
	 * @return int|null
	 */
	public function getSuffix()
	{
		return $this->suffix;
	}
	/**
	 * Set suffix value
	 * @param int $_suffix the suffix
	 * @return int
	 */
	public function setSuffix($_suffix)
	{
		return ($this->suffix = $_suffix);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedFailoverRipeModify
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