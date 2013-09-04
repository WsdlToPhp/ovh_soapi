<?php
/**
 * File for class OvhStructRpsGetIOStatsDetailStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRpsGetIOStatsDetailStruct originally named rpsGetIOStatsDetailStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRpsGetIOStatsDetailStruct extends OvhWsdlClass
{
	/**
	 * The serviceTime
	 * @var OvhStructRpsGetIOStatsDetailRawStruct
	 */
	public $serviceTime;
	/**
	 * The IoRequests
	 * @var OvhStructRpsGetIOStatsDetailIoRequestsStruct
	 */
	public $IoRequests;
	/**
	 * Constructor method for rpsGetIOStatsDetailStruct
	 * @see parent::__construct()
	 * @param OvhStructRpsGetIOStatsDetailRawStruct $_serviceTime
	 * @param OvhStructRpsGetIOStatsDetailIoRequestsStruct $_ioRequests
	 * @return OvhStructRpsGetIOStatsDetailStruct
	 */
	public function __construct($_serviceTime = NULL,$_ioRequests = NULL)
	{
		parent::__construct(array('serviceTime'=>$_serviceTime,'IoRequests'=>$_ioRequests));
	}
	/**
	 * Get serviceTime value
	 * @return OvhStructRpsGetIOStatsDetailRawStruct|null
	 */
	public function getServiceTime()
	{
		return $this->serviceTime;
	}
	/**
	 * Set serviceTime value
	 * @param OvhStructRpsGetIOStatsDetailRawStruct $_serviceTime the serviceTime
	 * @return OvhStructRpsGetIOStatsDetailRawStruct
	 */
	public function setServiceTime($_serviceTime)
	{
		return ($this->serviceTime = $_serviceTime);
	}
	/**
	 * Get IoRequests value
	 * @return OvhStructRpsGetIOStatsDetailIoRequestsStruct|null
	 */
	public function getIoRequests()
	{
		return $this->IoRequests;
	}
	/**
	 * Set IoRequests value
	 * @param OvhStructRpsGetIOStatsDetailIoRequestsStruct $_ioRequests the IoRequests
	 * @return OvhStructRpsGetIOStatsDetailIoRequestsStruct
	 */
	public function setIoRequests($_ioRequests)
	{
		return ($this->IoRequests = $_ioRequests);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRpsGetIOStatsDetailStruct
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