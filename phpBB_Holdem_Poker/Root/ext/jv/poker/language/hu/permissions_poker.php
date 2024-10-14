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
	'ACL_A_JV_POKER'				=> 'Kezelheti a póker újraindítását',
	'ACL_A_JV_POKER_RADIO_DELETE'	=> 'Törölhet rádió állomást',
	'ACL_A_JV_POKER_RADIO_MANAGE'	=> 'Kezelheti a rádiót',
	'ACL_A_JV_POKER_ROOMS_DELETE'	=> 'Törölhet póker szobát',
	'ACL_A_JV_POKER_ROOMS_MANAGE'	=> 'Kezelheti a póker szobákat',
	'ACL_A_JV_POKER_SETTINGS'		=> 'Kezelheti a póker beállításait',
	'ACL_A_JV_POKER_STYLES'			=> 'Kezelheti a megjelenések',
	'ACL_CAT_JV_POKER'				=> 'Póker',
	'ACL_M_JV_POKER_MSG_DELETE'		=> 'Törölhet üzeneteket az üzenőfal archívumából',
	'ACL_U_JV_POKER'				=> 'Használhatja a pókert',
	'ACL_U_JV_POKER_PLAY'			=> 'Játszhatja a pókert. <em>Ez az opció csak a regisztrált felhasználókra érvényes.</em>',
	'ACL_U_JV_POKER_SHOUT'			=> 'Használhatja az üzenőfalat. <em>Ez az opció csak a regisztrált felhasználókra érvényes.</em>',
	'ACL_U_JV_POKER_STATS'			=> 'Megtekintheti a statisztikai adatokat',
));
