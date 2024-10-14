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
	'JVA_CORE_EXT_NOT_FOUND'		=> 'The extension cannot be enabled because the “JVA - Core” extension cannot be found!',
	'JV_CHAT'						=> 'Chat',
	'JV_CHAT_SOUND_OFF'				=> 'Chat sound off',
	'JV_CHAT_SOUND_ON'				=> 'Chat sound on',
	'JV_CHAT_ONLINE'				=> 'Chat on',
	'JV_CHAT_OFFLINE'				=> 'Chat off',
	'JV_CHAT_DONT_DISTURB'			=> 'Don’t disturb',
	'JV_CHAT_ALL_USERS'				=> 'All users',
	'JV_CHAT_ONLY_ONLINE_USERS'		=> 'Only online users.',
	'JV_CHAT_NO_ONLINE_USERS'		=> 'No users available.',
	'JV_CHAT_USER_LOGIN'			=> 'You are not logged in. Please log in again.',
	'JV_CHAT_NEW_MSG'				=> '%s new messages',
	'JV_CHAT_DELETE_MSGS'			=> 'Delete messages',
	'JV_CHAT_DELETE_MSGS_CONFIRM'	=> 'Are you sure you want to delete the messages?',
));
