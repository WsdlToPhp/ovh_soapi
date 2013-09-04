<?php
/**
 * File for class OvhStructTelephonyChangeNicModify
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyChangeNicModify originally named telephonyChangeNicModify
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyChangeNicModify extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The nicNames
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfStringType
	 */
	public $nicNames;
	/**
	 * The nicPasswords
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfStringType
	 */
	public $nicPasswords;
	/**
	 * The nicTypes
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfStringType
	 */
	public $nicTypes;
	/**
	 * The changeTypes
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfStringType
	 */
	public $changeTypes;
	/**
	 * The changeElts
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var OvhStructMyArrayOfStringType
	 */
	public $changeElts;
	/**
	 * Constructor method for telephonyChangeNicModify
	 * @see parent::__construct()
	 * @param string $_session
	 * @param OvhStructMyArrayOfStringType $_nicNames
	 * @param OvhStructMyArrayOfStringType $_nicPasswords
	 * @param OvhStructMyArrayOfStringType $_nicTypes
	 * @param OvhStructMyArrayOfStringType $_changeTypes
	 * @param OvhStructMyArrayOfStringType $_changeElts
	 * @return OvhStructTelephonyChangeNicModify
	 */
	public function __construct($_session = NULL,$_nicNames = NULL,$_nicPasswords = NULL,$_nicTypes = NULL,$_changeTypes = NULL,$_changeElts = NULL)
	{
		parent::__construct(array('session'=>$_session,'nicNames'=>($_nicNames instanceof OvhStructMyArrayOfStringType)?$_nicNames:new OvhStructMyArrayOfStringType($_nicNames),'nicPasswords'=>($_nicPasswords instanceof OvhStructMyArrayOfStringType)?$_nicPasswords:new OvhStructMyArrayOfStringType($_nicPasswords),'nicTypes'=>($_nicTypes instanceof OvhStructMyArrayOfStringType)?$_nicTypes:new OvhStructMyArrayOfStringType($_nicTypes),'changeTypes'=>($_changeTypes instanceof OvhStructMyArrayOfStringType)?$_changeTypes:new OvhStructMyArrayOfStringType($_changeTypes),'changeElts'=>($_changeElts instanceof OvhStructMyArrayOfStringType)?$_changeElts:new OvhStructMyArrayOfStringType($_changeElts)));
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
	 * Get nicNames value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getNicNames()
	{
		return $this->nicNames;
	}
	/**
	 * Set nicNames value
	 * @param OvhStructMyArrayOfStringType $_nicNames the nicNames
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setNicNames($_nicNames)
	{
		return ($this->nicNames = $_nicNames);
	}
	/**
	 * Get nicPasswords value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getNicPasswords()
	{
		return $this->nicPasswords;
	}
	/**
	 * Set nicPasswords value
	 * @param OvhStructMyArrayOfStringType $_nicPasswords the nicPasswords
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setNicPasswords($_nicPasswords)
	{
		return ($this->nicPasswords = $_nicPasswords);
	}
	/**
	 * Get nicTypes value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getNicTypes()
	{
		return $this->nicTypes;
	}
	/**
	 * Set nicTypes value
	 * @param OvhStructMyArrayOfStringType $_nicTypes the nicTypes
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setNicTypes($_nicTypes)
	{
		return ($this->nicTypes = $_nicTypes);
	}
	/**
	 * Get changeTypes value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getChangeTypes()
	{
		return $this->changeTypes;
	}
	/**
	 * Set changeTypes value
	 * @param OvhStructMyArrayOfStringType $_changeTypes the changeTypes
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setChangeTypes($_changeTypes)
	{
		return ($this->changeTypes = $_changeTypes);
	}
	/**
	 * Get changeElts value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getChangeElts()
	{
		return $this->changeElts;
	}
	/**
	 * Set changeElts value
	 * @param OvhStructMyArrayOfStringType $_changeElts the changeElts
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setChangeElts($_changeElts)
	{
		return ($this->changeElts = $_changeElts);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyChangeNicModify
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