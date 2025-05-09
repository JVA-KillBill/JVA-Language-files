<?php
/**
*
* @package Board3 Portal v2.3
* @copyright (c) 2023 Board3 Group ( www.board3.de )
* @license GNU General Public License, version 2 (GPL-2.0-only)
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


$lang = array_merge($lang, [
	'ACP_FA'							=> 'Font Awesome Styles',
	'ACP_FA_EXP'						=> 'Hier kannst du einstellen welche Styles Font Awesome Icons nutzen sollen.',
	'ACP_PORTAL_COLUMN_WIDTH_SETTINGS'	=> 'Breiteneinstellung der rechten und linken Spalte',
	'ACP_PORTAL_CONFIG_INFO'			=> 'Allgemeine Einstellungen',
	'ACP_PORTAL_GENERAL_TITLE'			=> 'Portal Verwaltung',
	'ACP_PORTAL_GENERAL_TITLE_EXP'		=> 'Danke, dass du dich für board3 Portal entschieden hast. Auf dieser Seite kannst du dein Portal verwalten. Diese Anzeige gibt dir einen schnellen Überblick über die verschiedenen Portal-Einstellungen.',
	'ACP_PORTAL_MODULES_EXP'			=> 'Du kannst deine Portal Module hier verwalten. Falls du alle Module deaktivierst, dann deaktiviere bitte auch das Portal.',
	'ACP_PORTAL_SHOW_ALL'				=> 'Zeige portal auf allen Seiten',
	'ACP_PORTAL_SHOW_ALL_EXP'			=> 'Zeigt das Portal auf allen Seiten des Forums an.',
	'ADD_MODULE'						=> 'Modul Hinzufügen',

	'B3P_FILE_NOT_FOUND'				=> 'Die angegebene Datei konnte nicht gefunden werden',

	'CHOOSE_MODULE'						=> 'Modul Auswählen',
	'CHOOSE_MODULE_EXP'					=> 'Wähle ein Modul von der Dropdown-Liste',

	'DELETE_MODULE_CONFIRM'				=> 'Bist du sicher, dass du das Modul "%1$s" löschen möchtest?',

	'LINK_ADDED'						=> 'Der Link wurde erfolgreich eingetragen',
	'LINK_UPDATED'						=> 'Der Link wurde erfolgreich geändert',

	'MODULE_ADD_ONCE'					=> 'Diese Modul kann nur ein Mal hinzugefügt werden.',
	'MODULE_FA'							=> 'Font Awesome Icon',
	'MODULE_FA_EXP'						=> 'Hier kannst du ein <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener noreferrer"><strong>Font Awesome</strong></a> Icon einstellen. Dieses wird verwendet wenn der Style Font Awesome verwendet.',
	'MODULE_FA_SIZE'					=> 'Font Awesome Icongröße',
	'MODULE_FA_SIZE_EXP'				=> 'Hier kannst du die Größe des Font Awesome Icons einstellen (in Pixel).',
	'MODULE_IMAGE'						=> 'Modul Bild',
	'MODULE_IMAGE_ERROR'				=> 'Während dem Prüfen des Modul Bildes sind ein oder mehrere Fehler aufgetreten:',
	'MODULE_IMAGE_EXP'					=> 'Gebe den Dateinamen des Modul Bildes ein. Das Bild muss sich im Verzeichnis styles/all/theme/images/portal/ befinden.',
	'MODULE_IMAGE_HEIGHT'				=> 'Modul Bild Höhe',
	'MODULE_IMAGE_HEIGHT_EXP'			=> 'Gebe die Höhe des Modul Bildes in Pixeln ein.',
	'MODULE_IMAGE_WIDTH'				=> 'Modul Bild Breite',
	'MODULE_IMAGE_WIDTH_EXP'			=> 'Gebe die breite des Modul Bildes in Pixeln ein.<br>Wenn kein Modul Bild gewünscht, gebe <strong>0</strong> als Wert ein.',
	'MODULE_NAME'						=> 'Modul Name',
	'MODULE_NAME_EXP'					=> 'Gebe den Namen ein der für das Modul in der Modul Konfiguration angezeigt werden soll.',
	'MODULE_NOT_EXISTS'					=> 'Das gewählte Modul existiert nicht.',
	'MODULE_OPTIONS'					=> 'Modul Optionen',
	'MODULE_PERMISSIONS'				=> 'Modul Berechtigungen',
	'MODULE_PERMISSIONS_EXP'			=> 'Wähle die Gruppen aus, die berechtigt sein sollen, das Modul zu sehen. Sollen alle Benutzer das Modul sehen können, wähle nichts aus.<br>An- / abwählen mehrerer Gruppen indem man <samp>Strg</samp> gedrückt hält und klickt.',
	'MODULE_POS_BOTTOM'					=> 'Unten',
	'MODULE_POS_CENTER'					=> 'Mittlere Spalte',
	'MODULE_POS_LEFT'					=> 'Linke Spalte',
	'MODULE_POS_RIGHT'					=> 'Rechte Spalte',
	'MODULE_POS_TOP'					=> 'Oben',
	'MODULE_RESET'						=> 'Modul Einstellungen zurücksetzen',
	'MODULE_RESET_CONFIRM'				=> 'Bist du sicher, dass du die Einstellungen des Moduls "%1$s" zurücksetzen willst?',
	'MODULE_RESET_EXP'					=> 'Dies wird alle Einstellungen des Moduls auf die Standardeinstellungen zurücksetzen!<br>Aus technischen Gründen muss nach dem Zurücksetzen auf die Standardeinstellungen, das FA Icon erneut eingeben werden!<br>Passende Icons können der <a href="https://github.com/board3/Board3-Portal/wiki#empfohlene-fa-icons--recommended-fa-icons" target="_blank" rel="noopener noreferrer"><strong>Liste empfohlener FA-Icons</strong></a> entnommen werden.',
	'MODULE_RESET_SUCCESS'				=> 'Modul Einstellungen erfolgreich zurückgesetzt.',
	'MODULE_STATUS'						=> 'Aktiviere Modul',
	'MOVE_LEFT'							=> 'Nach links',
	'MOVE_RIGHT'						=> 'Nach rechts',

	'NO_MODULES'						=> 'Es wurden keine Module gefunden.',

	'PORTAL_BASIC_INSTALL'				=> 'Füge Basismodule hinzu',
	'PORTAL_BASIC_UNINSTALL'			=> 'Entferne Module von Datenbank',
	'PORTAL_DISPLAY_JUMPBOX'			=> 'Zeige Jumpbox',
	'PORTAL_DISPLAY_JUMPBOX_EXP'		=> 'Die Jumpbox auf dem Portal anzeigen. Die Jumpbox wird nur angezeigt, wenn sie gleichzeitig unter Server-Konfiguration/Serverlast aktiviert ist.',
	'PORTAL_ENABLE'						=> 'Portal aktivieren',
	'PORTAL_ENABLE_EXP'					=> 'Wenn deaktiviert, wird das komplette Portal abgeschaltet.',
	'PORTAL_LEFT_COLUMN'				=> 'Linke Spalte aktivieren',
	'PORTAL_LEFT_COLUMN_EXP'			=> 'Die Linke Spalte auf dem Portal anzeigen',
	'PORTAL_LEFT_COLUMN_WIDTH'			=> 'Breite der linken Spalte',
	'PORTAL_LEFT_COLUMN_WIDTH_EXP'		=> 'Ändere hier die Breite der linken Spalte in Pixel, empfohlener Wert 180',
	'PORTAL_RIGHT_COLUMN'				=> 'Rechte Spalte aktivieren',
	'PORTAL_RIGHT_COLUMN_EXP'			=> 'Die Rechte Spalte auf dem Portal anzeigen',
	'PORTAL_RIGHT_COLUMN_WIDTH'			=> 'Breite der rechten Spalte',
	'PORTAL_RIGHT_COLUMN_WIDTH_EXP'		=> 'Ändere hier die Breite der rechten Spalte in Pixel, empfohlener Wert 180',
	'PORTAL_SHOW_ALL_LEFT'				=> 'Links',
	'PORTAL_SHOW_ALL_RIGHT'				=> 'Rechts',
	'PORTAL_SHOW_ALL_SIDE'				=> 'Spalte die auf allen Seiten angezeigt werden soll',
	'PORTAL_SHOW_ALL_SIDE_EXP'			=> 'Wähle welche Spalte auf allen seiten des Portals angezeigt werden soll.',

	'SUCCESS_ADD'						=> 'Das Modul wurde erfolgreich hinzugefügt.',
	'SUCCESS_DELETE'					=> 'Das Modul wurde erfolgreich entfernt.',

	'UNABLE_TO_ADD_MODULE'				=> 'Es ist nicht möglich den Block in die gewählte Spalte hinzuzufügen.',
	'UNABLE_TO_MOVE'					=> 'Es ist nicht möglich den Block in die gewählte Spalte zu verschieben.',
	'UNABLE_TO_MOVE_ROW'				=> 'Es ist nicht möglich den Block in die gewählte Reihe zu verschieben.',
	'UNKNOWN_MODULE_METHOD'				=> 'Die Modul Methode des %1$s Moduls konnte nicht gefunden werden.',
]);
