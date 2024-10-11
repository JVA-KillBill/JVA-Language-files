<?php
/**
*
* @package phpBB Arcade
* @version $Id: install.php 2465 2022-01-21 21:18:30Z Scanialady $
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
// Some characters you may want to copy&paste: ‚ ‘ ’ « » „ “ ” … ≧

$lang = array_merge($lang, [
	'INSTALL_ARCADE_ALL_FOUND'							=> 'Alle gefunden',
	'INSTALL_ARCADE_BBCODE_HELPLINE'					=> 'Tipp-Anzeige',
	'INSTALL_ARCADE_BBCODE_REQD'						=> 'BBCode Kontrolle',
	'INSTALL_ARCADE_BBCODE_REQD_EXPLAIN'				=> '<strong>Erforderlich</strong> - etwas BBCode muss hinzugefügt werden, damit die phpBB Arcade richtig funktioniert.',
	'INSTALL_ARCADE_BBCODE_USAGE'						=> 'BBCode-Benutzung',
	'INSTALL_ARCADE_DIRS_FILES_REQD'					=> 'Dateien und Verzeichnisse',
	'INSTALL_ARCADE_DIRS_FILES_REQD_EXPLAIN'			=> '<strong>Erforderlich</strong> - Um korrekt funktionieren zu können, muss die phpBB Arcade Schreibzugriff auf einige Dateien und Verzeichnisse erhalten. Falls du „Nicht gefunden“ liest, musst du das entsprechende Verzeichnis oder die Datei erstellen. Wenn du „Nicht beschreibbar“ liest, musst du die Zugriffsrechte anpassen, so dass phpBB Arcade schreibend auf das Verzeichnis/die Datei zugreifen kann.',
	'INSTALL_ARCADE_DISPLAY_ON_POSTING'					=> 'Beim Verfassen eines Beitrags anzeigen',
	'INSTALL_ARCADE_DONATE_TITLE'						=> 'phpBB Arcade - Spenden',
	'INSTALL_ARCADE_FINISH'								=> 'Überprüfung der phpBB Arcade wurde erfolgreich fertiggestellt. Danke, dass du die phpBB Arcade Software gewählt hast.',
	'INSTALL_ARCADE_FOUND'								=> 'Gefunden',
	'INSTALL_ARCADE_HTML_REPLACEMENT'					=> 'HTML-Ersetzung',
	'INSTALL_ARCADE_JVA_CORE_REQD'						=> 'JVA - Core Version ≧ %s',
	'INSTALL_ARCADE_JVA_CORE_REQD_EXPLAIN'				=> '<strong>Erforderlich</strong> - Du musst mindestens „JVA - Core“ Version „%s“ verwenden, um phpBB Arcade verwenden zu können.',
	'INSTALL_ARCADE_MAIN_PAGE'							=> 'Gehe zur ACP-Hauptseite der phpBB Arcade',
	'INSTALL_ARCADE_NEXT_STEP'							=> 'Fortfahren mit dem nächsten Schritt',
	'INSTALL_ARCADE_NOT_FOUND'							=> 'Nicht gefunden',
	'INSTALL_ARCADE_PHPBB_REQD'							=> 'phpBB Version ≧ %s',
	'INSTALL_ARCADE_PHPBB_REQD_EXPLAIN'					=> '<strong>Erforderlich</strong> - Du musst mindestens „phpBB“ Version „%s“ verwenden, um phpBB Arcade verwenden zu können.',
	'INSTALL_ARCADE_PHP_CURL_SUPPORT'					=> 'PHP-Einstellung <var>curl</var> ist verfügbar',
	'INSTALL_ARCADE_PHP_CURL_SUPPORT_EXPLAIN'			=> '<strong>Optional</strong> - Diese Funktion ist optional, allerdings werden einige phpBB Arcade Module, wie das ACP-Downloadmodul, ohne sie nicht richtig funktionieren.',
	'INSTALL_ARCADE_PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP-Funktion getimagesize() ist verfügbar',
	'INSTALL_ARCADE_PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Erforderlich</strong> - Damit phpBB Arcade ordnungsgemäß funktioniert, muss die Funktion „getimagesize“ verfügbar sein.',
	'INSTALL_ARCADE_PHP_REQD'							=> 'PHP-Version ≧ %s',
	'INSTALL_ARCADE_PHP_REQD_EXPLAIN'					=> '<strong>Benötigt</strong> - Um phpBB Arcade zu benutzen, muss mindestens PHP-Version „%s“ verwendet werden.',
	'INSTALL_ARCADE_PHP_SETTINGS'						=> 'PHP-Version und Einstellungen',
	'INSTALL_ARCADE_PHP_URL_FOPEN_SUPPORT'				=> 'PHP-Einstellung <var>allow_url_fopen</var> ist aktiviert',
	'INSTALL_ARCADE_PHP_URL_FOPEN_SUPPORT_EXPLAIN'		=> '<strong>Optional</strong> - Diese Einstellung ist optional, allerdings werden einige Funktionen, wie das ACP-Downloadmodul, ohne sie nicht richtig funktionieren.',
	'INSTALL_ARCADE_REQUIREMENTS'						=> 'phpBB Arcade Installationsvoraussetzungen.',
	'INSTALL_ARCADE_REQUIREMENTS_EXPLAIN'				=> 'Starte einige Tests auf dem Server, um sicherzustellen, dass die phpBB Arcade erfolgreich installiert wurde. Bitte lese die Ergebnisse gründlich und aufmerksam, und fahre nicht fort, bis alle erforderlichen Tests bestanden wurden. Wenn du eine der Funktionen verwenden möchtest, die von den optionalen Tests abhängig sind, solltest du sicherstellen, dass diese Tests auch bestanden wurden.',
	'INSTALL_ARCADE_SOFTWARE_VERSION'					=> 'Softwareversion',
	'INSTALL_ARCADE_TEST_AGAIN'							=> 'Test wiederholen',
	'INSTALL_ARCADE_UNWRITABLE'							=> 'Nicht beschreibbar',
	'INSTALL_ARCADE_VERIFY_DB'							=> 'Datenbankdaten der phpBB Arcade überprüfen',
	'INSTALL_ARCADE_VERIFY_DB_ACP_MODULES'				=> 'Überprüfe ACP Module',
	'INSTALL_ARCADE_VERIFY_DB_ARCADE_PERMISSIONS'		=> 'Überprüfe phpBB Arcade Befugnisse',
	'INSTALL_ARCADE_VERIFY_DB_CONFIGS'					=> 'Überprüfe Konfigurationen',
	'INSTALL_ARCADE_VERIFY_DB_DATA'						=> 'Überprüfe Datenbankdaten',
	'INSTALL_ARCADE_VERIFY_DB_EXPLAIN'					=> 'Es wird überprüft, ob alle Datenbankdaten der Spielhalle richtig in der Datenbank vorhanden sind.',
	'INSTALL_ARCADE_VERIFY_DB_MCP_MODULES'				=> 'Überprüfe MCP Module',
	'INSTALL_ARCADE_VERIFY_DB_PERMISSIONS'				=> 'Überprüfe Befugnisse',
	'INSTALL_ARCADE_VERIFY_DB_PHPBB_PERMISSIONS'		=> 'Überprüfe phpBB Befugnisse',
	'INSTALL_ARCADE_VERIFY_DB_TABLES'					=> 'Überprüfe Tabellen',
	'INSTALL_ARCADE_VERIFY_DB_UCP_MODULES'				=> 'Überprüfe UCP Module',
	'INSTALL_ARCADE_VERIFY_ERROR_DB_VERSION'			=> 'Die Prüfung der phpBB Arcade wurde nicht ausgeführt, weil die Existenz einer neueren Softwareversion erkannt wurde. Bitte führe das %sphpBB Arcade Update%s durch.',
	'INSTALL_ARCADE_VERIFY_FILES'						=> 'Dateien der phpBB Arcade überprüfen',
	'INSTALL_ARCADE_VERIFY_FILES_EXIST'					=> 'Überprüfen, ob die Dateien existieren',
	'INSTALL_ARCADE_VERIFY_FILES_EXPLAIN'				=> 'Es wird überprüft, ob alle phpBB Arcade-Dateien auf dem Server gefunden werden, ebenso wird geprüft, ob alte oder ungenutzte Ordner vorhanden sind, und ob es Dateien gibt, die auf ihre Löschung warten.',
	'INSTALL_ARCADE_VERIFY_OLD_FILES_EXIST'				=> 'Überprüfen auf alte und unbenutzte Ordner und Dateien',
	'INSTALL_ARCADE_WRITABLE'							=> 'Beschreibbar',
	'INS_ARCADE_ADD_ERROR_LOG'							=> 'Es sind Fehler aufgetreten, die in die Logdatei geschrieben wurden.',
	'INS_ARCADE_CONVERT_GAME_INSTALL_FILE_END'			=> 'Die Konvertierung ist komplett, du kannst unten die Ergebnisse sehen.',
	'INS_ARCADE_CONVERT_GAME_INSTALL_FILE_EXPLAIN'		=> 'Unten kannst du den derzeitigen Stand des Konversionsprozesses sehen. Schließe bitte nicht deinen Browser vor Ende des Prozesses.',
	'INS_ARCADE_CONVERT_GAME_INSTALL_FILE_PROCESSING'	=> 'Bitte warten…<br>%1$s<br>Augenblicklich wird Spielinstallationsdatei %2$s von %3$s bearbeitet.',
	'INS_ARCADE_CONVERT_GAME_INSTALL_FILE_START'		=> 'Beginne Konvertierung',
	'INS_ARCADE_CONVERT_TOTAL_GAME_INSTALL_FILES'		=> 'Konvertierte Dateien',
	'INS_ARCADE_DATA_FILES_CORRECT'						=> 'Dateien mit korrekten Daten',
	'INS_ARCADE_DELETE_DUPLICATE_GAME'					=> [
		1												=> 'Doppeltes Spiel gelöscht',
		2												=> 'Doppelte Spiele gelöscht',
	],
	'INS_ARCADE_ENABLE_ERROR'							=> 'Die Erweiterung kann nicht aktiviert werden, weil die Version von <strong>„phpBB“</strong> unterhalb der Version <strong>„%s“</strong> liegt!',
	'INS_ARCADE_FILES_ALL_EXISTS'						=> 'Alle Dateien existieren',
	'INS_ARCADE_FILE_WRITE_EXPLAIN'						=> '<span style="color: #ff0000;">Warnung:</span> Das Aktualisieren der Spielinstallationsdateien wird nur erfolgreich sein, wenn die Dateien beschreibbar sind. Bitte stelle sicher, dass die Berechtigungen richtig gesetzt sind.',
	'INS_ARCADE_GAME_CONVERT_FILE'						=> 'Spielinstallationsdateien konvertieren',
	'INS_ARCADE_GAME_CONVERT_FILE_EXPLAIN'				=> 'Hier hast du die Möglichkeit, alte Spielinstallationsdateien auf die neue Version zu aktualisieren.',
	'INS_ARCADE_GAME_DATA_CORRECT'						=> 'Spiele mit korrekten Daten',
	'INS_ARCADE_GAME_DATA_UPDATED'						=> 'Aktualisierte Spiele',
	'INS_ARCADE_GAME_FILES_NOT_FOUND'					=> 'Spieldateien nicht gefunden',
	'INS_ARCADE_GAME_INSTALL_FILES_NOT_FOUND'			=> 'Spielinstallationsdateien nicht gefunden',
	'INS_ARCADE_GAME_INSTALL_FILES_UNWRITABLE'			=> 'Nicht beschreibbare Dateien',
	'INS_ARCADE_GAME_INSTALL_FILE_UPDATED'				=> 'Aktualisierte Spielinstallationsdateien',
	'INS_ARCADE_UND_GAMES_FILESIZE'						=> 'Dateigröße nicht angegeben, Spiele',
	'INS_ARCADE_UPDATE_GAME_DATA_END'					=> 'Der Aktualisierungsprozess ist komplett, du kannst unten die Ergebnisse sehen.',

	'JVA_CORE_EXT_NOT_FOUND'							=> 'Diese Erweiterung kann nicht aktiviert werden, weil die „JVA - Core“ Extension nicht gefunden wurde!',
]);
