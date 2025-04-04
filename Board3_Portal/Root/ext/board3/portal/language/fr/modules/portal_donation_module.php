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
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, [
	'ACP_PORTAL_PAYPAL_SETTINGS'		=> 'Paramètres PayPal',
	'ACP_PORTAL_PAYPAL_SETTINGS_EXP'	=> 'Ici vous pouvez personnalisez le bloc PayPal.',
	'AUD'								=> 'Dollar australien (AUD)',

	'CAD'								=> 'Dollar canadien (CAD)',
	'CHF'								=> 'Franc suisse (CHF)',
	'CZK'								=> 'Couronne tchèque (CZK)',

	'DKK'								=> 'Couronne danoise (DKK)',
	'DONATION'							=> 'Dons PayPal',
	'DONATION_TEXT'						=> 'est un groupe fournissant des services sans intention de faire du bénéfice. Vos dons sont les bienvenus, pour nous aider à couvrir les différents frais liés à notre serveur, notre nom de domaine, etc..',

	'EUR'								=> 'Euro (EUR)',

	'GBP'								=> 'Livre sterling (GBP)',

	'HKD'								=> 'Dollar de Hong Kong (HKD)',
	'HUF'								=> 'Forint hongrois (HUF)',

	'ILS'								=> 'Shekel (ILS)',

	'JPY'								=> 'Yen (JPY)',

	'MXN'								=> 'Peso mexicain (MXN)',

	'NOK'								=> 'Couronne norvégienne (NOK)',
	'NZD'								=> 'Dollar néo-zélandais (NZD)',

	'PAY_ITEM'							=> 'Faire un don!',
	'PAY_MSG'							=> 'Veuillez utiliser un point décimal (et non une virgule) comme séparateur, comme par exemple: 3.50',
	'PLN'								=> 'Złoty polonais (PLN)',
	'PORTAL_PAY_ACC'					=> 'Compte PayPal à utiliser',
	'PORTAL_PAY_ACC_EXP'				=> 'Saisir l’email de votre compte PayPal, comme par exemple: xxx@xxx.com',
	'PORTAL_PAY_CUSTOM'					=> 'Ajouter le nom d’utilisateur pour le don PayPal',
	'PORTAL_PAY_DEFAULT'				=> 'Devise par défaut',
	'PORTAL_PAY_DEFAULT_EXP'			=> 'Devise sélectionnée par défaut dans la liste des devises.',

	'SEK'								=> 'Couronne suédoise (SEK)',
	'SGD'								=> 'Dollar de Singapour (SGD)',

	'USD'								=> 'Dollar américain (USD)',
]);
