<?php
/**
 * File for class OvhStructPopGetQuotaReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructPopGetQuotaReturn originally named popGetQuotaReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructPopGetQuotaReturn extends OvhWsdlClass
{
	/**
	 * The emailCount
	 * @var int
	 */
	public $emailCount;
	/**
	 * The quota
	 * @var int
	 */
	public $quota;
	/**
	 * The maxQuota
	 * @var int
	 */
	public $maxQuota;
	/**
	 * Constructor method for popGetQuotaReturn
	 * @see parent::__construct()
	 * @param int $_emailCount
	 * @param int $_quota
	 * @param int $_maxQuota
	 * @return OvhStructPopGetQuotaReturn
	 */
	public function __construct($_emailCount = NULL,$_quota = NULL,$_maxQuota = NULL)
	{
		parent::__construct(array('emailCount'=>$_emailCount,'quota'=>$_quota,'maxQuota'=>$_maxQuota));
	}
	/**
	 * Get emailCount value
	 * @return int|null
	 */
	public function getEmailCount()
	{
		return $this->emailCount;
	}
	/**
	 * Set emailCount value
	 * @param int $_emailCount the emailCount
	 * @return int
	 */
	public function setEmailCount($_emailCount)
	{
		return ($this->emailCount = $_emailCount);
	}
	/**
	 * Get quota value
	 * @return int|null
	 */
	public function getQuota()
	{
		return $this->quota;
	}
	/**
	 * Set quota value
	 * @param int $_quota the quota
	 * @return int
	 */
	public function setQuota($_quota)
	{
		return ($this->quota = $_quota);
	}
	/**
	 * Get maxQuota value
	 * @return int|null
	 */
	public function getMaxQuota()
	{
		return $this->maxQuota;
	}
	/**
	 * Set maxQuota value
	 * @param int $_maxQuota the maxQuota
	 * @return int
	 */
	public function setMaxQuota($_maxQuota)
	{
		return ($this->maxQuota = $_maxQuota);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructPopGetQuotaReturn
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