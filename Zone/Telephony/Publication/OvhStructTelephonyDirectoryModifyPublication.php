<?php
/**
 * File for class OvhStructTelephonyDirectoryModifyPublication
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyDirectoryModifyPublication originally named telephonyDirectoryModifyPublication
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyDirectoryModifyPublication extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The callNumber
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $callNumber;
	/**
	 * The countryCode
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $countryCode;
	/**
	 * The lineDescription
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $lineDescription;
	/**
	 * The displayFirstName
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $displayFirstName;
	/**
	 * The displayOnlyCity
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $displayOnlyCity;
	/**
	 * The displayUniversalDirectory
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $displayUniversalDirectory;
	/**
	 * The displayMarketingDirectory
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $displayMarketingDirectory;
	/**
	 * The displaySearchReverse
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $displaySearchReverse;
	/**
	 * The receivePJDirectory
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $receivePJDirectory;
	/**
	 * Constructor method for telephonyDirectoryModifyPublication
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_callNumber
	 * @param string $_countryCode
	 * @param string $_lineDescription
	 * @param string $_displayFirstName
	 * @param string $_displayOnlyCity
	 * @param string $_displayUniversalDirectory
	 * @param string $_displayMarketingDirectory
	 * @param string $_displaySearchReverse
	 * @param string $_receivePJDirectory
	 * @return OvhStructTelephonyDirectoryModifyPublication
	 */
	public function __construct($_session = NULL,$_callNumber = NULL,$_countryCode = NULL,$_lineDescription = NULL,$_displayFirstName = NULL,$_displayOnlyCity = NULL,$_displayUniversalDirectory = NULL,$_displayMarketingDirectory = NULL,$_displaySearchReverse = NULL,$_receivePJDirectory = NULL)
	{
		parent::__construct(array('session'=>$_session,'callNumber'=>$_callNumber,'countryCode'=>$_countryCode,'lineDescription'=>$_lineDescription,'displayFirstName'=>$_displayFirstName,'displayOnlyCity'=>$_displayOnlyCity,'displayUniversalDirectory'=>$_displayUniversalDirectory,'displayMarketingDirectory'=>$_displayMarketingDirectory,'displaySearchReverse'=>$_displaySearchReverse,'receivePJDirectory'=>$_receivePJDirectory));
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
	 * Get callNumber value
	 * @return string|null
	 */
	public function getCallNumber()
	{
		return $this->callNumber;
	}
	/**
	 * Set callNumber value
	 * @param string $_callNumber the callNumber
	 * @return string
	 */
	public function setCallNumber($_callNumber)
	{
		return ($this->callNumber = $_callNumber);
	}
	/**
	 * Get countryCode value
	 * @return string|null
	 */
	public function getCountryCode()
	{
		return $this->countryCode;
	}
	/**
	 * Set countryCode value
	 * @param string $_countryCode the countryCode
	 * @return string
	 */
	public function setCountryCode($_countryCode)
	{
		return ($this->countryCode = $_countryCode);
	}
	/**
	 * Get lineDescription value
	 * @return string|null
	 */
	public function getLineDescription()
	{
		return $this->lineDescription;
	}
	/**
	 * Set lineDescription value
	 * @param string $_lineDescription the lineDescription
	 * @return string
	 */
	public function setLineDescription($_lineDescription)
	{
		return ($this->lineDescription = $_lineDescription);
	}
	/**
	 * Get displayFirstName value
	 * @return string|null
	 */
	public function getDisplayFirstName()
	{
		return $this->displayFirstName;
	}
	/**
	 * Set displayFirstName value
	 * @param string $_displayFirstName the displayFirstName
	 * @return string
	 */
	public function setDisplayFirstName($_displayFirstName)
	{
		return ($this->displayFirstName = $_displayFirstName);
	}
	/**
	 * Get displayOnlyCity value
	 * @return string|null
	 */
	public function getDisplayOnlyCity()
	{
		return $this->displayOnlyCity;
	}
	/**
	 * Set displayOnlyCity value
	 * @param string $_displayOnlyCity the displayOnlyCity
	 * @return string
	 */
	public function setDisplayOnlyCity($_displayOnlyCity)
	{
		return ($this->displayOnlyCity = $_displayOnlyCity);
	}
	/**
	 * Get displayUniversalDirectory value
	 * @return string|null
	 */
	public function getDisplayUniversalDirectory()
	{
		return $this->displayUniversalDirectory;
	}
	/**
	 * Set displayUniversalDirectory value
	 * @param string $_displayUniversalDirectory the displayUniversalDirectory
	 * @return string
	 */
	public function setDisplayUniversalDirectory($_displayUniversalDirectory)
	{
		return ($this->displayUniversalDirectory = $_displayUniversalDirectory);
	}
	/**
	 * Get displayMarketingDirectory value
	 * @return string|null
	 */
	public function getDisplayMarketingDirectory()
	{
		return $this->displayMarketingDirectory;
	}
	/**
	 * Set displayMarketingDirectory value
	 * @param string $_displayMarketingDirectory the displayMarketingDirectory
	 * @return string
	 */
	public function setDisplayMarketingDirectory($_displayMarketingDirectory)
	{
		return ($this->displayMarketingDirectory = $_displayMarketingDirectory);
	}
	/**
	 * Get displaySearchReverse value
	 * @return string|null
	 */
	public function getDisplaySearchReverse()
	{
		return $this->displaySearchReverse;
	}
	/**
	 * Set displaySearchReverse value
	 * @param string $_displaySearchReverse the displaySearchReverse
	 * @return string
	 */
	public function setDisplaySearchReverse($_displaySearchReverse)
	{
		return ($this->displaySearchReverse = $_displaySearchReverse);
	}
	/**
	 * Get receivePJDirectory value
	 * @return string|null
	 */
	public function getReceivePJDirectory()
	{
		return $this->receivePJDirectory;
	}
	/**
	 * Set receivePJDirectory value
	 * @param string $_receivePJDirectory the receivePJDirectory
	 * @return string
	 */
	public function setReceivePJDirectory($_receivePJDirectory)
	{
		return ($this->receivePJDirectory = $_receivePJDirectory);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyDirectoryModifyPublication
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