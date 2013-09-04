<?php
/**
 * File for class OvhStructDedicatedBackupFtpInfoReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedBackupFtpInfoReturn originally named dedicatedBackupFtpInfoReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedBackupFtpInfoReturn extends OvhWsdlClass
{
	/**
	 * The ftpBackupName
	 * @var string
	 */
	public $ftpBackupName;
	/**
	 * The quotaUsed
	 * @var int
	 */
	public $quotaUsed;
	/**
	 * The quotaSize
	 * @var int
	 */
	public $quotaSize;
	/**
	 * Constructor method for dedicatedBackupFtpInfoReturn
	 * @see parent::__construct()
	 * @param string $_ftpBackupName
	 * @param int $_quotaUsed
	 * @param int $_quotaSize
	 * @return OvhStructDedicatedBackupFtpInfoReturn
	 */
	public function __construct($_ftpBackupName = NULL,$_quotaUsed = NULL,$_quotaSize = NULL)
	{
		parent::__construct(array('ftpBackupName'=>$_ftpBackupName,'quotaUsed'=>$_quotaUsed,'quotaSize'=>$_quotaSize));
	}
	/**
	 * Get ftpBackupName value
	 * @return string|null
	 */
	public function getFtpBackupName()
	{
		return $this->ftpBackupName;
	}
	/**
	 * Set ftpBackupName value
	 * @param string $_ftpBackupName the ftpBackupName
	 * @return string
	 */
	public function setFtpBackupName($_ftpBackupName)
	{
		return ($this->ftpBackupName = $_ftpBackupName);
	}
	/**
	 * Get quotaUsed value
	 * @return int|null
	 */
	public function getQuotaUsed()
	{
		return $this->quotaUsed;
	}
	/**
	 * Set quotaUsed value
	 * @param int $_quotaUsed the quotaUsed
	 * @return int
	 */
	public function setQuotaUsed($_quotaUsed)
	{
		return ($this->quotaUsed = $_quotaUsed);
	}
	/**
	 * Get quotaSize value
	 * @return int|null
	 */
	public function getQuotaSize()
	{
		return $this->quotaSize;
	}
	/**
	 * Set quotaSize value
	 * @param int $_quotaSize the quotaSize
	 * @return int
	 */
	public function setQuotaSize($_quotaSize)
	{
		return ($this->quotaSize = $_quotaSize);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedBackupFtpInfoReturn
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