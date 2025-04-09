<?php
/**
*
* @package phpBB Arcade
* @version $Id: permissions_arcade.php 2450 2021-12-13 20:24:43Z KillBill $
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

// Define categories and permission types
$lang = array_merge($lang, [
	'ACL_A_ARCADE'						=> 'Kezelheti az újraindításokat',
	'ACL_A_ARCADE_ANNOUNCE'				=> 'Kezelheti a közleményeket',
	'ACL_A_ARCADE_BACKUP'				=> 'Készíthet biztonsági mentést a játék kategóriákról',
	'ACL_A_ARCADE_CAT'					=> 'Kezelheti a játék kategóriákat',
	'ACL_A_ARCADE_CLEARLOGS'			=> 'Törölheti a naplókat',
	'ACL_A_ARCADE_DELETE_CAT'			=> 'Törölheti a játék kategóriákat',
	'ACL_A_ARCADE_DELETE_GAME'			=> 'Törölheti a játékokat',
	'ACL_A_ARCADE_DELETE_TOUR'			=> 'Törölheti a versenyeket',
	'ACL_A_ARCADE_GAME'					=> 'Kezelheti a játékokat',
	'ACL_A_ARCADE_INSTALL'				=> 'Kezelheti a telepítési funkciókat',
	'ACL_A_ARCADE_MENU'					=> 'Kezelheti a menüt',
	'ACL_A_ARCADE_POINTS_SETTINGS'		=> 'Szerkesztheti a pontrendszer beállításait',
	'ACL_A_ARCADE_RANKS'				=> 'Kezelheti a rangokat',
	'ACL_A_ARCADE_RESET_GAME'			=> 'Újraindíthatja a játékokat',
	'ACL_A_ARCADE_SETTINGS'				=> 'Szerkesztheti a beállításokat',
	'ACL_A_ARCADE_TOUR'					=> 'Kezelheti a versenyeket',
	'ACL_A_ARCADE_USER'					=> 'Kezelheti a felhasználókat',
	'ACL_A_ARCADE_UTILITIES'			=> 'Használhatja a segéd funkciókat',
	'ACL_A_ARCADE_VIEWLOGS'				=> 'Megtekintheti a naplókat',
	'ACL_A_CAUTH'						=> 'Szerkesztheti a jogosultságok beállításait',
	'ACL_CAT_ARCADE'					=> 'Játékterem',
	'ACL_C_COMMENT'						=> 'Kommentálhatja a játékokat',
	'ACL_C_DOWNLOAD'					=> 'Letöltheti a játékokat',
	'ACL_C_DOWNLOADFREE'				=> 'Letöltheti ingyen a játékokat',
	'ACL_C_IGNORECONTROL'				=> 'Figyelmen kívül hagyhatja a hozzászólás korlátozást',
	'ACL_C_IGNOREFLOOD_DOWNLOAD'		=> 'Figyelmen kívül hagyhatja a letöltési idő határt',
	'ACL_C_IGNOREFLOOD_PLAY'			=> 'Figyelmen kívül hagyhatja a játszási idő határt',
	'ACL_C_LIST'						=> 'Kategóriákat láthatja',
	'ACL_C_PLAY'						=> 'Játszhat a játékokkal',
	'ACL_C_PLAYFREE'					=> 'Játszhat ingyen a játékokkal',
	'ACL_C_RATE'						=> 'Értékelheti a játékokat',
	'ACL_C_REPORT'						=> 'Használhatja a hibabejelentést',
	'ACL_C_RE_RATE'						=> 'Újra értékelheti a játékokat',
	'ACL_C_SCORE'						=> 'Az elért pontszámait elmentheti. <em>Csak regisztrált felhasználókra vonatkozik.</em>',
	'ACL_C_VIEW'						=> 'Kategóriákban lévő játékokat láthatja',
	'ACL_M_ARCADE_CHANGE_GAMENAME'		=> 'Játékok nevét szerkesztheti',
	'ACL_M_ARCADE_CLEARLOGS'			=> 'Törölheti a naplókat',
	'ACL_M_ARCADE_GAME'					=> 'Játékokat szerkesztheti',
	'ACL_M_ARCADE_RESET_GAME'			=> 'Játékokat újraindíthatja',
	'ACL_M_ARCADE_TOUR'					=> 'Versenyeket létrehozhat/szerkesztheti',
	'ACL_M_ARCADE_TOUR_REWARD'			=> 'Adhat jutalmat az új versenyekhez',
	'ACL_M_ARCADE_VIEWLOGS'				=> 'Megtekintheti a naplókat',
	'ACL_TYPE_C_'						=> 'Kategória jogosultságok',
	'ACL_U_ARCADE'						=> 'Használhatja a játéktermet',
	'ACL_U_ARCADE_CHALLENGE'			=> 'Használhatja a kihívást',
	'ACL_U_ARCADE_DOWNLOAD'				=> 'Játékokat letöltheti',
	'ACL_U_ARCADE_FAVORITES'			=> 'Kedvenc játékokat hozzáadhat/eltávolíthatja',
	'ACL_U_ARCADE_IGNOREFLOOD_SEARCH'	=> 'Figyelmen kívül hagyhatja a keresési idő határt',
	'ACL_U_ARCADE_PM'					=> 'Kaphat privát üzenetet trófea elvesztése esetén',
	'ACL_U_ARCADE_POPUP'				=> 'A játékokat játszhatja új ablakban',
	'ACL_U_ARCADE_SEARCH'				=> 'Használhatja a keresést',
	'ACL_U_ARCADE_TOUR'					=> 'Használhatja a versenyt',
	'ACL_U_ARCADE_VIEWSTATS'			=> 'Megtekintheti a statisztikai adatokat',
	'ACL_U_ARCADE_VIEW_WHOISPLAYING'	=> 'Láthatja, hogy ép ki mivel játszik'
]);
