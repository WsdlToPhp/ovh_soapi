<?php
/**
 * File for class OvhStructNicTldEligibility
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructNicTldEligibility originally named nicTldEligibility
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructNicTldEligibility extends OvhWsdlClass
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
	 * The tld
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $tld;
	/**
	 * Constructor method for nicTldEligibility
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_nic
	 * @param string $_tld
	 * @return OvhStructNicTldEligibility
	 */
	public function __construct($_session = NULL,$_nic = NULL,$_tld = NULL)
	{
		parent::__construct(array('session'=>$_session,'nic'=>$_nic,'tld'=>$_tld));
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
	 * Get tld value
	 * @return string|null
	 */
	public function getTld()
	{
		return $this->tld;
	}
	/**
	 * Set tld value
	 * @param string $_tld the tld
	 * @return string
	 */
	public function setTld($_tld)
	{
		return ($this->tld = $_tld);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructNicTldEligibility
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