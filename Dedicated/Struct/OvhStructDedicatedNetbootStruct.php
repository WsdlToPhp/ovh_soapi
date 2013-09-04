<?php
/**
 * File for class OvhStructDedicatedNetbootStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedNetbootStruct originally named dedicatedNetbootStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedNetbootStruct extends OvhWsdlClass
{
	/**
	 * The kernel
	 * @var string
	 */
	public $kernel;
	/**
	 * The cpufamily
	 * @var string
	 */
	public $cpufamily;
	/**
	 * The root
	 * @var string
	 */
	public $root;
	/**
	 * The smp
	 * @var boolean
	 */
	public $smp;
	/**
	 * The ipv6
	 * @var boolean
	 */
	public $ipv6;
	/**
	 * The grsec
	 * @var boolean
	 */
	public $grsec;
	/**
	 * The hz
	 * @var string
	 */
	public $hz;
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * Constructor method for dedicatedNetbootStruct
	 * @see parent::__construct()
	 * @param string $_kernel
	 * @param string $_cpufamily
	 * @param string $_root
	 * @param boolean $_smp
	 * @param boolean $_ipv6
	 * @param boolean $_grsec
	 * @param string $_hz
	 * @param int $_id
	 * @param string $_state
	 * @return OvhStructDedicatedNetbootStruct
	 */
	public function __construct($_kernel = NULL,$_cpufamily = NULL,$_root = NULL,$_smp = NULL,$_ipv6 = NULL,$_grsec = NULL,$_hz = NULL,$_id = NULL,$_state = NULL)
	{
		parent::__construct(array('kernel'=>$_kernel,'cpufamily'=>$_cpufamily,'root'=>$_root,'smp'=>$_smp,'ipv6'=>$_ipv6,'grsec'=>$_grsec,'hz'=>$_hz,'id'=>$_id,'state'=>$_state));
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
	 * Get id value
	 * @return int|null
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set id value
	 * @param int $_id the id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get state value
	 * @return string|null
	 */
	public function getState()
	{
		return $this->state;
	}
	/**
	 * Set state value
	 * @param string $_state the state
	 * @return string
	 */
	public function setState($_state)
	{
		return ($this->state = $_state);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedNetbootStruct
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