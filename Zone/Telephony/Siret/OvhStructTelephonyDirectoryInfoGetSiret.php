<?php
/**
 * File for class OvhStructTelephonyDirectoryInfoGetSiret
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyDirectoryInfoGetSiret originally named telephonyDirectoryInfoGetSiret
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyDirectoryInfoGetSiret extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The siret
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $siret;
	/**
	 * Constructor method for telephonyDirectoryInfoGetSiret
	 * @see parent::__construct()
	 * @param string $_session
	 * @param int $_siret
	 * @return OvhStructTelephonyDirectoryInfoGetSiret
	 */
	public function __construct($_session = NULL,$_siret = NULL)
	{
		parent::__construct(array('session'=>$_session,'siret'=>$_siret));
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
	 * Get siret value
	 * @return int|null
	 */
	public function getSiret()
	{
		return $this->siret;
	}
	/**
	 * Set siret value
	 * @param int $_siret the siret
	 * @return int
	 */
	public function setSiret($_siret)
	{
		return ($this->siret = $_siret);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyDirectoryInfoGetSiret
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