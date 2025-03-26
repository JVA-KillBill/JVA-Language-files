<?php
/**
*
* @package JVA - phpBB Shoutbox
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
	'ACL_A_JV_SHOUTBOX_SETTINGS'		=> 'Vous pouvez modifier les paramètres de la shoutbox',
	'ACL_CAT_JV_SHOUTBOX'				=> 'Shoutbox',
	'ACL_M_JV_SHOUTBOX_DELETE'			=> 'Vous pouvez supprimer les messages des utilisateurs',
	'ACL_M_JV_SHOUTBOX_EDIT'			=> 'Vous pouvez modifier les messages des utilisateurs',
	'ACL_M_JV_SHOUTBOX_IP'				=> 'Vous pouvez voir les adresses IP des utilisateurs',
	'ACL_U_JV_SHOUTBOX_BBCODE'			=> 'Vous pouvez utiliser les BBCodes',
	'ACL_U_JV_SHOUTBOX_DELETE'			=> 'Vous pouvez supprimer vos messages',
	'ACL_U_JV_SHOUTBOX_EDIT'			=> 'Vous pouvez modifier vos messages',
	'ACL_U_JV_SHOUTBOX_FLOOD_IGNORE'	=> 'Vous pouvez ignorer l’intervalle de flood',
	'ACL_U_JV_SHOUTBOX_QUOTE'			=> 'Vous pouvez citer le message d’un autre utilisateur',
	'ACL_U_JV_SHOUTBOX_SMILIES'			=> 'Vous pouvez utiliser des smileys',
	'ACL_U_JV_SHOUTBOX_USE'				=> 'Vous pouvez utiliser la shoutbox',
	'ACL_U_JV_SHOUTBOX_VIEW'			=> 'Vous pouvez voir la shoutbox',
]);
