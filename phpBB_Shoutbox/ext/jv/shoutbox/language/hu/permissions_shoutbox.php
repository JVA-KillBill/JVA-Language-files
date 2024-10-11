<?php
/**
*
* @package JVA - phpBB Shoutbox
* @version $Id$
* @author 2011-2024 KillBill
* @copyright (c) 2014-2024 https://jv-arcade.com/ - https://jv-arcade.com/contact
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
	'ACL_A_JV_SHOUTBOX_SETTINGS'		=> 'Módosíthatja az üzenőfal beállításait',
	'ACL_CAT_JV_SHOUTBOX'				=> 'Üzenőfal',
	'ACL_M_JV_SHOUTBOX_DELETE'			=> 'Törölheti a felhasználók üzeneteit',
	'ACL_M_JV_SHOUTBOX_EDIT'			=> 'Szerkesztheti a felhasználók üzeneteit',
	'ACL_M_JV_SHOUTBOX_IP'				=> 'Láthatja a felhasználók IP címeit',
	'ACL_U_JV_SHOUTBOX_BBCODE'			=> 'Használhatja a BBKódokat',
	'ACL_U_JV_SHOUTBOX_DELETE'			=> 'Törölheti az üzeneteit',
	'ACL_U_JV_SHOUTBOX_EDIT'			=> 'Szerkesztheti az üzeneteit',
	'ACL_U_JV_SHOUTBOX_FLOOD_IGNORE'	=> 'Figyelmen kívül hagyhatja a flood időközt',
	'ACL_U_JV_SHOUTBOX_QUOTE'			=> 'Használhatja más felhasználó üzenetének idézését',
	'ACL_U_JV_SHOUTBOX_SMILIES'			=> 'Használhatja az emotikonokat',
	'ACL_U_JV_SHOUTBOX_USE'				=> 'Használhatja az üzenőfalat',
	'ACL_U_JV_SHOUTBOX_VIEW'			=> 'Láthatja az üzenőfalat',
));
