<?php
/**
*
* @package phpBB Arcade
* @version $Id: help_developer.php 2450 2021-12-13 20:24:43Z KillBill $
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

$lang = array_merge($lang, [
	'ARCADE_ACP_HELP_FAQ_BLOCK_DATA'					=> 'Spielhallendaten außerhalb der Spielhalle anzeigen',
	'ARCADE_ACP_HELP_FAQ_BLOCK_GAMES'					=> 'Spiele',
	'ARCADE_ACP_HELP_FAQ_BLOCK_GENERAL'					=> 'Allgemein',
	'ARCADE_ACP_HELP_FAQ_BLOCK_INSTALL'					=> 'Installation/Aktualisierung/Deinstallation',
	'ARCADE_ACP_HELP_FAQ_BLOCK_MODULES'					=> 'phpBB Arcade Module',
	'ARCADE_ACP_HELP_FAQ_BLOCK_SCORING'					=> 'Punktevergabe',
	'ARCADE_ACP_HELP_FAQ_DATA_EXT_ANSWER'				=> 'Ja, es gibt Erweiterungen zur phpBB Arcade Software - siehe: <a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/phpBB_Arcade_Extensions.html">Extensions</a>',
	'ARCADE_ACP_HELP_FAQ_DATA_EXT_QUESTION'				=> 'Gibt es Erweiterungen?',
	'ARCADE_ACP_HELP_FAQ_GAMES_DELETE_ANSWER'			=> 'Du kannst Spiele löschen, wenn du die Module „Kategorien verwalten“ oder „Spiele verwalten“ im ACP anklickst, und ein Spiel zum Löschen auswählst. Du bekommst im weiteren Verlauf die Möglichkeit, auch die Dateien vom Server zu entfernen, wenn du ein Spiel löschst. Um dies möglich zu machen, musst du sicherstellen, dass du die korrekten Berechtigungen auf dem Server zum Löschen von Dateien hast. Benutze diese Möglichkeit nur dann, wenn du nicht beabsichtigst, das Spiel erneut zu installieren.',
	'ARCADE_ACP_HELP_FAQ_GAMES_DELETE_QUESTION'			=> 'Wie kann ich ein Spiel entfernen?',
	'ARCADE_ACP_HELP_FAQ_GAMES_HOW_INSTALL_ANSWER'		=> 'Es gibt drei Wege, ein Spiel zu installieren.<br>
															<ul>
																<li>Wenn du das Spiel mit dem eingebauten Downloadsystem heruntergeladen hast, steht dir ein komprimiertes Archiv zur Verfügung, das du per FTP in <strong>[ROOT]/arcade/install/</strong> hochladen und über das ACP installieren kannst.</li>
																<li>Wenn du das Spiel mit dem integrierten Downloadsystem von phpBB Arcade herunterlädst, erhältst du einen komprimierten Ordner, den du über das ACP-Modul „Hochladen/Entpacken“ auf deinen Server laden kannst. Nach dem Hochladen des Spiels kann es entpackt und dann installiert werden.</li>
																<li>Die dritte Möglichkeit ist, FTP zu benutzen. Lade das bereits entpackte Spiel an die richtige Stelle hoch <strong>„[ROOT]/arcade/games/{Erstes Zeichen}/“</strong>. Allerdings wird das nicht empfohlen, weil die Berechtigungen für den Ordner- und Dateizugriff anders sein mögen in diesem Fall.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GAMES_HOW_INSTALL_QUESTION'	=> 'Wie kann ich ein Spiel installieren?',
	'ARCADE_ACP_HELP_FAQ_GAMES_INSTALL_ANSWER'			=> 'Die einfachste Möglichkeit ist, Spiele zu installieren, die bereits im phpBB Arcade- oder IBPro-Format vorliegen. Die Spielhalle wird das automatisch erkennen, wenn du ein Spiel hochlädst oder entpackst. Wenn das Format unpassend ist, musst du es in das korrekte Format ändern, oder, wenn es in irgendeiner Weise nicht funktioniert, möchtest du das Spiel vielleicht auf der Supportseite teilen, und um eine Prüfung bitten.',
	'ARCADE_ACP_HELP_FAQ_GAMES_INSTALL_QUESTION'		=> 'Was ist die einfachste Lösung, Spiele zu installieren?',
	'ARCADE_ACP_HELP_FAQ_GAMES_INS_FILE_ANSWER'			=> 'Ja.<br><textarea rows="30" cols="30" readonly="readonly" onclick="this.focus(); this.select();">&lt;?php
/**
*
* @package phpBB Arcade
* @version 7.7.3
* @author 2011-2026 KillBill
* @copyright (c) 2014-2026 https://jv-arcade.com/ - https://jv-arcade.com/contact
* @license https://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
*	Spielinstallationsdatei für die phpBB Arcade
*
*	Unten findest du Informationen über einige Parameter, die gesetzt werden
*	müssen, um ein Spiel in der Spielhalle zu installieren. Du brauchst diese
*	Datei, damit das Spiel im ACP zur Installation angeboten wird.
*
*	Die einzigen einzustellenden Elemente sind Name des Spiels, Beschreibung, Steuerung,
*	Breite, Höhe, Punktetyp und Rekord-Speichertyp.
*
*	Die Spielhalle unterstützt verschiedene Rekord-Speichertypen von Spielen. (phpBB Arcade, IBPro,
*	IBProV32, Relax Arcade, Olympus Arcade und Spiele, die keine Punkte übermitteln).
*	Benutze die folgenden Konstanten für den Rekord-Speichertyp:
*
*	PHPBBARCADE_GAME
*	IBPRO_GAME
*	IBPROV3_GAME
*	PHPBB_RA_GAME
*	OLYMPUS_GAME
*	NOSCORE_GAME
*
*	Die Spielkontrolle sollte auf die folgenden Konstanten gesetzt werden:
*
*	GAME_CONTROL_KEYBOARD
*	GAME_CONTROL_KEYBOARD_TOUCH
*	GAME_CONTROL_KEYBOARD_MOUSE
*	GAME_CONTROL_MOUSE_TOUCH
*
*	Benutze die Konstante GAME_CONTROL_KEYBOARD, wenn das Spiel nur mit der Tastatur gespielt werden kann.
*	Benutze die Konstante GAME_CONTROL_KEYBOARD_TOUCH, wenn das Spiel mit der Tastatur oder dem Touchscreen gespielt werden kann.
*	Benutze die Konstante GAME_CONTROL_KEYBOARD_MOUSE, wenn das Spiel mit der Tastatur oder der Maus gespielt werden kann.
*	Benutze die Konstante GAME_CONTROL_MOUSE_TOUCH, wenn das Spiel mit der Maus oder dem Touchscreen gespielt werden kann.
*	Wenn du eine zusätzliche Beschreibung erstellen möchtest, wie und mit welchen Tasten das Spiel zu spielen ist, kannst du diese in das Feld „game_control_desc“ schreiben.
*
*	Benutze eine der folgenden Konstanten, um das Drehen der Anzeige von Spielen einzurichten:
*
*	ARCADE_SET_DISABLED
*	ARCADE_SET_ENABLED
*
*	Benutze die Konstante ARCADE_SET_DISABLED, wenn das Spiel die Anzeige sowohl im Hochformat als auch im Querformat nicht unterstützt.
*	Benutze die Konstante ARCADE_SET_ENABLED, wenn das Spiel sowohl Hochformat als auch Querformat unterstützen kann.
*
*	Der Punktetyp sollte mit den folgenden Konstanten festgelegt werden:
*
*	SCORETYPE_HIGH
*	SCORETYPE_LOW
*
*	SCORETYPE_HIGH ist für Spiele, bei denen der beste Punktestand der höchste ist.
*	SCORETYPE_LOW ist für Spiele, bei denen der beste Punktestand der niedrigste ist.
*
*/

