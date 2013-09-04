<?php
/**
 * File for class OvhStructRtmCpuLoadAvgStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRtmCpuLoadAvgStruct originally named rtmCpuLoadAvgStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRtmCpuLoadAvgStruct extends OvhWsdlClass
{
	/**
	 * The loadavg1
	 * @var string
	 */
	public $loadavg1;
	/**
	 * The loadavg5
	 * @var string
	 */
	public $loadavg5;
	/**
	 * The loadavg15
	 * @var string
	 */
	public $loadavg15;
	/**
	 * Constructor method for rtmCpuLoadAvgStruct
	 * @see parent::__construct()
	 * @param string $_loadavg1
	 * @param string $_loadavg5
	 * @param string $_loadavg15
	 * @return OvhStructRtmCpuLoadAvgStruct
	 */
	public function __construct($_loadavg1 = NULL,$_loadavg5 = NULL,$_loadavg15 = NULL)
	{
		parent::__construct(array('loadavg1'=>$_loadavg1,'loadavg5'=>$_loadavg5,'loadavg15'=>$_loadavg15));
	}
	/**
	 * Get loadavg1 value
	 * @return string|null
	 */
	public function getLoadavg1()
	{
		return $this->loadavg1;
	}
	/**
	 * Set loadavg1 value
	 * @param string $_loadavg1 the loadavg1
	 * @return string
	 */
	public function setLoadavg1($_loadavg1)
	{
		return ($this->loadavg1 = $_loadavg1);
	}
	/**
	 * Get loadavg5 value
	 * @return string|null
	 */
	public function getLoadavg5()
	{
		return $this->loadavg5;
	}
	/**
	 * Set loadavg5 value
	 * @param string $_loadavg5 the loadavg5
	 * @return string
	 */
	public function setLoadavg5($_loadavg5)
	{
		return ($this->loadavg5 = $_loadavg5);
	}
	/**
	 * Get loadavg15 value
	 * @return string|null
	 */
	public function getLoadavg15()
	{
		return $this->loadavg15;
	}
	/**
	 * Set loadavg15 value
	 * @param string $_loadavg15 the loadavg15
	 * @return string
	 */
	public function setLoadavg15($_loadavg15)
	{
		return ($this->loadavg15 = $_loadavg15);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRtmCpuLoadAvgStruct
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