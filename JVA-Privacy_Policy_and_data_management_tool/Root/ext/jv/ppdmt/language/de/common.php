<?php
/**
*
* @package JVA - Privacy Policy and data management tool
* @version $Id$
* @author 2011-2025 KillBill
* @copyright (c) 2014-2025 https://jv-arcade.com/ - https://jv-arcade.com/contact
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

$lang = array_merge($lang, [
	'ACL_U_JVPPDMT_MY_ACC_POST_DELETE'	=> 'Kann bei Accountlöschung die eigenen Beiträge löschen',

	'G_JVPPDMT_REGISTERED_VIEWER'		=> 'Registrierte Beobachter',

	'JVPPDMT_COOKIE_INFO'				=> 'Liebes Mitglied, weil du die Speicherung von Cookies auf deinem Gerät nicht erlaubt hast, sind so viele Features nicht für dich erreichbar.<br>Wenn du zu irgendeiner Zeit deine Einstellungen zur Speicherung persönlicher Daten bearbeiten möchtest, klicke bitte %sHIER%s.',
	'JVPPDMT_INFO_NO_USE_COOKIE_GUEST'	=> 'Lieber Gast, wir möchten dich darüber informieren, dass wir keine Cookies für Gastbenutzer speichern. Wenn du mehr erfahren möchtest, lies unsere %sDatenschutzerklärung%s.',
	'JVPPDMT_PHPBB_ERROR'				=> 'Die Erweiterung kann nicht aktiviert werden, weil die Version von <strong>„phpBB“</strong> unterhalb der Version <strong>„%s“</strong> liegt!',
	'JVPPDMT_SOMEONE'					=> 'Jemand',
	'JVPPDMT_VIEWER_GROUP_INFO'			=> 'Liebes Mitglied, du hast die zukünftige Speicherung weiterer persönlicher Daten erfolgreich abgelehnt, und bist nun in der Beobachter-Gruppe. Die Beobachter-Gruppe kann Seiten nur ansehen, aber keine Formulare absenden, weil das ohne Speicherung nicht möglich ist.<br>Wenn du zu irgendeiner Zeit deine Einstellungen zur Speicherung persönlicher Daten bearbeiten möchtest, klicke bitte %sHIER%s.',

	'LOG_JVPPDMT_MY_ACC_DELETE'			=> '<strong>Mein Benutzerkonto löschen</strong><br>» %s',
	'LOG_JVPPDMT_MY_ACC_POST_DELETE'	=> '<strong>Mein Benutzerkonto und alle meine Beiträge löschen.</strong><br>» %s',

	'UCP_JVPPDMT_PRIVACY_DATA'			=> 'Private Daten',
	'UCP_JVPPDMT_SETTINGS'				=> 'Einstellungen',
	'UCP_PROFILE_JVPPDMT_MY_ACC_DELETE'	=> 'Mein Benutzerkonto löschen',
]);
