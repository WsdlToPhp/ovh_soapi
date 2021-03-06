<?php
/**
 * File for class OvhStructTelephonySmsUserDeleteCsvAttachment
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySmsUserDeleteCsvAttachment originally named telephonySmsUserDeleteCsvAttachment
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySmsUserDeleteCsvAttachment extends OvhWsdlClass
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
	 * The ids
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfIntType
	 */
	public $ids;
	/**
	 * Constructor method for telephonySmsUserDeleteCsvAttachment
	 * @see parent::__construct()
	 * @param string $_smsAccount
	 * @param string $_login
	 * @param string $_password
	 * @param OvhStructMyArrayOfIntType $_ids
	 * @return OvhStructTelephonySmsUserDeleteCsvAttachment
	 */
	public function __construct($_smsAccount = NULL,$_login = NULL,$_password = NULL,$_ids = NULL)
	{
		parent::__construct(array('smsAccount'=>$_smsAccount,'login'=>$_login,'password'=>$_password,'ids'=>($_ids instanceof OvhStructMyArrayOfIntType)?$_ids:new OvhStructMyArrayOfIntType($_ids)));
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
	 * Get ids value
	 * @return OvhStructMyArrayOfIntType|null
	 */
	public function getIds()
	{
		return $this->ids;
	}
	/**
	 * Set ids value
	 * @param OvhStructMyArrayOfIntType $_ids the ids
	 * @return OvhStructMyArrayOfIntType
	 */
	public function setIds($_ids)
	{
		return ($this->ids = $_ids);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySmsUserDeleteCsvAttachment
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