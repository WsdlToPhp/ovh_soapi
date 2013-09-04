<?php
/**
 * File for class OvhStructPrepaidGetHistoryReturn
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructPrepaidGetHistoryReturn originally named prepaidGetHistoryReturn
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructPrepaidGetHistoryReturn extends OvhWsdlClass
{
	/**
	 * The page
	 * @var int
	 */
	public $page;
	/**
	 * The total
	 * @var int
	 */
	public $total;
	/**
	 * The start
	 * @var int
	 */
	public $start;
	/**
	 * The end
	 * @var int
	 */
	public $end;
	/**
	 * The operations
	 * @var OvhStructMyArrayOfPrepaidOperationStructType
	 */
	public $operations;
	/**
	 * Constructor method for prepaidGetHistoryReturn
	 * @see parent::__construct()
	 * @param int $_page
	 * @param int $_total
	 * @param int $_start
	 * @param int $_end
	 * @param OvhStructMyArrayOfPrepaidOperationStructType $_operations
	 * @return OvhStructPrepaidGetHistoryReturn
	 */
	public function __construct($_page = NULL,$_total = NULL,$_start = NULL,$_end = NULL,$_operations = NULL)
	{
		parent::__construct(array('page'=>$_page,'total'=>$_total,'start'=>$_start,'end'=>$_end,'operations'=>($_operations instanceof OvhStructMyArrayOfPrepaidOperationStructType)?$_operations:new OvhStructMyArrayOfPrepaidOperationStructType($_operations)));
	}
	/**
	 * Get page value
	 * @return int|null
	 */
	public function getPage()
	{
		return $this->page;
	}
	/**
	 * Set page value
	 * @param int $_page the page
	 * @return int
	 */
	public function setPage($_page)
	{
		return ($this->page = $_page);
	}
	/**
	 * Get total value
	 * @return int|null
	 */
	public function getTotal()
	{
		return $this->total;
	}
	/**
	 * Set total value
	 * @param int $_total the total
	 * @return int
	 */
	public function setTotal($_total)
	{
		return ($this->total = $_total);
	}
	/**
	 * Get start value
	 * @return int|null
	 */
	public function getStart()
	{
		return $this->start;
	}
	/**
	 * Set start value
	 * @param int $_start the start
	 * @return int
	 */
	public function setStart($_start)
	{
		return ($this->start = $_start);
	}
	/**
	 * Get end value
	 * @return int|null
	 */
	public function getEnd()
	{
		return $this->end;
	}
	/**
	 * Set end value
	 * @param int $_end the end
	 * @return int
	 */
	public function setEnd($_end)
	{
		return ($this->end = $_end);
	}
	/**
	 * Get operations value
	 * @return OvhStructMyArrayOfPrepaidOperationStructType|null
	 */
	public function getOperations()
	{
		return $this->operations;
	}
	/**
	 * Set operations value
	 * @param OvhStructMyArrayOfPrepaidOperationStructType $_operations the operations
	 * @return OvhStructMyArrayOfPrepaidOperationStructType
	 */
	public function setOperations($_operations)
	{
		return ($this->operations = $_operations);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructPrepaidGetHistoryReturn
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