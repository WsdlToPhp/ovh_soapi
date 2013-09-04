<?php
/**
 * File for class OvhStructTelephonySmsCreditInfoReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonySmsCreditInfoReturn originally named telephonySmsCreditInfoReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonySmsCreditInfoReturn extends OvhWsdlClass
{
	/**
	 * The waiting
	 * @var int
	 */
	public $waiting;
	/**
	 * The left
	 * @var int
	 */
	public $left;
	/**
	 * Constructor method for telephonySmsCreditInfoReturn
	 * @see parent::__construct()
	 * @param int $_waiting
	 * @param int $_left
	 * @return OvhStructTelephonySmsCreditInfoReturn
	 */
	public function __construct($_waiting = NULL,$_left = NULL)
	{
		parent::__construct(array('waiting'=>$_waiting,'left'=>$_left));
	}
	/**
	 * Get waiting value
	 * @return int|null
	 */
	public function getWaiting()
	{
		return $this->waiting;
	}
	/**
	 * Set waiting value
	 * @param int $_waiting the waiting
	 * @return int
	 */
	public function setWaiting($_waiting)
	{
		return ($this->waiting = $_waiting);
	}
	/**
	 * Get left value
	 * @return int|null
	 */
	public function getLeft()
	{
		return $this->left;
	}
	/**
	 * Set left value
	 * @param int $_left the left
	 * @return int
	 */
	public function setLeft($_left)
	{
		return ($this->left = $_left);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonySmsCreditInfoReturn
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