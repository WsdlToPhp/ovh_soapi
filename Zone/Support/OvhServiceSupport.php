<?php
/**
 * File for class OvhServiceSupport
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceSupport originally named Support
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceSupport extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named supportGetNicDomains
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSupportGetNicDomains::getSession()
	 * @param OvhStructSupportGetNicDomains $_ovhStructSupportGetNicDomains
	 * @return OvhStructSupportGetNicDomainsResponse
	 */
	public function supportGetNicDomains(OvhStructSupportGetNicDomains $_ovhStructSupportGetNicDomains)
	{
		try
		{
			$this->setResult(self::getSoapClient()->supportGetNicDomains($_ovhStructSupportGetNicDomains->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named supportGetThreads
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSupportGetThreads::getSession()
	 * @uses OvhStructSupportGetThreads::getPage()
	 * @uses OvhStructSupportGetThreads::getView()
	 * @uses OvhStructSupportGetThreads::getUnread()
	 * @uses OvhStructSupportGetThreads::getSortDir()
	 * @uses OvhStructSupportGetThreads::getSortBy()
	 * @uses OvhStructSupportGetThreads::getLimit()
	 * @param OvhStructSupportGetThreads $_ovhStructSupportGetThreads
	 * @return OvhStructSupportGetThreadsResponse
	 */
	public function supportGetThreads(OvhStructSupportGetThreads $_ovhStructSupportGetThreads)
	{
		try
		{
			$this->setResult(self::getSoapClient()->supportGetThreads($_ovhStructSupportGetThreads->getSession(),$_ovhStructSupportGetThreads->getPage(),$_ovhStructSupportGetThreads->getView(),$_ovhStructSupportGetThreads->getUnread(),$_ovhStructSupportGetThreads->getSortDir(),$_ovhStructSupportGetThreads->getSortBy(),$_ovhStructSupportGetThreads->getLimit()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named supportSendMessage
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSupportSendMessage::getSession()
	 * @uses OvhStructSupportSendMessage::getMessagePrevious()
	 * @uses OvhStructSupportSendMessage::getCategory()
	 * @uses OvhStructSupportSendMessage::getDomain()
	 * @uses OvhStructSupportSendMessage::getSubject()
	 * @uses OvhStructSupportSendMessage::getBody()
	 * @param OvhStructSupportSendMessage $_ovhStructSupportSendMessage
	 * @return OvhStructSupportSendMessageResponse
	 */
	public function supportSendMessage(OvhStructSupportSendMessage $_ovhStructSupportSendMessage)
	{
		try
		{
			$this->setResult(self::getSoapClient()->supportSendMessage($_ovhStructSupportSendMessage->getSession(),$_ovhStructSupportSendMessage->getMessagePrevious(),$_ovhStructSupportSendMessage->getCategory(),$_ovhStructSupportSendMessage->getDomain(),$_ovhStructSupportSendMessage->getSubject(),$_ovhStructSupportSendMessage->getBody()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named supportGetAllVisibleCategories
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSupportGetAllVisibleCategories::getSession()
	 * @param OvhStructSupportGetAllVisibleCategories $_ovhStructSupportGetAllVisibleCategories
	 * @return OvhStructSupportGetAllVisibleCategoriesResponse
	 */
	public function supportGetAllVisibleCategories(OvhStructSupportGetAllVisibleCategories $_ovhStructSupportGetAllVisibleCategories)
	{
		try
		{
			$this->setResult(self::getSoapClient()->supportGetAllVisibleCategories($_ovhStructSupportGetAllVisibleCategories->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named supportGetThreadTree
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSupportGetThreadTree::getSession()
	 * @uses OvhStructSupportGetThreadTree::getThreadId()
	 * @param OvhStructSupportGetThreadTree $_ovhStructSupportGetThreadTree
	 * @return OvhStructSupportGetThreadTreeResponse
	 */
	public function supportGetThreadTree(OvhStructSupportGetThreadTree $_ovhStructSupportGetThreadTree)
	{
		try
		{
			$this->setResult(self::getSoapClient()->supportGetThreadTree($_ovhStructSupportGetThreadTree->getSession(),$_ovhStructSupportGetThreadTree->getThreadId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named supportReportAnswerProblem
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSupportReportAnswerProblem::getSession()
	 * @uses OvhStructSupportReportAnswerProblem::getMessageId()
	 * @uses OvhStructSupportReportAnswerProblem::getReportReason()
	 * @param OvhStructSupportReportAnswerProblem $_ovhStructSupportReportAnswerProblem
	 * @return OvhStructSupportReportAnswerProblemResponse
	 */
	public function supportReportAnswerProblem(OvhStructSupportReportAnswerProblem $_ovhStructSupportReportAnswerProblem)
	{
		try
		{
			$this->setResult(self::getSoapClient()->supportReportAnswerProblem($_ovhStructSupportReportAnswerProblem->getSession(),$_ovhStructSupportReportAnswerProblem->getMessageId(),$_ovhStructSupportReportAnswerProblem->getReportReason()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named supportGetFullMessage
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSupportGetFullMessage::getSession()
	 * @uses OvhStructSupportGetFullMessage::getMessageId()
	 * @param OvhStructSupportGetFullMessage $_ovhStructSupportGetFullMessage
	 * @return OvhStructSupportGetFullMessageResponse
	 */
	public function supportGetFullMessage(OvhStructSupportGetFullMessage $_ovhStructSupportGetFullMessage)
	{
		try
		{
			$this->setResult(self::getSoapClient()->supportGetFullMessage($_ovhStructSupportGetFullMessage->getSession(),$_ovhStructSupportGetFullMessage->getMessageId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named supportCloseThreads
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSupportCloseThreads::getSession()
	 * @uses OvhStructSupportCloseThreads::getThreads()
	 * @param OvhStructSupportCloseThreads $_ovhStructSupportCloseThreads
	 * @return OvhStructSupportCloseThreadsResponse
	 */
	public function supportCloseThreads(OvhStructSupportCloseThreads $_ovhStructSupportCloseThreads)
	{
		try
		{
			$this->setResult(self::getSoapClient()->supportCloseThreads($_ovhStructSupportCloseThreads->getSession(),$_ovhStructSupportCloseThreads->getThreads()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named supportReactivateThread
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSupportReactivateThread::getSession()
	 * @uses OvhStructSupportReactivateThread::getThreadId()
	 * @param OvhStructSupportReactivateThread $_ovhStructSupportReactivateThread
	 * @return OvhStructSupportReactivateThreadResponse
	 */
	public function supportReactivateThread(OvhStructSupportReactivateThread $_ovhStructSupportReactivateThread)
	{
		try
		{
			$this->setResult(self::getSoapClient()->supportReactivateThread($_ovhStructSupportReactivateThread->getSession(),$_ovhStructSupportReactivateThread->getThreadId()));
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
	 * @return OvhStructSupportCloseThreadsResponse|OvhStructSupportGetAllVisibleCategoriesResponse|OvhStructSupportGetFullMessageResponse|OvhStructSupportGetNicDomainsResponse|OvhStructSupportGetThreadsResponse|OvhStructSupportGetThreadTreeResponse|OvhStructSupportReactivateThreadResponse|OvhStructSupportReportAnswerProblemResponse|OvhStructSupportSendMessageResponse
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