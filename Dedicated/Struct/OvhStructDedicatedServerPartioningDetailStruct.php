<?php
/**
 * File for class OvhStructDedicatedServerPartioningDetailStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedServerPartioningDetailStruct originally named dedicatedServerPartioningDetailStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedServerPartioningDetailStruct extends OvhWsdlClass
{
	/**
	 * The partSize
	 * @var string
	 */
	public $partSize;
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The raidType
	 * @var int
	 */
	public $raidType;
	/**
	 * The mountPoint
	 * @var string
	 */
	public $mountPoint;
	/**
	 * The partType
	 * @var string
	 */
	public $partType;
	/**
	 * The fileSystem
	 * @var string
	 */
	public $fileSystem;
	/**
	 * Constructor method for dedicatedServerPartioningDetailStruct
	 * @see parent::__construct()
	 * @param string $_partSize
	 * @param int $_id
	 * @param int $_raidType
	 * @param string $_mountPoint
	 * @param string $_partType
	 * @param string $_fileSystem
	 * @return OvhStructDedicatedServerPartioningDetailStruct
	 */
	public function __construct($_partSize = NULL,$_id = NULL,$_raidType = NULL,$_mountPoint = NULL,$_partType = NULL,$_fileSystem = NULL)
	{
		parent::__construct(array('partSize'=>$_partSize,'id'=>$_id,'raidType'=>$_raidType,'mountPoint'=>$_mountPoint,'partType'=>$_partType,'fileSystem'=>$_fileSystem));
	}
	/**
	 * Get partSize value
	 * @return string|null
	 */
	public function getPartSize()
	{
		return $this->partSize;
	}
	/**
	 * Set partSize value
	 * @param string $_partSize the partSize
	 * @return string
	 */
	public function setPartSize($_partSize)
	{
		return ($this->partSize = $_partSize);
	}
	/**
	 * Get id value
	 * @return int|null
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set id value
	 * @param int $_id the id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get raidType value
	 * @return int|null
	 */
	public function getRaidType()
	{
		return $this->raidType;
	}
	/**
	 * Set raidType value
	 * @param int $_raidType the raidType
	 * @return int
	 */
	public function setRaidType($_raidType)
	{
		return ($this->raidType = $_raidType);
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
	 * Get partType value
	 * @return string|null
	 */
	public function getPartType()
	{
		return $this->partType;
	}
	/**
	 * Set partType value
	 * @param string $_partType the partType
	 * @return string
	 */
	public function setPartType($_partType)
	{
		return ($this->partType = $_partType);
	}
	/**
	 * Get fileSystem value
	 * @return string|null
	 */
	public function getFileSystem()
	{
		return $this->fileSystem;
	}
	/**
	 * Set fileSystem value
	 * @param string $_fileSystem the fileSystem
	 * @return string
	 */
	public function setFileSystem($_fileSystem)
	{
		return ($this->fileSystem = $_fileSystem);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedServerPartioningDetailStruct
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