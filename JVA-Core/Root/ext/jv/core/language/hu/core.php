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
	'JVA_CORE'					=> 'JVA - Core',
	'JVA_CORE_ALL'				=> 'Összes',
	'JVA_CORE_ENABLE_ERROR'		=> 'A kiterjesztés nem kapcsolható be, mert a <strong>„phpBB”</strong> verziója kisebb mint <strong>„%s”</strong> verzió!',
	'JVA_CORE_SEP_DECIMAL'		=> '.',
	'JVA_CORE_SEP_THOUSANDS'	=> ',',
	'JVA_CORE_TIME_DAY'			=> [
		1						=> 'nap',
		2						=> 'nap',
	],
	'JVA_CORE_TIME_HOUR'		=> [
		1						=> 'óra',
		2						=> 'óra',
	],
	'JVA_CORE_TIME_MIN'			=> [
		1						=> 'p',
		2						=> 'p',
	],
	'JVA_CORE_TIME_MINUTE'		=> [
		1						=> 'perc',
		2						=> 'perc',
	],
	'JVA_CORE_TIME_MONTH'		=> [
		1						=> 'hónap',
		2						=> 'hónap',
	],
	'JVA_CORE_TIME_SEC'			=> [
		1						=> 'mp',
		2						=> 'mp',
	],
	'JVA_CORE_TIME_SECOND'		=> [
		1						=> 'másodperc',
		2						=> 'másodperc',
	],
	'JVA_CORE_TIME_WEEK'		=> [
		1						=> 'hét',
		2						=> 'hét',
	],
	'JVA_CORE_TIME_YEAR'		=> [
		1						=> 'év',
		2						=> 'év',
	],
	'JVA_CORE_TOTAL_DATA'		=> 'Összes adat (%s)',
	'JVA_CORE_VERSION_ERROR'	=> 'A telepített „JVA - Core” kiterjesztés nem kompatibilis ezzel a „%s” verzióval. Kérlek frissítsd a „JVA - Core” kiterjesztést.',
]);
