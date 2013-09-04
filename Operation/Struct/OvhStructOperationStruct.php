<?php
/**
 * File for class OvhStructOperationStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructOperationStruct originally named operationStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructOperationStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The function
	 * @var string
	 */
	public $function;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The internalStatus
	 * @var string
	 */
	public $internalStatus;
	/**
	 * The comment
	 * @var string
	 */
	public $comment;
	/**
	 * The users
	 * @var OvhStructMyArrayOfStringType
	 */
	public $users;
	/**
	 * The retry
	 * @var int
	 */
	public $retry;
	/**
	 * The todoDate
	 * @var string
	 */
	public $todoDate;
	/**
	 * The lastUpdate
	 * @var string
	 */
	public $lastUpdate;
	/**
	 * The doneDate
	 * @var string
	 */
	public $doneDate;
	/**
	 * The canCancel
	 * @var boolean
	 */
	public $canCancel;
	/**
	 * The canCorrect
	 * @var boolean
	 */
	public $canCorrect;
	/**
	 * The canRelaunch
	 * @var boolean
	 */
	public $canRelaunch;
	/**
	 * The restartStep
	 * @var string
	 */
	public $restartStep;
	/**
	 * Constructor method for operationStruct
	 * @see parent::__construct()
	 * @param int $_id
	 * @param string $_domain
	 * @param string $_function
	 * @param string $_status
	 * @param string $_internalStatus
	 * @param string $_comment
	 * @param OvhStructMyArrayOfStringType $_users
	 * @param int $_retry
	 * @param string $_todoDate
	 * @param string $_lastUpdate
	 * @param string $_doneDate
	 * @param boolean $_canCancel
	 * @param boolean $_canCorrect
	 * @param boolean $_canRelaunch
	 * @param string $_restartStep
	 * @return OvhStructOperationStruct
	 */
	public function __construct($_id = NULL,$_domain = NULL,$_function = NULL,$_status = NULL,$_internalStatus = NULL,$_comment = NULL,$_users = NULL,$_retry = NULL,$_todoDate = NULL,$_lastUpdate = NULL,$_doneDate = NULL,$_canCancel = NULL,$_canCorrect = NULL,$_canRelaunch = NULL,$_restartStep = NULL)
	{
		parent::__construct(array('id'=>$_id,'domain'=>$_domain,'function'=>$_function,'status'=>$_status,'internalStatus'=>$_internalStatus,'comment'=>$_comment,'users'=>($_users instanceof OvhStructMyArrayOfStringType)?$_users:new OvhStructMyArrayOfStringType($_users),'retry'=>$_retry,'todoDate'=>$_todoDate,'lastUpdate'=>$_lastUpdate,'doneDate'=>$_doneDate,'canCancel'=>$_canCancel,'canCorrect'=>$_canCorrect,'canRelaunch'=>$_canRelaunch,'restartStep'=>$_restartStep));
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
	 * Get domain value
	 * @return string|null
	 */
	public function getDomain()
	{
		return $this->domain;
	}
	/**
	 * Set domain value
	 * @param string $_domain the domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get function value
	 * @return string|null
	 */
	public function getFunction()
	{
		return $this->function;
	}
	/**
	 * Set function value
	 * @param string $_function the function
	 * @return string
	 */
	public function setFunction($_function)
	{
		return ($this->function = $_function);
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
	 * Get internalStatus value
	 * @return string|null
	 */
	public function getInternalStatus()
	{
		return $this->internalStatus;
	}
	/**
	 * Set internalStatus value
	 * @param string $_internalStatus the internalStatus
	 * @return string
	 */
	public function setInternalStatus($_internalStatus)
	{
		return ($this->internalStatus = $_internalStatus);
	}
	/**
	 * Get comment value
	 * @return string|null
	 */
	public function getComment()
	{
		return $this->comment;
	}
	/**
	 * Set comment value
	 * @param string $_comment the comment
	 * @return string
	 */
	public function setComment($_comment)
	{
		return ($this->comment = $_comment);
	}
	/**
	 * Get users value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getUsers()
	{
		return $this->users;
	}
	/**
	 * Set users value
	 * @param OvhStructMyArrayOfStringType $_users the users
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setUsers($_users)
	{
		return ($this->users = $_users);
	}
	/**
	 * Get retry value
	 * @return int|null
	 */
	public function getRetry()
	{
		return $this->retry;
	}
	/**
	 * Set retry value
	 * @param int $_retry the retry
	 * @return int
	 */
	public function setRetry($_retry)
	{
		return ($this->retry = $_retry);
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
	 * Get lastUpdate value
	 * @return string|null
	 */
	public function getLastUpdate()
	{
		return $this->lastUpdate;
	}
	/**
	 * Set lastUpdate value
	 * @param string $_lastUpdate the lastUpdate
	 * @return string
	 */
	public function setLastUpdate($_lastUpdate)
	{
		return ($this->lastUpdate = $_lastUpdate);
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
	 * Get canCancel value
	 * @return boolean|null
	 */
	public function getCanCancel()
	{
		return $this->canCancel;
	}
	/**
	 * Set canCancel value
	 * @param boolean $_canCancel the canCancel
	 * @return boolean
	 */
	public function setCanCancel($_canCancel)
	{
		return ($this->canCancel = $_canCancel);
	}
	/**
	 * Get canCorrect value
	 * @return boolean|null
	 */
	public function getCanCorrect()
	{
		return $this->canCorrect;
	}
	/**
	 * Set canCorrect value
	 * @param boolean $_canCorrect the canCorrect
	 * @return boolean
	 */
	public function setCanCorrect($_canCorrect)
	{
		return ($this->canCorrect = $_canCorrect);
	}
	/**
	 * Get canRelaunch value
	 * @return boolean|null
	 */
	public function getCanRelaunch()
	{
		return $this->canRelaunch;
	}
	/**
	 * Set canRelaunch value
	 * @param boolean $_canRelaunch the canRelaunch
	 * @return boolean
	 */
	public function setCanRelaunch($_canRelaunch)
	{
		return ($this->canRelaunch = $_canRelaunch);
	}
	/**
	 * Get restartStep value
	 * @return string|null
	 */
	public function getRestartStep()
	{
		return $this->restartStep;
	}
	/**
	 * Set restartStep value
	 * @param string $_restartStep the restartStep
	 * @return string
	 */
	public function setRestartStep($_restartStep)
	{
		return ($this->restartStep = $_restartStep);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructOperationStruct
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