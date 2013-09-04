<?php
/**
 * File for class OvhStructManagedServicesPartitionStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructManagedServicesPartitionStruct originally named managedServicesPartitionStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructManagedServicesPartitionStruct extends OvhWsdlClass
{
	/**
	 * The idZfs
	 * @var string
	 */
	public $idZfs;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The size
	 * @var string
	 */
	public $size;
	/**
	 * The used
	 * @var string
	 */
	public $used;
	/**
	 * The state
	 * @var string
	 */
	public $state;
	/**
	 * The accessList
	 * @var OvhStructMyArrayOfManagedServicesAclStructType
	 */
	public $accessList;
	/**
	 * Constructor method for managedServicesPartitionStruct
	 * @see parent::__construct()
	 * @param string $_idZfs
	 * @param string $_name
	 * @param string $_size
	 * @param string $_used
	 * @param string $_state
	 * @param OvhStructMyArrayOfManagedServicesAclStructType $_accessList
	 * @return OvhStructManagedServicesPartitionStruct
	 */
	public function __construct($_idZfs = NULL,$_name = NULL,$_size = NULL,$_used = NULL,$_state = NULL,$_accessList = NULL)
	{
		parent::__construct(array('idZfs'=>$_idZfs,'name'=>$_name,'size'=>$_size,'used'=>$_used,'state'=>$_state,'accessList'=>($_accessList instanceof OvhStructMyArrayOfManagedServicesAclStructType)?$_accessList:new OvhStructMyArrayOfManagedServicesAclStructType($_accessList)));
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
	 * @return string|null
	 */
	public function getSize()
	{
		return $this->size;
	}
	/**
	 * Set size value
	 * @param string $_size the size
	 * @return string
	 */
	public function setSize($_size)
	{
		return ($this->size = $_size);
	}
	/**
	 * Get used value
	 * @return string|null
	 */
	public function getUsed()
	{
		return $this->used;
	}
	/**
	 * Set used value
	 * @param string $_used the used
	 * @return string
	 */
	public function setUsed($_used)
	{
		return ($this->used = $_used);
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
	 * Get accessList value
	 * @return OvhStructMyArrayOfManagedServicesAclStructType|null
	 */
	public function getAccessList()
	{
		return $this->accessList;
	}
	/**
	 * Set accessList value
	 * @param OvhStructMyArrayOfManagedServicesAclStructType $_accessList the accessList
	 * @return OvhStructMyArrayOfManagedServicesAclStructType
	 */
	public function setAccessList($_accessList)
	{
		return ($this->accessList = $_accessList);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructManagedServicesPartitionStruct
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