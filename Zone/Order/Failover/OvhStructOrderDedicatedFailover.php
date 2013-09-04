<?php
/**
 * File for class OvhStructOrderDedicatedFailover
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructOrderDedicatedFailover originally named orderDedicatedFailover
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructOrderDedicatedFailover extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The domain
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $domain;
	/**
	 * The orderIps
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $orderIps;
	/**
	 * The payWithPoints
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $payWithPoints;
	/**
	 * Constructor method for orderDedicatedFailover
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_domain
	 * @param int $_orderIps
	 * @param boolean $_payWithPoints
	 * @return OvhStructOrderDedicatedFailover
	 */
	public function __construct($_session = NULL,$_domain = NULL,$_orderIps = NULL,$_payWithPoints = NULL)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'orderIps'=>$_orderIps,'payWithPoints'=>$_payWithPoints));
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
	 * Get orderIps value
	 * @return int|null
	 */
	public function getOrderIps()
	{
		return $this->orderIps;
	}
	/**
	 * Set orderIps value
	 * @param int $_orderIps the orderIps
	 * @return int
	 */
	public function setOrderIps($_orderIps)
	{
		return ($this->orderIps = $_orderIps);
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
	 * @return OvhStructOrderDedicatedFailover
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