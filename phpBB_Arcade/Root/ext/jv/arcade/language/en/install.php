<?php
/**
*
* @package phpBB Arcade
* @version $Id: install.php 2464 2022-01-21 21:12:53Z KillBill $
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
// You don’t need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again don’t need to specify an order e.g., 'Click %sHERE%s' is fine
// Some characters you may want to copy&paste: ‚ ‘ ’ « » „ “ ” … ≧

$lang = array_merge($lang, [
	'INSTALL_ARCADE_ALL_FOUND'							=> 'All found',
	'INSTALL_ARCADE_BBCODE_HELPLINE'					=> 'Help line',
	'INSTALL_ARCADE_BBCODE_REQD'						=> 'BBCode check',
	'INSTALL_ARCADE_BBCODE_REQD_EXPLAIN'				=> '<strong>Required</strong> - some BBCode needs to be added to make the phpBB Arcade work properly.',
	'INSTALL_ARCADE_BBCODE_USAGE'						=> 'BBCode usage',
	'INSTALL_ARCADE_DIRS_FILES_REQD'					=> 'Files and Directories',
	'INSTALL_ARCADE_DIRS_FILES_REQD_EXPLAIN'			=> '<strong>Required</strong> - In order to function correctly phpBB Arcade needs to be able to access or write to certain files or directories. If you see “Not Found” you need to create the relevant file or directory. If you see “Unwritable” you need to change the permissions of the file or directory to allow phpBB Arcade to write to it.',
	'INSTALL_ARCADE_DISPLAY_ON_POSTING'					=> 'Display on posting page',
	'INSTALL_ARCADE_DONATE_TITLE'						=> 'phpBB Arcade donation',
	'INSTALL_ARCADE_FINISH'								=> 'Verification of phpBB Arcade has been successfully completed. Thank you for selecting the phpBB Arcade software.',
	'INSTALL_ARCADE_FOUND'								=> 'Found',
	'INSTALL_ARCADE_HTML_REPLACEMENT'					=> 'HTML replacement',
	'INSTALL_ARCADE_JVA_CORE_REQD'						=> 'JVA - Core version ≧ %s',
	'INSTALL_ARCADE_JVA_CORE_REQD_EXPLAIN'				=> '<strong>Required</strong> - You must use at least version “%s” of “JVA - Core” in order to use phpBB Arcade.',
	'INSTALL_ARCADE_MAIN_PAGE'							=> 'Go to phpBB Arcade ACP main page',
	'INSTALL_ARCADE_NEXT_STEP'							=> 'Proceed to the next step',
	'INSTALL_ARCADE_NOT_FOUND'							=> 'Not Found',
	'INSTALL_ARCADE_PHPBB_REQD'							=> 'phpBB version ≧ %s',
	'INSTALL_ARCADE_PHPBB_REQD_EXPLAIN'					=> '<strong>Required</strong> - You must use at least version “%s” of “phpBB” in order to use phpBB Arcade.',
	'INSTALL_ARCADE_PHP_CURL_SUPPORT'					=> 'PHP setting <var>curl</var> is available',
	'INSTALL_ARCADE_PHP_CURL_SUPPORT_EXPLAIN'			=> '<strong>Optional</strong> - This function is optional, however certain phpBB Arcade modules, such as the ACP download module will not work properly without it.',
	'INSTALL_ARCADE_PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP function getimagesize() is available',
	'INSTALL_ARCADE_PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Required</strong> - In order for phpBB Arcade to function correctly, the getimagesize function needs to be available.',
	'INSTALL_ARCADE_PHP_REQD'							=> 'PHP version ≧ %s',
	'INSTALL_ARCADE_PHP_REQD_EXPLAIN'					=> '<strong>Required</strong> - You must use at least version “%s” of PHP in order to use phpBB Arcade.',
	'INSTALL_ARCADE_PHP_SETTINGS'						=> 'PHP version and settings',
	'INSTALL_ARCADE_PHP_URL_FOPEN_SUPPORT'				=> 'PHP setting <var>allow_url_fopen</var> is enabled',
	'INSTALL_ARCADE_PHP_URL_FOPEN_SUPPORT_EXPLAIN'		=> '<strong>Optional</strong> - This setting is optional, however certain phpBB Arcade modules, such as the ACP download module will not work properly without it.',
	'INSTALL_ARCADE_REQUIREMENTS'						=> 'phpBB Arcade installation requirements.',
	'INSTALL_ARCADE_REQUIREMENTS_EXPLAIN'				=> 'Run some tests on the server to make sure, you successfully installed the phpBB Arcade. Please ensure you read through the results thoroughly and don’t proceed until all the required tests are passed. If you wish to use any of the features depending on the optional tests, you should ensure that these tests are passed also.',
	'INSTALL_ARCADE_SOFTWARE_VERSION'					=> 'Software version',
	'INSTALL_ARCADE_TEST_AGAIN'							=> 'Test again',
	'INSTALL_ARCADE_UNWRITABLE'							=> 'Unwritable',
	'INSTALL_ARCADE_VERIFY_DB'							=> 'Verify phpBB Arcade database data',
	'INSTALL_ARCADE_VERIFY_DB_ACP_MODULES'				=> 'Verify ACP modules',
	'INSTALL_ARCADE_VERIFY_DB_ARCADE_PERMISSIONS'		=> 'Verify phpBB Arcade permissions',
	'INSTALL_ARCADE_VERIFY_DB_CONFIGS'					=> 'Verify configs',
	'INSTALL_ARCADE_VERIFY_DB_DATA'						=> 'Verify database data',
	'INSTALL_ARCADE_VERIFY_DB_EXPLAIN'					=> 'It will be checked that all the arcade database data is correct in the database.',
	'INSTALL_ARCADE_VERIFY_DB_MCP_MODULES'				=> 'Verify MCP modules',
	'INSTALL_ARCADE_VERIFY_DB_PERMISSIONS'				=> 'Verify permissions',
	'INSTALL_ARCADE_VERIFY_DB_PHPBB_PERMISSIONS'		=> 'Verify phpBB permissions',
	'INSTALL_ARCADE_VERIFY_DB_TABLES'					=> 'Verify tables',
	'INSTALL_ARCADE_VERIFY_DB_UCP_MODULES'				=> 'Verify UCP modules',
	'INSTALL_ARCADE_VERIFY_ERROR_DB_VERSION'			=> 'The phpBB Arcade scan can’t be run because a newer version of the software has been detected. Please run the %sphpBB Arcade update%s.',
	'INSTALL_ARCADE_VERIFY_FILES'						=> 'Verify phpBB Arcade files',
	'INSTALL_ARCADE_VERIFY_FILES_EXIST'					=> 'Checking if files exist',
	'INSTALL_ARCADE_VERIFY_FILES_EXPLAIN'				=> 'It will be checked that all the phpBB Arcade files can be found on the server, also check for old or unused folders and files waiting to be deleted.',
	'INSTALL_ARCADE_VERIFY_OLD_FILES_EXIST'				=> 'Check old or unused folders and files',
	'INSTALL_ARCADE_WRITABLE'							=> 'Writable',
	'INS_ARCADE_ADD_ERROR_LOG'							=> 'Any occurred errors have been logged.',
	'INS_ARCADE_CONVERT_GAME_INSTALL_FILE_END'			=> 'The conversion process is complete, you can see the results below.',
	'INS_ARCADE_CONVERT_GAME_INSTALL_FILE_EXPLAIN'		=> 'Below you can see where we are in the conversion process. please don’t close your browser until the end of the process.',
	'INS_ARCADE_CONVERT_GAME_INSTALL_FILE_PROCESSING'	=> 'Please wait…<br>%1$s<br>Currently processing game installation file %2$s of %3$s.',
	'INS_ARCADE_CONVERT_GAME_INSTALL_FILE_START'		=> 'Start conversion',
	'INS_ARCADE_CONVERT_TOTAL_GAME_INSTALL_FILES'		=> 'Converted files',
	'INS_ARCADE_DATA_FILES_CORRECT'						=> 'Files with correct data',
	'INS_ARCADE_DELETE_DUPLICATE_GAME'					=> [
		1												=> 'Deleted duplicate game',
		2												=> 'Deleted duplicate games'
	],
	'INS_ARCADE_ENABLE_ERROR'							=> 'The extension can’t be activated because the version of <strong>“phpBB”</strong> is below version <strong>“%s”</strong>!',
	'INS_ARCADE_FILES_ALL_EXISTS'						=> 'All files exists',
	'INS_ARCADE_FILE_WRITE_EXPLAIN'						=> '<span style="color: #ff0000;">Warning:</span> Updating the game installation files will only succeed if the files can be written, so please make sure that the permissions are set correctly.',
	'INS_ARCADE_GAME_CONVERT_FILE'						=> 'Convert game installation files',
	'INS_ARCADE_GAME_CONVERT_FILE_EXPLAIN'				=> 'Here you have the option to convert existing game installation files to the latest version.',
	'INS_ARCADE_GAME_DATA_CORRECT'						=> 'Games with correct data',
	'INS_ARCADE_GAME_DATA_UPDATED'						=> 'Updated games',
	'INS_ARCADE_GAME_FILES_NOT_FOUND'					=> 'Game files not found',
	'INS_ARCADE_GAME_INSTALL_FILES_NOT_FOUND'			=> 'Game install files not found',
	'INS_ARCADE_GAME_INSTALL_FILES_UNWRITABLE'			=> 'Not writable files',
	'INS_ARCADE_GAME_INSTALL_FILE_UPDATED'				=> 'Updated games install files',
	'INS_ARCADE_UND_GAMES_FILESIZE'						=> 'Unspecified file size, games',
	'INS_ARCADE_UPDATE_GAME_DATA_END'					=> 'The upgrade process is complete, you can see the results below.',

	'JVA_CORE_EXT_NOT_FOUND'							=> 'The extension can’t be enabled because the “JVA - Core” extension can’t be found!'
]);
