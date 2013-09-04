<?php
/**
 * File for class OvhStructOrderStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructOrderStruct originally named orderStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructOrderStruct extends OvhWsdlClass
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
	 * The isPaid
	 * @var boolean
	 */
	public $isPaid;
	/**
	 * The paymentStatus
	 * @var string
	 */
	public $paymentStatus;
	/**
	 * Constructor method for orderStruct
	 * @see parent::__construct()
	 * @param int $_orderId
	 * @param string $_orderPassword
	 * @param string $_orderUrl
	 * @param boolean $_isPaid
	 * @param string $_paymentStatus
	 * @return OvhStructOrderStruct
	 */
	public function __construct($_orderId = NULL,$_orderPassword = NULL,$_orderUrl = NULL,$_isPaid = NULL,$_paymentStatus = NULL)
	{
		parent::__construct(array('orderId'=>$_orderId,'orderPassword'=>$_orderPassword,'orderUrl'=>$_orderUrl,'isPaid'=>$_isPaid,'paymentStatus'=>$_paymentStatus));
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
	 * Get isPaid value
	 * @return boolean|null
	 */
	public function getIsPaid()
	{
		return $this->isPaid;
	}
	/**
	 * Set isPaid value
	 * @param boolean $_isPaid the isPaid
	 * @return boolean
	 */
	public function setIsPaid($_isPaid)
	{
		return ($this->isPaid = $_isPaid);
	}
	/**
	 * Get paymentStatus value
	 * @return string|null
	 */
	public function getPaymentStatus()
	{
		return $this->paymentStatus;
	}
	/**
	 * Set paymentStatus value
	 * @param string $_paymentStatus the paymentStatus
	 * @return string
	 */
	public function setPaymentStatus($_paymentStatus)
	{
		return ($this->paymentStatus = $_paymentStatus);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructOrderStruct
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