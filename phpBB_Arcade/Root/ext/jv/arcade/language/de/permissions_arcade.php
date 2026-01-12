<?php
/**
*
* @package phpBB Arcade
* @version $Id: permissions_arcade.php 2450 2021-12-13 20:24:43Z KillBill $
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

// Define categories and permission types
$lang = array_merge($lang, [
	'ACL_A_ARCADE'						=> 'Kann Spielhalle zurücksetzen',
	'ACL_A_ARCADE_ANNOUNCE'				=> 'Kann Ankündigungen verwalten',
	'ACL_A_ARCADE_BACKUP'				=> 'Kann Spielhallenkategorien sichern',
	'ACL_A_ARCADE_CAT'					=> 'Kann Kategorien hinzufügen/ändern',
	'ACL_A_ARCADE_CLEARLOGS'			=> 'Kann Protokolle leeren',
	'ACL_A_ARCADE_DELETE_CAT'			=> 'Kann Kategorien löschen',
	'ACL_A_ARCADE_DELETE_GAME'			=> 'Kann Spiele löschen',
	'ACL_A_ARCADE_DELETE_TOUR'			=> 'Kann Turniere löschen',
	'ACL_A_ARCADE_GAME'					=> 'Kann Spiele hinzufügen/ändern',
	'ACL_A_ARCADE_INSTALL'				=> 'Kann Installationsfunktionen verwalten',
	'ACL_A_ARCADE_MENU'					=> 'Kann Menü verwalten',
	'ACL_A_ARCADE_POINTS_SETTINGS'		=> 'Kann Punkteeinstellungen ändern',
	'ACL_A_ARCADE_RANKS'				=> 'Kann Ränge verwalten',
	'ACL_A_ARCADE_RESET_GAME'			=> 'Kann Spiele zurücksetzen',
	'ACL_A_ARCADE_SETTINGS'				=> 'Kann Spielhalleneinstellungen verwalten',
	'ACL_A_ARCADE_TOUR'					=> 'Kann Spielhallenturnier erstellen/bearbeiten',
	'ACL_A_ARCADE_USER'					=> 'Kann Benutzer verwalten',
	'ACL_A_ARCADE_UTILITIES'			=> 'Kann Werkzeuge nutzen',
	'ACL_A_ARCADE_VIEWLOGS'				=> 'Kann Protokolle ansehen',
	'ACL_A_CAUTH'						=> 'Kann Befugnisklasse ändern',
	'ACL_CAT_ARCADE'					=> 'Spielhalle',
	'ACL_C_COMMENT'						=> 'Kann Spiele kommentieren',
	'ACL_C_DOWNLOAD'					=> 'Kann Spiele herunterladen',
	'ACL_C_DOWNLOADFREE'				=> 'Kann Spiele kostenlos herunterladen',
	'ACL_C_IGNORECONTROL'				=> 'Kann Spielkontrolle umgehen',
	'ACL_C_IGNOREFLOOD_DOWNLOAD'		=> 'Kann Downloadbeschränkungen umgehen',
	'ACL_C_IGNOREFLOOD_PLAY'			=> 'Kann Spielbeschränkungen umgehen',
	'ACL_C_LIST'						=> 'Kann Kategorie auflisten',
	'ACL_C_PLAY'						=> 'Kann Spiele spielen',
	'ACL_C_PLAYFREE'					=> 'Kann Spiele kostenlos spielen',
	'ACL_C_RATE'						=> 'Kann Spiele bewerten',
	'ACL_C_REPORT'						=> 'Kann Spiele melden',
	'ACL_C_RE_RATE'						=> 'Kann eigene Bewertungen ändern',
	'ACL_C_SCORE'						=> 'Kann Punkte übermitteln. <em>Nur für registrierte Benutzer.</em>',
	'ACL_C_VIEW'						=> 'Kann Kategorie ansehen',
	'ACL_M_ARCADE_CHANGE_GAMENAME'		=> 'Kann Spielenamen ändern',
	'ACL_M_ARCADE_CLEARLOGS'			=> 'Kann Protokolle leeren',
	'ACL_M_ARCADE_GAME'					=> 'Kann Spiele bearbeiten',
	'ACL_M_ARCADE_RESET_GAME'			=> 'Kann Spiele zurücksetzen',
	'ACL_M_ARCADE_TOUR'					=> 'Kann Turniere erstellen/bearbeiten',
	'ACL_M_ARCADE_TOUR_REWARD'			=> 'Kann Belohnungen zu neuen Turnieren hinzufügen',
	'ACL_M_ARCADE_VIEWLOGS'				=> 'Kann Protokolle ansehen',
	'ACL_TYPE_C_'						=> 'Kategorienbefugnisse',
	'ACL_U_ARCADE'						=> 'Kann die Spielhalle benutzen',
	'ACL_U_ARCADE_CHALLENGE'			=> 'Kann sich duellieren',
	'ACL_U_ARCADE_DOWNLOAD'				=> 'Kann Spiele herunterladen',
	'ACL_U_ARCADE_FAVORITES'			=> 'Kann Favoriten hinzufügen/ändern',
	'ACL_U_ARCADE_IGNOREFLOOD_SEARCH'	=> 'Kann die Suchbeschränkungen umgehen',
	'ACL_U_ARCADE_PM'					=> 'Kann bei Verlust einer Meisterschaft eine private Nachricht erhalten',
	'ACL_U_ARCADE_POPUP'				=> 'Kann Spiele in einem neuen Fenster spielen',
	'ACL_U_ARCADE_SEARCH'				=> 'Kann in der Spielhalle suchen',
	'ACL_U_ARCADE_TOUR'					=> 'Kann im Turnier spielen',
	'ACL_U_ARCADE_VIEWSTATS'			=> 'Kann Spielestatistik ansehen',
	'ACL_U_ARCADE_VIEW_WHOISPLAYING'	=> 'Kann sehen, wer gerade spielt'
]);
