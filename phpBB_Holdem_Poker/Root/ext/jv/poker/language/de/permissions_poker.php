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
	'ACL_A_JV_POKER'				=> 'Kann Poker zurücksetzen',
	'ACL_A_JV_POKER_RADIO_DELETE'	=> 'Kann Radiostation löschen',
	'ACL_A_JV_POKER_RADIO_MANAGE'	=> 'Kann Radio verwalten',
	'ACL_A_JV_POKER_ROOMS_DELETE'	=> 'Kann Pokerräume löschen',
	'ACL_A_JV_POKER_ROOMS_MANAGE'	=> 'Kann Pokerräume verwalten',
	'ACL_A_JV_POKER_SETTINGS'		=> 'Kann Pokereinstellungen verwalten',
	'ACL_A_JV_POKER_STYLES'			=> 'Kann Pokerstyles verwalten',
	'ACL_A_JV_POKER_USERS_MANAGE'	=> 'Kann Benutzer verwalten',
	'ACL_CAT_JV_POKER'				=> 'Poker',
	'ACL_M_JV_POKER_MSG_DELETE'		=> 'Kann Nachrichten aus dem Shoutbox-Archiv löschen',
	'ACL_U_JV_POKER'				=> 'Kann Poker benutzen',
	'ACL_U_JV_POKER_PLAY'			=> 'Kann Poker spielen. <em>Diese Option wirkt nur auf registrierte Benutzer.</em>',
	'ACL_U_JV_POKER_SHOUT'			=> 'Kann Shoutbox in Poker benutzen. <em>Diese Option wirkt nur auf registrierte Benutzer.</em>',
	'ACL_U_JV_POKER_STATS'			=> 'Kann statistische Daten von Poker sehen'
]);
