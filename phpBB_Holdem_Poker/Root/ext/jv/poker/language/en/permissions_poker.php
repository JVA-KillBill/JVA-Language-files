<?php
/**
*
* @package phpBB Holdem Póker
* @version $Id$
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
	$lang = [];
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
	'ACL_A_JV_POKER'				=> 'Can manage poker reset',
	'ACL_A_JV_POKER_RADIO_DELETE'	=> 'Can delete radio station',
	'ACL_A_JV_POKER_RADIO_MANAGE'	=> 'Can manage radio',
	'ACL_A_JV_POKER_ROOMS_DELETE'	=> 'Can delete poker rooms',
	'ACL_A_JV_POKER_ROOMS_MANAGE'	=> 'Can manage poker rooms',
	'ACL_A_JV_POKER_SETTINGS'		=> 'Can manage poker settings',
	'ACL_A_JV_POKER_STYLES'			=> 'Can manage room styles',
	'ACL_A_JV_POKER_USERS_MANAGE'	=> 'Can manage users',
	'ACL_CAT_JV_POKER'				=> 'Poker',
	'ACL_M_JV_POKER_MSG_DELETE'		=> 'Can delete messages from the shoutbox archive',
	'ACL_U_JV_POKER'				=> 'Can use poker',
	'ACL_U_JV_POKER_PLAY'			=> 'Can play poker. <em>This option applies only to registered users.</em>',
	'ACL_U_JV_POKER_SHOUT'			=> 'Can use the shoutbox with poker. <em>This option applies only to registered users.</em>',
	'ACL_U_JV_POKER_STATS'			=> 'Can view stats data of poker'
]);
