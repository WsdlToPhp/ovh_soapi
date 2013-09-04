<?php
/**
 * File for class OvhStructDedicatedNetbootModify
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedNetbootModify originally named dedicatedNetbootModify
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedNetbootModify extends OvhWsdlClass
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
	 * The kernel
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $kernel;
	/**
	 * The cpufamily
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $cpufamily;
	/**
	 * The grsec
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $grsec;
	/**
	 * The smp
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $smp;
	/**
	 * The ipv6
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $ipv6;
	/**
	 * The root
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $root;
	/**
	 * The rescueEmail
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $rescueEmail;
	/**
	 * The hz
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $hz;
	/**
	 * Constructor method for dedicatedNetbootModify
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_hostname
	 * @param string $_kernel
	 * @param string $_cpufamily
	 * @param boolean $_grsec
	 * @param boolean $_smp
	 * @param boolean $_ipv6
	 * @param string $_root
	 * @param string $_rescueEmail
	 * @param string $_hz
	 * @return OvhStructDedicatedNetbootModify
	 */
	public function __construct($_session = NULL,$_hostname = NULL,$_kernel = NULL,$_cpufamily = NULL,$_grsec = NULL,$_smp = NULL,$_ipv6 = NULL,$_root = NULL,$_rescueEmail = NULL,$_hz = NULL)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'kernel'=>$_kernel,'cpufamily'=>$_cpufamily,'grsec'=>$_grsec,'smp'=>$_smp,'ipv6'=>$_ipv6,'root'=>$_root,'rescueEmail'=>$_rescueEmail,'hz'=>$_hz));
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
	 * Get kernel value
	 * @return string|null
	 */
	public function getKernel()
	{
		return $this->kernel;
	}
	/**
	 * Set kernel value
	 * @param string $_kernel the kernel
	 * @return string
	 */
	public function setKernel($_kernel)
	{
		return ($this->kernel = $_kernel);
	}
	/**
	 * Get cpufamily value
	 * @return string|null
	 */
	public function getCpufamily()
	{
		return $this->cpufamily;
	}
	/**
	 * Set cpufamily value
	 * @param string $_cpufamily the cpufamily
	 * @return string
	 */
	public function setCpufamily($_cpufamily)
	{
		return ($this->cpufamily = $_cpufamily);
	}
	/**
	 * Get grsec value
	 * @return boolean|null
	 */
	public function getGrsec()
	{
		return $this->grsec;
	}
	/**
	 * Set grsec value
	 * @param boolean $_grsec the grsec
	 * @return boolean
	 */
	public function setGrsec($_grsec)
	{
		return ($this->grsec = $_grsec);
	}
	/**
	 * Get smp value
	 * @return boolean|null
	 */
	public function getSmp()
	{
		return $this->smp;
	}
	/**
	 * Set smp value
	 * @param boolean $_smp the smp
	 * @return boolean
	 */
	public function setSmp($_smp)
	{
		return ($this->smp = $_smp);
	}
	/**
	 * Get ipv6 value
	 * @return boolean|null
	 */
	public function getIpv6()
	{
		return $this->ipv6;
	}
	/**
	 * Set ipv6 value
	 * @param boolean $_ipv6 the ipv6
	 * @return boolean
	 */
	public function setIpv6($_ipv6)
	{
		return ($this->ipv6 = $_ipv6);
	}
	/**
	 * Get root value
	 * @return string|null
	 */
	public function getRoot()
	{
		return $this->root;
	}
	/**
	 * Set root value
	 * @param string $_root the root
	 * @return string
	 */
	public function setRoot($_root)
	{
		return ($this->root = $_root);
	}
	/**
	 * Get rescueEmail value
	 * @return string|null
	 */
	public function getRescueEmail()
	{
		return $this->rescueEmail;
	}
	/**
	 * Set rescueEmail value
	 * @param string $_rescueEmail the rescueEmail
	 * @return string
	 */
	public function setRescueEmail($_rescueEmail)
	{
		return ($this->rescueEmail = $_rescueEmail);
	}
	/**
	 * Get hz value
	 * @return string|null
	 */
	public function getHz()
	{
		return $this->hz;
	}
	/**
	 * Set hz value
	 * @param string $_hz the hz
	 * @return string
	 */
	public function setHz($_hz)
	{
		return ($this->hz = $_hz);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedNetbootModify
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