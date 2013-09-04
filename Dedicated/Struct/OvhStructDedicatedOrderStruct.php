<?php
/**
 * File for class OvhStructDedicatedOrderStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedOrderStruct originally named dedicatedOrderStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedOrderStruct extends OvhWsdlClass
{
	/**
	 * The orderPassword
	 * @var string
	 */
	public $orderPassword;
	/**
	 * The orderId
	 * @var int
	 */
	public $orderId;
	/**
	 * The orderUrl
	 * @var string
	 */
	public $orderUrl;
	/**
	 * Constructor method for dedicatedOrderStruct
	 * @see parent::__construct()
	 * @param string $_orderPassword
	 * @param int $_orderId
	 * @param string $_orderUrl
	 * @return OvhStructDedicatedOrderStruct
	 */
	public function __construct($_orderPassword = NULL,$_orderId = NULL,$_orderUrl = NULL)
	{
		parent::__construct(array('orderPassword'=>$_orderPassword,'orderId'=>$_orderId,'orderUrl'=>$_orderUrl));
	}
	/**
	 * Get orderPassword value
	 * @return string|null
	 */
	public function getOrderPassword()
	{
		return $this->orderPassword;
	}
	/**
	 * Set orderPassword value
	 * @param string $_orderPassword the orderPassword
	 * @return string
	 */
	public function setOrderPassword($_orderPassword)
	{
		return ($this->orderPassword = $_orderPassword);
	}
	/**
	 * Get orderId value
	 * @return int|null
	 */
	public function getOrderId()
	{
		return $this->orderId;
	}
	/**
	 * Set orderId value
	 * @param int $_orderId the orderId
	 * @return int
	 */
	public function setOrderId($_orderId)
	{
		return ($this->orderId = $_orderId);
	}
	/**
	 * Get orderUrl value
	 * @return string|null
	 */
	public function getOrderUrl()
	{
		return $this->orderUrl;
	}
	/**
	 * Set orderUrl value
	 * @param string $_orderUrl the orderUrl
	 * @return string
	 */
	public function setOrderUrl($_orderUrl)
	{
		return ($this->orderUrl = $_orderUrl);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedOrderStruct
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