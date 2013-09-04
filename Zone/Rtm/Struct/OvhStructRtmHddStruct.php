<?php
/**
 * File for class OvhStructRtmHddStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRtmHddStruct originally named rtmHddStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRtmHddStruct extends OvhWsdlClass
{
	/**
	 * The device
	 * @var string
	 */
	public $device;
	/**
	 * The model
	 * @var string
	 */
	public $model;
	/**
	 * The capacity
	 * @var string
	 */
	public $capacity;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The partitions
	 * @var OvhStructMyArrayOfRtmHddPartitionStructType
	 */
	public $partitions;
	/**
	 * The smart
	 * @var OvhStructRtmHddSmartStruct
	 */
	public $smart;
	/**
	 * The temperature
	 * @var int
	 */
	public $temperature;
	/**
	 * Constructor method for rtmHddStruct
	 * @see parent::__construct()
	 * @param string $_device
	 * @param string $_model
	 * @param string $_capacity
	 * @param string $_status
	 * @param OvhStructMyArrayOfRtmHddPartitionStructType $_partitions
	 * @param OvhStructRtmHddSmartStruct $_smart
	 * @param int $_temperature
	 * @return OvhStructRtmHddStruct
	 */
	public function __construct($_device = NULL,$_model = NULL,$_capacity = NULL,$_status = NULL,$_partitions = NULL,$_smart = NULL,$_temperature = NULL)
	{
		parent::__construct(array('device'=>$_device,'model'=>$_model,'capacity'=>$_capacity,'status'=>$_status,'partitions'=>($_partitions instanceof OvhStructMyArrayOfRtmHddPartitionStructType)?$_partitions:new OvhStructMyArrayOfRtmHddPartitionStructType($_partitions),'smart'=>$_smart,'temperature'=>$_temperature));
	}
	/**
	 * Get device value
	 * @return string|null
	 */
	public function getDevice()
	{
		return $this->device;
	}
	/**
	 * Set device value
	 * @param string $_device the device
	 * @return string
	 */
	public function setDevice($_device)
	{
		return ($this->device = $_device);
	}
	/**
	 * Get model value
	 * @return string|null
	 */
	public function getModel()
	{
		return $this->model;
	}
	/**
	 * Set model value
	 * @param string $_model the model
	 * @return string
	 */
	public function setModel($_model)
	{
		return ($this->model = $_model);
	}
	/**
	 * Get capacity value
	 * @return string|null
	 */
	public function getCapacity()
	{
		return $this->capacity;
	}
	/**
	 * Set capacity value
	 * @param string $_capacity the capacity
	 * @return string
	 */
	public function setCapacity($_capacity)
	{
		return ($this->capacity = $_capacity);
	}
	/**
	 * Get status value
	 * @return string|null
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set status value
	 * @param string $_status the status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get partitions value
	 * @return OvhStructMyArrayOfRtmHddPartitionStructType|null
	 */
	public function getPartitions()
	{
		return $this->partitions;
	}
	/**
	 * Set partitions value
	 * @param OvhStructMyArrayOfRtmHddPartitionStructType $_partitions the partitions
	 * @return OvhStructMyArrayOfRtmHddPartitionStructType
	 */
	public function setPartitions($_partitions)
	{
		return ($this->partitions = $_partitions);
	}
	/**
	 * Get smart value
	 * @return OvhStructRtmHddSmartStruct|null
	 */
	public function getSmart()
	{
		return $this->smart;
	}
	/**
	 * Set smart value
	 * @param OvhStructRtmHddSmartStruct $_smart the smart
	 * @return OvhStructRtmHddSmartStruct
	 */
	public function setSmart($_smart)
	{
		return ($this->smart = $_smart);
	}
	/**
	 * Get temperature value
	 * @return int|null
	 */
	public function getTemperature()
	{
		return $this->temperature;
	}
	/**
	 * Set temperature value
	 * @param int $_temperature the temperature
	 * @return int
	 */
	public function setTemperature($_temperature)
	{
		return ($this->temperature = $_temperature);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRtmHddStruct
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