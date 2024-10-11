<?php
/**
*
* @package JVA - First Post On Every Page
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
	'JV_EXT_ACP_FORUM_FIRST_POST_ALWAYS_SHOW_EXPLAIN'	=> 'Lehetővé teszi, hogy az összes témában lévő első hozzászólás, kiemelve jelenjen meg minden oldal tetején.<br><em>Vedd figyelembe, ha ezt bekapcsolod, akkor az egyéni hozzászólás beállítás nem lesz figyelembe véve.</em>',
	'JV_EXT_ACP_SETTING_FIRST_POST_ALWAYS_SHOW'			=> 'Első hozzászólás minden oldalon',
	'JV_EXT_ACP_SETTING_FIRST_POST_ALWAYS_SHOW_EXPLAIN'	=> 'Lehetővé teszi, hogy az összes fórumban lévő első hozzászólás, kiemelve jelenjen meg minden oldal tetején.<br><em>Vedd figyelembe, ha ezt bekapcsolod, akkor ez lesz érvényben minden fórumon.</em>',
));

?>