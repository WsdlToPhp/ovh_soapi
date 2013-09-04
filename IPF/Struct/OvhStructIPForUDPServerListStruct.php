<?php
/**
 * File for class OvhStructIPForUDPServerListStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructIPForUDPServerListStruct originally named IPForUDPServerListStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructIPForUDPServerListStruct extends OvhWsdlClass
{
	/**
	 * The server
	 * @var string
	 */
	public $server;
	/**
	 * The reverse
	 * @var string
	 */
	public $reverse;
	/**
	 * The ipList
	 * @var OvhStructMyArrayOfDedicatedIPForUDPStructType
	 */
	public $ipList;
	/**
	 * Constructor method for IPForUDPServerListStruct
	 * @see parent::__construct()
	 * @param string $_server
	 * @param string $_reverse
	 * @param OvhStructMyArrayOfDedicatedIPForUDPStructType $_ipList
	 * @return OvhStructIPForUDPServerListStruct
	 */
	public function __construct($_server = NULL,$_reverse = NULL,$_ipList = NULL)
	{
		parent::__construct(array('server'=>$_server,'reverse'=>$_reverse,'ipList'=>($_ipList instanceof OvhStructMyArrayOfDedicatedIPForUDPStructType)?$_ipList:new OvhStructMyArrayOfDedicatedIPForUDPStructType($_ipList)));
	}
	/**
	 * Get server value
	 * @return string|null
	 */
	public function getServer()
	{
		return $this->server;
	}
	/**
	 * Set server value
	 * @param string $_server the server
	 * @return string
	 */
	public function setServer($_server)
	{
		return ($this->server = $_server);
	}
	/**
	 * Get reverse value
	 * @return string|null
	 */
	public function getReverse()
	{
		return $this->reverse;
	}
	/**
	 * Set reverse value
	 * @param string $_reverse the reverse
	 * @return string
	 */
	public function setReverse($_reverse)
	{
		return ($this->reverse = $_reverse);
	}
	/**
	 * Get ipList value
	 * @return OvhStructMyArrayOfDedicatedIPForUDPStructType|null
	 */
	public function getIpList()
	{
		return $this->ipList;
	}
	/**
	 * Set ipList value
	 * @param OvhStructMyArrayOfDedicatedIPForUDPStructType $_ipList the ipList
	 * @return OvhStructMyArrayOfDedicatedIPForUDPStructType
	 */
	public function setIpList($_ipList)
	{
		return ($this->ipList = $_ipList);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructIPForUDPServerListStruct
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