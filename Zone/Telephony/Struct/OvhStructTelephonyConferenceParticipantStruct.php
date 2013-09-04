<?php
/**
 * File for class OvhStructTelephonyConferenceParticipantStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyConferenceParticipantStruct originally named telephonyConferenceParticipantStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyConferenceParticipantStruct extends OvhWsdlClass
{
	/**
	 * The callerid
	 * @var string
	 */
	public $callerid;
	/**
	 * The callername
	 * @var string
	 */
	public $callername;
	/**
	 * The talking
	 * @var boolean
	 */
	public $talking;
	/**
	 * The deaf
	 * @var boolean
	 */
	public $deaf;
	/**
	 * The muted
	 * @var boolean
	 */
	public $muted;
	/**
	 * The joinsince
	 * @var int
	 */
	public $joinsince;
	/**
	 * The memberid
	 * @var int
	 */
	public $memberid;
	/**
	 * Constructor method for telephonyConferenceParticipantStruct
	 * @see parent::__construct()
	 * @param string $_callerid
	 * @param string $_callername
	 * @param boolean $_talking
	 * @param boolean $_deaf
	 * @param boolean $_muted
	 * @param int $_joinsince
	 * @param int $_memberid
	 * @return OvhStructTelephonyConferenceParticipantStruct
	 */
	public function __construct($_callerid = NULL,$_callername = NULL,$_talking = NULL,$_deaf = NULL,$_muted = NULL,$_joinsince = NULL,$_memberid = NULL)
	{
		parent::__construct(array('callerid'=>$_callerid,'callername'=>$_callername,'talking'=>$_talking,'deaf'=>$_deaf,'muted'=>$_muted,'joinsince'=>$_joinsince,'memberid'=>$_memberid));
	}
	/**
	 * Get callerid value
	 * @return string|null
	 */
	public function getCallerid()
	{
		return $this->callerid;
	}
	/**
	 * Set callerid value
	 * @param string $_callerid the callerid
	 * @return string
	 */
	public function setCallerid($_callerid)
	{
		return ($this->callerid = $_callerid);
	}
	/**
	 * Get callername value
	 * @return string|null
	 */
	public function getCallername()
	{
		return $this->callername;
	}
	/**
	 * Set callername value
	 * @param string $_callername the callername
	 * @return string
	 */
	public function setCallername($_callername)
	{
		return ($this->callername = $_callername);
	}
	/**
	 * Get talking value
	 * @return boolean|null
	 */
	public function getTalking()
	{
		return $this->talking;
	}
	/**
	 * Set talking value
	 * @param boolean $_talking the talking
	 * @return boolean
	 */
	public function setTalking($_talking)
	{
		return ($this->talking = $_talking);
	}
	/**
	 * Get deaf value
	 * @return boolean|null
	 */
	public function getDeaf()
	{
		return $this->deaf;
	}
	/**
	 * Set deaf value
	 * @param boolean $_deaf the deaf
	 * @return boolean
	 */
	public function setDeaf($_deaf)
	{
		return ($this->deaf = $_deaf);
	}
	/**
	 * Get muted value
	 * @return boolean|null
	 */
	public function getMuted()
	{
		return $this->muted;
	}
	/**
	 * Set muted value
	 * @param boolean $_muted the muted
	 * @return boolean
	 */
	public function setMuted($_muted)
	{
		return ($this->muted = $_muted);
	}
	/**
	 * Get joinsince value
	 * @return int|null
	 */
	public function getJoinsince()
	{
		return $this->joinsince;
	}
	/**
	 * Set joinsince value
	 * @param int $_joinsince the joinsince
	 * @return int
	 */
	public function setJoinsince($_joinsince)
	{
		return ($this->joinsince = $_joinsince);
	}
	/**
	 * Get memberid value
	 * @return int|null
	 */
	public function getMemberid()
	{
		return $this->memberid;
	}
	/**
	 * Set memberid value
	 * @param int $_memberid the memberid
	 * @return int
	 */
	public function setMemberid($_memberid)
	{
		return ($this->memberid = $_memberid);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyConferenceParticipantStruct
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