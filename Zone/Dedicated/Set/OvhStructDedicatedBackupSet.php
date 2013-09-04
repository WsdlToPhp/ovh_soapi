<?php
/**
 * File for class OvhStructDedicatedBackupSet
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedBackupSet originally named dedicatedBackupSet
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedBackupSet extends OvhWsdlClass
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
	 * The email
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $email;
	/**
	 * The backupType
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $backupType;
	/**
	 * The snapshot
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $snapshot;
	/**
	 * The sshPort
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $sshPort;
	/**
	 * The status
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $status;
	/**
	 * The language
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $language;
	/**
	 * The src
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $src;
	/**
	 * Constructor method for dedicatedBackupSet
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_hostname
	 * @param string $_backupId
	 * @param string $_email
	 * @param string $_backupType
	 * @param int $_snapshot
	 * @param int $_sshPort
	 * @param int $_status
	 * @param string $_language
	 * @param string $_src
	 * @return OvhStructDedicatedBackupSet
	 */
	public function __construct($_session = NULL,$_hostname = NULL,$_backupId = NULL,$_email = NULL,$_backupType = NULL,$_snapshot = NULL,$_sshPort = NULL,$_status = NULL,$_language = NULL,$_src = NULL)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'backupId'=>$_backupId,'email'=>$_email,'backupType'=>$_backupType,'snapshot'=>$_snapshot,'sshPort'=>$_sshPort,'status'=>$_status,'language'=>$_language,'src'=>$_src));
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
	 * Get snapshot value
	 * @return int|null
	 */
	public function getSnapshot()
	{
		return $this->snapshot;
	}
	/**
	 * Set snapshot value
	 * @param int $_snapshot the snapshot
	 * @return int
	 */
	public function setSnapshot($_snapshot)
	{
		return ($this->snapshot = $_snapshot);
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
	 * Get status value
	 * @return int|null
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set status value
	 * @param int $_status the status
	 * @return int
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
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
	 * Get src value
	 * @return string|null
	 */
	public function getSrc()
	{
		return $this->src;
	}
	/**
	 * Set src value
	 * @param string $_src the src
	 * @return string
	 */
	public function setSrc($_src)
	{
		return ($this->src = $_src);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedBackupSet
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