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
	'ACP_PORTAL_PAYPAL_SETTINGS'		=> 'Paypal Einstellungen',
	'ACP_PORTAL_PAYPAL_SETTINGS_EXP'	=> 'Hier kannst du die Paypal Einstellungen ändern.',
	'AUD'								=> 'Australische Dollar (AUD)',

	'CAD'								=> 'Kanadische Dollar (CAD)',
	'CHF'								=> 'Schweizer Franken (CHF)',
	'CZK'								=> 'Tschechische Kronen (CZK)',

	'DKK'								=> 'Dänische Kronen (DKK)',
	'DONATION'							=> 'PayPal-Spenden',
	'DONATION_TEXT'						=> 'ist eine Webseite ohne jedes Gewinninteresse. Jeder der dieses Projekt unterstützen möchte, kann dies mit einer kleinen PayPal-Spende tun, damit die Rechnungen für den Server, die Domain, etc. bezahlt werden können.',

	'EUR'								=> 'Euro (EUR)',

	'GBP'								=> 'Britische Pfund (GBP)',

	'HKD'								=> 'Hongkong-Dollar (HKD)',
	'HUF'								=> 'Ungarische Forint (HUF)',

	'ILS'								=> 'Neue Israelische Schekel (ILS)',

	'JPY'								=> 'Japanische Yen (JPY)',

	'MXN'								=> 'Mexikanische Pesos (MXN)',

	'NOK'								=> 'Norwegische Kronen (NOK)',
	'NZD'								=> 'Neuseeland-Dollar (NZD)',

	'PAY_ITEM'							=> 'Freiwillige Foren-Spende',
	'PAY_MSG'							=> 'Betrag bitte mit Punkt statt Komma trennen, z.B. 3.50',
	'PLN'								=> 'Polnische Zloty (PLN)',
	'PORTAL_PAY_ACC'					=> 'Paypal Account',
	'PORTAL_PAY_ACC_EXP'				=> 'Gib deine e-mail-Adresse an, die du bei Paypal benutzt, z.B. xxx@xxx.com',
	'PORTAL_PAY_CUSTOM'					=> 'Benutzername an die Paypal Zahlung anhängen',
	'PORTAL_PAY_DEFAULT'				=> 'Standard-Währung',
	'PORTAL_PAY_DEFAULT_EXP'			=> 'Währung die standardmäßig in der Drop-Down-Liste ausgewählt ist.',

	'SEK'								=> 'Schwedische Kronen (SEK)',
	'SGD'								=> 'Singapur-Dollar (SGD)',

	'USD'								=> 'US-Dollar (USD)',
]);
