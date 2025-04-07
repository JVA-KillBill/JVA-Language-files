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
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// Some characters you may want to copy&paste: ‚ ‘ ’ « » „ “ ” …

$lang = array_merge($lang, [
	'JVA_CORE'							=> 'JVA - Core',
	'JVA_CORE_ALL'						=> 'All',
	'JVA_CORE_ENABLE_ERROR'				=> 'The extension can not be activated because the version of <strong>“phpBB”</strong> is below version <strong>“%s”</strong>!',
	'JVA_CORE_FILE_LOAD_ERROR'			=> 'The “%s” file could not be loaded.',
	'JVA_CORE_JS_FUNCTION_NOT_FOUND'	=> 'The „%s“ javascript function cannot be found!',
	'JVA_CORE_JS_OBJECT_NOT_FOUND'		=> 'The “%s” javascript object cannot be found!',
	'JVA_CORE_SEP_DECIMAL'				=> '.',
	'JVA_CORE_SEP_THOUSANDS'			=> ',',
	'JVA_CORE_TIME_DAY'					=> [
		1								=> 'day',
		2								=> 'days',
	],
	'JVA_CORE_TIME_HOUR'				=> [
		1								=> 'hour',
		2								=> 'hours',
	],
	'JVA_CORE_TIME_MIN'					=> [
		1								=> 'min',
		2								=> 'mins',
	],
	'JVA_CORE_TIME_MINUTE'				=> [
		1								=> 'minute',
		2								=> 'minutes',
	],
	'JVA_CORE_TIME_MONTH'				=> [
		1								=> 'month',
		2								=> 'months',
	],
	'JVA_CORE_TIME_SEC'					=> [
		1								=> 'sec',
		2								=> 'secs',
	],
	'JVA_CORE_TIME_SECOND'				=> [
		1								=> 'second',
		2								=> 'seconds',
	],
	'JVA_CORE_TIME_WEEK'				=> [
		1								=> 'week',
		2								=> 'weeks',
	],
	'JVA_CORE_TIME_YEAR'				=> [
		1								=> 'year',
		2								=> 'years',
	],
	'JVA_CORE_TOTAL_DATA'				=> 'Total data (%s)',
	'JVA_CORE_VERSION_ERROR'			=> 'The installed “JVA - Core” is not compatible with this “%s” version. Please update the “JVA - Core”.',
]);
