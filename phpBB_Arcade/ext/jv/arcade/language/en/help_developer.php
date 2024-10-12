<?php
/**
*
* @package phpBB Arcade
* @version $Id: help_developer.php 2450 2021-12-13 20:24:43Z KillBill $
* @author 2011-2024 KillBill
* @copyright (c) 2014-2024 https://jv-arcade.com/ - https://jv-arcade.com/contact
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

$lang = array_merge($lang, [
	'ARCADE_ACP_HELP_FAQ_BLOCK_DATA'					=> 'Display arcade data outside arcade',
	'ARCADE_ACP_HELP_FAQ_BLOCK_GAMES'					=> 'Games',
	'ARCADE_ACP_HELP_FAQ_BLOCK_GENERAL'					=> 'General',
	'ARCADE_ACP_HELP_FAQ_BLOCK_INSTALL'					=> 'Installation/Updating/Uninstallation',
	'ARCADE_ACP_HELP_FAQ_BLOCK_MODULES'					=> 'phpBB Arcade modules',
	'ARCADE_ACP_HELP_FAQ_BLOCK_SCORING'					=> 'Scoring',
	'ARCADE_ACP_HELP_FAQ_DATA_EXT_ANSWER'				=> 'Are there extensions?',
	'ARCADE_ACP_HELP_FAQ_DATA_EXT_QUESTION'				=> 'Yes, there are extensions for the phpBB Arcade software - see: <a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/phpBB_Arcade_Extensions.html">Extensions</a>',
	'ARCADE_ACP_HELP_FAQ_GAMES_DELETE_ANSWER'			=> 'You are able to delete games by clicking the “Manage categories” or “Manage games” module in the acp and select a game to delete. Here you will be able to confirm the deletion of the files from the server, use this only if you don’t want to delete the game permanently and don’t want to reinstall it again.',
	'ARCADE_ACP_HELP_FAQ_GAMES_DELETE_QUESTION'			=> 'How do I delete games?',
	'ARCADE_ACP_HELP_FAQ_GAMES_HOW_INSTALL_ANSWER'		=> 'There are three ways to install a game.<br>
															<ul>
																<li>If you download the game using the phpBB Arcade’s built in download system you will be provided with a compressed folder that you can upload via FTP to <strong>[ROOT]/arcade/install/</strong> and install through the ACP.</li>
																<li>If you download the game using the phpBB Arcade’s built in download system you will be provided with a compressed folder that you can upload via the ACP Upload/Unpack module. After uploading, the game can be unpacked and then the game can be installed.</li>
																<li>Third option is to use FTP. Upload the already unpacked game to the correct location <strong>“[ROOT]/arcade/games/{First character}/”</strong> folder. However, this isn’t recommended because the permissions on the folders and files may be different in this case.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GAMES_HOW_INSTALL_QUESTION'	=> 'How can I install a game?',
	'ARCADE_ACP_HELP_FAQ_GAMES_INSTALL_ANSWER'			=> 'The easiest way would be to use games that are already in phpBB Arcade or IBPro tar format. The arcade will automatically detect when you upload or unpack a game. If the format isn’t good, you need to change it to the correct format, or if it doesn’t work in any way, you may want to share the game on the support site and ask for a game check.',
	'ARCADE_ACP_HELP_FAQ_GAMES_INSTALL_QUESTION'		=> 'What is the easiest way to install games?',
	'ARCADE_ACP_HELP_FAQ_GAMES_INS_FILE_ANSWER'			=> 'Yes.<br><textarea rows="30" cols="30" readonly="readonly" onclick="this.focus(); this.select();">&lt;?php
/**
*
* @package phpBB Arcade
* @version 7.7.3
* @author 2011-2024 KillBill
* @copyright (c) 2014-2024 https://jv-arcade.com/ - https://jv-arcade.com/contact
* @license https://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
*	phpBB Arcade Game Installation File
*
*	Below is some information on parameters that must be set for a game to
*	be installed into the arcade. You need this file for the game to show
*	up inside the phpBB Arcade ACP to install.
*
*	The only items that need to be set are the name, description, controller,
*	width, height, score type and score save type.
*
*	The arcade supports several score save types of games. (phpBB Arcade, IBPro,
*	IBProV32, Relax Arcade, Olympus Arcade and games that don’t submit scores)
*	Use the following constants for the score save type:
*
*	PHPBBARCADE_GAME
*	IBPRO_GAME
*	IBPROV3_GAME
*	PHPBB_RA_GAME
*	OLYMPUS_GAME
*	NOSCORE_GAME
*
*	The game control should be set using the following constants:
*
*	GAME_CONTROL_KEYBOARD
*	GAME_CONTROL_KEYBOARD_TOUCH
*	GAME_CONTROL_KEYBOARD_MOUSE
*	GAME_CONTROL_MOUSE_TOUCH
*
*	Use the GAME_CONTROL_KEYBOARD constant, if the game can only be played on a keyboard.
*	Use the GAME_CONTROL_KEYBOARD_TOUCH constant, if the game can be played on keyboard and touch screen.
*	Use the GAME_CONTROL_KEYBOARD_MOUSE constant, if the game can be played with keyboard and mouse.
*	Use the GAME_CONTROL_MOUSE_TOUCH constant, if the game can be played on mouse and touch screen.
*	If you want to create an additional description of how to play the game and with which keys you can write it into the “game_control_desc” field.
*
*	Use one of the following constants to specify the game rotation:
*
*	ARCADE_SET_DISABLED
*	ARCADE_SET_ENABLED
*
*	Use the ARCADE_SET_DISABLED constant, if the game doesn’t support portrait and landscape display.
*	Use the ARCADE_SET_ENABLED constant, if the game supports both landscape and portrait appearance.
*
*	The scoretype should be set using the following constants:
*
*	SCORETYPE_HIGH
*	SCORETYPE_LOW
*
*	SCORETYPE_HIGH should be used for games with the highest score.
*	SCORETYPE_LOW should be used in games where the lowest score is better.
*
*/

