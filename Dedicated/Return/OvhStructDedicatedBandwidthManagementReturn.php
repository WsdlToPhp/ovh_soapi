<?php
/**
 * File for class OvhStructDedicatedBandwidthManagementReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructDedicatedBandwidthManagementReturn originally named dedicatedBandwidthManagementReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructDedicatedBandwidthManagementReturn extends OvhWsdlClass
{
	/**
	 * The serverName
	 * @var string
	 */
	public $serverName;
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The status
	 * @var string
	 */
	public $status;
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * Constructor method for dedicatedBandwidthManagementReturn
	 * @see parent::__construct()
	 * @param string $_serverName
	 * @param int $_id
	 * @param string $_status
	 * @param string $_date
	 * @return OvhStructDedicatedBandwidthManagementReturn
	 */
	public function __construct($_serverName = NULL,$_id = NULL,$_status = NULL,$_date = NULL)
	{
		parent::__construct(array('serverName'=>$_serverName,'id'=>$_id,'status'=>$_status,'date'=>$_date));
	}
	/**
	 * Get serverName value
	 * @return string|null
	 */
	public function getServerName()
	{
		return $this->serverName;
	}
	/**
	 * Set serverName value
	 * @param string $_serverName the serverName
	 * @return string
	 */
	public function setServerName($_serverName)
	{
		return ($this->serverName = $_serverName);
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
	 * Get date value
	 * @return string|null
	 */
	public function getDate()
	{
		return $this->date;
	}
	/**
	 * Set date value
	 * @param string $_date the date
	 * @return string
	 */
	public function setDate($_date)
	{
		return ($this->date = $_date);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructDedicatedBandwidthManagementReturn
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