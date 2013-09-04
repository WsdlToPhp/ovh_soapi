<?php
/**
 * File for class OvhStructTelephonyGetClosureEventsAsIcsStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyGetClosureEventsAsIcsStruct originally named telephonyGetClosureEventsAsIcsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyGetClosureEventsAsIcsStruct extends OvhWsdlClass
{
	/**
	 * The numberOfEvents
	 * @var int
	 */
	public $numberOfEvents;
	/**
	 * The datas
	 * @var string
	 */
	public $datas;
	/**
	 * Constructor method for telephonyGetClosureEventsAsIcsStruct
	 * @see parent::__construct()
	 * @param int $_numberOfEvents
	 * @param string $_datas
	 * @return OvhStructTelephonyGetClosureEventsAsIcsStruct
	 */
	public function __construct($_numberOfEvents = NULL,$_datas = NULL)
	{
		parent::__construct(array('numberOfEvents'=>$_numberOfEvents,'datas'=>$_datas));
	}
	/**
	 * Get numberOfEvents value
	 * @return int|null
	 */
	public function getNumberOfEvents()
	{
		return $this->numberOfEvents;
	}
	/**
	 * Set numberOfEvents value
	 * @param int $_numberOfEvents the numberOfEvents
	 * @return int
	 */
	public function setNumberOfEvents($_numberOfEvents)
	{
		return ($this->numberOfEvents = $_numberOfEvents);
	}
	/**
	 * Get datas value
	 * @return string|null
	 */
	public function getDatas()
	{
		return $this->datas;
	}
	/**
	 * Set datas value
	 * @param string $_datas the datas
	 * @return string
	 */
	public function setDatas($_datas)
	{
		return ($this->datas = $_datas);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyGetClosureEventsAsIcsStruct
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