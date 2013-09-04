<?php
/**
 * File for class OvhStructTelephonyPhonebookOnGroupContactList
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyPhonebookOnGroupContactList originally named telephonyPhonebookOnGroupContactList
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyPhonebookOnGroupContactList extends OvhWsdlClass
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
	 * The id
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $id;
	/**
	 * The groupName
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $groupName;
	/**
	 * Constructor method for telephonyPhonebookOnGroupContactList
	 * @see parent::__construct()
	 * @param string $_session
	 * @param string $_group
	 * @param int $_id
	 * @param string $_groupName
	 * @return OvhStructTelephonyPhonebookOnGroupContactList
	 */
	public function __construct($_session = NULL,$_group = NULL,$_id = NULL,$_groupName = NULL)
	{
		parent::__construct(array('session'=>$_session,'group'=>$_group,'id'=>$_id,'groupName'=>$_groupName));
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
	 * @return OvhStructTelephonyPhonebookOnGroupContactList
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