<?php
/**
 * File for class OvhStructDedicatedGetServiceMonitoringItemStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedGetServiceMonitoringItemStruct originally named dedicatedGetServiceMonitoringItemStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedGetServiceMonitoringItemStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * The port
	 * @var int
	 */
	public $port;
	/**
	 * The protocol
	 * @var string
	 */
	public $protocol;
	/**
	 * The period
	 * @var string
	 */
	public $period;
	/**
	 * The string
	 * @var string
	 */
	public $string;
	/**
	 * The url
	 * @var string
	 */
	public $url;
	/**
	 * The sms
	 * @var OvhStructMyArrayOfStringType
	 */
	public $sms;
	/**
	 * The email
	 * @var OvhStructMyArrayOfStringType
	 */
	public $email;
	/**
	 * Constructor method for dedicatedGetServiceMonitoringItemStruct
	 * @see parent::__construct()
	 * @param int $_id
	 * @param string $_ip
	 * @param int $_port
	 * @param string $_protocol
	 * @param string $_period
	 * @param string $_string
	 * @param string $_url
	 * @param OvhStructMyArrayOfStringType $_sms
	 * @param OvhStructMyArrayOfStringType $_email
	 * @return OvhStructDedicatedGetServiceMonitoringItemStruct
	 */
	public function __construct($_id = NULL,$_ip = NULL,$_port = NULL,$_protocol = NULL,$_period = NULL,$_string = NULL,$_url = NULL,$_sms = NULL,$_email = NULL)
	{
		parent::__construct(array('id'=>$_id,'ip'=>$_ip,'port'=>$_port,'protocol'=>$_protocol,'period'=>$_period,'string'=>$_string,'url'=>$_url,'sms'=>($_sms instanceof OvhStructMyArrayOfStringType)?$_sms:new OvhStructMyArrayOfStringType($_sms),'email'=>($_email instanceof OvhStructMyArrayOfStringType)?$_email:new OvhStructMyArrayOfStringType($_email)));
	}
	/**
	 * Get id value
	 * @return int|null
	 */
	public function getId()
	{
		return $this->id;
	}
	/**
	 * Set id value
	 * @param int $_id the id
	 * @return int
	 */
	public function setId($_id)
	{
		return ($this->id = $_id);
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
	 * Get port value
	 * @return int|null
	 */
	public function getPort()
	{
		return $this->port;
	}
	/**
	 * Set port value
	 * @param int $_port the port
	 * @return int
	 */
	public function setPort($_port)
	{
		return ($this->port = $_port);
	}
	/**
	 * Get protocol value
	 * @return string|null
	 */
	public function getProtocol()
	{
		return $this->protocol;
	}
	/**
	 * Set protocol value
	 * @param string $_protocol the protocol
	 * @return string
	 */
	public function setProtocol($_protocol)
	{
		return ($this->protocol = $_protocol);
	}
	/**
	 * Get period value
	 * @return string|null
	 */
	public function getPeriod()
	{
		return $this->period;
	}
	/**
	 * Set period value
	 * @param string $_period the period
	 * @return string
	 */
	public function setPeriod($_period)
	{
		return ($this->period = $_period);
	}
	/**
	 * Get string value
	 * @return string|null
	 */
	public function getString()
	{
		return $this->string;
	}
	/**
	 * Set string value
	 * @param string $_string the string
	 * @return string
	 */
	public function setString($_string)
	{
		return ($this->string = $_string);
	}
	/**
	 * Get url value
	 * @return string|null
	 */
	public function getUrl()
	{
		return $this->url;
	}
	/**
	 * Set url value
	 * @param string $_url the url
	 * @return string
	 */
	public function setUrl($_url)
	{
		return ($this->url = $_url);
	}
	/**
	 * Get sms value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getSms()
	{
		return $this->sms;
	}
	/**
	 * Set sms value
	 * @param OvhStructMyArrayOfStringType $_sms the sms
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setSms($_sms)
	{
		return ($this->sms = $_sms);
	}
	/**
	 * Get email value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getEmail()
	{
		return $this->email;
	}
	/**
	 * Set email value
	 * @param OvhStructMyArrayOfStringType $_email the email
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setEmail($_email)
	{
		return ($this->email = $_email);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedGetServiceMonitoringItemStruct
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