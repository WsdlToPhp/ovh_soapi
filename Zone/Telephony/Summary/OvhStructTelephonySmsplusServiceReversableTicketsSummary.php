<?php
/**
 * File for class OvhStructTelephonySmsplusServiceReversableTicketsSummary
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySmsplusServiceReversableTicketsSummary originally named telephonySmsplusServiceReversableTicketsSummary
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySmsplusServiceReversableTicketsSummary extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The shortCode
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $shortCode;
	/**
	 * The keyword
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $keyword;
	/**
	 * The reversableDelay
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $reversableDelay;
	/**
	 * The limit
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $limit;
	/**
	 * The limitOffset
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $limitOffset;
	/**
	 * The sort
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $sort;
	/**
	 * The filter
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $filter;
	/**
	 * Constructor method for telephonySmsplusServiceReversableTicketsSummary
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_shortCode
	 * @param string $_keyword
	 * @param string $_reversableDelay
	 * @param int $_limit
	 * @param int $_limitOffset
	 * @param string $_sort
	 * @param string $_filter
	 * @return OvhStructTelephonySmsplusServiceReversableTicketsSummary
	 */
	public function __construct($_session = NULL,$_shortCode = NULL,$_keyword = NULL,$_reversableDelay = NULL,$_limit = NULL,$_limitOffset = NULL,$_sort = NULL,$_filter = NULL)
	{
		parent::__construct(array('session'=>$_session,'shortCode'=>$_shortCode,'keyword'=>$_keyword,'reversableDelay'=>$_reversableDelay,'limit'=>$_limit,'limitOffset'=>$_limitOffset,'sort'=>$_sort,'filter'=>$_filter));
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
	 * Get shortCode value
	 * @return string|null
	 */
	public function getShortCode()
	{
		return $this->shortCode;
	}
	/**
	 * Set shortCode value
	 * @param string $_shortCode the shortCode
	 * @return string
	 */
	public function setShortCode($_shortCode)
	{
		return ($this->shortCode = $_shortCode);
	}
	/**
	 * Get keyword value
	 * @return string|null
	 */
	public function getKeyword()
	{
		return $this->keyword;
	}
	/**
	 * Set keyword value
	 * @param string $_keyword the keyword
	 * @return string
	 */
	public function setKeyword($_keyword)
	{
		return ($this->keyword = $_keyword);
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
	 * Get limitOffset value
	 * @return int|null
	 */
	public function getLimitOffset()
	{
		return $this->limitOffset;
	}
	/**
	 * Set limitOffset value
	 * @param int $_limitOffset the limitOffset
	 * @return int
	 */
	public function setLimitOffset($_limitOffset)
	{
		return ($this->limitOffset = $_limitOffset);
	}
	/**
	 * Get sort value
	 * @return string|null
	 */
	public function getSort()
	{
		return $this->sort;
	}
	/**
	 * Set sort value
	 * @param string $_sort the sort
	 * @return string
	 */
	public function setSort($_sort)
	{
		return ($this->sort = $_sort);
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
	 * @return OvhStructTelephonySmsplusServiceReversableTicketsSummary
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