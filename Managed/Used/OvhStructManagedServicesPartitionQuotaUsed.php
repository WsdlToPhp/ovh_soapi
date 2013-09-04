<?php
/**
 * File for class OvhStructManagedServicesPartitionQuotaUsed
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructManagedServicesPartitionQuotaUsed originally named managedServicesPartitionQuotaUsed
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructManagedServicesPartitionQuotaUsed extends OvhWsdlClass
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
	 * The partitionName
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $partitionName;
	/**
	 * Constructor method for managedServicesPartitionQuotaUsed
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_storage
	 * @param string $_partitionName
	 * @return OvhStructManagedServicesPartitionQuotaUsed
	 */
	public function __construct($_session = NULL,$_storage = NULL,$_partitionName = NULL)
	{
		parent::__construct(array('session'=>$_session,'storage'=>$_storage,'partitionName'=>$_partitionName));
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
	 * Get partitionName value
	 * @return string|null
	 */
	public function getPartitionName()
	{
		return $this->partitionName;
	}
	/**
	 * Set partitionName value
	 * @param string $_partitionName the partitionName
	 * @return string
	 */
	public function setPartitionName($_partitionName)
	{
		return ($this->partitionName = $_partitionName);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructManagedServicesPartitionQuotaUsed
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