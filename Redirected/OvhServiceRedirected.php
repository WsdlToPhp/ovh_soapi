<?php
/**
 * File for class OvhServiceRedirected
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceRedirected originally named Redirected
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceRedirected extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named redirectedEmailAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructRedirectedEmailAdd::getSession()
	 * @uses OvhStructRedirectedEmailAdd::getDomain()
	 * @uses OvhStructRedirectedEmailAdd::getRedirected()
	 * @uses OvhStructRedirectedEmailAdd::getTarget()
	 * @uses OvhStructRedirectedEmailAdd::getSubdomain()
	 * @uses OvhStructRedirectedEmailAdd::getLocalCopy()
	 * @param OvhStructRedirectedEmailAdd $_ovhStructRedirectedEmailAdd
	 * @return OvhStructRedirectedEmailAddResponse
	 */
	public function redirectedEmailAdd(OvhStructRedirectedEmailAdd $_ovhStructRedirectedEmailAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->redirectedEmailAdd($_ovhStructRedirectedEmailAdd->getSession(),$_ovhStructRedirectedEmailAdd->getDomain(),$_ovhStructRedirectedEmailAdd->getRedirected(),$_ovhStructRedirectedEmailAdd->getTarget(),$_ovhStructRedirectedEmailAdd->getSubdomain(),$_ovhStructRedirectedEmailAdd->getLocalCopy()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named redirectedEmailModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructRedirectedEmailModify::getSession()
	 * @uses OvhStructRedirectedEmailModify::getDomain()
	 * @uses OvhStructRedirectedEmailModify::getRedirected()
	 * @uses OvhStructRedirectedEmailModify::getOld_target()
	 * @uses OvhStructRedirectedEmailModify::getTarget()
	 * @uses OvhStructRedirectedEmailModify::getSubdomain()
	 * @param OvhStructRedirectedEmailModify $_ovhStructRedirectedEmailModify
	 * @return OvhStructRedirectedEmailModifyResponse
	 */
	public function redirectedEmailModify(OvhStructRedirectedEmailModify $_ovhStructRedirectedEmailModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->redirectedEmailModify($_ovhStructRedirectedEmailModify->getSession(),$_ovhStructRedirectedEmailModify->getDomain(),$_ovhStructRedirectedEmailModify->getRedirected(),$_ovhStructRedirectedEmailModify->getOld_target(),$_ovhStructRedirectedEmailModify->getTarget(),$_ovhStructRedirectedEmailModify->getSubdomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named redirectedEmailDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructRedirectedEmailDel::getSession()
	 * @uses OvhStructRedirectedEmailDel::getDomain()
	 * @uses OvhStructRedirectedEmailDel::getRedirected()
	 * @uses OvhStructRedirectedEmailDel::getTarget()
	 * @uses OvhStructRedirectedEmailDel::getSubdomain()
	 * @param OvhStructRedirectedEmailDel $_ovhStructRedirectedEmailDel
	 * @return OvhStructRedirectedEmailDelResponse
	 */
	public function redirectedEmailDel(OvhStructRedirectedEmailDel $_ovhStructRedirectedEmailDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->redirectedEmailDel($_ovhStructRedirectedEmailDel->getSession(),$_ovhStructRedirectedEmailDel->getDomain(),$_ovhStructRedirectedEmailDel->getRedirected(),$_ovhStructRedirectedEmailDel->getTarget(),$_ovhStructRedirectedEmailDel->getSubdomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named redirectedEmailList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructRedirectedEmailList::getSession()
	 * @uses OvhStructRedirectedEmailList::getDomain()
	 * @param OvhStructRedirectedEmailList $_ovhStructRedirectedEmailList
	 * @return OvhStructRedirectedEmailListResponse
	 */
	public function redirectedEmailList(OvhStructRedirectedEmailList $_ovhStructRedirectedEmailList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->redirectedEmailList($_ovhStructRedirectedEmailList->getSession(),$_ovhStructRedirectedEmailList->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Returns the result
	 * @see OvhWsdlClass::getResult()
	 * @return OvhStructRedirectedEmailAddResponse|OvhStructRedirectedEmailDelResponse|OvhStructRedirectedEmailListResponse|OvhStructRedirectedEmailModifyResponse
	 */
	public function getResult()
	{
		return parent::getResult();
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