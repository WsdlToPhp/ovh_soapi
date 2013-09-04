<?php
/**
 * File for class OvhStructTelephonyPhonebookContactStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyPhonebookContactStruct originally named telephonyPhonebookContactStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyPhonebookContactStruct extends OvhWsdlClass
{
	/**
	 * The id
	 * @var int
	 */
	public $id;
	/**
	 * The name
	 * @var string
	 */
	public $name;
	/**
	 * The surname
	 * @var string
	 */
	public $surname;
	/**
	 * The workPhone
	 * @var string
	 */
	public $workPhone;
	/**
	 * The workMobile
	 * @var string
	 */
	public $workMobile;
	/**
	 * The homePhone
	 * @var string
	 */
	public $homePhone;
	/**
	 * The homeMobile
	 * @var string
	 */
	public $homeMobile;
	/**
	 * The group
	 * @var string
	 */
	public $group;
	/**
	 * Constructor method for telephonyPhonebookContactStruct
	 * @see parent::__construct()
	 * @param int $_id
	 * @param string $_name
	 * @param string $_surname
	 * @param string $_workPhone
	 * @param string $_workMobile
	 * @param string $_homePhone
	 * @param string $_homeMobile
	 * @param string $_group
	 * @return OvhStructTelephonyPhonebookContactStruct
	 */
	public function __construct($_id = NULL,$_name = NULL,$_surname = NULL,$_workPhone = NULL,$_workMobile = NULL,$_homePhone = NULL,$_homeMobile = NULL,$_group = NULL)
	{
		parent::__construct(array('id'=>$_id,'name'=>$_name,'surname'=>$_surname,'workPhone'=>$_workPhone,'workMobile'=>$_workMobile,'homePhone'=>$_homePhone,'homeMobile'=>$_homeMobile,'group'=>$_group));
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
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyPhonebookContactStruct
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