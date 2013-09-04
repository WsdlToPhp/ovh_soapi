<?php
/**
 * File for class OvhStructAccountHistory
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructAccountHistory originally named accountHistory
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructAccountHistory extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The month
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $month;
	/**
	 * The year
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $year;
	/**
	 * Constructor method for accountHistory
	 * @see parent::__construct()
	 * @param string $_session
	 * @param int $_month
	 * @param int $_year
	 * @return OvhStructAccountHistory
	 */
	public function __construct($_session = NULL,$_month = NULL,$_year = NULL)
	{
		parent::__construct(array('session'=>$_session,'month'=>$_month,'year'=>$_year));
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
	 * Get month value
	 * @return int|null
	 */
	public function getMonth()
	{
		return $this->month;
	}
	/**
	 * Set month value
	 * @param int $_month the month
	 * @return int
	 */
	public function setMonth($_month)
	{
		return ($this->month = $_month);
	}
	/**
	 * Get year value
	 * @return int|null
	 */
	public function getYear()
	{
		return $this->year;
	}
	/**
	 * Set year value
	 * @param int $_year the year
	 * @return int
	 */
	public function setYear($_year)
	{
		return ($this->year = $_year);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructAccountHistory
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