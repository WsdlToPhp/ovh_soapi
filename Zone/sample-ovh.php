<?php
/**
 * Test with Ovh
 * @package Ovh
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
ini_set('memory_limit','512M');
ini_set('display_errors', true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/OvhAutoload.php';
/**
 * Ovh Informations
 */
define('OVH_WSDL_URL','http://www.ovh.com/soapi/soapi-re-1.61.wsdl');
define('OVH_USER_LOGIN','');
define('OVH_USER_PASSWORD','');
/**
 * Wsdl instanciation infos
 */
$wsdl = array();
$wsdl[OvhWsdlClass::WSDL_URL] = OVH_WSDL_URL;
$wsdl[OvhWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
$wsdl[OvhWsdlClass::WSDL_TRACE] = true;
if(OVH_USER_LOGIN !== '')
	$wsdl[OvhWsdlClass::WSDL_LOGIN] = OVH_USER_LOGIN;
if(OVH_USER_PASSWORD !== '')
	$wsdl[OvhWsdlClass::WSDL_PASSWD] = OVH_USER_PASSWORD;
// etc....
/**
 * Examples
 */


/*******************************
 * Example for OvhServiceMailing
 */
$ovhServiceMailing = new OvhServiceMailing($wsdl);
// sample call for OvhServiceMailing::mailingListModeratorDel()
if($ovhServiceMailing->mailingListModeratorDel(new OvhStructMailingListModeratorDel(/*** update parameters list ***/)))
	print_r($ovhServiceMailing->getResult());
else
	print_r($ovhServiceMailing->getLastError());
// sample call for OvhServiceMailing::mailingListModeratorList()
if($ovhServiceMailing->mailingListModeratorList(new OvhStructMailingListModeratorList(/*** update parameters list ***/)))
	print_r($ovhServiceMailing->getResult());
else
	print_r($ovhServiceMailing->getLastError());
// sample call for OvhServiceMailing::mailingListFullInfo()
if($ovhServiceMailing->mailingListFullInfo(new OvhStructMailingListFullInfo(/*** update parameters list ***/)))
	print_r($ovhServiceMailing->getResult());
else
	print_r($ovhServiceMailing->getLastError());
// sample call for OvhServiceMailing::mailingListDel()
if($ovhServiceMailing->mailingListDel(new OvhStructMailingListDel(/*** update parameters list ***/)))
	print_r($ovhServiceMailing->getResult());
else
	print_r($ovhServiceMailing->getLastError());
// sample call for OvhServiceMailing::mailingListSubscriberAdd()
if($ovhServiceMailing->mailingListSubscriberAdd(new OvhStructMailingListSubscriberAdd(/*** update parameters list ***/)))
	print_r($ovhServiceMailing->getResult());
else
	print_r($ovhServiceMailing->getLastError());
// sample call for OvhServiceMailing::mailingListModeratorAdd()
if($ovhServiceMailing->mailingListModeratorAdd(new OvhStructMailingListModeratorAdd(/*** update parameters list ***/)))
	print_r($ovhServiceMailing->getResult());
else
	print_r($ovhServiceMailing->getLastError());
// sample call for OvhServiceMailing::mailingListSubscriberList()
if($ovhServiceMailing->mailingListSubscriberList(new OvhStructMailingListSubscriberList(/*** update parameters list ***/)))
	print_r($ovhServiceMailing->getResult());
else
	print_r($ovhServiceMailing->getLastError());
// sample call for OvhServiceMailing::mailingListSubscriberDel()
if($ovhServiceMailing->mailingListSubscriberDel(new OvhStructMailingListSubscriberDel(/*** update parameters list ***/)))
	print_r($ovhServiceMailing->getResult());
else
	print_r($ovhServiceMailing->getLastError());
// sample call for OvhServiceMailing::mailingListInfo()
if($ovhServiceMailing->mailingListInfo(new OvhStructMailingListInfo(/*** update parameters list ***/)))
	print_r($ovhServiceMailing->getResult());
else
	print_r($ovhServiceMailing->getLastError());
// sample call for OvhServiceMailing::mailingListModify()
if($ovhServiceMailing->mailingListModify(new OvhStructMailingListModify(/*** update parameters list ***/)))
	print_r($ovhServiceMailing->getResult());
else
	print_r($ovhServiceMailing->getLastError());
// sample call for OvhServiceMailing::mailingListAdd()
if($ovhServiceMailing->mailingListAdd(new OvhStructMailingListAdd(/*** update parameters list ***/)))
	print_r($ovhServiceMailing->getResult());
else
	print_r($ovhServiceMailing->getLastError());
// sample call for OvhServiceMailing::mailingListList()
if($ovhServiceMailing->mailingListList(new OvhStructMailingListList(/*** update parameters list ***/)))
	print_r($ovhServiceMailing->getResult());
else
	print_r($ovhServiceMailing->getLastError());
// sample call for OvhServiceMailing::mailingListSubscriberListByEmail()
if($ovhServiceMailing->mailingListSubscriberListByEmail(new OvhStructMailingListSubscriberListByEmail(/*** update parameters list ***/)))
	print_r($ovhServiceMailing->getResult());
else
	print_r($ovhServiceMailing->getLastError());

/*********************************
 * Example for OvhServiceTelephony
 */
$ovhServiceTelephony = new OvhServiceTelephony($wsdl);
// sample call for OvhServiceTelephony::telephonyNumberInfo()
if($ovhServiceTelephony->telephonyNumberInfo(new OvhStructTelephonyNumberInfo(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyVoicemailOptionsList()
if($ovhServiceTelephony->telephonyVoicemailOptionsList(new OvhStructTelephonyVoicemailOptionsList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPhonebookSharePeerList()
if($ovhServiceTelephony->telephonyPhonebookSharePeerList(new OvhStructTelephonyPhonebookSharePeerList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyRedirectModify()
if($ovhServiceTelephony->telephonyRedirectModify(new OvhStructTelephonyRedirectModify(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyNumberModify()
if($ovhServiceTelephony->telephonyNumberModify(new OvhStructTelephonyNumberModify(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyGetCitiesFromZip()
if($ovhServiceTelephony->telephonyGetCitiesFromZip(new OvhStructTelephonyGetCitiesFromZip(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsplusSendSmsMt()
if($ovhServiceTelephony->telephonySmsplusSendSmsMt(new OvhStructTelephonySmsplusSendSmsMt(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsUserGetCsvAttachment()
if($ovhServiceTelephony->telephonySmsUserGetCsvAttachment(new OvhStructTelephonySmsUserGetCsvAttachment(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPhonebookOnSmsList()
if($ovhServiceTelephony->telephonyPhonebookOnSmsList(new OvhStructTelephonyPhonebookOnSmsList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySetClosureEvents()
if($ovhServiceTelephony->telephonySetClosureEvents(new OvhStructTelephonySetClosureEvents(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyNicSetSipDomain()
if($ovhServiceTelephony->telephonyNicSetSipDomain(new OvhStructTelephonyNicSetSipDomain(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsMultiSend()
if($ovhServiceTelephony->telephonySmsMultiSend(new OvhStructTelephonySmsMultiSend(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsUserAddCsvAttachment()
if($ovhServiceTelephony->telephonySmsUserAddCsvAttachment(new OvhStructTelephonySmsUserAddCsvAttachment(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySpareDel()
if($ovhServiceTelephony->telephonySpareDel(new OvhStructTelephonySpareDel(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyFaxHistory()
if($ovhServiceTelephony->telephonyFaxHistory(new OvhStructTelephonyFaxHistory(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyFreefaxToVoicefax()
if($ovhServiceTelephony->telephonyFreefaxToVoicefax(new OvhStructTelephonyFreefaxToVoicefax(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyFaxSend()
if($ovhServiceTelephony->telephonyFaxSend(new OvhStructTelephonyFaxSend(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyRestrictionList()
if($ovhServiceTelephony->telephonyRestrictionList(new OvhStructTelephonyRestrictionList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyBillList()
if($ovhServiceTelephony->telephonyBillList(new OvhStructTelephonyBillList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyNumberCustomList()
if($ovhServiceTelephony->telephonyNumberCustomList(new OvhStructTelephonyNumberCustomList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPlugAndPhoneSkinModify()
if($ovhServiceTelephony->telephonyPlugAndPhoneSkinModify(new OvhStructTelephonyPlugAndPhoneSkinModify(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyFaxOptionsModify()
if($ovhServiceTelephony->telephonyFaxOptionsModify(new OvhStructTelephonyFaxOptionsModify(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyBillingAccountSummary()
if($ovhServiceTelephony->telephonyBillingAccountSummary(new OvhStructTelephonyBillingAccountSummary(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyConferenceSetAnnounceFile()
if($ovhServiceTelephony->telephonyConferenceSetAnnounceFile(new OvhStructTelephonyConferenceSetAnnounceFile(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPhonebookOnSmsAdd()
if($ovhServiceTelephony->telephonyPhonebookOnSmsAdd(new OvhStructTelephonyPhonebookOnSmsAdd(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyClick2CallUserDel()
if($ovhServiceTelephony->telephonyClick2CallUserDel(new OvhStructTelephonyClick2CallUserDel(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsAccountList()
if($ovhServiceTelephony->telephonySmsAccountList(new OvhStructTelephonySmsAccountList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyBillingAccountConsumptionCSVByMail()
if($ovhServiceTelephony->telephonyBillingAccountConsumptionCSVByMail(new OvhStructTelephonyBillingAccountConsumptionCSVByMail(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyFMHuntingModificationVoicemail()
if($ovhServiceTelephony->telephonyFMHuntingModificationVoicemail(new OvhStructTelephonyFMHuntingModificationVoicemail(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyOrdersFollowingUp()
if($ovhServiceTelephony->telephonyOrdersFollowingUp(new OvhStructTelephonyOrdersFollowingUp(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPhonebookOnGroupContactAdd()
if($ovhServiceTelephony->telephonyPhonebookOnGroupContactAdd(new OvhStructTelephonyPhonebookOnGroupContactAdd(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyBillDetailsCSV()
if($ovhServiceTelephony->telephonyBillDetailsCSV(new OvhStructTelephonyBillDetailsCSV(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsCreditLeft()
if($ovhServiceTelephony->telephonySmsCreditLeft(new OvhStructTelephonySmsCreditLeft(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyDirectoryPJCode()
if($ovhServiceTelephony->telephonyDirectoryPJCode(new OvhStructTelephonyDirectoryPJCode(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyListSummationCallsFromBillingAccount()
if($ovhServiceTelephony->telephonyListSummationCallsFromBillingAccount(new OvhStructTelephonyListSummationCallsFromBillingAccount(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyBillingAccountDescriptionModify()
if($ovhServiceTelephony->telephonyBillingAccountDescriptionModify(new OvhStructTelephonyBillingAccountDescriptionModify(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyAbbreviatedNumberDel()
if($ovhServiceTelephony->telephonyAbbreviatedNumberDel(new OvhStructTelephonyAbbreviatedNumberDel(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyFaxOptionsList()
if($ovhServiceTelephony->telephonyFaxOptionsList(new OvhStructTelephonyFaxOptionsList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyTrunkExternalDisplayedNumberAdd()
if($ovhServiceTelephony->telephonyTrunkExternalDisplayedNumberAdd(new OvhStructTelephonyTrunkExternalDisplayedNumberAdd(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyBillingAccountSet()
if($ovhServiceTelephony->telephonyBillingAccountSet(new OvhStructTelephonyBillingAccountSet(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyDepositMovementModify()
if($ovhServiceTelephony->telephonyDepositMovementModify(new OvhStructTelephonyDepositMovementModify(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyClick2CallDo()
if($ovhServiceTelephony->telephonyClick2CallDo(new OvhStructTelephonyClick2CallDo(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySpecialNumberOrder()
if($ovhServiceTelephony->telephonySpecialNumberOrder(new OvhStructTelephonySpecialNumberOrder(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyVoicemailOptionsModify()
if($ovhServiceTelephony->telephonyVoicemailOptionsModify(new OvhStructTelephonyVoicemailOptionsModify(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyLineSwitchOldOffer()
if($ovhServiceTelephony->telephonyLineSwitchOldOffer(new OvhStructTelephonyLineSwitchOldOffer(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPhonebookOnGroupContactDel()
if($ovhServiceTelephony->telephonyPhonebookOnGroupContactDel(new OvhStructTelephonyPhonebookOnGroupContactDel(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySpareAdd()
if($ovhServiceTelephony->telephonySpareAdd(new OvhStructTelephonySpareAdd(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsAddCsvAttachment()
if($ovhServiceTelephony->telephonySmsAddCsvAttachment(new OvhStructTelephonySmsAddCsvAttachment(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyDefaultPrivateHolidaysEvents()
if($ovhServiceTelephony->telephonyDefaultPrivateHolidaysEvents(new OvhStructTelephonyDefaultPrivateHolidaysEvents(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyToneRemoteUpload()
if($ovhServiceTelephony->telephonyToneRemoteUpload(new OvhStructTelephonyToneRemoteUpload(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyNumberGetFrWayNamesFromInsee()
if($ovhServiceTelephony->telephonyNumberGetFrWayNamesFromInsee(new OvhStructTelephonyNumberGetFrWayNamesFromInsee(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyFMHuntingModificationMode()
if($ovhServiceTelephony->telephonyFMHuntingModificationMode(new OvhStructTelephonyFMHuntingModificationMode(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyAliasToSipOffer()
if($ovhServiceTelephony->telephonyAliasToSipOffer(new OvhStructTelephonyAliasToSipOffer(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsUserMultiSend()
if($ovhServiceTelephony->telephonySmsUserMultiSend(new OvhStructTelephonySmsUserMultiSend(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsGetCsvAttachment()
if($ovhServiceTelephony->telephonySmsGetCsvAttachment(new OvhStructTelephonySmsGetCsvAttachment(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsHistory()
if($ovhServiceTelephony->telephonySmsHistory(new OvhStructTelephonySmsHistory(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyAbbreviatedNumberOnGroupModify()
if($ovhServiceTelephony->telephonyAbbreviatedNumberOnGroupModify(new OvhStructTelephonyAbbreviatedNumberOnGroupModify(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyHuntingGenericScreenList()
if($ovhServiceTelephony->telephonyHuntingGenericScreenList(new OvhStructTelephonyHuntingGenericScreenList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyHuntingGenericScreenStatus()
if($ovhServiceTelephony->telephonyHuntingGenericScreenStatus(new OvhStructTelephonyHuntingGenericScreenStatus(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyHuntingModificationMembers()
if($ovhServiceTelephony->telephonyHuntingModificationMembers(new OvhStructTelephonyHuntingModificationMembers(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyVoicemailMessagesDownload()
if($ovhServiceTelephony->telephonyVoicemailMessagesDownload(new OvhStructTelephonyVoicemailMessagesDownload(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyFaxCampaignCreation()
if($ovhServiceTelephony->telephonyFaxCampaignCreation(new OvhStructTelephonyFaxCampaignCreation(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyLineLogsNotificationOptions()
if($ovhServiceTelephony->telephonyLineLogsNotificationOptions(new OvhStructTelephonyLineLogsNotificationOptions(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyLineGetIpRestriction()
if($ovhServiceTelephony->telephonyLineGetIpRestriction(new OvhStructTelephonyLineGetIpRestriction(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyGetTimeZoneNumber()
if($ovhServiceTelephony->telephonyGetTimeZoneNumber(new OvhStructTelephonyGetTimeZoneNumber(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyFMHuntingModificationMembers()
if($ovhServiceTelephony->telephonyFMHuntingModificationMembers(new OvhStructTelephonyFMHuntingModificationMembers(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPhonebookAdd()
if($ovhServiceTelephony->telephonyPhonebookAdd(new OvhStructTelephonyPhonebookAdd(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyRestrictionModify()
if($ovhServiceTelephony->telephonyRestrictionModify(new OvhStructTelephonyRestrictionModify(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyRatesList()
if($ovhServiceTelephony->telephonyRatesList(new OvhStructTelephonyRatesList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyHuntingGenericScreenOptions()
if($ovhServiceTelephony->telephonyHuntingGenericScreenOptions(new OvhStructTelephonyHuntingGenericScreenOptions(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyBillingAccountAdd()
if($ovhServiceTelephony->telephonyBillingAccountAdd(new OvhStructTelephonyBillingAccountAdd(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsplusIsFreeKeyword()
if($ovhServiceTelephony->telephonySmsplusIsFreeKeyword(new OvhStructTelephonySmsplusIsFreeKeyword(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyLineGetCodecs()
if($ovhServiceTelephony->telephonyLineGetCodecs(new OvhStructTelephonyLineGetCodecs(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsSenderValidate()
if($ovhServiceTelephony->telephonySmsSenderValidate(new OvhStructTelephonySmsSenderValidate(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyHuntingModificationSimultaneousCalls()
if($ovhServiceTelephony->telephonyHuntingModificationSimultaneousCalls(new OvhStructTelephonyHuntingModificationSimultaneousCalls(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyDirectoryInfoGetSameSiret()
if($ovhServiceTelephony->telephonyDirectoryInfoGetSameSiret(new OvhStructTelephonyDirectoryInfoGetSameSiret(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyConferenceSetParams()
if($ovhServiceTelephony->telephonyConferenceSetParams(new OvhStructTelephonyConferenceSetParams(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySparePurchase()
if($ovhServiceTelephony->telephonySparePurchase(new OvhStructTelephonySparePurchase(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyFaxCampaignList()
if($ovhServiceTelephony->telephonyFaxCampaignList(new OvhStructTelephonyFaxCampaignList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyNicGetMgcpIpRestriction()
if($ovhServiceTelephony->telephonyNicGetMgcpIpRestriction(new OvhStructTelephonyNicGetMgcpIpRestriction(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsGetUserQuotaForUser()
if($ovhServiceTelephony->telephonySmsGetUserQuotaForUser(new OvhStructTelephonySmsGetUserQuotaForUser(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyDirectoryInfoGetSiret()
if($ovhServiceTelephony->telephonyDirectoryInfoGetSiret(new OvhStructTelephonyDirectoryInfoGetSiret(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyFunctionKeyModify()
if($ovhServiceTelephony->telephonyFunctionKeyModify(new OvhStructTelephonyFunctionKeyModify(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyAbbreviatedNumberList()
if($ovhServiceTelephony->telephonyAbbreviatedNumberList(new OvhStructTelephonyAbbreviatedNumberList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyFaxModifyPassword()
if($ovhServiceTelephony->telephonyFaxModifyPassword(new OvhStructTelephonyFaxModifyPassword(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsDelete()
if($ovhServiceTelephony->telephonySmsDelete(new OvhStructTelephonySmsDelete(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyDirectoryModifyPublication()
if($ovhServiceTelephony->telephonyDirectoryModifyPublication(new OvhStructTelephonyDirectoryModifyPublication(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPhonebookOnGroupAdd()
if($ovhServiceTelephony->telephonyPhonebookOnGroupAdd(new OvhStructTelephonyPhonebookOnGroupAdd(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyLineSwitchOfferPossibility()
if($ovhServiceTelephony->telephonyLineSwitchOfferPossibility(new OvhStructTelephonyLineSwitchOfferPossibility(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsSenderList()
if($ovhServiceTelephony->telephonySmsSenderList(new OvhStructTelephonySmsSenderList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySipToAliasOffer()
if($ovhServiceTelephony->telephonySipToAliasOffer(new OvhStructTelephonySipToAliasOffer(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyFunctionKeyList()
if($ovhServiceTelephony->telephonyFunctionKeyList(new OvhStructTelephonyFunctionKeyList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsGetCallBack()
if($ovhServiceTelephony->telephonySmsGetCallBack(new OvhStructTelephonySmsGetCallBack(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySviModify()
if($ovhServiceTelephony->telephonySviModify(new OvhStructTelephonySviModify(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsplusServiceDelete()
if($ovhServiceTelephony->telephonySmsplusServiceDelete(new OvhStructTelephonySmsplusServiceDelete(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyLineSwitchOffer()
if($ovhServiceTelephony->telephonyLineSwitchOffer(new OvhStructTelephonyLineSwitchOffer(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyTrunkExternalDisplayedNumberCheck()
if($ovhServiceTelephony->telephonyTrunkExternalDisplayedNumberCheck(new OvhStructTelephonyTrunkExternalDisplayedNumberCheck(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyDelClosureEvents()
if($ovhServiceTelephony->telephonyDelClosureEvents(new OvhStructTelephonyDelClosureEvents(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyFreefaxToVoicefaxCheckList()
if($ovhServiceTelephony->telephonyFreefaxToVoicefaxCheckList(new OvhStructTelephonyFreefaxToVoicefaxCheckList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyVoicemailModifyPassword()
if($ovhServiceTelephony->telephonyVoicemailModifyPassword(new OvhStructTelephonyVoicemailModifyPassword(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySpareCapabilities()
if($ovhServiceTelephony->telephonySpareCapabilities(new OvhStructTelephonySpareCapabilities(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPhonebookOnSmsDel()
if($ovhServiceTelephony->telephonyPhonebookOnSmsDel(new OvhStructTelephonyPhonebookOnSmsDel(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPhonebookShare()
if($ovhServiceTelephony->telephonyPhonebookShare(new OvhStructTelephonyPhonebookShare(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsSetUserQuota()
if($ovhServiceTelephony->telephonySmsSetUserQuota(new OvhStructTelephonySmsSetUserQuota(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsHistoryCsv()
if($ovhServiceTelephony->telephonySmsHistoryCsv(new OvhStructTelephonySmsHistoryCsv(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyAbbreviatedNumberOnGroupList()
if($ovhServiceTelephony->telephonyAbbreviatedNumberOnGroupList(new OvhStructTelephonyAbbreviatedNumberOnGroupList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyLineLogs()
if($ovhServiceTelephony->telephonyLineLogs(new OvhStructTelephonyLineLogs(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySpareReplace()
if($ovhServiceTelephony->telephonySpareReplace(new OvhStructTelephonySpareReplace(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyClick2CallUserList()
if($ovhServiceTelephony->telephonyClick2CallUserList(new OvhStructTelephonyClick2CallUserList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyVoicemailMailboxList()
if($ovhServiceTelephony->telephonyVoicemailMailboxList(new OvhStructTelephonyVoicemailMailboxList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyFaxCampaignDetails()
if($ovhServiceTelephony->telephonyFaxCampaignDetails(new OvhStructTelephonyFaxCampaignDetails(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPhonebookOnGroupDel()
if($ovhServiceTelephony->telephonyPhonebookOnGroupDel(new OvhStructTelephonyPhonebookOnGroupDel(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPhonebookOnGroupList()
if($ovhServiceTelephony->telephonyPhonebookOnGroupList(new OvhStructTelephonyPhonebookOnGroupList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySpecialNumberCustomList()
if($ovhServiceTelephony->telephonySpecialNumberCustomList(new OvhStructTelephonySpecialNumberCustomList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyFMHuntingModificationSimultaneousCalls()
if($ovhServiceTelephony->telephonyFMHuntingModificationSimultaneousCalls(new OvhStructTelephonyFMHuntingModificationSimultaneousCalls(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyVoicemailMailboxDownload()
if($ovhServiceTelephony->telephonyVoicemailMailboxDownload(new OvhStructTelephonyVoicemailMailboxDownload(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyNicGetIpRestriction()
if($ovhServiceTelephony->telephonyNicGetIpRestriction(new OvhStructTelephonyNicGetIpRestriction(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyGetClosureEventsAsArray()
if($ovhServiceTelephony->telephonyGetClosureEventsAsArray(new OvhStructTelephonyGetClosureEventsAsArray(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPhonebookOnSmsContactDel()
if($ovhServiceTelephony->telephonyPhonebookOnSmsContactDel(new OvhStructTelephonyPhonebookOnSmsContactDel(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyReversmentsRefundIsPending()
if($ovhServiceTelephony->telephonyReversmentsRefundIsPending(new OvhStructTelephonyReversmentsRefundIsPending(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyScreenListInfoModify()
if($ovhServiceTelephony->telephonyScreenListInfoModify(new OvhStructTelephonyScreenListInfoModify(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsplusServiceReversableTicketsList()
if($ovhServiceTelephony->telephonySmsplusServiceReversableTicketsList(new OvhStructTelephonySmsplusServiceReversableTicketsList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyHuntingGenericScreenStatusModify()
if($ovhServiceTelephony->telephonyHuntingGenericScreenStatusModify(new OvhStructTelephonyHuntingGenericScreenStatusModify(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsBlacklistedSendersList()
if($ovhServiceTelephony->telephonySmsBlacklistedSendersList(new OvhStructTelephonySmsBlacklistedSendersList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPhonebookContactAdd()
if($ovhServiceTelephony->telephonyPhonebookContactAdd(new OvhStructTelephonyPhonebookContactAdd(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPortabilityOrderSpecialNumber()
if($ovhServiceTelephony->telephonyPortabilityOrderSpecialNumber(new OvhStructTelephonyPortabilityOrderSpecialNumber(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsUserSetCallBack()
if($ovhServiceTelephony->telephonySmsUserSetCallBack(new OvhStructTelephonySmsUserSetCallBack(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPhonebookOnGroupModify()
if($ovhServiceTelephony->telephonyPhonebookOnGroupModify(new OvhStructTelephonyPhonebookOnGroupModify(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyLineSwitchOldOfferPossibility()
if($ovhServiceTelephony->telephonyLineSwitchOldOfferPossibility(new OvhStructTelephonyLineSwitchOldOfferPossibility(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsplusServiceList()
if($ovhServiceTelephony->telephonySmsplusServiceList(new OvhStructTelephonySmsplusServiceList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyHuntingModificationAnonymousCallRejection()
if($ovhServiceTelephony->telephonyHuntingModificationAnonymousCallRejection(new OvhStructTelephonyHuntingModificationAnonymousCallRejection(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyNumberGetBillingAccount()
if($ovhServiceTelephony->telephonyNumberGetBillingAccount(new OvhStructTelephonyNumberGetBillingAccount(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyTonesOptionsList()
if($ovhServiceTelephony->telephonyTonesOptionsList(new OvhStructTelephonyTonesOptionsList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySpareList()
if($ovhServiceTelephony->telephonySpareList(new OvhStructTelephonySpareList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyListSummationCallsFromNumber()
if($ovhServiceTelephony->telephonyListSummationCallsFromNumber(new OvhStructTelephonyListSummationCallsFromNumber(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyConferenceGetParams()
if($ovhServiceTelephony->telephonyConferenceGetParams(new OvhStructTelephonyConferenceGetParams(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPhonebookContactModify()
if($ovhServiceTelephony->telephonyPhonebookContactModify(new OvhStructTelephonyPhonebookContactModify(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyLineList()
if($ovhServiceTelephony->telephonyLineList(new OvhStructTelephonyLineList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyLineOptionsModify()
if($ovhServiceTelephony->telephonyLineOptionsModify(new OvhStructTelephonyLineOptionsModify(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyHuntingGenericScreenSet()
if($ovhServiceTelephony->telephonyHuntingGenericScreenSet(new OvhStructTelephonyHuntingGenericScreenSet(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyFaxCampaignStartStop()
if($ovhServiceTelephony->telephonyFaxCampaignStartStop(new OvhStructTelephonyFaxCampaignStartStop(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyDirectoryModifyAddress()
if($ovhServiceTelephony->telephonyDirectoryModifyAddress(new OvhStructTelephonyDirectoryModifyAddress(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyNicSetMgcpIpRestriction()
if($ovhServiceTelephony->telephonyNicSetMgcpIpRestriction(new OvhStructTelephonyNicSetMgcpIpRestriction(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySecurityDepositCredit()
if($ovhServiceTelephony->telephonySecurityDepositCredit(new OvhStructTelephonySecurityDepositCredit(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyLineOrder()
if($ovhServiceTelephony->telephonyLineOrder(new OvhStructTelephonyLineOrder(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyConferenceAction()
if($ovhServiceTelephony->telephonyConferenceAction(new OvhStructTelephonyConferenceAction(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyFunctionKeyDel()
if($ovhServiceTelephony->telephonyFunctionKeyDel(new OvhStructTelephonyFunctionKeyDel(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyNicGetSipDomain()
if($ovhServiceTelephony->telephonyNicGetSipDomain(new OvhStructTelephonyNicGetSipDomain(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyGetClosureEventsAsICS()
if($ovhServiceTelephony->telephonyGetClosureEventsAsICS(new OvhStructTelephonyGetClosureEventsAsICS(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsUserCreditLeft()
if($ovhServiceTelephony->telephonySmsUserCreditLeft(new OvhStructTelephonySmsUserCreditLeft(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPortabilityOrder()
if($ovhServiceTelephony->telephonyPortabilityOrder(new OvhStructTelephonyPortabilityOrder(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyVoicemailMailboxDelete()
if($ovhServiceTelephony->telephonyVoicemailMailboxDelete(new OvhStructTelephonyVoicemailMailboxDelete(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyBillingAccountDel()
if($ovhServiceTelephony->telephonyBillingAccountDel(new OvhStructTelephonyBillingAccountDel(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyNumberClean()
if($ovhServiceTelephony->telephonyNumberClean(new OvhStructTelephonyNumberClean(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPlugAndPhoneOperation()
if($ovhServiceTelephony->telephonyPlugAndPhoneOperation(new OvhStructTelephonyPlugAndPhoneOperation(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPhonebookOnSmsContactModify()
if($ovhServiceTelephony->telephonyPhonebookOnSmsContactModify(new OvhStructTelephonyPhonebookOnSmsContactModify(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPhonebookOnSmsModify()
if($ovhServiceTelephony->telephonyPhonebookOnSmsModify(new OvhStructTelephonyPhonebookOnSmsModify(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsSetQuotaNotification()
if($ovhServiceTelephony->telephonySmsSetQuotaNotification(new OvhStructTelephonySmsSetQuotaNotification(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsUserList()
if($ovhServiceTelephony->telephonySmsUserList(new OvhStructTelephonySmsUserList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyHuntingInfo()
if($ovhServiceTelephony->telephonyHuntingInfo(new OvhStructTelephonyHuntingInfo(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPhonebookContactList()
if($ovhServiceTelephony->telephonyPhonebookContactList(new OvhStructTelephonyPhonebookContactList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsUserPassword()
if($ovhServiceTelephony->telephonySmsUserPassword(new OvhStructTelephonySmsUserPassword(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyLineGetOfferPrices()
if($ovhServiceTelephony->telephonyLineGetOfferPrices(new OvhStructTelephonyLineGetOfferPrices(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsGetQuotaNotification()
if($ovhServiceTelephony->telephonySmsGetQuotaNotification(new OvhStructTelephonySmsGetQuotaNotification(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyHuntingModificationMode()
if($ovhServiceTelephony->telephonyHuntingModificationMode(new OvhStructTelephonyHuntingModificationMode(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyScreenListBlackWhiteChoice()
if($ovhServiceTelephony->telephonyScreenListBlackWhiteChoice(new OvhStructTelephonyScreenListBlackWhiteChoice(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsDeleteCsvAttachment()
if($ovhServiceTelephony->telephonySmsDeleteCsvAttachment(new OvhStructTelephonySmsDeleteCsvAttachment(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyNumberZoneAndPrefixList()
if($ovhServiceTelephony->telephonyNumberZoneAndPrefixList(new OvhStructTelephonyNumberZoneAndPrefixList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyLineSetSipDomain()
if($ovhServiceTelephony->telephonyLineSetSipDomain(new OvhStructTelephonyLineSetSipDomain(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyTrunkExternalDisplayedNumberDel()
if($ovhServiceTelephony->telephonyTrunkExternalDisplayedNumberDel(new OvhStructTelephonyTrunkExternalDisplayedNumberDel(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPhonebookOnGroupContactList()
if($ovhServiceTelephony->telephonyPhonebookOnGroupContactList(new OvhStructTelephonyPhonebookOnGroupContactList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsplusServiceReversableTicketsSummary()
if($ovhServiceTelephony->telephonySmsplusServiceReversableTicketsSummary(new OvhStructTelephonySmsplusServiceReversableTicketsSummary(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyDeleteLine()
if($ovhServiceTelephony->telephonyDeleteLine(new OvhStructTelephonyDeleteLine(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySetTimeZoneNumber()
if($ovhServiceTelephony->telephonySetTimeZoneNumber(new OvhStructTelephonySetTimeZoneNumber(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyNicSetIpRestriction()
if($ovhServiceTelephony->telephonyNicSetIpRestriction(new OvhStructTelephonyNicSetIpRestriction(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPortabilityStatus()
if($ovhServiceTelephony->telephonyPortabilityStatus(new OvhStructTelephonyPortabilityStatus(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySecurityDepositInfo()
if($ovhServiceTelephony->telephonySecurityDepositInfo(new OvhStructTelephonySecurityDepositInfo(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsListCsvAttachment()
if($ovhServiceTelephony->telephonySmsListCsvAttachment(new OvhStructTelephonySmsListCsvAttachment(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsCancelSending()
if($ovhServiceTelephony->telephonySmsCancelSending(new OvhStructTelephonySmsCancelSending(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyScreenListInfo()
if($ovhServiceTelephony->telephonyScreenListInfo(new OvhStructTelephonyScreenListInfo(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyLineLogsOnGroup()
if($ovhServiceTelephony->telephonyLineLogsOnGroup(new OvhStructTelephonyLineLogsOnGroup(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyLineGetMgcpIpRestriction()
if($ovhServiceTelephony->telephonyLineGetMgcpIpRestriction(new OvhStructTelephonyLineGetMgcpIpRestriction(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyLineDetails()
if($ovhServiceTelephony->telephonyLineDetails(new OvhStructTelephonyLineDetails(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPhonebookContactDel()
if($ovhServiceTelephony->telephonyPhonebookContactDel(new OvhStructTelephonyPhonebookContactDel(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyRatesListCsv()
if($ovhServiceTelephony->telephonyRatesListCsv(new OvhStructTelephonyRatesListCsv(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyConferenceGetInfos()
if($ovhServiceTelephony->telephonyConferenceGetInfos(new OvhStructTelephonyConferenceGetInfos(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPhonebookOnSmsContactList()
if($ovhServiceTelephony->telephonyPhonebookOnSmsContactList(new OvhStructTelephonyPhonebookOnSmsContactList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPhonebookOnSmsContactAdd()
if($ovhServiceTelephony->telephonyPhonebookOnSmsContactAdd(new OvhStructTelephonyPhonebookOnSmsContactAdd(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyFMHuntingModificationAnonymousCallRejection()
if($ovhServiceTelephony->telephonyFMHuntingModificationAnonymousCallRejection(new OvhStructTelephonyFMHuntingModificationAnonymousCallRejection(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyDdiModify()
if($ovhServiceTelephony->telephonyDdiModify(new OvhStructTelephonyDdiModify(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyRedirectInfo()
if($ovhServiceTelephony->telephonyRedirectInfo(new OvhStructTelephonyRedirectInfo(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsSend()
if($ovhServiceTelephony->telephonySmsSend(new OvhStructTelephonySmsSend(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyLineGetSipDomain()
if($ovhServiceTelephony->telephonyLineGetSipDomain(new OvhStructTelephonyLineGetSipDomain(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyToneDelete()
if($ovhServiceTelephony->telephonyToneDelete(new OvhStructTelephonyToneDelete(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyLineSetMgcpIpRestriction()
if($ovhServiceTelephony->telephonyLineSetMgcpIpRestriction(new OvhStructTelephonyLineSetMgcpIpRestriction(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPhonebookOnGroupContactModify()
if($ovhServiceTelephony->telephonyPhonebookOnGroupContactModify(new OvhStructTelephonyPhonebookOnGroupContactModify(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyScreenListBlackWhiteChoiceModify()
if($ovhServiceTelephony->telephonyScreenListBlackWhiteChoiceModify(new OvhStructTelephonyScreenListBlackWhiteChoiceModify(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsplusServiceDetails()
if($ovhServiceTelephony->telephonySmsplusServiceDetails(new OvhStructTelephonySmsplusServiceDetails(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyAbbreviatedNumberOnGroupDel()
if($ovhServiceTelephony->telephonyAbbreviatedNumberOnGroupDel(new OvhStructTelephonyAbbreviatedNumberOnGroupDel(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsSenderDescription()
if($ovhServiceTelephony->telephonySmsSenderDescription(new OvhStructTelephonySmsSenderDescription(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyAbbreviatedNumberListPaginated()
if($ovhServiceTelephony->telephonyAbbreviatedNumberListPaginated(new OvhStructTelephonyAbbreviatedNumberListPaginated(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySetDefaultPrivateHolidaysEvents()
if($ovhServiceTelephony->telephonySetDefaultPrivateHolidaysEvents(new OvhStructTelephonySetDefaultPrivateHolidaysEvents(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySpareServiceList()
if($ovhServiceTelephony->telephonySpareServiceList(new OvhStructTelephonySpareServiceList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsUserListCsvAttachment()
if($ovhServiceTelephony->telephonySmsUserListCsvAttachment(new OvhStructTelephonySmsUserListCsvAttachment(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyFaxCallList()
if($ovhServiceTelephony->telephonyFaxCallList(new OvhStructTelephonyFaxCallList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsUserSend()
if($ovhServiceTelephony->telephonySmsUserSend(new OvhStructTelephonySmsUserSend(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPhonebookOnGroupGroupList()
if($ovhServiceTelephony->telephonyPhonebookOnGroupGroupList(new OvhStructTelephonyPhonebookOnGroupGroupList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyClick2CallUserPassword()
if($ovhServiceTelephony->telephonyClick2CallUserPassword(new OvhStructTelephonyClick2CallUserPassword(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsGetUserQuota()
if($ovhServiceTelephony->telephonySmsGetUserQuota(new OvhStructTelephonySmsGetUserQuota(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsSenderDelete()
if($ovhServiceTelephony->telephonySmsSenderDelete(new OvhStructTelephonySmsSenderDelete(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyToneStatus()
if($ovhServiceTelephony->telephonyToneStatus(new OvhStructTelephonyToneStatus(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyDdiInfo()
if($ovhServiceTelephony->telephonyDdiInfo(new OvhStructTelephonyDdiInfo(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyHuntingGroupList()
if($ovhServiceTelephony->telephonyHuntingGroupList(new OvhStructTelephonyHuntingGroupList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyTrunkExternalDisplayedNumberList()
if($ovhServiceTelephony->telephonyTrunkExternalDisplayedNumberList(new OvhStructTelephonyTrunkExternalDisplayedNumberList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyDirectoryListWayType()
if($ovhServiceTelephony->telephonyDirectoryListWayType(new OvhStructTelephonyDirectoryListWayType(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsUserHistoryCsv()
if($ovhServiceTelephony->telephonySmsUserHistoryCsv(new OvhStructTelephonySmsUserHistoryCsv(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyCallList()
if($ovhServiceTelephony->telephonyCallList(new OvhStructTelephonyCallList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyGetDefaultPrivateHolidaysEvents()
if($ovhServiceTelephony->telephonyGetDefaultPrivateHolidaysEvents(new OvhStructTelephonyGetDefaultPrivateHolidaysEvents(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsplusShortCodesList()
if($ovhServiceTelephony->telephonySmsplusShortCodesList(new OvhStructTelephonySmsplusShortCodesList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyAliasToSipPossibilities()
if($ovhServiceTelephony->telephonyAliasToSipPossibilities(new OvhStructTelephonyAliasToSipPossibilities(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyAbbreviatedNumberOnGroupAdd()
if($ovhServiceTelephony->telephonyAbbreviatedNumberOnGroupAdd(new OvhStructTelephonyAbbreviatedNumberOnGroupAdd(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyHuntingModificationQueue()
if($ovhServiceTelephony->telephonyHuntingModificationQueue(new OvhStructTelephonyHuntingModificationQueue(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyDirectoryInfo()
if($ovhServiceTelephony->telephonyDirectoryInfo(new OvhStructTelephonyDirectoryInfo(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyBillDetails()
if($ovhServiceTelephony->telephonyBillDetails(new OvhStructTelephonyBillDetails(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyLineLogsNotificationOptionsModify()
if($ovhServiceTelephony->telephonyLineLogsNotificationOptionsModify(new OvhStructTelephonyLineLogsNotificationOptionsModify(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyClick2CallDoBySession()
if($ovhServiceTelephony->telephonyClick2CallDoBySession(new OvhStructTelephonyClick2CallDoBySession(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyAbbreviatedNumberAdd()
if($ovhServiceTelephony->telephonyAbbreviatedNumberAdd(new OvhStructTelephonyAbbreviatedNumberAdd(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyNumberOrder()
if($ovhServiceTelephony->telephonyNumberOrder(new OvhStructTelephonyNumberOrder(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyLineSetIpRestriction()
if($ovhServiceTelephony->telephonyLineSetIpRestriction(new OvhStructTelephonyLineSetIpRestriction(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyLineSetCodecs()
if($ovhServiceTelephony->telephonyLineSetCodecs(new OvhStructTelephonyLineSetCodecs(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyNumberCityForZoneList()
if($ovhServiceTelephony->telephonyNumberCityForZoneList(new OvhStructTelephonyNumberCityForZoneList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyTonesOptionsModify()
if($ovhServiceTelephony->telephonyTonesOptionsModify(new OvhStructTelephonyTonesOptionsModify(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyVoicemailMessagesRemoteUpload()
if($ovhServiceTelephony->telephonyVoicemailMessagesRemoteUpload(new OvhStructTelephonyVoicemailMessagesRemoteUpload(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyOfferInfo()
if($ovhServiceTelephony->telephonyOfferInfo(new OvhStructTelephonyOfferInfo(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPhonebookDel()
if($ovhServiceTelephony->telephonyPhonebookDel(new OvhStructTelephonyPhonebookDel(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsUserAdd()
if($ovhServiceTelephony->telephonySmsUserAdd(new OvhStructTelephonySmsUserAdd(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsUserHistory()
if($ovhServiceTelephony->telephonySmsUserHistory(new OvhStructTelephonySmsUserHistory(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsUserGetCallBack()
if($ovhServiceTelephony->telephonySmsUserGetCallBack(new OvhStructTelephonySmsUserGetCallBack(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyOfferModifyPassword()
if($ovhServiceTelephony->telephonyOfferModifyPassword(new OvhStructTelephonyOfferModifyPassword(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyFunctionKeyAdd()
if($ovhServiceTelephony->telephonyFunctionKeyAdd(new OvhStructTelephonyFunctionKeyAdd(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPhonebookList()
if($ovhServiceTelephony->telephonyPhonebookList(new OvhStructTelephonyPhonebookList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPlugAndPhoneReset()
if($ovhServiceTelephony->telephonyPlugAndPhoneReset(new OvhStructTelephonyPlugAndPhoneReset(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySpareInfo()
if($ovhServiceTelephony->telephonySpareInfo(new OvhStructTelephonySpareInfo(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsUserDel()
if($ovhServiceTelephony->telephonySmsUserDel(new OvhStructTelephonySmsUserDel(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyVoicemailMessagesStatus()
if($ovhServiceTelephony->telephonyVoicemailMessagesStatus(new OvhStructTelephonyVoicemailMessagesStatus(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPhonebookModify()
if($ovhServiceTelephony->telephonyPhonebookModify(new OvhStructTelephonyPhonebookModify(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyOfferModifyName()
if($ovhServiceTelephony->telephonyOfferModifyName(new OvhStructTelephonyOfferModifyName(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsSetCallBack()
if($ovhServiceTelephony->telephonySmsSetCallBack(new OvhStructTelephonySmsSetCallBack(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPhonebookGroupList()
if($ovhServiceTelephony->telephonyPhonebookGroupList(new OvhStructTelephonyPhonebookGroupList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyBillingAccountInfo()
if($ovhServiceTelephony->telephonyBillingAccountInfo(new OvhStructTelephonyBillingAccountInfo(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsSenderAdd()
if($ovhServiceTelephony->telephonySmsSenderAdd(new OvhStructTelephonySmsSenderAdd(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyLineConsumptionCSVByMail()
if($ovhServiceTelephony->telephonyLineConsumptionCSVByMail(new OvhStructTelephonyLineConsumptionCSVByMail(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsUserDeleteCsvAttachment()
if($ovhServiceTelephony->telephonySmsUserDeleteCsvAttachment(new OvhStructTelephonySmsUserDeleteCsvAttachment(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyListReversableCallsFromNumber()
if($ovhServiceTelephony->telephonyListReversableCallsFromNumber(new OvhStructTelephonyListReversableCallsFromNumber(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyBillingAccountList()
if($ovhServiceTelephony->telephonyBillingAccountList(new OvhStructTelephonyBillingAccountList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsGetQuotaNotificationForUser()
if($ovhServiceTelephony->telephonySmsGetQuotaNotificationForUser(new OvhStructTelephonySmsGetQuotaNotificationForUser(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyChangeNicModify()
if($ovhServiceTelephony->telephonyChangeNicModify(new OvhStructTelephonyChangeNicModify(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySviInfo()
if($ovhServiceTelephony->telephonySviInfo(new OvhStructTelephonySviInfo(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyClick2CallUserAdd()
if($ovhServiceTelephony->telephonyClick2CallUserAdd(new OvhStructTelephonyClick2CallUserAdd(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsBlacklistedSendersDelete()
if($ovhServiceTelephony->telephonySmsBlacklistedSendersDelete(new OvhStructTelephonySmsBlacklistedSendersDelete(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsplusServiceAdd()
if($ovhServiceTelephony->telephonySmsplusServiceAdd(new OvhStructTelephonySmsplusServiceAdd(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySpareCreateRMA()
if($ovhServiceTelephony->telephonySpareCreateRMA(new OvhStructTelephonySpareCreateRMA(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySmsplusServiceEdit()
if($ovhServiceTelephony->telephonySmsplusServiceEdit(new OvhStructTelephonySmsplusServiceEdit(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyHuntingGenericScreenOptionsModify()
if($ovhServiceTelephony->telephonyHuntingGenericScreenOptionsModify(new OvhStructTelephonyHuntingGenericScreenOptionsModify(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyPlugAndPhoneInfo()
if($ovhServiceTelephony->telephonyPlugAndPhoneInfo(new OvhStructTelephonyPlugAndPhoneInfo(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyFaxCampaignDelete()
if($ovhServiceTelephony->telephonyFaxCampaignDelete(new OvhStructTelephonyFaxCampaignDelete(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyReversmentsRefundFromBillingAccount()
if($ovhServiceTelephony->telephonyReversmentsRefundFromBillingAccount(new OvhStructTelephonyReversmentsRefundFromBillingAccount(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyVoicemailMessageDelete()
if($ovhServiceTelephony->telephonyVoicemailMessageDelete(new OvhStructTelephonyVoicemailMessageDelete(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyLineOptionsList()
if($ovhServiceTelephony->telephonyLineOptionsList(new OvhStructTelephonyLineOptionsList(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonySpareServiceInfo()
if($ovhServiceTelephony->telephonySpareServiceInfo(new OvhStructTelephonySpareServiceInfo(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyAbbreviatedNumberModify()
if($ovhServiceTelephony->telephonyAbbreviatedNumberModify(new OvhStructTelephonyAbbreviatedNumberModify(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());
// sample call for OvhServiceTelephony::telephonyOfferSimultaneousLinesModify()
if($ovhServiceTelephony->telephonyOfferSimultaneousLinesModify(new OvhStructTelephonyOfferSimultaneousLinesModify(/*** update parameters list ***/)))
	print_r($ovhServiceTelephony->getResult());
else
	print_r($ovhServiceTelephony->getLastError());

/********************************
 * Example for OvhServiceSqlprive
 */
$ovhServiceSqlprive = new OvhServiceSqlprive($wsdl);
// sample call for OvhServiceSqlprive::sqlpriveMysqlRestart()
if($ovhServiceSqlprive->sqlpriveMysqlRestart(new OvhStructSqlpriveMysqlRestart(/*** update parameters list ***/)))
	print_r($ovhServiceSqlprive->getResult());
else
	print_r($ovhServiceSqlprive->getLastError());
// sample call for OvhServiceSqlprive::sqlpriveMysqlVersion()
if($ovhServiceSqlprive->sqlpriveMysqlVersion(new OvhStructSqlpriveMysqlVersion(/*** update parameters list ***/)))
	print_r($ovhServiceSqlprive->getResult());
else
	print_r($ovhServiceSqlprive->getLastError());
// sample call for OvhServiceSqlprive::sqlpriveMysqlDatabaseImportFromFile()
if($ovhServiceSqlprive->sqlpriveMysqlDatabaseImportFromFile(new OvhStructSqlpriveMysqlDatabaseImportFromFile(/*** update parameters list ***/)))
	print_r($ovhServiceSqlprive->getResult());
else
	print_r($ovhServiceSqlprive->getLastError());
// sample call for OvhServiceSqlprive::sqlpriveMysqlUserList()
if($ovhServiceSqlprive->sqlpriveMysqlUserList(new OvhStructSqlpriveMysqlUserList(/*** update parameters list ***/)))
	print_r($ovhServiceSqlprive->getResult());
else
	print_r($ovhServiceSqlprive->getLastError());
// sample call for OvhServiceSqlprive::sqlpriveMysqlRamUsed()
if($ovhServiceSqlprive->sqlpriveMysqlRamUsed(new OvhStructSqlpriveMysqlRamUsed(/*** update parameters list ***/)))
	print_r($ovhServiceSqlprive->getResult());
else
	print_r($ovhServiceSqlprive->getLastError());
// sample call for OvhServiceSqlprive::sqlpriveAlertInfo()
if($ovhServiceSqlprive->sqlpriveAlertInfo(new OvhStructSqlpriveAlertInfo(/*** update parameters list ***/)))
	print_r($ovhServiceSqlprive->getResult());
else
	print_r($ovhServiceSqlprive->getLastError());
// sample call for OvhServiceSqlprive::sqlpriveList()
if($ovhServiceSqlprive->sqlpriveList(new OvhStructSqlpriveList(/*** update parameters list ***/)))
	print_r($ovhServiceSqlprive->getResult());
else
	print_r($ovhServiceSqlprive->getLastError());
// sample call for OvhServiceSqlprive::sqlpriveMysqlLogs()
if($ovhServiceSqlprive->sqlpriveMysqlLogs(new OvhStructSqlpriveMysqlLogs(/*** update parameters list ***/)))
	print_r($ovhServiceSqlprive->getResult());
else
	print_r($ovhServiceSqlprive->getLastError());
// sample call for OvhServiceSqlprive::sqlpriveCronSet()
if($ovhServiceSqlprive->sqlpriveCronSet(new OvhStructSqlpriveCronSet(/*** update parameters list ***/)))
	print_r($ovhServiceSqlprive->getResult());
else
	print_r($ovhServiceSqlprive->getLastError());
// sample call for OvhServiceSqlprive::sqlpriveMysqlDatabasePrivilegeList()
if($ovhServiceSqlprive->sqlpriveMysqlDatabasePrivilegeList(new OvhStructSqlpriveMysqlDatabasePrivilegeList(/*** update parameters list ***/)))
	print_r($ovhServiceSqlprive->getResult());
else
	print_r($ovhServiceSqlprive->getLastError());
// sample call for OvhServiceSqlprive::sqlpriveCronDel()
if($ovhServiceSqlprive->sqlpriveCronDel(new OvhStructSqlpriveCronDel(/*** update parameters list ***/)))
	print_r($ovhServiceSqlprive->getResult());
else
	print_r($ovhServiceSqlprive->getLastError());
// sample call for OvhServiceSqlprive::sqlpriveMysqlDatabaseImportFromHost()
if($ovhServiceSqlprive->sqlpriveMysqlDatabaseImportFromHost(new OvhStructSqlpriveMysqlDatabaseImportFromHost(/*** update parameters list ***/)))
	print_r($ovhServiceSqlprive->getResult());
else
	print_r($ovhServiceSqlprive->getLastError());
// sample call for OvhServiceSqlprive::sqlpriveAlertSet()
if($ovhServiceSqlprive->sqlpriveAlertSet(new OvhStructSqlpriveAlertSet(/*** update parameters list ***/)))
	print_r($ovhServiceSqlprive->getResult());
else
	print_r($ovhServiceSqlprive->getLastError());
// sample call for OvhServiceSqlprive::sqlpriveMysqlOvhMyAdmin()
if($ovhServiceSqlprive->sqlpriveMysqlOvhMyAdmin(new OvhStructSqlpriveMysqlOvhMyAdmin(/*** update parameters list ***/)))
	print_r($ovhServiceSqlprive->getResult());
else
	print_r($ovhServiceSqlprive->getLastError());
// sample call for OvhServiceSqlprive::sqlpriveMysqlDatabaseList()
if($ovhServiceSqlprive->sqlpriveMysqlDatabaseList(new OvhStructSqlpriveMysqlDatabaseList(/*** update parameters list ***/)))
	print_r($ovhServiceSqlprive->getResult());
else
	print_r($ovhServiceSqlprive->getLastError());
// sample call for OvhServiceSqlprive::sqlpriveMysqlProcessList()
if($ovhServiceSqlprive->sqlpriveMysqlProcessList(new OvhStructSqlpriveMysqlProcessList(/*** update parameters list ***/)))
	print_r($ovhServiceSqlprive->getResult());
else
	print_r($ovhServiceSqlprive->getLastError());
// sample call for OvhServiceSqlprive::sqlpriveMysqlActivateOvhManagement()
if($ovhServiceSqlprive->sqlpriveMysqlActivateOvhManagement(new OvhStructSqlpriveMysqlActivateOvhManagement(/*** update parameters list ***/)))
	print_r($ovhServiceSqlprive->getResult());
else
	print_r($ovhServiceSqlprive->getLastError());
// sample call for OvhServiceSqlprive::sqlpriveMysqlGetPossibleDump()
if($ovhServiceSqlprive->sqlpriveMysqlGetPossibleDump(new OvhStructSqlpriveMysqlGetPossibleDump(/*** update parameters list ***/)))
	print_r($ovhServiceSqlprive->getResult());
else
	print_r($ovhServiceSqlprive->getLastError());
// sample call for OvhServiceSqlprive::sqlpriveFtpPassword()
if($ovhServiceSqlprive->sqlpriveFtpPassword(new OvhStructSqlpriveFtpPassword(/*** update parameters list ***/)))
	print_r($ovhServiceSqlprive->getResult());
else
	print_r($ovhServiceSqlprive->getLastError());
// sample call for OvhServiceSqlprive::sqlpriveMysqlRootPassword()
if($ovhServiceSqlprive->sqlpriveMysqlRootPassword(new OvhStructSqlpriveMysqlRootPassword(/*** update parameters list ***/)))
	print_r($ovhServiceSqlprive->getResult());
else
	print_r($ovhServiceSqlprive->getLastError());
// sample call for OvhServiceSqlprive::sqlpriveMysqlProcessKill()
if($ovhServiceSqlprive->sqlpriveMysqlProcessKill(new OvhStructSqlpriveMysqlProcessKill(/*** update parameters list ***/)))
	print_r($ovhServiceSqlprive->getResult());
else
	print_r($ovhServiceSqlprive->getLastError());
// sample call for OvhServiceSqlprive::sqlpriveMysqlDatabaseSave()
if($ovhServiceSqlprive->sqlpriveMysqlDatabaseSave(new OvhStructSqlpriveMysqlDatabaseSave(/*** update parameters list ***/)))
	print_r($ovhServiceSqlprive->getResult());
else
	print_r($ovhServiceSqlprive->getLastError());
// sample call for OvhServiceSqlprive::sqlpriveCronGet()
if($ovhServiceSqlprive->sqlpriveCronGet(new OvhStructSqlpriveCronGet(/*** update parameters list ***/)))
	print_r($ovhServiceSqlprive->getResult());
else
	print_r($ovhServiceSqlprive->getLastError());

/******************************
 * Example for OvhServiceLogout
 */
$ovhServiceLogout = new OvhServiceLogout($wsdl);
// sample call for OvhServiceLogout::logout()
if($ovhServiceLogout->logout(new OvhStructLogout(/*** update parameters list ***/)))
	print_r($ovhServiceLogout->getResult());
else
	print_r($ovhServiceLogout->getLastError());

/*****************************
 * Example for OvhServiceMulti
 */
$ovhServiceMulti = new OvhServiceMulti($wsdl);
// sample call for OvhServiceMulti::multiFtpChangeDirectory()
if($ovhServiceMulti->multiFtpChangeDirectory(new OvhStructMultiFtpChangeDirectory(/*** update parameters list ***/)))
	print_r($ovhServiceMulti->getResult());
else
	print_r($ovhServiceMulti->getLastError());
// sample call for OvhServiceMulti::multiFtpChangePassword()
if($ovhServiceMulti->multiFtpChangePassword(new OvhStructMultiFtpChangePassword(/*** update parameters list ***/)))
	print_r($ovhServiceMulti->getResult());
else
	print_r($ovhServiceMulti->getLastError());
// sample call for OvhServiceMulti::multiFtpList()
if($ovhServiceMulti->multiFtpList(new OvhStructMultiFtpList(/*** update parameters list ***/)))
	print_r($ovhServiceMulti->getResult());
else
	print_r($ovhServiceMulti->getLastError());
// sample call for OvhServiceMulti::multiFtpAdd()
if($ovhServiceMulti->multiFtpAdd(new OvhStructMultiFtpAdd(/*** update parameters list ***/)))
	print_r($ovhServiceMulti->getResult());
else
	print_r($ovhServiceMulti->getLastError());
// sample call for OvhServiceMulti::multiDomainList()
if($ovhServiceMulti->multiDomainList(new OvhStructMultiDomainList(/*** update parameters list ***/)))
	print_r($ovhServiceMulti->getResult());
else
	print_r($ovhServiceMulti->getLastError());
// sample call for OvhServiceMulti::multiFtpDel()
if($ovhServiceMulti->multiFtpDel(new OvhStructMultiFtpDel(/*** update parameters list ***/)))
	print_r($ovhServiceMulti->getResult());
else
	print_r($ovhServiceMulti->getLastError());
// sample call for OvhServiceMulti::multiDomainAdd()
if($ovhServiceMulti->multiDomainAdd(new OvhStructMultiDomainAdd(/*** update parameters list ***/)))
	print_r($ovhServiceMulti->getResult());
else
	print_r($ovhServiceMulti->getLastError());
// sample call for OvhServiceMulti::multiDomainModify()
if($ovhServiceMulti->multiDomainModify(new OvhStructMultiDomainModify(/*** update parameters list ***/)))
	print_r($ovhServiceMulti->getResult());
else
	print_r($ovhServiceMulti->getLastError());
// sample call for OvhServiceMulti::multiDomainInfo()
if($ovhServiceMulti->multiDomainInfo(new OvhStructMultiDomainInfo(/*** update parameters list ***/)))
	print_r($ovhServiceMulti->getResult());
else
	print_r($ovhServiceMulti->getLastError());
// sample call for OvhServiceMulti::multiDomainDel()
if($ovhServiceMulti->multiDomainDel(new OvhStructMultiDomainDel(/*** update parameters list ***/)))
	print_r($ovhServiceMulti->getResult());
else
	print_r($ovhServiceMulti->getLastError());

/*********************************
 * Example for OvhServiceDedicated
 */
$ovhServiceDedicated = new OvhServiceDedicated($wsdl);
// sample call for OvhServiceDedicated::dedicatedReverseDel()
if($ovhServiceDedicated->dedicatedReverseDel(new OvhStructDedicatedReverseDel(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedDelServiceMonitoringAlert()
if($ovhServiceDedicated->dedicatedDelServiceMonitoringAlert(new OvhStructDedicatedDelServiceMonitoringAlert(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedAddServiceMonitoringAlertSMS()
if($ovhServiceDedicated->dedicatedAddServiceMonitoringAlertSMS(new OvhStructDedicatedAddServiceMonitoringAlertSMS(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedIpLoadBalancingList()
if($ovhServiceDedicated->dedicatedIpLoadBalancingList(new OvhStructDedicatedIpLoadBalancingList(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedBackupReinstallConfiguration()
if($ovhServiceDedicated->dedicatedBackupReinstallConfiguration(new OvhStructDedicatedBackupReinstallConfiguration(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedBackupGetHisto()
if($ovhServiceDedicated->dedicatedBackupGetHisto(new OvhStructDedicatedBackupGetHisto(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedBackupUpdate()
if($ovhServiceDedicated->dedicatedBackupUpdate(new OvhStructDedicatedBackupUpdate(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedNetbootGetRescueEmail()
if($ovhServiceDedicated->dedicatedNetbootGetRescueEmail(new OvhStructDedicatedNetbootGetRescueEmail(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedRtmListBackdoor()
if($ovhServiceDedicated->dedicatedRtmListBackdoor(new OvhStructDedicatedRtmListBackdoor(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedMonitoringNotificationCreate()
if($ovhServiceDedicated->dedicatedMonitoringNotificationCreate(new OvhStructDedicatedMonitoringNotificationCreate(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedBackupList()
if($ovhServiceDedicated->dedicatedBackupList(new OvhStructDedicatedBackupList(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedNetbootGetAll()
if($ovhServiceDedicated->dedicatedNetbootGetAll(new OvhStructDedicatedNetbootGetAll(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedVirtualMacIpAvailableGetList()
if($ovhServiceDedicated->dedicatedVirtualMacIpAvailableGetList(new OvhStructDedicatedVirtualMacIpAvailableGetList(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedMonitoringSMSCreate()
if($ovhServiceDedicated->dedicatedMonitoringSMSCreate(new OvhStructDedicatedMonitoringSMSCreate(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedRipeQuery()
if($ovhServiceDedicated->dedicatedRipeQuery(new OvhStructDedicatedRipeQuery(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedBackupFtpPassword()
if($ovhServiceDedicated->dedicatedBackupFtpPassword(new OvhStructDedicatedBackupFtpPassword(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedRtmBackdoorUpdateAlert()
if($ovhServiceDedicated->dedicatedRtmBackdoorUpdateAlert(new OvhStructDedicatedRtmBackdoorUpdateAlert(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedSecondaryDNSAdd()
if($ovhServiceDedicated->dedicatedSecondaryDNSAdd(new OvhStructDedicatedSecondaryDNSAdd(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedRtmGetStatus()
if($ovhServiceDedicated->dedicatedRtmGetStatus(new OvhStructDedicatedRtmGetStatus(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedNetbootGetAvailable()
if($ovhServiceDedicated->dedicatedNetbootGetAvailable(new OvhStructDedicatedNetbootGetAvailable(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedMailinglistGetAllowed()
if($ovhServiceDedicated->dedicatedMailinglistGetAllowed(new OvhStructDedicatedMailinglistGetAllowed(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedBackupInfo()
if($ovhServiceDedicated->dedicatedBackupInfo(new OvhStructDedicatedBackupInfo(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedFailoverRipeAdd()
if($ovhServiceDedicated->dedicatedFailoverRipeAdd(new OvhStructDedicatedFailoverRipeAdd(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedFilterIrcClientRuleAdd()
if($ovhServiceDedicated->dedicatedFilterIrcClientRuleAdd(new OvhStructDedicatedFilterIrcClientRuleAdd(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedInstallationTemplateList()
if($ovhServiceDedicated->dedicatedInstallationTemplateList(new OvhStructDedicatedInstallationTemplateList(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedBackupGetCalendar()
if($ovhServiceDedicated->dedicatedBackupGetCalendar(new OvhStructDedicatedBackupGetCalendar(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedIpLoadBalancingServerDel()
if($ovhServiceDedicated->dedicatedIpLoadBalancingServerDel(new OvhStructDedicatedIpLoadBalancingServerDel(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedEditServiceMonitoringItem()
if($ovhServiceDedicated->dedicatedEditServiceMonitoringItem(new OvhStructDedicatedEditServiceMonitoringItem(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedIPForUDPServerList()
if($ovhServiceDedicated->dedicatedIPForUDPServerList(new OvhStructDedicatedIPForUDPServerList(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedBackupSet()
if($ovhServiceDedicated->dedicatedBackupSet(new OvhStructDedicatedBackupSet(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedVirtualMacIpDelete()
if($ovhServiceDedicated->dedicatedVirtualMacIpDelete(new OvhStructDedicatedVirtualMacIpDelete(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedFailoverRipeSplit()
if($ovhServiceDedicated->dedicatedFailoverRipeSplit(new OvhStructDedicatedFailoverRipeSplit(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedReverseInfo()
if($ovhServiceDedicated->dedicatedReverseInfo(new OvhStructDedicatedReverseInfo(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedCapabilitiesGetAll()
if($ovhServiceDedicated->dedicatedCapabilitiesGetAll(new OvhStructDedicatedCapabilitiesGetAll(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedBackupIncludeAdd()
if($ovhServiceDedicated->dedicatedBackupIncludeAdd(new OvhStructDedicatedBackupIncludeAdd(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedFailoverRipeList()
if($ovhServiceDedicated->dedicatedFailoverRipeList(new OvhStructDedicatedFailoverRipeList(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedMonitoringServiceAdd()
if($ovhServiceDedicated->dedicatedMonitoringServiceAdd(new OvhStructDedicatedMonitoringServiceAdd(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedHardRebootDo()
if($ovhServiceDedicated->dedicatedHardRebootDo(new OvhStructDedicatedHardRebootDo(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedReverseList()
if($ovhServiceDedicated->dedicatedReverseList(new OvhStructDedicatedReverseList(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedBackupFtpAdd()
if($ovhServiceDedicated->dedicatedBackupFtpAdd(new OvhStructDedicatedBackupFtpAdd(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedVirtualMacIpUsedGetList()
if($ovhServiceDedicated->dedicatedVirtualMacIpUsedGetList(new OvhStructDedicatedVirtualMacIpUsedGetList(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedNetbootInfo()
if($ovhServiceDedicated->dedicatedNetbootInfo(new OvhStructDedicatedNetbootInfo(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedIpLoadBalancingAdd()
if($ovhServiceDedicated->dedicatedIpLoadBalancingAdd(new OvhStructDedicatedIpLoadBalancingAdd(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedAvailableNotificationNicsGet()
if($ovhServiceDedicated->dedicatedAvailableNotificationNicsGet(new OvhStructDedicatedAvailableNotificationNicsGet(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedMonitoringServiceDel()
if($ovhServiceDedicated->dedicatedMonitoringServiceDel(new OvhStructDedicatedMonitoringServiceDel(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedIpLoadBalancingServerStateModify()
if($ovhServiceDedicated->dedicatedIpLoadBalancingServerStateModify(new OvhStructDedicatedIpLoadBalancingServerStateModify(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedReverseModify()
if($ovhServiceDedicated->dedicatedReverseModify(new OvhStructDedicatedReverseModify(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedFailoverList()
if($ovhServiceDedicated->dedicatedFailoverList(new OvhStructDedicatedFailoverList(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedSecondaryDNSInfo()
if($ovhServiceDedicated->dedicatedSecondaryDNSInfo(new OvhStructDedicatedSecondaryDNSInfo(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedRipeUpdateInetnum()
if($ovhServiceDedicated->dedicatedRipeUpdateInetnum(new OvhStructDedicatedRipeUpdateInetnum(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedGetAvailableNetworkFromCountry()
if($ovhServiceDedicated->dedicatedGetAvailableNetworkFromCountry(new OvhStructDedicatedGetAvailableNetworkFromCountry(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedFailoverAdd()
if($ovhServiceDedicated->dedicatedFailoverAdd(new OvhStructDedicatedFailoverAdd(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedFilterIrcServerRuleList()
if($ovhServiceDedicated->dedicatedFilterIrcServerRuleList(new OvhStructDedicatedFilterIrcServerRuleList(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedRipeCreateOrganisation()
if($ovhServiceDedicated->dedicatedRipeCreateOrganisation(new OvhStructDedicatedRipeCreateOrganisation(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedBackupExcludeAdd()
if($ovhServiceDedicated->dedicatedBackupExcludeAdd(new OvhStructDedicatedBackupExcludeAdd(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedFilterIrcServerRuleDel()
if($ovhServiceDedicated->dedicatedFilterIrcServerRuleDel(new OvhStructDedicatedFilterIrcServerRuleDel(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedFailoverRipeModify()
if($ovhServiceDedicated->dedicatedFailoverRipeModify(new OvhStructDedicatedFailoverRipeModify(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedMonitoringList()
if($ovhServiceDedicated->dedicatedMonitoringList(new OvhStructDedicatedMonitoringList(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedBackupExcludeDel()
if($ovhServiceDedicated->dedicatedBackupExcludeDel(new OvhStructDedicatedBackupExcludeDel(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedHardRebootStatus()
if($ovhServiceDedicated->dedicatedHardRebootStatus(new OvhStructDedicatedHardRebootStatus(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedGetServiceMonitoringItem()
if($ovhServiceDedicated->dedicatedGetServiceMonitoringItem(new OvhStructDedicatedGetServiceMonitoringItem(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedReverseAdd()
if($ovhServiceDedicated->dedicatedReverseAdd(new OvhStructDedicatedReverseAdd(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedBackupGetFreePlanning()
if($ovhServiceDedicated->dedicatedBackupGetFreePlanning(new OvhStructDedicatedBackupGetFreePlanning(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedInstallAllowedDistributionGet()
if($ovhServiceDedicated->dedicatedInstallAllowedDistributionGet(new OvhStructDedicatedInstallAllowedDistributionGet(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedCapabilitiesGet()
if($ovhServiceDedicated->dedicatedCapabilitiesGet(new OvhStructDedicatedCapabilitiesGet(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedMonitoringSMSDel()
if($ovhServiceDedicated->dedicatedMonitoringSMSDel(new OvhStructDedicatedMonitoringSMSDel(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedMonitoringAdd()
if($ovhServiceDedicated->dedicatedMonitoringAdd(new OvhStructDedicatedMonitoringAdd(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedOperationList()
if($ovhServiceDedicated->dedicatedOperationList(new OvhStructDedicatedOperationList(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedBackupIncludeDel()
if($ovhServiceDedicated->dedicatedBackupIncludeDel(new OvhStructDedicatedBackupIncludeDel(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedBandwidthSwitching()
if($ovhServiceDedicated->dedicatedBandwidthSwitching(new OvhStructDedicatedBandwidthSwitching(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedIpLoadBalancingDel()
if($ovhServiceDedicated->dedicatedIpLoadBalancingDel(new OvhStructDedicatedIpLoadBalancingDel(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedInstallationTemplateUse()
if($ovhServiceDedicated->dedicatedInstallationTemplateUse(new OvhStructDedicatedInstallationTemplateUse(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedIpLoadBalancingServerAdd()
if($ovhServiceDedicated->dedicatedIpLoadBalancingServerAdd(new OvhStructDedicatedIpLoadBalancingServerAdd(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedRipeUpdateOrganisation()
if($ovhServiceDedicated->dedicatedRipeUpdateOrganisation(new OvhStructDedicatedRipeUpdateOrganisation(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedNetbootModifyById()
if($ovhServiceDedicated->dedicatedNetbootModifyById(new OvhStructDedicatedNetbootModifyById(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedBackupGetDate()
if($ovhServiceDedicated->dedicatedBackupGetDate(new OvhStructDedicatedBackupGetDate(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedSecondaryDNSDel()
if($ovhServiceDedicated->dedicatedSecondaryDNSDel(new OvhStructDedicatedSecondaryDNSDel(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedSecondaryDNSGetAll()
if($ovhServiceDedicated->dedicatedSecondaryDNSGetAll(new OvhStructDedicatedSecondaryDNSGetAll(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedMonitoringNotificationDel()
if($ovhServiceDedicated->dedicatedMonitoringNotificationDel(new OvhStructDedicatedMonitoringNotificationDel(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedBandwidthManagementGet()
if($ovhServiceDedicated->dedicatedBandwidthManagementGet(new OvhStructDedicatedBandwidthManagementGet(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedMonitoringStatusUpdate()
if($ovhServiceDedicated->dedicatedMonitoringStatusUpdate(new OvhStructDedicatedMonitoringStatusUpdate(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedIPForUDPMoveGetStatus()
if($ovhServiceDedicated->dedicatedIPForUDPMoveGetStatus(new OvhStructDedicatedIPForUDPMoveGetStatus(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedRipeDeleteOrganisation()
if($ovhServiceDedicated->dedicatedRipeDeleteOrganisation(new OvhStructDedicatedRipeDeleteOrganisation(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedFailoverRipeGetIp()
if($ovhServiceDedicated->dedicatedFailoverRipeGetIp(new OvhStructDedicatedFailoverRipeGetIp(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedInstallBasic()
if($ovhServiceDedicated->dedicatedInstallBasic(new OvhStructDedicatedInstallBasic(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedInstallReset()
if($ovhServiceDedicated->dedicatedInstallReset(new OvhStructDedicatedInstallReset(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedMonitoringServiceAddNotification()
if($ovhServiceDedicated->dedicatedMonitoringServiceAddNotification(new OvhStructDedicatedMonitoringServiceAddNotification(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedFilterIrcClientRuleDel()
if($ovhServiceDedicated->dedicatedFilterIrcClientRuleDel(new OvhStructDedicatedFilterIrcClientRuleDel(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedMrtgInfo()
if($ovhServiceDedicated->dedicatedMrtgInfo(new OvhStructDedicatedMrtgInfo(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedBackupReinstallData()
if($ovhServiceDedicated->dedicatedBackupReinstallData(new OvhStructDedicatedBackupReinstallData(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedBackupFtpInfo()
if($ovhServiceDedicated->dedicatedBackupFtpInfo(new OvhStructDedicatedBackupFtpInfo(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedMonitoringModify()
if($ovhServiceDedicated->dedicatedMonitoringModify(new OvhStructDedicatedMonitoringModify(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedGetRandomAvailableIpFromCountry()
if($ovhServiceDedicated->dedicatedGetRandomAvailableIpFromCountry(new OvhStructDedicatedGetRandomAvailableIpFromCountry(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedInstallBasicProgress()
if($ovhServiceDedicated->dedicatedInstallBasicProgress(new OvhStructDedicatedInstallBasicProgress(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedAddServiceMonitoringAlertEmail()
if($ovhServiceDedicated->dedicatedAddServiceMonitoringAlertEmail(new OvhStructDedicatedAddServiceMonitoringAlertEmail(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedFailoverUpdate()
if($ovhServiceDedicated->dedicatedFailoverUpdate(new OvhStructDedicatedFailoverUpdate(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedFilterIrcServerRuleAdd()
if($ovhServiceDedicated->dedicatedFilterIrcServerRuleAdd(new OvhStructDedicatedFilterIrcServerRuleAdd(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedVirtualMacIpAdd()
if($ovhServiceDedicated->dedicatedVirtualMacIpAdd(new OvhStructDedicatedVirtualMacIpAdd(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedRipeGetRipeIds()
if($ovhServiceDedicated->dedicatedRipeGetRipeIds(new OvhStructDedicatedRipeGetRipeIds(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedInfo()
if($ovhServiceDedicated->dedicatedInfo(new OvhStructDedicatedInfo(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedBackupUpdateDate()
if($ovhServiceDedicated->dedicatedBackupUpdateDate(new OvhStructDedicatedBackupUpdateDate(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedMonitoringStatusGet()
if($ovhServiceDedicated->dedicatedMonitoringStatusGet(new OvhStructDedicatedMonitoringStatusGet(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedNetbootModify()
if($ovhServiceDedicated->dedicatedNetbootModify(new OvhStructDedicatedNetbootModify(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedFilterIrcClientRuleList()
if($ovhServiceDedicated->dedicatedFilterIrcClientRuleList(new OvhStructDedicatedFilterIrcClientRuleList(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedIPForUDPMove()
if($ovhServiceDedicated->dedicatedIPForUDPMove(new OvhStructDedicatedIPForUDPMove(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedMonitoringSMSModify()
if($ovhServiceDedicated->dedicatedMonitoringSMSModify(new OvhStructDedicatedMonitoringSMSModify(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedMonitoringDel()
if($ovhServiceDedicated->dedicatedMonitoringDel(new OvhStructDedicatedMonitoringDel(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedMonitoringServiceAddSMS()
if($ovhServiceDedicated->dedicatedMonitoringServiceAddSMS(new OvhStructDedicatedMonitoringServiceAddSMS(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedList()
if($ovhServiceDedicated->dedicatedList(new OvhStructDedicatedList(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedIPForUDPGet()
if($ovhServiceDedicated->dedicatedIPForUDPGet(new OvhStructDedicatedIPForUDPGet(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedGetAvailableIpFromNetwork()
if($ovhServiceDedicated->dedicatedGetAvailableIpFromNetwork(new OvhStructDedicatedGetAvailableIpFromNetwork(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedMailinglistSubscribe()
if($ovhServiceDedicated->dedicatedMailinglistSubscribe(new OvhStructDedicatedMailinglistSubscribe(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedIpLoadBalancingNameModify()
if($ovhServiceDedicated->dedicatedIpLoadBalancingNameModify(new OvhStructDedicatedIpLoadBalancingNameModify(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());
// sample call for OvhServiceDedicated::dedicatedMonitoringServiceList()
if($ovhServiceDedicated->dedicatedMonitoringServiceList(new OvhStructDedicatedMonitoringServiceList(/*** update parameters list ***/)))
	print_r($ovhServiceDedicated->getResult());
else
	print_r($ovhServiceDedicated->getLastError());

/*******************************
 * Example for OvhServiceService
 */
$ovhServiceService = new OvhServiceService($wsdl);
// sample call for OvhServiceService::serviceGroupGetAllInfo()
if($ovhServiceService->serviceGroupGetAllInfo(new OvhStructServiceGroupGetAllInfo(/*** update parameters list ***/)))
	print_r($ovhServiceService->getResult());
else
	print_r($ovhServiceService->getLastError());
// sample call for OvhServiceService::serviceGroupList()
if($ovhServiceService->serviceGroupList(new OvhStructServiceGroupList(/*** update parameters list ***/)))
	print_r($ovhServiceService->getResult());
else
	print_r($ovhServiceService->getLastError());
// sample call for OvhServiceService::serviceListPaginated()
if($ovhServiceService->serviceListPaginated(new OvhStructServiceListPaginated(/*** update parameters list ***/)))
	print_r($ovhServiceService->getResult());
else
	print_r($ovhServiceService->getLastError());
// sample call for OvhServiceService::serviceGroupCreate()
if($ovhServiceService->serviceGroupCreate(new OvhStructServiceGroupCreate(/*** update parameters list ***/)))
	print_r($ovhServiceService->getResult());
else
	print_r($ovhServiceService->getLastError());
// sample call for OvhServiceService::serviceModifyContact()
if($ovhServiceService->serviceModifyContact(new OvhStructServiceModifyContact(/*** update parameters list ***/)))
	print_r($ovhServiceService->getResult());
else
	print_r($ovhServiceService->getLastError());
// sample call for OvhServiceService::serviceModifyOwner()
if($ovhServiceService->serviceModifyOwner(new OvhStructServiceModifyOwner(/*** update parameters list ***/)))
	print_r($ovhServiceService->getResult());
else
	print_r($ovhServiceService->getLastError());
// sample call for OvhServiceService::serviceModifyOwnerInfos()
if($ovhServiceService->serviceModifyOwnerInfos(new OvhStructServiceModifyOwnerInfos(/*** update parameters list ***/)))
	print_r($ovhServiceService->getResult());
else
	print_r($ovhServiceService->getLastError());
// sample call for OvhServiceService::serviceGroupDelete()
if($ovhServiceService->serviceGroupDelete(new OvhStructServiceGroupDelete(/*** update parameters list ***/)))
	print_r($ovhServiceService->getResult());
else
	print_r($ovhServiceService->getLastError());
// sample call for OvhServiceService::serviceList()
if($ovhServiceService->serviceList(new OvhStructServiceList(/*** update parameters list ***/)))
	print_r($ovhServiceService->getResult());
else
	print_r($ovhServiceService->getLastError());
// sample call for OvhServiceService::serviceGroupSetComment()
if($ovhServiceService->serviceGroupSetComment(new OvhStructServiceGroupSetComment(/*** update parameters list ***/)))
	print_r($ovhServiceService->getResult());
else
	print_r($ovhServiceService->getLastError());
// sample call for OvhServiceService::serviceGroupRemoveService()
if($ovhServiceService->serviceGroupRemoveService(new OvhStructServiceGroupRemoveService(/*** update parameters list ***/)))
	print_r($ovhServiceService->getResult());
else
	print_r($ovhServiceService->getLastError());
// sample call for OvhServiceService::serviceFreedomList()
if($ovhServiceService->serviceFreedomList(new OvhStructServiceFreedomList(/*** update parameters list ***/)))
	print_r($ovhServiceService->getResult());
else
	print_r($ovhServiceService->getLastError());
// sample call for OvhServiceService::serviceGroupSetName()
if($ovhServiceService->serviceGroupSetName(new OvhStructServiceGroupSetName(/*** update parameters list ***/)))
	print_r($ovhServiceService->getResult());
else
	print_r($ovhServiceService->getLastError());
// sample call for OvhServiceService::serviceGroupInfo()
if($ovhServiceService->serviceGroupInfo(new OvhStructServiceGroupInfo(/*** update parameters list ***/)))
	print_r($ovhServiceService->getResult());
else
	print_r($ovhServiceService->getLastError());
// sample call for OvhServiceService::serviceGroupAddService()
if($ovhServiceService->serviceGroupAddService(new OvhStructServiceGroupAddService(/*** update parameters list ***/)))
	print_r($ovhServiceService->getResult());
else
	print_r($ovhServiceService->getLastError());

/**********************************
 * Example for OvhServiceRedirected
 */
$ovhServiceRedirected = new OvhServiceRedirected($wsdl);
// sample call for OvhServiceRedirected::redirectedEmailAdd()
if($ovhServiceRedirected->redirectedEmailAdd(new OvhStructRedirectedEmailAdd(/*** update parameters list ***/)))
	print_r($ovhServiceRedirected->getResult());
else
	print_r($ovhServiceRedirected->getLastError());
// sample call for OvhServiceRedirected::redirectedEmailModify()
if($ovhServiceRedirected->redirectedEmailModify(new OvhStructRedirectedEmailModify(/*** update parameters list ***/)))
	print_r($ovhServiceRedirected->getResult());
else
	print_r($ovhServiceRedirected->getLastError());
// sample call for OvhServiceRedirected::redirectedEmailDel()
if($ovhServiceRedirected->redirectedEmailDel(new OvhStructRedirectedEmailDel(/*** update parameters list ***/)))
	print_r($ovhServiceRedirected->getResult());
else
	print_r($ovhServiceRedirected->getLastError());
// sample call for OvhServiceRedirected::redirectedEmailList()
if($ovhServiceRedirected->redirectedEmailList(new OvhStructRedirectedEmailList(/*** update parameters list ***/)))
	print_r($ovhServiceRedirected->getResult());
else
	print_r($ovhServiceRedirected->getLastError());

/***************************
 * Example for OvhServiceNic
 */
$ovhServiceNic = new OvhServiceNic($wsdl);
// sample call for OvhServiceNic::nicModifyInfos()
if($ovhServiceNic->nicModifyInfos(new OvhStructNicModifyInfos(/*** update parameters list ***/)))
	print_r($ovhServiceNic->getResult());
else
	print_r($ovhServiceNic->getLastError());
// sample call for OvhServiceNic::nic()
if($ovhServiceNic->nic(new OvhStructNic(/*** update parameters list ***/)))
	print_r($ovhServiceNic->getResult());
else
	print_r($ovhServiceNic->getLastError());
// sample call for OvhServiceNic::nicTldEligibility()
if($ovhServiceNic->nicTldEligibility(new OvhStructNicTldEligibility(/*** update parameters list ***/)))
	print_r($ovhServiceNic->getResult());
else
	print_r($ovhServiceNic->getLastError());
// sample call for OvhServiceNic::nicModifyLanguage()
if($ovhServiceNic->nicModifyLanguage(new OvhStructNicModifyLanguage(/*** update parameters list ***/)))
	print_r($ovhServiceNic->getResult());
else
	print_r($ovhServiceNic->getLastError());
// sample call for OvhServiceNic::nicCreate()
if($ovhServiceNic->nicCreate(new OvhStructNicCreate(/*** update parameters list ***/)))
	print_r($ovhServiceNic->getResult());
else
	print_r($ovhServiceNic->getLastError());
// sample call for OvhServiceNic::nicInfo()
if($ovhServiceNic->nicInfo(new OvhStructNicInfo(/*** update parameters list ***/)))
	print_r($ovhServiceNic->getResult());
else
	print_r($ovhServiceNic->getLastError());
// sample call for OvhServiceNic::nicModifyInfosIT()
if($ovhServiceNic->nicModifyInfosIT(new OvhStructNicModifyInfosIT(/*** update parameters list ***/)))
	print_r($ovhServiceNic->getResult());
else
	print_r($ovhServiceNic->getLastError());
// sample call for OvhServiceNic::nicPublicInfo()
if($ovhServiceNic->nicPublicInfo(new OvhStructNicPublicInfo(/*** update parameters list ***/)))
	print_r($ovhServiceNic->getResult());
else
	print_r($ovhServiceNic->getLastError());
// sample call for OvhServiceNic::nicCreateIT()
if($ovhServiceNic->nicCreateIT(new OvhStructNicCreateIT(/*** update parameters list ***/)))
	print_r($ovhServiceNic->getResult());
else
	print_r($ovhServiceNic->getLastError());
// sample call for OvhServiceNic::nicModifyEmail()
if($ovhServiceNic->nicModifyEmail(new OvhStructNicModifyEmail(/*** update parameters list ***/)))
	print_r($ovhServiceNic->getResult());
else
	print_r($ovhServiceNic->getLastError());
// sample call for OvhServiceNic::nicUpdateIT()
if($ovhServiceNic->nicUpdateIT(new OvhStructNicUpdateIT(/*** update parameters list ***/)))
	print_r($ovhServiceNic->getResult());
else
	print_r($ovhServiceNic->getLastError());
// sample call for OvhServiceNic::nicUpdate()
if($ovhServiceNic->nicUpdate(new OvhStructNicUpdate(/*** update parameters list ***/)))
	print_r($ovhServiceNic->getResult());
else
	print_r($ovhServiceNic->getLastError());

/****************************
 * Example for OvhServiceRipe
 */
$ovhServiceRipe = new OvhServiceRipe($wsdl);
// sample call for OvhServiceRipe::ripeGetRipeIds()
if($ovhServiceRipe->ripeGetRipeIds(new OvhStructRipeGetRipeIds(/*** update parameters list ***/)))
	print_r($ovhServiceRipe->getResult());
else
	print_r($ovhServiceRipe->getLastError());
// sample call for OvhServiceRipe::ripeUpdateInetnum()
if($ovhServiceRipe->ripeUpdateInetnum(new OvhStructRipeUpdateInetnum(/*** update parameters list ***/)))
	print_r($ovhServiceRipe->getResult());
else
	print_r($ovhServiceRipe->getLastError());
// sample call for OvhServiceRipe::ripeQuery()
if($ovhServiceRipe->ripeQuery(new OvhStructRipeQuery(/*** update parameters list ***/)))
	print_r($ovhServiceRipe->getResult());
else
	print_r($ovhServiceRipe->getLastError());
// sample call for OvhServiceRipe::ripeDeleteOrganisation()
if($ovhServiceRipe->ripeDeleteOrganisation(new OvhStructRipeDeleteOrganisation(/*** update parameters list ***/)))
	print_r($ovhServiceRipe->getResult());
else
	print_r($ovhServiceRipe->getLastError());
// sample call for OvhServiceRipe::ripeUpdateOrganisation()
if($ovhServiceRipe->ripeUpdateOrganisation(new OvhStructRipeUpdateOrganisation(/*** update parameters list ***/)))
	print_r($ovhServiceRipe->getResult());
else
	print_r($ovhServiceRipe->getLastError());
// sample call for OvhServiceRipe::ripeCreateOrganisation()
if($ovhServiceRipe->ripeCreateOrganisation(new OvhStructRipeCreateOrganisation(/*** update parameters list ***/)))
	print_r($ovhServiceRipe->getResult());
else
	print_r($ovhServiceRipe->getLastError());

/*********************************
 * Example for OvhServiceAutomated
 */
$ovhServiceAutomated = new OvhServiceAutomated($wsdl);
// sample call for OvhServiceAutomated::automatedMailGetVolumeHistory()
if($ovhServiceAutomated->automatedMailGetVolumeHistory(new OvhStructAutomatedMailGetVolumeHistory(/*** update parameters list ***/)))
	print_r($ovhServiceAutomated->getResult());
else
	print_r($ovhServiceAutomated->getLastError());
// sample call for OvhServiceAutomated::automatedMailGetTodo()
if($ovhServiceAutomated->automatedMailGetTodo(new OvhStructAutomatedMailGetTodo(/*** update parameters list ***/)))
	print_r($ovhServiceAutomated->getResult());
else
	print_r($ovhServiceAutomated->getLastError());
// sample call for OvhServiceAutomated::automatedMailGetErrors()
if($ovhServiceAutomated->automatedMailGetErrors(new OvhStructAutomatedMailGetErrors(/*** update parameters list ***/)))
	print_r($ovhServiceAutomated->getResult());
else
	print_r($ovhServiceAutomated->getLastError());
// sample call for OvhServiceAutomated::automatedMailGetState()
if($ovhServiceAutomated->automatedMailGetState(new OvhStructAutomatedMailGetState(/*** update parameters list ***/)))
	print_r($ovhServiceAutomated->getResult());
else
	print_r($ovhServiceAutomated->getLastError());
// sample call for OvhServiceAutomated::automatedMailUnlock()
if($ovhServiceAutomated->automatedMailUnlock(new OvhStructAutomatedMailUnlock(/*** update parameters list ***/)))
	print_r($ovhServiceAutomated->getResult());
else
	print_r($ovhServiceAutomated->getLastError());
// sample call for OvhServiceAutomated::automatedMailLock()
if($ovhServiceAutomated->automatedMailLock(new OvhStructAutomatedMailLock(/*** update parameters list ***/)))
	print_r($ovhServiceAutomated->getResult());
else
	print_r($ovhServiceAutomated->getLastError());
// sample call for OvhServiceAutomated::automatedMailReturnSet()
if($ovhServiceAutomated->automatedMailReturnSet(new OvhStructAutomatedMailReturnSet(/*** update parameters list ***/)))
	print_r($ovhServiceAutomated->getResult());
else
	print_r($ovhServiceAutomated->getLastError());
// sample call for OvhServiceAutomated::automatedMailFlush()
if($ovhServiceAutomated->automatedMailFlush(new OvhStructAutomatedMailFlush(/*** update parameters list ***/)))
	print_r($ovhServiceAutomated->getResult());
else
	print_r($ovhServiceAutomated->getLastError());

/******************************
 * Example for OvhServiceDomain
 */
$ovhServiceDomain = new OvhServiceDomain($wsdl);
// sample call for OvhServiceDomain::domainHostUpdate()
if($ovhServiceDomain->domainHostUpdate(new OvhStructDomainHostUpdate(/*** update parameters list ***/)))
	print_r($ovhServiceDomain->getResult());
else
	print_r($ovhServiceDomain->getLastError());
// sample call for OvhServiceDomain::domainUnlock()
if($ovhServiceDomain->domainUnlock(new OvhStructDomainUnlock(/*** update parameters list ***/)))
	print_r($ovhServiceDomain->getResult());
else
	print_r($ovhServiceDomain->getLastError());
// sample call for OvhServiceDomain::domainWhoisObfuscatorSetAll()
if($ovhServiceDomain->domainWhoisObfuscatorSetAll(new OvhStructDomainWhoisObfuscatorSetAll(/*** update parameters list ***/)))
	print_r($ovhServiceDomain->getResult());
else
	print_r($ovhServiceDomain->getLastError());
// sample call for OvhServiceDomain::domainList()
if($ovhServiceDomain->domainList(new OvhStructDomainList(/*** update parameters list ***/)))
	print_r($ovhServiceDomain->getResult());
else
	print_r($ovhServiceDomain->getLastError());
// sample call for OvhServiceDomain::domainWhoisObfuscatorInfo()
if($ovhServiceDomain->domainWhoisObfuscatorInfo(new OvhStructDomainWhoisObfuscatorInfo(/*** update parameters list ***/)))
	print_r($ovhServiceDomain->getResult());
else
	print_r($ovhServiceDomain->getLastError());
// sample call for OvhServiceDomain::domainCheck()
if($ovhServiceDomain->domainCheck(new OvhStructDomainCheck(/*** update parameters list ***/)))
	print_r($ovhServiceDomain->getResult());
else
	print_r($ovhServiceDomain->getLastError());
// sample call for OvhServiceDomain::domainWhoisObfuscatorSet()
if($ovhServiceDomain->domainWhoisObfuscatorSet(new OvhStructDomainWhoisObfuscatorSet(/*** update parameters list ***/)))
	print_r($ovhServiceDomain->getResult());
else
	print_r($ovhServiceDomain->getLastError());
// sample call for OvhServiceDomain::domainResellerSet()
if($ovhServiceDomain->domainResellerSet(new OvhStructDomainResellerSet(/*** update parameters list ***/)))
	print_r($ovhServiceDomain->getResult());
else
	print_r($ovhServiceDomain->getLastError());
// sample call for OvhServiceDomain::domainOperationRelaunch()
if($ovhServiceDomain->domainOperationRelaunch(new OvhStructDomainOperationRelaunch(/*** update parameters list ***/)))
	print_r($ovhServiceDomain->getResult());
else
	print_r($ovhServiceDomain->getLastError());
// sample call for OvhServiceDomain::domainCapabilities()
if($ovhServiceDomain->domainCapabilities(new OvhStructDomainCapabilities(/*** update parameters list ***/)))
	print_r($ovhServiceDomain->getResult());
else
	print_r($ovhServiceDomain->getLastError());
// sample call for OvhServiceDomain::domainDnsList()
if($ovhServiceDomain->domainDnsList(new OvhStructDomainDnsList(/*** update parameters list ***/)))
	print_r($ovhServiceDomain->getResult());
else
	print_r($ovhServiceDomain->getLastError());
// sample call for OvhServiceDomain::domainOperationInfo()
if($ovhServiceDomain->domainOperationInfo(new OvhStructDomainOperationInfo(/*** update parameters list ***/)))
	print_r($ovhServiceDomain->getResult());
else
	print_r($ovhServiceDomain->getLastError());
// sample call for OvhServiceDomain::domainDnsUpdate()
if($ovhServiceDomain->domainDnsUpdate(new OvhStructDomainDnsUpdate(/*** update parameters list ***/)))
	print_r($ovhServiceDomain->getResult());
else
	print_r($ovhServiceDomain->getLastError());
// sample call for OvhServiceDomain::domainResellerDel()
if($ovhServiceDomain->domainResellerDel(new OvhStructDomainResellerDel(/*** update parameters list ***/)))
	print_r($ovhServiceDomain->getResult());
else
	print_r($ovhServiceDomain->getLastError());
// sample call for OvhServiceDomain::domainDnsGetOvhDefault()
if($ovhServiceDomain->domainDnsGetOvhDefault(new OvhStructDomainDnsGetOvhDefault(/*** update parameters list ***/)))
	print_r($ovhServiceDomain->getResult());
else
	print_r($ovhServiceDomain->getLastError());
// sample call for OvhServiceDomain::domainWhoisObfuscatorUnset()
if($ovhServiceDomain->domainWhoisObfuscatorUnset(new OvhStructDomainWhoisObfuscatorUnset(/*** update parameters list ***/)))
	print_r($ovhServiceDomain->getResult());
else
	print_r($ovhServiceDomain->getLastError());
// sample call for OvhServiceDomain::domainHostDel()
if($ovhServiceDomain->domainHostDel(new OvhStructDomainHostDel(/*** update parameters list ***/)))
	print_r($ovhServiceDomain->getResult());
else
	print_r($ovhServiceDomain->getLastError());
// sample call for OvhServiceDomain::domainInfo()
if($ovhServiceDomain->domainInfo(new OvhStructDomainInfo(/*** update parameters list ***/)))
	print_r($ovhServiceDomain->getResult());
else
	print_r($ovhServiceDomain->getLastError());
// sample call for OvhServiceDomain::domainHostList()
if($ovhServiceDomain->domainHostList(new OvhStructDomainHostList(/*** update parameters list ***/)))
	print_r($ovhServiceDomain->getResult());
else
	print_r($ovhServiceDomain->getLastError());
// sample call for OvhServiceDomain::domainLockStatus()
if($ovhServiceDomain->domainLockStatus(new OvhStructDomainLockStatus(/*** update parameters list ***/)))
	print_r($ovhServiceDomain->getResult());
else
	print_r($ovhServiceDomain->getLastError());
// sample call for OvhServiceDomain::domainLock()
if($ovhServiceDomain->domainLock(new OvhStructDomainLock(/*** update parameters list ***/)))
	print_r($ovhServiceDomain->getResult());
else
	print_r($ovhServiceDomain->getLastError());
// sample call for OvhServiceDomain::domainOperationCancel()
if($ovhServiceDomain->domainOperationCancel(new OvhStructDomainOperationCancel(/*** update parameters list ***/)))
	print_r($ovhServiceDomain->getResult());
else
	print_r($ovhServiceDomain->getLastError());
// sample call for OvhServiceDomain::domainHostAdd()
if($ovhServiceDomain->domainHostAdd(new OvhStructDomainHostAdd(/*** update parameters list ***/)))
	print_r($ovhServiceDomain->getResult());
else
	print_r($ovhServiceDomain->getLastError());
// sample call for OvhServiceDomain::domainWhoisObfuscatorUnsetAll()
if($ovhServiceDomain->domainWhoisObfuscatorUnsetAll(new OvhStructDomainWhoisObfuscatorUnsetAll(/*** update parameters list ***/)))
	print_r($ovhServiceDomain->getResult());
else
	print_r($ovhServiceDomain->getLastError());
// sample call for OvhServiceDomain::domainOperationList()
if($ovhServiceDomain->domainOperationList(new OvhStructDomainOperationList(/*** update parameters list ***/)))
	print_r($ovhServiceDomain->getResult());
else
	print_r($ovhServiceDomain->getLastError());
// sample call for OvhServiceDomain::domainWhoisObfuscatorList()
if($ovhServiceDomain->domainWhoisObfuscatorList(new OvhStructDomainWhoisObfuscatorList(/*** update parameters list ***/)))
	print_r($ovhServiceDomain->getResult());
else
	print_r($ovhServiceDomain->getLastError());
// sample call for OvhServiceDomain::domainHostInfo()
if($ovhServiceDomain->domainHostInfo(new OvhStructDomainHostInfo(/*** update parameters list ***/)))
	print_r($ovhServiceDomain->getResult());
else
	print_r($ovhServiceDomain->getLastError());

/********************************
 * Example for OvhServiceDatabase
 */
$ovhServiceDatabase = new OvhServiceDatabase($wsdl);
// sample call for OvhServiceDatabase::databaseChangePassword()
if($ovhServiceDatabase->databaseChangePassword(new OvhStructDatabaseChangePassword(/*** update parameters list ***/)))
	print_r($ovhServiceDatabase->getResult());
else
	print_r($ovhServiceDatabase->getLastError());
// sample call for OvhServiceDatabase::databaseDump()
if($ovhServiceDatabase->databaseDump(new OvhStructDatabaseDump(/*** update parameters list ***/)))
	print_r($ovhServiceDatabase->getResult());
else
	print_r($ovhServiceDatabase->getLastError());
// sample call for OvhServiceDatabase::databaseCreate()
if($ovhServiceDatabase->databaseCreate(new OvhStructDatabaseCreate(/*** update parameters list ***/)))
	print_r($ovhServiceDatabase->getResult());
else
	print_r($ovhServiceDatabase->getLastError());
// sample call for OvhServiceDatabase::databaseList()
if($ovhServiceDatabase->databaseList(new OvhStructDatabaseList(/*** update parameters list ***/)))
	print_r($ovhServiceDatabase->getResult());
else
	print_r($ovhServiceDatabase->getLastError());
// sample call for OvhServiceDatabase::databaseDelete()
if($ovhServiceDatabase->databaseDelete(new OvhStructDatabaseDelete(/*** update parameters list ***/)))
	print_r($ovhServiceDatabase->getResult());
else
	print_r($ovhServiceDatabase->getLastError());
// sample call for OvhServiceDatabase::databaseRecreate()
if($ovhServiceDatabase->databaseRecreate(new OvhStructDatabaseRecreate(/*** update parameters list ***/)))
	print_r($ovhServiceDatabase->getResult());
else
	print_r($ovhServiceDatabase->getLastError());

/*******************************
 * Example for OvhServiceBilling
 */
$ovhServiceBilling = new OvhServiceBilling($wsdl);
// sample call for OvhServiceBilling::billingInvoiceList()
if($ovhServiceBilling->billingInvoiceList(new OvhStructBillingInvoiceList(/*** update parameters list ***/)))
	print_r($ovhServiceBilling->getResult());
else
	print_r($ovhServiceBilling->getLastError());
// sample call for OvhServiceBilling::billingGetReferencesToExpired()
if($ovhServiceBilling->billingGetReferencesToExpired(new OvhStructBillingGetReferencesToExpired(/*** update parameters list ***/)))
	print_r($ovhServiceBilling->getResult());
else
	print_r($ovhServiceBilling->getLastError());
// sample call for OvhServiceBilling::billingGetAccessByNic()
if($ovhServiceBilling->billingGetAccessByNic(new OvhStructBillingGetAccessByNic(/*** update parameters list ***/)))
	print_r($ovhServiceBilling->getResult());
else
	print_r($ovhServiceBilling->getLastError());
// sample call for OvhServiceBilling::billingInvoiceInfo()
if($ovhServiceBilling->billingInvoiceInfo(new OvhStructBillingInvoiceInfo(/*** update parameters list ***/)))
	print_r($ovhServiceBilling->getResult());
else
	print_r($ovhServiceBilling->getLastError());

/******************************
 * Example for OvhServiceGlobal
 */
$ovhServiceGlobal = new OvhServiceGlobal($wsdl);
// sample call for OvhServiceGlobal::globalAccessByNic()
if($ovhServiceGlobal->globalAccessByNic(new OvhStructGlobalAccessByNic(/*** update parameters list ***/)))
	print_r($ovhServiceGlobal->getResult());
else
	print_r($ovhServiceGlobal->getLastError());

/******************************
 * Example for OvhServiceTicket
 */
$ovhServiceTicket = new OvhServiceTicket($wsdl);
// sample call for OvhServiceTicket::ticketListIncidentsByDomain()
if($ovhServiceTicket->ticketListIncidentsByDomain(new OvhStructTicketListIncidentsByDomain(/*** update parameters list ***/)))
	print_r($ovhServiceTicket->getResult());
else
	print_r($ovhServiceTicket->getLastError());
// sample call for OvhServiceTicket::ticketListIncidents()
if($ovhServiceTicket->ticketListIncidents(new OvhStructTicketListIncidents(/*** update parameters list ***/)))
	print_r($ovhServiceTicket->getResult());
else
	print_r($ovhServiceTicket->getLastError());
// sample call for OvhServiceTicket::ticketReopen()
if($ovhServiceTicket->ticketReopen(new OvhStructTicketReopen(/*** update parameters list ***/)))
	print_r($ovhServiceTicket->getResult());
else
	print_r($ovhServiceTicket->getLastError());
// sample call for OvhServiceTicket::ticketListContact()
if($ovhServiceTicket->ticketListContact(new OvhStructTicketListContact(/*** update parameters list ***/)))
	print_r($ovhServiceTicket->getResult());
else
	print_r($ovhServiceTicket->getLastError());
// sample call for OvhServiceTicket::ticketGet()
if($ovhServiceTicket->ticketGet(new OvhStructTicketGet(/*** update parameters list ***/)))
	print_r($ovhServiceTicket->getResult());
else
	print_r($ovhServiceTicket->getLastError());
// sample call for OvhServiceTicket::ticketAnswer()
if($ovhServiceTicket->ticketAnswer(new OvhStructTicketAnswer(/*** update parameters list ***/)))
	print_r($ovhServiceTicket->getResult());
else
	print_r($ovhServiceTicket->getLastError());
// sample call for OvhServiceTicket::ticketClose()
if($ovhServiceTicket->ticketClose(new OvhStructTicketClose(/*** update parameters list ***/)))
	print_r($ovhServiceTicket->getResult());
else
	print_r($ovhServiceTicket->getLastError());
// sample call for OvhServiceTicket::ticketCreate()
if($ovhServiceTicket->ticketCreate(new OvhStructTicketCreate(/*** update parameters list ***/)))
	print_r($ovhServiceTicket->getResult());
else
	print_r($ovhServiceTicket->getLastError());

/****************************
 * Example for OvhServiceZone
 */
$ovhServiceZone = new OvhServiceZone($wsdl);
// sample call for OvhServiceZone::zoneEntryList()
if($ovhServiceZone->zoneEntryList(new OvhStructZoneEntryList(/*** update parameters list ***/)))
	print_r($ovhServiceZone->getResult());
else
	print_r($ovhServiceZone->getLastError());
// sample call for OvhServiceZone::zoneEntryAddCustom()
if($ovhServiceZone->zoneEntryAddCustom(new OvhStructZoneEntryAddCustom(/*** update parameters list ***/)))
	print_r($ovhServiceZone->getResult());
else
	print_r($ovhServiceZone->getLastError());
// sample call for OvhServiceZone::zoneEntryModify()
if($ovhServiceZone->zoneEntryModify(new OvhStructZoneEntryModify(/*** update parameters list ***/)))
	print_r($ovhServiceZone->getResult());
else
	print_r($ovhServiceZone->getLastError());
// sample call for OvhServiceZone::zoneEntryDel()
if($ovhServiceZone->zoneEntryDel(new OvhStructZoneEntryDel(/*** update parameters list ***/)))
	print_r($ovhServiceZone->getResult());
else
	print_r($ovhServiceZone->getLastError());
// sample call for OvhServiceZone::zoneEntryAdd()
if($ovhServiceZone->zoneEntryAdd(new OvhStructZoneEntryAdd(/*** update parameters list ***/)))
	print_r($ovhServiceZone->getResult());
else
	print_r($ovhServiceZone->getLastError());
// sample call for OvhServiceZone::zoneExport()
if($ovhServiceZone->zoneExport(new OvhStructZoneExport(/*** update parameters list ***/)))
	print_r($ovhServiceZone->getResult());
else
	print_r($ovhServiceZone->getLastError());
// sample call for OvhServiceZone::zoneImport()
if($ovhServiceZone->zoneImport(new OvhStructZoneImport(/*** update parameters list ***/)))
	print_r($ovhServiceZone->getResult());
else
	print_r($ovhServiceZone->getLastError());

/***************************
 * Example for OvhServiceDns
 */
$ovhServiceDns = new OvhServiceDns($wsdl);
// sample call for OvhServiceDns::dnsDefaultInstallCustom()
if($ovhServiceDns->dnsDefaultInstallCustom(new OvhStructDnsDefaultInstallCustom(/*** update parameters list ***/)))
	print_r($ovhServiceDns->getResult());
else
	print_r($ovhServiceDns->getLastError());
// sample call for OvhServiceDns::dnsInstall()
if($ovhServiceDns->dnsInstall(new OvhStructDnsInstall(/*** update parameters list ***/)))
	print_r($ovhServiceDns->getResult());
else
	print_r($ovhServiceDns->getLastError());
// sample call for OvhServiceDns::dnsReset()
if($ovhServiceDns->dnsReset(new OvhStructDnsReset(/*** update parameters list ***/)))
	print_r($ovhServiceDns->getResult());
else
	print_r($ovhServiceDns->getLastError());
// sample call for OvhServiceDns::dnsSoaModify()
if($ovhServiceDns->dnsSoaModify(new OvhStructDnsSoaModify(/*** update parameters list ***/)))
	print_r($ovhServiceDns->getResult());
else
	print_r($ovhServiceDns->getLastError());
// sample call for OvhServiceDns::dnsInstallCustom()
if($ovhServiceDns->dnsInstallCustom(new OvhStructDnsInstallCustom(/*** update parameters list ***/)))
	print_r($ovhServiceDns->getResult());
else
	print_r($ovhServiceDns->getLastError());
// sample call for OvhServiceDns::dnsUninstall()
if($ovhServiceDns->dnsUninstall(new OvhStructDnsUninstall(/*** update parameters list ***/)))
	print_r($ovhServiceDns->getResult());
else
	print_r($ovhServiceDns->getLastError());
// sample call for OvhServiceDns::dnsGeolocalizeHosting()
if($ovhServiceDns->dnsGeolocalizeHosting(new OvhStructDnsGeolocalizeHosting(/*** update parameters list ***/)))
	print_r($ovhServiceDns->getResult());
else
	print_r($ovhServiceDns->getLastError());

/***************************
 * Example for OvhServicePop
 */
$ovhServicePop = new OvhServicePop($wsdl);
// sample call for OvhServicePop::popDetachMasterNic()
if($ovhServicePop->popDetachMasterNic(new OvhStructPopDetachMasterNic(/*** update parameters list ***/)))
	print_r($ovhServicePop->getResult());
else
	print_r($ovhServicePop->getLastError());
// sample call for OvhServicePop::popList()
if($ovhServicePop->popList(new OvhStructPopList(/*** update parameters list ***/)))
	print_r($ovhServicePop->getResult());
else
	print_r($ovhServicePop->getLastError());
// sample call for OvhServicePop::popUpgradeQuota()
if($ovhServicePop->popUpgradeQuota(new OvhStructPopUpgradeQuota(/*** update parameters list ***/)))
	print_r($ovhServicePop->getResult());
else
	print_r($ovhServicePop->getLastError());
// sample call for OvhServicePop::popDel()
if($ovhServicePop->popDel(new OvhStructPopDel(/*** update parameters list ***/)))
	print_r($ovhServicePop->getResult());
else
	print_r($ovhServicePop->getLastError());
// sample call for OvhServicePop::popListByMasterNic()
if($ovhServicePop->popListByMasterNic(new OvhStructPopListByMasterNic(/*** update parameters list ***/)))
	print_r($ovhServicePop->getResult());
else
	print_r($ovhServicePop->getLastError());
// sample call for OvhServicePop::popModifyDescription()
if($ovhServicePop->popModifyDescription(new OvhStructPopModifyDescription(/*** update parameters list ***/)))
	print_r($ovhServicePop->getResult());
else
	print_r($ovhServicePop->getLastError());
// sample call for OvhServicePop::popInfo()
if($ovhServicePop->popInfo(new OvhStructPopInfo(/*** update parameters list ***/)))
	print_r($ovhServicePop->getResult());
else
	print_r($ovhServicePop->getLastError());
// sample call for OvhServicePop::popModifyPassword()
if($ovhServicePop->popModifyPassword(new OvhStructPopModifyPassword(/*** update parameters list ***/)))
	print_r($ovhServicePop->getResult());
else
	print_r($ovhServicePop->getLastError());
// sample call for OvhServicePop::popAttachMasterNic()
if($ovhServicePop->popAttachMasterNic(new OvhStructPopAttachMasterNic(/*** update parameters list ***/)))
	print_r($ovhServicePop->getResult());
else
	print_r($ovhServicePop->getLastError());
// sample call for OvhServicePop::popAdd()
if($ovhServicePop->popAdd(new OvhStructPopAdd(/*** update parameters list ***/)))
	print_r($ovhServicePop->getResult());
else
	print_r($ovhServicePop->getLastError());
// sample call for OvhServicePop::popGetQuota()
if($ovhServicePop->popGetQuota(new OvhStructPopGetQuota(/*** update parameters list ***/)))
	print_r($ovhServicePop->getResult());
else
	print_r($ovhServicePop->getLastError());

/*********************************
 * Example for OvhServiceOverquota
 */
$ovhServiceOverquota = new OvhServiceOverquota($wsdl);
// sample call for OvhServiceOverquota::overquotaInfo()
if($ovhServiceOverquota->overquotaInfo(new OvhStructOverquotaInfo(/*** update parameters list ***/)))
	print_r($ovhServiceOverquota->getResult());
else
	print_r($ovhServiceOverquota->getLastError());

/*****************************
 * Example for OvhServiceEmail
 */
$ovhServiceEmail = new OvhServiceEmail($wsdl);
// sample call for OvhServiceEmail::emailGetCapabilities()
if($ovhServiceEmail->emailGetCapabilities(new OvhStructEmailGetCapabilities(/*** update parameters list ***/)))
	print_r($ovhServiceEmail->getResult());
else
	print_r($ovhServiceEmail->getLastError());
// sample call for OvhServiceEmail::emailDomainListByMasterNic()
if($ovhServiceEmail->emailDomainListByMasterNic(new OvhStructEmailDomainListByMasterNic(/*** update parameters list ***/)))
	print_r($ovhServiceEmail->getResult());
else
	print_r($ovhServiceEmail->getLastError());
// sample call for OvhServiceEmail::emailDomainSummary()
if($ovhServiceEmail->emailDomainSummary(new OvhStructEmailDomainSummary(/*** update parameters list ***/)))
	print_r($ovhServiceEmail->getResult());
else
	print_r($ovhServiceEmail->getLastError());
// sample call for OvhServiceEmail::emailFilterAdd()
if($ovhServiceEmail->emailFilterAdd(new OvhStructEmailFilterAdd(/*** update parameters list ***/)))
	print_r($ovhServiceEmail->getResult());
else
	print_r($ovhServiceEmail->getLastError());
// sample call for OvhServiceEmail::emailAccessByNic()
if($ovhServiceEmail->emailAccessByNic(new OvhStructEmailAccessByNic(/*** update parameters list ***/)))
	print_r($ovhServiceEmail->getResult());
else
	print_r($ovhServiceEmail->getLastError());
// sample call for OvhServiceEmail::emailFilterRuleDel()
if($ovhServiceEmail->emailFilterRuleDel(new OvhStructEmailFilterRuleDel(/*** update parameters list ***/)))
	print_r($ovhServiceEmail->getResult());
else
	print_r($ovhServiceEmail->getLastError());
// sample call for OvhServiceEmail::emailFilterPriority()
if($ovhServiceEmail->emailFilterPriority(new OvhStructEmailFilterPriority(/*** update parameters list ***/)))
	print_r($ovhServiceEmail->getResult());
else
	print_r($ovhServiceEmail->getLastError());
// sample call for OvhServiceEmail::emailFilterDel()
if($ovhServiceEmail->emailFilterDel(new OvhStructEmailFilterDel(/*** update parameters list ***/)))
	print_r($ovhServiceEmail->getResult());
else
	print_r($ovhServiceEmail->getLastError());
// sample call for OvhServiceEmail::emailSetDomainCatchAll()
if($ovhServiceEmail->emailSetDomainCatchAll(new OvhStructEmailSetDomainCatchAll(/*** update parameters list ***/)))
	print_r($ovhServiceEmail->getResult());
else
	print_r($ovhServiceEmail->getLastError());
// sample call for OvhServiceEmail::emailDomainMxList()
if($ovhServiceEmail->emailDomainMxList(new OvhStructEmailDomainMxList(/*** update parameters list ***/)))
	print_r($ovhServiceEmail->getResult());
else
	print_r($ovhServiceEmail->getLastError());
// sample call for OvhServiceEmail::emailFilterRuleAdd()
if($ovhServiceEmail->emailFilterRuleAdd(new OvhStructEmailFilterRuleAdd(/*** update parameters list ***/)))
	print_r($ovhServiceEmail->getResult());
else
	print_r($ovhServiceEmail->getLastError());
// sample call for OvhServiceEmail::emailFilterActive()
if($ovhServiceEmail->emailFilterActive(new OvhStructEmailFilterActive(/*** update parameters list ***/)))
	print_r($ovhServiceEmail->getResult());
else
	print_r($ovhServiceEmail->getLastError());
// sample call for OvhServiceEmail::emailFilterList()
if($ovhServiceEmail->emailFilterList(new OvhStructEmailFilterList(/*** update parameters list ***/)))
	print_r($ovhServiceEmail->getResult());
else
	print_r($ovhServiceEmail->getLastError());
// sample call for OvhServiceEmail::emailGetDomainMxFiltering()
if($ovhServiceEmail->emailGetDomainMxFiltering(new OvhStructEmailGetDomainMxFiltering(/*** update parameters list ***/)))
	print_r($ovhServiceEmail->getResult());
else
	print_r($ovhServiceEmail->getLastError());
// sample call for OvhServiceEmail::emailDelMasterNic()
if($ovhServiceEmail->emailDelMasterNic(new OvhStructEmailDelMasterNic(/*** update parameters list ***/)))
	print_r($ovhServiceEmail->getResult());
else
	print_r($ovhServiceEmail->getLastError());
// sample call for OvhServiceEmail::emailGetDomainCatchAll()
if($ovhServiceEmail->emailGetDomainCatchAll(new OvhStructEmailGetDomainCatchAll(/*** update parameters list ***/)))
	print_r($ovhServiceEmail->getResult());
else
	print_r($ovhServiceEmail->getLastError());
// sample call for OvhServiceEmail::emailSetMasterNic()
if($ovhServiceEmail->emailSetMasterNic(new OvhStructEmailSetMasterNic(/*** update parameters list ***/)))
	print_r($ovhServiceEmail->getResult());
else
	print_r($ovhServiceEmail->getLastError());
// sample call for OvhServiceEmail::emailSetDomainMxFiltering()
if($ovhServiceEmail->emailSetDomainMxFiltering(new OvhStructEmailSetDomainMxFiltering(/*** update parameters list ***/)))
	print_r($ovhServiceEmail->getResult());
else
	print_r($ovhServiceEmail->getLastError());

/***************************
 * Example for OvhServiceOrt
 */
$ovhServiceOrt = new OvhServiceOrt($wsdl);
// sample call for OvhServiceOrt::ortDomainDel()
if($ovhServiceOrt->ortDomainDel(new OvhStructOrtDomainDel(/*** update parameters list ***/)))
	print_r($ovhServiceOrt->getResult());
else
	print_r($ovhServiceOrt->getLastError());
// sample call for OvhServiceOrt::ortDomainList()
if($ovhServiceOrt->ortDomainList(new OvhStructOrtDomainList(/*** update parameters list ***/)))
	print_r($ovhServiceOrt->getResult());
else
	print_r($ovhServiceOrt->getLastError());
// sample call for OvhServiceOrt::ortDomainAdd()
if($ovhServiceOrt->ortDomainAdd(new OvhStructOrtDomainAdd(/*** update parameters list ***/)))
	print_r($ovhServiceOrt->getResult());
else
	print_r($ovhServiceOrt->getLastError());

/*******************************
 * Example for OvhServicePrepaid
 */
$ovhServicePrepaid = new OvhServicePrepaid($wsdl);
// sample call for OvhServicePrepaid::prepaidDomainCreate()
if($ovhServicePrepaid->prepaidDomainCreate(new OvhStructPrepaidDomainCreate(/*** update parameters list ***/)))
	print_r($ovhServicePrepaid->getResult());
else
	print_r($ovhServicePrepaid->getLastError());
// sample call for OvhServicePrepaid::prepaidDomainTransfer()
if($ovhServicePrepaid->prepaidDomainTransfer(new OvhStructPrepaidDomainTransfer(/*** update parameters list ***/)))
	print_r($ovhServicePrepaid->getResult());
else
	print_r($ovhServicePrepaid->getLastError());
// sample call for OvhServicePrepaid::prepaidSetThreshold()
if($ovhServicePrepaid->prepaidSetThreshold(new OvhStructPrepaidSetThreshold(/*** update parameters list ***/)))
	print_r($ovhServicePrepaid->getResult());
else
	print_r($ovhServicePrepaid->getLastError());
// sample call for OvhServicePrepaid::prepaidGetSummary()
if($ovhServicePrepaid->prepaidGetSummary(new OvhStructPrepaidGetSummary(/*** update parameters list ***/)))
	print_r($ovhServicePrepaid->getResult());
else
	print_r($ovhServicePrepaid->getLastError());
// sample call for OvhServicePrepaid::prepaidDomainRenew()
if($ovhServicePrepaid->prepaidDomainRenew(new OvhStructPrepaidDomainRenew(/*** update parameters list ***/)))
	print_r($ovhServicePrepaid->getResult());
else
	print_r($ovhServicePrepaid->getLastError());
// sample call for OvhServicePrepaid::prepaidGetThreshold()
if($ovhServicePrepaid->prepaidGetThreshold(new OvhStructPrepaidGetThreshold(/*** update parameters list ***/)))
	print_r($ovhServicePrepaid->getResult());
else
	print_r($ovhServicePrepaid->getLastError());
// sample call for OvhServicePrepaid::prepaidGetHistory()
if($ovhServicePrepaid->prepaidGetHistory(new OvhStructPrepaidGetHistory(/*** update parameters list ***/)))
	print_r($ovhServicePrepaid->getResult());
else
	print_r($ovhServicePrepaid->getLastError());
// sample call for OvhServicePrepaid::prepaidGetBalance()
if($ovhServicePrepaid->prepaidGetBalance(new OvhStructPrepaidGetBalance(/*** update parameters list ***/)))
	print_r($ovhServicePrepaid->getResult());
else
	print_r($ovhServicePrepaid->getLastError());

/***************************
 * Example for OvhServiceRps
 */
$ovhServiceRps = new OvhServiceRps($wsdl);
// sample call for OvhServiceRps::rpsMigrationGetProgressStatus()
if($ovhServiceRps->rpsMigrationGetProgressStatus(new OvhStructRpsMigrationGetProgressStatus(/*** update parameters list ***/)))
	print_r($ovhServiceRps->getResult());
else
	print_r($ovhServiceRps->getLastError());
// sample call for OvhServiceRps::rpsMigrationStatus()
if($ovhServiceRps->rpsMigrationStatus(new OvhStructRpsMigrationStatus(/*** update parameters list ***/)))
	print_r($ovhServiceRps->getResult());
else
	print_r($ovhServiceRps->getLastError());
// sample call for OvhServiceRps::rpsMigrationTodo()
if($ovhServiceRps->rpsMigrationTodo(new OvhStructRpsMigrationTodo(/*** update parameters list ***/)))
	print_r($ovhServiceRps->getResult());
else
	print_r($ovhServiceRps->getLastError());
// sample call for OvhServiceRps::rpsGetIoStats()
if($ovhServiceRps->rpsGetIoStats(new OvhStructRpsGetIoStats(/*** update parameters list ***/)))
	print_r($ovhServiceRps->getResult());
else
	print_r($ovhServiceRps->getLastError());

/********************************
 * Example for OvhServiceReseller
 */
$ovhServiceReseller = new OvhServiceReseller($wsdl);
// sample call for OvhServiceReseller::resellerDomainTransferIT()
if($ovhServiceReseller->resellerDomainTransferIT(new OvhStructResellerDomainTransferIT(/*** update parameters list ***/)))
	print_r($ovhServiceReseller->getResult());
else
	print_r($ovhServiceReseller->getLastError());
// sample call for OvhServiceReseller::resellerDomainRestore()
if($ovhServiceReseller->resellerDomainRestore(new OvhStructResellerDomainRestore(/*** update parameters list ***/)))
	print_r($ovhServiceReseller->getResult());
else
	print_r($ovhServiceReseller->getLastError());
// sample call for OvhServiceReseller::resellerDomainRenew()
if($ovhServiceReseller->resellerDomainRenew(new OvhStructResellerDomainRenew(/*** update parameters list ***/)))
	print_r($ovhServiceReseller->getResult());
else
	print_r($ovhServiceReseller->getLastError());
// sample call for OvhServiceReseller::resellerDomainCreate()
if($ovhServiceReseller->resellerDomainCreate(new OvhStructResellerDomainCreate(/*** update parameters list ***/)))
	print_r($ovhServiceReseller->getResult());
else
	print_r($ovhServiceReseller->getLastError());
// sample call for OvhServiceReseller::resellerDomainCreateIT()
if($ovhServiceReseller->resellerDomainCreateIT(new OvhStructResellerDomainCreateIT(/*** update parameters list ***/)))
	print_r($ovhServiceReseller->getResult());
else
	print_r($ovhServiceReseller->getLastError());
// sample call for OvhServiceReseller::resellerDomainTransferASIA()
if($ovhServiceReseller->resellerDomainTransferASIA(new OvhStructResellerDomainTransferASIA(/*** update parameters list ***/)))
	print_r($ovhServiceReseller->getResult());
else
	print_r($ovhServiceReseller->getLastError());
// sample call for OvhServiceReseller::resellerDomainCreateCAT()
if($ovhServiceReseller->resellerDomainCreateCAT(new OvhStructResellerDomainCreateCAT(/*** update parameters list ***/)))
	print_r($ovhServiceReseller->getResult());
else
	print_r($ovhServiceReseller->getLastError());
// sample call for OvhServiceReseller::resellerDomainCreateASIA()
if($ovhServiceReseller->resellerDomainCreateASIA(new OvhStructResellerDomainCreateASIA(/*** update parameters list ***/)))
	print_r($ovhServiceReseller->getResult());
else
	print_r($ovhServiceReseller->getLastError());
// sample call for OvhServiceReseller::resellerDomainTransfer()
if($ovhServiceReseller->resellerDomainTransfer(new OvhStructResellerDomainTransfer(/*** update parameters list ***/)))
	print_r($ovhServiceReseller->getResult());
else
	print_r($ovhServiceReseller->getLastError());

/**************************************
 * Example for OvhServiceInfrastructure
 */
$ovhServiceInfrastructure = new OvhServiceInfrastructure($wsdl);
// sample call for OvhServiceInfrastructure::infrastructureReverseModify()
if($ovhServiceInfrastructure->infrastructureReverseModify(new OvhStructInfrastructureReverseModify(/*** update parameters list ***/)))
	print_r($ovhServiceInfrastructure->getResult());
else
	print_r($ovhServiceInfrastructure->getLastError());
// sample call for OvhServiceInfrastructure::infrastructureIpListGet()
if($ovhServiceInfrastructure->infrastructureIpListGet(new OvhStructInfrastructureIpListGet(/*** update parameters list ***/)))
	print_r($ovhServiceInfrastructure->getResult());
else
	print_r($ovhServiceInfrastructure->getLastError());

/*********************************
 * Example for OvhServiceResponder
 */
$ovhServiceResponder = new OvhServiceResponder($wsdl);
// sample call for OvhServiceResponder::responderEmailList()
if($ovhServiceResponder->responderEmailList(new OvhStructResponderEmailList(/*** update parameters list ***/)))
	print_r($ovhServiceResponder->getResult());
else
	print_r($ovhServiceResponder->getLastError());
// sample call for OvhServiceResponder::responderEmailInfo()
if($ovhServiceResponder->responderEmailInfo(new OvhStructResponderEmailInfo(/*** update parameters list ***/)))
	print_r($ovhServiceResponder->getResult());
else
	print_r($ovhServiceResponder->getLastError());
// sample call for OvhServiceResponder::responderEmailDel()
if($ovhServiceResponder->responderEmailDel(new OvhStructResponderEmailDel(/*** update parameters list ***/)))
	print_r($ovhServiceResponder->getResult());
else
	print_r($ovhServiceResponder->getLastError());
// sample call for OvhServiceResponder::responderEmailModify()
if($ovhServiceResponder->responderEmailModify(new OvhStructResponderEmailModify(/*** update parameters list ***/)))
	print_r($ovhServiceResponder->getResult());
else
	print_r($ovhServiceResponder->getLastError());
// sample call for OvhServiceResponder::responderEmailAdd()
if($ovhServiceResponder->responderEmailAdd(new OvhStructResponderEmailAdd(/*** update parameters list ***/)))
	print_r($ovhServiceResponder->getResult());
else
	print_r($ovhServiceResponder->getLastError());

/*******************************
 * Example for OvhServiceHosting
 */
$ovhServiceHosting = new OvhServiceHosting($wsdl);
// sample call for OvhServiceHosting::hostingAccessByNic()
if($ovhServiceHosting->hostingAccessByNic(new OvhStructHostingAccessByNic(/*** update parameters list ***/)))
	print_r($ovhServiceHosting->getResult());
else
	print_r($ovhServiceHosting->getLastError());
// sample call for OvhServiceHosting::hostingSummary()
if($ovhServiceHosting->hostingSummary(new OvhStructHostingSummary(/*** update parameters list ***/)))
	print_r($ovhServiceHosting->getResult());
else
	print_r($ovhServiceHosting->getLastError());
// sample call for OvhServiceHosting::hostingGetCapabilities()
if($ovhServiceHosting->hostingGetCapabilities(new OvhStructHostingGetCapabilities(/*** update parameters list ***/)))
	print_r($ovhServiceHosting->getResult());
else
	print_r($ovhServiceHosting->getLastError());
// sample call for OvhServiceHosting::hostingChangeMainDomain()
if($ovhServiceHosting->hostingChangeMainDomain(new OvhStructHostingChangeMainDomain(/*** update parameters list ***/)))
	print_r($ovhServiceHosting->getResult());
else
	print_r($ovhServiceHosting->getLastError());
// sample call for OvhServiceHosting::hostingList()
if($ovhServiceHosting->hostingList(new OvhStructHostingList(/*** update parameters list ***/)))
	print_r($ovhServiceHosting->getResult());
else
	print_r($ovhServiceHosting->getLastError());

/*******************************
 * Example for OvhServiceManaged
 */
$ovhServiceManaged = new OvhServiceManaged($wsdl);
// sample call for OvhServiceManaged::managedServicesPartitionQuotaUsed()
if($ovhServiceManaged->managedServicesPartitionQuotaUsed(new OvhStructManagedServicesPartitionQuotaUsed(/*** update parameters list ***/)))
	print_r($ovhServiceManaged->getResult());
else
	print_r($ovhServiceManaged->getLastError());
// sample call for OvhServiceManaged::managedServicesIpAccessChange()
if($ovhServiceManaged->managedServicesIpAccessChange(new OvhStructManagedServicesIpAccessChange(/*** update parameters list ***/)))
	print_r($ovhServiceManaged->getResult());
else
	print_r($ovhServiceManaged->getLastError());
// sample call for OvhServiceManaged::managedServicesSnapshotUpdate()
if($ovhServiceManaged->managedServicesSnapshotUpdate(new OvhStructManagedServicesSnapshotUpdate(/*** update parameters list ***/)))
	print_r($ovhServiceManaged->getResult());
else
	print_r($ovhServiceManaged->getLastError());
// sample call for OvhServiceManaged::managedServicesHostMasterIpGet()
if($ovhServiceManaged->managedServicesHostMasterIpGet(new OvhStructManagedServicesHostMasterIpGet(/*** update parameters list ***/)))
	print_r($ovhServiceManaged->getResult());
else
	print_r($ovhServiceManaged->getLastError());
// sample call for OvhServiceManaged::managedServicesPartitionDelete()
if($ovhServiceManaged->managedServicesPartitionDelete(new OvhStructManagedServicesPartitionDelete(/*** update parameters list ***/)))
	print_r($ovhServiceManaged->getResult());
else
	print_r($ovhServiceManaged->getLastError());
// sample call for OvhServiceManaged::managedServicesPartitionStatusCheck()
if($ovhServiceManaged->managedServicesPartitionStatusCheck(new OvhStructManagedServicesPartitionStatusCheck(/*** update parameters list ***/)))
	print_r($ovhServiceManaged->getResult());
else
	print_r($ovhServiceManaged->getLastError());
// sample call for OvhServiceManaged::managedServicesPartitionCreate()
if($ovhServiceManaged->managedServicesPartitionCreate(new OvhStructManagedServicesPartitionCreate(/*** update parameters list ***/)))
	print_r($ovhServiceManaged->getResult());
else
	print_r($ovhServiceManaged->getLastError());
// sample call for OvhServiceManaged::managedServicesPartitionGet()
if($ovhServiceManaged->managedServicesPartitionGet(new OvhStructManagedServicesPartitionGet(/*** update parameters list ***/)))
	print_r($ovhServiceManaged->getResult());
else
	print_r($ovhServiceManaged->getLastError());
// sample call for OvhServiceManaged::managedServicesPartitionUpdate()
if($ovhServiceManaged->managedServicesPartitionUpdate(new OvhStructManagedServicesPartitionUpdate(/*** update parameters list ***/)))
	print_r($ovhServiceManaged->getResult());
else
	print_r($ovhServiceManaged->getLastError());
// sample call for OvhServiceManaged::managedServicesNameUpdate()
if($ovhServiceManaged->managedServicesNameUpdate(new OvhStructManagedServicesNameUpdate(/*** update parameters list ***/)))
	print_r($ovhServiceManaged->getResult());
else
	print_r($ovhServiceManaged->getLastError());

/*******************************
 * Example for OvhServiceAccount
 */
$ovhServiceAccount = new OvhServiceAccount($wsdl);
// sample call for OvhServiceAccount::accountSummary()
if($ovhServiceAccount->accountSummary(new OvhStructAccountSummary(/*** update parameters list ***/)))
	print_r($ovhServiceAccount->getResult());
else
	print_r($ovhServiceAccount->getLastError());
// sample call for OvhServiceAccount::accountHistory()
if($ovhServiceAccount->accountHistory(new OvhStructAccountHistory(/*** update parameters list ***/)))
	print_r($ovhServiceAccount->getResult());
else
	print_r($ovhServiceAccount->getLastError());
// sample call for OvhServiceAccount::accountAlertThresholdSet()
if($ovhServiceAccount->accountAlertThresholdSet(new OvhStructAccountAlertThresholdSet(/*** update parameters list ***/)))
	print_r($ovhServiceAccount->getResult());
else
	print_r($ovhServiceAccount->getLastError());

/***************************
 * Example for OvhServiceSub
 */
$ovhServiceSub = new OvhServiceSub($wsdl);
// sample call for OvhServiceSub::subDomainDel()
if($ovhServiceSub->subDomainDel(new OvhStructSubDomainDel(/*** update parameters list ***/)))
	print_r($ovhServiceSub->getResult());
else
	print_r($ovhServiceSub->getLastError());
// sample call for OvhServiceSub::subDomainModify()
if($ovhServiceSub->subDomainModify(new OvhStructSubDomainModify(/*** update parameters list ***/)))
	print_r($ovhServiceSub->getResult());
else
	print_r($ovhServiceSub->getLastError());
// sample call for OvhServiceSub::subDomainAdd()
if($ovhServiceSub->subDomainAdd(new OvhStructSubDomainAdd(/*** update parameters list ***/)))
	print_r($ovhServiceSub->getResult());
else
	print_r($ovhServiceSub->getLastError());
// sample call for OvhServiceSub::subDomainList()
if($ovhServiceSub->subDomainList(new OvhStructSubDomainList(/*** update parameters list ***/)))
	print_r($ovhServiceSub->getResult());
else
	print_r($ovhServiceSub->getLastError());

/*******************************
 * Example for OvhServiceSupport
 */
$ovhServiceSupport = new OvhServiceSupport($wsdl);
// sample call for OvhServiceSupport::supportGetNicDomains()
if($ovhServiceSupport->supportGetNicDomains(new OvhStructSupportGetNicDomains(/*** update parameters list ***/)))
	print_r($ovhServiceSupport->getResult());
else
	print_r($ovhServiceSupport->getLastError());
// sample call for OvhServiceSupport::supportGetThreads()
if($ovhServiceSupport->supportGetThreads(new OvhStructSupportGetThreads(/*** update parameters list ***/)))
	print_r($ovhServiceSupport->getResult());
else
	print_r($ovhServiceSupport->getLastError());
// sample call for OvhServiceSupport::supportSendMessage()
if($ovhServiceSupport->supportSendMessage(new OvhStructSupportSendMessage(/*** update parameters list ***/)))
	print_r($ovhServiceSupport->getResult());
else
	print_r($ovhServiceSupport->getLastError());
// sample call for OvhServiceSupport::supportGetAllVisibleCategories()
if($ovhServiceSupport->supportGetAllVisibleCategories(new OvhStructSupportGetAllVisibleCategories(/*** update parameters list ***/)))
	print_r($ovhServiceSupport->getResult());
else
	print_r($ovhServiceSupport->getLastError());
// sample call for OvhServiceSupport::supportGetThreadTree()
if($ovhServiceSupport->supportGetThreadTree(new OvhStructSupportGetThreadTree(/*** update parameters list ***/)))
	print_r($ovhServiceSupport->getResult());
else
	print_r($ovhServiceSupport->getLastError());
// sample call for OvhServiceSupport::supportReportAnswerProblem()
if($ovhServiceSupport->supportReportAnswerProblem(new OvhStructSupportReportAnswerProblem(/*** update parameters list ***/)))
	print_r($ovhServiceSupport->getResult());
else
	print_r($ovhServiceSupport->getLastError());
// sample call for OvhServiceSupport::supportGetFullMessage()
if($ovhServiceSupport->supportGetFullMessage(new OvhStructSupportGetFullMessage(/*** update parameters list ***/)))
	print_r($ovhServiceSupport->getResult());
else
	print_r($ovhServiceSupport->getLastError());
// sample call for OvhServiceSupport::supportCloseThreads()
if($ovhServiceSupport->supportCloseThreads(new OvhStructSupportCloseThreads(/*** update parameters list ***/)))
	print_r($ovhServiceSupport->getResult());
else
	print_r($ovhServiceSupport->getLastError());
// sample call for OvhServiceSupport::supportReactivateThread()
if($ovhServiceSupport->supportReactivateThread(new OvhStructSupportReactivateThread(/*** update parameters list ***/)))
	print_r($ovhServiceSupport->getResult());
else
	print_r($ovhServiceSupport->getLastError());

/*******************************
 * Example for OvhServiceCrontab
 */
$ovhServiceCrontab = new OvhServiceCrontab($wsdl);
// sample call for OvhServiceCrontab::crontabDel()
if($ovhServiceCrontab->crontabDel(new OvhStructCrontabDel(/*** update parameters list ***/)))
	print_r($ovhServiceCrontab->getResult());
else
	print_r($ovhServiceCrontab->getLastError());
// sample call for OvhServiceCrontab::crontabList()
if($ovhServiceCrontab->crontabList(new OvhStructCrontabList(/*** update parameters list ***/)))
	print_r($ovhServiceCrontab->getResult());
else
	print_r($ovhServiceCrontab->getLastError());
// sample call for OvhServiceCrontab::crontabAdd()
if($ovhServiceCrontab->crontabAdd(new OvhStructCrontabAdd(/*** update parameters list ***/)))
	print_r($ovhServiceCrontab->getResult());
else
	print_r($ovhServiceCrontab->getLastError());
// sample call for OvhServiceCrontab::crontabInfo()
if($ovhServiceCrontab->crontabInfo(new OvhStructCrontabInfo(/*** update parameters list ***/)))
	print_r($ovhServiceCrontab->getResult());
else
	print_r($ovhServiceCrontab->getLastError());
// sample call for OvhServiceCrontab::crontabModify()
if($ovhServiceCrontab->crontabModify(new OvhStructCrontabModify(/*** update parameters list ***/)))
	print_r($ovhServiceCrontab->getResult());
else
	print_r($ovhServiceCrontab->getLastError());

/*****************************
 * Example for OvhServiceOrder
 */
$ovhServiceOrder = new OvhServiceOrder($wsdl);
// sample call for OvhServiceOrder::orderTelephonySmsCredit()
if($ovhServiceOrder->orderTelephonySmsCredit(new OvhStructOrderTelephonySmsCredit(/*** update parameters list ***/)))
	print_r($ovhServiceOrder->getResult());
else
	print_r($ovhServiceOrder->getLastError());
// sample call for OvhServiceOrder::orderAccountCredit()
if($ovhServiceOrder->orderAccountCredit(new OvhStructOrderAccountCredit(/*** update parameters list ***/)))
	print_r($ovhServiceOrder->getResult());
else
	print_r($ovhServiceOrder->getLastError());
// sample call for OvhServiceOrder::orderEmailMxPlan()
if($ovhServiceOrder->orderEmailMxPlan(new OvhStructOrderEmailMxPlan(/*** update parameters list ***/)))
	print_r($ovhServiceOrder->getResult());
else
	print_r($ovhServiceOrder->getLastError());
// sample call for OvhServiceOrder::orderEmailMxLarge()
if($ovhServiceOrder->orderEmailMxLarge(new OvhStructOrderEmailMxLarge(/*** update parameters list ***/)))
	print_r($ovhServiceOrder->getResult());
else
	print_r($ovhServiceOrder->getLastError());
// sample call for OvhServiceOrder::orderDedicatedFailover()
if($ovhServiceOrder->orderDedicatedFailover(new OvhStructOrderDedicatedFailover(/*** update parameters list ***/)))
	print_r($ovhServiceOrder->getResult());
else
	print_r($ovhServiceOrder->getLastError());
// sample call for OvhServiceOrder::orderDedicatedFailoverRipe()
if($ovhServiceOrder->orderDedicatedFailoverRipe(new OvhStructOrderDedicatedFailoverRipe(/*** update parameters list ***/)))
	print_r($ovhServiceOrder->getResult());
else
	print_r($ovhServiceOrder->getLastError());

/*******************************
 * Example for OvhServiceNotepad
 */
$ovhServiceNotepad = new OvhServiceNotepad($wsdl);
// sample call for OvhServiceNotepad::notepadSet()
if($ovhServiceNotepad->notepadSet(new OvhStructNotepadSet(/*** update parameters list ***/)))
	print_r($ovhServiceNotepad->getResult());
else
	print_r($ovhServiceNotepad->getLastError());
// sample call for OvhServiceNotepad::notepadGet()
if($ovhServiceNotepad->notepadGet(new OvhStructNotepadGet(/*** update parameters list ***/)))
	print_r($ovhServiceNotepad->getResult());
else
	print_r($ovhServiceNotepad->getLastError());
// sample call for OvhServiceNotepad::notepadAdd()
if($ovhServiceNotepad->notepadAdd(new OvhStructNotepadAdd(/*** update parameters list ***/)))
	print_r($ovhServiceNotepad->getResult());
else
	print_r($ovhServiceNotepad->getLastError());
// sample call for OvhServiceNotepad::notepadFlush()
if($ovhServiceNotepad->notepadFlush(new OvhStructNotepadFlush(/*** update parameters list ***/)))
	print_r($ovhServiceNotepad->getResult());
else
	print_r($ovhServiceNotepad->getLastError());

/***************************
 * Example for OvhServiceCms
 */
$ovhServiceCms = new OvhServiceCms($wsdl);
// sample call for OvhServiceCms::cmsInstall()
if($ovhServiceCms->cmsInstall(new OvhStructCmsInstall(/*** update parameters list ***/)))
	print_r($ovhServiceCms->getResult());
else
	print_r($ovhServiceCms->getLastError());
// sample call for OvhServiceCms::cmsAvailableList()
if($ovhServiceCms->cmsAvailableList(new OvhStructCmsAvailableList(/*** update parameters list ***/)))
	print_r($ovhServiceCms->getResult());
else
	print_r($ovhServiceCms->getLastError());
// sample call for OvhServiceCms::cmsRemove()
if($ovhServiceCms->cmsRemove(new OvhStructCmsRemove(/*** update parameters list ***/)))
	print_r($ovhServiceCms->getResult());
else
	print_r($ovhServiceCms->getLastError());
// sample call for OvhServiceCms::cmsList()
if($ovhServiceCms->cmsList(new OvhStructCmsList(/*** update parameters list ***/)))
	print_r($ovhServiceCms->getResult());
else
	print_r($ovhServiceCms->getLastError());
// sample call for OvhServiceCms::cmsRenewAdminPassword()
if($ovhServiceCms->cmsRenewAdminPassword(new OvhStructCmsRenewAdminPassword(/*** update parameters list ***/)))
	print_r($ovhServiceCms->getResult());
else
	print_r($ovhServiceCms->getLastError());

/*****************************
 * Example for OvhServiceLogin
 */
$ovhServiceLogin = new OvhServiceLogin($wsdl);
// sample call for OvhServiceLogin::login()
if($ovhServiceLogin->login(new OvhStructLogin(/*** update parameters list ***/)))
	print_r($ovhServiceLogin->getResult());
else
	print_r($ovhServiceLogin->getLastError());

/********************************
 * Example for OvhServicePassword
 */
$ovhServicePassword = new OvhServicePassword($wsdl);
// sample call for OvhServicePassword::passwordSoapi()
if($ovhServicePassword->passwordSoapi(new OvhStructPasswordSoapi(/*** update parameters list ***/)))
	print_r($ovhServicePassword->getResult());
else
	print_r($ovhServicePassword->getLastError());
// sample call for OvhServicePassword::passwordManager()
if($ovhServicePassword->passwordManager(new OvhStructPasswordManager(/*** update parameters list ***/)))
	print_r($ovhServicePassword->getResult());
else
	print_r($ovhServicePassword->getLastError());

/*******************************
 * Example for OvhServiceVersion
 */
$ovhServiceVersion = new OvhServiceVersion($wsdl);
// sample call for OvhServiceVersion::version()
if($ovhServiceVersion->version())
	print_r($ovhServiceVersion->getResult());
else
	print_r($ovhServiceVersion->getLastError());

/*********************************
 * Example for OvhServiceAnonymous
 */
$ovhServiceAnonymous = new OvhServiceAnonymous($wsdl);
// sample call for OvhServiceAnonymous::anonymousFtpInfo()
if($ovhServiceAnonymous->anonymousFtpInfo(new OvhStructAnonymousFtpInfo(/*** update parameters list ***/)))
	print_r($ovhServiceAnonymous->getResult());
else
	print_r($ovhServiceAnonymous->getLastError());
// sample call for OvhServiceAnonymous::anonymousFtpActivate()
if($ovhServiceAnonymous->anonymousFtpActivate(new OvhStructAnonymousFtpActivate(/*** update parameters list ***/)))
	print_r($ovhServiceAnonymous->getResult());
else
	print_r($ovhServiceAnonymous->getLastError());
// sample call for OvhServiceAnonymous::anonymousFtpChangePassword()
if($ovhServiceAnonymous->anonymousFtpChangePassword(new OvhStructAnonymousFtpChangePassword(/*** update parameters list ***/)))
	print_r($ovhServiceAnonymous->getResult());
else
	print_r($ovhServiceAnonymous->getLastError());

/****************************
 * Example for OvhServiceLogs
 */
$ovhServiceLogs = new OvhServiceLogs($wsdl);
// sample call for OvhServiceLogs::logsAccessList()
if($ovhServiceLogs->logsAccessList(new OvhStructLogsAccessList(/*** update parameters list ***/)))
	print_r($ovhServiceLogs->getResult());
else
	print_r($ovhServiceLogs->getLastError());
// sample call for OvhServiceLogs::logsAccessDel()
if($ovhServiceLogs->logsAccessDel(new OvhStructLogsAccessDel(/*** update parameters list ***/)))
	print_r($ovhServiceLogs->getResult());
else
	print_r($ovhServiceLogs->getLastError());
// sample call for OvhServiceLogs::logsAccessAdd()
if($ovhServiceLogs->logsAccessAdd(new OvhStructLogsAccessAdd(/*** update parameters list ***/)))
	print_r($ovhServiceLogs->getResult());
else
	print_r($ovhServiceLogs->getLastError());

/***************************
 * Example for OvhServiceFtp
 */
$ovhServiceFtp = new OvhServiceFtp($wsdl);
// sample call for OvhServiceFtp::ftpInfo()
if($ovhServiceFtp->ftpInfo(new OvhStructFtpInfo(/*** update parameters list ***/)))
	print_r($ovhServiceFtp->getResult());
else
	print_r($ovhServiceFtp->getLastError());
// sample call for OvhServiceFtp::ftpChangePassword()
if($ovhServiceFtp->ftpChangePassword(new OvhStructFtpChangePassword(/*** update parameters list ***/)))
	print_r($ovhServiceFtp->getResult());
else
	print_r($ovhServiceFtp->getLastError());

/********************************
 * Example for OvhServiceLanguage
 */
$ovhServiceLanguage = new OvhServiceLanguage($wsdl);
// sample call for OvhServiceLanguage::language()
if($ovhServiceLanguage->language(new OvhStructLanguage(/*** update parameters list ***/)))
	print_r($ovhServiceLanguage->getResult());
else
	print_r($ovhServiceLanguage->getLastError());
?>