<?php
/**
 * File for class OvhStructManagedServicesPartitionUpdate
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructManagedServicesPartitionUpdate originally named managedServicesPartitionUpdate
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructManagedServicesPartitionUpdate extends OvhWsdlClass
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
	 * The name
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $name;
	/**
	 * The size
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $size;
	/**
	 * Constructor method for managedServicesPartitionUpdate
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_storage
	 * @param string $_name
	 * @param int $_size
	 * @return OvhStructManagedServicesPartitionUpdate
	 */
	public function __construct($_session = NULL,$_storage = NULL,$_name = NULL,$_size = NULL)
	{
		parent::__construct(array('session'=>$_session,'storage'=>$_storage,'name'=>$_name,'size'=>$_size));
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
	 * Get name value
	 * @return string|null
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set name value
	 * @param string $_name the name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get size value
	 * @return int|null
	 */
	public function getSize()
	{
		return $this->size;
	}
	/**
	 * Set size value
	 * @param int $_size the size
	 * @return int
	 */
	public function setSize($_size)
	{
		return ($this->size = $_size);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructManagedServicesPartitionUpdate
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