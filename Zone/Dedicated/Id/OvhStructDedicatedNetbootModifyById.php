<?php
/**
 * File for class OvhStructDedicatedNetbootModifyById
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedNetbootModifyById originally named dedicatedNetbootModifyById
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedNetbootModifyById extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The hostname
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $hostname;
	/**
	 * The id
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $id;
	/**
	 * The root
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $root;
	/**
	 * The rescueEmail
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $rescueEmail;
	/**
	 * Constructor method for dedicatedNetbootModifyById
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_hostname
	 * @param string $_id
	 * @param string $_root
	 * @param string $_rescueEmail
	 * @return OvhStructDedicatedNetbootModifyById
	 */
	public function __construct($_session = NULL,$_hostname = NULL,$_id = NULL,$_root = NULL,$_rescueEmail = NULL)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'id'=>$_id,'root'=>$_root,'rescueEmail'=>$_rescueEmail));
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
	 * Get hostname value
	 * @return string|null
	 */
	public function getHostname()
	{
		return $this->hostname;
	}
	/**
	 * Set hostname value
	 * @param string $_hostname the hostname
	 * @return string
	 */
	public function setHostname($_hostname)
	{
		return ($this->hostname = $_hostname);
	}
	/**
	 * Get id value
	 * @return string|null
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set id value
	 * @param string $_id the id
	 * @return string
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
	}
	/**
	 * Get root value
	 * @return string|null
	 */
	public function getRoot()
	{
		return $this->root;
	}
	/**
	 * Set root value
	 * @param string $_root the root
	 * @return string
	 */
	public function setRoot($_root)
	{
		return ($this->root = $_root);
	}
	/**
	 * Get rescueEmail value
	 * @return string|null
	 */
	public function getRescueEmail()
	{
		return $this->rescueEmail;
	}
	/**
	 * Set rescueEmail value
	 * @param string $_rescueEmail the rescueEmail
	 * @return string
	 */
	public function setRescueEmail($_rescueEmail)
	{
		return ($this->rescueEmail = $_rescueEmail);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedNetbootModifyById
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