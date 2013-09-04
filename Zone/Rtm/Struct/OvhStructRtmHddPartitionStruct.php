<?php
/**
 * File for class OvhStructRtmHddPartitionStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRtmHddPartitionStruct originally named rtmHddPartitionStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRtmHddPartitionStruct extends OvhWsdlClass
{
	/**
	 * The device
	 * @var string
	 */
	public $device;
	/**
	 * The percentUsed
	 * @var int
	 */
	public $percentUsed;
	/**
	 * The percentInodes
	 * @var int
	 */
	public $percentInodes;
	/**
	 * The mountPoint
	 * @var string
	 */
	public $mountPoint;
	/**
	 * Constructor method for rtmHddPartitionStruct
	 * @see parent::__construct()
	 * @param string $_device
	 * @param int $_percentUsed
	 * @param int $_percentInodes
	 * @param string $_mountPoint
	 * @return OvhStructRtmHddPartitionStruct
	 */
	public function __construct($_device = NULL,$_percentUsed = NULL,$_percentInodes = NULL,$_mountPoint = NULL)
	{
		parent::__construct(array('device'=>$_device,'percentUsed'=>$_percentUsed,'percentInodes'=>$_percentInodes,'mountPoint'=>$_mountPoint));
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
	 * Get percentUsed value
	 * @return int|null
	 */
	public function getPercentUsed()
	{
		return $this->percentUsed;
	}
	/**
	 * Set percentUsed value
	 * @param int $_percentUsed the percentUsed
	 * @return int
	 */
	public function setPercentUsed($_percentUsed)
	{
		return ($this->percentUsed = $_percentUsed);
	}
	/**
	 * Get percentInodes value
	 * @return int|null
	 */
	public function getPercentInodes()
	{
		return $this->percentInodes;
	}
	/**
	 * Set percentInodes value
	 * @param int $_percentInodes the percentInodes
	 * @return int
	 */
	public function setPercentInodes($_percentInodes)
	{
		return ($this->percentInodes = $_percentInodes);
	}
	/**
	 * Get mountPoint value
	 * @return string|null
	 */
	public function getMountPoint()
	{
		return $this->mountPoint;
	}
	/**
	 * Set mountPoint value
	 * @param string $_mountPoint the mountPoint
	 * @return string
	 */
	public function setMountPoint($_mountPoint)
	{
		return ($this->mountPoint = $_mountPoint);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRtmHddPartitionStruct
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