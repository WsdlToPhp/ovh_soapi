<?php
/**
 * File for class OvhStructDedicatedBackupUpdateDate
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedBackupUpdateDate originally named dedicatedBackupUpdateDate
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedBackupUpdateDate extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The hostname
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $hostname;
	/**
	 * The backupId
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $backupId;
	/**
	 * The monday
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $monday;
	/**
	 * The tuesday
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $tuesday;
	/**
	 * The wednesday
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $wednesday;
	/**
	 * The thursday
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $thursday;
	/**
	 * The friday
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $friday;
	/**
	 * The saturday
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $saturday;
	/**
	 * The sunday
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $sunday;
	/**
	 * Constructor method for dedicatedBackupUpdateDate
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_hostname
	 * @param string $_backupId
	 * @param string $_monday
	 * @param string $_tuesday
	 * @param string $_wednesday
	 * @param string $_thursday
	 * @param string $_friday
	 * @param string $_saturday
	 * @param string $_sunday
	 * @return OvhStructDedicatedBackupUpdateDate
	 */
	public function __construct($_session = NULL,$_hostname = NULL,$_backupId = NULL,$_monday = NULL,$_tuesday = NULL,$_wednesday = NULL,$_thursday = NULL,$_friday = NULL,$_saturday = NULL,$_sunday = NULL)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'backupId'=>$_backupId,'monday'=>$_monday,'tuesday'=>$_tuesday,'wednesday'=>$_wednesday,'thursday'=>$_thursday,'friday'=>$_friday,'saturday'=>$_saturday,'sunday'=>$_sunday));
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
	 * Get hostname value
	 * @return string|null
	 */
	public function getHostname()
	{
		return $this->hostname;
	}
	/**
	 * Set hostname value
	 * @param string $_hostname the hostname
	 * @return string
	 */
	public function setHostname($_hostname)
	{
		return ($this->hostname = $_hostname);
	}
	/**
	 * Get backupId value
	 * @return string|null
	 */
	public function getBackupId()
	{
		return $this->backupId;
	}
	/**
	 * Set backupId value
	 * @param string $_backupId the backupId
	 * @return string
	 */
	public function setBackupId($_backupId)
	{
		return ($this->backupId = $_backupId);
	}
	/**
	 * Get monday value
	 * @return string|null
	 */
	public function getMonday()
	{
		return $this->monday;
	}
	/**
	 * Set monday value
	 * @param string $_monday the monday
	 * @return string
	 */
	public function setMonday($_monday)
	{
		return ($this->monday = $_monday);
	}
	/**
	 * Get tuesday value
	 * @return string|null
	 */
	public function getTuesday()
	{
		return $this->tuesday;
	}
	/**
	 * Set tuesday value
	 * @param string $_tuesday the tuesday
	 * @return string
	 */
	public function setTuesday($_tuesday)
	{
		return ($this->tuesday = $_tuesday);
	}
	/**
	 * Get wednesday value
	 * @return string|null
	 */
	public function getWednesday()
	{
		return $this->wednesday;
	}
	/**
	 * Set wednesday value
	 * @param string $_wednesday the wednesday
	 * @return string
	 */
	public function setWednesday($_wednesday)
	{
		return ($this->wednesday = $_wednesday);
	}
	/**
	 * Get thursday value
	 * @return string|null
	 */
	public function getThursday()
	{
		return $this->thursday;
	}
	/**
	 * Set thursday value
	 * @param string $_thursday the thursday
	 * @return string
	 */
	public function setThursday($_thursday)
	{
		return ($this->thursday = $_thursday);
	}
	/**
	 * Get friday value
	 * @return string|null
	 */
	public function getFriday()
	{
		return $this->friday;
	}
	/**
	 * Set friday value
	 * @param string $_friday the friday
	 * @return string
	 */
	public function setFriday($_friday)
	{
		return ($this->friday = $_friday);
	}
	/**
	 * Get saturday value
	 * @return string|null
	 */
	public function getSaturday()
	{
		return $this->saturday;
	}
	/**
	 * Set saturday value
	 * @param string $_saturday the saturday
	 * @return string
	 */
	public function setSaturday($_saturday)
	{
		return ($this->saturday = $_saturday);
	}
	/**
	 * Get sunday value
	 * @return string|null
	 */
	public function getSunday()
	{
		return $this->sunday;
	}
	/**
	 * Set sunday value
	 * @param string $_sunday the sunday
	 * @return string
	 */
	public function setSunday($_sunday)
	{
		return ($this->sunday = $_sunday);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedBackupUpdateDate
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