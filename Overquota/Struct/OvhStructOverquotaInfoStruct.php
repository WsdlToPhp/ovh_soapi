<?php
/**
 * File for class OvhStructOverquotaInfoStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructOverquotaInfoStruct originally named overquotaInfoStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructOverquotaInfoStruct extends OvhWsdlClass
{
	/**
	 * The month
	 * @var string
	 */
	public $month;
	/**
	 * The traffic
	 * @var int
	 */
	public $traffic;
	/**
	 * The hits
	 * @var int
	 */
	public $hits;
	/**
	 * Constructor method for overquotaInfoStruct
	 * @see parent::__construct()
	 * @param string $_month
	 * @param int $_traffic
	 * @param int $_hits
	 * @return OvhStructOverquotaInfoStruct
	 */
	public function __construct($_month = NULL,$_traffic = NULL,$_hits = NULL)
	{
		parent::__construct(array('month'=>$_month,'traffic'=>$_traffic,'hits'=>$_hits));
	}
	/**
	 * Get month value
	 * @return string|null
	 */
	public function getMonth()
	{
		return $this->month;
	}
	/**
	 * Set month value
	 * @param string $_month the month
	 * @return string
	 */
	public function setMonth($_month)
	{
		return ($this->month = $_month);
	}
	/**
	 * Get traffic value
	 * @return int|null
	 */
	public function getTraffic()
	{
		return $this->traffic;
	}
	/**
	 * Set traffic value
	 * @param int $_traffic the traffic
	 * @return int
	 */
	public function setTraffic($_traffic)
	{
		return ($this->traffic = $_traffic);
	}
	/**
	 * Get hits value
	 * @return int|null
	 */
	public function getHits()
	{
		return $this->hits;
	}
	/**
	 * Set hits value
	 * @param int $_hits the hits
	 * @return int
	 */
	public function setHits($_hits)
	{
		return ($this->hits = $_hits);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructOverquotaInfoStruct
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