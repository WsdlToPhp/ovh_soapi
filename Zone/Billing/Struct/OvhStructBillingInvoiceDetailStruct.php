<?php
/**
 * File for class OvhStructBillingInvoiceDetailStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructBillingInvoiceDetailStruct originally named billingInvoiceDetailStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructBillingInvoiceDetailStruct extends OvhWsdlClass
{
	/**
	 * The domain
	 * @var string
	 */
	public $domain;
	/**
	 * The reference
	 * @var string
	 */
	public $reference;
	/**
	 * The description
	 * @var string
	 */
	public $description;
	/**
	 * Constructor method for billingInvoiceDetailStruct
	 * @see parent::__construct()
	 * @param string $_domain
	 * @param string $_reference
	 * @param string $_description
	 * @return OvhStructBillingInvoiceDetailStruct
	 */
	public function __construct($_domain = NULL,$_reference = NULL,$_description = NULL)
	{
		parent::__construct(array('domain'=>$_domain,'reference'=>$_reference,'description'=>$_description));
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
	 * Get reference value
	 * @return string|null
	 */
	public function getReference()
	{
		return $this->reference;
	}
	/**
	 * Set reference value
	 * @param string $_reference the reference
	 * @return string
	 */
	public function setReference($_reference)
	{
		return ($this->reference = $_reference);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructBillingInvoiceDetailStruct
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