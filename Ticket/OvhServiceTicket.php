<?php
/**
 * File for class OvhServiceTicket
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceTicket originally named Ticket
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceTicket extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named ticketListIncidentsByDomain
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTicketListIncidentsByDomain::getSession()
	 * @uses OvhStructTicketListIncidentsByDomain::getDomain()
	 * @param OvhStructTicketListIncidentsByDomain $_ovhStructTicketListIncidentsByDomain
	 * @return OvhStructTicketListIncidentsByDomainResponse
	 */
	public function ticketListIncidentsByDomain(OvhStructTicketListIncidentsByDomain $_ovhStructTicketListIncidentsByDomain)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ticketListIncidentsByDomain($_ovhStructTicketListIncidentsByDomain->getSession(),$_ovhStructTicketListIncidentsByDomain->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named ticketListIncidents
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTicketListIncidents::getSession()
	 * @uses OvhStructTicketListIncidents::getStatus()
	 * @param OvhStructTicketListIncidents $_ovhStructTicketListIncidents
	 * @return OvhStructTicketListIncidentsResponse
	 */
	public function ticketListIncidents(OvhStructTicketListIncidents $_ovhStructTicketListIncidents)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ticketListIncidents($_ovhStructTicketListIncidents->getSession(),$_ovhStructTicketListIncidents->getStatus()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named ticketReopen
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTicketReopen::getSession()
	 * @uses OvhStructTicketReopen::getTicketId()
	 * @param OvhStructTicketReopen $_ovhStructTicketReopen
	 * @return OvhStructTicketReopenResponse
	 */
	public function ticketReopen(OvhStructTicketReopen $_ovhStructTicketReopen)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ticketReopen($_ovhStructTicketReopen->getSession(),$_ovhStructTicketReopen->getTicketId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named ticketListContact
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTicketListContact::getSession()
	 * @param OvhStructTicketListContact $_ovhStructTicketListContact
	 * @return OvhStructTicketListContactResponse
	 */
	public function ticketListContact(OvhStructTicketListContact $_ovhStructTicketListContact)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ticketListContact($_ovhStructTicketListContact->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named ticketGet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTicketGet::getSession()
	 * @uses OvhStructTicketGet::getTicketId()
	 * @param OvhStructTicketGet $_ovhStructTicketGet
	 * @return OvhStructTicketGetResponse
	 */
	public function ticketGet(OvhStructTicketGet $_ovhStructTicketGet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ticketGet($_ovhStructTicketGet->getSession(),$_ovhStructTicketGet->getTicketId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named ticketAnswer
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTicketAnswer::getSession()
	 * @uses OvhStructTicketAnswer::getTicketId()
	 * @uses OvhStructTicketAnswer::getMessage()
	 * @param OvhStructTicketAnswer $_ovhStructTicketAnswer
	 * @return OvhStructTicketAnswerResponse
	 */
	public function ticketAnswer(OvhStructTicketAnswer $_ovhStructTicketAnswer)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ticketAnswer($_ovhStructTicketAnswer->getSession(),$_ovhStructTicketAnswer->getTicketId(),$_ovhStructTicketAnswer->getMessage()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named ticketClose
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTicketClose::getSession()
	 * @uses OvhStructTicketClose::getTicketId()
	 * @param OvhStructTicketClose $_ovhStructTicketClose
	 * @return OvhStructTicketCloseResponse
	 */
	public function ticketClose(OvhStructTicketClose $_ovhStructTicketClose)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ticketClose($_ovhStructTicketClose->getSession(),$_ovhStructTicketClose->getTicketId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named ticketCreate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructTicketCreate::getSession()
	 * @uses OvhStructTicketCreate::getComponentType()
	 * @uses OvhStructTicketCreate::getDomain()
	 * @uses OvhStructTicketCreate::getEmail()
	 * @uses OvhStructTicketCreate::getPhone()
	 * @uses OvhStructTicketCreate::getSubject()
	 * @uses OvhStructTicketCreate::getIncidentSummary()
	 * @uses OvhStructTicketCreate::getIncidentDetails()
	 * @uses OvhStructTicketCreate::getIncidentManip()
	 * @uses OvhStructTicketCreate::getLevel()
	 * @param OvhStructTicketCreate $_ovhStructTicketCreate
	 * @return OvhStructTicketCreateResponse
	 */
	public function ticketCreate(OvhStructTicketCreate $_ovhStructTicketCreate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ticketCreate($_ovhStructTicketCreate->getSession(),$_ovhStructTicketCreate->getComponentType(),$_ovhStructTicketCreate->getDomain(),$_ovhStructTicketCreate->getEmail(),$_ovhStructTicketCreate->getPhone(),$_ovhStructTicketCreate->getSubject(),$_ovhStructTicketCreate->getIncidentSummary(),$_ovhStructTicketCreate->getIncidentDetails(),$_ovhStructTicketCreate->getIncidentManip(),$_ovhStructTicketCreate->getLevel()));
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
	 * @return OvhStructTicketAnswerResponse|OvhStructTicketCloseResponse|OvhStructTicketCreateResponse|OvhStructTicketGetResponse|OvhStructTicketListContactResponse|OvhStructTicketListIncidentsByDomainResponse|OvhStructTicketListIncidentsResponse|OvhStructTicketReopenResponse
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