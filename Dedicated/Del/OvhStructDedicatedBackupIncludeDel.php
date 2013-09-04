<?php
/**
 * File for class OvhStructDedicatedBackupIncludeDel
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedBackupIncludeDel originally named dedicatedBackupIncludeDel
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedBackupIncludeDel extends OvhWsdlClass
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
	 * The include
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $include;
	/**
	 * Constructor method for dedicatedBackupIncludeDel
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_hostname
	 * @param string $_backupId
	 * @param string $_include
	 * @return OvhStructDedicatedBackupIncludeDel
	 */
	public function __construct($_session = NULL,$_hostname = NULL,$_backupId = NULL,$_include = NULL)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'backupId'=>$_backupId,'include'=>$_include));
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
	 * Get include value
	 * @return string|null
	 */
	public function getInclude()
	{
		return $this->include;
	}
	/**
	 * Set include value
	 * @param string $_include the include
	 * @return string
	 */
	public function setInclude($_include)
	{
		return ($this->include = $_include);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedBackupIncludeDel
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