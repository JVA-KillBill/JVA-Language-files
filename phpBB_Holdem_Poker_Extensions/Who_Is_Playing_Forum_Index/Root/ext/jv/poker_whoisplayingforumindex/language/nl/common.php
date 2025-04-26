<?php
/**
*
* @package phpBB Holdem Póker - Who is playing on forum index page
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
	'POKER_EXT_ENABLE_ERROR1'						=> 'De extensie kan niet worden geactiveerd omdat <strong>“phpBB Holdem Poker”</strong> niet actief is!',
	'POKER_EXT_ENABLE_ERROR2'						=> 'De extensie kan niet worden geactiveerd omdat de versie van <strong>“phpBB Holdem Póker”</strong> lager is dan versie <strong>“%s”</strong>!',
	'POKER_EXT_WHO_IS_PLAYING_FORUM_INDEX'			=> '“Who is playing” op de indexpagina van het forum',
	'POKER_EXT_WHO_IS_PLAYING_FORUM_INDEX_EXPLAIN'	=> 'Met de extensie kan arcade “Who is playing” weergeven op de indexpagina van het forum.'
]);
