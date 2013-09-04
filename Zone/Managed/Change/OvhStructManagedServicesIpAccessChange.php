<?php
/**
 * File for class OvhStructManagedServicesIpAccessChange
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructManagedServicesIpAccessChange originally named managedServicesIpAccessChange
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructManagedServicesIpAccessChange extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The storage
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $storage;
	/**
	 * The value
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $value;
	/**
	 * The server
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $server;
	/**
	 * The idZfs
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $idZfs;
	/**
	 * Constructor method for managedServicesIpAccessChange
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_storage
	 * @param string $_value
	 * @param string $_server
	 * @param string $_idZfs
	 * @return OvhStructManagedServicesIpAccessChange
	 */
	public function __construct($_session = NULL,$_storage = NULL,$_value = NULL,$_server = NULL,$_idZfs = NULL)
	{
		parent::__construct(array('session'=>$_session,'storage'=>$_storage,'value'=>$_value,'server'=>$_server,'idZfs'=>$_idZfs));
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
	 * Get storage value
	 * @return string|null
	 */
	public function getStorage()
	{
		return $this->storage;
	}
	/**
	 * Set storage value
	 * @param string $_storage the storage
	 * @return string
	 */
	public function setStorage($_storage)
	{
		return ($this->storage = $_storage);
	}
	/**
	 * Get value value
	 * @return string|null
	 */
	public function getValue()
	{
		return $this->value;
	}
	/**
	 * Set value value
	 * @param string $_value the value
	 * @return string
	 */
	public function setValue($_value)
	{
		return ($this->value = $_value);
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
	 * Get idZfs value
	 * @return string|null
	 */
	public function getIdZfs()
	{
		return $this->idZfs;
	}
	/**
	 * Set idZfs value
	 * @param string $_idZfs the idZfs
	 * @return string
	 */
	public function setIdZfs($_idZfs)
	{
		return ($this->idZfs = $_idZfs);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructManagedServicesIpAccessChange
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