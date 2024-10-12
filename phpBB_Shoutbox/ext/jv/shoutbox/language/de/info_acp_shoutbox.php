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
	'ACP_CAT_JV_SHOUTBOX_SETTINGS'						=> 'Shoutbox',
	'ACP_JV_SHOUTBOX'									=> 'JVA - phpBB Shoutbox',
	'ACP_JV_SHOUTBOX_AUTHOR'							=> 'Autor der Nachricht',
	'ACP_JV_SHOUTBOX_AUTHOR_EXPLAIN'					=> 'Hier kannst du den Autor der gesendeten Nachrichten festlegen. Wenn du dieses Feld leer lässt und die Erweiterung „JVA - Add System Bot“ installiert hast, wird die Nachricht unter seinem Namen gesendet. Wenn es keinen „System Bot“-Benutzer gibt, dann wird die Nachricht unter dem eigentlichen Benutzernamen gesendet.',
	'ACP_JV_SHOUTBOX_AVATAR'							=> 'Avatare anzeigen',
	'ACP_JV_SHOUTBOX_AVATAR_EXPLAIN'					=> 'Wenn dies aktiviert ist, werden die Avatare der Benutzer angezeigt.',
	'ACP_JV_SHOUTBOX_BBCODE_ALLOWED'					=> 'BBCode erlauben',
	'ACP_JV_SHOUTBOX_BBCODE_ALLOWED_EXPLAIN'			=> 'Nur die hier angegebenen BBCodes können in der Shoutbox benutzt werden. Benutze eine eigene Zeile für jeden neuen BBCode.',
	'ACP_JV_SHOUTBOX_CUSTOM_BBCODE'						=> 'Benutzerdefinierte BBCodes erlauben',
	'ACP_JV_SHOUTBOX_CUSTOM_BBCODE_EXPLAIN'				=> 'Wenn dies aktiviert ist, werden auch die benutzerdefinierten BBCodes angezeigt.',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE'						=> 'Eigene Seite zulassen',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_EXPLAIN'				=> 'Hier kann die Anzeige der Shoutbox in einer eigenen Seite erlaubt werden.',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_ONLINE_LIST'			=> 'Eigene Seite, Benutzer online anzeigen',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_ONLINE_LIST_EXPLAIN'	=> 'Hier kannst du zulassen, dass auf der Shoutbox in eigener Seite die Benutzer angezeigt werden, die online sind.',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_POPUP'					=> 'Eigene Seite als Pop-Up',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_POPUP_EXPLAIN'			=> 'Wenn dies aktiviert ist, öffnet die eigene Seite der Shoutbox in einem Pop-Up-Fenster.',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_POPUP_HEIGHT'			=> 'Höhe Pop-up-Fenster',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_POPUP_WIDTH'			=> 'Breite Pop-up-Fenster',
	'ACP_JV_SHOUTBOX_DATE_FORMAT'						=> 'Datumsformat',
	'ACP_JV_SHOUTBOX_DATE_FORMAT_EXPLAIN'				=> 'Das Format ist identisch mit der PHP <a href="https://php.net/manual/de/function.date.php">date()</a> Funktion.',
	'ACP_JV_SHOUTBOX_DELETE_MESSAGES'					=> 'Nachrichten löschen',
	'ACP_JV_SHOUTBOX_DELETE_MESSAGES_CONFIRM'			=> 'Bist du sicher, dass du alle Nachrichten löschen möchtest?',
	'ACP_JV_SHOUTBOX_DELETE_MESSAGES_EXPLAIN'			=> 'Hier kannst du alle Nachrichten löschen.',
	'ACP_JV_SHOUTBOX_DELETE_MESSAGES_SUCCESS'			=> 'Alle Nachrichten erfolgreich gelöscht.',
	'ACP_JV_SHOUTBOX_DISPLAY_ALL_MAIN_PAGES'			=> 'Alle Hauptseiten',
	'ACP_JV_SHOUTBOX_DISPLAY_ALL_PAGES'					=> 'Alle Seiten',
	'ACP_JV_SHOUTBOX_DISPLAY_ALL_PAGES_EXCEPT_ARCADE'	=> 'Alle Seiten, außer arcade',
	'ACP_JV_SHOUTBOX_DISPLAY_ALL_PAGES_EXCEPT_PORTAL'	=> 'Alle Seiten, außer Portal',
	'ACP_JV_SHOUTBOX_DISPLAY_ARCADE'					=> 'Arcade-Hauptseite',
	'ACP_JV_SHOUTBOX_DISPLAY_ARCADE_ALL'				=> 'Alle Arcadeseiten',
	'ACP_JV_SHOUTBOX_DISPLAY_FORUM'						=> 'Forum Hauptseite',
	'ACP_JV_SHOUTBOX_DISPLAY_FORUM_ALL'					=> 'Alle Forenseiten',
	'ACP_JV_SHOUTBOX_DISPLAY_NONE'						=> 'Nicht anzeigen',
	'ACP_JV_SHOUTBOX_DISPLAY_PORTAL'					=> 'Portalseite',
	'ACP_JV_SHOUTBOX_EDIT_POST'							=> 'Zeige geänderte Beiträge',
	'ACP_JV_SHOUTBOX_EDIT_POST_EXPLAIN'					=> 'Wenn ein Benutzer einen Beitrag bearbeitet, wird das in der Shoutbox angezeigt.',
	'ACP_JV_SHOUTBOX_ENABLE'							=> 'Shoutbox aktiviert',
	'ACP_JV_SHOUTBOX_ENABLE_EXPLAIN'					=> 'Wenn aktiviert, wird die Shoutbox auf all den Seiten angezeigt, für die das aktiviert ist.',
	'ACP_JV_SHOUTBOX_FLOOD_TIME'						=> 'Flood Intervall',
	'ACP_JV_SHOUTBOX_FLOOD_TIME_EXPLAIN'				=> 'Anzahl der Sekunden, die ein Benutzer zwischen zwei Beiträgen warten muss, um die Shoutbox nicht mit Beiträgen zu überfluten. Um Benutzern zu erlauben, diese Einstellung zu ignorieren, ändere ihre Befugnisse.',
	'ACP_JV_SHOUTBOX_FORUM_POST_SETTINGS'				=> 'Forum Beitragseinstellung',
	'ACP_JV_SHOUTBOX_HEIGHT'							=> 'Shoutbox-Höhe',
	'ACP_JV_SHOUTBOX_HEIGHT_ERROR'						=> 'Der vorgesehene Wert für die Einstellung „Shoutbox Höhe“ ist zu hoch im Vergleich mit der Einstellung von „Anzahl der Nachrichten“. Um das zu korrigieren, sollte diese Höhe einer Mindestanzahl von „%d“ Nachrichten zugeordnet werden.',
	'ACP_JV_SHOUTBOX_HEIGHT_EXPLAIN'					=> 'Gib die Höhe für die Anzeige der Shoutbox in Pixel an.',
	'ACP_JV_SHOUTBOX_LOCATION'							=> 'Ort',
	'ACP_JV_SHOUTBOX_LOCATION_EXPLAIN'					=> 'Hier kann festgelegt werden, wo die Shoutbox auf der Webseite angezeigt werden soll.',
	'ACP_JV_SHOUTBOX_MAX_MSG_LIMIT'						=> 'Maximale Anzahl der Nachrichten',
	'ACP_JV_SHOUTBOX_MAX_MSG_LIMIT_EXPLAIN'				=> 'Hier kannst du die maximale Anzahl an Nachrichten einschränken, die in der Shoutbox angezeigt werden. Wenn beispielsweise der Wert 100 ist, und als primäre Anzahl 10 geladen werden, dann kannst du noch 90 ältere Nachrichten empfangen. Wenn dieser Wert 0 ist, können die Benutzer alle älteren Nachrichten lesen.',
	'ACP_JV_SHOUTBOX_MIN_MAX_ERROR'						=> '„%s“ kann nicht kleiner sein als „%s“.',
	'ACP_JV_SHOUTBOX_MSG_LIMIT'							=> 'Anzahl der Nachrichten',
	'ACP_JV_SHOUTBOX_MSG_LIMIT_EXPLAIN'					=> 'Hier stellst du ein, dass standardmäßig diese Anzahl an Nachrichten in die Shoutbox geladen wird. Der gleiche Wert gilt für die Einstellung zum Laden älterer Nachrichten.',
	'ACP_JV_SHOUTBOX_MSG_MAX_CHARS'						=> 'Höchstanzahl Zeichen pro Nachricht',
	'ACP_JV_SHOUTBOX_MSG_MAX_CHARS_EXPLAIN'				=> 'Die Anzahl der Zeichen, die maximal in einer Nachricht erlaubt sind. Setze auf 0 für unbegrenzte Zeichen.',
	'ACP_JV_SHOUTBOX_MSG_MIN_CHARS'						=> 'Mindestanzahl Zeichen pro Nachricht',
	'ACP_JV_SHOUTBOX_MSG_MIN_CHARS_EXPLAIN'				=> 'Die Mindestanzahl an Zeichen, die ein Benutzer pro Nachricht eingeben muss. Hier muss mindestens 1 eingestellt werden.',
	'ACP_JV_SHOUTBOX_MSG_POSITION'						=> 'Nachrichtenposition',
	'ACP_JV_SHOUTBOX_MSG_POSITION_EXPLAIN'				=> 'Hier kannst du festlegen, ob neue Nachrichten oben oder unten angezeigt werden sollen.',
	'ACP_JV_SHOUTBOX_MSG_SETTINGS'						=> 'Nachrichteneinstellungen',
	'ACP_JV_SHOUTBOX_NEW_REPLY_POST'					=> 'Neue Beiträge anzeigen',
	'ACP_JV_SHOUTBOX_NEW_REPLY_POST_EXPLAIN'			=> 'Wenn in einem Thema ein neuer Beitrag erstellt wird, wird das in der Shoutbox angezeigt.',
	'ACP_JV_SHOUTBOX_NEW_REPLY_QUOTE_POST'				=> 'Zeige neue zitierte Beiträge an',
	'ACP_JV_SHOUTBOX_NEW_REPLY_QUOTE_POST_EXPLAIN'		=> 'Wenn ein neues Beitragszitat in einem Thema erstellt wird, wird das in der Shoutbox angezeigt.',
	'ACP_JV_SHOUTBOX_NEW_TOPIC_POST'					=> 'Neue Themen anzeigen',
	'ACP_JV_SHOUTBOX_NEW_TOPIC_POST_EXPLAIN'			=> 'Wenn in einem Forum ein neues Thema erstellt wird, wird das in der Shoutbox angezeigt.',
	'ACP_JV_SHOUTBOX_PAGE'								=> 'Shoutbox anzeigen',
	'ACP_JV_SHOUTBOX_PAGE_EXPLAIN'						=> 'Wenn dies aktiviert ist, wird die Shoutbox der Seite dort hinzugefügt, wo sie angezeigt werden soll. Beachte, dass Smilies und BBCode in der Shoutbox nicht verfügbar sein werden auf Seiten für die Beitragserstellung, PM und Signatur.',
	'ACP_JV_SHOUTBOX_POSITION_BOTTOM'					=> 'Unten',
	'ACP_JV_SHOUTBOX_POSITION_TOP'						=> 'Oben',
	'ACP_JV_SHOUTBOX_POST_IGNORE_FORUMS'				=> 'Ignorierte Foren',
	'ACP_JV_SHOUTBOX_POST_IGNORE_FORUMS_EXPLAIN'		=> 'Themen in den ausgewählten Foren lösen keine automatische Nachricht aus. Mit festgehaltener STRG-Taste und Mausklick können mehrere Foren ausgewählt/abgewählt werden.',
	'ACP_JV_SHOUTBOX_PRUNE'								=> 'Nachrichten leeren',
	'ACP_JV_SHOUTBOX_PRUNE_EXPLAIN'						=> 'Wenn dies aktiviert ist, werden die Nachrichten in den festgelegten Intervallen geleert. Nur die eingestellte Anzahl an Nachrichten wird beibehalten.',
	'ACP_JV_SHOUTBOX_PRUNE_MSG_NUM'						=> 'Anzahl verbleibender Nachrichten',
	'ACP_JV_SHOUTBOX_PRUNE_MSG_NUM_EXPLAIN'				=> 'Wenn die Leerung der Nachrichten durchgeführt wird, wird diese Anzahl beibehalten.',
	'ACP_JV_SHOUTBOX_PRUNE_TIME'						=> 'Leerungsintervall',
	'ACP_JV_SHOUTBOX_PRUNE_TIME_EXPLAIN'				=> 'Lege hier das Intervall fest, zu dem die Nachrichten geleert werden sollen.',
	'ACP_JV_SHOUTBOX_REFRESH'							=> 'Aktualisierungs- (Prüf-) Intervall',
	'ACP_JV_SHOUTBOX_REFRESH_EXPLAIN'					=> 'Zu dem hier festgelegten Intervall wird auf den Empfang neuer Nachrichten geprüft.',
	'ACP_JV_SHOUTBOX_ROUND_AVATAR'						=> 'Avatar abrunden',
	'ACP_JV_SHOUTBOX_ROUND_AVATAR_EXPLAIN'				=> 'Wenn dies aktiviert ist, werden Avatare in abgerundeter Form dargestellt.',
	'ACP_JV_SHOUTBOX_SETTINGS'							=> 'Shoutbox-Einstellungen',
	'ACP_JV_SHOUTBOX_SETTINGS_EXPLAIN'					=> 'Hier können benutzerdefinierte Einstellungen für die Shoutbox und deren Nachrichten vorgenommen werden.',
	'ACP_JV_SHOUTBOX_SMILIE_ENABLE'						=> 'Smilies einschalten',
	'ACP_JV_SHOUTBOX_SMILIE_ENABLE_EXPLAIN'				=> 'Hier kannst du die Benutzung von Smilies aktivieren.',
	'ACP_JV_SHOUTBOX_SMILIE_SCROLL_BOX'					=> 'Zeige Smilies-Scrollbox an',
	'ACP_JV_SHOUTBOX_SMILIE_SCROLL_BOX_EXPLAIN'			=> 'Wenn die erlaubte Anzahl der anzuzeigenden Smilies zu groß ist, kannst du hier zulassen, dass die Scroll-Box einen Teil der Smilies schließt.',

	'JVA_CORE_EXT_NOT_FOUND'							=> 'Diese Erweiterung kann nicht aktiviert werden, weil die „JVA - Core“ Extension nicht gefunden wurde!',

	'LOG_JV_SHOUTBOX_CONFIG_SETTINGS'					=> '<strong>Shoutbox-Einstellungen geändert.</strong>',
	'LOG_JV_SHOUTBOX_DELETE_MESSAGES'					=> '<strong>Alle Shoutbox-Nachrichten gelöscht.</strong>',
	'LOG_JV_SHOUTBOX_MESSAGES_PRUNING'					=> '<strong>Shoutbox Nachrichten geleert.</strong><br>» Entfernte %d Nachrichten.',
));
