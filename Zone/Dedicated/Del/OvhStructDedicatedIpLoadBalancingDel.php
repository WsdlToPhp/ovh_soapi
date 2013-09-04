<?php
/**
 * File for class OvhStructDedicatedIpLoadBalancingDel
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedIpLoadBalancingDel originally named dedicatedIpLoadBalancingDel
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedIpLoadBalancingDel extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The ipLoadBalancing
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $ipLoadBalancing;
	/**
	 * Constructor method for dedicatedIpLoadBalancingDel
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_ipLoadBalancing
	 * @return OvhStructDedicatedIpLoadBalancingDel
	 */
	public function __construct($_session = NULL,$_ipLoadBalancing = NULL)
	{
		parent::__construct(array('session'=>$_session,'ipLoadBalancing'=>$_ipLoadBalancing));
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
	 * Get ipLoadBalancing value
	 * @return string|null
	 */
	public function getIpLoadBalancing()
	{
		return $this->ipLoadBalancing;
	}
	/**
	 * Set ipLoadBalancing value
	 * @param string $_ipLoadBalancing the ipLoadBalancing
	 * @return string
	 */
	public function setIpLoadBalancing($_ipLoadBalancing)
	{
		return ($this->ipLoadBalancing = $_ipLoadBalancing);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedIpLoadBalancingDel
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