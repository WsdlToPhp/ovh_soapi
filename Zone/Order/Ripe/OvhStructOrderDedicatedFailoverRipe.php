<?php
/**
 * File for class OvhStructOrderDedicatedFailoverRipe
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructOrderDedicatedFailoverRipe originally named orderDedicatedFailoverRipe
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructOrderDedicatedFailoverRipe extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The hostname
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $hostname;
	/**
	 * The address
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $address;
	/**
	 * The period
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $period;
	/**
	 * The payWithPoints
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $payWithPoints;
	/**
	 * Constructor method for orderDedicatedFailoverRipe
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_hostname
	 * @param int $_address
	 * @param int $_period
	 * @param boolean $_payWithPoints
	 * @return OvhStructOrderDedicatedFailoverRipe
	 */
	public function __construct($_session = NULL,$_hostname = NULL,$_address = NULL,$_period = NULL,$_payWithPoints = NULL)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'address'=>$_address,'period'=>$_period,'payWithPoints'=>$_payWithPoints));
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
	 * Get hostname value
	 * @return string|null
	 */
	public function getHostname()
	{
		return $this->hostname;
	}
	/**
	 * Set hostname value
	 * @param string $_hostname the hostname
	 * @return string
	 */
	public function setHostname($_hostname)
	{
		return ($this->hostname = $_hostname);
	}
	/**
	 * Get address value
	 * @return int|null
	 */
	public function getAddress()
	{
		return $this->address;
	}
	/**
	 * Set address value
	 * @param int $_address the address
	 * @return int
	 */
	public function setAddress($_address)
	{
		return ($this->address = $_address);
	}
	/**
	 * Get period value
	 * @return int|null
	 */
	public function getPeriod()
	{
		return $this->period;
	}
	/**
	 * Set period value
	 * @param int $_period the period
	 * @return int
	 */
	public function setPeriod($_period)
	{
		return ($this->period = $_period);
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
	 * @return OvhStructOrderDedicatedFailoverRipe
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