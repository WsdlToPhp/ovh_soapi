<?php
/**
 * File for class OvhStructSqlpriveMysqlOvhMyAdmin
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructSqlpriveMysqlOvhMyAdmin originally named sqlpriveMysqlOvhMyAdmin
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructSqlpriveMysqlOvhMyAdmin extends OvhWsdlClass
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
	 * The function
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $function;
	/**
	 * The database
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $database;
	/**
	 * The username
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $username;
	/**
	 * The password
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $password;
	/**
	 * Constructor method for sqlpriveMysqlOvhMyAdmin
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_server
	 * @param string $_function
	 * @param string $_database
	 * @param string $_username
	 * @param string $_password
	 * @return OvhStructSqlpriveMysqlOvhMyAdmin
	 */
	public function __construct($_session = NULL,$_server = NULL,$_function = NULL,$_database = NULL,$_username = NULL,$_password = NULL)
	{
		parent::__construct(array('session'=>$_session,'server'=>$_server,'function'=>$_function,'database'=>$_database,'username'=>$_username,'password'=>$_password));
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
	 * Get function value
	 * @return string|null
	 */
	public function getFunction()
	{
		return $this->function;
	}
	/**
	 * Set function value
	 * @param string $_function the function
	 * @return string
	 */
	public function setFunction($_function)
	{
		return ($this->function = $_function);
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
	 * Get username value
	 * @return string|null
	 */
	public function getUsername()
	{
		return $this->username;
	}
	/**
	 * Set username value
	 * @param string $_username the username
	 * @return string
	 */
	public function setUsername($_username)
	{
		return ($this->username = $_username);
	}
	/**
	 * Get password value
	 * @return string|null
	 */
	public function getPassword()
	{
		return $this->password;
	}
	/**
	 * Set password value
	 * @param string $_password the password
	 * @return string
	 */
	public function setPassword($_password)
	{
		return ($this->password = $_password);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructSqlpriveMysqlOvhMyAdmin
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