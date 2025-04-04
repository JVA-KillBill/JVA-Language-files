<?php
/**
*
* @package JVA - Footer Chat
* @version $Id: info_acp_fotterchat.php 1011 2022-04-28 15:50:04Z KillBill $
* @author 2011-2024 KillBill
* @copyright (c) 2014-2024 https://jv-arcade.com/ - https://jv-arcade.com/contact
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

$lang = array_merge($lang, array(
	'ACP_CAT_JV_FOTTERCHAT_SETTINGS'		=> 'Footer Chat',
	'ACP_JV_FOTTERCHAT'						=> 'JVA - Footer Chat',
	'ACP_JV_FOTTERCHAT_SETTINGS'			=> 'Allgemeine Einstellungen',
	'ACP_JV_FOTTERCHAT_ALL_USERS'			=> 'Alle Benutzer anzeigen',
	'ACP_JV_FOTTERCHAT_ALL_USERS_EXPLAIN'	=> 'Hier kannst du aktivieren, dass alle vorhandenen Benutzer in der Liste angezeigt werden. <br><em>Beachte, dass nur Mitgliedern mit der entsprechenden Berechtigung alle Benutzer aufgelistet werden.</em>',
	'ACP_JV_FOTTERCHAT_USERNAME_FUL'		=> 'Der Benutzername beginnt immer mit einem Großbuchstaben.',
));
