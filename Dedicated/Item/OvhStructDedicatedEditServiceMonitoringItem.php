<?php
/**
 * File for class OvhStructDedicatedEditServiceMonitoringItem
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedEditServiceMonitoringItem originally named dedicatedEditServiceMonitoringItem
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedEditServiceMonitoringItem extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The ip
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $ip;
	/**
	 * The itemId
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $itemId;
	/**
	 * The period
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $period;
	/**
	 * The string
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $string;
	/**
	 * Constructor method for dedicatedEditServiceMonitoringItem
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_ip
	 * @param int $_itemId
	 * @param string $_period
	 * @param string $_string
	 * @return OvhStructDedicatedEditServiceMonitoringItem
	 */
	public function __construct($_session = NULL,$_ip = NULL,$_itemId = NULL,$_period = NULL,$_string = NULL)
	{
		parent::__construct(array('session'=>$_session,'ip'=>$_ip,'itemId'=>$_itemId,'period'=>$_period,'string'=>$_string));
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
	 * Get itemId value
	 * @return int|null
	 */
	public function getItemId()
	{
		return $this->itemId;
	}
	/**
	 * Set itemId value
	 * @param int $_itemId the itemId
	 * @return int
	 */
	public function setItemId($_itemId)
	{
		return ($this->itemId = $_itemId);
	}
	/**
	 * Get period value
	 * @return string|null
	 */
	public function getPeriod()
	{
		return $this->period;
	}
	/**
	 * Set period value
	 * @param string $_period the period
	 * @return string
	 */
	public function setPeriod($_period)
	{
		return ($this->period = $_period);
	}
	/**
	 * Get string value
	 * @return string|null
	 */
	public function getString()
	{
		return $this->string;
	}
	/**
	 * Set string value
	 * @param string $_string the string
	 * @return string
	 */
	public function setString($_string)
	{
		return ($this->string = $_string);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedEditServiceMonitoringItem
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