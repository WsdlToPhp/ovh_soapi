<?php
/**
 * File for class OvhStructDedicatedBackupHistoStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedBackupHistoStruct originally named dedicatedBackupHistoStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedBackupHistoStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The backupId
	 * @var int
	 */
	public $backupId;
	/**
	 * The dateTime
	 * @var string
	 */
	public $dateTime;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The error
	 * @var string
	 */
	public $error;
	/**
	 * Constructor method for dedicatedBackupHistoStruct
	 * @see parent::__construct()
	 * @param int $_id
	 * @param int $_backupId
	 * @param string $_dateTime
	 * @param string $_status
	 * @param string $_error
	 * @return OvhStructDedicatedBackupHistoStruct
	 */
	public function __construct($_id = NULL,$_backupId = NULL,$_dateTime = NULL,$_status = NULL,$_error = NULL)
	{
		parent::__construct(array('id'=>$_id,'backupId'=>$_backupId,'dateTime'=>$_dateTime,'status'=>$_status,'error'=>$_error));
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
	 * Get backupId value
	 * @return int|null
	 */
	public function getBackupId()
	{
		return $this->backupId;
	}
	/**
	 * Set backupId value
	 * @param int $_backupId the backupId
	 * @return int
	 */
	public function setBackupId($_backupId)
	{
		return ($this->backupId = $_backupId);
	}
	/**
	 * Get dateTime value
	 * @return string|null
	 */
	public function getDateTime()
	{
		return $this->dateTime;
	}
	/**
	 * Set dateTime value
	 * @param string $_dateTime the dateTime
	 * @return string
	 */
	public function setDateTime($_dateTime)
	{
		return ($this->dateTime = $_dateTime);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedBackupHistoStruct
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