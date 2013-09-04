<?php
/**
 * File for class OvhStructBillingGetReferencesToExpired
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructBillingGetReferencesToExpired originally named billingGetReferencesToExpired
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructBillingGetReferencesToExpired extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The delay
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $delay;
	/**
	 * Constructor method for billingGetReferencesToExpired
	 * @see parent::__construct()
	 * @param string $_session
	 * @param int $_delay
	 * @return OvhStructBillingGetReferencesToExpired
	 */
	public function __construct($_session = NULL,$_delay = NULL)
	{
		parent::__construct(array('session'=>$_session,'delay'=>$_delay));
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
	 * Get delay value
	 * @return int|null
	 */
	public function getDelay()
	{
		return $this->delay;
	}
	/**
	 * Set delay value
	 * @param int $_delay the delay
	 * @return int
	 */
	public function setDelay($_delay)
	{
		return ($this->delay = $_delay);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructBillingGetReferencesToExpired
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