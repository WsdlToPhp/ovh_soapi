<?php
/**
 * File for class OvhStructBillingInvoiceInfoPayementStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructBillingInvoiceInfoPayementStruct originally named billingInvoiceInfoPayementStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructBillingInvoiceInfoPayementStruct extends OvhWsdlClass
{
	/**
	 * The finaldate
	 * @var string
	 */
	public $finaldate;
	/**
	 * The deposit_date
	 * @var string
	 */
	public $deposit_date;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The customerid
	 * @var string
	 */
	public $customerid;
	/**
	 * The paymentmean
	 * @var string
	 */
	public $paymentmean;
	/**
	 * The paymentdate
	 * @var string
	 */
	public $paymentdate;
	/**
	 * The orderid
	 * @var int
	 */
	public $orderid;
	/**
	 * Constructor method for billingInvoiceInfoPayementStruct
	 * @see parent::__construct()
	 * @param string $_finaldate
	 * @param string $_deposit_date
	 * @param string $_status
	 * @param string $_customerid
	 * @param string $_paymentmean
	 * @param string $_paymentdate
	 * @param int $_orderid
	 * @return OvhStructBillingInvoiceInfoPayementStruct
	 */
	public function __construct($_finaldate = NULL,$_deposit_date = NULL,$_status = NULL,$_customerid = NULL,$_paymentmean = NULL,$_paymentdate = NULL,$_orderid = NULL)
	{
		parent::__construct(array('finaldate'=>$_finaldate,'deposit_date'=>$_deposit_date,'status'=>$_status,'customerid'=>$_customerid,'paymentmean'=>$_paymentmean,'paymentdate'=>$_paymentdate,'orderid'=>$_orderid));
	}
	/**
	 * Get finaldate value
	 * @return string|null
	 */
	public function getFinaldate()
	{
		return $this->finaldate;
	}
	/**
	 * Set finaldate value
	 * @param string $_finaldate the finaldate
	 * @return string
	 */
	public function setFinaldate($_finaldate)
	{
		return ($this->finaldate = $_finaldate);
	}
	/**
	 * Get deposit_date value
	 * @return string|null
	 */
	public function getDeposit_date()
	{
		return $this->deposit_date;
	}
	/**
	 * Set deposit_date value
	 * @param string $_deposit_date the deposit_date
	 * @return string
	 */
	public function setDeposit_date($_deposit_date)
	{
		return ($this->deposit_date = $_deposit_date);
	}
	/**
	 * Get status value
	 * @return string|null
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set status value
	 * @param string $_status the status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
	}
	/**
	 * Get customerid value
	 * @return string|null
	 */
	public function getCustomerid()
	{
		return $this->customerid;
	}
	/**
	 * Set customerid value
	 * @param string $_customerid the customerid
	 * @return string
	 */
	public function setCustomerid($_customerid)
	{
		return ($this->customerid = $_customerid);
	}
	/**
	 * Get paymentmean value
	 * @return string|null
	 */
	public function getPaymentmean()
	{
		return $this->paymentmean;
	}
	/**
	 * Set paymentmean value
	 * @param string $_paymentmean the paymentmean
	 * @return string
	 */
	public function setPaymentmean($_paymentmean)
	{
		return ($this->paymentmean = $_paymentmean);
	}
	/**
	 * Get paymentdate value
	 * @return string|null
	 */
	public function getPaymentdate()
	{
		return $this->paymentdate;
	}
	/**
	 * Set paymentdate value
	 * @param string $_paymentdate the paymentdate
	 * @return string
	 */
	public function setPaymentdate($_paymentdate)
	{
		return ($this->paymentdate = $_paymentdate);
	}
	/**
	 * Get orderid value
	 * @return int|null
	 */
	public function getOrderid()
	{
		return $this->orderid;
	}
	/**
	 * Set orderid value
	 * @param int $_orderid the orderid
	 * @return int
	 */
	public function setOrderid($_orderid)
	{
		return ($this->orderid = $_orderid);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructBillingInvoiceInfoPayementStruct
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