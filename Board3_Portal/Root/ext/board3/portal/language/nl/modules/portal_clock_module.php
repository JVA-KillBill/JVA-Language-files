<?php
/**
*
* @package Board3 Portal v2.3 - Clock
* @copyright (c) 2013 Board3 Group ( www.board3.de )
* @license GNU General Public License, version 2 (GPL-2.0-only)
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
$lang = array_merge($lang, [
	'ACP_PORTAL_CLOCK_SETTINGS'		=> 'Klokinstellingen',
	'ACP_PORTAL_CLOCK_SETTINGS_EXP'	=> 'Hier kan je het klokblok aanpassen',
	'ACP_PORTAL_CLOCK_SRC'			=> 'Klok',
	'ACP_PORTAL_CLOCK_SRC_EXP'		=> 'Vul de bestandsnaam van je klok in. De klok moet in styles/*jouwstijl*/theme/images/portal/ staan.',

	'CLOCK'							=> 'Klok',
]);
