<?php
/**
 * File for class OvhStructTelephonyAbbreviatedNumberOnGroupList
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyAbbreviatedNumberOnGroupList originally named telephonyAbbreviatedNumberOnGroupList
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyAbbreviatedNumberOnGroupList extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The group
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $group;
	/**
	 * Constructor method for telephonyAbbreviatedNumberOnGroupList
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_group
	 * @return OvhStructTelephonyAbbreviatedNumberOnGroupList
	 */
	public function __construct($_session = NULL,$_group = NULL)
	{
		parent::__construct(array('session'=>$_session,'group'=>$_group));
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
	 * @return OvhStructTelephonyAbbreviatedNumberOnGroupList
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