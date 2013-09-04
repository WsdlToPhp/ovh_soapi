<?php
/**
 * File for class OvhStructTicketContactStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTicketContactStruct originally named ticketContactStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTicketContactStruct extends OvhWsdlClass
{
	/**
	 * The componentType
	 * @var string
	 */
	public $componentType;
	/**
	 * The domains
	 * @var OvhStructMyArrayOfTicketContactDomainStructType
	 */
	public $domains;
	/**
	 * Constructor method for ticketContactStruct
	 * @see parent::__construct()
	 * @param string $_componentType
	 * @param OvhStructMyArrayOfTicketContactDomainStructType $_domains
	 * @return OvhStructTicketContactStruct
	 */
	public function __construct($_componentType = NULL,$_domains = NULL)
	{
		parent::__construct(array('componentType'=>$_componentType,'domains'=>($_domains instanceof OvhStructMyArrayOfTicketContactDomainStructType)?$_domains:new OvhStructMyArrayOfTicketContactDomainStructType($_domains)));
	}
	/**
	 * Get componentType value
	 * @return string|null
	 */
	public function getComponentType()
	{
		return $this->componentType;
	}
	/**
	 * Set componentType value
	 * @param string $_componentType the componentType
	 * @return string
	 */
	public function setComponentType($_componentType)
	{
		return ($this->componentType = $_componentType);
	}
	/**
	 * Get domains value
	 * @return OvhStructMyArrayOfTicketContactDomainStructType|null
	 */
	public function getDomains()
	{
		return $this->domains;
	}
	/**
	 * Set domains value
	 * @param OvhStructMyArrayOfTicketContactDomainStructType $_domains the domains
	 * @return OvhStructMyArrayOfTicketContactDomainStructType
	 */
	public function setDomains($_domains)
	{
		return ($this->domains = $_domains);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTicketContactStruct
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