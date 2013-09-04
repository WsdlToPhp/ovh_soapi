<?php
/**
 * File for class OvhStructBillingInvoiceInfoReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructBillingInvoiceInfoReturn originally named billingInvoiceInfoReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructBillingInvoiceInfoReturn extends OvhWsdlClass
{
	/**
	 * The billnum
	 * @var string
	 */
	public $billnum;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The nicbilling
	 * @var string
	 */
	public $nicbilling;
	/**
	 * The baseprice
	 * @var string
	 */
	public $baseprice;
	/**
	 * The finalprice
	 * @var float
	 */
	public $finalprice;
	/**
	 * The password
	 * @var string
	 */
	public $password;
	/**
	 * The order
	 * @var string
	 */
	public $order;
	/**
	 * The nicorder
	 * @var string
	 */
	public $nicorder;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The taxrate
	 * @var float
	 */
	public $taxrate;
	/**
	 * The tax
	 * @var float
	 */
	public $tax;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The details
	 * @var OvhStructMyArrayOfBillingInvoiceInfoDetailStructType
	 */
	public $details;
	/**
	 * The payment
	 * @var OvhStructBillingInvoiceInfoPayementStruct
	 */
	public $payment;
	/**
	 * Constructor method for billingInvoiceInfoReturn
	 * @see parent::__construct()
	 * @param string $_billnum
	 * @param string $_date
	 * @param string $_nicbilling
	 * @param string $_baseprice
	 * @param float $_finalprice
	 * @param string $_password
	 * @param string $_order
	 * @param string $_nicorder
	 * @param string $_country
	 * @param float $_taxrate
	 * @param float $_tax
	 * @param string $_type
	 * @param OvhStructMyArrayOfBillingInvoiceInfoDetailStructType $_details
	 * @param OvhStructBillingInvoiceInfoPayementStruct $_payment
	 * @return OvhStructBillingInvoiceInfoReturn
	 */
	public function __construct($_billnum = NULL,$_date = NULL,$_nicbilling = NULL,$_baseprice = NULL,$_finalprice = NULL,$_password = NULL,$_order = NULL,$_nicorder = NULL,$_country = NULL,$_taxrate = NULL,$_tax = NULL,$_type = NULL,$_details = NULL,$_payment = NULL)
	{
		parent::__construct(array('billnum'=>$_billnum,'date'=>$_date,'nicbilling'=>$_nicbilling,'baseprice'=>$_baseprice,'finalprice'=>$_finalprice,'password'=>$_password,'order'=>$_order,'nicorder'=>$_nicorder,'country'=>$_country,'taxrate'=>$_taxrate,'tax'=>$_tax,'type'=>$_type,'details'=>($_details instanceof OvhStructMyArrayOfBillingInvoiceInfoDetailStructType)?$_details:new OvhStructMyArrayOfBillingInvoiceInfoDetailStructType($_details),'payment'=>$_payment));
	}
	/**
	 * Get billnum value
	 * @return string|null
	 */
	public function getBillnum()
	{
		return $this->billnum;
	}
	/**
	 * Set billnum value
	 * @param string $_billnum the billnum
	 * @return string
	 */
	public function setBillnum($_billnum)
	{
		return ($this->billnum = $_billnum);
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
	 * Get nicbilling value
	 * @return string|null
	 */
	public function getNicbilling()
	{
		return $this->nicbilling;
	}
	/**
	 * Set nicbilling value
	 * @param string $_nicbilling the nicbilling
	 * @return string
	 */
	public function setNicbilling($_nicbilling)
	{
		return ($this->nicbilling = $_nicbilling);
	}
	/**
	 * Get baseprice value
	 * @return string|null
	 */
	public function getBaseprice()
	{
		return $this->baseprice;
	}
	/**
	 * Set baseprice value
	 * @param string $_baseprice the baseprice
	 * @return string
	 */
	public function setBaseprice($_baseprice)
	{
		return ($this->baseprice = $_baseprice);
	}
	/**
	 * Get finalprice value
	 * @return float|null
	 */
	public function getFinalprice()
	{
		return $this->finalprice;
	}
	/**
	 * Set finalprice value
	 * @param float $_finalprice the finalprice
	 * @return float
	 */
	public function setFinalprice($_finalprice)
	{
		return ($this->finalprice = $_finalprice);
	}
	/**
	 * Get password value
	 * @return string|null
	 */
	public function getPassword()
	{
		return $this->password;
	}
	/**
	 * Set password value
	 * @param string $_password the password
	 * @return string
	 */
	public function setPassword($_password)
	{
		return ($this->password = $_password);
	}
	/**
	 * Get order value
	 * @return string|null
	 */
	public function getOrder()
	{
		return $this->order;
	}
	/**
	 * Set order value
	 * @param string $_order the order
	 * @return string
	 */
	public function setOrder($_order)
	{
		return ($this->order = $_order);
	}
	/**
	 * Get nicorder value
	 * @return string|null
	 */
	public function getNicorder()
	{
		return $this->nicorder;
	}
	/**
	 * Set nicorder value
	 * @param string $_nicorder the nicorder
	 * @return string
	 */
	public function setNicorder($_nicorder)
	{
		return ($this->nicorder = $_nicorder);
	}
	/**
	 * Get country value
	 * @return string|null
	 */
	public function getCountry()
	{
		return $this->country;
	}
	/**
	 * Set country value
	 * @param string $_country the country
	 * @return string
	 */
	public function setCountry($_country)
	{
		return ($this->country = $_country);
	}
	/**
	 * Get taxrate value
	 * @return float|null
	 */
	public function getTaxrate()
	{
		return $this->taxrate;
	}
	/**
	 * Set taxrate value
	 * @param float $_taxrate the taxrate
	 * @return float
	 */
	public function setTaxrate($_taxrate)
	{
		return ($this->taxrate = $_taxrate);
	}
	/**
	 * Get tax value
	 * @return float|null
	 */
	public function getTax()
	{
		return $this->tax;
	}
	/**
	 * Set tax value
	 * @param float $_tax the tax
	 * @return float
	 */
	public function setTax($_tax)
	{
		return ($this->tax = $_tax);
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
	 * Get details value
	 * @return OvhStructMyArrayOfBillingInvoiceInfoDetailStructType|null
	 */
	public function getDetails()
	{
		return $this->details;
	}
	/**
	 * Set details value
	 * @param OvhStructMyArrayOfBillingInvoiceInfoDetailStructType $_details the details
	 * @return OvhStructMyArrayOfBillingInvoiceInfoDetailStructType
	 */
	public function setDetails($_details)
	{
		return ($this->details = $_details);
	}
	/**
	 * Get payment value
	 * @return OvhStructBillingInvoiceInfoPayementStruct|null
	 */
	public function getPayment()
	{
		return $this->payment;
	}
	/**
	 * Set payment value
	 * @param OvhStructBillingInvoiceInfoPayementStruct $_payment the payment
	 * @return OvhStructBillingInvoiceInfoPayementStruct
	 */
	public function setPayment($_payment)
	{
		return ($this->payment = $_payment);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructBillingInvoiceInfoReturn
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