<?php
/**
 * File for class OvhStructBillingInvoiceStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructBillingInvoiceStruct originally named billingInvoiceStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructBillingInvoiceStruct extends OvhWsdlClass
{
	/**
	 * The vat
	 * @var float
	 */
	public $vat;
	/**
	 * The totalPrice
	 * @var float
	 */
	public $totalPrice;
	/**
	 * The totalPriceWithVat
	 * @var float
	 */
	public $totalPriceWithVat;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The nic
	 * @var string
	 */
	public $nic;
	/**
	 * The billnum
	 * @var string
	 */
	public $billnum;
	/**
	 * The details
	 * @var OvhStructMyArrayOfBillingInvoiceDetailStructType
	 */
	public $details;
	/**
	 * The domains
	 * @var OvhStructMyArrayOfStringType
	 */
	public $domains;
	/**
	 * The billingCountry
	 * @var string
	 */
	public $billingCountry;
	/**
	 * The ordernum
	 * @var string
	 */
	public $ordernum;
	/**
	 * Constructor method for billingInvoiceStruct
	 * @see parent::__construct()
	 * @param float $_vat
	 * @param float $_totalPrice
	 * @param float $_totalPriceWithVat
	 * @param string $_date
	 * @param string $_nic
	 * @param string $_billnum
	 * @param OvhStructMyArrayOfBillingInvoiceDetailStructType $_details
	 * @param OvhStructMyArrayOfStringType $_domains
	 * @param string $_billingCountry
	 * @param string $_ordernum
	 * @return OvhStructBillingInvoiceStruct
	 */
	public function __construct($_vat = NULL,$_totalPrice = NULL,$_totalPriceWithVat = NULL,$_date = NULL,$_nic = NULL,$_billnum = NULL,$_details = NULL,$_domains = NULL,$_billingCountry = NULL,$_ordernum = NULL)
	{
		parent::__construct(array('vat'=>$_vat,'totalPrice'=>$_totalPrice,'totalPriceWithVat'=>$_totalPriceWithVat,'date'=>$_date,'nic'=>$_nic,'billnum'=>$_billnum,'details'=>($_details instanceof OvhStructMyArrayOfBillingInvoiceDetailStructType)?$_details:new OvhStructMyArrayOfBillingInvoiceDetailStructType($_details),'domains'=>($_domains instanceof OvhStructMyArrayOfStringType)?$_domains:new OvhStructMyArrayOfStringType($_domains),'billingCountry'=>$_billingCountry,'ordernum'=>$_ordernum));
	}
	/**
	 * Get vat value
	 * @return float|null
	 */
	public function getVat()
	{
		return $this->vat;
	}
	/**
	 * Set vat value
	 * @param float $_vat the vat
	 * @return float
	 */
	public function setVat($_vat)
	{
		return ($this->vat = $_vat);
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
	 * Get totalPriceWithVat value
	 * @return float|null
	 */
	public function getTotalPriceWithVat()
	{
		return $this->totalPriceWithVat;
	}
	/**
	 * Set totalPriceWithVat value
	 * @param float $_totalPriceWithVat the totalPriceWithVat
	 * @return float
	 */
	public function setTotalPriceWithVat($_totalPriceWithVat)
	{
		return ($this->totalPriceWithVat = $_totalPriceWithVat);
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
	 * Get nic value
	 * @return string|null
	 */
	public function getNic()
	{
		return $this->nic;
	}
	/**
	 * Set nic value
	 * @param string $_nic the nic
	 * @return string
	 */
	public function setNic($_nic)
	{
		return ($this->nic = $_nic);
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
	 * Get details value
	 * @return OvhStructMyArrayOfBillingInvoiceDetailStructType|null
	 */
	public function getDetails()
	{
		return $this->details;
	}
	/**
	 * Set details value
	 * @param OvhStructMyArrayOfBillingInvoiceDetailStructType $_details the details
	 * @return OvhStructMyArrayOfBillingInvoiceDetailStructType
	 */
	public function setDetails($_details)
	{
		return ($this->details = $_details);
	}
	/**
	 * Get domains value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getDomains()
	{
		return $this->domains;
	}
	/**
	 * Set domains value
	 * @param OvhStructMyArrayOfStringType $_domains the domains
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setDomains($_domains)
	{
		return ($this->domains = $_domains);
	}
	/**
	 * Get billingCountry value
	 * @return string|null
	 */
	public function getBillingCountry()
	{
		return $this->billingCountry;
	}
	/**
	 * Set billingCountry value
	 * @param string $_billingCountry the billingCountry
	 * @return string
	 */
	public function setBillingCountry($_billingCountry)
	{
		return ($this->billingCountry = $_billingCountry);
	}
	/**
	 * Get ordernum value
	 * @return string|null
	 */
	public function getOrdernum()
	{
		return $this->ordernum;
	}
	/**
	 * Set ordernum value
	 * @param string $_ordernum the ordernum
	 * @return string
	 */
	public function setOrdernum($_ordernum)
	{
		return ($this->ordernum = $_ordernum);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructBillingInvoiceStruct
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