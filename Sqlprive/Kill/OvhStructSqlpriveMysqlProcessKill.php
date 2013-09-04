<?php
/**
 * File for class OvhStructSqlpriveMysqlProcessKill
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructSqlpriveMysqlProcessKill originally named sqlpriveMysqlProcessKill
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructSqlpriveMysqlProcessKill extends OvhWsdlClass
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
	 * The process
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $process;
	/**
	 * Constructor method for sqlpriveMysqlProcessKill
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_server
	 * @param int $_process
	 * @return OvhStructSqlpriveMysqlProcessKill
	 */
	public function __construct($_session = NULL,$_server = NULL,$_process = NULL)
	{
		parent::__construct(array('session'=>$_session,'server'=>$_server,'process'=>$_process));
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
	 * Get process value
	 * @return int|null
	 */
	public function getProcess()
	{
		return $this->process;
	}
	/**
	 * Set process value
	 * @param int $_process the process
	 * @return int
	 */
	public function setProcess($_process)
	{
		return ($this->process = $_process);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructSqlpriveMysqlProcessKill
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