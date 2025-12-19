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
	'ACL_A_JV_POKER'				=> 'Kan pokerreset beheren',
	'ACL_A_JV_POKER_RADIO_DELETE'	=> 'Kan radiozender verwijderen',
	'ACL_A_JV_POKER_RADIO_MANAGE'	=> 'Kan radio beheren',
	'ACL_A_JV_POKER_ROOMS_DELETE'	=> 'Kan pokerkamers verwijderen',
	'ACL_A_JV_POKER_ROOMS_MANAGE'	=> 'Kan pokerkamers beheren',
	'ACL_A_JV_POKER_SETTINGS'		=> 'Kan pokerinstellingen beheren',
	'ACL_A_JV_POKER_STYLES'			=> 'Kan kamerstijlen beheren',
	'ACL_A_JV_POKER_USERS_MANAGE'	=> 'Kan gebruikers beheren',
	'ACL_CAT_JV_POKER'				=> 'Poker',
	'ACL_M_JV_POKER_MSG_DELETE'		=> 'Kan berichten verwijderen uit het shoutbox-archief',
	'ACL_U_JV_POKER'				=> 'Kan poker gebruiken',
	'ACL_U_JV_POKER_PLAY'			=> 'Kan poker spelen. <em>Deze optie is alleen van toepassing op geregistreerde gebruikers.</em>',
	'ACL_U_JV_POKER_SHOUT'			=> 'Kan de shoutbox gebruiken met poker. <em>Deze optie is alleen van toepassing op geregistreerde gebruikers.</em>',
	'ACL_U_JV_POKER_STATS'			=> 'Kan statistieken van poker bekijken'
]);
