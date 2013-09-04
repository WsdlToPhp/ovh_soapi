<?php
/**
 * File for class OvhStructDedicatedVirtualMacIpAdd
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedVirtualMacIpAdd originally named dedicatedVirtualMacIpAdd
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedVirtualMacIpAdd extends OvhWsdlClass
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
	 * The newMac
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $newMac;
	/**
	 * The typeMac
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $typeMac;
	/**
	 * The macName
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $macName;
	/**
	 * The mac
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $mac;
	/**
	 * Constructor method for dedicatedVirtualMacIpAdd
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_hostname
	 * @param string $_ip
	 * @param string $_newMac
	 * @param string $_typeMac
	 * @param string $_macName
	 * @param string $_mac
	 * @return OvhStructDedicatedVirtualMacIpAdd
	 */
	public function __construct($_session = NULL,$_hostname = NULL,$_ip = NULL,$_newMac = NULL,$_typeMac = NULL,$_macName = NULL,$_mac = NULL)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'ip'=>$_ip,'newMac'=>$_newMac,'typeMac'=>$_typeMac,'macName'=>$_macName,'mac'=>$_mac));
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
	 * Get newMac value
	 * @return string|null
	 */
	public function getNewMac()
	{
		return $this->newMac;
	}
	/**
	 * Set newMac value
	 * @param string $_newMac the newMac
	 * @return string
	 */
	public function setNewMac($_newMac)
	{
		return ($this->newMac = $_newMac);
	}
	/**
	 * Get typeMac value
	 * @return string|null
	 */
	public function getTypeMac()
	{
		return $this->typeMac;
	}
	/**
	 * Set typeMac value
	 * @param string $_typeMac the typeMac
	 * @return string
	 */
	public function setTypeMac($_typeMac)
	{
		return ($this->typeMac = $_typeMac);
	}
	/**
	 * Get macName value
	 * @return string|null
	 */
	public function getMacName()
	{
		return $this->macName;
	}
	/**
	 * Set macName value
	 * @param string $_macName the macName
	 * @return string
	 */
	public function setMacName($_macName)
	{
		return ($this->macName = $_macName);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedVirtualMacIpAdd
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