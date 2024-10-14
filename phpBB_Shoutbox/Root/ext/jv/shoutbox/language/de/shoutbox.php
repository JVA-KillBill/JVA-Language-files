<?php
/**
*
* @package JVA - phpBB Shoutbox
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
	'JV_SHOUTBOX'							=> 'Shoutbox',
	'JV_SHOUTBOX_AJAX_ERROR'				=> 'Während der Ausführung ist ein Fehler aufgetreten.',
	'JV_SHOUTBOX_AUTO_REFRESH_TIME_TITLE'	=> 'Aktualisiert automatisch alle %d Sekunden',
	'JV_SHOUTBOX_BBCODES'					=> 'BBCodes',
	'JV_SHOUTBOX_BBCODES_FAQ'				=> 'BBCode FAQ',
	'JV_SHOUTBOX_CLOSE'						=> 'Shoutbox schließen',
	'JV_SHOUTBOX_CONFIRM_DELETE_MSG'		=> 'Bist du sicher, dass du diese Nachricht löschen willst?',
	'JV_SHOUTBOX_CUSTOM_BBCODES'			=> 'Benutzerdefinierte BBCodes',
	'JV_SHOUTBOX_DELETE_MESSAGE'			=> 'Nachricht löschen',
	'JV_SHOUTBOX_EDIT_MESSAGE'				=> 'Nachricht bearbeiten',
	'JV_SHOUTBOX_EMPTY_MSG_ERROR'			=> 'Du kannst keine leere Nachricht senden.',
	'JV_SHOUTBOX_EXPLAIN'					=> 'Mitglieder im öffentlichen Gespräch.',
	'JV_SHOUTBOX_F_EDITED_POST'				=> '%3$s bearbeitete im Forum %1$s einen Beitrag zum Thema %2$s.',
	'JV_SHOUTBOX_F_NEW_POST'				=> '%3$s kommentierte im Forum %1$s einen Beitrag zum Thema %2$s.',
	'JV_SHOUTBOX_F_NEW_POST_QUOTE'			=> '%3$s zitierte im Forum %1$s einen Beitrag zum Thema %2$s.',
	'JV_SHOUTBOX_F_NEW_TOPIC'				=> '%3$s erstellte ein neues Thema im Forum %1$s: %2$s.',
	'JV_SHOUTBOX_IP_BUTTON_TITLE'			=> 'Benutzer IP „%s“ Adressdetails',
	'JV_SHOUTBOX_MSG_EDITED_TIMES'			=> array(
		1									=> '%d mal geändert.',
		2									=> '%d mal geändert.',
	),
	'JV_SHOUTBOX_MSG_FLOOD_ERROR'			=> 'Du kannst Nachrichten nicht so schnell nacheinander senden.',
	'JV_SHOUTBOX_MSG_MAX_CHARS_ERROR'		=> 'Die Nachricht darf höchstens %d Zeichen enthalten.',
	'JV_SHOUTBOX_MSG_MIN_CHARS_ERROR'		=> array(
		1									=> 'Die Nachricht muss mindestens %d Zeichen enthalten.',
		2									=> 'Die Nachricht muss mindestens %d Zeichen enthalten.',
	),
	'JV_SHOUTBOX_MSG_NO_USER_IP'			=> 'Die Nachricht existiert nicht oder dieser Nachricht ist keine IP zugeordnet.',
	'JV_SHOUTBOX_NEW_MSG_TITLE'				=> array(
		1									=> '(%d) neue Nachricht empfangen!',
		2									=> '(%d) neue Nachrichten empfangen!',
	),
	'JV_SHOUTBOX_NO_JS'						=> 'Um die Shoutbox zu benutzen, musst du Javascript aktivieren!',
	'JV_SHOUTBOX_NO_MSG_ID'					=> 'Die Nachricht konnte nicht gefunden werden.',
	'JV_SHOUTBOX_NO_PERMISSION_DELETE_MSG'	=> 'Du bist nicht berechtigt, Nachrichten zu lösschen.',
	'JV_SHOUTBOX_NO_PERMISSION_EDIT_MSG'	=> 'Du bist nicht berechtigt, Nachrichten zu bearbeiten.',
	'JV_SHOUTBOX_NO_PERMISSION_SEND_MSG'	=> 'Du bist nicht berechtigt, Nachrichten zu senden.',
	'JV_SHOUTBOX_OPEN'						=> 'Shoutbox öffnen',
	'JV_SHOUTBOX_PM_BUTTON_TITLE'			=> 'Private Nachricht senden',
	'JV_SHOUTBOX_QUOTE_BUTTON_TITLE'		=> 'Nachricht zitieren',
	'JV_SHOUTBOX_RE_USER'					=> '@%s',
	'JV_SHOUTBOX_RE_USER_TITLE'				=> 'Benutzer antworten',
	'JV_SHOUTBOX_SOUND_OFF_TITLE'			=> 'Ton aus',
	'JV_SHOUTBOX_SOUND_ON_TITLE'			=> 'Ton an',
	'JV_SHOUTBOX_SUCCESS_DELETE_MSG'		=> 'Die Nachricht wurde erfolgreich gelöscht.',
	'JV_SHOUTBOX_VIEWING'					=> 'Betrachtet Shoutbox',
));
