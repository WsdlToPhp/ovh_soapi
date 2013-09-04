<?php
/**
 * File for class OvhStructTelephonyLineOrder
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyLineOrder originally named telephonyLineOrder
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyLineOrder extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The billingAccount
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $billingAccount;
	/**
	 * The offer
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $offer;
	/**
	 * The prefix
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $prefix;
	/**
	 * The quantity
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $quantity;
	/**
	 * The payWithPoints
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $payWithPoints;
	/**
	 * Constructor method for telephonyLineOrder
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_billingAccount
	 * @param string $_offer
	 * @param string $_prefix
	 * @param int $_quantity
	 * @param boolean $_payWithPoints
	 * @return OvhStructTelephonyLineOrder
	 */
	public function __construct($_session = NULL,$_billingAccount = NULL,$_offer = NULL,$_prefix = NULL,$_quantity = NULL,$_payWithPoints = NULL)
	{
		parent::__construct(array('session'=>$_session,'billingAccount'=>$_billingAccount,'offer'=>$_offer,'prefix'=>$_prefix,'quantity'=>$_quantity,'payWithPoints'=>$_payWithPoints));
	}
	/**
	 * Get session value
	 * @return string|null
	 */
	public function getSession()
	{
		return $this->session;
	}
	/**
	 * Set session value
	 * @param string $_session the session
	 * @return string
	 */
	public function setSession($_session)
	{
		return ($this->session = $_session);
	}
	/**
	 * Get billingAccount value
	 * @return string|null
	 */
	public function getBillingAccount()
	{
		return $this->billingAccount;
	}
	/**
	 * Set billingAccount value
	 * @param string $_billingAccount the billingAccount
	 * @return string
	 */
	public function setBillingAccount($_billingAccount)
	{
		return ($this->billingAccount = $_billingAccount);
	}
	/**
	 * Get offer value
	 * @return string|null
	 */
	public function getOffer()
	{
		return $this->offer;
	}
	/**
	 * Set offer value
	 * @param string $_offer the offer
	 * @return string
	 */
	public function setOffer($_offer)
	{
		return ($this->offer = $_offer);
	}
	/**
	 * Get prefix value
	 * @return string|null
	 */
	public function getPrefix()
	{
		return $this->prefix;
	}
	/**
	 * Set prefix value
	 * @param string $_prefix the prefix
	 * @return string
	 */
	public function setPrefix($_prefix)
	{
		return ($this->prefix = $_prefix);
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
	 * Get payWithPoints value
	 * @return boolean|null
	 */
	public function getPayWithPoints()
	{
		return $this->payWithPoints;
	}
	/**
	 * Set payWithPoints value
	 * @param boolean $_payWithPoints the payWithPoints
	 * @return boolean
	 */
	public function setPayWithPoints($_payWithPoints)
	{
		return ($this->payWithPoints = $_payWithPoints);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyLineOrder
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