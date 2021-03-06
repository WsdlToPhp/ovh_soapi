<?php
/**
 * File for class OvhStructTelephonyNumberOrderReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyNumberOrderReturn originally named telephonyNumberOrderReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyNumberOrderReturn extends OvhWsdlClass
{
	/**
	 * The orderId
	 * @var int
	 */
	public $orderId;
	/**
	 * The orderPassword
	 * @var string
	 */
	public $orderPassword;
	/**
	 * The orderUrl
	 * @var string
	 */
	public $orderUrl;
	/**
	 * The totalPrice
	 * @var float
	 */
	public $totalPrice;
	/**
	 * Constructor method for telephonyNumberOrderReturn
	 * @see parent::__construct()
	 * @param int $_orderId
	 * @param string $_orderPassword
	 * @param string $_orderUrl
	 * @param float $_totalPrice
	 * @return OvhStructTelephonyNumberOrderReturn
	 */
	public function __construct($_orderId = NULL,$_orderPassword = NULL,$_orderUrl = NULL,$_totalPrice = NULL)
	{
		parent::__construct(array('orderId'=>$_orderId,'orderPassword'=>$_orderPassword,'orderUrl'=>$_orderUrl,'totalPrice'=>$_totalPrice));
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
	 * Get totalPrice value
	 * @return float|null
	 */
	public function getTotalPrice()
	{
		return $this->totalPrice;
	}
	/**
	 * Set totalPrice value
	 * @param float $_totalPrice the totalPrice
	 * @return float
	 */
	public function setTotalPrice($_totalPrice)
	{
		return ($this->totalPrice = $_totalPrice);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyNumberOrderReturn
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