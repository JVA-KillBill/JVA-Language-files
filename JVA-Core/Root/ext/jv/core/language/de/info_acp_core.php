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
	'ACP_JVA_CORE'							=> 'JVA-Core-Erweiterung',
	'ACP_JVA_CORE_DB_VERSSION'				=> 'Datenbankversion:',
	'ACP_JVA_CORE_EXPLAIN'					=> 'Die Erweiterung „JVA-Core“ enthält zahlreiche Funktionen, die von anderen Erweiterungen frei genutzt werden können. Ziel ist es, diese Funktionen nicht in jeder Erweiterung einzeln zu platzieren, um Duplikate zu vermeiden und die Datenladezeit zu verkürzen. Die verfügbaren Funktionen von „JVA – Core“ werden ständig erweitert, was sich auf PHP-, Html- und JavaScript-Funktionen auswirkt.',
	'ACP_JVA_CORE_FILE_VERSSION'			=> 'Dateiversion:',
	'ACP_JVA_CORE_MAIN'						=> 'Hauptseite',
	'ACP_JVA_CORE_VERSION_ERROR'			=> 'Die Versionsnummer von Datei und Datenbank stimmt nicht überein!<br><br>Wenn ein Update durchgeführt wurde, dann muss die Erweiterung vor dem Hochladen neuer Dateien deaktiviert und nach einem erfolgreichen Dateiupload wieder aktiviert werden.',

	'JVA_CORE_EXT_DETECT_DISABLED'			=> 'Wir haben festgestellt, dass <strong>„%s“</strong> installiert, aber derzeit deaktiviert ist.',
	'JVA_CORE_EXT_DETECT_ENABLED'			=> 'Wir haben festgestellt, dass <strong>„%s“</strong> installiert, und derzeit aktiviert ist.',
	'JVA_CORE_NO_SELECT_GROUP'				=> 'Du hast keine Gruppe ausgewählt.',
	'JVA_CORE_POINTS_SYSTEM_SETTINGS'		=> 'Einstellungen Punktesystem',
	'JVA_CORE_SELECT_GROUP'					=> 'Gruppe auswählen',
	'JVA_CORE_SETTINGS'						=> 'Allgemeine Einstellungen',
	'JVA_CORE_SETTINGS_EXPLAIN'				=> 'Hier kannst du die allgemeinen Einstellungen anpassen, welche von der Extension verwendet werden.',
	'JVA_CORE_USE_POINTS_SYSTEM'			=> 'Verwende Punktesystem',
	'JVA_CORE_USE_POINTS_SYSTEM_EXPLAIN'	=> 'Das Punktesystem wird verwendet, wenn du es hier aktivierst, und wenn das Punktesystem selbst ebenfalls aktiviert wurde.',

	'LOG_JVA_CORE_CONFIG_SETTINGS'			=> '<strong>Einstellungen geändert</strong><br>» %s',
]);
