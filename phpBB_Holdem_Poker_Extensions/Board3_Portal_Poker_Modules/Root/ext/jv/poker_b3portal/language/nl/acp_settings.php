<?php
/**
*
* @package phpBB Holdem Póker - Board3 portal poker modules
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

$lang = array_merge($lang, [
	'POKER_EXT_B3PORTAL'					=> 'Board3 portaal poker modules',
	'POKER_EXT_B3PORTAL_DETECT'				=> 'De “Board3 Portal” extensie is niet geinstalleerd of is uitgeschakeld, dus de extensie is inactief.',
	'POKER_EXT_B3PORTAL_EXPLAIN'			=> 'Alle geinstalleerde poker portaal modules worden getoond op het portaal.',
	'POKER_EXT_B3PORTAL_STATS_AUTH'			=> 'Statistieken permissie controle',
	'POKER_EXT_B3PORTAL_STATS_AUTH_EXPLAIN'	=> 'Als je de toestemmingscontroles voor statistieken uitschakelt, kunnen degenen die geen toestemming hebben om pokerstatistieken te bekijken, de pokerportaalmodules zien.'
]);
