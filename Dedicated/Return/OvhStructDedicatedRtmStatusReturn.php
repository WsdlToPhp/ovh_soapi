<?php
/**
 * File for class OvhStructDedicatedRtmStatusReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedRtmStatusReturn originally named dedicatedRtmStatusReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedRtmStatusReturn extends OvhWsdlClass
{
	/**
	 * The cpu
	 * @var OvhStructRtmCpuStruct
	 */
	public $cpu;
	/**
	 * The hardDrives
	 * @var OvhStructMyArrayOfRtmHddStructType
	 */
	public $hardDrives;
	/**
	 * The systemInfo
	 * @var OvhStructRtmSystemStruct
	 */
	public $systemInfo;
	/**
	 * The memory
	 * @var OvhStructRtmMemoryStruct
	 */
	public $memory;
	/**
	 * The motherboard
	 * @var OvhStructRtmMotherboardStruct
	 */
	public $motherboard;
	/**
	 * The lspci
	 * @var OvhStructMyArrayOfRtmLspciStructType
	 */
	public $lspci;
	/**
	 * The portsUsed
	 * @var OvhStructRtmPortsStruct
	 */
	public $portsUsed;
	/**
	 * The raid
	 * @var OvhStructRtmRaidStruct
	 */
	public $raid;
	/**
	 * Constructor method for dedicatedRtmStatusReturn
	 * @see parent::__construct()
	 * @param OvhStructRtmCpuStruct $_cpu
	 * @param OvhStructMyArrayOfRtmHddStructType $_hardDrives
	 * @param OvhStructRtmSystemStruct $_systemInfo
	 * @param OvhStructRtmMemoryStruct $_memory
	 * @param OvhStructRtmMotherboardStruct $_motherboard
	 * @param OvhStructMyArrayOfRtmLspciStructType $_lspci
	 * @param OvhStructRtmPortsStruct $_portsUsed
	 * @param OvhStructRtmRaidStruct $_raid
	 * @return OvhStructDedicatedRtmStatusReturn
	 */
	public function __construct($_cpu = NULL,$_hardDrives = NULL,$_systemInfo = NULL,$_memory = NULL,$_motherboard = NULL,$_lspci = NULL,$_portsUsed = NULL,$_raid = NULL)
	{
		parent::__construct(array('cpu'=>$_cpu,'hardDrives'=>($_hardDrives instanceof OvhStructMyArrayOfRtmHddStructType)?$_hardDrives:new OvhStructMyArrayOfRtmHddStructType($_hardDrives),'systemInfo'=>$_systemInfo,'memory'=>$_memory,'motherboard'=>$_motherboard,'lspci'=>($_lspci instanceof OvhStructMyArrayOfRtmLspciStructType)?$_lspci:new OvhStructMyArrayOfRtmLspciStructType($_lspci),'portsUsed'=>$_portsUsed,'raid'=>$_raid));
	}
	/**
	 * Get cpu value
	 * @return OvhStructRtmCpuStruct|null
	 */
	public function getCpu()
	{
		return $this->cpu;
	}
	/**
	 * Set cpu value
	 * @param OvhStructRtmCpuStruct $_cpu the cpu
	 * @return OvhStructRtmCpuStruct
	 */
	public function setCpu($_cpu)
	{
		return ($this->cpu = $_cpu);
	}
	/**
	 * Get hardDrives value
	 * @return OvhStructMyArrayOfRtmHddStructType|null
	 */
	public function getHardDrives()
	{
		return $this->hardDrives;
	}
	/**
	 * Set hardDrives value
	 * @param OvhStructMyArrayOfRtmHddStructType $_hardDrives the hardDrives
	 * @return OvhStructMyArrayOfRtmHddStructType
	 */
	public function setHardDrives($_hardDrives)
	{
		return ($this->hardDrives = $_hardDrives);
	}
	/**
	 * Get systemInfo value
	 * @return OvhStructRtmSystemStruct|null
	 */
	public function getSystemInfo()
	{
		return $this->systemInfo;
	}
	/**
	 * Set systemInfo value
	 * @param OvhStructRtmSystemStruct $_systemInfo the systemInfo
	 * @return OvhStructRtmSystemStruct
	 */
	public function setSystemInfo($_systemInfo)
	{
		return ($this->systemInfo = $_systemInfo);
	}
	/**
	 * Get memory value
	 * @return OvhStructRtmMemoryStruct|null
	 */
	public function getMemory()
	{
		return $this->memory;
	}
	/**
	 * Set memory value
	 * @param OvhStructRtmMemoryStruct $_memory the memory
	 * @return OvhStructRtmMemoryStruct
	 */
	public function setMemory($_memory)
	{
		return ($this->memory = $_memory);
	}
	/**
	 * Get motherboard value
	 * @return OvhStructRtmMotherboardStruct|null
	 */
	public function getMotherboard()
	{
		return $this->motherboard;
	}
	/**
	 * Set motherboard value
	 * @param OvhStructRtmMotherboardStruct $_motherboard the motherboard
	 * @return OvhStructRtmMotherboardStruct
	 */
	public function setMotherboard($_motherboard)
	{
		return ($this->motherboard = $_motherboard);
	}
	/**
	 * Get lspci value
	 * @return OvhStructMyArrayOfRtmLspciStructType|null
	 */
	public function getLspci()
	{
		return $this->lspci;
	}
	/**
	 * Set lspci value
	 * @param OvhStructMyArrayOfRtmLspciStructType $_lspci the lspci
	 * @return OvhStructMyArrayOfRtmLspciStructType
	 */
	public function setLspci($_lspci)
	{
		return ($this->lspci = $_lspci);
	}
	/**
	 * Get portsUsed value
	 * @return OvhStructRtmPortsStruct|null
	 */
	public function getPortsUsed()
	{
		return $this->portsUsed;
	}
	/**
	 * Set portsUsed value
	 * @param OvhStructRtmPortsStruct $_portsUsed the portsUsed
	 * @return OvhStructRtmPortsStruct
	 */
	public function setPortsUsed($_portsUsed)
	{
		return ($this->portsUsed = $_portsUsed);
	}
	/**
	 * Get raid value
	 * @return OvhStructRtmRaidStruct|null
	 */
	public function getRaid()
	{
		return $this->raid;
	}
	/**
	 * Set raid value
	 * @param OvhStructRtmRaidStruct $_raid the raid
	 * @return OvhStructRtmRaidStruct
	 */
	public function setRaid($_raid)
	{
		return ($this->raid = $_raid);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedRtmStatusReturn
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