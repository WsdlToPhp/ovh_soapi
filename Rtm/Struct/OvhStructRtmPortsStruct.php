<?php
/**
 * File for class OvhStructRtmPortsStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRtmPortsStruct originally named rtmPortsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRtmPortsStruct extends OvhWsdlClass
{
	/**
	 * The listening
	 * @var OvhStructMyArrayOfRtmPortsIfaceStructType
	 */
	public $listening;
	/**
	 * Constructor method for rtmPortsStruct
	 * @see parent::__construct()
	 * @param OvhStructMyArrayOfRtmPortsIfaceStructType $_listening
	 * @return OvhStructRtmPortsStruct
	 */
	public function __construct($_listening = NULL)
	{
		parent::__construct(array('listening'=>($_listening instanceof OvhStructMyArrayOfRtmPortsIfaceStructType)?$_listening:new OvhStructMyArrayOfRtmPortsIfaceStructType($_listening)));
	}
	/**
	 * Get listening value
	 * @return OvhStructMyArrayOfRtmPortsIfaceStructType|null
	 */
	public function getListening()
	{
		return $this->listening;
	}
	/**
	 * Set listening value
	 * @param OvhStructMyArrayOfRtmPortsIfaceStructType $_listening the listening
	 * @return OvhStructMyArrayOfRtmPortsIfaceStructType
	 */
	public function setListening($_listening)
	{
		return ($this->listening = $_listening);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRtmPortsStruct
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