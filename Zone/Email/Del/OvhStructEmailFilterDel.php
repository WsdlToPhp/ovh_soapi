<?php
/**
 * File for class OvhStructEmailFilterDel
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructEmailFilterDel originally named emailFilterDel
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructEmailFilterDel extends OvhWsdlClass
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
	 * The pop
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $pop;
	/**
	 * The filter
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $filter;
	/**
	 * Constructor method for emailFilterDel
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_domain
	 * @param string $_pop
	 * @param string $_filter
	 * @return OvhStructEmailFilterDel
	 */
	public function __construct($_session = NULL,$_domain = NULL,$_pop = NULL,$_filter = NULL)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'pop'=>$_pop,'filter'=>$_filter));
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
	 * Get pop value
	 * @return string|null
	 */
	public function getPop()
	{
		return $this->pop;
	}
	/**
	 * Set pop value
	 * @param string $_pop the pop
	 * @return string
	 */
	public function setPop($_pop)
	{
		return ($this->pop = $_pop);
	}
	/**
	 * Get filter value
	 * @return string|null
	 */
	public function getFilter()
	{
		return $this->filter;
	}
	/**
	 * Set filter value
	 * @param string $_filter the filter
	 * @return string
	 */
	public function setFilter($_filter)
	{
		return ($this->filter = $_filter);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructEmailFilterDel
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