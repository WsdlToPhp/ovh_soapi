<?php
/**
 * File for class OvhStructDedicatedBasicInstallProgressStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedBasicInstallProgressStruct originally named dedicatedBasicInstallProgressStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedBasicInstallProgressStruct extends OvhWsdlClass
{
	/**
	 * The step
	 * @var int
	 */
	public $step;
	/**
	 * The comment
	 * @var string
	 */
	public $comment;
	/**
	 * The time
	 * @var string
	 */
	public $time;
	/**
	 * The error
	 * @var string
	 */
	public $error;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * Constructor method for dedicatedBasicInstallProgressStruct
	 * @see parent::__construct()
	 * @param int $_step
	 * @param string $_comment
	 * @param string $_time
	 * @param string $_error
	 * @param string $_status
	 * @return OvhStructDedicatedBasicInstallProgressStruct
	 */
	public function __construct($_step = NULL,$_comment = NULL,$_time = NULL,$_error = NULL,$_status = NULL)
	{
		parent::__construct(array('step'=>$_step,'comment'=>$_comment,'time'=>$_time,'error'=>$_error,'status'=>$_status));
	}
	/**
	 * Get step value
	 * @return int|null
	 */
	public function getStep()
	{
		return $this->step;
	}
	/**
	 * Set step value
	 * @param int $_step the step
	 * @return int
	 */
	public function setStep($_step)
	{
		return ($this->step = $_step);
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
	 * @return string|null
	 */
	public function getTime()
	{
		return $this->time;
	}
	/**
	 * Set time value
	 * @param string $_time the time
	 * @return string
	 */
	public function setTime($_time)
	{
		return ($this->time = $_time);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedBasicInstallProgressStruct
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