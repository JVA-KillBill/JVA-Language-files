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
	'JVA_CORE_ALL'						=> 'Alle',
	'JVA_CORE_ENABLE_ERROR'				=> 'Die Erweiterung kann nicht aktiviert werden, weil die Version von <strong>„phpBB“</strong> unterhalb der Version <strong>„%s“</strong> liegt!',
	'JVA_CORE_FILE_NOT_FOUND'			=> 'The „%s“ file could not be found!',
	'JVA_CORE_JS_FUNCTION_NOT_FOUND'	=> 'The „%s“ javascript function cannot be found!',
	'JVA_CORE_JS_OBJECT_NOT_FOUND'		=> 'The „%s“ javascript object cannot be found!',
	'JVA_CORE_SEP_DECIMAL'				=> '.',
	'JVA_CORE_SEP_THOUSANDS'			=> ',',
	'JVA_CORE_TIME_DAY'					=> [
		1								=> 'Tag',
		2								=> 'Tage',
	],
	'JVA_CORE_TIME_HOUR'				=> [
		1								=> 'Std.',
		2								=> 'Std.',
	],
	'JVA_CORE_TIME_MIN'					=> [
		1								=> 'Min.',
		2								=> 'Min.',
	],
	'JVA_CORE_TIME_MINUTE'				=> [
		1								=> 'Minute',
		2								=> 'Minuten',
	],
	'JVA_CORE_TIME_MONTH'				=> [
		1								=> 'Monat',
		2								=> 'Monate',
	],
	'JVA_CORE_TIME_SEC'					=> [
		1								=> 'Sek.',
		2								=> 'Sek.',
	],
	'JVA_CORE_TIME_SECOND'				=> [
		1								=> 'Sekunde',
		2								=> 'Sekunden',
	],
	'JVA_CORE_TIME_WEEK'				=> [
		1								=> 'Woche',
		2								=> 'Wochen',
	],
	'JVA_CORE_TIME_YEAR'				=> [
		1								=> 'Jahr',
		2								=> 'Jahre',
	],
	'JVA_CORE_TOTAL_DATA'				=> 'Gesamtanzahl (%s)',
	'JVA_CORE_VERSION_ERROR'			=> 'Das installierte „JVA - Core“ ist mit dieser „%s“ nicht kompatibel. Bitte aktualisiere das „JVA - Core“.',
]);
