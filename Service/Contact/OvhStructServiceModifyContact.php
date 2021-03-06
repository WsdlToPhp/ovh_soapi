<?php
/**
 * File for class OvhStructServiceModifyContact
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructServiceModifyContact originally named serviceModifyContact
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructServiceModifyContact extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The domain
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $domain;
	/**
	 * The component
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $component;
	/**
	 * The contact
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $contact;
	/**
	 * The nic
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $nic;
	/**
	 * The componentSubType
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $componentSubType;
	/**
	 * Constructor method for serviceModifyContact
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_domain
	 * @param string $_component
	 * @param string $_contact
	 * @param string $_nic
	 * @param string $_componentSubType
	 * @return OvhStructServiceModifyContact
	 */
	public function __construct($_session = NULL,$_domain = NULL,$_component = NULL,$_contact = NULL,$_nic = NULL,$_componentSubType = NULL)
	{
		parent::__construct(array('session'=>$_session,'domain'=>$_domain,'component'=>$_component,'contact'=>$_contact,'nic'=>$_nic,'componentSubType'=>$_componentSubType));
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
	 * Get component value
	 * @return string|null
	 */
	public function getComponent()
	{
		return $this->component;
	}
	/**
	 * Set component value
	 * @param string $_component the component
	 * @return string
	 */
	public function setComponent($_component)
	{
		return ($this->component = $_component);
	}
	/**
	 * Get contact value
	 * @return string|null
	 */
	public function getContact()
	{
		return $this->contact;
	}
	/**
	 * Set contact value
	 * @param string $_contact the contact
	 * @return string
	 */
	public function setContact($_contact)
	{
		return ($this->contact = $_contact);
	}
	/**
	 * Get nic value
	 * @return string|null
	 */
	public function getNic()
	{
		return $this->nic;
	}
	/**
	 * Set nic value
	 * @param string $_nic the nic
	 * @return string
	 */
	public function setNic($_nic)
	{
		return ($this->nic = $_nic);
	}
	/**
	 * Get componentSubType value
	 * @return string|null
	 */
	public function getComponentSubType()
	{
		return $this->componentSubType;
	}
	/**
	 * Set componentSubType value
	 * @param string $_componentSubType the componentSubType
	 * @return string
	 */
	public function setComponentSubType($_componentSubType)
	{
		return ($this->componentSubType = $_componentSubType);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructServiceModifyContact
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