// DEVELOPERS PLEASE NOTE modified - (\'game_name\', \'game_desc\', \'game_control_desc\')
//
// All install files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Some characters you may want to copy & paste: ‚ ‘ ’ « » „ “ ” …

if (!defined(\'IN_PHPBB\') || !defined(\'IN_PHPBB_ARCADE\'))
{
	exit;
}

$game_file = basename(__FILE__, \'.\' . substr(strrchr(__FILE__, \'.\'), 1));

$game_data = array(
	\'game_name\'			=> \'Game name\',
	\'game_desc\'			=> \'Enter the description of the game here.\',
	\'game_control\'		=> GAME_CONTROL_MOUSE_TOUCH,
	\'game_control_desc\'	=> \'Enter a description of necessary control of the game.\',
	\'game_image\'			=> $game_file . \'.png\',
	\'game_scorevar\'		=> $game_file,
	\'game_width\'			=> 370,
	\'game_height\'			=> 550,
	\'game_rotatable\'		=> ARCADE_SET_DISABLED,
	\'game_scoretype\'		=> SCORETYPE_HIGH,
	\'game_save_type\'		=> PHPBBARCADE_GAME,
	\'game_inherit\'		=> \'Enter the inheritance path of the game, if necessary.\',
	\'privacy_desc\'		=> \'Enter the Game Privacy Policy here if the game requires it.\',
	\'privacy_link\'		=> \'Enter the link to the Game Privacy Policy in HTML format. If there is more than one link, enter them all in their own new line.\'
);
</textarea>',
	'ARCADE_ACP_HELP_FAQ_GAMES_INS_FILE_QUESTION'		=> 'Is there a sample install file?',
	'ARCADE_ACP_HELP_FAQ_GAMES_OWN_INS_FILE_ANSWER'		=> 'No, although its possible there are two tools in the phpBB Arcade ACP that will help in this task.<br>
															<ul>
																<li>There is a tool to create an install file from scratch. Just enter all the required information and you can have the install file downloaded, displayed or created on the server.</li>
																<li>There is a tool to download or view existing install files from the games already installed.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GAMES_OWN_INS_FILE_QUESTION'	=> 'Do I have to create the install file by hand?',
	'ARCADE_ACP_HELP_FAQ_GAMES_REQ_INSTALL_ANSWER'		=> 'If you want to upload and install a game that has already been unpacked, these are the following requirements:<br>
															In the [ROOT]/arcade/<strong>“games”</strong>/t/ folder you need to upload the main files of the game that are needed for the installation, these are the following:<br><br>
															<b>Html5</b>
															<ul>
																<li>1. test.php (Game installation file)</li>
																<li>2. test.png (Game image 60x60 px)</li>
																<li>3. index.html (The index.html file is responsible for starting the game.)</li>
															</ul>
															<br>
															<b>Flash</b>
															<ul>
																<li>1. test.php (Game installation file)</li>
																<li>2. test.png (Game image 60x60 px)</li>
																<li>3. test.swf (The test.swf file contains the data needed for the game.)</li>
																<li>4. index.htm (The index.htm is an empty file.)</li>
																<li>5. gd/ (If the game has a “gamedata” folder, rename it to “gd” because the gamedata folder name is no longer supported.)</li>
															</ul>
															<br>
															The name of the game folder must always match the name of the game installation file.
															<br><br>
															So in this case, the correct folder structure is as follows:<br>
															<ul>
																<li>1. <strong>[ROOT]/arcade/games/t/test/</strong>test.php</li>
																<li>2. <strong>[ROOT]/arcade/games/t/test/</strong>index.html (The index.html file is responsible for starting the game.)</li>
															</ul>
															<br>
															The “t” folder after the “games” folder is always meant as the first letter of the file name. Because “phpBB Arcade” places games in “ABC” order folders for a better overview.
															<br>
															The file <strong>“index.html”</strong> can only be included once. The correct filename is <strong>“index.htm”</strong> for an empty file to protect the subfolders.',
	'ARCADE_ACP_HELP_FAQ_GAMES_REQ_INSTALL_QUESTION'	=> 'What is required for the game to be installed?',
	'ARCADE_ACP_HELP_FAQ_GAMES_SAVE_TYPE_ANSWER'		=> 'The arcade supports the following game save types:<br>
															<ul>
																<li>phpBB Arcade</li>
																<li>IBPro</li>
																<li>IBPro V32</li>
																<li>Relax Arcade</li>
																<li>Olympus Arcade</li>
																<li>None scoring games</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GAMES_SAVE_TYPE_QUESTION'		=> 'Which game save types are supported?',
	'ARCADE_ACP_HELP_FAQ_GAMES_TYPE_ANSWER'				=> 'The arcade supports the following game types:<br>
															<ul>
																<li>Html5</li>
																<li>Flash - Converted to Html5.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GAMES_TYPE_QUESTION'			=> 'Which game types are supported?',
	'ARCADE_ACP_HELP_FAQ_GAMES_ZIP_ANSWER'				=> 'Yes. For correct compression, the following folder structure is required:<br>
															<ul>
																<li>test/ (Game folder)</li>
																<li>test/test.php (Game installation file)</li>
																<li>test/test.png (Game image 60x60 px)</li>
																<li>test/index.html (The index.html file is responsible for starting the game.)</li>
															</ul>
															<br>If that’s all right, you can package the game directly. The completed compressed file will be named correctly test.zip or test.tar.',
	'ARCADE_ACP_HELP_FAQ_GAMES_ZIP_QUESTION'			=> 'Can I create my own compressed file to install a game?',
	'ARCADE_ACP_HELP_FAQ_GENERAL_FEATURES_ANSWER'		=> '<ul>
																<li>Extensive games support</li>
																<li>Unlimited categories, sub-categories and links (mimics phpBB3 forums)</li>
																<li>Full ACP, MCP and UCP modules</li>
																<li>Administrator permissions for ACP modules</li>
																<li>Moderator permissions for MCP modules</li>
																<li>Global arcade based permissions</li>
																<li>Local category based permissions</li>
																<li>Password protected categories</li>
																<li>Age protected categories</li>
																<li>Very simple game installation</li>
																<li>Automatically convert all supported save type game tar files</li>
																<li>Shows who is playing which game</li>
																<li>Favorite games system</li>
																<li>Built-in game download system</li>
																<li>Detailed statistics</li>
																<li>Game rating system</li>
																<li>Game comments system</li>
																<li>Game challenge system</li>
																<li>Game tournament system</li>
																<li>Game group tournament system</li>
																<li>Game reporting system</li>
																<li>Play games regular or in a pop-up window</li>
																<li>Search system for games</li>
																<li>Points System integration</li>
																<li>Plus more…</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GENERAL_FEATURES_QUESTION'		=> 'Which features are included in phpBB Arcade?',
	'ARCADE_ACP_HELP_FAQ_GENERAL_LANGS_ANSWER'			=> '<ul>
																<li>Supported languages can be downloaded <b><a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/phpBB_Arcade_Languages.html">HERE</a></b>.</li>
																<li>If you have created a new language package, please share it with us <b><a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/phpBB_Arcade_User_Languages.html">HERE</a></b>.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GENERAL_LANGS_QUESTION'		=> 'Which languages are supported?',
	'ARCADE_ACP_HELP_FAQ_GENERAL_STYLES_ANSWER'			=> '<ul>
																<li>Supported styles can be downloaded <b><a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/phpBB_Arcade_Styles.html">HERE</a></b>.</li>
																<li>If you have a new style, please share it with us <b><a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/phpBB_Arcade_User_Styles.html">HERE</a></b>.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GENERAL_STYLES_IMG_ANSWER'		=> 'Yes. Any image located inside the default image path “[ROOT]/ext/jv/arcade/styles/all/theme/images/” can be style specific. All you have to do is placing an image of the same name inside the “[ROOT]/ext/jv/arcade/styles/your_style/theme/images/” folder. If a style doesn’t have a specific image, the default image will be used. This also applies to category images. To use style specific category images, first choose the default “[ROOT]/ext/jv/arcade/styles/all/theme/images/cats/” image while creating/editing the category and then upload an image with the same name to the “[ROOT]/ext/jv/arcade/styles/your_style/theme/images/cats/” folder.',
	'ARCADE_ACP_HELP_FAQ_GENERAL_STYLES_IMG_QUESTION'	=> 'Can I use style specific images inside the arcade?',
	'ARCADE_ACP_HELP_FAQ_GENERAL_STYLES_QUESTION'		=> 'Which styles are supported?',
	'ARCADE_ACP_HELP_FAQ_INSTALL_DB_ANSWER'				=> 'The arcade should work correctly with any database that is supported by phpBB3.',
	'ARCADE_ACP_HELP_FAQ_INSTALL_DB_QUESTION'			=> 'Which databases does the phpBB Arcade support?',
	'ARCADE_ACP_HELP_FAQ_INSTALL_INSTALL_ANSWER'		=> '<ul>
																<li>Download the latest release and unpack it.</li>
																<li>Copy the files to your server into the forum “[ROOT]/” directory while maintaining the structure of folders.</li>
																<li>Go to the Administration Control Panel and click on the “Customise” menu item, within it click on the phpBB Arcade “Enable” link to install the phpBB Arcade.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_INSTALL_INSTALL_QUESTION'		=> 'How do I install the phpBB Arcade?',
	'ARCADE_ACP_HELP_FAQ_INSTALL_UNINSTALL_ANSWER'		=> 'Go to the Administration Control Panel and click on the “Customise” menu item, within it click on the phpBB Arcade “Disable” link. After that click on the “Delete data” link, then remove all phpBB Arcade files from the server.',
	'ARCADE_ACP_HELP_FAQ_INSTALL_UNINSTALL_QUESTION'	=> 'How do I uninstall the phpBB Arcade?',
	'ARCADE_ACP_HELP_FAQ_INSTALL_UPDATE_ANSWER'			=> '<ul>
																<li>Download the latest release and unpack it.</li>
																<li>Go to the Administration Control Panel and click on the “Customise” menu item, within it click on the phpBB Arcade “Disable” link.</li>
																<li>Copy the files to your server into the forum “[ROOT]/” directory while maintaining the structure of folders.</li>
																<li>Go to the Administration Control Panel and click on the “Customise” menu item, within it click on the phpBB Arcade “Enable” link and your phpBB Arcade is updated.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_INSTALL_UPDATE_QUESTION'		=> 'How do I update the phpBB Arcade?',
	'ARCADE_ACP_HELP_FAQ_MODULES_ADD_AUTH_ANSWER'		=> 'Once the phpBB Arcade is installed, you will need to set the permissions in the ACP to use it. The arcade uses category based permissions that mimics the forum based permissions that phpBB3 uses, including the use of roles. You will need to set global phpBB Arcade user/group permissions as well. Also, you can use administrator permissions to set user/group access to phpBB Arcade ACP modules.',
	'ARCADE_ACP_HELP_FAQ_MODULES_ADD_AUTH_QUESTION'		=> 'Where are the permissions to set?/Why don’t I have permission to view/use the phpBB Arcade?',
	'ARCADE_ACP_HELP_FAQ_MODULES_ANSWER'				=> '<strong><br>The arcade includes the following ACP modules:<br></strong>
															<strong>Configuration</strong><br>
															<ul>
																<li><strong>System settings</strong> - Enables general switching on and off of systems.</li>
																<li><strong>General settings</strong> - Control general settings for the arcade.</li>
																<li><strong>Extensions settings</strong> - Control extensions settings for the arcade.</li>
																<li><strong>Game settings</strong> - Control game settings for the arcade.</li>
																<li><strong>Challenge settings</strong> - Control challenge settings for the arcade.</li>
																<li><strong>Tournament settings</strong> - Control tournament settings for the arcade.</li>
																<li><strong>Group tournament settings</strong> - Control group tournament settings for the arcade.</li>
																<li><strong>Feature settings</strong> - Control feature settings for the arcade.</li>
																<li><strong>Pages settings</strong> - Control page settings for the arcade.</li>
																<li><strong>Path settings</strong> - Control path settings for the arcade.</li>
																<li><strong>Load settings</strong> - Load settings for the arcade.</li>
																<li><strong>Activity rank settings</strong> - Activity rank settings for the arcade.</li>
															</ul><br>
															<strong>Manage arcade</strong><br>
															<ul>
																<li><strong>Manage menu</strong> - You can add or edit, delete menu buttons. The main menu buttons can only be moved or renamed.</li>
																<li><strong>Manage categories</strong> - Add, edit, delete, move, and resync categories and games.</li>
																<li><strong>Manage games</strong> - Edit/delete games.</li>
																<li><strong>Manage users</strong> - Edit scores for any of the games.</li>
																<li><strong>Manage tournaments</strong> - Allows you to create, edit and delete tournaments.</li>
																<li><strong>Manage group tournaments</strong> - Allows you to create, edit and delete group tournaments.</li>
																<li><strong>Manage Announcements</strong> - Settings/edit announcements.</li>
																<li><strong>Manage ranks</strong> - Ranks added/edit and delete.</li>
															</ul><br>
															<strong>Games feature</strong><br>
															<ul>
																<li><strong>Add games</strong> - Add a game to the arcade, multiple games can be added to a category at once.</li>
																<li><strong>Upload/Unpack games</strong> - If the installation folder contains compressed games, you can unpack or you can upload one or more files at once. After unpacking, the game(s) are ready for installation.</li>
																<li><strong>Backup games</strong> - Backup all the games in the selected categories.</li>
																<li><strong>Download games</strong> - Download games from sites that are hosting game downloads ready to use with the arcade.</li>
															</ul><br>
															<strong>Utilities</strong><br>
															<ul>
																<li><strong>View reports</strong> - View any reports submitted by users about a game.</li>
																<li><strong>Deleted games</strong> - View Deleted games and its causes.</li>
																<li><strong>Banned users</strong> - View Banned Users / unban them.</li>
																<li><strong>Download Statistics</strong> - View statistics of the download system.</li>
																<li><strong>Create game install file</strong> - Create new install file to download/view/save on the server or download/view existing games install file.</li>
																<li><strong>User guide</strong> - Displays the phpBB Arcade user guide.</li>
															</ul><br>
															<strong>Arcade logs</strong><br>
															<ul>
																<li><strong>Administration log</strong> - Admin actions are listed.</li>
																<li><strong>Moderation log</strong> - Moderator actions are listed.</li>
																<li><strong>User log</strong> - User actions are listed.</li>
																<li><strong>Error log</strong> - Various errors are listed.</li>
															</ul><br>
															<strong>Permission roles</strong><br>
															<ul>
																<li><strong>Category roles</strong> - Manage the roles for arcade category permissions.</li>
															</ul><br>
															<strong>Category based permissions</strong><br>
															<ul>
																<li><strong>Category permissions</strong> - Manage which users and groups can access which arcade categories.</li>
																<li><strong>Users’ category permissions</strong> - Assign arcade permissions to users.</li>
																<li><strong>Groups’ category permissions</strong> - Assign arcade permissions to groups.</li>
																<li><strong>Copy category permissions</strong> - Copy category permissions from one category to one or more other categories.</li>
															</ul><br>
															<strong>Permission masks</strong><br>
															<ul>
																<li><strong>View category-based permissions</strong> - View the arcade permissions assigned to the selected users/groups and categories.</li>
															</ul><br>
															<strong>Installation features</strong><br>
															<ul>
																<li><strong>Installation verify</strong> - Check whether phpBB Arcade is installed correctly.</li>
																<li><strong>Update game data</strong> - Games sizes automatic detection and update, if the data isn’t correct.</li>
																<li><strong>Convert game installation files</strong> - Converting game installation files to the latest version.</li>
															</ul><br>
															<strong>The arcade includes the following MCP modules:</strong><br>
															<ul>
																<li><strong>Manage games</strong> - Edit/move and reset games.</li>
																<li><strong>Manage tournament</strong> - Create/edit tournaments.</li>
																<li><strong>Manage group tournaments</strong> - Create/edit group tournaments.</li>
																<li><strong>Moderation log</strong> - Moderator actions are listed.</li>
															</ul><br>
															<strong>The arcade includes the following UCP modules:</strong><br>
															<ul>
																<li><strong>Manage settings</strong> - These settings controles various aspects of the arcade.</li>
																<li><strong>Game settings</strong> - Personalize settings for game page.</li>
																<li><strong>Post settings</strong> - Post personalization settings.</li>
																<li><strong>Manage favorites</strong> - You can view, highlight and delete your favorite games below.</li>
																<li><strong>Manage local storage</strong> - View and delete device browser local data.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_MODULES_AUTH_ANSWER'			=> 'To see all the modules you need to be set as a founder or have the correct administrative permissions set. If you still can’t see all the modules then most likely there are duplicate auth options in the acl_options table. Please run the install check for a list of duplicate values.',
	'ARCADE_ACP_HELP_FAQ_MODULES_AUTH_QUESTION'			=> 'Why can’t I see all the ACP modules for the arcade?',
	'ARCADE_ACP_HELP_FAQ_MODULES_DOWNLOAD_ANSWER'		=> 'The ability to download games is controlled by the arcade permissions. Set the permission how you want and users browsing the arcade will see the download links when viewing the games in the categories. To make it easier to download the games, you can enable the download listing setting in the phpBB Arcade ACP settings. This will allow others to use the “Download games” ACP module to access the downloads on your site.',
	'ARCADE_ACP_HELP_FAQ_MODULES_DOWNLOAD_QUESTION'		=> 'How do I provide game downloads to others?',
	'ARCADE_ACP_HELP_FAQ_MODULES_NO_FAV_ANSWER'			=> 'The favorite module is only visible if you have permission to do so, the permissions can only be changed by the administrator.',
	'ARCADE_ACP_HELP_FAQ_MODULES_NO_FAV_QUESTION'		=> 'Why don’t you see your favorite module?',
	'ARCADE_ACP_HELP_FAQ_MODULES_NO_GAMES_ANSWER'		=> 'To add games, first make sure that categories have been created to add them to. Use the <strong>Manage arcade</strong> ACP Module to do this. Creating them is very similar to creating forums in phpBB3.',
	'ARCADE_ACP_HELP_FAQ_MODULES_NO_GAMES_QUESTION'		=> 'Why can’t I add any games?',
	'ARCADE_ACP_HELP_FAQ_MODULES_QUESTION'				=> 'Which ACP modules does phpBB Arcade have?',
	'ARCADE_ACP_HELP_FAQ_MODULES_REQ_DOWNLOAD_ANSWER'	=> 'This module needs to have <strong>“allow_url_fopen”</strong> set to on or PHP’s <strong>cURL library</strong> installed. This can be checked by viewing the phpinfo() of your server. If the value for <strong>“allow_url_fopen”</strong> is off and the <strong>cURL library</strong> isn’t installed, the module will not work.',
	'ARCADE_ACP_HELP_FAQ_MODULES_REQ_DOWNLOAD_QUESTION'	=> 'Why doesn’t the “Download games” module ever find any games?',
	'ARCADE_ACP_HELP_FAQ_MODULES_USE_DOWNLOAD_ANSWER'	=> 'All you have to do is enter the url to the phpBB forum root of the site that is offering arcade downloads from their installation of the phpBB Arcade. You will then see a listing of games available to download. If the game is highlighted in green, this is because the same game was found on your server. Please keep in mind that the downloads are still controlled by the permissions on the site you are downloading them from. So you might have to be logged in and/or be a member of a special usergroup to download games. Contact the site admininstrator if you have any questions.<br><br><a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/dev/images/acp_download_games.png"><img src="https://jv-arcade.com/dev/images/acp_download_games.png" width="300" alt="ACP Download games" title="ACP Download games"></a>',
	'ARCADE_ACP_HELP_FAQ_MODULES_USE_DOWNLOAD_QUESTION'	=> 'How do I use the “Download games” module?',
	'ARCADE_ACP_HELP_FAQ_SCORING_GUEST_SAVE_ANSWER'		=> 'Even if you give the guest usergroup the correct permission they can’t submit scores to the arcade. This is by design.',
	'ARCADE_ACP_HELP_FAQ_SCORING_GUEST_SAVE_QUESTION'	=> 'Why can’t guests submit scores even though they have the correct permissions?',
	'ARCADE_ACP_HELP_FAQ_SCORING_SAVE_ANSWER'			=> 'The first thing to check is that the game has a type supported by the arcade and that the score variable is set correctly. The last thing to check is the cookie settings in the ACP. If your site url is <strong>http://www.example.com</strong> then the cookie domain should be <strong>example.com</strong>, as well the cookie security must be disabled in the ACP, because the cookie security supports only the phpBB Arcade game type.',
	'ARCADE_ACP_HELP_FAQ_SCORING_SAVE_QUESTION'			=> 'Why won’t my scores save?',
	'ARCADE_ACP_HELP_FAQ_SCORING_TEST_ANSWER'			=> 'This will now allow you to play games in a category and have no data or scores saved. This allows you to test out games to make sure they function correctly. Once finished with a game you will be displayed a message detailing what would have occured. At the end of the game, administrators will receive detailed information about the game if the “phpBB-DEBUG” system is enabled.<br><em>To enable the “phpBB-DEBUG” system, we need to install the “JVA - Debug” extension.</em>',
	'ARCADE_ACP_HELP_FAQ_SCORING_TEST_CAT_ANSWER'		=> 'Go to the “Manage arcade” ACP module. Click edit on the category. You want to enable “Test mode” and then set the “Test mode” option to yes.',
	'ARCADE_ACP_HELP_FAQ_SCORING_TEST_CAT_QUESTION'		=> 'How do I enable “Test mode” for a category?',
	'ARCADE_ACP_HELP_FAQ_SCORING_TEST_QUESTION'			=> 'What does “Test mode” do?',
]);
