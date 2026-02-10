<?php
/**
*
* @package phpBB Holdem Póker
* @version $Id$
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

$lang = array_merge($lang, [
	'JV_POKER'							=> 'Póker',
	'JV_POKER_ALL'						=> 'Összes',
	'JV_POKER_AMOUNT'					=> 'Összeg',
	'JV_POKER_AMOUNT_BALANCE_ERROR'		=> 'A megadott összeg nagyobb mint az egyenleged.',
	'JV_POKER_AMOUNT_TOO_SMALL_ERROR'	=> 'A megadott összeg túl kicsi.',
	'JV_POKER_ARCHIVE_REFRESH'			=> 'Archívum frissítése',
	'JV_POKER_BALANCE'					=> 'Zseton: <strong class="jv_poker_balance">%s</strong>',
	'JV_POKER_BUY_IN'					=> 'Beülő',
	'JV_POKER_CHAIR'					=> 'Szék',
	'JV_POKER_CHIPS'					=> 'Zseton',
	'JV_POKER_CHIPS_BALANCE'			=> 'Zseton egyenleged: <strong class="jv_poker_balance">%s</strong>',
	'JV_POKER_CHIPS_EXCHANGE'			=> 'Zseton váltó',
	'JV_POKER_CHIPS_EXCHANGE_EXPLAIN'	=> 'Add meg azt az összeget amelyet zsetonra szeretnél váltani.',
	'JV_POKER_CHIPS_EXCHENGE_COST'		=> 'Továbbá a költség %s is levonásra került a %s egyenlegedből.',
	'JV_POKER_CHIPS_EXCHENGE_SUCCESS'	=> '%s zseton sikeresen átváltásra került.',
	'JV_POKER_CHIPS_FORMAT'				=> 'EMBT',
	'JV_POKER_CHIPS_PF'					=> 'zseton: %s',
	'JV_POKER_COMMENT'					=> 'Kommentálás',
	'JV_POKER_DAILY_GIFT'				=> 'Póker napi ajándék',
	'JV_POKER_ENTRY_FEE'				=> 'Nevezési díj',
	'JV_POKER_EXCHANGE_COST'			=> 'Átváltási költség: %s%%.',
	'JV_POKER_EXCHANGE_COST_ERROR'		=> 'A megadott összeg és a vele járó költség nagyobb mint az egyenleged. A maximum átváltható összeg %s.',
	'JV_POKER_EXCHANGE_TYPE_CHIPS'		=> '%s » zsetonra',
	'JV_POKER_EXCHANGE_TYPE_POINTS'		=> 'Zsetont » %s',
	'JV_POKER_FAQ'						=> 'Póker útmutató',
	'JV_POKER_FAQ_VIEWING'				=> 'Póker útmutató megtekintése',
	'JV_POKER_FIX_LIMIT'				=> 'Fix limit',
	'JV_POKER_GAME_INFO'				=> 'Játék információ',
	'JV_POKER_GAME_TIME'				=> 'Játék idő',
	'JV_POKER_GET_IT'					=> 'Megszerezz',
	'JV_POKER_HI_JP_WIN'				=> '{color}%s{/color} éppen most nyert {color}%d{/color} zsetont a JackPot-ból.',
	'JV_POKER_HI_TOUR_START'			=> 'Figyelem! A póker verseny kevesebb mint %s perc múlva indúl!',
	'JV_POKER_INDEX'					=> 'Póker kezdőlap',
	'JV_POKER_KEYWORDS'					=> 'phpBB, holdem, póker',
	'JV_POKER_LARGEST_POT_WON'			=> 'Legnagyobb elnyert kassza: <strong>%s</strong>',
	'JV_POKER_LAST_PLAY'				=> 'Utolsó játszás: <strong>%s</strong>',
	'JV_POKER_LEADERS'					=> 'Póker bajnokai',
	'JV_POKER_LEARNER'					=> 'Tanuló',
	'JV_POKER_LEARNER_ROOM'				=> 'Tanuló szoba',
	'JV_POKER_LEARNER_ROOMS'			=> 'Tanuló szobák',
	'JV_POKER_LEAST_PLAYED_USERS'		=> 'Legkevesebbet játszott felhasználók',
	'JV_POKER_LIMIT'					=> 'Limit',
	'JV_POKER_LOBBY'					=> 'Póker szobák',
	'JV_POKER_LOCKED'					=> 'Lezárt',
	'JV_POKER_LONGEST_PLAYTIME'			=> 'Leghosszabb játszási idő',
	'JV_POKER_MOST_PLAYED_USERS'		=> 'Legtöbbet játszott felhasználók',
	'JV_POKER_MOVETIME'					=> 'Mozgási idő',
	'JV_POKER_MSG_DELETE'				=> 'Üzenet törlése',
	'JV_POKER_MSG_DELETE_NO_PERMISSION'	=> 'Nincs jogosultságod az üzenet törléséhez.',
	'JV_POKER_MSG_DELETE_SUCCESS'		=> 'Az üzenet sikeresen törölve.',
	'JV_POKER_NLOSE'					=> [
		1								=> 'Vesztett parti: <strong>%s</strong>',
		2								=> 'Vesztett partik: <strong>%s</strong>'
	],
	'JV_POKER_NORMAL'					=> 'Normál',
	'JV_POKER_NORMAL_ROOM'				=> 'Normál szoba',
	'JV_POKER_NORMAL_ROOMS'				=> 'Normál szobák',
	'JV_POKER_NOT_FOUND_ROOM'			=> 'A kért szoba nem található!',
	'JV_POKER_NOT_PLAYING'				=> 'Nem játszanak',
	'JV_POKER_NO_CHAMPION'				=> 'Jelenleg nincs bajnok.',
	'JV_POKER_NO_LIMIT'					=> 'Nincs limit',
	'JV_POKER_NO_PERMISSION'			=> 'Nincs jogosultságod a póker használatához.',
	'JV_POKER_NO_ROOM'					=> 'Jelenleg nincs pókerszoba',
	'JV_POKER_NO_ROOM_ID'				=> 'A kért szoba azonosítója nem létezik!',
	'JV_POKER_NO_STATS_DATA'			=> 'Nincs elérhető statisztikai adat.',
	'JV_POKER_NO_STYLE'					=> 'A szobához használt megjelenés nem létezik!',
	'JV_POKER_NO_USER_STATS'			=> 'A keresett felhasználóról nincs elérhető statisztikai adat.',
	'JV_POKER_NWON'						=> [
		1								=> 'Nyert parti: <strong>%s</strong>',
		2								=> 'Nyert partik: <strong>%s</strong>'
	],
	'JV_POKER_PARTICIPANTS'				=> 'Résztvevők',
	'JV_POKER_PLACE'					=> '%s. helyezett',
	'JV_POKER_PLAYED'					=> 'Játszott',
	'JV_POKER_PLAYED_NPARTY'			=> [
		1								=> 'Játszott parti: <strong>%s</strong>',
		2								=> 'Játszott partik: <strong>%s</strong>'
	],
	'JV_POKER_PLAYED_VPARTY'			=> [
		1								=> 'Játszott verseny: <strong>%s</strong>',
		2								=> 'Játszott versenyek: <strong>%s</strong>'
	],
	'JV_POKER_PLAYING'					=> 'Játszanak',
	'JV_POKER_PLAYING_ROOMS_USER'		=> 'Jelenleg %s szoba van használatban, a szobákban összesen %s felhasználó tartózkodik.',
	'JV_POKER_PLAYING_ROOMS_USERS'		=> 'Jelenleg %s szoba van használatban, a szobákban összesen %s felhasználó tartózkodik.',
	'JV_POKER_PLAYING_ROOM_USER'		=> 'Jelenleg %s szoba van használatban, a szobában összesen %s felhasználó tartózkodik.',
	'JV_POKER_PLAYING_ROOM_USERS'		=> 'Jelenleg %s szoba van használatban, a szobában összesen %s felhasználó tartózkodik.',
	'JV_POKER_PLAYING_TIMES'			=> 'Játszásra fordított idő: <strong>%s</strong>',
	'JV_POKER_POINTS_BALANCE'			=> '%s egyenleged: <strong>%s</strong>',
	'JV_POKER_POINTS_EXCHANGE_EXPLAIN'	=> 'Add meg azt az összeget amelyet %s-ra szeretnél váltani.',
	'JV_POKER_POINTS_EXCHENGE_SUCCESS'	=> '%1$s %2$s sikeresen átváltásra került.',
	'JV_POKER_PRACTICE'					=> 'Gyakorló',
	'JV_POKER_PRACTICE_ROOM'			=> 'Gyakorló szoba',
	'JV_POKER_PRACTICE_ROOMS'			=> 'Gyakorló szobák',
	'JV_POKER_PRIVATE'					=> 'Privát',
	'JV_POKER_PRIZE'					=> 'Nyeremény',
	'JV_POKER_RANK'						=> 'Rang',
	'JV_POKER_RETURN_EXCHENGE_PAGE'		=> '%sVissza a zseton váltó oldalra.%s',
	'JV_POKER_RETURN_INDEX_PAGE'		=> '%sVissza a póker főoldalára.%s',
	'JV_POKER_ROOM'						=> 'Póker szoba',
	'JV_POKER_ROOMS_VIEWING'			=> 'Póker szobák megtekintése',
	'JV_POKER_ROOM_DISABLED'			=> 'A póker jelenleg ki van kapcsolva.',
	'JV_POKER_ROOM_NAME'				=> 'Név',
	'JV_POKER_ROOM_PLAYERS'				=> 'Szék/Játékos',
	'JV_POKER_ROOM_PLAYING_USERS'		=> 'A <strong>%s</strong> szobában játszanak: %s',
	'JV_POKER_ROOM_PLAY_USERS'			=> '%2$s / %1$s',
	'JV_POKER_ROOM_STATUS'				=> 'Státusz',
	'JV_POKER_ROOM_TYPE'				=> 'Típus',
	'JV_POKER_ROOM_VIEWING'				=> '%s póker szoba megtekintése',
	'JV_POKER_ROOM_WAIT_USERS'			=> 'A <strong>%s</strong> szobában várakozik: %s',
	'JV_POKER_RULES'					=> 'Póker szabályzat',
	'JV_POKER_SELECT_EXCHANGE_TYPE'		=> 'Válaszd ki mit szeretnél váltani',
	'JV_POKER_SHORTEST_PLAYTIME'		=> 'Legrövidebb játszási idő',
	'JV_POKER_SHOUT_ARCHIVE'			=> 'Üzenőfal archívum',
	'JV_POKER_SHOUT_ARCHIVE_NO_MSG'		=> 'Jelenleg nincs megjeleníthető üzenet.',
	'JV_POKER_SHOUT_ROOM_ARCHIVE'		=> 'Póker %s szoba üzenőfal archívuma',
	'JV_POKER_SMALL_BIG_BLIND'			=> 'Kis/nagyvak',
	'JV_POKER_STAT'						=> 'Statisztikák',
	'JV_POKER_STATS'					=> 'Póker statisztikák',
	'JV_POKER_STATS_ALLINS'				=> [
		1								=> 'All-in összesen: <strong>%s</strong>',
		2								=> 'All-in összesen: <strong>%s</strong>'
	],
	'JV_POKER_STATS_CALLS'				=> [
		1								=> 'Megadott hívás összesen: <strong>%s</strong>',
		2								=> 'Megadott hívások összesen: <strong>%s</strong>'
	],
	'JV_POKER_STATS_CHECKS'				=> [
		1								=> 'Passzolás összesen: <strong>%s</strong>',
		2								=> 'Passzolások összesen: <strong>%s</strong>'
	],
	'JV_POKER_STATS_FOLDS'				=> [
		1								=> 'Bedobás összesen: <strong>%s</strong>',
		2								=> 'Bedobások összesen: <strong>%s</strong>'
	],
	'JV_POKER_STATS_NO_PERMISSION'		=> 'Nincs jogosultságod a póker statisztikák megtekintéséhez.',
	'JV_POKER_STATS_PLAYS'				=> [
		1								=> '%s partit játszott',
		2								=> '%s partit játszott'
	],
	'JV_POKER_STATS_PLAYS_TOURS'		=> [
		1								=> '%s versenyt játszott',
		2								=> '%s versenyt játszott'
	],
	'JV_POKER_STATS_RAISES'				=> [
		1								=> 'Emelés száma összesen: <strong>%s</strong>',
		2								=> 'Emelések száma összesen: <strong>%s</strong>'
	],
	'JV_POKER_STATS_VIEWING'			=> 'Póker statisztikák megtekintése',
	'JV_POKER_STATS_WON_TOURS'			=> [
		1								=> '%s versenyt nyert',
		2								=> '%s versenyt nyert'
	],
	'JV_POKER_TOTAL_DATA'				=> 'Összesen <strong>%s</strong> felhasználó játszott eddig, összesen <strong>%s</strong> partit játszottak le.<br>Játékra fordított idő összesen: <strong>%s</strong>',
	'JV_POKER_TOTAL_DATA_CHIPS'			=> 'Összes zseton: <strong>%s</strong>',
	'JV_POKER_TOTAL_MSG'				=> 'Összes üzenet %s',
	'JV_POKER_TOTAL_TOURS'				=> 'Összes verseny (%s)',
	'JV_POKER_TOURNAMENT'				=> 'Verseny',
	'JV_POKER_TOURNAMENT_ROOM'			=> 'Verseny szoba',
	'JV_POKER_TOURNAMENT_ROOMS'			=> 'Verseny szobák',
	'JV_POKER_TOUR_END'					=> 'Befejezés',
	'JV_POKER_TOUR_LEADERS'				=> 'Póker verseny bajnokai',
	'JV_POKER_TOUR_START'				=> 'Kezdés',
	'JV_POKER_TOUR_STATS'				=> 'Verseny statisztikák',
	'JV_POKER_TOUR_STATS_VIEWING'		=> 'Póker verseny statisztikák megtekintése',
	'JV_POKER_UNKNOWN'					=> 'Ismeretlen',
	'JV_POKER_UNLOCKED'					=> 'Nyitott',
	'JV_POKER_USER_INFO'				=> 'Felhasználó információ',
	'JV_POKER_USER_STAT'				=> 'Felhasználói statisztikák',
	'JV_POKER_USER_STATS'				=> '%s póker statisztika',
	'JV_POKER_USER_STATS_VIEWING'		=> '%s póker statisztikájának megtekintése',
	'JV_POKER_VIEW_MEMBER_PROFILE'		=> 'Felhasználó profiljának megtekintése',
	'JV_POKER_VIEW_STAT'				=> 'Póker statisztikák megtekintése',
	'JV_POKER_VIEW_STATS'				=> 'Statisztikák megtekintése',
	'JV_POKER_VIEW_USER_STATS'			=> 'Felhasználó statisztikájának megtekintése',
	'JV_POKER_VLOSE'					=> [
		1								=> 'Vesztett verseny: <strong>%s</strong>',
		2								=> 'Vesztett versenyek: <strong>%s</strong>'
	],
	'JV_POKER_VWON'						=> [
		1								=> 'Nyert verseny: <strong>%s</strong>',
		2								=> 'Nyert versenyek: <strong>%s</strong>'
	],
	'JV_POKER_WAITING'					=> 'Várakozás',
	'JV_POKER_WELCOME'					=> 'Üdvözlünk %s, a pókerteremben!',
	'JV_POKER_WHO_IS_PLAYING'			=> 'Kik játszanak a pókerszobákban?',
	'JV_POKER_WINNER'					=> 'Győztes',
	'JV_POKER_WONS_RATE'				=> 'Nyerési arány: <strong>%s%%</strong>',
	'JV_POKER_WON_PARTY'				=> [
		1								=> 'Megnyert póker parti',
		2								=> 'Megnyert póker partik'
	],
	'JV_POKER_WON_TOUR'					=> [
		1								=> 'Megnyert póker verseny',
		2								=> 'Megnyert póker versenyek'
	],
]);
