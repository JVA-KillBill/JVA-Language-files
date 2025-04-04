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
	'ARCADE_EXT_B3PORTAL_BEST_RATED_GAMES_TITLE'				=> 'Játékterem - Legjobbra értékelt játékok',
	'ARCADE_EXT_B3PORTAL_CHALLENGE_LEADERS'						=> 'Játéktermi kihívás bajnokai',
	'ARCADE_EXT_B3PORTAL_CHALLENGE_LEAST_PLAYED_USERS_TITLE'	=> 'Játéktermi kihívás - Legkevesebbet játszott felhasználók',
	'ARCADE_EXT_B3PORTAL_CHALLENGE_LEAST_POPULAR_GAMES_TITLE'	=> 'Játéktermi kihívás - Legkevesebbet játszott játékok',
	'ARCADE_EXT_B3PORTAL_CHALLENGE_MOST_PLAYED_USERS_TITLE'		=> 'Játéktermi kihívás - Legtöbbet játszott felhasználók',
	'ARCADE_EXT_B3PORTAL_CHALLENGE_MOST_POPULAR_GAMES_TITLE'	=> 'Játéktermi kihívás - Legtöbbet játszott játékok',
	'ARCADE_EXT_B3PORTAL_DISPLAYED_DATA'						=> 'Megjelenítendő adatok',
	'ARCADE_EXT_B3PORTAL_HIGH_JACKPOT_TITLE'					=> 'Játékterem - Legmagasabb főnyeremények',
	'ARCADE_EXT_B3PORTAL_LATEST_HIGHSCORES'						=> 'Játékterem - Legújabb rekordok',
	'ARCADE_EXT_B3PORTAL_LEADERS'								=> 'Játékterem bajnokai',
	'ARCADE_EXT_B3PORTAL_LEAST_PLAYED_USERS_TITLE'				=> 'Játékterem - Legkevesebbet játszott felhasználók',
	'ARCADE_EXT_B3PORTAL_LEAST_POPULAR_GAMES_TITLE'				=> 'Játékterem - Legkevesebbet játszott játékok',
	'ARCADE_EXT_B3PORTAL_LONGEST_HELD_SCORES'					=> 'Játékterem - Legtovább megőrzött rekordok',
	'ARCADE_EXT_B3PORTAL_LONGEST_PLAYTIME_TITLE'				=> 'Játékterem - Leghosszabb játszási idő',
	'ARCADE_EXT_B3PORTAL_LOW_JACKPOT_TITLE'						=> 'Játékterem - Legkisebb főnyeremények',
	'ARCADE_EXT_B3PORTAL_MOST_PLAYED_USERS_TITLE'				=> 'Játékterem - Legtöbbet játszott felhasználók',
	'ARCADE_EXT_B3PORTAL_MOST_POPULAR_GAMES_TITLE'				=> 'Játékterem - Legtöbbet játszott játékok',
	'ARCADE_EXT_B3PORTAL_NEWEST_GAMES_TITLE'					=> 'Játékterem - Legújabb játékok',
	'ARCADE_EXT_B3PORTAL_ONLINE'								=> 'Kik játszanak a játékteremben?',
	'ARCADE_EXT_B3PORTAL_RANDOM_GAMES_TITLE'					=> 'Játékterem - Véletlenszerű játékok',
	'ARCADE_EXT_B3PORTAL_SHORTEST_PLAYTIME_TITLE'				=> 'Játékterem - Legrövidebb játszási idő',
	'ARCADE_EXT_B3PORTAL_SUPER_CHAMPIONS_TITLE'					=> 'Játékterem - Játékok szuperbajnokai',
	'ARCADE_EXT_B3PORTAL_TOURNAMENT_LEADERS'					=> 'Játéktermi verseny bajnokai',
	'ARCADE_EXT_B3PORTAL_TOUR_LEAST_PLAYED_USERS_TITLE'			=> 'Játéktermi verseny - Legkevesebbet játszott felhasználók',
	'ARCADE_EXT_B3PORTAL_TOUR_LEAST_POPULAR_GAMES_TITLE'		=> 'Játéktermi verseny - Legkevesebbet játszott játékok',
	'ARCADE_EXT_B3PORTAL_TOUR_MOST_PLAYED_USERS_TITLE'			=> 'Játéktermi verseny - Legtöbbet játszott felhasználók',
	'ARCADE_EXT_B3PORTAL_TOUR_MOST_POPULAR_GAMES_TITLE'			=> 'Játéktermi verseny - Legtöbbet játszott játékok',
]);
