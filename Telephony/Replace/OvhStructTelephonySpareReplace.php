<?php
/**
 * File for class OvhStructTelephonySpareReplace
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySpareReplace originally named telephonySpareReplace
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySpareReplace extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The type
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $type;
	/**
	 * The service
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $service;
	/**
	 * The spare
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $spare;
	/**
	 * The action
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $action;
	/**
	 * The ip
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $ip;
	/**
	 * Constructor method for telephonySpareReplace
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_type
	 * @param string $_service
	 * @param string $_spare
	 * @param string $_action
	 * @param string $_ip
	 * @return OvhStructTelephonySpareReplace
	 */
	public function __construct($_session = NULL,$_type = NULL,$_service = NULL,$_spare = NULL,$_action = NULL,$_ip = NULL)
	{
		parent::__construct(array('session'=>$_session,'type'=>$_type,'service'=>$_service,'spare'=>$_spare,'action'=>$_action,'ip'=>$_ip));
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
	 * Get type value
	 * @return string|null
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set type value
	 * @param string $_type the type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get service value
	 * @return string|null
	 */
	public function getService()
	{
		return $this->service;
	}
	/**
	 * Set service value
	 * @param string $_service the service
	 * @return string
	 */
	public function setService($_service)
	{
		return ($this->service = $_service);
	}
	/**
	 * Get spare value
	 * @return string|null
	 */
	public function getSpare()
	{
		return $this->spare;
	}
	/**
	 * Set spare value
	 * @param string $_spare the spare
	 * @return string
	 */
	public function setSpare($_spare)
	{
		return ($this->spare = $_spare);
	}
	/**
	 * Get action value
	 * @return string|null
	 */
	public function getAction()
	{
		return $this->action;
	}
	/**
	 * Set action value
	 * @param string $_action the action
	 * @return string
	 */
	public function setAction($_action)
	{
		return ($this->action = $_action);
	}
	/**
	 * Get ip value
	 * @return string|null
	 */
	public function getIp()
	{
		return $this->ip;
	}
	/**
	 * Set ip value
	 * @param string $_ip the ip
	 * @return string
	 */
	public function setIp($_ip)
	{
		return ($this->ip = $_ip);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySpareReplace
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