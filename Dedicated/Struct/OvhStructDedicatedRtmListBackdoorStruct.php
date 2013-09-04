<?php
/**
 * File for class OvhStructDedicatedRtmListBackdoorStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedRtmListBackdoorStruct originally named dedicatedRtmListBackdoorStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedRtmListBackdoorStruct extends OvhWsdlClass
{
	/**
	 * The date_email
	 * @var string
	 */
	public $date_email;
	/**
	 * The date_start
	 * @var string
	 */
	public $date_start;
	/**
	 * The date_end
	 * @var string
	 */
	public $date_end;
	/**
	 * The date_today
	 * @var string
	 */
	public $date_today;
	/**
	 * The id
	 * @var int
	 */
	public $id;
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
	 * The do_not_mail
	 * @var boolean
	 */
	public $do_not_mail;
	/**
	 * The active
	 * @var boolean
	 */
	public $active;
	/**
	 * The status
	 * @var int
	 */
	public $status;
	/**
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The cmdline
	 * @var string
	 */
	public $cmdline;
	/**
	 * The port
	 * @var int
	 */
	public $port;
	/**
	 * The ports
	 * @var string
	 */
	public $ports;
	/**
	 * The procname
	 * @var string
	 */
	public $procname;
	/**
	 * The exe
	 * @var string
	 */
	public $exe;
	/**
	 * Constructor method for dedicatedRtmListBackdoorStruct
	 * @see parent::__construct()
	 * @param string $_date_email
	 * @param string $_date_start
	 * @param string $_date_end
	 * @param string $_date_today
	 * @param int $_id
	 * @param string $_uid
	 * @param int $_pid
	 * @param boolean $_do_not_mail
	 * @param boolean $_active
	 * @param int $_status
	 * @param string $_ip
	 * @param string $_type
	 * @param string $_cmdline
	 * @param int $_port
	 * @param string $_ports
	 * @param string $_procname
	 * @param string $_exe
	 * @return OvhStructDedicatedRtmListBackdoorStruct
	 */
	public function __construct($_date_email = NULL,$_date_start = NULL,$_date_end = NULL,$_date_today = NULL,$_id = NULL,$_uid = NULL,$_pid = NULL,$_do_not_mail = NULL,$_active = NULL,$_status = NULL,$_ip = NULL,$_type = NULL,$_cmdline = NULL,$_port = NULL,$_ports = NULL,$_procname = NULL,$_exe = NULL)
	{
		parent::__construct(array('date_email'=>$_date_email,'date_start'=>$_date_start,'date_end'=>$_date_end,'date_today'=>$_date_today,'id'=>$_id,'uid'=>$_uid,'pid'=>$_pid,'do_not_mail'=>$_do_not_mail,'active'=>$_active,'status'=>$_status,'ip'=>$_ip,'type'=>$_type,'cmdline'=>$_cmdline,'port'=>$_port,'ports'=>$_ports,'procname'=>$_procname,'exe'=>$_exe));
	}
	/**
	 * Get date_email value
	 * @return string|null
	 */
	public function getDate_email()
	{
		return $this->date_email;
	}
	/**
	 * Set date_email value
	 * @param string $_date_email the date_email
	 * @return string
	 */
	public function setDate_email($_date_email)
	{
		return ($this->date_email = $_date_email);
	}
	/**
	 * Get date_start value
	 * @return string|null
	 */
	public function getDate_start()
	{
		return $this->date_start;
	}
	/**
	 * Set date_start value
	 * @param string $_date_start the date_start
	 * @return string
	 */
	public function setDate_start($_date_start)
	{
		return ($this->date_start = $_date_start);
	}
	/**
	 * Get date_end value
	 * @return string|null
	 */
	public function getDate_end()
	{
		return $this->date_end;
	}
	/**
	 * Set date_end value
	 * @param string $_date_end the date_end
	 * @return string
	 */
	public function setDate_end($_date_end)
	{
		return ($this->date_end = $_date_end);
	}
	/**
	 * Get date_today value
	 * @return string|null
	 */
	public function getDate_today()
	{
		return $this->date_today;
	}
	/**
	 * Set date_today value
	 * @param string $_date_today the date_today
	 * @return string
	 */
	public function setDate_today($_date_today)
	{
		return ($this->date_today = $_date_today);
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
	 * Get do_not_mail value
	 * @return boolean|null
	 */
	public function getDo_not_mail()
	{
		return $this->do_not_mail;
	}
	/**
	 * Set do_not_mail value
	 * @param boolean $_do_not_mail the do_not_mail
	 * @return boolean
	 */
	public function setDo_not_mail($_do_not_mail)
	{
		return ($this->do_not_mail = $_do_not_mail);
	}
	/**
	 * Get active value
	 * @return boolean|null
	 */
	public function getActive()
	{
		return $this->active;
	}
	/**
	 * Set active value
	 * @param boolean $_active the active
	 * @return boolean
	 */
	public function setActive($_active)
	{
		return ($this->active = $_active);
	}
	/**
	 * Get status value
	 * @return int|null
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set status value
	 * @param int $_status the status
	 * @return int
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
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
	 * Get type value
	 * @return string|null
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set type value
	 * @param string $_type the type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
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
	 * Get port value
	 * @return int|null
	 */
	public function getPort()
	{
		return $this->port;
	}
	/**
	 * Set port value
	 * @param int $_port the port
	 * @return int
	 */
	public function setPort($_port)
	{
		return ($this->port = $_port);
	}
	/**
	 * Get ports value
	 * @return string|null
	 */
	public function getPorts()
	{
		return $this->ports;
	}
	/**
	 * Set ports value
	 * @param string $_ports the ports
	 * @return string
	 */
	public function setPorts($_ports)
	{
		return ($this->ports = $_ports);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedRtmListBackdoorStruct
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