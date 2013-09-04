<?php
/**
 * File for class OvhStructDedicatedIpLoadBalancingAdd
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedIpLoadBalancingAdd originally named dedicatedIpLoadBalancingAdd
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedIpLoadBalancingAdd extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The name
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $name;
	/**
	 * The ipLoadBalancing
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $ipLoadBalancing;
	/**
	 * The serverList
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfStringType
	 */
	public $serverList;
	/**
	 * Constructor method for dedicatedIpLoadBalancingAdd
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_name
	 * @param string $_ipLoadBalancing
	 * @param OvhStructMyArrayOfStringType $_serverList
	 * @return OvhStructDedicatedIpLoadBalancingAdd
	 */
	public function __construct($_session = NULL,$_name = NULL,$_ipLoadBalancing = NULL,$_serverList = NULL)
	{
		parent::__construct(array('session'=>$_session,'name'=>$_name,'ipLoadBalancing'=>$_ipLoadBalancing,'serverList'=>($_serverList instanceof OvhStructMyArrayOfStringType)?$_serverList:new OvhStructMyArrayOfStringType($_serverList)));
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
	 * Get name value
	 * @return string|null
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set name value
	 * @param string $_name the name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
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
	 * Get serverList value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getServerList()
	{
		return $this->serverList;
	}
	/**
	 * Set serverList value
	 * @param OvhStructMyArrayOfStringType $_serverList the serverList
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setServerList($_serverList)
	{
		return ($this->serverList = $_serverList);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedIpLoadBalancingAdd
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