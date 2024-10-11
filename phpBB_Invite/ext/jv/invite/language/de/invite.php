<?php
/**
*
* @package JVA - phpBB Invite
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

//These are used through out the invite
$lang = array_merge($lang, [
	'JVA_CORE_EXT_NOT_FOUND'			=> 'Diese Erweiterung kann nicht aktiviert werden, weil die „JVA - Core“ Extension nicht gefunden wurde!',
	'JV_INVITE'							=> 'Einladen',
	'JV_INVITED_BY_USERS'				=> [
		1								=> 'Mitglied eingeladen von %s',
		2								=> 'Mitglieder eingeladen von %s',
	],
	'JV_INVITED_MEMBERLIST_VIEWING'		=> 'Eingeladene Mitglieder anzeigen',
	'JV_INVITED_MEMBERS'				=> [
		1								=> 'Eingeladenes Mitglied',
		2								=> 'Eingeladene Mitglieder',
	],
	'JV_INVITE_DELETE_CONFIRM'			=> 'Falls du die Einladung löschen möchtest, klicke %sHIER%s.',
	'JV_INVITE_DELETE_SUCCESS'			=> [
		1								=> 'Deine Einladung wurde erfolgreich gelöscht.',
		2								=> 'Deine Einladungen wurden erfolgreich gelöscht.',
	],
	'JV_INVITE_DISABLED'				=> 'Das Einladungssystem ist derzeit deaktiviert!',
	'JV_INVITE_EMAIL_NOT_MODIFY'		=> 'Kann nicht geändert werden!',
	'JV_INVITE_EXP'						=> 'Lade einen Freund in unser Forum ein',
	'JV_INVITE_INVITED'					=> 'Eingeladen von',
	'JV_INVITE_KEY_ERROR'				=> '<div class="jv_invite_error">Die Einladung ist ungültig!</div>',
	'JV_INVITE_MEMBER'					=> [
		1								=> '%s Mitglied',
		2								=> '%s Mitglieder',
	],
	'JV_INVITE_NOTIFICATION_MANAGE_ADD'	=> [
		1								=> 'Der Benutzer %s hat dir %s Einladung zugewiesen.',
		2								=> 'Der Benutzer %s hat dir %s Einladungen zugewiesen.',
	],
	'JV_INVITE_NOTIFICATION_MANAGE_DEL'	=> 'Der Benutzer %s hat alle deine Einladungen gelöscht.',
	'JV_INVITE_NOTIFICATION_MANAGE_SET'	=> 'Der Benutzer %s hat die Anzahl deiner Einladungen geändert.<br> Neues Guthaben: %s.',
	'JV_INVITE_NO_SELECTED_USERS'		=> 'Das ausgewählte Mitglied hat bisher niemanden eingeladen.',
	'JV_INVITE_NO_USERS'				=> 'Keine eingeladenen Mitglieder.',
	'JV_INVITE_PETITION'				=> [
		1								=> 'Einladungsanfrage erhalten! Derzeitige Anzahl an Anfragen: <b>%s</b> Einladung.',
		2								=> 'Einladungsanfrage erhalten! Derzeitige Anzahl an Anfragen: <b>%s</b> Einladungen.',
	],
	'JV_INVITE_REGISTRATION'			=> '<div class="jv_invite_error">Die Registrierung ist zurzeit nur mit einer Einladung möglich!</div>',
	'JV_INVITE_REGISTRATION_DISABLE'	=> 'Die Registrierungseinladung ist zeitweilig abgeschaltet, versuche es bitte später noch einmal.',
]);
