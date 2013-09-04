<?php
/**
 * File for class OvhStructDedicatedRipeGetIpStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedRipeGetIpStruct originally named dedicatedRipeGetIpStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedRipeGetIpStruct extends OvhWsdlClass
{
	/**
	 * The exclusion
	 * @var string
	 */
	public $exclusion;
	/**
	 * The routedTo
	 * @var string
	 */
	public $routedTo;
	/**
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * The netname
	 * @var string
	 */
	public $netname;
	/**
	 * Constructor method for dedicatedRipeGetIpStruct
	 * @see parent::__construct()
	 * @param string $_exclusion
	 * @param string $_routedTo
	 * @param string $_ip
	 * @param string $_netname
	 * @return OvhStructDedicatedRipeGetIpStruct
	 */
	public function __construct($_exclusion = NULL,$_routedTo = NULL,$_ip = NULL,$_netname = NULL)
	{
		parent::__construct(array('exclusion'=>$_exclusion,'routedTo'=>$_routedTo,'ip'=>$_ip,'netname'=>$_netname));
	}
	/**
	 * Get exclusion value
	 * @return string|null
	 */
	public function getExclusion()
	{
		return $this->exclusion;
	}
	/**
	 * Set exclusion value
	 * @param string $_exclusion the exclusion
	 * @return string
	 */
	public function setExclusion($_exclusion)
	{
		return ($this->exclusion = $_exclusion);
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
	 * Get netname value
	 * @return string|null
	 */
	public function getNetname()
	{
		return $this->netname;
	}
	/**
	 * Set netname value
	 * @param string $_netname the netname
	 * @return string
	 */
	public function setNetname($_netname)
	{
		return ($this->netname = $_netname);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedRipeGetIpStruct
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