<?php
/**
 * File for class OvhStructTelephonyAbbreviatedNumberOnGroupAdd
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyAbbreviatedNumberOnGroupAdd originally named telephonyAbbreviatedNumberOnGroupAdd
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyAbbreviatedNumberOnGroupAdd extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The group
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $group;
	/**
	 * The abbreviatedNumber
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $abbreviatedNumber;
	/**
	 * The relatedNumber
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $relatedNumber;
	/**
	 * The name
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $name;
	/**
	 * The surname
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $surname;
	/**
	 * Constructor method for telephonyAbbreviatedNumberOnGroupAdd
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_group
	 * @param string $_abbreviatedNumber
	 * @param string $_relatedNumber
	 * @param string $_name
	 * @param string $_surname
	 * @return OvhStructTelephonyAbbreviatedNumberOnGroupAdd
	 */
	public function __construct($_session = NULL,$_group = NULL,$_abbreviatedNumber = NULL,$_relatedNumber = NULL,$_name = NULL,$_surname = NULL)
	{
		parent::__construct(array('session'=>$_session,'group'=>$_group,'abbreviatedNumber'=>$_abbreviatedNumber,'relatedNumber'=>$_relatedNumber,'name'=>$_name,'surname'=>$_surname));
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
	 * Get group value
	 * @return string|null
	 */
	public function getGroup()
	{
		return $this->group;
	}
	/**
	 * Set group value
	 * @param string $_group the group
	 * @return string
	 */
	public function setGroup($_group)
	{
		return ($this->group = $_group);
	}
	/**
	 * Get abbreviatedNumber value
	 * @return string|null
	 */
	public function getAbbreviatedNumber()
	{
		return $this->abbreviatedNumber;
	}
	/**
	 * Set abbreviatedNumber value
	 * @param string $_abbreviatedNumber the abbreviatedNumber
	 * @return string
	 */
	public function setAbbreviatedNumber($_abbreviatedNumber)
	{
		return ($this->abbreviatedNumber = $_abbreviatedNumber);
	}
	/**
	 * Get relatedNumber value
	 * @return string|null
	 */
	public function getRelatedNumber()
	{
		return $this->relatedNumber;
	}
	/**
	 * Set relatedNumber value
	 * @param string $_relatedNumber the relatedNumber
	 * @return string
	 */
	public function setRelatedNumber($_relatedNumber)
	{
		return ($this->relatedNumber = $_relatedNumber);
	}
	/**
	 * Get name value
	 * @return string|null
	 */
	public function getName()
	{
		return $this->name;
	}
	/**
	 * Set name value
	 * @param string $_name the name
	 * @return string
	 */
	public function setName($_name)
	{
		return ($this->name = $_name);
	}
	/**
	 * Get surname value
	 * @return string|null
	 */
	public function getSurname()
	{
		return $this->surname;
	}
	/**
	 * Set surname value
	 * @param string $_surname the surname
	 * @return string
	 */
	public function setSurname($_surname)
	{
		return ($this->surname = $_surname);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyAbbreviatedNumberOnGroupAdd
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