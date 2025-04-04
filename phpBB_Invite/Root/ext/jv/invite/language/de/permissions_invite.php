<?php
/**
*
* @package JVA - phpBB Invite
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

//These are used through out the invite

// Define categories and permission types
$lang = array_merge($lang, [
	'ACL_A_JV_INVITE_CONFIG'		=> 'Kann Einladungen konfigurieren',
	'ACL_A_JV_INVITE_DELETE'		=> 'Kann Einladungen löschen',
	'ACL_A_JV_INVITE_PEND'			=> 'Kann ausstehende Einladungen verwalten',
	'ACL_A_JV_INVITE_REQUEST'		=> 'Kann Einladungen verwalten',
	'ACL_A_JV_INVITE_SEND'			=> 'Kann Einladungen Mitgliedern zuweisen',
	'ACL_A_JV_INVITE_SYNC'			=> 'Kann Daten synchronisieren',
	'ACL_A_JV_INVITE_USERS_LIST'	=> 'Kann die Liste eingeladener Mitglieder einsehen',
	'ACL_CAT_JV_INVITE'				=> 'Einladen',
	'ACL_M_JV_INVITE_REQUEST_AP'	=> 'Kann Einladungsanfragen verwalten',
	'ACL_U_JV_INVITE_DELETE'		=> 'Kann Einladung zurückziehen<br><em>Benutzer kann eine Einladung, die er vergeben hat, abbrechen.</em>',
	'ACL_U_JV_INVITE_REQUEST'		=> 'Kann Einladung anfordern',
	'ACL_U_JV_INVITE_RESTORE'		=> 'Kann gelöschte Einladungen wiederherstellen',
	'ACL_U_JV_INVITE_UNLIMITED'		=> 'Kann unbegrenzt Einladungen haben',
	'ACL_U_JV_INVITE_USER'			=> 'Kann neue Mitglieder zur Webseite einladen',
]);
