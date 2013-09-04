<?php
/**
 * File for class OvhStructTelephonyOfferInfoHardwareStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyOfferInfoHardwareStruct originally named telephonyOfferInfoHardwareStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyOfferInfoHardwareStruct extends OvhWsdlClass
{
	/**
	 * The brand
	 * @var string
	 */
	public $brand;
	/**
	 * The model
	 * @var string
	 */
	public $model;
	/**
	 * The protocol
	 * @var string
	 */
	public $protocol;
	/**
	 * The mac
	 * @var string
	 */
	public $mac;
	/**
	 * The ip
	 * @var string
	 */
	public $ip;
	/**
	 * The engage
	 * @var boolean
	 */
	public $engage;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The port
	 * @var int
	 */
	public $port;
	/**
	 * The outOfService
	 * @var boolean
	 */
	public $outOfService;
	/**
	 * Constructor method for telephonyOfferInfoHardwareStruct
	 * @see parent::__construct()
	 * @param string $_brand
	 * @param string $_model
	 * @param string $_protocol
	 * @param string $_mac
	 * @param string $_ip
	 * @param boolean $_engage
	 * @param string $_status
	 * @param int $_port
	 * @param boolean $_outOfService
	 * @return OvhStructTelephonyOfferInfoHardwareStruct
	 */
	public function __construct($_brand = NULL,$_model = NULL,$_protocol = NULL,$_mac = NULL,$_ip = NULL,$_engage = NULL,$_status = NULL,$_port = NULL,$_outOfService = NULL)
	{
		parent::__construct(array('brand'=>$_brand,'model'=>$_model,'protocol'=>$_protocol,'mac'=>$_mac,'ip'=>$_ip,'engage'=>$_engage,'status'=>$_status,'port'=>$_port,'outOfService'=>$_outOfService));
	}
	/**
	 * Get brand value
	 * @return string|null
	 */
	public function getBrand()
	{
		return $this->brand;
	}
	/**
	 * Set brand value
	 * @param string $_brand the brand
	 * @return string
	 */
	public function setBrand($_brand)
	{
		return ($this->brand = $_brand);
	}
	/**
	 * Get model value
	 * @return string|null
	 */
	public function getModel()
	{
		return $this->model;
	}
	/**
	 * Set model value
	 * @param string $_model the model
	 * @return string
	 */
	public function setModel($_model)
	{
		return ($this->model = $_model);
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
	 * Get mac value
	 * @return string|null
	 */
	public function getMac()
	{
		return $this->mac;
	}
	/**
	 * Set mac value
	 * @param string $_mac the mac
	 * @return string
	 */
	public function setMac($_mac)
	{
		return ($this->mac = $_mac);
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
	 * Get engage value
	 * @return boolean|null
	 */
	public function getEngage()
	{
		return $this->engage;
	}
	/**
	 * Set engage value
	 * @param boolean $_engage the engage
	 * @return boolean
	 */
	public function setEngage($_engage)
	{
		return ($this->engage = $_engage);
	}
	/**
	 * Get status value
	 * @return string|null
	 */
	public function getStatus()
	{
		return $this->status;
	}
	/**
	 * Set status value
	 * @param string $_status the status
	 * @return string
	 */
	public function setStatus($_status)
	{
		return ($this->status = $_status);
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
	 * Get outOfService value
	 * @return boolean|null
	 */
	public function getOutOfService()
	{
		return $this->outOfService;
	}
	/**
	 * Set outOfService value
	 * @param boolean $_outOfService the outOfService
	 * @return boolean
	 */
	public function setOutOfService($_outOfService)
	{
		return ($this->outOfService = $_outOfService);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyOfferInfoHardwareStruct
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