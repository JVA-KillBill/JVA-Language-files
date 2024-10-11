<?php
/**
*
* @package phpBB Arcade
* @version $Id: logs.php 2450 2021-12-13 20:24:43Z KillBill $
* @author 2011-2024 KillBill
* @copyright (c) 2014-2024 https://jv-arcade.com/ - https://jv-arcade.com/contact
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

//Arcade
$lang = array_merge($lang, [
	'ARCADE_SCORE_ERR_GAME_HACK'					=> 'game hack detection',
	'ARCADE_SCORE_ERR_GG'							=> 'incorrect game code received',
	'ARCADE_SCORE_ERR_GG_RANDCHAR'					=> 'game code not received',
	'ARCADE_SCORE_ERR_GS'							=> 'incorrect score code received',
	'ARCADE_SCORE_ERR_GS_GG_RANDCHAR'				=> 'game and score code not received',
	'ARCADE_SCORE_ERR_GS_RANDCHAR'					=> 'score code not received',
	'ARCADE_SCORE_ERR_GS_VARIABLE'					=> 'score variable not received',
	'ARCADE_SCORE_ERR_MICRO_TIME'					=> 'exceeded the control time',
	'ARCADE_SCORE_ERR_PCH'							=> 'incorrect score variable code received',
	'ARCADE_SCORE_ERR_SAVE_TYPE'					=> 'The configured save type wasn’t used',
	'ARCADE_SCORE_ERR_SEC_SESS'						=> 'Incorrect security session received',

	'LOG_ACL_ADD_CATEGORY_LOCAL_C_'					=> '<strong>Added or edited category permissions</strong> from %1$s<br>» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_C_'					=> '<strong>Added or edited groups’ category access</strong> from %1$s<br>» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_C_'						=> '<strong>Added or edited users’ category access</strong> from %1$s<br>» %2$s',
	'LOG_ACL_ARCADE_RESTORE_PERMISSIONS'			=> '<strong>Own permissions restored after using permissions from</strong><br>» %s',
	'LOG_ACL_ARCADE_TRANSFER_PERMISSIONS'			=> '<strong>Permissions transferred from</strong><br>» %s',
	'LOG_ACL_DEL_CATEGORY_LOCAL_C_'					=> '<strong>Removed User/Group category permissions</strong> from %1$s<br>» %2$s',
	'LOG_ARCADE_ADD_CAT'							=> '<strong>Created new category</strong><br>» %s',
	'LOG_ARCADE_ADD_GAME'							=> [
		1											=> '<strong>Added a game of %s category.</strong><br>» %s',
		2											=> '<strong>Added games of %s category.</strong><br>» %s',
	],
	'LOG_ARCADE_ALL_ANNOUNCE_RESTORE_DEFAULT_DATA'	=> '<strong>All announcement default data restored</strong>',
	'LOG_ARCADE_ANNOUNCE_CREATE_DB_DATA'			=> '<strong>“%s” create a message in the database</strong><br>» Language: %s',
	'LOG_ARCADE_ANNOUNCE_GENERAL_SETTINGS'			=> '<strong>Altered announcement general settings</strong>',
	'LOG_ARCADE_ANNOUNCE_RESET'						=> '<strong>Reset announcement forum</strong><br>» %s',
	'LOG_ARCADE_ARCADE_PM'							=> '<strong>Altered arcade private message</strong><br>» Language: %s',
	'LOG_ARCADE_ARCADE_SUPER_CHAMPION_PM'			=> '<strong>Altered private message “super champion title losing”</strong><br>» Language: %s',
	'LOG_ARCADE_AUTO_RESET_SCORE'					=> '<strong>Automatically reset scores</strong>',
	'LOG_ARCADE_AUTO_RESET_SCORE_SETTINGS'			=> '<strong>Altered automatically reset scores settings</strong>',
	'LOG_ARCADE_BACKUP_CAT'							=> [
		1											=> '<strong>Backed up category</strong><br>» %s',
		2											=> '<strong>Backed up categories</strong><br>» %s',
	],
	'LOG_ARCADE_BACKUP_EMPTY'						=> '<strong>Emptied backup directory</strong>',
	'LOG_ARCADE_CATEGORY_COPIED_PERMISSIONS'		=> '<strong>Copied category permissions</strong> from %1$s<br>» %2$s',
	'LOG_ARCADE_CAT_EDIT'							=> '<strong>Edited category details</strong><br>» %s',
	'LOG_ARCADE_CHALLENGE'							=> '<strong>Altered challenge settings</strong>',
	'LOG_ARCADE_CHALLENGE_ACCEPT_PM'				=> '<strong>Altered challenge “accept” private message</strong><br>» Language: %s',
	'LOG_ARCADE_CHALLENGE_FINAL_LOSER_PM'			=> '<strong>Altered challenge “final/loser” private message</strong><br>» Language: %s',
	'LOG_ARCADE_CHALLENGE_FINAL_TIE_PM'				=> '<strong>Altered challenge “final/tie” private message</strong><br>» Language: %s',
	'LOG_ARCADE_CHALLENGE_FINAL_WINNER_PM'			=> '<strong>Altered challenge “final/winner” private message</strong><br>» Language: %s',
	'LOG_ARCADE_CHALLENGE_PM'						=> '<strong>Altered challenge private message</strong><br>» Language: %s',
	'LOG_ARCADE_CHALLENGE_REJECT_PM'				=> '<strong>Altered challenge “reject” private message</strong><br>» Language: %s',
	'LOG_ARCADE_CHALLENGE_REPORT_GAME_PM'			=> '<strong>Altered challenge “bug game report” private message</strong><br>» Language: %s',
	'LOG_ARCADE_CHALLENGE_WITHDRAW_PM'				=> '<strong>Altered challenge “withdraw” private message</strong><br>» Language: %s',
	'LOG_ARCADE_CHAMPIONS_GAME_ANNOUNCE'			=> '<strong>Altered Top players announcement</strong><br>» Language: %s',
	'LOG_ARCADE_CLEAR_ADMIN_LOG'					=> '<strong>Cleared admin log</strong>',
	'LOG_ARCADE_CLEAR_ALL_USERS_BANNED'				=> '<strong>Unbanned all users</strong>',
	'LOG_ARCADE_CLEAR_CRITICAL_LOG'					=> '<strong>Cleared error log</strong>',
	'LOG_ARCADE_CLEAR_MOD_LOG'						=> '<strong>Cleared moderator log</strong>',
	'LOG_ARCADE_CLEAR_REPORTS'						=> '<strong>Cleared report log</strong>',
	'LOG_ARCADE_CLEAR_USERS_BANNED'					=> '<strong>Unbanned users</strong><br>» %s',
	'LOG_ARCADE_CLEAR_USERS_LOG'					=> '<strong>Cleared user log</strong>',
	'LOG_ARCADE_CLEAR_USER_BANNED'					=> '<strong>Unbanned user</strong><br>» %s',
	'LOG_ARCADE_CREATE_INSTALL_FILE'				=> '<strong>Create game installation file</strong><br>» %s',
	'LOG_ARCADE_DELETE_GAME'						=> [
		1											=> '<strong>Deleted game</strong><br>» %s',
		2											=> '<strong>Deleted games</strong><br>» %s',
	],
	'LOG_ARCADE_DELETE_GAME_FILES'					=> [
		1											=> '<strong>Deleted files of the game</strong><br>» %s',
		2											=> '<strong>Deleted files of the games</strong><br>» %s',
	],
	'LOG_ARCADE_DELETE_SCORE'						=> '<strong>Deleted game score for user: %3$s%1$s%2$s</strong><br>» %4$s',
	'LOG_ARCADE_DELETE_SUPER_CHAMPION_SCORE'		=> '<strong>Deleted super champion score for user: %s</strong><br>» Game: %s',
	'LOG_ARCADE_DEL_CAT'							=> '<strong>Deleted category</strong><br>» %s',
	'LOG_ARCADE_DEL_CATS'							=> '<strong>Deleted category and its subcategories</strong><br>» %s',
	'LOG_ARCADE_DEL_DELETED_GAMES'					=> '<strong>Deleted list of deleted games.</strong>',
	'LOG_ARCADE_DEL_GAMES'							=> '<strong>Deleted category and its games</strong><br>» %s',
	'LOG_ARCADE_DEL_GAMES_CATS'						=> '<strong>Deleted category, its games and subcategories</strong><br>» %s',
	'LOG_ARCADE_DEL_GAMES_MOVE_CATS'				=> '<strong>Deleted category and its games, moved subcategories</strong> to %1$s<br>» %2$s',
	'LOG_ARCADE_DEL_MOVE_CATS'						=> '<strong>Deleted category and moved subcategories</strong> to %1$s<br>» %2$s',
	'LOG_ARCADE_DEL_MOVE_GAMES'						=> '<strong>Deleted category and moved games </strong> to %1$s<br>» %2$s',
	'LOG_ARCADE_DEL_MOVE_GAMES_CATS'				=> '<strong>Deleted category and its subcategories, moved games</strong> to %1$s<br>» %2$s',
	'LOG_ARCADE_DEL_MOVE_GAMES_MOVE_CATS'			=> '<strong>Deleted category, moved games</strong> to %1$s <strong>and subcategoriess</strong> to %2$s<br>» %3$s',
	'LOG_ARCADE_EDIT_GAME'							=> '<strong>Altered game settings</strong><br>» %s',
	'LOG_ARCADE_EDIT_GAME_RESET_INSTALL_DATE'		=> '<strong>Edited game and reset the installation date</strong><br>» %s',
	'LOG_ARCADE_EDIT_SCORE'							=> '<strong>Altered game score data for user: %1$s</strong><br>» %2$s',
	'LOG_ARCADE_ERROR_GAME_FILE_MISSING'			=> '<strong>The game “%s” has missing files or extra files</strong><br>» %s',
	'LOG_ARCADE_ERROR_PLAYING_TIME'					=> '<strong>The “%s” game score was submitted with no playing time</strong><br>» Score: %s',
	'LOG_ARCADE_EXT_SETTINGS'						=> '<strong>Altered extensions settings</strong>',
	'LOG_ARCADE_FEATURE'							=> '<strong>Altered feature settings</strong>',
	'LOG_ARCADE_FORM_SCORE_ERROR'					=> [
		1											=> '<strong>The game “%s” has sent an incorrect score</strong><br>Save type: %s<br>Playing time: %s<br>Score: %s<br><strong>Error:</strong> (%s)',
		2											=> '<strong>The game “%s” has sent an incorrect score</strong><br>Save type: %s<br>Playing time: %s<br>Score: %s<br><strong>Errors:</strong> (%s)',
	],
	'LOG_ARCADE_GAME'								=> '<strong>Altered game settings</strong>',
	'LOG_ARCADE_GAME_ANNOUNCE'						=> '<strong>Altered game announcement</strong><br>» Language: %s',
	'LOG_ARCADE_GAME_ANNOUNCE_SYNC'					=> '<strong>Resynchronize game announcements</strong>',
	'LOG_ARCADE_GAME_DATA_EMPTY_ERROR'				=> '<strong>The game “%s” hasn’t sent an arcadegid or enscore code. The game is damaged.</strong><br>» Playing time: %s<br>» Score: %s',
	'LOG_ARCADE_GAME_FILE_NOT_FOUND'				=> '<strong>A file of game “%s” couldn’t be found</strong><br>» File: %s',
	'LOG_ARCADE_GAME_INHERIT_FILE_NOT_FOUND'		=> '<strong>The “%s” game inherited game file wasn’t found</strong><br>» Inherited file: %s',
	'LOG_ARCADE_GAME_INH_MAIN_UPDATE'				=> '<strong>Updating data of the main game and %d inherited games</strong><br>» Initiated game: %s',
	'LOG_ARCADE_GAME_INH_UPDATE'					=> '<strong>Updating the data of %d inherited games</strong><br>» Initiated game: %s',
	'LOG_ARCADE_GAME_INSTALL_FILE_NOT_FOUND'		=> '<strong>The game install file for “%s” couldn’t be found</strong><br>» File: %s',
	'LOG_ARCADE_GAME_INSTALL_FILE_UNWRITABLE'		=> '<strong>The game install file for “%s” isn’t writable</strong><br>» File: %s',
	'LOG_ARCADE_GAME_NOT_DETECT_FILESIZE'			=> '<strong>Unable to determine the size of the game files</strong><br>» %s',
	'LOG_ARCADE_GAME_SAME_DESC_UPDATE'				=> '<strong>Update %d identical games descriptions</strong><br>» Initiated game: %s',
	'LOG_ARCADE_GLOBAL_ANNOUNCE'					=> '<strong>Altered global announcement</strong><br>» Language: %s',
	'LOG_ARCADE_GROUP_TOURNAMENT'					=> '<strong>Altered group tournament settings</strong>',
	'LOG_ARCADE_GROUP_TOUR_ANNOUNCE'				=> '<strong>Altered group tournament announcement</strong><br>» Language: %s',
	'LOG_ARCADE_GROUP_TOUR_ANNOUNCE_SYNC'			=> '<strong>Resynchronize group tournament announcements</strong>',
	'LOG_ARCADE_GROUP_TOUR_CREATE'					=> '<strong>Group tournament created</strong><br>» %s',
	'LOG_ARCADE_GROUP_TOUR_DELETE'					=> '<strong>Group tournament deleted</strong><br>» %s',
	'LOG_ARCADE_GROUP_TOUR_EDIT'					=> '<strong>Group tournament edited</strong><br>» %s',
	'LOG_ARCADE_GROUP_TOUR_END_ANNOUNCE'			=> '<strong>Altered group tournament end announcement</strong><br>» Language: %s',
	'LOG_ARCADE_GUEST_DEFAULT_SETTINGS'				=> '<strong>Changed the guest user default settings</strong>',
	'LOG_ARCADE_G_MOVE_DOWN'						=> '<strong>Moved game order</strong> %s <strong>down</strong>',
	'LOG_ARCADE_G_MOVE_UP'							=> '<strong>Moved game order</strong> %s <strong>up</strong>',
	'LOG_ARCADE_LOAD'								=> '<strong>Load settings</strong>',
	'LOG_ARCADE_MEMBERS_DEFAULT_SETTINGS'			=> '<strong>Changed the members default settings</strong>',
	'LOG_ARCADE_MENU_ADD'							=> '<strong>Added menu</strong><br>» %s',
	'LOG_ARCADE_MENU_DELETE'						=> [
		1											=> '<strong>Delete menu</strong><br>» %s',
		2											=> '<strong>Deleted menu and its submenus</strong><br>» %s',
	],
	'LOG_ARCADE_MENU_EDIT'							=> '<strong>Edit menu</strong><br>» %s',
	'LOG_ARCADE_MENU_MOVE_DOWN'						=> '<strong>Moved menu</strong> %1$s <strong>below</strong> %2$s',
	'LOG_ARCADE_MENU_MOVE_UP'						=> '<strong>Moved menu</strong> %1$s <strong>above</strong> %2$s',
	'LOG_ARCADE_MOVE_DOWN'							=> '<strong>Moved category</strong> %1$s <strong>below</strong> %2$s',
	'LOG_ARCADE_MOVE_GAME'							=> [
		1											=> '<strong>Moved game from category %1$s to the new category %2$s</strong><br>» %3$s',
		2											=> '<strong>Moved games from category %1$s to the new category %2$s</strong><br>» %3$s',
	],
	'LOG_ARCADE_MOVE_UP'							=> '<strong>Moved category</strong> %1$s <strong>above</strong> %2$s',
	'LOG_ARCADE_PAAR'								=> '<strong>Altered phpBB Arcade - activity rank</strong>',
	'LOG_ARCADE_PAGE'								=> '<strong>Altered Pages settings</strong>',
	'LOG_ARCADE_PATH'								=> '<strong>Altered path settings</strong>',
	'LOG_ARCADE_PURGE_SESSIONS'						=> '<strong>Purged games sessions</strong>',
	'LOG_ARCADE_REPORT_GAME_ANNOUNCE'				=> '<strong>Altered game report announcement</strong><br>» Language: %s',
	'LOG_ARCADE_RESET_ARCADE'						=> '<strong>Reset arcade</strong>%s%s',
	'LOG_ARCADE_RESET_CHALLENGE'					=> '<strong>Reset challenge</strong>',
	'LOG_ARCADE_RESET_COMMENT'						=> '<strong>Reset games comments</strong>',
	'LOG_ARCADE_RESET_DOWNLOADS'					=> '<strong>Reset download statistics</strong>',
	'LOG_ARCADE_RESET_GAME'							=> [
		1											=> '<strong>Reset game data%s%s%s%s</strong><br>» %s',
		2											=> '<strong>Reset games data%s%s%s%s</strong><br>» %s',
	],
	'LOG_ARCADE_RESET_GAMES_REC'					=> '<strong>Reset games recommendation</strong>',
	'LOG_ARCADE_RESET_GAME_SCORES'					=> [
		1											=> '<strong>Reset game scores%s%s</strong><br>» %s',
		2											=> '<strong>Reset games scores%s%s</strong><br>» %s',
	],
	'LOG_ARCADE_RESET_GROUP_TOURNAMENT'				=> '<strong>Reset group tournament</strong>',
	'LOG_ARCADE_RESET_INSTALL_DATE_GAME'			=> [
		1											=> '<strong>Reset a game installation date</strong><br>» %s',
		2											=> '<strong>Reset several games installation dates</strong><br>» %s',
	],
	'LOG_ARCADE_RESET_JACKPOT'						=> '<strong>Reset jackpot data</strong>',
	'LOG_ARCADE_RESET_MENU'							=> '<strong>Reset menu structure</strong>',
	'LOG_ARCADE_RESET_PLAYING_RECORD'				=> '<strong>Reset most playing users counter</strong>',
	'LOG_ARCADE_RESET_POINTS'						=> '<strong>Reset points data</strong>',
	'LOG_ARCADE_RESET_SCORES_ALL'					=> '<strong>Delete all user scores</strong>',
	'LOG_ARCADE_RESET_SUPER_CHAMPION'				=> '<strong>Reset super champion</strong>',
	'LOG_ARCADE_RESET_TOURNAMENT'					=> '<strong>Reset tournament</strong>',
	'LOG_ARCADE_RESET_USERS_DATA'					=> '<strong>Reset all users data</strong>',
	'LOG_ARCADE_RESET_USERS_SCORE'					=> '<strong>Reset all scores</strong>',
	'LOG_ARCADE_RESET_USERS_SETTINGS'				=> '<strong>Reset users settings</strong>',
	'LOG_ARCADE_RESET_USER_ALL'						=> '<strong>Reset all user data</strong><br>» %s',
	'LOG_ARCADE_RESET_USER_SCORES'					=> '<strong>Reset scores%s%s</strong><br>» %s',
	'LOG_ARCADE_RESET_USER_SUPER_RECORDS'			=> '<strong>Reset user super records</strong><br>» %s',
	'LOG_ARCADE_RESTORE_DEFAULT_DATA_ANNOUNCE'		=> '<strong>Announcement default data restored</strong><br>» %s',
	'LOG_ARCADE_RESTORE_DEFAULT_DATA_PM'			=> '<strong>Private message default data restored</strong><br>» %s',
	'LOG_ARCADE_RESYNC_TOTALS_DATA'					=> '<strong>Arcade total data resynchronization</strong>',
	'LOG_ARCADE_RESYNC_USERS_TOTAL_DATA'			=> '<strong>Users total data resynchronization</strong>',
	'LOG_ARCADE_SETTINGS'							=> '<strong>Altered general settings</strong>',
	'LOG_ARCADE_SYNC_CAT'							=> '<strong>Re-synchronised category</strong><br>» %s',
	'LOG_ARCADE_SYNC_GAME'							=> [
		1											=> '<strong>Re-synchronised game</strong><br>» %s',
		2											=> '<strong>Re-synchronised games</strong><br>» %s',
	],
	'LOG_ARCADE_SYSTEM'								=> '<strong>Altered system settings</strong>',
	'LOG_ARCADE_TOURNAMENT'							=> '<strong>Altered tournament settings</strong>',
	'LOG_ARCADE_TOUR_ANNOUNCE'						=> '<strong>Altered tournament announcement</strong><br>» Language: %s',
	'LOG_ARCADE_TOUR_ANNOUNCE_SYNC'					=> '<strong>Resynchronize tournament announcements</strong>',
	'LOG_ARCADE_TOUR_CREATE'						=> '<strong>Tournament created</strong><br>» %s',
	'LOG_ARCADE_TOUR_DELETE'						=> '<strong>Tournament deleted</strong><br>» %s',
	'LOG_ARCADE_TOUR_EDIT'							=> '<strong>Tournament edited</strong><br>» %s',
	'LOG_ARCADE_TOUR_END_ANNOUNCE'					=> '<strong>Altered tournament end announcement</strong><br>» Language: %s',
	'LOG_ARCADE_UNDEFINED_SCORE'					=> '<strong>The game “%s” has sent an undefined score</strong>',
	'LOG_ARCADE_UNPACK_GAME'						=> [
		1											=> '<strong>Unpacked game</strong><br>» %s',
		2											=> '<strong>Unpacked games</strong><br>» %s',
	],
	'LOG_ARCADE_UPLOAD_GAME'						=> [
		1											=> '<strong>Upload game</strong><br>» %s',
		2											=> '<strong>Upload games</strong><br>» %s',
	],
	'LOG_ARCADE_USER_BANNED'						=> '<strong>Banned user</strong><br>» %s',
	'LOG_ARCADE_USER_DELETE_FAVORITE'				=> [
		1											=> '<strong>Delete favorite games</strong><br>» %s',
		2											=> '<strong>Delete favorite games</strong><br>» %s',
	],
	'LOG_ARCADE_USER_GAME_SETTINGS'					=> '<strong>Altered game settings</strong>',
	'LOG_ARCADE_USER_HIGHLIGHT_FAVORITE'			=> [
		1											=> '<strong>Highlight your favorite game</strong><br>» %s',
		2											=> '<strong>Highlight your favorite games </strong><br>» %s',
	],
	'LOG_ARCADE_USER_MAIN_SETTINGS'					=> '<strong>Altered main settings</strong>',
	'LOG_ARCADE_USER_POST_SETTINGS'					=> '<strong>Altered post settings</strong>',
	'LOG_ARCADE_USER_REMOVE_HIGHLIGHT_FAVORITE'		=> [
		1											=> '<strong>Remove highlights from favorite game</strong><br>» %s',
		2											=> '<strong>Remove highlights from favorite games</strong><br>» %s',
	],
	'LOG_ARCADE_USER_SET_UPDATE'					=> '<strong>Updated user details</strong><br>» %s',
	'LOG_ARCADE_VERSION_CHECK_DISABLED'				=> '<strong>Automatic version check disabled</strong>',
	'LOG_ARCADE_VERSION_CHECK_ENABLED'				=> '<strong>Automatic version check enabled</strong>',
	'LOG_C_ROLE_ADD'								=> '<strong>Category role added</strong><br>» %s',
	'LOG_C_ROLE_EDIT'								=> '<strong>Category role edited</strong><br>» %s',
	'LOG_C_ROLE_REMOVED'							=> '<strong>Category role removed</strong><br>» %s',
]);
