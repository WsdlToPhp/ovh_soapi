<?php
/**
 * File for class OvhStructDedicatedReverseStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedReverseStruct originally named dedicatedReverseStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedReverseStruct extends OvhWsdlClass
{
	/**
	 * The reverse
	 * @var string
	 */
	public $reverse;
	/**
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * Constructor method for dedicatedReverseStruct
	 * @see parent::__construct()
	 * @param string $_reverse
	 * @param string $_ip
	 * @param string $_type
	 * @return OvhStructDedicatedReverseStruct
	 */
	public function __construct($_reverse = NULL,$_ip = NULL,$_type = NULL)
	{
		parent::__construct(array('reverse'=>$_reverse,'ip'=>$_ip,'type'=>$_type));
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
	 * Get ip value
	 * @return string|null
	 */
	public function getIp()
	{
		return $this->ip;
	}
	/**
	 * Set ip value
	 * @param string $_ip the ip
	 * @return string
	 */
	public function setIp($_ip)
	{
		return ($this->ip = $_ip);
	}
	/**
	 * Get type value
	 * @return string|null
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set type value
	 * @param string $_type the type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedReverseStruct
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