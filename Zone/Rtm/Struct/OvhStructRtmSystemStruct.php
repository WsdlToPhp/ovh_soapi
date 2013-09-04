<?php
/**
 * File for class OvhStructRtmSystemStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRtmSystemStruct originally named rtmSystemStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRtmSystemStruct extends OvhWsdlClass
{
	/**
	 * The last_update
	 * @var string
	 */
	public $last_update;
	/**
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * The hostname
	 * @var string
	 */
	public $hostname;
	/**
	 * The uptime
	 * @var int
	 */
	public $uptime;
	/**
	 * The freshest_file_date
	 * @var string
	 */
	public $freshest_file_date;
	/**
	 * The os
	 * @var OvhStructRtmSystemOsStruct
	 */
	public $os;
	/**
	 * The rtm
	 * @var OvhStructRtmSystemRtmStruct
	 */
	public $rtm;
	/**
	 * The kernel
	 * @var OvhStructRtmSystemKernelStruct
	 */
	public $kernel;
	/**
	 * Constructor method for rtmSystemStruct
	 * @see parent::__construct()
	 * @param string $_last_update
	 * @param string $_ip
	 * @param string $_hostname
	 * @param int $_uptime
	 * @param string $_freshest_file_date
	 * @param OvhStructRtmSystemOsStruct $_os
	 * @param OvhStructRtmSystemRtmStruct $_rtm
	 * @param OvhStructRtmSystemKernelStruct $_kernel
	 * @return OvhStructRtmSystemStruct
	 */
	public function __construct($_last_update = NULL,$_ip = NULL,$_hostname = NULL,$_uptime = NULL,$_freshest_file_date = NULL,$_os = NULL,$_rtm = NULL,$_kernel = NULL)
	{
		parent::__construct(array('last_update'=>$_last_update,'ip'=>$_ip,'hostname'=>$_hostname,'uptime'=>$_uptime,'freshest_file_date'=>$_freshest_file_date,'os'=>$_os,'rtm'=>$_rtm,'kernel'=>$_kernel));
	}
	/**
	 * Get last_update value
	 * @return string|null
	 */
	public function getLast_update()
	{
		return $this->last_update;
	}
	/**
	 * Set last_update value
	 * @param string $_last_update the last_update
	 * @return string
	 */
	public function setLast_update($_last_update)
	{
		return ($this->last_update = $_last_update);
	}
	/**
	 * Get ip value
	 * @return string|null
	 */
	public function getIp()
	{
		return $this->ip;
	}
	/**
	 * Set ip value
	 * @param string $_ip the ip
	 * @return string
	 */
	public function setIp($_ip)
	{
		return ($this->ip = $_ip);
	}
	/**
	 * Get hostname value
	 * @return string|null
	 */
	public function getHostname()
	{
		return $this->hostname;
	}
	/**
	 * Set hostname value
	 * @param string $_hostname the hostname
	 * @return string
	 */
	public function setHostname($_hostname)
	{
		return ($this->hostname = $_hostname);
	}
	/**
	 * Get uptime value
	 * @return int|null
	 */
	public function getUptime()
	{
		return $this->uptime;
	}
	/**
	 * Set uptime value
	 * @param int $_uptime the uptime
	 * @return int
	 */
	public function setUptime($_uptime)
	{
		return ($this->uptime = $_uptime);
	}
	/**
	 * Get freshest_file_date value
	 * @return string|null
	 */
	public function getFreshest_file_date()
	{
		return $this->freshest_file_date;
	}
	/**
	 * Set freshest_file_date value
	 * @param string $_freshest_file_date the freshest_file_date
	 * @return string
	 */
	public function setFreshest_file_date($_freshest_file_date)
	{
		return ($this->freshest_file_date = $_freshest_file_date);
	}
	/**
	 * Get os value
	 * @return OvhStructRtmSystemOsStruct|null
	 */
	public function getOs()
	{
		return $this->os;
	}
	/**
	 * Set os value
	 * @param OvhStructRtmSystemOsStruct $_os the os
	 * @return OvhStructRtmSystemOsStruct
	 */
	public function setOs($_os)
	{
		return ($this->os = $_os);
	}
	/**
	 * Get rtm value
	 * @return OvhStructRtmSystemRtmStruct|null
	 */
	public function getRtm()
	{
		return $this->rtm;
	}
	/**
	 * Set rtm value
	 * @param OvhStructRtmSystemRtmStruct $_rtm the rtm
	 * @return OvhStructRtmSystemRtmStruct
	 */
	public function setRtm($_rtm)
	{
		return ($this->rtm = $_rtm);
	}
	/**
	 * Get kernel value
	 * @return OvhStructRtmSystemKernelStruct|null
	 */
	public function getKernel()
	{
		return $this->kernel;
	}
	/**
	 * Set kernel value
	 * @param OvhStructRtmSystemKernelStruct $_kernel the kernel
	 * @return OvhStructRtmSystemKernelStruct
	 */
	public function setKernel($_kernel)
	{
		return ($this->kernel = $_kernel);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRtmSystemStruct
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