<?php
/**
 * File for class OvhStructDedicatedFailoverRipeSplit
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedFailoverRipeSplit originally named dedicatedFailoverRipeSplit
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedFailoverRipeSplit extends OvhWsdlClass
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
	 * The netname
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $netname;
	/**
	 * The networkIp
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $networkIp;
	/**
	 * Constructor method for dedicatedFailoverRipeSplit
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_hostname
	 * @param string $_netname
	 * @param string $_networkIp
	 * @return OvhStructDedicatedFailoverRipeSplit
	 */
	public function __construct($_session = NULL,$_hostname = NULL,$_netname = NULL,$_networkIp = NULL)
	{
		parent::__construct(array('session'=>$_session,'hostname'=>$_hostname,'netname'=>$_netname,'networkIp'=>$_networkIp));
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
	 * Get netname value
	 * @return string|null
	 */
	public function getNetname()
	{
		return $this->netname;
	}
	/**
	 * Set netname value
	 * @param string $_netname the netname
	 * @return string
	 */
	public function setNetname($_netname)
	{
		return ($this->netname = $_netname);
	}
	/**
	 * Get networkIp value
	 * @return string|null
	 */
	public function getNetworkIp()
	{
		return $this->networkIp;
	}
	/**
	 * Set networkIp value
	 * @param string $_networkIp the networkIp
	 * @return string
	 */
	public function setNetworkIp($_networkIp)
	{
		return ($this->networkIp = $_networkIp);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedFailoverRipeSplit
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