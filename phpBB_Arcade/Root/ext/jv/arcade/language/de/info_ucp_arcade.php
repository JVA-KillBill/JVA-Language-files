<?php
/**
*
* @package phpBB Arcade
* @version $Id: info_ucp_arcade.php 2480 2022-02-02 15:07:28Z Scanialady $
* @author 2011-2026 KillBill
* @copyright (c) 2014-2026 https://jv-arcade.com/ - https://jv-arcade.com/contact
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
	$lang = [];
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

//Arcade
$lang = array_merge($lang, [
	'UCP_ARCADE'								=> 'phpBB Arcade',
	'UCP_ARCADE_BOARD_SESSION'					=> 'Zeige Board-Sitzungszeit an',
	'UCP_ARCADE_BOARD_SESSION_EXPLAIN'			=> 'Über der Spielplattform wird ein Countdown für die Forensitzung angezeigt. Wenn der Countdown die Null erreicht, werden wir automatisch aus dem Forum ausgeloggt.',
	'UCP_ARCADE_BUTTON_STYLE'					=> 'Menübuttonstil',
	'UCP_ARCADE_BUTTON_WITHOUT_TEXT'			=> 'Button ohne Text',
	'UCP_ARCADE_BUTTON_WITH_TEXT'				=> 'Button mit Text',
	'UCP_ARCADE_CAT_GAMES_STYLE'				=> 'Kategorienstil Spiele',
	'UCP_ARCADE_CAT_STYLE'						=> 'Kategorienstil',
	'UCP_ARCADE_DARK'							=> 'Dunkel',
	'UCP_ARCADE_DELETE_FAVORITE'				=> [
		1										=> 'Favorit löschen',
		2										=> 'Favoriten löschen'
	],
	'UCP_ARCADE_DELETE_FAVORITE_CONFIRM'		=> [
		1										=> 'Bist du sicher, dass du diesen Spielefavoriten entfernen möchtest?',
		2										=> 'Bist du sicher, dass du diese Spielefavoriten entfernen möchtest?'
	],
	'UCP_ARCADE_DELETE_FAVORITE_SUCCESS'		=> [
		1										=> 'Favorit erfolgreich gelöscht.',
		2										=> 'Favoriten erfolgreich gelöscht.'
	],
	'UCP_ARCADE_DEVICES_ALL'					=> 'Alle Geräte',
	'UCP_ARCADE_DEVICES_TOUCH_SCREEN'			=> 'Touchscreen-Geräte',
	'UCP_ARCADE_DISPLAY_GAME_IMAGE'				=> 'Spielvorschau anzeigen',
	'UCP_ARCADE_DISPLAY_POPUP_ICON'				=> 'Popupsymbol anzeigen',
	'UCP_ARCADE_EVERYWHERE'						=> 'Überall',
	'UCP_ARCADE_FAVORITES'						=> 'Favoriten verwalten',
	'UCP_ARCADE_FAVORITES_EXPLAIN'				=> 'Du kannst unten deine Spielefavoriten ansehen, markieren und löschen.',
	'UCP_ARCADE_FLASH_WATERMARK'				=> 'Flash-Wasserzeichen anzeigen',
	'UCP_ARCADE_FLASH_WATERMARK_EXPLAIN'		=> 'Wenn du dies aktivierst, wird den Spielebildern das Flash-Wasserzeichen hinzugefügt.',
	'UCP_ARCADE_GAME'							=> 'Spieleinstellung',
	'UCP_ARCADE_GAME_AUTO_ZOOM'					=> 'Spiel automatisch vergrößern',
	'UCP_ARCADE_GAME_AUTO_ZOOM_EXPLAIN'			=> 'Wenn der dem Spiel zugewiesene Bereich größer als die vorgesehene Größe des Spiels ist, wird das Spiel automatisch auf den verfügbaren Raum vergrößert.<br><em class="arcade_attent">Beachte, dass diese Einstellung die Aktivierung der benutzerdefinierten Größe überschreibt.</em>',
	'UCP_ARCADE_GAME_BORDER_ENABLE'				=> 'Rahmen um das Spiel anzeigen',
	'UCP_ARCADE_GAME_CUSTOM_SIZE'				=> 'Benutzerdefinierte Größe aktivieren',
	'UCP_ARCADE_GAME_CUSTOM_SIZE_EXPLAIN'		=> 'Wenn du dies aktivierst, wird die von dir festgelegte maximale Größe verwendet.<br><em>Beachte, dass das Spiel automatisch an die Größe des verfügbaren Platzes angepasst wird, wenn für das Spiel weniger Platz verfügbar ist, als du festgelegt hast. Denn die Software erlaubt keinesfalls die Ausweitung des Spiels über das verfügbare Spielfeld hinaus.</em>',
	'UCP_ARCADE_GAME_FILTER_KEYBOARD'			=> 'Tastaturspiele herausfiltern',
	'UCP_ARCADE_GAME_FILTER_KEYBOARD_EXPLAIN'	=> 'Hier hast du die Möglichkeit Spiele herauszufiltern, welche zur Bedienung eine Tastatur erfordern.',
	'UCP_ARCADE_GAME_FULLSCREEN'				=> 'Spiel im Vollbild starten',
	'UCP_ARCADE_GAME_FULLSCREEN_ALL'			=> 'Vollbildgerät',
	'UCP_ARCADE_GAME_FULLSCREEN_ALL_EXPLAIN'	=> 'Wenn „Spiel im Vollbild starten“ aktiviert ist, kannst du festlegen, ob das für alle Geräte oder nur für Touchscreen-Geräte gültig sein soll.',
	'UCP_ARCADE_GAME_FULLSCREEN_EXPLAIN'		=> 'Wenn du dies aktivierst, wird das Klicken auf den Startknopf der Spieleinführung das Spiel im Vollbild starten.',
	'UCP_ARCADE_GAME_INTRO_STYLE'				=> 'Spieleinführungs-Style',
	'UCP_ARCADE_GAME_JUMP_TOP'					=> 'Automatisch zur obersten Position',
	'UCP_ARCADE_GAME_JUMP_TOP_EXPLAIN'			=> 'Wenn du das Spiel von der eingestellten Position aus scrollst, und dann auf das Spiel klickst, kehrt es automatisch zur eingestellten Position zurück.',
	'UCP_ARCADE_GAME_LANDSCAPE_WIDTH'			=> 'Breite für Querformat-Spiele',
	'UCP_ARCADE_GAME_LANDSCAPE_WIDTH_EXPLAIN'	=> 'Bei Spielen im Querformat kann die hier festgelegte maximale Breite angezeigt werden.',
	'UCP_ARCADE_GAME_MENU_ENABLE'				=> 'Aktiviere Menü',
	'UCP_ARCADE_GAME_MENU_ENABLE_EXPLAIN'		=> 'Der Einleitung und dem Spiel ist ein angeheftetes Menü mit mehreren Buttons zugeordnet. Damit kannst du während des Spielens auf eine Reihe von Informationen und Einstellungen zugreifen.',
	'UCP_ARCADE_GAME_MENU_POSITION'				=> 'Menüposition',
	'UCP_ARCADE_GAME_ORIENTATION_EXPLAIN'		=> 'Wenn das Spiel Querformat und Hochformat unterstützt, wird es so angezeigt, wie hier eingestellt wurde.<br><em>Drehen der Ansicht ist auch während eines Spiels möglich.<br>Bei drehbaren Geräten wird die aktuelle Ausrichtung berücksichtigt.</em>',
	'UCP_ARCADE_GAME_OVER_ANIMATION'			=> 'Spiele Animation ab am Ende eines Spiels',
	'UCP_ARCADE_GAME_OVER_ANIMATION_SOUND'		=> 'Aktiviere Ton für Animation',
	'UCP_ARCADE_GAME_OVER_RANDOM_GAMES'			=> 'Zeige zufällige Spiele am Ende eines Spiels an',
	'UCP_ARCADE_GAME_OVER_SOUND'				=> 'Spiele Game Over-Ton am Ende eines Spiels ab',
	'UCP_ARCADE_GAME_OVER_SUBMIT'				=> 'Senden der Punktzahl zulassen',
	'UCP_ARCADE_GAME_OVER_SUBMIT_EXPLAIN'		=> 'Wenn du dies nicht zulässt, wird das Spiel unsere Punktzahl weder automatisch noch nach dem Drücken der Schaltfläche „Spielstand senden“ übermitteln. Anstatt die Punktzahl zu übermitteln, öffnet sich eine „Game Over“-Oberfläche, die es ermöglicht, das Spiel sofort erneut zu spielen oder die Punktzahl zu übermitteln.',
	'UCP_ARCADE_GAME_PORTRAIT_HEIGHT'			=> 'Höhe für Hochformat-Spiele',
	'UCP_ARCADE_GAME_PORTRAIT_HEIGHT_EXPLAIN'	=> 'Bei Spielen im Hochformat kann die hier festgelegte maximale Höhe angezeigt werden.',
	'UCP_ARCADE_GAME_PRELOADER'					=> 'Preloader deaktivieren',
	'UCP_ARCADE_GAME_PRELOADER_EXPLAIN'			=> 'Du kannst hier Preloader deaktivieren, wenn sie dich stören. Aber beachte, dass bei deaktivierten Preloadern, und wenn deine Internetverbindung langsam ist, während des Ladens für längere Zeit nur ein leerer Bereich zu sehen ist.',
	'UCP_ARCADE_GAME_RESIZE_BUTTONS'			=> 'Buttons zur Größenänderung aktivieren',
	'UCP_ARCADE_GAME_RESIZE_BUTTONS_EXPLAIN'	=> 'Als zusätzliche Option werden benutzerdefinierte Größenänderungsschaltflächen hinzugefügt. Die Schaltflächen sind nur aktiv, wenn du in einem normalen Fenster spielst, und sich das Fenster in der Desktop-Ansicht befindet.',
	'UCP_ARCADE_GAME_SESSION'					=> 'Zeige Spiel-Sitzungszeit an',
	'UCP_ARCADE_GAME_SESSION_EXPLAIN'			=> 'Über der Spielplattform wird ein Countdown der Spielsitzung angezeigt. Falls der Countdown Null erreicht, ist sicher, dass das Spiel deine Punktzahl nicht speichern wird.',
	'UCP_ARCADE_GAME_VERTICAL_POS'				=> 'Vertikale Position Spiel',
	'UCP_ARCADE_GAME_VERTICAL_POS_ACTIVE'		=> 'Vertikale Position des Spiels ist aktiv',
	'UCP_ARCADE_GAME_VERTICAL_POS_ACTIVE_EXP'	=> 'Diese Einstellung wird nur wirksam, wenn die Mittelposition eingestellt ist.',
	'UCP_ARCADE_GAME_VERTICAL_POS_EXPLAIN'		=> 'Wenn die Höhe des Bildschirms höher ist als die Höhe des Spiels, wird das Spiel an die hier eingestellte Position angepasst.',
	'UCP_ARCADE_HTML5_WATERMARK'				=> 'Html5-Wasserzeichen anzeigen',
	'UCP_ARCADE_HTML5_WATERMARK_EXPLAIN'		=> 'Wenn du dies aktivierst, wird den Spielebildern das Html5-Wasserzeichen hinzugefügt.',
	'UCP_ARCADE_LIGHT'							=> 'Hell',
	'UCP_ARCADE_LOCAL_STORAGE'					=> 'Lokalen Speicher verwalten',
	'UCP_ARCADE_LOCAL_STORAGE_DEL_CONFIRM'		=> 'Bist du sicher, dass du die gespeicherten Daten aus diesem Browser löschen willst?',
	'UCP_ARCADE_LOCAL_STORAGE_EMPTY'			=> 'In diesem Browser ist der lokale Speicher leer.',
	'UCP_ARCADE_LOCAL_STORAGE_EXPLAIN'			=> 'Hier kannst du die Daten im lokalen Speicher des aktuell verwendeten Browsers einsehen oder löschen.<br>Im lokalen Speicher können auch verschiedene weitere Daten enthalten sein, wie z. B.: Benutzer- und Websiteeinstellungen und Spielfortschrittsdaten.<br><em>Bitte beachte, dass der Datenabruf ausschließlich für diese Website, dieses Gerät und diesen Browser erfolgt.</em>',
	'UCP_ARCADE_LOCAL_STORAGE_NOJS'				=> 'Der Browser lässt kein „JavaScript“ zu, daher ist die lokale Speicherung nicht verfügbar!',
	'UCP_ARCADE_LOCAL_STORAGE_PRIVATE'			=> 'Der Browser ist im Modus „Privat“, deshalb ist die Lokale Speicherung nicht aktiviert!',
	'UCP_ARCADE_MAX_FAV'						=> 'Du hast die maximale Anzahl von %s Spielefavoriten erreicht, aus denen du wählen kannst.',
	'UCP_ARCADE_MIDDLE'							=> 'Mitte',
	'UCP_ARCADE_NOTIFICATION_TYPE_GROUP_TOUR'	=> 'Arcade-Gruppenturnier',
	'UCP_ARCADE_NO_PERM_PM_LOSS_HIGHSCORE'		=> 'Du hast keine Berechtigung, Nachrichten über den Verlust deiner Meisterschaften zu empfangen.',
	'UCP_ARCADE_ONLY_POPUP_FULLSCREEN'			=> 'Nur Popup/Vollbild',
	'UCP_ARCADE_PLAY_INFO_BOX'					=> 'Infokastenposition',
	'UCP_ARCADE_PLAY_INFO_BOX_ENABLE'			=> 'Aktiviere Infobox',
	'UCP_ARCADE_PLAY_INFO_BOX_EXPLAIN'			=> 'Die Infobox wird an der angegebenen Stelle angezeigt.',
	'UCP_ARCADE_PLAY_MOBILE_SCROLL'				=> 'Bildlaufleiste in der mobilen Ansicht aktivieren',
	'UCP_ARCADE_PLAY_MOBILE_SCROLL_EXPLAIN'		=> 'In der mobilen Ansicht hast du die Möglichkeit, die Bildlaufleiste zu deaktivieren, wenn sie dich stört.<br><em>Beachte, dass du das auch erreichen kannst, indem du die Hintergrundbeleuchtung ausschaltest.</em>',
	'UCP_ARCADE_POPUP_VERTICAL_POS'				=> 'Vertikale Position Pop-Up',
	'UCP_ARCADE_POPUP_VERTICAL_POS_EXPLAIN'		=> 'Wenn die Höhe des Bildschirms größer ist als die Höhe des Pop-Up-Fensters, wird das neue Fenster an die hier eingestellte Position angepasst.',
	'UCP_ARCADE_POST'							=> 'Beitragseinstellungen',
	'UCP_ARCADE_RESET_SETTINGS_CONFIRM'			=> 'Möchtest du wirklich alle deine Spielhalleneinstellungen auf die Standardeinstellungen zurücksetzen?',
	'UCP_ARCADE_SELECTED_HIGHLIGHT'				=> 'Ausgewählte markieren',
	'UCP_ARCADE_SELECTED_HIGHLIGHT_REMOVE'		=> 'Ausgewählte Markierung entfernen',
	'UCP_ARCADE_SEND_PM_EXPLAIN'				=> 'Wenn du ein Spiel oder eine Herausforderung im Duell gegen einen Benutzer verlierst, wirst du per privater Nachricht darüber informiert.',
	'UCP_ARCADE_SETTINGS'						=> 'Allgemeine Einstellungen',
	'UCP_ARCADE_TOP'							=> 'Oben',
	'UCP_ARCADE_USER_INFO'						=> 'Ersetzen des Benutzerinformationsblocks',
	'UCP_ARCADE_USER_INFO_EXPLAIN'				=> 'den Benutzerinformationsblock im Willkommensblock ersetzen. Stattdessen kannst du festlegen, dass die am häufigsten gespielten Spiele angezeigt werden.<br><em>Diese Option hat keine Auswirkungen auf die Herausforderungs- und Turnierseiten.</em>',
	'UCP_CAT_ARCADE'							=> 'Spielhalle',
	'UCP_CHALLENGE_ENABLED'						=> 'Herausforderung aktiviert',
	'UCP_CHALLENGE_ENABLED_EXPLAIN'				=> 'Falls aktiviert, können sich Spieler duellieren.'
]);
