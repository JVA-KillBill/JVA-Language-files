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
	'JV_EXT_ACP_FORUM_FIRST_POST_ALWAYS_SHOW_EXPLAIN'	=> 'Dies erlaubt dir, den ersten Beitrag hervorgehoben in allen Themen oben auf allen Seiten anzuzeigen.<br><em>Bitte beachte, dass die persönlichen Beitragseinstellungen ignoriert werden, wenn dies eingeschaltet ist.</em>',
	'JV_EXT_ACP_SETTING_FIRST_POST_ALWAYS_SHOW'			=> 'Erster Beitrag auf jeder Seite',
	'JV_EXT_ACP_SETTING_FIRST_POST_ALWAYS_SHOW_EXPLAIN'	=> 'Dies erlaubt dir, in allen Foren den ersten Beitrag eines Themas hervorgehoben oben auf jeder Seite anzuzeigen. <br><em>Bitte beachte, dass das für jedes Forum so sein wird, wenn du dies auswählst.</em>',
));

?>