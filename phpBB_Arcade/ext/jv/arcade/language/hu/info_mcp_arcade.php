<?php
/**
*
* @package phpBB Arcade
* @version $Id: info_mcp_arcade.php 2450 2021-12-13 20:24:43Z KillBill $
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

//Arcade
$lang = array_merge($lang, [
	'ARCADE_LOGVIEW_EDITGAME'				=> 'Játék szerkesztése',
	'ARCADE_LOGVIEW_LOGS'					=> 'Napló megtekintése',
	'ARCADE_LOGVIEW_VIEWCAT'				=> 'Kategória megtekintése',
	'ARCADE_LOGVIEW_VIEWGAME'				=> 'Játék megtekintése',

	'MCP_ARCADE'							=> 'phpBB Arcade',
	'MCP_ARCADE_LOGS'						=> 'Moderátori napló',
	'MCP_ARCADE_MANAGE_GAMES'				=> 'Játékok kezelése',
	'MCP_ARCADE_MANAGE_GAMES_EXPLAIN'		=> 'Itt lehetőséged van a játékok szerkesztésére, áthelyezésére és ha rendelkezel a szükséges engedélyekkel akkor újra is indíthatod a játékokat.',
	'MCP_ARCADE_MANAGE_GROUP_TOUR'			=> 'Csoportversenyek kezelése',
	'MCP_ARCADE_MANAGE_GROUP_TOUR_EXPLAIN'	=> 'Itt lehetőséged van csoportversenyeket létrehozni és szerkeszteni.',
	'MCP_ARCADE_MANAGE_TOUR'				=> 'Versenyek kezelése',
	'MCP_ARCADE_MANAGE_TOUR_EXPLAIN'		=> 'Itt lehetőséged van a versenyek létrehozására, szerkesztésére.',
	'MCP_CAT_ARCADE'						=> 'Játékterem',
]);
