<?php
/**
 * File for class OvhServiceSub
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceSub originally named Sub
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceSub extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named subDomainDel
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSubDomainDel::getSession()
	 * @uses OvhStructSubDomainDel::getDomain()
	 * @uses OvhStructSubDomainDel::getSubdomain()
	 * @param OvhStructSubDomainDel $_ovhStructSubDomainDel
	 * @return OvhStructSubDomainDelResponse
	 */
	public function subDomainDel(OvhStructSubDomainDel $_ovhStructSubDomainDel)
	{
		try
		{
			$this->setResult(self::getSoapClient()->subDomainDel($_ovhStructSubDomainDel->getSession(),$_ovhStructSubDomainDel->getDomain(),$_ovhStructSubDomainDel->getSubdomain()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named subDomainModify
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSubDomainModify::getSession()
	 * @uses OvhStructSubDomainModify::getDomain()
	 * @uses OvhStructSubDomainModify::getSubdomain()
	 * @uses OvhStructSubDomainModify::getTarget()
	 * @uses OvhStructSubDomainModify::getCountry()
	 * @param OvhStructSubDomainModify $_ovhStructSubDomainModify
	 * @return OvhStructSubDomainModifyResponse
	 */
	public function subDomainModify(OvhStructSubDomainModify $_ovhStructSubDomainModify)
	{
		try
		{
			$this->setResult(self::getSoapClient()->subDomainModify($_ovhStructSubDomainModify->getSession(),$_ovhStructSubDomainModify->getDomain(),$_ovhStructSubDomainModify->getSubdomain(),$_ovhStructSubDomainModify->getTarget(),$_ovhStructSubDomainModify->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named subDomainAdd
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSubDomainAdd::getSession()
	 * @uses OvhStructSubDomainAdd::getDomain()
	 * @uses OvhStructSubDomainAdd::getSubdomain()
	 * @uses OvhStructSubDomainAdd::getTarget()
	 * @uses OvhStructSubDomainAdd::getCountry()
	 * @param OvhStructSubDomainAdd $_ovhStructSubDomainAdd
	 * @return OvhStructSubDomainAddResponse
	 */
	public function subDomainAdd(OvhStructSubDomainAdd $_ovhStructSubDomainAdd)
	{
		try
		{
			$this->setResult(self::getSoapClient()->subDomainAdd($_ovhStructSubDomainAdd->getSession(),$_ovhStructSubDomainAdd->getDomain(),$_ovhStructSubDomainAdd->getSubdomain(),$_ovhStructSubDomainAdd->getTarget(),$_ovhStructSubDomainAdd->getCountry()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named subDomainList
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructSubDomainList::getSession()
	 * @uses OvhStructSubDomainList::getDomain()
	 * @param OvhStructSubDomainList $_ovhStructSubDomainList
	 * @return OvhStructSubDomainListResponse
	 */
	public function subDomainList(OvhStructSubDomainList $_ovhStructSubDomainList)
	{
		try
		{
			$this->setResult(self::getSoapClient()->subDomainList($_ovhStructSubDomainList->getSession(),$_ovhStructSubDomainList->getDomain()));
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
	 * @return OvhStructSubDomainAddResponse|OvhStructSubDomainDelResponse|OvhStructSubDomainListResponse|OvhStructSubDomainModifyResponse
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