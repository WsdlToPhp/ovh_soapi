<?php
/**
 * File for class OvhStructBillingGetReferencesToExpiredStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructBillingGetReferencesToExpiredStruct originally named billingGetReferencesToExpiredStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructBillingGetReferencesToExpiredStruct extends OvhWsdlClass
{
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The type
	 * @var string
	 */
	public $type;
	/**
	 * The expired
	 * @var string
	 */
	public $expired;
	/**
	 * Constructor method for billingGetReferencesToExpiredStruct
	 * @see parent::__construct()
	 * @param string $_name
	 * @param string $_type
	 * @param string $_expired
	 * @return OvhStructBillingGetReferencesToExpiredStruct
	 */
	public function __construct($_name = NULL,$_type = NULL,$_expired = NULL)
	{
		parent::__construct(array('name'=>$_name,'type'=>$_type,'expired'=>$_expired));
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
	 * Get type value
	 * @return string|null
	 */
	public function getType()
	{
		return $this->type;
	}
	/**
	 * Set type value
	 * @param string $_type the type
	 * @return string
	 */
	public function setType($_type)
	{
		return ($this->type = $_type);
	}
	/**
	 * Get expired value
	 * @return string|null
	 */
	public function getExpired()
	{
		return $this->expired;
	}
	/**
	 * Set expired value
	 * @param string $_expired the expired
	 * @return string
	 */
	public function setExpired($_expired)
	{
		return ($this->expired = $_expired);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructBillingGetReferencesToExpiredStruct
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