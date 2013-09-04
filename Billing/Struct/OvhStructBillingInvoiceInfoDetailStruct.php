<?php
/**
 * File for class OvhStructBillingInvoiceInfoDetailStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructBillingInvoiceInfoDetailStruct originally named billingInvoiceInfoDetailStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructBillingInvoiceInfoDetailStruct extends OvhWsdlClass
{
	/**
	 * The quantity
	 * @var int
	 */
	public $quantity;
	/**
	 * The service
	 * @var string
	 */
	public $service;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * The end
	 * @var string
	 */
	public $end;
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The baseprice
	 * @var float
	 */
	public $baseprice;
	/**
	 * The totalprice
	 * @var float
	 */
	public $totalprice;
	/**
	 * The start
	 * @var string
	 */
	public $start;
	/**
	 * Constructor method for billingInvoiceInfoDetailStruct
	 * @see parent::__construct()
	 * @param int $_quantity
	 * @param string $_service
	 * @param string $_description
	 * @param string $_end
	 * @param string $_domain
	 * @param float $_baseprice
	 * @param float $_totalprice
	 * @param string $_start
	 * @return OvhStructBillingInvoiceInfoDetailStruct
	 */
	public function __construct($_quantity = NULL,$_service = NULL,$_description = NULL,$_end = NULL,$_domain = NULL,$_baseprice = NULL,$_totalprice = NULL,$_start = NULL)
	{
		parent::__construct(array('quantity'=>$_quantity,'service'=>$_service,'description'=>$_description,'end'=>$_end,'domain'=>$_domain,'baseprice'=>$_baseprice,'totalprice'=>$_totalprice,'start'=>$_start));
	}
	/**
	 * Get quantity value
	 * @return int|null
	 */
	public function getQuantity()
	{
		return $this->quantity;
	}
	/**
	 * Set quantity value
	 * @param int $_quantity the quantity
	 * @return int
	 */
	public function setQuantity($_quantity)
	{
		return ($this->quantity = $_quantity);
	}
	/**
	 * Get service value
	 * @return string|null
	 */
	public function getService()
	{
		return $this->service;
	}
	/**
	 * Set service value
	 * @param string $_service the service
	 * @return string
	 */
	public function setService($_service)
	{
		return ($this->service = $_service);
	}
	/**
	 * Get description value
	 * @return string|null
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set description value
	 * @param string $_description the description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get end value
	 * @return string|null
	 */
	public function getEnd()
	{
		return $this->end;
	}
	/**
	 * Set end value
	 * @param string $_end the end
	 * @return string
	 */
	public function setEnd($_end)
	{
		return ($this->end = $_end);
	}
	/**
	 * Get domain value
	 * @return string|null
	 */
	public function getDomain()
	{
		return $this->domain;
	}
	/**
	 * Set domain value
	 * @param string $_domain the domain
	 * @return string
	 */
	public function setDomain($_domain)
	{
		return ($this->domain = $_domain);
	}
	/**
	 * Get baseprice value
	 * @return float|null
	 */
	public function getBaseprice()
	{
		return $this->baseprice;
	}
	/**
	 * Set baseprice value
	 * @param float $_baseprice the baseprice
	 * @return float
	 */
	public function setBaseprice($_baseprice)
	{
		return ($this->baseprice = $_baseprice);
	}
	/**
	 * Get totalprice value
	 * @return float|null
	 */
	public function getTotalprice()
	{
		return $this->totalprice;
	}
	/**
	 * Set totalprice value
	 * @param float $_totalprice the totalprice
	 * @return float
	 */
	public function setTotalprice($_totalprice)
	{
		return ($this->totalprice = $_totalprice);
	}
	/**
	 * Get start value
	 * @return string|null
	 */
	public function getStart()
	{
		return $this->start;
	}
	/**
	 * Set start value
	 * @param string $_start the start
	 * @return string
	 */
	public function setStart($_start)
	{
		return ($this->start = $_start);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructBillingInvoiceInfoDetailStruct
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