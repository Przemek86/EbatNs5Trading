<?php
// autogenerated file 10.09.2012 12:58
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * If present, the site defines category settings for whether the seller can 
 * provide a Vehicle Registration Mark (VRM) for a UK eBay Motors vehicle listing. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/VRMSupportedDefinitionType.html
 *
 */
class VRMSupportedDefinitionType extends EbatNs_ComplexType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('VRMSupportedDefinitionType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()], array());
		}
	}
}
?>
