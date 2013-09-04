<?php
/**
 * File for class OvhStructSqlpriveGetPossibleDumpStruct
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructSqlpriveGetPossibleDumpStruct originally named sqlpriveGetPossibleDumpStruct
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructSqlpriveGetPossibleDumpStruct extends OvhWsdlClass
{
	/**
	 * The date
	 * @var string
	 */
	public $date;
	/**
	 * The file
	 * @var OvhStructMyArrayOfStringType
	 */
	public $file;
	/**
	 * The comment
	 * @var string
	 */
	public $comment;
	/**
	 * Constructor method for sqlpriveGetPossibleDumpStruct
	 * @see parent::__construct()
	 * @param string $_date
	 * @param OvhStructMyArrayOfStringType $_file
	 * @param string $_comment
	 * @return OvhStructSqlpriveGetPossibleDumpStruct
	 */
	public function __construct($_date = NULL,$_file = NULL,$_comment = NULL)
	{
		parent::__construct(array('date'=>$_date,'file'=>($_file instanceof OvhStructMyArrayOfStringType)?$_file:new OvhStructMyArrayOfStringType($_file),'comment'=>$_comment));
	}
	/**
	 * Get date value
	 * @return string|null
	 */
	public function getDate()
	{
		return $this->date;
	}
	/**
	 * Set date value
	 * @param string $_date the date
	 * @return string
	 */
	public function setDate($_date)
	{
		return ($this->date = $_date);
	}
	/**
	 * Get file value
	 * @return OvhStructMyArrayOfStringType|null
	 */
	public function getFile()
	{
		return $this->file;
	}
	/**
	 * Set file value
	 * @param OvhStructMyArrayOfStringType $_file the file
	 * @return OvhStructMyArrayOfStringType
	 */
	public function setFile($_file)
	{
		return ($this->file = $_file);
	}
	/**
	 * Get comment value
	 * @return string|null
	 */
	public function getComment()
	{
		return $this->comment;
	}
	/**
	 * Set comment value
	 * @param string $_comment the comment
	 * @return string
	 */
	public function setComment($_comment)
	{
		return ($this->comment = $_comment);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructSqlpriveGetPossibleDumpStruct
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