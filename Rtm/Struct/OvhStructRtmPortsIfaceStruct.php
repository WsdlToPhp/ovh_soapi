<?php
/**
 * File for class OvhStructRtmPortsIfaceStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRtmPortsIfaceStruct originally named rtmPortsIfaceStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRtmPortsIfaceStruct extends OvhWsdlClass
{
	/**
	 * The iface
	 * @var string
	 */
	public $iface;
	/**
	 * The ports
	 * @var OvhStructMyArrayOfRtmPortsIfaceDetailStructType
	 */
	public $ports;
	/**
	 * Constructor method for rtmPortsIfaceStruct
	 * @see parent::__construct()
	 * @param string $_iface
	 * @param OvhStructMyArrayOfRtmPortsIfaceDetailStructType $_ports
	 * @return OvhStructRtmPortsIfaceStruct
	 */
	public function __construct($_iface = NULL,$_ports = NULL)
	{
		parent::__construct(array('iface'=>$_iface,'ports'=>($_ports instanceof OvhStructMyArrayOfRtmPortsIfaceDetailStructType)?$_ports:new OvhStructMyArrayOfRtmPortsIfaceDetailStructType($_ports)));
	}
	/**
	 * Get iface value
	 * @return string|null
	 */
	public function getIface()
	{
		return $this->iface;
	}
	/**
	 * Set iface value
	 * @param string $_iface the iface
	 * @return string
	 */
	public function setIface($_iface)
	{
		return ($this->iface = $_iface);
	}
	/**
	 * Get ports value
	 * @return OvhStructMyArrayOfRtmPortsIfaceDetailStructType|null
	 */
	public function getPorts()
	{
		return $this->ports;
	}
	/**
	 * Set ports value
	 * @param OvhStructMyArrayOfRtmPortsIfaceDetailStructType $_ports the ports
	 * @return OvhStructMyArrayOfRtmPortsIfaceDetailStructType
	 */
	public function setPorts($_ports)
	{
		return ($this->ports = $_ports);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRtmPortsIfaceStruct
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