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
	'JV_POKER'							=> 'Poker',
	'JV_POKER_ALL'						=> 'Alles',
	'JV_POKER_AMOUNT'					=> 'Bedrag',
	'JV_POKER_AMOUNT_BALANCE_ERROR'		=> 'Het bedrag dat je opgeeft, is hoger dan je saldo.',
	'JV_POKER_AMOUNT_TOO_SMALL_ERROR'	=> 'Het opgegeven bedrag is te laag.',
	'JV_POKER_ARCHIVE_REFRESH'			=> 'Archief vernieuwen',
	'JV_POKER_BALANCE'					=> 'Chips: <strong class="jv_poker_balance">%s</strong>',
	'JV_POKER_BUY_IN'					=> 'Buy-in',
	'JV_POKER_CHAIR'					=> 'Stoel',
	'JV_POKER_CHIPS'					=> 'Chips',
	'JV_POKER_CHIPS_BALANCE'			=> 'Chips saldo: <strong class="jv_poker_balance">%s</strong>',
	'JV_POKER_CHIPS_EXCHANGE'			=> 'Chips omwisselen',
	'JV_POKER_CHIPS_EXCHANGE_EXPLAIN'	=> 'Voer het bedrag in dat je omwisselt voor chips.',
	'JV_POKER_CHIPS_EXCHENGE_COST'		=> 'Ook werden de kosten van %s in mindering gebracht op je %s saldo.',
	'JV_POKER_CHIPS_EXCHENGE_SUCCESS'	=> '%s chips zijn met succes uitgewisseld.',
	'JV_POKER_CHIPS_FORMAT'				=> 'KMBT',
	'JV_POKER_CHIPS_PF'					=> 'chips: %s',
	'JV_POKER_COMMENT'					=> 'Commentaar',
	'JV_POKER_DAILY_GIFT'				=> 'Poker dagelijks geschenk',
	'JV_POKER_ENTRY_FEE'				=> 'Buy-in',
	'JV_POKER_EXCHANGE_COST'			=> 'Wisselkoerskosten: %s%%.',
	'JV_POKER_EXCHANGE_COST_ERROR'		=> 'Het opgegeven bedrag en de bijbehorende kosten zijn hoger dan je saldo. Het maximale omwisselbedrag is %s.',
	'JV_POKER_EXCHANGE_TYPE_CHIPS'		=> '%s » chips',
	'JV_POKER_EXCHANGE_TYPE_POINTS'		=> 'Chips » %s',
	'JV_POKER_FAQ'						=> 'Poker gids',
	'JV_POKER_FAQ_VIEWING'				=> 'Bekijkt poker gids',
	'JV_POKER_FIX_LIMIT'				=> 'Vaste limiet',
	'JV_POKER_GAME_INFO'				=> 'Spel informatie',
	'JV_POKER_GAME_TIME'				=> 'Spel tijd',
	'JV_POKER_GET_IT'					=> 'Krijg het',
	'JV_POKER_HI_JP_WIN'				=> '{color}%s{/color} net gewonnen {color}%d{/color} chips van de JackPot.',
	'JV_POKER_HI_TOUR_START'			=> 'Aandacht! Het pokertoernooi begint over minder dan %s minuten!',
	'JV_POKER_INDEX'					=> 'Poker index',
	'JV_POKER_KEYWORDS'					=> 'phpBB, holdem, poker',
	'JV_POKER_LARGEST_POT_WON'			=> 'De grootste Pot wint: <strong>%s</strong>',
	'JV_POKER_LAST_PLAY'				=> 'Laatste spel: <strong>%s</strong>',
	'JV_POKER_LEADERS'					=> 'Poker leiders',
	'JV_POKER_LEARNER'					=> 'Leerling',
	'JV_POKER_LEARNER_ROOM'				=> 'Leerkamer',
	'JV_POKER_LEARNER_ROOMS'			=> 'Leerkamers',
	'JV_POKER_LEAST_PLAYED_USERS'		=> 'Minst spelende gebruikers',
	'JV_POKER_LIMIT'					=> 'Limiet',
	'JV_POKER_LOBBY'					=> 'Lobby',
	'JV_POKER_LOCKED'					=> 'Gesloten',
	'JV_POKER_LONGEST_PLAYTIME'			=> 'Langste speeltijd',
	'JV_POKER_MOST_PLAYED_USERS'		=> 'Meest spelende gebruikers',
	'JV_POKER_MOVETIME'					=> 'Verplaats tijd',
	'JV_POKER_MSG_DELETE'				=> 'Bericht verwijderd',
	'JV_POKER_MSG_DELETE_NO_PERMISSION'	=> 'Je hebt geen toestemming om dit bericht te verwijderen.',
	'JV_POKER_MSG_DELETE_SUCCESS'		=> 'Bericht succesvol verwijderd.',
	'JV_POKER_NLOSE'					=> [
		1								=> 'Verloren spel: <strong>%s</strong>',
		2								=> 'Verloren spellen: <strong>%s</strong>'
	],
	'JV_POKER_NORMAL'					=> 'Normaal',
	'JV_POKER_NORMAL_ROOM'				=> 'Normale kamer',
	'JV_POKER_NORMAL_ROOMS'				=> 'Normale kamers',
	'JV_POKER_NOT_FOUND_ROOM'			=> 'De gevraagde kamer is niet gevonden!',
	'JV_POKER_NOT_PLAYING'				=> 'Niet spelen',
	'JV_POKER_NO_CHAMPION'				=> 'Er is momenteel geen kampioen.',
	'JV_POKER_NO_LIMIT'					=> 'Geen limiet',
	'JV_POKER_NO_PERMISSION'			=> 'Je hebt geen toestemming om poker te gebruiken.',
	'JV_POKER_NO_ROOM'					=> 'Er is momenteel geen pokerkamer',
	'JV_POKER_NO_ROOM_ID'				=> 'Het gevraagde kamer-ID bestaat niet!',
	'JV_POKER_NO_STATS_DATA'			=> 'Er zijn geen statistische gegevens beschikbaar.',
	'JV_POKER_NO_STYLE'					=> 'De stijl die in deze kamer wordt gebruikt, bestaat niet!',
	'JV_POKER_NO_USER_STATS'			=> 'Er zijn geen statistieken beschikbaar voor de gebruiker die je zoekt.',
	'JV_POKER_NWON'						=> [
		1								=> 'Gewonnen spel: <strong>%s</strong>',
		2								=> 'Gewonnenon spellen: <strong>%s</strong>'
	],
	'JV_POKER_PARTICIPANTS'				=> 'Deelnemers',
	'JV_POKER_PLACE'					=> '%s. plaats',
	'JV_POKER_PLAYED'					=> 'Gespeeld',
	'JV_POKER_PLAYED_NPARTY'			=> [
		1								=> 'Gespeeld in spel: <strong>%s</strong>',
		2								=> 'Gespeeld in spellen: <strong>%s</strong>'
	],
	'JV_POKER_PLAYED_VPARTY'			=> [
		1								=> 'Gespeeld in toernooi: <strong>%s</strong>',
		2								=> 'Gespeeld in toernooien: <strong>%s</strong>'
	],
	'JV_POKER_PLAYING'					=> 'Spelen',
	'JV_POKER_PLAYING_ROOMS_USER'		=> 'Er zijn momenteel %s kamers in gebruik, met een totaal van %s gebruiker.',
	'JV_POKER_PLAYING_ROOMS_USERS'		=> 'Er zijn momenteel %s kamers in gebruik, met een totaal van %s gebruikers.',
	'JV_POKER_PLAYING_ROOM_USER'		=> 'Er is momenteel %s kamer in gebruik, met een totaal van %s gebruiker.',
	'JV_POKER_PLAYING_ROOM_USERS'		=> 'Er is momenteel %s kamer in gebruik, met een totaal van %s gebruikers.',
	'JV_POKER_PLAYING_TIMES'			=> 'Totale speel tijd: <strong>%s</strong>',
	'JV_POKER_POINTS_BALANCE'			=> '%s saldo: <strong>%s</strong>',
	'JV_POKER_POINTS_EXCHANGE_EXPLAIN'	=> 'Voer het bedrag in dat je wil ruilen %s.',
	'JV_POKER_POINTS_EXCHENGE_SUCCESS'	=> '%1$s %2$s zijn met succes uitgewisseld.',
	'JV_POKER_POINTS_SYSTEM_DISABLED'	=> 'De functie Puntensysteem is uitgeschakeld!',
	'JV_POKER_PRACTICE'					=> 'Praktijk',
	'JV_POKER_PRACTICE_ROOM'			=> 'Praktijk kamer',
	'JV_POKER_PRACTICE_ROOMS'			=> 'Praktijk kamers',
	'JV_POKER_PRIVATE'					=> 'Privé',
	'JV_POKER_PRIZE'					=> 'Prijs',
	'JV_POKER_RANK'						=> 'Rang',
	'JV_POKER_RETURN_EXCHENGE_PAGE'		=> '%sTerug naar de chips ruil pagina.%s',
	'JV_POKER_RETURN_INDEX_PAGE'		=> '%sTerug naar de hoofdpagina van poker.%s',
	'JV_POKER_ROOM'						=> 'Poker kamer',
	'JV_POKER_ROOMS_VIEWING'			=> 'Poker kamers bekijken',
	'JV_POKER_ROOM_DISABLED'			=> 'Poker is momenteel uitgeschakeld.',
	'JV_POKER_ROOM_NAME'				=> 'Naam',
	'JV_POKER_ROOM_PLAYERS'				=> 'Spelers/Stoelen',
	'JV_POKER_ROOM_PLAYING_USERS'		=> 'In de kamer <strong>%s</strong> spelend: %s',
	'JV_POKER_ROOM_PLAY_USERS'			=> '%1$s / %2$s',
	'JV_POKER_ROOM_STATUS'				=> 'Status',
	'JV_POKER_ROOM_TYPE'				=> 'Type',
	'JV_POKER_ROOM_VIEWING'				=> 'Bekijk %s pokerkamer',
	'JV_POKER_ROOM_WAIT_USERS'			=> 'In de kamer <strong>%s</strong> wachtend: %s',
	'JV_POKER_RULES'					=> 'Poker regels',
	'JV_POKER_SELECT_EXCHANGE_TYPE'		=> 'Selecteer wat je wilt ruilen',
	'JV_POKER_SHORTEST_PLAYTIME'		=> 'Kortste speeltijd',
	'JV_POKER_SHOUT_ARCHIVE'			=> 'Shoutbox archief',
	'JV_POKER_SHOUT_ARCHIVE_NO_MSG'		=> 'Er zijn momenteel geen berichten om weer te geven.',
	'JV_POKER_SHOUT_ROOM_ARCHIVE'		=> 'Poker %s kamer shoutbox archief',
	'JV_POKER_SMALL_BIG_BLIND'			=> 'Small/big blind',
	'JV_POKER_STAT'						=> 'Statistieken',
	'JV_POKER_STATS'					=> 'Poker statistieken',
	'JV_POKER_STATS_ALLINS'				=> [
		1								=> 'Totaal all-in aantal: <strong>%s</strong>',
		2								=> 'Totaal all-in aantal: <strong>%s</strong>'
	],
	'JV_POKER_STATS_CALLS'				=> [
		1								=> 'Totaal call aantal: <strong>%s</strong>',
		2								=> 'Totaal calls aantal: <strong>%s</strong>'
	],
	'JV_POKER_STATS_CHECKS'				=> [
		1								=> 'Totaal check aantal: <strong>%s</strong>',
		2								=> 'Totaal checks aantal: <strong>%s</strong>'
	],
	'JV_POKER_STATS_FOLDS'				=> [
		1								=> 'Totaal fold aantal: <strong>%s</strong>',
		2								=> 'Totaal folds aantal: <strong>%s</strong>'
	],
	'JV_POKER_STATS_NO_PERMISSION'		=> 'Je hebt geen toestemming om pokerstatistieken te bekijken.',
	'JV_POKER_STATS_PLAYS'				=> [
		1								=> 'speelde %s partij.',
		2								=> 'speelde %s partijen.'
	],
	'JV_POKER_STATS_PLAYS_TOURS'		=> [
		1								=> 'speelde %s toernooi.',
		2								=> 'speelde %s toernooien.'
	],
	'JV_POKER_STATS_RAISES'				=> [
		1								=> 'Totaal raise aantal: <strong>%s</strong>',
		2								=> 'Totaal raise aantal: <strong>%s</strong>'
	],
	'JV_POKER_STATS_VIEWING'			=> 'Bekijkt poker statistieken',
	'JV_POKER_STATS_WON_TOURS'			=> [
		1								=> 'won %s toernooi',
		2								=> 'won %s toernooien'
	],
	'JV_POKER_TOTAL_DATA'				=> 'Een totaal van <strong>%s</strong> gebruikers heeft een totaal van <strong>%s</strong> handen gespeeld.<br>Totale speeltijd: <strong>%s</strong>',
	'JV_POKER_TOTAL_MSG'				=> 'Totaal aantal berichten %s',
	'JV_POKER_TOTAL_TOURS'				=> 'Totaal aantal toernooien (%s)',
	'JV_POKER_TOURNAMENT'				=> 'toernooi',
	'JV_POKER_TOURNAMENT_ROOM'			=> 'toernooi kamer',
	'JV_POKER_TOURNAMENT_ROOMS'			=> 'toernooi kamers',
	'JV_POKER_TOUR_END'					=> 'Einde',
	'JV_POKER_TOUR_LEADERS'				=> 'Poker toernooi leiders',
	'JV_POKER_TOUR_START'				=> 'Start',
	'JV_POKER_TOUR_STATS'				=> 'Toernooi statistieken',
	'JV_POKER_TOUR_STATS_VIEWING'		=> 'Statistieken van pokertoernooien bekijken',
	'JV_POKER_UNKNOWN'					=> 'Onbekend',
	'JV_POKER_UNLOCKED'					=> 'Ontgrendeld',
	'JV_POKER_USER_INFO'				=> 'Gebruikersinformatie',
	'JV_POKER_USER_STAT'				=> 'Gebruikersstatistieken',
	'JV_POKER_USER_STATS'				=> '%s poker statistieken',
	'JV_POKER_USER_STATS_VIEWING'		=> 'Bekijk %s poker statistieken',
	'JV_POKER_VIEW_MEMBER_PROFILE'		=> 'Bekijk gebruikersprofiel',
	'JV_POKER_VIEW_STAT'				=> 'Bekijk poker statistieken',
	'JV_POKER_VIEW_STATS'				=> 'Bekijk statistieken',
	'JV_POKER_VIEW_USER_STATS'			=> 'Gebruikersstatistieken bekijken',
	'JV_POKER_VLOSE'					=> [
		1								=> 'Verloren toernooi: <strong>%s</strong>',
		2								=> 'Verloren toernooien: <strong>%s</strong>'
	],
	'JV_POKER_VWON'						=> [
		1								=> 'Gewonnen toernooi: <strong>%s</strong>',
		2								=> 'Gewonnen toernooien: <strong>%s</strong>'
	],
	'JV_POKER_WAITING'					=> 'Wachten',
	'JV_POKER_WELCOME'					=> 'Welkom bij de pokerkamer %s!',
	'JV_POKER_WHO_IS_PLAYING'			=> 'Wie speelt er in de pokerkamers?',
	'JV_POKER_WINNER'					=> 'Winnaar',
	'JV_POKER_WONS_RATE'				=> 'Winstverhouding: <strong>%s%%</strong>',
	'JV_POKER_WON_PARTY'				=> [
		1								=> 'Won poker partij',
		2								=> 'Won poker partijen'
	],
	'JV_POKER_WON_TOUR'					=> [
		1								=> 'Won poker tournooi',
		2								=> 'Won poker tournooien'
	],
]);
