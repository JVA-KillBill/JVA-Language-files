<?php
/**
*
* @package phpBB Arcade
* @version $Id: install.php 2464 2022-01-21 21:12:53Z KillBill $
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
// Some characters you may want to copy&paste: ‚ ‘ ’ « » „ “ ” … ≧

$lang = array_merge($lang, [
	'INSTALL_ARCADE_ALL_FOUND'							=> 'Összes létezik',
	'INSTALL_ARCADE_BBCODE_HELPLINE'					=> 'Segítség',
	'INSTALL_ARCADE_BBCODE_REQD'						=> 'BBCode ellenőrzése',
	'INSTALL_ARCADE_BBCODE_REQD_EXPLAIN'				=> '<strong>Szükséges</strong> - Egyes BBCode felvétele a phpBB Arcade megfelelő működéséhez.',
	'INSTALL_ARCADE_BBCODE_USAGE'						=> 'BBCode használata',
	'INSTALL_ARCADE_DIRS_FILES_REQD'					=> 'Könyvtárak és fájlok',
	'INSTALL_ARCADE_DIRS_FILES_REQD_EXPLAIN'			=> '<strong>Szükséges</strong> – A phpBB Arcade-nak a helyes működéshez hozzá kell tudnia férnie, illetve tudnia kell írnia néhány állományba vagy könyvtárba. Ha a „Nem található” feliratot látod, akkor létre kell hoznod a megfelelő állományt vagy könyvtárat. Ha a „Nem írható” feliratot látod, akkor meg kell változtatnod az adott állomány vagy könyvtár jogosultságát, hogy a phpBB Arcade írni tudjon bele.',
	'INSTALL_ARCADE_DISPLAY_ON_POSTING'					=> 'Megjelenítés a hozzászólásküldő oldalon',
	'INSTALL_ARCADE_DONATE_TITLE'						=> 'phpBB Arcade adományozás',
	'INSTALL_ARCADE_FINISH'								=> 'A phpBB Arcade ellenőrzése sikeresen befejeződőtt. Köszönjük, hogy a phpBB Arcade szoftvert választotta.',
	'INSTALL_ARCADE_FOUND'								=> 'Létezik',
	'INSTALL_ARCADE_HTML_REPLACEMENT'					=> 'HTML csere',
	'INSTALL_ARCADE_JVA_CORE_REQD'						=> 'JVA - Core verzió ≧ %s',
	'INSTALL_ARCADE_JVA_CORE_REQD_EXPLAIN'				=> '<strong>Szükséges</strong> - A phpBB Arcade helyes működéséhez, legalább „%s” verziójú „JVA - Core” kell rendelkezned.',
	'INSTALL_ARCADE_MAIN_PAGE'							=> 'Ugrás a phpBB Arcade AVP főoldalára',
	'INSTALL_ARCADE_NEXT_STEP'							=> 'Tovább a következő lépésre',
	'INSTALL_ARCADE_NOT_FOUND'							=> 'Nem található',
	'INSTALL_ARCADE_PHPBB_REQD'							=> 'phpBB verzió ≧ %s',
	'INSTALL_ARCADE_PHPBB_REQD_EXPLAIN'					=> '<strong>Szükséges</strong> - A phpBB Arcade helyes működéséhez, legalább „%s” verziójú „phpBB” kell rendelkezned.',
	'INSTALL_ARCADE_PHP_CURL_SUPPORT'					=> 'PHP funkció <var>curl</var> elérhető',
	'INSTALL_ARCADE_PHP_CURL_SUPPORT_EXPLAIN'			=> '<strong>Opcionális</strong> – Ez a funkció opcionális, bár a phpBB Arcade néhány modulja, mint például az AVP letöltési modul, nem fog rendesen működni nélküle.',
	'INSTALL_ARCADE_PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP funkció getimagesize() elérhető',
	'INSTALL_ARCADE_PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Szükséges</strong> – A phpBB Arcade helyes működéséhez szüksége van a getimagesize funkcióra.',
	'INSTALL_ARCADE_PHP_REQD'							=> 'PHP verzió ≧ %s',
	'INSTALL_ARCADE_PHP_REQD_EXPLAIN'					=> '<strong>Szükséges</strong> - A phpBB Arcade helyes működéséhez, legalább „%s” verziójú PHP-val kell rendelkezned.',
	'INSTALL_ARCADE_PHP_SETTINGS'						=> 'PHP verzió és beállítások',
	'INSTALL_ARCADE_PHP_URL_FOPEN_SUPPORT'				=> 'PHP beállítás <var>allow_url_fopen</var> bekapcsolva',
	'INSTALL_ARCADE_PHP_URL_FOPEN_SUPPORT_EXPLAIN'		=> '<strong>Opcionális</strong> – Ez a beállítás opcionális, bár a phpBB Arcade néhány modulja, mint például az AVP letöltési modul, nem fog rendesen működni nélküle.',
	'INSTALL_ARCADE_REQUIREMENTS'						=> 'phpBB Arcade telepítési követelmények.',
	'INSTALL_ARCADE_REQUIREMENTS_EXPLAIN'				=> 'Lefuttatunk néhány tesztet a szerveren, hogy meggyőződjünk, biztosan sikeres-e a phpBB Arcade telepítése. Kérjük, nézd át alaposan az eredményeket, és ne lépj tovább addig, amíg az összes szükséges teszt sikeres nem lesz. Ha opcionális tesztekhez kapcsolódó funkciókat is használni szeretnél, győződj meg arról is, hogy a megfelelő opcionális tesztek is sikeresek.',
	'INSTALL_ARCADE_SOFTWARE_VERSION'					=> 'Szoftver verzió',
	'INSTALL_ARCADE_TEST_AGAIN'							=> 'Tesztelés újra',
	'INSTALL_ARCADE_UNWRITABLE'							=> 'Nem írható',
	'INSTALL_ARCADE_VERIFY_DB'							=> 'phpBB Arcade adatbázis adatok ellenőrzése',
	'INSTALL_ARCADE_VERIFY_DB_ACP_MODULES'				=> 'AVP modulok ellenőrzése',
	'INSTALL_ARCADE_VERIFY_DB_ARCADE_PERMISSIONS'		=> 'phpBB Arcade jogosultságok ellenőrzése',
	'INSTALL_ARCADE_VERIFY_DB_CONFIGS'					=> 'Konfiguráció ellenőrzése',
	'INSTALL_ARCADE_VERIFY_DB_DATA'						=> 'Adatbázis adatok ellenőrzése',
	'INSTALL_ARCADE_VERIFY_DB_EXPLAIN'					=> 'Ellenőrzésre kerül, hogy az összes phpBB Arcade adatbázis adat helyesen-e szerepelnek az adatbázisban.',
	'INSTALL_ARCADE_VERIFY_DB_MCP_MODULES'				=> 'MVP modulok ellenőrzése',
	'INSTALL_ARCADE_VERIFY_DB_PERMISSIONS'				=> 'Jogosultságok ellenőrzése',
	'INSTALL_ARCADE_VERIFY_DB_PHPBB_PERMISSIONS'		=> 'phpBB jogosultságok ellenőrzése',
	'INSTALL_ARCADE_VERIFY_DB_TABLES'					=> 'Táblák ellenőrzése',
	'INSTALL_ARCADE_VERIFY_DB_UCP_MODULES'				=> 'UVP modulok ellenőrzése',
	'INSTALL_ARCADE_VERIFY_ERROR_DB_VERSION'			=> 'A phpBB Arcade ellenőrzése nem futtatható, mert a szoftver újabb verziót érzékelt. Kérlek futtasd a %sphpBB Arcade frissítését%s.',
	'INSTALL_ARCADE_VERIFY_FILES'						=> 'phpBB Arcade fájlok ellenőrzése',
	'INSTALL_ARCADE_VERIFY_FILES_EXIST'					=> 'Fájlok meglétének ellenőrzése',
	'INSTALL_ARCADE_VERIFY_FILES_EXPLAIN'				=> 'Ellenőrzésre kerül, hogy az összes phpBB Arcade fájlok megtalálhatóak-e a szerveren, továbbá ellenőrizzük, hogy nem-e található régi vagy nem használt mappák és fájlok, amik törlésre várnak.',
	'INSTALL_ARCADE_VERIFY_OLD_FILES_EXIST'				=> 'Régi vagy nem használt mappák és fájlok ellenőrzése',
	'INSTALL_ARCADE_WRITABLE'							=> 'Írható',
	'INS_ARCADE_ADD_ERROR_LOG'							=> 'A keletkezett hibák naplózva lettek.',
	'INS_ARCADE_CONVERT_GAME_INSTALL_FILE_END'			=> 'A konvertálási folyamat véget ért, alább láthatod az eredményt.',
	'INS_ARCADE_CONVERT_GAME_INSTALL_FILE_EXPLAIN'		=> 'Alább láthatod, hogy hol tart a konvertálási folyamat, kérlek a folyamat végéig ne zárd be a böngészőt.',
	'INS_ARCADE_CONVERT_GAME_INSTALL_FILE_PROCESSING'	=> 'Kérlek várj…<br>%1$s<br>Feldolgozás alatt %3$s játék telepítő fájl, ebből elkészült %2$s telepítő fájl.',
	'INS_ARCADE_CONVERT_GAME_INSTALL_FILE_START'		=> 'Konvertálás indítása',
	'INS_ARCADE_CONVERT_TOTAL_GAME_INSTALL_FILES'		=> 'Átkonvertált fájlok',
	'INS_ARCADE_DATA_FILES_CORRECT'						=> 'Helyes adatokkal rendelkező fájlok',
	'INS_ARCADE_DELETE_DUPLICATE_GAME'					=> [
		1												=> 'Duplikált játék törlése',
		2												=> 'Duplikált játékok törlése',
	],
	'INS_ARCADE_ENABLE_ERROR'							=> 'A kiterjesztés nem kapcsolható be mert a <strong>„phpBB”</strong> verziója kisebb mint <strong>„%s”</strong> verzió!',
	'INS_ARCADE_FILES_ALL_EXISTS'						=> 'Az összes fájl létezik',
	'INS_ARCADE_FILE_WRITE_EXPLAIN'						=> '<span style="color: #ff0000;">Figyelem:</span> A játék telepítő fájlok frissítése csak akkor lesz sikeres, ha a fájlokat lehet írni, így kérlek győződj meg róla, hogy a jogosultságok megfelelően-e vannak beállítva.',
	'INS_ARCADE_GAME_CONVERT_FILE'						=> 'Játék telepítő fájlok átkonvertálása',
	'INS_ARCADE_GAME_CONVERT_FILE_EXPLAIN'				=> 'Itt lehetőséged van a phpBB Arcade játék telepítő fájlok átkonvertálására a legújabb verzióra.',
	'INS_ARCADE_GAME_DATA_CORRECT'						=> 'Helyes adatokkal rendelkező játékok',
	'INS_ARCADE_GAME_DATA_UPDATED'						=> 'Frissített játékok',
	'INS_ARCADE_GAME_FILES_NOT_FOUND'					=> 'Nem található játék fájlok',
	'INS_ARCADE_GAME_INSTALL_FILES_NOT_FOUND'			=> 'Nem található játék telepítő fájlok',
	'INS_ARCADE_GAME_INSTALL_FILES_UNWRITABLE'			=> 'Nem írható fájlok',
	'INS_ARCADE_GAME_INSTALL_FILE_UPDATED'				=> 'Frissített játék telepítő fájlok',
	'INS_ARCADE_UND_GAMES_FILESIZE'						=> 'Meghatározhatatlan a fájlok mérete, játékok',
	'INS_ARCADE_UPDATE_GAME_DATA_END'					=> 'A frissítési folyamat véget ért, alább láthatod az eredményt.',

	'JVA_CORE_EXT_NOT_FOUND'							=> 'A kiterjesztés nem kapcsolható be mert nem található a „JVA - Core” kiterjesztés!',
]);
