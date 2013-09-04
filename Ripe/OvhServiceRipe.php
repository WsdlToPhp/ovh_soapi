<?php
/**
 * File for class OvhServiceRipe
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for OvhServiceRipe originally named Ripe
 * @package Ovh
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class OvhServiceRipe extends OvhWsdlClass
{
	/**
	 * Method to call the operation originally named ripeGetRipeIds
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructRipeGetRipeIds::getSession()
	 * @param OvhStructRipeGetRipeIds $_ovhStructRipeGetRipeIds
	 * @return OvhStructRipeGetRipeIdsResponse
	 */
	public function ripeGetRipeIds(OvhStructRipeGetRipeIds $_ovhStructRipeGetRipeIds)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ripeGetRipeIds($_ovhStructRipeGetRipeIds->getSession()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named ripeUpdateInetnum
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructRipeUpdateInetnum::getSession()
	 * @uses OvhStructRipeUpdateInetnum::getBlock()
	 * @uses OvhStructRipeUpdateInetnum::getNetname()
	 * @uses OvhStructRipeUpdateInetnum::getDescr()
	 * @uses OvhStructRipeUpdateInetnum::getRipeId()
	 * @param OvhStructRipeUpdateInetnum $_ovhStructRipeUpdateInetnum
	 * @return OvhStructRipeUpdateInetnumResponse
	 */
	public function ripeUpdateInetnum(OvhStructRipeUpdateInetnum $_ovhStructRipeUpdateInetnum)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ripeUpdateInetnum($_ovhStructRipeUpdateInetnum->getSession(),$_ovhStructRipeUpdateInetnum->getBlock(),$_ovhStructRipeUpdateInetnum->getNetname(),$_ovhStructRipeUpdateInetnum->getDescr(),$_ovhStructRipeUpdateInetnum->getRipeId()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named ripeQuery
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructRipeQuery::getSession()
	 * @uses OvhStructRipeQuery::getSearch()
	 * @uses OvhStructRipeQuery::getType()
	 * @param OvhStructRipeQuery $_ovhStructRipeQuery
	 * @return OvhStructRipeQueryResponse
	 */
	public function ripeQuery(OvhStructRipeQuery $_ovhStructRipeQuery)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ripeQuery($_ovhStructRipeQuery->getSession(),$_ovhStructRipeQuery->getSearch(),$_ovhStructRipeQuery->getType()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named ripeDeleteOrganisation
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructRipeDeleteOrganisation::getSession()
	 * @uses OvhStructRipeDeleteOrganisation::getRipeId()
	 * @uses OvhStructRipeDeleteOrganisation::getComment()
	 * @param OvhStructRipeDeleteOrganisation $_ovhStructRipeDeleteOrganisation
	 * @return OvhStructRipeDeleteOrganisationResponse
	 */
	public function ripeDeleteOrganisation(OvhStructRipeDeleteOrganisation $_ovhStructRipeDeleteOrganisation)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ripeDeleteOrganisation($_ovhStructRipeDeleteOrganisation->getSession(),$_ovhStructRipeDeleteOrganisation->getRipeId(),$_ovhStructRipeDeleteOrganisation->getComment()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named ripeUpdateOrganisation
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructRipeUpdateOrganisation::getSession()
	 * @uses OvhStructRipeUpdateOrganisation::getRipeId()
	 * @uses OvhStructRipeUpdateOrganisation::getName()
	 * @uses OvhStructRipeUpdateOrganisation::getAddress()
	 * @uses OvhStructRipeUpdateOrganisation::getEmail()
	 * @uses OvhStructRipeUpdateOrganisation::getAbuse()
	 * @uses OvhStructRipeUpdateOrganisation::getDescr()
	 * @uses OvhStructRipeUpdateOrganisation::getPhone()
	 * @uses OvhStructRipeUpdateOrganisation::getFax()
	 * @uses OvhStructRipeUpdateOrganisation::getRemarks()
	 * @param OvhStructRipeUpdateOrganisation $_ovhStructRipeUpdateOrganisation
	 * @return OvhStructRipeUpdateOrganisationResponse
	 */
	public function ripeUpdateOrganisation(OvhStructRipeUpdateOrganisation $_ovhStructRipeUpdateOrganisation)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ripeUpdateOrganisation($_ovhStructRipeUpdateOrganisation->getSession(),$_ovhStructRipeUpdateOrganisation->getRipeId(),$_ovhStructRipeUpdateOrganisation->getName(),$_ovhStructRipeUpdateOrganisation->getAddress(),$_ovhStructRipeUpdateOrganisation->getEmail(),$_ovhStructRipeUpdateOrganisation->getAbuse(),$_ovhStructRipeUpdateOrganisation->getDescr(),$_ovhStructRipeUpdateOrganisation->getPhone(),$_ovhStructRipeUpdateOrganisation->getFax(),$_ovhStructRipeUpdateOrganisation->getRemarks()));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Method to call the operation originally named ripeCreateOrganisation
	 * @uses OvhWsdlClass::getSoapClient()
	 * @uses OvhWsdlClass::setResult()
	 * @uses OvhWsdlClass::getResult()
	 * @uses OvhWsdlClass::saveLastError()
	 * @uses OvhStructRipeCreateOrganisation::getSession()
	 * @uses OvhStructRipeCreateOrganisation::getName()
	 * @uses OvhStructRipeCreateOrganisation::getAddress()
	 * @uses OvhStructRipeCreateOrganisation::getEmail()
	 * @uses OvhStructRipeCreateOrganisation::getAbuse()
	 * @uses OvhStructRipeCreateOrganisation::getDescr()
	 * @uses OvhStructRipeCreateOrganisation::getPhone()
	 * @uses OvhStructRipeCreateOrganisation::getFax()
	 * @uses OvhStructRipeCreateOrganisation::getRemarks()
	 * @param OvhStructRipeCreateOrganisation $_ovhStructRipeCreateOrganisation
	 * @return OvhStructRipeCreateOrganisationResponse
	 */
	public function ripeCreateOrganisation(OvhStructRipeCreateOrganisation $_ovhStructRipeCreateOrganisation)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ripeCreateOrganisation($_ovhStructRipeCreateOrganisation->getSession(),$_ovhStructRipeCreateOrganisation->getName(),$_ovhStructRipeCreateOrganisation->getAddress(),$_ovhStructRipeCreateOrganisation->getEmail(),$_ovhStructRipeCreateOrganisation->getAbuse(),$_ovhStructRipeCreateOrganisation->getDescr(),$_ovhStructRipeCreateOrganisation->getPhone(),$_ovhStructRipeCreateOrganisation->getFax(),$_ovhStructRipeCreateOrganisation->getRemarks()));
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
	 * @return OvhStructRipeCreateOrganisationResponse|OvhStructRipeDeleteOrganisationResponse|OvhStructRipeGetRipeIdsResponse|OvhStructRipeQueryResponse|OvhStructRipeUpdateInetnumResponse|OvhStructRipeUpdateOrganisationResponse
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