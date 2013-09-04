<?php
/**
 * File for class OvhServicePrepaid
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServicePrepaid originally named Prepaid
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServicePrepaid extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named prepaidDomainCreate
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructPrepaidDomainCreate::getSession()
	 * @uses OvhStructPrepaidDomainCreate::getDomain()
	 * @uses OvhStructPrepaidDomainCreate::getNicowner()
	 * @uses OvhStructPrepaidDomainCreate::getNicadmin()
	 * @uses OvhStructPrepaidDomainCreate::getNictech()
	 * @uses OvhStructPrepaidDomainCreate::getNicbilling()
	 * @uses OvhStructPrepaidDomainCreate::getDns1()
	 * @uses OvhStructPrepaidDomainCreate::getDns2()
	 * @uses OvhStructPrepaidDomainCreate::getDns3()
	 * @uses OvhStructPrepaidDomainCreate::getDns4()
	 * @uses OvhStructPrepaidDomainCreate::getDns5()
	 * @uses OvhStructPrepaidDomainCreate::getFrpartBirthday()
	 * @uses OvhStructPrepaidDomainCreate::getFrpartBirthCountry()
	 * @uses OvhStructPrepaidDomainCreate::getFrpartBirthDepartment()
	 * @uses OvhStructPrepaidDomainCreate::getFrpartBirthTown()
	 * @uses OvhStructPrepaidDomainCreate::getDryRun()
	 * @param OvhStructPrepaidDomainCreate $_ovhStructPrepaidDomainCreate
	 * @return OvhStructPrepaidDomainCreateResponse
	 */
	public function prepaidDomainCreate(OvhStructPrepaidDomainCreate $_ovhStructPrepaidDomainCreate)
	{
		try
		{
			$this->setResult(self::getSoapClient()->prepaidDomainCreate($_ovhStructPrepaidDomainCreate->getSession(),$_ovhStructPrepaidDomainCreate->getDomain(),$_ovhStructPrepaidDomainCreate->getNicowner(),$_ovhStructPrepaidDomainCreate->getNicadmin(),$_ovhStructPrepaidDomainCreate->getNictech(),$_ovhStructPrepaidDomainCreate->getNicbilling(),$_ovhStructPrepaidDomainCreate->getDns1(),$_ovhStructPrepaidDomainCreate->getDns2(),$_ovhStructPrepaidDomainCreate->getDns3(),$_ovhStructPrepaidDomainCreate->getDns4(),$_ovhStructPrepaidDomainCreate->getDns5(),$_ovhStructPrepaidDomainCreate->getFrpartBirthday(),$_ovhStructPrepaidDomainCreate->getFrpartBirthCountry(),$_ovhStructPrepaidDomainCreate->getFrpartBirthDepartment(),$_ovhStructPrepaidDomainCreate->getFrpartBirthTown(),$_ovhStructPrepaidDomainCreate->getDryRun()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named prepaidDomainTransfer
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructPrepaidDomainTransfer::getSession()
	 * @uses OvhStructPrepaidDomainTransfer::getDomain()
	 * @uses OvhStructPrepaidDomainTransfer::getNicowner()
	 * @uses OvhStructPrepaidDomainTransfer::getNicadmin()
	 * @uses OvhStructPrepaidDomainTransfer::getNictech()
	 * @uses OvhStructPrepaidDomainTransfer::getNicbilling()
	 * @uses OvhStructPrepaidDomainTransfer::getDns1()
	 * @uses OvhStructPrepaidDomainTransfer::getDns2()
	 * @uses OvhStructPrepaidDomainTransfer::getDns3()
	 * @uses OvhStructPrepaidDomainTransfer::getDns4()
	 * @uses OvhStructPrepaidDomainTransfer::getDns5()
	 * @uses OvhStructPrepaidDomainTransfer::getFrpartBirthday()
	 * @uses OvhStructPrepaidDomainTransfer::getFrpartBirthCountry()
	 * @uses OvhStructPrepaidDomainTransfer::getFrpartBirthDepartment()
	 * @uses OvhStructPrepaidDomainTransfer::getFrpartBirthTown()
	 * @uses OvhStructPrepaidDomainTransfer::getDryRun()
	 * @param OvhStructPrepaidDomainTransfer $_ovhStructPrepaidDomainTransfer
	 * @return OvhStructPrepaidDomainTransferResponse
	 */
	public function prepaidDomainTransfer(OvhStructPrepaidDomainTransfer $_ovhStructPrepaidDomainTransfer)
	{
		try
		{
			$this->setResult(self::getSoapClient()->prepaidDomainTransfer($_ovhStructPrepaidDomainTransfer->getSession(),$_ovhStructPrepaidDomainTransfer->getDomain(),$_ovhStructPrepaidDomainTransfer->getNicowner(),$_ovhStructPrepaidDomainTransfer->getNicadmin(),$_ovhStructPrepaidDomainTransfer->getNictech(),$_ovhStructPrepaidDomainTransfer->getNicbilling(),$_ovhStructPrepaidDomainTransfer->getDns1(),$_ovhStructPrepaidDomainTransfer->getDns2(),$_ovhStructPrepaidDomainTransfer->getDns3(),$_ovhStructPrepaidDomainTransfer->getDns4(),$_ovhStructPrepaidDomainTransfer->getDns5(),$_ovhStructPrepaidDomainTransfer->getFrpartBirthday(),$_ovhStructPrepaidDomainTransfer->getFrpartBirthCountry(),$_ovhStructPrepaidDomainTransfer->getFrpartBirthDepartment(),$_ovhStructPrepaidDomainTransfer->getFrpartBirthTown(),$_ovhStructPrepaidDomainTransfer->getDryRun()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named prepaidSetThreshold
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructPrepaidSetThreshold::getSession()
	 * @uses OvhStructPrepaidSetThreshold::getNic()
	 * @uses OvhStructPrepaidSetThreshold::getThreshold()
	 * @param OvhStructPrepaidSetThreshold $_ovhStructPrepaidSetThreshold
	 * @return OvhStructPrepaidSetThresholdResponse
	 */
	public function prepaidSetThreshold(OvhStructPrepaidSetThreshold $_ovhStructPrepaidSetThreshold)
	{
		try
		{
			$this->setResult(self::getSoapClient()->prepaidSetThreshold($_ovhStructPrepaidSetThreshold->getSession(),$_ovhStructPrepaidSetThreshold->getNic(),$_ovhStructPrepaidSetThreshold->getThreshold()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named prepaidGetSummary
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructPrepaidGetSummary::getSession()
	 * @uses OvhStructPrepaidGetSummary::getNic()
	 * @param OvhStructPrepaidGetSummary $_ovhStructPrepaidGetSummary
	 * @return OvhStructPrepaidGetSummaryResponse
	 */
	public function prepaidGetSummary(OvhStructPrepaidGetSummary $_ovhStructPrepaidGetSummary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->prepaidGetSummary($_ovhStructPrepaidGetSummary->getSession(),$_ovhStructPrepaidGetSummary->getNic()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named prepaidDomainRenew
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructPrepaidDomainRenew::getSession()
	 * @uses OvhStructPrepaidDomainRenew::getDomain()
	 * @uses OvhStructPrepaidDomainRenew::getDryRun()
	 * @param OvhStructPrepaidDomainRenew $_ovhStructPrepaidDomainRenew
	 * @return OvhStructPrepaidDomainRenewResponse
	 */
	public function prepaidDomainRenew(OvhStructPrepaidDomainRenew $_ovhStructPrepaidDomainRenew)
	{
		try
		{
			$this->setResult(self::getSoapClient()->prepaidDomainRenew($_ovhStructPrepaidDomainRenew->getSession(),$_ovhStructPrepaidDomainRenew->getDomain(),$_ovhStructPrepaidDomainRenew->getDryRun()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named prepaidGetThreshold
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructPrepaidGetThreshold::getSession()
	 * @uses OvhStructPrepaidGetThreshold::getNic()
	 * @param OvhStructPrepaidGetThreshold $_ovhStructPrepaidGetThreshold
	 * @return OvhStructPrepaidGetThresholdResponse
	 */
	public function prepaidGetThreshold(OvhStructPrepaidGetThreshold $_ovhStructPrepaidGetThreshold)
	{
		try
		{
			$this->setResult(self::getSoapClient()->prepaidGetThreshold($_ovhStructPrepaidGetThreshold->getSession(),$_ovhStructPrepaidGetThreshold->getNic()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named prepaidGetHistory
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructPrepaidGetHistory::getSession()
	 * @uses OvhStructPrepaidGetHistory::getNic()
	 * @uses OvhStructPrepaidGetHistory::getPage()
	 * @param OvhStructPrepaidGetHistory $_ovhStructPrepaidGetHistory
	 * @return OvhStructPrepaidGetHistoryResponse
	 */
	public function prepaidGetHistory(OvhStructPrepaidGetHistory $_ovhStructPrepaidGetHistory)
	{
		try
		{
			$this->setResult(self::getSoapClient()->prepaidGetHistory($_ovhStructPrepaidGetHistory->getSession(),$_ovhStructPrepaidGetHistory->getNic(),$_ovhStructPrepaidGetHistory->getPage()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named prepaidGetBalance
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructPrepaidGetBalance::getSession()
	 * @uses OvhStructPrepaidGetBalance::getNic()
	 * @param OvhStructPrepaidGetBalance $_ovhStructPrepaidGetBalance
	 * @return OvhStructPrepaidGetBalanceResponse
	 */
	public function prepaidGetBalance(OvhStructPrepaidGetBalance $_ovhStructPrepaidGetBalance)
	{
		try
		{
			$this->setResult(self::getSoapClient()->prepaidGetBalance($_ovhStructPrepaidGetBalance->getSession(),$_ovhStructPrepaidGetBalance->getNic()));
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
	 * @return OvhStructPrepaidDomainCreateResponse|OvhStructPrepaidDomainRenewResponse|OvhStructPrepaidDomainTransferResponse|OvhStructPrepaidGetBalanceResponse|OvhStructPrepaidGetHistoryResponse|OvhStructPrepaidGetSummaryResponse|OvhStructPrepaidGetThresholdResponse|OvhStructPrepaidSetThresholdResponse
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