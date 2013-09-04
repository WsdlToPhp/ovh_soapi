<?php
/**
 * File for class OvhServiceTelephony
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceTelephony originally named Telephony
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceTelephony extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named telephonyNumberInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyNumberInfo::getSession()
	 * @uses OvhStructTelephonyNumberInfo::getNumber()
	 * @uses OvhStructTelephonyNumberInfo::getCountry()
	 * @param OvhStructTelephonyNumberInfo $_ovhStructTelephonyNumberInfo
	 * @return OvhStructTelephonyNumberInfoResponse
	 */
	public function telephonyNumberInfo(OvhStructTelephonyNumberInfo $_ovhStructTelephonyNumberInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyNumberInfo($_ovhStructTelephonyNumberInfo->getSession(),$_ovhStructTelephonyNumberInfo->getNumber(),$_ovhStructTelephonyNumberInfo->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyVoicemailOptionsList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyVoicemailOptionsList::getSession()
	 * @uses OvhStructTelephonyVoicemailOptionsList::getNumber()
	 * @uses OvhStructTelephonyVoicemailOptionsList::getCountry()
	 * @param OvhStructTelephonyVoicemailOptionsList $_ovhStructTelephonyVoicemailOptionsList
	 * @return OvhStructTelephonyVoicemailOptionsListResponse
	 */
	public function telephonyVoicemailOptionsList(OvhStructTelephonyVoicemailOptionsList $_ovhStructTelephonyVoicemailOptionsList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyVoicemailOptionsList($_ovhStructTelephonyVoicemailOptionsList->getSession(),$_ovhStructTelephonyVoicemailOptionsList->getNumber(),$_ovhStructTelephonyVoicemailOptionsList->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPhonebookSharePeerList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPhonebookSharePeerList::getSession()
	 * @uses OvhStructTelephonyPhonebookSharePeerList::getNumber()
	 * @uses OvhStructTelephonyPhonebookSharePeerList::getCountry()
	 * @uses OvhStructTelephonyPhonebookSharePeerList::getId()
	 * @param OvhStructTelephonyPhonebookSharePeerList $_ovhStructTelephonyPhonebookSharePeerList
	 * @return OvhStructTelephonyPhonebookSharePeerListResponse
	 */
	public function telephonyPhonebookSharePeerList(OvhStructTelephonyPhonebookSharePeerList $_ovhStructTelephonyPhonebookSharePeerList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPhonebookSharePeerList($_ovhStructTelephonyPhonebookSharePeerList->getSession(),$_ovhStructTelephonyPhonebookSharePeerList->getNumber(),$_ovhStructTelephonyPhonebookSharePeerList->getCountry(),$_ovhStructTelephonyPhonebookSharePeerList->getId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyRedirectModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyRedirectModify::getSession()
	 * @uses OvhStructTelephonyRedirectModify::getNumber()
	 * @uses OvhStructTelephonyRedirectModify::getCountry()
	 * @uses OvhStructTelephonyRedirectModify::getDestination()
	 * @param OvhStructTelephonyRedirectModify $_ovhStructTelephonyRedirectModify
	 * @return OvhStructTelephonyRedirectModifyResponse
	 */
	public function telephonyRedirectModify(OvhStructTelephonyRedirectModify $_ovhStructTelephonyRedirectModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyRedirectModify($_ovhStructTelephonyRedirectModify->getSession(),$_ovhStructTelephonyRedirectModify->getNumber(),$_ovhStructTelephonyRedirectModify->getCountry(),$_ovhStructTelephonyRedirectModify->getDestination()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyNumberModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyNumberModify::getSession()
	 * @uses OvhStructTelephonyNumberModify::getNumber()
	 * @uses OvhStructTelephonyNumberModify::getCountry()
	 * @uses OvhStructTelephonyNumberModify::getBillingAccount()
	 * @uses OvhStructTelephonyNumberModify::getNewType()
	 * @param OvhStructTelephonyNumberModify $_ovhStructTelephonyNumberModify
	 * @return OvhStructTelephonyNumberModifyResponse
	 */
	public function telephonyNumberModify(OvhStructTelephonyNumberModify $_ovhStructTelephonyNumberModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyNumberModify($_ovhStructTelephonyNumberModify->getSession(),$_ovhStructTelephonyNumberModify->getNumber(),$_ovhStructTelephonyNumberModify->getCountry(),$_ovhStructTelephonyNumberModify->getBillingAccount(),$_ovhStructTelephonyNumberModify->getNewType()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyGetCitiesFromZip
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyGetCitiesFromZip::getSession()
	 * @uses OvhStructTelephonyGetCitiesFromZip::getCountry()
	 * @uses OvhStructTelephonyGetCitiesFromZip::getZip()
	 * @param OvhStructTelephonyGetCitiesFromZip $_ovhStructTelephonyGetCitiesFromZip
	 * @return OvhStructTelephonyGetCitiesFromZipResponse
	 */
	public function telephonyGetCitiesFromZip(OvhStructTelephonyGetCitiesFromZip $_ovhStructTelephonyGetCitiesFromZip)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyGetCitiesFromZip($_ovhStructTelephonyGetCitiesFromZip->getSession(),$_ovhStructTelephonyGetCitiesFromZip->getCountry(),$_ovhStructTelephonyGetCitiesFromZip->getZip()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsplusSendSmsMt
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsplusSendSmsMt::getSession()
	 * @uses OvhStructTelephonySmsplusSendSmsMt::getShortCode()
	 * @uses OvhStructTelephonySmsplusSendSmsMt::getKeyword()
	 * @uses OvhStructTelephonySmsplusSendSmsMt::getMessage()
	 * @uses OvhStructTelephonySmsplusSendSmsMt::getIdsList()
	 * @param OvhStructTelephonySmsplusSendSmsMt $_ovhStructTelephonySmsplusSendSmsMt
	 * @return OvhStructTelephonySmsplusSendSmsMtResponse
	 */
	public function telephonySmsplusSendSmsMt(OvhStructTelephonySmsplusSendSmsMt $_ovhStructTelephonySmsplusSendSmsMt)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsplusSendSmsMt($_ovhStructTelephonySmsplusSendSmsMt->getSession(),$_ovhStructTelephonySmsplusSendSmsMt->getShortCode(),$_ovhStructTelephonySmsplusSendSmsMt->getKeyword(),$_ovhStructTelephonySmsplusSendSmsMt->getMessage(),$_ovhStructTelephonySmsplusSendSmsMt->getIdsList()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsUserGetCsvAttachment
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsUserGetCsvAttachment::getSmsAccount()
	 * @uses OvhStructTelephonySmsUserGetCsvAttachment::getLogin()
	 * @uses OvhStructTelephonySmsUserGetCsvAttachment::getPassword()
	 * @uses OvhStructTelephonySmsUserGetCsvAttachment::getId()
	 * @param OvhStructTelephonySmsUserGetCsvAttachment $_ovhStructTelephonySmsUserGetCsvAttachment
	 * @return OvhStructTelephonySmsUserGetCsvAttachmentResponse
	 */
	public function telephonySmsUserGetCsvAttachment(OvhStructTelephonySmsUserGetCsvAttachment $_ovhStructTelephonySmsUserGetCsvAttachment)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsUserGetCsvAttachment($_ovhStructTelephonySmsUserGetCsvAttachment->getSmsAccount(),$_ovhStructTelephonySmsUserGetCsvAttachment->getLogin(),$_ovhStructTelephonySmsUserGetCsvAttachment->getPassword(),$_ovhStructTelephonySmsUserGetCsvAttachment->getId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPhonebookOnSmsList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPhonebookOnSmsList::getSession()
	 * @uses OvhStructTelephonyPhonebookOnSmsList::getSmsAccount()
	 * @param OvhStructTelephonyPhonebookOnSmsList $_ovhStructTelephonyPhonebookOnSmsList
	 * @return OvhStructTelephonyPhonebookOnSmsListResponse
	 */
	public function telephonyPhonebookOnSmsList(OvhStructTelephonyPhonebookOnSmsList $_ovhStructTelephonyPhonebookOnSmsList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPhonebookOnSmsList($_ovhStructTelephonyPhonebookOnSmsList->getSession(),$_ovhStructTelephonyPhonebookOnSmsList->getSmsAccount()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySetClosureEvents
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySetClosureEvents::getSession()
	 * @uses OvhStructTelephonySetClosureEvents::getNumber()
	 * @uses OvhStructTelephonySetClosureEvents::getCountry()
	 * @uses OvhStructTelephonySetClosureEvents::getEvents()
	 * @param OvhStructTelephonySetClosureEvents $_ovhStructTelephonySetClosureEvents
	 * @return OvhStructTelephonySetClosureEventsResponse
	 */
	public function telephonySetClosureEvents(OvhStructTelephonySetClosureEvents $_ovhStructTelephonySetClosureEvents)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySetClosureEvents($_ovhStructTelephonySetClosureEvents->getSession(),$_ovhStructTelephonySetClosureEvents->getNumber(),$_ovhStructTelephonySetClosureEvents->getCountry(),$_ovhStructTelephonySetClosureEvents->getEvents()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyNicSetSipDomain
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyNicSetSipDomain::getSession()
	 * @uses OvhStructTelephonyNicSetSipDomain::getFr()
	 * @uses OvhStructTelephonyNicSetSipDomain::getDe()
	 * @uses OvhStructTelephonyNicSetSipDomain::getEs()
	 * @uses OvhStructTelephonyNicSetSipDomain::getUk()
	 * @uses OvhStructTelephonyNicSetSipDomain::getBe()
	 * @param OvhStructTelephonyNicSetSipDomain $_ovhStructTelephonyNicSetSipDomain
	 * @return OvhStructTelephonyNicSetSipDomainResponse
	 */
	public function telephonyNicSetSipDomain(OvhStructTelephonyNicSetSipDomain $_ovhStructTelephonyNicSetSipDomain)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyNicSetSipDomain($_ovhStructTelephonyNicSetSipDomain->getSession(),$_ovhStructTelephonyNicSetSipDomain->getFr(),$_ovhStructTelephonyNicSetSipDomain->getDe(),$_ovhStructTelephonyNicSetSipDomain->getEs(),$_ovhStructTelephonyNicSetSipDomain->getUk(),$_ovhStructTelephonyNicSetSipDomain->getBe()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsMultiSend
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsMultiSend::getSession()
	 * @uses OvhStructTelephonySmsMultiSend::getSmsAccount()
	 * @uses OvhStructTelephonySmsMultiSend::getNumberFrom()
	 * @uses OvhStructTelephonySmsMultiSend::getNumberTo()
	 * @uses OvhStructTelephonySmsMultiSend::getMessage()
	 * @uses OvhStructTelephonySmsMultiSend::getSmsValidity()
	 * @uses OvhStructTelephonySmsMultiSend::getSmsClass()
	 * @uses OvhStructTelephonySmsMultiSend::getSmsDeferred()
	 * @uses OvhStructTelephonySmsMultiSend::getSmsPriority()
	 * @uses OvhStructTelephonySmsMultiSend::getSmsCoding()
	 * @uses OvhStructTelephonySmsMultiSend::getTag()
	 * @uses OvhStructTelephonySmsMultiSend::getNumberToCsv()
	 * @uses OvhStructTelephonySmsMultiSend::getNoStop()
	 * @param OvhStructTelephonySmsMultiSend $_ovhStructTelephonySmsMultiSend
	 * @return OvhStructTelephonySmsMultiSendResponse
	 */
	public function telephonySmsMultiSend(OvhStructTelephonySmsMultiSend $_ovhStructTelephonySmsMultiSend)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsMultiSend($_ovhStructTelephonySmsMultiSend->getSession(),$_ovhStructTelephonySmsMultiSend->getSmsAccount(),$_ovhStructTelephonySmsMultiSend->getNumberFrom(),$_ovhStructTelephonySmsMultiSend->getNumberTo(),$_ovhStructTelephonySmsMultiSend->getMessage(),$_ovhStructTelephonySmsMultiSend->getSmsValidity(),$_ovhStructTelephonySmsMultiSend->getSmsClass(),$_ovhStructTelephonySmsMultiSend->getSmsDeferred(),$_ovhStructTelephonySmsMultiSend->getSmsPriority(),$_ovhStructTelephonySmsMultiSend->getSmsCoding(),$_ovhStructTelephonySmsMultiSend->getTag(),$_ovhStructTelephonySmsMultiSend->getNumberToCsv(),$_ovhStructTelephonySmsMultiSend->getNoStop()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsUserAddCsvAttachment
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsUserAddCsvAttachment::getSmsAccount()
	 * @uses OvhStructTelephonySmsUserAddCsvAttachment::getLogin()
	 * @uses OvhStructTelephonySmsUserAddCsvAttachment::getPassword()
	 * @uses OvhStructTelephonySmsUserAddCsvAttachment::getCsvUrl()
	 * @uses OvhStructTelephonySmsUserAddCsvAttachment::getId()
	 * @uses OvhStructTelephonySmsUserAddCsvAttachment::getName()
	 * @param OvhStructTelephonySmsUserAddCsvAttachment $_ovhStructTelephonySmsUserAddCsvAttachment
	 * @return OvhStructTelephonySmsUserAddCsvAttachmentResponse
	 */
	public function telephonySmsUserAddCsvAttachment(OvhStructTelephonySmsUserAddCsvAttachment $_ovhStructTelephonySmsUserAddCsvAttachment)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsUserAddCsvAttachment($_ovhStructTelephonySmsUserAddCsvAttachment->getSmsAccount(),$_ovhStructTelephonySmsUserAddCsvAttachment->getLogin(),$_ovhStructTelephonySmsUserAddCsvAttachment->getPassword(),$_ovhStructTelephonySmsUserAddCsvAttachment->getCsvUrl(),$_ovhStructTelephonySmsUserAddCsvAttachment->getId(),$_ovhStructTelephonySmsUserAddCsvAttachment->getName()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySpareDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySpareDel::getSession()
	 * @uses OvhStructTelephonySpareDel::getType()
	 * @uses OvhStructTelephonySpareDel::getSpare()
	 * @param OvhStructTelephonySpareDel $_ovhStructTelephonySpareDel
	 * @return OvhStructTelephonySpareDelResponse
	 */
	public function telephonySpareDel(OvhStructTelephonySpareDel $_ovhStructTelephonySpareDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySpareDel($_ovhStructTelephonySpareDel->getSession(),$_ovhStructTelephonySpareDel->getType(),$_ovhStructTelephonySpareDel->getSpare()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyFaxHistory
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyFaxHistory::getSession()
	 * @uses OvhStructTelephonyFaxHistory::getNumber()
	 * @uses OvhStructTelephonyFaxHistory::getCountry()
	 * @uses OvhStructTelephonyFaxHistory::getState()
	 * @param OvhStructTelephonyFaxHistory $_ovhStructTelephonyFaxHistory
	 * @return OvhStructTelephonyFaxHistoryResponse
	 */
	public function telephonyFaxHistory(OvhStructTelephonyFaxHistory $_ovhStructTelephonyFaxHistory)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyFaxHistory($_ovhStructTelephonyFaxHistory->getSession(),$_ovhStructTelephonyFaxHistory->getNumber(),$_ovhStructTelephonyFaxHistory->getCountry(),$_ovhStructTelephonyFaxHistory->getState()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyFreefaxToVoicefax
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyFreefaxToVoicefax::getSession()
	 * @uses OvhStructTelephonyFreefaxToVoicefax::getBillingAccount()
	 * @uses OvhStructTelephonyFreefaxToVoicefax::getNumber()
	 * @uses OvhStructTelephonyFreefaxToVoicefax::getCountry()
	 * @param OvhStructTelephonyFreefaxToVoicefax $_ovhStructTelephonyFreefaxToVoicefax
	 * @return OvhStructTelephonyFreefaxToVoicefaxResponse
	 */
	public function telephonyFreefaxToVoicefax(OvhStructTelephonyFreefaxToVoicefax $_ovhStructTelephonyFreefaxToVoicefax)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyFreefaxToVoicefax($_ovhStructTelephonyFreefaxToVoicefax->getSession(),$_ovhStructTelephonyFreefaxToVoicefax->getBillingAccount(),$_ovhStructTelephonyFreefaxToVoicefax->getNumber(),$_ovhStructTelephonyFreefaxToVoicefax->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyFaxSend
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyFaxSend::getSession()
	 * @uses OvhStructTelephonyFaxSend::getNumber()
	 * @uses OvhStructTelephonyFaxSend::getCountry()
	 * @uses OvhStructTelephonyFaxSend::getPdfUrl()
	 * @uses OvhStructTelephonyFaxSend::getRecipients()
	 * @uses OvhStructTelephonyFaxSend::getQuality()
	 * @uses OvhStructTelephonyFaxSend::getEmail()
	 * @uses OvhStructTelephonyFaxSend::getReferer()
	 * @param OvhStructTelephonyFaxSend $_ovhStructTelephonyFaxSend
	 * @return OvhStructTelephonyFaxSendResponse
	 */
	public function telephonyFaxSend(OvhStructTelephonyFaxSend $_ovhStructTelephonyFaxSend)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyFaxSend($_ovhStructTelephonyFaxSend->getSession(),$_ovhStructTelephonyFaxSend->getNumber(),$_ovhStructTelephonyFaxSend->getCountry(),$_ovhStructTelephonyFaxSend->getPdfUrl(),$_ovhStructTelephonyFaxSend->getRecipients(),$_ovhStructTelephonyFaxSend->getQuality(),$_ovhStructTelephonyFaxSend->getEmail(),$_ovhStructTelephonyFaxSend->getReferer()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyRestrictionList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyRestrictionList::getSession()
	 * @uses OvhStructTelephonyRestrictionList::getNumber()
	 * @uses OvhStructTelephonyRestrictionList::getCountry()
	 * @param OvhStructTelephonyRestrictionList $_ovhStructTelephonyRestrictionList
	 * @return OvhStructTelephonyRestrictionListResponse
	 */
	public function telephonyRestrictionList(OvhStructTelephonyRestrictionList $_ovhStructTelephonyRestrictionList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyRestrictionList($_ovhStructTelephonyRestrictionList->getSession(),$_ovhStructTelephonyRestrictionList->getNumber(),$_ovhStructTelephonyRestrictionList->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyBillList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyBillList::getSession()
	 * @uses OvhStructTelephonyBillList::getBillingAccount()
	 * @uses OvhStructTelephonyBillList::getDate()
	 * @param OvhStructTelephonyBillList $_ovhStructTelephonyBillList
	 * @return OvhStructTelephonyBillListResponse
	 */
	public function telephonyBillList(OvhStructTelephonyBillList $_ovhStructTelephonyBillList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyBillList($_ovhStructTelephonyBillList->getSession(),$_ovhStructTelephonyBillList->getBillingAccount(),$_ovhStructTelephonyBillList->getDate()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyNumberCustomList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyNumberCustomList::getSession()
	 * @uses OvhStructTelephonyNumberCustomList::getCountry()
	 * @uses OvhStructTelephonyNumberCustomList::getPrefix()
	 * @param OvhStructTelephonyNumberCustomList $_ovhStructTelephonyNumberCustomList
	 * @return OvhStructTelephonyNumberCustomListResponse
	 */
	public function telephonyNumberCustomList(OvhStructTelephonyNumberCustomList $_ovhStructTelephonyNumberCustomList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyNumberCustomList($_ovhStructTelephonyNumberCustomList->getSession(),$_ovhStructTelephonyNumberCustomList->getCountry(),$_ovhStructTelephonyNumberCustomList->getPrefix()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPlugAndPhoneSkinModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPlugAndPhoneSkinModify::getSession()
	 * @uses OvhStructTelephonyPlugAndPhoneSkinModify::getNumber()
	 * @uses OvhStructTelephonyPlugAndPhoneSkinModify::getCountry()
	 * @uses OvhStructTelephonyPlugAndPhoneSkinModify::getSkin()
	 * @param OvhStructTelephonyPlugAndPhoneSkinModify $_ovhStructTelephonyPlugAndPhoneSkinModify
	 * @return OvhStructTelephonyPlugAndPhoneSkinModifyResponse
	 */
	public function telephonyPlugAndPhoneSkinModify(OvhStructTelephonyPlugAndPhoneSkinModify $_ovhStructTelephonyPlugAndPhoneSkinModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPlugAndPhoneSkinModify($_ovhStructTelephonyPlugAndPhoneSkinModify->getSession(),$_ovhStructTelephonyPlugAndPhoneSkinModify->getNumber(),$_ovhStructTelephonyPlugAndPhoneSkinModify->getCountry(),$_ovhStructTelephonyPlugAndPhoneSkinModify->getSkin()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyFaxOptionsModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyFaxOptionsModify::getSession()
	 * @uses OvhStructTelephonyFaxOptionsModify::getNumber()
	 * @uses OvhStructTelephonyFaxOptionsModify::getCountry()
	 * @uses OvhStructTelephonyFaxOptionsModify::getFromName()
	 * @uses OvhStructTelephonyFaxOptionsModify::getFromEmail()
	 * @uses OvhStructTelephonyFaxOptionsModify::getFaxQuality()
	 * @uses OvhStructTelephonyFaxOptionsModify::getFaxTagLine()
	 * @uses OvhStructTelephonyFaxOptionsModify::getFaxMaxCall()
	 * @uses OvhStructTelephonyFaxOptionsModify::getReceivId()
	 * @uses OvhStructTelephonyFaxOptionsModify::getSenderId()
	 * @uses OvhStructTelephonyFaxOptionsModify::getRedirection1Email()
	 * @uses OvhStructTelephonyFaxOptionsModify::getRedirection2Email()
	 * @uses OvhStructTelephonyFaxOptionsModify::getRedirection3Email()
	 * @uses OvhStructTelephonyFaxOptionsModify::getRedirection4Email()
	 * @uses OvhStructTelephonyFaxOptionsModify::getRedirection5Email()
	 * @param OvhStructTelephonyFaxOptionsModify $_ovhStructTelephonyFaxOptionsModify
	 * @return OvhStructTelephonyFaxOptionsModifyResponse
	 */
	public function telephonyFaxOptionsModify(OvhStructTelephonyFaxOptionsModify $_ovhStructTelephonyFaxOptionsModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyFaxOptionsModify($_ovhStructTelephonyFaxOptionsModify->getSession(),$_ovhStructTelephonyFaxOptionsModify->getNumber(),$_ovhStructTelephonyFaxOptionsModify->getCountry(),$_ovhStructTelephonyFaxOptionsModify->getFromName(),$_ovhStructTelephonyFaxOptionsModify->getFromEmail(),$_ovhStructTelephonyFaxOptionsModify->getFaxQuality(),$_ovhStructTelephonyFaxOptionsModify->getFaxTagLine(),$_ovhStructTelephonyFaxOptionsModify->getFaxMaxCall(),$_ovhStructTelephonyFaxOptionsModify->getReceivId(),$_ovhStructTelephonyFaxOptionsModify->getSenderId(),$_ovhStructTelephonyFaxOptionsModify->getRedirection1Email(),$_ovhStructTelephonyFaxOptionsModify->getRedirection2Email(),$_ovhStructTelephonyFaxOptionsModify->getRedirection3Email(),$_ovhStructTelephonyFaxOptionsModify->getRedirection4Email(),$_ovhStructTelephonyFaxOptionsModify->getRedirection5Email()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyBillingAccountSummary
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyBillingAccountSummary::getSession()
	 * @uses OvhStructTelephonyBillingAccountSummary::getBillingAccount()
	 * @param OvhStructTelephonyBillingAccountSummary $_ovhStructTelephonyBillingAccountSummary
	 * @return OvhStructTelephonyBillingAccountSummaryResponse
	 */
	public function telephonyBillingAccountSummary(OvhStructTelephonyBillingAccountSummary $_ovhStructTelephonyBillingAccountSummary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyBillingAccountSummary($_ovhStructTelephonyBillingAccountSummary->getSession(),$_ovhStructTelephonyBillingAccountSummary->getBillingAccount()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyConferenceSetAnnounceFile
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyConferenceSetAnnounceFile::getSession()
	 * @uses OvhStructTelephonyConferenceSetAnnounceFile::getNumber()
	 * @uses OvhStructTelephonyConferenceSetAnnounceFile::getCountry()
	 * @uses OvhStructTelephonyConferenceSetAnnounceFile::getFilename()
	 * @uses OvhStructTelephonyConferenceSetAnnounceFile::getFiledata()
	 * @uses OvhStructTelephonyConferenceSetAnnounceFile::getMd5sum()
	 * @param OvhStructTelephonyConferenceSetAnnounceFile $_ovhStructTelephonyConferenceSetAnnounceFile
	 * @return OvhStructTelephonyConferenceSetAnnounceFileResponse
	 */
	public function telephonyConferenceSetAnnounceFile(OvhStructTelephonyConferenceSetAnnounceFile $_ovhStructTelephonyConferenceSetAnnounceFile)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyConferenceSetAnnounceFile($_ovhStructTelephonyConferenceSetAnnounceFile->getSession(),$_ovhStructTelephonyConferenceSetAnnounceFile->getNumber(),$_ovhStructTelephonyConferenceSetAnnounceFile->getCountry(),$_ovhStructTelephonyConferenceSetAnnounceFile->getFilename(),$_ovhStructTelephonyConferenceSetAnnounceFile->getFiledata(),$_ovhStructTelephonyConferenceSetAnnounceFile->getMd5sum()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPhonebookOnSmsAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPhonebookOnSmsAdd::getSession()
	 * @uses OvhStructTelephonyPhonebookOnSmsAdd::getSmsAccount()
	 * @uses OvhStructTelephonyPhonebookOnSmsAdd::getName()
	 * @param OvhStructTelephonyPhonebookOnSmsAdd $_ovhStructTelephonyPhonebookOnSmsAdd
	 * @return OvhStructTelephonyPhonebookOnSmsAddResponse
	 */
	public function telephonyPhonebookOnSmsAdd(OvhStructTelephonyPhonebookOnSmsAdd $_ovhStructTelephonyPhonebookOnSmsAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPhonebookOnSmsAdd($_ovhStructTelephonyPhonebookOnSmsAdd->getSession(),$_ovhStructTelephonyPhonebookOnSmsAdd->getSmsAccount(),$_ovhStructTelephonyPhonebookOnSmsAdd->getName()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyClick2CallUserDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyClick2CallUserDel::getSession()
	 * @uses OvhStructTelephonyClick2CallUserDel::getNumber()
	 * @uses OvhStructTelephonyClick2CallUserDel::getCountry()
	 * @uses OvhStructTelephonyClick2CallUserDel::getLogin()
	 * @param OvhStructTelephonyClick2CallUserDel $_ovhStructTelephonyClick2CallUserDel
	 * @return OvhStructTelephonyClick2CallUserDelResponse
	 */
	public function telephonyClick2CallUserDel(OvhStructTelephonyClick2CallUserDel $_ovhStructTelephonyClick2CallUserDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyClick2CallUserDel($_ovhStructTelephonyClick2CallUserDel->getSession(),$_ovhStructTelephonyClick2CallUserDel->getNumber(),$_ovhStructTelephonyClick2CallUserDel->getCountry(),$_ovhStructTelephonyClick2CallUserDel->getLogin()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsAccountList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsAccountList::getSession()
	 * @param OvhStructTelephonySmsAccountList $_ovhStructTelephonySmsAccountList
	 * @return OvhStructTelephonySmsAccountListResponse
	 */
	public function telephonySmsAccountList(OvhStructTelephonySmsAccountList $_ovhStructTelephonySmsAccountList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsAccountList($_ovhStructTelephonySmsAccountList->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyBillingAccountConsumptionCSVByMail
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyBillingAccountConsumptionCSVByMail::getSession()
	 * @uses OvhStructTelephonyBillingAccountConsumptionCSVByMail::getBillingAccount()
	 * @uses OvhStructTelephonyBillingAccountConsumptionCSVByMail::getDate()
	 * @param OvhStructTelephonyBillingAccountConsumptionCSVByMail $_ovhStructTelephonyBillingAccountConsumptionCSVByMail
	 * @return OvhStructTelephonyBillingAccountConsumptionCSVByMailResponse
	 */
	public function telephonyBillingAccountConsumptionCSVByMail(OvhStructTelephonyBillingAccountConsumptionCSVByMail $_ovhStructTelephonyBillingAccountConsumptionCSVByMail)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyBillingAccountConsumptionCSVByMail($_ovhStructTelephonyBillingAccountConsumptionCSVByMail->getSession(),$_ovhStructTelephonyBillingAccountConsumptionCSVByMail->getBillingAccount(),$_ovhStructTelephonyBillingAccountConsumptionCSVByMail->getDate()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyFMHuntingModificationVoicemail
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyFMHuntingModificationVoicemail::getSession()
	 * @uses OvhStructTelephonyFMHuntingModificationVoicemail::getNumber()
	 * @uses OvhStructTelephonyFMHuntingModificationVoicemail::getCountry()
	 * @uses OvhStructTelephonyFMHuntingModificationVoicemail::getBillingAccount()
	 * @uses OvhStructTelephonyFMHuntingModificationVoicemail::getNoReplyTimer()
	 * @uses OvhStructTelephonyFMHuntingModificationVoicemail::getMainVoicemail()
	 * @param OvhStructTelephonyFMHuntingModificationVoicemail $_ovhStructTelephonyFMHuntingModificationVoicemail
	 * @return OvhStructTelephonyFMHuntingModificationVoicemailResponse
	 */
	public function telephonyFMHuntingModificationVoicemail(OvhStructTelephonyFMHuntingModificationVoicemail $_ovhStructTelephonyFMHuntingModificationVoicemail)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyFMHuntingModificationVoicemail($_ovhStructTelephonyFMHuntingModificationVoicemail->getSession(),$_ovhStructTelephonyFMHuntingModificationVoicemail->getNumber(),$_ovhStructTelephonyFMHuntingModificationVoicemail->getCountry(),$_ovhStructTelephonyFMHuntingModificationVoicemail->getBillingAccount(),$_ovhStructTelephonyFMHuntingModificationVoicemail->getNoReplyTimer(),$_ovhStructTelephonyFMHuntingModificationVoicemail->getMainVoicemail()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyOrdersFollowingUp
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyOrdersFollowingUp::getSession()
	 * @uses OvhStructTelephonyOrdersFollowingUp::getIsOrderDone()
	 * @param OvhStructTelephonyOrdersFollowingUp $_ovhStructTelephonyOrdersFollowingUp
	 * @return OvhStructTelephonyOrdersFollowingUpResponse
	 */
	public function telephonyOrdersFollowingUp(OvhStructTelephonyOrdersFollowingUp $_ovhStructTelephonyOrdersFollowingUp)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyOrdersFollowingUp($_ovhStructTelephonyOrdersFollowingUp->getSession(),$_ovhStructTelephonyOrdersFollowingUp->getIsOrderDone()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPhonebookOnGroupContactAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPhonebookOnGroupContactAdd::getSession()
	 * @uses OvhStructTelephonyPhonebookOnGroupContactAdd::getGroup()
	 * @uses OvhStructTelephonyPhonebookOnGroupContactAdd::getId()
	 * @uses OvhStructTelephonyPhonebookOnGroupContactAdd::getName()
	 * @uses OvhStructTelephonyPhonebookOnGroupContactAdd::getSurname()
	 * @uses OvhStructTelephonyPhonebookOnGroupContactAdd::getWorkPhone()
	 * @uses OvhStructTelephonyPhonebookOnGroupContactAdd::getWorkMobile()
	 * @uses OvhStructTelephonyPhonebookOnGroupContactAdd::getHomePhone()
	 * @uses OvhStructTelephonyPhonebookOnGroupContactAdd::getHomeMobile()
	 * @uses OvhStructTelephonyPhonebookOnGroupContactAdd::getGroupName()
	 * @param OvhStructTelephonyPhonebookOnGroupContactAdd $_ovhStructTelephonyPhonebookOnGroupContactAdd
	 * @return OvhStructTelephonyPhonebookOnGroupContactAddResponse
	 */
	public function telephonyPhonebookOnGroupContactAdd(OvhStructTelephonyPhonebookOnGroupContactAdd $_ovhStructTelephonyPhonebookOnGroupContactAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPhonebookOnGroupContactAdd($_ovhStructTelephonyPhonebookOnGroupContactAdd->getSession(),$_ovhStructTelephonyPhonebookOnGroupContactAdd->getGroup(),$_ovhStructTelephonyPhonebookOnGroupContactAdd->getId(),$_ovhStructTelephonyPhonebookOnGroupContactAdd->getName(),$_ovhStructTelephonyPhonebookOnGroupContactAdd->getSurname(),$_ovhStructTelephonyPhonebookOnGroupContactAdd->getWorkPhone(),$_ovhStructTelephonyPhonebookOnGroupContactAdd->getWorkMobile(),$_ovhStructTelephonyPhonebookOnGroupContactAdd->getHomePhone(),$_ovhStructTelephonyPhonebookOnGroupContactAdd->getHomeMobile(),$_ovhStructTelephonyPhonebookOnGroupContactAdd->getGroupName()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyBillDetailsCSV
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyBillDetailsCSV::getSession()
	 * @uses OvhStructTelephonyBillDetailsCSV::getBillingAccount()
	 * @uses OvhStructTelephonyBillDetailsCSV::getDate()
	 * @uses OvhStructTelephonyBillDetailsCSV::getReceived()
	 * @param OvhStructTelephonyBillDetailsCSV $_ovhStructTelephonyBillDetailsCSV
	 * @return OvhStructTelephonyBillDetailsCSVResponse
	 */
	public function telephonyBillDetailsCSV(OvhStructTelephonyBillDetailsCSV $_ovhStructTelephonyBillDetailsCSV)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyBillDetailsCSV($_ovhStructTelephonyBillDetailsCSV->getSession(),$_ovhStructTelephonyBillDetailsCSV->getBillingAccount(),$_ovhStructTelephonyBillDetailsCSV->getDate(),$_ovhStructTelephonyBillDetailsCSV->getReceived()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsCreditLeft
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsCreditLeft::getSession()
	 * @uses OvhStructTelephonySmsCreditLeft::getSmsAccount()
	 * @param OvhStructTelephonySmsCreditLeft $_ovhStructTelephonySmsCreditLeft
	 * @return OvhStructTelephonySmsCreditLeftResponse
	 */
	public function telephonySmsCreditLeft(OvhStructTelephonySmsCreditLeft $_ovhStructTelephonySmsCreditLeft)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsCreditLeft($_ovhStructTelephonySmsCreditLeft->getSession(),$_ovhStructTelephonySmsCreditLeft->getSmsAccount()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyDirectoryPJCode
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyDirectoryPJCode::getSession()
	 * @uses OvhStructTelephonyDirectoryPJCode::getApe()
	 * @uses OvhStructTelephonyDirectoryPJCode::getPJCode()
	 * @uses OvhStructTelephonyDirectoryPJCode::getShowOnlyAssociatedWithAPE()
	 * @param OvhStructTelephonyDirectoryPJCode $_ovhStructTelephonyDirectoryPJCode
	 * @return OvhStructTelephonyDirectoryPJCodeResponse
	 */
	public function telephonyDirectoryPJCode(OvhStructTelephonyDirectoryPJCode $_ovhStructTelephonyDirectoryPJCode)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyDirectoryPJCode($_ovhStructTelephonyDirectoryPJCode->getSession(),$_ovhStructTelephonyDirectoryPJCode->getApe(),$_ovhStructTelephonyDirectoryPJCode->getPJCode(),$_ovhStructTelephonyDirectoryPJCode->getShowOnlyAssociatedWithAPE()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyListSummationCallsFromBillingAccount
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyListSummationCallsFromBillingAccount::getSession()
	 * @uses OvhStructTelephonyListSummationCallsFromBillingAccount::getBillingAccount()
	 * @uses OvhStructTelephonyListSummationCallsFromBillingAccount::getReversableDelay()
	 * @param OvhStructTelephonyListSummationCallsFromBillingAccount $_ovhStructTelephonyListSummationCallsFromBillingAccount
	 * @return OvhStructTelephonyListSummationCallsFromBillingAccountResponse
	 */
	public function telephonyListSummationCallsFromBillingAccount(OvhStructTelephonyListSummationCallsFromBillingAccount $_ovhStructTelephonyListSummationCallsFromBillingAccount)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyListSummationCallsFromBillingAccount($_ovhStructTelephonyListSummationCallsFromBillingAccount->getSession(),$_ovhStructTelephonyListSummationCallsFromBillingAccount->getBillingAccount(),$_ovhStructTelephonyListSummationCallsFromBillingAccount->getReversableDelay()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyBillingAccountDescriptionModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyBillingAccountDescriptionModify::getSession()
	 * @uses OvhStructTelephonyBillingAccountDescriptionModify::getBillingAccount()
	 * @uses OvhStructTelephonyBillingAccountDescriptionModify::getDescription()
	 * @param OvhStructTelephonyBillingAccountDescriptionModify $_ovhStructTelephonyBillingAccountDescriptionModify
	 * @return OvhStructTelephonyBillingAccountDescriptionModifyResponse
	 */
	public function telephonyBillingAccountDescriptionModify(OvhStructTelephonyBillingAccountDescriptionModify $_ovhStructTelephonyBillingAccountDescriptionModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyBillingAccountDescriptionModify($_ovhStructTelephonyBillingAccountDescriptionModify->getSession(),$_ovhStructTelephonyBillingAccountDescriptionModify->getBillingAccount(),$_ovhStructTelephonyBillingAccountDescriptionModify->getDescription()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyAbbreviatedNumberDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyAbbreviatedNumberDel::getSession()
	 * @uses OvhStructTelephonyAbbreviatedNumberDel::getNumber()
	 * @uses OvhStructTelephonyAbbreviatedNumberDel::getCountry()
	 * @uses OvhStructTelephonyAbbreviatedNumberDel::getAbbreviatedNumber()
	 * @param OvhStructTelephonyAbbreviatedNumberDel $_ovhStructTelephonyAbbreviatedNumberDel
	 * @return OvhStructTelephonyAbbreviatedNumberDelResponse
	 */
	public function telephonyAbbreviatedNumberDel(OvhStructTelephonyAbbreviatedNumberDel $_ovhStructTelephonyAbbreviatedNumberDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyAbbreviatedNumberDel($_ovhStructTelephonyAbbreviatedNumberDel->getSession(),$_ovhStructTelephonyAbbreviatedNumberDel->getNumber(),$_ovhStructTelephonyAbbreviatedNumberDel->getCountry(),$_ovhStructTelephonyAbbreviatedNumberDel->getAbbreviatedNumber()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyFaxOptionsList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyFaxOptionsList::getSession()
	 * @uses OvhStructTelephonyFaxOptionsList::getNumber()
	 * @uses OvhStructTelephonyFaxOptionsList::getCountry()
	 * @param OvhStructTelephonyFaxOptionsList $_ovhStructTelephonyFaxOptionsList
	 * @return OvhStructTelephonyFaxOptionsListResponse
	 */
	public function telephonyFaxOptionsList(OvhStructTelephonyFaxOptionsList $_ovhStructTelephonyFaxOptionsList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyFaxOptionsList($_ovhStructTelephonyFaxOptionsList->getSession(),$_ovhStructTelephonyFaxOptionsList->getNumber(),$_ovhStructTelephonyFaxOptionsList->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyTrunkExternalDisplayedNumberAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyTrunkExternalDisplayedNumberAdd::getSession()
	 * @uses OvhStructTelephonyTrunkExternalDisplayedNumberAdd::getNumber()
	 * @uses OvhStructTelephonyTrunkExternalDisplayedNumberAdd::getCountry()
	 * @uses OvhStructTelephonyTrunkExternalDisplayedNumberAdd::getExternalDisplayedNumber()
	 * @uses OvhStructTelephonyTrunkExternalDisplayedNumberAdd::getWhiteLabel()
	 * @param OvhStructTelephonyTrunkExternalDisplayedNumberAdd $_ovhStructTelephonyTrunkExternalDisplayedNumberAdd
	 * @return OvhStructTelephonyTrunkExternalDisplayedNumberAddResponse
	 */
	public function telephonyTrunkExternalDisplayedNumberAdd(OvhStructTelephonyTrunkExternalDisplayedNumberAdd $_ovhStructTelephonyTrunkExternalDisplayedNumberAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyTrunkExternalDisplayedNumberAdd($_ovhStructTelephonyTrunkExternalDisplayedNumberAdd->getSession(),$_ovhStructTelephonyTrunkExternalDisplayedNumberAdd->getNumber(),$_ovhStructTelephonyTrunkExternalDisplayedNumberAdd->getCountry(),$_ovhStructTelephonyTrunkExternalDisplayedNumberAdd->getExternalDisplayedNumber(),$_ovhStructTelephonyTrunkExternalDisplayedNumberAdd->getWhiteLabel()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyBillingAccountSet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyBillingAccountSet::getSession()
	 * @uses OvhStructTelephonyBillingAccountSet::getBillingAccount()
	 * @uses OvhStructTelephonyBillingAccountSet::getNumbers()
	 * @param OvhStructTelephonyBillingAccountSet $_ovhStructTelephonyBillingAccountSet
	 * @return OvhStructTelephonyBillingAccountSetResponse
	 */
	public function telephonyBillingAccountSet(OvhStructTelephonyBillingAccountSet $_ovhStructTelephonyBillingAccountSet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyBillingAccountSet($_ovhStructTelephonyBillingAccountSet->getSession(),$_ovhStructTelephonyBillingAccountSet->getBillingAccount(),$_ovhStructTelephonyBillingAccountSet->getNumbers()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyDepositMovementModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyDepositMovementModify::getSession()
	 * @uses OvhStructTelephonyDepositMovementModify::getBillingAccountSource()
	 * @uses OvhStructTelephonyDepositMovementModify::getBillingAccountDestination()
	 * @uses OvhStructTelephonyDepositMovementModify::getAmount()
	 * @param OvhStructTelephonyDepositMovementModify $_ovhStructTelephonyDepositMovementModify
	 * @return OvhStructTelephonyDepositMovementModifyResponse
	 */
	public function telephonyDepositMovementModify(OvhStructTelephonyDepositMovementModify $_ovhStructTelephonyDepositMovementModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyDepositMovementModify($_ovhStructTelephonyDepositMovementModify->getSession(),$_ovhStructTelephonyDepositMovementModify->getBillingAccountSource(),$_ovhStructTelephonyDepositMovementModify->getBillingAccountDestination(),$_ovhStructTelephonyDepositMovementModify->getAmount()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyClick2CallDo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyClick2CallDo::getLogin()
	 * @uses OvhStructTelephonyClick2CallDo::getPassword()
	 * @uses OvhStructTelephonyClick2CallDo::getCalling()
	 * @uses OvhStructTelephonyClick2CallDo::getCalled()
	 * @uses OvhStructTelephonyClick2CallDo::getBillingNumber()
	 * @param OvhStructTelephonyClick2CallDo $_ovhStructTelephonyClick2CallDo
	 * @return OvhStructTelephonyClick2CallDoResponse
	 */
	public function telephonyClick2CallDo(OvhStructTelephonyClick2CallDo $_ovhStructTelephonyClick2CallDo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyClick2CallDo($_ovhStructTelephonyClick2CallDo->getLogin(),$_ovhStructTelephonyClick2CallDo->getPassword(),$_ovhStructTelephonyClick2CallDo->getCalling(),$_ovhStructTelephonyClick2CallDo->getCalled(),$_ovhStructTelephonyClick2CallDo->getBillingNumber()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySpecialNumberOrder
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySpecialNumberOrder::getSession()
	 * @uses OvhStructTelephonySpecialNumberOrder::getBillingAccount()
	 * @uses OvhStructTelephonySpecialNumberOrder::getCountry()
	 * @uses OvhStructTelephonySpecialNumberOrder::getAliasNumber()
	 * @uses OvhStructTelephonySpecialNumberOrder::getPrefix()
	 * @uses OvhStructTelephonySpecialNumberOrder::getCategory()
	 * @uses OvhStructTelephonySpecialNumberOrder::getNumberToReserve()
	 * @uses OvhStructTelephonySpecialNumberOrder::getName()
	 * @uses OvhStructTelephonySpecialNumberOrder::getFirstname()
	 * @uses OvhStructTelephonySpecialNumberOrder::getStreetName()
	 * @uses OvhStructTelephonySpecialNumberOrder::getStreetNumber()
	 * @uses OvhStructTelephonySpecialNumberOrder::getZip()
	 * @uses OvhStructTelephonySpecialNumberOrder::getCity()
	 * @uses OvhStructTelephonySpecialNumberOrder::getEmail()
	 * @uses OvhStructTelephonySpecialNumberOrder::getProcedureId()
	 * @uses OvhStructTelephonySpecialNumberOrder::getLegalForm()
	 * @uses OvhStructTelephonySpecialNumberOrder::getSiret()
	 * @uses OvhStructTelephonySpecialNumberOrder::getApe()
	 * @uses OvhStructTelephonySpecialNumberOrder::getSocialNomination()
	 * @uses OvhStructTelephonySpecialNumberOrder::getDisplayUniversalDirectory()
	 * @uses OvhStructTelephonySpecialNumberOrder::getRetractation()
	 * @param OvhStructTelephonySpecialNumberOrder $_ovhStructTelephonySpecialNumberOrder
	 * @return OvhStructTelephonySpecialNumberOrderResponse
	 */
	public function telephonySpecialNumberOrder(OvhStructTelephonySpecialNumberOrder $_ovhStructTelephonySpecialNumberOrder)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySpecialNumberOrder($_ovhStructTelephonySpecialNumberOrder->getSession(),$_ovhStructTelephonySpecialNumberOrder->getBillingAccount(),$_ovhStructTelephonySpecialNumberOrder->getCountry(),$_ovhStructTelephonySpecialNumberOrder->getAliasNumber(),$_ovhStructTelephonySpecialNumberOrder->getPrefix(),$_ovhStructTelephonySpecialNumberOrder->getCategory(),$_ovhStructTelephonySpecialNumberOrder->getNumberToReserve(),$_ovhStructTelephonySpecialNumberOrder->getName(),$_ovhStructTelephonySpecialNumberOrder->getFirstname(),$_ovhStructTelephonySpecialNumberOrder->getStreetName(),$_ovhStructTelephonySpecialNumberOrder->getStreetNumber(),$_ovhStructTelephonySpecialNumberOrder->getZip(),$_ovhStructTelephonySpecialNumberOrder->getCity(),$_ovhStructTelephonySpecialNumberOrder->getEmail(),$_ovhStructTelephonySpecialNumberOrder->getProcedureId(),$_ovhStructTelephonySpecialNumberOrder->getLegalForm(),$_ovhStructTelephonySpecialNumberOrder->getSiret(),$_ovhStructTelephonySpecialNumberOrder->getApe(),$_ovhStructTelephonySpecialNumberOrder->getSocialNomination(),$_ovhStructTelephonySpecialNumberOrder->getDisplayUniversalDirectory(),$_ovhStructTelephonySpecialNumberOrder->getRetractation()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyVoicemailOptionsModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyVoicemailOptionsModify::getSession()
	 * @uses OvhStructTelephonyVoicemailOptionsModify::getNumber()
	 * @uses OvhStructTelephonyVoicemailOptionsModify::getCountry()
	 * @uses OvhStructTelephonyVoicemailOptionsModify::getRedirection1()
	 * @uses OvhStructTelephonyVoicemailOptionsModify::getRedirection1Email()
	 * @uses OvhStructTelephonyVoicemailOptionsModify::getRedirection2()
	 * @uses OvhStructTelephonyVoicemailOptionsModify::getRedirection2Email()
	 * @uses OvhStructTelephonyVoicemailOptionsModify::getRedirection3()
	 * @uses OvhStructTelephonyVoicemailOptionsModify::getRedirection3Email()
	 * @uses OvhStructTelephonyVoicemailOptionsModify::getRedirection4()
	 * @uses OvhStructTelephonyVoicemailOptionsModify::getRedirection4Email()
	 * @uses OvhStructTelephonyVoicemailOptionsModify::getRedirection5()
	 * @uses OvhStructTelephonyVoicemailOptionsModify::getRedirection5Email()
	 * @uses OvhStructTelephonyVoicemailOptionsModify::getAnnounceMessage()
	 * @uses OvhStructTelephonyVoicemailOptionsModify::getKeepMessage()
	 * @uses OvhStructTelephonyVoicemailOptionsModify::getAudioformat()
	 * @uses OvhStructTelephonyVoicemailOptionsModify::getFromEmail()
	 * @uses OvhStructTelephonyVoicemailOptionsModify::getFromName()
	 * @uses OvhStructTelephonyVoicemailOptionsModify::getDoNotRecord()
	 * @uses OvhStructTelephonyVoicemailOptionsModify::getForcePassword()
	 * @param OvhStructTelephonyVoicemailOptionsModify $_ovhStructTelephonyVoicemailOptionsModify
	 * @return OvhStructTelephonyVoicemailOptionsModifyResponse
	 */
	public function telephonyVoicemailOptionsModify(OvhStructTelephonyVoicemailOptionsModify $_ovhStructTelephonyVoicemailOptionsModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyVoicemailOptionsModify($_ovhStructTelephonyVoicemailOptionsModify->getSession(),$_ovhStructTelephonyVoicemailOptionsModify->getNumber(),$_ovhStructTelephonyVoicemailOptionsModify->getCountry(),$_ovhStructTelephonyVoicemailOptionsModify->getRedirection1(),$_ovhStructTelephonyVoicemailOptionsModify->getRedirection1Email(),$_ovhStructTelephonyVoicemailOptionsModify->getRedirection2(),$_ovhStructTelephonyVoicemailOptionsModify->getRedirection2Email(),$_ovhStructTelephonyVoicemailOptionsModify->getRedirection3(),$_ovhStructTelephonyVoicemailOptionsModify->getRedirection3Email(),$_ovhStructTelephonyVoicemailOptionsModify->getRedirection4(),$_ovhStructTelephonyVoicemailOptionsModify->getRedirection4Email(),$_ovhStructTelephonyVoicemailOptionsModify->getRedirection5(),$_ovhStructTelephonyVoicemailOptionsModify->getRedirection5Email(),$_ovhStructTelephonyVoicemailOptionsModify->getAnnounceMessage(),$_ovhStructTelephonyVoicemailOptionsModify->getKeepMessage(),$_ovhStructTelephonyVoicemailOptionsModify->getAudioformat(),$_ovhStructTelephonyVoicemailOptionsModify->getFromEmail(),$_ovhStructTelephonyVoicemailOptionsModify->getFromName(),$_ovhStructTelephonyVoicemailOptionsModify->getDoNotRecord(),$_ovhStructTelephonyVoicemailOptionsModify->getForcePassword()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyLineSwitchOldOffer
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyLineSwitchOldOffer::getSession()
	 * @uses OvhStructTelephonyLineSwitchOldOffer::getNumbers()
	 * @uses OvhStructTelephonyLineSwitchOldOffer::getOffers()
	 * @uses OvhStructTelephonyLineSwitchOldOffer::getBillingAccount()
	 * @param OvhStructTelephonyLineSwitchOldOffer $_ovhStructTelephonyLineSwitchOldOffer
	 * @return OvhStructTelephonyLineSwitchOldOfferResponse
	 */
	public function telephonyLineSwitchOldOffer(OvhStructTelephonyLineSwitchOldOffer $_ovhStructTelephonyLineSwitchOldOffer)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyLineSwitchOldOffer($_ovhStructTelephonyLineSwitchOldOffer->getSession(),$_ovhStructTelephonyLineSwitchOldOffer->getNumbers(),$_ovhStructTelephonyLineSwitchOldOffer->getOffers(),$_ovhStructTelephonyLineSwitchOldOffer->getBillingAccount()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPhonebookOnGroupContactDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPhonebookOnGroupContactDel::getSession()
	 * @uses OvhStructTelephonyPhonebookOnGroupContactDel::getGroup()
	 * @uses OvhStructTelephonyPhonebookOnGroupContactDel::getId()
	 * @param OvhStructTelephonyPhonebookOnGroupContactDel $_ovhStructTelephonyPhonebookOnGroupContactDel
	 * @return OvhStructTelephonyPhonebookOnGroupContactDelResponse
	 */
	public function telephonyPhonebookOnGroupContactDel(OvhStructTelephonyPhonebookOnGroupContactDel $_ovhStructTelephonyPhonebookOnGroupContactDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPhonebookOnGroupContactDel($_ovhStructTelephonyPhonebookOnGroupContactDel->getSession(),$_ovhStructTelephonyPhonebookOnGroupContactDel->getGroup(),$_ovhStructTelephonyPhonebookOnGroupContactDel->getId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySpareAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySpareAdd::getSession()
	 * @uses OvhStructTelephonySpareAdd::getType()
	 * @uses OvhStructTelephonySpareAdd::getModel()
	 * @uses OvhStructTelephonySpareAdd::getMac()
	 * @param OvhStructTelephonySpareAdd $_ovhStructTelephonySpareAdd
	 * @return OvhStructTelephonySpareAddResponse
	 */
	public function telephonySpareAdd(OvhStructTelephonySpareAdd $_ovhStructTelephonySpareAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySpareAdd($_ovhStructTelephonySpareAdd->getSession(),$_ovhStructTelephonySpareAdd->getType(),$_ovhStructTelephonySpareAdd->getModel(),$_ovhStructTelephonySpareAdd->getMac()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsAddCsvAttachment
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsAddCsvAttachment::getSession()
	 * @uses OvhStructTelephonySmsAddCsvAttachment::getSmsAccount()
	 * @uses OvhStructTelephonySmsAddCsvAttachment::getCsvUrl()
	 * @uses OvhStructTelephonySmsAddCsvAttachment::getId()
	 * @uses OvhStructTelephonySmsAddCsvAttachment::getName()
	 * @param OvhStructTelephonySmsAddCsvAttachment $_ovhStructTelephonySmsAddCsvAttachment
	 * @return OvhStructTelephonySmsAddCsvAttachmentResponse
	 */
	public function telephonySmsAddCsvAttachment(OvhStructTelephonySmsAddCsvAttachment $_ovhStructTelephonySmsAddCsvAttachment)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsAddCsvAttachment($_ovhStructTelephonySmsAddCsvAttachment->getSession(),$_ovhStructTelephonySmsAddCsvAttachment->getSmsAccount(),$_ovhStructTelephonySmsAddCsvAttachment->getCsvUrl(),$_ovhStructTelephonySmsAddCsvAttachment->getId(),$_ovhStructTelephonySmsAddCsvAttachment->getName()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyDefaultPrivateHolidaysEvents
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyDefaultPrivateHolidaysEvents::getSession()
	 * @param OvhStructTelephonyDefaultPrivateHolidaysEvents $_ovhStructTelephonyDefaultPrivateHolidaysEvents
	 * @return OvhStructTelephonyDefaultPrivateHolidaysEventsResponse
	 */
	public function telephonyDefaultPrivateHolidaysEvents(OvhStructTelephonyDefaultPrivateHolidaysEvents $_ovhStructTelephonyDefaultPrivateHolidaysEvents)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyDefaultPrivateHolidaysEvents($_ovhStructTelephonyDefaultPrivateHolidaysEvents->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyToneRemoteUpload
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyToneRemoteUpload::getSession()
	 * @uses OvhStructTelephonyToneRemoteUpload::getNumber()
	 * @uses OvhStructTelephonyToneRemoteUpload::getCountry()
	 * @uses OvhStructTelephonyToneRemoteUpload::getToneType()
	 * @uses OvhStructTelephonyToneRemoteUpload::getFilename()
	 * @uses OvhStructTelephonyToneRemoteUpload::getUrl()
	 * @param OvhStructTelephonyToneRemoteUpload $_ovhStructTelephonyToneRemoteUpload
	 * @return OvhStructTelephonyToneRemoteUploadResponse
	 */
	public function telephonyToneRemoteUpload(OvhStructTelephonyToneRemoteUpload $_ovhStructTelephonyToneRemoteUpload)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyToneRemoteUpload($_ovhStructTelephonyToneRemoteUpload->getSession(),$_ovhStructTelephonyToneRemoteUpload->getNumber(),$_ovhStructTelephonyToneRemoteUpload->getCountry(),$_ovhStructTelephonyToneRemoteUpload->getToneType(),$_ovhStructTelephonyToneRemoteUpload->getFilename(),$_ovhStructTelephonyToneRemoteUpload->getUrl()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyNumberGetFrWayNamesFromInsee
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyNumberGetFrWayNamesFromInsee::getSession()
	 * @uses OvhStructTelephonyNumberGetFrWayNamesFromInsee::getInsee()
	 * @uses OvhStructTelephonyNumberGetFrWayNamesFromInsee::getWayName()
	 * @param OvhStructTelephonyNumberGetFrWayNamesFromInsee $_ovhStructTelephonyNumberGetFrWayNamesFromInsee
	 * @return OvhStructTelephonyNumberGetFrWayNamesFromInseeResponse
	 */
	public function telephonyNumberGetFrWayNamesFromInsee(OvhStructTelephonyNumberGetFrWayNamesFromInsee $_ovhStructTelephonyNumberGetFrWayNamesFromInsee)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyNumberGetFrWayNamesFromInsee($_ovhStructTelephonyNumberGetFrWayNamesFromInsee->getSession(),$_ovhStructTelephonyNumberGetFrWayNamesFromInsee->getInsee(),$_ovhStructTelephonyNumberGetFrWayNamesFromInsee->getWayName()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyFMHuntingModificationMode
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyFMHuntingModificationMode::getSession()
	 * @uses OvhStructTelephonyFMHuntingModificationMode::getNumber()
	 * @uses OvhStructTelephonyFMHuntingModificationMode::getCountry()
	 * @uses OvhStructTelephonyFMHuntingModificationMode::getBillingAccount()
	 * @uses OvhStructTelephonyFMHuntingModificationMode::getStrategy()
	 * @uses OvhStructTelephonyFMHuntingModificationMode::getPattern()
	 * @param OvhStructTelephonyFMHuntingModificationMode $_ovhStructTelephonyFMHuntingModificationMode
	 * @return OvhStructTelephonyFMHuntingModificationModeResponse
	 */
	public function telephonyFMHuntingModificationMode(OvhStructTelephonyFMHuntingModificationMode $_ovhStructTelephonyFMHuntingModificationMode)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyFMHuntingModificationMode($_ovhStructTelephonyFMHuntingModificationMode->getSession(),$_ovhStructTelephonyFMHuntingModificationMode->getNumber(),$_ovhStructTelephonyFMHuntingModificationMode->getCountry(),$_ovhStructTelephonyFMHuntingModificationMode->getBillingAccount(),$_ovhStructTelephonyFMHuntingModificationMode->getStrategy(),$_ovhStructTelephonyFMHuntingModificationMode->getPattern()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyAliasToSipOffer
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyAliasToSipOffer::getSession()
	 * @uses OvhStructTelephonyAliasToSipOffer::getNumber()
	 * @uses OvhStructTelephonyAliasToSipOffer::getCountry()
	 * @uses OvhStructTelephonyAliasToSipOffer::getOffer()
	 * @uses OvhStructTelephonyAliasToSipOffer::getDelete()
	 * @param OvhStructTelephonyAliasToSipOffer $_ovhStructTelephonyAliasToSipOffer
	 * @return OvhStructTelephonyAliasToSipOfferResponse
	 */
	public function telephonyAliasToSipOffer(OvhStructTelephonyAliasToSipOffer $_ovhStructTelephonyAliasToSipOffer)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyAliasToSipOffer($_ovhStructTelephonyAliasToSipOffer->getSession(),$_ovhStructTelephonyAliasToSipOffer->getNumber(),$_ovhStructTelephonyAliasToSipOffer->getCountry(),$_ovhStructTelephonyAliasToSipOffer->getOffer(),$_ovhStructTelephonyAliasToSipOffer->getDelete()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsUserMultiSend
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsUserMultiSend::getLogin()
	 * @uses OvhStructTelephonySmsUserMultiSend::getPassword()
	 * @uses OvhStructTelephonySmsUserMultiSend::getSmsAccount()
	 * @uses OvhStructTelephonySmsUserMultiSend::getNumberFrom()
	 * @uses OvhStructTelephonySmsUserMultiSend::getNumberTo()
	 * @uses OvhStructTelephonySmsUserMultiSend::getMessage()
	 * @uses OvhStructTelephonySmsUserMultiSend::getSmsValidity()
	 * @uses OvhStructTelephonySmsUserMultiSend::getSmsClass()
	 * @uses OvhStructTelephonySmsUserMultiSend::getSmsDeferred()
	 * @uses OvhStructTelephonySmsUserMultiSend::getSmsPriority()
	 * @uses OvhStructTelephonySmsUserMultiSend::getSmsCoding()
	 * @uses OvhStructTelephonySmsUserMultiSend::getTag()
	 * @uses OvhStructTelephonySmsUserMultiSend::getNumberToCsv()
	 * @uses OvhStructTelephonySmsUserMultiSend::getNoStop()
	 * @param OvhStructTelephonySmsUserMultiSend $_ovhStructTelephonySmsUserMultiSend
	 * @return OvhStructTelephonySmsUserMultiSendResponse
	 */
	public function telephonySmsUserMultiSend(OvhStructTelephonySmsUserMultiSend $_ovhStructTelephonySmsUserMultiSend)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsUserMultiSend($_ovhStructTelephonySmsUserMultiSend->getLogin(),$_ovhStructTelephonySmsUserMultiSend->getPassword(),$_ovhStructTelephonySmsUserMultiSend->getSmsAccount(),$_ovhStructTelephonySmsUserMultiSend->getNumberFrom(),$_ovhStructTelephonySmsUserMultiSend->getNumberTo(),$_ovhStructTelephonySmsUserMultiSend->getMessage(),$_ovhStructTelephonySmsUserMultiSend->getSmsValidity(),$_ovhStructTelephonySmsUserMultiSend->getSmsClass(),$_ovhStructTelephonySmsUserMultiSend->getSmsDeferred(),$_ovhStructTelephonySmsUserMultiSend->getSmsPriority(),$_ovhStructTelephonySmsUserMultiSend->getSmsCoding(),$_ovhStructTelephonySmsUserMultiSend->getTag(),$_ovhStructTelephonySmsUserMultiSend->getNumberToCsv(),$_ovhStructTelephonySmsUserMultiSend->getNoStop()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsGetCsvAttachment
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsGetCsvAttachment::getSession()
	 * @uses OvhStructTelephonySmsGetCsvAttachment::getSmsAccount()
	 * @uses OvhStructTelephonySmsGetCsvAttachment::getId()
	 * @param OvhStructTelephonySmsGetCsvAttachment $_ovhStructTelephonySmsGetCsvAttachment
	 * @return OvhStructTelephonySmsGetCsvAttachmentResponse
	 */
	public function telephonySmsGetCsvAttachment(OvhStructTelephonySmsGetCsvAttachment $_ovhStructTelephonySmsGetCsvAttachment)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsGetCsvAttachment($_ovhStructTelephonySmsGetCsvAttachment->getSession(),$_ovhStructTelephonySmsGetCsvAttachment->getSmsAccount(),$_ovhStructTelephonySmsGetCsvAttachment->getId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsHistory
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsHistory::getSession()
	 * @uses OvhStructTelephonySmsHistory::getSmsAccount()
	 * @uses OvhStructTelephonySmsHistory::getSmsId()
	 * @uses OvhStructTelephonySmsHistory::getUser()
	 * @uses OvhStructTelephonySmsHistory::getPagingStart()
	 * @uses OvhStructTelephonySmsHistory::getPagingLimit()
	 * @uses OvhStructTelephonySmsHistory::getSortField()
	 * @uses OvhStructTelephonySmsHistory::getSortOrder()
	 * @uses OvhStructTelephonySmsHistory::getTag()
	 * @uses OvhStructTelephonySmsHistory::getFilter()
	 * @param OvhStructTelephonySmsHistory $_ovhStructTelephonySmsHistory
	 * @return OvhStructTelephonySmsHistoryResponse
	 */
	public function telephonySmsHistory(OvhStructTelephonySmsHistory $_ovhStructTelephonySmsHistory)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsHistory($_ovhStructTelephonySmsHistory->getSession(),$_ovhStructTelephonySmsHistory->getSmsAccount(),$_ovhStructTelephonySmsHistory->getSmsId(),$_ovhStructTelephonySmsHistory->getUser(),$_ovhStructTelephonySmsHistory->getPagingStart(),$_ovhStructTelephonySmsHistory->getPagingLimit(),$_ovhStructTelephonySmsHistory->getSortField(),$_ovhStructTelephonySmsHistory->getSortOrder(),$_ovhStructTelephonySmsHistory->getTag(),$_ovhStructTelephonySmsHistory->getFilter()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyAbbreviatedNumberOnGroupModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyAbbreviatedNumberOnGroupModify::getSession()
	 * @uses OvhStructTelephonyAbbreviatedNumberOnGroupModify::getGroup()
	 * @uses OvhStructTelephonyAbbreviatedNumberOnGroupModify::getAbbreviatedNumber()
	 * @uses OvhStructTelephonyAbbreviatedNumberOnGroupModify::getRelatedNumber()
	 * @uses OvhStructTelephonyAbbreviatedNumberOnGroupModify::getName()
	 * @uses OvhStructTelephonyAbbreviatedNumberOnGroupModify::getSurname()
	 * @param OvhStructTelephonyAbbreviatedNumberOnGroupModify $_ovhStructTelephonyAbbreviatedNumberOnGroupModify
	 * @return OvhStructTelephonyAbbreviatedNumberOnGroupModifyResponse
	 */
	public function telephonyAbbreviatedNumberOnGroupModify(OvhStructTelephonyAbbreviatedNumberOnGroupModify $_ovhStructTelephonyAbbreviatedNumberOnGroupModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyAbbreviatedNumberOnGroupModify($_ovhStructTelephonyAbbreviatedNumberOnGroupModify->getSession(),$_ovhStructTelephonyAbbreviatedNumberOnGroupModify->getGroup(),$_ovhStructTelephonyAbbreviatedNumberOnGroupModify->getAbbreviatedNumber(),$_ovhStructTelephonyAbbreviatedNumberOnGroupModify->getRelatedNumber(),$_ovhStructTelephonyAbbreviatedNumberOnGroupModify->getName(),$_ovhStructTelephonyAbbreviatedNumberOnGroupModify->getSurname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyHuntingGenericScreenList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyHuntingGenericScreenList::getSession()
	 * @uses OvhStructTelephonyHuntingGenericScreenList::getNumber()
	 * @uses OvhStructTelephonyHuntingGenericScreenList::getCountry()
	 * @param OvhStructTelephonyHuntingGenericScreenList $_ovhStructTelephonyHuntingGenericScreenList
	 * @return OvhStructTelephonyHuntingGenericScreenListResponse
	 */
	public function telephonyHuntingGenericScreenList(OvhStructTelephonyHuntingGenericScreenList $_ovhStructTelephonyHuntingGenericScreenList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyHuntingGenericScreenList($_ovhStructTelephonyHuntingGenericScreenList->getSession(),$_ovhStructTelephonyHuntingGenericScreenList->getNumber(),$_ovhStructTelephonyHuntingGenericScreenList->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyHuntingGenericScreenStatus
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyHuntingGenericScreenStatus::getSession()
	 * @uses OvhStructTelephonyHuntingGenericScreenStatus::getNumber()
	 * @uses OvhStructTelephonyHuntingGenericScreenStatus::getCountry()
	 * @param OvhStructTelephonyHuntingGenericScreenStatus $_ovhStructTelephonyHuntingGenericScreenStatus
	 * @return OvhStructTelephonyHuntingGenericScreenStatusResponse
	 */
	public function telephonyHuntingGenericScreenStatus(OvhStructTelephonyHuntingGenericScreenStatus $_ovhStructTelephonyHuntingGenericScreenStatus)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyHuntingGenericScreenStatus($_ovhStructTelephonyHuntingGenericScreenStatus->getSession(),$_ovhStructTelephonyHuntingGenericScreenStatus->getNumber(),$_ovhStructTelephonyHuntingGenericScreenStatus->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyHuntingModificationMembers
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyHuntingModificationMembers::getSession()
	 * @uses OvhStructTelephonyHuntingModificationMembers::getNumber()
	 * @uses OvhStructTelephonyHuntingModificationMembers::getCountry()
	 * @uses OvhStructTelephonyHuntingModificationMembers::getBillingAccount()
	 * @uses OvhStructTelephonyHuntingModificationMembers::getList_destinations()
	 * @uses OvhStructTelephonyHuntingModificationMembers::getList_noReplyTimer()
	 * @uses OvhStructTelephonyHuntingModificationMembers::getList_logged()
	 * @param OvhStructTelephonyHuntingModificationMembers $_ovhStructTelephonyHuntingModificationMembers
	 * @return OvhStructTelephonyHuntingModificationMembersResponse
	 */
	public function telephonyHuntingModificationMembers(OvhStructTelephonyHuntingModificationMembers $_ovhStructTelephonyHuntingModificationMembers)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyHuntingModificationMembers($_ovhStructTelephonyHuntingModificationMembers->getSession(),$_ovhStructTelephonyHuntingModificationMembers->getNumber(),$_ovhStructTelephonyHuntingModificationMembers->getCountry(),$_ovhStructTelephonyHuntingModificationMembers->getBillingAccount(),$_ovhStructTelephonyHuntingModificationMembers->getList_destinations(),$_ovhStructTelephonyHuntingModificationMembers->getList_noReplyTimer(),$_ovhStructTelephonyHuntingModificationMembers->getList_logged()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyVoicemailMessagesDownload
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyVoicemailMessagesDownload::getSession()
	 * @uses OvhStructTelephonyVoicemailMessagesDownload::getNumber()
	 * @uses OvhStructTelephonyVoicemailMessagesDownload::getCountry()
	 * @uses OvhStructTelephonyVoicemailMessagesDownload::getMessType()
	 * @uses OvhStructTelephonyVoicemailMessagesDownload::getFormat()
	 * @param OvhStructTelephonyVoicemailMessagesDownload $_ovhStructTelephonyVoicemailMessagesDownload
	 * @return OvhStructTelephonyVoicemailMessagesDownloadResponse
	 */
	public function telephonyVoicemailMessagesDownload(OvhStructTelephonyVoicemailMessagesDownload $_ovhStructTelephonyVoicemailMessagesDownload)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyVoicemailMessagesDownload($_ovhStructTelephonyVoicemailMessagesDownload->getSession(),$_ovhStructTelephonyVoicemailMessagesDownload->getNumber(),$_ovhStructTelephonyVoicemailMessagesDownload->getCountry(),$_ovhStructTelephonyVoicemailMessagesDownload->getMessType(),$_ovhStructTelephonyVoicemailMessagesDownload->getFormat()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyFaxCampaignCreation
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyFaxCampaignCreation::getSession()
	 * @uses OvhStructTelephonyFaxCampaignCreation::getNumber()
	 * @uses OvhStructTelephonyFaxCampaignCreation::getCountry()
	 * @uses OvhStructTelephonyFaxCampaignCreation::getCampaignName()
	 * @uses OvhStructTelephonyFaxCampaignCreation::getPdfUrl()
	 * @uses OvhStructTelephonyFaxCampaignCreation::getPdfName()
	 * @uses OvhStructTelephonyFaxCampaignCreation::getRecipients()
	 * @uses OvhStructTelephonyFaxCampaignCreation::getFaxQuality()
	 * @uses OvhStructTelephonyFaxCampaignCreation::getInitialStatus()
	 * @uses OvhStructTelephonyFaxCampaignCreation::getLaunchDate()
	 * @uses OvhStructTelephonyFaxCampaignCreation::getRemoteRecipients()
	 * @param OvhStructTelephonyFaxCampaignCreation $_ovhStructTelephonyFaxCampaignCreation
	 * @return OvhStructTelephonyFaxCampaignCreationResponse
	 */
	public function telephonyFaxCampaignCreation(OvhStructTelephonyFaxCampaignCreation $_ovhStructTelephonyFaxCampaignCreation)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyFaxCampaignCreation($_ovhStructTelephonyFaxCampaignCreation->getSession(),$_ovhStructTelephonyFaxCampaignCreation->getNumber(),$_ovhStructTelephonyFaxCampaignCreation->getCountry(),$_ovhStructTelephonyFaxCampaignCreation->getCampaignName(),$_ovhStructTelephonyFaxCampaignCreation->getPdfUrl(),$_ovhStructTelephonyFaxCampaignCreation->getPdfName(),$_ovhStructTelephonyFaxCampaignCreation->getRecipients(),$_ovhStructTelephonyFaxCampaignCreation->getFaxQuality(),$_ovhStructTelephonyFaxCampaignCreation->getInitialStatus(),$_ovhStructTelephonyFaxCampaignCreation->getLaunchDate(),$_ovhStructTelephonyFaxCampaignCreation->getRemoteRecipients()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyLineLogsNotificationOptions
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyLineLogsNotificationOptions::getSession()
	 * @uses OvhStructTelephonyLineLogsNotificationOptions::getNumber()
	 * @uses OvhStructTelephonyLineLogsNotificationOptions::getCountry()
	 * @param OvhStructTelephonyLineLogsNotificationOptions $_ovhStructTelephonyLineLogsNotificationOptions
	 * @return OvhStructTelephonyLineLogsNotificationOptionsResponse
	 */
	public function telephonyLineLogsNotificationOptions(OvhStructTelephonyLineLogsNotificationOptions $_ovhStructTelephonyLineLogsNotificationOptions)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyLineLogsNotificationOptions($_ovhStructTelephonyLineLogsNotificationOptions->getSession(),$_ovhStructTelephonyLineLogsNotificationOptions->getNumber(),$_ovhStructTelephonyLineLogsNotificationOptions->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyLineGetIpRestriction
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyLineGetIpRestriction::getSession()
	 * @uses OvhStructTelephonyLineGetIpRestriction::getNumber()
	 * @uses OvhStructTelephonyLineGetIpRestriction::getCountry()
	 * @param OvhStructTelephonyLineGetIpRestriction $_ovhStructTelephonyLineGetIpRestriction
	 * @return OvhStructTelephonyLineGetIpRestrictionResponse
	 */
	public function telephonyLineGetIpRestriction(OvhStructTelephonyLineGetIpRestriction $_ovhStructTelephonyLineGetIpRestriction)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyLineGetIpRestriction($_ovhStructTelephonyLineGetIpRestriction->getSession(),$_ovhStructTelephonyLineGetIpRestriction->getNumber(),$_ovhStructTelephonyLineGetIpRestriction->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyGetTimeZoneNumber
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyGetTimeZoneNumber::getSession()
	 * @uses OvhStructTelephonyGetTimeZoneNumber::getNumber()
	 * @uses OvhStructTelephonyGetTimeZoneNumber::getCountryCode()
	 * @param OvhStructTelephonyGetTimeZoneNumber $_ovhStructTelephonyGetTimeZoneNumber
	 * @return OvhStructTelephonyGetTimeZoneNumberResponse
	 */
	public function telephonyGetTimeZoneNumber(OvhStructTelephonyGetTimeZoneNumber $_ovhStructTelephonyGetTimeZoneNumber)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyGetTimeZoneNumber($_ovhStructTelephonyGetTimeZoneNumber->getSession(),$_ovhStructTelephonyGetTimeZoneNumber->getNumber(),$_ovhStructTelephonyGetTimeZoneNumber->getCountryCode()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyFMHuntingModificationMembers
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyFMHuntingModificationMembers::getSession()
	 * @uses OvhStructTelephonyFMHuntingModificationMembers::getNumber()
	 * @uses OvhStructTelephonyFMHuntingModificationMembers::getCountry()
	 * @uses OvhStructTelephonyFMHuntingModificationMembers::getBillingAccount()
	 * @uses OvhStructTelephonyFMHuntingModificationMembers::getList_destinations()
	 * @uses OvhStructTelephonyFMHuntingModificationMembers::getList_noReplyTimer()
	 * @uses OvhStructTelephonyFMHuntingModificationMembers::getList_logged()
	 * @param OvhStructTelephonyFMHuntingModificationMembers $_ovhStructTelephonyFMHuntingModificationMembers
	 * @return OvhStructTelephonyFMHuntingModificationMembersResponse
	 */
	public function telephonyFMHuntingModificationMembers(OvhStructTelephonyFMHuntingModificationMembers $_ovhStructTelephonyFMHuntingModificationMembers)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyFMHuntingModificationMembers($_ovhStructTelephonyFMHuntingModificationMembers->getSession(),$_ovhStructTelephonyFMHuntingModificationMembers->getNumber(),$_ovhStructTelephonyFMHuntingModificationMembers->getCountry(),$_ovhStructTelephonyFMHuntingModificationMembers->getBillingAccount(),$_ovhStructTelephonyFMHuntingModificationMembers->getList_destinations(),$_ovhStructTelephonyFMHuntingModificationMembers->getList_noReplyTimer(),$_ovhStructTelephonyFMHuntingModificationMembers->getList_logged()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPhonebookAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPhonebookAdd::getSession()
	 * @uses OvhStructTelephonyPhonebookAdd::getNumber()
	 * @uses OvhStructTelephonyPhonebookAdd::getCountry()
	 * @uses OvhStructTelephonyPhonebookAdd::getName()
	 * @param OvhStructTelephonyPhonebookAdd $_ovhStructTelephonyPhonebookAdd
	 * @return OvhStructTelephonyPhonebookAddResponse
	 */
	public function telephonyPhonebookAdd(OvhStructTelephonyPhonebookAdd $_ovhStructTelephonyPhonebookAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPhonebookAdd($_ovhStructTelephonyPhonebookAdd->getSession(),$_ovhStructTelephonyPhonebookAdd->getNumber(),$_ovhStructTelephonyPhonebookAdd->getCountry(),$_ovhStructTelephonyPhonebookAdd->getName()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyRestrictionModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyRestrictionModify::getSession()
	 * @uses OvhStructTelephonyRestrictionModify::getNumber()
	 * @uses OvhStructTelephonyRestrictionModify::getCountry()
	 * @uses OvhStructTelephonyRestrictionModify::getRestrictions()
	 * @param OvhStructTelephonyRestrictionModify $_ovhStructTelephonyRestrictionModify
	 * @return OvhStructTelephonyRestrictionModifyResponse
	 */
	public function telephonyRestrictionModify(OvhStructTelephonyRestrictionModify $_ovhStructTelephonyRestrictionModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyRestrictionModify($_ovhStructTelephonyRestrictionModify->getSession(),$_ovhStructTelephonyRestrictionModify->getNumber(),$_ovhStructTelephonyRestrictionModify->getCountry(),$_ovhStructTelephonyRestrictionModify->getRestrictions()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyRatesList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyRatesList::getSession()
	 * @uses OvhStructTelephonyRatesList::getCountryCode()
	 * @uses OvhStructTelephonyRatesList::getType()
	 * @param OvhStructTelephonyRatesList $_ovhStructTelephonyRatesList
	 * @return OvhStructTelephonyRatesListResponse
	 */
	public function telephonyRatesList(OvhStructTelephonyRatesList $_ovhStructTelephonyRatesList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyRatesList($_ovhStructTelephonyRatesList->getSession(),$_ovhStructTelephonyRatesList->getCountryCode(),$_ovhStructTelephonyRatesList->getType()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyHuntingGenericScreenOptions
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyHuntingGenericScreenOptions::getSession()
	 * @uses OvhStructTelephonyHuntingGenericScreenOptions::getNumber()
	 * @uses OvhStructTelephonyHuntingGenericScreenOptions::getCountry()
	 * @param OvhStructTelephonyHuntingGenericScreenOptions $_ovhStructTelephonyHuntingGenericScreenOptions
	 * @return OvhStructTelephonyHuntingGenericScreenOptionsResponse
	 */
	public function telephonyHuntingGenericScreenOptions(OvhStructTelephonyHuntingGenericScreenOptions $_ovhStructTelephonyHuntingGenericScreenOptions)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyHuntingGenericScreenOptions($_ovhStructTelephonyHuntingGenericScreenOptions->getSession(),$_ovhStructTelephonyHuntingGenericScreenOptions->getNumber(),$_ovhStructTelephonyHuntingGenericScreenOptions->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyBillingAccountAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyBillingAccountAdd::getSession()
	 * @param OvhStructTelephonyBillingAccountAdd $_ovhStructTelephonyBillingAccountAdd
	 * @return OvhStructTelephonyBillingAccountAddResponse
	 */
	public function telephonyBillingAccountAdd(OvhStructTelephonyBillingAccountAdd $_ovhStructTelephonyBillingAccountAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyBillingAccountAdd($_ovhStructTelephonyBillingAccountAdd->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsplusIsFreeKeyword
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsplusIsFreeKeyword::getSession()
	 * @uses OvhStructTelephonySmsplusIsFreeKeyword::getShortCode()
	 * @uses OvhStructTelephonySmsplusIsFreeKeyword::getKeyword()
	 * @param OvhStructTelephonySmsplusIsFreeKeyword $_ovhStructTelephonySmsplusIsFreeKeyword
	 * @return OvhStructTelephonySmsplusIsFreeKeywordResponse
	 */
	public function telephonySmsplusIsFreeKeyword(OvhStructTelephonySmsplusIsFreeKeyword $_ovhStructTelephonySmsplusIsFreeKeyword)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsplusIsFreeKeyword($_ovhStructTelephonySmsplusIsFreeKeyword->getSession(),$_ovhStructTelephonySmsplusIsFreeKeyword->getShortCode(),$_ovhStructTelephonySmsplusIsFreeKeyword->getKeyword()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyLineGetCodecs
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyLineGetCodecs::getSession()
	 * @uses OvhStructTelephonyLineGetCodecs::getNumber()
	 * @uses OvhStructTelephonyLineGetCodecs::getCountryCode()
	 * @param OvhStructTelephonyLineGetCodecs $_ovhStructTelephonyLineGetCodecs
	 * @return OvhStructTelephonyLineGetCodecsResponse
	 */
	public function telephonyLineGetCodecs(OvhStructTelephonyLineGetCodecs $_ovhStructTelephonyLineGetCodecs)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyLineGetCodecs($_ovhStructTelephonyLineGetCodecs->getSession(),$_ovhStructTelephonyLineGetCodecs->getNumber(),$_ovhStructTelephonyLineGetCodecs->getCountryCode()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsSenderValidate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsSenderValidate::getSession()
	 * @uses OvhStructTelephonySmsSenderValidate::getSmsAccount()
	 * @uses OvhStructTelephonySmsSenderValidate::getNumber()
	 * @uses OvhStructTelephonySmsSenderValidate::getCode()
	 * @param OvhStructTelephonySmsSenderValidate $_ovhStructTelephonySmsSenderValidate
	 * @return OvhStructTelephonySmsSenderValidateResponse
	 */
	public function telephonySmsSenderValidate(OvhStructTelephonySmsSenderValidate $_ovhStructTelephonySmsSenderValidate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsSenderValidate($_ovhStructTelephonySmsSenderValidate->getSession(),$_ovhStructTelephonySmsSenderValidate->getSmsAccount(),$_ovhStructTelephonySmsSenderValidate->getNumber(),$_ovhStructTelephonySmsSenderValidate->getCode()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyHuntingModificationSimultaneousCalls
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyHuntingModificationSimultaneousCalls::getSession()
	 * @uses OvhStructTelephonyHuntingModificationSimultaneousCalls::getNumber()
	 * @uses OvhStructTelephonyHuntingModificationSimultaneousCalls::getCountry()
	 * @uses OvhStructTelephonyHuntingModificationSimultaneousCalls::getBillingAccount()
	 * @uses OvhStructTelephonyHuntingModificationSimultaneousCalls::getNumberOfCalls()
	 * @param OvhStructTelephonyHuntingModificationSimultaneousCalls $_ovhStructTelephonyHuntingModificationSimultaneousCalls
	 * @return OvhStructTelephonyHuntingModificationSimultaneousCallsResponse
	 */
	public function telephonyHuntingModificationSimultaneousCalls(OvhStructTelephonyHuntingModificationSimultaneousCalls $_ovhStructTelephonyHuntingModificationSimultaneousCalls)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyHuntingModificationSimultaneousCalls($_ovhStructTelephonyHuntingModificationSimultaneousCalls->getSession(),$_ovhStructTelephonyHuntingModificationSimultaneousCalls->getNumber(),$_ovhStructTelephonyHuntingModificationSimultaneousCalls->getCountry(),$_ovhStructTelephonyHuntingModificationSimultaneousCalls->getBillingAccount(),$_ovhStructTelephonyHuntingModificationSimultaneousCalls->getNumberOfCalls()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyDirectoryInfoGetSameSiret
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyDirectoryInfoGetSameSiret::getSession()
	 * @uses OvhStructTelephonyDirectoryInfoGetSameSiret::getCallNumber()
	 * @uses OvhStructTelephonyDirectoryInfoGetSameSiret::getCountry()
	 * @param OvhStructTelephonyDirectoryInfoGetSameSiret $_ovhStructTelephonyDirectoryInfoGetSameSiret
	 * @return OvhStructTelephonyDirectoryInfoGetSameSiretResponse
	 */
	public function telephonyDirectoryInfoGetSameSiret(OvhStructTelephonyDirectoryInfoGetSameSiret $_ovhStructTelephonyDirectoryInfoGetSameSiret)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyDirectoryInfoGetSameSiret($_ovhStructTelephonyDirectoryInfoGetSameSiret->getSession(),$_ovhStructTelephonyDirectoryInfoGetSameSiret->getCallNumber(),$_ovhStructTelephonyDirectoryInfoGetSameSiret->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyConferenceSetParams
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyConferenceSetParams::getSession()
	 * @uses OvhStructTelephonyConferenceSetParams::getNumber()
	 * @uses OvhStructTelephonyConferenceSetParams::getCountry()
	 * @uses OvhStructTelephonyConferenceSetParams::getLang()
	 * @uses OvhStructTelephonyConferenceSetParams::getPin()
	 * @uses OvhStructTelephonyConferenceSetParams::getEnterMuted()
	 * @uses OvhStructTelephonyConferenceSetParams::getAnnounceStatus()
	 * @uses OvhStructTelephonyConferenceSetParams::getRecordStatus()
	 * @uses OvhStructTelephonyConferenceSetParams::getReportStatus()
	 * @uses OvhStructTelephonyConferenceSetParams::getReportMail()
	 * @param OvhStructTelephonyConferenceSetParams $_ovhStructTelephonyConferenceSetParams
	 * @return OvhStructTelephonyConferenceSetParamsResponse
	 */
	public function telephonyConferenceSetParams(OvhStructTelephonyConferenceSetParams $_ovhStructTelephonyConferenceSetParams)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyConferenceSetParams($_ovhStructTelephonyConferenceSetParams->getSession(),$_ovhStructTelephonyConferenceSetParams->getNumber(),$_ovhStructTelephonyConferenceSetParams->getCountry(),$_ovhStructTelephonyConferenceSetParams->getLang(),$_ovhStructTelephonyConferenceSetParams->getPin(),$_ovhStructTelephonyConferenceSetParams->getEnterMuted(),$_ovhStructTelephonyConferenceSetParams->getAnnounceStatus(),$_ovhStructTelephonyConferenceSetParams->getRecordStatus(),$_ovhStructTelephonyConferenceSetParams->getReportStatus(),$_ovhStructTelephonyConferenceSetParams->getReportMail()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySparePurchase
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySparePurchase::getSession()
	 * @uses OvhStructTelephonySparePurchase::getType()
	 * @uses OvhStructTelephonySparePurchase::getOffers()
	 * @uses OvhStructTelephonySparePurchase::getQuantities()
	 * @uses OvhStructTelephonySparePurchase::getNicShipping()
	 * @uses OvhStructTelephonySparePurchase::getName()
	 * @uses OvhStructTelephonySparePurchase::getAddress()
	 * @uses OvhStructTelephonySparePurchase::getZip()
	 * @uses OvhStructTelephonySparePurchase::getCity()
	 * @uses OvhStructTelephonySparePurchase::getCountry()
	 * @param OvhStructTelephonySparePurchase $_ovhStructTelephonySparePurchase
	 * @return OvhStructTelephonySparePurchaseResponse
	 */
	public function telephonySparePurchase(OvhStructTelephonySparePurchase $_ovhStructTelephonySparePurchase)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySparePurchase($_ovhStructTelephonySparePurchase->getSession(),$_ovhStructTelephonySparePurchase->getType(),$_ovhStructTelephonySparePurchase->getOffers(),$_ovhStructTelephonySparePurchase->getQuantities(),$_ovhStructTelephonySparePurchase->getNicShipping(),$_ovhStructTelephonySparePurchase->getName(),$_ovhStructTelephonySparePurchase->getAddress(),$_ovhStructTelephonySparePurchase->getZip(),$_ovhStructTelephonySparePurchase->getCity(),$_ovhStructTelephonySparePurchase->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyFaxCampaignList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyFaxCampaignList::getSession()
	 * @uses OvhStructTelephonyFaxCampaignList::getNumber()
	 * @uses OvhStructTelephonyFaxCampaignList::getCountry()
	 * @uses OvhStructTelephonyFaxCampaignList::getCampaignStatus()
	 * @uses OvhStructTelephonyFaxCampaignList::getPagingStart()
	 * @uses OvhStructTelephonyFaxCampaignList::getPagingLimit()
	 * @uses OvhStructTelephonyFaxCampaignList::getSortField()
	 * @uses OvhStructTelephonyFaxCampaignList::getSortOrder()
	 * @param OvhStructTelephonyFaxCampaignList $_ovhStructTelephonyFaxCampaignList
	 * @return OvhStructTelephonyFaxCampaignListResponse
	 */
	public function telephonyFaxCampaignList(OvhStructTelephonyFaxCampaignList $_ovhStructTelephonyFaxCampaignList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyFaxCampaignList($_ovhStructTelephonyFaxCampaignList->getSession(),$_ovhStructTelephonyFaxCampaignList->getNumber(),$_ovhStructTelephonyFaxCampaignList->getCountry(),$_ovhStructTelephonyFaxCampaignList->getCampaignStatus(),$_ovhStructTelephonyFaxCampaignList->getPagingStart(),$_ovhStructTelephonyFaxCampaignList->getPagingLimit(),$_ovhStructTelephonyFaxCampaignList->getSortField(),$_ovhStructTelephonyFaxCampaignList->getSortOrder()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyNicGetMgcpIpRestriction
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyNicGetMgcpIpRestriction::getSession()
	 * @param OvhStructTelephonyNicGetMgcpIpRestriction $_ovhStructTelephonyNicGetMgcpIpRestriction
	 * @return OvhStructTelephonyNicGetMgcpIpRestrictionResponse
	 */
	public function telephonyNicGetMgcpIpRestriction(OvhStructTelephonyNicGetMgcpIpRestriction $_ovhStructTelephonyNicGetMgcpIpRestriction)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyNicGetMgcpIpRestriction($_ovhStructTelephonyNicGetMgcpIpRestriction->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsGetUserQuotaForUser
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsGetUserQuotaForUser::getSmsAccount()
	 * @uses OvhStructTelephonySmsGetUserQuotaForUser::getLogin()
	 * @uses OvhStructTelephonySmsGetUserQuotaForUser::getPassword()
	 * @param OvhStructTelephonySmsGetUserQuotaForUser $_ovhStructTelephonySmsGetUserQuotaForUser
	 * @return OvhStructTelephonySmsGetUserQuotaForUserResponse
	 */
	public function telephonySmsGetUserQuotaForUser(OvhStructTelephonySmsGetUserQuotaForUser $_ovhStructTelephonySmsGetUserQuotaForUser)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsGetUserQuotaForUser($_ovhStructTelephonySmsGetUserQuotaForUser->getSmsAccount(),$_ovhStructTelephonySmsGetUserQuotaForUser->getLogin(),$_ovhStructTelephonySmsGetUserQuotaForUser->getPassword()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyDirectoryInfoGetSiret
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyDirectoryInfoGetSiret::getSession()
	 * @uses OvhStructTelephonyDirectoryInfoGetSiret::getSiret()
	 * @param OvhStructTelephonyDirectoryInfoGetSiret $_ovhStructTelephonyDirectoryInfoGetSiret
	 * @return OvhStructTelephonyDirectoryInfoGetSiretResponse
	 */
	public function telephonyDirectoryInfoGetSiret(OvhStructTelephonyDirectoryInfoGetSiret $_ovhStructTelephonyDirectoryInfoGetSiret)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyDirectoryInfoGetSiret($_ovhStructTelephonyDirectoryInfoGetSiret->getSession(),$_ovhStructTelephonyDirectoryInfoGetSiret->getSiret()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyFunctionKeyModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyFunctionKeyModify::getSession()
	 * @uses OvhStructTelephonyFunctionKeyModify::getNumber()
	 * @uses OvhStructTelephonyFunctionKeyModify::getCountry()
	 * @uses OvhStructTelephonyFunctionKeyModify::getKeyNum()
	 * @uses OvhStructTelephonyFunctionKeyModify::getFunction()
	 * @uses OvhStructTelephonyFunctionKeyModify::getRelatedNumber()
	 * @param OvhStructTelephonyFunctionKeyModify $_ovhStructTelephonyFunctionKeyModify
	 * @return OvhStructTelephonyFunctionKeyModifyResponse
	 */
	public function telephonyFunctionKeyModify(OvhStructTelephonyFunctionKeyModify $_ovhStructTelephonyFunctionKeyModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyFunctionKeyModify($_ovhStructTelephonyFunctionKeyModify->getSession(),$_ovhStructTelephonyFunctionKeyModify->getNumber(),$_ovhStructTelephonyFunctionKeyModify->getCountry(),$_ovhStructTelephonyFunctionKeyModify->getKeyNum(),$_ovhStructTelephonyFunctionKeyModify->getFunction(),$_ovhStructTelephonyFunctionKeyModify->getRelatedNumber()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyAbbreviatedNumberList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyAbbreviatedNumberList::getSession()
	 * @uses OvhStructTelephonyAbbreviatedNumberList::getNumber()
	 * @uses OvhStructTelephonyAbbreviatedNumberList::getCountry()
	 * @param OvhStructTelephonyAbbreviatedNumberList $_ovhStructTelephonyAbbreviatedNumberList
	 * @return OvhStructTelephonyAbbreviatedNumberListResponse
	 */
	public function telephonyAbbreviatedNumberList(OvhStructTelephonyAbbreviatedNumberList $_ovhStructTelephonyAbbreviatedNumberList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyAbbreviatedNumberList($_ovhStructTelephonyAbbreviatedNumberList->getSession(),$_ovhStructTelephonyAbbreviatedNumberList->getNumber(),$_ovhStructTelephonyAbbreviatedNumberList->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyFaxModifyPassword
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyFaxModifyPassword::getSession()
	 * @uses OvhStructTelephonyFaxModifyPassword::getNumber()
	 * @uses OvhStructTelephonyFaxModifyPassword::getCountry()
	 * @uses OvhStructTelephonyFaxModifyPassword::getPassword()
	 * @param OvhStructTelephonyFaxModifyPassword $_ovhStructTelephonyFaxModifyPassword
	 * @return OvhStructTelephonyFaxModifyPasswordResponse
	 */
	public function telephonyFaxModifyPassword(OvhStructTelephonyFaxModifyPassword $_ovhStructTelephonyFaxModifyPassword)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyFaxModifyPassword($_ovhStructTelephonyFaxModifyPassword->getSession(),$_ovhStructTelephonyFaxModifyPassword->getNumber(),$_ovhStructTelephonyFaxModifyPassword->getCountry(),$_ovhStructTelephonyFaxModifyPassword->getPassword()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsDelete
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsDelete::getSession()
	 * @uses OvhStructTelephonySmsDelete::getSmsAccount()
	 * @uses OvhStructTelephonySmsDelete::getSmsIds()
	 * @param OvhStructTelephonySmsDelete $_ovhStructTelephonySmsDelete
	 * @return OvhStructTelephonySmsDeleteResponse
	 */
	public function telephonySmsDelete(OvhStructTelephonySmsDelete $_ovhStructTelephonySmsDelete)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsDelete($_ovhStructTelephonySmsDelete->getSession(),$_ovhStructTelephonySmsDelete->getSmsAccount(),$_ovhStructTelephonySmsDelete->getSmsIds()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyDirectoryModifyPublication
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyDirectoryModifyPublication::getSession()
	 * @uses OvhStructTelephonyDirectoryModifyPublication::getCallNumber()
	 * @uses OvhStructTelephonyDirectoryModifyPublication::getCountryCode()
	 * @uses OvhStructTelephonyDirectoryModifyPublication::getLineDescription()
	 * @uses OvhStructTelephonyDirectoryModifyPublication::getDisplayFirstName()
	 * @uses OvhStructTelephonyDirectoryModifyPublication::getDisplayOnlyCity()
	 * @uses OvhStructTelephonyDirectoryModifyPublication::getDisplayUniversalDirectory()
	 * @uses OvhStructTelephonyDirectoryModifyPublication::getDisplayMarketingDirectory()
	 * @uses OvhStructTelephonyDirectoryModifyPublication::getDisplaySearchReverse()
	 * @uses OvhStructTelephonyDirectoryModifyPublication::getReceivePJDirectory()
	 * @param OvhStructTelephonyDirectoryModifyPublication $_ovhStructTelephonyDirectoryModifyPublication
	 * @return OvhStructTelephonyDirectoryModifyPublicationResponse
	 */
	public function telephonyDirectoryModifyPublication(OvhStructTelephonyDirectoryModifyPublication $_ovhStructTelephonyDirectoryModifyPublication)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyDirectoryModifyPublication($_ovhStructTelephonyDirectoryModifyPublication->getSession(),$_ovhStructTelephonyDirectoryModifyPublication->getCallNumber(),$_ovhStructTelephonyDirectoryModifyPublication->getCountryCode(),$_ovhStructTelephonyDirectoryModifyPublication->getLineDescription(),$_ovhStructTelephonyDirectoryModifyPublication->getDisplayFirstName(),$_ovhStructTelephonyDirectoryModifyPublication->getDisplayOnlyCity(),$_ovhStructTelephonyDirectoryModifyPublication->getDisplayUniversalDirectory(),$_ovhStructTelephonyDirectoryModifyPublication->getDisplayMarketingDirectory(),$_ovhStructTelephonyDirectoryModifyPublication->getDisplaySearchReverse(),$_ovhStructTelephonyDirectoryModifyPublication->getReceivePJDirectory()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPhonebookOnGroupAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPhonebookOnGroupAdd::getSession()
	 * @uses OvhStructTelephonyPhonebookOnGroupAdd::getGroup()
	 * @uses OvhStructTelephonyPhonebookOnGroupAdd::getName()
	 * @param OvhStructTelephonyPhonebookOnGroupAdd $_ovhStructTelephonyPhonebookOnGroupAdd
	 * @return OvhStructTelephonyPhonebookOnGroupAddResponse
	 */
	public function telephonyPhonebookOnGroupAdd(OvhStructTelephonyPhonebookOnGroupAdd $_ovhStructTelephonyPhonebookOnGroupAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPhonebookOnGroupAdd($_ovhStructTelephonyPhonebookOnGroupAdd->getSession(),$_ovhStructTelephonyPhonebookOnGroupAdd->getGroup(),$_ovhStructTelephonyPhonebookOnGroupAdd->getName()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyLineSwitchOfferPossibility
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyLineSwitchOfferPossibility::getSession()
	 * @uses OvhStructTelephonyLineSwitchOfferPossibility::getNumber()
	 * @uses OvhStructTelephonyLineSwitchOfferPossibility::getCountry()
	 * @param OvhStructTelephonyLineSwitchOfferPossibility $_ovhStructTelephonyLineSwitchOfferPossibility
	 * @return OvhStructTelephonyLineSwitchOfferPossibilityResponse
	 */
	public function telephonyLineSwitchOfferPossibility(OvhStructTelephonyLineSwitchOfferPossibility $_ovhStructTelephonyLineSwitchOfferPossibility)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyLineSwitchOfferPossibility($_ovhStructTelephonyLineSwitchOfferPossibility->getSession(),$_ovhStructTelephonyLineSwitchOfferPossibility->getNumber(),$_ovhStructTelephonyLineSwitchOfferPossibility->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsSenderList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsSenderList::getSession()
	 * @uses OvhStructTelephonySmsSenderList::getSmsAccount()
	 * @param OvhStructTelephonySmsSenderList $_ovhStructTelephonySmsSenderList
	 * @return OvhStructTelephonySmsSenderListResponse
	 */
	public function telephonySmsSenderList(OvhStructTelephonySmsSenderList $_ovhStructTelephonySmsSenderList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsSenderList($_ovhStructTelephonySmsSenderList->getSession(),$_ovhStructTelephonySmsSenderList->getSmsAccount()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySipToAliasOffer
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySipToAliasOffer::getSession()
	 * @uses OvhStructTelephonySipToAliasOffer::getNumber()
	 * @uses OvhStructTelephonySipToAliasOffer::getCountry()
	 * @uses OvhStructTelephonySipToAliasOffer::getDelete()
	 * @param OvhStructTelephonySipToAliasOffer $_ovhStructTelephonySipToAliasOffer
	 * @return OvhStructTelephonySipToAliasOfferResponse
	 */
	public function telephonySipToAliasOffer(OvhStructTelephonySipToAliasOffer $_ovhStructTelephonySipToAliasOffer)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySipToAliasOffer($_ovhStructTelephonySipToAliasOffer->getSession(),$_ovhStructTelephonySipToAliasOffer->getNumber(),$_ovhStructTelephonySipToAliasOffer->getCountry(),$_ovhStructTelephonySipToAliasOffer->getDelete()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyFunctionKeyList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyFunctionKeyList::getSession()
	 * @uses OvhStructTelephonyFunctionKeyList::getNumber()
	 * @uses OvhStructTelephonyFunctionKeyList::getCountry()
	 * @param OvhStructTelephonyFunctionKeyList $_ovhStructTelephonyFunctionKeyList
	 * @return OvhStructTelephonyFunctionKeyListResponse
	 */
	public function telephonyFunctionKeyList(OvhStructTelephonyFunctionKeyList $_ovhStructTelephonyFunctionKeyList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyFunctionKeyList($_ovhStructTelephonyFunctionKeyList->getSession(),$_ovhStructTelephonyFunctionKeyList->getNumber(),$_ovhStructTelephonyFunctionKeyList->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsGetCallBack
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsGetCallBack::getSession()
	 * @uses OvhStructTelephonySmsGetCallBack::getSmsAccount()
	 * @param OvhStructTelephonySmsGetCallBack $_ovhStructTelephonySmsGetCallBack
	 * @return OvhStructTelephonySmsGetCallBackResponse
	 */
	public function telephonySmsGetCallBack(OvhStructTelephonySmsGetCallBack $_ovhStructTelephonySmsGetCallBack)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsGetCallBack($_ovhStructTelephonySmsGetCallBack->getSession(),$_ovhStructTelephonySmsGetCallBack->getSmsAccount()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySviModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySviModify::getSession()
	 * @uses OvhStructTelephonySviModify::getNumber()
	 * @uses OvhStructTelephonySviModify::getCountry()
	 * @uses OvhStructTelephonySviModify::getUrl()
	 * @uses OvhStructTelephonySviModify::getRecordinfo()
	 * @param OvhStructTelephonySviModify $_ovhStructTelephonySviModify
	 * @return OvhStructTelephonySviModifyResponse
	 */
	public function telephonySviModify(OvhStructTelephonySviModify $_ovhStructTelephonySviModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySviModify($_ovhStructTelephonySviModify->getSession(),$_ovhStructTelephonySviModify->getNumber(),$_ovhStructTelephonySviModify->getCountry(),$_ovhStructTelephonySviModify->getUrl(),$_ovhStructTelephonySviModify->getRecordinfo()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsplusServiceDelete
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsplusServiceDelete::getSession()
	 * @uses OvhStructTelephonySmsplusServiceDelete::getShortCode()
	 * @uses OvhStructTelephonySmsplusServiceDelete::getKeyword()
	 * @uses OvhStructTelephonySmsplusServiceDelete::getCancelDelete()
	 * @param OvhStructTelephonySmsplusServiceDelete $_ovhStructTelephonySmsplusServiceDelete
	 * @return OvhStructTelephonySmsplusServiceDeleteResponse
	 */
	public function telephonySmsplusServiceDelete(OvhStructTelephonySmsplusServiceDelete $_ovhStructTelephonySmsplusServiceDelete)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsplusServiceDelete($_ovhStructTelephonySmsplusServiceDelete->getSession(),$_ovhStructTelephonySmsplusServiceDelete->getShortCode(),$_ovhStructTelephonySmsplusServiceDelete->getKeyword(),$_ovhStructTelephonySmsplusServiceDelete->getCancelDelete()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyLineSwitchOffer
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyLineSwitchOffer::getSession()
	 * @uses OvhStructTelephonyLineSwitchOffer::getNumber()
	 * @uses OvhStructTelephonyLineSwitchOffer::getCountry()
	 * @uses OvhStructTelephonyLineSwitchOffer::getOffer()
	 * @param OvhStructTelephonyLineSwitchOffer $_ovhStructTelephonyLineSwitchOffer
	 * @return OvhStructTelephonyLineSwitchOfferResponse
	 */
	public function telephonyLineSwitchOffer(OvhStructTelephonyLineSwitchOffer $_ovhStructTelephonyLineSwitchOffer)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyLineSwitchOffer($_ovhStructTelephonyLineSwitchOffer->getSession(),$_ovhStructTelephonyLineSwitchOffer->getNumber(),$_ovhStructTelephonyLineSwitchOffer->getCountry(),$_ovhStructTelephonyLineSwitchOffer->getOffer()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyTrunkExternalDisplayedNumberCheck
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyTrunkExternalDisplayedNumberCheck::getSession()
	 * @uses OvhStructTelephonyTrunkExternalDisplayedNumberCheck::getNumber()
	 * @uses OvhStructTelephonyTrunkExternalDisplayedNumberCheck::getCountry()
	 * @uses OvhStructTelephonyTrunkExternalDisplayedNumberCheck::getExternalDisplayedNumber()
	 * @param OvhStructTelephonyTrunkExternalDisplayedNumberCheck $_ovhStructTelephonyTrunkExternalDisplayedNumberCheck
	 * @return OvhStructTelephonyTrunkExternalDisplayedNumberCheckResponse
	 */
	public function telephonyTrunkExternalDisplayedNumberCheck(OvhStructTelephonyTrunkExternalDisplayedNumberCheck $_ovhStructTelephonyTrunkExternalDisplayedNumberCheck)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyTrunkExternalDisplayedNumberCheck($_ovhStructTelephonyTrunkExternalDisplayedNumberCheck->getSession(),$_ovhStructTelephonyTrunkExternalDisplayedNumberCheck->getNumber(),$_ovhStructTelephonyTrunkExternalDisplayedNumberCheck->getCountry(),$_ovhStructTelephonyTrunkExternalDisplayedNumberCheck->getExternalDisplayedNumber()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyDelClosureEvents
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyDelClosureEvents::getSession()
	 * @uses OvhStructTelephonyDelClosureEvents::getNumber()
	 * @uses OvhStructTelephonyDelClosureEvents::getCountry()
	 * @uses OvhStructTelephonyDelClosureEvents::getDeleteAll()
	 * @uses OvhStructTelephonyDelClosureEvents::getUids()
	 * @param OvhStructTelephonyDelClosureEvents $_ovhStructTelephonyDelClosureEvents
	 * @return OvhStructTelephonyDelClosureEventsResponse
	 */
	public function telephonyDelClosureEvents(OvhStructTelephonyDelClosureEvents $_ovhStructTelephonyDelClosureEvents)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyDelClosureEvents($_ovhStructTelephonyDelClosureEvents->getSession(),$_ovhStructTelephonyDelClosureEvents->getNumber(),$_ovhStructTelephonyDelClosureEvents->getCountry(),$_ovhStructTelephonyDelClosureEvents->getDeleteAll(),$_ovhStructTelephonyDelClosureEvents->getUids()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyFreefaxToVoicefaxCheckList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyFreefaxToVoicefaxCheckList::getSession()
	 * @uses OvhStructTelephonyFreefaxToVoicefaxCheckList::getBillingAccount()
	 * @param OvhStructTelephonyFreefaxToVoicefaxCheckList $_ovhStructTelephonyFreefaxToVoicefaxCheckList
	 * @return OvhStructTelephonyFreefaxToVoicefaxCheckListResponse
	 */
	public function telephonyFreefaxToVoicefaxCheckList(OvhStructTelephonyFreefaxToVoicefaxCheckList $_ovhStructTelephonyFreefaxToVoicefaxCheckList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyFreefaxToVoicefaxCheckList($_ovhStructTelephonyFreefaxToVoicefaxCheckList->getSession(),$_ovhStructTelephonyFreefaxToVoicefaxCheckList->getBillingAccount()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyVoicemailModifyPassword
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyVoicemailModifyPassword::getSession()
	 * @uses OvhStructTelephonyVoicemailModifyPassword::getNumber()
	 * @uses OvhStructTelephonyVoicemailModifyPassword::getCountry()
	 * @uses OvhStructTelephonyVoicemailModifyPassword::getPassword()
	 * @uses OvhStructTelephonyVoicemailModifyPassword::getForcePassword()
	 * @param OvhStructTelephonyVoicemailModifyPassword $_ovhStructTelephonyVoicemailModifyPassword
	 * @return OvhStructTelephonyVoicemailModifyPasswordResponse
	 */
	public function telephonyVoicemailModifyPassword(OvhStructTelephonyVoicemailModifyPassword $_ovhStructTelephonyVoicemailModifyPassword)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyVoicemailModifyPassword($_ovhStructTelephonyVoicemailModifyPassword->getSession(),$_ovhStructTelephonyVoicemailModifyPassword->getNumber(),$_ovhStructTelephonyVoicemailModifyPassword->getCountry(),$_ovhStructTelephonyVoicemailModifyPassword->getPassword(),$_ovhStructTelephonyVoicemailModifyPassword->getForcePassword()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySpareCapabilities
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySpareCapabilities::getSession()
	 * @uses OvhStructTelephonySpareCapabilities::getType()
	 * @uses OvhStructTelephonySpareCapabilities::getFamily()
	 * @uses OvhStructTelephonySpareCapabilities::getModel()
	 * @param OvhStructTelephonySpareCapabilities $_ovhStructTelephonySpareCapabilities
	 * @return OvhStructTelephonySpareCapabilitiesResponse
	 */
	public function telephonySpareCapabilities(OvhStructTelephonySpareCapabilities $_ovhStructTelephonySpareCapabilities)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySpareCapabilities($_ovhStructTelephonySpareCapabilities->getSession(),$_ovhStructTelephonySpareCapabilities->getType(),$_ovhStructTelephonySpareCapabilities->getFamily(),$_ovhStructTelephonySpareCapabilities->getModel()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPhonebookOnSmsDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPhonebookOnSmsDel::getSession()
	 * @uses OvhStructTelephonyPhonebookOnSmsDel::getSmsAccount()
	 * @uses OvhStructTelephonyPhonebookOnSmsDel::getId()
	 * @param OvhStructTelephonyPhonebookOnSmsDel $_ovhStructTelephonyPhonebookOnSmsDel
	 * @return OvhStructTelephonyPhonebookOnSmsDelResponse
	 */
	public function telephonyPhonebookOnSmsDel(OvhStructTelephonyPhonebookOnSmsDel $_ovhStructTelephonyPhonebookOnSmsDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPhonebookOnSmsDel($_ovhStructTelephonyPhonebookOnSmsDel->getSession(),$_ovhStructTelephonyPhonebookOnSmsDel->getSmsAccount(),$_ovhStructTelephonyPhonebookOnSmsDel->getId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPhonebookShare
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPhonebookShare::getSession()
	 * @uses OvhStructTelephonyPhonebookShare::getNumber()
	 * @uses OvhStructTelephonyPhonebookShare::getCountry()
	 * @uses OvhStructTelephonyPhonebookShare::getId()
	 * @uses OvhStructTelephonyPhonebookShare::getTargetNumber()
	 * @uses OvhStructTelephonyPhonebookShare::getName()
	 * @uses OvhStructTelephonyPhonebookShare::getMode()
	 * @param OvhStructTelephonyPhonebookShare $_ovhStructTelephonyPhonebookShare
	 * @return OvhStructTelephonyPhonebookShareResponse
	 */
	public function telephonyPhonebookShare(OvhStructTelephonyPhonebookShare $_ovhStructTelephonyPhonebookShare)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPhonebookShare($_ovhStructTelephonyPhonebookShare->getSession(),$_ovhStructTelephonyPhonebookShare->getNumber(),$_ovhStructTelephonyPhonebookShare->getCountry(),$_ovhStructTelephonyPhonebookShare->getId(),$_ovhStructTelephonyPhonebookShare->getTargetNumber(),$_ovhStructTelephonyPhonebookShare->getName(),$_ovhStructTelephonyPhonebookShare->getMode()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsSetUserQuota
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsSetUserQuota::getSession()
	 * @uses OvhStructTelephonySmsSetUserQuota::getSmsAccount()
	 * @uses OvhStructTelephonySmsSetUserQuota::getLogin()
	 * @uses OvhStructTelephonySmsSetUserQuota::getStatus()
	 * @uses OvhStructTelephonySmsSetUserQuota::getQuotaDiff()
	 * @param OvhStructTelephonySmsSetUserQuota $_ovhStructTelephonySmsSetUserQuota
	 * @return OvhStructTelephonySmsSetUserQuotaResponse
	 */
	public function telephonySmsSetUserQuota(OvhStructTelephonySmsSetUserQuota $_ovhStructTelephonySmsSetUserQuota)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsSetUserQuota($_ovhStructTelephonySmsSetUserQuota->getSession(),$_ovhStructTelephonySmsSetUserQuota->getSmsAccount(),$_ovhStructTelephonySmsSetUserQuota->getLogin(),$_ovhStructTelephonySmsSetUserQuota->getStatus(),$_ovhStructTelephonySmsSetUserQuota->getQuotaDiff()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsHistoryCsv
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsHistoryCsv::getSession()
	 * @uses OvhStructTelephonySmsHistoryCsv::getSmsAccount()
	 * @uses OvhStructTelephonySmsHistoryCsv::getSmsId()
	 * @uses OvhStructTelephonySmsHistoryCsv::getUser()
	 * @uses OvhStructTelephonySmsHistoryCsv::getPagingStart()
	 * @uses OvhStructTelephonySmsHistoryCsv::getPagingLimit()
	 * @uses OvhStructTelephonySmsHistoryCsv::getSortField()
	 * @uses OvhStructTelephonySmsHistoryCsv::getSortOrder()
	 * @uses OvhStructTelephonySmsHistoryCsv::getTag()
	 * @uses OvhStructTelephonySmsHistoryCsv::getFilter()
	 * @param OvhStructTelephonySmsHistoryCsv $_ovhStructTelephonySmsHistoryCsv
	 * @return OvhStructTelephonySmsHistoryCsvResponse
	 */
	public function telephonySmsHistoryCsv(OvhStructTelephonySmsHistoryCsv $_ovhStructTelephonySmsHistoryCsv)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsHistoryCsv($_ovhStructTelephonySmsHistoryCsv->getSession(),$_ovhStructTelephonySmsHistoryCsv->getSmsAccount(),$_ovhStructTelephonySmsHistoryCsv->getSmsId(),$_ovhStructTelephonySmsHistoryCsv->getUser(),$_ovhStructTelephonySmsHistoryCsv->getPagingStart(),$_ovhStructTelephonySmsHistoryCsv->getPagingLimit(),$_ovhStructTelephonySmsHistoryCsv->getSortField(),$_ovhStructTelephonySmsHistoryCsv->getSortOrder(),$_ovhStructTelephonySmsHistoryCsv->getTag(),$_ovhStructTelephonySmsHistoryCsv->getFilter()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyAbbreviatedNumberOnGroupList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyAbbreviatedNumberOnGroupList::getSession()
	 * @uses OvhStructTelephonyAbbreviatedNumberOnGroupList::getGroup()
	 * @param OvhStructTelephonyAbbreviatedNumberOnGroupList $_ovhStructTelephonyAbbreviatedNumberOnGroupList
	 * @return OvhStructTelephonyAbbreviatedNumberOnGroupListResponse
	 */
	public function telephonyAbbreviatedNumberOnGroupList(OvhStructTelephonyAbbreviatedNumberOnGroupList $_ovhStructTelephonyAbbreviatedNumberOnGroupList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyAbbreviatedNumberOnGroupList($_ovhStructTelephonyAbbreviatedNumberOnGroupList->getSession(),$_ovhStructTelephonyAbbreviatedNumberOnGroupList->getGroup()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyLineLogs
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyLineLogs::getSession()
	 * @uses OvhStructTelephonyLineLogs::getNumber()
	 * @uses OvhStructTelephonyLineLogs::getCountry()
	 * @uses OvhStructTelephonyLineLogs::getPagingStart()
	 * @uses OvhStructTelephonyLineLogs::getPagingLimit()
	 * @param OvhStructTelephonyLineLogs $_ovhStructTelephonyLineLogs
	 * @return OvhStructTelephonyLineLogsResponse
	 */
	public function telephonyLineLogs(OvhStructTelephonyLineLogs $_ovhStructTelephonyLineLogs)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyLineLogs($_ovhStructTelephonyLineLogs->getSession(),$_ovhStructTelephonyLineLogs->getNumber(),$_ovhStructTelephonyLineLogs->getCountry(),$_ovhStructTelephonyLineLogs->getPagingStart(),$_ovhStructTelephonyLineLogs->getPagingLimit()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySpareReplace
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySpareReplace::getSession()
	 * @uses OvhStructTelephonySpareReplace::getType()
	 * @uses OvhStructTelephonySpareReplace::getService()
	 * @uses OvhStructTelephonySpareReplace::getSpare()
	 * @uses OvhStructTelephonySpareReplace::getAction()
	 * @uses OvhStructTelephonySpareReplace::getIp()
	 * @param OvhStructTelephonySpareReplace $_ovhStructTelephonySpareReplace
	 * @return OvhStructTelephonySpareReplaceResponse
	 */
	public function telephonySpareReplace(OvhStructTelephonySpareReplace $_ovhStructTelephonySpareReplace)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySpareReplace($_ovhStructTelephonySpareReplace->getSession(),$_ovhStructTelephonySpareReplace->getType(),$_ovhStructTelephonySpareReplace->getService(),$_ovhStructTelephonySpareReplace->getSpare(),$_ovhStructTelephonySpareReplace->getAction(),$_ovhStructTelephonySpareReplace->getIp()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyClick2CallUserList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyClick2CallUserList::getSession()
	 * @uses OvhStructTelephonyClick2CallUserList::getNumber()
	 * @uses OvhStructTelephonyClick2CallUserList::getCountry()
	 * @param OvhStructTelephonyClick2CallUserList $_ovhStructTelephonyClick2CallUserList
	 * @return OvhStructTelephonyClick2CallUserListResponse
	 */
	public function telephonyClick2CallUserList(OvhStructTelephonyClick2CallUserList $_ovhStructTelephonyClick2CallUserList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyClick2CallUserList($_ovhStructTelephonyClick2CallUserList->getSession(),$_ovhStructTelephonyClick2CallUserList->getNumber(),$_ovhStructTelephonyClick2CallUserList->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyVoicemailMailboxList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyVoicemailMailboxList::getSession()
	 * @uses OvhStructTelephonyVoicemailMailboxList::getNumber()
	 * @uses OvhStructTelephonyVoicemailMailboxList::getCountry()
	 * @uses OvhStructTelephonyVoicemailMailboxList::getPagingStart()
	 * @uses OvhStructTelephonyVoicemailMailboxList::getPagingLimit()
	 * @uses OvhStructTelephonyVoicemailMailboxList::getSortField()
	 * @uses OvhStructTelephonyVoicemailMailboxList::getSortOrder()
	 * @param OvhStructTelephonyVoicemailMailboxList $_ovhStructTelephonyVoicemailMailboxList
	 * @return OvhStructTelephonyVoicemailMailboxListResponse
	 */
	public function telephonyVoicemailMailboxList(OvhStructTelephonyVoicemailMailboxList $_ovhStructTelephonyVoicemailMailboxList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyVoicemailMailboxList($_ovhStructTelephonyVoicemailMailboxList->getSession(),$_ovhStructTelephonyVoicemailMailboxList->getNumber(),$_ovhStructTelephonyVoicemailMailboxList->getCountry(),$_ovhStructTelephonyVoicemailMailboxList->getPagingStart(),$_ovhStructTelephonyVoicemailMailboxList->getPagingLimit(),$_ovhStructTelephonyVoicemailMailboxList->getSortField(),$_ovhStructTelephonyVoicemailMailboxList->getSortOrder()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyFaxCampaignDetails
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyFaxCampaignDetails::getSession()
	 * @uses OvhStructTelephonyFaxCampaignDetails::getNumber()
	 * @uses OvhStructTelephonyFaxCampaignDetails::getCountry()
	 * @uses OvhStructTelephonyFaxCampaignDetails::getReference()
	 * @uses OvhStructTelephonyFaxCampaignDetails::getSendRecipients()
	 * @param OvhStructTelephonyFaxCampaignDetails $_ovhStructTelephonyFaxCampaignDetails
	 * @return OvhStructTelephonyFaxCampaignDetailsResponse
	 */
	public function telephonyFaxCampaignDetails(OvhStructTelephonyFaxCampaignDetails $_ovhStructTelephonyFaxCampaignDetails)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyFaxCampaignDetails($_ovhStructTelephonyFaxCampaignDetails->getSession(),$_ovhStructTelephonyFaxCampaignDetails->getNumber(),$_ovhStructTelephonyFaxCampaignDetails->getCountry(),$_ovhStructTelephonyFaxCampaignDetails->getReference(),$_ovhStructTelephonyFaxCampaignDetails->getSendRecipients()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPhonebookOnGroupDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPhonebookOnGroupDel::getSession()
	 * @uses OvhStructTelephonyPhonebookOnGroupDel::getGroup()
	 * @uses OvhStructTelephonyPhonebookOnGroupDel::getId()
	 * @param OvhStructTelephonyPhonebookOnGroupDel $_ovhStructTelephonyPhonebookOnGroupDel
	 * @return OvhStructTelephonyPhonebookOnGroupDelResponse
	 */
	public function telephonyPhonebookOnGroupDel(OvhStructTelephonyPhonebookOnGroupDel $_ovhStructTelephonyPhonebookOnGroupDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPhonebookOnGroupDel($_ovhStructTelephonyPhonebookOnGroupDel->getSession(),$_ovhStructTelephonyPhonebookOnGroupDel->getGroup(),$_ovhStructTelephonyPhonebookOnGroupDel->getId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPhonebookOnGroupList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPhonebookOnGroupList::getSession()
	 * @uses OvhStructTelephonyPhonebookOnGroupList::getGroup()
	 * @param OvhStructTelephonyPhonebookOnGroupList $_ovhStructTelephonyPhonebookOnGroupList
	 * @return OvhStructTelephonyPhonebookOnGroupListResponse
	 */
	public function telephonyPhonebookOnGroupList(OvhStructTelephonyPhonebookOnGroupList $_ovhStructTelephonyPhonebookOnGroupList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPhonebookOnGroupList($_ovhStructTelephonyPhonebookOnGroupList->getSession(),$_ovhStructTelephonyPhonebookOnGroupList->getGroup()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySpecialNumberCustomList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySpecialNumberCustomList::getSession()
	 * @uses OvhStructTelephonySpecialNumberCustomList::getCountry()
	 * @uses OvhStructTelephonySpecialNumberCustomList::getPrefix()
	 * @param OvhStructTelephonySpecialNumberCustomList $_ovhStructTelephonySpecialNumberCustomList
	 * @return OvhStructTelephonySpecialNumberCustomListResponse
	 */
	public function telephonySpecialNumberCustomList(OvhStructTelephonySpecialNumberCustomList $_ovhStructTelephonySpecialNumberCustomList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySpecialNumberCustomList($_ovhStructTelephonySpecialNumberCustomList->getSession(),$_ovhStructTelephonySpecialNumberCustomList->getCountry(),$_ovhStructTelephonySpecialNumberCustomList->getPrefix()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyFMHuntingModificationSimultaneousCalls
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyFMHuntingModificationSimultaneousCalls::getSession()
	 * @uses OvhStructTelephonyFMHuntingModificationSimultaneousCalls::getNumber()
	 * @uses OvhStructTelephonyFMHuntingModificationSimultaneousCalls::getCountry()
	 * @uses OvhStructTelephonyFMHuntingModificationSimultaneousCalls::getBillingAccount()
	 * @uses OvhStructTelephonyFMHuntingModificationSimultaneousCalls::getNumberOfCalls()
	 * @param OvhStructTelephonyFMHuntingModificationSimultaneousCalls $_ovhStructTelephonyFMHuntingModificationSimultaneousCalls
	 * @return OvhStructTelephonyFMHuntingModificationSimultaneousCallsResponse
	 */
	public function telephonyFMHuntingModificationSimultaneousCalls(OvhStructTelephonyFMHuntingModificationSimultaneousCalls $_ovhStructTelephonyFMHuntingModificationSimultaneousCalls)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyFMHuntingModificationSimultaneousCalls($_ovhStructTelephonyFMHuntingModificationSimultaneousCalls->getSession(),$_ovhStructTelephonyFMHuntingModificationSimultaneousCalls->getNumber(),$_ovhStructTelephonyFMHuntingModificationSimultaneousCalls->getCountry(),$_ovhStructTelephonyFMHuntingModificationSimultaneousCalls->getBillingAccount(),$_ovhStructTelephonyFMHuntingModificationSimultaneousCalls->getNumberOfCalls()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyVoicemailMailboxDownload
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyVoicemailMailboxDownload::getSession()
	 * @uses OvhStructTelephonyVoicemailMailboxDownload::getNumber()
	 * @uses OvhStructTelephonyVoicemailMailboxDownload::getCountry()
	 * @uses OvhStructTelephonyVoicemailMailboxDownload::getId()
	 * @uses OvhStructTelephonyVoicemailMailboxDownload::getFormat()
	 * @uses OvhStructTelephonyVoicemailMailboxDownload::getFolder()
	 * @param OvhStructTelephonyVoicemailMailboxDownload $_ovhStructTelephonyVoicemailMailboxDownload
	 * @return OvhStructTelephonyVoicemailMailboxDownloadResponse
	 */
	public function telephonyVoicemailMailboxDownload(OvhStructTelephonyVoicemailMailboxDownload $_ovhStructTelephonyVoicemailMailboxDownload)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyVoicemailMailboxDownload($_ovhStructTelephonyVoicemailMailboxDownload->getSession(),$_ovhStructTelephonyVoicemailMailboxDownload->getNumber(),$_ovhStructTelephonyVoicemailMailboxDownload->getCountry(),$_ovhStructTelephonyVoicemailMailboxDownload->getId(),$_ovhStructTelephonyVoicemailMailboxDownload->getFormat(),$_ovhStructTelephonyVoicemailMailboxDownload->getFolder()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyNicGetIpRestriction
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyNicGetIpRestriction::getSession()
	 * @param OvhStructTelephonyNicGetIpRestriction $_ovhStructTelephonyNicGetIpRestriction
	 * @return OvhStructTelephonyNicGetIpRestrictionResponse
	 */
	public function telephonyNicGetIpRestriction(OvhStructTelephonyNicGetIpRestriction $_ovhStructTelephonyNicGetIpRestriction)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyNicGetIpRestriction($_ovhStructTelephonyNicGetIpRestriction->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyGetClosureEventsAsArray
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyGetClosureEventsAsArray::getSession()
	 * @uses OvhStructTelephonyGetClosureEventsAsArray::getNumber()
	 * @uses OvhStructTelephonyGetClosureEventsAsArray::getCountry()
	 * @uses OvhStructTelephonyGetClosureEventsAsArray::getDateStart()
	 * @uses OvhStructTelephonyGetClosureEventsAsArray::getDateEnd()
	 * @uses OvhStructTelephonyGetClosureEventsAsArray::getCategories()
	 * @param OvhStructTelephonyGetClosureEventsAsArray $_ovhStructTelephonyGetClosureEventsAsArray
	 * @return OvhStructTelephonyGetClosureEventsAsArrayResponse
	 */
	public function telephonyGetClosureEventsAsArray(OvhStructTelephonyGetClosureEventsAsArray $_ovhStructTelephonyGetClosureEventsAsArray)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyGetClosureEventsAsArray($_ovhStructTelephonyGetClosureEventsAsArray->getSession(),$_ovhStructTelephonyGetClosureEventsAsArray->getNumber(),$_ovhStructTelephonyGetClosureEventsAsArray->getCountry(),$_ovhStructTelephonyGetClosureEventsAsArray->getDateStart(),$_ovhStructTelephonyGetClosureEventsAsArray->getDateEnd(),$_ovhStructTelephonyGetClosureEventsAsArray->getCategories()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPhonebookOnSmsContactDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPhonebookOnSmsContactDel::getSession()
	 * @uses OvhStructTelephonyPhonebookOnSmsContactDel::getSmsAccount()
	 * @uses OvhStructTelephonyPhonebookOnSmsContactDel::getId()
	 * @param OvhStructTelephonyPhonebookOnSmsContactDel $_ovhStructTelephonyPhonebookOnSmsContactDel
	 * @return OvhStructTelephonyPhonebookOnSmsContactDelResponse
	 */
	public function telephonyPhonebookOnSmsContactDel(OvhStructTelephonyPhonebookOnSmsContactDel $_ovhStructTelephonyPhonebookOnSmsContactDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPhonebookOnSmsContactDel($_ovhStructTelephonyPhonebookOnSmsContactDel->getSession(),$_ovhStructTelephonyPhonebookOnSmsContactDel->getSmsAccount(),$_ovhStructTelephonyPhonebookOnSmsContactDel->getId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyReversmentsRefundIsPending
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyReversmentsRefundIsPending::getSession()
	 * @uses OvhStructTelephonyReversmentsRefundIsPending::getBillingAccount()
	 * @param OvhStructTelephonyReversmentsRefundIsPending $_ovhStructTelephonyReversmentsRefundIsPending
	 * @return OvhStructTelephonyReversmentsRefundIsPendingResponse
	 */
	public function telephonyReversmentsRefundIsPending(OvhStructTelephonyReversmentsRefundIsPending $_ovhStructTelephonyReversmentsRefundIsPending)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyReversmentsRefundIsPending($_ovhStructTelephonyReversmentsRefundIsPending->getSession(),$_ovhStructTelephonyReversmentsRefundIsPending->getBillingAccount()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyScreenListInfoModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyScreenListInfoModify::getSession()
	 * @uses OvhStructTelephonyScreenListInfoModify::getNumber()
	 * @uses OvhStructTelephonyScreenListInfoModify::getCountry()
	 * @uses OvhStructTelephonyScreenListInfoModify::getScreenListType()
	 * @uses OvhStructTelephonyScreenListInfoModify::getNumbersScreen()
	 * @uses OvhStructTelephonyScreenListInfoModify::getNaturesScreen()
	 * @param OvhStructTelephonyScreenListInfoModify $_ovhStructTelephonyScreenListInfoModify
	 * @return OvhStructTelephonyScreenListInfoModifyResponse
	 */
	public function telephonyScreenListInfoModify(OvhStructTelephonyScreenListInfoModify $_ovhStructTelephonyScreenListInfoModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyScreenListInfoModify($_ovhStructTelephonyScreenListInfoModify->getSession(),$_ovhStructTelephonyScreenListInfoModify->getNumber(),$_ovhStructTelephonyScreenListInfoModify->getCountry(),$_ovhStructTelephonyScreenListInfoModify->getScreenListType(),$_ovhStructTelephonyScreenListInfoModify->getNumbersScreen(),$_ovhStructTelephonyScreenListInfoModify->getNaturesScreen()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsplusServiceReversableTicketsList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsplusServiceReversableTicketsList::getSession()
	 * @uses OvhStructTelephonySmsplusServiceReversableTicketsList::getShortCode()
	 * @uses OvhStructTelephonySmsplusServiceReversableTicketsList::getKeyword()
	 * @uses OvhStructTelephonySmsplusServiceReversableTicketsList::getReversableDelay()
	 * @uses OvhStructTelephonySmsplusServiceReversableTicketsList::getLimit()
	 * @uses OvhStructTelephonySmsplusServiceReversableTicketsList::getLimitOffset()
	 * @uses OvhStructTelephonySmsplusServiceReversableTicketsList::getSort()
	 * @uses OvhStructTelephonySmsplusServiceReversableTicketsList::getFilter()
	 * @param OvhStructTelephonySmsplusServiceReversableTicketsList $_ovhStructTelephonySmsplusServiceReversableTicketsList
	 * @return OvhStructTelephonySmsplusServiceReversableTicketsListResponse
	 */
	public function telephonySmsplusServiceReversableTicketsList(OvhStructTelephonySmsplusServiceReversableTicketsList $_ovhStructTelephonySmsplusServiceReversableTicketsList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsplusServiceReversableTicketsList($_ovhStructTelephonySmsplusServiceReversableTicketsList->getSession(),$_ovhStructTelephonySmsplusServiceReversableTicketsList->getShortCode(),$_ovhStructTelephonySmsplusServiceReversableTicketsList->getKeyword(),$_ovhStructTelephonySmsplusServiceReversableTicketsList->getReversableDelay(),$_ovhStructTelephonySmsplusServiceReversableTicketsList->getLimit(),$_ovhStructTelephonySmsplusServiceReversableTicketsList->getLimitOffset(),$_ovhStructTelephonySmsplusServiceReversableTicketsList->getSort(),$_ovhStructTelephonySmsplusServiceReversableTicketsList->getFilter()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyHuntingGenericScreenStatusModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyHuntingGenericScreenStatusModify::getSession()
	 * @uses OvhStructTelephonyHuntingGenericScreenStatusModify::getNumber()
	 * @uses OvhStructTelephonyHuntingGenericScreenStatusModify::getCountry()
	 * @uses OvhStructTelephonyHuntingGenericScreenStatusModify::getStatus()
	 * @param OvhStructTelephonyHuntingGenericScreenStatusModify $_ovhStructTelephonyHuntingGenericScreenStatusModify
	 * @return OvhStructTelephonyHuntingGenericScreenStatusModifyResponse
	 */
	public function telephonyHuntingGenericScreenStatusModify(OvhStructTelephonyHuntingGenericScreenStatusModify $_ovhStructTelephonyHuntingGenericScreenStatusModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyHuntingGenericScreenStatusModify($_ovhStructTelephonyHuntingGenericScreenStatusModify->getSession(),$_ovhStructTelephonyHuntingGenericScreenStatusModify->getNumber(),$_ovhStructTelephonyHuntingGenericScreenStatusModify->getCountry(),$_ovhStructTelephonyHuntingGenericScreenStatusModify->getStatus()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsBlacklistedSendersList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsBlacklistedSendersList::getSession()
	 * @uses OvhStructTelephonySmsBlacklistedSendersList::getSmsAccount()
	 * @uses OvhStructTelephonySmsBlacklistedSendersList::getPagingStart()
	 * @uses OvhStructTelephonySmsBlacklistedSendersList::getPagingLimit()
	 * @uses OvhStructTelephonySmsBlacklistedSendersList::getSortField()
	 * @uses OvhStructTelephonySmsBlacklistedSendersList::getSortOrder()
	 * @param OvhStructTelephonySmsBlacklistedSendersList $_ovhStructTelephonySmsBlacklistedSendersList
	 * @return OvhStructTelephonySmsBlacklistedSendersListResponse
	 */
	public function telephonySmsBlacklistedSendersList(OvhStructTelephonySmsBlacklistedSendersList $_ovhStructTelephonySmsBlacklistedSendersList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsBlacklistedSendersList($_ovhStructTelephonySmsBlacklistedSendersList->getSession(),$_ovhStructTelephonySmsBlacklistedSendersList->getSmsAccount(),$_ovhStructTelephonySmsBlacklistedSendersList->getPagingStart(),$_ovhStructTelephonySmsBlacklistedSendersList->getPagingLimit(),$_ovhStructTelephonySmsBlacklistedSendersList->getSortField(),$_ovhStructTelephonySmsBlacklistedSendersList->getSortOrder()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPhonebookContactAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPhonebookContactAdd::getSession()
	 * @uses OvhStructTelephonyPhonebookContactAdd::getNumber()
	 * @uses OvhStructTelephonyPhonebookContactAdd::getCountry()
	 * @uses OvhStructTelephonyPhonebookContactAdd::getId()
	 * @uses OvhStructTelephonyPhonebookContactAdd::getName()
	 * @uses OvhStructTelephonyPhonebookContactAdd::getSurname()
	 * @uses OvhStructTelephonyPhonebookContactAdd::getWorkPhone()
	 * @uses OvhStructTelephonyPhonebookContactAdd::getWorkMobile()
	 * @uses OvhStructTelephonyPhonebookContactAdd::getHomePhone()
	 * @uses OvhStructTelephonyPhonebookContactAdd::getHomeMobile()
	 * @uses OvhStructTelephonyPhonebookContactAdd::getGroup()
	 * @param OvhStructTelephonyPhonebookContactAdd $_ovhStructTelephonyPhonebookContactAdd
	 * @return OvhStructTelephonyPhonebookContactAddResponse
	 */
	public function telephonyPhonebookContactAdd(OvhStructTelephonyPhonebookContactAdd $_ovhStructTelephonyPhonebookContactAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPhonebookContactAdd($_ovhStructTelephonyPhonebookContactAdd->getSession(),$_ovhStructTelephonyPhonebookContactAdd->getNumber(),$_ovhStructTelephonyPhonebookContactAdd->getCountry(),$_ovhStructTelephonyPhonebookContactAdd->getId(),$_ovhStructTelephonyPhonebookContactAdd->getName(),$_ovhStructTelephonyPhonebookContactAdd->getSurname(),$_ovhStructTelephonyPhonebookContactAdd->getWorkPhone(),$_ovhStructTelephonyPhonebookContactAdd->getWorkMobile(),$_ovhStructTelephonyPhonebookContactAdd->getHomePhone(),$_ovhStructTelephonyPhonebookContactAdd->getHomeMobile(),$_ovhStructTelephonyPhonebookContactAdd->getGroup()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPortabilityOrderSpecialNumber
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPortabilityOrderSpecialNumber::getSession()
	 * @uses OvhStructTelephonyPortabilityOrderSpecialNumber::getBillingAccount()
	 * @uses OvhStructTelephonyPortabilityOrderSpecialNumber::getOffer()
	 * @uses OvhStructTelephonyPortabilityOrderSpecialNumber::getDesireDate()
	 * @uses OvhStructTelephonyPortabilityOrderSpecialNumber::getCallNumber()
	 * @uses OvhStructTelephonyPortabilityOrderSpecialNumber::getExtraNumbers()
	 * @uses OvhStructTelephonyPortabilityOrderSpecialNumber::getLegalForm()
	 * @uses OvhStructTelephonyPortabilityOrderSpecialNumber::getName()
	 * @uses OvhStructTelephonyPortabilityOrderSpecialNumber::getFirstName()
	 * @uses OvhStructTelephonyPortabilityOrderSpecialNumber::getSiret()
	 * @uses OvhStructTelephonyPortabilityOrderSpecialNumber::getStreetNumber()
	 * @uses OvhStructTelephonyPortabilityOrderSpecialNumber::getStreetNumberExtra()
	 * @uses OvhStructTelephonyPortabilityOrderSpecialNumber::getStreetType()
	 * @uses OvhStructTelephonyPortabilityOrderSpecialNumber::getStreetName()
	 * @uses OvhStructTelephonyPortabilityOrderSpecialNumber::getBuilding()
	 * @uses OvhStructTelephonyPortabilityOrderSpecialNumber::getStair()
	 * @uses OvhStructTelephonyPortabilityOrderSpecialNumber::getFloor()
	 * @uses OvhStructTelephonyPortabilityOrderSpecialNumber::getDoor()
	 * @uses OvhStructTelephonyPortabilityOrderSpecialNumber::getZip()
	 * @uses OvhStructTelephonyPortabilityOrderSpecialNumber::getCity()
	 * @uses OvhStructTelephonyPortabilityOrderSpecialNumber::getCountry()
	 * @uses OvhStructTelephonyPortabilityOrderSpecialNumber::getDisplayUniversalDirectory()
	 * @uses OvhStructTelephonyPortabilityOrderSpecialNumber::getCategory()
	 * @uses OvhStructTelephonyPortabilityOrderSpecialNumber::getContactName()
	 * @uses OvhStructTelephonyPortabilityOrderSpecialNumber::getContactNumber()
	 * @param OvhStructTelephonyPortabilityOrderSpecialNumber $_ovhStructTelephonyPortabilityOrderSpecialNumber
	 * @return OvhStructTelephonyPortabilityOrderSpecialNumberResponse
	 */
	public function telephonyPortabilityOrderSpecialNumber(OvhStructTelephonyPortabilityOrderSpecialNumber $_ovhStructTelephonyPortabilityOrderSpecialNumber)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPortabilityOrderSpecialNumber($_ovhStructTelephonyPortabilityOrderSpecialNumber->getSession(),$_ovhStructTelephonyPortabilityOrderSpecialNumber->getBillingAccount(),$_ovhStructTelephonyPortabilityOrderSpecialNumber->getOffer(),$_ovhStructTelephonyPortabilityOrderSpecialNumber->getDesireDate(),$_ovhStructTelephonyPortabilityOrderSpecialNumber->getCallNumber(),$_ovhStructTelephonyPortabilityOrderSpecialNumber->getExtraNumbers(),$_ovhStructTelephonyPortabilityOrderSpecialNumber->getLegalForm(),$_ovhStructTelephonyPortabilityOrderSpecialNumber->getName(),$_ovhStructTelephonyPortabilityOrderSpecialNumber->getFirstName(),$_ovhStructTelephonyPortabilityOrderSpecialNumber->getSiret(),$_ovhStructTelephonyPortabilityOrderSpecialNumber->getStreetNumber(),$_ovhStructTelephonyPortabilityOrderSpecialNumber->getStreetNumberExtra(),$_ovhStructTelephonyPortabilityOrderSpecialNumber->getStreetType(),$_ovhStructTelephonyPortabilityOrderSpecialNumber->getStreetName(),$_ovhStructTelephonyPortabilityOrderSpecialNumber->getBuilding(),$_ovhStructTelephonyPortabilityOrderSpecialNumber->getStair(),$_ovhStructTelephonyPortabilityOrderSpecialNumber->getFloor(),$_ovhStructTelephonyPortabilityOrderSpecialNumber->getDoor(),$_ovhStructTelephonyPortabilityOrderSpecialNumber->getZip(),$_ovhStructTelephonyPortabilityOrderSpecialNumber->getCity(),$_ovhStructTelephonyPortabilityOrderSpecialNumber->getCountry(),$_ovhStructTelephonyPortabilityOrderSpecialNumber->getDisplayUniversalDirectory(),$_ovhStructTelephonyPortabilityOrderSpecialNumber->getCategory(),$_ovhStructTelephonyPortabilityOrderSpecialNumber->getContactName(),$_ovhStructTelephonyPortabilityOrderSpecialNumber->getContactNumber()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsUserSetCallBack
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsUserSetCallBack::getSession()
	 * @uses OvhStructTelephonySmsUserSetCallBack::getSmsAccount()
	 * @uses OvhStructTelephonySmsUserSetCallBack::getLogin()
	 * @uses OvhStructTelephonySmsUserSetCallBack::getCallBack()
	 * @param OvhStructTelephonySmsUserSetCallBack $_ovhStructTelephonySmsUserSetCallBack
	 * @return OvhStructTelephonySmsUserSetCallBackResponse
	 */
	public function telephonySmsUserSetCallBack(OvhStructTelephonySmsUserSetCallBack $_ovhStructTelephonySmsUserSetCallBack)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsUserSetCallBack($_ovhStructTelephonySmsUserSetCallBack->getSession(),$_ovhStructTelephonySmsUserSetCallBack->getSmsAccount(),$_ovhStructTelephonySmsUserSetCallBack->getLogin(),$_ovhStructTelephonySmsUserSetCallBack->getCallBack()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPhonebookOnGroupModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPhonebookOnGroupModify::getSession()
	 * @uses OvhStructTelephonyPhonebookOnGroupModify::getGroup()
	 * @uses OvhStructTelephonyPhonebookOnGroupModify::getId()
	 * @uses OvhStructTelephonyPhonebookOnGroupModify::getName()
	 * @param OvhStructTelephonyPhonebookOnGroupModify $_ovhStructTelephonyPhonebookOnGroupModify
	 * @return OvhStructTelephonyPhonebookOnGroupModifyResponse
	 */
	public function telephonyPhonebookOnGroupModify(OvhStructTelephonyPhonebookOnGroupModify $_ovhStructTelephonyPhonebookOnGroupModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPhonebookOnGroupModify($_ovhStructTelephonyPhonebookOnGroupModify->getSession(),$_ovhStructTelephonyPhonebookOnGroupModify->getGroup(),$_ovhStructTelephonyPhonebookOnGroupModify->getId(),$_ovhStructTelephonyPhonebookOnGroupModify->getName()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyLineSwitchOldOfferPossibility
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyLineSwitchOldOfferPossibility::getSession()
	 * @uses OvhStructTelephonyLineSwitchOldOfferPossibility::getNumbers()
	 * @uses OvhStructTelephonyLineSwitchOldOfferPossibility::getCountry()
	 * @param OvhStructTelephonyLineSwitchOldOfferPossibility $_ovhStructTelephonyLineSwitchOldOfferPossibility
	 * @return OvhStructTelephonyLineSwitchOldOfferPossibilityResponse
	 */
	public function telephonyLineSwitchOldOfferPossibility(OvhStructTelephonyLineSwitchOldOfferPossibility $_ovhStructTelephonyLineSwitchOldOfferPossibility)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyLineSwitchOldOfferPossibility($_ovhStructTelephonyLineSwitchOldOfferPossibility->getSession(),$_ovhStructTelephonyLineSwitchOldOfferPossibility->getNumbers(),$_ovhStructTelephonyLineSwitchOldOfferPossibility->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsplusServiceList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsplusServiceList::getSession()
	 * @uses OvhStructTelephonySmsplusServiceList::getBillingAccount()
	 * @param OvhStructTelephonySmsplusServiceList $_ovhStructTelephonySmsplusServiceList
	 * @return OvhStructTelephonySmsplusServiceListResponse
	 */
	public function telephonySmsplusServiceList(OvhStructTelephonySmsplusServiceList $_ovhStructTelephonySmsplusServiceList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsplusServiceList($_ovhStructTelephonySmsplusServiceList->getSession(),$_ovhStructTelephonySmsplusServiceList->getBillingAccount()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyHuntingModificationAnonymousCallRejection
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyHuntingModificationAnonymousCallRejection::getSession()
	 * @uses OvhStructTelephonyHuntingModificationAnonymousCallRejection::getNumber()
	 * @uses OvhStructTelephonyHuntingModificationAnonymousCallRejection::getCountry()
	 * @uses OvhStructTelephonyHuntingModificationAnonymousCallRejection::getBillingAccount()
	 * @uses OvhStructTelephonyHuntingModificationAnonymousCallRejection::getAnonymousCallRejection()
	 * @param OvhStructTelephonyHuntingModificationAnonymousCallRejection $_ovhStructTelephonyHuntingModificationAnonymousCallRejection
	 * @return OvhStructTelephonyHuntingModificationAnonymousCallRejectionResponse
	 */
	public function telephonyHuntingModificationAnonymousCallRejection(OvhStructTelephonyHuntingModificationAnonymousCallRejection $_ovhStructTelephonyHuntingModificationAnonymousCallRejection)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyHuntingModificationAnonymousCallRejection($_ovhStructTelephonyHuntingModificationAnonymousCallRejection->getSession(),$_ovhStructTelephonyHuntingModificationAnonymousCallRejection->getNumber(),$_ovhStructTelephonyHuntingModificationAnonymousCallRejection->getCountry(),$_ovhStructTelephonyHuntingModificationAnonymousCallRejection->getBillingAccount(),$_ovhStructTelephonyHuntingModificationAnonymousCallRejection->getAnonymousCallRejection()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyNumberGetBillingAccount
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyNumberGetBillingAccount::getSession()
	 * @uses OvhStructTelephonyNumberGetBillingAccount::getNumber()
	 * @uses OvhStructTelephonyNumberGetBillingAccount::getCountry()
	 * @param OvhStructTelephonyNumberGetBillingAccount $_ovhStructTelephonyNumberGetBillingAccount
	 * @return OvhStructTelephonyNumberGetBillingAccountResponse
	 */
	public function telephonyNumberGetBillingAccount(OvhStructTelephonyNumberGetBillingAccount $_ovhStructTelephonyNumberGetBillingAccount)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyNumberGetBillingAccount($_ovhStructTelephonyNumberGetBillingAccount->getSession(),$_ovhStructTelephonyNumberGetBillingAccount->getNumber(),$_ovhStructTelephonyNumberGetBillingAccount->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyTonesOptionsList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyTonesOptionsList::getSession()
	 * @uses OvhStructTelephonyTonesOptionsList::getNumber()
	 * @uses OvhStructTelephonyTonesOptionsList::getCountry()
	 * @param OvhStructTelephonyTonesOptionsList $_ovhStructTelephonyTonesOptionsList
	 * @return OvhStructTelephonyTonesOptionsListResponse
	 */
	public function telephonyTonesOptionsList(OvhStructTelephonyTonesOptionsList $_ovhStructTelephonyTonesOptionsList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyTonesOptionsList($_ovhStructTelephonyTonesOptionsList->getSession(),$_ovhStructTelephonyTonesOptionsList->getNumber(),$_ovhStructTelephonyTonesOptionsList->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySpareList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySpareList::getSession()
	 * @uses OvhStructTelephonySpareList::getType()
	 * @uses OvhStructTelephonySpareList::getService()
	 * @param OvhStructTelephonySpareList $_ovhStructTelephonySpareList
	 * @return OvhStructTelephonySpareListResponse
	 */
	public function telephonySpareList(OvhStructTelephonySpareList $_ovhStructTelephonySpareList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySpareList($_ovhStructTelephonySpareList->getSession(),$_ovhStructTelephonySpareList->getType(),$_ovhStructTelephonySpareList->getService()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyListSummationCallsFromNumber
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyListSummationCallsFromNumber::getSession()
	 * @uses OvhStructTelephonyListSummationCallsFromNumber::getNumber()
	 * @uses OvhStructTelephonyListSummationCallsFromNumber::getCountry()
	 * @uses OvhStructTelephonyListSummationCallsFromNumber::getReversableDelay()
	 * @uses OvhStructTelephonyListSummationCallsFromNumber::getSortOrder()
	 * @uses OvhStructTelephonyListSummationCallsFromNumber::getSortField()
	 * @param OvhStructTelephonyListSummationCallsFromNumber $_ovhStructTelephonyListSummationCallsFromNumber
	 * @return OvhStructTelephonyListSummationCallsFromNumberResponse
	 */
	public function telephonyListSummationCallsFromNumber(OvhStructTelephonyListSummationCallsFromNumber $_ovhStructTelephonyListSummationCallsFromNumber)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyListSummationCallsFromNumber($_ovhStructTelephonyListSummationCallsFromNumber->getSession(),$_ovhStructTelephonyListSummationCallsFromNumber->getNumber(),$_ovhStructTelephonyListSummationCallsFromNumber->getCountry(),$_ovhStructTelephonyListSummationCallsFromNumber->getReversableDelay(),$_ovhStructTelephonyListSummationCallsFromNumber->getSortOrder(),$_ovhStructTelephonyListSummationCallsFromNumber->getSortField()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyConferenceGetParams
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyConferenceGetParams::getSession()
	 * @uses OvhStructTelephonyConferenceGetParams::getNumber()
	 * @uses OvhStructTelephonyConferenceGetParams::getCountry()
	 * @param OvhStructTelephonyConferenceGetParams $_ovhStructTelephonyConferenceGetParams
	 * @return OvhStructTelephonyConferenceGetParamsResponse
	 */
	public function telephonyConferenceGetParams(OvhStructTelephonyConferenceGetParams $_ovhStructTelephonyConferenceGetParams)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyConferenceGetParams($_ovhStructTelephonyConferenceGetParams->getSession(),$_ovhStructTelephonyConferenceGetParams->getNumber(),$_ovhStructTelephonyConferenceGetParams->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPhonebookContactModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPhonebookContactModify::getSession()
	 * @uses OvhStructTelephonyPhonebookContactModify::getNumber()
	 * @uses OvhStructTelephonyPhonebookContactModify::getCountry()
	 * @uses OvhStructTelephonyPhonebookContactModify::getId()
	 * @uses OvhStructTelephonyPhonebookContactModify::getName()
	 * @uses OvhStructTelephonyPhonebookContactModify::getSurname()
	 * @uses OvhStructTelephonyPhonebookContactModify::getWorkPhone()
	 * @uses OvhStructTelephonyPhonebookContactModify::getWorkMobile()
	 * @uses OvhStructTelephonyPhonebookContactModify::getHomePhone()
	 * @uses OvhStructTelephonyPhonebookContactModify::getHomeMobile()
	 * @uses OvhStructTelephonyPhonebookContactModify::getGroup()
	 * @param OvhStructTelephonyPhonebookContactModify $_ovhStructTelephonyPhonebookContactModify
	 * @return OvhStructTelephonyPhonebookContactModifyResponse
	 */
	public function telephonyPhonebookContactModify(OvhStructTelephonyPhonebookContactModify $_ovhStructTelephonyPhonebookContactModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPhonebookContactModify($_ovhStructTelephonyPhonebookContactModify->getSession(),$_ovhStructTelephonyPhonebookContactModify->getNumber(),$_ovhStructTelephonyPhonebookContactModify->getCountry(),$_ovhStructTelephonyPhonebookContactModify->getId(),$_ovhStructTelephonyPhonebookContactModify->getName(),$_ovhStructTelephonyPhonebookContactModify->getSurname(),$_ovhStructTelephonyPhonebookContactModify->getWorkPhone(),$_ovhStructTelephonyPhonebookContactModify->getWorkMobile(),$_ovhStructTelephonyPhonebookContactModify->getHomePhone(),$_ovhStructTelephonyPhonebookContactModify->getHomeMobile(),$_ovhStructTelephonyPhonebookContactModify->getGroup()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyLineList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyLineList::getSession()
	 * @uses OvhStructTelephonyLineList::getBillingAccount()
	 * @param OvhStructTelephonyLineList $_ovhStructTelephonyLineList
	 * @return OvhStructTelephonyLineListResponse
	 */
	public function telephonyLineList(OvhStructTelephonyLineList $_ovhStructTelephonyLineList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyLineList($_ovhStructTelephonyLineList->getSession(),$_ovhStructTelephonyLineList->getBillingAccount()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyLineOptionsModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyLineOptionsModify::getSession()
	 * @uses OvhStructTelephonyLineOptionsModify::getNumber()
	 * @uses OvhStructTelephonyLineOptionsModify::getCountry()
	 * @uses OvhStructTelephonyLineOptionsModify::getIdentificationRestriction()
	 * @uses OvhStructTelephonyLineOptionsModify::getAnonymousCallRejection()
	 * @uses OvhStructTelephonyLineOptionsModify::getDoNotDisturb()
	 * @uses OvhStructTelephonyLineOptionsModify::getAbsentSuscriber()
	 * @uses OvhStructTelephonyLineOptionsModify::getLockOutCall()
	 * @uses OvhStructTelephonyLineOptionsModify::getLockOutCallPassword()
	 * @uses OvhStructTelephonyLineOptionsModify::getForwardUnconditional()
	 * @uses OvhStructTelephonyLineOptionsModify::getForwardUnconditionalNumber()
	 * @uses OvhStructTelephonyLineOptionsModify::getForwardNoReply()
	 * @uses OvhStructTelephonyLineOptionsModify::getForwardNoReplyDelay()
	 * @uses OvhStructTelephonyLineOptionsModify::getForwardNoReplyNumber()
	 * @uses OvhStructTelephonyLineOptionsModify::getForwardBusy()
	 * @uses OvhStructTelephonyLineOptionsModify::getForwardBusyNumber()
	 * @uses OvhStructTelephonyLineOptionsModify::getForwardBackup()
	 * @uses OvhStructTelephonyLineOptionsModify::getForwardBackupNumber()
	 * @uses OvhStructTelephonyLineOptionsModify::getDisplayCallNumber()
	 * @uses OvhStructTelephonyLineOptionsModify::getCallWaiting()
	 * @uses OvhStructTelephonyLineOptionsModify::getForwardNoReplyNature()
	 * @uses OvhStructTelephonyLineOptionsModify::getForwardBackupNature()
	 * @uses OvhStructTelephonyLineOptionsModify::getForwardUnconditionalNature()
	 * @uses OvhStructTelephonyLineOptionsModify::getForwardBusyNature()
	 * @param OvhStructTelephonyLineOptionsModify $_ovhStructTelephonyLineOptionsModify
	 * @return OvhStructTelephonyLineOptionsModifyResponse
	 */
	public function telephonyLineOptionsModify(OvhStructTelephonyLineOptionsModify $_ovhStructTelephonyLineOptionsModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyLineOptionsModify($_ovhStructTelephonyLineOptionsModify->getSession(),$_ovhStructTelephonyLineOptionsModify->getNumber(),$_ovhStructTelephonyLineOptionsModify->getCountry(),$_ovhStructTelephonyLineOptionsModify->getIdentificationRestriction(),$_ovhStructTelephonyLineOptionsModify->getAnonymousCallRejection(),$_ovhStructTelephonyLineOptionsModify->getDoNotDisturb(),$_ovhStructTelephonyLineOptionsModify->getAbsentSuscriber(),$_ovhStructTelephonyLineOptionsModify->getLockOutCall(),$_ovhStructTelephonyLineOptionsModify->getLockOutCallPassword(),$_ovhStructTelephonyLineOptionsModify->getForwardUnconditional(),$_ovhStructTelephonyLineOptionsModify->getForwardUnconditionalNumber(),$_ovhStructTelephonyLineOptionsModify->getForwardNoReply(),$_ovhStructTelephonyLineOptionsModify->getForwardNoReplyDelay(),$_ovhStructTelephonyLineOptionsModify->getForwardNoReplyNumber(),$_ovhStructTelephonyLineOptionsModify->getForwardBusy(),$_ovhStructTelephonyLineOptionsModify->getForwardBusyNumber(),$_ovhStructTelephonyLineOptionsModify->getForwardBackup(),$_ovhStructTelephonyLineOptionsModify->getForwardBackupNumber(),$_ovhStructTelephonyLineOptionsModify->getDisplayCallNumber(),$_ovhStructTelephonyLineOptionsModify->getCallWaiting(),$_ovhStructTelephonyLineOptionsModify->getForwardNoReplyNature(),$_ovhStructTelephonyLineOptionsModify->getForwardBackupNature(),$_ovhStructTelephonyLineOptionsModify->getForwardUnconditionalNature(),$_ovhStructTelephonyLineOptionsModify->getForwardBusyNature()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyHuntingGenericScreenSet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyHuntingGenericScreenSet::getSession()
	 * @uses OvhStructTelephonyHuntingGenericScreenSet::getNumber()
	 * @uses OvhStructTelephonyHuntingGenericScreenSet::getCountry()
	 * @uses OvhStructTelephonyHuntingGenericScreenSet::getTimesStart()
	 * @uses OvhStructTelephonyHuntingGenericScreenSet::getTimesEnd()
	 * @uses OvhStructTelephonyHuntingGenericScreenSet::getDaysType()
	 * @uses OvhStructTelephonyHuntingGenericScreenSet::getForwardPolicyIndex()
	 * @param OvhStructTelephonyHuntingGenericScreenSet $_ovhStructTelephonyHuntingGenericScreenSet
	 * @return OvhStructTelephonyHuntingGenericScreenSetResponse
	 */
	public function telephonyHuntingGenericScreenSet(OvhStructTelephonyHuntingGenericScreenSet $_ovhStructTelephonyHuntingGenericScreenSet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyHuntingGenericScreenSet($_ovhStructTelephonyHuntingGenericScreenSet->getSession(),$_ovhStructTelephonyHuntingGenericScreenSet->getNumber(),$_ovhStructTelephonyHuntingGenericScreenSet->getCountry(),$_ovhStructTelephonyHuntingGenericScreenSet->getTimesStart(),$_ovhStructTelephonyHuntingGenericScreenSet->getTimesEnd(),$_ovhStructTelephonyHuntingGenericScreenSet->getDaysType(),$_ovhStructTelephonyHuntingGenericScreenSet->getForwardPolicyIndex()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyFaxCampaignStartStop
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyFaxCampaignStartStop::getSession()
	 * @uses OvhStructTelephonyFaxCampaignStartStop::getNumber()
	 * @uses OvhStructTelephonyFaxCampaignStartStop::getCountry()
	 * @uses OvhStructTelephonyFaxCampaignStartStop::getReference()
	 * @uses OvhStructTelephonyFaxCampaignStartStop::getForceStart()
	 * @param OvhStructTelephonyFaxCampaignStartStop $_ovhStructTelephonyFaxCampaignStartStop
	 * @return OvhStructTelephonyFaxCampaignStartStopResponse
	 */
	public function telephonyFaxCampaignStartStop(OvhStructTelephonyFaxCampaignStartStop $_ovhStructTelephonyFaxCampaignStartStop)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyFaxCampaignStartStop($_ovhStructTelephonyFaxCampaignStartStop->getSession(),$_ovhStructTelephonyFaxCampaignStartStop->getNumber(),$_ovhStructTelephonyFaxCampaignStartStop->getCountry(),$_ovhStructTelephonyFaxCampaignStartStop->getReference(),$_ovhStructTelephonyFaxCampaignStartStop->getForceStart()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyDirectoryModifyAddress
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyDirectoryModifyAddress::getSession()
	 * @uses OvhStructTelephonyDirectoryModifyAddress::getCallNumber()
	 * @uses OvhStructTelephonyDirectoryModifyAddress::getCountryCode()
	 * @uses OvhStructTelephonyDirectoryModifyAddress::getName()
	 * @uses OvhStructTelephonyDirectoryModifyAddress::getFirstName()
	 * @uses OvhStructTelephonyDirectoryModifyAddress::getWayNumber()
	 * @uses OvhStructTelephonyDirectoryModifyAddress::getWayNumberExtra()
	 * @uses OvhStructTelephonyDirectoryModifyAddress::getWayType()
	 * @uses OvhStructTelephonyDirectoryModifyAddress::getWayName()
	 * @uses OvhStructTelephonyDirectoryModifyAddress::getAddressExtra()
	 * @uses OvhStructTelephonyDirectoryModifyAddress::getUrbanDistrict()
	 * @uses OvhStructTelephonyDirectoryModifyAddress::getPostBox()
	 * @uses OvhStructTelephonyDirectoryModifyAddress::getCedex()
	 * @uses OvhStructTelephonyDirectoryModifyAddress::getPostCode()
	 * @uses OvhStructTelephonyDirectoryModifyAddress::getCity()
	 * @uses OvhStructTelephonyDirectoryModifyAddress::getCountry()
	 * @uses OvhStructTelephonyDirectoryModifyAddress::getEmail()
	 * @uses OvhStructTelephonyDirectoryModifyAddress::getLegalForm()
	 * @uses OvhStructTelephonyDirectoryModifyAddress::getSocialNomination()
	 * @uses OvhStructTelephonyDirectoryModifyAddress::getPJSocialNomination()
	 * @uses OvhStructTelephonyDirectoryModifyAddress::getSocialNominationExtra()
	 * @uses OvhStructTelephonyDirectoryModifyAddress::getOccupation()
	 * @uses OvhStructTelephonyDirectoryModifyAddress::getSiret()
	 * @uses OvhStructTelephonyDirectoryModifyAddress::getApe()
	 * @uses OvhStructTelephonyDirectoryModifyAddress::getPJCode()
	 * @uses OvhStructTelephonyDirectoryModifyAddress::getAddress()
	 * @param OvhStructTelephonyDirectoryModifyAddress $_ovhStructTelephonyDirectoryModifyAddress
	 * @return OvhStructTelephonyDirectoryModifyAddressResponse
	 */
	public function telephonyDirectoryModifyAddress(OvhStructTelephonyDirectoryModifyAddress $_ovhStructTelephonyDirectoryModifyAddress)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyDirectoryModifyAddress($_ovhStructTelephonyDirectoryModifyAddress->getSession(),$_ovhStructTelephonyDirectoryModifyAddress->getCallNumber(),$_ovhStructTelephonyDirectoryModifyAddress->getCountryCode(),$_ovhStructTelephonyDirectoryModifyAddress->getName(),$_ovhStructTelephonyDirectoryModifyAddress->getFirstName(),$_ovhStructTelephonyDirectoryModifyAddress->getWayNumber(),$_ovhStructTelephonyDirectoryModifyAddress->getWayNumberExtra(),$_ovhStructTelephonyDirectoryModifyAddress->getWayType(),$_ovhStructTelephonyDirectoryModifyAddress->getWayName(),$_ovhStructTelephonyDirectoryModifyAddress->getAddressExtra(),$_ovhStructTelephonyDirectoryModifyAddress->getUrbanDistrict(),$_ovhStructTelephonyDirectoryModifyAddress->getPostBox(),$_ovhStructTelephonyDirectoryModifyAddress->getCedex(),$_ovhStructTelephonyDirectoryModifyAddress->getPostCode(),$_ovhStructTelephonyDirectoryModifyAddress->getCity(),$_ovhStructTelephonyDirectoryModifyAddress->getCountry(),$_ovhStructTelephonyDirectoryModifyAddress->getEmail(),$_ovhStructTelephonyDirectoryModifyAddress->getLegalForm(),$_ovhStructTelephonyDirectoryModifyAddress->getSocialNomination(),$_ovhStructTelephonyDirectoryModifyAddress->getPJSocialNomination(),$_ovhStructTelephonyDirectoryModifyAddress->getSocialNominationExtra(),$_ovhStructTelephonyDirectoryModifyAddress->getOccupation(),$_ovhStructTelephonyDirectoryModifyAddress->getSiret(),$_ovhStructTelephonyDirectoryModifyAddress->getApe(),$_ovhStructTelephonyDirectoryModifyAddress->getPJCode(),$_ovhStructTelephonyDirectoryModifyAddress->getAddress()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyNicSetMgcpIpRestriction
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyNicSetMgcpIpRestriction::getSession()
	 * @uses OvhStructTelephonyNicSetMgcpIpRestriction::getIps()
	 * @param OvhStructTelephonyNicSetMgcpIpRestriction $_ovhStructTelephonyNicSetMgcpIpRestriction
	 * @return OvhStructTelephonyNicSetMgcpIpRestrictionResponse
	 */
	public function telephonyNicSetMgcpIpRestriction(OvhStructTelephonyNicSetMgcpIpRestriction $_ovhStructTelephonyNicSetMgcpIpRestriction)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyNicSetMgcpIpRestriction($_ovhStructTelephonyNicSetMgcpIpRestriction->getSession(),$_ovhStructTelephonyNicSetMgcpIpRestriction->getIps()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySecurityDepositCredit
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySecurityDepositCredit::getSession()
	 * @uses OvhStructTelephonySecurityDepositCredit::getBillingAccount()
	 * @uses OvhStructTelephonySecurityDepositCredit::getAmount()
	 * @param OvhStructTelephonySecurityDepositCredit $_ovhStructTelephonySecurityDepositCredit
	 * @return OvhStructTelephonySecurityDepositCreditResponse
	 */
	public function telephonySecurityDepositCredit(OvhStructTelephonySecurityDepositCredit $_ovhStructTelephonySecurityDepositCredit)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySecurityDepositCredit($_ovhStructTelephonySecurityDepositCredit->getSession(),$_ovhStructTelephonySecurityDepositCredit->getBillingAccount(),$_ovhStructTelephonySecurityDepositCredit->getAmount()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyLineOrder
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyLineOrder::getSession()
	 * @uses OvhStructTelephonyLineOrder::getBillingAccount()
	 * @uses OvhStructTelephonyLineOrder::getOffer()
	 * @uses OvhStructTelephonyLineOrder::getPrefix()
	 * @uses OvhStructTelephonyLineOrder::getQuantity()
	 * @uses OvhStructTelephonyLineOrder::getPayWithPoints()
	 * @param OvhStructTelephonyLineOrder $_ovhStructTelephonyLineOrder
	 * @return OvhStructTelephonyLineOrderResponse
	 */
	public function telephonyLineOrder(OvhStructTelephonyLineOrder $_ovhStructTelephonyLineOrder)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyLineOrder($_ovhStructTelephonyLineOrder->getSession(),$_ovhStructTelephonyLineOrder->getBillingAccount(),$_ovhStructTelephonyLineOrder->getOffer(),$_ovhStructTelephonyLineOrder->getPrefix(),$_ovhStructTelephonyLineOrder->getQuantity(),$_ovhStructTelephonyLineOrder->getPayWithPoints()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyConferenceAction
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyConferenceAction::getSession()
	 * @uses OvhStructTelephonyConferenceAction::getNumber()
	 * @uses OvhStructTelephonyConferenceAction::getCountry()
	 * @uses OvhStructTelephonyConferenceAction::getAction()
	 * @uses OvhStructTelephonyConferenceAction::getMemberid()
	 * @param OvhStructTelephonyConferenceAction $_ovhStructTelephonyConferenceAction
	 * @return OvhStructTelephonyConferenceActionResponse
	 */
	public function telephonyConferenceAction(OvhStructTelephonyConferenceAction $_ovhStructTelephonyConferenceAction)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyConferenceAction($_ovhStructTelephonyConferenceAction->getSession(),$_ovhStructTelephonyConferenceAction->getNumber(),$_ovhStructTelephonyConferenceAction->getCountry(),$_ovhStructTelephonyConferenceAction->getAction(),$_ovhStructTelephonyConferenceAction->getMemberid()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyFunctionKeyDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyFunctionKeyDel::getSession()
	 * @uses OvhStructTelephonyFunctionKeyDel::getNumber()
	 * @uses OvhStructTelephonyFunctionKeyDel::getCountry()
	 * @uses OvhStructTelephonyFunctionKeyDel::getKeyNum()
	 * @param OvhStructTelephonyFunctionKeyDel $_ovhStructTelephonyFunctionKeyDel
	 * @return OvhStructTelephonyFunctionKeyDelResponse
	 */
	public function telephonyFunctionKeyDel(OvhStructTelephonyFunctionKeyDel $_ovhStructTelephonyFunctionKeyDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyFunctionKeyDel($_ovhStructTelephonyFunctionKeyDel->getSession(),$_ovhStructTelephonyFunctionKeyDel->getNumber(),$_ovhStructTelephonyFunctionKeyDel->getCountry(),$_ovhStructTelephonyFunctionKeyDel->getKeyNum()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyNicGetSipDomain
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyNicGetSipDomain::getSession()
	 * @param OvhStructTelephonyNicGetSipDomain $_ovhStructTelephonyNicGetSipDomain
	 * @return OvhStructTelephonyNicGetSipDomainResponse
	 */
	public function telephonyNicGetSipDomain(OvhStructTelephonyNicGetSipDomain $_ovhStructTelephonyNicGetSipDomain)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyNicGetSipDomain($_ovhStructTelephonyNicGetSipDomain->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyGetClosureEventsAsICS
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyGetClosureEventsAsICS::getSession()
	 * @uses OvhStructTelephonyGetClosureEventsAsICS::getNumber()
	 * @uses OvhStructTelephonyGetClosureEventsAsICS::getCountry()
	 * @uses OvhStructTelephonyGetClosureEventsAsICS::getDateStart()
	 * @uses OvhStructTelephonyGetClosureEventsAsICS::getDateEnd()
	 * @uses OvhStructTelephonyGetClosureEventsAsICS::getCategories()
	 * @param OvhStructTelephonyGetClosureEventsAsICS $_ovhStructTelephonyGetClosureEventsAsICS
	 * @return OvhStructTelephonyGetClosureEventsAsICSResponse
	 */
	public function telephonyGetClosureEventsAsICS(OvhStructTelephonyGetClosureEventsAsICS $_ovhStructTelephonyGetClosureEventsAsICS)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyGetClosureEventsAsICS($_ovhStructTelephonyGetClosureEventsAsICS->getSession(),$_ovhStructTelephonyGetClosureEventsAsICS->getNumber(),$_ovhStructTelephonyGetClosureEventsAsICS->getCountry(),$_ovhStructTelephonyGetClosureEventsAsICS->getDateStart(),$_ovhStructTelephonyGetClosureEventsAsICS->getDateEnd(),$_ovhStructTelephonyGetClosureEventsAsICS->getCategories()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsUserCreditLeft
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsUserCreditLeft::getSmsAccount()
	 * @uses OvhStructTelephonySmsUserCreditLeft::getLogin()
	 * @uses OvhStructTelephonySmsUserCreditLeft::getPassword()
	 * @param OvhStructTelephonySmsUserCreditLeft $_ovhStructTelephonySmsUserCreditLeft
	 * @return OvhStructTelephonySmsUserCreditLeftResponse
	 */
	public function telephonySmsUserCreditLeft(OvhStructTelephonySmsUserCreditLeft $_ovhStructTelephonySmsUserCreditLeft)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsUserCreditLeft($_ovhStructTelephonySmsUserCreditLeft->getSmsAccount(),$_ovhStructTelephonySmsUserCreditLeft->getLogin(),$_ovhStructTelephonySmsUserCreditLeft->getPassword()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPortabilityOrder
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPortabilityOrder::getSession()
	 * @uses OvhStructTelephonyPortabilityOrder::getBillingAccount()
	 * @uses OvhStructTelephonyPortabilityOrder::getOffer()
	 * @uses OvhStructTelephonyPortabilityOrder::getDesireDate()
	 * @uses OvhStructTelephonyPortabilityOrder::getCallNumber()
	 * @uses OvhStructTelephonyPortabilityOrder::getExtraNumbers()
	 * @uses OvhStructTelephonyPortabilityOrder::getLegalForm()
	 * @uses OvhStructTelephonyPortabilityOrder::getName()
	 * @uses OvhStructTelephonyPortabilityOrder::getFirstName()
	 * @uses OvhStructTelephonyPortabilityOrder::getSiret()
	 * @uses OvhStructTelephonyPortabilityOrder::getStreetNumber()
	 * @uses OvhStructTelephonyPortabilityOrder::getStreetNumberExtra()
	 * @uses OvhStructTelephonyPortabilityOrder::getStreetType()
	 * @uses OvhStructTelephonyPortabilityOrder::getStreetName()
	 * @uses OvhStructTelephonyPortabilityOrder::getBuilding()
	 * @uses OvhStructTelephonyPortabilityOrder::getStair()
	 * @uses OvhStructTelephonyPortabilityOrder::getFloor()
	 * @uses OvhStructTelephonyPortabilityOrder::getDoor()
	 * @uses OvhStructTelephonyPortabilityOrder::getZip()
	 * @uses OvhStructTelephonyPortabilityOrder::getCity()
	 * @uses OvhStructTelephonyPortabilityOrder::getCountry()
	 * @uses OvhStructTelephonyPortabilityOrder::getDisplayUniversalDirectory()
	 * @uses OvhStructTelephonyPortabilityOrder::getContactName()
	 * @uses OvhStructTelephonyPortabilityOrder::getContactNumber()
	 * @param OvhStructTelephonyPortabilityOrder $_ovhStructTelephonyPortabilityOrder
	 * @return OvhStructTelephonyPortabilityOrderResponse
	 */
	public function telephonyPortabilityOrder(OvhStructTelephonyPortabilityOrder $_ovhStructTelephonyPortabilityOrder)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPortabilityOrder($_ovhStructTelephonyPortabilityOrder->getSession(),$_ovhStructTelephonyPortabilityOrder->getBillingAccount(),$_ovhStructTelephonyPortabilityOrder->getOffer(),$_ovhStructTelephonyPortabilityOrder->getDesireDate(),$_ovhStructTelephonyPortabilityOrder->getCallNumber(),$_ovhStructTelephonyPortabilityOrder->getExtraNumbers(),$_ovhStructTelephonyPortabilityOrder->getLegalForm(),$_ovhStructTelephonyPortabilityOrder->getName(),$_ovhStructTelephonyPortabilityOrder->getFirstName(),$_ovhStructTelephonyPortabilityOrder->getSiret(),$_ovhStructTelephonyPortabilityOrder->getStreetNumber(),$_ovhStructTelephonyPortabilityOrder->getStreetNumberExtra(),$_ovhStructTelephonyPortabilityOrder->getStreetType(),$_ovhStructTelephonyPortabilityOrder->getStreetName(),$_ovhStructTelephonyPortabilityOrder->getBuilding(),$_ovhStructTelephonyPortabilityOrder->getStair(),$_ovhStructTelephonyPortabilityOrder->getFloor(),$_ovhStructTelephonyPortabilityOrder->getDoor(),$_ovhStructTelephonyPortabilityOrder->getZip(),$_ovhStructTelephonyPortabilityOrder->getCity(),$_ovhStructTelephonyPortabilityOrder->getCountry(),$_ovhStructTelephonyPortabilityOrder->getDisplayUniversalDirectory(),$_ovhStructTelephonyPortabilityOrder->getContactName(),$_ovhStructTelephonyPortabilityOrder->getContactNumber()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyVoicemailMailboxDelete
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyVoicemailMailboxDelete::getSession()
	 * @uses OvhStructTelephonyVoicemailMailboxDelete::getNumber()
	 * @uses OvhStructTelephonyVoicemailMailboxDelete::getCountry()
	 * @uses OvhStructTelephonyVoicemailMailboxDelete::getIds()
	 * @uses OvhStructTelephonyVoicemailMailboxDelete::getFolder()
	 * @param OvhStructTelephonyVoicemailMailboxDelete $_ovhStructTelephonyVoicemailMailboxDelete
	 * @return OvhStructTelephonyVoicemailMailboxDeleteResponse
	 */
	public function telephonyVoicemailMailboxDelete(OvhStructTelephonyVoicemailMailboxDelete $_ovhStructTelephonyVoicemailMailboxDelete)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyVoicemailMailboxDelete($_ovhStructTelephonyVoicemailMailboxDelete->getSession(),$_ovhStructTelephonyVoicemailMailboxDelete->getNumber(),$_ovhStructTelephonyVoicemailMailboxDelete->getCountry(),$_ovhStructTelephonyVoicemailMailboxDelete->getIds(),$_ovhStructTelephonyVoicemailMailboxDelete->getFolder()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyBillingAccountDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyBillingAccountDel::getSession()
	 * @uses OvhStructTelephonyBillingAccountDel::getBillingAccount()
	 * @uses OvhStructTelephonyBillingAccountDel::getCancelDelete()
	 * @param OvhStructTelephonyBillingAccountDel $_ovhStructTelephonyBillingAccountDel
	 * @return OvhStructTelephonyBillingAccountDelResponse
	 */
	public function telephonyBillingAccountDel(OvhStructTelephonyBillingAccountDel $_ovhStructTelephonyBillingAccountDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyBillingAccountDel($_ovhStructTelephonyBillingAccountDel->getSession(),$_ovhStructTelephonyBillingAccountDel->getBillingAccount(),$_ovhStructTelephonyBillingAccountDel->getCancelDelete()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyNumberClean
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyNumberClean::getSession()
	 * @uses OvhStructTelephonyNumberClean::getNumber()
	 * @uses OvhStructTelephonyNumberClean::getCountry()
	 * @param OvhStructTelephonyNumberClean $_ovhStructTelephonyNumberClean
	 * @return OvhStructTelephonyNumberCleanResponse
	 */
	public function telephonyNumberClean(OvhStructTelephonyNumberClean $_ovhStructTelephonyNumberClean)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyNumberClean($_ovhStructTelephonyNumberClean->getSession(),$_ovhStructTelephonyNumberClean->getNumber(),$_ovhStructTelephonyNumberClean->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPlugAndPhoneOperation
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPlugAndPhoneOperation::getSession()
	 * @uses OvhStructTelephonyPlugAndPhoneOperation::getNumber()
	 * @uses OvhStructTelephonyPlugAndPhoneOperation::getCountry()
	 * @uses OvhStructTelephonyPlugAndPhoneOperation::getOperation()
	 * @param OvhStructTelephonyPlugAndPhoneOperation $_ovhStructTelephonyPlugAndPhoneOperation
	 * @return OvhStructTelephonyPlugAndPhoneOperationResponse
	 */
	public function telephonyPlugAndPhoneOperation(OvhStructTelephonyPlugAndPhoneOperation $_ovhStructTelephonyPlugAndPhoneOperation)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPlugAndPhoneOperation($_ovhStructTelephonyPlugAndPhoneOperation->getSession(),$_ovhStructTelephonyPlugAndPhoneOperation->getNumber(),$_ovhStructTelephonyPlugAndPhoneOperation->getCountry(),$_ovhStructTelephonyPlugAndPhoneOperation->getOperation()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPhonebookOnSmsContactModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPhonebookOnSmsContactModify::getSession()
	 * @uses OvhStructTelephonyPhonebookOnSmsContactModify::getSmsAccount()
	 * @uses OvhStructTelephonyPhonebookOnSmsContactModify::getId()
	 * @uses OvhStructTelephonyPhonebookOnSmsContactModify::getName()
	 * @uses OvhStructTelephonyPhonebookOnSmsContactModify::getSurname()
	 * @uses OvhStructTelephonyPhonebookOnSmsContactModify::getWorkPhone()
	 * @uses OvhStructTelephonyPhonebookOnSmsContactModify::getWorkMobile()
	 * @uses OvhStructTelephonyPhonebookOnSmsContactModify::getHomePhone()
	 * @uses OvhStructTelephonyPhonebookOnSmsContactModify::getHomeMobile()
	 * @uses OvhStructTelephonyPhonebookOnSmsContactModify::getGroupName()
	 * @param OvhStructTelephonyPhonebookOnSmsContactModify $_ovhStructTelephonyPhonebookOnSmsContactModify
	 * @return OvhStructTelephonyPhonebookOnSmsContactModifyResponse
	 */
	public function telephonyPhonebookOnSmsContactModify(OvhStructTelephonyPhonebookOnSmsContactModify $_ovhStructTelephonyPhonebookOnSmsContactModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPhonebookOnSmsContactModify($_ovhStructTelephonyPhonebookOnSmsContactModify->getSession(),$_ovhStructTelephonyPhonebookOnSmsContactModify->getSmsAccount(),$_ovhStructTelephonyPhonebookOnSmsContactModify->getId(),$_ovhStructTelephonyPhonebookOnSmsContactModify->getName(),$_ovhStructTelephonyPhonebookOnSmsContactModify->getSurname(),$_ovhStructTelephonyPhonebookOnSmsContactModify->getWorkPhone(),$_ovhStructTelephonyPhonebookOnSmsContactModify->getWorkMobile(),$_ovhStructTelephonyPhonebookOnSmsContactModify->getHomePhone(),$_ovhStructTelephonyPhonebookOnSmsContactModify->getHomeMobile(),$_ovhStructTelephonyPhonebookOnSmsContactModify->getGroupName()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPhonebookOnSmsModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPhonebookOnSmsModify::getSession()
	 * @uses OvhStructTelephonyPhonebookOnSmsModify::getSmsAccount()
	 * @uses OvhStructTelephonyPhonebookOnSmsModify::getId()
	 * @uses OvhStructTelephonyPhonebookOnSmsModify::getName()
	 * @param OvhStructTelephonyPhonebookOnSmsModify $_ovhStructTelephonyPhonebookOnSmsModify
	 * @return OvhStructTelephonyPhonebookOnSmsModifyResponse
	 */
	public function telephonyPhonebookOnSmsModify(OvhStructTelephonyPhonebookOnSmsModify $_ovhStructTelephonyPhonebookOnSmsModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPhonebookOnSmsModify($_ovhStructTelephonyPhonebookOnSmsModify->getSession(),$_ovhStructTelephonyPhonebookOnSmsModify->getSmsAccount(),$_ovhStructTelephonyPhonebookOnSmsModify->getId(),$_ovhStructTelephonyPhonebookOnSmsModify->getName()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsSetQuotaNotification
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsSetQuotaNotification::getSession()
	 * @uses OvhStructTelephonySmsSetQuotaNotification::getSmsAccount()
	 * @uses OvhStructTelephonySmsSetQuotaNotification::getLogin()
	 * @uses OvhStructTelephonySmsSetQuotaNotification::getSupport()
	 * @uses OvhStructTelephonySmsSetQuotaNotification::getAlertNumber()
	 * @uses OvhStructTelephonySmsSetQuotaNotification::getAlertThreshold()
	 * @param OvhStructTelephonySmsSetQuotaNotification $_ovhStructTelephonySmsSetQuotaNotification
	 * @return OvhStructTelephonySmsSetQuotaNotificationResponse
	 */
	public function telephonySmsSetQuotaNotification(OvhStructTelephonySmsSetQuotaNotification $_ovhStructTelephonySmsSetQuotaNotification)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsSetQuotaNotification($_ovhStructTelephonySmsSetQuotaNotification->getSession(),$_ovhStructTelephonySmsSetQuotaNotification->getSmsAccount(),$_ovhStructTelephonySmsSetQuotaNotification->getLogin(),$_ovhStructTelephonySmsSetQuotaNotification->getSupport(),$_ovhStructTelephonySmsSetQuotaNotification->getAlertNumber(),$_ovhStructTelephonySmsSetQuotaNotification->getAlertThreshold()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsUserList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsUserList::getSession()
	 * @uses OvhStructTelephonySmsUserList::getSmsAccount()
	 * @param OvhStructTelephonySmsUserList $_ovhStructTelephonySmsUserList
	 * @return OvhStructTelephonySmsUserListResponse
	 */
	public function telephonySmsUserList(OvhStructTelephonySmsUserList $_ovhStructTelephonySmsUserList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsUserList($_ovhStructTelephonySmsUserList->getSession(),$_ovhStructTelephonySmsUserList->getSmsAccount()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyHuntingInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyHuntingInfo::getSession()
	 * @uses OvhStructTelephonyHuntingInfo::getNumber()
	 * @uses OvhStructTelephonyHuntingInfo::getCountry()
	 * @param OvhStructTelephonyHuntingInfo $_ovhStructTelephonyHuntingInfo
	 * @return OvhStructTelephonyHuntingInfoResponse
	 */
	public function telephonyHuntingInfo(OvhStructTelephonyHuntingInfo $_ovhStructTelephonyHuntingInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyHuntingInfo($_ovhStructTelephonyHuntingInfo->getSession(),$_ovhStructTelephonyHuntingInfo->getNumber(),$_ovhStructTelephonyHuntingInfo->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPhonebookContactList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPhonebookContactList::getSession()
	 * @uses OvhStructTelephonyPhonebookContactList::getNumber()
	 * @uses OvhStructTelephonyPhonebookContactList::getCountry()
	 * @uses OvhStructTelephonyPhonebookContactList::getId()
	 * @uses OvhStructTelephonyPhonebookContactList::getGroup()
	 * @param OvhStructTelephonyPhonebookContactList $_ovhStructTelephonyPhonebookContactList
	 * @return OvhStructTelephonyPhonebookContactListResponse
	 */
	public function telephonyPhonebookContactList(OvhStructTelephonyPhonebookContactList $_ovhStructTelephonyPhonebookContactList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPhonebookContactList($_ovhStructTelephonyPhonebookContactList->getSession(),$_ovhStructTelephonyPhonebookContactList->getNumber(),$_ovhStructTelephonyPhonebookContactList->getCountry(),$_ovhStructTelephonyPhonebookContactList->getId(),$_ovhStructTelephonyPhonebookContactList->getGroup()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsUserPassword
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsUserPassword::getSession()
	 * @uses OvhStructTelephonySmsUserPassword::getSmsAccount()
	 * @uses OvhStructTelephonySmsUserPassword::getLogin()
	 * @uses OvhStructTelephonySmsUserPassword::getPassword()
	 * @param OvhStructTelephonySmsUserPassword $_ovhStructTelephonySmsUserPassword
	 * @return OvhStructTelephonySmsUserPasswordResponse
	 */
	public function telephonySmsUserPassword(OvhStructTelephonySmsUserPassword $_ovhStructTelephonySmsUserPassword)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsUserPassword($_ovhStructTelephonySmsUserPassword->getSession(),$_ovhStructTelephonySmsUserPassword->getSmsAccount(),$_ovhStructTelephonySmsUserPassword->getLogin(),$_ovhStructTelephonySmsUserPassword->getPassword()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyLineGetOfferPrices
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyLineGetOfferPrices::getSession()
	 * @uses OvhStructTelephonyLineGetOfferPrices::getBillingAccount()
	 * @param OvhStructTelephonyLineGetOfferPrices $_ovhStructTelephonyLineGetOfferPrices
	 * @return OvhStructTelephonyLineGetOfferPricesResponse
	 */
	public function telephonyLineGetOfferPrices(OvhStructTelephonyLineGetOfferPrices $_ovhStructTelephonyLineGetOfferPrices)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyLineGetOfferPrices($_ovhStructTelephonyLineGetOfferPrices->getSession(),$_ovhStructTelephonyLineGetOfferPrices->getBillingAccount()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsGetQuotaNotification
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsGetQuotaNotification::getSession()
	 * @uses OvhStructTelephonySmsGetQuotaNotification::getSmsAccount()
	 * @uses OvhStructTelephonySmsGetQuotaNotification::getLogin()
	 * @param OvhStructTelephonySmsGetQuotaNotification $_ovhStructTelephonySmsGetQuotaNotification
	 * @return OvhStructTelephonySmsGetQuotaNotificationResponse
	 */
	public function telephonySmsGetQuotaNotification(OvhStructTelephonySmsGetQuotaNotification $_ovhStructTelephonySmsGetQuotaNotification)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsGetQuotaNotification($_ovhStructTelephonySmsGetQuotaNotification->getSession(),$_ovhStructTelephonySmsGetQuotaNotification->getSmsAccount(),$_ovhStructTelephonySmsGetQuotaNotification->getLogin()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyHuntingModificationMode
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyHuntingModificationMode::getSession()
	 * @uses OvhStructTelephonyHuntingModificationMode::getNumber()
	 * @uses OvhStructTelephonyHuntingModificationMode::getCountry()
	 * @uses OvhStructTelephonyHuntingModificationMode::getBillingAccount()
	 * @uses OvhStructTelephonyHuntingModificationMode::getStrategy()
	 * @uses OvhStructTelephonyHuntingModificationMode::getPattern()
	 * @param OvhStructTelephonyHuntingModificationMode $_ovhStructTelephonyHuntingModificationMode
	 * @return OvhStructTelephonyHuntingModificationModeResponse
	 */
	public function telephonyHuntingModificationMode(OvhStructTelephonyHuntingModificationMode $_ovhStructTelephonyHuntingModificationMode)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyHuntingModificationMode($_ovhStructTelephonyHuntingModificationMode->getSession(),$_ovhStructTelephonyHuntingModificationMode->getNumber(),$_ovhStructTelephonyHuntingModificationMode->getCountry(),$_ovhStructTelephonyHuntingModificationMode->getBillingAccount(),$_ovhStructTelephonyHuntingModificationMode->getStrategy(),$_ovhStructTelephonyHuntingModificationMode->getPattern()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyScreenListBlackWhiteChoice
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyScreenListBlackWhiteChoice::getSession()
	 * @uses OvhStructTelephonyScreenListBlackWhiteChoice::getNumber()
	 * @uses OvhStructTelephonyScreenListBlackWhiteChoice::getCountry()
	 * @param OvhStructTelephonyScreenListBlackWhiteChoice $_ovhStructTelephonyScreenListBlackWhiteChoice
	 * @return OvhStructTelephonyScreenListBlackWhiteChoiceResponse
	 */
	public function telephonyScreenListBlackWhiteChoice(OvhStructTelephonyScreenListBlackWhiteChoice $_ovhStructTelephonyScreenListBlackWhiteChoice)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyScreenListBlackWhiteChoice($_ovhStructTelephonyScreenListBlackWhiteChoice->getSession(),$_ovhStructTelephonyScreenListBlackWhiteChoice->getNumber(),$_ovhStructTelephonyScreenListBlackWhiteChoice->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsDeleteCsvAttachment
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsDeleteCsvAttachment::getSession()
	 * @uses OvhStructTelephonySmsDeleteCsvAttachment::getSmsAccount()
	 * @uses OvhStructTelephonySmsDeleteCsvAttachment::getIds()
	 * @param OvhStructTelephonySmsDeleteCsvAttachment $_ovhStructTelephonySmsDeleteCsvAttachment
	 * @return OvhStructTelephonySmsDeleteCsvAttachmentResponse
	 */
	public function telephonySmsDeleteCsvAttachment(OvhStructTelephonySmsDeleteCsvAttachment $_ovhStructTelephonySmsDeleteCsvAttachment)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsDeleteCsvAttachment($_ovhStructTelephonySmsDeleteCsvAttachment->getSession(),$_ovhStructTelephonySmsDeleteCsvAttachment->getSmsAccount(),$_ovhStructTelephonySmsDeleteCsvAttachment->getIds()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyNumberZoneAndPrefixList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyNumberZoneAndPrefixList::getSession()
	 * @uses OvhStructTelephonyNumberZoneAndPrefixList::getCountry()
	 * @uses OvhStructTelephonyNumberZoneAndPrefixList::getTypes()
	 * @param OvhStructTelephonyNumberZoneAndPrefixList $_ovhStructTelephonyNumberZoneAndPrefixList
	 * @return OvhStructTelephonyNumberZoneAndPrefixListResponse
	 */
	public function telephonyNumberZoneAndPrefixList(OvhStructTelephonyNumberZoneAndPrefixList $_ovhStructTelephonyNumberZoneAndPrefixList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyNumberZoneAndPrefixList($_ovhStructTelephonyNumberZoneAndPrefixList->getSession(),$_ovhStructTelephonyNumberZoneAndPrefixList->getCountry(),$_ovhStructTelephonyNumberZoneAndPrefixList->getTypes()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyLineSetSipDomain
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyLineSetSipDomain::getSession()
	 * @uses OvhStructTelephonyLineSetSipDomain::getNumber()
	 * @uses OvhStructTelephonyLineSetSipDomain::getCountry()
	 * @uses OvhStructTelephonyLineSetSipDomain::getDomain()
	 * @param OvhStructTelephonyLineSetSipDomain $_ovhStructTelephonyLineSetSipDomain
	 * @return OvhStructTelephonyLineSetSipDomainResponse
	 */
	public function telephonyLineSetSipDomain(OvhStructTelephonyLineSetSipDomain $_ovhStructTelephonyLineSetSipDomain)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyLineSetSipDomain($_ovhStructTelephonyLineSetSipDomain->getSession(),$_ovhStructTelephonyLineSetSipDomain->getNumber(),$_ovhStructTelephonyLineSetSipDomain->getCountry(),$_ovhStructTelephonyLineSetSipDomain->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyTrunkExternalDisplayedNumberDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyTrunkExternalDisplayedNumberDel::getSession()
	 * @uses OvhStructTelephonyTrunkExternalDisplayedNumberDel::getNumber()
	 * @uses OvhStructTelephonyTrunkExternalDisplayedNumberDel::getCountry()
	 * @uses OvhStructTelephonyTrunkExternalDisplayedNumberDel::getExternalDisplayedNumber()
	 * @param OvhStructTelephonyTrunkExternalDisplayedNumberDel $_ovhStructTelephonyTrunkExternalDisplayedNumberDel
	 * @return OvhStructTelephonyTrunkExternalDisplayedNumberDelResponse
	 */
	public function telephonyTrunkExternalDisplayedNumberDel(OvhStructTelephonyTrunkExternalDisplayedNumberDel $_ovhStructTelephonyTrunkExternalDisplayedNumberDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyTrunkExternalDisplayedNumberDel($_ovhStructTelephonyTrunkExternalDisplayedNumberDel->getSession(),$_ovhStructTelephonyTrunkExternalDisplayedNumberDel->getNumber(),$_ovhStructTelephonyTrunkExternalDisplayedNumberDel->getCountry(),$_ovhStructTelephonyTrunkExternalDisplayedNumberDel->getExternalDisplayedNumber()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPhonebookOnGroupContactList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPhonebookOnGroupContactList::getSession()
	 * @uses OvhStructTelephonyPhonebookOnGroupContactList::getGroup()
	 * @uses OvhStructTelephonyPhonebookOnGroupContactList::getId()
	 * @uses OvhStructTelephonyPhonebookOnGroupContactList::getGroupName()
	 * @param OvhStructTelephonyPhonebookOnGroupContactList $_ovhStructTelephonyPhonebookOnGroupContactList
	 * @return OvhStructTelephonyPhonebookOnGroupContactListResponse
	 */
	public function telephonyPhonebookOnGroupContactList(OvhStructTelephonyPhonebookOnGroupContactList $_ovhStructTelephonyPhonebookOnGroupContactList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPhonebookOnGroupContactList($_ovhStructTelephonyPhonebookOnGroupContactList->getSession(),$_ovhStructTelephonyPhonebookOnGroupContactList->getGroup(),$_ovhStructTelephonyPhonebookOnGroupContactList->getId(),$_ovhStructTelephonyPhonebookOnGroupContactList->getGroupName()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsplusServiceReversableTicketsSummary
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsplusServiceReversableTicketsSummary::getSession()
	 * @uses OvhStructTelephonySmsplusServiceReversableTicketsSummary::getShortCode()
	 * @uses OvhStructTelephonySmsplusServiceReversableTicketsSummary::getKeyword()
	 * @uses OvhStructTelephonySmsplusServiceReversableTicketsSummary::getReversableDelay()
	 * @uses OvhStructTelephonySmsplusServiceReversableTicketsSummary::getLimit()
	 * @uses OvhStructTelephonySmsplusServiceReversableTicketsSummary::getLimitOffset()
	 * @uses OvhStructTelephonySmsplusServiceReversableTicketsSummary::getSort()
	 * @uses OvhStructTelephonySmsplusServiceReversableTicketsSummary::getFilter()
	 * @param OvhStructTelephonySmsplusServiceReversableTicketsSummary $_ovhStructTelephonySmsplusServiceReversableTicketsSummary
	 * @return OvhStructTelephonySmsplusServiceReversableTicketsSummaryResponse
	 */
	public function telephonySmsplusServiceReversableTicketsSummary(OvhStructTelephonySmsplusServiceReversableTicketsSummary $_ovhStructTelephonySmsplusServiceReversableTicketsSummary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsplusServiceReversableTicketsSummary($_ovhStructTelephonySmsplusServiceReversableTicketsSummary->getSession(),$_ovhStructTelephonySmsplusServiceReversableTicketsSummary->getShortCode(),$_ovhStructTelephonySmsplusServiceReversableTicketsSummary->getKeyword(),$_ovhStructTelephonySmsplusServiceReversableTicketsSummary->getReversableDelay(),$_ovhStructTelephonySmsplusServiceReversableTicketsSummary->getLimit(),$_ovhStructTelephonySmsplusServiceReversableTicketsSummary->getLimitOffset(),$_ovhStructTelephonySmsplusServiceReversableTicketsSummary->getSort(),$_ovhStructTelephonySmsplusServiceReversableTicketsSummary->getFilter()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyDeleteLine
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyDeleteLine::getSession()
	 * @uses OvhStructTelephonyDeleteLine::getNumber()
	 * @uses OvhStructTelephonyDeleteLine::getCountry()
	 * @uses OvhStructTelephonyDeleteLine::getCancelDelete()
	 * @param OvhStructTelephonyDeleteLine $_ovhStructTelephonyDeleteLine
	 * @return OvhStructTelephonyDeleteLineResponse
	 */
	public function telephonyDeleteLine(OvhStructTelephonyDeleteLine $_ovhStructTelephonyDeleteLine)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyDeleteLine($_ovhStructTelephonyDeleteLine->getSession(),$_ovhStructTelephonyDeleteLine->getNumber(),$_ovhStructTelephonyDeleteLine->getCountry(),$_ovhStructTelephonyDeleteLine->getCancelDelete()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySetTimeZoneNumber
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySetTimeZoneNumber::getSession()
	 * @uses OvhStructTelephonySetTimeZoneNumber::getNumber()
	 * @uses OvhStructTelephonySetTimeZoneNumber::getCountryCode()
	 * @uses OvhStructTelephonySetTimeZoneNumber::getTimeZone()
	 * @param OvhStructTelephonySetTimeZoneNumber $_ovhStructTelephonySetTimeZoneNumber
	 * @return OvhStructTelephonySetTimeZoneNumberResponse
	 */
	public function telephonySetTimeZoneNumber(OvhStructTelephonySetTimeZoneNumber $_ovhStructTelephonySetTimeZoneNumber)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySetTimeZoneNumber($_ovhStructTelephonySetTimeZoneNumber->getSession(),$_ovhStructTelephonySetTimeZoneNumber->getNumber(),$_ovhStructTelephonySetTimeZoneNumber->getCountryCode(),$_ovhStructTelephonySetTimeZoneNumber->getTimeZone()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyNicSetIpRestriction
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyNicSetIpRestriction::getSession()
	 * @uses OvhStructTelephonyNicSetIpRestriction::getIps()
	 * @param OvhStructTelephonyNicSetIpRestriction $_ovhStructTelephonyNicSetIpRestriction
	 * @return OvhStructTelephonyNicSetIpRestrictionResponse
	 */
	public function telephonyNicSetIpRestriction(OvhStructTelephonyNicSetIpRestriction $_ovhStructTelephonyNicSetIpRestriction)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyNicSetIpRestriction($_ovhStructTelephonyNicSetIpRestriction->getSession(),$_ovhStructTelephonyNicSetIpRestriction->getIps()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPortabilityStatus
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPortabilityStatus::getSession()
	 * @uses OvhStructTelephonyPortabilityStatus::getBillingAccount()
	 * @param OvhStructTelephonyPortabilityStatus $_ovhStructTelephonyPortabilityStatus
	 * @return OvhStructTelephonyPortabilityStatusResponse
	 */
	public function telephonyPortabilityStatus(OvhStructTelephonyPortabilityStatus $_ovhStructTelephonyPortabilityStatus)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPortabilityStatus($_ovhStructTelephonyPortabilityStatus->getSession(),$_ovhStructTelephonyPortabilityStatus->getBillingAccount()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySecurityDepositInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySecurityDepositInfo::getSession()
	 * @uses OvhStructTelephonySecurityDepositInfo::getBillingAccount()
	 * @param OvhStructTelephonySecurityDepositInfo $_ovhStructTelephonySecurityDepositInfo
	 * @return OvhStructTelephonySecurityDepositInfoResponse
	 */
	public function telephonySecurityDepositInfo(OvhStructTelephonySecurityDepositInfo $_ovhStructTelephonySecurityDepositInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySecurityDepositInfo($_ovhStructTelephonySecurityDepositInfo->getSession(),$_ovhStructTelephonySecurityDepositInfo->getBillingAccount()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsListCsvAttachment
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsListCsvAttachment::getSession()
	 * @uses OvhStructTelephonySmsListCsvAttachment::getSmsAccount()
	 * @uses OvhStructTelephonySmsListCsvAttachment::getId()
	 * @param OvhStructTelephonySmsListCsvAttachment $_ovhStructTelephonySmsListCsvAttachment
	 * @return OvhStructTelephonySmsListCsvAttachmentResponse
	 */
	public function telephonySmsListCsvAttachment(OvhStructTelephonySmsListCsvAttachment $_ovhStructTelephonySmsListCsvAttachment)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsListCsvAttachment($_ovhStructTelephonySmsListCsvAttachment->getSession(),$_ovhStructTelephonySmsListCsvAttachment->getSmsAccount(),$_ovhStructTelephonySmsListCsvAttachment->getId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsCancelSending
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsCancelSending::getSession()
	 * @uses OvhStructTelephonySmsCancelSending::getSmsAccount()
	 * @uses OvhStructTelephonySmsCancelSending::getSmsIds()
	 * @param OvhStructTelephonySmsCancelSending $_ovhStructTelephonySmsCancelSending
	 * @return OvhStructTelephonySmsCancelSendingResponse
	 */
	public function telephonySmsCancelSending(OvhStructTelephonySmsCancelSending $_ovhStructTelephonySmsCancelSending)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsCancelSending($_ovhStructTelephonySmsCancelSending->getSession(),$_ovhStructTelephonySmsCancelSending->getSmsAccount(),$_ovhStructTelephonySmsCancelSending->getSmsIds()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyScreenListInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyScreenListInfo::getSession()
	 * @uses OvhStructTelephonyScreenListInfo::getNumber()
	 * @uses OvhStructTelephonyScreenListInfo::getCountry()
	 * @uses OvhStructTelephonyScreenListInfo::getScreenListType()
	 * @param OvhStructTelephonyScreenListInfo $_ovhStructTelephonyScreenListInfo
	 * @return OvhStructTelephonyScreenListInfoResponse
	 */
	public function telephonyScreenListInfo(OvhStructTelephonyScreenListInfo $_ovhStructTelephonyScreenListInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyScreenListInfo($_ovhStructTelephonyScreenListInfo->getSession(),$_ovhStructTelephonyScreenListInfo->getNumber(),$_ovhStructTelephonyScreenListInfo->getCountry(),$_ovhStructTelephonyScreenListInfo->getScreenListType()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyLineLogsOnGroup
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyLineLogsOnGroup::getGroup()
	 * @uses OvhStructTelephonyLineLogsOnGroup::getPagingStart()
	 * @uses OvhStructTelephonyLineLogsOnGroup::getPagingLimit()
	 * @param OvhStructTelephonyLineLogsOnGroup $_ovhStructTelephonyLineLogsOnGroup
	 * @return OvhStructTelephonyLineLogsOnGroupResponse
	 */
	public function telephonyLineLogsOnGroup(OvhStructTelephonyLineLogsOnGroup $_ovhStructTelephonyLineLogsOnGroup)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyLineLogsOnGroup($_ovhStructTelephonyLineLogsOnGroup->getGroup(),$_ovhStructTelephonyLineLogsOnGroup->getPagingStart(),$_ovhStructTelephonyLineLogsOnGroup->getPagingLimit()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyLineGetMgcpIpRestriction
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyLineGetMgcpIpRestriction::getSession()
	 * @uses OvhStructTelephonyLineGetMgcpIpRestriction::getNumber()
	 * @uses OvhStructTelephonyLineGetMgcpIpRestriction::getCountry()
	 * @param OvhStructTelephonyLineGetMgcpIpRestriction $_ovhStructTelephonyLineGetMgcpIpRestriction
	 * @return OvhStructTelephonyLineGetMgcpIpRestrictionResponse
	 */
	public function telephonyLineGetMgcpIpRestriction(OvhStructTelephonyLineGetMgcpIpRestriction $_ovhStructTelephonyLineGetMgcpIpRestriction)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyLineGetMgcpIpRestriction($_ovhStructTelephonyLineGetMgcpIpRestriction->getSession(),$_ovhStructTelephonyLineGetMgcpIpRestriction->getNumber(),$_ovhStructTelephonyLineGetMgcpIpRestriction->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyLineDetails
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyLineDetails::getSession()
	 * @uses OvhStructTelephonyLineDetails::getNumber()
	 * @uses OvhStructTelephonyLineDetails::getCountryCode()
	 * @param OvhStructTelephonyLineDetails $_ovhStructTelephonyLineDetails
	 * @return OvhStructTelephonyLineDetailsResponse
	 */
	public function telephonyLineDetails(OvhStructTelephonyLineDetails $_ovhStructTelephonyLineDetails)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyLineDetails($_ovhStructTelephonyLineDetails->getSession(),$_ovhStructTelephonyLineDetails->getNumber(),$_ovhStructTelephonyLineDetails->getCountryCode()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPhonebookContactDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPhonebookContactDel::getSession()
	 * @uses OvhStructTelephonyPhonebookContactDel::getNumber()
	 * @uses OvhStructTelephonyPhonebookContactDel::getCountry()
	 * @uses OvhStructTelephonyPhonebookContactDel::getId()
	 * @param OvhStructTelephonyPhonebookContactDel $_ovhStructTelephonyPhonebookContactDel
	 * @return OvhStructTelephonyPhonebookContactDelResponse
	 */
	public function telephonyPhonebookContactDel(OvhStructTelephonyPhonebookContactDel $_ovhStructTelephonyPhonebookContactDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPhonebookContactDel($_ovhStructTelephonyPhonebookContactDel->getSession(),$_ovhStructTelephonyPhonebookContactDel->getNumber(),$_ovhStructTelephonyPhonebookContactDel->getCountry(),$_ovhStructTelephonyPhonebookContactDel->getId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyRatesListCsv
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyRatesListCsv::getSession()
	 * @uses OvhStructTelephonyRatesListCsv::getCountryCode()
	 * @uses OvhStructTelephonyRatesListCsv::getType()
	 * @param OvhStructTelephonyRatesListCsv $_ovhStructTelephonyRatesListCsv
	 * @return OvhStructTelephonyRatesListCsvResponse
	 */
	public function telephonyRatesListCsv(OvhStructTelephonyRatesListCsv $_ovhStructTelephonyRatesListCsv)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyRatesListCsv($_ovhStructTelephonyRatesListCsv->getSession(),$_ovhStructTelephonyRatesListCsv->getCountryCode(),$_ovhStructTelephonyRatesListCsv->getType()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyConferenceGetInfos
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyConferenceGetInfos::getSession()
	 * @uses OvhStructTelephonyConferenceGetInfos::getNumber()
	 * @uses OvhStructTelephonyConferenceGetInfos::getCountry()
	 * @param OvhStructTelephonyConferenceGetInfos $_ovhStructTelephonyConferenceGetInfos
	 * @return OvhStructTelephonyConferenceGetInfosResponse
	 */
	public function telephonyConferenceGetInfos(OvhStructTelephonyConferenceGetInfos $_ovhStructTelephonyConferenceGetInfos)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyConferenceGetInfos($_ovhStructTelephonyConferenceGetInfos->getSession(),$_ovhStructTelephonyConferenceGetInfos->getNumber(),$_ovhStructTelephonyConferenceGetInfos->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPhonebookOnSmsContactList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPhonebookOnSmsContactList::getSession()
	 * @uses OvhStructTelephonyPhonebookOnSmsContactList::getSmsAccount()
	 * @uses OvhStructTelephonyPhonebookOnSmsContactList::getId()
	 * @uses OvhStructTelephonyPhonebookOnSmsContactList::getGroupName()
	 * @param OvhStructTelephonyPhonebookOnSmsContactList $_ovhStructTelephonyPhonebookOnSmsContactList
	 * @return OvhStructTelephonyPhonebookOnSmsContactListResponse
	 */
	public function telephonyPhonebookOnSmsContactList(OvhStructTelephonyPhonebookOnSmsContactList $_ovhStructTelephonyPhonebookOnSmsContactList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPhonebookOnSmsContactList($_ovhStructTelephonyPhonebookOnSmsContactList->getSession(),$_ovhStructTelephonyPhonebookOnSmsContactList->getSmsAccount(),$_ovhStructTelephonyPhonebookOnSmsContactList->getId(),$_ovhStructTelephonyPhonebookOnSmsContactList->getGroupName()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPhonebookOnSmsContactAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPhonebookOnSmsContactAdd::getSession()
	 * @uses OvhStructTelephonyPhonebookOnSmsContactAdd::getSmsAccount()
	 * @uses OvhStructTelephonyPhonebookOnSmsContactAdd::getId()
	 * @uses OvhStructTelephonyPhonebookOnSmsContactAdd::getName()
	 * @uses OvhStructTelephonyPhonebookOnSmsContactAdd::getSurname()
	 * @uses OvhStructTelephonyPhonebookOnSmsContactAdd::getWorkPhone()
	 * @uses OvhStructTelephonyPhonebookOnSmsContactAdd::getWorkMobile()
	 * @uses OvhStructTelephonyPhonebookOnSmsContactAdd::getHomePhone()
	 * @uses OvhStructTelephonyPhonebookOnSmsContactAdd::getHomeMobile()
	 * @uses OvhStructTelephonyPhonebookOnSmsContactAdd::getGroupName()
	 * @param OvhStructTelephonyPhonebookOnSmsContactAdd $_ovhStructTelephonyPhonebookOnSmsContactAdd
	 * @return OvhStructTelephonyPhonebookOnSmsContactAddResponse
	 */
	public function telephonyPhonebookOnSmsContactAdd(OvhStructTelephonyPhonebookOnSmsContactAdd $_ovhStructTelephonyPhonebookOnSmsContactAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPhonebookOnSmsContactAdd($_ovhStructTelephonyPhonebookOnSmsContactAdd->getSession(),$_ovhStructTelephonyPhonebookOnSmsContactAdd->getSmsAccount(),$_ovhStructTelephonyPhonebookOnSmsContactAdd->getId(),$_ovhStructTelephonyPhonebookOnSmsContactAdd->getName(),$_ovhStructTelephonyPhonebookOnSmsContactAdd->getSurname(),$_ovhStructTelephonyPhonebookOnSmsContactAdd->getWorkPhone(),$_ovhStructTelephonyPhonebookOnSmsContactAdd->getWorkMobile(),$_ovhStructTelephonyPhonebookOnSmsContactAdd->getHomePhone(),$_ovhStructTelephonyPhonebookOnSmsContactAdd->getHomeMobile(),$_ovhStructTelephonyPhonebookOnSmsContactAdd->getGroupName()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyFMHuntingModificationAnonymousCallRejection
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyFMHuntingModificationAnonymousCallRejection::getSession()
	 * @uses OvhStructTelephonyFMHuntingModificationAnonymousCallRejection::getNumber()
	 * @uses OvhStructTelephonyFMHuntingModificationAnonymousCallRejection::getCountry()
	 * @uses OvhStructTelephonyFMHuntingModificationAnonymousCallRejection::getBillingAccount()
	 * @uses OvhStructTelephonyFMHuntingModificationAnonymousCallRejection::getAnonymousCallRejection()
	 * @param OvhStructTelephonyFMHuntingModificationAnonymousCallRejection $_ovhStructTelephonyFMHuntingModificationAnonymousCallRejection
	 * @return OvhStructTelephonyFMHuntingModificationAnonymousCallRejectionResponse
	 */
	public function telephonyFMHuntingModificationAnonymousCallRejection(OvhStructTelephonyFMHuntingModificationAnonymousCallRejection $_ovhStructTelephonyFMHuntingModificationAnonymousCallRejection)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyFMHuntingModificationAnonymousCallRejection($_ovhStructTelephonyFMHuntingModificationAnonymousCallRejection->getSession(),$_ovhStructTelephonyFMHuntingModificationAnonymousCallRejection->getNumber(),$_ovhStructTelephonyFMHuntingModificationAnonymousCallRejection->getCountry(),$_ovhStructTelephonyFMHuntingModificationAnonymousCallRejection->getBillingAccount(),$_ovhStructTelephonyFMHuntingModificationAnonymousCallRejection->getAnonymousCallRejection()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyDdiModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyDdiModify::getSession()
	 * @uses OvhStructTelephonyDdiModify::getNumber()
	 * @uses OvhStructTelephonyDdiModify::getCountry()
	 * @uses OvhStructTelephonyDdiModify::getBillingAccount()
	 * @uses OvhStructTelephonyDdiModify::getDestination()
	 * @param OvhStructTelephonyDdiModify $_ovhStructTelephonyDdiModify
	 * @return OvhStructTelephonyDdiModifyResponse
	 */
	public function telephonyDdiModify(OvhStructTelephonyDdiModify $_ovhStructTelephonyDdiModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyDdiModify($_ovhStructTelephonyDdiModify->getSession(),$_ovhStructTelephonyDdiModify->getNumber(),$_ovhStructTelephonyDdiModify->getCountry(),$_ovhStructTelephonyDdiModify->getBillingAccount(),$_ovhStructTelephonyDdiModify->getDestination()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyRedirectInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyRedirectInfo::getSession()
	 * @uses OvhStructTelephonyRedirectInfo::getNumber()
	 * @uses OvhStructTelephonyRedirectInfo::getCountry()
	 * @param OvhStructTelephonyRedirectInfo $_ovhStructTelephonyRedirectInfo
	 * @return OvhStructTelephonyRedirectInfoResponse
	 */
	public function telephonyRedirectInfo(OvhStructTelephonyRedirectInfo $_ovhStructTelephonyRedirectInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyRedirectInfo($_ovhStructTelephonyRedirectInfo->getSession(),$_ovhStructTelephonyRedirectInfo->getNumber(),$_ovhStructTelephonyRedirectInfo->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsSend
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsSend::getSession()
	 * @uses OvhStructTelephonySmsSend::getSmsAccount()
	 * @uses OvhStructTelephonySmsSend::getNumberFrom()
	 * @uses OvhStructTelephonySmsSend::getNumberTo()
	 * @uses OvhStructTelephonySmsSend::getMessage()
	 * @uses OvhStructTelephonySmsSend::getSmsValidity()
	 * @uses OvhStructTelephonySmsSend::getSmsClass()
	 * @uses OvhStructTelephonySmsSend::getSmsDeferred()
	 * @uses OvhStructTelephonySmsSend::getSmsPriority()
	 * @uses OvhStructTelephonySmsSend::getSmsCoding()
	 * @uses OvhStructTelephonySmsSend::getTag()
	 * @uses OvhStructTelephonySmsSend::getNoStop()
	 * @param OvhStructTelephonySmsSend $_ovhStructTelephonySmsSend
	 * @return OvhStructTelephonySmsSendResponse
	 */
	public function telephonySmsSend(OvhStructTelephonySmsSend $_ovhStructTelephonySmsSend)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsSend($_ovhStructTelephonySmsSend->getSession(),$_ovhStructTelephonySmsSend->getSmsAccount(),$_ovhStructTelephonySmsSend->getNumberFrom(),$_ovhStructTelephonySmsSend->getNumberTo(),$_ovhStructTelephonySmsSend->getMessage(),$_ovhStructTelephonySmsSend->getSmsValidity(),$_ovhStructTelephonySmsSend->getSmsClass(),$_ovhStructTelephonySmsSend->getSmsDeferred(),$_ovhStructTelephonySmsSend->getSmsPriority(),$_ovhStructTelephonySmsSend->getSmsCoding(),$_ovhStructTelephonySmsSend->getTag(),$_ovhStructTelephonySmsSend->getNoStop()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyLineGetSipDomain
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyLineGetSipDomain::getSession()
	 * @uses OvhStructTelephonyLineGetSipDomain::getNumber()
	 * @uses OvhStructTelephonyLineGetSipDomain::getCountry()
	 * @param OvhStructTelephonyLineGetSipDomain $_ovhStructTelephonyLineGetSipDomain
	 * @return OvhStructTelephonyLineGetSipDomainResponse
	 */
	public function telephonyLineGetSipDomain(OvhStructTelephonyLineGetSipDomain $_ovhStructTelephonyLineGetSipDomain)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyLineGetSipDomain($_ovhStructTelephonyLineGetSipDomain->getSession(),$_ovhStructTelephonyLineGetSipDomain->getNumber(),$_ovhStructTelephonyLineGetSipDomain->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyToneDelete
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyToneDelete::getSession()
	 * @uses OvhStructTelephonyToneDelete::getNumber()
	 * @uses OvhStructTelephonyToneDelete::getCountry()
	 * @uses OvhStructTelephonyToneDelete::getToneType()
	 * @param OvhStructTelephonyToneDelete $_ovhStructTelephonyToneDelete
	 * @return OvhStructTelephonyToneDeleteResponse
	 */
	public function telephonyToneDelete(OvhStructTelephonyToneDelete $_ovhStructTelephonyToneDelete)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyToneDelete($_ovhStructTelephonyToneDelete->getSession(),$_ovhStructTelephonyToneDelete->getNumber(),$_ovhStructTelephonyToneDelete->getCountry(),$_ovhStructTelephonyToneDelete->getToneType()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyLineSetMgcpIpRestriction
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyLineSetMgcpIpRestriction::getSession()
	 * @uses OvhStructTelephonyLineSetMgcpIpRestriction::getNumber()
	 * @uses OvhStructTelephonyLineSetMgcpIpRestriction::getCountry()
	 * @uses OvhStructTelephonyLineSetMgcpIpRestriction::getIps()
	 * @param OvhStructTelephonyLineSetMgcpIpRestriction $_ovhStructTelephonyLineSetMgcpIpRestriction
	 * @return OvhStructTelephonyLineSetMgcpIpRestrictionResponse
	 */
	public function telephonyLineSetMgcpIpRestriction(OvhStructTelephonyLineSetMgcpIpRestriction $_ovhStructTelephonyLineSetMgcpIpRestriction)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyLineSetMgcpIpRestriction($_ovhStructTelephonyLineSetMgcpIpRestriction->getSession(),$_ovhStructTelephonyLineSetMgcpIpRestriction->getNumber(),$_ovhStructTelephonyLineSetMgcpIpRestriction->getCountry(),$_ovhStructTelephonyLineSetMgcpIpRestriction->getIps()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPhonebookOnGroupContactModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPhonebookOnGroupContactModify::getSession()
	 * @uses OvhStructTelephonyPhonebookOnGroupContactModify::getGroup()
	 * @uses OvhStructTelephonyPhonebookOnGroupContactModify::getId()
	 * @uses OvhStructTelephonyPhonebookOnGroupContactModify::getName()
	 * @uses OvhStructTelephonyPhonebookOnGroupContactModify::getSurname()
	 * @uses OvhStructTelephonyPhonebookOnGroupContactModify::getWorkPhone()
	 * @uses OvhStructTelephonyPhonebookOnGroupContactModify::getWorkMobile()
	 * @uses OvhStructTelephonyPhonebookOnGroupContactModify::getHomePhone()
	 * @uses OvhStructTelephonyPhonebookOnGroupContactModify::getHomeMobile()
	 * @uses OvhStructTelephonyPhonebookOnGroupContactModify::getGroupName()
	 * @param OvhStructTelephonyPhonebookOnGroupContactModify $_ovhStructTelephonyPhonebookOnGroupContactModify
	 * @return OvhStructTelephonyPhonebookOnGroupContactModifyResponse
	 */
	public function telephonyPhonebookOnGroupContactModify(OvhStructTelephonyPhonebookOnGroupContactModify $_ovhStructTelephonyPhonebookOnGroupContactModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPhonebookOnGroupContactModify($_ovhStructTelephonyPhonebookOnGroupContactModify->getSession(),$_ovhStructTelephonyPhonebookOnGroupContactModify->getGroup(),$_ovhStructTelephonyPhonebookOnGroupContactModify->getId(),$_ovhStructTelephonyPhonebookOnGroupContactModify->getName(),$_ovhStructTelephonyPhonebookOnGroupContactModify->getSurname(),$_ovhStructTelephonyPhonebookOnGroupContactModify->getWorkPhone(),$_ovhStructTelephonyPhonebookOnGroupContactModify->getWorkMobile(),$_ovhStructTelephonyPhonebookOnGroupContactModify->getHomePhone(),$_ovhStructTelephonyPhonebookOnGroupContactModify->getHomeMobile(),$_ovhStructTelephonyPhonebookOnGroupContactModify->getGroupName()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyScreenListBlackWhiteChoiceModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyScreenListBlackWhiteChoiceModify::getSession()
	 * @uses OvhStructTelephonyScreenListBlackWhiteChoiceModify::getNumber()
	 * @uses OvhStructTelephonyScreenListBlackWhiteChoiceModify::getCountry()
	 * @uses OvhStructTelephonyScreenListBlackWhiteChoiceModify::getScreenList()
	 * @uses OvhStructTelephonyScreenListBlackWhiteChoiceModify::getOutgoingCodeUnlock()
	 * @uses OvhStructTelephonyScreenListBlackWhiteChoiceModify::getIncomingOoutgoing()
	 * @param OvhStructTelephonyScreenListBlackWhiteChoiceModify $_ovhStructTelephonyScreenListBlackWhiteChoiceModify
	 * @return OvhStructTelephonyScreenListBlackWhiteChoiceModifyResponse
	 */
	public function telephonyScreenListBlackWhiteChoiceModify(OvhStructTelephonyScreenListBlackWhiteChoiceModify $_ovhStructTelephonyScreenListBlackWhiteChoiceModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyScreenListBlackWhiteChoiceModify($_ovhStructTelephonyScreenListBlackWhiteChoiceModify->getSession(),$_ovhStructTelephonyScreenListBlackWhiteChoiceModify->getNumber(),$_ovhStructTelephonyScreenListBlackWhiteChoiceModify->getCountry(),$_ovhStructTelephonyScreenListBlackWhiteChoiceModify->getScreenList(),$_ovhStructTelephonyScreenListBlackWhiteChoiceModify->getOutgoingCodeUnlock(),$_ovhStructTelephonyScreenListBlackWhiteChoiceModify->getIncomingOoutgoing()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsplusServiceDetails
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsplusServiceDetails::getSession()
	 * @uses OvhStructTelephonySmsplusServiceDetails::getShortCode()
	 * @uses OvhStructTelephonySmsplusServiceDetails::getKeyword()
	 * @param OvhStructTelephonySmsplusServiceDetails $_ovhStructTelephonySmsplusServiceDetails
	 * @return OvhStructTelephonySmsplusServiceDetailsResponse
	 */
	public function telephonySmsplusServiceDetails(OvhStructTelephonySmsplusServiceDetails $_ovhStructTelephonySmsplusServiceDetails)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsplusServiceDetails($_ovhStructTelephonySmsplusServiceDetails->getSession(),$_ovhStructTelephonySmsplusServiceDetails->getShortCode(),$_ovhStructTelephonySmsplusServiceDetails->getKeyword()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyAbbreviatedNumberOnGroupDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyAbbreviatedNumberOnGroupDel::getSession()
	 * @uses OvhStructTelephonyAbbreviatedNumberOnGroupDel::getGroup()
	 * @uses OvhStructTelephonyAbbreviatedNumberOnGroupDel::getAbbreviatedNumber()
	 * @param OvhStructTelephonyAbbreviatedNumberOnGroupDel $_ovhStructTelephonyAbbreviatedNumberOnGroupDel
	 * @return OvhStructTelephonyAbbreviatedNumberOnGroupDelResponse
	 */
	public function telephonyAbbreviatedNumberOnGroupDel(OvhStructTelephonyAbbreviatedNumberOnGroupDel $_ovhStructTelephonyAbbreviatedNumberOnGroupDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyAbbreviatedNumberOnGroupDel($_ovhStructTelephonyAbbreviatedNumberOnGroupDel->getSession(),$_ovhStructTelephonyAbbreviatedNumberOnGroupDel->getGroup(),$_ovhStructTelephonyAbbreviatedNumberOnGroupDel->getAbbreviatedNumber()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsSenderDescription
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsSenderDescription::getSession()
	 * @uses OvhStructTelephonySmsSenderDescription::getSmsAccount()
	 * @uses OvhStructTelephonySmsSenderDescription::getNumber()
	 * @uses OvhStructTelephonySmsSenderDescription::getDescription()
	 * @param OvhStructTelephonySmsSenderDescription $_ovhStructTelephonySmsSenderDescription
	 * @return OvhStructTelephonySmsSenderDescriptionResponse
	 */
	public function telephonySmsSenderDescription(OvhStructTelephonySmsSenderDescription $_ovhStructTelephonySmsSenderDescription)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsSenderDescription($_ovhStructTelephonySmsSenderDescription->getSession(),$_ovhStructTelephonySmsSenderDescription->getSmsAccount(),$_ovhStructTelephonySmsSenderDescription->getNumber(),$_ovhStructTelephonySmsSenderDescription->getDescription()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyAbbreviatedNumberListPaginated
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyAbbreviatedNumberListPaginated::getSession()
	 * @uses OvhStructTelephonyAbbreviatedNumberListPaginated::getNumber()
	 * @uses OvhStructTelephonyAbbreviatedNumberListPaginated::getCountry()
	 * @uses OvhStructTelephonyAbbreviatedNumberListPaginated::getPagingStart()
	 * @uses OvhStructTelephonyAbbreviatedNumberListPaginated::getPagingLimit()
	 * @uses OvhStructTelephonyAbbreviatedNumberListPaginated::getSortField()
	 * @uses OvhStructTelephonyAbbreviatedNumberListPaginated::getSortOrder()
	 * @param OvhStructTelephonyAbbreviatedNumberListPaginated $_ovhStructTelephonyAbbreviatedNumberListPaginated
	 * @return OvhStructTelephonyAbbreviatedNumberListPaginatedResponse
	 */
	public function telephonyAbbreviatedNumberListPaginated(OvhStructTelephonyAbbreviatedNumberListPaginated $_ovhStructTelephonyAbbreviatedNumberListPaginated)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyAbbreviatedNumberListPaginated($_ovhStructTelephonyAbbreviatedNumberListPaginated->getSession(),$_ovhStructTelephonyAbbreviatedNumberListPaginated->getNumber(),$_ovhStructTelephonyAbbreviatedNumberListPaginated->getCountry(),$_ovhStructTelephonyAbbreviatedNumberListPaginated->getPagingStart(),$_ovhStructTelephonyAbbreviatedNumberListPaginated->getPagingLimit(),$_ovhStructTelephonyAbbreviatedNumberListPaginated->getSortField(),$_ovhStructTelephonyAbbreviatedNumberListPaginated->getSortOrder()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySetDefaultPrivateHolidaysEvents
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySetDefaultPrivateHolidaysEvents::getSession()
	 * @uses OvhStructTelephonySetDefaultPrivateHolidaysEvents::getNumber()
	 * @uses OvhStructTelephonySetDefaultPrivateHolidaysEvents::getCountry()
	 * @uses OvhStructTelephonySetDefaultPrivateHolidaysEvents::getDefaultPublicHolidaysCountry()
	 * @param OvhStructTelephonySetDefaultPrivateHolidaysEvents $_ovhStructTelephonySetDefaultPrivateHolidaysEvents
	 * @return OvhStructTelephonySetDefaultPrivateHolidaysEventsResponse
	 */
	public function telephonySetDefaultPrivateHolidaysEvents(OvhStructTelephonySetDefaultPrivateHolidaysEvents $_ovhStructTelephonySetDefaultPrivateHolidaysEvents)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySetDefaultPrivateHolidaysEvents($_ovhStructTelephonySetDefaultPrivateHolidaysEvents->getSession(),$_ovhStructTelephonySetDefaultPrivateHolidaysEvents->getNumber(),$_ovhStructTelephonySetDefaultPrivateHolidaysEvents->getCountry(),$_ovhStructTelephonySetDefaultPrivateHolidaysEvents->getDefaultPublicHolidaysCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySpareServiceList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySpareServiceList::getSession()
	 * @uses OvhStructTelephonySpareServiceList::getType()
	 * @uses OvhStructTelephonySpareServiceList::getSpare()
	 * @param OvhStructTelephonySpareServiceList $_ovhStructTelephonySpareServiceList
	 * @return OvhStructTelephonySpareServiceListResponse
	 */
	public function telephonySpareServiceList(OvhStructTelephonySpareServiceList $_ovhStructTelephonySpareServiceList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySpareServiceList($_ovhStructTelephonySpareServiceList->getSession(),$_ovhStructTelephonySpareServiceList->getType(),$_ovhStructTelephonySpareServiceList->getSpare()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsUserListCsvAttachment
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsUserListCsvAttachment::getSmsAccount()
	 * @uses OvhStructTelephonySmsUserListCsvAttachment::getLogin()
	 * @uses OvhStructTelephonySmsUserListCsvAttachment::getPassword()
	 * @uses OvhStructTelephonySmsUserListCsvAttachment::getId()
	 * @param OvhStructTelephonySmsUserListCsvAttachment $_ovhStructTelephonySmsUserListCsvAttachment
	 * @return OvhStructTelephonySmsUserListCsvAttachmentResponse
	 */
	public function telephonySmsUserListCsvAttachment(OvhStructTelephonySmsUserListCsvAttachment $_ovhStructTelephonySmsUserListCsvAttachment)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsUserListCsvAttachment($_ovhStructTelephonySmsUserListCsvAttachment->getSmsAccount(),$_ovhStructTelephonySmsUserListCsvAttachment->getLogin(),$_ovhStructTelephonySmsUserListCsvAttachment->getPassword(),$_ovhStructTelephonySmsUserListCsvAttachment->getId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyFaxCallList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyFaxCallList::getSession()
	 * @uses OvhStructTelephonyFaxCallList::getNumber()
	 * @uses OvhStructTelephonyFaxCallList::getCountry()
	 * @uses OvhStructTelephonyFaxCallList::getListBegin()
	 * @uses OvhStructTelephonyFaxCallList::getListLimit()
	 * @uses OvhStructTelephonyFaxCallList::getFaxReceived()
	 * @param OvhStructTelephonyFaxCallList $_ovhStructTelephonyFaxCallList
	 * @return OvhStructTelephonyFaxCallListResponse
	 */
	public function telephonyFaxCallList(OvhStructTelephonyFaxCallList $_ovhStructTelephonyFaxCallList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyFaxCallList($_ovhStructTelephonyFaxCallList->getSession(),$_ovhStructTelephonyFaxCallList->getNumber(),$_ovhStructTelephonyFaxCallList->getCountry(),$_ovhStructTelephonyFaxCallList->getListBegin(),$_ovhStructTelephonyFaxCallList->getListLimit(),$_ovhStructTelephonyFaxCallList->getFaxReceived()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsUserSend
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsUserSend::getLogin()
	 * @uses OvhStructTelephonySmsUserSend::getPassword()
	 * @uses OvhStructTelephonySmsUserSend::getSmsAccount()
	 * @uses OvhStructTelephonySmsUserSend::getNumberFrom()
	 * @uses OvhStructTelephonySmsUserSend::getNumberTo()
	 * @uses OvhStructTelephonySmsUserSend::getMessage()
	 * @uses OvhStructTelephonySmsUserSend::getSmsValidity()
	 * @uses OvhStructTelephonySmsUserSend::getSmsClass()
	 * @uses OvhStructTelephonySmsUserSend::getSmsDeferred()
	 * @uses OvhStructTelephonySmsUserSend::getSmsPriority()
	 * @uses OvhStructTelephonySmsUserSend::getSmsCoding()
	 * @uses OvhStructTelephonySmsUserSend::getTag()
	 * @uses OvhStructTelephonySmsUserSend::getNoStop()
	 * @param OvhStructTelephonySmsUserSend $_ovhStructTelephonySmsUserSend
	 * @return OvhStructTelephonySmsUserSendResponse
	 */
	public function telephonySmsUserSend(OvhStructTelephonySmsUserSend $_ovhStructTelephonySmsUserSend)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsUserSend($_ovhStructTelephonySmsUserSend->getLogin(),$_ovhStructTelephonySmsUserSend->getPassword(),$_ovhStructTelephonySmsUserSend->getSmsAccount(),$_ovhStructTelephonySmsUserSend->getNumberFrom(),$_ovhStructTelephonySmsUserSend->getNumberTo(),$_ovhStructTelephonySmsUserSend->getMessage(),$_ovhStructTelephonySmsUserSend->getSmsValidity(),$_ovhStructTelephonySmsUserSend->getSmsClass(),$_ovhStructTelephonySmsUserSend->getSmsDeferred(),$_ovhStructTelephonySmsUserSend->getSmsPriority(),$_ovhStructTelephonySmsUserSend->getSmsCoding(),$_ovhStructTelephonySmsUserSend->getTag(),$_ovhStructTelephonySmsUserSend->getNoStop()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPhonebookOnGroupGroupList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPhonebookOnGroupGroupList::getSession()
	 * @uses OvhStructTelephonyPhonebookOnGroupGroupList::getGroup()
	 * @uses OvhStructTelephonyPhonebookOnGroupGroupList::getId()
	 * @param OvhStructTelephonyPhonebookOnGroupGroupList $_ovhStructTelephonyPhonebookOnGroupGroupList
	 * @return OvhStructTelephonyPhonebookOnGroupGroupListResponse
	 */
	public function telephonyPhonebookOnGroupGroupList(OvhStructTelephonyPhonebookOnGroupGroupList $_ovhStructTelephonyPhonebookOnGroupGroupList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPhonebookOnGroupGroupList($_ovhStructTelephonyPhonebookOnGroupGroupList->getSession(),$_ovhStructTelephonyPhonebookOnGroupGroupList->getGroup(),$_ovhStructTelephonyPhonebookOnGroupGroupList->getId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyClick2CallUserPassword
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyClick2CallUserPassword::getSession()
	 * @uses OvhStructTelephonyClick2CallUserPassword::getNumber()
	 * @uses OvhStructTelephonyClick2CallUserPassword::getCountry()
	 * @uses OvhStructTelephonyClick2CallUserPassword::getLogin()
	 * @uses OvhStructTelephonyClick2CallUserPassword::getPassword()
	 * @param OvhStructTelephonyClick2CallUserPassword $_ovhStructTelephonyClick2CallUserPassword
	 * @return OvhStructTelephonyClick2CallUserPasswordResponse
	 */
	public function telephonyClick2CallUserPassword(OvhStructTelephonyClick2CallUserPassword $_ovhStructTelephonyClick2CallUserPassword)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyClick2CallUserPassword($_ovhStructTelephonyClick2CallUserPassword->getSession(),$_ovhStructTelephonyClick2CallUserPassword->getNumber(),$_ovhStructTelephonyClick2CallUserPassword->getCountry(),$_ovhStructTelephonyClick2CallUserPassword->getLogin(),$_ovhStructTelephonyClick2CallUserPassword->getPassword()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsGetUserQuota
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsGetUserQuota::getSession()
	 * @uses OvhStructTelephonySmsGetUserQuota::getSmsAccount()
	 * @uses OvhStructTelephonySmsGetUserQuota::getLogin()
	 * @param OvhStructTelephonySmsGetUserQuota $_ovhStructTelephonySmsGetUserQuota
	 * @return OvhStructTelephonySmsGetUserQuotaResponse
	 */
	public function telephonySmsGetUserQuota(OvhStructTelephonySmsGetUserQuota $_ovhStructTelephonySmsGetUserQuota)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsGetUserQuota($_ovhStructTelephonySmsGetUserQuota->getSession(),$_ovhStructTelephonySmsGetUserQuota->getSmsAccount(),$_ovhStructTelephonySmsGetUserQuota->getLogin()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsSenderDelete
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsSenderDelete::getSession()
	 * @uses OvhStructTelephonySmsSenderDelete::getSmsAccount()
	 * @uses OvhStructTelephonySmsSenderDelete::getNumber()
	 * @param OvhStructTelephonySmsSenderDelete $_ovhStructTelephonySmsSenderDelete
	 * @return OvhStructTelephonySmsSenderDeleteResponse
	 */
	public function telephonySmsSenderDelete(OvhStructTelephonySmsSenderDelete $_ovhStructTelephonySmsSenderDelete)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsSenderDelete($_ovhStructTelephonySmsSenderDelete->getSession(),$_ovhStructTelephonySmsSenderDelete->getSmsAccount(),$_ovhStructTelephonySmsSenderDelete->getNumber()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyToneStatus
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyToneStatus::getSession()
	 * @uses OvhStructTelephonyToneStatus::getNumber()
	 * @uses OvhStructTelephonyToneStatus::getCountry()
	 * @param OvhStructTelephonyToneStatus $_ovhStructTelephonyToneStatus
	 * @return OvhStructTelephonyToneStatusResponse
	 */
	public function telephonyToneStatus(OvhStructTelephonyToneStatus $_ovhStructTelephonyToneStatus)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyToneStatus($_ovhStructTelephonyToneStatus->getSession(),$_ovhStructTelephonyToneStatus->getNumber(),$_ovhStructTelephonyToneStatus->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyDdiInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyDdiInfo::getSession()
	 * @uses OvhStructTelephonyDdiInfo::getNumber()
	 * @uses OvhStructTelephonyDdiInfo::getCountry()
	 * @param OvhStructTelephonyDdiInfo $_ovhStructTelephonyDdiInfo
	 * @return OvhStructTelephonyDdiInfoResponse
	 */
	public function telephonyDdiInfo(OvhStructTelephonyDdiInfo $_ovhStructTelephonyDdiInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyDdiInfo($_ovhStructTelephonyDdiInfo->getSession(),$_ovhStructTelephonyDdiInfo->getNumber(),$_ovhStructTelephonyDdiInfo->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyHuntingGroupList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyHuntingGroupList::getSession()
	 * @uses OvhStructTelephonyHuntingGroupList::getNumber()
	 * @uses OvhStructTelephonyHuntingGroupList::getCountry()
	 * @param OvhStructTelephonyHuntingGroupList $_ovhStructTelephonyHuntingGroupList
	 * @return OvhStructTelephonyHuntingGroupListResponse
	 */
	public function telephonyHuntingGroupList(OvhStructTelephonyHuntingGroupList $_ovhStructTelephonyHuntingGroupList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyHuntingGroupList($_ovhStructTelephonyHuntingGroupList->getSession(),$_ovhStructTelephonyHuntingGroupList->getNumber(),$_ovhStructTelephonyHuntingGroupList->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyTrunkExternalDisplayedNumberList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyTrunkExternalDisplayedNumberList::getSession()
	 * @uses OvhStructTelephonyTrunkExternalDisplayedNumberList::getNumber()
	 * @uses OvhStructTelephonyTrunkExternalDisplayedNumberList::getCountry()
	 * @param OvhStructTelephonyTrunkExternalDisplayedNumberList $_ovhStructTelephonyTrunkExternalDisplayedNumberList
	 * @return OvhStructTelephonyTrunkExternalDisplayedNumberListResponse
	 */
	public function telephonyTrunkExternalDisplayedNumberList(OvhStructTelephonyTrunkExternalDisplayedNumberList $_ovhStructTelephonyTrunkExternalDisplayedNumberList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyTrunkExternalDisplayedNumberList($_ovhStructTelephonyTrunkExternalDisplayedNumberList->getSession(),$_ovhStructTelephonyTrunkExternalDisplayedNumberList->getNumber(),$_ovhStructTelephonyTrunkExternalDisplayedNumberList->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyDirectoryListWayType
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyDirectoryListWayType::getSession()
	 * @param OvhStructTelephonyDirectoryListWayType $_ovhStructTelephonyDirectoryListWayType
	 * @return OvhStructTelephonyDirectoryListWayTypeResponse
	 */
	public function telephonyDirectoryListWayType(OvhStructTelephonyDirectoryListWayType $_ovhStructTelephonyDirectoryListWayType)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyDirectoryListWayType($_ovhStructTelephonyDirectoryListWayType->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsUserHistoryCsv
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsUserHistoryCsv::getLogin()
	 * @uses OvhStructTelephonySmsUserHistoryCsv::getPassword()
	 * @uses OvhStructTelephonySmsUserHistoryCsv::getSmsAccount()
	 * @uses OvhStructTelephonySmsUserHistoryCsv::getSmsId()
	 * @uses OvhStructTelephonySmsUserHistoryCsv::getUser()
	 * @uses OvhStructTelephonySmsUserHistoryCsv::getPagingStart()
	 * @uses OvhStructTelephonySmsUserHistoryCsv::getPagingLimit()
	 * @uses OvhStructTelephonySmsUserHistoryCsv::getSortField()
	 * @uses OvhStructTelephonySmsUserHistoryCsv::getSortOrder()
	 * @uses OvhStructTelephonySmsUserHistoryCsv::getTag()
	 * @uses OvhStructTelephonySmsUserHistoryCsv::getFilter()
	 * @param OvhStructTelephonySmsUserHistoryCsv $_ovhStructTelephonySmsUserHistoryCsv
	 * @return OvhStructTelephonySmsUserHistoryCsvResponse
	 */
	public function telephonySmsUserHistoryCsv(OvhStructTelephonySmsUserHistoryCsv $_ovhStructTelephonySmsUserHistoryCsv)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsUserHistoryCsv($_ovhStructTelephonySmsUserHistoryCsv->getLogin(),$_ovhStructTelephonySmsUserHistoryCsv->getPassword(),$_ovhStructTelephonySmsUserHistoryCsv->getSmsAccount(),$_ovhStructTelephonySmsUserHistoryCsv->getSmsId(),$_ovhStructTelephonySmsUserHistoryCsv->getUser(),$_ovhStructTelephonySmsUserHistoryCsv->getPagingStart(),$_ovhStructTelephonySmsUserHistoryCsv->getPagingLimit(),$_ovhStructTelephonySmsUserHistoryCsv->getSortField(),$_ovhStructTelephonySmsUserHistoryCsv->getSortOrder(),$_ovhStructTelephonySmsUserHistoryCsv->getTag(),$_ovhStructTelephonySmsUserHistoryCsv->getFilter()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyCallList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyCallList::getSession()
	 * @uses OvhStructTelephonyCallList::getNumber()
	 * @uses OvhStructTelephonyCallList::getCountry()
	 * @uses OvhStructTelephonyCallList::getListBegin()
	 * @uses OvhStructTelephonyCallList::getListLimit()
	 * @uses OvhStructTelephonyCallList::getListType()
	 * @uses OvhStructTelephonyCallList::getDate()
	 * @uses OvhStructTelephonyCallList::getCallReceived()
	 * @uses OvhStructTelephonyCallList::getFilterSearch()
	 * @uses OvhStructTelephonyCallList::getFilterValue()
	 * @uses OvhStructTelephonyCallList::getPlanType()
	 * @param OvhStructTelephonyCallList $_ovhStructTelephonyCallList
	 * @return OvhStructTelephonyCallListResponse
	 */
	public function telephonyCallList(OvhStructTelephonyCallList $_ovhStructTelephonyCallList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyCallList($_ovhStructTelephonyCallList->getSession(),$_ovhStructTelephonyCallList->getNumber(),$_ovhStructTelephonyCallList->getCountry(),$_ovhStructTelephonyCallList->getListBegin(),$_ovhStructTelephonyCallList->getListLimit(),$_ovhStructTelephonyCallList->getListType(),$_ovhStructTelephonyCallList->getDate(),$_ovhStructTelephonyCallList->getCallReceived(),$_ovhStructTelephonyCallList->getFilterSearch(),$_ovhStructTelephonyCallList->getFilterValue(),$_ovhStructTelephonyCallList->getPlanType()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyGetDefaultPrivateHolidaysEvents
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyGetDefaultPrivateHolidaysEvents::getSession()
	 * @param OvhStructTelephonyGetDefaultPrivateHolidaysEvents $_ovhStructTelephonyGetDefaultPrivateHolidaysEvents
	 * @return OvhStructTelephonyGetDefaultPrivateHolidaysEventsResponse
	 */
	public function telephonyGetDefaultPrivateHolidaysEvents(OvhStructTelephonyGetDefaultPrivateHolidaysEvents $_ovhStructTelephonyGetDefaultPrivateHolidaysEvents)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyGetDefaultPrivateHolidaysEvents($_ovhStructTelephonyGetDefaultPrivateHolidaysEvents->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsplusShortCodesList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsplusShortCodesList::getSession()
	 * @uses OvhStructTelephonySmsplusShortCodesList::getShortCode()
	 * @uses OvhStructTelephonySmsplusShortCodesList::getShortCodeCategory()
	 * @uses OvhStructTelephonySmsplusShortCodesList::getPublicType()
	 * @uses OvhStructTelephonySmsplusShortCodesList::getPrice()
	 * @uses OvhStructTelephonySmsplusShortCodesList::getRates()
	 * @param OvhStructTelephonySmsplusShortCodesList $_ovhStructTelephonySmsplusShortCodesList
	 * @return OvhStructTelephonySmsplusShortCodesListResponse
	 */
	public function telephonySmsplusShortCodesList(OvhStructTelephonySmsplusShortCodesList $_ovhStructTelephonySmsplusShortCodesList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsplusShortCodesList($_ovhStructTelephonySmsplusShortCodesList->getSession(),$_ovhStructTelephonySmsplusShortCodesList->getShortCode(),$_ovhStructTelephonySmsplusShortCodesList->getShortCodeCategory(),$_ovhStructTelephonySmsplusShortCodesList->getPublicType(),$_ovhStructTelephonySmsplusShortCodesList->getPrice(),$_ovhStructTelephonySmsplusShortCodesList->getRates()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyAliasToSipPossibilities
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyAliasToSipPossibilities::getSession()
	 * @uses OvhStructTelephonyAliasToSipPossibilities::getNumber()
	 * @uses OvhStructTelephonyAliasToSipPossibilities::getCountry()
	 * @param OvhStructTelephonyAliasToSipPossibilities $_ovhStructTelephonyAliasToSipPossibilities
	 * @return OvhStructTelephonyAliasToSipPossibilitiesResponse
	 */
	public function telephonyAliasToSipPossibilities(OvhStructTelephonyAliasToSipPossibilities $_ovhStructTelephonyAliasToSipPossibilities)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyAliasToSipPossibilities($_ovhStructTelephonyAliasToSipPossibilities->getSession(),$_ovhStructTelephonyAliasToSipPossibilities->getNumber(),$_ovhStructTelephonyAliasToSipPossibilities->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyAbbreviatedNumberOnGroupAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyAbbreviatedNumberOnGroupAdd::getSession()
	 * @uses OvhStructTelephonyAbbreviatedNumberOnGroupAdd::getGroup()
	 * @uses OvhStructTelephonyAbbreviatedNumberOnGroupAdd::getAbbreviatedNumber()
	 * @uses OvhStructTelephonyAbbreviatedNumberOnGroupAdd::getRelatedNumber()
	 * @uses OvhStructTelephonyAbbreviatedNumberOnGroupAdd::getName()
	 * @uses OvhStructTelephonyAbbreviatedNumberOnGroupAdd::getSurname()
	 * @param OvhStructTelephonyAbbreviatedNumberOnGroupAdd $_ovhStructTelephonyAbbreviatedNumberOnGroupAdd
	 * @return OvhStructTelephonyAbbreviatedNumberOnGroupAddResponse
	 */
	public function telephonyAbbreviatedNumberOnGroupAdd(OvhStructTelephonyAbbreviatedNumberOnGroupAdd $_ovhStructTelephonyAbbreviatedNumberOnGroupAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyAbbreviatedNumberOnGroupAdd($_ovhStructTelephonyAbbreviatedNumberOnGroupAdd->getSession(),$_ovhStructTelephonyAbbreviatedNumberOnGroupAdd->getGroup(),$_ovhStructTelephonyAbbreviatedNumberOnGroupAdd->getAbbreviatedNumber(),$_ovhStructTelephonyAbbreviatedNumberOnGroupAdd->getRelatedNumber(),$_ovhStructTelephonyAbbreviatedNumberOnGroupAdd->getName(),$_ovhStructTelephonyAbbreviatedNumberOnGroupAdd->getSurname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyHuntingModificationQueue
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyHuntingModificationQueue::getSession()
	 * @uses OvhStructTelephonyHuntingModificationQueue::getNumber()
	 * @uses OvhStructTelephonyHuntingModificationQueue::getCountry()
	 * @uses OvhStructTelephonyHuntingModificationQueue::getBillingAccount()
	 * @uses OvhStructTelephonyHuntingModificationQueue::getOnHoldTimer()
	 * @uses OvhStructTelephonyHuntingModificationQueue::getQueueSize()
	 * @param OvhStructTelephonyHuntingModificationQueue $_ovhStructTelephonyHuntingModificationQueue
	 * @return OvhStructTelephonyHuntingModificationQueueResponse
	 */
	public function telephonyHuntingModificationQueue(OvhStructTelephonyHuntingModificationQueue $_ovhStructTelephonyHuntingModificationQueue)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyHuntingModificationQueue($_ovhStructTelephonyHuntingModificationQueue->getSession(),$_ovhStructTelephonyHuntingModificationQueue->getNumber(),$_ovhStructTelephonyHuntingModificationQueue->getCountry(),$_ovhStructTelephonyHuntingModificationQueue->getBillingAccount(),$_ovhStructTelephonyHuntingModificationQueue->getOnHoldTimer(),$_ovhStructTelephonyHuntingModificationQueue->getQueueSize()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyDirectoryInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyDirectoryInfo::getSession()
	 * @uses OvhStructTelephonyDirectoryInfo::getCallNumber()
	 * @uses OvhStructTelephonyDirectoryInfo::getCountryCode()
	 * @param OvhStructTelephonyDirectoryInfo $_ovhStructTelephonyDirectoryInfo
	 * @return OvhStructTelephonyDirectoryInfoResponse
	 */
	public function telephonyDirectoryInfo(OvhStructTelephonyDirectoryInfo $_ovhStructTelephonyDirectoryInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyDirectoryInfo($_ovhStructTelephonyDirectoryInfo->getSession(),$_ovhStructTelephonyDirectoryInfo->getCallNumber(),$_ovhStructTelephonyDirectoryInfo->getCountryCode()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyBillDetails
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyBillDetails::getSession()
	 * @uses OvhStructTelephonyBillDetails::getBillingAccount()
	 * @uses OvhStructTelephonyBillDetails::getDate()
	 * @param OvhStructTelephonyBillDetails $_ovhStructTelephonyBillDetails
	 * @return OvhStructTelephonyBillDetailsResponse
	 */
	public function telephonyBillDetails(OvhStructTelephonyBillDetails $_ovhStructTelephonyBillDetails)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyBillDetails($_ovhStructTelephonyBillDetails->getSession(),$_ovhStructTelephonyBillDetails->getBillingAccount(),$_ovhStructTelephonyBillDetails->getDate()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyLineLogsNotificationOptionsModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyLineLogsNotificationOptionsModify::getSession()
	 * @uses OvhStructTelephonyLineLogsNotificationOptionsModify::getNumber()
	 * @uses OvhStructTelephonyLineLogsNotificationOptionsModify::getCountry()
	 * @uses OvhStructTelephonyLineLogsNotificationOptionsModify::getFrequency()
	 * @uses OvhStructTelephonyLineLogsNotificationOptionsModify::getSendIfNull()
	 * @uses OvhStructTelephonyLineLogsNotificationOptionsModify::getEmail()
	 * @param OvhStructTelephonyLineLogsNotificationOptionsModify $_ovhStructTelephonyLineLogsNotificationOptionsModify
	 * @return OvhStructTelephonyLineLogsNotificationOptionsModifyResponse
	 */
	public function telephonyLineLogsNotificationOptionsModify(OvhStructTelephonyLineLogsNotificationOptionsModify $_ovhStructTelephonyLineLogsNotificationOptionsModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyLineLogsNotificationOptionsModify($_ovhStructTelephonyLineLogsNotificationOptionsModify->getSession(),$_ovhStructTelephonyLineLogsNotificationOptionsModify->getNumber(),$_ovhStructTelephonyLineLogsNotificationOptionsModify->getCountry(),$_ovhStructTelephonyLineLogsNotificationOptionsModify->getFrequency(),$_ovhStructTelephonyLineLogsNotificationOptionsModify->getSendIfNull(),$_ovhStructTelephonyLineLogsNotificationOptionsModify->getEmail()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyClick2CallDoBySession
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyClick2CallDoBySession::getSession()
	 * @uses OvhStructTelephonyClick2CallDoBySession::getCalling()
	 * @uses OvhStructTelephonyClick2CallDoBySession::getCalled()
	 * @uses OvhStructTelephonyClick2CallDoBySession::getBillingNumber()
	 * @param OvhStructTelephonyClick2CallDoBySession $_ovhStructTelephonyClick2CallDoBySession
	 * @return OvhStructTelephonyClick2CallDoBySessionResponse
	 */
	public function telephonyClick2CallDoBySession(OvhStructTelephonyClick2CallDoBySession $_ovhStructTelephonyClick2CallDoBySession)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyClick2CallDoBySession($_ovhStructTelephonyClick2CallDoBySession->getSession(),$_ovhStructTelephonyClick2CallDoBySession->getCalling(),$_ovhStructTelephonyClick2CallDoBySession->getCalled(),$_ovhStructTelephonyClick2CallDoBySession->getBillingNumber()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyAbbreviatedNumberAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyAbbreviatedNumberAdd::getSession()
	 * @uses OvhStructTelephonyAbbreviatedNumberAdd::getNumber()
	 * @uses OvhStructTelephonyAbbreviatedNumberAdd::getCountry()
	 * @uses OvhStructTelephonyAbbreviatedNumberAdd::getAbbreviatedNumber()
	 * @uses OvhStructTelephonyAbbreviatedNumberAdd::getRelatedNumber()
	 * @uses OvhStructTelephonyAbbreviatedNumberAdd::getName()
	 * @uses OvhStructTelephonyAbbreviatedNumberAdd::getSurname()
	 * @param OvhStructTelephonyAbbreviatedNumberAdd $_ovhStructTelephonyAbbreviatedNumberAdd
	 * @return OvhStructTelephonyAbbreviatedNumberAddResponse
	 */
	public function telephonyAbbreviatedNumberAdd(OvhStructTelephonyAbbreviatedNumberAdd $_ovhStructTelephonyAbbreviatedNumberAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyAbbreviatedNumberAdd($_ovhStructTelephonyAbbreviatedNumberAdd->getSession(),$_ovhStructTelephonyAbbreviatedNumberAdd->getNumber(),$_ovhStructTelephonyAbbreviatedNumberAdd->getCountry(),$_ovhStructTelephonyAbbreviatedNumberAdd->getAbbreviatedNumber(),$_ovhStructTelephonyAbbreviatedNumberAdd->getRelatedNumber(),$_ovhStructTelephonyAbbreviatedNumberAdd->getName(),$_ovhStructTelephonyAbbreviatedNumberAdd->getSurname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyNumberOrder
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyNumberOrder::getSession()
	 * @uses OvhStructTelephonyNumberOrder::getBillingAccount()
	 * @uses OvhStructTelephonyNumberOrder::getAliasNumber()
	 * @uses OvhStructTelephonyNumberOrder::getPrefix()
	 * @uses OvhStructTelephonyNumberOrder::getCountry()
	 * @uses OvhStructTelephonyNumberOrder::getName()
	 * @uses OvhStructTelephonyNumberOrder::getFirstname()
	 * @uses OvhStructTelephonyNumberOrder::getStreetName()
	 * @uses OvhStructTelephonyNumberOrder::getStreetNumber()
	 * @uses OvhStructTelephonyNumberOrder::getZip()
	 * @uses OvhStructTelephonyNumberOrder::getCity()
	 * @uses OvhStructTelephonyNumberOrder::getEmail()
	 * @uses OvhStructTelephonyNumberOrder::getNumberToReserve()
	 * @uses OvhStructTelephonyNumberOrder::getProcedureId()
	 * @uses OvhStructTelephonyNumberOrder::getLegalForm()
	 * @uses OvhStructTelephonyNumberOrder::getSiret()
	 * @uses OvhStructTelephonyNumberOrder::getApe()
	 * @uses OvhStructTelephonyNumberOrder::getSocialNomination()
	 * @uses OvhStructTelephonyNumberOrder::getDisplayUniversalDirectory()
	 * @uses OvhStructTelephonyNumberOrder::getRetractation()
	 * @param OvhStructTelephonyNumberOrder $_ovhStructTelephonyNumberOrder
	 * @return OvhStructTelephonyNumberOrderResponse
	 */
	public function telephonyNumberOrder(OvhStructTelephonyNumberOrder $_ovhStructTelephonyNumberOrder)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyNumberOrder($_ovhStructTelephonyNumberOrder->getSession(),$_ovhStructTelephonyNumberOrder->getBillingAccount(),$_ovhStructTelephonyNumberOrder->getAliasNumber(),$_ovhStructTelephonyNumberOrder->getPrefix(),$_ovhStructTelephonyNumberOrder->getCountry(),$_ovhStructTelephonyNumberOrder->getName(),$_ovhStructTelephonyNumberOrder->getFirstname(),$_ovhStructTelephonyNumberOrder->getStreetName(),$_ovhStructTelephonyNumberOrder->getStreetNumber(),$_ovhStructTelephonyNumberOrder->getZip(),$_ovhStructTelephonyNumberOrder->getCity(),$_ovhStructTelephonyNumberOrder->getEmail(),$_ovhStructTelephonyNumberOrder->getNumberToReserve(),$_ovhStructTelephonyNumberOrder->getProcedureId(),$_ovhStructTelephonyNumberOrder->getLegalForm(),$_ovhStructTelephonyNumberOrder->getSiret(),$_ovhStructTelephonyNumberOrder->getApe(),$_ovhStructTelephonyNumberOrder->getSocialNomination(),$_ovhStructTelephonyNumberOrder->getDisplayUniversalDirectory(),$_ovhStructTelephonyNumberOrder->getRetractation()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyLineSetIpRestriction
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyLineSetIpRestriction::getSession()
	 * @uses OvhStructTelephonyLineSetIpRestriction::getNumber()
	 * @uses OvhStructTelephonyLineSetIpRestriction::getCountry()
	 * @uses OvhStructTelephonyLineSetIpRestriction::getIps()
	 * @param OvhStructTelephonyLineSetIpRestriction $_ovhStructTelephonyLineSetIpRestriction
	 * @return OvhStructTelephonyLineSetIpRestrictionResponse
	 */
	public function telephonyLineSetIpRestriction(OvhStructTelephonyLineSetIpRestriction $_ovhStructTelephonyLineSetIpRestriction)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyLineSetIpRestriction($_ovhStructTelephonyLineSetIpRestriction->getSession(),$_ovhStructTelephonyLineSetIpRestriction->getNumber(),$_ovhStructTelephonyLineSetIpRestriction->getCountry(),$_ovhStructTelephonyLineSetIpRestriction->getIps()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyLineSetCodecs
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyLineSetCodecs::getSession()
	 * @uses OvhStructTelephonyLineSetCodecs::getNumber()
	 * @uses OvhStructTelephonyLineSetCodecs::getCountry()
	 * @uses OvhStructTelephonyLineSetCodecs::getCodecs()
	 * @param OvhStructTelephonyLineSetCodecs $_ovhStructTelephonyLineSetCodecs
	 * @return OvhStructTelephonyLineSetCodecsResponse
	 */
	public function telephonyLineSetCodecs(OvhStructTelephonyLineSetCodecs $_ovhStructTelephonyLineSetCodecs)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyLineSetCodecs($_ovhStructTelephonyLineSetCodecs->getSession(),$_ovhStructTelephonyLineSetCodecs->getNumber(),$_ovhStructTelephonyLineSetCodecs->getCountry(),$_ovhStructTelephonyLineSetCodecs->getCodecs()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyNumberCityForZoneList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyNumberCityForZoneList::getSession()
	 * @uses OvhStructTelephonyNumberCityForZoneList::getZone()
	 * @param OvhStructTelephonyNumberCityForZoneList $_ovhStructTelephonyNumberCityForZoneList
	 * @return OvhStructTelephonyNumberCityForZoneListResponse
	 */
	public function telephonyNumberCityForZoneList(OvhStructTelephonyNumberCityForZoneList $_ovhStructTelephonyNumberCityForZoneList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyNumberCityForZoneList($_ovhStructTelephonyNumberCityForZoneList->getSession(),$_ovhStructTelephonyNumberCityForZoneList->getZone()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyTonesOptionsModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyTonesOptionsModify::getSession()
	 * @uses OvhStructTelephonyTonesOptionsModify::getNumber()
	 * @uses OvhStructTelephonyTonesOptionsModify::getCountry()
	 * @uses OvhStructTelephonyTonesOptionsModify::getToneRingback()
	 * @uses OvhStructTelephonyTonesOptionsModify::getToneOnHold()
	 * @uses OvhStructTelephonyTonesOptionsModify::getToneOnClosure()
	 * @uses OvhStructTelephonyTonesOptionsModify::getToneOnCallWaiting()
	 * @param OvhStructTelephonyTonesOptionsModify $_ovhStructTelephonyTonesOptionsModify
	 * @return OvhStructTelephonyTonesOptionsModifyResponse
	 */
	public function telephonyTonesOptionsModify(OvhStructTelephonyTonesOptionsModify $_ovhStructTelephonyTonesOptionsModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyTonesOptionsModify($_ovhStructTelephonyTonesOptionsModify->getSession(),$_ovhStructTelephonyTonesOptionsModify->getNumber(),$_ovhStructTelephonyTonesOptionsModify->getCountry(),$_ovhStructTelephonyTonesOptionsModify->getToneRingback(),$_ovhStructTelephonyTonesOptionsModify->getToneOnHold(),$_ovhStructTelephonyTonesOptionsModify->getToneOnClosure(),$_ovhStructTelephonyTonesOptionsModify->getToneOnCallWaiting()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyVoicemailMessagesRemoteUpload
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyVoicemailMessagesRemoteUpload::getSession()
	 * @uses OvhStructTelephonyVoicemailMessagesRemoteUpload::getNumber()
	 * @uses OvhStructTelephonyVoicemailMessagesRemoteUpload::getCountry()
	 * @uses OvhStructTelephonyVoicemailMessagesRemoteUpload::getMessType()
	 * @uses OvhStructTelephonyVoicemailMessagesRemoteUpload::getFilename()
	 * @uses OvhStructTelephonyVoicemailMessagesRemoteUpload::getUrl()
	 * @param OvhStructTelephonyVoicemailMessagesRemoteUpload $_ovhStructTelephonyVoicemailMessagesRemoteUpload
	 * @return OvhStructTelephonyVoicemailMessagesRemoteUploadResponse
	 */
	public function telephonyVoicemailMessagesRemoteUpload(OvhStructTelephonyVoicemailMessagesRemoteUpload $_ovhStructTelephonyVoicemailMessagesRemoteUpload)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyVoicemailMessagesRemoteUpload($_ovhStructTelephonyVoicemailMessagesRemoteUpload->getSession(),$_ovhStructTelephonyVoicemailMessagesRemoteUpload->getNumber(),$_ovhStructTelephonyVoicemailMessagesRemoteUpload->getCountry(),$_ovhStructTelephonyVoicemailMessagesRemoteUpload->getMessType(),$_ovhStructTelephonyVoicemailMessagesRemoteUpload->getFilename(),$_ovhStructTelephonyVoicemailMessagesRemoteUpload->getUrl()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyOfferInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyOfferInfo::getSession()
	 * @uses OvhStructTelephonyOfferInfo::getNumber()
	 * @uses OvhStructTelephonyOfferInfo::getCountry()
	 * @param OvhStructTelephonyOfferInfo $_ovhStructTelephonyOfferInfo
	 * @return OvhStructTelephonyOfferInfoResponse
	 */
	public function telephonyOfferInfo(OvhStructTelephonyOfferInfo $_ovhStructTelephonyOfferInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyOfferInfo($_ovhStructTelephonyOfferInfo->getSession(),$_ovhStructTelephonyOfferInfo->getNumber(),$_ovhStructTelephonyOfferInfo->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPhonebookDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPhonebookDel::getSession()
	 * @uses OvhStructTelephonyPhonebookDel::getNumber()
	 * @uses OvhStructTelephonyPhonebookDel::getCountry()
	 * @uses OvhStructTelephonyPhonebookDel::getId()
	 * @param OvhStructTelephonyPhonebookDel $_ovhStructTelephonyPhonebookDel
	 * @return OvhStructTelephonyPhonebookDelResponse
	 */
	public function telephonyPhonebookDel(OvhStructTelephonyPhonebookDel $_ovhStructTelephonyPhonebookDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPhonebookDel($_ovhStructTelephonyPhonebookDel->getSession(),$_ovhStructTelephonyPhonebookDel->getNumber(),$_ovhStructTelephonyPhonebookDel->getCountry(),$_ovhStructTelephonyPhonebookDel->getId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsUserAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsUserAdd::getSession()
	 * @uses OvhStructTelephonySmsUserAdd::getSmsAccount()
	 * @uses OvhStructTelephonySmsUserAdd::getLogin()
	 * @uses OvhStructTelephonySmsUserAdd::getPassword()
	 * @param OvhStructTelephonySmsUserAdd $_ovhStructTelephonySmsUserAdd
	 * @return OvhStructTelephonySmsUserAddResponse
	 */
	public function telephonySmsUserAdd(OvhStructTelephonySmsUserAdd $_ovhStructTelephonySmsUserAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsUserAdd($_ovhStructTelephonySmsUserAdd->getSession(),$_ovhStructTelephonySmsUserAdd->getSmsAccount(),$_ovhStructTelephonySmsUserAdd->getLogin(),$_ovhStructTelephonySmsUserAdd->getPassword()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsUserHistory
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsUserHistory::getLogin()
	 * @uses OvhStructTelephonySmsUserHistory::getPassword()
	 * @uses OvhStructTelephonySmsUserHistory::getSmsAccount()
	 * @uses OvhStructTelephonySmsUserHistory::getSmsId()
	 * @uses OvhStructTelephonySmsUserHistory::getUser()
	 * @uses OvhStructTelephonySmsUserHistory::getPagingStart()
	 * @uses OvhStructTelephonySmsUserHistory::getPagingLimit()
	 * @uses OvhStructTelephonySmsUserHistory::getSortField()
	 * @uses OvhStructTelephonySmsUserHistory::getSortOrder()
	 * @uses OvhStructTelephonySmsUserHistory::getTag()
	 * @uses OvhStructTelephonySmsUserHistory::getFilter()
	 * @param OvhStructTelephonySmsUserHistory $_ovhStructTelephonySmsUserHistory
	 * @return OvhStructTelephonySmsUserHistoryResponse
	 */
	public function telephonySmsUserHistory(OvhStructTelephonySmsUserHistory $_ovhStructTelephonySmsUserHistory)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsUserHistory($_ovhStructTelephonySmsUserHistory->getLogin(),$_ovhStructTelephonySmsUserHistory->getPassword(),$_ovhStructTelephonySmsUserHistory->getSmsAccount(),$_ovhStructTelephonySmsUserHistory->getSmsId(),$_ovhStructTelephonySmsUserHistory->getUser(),$_ovhStructTelephonySmsUserHistory->getPagingStart(),$_ovhStructTelephonySmsUserHistory->getPagingLimit(),$_ovhStructTelephonySmsUserHistory->getSortField(),$_ovhStructTelephonySmsUserHistory->getSortOrder(),$_ovhStructTelephonySmsUserHistory->getTag(),$_ovhStructTelephonySmsUserHistory->getFilter()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsUserGetCallBack
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsUserGetCallBack::getLogin()
	 * @uses OvhStructTelephonySmsUserGetCallBack::getPassword()
	 * @uses OvhStructTelephonySmsUserGetCallBack::getSmsAccount()
	 * @param OvhStructTelephonySmsUserGetCallBack $_ovhStructTelephonySmsUserGetCallBack
	 * @return OvhStructTelephonySmsUserGetCallBackResponse
	 */
	public function telephonySmsUserGetCallBack(OvhStructTelephonySmsUserGetCallBack $_ovhStructTelephonySmsUserGetCallBack)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsUserGetCallBack($_ovhStructTelephonySmsUserGetCallBack->getLogin(),$_ovhStructTelephonySmsUserGetCallBack->getPassword(),$_ovhStructTelephonySmsUserGetCallBack->getSmsAccount()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyOfferModifyPassword
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyOfferModifyPassword::getSession()
	 * @uses OvhStructTelephonyOfferModifyPassword::getNumber()
	 * @uses OvhStructTelephonyOfferModifyPassword::getCountry()
	 * @uses OvhStructTelephonyOfferModifyPassword::getPassword()
	 * @param OvhStructTelephonyOfferModifyPassword $_ovhStructTelephonyOfferModifyPassword
	 * @return OvhStructTelephonyOfferModifyPasswordResponse
	 */
	public function telephonyOfferModifyPassword(OvhStructTelephonyOfferModifyPassword $_ovhStructTelephonyOfferModifyPassword)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyOfferModifyPassword($_ovhStructTelephonyOfferModifyPassword->getSession(),$_ovhStructTelephonyOfferModifyPassword->getNumber(),$_ovhStructTelephonyOfferModifyPassword->getCountry(),$_ovhStructTelephonyOfferModifyPassword->getPassword()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyFunctionKeyAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyFunctionKeyAdd::getSession()
	 * @uses OvhStructTelephonyFunctionKeyAdd::getNumber()
	 * @uses OvhStructTelephonyFunctionKeyAdd::getCountry()
	 * @uses OvhStructTelephonyFunctionKeyAdd::getKeyNum()
	 * @uses OvhStructTelephonyFunctionKeyAdd::getFunction()
	 * @uses OvhStructTelephonyFunctionKeyAdd::getRelatedNumber()
	 * @param OvhStructTelephonyFunctionKeyAdd $_ovhStructTelephonyFunctionKeyAdd
	 * @return OvhStructTelephonyFunctionKeyAddResponse
	 */
	public function telephonyFunctionKeyAdd(OvhStructTelephonyFunctionKeyAdd $_ovhStructTelephonyFunctionKeyAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyFunctionKeyAdd($_ovhStructTelephonyFunctionKeyAdd->getSession(),$_ovhStructTelephonyFunctionKeyAdd->getNumber(),$_ovhStructTelephonyFunctionKeyAdd->getCountry(),$_ovhStructTelephonyFunctionKeyAdd->getKeyNum(),$_ovhStructTelephonyFunctionKeyAdd->getFunction(),$_ovhStructTelephonyFunctionKeyAdd->getRelatedNumber()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPhonebookList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPhonebookList::getSession()
	 * @uses OvhStructTelephonyPhonebookList::getNumber()
	 * @uses OvhStructTelephonyPhonebookList::getCountry()
	 * @param OvhStructTelephonyPhonebookList $_ovhStructTelephonyPhonebookList
	 * @return OvhStructTelephonyPhonebookListResponse
	 */
	public function telephonyPhonebookList(OvhStructTelephonyPhonebookList $_ovhStructTelephonyPhonebookList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPhonebookList($_ovhStructTelephonyPhonebookList->getSession(),$_ovhStructTelephonyPhonebookList->getNumber(),$_ovhStructTelephonyPhonebookList->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPlugAndPhoneReset
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPlugAndPhoneReset::getSession()
	 * @uses OvhStructTelephonyPlugAndPhoneReset::getNumber()
	 * @uses OvhStructTelephonyPlugAndPhoneReset::getCountry()
	 * @uses OvhStructTelephonyPlugAndPhoneReset::getIp()
	 * @param OvhStructTelephonyPlugAndPhoneReset $_ovhStructTelephonyPlugAndPhoneReset
	 * @return OvhStructTelephonyPlugAndPhoneResetResponse
	 */
	public function telephonyPlugAndPhoneReset(OvhStructTelephonyPlugAndPhoneReset $_ovhStructTelephonyPlugAndPhoneReset)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPlugAndPhoneReset($_ovhStructTelephonyPlugAndPhoneReset->getSession(),$_ovhStructTelephonyPlugAndPhoneReset->getNumber(),$_ovhStructTelephonyPlugAndPhoneReset->getCountry(),$_ovhStructTelephonyPlugAndPhoneReset->getIp()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySpareInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySpareInfo::getSession()
	 * @uses OvhStructTelephonySpareInfo::getType()
	 * @uses OvhStructTelephonySpareInfo::getSpare()
	 * @param OvhStructTelephonySpareInfo $_ovhStructTelephonySpareInfo
	 * @return OvhStructTelephonySpareInfoResponse
	 */
	public function telephonySpareInfo(OvhStructTelephonySpareInfo $_ovhStructTelephonySpareInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySpareInfo($_ovhStructTelephonySpareInfo->getSession(),$_ovhStructTelephonySpareInfo->getType(),$_ovhStructTelephonySpareInfo->getSpare()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsUserDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsUserDel::getSession()
	 * @uses OvhStructTelephonySmsUserDel::getSmsAccount()
	 * @uses OvhStructTelephonySmsUserDel::getLogin()
	 * @param OvhStructTelephonySmsUserDel $_ovhStructTelephonySmsUserDel
	 * @return OvhStructTelephonySmsUserDelResponse
	 */
	public function telephonySmsUserDel(OvhStructTelephonySmsUserDel $_ovhStructTelephonySmsUserDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsUserDel($_ovhStructTelephonySmsUserDel->getSession(),$_ovhStructTelephonySmsUserDel->getSmsAccount(),$_ovhStructTelephonySmsUserDel->getLogin()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyVoicemailMessagesStatus
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyVoicemailMessagesStatus::getSession()
	 * @uses OvhStructTelephonyVoicemailMessagesStatus::getNumber()
	 * @uses OvhStructTelephonyVoicemailMessagesStatus::getCountry()
	 * @param OvhStructTelephonyVoicemailMessagesStatus $_ovhStructTelephonyVoicemailMessagesStatus
	 * @return OvhStructTelephonyVoicemailMessagesStatusResponse
	 */
	public function telephonyVoicemailMessagesStatus(OvhStructTelephonyVoicemailMessagesStatus $_ovhStructTelephonyVoicemailMessagesStatus)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyVoicemailMessagesStatus($_ovhStructTelephonyVoicemailMessagesStatus->getSession(),$_ovhStructTelephonyVoicemailMessagesStatus->getNumber(),$_ovhStructTelephonyVoicemailMessagesStatus->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPhonebookModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPhonebookModify::getSession()
	 * @uses OvhStructTelephonyPhonebookModify::getNumber()
	 * @uses OvhStructTelephonyPhonebookModify::getCountry()
	 * @uses OvhStructTelephonyPhonebookModify::getId()
	 * @uses OvhStructTelephonyPhonebookModify::getName()
	 * @param OvhStructTelephonyPhonebookModify $_ovhStructTelephonyPhonebookModify
	 * @return OvhStructTelephonyPhonebookModifyResponse
	 */
	public function telephonyPhonebookModify(OvhStructTelephonyPhonebookModify $_ovhStructTelephonyPhonebookModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPhonebookModify($_ovhStructTelephonyPhonebookModify->getSession(),$_ovhStructTelephonyPhonebookModify->getNumber(),$_ovhStructTelephonyPhonebookModify->getCountry(),$_ovhStructTelephonyPhonebookModify->getId(),$_ovhStructTelephonyPhonebookModify->getName()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyOfferModifyName
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyOfferModifyName::getSession()
	 * @uses OvhStructTelephonyOfferModifyName::getNumber()
	 * @uses OvhStructTelephonyOfferModifyName::getCountry()
	 * @uses OvhStructTelephonyOfferModifyName::getName()
	 * @param OvhStructTelephonyOfferModifyName $_ovhStructTelephonyOfferModifyName
	 * @return OvhStructTelephonyOfferModifyNameResponse
	 */
	public function telephonyOfferModifyName(OvhStructTelephonyOfferModifyName $_ovhStructTelephonyOfferModifyName)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyOfferModifyName($_ovhStructTelephonyOfferModifyName->getSession(),$_ovhStructTelephonyOfferModifyName->getNumber(),$_ovhStructTelephonyOfferModifyName->getCountry(),$_ovhStructTelephonyOfferModifyName->getName()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsSetCallBack
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsSetCallBack::getSession()
	 * @uses OvhStructTelephonySmsSetCallBack::getSmsAccount()
	 * @uses OvhStructTelephonySmsSetCallBack::getCallBack()
	 * @param OvhStructTelephonySmsSetCallBack $_ovhStructTelephonySmsSetCallBack
	 * @return OvhStructTelephonySmsSetCallBackResponse
	 */
	public function telephonySmsSetCallBack(OvhStructTelephonySmsSetCallBack $_ovhStructTelephonySmsSetCallBack)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsSetCallBack($_ovhStructTelephonySmsSetCallBack->getSession(),$_ovhStructTelephonySmsSetCallBack->getSmsAccount(),$_ovhStructTelephonySmsSetCallBack->getCallBack()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPhonebookGroupList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPhonebookGroupList::getSession()
	 * @uses OvhStructTelephonyPhonebookGroupList::getNumber()
	 * @uses OvhStructTelephonyPhonebookGroupList::getCountry()
	 * @uses OvhStructTelephonyPhonebookGroupList::getId()
	 * @param OvhStructTelephonyPhonebookGroupList $_ovhStructTelephonyPhonebookGroupList
	 * @return OvhStructTelephonyPhonebookGroupListResponse
	 */
	public function telephonyPhonebookGroupList(OvhStructTelephonyPhonebookGroupList $_ovhStructTelephonyPhonebookGroupList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPhonebookGroupList($_ovhStructTelephonyPhonebookGroupList->getSession(),$_ovhStructTelephonyPhonebookGroupList->getNumber(),$_ovhStructTelephonyPhonebookGroupList->getCountry(),$_ovhStructTelephonyPhonebookGroupList->getId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyBillingAccountInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyBillingAccountInfo::getSession()
	 * @uses OvhStructTelephonyBillingAccountInfo::getBillingAccount()
	 * @param OvhStructTelephonyBillingAccountInfo $_ovhStructTelephonyBillingAccountInfo
	 * @return OvhStructTelephonyBillingAccountInfoResponse
	 */
	public function telephonyBillingAccountInfo(OvhStructTelephonyBillingAccountInfo $_ovhStructTelephonyBillingAccountInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyBillingAccountInfo($_ovhStructTelephonyBillingAccountInfo->getSession(),$_ovhStructTelephonyBillingAccountInfo->getBillingAccount()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsSenderAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsSenderAdd::getSession()
	 * @uses OvhStructTelephonySmsSenderAdd::getSmsAccount()
	 * @uses OvhStructTelephonySmsSenderAdd::getSender()
	 * @uses OvhStructTelephonySmsSenderAdd::getReason()
	 * @param OvhStructTelephonySmsSenderAdd $_ovhStructTelephonySmsSenderAdd
	 * @return OvhStructTelephonySmsSenderAddResponse
	 */
	public function telephonySmsSenderAdd(OvhStructTelephonySmsSenderAdd $_ovhStructTelephonySmsSenderAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsSenderAdd($_ovhStructTelephonySmsSenderAdd->getSession(),$_ovhStructTelephonySmsSenderAdd->getSmsAccount(),$_ovhStructTelephonySmsSenderAdd->getSender(),$_ovhStructTelephonySmsSenderAdd->getReason()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyLineConsumptionCSVByMail
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyLineConsumptionCSVByMail::getSession()
	 * @uses OvhStructTelephonyLineConsumptionCSVByMail::getNumber()
	 * @uses OvhStructTelephonyLineConsumptionCSVByMail::getCountry()
	 * @uses OvhStructTelephonyLineConsumptionCSVByMail::getDate()
	 * @param OvhStructTelephonyLineConsumptionCSVByMail $_ovhStructTelephonyLineConsumptionCSVByMail
	 * @return OvhStructTelephonyLineConsumptionCSVByMailResponse
	 */
	public function telephonyLineConsumptionCSVByMail(OvhStructTelephonyLineConsumptionCSVByMail $_ovhStructTelephonyLineConsumptionCSVByMail)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyLineConsumptionCSVByMail($_ovhStructTelephonyLineConsumptionCSVByMail->getSession(),$_ovhStructTelephonyLineConsumptionCSVByMail->getNumber(),$_ovhStructTelephonyLineConsumptionCSVByMail->getCountry(),$_ovhStructTelephonyLineConsumptionCSVByMail->getDate()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsUserDeleteCsvAttachment
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsUserDeleteCsvAttachment::getSmsAccount()
	 * @uses OvhStructTelephonySmsUserDeleteCsvAttachment::getLogin()
	 * @uses OvhStructTelephonySmsUserDeleteCsvAttachment::getPassword()
	 * @uses OvhStructTelephonySmsUserDeleteCsvAttachment::getIds()
	 * @param OvhStructTelephonySmsUserDeleteCsvAttachment $_ovhStructTelephonySmsUserDeleteCsvAttachment
	 * @return OvhStructTelephonySmsUserDeleteCsvAttachmentResponse
	 */
	public function telephonySmsUserDeleteCsvAttachment(OvhStructTelephonySmsUserDeleteCsvAttachment $_ovhStructTelephonySmsUserDeleteCsvAttachment)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsUserDeleteCsvAttachment($_ovhStructTelephonySmsUserDeleteCsvAttachment->getSmsAccount(),$_ovhStructTelephonySmsUserDeleteCsvAttachment->getLogin(),$_ovhStructTelephonySmsUserDeleteCsvAttachment->getPassword(),$_ovhStructTelephonySmsUserDeleteCsvAttachment->getIds()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyListReversableCallsFromNumber
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyListReversableCallsFromNumber::getSession()
	 * @uses OvhStructTelephonyListReversableCallsFromNumber::getNumber()
	 * @uses OvhStructTelephonyListReversableCallsFromNumber::getCountry()
	 * @uses OvhStructTelephonyListReversableCallsFromNumber::getReversableDelay()
	 * @uses OvhStructTelephonyListReversableCallsFromNumber::getPagingStart()
	 * @uses OvhStructTelephonyListReversableCallsFromNumber::getPagingLimit()
	 * @uses OvhStructTelephonyListReversableCallsFromNumber::getSortOrder()
	 * @uses OvhStructTelephonyListReversableCallsFromNumber::getSortField()
	 * @param OvhStructTelephonyListReversableCallsFromNumber $_ovhStructTelephonyListReversableCallsFromNumber
	 * @return OvhStructTelephonyListReversableCallsFromNumberResponse
	 */
	public function telephonyListReversableCallsFromNumber(OvhStructTelephonyListReversableCallsFromNumber $_ovhStructTelephonyListReversableCallsFromNumber)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyListReversableCallsFromNumber($_ovhStructTelephonyListReversableCallsFromNumber->getSession(),$_ovhStructTelephonyListReversableCallsFromNumber->getNumber(),$_ovhStructTelephonyListReversableCallsFromNumber->getCountry(),$_ovhStructTelephonyListReversableCallsFromNumber->getReversableDelay(),$_ovhStructTelephonyListReversableCallsFromNumber->getPagingStart(),$_ovhStructTelephonyListReversableCallsFromNumber->getPagingLimit(),$_ovhStructTelephonyListReversableCallsFromNumber->getSortOrder(),$_ovhStructTelephonyListReversableCallsFromNumber->getSortField()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyBillingAccountList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyBillingAccountList::getSession()
	 * @param OvhStructTelephonyBillingAccountList $_ovhStructTelephonyBillingAccountList
	 * @return OvhStructTelephonyBillingAccountListResponse
	 */
	public function telephonyBillingAccountList(OvhStructTelephonyBillingAccountList $_ovhStructTelephonyBillingAccountList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyBillingAccountList($_ovhStructTelephonyBillingAccountList->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsGetQuotaNotificationForUser
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsGetQuotaNotificationForUser::getSmsAccount()
	 * @uses OvhStructTelephonySmsGetQuotaNotificationForUser::getLogin()
	 * @uses OvhStructTelephonySmsGetQuotaNotificationForUser::getPassword()
	 * @param OvhStructTelephonySmsGetQuotaNotificationForUser $_ovhStructTelephonySmsGetQuotaNotificationForUser
	 * @return OvhStructTelephonySmsGetQuotaNotificationForUserResponse
	 */
	public function telephonySmsGetQuotaNotificationForUser(OvhStructTelephonySmsGetQuotaNotificationForUser $_ovhStructTelephonySmsGetQuotaNotificationForUser)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsGetQuotaNotificationForUser($_ovhStructTelephonySmsGetQuotaNotificationForUser->getSmsAccount(),$_ovhStructTelephonySmsGetQuotaNotificationForUser->getLogin(),$_ovhStructTelephonySmsGetQuotaNotificationForUser->getPassword()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyChangeNicModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyChangeNicModify::getSession()
	 * @uses OvhStructTelephonyChangeNicModify::getNicNames()
	 * @uses OvhStructTelephonyChangeNicModify::getNicPasswords()
	 * @uses OvhStructTelephonyChangeNicModify::getNicTypes()
	 * @uses OvhStructTelephonyChangeNicModify::getChangeTypes()
	 * @uses OvhStructTelephonyChangeNicModify::getChangeElts()
	 * @param OvhStructTelephonyChangeNicModify $_ovhStructTelephonyChangeNicModify
	 * @return OvhStructTelephonyChangeNicModifyResponse
	 */
	public function telephonyChangeNicModify(OvhStructTelephonyChangeNicModify $_ovhStructTelephonyChangeNicModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyChangeNicModify($_ovhStructTelephonyChangeNicModify->getSession(),$_ovhStructTelephonyChangeNicModify->getNicNames(),$_ovhStructTelephonyChangeNicModify->getNicPasswords(),$_ovhStructTelephonyChangeNicModify->getNicTypes(),$_ovhStructTelephonyChangeNicModify->getChangeTypes(),$_ovhStructTelephonyChangeNicModify->getChangeElts()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySviInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySviInfo::getSession()
	 * @uses OvhStructTelephonySviInfo::getNumber()
	 * @uses OvhStructTelephonySviInfo::getCountry()
	 * @param OvhStructTelephonySviInfo $_ovhStructTelephonySviInfo
	 * @return OvhStructTelephonySviInfoResponse
	 */
	public function telephonySviInfo(OvhStructTelephonySviInfo $_ovhStructTelephonySviInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySviInfo($_ovhStructTelephonySviInfo->getSession(),$_ovhStructTelephonySviInfo->getNumber(),$_ovhStructTelephonySviInfo->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyClick2CallUserAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyClick2CallUserAdd::getSession()
	 * @uses OvhStructTelephonyClick2CallUserAdd::getNumber()
	 * @uses OvhStructTelephonyClick2CallUserAdd::getCountry()
	 * @uses OvhStructTelephonyClick2CallUserAdd::getLogin()
	 * @uses OvhStructTelephonyClick2CallUserAdd::getPassword()
	 * @param OvhStructTelephonyClick2CallUserAdd $_ovhStructTelephonyClick2CallUserAdd
	 * @return OvhStructTelephonyClick2CallUserAddResponse
	 */
	public function telephonyClick2CallUserAdd(OvhStructTelephonyClick2CallUserAdd $_ovhStructTelephonyClick2CallUserAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyClick2CallUserAdd($_ovhStructTelephonyClick2CallUserAdd->getSession(),$_ovhStructTelephonyClick2CallUserAdd->getNumber(),$_ovhStructTelephonyClick2CallUserAdd->getCountry(),$_ovhStructTelephonyClick2CallUserAdd->getLogin(),$_ovhStructTelephonyClick2CallUserAdd->getPassword()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsBlacklistedSendersDelete
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsBlacklistedSendersDelete::getSession()
	 * @uses OvhStructTelephonySmsBlacklistedSendersDelete::getSmsAccount()
	 * @uses OvhStructTelephonySmsBlacklistedSendersDelete::getIds()
	 * @param OvhStructTelephonySmsBlacklistedSendersDelete $_ovhStructTelephonySmsBlacklistedSendersDelete
	 * @return OvhStructTelephonySmsBlacklistedSendersDeleteResponse
	 */
	public function telephonySmsBlacklistedSendersDelete(OvhStructTelephonySmsBlacklistedSendersDelete $_ovhStructTelephonySmsBlacklistedSendersDelete)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsBlacklistedSendersDelete($_ovhStructTelephonySmsBlacklistedSendersDelete->getSession(),$_ovhStructTelephonySmsBlacklistedSendersDelete->getSmsAccount(),$_ovhStructTelephonySmsBlacklistedSendersDelete->getIds()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsplusServiceAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsplusServiceAdd::getSession()
	 * @uses OvhStructTelephonySmsplusServiceAdd::getBillingAccount()
	 * @uses OvhStructTelephonySmsplusServiceAdd::getShortCode()
	 * @uses OvhStructTelephonySmsplusServiceAdd::getKeyword()
	 * @uses OvhStructTelephonySmsplusServiceAdd::getProcedureId()
	 * @uses OvhStructTelephonySmsplusServiceAdd::getApplicationType()
	 * @uses OvhStructTelephonySmsplusServiceAdd::getApplicationDescription()
	 * @uses OvhStructTelephonySmsplusServiceAdd::getCompany()
	 * @uses OvhStructTelephonySmsplusServiceAdd::getAcceptedContract()
	 * @param OvhStructTelephonySmsplusServiceAdd $_ovhStructTelephonySmsplusServiceAdd
	 * @return OvhStructTelephonySmsplusServiceAddResponse
	 */
	public function telephonySmsplusServiceAdd(OvhStructTelephonySmsplusServiceAdd $_ovhStructTelephonySmsplusServiceAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsplusServiceAdd($_ovhStructTelephonySmsplusServiceAdd->getSession(),$_ovhStructTelephonySmsplusServiceAdd->getBillingAccount(),$_ovhStructTelephonySmsplusServiceAdd->getShortCode(),$_ovhStructTelephonySmsplusServiceAdd->getKeyword(),$_ovhStructTelephonySmsplusServiceAdd->getProcedureId(),$_ovhStructTelephonySmsplusServiceAdd->getApplicationType(),$_ovhStructTelephonySmsplusServiceAdd->getApplicationDescription(),$_ovhStructTelephonySmsplusServiceAdd->getCompany(),$_ovhStructTelephonySmsplusServiceAdd->getAcceptedContract()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySpareCreateRMA
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySpareCreateRMA::getSession()
	 * @uses OvhStructTelephonySpareCreateRMA::getType()
	 * @uses OvhStructTelephonySpareCreateRMA::getSpare()
	 * @param OvhStructTelephonySpareCreateRMA $_ovhStructTelephonySpareCreateRMA
	 * @return OvhStructTelephonySpareCreateRMAResponse
	 */
	public function telephonySpareCreateRMA(OvhStructTelephonySpareCreateRMA $_ovhStructTelephonySpareCreateRMA)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySpareCreateRMA($_ovhStructTelephonySpareCreateRMA->getSession(),$_ovhStructTelephonySpareCreateRMA->getType(),$_ovhStructTelephonySpareCreateRMA->getSpare()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySmsplusServiceEdit
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySmsplusServiceEdit::getSession()
	 * @uses OvhStructTelephonySmsplusServiceEdit::getShortCode()
	 * @uses OvhStructTelephonySmsplusServiceEdit::getKeyword()
	 * @uses OvhStructTelephonySmsplusServiceEdit::getDescription()
	 * @uses OvhStructTelephonySmsplusServiceEdit::getCgiActivation()
	 * @uses OvhStructTelephonySmsplusServiceEdit::getCgiUrl()
	 * @uses OvhStructTelephonySmsplusServiceEdit::getText()
	 * @uses OvhStructTelephonySmsplusServiceEdit::getTrackingMedias()
	 * @uses OvhStructTelephonySmsplusServiceEdit::getTrackingTargets()
	 * @uses OvhStructTelephonySmsplusServiceEdit::getTrackingDefaultSmsAccount()
	 * @uses OvhStructTelephonySmsplusServiceEdit::getTrackingDefaultSmsSender()
	 * @uses OvhStructTelephonySmsplusServiceEdit::getSendingDefaultSmsAccountMtBilling()
	 * @uses OvhStructTelephonySmsplusServiceEdit::getSendingNoSmsMt()
	 * @param OvhStructTelephonySmsplusServiceEdit $_ovhStructTelephonySmsplusServiceEdit
	 * @return OvhStructTelephonySmsplusServiceEditResponse
	 */
	public function telephonySmsplusServiceEdit(OvhStructTelephonySmsplusServiceEdit $_ovhStructTelephonySmsplusServiceEdit)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySmsplusServiceEdit($_ovhStructTelephonySmsplusServiceEdit->getSession(),$_ovhStructTelephonySmsplusServiceEdit->getShortCode(),$_ovhStructTelephonySmsplusServiceEdit->getKeyword(),$_ovhStructTelephonySmsplusServiceEdit->getDescription(),$_ovhStructTelephonySmsplusServiceEdit->getCgiActivation(),$_ovhStructTelephonySmsplusServiceEdit->getCgiUrl(),$_ovhStructTelephonySmsplusServiceEdit->getText(),$_ovhStructTelephonySmsplusServiceEdit->getTrackingMedias(),$_ovhStructTelephonySmsplusServiceEdit->getTrackingTargets(),$_ovhStructTelephonySmsplusServiceEdit->getTrackingDefaultSmsAccount(),$_ovhStructTelephonySmsplusServiceEdit->getTrackingDefaultSmsSender(),$_ovhStructTelephonySmsplusServiceEdit->getSendingDefaultSmsAccountMtBilling(),$_ovhStructTelephonySmsplusServiceEdit->getSendingNoSmsMt()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyHuntingGenericScreenOptionsModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyHuntingGenericScreenOptionsModify::getSession()
	 * @uses OvhStructTelephonyHuntingGenericScreenOptionsModify::getNumber()
	 * @uses OvhStructTelephonyHuntingGenericScreenOptionsModify::getCountry()
	 * @uses OvhStructTelephonyHuntingGenericScreenOptionsModify::getForwardUnconditionalNumber()
	 * @uses OvhStructTelephonyHuntingGenericScreenOptionsModify::getMainVoicemail()
	 * @uses OvhStructTelephonyHuntingGenericScreenOptionsModify::getForwardPolicyIndex()
	 * @uses OvhStructTelephonyHuntingGenericScreenOptionsModify::getTimeout()
	 * @param OvhStructTelephonyHuntingGenericScreenOptionsModify $_ovhStructTelephonyHuntingGenericScreenOptionsModify
	 * @return OvhStructTelephonyHuntingGenericScreenOptionsModifyResponse
	 */
	public function telephonyHuntingGenericScreenOptionsModify(OvhStructTelephonyHuntingGenericScreenOptionsModify $_ovhStructTelephonyHuntingGenericScreenOptionsModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyHuntingGenericScreenOptionsModify($_ovhStructTelephonyHuntingGenericScreenOptionsModify->getSession(),$_ovhStructTelephonyHuntingGenericScreenOptionsModify->getNumber(),$_ovhStructTelephonyHuntingGenericScreenOptionsModify->getCountry(),$_ovhStructTelephonyHuntingGenericScreenOptionsModify->getForwardUnconditionalNumber(),$_ovhStructTelephonyHuntingGenericScreenOptionsModify->getMainVoicemail(),$_ovhStructTelephonyHuntingGenericScreenOptionsModify->getForwardPolicyIndex(),$_ovhStructTelephonyHuntingGenericScreenOptionsModify->getTimeout()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyPlugAndPhoneInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyPlugAndPhoneInfo::getSession()
	 * @uses OvhStructTelephonyPlugAndPhoneInfo::getNumber()
	 * @uses OvhStructTelephonyPlugAndPhoneInfo::getCountry()
	 * @param OvhStructTelephonyPlugAndPhoneInfo $_ovhStructTelephonyPlugAndPhoneInfo
	 * @return OvhStructTelephonyPlugAndPhoneInfoResponse
	 */
	public function telephonyPlugAndPhoneInfo(OvhStructTelephonyPlugAndPhoneInfo $_ovhStructTelephonyPlugAndPhoneInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyPlugAndPhoneInfo($_ovhStructTelephonyPlugAndPhoneInfo->getSession(),$_ovhStructTelephonyPlugAndPhoneInfo->getNumber(),$_ovhStructTelephonyPlugAndPhoneInfo->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyFaxCampaignDelete
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyFaxCampaignDelete::getSession()
	 * @uses OvhStructTelephonyFaxCampaignDelete::getNumber()
	 * @uses OvhStructTelephonyFaxCampaignDelete::getCountry()
	 * @uses OvhStructTelephonyFaxCampaignDelete::getReference()
	 * @param OvhStructTelephonyFaxCampaignDelete $_ovhStructTelephonyFaxCampaignDelete
	 * @return OvhStructTelephonyFaxCampaignDeleteResponse
	 */
	public function telephonyFaxCampaignDelete(OvhStructTelephonyFaxCampaignDelete $_ovhStructTelephonyFaxCampaignDelete)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyFaxCampaignDelete($_ovhStructTelephonyFaxCampaignDelete->getSession(),$_ovhStructTelephonyFaxCampaignDelete->getNumber(),$_ovhStructTelephonyFaxCampaignDelete->getCountry(),$_ovhStructTelephonyFaxCampaignDelete->getReference()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyReversmentsRefundFromBillingAccount
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyReversmentsRefundFromBillingAccount::getSession()
	 * @uses OvhStructTelephonyReversmentsRefundFromBillingAccount::getBillingAccount()
	 * @param OvhStructTelephonyReversmentsRefundFromBillingAccount $_ovhStructTelephonyReversmentsRefundFromBillingAccount
	 * @return OvhStructTelephonyReversmentsRefundFromBillingAccountResponse
	 */
	public function telephonyReversmentsRefundFromBillingAccount(OvhStructTelephonyReversmentsRefundFromBillingAccount $_ovhStructTelephonyReversmentsRefundFromBillingAccount)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyReversmentsRefundFromBillingAccount($_ovhStructTelephonyReversmentsRefundFromBillingAccount->getSession(),$_ovhStructTelephonyReversmentsRefundFromBillingAccount->getBillingAccount()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyVoicemailMessageDelete
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyVoicemailMessageDelete::getSession()
	 * @uses OvhStructTelephonyVoicemailMessageDelete::getNumber()
	 * @uses OvhStructTelephonyVoicemailMessageDelete::getCountry()
	 * @uses OvhStructTelephonyVoicemailMessageDelete::getMessageType()
	 * @param OvhStructTelephonyVoicemailMessageDelete $_ovhStructTelephonyVoicemailMessageDelete
	 * @return OvhStructTelephonyVoicemailMessageDeleteResponse
	 */
	public function telephonyVoicemailMessageDelete(OvhStructTelephonyVoicemailMessageDelete $_ovhStructTelephonyVoicemailMessageDelete)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyVoicemailMessageDelete($_ovhStructTelephonyVoicemailMessageDelete->getSession(),$_ovhStructTelephonyVoicemailMessageDelete->getNumber(),$_ovhStructTelephonyVoicemailMessageDelete->getCountry(),$_ovhStructTelephonyVoicemailMessageDelete->getMessageType()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyLineOptionsList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyLineOptionsList::getSession()
	 * @uses OvhStructTelephonyLineOptionsList::getNumber()
	 * @uses OvhStructTelephonyLineOptionsList::getCountry()
	 * @param OvhStructTelephonyLineOptionsList $_ovhStructTelephonyLineOptionsList
	 * @return OvhStructTelephonyLineOptionsListResponse
	 */
	public function telephonyLineOptionsList(OvhStructTelephonyLineOptionsList $_ovhStructTelephonyLineOptionsList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyLineOptionsList($_ovhStructTelephonyLineOptionsList->getSession(),$_ovhStructTelephonyLineOptionsList->getNumber(),$_ovhStructTelephonyLineOptionsList->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonySpareServiceInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonySpareServiceInfo::getSession()
	 * @uses OvhStructTelephonySpareServiceInfo::getType()
	 * @uses OvhStructTelephonySpareServiceInfo::getService()
	 * @param OvhStructTelephonySpareServiceInfo $_ovhStructTelephonySpareServiceInfo
	 * @return OvhStructTelephonySpareServiceInfoResponse
	 */
	public function telephonySpareServiceInfo(OvhStructTelephonySpareServiceInfo $_ovhStructTelephonySpareServiceInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonySpareServiceInfo($_ovhStructTelephonySpareServiceInfo->getSession(),$_ovhStructTelephonySpareServiceInfo->getType(),$_ovhStructTelephonySpareServiceInfo->getService()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyAbbreviatedNumberModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyAbbreviatedNumberModify::getSession()
	 * @uses OvhStructTelephonyAbbreviatedNumberModify::getNumber()
	 * @uses OvhStructTelephonyAbbreviatedNumberModify::getCountry()
	 * @uses OvhStructTelephonyAbbreviatedNumberModify::getAbbreviatedNumber()
	 * @uses OvhStructTelephonyAbbreviatedNumberModify::getRelatedNumber()
	 * @uses OvhStructTelephonyAbbreviatedNumberModify::getName()
	 * @uses OvhStructTelephonyAbbreviatedNumberModify::getSurname()
	 * @param OvhStructTelephonyAbbreviatedNumberModify $_ovhStructTelephonyAbbreviatedNumberModify
	 * @return OvhStructTelephonyAbbreviatedNumberModifyResponse
	 */
	public function telephonyAbbreviatedNumberModify(OvhStructTelephonyAbbreviatedNumberModify $_ovhStructTelephonyAbbreviatedNumberModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyAbbreviatedNumberModify($_ovhStructTelephonyAbbreviatedNumberModify->getSession(),$_ovhStructTelephonyAbbreviatedNumberModify->getNumber(),$_ovhStructTelephonyAbbreviatedNumberModify->getCountry(),$_ovhStructTelephonyAbbreviatedNumberModify->getAbbreviatedNumber(),$_ovhStructTelephonyAbbreviatedNumberModify->getRelatedNumber(),$_ovhStructTelephonyAbbreviatedNumberModify->getName(),$_ovhStructTelephonyAbbreviatedNumberModify->getSurname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named telephonyOfferSimultaneousLinesModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTelephonyOfferSimultaneousLinesModify::getSession()
	 * @uses OvhStructTelephonyOfferSimultaneousLinesModify::getNumber()
	 * @uses OvhStructTelephonyOfferSimultaneousLinesModify::getCountry()
	 * @uses OvhStructTelephonyOfferSimultaneousLinesModify::getSimultaneousLines()
	 * @param OvhStructTelephonyOfferSimultaneousLinesModify $_ovhStructTelephonyOfferSimultaneousLinesModify
	 * @return OvhStructTelephonyOfferSimultaneousLinesModifyResponse
	 */
	public function telephonyOfferSimultaneousLinesModify(OvhStructTelephonyOfferSimultaneousLinesModify $_ovhStructTelephonyOfferSimultaneousLinesModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->telephonyOfferSimultaneousLinesModify($_ovhStructTelephonyOfferSimultaneousLinesModify->getSession(),$_ovhStructTelephonyOfferSimultaneousLinesModify->getNumber(),$_ovhStructTelephonyOfferSimultaneousLinesModify->getCountry(),$_ovhStructTelephonyOfferSimultaneousLinesModify->getSimultaneousLines()));
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
	 * @return OvhStructTelephonyAbbreviatedNumberAddResponse|OvhStructTelephonyAbbreviatedNumberDelResponse|OvhStructTelephonyAbbreviatedNumberListPaginatedResponse|OvhStructTelephonyAbbreviatedNumberListResponse|OvhStructTelephonyAbbreviatedNumberModifyResponse|OvhStructTelephonyAbbreviatedNumberOnGroupAddResponse|OvhStructTelephonyAbbreviatedNumberOnGroupDelResponse|OvhStructTelephonyAbbreviatedNumberOnGroupListResponse|OvhStructTelephonyAbbreviatedNumberOnGroupModifyResponse|OvhStructTelephonyAliasToSipOfferResponse|OvhStructTelephonyAliasToSipPossibilitiesResponse|OvhStructTelephonyBillDetailsCSVResponse|OvhStructTelephonyBillDetailsResponse|OvhStructTelephonyBillingAccountAddResponse|OvhStructTelephonyBillingAccountConsumptionCSVByMailResponse|OvhStructTelephonyBillingAccountDelResponse|OvhStructTelephonyBillingAccountDescriptionModifyResponse|OvhStructTelephonyBillingAccountInfoResponse|OvhStructTelephonyBillingAccountListResponse|OvhStructTelephonyBillingAccountSetResponse|OvhStructTelephonyBillingAccountSummaryResponse|OvhStructTelephonyBillListResponse|OvhStructTelephonyCallListResponse|OvhStructTelephonyChangeNicModifyResponse|OvhStructTelephonyClick2CallDoBySessionResponse|OvhStructTelephonyClick2CallDoResponse|OvhStructTelephonyClick2CallUserAddResponse|OvhStructTelephonyClick2CallUserDelResponse|OvhStructTelephonyClick2CallUserListResponse|OvhStructTelephonyClick2CallUserPasswordResponse|OvhStructTelephonyConferenceActionResponse|OvhStructTelephonyConferenceGetInfosResponse|OvhStructTelephonyConferenceGetParamsResponse|OvhStructTelephonyConferenceSetAnnounceFileResponse|OvhStructTelephonyConferenceSetParamsResponse|OvhStructTelephonyDdiInfoResponse|OvhStructTelephonyDdiModifyResponse|OvhStructTelephonyDefaultPrivateHolidaysEventsResponse|OvhStructTelephonyDelClosureEventsResponse|OvhStructTelephonyDeleteLineResponse|OvhStructTelephonyDepositMovementModifyResponse|OvhStructTelephonyDirectoryInfoGetSameSiretResponse|OvhStructTelephonyDirectoryInfoGetSiretResponse|OvhStructTelephonyDirectoryInfoResponse|OvhStructTelephonyDirectoryListWayTypeResponse|OvhStructTelephonyDirectoryModifyAddressResponse|OvhStructTelephonyDirectoryModifyPublicationResponse|OvhStructTelephonyDirectoryPJCodeResponse|OvhStructTelephonyFaxCallListResponse|OvhStructTelephonyFaxCampaignCreationResponse|OvhStructTelephonyFaxCampaignDeleteResponse|OvhStructTelephonyFaxCampaignDetailsResponse|OvhStructTelephonyFaxCampaignListResponse|OvhStructTelephonyFaxCampaignStartStopResponse|OvhStructTelephonyFaxHistoryResponse|OvhStructTelephonyFaxModifyPasswordResponse|OvhStructTelephonyFaxOptionsListResponse|OvhStructTelephonyFaxOptionsModifyResponse|OvhStructTelephonyFaxSendResponse|OvhStructTelephonyFMHuntingModificationAnonymousCallRejectionResponse|OvhStructTelephonyFMHuntingModificationMembersResponse|OvhStructTelephonyFMHuntingModificationModeResponse|OvhStructTelephonyFMHuntingModificationSimultaneousCallsResponse|OvhStructTelephonyFMHuntingModificationVoicemailResponse|OvhStructTelephonyFreefaxToVoicefaxCheckListResponse|OvhStructTelephonyFreefaxToVoicefaxResponse|OvhStructTelephonyFunctionKeyAddResponse|OvhStructTelephonyFunctionKeyDelResponse|OvhStructTelephonyFunctionKeyListResponse|OvhStructTelephonyFunctionKeyModifyResponse|OvhStructTelephonyGetCitiesFromZipResponse|OvhStructTelephonyGetClosureEventsAsArrayResponse|OvhStructTelephonyGetClosureEventsAsICSResponse|OvhStructTelephonyGetDefaultPrivateHolidaysEventsResponse|OvhStructTelephonyGetTimeZoneNumberResponse|OvhStructTelephonyHuntingGenericScreenListResponse|OvhStructTelephonyHuntingGenericScreenOptionsModifyResponse|OvhStructTelephonyHuntingGenericScreenOptionsResponse|OvhStructTelephonyHuntingGenericScreenSetResponse|OvhStructTelephonyHuntingGenericScreenStatusModifyResponse|OvhStructTelephonyHuntingGenericScreenStatusResponse|OvhStructTelephonyHuntingGroupListResponse|OvhStructTelephonyHuntingInfoResponse|OvhStructTelephonyHuntingModificationAnonymousCallRejectionResponse|OvhStructTelephonyHuntingModificationMembersResponse|OvhStructTelephonyHuntingModificationModeResponse|OvhStructTelephonyHuntingModificationQueueResponse|OvhStructTelephonyHuntingModificationSimultaneousCallsResponse|OvhStructTelephonyLineConsumptionCSVByMailResponse|OvhStructTelephonyLineDetailsResponse|OvhStructTelephonyLineGetCodecsResponse|OvhStructTelephonyLineGetIpRestrictionResponse|OvhStructTelephonyLineGetMgcpIpRestrictionResponse|OvhStructTelephonyLineGetOfferPricesResponse|OvhStructTelephonyLineGetSipDomainResponse|OvhStructTelephonyLineListResponse|OvhStructTelephonyLineLogsNotificationOptionsModifyResponse|OvhStructTelephonyLineLogsNotificationOptionsResponse|OvhStructTelephonyLineLogsOnGroupResponse|OvhStructTelephonyLineLogsResponse|OvhStructTelephonyLineOptionsListResponse|OvhStructTelephonyLineOptionsModifyResponse|OvhStructTelephonyLineOrderResponse|OvhStructTelephonyLineSetCodecsResponse|OvhStructTelephonyLineSetIpRestrictionResponse|OvhStructTelephonyLineSetMgcpIpRestrictionResponse|OvhStructTelephonyLineSetSipDomainResponse|OvhStructTelephonyLineSwitchOfferPossibilityResponse|OvhStructTelephonyLineSwitchOfferResponse|OvhStructTelephonyLineSwitchOldOfferPossibilityResponse|OvhStructTelephonyLineSwitchOldOfferResponse|OvhStructTelephonyListReversableCallsFromNumberResponse|OvhStructTelephonyListSummationCallsFromBillingAccountResponse|OvhStructTelephonyListSummationCallsFromNumberResponse|OvhStructTelephonyNicGetIpRestrictionResponse|OvhStructTelephonyNicGetMgcpIpRestrictionResponse|OvhStructTelephonyNicGetSipDomainResponse|OvhStructTelephonyNicSetIpRestrictionResponse|OvhStructTelephonyNicSetMgcpIpRestrictionResponse|OvhStructTelephonyNicSetSipDomainResponse|OvhStructTelephonyNumberCityForZoneListResponse|OvhStructTelephonyNumberCleanResponse|OvhStructTelephonyNumberCustomListResponse|OvhStructTelephonyNumberGetBillingAccountResponse|OvhStructTelephonyNumberGetFrWayNamesFromInseeResponse|OvhStructTelephonyNumberInfoResponse|OvhStructTelephonyNumberModifyResponse|OvhStructTelephonyNumberOrderResponse|OvhStructTelephonyNumberZoneAndPrefixListResponse|OvhStructTelephonyOfferInfoResponse|OvhStructTelephonyOfferModifyNameResponse|OvhStructTelephonyOfferModifyPasswordResponse|OvhStructTelephonyOfferSimultaneousLinesModifyResponse|OvhStructTelephonyOrdersFollowingUpResponse|OvhStructTelephonyPhonebookAddResponse|OvhStructTelephonyPhonebookContactAddResponse|OvhStructTelephonyPhonebookContactDelResponse|OvhStructTelephonyPhonebookContactListResponse|OvhStructTelephonyPhonebookContactModifyResponse|OvhStructTelephonyPhonebookDelResponse|OvhStructTelephonyPhonebookGroupListResponse|OvhStructTelephonyPhonebookListResponse|OvhStructTelephonyPhonebookModifyResponse|OvhStructTelephonyPhonebookOnGroupAddResponse|OvhStructTelephonyPhonebookOnGroupContactAddResponse|OvhStructTelephonyPhonebookOnGroupContactDelResponse|OvhStructTelephonyPhonebookOnGroupContactListResponse|OvhStructTelephonyPhonebookOnGroupContactModifyResponse|OvhStructTelephonyPhonebookOnGroupDelResponse|OvhStructTelephonyPhonebookOnGroupGroupListResponse|OvhStructTelephonyPhonebookOnGroupListResponse|OvhStructTelephonyPhonebookOnGroupModifyResponse|OvhStructTelephonyPhonebookOnSmsAddResponse|OvhStructTelephonyPhonebookOnSmsContactAddResponse|OvhStructTelephonyPhonebookOnSmsContactDelResponse|OvhStructTelephonyPhonebookOnSmsContactListResponse|OvhStructTelephonyPhonebookOnSmsContactModifyResponse|OvhStructTelephonyPhonebookOnSmsDelResponse|OvhStructTelephonyPhonebookOnSmsListResponse|OvhStructTelephonyPhonebookOnSmsModifyResponse|OvhStructTelephonyPhonebookSharePeerListResponse|OvhStructTelephonyPhonebookShareResponse|OvhStructTelephonyPlugAndPhoneInfoResponse|OvhStructTelephonyPlugAndPhoneOperationResponse|OvhStructTelephonyPlugAndPhoneResetResponse|OvhStructTelephonyPlugAndPhoneSkinModifyResponse|OvhStructTelephonyPortabilityOrderResponse|OvhStructTelephonyPortabilityOrderSpecialNumberResponse|OvhStructTelephonyPortabilityStatusResponse|OvhStructTelephonyRatesListCsvResponse|OvhStructTelephonyRatesListResponse|OvhStructTelephonyRedirectInfoResponse|OvhStructTelephonyRedirectModifyResponse|OvhStructTelephonyRestrictionListResponse|OvhStructTelephonyRestrictionModifyResponse|OvhStructTelephonyReversmentsRefundFromBillingAccountResponse|OvhStructTelephonyReversmentsRefundIsPendingResponse|OvhStructTelephonyScreenListBlackWhiteChoiceModifyResponse|OvhStructTelephonyScreenListBlackWhiteChoiceResponse|OvhStructTelephonyScreenListInfoModifyResponse|OvhStructTelephonyScreenListInfoResponse|OvhStructTelephonySecurityDepositCreditResponse|OvhStructTelephonySecurityDepositInfoResponse|OvhStructTelephonySetClosureEventsResponse|OvhStructTelephonySetDefaultPrivateHolidaysEventsResponse|OvhStructTelephonySetTimeZoneNumberResponse|OvhStructTelephonySipToAliasOfferResponse|OvhStructTelephonySmsAccountListResponse|OvhStructTelephonySmsAddCsvAttachmentResponse|OvhStructTelephonySmsBlacklistedSendersDeleteResponse|OvhStructTelephonySmsBlacklistedSendersListResponse|OvhStructTelephonySmsCancelSendingResponse|OvhStructTelephonySmsCreditLeftResponse|OvhStructTelephonySmsDeleteCsvAttachmentResponse|OvhStructTelephonySmsDeleteResponse|OvhStructTelephonySmsGetCallBackResponse|OvhStructTelephonySmsGetCsvAttachmentResponse|OvhStructTelephonySmsGetQuotaNotificationForUserResponse|OvhStructTelephonySmsGetQuotaNotificationResponse|OvhStructTelephonySmsGetUserQuotaForUserResponse|OvhStructTelephonySmsGetUserQuotaResponse|OvhStructTelephonySmsHistoryCsvResponse|OvhStructTelephonySmsHistoryResponse|OvhStructTelephonySmsListCsvAttachmentResponse|OvhStructTelephonySmsMultiSendResponse|OvhStructTelephonySmsplusIsFreeKeywordResponse|OvhStructTelephonySmsplusSendSmsMtResponse|OvhStructTelephonySmsplusServiceAddResponse|OvhStructTelephonySmsplusServiceDeleteResponse|OvhStructTelephonySmsplusServiceDetailsResponse|OvhStructTelephonySmsplusServiceEditResponse|OvhStructTelephonySmsplusServiceListResponse|OvhStructTelephonySmsplusServiceReversableTicketsListResponse|OvhStructTelephonySmsplusServiceReversableTicketsSummaryResponse|OvhStructTelephonySmsplusShortCodesListResponse|OvhStructTelephonySmsSenderAddResponse|OvhStructTelephonySmsSenderDeleteResponse|OvhStructTelephonySmsSenderDescriptionResponse|OvhStructTelephonySmsSenderListResponse|OvhStructTelephonySmsSenderValidateResponse|OvhStructTelephonySmsSendResponse|OvhStructTelephonySmsSetCallBackResponse|OvhStructTelephonySmsSetQuotaNotificationResponse|OvhStructTelephonySmsSetUserQuotaResponse|OvhStructTelephonySmsUserAddCsvAttachmentResponse|OvhStructTelephonySmsUserAddResponse|OvhStructTelephonySmsUserCreditLeftResponse|OvhStructTelephonySmsUserDeleteCsvAttachmentResponse|OvhStructTelephonySmsUserDelResponse|OvhStructTelephonySmsUserGetCallBackResponse|OvhStructTelephonySmsUserGetCsvAttachmentResponse|OvhStructTelephonySmsUserHistoryCsvResponse|OvhStructTelephonySmsUserHistoryResponse|OvhStructTelephonySmsUserListCsvAttachmentResponse|OvhStructTelephonySmsUserListResponse|OvhStructTelephonySmsUserMultiSendResponse|OvhStructTelephonySmsUserPasswordResponse|OvhStructTelephonySmsUserSendResponse|OvhStructTelephonySmsUserSetCallBackResponse|OvhStructTelephonySpareAddResponse|OvhStructTelephonySpareCapabilitiesResponse|OvhStructTelephonySpareCreateRMAResponse|OvhStructTelephonySpareDelResponse|OvhStructTelephonySpareInfoResponse|OvhStructTelephonySpareListResponse|OvhStructTelephonySparePurchaseResponse|OvhStructTelephonySpareReplaceResponse|OvhStructTelephonySpareServiceInfoResponse|OvhStructTelephonySpareServiceListResponse|OvhStructTelephonySpecialNumberCustomListResponse|OvhStructTelephonySpecialNumberOrderResponse|OvhStructTelephonySviInfoResponse|OvhStructTelephonySviModifyResponse|OvhStructTelephonyToneDeleteResponse|OvhStructTelephonyToneRemoteUploadResponse|OvhStructTelephonyTonesOptionsListResponse|OvhStructTelephonyTonesOptionsModifyResponse|OvhStructTelephonyToneStatusResponse|OvhStructTelephonyTrunkExternalDisplayedNumberAddResponse|OvhStructTelephonyTrunkExternalDisplayedNumberCheckResponse|OvhStructTelephonyTrunkExternalDisplayedNumberDelResponse|OvhStructTelephonyTrunkExternalDisplayedNumberListResponse|OvhStructTelephonyVoicemailMailboxDeleteResponse|OvhStructTelephonyVoicemailMailboxDownloadResponse|OvhStructTelephonyVoicemailMailboxListResponse|OvhStructTelephonyVoicemailMessageDeleteResponse|OvhStructTelephonyVoicemailMessagesDownloadResponse|OvhStructTelephonyVoicemailMessagesRemoteUploadResponse|OvhStructTelephonyVoicemailMessagesStatusResponse|OvhStructTelephonyVoicemailModifyPasswordResponse|OvhStructTelephonyVoicemailOptionsListResponse|OvhStructTelephonyVoicemailOptionsModifyResponse
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