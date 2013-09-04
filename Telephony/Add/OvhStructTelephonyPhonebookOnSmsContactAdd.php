<?php
/**
 * File for class OvhStructTelephonyPhonebookOnSmsContactAdd
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyPhonebookOnSmsContactAdd originally named telephonyPhonebookOnSmsContactAdd
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyPhonebookOnSmsContactAdd extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The smsAccount
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $smsAccount;
	/**
	 * The id
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $id;
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
	 * The workPhone
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $workPhone;
	/**
	 * The workMobile
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $workMobile;
	/**
	 * The homePhone
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $homePhone;
	/**
	 * The homeMobile
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $homeMobile;
	/**
	 * The groupName
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $groupName;
	/**
	 * Constructor method for telephonyPhonebookOnSmsContactAdd
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_smsAccount
	 * @param int $_id
	 * @param string $_name
	 * @param string $_surname
	 * @param string $_workPhone
	 * @param string $_workMobile
	 * @param string $_homePhone
	 * @param string $_homeMobile
	 * @param string $_groupName
	 * @return OvhStructTelephonyPhonebookOnSmsContactAdd
	 */
	public function __construct($_session = NULL,$_smsAccount = NULL,$_id = NULL,$_name = NULL,$_surname = NULL,$_workPhone = NULL,$_workMobile = NULL,$_homePhone = NULL,$_homeMobile = NULL,$_groupName = NULL)
	{
		parent::__construct(array('session'=>$_session,'smsAccount'=>$_smsAccount,'id'=>$_id,'name'=>$_name,'surname'=>$_surname,'workPhone'=>$_workPhone,'workMobile'=>$_workMobile,'homePhone'=>$_homePhone,'homeMobile'=>$_homeMobile,'groupName'=>$_groupName));
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
	 * Get smsAccount value
	 * @return string|null
	 */
	public function getSmsAccount()
	{
		return $this->smsAccount;
	}
	/**
	 * Set smsAccount value
	 * @param string $_smsAccount the smsAccount
	 * @return string
	 */
	public function setSmsAccount($_smsAccount)
	{
		return ($this->smsAccount = $_smsAccount);
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
	 * Get workPhone value
	 * @return string|null
	 */
	public function getWorkPhone()
	{
		return $this->workPhone;
	}
	/**
	 * Set workPhone value
	 * @param string $_workPhone the workPhone
	 * @return string
	 */
	public function setWorkPhone($_workPhone)
	{
		return ($this->workPhone = $_workPhone);
	}
	/**
	 * Get workMobile value
	 * @return string|null
	 */
	public function getWorkMobile()
	{
		return $this->workMobile;
	}
	/**
	 * Set workMobile value
	 * @param string $_workMobile the workMobile
	 * @return string
	 */
	public function setWorkMobile($_workMobile)
	{
		return ($this->workMobile = $_workMobile);
	}
	/**
	 * Get homePhone value
	 * @return string|null
	 */
	public function getHomePhone()
	{
		return $this->homePhone;
	}
	/**
	 * Set homePhone value
	 * @param string $_homePhone the homePhone
	 * @return string
	 */
	public function setHomePhone($_homePhone)
	{
		return ($this->homePhone = $_homePhone);
	}
	/**
	 * Get homeMobile value
	 * @return string|null
	 */
	public function getHomeMobile()
	{
		return $this->homeMobile;
	}
	/**
	 * Set homeMobile value
	 * @param string $_homeMobile the homeMobile
	 * @return string
	 */
	public function setHomeMobile($_homeMobile)
	{
		return ($this->homeMobile = $_homeMobile);
	}
	/**
	 * Get groupName value
	 * @return string|null
	 */
	public function getGroupName()
	{
		return $this->groupName;
	}
	/**
	 * Set groupName value
	 * @param string $_groupName the groupName
	 * @return string
	 */
	public function setGroupName($_groupName)
	{
		return ($this->groupName = $_groupName);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyPhonebookOnSmsContactAdd
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