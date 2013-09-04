<?php
/**
 * File for class OvhStructRipeCreateOrganisation
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRipeCreateOrganisation originally named ripeCreateOrganisation
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRipeCreateOrganisation extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The name
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $name;
	/**
	 * The address
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $address;
	/**
	 * The email
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $email;
	/**
	 * The abuse
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $abuse;
	/**
	 * The descr
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $descr;
	/**
	 * The phone
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $phone;
	/**
	 * The fax
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $fax;
	/**
	 * The remarks
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $remarks;
	/**
	 * Constructor method for ripeCreateOrganisation
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_name
	 * @param string $_address
	 * @param string $_email
	 * @param string $_abuse
	 * @param string $_descr
	 * @param string $_phone
	 * @param string $_fax
	 * @param string $_remarks
	 * @return OvhStructRipeCreateOrganisation
	 */
	public function __construct($_session = NULL,$_name = NULL,$_address = NULL,$_email = NULL,$_abuse = NULL,$_descr = NULL,$_phone = NULL,$_fax = NULL,$_remarks = NULL)
	{
		parent::__construct(array('session'=>$_session,'name'=>$_name,'address'=>$_address,'email'=>$_email,'abuse'=>$_abuse,'descr'=>$_descr,'phone'=>$_phone,'fax'=>$_fax,'remarks'=>$_remarks));
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
	 * Get address value
	 * @return string|null
	 */
	public function getAddress()
	{
		return $this->address;
	}
	/**
	 * Set address value
	 * @param string $_address the address
	 * @return string
	 */
	public function setAddress($_address)
	{
		return ($this->address = $_address);
	}
	/**
	 * Get email value
	 * @return string|null
	 */
	public function getEmail()
	{
		return $this->email;
	}
	/**
	 * Set email value
	 * @param string $_email the email
	 * @return string
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
	}
	/**
	 * Get abuse value
	 * @return string|null
	 */
	public function getAbuse()
	{
		return $this->abuse;
	}
	/**
	 * Set abuse value
	 * @param string $_abuse the abuse
	 * @return string
	 */
	public function setAbuse($_abuse)
	{
		return ($this->abuse = $_abuse);
	}
	/**
	 * Get descr value
	 * @return string|null
	 */
	public function getDescr()
	{
		return $this->descr;
	}
	/**
	 * Set descr value
	 * @param string $_descr the descr
	 * @return string
	 */
	public function setDescr($_descr)
	{
		return ($this->descr = $_descr);
	}
	/**
	 * Get phone value
	 * @return string|null
	 */
	public function getPhone()
	{
		return $this->phone;
	}
	/**
	 * Set phone value
	 * @param string $_phone the phone
	 * @return string
	 */
	public function setPhone($_phone)
	{
		return ($this->phone = $_phone);
	}
	/**
	 * Get fax value
	 * @return string|null
	 */
	public function getFax()
	{
		return $this->fax;
	}
	/**
	 * Set fax value
	 * @param string $_fax the fax
	 * @return string
	 */
	public function setFax($_fax)
	{
		return ($this->fax = $_fax);
	}
	/**
	 * Get remarks value
	 * @return string|null
	 */
	public function getRemarks()
	{
		return $this->remarks;
	}
	/**
	 * Set remarks value
	 * @param string $_remarks the remarks
	 * @return string
	 */
	public function setRemarks($_remarks)
	{
		return ($this->remarks = $_remarks);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRipeCreateOrganisation
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