<?php
/**
 * File for class OvhStructDedicatedIpLoadBalancingStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedIpLoadBalancingStruct originally named dedicatedIpLoadBalancingStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedIpLoadBalancingStruct extends OvhWsdlClass
{
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The ipLoadBalancing
	 * @var string
	 */
	public $ipLoadBalancing;
	/**
	 * The active
	 * @var int
	 */
	public $active;
	/**
	 * The inactive
	 * @var int
	 */
	public $inactive;
	/**
	 * The serverList
	 * @var OvhStructMyArrayOfDedicatedIpLoadBalancingServerStructType
	 */
	public $serverList;
	/**
	 * Constructor method for dedicatedIpLoadBalancingStruct
	 * @see parent::__construct()
	 * @param string $_name
	 * @param string $_ipLoadBalancing
	 * @param int $_active
	 * @param int $_inactive
	 * @param OvhStructMyArrayOfDedicatedIpLoadBalancingServerStructType $_serverList
	 * @return OvhStructDedicatedIpLoadBalancingStruct
	 */
	public function __construct($_name = NULL,$_ipLoadBalancing = NULL,$_active = NULL,$_inactive = NULL,$_serverList = NULL)
	{
		parent::__construct(array('name'=>$_name,'ipLoadBalancing'=>$_ipLoadBalancing,'active'=>$_active,'inactive'=>$_inactive,'serverList'=>($_serverList instanceof OvhStructMyArrayOfDedicatedIpLoadBalancingServerStructType)?$_serverList:new OvhStructMyArrayOfDedicatedIpLoadBalancingServerStructType($_serverList)));
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
	 * Get active value
	 * @return int|null
	 */
	public function getActive()
	{
		return $this->active;
	}
	/**
	 * Set active value
	 * @param int $_active the active
	 * @return int
	 */
	public function setActive($_active)
	{
		return ($this->active = $_active);
	}
	/**
	 * Get inactive value
	 * @return int|null
	 */
	public function getInactive()
	{
		return $this->inactive;
	}
	/**
	 * Set inactive value
	 * @param int $_inactive the inactive
	 * @return int
	 */
	public function setInactive($_inactive)
	{
		return ($this->inactive = $_inactive);
	}
	/**
	 * Get serverList value
	 * @return OvhStructMyArrayOfDedicatedIpLoadBalancingServerStructType|null
	 */
	public function getServerList()
	{
		return $this->serverList;
	}
	/**
	 * Set serverList value
	 * @param OvhStructMyArrayOfDedicatedIpLoadBalancingServerStructType $_serverList the serverList
	 * @return OvhStructMyArrayOfDedicatedIpLoadBalancingServerStructType
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
	 * @return OvhStructDedicatedIpLoadBalancingStruct
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