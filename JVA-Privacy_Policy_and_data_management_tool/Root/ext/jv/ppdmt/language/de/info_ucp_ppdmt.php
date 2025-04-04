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
	'JVPPDMT_COOKIE_SETTING'				=> 'Cookies empfangen',
	'JVPPDMT_COOKIE_SETTING_EXPLAIN'		=> 'Hier kannst du festlegen, ob diese Webseite Cookies auf deinem Gerät speichern darf oder nicht. Für mehr Informationen über Cookies lies bitte die %sDatenschutzerklärung%s.<br><em>Beachte bitte, dass viele Features nicht funktionieren werden, wenn du Cookies verbietest.</em>',
	'JVPPDMT_CREATE_TIME'					=> 'Erstelldatum',
	'JVPPDMT_DOWNLOAD'						=> 'Download',
	'JVPPDMT_FORUM_POSTS'					=> 'Forumbeiträge',
	'JVPPDMT_ID'							=> 'Identifikationsnummer',
	'JVPPDMT_MY_ACC_DELETE_CONFIRM'			=> 'Bestätigung der Löschung',
	'JVPPDMT_MY_ACC_DELETE_CONFIRM_ERROR'	=> 'Die Löschung deines Benutzerkontos wurde nicht bestätigt!',
	'JVPPDMT_MY_ACC_DELETE_EXPLAIN'			=> 'Mein Benutzerkonto löschen.<br><em>Bitte beachte, dass die Löschung endgültig ist, und nicht rückgängig gemacht werden kann!</em>',
	'JVPPDMT_MY_ACC_DELETE_FOUNDER_ERROR'	=> 'Benutzer mit Gründer-Status können ihre eigene Registrierung nicht löschen! Dies kann nur durch ein anderes Gründungsmitglied durchgeführt werden.',
	'JVPPDMT_MY_ACC_DELETE_SUCCESS'			=> 'Dein Benutzerkonto wurde erfolgreich gelöscht.',
	'JVPPDMT_MY_ACC_POST_ANONYM_IP'			=> 'Entferne die IP-Adresse aus all meinen Beiträgen',
	'JVPPDMT_MY_ACC_POST_DELETE'			=> 'Beiträge löschen',
	'JVPPDMT_MY_ACC_POST_DELETE_EXPLAIN'	=> 'Alle deine Beiträge werden gelöscht',
	'JVPPDMT_NOT_FOUND_PM'					=> 'Du hast noch keine private Nachricht.',
	'JVPPDMT_NOT_FOUND_POST'				=> 'Du hast noch keinen Beitrag.',
	'JVPPDMT_PD_ACCEPT'						=> 'Ich erlaube die Speicherung und Nutzung meiner persönlichen Daten',
	'JVPPDMT_PD_PARTIAL_ACCEPT'				=> 'Nur die Nutzung bereits vorhandener Daten ist erlaubt, aber nicht die Speicherung zusätzlicher persönlicher Daten.',
	'JVPPDMT_PD_REJECT'						=> 'Ich lehne die Benutzung und Speicherung meiner persönlichen Daten ab.',
	'JVPPDMT_PD_SETTING'					=> 'Speicherung persönlicher Daten',
	'JVPPDMT_PD_SETTING_EXPLAIN'			=> 'Hier kannst du festlegen, wie die Webseite mit deinen persönlichen Daten verfahren soll.',
	'JVPPDMT_PRIVACY_POLICY_ACCEPT_DATE'	=> 'Datenschutzerklärung zuletzt akzeptiert',
	'JVPPDMT_REGISTRATION_DATE'				=> 'Registrierungsdatum',
	'JVPPDMT_REGISTRATION_IP'				=> 'IP-Addresse während der Registrierung',
	'JVPPDMT_REL_IP'						=> 'Verbundene IP-Addresse',
	'JVPPDMT_SELECT_DOWNLOAD_FORMAT'		=> 'Wähle das Download-Format',
	'JVPPDMT_SENT_PRIVATE_MESSAGES'			=> 'Gesendete private Nachrichten',
	'JVPPDMT_TERM_OF_USE_ACCEPT_DATE'		=> 'Nutzungsbedingungen zuletzt akzeptiert',
	'JVPPDMT_YOUR_PM_NUMBER'				=> 'Anzahl privater Nachrichten',
	'JVPPDMT_YOUR_POST_NUMBER'				=> 'Anzahl an Beiträgen',
]);
