<?php
/**
 * File for class OvhStructTelephonySmsListCsvAttachment
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySmsListCsvAttachment originally named telephonySmsListCsvAttachment
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySmsListCsvAttachment extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The smsAccount
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $smsAccount;
	/**
	 * The id
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $id;
	/**
	 * Constructor method for telephonySmsListCsvAttachment
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_smsAccount
	 * @param string $_id
	 * @return OvhStructTelephonySmsListCsvAttachment
	 */
	public function __construct($_session = NULL,$_smsAccount = NULL,$_id = NULL)
	{
		parent::__construct(array('session'=>$_session,'smsAccount'=>$_smsAccount,'id'=>$_id));
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySmsListCsvAttachment
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