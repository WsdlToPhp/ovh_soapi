<?php
/**
 * File for class OvhStructTelephonySmsplusSendSmsMt
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySmsplusSendSmsMt originally named telephonySmsplusSendSmsMt
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySmsplusSendSmsMt extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The shortCode
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $shortCode;
	/**
	 * The keyword
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $keyword;
	/**
	 * The message
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $message;
	/**
	 * The idsList
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfIntType
	 */
	public $idsList;
	/**
	 * Constructor method for telephonySmsplusSendSmsMt
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_shortCode
	 * @param string $_keyword
	 * @param string $_message
	 * @param OvhStructMyArrayOfIntType $_idsList
	 * @return OvhStructTelephonySmsplusSendSmsMt
	 */
	public function __construct($_session = NULL,$_shortCode = NULL,$_keyword = NULL,$_message = NULL,$_idsList = NULL)
	{
		parent::__construct(array('session'=>$_session,'shortCode'=>$_shortCode,'keyword'=>$_keyword,'message'=>$_message,'idsList'=>($_idsList instanceof OvhStructMyArrayOfIntType)?$_idsList:new OvhStructMyArrayOfIntType($_idsList)));
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
	 * Get shortCode value
	 * @return string|null
	 */
	public function getShortCode()
	{
		return $this->shortCode;
	}
	/**
	 * Set shortCode value
	 * @param string $_shortCode the shortCode
	 * @return string
	 */
	public function setShortCode($_shortCode)
	{
		return ($this->shortCode = $_shortCode);
	}
	/**
	 * Get keyword value
	 * @return string|null
	 */
	public function getKeyword()
	{
		return $this->keyword;
	}
	/**
	 * Set keyword value
	 * @param string $_keyword the keyword
	 * @return string
	 */
	public function setKeyword($_keyword)
	{
		return ($this->keyword = $_keyword);
	}
	/**
	 * Get message value
	 * @return string|null
	 */
	public function getMessage()
	{
		return $this->message;
	}
	/**
	 * Set message value
	 * @param string $_message the message
	 * @return string
	 */
	public function setMessage($_message)
	{
		return ($this->message = $_message);
	}
	/**
	 * Get idsList value
	 * @return OvhStructMyArrayOfIntType|null
	 */
	public function getIdsList()
	{
		return $this->idsList;
	}
	/**
	 * Set idsList value
	 * @param OvhStructMyArrayOfIntType $_idsList the idsList
	 * @return OvhStructMyArrayOfIntType
	 */
	public function setIdsList($_idsList)
	{
		return ($this->idsList = $_idsList);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySmsplusSendSmsMt
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