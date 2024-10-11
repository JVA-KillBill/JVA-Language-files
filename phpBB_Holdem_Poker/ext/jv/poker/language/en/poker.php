<?php
/**
*
* @package phpBB Holdem Póker
* @version $Id$
* @author 2011-2022 KillBill
* @copyright (c) 2014-2022 https://jv-arcade.com/ - https://jv-arcade.com/contact
* @license https://jv-arcade.com/License.html JVA License v1
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
	'JV_POKER'							=> 'Poker',
	'JV_POKER_ALL'						=> 'All',
	'JV_POKER_AMOUNT'					=> 'Amount',
	'JV_POKER_AMOUNT_BALANCE_ERROR'		=> 'The amount you specify is greater than your balance.',
	'JV_POKER_AMOUNT_TOO_SMALL_ERROR'	=> 'The specified amount is too small.',
	'JV_POKER_ARCHIVE_REFRESH'			=> 'Archive refresh',
	'JV_POKER_BALANCE'					=> 'Chips: <strong>%s</strong>',
	'JV_POKER_BIG_BLIND'				=> 'Big blind',
	'JV_POKER_CHAIRS'					=> 'Chairs',
	'JV_POKER_CHIPS'					=> 'Chips',
	'JV_POKER_CHIPS_BALANCE'			=> 'Chips balance: <strong>%s</strong>',
	'JV_POKER_CHIPS_EXCHANGE'			=> 'Chips exchange',
	'JV_POKER_CHIPS_EXCHANGE_EXPLAIN'	=> 'Enter the amount you exchange to chips.',
	'JV_POKER_CHIPS_EXCHENGE_SUCCESS'	=> '%s chips have been successfully exchange.',
	'JV_POKER_COMMENT'					=> 'Comment',
	'JV_POKER_ENTRY_FEE'				=> 'Entry fee',
	'JV_POKER_EXCHANGE_TYPE_CHIPS'		=> '%s » chips',
	'JV_POKER_EXCHANGE_TYPE_POINTS'		=> 'Chips » %s',
	'JV_POKER_FAQ'						=> 'Poker guide',
	'JV_POKER_FAQ_VIEWING'				=> 'Viewing poker guide',
	'JV_POKER_FILE_LOAD_ERROR'			=> 'Failed to load %s file!',
	'JV_POKER_FIX_LIMIT'				=> 'Fix limit',
	'JV_POKER_GAME_INFO'				=> 'Game information',
	'JV_POKER_GAME_TIME'				=> 'Game time',
	'JV_POKER_INCOME'					=> 'Income: <strong>%s</strong>',
	'JV_POKER_INDEX'					=> 'Poker index',
	'JV_POKER_JACKPOT'					=> 'Jackpot',
	'JV_POKER_JVA_CORE_EXT_DISABLED'	=> 'The “JVA - Core” extension has been disabled!',
	'JV_POKER_KEYWORDS'					=> 'phpBB, holdem, poker',
	'JV_POKER_LAST_PLAY'				=> 'Last play: <strong>%s</strong>',
	'JV_POKER_LEADERS'					=> 'Poker leaders',
	'JV_POKER_LEARNER'					=> 'Learner',
	'JV_POKER_LEARNER_ROOM'				=> 'Learner room',
	'JV_POKER_LEARNER_ROOMS'			=> 'Learner rooms',
	'JV_POKER_LEAST_PLAYED_USERS'		=> 'Least played users',
	'JV_POKER_LIMIT'					=> 'Limit',
	'JV_POKER_LOBBY'					=> 'Lobby',
	'JV_POKER_LOCKED'					=> 'Locked',
	'JV_POKER_LONGEST_PLAYTIME'			=> 'Longest play time',
	'JV_POKER_MOST_PLAYED_USERS'		=> 'Most played users',
	'JV_POKER_MOVETIME'					=> 'Move time',
	'JV_POKER_MSG_DELETE'				=> 'Delete message',
	'JV_POKER_MSG_DELETE_SUCCESS'		=> 'Message deleted successfully.',
	'JV_POKER_NLOSE'					=> array(
		1								=> 'Losed game: <strong>%s</strong>',
		2								=> 'Losed games: <strong>%s</strong>',
	),
	'JV_POKER_NOT_FINISHED'				=> 'Not finished!',
	'JV_POKER_NOT_FOUND_ROOM'			=> 'The requested room was not found!',
	'JV_POKER_NOT_LOGGED'				=> 'You are not logged in to the forum!',
	'JV_POKER_NOT_PLAYING'				=> 'Not playing',
	'JV_POKER_NO_LIMIT'					=> 'No limit',
	'JV_POKER_NO_PERMISSION'			=> 'You do not have permission to use poker.',
	'JV_POKER_NO_PERMISSION_PLAY'		=> 'You do not have permission to play poker.',
	'JV_POKER_NO_PLAYED_USERS'			=> 'Currently you have not played poker yet.',
	'JV_POKER_NO_ROOM'					=> 'There is currently no poker room',
	'JV_POKER_NO_ROOM_ID'				=> 'The requested room ID does not exist!',
	'JV_POKER_NO_STATS_DATA'			=> 'There is no statistical data available.',
	'JV_POKER_NO_STYLE'					=> 'The style used in this room does not exist!',
	'JV_POKER_NO_USER_STATS'			=> 'No statistics are available for the user you are looking for.',
	'JV_POKER_NWON'						=> array(
		1								=> 'Won game: <strong>%s</strong>',
		2								=> 'Won games: <strong>%s</strong>',
	),
	'JV_POKER_PARTICIPANTS'				=> 'Participants',
	'JV_POKER_PLACE'					=> '%s. place',
	'JV_POKER_PLAYED'					=> 'Played',
	'JV_POKER_PLAYED_NPARTY'			=> array(
		1								=> 'Played in game: <strong>%s</strong>',
		2								=> 'Played in games: <strong>%s</strong>',
	),
	'JV_POKER_PLAYED_VPARTY'			=> array(
		1								=> 'Played in Tournament: <strong>%s</strong>',
		2								=> 'Played in Tournaments: <strong>%s</strong>',
	),
	'JV_POKER_PLAYING'					=> 'Playing',
	'JV_POKER_PLAYING_ROOMS_USER'		=> 'There are currently %s rooms in use, with a total of %s user.',
	'JV_POKER_PLAYING_ROOMS_USERS'		=> 'There are currently %s rooms in use, with a total of %s users.',
	'JV_POKER_PLAYING_ROOM_USER'		=> 'There is currently %s room in use, with a total of %s user.',
	'JV_POKER_PLAYING_ROOM_USERS'		=> 'There is currently %s room in use, with a total of %s users.',
	'JV_POKER_PLAYING_TIMES'			=> 'Total time played: <strong>%s</strong>',
	'JV_POKER_POINTS_BALANCE'			=> '%s balance: <strong>%s</strong>',
	'JV_POKER_POINTS_EXCHANGE_EXPLAIN'	=> 'Enter the amount you excange to %s.',
	'JV_POKER_POINTS_EXCHENGE_SUCCESS'	=> '%1$s %2$s have been successfully exchange.',
	'JV_POKER_POINTS_SYSTEM_DISABLED'	=> 'The Points system feature has been disabled!',
	'JV_POKER_PRACTICE'					=> 'Practice',
	'JV_POKER_PRACTICE_ROOM'			=> 'Practice room',
	'JV_POKER_PRACTICE_ROOMS'			=> 'Practice rooms',
	'JV_POKER_PRIZE'					=> 'Prize',
	'JV_POKER_RANK'						=> 'Rank',
	'JV_POKER_RETURN_EXCHENGE_PAGE'		=> '%sBack to the chips exchange page.%s',
	'JV_POKER_RETURN_INDEX_PAGE'		=> '%sBack to the poker main page.%s',
	'JV_POKER_ROOM'						=> 'Poker room',
	'JV_POKER_ROOMS_VIEWING'			=> 'Viewing poker rooms',
	'JV_POKER_ROOM_CLOSE'				=> 'All chairs are occupied in the room. No other users can enter the room. Please wait until at least one chair becomes empty.',
	'JV_POKER_ROOM_CLOSE_TOURNAMENT'	=> 'The tournament has already begun. Additional users are not permitted to enter the room.',
	'JV_POKER_ROOM_DISABLED'			=> 'Poker is currently disabled.',
	'JV_POKER_ROOM_LOCKED'				=> 'This room was locked!',
	'JV_POKER_ROOM_NAME'				=> 'Name',
	'JV_POKER_ROOM_NAME_ACTIVE'			=> '%s room',
	'JV_POKER_ROOM_PLAYERS'				=> 'Members/Chairs',
	'JV_POKER_ROOM_PLAYING_USERS'		=> 'In the room <strong>%s</strong> playing: %s',
	'JV_POKER_ROOM_PLAY_USERS'			=> '%1$s / %2$s',
	'JV_POKER_ROOM_STATUS'				=> 'Status',
	'JV_POKER_ROOM_TYPE'				=> 'Type',
	'JV_POKER_ROOM_VIEWING'				=> 'Viewing poker %s room',
	'JV_POKER_ROOM_WAIT_USERS'			=> 'In the room <strong>%s</strong> waiting: %s',
	'JV_POKER_RULES'					=> 'Poker rules',
	'JV_POKER_SELECT_EXCHANGE_TYPE'		=> 'Select what you want to exchange',
	'JV_POKER_SHORTEST_PLAYTIME'		=> 'Shortest play time',
	'JV_POKER_SHOUT_ARCHIVE'			=> 'Shoutbox archive',
	'JV_POKER_SHOUT_ARCHIVE_NO_MSG'		=> 'There are currently no messages to display.',
	'JV_POKER_SHOUT_ROOM_ARCHIVE'		=> 'Poker %s room shoutbox archive',
	'JV_POKER_SMALL_BLIND'				=> 'Small blind',
	'JV_POKER_STANDARD'					=> 'Normal',
	'JV_POKER_STANDARD_ROOM'			=> 'Normal room',
	'JV_POKER_STANDARD_ROOMS'			=> 'Normal rooms',
	'JV_POKER_STAT'						=> 'Statistics',
	'JV_POKER_STATS'					=> 'Poker statistics',
	'JV_POKER_STATS_ALLINS'				=> array(
		1								=> 'Total all-in number: <strong>%s</strong>',
		2								=> 'Total all-in number: <strong>%s</strong>',
	),
	'JV_POKER_STATS_CALLS'				=> array(
		1								=> 'Total call number: <strong>%s</strong>',
		2								=> 'Total calls number: <strong>%s</strong>',
	),
	'JV_POKER_STATS_CHECKS'				=> array(
		1								=> 'Total check number: <strong>%s</strong>',
		2								=> 'Total checks number: <strong>%s</strong>',
	),
	'JV_POKER_STATS_FOLDS'				=> array(
		1								=> 'Total cards fold number: <strong>%s</strong>',
		2								=> 'Total cards folds number: <strong>%s</strong>',
	),
	'JV_POKER_STATS_INCOME'				=> 'income: %s',
	'JV_POKER_STATS_NO_PERMISSION'		=> 'You do not have permission to view poker statistics.',
	'JV_POKER_STATS_PLAYS'				=> array(
		1								=> 'play %s party.',
		2								=> 'plays %s parties.',
	),
	'JV_POKER_STATS_PLAYS_TOURS'		=> array(
		1								=> 'played %s tournament.',
		2								=> 'played %s tournaments.',
	),
	'JV_POKER_STATS_RAISES'				=> array(
		1								=> 'Total raise number: <strong>%s</strong>',
		2								=> 'Total raises number: <strong>%s</strong>',
	),
	'JV_POKER_STATS_VIEWING'			=> 'Viewing poker statistics',
	'JV_POKER_STATS_WINS_RATE'			=> 'winnings rate:%s%%',
	'JV_POKER_STATS_WON_TOURS'			=> array(
		1								=> 'won %s tournament',
		2								=> 'won %s tournaments',
	),
	'JV_POKER_TIME_DAY'					=> 'day',
	'JV_POKER_TIME_DAYS'				=> 'days',
	'JV_POKER_TIME_HOUR'				=> 'hour',
	'JV_POKER_TIME_HOURS'				=> 'hours',
	'JV_POKER_TIME_MINUTE'				=> 'minute',
	'JV_POKER_TIME_MINUTES'				=> 'minutes',
	'JV_POKER_TIME_MONTH'				=> 'month',
	'JV_POKER_TIME_MONTHS'				=> 'months',
	'JV_POKER_TIME_SECOND'				=> 'second',
	'JV_POKER_TIME_SECONDS'				=> 'seconds',
	'JV_POKER_TIME_WEEK'				=> 'week',
	'JV_POKER_TIME_WEEKS'				=> 'weeks',
	'JV_POKER_TIME_YEAR'				=> 'year',
	'JV_POKER_TIME_YEARS'				=> 'years',
	'JV_POKER_TOTAL_DATA'				=> 'A total of <strong>%s</strong> users have played a total of <strong>%s</strong> hands.<br>Total time spent playing: <strong>%s</strong>',
	'JV_POKER_TOTAL_DATA_CHIPS'			=> 'Total chips on the outside: <strong>%s</strong>',
	'JV_POKER_TOTAL_MSG'				=> 'Total messages %s',
	'JV_POKER_TOTAL_TOURS'				=> 'Total tournament’s (%s)',
	'JV_POKER_TOURNAMENT'				=> 'Tournament',
	'JV_POKER_TOURNAMENT_ROOM'			=> 'Tournament room',
	'JV_POKER_TOURNAMENT_ROOMS'			=> 'Tournament rooms',
	'JV_POKER_TOUR_END'					=> 'End',
	'JV_POKER_TOUR_LEADERS'				=> 'Poker tournament leaders',
	'JV_POKER_TOUR_START'				=> 'Start',
	'JV_POKER_TOUR_STATS'				=> 'Tournament statistics',
	'JV_POKER_TOUR_STATS_VIEWING'		=> 'Viewing poker tournament statistics',
	'JV_POKER_UNKNOWN'					=> 'Unknown',
	'JV_POKER_UNLOCKED'					=> 'Unlocked',
	'JV_POKER_USER_INFO'				=> 'User information',
	'JV_POKER_USER_STAT'				=> 'User statistics',
	'JV_POKER_USER_STATS'				=> '%s poker statistics',
	'JV_POKER_USER_STATS_VIEWING'		=> 'Viewing %s poker statistics',
	'JV_POKER_VIEW_MEMBER_PROFILE'		=> 'View user profile',
	'JV_POKER_VIEW_STAT'				=> 'View poker statistics',
	'JV_POKER_VIEW_STATS'				=> 'View statistics',
	'JV_POKER_VIEW_USER_STATS'			=> 'View user statistics',
	'JV_POKER_VLOSE'					=> array(
		1								=> 'Lost tournament: <strong>%s</strong>',
		2								=> 'Lost tournaments: <strong>%s</strong>',
	),
	'JV_POKER_VWON'						=> array(
		1								=> 'Won tournament: <strong>%s</strong>',
		2								=> 'Won tournaments: <strong>%s</strong>',
	),
	'JV_POKER_WAITING'					=> 'Waiting',
	'JV_POKER_WELCOME'					=> 'Welcome to the poker room %s!',
	'JV_POKER_WHO_IS_PLAYING'			=> 'Who is playing in the poker rooms?',
	'JV_POKER_WINNER'					=> 'Winner',
	'JV_POKER_WONS_RATE'				=> 'Winnings ratio: <strong>%s%%</strong>',
	'JV_POKER_WON_PARTY'				=> array(
		1								=> 'Won poker party',
		2								=> 'Won poker parties',
	),
	'JV_POKER_WON_TOUR'					=> array(
		1								=> 'Won poker tournament',
		2								=> 'Won poker tournaments',
	),
));
