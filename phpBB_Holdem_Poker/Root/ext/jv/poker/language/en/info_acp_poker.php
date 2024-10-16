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
	'ACP_CAT_JV_POKER'								=> 'Poker',
	'ACP_CAT_JV_POKER_MANAGE'						=> 'Manage poker',
	'ACP_CAT_JV_POKER_SETTINGS'						=> 'Main settings',
	'ACP_CAT_JV_POKER_STYLES'						=> 'Manage styles',
	'ACP_JV_POKER_ACTIVE_WINDOW'					=> 'Only active window',
	'ACP_JV_POKER_ACTIVE_WINDOW_EXPLAIN'			=> 'If enabled, the Ajax script will only run in the active window in the background. This prevents a user from overloading the server when opening multiple windows.',
	'ACP_JV_POKER_ADD_RADIO'						=> 'Add a radio station',
	'ACP_JV_POKER_ADD_RADIO_EXPLAIN'				=> 'Here you can add a new radio station.',
	'ACP_JV_POKER_ADD_ROOM'							=> 'Add room',
	'ACP_JV_POKER_ADD_ROOM_EXPLAIN'					=> 'Here you can configure your own new room.',
	'ACP_JV_POKER_ALL_VERSION_CHECK'				=> 'Check all versions',
	'ACP_JV_POKER_APPROVAL_PERSONAL_DATA_CONFIRM'	=> 'I agree to send and store personal data.',
	'ACP_JV_POKER_AUTO_LOAD_ENABLE'					=> 'Room with automatic loading',
	'ACP_JV_POKER_AUTO_LOAD_ENABLE_EXPLAIN'			=> 'Allows users to be automatically loaded into the room they sat before when entering the poker site after accidentally closing the window.',
	'ACP_JV_POKER_AUTO_START'						=> 'Automatic start',
	'ACP_JV_POKER_AUTO_START_EXPLAIN'				=> 'If at least two users sit down in the room, the game starts automatically. When this option is disabled, then players must manually start the game.<br><em>Note that this option is not valid for tournament rooms.</em>',
	'ACP_JV_POKER_AVATAR_DISPLAY'					=> 'Display user avatars',
	'ACP_JV_POKER_AVATAR_SIZE'						=> 'User avatar size',
	'ACP_JV_POKER_BG_IMG'							=> 'Display a background image',
	'ACP_JV_POKER_CREATED_ROOMS'					=> 'Created rooms',
	'ACP_JV_POKER_CREATE_NEW_ROOM'					=> 'Create a new room',
	'ACP_JV_POKER_CREATE_RADIO'						=> 'Create a new radio station',
	'ACP_JV_POKER_DEFAULT_STYLE_NOT_FOUND'			=> 'The default “JV-Poker” style is not found in the database! Please reinstall the default style.',
	'ACP_JV_POKER_DISABLE'							=> 'Disable poker',
	'ACP_JV_POKER_DISABLE_EXPLAIN'					=> 'This will make the poker unavailable to users. You can also enter a short (255 character) message to display if you wish.',
	'ACP_JV_POKER_DISCONNECT_TIME'					=> 'Drop time',
	'ACP_JV_POKER_DISCONNECT_TIME_EXPLAIN'			=> 'If the user is disconnected from the Internet, then this is the end of time. Will be automatically stand up for the affected user.',
	'ACP_JV_POKER_DISPLAY_PLAYING_USERS'			=> 'Display who is playing',
	'ACP_JV_POKER_DISPLAY_PLAYING_USERS_EXPLAIN'	=> 'If enabled, players staying in or playing in the rooms will be displayed on the main page of poker.',
	'ACP_JV_POKER_EDIT_RADIO'						=> 'Edit a radio station',
	'ACP_JV_POKER_EDIT_RADIO_EXPLAIN'				=> 'Here you can edit the name and address of the radio station.',
	'ACP_JV_POKER_EDIT_ROOM'						=> 'Edit room',
	'ACP_JV_POKER_EDIT_ROOM_BLOCKED'				=> '<strong>Room edit or delete blocked!</strong><br>The <strong>“%s room”</strong> currently playing or users have been wrongly stand up from the table, so the game has not yet been evaluated.<br><br>The room editing or delete is only possible if there is no game in progress.<br><br><em>During the game, only learner and practice rooms can be edited or deleted.</em>',
	'ACP_JV_POKER_EDIT_ROOM_EXPLAIN'				=> 'Here you can edit the configuration of the room.',
	'ACP_JV_POKER_END_USE_PERIOD'					=> 'End of use period',
	'ACP_JV_POKER_EXT_DISABLED'						=> 'This extensions are disabled, because they are not compatible with the currently used version of “phpBB Holdem Póker”.',
	'ACP_JV_POKER_EXT_NAME_SETTINGS'				=> '%s extension settings',
	'ACP_JV_POKER_EXT_NO_INSTALL'					=> 'There are currently no extensions installed.',
	'ACP_JV_POKER_EXT_VERSION'						=> 'Extension version',
	'ACP_JV_POKER_EXT_VERSION_CHECK'				=> 'Extension version check',
	'ACP_JV_POKER_INSTALL_TIME'						=> 'Poker software install',
	'ACP_JV_POKER_IPCHECK_ENABLE'					=> 'Ip check',
	'ACP_JV_POKER_IPCHECK_ENABLE_EXPLAIN'			=> 'An IP address may only be used by one user in a room.',
	'ACP_JV_POKER_JACKPOT_ENABLE'					=> 'Use jackpot',
	'ACP_JV_POKER_JACKPOT_ENABLE_EXPLAIN'			=> 'The jackpot will increase depending on the set percentage and the value of the users chips.<br><em>Note that this option will only apply to standard rooms.</em>',
	'ACP_JV_POKER_JACKPOT_EXPLAIN'					=> 'The amount of the current jackpot.',
	'ACP_JV_POKER_JACKPOT_PERCENT'					=> 'Jackpot percent',
	'ACP_JV_POKER_JACKPOT_PERCENT_EXPLAIN'			=> 'The set value will be deducted from the users when they sit down at the room, this is the amount by which the jackpot is always growing.',
	'ACP_JV_POKER_KICKTIMER'						=> 'Inactivity time',
	'ACP_JV_POKER_KICKTIMER_EXPLAIN'				=> 'If a player does not press a button for a set period of time, thus hindering the course of the game, it will be stand up automatically after this time.',
	'ACP_JV_POKER_LICENSE'							=> 'License',
	'ACP_JV_POKER_LICENSE_CONFIRM'					=> 'I have carefully read and abide the %s“License”%s',
	'ACP_JV_POKER_MAIN'								=> 'phpBB Holdem Póker - Main',
	'ACP_JV_POKER_MAIN_INDEX'						=> 'Welcome page',
	'ACP_JV_POKER_MAIN_TITLE'						=> 'Welcome to phpBB Holdem Póker!',
	'ACP_JV_POKER_MAIN_TITLE_EXPLAIN'				=> 'Thank you for choosing phpBB Holdem Póker as your poker solution. This screen will give you a quick overview of all the various statistics of your poker. The links on the left hand side of this screen allow you to control every aspect of your poker experience. Each page will have instructions on how to use the tools.',
	'ACP_JV_POKER_MANAGE'							=> 'phpBB Holdem Póker - Manage',
	'ACP_JV_POKER_MANAGE_RADIO'						=> 'Manage radios',
	'ACP_JV_POKER_MANAGE_RADIO_EXPLAIN'				=> 'Here you can create new radio stations or delete and edit existing ones.',
	'ACP_JV_POKER_MANAGE_ROOMS'						=> 'Manage rooms',
	'ACP_JV_POKER_MANAGE_ROOMS_EXPLAIN'				=> 'Here you can create new rooms or modify and delete existing ones.',
	'ACP_JV_POKER_MANAGE_RULE'						=> 'Poker rule',
	'ACP_JV_POKER_MANAGE_RULE_EXPLAIN'				=> 'Here you can create a rules that will appear on the main page of poker.',
	'ACP_JV_POKER_MORE_ROOM_ENABLE'					=> 'Using multiple rooms at the same time',
	'ACP_JV_POKER_MORE_ROOM_ENABLE_EXPLAIN'			=> 'Allows users to sit at multiple rooms at once.<br><em>Note that this option does not work if <strong>“Room with automatic loading”</strong> is enabled.</em>',
	'ACP_JV_POKER_PAUSE_TIME'						=> 'Pause time',
	'ACP_JV_POKER_PAUSE_TIME_EXPLAIN'				=> 'A player can take a maximum of this time during the pause time, if it expires then it will be automatically stand up.',
	'ACP_JV_POKER_PLAYED_PARTY'						=> 'Played games',
	'ACP_JV_POKER_PLAYED_PARTY_DAY'					=> 'Played games day',
	'ACP_JV_POKER_PLAYED_TOURNAMENTS'				=> 'Played tournaments',
	'ACP_JV_POKER_PLAYED_TOURNAMENTS_DAY'			=> 'Played tournaments day',
	'ACP_JV_POKER_POST_PROFILE'						=> 'Display in post profile',
	'ACP_JV_POKER_POST_PROFILE_EXPLAIN'				=> 'Controls whether or not to display the poker statistics in the user post profile.',
	'ACP_JV_POKER_PRACTICE_INCOME'					=> 'Enable income for practice rooms',
	'ACP_JV_POKER_PRACTICE_INCOME_EXPLAIN'			=> 'Here you can enable the practice room games to record your income data.<br><em>Note that you should enable this option if you do not use a point system. The champions are ranked by income and, in the alternative, the winning ratio will be taken into account.</em>',
	'ACP_JV_POKER_PRACTICE_IPCHECK_ENABLE'			=> 'IP control in the practice room',
	'ACP_JV_POKER_PRACTICE_IPCHECK_ENABLE_EXPLAIN'	=> 'Have the possibility to take the practice room under IP check.<br>Note that this only works if the IP check is enable.',
	'ACP_JV_POKER_PRIVACY_POLICY_CONFIRM'			=> 'The %s“Privacy Policy”%s has been carefully read and accept.',
	'ACP_JV_POKER_RADIO_ADD_SUCCESS'				=> 'The %s radio station successfully created.',
	'ACP_JV_POKER_RADIO_DELETE'						=> 'Delete radio station',
	'ACP_JV_POKER_RADIO_DELETE_CONFIRM'				=> 'Are you sure you want to delete this radio station?',
	'ACP_JV_POKER_RADIO_DELETE_SUCCESS'				=> 'The %s radio station successfully deleted.',
	'ACP_JV_POKER_RADIO_EDIT_SUCCESS'				=> 'The %s radio station successfully edited.',
	'ACP_JV_POKER_RADIO_ENABLE'						=> 'Enable radio',
	'ACP_JV_POKER_RADIO_ENABLE_EXPLAIN'				=> 'Allows users to listen to the radio while playing poker.',
	'ACP_JV_POKER_RADIO_NAME'						=> 'Radio name',
	'ACP_JV_POKER_RADIO_NAME_EXPLAIN'				=> 'Enter the name of the radio. Use language constant if name is served from language file.',
	'ACP_JV_POKER_RADIO_NO_ID'						=> 'The requested radio does not exist.',
	'ACP_JV_POKER_RADIO_SETTINGS'					=> 'Radio settings',
	'ACP_JV_POKER_RADIO_STATION'					=> 'Radio station',
	'ACP_JV_POKER_RADIO_STATIONS'					=> 'Radio stations',
	'ACP_JV_POKER_RADIO_URL'						=> 'Radio url address',
	'ACP_JV_POKER_RADIO_URL_EXPLAIN'				=> 'Enter the url to access the radio station.',
	'ACP_JV_POKER_REFRESH_ENABLE'					=> 'Refresh data',
	'ACP_JV_POKER_REFRESH_ENABLE_EXPLAIN'			=> 'If enable, then we add a menu item to refresh button, so users can always refresh their current data.<br><em>Note that in principle this option is not required.</em>',
	'ACP_JV_POKER_ROOM_ADD_SUCCESS'					=> 'The %s room successfully created.',
	'ACP_JV_POKER_ROOM_CLOSE_ALL_CHAIRS'			=> 'Room closure',
	'ACP_JV_POKER_ROOM_CLOSE_ALL_CHAIRS_EXPLAIN'	=> 'If enabled, the room will automatically close if all chairs are occupied, or if the tournament is started. So no other user can enter the affected room.',
	'ACP_JV_POKER_ROOM_DELETE'						=> 'Delete poker room',
	'ACP_JV_POKER_ROOM_DELETE_CONFIRM'				=> 'Are you sure you want to delete the poker room?',
	'ACP_JV_POKER_ROOM_DELETE_SUCCESS'				=> 'The %s room successfully deleted.',
	'ACP_JV_POKER_ROOM_EDIT_SUCCESS'				=> 'The %s room successfully edited.',
	'ACP_JV_POKER_ROOM_LIMIT'						=> 'Maximum Amount',
	'ACP_JV_POKER_ROOM_LIMIT_PRACTICE_EXPLAIN'		=> 'The set amount received by users when they sit down.',
	'ACP_JV_POKER_ROOM_LIMIT_TOURNAMENT_EXPLAIN'	=> 'The set amount users can sign up for the tournament.',
	'ACP_JV_POKER_ROOM_LOW'							=> 'Buy-in Amount',
	'ACP_JV_POKER_ROOM_LOW_EXPLAIN'					=> 'This amount is the lowest number of chips users need to have within the room to sit down at the table.',
	'ACP_JV_POKER_ROOM_MOVETIMER'					=> 'Jump time',
	'ACP_JV_POKER_ROOM_MOVETIMER_EXPLAIN'			=> 'After the set time has elapsed, the game will automatically jump to the next user.',
	'ACP_JV_POKER_ROOM_NAME'						=> 'Room name',
	'ACP_JV_POKER_ROOM_NAME_EXPLAIN'				=> 'The room will appear under the given name. Use language constant if name is served from language file.',
	'ACP_JV_POKER_ROOM_NOLIMIT_EXPLAIN'				=> 'With no limit, users can raise any amount.',
	'ACP_JV_POKER_ROOM_PLACE'						=> 'Number of chairs',
	'ACP_JV_POKER_ROOM_PLACE_EXPLAIN'				=> 'You can determine how many users can sit in the room at the same time.',
	'ACP_JV_POKER_ROOM_SETTINGS'					=> 'Room settings',
	'ACP_JV_POKER_ROOM_STYLES'						=> 'Style',
	'ACP_JV_POKER_ROOM_STYLES_EXPLAIN'				=> 'The room will appear with the set style.',
	'ACP_JV_POKER_ROOM_TYPE_LEARNER_EXPLAIN'		=> 'With open cards.',
	'ACP_JV_POKER_ROOM_TYPE_PRACTICE_EXPLAIN'		=> 'Users can play for free.',
	'ACP_JV_POKER_ROOM_TYPE_STANDARD_EXPLAIN'		=> 'Users put their own points in the game.',
	'ACP_JV_POKER_ROOM_TYPE_TOURNAMENT_EXPLAIN'		=> 'Users put their own points in the tournament.',
	'ACP_JV_POKER_RULE_DISPLAY'						=> 'Display poker rules',
	'ACP_JV_POKER_RULE_UPDATED'						=> 'The poker rules have been successfully updated.',
	'ACP_JV_POKER_SETTINGS'							=> 'phpBB Holdem Póker - settings',
	'ACP_JV_POKER_SETTINGS_EXT'						=> 'Extensions settings',
	'ACP_JV_POKER_SETTINGS_EXT_EXPLAIN'				=> 'Here you can see all installed poker extensions. Here, you have the option of configuring extensions.',
	'ACP_JV_POKER_SETTINGS_GAME'					=> 'Game settings',
	'ACP_JV_POKER_SETTINGS_GENERAL'					=> 'General settings',
	'ACP_JV_POKER_SETTINGS_GENERAL_EXPLAIN'			=> 'Configure various settings for phpBB Holdem Póker',
	'ACP_JV_POKER_SETTINGS_LOAD'					=> 'Load settings',
	'ACP_JV_POKER_SETTINGS_LOAD_EXPLAIN'			=> 'Here you can enable or disable certain poker features for better performance if needed.',
	'ACP_JV_POKER_SETTINGS_ROOM'					=> 'Rooms settings',
	'ACP_JV_POKER_SETTINGS_ROOM_EXPLAIN'			=> 'Here you can change the room settings.',
	'ACP_JV_POKER_SHOUTA_PER_PAGE'					=> 'Messages per page',
	'ACP_JV_POKER_SHOUTA_PER_PAGE_EXPLAIN'			=> 'The number of messages displayed on a page in the shoutbox archive.',
	'ACP_JV_POKER_SHOUT_ENABLE'						=> 'Enable shoutbox',
	'ACP_JV_POKER_SHOUT_ENABLE_EXPLAIN'				=> 'Allows users to write a message to each other.',
	'ACP_JV_POKER_SHOUT_PURGE_DAYS'					=> 'Purge messages',
	'ACP_JV_POKER_SHOUT_PURGE_DAYS_EXPLAIN'			=> 'Messages older than the specified days will be deleted automatically. Automatic cleaning runs every 24 hours.',
	'ACP_JV_POKER_SHOUT_VIEW_PAUSE'					=> 'Shoutbox pause time',
	'ACP_JV_POKER_SHOUT_VIEW_PAUSE_EXPLAIN'			=> 'Users who pause can also use the message board.',
	'ACP_JV_POKER_SHOWTIMER'						=> 'Time of card presentation',
	'ACP_JV_POKER_SHOWTIMER_EXPLAIN'				=> 'If the game is over and the cards are shown, the cards are displayed for the set time.',
	'ACP_JV_POKER_SMILIES_LIMIT'					=> 'Maximum number of smilies',
	'ACP_JV_POKER_SMILIES_LIMIT_EXPLAIN'			=> 'Determines how much smilies to load.',
	'ACP_JV_POKER_SMILIE_ENABLE'					=> 'Enable smilies',
	'ACP_JV_POKER_SMILIE_ENABLE_EXPLAIN'			=> 'Allows users to use smilies on the message board.',
	'ACP_JV_POKER_STATS_ENABLE'						=> 'Enable statistics',
	'ACP_JV_POKER_STATS_ENABLE_EXPLAIN'				=> 'Allows users to reach the players statistics.',
	'ACP_JV_POKER_STATS_LIMIT'						=> 'Number of statistics data',
	'ACP_JV_POKER_STATS_PER_PAGE'					=> 'Statistics items per page',
	'ACP_JV_POKER_STYLE'							=> 'Styles',
	'ACP_JV_POKER_STYLES'							=> 'phpBB Holdem Póker - Styles',
	'ACP_JV_POKER_STYLE_EXPLAIN'					=> 'Here you can see the installed poker styles and their details. You also have the option of deleting styles.',
	'ACP_JV_POKER_STYLE_INSTALL'					=> 'Install styles',
	'ACP_JV_POKER_STYLE_INSTALL_EXPLAIN'			=> 'Here you can install new styles.',
	'ACP_JV_POKER_TOOLTIP'							=> 'Enable tooltip',
	'ACP_JV_POKER_TOOLTIP_EXPLAIN'					=> 'If enabled, a tooltip will be added to some items.',
	'ACP_JV_POKER_TOO_BIG'							=> 'The provided value for the setting “%1$s” is too high. The maximum acceptable value is %2$s.',
	'ACP_JV_POKER_TOO_LONG'							=> 'The provided value for the setting “%1$s” is too long. The maximum acceptable length is %2$s.',
	'ACP_JV_POKER_TOO_SHORT'						=> 'The provided value for the setting “%1$s” is too short. The minimum acceptable length is %2$s.',
	'ACP_JV_POKER_TOO_SMALL'						=> 'The provided value for the setting “%1$s” is too low. The minimum acceptable value is %2$s.',
	'ACP_JV_POKER_TOP_USERS'						=> 'Number of champions',
	'ACP_JV_POKER_TOP_USERS_EXPLAIN'				=> 'This is the number of champions to be displayed.',
	'ACP_JV_POKER_TOUR_PLUS_DAYS'					=> 'Next tournament start',
	'ACP_JV_POKER_TOUR_PLUS_DAYS_EXPLAIN'			=> 'If the “Tournament start” is set, the starting time of the next tournament will increase by the number of days specified here when starting the tournament.',
	'ACP_JV_POKER_TOUR_START_DATE'					=> 'Tournament start',
	'ACP_JV_POKER_TOUR_START_DATE_CUR_ERROR'		=> 'The tournament start time must be higher than the current time.',
	'ACP_JV_POKER_TOUR_START_DATE_ERROR'			=> 'The specified tournament start “%s” is invalid. Please make sure that the “YYYY-MM-DD HH:MM” format was used.',
	'ACP_JV_POKER_TOUR_START_DATE_EXPLAIN'			=> 'The tournament start time.<br>Enter the date and time in 24 hour “YYYY-MM-DD HH:MM” format.<br>If leave the field empty, users will have to manually start the tournament.',
	'ACP_JV_POKER_UPDATE_PERIOD_DATE_SUBMIT'		=> 'Send data, Update date',
	'ACP_JV_POKER_UPDATE_USE_PERIOD_DATE'			=> 'Update usage date',
	'ACP_JV_POKER_UPDATE_USE_PERIOD_DATE_EXPLAIN'	=> '<strong style="color: #BC2A4D;">Attention!<br>The current usage date is retrieved and update, personal data will be transmitted and saved to the %1$s website.</strong><br>Personal data will be deleted automatically if a website is inactive for more than one month, or you can request the immediate removal of your data by Email.<br><br>
