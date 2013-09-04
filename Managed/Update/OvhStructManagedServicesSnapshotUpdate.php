<?php
/**
 * File for class OvhStructManagedServicesSnapshotUpdate
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructManagedServicesSnapshotUpdate originally named managedServicesSnapshotUpdate
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructManagedServicesSnapshotUpdate extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The domain
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $domain;
	/**
	 * The snapShotList
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $snapShotList;
	/**
	 * Constructor method for managedServicesSnapshotUpdate
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_domain
	 * @param string $_snapShotList
	 * @return OvhStructManagedServicesSnapshotUpdate
	 */
	public function __construct($_session = NULL,$_domain = NULL,$_snapShotList = NULL)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'snapShotList'=>$_snapShotList));
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
	 * Get domain value
	 * @return string|null
	 */
	public function getDomain()
	{
		return $this->domain;
	}
	/**
	 * Set domain value
	 * @param string $_domain the domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get snapShotList value
	 * @return string|null
	 */
	public function getSnapShotList()
	{
		return $this->snapShotList;
	}
	/**
	 * Set snapShotList value
	 * @param string $_snapShotList the snapShotList
	 * @return string
	 */
	public function setSnapShotList($_snapShotList)
	{
		return ($this->snapShotList = $_snapShotList);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructManagedServicesSnapshotUpdate
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