<?php
// autogenerated file 10.09.2012 12:58
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * No longer recommended. This supports an older format for describing item 
 * specifics using an ID-based model. Most eBay categories no longer support 
 * ID-based attributes.The remaining categories (e.g., US eBay Motors) will drop 
 * support for ID-based attributes by May 2012. New applications should not use 
 * ID-based attributes. Existing applications should be updated to remove all 
 * dependencieson ID-based attributes now. Instead, use GetCategorySpecifics for 
 * the newer Custom Item Specifics model.<br><br>Retrieves the Item Specifics SYI 
 * XSL stylesheet. Apply the stylesheet to theXML returned from a call to 
 * GetAttributesCS or GetProductSellingPages torender a form like the Item 
 * Specifics portion of eBay's Title and Description page.See the eBay Web Services 
 * Guide for an overview of Item Specifics and informationon working with the XSL. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetAttributesXSLRequestType.html
 *
 */
class GetAttributesXSLRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $FileName;
	/**
	 * @var string
	 */
	protected $FileVersion;

	/**
	 * @return string
	 */
	function getFileName()
	{
		return $this->FileName;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setFileName($value)
	{
		$this->FileName = $value;
	}
	/**
	 * @return string
	 */
	function getFileVersion()
	{
		return $this->FileVersion;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setFileVersion($value)
	{
		$this->FileVersion = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetAttributesXSLRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'FileName' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FileVersion' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>