<?php
/**
 * File for class OvhStructTelephonyDirectoryPJHeadingStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyDirectoryPJHeadingStruct originally named telephonyDirectoryPJHeadingStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyDirectoryPJHeadingStruct extends OvhWsdlClass
{
	/**
	 * The codePJ
	 * @var string
	 */
	public $codePJ;
	/**
	 * The labelPJ
	 * @var string
	 */
	public $labelPJ;
	/**
	 * The isAssociatedWithAPE
	 * @var string
	 */
	public $isAssociatedWithAPE;
	/**
	 * The notification
	 * @var string
	 */
	public $notification;
	/**
	 * Constructor method for telephonyDirectoryPJHeadingStruct
	 * @see parent::__construct()
	 * @param string $_codePJ
	 * @param string $_labelPJ
	 * @param string $_isAssociatedWithAPE
	 * @param string $_notification
	 * @return OvhStructTelephonyDirectoryPJHeadingStruct
	 */
	public function __construct($_codePJ = NULL,$_labelPJ = NULL,$_isAssociatedWithAPE = NULL,$_notification = NULL)
	{
		parent::__construct(array('codePJ'=>$_codePJ,'labelPJ'=>$_labelPJ,'isAssociatedWithAPE'=>$_isAssociatedWithAPE,'notification'=>$_notification));
	}
	/**
	 * Get codePJ value
	 * @return string|null
	 */
	public function getCodePJ()
	{
		return $this->codePJ;
	}
	/**
	 * Set codePJ value
	 * @param string $_codePJ the codePJ
	 * @return string
	 */
	public function setCodePJ($_codePJ)
	{
		return ($this->codePJ = $_codePJ);
	}
	/**
	 * Get labelPJ value
	 * @return string|null
	 */
	public function getLabelPJ()
	{
		return $this->labelPJ;
	}
	/**
	 * Set labelPJ value
	 * @param string $_labelPJ the labelPJ
	 * @return string
	 */
	public function setLabelPJ($_labelPJ)
	{
		return ($this->labelPJ = $_labelPJ);
	}
	/**
	 * Get isAssociatedWithAPE value
	 * @return string|null
	 */
	public function getIsAssociatedWithAPE()
	{
		return $this->isAssociatedWithAPE;
	}
	/**
	 * Set isAssociatedWithAPE value
	 * @param string $_isAssociatedWithAPE the isAssociatedWithAPE
	 * @return string
	 */
	public function setIsAssociatedWithAPE($_isAssociatedWithAPE)
	{
		return ($this->isAssociatedWithAPE = $_isAssociatedWithAPE);
	}
	/**
	 * Get notification value
	 * @return string|null
	 */
	public function getNotification()
	{
		return $this->notification;
	}
	/**
	 * Set notification value
	 * @param string $_notification the notification
	 * @return string
	 */
	public function setNotification($_notification)
	{
		return ($this->notification = $_notification);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyDirectoryPJHeadingStruct
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