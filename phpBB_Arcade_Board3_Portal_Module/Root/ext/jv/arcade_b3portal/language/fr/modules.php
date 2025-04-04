<?php
/**
*
* @package phpBB Arcade - Board3 portal arcade modules
* @version $Id: acp_settings.php 2379 2021-01-27 13:09:11Z KillBill $
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
	'ARCADE_EXT_B3PORTAL_BEST_RATED_GAMES_TITLE'				=> 'Arcade - Jeux les mieux notés',
	'ARCADE_EXT_B3PORTAL_CHALLENGE_LEADERS'						=> 'Défi Arcade - Champions',
	'ARCADE_EXT_B3PORTAL_CHALLENGE_LEAST_PLAYED_USERS_TITLE'	=> 'Défi Arcade - Utilisateurs qui joues le moins',
	'ARCADE_EXT_B3PORTAL_CHALLENGE_LEAST_POPULAR_GAMES_TITLE'	=> 'Défi Arcade - Jeux les moins populaires',
	'ARCADE_EXT_B3PORTAL_CHALLENGE_MOST_PLAYED_USERS_TITLE'		=> 'Défi Arcade - Utilisateurs qui jouent le plus',
	'ARCADE_EXT_B3PORTAL_CHALLENGE_MOST_POPULAR_GAMES_TITLE'	=> 'Défi Arcade - Jeux les plus populaires',
	'ARCADE_EXT_B3PORTAL_DISPLAYED_DATA'						=> 'Données affichées',
	'ARCADE_EXT_B3PORTAL_HIGH_JACKPOT_TITLE'					=> 'Arcade - Gros jackpot',
	'ARCADE_EXT_B3PORTAL_LATEST_HIGHSCORES'						=> 'Arcade - Derniers meilleurs scores',
	'ARCADE_EXT_B3PORTAL_LEADERS'								=> 'Arcade - Champions d’arcade',
	'ARCADE_EXT_B3PORTAL_LEAST_PLAYED_USERS_TITLE'				=> 'Arcade - Utilisateurs qui jouent le moins',
	'ARCADE_EXT_B3PORTAL_LEAST_POPULAR_GAMES_TITLE'				=> 'Arcade - Jeux les moins populaires',
	'ARCADE_EXT_B3PORTAL_LONGEST_HELD_SCORES'					=> 'Arcade - Les meilleurs scores les plus longs retenus',
	'ARCADE_EXT_B3PORTAL_LONGEST_PLAYTIME_TITLE'				=> 'Arcade - Le plus long temps de jeu',
	'ARCADE_EXT_B3PORTAL_LOW_JACKPOT_TITLE'						=> 'Arcade - jackpot bas',
	'ARCADE_EXT_B3PORTAL_MOST_PLAYED_USERS_TITLE'				=> 'Arcade - Utilisateurs qui jouent le plus',
	'ARCADE_EXT_B3PORTAL_MOST_POPULAR_GAMES_TITLE'				=> 'Arcade - Jeux les plus populaires',
	'ARCADE_EXT_B3PORTAL_NEWEST_GAMES_TITLE'					=> 'Arcade - Derniers jeux',
	'ARCADE_EXT_B3PORTAL_ONLINE'								=> 'Qui joue dans l’arcade?',
	'ARCADE_EXT_B3PORTAL_RANDOM_GAMES_TITLE'					=> 'Arcade - jeux aléatoires',
	'ARCADE_EXT_B3PORTAL_SHORTEST_PLAYTIME_TITLE'				=> 'Arcade - Temps de jeu le plus court',
	'ARCADE_EXT_B3PORTAL_SUPER_CHAMPIONS_TITLE'					=> 'Arcade - Super champions d’arcade',
	'ARCADE_EXT_B3PORTAL_TOURNAMENT_LEADERS'					=> 'Champions de tournois d’arcade',
	'ARCADE_EXT_B3PORTAL_TOUR_LEAST_PLAYED_USERS_TITLE'			=> 'Tournoi d’arcade - Utilisateurs qui jouent le moins',
	'ARCADE_EXT_B3PORTAL_TOUR_LEAST_POPULAR_GAMES_TITLE'		=> 'Tournoi d’arcade - Jeux les moins populaires',
	'ARCADE_EXT_B3PORTAL_TOUR_MOST_PLAYED_USERS_TITLE'			=> 'Tournoi d’arcade - Utilisateurs qui jouent le plus',
	'ARCADE_EXT_B3PORTAL_TOUR_MOST_POPULAR_GAMES_TITLE'			=> 'Tournoi d’arcade - Jeux les plus populaires',
]);
