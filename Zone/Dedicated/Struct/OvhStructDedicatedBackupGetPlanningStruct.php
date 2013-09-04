<?php
/**
 * File for class OvhStructDedicatedBackupGetPlanningStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedBackupGetPlanningStruct originally named dedicatedBackupGetPlanningStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedBackupGetPlanningStruct extends OvhWsdlClass
{
	/**
	 * The day
	 * @var string
	 */
	public $day;
	/**
	 * The planning
	 * @var OvhStructMyArrayOfStringType
	 */
	public $planning;
	/**
	 * Constructor method for dedicatedBackupGetPlanningStruct
	 * @see parent::__construct()
	 * @param string $_day
	 * @param OvhStructMyArrayOfStringType $_planning
	 * @return OvhStructDedicatedBackupGetPlanningStruct
	 */
	public function __construct($_day = NULL,$_planning = NULL)
	{
		parent::__construct(array('day'=>$_day,'planning'=>($_planning instanceof OvhStructMyArrayOfStringType)?$_planning:new OvhStructMyArrayOfStringType($_planning)));
	}
	/**
	 * Get day value
	 * @return string|null
	 */
	public function getDay()
	{
		return $this->day;
	}
	/**
	 * Set day value
	 * @param string $_day the day
	 * @return string
	 */
	public function setDay($_day)
	{
		return ($this->day = $_day);
	}
	/**
	 * Get planning value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getPlanning()
	{
		return $this->planning;
	}
	/**
	 * Set planning value
	 * @param OvhStructMyArrayOfStringType $_planning the planning
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setPlanning($_planning)
	{
		return ($this->planning = $_planning);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedBackupGetPlanningStruct
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