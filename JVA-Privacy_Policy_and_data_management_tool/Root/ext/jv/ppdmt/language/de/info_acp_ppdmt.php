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
	'ACP_CAT_JVPPDMT'							=> 'Privatsphäre- und Datenmanagementtool',
	'ACP_JVPPDMT'								=> 'JVA - Privacy Policy and data management tool',
	'ACP_JVPPDMT_CONTROLLER_NAME'				=> 'Name des Verantwortlichen',
	'ACP_JVPPDMT_CONTROLLER_NAME_EXPLAIN'		=> 'Der vollständige Name des Verantwortlichen.',
	'ACP_JVPPDMT_CONTROLLER_PHONE'				=> 'Telefonnummer des Verantwortlichen',
	'ACP_JVPPDMT_CONTROLLER_PHONE_EXPLAIN'		=> 'Nach aktuellem Medienrecht ist es erforderlich, mindestens zwei Arten einer schnellen Kontaktaufnahme zum Verantwortlichen anzubieten. Eine davon soll eine E-Mail-Adresse sein, und die zweite eine Telefonnummer.<br><em>Gib die Telefonnummer des Verantwortlichen zusammen mit dem Ländercode ein. Beispielsweise für Deutschland mit : +49 …</em>',
	'ACP_JVPPDMT_COOIKE_INFO'					=> 'Cookie Information anzeigen',
	'ACP_JVPPDMT_COOIKE_INFO_EXPLAIN'			=> 'Wenn dies aktiviert ist, wird jeder, der die Speicherung von Cookies nicht erlaubt hat, eine Information sehen, dass viele Features für ihn nicht verfügbar sind. Außerdem enthält diese Information einen Link, der den Benutzer zu den persönlichen Einstellungen der privaten Daten führt.',
	'ACP_JVPPDMT_GLOBAL_SETTINGS'				=> 'Einstellungen Privatsphäre- und Datenmanagementtool',
	'ACP_JVPPDMT_GLOBAL_SETTINGS_EXPLAIN'		=> 'Hier kannst du Benutzern ermöglichen, auf die Datenschutzerklärung zuzugreifen und sie zu akzeptieren. Darüber hinaus hast du die Möglichkeit, Benutzern zu erlauben, ihre eigene Registrierung zu löschen.',
	'ACP_JVPPDMT_HIDE_USERNAME_BOT'				=> 'Verstecke Benutzernamen für Bots',
	'ACP_JVPPDMT_HIDE_USERNAME_GUEST'			=> 'Verstecke Benutzernamen für Gäste',
	'ACP_JVPPDMT_LAST_RESET_DATE'				=> 'Letztes Reset-Datum: %s',
	'ACP_JVPPDMT_PRIVACY_POLICY_ENABLE'			=> 'Datenschutzerklärung',
	'ACP_JVPPDMT_PRIVACY_POLICY_ENABLE_EXPLAIN'	=> 'Wenn du dies aktivierst, wird Benutzern die Datenschutzerklärung und die Möglichkeit zur Akzeptanz angezeigt.',
	'ACP_JVPPDMT_RESET'							=> 'Akzeptanz der Datenschutzerklärung neu anfordern',
	'ACP_JVPPDMT_RESET_CONFIRM'					=> 'Bist du sicher, dass du die Akzeptanz der Datenschutzrichtlinie zurücksetzen möchtest?',
	'ACP_JVPPDMT_RESET_EXPLAIN'					=> 'Wenn du die Datenschutzerklärung änderst, starte diesen Prozess, in dem die Benutzer dazu aufgefordert werden, die neue Datenschutzrichtlinie erneut zu lesen und zu akzeptieren.',
	'ACP_JVPPDMT_RESET_SUCCESS'					=> 'Datenschutzerklärung erfolgreich zurückgesetzt.',
	'ACP_JVPPDMT_SETTINGS'						=> 'Einstellungen',
	'ACP_JVPPDMT_TERM_OF_USE_RESET'				=> 'Akzeptanz der Nutzungsbedingungen zurücksetzen',
	'ACP_JVPPDMT_TERM_OF_USE_RESET_CONFIRM'		=> 'Bist du sicher, dass du die Akzeptanz der Nutzungsbedingungen zurücksetzen möchtest?',
	'ACP_JVPPDMT_TERM_OF_USE_RESET_EXPLAIN'		=> 'Wenn du die Nutzungsbedingungen des Forums änderst, starte diesen Prozess, in dem die Benutzer dazu aufgefordert werden, die neuen Nutzungsbedingungen erneut zu lesen und zu akzeptieren.',
	'ACP_JVPPDMT_TERM_OF_USE_RESET_SUCCESS'		=> 'Das Zurücksetzen der Nutzungsbedingungen war erfolgreich.',
	'ACP_JVPPDMT_USE_COOKIE_GUEST'				=> 'Verwendung von Cookies für Gäste',
	'ACP_JVPPDMT_USE_COOKIE_GUEST_EXPLAIN'		=> 'Wenn du dies deaktivierst, wird die Verwendng von Cookies für Gäste deaktiviert, so dass eine Akzeptanz der Datenschutzerklärung von Gästen nicht erforderlich ist.',
	'ACP_JVPPDMT_VIEWER_GROUP'					=> 'Beobachter-Gruppe',
	'ACP_JVPPDMT_VIEWER_GROUP_EXPLAIN'			=> 'Die Erweiterung erstellt eine neue Spezial-Gruppe, genannt <strong>„Registrierte Beobachter“</strong>. Diese Gruppe soll die Berechtigungen von Benutzern sicherstellen, die die Speicherung zusätzlicher personenbezogener Daten nicht akzeptieren. Beachte, dass der Verantwortliche für den Datenschutz stets ein Auge auf die Rechte dieser Gruppe halten sollte, um sicherzustellen, dass sie immer korrekt gesetzt sind. Für diese Gruppe sollten vom Verantwortlichen spezielle Berechtigungsrollen erstellt werden. Die Berechtigungen sollten immer so gesetzt werden, dass ein in dieser Gruppe befindlicher Benutzer von keinem Forenteil irgendein Formular absenden kann. Achte darauf, dass du nicht vergisst, die Rechte für diese Gruppe anzupassen, wenn du ein neues Forum erstellst. In diesem Fall ist es gut, die Gruppenrechte so zu setzen, dass das Gruppenmitglied nur lesen kann, und weiter nichts. Stelle sicher, für andere Aktionen immer die Berechtigung <strong>„NIE“</strong> auszuwählen, weil das der einzige Weg ist, wie du andere Berechtigungen aus anderen Gruppen des Benutzers wirksam überschreiben kannst. <br>Wenn du diese Gruppe deaktiviert lässt, werden registrierte Benutzer, die der Speicherung persönlicher Daten nicht zugestimmt haben, weitergeleitet zur Benutzerkontenlöschung.',
	'ACP_JVPPDMT_VIEWER_GROUP_INFO'				=> 'Information Beobachter-Gruppe',
	'ACP_JVPPDMT_VIEWER_GROUP_INFO_EXPLAIN'		=> 'Wenn dies aktiviert ist, wird den Benutzern in der Gruppe Registrierte Beobachter eine Information angezeigt, dass sie in der Beobachter-Gruppe sind, und keine Berechtigung haben, Formulare abzusenden. Außerdem enthält diese Information einen Link, der sie zu den persönlichen Einstellungen der privaten Daten führt.',
	'ACP_JVPPDMT_YOUR_PP_FILE'					=> 'Dateiname deiner eigenen Datenschutzerklärung',
	'ACP_JVPPDMT_YOUR_PP_FILE_EXPLAIN'			=> 'Hier hast du die Möglichkeit, den Dateinamen deiner eigenen Sprachdatei einzutragen, welche deine modifizierte Datenschutzerklärung enthält. Dies ist dann erforderlich, wenn du den vorgegebenen Text anpasst, und du diesen nicht durch überschreiben verlieren willst, sobald du die Erweiterung aktualisierst. Lade deine eigene Datei hoch in die benötigten Sprachordner unter [ROOT]/ext/jv/ppdmt/language/XY/. Beispiel:  wenn dein Dateiname „pp“ wäre, dann sollte die Datei zu finden sein unter [ROOT]/ext/jv/ppdmt/language/XY/pp.php. Beachte auch, dass die Ersetzungszeichen %1$s … %5$s in dieser Sprachdatei nicht entfernt werden dürfen, und die Sprachvariablen müssen die gleichen bleiben. Der einfachste Weg um Fehler zu vermeiden ist, eine Kopie der mitgelieferten Datei privacy_policy.php im jeweiligen Sprachordner zu erstellen und umzubenennen, und den Text darin zu ändern.',

	'LOG_JVPPDMT_DOWNLOAD_PRIVACY_DATA'			=> '<strong>Download persönliche Daten</strong>',
	'LOG_JVPPDMT_DOWNLOAD_PRIVACY_PMS'			=> '<strong>Download persönlicher privater Nachrichten</strong>',
	'LOG_JVPPDMT_DOWNLOAD_PRIVACY_POSTS'		=> '<strong>Download persönliche Beiträge</strong>',
	'LOG_JVPPDMT_PRIVACY_SETTINGS'				=> '<strong>Privatsphäre-Einstellungen geändert</strong>',
	'LOG_JVPPDMT_RESET'							=> '<strong>Datenschutzerklärung zurücksetzen</strong>',
	'LOG_JVPPDMT_SETTINGS'						=> '<strong>Einstellungen der Privatsphäre- und Datenmanagementtools geändert</strong>',
	'LOG_JVPPDMT_TERM_OF_USE_RESET'				=> '<strong>Nutzungsbedingungen zurücksetzen</strong>',
]);
