<?php
/**
 * File for class OvhStructOverquotaInfoReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructOverquotaInfoReturn originally named overquotaInfoReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructOverquotaInfoReturn extends OvhWsdlClass
{
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The quota
	 * @var OvhStructMyArrayOfOverquotaInfoStructType
	 */
	public $quota;
	/**
	 * The capacities
	 * @var int
	 */
	public $capacities;
	/**
	 * The order
	 * @var int
	 */
	public $order;
	/**
	 * Constructor method for overquotaInfoReturn
	 * @see parent::__construct()
	 * @param string $_domain
	 * @param OvhStructMyArrayOfOverquotaInfoStructType $_quota
	 * @param int $_capacities
	 * @param int $_order
	 * @return OvhStructOverquotaInfoReturn
	 */
	public function __construct($_domain = NULL,$_quota = NULL,$_capacities = NULL,$_order = NULL)
	{
		parent::__construct(array('domain'=>$_domain,'quota'=>($_quota instanceof OvhStructMyArrayOfOverquotaInfoStructType)?$_quota:new OvhStructMyArrayOfOverquotaInfoStructType($_quota),'capacities'=>$_capacities,'order'=>$_order));
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
	 * Get quota value
	 * @return OvhStructMyArrayOfOverquotaInfoStructType|null
	 */
	public function getQuota()
	{
		return $this->quota;
	}
	/**
	 * Set quota value
	 * @param OvhStructMyArrayOfOverquotaInfoStructType $_quota the quota
	 * @return OvhStructMyArrayOfOverquotaInfoStructType
	 */
	public function setQuota($_quota)
	{
		return ($this->quota = $_quota);
	}
	/**
	 * Get capacities value
	 * @return int|null
	 */
	public function getCapacities()
	{
		return $this->capacities;
	}
	/**
	 * Set capacities value
	 * @param int $_capacities the capacities
	 * @return int
	 */
	public function setCapacities($_capacities)
	{
		return ($this->capacities = $_capacities);
	}
	/**
	 * Get order value
	 * @return int|null
	 */
	public function getOrder()
	{
		return $this->order;
	}
	/**
	 * Set order value
	 * @param int $_order the order
	 * @return int
	 */
	public function setOrder($_order)
	{
		return ($this->order = $_order);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructOverquotaInfoReturn
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