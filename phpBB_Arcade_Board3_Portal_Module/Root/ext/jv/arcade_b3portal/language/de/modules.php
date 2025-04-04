<?php
/**
*
* @package phpBB Arcade - Board3 portal arcade modules
* @version $Id: modules.php 2379 2021-01-27 13:09:11Z KillBill $
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

//These are used through out the arcade
$lang = array_merge($lang, [
	'ARCADE_EXT_B3PORTAL_BEST_RATED_GAMES_TITLE'				=> 'Spielhalle - Bestbewertete Spiele',
	'ARCADE_EXT_B3PORTAL_CHALLENGE_LEADERS'						=> 'Herausforderung - Meister',
	'ARCADE_EXT_B3PORTAL_CHALLENGE_LEAST_PLAYED_USERS_TITLE'	=> 'Herausforderung - Inaktivste Spieler',
	'ARCADE_EXT_B3PORTAL_CHALLENGE_LEAST_POPULAR_GAMES_TITLE'	=> 'Herausforderung - Wenig gespielte Spiele',
	'ARCADE_EXT_B3PORTAL_CHALLENGE_MOST_PLAYED_USERS_TITLE'		=> 'Herausforderung - Aktivste Spieler',
	'ARCADE_EXT_B3PORTAL_CHALLENGE_MOST_POPULAR_GAMES_TITLE'	=> 'Herausforderung - Beliebteste Spiele',
	'ARCADE_EXT_B3PORTAL_DISPLAYED_DATA'						=> 'Anzuzeigende Daten',
	'ARCADE_EXT_B3PORTAL_HIGH_JACKPOT_TITLE'					=> 'Spielhalle - Höchster Jackpot',
	'ARCADE_EXT_B3PORTAL_LATEST_HIGHSCORES'						=> 'Spielhalle - Letzte Rekorde',
	'ARCADE_EXT_B3PORTAL_LEADERS'								=> 'Topspieler',
	'ARCADE_EXT_B3PORTAL_LEAST_PLAYED_USERS_TITLE'				=> 'Spielhalle - Inaktivste Spieler',
	'ARCADE_EXT_B3PORTAL_LEAST_POPULAR_GAMES_TITLE'				=> 'Spielhalle - Wenig gespielte Spiele',
	'ARCADE_EXT_B3PORTAL_LONGEST_HELD_SCORES'					=> 'Spielhalle - Am längsten gehaltene Rekorde',
	'ARCADE_EXT_B3PORTAL_LONGEST_PLAYTIME_TITLE'				=> 'Spielhalle - Längste Spieldauer',
	'ARCADE_EXT_B3PORTAL_LOW_JACKPOT_TITLE'						=> 'Spielhalle - Niedrigster Jackpot',
	'ARCADE_EXT_B3PORTAL_MOST_PLAYED_USERS_TITLE'				=> 'Spielhalle - Aktivste Spieler',
	'ARCADE_EXT_B3PORTAL_MOST_POPULAR_GAMES_TITLE'				=> 'Spielhalle - Beliebteste Spiele',
	'ARCADE_EXT_B3PORTAL_NEWEST_GAMES_TITLE'					=> 'Spielhalle - Neueste Spiele',
	'ARCADE_EXT_B3PORTAL_ONLINE'								=> 'Wer spielt in der Spielhalle?',
	'ARCADE_EXT_B3PORTAL_RANDOM_GAMES_TITLE'					=> 'Spielhalle - Zufällige Spiele',
	'ARCADE_EXT_B3PORTAL_SHORTEST_PLAYTIME_TITLE'				=> 'Spielhalle - Kürzeste Spieldauer',
	'ARCADE_EXT_B3PORTAL_SUPER_CHAMPIONS_TITLE'					=> 'Spielhalle - Superchampions',
	'ARCADE_EXT_B3PORTAL_TOURNAMENT_LEADERS'					=> 'Spielhallenturnier - Meister',
	'ARCADE_EXT_B3PORTAL_TOUR_LEAST_PLAYED_USERS_TITLE'			=> 'Spielhallenturnier - Inaktivste Spieler',
	'ARCADE_EXT_B3PORTAL_TOUR_LEAST_POPULAR_GAMES_TITLE'		=> 'Spielhallenturnier - Wenig gespielte Spiele',
	'ARCADE_EXT_B3PORTAL_TOUR_MOST_PLAYED_USERS_TITLE'			=> 'Spielhallenturnier - Aktivste Spieler',
	'ARCADE_EXT_B3PORTAL_TOUR_MOST_POPULAR_GAMES_TITLE'			=> 'Spielhallenturnier - Beliebteste Spiele',
]);
