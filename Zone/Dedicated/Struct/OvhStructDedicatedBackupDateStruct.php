<?php
/**
 * File for class OvhStructDedicatedBackupDateStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedBackupDateStruct originally named dedicatedBackupDateStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedBackupDateStruct extends OvhWsdlClass
{
	/**
	 * The hour
	 * @var string
	 */
	public $hour;
	/**
	 * The superBackupName
	 * @var string
	 */
	public $superBackupName;
	/**
	 * The day
	 * @var string
	 */
	public $day;
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The backupCount
	 * @var int
	 */
	public $backupCount;
	/**
	 * Constructor method for dedicatedBackupDateStruct
	 * @see parent::__construct()
	 * @param string $_hour
	 * @param string $_superBackupName
	 * @param string $_day
	 * @param int $_id
	 * @param int $_backupCount
	 * @return OvhStructDedicatedBackupDateStruct
	 */
	public function __construct($_hour = NULL,$_superBackupName = NULL,$_day = NULL,$_id = NULL,$_backupCount = NULL)
	{
		parent::__construct(array('hour'=>$_hour,'superBackupName'=>$_superBackupName,'day'=>$_day,'id'=>$_id,'backupCount'=>$_backupCount));
	}
	/**
	 * Get hour value
	 * @return string|null
	 */
	public function getHour()
	{
		return $this->hour;
	}
	/**
	 * Set hour value
	 * @param string $_hour the hour
	 * @return string
	 */
	public function setHour($_hour)
	{
		return ($this->hour = $_hour);
	}
	/**
	 * Get superBackupName value
	 * @return string|null
	 */
	public function getSuperBackupName()
	{
		return $this->superBackupName;
	}
	/**
	 * Set superBackupName value
	 * @param string $_superBackupName the superBackupName
	 * @return string
	 */
	public function setSuperBackupName($_superBackupName)
	{
		return ($this->superBackupName = $_superBackupName);
	}
	/**
	 * Get day value
	 * @return string|null
	 */
	public function getDay()
	{
		return $this->day;
	}
	/**
	 * Set day value
	 * @param string $_day the day
	 * @return string
	 */
	public function setDay($_day)
	{
		return ($this->day = $_day);
	}
	/**
	 * Get id value
	 * @return int|null
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set id value
	 * @param int $_id the id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get backupCount value
	 * @return int|null
	 */
	public function getBackupCount()
	{
		return $this->backupCount;
	}
	/**
	 * Set backupCount value
	 * @param int $_backupCount the backupCount
	 * @return int
	 */
	public function setBackupCount($_backupCount)
	{
		return ($this->backupCount = $_backupCount);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedBackupDateStruct
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