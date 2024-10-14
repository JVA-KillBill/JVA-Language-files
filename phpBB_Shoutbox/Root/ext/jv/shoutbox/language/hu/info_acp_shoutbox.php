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
	'ACP_CAT_JV_SHOUTBOX_SETTINGS'						=> 'Üzenőfal',
	'ACP_JV_SHOUTBOX'									=> 'JVA - phpBB Shoutbox',
	'ACP_JV_SHOUTBOX_AUTHOR'							=> 'Üzenet szerzője',
	'ACP_JV_SHOUTBOX_AUTHOR_EXPLAIN'					=> 'Itt megadhatod az üzenet szerzőjét, amennyiben üresen hagyod ezt a mezőt és telepítve van a „JVA - Add System Bot” kiterjesztés, akkor az Ő nevében lesz elküldve az üzenet, azonban, ha nincs „System Bot” felhasználó, akkor az éppen aktuális felhasználó nevében lesz elküldve az üzenet.',
	'ACP_JV_SHOUTBOX_AVATAR'							=> 'Avatar kijelzése',
	'ACP_JV_SHOUTBOX_AVATAR_EXPLAIN'					=> 'Ha bekapcsolod, akkor kijelzésre kerülnek az avatarok.',
	'ACP_JV_SHOUTBOX_BBCODE_ALLOWED'					=> 'Engedélyezett BBkódok',
	'ACP_JV_SHOUTBOX_BBCODE_ALLOWED_EXPLAIN'			=> 'Az itt megadott BBkódokat lehet csak használni az üzenőfalon. Minden új BBCode-ot írj új sorba.',
	'ACP_JV_SHOUTBOX_CUSTOM_BBCODE'						=> 'Egyéni BBkódok engedélyezése',
	'ACP_JV_SHOUTBOX_CUSTOM_BBCODE_EXPLAIN'				=> 'Ha engedélyezed, akkor az egyéni BBkódok is kijelzésre kerül.',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE'						=> 'Egyéni oldal engedélyezése',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_EXPLAIN'				=> 'Itt engedélyezheted az üzenőfal kijelzését egyéni oldalon.',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_ONLINE_LIST'			=> 'Egyéni oldal online felhasználók kijelzése',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_ONLINE_LIST_EXPLAIN'	=> 'Itt engedélyezheted az online felhasználók kijelzését az egyéni oldalon.',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_POPUP'					=> 'Egyéni oldal felugró ablakban',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_POPUP_EXPLAIN'			=> 'Ha bekapcsolod, akkor az egyéni oldal egy felugró ablakban fog megnyílni.',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_POPUP_HEIGHT'			=> 'Felugró ablak magassága',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_POPUP_WIDTH'			=> 'Felugró ablak szélessége',
	'ACP_JV_SHOUTBOX_DATE_FORMAT'						=> 'Dátum formátum',
	'ACP_JV_SHOUTBOX_DATE_FORMAT_EXPLAIN'				=> 'A formátum megegyezik a PHP <a href="https://php.net/manual/en/function.date.php">date()</a> függvényéjével.',
	'ACP_JV_SHOUTBOX_DELETE_MESSAGES'					=> 'Üzenetek törlése',
	'ACP_JV_SHOUTBOX_DELETE_MESSAGES_CONFIRM'			=> 'Biztos vagy benne, hogy törlöd az összes üzenetet?',
	'ACP_JV_SHOUTBOX_DELETE_MESSAGES_EXPLAIN'			=> 'Itt törölhetted az összes üzenetet.',
	'ACP_JV_SHOUTBOX_DELETE_MESSAGES_SUCCESS'			=> 'Az összes üzenet sikeresen törölve.',
	'ACP_JV_SHOUTBOX_DISPLAY_ALL_MAIN_PAGES'			=> 'Minden fő oldalon',
	'ACP_JV_SHOUTBOX_DISPLAY_ALL_PAGES'					=> 'Minden oldalon',
	'ACP_JV_SHOUTBOX_DISPLAY_ALL_PAGES_EXCEPT_ARCADE'	=> 'Minden oldalon, kivéve játékterem',
	'ACP_JV_SHOUTBOX_DISPLAY_ALL_PAGES_EXCEPT_PORTAL'	=> 'Minden oldalon, kivéve portál',
	'ACP_JV_SHOUTBOX_DISPLAY_ARCADE'					=> 'Játékterem fő oldalán',
	'ACP_JV_SHOUTBOX_DISPLAY_ARCADE_ALL'				=> 'Játékterem összes oldalán',
	'ACP_JV_SHOUTBOX_DISPLAY_FORUM'						=> 'Fórum fő oldalán',
	'ACP_JV_SHOUTBOX_DISPLAY_FORUM_ALL'					=> 'Fórum összes oldalán',
	'ACP_JV_SHOUTBOX_DISPLAY_NONE'						=> 'Nincs kijelzés',
	'ACP_JV_SHOUTBOX_DISPLAY_PORTAL'					=> 'Portál oldalain',
	'ACP_JV_SHOUTBOX_EDIT_POST'							=> 'Szerkesztett hozzászólás kijelzése',
	'ACP_JV_SHOUTBOX_EDIT_POST_EXPLAIN'					=> 'Ha egy felhasználó szerkeszti a hozzászólását, akkor kijelzésre kerül az üzenőfalon.',
	'ACP_JV_SHOUTBOX_ENABLE'							=> 'Üzenőfal bekapcsolva',
	'ACP_JV_SHOUTBOX_ENABLE_EXPLAIN'					=> 'Ha bekapcsolod, akkor kijelzésre kerül az üzenőfal, azokon az oldalakon ahol engedélyezve van.',
	'ACP_JV_SHOUTBOX_FLOOD_TIME'						=> 'Flood időköz',
	'ACP_JV_SHOUTBOX_FLOOD_TIME_EXPLAIN'				=> 'Ennyi másodpercet kell várnia a felhasználónak két üzenet elküldése között. A jogosultságok segítségével beállíthatod, hogy bizonyos felhasználókra ez ne vonatkozzon.',
	'ACP_JV_SHOUTBOX_FORUM_POST_SETTINGS'				=> 'Fórum hozzászólás beállítások',
	'ACP_JV_SHOUTBOX_HEIGHT'							=> 'Üzenőfal magassága',
	'ACP_JV_SHOUTBOX_HEIGHT_ERROR'						=> 'Az „Üzenőfal magassága” beállításnak megadott érték túl magas a beállított „Üzenetek száma”-hoz képest. Ehhez a magassághoz minimum „%d” üzenetet kell hozzárendelni.',
	'ACP_JV_SHOUTBOX_HEIGHT_EXPLAIN'					=> 'Itt adhatod meg az üzenőfal magasságát amibe szeretnéd, hogy megjelenjen.',
	'ACP_JV_SHOUTBOX_LOCATION'							=> 'Elhelyezkedés',
	'ACP_JV_SHOUTBOX_LOCATION_EXPLAIN'					=> 'Itt adhatod meg, hogy hol helyezkedjen el az üzenőfal a weboldalon.',
	'ACP_JV_SHOUTBOX_MAX_MSG_LIMIT'						=> 'Maximális üzenetek száma',
	'ACP_JV_SHOUTBOX_MAX_MSG_LIMIT_EXPLAIN'				=> 'Itt korlátozhatod, hogy az üzenőfalon maximum mennyi üzenet legyen látható, ha például a megadott érték 100 és az alap betöltés 10, akkor ebben az esetben 90 régi üzenetet lehet vissza olvasni. Ha az érték 0 akkor a felhasználok vissza olvashatják az összes régi üzenetet.',
	'ACP_JV_SHOUTBOX_MIN_MAX_ERROR'						=> 'A(z) „%s” nem lehet kisebb, mint a(z) „%s”.',
	'ACP_JV_SHOUTBOX_MSG_LIMIT'							=> 'Üzenetek száma',
	'ACP_JV_SHOUTBOX_MSG_LIMIT_EXPLAIN'					=> 'Itt adhatod meg, hogy alapból mennyi üzenet töltsön be az üzenőfalra. Ugyan ez a beállítás vonatkozik a régi üzenetek betöltésére is.',
	'ACP_JV_SHOUTBOX_MSG_MAX_CHARS'						=> 'Üzenet max. hossza',
	'ACP_JV_SHOUTBOX_MSG_MAX_CHARS_EXPLAIN'				=> 'Hány karakter engedélyezett egy üzenetben. Állítsd 0-ra a korlátozás megszüntetéséhez.',
	'ACP_JV_SHOUTBOX_MSG_MIN_CHARS'						=> 'Üzenet min. hossza',
	'ACP_JV_SHOUTBOX_MSG_MIN_CHARS_EXPLAIN'				=> 'A felhasználók csak legalább ennyi karakterből álló üzenetet küldhetnek. A minimális megadható érték 1.',
	'ACP_JV_SHOUTBOX_MSG_POSITION'						=> 'Üzenet pozíciója',
	'ACP_JV_SHOUTBOX_MSG_POSITION_EXPLAIN'				=> 'Itt adhatod meg, hogy az új üzenetek felülre vagy alulra kerüljenek kijelzésre.',
	'ACP_JV_SHOUTBOX_MSG_SETTINGS'						=> 'Üzenetek beállításai',
	'ACP_JV_SHOUTBOX_NEW_REPLY_POST'					=> 'Új hozzászólás kijelzése',
	'ACP_JV_SHOUTBOX_NEW_REPLY_POST_EXPLAIN'			=> 'Ha egy új hozzászólás érkezik egy témába, akkor kijelzésre kerül az üzenőfalon.',
	'ACP_JV_SHOUTBOX_NEW_REPLY_QUOTE_POST'				=> 'Új idézett hozzászólás kijelzése',
	'ACP_JV_SHOUTBOX_NEW_REPLY_QUOTE_POST_EXPLAIN'		=> 'Ha egy új idézett hozzászólás érkezik egy témába, akkor kijelzésre kerül az üzenőfalon.',
	'ACP_JV_SHOUTBOX_NEW_TOPIC_POST'					=> 'Új téma kijelzése',
	'ACP_JV_SHOUTBOX_NEW_TOPIC_POST_EXPLAIN'			=> 'Ha egy új téma érkezik a fórumba, akkor kijelzésre kerül az üzenőfalon.',
	'ACP_JV_SHOUTBOX_PAGE'								=> 'Üzenőfal megjelenítése',
	'ACP_JV_SHOUTBOX_PAGE_EXPLAIN'						=> 'Itt adhatod meg azt az oldalt, ahol szeretnéd, hogy az üzenőfal megjelenjen. Vedd figyelembe, hogy az emotikonok és a BBkódok használata nem lesz elérhető az üzenőfalon miközben hozzászólás, aláírás és pm üzenetet írsz.',
	'ACP_JV_SHOUTBOX_POSITION_BOTTOM'					=> 'Alul',
	'ACP_JV_SHOUTBOX_POSITION_TOP'						=> 'Felül',
	'ACP_JV_SHOUTBOX_POST_IGNORE_FORUMS'				=> 'Figyelmen kívül hagyott fórumok',
	'ACP_JV_SHOUTBOX_POST_IGNORE_FORUMS_EXPLAIN'		=> 'A kijelölt fórumokban lévő témákról nem készül automatikus bejegyzés.<br><em>Több fórumot kijelölni, illetve a kijelölést megszüntetni a CTRL gomb nyomvatartásával lehetséges.</em>',
	'ACP_JV_SHOUTBOX_PRUNE'								=> 'Üzenetek ritkítása',
	'ACP_JV_SHOUTBOX_PRUNE_EXPLAIN'						=> 'Ha bekapcsolod, akkor a beállított időközönként csak a beállított maximum üzenetek mennyisége maradhat meg.',
	'ACP_JV_SHOUTBOX_PRUNE_MSG_NUM'						=> 'Megtartott üzenetek száma',
	'ACP_JV_SHOUTBOX_PRUNE_MSG_NUM_EXPLAIN'				=> 'Ha fut a ritkítás, akkor ennyi üzenet kerül megtartásra.',
	'ACP_JV_SHOUTBOX_PRUNE_TIME'						=> 'Ritkítás időköze',
	'ACP_JV_SHOUTBOX_PRUNE_TIME_EXPLAIN'				=> 'Itt adhatod meg, hogy milyen időközönként kerüljön ritkításra az üzenetek.',
	'ACP_JV_SHOUTBOX_REFRESH'							=> 'Újratöltés (ellenőrzés) időköze',
	'ACP_JV_SHOUTBOX_REFRESH_EXPLAIN'					=> 'A megadott időközönként kerül ellenőrzésre, hogy érkezett-e új üzenet.',
	'ACP_JV_SHOUTBOX_ROUND_AVATAR'						=> 'Kerek avatar',
	'ACP_JV_SHOUTBOX_ROUND_AVATAR_EXPLAIN'				=> 'Ha bekapcsolod, akkor az avatarok kerek formában fognak megjelenni.',
	'ACP_JV_SHOUTBOX_SETTINGS'							=> 'Üzenőfal beállításai',
	'ACP_JV_SHOUTBOX_SETTINGS_EXPLAIN'					=> 'Itt személyre szabhatod az üzenőfal és az üzenetek beállításait.',
	'ACP_JV_SHOUTBOX_SMILIE_ENABLE'						=> 'Emotikonok engedélyezése',
	'ACP_JV_SHOUTBOX_SMILIE_ENABLE_EXPLAIN'				=> 'Itt engedélyezheted az emotikonok használatát.',
	'ACP_JV_SHOUTBOX_SMILIE_SCROLL_BOX'					=> 'Emotikonok megjelenése görgető bokszban',
	'ACP_JV_SHOUTBOX_SMILIE_SCROLL_BOX_EXPLAIN'			=> 'Ha túl sok emotikon van engedélyezve, akkor itt lehetőséged van görgető bokszba zárni az emotikonokat.',

	'JVA_CORE_EXT_NOT_FOUND'							=> 'A kiterjesztés nem kapcsolható be mert nem található a „JVA - Core” kiterjesztés!',

	'LOG_JV_SHOUTBOX_CONFIG_SETTINGS'					=> '<strong>Üzenőfal beállításainak módosítása.</strong>',
	'LOG_JV_SHOUTBOX_DELETE_MESSAGES'					=> '<strong>Üzenőfal összes üzenetének törlése.</strong>',
	'LOG_JV_SHOUTBOX_MESSAGES_PRUNING'					=> '<strong>Üzenőfal üzeneteinek megritkítása.</strong><br>» Törölve %d üzenet',
));
