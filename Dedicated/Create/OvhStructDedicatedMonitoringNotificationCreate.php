<?php
/**
 * File for class OvhStructDedicatedMonitoringNotificationCreate
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedMonitoringNotificationCreate originally named dedicatedMonitoringNotificationCreate
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedMonitoringNotificationCreate extends OvhWsdlClass
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
	 * The nicAlert
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $nicAlert;
	/**
	 * The language
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $language;
	/**
	 * The status
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $status;
	/**
	 * Constructor method for dedicatedMonitoringNotificationCreate
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_hostname
	 * @param string $_nicAlert
	 * @param string $_language
	 * @param string $_status
	 * @return OvhStructDedicatedMonitoringNotificationCreate
	 */
	public function __construct($_session = NULL,$_hostname = NULL,$_nicAlert = NULL,$_language = NULL,$_status = NULL)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'nicAlert'=>$_nicAlert,'language'=>$_language,'status'=>$_status));
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
	 * Get nicAlert value
	 * @return string|null
	 */
	public function getNicAlert()
	{
		return $this->nicAlert;
	}
	/**
	 * Set nicAlert value
	 * @param string $_nicAlert the nicAlert
	 * @return string
	 */
	public function setNicAlert($_nicAlert)
	{
		return ($this->nicAlert = $_nicAlert);
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
	 * Get status value
	 * @return string|null
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set status value
	 * @param string $_status the status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedMonitoringNotificationCreate
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