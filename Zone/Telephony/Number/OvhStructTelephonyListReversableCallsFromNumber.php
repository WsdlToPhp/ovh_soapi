<?php
/**
 * File for class OvhStructTelephonyListReversableCallsFromNumber
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyListReversableCallsFromNumber originally named telephonyListReversableCallsFromNumber
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyListReversableCallsFromNumber extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The number
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $number;
	/**
	 * The country
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $country;
	/**
	 * The reversableDelay
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $reversableDelay;
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
	 * The sortOrder
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $sortOrder;
	/**
	 * The sortField
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $sortField;
	/**
	 * Constructor method for telephonyListReversableCallsFromNumber
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_number
	 * @param string $_country
	 * @param string $_reversableDelay
	 * @param int $_pagingStart
	 * @param int $_pagingLimit
	 * @param string $_sortOrder
	 * @param string $_sortField
	 * @return OvhStructTelephonyListReversableCallsFromNumber
	 */
	public function __construct($_session = NULL,$_number = NULL,$_country = NULL,$_reversableDelay = NULL,$_pagingStart = NULL,$_pagingLimit = NULL,$_sortOrder = NULL,$_sortField = NULL)
	{
		parent::__construct(array('session'=>$_session,'number'=>$_number,'country'=>$_country,'reversableDelay'=>$_reversableDelay,'pagingStart'=>$_pagingStart,'pagingLimit'=>$_pagingLimit,'sortOrder'=>$_sortOrder,'sortField'=>$_sortField));
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
	 * Get number value
	 * @return string|null
	 */
	public function getNumber()
	{
		return $this->number;
	}
	/**
	 * Set number value
	 * @param string $_number the number
	 * @return string
	 */
	public function setNumber($_number)
	{
		return ($this->number = $_number);
	}
	/**
	 * Get country value
	 * @return string|null
	 */
	public function getCountry()
	{
		return $this->country;
	}
	/**
	 * Set country value
	 * @param string $_country the country
	 * @return string
	 */
	public function setCountry($_country)
	{
		return ($this->country = $_country);
	}
	/**
	 * Get reversableDelay value
	 * @return string|null
	 */
	public function getReversableDelay()
	{
		return $this->reversableDelay;
	}
	/**
	 * Set reversableDelay value
	 * @param string $_reversableDelay the reversableDelay
	 * @return string
	 */
	public function setReversableDelay($_reversableDelay)
	{
		return ($this->reversableDelay = $_reversableDelay);
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
	 * Get sortOrder value
	 * @return string|null
	 */
	public function getSortOrder()
	{
		return $this->sortOrder;
	}
	/**
	 * Set sortOrder value
	 * @param string $_sortOrder the sortOrder
	 * @return string
	 */
	public function setSortOrder($_sortOrder)
	{
		return ($this->sortOrder = $_sortOrder);
	}
	/**
	 * Get sortField value
	 * @return string|null
	 */
	public function getSortField()
	{
		return $this->sortField;
	}
	/**
	 * Set sortField value
	 * @param string $_sortField the sortField
	 * @return string
	 */
	public function setSortField($_sortField)
	{
		return ($this->sortField = $_sortField);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyListReversableCallsFromNumber
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