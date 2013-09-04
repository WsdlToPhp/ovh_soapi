<?php
/**
 * File for class OvhStructDedicatedCapabilitiesStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedCapabilitiesStruct originally named dedicatedCapabilitiesStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedCapabilitiesStruct extends OvhWsdlClass
{
	/**
	 * The hostname
	 * @var string
	 */
	public $hostname;
	/**
	 * The originalClassicFailover
	 * @var int
	 */
	public $originalClassicFailover;
	/**
	 * The originalFailoverRipe
	 * @var int
	 */
	public $originalFailoverRipe;
	/**
	 * The originalLoadBalancingSlot
	 * @var int
	 */
	public $originalLoadBalancingSlot;
	/**
	 * The additionalClassicFailover
	 * @var int
	 */
	public $additionalClassicFailover;
	/**
	 * The additionalFailoverRipe
	 * @var int
	 */
	public $additionalFailoverRipe;
	/**
	 * The usedClassicFailover
	 * @var int
	 */
	public $usedClassicFailover;
	/**
	 * The usedFailoverRipe
	 * @var int
	 */
	public $usedFailoverRipe;
	/**
	 * Constructor method for dedicatedCapabilitiesStruct
	 * @see parent::__construct()
	 * @param string $_hostname
	 * @param int $_originalClassicFailover
	 * @param int $_originalFailoverRipe
	 * @param int $_originalLoadBalancingSlot
	 * @param int $_additionalClassicFailover
	 * @param int $_additionalFailoverRipe
	 * @param int $_usedClassicFailover
	 * @param int $_usedFailoverRipe
	 * @return OvhStructDedicatedCapabilitiesStruct
	 */
	public function __construct($_hostname = NULL,$_originalClassicFailover = NULL,$_originalFailoverRipe = NULL,$_originalLoadBalancingSlot = NULL,$_additionalClassicFailover = NULL,$_additionalFailoverRipe = NULL,$_usedClassicFailover = NULL,$_usedFailoverRipe = NULL)
	{
		parent::__construct(array('hostname'=>$_hostname,'originalClassicFailover'=>$_originalClassicFailover,'originalFailoverRipe'=>$_originalFailoverRipe,'originalLoadBalancingSlot'=>$_originalLoadBalancingSlot,'additionalClassicFailover'=>$_additionalClassicFailover,'additionalFailoverRipe'=>$_additionalFailoverRipe,'usedClassicFailover'=>$_usedClassicFailover,'usedFailoverRipe'=>$_usedFailoverRipe));
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
	 * Get originalClassicFailover value
	 * @return int|null
	 */
	public function getOriginalClassicFailover()
	{
		return $this->originalClassicFailover;
	}
	/**
	 * Set originalClassicFailover value
	 * @param int $_originalClassicFailover the originalClassicFailover
	 * @return int
	 */
	public function setOriginalClassicFailover($_originalClassicFailover)
	{
		return ($this->originalClassicFailover = $_originalClassicFailover);
	}
	/**
	 * Get originalFailoverRipe value
	 * @return int|null
	 */
	public function getOriginalFailoverRipe()
	{
		return $this->originalFailoverRipe;
	}
	/**
	 * Set originalFailoverRipe value
	 * @param int $_originalFailoverRipe the originalFailoverRipe
	 * @return int
	 */
	public function setOriginalFailoverRipe($_originalFailoverRipe)
	{
		return ($this->originalFailoverRipe = $_originalFailoverRipe);
	}
	/**
	 * Get originalLoadBalancingSlot value
	 * @return int|null
	 */
	public function getOriginalLoadBalancingSlot()
	{
		return $this->originalLoadBalancingSlot;
	}
	/**
	 * Set originalLoadBalancingSlot value
	 * @param int $_originalLoadBalancingSlot the originalLoadBalancingSlot
	 * @return int
	 */
	public function setOriginalLoadBalancingSlot($_originalLoadBalancingSlot)
	{
		return ($this->originalLoadBalancingSlot = $_originalLoadBalancingSlot);
	}
	/**
	 * Get additionalClassicFailover value
	 * @return int|null
	 */
	public function getAdditionalClassicFailover()
	{
		return $this->additionalClassicFailover;
	}
	/**
	 * Set additionalClassicFailover value
	 * @param int $_additionalClassicFailover the additionalClassicFailover
	 * @return int
	 */
	public function setAdditionalClassicFailover($_additionalClassicFailover)
	{
		return ($this->additionalClassicFailover = $_additionalClassicFailover);
	}
	/**
	 * Get additionalFailoverRipe value
	 * @return int|null
	 */
	public function getAdditionalFailoverRipe()
	{
		return $this->additionalFailoverRipe;
	}
	/**
	 * Set additionalFailoverRipe value
	 * @param int $_additionalFailoverRipe the additionalFailoverRipe
	 * @return int
	 */
	public function setAdditionalFailoverRipe($_additionalFailoverRipe)
	{
		return ($this->additionalFailoverRipe = $_additionalFailoverRipe);
	}
	/**
	 * Get usedClassicFailover value
	 * @return int|null
	 */
	public function getUsedClassicFailover()
	{
		return $this->usedClassicFailover;
	}
	/**
	 * Set usedClassicFailover value
	 * @param int $_usedClassicFailover the usedClassicFailover
	 * @return int
	 */
	public function setUsedClassicFailover($_usedClassicFailover)
	{
		return ($this->usedClassicFailover = $_usedClassicFailover);
	}
	/**
	 * Get usedFailoverRipe value
	 * @return int|null
	 */
	public function getUsedFailoverRipe()
	{
		return $this->usedFailoverRipe;
	}
	/**
	 * Set usedFailoverRipe value
	 * @param int $_usedFailoverRipe the usedFailoverRipe
	 * @return int
	 */
	public function setUsedFailoverRipe($_usedFailoverRipe)
	{
		return ($this->usedFailoverRipe = $_usedFailoverRipe);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedCapabilitiesStruct
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