<?php
/**
 * File for class OvhStructSqlpriveCronSet
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructSqlpriveCronSet originally named sqlpriveCronSet
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructSqlpriveCronSet extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The server
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $server;
	/**
	 * The operation
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $operation;
	/**
	 * The recursivityDays
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfStringType
	 */
	public $recursivityDays;
	/**
	 * The recursivityHours
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfStringType
	 */
	public $recursivityHours;
	/**
	 * The endDate
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $endDate;
	/**
	 * The comment
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $comment;
	/**
	 * Constructor method for sqlpriveCronSet
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_server
	 * @param string $_operation
	 * @param OvhStructMyArrayOfStringType $_recursivityDays
	 * @param OvhStructMyArrayOfStringType $_recursivityHours
	 * @param string $_endDate
	 * @param string $_comment
	 * @return OvhStructSqlpriveCronSet
	 */
	public function __construct($_session = NULL,$_server = NULL,$_operation = NULL,$_recursivityDays = NULL,$_recursivityHours = NULL,$_endDate = NULL,$_comment = NULL)
	{
		parent::__construct(array('session'=>$_session,'server'=>$_server,'operation'=>$_operation,'recursivityDays'=>($_recursivityDays instanceof OvhStructMyArrayOfStringType)?$_recursivityDays:new OvhStructMyArrayOfStringType($_recursivityDays),'recursivityHours'=>($_recursivityHours instanceof OvhStructMyArrayOfStringType)?$_recursivityHours:new OvhStructMyArrayOfStringType($_recursivityHours),'endDate'=>$_endDate,'comment'=>$_comment));
	}
	/**
	 * Get session value
	 * @return string|null
	 */
	public function getSession()
	{
		return $this->session;
	}
	/**
	 * Set session value
	 * @param string $_session the session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get server value
	 * @return string|null
	 */
	public function getServer()
	{
		return $this->server;
	}
	/**
	 * Set server value
	 * @param string $_server the server
	 * @return string
	 */
	public function setServer($_server)
	{
		return ($this->server = $_server);
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
	 * Get recursivityDays value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getRecursivityDays()
	{
		return $this->recursivityDays;
	}
	/**
	 * Set recursivityDays value
	 * @param OvhStructMyArrayOfStringType $_recursivityDays the recursivityDays
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setRecursivityDays($_recursivityDays)
	{
		return ($this->recursivityDays = $_recursivityDays);
	}
	/**
	 * Get recursivityHours value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getRecursivityHours()
	{
		return $this->recursivityHours;
	}
	/**
	 * Set recursivityHours value
	 * @param OvhStructMyArrayOfStringType $_recursivityHours the recursivityHours
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setRecursivityHours($_recursivityHours)
	{
		return ($this->recursivityHours = $_recursivityHours);
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
	 * @return OvhStructSqlpriveCronSet
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