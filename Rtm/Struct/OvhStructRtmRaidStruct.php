<?php
/**
 * File for class OvhStructRtmRaidStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRtmRaidStruct originally named rtmRaidStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRtmRaidStruct extends OvhWsdlClass
{
	/**
	 * The units
	 * @var OvhStructMyArrayOfRtmRaidPartitionStructType
	 */
	public $units;
	/**
	 * Constructor method for rtmRaidStruct
	 * @see parent::__construct()
	 * @param OvhStructMyArrayOfRtmRaidPartitionStructType $_units
	 * @return OvhStructRtmRaidStruct
	 */
	public function __construct($_units = NULL)
	{
		parent::__construct(array('units'=>($_units instanceof OvhStructMyArrayOfRtmRaidPartitionStructType)?$_units:new OvhStructMyArrayOfRtmRaidPartitionStructType($_units)));
	}
	/**
	 * Get units value
	 * @return OvhStructMyArrayOfRtmRaidPartitionStructType|null
	 */
	public function getUnits()
	{
		return $this->units;
	}
	/**
	 * Set units value
	 * @param OvhStructMyArrayOfRtmRaidPartitionStructType $_units the units
	 * @return OvhStructMyArrayOfRtmRaidPartitionStructType
	 */
	public function setUnits($_units)
	{
		return ($this->units = $_units);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRtmRaidStruct
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