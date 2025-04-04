<?php
/**
*
* @package Board3 Portal v2.3 - Donation
* @copyright (c) 2013 Board3 Group ( www.board3.de )
* @license GNU General Public License, version 2 (GPL-2.0-only)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
$lang = array_merge($lang, [
	'ACP_PORTAL_PAYPAL_SETTINGS'		=> 'PayPal instellingen',
	'ACP_PORTAL_PAYPAL_SETTINGS_EXP'	=> 'Hier kan je het PayPal blok aanpassen.',
	'AUD'								=> 'Australische Dollars (AUD)',

	'CAD'								=> 'Canadese Dollars (CAD)',
	'CHF'								=> 'Zwitserse Franken (CHF)',
	'CZK'								=> 'Tsjechische Kroon (CZK)',

	'DKK'								=> 'Deense Kronen (DKK)',
	'DONATION'							=> 'PayPal donaties',
	'DONATION_TEXT'						=> 'is een groep die is gericht op het leveren van diensten en heeft geen enkele intentie om er zelf financieel beter van te worden. Je donatie is van harte welkom, zodat de kosten van onze server, domeinnaam, enz. kunnen worden gedekt.',

	'EUR'								=> 'Euros (EUR)',

	'GBP'								=> 'Britse Ponden (GBP)',

	'HKD'								=> 'Hong Kong Dollars (HKD)',
	'HUF'								=> 'Hongaarse Forint (HUF)',

	'ILS'								=> 'Israëlische Shekel (ILS)',

	'JPY'								=> 'Japanse Yen (JPY)',

	'MXN'								=> 'Mexicaanse Peso (MXN)',

	'NOK'								=> 'Noorse Kronen (NOK)',
	'NZD'								=> 'Nieuw-Zeelandse Dollars (NZD)',

	'PAY_ITEM'							=> 'Doneer!',
	'PAY_MSG'							=> 'Gebruik een decimale punt (geen komma) als scheidingsteken, bijv: 3.50',
	'PLN'								=> 'Poolse Zloty (PLN)',
	'PORTAL_PAY_ACC'					=> 'PayPal account om te gebruiken',
	'PORTAL_PAY_ACC_EXP'				=> 'Vul je Paypal e-mailadres in bijv: xxx@xxx.com',
	'PORTAL_PAY_CUSTOM'					=> 'Voeg gebruikersnaam toe bij een PayPal donatie',

	'SEK'								=> 'Zweedse Kronen (SEK)',
	'SGD'								=> 'Singaporese Dollars (SGD)',

	'USD'								=> 'U.S. Dollars (USD)',
]);
