<?php
/**
 * File for class OvhStructTelephonyGetClosureEventsAsArrayStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyGetClosureEventsAsArrayStruct originally named telephonyGetClosureEventsAsArrayStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyGetClosureEventsAsArrayStruct extends OvhWsdlClass
{
	/**
	 * The numberOfEvents
	 * @var int
	 */
	public $numberOfEvents;
	/**
	 * The events
	 * @var OvhStructMyArrayOfTelephonyGetClosureEventsAsArrayEventStructType
	 */
	public $events;
	/**
	 * Constructor method for telephonyGetClosureEventsAsArrayStruct
	 * @see parent::__construct()
	 * @param int $_numberOfEvents
	 * @param OvhStructMyArrayOfTelephonyGetClosureEventsAsArrayEventStructType $_events
	 * @return OvhStructTelephonyGetClosureEventsAsArrayStruct
	 */
	public function __construct($_numberOfEvents = NULL,$_events = NULL)
	{
		parent::__construct(array('numberOfEvents'=>$_numberOfEvents,'events'=>($_events instanceof OvhStructMyArrayOfTelephonyGetClosureEventsAsArrayEventStructType)?$_events:new OvhStructMyArrayOfTelephonyGetClosureEventsAsArrayEventStructType($_events)));
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
	 * Get events value
	 * @return OvhStructMyArrayOfTelephonyGetClosureEventsAsArrayEventStructType|null
	 */
	public function getEvents()
	{
		return $this->events;
	}
	/**
	 * Set events value
	 * @param OvhStructMyArrayOfTelephonyGetClosureEventsAsArrayEventStructType $_events the events
	 * @return OvhStructMyArrayOfTelephonyGetClosureEventsAsArrayEventStructType
	 */
	public function setEvents($_events)
	{
		return ($this->events = $_events);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyGetClosureEventsAsArrayStruct
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