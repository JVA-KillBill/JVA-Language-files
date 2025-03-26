<?php
/**
*
* @package JVA - Core
* @version $Id$
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

$lang = array_merge($lang, [
	'ACP_CAT_JVA_CORE'						=> 'JVA - Core',
	'ACP_JVA_CORE'							=> 'JVA - Core extension',
	'ACP_JVA_CORE_DB_VERSSION'				=> 'Database version:',
	'ACP_JVA_CORE_EXPLAIN'					=> 'The “JVA - Core” extension contains many functions that can be freely used by other extensions. The goal is to avoid having to place these functions in each extension, thus avoiding duplication and reducing data loading time. The available functions of “JVA - Core” are constantly expanding, which affects PHP, Html and JavaScript functions.',
	'ACP_JVA_CORE_FILE_VERSSION'			=> 'File version:',
	'ACP_JVA_CORE_MAIN'						=> 'Main',
	'ACP_JVA_CORE_VERSION_ERROR'			=> 'Attention, the version number of the file and database does not match!<br><br>If an update has been made, then the extension must be disabled before uploading new files and enabled again after a successful file upload.',

	'JVA_CORE_EXT_DETECT_DISABLED'			=> 'We have detected that <strong>“%s”</strong> is installed but currently disabled.',
	'JVA_CORE_EXT_DETECT_ENABLED'			=> 'We have detected that <strong>“%s”</strong> is installed and currently enabled.',
	'JVA_CORE_NO_SELECT_GROUP'				=> 'You didn’t select group.',
	'JVA_CORE_POINTS_SYSTEM_SETTINGS'		=> 'Points system settings',
	'JVA_CORE_SELECT_GROUP'					=> 'Select group',
	'JVA_CORE_SETTINGS'						=> 'General settings',
	'JVA_CORE_SETTINGS_EXPLAIN'				=> 'Here you can customize the general settings used by the extension.',
	'JVA_CORE_USE_POINTS_SYSTEM'			=> 'Enable points system',
	'JVA_CORE_USE_POINTS_SYSTEM_EXPLAIN'	=> 'The points system will be used if you enable it here, and if the points system itself has also been enabled.',

	'LOG_JVA_CORE_CONFIG_SETTINGS'			=> '<strong>Altered settings</strong><br>» %s',
]);
