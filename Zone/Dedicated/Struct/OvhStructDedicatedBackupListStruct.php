<?php
/**
 * File for class OvhStructDedicatedBackupListStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedBackupListStruct originally named dedicatedBackupListStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedBackupListStruct extends OvhWsdlClass
{
	/**
	 * The backupId
	 * @var int
	 */
	public $backupId;
	/**
	 * The backupFeature
	 * @var string
	 */
	public $backupFeature;
	/**
	 * The enable
	 * @var int
	 */
	public $enable;
	/**
	 * The language
	 * @var string
	 */
	public $language;
	/**
	 * The backupSize
	 * @var string
	 */
	public $backupSize;
	/**
	 * The sshPort
	 * @var int
	 */
	public $sshPort;
	/**
	 * The percentUsed
	 * @var string
	 */
	public $percentUsed;
	/**
	 * The hostname
	 * @var string
	 */
	public $hostname;
	/**
	 * The backupName
	 * @var string
	 */
	public $backupName;
	/**
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * The snapshotNumber
	 * @var int
	 */
	public $snapshotNumber;
	/**
	 * The superBackupName
	 * @var string
	 */
	public $superBackupName;
	/**
	 * The backupType
	 * @var string
	 */
	public $backupType;
	/**
	 * The src
	 * @var OvhStructMyArrayOfStringType
	 */
	public $src;
	/**
	 * The include
	 * @var OvhStructMyArrayOfStringType
	 */
	public $include;
	/**
	 * The exclude
	 * @var OvhStructMyArrayOfStringType
	 */
	public $exclude;
	/**
	 * The excludeHard
	 * @var OvhStructMyArrayOfStringType
	 */
	public $excludeHard;
	/**
	 * Constructor method for dedicatedBackupListStruct
	 * @see parent::__construct()
	 * @param int $_backupId
	 * @param string $_backupFeature
	 * @param int $_enable
	 * @param string $_language
	 * @param string $_backupSize
	 * @param int $_sshPort
	 * @param string $_percentUsed
	 * @param string $_hostname
	 * @param string $_backupName
	 * @param string $_email
	 * @param int $_snapshotNumber
	 * @param string $_superBackupName
	 * @param string $_backupType
	 * @param OvhStructMyArrayOfStringType $_src
	 * @param OvhStructMyArrayOfStringType $_include
	 * @param OvhStructMyArrayOfStringType $_exclude
	 * @param OvhStructMyArrayOfStringType $_excludeHard
	 * @return OvhStructDedicatedBackupListStruct
	 */
	public function __construct($_backupId = NULL,$_backupFeature = NULL,$_enable = NULL,$_language = NULL,$_backupSize = NULL,$_sshPort = NULL,$_percentUsed = NULL,$_hostname = NULL,$_backupName = NULL,$_email = NULL,$_snapshotNumber = NULL,$_superBackupName = NULL,$_backupType = NULL,$_src = NULL,$_include = NULL,$_exclude = NULL,$_excludeHard = NULL)
	{
		parent::__construct(array('backupId'=>$_backupId,'backupFeature'=>$_backupFeature,'enable'=>$_enable,'language'=>$_language,'backupSize'=>$_backupSize,'sshPort'=>$_sshPort,'percentUsed'=>$_percentUsed,'hostname'=>$_hostname,'backupName'=>$_backupName,'email'=>$_email,'snapshotNumber'=>$_snapshotNumber,'superBackupName'=>$_superBackupName,'backupType'=>$_backupType,'src'=>($_src instanceof OvhStructMyArrayOfStringType)?$_src:new OvhStructMyArrayOfStringType($_src),'include'=>($_include instanceof OvhStructMyArrayOfStringType)?$_include:new OvhStructMyArrayOfStringType($_include),'exclude'=>($_exclude instanceof OvhStructMyArrayOfStringType)?$_exclude:new OvhStructMyArrayOfStringType($_exclude),'excludeHard'=>($_excludeHard instanceof OvhStructMyArrayOfStringType)?$_excludeHard:new OvhStructMyArrayOfStringType($_excludeHard)));
	}
	/**
	 * Get backupId value
	 * @return int|null
	 */
	public function getBackupId()
	{
		return $this->backupId;
	}
	/**
	 * Set backupId value
	 * @param int $_backupId the backupId
	 * @return int
	 */
	public function setBackupId($_backupId)
	{
		return ($this->backupId = $_backupId);
	}
	/**
	 * Get backupFeature value
	 * @return string|null
	 */
	public function getBackupFeature()
	{
		return $this->backupFeature;
	}
	/**
	 * Set backupFeature value
	 * @param string $_backupFeature the backupFeature
	 * @return string
	 */
	public function setBackupFeature($_backupFeature)
	{
		return ($this->backupFeature = $_backupFeature);
	}
	/**
	 * Get enable value
	 * @return int|null
	 */
	public function getEnable()
	{
		return $this->enable;
	}
	/**
	 * Set enable value
	 * @param int $_enable the enable
	 * @return int
	 */
	public function setEnable($_enable)
	{
		return ($this->enable = $_enable);
	}
	/**
	 * Get language value
	 * @return string|null
	 */
	public function getLanguage()
	{
		return $this->language;
	}
	/**
	 * Set language value
	 * @param string $_language the language
	 * @return string
	 */
	public function setLanguage($_language)
	{
		return ($this->language = $_language);
	}
	/**
	 * Get backupSize value
	 * @return string|null
	 */
	public function getBackupSize()
	{
		return $this->backupSize;
	}
	/**
	 * Set backupSize value
	 * @param string $_backupSize the backupSize
	 * @return string
	 */
	public function setBackupSize($_backupSize)
	{
		return ($this->backupSize = $_backupSize);
	}
	/**
	 * Get sshPort value
	 * @return int|null
	 */
	public function getSshPort()
	{
		return $this->sshPort;
	}
	/**
	 * Set sshPort value
	 * @param int $_sshPort the sshPort
	 * @return int
	 */
	public function setSshPort($_sshPort)
	{
		return ($this->sshPort = $_sshPort);
	}
	/**
	 * Get percentUsed value
	 * @return string|null
	 */
	public function getPercentUsed()
	{
		return $this->percentUsed;
	}
	/**
	 * Set percentUsed value
	 * @param string $_percentUsed the percentUsed
	 * @return string
	 */
	public function setPercentUsed($_percentUsed)
	{
		return ($this->percentUsed = $_percentUsed);
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
	 * Get backupName value
	 * @return string|null
	 */
	public function getBackupName()
	{
		return $this->backupName;
	}
	/**
	 * Set backupName value
	 * @param string $_backupName the backupName
	 * @return string
	 */
	public function setBackupName($_backupName)
	{
		return ($this->backupName = $_backupName);
	}
	/**
	 * Get email value
	 * @return string|null
	 */
	public function getEmail()
	{
		return $this->email;
	}
	/**
	 * Set email value
	 * @param string $_email the email
	 * @return string
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
	}
	/**
	 * Get snapshotNumber value
	 * @return int|null
	 */
	public function getSnapshotNumber()
	{
		return $this->snapshotNumber;
	}
	/**
	 * Set snapshotNumber value
	 * @param int $_snapshotNumber the snapshotNumber
	 * @return int
	 */
	public function setSnapshotNumber($_snapshotNumber)
	{
		return ($this->snapshotNumber = $_snapshotNumber);
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
	 * Get backupType value
	 * @return string|null
	 */
	public function getBackupType()
	{
		return $this->backupType;
	}
	/**
	 * Set backupType value
	 * @param string $_backupType the backupType
	 * @return string
	 */
	public function setBackupType($_backupType)
	{
		return ($this->backupType = $_backupType);
	}
	/**
	 * Get src value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getSrc()
	{
		return $this->src;
	}
	/**
	 * Set src value
	 * @param OvhStructMyArrayOfStringType $_src the src
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setSrc($_src)
	{
		return ($this->src = $_src);
	}
	/**
	 * Get include value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getInclude()
	{
		return $this->include;
	}
	/**
	 * Set include value
	 * @param OvhStructMyArrayOfStringType $_include the include
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setInclude($_include)
	{
		return ($this->include = $_include);
	}
	/**
	 * Get exclude value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getExclude()
	{
		return $this->exclude;
	}
	/**
	 * Set exclude value
	 * @param OvhStructMyArrayOfStringType $_exclude the exclude
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setExclude($_exclude)
	{
		return ($this->exclude = $_exclude);
	}
	/**
	 * Get excludeHard value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getExcludeHard()
	{
		return $this->excludeHard;
	}
	/**
	 * Set excludeHard value
	 * @param OvhStructMyArrayOfStringType $_excludeHard the excludeHard
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setExcludeHard($_excludeHard)
	{
		return ($this->excludeHard = $_excludeHard);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedBackupListStruct
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