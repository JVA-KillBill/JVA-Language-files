<?php
/**
*
* @package JVA - phpBB Shoutbox
* @version $Id$
* @author 2011-2024 KillBill
* @copyright (c) 2014-2024 https://jv-arcade.com/ - https://jv-arcade.com/contact
* @license https://jv-arcade.com/License.html JVA License v1
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
	'ACL_A_JV_SHOUTBOX_SETTINGS'		=> 'Kann Shoutbox-Einstellungen verwalten',
	'ACL_CAT_JV_SHOUTBOX'				=> 'Shoutbox',
	'ACL_M_JV_SHOUTBOX_DELETE'			=> 'Kann Nachrichten der Benutzer löschen',
	'ACL_M_JV_SHOUTBOX_EDIT'			=> 'Kann Nachrichten der Benutzer bearbeiten',
	'ACL_M_JV_SHOUTBOX_IP'				=> 'Kann IP-Adressen der Benutzer sehen',
	'ACL_U_JV_SHOUTBOX_BBCODE'			=> 'Kann BBCodes benutzen',
	'ACL_U_JV_SHOUTBOX_DELETE'			=> 'Kann eigene Shoutbox-Nachrichten löschen',
	'ACL_U_JV_SHOUTBOX_EDIT'			=> 'Kann eigene Shoutbox-Nachrichten bearbeiten',
	'ACL_U_JV_SHOUTBOX_FLOOD_IGNORE'	=> 'Kann Flood-Begrenzung ignorieren',
	'ACL_U_JV_SHOUTBOX_QUOTE'			=> 'Kann Shoutbox-Nachrichten anderer Benutzer zitieren',
	'ACL_U_JV_SHOUTBOX_SMILIES'			=> 'Kann Smilies benutzen',
	'ACL_U_JV_SHOUTBOX_USE'				=> 'Kann die Shoutbox benutzen',
	'ACL_U_JV_SHOUTBOX_VIEW'			=> 'Kann die Shoutbox sehen',
));
