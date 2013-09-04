<?php
/**
 * File for class OvhServiceMailing
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceMailing originally named Mailing
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceMailing extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named mailingListModeratorDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructMailingListModeratorDel::getSession()
	 * @uses OvhStructMailingListModeratorDel::getDomain()
	 * @uses OvhStructMailingListModeratorDel::getMl()
	 * @uses OvhStructMailingListModeratorDel::getEmail()
	 * @param OvhStructMailingListModeratorDel $_ovhStructMailingListModeratorDel
	 * @return OvhStructMailingListModeratorDelResponse
	 */
	public function mailingListModeratorDel(OvhStructMailingListModeratorDel $_ovhStructMailingListModeratorDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->mailingListModeratorDel($_ovhStructMailingListModeratorDel->getSession(),$_ovhStructMailingListModeratorDel->getDomain(),$_ovhStructMailingListModeratorDel->getMl(),$_ovhStructMailingListModeratorDel->getEmail()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named mailingListModeratorList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructMailingListModeratorList::getSession()
	 * @uses OvhStructMailingListModeratorList::getDomain()
	 * @uses OvhStructMailingListModeratorList::getMl()
	 * @param OvhStructMailingListModeratorList $_ovhStructMailingListModeratorList
	 * @return OvhStructMailingListModeratorListResponse
	 */
	public function mailingListModeratorList(OvhStructMailingListModeratorList $_ovhStructMailingListModeratorList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->mailingListModeratorList($_ovhStructMailingListModeratorList->getSession(),$_ovhStructMailingListModeratorList->getDomain(),$_ovhStructMailingListModeratorList->getMl()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named mailingListFullInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructMailingListFullInfo::getSession()
	 * @uses OvhStructMailingListFullInfo::getDomain()
	 * @uses OvhStructMailingListFullInfo::getMl()
	 * @param OvhStructMailingListFullInfo $_ovhStructMailingListFullInfo
	 * @return OvhStructMailingListFullInfoResponse
	 */
	public function mailingListFullInfo(OvhStructMailingListFullInfo $_ovhStructMailingListFullInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->mailingListFullInfo($_ovhStructMailingListFullInfo->getSession(),$_ovhStructMailingListFullInfo->getDomain(),$_ovhStructMailingListFullInfo->getMl()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named mailingListDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructMailingListDel::getSession()
	 * @uses OvhStructMailingListDel::getDomain()
	 * @uses OvhStructMailingListDel::getMl()
	 * @param OvhStructMailingListDel $_ovhStructMailingListDel
	 * @return OvhStructMailingListDelResponse
	 */
	public function mailingListDel(OvhStructMailingListDel $_ovhStructMailingListDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->mailingListDel($_ovhStructMailingListDel->getSession(),$_ovhStructMailingListDel->getDomain(),$_ovhStructMailingListDel->getMl()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named mailingListSubscriberAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructMailingListSubscriberAdd::getSession()
	 * @uses OvhStructMailingListSubscriberAdd::getDomain()
	 * @uses OvhStructMailingListSubscriberAdd::getMl()
	 * @uses OvhStructMailingListSubscriberAdd::getEmail()
	 * @param OvhStructMailingListSubscriberAdd $_ovhStructMailingListSubscriberAdd
	 * @return OvhStructMailingListSubscriberAddResponse
	 */
	public function mailingListSubscriberAdd(OvhStructMailingListSubscriberAdd $_ovhStructMailingListSubscriberAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->mailingListSubscriberAdd($_ovhStructMailingListSubscriberAdd->getSession(),$_ovhStructMailingListSubscriberAdd->getDomain(),$_ovhStructMailingListSubscriberAdd->getMl(),$_ovhStructMailingListSubscriberAdd->getEmail()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named mailingListModeratorAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructMailingListModeratorAdd::getSession()
	 * @uses OvhStructMailingListModeratorAdd::getDomain()
	 * @uses OvhStructMailingListModeratorAdd::getMl()
	 * @uses OvhStructMailingListModeratorAdd::getEmail()
	 * @param OvhStructMailingListModeratorAdd $_ovhStructMailingListModeratorAdd
	 * @return OvhStructMailingListModeratorAddResponse
	 */
	public function mailingListModeratorAdd(OvhStructMailingListModeratorAdd $_ovhStructMailingListModeratorAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->mailingListModeratorAdd($_ovhStructMailingListModeratorAdd->getSession(),$_ovhStructMailingListModeratorAdd->getDomain(),$_ovhStructMailingListModeratorAdd->getMl(),$_ovhStructMailingListModeratorAdd->getEmail()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named mailingListSubscriberList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructMailingListSubscriberList::getSession()
	 * @uses OvhStructMailingListSubscriberList::getDomain()
	 * @uses OvhStructMailingListSubscriberList::getMl()
	 * @param OvhStructMailingListSubscriberList $_ovhStructMailingListSubscriberList
	 * @return OvhStructMailingListSubscriberListResponse
	 */
	public function mailingListSubscriberList(OvhStructMailingListSubscriberList $_ovhStructMailingListSubscriberList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->mailingListSubscriberList($_ovhStructMailingListSubscriberList->getSession(),$_ovhStructMailingListSubscriberList->getDomain(),$_ovhStructMailingListSubscriberList->getMl()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named mailingListSubscriberDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructMailingListSubscriberDel::getSession()
	 * @uses OvhStructMailingListSubscriberDel::getDomain()
	 * @uses OvhStructMailingListSubscriberDel::getMl()
	 * @uses OvhStructMailingListSubscriberDel::getEmail()
	 * @param OvhStructMailingListSubscriberDel $_ovhStructMailingListSubscriberDel
	 * @return OvhStructMailingListSubscriberDelResponse
	 */
	public function mailingListSubscriberDel(OvhStructMailingListSubscriberDel $_ovhStructMailingListSubscriberDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->mailingListSubscriberDel($_ovhStructMailingListSubscriberDel->getSession(),$_ovhStructMailingListSubscriberDel->getDomain(),$_ovhStructMailingListSubscriberDel->getMl(),$_ovhStructMailingListSubscriberDel->getEmail()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named mailingListInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructMailingListInfo::getSession()
	 * @uses OvhStructMailingListInfo::getDomain()
	 * @uses OvhStructMailingListInfo::getMl()
	 * @param OvhStructMailingListInfo $_ovhStructMailingListInfo
	 * @return OvhStructMailingListInfoResponse
	 */
	public function mailingListInfo(OvhStructMailingListInfo $_ovhStructMailingListInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->mailingListInfo($_ovhStructMailingListInfo->getSession(),$_ovhStructMailingListInfo->getDomain(),$_ovhStructMailingListInfo->getMl()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named mailingListModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructMailingListModify::getSession()
	 * @uses OvhStructMailingListModify::getDomain()
	 * @uses OvhStructMailingListModify::getMl()
	 * @uses OvhStructMailingListModify::getOwner()
	 * @uses OvhStructMailingListModify::getLang()
	 * @uses OvhStructMailingListModify::getReplyto()
	 * @uses OvhStructMailingListModify::getMessage_moderation()
	 * @uses OvhStructMailingListModify::getUsers_post_only()
	 * @uses OvhStructMailingListModify::getSubscription_moderation()
	 * @param OvhStructMailingListModify $_ovhStructMailingListModify
	 * @return OvhStructMailingListModifyResponse
	 */
	public function mailingListModify(OvhStructMailingListModify $_ovhStructMailingListModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->mailingListModify($_ovhStructMailingListModify->getSession(),$_ovhStructMailingListModify->getDomain(),$_ovhStructMailingListModify->getMl(),$_ovhStructMailingListModify->getOwner(),$_ovhStructMailingListModify->getLang(),$_ovhStructMailingListModify->getReplyto(),$_ovhStructMailingListModify->getMessage_moderation(),$_ovhStructMailingListModify->getUsers_post_only(),$_ovhStructMailingListModify->getSubscription_moderation()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named mailingListAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructMailingListAdd::getSession()
	 * @uses OvhStructMailingListAdd::getDomain()
	 * @uses OvhStructMailingListAdd::getMl()
	 * @uses OvhStructMailingListAdd::getOwner()
	 * @uses OvhStructMailingListAdd::getLang()
	 * @uses OvhStructMailingListAdd::getReplyto()
	 * @uses OvhStructMailingListAdd::getMessage_moderation()
	 * @uses OvhStructMailingListAdd::getUsers_post_only()
	 * @uses OvhStructMailingListAdd::getSubscription_moderation()
	 * @param OvhStructMailingListAdd $_ovhStructMailingListAdd
	 * @return OvhStructMailingListAddResponse
	 */
	public function mailingListAdd(OvhStructMailingListAdd $_ovhStructMailingListAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->mailingListAdd($_ovhStructMailingListAdd->getSession(),$_ovhStructMailingListAdd->getDomain(),$_ovhStructMailingListAdd->getMl(),$_ovhStructMailingListAdd->getOwner(),$_ovhStructMailingListAdd->getLang(),$_ovhStructMailingListAdd->getReplyto(),$_ovhStructMailingListAdd->getMessage_moderation(),$_ovhStructMailingListAdd->getUsers_post_only(),$_ovhStructMailingListAdd->getSubscription_moderation()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named mailingListList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructMailingListList::getSession()
	 * @uses OvhStructMailingListList::getDomain()
	 * @param OvhStructMailingListList $_ovhStructMailingListList
	 * @return OvhStructMailingListListResponse
	 */
	public function mailingListList(OvhStructMailingListList $_ovhStructMailingListList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->mailingListList($_ovhStructMailingListList->getSession(),$_ovhStructMailingListList->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named mailingListSubscriberListByEmail
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructMailingListSubscriberListByEmail::getSession()
	 * @uses OvhStructMailingListSubscriberListByEmail::getDomain()
	 * @uses OvhStructMailingListSubscriberListByEmail::getMl()
	 * @uses OvhStructMailingListSubscriberListByEmail::getEmail()
	 * @param OvhStructMailingListSubscriberListByEmail $_ovhStructMailingListSubscriberListByEmail
	 * @return OvhStructMailingListSubscriberListByEmailResponse
	 */
	public function mailingListSubscriberListByEmail(OvhStructMailingListSubscriberListByEmail $_ovhStructMailingListSubscriberListByEmail)
	{
		try
		{
			$this->setResult(self::getSoapClient()->mailingListSubscriberListByEmail($_ovhStructMailingListSubscriberListByEmail->getSession(),$_ovhStructMailingListSubscriberListByEmail->getDomain(),$_ovhStructMailingListSubscriberListByEmail->getMl(),$_ovhStructMailingListSubscriberListByEmail->getEmail()));
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
	 * @return OvhStructMailingListAddResponse|OvhStructMailingListDelResponse|OvhStructMailingListFullInfoResponse|OvhStructMailingListInfoResponse|OvhStructMailingListListResponse|OvhStructMailingListModeratorAddResponse|OvhStructMailingListModeratorDelResponse|OvhStructMailingListModeratorListResponse|OvhStructMailingListModifyResponse|OvhStructMailingListSubscriberAddResponse|OvhStructMailingListSubscriberDelResponse|OvhStructMailingListSubscriberListByEmailResponse|OvhStructMailingListSubscriberListResponse
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