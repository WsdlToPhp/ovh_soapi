<?php
/**
 * File for class OvhStructDedicatedDelServiceMonitoringAlert
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedDelServiceMonitoringAlert originally named dedicatedDelServiceMonitoringAlert
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedDelServiceMonitoringAlert extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The ip
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $ip;
	/**
	 * The port
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $port;
	/**
	 * The itemId
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $itemId;
	/**
	 * The media
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $media;
	/**
	 * The destination
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $destination;
	/**
	 * Constructor method for dedicatedDelServiceMonitoringAlert
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_ip
	 * @param int $_port
	 * @param int $_itemId
	 * @param string $_media
	 * @param string $_destination
	 * @return OvhStructDedicatedDelServiceMonitoringAlert
	 */
	public function __construct($_session = NULL,$_ip = NULL,$_port = NULL,$_itemId = NULL,$_media = NULL,$_destination = NULL)
	{
		parent::__construct(array('session'=>$_session,'ip'=>$_ip,'port'=>$_port,'itemId'=>$_itemId,'media'=>$_media,'destination'=>$_destination));
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
	 * Get itemId value
	 * @return int|null
	 */
	public function getItemId()
	{
		return $this->itemId;
	}
	/**
	 * Set itemId value
	 * @param int $_itemId the itemId
	 * @return int
	 */
	public function setItemId($_itemId)
	{
		return ($this->itemId = $_itemId);
	}
	/**
	 * Get media value
	 * @return string|null
	 */
	public function getMedia()
	{
		return $this->media;
	}
	/**
	 * Set media value
	 * @param string $_media the media
	 * @return string
	 */
	public function setMedia($_media)
	{
		return ($this->media = $_media);
	}
	/**
	 * Get destination value
	 * @return string|null
	 */
	public function getDestination()
	{
		return $this->destination;
	}
	/**
	 * Set destination value
	 * @param string $_destination the destination
	 * @return string
	 */
	public function setDestination($_destination)
	{
		return ($this->destination = $_destination);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedDelServiceMonitoringAlert
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