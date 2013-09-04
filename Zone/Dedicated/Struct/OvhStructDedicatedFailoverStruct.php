<?php
/**
 * File for class OvhStructDedicatedFailoverStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedFailoverStruct originally named dedicatedFailoverStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedFailoverStruct extends OvhWsdlClass
{
	/**
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * The routedTo
	 * @var string
	 */
	public $routedTo;
	/**
	 * The comment
	 * @var string
	 */
	public $comment;
	/**
	 * The ssl
	 * @var boolean
	 */
	public $ssl;
	/**
	 * Constructor method for dedicatedFailoverStruct
	 * @see parent::__construct()
	 * @param string $_ip
	 * @param string $_routedTo
	 * @param string $_comment
	 * @param boolean $_ssl
	 * @return OvhStructDedicatedFailoverStruct
	 */
	public function __construct($_ip = NULL,$_routedTo = NULL,$_comment = NULL,$_ssl = NULL)
	{
		parent::__construct(array('ip'=>$_ip,'routedTo'=>$_routedTo,'comment'=>$_comment,'ssl'=>$_ssl));
	}
	/**
	 * Get ip value
	 * @return string|null
	 */
	public function getIp()
	{
		return $this->ip;
	}
	/**
	 * Set ip value
	 * @param string $_ip the ip
	 * @return string
	 */
	public function setIp($_ip)
	{
		return ($this->ip = $_ip);
	}
	/**
	 * Get routedTo value
	 * @return string|null
	 */
	public function getRoutedTo()
	{
		return $this->routedTo;
	}
	/**
	 * Set routedTo value
	 * @param string $_routedTo the routedTo
	 * @return string
	 */
	public function setRoutedTo($_routedTo)
	{
		return ($this->routedTo = $_routedTo);
	}
	/**
	 * Get comment value
	 * @return string|null
	 */
	public function getComment()
	{
		return $this->comment;
	}
	/**
	 * Set comment value
	 * @param string $_comment the comment
	 * @return string
	 */
	public function setComment($_comment)
	{
		return ($this->comment = $_comment);
	}
	/**
	 * Get ssl value
	 * @return boolean|null
	 */
	public function getSsl()
	{
		return $this->ssl;
	}
	/**
	 * Set ssl value
	 * @param boolean $_ssl the ssl
	 * @return boolean
	 */
	public function setSsl($_ssl)
	{
		return ($this->ssl = $_ssl);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedFailoverStruct
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