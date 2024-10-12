<?php
/**
*
* @package JVA - Points System
* @version $Id: info_acp_points.php 991 2021-12-12 10:10:48Z KillBill $
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
	'JV_ACP_CAT_POINTS'										=> 'Pontrendszer',
	'JV_ACP_POINTS'											=> 'JVA - Points System',
	'JV_ACP_POINTS_ADD'										=> 'Hozzáadás',
	'JV_ACP_POINTS_AFTER'									=> 'Utána',
	'JV_ACP_POINTS_AMOUNT_USERS_EXPLAIN'					=> 'Add meg azt az összeget amivel módosítani szeretnéd a felhasználók egyenlegét.',
	'JV_ACP_POINTS_BEFORE'									=> 'Előtte',
	'JV_ACP_POINTS_DELETE_SELECTED_TRANSFER_LOG_SUCCESS'	=> 'A kijelölt átutalási bejegyzések sikeresen törölve.',
	'JV_ACP_POINTS_DELETE_TRANSFER_LOG_CONFIRM'				=> 'Biztos vagy benne, hogy törlöd a napló bejegyzéseket?<br><em>Vedd figyelembe, hogy a törlés után az adatok nem visszaállíthatóak és a felhasználók számára sem lesz elérhetőek többet ezek a naplóbejegyzések.</em>',
	'JV_ACP_POINTS_DELETE_TRANSFER_LOG_SUCCESS'				=> 'Az átutalási napló sikeresen törölve.',
	'JV_ACP_POINTS_DISPLAY_MEMBERLIST'						=> 'Egyenleg kijelzése a taglistában',
	'JV_ACP_POINTS_DISPLAY_MEMBERLIST_EXPLAIN'				=> 'Ha bekapcsolod, akkor a taglistában megjelenítésre kerülnek a felhasználók egyenlegjei.',
	'JV_ACP_POINTS_DISPLAY_TOP_USERS'						=> 'Top felhasználók kijelzése',
	'JV_ACP_POINTS_DISPLAY_TOP_USERS_EXPLAIN'				=> 'Ha bekapcsolod, akkor a „Pontrendszer vezérlőpult/Áttekintés” fül alatt, kijelzésre fognak kerülni a legnagyobb egyenleggel bíró felhasználók.',
	'JV_ACP_POINTS_ENABLE'									=> 'Pontrendszer bekapcsolva',
	'JV_ACP_POINTS_ENABLE_EXPLAIN'							=> 'Pontrendszer használatának engedélyezése a felhasználók számára.',
	'JV_ACP_POINTS_ERROR_NO_FUNCTION'						=> 'Nem adtál meg funkciót.',
	'JV_ACP_POINTS_ERROR_ZERO_VALUE'						=> 'A megadott összeg nem lehet nulla.',
	'JV_ACP_POINTS_GROUPS_CHANGED_SUCCESS'					=> 'A(z) „%s” csoportok, összes felhasználó egyenlege sikeresen módosítva.',
	'JV_ACP_POINTS_GROUP_ALL_USERS'							=> 'A csoportban lévő összes felhasználó',
	'JV_ACP_POINTS_GROUP_ALL_USERS_EXPLAIN'					=> 'Ha a nemet választod, akkor csak azokra a felhasználókra fog vonatkozni, akiknek a kiválasztott csoport egyben az alapértelmezett csoportja is.',
	'JV_ACP_POINTS_GROUP_CHANGED_SUCCESS'					=> 'A(z) „%s” csoport, összes felhasználó egyenlege sikeresen módosítva.',
	'JV_ACP_POINTS_LOG_FORMAT_GROUP'						=> 'Naplózási formátum',
	'JV_ACP_POINTS_LOG_FORMAT_GROUP_EXPLAIN'				=> 'Itt meghatározhatod, hogy a naplóbejegyzésbe a csoportnevek vagy a felhasználók nevei szerepeljenek.',
	'JV_ACP_POINTS_MANAGE_GROUPS'							=> 'Csoportok kezelése',
	'JV_ACP_POINTS_MANAGE_USER'								=> 'Felhasználó kezelése',
	'JV_ACP_POINTS_MANAGE_USERS'							=> 'Felhasználók kezelése',
	'JV_ACP_POINTS_MANAGE_USERS_EXPLAIN'					=> 'Itt módosítható a felhasználók egyenlege. Lehetőség van egyéni, több felhasználó és csoportos módosításra is.',
	'JV_ACP_POINTS_MANAGE_USER_EXPLAIN'						=> 'Itt módosítható a felhasználó egyenlege.',
	'JV_ACP_POINTS_NAME'									=> 'Pont neve',
	'JV_ACP_POINTS_NAME_COLOR'								=> 'Pont név színe',
	'JV_ACP_POINTS_NAME_COLOR_EXPLAIN'						=> 'Ha szeretnéd módosítani a „Pont neve” színét, akkor itt megteheted.',
	'JV_ACP_POINTS_NAME_EXPLAIN'							=> 'A weboldalon az itt megadott nevet fogja használni a pontrendszer.',
	'JV_ACP_POINTS_NAME_POS'								=> 'Pont név pozíció',
	'JV_ACP_POINTS_NAME_POS_EXPLAIN'						=> 'Itt meghatározhatod, hogy a „Pont neve” az összeg előtt vagy után helyezkedjen el.',
	'JV_ACP_POINTS_NEW_ATTACH_EXT'							=> 'Válassz fájl kiterjesztéseket',
	'JV_ACP_POINTS_NEW_ATTACH_EXT_EXPLAIN'					=> 'Kizárólag a kiválasztott fájl kiterjesztésekre fog vonatkozni a letöltési költség.',
	'JV_ACP_POINTS_SELECT_FUNC'								=> 'Válasz funkciót',
	'JV_ACP_POINTS_SELECT_GROUPS_NO_USER'					=> 'A kiválasztott csoportokban nem található felhasználó.',
	'JV_ACP_POINTS_SELECT_GROUP_NO_USER'					=> 'A kiválasztott csoportban nem található felhasználó.',
	'JV_ACP_POINTS_SET'										=> 'Beállított',
	'JV_ACP_POINTS_SETTINGS'								=> 'Általános beállítások',
	'JV_ACP_POINTS_SUBTRACT'								=> 'Levonás',
	'JV_ACP_POINTS_TRANSFER'								=> 'Átutalási modul engedélyezése',
	'JV_ACP_POINTS_TRANSFER_EXPLAIN'						=> 'Itt engedélyezheted az átutalási modul használatát. A felhasználóknak lehetőségük nyílik egymás közt egy bizonyos összeg átutalására.',
	'JV_ACP_POINTS_TRANSFER_LOG'							=> 'Átutalási napló kezelése',
	'JV_ACP_POINTS_TRANSFER_LOG_EXPLAIN'					=> 'Itt megtekintheted az összes átutalást, valamint lehetőséged van a naplóbejegyzések törlésére.',
	'JV_ACP_POINTS_USERS_CHANGED_SUCCESS'					=> 'A(z) „%s” felhasználók egyenlege sikeresen módosítva.',
	'JV_ACP_POINTS_USERS_DEFAULT_GROUPS_CHANGED_SUCCESS'	=> 'A(z) „%s” csoportok, alapértelmezett felhasználók egyenlege sikeresen módosítva.',
	'JV_ACP_POINTS_USERS_DEFAULT_GROUP_CHANGED_SUCCESS'		=> 'A(z) „%s” csoport, alapértelmezett felhasználók egyenlege sikeresen módosítva.',
	'JV_LOG_POINTS_ADD_GROUP'								=> '<strong>Összeg hozzáadása az összes felhasználó számára a következő csoportnak: %s</strong><br>» Hozzáadott összeg: %s',
	'JV_LOG_POINTS_ADD_GROUPS'								=> '<strong>Összeg hozzáadása az összes felhasználó számára a következő csoportoknak: %s</strong><br>» Hozzáadott összeg: %s',
	'JV_LOG_POINTS_ADD_USER'								=> '<strong>Összeg hozzáadása a következő felhasználónak: %s</strong><br>» Hozzáadott összeg: %s',
	'JV_LOG_POINTS_ADD_USERS'								=> '<strong>Összeg hozzáadása a következő felhasználóknak: %s</strong><br>» Hozzáadott összeg: %s',
	'JV_LOG_POINTS_ADD_USERS_DEFAULT_GROUP'					=> '<strong>Összeg hozzáadása az alapértelmezett felhasználók számára a következő csoportnak: %s</strong><br>» Hozzáadott összeg: %s',
	'JV_LOG_POINTS_ADD_USERS_DEFAULT_GROUPS'				=> '<strong>Összeg hozzáadása az alapértelmezett felhasználók számára a következő csoportoknak: %s</strong><br>» Hozzáadott összeg: %s',
	'JV_LOG_POINTS_CLEAR_TRANSFER_LOG'						=> '<strong>Pontrendszer átutalási napló megtisztítása.</strong>',
	'JV_LOG_POINTS_SET_GROUP'								=> '<strong>Összeg beállítása az összes felhasználó számára a következő csoportnak: %s</strong><br>» Beállított összeg: %s',
	'JV_LOG_POINTS_SET_GROUPS'								=> '<strong>Összeg beállítása az összes felhasználó számára a következő csoportoknak: %s</strong><br>» Beállított összeg: %s',
	'JV_LOG_POINTS_SET_USER'								=> '<strong>Összeg beállítása a következő felhasználónak: %s</strong><br>» Beállított összeg: %s',
	'JV_LOG_POINTS_SET_USERS'								=> '<strong>Összeg beállítása a következő felhasználóknak: %s</strong><br>» Beállított összeg: %s',
	'JV_LOG_POINTS_SET_USERS_DEFAULT_GROUP'					=> '<strong>Összeg beállítása az alapértelmezett felhasználók számára a következő csoportnak: %s</strong><br>» Beállított összeg: %s',
	'JV_LOG_POINTS_SET_USERS_DEFAULT_GROUPS'				=> '<strong>Összeg beállítása az alapértelmezett felhasználók számára a következő csoportoknak: %s</strong><br>» Beállított összeg: %s',
	'JV_LOG_POINTS_SUBTRACT_GROUP'							=> '<strong>Összeg levonása az összes felhasználó számára a következő csoportnak: %s</strong><br>» Levont összeg: %s',
	'JV_LOG_POINTS_SUBTRACT_GROUPS'							=> '<strong>Összeg levonása az összes felhasználó számára a következő csoportoknak: %s</strong><br>» Levont összeg: %s',
	'JV_LOG_POINTS_SUBTRACT_USER'							=> '<strong>Összeg levonása a következő felhasználónak: %s</strong><br>» Levont összeg: %s',
	'JV_LOG_POINTS_SUBTRACT_USERS'							=> '<strong>Összeg levonása a következő felhasználóknak: %s</strong><br>» Levont összeg: %s',
	'JV_LOG_POINTS_SUBTRACT_USERS_DEFAULT_GROUP'			=> '<strong>Összeg levonása az alapértelmezett felhasználók számára a következő csoportnak: %s</strong><br>» Levont összeg: %s',
	'JV_LOG_POINTS_SUBTRACT_USERS_DEFAULT_GROUPS'			=> '<strong>Összeg levonása az alapértelmezett felhasználók számára a következő csoportoknak: %s</strong><br>» Levont összeg: %s',
	'JV_LOG_POINTS_USER_CHANGED'							=> '<strong>%s felhasználó egyenlegének módosítása. Eredeti egyenlege: %s</strong><br>» Új egyenlege: %s',
	'JV_POINTS_NEW_ATTACH_COST_EXPLAIN'						=> 'Ha egy felhasználó letölt egy csatolmányt, akkor ez az összeg levonásra kerül.',
	'JV_POINTS_NEW_POST_COST_EXPLAIN'						=> 'Ha egy felhasználó új hozzászólást ír, akkor ez az összeg levonásra kerül.',
	'JV_POINTS_NEW_POST_REWARD_EXPLAIN'						=> 'Ha egy felhasználó új hozzászólást ír, akkor ezt a jutalmat fogja megkapni.<br><em>Megjegyzés: Ezt a jutalmat akkor is megkapja a felhasználó, ha új témát nyit.</em>',
	'JV_POINTS_NEW_TOPIC_REWARD_EXPLAIN'					=> 'Ha egy felhasználó új témát nyit, akkor ezt a jutalmat fogja megkapni.',
	'JV_POINTS_REG_START_BALANCE_EXPLAIN'					=> 'Ha új tag regisztrál a weboldalra, akkor ez lesz a kezdő egyenlege.',
	'JV_POINTS_TRANSFER_COST_EXPLAIN'						=> 'Az átutalni kívánt összeg bizonyos százaléka.',
));
