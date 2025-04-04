<?php
/**
*
* @package JVA - Contact
* @version $Id: info_acp_contact.php 679 2019-12-27 21:51:28Z Scanialady $
* @author 2011-2025 KillBill
* @copyright (c) 2014-2025 https://jv-arcade.com/ - https://jv-arcade.com/contact
* @license https://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
// Some characters you may want to copy&paste: ‚ ‘ ’ « » „ “ ” …

$lang = array_merge($lang, [
	'JV_ACP_CAT_CONTACT'						=> 'Page de contact',
	'JV_ACP_CONTACT'							=> 'JVA - Contact',
	'JV_ACP_CONTACT_BAN_USERS'					=> 'Les utilisateurs bannis peuvent également utiliser le contact',
	'JV_ACP_CONTACT_SETTINGS'					=> 'Paramètres de la page de contact',
	'JV_ACP_CONTACT_SPAMBOT_ATTEMPTS'			=> 'Nombre de tentatives maximum',
	'JV_ACP_CONTACT_SPAMBOT_ATTEMPTS_EXPLAIN'	=> 'Nombre de tentatives que les utilisateurs peuvent faire pour résoudre la tâche anti-spambot avant d’être verrouillé hors de cette session.',
	'JV_ACP_CONTACT_SPAMBOT_ENABLE'				=> 'Activer les contre-mesures anti-spambot',
	'JV_ACP_CONTACT_SPAMBOT_ENABLE_EXPLAIN'		=> 'Les utilisateurs doivent passer la tâche anti-spambot pour empêcher les e-mails automatisés.',
	'JV_ACP_CONTACT_SPAMBOT_GUESTS'				=> 'Anti-spambot pour les invités uniquement',

	'LOG_JV_ACP_CONTACT'						=> '<strong>Paramètres de la page de contact modifiés.</strong>',
]);
