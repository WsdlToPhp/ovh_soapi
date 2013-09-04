<?php
/**
 * File for class OvhStructTelephonyOrdersFollowingUp
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyOrdersFollowingUp originally named telephonyOrdersFollowingUp
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyOrdersFollowingUp extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The isOrderDone
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $isOrderDone;
	/**
	 * Constructor method for telephonyOrdersFollowingUp
	 * @see parent::__construct()
	 * @param string $_session
	 * @param boolean $_isOrderDone
	 * @return OvhStructTelephonyOrdersFollowingUp
	 */
	public function __construct($_session = NULL,$_isOrderDone = NULL)
	{
		parent::__construct(array('session'=>$_session,'isOrderDone'=>$_isOrderDone));
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
	 * Get isOrderDone value
	 * @return boolean|null
	 */
	public function getIsOrderDone()
	{
		return $this->isOrderDone;
	}
	/**
	 * Set isOrderDone value
	 * @param boolean $_isOrderDone the isOrderDone
	 * @return boolean
	 */
	public function setIsOrderDone($_isOrderDone)
	{
		return ($this->isOrderDone = $_isOrderDone);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyOrdersFollowingUp
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