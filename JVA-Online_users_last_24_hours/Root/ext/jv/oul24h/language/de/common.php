<?php
/**
*
* @package JVA - Online users last 24 hours
* @version $Id$
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

$lang = array_merge($lang, array(
	'JVA_CORE_EXT_NOT_FOUND'	=> 'Diese Erweiterung kann nicht aktiviert werden, weil die „JVA - Core“ Extension nicht gefunden wurde!',

	'JV_OUL24H'					=> '<strong>(%s)</strong> Benutzer haben die Seite in den letzten 24 Stunden besucht.',
	'JV_OUL24H_USERS'			=> 'Das waren: (Registrierte: <strong>%s</strong> &bull; Unsichtbare: <strong>%s</strong> &bull; Gäste: <strong>%s</strong> &bull; Bots: <strong>%s</strong>)',
));
