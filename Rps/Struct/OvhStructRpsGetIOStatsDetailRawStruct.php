<?php
/**
 * File for class OvhStructRpsGetIOStatsDetailRawStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRpsGetIOStatsDetailRawStruct originally named rpsGetIOStatsDetailRawStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRpsGetIOStatsDetailRawStruct extends OvhWsdlClass
{
	/**
	 * The raw
	 * @var string
	 */
	public $raw;
	/**
	 * Constructor method for rpsGetIOStatsDetailRawStruct
	 * @see parent::__construct()
	 * @param string $_raw
	 * @return OvhStructRpsGetIOStatsDetailRawStruct
	 */
	public function __construct($_raw = NULL)
	{
		parent::__construct(array('raw'=>$_raw));
	}
	/**
	 * Get raw value
	 * @return string|null
	 */
	public function getRaw()
	{
		return $this->raw;
	}
	/**
	 * Set raw value
	 * @param string $_raw the raw
	 * @return string
	 */
	public function setRaw($_raw)
	{
		return ($this->raw = $_raw);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRpsGetIOStatsDetailRawStruct
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