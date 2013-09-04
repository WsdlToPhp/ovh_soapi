<?php
/**
 * File for class OvhStructSqlpriveMysqlDatabaseSave
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructSqlpriveMysqlDatabaseSave originally named sqlpriveMysqlDatabaseSave
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructSqlpriveMysqlDatabaseSave extends OvhWsdlClass
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
	 * The database
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $database;
	/**
	 * The comment
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $comment;
	/**
	 * The compress
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $compress;
	/**
	 * Constructor method for sqlpriveMysqlDatabaseSave
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_server
	 * @param string $_database
	 * @param string $_comment
	 * @param boolean $_compress
	 * @return OvhStructSqlpriveMysqlDatabaseSave
	 */
	public function __construct($_session = NULL,$_server = NULL,$_database = NULL,$_comment = NULL,$_compress = NULL)
	{
		parent::__construct(array('session'=>$_session,'server'=>$_server,'database'=>$_database,'comment'=>$_comment,'compress'=>$_compress));
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
	 * Get compress value
	 * @return boolean|null
	 */
	public function getCompress()
	{
		return $this->compress;
	}
	/**
	 * Set compress value
	 * @param boolean $_compress the compress
	 * @return boolean
	 */
	public function setCompress($_compress)
	{
		return ($this->compress = $_compress);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructSqlpriveMysqlDatabaseSave
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