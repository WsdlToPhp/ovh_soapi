<?php
/**
 * File for class OvhStructTelephonyClick2CallDo
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyClick2CallDo originally named telephonyClick2CallDo
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyClick2CallDo extends OvhWsdlClass
{
	/**
	 * The login
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $login;
	/**
	 * The password
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $password;
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
	 * Constructor method for telephonyClick2CallDo
	 * @see parent::__construct()
	 * @param string $_login
	 * @param string $_password
	 * @param string $_calling
	 * @param string $_called
	 * @param string $_billingNumber
	 * @return OvhStructTelephonyClick2CallDo
	 */
	public function __construct($_login = NULL,$_password = NULL,$_calling = NULL,$_called = NULL,$_billingNumber = NULL)
	{
		parent::__construct(array('login'=>$_login,'password'=>$_password,'calling'=>$_calling,'called'=>$_called,'billingNumber'=>$_billingNumber));
	}
	/**
	 * Get login value
	 * @return string|null
	 */
	public function getLogin()
	{
		return $this->login;
	}
	/**
	 * Set login value
	 * @param string $_login the login
	 * @return string
	 */
	public function setLogin($_login)
	{
		return ($this->login = $_login);
	}
	/**
	 * Get password value
	 * @return string|null
	 */
	public function getPassword()
	{
		return $this->password;
	}
	/**
	 * Set password value
	 * @param string $_password the password
	 * @return string
	 */
	public function setPassword($_password)
	{
		return ($this->password = $_password);
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
	 * @return OvhStructTelephonyClick2CallDo
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