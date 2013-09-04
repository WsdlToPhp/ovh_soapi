<?php
/**
 * File for class OvhStructTelephonyBillingAccountInfoReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyBillingAccountInfoReturn originally named telephonyBillingAccountInfoReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyBillingAccountInfoReturn extends OvhWsdlClass
{
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * The offer
	 * @var string
	 */
	public $offer;
	/**
	 * The consumtionTime
	 * @var string
	 */
	public $consumtionTime;
	/**
	 * The outPlan
	 * @var string
	 */
	public $outPlan;
	/**
	 * The facturationDate
	 * @var string
	 */
	public $facturationDate;
	/**
	 * The children
	 * @var OvhStructMyArrayOfTelephonyBillingAccountInfoChildrenStructType
	 */
	public $children;
	/**
	 * Constructor method for telephonyBillingAccountInfoReturn
	 * @see parent::__construct()
	 * @param string $_name
	 * @param string $_description
	 * @param string $_offer
	 * @param string $_consumtionTime
	 * @param string $_outPlan
	 * @param string $_facturationDate
	 * @param OvhStructMyArrayOfTelephonyBillingAccountInfoChildrenStructType $_children
	 * @return OvhStructTelephonyBillingAccountInfoReturn
	 */
	public function __construct($_name = NULL,$_description = NULL,$_offer = NULL,$_consumtionTime = NULL,$_outPlan = NULL,$_facturationDate = NULL,$_children = NULL)
	{
		parent::__construct(array('name'=>$_name,'description'=>$_description,'offer'=>$_offer,'consumtionTime'=>$_consumtionTime,'outPlan'=>$_outPlan,'facturationDate'=>$_facturationDate,'children'=>($_children instanceof OvhStructMyArrayOfTelephonyBillingAccountInfoChildrenStructType)?$_children:new OvhStructMyArrayOfTelephonyBillingAccountInfoChildrenStructType($_children)));
	}
	/**
	 * Get name value
	 * @return string|null
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set name value
	 * @param string $_name the name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get description value
	 * @return string|null
	 */
	public function getDescription()
	{
		return $this->description;
	}
	/**
	 * Set description value
	 * @param string $_description the description
	 * @return string
	 */
	public function setDescription($_description)
	{
		return ($this->description = $_description);
	}
	/**
	 * Get offer value
	 * @return string|null
	 */
	public function getOffer()
	{
		return $this->offer;
	}
	/**
	 * Set offer value
	 * @param string $_offer the offer
	 * @return string
	 */
	public function setOffer($_offer)
	{
		return ($this->offer = $_offer);
	}
	/**
	 * Get consumtionTime value
	 * @return string|null
	 */
	public function getConsumtionTime()
	{
		return $this->consumtionTime;
	}
	/**
	 * Set consumtionTime value
	 * @param string $_consumtionTime the consumtionTime
	 * @return string
	 */
	public function setConsumtionTime($_consumtionTime)
	{
		return ($this->consumtionTime = $_consumtionTime);
	}
	/**
	 * Get outPlan value
	 * @return string|null
	 */
	public function getOutPlan()
	{
		return $this->outPlan;
	}
	/**
	 * Set outPlan value
	 * @param string $_outPlan the outPlan
	 * @return string
	 */
	public function setOutPlan($_outPlan)
	{
		return ($this->outPlan = $_outPlan);
	}
	/**
	 * Get facturationDate value
	 * @return string|null
	 */
	public function getFacturationDate()
	{
		return $this->facturationDate;
	}
	/**
	 * Set facturationDate value
	 * @param string $_facturationDate the facturationDate
	 * @return string
	 */
	public function setFacturationDate($_facturationDate)
	{
		return ($this->facturationDate = $_facturationDate);
	}
	/**
	 * Get children value
	 * @return OvhStructMyArrayOfTelephonyBillingAccountInfoChildrenStructType|null
	 */
	public function getChildren()
	{
		return $this->children;
	}
	/**
	 * Set children value
	 * @param OvhStructMyArrayOfTelephonyBillingAccountInfoChildrenStructType $_children the children
	 * @return OvhStructMyArrayOfTelephonyBillingAccountInfoChildrenStructType
	 */
	public function setChildren($_children)
	{
		return ($this->children = $_children);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyBillingAccountInfoReturn
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