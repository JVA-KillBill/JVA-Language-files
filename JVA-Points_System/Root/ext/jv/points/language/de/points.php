<?php
/**
*
* @package JVA - Points System
* @version $Id: points.php 991 2021-12-12 10:10:48Z KillBill $
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
	'JV_POINTS_ADD_USER_EXPLAIN'			=> 'Gib den Namen des Benutzers ein, dessen Guthaben du ändern möchtest.',
	'JV_POINTS_ALL_TRANSFER'				=> 'Alle Transfers',
	'JV_POINTS_AMOUNT'						=> 'Betrag',
	'JV_POINTS_AMOUNT_USER_EXPLAIN'			=> 'Gib den Betrag ein, auf den du das Guthaben des Benutzers ändern möchtest.',
	'JV_POINTS_ATTACH_DOWNLOAD_NO_POINTS'	=> 'Du hast nicht genug „%s“ um diese Datei herunterzuladen.',
	'JV_POINTS_BALANCE'						=> 'Guthaben',
	'JV_POINTS_CHANGE'						=> 'Guthaben ändern',
	'JV_POINTS_CHANGE_TITLE'				=> 'Benutzerguthaben ändern',
	'JV_POINTS_CONTROL_PANEL'				=> 'Punktesystem Kontrollbereich',
	'JV_POINTS_COST'						=> 'Kosten',
	'JV_POINTS_COSTS'						=> 'Kosten',
	'JV_POINTS_DISABLED'					=> 'Das Punktesystem ist derzeit deaktiviert.',
	'JV_POINTS_ERROR_MINUS_VALUE'			=> 'Der festgelegte Betrag darf kein Minusbetrag sein.',
	'JV_POINTS_ERROR_TRANSFER_BALANCE'		=> 'Dein Guthaben deckt nicht den Betrag, den du übertragen möchtest.',
	'JV_POINTS_ERROR_TRANSFER_BALANCE_COST'	=> 'Dein Guthaben deckt nicht die Kosten und den Betrag, den du übertragen möchtest.',
	'JV_POINTS_ERROR_ZERO_VALUE'			=> 'Der Betrag darf nicht gleich Null sein.',
	'JV_POINTS_FAQ'							=> 'FAQ',
	'JV_POINTS_FAQ_VIEWING'					=> 'Betrachtet Punktesystem-Anleitung',
	'JV_POINTS_GUIDE'						=> 'Punktesystem-Handbuch',
	'JV_POINTS_INFO'						=> 'Information',
	'JV_POINTS_INFO_EXPLAIN'				=> 'Hier kannst du die augenblicklichen Einstellungen sehen, welche Belohnungen oder Kosten es gibt. Beachte, dass der Administrator diese Einstellungen jederzeit ändern kann.',
	'JV_POINTS_INFO_TITLE'					=> 'Allgemeine Information',
	'JV_POINTS_INFO_VIEWING'				=> 'Betrachtet allgemeine Information des Punktesystems',
	'JV_POINTS_LOGIN_EXPLAIN'				=> 'Du musst angemeldet sein, bevor du den Punktesystem-Kontrollbereich sehen kannst.',
	'JV_POINTS_MAIN'						=> 'Übersicht',
	'JV_POINTS_MAIN_EXPLAIN'				=> 'Hallo %s!<br><br>Aktuelles Guthaben: %s.',
	'JV_POINTS_MAIN_TITLE'					=> 'Die reichsten Benutzer',
	'JV_POINTS_MODIFY'						=> 'Ändern',
	'JV_POINTS_MORE_INFO_HERE'				=> 'Mehr Information %sHIER%s.',
	'JV_POINTS_NEW_ATTACHS_COST_EXPLAIN'	=> 'Die Downloadkosten gelten für die folgenden Dateierweiterungen: „%s“.',
	'JV_POINTS_NEW_ATTACH_COST'				=> 'Downloadkosten Dateianhänge',
	'JV_POINTS_NEW_ATTACH_COST_EXPLAIN'		=> 'Die Downloadkosten gelten für die folgenden Dateierweiterung: „%s“.',
	'JV_POINTS_NEW_POST_COST'				=> 'Kosten für Beitragsverfassung',
	'JV_POINTS_NEW_POST_REWARD'				=> 'Belohnung für Beitragsverfassung',
	'JV_POINTS_NEW_TOPIC_REWARD'			=> 'Belohnung für neues Thema',
	'JV_POINTS_NOTIFICATION_CHANGE_ADD'		=> 'Der Benutzer %s hat Guthaben für dich hinzugefügt.<br>Hinzugefügter Betrag: %s.',
	'JV_POINTS_NOTIFICATION_CHANGE_SET'		=> 'Der Benutzer %s hat dein Guthaben geändert.<br>Neues Guthaben: %s.',
	'JV_POINTS_NOTIFICATION_CHANGE_SUB'		=> 'Der Benutzer %s hat etwas von deinem Guthaben abgezogen.<br>Abgezogener Betrag: %s.',
	'JV_POINTS_NOTIFICATION_SET'			=> 'Der Benutzer %s hat dein Guthaben geändert.<br>Altes Guthaben: %s<br>Neues Guthaben: %s.',
	'JV_POINTS_NOTIFICATION_TRANSFER'		=> '%s hat dir den Betrag von %s gespendet.',
	'JV_POINTS_NO_TRANSFER_LOG'				=> 'Bisher hat noch kein Transfer stattgefunden',
	'JV_POINTS_NO_USER'						=> 'Derzeit ist das Guthaben jedes Benutzers auf Null.',
	'JV_POINTS_RECEIVED'					=> 'Empfangen',
	'JV_POINTS_REG_START_BALANCE'			=> 'Startguthaben für neue Benutzer',
	'JV_POINTS_REWARDS'						=> 'Belohnungen',
	'JV_POINTS_SENT'						=> 'Gesendet',
	'JV_POINTS_SORT_AMOUNT'					=> 'Spendenbetrag',
	'JV_POINTS_SORT_DATE'					=> 'Sendedatum',
	'JV_POINTS_SORT_FROM'					=> 'Von',
	'JV_POINTS_SORT_TO'						=> 'An',
	'JV_POINTS_SORT_TYPE'					=> 'Sendetyp',
	'JV_POINTS_TRANSFER'					=> 'Transfer',
	'JV_POINTS_TRANSFER_AMOUNT'				=> 'Zu überweisender Betrag',
	'JV_POINTS_TRANSFER_AMOUNT_EXPLAIN'		=> 'Gib den Betrag ein, den du überweisen möchtest.',
	'JV_POINTS_TRANSFER_COST'				=> 'Transferkosten',
	'JV_POINTS_TRANSFER_COST_EXPLAIN'		=> 'Die Transferkosten betragen %1$s Prozent. Wenn du einen Transfer auslöst, wird der Betrag, den du überweisen möchtest, und zusätzlich %1$s Prozent davon von deinem Guthaben abgezogen.',
	'JV_POINTS_TRANSFER_LOG'				=> 'Transferprotokoll',
	'JV_POINTS_TRANSFER_TITLE'				=> 'Einen bestimmten Betrag an einen anderen Benutzer übertragen',
	'JV_POINTS_TRANSFER_TITLE_EXPLAIN'		=> 'Gib den Namen des Benutzers an, dem du etwas überweisen möchtest.',
	'JV_POINTS_TRANSFER_YOURSELF_ERROR'		=> 'Du kannst nicht an dich selbst überweisen.',
	'JV_POINTS_USER_CHANGED_SUCCESS'		=> 'Das Guthaben des Benutzers „%s“ wurde erfolgreich geändert.',
	'JV_POINTS_USER_TRANSFER_SUCCESS'		=> 'Der Transfer an den Benutzer „%s“ wurde erfolgreich abgeschlossen.',
	'JV_POINTS_VIEWING'						=> 'Betrachtet Punktesystem-Kontrollbereich',
	'JV_POINTS_WRITE_POST_NO_POINTS'		=> 'Du hast nicht genug „%s“ um einen neuen Beitrag zu schreiben.',

	'JVA_CORE_EXT_NOT_FOUND'				=> 'Diese Erweiterung kann nicht aktiviert werden, weil die „JVA - Core“ Extension nicht gefunden wurde!',
));
