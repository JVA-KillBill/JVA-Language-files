<?php
/**
*
* @package JVA - Footer Chat
* @version $Id: jv_chat.php 1011 2022-04-28 15:50:04Z KillBill $
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
	'JVA_CORE_EXT_NOT_FOUND'		=> 'Diese Erweiterung kann nicht aktiviert werden, weil die „JVA - Core“ Extension nicht gefunden wurde!',
	'JV_CHAT'						=> 'Chat',
	'JV_CHAT_SOUND_OFF'				=> 'Chat Ton aus',
	'JV_CHAT_SOUND_ON'				=> 'Chat Ton an',
	'JV_CHAT_ONLINE'				=> 'Chat an',
	'JV_CHAT_OFFLINE'				=> 'Chat aus',
	'JV_CHAT_DONT_DISTURB'			=> 'Nicht stören',
	'JV_CHAT_ALL_USERS'				=> 'Alle Benutzer',
	'JV_CHAT_ONLY_ONLINE_USERS'		=> 'Nur Benutzer online',
	'JV_CHAT_NO_ONLINE_USERS'		=> 'Keine Benutzer verfügbar.',
	'JV_CHAT_USER_LOGIN'			=> 'Du bist nicht eingeloggt. Bitte logge dich neu ein.',
	'JV_CHAT_NEW_MSG'				=> '%s neue Nachrichten',
	'JV_CHAT_DELETE_MSGS'			=> 'Lösche Nachrichten',
	'JV_CHAT_DELETE_MSGS_CONFIRM'	=> 'Bist du sicher, dass du die Nachrichten löschen möchtest?',
));
