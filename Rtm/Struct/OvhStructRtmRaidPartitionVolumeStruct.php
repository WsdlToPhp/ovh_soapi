<?php
/**
 * File for class OvhStructRtmRaidPartitionVolumeStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRtmRaidPartitionVolumeStruct originally named rtmRaidPartitionVolumeStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRtmRaidPartitionVolumeStruct extends OvhWsdlClass
{
	/**
	 * The volumeName
	 * @var string
	 */
	public $volumeName;
	/**
	 * The flags
	 * @var string
	 */
	public $flags;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The capacity
	 * @var string
	 */
	public $capacity;
	/**
	 * The phys
	 * @var int
	 */
	public $phys;
	/**
	 * The members
	 * @var OvhStructMyArrayOfRtmRaidPartitionVolumeMemberStructType
	 */
	public $members;
	/**
	 * Constructor method for rtmRaidPartitionVolumeStruct
	 * @see parent::__construct()
	 * @param string $_volumeName
	 * @param string $_flags
	 * @param string $_status
	 * @param string $_type
	 * @param string $_capacity
	 * @param int $_phys
	 * @param OvhStructMyArrayOfRtmRaidPartitionVolumeMemberStructType $_members
	 * @return OvhStructRtmRaidPartitionVolumeStruct
	 */
	public function __construct($_volumeName = NULL,$_flags = NULL,$_status = NULL,$_type = NULL,$_capacity = NULL,$_phys = NULL,$_members = NULL)
	{
		parent::__construct(array('volumeName'=>$_volumeName,'flags'=>$_flags,'status'=>$_status,'type'=>$_type,'capacity'=>$_capacity,'phys'=>$_phys,'members'=>($_members instanceof OvhStructMyArrayOfRtmRaidPartitionVolumeMemberStructType)?$_members:new OvhStructMyArrayOfRtmRaidPartitionVolumeMemberStructType($_members)));
	}
	/**
	 * Get volumeName value
	 * @return string|null
	 */
	public function getVolumeName()
	{
		return $this->volumeName;
	}
	/**
	 * Set volumeName value
	 * @param string $_volumeName the volumeName
	 * @return string
	 */
	public function setVolumeName($_volumeName)
	{
		return ($this->volumeName = $_volumeName);
	}
	/**
	 * Get flags value
	 * @return string|null
	 */
	public function getFlags()
	{
		return $this->flags;
	}
	/**
	 * Set flags value
	 * @param string $_flags the flags
	 * @return string
	 */
	public function setFlags($_flags)
	{
		return ($this->flags = $_flags);
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
	 * Get type value
	 * @return string|null
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set type value
	 * @param string $_type the type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
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
	 * Get phys value
	 * @return int|null
	 */
	public function getPhys()
	{
		return $this->phys;
	}
	/**
	 * Set phys value
	 * @param int $_phys the phys
	 * @return int
	 */
	public function setPhys($_phys)
	{
		return ($this->phys = $_phys);
	}
	/**
	 * Get members value
	 * @return OvhStructMyArrayOfRtmRaidPartitionVolumeMemberStructType|null
	 */
	public function getMembers()
	{
		return $this->members;
	}
	/**
	 * Set members value
	 * @param OvhStructMyArrayOfRtmRaidPartitionVolumeMemberStructType $_members the members
	 * @return OvhStructMyArrayOfRtmRaidPartitionVolumeMemberStructType
	 */
	public function setMembers($_members)
	{
		return ($this->members = $_members);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRtmRaidPartitionVolumeStruct
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