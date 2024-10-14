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
	'JV_ACP_CAT_POINTS'										=> 'Punktesystem',
	'JV_ACP_POINTS'											=> 'JVA - Points System',
	'JV_ACP_POINTS_ADD'										=> 'Hinzufügen',
	'JV_ACP_POINTS_AFTER'									=> 'Nachher',
	'JV_ACP_POINTS_AMOUNT_USERS_EXPLAIN'					=> 'Gib den Betrag ein, auf welchen du das Guthaben des Benutzers ändern möchtest.',
	'JV_ACP_POINTS_BEFORE'									=> 'Vorher',
	'JV_ACP_POINTS_DELETE_SELECTED_TRANSFER_LOG_SUCCESS'	=> 'Die ausgewählten Transfereinträge wurden erfolgreich gelöscht.',
	'JV_ACP_POINTS_DELETE_TRANSFER_LOG_CONFIRM'				=> 'Bist du sicher, dass du diese Protokolleinträge löschen willst?<br><em>Beachte bitte, dass die Daten nach dem Löschen nicht mehr wiederhergestellt werden können, und kein Benutzer mehr in der Lage sein wird, darauf zuzugreifen.</em>',
	'JV_ACP_POINTS_DELETE_TRANSFER_LOG_SUCCESS'				=> 'Das Transferprotokoll wurde erfolgreich gelöscht.',
	'JV_ACP_POINTS_DISPLAY_MEMBERLIST'						=> 'Guthaben in der Mitgliederliste anzeigen',
	'JV_ACP_POINTS_DISPLAY_MEMBERLIST_EXPLAIN'				=> 'Wenn dies aktiviert ist, werden die Benutzerguthaben in der Mitgliederliste angezeigt.',
	'JV_ACP_POINTS_DISPLAY_TOP_USERS'						=> 'Top-Benutzer anzeigen',
	'JV_ACP_POINTS_DISPLAY_TOP_USERS_EXPLAIN'				=> 'Wenn dies aktiviert ist, werden im Tab “Punktesystem Kontrollbereich/Übersicht” die Benutzer mit dem höchsten Guthaben angezeigt.',
	'JV_ACP_POINTS_ENABLE'									=> 'Aktiviere das Punktesystem',
	'JV_ACP_POINTS_ENABLE_EXPLAIN'							=> 'Erlaube den Benutzern, das Punktesystem zu benutzen',
	'JV_ACP_POINTS_ERROR_NO_FUNCTION'						=> 'Du hast keine Funktion angegeben.',
	'JV_ACP_POINTS_ERROR_ZERO_VALUE'						=> 'Der anzugebende Betrag darf nicht gleich Null sein.',
	'JV_ACP_POINTS_GROUPS_CHANGED_SUCCESS'					=> 'Alle Benutzerguthaben für die Gruppen „%s“ erfolgreich geändert..',
	'JV_ACP_POINTS_GROUP_ALL_USERS'							=> 'Alle Benutzer der Gruppe',
	'JV_ACP_POINTS_GROUP_ALL_USERS_EXPLAIN'					=> 'Wenn du „Nein“ auswählst, gilt das nur für die Benutzer, bei denen die gewählte Gruppe die Standardgruppe ist.',
	'JV_ACP_POINTS_GROUP_CHANGED_SUCCESS'					=> 'Alle Guthaben der Benutzer in der Gruppe „%s“ erfolgreich geändert.',
	'JV_ACP_POINTS_LOG_FORMAT_GROUP'						=> 'Protokollformat',
	'JV_ACP_POINTS_LOG_FORMAT_GROUP_EXPLAIN'				=> 'Hier legst du fest, ob der Protokolleintrag die Gruppennamen oder die Benutzernamen enthält.',
	'JV_ACP_POINTS_MANAGE_GROUPS'							=> 'Gruppen verwalten',
	'JV_ACP_POINTS_MANAGE_USER'								=> 'Benutzer verwalten',
	'JV_ACP_POINTS_MANAGE_USERS'							=> 'Benutzer verwalten',
	'JV_ACP_POINTS_MANAGE_USERS_EXPLAIN'					=> 'Hier kannst du das Guthaben der Benutzer ändern. Es ist möglich, dieses für Einzelpersonen anzupassen, für mehrere Benutzer oder auch für Gruppen.',
	'JV_ACP_POINTS_MANAGE_USER_EXPLAIN'						=> 'Hier kannst du das Guthaben des Benutzers ändern.',
	'JV_ACP_POINTS_NAME'									=> 'Punktename',
	'JV_ACP_POINTS_NAME_COLOR'								=> 'Punktenamenfarbe',
	'JV_ACP_POINTS_NAME_COLOR_EXPLAIN'						=> 'Wenn du die Farbe von „Punktename“ ändern möchtest, kannst du das hier tun.',
	'JV_ACP_POINTS_NAME_EXPLAIN'							=> 'Der Punktename, den du anstelle des Wortes „Punkte“ auf deinem Board anzeigen möchtest.',
	'JV_ACP_POINTS_NAME_POS'								=> 'Position Punktename',
	'JV_ACP_POINTS_NAME_POS_EXPLAIN'						=> 'Hier kannst du festlegen, ob „Punktename“ vor oder hinter dem Betrag positioniert werden soll.',
	'JV_ACP_POINTS_NEW_ATTACH_EXT'							=> 'Wähle Dateierweiterungen',
	'JV_ACP_POINTS_NEW_ATTACH_EXT_EXPLAIN'					=> 'Downloadkosten werden nur für die ausgewählten Dateierweiterungen gelten.',
	'JV_ACP_POINTS_SELECT_FUNC'								=> 'Funktion wählen',
	'JV_ACP_POINTS_SELECT_GROUPS_NO_USER'					=> 'Der Benutzer konnte in den ausgewählten Gruppen nicht gefunden werden.',
	'JV_ACP_POINTS_SELECT_GROUP_NO_USER'					=> 'Der Benutzer konnte in der ausgewählten Gruppe nicht gefunden werden.',
	'JV_ACP_POINTS_SET'										=> 'Einstellen',
	'JV_ACP_POINTS_SETTINGS'								=> 'Allgemeine Einstellungen',
	'JV_ACP_POINTS_SUBTRACT'								=> 'Abziehen',
	'JV_ACP_POINTS_TRANSFER'								=> 'Aktiviere Transfermodul',
	'JV_ACP_POINTS_TRANSFER_EXPLAIN'						=> 'Hier können Sie die Verwendung des Transfermoduls aktivieren. Die Nutzer haben dann die Möglichkeit, einen bestimmten Guthabenbetrag untereinander zu überweisen.',
	'JV_ACP_POINTS_TRANSFER_LOG'							=> 'Transferprotokoll verwalten',
	'JV_ACP_POINTS_TRANSFER_LOG_EXPLAIN'					=> 'Hier kannst du alle Kontobewegungen ansehen, und du hast die Möglichkeit, die Journaleinträge zu löschen.',
	'JV_ACP_POINTS_USERS_CHANGED_SUCCESS'					=> 'Das Guthaben des Benutzers „%s“ wurde erfolgreich geändert.',
	'JV_ACP_POINTS_USERS_DEFAULT_GROUPS_CHANGED_SUCCESS'	=> 'Das Guthaben der Benutzer mit den Standardgruppen „%s“ wurde erfolgreich geändert.',
	'JV_ACP_POINTS_USERS_DEFAULT_GROUP_CHANGED_SUCCESS'		=> 'Das Guthaben der Benutzer mit der Standardgruppe „%s“ wurde erfolgreich geändert',
	'JV_LOG_POINTS_ADD_GROUP'								=> '<strong>Betrag hinzugefügt für alle Benutzer der folgenden Gruppe: %s</strong><br>» Addierter Betrag: %s',
	'JV_LOG_POINTS_ADD_GROUPS'								=> '<strong>Betrag hinzugefügt für alle Benutzer der folgenden Gruppen: %s</strong><br>» Addierter Betrag: %s',
	'JV_LOG_POINTS_ADD_USER'								=> '<strong>Betrag hinzugefügt für den folgenden Benutzer: %s</strong><br>» Addierter Betrag: %s',
	'JV_LOG_POINTS_ADD_USERS'								=> '<strong>Betrag hinzugefügt für die folgenden Benutzer: %s</strong><br>» Addierter Betrag: %s',
	'JV_LOG_POINTS_ADD_USERS_DEFAULT_GROUP'					=> '<strong>Betrag hinzugefügt für die Standardbenutzer der folgenden Gruppe: %s</strong><br>» Addierter Betrag: %s',
	'JV_LOG_POINTS_ADD_USERS_DEFAULT_GROUPS'				=> '<strong>Betrag hinzugefügt für die Standardbenutzer der folgenden Gruppen: %s</strong><br>» Addierter Betrag: %s',
	'JV_LOG_POINTS_CLEAR_TRANSFER_LOG'						=> '<strong>Points System löschte das Transferprotokoll.</strong>',
	'JV_LOG_POINTS_SET_GROUP'								=> '<strong>Betrag festgesetzt für alle Benutzer der folgenden Gruppe: %s</strong><br>» Gesetzter Betrag: %s',
	'JV_LOG_POINTS_SET_GROUPS'								=> '<strong>Betrag festgesetzt für alle Benutzer der folgenden Gruppen: %s</strong><br>» Gesetzter Betrag: %s',
	'JV_LOG_POINTS_SET_USER'								=> '<strong>Betrag festgesetzt für den folgenden Benutzer: %s</strong><br>» Gesetzter Betrag: %s',
	'JV_LOG_POINTS_SET_USERS'								=> '<strong>Betrag festgesetzt für die folgenden Benutzer: %s</strong><br>» Gesetzter Betrag: %s',
	'JV_LOG_POINTS_SET_USERS_DEFAULT_GROUP'					=> '<strong>Betrag festgesetzt für die Standardbenutzer der folgenden Gruppe: %s</strong><br>» Gesetzter Betrag: %s',
	'JV_LOG_POINTS_SET_USERS_DEFAULT_GROUPS'				=> '<strong>Betrag festgesetzt für die Standardbenutzer der folgenden Gruppen: %s</strong><br>» Gesetzter Betrag: %s',
	'JV_LOG_POINTS_SUBTRACT_GROUP'							=> '<strong>Betrag abgezogen für alle Benutzer der folgenden Gruppe: %s</strong><br>» Abgezogener Betrag: %s',
	'JV_LOG_POINTS_SUBTRACT_GROUPS'							=> '<strong>Betrag abgezogen für alle Benutzer der folgenden Gruppen: %s</strong><br>» Abgezogener Betrag: %s',
	'JV_LOG_POINTS_SUBTRACT_USER'							=> '<strong>Betrag abgezogen für den folgenden Benutzer: %s</strong><br>» Abgezogener Betrag: %s',
	'JV_LOG_POINTS_SUBTRACT_USERS'							=> '<strong>Betrag abgezogen für die folgenden Benutzer: %s</strong><br>» Abgezogener Betrag: %s',
	'JV_LOG_POINTS_SUBTRACT_USERS_DEFAULT_GROUP'			=> '<strong>Betrag abgezogen für die Standardbenutzer der folgenden Gruppe: %s</strong><br>» Abgezogener Betrag: %s',
	'JV_LOG_POINTS_SUBTRACT_USERS_DEFAULT_GROUPS'			=> '<strong>Betrag abgezogen für die Standardbenutzer der folgenden Gruppen: %s</strong><br>» Abgezogener Betrag: %s',
	'JV_LOG_POINTS_USER_CHANGED'							=> '<strong>Für Benutzer %s Guthaben geändert. Altes Guthaben: %s</strong><br>» Neues Guthaben: %s',
	'JV_POINTS_NEW_ATTACH_COST_EXPLAIN'						=> 'Wenn ein Benutzer einen Dateianhang herunterlädt, wird dieser Betrag vom Guthaben abgezogen.',
	'JV_POINTS_NEW_POST_COST_EXPLAIN'						=> 'Wenn ein Benutzer einen neuen Beitrag schreibt, wird dieser Betrag vom Guthaben abgezogen.',
	'JV_POINTS_NEW_POST_REWARD_EXPLAIN'						=> 'Wenn ein Benutzer einen neuen Beitrag schreibt, erhält er diesen Betrag als Belohnung.<br><em>Hinweis: Diese Belohnung wird ein Benutzer außerdem zusätzlich erhalten, wenn er ein neues Thema erstellt.</em>',
	'JV_POINTS_NEW_TOPIC_REWARD_EXPLAIN'					=> 'Wenn ein Benutzer ein neues Thema erstellt, wird er diese Belohnung erhalten.',
	'JV_POINTS_REG_START_BALANCE_EXPLAIN'					=> 'Wenn sich ein neues Mitglied auf der Webseite registriert, wird es dieses Startguthaben erhalten.',
	'JV_POINTS_TRANSFER_COST_EXPLAIN'						=> 'Ein Prozentsatz des zu übertragenden Betrages.',
));
