<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
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
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_VIGLINK_SETTINGS'			=> 'Paramètres VigLink',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'VigLink est un service tiers qui monétise discrètement les liens postés par les membres de votre forum sans modifier leur expérience utilisateur. Quand des utilisateurs cliquent sur vos liens sortants de produits ou services et achètent quelque chose, alors les sites marchants paient à VigLink une commission, dont une partie est rétribuée au projet phpBB. En choisissant d’activer VigLink et d’effectuer des dons au projet phpBB, vous soutenez notre organisation « open source » et assurez notre sécurité financière.',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'Vous pouvez modifier ces paramètres quand vous le souhaitez depuis la page « <a href="%1$s">Paramètres Viglink</a> ».',
	'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> 'Pour ne plus être redirigé vers cette page, définissez les paramètres ci-dessous puis cliquez sur le bouton « Envoyer ».',
	'ACP_VIGLINK_ENABLE'			=> 'Activer VigLink',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Permet d’utiliser les services VigLink.',
	'ACP_VIGLINK_EARNINGS'			=> 'Réclamer vos propres gains (optionnel)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'	=> 'Vous pouvez réclamer vos propres gains en créant un compte « VigLink Convert ».',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'Les services VigLink ont été désactivés par phpBB.',
	'ACP_VIGLINK_CLAIM'				=> 'Réclamer vos gains',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'Vous pouvez réclamer les gains pour votre forum à partir des liens monétisés par Viglink, au lieu de les donner au projet phpBB. Pour gérer les paramètres de votre compte, créez un compte « VigLink Convert » en cliquant sur le lien « Convertir le compte ».',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Convertir le compte',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'Le lien du compte « VigLink convert » n’a pu être récupéré.',
));
