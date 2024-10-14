<?php
/**
*
* @package phpBB Holdem Póker
* @version $Id$
* @author 2011-2022 KillBill
* @copyright (c) 2014-2022 https://jv-arcade.com/ - https://jv-arcade.com/contact
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
	'JV_POKER_HELP_AUTH_ANSWER'				=> 'Derzeit gibt es drei Benutzerberechtigungen:
	<ul>
		<li>Kann Poker benutzen.</li>
		<li>Kann Shoutbox in Poker benutzen.</li>
		<li>Kann statistische Daten von Poker sehen.</li>
	</ul>',
	'JV_POKER_HELP_AUTH_QUESTION'			=> 'Was sind die Berechtigungen?',
	'JV_POKER_HELP_AUTO_ACC_ANSWER'			=> 'Wenn der Benutzer die Funktion „Automatisches Schieben/Mitgehen“ erlaubt, wird er automatisch schieben, wenn er an der Reihe ist, oder, nach einem „mitgehen“ wird automatisch der angeforderte Betrag eingegeben.',
	'JV_POKER_HELP_AUTO_ACC_QUESTION'		=> 'Was bewirkt Automatisches Schieben/Mitgehen?',
	'JV_POKER_HELP_AUTO_ACF_ANSWER'			=> 'Wenn der Benutzer die Funktion „Automatisches Schieben/Passen“ erlaubt, wird nach einem „mitgehen“ automatisch gepasst oder geschoben, wenn er an der Reihe ist.',
	'JV_POKER_HELP_AUTO_ACF_QUESTION'		=> 'Was bewirkt Automatisches Schieben/Passen?',
	'JV_POKER_HELP_A_SHOUT_ANSWER'			=> 'Ja, jeder Spieler kann während des Spiels das Archiv ansehen.',
	'JV_POKER_HELP_A_SHOUT_QUESTION'		=> 'Gibt es eine Möglichkeit, ältere Nachrichten anzuzeigen?',
	'JV_POKER_HELP_A_SHOUT_RE_ANSWER'		=> 'Wenn die Nachrichten nicht angezeigt werden, hast du vermutlich das Spiel verlassen oder pausiert, und es ist dir nicht erlaubt, die Nachrichtentafel während einer Pause zu benutzen.',
	'JV_POKER_HELP_A_SHOUT_RE_QUESTION'		=> 'Nach einer Aktualisierung des Archivs sind die Nachrichten verschwunden, warum?',
	'JV_POKER_HELP_A_SHOUT_R_ANSWER'		=> 'Ja, der Aktualisierungsknopf befindet sich auf der rechten Seite des Titelbalkens.',
	'JV_POKER_HELP_A_SHOUT_R_QUESTION'		=> 'Gibt es eine Möglichkeit, das Archiv zu aktualisieren?',
	'JV_POKER_HELP_BAN_CHIPS_ANSWER'		=> 'Ja, wenn ein Administrator deine Berechtigung für Poker löscht, kannst du jederzeit automatisch jederzeit alle deine Chips einwechseln %s<strong>HIER</strong>%s.',
	'JV_POKER_HELP_BAN_CHIPS_QUESTION'		=> 'Wenn ich meine Berechtigung zur Benutzung von Poker verliere, gibt es noch eine Möglichkeit, meine Chips zurückzuwechseln?',
	'JV_POKER_HELP_BET_ANSWER'				=> 'Der Dezimalwert hängt von der Anzahl unserer Chips ab. Wenn du mehr als 100 Chips hast, kannst du um eine ganze Zahl erhöhen, wie zum Beispiel: (5 $). Wenn du weniger als 100 Chips hast, aber mehr als 50, kannst du mit einer Dezimalstelle bieten, zum Beispiel: (5.5 $). Wenn die Anzahl deiner Chips 50 oder weniger erreicht, kannst du bis zu zwei Dezimalstellen für den Einsatz setzen ($ 5.55).',
	'JV_POKER_HELP_BET_QUESTION'			=> 'Wovon hängt ab, ob Dezimalwerte geboten werden können?',
	'JV_POKER_HELP_BLIND_ANSWER'			=> 'Der Small Blind/Big Blind hängt immer vom minimalen und maximalen Einstiegsbetrag ab. Der Mindesteinstiegsbetrag (Buy-in) ist immer das 20-fache des Big Blinds, während der maximale Einstiegsbetrag das 100-fache des Big Blinds beträgt. Der Small Blind ist fast immer die Hälfte des Big Blind. Diese Regel unterscheidet sich im Turnierraum, wo der Small/Big Blind immer doppelt so hoch ist wie der Grundwert. Außerdem wächst im Turnierraum der Small/Big Blind im Verlauf des Turniers stetig an.',
	'JV_POKER_HELP_BLIND_QUESTION'			=> 'Small Blind/Big Blind-Starteinsätze sind unterschiedlich in den Räumen, warum?',
	'JV_POKER_HELP_BLOCK_ADMIN'				=> 'Fragen zu Administratoreingriffen',
	'JV_POKER_HELP_BLOCK_GAME'				=> 'Poker Spielprobleme',
	'JV_POKER_HELP_BLOCK_GENERAL'			=> 'Allgemeine Fragen',
	'JV_POKER_HELP_BLOCK_POKER'				=> 'phpBB Holdem Póker-Fragen',
	'JV_POKER_HELP_BLOCK_ROOMS'				=> 'Fragen im Zusammenhang mit Pokerräumen (Lobby)',
	'JV_POKER_HELP_BLOCK_SHOUT'				=> 'Poker Shoutbox-Fragen',
	'JV_POKER_HELP_BLOCK_STATS'				=> 'Fragen zu Pokerstatistiken',
	'JV_POKER_HELP_CHIPS_C_ANSWER'			=> 'Die farbigen Chips haben folgende Werte:
	<ul>
		<li>Schwarz „C“: 0.01</li>
		<li>Schwarz und hellbraun „C“: 0.10</li>
		<li>Grau: $1</li>
		<li>Gelb: $10</li>
		<li>Pink: $100</li>
		<li>Rot: $500</li>
		<li>Blau: $1000</li>
		<li>Lila: $2000</li>
		<li>Grün: $5000</li>
		<li>Braun: $10000</li>
	</ul>',
	'JV_POKER_HELP_CHIPS_C_QUESTION'		=> 'Welchen Wert haben die verschiedenfarbigen Chips?',
	'JV_POKER_HELP_CHIPS_DC_ANSWER'			=> 'Ja, solange bis du die maximale Anzahl an Chips erreicht hast, die angezeigt werden können, welche $186111.1 beträgt. Es sind bis zu 10 Einheiten in einem Chip.',
	'JV_POKER_HELP_CHIPS_DC_QUESTION'		=> 'Werden die Chips in der richtigen Menge angezeigt?',
	'JV_POKER_HELP_CM_ANSWER'				=> '„Stühle“ bedeutet, wieviel Plätze für Spieler in diesem Raum verfügbar sind. Wenn die Anzahl der Sitzplätze 8 beträgt, können 8 Benutzer gleichzeitig im Raum sitzen. „Mitglieder“ gibt an, wieviele Benutzer sich im Raum befinden. Wenn der Administrator den Raum schließt, bedeutet das, dass der Raum voll ist, und kein weiteres Mitglied den Raum betreten kann, ehe ein Sitzplatz frei geworden ist.',
	'JV_POKER_HELP_CM_QUESTION'				=> 'Was bedeutet Mitglieder/Stühle?',
	'JV_POKER_HELP_CONFIG_ANSWER'			=> 'Es gibt eine Reihe globaler Einstellungen, von denen hier einige erwähnt werden, die sich auf das Spiel auswirken können:
	<ul>
		<li>IP-Prüfung.</li>
		<li>Shoutbox aktivieren.</li>
		<li>Shoutbox in der Pausenzeit.</li>
		<li>Smilies aktivieren.</li>
		<li>Unterbrechungszeit.</li>
		<li>Pausenzeit.</li>
		<li>Inaktivitätszeit.</li>
		<li>Zeit der Kartenpräsentierung.</li>
	</ul>',
	'JV_POKER_HELP_CONFIG_QUESTION'			=> 'Welche globalen Einstellungen gibt es?',
	'JV_POKER_HELP_CREATE_ANSWER'			=> 'Dieses Add-On (in seiner ursprünglichen Form) wurde von der <a href="https://jv-arcade.com/">JV-Arcade Group</a> erstellt, veröffentlicht, und urheberrechtlich geschützt. Es ist verfügbar unter der <a href="https://jv-arcade.com/License.html">JVA JV-Arcade Lizenz</a>, und darf nicht weitergegeben oder verteilt werden. Weitere Informationen unter dem Link.',
	'JV_POKER_HELP_CREATE_QUESTION'			=> 'Wer hat diese phpBB Holdem Póker Erweiterung erstellt?',
	'JV_POKER_HELP_DISABLE_ANSWER'			=> 'In diesem Fall gibt es drei Möglichkeiten:
	<ul>
		<li>1. Alle Übungsräume werden sofort gestoppt und alle Benutzer stehen vom Tisch auf.</li>
		<li>2. Normale Räume setzen das Spiel bis zum Ende des aktuellen Spiels fort. Am Ende der Runde stehen alle Benutzer automatisch vom Tisch auf.</li>
		<li>3. Im Turnierraum wird das Turnier bis zum Ende fortgesetzt. Am Ende des Turniers stehen alle Benutzer automatisch vom Tisch auf.</li>
	</ul>',
	'JV_POKER_HELP_DISABLE_QUESTION'		=> 'Was passiert, wenn der Administrator das Forum oder Poker ausschaltet?',
	'JV_POKER_HELP_DROP_TIME_ANSWER'		=> 'In diesem Fall wird der vom Administrator festgelegte Countdown für die Unterbrechungszeit (Auswurfzeit) wirksam. Zum Beispiel: Wenn die Auswurfzeit 5 Minuten beträgt, bleibst du noch 5 Minuten am Tisch sitzen, dann wird die Partie für dich automatisch beendet, und du stehst auf. Wenn du innerhalb der festgelegten Zeit zum Internet zurückkehrst, spielst du von dort aus weiter, wo das Spiel gerade ist.',
	'JV_POKER_HELP_DROP_TIME_QUESTION'		=> 'Was passiert, wenn meine Internetverbindung unterbrochen wird?',
	'JV_POKER_HELP_DROP_TOKEN_ANSWER'		=> 'In diesem Fall gibt es drei Möglichkeiten:
	<ul>
		<li>1. Du kannst keine Chips aus einem Übungsraum entnehmen, sodass deine noch eingelagerten Chips storniert werden.</li>
		<li>2. Wenn du aus einem normalen Raum geworfen wirst, werden deine restlichen Chips natürlich zurückgegeben.</li>
		<li>3. Nur der Gewinner kann den Preis eines Turnierraums erhalten. Wenn du also während des Turniers ausgeschieden bist, werden deine vorhandenen Chips proportional auf die aktuellen Spieler verteilt. Wenn du vor Beginn des Turniers rausgeworfen wirst, werden dir deine Chips zurückgegeben.</li>
	</ul>',
	'JV_POKER_HELP_DROP_TOKEN_QUESTION'		=> 'Was passiert mit meinen Chips, wenn ich aus dem Raum herausgeworfen werde?',
	'JV_POKER_HELP_ER_ANSWER'				=> 'Der Administrator kann während des Spiels nur Übungsräume ändern. Normal- und Turnierräume können nicht während eines aktiven Spiels gelöscht oder geändert werden. Es können jedoch jederzeit Berechtigungen und globale Einstellungen geändert werden, und diese Einstellungen können sich auf jeden Raum oder Benutzer auswirken.',
	'JV_POKER_HELP_ER_QUESTION'				=> 'Was passiert, wenn der Administrator die Raumeinstellungen ändert?',
	'JV_POKER_HELP_EXIT_ANSWER'				=> 'In diesem Fall gibt es drei Möglichkeiten:
	<ul>
		<li>1. Du verlässt den Raum. Wenn du dich in einem Übungsraum befindest, kannst du deine Chips nicht mitnehmen, darum werden sie storniert.</li>
		<li>2. Du verlässt den Raum. Wenn du dich in einem normalen Raum befindest, werden deine gewonnenen Chips deinem Guthaben hinzugefügt.</li>
		<li>3. Du verlässt den Raum. Nur der Gewinner kann den Preis eines Turnierraums erhalten. Wenn du also während des Turniers den Raum verlässt, werden deine vorhandenen Chips proportional auf die aktuellen Spieler verteilt. Wenn du vor Beginn des Turniers den Raum verlässt, werden dir deine Chips zurückgegeben.</li>
	</ul>',
	'JV_POKER_HELP_EXIT_QUESTION'			=> 'Was passiert, wenn ich die Beenden-Taste drücke?',
	'JV_POKER_HELP_EXT_DIS_ANSWER'			=> 'In diesem Fall werden alle Raumtypen sofort gestoppt. Wenn der Administrator wieder einschaltet, ehe die Auswurfzeit abgelaufen ist, kann das Spiel fortgesetzt werden. Wenn er erst nach dieser Zeit wieder einschaltet, wird das aktuelle Spiel ausgewertet, sobald jemand den Raum betritt.',
	'JV_POKER_HELP_EXT_DIS_QUESTION'		=> 'Was passiert, wenn der Administrator die Erweiterung „phpBB Holdem Póker“ deaktiviert?',
	'JV_POKER_HELP_E_SHOUT_ANSWER'			=> 'Wenn es vom Administrator aktiviert wurde, dann ja.',
	'JV_POKER_HELP_E_SHOUT_QUESTION'		=> 'Kann ich Smilies in meinen Nachrichten verwenden?',
	'JV_POKER_HELP_GAME_SOUND_ANSWER'		=> 'Ja. Der Ton kann jederzeit während des Spiels ein- und ausgeschaltet werden. Hiermit werden alle Töne einschließlich der Shoutbox ausgeschaltet. Die Einstellung wird immer gespeichert.',
	'JV_POKER_HELP_GAME_SOUND_QUESTION'		=> 'Kann ich im Spiel den Ton ausschalten?',
	'JV_POKER_HELP_INACTIVE_ANSWER'			=> 'In diesem Fall wird der vom Administrator festgelegte Countdown für die Inaktivitätszeit wirksam. Zum Beispiel: Wenn die Inaktivitätszeit 10 Minuten beträgt, bleibst du noch 10 Minuten am Tisch sitzen. Reagierst du in dieser Zeit auf nichts, dann wird die Partie für dich automatisch beendet, und du stehst auf. Das ist notwendig, weil niemand möchte, dass der Spielverlauf behindert wird.',
	'JV_POKER_HELP_INACTIVE_QUESTION'		=> 'Was passiert, wenn ich während des Spiels auf nichts reagiere?',
	'JV_POKER_HELP_INCOME_ANSWER'			=> 'Grundsätzlich werden Einnahmen nur in den Räumen „Normal“ und „Turnier“ gespeichert. Das Einkommen ist der Betrag, den ein Benutzer während seines Spiels gewinnt oder verliert. Das Einkommen berücksichtigt nur den gespielten Betrag. Wenn ein Benutzer beispielsweise einen „Normalraum“ betritt mit 100 $, und es müssen zu Beginn von diesem Betrag z. B. 5% in den Pot gezahlt werden, was 5 $ entspricht, dann ist der zu berücksichtigende Spielbetrag 95 $. Wenn du diesen verlierst, beträgt dein Einkommen -95 $.',
	'JV_POKER_HELP_INCOME_QUESTION'			=> 'Was ist mit Einkommen gemeint?',
	'JV_POKER_HELP_JACKPOT_ANSWER'			=> 'Der Administrator kann die Verwendung des Jackpots aktivieren, und bestimmen, aufgrund welches Prozentsatzes er mit Chips gefüllt wird. Der Jackpot kann in Normalräumen angesammelt werden, basierend auf dem eingestellten Prozentsatz, welcher vom Buy-in-Betrag der Benutzer genommen wird, wenn sie sich an den Tisch setzen. Es gibt zwei Möglichkeiten, den Jackpot zu erhalten:
	<ul>
		<li>Der Administrator ändert den Raumtyp von Normal zu Turnier. Auf diese Weise kann der Gewinner des Turniers den aufgelaufenen Pot zusammen mit seinen Gewinnen erhalten.</li>
		<li>Der Administrator erstellt einen neuen Turnierraum und überträgt den Preis vom normalen Raum in den Turnierraum.</li>
	</ul>',
	'JV_POKER_HELP_JACKPOT_QUESTION'		=> 'Was ist der Jackpot und wie kann man ihn erhalten?',
	'JV_POKER_HELP_LEADERS_ANSWER'			=> 'Die Rangfolge der Champions richtet sich in erster Linie nach dem Einkommen und alternativ nach der Siegesrate.',
	'JV_POKER_HELP_LEADERS_QUESTION'		=> 'Worauf basiert die Rangliste der Champions?',
	'JV_POKER_HELP_LEARNER_ANSWER'			=> 'Jeder kann in diesem Raum spielen, auch wenn er selbst keine eigenen Chips besitzt. Jeder Spieler erhält eine vorher festgelegte Anzahl an Chips, wenn er sich hinsetzt. In diesem Raum spielen alle Spieler mit offenen Karten, so dass sie die Chance haben, sich gegenseitig das Spiel zu lehren. In diesem Raum gewonnene Chips können nicht aus dem Raum mitgenommen und eingewechselt werden.',
	'JV_POKER_HELP_LEARNER_QUESTION'		=> 'Was bedeutet es, in einem Lernraum zu sein?',
	'JV_POKER_HELP_LIMIT_ANSWER'			=> 'Die Antwort auf diese Frage wurde bereits in „Wie spielt man Poker?/Limitregeln“ beschrieben.',
	'JV_POKER_HELP_LIMIT_QUESTION'			=> 'Was bedeutet Festes Limit/kein Limit?',
	'JV_POKER_HELP_L_STATS_ANSWER'			=> 'In den Lernräumen werden keine statistischen Daten gespeichert.',
	'JV_POKER_HELP_L_STATS_QUESTION'		=> 'Speichern die Lernräume auch statistische Daten?',
	'JV_POKER_HELP_MAX_CHIPS_ANSWER'		=> 'Es gibt zwei Möglichkeiten:
	<ul>
		<li>1. In einem Übungsraum oder Normalraum geht das. Wenn du ständig gewinnst, und nicht vom Tisch aufstehst, erhöht sich die Anzahl deiner Chips fortwährend.</li>
		<li>2. In einem Turnierraum geht das nicht.</li>
	</ul>',
	'JV_POKER_HELP_MAX_CHIPS_QUESTION'		=> 'Kann ich mit mehr Chips als dem Maximaleinsatz spielen?',
	'JV_POKER_HELP_MOVETIME_ANSWER'			=> 'Wenn du ein solches Problem hast, solltest du es einem Administrator melden.',
	'JV_POKER_HELP_MOVETIME_QUESTION'		=> 'Die Sprungzeit ist zu kurz, was kann ich tun?',
	'JV_POKER_HELP_MOVE_TIME_ANSWER'		=> '„Sprungzeit“ ist der Zeitraum, während dessen ein Benutzer entscheiden kann, ob er schiebt, bietet oder passt. Wenn diese Zeit abgelaufen ist, stehen zwei automatische Optionen zur Verfügung:
	<ul>
		<li>1. War die Aktion des Vorgängers kein Call, schieben wir automatisch.</li>
		<li>2. War die Aktion des Vorgängers ein Call (mitgehen), geben wir automatisch auf.</li>
	</ul>',
	'JV_POKER_HELP_MOVE_TIME_QUESTION'		=> 'Was ist die Sprungzeit?',
	'JV_POKER_HELP_NORMAL_ANSWER'			=> 'In einem Normalraum können nur Benutzer spielen, welche ihre eigenen Chips besitzen, und welche genügend Chips für den geforderten Mindesteinstiegsbetrag mit hereinbringen. Jeder dieser Räume verfügt über einen festgelegten Mindest- und Höchstbetrag für den Einstieg. Benutzer können sich mit dem Mindestbetrag an den Tisch setzen. In diesem Raum gewonnene Chips können aus dem Raum mitgenommen, und wieder zurückgewechselt werden.',
	'JV_POKER_HELP_NORMAL_QUESTION'			=> 'Was bedeutet es, in einem Normalraum zu sein?',
	'JV_POKER_HELP_OFFLINE_ANSWER'			=> 'Wenn der Avatar des Benutzers grau blinkt, bedeutet dies, dass der Benutzer derzeit offline oder nicht mit dem Raum verbunden ist. Dafür gibt es zwei mögliche Gründe:
	<ul>
		<li>Die Internetverbindung des Benutzers wurde unterbrochen.</li>
		<li>Der Administrator erlaubt die Ausführung des Pokerraums nur in einem aktiven Fenster. Der Benutzer sieht sich aber eine andere Seite oder Webseite an. In diesem Fall erhält dieser Benutzer keine neuen Daten über den aktuellen Status des Pokerspiels. Für ihn gibt es eine Art Ladepause, und solange er die Seite nicht wieder ansieht, bleibt er offline.</li>
	</ul>',
	'JV_POKER_HELP_OFFLINE_QUESTION'		=> 'Der Avatar des Benutzers blinkt grau. Was bedeutet das?',
	'JV_POKER_HELP_PAUSE_ANSWER'			=> 'Wenn du die Pause-Taste drückst, ist dies gleichbedeutend mit dem Verlassen des Spiels. Wenn also die Partie weitergeht, werden deine Karten abgeworfen. Diese Option lohnt sich, wenn der Spieler nicht möchte, dass jemand anderes zwischenzeitlich seinen Platz einnimmt. Natürlich ist die Pausenzeit begrenzt auf die vom Administrator festgelegte Spanne.',
	'JV_POKER_HELP_PAUSE_QUESTION'			=> 'Was passiert, wenn ich die Pause-Taste drücke?',
	'JV_POKER_HELP_PD_ANSWER'				=> '„phpBB Holdem Póker“ erhebt und speichert die IP-Adresse jedes aktuellen Spielers, bis der Benutzer den Tisch verlassen hat. Wenn ein Benutzer vom Tisch aufsteht, werden alle Daten gelöscht, und nur die statistischen Daten bleiben erhalten. Die IP-Adresse wird während des Spiels gespeichert, um zu verhindern, dass am selben Tisch mehrere Spieler mit der selben IP-Adresse sitzen. Selbstverständlich kannst du diese IP-Prüfung aktivieren und deaktivieren.',
	'JV_POKER_HELP_PD_QUESTION'				=> 'Speichert „phpBB Holdem Póker“ persönliche Daten?',
	'JV_POKER_HELP_PLAY_ANSWER'				=> 'Poker ist eines der beliebtesten Kartenspiele der Welt. Ziel des Spiels ist es, aus den selbst erhaltenen Karten, in Kombination mit den aufgedeckten Gemeinschaftskarten, das Beste herauszuholen, um schließlich den Einsatz in der Mitte des Tisches zu erlangen (im Englischen „Pot“ oder „Jackpot“ genannt). Je Pokerraum kann das Spiel von 2-8 Personen gespielt werden. Im Spiel wird ein französisches Blatt mit 52 Karten ohne Joker verwendet. Jeder Spieler erhält zwei private Karten, die von anderen Spielern nicht gesehen oder verwendet werden können. Während des Spiels werden nach und nach fünf Gemeinschaftskarten offen auf den Tisch gelegt, die alle Spieler sehen und verwenden können. Der Spieler versucht nun, aus seinen eigenen Karten und den Gemeinschaftskarten die bestmögliche „Fünf-Karten-Kombination“ herzustellen. Der Spieler mit den stärksten Karten gewinnt den Wert des Einsatzes. Ein Kartenspiel französischer Karten (ohne Joker) hat 4 verschiedene Farben, und jede Farbe besteht aus 13 Karten mit unterschiedlichen Werten, was das 52-Blatt-Deck ergibt. Die Reihenfolge der 4 Farben: <span class="poker_cs">♣</span> Kreuz (clubs) <span class="poker_dh">♦</span> Karo (diamonds) <span class="poker_dh">♥</span> Herz (hearts) <span class="poker_cs">♠</span> Pik (spades). Alle Farben sind gleich für die Bewertung von Pokerhänden. Die 13 Kartenwerte in der Reihenfolge: A (Ass), 2, 3, 4, 5, 6, 7, 8, 9, 10, J (Bube), Q (Dame), K (König). Ein Ass ist nicht nur als Zahlenwert 1 zu betrachten, es kann auch  nach dem König folgend die höchste Karte sein. 
		<br><br><strong>Geber:</strong><br>
		Am Pokertisch gibt es immer eine Geberposition (Dealer). Der Geber handhabt die Karten, mischt und verteilt sie. Der Dealer-Button (D) zeigt den Mitspieler an, der aktuell die Geberposition innehat. Der Geber nimmt am Spiel teil. 

		<br><br><strong>Kleine und große Starteinsätze:</strong><br>
		Der erste Spieler links vom Dealer-Button ist der „kleine Blinde“ (Small Blind), und der erste Spieler links vom „kleinen Blinden“ ist der „große Blinde“ (Big Blind). Sie sind die Blinden, die ihre Einsätze machen müssen, ohne ihre eigenen Karten zu kennen. Der „Small Blind“ ist der kleine Starteinsatz, der „Big Blind“ ist der große Starteinsatz, den sie „blind“ leisten müssen. 

		<br><br><strong>Bieten:</strong><br>
		In einem Pokerspiel werden als Währung  für Gebote „Chips“ verwendet, die während des Spiels das Bargeld ersetzen. In der Setzrunde geht das Bieten immer nach Links, und alle „aktíven Spieler“ (die noch nicht aufgegeben haben) setzen und setzen weiter, bis aktive Gebote nicht mehr erhöht, gehalten oder abgelehnt werden (passen). Die Höhe der Gebote und Erhöhungen ist abhängig von den Begrenzungsregeln. 

		<br><br><strong>Austeilen (dealing):</strong><br>
		Der Geber (Dealer) mischt das Deck. Bevor die Karten ausgeteilt werden, setzen der „Small Blind“ und der „Big Blind“ ihre Starteinsätze, und der Geber legt alle Karten nach links. Dann beginnt der Pre-Flop (die erste Setzrunde), der sich von den anderen Setzrunden im Spiel unterscheidet.

		<br><br><strong>Pre-Flop (erste Setzrunde):</strong><br>
		Die erste Setzrunde wird vom ersten Spieler links vom „Big Blind“ gestartet, und es können drei mögliche Gebote abgegeben werden:
		<ul>
			<li>Mitgehen/halten (Call) - der bestehende Einsatz wird bezahlt.</li>
			<li>Erhöhen (Raise) - zahlt den bestehenden Einsatz, und erhöht ihn innerhalb der Limitregeln.</li>
			<li>Aufgeben/Passen (Fold) - die Karten werden mit der Farbe nach unten auf den Tisch gelegt, und die Runde aufgegeben.</li>
		</ul>

		Die Setzrunde geht nach links und die Spieler können bieten. Wenn du gerade den Einsatz gehalten hast, dann:
		<ul>
			<li>„Small Blinds“ müssen ihre eigenen Einsätze mindestens mit dem small blind erhöhen (Raise), oder passen und damit aufgeben (Fold).</li>
			<li>Die „Big Blinds“ können den Einsatz mit mindestens ihrem big blind erhöhen (Raise), sie können schieben (Check) - also kein weiteres Gebot setzen -, oder passen (Fold). </li>
		</ul>

		Wenn ein Spieler den Einsatz erhöht, beginnt das Bieten. Am Ende der Setzrunde sammelt der Geber (Dealer) die Einsätze ein, und legt sie in die Spielkasse, den „Pot“.
		<br><br><strong>Flop (zweite Setzrunde):</strong><br>
		Der Geber teilt drei Karten aus, den „Flop“, die mit der Farbe nach oben in der Mitte des Tisches platziert werden, damit alle Spieler sie sehen können. Dann beginnt die zweite Setzrunde des Spiels.

		<br><br><strong>Im Gegensatz zur Pre-Flop-Setzrunde können alle Setzrunden nach dem Flop immer mit dem ersten aktiven Spieler links vom Dealer-Button beginnen, und es können drei Gebote abgegeben werden:</strong><br>
		<ul>
			<li>Schieben (Check): Aktion an den nächsten Spieler weiterreichen, nicht mitgehen und nicht passen.</li>
			<li>Bieten (Bet): setzt die Eröffnungswette innerhalb der Limitregeln.</li>
			<li>Passen (Fold): die Karten mit der Farbe nach unten abwerfen und die Runde aufgeben.</li>
		</ul>

		Wenn ein Spieler die Eröffnungswette platziert, kann der erste aktive Spieler zu seiner Linken drei Gebote abgeben:
		<ul>
			<li>Mitgehen/halten (Call) - der bestehende Einsatz wird bezahlt.</li>
			<li>Erhöhen (Raise) - zahlt den bestehenden Einsatz, und erhöht ihn innerhalb der Limitregeln.</li>
			<li>Aufgeben/Passen (Fold) - die Karten werden mit der Farbe nach unten auf den Tisch gelegt, und die Runde aufgegeben.</li>
		</ul>

		Wenn ein Spieler den Einsatz erhöht, beginnt die Setzrunde. Am Ende der Setzrunde sammelt der Geber (Dealer) die Einsätze ein, und legt sie in den Pot.

		<br><br><strong>Turn (dritte Setzrunde)</strong><br>
		Der Geber teilt nun die nächste Gemeinschaftskarte offen aus, den „Turn“. Damit stehen den Spieler nun vier Gemeinschaftskarten zur Verfügung. Jetzt beginnt die dritte Setzrunde.

		<br><br><strong>River (vierte Setzrunde)</strong><br>
		Der Geber teilt die letzte offene Gemeinschaftskarte aus, genannt „River“. Damit stehen jedem Spieler sieben Karten zur Verfügung. Fünf davon müssen verwendet werden, um ein Pokerblatt zu bilden, welches hoffentlich hochwertiger ist, als das der Gegenspieler.

		<br><br><strong>Showdown (zeigen der Karten)</strong><br>
		Wenn nach der letzten Wettrunde mehr als ein Spieler im Spiel ist, werden die Karten der aktiven Spieler angezeigt. Der Pot wird vom Pokerspieler mit dem stärksten Blatt aus fünf Karten gewonnen. Wenn zwei oder mehr Spieler dieselbe Pokerhand zeigen, wird der Pot zu gleichen Teilen verteilt. Wenn der Pot-Wert nicht gleichmäßig aufgeteilt werden kann, hat der erste gewinnende Spieler links vom Dealer-Button Anspruch auf den Überschuss. Vor der nächsten Runde wird der Dealer-Button immer eine Position nach links bewegt. Der Dealer ist also in jeder Runde ein anderer, und die Blinds werden ebenfalls anderen Spielern zugeteilt.

		<br><br><strong>Bewertung der Pokerhände</strong><br>
		Beim Poker ist eine Pokerhand eine Kombination aus 5 Karten, welche der Spieler aus seinen zwei eigenen sowie den fünf Gemeinschaftskarten vom Tisch zusammenstellt (also aus insgesamt sieben Karten). Der Spieler kann eine, beide, oder keine seiner eigenen Karten verwenden. Die Farben der Karten sind gleichwertig. Haben zwei Spieler die gleiche Kombination, entscheidet die Begleitkarte, welcher Spieler das Spiel gewinnt. Eine Begleitkarte (Kicker) gehört nicht zur Kombination, sie begleitet und „ergänzt“ sie im nur. Bei Gleichstand zweier Spieler entscheidet dann der höherwertige Kicker. Bleibt es dennoch bei Gleichstand, wird der Pot auf die Gewinner aufgeteilt.

		<br><br><strong>Limitregeln</strong><br>
		Der Mindesteinsatz ist immer der gleiche wie beim Big Blind.
		<ul>
			<li>Bei einem festen Limit ist es möglich, den Big Blind im Pre-Flop (Erste Setzrunde) und im Flop (Zweite Setzrunde) um das Dreifache zu erhöhen. Für die Runde Turn (Dritte Setzrunde) und River (Vierte Setzrunde) kann durch diese Regel nur mit dem doppelten Big Blind erhöht werden.</li>
			<li>Kein Limit bedeutet, dass der Betrag und die Anzahl der Erhöhungen nicht begrenzt sind.</li>
		</ul>

		<strong>Pokerhände (poker hands):</strong>
		<ul>
			<li><strong>Royal Flush</strong>
				<ul><li>Die stärkste Kartenkombination. 10, Bube, Dame, König, Ass - alle in der gleichen Farbe. Wenn das mehrmals vorkommt, herrscht Gleichstand (der Gewinn wird aufgeteilt). <br>Beispiel: 10<span class="poker_dh">♥</span>, J<span class="poker_dh">♥</span>, Q<span class="poker_dh">♥</span>, K<span class="poker_dh">♥</span>, A<span class="poker_dh">♥</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Straight Flush</strong>
				<ul><li>Eine aufeinanderfolgende Sequenz aus fünf gleichfarbigen Karten. Kommt sie mehrmals in der Runde vor, entscheidet die höchste Karte. Wenn zwei gleichwertig sind, herrscht Gleichstand (der Gewinn wird aufgeteilt).<br>Beispiel: 5<span class="poker_cs">♣</span>, 6<span class="poker_cs">♣</span>, 7<span class="poker_cs">♣</span>, 8<span class="poker_cs">♣</span>, 9<span class="poker_cs">♣</span></li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Poker (Vierling)</strong>
				<ul><li>Es besteht aus vier Karten mit der gleichen Nummer oder dem gleichen Zeichen und irgendeiner anderen Karte. Wenn sich zwei von ihnen treffen, gewinnt der höherwertige Poker.<br>Beispiel: 7<span class="poker_dh">♥</span>, 7<span class="poker_cs">♠</span>, 7<span class="poker_cs">♣</span>, 7<span class="poker_dh">♦</span>, 10<span class="poker_cs">♠</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Full House</strong>
				<ul><li>Es besteht aus drei Karten mit der gleichen Nummer oder dem gleichen Zeichen, und zwei anderen Karten mit der gleichen Nummer oder Zeichen. Wenn mehrere davon vorkommen, gewinnt der höhere Drilling. Wenn immer noch Gleichstand ist, gewinnt das höhere Paar.<br>Beispiel: 5<span class="poker_dh">♦</span>, 5<span class="poker_cs">♣</span>, 5<span class="poker_cs">♠</span>, 8<span class="poker_dh">♥</span>, 8<span class="poker_cs">♠</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Flush (Flöte)</strong>
				<ul><li>Besteht aus fünf beliebigen gleichfarbigen Karten. Wenn mehrere davon vorkommen, gewinnt der Spieler mit der höchsten Karte, die nicht jeder Spieler hat. Herrscht immer noch Gleichstand, zählt die zweithöchste Karte, und so weiter…<br>Beispiel: 2<span class="poker_cs">♠</span>, 4<span class="poker_cs">♠</span>, 5<span class="poker_cs">♠</span>, 7<span class="poker_cs">♠</span>, 10<span class="poker_cs">♠</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Straße (Straight)</strong>
				<ul><li>Eine Straße besteht aus 5 aufeinanderfolgenden Karten beliebiger Farbe. Wenn mehrere davon vorkommen, gewinnt der Spieler mit der höchsten Karte. Ist damit noch keine Entscheidung zu erreichen, herrscht Gleichstand (der Gewinn wird geteilt).<br>Beispiel: 4<span class="poker_dh">♥</span>, 5<span class="poker_dh">♦</span>, 6<span class="poker_cs">♠</span>, 7<span class="poker_cs">♠</span>, 8<span class="poker_cs">♣</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Drilling (drei Gleiche)</strong>
				<ul><li>Besteht aus drei Karten mit derselben Nummer oder Zeichen, und zwei neutralen anderen Karten. Wenn mehrere davon vorkommen, gewinnt der höhere Drilling. Wenn keine Entscheidung getroffen wird, entscheidet die höhere neutrale Karte, dann die niedrigere neutrale Karte <br>Beispiel: 3<span class="poker_dh">♥</span>, 3<span class="poker_cs">♣</span>, 3<span class="poker_cs">♠</span>, 7<span class="poker_cs">♠</span>, 10<span class="poker_dh">♦</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Zwei Paare (two pairs)</strong>
				<ul><li>Besteht aus zwei mal zwei Karten mit gleicher Zahl oder Zeichen und einer neutralen Karte. Wenn mehrere Doppelpaare vorkommen, entscheidet das höhere Paar, dann das zweithöchste, und, falls erforderlich, die neutrale Karte. <br>Beispiel: 5<span class="poker_cs">♠</span>, 5<span class="poker_dh">♦</span>, 8<span class="poker_cs">♠</span>, 8<span class="poker_cs">♣</span>, 10<span class="poker_dh">♦</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Ein Paar (pair)</strong>
				<ul><li>Besteht aus zwei Karten mit gleicher Zahl oder Zeichen, und drei neutralen Karten. Wenn mehrere Paare vorkommen, entscheidet das höhere Paar, und dann die neutralen Karte.<br>Beispiel: 3<span class="poker_dh">♥</span>, 5<span class="poker_cs">♠</span>, 7<span class="poker_cs">♣</span>, 10<span class="poker_dh">♦</span>, 10<span class="poker_cs">♠</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Höchste Karte (high card)</strong>
				<ul><li>Eine beliebige Karte.
			</li>
		</ul>',
	'JV_POKER_HELP_PLAY_QUESTION'			=> 'Wie spielt man Poker?',
	'JV_POKER_HELP_POINTS_ANSWER'			=> 'Natürlich, auf die gleiche Weise, wie sie gekauft wurden.',
	'JV_POKER_HELP_POINTS_QUESTION'			=> 'Kann ich die erworbenen Chips zurückwechseln?',
	'JV_POKER_HELP_POKER_ANSWER'			=> 'PhpBB Holdem Póker ist ein Kartenspiel, mit dem registrierte Benutzer gegeneinander spielen können. Nur ein Administrator kann die Nutzung von Poker authorisieren. Die folgende Anleitung wird jedoch wahrscheinlich hilfreich sein.',
	'JV_POKER_HELP_POKER_QUESTION'			=> 'Was ist phpBB Holdem Póker?',
	'JV_POKER_HELP_PRACTICE_ANSWER'			=> 'Jeder kann in diesem Raum spielen, auch wenn er selbst keine eigenen Chips besitzt. Jeder Spieler erhält eine vorher festgelegte Anzahl an Chips, wenn er sich hinsetzt. Die in diesem Raum gewonnenen Chips können nicht aus dem Raum mitgenommen oder eingewechselt werden.',
	'JV_POKER_HELP_PRACTICE_QUESTION'		=> 'Was bedeutet es, in einem Übungsraum zu sein?',
	'JV_POKER_HELP_PS_ANSWER'				=> 'In diesem Fall werden alle Normal- und Turnierräume gestoppt. Wenn der Administrator wieder einschaltet, ehe die Auswurfzeit abgelaufen ist, kann das Spiel fortgesetzt werden. Wenn er erst nach dieser Zeit wieder einschaltet, wird das aktuelle Spiel ausgewertet, sobald jemand den Raum betritt.',
	'JV_POKER_HELP_PS_QUESTION'				=> 'Was passiert, wenn der Administrator das  „Punktesystem“ deaktiviert?',
	'JV_POKER_HELP_P_SHOUT_ANSWER'			=> 'Ja, wenn der Administrator es erlaubt hat. Wenn es nicht aktiviert wurde, erscheint nur das Wort „Pause“ in der Shoutbox.',
	'JV_POKER_HELP_P_SHOUT_QUESTION'		=> 'Kann ich die Shoutbox während einer Pause nutzen?',
	'JV_POKER_HELP_P_STATS_ANSWER'			=> 'Grundsätzlich ist das möglich mit Ausnahme des Einkommens. Wenn der Administrator die Speicherung der Einkünfte in den Übungsräumen genehmigt, werden alle statistischen Daten in den Übungsräumen gespeichert.',
	'JV_POKER_HELP_P_STATS_QUESTION'		=> 'Speichern Übungsräume auch statistische Daten?',
	'JV_POKER_HELP_REG_ANSWER'				=> 'Nur registrierte Benutzer können phpBB Holdem Póker spielen. Daher ist es eine gute Idee, ein registriertes Mitglied zu sein.',
	'JV_POKER_HELP_REG_QUESTION'			=> 'Warum muss ich mich überhaupt registrieren?',
	'JV_POKER_HELP_RESET_ANSWER'			=> 'In diesem Fall werden die Chips aller Benutzer vor dem Löschen automatisch konvertiert.',
	'JV_POKER_HELP_RESET_QUESTION'			=> 'Was passiert mit meinen Chips, wenn ein Administrator die Poker-Daten des Benutzers löscht?',
	'JV_POKER_HELP_RH_ANSWER'				=> 'Wenn ein Raum rot hervorgehoben ist, bedeutet dies, dass sich niemand mehr im Raum befindet, aber noch ein aktives, nicht abgeschlossenes Spiel läuft. Dafür gibt es mehrere mögliche Gründe:
	<ul>
		<li>1. Der Server wurde während des Spiels angehalten.</li>
		<li>2. Der Administrator hat das Forum deaktiviert.</li>
		<li>3. Der Administrator hat phpBB Holdem Póker deaktiviert.</li>
		<li>4. Der Administrator hat das Punktesystem deaktiviert, mit dem phpBB Holdem Póker verbunden ist.</li>
		<li>5. Der Administrator hat diesen Raum deaktiviert.</li>
		<li>6. Der Administrator hat den Raumtyp geändert.</li>
		<li>7. Benutzer haben den Raum nicht ordnungsgemäß verlassen. Beispielsweise haben sie einfach das Browserfenster während des Spiels geschlossen.</li>
		<li>8. Die Internetverbindung der Benutzer zu der Seite wurde unterbrochen.</li>
	</ul>
	Wenn wir einen so markierten Raum betreten, wird das noch laufende Spiel sofort ausgewertet und abgeschlossen. Natürlich wird der Benutzer nichts davon sehen. Aber wenn du dich an den Tisch setzt, kannst du auf der Pinnwand sehen, wer die letzte Partie gewonnen hat.',
	'JV_POKER_HELP_RH_QUESTION'				=> 'Ich habe einen Raum gesehen, der rot hervorgehoben ist. Warum?',
	'JV_POKER_HELP_SHOUT_ANSWER'			=> 'Wenn der Administrator dazu die Berechtigung erteilt hat, dann ja. Wenn nicht, kannst du nur die Nachrichten über den Spielfortschritt in der Nachrichtenbox lesen.',
	'JV_POKER_HELP_SHOUT_QUESTION'			=> 'Kann ich die Shoutbox während des Spiels benutzen?',
	'JV_POKER_HELP_SHOUT_SOUND_ANSWER'		=> 'Ja, du kannst die Shoutbox gesondert ausschalten. Ausschalten der Shoutbox deaktiviert nicht den Ton im Spiel.',
	'JV_POKER_HELP_SHOUT_SOUND_QUESTION'	=> 'Kann ich die Shoutbox ausschalten?',
	'JV_POKER_HELP_SHOWDOWN_ANSWER'			=> 'Die Zeit der Präsentation der Karten am Ende des Spiels wird vom Administrator festgelegt.',
	'JV_POKER_HELP_SHOWDOWN_QUESTION'		=> 'Wie lange sind die Karten am Ende des Spiels sichtbar?',
	'JV_POKER_HELP_STAND_UP_ANSWER'			=> 'In diesem Fall gibt es zwei Möglichkeiten:
	<ul>
		<li>1. Du stehst vom Tisch auf. Du verlässt nicht den Raum. Wenn du dich in einem Übungsraum befindest, kannst du deine Chips nicht mitnehmen, darum werden sie storniert.</li>
		<li>2. Du stehst vom Tisch auf. Du verlässt nicht den Raum. Wenn du dich in einem normalen Raum befindest, werden deine gewonnenen Chips deinem Guthaben hinzugefügt.</li>
	</ul>',
	'JV_POKER_HELP_STAND_UP_QUESTION'		=> 'Was passiert, wenn ich die Aufwärtstaste drücke?',
	'JV_POKER_HELP_STATUS_ANSWER'			=> 'Das Feld unter „Status“ zeigt an, ob dieser Raum in einem Spiel ist, oder nicht.',
	'JV_POKER_HELP_STATUS_QUESTION'			=> 'Was bedeutet Status?',
	'JV_POKER_HELP_SU_SHOUT_ANSWER'			=> 'Nein, nur sitzende Benutzer können die Shoutbox benutzen.',
	'JV_POKER_HELP_SU_SHOUT_QUESTION'		=> 'Kann ich die Shoutbox benutzen, wenn ich aufgestanden bin?',
	'JV_POKER_HELP_S_SHOUT_ANSWER'			=> 'Die Shoutbox kann immer nur 8 Zeilen anzeigen, so dass ein Scrollen nicht möglich ist.',
	'JV_POKER_HELP_S_SHOUT_QUESTION'		=> 'Wie kann ich in den Nachrichten scrollen?',
	'JV_POKER_HELP_TOKEN_ANSWER'			=> 'Ein Einwechseln von Chips ist nur möglich, wenn „phpBB Holdem Póker“ mit einem „Punktesystem“ verknüpft ist. Sobald eine solche Integration abgeschlossen ist, finden Benutzer die Schaltfläche „Chips einwechseln“ neben der Anzeige ihrer vorhandenen Chips auf der Poker-Hauptseite, im Block mit ihrer Benutzerinformation.',
	'JV_POKER_HELP_TOKEN_QUESTION'			=> 'Wie kann man Chips einwechseln?',
	'JV_POKER_HELP_TOUR_ANSWER'				=> 'In einem Turnierraum können nur Benutzer spielen, welche ihre eigenen Chips besitzen, und welche genügend Chips für den geforderten Mindesteinstiegsbetrag mit hereinbringen. Jeder dieser Räume verfügt über einen festgelegten Mindestbetrag für den Einstieg. In diesem Raum gewonnene Chips können aus dem Raum mitgenommen, und wieder zurückgewechselt werden.',
	'JV_POKER_HELP_TOUR_QUESTION'			=> 'Was bedeutet es, in einem Turnierraum zu sein?',
	'JV_POKER_HELP_USER_STATS_ANSWER'		=> 'Ja, wenn der Administrator das Anzeigen von Statistiken zulässt.',
	'JV_POKER_HELP_USER_STATS_QUESTION'		=> 'Kann ich die Benutzerstatistiken sehen?',
	'JV_POKER_HELP_U_INCOME_ANSWER'			=> 'Das Einkommen wird immer nur dann aktualisiert, wenn der Benutzer vom Tisch aufsteht.',
	'JV_POKER_HELP_U_INCOME_QUESTION'		=> 'Während des Spiels ändert sich mein Einkommen nicht, warum?',
	'JV_POKER_HELP_W_SHOUT_ANSWER'			=> 'Die Anzahl der in der Shoutbox gemeldeten Chips deckt nur die realen Gewinne der Runde ab. Der gewonnene Betrag mag sich vom Wert des „Pot“ in einem Fall unterscheiden. Beispielsweise wenn jemand mehr Chips gesetzt hat als du, und angenommen, du gewinnst, dann muss die Differenz an den rechtmäßigen Eigentümer zurückgegeben werden. Wir können immer nur das gewinnen, worauf wir selbst wetten können.',
	'JV_POKER_HELP_W_SHOUT_QUESTION'		=> 'Die in der Shoutbox gemeldeten Gewinne stimmen nicht überein mit dem Pot, warum?',
));
