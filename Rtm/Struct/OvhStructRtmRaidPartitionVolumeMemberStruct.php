<?php
/**
 * File for class OvhStructRtmRaidPartitionVolumeMemberStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRtmRaidPartitionVolumeMemberStruct originally named rtmRaidPartitionVolumeMemberStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRtmRaidPartitionVolumeMemberStruct extends OvhWsdlClass
{
	/**
	 * The memberName
	 * @var string
	 */
	public $memberName;
	/**
	 * The modelName
	 * @var string
	 */
	public $modelName;
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
	 * The capacity
	 * @var string
	 */
	public $capacity;
	/**
	 * Constructor method for rtmRaidPartitionVolumeMemberStruct
	 * @see parent::__construct()
	 * @param string $_memberName
	 * @param string $_modelName
	 * @param string $_flags
	 * @param string $_status
	 * @param string $_capacity
	 * @return OvhStructRtmRaidPartitionVolumeMemberStruct
	 */
	public function __construct($_memberName = NULL,$_modelName = NULL,$_flags = NULL,$_status = NULL,$_capacity = NULL)
	{
		parent::__construct(array('memberName'=>$_memberName,'modelName'=>$_modelName,'flags'=>$_flags,'status'=>$_status,'capacity'=>$_capacity));
	}
	/**
	 * Get memberName value
	 * @return string|null
	 */
	public function getMemberName()
	{
		return $this->memberName;
	}
	/**
	 * Set memberName value
	 * @param string $_memberName the memberName
	 * @return string
	 */
	public function setMemberName($_memberName)
	{
		return ($this->memberName = $_memberName);
	}
	/**
	 * Get modelName value
	 * @return string|null
	 */
	public function getModelName()
	{
		return $this->modelName;
	}
	/**
	 * Set modelName value
	 * @param string $_modelName the modelName
	 * @return string
	 */
	public function setModelName($_modelName)
	{
		return ($this->modelName = $_modelName);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRtmRaidPartitionVolumeMemberStruct
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