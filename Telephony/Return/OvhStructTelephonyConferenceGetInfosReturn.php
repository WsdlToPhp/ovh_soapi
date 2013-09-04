<?php
/**
 * File for class OvhStructTelephonyConferenceGetInfosReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructTelephonyConferenceGetInfosReturn originally named telephonyConferenceGetInfosReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructTelephonyConferenceGetInfosReturn extends OvhWsdlClass
{
	/**
	 * The parties
	 * @var int
	 */
	public $parties;
	/**
	 * The locked
	 * @var boolean
	 */
	public $locked;
	/**
	 * The participants
	 * @var OvhStructMyArrayOfTelephonyConferenceParticipantStructType
	 */
	public $participants;
	/**
	 * Constructor method for telephonyConferenceGetInfosReturn
	 * @see parent::__construct()
	 * @param int $_parties
	 * @param boolean $_locked
	 * @param OvhStructMyArrayOfTelephonyConferenceParticipantStructType $_participants
	 * @return OvhStructTelephonyConferenceGetInfosReturn
	 */
	public function __construct($_parties = NULL,$_locked = NULL,$_participants = NULL)
	{
		parent::__construct(array('parties'=>$_parties,'locked'=>$_locked,'participants'=>($_participants instanceof OvhStructMyArrayOfTelephonyConferenceParticipantStructType)?$_participants:new OvhStructMyArrayOfTelephonyConferenceParticipantStructType($_participants)));
	}
	/**
	 * Get parties value
	 * @return int|null
	 */
	public function getParties()
	{
		return $this->parties;
	}
	/**
	 * Set parties value
	 * @param int $_parties the parties
	 * @return int
	 */
	public function setParties($_parties)
	{
		return ($this->parties = $_parties);
	}
	/**
	 * Get locked value
	 * @return boolean|null
	 */
	public function getLocked()
	{
		return $this->locked;
	}
	/**
	 * Set locked value
	 * @param boolean $_locked the locked
	 * @return boolean
	 */
	public function setLocked($_locked)
	{
		return ($this->locked = $_locked);
	}
	/**
	 * Get participants value
	 * @return OvhStructMyArrayOfTelephonyConferenceParticipantStructType|null
	 */
	public function getParticipants()
	{
		return $this->participants;
	}
	/**
	 * Set participants value
	 * @param OvhStructMyArrayOfTelephonyConferenceParticipantStructType $_participants the participants
	 * @return OvhStructMyArrayOfTelephonyConferenceParticipantStructType
	 */
	public function setParticipants($_participants)
	{
		return ($this->participants = $_participants);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructTelephonyConferenceGetInfosReturn
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