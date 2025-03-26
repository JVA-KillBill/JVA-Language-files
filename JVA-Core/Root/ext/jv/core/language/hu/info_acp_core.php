<?php
/**
*
* @package JVA - Core
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
	'ACP_CAT_JVA_CORE'						=> 'JVA - Core',
	'ACP_JVA_CORE'							=> 'JVA - Core kiterjesztés',
	'ACP_JVA_CORE_DB_VERSSION'				=> 'Adatbázis verzió:',
	'ACP_JVA_CORE_EXPLAIN'					=> 'A „JVA - Core” kiterjesztés számos olyan funkciót tartalmaz, amelyeket más bővítmények szabadon felhasználhatnak. A cél az, hogy ezeket a funkciókat ne kelljen minden bővítményben elhelyezni, így elkerülhető a duplikáció és csökkenthető az adatbetöltési idő. A „JVA - Core” elérhető funkciói folyamatosan bővülnek, ami érinti a PHP, Html és JavaScript funkciókat.',
	'ACP_JVA_CORE_FILE_VERSSION'			=> 'Fájl verzió:',
	'ACP_JVA_CORE_MAIN'						=> 'Adatok',
	'ACP_JVA_CORE_VERSION_ERROR'			=> 'A fájl és az adatbázis verziószáma nem egyezik!<br><br>Ha frissítés történt, akkor az új fájlok feltöltése előtt a kiterjesztést ki kell kapcsolni és sikeres fájl feltöltés után visszakapcsolni.',

	'JVA_CORE_EXT_DETECT_DISABLED'			=> 'Észleltük, hogy telepítve van a(z) <strong>„%s”</strong> és jelenleg ki van kapcsolva.',
	'JVA_CORE_EXT_DETECT_ENABLED'			=> 'Észleltük, hogy telepítve van a(z) <strong>„%s”</strong> és jelenleg be van kapcsolva.',
	'JVA_CORE_NO_SELECT_GROUP'				=> 'Nem választottál ki csoportot.',
	'JVA_CORE_POINTS_SYSTEM_SETTINGS'		=> 'Pontrendszer beállítása',
	'JVA_CORE_SELECT_GROUP'					=> 'Válassz csoportot',
	'JVA_CORE_SETTINGS'						=> 'Általános beállítások',
	'JVA_CORE_SETTINGS_EXPLAIN'				=> 'Itt személyre szabhatod a kiterjesztés által használt általános beállításokat.',
	'JVA_CORE_USE_POINTS_SYSTEM'			=> 'Pontrendszer használata',
	'JVA_CORE_USE_POINTS_SYSTEM_EXPLAIN'	=> 'A pontrendszer használatba kerül, ha itt engedélyezed és a pontrendszer is be van kapcsolva.',

	'LOG_JVA_CORE_CONFIG_SETTINGS'			=> '<strong>Beállítások módosítása</strong><br>» %s',
]);
