<?php
/**
 * File for class OvhStructRipeOrganisationStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructRipeOrganisationStruct originally named ripeOrganisationStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructRipeOrganisationStruct extends OvhWsdlClass
{
	/**
	 * The organisation
	 * @var string
	 */
	public $organisation;
	/**
	 * The orgname
	 * @var string
	 */
	public $orgname;
	/**
	 * The orgtype
	 * @var string
	 */
	public $orgtype;
	/**
	 * The address
	 * @var OvhStructMyArrayOfStringType
	 */
	public $address;
	/**
	 * The email
	 * @var string
	 */
	public $email;
	/**
	 * The abusemailbox
	 * @var string
	 */
	public $abusemailbox;
	/**
	 * The mntref
	 * @var string
	 */
	public $mntref;
	/**
	 * The mntby
	 * @var string
	 */
	public $mntby;
	/**
	 * The changed
	 * @var string
	 */
	public $changed;
	/**
	 * The source
	 * @var string
	 */
	public $source;
	/**
	 * Constructor method for ripeOrganisationStruct
	 * @see parent::__construct()
	 * @param string $_organisation
	 * @param string $_orgname
	 * @param string $_orgtype
	 * @param OvhStructMyArrayOfStringType $_address
	 * @param string $_email
	 * @param string $_abusemailbox
	 * @param string $_mntref
	 * @param string $_mntby
	 * @param string $_changed
	 * @param string $_source
	 * @return OvhStructRipeOrganisationStruct
	 */
	public function __construct($_organisation = NULL,$_orgname = NULL,$_orgtype = NULL,$_address = NULL,$_email = NULL,$_abusemailbox = NULL,$_mntref = NULL,$_mntby = NULL,$_changed = NULL,$_source = NULL)
	{
		parent::__construct(array('organisation'=>$_organisation,'orgname'=>$_orgname,'orgtype'=>$_orgtype,'address'=>($_address instanceof OvhStructMyArrayOfStringType)?$_address:new OvhStructMyArrayOfStringType($_address),'email'=>$_email,'abusemailbox'=>$_abusemailbox,'mntref'=>$_mntref,'mntby'=>$_mntby,'changed'=>$_changed,'source'=>$_source));
	}
	/**
	 * Get organisation value
	 * @return string|null
	 */
	public function getOrganisation()
	{
		return $this->organisation;
	}
	/**
	 * Set organisation value
	 * @param string $_organisation the organisation
	 * @return string
	 */
	public function setOrganisation($_organisation)
	{
		return ($this->organisation = $_organisation);
	}
	/**
	 * Get orgname value
	 * @return string|null
	 */
	public function getOrgname()
	{
		return $this->orgname;
	}
	/**
	 * Set orgname value
	 * @param string $_orgname the orgname
	 * @return string
	 */
	public function setOrgname($_orgname)
	{
		return ($this->orgname = $_orgname);
	}
	/**
	 * Get orgtype value
	 * @return string|null
	 */
	public function getOrgtype()
	{
		return $this->orgtype;
	}
	/**
	 * Set orgtype value
	 * @param string $_orgtype the orgtype
	 * @return string
	 */
	public function setOrgtype($_orgtype)
	{
		return ($this->orgtype = $_orgtype);
	}
	/**
	 * Get address value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getAddress()
	{
		return $this->address;
	}
	/**
	 * Set address value
	 * @param OvhStructMyArrayOfStringType $_address the address
	 * @return OvhStructMyArrayOfStringType
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
	 * Get abusemailbox value
	 * @return string|null
	 */
	public function getAbusemailbox()
	{
		return $this->abusemailbox;
	}
	/**
	 * Set abusemailbox value
	 * @param string $_abusemailbox the abusemailbox
	 * @return string
	 */
	public function setAbusemailbox($_abusemailbox)
	{
		return ($this->abusemailbox = $_abusemailbox);
	}
	/**
	 * Get mntref value
	 * @return string|null
	 */
	public function getMntref()
	{
		return $this->mntref;
	}
	/**
	 * Set mntref value
	 * @param string $_mntref the mntref
	 * @return string
	 */
	public function setMntref($_mntref)
	{
		return ($this->mntref = $_mntref);
	}
	/**
	 * Get mntby value
	 * @return string|null
	 */
	public function getMntby()
	{
		return $this->mntby;
	}
	/**
	 * Set mntby value
	 * @param string $_mntby the mntby
	 * @return string
	 */
	public function setMntby($_mntby)
	{
		return ($this->mntby = $_mntby);
	}
	/**
	 * Get changed value
	 * @return string|null
	 */
	public function getChanged()
	{
		return $this->changed;
	}
	/**
	 * Set changed value
	 * @param string $_changed the changed
	 * @return string
	 */
	public function setChanged($_changed)
	{
		return ($this->changed = $_changed);
	}
	/**
	 * Get source value
	 * @return string|null
	 */
	public function getSource()
	{
		return $this->source;
	}
	/**
	 * Set source value
	 * @param string $_source the source
	 * @return string
	 */
	public function setSource($_source)
	{
		return ($this->source = $_source);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructRipeOrganisationStruct
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