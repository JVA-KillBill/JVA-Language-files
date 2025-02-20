<?php
/**
*
* @package phpBB Arcade
* @version $Id: info_ucp_arcade.php 2480 2022-02-02 15:07:28Z Scanialady $
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
// You don’t need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again don’t need to specify an order e.g., 'Click %sHERE%s' is fine
// Some characters you may want to copy&paste: ‚ ‘ ’ « » „ “ ” …

//Arcade
$lang = array_merge($lang, [
	'UCP_ARCADE'								=> 'phpBB Arcade',
	'UCP_ARCADE_BOARD_SESSION'					=> 'Display board session time',
	'UCP_ARCADE_BOARD_SESSION_EXPLAIN'			=> 'A countdown of the forum session is displayed above the game platform. If the countdown reaches zero, you will be automatically logged out of the forum.',
	'UCP_ARCADE_BUTTON_STYLE'					=> 'Menu button style',
	'UCP_ARCADE_BUTTON_WITHOUT_TEXT'			=> 'Button without text',
	'UCP_ARCADE_BUTTON_WITH_TEXT'				=> 'Button with text',
	'UCP_ARCADE_CAT_GAMES_STYLE'				=> 'Category games style',
	'UCP_ARCADE_CAT_STYLE'						=> 'Category style',
	'UCP_ARCADE_DARK'							=> 'Dark',
	'UCP_ARCADE_DELETE_FAVORITE'				=> [
		1										=> 'Delete favorite game',
		2										=> 'Delete favorite games',
	],
	'UCP_ARCADE_DELETE_FAVORITE_CONFIRM'		=> [
		1										=> 'Are you sure you want to delete this favorite game?',
		2										=> 'Are you sure you want to delete these favorite games?',
	],
	'UCP_ARCADE_DELETE_FAVORITE_SUCCESS'		=> [
		1										=> 'Favorite game successfully deleted.',
		2										=> 'Favorite games successfully deleted.',
	],
	'UCP_ARCADE_DEVICES_ALL'					=> 'All devices',
	'UCP_ARCADE_DEVICES_TOUCH_SCREEN'			=> 'Touch screen devices',
	'UCP_ARCADE_DISPLAY_GAME_IMAGE'				=> 'Display game image',
	'UCP_ARCADE_DISPLAY_POPUP_ICON'				=> 'Display popup icon',
	'UCP_ARCADE_EVERYWHERE'						=> 'Everywhere',
	'UCP_ARCADE_FAVORITES'						=> 'Manage favorites',
	'UCP_ARCADE_FAVORITES_EXPLAIN'				=> 'You can view, highlight and delete your favorite games below.',
	'UCP_ARCADE_GAME'							=> 'Game settings',
	'UCP_ARCADE_GAME_AUTO_ZOOM'					=> 'Automatically zoom in on a game',
	'UCP_ARCADE_GAME_AUTO_ZOOM_EXPLAIN'			=> 'If the space assigned to the game is larger than the size of the game, the game will be automatically magnified.<br><em class="arcade_attent">Note that this setting overrides enabling custom size.</em>',
	'UCP_ARCADE_GAME_BORDER_ENABLE'				=> 'Display border around game',
	'UCP_ARCADE_GAME_CUSTOM_SIZE'				=> 'Enable custom size',
	'UCP_ARCADE_GAME_CUSTOM_SIZE_EXPLAIN'		=> 'If you enable it, the maximum size you define will be used.<br><em>Note that if the game has less space available than the size you set, the game will automatically be adjusted to the size of the available space. Because the software does not allow appearance outside the playing field under any circumstances.</em>',
	'UCP_ARCADE_GAME_FILTER_KEYBOARD'			=> 'Filter out keyboard games',
	'UCP_ARCADE_GAME_FILTER_KEYBOARD_EXPLAIN'	=> 'Here you have the option to filter out games that require the use of a keyboard.',
	'UCP_ARCADE_GAME_FULLSCREEN'				=> 'Start game in full screen',
	'UCP_ARCADE_GAME_FULLSCREEN_ALL'			=> 'Full screen device',
	'UCP_ARCADE_GAME_FULLSCREEN_ALL_EXPLAIN'	=> 'If “Start game in full screen” is enabled, you can specify whether it is valid for all devices or only for touch screen devices.',
	'UCP_ARCADE_GAME_FULLSCREEN_EXPLAIN'		=> 'If you enable it, clicking the start button in the pre-game introduction will start the game in full screen.',
	'UCP_ARCADE_GAME_INTRO_STYLE'				=> 'Game introductory style',
	'UCP_ARCADE_GAME_JUMP_TOP'					=> 'Automatic top position',
	'UCP_ARCADE_GAME_JUMP_TOP_EXPLAIN'			=> 'If you scroll the game from the set position and then click on the game, it will automatically return to the set position.',
	'UCP_ARCADE_GAME_LANDSCAPE_WIDTH'			=> 'Landscape game width',
	'UCP_ARCADE_GAME_LANDSCAPE_WIDTH_EXPLAIN'	=> 'For landscape games, the width specified here can be the maximum size.',
	'UCP_ARCADE_GAME_MENU_ENABLE'				=> 'Enable menu',
	'UCP_ARCADE_GAME_MENU_ENABLE_EXPLAIN'		=> 'A glued menu with several buttons is assigned to the introduction and the game. This gives you access to a range of information and settings while you play.',
	'UCP_ARCADE_GAME_MENU_POSITION'				=> 'Menu position',
	'UCP_ARCADE_GAME_ORIENTATION_EXPLAIN'		=> 'If the game supports landscape and portrait, it will be displayed as set here.<br><em>Rotating the game is also possible during the game.<br>For rotatable devices, the position of the device will be taken into account.</em>',
	'UCP_ARCADE_GAME_OVER_ANIMATION'			=> 'Playing animation at the end of the game',
	'UCP_ARCADE_GAME_OVER_ANIMATION_SOUND'		=> 'Enable animation sound',
	'UCP_ARCADE_GAME_OVER_RANDOM_GAMES'			=> 'Display random games at the end of the game',
	'UCP_ARCADE_GAME_OVER_SOUND'				=> 'Playing game over sound at the end of the game',
	'UCP_ARCADE_GAME_OVER_SUBMIT'				=> 'Allow submit score',
	'UCP_ARCADE_GAME_OVER_SUBMIT_EXPLAIN'		=> 'If you don’t enable it, the game will not submit our score either automatically or after pressing the “Submit” button. Instead of submitting the score, a “Game Over” interface will open, allowing you to play again the game immediately or to submit your score.',
	'UCP_ARCADE_GAME_PORTRAIT_HEIGHT'			=> 'Portrait game height',
	'UCP_ARCADE_GAME_PORTRAIT_HEIGHT_EXPLAIN'	=> 'For portrait games, the height specified here may be the maximum size.',
	'UCP_ARCADE_GAME_PRELOADER'					=> 'Disable preloaders',
	'UCP_ARCADE_GAME_PRELOADER_EXPLAIN'			=> 'You can disable preloaders here if it bothers you, but note that, when you disable the preloaders, and if your internet connection is slow, you will only see an empty space for a longer period of time while loading.',
	'UCP_ARCADE_GAME_RESIZE_BUTTONS'			=> 'Enable resize buttons',
	'UCP_ARCADE_GAME_RESIZE_BUTTONS_EXPLAIN'	=> 'As an additional option, custom resize buttons are added. The buttons are only active when you are playing in a normal window and the window is in desktop view.',
	'UCP_ARCADE_GAME_SESSION'					=> 'Display game session time',
	'UCP_ARCADE_GAME_SESSION_EXPLAIN'			=> 'A countdown of the game session is displayed above the game platform. If the countdown reaches zero it is certain that the game will not save your score.',
	'UCP_ARCADE_GAME_VERTICAL_POS'				=> 'Game vertical position',
	'UCP_ARCADE_GAME_VERTICAL_POS_ACTIVE'		=> 'Game vertical position is active',
	'UCP_ARCADE_GAME_VERTICAL_POS_ACTIVE_EXP'	=> 'This setting only takes effect when the middle position is set.',
	'UCP_ARCADE_GAME_VERTICAL_POS_EXPLAIN'		=> 'If the height of the screen is higher than the height of the game, the game will be adjusted to the position set here.',
	'UCP_ARCADE_LIGHT'							=> 'Light',
	'UCP_ARCADE_LOCAL_STORAGE'					=> 'Manage local storage',
	'UCP_ARCADE_LOCAL_STORAGE_DEL_CONFIRM'		=> 'Are you sure you want to delete stored data from this browser?',
	'UCP_ARCADE_LOCAL_STORAGE_EMPTY'			=> 'In this browser, the local storage is empty.',
	'UCP_ARCADE_LOCAL_STORAGE_EXPLAIN'			=> 'Here you can see or delete the data in the local storage of the browser you are currently using.<br>Various data can also be included in the local storage, such as: User and website settings, game progress data.<br><em>Please note that the data retrieval is exclusive to this website, device and browser.</em>',
	'UCP_ARCADE_LOCAL_STORAGE_NOJS'				=> 'The browser does not allow "JavaScript", so local storage is not available!',
	'UCP_ARCADE_LOCAL_STORAGE_PRIVATE'			=> 'The browser is in “Private” mode, so local storage is not available!',
	'UCP_ARCADE_MAX_FAV'						=> 'You have reached the maximum number of %s favorite games to choose from.',
	'UCP_ARCADE_MIDDLE'							=> 'Middle',
	'UCP_ARCADE_NOTIFICATION_TYPE_GROUP_TOUR'	=> 'Arcade group tournament',
	'UCP_ARCADE_NO_PERM_PM_LOSS_HIGHSCORE'		=> 'You don’t have permission to receive personal messages about loss of a trophy.',
	'UCP_ARCADE_ONLY_POPUP_FULLSCREEN'			=> 'Only Pop-up/full screen',
	'UCP_ARCADE_PLAY_INFO_BOX'					=> 'Info box position',
	'UCP_ARCADE_PLAY_INFO_BOX_ENABLE'			=> 'Enable info box',
	'UCP_ARCADE_PLAY_INFO_BOX_EXPLAIN'			=> 'The information box will be displayed in the specified position.',
	'UCP_ARCADE_PLAY_MOBILE_SCROLL'				=> 'Enable scroll bar in mobile view',
	'UCP_ARCADE_PLAY_MOBILE_SCROLL_EXPLAIN'		=> 'In Mobile view, you have the option to disable the web scroller if this is bothering you.<br><em>Note that you can achieve this even if you turn off the backlight.</em>',
	'UCP_ARCADE_POPUP_VERTICAL_POS'				=> 'Popup vertical position',
	'UCP_ARCADE_POPUP_VERTICAL_POS_EXPLAIN'		=> 'If the height of the screen is greater than the height of the pop-up window, the new window will be adjusted to the position set here.',
	'UCP_ARCADE_POST'							=> 'Post settings',
	'UCP_ARCADE_RESET_SETTINGS_CONFIRM'			=> 'Are you sure you want to reset all your arcade settings to their default settings?',
	'UCP_ARCADE_SELECTED_HIGHLIGHT'				=> 'Selected highlight',
	'UCP_ARCADE_SELECTED_HIGHLIGHT_REMOVE'		=> 'Selected highlight remove',
	'UCP_ARCADE_SEND_PM_EXPLAIN'				=> 'When you lose a highscore or challenge to a user, a private message will be sent to notify you about it.',
	'UCP_ARCADE_SETTINGS'						=> 'General settings',
	'UCP_ARCADE_TOP'							=> 'Top',
	'UCP_ARCADE_USER_INFO'						=> 'User Information block replacement',
	'UCP_ARCADE_USER_INFO_EXPLAIN'				=> 'Here you can replace the user information block in the welcome block, instead you can choose to display the most played games.<br><em>This option has no effect on the challenge and tournament pages.</em>',
	'UCP_CAT_ARCADE'							=> 'Arcade',
	'UCP_CHALLENGE_ENABLED'						=> 'Enable challenge',
	'UCP_CHALLENGE_ENABLED_EXPLAIN'				=> 'When enabled, users will challenge each other to a duel in games.',
]);
