<?php
/**
 * File for class OvhServiceAccount
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceAccount originally named Account
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceAccount extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named accountSummary
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructAccountSummary::getSession()
	 * @param OvhStructAccountSummary $_ovhStructAccountSummary
	 * @return OvhStructAccountSummaryResponse
	 */
	public function accountSummary(OvhStructAccountSummary $_ovhStructAccountSummary)
	{
		try
		{
			$this->setResult(self::getSoapClient()->accountSummary($_ovhStructAccountSummary->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named accountHistory
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructAccountHistory::getSession()
	 * @uses OvhStructAccountHistory::getMonth()
	 * @uses OvhStructAccountHistory::getYear()
	 * @param OvhStructAccountHistory $_ovhStructAccountHistory
	 * @return OvhStructAccountHistoryResponse
	 */
	public function accountHistory(OvhStructAccountHistory $_ovhStructAccountHistory)
	{
		try
		{
			$this->setResult(self::getSoapClient()->accountHistory($_ovhStructAccountHistory->getSession(),$_ovhStructAccountHistory->getMonth(),$_ovhStructAccountHistory->getYear()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named accountAlertThresholdSet
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructAccountAlertThresholdSet::getSession()
	 * @uses OvhStructAccountAlertThresholdSet::getThreshold()
	 * @param OvhStructAccountAlertThresholdSet $_ovhStructAccountAlertThresholdSet
	 * @return OvhStructAccountAlertThresholdSetResponse
	 */
	public function accountAlertThresholdSet(OvhStructAccountAlertThresholdSet $_ovhStructAccountAlertThresholdSet)
	{
		try
		{
			$this->setResult(self::getSoapClient()->accountAlertThresholdSet($_ovhStructAccountAlertThresholdSet->getSession(),$_ovhStructAccountAlertThresholdSet->getThreshold()));
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
	 * @return OvhStructAccountAlertThresholdSetResponse|OvhStructAccountHistoryResponse|OvhStructAccountSummaryResponse
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