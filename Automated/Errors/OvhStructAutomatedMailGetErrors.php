<?php
/**
 * File for class OvhStructAutomatedMailGetErrors
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructAutomatedMailGetErrors originally named automatedMailGetErrors
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructAutomatedMailGetErrors extends OvhWsdlClass
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
	 * The deep
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $deep;
	/**
	 * The limit
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $limit;
	/**
	 * Constructor method for automatedMailGetErrors
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_domain
	 * @param int $_deep
	 * @param int $_limit
	 * @return OvhStructAutomatedMailGetErrors
	 */
	public function __construct($_session = NULL,$_domain = NULL,$_deep = NULL,$_limit = NULL)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'deep'=>$_deep,'limit'=>$_limit));
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
	 * Get deep value
	 * @return int|null
	 */
	public function getDeep()
	{
		return $this->deep;
	}
	/**
	 * Set deep value
	 * @param int $_deep the deep
	 * @return int
	 */
	public function setDeep($_deep)
	{
		return ($this->deep = $_deep);
	}
	/**
	 * Get limit value
	 * @return int|null
	 */
	public function getLimit()
	{
		return $this->limit;
	}
	/**
	 * Set limit value
	 * @param int $_limit the limit
	 * @return int
	 */
	public function setLimit($_limit)
	{
		return ($this->limit = $_limit);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructAutomatedMailGetErrors
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