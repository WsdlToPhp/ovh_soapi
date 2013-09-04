<?php
/**
 * File for class OvhStructTelephonySmsBlacklistedSendersDelete
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySmsBlacklistedSendersDelete originally named telephonySmsBlacklistedSendersDelete
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySmsBlacklistedSendersDelete extends OvhWsdlClass
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
	 * The ids
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfIntType
	 */
	public $ids;
	/**
	 * Constructor method for telephonySmsBlacklistedSendersDelete
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_smsAccount
	 * @param OvhStructMyArrayOfIntType $_ids
	 * @return OvhStructTelephonySmsBlacklistedSendersDelete
	 */
	public function __construct($_session = NULL,$_smsAccount = NULL,$_ids = NULL)
	{
		parent::__construct(array('session'=>$_session,'smsAccount'=>$_smsAccount,'ids'=>($_ids instanceof OvhStructMyArrayOfIntType)?$_ids:new OvhStructMyArrayOfIntType($_ids)));
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
	 * @return OvhStructTelephonySmsBlacklistedSendersDelete
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