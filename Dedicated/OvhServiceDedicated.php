<?php
/**
 * File for class OvhServiceDedicated
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceDedicated originally named Dedicated
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceDedicated extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named dedicatedReverseDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedReverseDel::getSession()
	 * @uses OvhStructDedicatedReverseDel::getHostname()
	 * @uses OvhStructDedicatedReverseDel::getIp()
	 * @param OvhStructDedicatedReverseDel $_ovhStructDedicatedReverseDel
	 * @return OvhStructDedicatedReverseDelResponse
	 */
	public function dedicatedReverseDel(OvhStructDedicatedReverseDel $_ovhStructDedicatedReverseDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedReverseDel($_ovhStructDedicatedReverseDel->getSession(),$_ovhStructDedicatedReverseDel->getHostname(),$_ovhStructDedicatedReverseDel->getIp()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedDelServiceMonitoringAlert
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedDelServiceMonitoringAlert::getSession()
	 * @uses OvhStructDedicatedDelServiceMonitoringAlert::getIp()
	 * @uses OvhStructDedicatedDelServiceMonitoringAlert::getPort()
	 * @uses OvhStructDedicatedDelServiceMonitoringAlert::getItemId()
	 * @uses OvhStructDedicatedDelServiceMonitoringAlert::getMedia()
	 * @uses OvhStructDedicatedDelServiceMonitoringAlert::getDestination()
	 * @param OvhStructDedicatedDelServiceMonitoringAlert $_ovhStructDedicatedDelServiceMonitoringAlert
	 * @return OvhStructDedicatedDelServiceMonitoringAlertResponse
	 */
	public function dedicatedDelServiceMonitoringAlert(OvhStructDedicatedDelServiceMonitoringAlert $_ovhStructDedicatedDelServiceMonitoringAlert)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedDelServiceMonitoringAlert($_ovhStructDedicatedDelServiceMonitoringAlert->getSession(),$_ovhStructDedicatedDelServiceMonitoringAlert->getIp(),$_ovhStructDedicatedDelServiceMonitoringAlert->getPort(),$_ovhStructDedicatedDelServiceMonitoringAlert->getItemId(),$_ovhStructDedicatedDelServiceMonitoringAlert->getMedia(),$_ovhStructDedicatedDelServiceMonitoringAlert->getDestination()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedAddServiceMonitoringAlertSMS
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedAddServiceMonitoringAlertSMS::getSession()
	 * @uses OvhStructDedicatedAddServiceMonitoringAlertSMS::getIp()
	 * @uses OvhStructDedicatedAddServiceMonitoringAlertSMS::getPort()
	 * @uses OvhStructDedicatedAddServiceMonitoringAlertSMS::getItemId()
	 * @uses OvhStructDedicatedAddServiceMonitoringAlertSMS::getSmsAccount()
	 * @uses OvhStructDedicatedAddServiceMonitoringAlertSMS::getPhoneNumberTo()
	 * @param OvhStructDedicatedAddServiceMonitoringAlertSMS $_ovhStructDedicatedAddServiceMonitoringAlertSMS
	 * @return OvhStructDedicatedAddServiceMonitoringAlertSMSResponse
	 */
	public function dedicatedAddServiceMonitoringAlertSMS(OvhStructDedicatedAddServiceMonitoringAlertSMS $_ovhStructDedicatedAddServiceMonitoringAlertSMS)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedAddServiceMonitoringAlertSMS($_ovhStructDedicatedAddServiceMonitoringAlertSMS->getSession(),$_ovhStructDedicatedAddServiceMonitoringAlertSMS->getIp(),$_ovhStructDedicatedAddServiceMonitoringAlertSMS->getPort(),$_ovhStructDedicatedAddServiceMonitoringAlertSMS->getItemId(),$_ovhStructDedicatedAddServiceMonitoringAlertSMS->getSmsAccount(),$_ovhStructDedicatedAddServiceMonitoringAlertSMS->getPhoneNumberTo()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedIpLoadBalancingList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedIpLoadBalancingList::getSession()
	 * @param OvhStructDedicatedIpLoadBalancingList $_ovhStructDedicatedIpLoadBalancingList
	 * @return OvhStructDedicatedIpLoadBalancingListResponse
	 */
	public function dedicatedIpLoadBalancingList(OvhStructDedicatedIpLoadBalancingList $_ovhStructDedicatedIpLoadBalancingList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedIpLoadBalancingList($_ovhStructDedicatedIpLoadBalancingList->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedBackupReinstallConfiguration
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedBackupReinstallConfiguration::getSession()
	 * @uses OvhStructDedicatedBackupReinstallConfiguration::getHostname()
	 * @param OvhStructDedicatedBackupReinstallConfiguration $_ovhStructDedicatedBackupReinstallConfiguration
	 * @return OvhStructDedicatedBackupReinstallConfigurationResponse
	 */
	public function dedicatedBackupReinstallConfiguration(OvhStructDedicatedBackupReinstallConfiguration $_ovhStructDedicatedBackupReinstallConfiguration)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedBackupReinstallConfiguration($_ovhStructDedicatedBackupReinstallConfiguration->getSession(),$_ovhStructDedicatedBackupReinstallConfiguration->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedBackupGetHisto
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedBackupGetHisto::getSession()
	 * @uses OvhStructDedicatedBackupGetHisto::getHostname()
	 * @uses OvhStructDedicatedBackupGetHisto::getBackupId()
	 * @param OvhStructDedicatedBackupGetHisto $_ovhStructDedicatedBackupGetHisto
	 * @return OvhStructDedicatedBackupGetHistoResponse
	 */
	public function dedicatedBackupGetHisto(OvhStructDedicatedBackupGetHisto $_ovhStructDedicatedBackupGetHisto)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedBackupGetHisto($_ovhStructDedicatedBackupGetHisto->getSession(),$_ovhStructDedicatedBackupGetHisto->getHostname(),$_ovhStructDedicatedBackupGetHisto->getBackupId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedBackupUpdate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedBackupUpdate::getSession()
	 * @uses OvhStructDedicatedBackupUpdate::getHostname()
	 * @uses OvhStructDedicatedBackupUpdate::getBackupId()
	 * @uses OvhStructDedicatedBackupUpdate::getEmail()
	 * @uses OvhStructDedicatedBackupUpdate::getSnapshot()
	 * @uses OvhStructDedicatedBackupUpdate::getSshPort()
	 * @uses OvhStructDedicatedBackupUpdate::getStatus()
	 * @uses OvhStructDedicatedBackupUpdate::getLanguage()
	 * @uses OvhStructDedicatedBackupUpdate::getSrc()
	 * @param OvhStructDedicatedBackupUpdate $_ovhStructDedicatedBackupUpdate
	 * @return OvhStructDedicatedBackupUpdateResponse
	 */
	public function dedicatedBackupUpdate(OvhStructDedicatedBackupUpdate $_ovhStructDedicatedBackupUpdate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedBackupUpdate($_ovhStructDedicatedBackupUpdate->getSession(),$_ovhStructDedicatedBackupUpdate->getHostname(),$_ovhStructDedicatedBackupUpdate->getBackupId(),$_ovhStructDedicatedBackupUpdate->getEmail(),$_ovhStructDedicatedBackupUpdate->getSnapshot(),$_ovhStructDedicatedBackupUpdate->getSshPort(),$_ovhStructDedicatedBackupUpdate->getStatus(),$_ovhStructDedicatedBackupUpdate->getLanguage(),$_ovhStructDedicatedBackupUpdate->getSrc()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedNetbootGetRescueEmail
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedNetbootGetRescueEmail::getSession()
	 * @uses OvhStructDedicatedNetbootGetRescueEmail::getHostname()
	 * @param OvhStructDedicatedNetbootGetRescueEmail $_ovhStructDedicatedNetbootGetRescueEmail
	 * @return OvhStructDedicatedNetbootGetRescueEmailResponse
	 */
	public function dedicatedNetbootGetRescueEmail(OvhStructDedicatedNetbootGetRescueEmail $_ovhStructDedicatedNetbootGetRescueEmail)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedNetbootGetRescueEmail($_ovhStructDedicatedNetbootGetRescueEmail->getSession(),$_ovhStructDedicatedNetbootGetRescueEmail->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedRtmListBackdoor
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedRtmListBackdoor::getSession()
	 * @uses OvhStructDedicatedRtmListBackdoor::getHostname()
	 * @param OvhStructDedicatedRtmListBackdoor $_ovhStructDedicatedRtmListBackdoor
	 * @return OvhStructDedicatedRtmListBackdoorResponse
	 */
	public function dedicatedRtmListBackdoor(OvhStructDedicatedRtmListBackdoor $_ovhStructDedicatedRtmListBackdoor)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedRtmListBackdoor($_ovhStructDedicatedRtmListBackdoor->getSession(),$_ovhStructDedicatedRtmListBackdoor->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedMonitoringNotificationCreate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedMonitoringNotificationCreate::getSession()
	 * @uses OvhStructDedicatedMonitoringNotificationCreate::getHostname()
	 * @uses OvhStructDedicatedMonitoringNotificationCreate::getNicAlert()
	 * @uses OvhStructDedicatedMonitoringNotificationCreate::getLanguage()
	 * @uses OvhStructDedicatedMonitoringNotificationCreate::getStatus()
	 * @param OvhStructDedicatedMonitoringNotificationCreate $_ovhStructDedicatedMonitoringNotificationCreate
	 * @return OvhStructDedicatedMonitoringNotificationCreateResponse
	 */
	public function dedicatedMonitoringNotificationCreate(OvhStructDedicatedMonitoringNotificationCreate $_ovhStructDedicatedMonitoringNotificationCreate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedMonitoringNotificationCreate($_ovhStructDedicatedMonitoringNotificationCreate->getSession(),$_ovhStructDedicatedMonitoringNotificationCreate->getHostname(),$_ovhStructDedicatedMonitoringNotificationCreate->getNicAlert(),$_ovhStructDedicatedMonitoringNotificationCreate->getLanguage(),$_ovhStructDedicatedMonitoringNotificationCreate->getStatus()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedBackupList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedBackupList::getSession()
	 * @uses OvhStructDedicatedBackupList::getHostname()
	 * @uses OvhStructDedicatedBackupList::getBackupId()
	 * @uses OvhStructDedicatedBackupList::getBackupName()
	 * @param OvhStructDedicatedBackupList $_ovhStructDedicatedBackupList
	 * @return OvhStructDedicatedBackupListResponse
	 */
	public function dedicatedBackupList(OvhStructDedicatedBackupList $_ovhStructDedicatedBackupList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedBackupList($_ovhStructDedicatedBackupList->getSession(),$_ovhStructDedicatedBackupList->getHostname(),$_ovhStructDedicatedBackupList->getBackupId(),$_ovhStructDedicatedBackupList->getBackupName()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedNetbootGetAll
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedNetbootGetAll::getSession()
	 * @uses OvhStructDedicatedNetbootGetAll::getHostname()
	 * @param OvhStructDedicatedNetbootGetAll $_ovhStructDedicatedNetbootGetAll
	 * @return OvhStructDedicatedNetbootGetAllResponse
	 */
	public function dedicatedNetbootGetAll(OvhStructDedicatedNetbootGetAll $_ovhStructDedicatedNetbootGetAll)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedNetbootGetAll($_ovhStructDedicatedNetbootGetAll->getSession(),$_ovhStructDedicatedNetbootGetAll->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedVirtualMacIpAvailableGetList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedVirtualMacIpAvailableGetList::getSession()
	 * @uses OvhStructDedicatedVirtualMacIpAvailableGetList::getHostname()
	 * @param OvhStructDedicatedVirtualMacIpAvailableGetList $_ovhStructDedicatedVirtualMacIpAvailableGetList
	 * @return OvhStructDedicatedVirtualMacIpAvailableGetListResponse
	 */
	public function dedicatedVirtualMacIpAvailableGetList(OvhStructDedicatedVirtualMacIpAvailableGetList $_ovhStructDedicatedVirtualMacIpAvailableGetList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedVirtualMacIpAvailableGetList($_ovhStructDedicatedVirtualMacIpAvailableGetList->getSession(),$_ovhStructDedicatedVirtualMacIpAvailableGetList->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedMonitoringSMSCreate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedMonitoringSMSCreate::getSession()
	 * @uses OvhStructDedicatedMonitoringSMSCreate::getHostname()
	 * @uses OvhStructDedicatedMonitoringSMSCreate::getSmsAccount()
	 * @uses OvhStructDedicatedMonitoringSMSCreate::getPhoneNumberTo()
	 * @uses OvhStructDedicatedMonitoringSMSCreate::getLanguage()
	 * @uses OvhStructDedicatedMonitoringSMSCreate::getStatus()
	 * @param OvhStructDedicatedMonitoringSMSCreate $_ovhStructDedicatedMonitoringSMSCreate
	 * @return OvhStructDedicatedMonitoringSMSCreateResponse
	 */
	public function dedicatedMonitoringSMSCreate(OvhStructDedicatedMonitoringSMSCreate $_ovhStructDedicatedMonitoringSMSCreate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedMonitoringSMSCreate($_ovhStructDedicatedMonitoringSMSCreate->getSession(),$_ovhStructDedicatedMonitoringSMSCreate->getHostname(),$_ovhStructDedicatedMonitoringSMSCreate->getSmsAccount(),$_ovhStructDedicatedMonitoringSMSCreate->getPhoneNumberTo(),$_ovhStructDedicatedMonitoringSMSCreate->getLanguage(),$_ovhStructDedicatedMonitoringSMSCreate->getStatus()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedRipeQuery
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedRipeQuery::getSession()
	 * @uses OvhStructDedicatedRipeQuery::getSearch()
	 * @uses OvhStructDedicatedRipeQuery::getType()
	 * @param OvhStructDedicatedRipeQuery $_ovhStructDedicatedRipeQuery
	 * @return OvhStructDedicatedRipeQueryResponse
	 */
	public function dedicatedRipeQuery(OvhStructDedicatedRipeQuery $_ovhStructDedicatedRipeQuery)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedRipeQuery($_ovhStructDedicatedRipeQuery->getSession(),$_ovhStructDedicatedRipeQuery->getSearch(),$_ovhStructDedicatedRipeQuery->getType()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedBackupFtpPassword
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedBackupFtpPassword::getSession()
	 * @uses OvhStructDedicatedBackupFtpPassword::getHostname()
	 * @uses OvhStructDedicatedBackupFtpPassword::getEmail()
	 * @uses OvhStructDedicatedBackupFtpPassword::getLanguage()
	 * @param OvhStructDedicatedBackupFtpPassword $_ovhStructDedicatedBackupFtpPassword
	 * @return OvhStructDedicatedBackupFtpPasswordResponse
	 */
	public function dedicatedBackupFtpPassword(OvhStructDedicatedBackupFtpPassword $_ovhStructDedicatedBackupFtpPassword)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedBackupFtpPassword($_ovhStructDedicatedBackupFtpPassword->getSession(),$_ovhStructDedicatedBackupFtpPassword->getHostname(),$_ovhStructDedicatedBackupFtpPassword->getEmail(),$_ovhStructDedicatedBackupFtpPassword->getLanguage()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedRtmBackdoorUpdateAlert
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedRtmBackdoorUpdateAlert::getSession()
	 * @uses OvhStructDedicatedRtmBackdoorUpdateAlert::getHostname()
	 * @uses OvhStructDedicatedRtmBackdoorUpdateAlert::getBackdoorId()
	 * @uses OvhStructDedicatedRtmBackdoorUpdateAlert::getDo_not_mail()
	 * @param OvhStructDedicatedRtmBackdoorUpdateAlert $_ovhStructDedicatedRtmBackdoorUpdateAlert
	 * @return OvhStructDedicatedRtmBackdoorUpdateAlertResponse
	 */
	public function dedicatedRtmBackdoorUpdateAlert(OvhStructDedicatedRtmBackdoorUpdateAlert $_ovhStructDedicatedRtmBackdoorUpdateAlert)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedRtmBackdoorUpdateAlert($_ovhStructDedicatedRtmBackdoorUpdateAlert->getSession(),$_ovhStructDedicatedRtmBackdoorUpdateAlert->getHostname(),$_ovhStructDedicatedRtmBackdoorUpdateAlert->getBackdoorId(),$_ovhStructDedicatedRtmBackdoorUpdateAlert->getDo_not_mail()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedSecondaryDNSAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedSecondaryDNSAdd::getSession()
	 * @uses OvhStructDedicatedSecondaryDNSAdd::getHostname()
	 * @uses OvhStructDedicatedSecondaryDNSAdd::getIp()
	 * @uses OvhStructDedicatedSecondaryDNSAdd::getDomain()
	 * @uses OvhStructDedicatedSecondaryDNSAdd::getNameserver()
	 * @uses OvhStructDedicatedSecondaryDNSAdd::getNameserverIp()
	 * @param OvhStructDedicatedSecondaryDNSAdd $_ovhStructDedicatedSecondaryDNSAdd
	 * @return OvhStructDedicatedSecondaryDNSAddResponse
	 */
	public function dedicatedSecondaryDNSAdd(OvhStructDedicatedSecondaryDNSAdd $_ovhStructDedicatedSecondaryDNSAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedSecondaryDNSAdd($_ovhStructDedicatedSecondaryDNSAdd->getSession(),$_ovhStructDedicatedSecondaryDNSAdd->getHostname(),$_ovhStructDedicatedSecondaryDNSAdd->getIp(),$_ovhStructDedicatedSecondaryDNSAdd->getDomain(),$_ovhStructDedicatedSecondaryDNSAdd->getNameserver(),$_ovhStructDedicatedSecondaryDNSAdd->getNameserverIp()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedRtmGetStatus
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedRtmGetStatus::getSession()
	 * @uses OvhStructDedicatedRtmGetStatus::getHostname()
	 * @param OvhStructDedicatedRtmGetStatus $_ovhStructDedicatedRtmGetStatus
	 * @return OvhStructDedicatedRtmGetStatusResponse
	 */
	public function dedicatedRtmGetStatus(OvhStructDedicatedRtmGetStatus $_ovhStructDedicatedRtmGetStatus)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedRtmGetStatus($_ovhStructDedicatedRtmGetStatus->getSession(),$_ovhStructDedicatedRtmGetStatus->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedNetbootGetAvailable
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedNetbootGetAvailable::getSession()
	 * @uses OvhStructDedicatedNetbootGetAvailable::getHostname()
	 * @param OvhStructDedicatedNetbootGetAvailable $_ovhStructDedicatedNetbootGetAvailable
	 * @return OvhStructDedicatedNetbootGetAvailableResponse
	 */
	public function dedicatedNetbootGetAvailable(OvhStructDedicatedNetbootGetAvailable $_ovhStructDedicatedNetbootGetAvailable)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedNetbootGetAvailable($_ovhStructDedicatedNetbootGetAvailable->getSession(),$_ovhStructDedicatedNetbootGetAvailable->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedMailinglistGetAllowed
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedMailinglistGetAllowed::getSession()
	 * @param OvhStructDedicatedMailinglistGetAllowed $_ovhStructDedicatedMailinglistGetAllowed
	 * @return OvhStructDedicatedMailinglistGetAllowedResponse
	 */
	public function dedicatedMailinglistGetAllowed(OvhStructDedicatedMailinglistGetAllowed $_ovhStructDedicatedMailinglistGetAllowed)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedMailinglistGetAllowed($_ovhStructDedicatedMailinglistGetAllowed->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedBackupInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedBackupInfo::getSession()
	 * @uses OvhStructDedicatedBackupInfo::getHostname()
	 * @uses OvhStructDedicatedBackupInfo::getBackupId()
	 * @param OvhStructDedicatedBackupInfo $_ovhStructDedicatedBackupInfo
	 * @return OvhStructDedicatedBackupInfoResponse
	 */
	public function dedicatedBackupInfo(OvhStructDedicatedBackupInfo $_ovhStructDedicatedBackupInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedBackupInfo($_ovhStructDedicatedBackupInfo->getSession(),$_ovhStructDedicatedBackupInfo->getHostname(),$_ovhStructDedicatedBackupInfo->getBackupId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedFailoverRipeAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedFailoverRipeAdd::getSession()
	 * @uses OvhStructDedicatedFailoverRipeAdd::getHostname()
	 * @uses OvhStructDedicatedFailoverRipeAdd::getNetname()
	 * @uses OvhStructDedicatedFailoverRipeAdd::getDescription()
	 * @uses OvhStructDedicatedFailoverRipeAdd::getCountry()
	 * @uses OvhStructDedicatedFailoverRipeAdd::getAddressesNumber()
	 * @uses OvhStructDedicatedFailoverRipeAdd::getComment()
	 * @uses OvhStructDedicatedFailoverRipeAdd::getRoutedToInterface()
	 * @param OvhStructDedicatedFailoverRipeAdd $_ovhStructDedicatedFailoverRipeAdd
	 * @return OvhStructDedicatedFailoverRipeAddResponse
	 */
	public function dedicatedFailoverRipeAdd(OvhStructDedicatedFailoverRipeAdd $_ovhStructDedicatedFailoverRipeAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedFailoverRipeAdd($_ovhStructDedicatedFailoverRipeAdd->getSession(),$_ovhStructDedicatedFailoverRipeAdd->getHostname(),$_ovhStructDedicatedFailoverRipeAdd->getNetname(),$_ovhStructDedicatedFailoverRipeAdd->getDescription(),$_ovhStructDedicatedFailoverRipeAdd->getCountry(),$_ovhStructDedicatedFailoverRipeAdd->getAddressesNumber(),$_ovhStructDedicatedFailoverRipeAdd->getComment(),$_ovhStructDedicatedFailoverRipeAdd->getRoutedToInterface()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedFilterIrcClientRuleAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedFilterIrcClientRuleAdd::getSession()
	 * @uses OvhStructDedicatedFilterIrcClientRuleAdd::getHostname()
	 * @uses OvhStructDedicatedFilterIrcClientRuleAdd::getFromIp()
	 * @uses OvhStructDedicatedFilterIrcClientRuleAdd::getToIp()
	 * @param OvhStructDedicatedFilterIrcClientRuleAdd $_ovhStructDedicatedFilterIrcClientRuleAdd
	 * @return OvhStructDedicatedFilterIrcClientRuleAddResponse
	 */
	public function dedicatedFilterIrcClientRuleAdd(OvhStructDedicatedFilterIrcClientRuleAdd $_ovhStructDedicatedFilterIrcClientRuleAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedFilterIrcClientRuleAdd($_ovhStructDedicatedFilterIrcClientRuleAdd->getSession(),$_ovhStructDedicatedFilterIrcClientRuleAdd->getHostname(),$_ovhStructDedicatedFilterIrcClientRuleAdd->getFromIp(),$_ovhStructDedicatedFilterIrcClientRuleAdd->getToIp()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedInstallationTemplateList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedInstallationTemplateList::getSession()
	 * @param OvhStructDedicatedInstallationTemplateList $_ovhStructDedicatedInstallationTemplateList
	 * @return OvhStructDedicatedInstallationTemplateListResponse
	 */
	public function dedicatedInstallationTemplateList(OvhStructDedicatedInstallationTemplateList $_ovhStructDedicatedInstallationTemplateList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedInstallationTemplateList($_ovhStructDedicatedInstallationTemplateList->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedBackupGetCalendar
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedBackupGetCalendar::getSession()
	 * @param OvhStructDedicatedBackupGetCalendar $_ovhStructDedicatedBackupGetCalendar
	 * @return OvhStructDedicatedBackupGetCalendarResponse
	 */
	public function dedicatedBackupGetCalendar(OvhStructDedicatedBackupGetCalendar $_ovhStructDedicatedBackupGetCalendar)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedBackupGetCalendar($_ovhStructDedicatedBackupGetCalendar->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedIpLoadBalancingServerDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedIpLoadBalancingServerDel::getSession()
	 * @uses OvhStructDedicatedIpLoadBalancingServerDel::getIpLoadBalancing()
	 * @uses OvhStructDedicatedIpLoadBalancingServerDel::getHostname()
	 * @param OvhStructDedicatedIpLoadBalancingServerDel $_ovhStructDedicatedIpLoadBalancingServerDel
	 * @return OvhStructDedicatedIpLoadBalancingServerDelResponse
	 */
	public function dedicatedIpLoadBalancingServerDel(OvhStructDedicatedIpLoadBalancingServerDel $_ovhStructDedicatedIpLoadBalancingServerDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedIpLoadBalancingServerDel($_ovhStructDedicatedIpLoadBalancingServerDel->getSession(),$_ovhStructDedicatedIpLoadBalancingServerDel->getIpLoadBalancing(),$_ovhStructDedicatedIpLoadBalancingServerDel->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedEditServiceMonitoringItem
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedEditServiceMonitoringItem::getSession()
	 * @uses OvhStructDedicatedEditServiceMonitoringItem::getIp()
	 * @uses OvhStructDedicatedEditServiceMonitoringItem::getItemId()
	 * @uses OvhStructDedicatedEditServiceMonitoringItem::getPeriod()
	 * @uses OvhStructDedicatedEditServiceMonitoringItem::getString()
	 * @param OvhStructDedicatedEditServiceMonitoringItem $_ovhStructDedicatedEditServiceMonitoringItem
	 * @return OvhStructDedicatedEditServiceMonitoringItemResponse
	 */
	public function dedicatedEditServiceMonitoringItem(OvhStructDedicatedEditServiceMonitoringItem $_ovhStructDedicatedEditServiceMonitoringItem)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedEditServiceMonitoringItem($_ovhStructDedicatedEditServiceMonitoringItem->getSession(),$_ovhStructDedicatedEditServiceMonitoringItem->getIp(),$_ovhStructDedicatedEditServiceMonitoringItem->getItemId(),$_ovhStructDedicatedEditServiceMonitoringItem->getPeriod(),$_ovhStructDedicatedEditServiceMonitoringItem->getString()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedIPForUDPServerList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedIPForUDPServerList::getSession()
	 * @uses OvhStructDedicatedIPForUDPServerList::getHostname()
	 * @param OvhStructDedicatedIPForUDPServerList $_ovhStructDedicatedIPForUDPServerList
	 * @return OvhStructDedicatedIPForUDPServerListResponse
	 */
	public function dedicatedIPForUDPServerList(OvhStructDedicatedIPForUDPServerList $_ovhStructDedicatedIPForUDPServerList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedIPForUDPServerList($_ovhStructDedicatedIPForUDPServerList->getSession(),$_ovhStructDedicatedIPForUDPServerList->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedBackupSet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedBackupSet::getSession()
	 * @uses OvhStructDedicatedBackupSet::getHostname()
	 * @uses OvhStructDedicatedBackupSet::getBackupId()
	 * @uses OvhStructDedicatedBackupSet::getEmail()
	 * @uses OvhStructDedicatedBackupSet::getBackupType()
	 * @uses OvhStructDedicatedBackupSet::getSnapshot()
	 * @uses OvhStructDedicatedBackupSet::getSshPort()
	 * @uses OvhStructDedicatedBackupSet::getStatus()
	 * @uses OvhStructDedicatedBackupSet::getLanguage()
	 * @uses OvhStructDedicatedBackupSet::getSrc()
	 * @param OvhStructDedicatedBackupSet $_ovhStructDedicatedBackupSet
	 * @return OvhStructDedicatedBackupSetResponse
	 */
	public function dedicatedBackupSet(OvhStructDedicatedBackupSet $_ovhStructDedicatedBackupSet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedBackupSet($_ovhStructDedicatedBackupSet->getSession(),$_ovhStructDedicatedBackupSet->getHostname(),$_ovhStructDedicatedBackupSet->getBackupId(),$_ovhStructDedicatedBackupSet->getEmail(),$_ovhStructDedicatedBackupSet->getBackupType(),$_ovhStructDedicatedBackupSet->getSnapshot(),$_ovhStructDedicatedBackupSet->getSshPort(),$_ovhStructDedicatedBackupSet->getStatus(),$_ovhStructDedicatedBackupSet->getLanguage(),$_ovhStructDedicatedBackupSet->getSrc()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedVirtualMacIpDelete
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedVirtualMacIpDelete::getSession()
	 * @uses OvhStructDedicatedVirtualMacIpDelete::getHostname()
	 * @uses OvhStructDedicatedVirtualMacIpDelete::getIp()
	 * @param OvhStructDedicatedVirtualMacIpDelete $_ovhStructDedicatedVirtualMacIpDelete
	 * @return OvhStructDedicatedVirtualMacIpDeleteResponse
	 */
	public function dedicatedVirtualMacIpDelete(OvhStructDedicatedVirtualMacIpDelete $_ovhStructDedicatedVirtualMacIpDelete)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedVirtualMacIpDelete($_ovhStructDedicatedVirtualMacIpDelete->getSession(),$_ovhStructDedicatedVirtualMacIpDelete->getHostname(),$_ovhStructDedicatedVirtualMacIpDelete->getIp()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedFailoverRipeSplit
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedFailoverRipeSplit::getSession()
	 * @uses OvhStructDedicatedFailoverRipeSplit::getHostname()
	 * @uses OvhStructDedicatedFailoverRipeSplit::getNetname()
	 * @uses OvhStructDedicatedFailoverRipeSplit::getNetworkIp()
	 * @param OvhStructDedicatedFailoverRipeSplit $_ovhStructDedicatedFailoverRipeSplit
	 * @return OvhStructDedicatedFailoverRipeSplitResponse
	 */
	public function dedicatedFailoverRipeSplit(OvhStructDedicatedFailoverRipeSplit $_ovhStructDedicatedFailoverRipeSplit)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedFailoverRipeSplit($_ovhStructDedicatedFailoverRipeSplit->getSession(),$_ovhStructDedicatedFailoverRipeSplit->getHostname(),$_ovhStructDedicatedFailoverRipeSplit->getNetname(),$_ovhStructDedicatedFailoverRipeSplit->getNetworkIp()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedReverseInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedReverseInfo::getSession()
	 * @uses OvhStructDedicatedReverseInfo::getHostname()
	 * @uses OvhStructDedicatedReverseInfo::getIp()
	 * @param OvhStructDedicatedReverseInfo $_ovhStructDedicatedReverseInfo
	 * @return OvhStructDedicatedReverseInfoResponse
	 */
	public function dedicatedReverseInfo(OvhStructDedicatedReverseInfo $_ovhStructDedicatedReverseInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedReverseInfo($_ovhStructDedicatedReverseInfo->getSession(),$_ovhStructDedicatedReverseInfo->getHostname(),$_ovhStructDedicatedReverseInfo->getIp()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedCapabilitiesGetAll
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedCapabilitiesGetAll::getSession()
	 * @param OvhStructDedicatedCapabilitiesGetAll $_ovhStructDedicatedCapabilitiesGetAll
	 * @return OvhStructDedicatedCapabilitiesGetAllResponse
	 */
	public function dedicatedCapabilitiesGetAll(OvhStructDedicatedCapabilitiesGetAll $_ovhStructDedicatedCapabilitiesGetAll)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedCapabilitiesGetAll($_ovhStructDedicatedCapabilitiesGetAll->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedBackupIncludeAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedBackupIncludeAdd::getSession()
	 * @uses OvhStructDedicatedBackupIncludeAdd::getHostname()
	 * @uses OvhStructDedicatedBackupIncludeAdd::getBackupId()
	 * @uses OvhStructDedicatedBackupIncludeAdd::getInclude()
	 * @param OvhStructDedicatedBackupIncludeAdd $_ovhStructDedicatedBackupIncludeAdd
	 * @return OvhStructDedicatedBackupIncludeAddResponse
	 */
	public function dedicatedBackupIncludeAdd(OvhStructDedicatedBackupIncludeAdd $_ovhStructDedicatedBackupIncludeAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedBackupIncludeAdd($_ovhStructDedicatedBackupIncludeAdd->getSession(),$_ovhStructDedicatedBackupIncludeAdd->getHostname(),$_ovhStructDedicatedBackupIncludeAdd->getBackupId(),$_ovhStructDedicatedBackupIncludeAdd->getInclude()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedFailoverRipeList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedFailoverRipeList::getSession()
	 * @uses OvhStructDedicatedFailoverRipeList::getHostname()
	 * @param OvhStructDedicatedFailoverRipeList $_ovhStructDedicatedFailoverRipeList
	 * @return OvhStructDedicatedFailoverRipeListResponse
	 */
	public function dedicatedFailoverRipeList(OvhStructDedicatedFailoverRipeList $_ovhStructDedicatedFailoverRipeList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedFailoverRipeList($_ovhStructDedicatedFailoverRipeList->getSession(),$_ovhStructDedicatedFailoverRipeList->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedMonitoringServiceAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedMonitoringServiceAdd::getSession()
	 * @uses OvhStructDedicatedMonitoringServiceAdd::getHostname()
	 * @uses OvhStructDedicatedMonitoringServiceAdd::getIp()
	 * @uses OvhStructDedicatedMonitoringServiceAdd::getPort()
	 * @uses OvhStructDedicatedMonitoringServiceAdd::getProtocol()
	 * @uses OvhStructDedicatedMonitoringServiceAdd::getPeriod()
	 * @uses OvhStructDedicatedMonitoringServiceAdd::getString()
	 * @uses OvhStructDedicatedMonitoringServiceAdd::getUrl()
	 * @uses OvhStructDedicatedMonitoringServiceAdd::getEmail()
	 * @param OvhStructDedicatedMonitoringServiceAdd $_ovhStructDedicatedMonitoringServiceAdd
	 * @return OvhStructDedicatedMonitoringServiceAddResponse
	 */
	public function dedicatedMonitoringServiceAdd(OvhStructDedicatedMonitoringServiceAdd $_ovhStructDedicatedMonitoringServiceAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedMonitoringServiceAdd($_ovhStructDedicatedMonitoringServiceAdd->getSession(),$_ovhStructDedicatedMonitoringServiceAdd->getHostname(),$_ovhStructDedicatedMonitoringServiceAdd->getIp(),$_ovhStructDedicatedMonitoringServiceAdd->getPort(),$_ovhStructDedicatedMonitoringServiceAdd->getProtocol(),$_ovhStructDedicatedMonitoringServiceAdd->getPeriod(),$_ovhStructDedicatedMonitoringServiceAdd->getString(),$_ovhStructDedicatedMonitoringServiceAdd->getUrl(),$_ovhStructDedicatedMonitoringServiceAdd->getEmail()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedHardRebootDo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedHardRebootDo::getSession()
	 * @uses OvhStructDedicatedHardRebootDo::getHostname()
	 * @uses OvhStructDedicatedHardRebootDo::getReason()
	 * @uses OvhStructDedicatedHardRebootDo::getEmail()
	 * @uses OvhStructDedicatedHardRebootDo::getEmailLanguage()
	 * @param OvhStructDedicatedHardRebootDo $_ovhStructDedicatedHardRebootDo
	 * @return OvhStructDedicatedHardRebootDoResponse
	 */
	public function dedicatedHardRebootDo(OvhStructDedicatedHardRebootDo $_ovhStructDedicatedHardRebootDo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedHardRebootDo($_ovhStructDedicatedHardRebootDo->getSession(),$_ovhStructDedicatedHardRebootDo->getHostname(),$_ovhStructDedicatedHardRebootDo->getReason(),$_ovhStructDedicatedHardRebootDo->getEmail(),$_ovhStructDedicatedHardRebootDo->getEmailLanguage()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedReverseList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedReverseList::getSession()
	 * @uses OvhStructDedicatedReverseList::getHostname()
	 * @param OvhStructDedicatedReverseList $_ovhStructDedicatedReverseList
	 * @return OvhStructDedicatedReverseListResponse
	 */
	public function dedicatedReverseList(OvhStructDedicatedReverseList $_ovhStructDedicatedReverseList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedReverseList($_ovhStructDedicatedReverseList->getSession(),$_ovhStructDedicatedReverseList->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedBackupFtpAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedBackupFtpAdd::getSession()
	 * @uses OvhStructDedicatedBackupFtpAdd::getHostname()
	 * @param OvhStructDedicatedBackupFtpAdd $_ovhStructDedicatedBackupFtpAdd
	 * @return OvhStructDedicatedBackupFtpAddResponse
	 */
	public function dedicatedBackupFtpAdd(OvhStructDedicatedBackupFtpAdd $_ovhStructDedicatedBackupFtpAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedBackupFtpAdd($_ovhStructDedicatedBackupFtpAdd->getSession(),$_ovhStructDedicatedBackupFtpAdd->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedVirtualMacIpUsedGetList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedVirtualMacIpUsedGetList::getSession()
	 * @uses OvhStructDedicatedVirtualMacIpUsedGetList::getHostname()
	 * @param OvhStructDedicatedVirtualMacIpUsedGetList $_ovhStructDedicatedVirtualMacIpUsedGetList
	 * @return OvhStructDedicatedVirtualMacIpUsedGetListResponse
	 */
	public function dedicatedVirtualMacIpUsedGetList(OvhStructDedicatedVirtualMacIpUsedGetList $_ovhStructDedicatedVirtualMacIpUsedGetList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedVirtualMacIpUsedGetList($_ovhStructDedicatedVirtualMacIpUsedGetList->getSession(),$_ovhStructDedicatedVirtualMacIpUsedGetList->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedNetbootInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedNetbootInfo::getSession()
	 * @uses OvhStructDedicatedNetbootInfo::getHostname()
	 * @param OvhStructDedicatedNetbootInfo $_ovhStructDedicatedNetbootInfo
	 * @return OvhStructDedicatedNetbootInfoResponse
	 */
	public function dedicatedNetbootInfo(OvhStructDedicatedNetbootInfo $_ovhStructDedicatedNetbootInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedNetbootInfo($_ovhStructDedicatedNetbootInfo->getSession(),$_ovhStructDedicatedNetbootInfo->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedIpLoadBalancingAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedIpLoadBalancingAdd::getSession()
	 * @uses OvhStructDedicatedIpLoadBalancingAdd::getName()
	 * @uses OvhStructDedicatedIpLoadBalancingAdd::getIpLoadBalancing()
	 * @uses OvhStructDedicatedIpLoadBalancingAdd::getServerList()
	 * @param OvhStructDedicatedIpLoadBalancingAdd $_ovhStructDedicatedIpLoadBalancingAdd
	 * @return OvhStructDedicatedIpLoadBalancingAddResponse
	 */
	public function dedicatedIpLoadBalancingAdd(OvhStructDedicatedIpLoadBalancingAdd $_ovhStructDedicatedIpLoadBalancingAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedIpLoadBalancingAdd($_ovhStructDedicatedIpLoadBalancingAdd->getSession(),$_ovhStructDedicatedIpLoadBalancingAdd->getName(),$_ovhStructDedicatedIpLoadBalancingAdd->getIpLoadBalancing(),$_ovhStructDedicatedIpLoadBalancingAdd->getServerList()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedAvailableNotificationNicsGet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedAvailableNotificationNicsGet::getSession()
	 * @uses OvhStructDedicatedAvailableNotificationNicsGet::getHostname()
	 * @param OvhStructDedicatedAvailableNotificationNicsGet $_ovhStructDedicatedAvailableNotificationNicsGet
	 * @return OvhStructDedicatedAvailableNotificationNicsGetResponse
	 */
	public function dedicatedAvailableNotificationNicsGet(OvhStructDedicatedAvailableNotificationNicsGet $_ovhStructDedicatedAvailableNotificationNicsGet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedAvailableNotificationNicsGet($_ovhStructDedicatedAvailableNotificationNicsGet->getSession(),$_ovhStructDedicatedAvailableNotificationNicsGet->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedMonitoringServiceDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedMonitoringServiceDel::getSession()
	 * @uses OvhStructDedicatedMonitoringServiceDel::getHostname()
	 * @uses OvhStructDedicatedMonitoringServiceDel::getItemsIdTable()
	 * @param OvhStructDedicatedMonitoringServiceDel $_ovhStructDedicatedMonitoringServiceDel
	 * @return OvhStructDedicatedMonitoringServiceDelResponse
	 */
	public function dedicatedMonitoringServiceDel(OvhStructDedicatedMonitoringServiceDel $_ovhStructDedicatedMonitoringServiceDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedMonitoringServiceDel($_ovhStructDedicatedMonitoringServiceDel->getSession(),$_ovhStructDedicatedMonitoringServiceDel->getHostname(),$_ovhStructDedicatedMonitoringServiceDel->getItemsIdTable()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedIpLoadBalancingServerStateModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedIpLoadBalancingServerStateModify::getSession()
	 * @uses OvhStructDedicatedIpLoadBalancingServerStateModify::getIpLoadBalancing()
	 * @uses OvhStructDedicatedIpLoadBalancingServerStateModify::getHostname()
	 * @uses OvhStructDedicatedIpLoadBalancingServerStateModify::getState()
	 * @param OvhStructDedicatedIpLoadBalancingServerStateModify $_ovhStructDedicatedIpLoadBalancingServerStateModify
	 * @return OvhStructDedicatedIpLoadBalancingServerStateModifyResponse
	 */
	public function dedicatedIpLoadBalancingServerStateModify(OvhStructDedicatedIpLoadBalancingServerStateModify $_ovhStructDedicatedIpLoadBalancingServerStateModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedIpLoadBalancingServerStateModify($_ovhStructDedicatedIpLoadBalancingServerStateModify->getSession(),$_ovhStructDedicatedIpLoadBalancingServerStateModify->getIpLoadBalancing(),$_ovhStructDedicatedIpLoadBalancingServerStateModify->getHostname(),$_ovhStructDedicatedIpLoadBalancingServerStateModify->getState()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedReverseModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedReverseModify::getSession()
	 * @uses OvhStructDedicatedReverseModify::getHostname()
	 * @uses OvhStructDedicatedReverseModify::getIp()
	 * @uses OvhStructDedicatedReverseModify::getReverse()
	 * @param OvhStructDedicatedReverseModify $_ovhStructDedicatedReverseModify
	 * @return OvhStructDedicatedReverseModifyResponse
	 */
	public function dedicatedReverseModify(OvhStructDedicatedReverseModify $_ovhStructDedicatedReverseModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedReverseModify($_ovhStructDedicatedReverseModify->getSession(),$_ovhStructDedicatedReverseModify->getHostname(),$_ovhStructDedicatedReverseModify->getIp(),$_ovhStructDedicatedReverseModify->getReverse()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedFailoverList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedFailoverList::getSession()
	 * @uses OvhStructDedicatedFailoverList::getHostname()
	 * @param OvhStructDedicatedFailoverList $_ovhStructDedicatedFailoverList
	 * @return OvhStructDedicatedFailoverListResponse
	 */
	public function dedicatedFailoverList(OvhStructDedicatedFailoverList $_ovhStructDedicatedFailoverList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedFailoverList($_ovhStructDedicatedFailoverList->getSession(),$_ovhStructDedicatedFailoverList->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedSecondaryDNSInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedSecondaryDNSInfo::getSession()
	 * @uses OvhStructDedicatedSecondaryDNSInfo::getHostname()
	 * @uses OvhStructDedicatedSecondaryDNSInfo::getIp()
	 * @param OvhStructDedicatedSecondaryDNSInfo $_ovhStructDedicatedSecondaryDNSInfo
	 * @return OvhStructDedicatedSecondaryDNSInfoResponse
	 */
	public function dedicatedSecondaryDNSInfo(OvhStructDedicatedSecondaryDNSInfo $_ovhStructDedicatedSecondaryDNSInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedSecondaryDNSInfo($_ovhStructDedicatedSecondaryDNSInfo->getSession(),$_ovhStructDedicatedSecondaryDNSInfo->getHostname(),$_ovhStructDedicatedSecondaryDNSInfo->getIp()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedRipeUpdateInetnum
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedRipeUpdateInetnum::getSession()
	 * @uses OvhStructDedicatedRipeUpdateInetnum::getBlock()
	 * @uses OvhStructDedicatedRipeUpdateInetnum::getNetname()
	 * @uses OvhStructDedicatedRipeUpdateInetnum::getDescr()
	 * @uses OvhStructDedicatedRipeUpdateInetnum::getRipeId()
	 * @param OvhStructDedicatedRipeUpdateInetnum $_ovhStructDedicatedRipeUpdateInetnum
	 * @return OvhStructDedicatedRipeUpdateInetnumResponse
	 */
	public function dedicatedRipeUpdateInetnum(OvhStructDedicatedRipeUpdateInetnum $_ovhStructDedicatedRipeUpdateInetnum)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedRipeUpdateInetnum($_ovhStructDedicatedRipeUpdateInetnum->getSession(),$_ovhStructDedicatedRipeUpdateInetnum->getBlock(),$_ovhStructDedicatedRipeUpdateInetnum->getNetname(),$_ovhStructDedicatedRipeUpdateInetnum->getDescr(),$_ovhStructDedicatedRipeUpdateInetnum->getRipeId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedGetAvailableNetworkFromCountry
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedGetAvailableNetworkFromCountry::getSession()
	 * @uses OvhStructDedicatedGetAvailableNetworkFromCountry::getHostname()
	 * @uses OvhStructDedicatedGetAvailableNetworkFromCountry::getCountry()
	 * @param OvhStructDedicatedGetAvailableNetworkFromCountry $_ovhStructDedicatedGetAvailableNetworkFromCountry
	 * @return OvhStructDedicatedGetAvailableNetworkFromCountryResponse
	 */
	public function dedicatedGetAvailableNetworkFromCountry(OvhStructDedicatedGetAvailableNetworkFromCountry $_ovhStructDedicatedGetAvailableNetworkFromCountry)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedGetAvailableNetworkFromCountry($_ovhStructDedicatedGetAvailableNetworkFromCountry->getSession(),$_ovhStructDedicatedGetAvailableNetworkFromCountry->getHostname(),$_ovhStructDedicatedGetAvailableNetworkFromCountry->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedFailoverAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedFailoverAdd::getSession()
	 * @uses OvhStructDedicatedFailoverAdd::getHostname()
	 * @uses OvhStructDedicatedFailoverAdd::getComment()
	 * @uses OvhStructDedicatedFailoverAdd::getWantedIp()
	 * @uses OvhStructDedicatedFailoverAdd::getRoutedTo()
	 * @uses OvhStructDedicatedFailoverAdd::getCountry()
	 * @param OvhStructDedicatedFailoverAdd $_ovhStructDedicatedFailoverAdd
	 * @return OvhStructDedicatedFailoverAddResponse
	 */
	public function dedicatedFailoverAdd(OvhStructDedicatedFailoverAdd $_ovhStructDedicatedFailoverAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedFailoverAdd($_ovhStructDedicatedFailoverAdd->getSession(),$_ovhStructDedicatedFailoverAdd->getHostname(),$_ovhStructDedicatedFailoverAdd->getComment(),$_ovhStructDedicatedFailoverAdd->getWantedIp(),$_ovhStructDedicatedFailoverAdd->getRoutedTo(),$_ovhStructDedicatedFailoverAdd->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedFilterIrcServerRuleList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedFilterIrcServerRuleList::getSession()
	 * @uses OvhStructDedicatedFilterIrcServerRuleList::getHostname()
	 * @param OvhStructDedicatedFilterIrcServerRuleList $_ovhStructDedicatedFilterIrcServerRuleList
	 * @return OvhStructDedicatedFilterIrcServerRuleListResponse
	 */
	public function dedicatedFilterIrcServerRuleList(OvhStructDedicatedFilterIrcServerRuleList $_ovhStructDedicatedFilterIrcServerRuleList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedFilterIrcServerRuleList($_ovhStructDedicatedFilterIrcServerRuleList->getSession(),$_ovhStructDedicatedFilterIrcServerRuleList->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedRipeCreateOrganisation
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedRipeCreateOrganisation::getSession()
	 * @uses OvhStructDedicatedRipeCreateOrganisation::getName()
	 * @uses OvhStructDedicatedRipeCreateOrganisation::getAddress()
	 * @uses OvhStructDedicatedRipeCreateOrganisation::getEmail()
	 * @uses OvhStructDedicatedRipeCreateOrganisation::getAbuse()
	 * @uses OvhStructDedicatedRipeCreateOrganisation::getDescr()
	 * @uses OvhStructDedicatedRipeCreateOrganisation::getPhone()
	 * @uses OvhStructDedicatedRipeCreateOrganisation::getFax()
	 * @uses OvhStructDedicatedRipeCreateOrganisation::getRemarks()
	 * @param OvhStructDedicatedRipeCreateOrganisation $_ovhStructDedicatedRipeCreateOrganisation
	 * @return OvhStructDedicatedRipeCreateOrganisationResponse
	 */
	public function dedicatedRipeCreateOrganisation(OvhStructDedicatedRipeCreateOrganisation $_ovhStructDedicatedRipeCreateOrganisation)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedRipeCreateOrganisation($_ovhStructDedicatedRipeCreateOrganisation->getSession(),$_ovhStructDedicatedRipeCreateOrganisation->getName(),$_ovhStructDedicatedRipeCreateOrganisation->getAddress(),$_ovhStructDedicatedRipeCreateOrganisation->getEmail(),$_ovhStructDedicatedRipeCreateOrganisation->getAbuse(),$_ovhStructDedicatedRipeCreateOrganisation->getDescr(),$_ovhStructDedicatedRipeCreateOrganisation->getPhone(),$_ovhStructDedicatedRipeCreateOrganisation->getFax(),$_ovhStructDedicatedRipeCreateOrganisation->getRemarks()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedBackupExcludeAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedBackupExcludeAdd::getSession()
	 * @uses OvhStructDedicatedBackupExcludeAdd::getHostname()
	 * @uses OvhStructDedicatedBackupExcludeAdd::getBackupId()
	 * @uses OvhStructDedicatedBackupExcludeAdd::getExclude()
	 * @param OvhStructDedicatedBackupExcludeAdd $_ovhStructDedicatedBackupExcludeAdd
	 * @return OvhStructDedicatedBackupExcludeAddResponse
	 */
	public function dedicatedBackupExcludeAdd(OvhStructDedicatedBackupExcludeAdd $_ovhStructDedicatedBackupExcludeAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedBackupExcludeAdd($_ovhStructDedicatedBackupExcludeAdd->getSession(),$_ovhStructDedicatedBackupExcludeAdd->getHostname(),$_ovhStructDedicatedBackupExcludeAdd->getBackupId(),$_ovhStructDedicatedBackupExcludeAdd->getExclude()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedFilterIrcServerRuleDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedFilterIrcServerRuleDel::getSession()
	 * @uses OvhStructDedicatedFilterIrcServerRuleDel::getHostname()
	 * @uses OvhStructDedicatedFilterIrcServerRuleDel::getToIp()
	 * @param OvhStructDedicatedFilterIrcServerRuleDel $_ovhStructDedicatedFilterIrcServerRuleDel
	 * @return OvhStructDedicatedFilterIrcServerRuleDelResponse
	 */
	public function dedicatedFilterIrcServerRuleDel(OvhStructDedicatedFilterIrcServerRuleDel $_ovhStructDedicatedFilterIrcServerRuleDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedFilterIrcServerRuleDel($_ovhStructDedicatedFilterIrcServerRuleDel->getSession(),$_ovhStructDedicatedFilterIrcServerRuleDel->getHostname(),$_ovhStructDedicatedFilterIrcServerRuleDel->getToIp()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedFailoverRipeModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedFailoverRipeModify::getSession()
	 * @uses OvhStructDedicatedFailoverRipeModify::getHostname()
	 * @uses OvhStructDedicatedFailoverRipeModify::getHostnameNew()
	 * @uses OvhStructDedicatedFailoverRipeModify::getNetworkIp()
	 * @uses OvhStructDedicatedFailoverRipeModify::getSuffix()
	 * @uses OvhStructDedicatedFailoverRipeModify::getIp()
	 * @param OvhStructDedicatedFailoverRipeModify $_ovhStructDedicatedFailoverRipeModify
	 * @return OvhStructDedicatedFailoverRipeModifyResponse
	 */
	public function dedicatedFailoverRipeModify(OvhStructDedicatedFailoverRipeModify $_ovhStructDedicatedFailoverRipeModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedFailoverRipeModify($_ovhStructDedicatedFailoverRipeModify->getSession(),$_ovhStructDedicatedFailoverRipeModify->getHostname(),$_ovhStructDedicatedFailoverRipeModify->getHostnameNew(),$_ovhStructDedicatedFailoverRipeModify->getNetworkIp(),$_ovhStructDedicatedFailoverRipeModify->getSuffix(),$_ovhStructDedicatedFailoverRipeModify->getIp()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedMonitoringList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedMonitoringList::getSession()
	 * @uses OvhStructDedicatedMonitoringList::getHostname()
	 * @param OvhStructDedicatedMonitoringList $_ovhStructDedicatedMonitoringList
	 * @return OvhStructDedicatedMonitoringListResponse
	 */
	public function dedicatedMonitoringList(OvhStructDedicatedMonitoringList $_ovhStructDedicatedMonitoringList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedMonitoringList($_ovhStructDedicatedMonitoringList->getSession(),$_ovhStructDedicatedMonitoringList->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedBackupExcludeDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedBackupExcludeDel::getSession()
	 * @uses OvhStructDedicatedBackupExcludeDel::getHostname()
	 * @uses OvhStructDedicatedBackupExcludeDel::getBackupId()
	 * @uses OvhStructDedicatedBackupExcludeDel::getExclude()
	 * @param OvhStructDedicatedBackupExcludeDel $_ovhStructDedicatedBackupExcludeDel
	 * @return OvhStructDedicatedBackupExcludeDelResponse
	 */
	public function dedicatedBackupExcludeDel(OvhStructDedicatedBackupExcludeDel $_ovhStructDedicatedBackupExcludeDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedBackupExcludeDel($_ovhStructDedicatedBackupExcludeDel->getSession(),$_ovhStructDedicatedBackupExcludeDel->getHostname(),$_ovhStructDedicatedBackupExcludeDel->getBackupId(),$_ovhStructDedicatedBackupExcludeDel->getExclude()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedHardRebootStatus
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedHardRebootStatus::getSession()
	 * @uses OvhStructDedicatedHardRebootStatus::getHostname()
	 * @param OvhStructDedicatedHardRebootStatus $_ovhStructDedicatedHardRebootStatus
	 * @return OvhStructDedicatedHardRebootStatusResponse
	 */
	public function dedicatedHardRebootStatus(OvhStructDedicatedHardRebootStatus $_ovhStructDedicatedHardRebootStatus)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedHardRebootStatus($_ovhStructDedicatedHardRebootStatus->getSession(),$_ovhStructDedicatedHardRebootStatus->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedGetServiceMonitoringItem
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedGetServiceMonitoringItem::getSession()
	 * @uses OvhStructDedicatedGetServiceMonitoringItem::getIp()
	 * @uses OvhStructDedicatedGetServiceMonitoringItem::getItemId()
	 * @param OvhStructDedicatedGetServiceMonitoringItem $_ovhStructDedicatedGetServiceMonitoringItem
	 * @return OvhStructDedicatedGetServiceMonitoringItemResponse
	 */
	public function dedicatedGetServiceMonitoringItem(OvhStructDedicatedGetServiceMonitoringItem $_ovhStructDedicatedGetServiceMonitoringItem)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedGetServiceMonitoringItem($_ovhStructDedicatedGetServiceMonitoringItem->getSession(),$_ovhStructDedicatedGetServiceMonitoringItem->getIp(),$_ovhStructDedicatedGetServiceMonitoringItem->getItemId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedReverseAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedReverseAdd::getSession()
	 * @uses OvhStructDedicatedReverseAdd::getHostname()
	 * @uses OvhStructDedicatedReverseAdd::getIp()
	 * @uses OvhStructDedicatedReverseAdd::getReverse()
	 * @param OvhStructDedicatedReverseAdd $_ovhStructDedicatedReverseAdd
	 * @return OvhStructDedicatedReverseAddResponse
	 */
	public function dedicatedReverseAdd(OvhStructDedicatedReverseAdd $_ovhStructDedicatedReverseAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedReverseAdd($_ovhStructDedicatedReverseAdd->getSession(),$_ovhStructDedicatedReverseAdd->getHostname(),$_ovhStructDedicatedReverseAdd->getIp(),$_ovhStructDedicatedReverseAdd->getReverse()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedBackupGetFreePlanning
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedBackupGetFreePlanning::getSession()
	 * @uses OvhStructDedicatedBackupGetFreePlanning::getHostname()
	 * @uses OvhStructDedicatedBackupGetFreePlanning::getBackupId()
	 * @param OvhStructDedicatedBackupGetFreePlanning $_ovhStructDedicatedBackupGetFreePlanning
	 * @return OvhStructDedicatedBackupGetFreePlanningResponse
	 */
	public function dedicatedBackupGetFreePlanning(OvhStructDedicatedBackupGetFreePlanning $_ovhStructDedicatedBackupGetFreePlanning)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedBackupGetFreePlanning($_ovhStructDedicatedBackupGetFreePlanning->getSession(),$_ovhStructDedicatedBackupGetFreePlanning->getHostname(),$_ovhStructDedicatedBackupGetFreePlanning->getBackupId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedInstallAllowedDistributionGet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedInstallAllowedDistributionGet::getSession()
	 * @uses OvhStructDedicatedInstallAllowedDistributionGet::getHostname()
	 * @param OvhStructDedicatedInstallAllowedDistributionGet $_ovhStructDedicatedInstallAllowedDistributionGet
	 * @return OvhStructDedicatedInstallAllowedDistributionGetResponse
	 */
	public function dedicatedInstallAllowedDistributionGet(OvhStructDedicatedInstallAllowedDistributionGet $_ovhStructDedicatedInstallAllowedDistributionGet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedInstallAllowedDistributionGet($_ovhStructDedicatedInstallAllowedDistributionGet->getSession(),$_ovhStructDedicatedInstallAllowedDistributionGet->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedCapabilitiesGet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedCapabilitiesGet::getSession()
	 * @uses OvhStructDedicatedCapabilitiesGet::getHostname()
	 * @param OvhStructDedicatedCapabilitiesGet $_ovhStructDedicatedCapabilitiesGet
	 * @return OvhStructDedicatedCapabilitiesGetResponse
	 */
	public function dedicatedCapabilitiesGet(OvhStructDedicatedCapabilitiesGet $_ovhStructDedicatedCapabilitiesGet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedCapabilitiesGet($_ovhStructDedicatedCapabilitiesGet->getSession(),$_ovhStructDedicatedCapabilitiesGet->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedMonitoringSMSDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedMonitoringSMSDel::getSession()
	 * @uses OvhStructDedicatedMonitoringSMSDel::getHostname()
	 * @uses OvhStructDedicatedMonitoringSMSDel::getId()
	 * @param OvhStructDedicatedMonitoringSMSDel $_ovhStructDedicatedMonitoringSMSDel
	 * @return OvhStructDedicatedMonitoringSMSDelResponse
	 */
	public function dedicatedMonitoringSMSDel(OvhStructDedicatedMonitoringSMSDel $_ovhStructDedicatedMonitoringSMSDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedMonitoringSMSDel($_ovhStructDedicatedMonitoringSMSDel->getSession(),$_ovhStructDedicatedMonitoringSMSDel->getHostname(),$_ovhStructDedicatedMonitoringSMSDel->getId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedMonitoringAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedMonitoringAdd::getSession()
	 * @uses OvhStructDedicatedMonitoringAdd::getHostname()
	 * @uses OvhStructDedicatedMonitoringAdd::getEmail()
	 * @uses OvhStructDedicatedMonitoringAdd::getLanguage()
	 * @uses OvhStructDedicatedMonitoringAdd::getStatus()
	 * @param OvhStructDedicatedMonitoringAdd $_ovhStructDedicatedMonitoringAdd
	 * @return OvhStructDedicatedMonitoringAddResponse
	 */
	public function dedicatedMonitoringAdd(OvhStructDedicatedMonitoringAdd $_ovhStructDedicatedMonitoringAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedMonitoringAdd($_ovhStructDedicatedMonitoringAdd->getSession(),$_ovhStructDedicatedMonitoringAdd->getHostname(),$_ovhStructDedicatedMonitoringAdd->getEmail(),$_ovhStructDedicatedMonitoringAdd->getLanguage(),$_ovhStructDedicatedMonitoringAdd->getStatus()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedOperationList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedOperationList::getSession()
	 * @uses OvhStructDedicatedOperationList::getHostname()
	 * @param OvhStructDedicatedOperationList $_ovhStructDedicatedOperationList
	 * @return OvhStructDedicatedOperationListResponse
	 */
	public function dedicatedOperationList(OvhStructDedicatedOperationList $_ovhStructDedicatedOperationList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedOperationList($_ovhStructDedicatedOperationList->getSession(),$_ovhStructDedicatedOperationList->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedBackupIncludeDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedBackupIncludeDel::getSession()
	 * @uses OvhStructDedicatedBackupIncludeDel::getHostname()
	 * @uses OvhStructDedicatedBackupIncludeDel::getBackupId()
	 * @uses OvhStructDedicatedBackupIncludeDel::getInclude()
	 * @param OvhStructDedicatedBackupIncludeDel $_ovhStructDedicatedBackupIncludeDel
	 * @return OvhStructDedicatedBackupIncludeDelResponse
	 */
	public function dedicatedBackupIncludeDel(OvhStructDedicatedBackupIncludeDel $_ovhStructDedicatedBackupIncludeDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedBackupIncludeDel($_ovhStructDedicatedBackupIncludeDel->getSession(),$_ovhStructDedicatedBackupIncludeDel->getHostname(),$_ovhStructDedicatedBackupIncludeDel->getBackupId(),$_ovhStructDedicatedBackupIncludeDel->getInclude()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedBandwidthSwitching
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedBandwidthSwitching::getSession()
	 * @uses OvhStructDedicatedBandwidthSwitching::getHostname()
	 * @uses OvhStructDedicatedBandwidthSwitching::getOldBandwidth()
	 * @uses OvhStructDedicatedBandwidthSwitching::getNewBandwidth()
	 * @param OvhStructDedicatedBandwidthSwitching $_ovhStructDedicatedBandwidthSwitching
	 * @return OvhStructDedicatedBandwidthSwitchingResponse
	 */
	public function dedicatedBandwidthSwitching(OvhStructDedicatedBandwidthSwitching $_ovhStructDedicatedBandwidthSwitching)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedBandwidthSwitching($_ovhStructDedicatedBandwidthSwitching->getSession(),$_ovhStructDedicatedBandwidthSwitching->getHostname(),$_ovhStructDedicatedBandwidthSwitching->getOldBandwidth(),$_ovhStructDedicatedBandwidthSwitching->getNewBandwidth()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedIpLoadBalancingDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedIpLoadBalancingDel::getSession()
	 * @uses OvhStructDedicatedIpLoadBalancingDel::getIpLoadBalancing()
	 * @param OvhStructDedicatedIpLoadBalancingDel $_ovhStructDedicatedIpLoadBalancingDel
	 * @return OvhStructDedicatedIpLoadBalancingDelResponse
	 */
	public function dedicatedIpLoadBalancingDel(OvhStructDedicatedIpLoadBalancingDel $_ovhStructDedicatedIpLoadBalancingDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedIpLoadBalancingDel($_ovhStructDedicatedIpLoadBalancingDel->getSession(),$_ovhStructDedicatedIpLoadBalancingDel->getIpLoadBalancing()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedInstallationTemplateUse
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedInstallationTemplateUse::getSession()
	 * @uses OvhStructDedicatedInstallationTemplateUse::getHostname()
	 * @uses OvhStructDedicatedInstallationTemplateUse::getTemplate()
	 * @param OvhStructDedicatedInstallationTemplateUse $_ovhStructDedicatedInstallationTemplateUse
	 * @return OvhStructDedicatedInstallationTemplateUseResponse
	 */
	public function dedicatedInstallationTemplateUse(OvhStructDedicatedInstallationTemplateUse $_ovhStructDedicatedInstallationTemplateUse)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedInstallationTemplateUse($_ovhStructDedicatedInstallationTemplateUse->getSession(),$_ovhStructDedicatedInstallationTemplateUse->getHostname(),$_ovhStructDedicatedInstallationTemplateUse->getTemplate()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedIpLoadBalancingServerAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedIpLoadBalancingServerAdd::getSession()
	 * @uses OvhStructDedicatedIpLoadBalancingServerAdd::getIpLoadBalancing()
	 * @uses OvhStructDedicatedIpLoadBalancingServerAdd::getHostname()
	 * @param OvhStructDedicatedIpLoadBalancingServerAdd $_ovhStructDedicatedIpLoadBalancingServerAdd
	 * @return OvhStructDedicatedIpLoadBalancingServerAddResponse
	 */
	public function dedicatedIpLoadBalancingServerAdd(OvhStructDedicatedIpLoadBalancingServerAdd $_ovhStructDedicatedIpLoadBalancingServerAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedIpLoadBalancingServerAdd($_ovhStructDedicatedIpLoadBalancingServerAdd->getSession(),$_ovhStructDedicatedIpLoadBalancingServerAdd->getIpLoadBalancing(),$_ovhStructDedicatedIpLoadBalancingServerAdd->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedRipeUpdateOrganisation
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedRipeUpdateOrganisation::getSession()
	 * @uses OvhStructDedicatedRipeUpdateOrganisation::getRipeId()
	 * @uses OvhStructDedicatedRipeUpdateOrganisation::getName()
	 * @uses OvhStructDedicatedRipeUpdateOrganisation::getAddress()
	 * @uses OvhStructDedicatedRipeUpdateOrganisation::getEmail()
	 * @uses OvhStructDedicatedRipeUpdateOrganisation::getAbuse()
	 * @uses OvhStructDedicatedRipeUpdateOrganisation::getDescr()
	 * @uses OvhStructDedicatedRipeUpdateOrganisation::getPhone()
	 * @uses OvhStructDedicatedRipeUpdateOrganisation::getFax()
	 * @uses OvhStructDedicatedRipeUpdateOrganisation::getRemarks()
	 * @param OvhStructDedicatedRipeUpdateOrganisation $_ovhStructDedicatedRipeUpdateOrganisation
	 * @return OvhStructDedicatedRipeUpdateOrganisationResponse
	 */
	public function dedicatedRipeUpdateOrganisation(OvhStructDedicatedRipeUpdateOrganisation $_ovhStructDedicatedRipeUpdateOrganisation)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedRipeUpdateOrganisation($_ovhStructDedicatedRipeUpdateOrganisation->getSession(),$_ovhStructDedicatedRipeUpdateOrganisation->getRipeId(),$_ovhStructDedicatedRipeUpdateOrganisation->getName(),$_ovhStructDedicatedRipeUpdateOrganisation->getAddress(),$_ovhStructDedicatedRipeUpdateOrganisation->getEmail(),$_ovhStructDedicatedRipeUpdateOrganisation->getAbuse(),$_ovhStructDedicatedRipeUpdateOrganisation->getDescr(),$_ovhStructDedicatedRipeUpdateOrganisation->getPhone(),$_ovhStructDedicatedRipeUpdateOrganisation->getFax(),$_ovhStructDedicatedRipeUpdateOrganisation->getRemarks()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedNetbootModifyById
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedNetbootModifyById::getSession()
	 * @uses OvhStructDedicatedNetbootModifyById::getHostname()
	 * @uses OvhStructDedicatedNetbootModifyById::getId()
	 * @uses OvhStructDedicatedNetbootModifyById::getRoot()
	 * @uses OvhStructDedicatedNetbootModifyById::getRescueEmail()
	 * @param OvhStructDedicatedNetbootModifyById $_ovhStructDedicatedNetbootModifyById
	 * @return OvhStructDedicatedNetbootModifyByIdResponse
	 */
	public function dedicatedNetbootModifyById(OvhStructDedicatedNetbootModifyById $_ovhStructDedicatedNetbootModifyById)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedNetbootModifyById($_ovhStructDedicatedNetbootModifyById->getSession(),$_ovhStructDedicatedNetbootModifyById->getHostname(),$_ovhStructDedicatedNetbootModifyById->getId(),$_ovhStructDedicatedNetbootModifyById->getRoot(),$_ovhStructDedicatedNetbootModifyById->getRescueEmail()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedBackupGetDate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedBackupGetDate::getSession()
	 * @uses OvhStructDedicatedBackupGetDate::getHostname()
	 * @uses OvhStructDedicatedBackupGetDate::getBackupId()
	 * @param OvhStructDedicatedBackupGetDate $_ovhStructDedicatedBackupGetDate
	 * @return OvhStructDedicatedBackupGetDateResponse
	 */
	public function dedicatedBackupGetDate(OvhStructDedicatedBackupGetDate $_ovhStructDedicatedBackupGetDate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedBackupGetDate($_ovhStructDedicatedBackupGetDate->getSession(),$_ovhStructDedicatedBackupGetDate->getHostname(),$_ovhStructDedicatedBackupGetDate->getBackupId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedSecondaryDNSDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedSecondaryDNSDel::getSession()
	 * @uses OvhStructDedicatedSecondaryDNSDel::getHostname()
	 * @uses OvhStructDedicatedSecondaryDNSDel::getIp()
	 * @uses OvhStructDedicatedSecondaryDNSDel::getDomain()
	 * @uses OvhStructDedicatedSecondaryDNSDel::getNameserver()
	 * @param OvhStructDedicatedSecondaryDNSDel $_ovhStructDedicatedSecondaryDNSDel
	 * @return OvhStructDedicatedSecondaryDNSDelResponse
	 */
	public function dedicatedSecondaryDNSDel(OvhStructDedicatedSecondaryDNSDel $_ovhStructDedicatedSecondaryDNSDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedSecondaryDNSDel($_ovhStructDedicatedSecondaryDNSDel->getSession(),$_ovhStructDedicatedSecondaryDNSDel->getHostname(),$_ovhStructDedicatedSecondaryDNSDel->getIp(),$_ovhStructDedicatedSecondaryDNSDel->getDomain(),$_ovhStructDedicatedSecondaryDNSDel->getNameserver()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedSecondaryDNSGetAll
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedSecondaryDNSGetAll::getSession()
	 * @uses OvhStructDedicatedSecondaryDNSGetAll::getHostname()
	 * @param OvhStructDedicatedSecondaryDNSGetAll $_ovhStructDedicatedSecondaryDNSGetAll
	 * @return OvhStructDedicatedSecondaryDNSGetAllResponse
	 */
	public function dedicatedSecondaryDNSGetAll(OvhStructDedicatedSecondaryDNSGetAll $_ovhStructDedicatedSecondaryDNSGetAll)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedSecondaryDNSGetAll($_ovhStructDedicatedSecondaryDNSGetAll->getSession(),$_ovhStructDedicatedSecondaryDNSGetAll->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedMonitoringNotificationDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedMonitoringNotificationDel::getSession()
	 * @uses OvhStructDedicatedMonitoringNotificationDel::getHostname()
	 * @uses OvhStructDedicatedMonitoringNotificationDel::getId()
	 * @param OvhStructDedicatedMonitoringNotificationDel $_ovhStructDedicatedMonitoringNotificationDel
	 * @return OvhStructDedicatedMonitoringNotificationDelResponse
	 */
	public function dedicatedMonitoringNotificationDel(OvhStructDedicatedMonitoringNotificationDel $_ovhStructDedicatedMonitoringNotificationDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedMonitoringNotificationDel($_ovhStructDedicatedMonitoringNotificationDel->getSession(),$_ovhStructDedicatedMonitoringNotificationDel->getHostname(),$_ovhStructDedicatedMonitoringNotificationDel->getId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedBandwidthManagementGet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedBandwidthManagementGet::getSession()
	 * @uses OvhStructDedicatedBandwidthManagementGet::getHostname()
	 * @param OvhStructDedicatedBandwidthManagementGet $_ovhStructDedicatedBandwidthManagementGet
	 * @return OvhStructDedicatedBandwidthManagementGetResponse
	 */
	public function dedicatedBandwidthManagementGet(OvhStructDedicatedBandwidthManagementGet $_ovhStructDedicatedBandwidthManagementGet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedBandwidthManagementGet($_ovhStructDedicatedBandwidthManagementGet->getSession(),$_ovhStructDedicatedBandwidthManagementGet->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedMonitoringStatusUpdate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedMonitoringStatusUpdate::getSession()
	 * @uses OvhStructDedicatedMonitoringStatusUpdate::getHostname()
	 * @uses OvhStructDedicatedMonitoringStatusUpdate::getDisabled()
	 * @param OvhStructDedicatedMonitoringStatusUpdate $_ovhStructDedicatedMonitoringStatusUpdate
	 * @return OvhStructDedicatedMonitoringStatusUpdateResponse
	 */
	public function dedicatedMonitoringStatusUpdate(OvhStructDedicatedMonitoringStatusUpdate $_ovhStructDedicatedMonitoringStatusUpdate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedMonitoringStatusUpdate($_ovhStructDedicatedMonitoringStatusUpdate->getSession(),$_ovhStructDedicatedMonitoringStatusUpdate->getHostname(),$_ovhStructDedicatedMonitoringStatusUpdate->getDisabled()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedIPForUDPMoveGetStatus
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedIPForUDPMoveGetStatus::getSession()
	 * @uses OvhStructDedicatedIPForUDPMoveGetStatus::getHostname()
	 * @uses OvhStructDedicatedIPForUDPMoveGetStatus::getIp()
	 * @param OvhStructDedicatedIPForUDPMoveGetStatus $_ovhStructDedicatedIPForUDPMoveGetStatus
	 * @return OvhStructDedicatedIPForUDPMoveGetStatusResponse
	 */
	public function dedicatedIPForUDPMoveGetStatus(OvhStructDedicatedIPForUDPMoveGetStatus $_ovhStructDedicatedIPForUDPMoveGetStatus)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedIPForUDPMoveGetStatus($_ovhStructDedicatedIPForUDPMoveGetStatus->getSession(),$_ovhStructDedicatedIPForUDPMoveGetStatus->getHostname(),$_ovhStructDedicatedIPForUDPMoveGetStatus->getIp()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedRipeDeleteOrganisation
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedRipeDeleteOrganisation::getSession()
	 * @uses OvhStructDedicatedRipeDeleteOrganisation::getRipeId()
	 * @uses OvhStructDedicatedRipeDeleteOrganisation::getComment()
	 * @param OvhStructDedicatedRipeDeleteOrganisation $_ovhStructDedicatedRipeDeleteOrganisation
	 * @return OvhStructDedicatedRipeDeleteOrganisationResponse
	 */
	public function dedicatedRipeDeleteOrganisation(OvhStructDedicatedRipeDeleteOrganisation $_ovhStructDedicatedRipeDeleteOrganisation)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedRipeDeleteOrganisation($_ovhStructDedicatedRipeDeleteOrganisation->getSession(),$_ovhStructDedicatedRipeDeleteOrganisation->getRipeId(),$_ovhStructDedicatedRipeDeleteOrganisation->getComment()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedFailoverRipeGetIp
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedFailoverRipeGetIp::getSession()
	 * @uses OvhStructDedicatedFailoverRipeGetIp::getHostname()
	 * @param OvhStructDedicatedFailoverRipeGetIp $_ovhStructDedicatedFailoverRipeGetIp
	 * @return OvhStructDedicatedFailoverRipeGetIpResponse
	 */
	public function dedicatedFailoverRipeGetIp(OvhStructDedicatedFailoverRipeGetIp $_ovhStructDedicatedFailoverRipeGetIp)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedFailoverRipeGetIp($_ovhStructDedicatedFailoverRipeGetIp->getSession(),$_ovhStructDedicatedFailoverRipeGetIp->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedInstallBasic
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedInstallBasic::getSession()
	 * @uses OvhStructDedicatedInstallBasic::getHostname()
	 * @uses OvhStructDedicatedInstallBasic::getStatus()
	 * @uses OvhStructDedicatedInstallBasic::getLanguage()
	 * @uses OvhStructDedicatedInstallBasic::getBitFormat()
	 * @uses OvhStructDedicatedInstallBasic::getOs()
	 * @uses OvhStructDedicatedInstallBasic::getSql()
	 * @uses OvhStructDedicatedInstallBasic::getCustomerScriptLink()
	 * @uses OvhStructDedicatedInstallBasic::getCustomerScriptReturn()
	 * @param OvhStructDedicatedInstallBasic $_ovhStructDedicatedInstallBasic
	 * @return OvhStructDedicatedInstallBasicResponse
	 */
	public function dedicatedInstallBasic(OvhStructDedicatedInstallBasic $_ovhStructDedicatedInstallBasic)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedInstallBasic($_ovhStructDedicatedInstallBasic->getSession(),$_ovhStructDedicatedInstallBasic->getHostname(),$_ovhStructDedicatedInstallBasic->getStatus(),$_ovhStructDedicatedInstallBasic->getLanguage(),$_ovhStructDedicatedInstallBasic->getBitFormat(),$_ovhStructDedicatedInstallBasic->getOs(),$_ovhStructDedicatedInstallBasic->getSql(),$_ovhStructDedicatedInstallBasic->getCustomerScriptLink(),$_ovhStructDedicatedInstallBasic->getCustomerScriptReturn()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedInstallReset
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedInstallReset::getSession()
	 * @uses OvhStructDedicatedInstallReset::getHostname()
	 * @param OvhStructDedicatedInstallReset $_ovhStructDedicatedInstallReset
	 * @return OvhStructDedicatedInstallResetResponse
	 */
	public function dedicatedInstallReset(OvhStructDedicatedInstallReset $_ovhStructDedicatedInstallReset)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedInstallReset($_ovhStructDedicatedInstallReset->getSession(),$_ovhStructDedicatedInstallReset->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedMonitoringServiceAddNotification
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedMonitoringServiceAddNotification::getSession()
	 * @uses OvhStructDedicatedMonitoringServiceAddNotification::getHostname()
	 * @uses OvhStructDedicatedMonitoringServiceAddNotification::getIp()
	 * @uses OvhStructDedicatedMonitoringServiceAddNotification::getPort()
	 * @uses OvhStructDedicatedMonitoringServiceAddNotification::getProtocol()
	 * @uses OvhStructDedicatedMonitoringServiceAddNotification::getPeriod()
	 * @uses OvhStructDedicatedMonitoringServiceAddNotification::getString()
	 * @uses OvhStructDedicatedMonitoringServiceAddNotification::getUrl()
	 * @uses OvhStructDedicatedMonitoringServiceAddNotification::getNicAlert()
	 * @param OvhStructDedicatedMonitoringServiceAddNotification $_ovhStructDedicatedMonitoringServiceAddNotification
	 * @return OvhStructDedicatedMonitoringServiceAddNotificationResponse
	 */
	public function dedicatedMonitoringServiceAddNotification(OvhStructDedicatedMonitoringServiceAddNotification $_ovhStructDedicatedMonitoringServiceAddNotification)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedMonitoringServiceAddNotification($_ovhStructDedicatedMonitoringServiceAddNotification->getSession(),$_ovhStructDedicatedMonitoringServiceAddNotification->getHostname(),$_ovhStructDedicatedMonitoringServiceAddNotification->getIp(),$_ovhStructDedicatedMonitoringServiceAddNotification->getPort(),$_ovhStructDedicatedMonitoringServiceAddNotification->getProtocol(),$_ovhStructDedicatedMonitoringServiceAddNotification->getPeriod(),$_ovhStructDedicatedMonitoringServiceAddNotification->getString(),$_ovhStructDedicatedMonitoringServiceAddNotification->getUrl(),$_ovhStructDedicatedMonitoringServiceAddNotification->getNicAlert()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedFilterIrcClientRuleDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedFilterIrcClientRuleDel::getSession()
	 * @uses OvhStructDedicatedFilterIrcClientRuleDel::getHostname()
	 * @uses OvhStructDedicatedFilterIrcClientRuleDel::getFromIp()
	 * @uses OvhStructDedicatedFilterIrcClientRuleDel::getToIp()
	 * @param OvhStructDedicatedFilterIrcClientRuleDel $_ovhStructDedicatedFilterIrcClientRuleDel
	 * @return OvhStructDedicatedFilterIrcClientRuleDelResponse
	 */
	public function dedicatedFilterIrcClientRuleDel(OvhStructDedicatedFilterIrcClientRuleDel $_ovhStructDedicatedFilterIrcClientRuleDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedFilterIrcClientRuleDel($_ovhStructDedicatedFilterIrcClientRuleDel->getSession(),$_ovhStructDedicatedFilterIrcClientRuleDel->getHostname(),$_ovhStructDedicatedFilterIrcClientRuleDel->getFromIp(),$_ovhStructDedicatedFilterIrcClientRuleDel->getToIp()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedMrtgInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedMrtgInfo::getSession()
	 * @uses OvhStructDedicatedMrtgInfo::getHostname()
	 * @uses OvhStructDedicatedMrtgInfo::getType()
	 * @uses OvhStructDedicatedMrtgInfo::getDuration()
	 * @uses OvhStructDedicatedMrtgInfo::getIp()
	 * @param OvhStructDedicatedMrtgInfo $_ovhStructDedicatedMrtgInfo
	 * @return OvhStructDedicatedMrtgInfoResponse
	 */
	public function dedicatedMrtgInfo(OvhStructDedicatedMrtgInfo $_ovhStructDedicatedMrtgInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedMrtgInfo($_ovhStructDedicatedMrtgInfo->getSession(),$_ovhStructDedicatedMrtgInfo->getHostname(),$_ovhStructDedicatedMrtgInfo->getType(),$_ovhStructDedicatedMrtgInfo->getDuration(),$_ovhStructDedicatedMrtgInfo->getIp()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedBackupReinstallData
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedBackupReinstallData::getSession()
	 * @uses OvhStructDedicatedBackupReinstallData::getHostname()
	 * @uses OvhStructDedicatedBackupReinstallData::getBackupId()
	 * @param OvhStructDedicatedBackupReinstallData $_ovhStructDedicatedBackupReinstallData
	 * @return OvhStructDedicatedBackupReinstallDataResponse
	 */
	public function dedicatedBackupReinstallData(OvhStructDedicatedBackupReinstallData $_ovhStructDedicatedBackupReinstallData)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedBackupReinstallData($_ovhStructDedicatedBackupReinstallData->getSession(),$_ovhStructDedicatedBackupReinstallData->getHostname(),$_ovhStructDedicatedBackupReinstallData->getBackupId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedBackupFtpInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedBackupFtpInfo::getSession()
	 * @uses OvhStructDedicatedBackupFtpInfo::getHostname()
	 * @param OvhStructDedicatedBackupFtpInfo $_ovhStructDedicatedBackupFtpInfo
	 * @return OvhStructDedicatedBackupFtpInfoResponse
	 */
	public function dedicatedBackupFtpInfo(OvhStructDedicatedBackupFtpInfo $_ovhStructDedicatedBackupFtpInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedBackupFtpInfo($_ovhStructDedicatedBackupFtpInfo->getSession(),$_ovhStructDedicatedBackupFtpInfo->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedMonitoringModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedMonitoringModify::getSession()
	 * @uses OvhStructDedicatedMonitoringModify::getHostname()
	 * @uses OvhStructDedicatedMonitoringModify::getId()
	 * @uses OvhStructDedicatedMonitoringModify::getEmail()
	 * @uses OvhStructDedicatedMonitoringModify::getLanguage()
	 * @uses OvhStructDedicatedMonitoringModify::getStatus()
	 * @param OvhStructDedicatedMonitoringModify $_ovhStructDedicatedMonitoringModify
	 * @return OvhStructDedicatedMonitoringModifyResponse
	 */
	public function dedicatedMonitoringModify(OvhStructDedicatedMonitoringModify $_ovhStructDedicatedMonitoringModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedMonitoringModify($_ovhStructDedicatedMonitoringModify->getSession(),$_ovhStructDedicatedMonitoringModify->getHostname(),$_ovhStructDedicatedMonitoringModify->getId(),$_ovhStructDedicatedMonitoringModify->getEmail(),$_ovhStructDedicatedMonitoringModify->getLanguage(),$_ovhStructDedicatedMonitoringModify->getStatus()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedGetRandomAvailableIpFromCountry
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedGetRandomAvailableIpFromCountry::getSession()
	 * @uses OvhStructDedicatedGetRandomAvailableIpFromCountry::getHostname()
	 * @uses OvhStructDedicatedGetRandomAvailableIpFromCountry::getCountry()
	 * @param OvhStructDedicatedGetRandomAvailableIpFromCountry $_ovhStructDedicatedGetRandomAvailableIpFromCountry
	 * @return OvhStructDedicatedGetRandomAvailableIpFromCountryResponse
	 */
	public function dedicatedGetRandomAvailableIpFromCountry(OvhStructDedicatedGetRandomAvailableIpFromCountry $_ovhStructDedicatedGetRandomAvailableIpFromCountry)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedGetRandomAvailableIpFromCountry($_ovhStructDedicatedGetRandomAvailableIpFromCountry->getSession(),$_ovhStructDedicatedGetRandomAvailableIpFromCountry->getHostname(),$_ovhStructDedicatedGetRandomAvailableIpFromCountry->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedInstallBasicProgress
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedInstallBasicProgress::getSession()
	 * @uses OvhStructDedicatedInstallBasicProgress::getHostname()
	 * @param OvhStructDedicatedInstallBasicProgress $_ovhStructDedicatedInstallBasicProgress
	 * @return OvhStructDedicatedInstallBasicProgressResponse
	 */
	public function dedicatedInstallBasicProgress(OvhStructDedicatedInstallBasicProgress $_ovhStructDedicatedInstallBasicProgress)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedInstallBasicProgress($_ovhStructDedicatedInstallBasicProgress->getSession(),$_ovhStructDedicatedInstallBasicProgress->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedAddServiceMonitoringAlertEmail
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedAddServiceMonitoringAlertEmail::getSession()
	 * @uses OvhStructDedicatedAddServiceMonitoringAlertEmail::getIp()
	 * @uses OvhStructDedicatedAddServiceMonitoringAlertEmail::getPort()
	 * @uses OvhStructDedicatedAddServiceMonitoringAlertEmail::getItemId()
	 * @uses OvhStructDedicatedAddServiceMonitoringAlertEmail::getEmail()
	 * @param OvhStructDedicatedAddServiceMonitoringAlertEmail $_ovhStructDedicatedAddServiceMonitoringAlertEmail
	 * @return OvhStructDedicatedAddServiceMonitoringAlertEmailResponse
	 */
	public function dedicatedAddServiceMonitoringAlertEmail(OvhStructDedicatedAddServiceMonitoringAlertEmail $_ovhStructDedicatedAddServiceMonitoringAlertEmail)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedAddServiceMonitoringAlertEmail($_ovhStructDedicatedAddServiceMonitoringAlertEmail->getSession(),$_ovhStructDedicatedAddServiceMonitoringAlertEmail->getIp(),$_ovhStructDedicatedAddServiceMonitoringAlertEmail->getPort(),$_ovhStructDedicatedAddServiceMonitoringAlertEmail->getItemId(),$_ovhStructDedicatedAddServiceMonitoringAlertEmail->getEmail()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedFailoverUpdate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedFailoverUpdate::getSession()
	 * @uses OvhStructDedicatedFailoverUpdate::getHostname()
	 * @uses OvhStructDedicatedFailoverUpdate::getIp()
	 * @uses OvhStructDedicatedFailoverUpdate::getRoutedTo()
	 * @param OvhStructDedicatedFailoverUpdate $_ovhStructDedicatedFailoverUpdate
	 * @return OvhStructDedicatedFailoverUpdateResponse
	 */
	public function dedicatedFailoverUpdate(OvhStructDedicatedFailoverUpdate $_ovhStructDedicatedFailoverUpdate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedFailoverUpdate($_ovhStructDedicatedFailoverUpdate->getSession(),$_ovhStructDedicatedFailoverUpdate->getHostname(),$_ovhStructDedicatedFailoverUpdate->getIp(),$_ovhStructDedicatedFailoverUpdate->getRoutedTo()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedFilterIrcServerRuleAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedFilterIrcServerRuleAdd::getSession()
	 * @uses OvhStructDedicatedFilterIrcServerRuleAdd::getHostname()
	 * @uses OvhStructDedicatedFilterIrcServerRuleAdd::getToIp()
	 * @param OvhStructDedicatedFilterIrcServerRuleAdd $_ovhStructDedicatedFilterIrcServerRuleAdd
	 * @return OvhStructDedicatedFilterIrcServerRuleAddResponse
	 */
	public function dedicatedFilterIrcServerRuleAdd(OvhStructDedicatedFilterIrcServerRuleAdd $_ovhStructDedicatedFilterIrcServerRuleAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedFilterIrcServerRuleAdd($_ovhStructDedicatedFilterIrcServerRuleAdd->getSession(),$_ovhStructDedicatedFilterIrcServerRuleAdd->getHostname(),$_ovhStructDedicatedFilterIrcServerRuleAdd->getToIp()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedVirtualMacIpAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedVirtualMacIpAdd::getSession()
	 * @uses OvhStructDedicatedVirtualMacIpAdd::getHostname()
	 * @uses OvhStructDedicatedVirtualMacIpAdd::getIp()
	 * @uses OvhStructDedicatedVirtualMacIpAdd::getNewMac()
	 * @uses OvhStructDedicatedVirtualMacIpAdd::getTypeMac()
	 * @uses OvhStructDedicatedVirtualMacIpAdd::getMacName()
	 * @uses OvhStructDedicatedVirtualMacIpAdd::getMac()
	 * @param OvhStructDedicatedVirtualMacIpAdd $_ovhStructDedicatedVirtualMacIpAdd
	 * @return OvhStructDedicatedVirtualMacIpAddResponse
	 */
	public function dedicatedVirtualMacIpAdd(OvhStructDedicatedVirtualMacIpAdd $_ovhStructDedicatedVirtualMacIpAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedVirtualMacIpAdd($_ovhStructDedicatedVirtualMacIpAdd->getSession(),$_ovhStructDedicatedVirtualMacIpAdd->getHostname(),$_ovhStructDedicatedVirtualMacIpAdd->getIp(),$_ovhStructDedicatedVirtualMacIpAdd->getNewMac(),$_ovhStructDedicatedVirtualMacIpAdd->getTypeMac(),$_ovhStructDedicatedVirtualMacIpAdd->getMacName(),$_ovhStructDedicatedVirtualMacIpAdd->getMac()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedRipeGetRipeIds
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedRipeGetRipeIds::getSession()
	 * @param OvhStructDedicatedRipeGetRipeIds $_ovhStructDedicatedRipeGetRipeIds
	 * @return OvhStructDedicatedRipeGetRipeIdsResponse
	 */
	public function dedicatedRipeGetRipeIds(OvhStructDedicatedRipeGetRipeIds $_ovhStructDedicatedRipeGetRipeIds)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedRipeGetRipeIds($_ovhStructDedicatedRipeGetRipeIds->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedInfo::getSession()
	 * @uses OvhStructDedicatedInfo::getHostname()
	 * @param OvhStructDedicatedInfo $_ovhStructDedicatedInfo
	 * @return OvhStructDedicatedInfoResponse
	 */
	public function dedicatedInfo(OvhStructDedicatedInfo $_ovhStructDedicatedInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedInfo($_ovhStructDedicatedInfo->getSession(),$_ovhStructDedicatedInfo->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedBackupUpdateDate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedBackupUpdateDate::getSession()
	 * @uses OvhStructDedicatedBackupUpdateDate::getHostname()
	 * @uses OvhStructDedicatedBackupUpdateDate::getBackupId()
	 * @uses OvhStructDedicatedBackupUpdateDate::getMonday()
	 * @uses OvhStructDedicatedBackupUpdateDate::getTuesday()
	 * @uses OvhStructDedicatedBackupUpdateDate::getWednesday()
	 * @uses OvhStructDedicatedBackupUpdateDate::getThursday()
	 * @uses OvhStructDedicatedBackupUpdateDate::getFriday()
	 * @uses OvhStructDedicatedBackupUpdateDate::getSaturday()
	 * @uses OvhStructDedicatedBackupUpdateDate::getSunday()
	 * @param OvhStructDedicatedBackupUpdateDate $_ovhStructDedicatedBackupUpdateDate
	 * @return OvhStructDedicatedBackupUpdateDateResponse
	 */
	public function dedicatedBackupUpdateDate(OvhStructDedicatedBackupUpdateDate $_ovhStructDedicatedBackupUpdateDate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedBackupUpdateDate($_ovhStructDedicatedBackupUpdateDate->getSession(),$_ovhStructDedicatedBackupUpdateDate->getHostname(),$_ovhStructDedicatedBackupUpdateDate->getBackupId(),$_ovhStructDedicatedBackupUpdateDate->getMonday(),$_ovhStructDedicatedBackupUpdateDate->getTuesday(),$_ovhStructDedicatedBackupUpdateDate->getWednesday(),$_ovhStructDedicatedBackupUpdateDate->getThursday(),$_ovhStructDedicatedBackupUpdateDate->getFriday(),$_ovhStructDedicatedBackupUpdateDate->getSaturday(),$_ovhStructDedicatedBackupUpdateDate->getSunday()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedMonitoringStatusGet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedMonitoringStatusGet::getSession()
	 * @uses OvhStructDedicatedMonitoringStatusGet::getHostname()
	 * @param OvhStructDedicatedMonitoringStatusGet $_ovhStructDedicatedMonitoringStatusGet
	 * @return OvhStructDedicatedMonitoringStatusGetResponse
	 */
	public function dedicatedMonitoringStatusGet(OvhStructDedicatedMonitoringStatusGet $_ovhStructDedicatedMonitoringStatusGet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedMonitoringStatusGet($_ovhStructDedicatedMonitoringStatusGet->getSession(),$_ovhStructDedicatedMonitoringStatusGet->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedNetbootModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedNetbootModify::getSession()
	 * @uses OvhStructDedicatedNetbootModify::getHostname()
	 * @uses OvhStructDedicatedNetbootModify::getKernel()
	 * @uses OvhStructDedicatedNetbootModify::getCpufamily()
	 * @uses OvhStructDedicatedNetbootModify::getGrsec()
	 * @uses OvhStructDedicatedNetbootModify::getSmp()
	 * @uses OvhStructDedicatedNetbootModify::getIpv6()
	 * @uses OvhStructDedicatedNetbootModify::getRoot()
	 * @uses OvhStructDedicatedNetbootModify::getRescueEmail()
	 * @uses OvhStructDedicatedNetbootModify::getHz()
	 * @param OvhStructDedicatedNetbootModify $_ovhStructDedicatedNetbootModify
	 * @return OvhStructDedicatedNetbootModifyResponse
	 */
	public function dedicatedNetbootModify(OvhStructDedicatedNetbootModify $_ovhStructDedicatedNetbootModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedNetbootModify($_ovhStructDedicatedNetbootModify->getSession(),$_ovhStructDedicatedNetbootModify->getHostname(),$_ovhStructDedicatedNetbootModify->getKernel(),$_ovhStructDedicatedNetbootModify->getCpufamily(),$_ovhStructDedicatedNetbootModify->getGrsec(),$_ovhStructDedicatedNetbootModify->getSmp(),$_ovhStructDedicatedNetbootModify->getIpv6(),$_ovhStructDedicatedNetbootModify->getRoot(),$_ovhStructDedicatedNetbootModify->getRescueEmail(),$_ovhStructDedicatedNetbootModify->getHz()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedFilterIrcClientRuleList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedFilterIrcClientRuleList::getSession()
	 * @uses OvhStructDedicatedFilterIrcClientRuleList::getHostname()
	 * @param OvhStructDedicatedFilterIrcClientRuleList $_ovhStructDedicatedFilterIrcClientRuleList
	 * @return OvhStructDedicatedFilterIrcClientRuleListResponse
	 */
	public function dedicatedFilterIrcClientRuleList(OvhStructDedicatedFilterIrcClientRuleList $_ovhStructDedicatedFilterIrcClientRuleList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedFilterIrcClientRuleList($_ovhStructDedicatedFilterIrcClientRuleList->getSession(),$_ovhStructDedicatedFilterIrcClientRuleList->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedIPForUDPMove
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedIPForUDPMove::getSession()
	 * @uses OvhStructDedicatedIPForUDPMove::getHostname()
	 * @uses OvhStructDedicatedIPForUDPMove::getHostnameTo()
	 * @uses OvhStructDedicatedIPForUDPMove::getIp()
	 * @param OvhStructDedicatedIPForUDPMove $_ovhStructDedicatedIPForUDPMove
	 * @return OvhStructDedicatedIPForUDPMoveResponse
	 */
	public function dedicatedIPForUDPMove(OvhStructDedicatedIPForUDPMove $_ovhStructDedicatedIPForUDPMove)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedIPForUDPMove($_ovhStructDedicatedIPForUDPMove->getSession(),$_ovhStructDedicatedIPForUDPMove->getHostname(),$_ovhStructDedicatedIPForUDPMove->getHostnameTo(),$_ovhStructDedicatedIPForUDPMove->getIp()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedMonitoringSMSModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedMonitoringSMSModify::getSession()
	 * @uses OvhStructDedicatedMonitoringSMSModify::getHostname()
	 * @uses OvhStructDedicatedMonitoringSMSModify::getId()
	 * @uses OvhStructDedicatedMonitoringSMSModify::getSmsAccount()
	 * @uses OvhStructDedicatedMonitoringSMSModify::getPhoneNumberTo()
	 * @uses OvhStructDedicatedMonitoringSMSModify::getLanguage()
	 * @uses OvhStructDedicatedMonitoringSMSModify::getStatus()
	 * @param OvhStructDedicatedMonitoringSMSModify $_ovhStructDedicatedMonitoringSMSModify
	 * @return OvhStructDedicatedMonitoringSMSModifyResponse
	 */
	public function dedicatedMonitoringSMSModify(OvhStructDedicatedMonitoringSMSModify $_ovhStructDedicatedMonitoringSMSModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedMonitoringSMSModify($_ovhStructDedicatedMonitoringSMSModify->getSession(),$_ovhStructDedicatedMonitoringSMSModify->getHostname(),$_ovhStructDedicatedMonitoringSMSModify->getId(),$_ovhStructDedicatedMonitoringSMSModify->getSmsAccount(),$_ovhStructDedicatedMonitoringSMSModify->getPhoneNumberTo(),$_ovhStructDedicatedMonitoringSMSModify->getLanguage(),$_ovhStructDedicatedMonitoringSMSModify->getStatus()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedMonitoringDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedMonitoringDel::getSession()
	 * @uses OvhStructDedicatedMonitoringDel::getHostname()
	 * @uses OvhStructDedicatedMonitoringDel::getId()
	 * @param OvhStructDedicatedMonitoringDel $_ovhStructDedicatedMonitoringDel
	 * @return OvhStructDedicatedMonitoringDelResponse
	 */
	public function dedicatedMonitoringDel(OvhStructDedicatedMonitoringDel $_ovhStructDedicatedMonitoringDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedMonitoringDel($_ovhStructDedicatedMonitoringDel->getSession(),$_ovhStructDedicatedMonitoringDel->getHostname(),$_ovhStructDedicatedMonitoringDel->getId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedMonitoringServiceAddSMS
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedMonitoringServiceAddSMS::getSession()
	 * @uses OvhStructDedicatedMonitoringServiceAddSMS::getHostname()
	 * @uses OvhStructDedicatedMonitoringServiceAddSMS::getIp()
	 * @uses OvhStructDedicatedMonitoringServiceAddSMS::getPort()
	 * @uses OvhStructDedicatedMonitoringServiceAddSMS::getProtocol()
	 * @uses OvhStructDedicatedMonitoringServiceAddSMS::getPeriod()
	 * @uses OvhStructDedicatedMonitoringServiceAddSMS::getString()
	 * @uses OvhStructDedicatedMonitoringServiceAddSMS::getUrl()
	 * @uses OvhStructDedicatedMonitoringServiceAddSMS::getSmsAccount()
	 * @uses OvhStructDedicatedMonitoringServiceAddSMS::getPhoneNumberTo()
	 * @param OvhStructDedicatedMonitoringServiceAddSMS $_ovhStructDedicatedMonitoringServiceAddSMS
	 * @return OvhStructDedicatedMonitoringServiceAddSMSResponse
	 */
	public function dedicatedMonitoringServiceAddSMS(OvhStructDedicatedMonitoringServiceAddSMS $_ovhStructDedicatedMonitoringServiceAddSMS)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedMonitoringServiceAddSMS($_ovhStructDedicatedMonitoringServiceAddSMS->getSession(),$_ovhStructDedicatedMonitoringServiceAddSMS->getHostname(),$_ovhStructDedicatedMonitoringServiceAddSMS->getIp(),$_ovhStructDedicatedMonitoringServiceAddSMS->getPort(),$_ovhStructDedicatedMonitoringServiceAddSMS->getProtocol(),$_ovhStructDedicatedMonitoringServiceAddSMS->getPeriod(),$_ovhStructDedicatedMonitoringServiceAddSMS->getString(),$_ovhStructDedicatedMonitoringServiceAddSMS->getUrl(),$_ovhStructDedicatedMonitoringServiceAddSMS->getSmsAccount(),$_ovhStructDedicatedMonitoringServiceAddSMS->getPhoneNumberTo()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedList::getSession()
	 * @param OvhStructDedicatedList $_ovhStructDedicatedList
	 * @return OvhStructDedicatedListResponse
	 */
	public function dedicatedList(OvhStructDedicatedList $_ovhStructDedicatedList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedList($_ovhStructDedicatedList->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedIPForUDPGet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedIPForUDPGet::getSession()
	 * @uses OvhStructDedicatedIPForUDPGet::getHostname()
	 * @param OvhStructDedicatedIPForUDPGet $_ovhStructDedicatedIPForUDPGet
	 * @return OvhStructDedicatedIPForUDPGetResponse
	 */
	public function dedicatedIPForUDPGet(OvhStructDedicatedIPForUDPGet $_ovhStructDedicatedIPForUDPGet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedIPForUDPGet($_ovhStructDedicatedIPForUDPGet->getSession(),$_ovhStructDedicatedIPForUDPGet->getHostname()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedGetAvailableIpFromNetwork
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedGetAvailableIpFromNetwork::getSession()
	 * @uses OvhStructDedicatedGetAvailableIpFromNetwork::getHostname()
	 * @uses OvhStructDedicatedGetAvailableIpFromNetwork::getNetwork()
	 * @param OvhStructDedicatedGetAvailableIpFromNetwork $_ovhStructDedicatedGetAvailableIpFromNetwork
	 * @return OvhStructDedicatedGetAvailableIpFromNetworkResponse
	 */
	public function dedicatedGetAvailableIpFromNetwork(OvhStructDedicatedGetAvailableIpFromNetwork $_ovhStructDedicatedGetAvailableIpFromNetwork)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedGetAvailableIpFromNetwork($_ovhStructDedicatedGetAvailableIpFromNetwork->getSession(),$_ovhStructDedicatedGetAvailableIpFromNetwork->getHostname(),$_ovhStructDedicatedGetAvailableIpFromNetwork->getNetwork()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedMailinglistSubscribe
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedMailinglistSubscribe::getSession()
	 * @uses OvhStructDedicatedMailinglistSubscribe::getEmail()
	 * @uses OvhStructDedicatedMailinglistSubscribe::getMailingList()
	 * @param OvhStructDedicatedMailinglistSubscribe $_ovhStructDedicatedMailinglistSubscribe
	 * @return OvhStructDedicatedMailinglistSubscribeResponse
	 */
	public function dedicatedMailinglistSubscribe(OvhStructDedicatedMailinglistSubscribe $_ovhStructDedicatedMailinglistSubscribe)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedMailinglistSubscribe($_ovhStructDedicatedMailinglistSubscribe->getSession(),$_ovhStructDedicatedMailinglistSubscribe->getEmail(),$_ovhStructDedicatedMailinglistSubscribe->getMailingList()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedIpLoadBalancingNameModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedIpLoadBalancingNameModify::getSession()
	 * @uses OvhStructDedicatedIpLoadBalancingNameModify::getIpLoadBalancing()
	 * @uses OvhStructDedicatedIpLoadBalancingNameModify::getName()
	 * @param OvhStructDedicatedIpLoadBalancingNameModify $_ovhStructDedicatedIpLoadBalancingNameModify
	 * @return OvhStructDedicatedIpLoadBalancingNameModifyResponse
	 */
	public function dedicatedIpLoadBalancingNameModify(OvhStructDedicatedIpLoadBalancingNameModify $_ovhStructDedicatedIpLoadBalancingNameModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedIpLoadBalancingNameModify($_ovhStructDedicatedIpLoadBalancingNameModify->getSession(),$_ovhStructDedicatedIpLoadBalancingNameModify->getIpLoadBalancing(),$_ovhStructDedicatedIpLoadBalancingNameModify->getName()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named dedicatedMonitoringServiceList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructDedicatedMonitoringServiceList::getSession()
	 * @uses OvhStructDedicatedMonitoringServiceList::getHostname()
	 * @param OvhStructDedicatedMonitoringServiceList $_ovhStructDedicatedMonitoringServiceList
	 * @return OvhStructDedicatedMonitoringServiceListResponse
	 */
	public function dedicatedMonitoringServiceList(OvhStructDedicatedMonitoringServiceList $_ovhStructDedicatedMonitoringServiceList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->dedicatedMonitoringServiceList($_ovhStructDedicatedMonitoringServiceList->getSession(),$_ovhStructDedicatedMonitoringServiceList->getHostname()));
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
	 * @return OvhStructDedicatedAddServiceMonitoringAlertEmailResponse|OvhStructDedicatedAddServiceMonitoringAlertSMSResponse|OvhStructDedicatedAvailableNotificationNicsGetResponse|OvhStructDedicatedBackupExcludeAddResponse|OvhStructDedicatedBackupExcludeDelResponse|OvhStructDedicatedBackupFtpAddResponse|OvhStructDedicatedBackupFtpInfoResponse|OvhStructDedicatedBackupFtpPasswordResponse|OvhStructDedicatedBackupGetCalendarResponse|OvhStructDedicatedBackupGetDateResponse|OvhStructDedicatedBackupGetFreePlanningResponse|OvhStructDedicatedBackupGetHistoResponse|OvhStructDedicatedBackupIncludeAddResponse|OvhStructDedicatedBackupIncludeDelResponse|OvhStructDedicatedBackupInfoResponse|OvhStructDedicatedBackupListResponse|OvhStructDedicatedBackupReinstallConfigurationResponse|OvhStructDedicatedBackupReinstallDataResponse|OvhStructDedicatedBackupSetResponse|OvhStructDedicatedBackupUpdateDateResponse|OvhStructDedicatedBackupUpdateResponse|OvhStructDedicatedBandwidthManagementGetResponse|OvhStructDedicatedBandwidthSwitchingResponse|OvhStructDedicatedCapabilitiesGetAllResponse|OvhStructDedicatedCapabilitiesGetResponse|OvhStructDedicatedDelServiceMonitoringAlertResponse|OvhStructDedicatedEditServiceMonitoringItemResponse|OvhStructDedicatedFailoverAddResponse|OvhStructDedicatedFailoverListResponse|OvhStructDedicatedFailoverRipeAddResponse|OvhStructDedicatedFailoverRipeGetIpResponse|OvhStructDedicatedFailoverRipeListResponse|OvhStructDedicatedFailoverRipeModifyResponse|OvhStructDedicatedFailoverRipeSplitResponse|OvhStructDedicatedFailoverUpdateResponse|OvhStructDedicatedFilterIrcClientRuleAddResponse|OvhStructDedicatedFilterIrcClientRuleDelResponse|OvhStructDedicatedFilterIrcClientRuleListResponse|OvhStructDedicatedFilterIrcServerRuleAddResponse|OvhStructDedicatedFilterIrcServerRuleDelResponse|OvhStructDedicatedFilterIrcServerRuleListResponse|OvhStructDedicatedGetAvailableIpFromNetworkResponse|OvhStructDedicatedGetAvailableNetworkFromCountryResponse|OvhStructDedicatedGetRandomAvailableIpFromCountryResponse|OvhStructDedicatedGetServiceMonitoringItemResponse|OvhStructDedicatedHardRebootDoResponse|OvhStructDedicatedHardRebootStatusResponse|OvhStructDedicatedInfoResponse|OvhStructDedicatedInstallAllowedDistributionGetResponse|OvhStructDedicatedInstallationTemplateListResponse|OvhStructDedicatedInstallationTemplateUseResponse|OvhStructDedicatedInstallBasicProgressResponse|OvhStructDedicatedInstallBasicResponse|OvhStructDedicatedInstallResetResponse|OvhStructDedicatedIPForUDPGetResponse|OvhStructDedicatedIPForUDPMoveGetStatusResponse|OvhStructDedicatedIPForUDPMoveResponse|OvhStructDedicatedIPForUDPServerListResponse|OvhStructDedicatedIpLoadBalancingAddResponse|OvhStructDedicatedIpLoadBalancingDelResponse|OvhStructDedicatedIpLoadBalancingListResponse|OvhStructDedicatedIpLoadBalancingNameModifyResponse|OvhStructDedicatedIpLoadBalancingServerAddResponse|OvhStructDedicatedIpLoadBalancingServerDelResponse|OvhStructDedicatedIpLoadBalancingServerStateModifyResponse|OvhStructDedicatedListResponse|OvhStructDedicatedMailinglistGetAllowedResponse|OvhStructDedicatedMailinglistSubscribeResponse|OvhStructDedicatedMonitoringAddResponse|OvhStructDedicatedMonitoringDelResponse|OvhStructDedicatedMonitoringListResponse|OvhStructDedicatedMonitoringModifyResponse|OvhStructDedicatedMonitoringNotificationCreateResponse|OvhStructDedicatedMonitoringNotificationDelResponse|OvhStructDedicatedMonitoringServiceAddNotificationResponse|OvhStructDedicatedMonitoringServiceAddResponse|OvhStructDedicatedMonitoringServiceAddSMSResponse|OvhStructDedicatedMonitoringServiceDelResponse|OvhStructDedicatedMonitoringServiceListResponse|OvhStructDedicatedMonitoringSMSCreateResponse|OvhStructDedicatedMonitoringSMSDelResponse|OvhStructDedicatedMonitoringSMSModifyResponse|OvhStructDedicatedMonitoringStatusGetResponse|OvhStructDedicatedMonitoringStatusUpdateResponse|OvhStructDedicatedMrtgInfoResponse|OvhStructDedicatedNetbootGetAllResponse|OvhStructDedicatedNetbootGetAvailableResponse|OvhStructDedicatedNetbootGetRescueEmailResponse|OvhStructDedicatedNetbootInfoResponse|OvhStructDedicatedNetbootModifyByIdResponse|OvhStructDedicatedNetbootModifyResponse|OvhStructDedicatedOperationListResponse|OvhStructDedicatedReverseAddResponse|OvhStructDedicatedReverseDelResponse|OvhStructDedicatedReverseInfoResponse|OvhStructDedicatedReverseListResponse|OvhStructDedicatedReverseModifyResponse|OvhStructDedicatedRipeCreateOrganisationResponse|OvhStructDedicatedRipeDeleteOrganisationResponse|OvhStructDedicatedRipeGetRipeIdsResponse|OvhStructDedicatedRipeQueryResponse|OvhStructDedicatedRipeUpdateInetnumResponse|OvhStructDedicatedRipeUpdateOrganisationResponse|OvhStructDedicatedRtmBackdoorUpdateAlertResponse|OvhStructDedicatedRtmGetStatusResponse|OvhStructDedicatedRtmListBackdoorResponse|OvhStructDedicatedSecondaryDNSAddResponse|OvhStructDedicatedSecondaryDNSDelResponse|OvhStructDedicatedSecondaryDNSGetAllResponse|OvhStructDedicatedSecondaryDNSInfoResponse|OvhStructDedicatedVirtualMacIpAddResponse|OvhStructDedicatedVirtualMacIpAvailableGetListResponse|OvhStructDedicatedVirtualMacIpDeleteResponse|OvhStructDedicatedVirtualMacIpUsedGetListResponse
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