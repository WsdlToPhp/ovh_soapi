<?php
/**
 * File for class OvhStructPrepaidSetThreshold
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructPrepaidSetThreshold originally named prepaidSetThreshold
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructPrepaidSetThreshold extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The nic
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $nic;
	/**
	 * The threshold
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $threshold;
	/**
	 * Constructor method for prepaidSetThreshold
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_nic
	 * @param int $_threshold
	 * @return OvhStructPrepaidSetThreshold
	 */
	public function __construct($_session = NULL,$_nic = NULL,$_threshold = NULL)
	{
		parent::__construct(array('session'=>$_session,'nic'=>$_nic,'threshold'=>$_threshold));
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
	 * Get nic value
	 * @return string|null
	 */
	public function getNic()
	{
		return $this->nic;
	}
	/**
	 * Set nic value
	 * @param string $_nic the nic
	 * @return string
	 */
	public function setNic($_nic)
	{
		return ($this->nic = $_nic);
	}
	/**
	 * Get threshold value
	 * @return int|null
	 */
	public function getThreshold()
	{
		return $this->threshold;
	}
	/**
	 * Set threshold value
	 * @param int $_threshold the threshold
	 * @return int
	 */
	public function setThreshold($_threshold)
	{
		return ($this->threshold = $_threshold);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructPrepaidSetThreshold
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