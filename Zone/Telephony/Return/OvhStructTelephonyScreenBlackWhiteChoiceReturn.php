<?php
/**
 * File for class OvhStructTelephonyScreenBlackWhiteChoiceReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyScreenBlackWhiteChoiceReturn originally named telephonyScreenBlackWhiteChoiceReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyScreenBlackWhiteChoiceReturn extends OvhWsdlClass
{
	/**
	 * The incomingScreenlist
	 * @var string
	 */
	public $incomingScreenlist;
	/**
	 * The outgoingScreenlist
	 * @var string
	 */
	public $outgoingScreenlist;
	/**
	 * The outgoingCodeUnlock
	 * @var string
	 */
	public $outgoingCodeUnlock;
	/**
	 * Constructor method for telephonyScreenBlackWhiteChoiceReturn
	 * @see parent::__construct()
	 * @param string $_incomingScreenlist
	 * @param string $_outgoingScreenlist
	 * @param string $_outgoingCodeUnlock
	 * @return OvhStructTelephonyScreenBlackWhiteChoiceReturn
	 */
	public function __construct($_incomingScreenlist = NULL,$_outgoingScreenlist = NULL,$_outgoingCodeUnlock = NULL)
	{
		parent::__construct(array('incomingScreenlist'=>$_incomingScreenlist,'outgoingScreenlist'=>$_outgoingScreenlist,'outgoingCodeUnlock'=>$_outgoingCodeUnlock));
	}
	/**
	 * Get incomingScreenlist value
	 * @return string|null
	 */
	public function getIncomingScreenlist()
	{
		return $this->incomingScreenlist;
	}
	/**
	 * Set incomingScreenlist value
	 * @param string $_incomingScreenlist the incomingScreenlist
	 * @return string
	 */
	public function setIncomingScreenlist($_incomingScreenlist)
	{
		return ($this->incomingScreenlist = $_incomingScreenlist);
	}
	/**
	 * Get outgoingScreenlist value
	 * @return string|null
	 */
	public function getOutgoingScreenlist()
	{
		return $this->outgoingScreenlist;
	}
	/**
	 * Set outgoingScreenlist value
	 * @param string $_outgoingScreenlist the outgoingScreenlist
	 * @return string
	 */
	public function setOutgoingScreenlist($_outgoingScreenlist)
	{
		return ($this->outgoingScreenlist = $_outgoingScreenlist);
	}
	/**
	 * Get outgoingCodeUnlock value
	 * @return string|null
	 */
	public function getOutgoingCodeUnlock()
	{
		return $this->outgoingCodeUnlock;
	}
	/**
	 * Set outgoingCodeUnlock value
	 * @param string $_outgoingCodeUnlock the outgoingCodeUnlock
	 * @return string
	 */
	public function setOutgoingCodeUnlock($_outgoingCodeUnlock)
	{
		return ($this->outgoingCodeUnlock = $_outgoingCodeUnlock);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyScreenBlackWhiteChoiceReturn
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