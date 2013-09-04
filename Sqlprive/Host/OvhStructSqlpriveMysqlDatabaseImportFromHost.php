<?php
/**
 * File for class OvhStructSqlpriveMysqlDatabaseImportFromHost
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructSqlpriveMysqlDatabaseImportFromHost originally named sqlpriveMysqlDatabaseImportFromHost
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructSqlpriveMysqlDatabaseImportFromHost extends OvhWsdlClass
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
	 * The foreignHost
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $foreignHost;
	/**
	 * The foreignUser
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $foreignUser;
	/**
	 * The foreignPassword
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $foreignPassword;
	/**
	 * The foreignDatabase
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $foreignDatabase;
	/**
	 * Constructor method for sqlpriveMysqlDatabaseImportFromHost
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_server
	 * @param string $_database
	 * @param string $_foreignHost
	 * @param string $_foreignUser
	 * @param string $_foreignPassword
	 * @param string $_foreignDatabase
	 * @return OvhStructSqlpriveMysqlDatabaseImportFromHost
	 */
	public function __construct($_session = NULL,$_server = NULL,$_database = NULL,$_foreignHost = NULL,$_foreignUser = NULL,$_foreignPassword = NULL,$_foreignDatabase = NULL)
	{
		parent::__construct(array('session'=>$_session,'server'=>$_server,'database'=>$_database,'foreignHost'=>$_foreignHost,'foreignUser'=>$_foreignUser,'foreignPassword'=>$_foreignPassword,'foreignDatabase'=>$_foreignDatabase));
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
	 * Get foreignHost value
	 * @return string|null
	 */
	public function getForeignHost()
	{
		return $this->foreignHost;
	}
	/**
	 * Set foreignHost value
	 * @param string $_foreignHost the foreignHost
	 * @return string
	 */
	public function setForeignHost($_foreignHost)
	{
		return ($this->foreignHost = $_foreignHost);
	}
	/**
	 * Get foreignUser value
	 * @return string|null
	 */
	public function getForeignUser()
	{
		return $this->foreignUser;
	}
	/**
	 * Set foreignUser value
	 * @param string $_foreignUser the foreignUser
	 * @return string
	 */
	public function setForeignUser($_foreignUser)
	{
		return ($this->foreignUser = $_foreignUser);
	}
	/**
	 * Get foreignPassword value
	 * @return string|null
	 */
	public function getForeignPassword()
	{
		return $this->foreignPassword;
	}
	/**
	 * Set foreignPassword value
	 * @param string $_foreignPassword the foreignPassword
	 * @return string
	 */
	public function setForeignPassword($_foreignPassword)
	{
		return ($this->foreignPassword = $_foreignPassword);
	}
	/**
	 * Get foreignDatabase value
	 * @return string|null
	 */
	public function getForeignDatabase()
	{
		return $this->foreignDatabase;
	}
	/**
	 * Set foreignDatabase value
	 * @param string $_foreignDatabase the foreignDatabase
	 * @return string
	 */
	public function setForeignDatabase($_foreignDatabase)
	{
		return ($this->foreignDatabase = $_foreignDatabase);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructSqlpriveMysqlDatabaseImportFromHost
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