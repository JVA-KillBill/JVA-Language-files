<?php
/**
*
* @package JVA - Auto database backup
* @version $Id$
* @author 2011-2020 KillBill
* @copyright (c) 2014-2020 https://jv-arcade.com/ - https://jv-arcade.com/contact
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

$lang = array_merge($lang, array(
	'ACP_CAT_JV_AUTO_DATABASE'					=> 'JVA - Auto database backup',
	'ACP_JV_AUTO_DATABASE_ENABLE'				=> 'Automatic database backup',
	'ACP_CAT_JV_AUTO_DATABASE_SETTINGS'			=> 'Automatic database backup settings',
	'ACP_CAT_JV_AUTO_DATABASE_SETTINGS_EXPLAIN'	=> 'Here you can set up the automatic backup process, which will back up all the phpBB-related data. The resulting package is saved in the store/ directory. Depending on your server configuration you may be able to compress the file in a number of formats.',
	'ACP_JV_AUTO_BACKUPS'						=> 'Number of backups',
	'ACP_JV_AUTO_BACKUPS_EXPLAIN'				=> 'Here you can specify the maximum number of backups that can be stored. If you exceed this value, the oldest backup will be deleted.<br><em>If set it to 0, unlimited backups can be created.</em>',
	'ACP_JV_AUTO_DATABASE_DAYS'					=> 'Backups interval',
	'ACP_JV_AUTO_DATABASE_DAYS_EXPLAIN'			=> 'It performs automatic backups of your database in the specified days.',
	'ACP_JV_AUTO_DATABASE_OPTIMIZE'				=> 'Database optimize',
	'ACP_JV_AUTO_DATABASE_OPTIMIZE_EXPLAIN'		=> 'Optimize fragmented tables before backup to achieve better performance.',

	'LOG_JV_AUTO_DB_BACKUP'						=> '<strong>Automatic database backup</strong>',
	'LOG_JV_AUTO_DB_BACKUP_SETTINGS'			=> '<strong>Altered automatic database backup settings</strong>',
	'LOG_JV_AUTO_DB_OPTIMIZE_BACKUP'			=> '<strong>Automatic database optimize and backup</strong>',
));
