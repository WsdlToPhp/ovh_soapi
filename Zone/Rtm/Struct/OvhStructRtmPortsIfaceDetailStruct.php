<?php
/**
 * File for class OvhStructRtmPortsIfaceDetailStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRtmPortsIfaceDetailStruct originally named rtmPortsIfaceDetailStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRtmPortsIfaceDetailStruct extends OvhWsdlClass
{
	/**
	 * The port
	 * @var string
	 */
	public $port;
	/**
	 * The procname
	 * @var string
	 */
	public $procname;
	/**
	 * The uid
	 * @var string
	 */
	public $uid;
	/**
	 * The pid
	 * @var int
	 */
	public $pid;
	/**
	 * The cmdline
	 * @var string
	 */
	public $cmdline;
	/**
	 * The exe
	 * @var string
	 */
	public $exe;
	/**
	 * The username
	 * @var string
	 */
	public $username;
	/**
	 * Constructor method for rtmPortsIfaceDetailStruct
	 * @see parent::__construct()
	 * @param string $_port
	 * @param string $_procname
	 * @param string $_uid
	 * @param int $_pid
	 * @param string $_cmdline
	 * @param string $_exe
	 * @param string $_username
	 * @return OvhStructRtmPortsIfaceDetailStruct
	 */
	public function __construct($_port = NULL,$_procname = NULL,$_uid = NULL,$_pid = NULL,$_cmdline = NULL,$_exe = NULL,$_username = NULL)
	{
		parent::__construct(array('port'=>$_port,'procname'=>$_procname,'uid'=>$_uid,'pid'=>$_pid,'cmdline'=>$_cmdline,'exe'=>$_exe,'username'=>$_username));
	}
	/**
	 * Get port value
	 * @return string|null
	 */
	public function getPort()
	{
		return $this->port;
	}
	/**
	 * Set port value
	 * @param string $_port the port
	 * @return string
	 */
	public function setPort($_port)
	{
		return ($this->port = $_port);
	}
	/**
	 * Get procname value
	 * @return string|null
	 */
	public function getProcname()
	{
		return $this->procname;
	}
	/**
	 * Set procname value
	 * @param string $_procname the procname
	 * @return string
	 */
	public function setProcname($_procname)
	{
		return ($this->procname = $_procname);
	}
	/**
	 * Get uid value
	 * @return string|null
	 */
	public function getUid()
	{
		return $this->uid;
	}
	/**
	 * Set uid value
	 * @param string $_uid the uid
	 * @return string
	 */
	public function setUid($_uid)
	{
		return ($this->uid = $_uid);
	}
	/**
	 * Get pid value
	 * @return int|null
	 */
	public function getPid()
	{
		return $this->pid;
	}
	/**
	 * Set pid value
	 * @param int $_pid the pid
	 * @return int
	 */
	public function setPid($_pid)
	{
		return ($this->pid = $_pid);
	}
	/**
	 * Get cmdline value
	 * @return string|null
	 */
	public function getCmdline()
	{
		return $this->cmdline;
	}
	/**
	 * Set cmdline value
	 * @param string $_cmdline the cmdline
	 * @return string
	 */
	public function setCmdline($_cmdline)
	{
		return ($this->cmdline = $_cmdline);
	}
	/**
	 * Get exe value
	 * @return string|null
	 */
	public function getExe()
	{
		return $this->exe;
	}
	/**
	 * Set exe value
	 * @param string $_exe the exe
	 * @return string
	 */
	public function setExe($_exe)
	{
		return ($this->exe = $_exe);
	}
	/**
	 * Get username value
	 * @return string|null
	 */
	public function getUsername()
	{
		return $this->username;
	}
	/**
	 * Set username value
	 * @param string $_username the username
	 * @return string
	 */
	public function setUsername($_username)
	{
		return ($this->username = $_username);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRtmPortsIfaceDetailStruct
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