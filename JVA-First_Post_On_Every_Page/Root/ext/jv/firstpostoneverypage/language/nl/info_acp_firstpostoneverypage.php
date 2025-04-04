<?php
/**
*
* @package JVA - First Post On Every Page
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
	'JV_EXT_ACP_FORUM_FIRST_POST_ALWAYS_SHOW_EXPLAIN'	=> 'Staat je toe om het eerste bericht in alle onderwerpen bovenaan op elke pagina gemarkeerd weer te geven.<br><em>Let op: als je dit inschakelt, worden de aangepaste bericht instellingen genegeerd.</em>',
	'JV_EXT_ACP_SETTING_FIRST_POST_ALWAYS_SHOW'			=> 'Eerste bericht op elke pagina',
	'JV_EXT_ACP_SETTING_FIRST_POST_ALWAYS_SHOW_EXPLAIN'	=> 'Staat je toe om het eerste bericht in alle onderwerpen bovenaan op elke pagina gemarkeerd weer te geven.<br><em>Let op: als je dit inschakelt, staat dit in elk forum.</em>',
]);
