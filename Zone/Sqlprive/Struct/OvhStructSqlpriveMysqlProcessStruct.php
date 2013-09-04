<?php
/**
 * File for class OvhStructSqlpriveMysqlProcessStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructSqlpriveMysqlProcessStruct originally named sqlpriveMysqlProcessStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructSqlpriveMysqlProcessStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The user
	 * @var string
	 */
	public $user;
	/**
	 * The host
	 * @var string
	 */
	public $host;
	/**
	 * The database
	 * @var string
	 */
	public $database;
	/**
	 * The query
	 * @var string
	 */
	public $query;
	/**
	 * The time
	 * @var string
	 */
	public $time;
	/**
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * The request
	 * @var string
	 */
	public $request;
	/**
	 * Constructor method for sqlpriveMysqlProcessStruct
	 * @see parent::__construct()
	 * @param int $_id
	 * @param string $_user
	 * @param string $_host
	 * @param string $_database
	 * @param string $_query
	 * @param string $_time
	 * @param string $_state
	 * @param string $_request
	 * @return OvhStructSqlpriveMysqlProcessStruct
	 */
	public function __construct($_id = NULL,$_user = NULL,$_host = NULL,$_database = NULL,$_query = NULL,$_time = NULL,$_state = NULL,$_request = NULL)
	{
		parent::__construct(array('id'=>$_id,'user'=>$_user,'host'=>$_host,'database'=>$_database,'query'=>$_query,'time'=>$_time,'state'=>$_state,'request'=>$_request));
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
	 * Get user value
	 * @return string|null
	 */
	public function getUser()
	{
		return $this->user;
	}
	/**
	 * Set user value
	 * @param string $_user the user
	 * @return string
	 */
	public function setUser($_user)
	{
		return ($this->user = $_user);
	}
	/**
	 * Get host value
	 * @return string|null
	 */
	public function getHost()
	{
		return $this->host;
	}
	/**
	 * Set host value
	 * @param string $_host the host
	 * @return string
	 */
	public function setHost($_host)
	{
		return ($this->host = $_host);
	}
	/**
	 * Get database value
	 * @return string|null
	 */
	public function getDatabase()
	{
		return $this->database;
	}
	/**
	 * Set database value
	 * @param string $_database the database
	 * @return string
	 */
	public function setDatabase($_database)
	{
		return ($this->database = $_database);
	}
	/**
	 * Get query value
	 * @return string|null
	 */
	public function getQuery()
	{
		return $this->query;
	}
	/**
	 * Set query value
	 * @param string $_query the query
	 * @return string
	 */
	public function setQuery($_query)
	{
		return ($this->query = $_query);
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
	 * Get request value
	 * @return string|null
	 */
	public function getRequest()
	{
		return $this->request;
	}
	/**
	 * Set request value
	 * @param string $_request the request
	 * @return string
	 */
	public function setRequest($_request)
	{
		return ($this->request = $_request);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructSqlpriveMysqlProcessStruct
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