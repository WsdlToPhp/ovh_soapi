<?php
/**
 * File for class OvhStructSupportGetThreads
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhStructSupportGetThreads originally named supportGetThreads
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.ovh.com/soapi/soapi-dlw-1.61.wsdl}
 * @package Ovh
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhStructSupportGetThreads extends OvhWsdlClass
{
	/**
	 * The session
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $session;
	/**
	 * The page
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $page;
	/**
	 * The view
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $view;
	/**
	 * The unread
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var boolean
	 */
	public $unread;
	/**
	 * The sortDir
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $sortDir;
	/**
	 * The sortBy
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var string
	 */
	public $sortBy;
	/**
	 * The limit
	 * Meta informations extracted from the WSDL
	 * - nillable : true
	 * @var int
	 */
	public $limit;
	/**
	 * Constructor method for supportGetThreads
	 * @see parent::__construct()
	 * @param string $_session
	 * @param int $_page
	 * @param string $_view
	 * @param boolean $_unread
	 * @param string $_sortDir
	 * @param string $_sortBy
	 * @param int $_limit
	 * @return OvhStructSupportGetThreads
	 */
	public function __construct($_session = NULL,$_page = NULL,$_view = NULL,$_unread = NULL,$_sortDir = NULL,$_sortBy = NULL,$_limit = NULL)
	{
		parent::__construct(array('session'=>$_session,'page'=>$_page,'view'=>$_view,'unread'=>$_unread,'sortDir'=>$_sortDir,'sortBy'=>$_sortBy,'limit'=>$_limit));
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
	 * Get view value
	 * @return string|null
	 */
	public function getView()
	{
		return $this->view;
	}
	/**
	 * Set view value
	 * @param string $_view the view
	 * @return string
	 */
	public function setView($_view)
	{
		return ($this->view = $_view);
	}
	/**
	 * Get unread value
	 * @return boolean|null
	 */
	public function getUnread()
	{
		return $this->unread;
	}
	/**
	 * Set unread value
	 * @param boolean $_unread the unread
	 * @return boolean
	 */
	public function setUnread($_unread)
	{
		return ($this->unread = $_unread);
	}
	/**
	 * Get sortDir value
	 * @return string|null
	 */
	public function getSortDir()
	{
		return $this->sortDir;
	}
	/**
	 * Set sortDir value
	 * @param string $_sortDir the sortDir
	 * @return string
	 */
	public function setSortDir($_sortDir)
	{
		return ($this->sortDir = $_sortDir);
	}
	/**
	 * Get sortBy value
	 * @return string|null
	 */
	public function getSortBy()
	{
		return $this->sortBy;
	}
	/**
	 * Set sortBy value
	 * @param string $_sortBy the sortBy
	 * @return string
	 */
	public function setSortBy($_sortBy)
	{
		return ($this->sortBy = $_sortBy);
	}
	/**
	 * Get limit value
	 * @return int|null
	 */
	public function getLimit()
	{
		return $this->limit;
	}
	/**
	 * Set limit value
	 * @param int $_limit the limit
	 * @return int
	 */
	public function setLimit($_limit)
	{
		return ($this->limit = $_limit);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see OvhWsdlClass::__set_state()
	 * @uses OvhWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return OvhStructSupportGetThreads
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