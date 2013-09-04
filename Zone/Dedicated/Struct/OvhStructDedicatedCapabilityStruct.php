<?php
/**
 * File for class OvhStructDedicatedCapabilityStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedCapabilityStruct originally named dedicatedCapabilityStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedCapabilityStruct extends OvhWsdlClass
{
	/**
	 * The backupFtp
	 * @var int
	 */
	public $backupFtp;
	/**
	 * The backupFtpServer
	 * @var string
	 */
	public $backupFtpServer;
	/**
	 * The allocationBlockIp
	 * @var int
	 */
	public $allocationBlockIp;
	/**
	 * The additionalIp
	 * @var int
	 */
	public $additionalIp;
	/**
	 * The rootDevice
	 * @var string
	 */
	public $rootDevice;
	/**
	 * The diskSize
	 * @var int
	 */
	public $diskSize;
	/**
	 * The tuning
	 * @var int
	 */
	public $tuning;
	/**
	 * Constructor method for dedicatedCapabilityStruct
	 * @see parent::__construct()
	 * @param int $_backupFtp
	 * @param string $_backupFtpServer
	 * @param int $_allocationBlockIp
	 * @param int $_additionalIp
	 * @param string $_rootDevice
	 * @param int $_diskSize
	 * @param int $_tuning
	 * @return OvhStructDedicatedCapabilityStruct
	 */
	public function __construct($_backupFtp = NULL,$_backupFtpServer = NULL,$_allocationBlockIp = NULL,$_additionalIp = NULL,$_rootDevice = NULL,$_diskSize = NULL,$_tuning = NULL)
	{
		parent::__construct(array('backupFtp'=>$_backupFtp,'backupFtpServer'=>$_backupFtpServer,'allocationBlockIp'=>$_allocationBlockIp,'additionalIp'=>$_additionalIp,'rootDevice'=>$_rootDevice,'diskSize'=>$_diskSize,'tuning'=>$_tuning));
	}
	/**
	 * Get backupFtp value
	 * @return int|null
	 */
	public function getBackupFtp()
	{
		return $this->backupFtp;
	}
	/**
	 * Set backupFtp value
	 * @param int $_backupFtp the backupFtp
	 * @return int
	 */
	public function setBackupFtp($_backupFtp)
	{
		return ($this->backupFtp = $_backupFtp);
	}
	/**
	 * Get backupFtpServer value
	 * @return string|null
	 */
	public function getBackupFtpServer()
	{
		return $this->backupFtpServer;
	}
	/**
	 * Set backupFtpServer value
	 * @param string $_backupFtpServer the backupFtpServer
	 * @return string
	 */
	public function setBackupFtpServer($_backupFtpServer)
	{
		return ($this->backupFtpServer = $_backupFtpServer);
	}
	/**
	 * Get allocationBlockIp value
	 * @return int|null
	 */
	public function getAllocationBlockIp()
	{
		return $this->allocationBlockIp;
	}
	/**
	 * Set allocationBlockIp value
	 * @param int $_allocationBlockIp the allocationBlockIp
	 * @return int
	 */
	public function setAllocationBlockIp($_allocationBlockIp)
	{
		return ($this->allocationBlockIp = $_allocationBlockIp);
	}
	/**
	 * Get additionalIp value
	 * @return int|null
	 */
	public function getAdditionalIp()
	{
		return $this->additionalIp;
	}
	/**
	 * Set additionalIp value
	 * @param int $_additionalIp the additionalIp
	 * @return int
	 */
	public function setAdditionalIp($_additionalIp)
	{
		return ($this->additionalIp = $_additionalIp);
	}
	/**
	 * Get rootDevice value
	 * @return string|null
	 */
	public function getRootDevice()
	{
		return $this->rootDevice;
	}
	/**
	 * Set rootDevice value
	 * @param string $_rootDevice the rootDevice
	 * @return string
	 */
	public function setRootDevice($_rootDevice)
	{
		return ($this->rootDevice = $_rootDevice);
	}
	/**
	 * Get diskSize value
	 * @return int|null
	 */
	public function getDiskSize()
	{
		return $this->diskSize;
	}
	/**
	 * Set diskSize value
	 * @param int $_diskSize the diskSize
	 * @return int
	 */
	public function setDiskSize($_diskSize)
	{
		return ($this->diskSize = $_diskSize);
	}
	/**
	 * Get tuning value
	 * @return int|null
	 */
	public function getTuning()
	{
		return $this->tuning;
	}
	/**
	 * Set tuning value
	 * @param int $_tuning the tuning
	 * @return int
	 */
	public function setTuning($_tuning)
	{
		return ($this->tuning = $_tuning);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedCapabilityStruct
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