<strong><u>Personal data concerned:</u></strong><br><br>
<strong>Your username:</strong> %2$s<br>
<strong>Your E-mail address:</strong> %3$s<br>
<strong>Your IP address:</strong> %4$s<br><br>
<strong><u>Additional data:</u></strong><br><br>
<strong>Website address:</strong> %5$s<br>
<strong>phpBB version number:</strong> %6$s<br>
<strong>phpBB Holdem Póker version number:</strong> %7$s<br><br>
<strong style="color: #BC2A4D;">We declare that user activity will not be tracked and that no personal data about registered users of your forum will be stored or collected on “%8$s”!</strong>',
	'ACP_JV_POKER_USERS_PLAYED'						=> 'Played users',
	'ACP_JV_POKER_USERS_RESET'						=> 'User data reset',
	'ACP_JV_POKER_USERS_RESET_CHIPS_EXPLAIN'		=> 'The users chips balance will be automatically exchanged to %s.',
	'ACP_JV_POKER_USERS_RESET_CONFIRM'				=> 'Are you sure you want to reset the all users data?',
	'ACP_JV_POKER_USERS_RESET_EXPLAIN'				=> 'This will reset all users data.',
	'ACP_JV_POKER_USERS_RESET_PROCESSING'			=> 'Please wait…<br>%s<br>Currently processing user %s of %s.',
	'ACP_JV_POKER_USERS_RESET_SUCCESS'				=> 'Reset users data successfully.',
	'ACP_JV_POKER_USER_COLOR'						=> 'User name color',
	'ACP_JV_POKER_USER_COLOR_EXPLAIN'				=> 'If enable, the user name will be displayed on its own color.',
	'ACP_JV_POKER_USER_PROFILE'						=> 'Display on user profile',
	'ACP_JV_POKER_USER_PROFILE_EXPLAIN'				=> 'Controls whether or not to display the poker statistics on the users profile page.',
	'ACP_JV_POKER_USE_POINTS'						=> 'Use points system',
	'ACP_JV_POKER_VERSION'							=> 'Poker software version',
	'ACP_JV_POKER_VERSION_CHECK_ENABLE'				=> 'Automatic version check',
	'ACP_JV_POKER_VERSION_CHECK_ENABLE_EXPLAIN'		=> 'The automatic version control checks at regular intervals whether newer versions are released.',
	'ACP_JV_POKER_VERSION_CHECK_TITLE'				=> 'phpBB Holdem Póker - version check',
	'ACP_JV_POKER_VERSION_CHECK_TITLE_EXPLAIN'		=> 'Checks to see if your phpBB Holdem Póker installation is up to date.',
	'ACP_JV_POKER_WEBSITE_ERROR_CONNECTION'			=> 'An error occurred while retrieving. Status Code: %s, Error Code: %s',
	'ACP_JV_POKER_WEBSITE_ERROR_DATA'				=> 'No valid data was received. Try again later.',
	'ACP_JV_POKER_WEBSITE_NO_CONNECTION'			=> 'The “%s” website is currently unavailable!',

	'JVA_CORE_EXT_NOT_FOUND'						=> 'The extension cannot be enabled because the “JVA - Core” extension cannot be found!',
	'JVA_CORE_EXT_NOT_FOUND_NA'						=> 'The “JVA - Core” extension could not be found, so this area is not available!',

	'LOG_JV_POKER_DELETE_STYLE'						=> '<strong>phpBB Holdem Póker - Delete style</strong><br>» Style name: %s',
	'LOG_JV_POKER_EXT_SETTINGS'						=> '<strong>phpBB Holdem Póker - Altered extensions settings</strong>',
	'LOG_JV_POKER_INSTALL_STYLE'					=> '<strong>phpBB Holdem Póker - Install style</strong><br>» Style name: %s',
	'LOG_JV_POKER_RADIO_ADD'						=> '<strong>phpBB Holdem Póker - Create a radio station</strong><br>» Radio: %s',
	'LOG_JV_POKER_RADIO_DELETE'						=> '<strong>phpBB Holdem Póker - Delete radio station</strong><br>» Radio: %s',
	'LOG_JV_POKER_RADIO_EDIT'						=> '<strong>phpBB Holdem Póker - Edit radio station</strong><br>» Radio: %s',
	'LOG_JV_POKER_ROOM_ADD'							=> '<strong>phpBB Holdem Póker - Create room</strong><br>» Room: %s',
	'LOG_JV_POKER_ROOM_DELETE'						=> '<strong>phpBB Holdem Póker - Delete room</strong><br>» Room: %s',
	'LOG_JV_POKER_ROOM_EDIT'						=> '<strong>phpBB Holdem Póker - Edit room</strong><br>» Room: %s',
	'LOG_JV_POKER_SETTINGS'							=> '<strong>phpBB Holdem Póker - Altered settings</strong>',
	'LOG_JV_POKER_USERS_RESET'						=> '<strong>phpBB Holdem Póker - Reset users data</strong>',
	'LOG_JV_POKER_VERSION_CHECK_DISABLED'			=> '<strong>phpBB Holdem Póker - Automatic version check disabled</strong>',
	'LOG_JV_POKER_VERSION_CHECK_ENABLED'			=> '<strong>phpBB Holdem Póker - Automatic version check enabled</strong>',
));
