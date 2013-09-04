<?php
/**
 * File for class OvhStructSqlpriveMysqlDatabaseImportFromFile
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructSqlpriveMysqlDatabaseImportFromFile originally named sqlpriveMysqlDatabaseImportFromFile
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructSqlpriveMysqlDatabaseImportFromFile extends OvhWsdlClass
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
	 * The filename
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $filename;
	/**
	 * Constructor method for sqlpriveMysqlDatabaseImportFromFile
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_server
	 * @param string $_database
	 * @param string $_filename
	 * @return OvhStructSqlpriveMysqlDatabaseImportFromFile
	 */
	public function __construct($_session = NULL,$_server = NULL,$_database = NULL,$_filename = NULL)
	{
		parent::__construct(array('session'=>$_session,'server'=>$_server,'database'=>$_database,'filename'=>$_filename));
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
	 * Get filename value
	 * @return string|null
	 */
	public function getFilename()
	{
		return $this->filename;
	}
	/**
	 * Set filename value
	 * @param string $_filename the filename
	 * @return string
	 */
	public function setFilename($_filename)
	{
		return ($this->filename = $_filename);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructSqlpriveMysqlDatabaseImportFromFile
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