<?php
/**
 * File for class OvhStructRtmMemoryStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRtmMemoryStruct originally named rtmMemoryStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRtmMemoryStruct extends OvhWsdlClass
{
	/**
	 * The memusage
	 * @var int
	 */
	public $memusage;
	/**
	 * The swapusage
	 * @var int
	 */
	public $swapusage;
	/**
	 * The modules
	 * @var OvhStructMyArrayOfRtmMemoryModuleStructType
	 */
	public $modules;
	/**
	 * Constructor method for rtmMemoryStruct
	 * @see parent::__construct()
	 * @param int $_memusage
	 * @param int $_swapusage
	 * @param OvhStructMyArrayOfRtmMemoryModuleStructType $_modules
	 * @return OvhStructRtmMemoryStruct
	 */
	public function __construct($_memusage = NULL,$_swapusage = NULL,$_modules = NULL)
	{
		parent::__construct(array('memusage'=>$_memusage,'swapusage'=>$_swapusage,'modules'=>($_modules instanceof OvhStructMyArrayOfRtmMemoryModuleStructType)?$_modules:new OvhStructMyArrayOfRtmMemoryModuleStructType($_modules)));
	}
	/**
	 * Get memusage value
	 * @return int|null
	 */
	public function getMemusage()
	{
		return $this->memusage;
	}
	/**
	 * Set memusage value
	 * @param int $_memusage the memusage
	 * @return int
	 */
	public function setMemusage($_memusage)
	{
		return ($this->memusage = $_memusage);
	}
	/**
	 * Get swapusage value
	 * @return int|null
	 */
	public function getSwapusage()
	{
		return $this->swapusage;
	}
	/**
	 * Set swapusage value
	 * @param int $_swapusage the swapusage
	 * @return int
	 */
	public function setSwapusage($_swapusage)
	{
		return ($this->swapusage = $_swapusage);
	}
	/**
	 * Get modules value
	 * @return OvhStructMyArrayOfRtmMemoryModuleStructType|null
	 */
	public function getModules()
	{
		return $this->modules;
	}
	/**
	 * Set modules value
	 * @param OvhStructMyArrayOfRtmMemoryModuleStructType $_modules the modules
	 * @return OvhStructMyArrayOfRtmMemoryModuleStructType
	 */
	public function setModules($_modules)
	{
		return ($this->modules = $_modules);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRtmMemoryStruct
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