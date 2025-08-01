<?php
/**
*
* @package phpBB Holdem Póker
* @version $Id$
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
	'JV_POKER_HELP_AUTO_ACC_ANSWER'			=> 'Wenn der Benutzer die Funktion „Automatisches Schieben/Mitgehen“ erlaubt, wird er automatisch schieben, wenn er an der Reihe ist, oder, nach einem „mitgehen“ wird automatisch der angeforderte Betrag eingegeben.',
	'JV_POKER_HELP_AUTO_ACC_QUESTION'		=> 'Was bewirkt Automatisches Schieben/Mitgehen?',
	'JV_POKER_HELP_AUTO_ACF_ANSWER'			=> 'Wenn der Benutzer die Funktion „Automatisches Schieben/Passen“ erlaubt, wird nach einem „mitgehen“ automatisch gepasst oder geschoben, wenn er an der Reihe ist.',
	'JV_POKER_HELP_AUTO_ACF_QUESTION'		=> 'Was bewirkt Automatisches Schieben/Passen?',
	'JV_POKER_HELP_AVATAR_BC_ANSWER'		=> 'Ja, derzeit werden die folgenden Farben um den Avatar herum verwendet:
	<ul>
		<li>Weiß: Warten aufs Spielen.</li>
		<li>Grau: Diejenigen, die im Spiel sind.</li>
		<li>Gelb: Aktueller Spieler.</li>
		<li>Rot: Gefaltete Karten.</li>
	</ul>',
	'JV_POKER_HELP_AVATAR_BC_ANSWER_2'		=> '<li>Blau: Wettschutz.</li>',
	'JV_POKER_HELP_AVATAR_BC_QUESTION'		=> 'Bedeuten die Farben um den Avatar etwas?',
	'JV_POKER_HELP_A_SHOUT_ANSWER'			=> 'Ja, jeder Spieler kann während des Spiels das Archiv ansehen.',
	'JV_POKER_HELP_A_SHOUT_QUESTION'		=> 'Gibt es eine Möglichkeit, ältere Nachrichten anzuzeigen?',
	'JV_POKER_HELP_A_SHOUT_RE_ANSWER'		=> 'Wenn die Nachrichten nicht angezeigt werden, hast du deinen Stuhl verlassen.',
	'JV_POKER_HELP_A_SHOUT_RE_QUESTION'		=> 'Nach einer Aktualisierung des Archivs sind die Nachrichten verschwunden, warum?',
	'JV_POKER_HELP_A_SHOUT_R_ANSWER'		=> 'Ja, der Aktualisierungsknopf befindet sich auf der rechten Seite des Titelbalkens.',
	'JV_POKER_HELP_A_SHOUT_R_QUESTION'		=> 'Gibt es eine Möglichkeit, das Archiv zu aktualisieren?',
	'JV_POKER_HELP_BAN_CHIPS_ANSWER'		=> 'Ja, wenn ein Administrator deine Berechtigung für Poker löscht, kannst du jederzeit automatisch jederzeit alle deine Chips einwechseln %s<strong>HIER</strong>%s. Der automatische Umtausch funktioniert nicht, wenn Poker deaktiviert wurde. Schaue in diesem Fall später noch einmal vorbei und versuche es erneut.',
	'JV_POKER_HELP_BAN_CHIPS_QUESTION'		=> 'Wenn ich meine Berechtigung zur Benutzung von Poker verliere, gibt es noch eine Möglichkeit, meine Chips zurückzuwechseln?',
	'JV_POKER_HELP_BET_BACK_ANSWER'			=> 'Dies kann passieren, wenn von deinem Einsatz überzählige Chips vorhanden sind, bei denen niemand mitgegangen ist, oder es mehrere Gewinner gibt. In diesem Fall werden die überzähligen Chips an dich zurückgegeben und nicht in den Pot gelegt, sodass sie nicht in die Auswertung einfließen.',
	'JV_POKER_HELP_BET_BACK_QUESTION'		=> 'Ein Teil meines Einsatzes wird mir zurückgezahlt und geht nicht in den Pot, warum?',
	'JV_POKER_HELP_BET_BANK_ANSWER'			=> 'Dies kann passieren, wenn dein Einsatz überzählige Chips enthält, bei denen niemand mitgegangen ist und du aufgestanden bist. In diesem Fall gehen die überzähligen Chips an die Bank.',
	'JV_POKER_HELP_BET_BANK_QUESTION'		=> 'Ein Teil meines Einsatzes ging an den Dealer und nicht in den Pot, warum?',
	'JV_POKER_HELP_BLIND_ANSWER'			=> 'Der Small Blind/Big Blind hängt immer vom minimalen und maximalen Einstiegsbetrag ab. Der Mindesteinstiegsbetrag (Buy-in) ist immer das 10-fache des Big Blinds, während der maximale Einstiegsbetrag das 200-fache des Big Blinds beträgt. Wenn der minimale und maximale Wert gleich sind, hängt es natürlich von der Einstellung ab, ob der minimale, mittlere oder maximale Wert als Basis zugrunde gelegt wird. Der Small Blind beträgt immer die Hälfte des Big Blinds. Diese Regel unterscheidet sich im Turnierraum, wo der Small/Big Blind immer doppelt so hoch ist wie der Grundwert. Außerdem wächst im Turnierraum der Small/Big Blind im Verlauf des Turniers stetig an.',
	'JV_POKER_HELP_BLIND_QUESTION'			=> 'Small Blind/Big Blind-Starteinsätze sind unterschiedlich in den Räumen, warum?',
	'JV_POKER_HELP_BLOCK_GAME'				=> 'Poker Spielprobleme',
	'JV_POKER_HELP_BLOCK_GENERAL'			=> 'Allgemeine Fragen',
	'JV_POKER_HELP_BLOCK_POKER'				=> 'phpBB Holdem Póker-Fragen',
	'JV_POKER_HELP_BLOCK_ROOMS'				=> 'Fragen im Zusammenhang mit Pokerräumen (Lobby)',
	'JV_POKER_HELP_BLOCK_SHOUT'				=> 'Poker Shoutbox-Fragen',
	'JV_POKER_HELP_BLOCK_STATS'				=> 'Fragen zu Pokerstatistiken',
	'JV_POKER_HELP_CHIPS_C_ANSWER'			=> 'Die farbigen Chips haben folgende Werte:
	<ul>
		<li>Grau: 1</li>
		<li>Schwarz: 10</li>
		<li>Hellblau: 100</li>
		<li>Gelb: 1,000</li>
		<li>Pink: 10,000</li>
		<li>Rot: 100,000</li>
		<li>Dunkelblau: 1,000,000</li>
		<li>Lila: 10,000,000</li>
		<li>Grün: 100,000,000</li>
		<li>Braun: 1,000,000,000</li>
	</ul>',
	'JV_POKER_HELP_CHIPS_C_QUESTION'		=> 'Welchen Wert haben die verschiedenfarbigen Chips?',
	'JV_POKER_HELP_CHIPS_DC_ANSWER'			=> 'Ja, solange bis du die maximale Anzahl an Chips erreicht hast, die angezeigt werden können, welche 11,111,111,110 beträgt. Es sind bis zu 10 Einheiten in einem Chip.',
	'JV_POKER_HELP_CHIPS_DC_QUESTION'		=> 'Werden die Chips in der richtigen Menge angezeigt?',
	'JV_POKER_HELP_CHIPS_ZERO_ANSWER'		=> 'Wenn du alle deine Chips in einer Runde einsetzt und verlierst, der Nachkauf aber aktiv ist und du noch Chips draußen hast, dann werden deine Chips drinnen erst nachgekauft, wenn die neue Runde beginnt und du ein aktiver Spieler bist.',
	'JV_POKER_HELP_CHIPS_ZERO_QUESTION'		=> 'Ich besitze noch Chips, aber meine Chips drinnen zeigen Null an. Warum?',
	'JV_POKER_HELP_CM_ANSWER'				=> '„Sitze“ bedeutet, wieviel Plätze für Spieler in diesem Raum verfügbar sind. Wenn die Anzahl der Sitzplätze 8 beträgt, können 8 Benutzer gleichzeitig im Raum sitzen. „Mitspieler“ gibt an, wieviele Benutzer sich im Raum befinden. Wenn der Administrator den Raum schließt, bedeutet das, dass der Raum voll ist, und kein weiteres Mitglied den Raum betreten kann, ehe ein Sitzplatz frei geworden ist.',
	'JV_POKER_HELP_CM_QUESTION'				=> 'Was bedeutet Mitspieler/Sitze?',
	'JV_POKER_HELP_CREATE_ANSWER'			=> 'Dieses Add-On (in seiner ursprünglichen Form) wurde von der <a href="https://jv-arcade.com/">JV-Arcade Group</a> erstellt, veröffentlicht, und urheberrechtlich geschützt. Es ist verfügbar unter der <a href="https://jv-arcade.com/License.html">JVA Lizenz</a>, und darf nicht weitergegeben oder verteilt werden. Weitere Informationen unter dem Link.',
	'JV_POKER_HELP_CREATE_QUESTION'			=> 'Wer hat diese phpBB Holdem Póker Erweiterung erstellt?',
	'JV_POKER_HELP_CTOP_ANSWER'				=> 'Ja, hierfür nutze den Button „Chips einwechseln“ auf der Poker-Hauptseite neben der Chips-Anzeige im eigenen Profil.',
	'JV_POKER_HELP_CTOP_QUESTION'			=> 'Können Chips gegen „%s“ eingetauscht werden?',
	'JV_POKER_HELP_DROP_TOKEN_ANSWER'		=> 'In diesem Fall gibt es drei Möglichkeiten:
	<ul>
		<li>1. Du kannst keine Chips aus einem Übungsraum entnehmen, sodass deine noch eingelagerten Chips storniert werden.</li>
		<li>2. Wenn du aus einem normalen Raum geworfen wirst, werden deine restlichen Chips natürlich zurückgegeben.</li>
		<li>3. Wenn du vor Turnierbeginn aus dem Turnierraum geworfen wirst, bekommst du dein Buy-In zurück. Wenn das Turnier bereits begonnen hat, verlierst du das Buy-In.</li>
	</ul>',
	'JV_POKER_HELP_DROP_TOKEN_QUESTION'		=> 'Was passiert mit meinen Chips, wenn ich aus dem Spiel geworfen werde?',
	'JV_POKER_HELP_DROP_USER_ANSWER'		=> 'Für diesen Fall gibt es 3 Möglichkeiten:
	<ul>
		<li>1. Wenn du deine Internetverbindung verlierst.</li>
		<li>2. Wenn du untätig bist und auf nichts reagierst, was den Spielverlauf absichtlich verlangsamen kann.</li>
		<li>3. Wenn das Spielfenster in den Hintergrund verschoben wird. In diesem Fall können mehrere Browser die Aktualisierung der Hintergrunddaten verlangsamen oder ganz stoppen. Das Spiel betrachtet dich dann als Offline-Benutzer, und wirft dich deshalb raus.</li>
	</ul>',
	'JV_POKER_HELP_DROP_USER_QUESTION'		=> 'In welchen Fällen kann das Spiel dich rauswerfen?',
	'JV_POKER_HELP_E_SHOUT_ANSWER'			=> 'Wenn es vom Administrator aktiviert wurde, dann ja.',
	'JV_POKER_HELP_E_SHOUT_QUESTION'		=> 'Kann ich Smilies in meinen Nachrichten verwenden?',
	'JV_POKER_HELP_GAME_SOUND_ANSWER'		=> 'Ja. Der Ton kann jederzeit während des Spiels ein- und ausgeschaltet werden. Hiermit werden alle Töne einschließlich der Shoutbox ausgeschaltet. Die Einstellung wird immer gespeichert.',
	'JV_POKER_HELP_GAME_SOUND_QUESTION'		=> 'Kann ich im Spiel den Ton ausschalten?',
	'JV_POKER_HELP_INACTIVE_ANSWER'			=> 'In diesem Fall kann Folgendes passieren:
	<ul>
		<li>1. Wenn du dich in einem normalen Spiel befindest, stehst du am Ende der %s. Hand automatisch auf.</li>
		<li>2. Wenn du an einem Turnierspiel teilnimmst, stehst du am Ende der %s. Hand automatisch auf.</li>
	</ul>
	Das ist notwendig, denn niemand mag es, wenn jemand das Spiel absichtlich verlangsamt.',
	'JV_POKER_HELP_INACTIVE_QUESTION'		=> 'Was passiert, wenn ich während des Spiels auf nichts reagiere?',
	'JV_POKER_HELP_JACKPOT_ANSWER'			=> 'Es gibt drei Möglichkeiten, sich Gewinne aus einem JackPot auszuzahlen. Nur beim Präsentieren von Karten und wenn deine Hand die stärkste ist.<br>
	<strong>JackPot-Preise:</strong>
	<ul>
		<li>1. Bei einem Vierling 10 % des JackPots.</li>
		<li>2. Bei Straight Flush 30 % des JackPots.</li>
		<li>3. Bei Royal Flush 80 % des JackPots.</li>
	</ul>
	Wenn es mehr als einen Gewinner gibt, wird der Preis anteilig verteilt.<br><br>
	<strong>Du kannst den JackPot nicht gewinnen, wenn:</strong>
	<ul>
		<li>1. Du hast kein JackPot-Ticket gekauft.</li>
		<li>2. Du hast gepasst.</li>
		<li>3. Alle anderen passen.</li>
		<li>4. Deine Karten sind nicht die stärkste Hand.</li>
	</ul>',
	'JV_POKER_HELP_JACKPOT_QUESTION'		=> 'Wie kann ich den JackPot gewinnen?',
	'JV_POKER_HELP_LEADERS_ANSWER'			=> 'Die Rangliste der Champions richtet sich nach der Anzahl der gewonnenen Chips.',
	'JV_POKER_HELP_LEADERS_QUESTION'		=> 'Worauf basiert die Rangliste der Champions?',
	'JV_POKER_HELP_LEARNER_ANSWER'			=> 'Jeder kann in diesem Raum spielen, auch wenn er selbst keine eigenen Chips besitzt. Jeder Spieler erhält eine vorher festgelegte Anzahl an Chips, wenn er sich hinsetzt. In diesem Raum spielen alle Spieler mit offenen Karten, so dass sie die Chance haben, sich gegenseitig das Spiel zu lehren. In diesem Raum gewonnene Chips können nicht aus dem Raum mitgenommen und eingewechselt werden.',
	'JV_POKER_HELP_LEARNER_QUESTION'		=> 'Was bedeutet es, in einem Lernraum zu sein?',
	'JV_POKER_HELP_LIMIT_ANSWER'			=> 'Die Antwort auf diese Frage wurde bereits in „Wie spielt man Poker?/Limitregeln“ beschrieben.',
	'JV_POKER_HELP_LIMIT_QUESTION'			=> 'Was bedeutet Festes Limit/kein Limit?',
	'JV_POKER_HELP_LP_CHIPS_ANSWER'			=> '',
	'JV_POKER_HELP_LP_CHIPS_QUESTION'		=> '',
	'JV_POKER_HELP_LP_STATS_ANSWER'			=> 'In den Lern- und Übungsräumen werden keine statistischen Daten gespeichert.',
	'JV_POKER_HELP_LP_STATS_QUESTION'		=> 'Speichern Lern- und Übungsräume auch statistische Daten?',
	'JV_POKER_HELP_MOVE_TIME_ANSWER'		=> '„Sprungzeit“ ist der Zeitraum, während dessen ein Benutzer entscheiden kann, ob er schiebt, bietet oder passt. Wenn diese Zeit abgelaufen ist, stehen zwei automatische Optionen zur Verfügung:
	<ul>
		<li>1. War die Aktion des Vorgängers kein Call, schieben wir automatisch.</li>
		<li>2. War die Aktion des Vorgängers ein Call (mitgehen), geben wir automatisch auf.</li>
	</ul>',
	'JV_POKER_HELP_MOVE_TIME_QUESTION'		=> 'Was ist die Sprungzeit?',
	'JV_POKER_HELP_NORMAL_ANSWER'			=> 'In einem Normalraum können nur Benutzer spielen, welche ihre eigenen Chips besitzen, und welche genügend Chips für den geforderten Mindesteinstiegsbetrag mit hereinbringen. Jeder dieser Räume verfügt über einen festgelegten Mindest- und Höchstbetrag für den Einstieg. Benutzer können sich mit dem Mindestbetrag an den Tisch setzen. In diesem Raum gewonnene Chips können aus dem Raum mitgenommen, und wieder zurückgewechselt werden.',
	'JV_POKER_HELP_NORMAL_QUESTION'			=> 'Was bedeutet es, in einem Normalraum zu sein?',
	'JV_POKER_HELP_OFFLINE_BL_ANSWER'		=> 'Wenn der Avatar des Benutzers grau blinkt bedeutet das, dass der Benutzer offline ist.',
	'JV_POKER_HELP_OFFLINE_BL_QUESTION'		=> 'Der Avatar des Benutzers blinkt grau. Was bedeutet das?',
	'JV_POKER_HELP_OFFLINE_BP_ANSWER'		=> 'In diesem Fall kann Folgendes passieren:
	<ul>
		<li>1. Wenn du zurückkehrst, bevor du an der Reihe bist und solange deine Aktionszeit noch nicht abgelaufen ist, kannst du noch weitere Einsätze tätigen.</li>
		<li>2. Wenn du nicht rechtzeitig zurückkehren kannst, wird dein Einsatz in eine Schutzposition gebracht, du kannst jedoch keine weiteren Einsätze tätigen. Auf diese Weise hast du die Chance, mit deinem bereits getätigten Einsatz zu gewinnen, auch wenn du während des gesamten restlichen Spiels offline bleibst.</li>
	</ul>',
	'JV_POKER_HELP_OFFLINE_BP_QUESTION'		=> 'Was passiert mit meinem Einsatz, wenn meine Internetverbindung unterbrochen wird?',
	'JV_POKER_HELP_OFFLINE_S_ANSWER'		=> 'Wenn der Server nach weniger als 10 Minuten wieder verfügbar ist, können wiederkehrende Benutzer das Spiel dort fortsetzen, wo sie aufgehört haben. Für den Fall, dass der Server für mindestens 10 Minuten nicht verfügbar ist, wird das Turnier gelöscht und alle Benutzer, die noch im Turnier waren, erhalten ihr Buy-In zurück.',
	'JV_POKER_HELP_OFFLINE_S_QUESTION'		=> 'Was passiert, wenn der Server nicht erreichbar ist?',
	'JV_POKER_HELP_OFFLINE_U_ANSWER'		=> 'In diesem Fall kann Folgendes passieren:
	<ul>
		<li>1. Wenn du sitzt, aber noch nicht spielst stehst du nach 12 Sekunden automatisch auf.</li>
		<li>2. Wenn du an einem normalen Spiel teilnimmst, stehst du am Ende der %s. Hand automatisch auf.</li>
		<li>3. Wenn du an einem Turnierspiel teilnimmst, stehst du am Ende der %s. Hand automatisch auf.</li>
	</ul>',
	'JV_POKER_HELP_OFFLINE_U_QUESTION'		=> 'Was passiert, wenn ich meine Internetverbindung verliere?',
	'JV_POKER_HELP_PD_ANSWER'				=> '„phpBB Holdem Póker“ erhebt und speichert die IP-Adresse jedes aktuellen Spielers, bis der Benutzer den Tisch verlassen hat. Wenn ein Benutzer vom Tisch aufsteht, werden alle Daten gelöscht, und nur die statistischen Daten bleiben erhalten. Die IP-Adresse wird während des Spiels gespeichert, um zu verhindern, dass am selben Tisch mehrere Spieler mit der selben IP-Adresse sitzen. Selbstverständlich kannst du diese IP-Prüfung aktivieren und deaktivieren.',
	'JV_POKER_HELP_PD_QUESTION'				=> 'Speichert „phpBB Holdem Póker“ persönliche Daten?',
	'JV_POKER_HELP_PLAY_ANSWER'				=> 'Poker ist eines der beliebtesten Kartenspiele der Welt. Ziel des Spiels ist es, aus den selbst erhaltenen Karten, in Kombination mit den aufgedeckten Gemeinschaftskarten, das Beste herauszuholen, um schließlich den Einsatz in der Mitte des Tisches zu erlangen (im Englischen „Pot“ genannt). Je Pokerraum kann das Spiel von 2-8 Personen gespielt werden. Im Spiel wird ein französisches Blatt mit 52 Karten ohne Joker verwendet. Jeder Spieler erhält zwei private Karten, die von anderen Spielern nicht gesehen oder verwendet werden können. Während des Spiels werden nach und nach fünf Gemeinschaftskarten offen auf den Tisch gelegt, die alle Spieler sehen und verwenden können. Der Spieler versucht nun, aus seinen eigenen Karten und den Gemeinschaftskarten die bestmögliche „Fünf-Karten-Kombination“ herzustellen. Der Spieler mit den stärksten Karten gewinnt den Wert des Einsatzes. Ein Kartenspiel französischer Karten (ohne Joker) hat 4 verschiedene Farben, und jede Farbe besteht aus 13 Karten mit unterschiedlichen Werten, was das 52-Blatt-Deck ergibt. Die Reihenfolge der 4 Farben: <span class="poker_cs">♣</span> Kreuz (clubs) <span class="poker_dh">♦</span> Karo (diamonds) <span class="poker_dh">♥</span> Herz (hearts) <span class="poker_cs">♠</span> Pik (spades). Alle Farben sind gleich für die Bewertung von Pokerhänden. Die 13 Kartenwerte in der Reihenfolge: A (Ass), 2, 3, 4, 5, 6, 7, 8, 9, 10, J (Bube), Q (Dame), K (König). Ein Ass ist nicht nur als Zahlenwert 1 zu betrachten, es kann auch  nach dem König folgend die höchste Karte sein.
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
		Wenn mehr als ein Spieler nach dem Ende der letzten Setzrunde im Spiel bleibt, werden die Karten des Gewinners und der All-In-Spieler präsentiert. Der Pot wird an den Spieler mit der stärksten 5-Karten-Hand vergeben. Für den Fall, dass zwei oder mehr Spieler die gleiche stärkste Hand haben, wird der Pot proportional verteilt. Wenn der Pot-Wert nicht proportional teilbar ist, hat der erste gewinnende Spieler links vom Dealer-Button Anspruch auf den Überschuss. Vor der nächsten Runde wird der Dealer-Button immer eine Position nach links bewegt. Der Dealer ist also in jeder Runde ein anderer, und die Blinds werden ebenfalls anderen Spielern zugeteilt.

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
				<ul><li>Besteht aus zwei Karten mit gleicher Zahl oder Zeichen, und drei neutralen Karten. Wenn mehrere Paare vorkommen, entscheidet das höhere Paar, und dann die neutralen Karten.<br>Beispiel: 3<span class="poker_dh">♥</span>, 5<span class="poker_cs">♠</span>, 7<span class="poker_cs">♣</span>, 10<span class="poker_dh">♦</span>, 10<span class="poker_cs">♠</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Höchste Karte (high card)</strong>
				<ul><li>Eine beliebige Karte.
			</li>
		</ul>',
	'JV_POKER_HELP_PLAY_QUESTION'			=> 'Wie spielt man Poker?',
	'JV_POKER_HELP_POKER_ANSWER'			=> 'PhpBB Holdem Póker ist ein Kartenspiel, mit dem registrierte Benutzer gegeneinander spielen können. Nur ein Administrator kann die Nutzung von Poker authorisieren. Die folgende Anleitung wird jedoch wahrscheinlich hilfreich sein.',
	'JV_POKER_HELP_POKER_QUESTION'			=> 'Was ist phpBB Holdem Póker?',
	'JV_POKER_HELP_PRACTICE_ANSWER'			=> 'Jeder kann in diesem Raum spielen, auch wenn er selbst keine eigenen Chips besitzt. Jeder Spieler erhält eine vorher festgelegte Anzahl an Chips, wenn er sich hinsetzt. Die in diesem Raum gewonnenen Chips können nicht aus dem Raum mitgenommen oder eingewechselt werden.',
	'JV_POKER_HELP_PRACTICE_QUESTION'		=> 'Was bedeutet es, in einem Übungsraum zu sein?',
	'JV_POKER_HELP_PROFIT_ANSWER'			=> 'Der Administrator hat das Gewinnsystem aktiviert, was bedeutet, dass jedem Spieler für jede neue Hand 40 % des Small Blinds abgezogen werden.',
	'JV_POKER_HELP_PROFIT_JP_ANSWER'		=> '80 % dieses abgezogenen Betrags fließen in den Jackpot-Fonds.',
	'JV_POKER_HELP_PROFIT_QUESTION'			=> 'Meine Chips werden mit jeder neuen Hand weniger, warum?',
	'JV_POKER_HELP_PTOC_ANSWER'				=> 'Ja, hierfür nutze den Button „Chips einwechseln“ auf der Poker-Hauptseite neben der Chips-Anzeige im eigenen Profil.',
	'JV_POKER_HELP_PTOC_QUESTION'			=> 'Können „%s“ gegen Chips eingetauscht werden?',
	'JV_POKER_HELP_REG_ANSWER'				=> 'Nur registrierte Benutzer können phpBB Holdem Póker spielen. Daher ist es eine gute Idee, ein registriertes Mitglied zu sein.',
	'JV_POKER_HELP_REG_QUESTION'			=> 'Warum muss ich mich überhaupt registrieren?',
	'JV_POKER_HELP_SHOUT_ANSWER'			=> 'Wenn der Administrator dazu die Berechtigung erteilt hat, dann ja. Wenn nicht, kannst du nur die Nachrichten über den Spielfortschritt in der Nachrichtenbox lesen.',
	'JV_POKER_HELP_SHOUT_QUESTION'			=> 'Kann ich die Shoutbox während des Spiels benutzen?',
	'JV_POKER_HELP_SHOUT_SOUND_ANSWER'		=> 'Ja, du kannst die Shoutbox gesondert ausschalten. Ausschalten der Shoutbox deaktiviert nicht den Ton im Spiel.',
	'JV_POKER_HELP_SHOUT_SOUND_QUESTION'	=> 'Kann ich die Shoutbox ausschalten?',
	'JV_POKER_HELP_STATUS_ANSWER'			=> 'Das Feld unter „Status“ zeigt an, ob dieser Raum in einem Spiel ist, oder nicht.',
	'JV_POKER_HELP_STATUS_QUESTION'			=> 'Was bedeutet Status?',
	'JV_POKER_HELP_SU_SHOUT_ANSWER'			=> 'Nein, nur sitzende Benutzer können die Shoutbox benutzen.',
	'JV_POKER_HELP_SU_SHOUT_QUESTION'		=> 'Kann ich die Shoutbox benutzen, wenn ich aufgestanden bin?',
	'JV_POKER_HELP_S_SHOUT_ANSWER'			=> 'Die Shoutbox kann immer nur 8 Zeilen anzeigen, so dass ein Scrollen nicht möglich ist.',
	'JV_POKER_HELP_S_SHOUT_QUESTION'		=> 'Wie kann ich in den Nachrichten scrollen?',
	'JV_POKER_HELP_TOUR_ANSWER'				=> 'In einem Turnierraum können nur Benutzer spielen, welche ihre eigenen Chips besitzen, und welche genügend Chips für den geforderten Mindesteinstiegsbetrag mit hereinbringen. Jeder dieser Räume verfügt über einen festgelegten Mindestbetrag für den Einstieg. In diesem Raum gewonnene Chips können aus dem Raum mitgenommen, und wieder zurückgewechselt werden.',
	'JV_POKER_HELP_TOUR_QUESTION'			=> 'Was bedeutet es, in einem Turnierraum zu sein?',
	'JV_POKER_HELP_USER_STATS_ANSWER'		=> 'Ja, wenn der Administrator das Anzeigen von Statistiken zulässt.',
	'JV_POKER_HELP_USER_STATS_QUESTION'		=> 'Kann ich die Benutzerstatistiken sehen?'
]);
