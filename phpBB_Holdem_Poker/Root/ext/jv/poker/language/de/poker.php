<?php
/**
*
* @package phpBB Holdem Póker
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

$lang = array_merge($lang, [
	'JV_POKER'							=> 'Poker',
	'JV_POKER_ALL'						=> 'Alles',
	'JV_POKER_AMOUNT'					=> 'Betrag',
	'JV_POKER_AMOUNT_BALANCE_ERROR'		=> 'Der von dir angegebene Betrag ist höher als dein Kontostand.',
	'JV_POKER_AMOUNT_TOO_SMALL_ERROR'	=> 'Der festgelegte Betrag ist zu klein.',
	'JV_POKER_ARCHIVE_REFRESH'			=> 'Archiv aktualisieren',
	'JV_POKER_BALANCE'					=> 'Chips: <strong class="jv_poker_balance">%s</strong>',
	'JV_POKER_BUY_IN'					=> 'Buy-in',
	'JV_POKER_CHAIR'					=> 'Stuhl',
	'JV_POKER_CHIPS'					=> 'Chips',
	'JV_POKER_CHIPS_BALANCE'			=> 'Chips Kontostand: <strong class="jv_poker_balance">%s</strong>',
	'JV_POKER_CHIPS_EXCHANGE'			=> 'Chips einwechseln',
	'JV_POKER_CHIPS_EXCHANGE_EXPLAIN'	=> 'Gib den Betrag ein, den du in Chips einwechseln möchtest.',
	'JV_POKER_CHIPS_EXCHENGE_COST'		=> 'Außerdem wurden die Kosten von %s von deinem %s-Guthaben abgezogen.',
	'JV_POKER_CHIPS_EXCHENGE_SUCCESS'	=> '%s Chips wurden erfolgreich eingewechselt.',
	'JV_POKER_CHIPS_FORMAT'				=> 'KMBT',
	'JV_POKER_CHIPS_PF'					=> 'chips: %s',
	'JV_POKER_COMMENT'					=> 'Kommentar',
	'JV_POKER_DAILY_GIFT'				=> 'Tägliches Pokergeschenk',
	'JV_POKER_ENTRY_FEE'				=> 'Buy-in',
	'JV_POKER_EXCHANGE_COST'			=> 'Kosten für Einwechselung: %s%%.',
	'JV_POKER_EXCHANGE_COST_ERROR'		=> 'Der angegebene Betrag und die damit verbundenen Kosten sind höher als dein Guthaben. Der maximal mögliche Umtauschbetrag beträgt %s.',
	'JV_POKER_EXCHANGE_TYPE_CHIPS'		=> '%s » Chips',
	'JV_POKER_EXCHANGE_TYPE_POINTS'		=> 'Chips » %s',
	'JV_POKER_FAQ'						=> 'Poker-Handbuch',
	'JV_POKER_FAQ_VIEWING'				=> 'Betrachtet Poker-Handbuch',
	'JV_POKER_FIX_LIMIT'				=> 'Festes Limit',
	'JV_POKER_GAME_INFO'				=> 'Spielinformation',
	'JV_POKER_GAME_TIME'				=> 'Spielzeit',
	'JV_POKER_GET_IT'					=> 'Abholen',
	'JV_POKER_HI_JP_WIN'				=> '{color}%s{/color} hat gerade {color}%d{/color} Chips aus dem JackPot gewonnen.',
	'JV_POKER_HI_TOUR_START'			=> 'Achtung! Das Pokerturnier startet in weniger als %s Minuten!',
	'JV_POKER_INDEX'					=> 'Poker Übersicht',
	'JV_POKER_KEYWORDS'					=> 'phpBB, holdem, poker',
	'JV_POKER_LARGEST_POT_WON'			=> 'Größter gewonnener Pot: <strong>%s</strong>',
	'JV_POKER_LAST_PLAY'				=> 'Zuletzt gespielt: <strong>%s</strong>',
	'JV_POKER_LEADERS'					=> 'Führende Pokerspieler',
	'JV_POKER_LEARNER'					=> 'Lehrling',
	'JV_POKER_LEARNER_ROOM'				=> 'Lernraum',
	'JV_POKER_LEARNER_ROOMS'			=> 'Lernräume',
	'JV_POKER_LEAST_PLAYED_USERS'		=> 'Benutzer mit den wenigsten Spielen',
	'JV_POKER_LIMIT'					=> 'Limit',
	'JV_POKER_LOBBY'					=> 'Lobby',
	'JV_POKER_LOCKED'					=> 'Geschlossen',
	'JV_POKER_LONGEST_PLAYTIME'			=> 'Längste Gesamtspielzeit',
	'JV_POKER_MOST_PLAYED_USERS'		=> 'Benutzer mit den meisten Spielen',
	'JV_POKER_MOVETIME'					=> 'Reaktionszeit',
	'JV_POKER_MSG_DELETE'				=> 'Nachricht löschen',
	'JV_POKER_MSG_DELETE_NO_PERMISSION'	=> 'Du hast keine ausreichende Berechtigung, um diese Nachricht zu löschen.',
	'JV_POKER_MSG_DELETE_SUCCESS'		=> 'Nachricht wurde erfolgreich gelöscht.',
	'JV_POKER_NLOSE'					=> [
		1								=> 'Partie verloren: <strong>%s</strong>',
		2								=> 'Partien verloren: <strong>%s</strong>'
	],
	'JV_POKER_NORMAL'					=> 'Normal',
	'JV_POKER_NORMAL_ROOM'				=> 'Normaler Raum',
	'JV_POKER_NORMAL_ROOMS'				=> 'Normale Räume',
	'JV_POKER_NOT_FOUND_ROOM'			=> 'Der angeforderte Raum wurde nicht gefunden!',
	'JV_POKER_NOT_PLAYING'				=> 'Spielt nicht',
	'JV_POKER_NO_CHAMPION'				=> 'Derzeit gibt es keinen Champion.',
	'JV_POKER_NO_LIMIT'					=> 'Kein Limit',
	'JV_POKER_NO_PERMISSION'			=> 'Du hast keine ausreichenden Berechtigungen, um Poker zu spielen.',
	'JV_POKER_NO_ROOM'					=> 'Derzeit gibt es keinen Pokerraum.',
	'JV_POKER_NO_ROOM_ID'				=> 'Die angeforderte Raum-ID existiert nicht!',
	'JV_POKER_NO_STATS_DATA'			=> 'Es sind keine statistischen Daten verfügbar.',
	'JV_POKER_NO_STYLE'					=> 'Der für diesen Raum eingestellte Style existiert nicht (mehr)!',
	'JV_POKER_NO_USER_STATS'			=> 'Für den von dir angefragten Benutzer sind keine Statistiken verfügbar.',
	'JV_POKER_NWON'						=> [
		1								=> 'Partie gewonnen: <strong>%s</strong>',
		2								=> 'Partien gewonnen: <strong>%s</strong>'
	],
	'JV_POKER_PARTICIPANTS'				=> 'Teilnehmer',
	'JV_POKER_PLACE'					=> '%s. Platz',
	'JV_POKER_PLAYED'					=> 'Gespielte',
	'JV_POKER_PLAYED_NPARTY'			=> [
		1								=> 'Gespielte Partie: <strong>%s</strong>',
		2								=> 'Gespielte Partien: <strong>%s</strong>'
	],
	'JV_POKER_PLAYED_VPARTY'			=> [
		1								=> 'Turnier gespielt: <strong>%s</strong>',
		2								=> 'Turniere gespielt: <strong>%s</strong>'
	],
	'JV_POKER_PLAYING'					=> 'Spielen',
	'JV_POKER_PLAYING_ROOMS_USER'		=> 'Derzeit sind %s Räume aktiv, mit insgesamt %s Benutzer.',
	'JV_POKER_PLAYING_ROOMS_USERS'		=> 'Derzeit sind %s Räume aktiv, mit insgesamt %s Benutzern.',
	'JV_POKER_PLAYING_ROOM_USER'		=> 'Derzeit ist %s Raum aktiv, mit insgesamt %s Benutzer.',
	'JV_POKER_PLAYING_ROOM_USERS'		=> 'Derzeit ist %s Raum aktiv, mit insgesamt %s Benutzern.',
	'JV_POKER_PLAYING_TIMES'			=> 'Gesamte Spielzeit: <strong>%s</strong>',
	'JV_POKER_POINTS_BALANCE'			=> '%s Kontostand: <strong>%s</strong>',
	'JV_POKER_POINTS_EXCHANGE_EXPLAIN'	=> 'Gib den Betrag an zum Einwechseln nach %s.',
	'JV_POKER_POINTS_EXCHENGE_SUCCESS'	=> '%1$s %2$s wurde erfolgreich eingewechselt.',
	'JV_POKER_PRACTICE'					=> 'Übung',
	'JV_POKER_PRACTICE_ROOM'			=> 'Übungsraum',
	'JV_POKER_PRACTICE_ROOMS'			=> 'Übungsräume',
	'JV_POKER_PRIVATE'					=> 'Privat',
	'JV_POKER_PRIZE'					=> 'Preis',
	'JV_POKER_RANK'						=> 'Rang',
	'JV_POKER_RETURN_EXCHENGE_PAGE'		=> '%sZurück zur Chip-Wechselstube.%s',
	'JV_POKER_RETURN_INDEX_PAGE'		=> '%sZurück zur Poker-Hauptseite.%s',
	'JV_POKER_ROOM'						=> 'Pokerraum',
	'JV_POKER_ROOMS_VIEWING'			=> 'Betrachtet Pokerräume',
	'JV_POKER_ROOM_DISABLED'			=> 'Poker ist derzeit deaktiviert.',
	'JV_POKER_ROOM_NAME'				=> 'Name',
	'JV_POKER_ROOM_PLAYERS'				=> 'Mitspieler/Sitze',
	'JV_POKER_ROOM_PLAYING_USERS'		=> 'Im Raum <strong>%s</strong> spielen: %s',
	'JV_POKER_ROOM_PLAY_USERS'			=> '%1$s / %2$s',
	'JV_POKER_ROOM_STATUS'				=> 'Status',
	'JV_POKER_ROOM_TYPE'				=> 'Typ',
	'JV_POKER_ROOM_VIEWING'				=> 'Betrachtet Pokerraum %s',
	'JV_POKER_ROOM_WAIT_USERS'			=> 'Im Raum <strong>%s</strong> warten: %s',
	'JV_POKER_RULES'					=> 'Poker Regeln',
	'JV_POKER_SELECT_EXCHANGE_TYPE'		=> 'Wähle, was du wechseln möchtest',
	'JV_POKER_SHORTEST_PLAYTIME'		=> 'Kürzeste Gesamtspielzeit',
	'JV_POKER_SHOUT_ARCHIVE'			=> 'Shoutbox Archiv',
	'JV_POKER_SHOUT_ARCHIVE_NO_MSG'		=> 'Es gibt derzeit keine Nachrichten zum Anzeigen.',
	'JV_POKER_SHOUT_ROOM_ARCHIVE'		=> 'Pokerraum %s Shoutbox-Archiv',
	'JV_POKER_SMALL_BIG_BLIND'			=> 'Kleiner/großer Blind',
	'JV_POKER_STAT'						=> 'Statistiken',
	'JV_POKER_STATS'					=> 'Poker Statistiken',
	'JV_POKER_STATS_ALLINS'				=> [
		1								=> 'Gesamte Anzahl all-in: <strong>%s</strong>',
		2								=> 'Gesamte Anzahl all-in: <strong>%s</strong>'
	],
	'JV_POKER_STATS_CALLS'				=> [
		1								=> 'Anzahl Mitgegangen: <strong>%s</strong>',
		2								=> 'Anzahl Mitgegangen: <strong>%s</strong>'
	],
	'JV_POKER_STATS_CHECKS'				=> [
		1								=> 'Anzahl Geschoben: <strong>%s</strong>',
		2								=> 'Anzahl Geschoben: <strong>%s</strong>'
	],
	'JV_POKER_STATS_FOLDS'				=> [
		1								=> 'Anzahl Gepasst: <strong>%s</strong>',
		2								=> 'Anzahl Gepasst: <strong>%s</strong>'
	],
	'JV_POKER_STATS_NO_PERMISSION'		=> 'Du hast keine ausreichende Berechtigung, um die Pokerstatistiken anzusehen.',
	'JV_POKER_STATS_PLAYS'				=> [
		1								=> '%s Partie gespielt.',
		2								=> '%s Partien gespielt.'
	],
	'JV_POKER_STATS_PLAYS_TOURS'		=> [
		1								=> 'spielte %s Turnier.',
		2								=> 'spielte %s Turniere.'
	],
	'JV_POKER_STATS_RAISES'				=> [
		1								=> 'Anzahl Erhöht: <strong>%s</strong>',
		2								=> 'Anzahl Erhöht: <strong>%s</strong>'
	],
	'JV_POKER_STATS_VIEWING'			=> 'Betrachtet Pokerstatistiken',
	'JV_POKER_STATS_WON_TOURS'			=> [
		1								=> 'gewann %s Turnier.',
		2								=> 'gewann %s Turniere.'
	],
	'JV_POKER_TOTAL_DATA'				=> 'Die Gesamtanzahl von <strong>%s</strong> Benutzern hat insgesamt <strong>%s</strong> Hände gespielt.<br>Gesamte Spielzeit: <strong>%s</strong>',
	'JV_POKER_TOTAL_DATA_CHIPS'			=> 'Gesamtzahl Chips: <strong>%s</strong>',
	'JV_POKER_TOTAL_MSG'				=> 'Gesamte Nachrichten %s',
	'JV_POKER_TOTAL_TOURS'				=> 'Turniere gesamt (%s)',
	'JV_POKER_TOURNAMENT'				=> 'Turnier',
	'JV_POKER_TOURNAMENT_ROOM'			=> 'Turnierraum',
	'JV_POKER_TOURNAMENT_ROOMS'			=> 'Turnierräume',
	'JV_POKER_TOUR_END'					=> 'Ende',
	'JV_POKER_TOUR_LEADERS'				=> 'Poker Turniermeister',
	'JV_POKER_TOUR_START'				=> 'Start',
	'JV_POKER_TOUR_STATS'				=> 'Turnierstatistiken',
	'JV_POKER_TOUR_STATS_VIEWING'		=> 'Betrachtet Pokerturnierstatistiken',
	'JV_POKER_UNKNOWN'					=> 'Unbekannt',
	'JV_POKER_UNLOCKED'					=> 'Geöffnet',
	'JV_POKER_USER_INFO'				=> 'Benutzerinformation',
	'JV_POKER_USER_STAT'				=> 'Benutzerstatistik',
	'JV_POKER_USER_STATS'				=> '%s Pokerstatistiken',
	'JV_POKER_USER_STATS_VIEWING'		=> 'Betrachtet %s Pokerstatistiken',
	'JV_POKER_VIEW_MEMBER_PROFILE'		=> 'Benutzerprofil ansehen',
	'JV_POKER_VIEW_STAT'				=> 'Pokerstatistik ansehen',
	'JV_POKER_VIEW_STATS'				=> 'Statistiken ansehen',
	'JV_POKER_VIEW_USER_STATS'			=> 'Benutzerstatistik ansehen',
	'JV_POKER_VLOSE'					=> [
		1								=> 'Turnier verloren: <strong>%s</strong>',
		2								=> 'Turniere verloren: <strong>%s</strong>'
	],
	'JV_POKER_VWON'						=> [
		1								=> 'Turnier gewonnen: <strong>%s</strong>',
		2								=> 'Turniere gewonnen: <strong>%s</strong>'
	],
	'JV_POKER_WAITING'					=> 'Wartend',
	'JV_POKER_WELCOME'					=> 'Willkommen im Pokerraum %s!',
	'JV_POKER_WHO_IS_PLAYING'			=> 'Wer spielt in den Pokerräumen?',
	'JV_POKER_WINNER'					=> 'Sieger',
	'JV_POKER_WONS_RATE'				=> 'Gewinnverhältnis: <strong>%s%%</strong>',
	'JV_POKER_WON_PARTY'				=> [
		1								=> 'Pokerpartie gewonnen',
		2								=> 'Pokerpartien gewonnen'
	],
	'JV_POKER_WON_TOUR'					=> [
		1								=> 'Pokerturnier gewonnen',
		2								=> 'Pokerturniere gewonnen'
	],
]);