// ENTWICKLER BITTE BEACHTEN, geändert - (\'game_name\', \'game_desc\', \'game_control_desc\')
//
// Alle Installationsdateien sollten UTF-8 als Kodierung benutzen und die Dateien sollten kein BOM enthalten (UTF-8 without BOM). Zeilenendeformatierung sollte UNIX sein (LF).
//
// Einige Zeichen, die du vielleicht kopieren möchtest: ‚ ‘ ’ « » „ “ ” …

if (!defined(\'IN_PHPBB\') || !defined(\'IN_PHPBB_ARCADE\'))
{
	exit;
}

$game_file = basename(__FILE__, \'.\' . substr(strrchr(__FILE__, \'.\'), 1));

$game_data = [
	\'game_name\'			=> \'Name des Spiels\',
	\'game_desc\'			=> \'Gib hier eine Beschreibung des Spiels ein.\',
	\'game_control\'		=> GAME_CONTROL_MOUSE_TOUCH,
	\'game_control_desc\'	=> \'Gib eine Beschreibung der Steuerung des Spiels ein.\',
	\'game_image\'			=> $game_file . \'.png\',
	\'game_scorevar\'		=> $game_file,
	\'game_width\'			=> 370,
	\'game_height\'			=> 550,
	\'game_rotatable\'		=> ARCADE_SET_DISABLED,
	\'game_scoretype\'		=> SCORETYPE_HIGH,
	\'game_save_type\'		=> PHPBBARCADE_GAME,
	\'game_inherit\'		=> \'Gib erforderlichenfalls den Vererbungspfad des Spiels ein.\',
	\'privacy_desc\'		=> \'Gib hier die Erklärung zum Datenschutz ein, wenn das Spiel sie benötigt.\',
	\'privacy_link\'		=> \'Gib hier den Link zur Datenschutzerklärung für das Spiel im HTML-Format ein. Wenn mehr als ein Link erforderlich ist, gib jeden in einer neuen Zeile ein.\'
];
</textarea>',
	'ARCADE_ACP_HELP_FAQ_GAMES_INS_FILE_QUESTION'		=> 'Gibt es eine Beispiel-Installationsdatei?',
	'ARCADE_ACP_HELP_FAQ_GAMES_OWN_INS_FILE_ANSWER'		=> 'Nein. Obwohl dies möglich ist, gibt es im ACP zwei Werkzeuge, die bei dieser Aufgabe helfen.<br>
															<ul>
																<li>Es gibt ein Werkzeug, das eine Installationsdatei komplett neu erzeugt. Gebe lediglich die benötigten Informationen ein, und du kannst die Installationsdatei herunterladen, anzeigen lassen oder auf dem Server speichern.</li>
																<li>Es gibt ein Werkzeug, das es ermöglicht, die Installatonsdateien von bereits installierten Spielen anzuzeigen oder herunterzuladen.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GAMES_OWN_INS_FILE_QUESTION'	=> 'Muss ich die Installationsdatei von Hand erstellen?',
	'ARCADE_ACP_HELP_FAQ_GAMES_REQ_INSTALL_ANSWER'		=> 'Wenn du ein bereits entpacktes Spiel hochladen und installieren möchtest, gehe vor wie folgt:<br>
															Die Hauptdateien des Spiels, welche für die Installation erforderlich sind, musst du in den Ordner [ROOT]/arcade/<strong>„games“</strong>/t/ hochladen. Das sind üblicherweise die folgenden:<br><br>
															<b>HTML5</b>
															<ul>
																<li>1. test.php (Spielinstallationsdatei)</li>
																<li>2. test.png (Spielebild 60x60 px)</li>
																<li>3. index.html (Die Datei index.html ist hierbei dafür verantwortlich, das Spiel zu starten.)</li>
															</ul>
															<br>
															<b>Flash</b>
															<ul>
																<li>1. test.php (Spielinstallationsdatei)</li>
																<li>2. test.png (Spielegrafik 60x60 px)</li>
																<li>3. test.swf (Die Datei test.swf enthält die für das Spiel erforderlichen Daten.)</li>
																<li>4. index.htm (Die index.htm ist eine leere Datei.)</li>
																<li>5. gd/ (Wenn das Spiel einen “gamedata”-Ordner hat, benenne ihn um nach “gd”, weil der gamedata-Ordnername nicht länger unterstützt wird.)</li>
															</ul>
															<br>
															Der Name des Spieleordners muss immer gleich dem Namen der Spielinstallationsdatei sein.
															<br><br>
															In diesem Fall ist die korrekte Ordnerstruktur wie folgt:<br>
															<ul>
																<li>1. <strong>[ROOT]/arcade/games/t/test/</strong>test.php</li>
																<li>2. <strong>[ROOT]/arcade/games/t/test/</strong>index.html (Die Datei index.html ist hierbei dafür verantwortlich, das Spiel zu starten.)</li>
															</ul>
															<br>
															Der Ordner „t“ nach dem Ordner „games“ ist immer stellvertretend gemeint als der erste Buchstabe des Dateinamens. Für eine bessere Übersicht platziert „phpBB Arcade“ die Spiele in einer „ABC“-Ordnerstruktur.
															<br>
															Die Datei <strong>„index.html“</strong> darf nur einmal vorhanden sein. Der korrekte Dateiname für leere Dateien zum Schutz der Verzeichnisse vor Auflistung lautet <strong>„index.htm“</strong>in allen Unterordnern.',
	'ARCADE_ACP_HELP_FAQ_GAMES_REQ_INSTALL_QUESTION'	=> 'Was wird benötigt, um ein Spiel zu installieren?',
	'ARCADE_ACP_HELP_FAQ_GAMES_SAVE_TYPE_ANSWER'		=> 'Die Spielhalle unterstützt die folgenden Spielspeichertypen:<br>
															<ul>
																<li>phpBB Arcade</li>
																<li>IBPro</li>
																<li>IBPro V32</li>
																<li>Relax Arcade</li>
																<li>Olympus Arcade</li>
																<li>Spiele ohne Rekordspeicherung</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GAMES_SAVE_TYPE_QUESTION'		=> 'Welche Spiel-Speichertypen werden unterstützt?',
	'ARCADE_ACP_HELP_FAQ_GAMES_TYPE_ANSWER'				=> 'Die Spielhalle unterstützt die folgenden Spieletypen:<br>
															<ul>
																<li>HTML5</li>
																<li>Flash - Konvertiert nach Html5.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GAMES_TYPE_QUESTION'			=> 'Welche Spieletypen werden unterstützt?',
	'ARCADE_ACP_HELP_FAQ_GAMES_ZIP_ANSWER'				=> 'Ja. Für eine korrekte Komprimierung ist die folgende Ordnerstruktur erforderlich:<br>
															<ul>
																<li>test/ (Spielordner)</li>
																<li>test/test.php (Spielinstallationsdatei)</li>
																<li>test/test.png (Spielebild 60x60 px)</li>
																<li>test/index.html (Die Datei index.html ist hierbei dafür verantwortlich, das Spiel zu starten.)</li>
															</ul>
															<br>Wenn das alles in Ordnung ist, kannst du das Spiel direkt packen. Die vollständig komprimierte Datei hat korrekterweise den Namen test.zip oder test.tar.',
	'ARCADE_ACP_HELP_FAQ_GAMES_ZIP_QUESTION'			=> 'Kann ich meine eigene komprimierte Datei anlegen, um ein Spiel zu installieren',
	'ARCADE_ACP_HELP_FAQ_GENERAL_FEATURES_ANSWER'		=> '<ul>
																<li>Unterstützung für zahlreiche Spiele</li>
																<li>Unbegrenzte Kategorien, Unterkategorien und Links (ahmt phpBB3-Foren nach)</li>
																<li>Umfangreiche ACP, MCP- und UCP-Module.</li>
																<li>Administratorenrechte für ACP-Module</li>
																<li>Moderatorenrechte für MCP-Module</li>
																<li>Globale spielhallenbasierte Befugnisse</li>
																<li>Lokale kategorienbasierte Befugnisse</li>
																<li>Passwortgeschützte Kategorien</li>
																<li>Altersgeschützte Kategorien</li>
																<li>Sehr einfache Spielinstallation</li>
																<li>Automatische Konvertierung aller tar-Archive unterstützter Spielspeichertypen</li>
																<li>zZeigt an, wer welches Spiel spielt</li>
																<li>Favoritensystem</li>
																<li>Eingebautes Spieldownloadsystem</li>
																<li>Detaillierte Statistiken</li>
																<li>Spielebewertungssystem</li>
																<li>Spielekommentarsystem</li>
																<li>Spieleherausforderungssystem</li>
																<li>Spieleturniersystem</li>
																<li>Spielegruppenturniersystem</li>
																<li>Spielemeldesystem</li>
																<li>Spiele die Spiele normal oder in einem neuen Fenster</li>
																<li>Suchsystem</li>
																<li>Integration von Punktesystemen</li>
																<li>Und mehr…</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GENERAL_FEATURES_QUESTION'		=> 'Welche Funktionen bietet die phpBB Arcade?',
	'ARCADE_ACP_HELP_FAQ_GENERAL_LANGS_ANSWER'			=> '<ul>
																<li>Unterstützte Sprachpakete können <b><a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/phpBB_Arcade_Languages.html">HIER</a></b> heruntergeladen werden.</li>
																<li>Wenn du ein Sprachpaket für eine neue Sprache erstellt hast, teile es bitte <b><a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/phpBB_Arcade_User_Languages.html">HIER</a></b> mit uns.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GENERAL_LANGS_QUESTION'		=> 'Welche Sprachen werden unterstützt?',
	'ARCADE_ACP_HELP_FAQ_GENERAL_STYLES_ANSWER'			=> '<ul>
																<li>Unterstützte Styles können <b><a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/phpBB_Arcade_Styles.html">HIER</a></b> heruntergeladen werden.</li>
																<li>Wenn du einen neuen Style erstellt hast, teile ihn bitte <b><a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/phpBB_Arcade_User_Styles.html">HIER</a></b> mit uns.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GENERAL_STYLES_IMG_ANSWER'		=> 'Ja. Jede Grafik innerhalb des Standard-Grafikpfades „[ROOT]/ext/jv/arcade/styles/all/theme/images/“ kann styleabhängig sein. Hierzu musst du lediglich eine Grafik gleichen Namens im Verzeichnis „[ROOT]/ext/jv/arcade/styles/dein_style/theme/images/“ platzieren. Falls ein Style keine solche Grafik hat, wird die Standardgrafik verwendet. Die gilt auch für die Kategoriegrafiken. Um styleabhängige Kategoriengrafiken zu verwenden, wähle zunächst die Standardgrafik aus „[ROOT]/ext/jv/arcade/styles/all/theme/images/cats/“, wenn du eine Kategorie erstellst/änderst. Lade dann eine Grafik gleichen Namens in den „[ROOT]/ext/jv/arcade/styles/dein_style/theme/images/cats/“ Ordner hoch.',
	'ARCADE_ACP_HELP_FAQ_GENERAL_STYLES_IMG_QUESTION'	=> 'Kann ich innerhalb der Spielhalle styleabhängige Vorlagen nutzen?',
	'ARCADE_ACP_HELP_FAQ_GENERAL_STYLES_QUESTION'		=> 'Welche Styles werden unterstützt?',
	'ARCADE_ACP_HELP_FAQ_INSTALL_DB_ANSWER'				=> 'Die Spielhalle sollte korrekt mit allen Datenbanken zusammenarbeiten, die phpBB3 unterstützt.',
	'ARCADE_ACP_HELP_FAQ_INSTALL_DB_QUESTION'			=> 'Welche Datenbanken unterstützt die phpBB Arcade?',
	'ARCADE_ACP_HELP_FAQ_INSTALL_INSTALL_ANSWER'		=> '<ul>
																<li>Lade die letzte veröffentlichte Version herunter und entpacke sie.</li>
																<li>Kopiere die Dateien unter Beibehaltung der Ordnerstruktur auf deinen Server in das „[ROOT]/“-Verzeichnis des Forums.</li>
																<li>Gehe in das Administrator Control Panel und klicke auf dem Tab „Anpassen“ im Menüeintrag der phpBB Arcade auf den Link „Aktivieren“, um phpBB Arcade zu installieren.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_INSTALL_INSTALL_QUESTION'		=> 'Wie installiere ich die phpBB Arcade?',
	'ARCADE_ACP_HELP_FAQ_INSTALL_UNINSTALL_ANSWER'		=> 'Gehe in das Administrator Control Panel und klicke auf dem Tab „Anpassen“ im Menüeintrag der phpBB Arcade auf den Link „Deaktivieren“. Danach klicke auf den Link „Arbeitsdaten löschen“, danach entferne alle Dateien der phpBB Arcade von deinem Server.',
	'ARCADE_ACP_HELP_FAQ_INSTALL_UNINSTALL_QUESTION'	=> 'Wie deinstalliere ich die phpBB Arcade?',
	'ARCADE_ACP_HELP_FAQ_INSTALL_UPDATE_ANSWER'			=> '<ul>
																<li>Lade die letzte veröffentlichte Version herunter und entpacke sie.</li>
																<li>Gehe zum Administrator-Kontrollbereich und klicke auf das Menü „Anpassen“, darin klicke auf den Link phpBB Arcade „Deaktivieren“.</li>
																<li>Kopiere die Dateien auf deinen Server in das Wurzelverzeichnis deines Forums, auch genannt „[ROOT]/“, unter Beibehaltung der Ordnerstruktur.</li>
																<li>Gehe zum Administrator-Kontrollbereich und klicke auf das Menü „Anpassen“, darin klicke auf den Link phpBB Arcade „Aktivieren“, und deine phpBB Arcade wird aktualisiert.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_INSTALL_UPDATE_QUESTION'		=> 'Wie aktualisiere ich die phpBB Arcade?',
	'ARCADE_ACP_HELP_FAQ_MODULES_ADD_AUTH_ANSWER'		=> 'Sobald die Spielhalle installiert ist, musst du die korrekten Befugnisse einstellen. Die Spielhalle verwendet kategorienbasierte Befugnisse, die das Befugnissystem von phpBB3 nachahmen; dies beinhaltet die Nutzung von Rollen. Du musst auch globale Benutzer-/Gruppenbefugnisse festlegen. Außerdem kannst du Administratorenbefugnisse verwenden, um Benutzer-/Gruppenzugriff auf ACP-Module der Spielhalle zu regeln.',
	'ARCADE_ACP_HELP_FAQ_MODULES_ADD_AUTH_QUESTION'		=> 'Wo muss ich die phpBB Arcade-Befugnisse einstellen?/Warum habe ich nicht die Befugnis, die Spielhalle aufzurufen?',
	'ARCADE_ACP_HELP_FAQ_MODULES_ANSWER'				=> '<strong><br>Die Spielhalle beinhaltet folgende ACP-Module:<br></strong>
															<strong>Konfiguration</strong><br>
															<ul>
																<li><strong>Systemeinstellungen</strong> - Ermöglicht das globale Ein-/Ausschalten von Systemen.</li>
																<li><strong>Allgemeine Einstellungen</strong> - Allgemeine Spielhalleneinstellungen ändern</li>
																<li><strong>Erweiterungseinstellungen</strong> - Erweiterungseinstellungen für die Spielhalle steuern.</li>
																<li><strong>Spieleinstellungen</strong> - Spieleinstellungen der Spielhalle ändern</li>
																<li><strong>Herausforderungseinstellungen</strong> - Herausforderungsseinstellungen der Spielhalle ändern</li>
																<li><strong>Turniereinstellungen</strong> - Turniereinstellungen für die Spielhalle ändern.</li>
																<li><strong>Gruppenturnier-Einstellungen</strong> - Steuert die Gruppenturniereinstellungen für die Arcade.</li>
																<li><strong>Weitere Funktionen</strong> - Funktionen der Spielhalle einstellen</li>
																<li><strong>Pages settings</strong> - Seiteneinstellungen der Spielhalle ändern</li>
																<li><strong>Pfadeinstellungen</strong> - Pfadeinstellungen der Spielhalle ändern</li>
																<li><strong>Lasteinstellungen</strong> - Reduziert oder erhöht die Belastung der Spielhalle durch Ein-/Ausschalten einzelner Module</li>
																<li><strong>Aktivitätsrangeinstellungen</strong> - Aktivitätsrangeinstellungen für die Spielhalle</li>
															</ul><br>
															<strong>Spielhalle verwalten</strong><br>
															<ul>
																<li><strong>Menü verwalten</strong> - Du kannst Menüschaltflächen hinzufügen, bearbeiten oder löschen. Die Hauptschaltflächen des Menüs können nur verschoben oder umbenannt werden.</li>
																<li><strong>Kategorien verwalten</strong> - Kategorien und Spiele hinzufügen, ändern, entfernen, verschieben und neu abgleichen</li>
																<li><strong>Spiele verwalten</strong> - Spiele ändern/löschen</li>
																<li><strong>Benutzer verwalten</strong> - Spielstände für alle Spiele ändern</li>
																<li><strong>Turniere verwalten</strong> - Erlaubt dir, Turniere zu erstellen, zu bearbeiten, und zu löschen.</li>
																<li><strong>Gruppenturniere verwalten</strong> - Erlaubt dir, Gruppenturniere zu erstellen, zu bearbeiten, und zu löschen.</li>
																<li><strong>Ankündigungen verwalten</strong> - Ankündigungen einstellen/bearbeiten.</li>
																<li><strong>Ränge verwalten</strong> - Ränge hinzufügen, bearbeiten und löschen.</li>
															</ul><br>
															<strong>Spielfunktion</strong><br>
															<ul>
																<li><strong>Spiele hinzufügen</strong> - Ein Spiel der Spielhalle hinzufügen, einer Kategorie können mehrere Spiele auf einmal hinzugefügt werden</li>
																<li><strong>Spiele hochladen/entpacken</strong> - Wenn das Installationsverzeichnis gepackte Spiele enthält, kannst du sie entpacken, oder du kannst eine oder mehrerere Dateien mittels des „Durchsuchen“-Buttons hochladen. Nach dem Entpacken stehen die Spiele zur Installation bereit</li>
																<li><strong>Spiele sichern</strong> - Sichert alle Spiele in den ausgewählten Kategorien</li>
																<li><strong>Spiele herunterladen</strong> - Lädt unter der phpBB-Spielhalle lauffähige Spiele von kompatiblen Seiten herunter</li>
															</ul><br>
															<strong>Werkzeuge</strong><br>
															<ul>
																<li><strong>Meldungen anzeigen</strong> - Alle Meldungen zu Spielen ansehen</li>
																<li><strong>Deleted games</strong> - View Deleted games and its causes.</li>
																<li><strong>Verbannte Benutzer</strong> - Verbannte Benutzer ansehen / entbannen.</li>
																<li><strong>Downloadstatistik</strong> - Statistik des Downloadsystems ansehen</li>
																<li><strong>Installationsdatei erstellen</strong> - Erzeugt eine neue Spielinstallationsdatei zum Herunterladen/Ansehen/Speichern auf dem Server, oder lädt eine bestehende Spielinstallationsdatei herunter, oder zeigt sie an</li>
																<li><strong>Benutzerhandbuch</strong> - Zeigt das phpBB Arcade-Benutzerhandbuch an</li>
															</ul><br>
															<strong>Spielhallenprotokolle</strong><br>
															<ul>
																<li><strong>Administratorprotokoll</strong> - Administrative Aktionen werden aufgelistet.</li>
																<li><strong>Moderationsprotokoll</strong> - Moderationsaktionen werden aufgelistet.</li>
																<li><strong>Benutzerprotokoll</strong> - Benutzeraktionen werden aufgelistet.</li>
																<li><strong>Fehlerprotokoll</strong> - Verschiedene Fehler werden aufgelistet.</li>
															</ul><br>
															<strong>Berechtigungsrollen</strong><br>
															<ul>
																<li><strong>Kategorienrollen</strong> - Ändert die Rollenzuweisungen für Spielhallenkategorien</li>
															</ul><br>
															<strong>Kategorienbasierte Berechtigungen</strong><br>
															<ul>
																<li><strong>Kategorienbefugnisse</strong> - Legt fest, welche Benutzer und Gruppen auf welche Teile der Spielhalle zugreifen dürfen</li>
																<li><strong>Benutzerbefugnisse für Kategorien</strong> - Spielhallenbefugnisse Benutzern zuweisen</li>
																<li><strong>Gruppenbefugnisse für Kategorien</strong> - Spielhallenbefugnisse Benutzergruppen zuweisen</li>
																<li><strong>Kategorienbefugnisse kopieren</strong> - Kategorienbefugnisse einer Kategorie in eine oder mehrere andere Kategorien kopieren</li>
															</ul><br>
															<strong>Berechtigungsmasken</strong><br>
															<ul>
																<li><strong>Spielhallenbefugnisse für Kategorien</strong> - Zeigt die Spielhallenbefugnisse von ausgewählten Benutzern/Gruppen und Kategorien an.</li>
															</ul><br>
															<strong>Installationsfunktionen</strong><br>
															<ul>
																<li><strong>Installationsprüfung</strong> - Prüfung, ob phpBB Arcade korrekt installiert ist.</li>
																<li><strong>Spieldaten aktualisieren</strong> - Die Spielegröße wird automatisch ermittelt und aktualisiert, wenn die Daten nicht korrekt sind.</li>
																<li><strong>Spielinstallationsdateien konvertieren</strong> - Konvertiert die Spielinstallationsdateien auf die aktuelle Version.</li>
															</ul><br>
															<strong>Die Spielhalle beinhaltet folgende MCP-Module:</strong><br>
															<ul>
																<li><strong>Spiele verwalten</strong> - Spiel bearbeiten/verschieben und zurücksetzen.</li>
																<li><strong>Turniere verwalten</strong> - Turnier erstellen/bearbeiten.</li>
																<li><strong>Gruppenturniere verwalten</strong> - Gruppenturniere erstellen/bearbeiten.</li>
																<li><strong>Moderationsprotokoll</strong> - Moderatoraktionen werden aufgelistet.</li>
															</ul><br>
															<strong>Die Spielhalle beinhaltet die folgenden UCP Module für die Benutzer:</strong><br>
															<ul>
																<li><strong>Einstellungen</strong> - Diese Einstellungen kontrollieren verschiedene Bereiche der Spielhalle.</li>
																<li><strong>Spieleinstellungen</strong> - Personalisiere die Einstellungen für die Spieleseite.</li>
																<li><strong>Beitragseinstellungen</strong> - Anpassen von Beitragseinstellungen.</li>
																<li><strong>Favoriten verwalten</strong> - Du kannst deine Lieblingsspiele ansehen, markieren und entfernen.</li>
																<li><strong>Lokalen Speicher verwalten</strong> - Lokale Daten des Gerätebrowsers anzeigen und löschen.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_MODULES_AUTH_ANSWER'			=> 'Um alle Module zu sehen, musst du als Gründer eingetragen sein, oder die korrekten Administratorenbefugnisse besitzen. Wenn du dennoch nicht alle Module sehen kannst, liegt dies wahrscheinlich an doppelten Werten in der Tabelle acl_options. Bitte führe die Installationsprüfung aus, um dies zu überprüfen.',
	'ARCADE_ACP_HELP_FAQ_MODULES_AUTH_QUESTION'			=> 'Wie kommt es, dass ich nicht alle ACP-Module sehen kann?',
	'ARCADE_ACP_HELP_FAQ_MODULES_DOWNLOAD_ANSWER'		=> 'Die Möglichkeit, Spiele herunterzuladen, wird über die Spielhallenbefugnisse gesteuert. Setze die Befugnisse nach deinen Bedürfnissen, und deine Benutzer werden den Link zum Herunterladen beim Betrachten oder Spielen der Spiele sehen. Um das Herunterladen zu vereinfachen, kannst du im ACP auch die globale Downloadfunktion aktivieren. Diese ermöglicht es anderen Nutzern der Spielhalle, Spiele aus deinem Forum über das Modul „Spiele herunterladen“ in ihrer Spielhalle zu installieren.',
	'ARCADE_ACP_HELP_FAQ_MODULES_DOWNLOAD_QUESTION'		=> 'Wie biete ich Spieledownloads an?',
	'ARCADE_ACP_HELP_FAQ_MODULES_NO_FAV_ANSWER'			=> 'Das Modul „meine Favoriten“ ist nur sichtbar, wenn du die entsprechenden Berechtigungen besitzt. Diese kann nur der Administrator einstellen.',
	'ARCADE_ACP_HELP_FAQ_MODULES_NO_FAV_QUESTION'		=> 'Warum kann ich das Modul „Favoriten“ nicht sehen?',
	'ARCADE_ACP_HELP_FAQ_MODULES_NO_GAMES_ANSWER'		=> 'Um Spiele hinzufügen zu können, müssen zuvor auch Kategorien erstellt worden sein, in die sie aufgenommen werden können. Verwende hierfür das ACP-Modul <strong>Spielhalle verwalten</strong>. Das Erstellen einer Kategorie ist sehr ähnlich dem Erstellen eines Forums in phpBB3.',
	'ARCADE_ACP_HELP_FAQ_MODULES_NO_GAMES_QUESTION'		=> 'Warum kann ich keine Spiele hinzufügen?',
	'ARCADE_ACP_HELP_FAQ_MODULES_QUESTION'				=> 'Welche ACP-Module hat die phpBB Arcade?',
	'ARCADE_ACP_HELP_FAQ_MODULES_REQ_DOWNLOAD_ANSWER'	=> 'Dieses Modul setzt voraus, dass <strong>„allow_url_fopen“</strong> aktiviert oder PHPs <strong>cURL-Bibliothek</strong> installiert ist. Das kann überprüft werden, indem du die phpinfo()-Funktion deines Servers aufrufst. Wenn der Wert für <strong>„allow_url_fopen“</strong> auf „off“ steht und die <strong>cURL-Bibliothek</strong> nicht installiert ist, funktioniert das Modul nicht.',
	'ARCADE_ACP_HELP_FAQ_MODULES_REQ_DOWNLOAD_QUESTION'	=> 'Warum findet das Modul „Spiele herunterladen“ keine Spiele?',
	'ARCADE_ACP_HELP_FAQ_MODULES_USE_DOWNLOAD_ANSWER'	=> 'Alles, was du tun musst, ist, den Pfad zum Spielhallen-Wurzelverzeichnis des Forums einzugeben, das Spiele anbietet. Du wirst dann eine Auflistung der zum Download verfügbaren Spiele sehen. Wenn ein Spiel grün hervorgehoben wird, so bedeutet dies, dass sich dieses Spiel bereits auf deinem Server befindet. Bitte beachte, dass die Befugnisse zum Download von der Seite gesteuert werden, von der du die Spiele herunterlädst. So musst du zum Beispiel dort angemeldet sein, und/oder einer besonderen Benutzergruppe angehören, um Spiele herunterladen zu können. Kontaktiere den Administrator des Forums, wenn du hierzu Fragen hast.<br><br><a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/dev/images/acp_download_games.png"><img src="https://jv-arcade.com/dev/images/acp_download_games.png" width="300" alt="ACP Spiele herunterladen" title="ACP Spiele herunterladen"></a>',
	'ARCADE_ACP_HELP_FAQ_MODULES_USE_DOWNLOAD_QUESTION'	=> 'Wie verwende ich das Modul „Spiele herunterladen“?',
	'ARCADE_ACP_HELP_FAQ_SCORING_GUEST_SAVE_ANSWER'		=> 'Auch wenn du der Benutzergruppe „Gäste“ die richtigen Rechte erteilst, können sie in der Spielhalle keine Punkte speichern. Das ist so beabsichtigt.',
	'ARCADE_ACP_HELP_FAQ_SCORING_GUEST_SAVE_QUESTION'	=> 'Warum können Gäste keine Punkte speichern, obwohl sie die korrekten Rechte besitzen?',
	'ARCADE_ACP_HELP_FAQ_SCORING_SAVE_ANSWER'			=> 'Das Erste, was man überprüfen sollte, ist, ob der Spieltyp überhaupt von der Spielhalle unterstützt wird, und die Punktevariable korrekt gesetzt ist. Die letzte zu überprüfende Einstellung betrifft die ACP-Einstellungen für die Cookies. Wenn deine Seiten-URL <strong>http://www.beispiel.com</strong> lautet, so sollte die Cookiedomain <strong>beispiel.com</strong> sein. Außerdem muss die Cookie Sicherheit (Cookies, Option „Sicherer Server“) im ACP, Registerkarte Allgemein, deaktiviert sein, denn diese unterstützt nur den Spieletyp phpBB Arcade.',
	'ARCADE_ACP_HELP_FAQ_SCORING_SAVE_QUESTION'			=> 'Warum werden meine Punkte nicht gespeichert?',
	'ARCADE_ACP_HELP_FAQ_SCORING_TEST_ANSWER'			=> 'Es ermöglicht dir, zu spielen, ohne dass Daten oder Punkte gespeichert werden. Dadurch kannst du Spiele zunächst testen, um sicherzustellen, dass sie korrekt funktionieren. Wenn du ein Spiel beendet hast, wird dir angezeigt, welche Daten gespeichert worden wären. Nach Beendigung eines Spiels erhalten Administratoren detaillierte Informationen über das Spiel, falls das “phpBB-DEBUG”-System aktiviert ist.<br><em>Um das “phpBB-DEBUG”-System aktivieren zu können, ist erforderlich die „JVA - Debug”-Extension zu installieren.</em>',
	'ARCADE_ACP_HELP_FAQ_SCORING_TEST_CAT_ANSWER'		=> 'Öffne das ACP-Modul „Spielhalle verwalten“. Bearbeite die gewünschte Kategorie und setze dort die Option „Testmodus“ auf „Ja“.',
	'ARCADE_ACP_HELP_FAQ_SCORING_TEST_CAT_QUESTION'		=> 'Wie aktiviere ich den „Testmodus“ für eine Kategorie?',
	'ARCADE_ACP_HELP_FAQ_SCORING_TEST_QUESTION'			=> 'Was ist der „Testmodus“?'
]);
