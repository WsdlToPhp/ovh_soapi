<?php
/**
 * File for class OvhStructTelephonyNumberGetFrWayNamesFromInsee
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyNumberGetFrWayNamesFromInsee originally named telephonyNumberGetFrWayNamesFromInsee
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyNumberGetFrWayNamesFromInsee extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The insee
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $insee;
	/**
	 * The wayName
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $wayName;
	/**
	 * Constructor method for telephonyNumberGetFrWayNamesFromInsee
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_insee
	 * @param string $_wayName
	 * @return OvhStructTelephonyNumberGetFrWayNamesFromInsee
	 */
	public function __construct($_session = NULL,$_insee = NULL,$_wayName = NULL)
	{
		parent::__construct(array('session'=>$_session,'insee'=>$_insee,'wayName'=>$_wayName));
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
	 * Get insee value
	 * @return string|null
	 */
	public function getInsee()
	{
		return $this->insee;
	}
	/**
	 * Set insee value
	 * @param string $_insee the insee
	 * @return string
	 */
	public function setInsee($_insee)
	{
		return ($this->insee = $_insee);
	}
	/**
	 * Get wayName value
	 * @return string|null
	 */
	public function getWayName()
	{
		return $this->wayName;
	}
	/**
	 * Set wayName value
	 * @param string $_wayName the wayName
	 * @return string
	 */
	public function setWayName($_wayName)
	{
		return ($this->wayName = $_wayName);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyNumberGetFrWayNamesFromInsee
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