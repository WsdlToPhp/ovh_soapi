<?php
/**
 * File for class OvhStructTelephonyClick2CallDoBySession
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyClick2CallDoBySession originally named telephonyClick2CallDoBySession
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyClick2CallDoBySession extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The calling
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $calling;
	/**
	 * The called
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $called;
	/**
	 * The billingNumber
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $billingNumber;
	/**
	 * Constructor method for telephonyClick2CallDoBySession
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_calling
	 * @param string $_called
	 * @param string $_billingNumber
	 * @return OvhStructTelephonyClick2CallDoBySession
	 */
	public function __construct($_session = NULL,$_calling = NULL,$_called = NULL,$_billingNumber = NULL)
	{
		parent::__construct(array('session'=>$_session,'calling'=>$_calling,'called'=>$_called,'billingNumber'=>$_billingNumber));
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
	 * Get calling value
	 * @return string|null
	 */
	public function getCalling()
	{
		return $this->calling;
	}
	/**
	 * Set calling value
	 * @param string $_calling the calling
	 * @return string
	 */
	public function setCalling($_calling)
	{
		return ($this->calling = $_calling);
	}
	/**
	 * Get called value
	 * @return string|null
	 */
	public function getCalled()
	{
		return $this->called;
	}
	/**
	 * Set called value
	 * @param string $_called the called
	 * @return string
	 */
	public function setCalled($_called)
	{
		return ($this->called = $_called);
	}
	/**
	 * Get billingNumber value
	 * @return string|null
	 */
	public function getBillingNumber()
	{
		return $this->billingNumber;
	}
	/**
	 * Set billingNumber value
	 * @param string $_billingNumber the billingNumber
	 * @return string
	 */
	public function setBillingNumber($_billingNumber)
	{
		return ($this->billingNumber = $_billingNumber);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyClick2CallDoBySession
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