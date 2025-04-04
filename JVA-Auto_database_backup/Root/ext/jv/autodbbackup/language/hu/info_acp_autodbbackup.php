<?php
/**
*
* @package JVA - Auto database backup
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
	'ACP_CAT_JV_AUTO_DATABASE'					=> 'JVA - Auto database backup',
	'ACP_CAT_JV_AUTO_DATABASE_SETTINGS'			=> 'Automatikus adatbázis mentés beállítása',
	'ACP_CAT_JV_AUTO_DATABASE_SETTINGS_EXPLAIN'	=> 'Itt beállíthatod az automatikus biztonsági mentés folyamatot, ami a phpBB-vel kapcsolatos összes adatról biztonsági mentést készít. A létrejövő csomag a store/ könyvtárba kerül lementésre. A szerver konfigurációdtól függően az állományt különböző módokon tömörítheted.',
	'ACP_JV_AUTO_BACKUPS'						=> 'Mentések száma',
	'ACP_JV_AUTO_BACKUPS_EXPLAIN'				=> 'Itt megadhatod, hogy mennyi biztonsági mentés lehet maximum tárolva. Ha ezt az értéket meghaladja, akkor a legrégebbi biztonsági mentés törlésre fog kerülni.<br><em>Ha 0 értéket állítasz be, akkor korlátlan biztonsági mentés jöhet létre.</em>',
	'ACP_JV_AUTO_DATABASE_DAYS'					=> 'Biztonsági mentések időköze',
	'ACP_JV_AUTO_DATABASE_DAYS_EXPLAIN'			=> 'A megadott naponként elvégzi az automatikus adatbázis mentést.',
	'ACP_JV_AUTO_DATABASE_ENABLE'				=> 'Automatikus adatbázis mentés',
	'ACP_JV_AUTO_DATABASE_OPTIMIZE'				=> 'Adatbázis optimalizálása',
	'ACP_JV_AUTO_DATABASE_OPTIMIZE_EXPLAIN'		=> 'A biztonsági mentés előtt optimalizálja a töredezett táblákat, így jobb teljesítményt érhetünk el.',

	'LOG_JV_AUTO_DB_BACKUP'						=> '<strong>Automatikus adatbázis mentése</strong>',
	'LOG_JV_AUTO_DB_BACKUP_SETTINGS'			=> '<strong>Automatikus adatbázis mentés beállítások módosítása</strong>',
	'LOG_JV_AUTO_DB_OPTIMIZE_BACKUP'			=> '<strong>Automatikus adatbázis optimalizálása és mentése</strong>',
]);
