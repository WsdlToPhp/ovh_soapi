<?php
/**
 * File for class OvhStructDedicatedInstallConfigurationStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedInstallConfigurationStruct originally named dedicatedInstallConfigurationStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedInstallConfigurationStruct extends OvhWsdlClass
{
	/**
	 * The pendingDate
	 * @var string
	 */
	public $pendingDate;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The stageId
	 * @var int
	 */
	public $stageId;
	/**
	 * The serverName
	 * @var string
	 */
	public $serverName;
	/**
	 * The parameters
	 * @var OvhStructDedicatedInstallConfigurationParametersStruct
	 */
	public $parameters;
	/**
	 * The todoDate
	 * @var string
	 */
	public $todoDate;
	/**
	 * The doingDate
	 * @var string
	 */
	public $doingDate;
	/**
	 * The error
	 * @var string
	 */
	public $error;
	/**
	 * The action
	 * @var string
	 */
	public $action;
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The doneDate
	 * @var string
	 */
	public $doneDate;
	/**
	 * Constructor method for dedicatedInstallConfigurationStruct
	 * @see parent::__construct()
	 * @param string $_pendingDate
	 * @param string $_status
	 * @param int $_stageId
	 * @param string $_serverName
	 * @param OvhStructDedicatedInstallConfigurationParametersStruct $_parameters
	 * @param string $_todoDate
	 * @param string $_doingDate
	 * @param string $_error
	 * @param string $_action
	 * @param int $_id
	 * @param string $_doneDate
	 * @return OvhStructDedicatedInstallConfigurationStruct
	 */
	public function __construct($_pendingDate = NULL,$_status = NULL,$_stageId = NULL,$_serverName = NULL,$_parameters = NULL,$_todoDate = NULL,$_doingDate = NULL,$_error = NULL,$_action = NULL,$_id = NULL,$_doneDate = NULL)
	{
		parent::__construct(array('pendingDate'=>$_pendingDate,'status'=>$_status,'stageId'=>$_stageId,'serverName'=>$_serverName,'parameters'=>$_parameters,'todoDate'=>$_todoDate,'doingDate'=>$_doingDate,'error'=>$_error,'action'=>$_action,'id'=>$_id,'doneDate'=>$_doneDate));
	}
	/**
	 * Get pendingDate value
	 * @return string|null
	 */
	public function getPendingDate()
	{
		return $this->pendingDate;
	}
	/**
	 * Set pendingDate value
	 * @param string $_pendingDate the pendingDate
	 * @return string
	 */
	public function setPendingDate($_pendingDate)
	{
		return ($this->pendingDate = $_pendingDate);
	}
	/**
	 * Get status value
	 * @return string|null
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set status value
	 * @param string $_status the status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get stageId value
	 * @return int|null
	 */
	public function getStageId()
	{
		return $this->stageId;
	}
	/**
	 * Set stageId value
	 * @param int $_stageId the stageId
	 * @return int
	 */
	public function setStageId($_stageId)
	{
		return ($this->stageId = $_stageId);
	}
	/**
	 * Get serverName value
	 * @return string|null
	 */
	public function getServerName()
	{
		return $this->serverName;
	}
	/**
	 * Set serverName value
	 * @param string $_serverName the serverName
	 * @return string
	 */
	public function setServerName($_serverName)
	{
		return ($this->serverName = $_serverName);
	}
	/**
	 * Get parameters value
	 * @return OvhStructDedicatedInstallConfigurationParametersStruct|null
	 */
	public function getParameters()
	{
		return $this->parameters;
	}
	/**
	 * Set parameters value
	 * @param OvhStructDedicatedInstallConfigurationParametersStruct $_parameters the parameters
	 * @return OvhStructDedicatedInstallConfigurationParametersStruct
	 */
	public function setParameters($_parameters)
	{
		return ($this->parameters = $_parameters);
	}
	/**
	 * Get todoDate value
	 * @return string|null
	 */
	public function getTodoDate()
	{
		return $this->todoDate;
	}
	/**
	 * Set todoDate value
	 * @param string $_todoDate the todoDate
	 * @return string
	 */
	public function setTodoDate($_todoDate)
	{
		return ($this->todoDate = $_todoDate);
	}
	/**
	 * Get doingDate value
	 * @return string|null
	 */
	public function getDoingDate()
	{
		return $this->doingDate;
	}
	/**
	 * Set doingDate value
	 * @param string $_doingDate the doingDate
	 * @return string
	 */
	public function setDoingDate($_doingDate)
	{
		return ($this->doingDate = $_doingDate);
	}
	/**
	 * Get error value
	 * @return string|null
	 */
	public function getError()
	{
		return $this->error;
	}
	/**
	 * Set error value
	 * @param string $_error the error
	 * @return string
	 */
	public function setError($_error)
	{
		return ($this->error = $_error);
	}
	/**
	 * Get action value
	 * @return string|null
	 */
	public function getAction()
	{
		return $this->action;
	}
	/**
	 * Set action value
	 * @param string $_action the action
	 * @return string
	 */
	public function setAction($_action)
	{
		return ($this->action = $_action);
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
	 * Get doneDate value
	 * @return string|null
	 */
	public function getDoneDate()
	{
		return $this->doneDate;
	}
	/**
	 * Set doneDate value
	 * @param string $_doneDate the doneDate
	 * @return string
	 */
	public function setDoneDate($_doneDate)
	{
		return ($this->doneDate = $_doneDate);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedInstallConfigurationStruct
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