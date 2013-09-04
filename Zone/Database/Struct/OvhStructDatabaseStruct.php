<?php
/**
 * File for class OvhStructDatabaseStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDatabaseStruct originally named databaseStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDatabaseStruct extends OvhWsdlClass
{
	/**
	 * The db
	 * @var string
	 */
	public $db;
	/**
	 * The quota
	 * @var float
	 */
	public $quota;
	/**
	 * The limit
	 * @var float
	 */
	public $limit;
	/**
	 * The version
	 * @var string
	 */
	public $version;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The server
	 * @var string
	 */
	public $server;
	/**
	 * The todo
	 * @var boolean
	 */
	public $todo;
	/**
	 * The quota_warning
	 * @var boolean
	 */
	public $quota_warning;
	/**
	 * Constructor method for databaseStruct
	 * @see parent::__construct()
	 * @param string $_db
	 * @param float $_quota
	 * @param float $_limit
	 * @param string $_version
	 * @param string $_date
	 * @param string $_state
	 * @param string $_type
	 * @param string $_server
	 * @param boolean $_todo
	 * @param boolean $_quota_warning
	 * @return OvhStructDatabaseStruct
	 */
	public function __construct($_db = NULL,$_quota = NULL,$_limit = NULL,$_version = NULL,$_date = NULL,$_state = NULL,$_type = NULL,$_server = NULL,$_todo = NULL,$_quota_warning = NULL)
	{
		parent::__construct(array('db'=>$_db,'quota'=>$_quota,'limit'=>$_limit,'version'=>$_version,'date'=>$_date,'state'=>$_state,'type'=>$_type,'server'=>$_server,'todo'=>$_todo,'quota_warning'=>$_quota_warning));
	}
	/**
	 * Get db value
	 * @return string|null
	 */
	public function getDb()
	{
		return $this->db;
	}
	/**
	 * Set db value
	 * @param string $_db the db
	 * @return string
	 */
	public function setDb($_db)
	{
		return ($this->db = $_db);
	}
	/**
	 * Get quota value
	 * @return float|null
	 */
	public function getQuota()
	{
		return $this->quota;
	}
	/**
	 * Set quota value
	 * @param float $_quota the quota
	 * @return float
	 */
	public function setQuota($_quota)
	{
		return ($this->quota = $_quota);
	}
	/**
	 * Get limit value
	 * @return float|null
	 */
	public function getLimit()
	{
		return $this->limit;
	}
	/**
	 * Set limit value
	 * @param float $_limit the limit
	 * @return float
	 */
	public function setLimit($_limit)
	{
		return ($this->limit = $_limit);
	}
	/**
	 * Get version value
	 * @return string|null
	 */
	public function getVersion()
	{
		return $this->version;
	}
	/**
	 * Set version value
	 * @param string $_version the version
	 * @return string
	 */
	public function setVersion($_version)
	{
		return ($this->version = $_version);
	}
	/**
	 * Get date value
	 * @return string|null
	 */
	public function getDate()
	{
		return $this->date;
	}
	/**
	 * Set date value
	 * @param string $_date the date
	 * @return string
	 */
	public function setDate($_date)
	{
		return ($this->date = $_date);
	}
	/**
	 * Get state value
	 * @return string|null
	 */
	public function getState()
	{
		return $this->state;
	}
	/**
	 * Set state value
	 * @param string $_state the state
	 * @return string
	 */
	public function setState($_state)
	{
		return ($this->state = $_state);
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
	 * Get todo value
	 * @return boolean|null
	 */
	public function getTodo()
	{
		return $this->todo;
	}
	/**
	 * Set todo value
	 * @param boolean $_todo the todo
	 * @return boolean
	 */
	public function setTodo($_todo)
	{
		return ($this->todo = $_todo);
	}
	/**
	 * Get quota_warning value
	 * @return boolean|null
	 */
	public function getQuota_warning()
	{
		return $this->quota_warning;
	}
	/**
	 * Set quota_warning value
	 * @param boolean $_quota_warning the quota_warning
	 * @return boolean
	 */
	public function setQuota_warning($_quota_warning)
	{
		return ($this->quota_warning = $_quota_warning);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDatabaseStruct
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