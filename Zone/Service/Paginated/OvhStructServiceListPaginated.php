<?php
/**
 * File for class OvhStructServiceListPaginated
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructServiceListPaginated originally named serviceListPaginated
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructServiceListPaginated extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The start
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $start;
	/**
	 * The limit
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $limit;
	/**
	 * The domain
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $domain;
	/**
	 * The component
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $component;
	/**
	 * The group
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $group;
	/**
	 * Constructor method for serviceListPaginated
	 * @see parent::__construct()
	 * @param string $_session
	 * @param int $_start
	 * @param int $_limit
	 * @param string $_domain
	 * @param string $_component
	 * @param string $_group
	 * @return OvhStructServiceListPaginated
	 */
	public function __construct($_session = NULL,$_start = NULL,$_limit = NULL,$_domain = NULL,$_component = NULL,$_group = NULL)
	{
		parent::__construct(array('session'=>$_session,'start'=>$_start,'limit'=>$_limit,'domain'=>$_domain,'component'=>$_component,'group'=>$_group));
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
	 * Get start value
	 * @return int|null
	 */
	public function getStart()
	{
		return $this->start;
	}
	/**
	 * Set start value
	 * @param int $_start the start
	 * @return int
	 */
	public function setStart($_start)
	{
		return ($this->start = $_start);
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
	 * Get component value
	 * @return string|null
	 */
	public function getComponent()
	{
		return $this->component;
	}
	/**
	 * Set component value
	 * @param string $_component the component
	 * @return string
	 */
	public function setComponent($_component)
	{
		return ($this->component = $_component);
	}
	/**
	 * Get group value
	 * @return string|null
	 */
	public function getGroup()
	{
		return $this->group;
	}
	/**
	 * Set group value
	 * @param string $_group the group
	 * @return string
	 */
	public function setGroup($_group)
	{
		return ($this->group = $_group);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructServiceListPaginated
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