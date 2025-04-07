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
	'JVA_CORE_ALL'						=> 'Tout',
	'JVA_CORE_ENABLE_ERROR'				=> 'L’extension ne peut pas être activée car la version de <strong>« phpBB »</strong> est inférieure à la version <strong>« %s »</strong>!',
	'JVA_CORE_FILE_NOT_FOUND'			=> 'Le fichier « %s » est introuvable !',
	'JVA_CORE_JS_FUNCTION_NOT_FOUND'	=> 'La fonction javascript « %s » est introuvable !',
	'JVA_CORE_JS_OBJECT_NOT_FOUND'		=> 'L’objet javascript « %s » est introuvable !',
	'JVA_CORE_SEP_DECIMAL'				=> ',',
	'JVA_CORE_SEP_THOUSANDS'			=> '.',
	'JVA_CORE_TIME_DAY'					=> [
		1								=> 'jour',
		2								=> 'jours',
	],
	'JVA_CORE_TIME_HOUR'				=> [
		1								=> 'heure',
		2								=> 'heures',
	],
	'JVA_CORE_TIME_MIN'					=> [
		1								=> 'min',
		2								=> 'min',
	],
	'JVA_CORE_TIME_MINUTE'				=> [
		1								=> 'minute',
		2								=> 'minutes',
	],
	'JVA_CORE_TIME_MONTH'				=> [
		1								=> 'mois',
		2								=> 'mois',
	],
	'JVA_CORE_TIME_SEC'					=> [
		1								=> 'sec',
		2								=> 'sec',
	],
	'JVA_CORE_TIME_SECOND'				=> [
		1								=> 'second',
		2								=> 'secondes',
	],
	'JVA_CORE_TIME_WEEK'				=> [
		1								=> 'semaine',
		2								=> 'semaines',
	],
	'JVA_CORE_TIME_YEAR'				=> [
		1								=> 'année',
		2								=> 'annés',
	],
	'JVA_CORE_TOTAL_DATA'				=> 'Données totales (%s)',
	'JVA_CORE_VERSION_ERROR'			=> 'L’extension « JVA - Core » installée n’est pas compatible avec cette « %s » version. Veuillez mettre à jour la « JVA - Core » extension.',
]);
