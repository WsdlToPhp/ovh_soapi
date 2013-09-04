<?php
/**
 * File for class OvhStructTelephonySecurityDepositCreditReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySecurityDepositCreditReturn originally named telephonySecurityDepositCreditReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySecurityDepositCreditReturn extends OvhWsdlClass
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
	 * The vat
	 * @var float
	 */
	public $vat;
	/**
	 * The totalPriceWithVat
	 * @var float
	 */
	public $totalPriceWithVat;
	/**
	 * The ribBankCode
	 * @var string
	 */
	public $ribBankCode;
	/**
	 * The ribAgencyCode
	 * @var string
	 */
	public $ribAgencyCode;
	/**
	 * The ribAccountNumber
	 * @var string
	 */
	public $ribAccountNumber;
	/**
	 * The ribKey
	 * @var string
	 */
	public $ribKey;
	/**
	 * The iban
	 * @var string
	 */
	public $iban;
	/**
	 * The bic
	 * @var string
	 */
	public $bic;
	/**
	 * Constructor method for telephonySecurityDepositCreditReturn
	 * @see parent::__construct()
	 * @param int $_orderId
	 * @param string $_orderPassword
	 * @param string $_orderUrl
	 * @param float $_totalPrice
	 * @param float $_vat
	 * @param float $_totalPriceWithVat
	 * @param string $_ribBankCode
	 * @param string $_ribAgencyCode
	 * @param string $_ribAccountNumber
	 * @param string $_ribKey
	 * @param string $_iban
	 * @param string $_bic
	 * @return OvhStructTelephonySecurityDepositCreditReturn
	 */
	public function __construct($_orderId = NULL,$_orderPassword = NULL,$_orderUrl = NULL,$_totalPrice = NULL,$_vat = NULL,$_totalPriceWithVat = NULL,$_ribBankCode = NULL,$_ribAgencyCode = NULL,$_ribAccountNumber = NULL,$_ribKey = NULL,$_iban = NULL,$_bic = NULL)
	{
		parent::__construct(array('orderId'=>$_orderId,'orderPassword'=>$_orderPassword,'orderUrl'=>$_orderUrl,'totalPrice'=>$_totalPrice,'vat'=>$_vat,'totalPriceWithVat'=>$_totalPriceWithVat,'ribBankCode'=>$_ribBankCode,'ribAgencyCode'=>$_ribAgencyCode,'ribAccountNumber'=>$_ribAccountNumber,'ribKey'=>$_ribKey,'iban'=>$_iban,'bic'=>$_bic));
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
	 * Get ribBankCode value
	 * @return string|null
	 */
	public function getRibBankCode()
	{
		return $this->ribBankCode;
	}
	/**
	 * Set ribBankCode value
	 * @param string $_ribBankCode the ribBankCode
	 * @return string
	 */
	public function setRibBankCode($_ribBankCode)
	{
		return ($this->ribBankCode = $_ribBankCode);
	}
	/**
	 * Get ribAgencyCode value
	 * @return string|null
	 */
	public function getRibAgencyCode()
	{
		return $this->ribAgencyCode;
	}
	/**
	 * Set ribAgencyCode value
	 * @param string $_ribAgencyCode the ribAgencyCode
	 * @return string
	 */
	public function setRibAgencyCode($_ribAgencyCode)
	{
		return ($this->ribAgencyCode = $_ribAgencyCode);
	}
	/**
	 * Get ribAccountNumber value
	 * @return string|null
	 */
	public function getRibAccountNumber()
	{
		return $this->ribAccountNumber;
	}
	/**
	 * Set ribAccountNumber value
	 * @param string $_ribAccountNumber the ribAccountNumber
	 * @return string
	 */
	public function setRibAccountNumber($_ribAccountNumber)
	{
		return ($this->ribAccountNumber = $_ribAccountNumber);
	}
	/**
	 * Get ribKey value
	 * @return string|null
	 */
	public function getRibKey()
	{
		return $this->ribKey;
	}
	/**
	 * Set ribKey value
	 * @param string $_ribKey the ribKey
	 * @return string
	 */
	public function setRibKey($_ribKey)
	{
		return ($this->ribKey = $_ribKey);
	}
	/**
	 * Get iban value
	 * @return string|null
	 */
	public function getIban()
	{
		return $this->iban;
	}
	/**
	 * Set iban value
	 * @param string $_iban the iban
	 * @return string
	 */
	public function setIban($_iban)
	{
		return ($this->iban = $_iban);
	}
	/**
	 * Get bic value
	 * @return string|null
	 */
	public function getBic()
	{
		return $this->bic;
	}
	/**
	 * Set bic value
	 * @param string $_bic the bic
	 * @return string
	 */
	public function setBic($_bic)
	{
		return ($this->bic = $_bic);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySecurityDepositCreditReturn
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