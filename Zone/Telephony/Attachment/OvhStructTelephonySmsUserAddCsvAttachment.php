<?php
/**
 * File for class OvhStructTelephonySmsUserAddCsvAttachment
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySmsUserAddCsvAttachment originally named telephonySmsUserAddCsvAttachment
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySmsUserAddCsvAttachment extends OvhWsdlClass
{
	/**
	 * The smsAccount
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $smsAccount;
	/**
	 * The login
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $login;
	/**
	 * The password
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $password;
	/**
	 * The csvUrl
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $csvUrl;
	/**
	 * The id
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $id;
	/**
	 * The name
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $name;
	/**
	 * Constructor method for telephonySmsUserAddCsvAttachment
	 * @see parent::__construct()
	 * @param string $_smsAccount
	 * @param string $_login
	 * @param string $_password
	 * @param string $_csvUrl
	 * @param string $_id
	 * @param string $_name
	 * @return OvhStructTelephonySmsUserAddCsvAttachment
	 */
	public function __construct($_smsAccount = NULL,$_login = NULL,$_password = NULL,$_csvUrl = NULL,$_id = NULL,$_name = NULL)
	{
		parent::__construct(array('smsAccount'=>$_smsAccount,'login'=>$_login,'password'=>$_password,'csvUrl'=>$_csvUrl,'id'=>$_id,'name'=>$_name));
	}
	/**
	 * Get smsAccount value
	 * @return string|null
	 */
	public function getSmsAccount()
	{
		return $this->smsAccount;
	}
	/**
	 * Set smsAccount value
	 * @param string $_smsAccount the smsAccount
	 * @return string
	 */
	public function setSmsAccount($_smsAccount)
	{
		return ($this->smsAccount = $_smsAccount);
	}
	/**
	 * Get login value
	 * @return string|null
	 */
	public function getLogin()
	{
		return $this->login;
	}
	/**
	 * Set login value
	 * @param string $_login the login
	 * @return string
	 */
	public function setLogin($_login)
	{
		return ($this->login = $_login);
	}
	/**
	 * Get password value
	 * @return string|null
	 */
	public function getPassword()
	{
		return $this->password;
	}
	/**
	 * Set password value
	 * @param string $_password the password
	 * @return string
	 */
	public function setPassword($_password)
	{
		return ($this->password = $_password);
	}
	/**
	 * Get csvUrl value
	 * @return string|null
	 */
	public function getCsvUrl()
	{
		return $this->csvUrl;
	}
	/**
	 * Set csvUrl value
	 * @param string $_csvUrl the csvUrl
	 * @return string
	 */
	public function setCsvUrl($_csvUrl)
	{
		return ($this->csvUrl = $_csvUrl);
	}
	/**
	 * Get id value
	 * @return string|null
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set id value
	 * @param string $_id the id
	 * @return string
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySmsUserAddCsvAttachment
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