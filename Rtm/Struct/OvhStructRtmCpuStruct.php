<?php
/**
 * File for class OvhStructRtmCpuStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRtmCpuStruct originally named rtmCpuStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRtmCpuStruct extends OvhWsdlClass
{
	/**
	 * The frequency
	 * @var string
	 */
	public $frequency;
	/**
	 * The core
	 * @var int
	 */
	public $core;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The cache
	 * @var string
	 */
	public $cache;
	/**
	 * The percentLoad
	 * @var int
	 */
	public $percentLoad;
	/**
	 * The loadAvg
	 * @var OvhStructRtmCpuLoadAvgStruct
	 */
	public $loadAvg;
	/**
	 * Constructor method for rtmCpuStruct
	 * @see parent::__construct()
	 * @param string $_frequency
	 * @param int $_core
	 * @param string $_name
	 * @param string $_cache
	 * @param int $_percentLoad
	 * @param OvhStructRtmCpuLoadAvgStruct $_loadAvg
	 * @return OvhStructRtmCpuStruct
	 */
	public function __construct($_frequency = NULL,$_core = NULL,$_name = NULL,$_cache = NULL,$_percentLoad = NULL,$_loadAvg = NULL)
	{
		parent::__construct(array('frequency'=>$_frequency,'core'=>$_core,'name'=>$_name,'cache'=>$_cache,'percentLoad'=>$_percentLoad,'loadAvg'=>$_loadAvg));
	}
	/**
	 * Get frequency value
	 * @return string|null
	 */
	public function getFrequency()
	{
		return $this->frequency;
	}
	/**
	 * Set frequency value
	 * @param string $_frequency the frequency
	 * @return string
	 */
	public function setFrequency($_frequency)
	{
		return ($this->frequency = $_frequency);
	}
	/**
	 * Get core value
	 * @return int|null
	 */
	public function getCore()
	{
		return $this->core;
	}
	/**
	 * Set core value
	 * @param int $_core the core
	 * @return int
	 */
	public function setCore($_core)
	{
		return ($this->core = $_core);
	}
	/**
	 * Get name value
	 * @return string|null
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set name value
	 * @param string $_name the name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get cache value
	 * @return string|null
	 */
	public function getCache()
	{
		return $this->cache;
	}
	/**
	 * Set cache value
	 * @param string $_cache the cache
	 * @return string
	 */
	public function setCache($_cache)
	{
		return ($this->cache = $_cache);
	}
	/**
	 * Get percentLoad value
	 * @return int|null
	 */
	public function getPercentLoad()
	{
		return $this->percentLoad;
	}
	/**
	 * Set percentLoad value
	 * @param int $_percentLoad the percentLoad
	 * @return int
	 */
	public function setPercentLoad($_percentLoad)
	{
		return ($this->percentLoad = $_percentLoad);
	}
	/**
	 * Get loadAvg value
	 * @return OvhStructRtmCpuLoadAvgStruct|null
	 */
	public function getLoadAvg()
	{
		return $this->loadAvg;
	}
	/**
	 * Set loadAvg value
	 * @param OvhStructRtmCpuLoadAvgStruct $_loadAvg the loadAvg
	 * @return OvhStructRtmCpuLoadAvgStruct
	 */
	public function setLoadAvg($_loadAvg)
	{
		return ($this->loadAvg = $_loadAvg);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRtmCpuStruct
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