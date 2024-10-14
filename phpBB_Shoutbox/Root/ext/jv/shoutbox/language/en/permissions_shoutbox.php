<?php
/**
*
* @package JVA - phpBB Shoutbox
* @version $Id$
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
	'ACL_A_JV_SHOUTBOX_SETTINGS'		=> 'Can manage shoutbox settings',
	'ACL_CAT_JV_SHOUTBOX'				=> 'Shoutbox',
	'ACL_M_JV_SHOUTBOX_DELETE'			=> 'Can delete users messages',
	'ACL_M_JV_SHOUTBOX_EDIT'			=> 'Can edit users messages',
	'ACL_M_JV_SHOUTBOX_IP'				=> 'Can view IP addresses of users',
	'ACL_U_JV_SHOUTBOX_BBCODE'			=> 'Can use BBCode',
	'ACL_U_JV_SHOUTBOX_DELETE'			=> 'Can delete the own messages',
	'ACL_U_JV_SHOUTBOX_EDIT'			=> 'Can edit the own messages',
	'ACL_U_JV_SHOUTBOX_FLOOD_IGNORE'	=> 'Can ignore flood limit',
	'ACL_U_JV_SHOUTBOX_QUOTE'			=> 'Can use quote of other users messages',
	'ACL_U_JV_SHOUTBOX_SMILIES'			=> 'Can use smilies',
	'ACL_U_JV_SHOUTBOX_USE'				=> 'Can use shoutbox',
	'ACL_U_JV_SHOUTBOX_VIEW'			=> 'Can view shoutbox',
));
