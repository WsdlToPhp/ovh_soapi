<?php
/**
 * File for class OvhStructRtmRaidPartitionStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRtmRaidPartitionStruct originally named rtmRaidPartitionStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRtmRaidPartitionStruct extends OvhWsdlClass
{
	/**
	 * The partition
	 * @var string
	 */
	public $partition;
	/**
	 * The volumes
	 * @var OvhStructMyArrayOfRtmRaidPartitionVolumeStructType
	 */
	public $volumes;
	/**
	 * Constructor method for rtmRaidPartitionStruct
	 * @see parent::__construct()
	 * @param string $_partition
	 * @param OvhStructMyArrayOfRtmRaidPartitionVolumeStructType $_volumes
	 * @return OvhStructRtmRaidPartitionStruct
	 */
	public function __construct($_partition = NULL,$_volumes = NULL)
	{
		parent::__construct(array('partition'=>$_partition,'volumes'=>($_volumes instanceof OvhStructMyArrayOfRtmRaidPartitionVolumeStructType)?$_volumes:new OvhStructMyArrayOfRtmRaidPartitionVolumeStructType($_volumes)));
	}
	/**
	 * Get partition value
	 * @return string|null
	 */
	public function getPartition()
	{
		return $this->partition;
	}
	/**
	 * Set partition value
	 * @param string $_partition the partition
	 * @return string
	 */
	public function setPartition($_partition)
	{
		return ($this->partition = $_partition);
	}
	/**
	 * Get volumes value
	 * @return OvhStructMyArrayOfRtmRaidPartitionVolumeStructType|null
	 */
	public function getVolumes()
	{
		return $this->volumes;
	}
	/**
	 * Set volumes value
	 * @param OvhStructMyArrayOfRtmRaidPartitionVolumeStructType $_volumes the volumes
	 * @return OvhStructMyArrayOfRtmRaidPartitionVolumeStructType
	 */
	public function setVolumes($_volumes)
	{
		return ($this->volumes = $_volumes);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRtmRaidPartitionStruct
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