<?php
/**
*
* @package phpBB Holdem Póker
* @version $Id$
* @author 2011-2022 KillBill
* @copyright (c) 2014-2022 https://jv-arcade.com/ - https://jv-arcade.com/contact
* @license https://jv-arcade.com/License.html JVA License v1
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
	'ACL_A_JV_POKER'				=> 'Can manage poker reset',
	'ACL_A_JV_POKER_RADIO_DELETE'	=> 'Can delete radio station',
	'ACL_A_JV_POKER_RADIO_MANAGE'	=> 'Can manage radio',
	'ACL_A_JV_POKER_ROOMS_DELETE'	=> 'Can delete poker rooms',
	'ACL_A_JV_POKER_ROOMS_MANAGE'	=> 'Can manage poker rooms',
	'ACL_A_JV_POKER_SETTINGS'		=> 'Can manage poker settings',
	'ACL_A_JV_POKER_STYLES'			=> 'Can manage poker styles',
	'ACL_CAT_JV_POKER'				=> 'Poker',
	'ACL_M_JV_POKER_MSG_DELETE'		=> 'Can delete messages from the shoutbox archive',
	'ACL_U_JV_POKER'				=> 'Can use poker',
	'ACL_U_JV_POKER_PLAY'			=> 'Can play poker. <em>This option applies only to registered users.</em>',
	'ACL_U_JV_POKER_SHOUT'			=> 'Can use the shoutbox with poker. <em>This option applies only to registered users.</em>',
	'ACL_U_JV_POKER_STATS'			=> 'Can view stats data of poker',
));
