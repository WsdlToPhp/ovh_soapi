<?php
/**
 * File for class OvhStructTelephonyLineLogsOnGroup
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyLineLogsOnGroup originally named telephonyLineLogsOnGroup
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyLineLogsOnGroup extends OvhWsdlClass
{
	/**
	 * The group
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $group;
	/**
	 * The pagingStart
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $pagingStart;
	/**
	 * The pagingLimit
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $pagingLimit;
	/**
	 * Constructor method for telephonyLineLogsOnGroup
	 * @see parent::__construct()
	 * @param string $_group
	 * @param int $_pagingStart
	 * @param int $_pagingLimit
	 * @return OvhStructTelephonyLineLogsOnGroup
	 */
	public function __construct($_group = NULL,$_pagingStart = NULL,$_pagingLimit = NULL)
	{
		parent::__construct(array('group'=>$_group,'pagingStart'=>$_pagingStart,'pagingLimit'=>$_pagingLimit));
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
	 * Get pagingStart value
	 * @return int|null
	 */
	public function getPagingStart()
	{
		return $this->pagingStart;
	}
	/**
	 * Set pagingStart value
	 * @param int $_pagingStart the pagingStart
	 * @return int
	 */
	public function setPagingStart($_pagingStart)
	{
		return ($this->pagingStart = $_pagingStart);
	}
	/**
	 * Get pagingLimit value
	 * @return int|null
	 */
	public function getPagingLimit()
	{
		return $this->pagingLimit;
	}
	/**
	 * Set pagingLimit value
	 * @param int $_pagingLimit the pagingLimit
	 * @return int
	 */
	public function setPagingLimit($_pagingLimit)
	{
		return ($this->pagingLimit = $_pagingLimit);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyLineLogsOnGroup
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