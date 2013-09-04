<?php
/**
 * File for class OvhStructSqlpriveCronStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructSqlpriveCronStruct originally named sqlpriveCronStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructSqlpriveCronStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The active
	 * @var string
	 */
	public $active;
	/**
	 * The days
	 * @var string
	 */
	public $days;
	/**
	 * The hours
	 * @var string
	 */
	public $hours;
	/**
	 * The operation
	 * @var string
	 */
	public $operation;
	/**
	 * The endDate
	 * @var string
	 */
	public $endDate;
	/**
	 * The comment
	 * @var string
	 */
	public $comment;
	/**
	 * Constructor method for sqlpriveCronStruct
	 * @see parent::__construct()
	 * @param int $_id
	 * @param string $_active
	 * @param string $_days
	 * @param string $_hours
	 * @param string $_operation
	 * @param string $_endDate
	 * @param string $_comment
	 * @return OvhStructSqlpriveCronStruct
	 */
	public function __construct($_id = NULL,$_active = NULL,$_days = NULL,$_hours = NULL,$_operation = NULL,$_endDate = NULL,$_comment = NULL)
	{
		parent::__construct(array('id'=>$_id,'active'=>$_active,'days'=>$_days,'hours'=>$_hours,'operation'=>$_operation,'endDate'=>$_endDate,'comment'=>$_comment));
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
	 * Get active value
	 * @return string|null
	 */
	public function getActive()
	{
		return $this->active;
	}
	/**
	 * Set active value
	 * @param string $_active the active
	 * @return string
	 */
	public function setActive($_active)
	{
		return ($this->active = $_active);
	}
	/**
	 * Get days value
	 * @return string|null
	 */
	public function getDays()
	{
		return $this->days;
	}
	/**
	 * Set days value
	 * @param string $_days the days
	 * @return string
	 */
	public function setDays($_days)
	{
		return ($this->days = $_days);
	}
	/**
	 * Get hours value
	 * @return string|null
	 */
	public function getHours()
	{
		return $this->hours;
	}
	/**
	 * Set hours value
	 * @param string $_hours the hours
	 * @return string
	 */
	public function setHours($_hours)
	{
		return ($this->hours = $_hours);
	}
	/**
	 * Get operation value
	 * @return string|null
	 */
	public function getOperation()
	{
		return $this->operation;
	}
	/**
	 * Set operation value
	 * @param string $_operation the operation
	 * @return string
	 */
	public function setOperation($_operation)
	{
		return ($this->operation = $_operation);
	}
	/**
	 * Get endDate value
	 * @return string|null
	 */
	public function getEndDate()
	{
		return $this->endDate;
	}
	/**
	 * Set endDate value
	 * @param string $_endDate the endDate
	 * @return string
	 */
	public function setEndDate($_endDate)
	{
		return ($this->endDate = $_endDate);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructSqlpriveCronStruct
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