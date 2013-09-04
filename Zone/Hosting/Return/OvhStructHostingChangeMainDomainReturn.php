<?php
/**
 * File for class OvhStructHostingChangeMainDomainReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructHostingChangeMainDomainReturn originally named hostingChangeMainDomainReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructHostingChangeMainDomainReturn extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The country
	 * @var string
	 */
	public $country;
	/**
	 * The password
	 * @var string
	 */
	public $password;
	/**
	 * The totalPriceWithVat
	 * @var float
	 */
	public $totalPriceWithVat;
	/**
	 * The totalPrice
	 * @var float
	 */
	public $totalPrice;
	/**
	 * The url
	 * @var string
	 */
	public $url;
	/**
	 * The vatRate
	 * @var float
	 */
	public $vatRate;
	/**
	 * Constructor method for hostingChangeMainDomainReturn
	 * @see parent::__construct()
	 * @param int $_id
	 * @param string $_country
	 * @param string $_password
	 * @param float $_totalPriceWithVat
	 * @param float $_totalPrice
	 * @param string $_url
	 * @param float $_vatRate
	 * @return OvhStructHostingChangeMainDomainReturn
	 */
	public function __construct($_id = NULL,$_country = NULL,$_password = NULL,$_totalPriceWithVat = NULL,$_totalPrice = NULL,$_url = NULL,$_vatRate = NULL)
	{
		parent::__construct(array('id'=>$_id,'country'=>$_country,'password'=>$_password,'totalPriceWithVat'=>$_totalPriceWithVat,'totalPrice'=>$_totalPrice,'url'=>$_url,'vatRate'=>$_vatRate));
	}
	/**
	 * Get id value
	 * @return int|null
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set id value
	 * @param int $_id the id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
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
	 * Get url value
	 * @return string|null
	 */
	public function getUrl()
	{
		return $this->url;
	}
	/**
	 * Set url value
	 * @param string $_url the url
	 * @return string
	 */
	public function setUrl($_url)
	{
		return ($this->url = $_url);
	}
	/**
	 * Get vatRate value
	 * @return float|null
	 */
	public function getVatRate()
	{
		return $this->vatRate;
	}
	/**
	 * Set vatRate value
	 * @param float $_vatRate the vatRate
	 * @return float
	 */
	public function setVatRate($_vatRate)
	{
		return ($this->vatRate = $_vatRate);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructHostingChangeMainDomainReturn
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