<?php
/**
 * File for class OvhStructDedicatedGetServiceMonitoringItem
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedGetServiceMonitoringItem originally named dedicatedGetServiceMonitoringItem
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedGetServiceMonitoringItem extends OvhWsdlClass
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
	 * Constructor method for dedicatedGetServiceMonitoringItem
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_ip
	 * @param int $_itemId
	 * @return OvhStructDedicatedGetServiceMonitoringItem
	 */
	public function __construct($_session = NULL,$_ip = NULL,$_itemId = NULL)
	{
		parent::__construct(array('session'=>$_session,'ip'=>$_ip,'itemId'=>$_itemId));
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedGetServiceMonitoringItem
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