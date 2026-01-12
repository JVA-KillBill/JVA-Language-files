<?php
/**
*
* @package phpBB Arcade
* @version $Id: logs.php 2457 2022-01-14 17:04:20Z Scanialady $
* @author 2011-2026 KillBill
* @copyright (c) 2014-2026 https://jv-arcade.com/ - https://jv-arcade.com/contact
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
	$lang = [];
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

//Arcade
$lang = array_merge($lang, [
	'ARCADE_SCORE_ERR_GAME_HACK'					=> 'Erkennung von Spielmanipulation',
	'ARCADE_SCORE_ERR_GG'							=> 'falschen Spielcode erhalten',
	'ARCADE_SCORE_ERR_GG_RANDCHAR'					=> 'Spielcode nicht erhalten',
	'ARCADE_SCORE_ERR_GS'							=> 'falschen Punktecode erhalten',
	'ARCADE_SCORE_ERR_GS_GG_RANDCHAR'				=> 'Spiel- und Punktecode nicht erhalten',
	'ARCADE_SCORE_ERR_GS_RANDCHAR'					=> 'Punktecode nicht erhalten',
	'ARCADE_SCORE_ERR_GS_VARIABLE'					=> 'Score-Variable nicht empfangen',
	'ARCADE_SCORE_ERR_MICRO_TIME'					=> 'Kontrollzeit überschritten',
	'ARCADE_SCORE_ERR_PCH'							=> 'falschen Variablencode erhalten',
	'ARCADE_SCORE_ERR_SAVE_TYPE'					=> 'Es wurde nicht der konfigurierte Speichertyp benutzt.',
	'ARCADE_SCORE_ERR_SEC_SESS'						=> 'Sitzungssicherheit - unkorrekte Sitzungsdaten empfangen',

	'LOG_ACL_ADD_CATEGORY_LOCAL_C_'					=> '<strong>Spielhallenbefugnisse für Kategorie hinzugefügt oder geändert</strong> von %1$s<br>» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_C_'					=> '<strong>Spielhalle, Gruppenbefugnisse für Kategorie hinzugefügt oder geändert</strong> von %1$s<br>» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_C_'						=> '<strong>Spielhalle, Benutzerbefugnisse für Kategorie hinzugefügt oder geändert</strong> von %1$s<br>» %2$s',
	'LOG_ACL_ARCADE_RESTORE_PERMISSIONS'			=> '<strong>Eigene Spielhallenbefugnisse wiederhergestellt nach der Nutzung der Befugnisse von</strong><br>» %s',
	'LOG_ACL_ARCADE_TRANSFER_PERMISSIONS'			=> '<strong>Spielhallenbefugnisse übertragen von</strong><br>» %s',
	'LOG_ACL_DEL_CATEGORY_LOCAL_C_'					=> '<strong>Spielhalle, Benutzer-/Gruppenbefugnisse für Kategorie entfernt</strong> von %1$s<br>» %2$s',
	'LOG_ARCADE_ACTIVATION_SETTINGS'				=> '<strong>Aktivierungseinstellungen geändert</strong>',
	'LOG_ARCADE_ADD_CAT'							=> '<strong>Neue Spielhallenkategorie erstellt</strong><br>» %s',
	'LOG_ARCADE_ADD_GAME'							=> [
		1											=> '<strong>Ein Spiel hinzugefügt zu Kategorie %s.</strong><br>» %s',
		2											=> '<strong>Spiele hinzugefügt zu Kategorie %s.</strong><br>» %s'
	],
	'LOG_ARCADE_ALL_ANNOUNCE_RESTORE_DEFAULT_DATA'	=> '<strong>Spielhalle, Alle Standardeinstellungen der Ankündigung wiederhergestellt.</strong>',
	'LOG_ARCADE_ANNOUNCE_CREATE_DB_DATA'			=> '<strong>„%s“ erstellte eine Nachricht in der Datenbank</strong><br>» Sprache: %s',
	'LOG_ARCADE_ANNOUNCE_GENERAL_SETTINGS'			=> '<strong>Allgemeine Ankündigungseinstellungen geändert</strong>',
	'LOG_ARCADE_ANNOUNCE_RESET'						=> '<strong>Ankündigungsforum zurückgesetzt</strong><br>» %s',
	'LOG_ARCADE_ARCADE_PM'							=> '<strong>Private Nachricht der Spielhalle geändert</strong><br>» Sprache: %s',
	'LOG_ARCADE_ARCADE_SUPER_CHAMPION_PM'			=> '<strong>Private Nachricht „Superchampiontitel verloren“ geändert </strong><br>» Sprache: %s',
	'LOG_ARCADE_AUTO_ACTIVATION'					=> '<strong>Automatische Aktivierung für den kostenlosen Schlüssel.</strong>',
	'LOG_ARCADE_AUTO_RESET_SCORE'					=> '<strong>Spielhalle, Rekorde automatisch zurückgesetzt</strong>',
	'LOG_ARCADE_AUTO_RESET_SCORE_RP'				=> '<strong>Automatisches Zurücksetzen der Punktzahl unter Beibehaltung der Anzahl der Spiele</strong>',
	'LOG_ARCADE_AUTO_RESET_SCORE_SETTINGS'			=> '<strong>Einstellungen für automatisches Zurücksetzen von Rekorden geändert</strong>',
	'LOG_ARCADE_AUTO_RESET_SCORE_SS'				=> '<strong>Punkte und Super-Champions automatisch zurücksetzen</strong>',
	'LOG_ARCADE_AUTO_RESET_SCORE_SS_RP'				=> '<strong>Automatisches Zurücksetzen von Punktzahlen und Super-Champions unter Beibehaltung der Anzahl der Spiele</strong>',
	'LOG_ARCADE_BACKUP_CAT'							=> [
		1											=> '<strong>Spielhallenkategorie gesichert</strong><br>» %s',
		2											=> '<strong>Spielhallenkategorien gesichert</strong><br>» %s'
	],
	'LOG_ARCADE_BACKUP_EMPTY'						=> '<strong>Spielhallensicherungen gelöscht</strong>',
	'LOG_ARCADE_CATEGORY_COPIED_PERMISSIONS'		=> '<strong>Spielhalle, Kategorienbefugnisse kopiert</strong> von %1$s<br>» %2$s',
	'LOG_ARCADE_CAT_EDIT'							=> '<strong>Spielhallenkategoriendetails geändert</strong><br>» %s',
	'LOG_ARCADE_CHALLENGE'							=> '<strong>Herausforderungseinstellungen geändert</strong>',
	'LOG_ARCADE_CHALLENGE_ACCEPT_PM'				=> '<strong>Private Nachricht geändert „Herausforderung angenommen“</strong><br>» Sprache: %s',
	'LOG_ARCADE_CHALLENGE_FINAL_LOSER_PM'			=> '<strong>Private Nachricht geändert „Herausforderung Ende/Verlierer“</strong><br>» Sprache: %s',
	'LOG_ARCADE_CHALLENGE_FINAL_TIE_PM'				=> '<strong>Private Nachricht geändert „Herausforderung Ende/Unentschieden“</strong><br>» Sprache: %s',
	'LOG_ARCADE_CHALLENGE_FINAL_WINNER_PM'			=> '<strong>Private Nachricht geändert „Herausforderung Ende/Gewinner“</strong><br>» Sprache: %s',
	'LOG_ARCADE_CHALLENGE_PM'						=> '<strong>Private Nachricht der Herausforderung geändert</strong><br>» Sprache: %s',
	'LOG_ARCADE_CHALLENGE_REJECT_PM'				=> '<strong>Private Nachricht geändert „Herausforderung abgelehnt“</strong><br>» Sprache: %s',
	'LOG_ARCADE_CHALLENGE_REPORT_GAME_PM'			=> '<strong>Private Nachricht geändert „Herausforderung, fehlerhaftes Spiel melden“</strong><br>» Sprache: %s',
	'LOG_ARCADE_CHALLENGE_WITHDRAW_PM'				=> '<strong>Private Nachricht geändert „Herausforderung zurückgezogen“</strong><br>» Sprache: %s',
	'LOG_ARCADE_CHAMPIONS_GAME_ANNOUNCE'			=> '<strong>Top-Spieler Ankündigung geändert</strong><br>» Sprache: %s',
	'LOG_ARCADE_CLEAR_ADMIN_LOG'					=> '<strong>Spielhalle, Administratorprotokoll geleert</strong>',
	'LOG_ARCADE_CLEAR_ALL_USERS_BANNED'				=> '<strong>Alle Spielhallenbenutzer entsperrt</strong>',
	'LOG_ARCADE_CLEAR_CRITICAL_LOG'					=> '<strong>Spielhalle, Fehlerprotokoll geleert</strong>',
	'LOG_ARCADE_CLEAR_MOD_LOG'						=> '<strong>Spielhalle, Moderatorenprotokoll geleert</strong>',
	'LOG_ARCADE_CLEAR_REPORTS'						=> '<strong>Spielmeldungen zurückgesetzt</strong>',
	'LOG_ARCADE_CLEAR_USERS_BANNED'					=> '<strong>Spielhallenbenutzer entsperrt</strong><br>» %s',
	'LOG_ARCADE_CLEAR_USERS_LOG'					=> '<strong>Spielhalle, Benutzerprotokoll geleert</strong>',
	'LOG_ARCADE_CLEAR_USER_BANNED'					=> '<strong>Spielhallenbenutzer entsperrt</strong><br>» %s',
	'LOG_ARCADE_CREATE_INSTALL_FILE'				=> '<strong>Spielinstallationsdatei erstellt</strong><br>» %s',
	'LOG_ARCADE_DELETE_GAME'						=> [
		1											=> '<strong>Spiel gelöscht</strong><br>» %s',
		2											=> '<strong>Spiele gelöscht</strong><br>» %s'
	],
	'LOG_ARCADE_DELETE_GAME_FILES'					=> [
		1											=> '<strong>Lösche Dateien des Spiels</strong><br>» %s',
		2											=> '<strong>Lösche Dateien der Spiele</strong><br>» %s'
	],
	'LOG_ARCADE_DELETE_SCORE'						=> '<strong>Spielpunkte gelöscht für Benutzer: %3$s%1$s%2$s</strong><br>» %4$s',
	'LOG_ARCADE_DELETE_SUPER_CHAMPION_SCORE'		=> '<strong>Punktestand des Superchampions gelöscht für Benutzer: %s.</strong><br>» Spiel: %s',
	'LOG_ARCADE_DEL_CAT'							=> '<strong>Spielhallenkategorie gelöscht</strong><br>» %s',
	'LOG_ARCADE_DEL_CATS'							=> '<strong>Spielhallenkategorie und Unterkategorien gelöscht</strong><br>» %s',
	'LOG_ARCADE_DEL_DELETED_GAMES'					=> '<strong>Liste gelöschter Spiele gelöscht.</strong>',
	'LOG_ARCADE_DEL_GAMES'							=> '<strong>Spielhallenkategorie und Spiele gelöscht</strong><br>» %s',
	'LOG_ARCADE_DEL_GAMES_CATS'						=> '<strong>Spielhallenkategorie, Unterkategorien und Spiele gelöscht</strong><br>» %s',
	'LOG_ARCADE_DEL_GAMES_MOVE_CATS'				=> '<strong>Spielhallenkategorie und Spiele gelöscht, Unterkategorien verschoben</strong> nach %1$s<br>» %2$s',
	'LOG_ARCADE_DEL_MOVE_CATS'						=> '<strong>Spielhallenkategorie gelöscht und Unterkategorien verschoben</strong> nach %1$s<br>» %2$s',
	'LOG_ARCADE_DEL_MOVE_GAMES'						=> '<strong>Spielhallenkategorie gelöscht und Spiele verschoben</strong> nach %1$s<br>» %2$s',
	'LOG_ARCADE_DEL_MOVE_GAMES_CATS'				=> '<strong>Spielhallenkategorie und Unterkategorien gelöscht, Spiele verschoben</strong> nach %1$s<br>» %2$s',
	'LOG_ARCADE_DEL_MOVE_GAMES_MOVE_CATS'			=> '<strong>Spielhallenkategorie gelöscht, Spiele verschoben</strong> nach %1$s <strong>und Unterkategorien</strong> nach %2$s<br>» %3$s',
	'LOG_ARCADE_EDIT_GAME'							=> '<strong>Spieleinstellungen geändert</strong><br>» %s',
	'LOG_ARCADE_EDIT_GAME_RESET_INSTALL_DATE'		=> '<strong>Spiel geändert und Installationsdatum zurückgesetzt.</strong><br>» %s',
	'LOG_ARCADE_EDIT_SCORE'							=> '<strong>Spieldaten geändert für Benutzer: %1$s</strong><br>» %2$s',
	'LOG_ARCADE_ERROR_GAME_FILE_MISSING'			=> '<strong>Das Spiel „%s“ hat fehlende oder zusätzliche Dateien.</strong><br>» %s',
	'LOG_ARCADE_ERROR_PLAYING_TIME'					=> '<strong>Die Punkte im Spiel „%s“ wurden ohne Spielzeit übermittelt.</strong><br>» Punkte: %s',
	'LOG_ARCADE_EXT_SETTINGS'						=> '<strong>Spielhalle, Erweiterungseinstellungen geändert</strong>',
	'LOG_ARCADE_FEATURE'							=> '<strong>Funktionseinstellungen der Spielhalle geändert</strong>',
	'LOG_ARCADE_FORM_SCORE_ERROR'					=> [
		1											=> '<strong>Das Spiel %s hat inkorrekte Punkte übermittelt.</strong><br>Speichertyp: %s<br>Spielzeit: %s<br>Punkte: %s<br><strong>Fehler:</strong> (%s)',
		2											=> '<strong>Das Spiel %s hat inkorrekte Punkte übermittelt.</strong><br>Speichertyp: %s<br>Spielzeit: %s<br>Punkte: %s<br><strong>Fehler:</strong> (%s)'
	],
	'LOG_ARCADE_GAME'								=> '<strong>Spieleinstellungen geändert</strong>',
	'LOG_ARCADE_GAME_ANNOUNCE'						=> '<strong>Einstellungen für Spielankündigung geändert</strong><br>» Sprache: %s',
	'LOG_ARCADE_GAME_ANNOUNCE_SYNC'					=> '<strong>Spieleankündigungen resynchronisieren</strong>',
	'LOG_ARCADE_GAME_DATA_EMPTY_ERROR'				=> '<strong>Das Spiel „%s“ hat keinen Code(arcadegid oder enscore) gesendet, das Spiel ist defekt.</strong><br>» Spielzeit: %s<br>» Ergebnis: %s',
	'LOG_ARCADE_GAME_FILE_NOT_FOUND'				=> '<strong>Es fehlt eine Datei des Spiels „%s“</strong><br>» Datei: %s',
	'LOG_ARCADE_GAME_INHERIT_FILE_NOT_FOUND'		=> '<strong>Das Spiel “%s” findet zu vererbende Spieldateien nicht.</strong><br>» Vererbte Datei: %s',
	'LOG_ARCADE_GAME_INH_MAIN_UPDATE'				=> '<strong>Aktualisiere die Daten des Hauptspiels und %d erbenden Spielen</strong><br>» Angestoßene Spiele: %s',
	'LOG_ARCADE_GAME_INH_UPDATE'					=> '<strong>Aktualisiere die Daten von %d erbenden Spielen</strong><br>» Angestoßene Spiele: %s',
	'LOG_ARCADE_GAME_INSTALL_FILE_NOT_FOUND'		=> '<strong>Die Installationsdatei für %s konnte nicht gefunden werden.</strong><br>» Datei: %s',
	'LOG_ARCADE_GAME_INSTALL_FILE_UNWRITABLE'		=> '<strong>Die Installationsdatei für %s ist nicht beschreibbar.</strong><br>» Datei: %s',
	'LOG_ARCADE_GAME_NOT_DETECT_FILESIZE'			=> '<strong>Die Größe der Spieldateien konnte nicht ermittelt werden für das Spiel</strong><br>» %s',
	'LOG_ARCADE_GAME_SAME_DESC_UPDATE'				=> '<strong>Aktualisiere %d identische Spielebeschreibungen.</strong><br>» Angestoßene Spiele: %s',
	'LOG_ARCADE_GLOBAL_ANNOUNCE'					=> '<strong>Einstellungen für globale Ankündigung geändert</strong><br>» Sprache: %s',
	'LOG_ARCADE_GROUP_TOURNAMENT'					=> '<strong>Einstellungen für Gruppenturnier geändert</strong>',
	'LOG_ARCADE_GROUP_TOUR_ANNOUNCE'				=> '<strong>Gruppenturnierankündigung geändert</strong><br>» Sprache: %s',
	'LOG_ARCADE_GROUP_TOUR_ANNOUNCE_SYNC'			=> '<strong>Ankündigungen von Gruppenturnieren neu synchronisiert</strong>',
	'LOG_ARCADE_GROUP_TOUR_CREATE'					=> '<strong>Gruppenturnier erstellt</strong><br>» %s',
	'LOG_ARCADE_GROUP_TOUR_DELETE'					=> '<strong>Gruppenturnier gelöscht</strong><br>» %s',
	'LOG_ARCADE_GROUP_TOUR_EDIT'					=> '<strong>Gruppenturnier bearbeitet</strong><br>» %s',
	'LOG_ARCADE_GROUP_TOUR_END_ANNOUNCE'			=> '<strong>Ankündigung Gruppenturnierende geändert</strong><br>» Sprache: %s',
	'LOG_ARCADE_GUEST_DEFAULT_SETTINGS'				=> '<strong>Spielhalle, Standardeinstellungen für Gastbenutzer geändert</strong>',
	'LOG_ARCADE_G_MOVE_DOWN'						=> '<strong>Spielreihenfolge</strong> %s <strong>nach unten geändert</strong>',
	'LOG_ARCADE_G_MOVE_UP'							=> '<strong>Spielreihenfolge</strong> %s <strong>nach oben geändert</strong>',
	'LOG_ARCADE_LOAD'								=> '<strong>Lasteinstellungen</strong>',
	'LOG_ARCADE_MEMBERS_DEFAULT_SETTINGS'			=> '<strong>Spielhalle, Standardeinstellungen für Mitglieder geändert</strong>',
	'LOG_ARCADE_MENU_ADD'							=> '<strong>Menü hinzugefügt</strong><br>» %s',
	'LOG_ARCADE_MENU_DELETE'						=> [
		1											=> '<strong>Menü gelöscht</strong><br>» %s',
		2											=> '<strong>Menü und seine Untermenüs gelöscht</strong><br>» %s'
	],
	'LOG_ARCADE_MENU_EDIT'							=> '<strong>Menü bearbeitet</strong><br>» %s',
	'LOG_ARCADE_MENU_MOVE_DOWN'						=> '<strong>Menü verschoben </strong> %1$s <strong>unter</strong> %2$s',
	'LOG_ARCADE_MENU_MOVE_UP'						=> '<strong>Menü verschoben </strong> %1$s <strong>über</strong> %2$s',
	'LOG_ARCADE_MOVE_DOWN'							=> '<strong>Spielhallenkategorie</strong> %1$s <strong>verschoben unter</strong> %2$s',
	'LOG_ARCADE_MOVE_GAME'							=> [
		1											=> '<strong>Spiel aus Kategorie %1$s in neue Kategorie %2$s verschoben</strong><br>» %3$s',
		2											=> '<strong>Spiele aus Kategorie %1$s in neue Kategorie %2$s verschoben</strong><br>» %3$s'
	],
	'LOG_ARCADE_MOVE_UP'							=> '<strong>Spielhallenkategorie</strong> %1$s <strong>verschoben über</strong> %2$s',
	'LOG_ARCADE_PAAR'								=> '<strong>Geändert phpBB Arcade - Aktivitätsrang</strong>',
	'LOG_ARCADE_PAGE'								=> '<strong>Spielhalle, Seiteneinstellungen geändert.</strong>',
	'LOG_ARCADE_PATH'								=> '<strong>Spielhallen-Pfadeinstellungen geändert.</strong>',
	'LOG_ARCADE_PURGE_SESSIONS'						=> '<strong>Spielhallensitzungen gelöscht.</strong>',
	'LOG_ARCADE_REPORT_GAME_ANNOUNCE'				=> '<strong>Ankündigung Spielemeldung geändert</strong><br>» Sprache: %s',
	'LOG_ARCADE_RESET_ARCADE'						=> '<strong>Spielhalle zurückgesetzt.</strong>%s%s',
	'LOG_ARCADE_RESET_CHALLENGE'					=> '<strong>Spielhalle, Herausforderungen zurückgesetzt.</strong>',
	'LOG_ARCADE_RESET_COMMENT'						=> '<strong>Spielkommentare zurückgesetzt</strong>',
	'LOG_ARCADE_RESET_DOWNLOADS'					=> '<strong>Spielhallen-Downloadstatistik zurückgesetzt</strong>',
	'LOG_ARCADE_RESET_GAME'							=> [
		1											=> '<strong>Spieldaten zurückgesetzt%s%s%s%s</strong><br>» %s',
		2											=> '<strong>Spieldaten zurückgesetzt%s%s%s%s</strong><br>» %s'
	],
	'LOG_ARCADE_RESET_GAMES_REC'					=> '<strong>Spieleempfehlung zurückgesetzt.</strong>',
	'LOG_ARCADE_RESET_GAME_SCORES'					=> [
		1											=> '<strong>Spielstände zurückgesetzt%s%s</strong><br>» %s',
		2											=> '<strong>Spielstände zurückgesetzt%s%s</strong><br>» %s'
	],
	'LOG_ARCADE_RESET_GROUP_TOURNAMENT'				=> '<strong>Gruppenturnier zurückgesetzt</strong>',
	'LOG_ARCADE_RESET_INSTALL_DATE_GAME'			=> [
		1											=> '<strong>Installationsdatum eines Spiels zurückgesetzt.</strong><br>» %s',
		2											=> '<strong>Installationsdatum von Spielen zurückgesetzt.</strong><br>» %s'
	],
	'LOG_ARCADE_RESET_JACKPOT'						=> '<strong>Jackpotdaten für die Spielhalle zurückgesetzt.</strong>',
	'LOG_ARCADE_RESET_MENU'							=> '<strong>Menüstruktur der Spielhalle zurückgesetzt</strong>',
	'LOG_ARCADE_RESET_PLAYING_RECORD'				=> '<strong>Spielhalle, Spielerrekord zurückgesetzt.</strong>',
	'LOG_ARCADE_RESET_POINTS'						=> '<strong>Spielhallenpunkte zurückgesetzt.</strong>',
	'LOG_ARCADE_RESET_SCORES_ALL'					=> '<strong>Alle Spielhallenpunkte gelöscht.</strong>',
	'LOG_ARCADE_RESET_SUPER_CHAMPION'				=> '<strong>Spielhalle, Superchampion zurückgesetzt.</strong>',
	'LOG_ARCADE_RESET_TOURNAMENT'					=> '<strong>Spielhalle, Turnierdaten zurückgesetzt.</strong>',
	'LOG_ARCADE_RESET_USERS_DATA'					=> '<strong>Alle Spielhallen-Benutzerdaten zurückgesetzt.</strong>',
	'LOG_ARCADE_RESET_USERS_SCORE'					=> '<strong>Alle Spielstände zurückgesetzt.</strong>',
	'LOG_ARCADE_RESET_USERS_SETTINGS'				=> '<strong>Alle Spielhallenbenutzereinstellungen zurückgesetzt.</strong>',
	'LOG_ARCADE_RESET_USER_ALL'						=> '<strong>Alle Spielhallenbenutzerdaten zurückgesetzt.</strong><br>» %s',
	'LOG_ARCADE_RESET_USER_SCORES'					=> '<strong>Spielstände zurückgesetzt%s%s</strong><br>» %s',
	'LOG_ARCADE_RESET_USER_SUPER_RECORDS'			=> '<strong>Benutzer-Superrekorde zurückgesetzt.</strong><br>» %s',
	'LOG_ARCADE_RESTORE_DEFAULT_DATA_ANNOUNCE'		=> '<strong>Standardeinstellungen der Ankündigung wiederhergestellt.</strong><br>» %s',
	'LOG_ARCADE_RESTORE_DEFAULT_DATA_PM'			=> '<strong>Standardeinstellungen für private Nachricht wiederhergestellt</strong><br>» %s',
	'LOG_ARCADE_RESYNC_TOTALS_DATA'					=> '<strong>Spielhallendaten neu synchronisiert.</strong>',
	'LOG_ARCADE_RESYNC_USERS_TOTAL_DATA'			=> '<strong>Gesamte Benutzerdaten neu synchronisiert.</strong>',
	'LOG_ARCADE_SETTINGS'							=> '<strong>Allgemeine Spielhalleneinstellungen geändert.</strong>',
	'LOG_ARCADE_SYNC_CAT'							=> '<strong>Spielhallenkategorie neu synchronisiert</strong><br>» %s',
	'LOG_ARCADE_SYNC_GAME'							=> [
		1											=> '<strong>Spiel neu synchronisiert</strong><br>» %s',
		2											=> '<strong>Spiele neu synchronisiert</strong><br>» %s'
	],
	'LOG_ARCADE_SYSTEM'								=> '<strong>Spielhalle, Systemeinstellungen geändert</strong>',
	'LOG_ARCADE_TOURNAMENT'							=> '<strong>Spielhalle, Turniereinstellungen geändert.</strong>',
	'LOG_ARCADE_TOUR_ANNOUNCE'						=> '<strong>Spielhalle, Einstellungen für Turnierankündigung geändert.</strong><br>» Sprache: %s',
	'LOG_ARCADE_TOUR_ANNOUNCE_SYNC'					=> '<strong>Turnierankündigungen neu synchronisiert</strong>',
	'LOG_ARCADE_TOUR_CREATE'						=> '<strong>Spielhalle, Turnier erstellt.</strong><br>» %s',
	'LOG_ARCADE_TOUR_DELETE'						=> '<strong>Spielhalle, Turnier gelöscht.</strong><br>» %s',
	'LOG_ARCADE_TOUR_EDIT'							=> '<strong>Spielhalle, Turnier bearbeitet.</strong><br>» %s',
	'LOG_ARCADE_TOUR_END_ANNOUNCE'					=> '<strong>Spielhalle, Ankündigung Turnierende geändert </strong><br>» Sprache: %s',
	'LOG_ARCADE_UNDEFINED_SCORE'					=> '<strong>Das Spiel „%s“ hat einen undefinierten Punktestand gesendet.</strong>',
	'LOG_ARCADE_UNPACK_GAME'						=> [
		1											=> '<strong>Spiel entpackt</strong><br>» %s',
		2											=> '<strong>Spiele entpackt</strong><br>» %s'
	],
	'LOG_ARCADE_UPLOAD_GAME'						=> [
		1											=> '<strong>Spiel hochgeladen</strong><br>» %s',
		2											=> '<strong>Spiele hochgeladen</strong><br>» %s'
	],
	'LOG_ARCADE_USER_BANNED'						=> '<strong>Spielhallenbenutzer gesperrt</strong><br>» %s',
	'LOG_ARCADE_USER_DELETE_FAVORITE'				=> [
		1											=> '<strong>Spielefavorit gelöscht</strong><br>» %s',
		2											=> '<strong>Spielefavoriten gelöscht</strong><br>» %s'
	],
	'LOG_ARCADE_USER_GAME_SETTINGS'					=> '<strong>Spieleinstellungen geändert</strong>',
	'LOG_ARCADE_USER_HIGHLIGHT_FAVORITE'			=> [
		1											=> '<strong>Spielefavorit hervorgehoben</strong><br>» %s',
		2											=> '<strong>Spielefavoriten hervorgehoben</strong><br>» %s'
	],
	'LOG_ARCADE_USER_MAIN_SETTINGS'					=> '<strong>Spielhallenbenutzer, Haupteinstellungen geändert.</strong>',
	'LOG_ARCADE_USER_POST_SETTINGS'					=> '<strong>Spielhalle, Beitragseinstellungen geändert.</strong>',
	'LOG_ARCADE_USER_REMOVE_HIGHLIGHT_FAVORITE'		=> [
		1											=> '<strong>Hervorhebung des Spielefavoriten entfernt</strong><br>» %s',
		2											=> '<strong>Hervorhebung der Spielefavoriten entfernt</strong><br>» %s'
	],
	'LOG_ARCADE_USER_SET_UPDATE'					=> '<strong>Spielhallenbenutzerdaten aktualisiert</strong><br>» %s',
	'LOG_ARCADE_VERSION_CHECK_DISABLED'				=> '<strong>Automatische Versionsprüfung deaktiviert</strong>',
	'LOG_ARCADE_VERSION_CHECK_ENABLED'				=> '<strong>Automatische Versionsprüfung aktiviert</strong>',
	'LOG_C_ROLE_ADD'								=> '<strong>Spielhallenkategorienrolle hinzugefügt</strong><br>» %s',
	'LOG_C_ROLE_EDIT'								=> '<strong>Spielhallenkategorienrolle geändert</strong><br>» %s',
	'LOG_C_ROLE_REMOVED'							=> '<strong>Spielhallenkategorienrolle entfernt</strong><br>» %s'
]);
