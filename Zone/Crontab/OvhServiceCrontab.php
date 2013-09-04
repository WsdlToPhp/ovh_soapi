<?php
/**
 * File for class OvhServiceCrontab
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceCrontab originally named Crontab
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceCrontab extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named crontabDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructCrontabDel::getSession()
	 * @uses OvhStructCrontabDel::getDomain()
	 * @uses OvhStructCrontabDel::getId()
	 * @param OvhStructCrontabDel $_ovhStructCrontabDel
	 * @return OvhStructCrontabDelResponse
	 */
	public function crontabDel(OvhStructCrontabDel $_ovhStructCrontabDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->crontabDel($_ovhStructCrontabDel->getSession(),$_ovhStructCrontabDel->getDomain(),$_ovhStructCrontabDel->getId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named crontabList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructCrontabList::getSession()
	 * @uses OvhStructCrontabList::getDomain()
	 * @param OvhStructCrontabList $_ovhStructCrontabList
	 * @return OvhStructCrontabListResponse
	 */
	public function crontabList(OvhStructCrontabList $_ovhStructCrontabList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->crontabList($_ovhStructCrontabList->getSession(),$_ovhStructCrontabList->getDomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named crontabAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructCrontabAdd::getSession()
	 * @uses OvhStructCrontabAdd::getDomain()
	 * @uses OvhStructCrontabAdd::getPath()
	 * @uses OvhStructCrontabAdd::getProgramLanguage()
	 * @uses OvhStructCrontabAdd::getWeekDay()
	 * @uses OvhStructCrontabAdd::getDays()
	 * @uses OvhStructCrontabAdd::getHours()
	 * @uses OvhStructCrontabAdd::getDesc()
	 * @uses OvhStructCrontabAdd::getEmail()
	 * @uses OvhStructCrontabAdd::getOtherEmail()
	 * @param OvhStructCrontabAdd $_ovhStructCrontabAdd
	 * @return OvhStructCrontabAddResponse
	 */
	public function crontabAdd(OvhStructCrontabAdd $_ovhStructCrontabAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->crontabAdd($_ovhStructCrontabAdd->getSession(),$_ovhStructCrontabAdd->getDomain(),$_ovhStructCrontabAdd->getPath(),$_ovhStructCrontabAdd->getProgramLanguage(),$_ovhStructCrontabAdd->getWeekDay(),$_ovhStructCrontabAdd->getDays(),$_ovhStructCrontabAdd->getHours(),$_ovhStructCrontabAdd->getDesc(),$_ovhStructCrontabAdd->getEmail(),$_ovhStructCrontabAdd->getOtherEmail()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named crontabInfo
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructCrontabInfo::getSession()
	 * @uses OvhStructCrontabInfo::getDomain()
	 * @uses OvhStructCrontabInfo::getId()
	 * @param OvhStructCrontabInfo $_ovhStructCrontabInfo
	 * @return OvhStructCrontabInfoResponse
	 */
	public function crontabInfo(OvhStructCrontabInfo $_ovhStructCrontabInfo)
	{
		try
		{
			$this->setResult(self::getSoapClient()->crontabInfo($_ovhStructCrontabInfo->getSession(),$_ovhStructCrontabInfo->getDomain(),$_ovhStructCrontabInfo->getId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named crontabModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructCrontabModify::getSession()
	 * @uses OvhStructCrontabModify::getDomain()
	 * @uses OvhStructCrontabModify::getId()
	 * @uses OvhStructCrontabModify::getPath()
	 * @uses OvhStructCrontabModify::getProgramLanguage()
	 * @uses OvhStructCrontabModify::getWeekDay()
	 * @uses OvhStructCrontabModify::getDays()
	 * @uses OvhStructCrontabModify::getHours()
	 * @uses OvhStructCrontabModify::getDesc()
	 * @uses OvhStructCrontabModify::getEmail()
	 * @uses OvhStructCrontabModify::getOtherEmail()
	 * @uses OvhStructCrontabModify::getEnable()
	 * @param OvhStructCrontabModify $_ovhStructCrontabModify
	 * @return OvhStructCrontabModifyResponse
	 */
	public function crontabModify(OvhStructCrontabModify $_ovhStructCrontabModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->crontabModify($_ovhStructCrontabModify->getSession(),$_ovhStructCrontabModify->getDomain(),$_ovhStructCrontabModify->getId(),$_ovhStructCrontabModify->getPath(),$_ovhStructCrontabModify->getProgramLanguage(),$_ovhStructCrontabModify->getWeekDay(),$_ovhStructCrontabModify->getDays(),$_ovhStructCrontabModify->getHours(),$_ovhStructCrontabModify->getDesc(),$_ovhStructCrontabModify->getEmail(),$_ovhStructCrontabModify->getOtherEmail(),$_ovhStructCrontabModify->getEnable()));
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
	 * @return OvhStructCrontabAddResponse|OvhStructCrontabDelResponse|OvhStructCrontabInfoResponse|OvhStructCrontabListResponse|OvhStructCrontabModifyResponse
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