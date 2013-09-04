<?php
/**
 * File for class OvhStructMultiFtpStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructMultiFtpStruct originally named multiFtpStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructMultiFtpStruct extends OvhWsdlClass
{
	/**
	 * The subdir
	 * @var string
	 */
	public $subdir;
	/**
	 * The login
	 * @var string
	 */
	public $login;
	/**
	 * Constructor method for multiFtpStruct
	 * @see parent::__construct()
	 * @param string $_subdir
	 * @param string $_login
	 * @return OvhStructMultiFtpStruct
	 */
	public function __construct($_subdir = NULL,$_login = NULL)
	{
		parent::__construct(array('subdir'=>$_subdir,'login'=>$_login));
	}
	/**
	 * Get subdir value
	 * @return string|null
	 */
	public function getSubdir()
	{
		return $this->subdir;
	}
	/**
	 * Set subdir value
	 * @param string $_subdir the subdir
	 * @return string
	 */
	public function setSubdir($_subdir)
	{
		return ($this->subdir = $_subdir);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructMultiFtpStruct
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