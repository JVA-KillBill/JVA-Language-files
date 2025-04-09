<?php
/**
*
* @package phpBB Arcade
* @version $Id: help_user.php 2477 2022-02-02 06:39:13Z Scanialady $
* @author 2011-2025 KillBill
* @copyright (c) 2014-2025 https://jv-arcade.com/ - https://jv-arcade.com/contact
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
	'ARCADE_HELP_FAQ_ARCADE_CREATE_ANSWER'				=> 'Diese Erweiterung (in ihrer Originalform) wurde von <a href="https://jv-arcade.com/">JV-Arcade Group</a> erstellt, die auch das Urheberrecht ausübt. Sie wurde entwickelt unter der <a href="https://jv-arcade.com/License.html.">JV-Aracde Lizenz</a> und darf nicht weiterverteilt und nicht verändert werden. Nähere Informationen finden sich unter dem Link.',
	'ARCADE_HELP_FAQ_ARCADE_CREATE_QUESTION'			=> 'Wer hat die Arcade geschrieben?',
	'ARCADE_HELP_FAQ_ARCADE_NOT_AVAILABLE_X_ANSWER'		=> 'Diese Erweiterung wurde von der JV-Arcade Group erstellt und lizensiert. Wenn du glaubst, dass neue Dienste oder Funktionen für die Spielhalle notwendig sind, oder du Fehler gefunden hast, dann besuche bitte das <a href="https://jv-arcade.com/New_Ideas.html">JV-Arcade, New Ideas Centre</a>, wo weitere Informationen verfügbar sind.',
	'ARCADE_HELP_FAQ_ARCADE_NOT_AVAILABLE_X_QUESTION'	=> 'Warum ist Funktion X nicht verfügbar?',
	'ARCADE_HELP_FAQ_BLOCK_ARCADE'						=> 'Fragen zu phpBB Arcade',
	'ARCADE_HELP_FAQ_BLOCK_CAT'							=> 'Fragen zu den Kategorien',
	'ARCADE_HELP_FAQ_BLOCK_CHALLENGE'					=> 'Fragen zu den Herausforderungen',
	'ARCADE_HELP_FAQ_BLOCK_FAV'							=> 'Fragen zu deinen Spielefavoriten',
	'ARCADE_HELP_FAQ_BLOCK_GENERAL'						=> 'Allgemeine Fragen',
	'ARCADE_HELP_FAQ_BLOCK_GROUP_TOUR'					=> 'Fragen zu Gruppenturnieren',
	'ARCADE_HELP_FAQ_BLOCK_INTRO'						=> 'Einleitung',
	'ARCADE_HELP_FAQ_BLOCK_PLAYING'						=> 'Fragen zu den Spielen',
	'ARCADE_HELP_FAQ_BLOCK_POINTS'						=> 'Fragen zum Punktesystem',
	'ARCADE_HELP_FAQ_BLOCK_SEARCH'						=> 'Fragen zur Suche',
	'ARCADE_HELP_FAQ_BLOCK_TOUR'						=> 'Fragen zu den Turnieren',
	'ARCADE_HELP_FAQ_BLOCK_USER_SET'					=> 'Benutzereinstellungen',
	'ARCADE_HELP_FAQ_CAT_AGE_ANSWER'					=> 'Es ist möglich, dass Administratoren leicht zu spielende Spiele für Kinder in einer Kategorie gesammelt haben, und nur Jugendliche darin spielen können. Ebenso ist es möglich, dass sich Spiele in einer Kategorie befinden, die für Minderjährige nicht geeignet sind, und die können dann nur von Erwachsenen gespielt werden.',
	'ARCADE_HELP_FAQ_CAT_AGE_QUESTION'					=> 'Einige Kategorien sind durch eine Altersbegrenzung geschützt, warum?',
	'ARCADE_HELP_FAQ_CAT_PASSWORD_ANSWER'				=> 'Wenn eine Kategorie durch ein Passwort geschützt ist, musst du einen Administrator danach fragen.',
	'ARCADE_HELP_FAQ_CAT_PASSWORD_QUESTION'				=> 'Die Kategorie erfordert ein Passwort, was ist zu tun?',
	'ARCADE_HELP_FAQ_CAT_STAT_ANSWER'					=> 'Ja, wenn du eine Kategorie betrittst, wirst du den Link „Kategorienstatistik ansehen“ neben dem Namen der Kategorie sehen.',
	'ARCADE_HELP_FAQ_CAT_STAT_QUESTION'					=> 'Ich möchte die Statistik für bestimmte Kategorien ansehen, geht das?',
	'ARCADE_HELP_FAQ_CAT_USER_PERMISSION_ANSWER'		=> 'Wenn du eine Kategorie betrittst, findest du ganz unten „Spielhallenbefugnisse“, und darunter die für dich geltenden Berechtigungen.',
	'ARCADE_HELP_FAQ_CAT_USER_PERMISSION_QUESTION'		=> 'Welche Berechtigungen gelten für mich?',
	'ARCADE_HELP_FAQ_CHALLENGE_ACCEPT_ANSWER'			=> 'Wenn du eine Herausforderung erhalten hast, musst du diese zunächst auf der Herausforderungsseite annehmen, und das Spiel dort starten. Erst dann startet das Duell.',
	'ARCADE_HELP_FAQ_CHALLENGE_ACCEPT_QUESTION'			=> 'Ich habe eine Herausforderung erhalten, dann spielte ich das Spiel, aber es steht immer noch da, dass ich eine Herausforderung erhalten habe. Warum wurde das Spiel nicht berücksichtigt?',
	'ARCADE_HELP_FAQ_CHALLENGE_ARRIVED_ANSWER'			=> 'Jemand möchte ein Spiel gegen dich spielen, und hat dir eine Herausforderung gesendet. Du kannst annehmen, oder ablehnen.',
	'ARCADE_HELP_FAQ_CHALLENGE_ARRIVED_QUESTION'		=> 'Was bedeutet „Herausforderung erhalten“?',
	'ARCADE_HELP_FAQ_CHALLENGE_BUG_GAME_ANSWER'			=> 'In diesem Fall benutze bitte den Link „Spiel melden“, der bei den Spieloptionen enthalten ist. Die Herausforderung wird sofort gelöscht, und dein Wetteinsatz und die Spielkosten werden dir umgehend erstattet.<br><i>Beachte, dass es nicht möglich ist ein fehlerhaftes Spiel zu melden, wenn ein Administrator das Fehlermeldesystem deaktiviert.</i>',
	'ARCADE_HELP_FAQ_CHALLENGE_BUG_GAME_QUESTION'		=> 'Ich wurde herausgefordert, aber das betreffende Spiel ist fehlerhaft. Was soll ich tun?',
	'ARCADE_HELP_FAQ_CHALLENGE_DRAW_BET_ANSWER'			=> 'Wenn eine Herausforderung mit einem Unentschieden endet, bekommen beide Spieler ihren Einsatz zurück.',
	'ARCADE_HELP_FAQ_CHALLENGE_DRAW_BET_QUESTION'		=> 'Was passiert mit dem Einsatz, wenn das Duell unentschieden endet?',
	'ARCADE_HELP_FAQ_CHALLENGE_END_ANSWER'				=> 'Die Herausforderung sendet bei jeder Runde eine Benachrichtigung als Private Nachricht, wenn der Versand Privater Nachrichten aktiviert ist.',
	'ARCADE_HELP_FAQ_CHALLENGE_END_QUESTION'			=> 'Wie erfahre ich, dass eine Herausforderung beendet ist?',
	'ARCADE_HELP_FAQ_CHALLENGE_EXP_TIME_ANSWER'			=> 'Das Ablaufdatum steht für die Zeit, zu der die Herausforderungen automatisch gelöscht werden. Bis dahin müssen die Herausforderungen angenommen worden sein.',
	'ARCADE_HELP_FAQ_CHALLENGE_EXP_TIME_QUESTION'		=> 'Was ist das „Ablaufdatum“?',
	'ARCADE_HELP_FAQ_CHALLENGE_GAME_CHAMP_ANSWER'		=> 'Wenn du in dem normalen Fenster spielst, findest du neben dem Spielfeld unter anderem die Box „Spieloptionen“. In dieser Box findest du einen Link „Meister herausfordern“. Du kannst den Rekordhalter einfach herausfordern, indem du auf den Link klickst. Er muss die Herausforderung akzeptieren, ehe das Duell starten kann.',
	'ARCADE_HELP_FAQ_CHALLENGE_GAME_CHAMP_QUESTION'		=> 'Wie kann ich möglichst leicht einen Superchampion herausfordern?',
	'ARCADE_HELP_FAQ_CHALLENGE_ONGOING_ANSWER'			=> 'Das sind gestartete Herausforderungen für ein Spiel, die angenommen worden sind, und die von beiden Parteien nun gespielt werden können. Sollte für das Spiel ein Fehler gemeldet werden, wird das Duell abgebrochen.',
	'ARCADE_HELP_FAQ_CHALLENGE_ONGOING_QUESTION'		=> 'Was bedeutet „Laufende Herausforderungen“?',
	'ARCADE_HELP_FAQ_CHALLENGE_PERMISSION_ANSWER'		=> 'Die Herausforderung ist nur sichtbar, wenn sie eingeschaltet ist, und wenn der Administrator dir den Zugriff erlaubt hat.',
	'ARCADE_HELP_FAQ_CHALLENGE_PERMISSION_QUESTION'		=> 'Warum kann ich die Herausforderung nicht sehen?',
	'ARCADE_HELP_FAQ_CHALLENGE_POINTS_ANSWER'			=> 'Wenn ein Benutzer dich herausfordert, der einen Wetteinsatz von beispielsweise 100 Punkten bestimmt hat, werden diese im Moment der Herausforderung von deinem Guthaben abgezogen. Wenn die Kosten des Spielstarts beispielsweie 5 Punkte betragen, werden auch diese abgezogen. Insgesamt zieht dir das System also 105 Punkte ab, um die gesamten Kosten der Herausforderung zu decken. Falls du die Herausforderung ablehnst, wird dir dieser abgezogene Betrag sofort zurück erstattet. Auch im Falle, dass die Herausforderung angenommen wurde, das Spiel aber nicht gespielt wird, oder dass die Herausforderung vorher abläuft, werden Einsatz und Spielkosten ebenfalls zurück erstattet.',
	'ARCADE_HELP_FAQ_CHALLENGE_POINTS_QUESTION'			=> 'Ich wurde herausgefordert, und verlor eine Menge Guthaben, warum?',
	'ARCADE_HELP_FAQ_CHALLENGE_PRACTICE_ANSWER'			=> 'Ja, so lange du die Herausforderung noch nicht akzeptiert hast, kannst du das Spiel ohne Bewertung spielen. Doch wenn du die Herausforderung einmal angenommen hast, wird es gewertet, und es gibt keine weitere Möglichkeit zu üben.',
	'ARCADE_HELP_FAQ_CHALLENGE_PRACTICE_QUESTION'		=> 'Ich habe eine Herausforderung erhalten, gibt es eine Möglichkeit dafür zu üben?',
	'ARCADE_HELP_FAQ_CHALLENGE_PREVENT_ANSWER'			=> 'Du kannst die Herausforderung in den Einstellungen im Persönlichen Bereich abschalten.',
	'ARCADE_HELP_FAQ_CHALLENGE_PREVENT_QUESTION'		=> 'Wie verhindere ich, dass ich herausgefordert werde?',
	'ARCADE_HELP_FAQ_CHALLENGE_SENT_ANSWER'				=> 'Das sind die Herausforderungen, die du gegen andere Benutzer gestartet hast. Diese Duelle können auch abgebrochen werden.',
	'ARCADE_HELP_FAQ_CHALLENGE_SENT_QUESTION'			=> 'Was bedeutet „Herausforderungen gesendet“?',
	'ARCADE_HELP_FAQ_CHALLENGE_START_ANSWER'			=> 'Auf der Herausforderungsseite klickst du auf den Button „Herausforderung“, und wählst die gewünschten Einstellungen aus dem Formular. Hier hast du die folgenden Möglichkeiten:
															<ul>
																<li>Ein Spiel aus der Liste wählen.</li>
																<li>Einen Spielefavoriten auswählen. <em>Nur möglich, wenn du Spielefavoriten gespeichert hast.</em></li>
																<li>Den Gegner aus der Benutzerliste wählen.</li>
																<li>Den Gegner aus der Freundesliste wählen. <em>Nur möglich, wenn du Freunde gespeichert hast.</em></li>
															</ul>
															<br>Nachdem du ein Spiel und einen Gegner gewählt hast, kannst du mit einem Klick auf den Button „Herausforderung senden“ die Anfrage absenden. Der Gegner muss darauf antworten, damit das Duell starten kann.
															<br>Hinweis: <em>Wenn ein Punktesystem installiert und aktiv ist, kannst du auch einen Spieleinsatz festlegen. Der Spieleinsatz kann wählbar, oder durch den Administrator fest vorgegeben sein.</em>',
	'ARCADE_HELP_FAQ_CHALLENGE_START_QUESTION'			=> 'Wie starte ich eine Herausforderung?',
	'ARCADE_HELP_FAQ_FAV_ANSWER'						=> 'Wenn du ein Spiel als Spielefavoriten markierst, ist es später nicht mehr nötig, es unter der großen Anzahl von Spielen zu suchen. In deiner Favoritenliste ist es schnell zu wiederzufinden, und du sparst eine Menge Zeit.',
	'ARCADE_HELP_FAQ_FAV_HIGHLIGHT_ANSWER'				=> 'Du hast die Möglichkeit, die Spiele, die du am meisten spielst, zusätzlich unter den Spielefavoriten hervorzuheben. Das kannst du in den Einstellungen im Persönlichen Bereich tun.',
	'ARCADE_HELP_FAQ_FAV_HIGHLIGHT_QUESTION'			=> 'Ich habe zu viele Spielefavoriten. Wie kann ich einige Spiele leichter finden?',
	'ARCADE_HELP_FAQ_FAV_LIMIT_ANSWER'					=> 'Du hast die maximale Anzahl an Spielefavoriten gespeichert, welche der Administrator voreingestellt hat. Deshalb kannst du keine weiteren Spielefavoriten hinzufügen, außer du löschst ältere Spielefavoriten. Oder, wenn du der Meinung bist, dass die Begrenzung zu klein ist, kannst du einen Administrator bitten, die Grenze zu erhöhen, wenn möglich.',
	'ARCADE_HELP_FAQ_FAV_LIMIT_QUESTION'				=> '„Begrenzungsfehler“ beim Hinzufügen eines Spielefavoriten, was ist damit gemeint?',
	'ARCADE_HELP_FAQ_FAV_QUESTION'						=> 'Welchen Nutzen hat es, ein Spiel als Spielefavoriten zu markieren?',
	'ARCADE_HELP_FAQ_GENERAL_GAME_BUG_ANSWER'			=> 'Zuerst warte bitte einen Moment. Manche Spiele haben wegen ihrer Größe eine längere Ladezeit. Ein defektes Spiel sollte dem Administrator gemeldet werden, damit dieser das Problem so schnell wie möglich lösen kann. Jedes Spiel enthält einen Link für eine Fehlermeldung, der dafür verwendet werden soll. Bitte verwende diesen Link, denn er enthält alle für uns wichtigen, spezifischen Informationen zum Spiel, und du kannst auswählen, welche Art von Problem aufgetreten ist. Eine ausführlichere Fehlerbeschreibung wäre wünschenswert. Bitte teile uns auch mit, welcher Browser in welcher Version verwendet wurde, denn es ist nicht sicher, dass dieser Fehler bei anderen Browsern ebenfalls auftritt. Teile uns bitte ebenfalls mit, auf welchem Gerät du diesen Fehler erlebt hast (z.B. PC, Tablet oder Handy). Bitte teile auch die Bildschirmauflösung mit, die du zum Spielen benutzt, weil der Fehler vielleicht bei einer anderen Auflösung nicht vorkommt.<br><i>Beachte, dass es nicht möglich ist ein fehlerhaftes Spiel zu melden, wenn ein Administrator das Fehlermeldesystem deaktiviert.</i>',
	'ARCADE_HELP_FAQ_GENERAL_GAME_BUG_QUESTION'			=> 'Was ist zu tun, wenn ein Spiel nicht funktioniert?',
	'ARCADE_HELP_FAQ_GENERAL_GAME_DOWNLOAD_ANSWER'		=> 'Ja, wenn der Administrator das erlaubt.',
	'ARCADE_HELP_FAQ_GENERAL_GAME_DOWNLOAD_QUESTION'	=> 'Können die Spiele heruntergeladen werden?',
	'ARCADE_HELP_FAQ_GENERAL_GAME_NAME_LINK_ANSWER'		=> 'Der Spielname erscheint nur dann als Link, wenn du die notwendigen Spielberechtigungen besitzt.',
	'ARCADE_HELP_FAQ_GENERAL_GAME_NAME_LINK_QUESTION'	=> 'Die meisten Namen der Spiele sind Links, aber einige erscheinen als Klartext. Warum?',
	'ARCADE_HELP_FAQ_GENERAL_GAME_RANDOM_ANSWER'		=> 'Ein zufällig vom System ausgewähltes Spiel ist eine schöne Sache, weil das Spiel nicht in einer bestimmten Kategorie ausgewählt wird. So wird es auf Dauer nicht langweilig, weil du beispielsweise oft andere Spiele, und nicht immer in der gleichen Kategorie, spielst.',
	'ARCADE_HELP_FAQ_GENERAL_GAME_RANDOM_QUESTION'		=> 'Was ist ein zufälliges Spiel?',
	'ARCADE_HELP_FAQ_GENERAL_GAME_RATING_ANSWER'		=> 'Die Spiele-Bewertung ist eine nützliche Funktion. Sie erleichtert das Finden guter Spiele. Wenn ein Spiel gut ist, werden viele Benutzer eine hohe Bewertung abgeben, und es wird in der Statistik immer oben liegen. Damit sind die am besten bewerteten Spiele für die Benutzer leicht zu finden.',
	'ARCADE_HELP_FAQ_GENERAL_GAME_RATING_QUESTION'		=> 'Was ist die Spiele-Bewertung?',
	'ARCADE_HELP_FAQ_GENERAL_GAME_USER_STAT_ANSWER'		=> 'Wenn die Berechtigung zur Benutzung des Menüs erteilt wurde, kannst du auf das Menü „Statistiken“ klicken, und daraus unterhalb den Eintrag „Benutzer“ wählen.',
	'ARCADE_HELP_FAQ_GENERAL_GAME_USER_STAT_QUESTION'	=> 'Wie kann ich die Spielestatistik der Benutzer ansehen?',
	'ARCADE_HELP_FAQ_GENERAL_RANG_LIST_ANSWER'			=> 'Die Rangliste berücksichtigt die Anzahl der verdienten Meisterschaften der Benutzer. Je mehr Meisterschaften ein Benutzer erreicht hat, umso höher ist sein Rang. Die Rangbilder können durch den Administrator bestimmt werden, und zwar in der Weise, dass sie mit einer zu erreichenden Anzahl von Meisterschaften verbunden werden, und entsprechend erscheinen.',
	'ARCADE_HELP_FAQ_GENERAL_RANG_LIST_QUESTION'		=> 'Was ist die Rangliste?',
	'ARCADE_HELP_FAQ_GENERAL_SUPER_CHAMP_ANSWER'		=> 'Der Superchampion ist der oberste aller Meister, der den höchsten, jemals erreichten, Rekord eines Spieles hält. Der Superchampion hat keine normale Meisterschaft, außer er hält auch in der aktuellen Spielperiode einen Rekord auf dem ersten Platz. Wenn der Administrator die Spielhalle neu startet, werden die Rekorde zurückgesetzt. Er hat aber die Möglichkeit, die Punktstände der Superchampions zu erhalten, so dass man immer sehen kann, welches Ergebnis das höchste, jemals erreichte, für das Spiel war.',
	'ARCADE_HELP_FAQ_GENERAL_SUPER_CHAMP_QUESTION'		=> 'Was ist ein Superchampion?',
	'ARCADE_HELP_FAQ_GENERAL_USER_RECORD_ANSWER'		=> 'Ja, dazu klickst du in der Spielhalle auf das Avatar des Benutzers, um die Benutzerinformation zu öffnen, und dann auf den Link unter dem Avatar „Benutzerrekorde ansehen“.',
	'ARCADE_HELP_FAQ_GENERAL_USER_RECORD_QUESTION'		=> 'Kann ich mir nur die Rekorde eines Benutzers ansehen?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_EXPT_ANSWER'			=> 'Ja, es wird nach dem Turnierstart angezeigt.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_EXPT_RESULT_QUESTION'	=> 'Ist das Ablaufdatum sichtbar?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_EXP_ANSWER'				=> 'Wenn das Turnier startet, hast du eine bestimmte Ablaufzeit. Wenn das Turnier in dieser Zeit nicht komplettiert wurde, wird es automatisch gelöscht.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_EXP_RESULT_QUESTION'	=> 'Ein laufendes Turnier ist verschwunden, warum?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_PLAY_ANSWER'			=> 'Du kannst das Spiel nach dem Turnierstart spielen. Wenn du das nächste Level erreichst, wird das nächste Spiel starten, wenn dein Gegenspieler ebenfalls das Level erreicht hat. Aber bei jedem Spielstart wirst du eine Information sehen, wenn das Spiel an einem Turnier teilnimmt.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_PLAY_RESULT_QUESTION'	=> 'Wann kann ich das Turnierspiel spielen?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_SCORE_ANSWER'			=> 'Ja, nachdem ihr beide das Spiel gespielt habt. Um die erreichte Punktzahl anzusehen, bewege die Maus über das Avatar deines Gegenspielers, und du siehst bereits die erreichte Punktzahl.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_SCORE_RESULT_QUESTION'	=> 'Kann ich die Punktzahl meines Gegenspielers sehen?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_START_ANSWER'			=> 'Das Turnier startet automatisch, wenn alle Plätze belegt sind.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_START_RESULT_QUESTION'	=> 'Wann startet das Turnier?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_SUB_ANSWER'				=> 'Auf der Übersichtsseite des Gruppenturniers kannst sehen, ob es ein neues Turnier gibt. Klicke in der Struktur des Turnierbaums auf eine leere Stelle in der unteren Zeile, und du hast dich angemeldet.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_SUB_RESULT_QUESTION'	=> 'Wie kann ich mich für das Gruppenturnier anmelden?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_UNSUB_ANSWER'			=> 'Ja, aber nur, wenn das Turnier noch nicht gestartet ist. Um dich abzumelden, klicken auf dein Avatar im belegten Bereich.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_UNSUB_RESULT_QUESTION'	=> 'Gibt es eine Möglichkeit, sich vom Turnier abzumelden?',
	'ARCADE_HELP_FAQ_INTRO_ARCADE_ANSWER'				=> 'Die Spielhalle bietet Unterhaltung für die Benutzer, mit einer Vielzahl von Spielen. Die Berechtigung, die Spielhalle zu benutzen, wird vom Administrator festgelegt. Doch bestimmte Funktionen können auch über den Persönlichen Bereich ein- oder ausgeschaltet werden. Dafür wirst du vielleicht diese Anleitung nützlich finden.',
	'ARCADE_HELP_FAQ_INTRO_ARCADE_QUESTION'				=> 'Was ist die Spielhalle?',
	'ARCADE_HELP_FAQ_INTRO_FUN_ANSWER'					=> 'Die Spielhalle bietet viele Funktionen, allerdings werden nur die verfügbar sein, die vom Administrator eingeschaltet wurden.
															<br><strong>Funktionen:</strong>
															<ul>
																<li>Einstellungen anpassen.</li>
																<li>Spielekategorien.</li>
																<li>Anzeige neuer Spiele.</li>
																<li>Zufälliges Spiel spielen.</li>
																<li>Spielefavoriten speichern und auswählen.</li>
																<li>Spiele bewerten.</li>
																<li>Spiele suchen.</li>
																<li>Fehler in Spielen melden.</li>
																<li>Spiele herunterladen.</li>
																<li>Spiele in einem neuen Fenster spielen (Popup).</li>
																<li>Spielen im Vollbild.</li>
																<li>Ändern der Größe von Spielen.</li>
																<li>Hintergrundbeleuchtung für Spiele an / aus.</li>
																<li>Spielintegriertes Menü</li>
																<li>Turniere mit mehreren Spielen, zwischen mehreren Benutzern.</li>
																<li>Herausforderung anderer Mitglieder für einzelne Spiele.</li>
																<li>Erzeugen von Zufallsherausforderungen.</li>
																<li>Separate detaillierte Statistiken.</li>
																<li>Spiele-Statistiken.</li>
																<li>Benutzerstatistiken.</li>
																<li>Kategorienstatistiken.</li>
																<li>Rangliste.</li>
																<li>Verwendung von Punktesystemen.</li>
																<li>Und vieles mehr…</li>
															</ul>',
	'ARCADE_HELP_FAQ_INTRO_FUN_QUESTION'				=> 'Welche Funktionen bietet die Spielhalle?',
	'ARCADE_HELP_FAQ_INTRO_REG_ANSWER'					=> 'Abhängig von den Einstellungen des Administrators der Spielhalle, kann es möglich sein, dass eine Registrierung nicht unbedingt erforderlich ist, um die Spiele zu verwenden. Es ist aber anzumerken, dass du Zugriff auf viele weitere Funktionen der Spielhalle hast, wenn du dich registrierst. (Beispielsweise kannst du deine Punkte und Fortschritte speichern, die Spiele kommentieren, deine Lieblingsspiele als Favoriten speichern, die Spiele bewerten, anderen Benutzern eine Herausforderung für ein Duell senden, oder an einem gestarteten Turnier teilnehmen, und andere nützliche Dinge.) Natürlich ist auch die Verwendung dieser Funktionen abhängig von den Einstellungen des Administrators, so dass dir manche vielleicht nicht zur Verfügung stehen.',
	'ARCADE_HELP_FAQ_INTRO_REG_QUESTION'				=> 'Warum soll ich mich überhaupt registrieren?',
	'ARCADE_HELP_FAQ_PLAYING_BACKLIGHT_ANSWER'			=> 'Die Hintergrundbeleuchtung ist die Helligkeit der Felder rund um das Spiel. Es gibt drei nützliche Eigenschaften, wenn die Hintergrundbeleuchtung ausgeschaltet ist.
															<ul>
																<li>Das Spiel wird ungestört über einem abgedunkelten Raum ausgeführt.</li>
																<li>Die Buttons und Links außerhalb des Spiels sind inaktiv, so dass man nicht versehentlich darauf klicken kann. Das verhindert das Laden einer anderen Seite während des Spiels.</li>
																<li>Das Scrollen von Webseiten ist deaktiviert, um ein versehentliches Scrollen während des Spiels zu verhindern.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_BACKLIGHT_QUESTION'		=> 'Was ist die Hintergrundbeleuchtung?',
	'ARCADE_HELP_FAQ_PLAYING_BOARD_LOGOUT_ANSWER'		=> 'Dafür gibt es zwei mögliche Gründe:
															<ul>
																<li>Der wahrscheinlichste Grund ist, dass deine Forensitzung abgelaufen ist.</li>
																<li>Der Administrator hat alle Benutzersitzungen gelöscht.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_BOARD_LOGOUT_QUESTION'		=> 'Beim Speichern eines Rekords werde ich von der Webseite ausgeloggt, warum?',
	'ARCADE_HELP_FAQ_PLAYING_GAME_MAX_MIN_ANSWER'		=> 'Das Spiel startet immer in seiner eigenen vom Administrator festgelegten Anzeigegröße. Die Software prüft jedoch immer, ob die eingestellte Größe in den für das Spiel vorgesehenen Platz passt. Wenn der Raum kleiner ist, erkennt die Software automatisch die Größe des sichtbaren Raums und passt die Spielgröße entsprechend an. Wenn du in deinen eigenen Einstellungen „Spielgröße automatisch ändern“ aktivierst, berücksichtigt die Software auch, dass das Spiel automatisch auf diese größte Größe angepasst wird, wenn das Sichtfeld größer als die eingestellte Spielgröße ist. Unter keinen Umständen lässt die Software zu, dass Teile des Spiels außer Sicht geraten. Bei einer solchen Erkennung wird die Software eingreifen, und die Anzeigegröße des Spiels ändern.',
	'ARCADE_HELP_FAQ_PLAYING_GAME_MAX_MIN_QUESTION'		=> 'In welcher Größe startet das Spiel?',
	'ARCADE_HELP_FAQ_PLAYING_GAME_RESIZE_ANSWER'		=> 'Dafür gibt es zwei mögliche Gründe:
															<ul>
																<li>Das Spiel hat die minimal zulässige Breite oder Höhe von 180 Pixel erreicht.</li>
																<li>Das Spiel hat die größte Größe erreicht, die in das Sichtfeld passt.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_GAME_RESIZE_QUESTION'		=> 'Warum funktionieren die Buttons für die Größenänderung nicht?',
	'ARCADE_HELP_FAQ_PLAYING_HIDDEN_SCORE_ANSWER'		=> 'Für das fragliche Spiel läuft gerade eine Herausforderung, und die Ergebnisse werden so lange vor allen beteiligten Personen versteckt, bis die Herausforderung beendet ist.',
	'ARCADE_HELP_FAQ_PLAYING_HIDDEN_SCORE_QUESTION'		=> 'In der Ergebnisliste steht für den Meister, statt eines Rekordes, der Text „versteckt“ , warum?',
	'ARCADE_HELP_FAQ_PLAYING_HSD_ANSWER'				=> 'Ja es gibt eine. Aktiviere in deiner Einstellung die Funktion „Spiel automatisch vergrößern“, und das Spiel wird in der größtmöglichen Anzeigegröße gestartet.',
	'ARCADE_HELP_FAQ_PLAYING_HSD_QUESTION'				=> 'Ich benutze eine hochauflösende Anzeige, und alle Spiele werden sehr klein dargestellt. Gibt es dafür eine Lösung?',
	'ARCADE_HELP_FAQ_PLAYING_INFO_BLOCK_ANSWER'			=> 'Wenn der Informationsblock nicht sichtbar ist, ist er wahrscheinlich geschlossen worden. Du kannst ihn dann über das Menü öffnen.',
	'ARCADE_HELP_FAQ_PLAYING_INFO_BLOCK_QUESTION'		=> 'Der Informationsblock ist in meiner Einstellung aktiviert, aber er wird dennoch nicht angezeigt, warum?',
	'ARCADE_HELP_FAQ_PLAYING_MENU_BUT_ANSWER'			=> 'Es gibt insgesamt 12 Schaltflächen im Menü, aber welche davon erscheinen, hängt von mehreren Faktoren ab.<br>Menüschaltflächen und Abhängigkeiten:
															<ul>
																<li>1. Information - Sichtbar, wenn es Informationen gibt über einen der folgenden Punkte: (Spielbeschreibung, Spielkontrollgerät, Rekordhalterkommentare, oder wenn du die Berechtigung hast, “Wer spielt in der Spielhalle?” anzusehen.).</li>
																<li>2. Vollbild/Normaler Bildschirm - Immer sichtbar, wenn der Browser das unterstützt.</li>
																<li>3. Highscores - Sichtbar, wenn der Zugriff auf die Statistik aktiviert ist, und ein Resultat existiert.</li>
																<li>4. Optionen - Immer sichtbar, aber der Inhalt mag unterschiedlich sein, abhängig von den Berechtigungseinstellungen.</li>
																<li>5. Spielebewertung - Sichtbar, wenn die Berechtigung dazu vorhanden ist.</li>
																<li>6. Favoriten hinzufügen/löschen - Sichtbar, wenn die Berechtigung dazu vorhanden ist, und das Speicherlimit noch nicht erreicht wurde.</li>
																<li>7. Spiel drehen - Nur sichtbar, wenn die Spieleinstellungen es erlauben, und ein Gerät ohne Rotationsfunktion benutzt wird.</li>
																<li>8. Hintergrundbeleuchtung an/aus - Immer sichtbar im normalen Fenster.</li>
																<li>9. Spielzeit - Immer sichtbar.</li>
																<li>10. Spiel neu starten - Immer sichtbar.</li>
																<li>11. Spieldaten löschen - Sichtbar, wenn die Software erkennt, dass das Spiel den lokalen Datenspeicher des Browsers verwendet.</li>
																<li>12. Informationsblock öffnen/schließen - Sichtbar, wenn aktiviert in unseren Einstellungen.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_MENU_BUT_QUESTION'			=> 'Welche Schaltflächen gibt es im Menü, und wann sind sie sichtbar?',
	'ARCADE_HELP_FAQ_PLAYING_MENU_DATA_CLOSE_ANSWER'	=> 'Das Datenfeld kann auf die folgenden Arten geschlossen werden:
															<ul>
																<li>1. Klicke auf den Datentitel.</li>
																<li>2. Klicke auf das Menü.</li>
																<li>3. Mache einen Doppelklick auf das Datenfeld.</li>
																<li>4. Klicke ausserhalb des Datenfeldes.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_MENU_DATA_CLOSE_QUESTION'	=> 'Wie schließe ich ein im Menü angefordertes Datenfeld??',
	'ARCADE_HELP_FAQ_PLAYING_MENU_OPEN_ANSWER'			=> 'Aus Sicherheitsgründen ist das Menü mit einem Timer ausgestattet, um versehentliches automatisches Öffnen während des Spiels zu verhindern. Das Menü öffnet sich aber, wenn du klickst und mindestens für 0.5 Sekunden festhältst.',
	'ARCADE_HELP_FAQ_PLAYING_MENU_OPEN_QUESTION'		=> 'Das Menü öffnet sich nicht, wenn ich darauf klicke. Warum?',
	'ARCADE_HELP_FAQ_PLAYING_MOBILE_ANSWER'				=> 'Ja, alle Spiele können auf einem Mobilgerät gestartet werden. Allerdings, wenn du ausschließlich auf einem Mobiltelefon spielen möchtest, mag es sinnvoll sein, die Filterung für Tastaturspiele in deinen Spieleinstellungen einzuschalten, weil du diese Spiele ohne eine Tastatur möglicherweise nicht korrekt spielen kannst.',
	'ARCADE_HELP_FAQ_PLAYING_MOBILE_QUESTION'			=> 'Kann ich mit einem Mobiltelefon spielen?',
	'ARCADE_HELP_FAQ_PLAYING_NOT_PLAY_ANSWER'			=> 'Das kann mehrere unterschiedliche Gründe haben:
															<ul>
																<li>Möglicherweise verfügt der Browser nicht über „JavaScript“, oder dieses ist auf der Seite deaktiviert.</li>
																<li>Der Administrator hat keine Berechtigung zum Spielen erteilt.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_NOT_PLAY_QUESTION'			=> 'Warum kann ich nicht spielen?',
	'ARCADE_HELP_FAQ_PLAYING_NOT_SAVE_SCORE_ANSWER'		=> 'Das kann mehrere unterschiedliche Gründe haben:
															<ul>
																<li>Stelle zuerst sicher, dass die Verwendung von „Cookies“ in deinem Browser erlaubt ist.</li>
																<li>Stelle sicher, dass du angemeldet bist.</li>
																<li>Das Spiel wurde nicht korrekt gestartet.</li>
																<li>Das Spiel ist defekt.</li>
																<li>Der Administrator hat keine Berechtigung zum Speichern der Punkte erteilt.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_NOT_SAVE_SCORE_QUESTION'	=> 'Warum kann ich meine Ergebnisse nicht speichern?',
	'ARCADE_HELP_FAQ_PLAYING_POPUP_ANSWER'				=> 'Ja, wenn der Administrator es erlaubt hat.',
	'ARCADE_HELP_FAQ_PLAYING_POPUP_QUESTION'			=> 'Kann ich die Spiele in einem neuen Fenster spielen?',
	'ARCADE_HELP_FAQ_PLAYING_RESET_GAME_DATA_ANSWER'	=> 'Wenn das Spiel die Daten im lokalen Speicher des Browsers speichert, unterstützen wir zwei Möglichkeiten zum Löschen der Daten. Wenn das Spiel die Daten in einem anderen Speicher ablegt, was sehr selten vorkommt, musst du diesen manuell finden und aus dem Browser löschen. Wenn du die Daten eines eingebetteten Spiels löschen möchtest, musst du in diesem Fall die Webseite besuchen, auf der sich das Spiel befindet, und die Daten des betreffenden Spiels in den Browserdaten dieser Webseite finden und löschen.<br>
Löschen der lokalen Speicherdaten des Browsers:
<ul>
	<li>Wenn du das Spiel gerade spielst, öffne das Menü und klicke auf die Schaltfläche „Spieldaten löschen“.</li>
	<li>Benutze das Modul „Lokalen Speicher verwalten“ in deinem Benutzerkontrollbereich, und wähle dort aus, welche Spieldaten du löschen möchtest.</li>
</ul>',
	'ARCADE_HELP_FAQ_PLAYING_RESET_GAME_DATA_QUESTION'	=> 'Gibt es eine Möglichkeit das Spiel komplett neu zu starten?',
	'ARCADE_HELP_FAQ_PLAYING_RESTART_ANSWER'			=> 'Der Link „Spiel neu starten“ wird nur aktiv, nachdem das Spiel gestartet ist. Nach der Benutzung kann der Button/Link wieder für eine Zeitperiode inaktiv sein. Der Administrator legt fest, wie oft die Funktion erneut benutzt werden kann.',
	'ARCADE_HELP_FAQ_PLAYING_RESTART_QUESTION'			=> 'Der Link für den Spielneustart ist nicht aktiv, warum?',
	'ARCADE_HELP_FAQ_PLAYING_SESSION_ANSWER'			=> 'Ja, du hast in den Spielhalleneinstellungen die Möglichkeit, die Anzeige ein / aus zu schalten. Auf diese Weise kannst du sehen, wieviel Zeit auf der Spieleseite verbleibt, ehe deine Sitzung abläuft.<br>Wenn dir nur noch wenig Zeit verbleibt, möchtest du vielleicht vorher eben ausloggen und wieder einloggen, ehe du spielst.',
	'ARCADE_HELP_FAQ_PLAYING_SESSION_QUESTION'			=> 'Kann ich die verbleibende Sitzungszeit anzeigen?',
	'ARCADE_HELP_FAQ_PLAYING_WHITE_SCREEN_ANSWER'		=> 'Es kann sein, dass das Spiel sehr umfangreich ist, und du bei einer langsameren Internetverbindung etwas warten musst, bis es geladen wurde. Dies kann vermieden werden, wenn wir die Verwendung von „Preloadern“ in unseren Einstellungen nicht deaktivieren.',
	'ARCADE_HELP_FAQ_PLAYING_WHITE_SCREEN_QUESTION'		=> 'Das Spiel startet mit einem weißen Bildschirm, warum?',
	'ARCADE_HELP_FAQ_POINTS_COST_ANSWER'				=> 'Die Spielkosten sind der Betrag, der für jedes Spiel beim Start von deinem Guthaben abgezogen wird. Beachte bitte, dass diese Kosten für einzelne Spiele oder Kategorien unterschiedlich sein können. Die Höhe der Spielkosten legt der Administrator fest.',
	'ARCADE_HELP_FAQ_POINTS_COST_QUESTION'				=> 'Was sind die Spielkosten?',
	'ARCADE_HELP_FAQ_POINTS_DOWNLOAD_COST_ANSWER'		=> 'Die Downloadkosten sind der Betrag, der für jedes Herunterladen eines Spiels von deinem Guthaben abgezogen wird. Beachte bitte, dass diese Kosten für einzelne Spiele oder Kategorien unterschiedlich sein können. Die Höhe der Downloadkosten legt der Administrator fest.',
	'ARCADE_HELP_FAQ_POINTS_DOWNLOAD_COST_QUESTION'		=> 'Was sind die Downloadkosten?',
	'ARCADE_HELP_FAQ_POINTS_JACKPOT_ANSWER'				=> 'Der Jackpot stammt aus den Spielkosten. Beim Start eines jeden Spieles werden die Spielkosten in einem Topf gesammelt. Dieser wächst so lange an, bis jemand diesen Jackpot gewonnen hat, oder bis die Obergrenze erreicht ist. Die minimale/maximale Höhe des Jackpots wird vom Administrator festgelegt.',
	'ARCADE_HELP_FAQ_POINTS_JACKPOT_QUESTION'			=> 'Was ist der Jackpot?',
	'ARCADE_HELP_FAQ_POINTS_REWARD_ANSWER'				=> 'Die Belohnung erhält man üblicherweise in zwei Fällen: wenn ein Rekord erzielt wird, und wenn ein Superchampiontitel gewonnen wird. Die Höhe der Belohnung legt der Administrator fest.',
	'ARCADE_HELP_FAQ_POINTS_REWARD_QUESTION'			=> 'Was ist die Belohnung?',
	'ARCADE_HELP_FAQ_POINTS_SYSTEM_ANSWER'				=> 'Ein Punktesystem ist eine komplexe Ergänzung, die der Administrator hinzufügen kann, um sie im Forum oder in der Spielhalle zu nutzen. Wenn das Punktesystem verwendet wird, kann in der Spielhalle eine Vielzahl von Kosten und Belohnungen benutzt werden.',
	'ARCADE_HELP_FAQ_POINTS_SYSTEM_QUESTION'			=> 'Was ist das Punktesystem?',
	'ARCADE_HELP_FAQ_SEARCH_100PH_GAME_ANSWER'			=> 'Ja, wenn du ein <strong>@</strong> am Anfang des gesuchten Spielnamens eingibst.',
	'ARCADE_HELP_FAQ_SEARCH_100PH_GAME_QUESTION'		=> 'Ich möchte, dass die Suchmaschine nur einen genau übereinstimmenden Spielnamen ausgib, ist das möglich?',
	'ARCADE_HELP_FAQ_SEARCH_EXISTS_NOT_FOUND_ANSWER'	=> 'Dafür gibt es drei mögliche Gründe:
															<ul>
																<li>Das Spiel wurde gelöscht.</li>
																<li>Du hast nicht mehr die Berechtigung, dieses Spiel zu spielen.</li>
																<li>In der Suchmaschine ist eine bestimmte Kategorie ausgewählt worden, und das Spiel befindet sich nicht in dieser Liste. In diesem Fall ändere die Kategorieauswahl auf „Alle Kategorien“.</li>
															</ul>',
	'ARCADE_HELP_FAQ_SEARCH_EXISTS_NOT_FOUND_QUESTION'	=> 'Ich suche ein Spiel, von dem ich weiß, dass es existiert, aber die Suchmaschine zeigt es nicht an - warum?',
	'ARCADE_HELP_FAQ_SEARCH_GAME_ANSWER'				=> 'Wenn die Suchfunktion eingeschaltet ist, kannst du etwa in der Mitte der Seite ein Suchfeld finden, wo du den Namen des gewünschten Spiels eingeben kannst. Zusätzlich kannst du Spiele auch nach Anfangsbuchstaben suchen, klicke dafür einfach auf die Buchstaben in der Leiste. Durch die Auswahl einer bestimmten Kategorie kannst du die Suche eingrenzen. Wenn du eine Kategorie öffnest, in der die Suchmaschine aktiv ist, wird sie automatisch diese Kategorie vorwählen. Natürlich kannst du das ändern, beispielsweise auf „Alle Kategorien“.',
	'ARCADE_HELP_FAQ_SEARCH_GAME_QUESTION'				=> 'Wie kann ich ein bestimmtes Spiel finden?',
	'ARCADE_HELP_FAQ_SEARCH_SNIP_GAME_ANSWER'			=> 'Die Suchmaschine berücksichtigt automatisch die möglichen Wortendungen. Wenn in die Suchbox <strong>pac</strong> eingegeben wird, wird das Spiel <strong>Pacman</strong> gefunden werden.<br>Wenn du allerdings das Wort <strong>pac</strong> benutzt, um den Namen <strong>Big Pacman</strong> zu bekommen, musst du ein <strong>*</strong> am Anfang des Suchbegriffs eingeben.',
	'ARCADE_HELP_FAQ_SEARCH_SNIP_GAME_QUESTION'			=> 'Wie suche ich ein Spiel, dessen Namen ich nicht genau weiß?',
	'ARCADE_HELP_FAQ_TOUR_NO_RESULT_ANSWER'				=> 'Nur die für das Turnier zugelassenen Gruppen können teilnehmen. Stelle sicher, dass du Mitglied dieser Gruppe(n) bist.',
	'ARCADE_HELP_FAQ_TOUR_NO_RESULT_QUESTION'			=> 'Ich habe ein Spiel gespielt, aber ich sehe keine Ergebnisse des Turniers. Warum?',
	'ARCADE_HELP_FAQ_TOUR_PLAY_NUM_ANSWER'				=> 'Jeder Spielstart wird gezählt, unabhängig davon, ob der Punktestand gespeichert wurde, oder nicht. Außerdem sind die Ergebnisse nicht gespeicherter Spiele 0.',
	'ARCADE_HELP_FAQ_TOUR_PLAY_NUM_QUESTION'			=> 'Ich habe ein Spiel gespielt, aber die Punkte wurden nicht gespeichert. Trotzdem wurde die Anzahl der Spielversuche erhöht. Warum?',
	'ARCADE_HELP_FAQ_TOUR_PRACTICE_ANSWER'				=> 'Ja, bevor das Turnier startet, kannst du die Spiele ohne Bewertung spielen. Doch wenn es einmal gestartet ist, werden alle darin enthaltenen Spiele gewertet, gleichgültig von welchem Ort sie gestartet werden, und es gibt es keine Möglichkeit mehr, dafür zu üben.',
	'ARCADE_HELP_FAQ_TOUR_PRACTICE_QUESTION'			=> 'Gibt es eine Möglichkeit, dafür zu üben?',
	'ARCADE_HELP_FAQ_TOUR_RIGHT_RESULT_ANSWER'			=> 'Wenn die festgelegte maximale Anzahl an Spielversuchen in einem Turnier erreicht wurde, werden weitere Ergebnisse nicht mehr im Turnier gewertet.',
	'ARCADE_HELP_FAQ_TOUR_RIGHT_RESULT_QUESTION'		=> 'Ich habe ein Spiel noch einmal gespielt, und ein besseres Ergebnis erhalten, aber es wurde im Turnier nicht gewertet. Warum?',
	'ARCADE_HELP_FAQ_USER_SET_CAT_STYLE_ANSWER'			=> 'Die Spielhalle kann in verschiedenen Stilrichtungen angezeigt werden. Du kannst auswählen, welche du verwenden möchtest. Diese Einstellung kann vom Administrator vorgegeben und überschrieben werden.',
	'ARCADE_HELP_FAQ_USER_SET_CAT_STYLE_QUESTION'		=> 'Was ist der Kategoriestil?',
	'ARCADE_HELP_FAQ_USER_SET_CHALL_DISABLE_ANSWER'		=> 'Wenn du von anderen Benutzern keine Herausforderungen zu einem Wettkampf erhalten möchtest, kannst du die Funktion abschalten. Du wirst dann auch selbst nicht in der Lage sein, einen anderen Benutzer herauszufordern. Bitte beachte, dass die Herausforderung auch durch den Administrator für alle abgeschaltet werden kann.',
	'ARCADE_HELP_FAQ_USER_SET_CHALL_DISABLE_QUESTION'	=> 'Du möchtest die Herausforderungen abschalten?',
	'ARCADE_HELP_FAQ_USER_SET_CONFIG_ANSWER'			=> 'Wenn du ein registrierter Benutzer bist, werden alle deine Einstellungen in der Datenbank gespeichert. Um sie zu ändern, klicke auf den Link „Persönlicher Bereich“ (normalerweise zu sehen am oberen Seitenrand). Dort kannst du alle hier genannten Einstellungen bearbeiten.',
	'ARCADE_HELP_FAQ_USER_SET_CONFIG_QUESTION'			=> 'Wie kann ich meine Einstellungen ändern?',
	'ARCADE_HELP_FAQ_USER_SET_FAV_MANAGE_ANSWER'		=> 'Hier kannst du deine als Favoriten hinzugefügten Lieblingsspiele wieder entfernen, oder markieren und hervorheben.',
	'ARCADE_HELP_FAQ_USER_SET_FAV_MANAGE_QUESTION'		=> 'Was ist Favoriten verwalten?',
	'ARCADE_HELP_FAQ_USER_SET_IMG_DISABLE_ANSWER'		=> 'Wenn das Laden der Seite zu langsam ist, kannst du die Anzeige der Avatare und Bilder abschalten.',
	'ARCADE_HELP_FAQ_USER_SET_IMG_DISABLE_QUESTION'		=> 'Du möchtest die Anzeige von Avataren und Bildern der Spiele abschalten?'
]);
