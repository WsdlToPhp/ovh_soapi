<?php
/**
 * File for class OvhStructRpsMigrationStatusReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRpsMigrationStatusReturn originally named rpsMigrationStatusReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRpsMigrationStatusReturn extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The progressStatus
	 * @var int
	 */
	public $progressStatus;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The logicalRpsName
	 * @var string
	 */
	public $logicalRpsName;
	/**
	 * The physicalRpsTo
	 * @var string
	 */
	public $physicalRpsTo;
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
	 * The doneDate
	 * @var string
	 */
	public $doneDate;
	/**
	 * The errorMessage
	 * @var string
	 */
	public $errorMessage;
	/**
	 * Constructor method for rpsMigrationStatusReturn
	 * @see parent::__construct()
	 * @param int $_id
	 * @param int $_progressStatus
	 * @param string $_status
	 * @param string $_logicalRpsName
	 * @param string $_physicalRpsTo
	 * @param string $_todoDate
	 * @param string $_doingDate
	 * @param string $_doneDate
	 * @param string $_errorMessage
	 * @return OvhStructRpsMigrationStatusReturn
	 */
	public function __construct($_id = NULL,$_progressStatus = NULL,$_status = NULL,$_logicalRpsName = NULL,$_physicalRpsTo = NULL,$_todoDate = NULL,$_doingDate = NULL,$_doneDate = NULL,$_errorMessage = NULL)
	{
		parent::__construct(array('id'=>$_id,'progressStatus'=>$_progressStatus,'status'=>$_status,'logicalRpsName'=>$_logicalRpsName,'physicalRpsTo'=>$_physicalRpsTo,'todoDate'=>$_todoDate,'doingDate'=>$_doingDate,'doneDate'=>$_doneDate,'errorMessage'=>$_errorMessage));
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
	 * Get progressStatus value
	 * @return int|null
	 */
	public function getProgressStatus()
	{
		return $this->progressStatus;
	}
	/**
	 * Set progressStatus value
	 * @param int $_progressStatus the progressStatus
	 * @return int
	 */
	public function setProgressStatus($_progressStatus)
	{
		return ($this->progressStatus = $_progressStatus);
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
	 * Get logicalRpsName value
	 * @return string|null
	 */
	public function getLogicalRpsName()
	{
		return $this->logicalRpsName;
	}
	/**
	 * Set logicalRpsName value
	 * @param string $_logicalRpsName the logicalRpsName
	 * @return string
	 */
	public function setLogicalRpsName($_logicalRpsName)
	{
		return ($this->logicalRpsName = $_logicalRpsName);
	}
	/**
	 * Get physicalRpsTo value
	 * @return string|null
	 */
	public function getPhysicalRpsTo()
	{
		return $this->physicalRpsTo;
	}
	/**
	 * Set physicalRpsTo value
	 * @param string $_physicalRpsTo the physicalRpsTo
	 * @return string
	 */
	public function setPhysicalRpsTo($_physicalRpsTo)
	{
		return ($this->physicalRpsTo = $_physicalRpsTo);
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
	 * Get errorMessage value
	 * @return string|null
	 */
	public function getErrorMessage()
	{
		return $this->errorMessage;
	}
	/**
	 * Set errorMessage value
	 * @param string $_errorMessage the errorMessage
	 * @return string
	 */
	public function setErrorMessage($_errorMessage)
	{
		return ($this->errorMessage = $_errorMessage);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRpsMigrationStatusReturn
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