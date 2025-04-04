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
	'ACP_CAT_JV_AUTO_DATABASE_SETTINGS'			=> 'Einstellungen Automatisches Datenbank-Backup',
	'ACP_CAT_JV_AUTO_DATABASE_SETTINGS_EXPLAIN'	=> 'Hier kannst du den automatischen Backup-Prozess einstellen, welcher alle phpBB-bezogenen Daten sichert. Die sich hieraus ergebenden Pakete werden im Verzeichnis store/ gespeichert. Abhängig von deiner Serverkonfiguration kann es möglich sein, die Datei in einer Auswahl von vorgegebenen Formaten zu komprimieren.',
	'ACP_JV_AUTO_BACKUPS'						=> 'Anzahl Backups',
	'ACP_JV_AUTO_BACKUPS_EXPLAIN'				=> 'Hier kannst du die maximale Anzahl an Backups einstellen, die gespeichert bleiben sollen. Wenn dieser Wert erreicht wird, wird das älteste Backup gelöscht.<br><em>Wenn dies auf 0 gesetzt wird, können unbegrenzt Backups erstellt werden.</em>',
	'ACP_JV_AUTO_DATABASE_DAYS'					=> 'Backup-Frequenz',
	'ACP_JV_AUTO_DATABASE_DAYS_EXPLAIN'			=> 'Dies führt automatische Sicherungen deiner Datenbank nach der ausgewählten Anzahl von Tagen durch.',
	'ACP_JV_AUTO_DATABASE_ENABLE'				=> 'Automatisches Datenbank-Backup',
	'ACP_JV_AUTO_DATABASE_OPTIMIZE'				=> 'Datenbank optimieren',
	'ACP_JV_AUTO_DATABASE_OPTIMIZE_EXPLAIN'		=> 'Optimiere fragmentierte Tabellen vor der Sicherung, um eine bessere Performance zu erreichen.',

	'LOG_JV_AUTO_DB_BACKUP'						=> '<strong>Automatisches Datenbank-Backup</strong>',
	'LOG_JV_AUTO_DB_BACKUP_SETTINGS'			=> '<strong>Einstellungen für Automatisches Datenbank-Backup geändert</strong>',
	'LOG_JV_AUTO_DB_OPTIMIZE_BACKUP'			=> '<strong>Automatische Optimierung und Sicherung der Datenbank</strong>',
]);
