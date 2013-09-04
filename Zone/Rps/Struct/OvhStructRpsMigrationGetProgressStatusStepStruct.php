<?php
/**
 * File for class OvhStructRpsMigrationGetProgressStatusStepStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRpsMigrationGetProgressStatusStepStruct originally named rpsMigrationGetProgressStatusStepStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRpsMigrationGetProgressStatusStepStruct extends OvhWsdlClass
{
	/**
	 * The comment
	 * @var string
	 */
	public $comment;
	/**
	 * The time
	 * @var int
	 */
	public $time;
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
	 * Constructor method for rpsMigrationGetProgressStatusStepStruct
	 * @see parent::__construct()
	 * @param string $_comment
	 * @param int $_time
	 * @param string $_status
	 * @param string $_error
	 * @return OvhStructRpsMigrationGetProgressStatusStepStruct
	 */
	public function __construct($_comment = NULL,$_time = NULL,$_status = NULL,$_error = NULL)
	{
		parent::__construct(array('comment'=>$_comment,'time'=>$_time,'status'=>$_status,'error'=>$_error));
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
	 * Get time value
	 * @return int|null
	 */
	public function getTime()
	{
		return $this->time;
	}
	/**
	 * Set time value
	 * @param int $_time the time
	 * @return int
	 */
	public function setTime($_time)
	{
		return ($this->time = $_time);
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
	 * @return OvhStructRpsMigrationGetProgressStatusStepStruct
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