<?php
/**
 * File for class OvhServiceResponder
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceResponder originally named Responder
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceResponder extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named responderEmailList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructResponderEmailList::getSession()
	 * @uses OvhStructResponderEmailList::getDomain()
	 * @param OvhStructResponderEmailList $_ovhStructResponderEmailList
	 * @return OvhStructResponderEmailListResponse
	 */
	public function responderEmailList(OvhStructResponderEmailList $_ovhStructResponderEmailList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->responderEmailList($_ovhStructResponderEmailList->getSession(),$_ovhStructResponderEmailList->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named responderEmailInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructResponderEmailInfo::getSession()
	 * @uses OvhStructResponderEmailInfo::getDomain()
	 * @uses OvhStructResponderEmailInfo::getResponder()
	 * @param OvhStructResponderEmailInfo $_ovhStructResponderEmailInfo
	 * @return OvhStructResponderEmailInfoResponse
	 */
	public function responderEmailInfo(OvhStructResponderEmailInfo $_ovhStructResponderEmailInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->responderEmailInfo($_ovhStructResponderEmailInfo->getSession(),$_ovhStructResponderEmailInfo->getDomain(),$_ovhStructResponderEmailInfo->getResponder()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named responderEmailDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructResponderEmailDel::getSession()
	 * @uses OvhStructResponderEmailDel::getDomain()
	 * @uses OvhStructResponderEmailDel::getResponder()
	 * @param OvhStructResponderEmailDel $_ovhStructResponderEmailDel
	 * @return OvhStructResponderEmailDelResponse
	 */
	public function responderEmailDel(OvhStructResponderEmailDel $_ovhStructResponderEmailDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->responderEmailDel($_ovhStructResponderEmailDel->getSession(),$_ovhStructResponderEmailDel->getDomain(),$_ovhStructResponderEmailDel->getResponder()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named responderEmailModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructResponderEmailModify::getSession()
	 * @uses OvhStructResponderEmailModify::getDomain()
	 * @uses OvhStructResponderEmailModify::getResponder()
	 * @uses OvhStructResponderEmailModify::getContent()
	 * @uses OvhStructResponderEmailModify::getDelivered_to()
	 * @uses OvhStructResponderEmailModify::getNic()
	 * @param OvhStructResponderEmailModify $_ovhStructResponderEmailModify
	 * @return OvhStructResponderEmailModifyResponse
	 */
	public function responderEmailModify(OvhStructResponderEmailModify $_ovhStructResponderEmailModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->responderEmailModify($_ovhStructResponderEmailModify->getSession(),$_ovhStructResponderEmailModify->getDomain(),$_ovhStructResponderEmailModify->getResponder(),$_ovhStructResponderEmailModify->getContent(),$_ovhStructResponderEmailModify->getDelivered_to(),$_ovhStructResponderEmailModify->getNic()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named responderEmailAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructResponderEmailAdd::getSession()
	 * @uses OvhStructResponderEmailAdd::getDomain()
	 * @uses OvhStructResponderEmailAdd::getResponder()
	 * @uses OvhStructResponderEmailAdd::getContent()
	 * @uses OvhStructResponderEmailAdd::getDelivered_to()
	 * @uses OvhStructResponderEmailAdd::getNic()
	 * @param OvhStructResponderEmailAdd $_ovhStructResponderEmailAdd
	 * @return OvhStructResponderEmailAddResponse
	 */
	public function responderEmailAdd(OvhStructResponderEmailAdd $_ovhStructResponderEmailAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->responderEmailAdd($_ovhStructResponderEmailAdd->getSession(),$_ovhStructResponderEmailAdd->getDomain(),$_ovhStructResponderEmailAdd->getResponder(),$_ovhStructResponderEmailAdd->getContent(),$_ovhStructResponderEmailAdd->getDelivered_to(),$_ovhStructResponderEmailAdd->getNic()));
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
	 * @return OvhStructResponderEmailAddResponse|OvhStructResponderEmailDelResponse|OvhStructResponderEmailInfoResponse|OvhStructResponderEmailListResponse|OvhStructResponderEmailModifyResponse
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