<?php
/**
 * File for class OvhStructTelephonyBillStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyBillStruct originally named telephonyBillStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyBillStruct extends OvhWsdlClass
{
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The price
	 * @var float
	 */
	public $price;
	/**
	 * The orderId
	 * @var int
	 */
	public $orderId;
	/**
	 * The orderPaid
	 * @var boolean
	 */
	public $orderPaid;
	/**
	 * The orderUrl
	 * @var string
	 */
	public $orderUrl;
	/**
	 * The billUrl
	 * @var string
	 */
	public $billUrl;
	/**
	 * Constructor method for telephonyBillStruct
	 * @see parent::__construct()
	 * @param string $_date
	 * @param float $_price
	 * @param int $_orderId
	 * @param boolean $_orderPaid
	 * @param string $_orderUrl
	 * @param string $_billUrl
	 * @return OvhStructTelephonyBillStruct
	 */
	public function __construct($_date = NULL,$_price = NULL,$_orderId = NULL,$_orderPaid = NULL,$_orderUrl = NULL,$_billUrl = NULL)
	{
		parent::__construct(array('date'=>$_date,'price'=>$_price,'orderId'=>$_orderId,'orderPaid'=>$_orderPaid,'orderUrl'=>$_orderUrl,'billUrl'=>$_billUrl));
	}
	/**
	 * Get date value
	 * @return string|null
	 */
	public function getDate()
	{
		return $this->date;
	}
	/**
	 * Set date value
	 * @param string $_date the date
	 * @return string
	 */
	public function setDate($_date)
	{
		return ($this->date = $_date);
	}
	/**
	 * Get price value
	 * @return float|null
	 */
	public function getPrice()
	{
		return $this->price;
	}
	/**
	 * Set price value
	 * @param float $_price the price
	 * @return float
	 */
	public function setPrice($_price)
	{
		return ($this->price = $_price);
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
	 * Get orderPaid value
	 * @return boolean|null
	 */
	public function getOrderPaid()
	{
		return $this->orderPaid;
	}
	/**
	 * Set orderPaid value
	 * @param boolean $_orderPaid the orderPaid
	 * @return boolean
	 */
	public function setOrderPaid($_orderPaid)
	{
		return ($this->orderPaid = $_orderPaid);
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
	 * Get billUrl value
	 * @return string|null
	 */
	public function getBillUrl()
	{
		return $this->billUrl;
	}
	/**
	 * Set billUrl value
	 * @param string $_billUrl the billUrl
	 * @return string
	 */
	public function setBillUrl($_billUrl)
	{
		return ($this->billUrl = $_billUrl);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyBillStruct
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