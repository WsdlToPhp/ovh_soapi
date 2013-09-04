<?php
/**
 * File for class OvhStructTelephonySmsUserHistory
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySmsUserHistory originally named telephonySmsUserHistory
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySmsUserHistory extends OvhWsdlClass
{
	/**
	 * The login
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $login;
	/**
	 * The password
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $password;
	/**
	 * The smsAccount
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $smsAccount;
	/**
	 * The smsId
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $smsId;
	/**
	 * The user
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $user;
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
	 * The sortField
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $sortField;
	/**
	 * The sortOrder
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $sortOrder;
	/**
	 * The tag
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $tag;
	/**
	 * The filter
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $filter;
	/**
	 * Constructor method for telephonySmsUserHistory
	 * @see parent::__construct()
	 * @param string $_login
	 * @param string $_password
	 * @param string $_smsAccount
	 * @param int $_smsId
	 * @param string $_user
	 * @param int $_pagingStart
	 * @param int $_pagingLimit
	 * @param string $_sortField
	 * @param string $_sortOrder
	 * @param string $_tag
	 * @param string $_filter
	 * @return OvhStructTelephonySmsUserHistory
	 */
	public function __construct($_login = NULL,$_password = NULL,$_smsAccount = NULL,$_smsId = NULL,$_user = NULL,$_pagingStart = NULL,$_pagingLimit = NULL,$_sortField = NULL,$_sortOrder = NULL,$_tag = NULL,$_filter = NULL)
	{
		parent::__construct(array('login'=>$_login,'password'=>$_password,'smsAccount'=>$_smsAccount,'smsId'=>$_smsId,'user'=>$_user,'pagingStart'=>$_pagingStart,'pagingLimit'=>$_pagingLimit,'sortField'=>$_sortField,'sortOrder'=>$_sortOrder,'tag'=>$_tag,'filter'=>$_filter));
	}
	/**
	 * Get login value
	 * @return string|null
	 */
	public function getLogin()
	{
		return $this->login;
	}
	/**
	 * Set login value
	 * @param string $_login the login
	 * @return string
	 */
	public function setLogin($_login)
	{
		return ($this->login = $_login);
	}
	/**
	 * Get password value
	 * @return string|null
	 */
	public function getPassword()
	{
		return $this->password;
	}
	/**
	 * Set password value
	 * @param string $_password the password
	 * @return string
	 */
	public function setPassword($_password)
	{
		return ($this->password = $_password);
	}
	/**
	 * Get smsAccount value
	 * @return string|null
	 */
	public function getSmsAccount()
	{
		return $this->smsAccount;
	}
	/**
	 * Set smsAccount value
	 * @param string $_smsAccount the smsAccount
	 * @return string
	 */
	public function setSmsAccount($_smsAccount)
	{
		return ($this->smsAccount = $_smsAccount);
	}
	/**
	 * Get smsId value
	 * @return int|null
	 */
	public function getSmsId()
	{
		return $this->smsId;
	}
	/**
	 * Set smsId value
	 * @param int $_smsId the smsId
	 * @return int
	 */
	public function setSmsId($_smsId)
	{
		return ($this->smsId = $_smsId);
	}
	/**
	 * Get user value
	 * @return string|null
	 */
	public function getUser()
	{
		return $this->user;
	}
	/**
	 * Set user value
	 * @param string $_user the user
	 * @return string
	 */
	public function setUser($_user)
	{
		return ($this->user = $_user);
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
	 * Get tag value
	 * @return string|null
	 */
	public function getTag()
	{
		return $this->tag;
	}
	/**
	 * Set tag value
	 * @param string $_tag the tag
	 * @return string
	 */
	public function setTag($_tag)
	{
		return ($this->tag = $_tag);
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
	 * @return OvhStructTelephonySmsUserHistory
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