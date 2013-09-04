<?php
/**
 * File for class OvhStructSqlpriveStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructSqlpriveStruct originally named sqlpriveStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructSqlpriveStruct extends OvhWsdlClass
{
	/**
	 * The server
	 * @var string
	 */
	public $server;
	/**
	 * The expiration
	 * @var string
	 */
	public $expiration;
	/**
	 * The memory
	 * @var string
	 */
	public $memory;
	/**
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The version
	 * @var string
	 */
	public $version;
	/**
	 * Constructor method for sqlpriveStruct
	 * @see parent::__construct()
	 * @param string $_server
	 * @param string $_expiration
	 * @param string $_memory
	 * @param string $_ip
	 * @param string $_type
	 * @param string $_version
	 * @return OvhStructSqlpriveStruct
	 */
	public function __construct($_server = NULL,$_expiration = NULL,$_memory = NULL,$_ip = NULL,$_type = NULL,$_version = NULL)
	{
		parent::__construct(array('server'=>$_server,'expiration'=>$_expiration,'memory'=>$_memory,'ip'=>$_ip,'type'=>$_type,'version'=>$_version));
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
	 * Get expiration value
	 * @return string|null
	 */
	public function getExpiration()
	{
		return $this->expiration;
	}
	/**
	 * Set expiration value
	 * @param string $_expiration the expiration
	 * @return string
	 */
	public function setExpiration($_expiration)
	{
		return ($this->expiration = $_expiration);
	}
	/**
	 * Get memory value
	 * @return string|null
	 */
	public function getMemory()
	{
		return $this->memory;
	}
	/**
	 * Set memory value
	 * @param string $_memory the memory
	 * @return string
	 */
	public function setMemory($_memory)
	{
		return ($this->memory = $_memory);
	}
	/**
	 * Get ip value
	 * @return string|null
	 */
	public function getIp()
	{
		return $this->ip;
	}
	/**
	 * Set ip value
	 * @param string $_ip the ip
	 * @return string
	 */
	public function setIp($_ip)
	{
		return ($this->ip = $_ip);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructSqlpriveStruct
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