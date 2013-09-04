<?php
/**
 * File for class OvhStructTelephonyHuntingGenericScreenOptionsStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyHuntingGenericScreenOptionsStruct originally named telephonyHuntingGenericScreenOptionsStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyHuntingGenericScreenOptionsStruct extends OvhWsdlClass
{
	/**
	 * The callForward
	 * @var string
	 */
	public $callForward;
	/**
	 * The voicemail
	 * @var string
	 */
	public $voicemail;
	/**
	 * The index
	 * @var string
	 */
	public $index;
	/**
	 * The timeout
	 * @var string
	 */
	public $timeout;
	/**
	 * Constructor method for telephonyHuntingGenericScreenOptionsStruct
	 * @see parent::__construct()
	 * @param string $_callForward
	 * @param string $_voicemail
	 * @param string $_index
	 * @param string $_timeout
	 * @return OvhStructTelephonyHuntingGenericScreenOptionsStruct
	 */
	public function __construct($_callForward = NULL,$_voicemail = NULL,$_index = NULL,$_timeout = NULL)
	{
		parent::__construct(array('callForward'=>$_callForward,'voicemail'=>$_voicemail,'index'=>$_index,'timeout'=>$_timeout));
	}
	/**
	 * Get callForward value
	 * @return string|null
	 */
	public function getCallForward()
	{
		return $this->callForward;
	}
	/**
	 * Set callForward value
	 * @param string $_callForward the callForward
	 * @return string
	 */
	public function setCallForward($_callForward)
	{
		return ($this->callForward = $_callForward);
	}
	/**
	 * Get voicemail value
	 * @return string|null
	 */
	public function getVoicemail()
	{
		return $this->voicemail;
	}
	/**
	 * Set voicemail value
	 * @param string $_voicemail the voicemail
	 * @return string
	 */
	public function setVoicemail($_voicemail)
	{
		return ($this->voicemail = $_voicemail);
	}
	/**
	 * Get index value
	 * @return string|null
	 */
	public function getIndex()
	{
		return $this->index;
	}
	/**
	 * Set index value
	 * @param string $_index the index
	 * @return string
	 */
	public function setIndex($_index)
	{
		return ($this->index = $_index);
	}
	/**
	 * Get timeout value
	 * @return string|null
	 */
	public function getTimeout()
	{
		return $this->timeout;
	}
	/**
	 * Set timeout value
	 * @param string $_timeout the timeout
	 * @return string
	 */
	public function setTimeout($_timeout)
	{
		return ($this->timeout = $_timeout);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyHuntingGenericScreenOptionsStruct
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