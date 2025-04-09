<?php
/**
*
* @package phpBB Arcade
* @version $Id: activation.php 2450 2021-12-13 20:24:43Z KillBill $
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
	'ACP_PHPBB_ARCADE_SYSTEM_EXPLAIN'				=> '<legend>Detaillierte Beschreibung der Aktivierung</legend>
Daten, die während der Aktivierung gesendet werden, können verwendet werden, um den Status der betreffenden Website bei „%2$s“ zu ermitteln.<br>
Zusätzlich wird der angegebene Aktivierungsschlüssel übermitteln, ob dies eine aktive Seite oder eine Testseite ist.<br><br>
<div>Gespeicherte Daten nach der Aktivierung:</div>
<ul>
	<li>Eigene phpBB Arcade Kennung</li>
	<li>Webseitenadresse des Aktivierenden</li>
	<li>Verwendete phpBB-Versionsnummer</li>
	<li>Verwendete phpBB Arcade-Versionsnummer</li>
	<li>Aktivierungsdatum</li>
	<li>Aktivierungsschlüssel</li>
	<li>Aktivierungsabhängige Wartezeit zum überspringen von Werbeeinblendungen</li>
	<li>Aktivierungsabhängige tägliche Spielstartlimitierung</li>
</ul>

<div>Gespeicherte persönliche Daten nach der Aktivierung:</div>
<ul>
	<li>Benutzername des Aktivierenden</li>
	<li>IP-Adresse des Aktivierenden</li>
	<li>E-mail-Adresse des Aktivierenden</li>
</ul>

<div>Registrierte Webseiten ermöglichen dir, zusätzliche persönliche Daten von der Webseite „%2$s“ abzurufen:</div>
<ul>
	<li>Benutzername der aktivierenden Person auf „%2$s“</li>
	<li>Benutzergruppe der aktivierenden Person auf „%2$s“</li>
	<li>E-mail-Adresse der aktivierenden Person auf „%2$s“</li>
</ul>

<div>Verwendung Daten:</div>
<ul>
	<li>Die phpBB Arcade Kennung hilft uns, deine Seite auf sichere Weise zu identifizieren.</li>
	<li>Die Webseitenadresse gibt uns die Möglichkeit zu prüfen, ob die Webseite auf „%2$s“ registriert ist.</li>
	<li>Anhand der verwendeten phpBB- und phpBB Arcade-Version können wir feststellen, ob die betreffende Website konform ist oder nicht.</li>
	<li>Der Aktivierungsschlüssel bestimmt, wozu die betreffende Webseite berechtigt ist.</li>
	<li>Die Wartezeit für Werbeeinblendungen ist die Zeit, nach der ein Benutzer berechtigt ist, die Werbung zu überspringen.</li>
	<li>Die Limitierung der täglichen Spielstarts begrenzt die Anzahl an Spielen, welche boardweit je Tag gespielt werden können. Wenn diese Grenze erreicht ist, können an diesem Tag keine weiteren Spiele gestartet werden.</li>
</ul>

<div>Verwendung persönlicher Daten:</div>
<ul>
	<li>Der Benutzername bietet die Möglichkeit festzustellen, ob der betreffende Benutzer auf der Website „%2$s“ bekannt ist.</li>
	<li>Die IP-Adresse wird verwendet, wenn der Nutzer ein Gesetz gebrochen oder eine Straftat begangen hat.</li>
	<li>Die E-mail-Adresse wird benutzt, wenn wir Kontakt zu dem betroffenen Benutzer herstellen müssen.</li>
</ul>

<br>

<h2>Detaillierte Beschreibung des JVA Game Intro</h2>
<hr>
<div>Administratorfunktionen:</div>
<ul>
	<li>Das „JVA Game Intro“ bietet eine Reihe von Einstellungen. Erstens kannst du auswählen, ob es angezeigt werden soll oder nicht. Wenn die Anzeige nicht gewünscht wird, wird das Spiel sofort geladen.</li>
	<li>Du kannst auch dein eigenes Logo bestimmen, dafür gibt es drei Möglichkeiten:
		<ol>
			<li>Das Basis-Logo erscheint.</li>
			<li>Du kannst ein Text-Logo erstellen, welches die Basis überschreibt.</li>
			<li>Du kannst ein eigenes Bild-Logo mit dem Namen „logo.png“ erstellen und nach „[root]/arcade/assets/images/“ hochladen, das wird alles andere überschreiben.</li>
		</ol>
	</li>
	<li>Viele Spiele sind sehr groß. Es können bis zu 100 MB sein, so dass der Benutzer beim Laden des Spiels für längere Zeit nur eine weiße Seite sieht, und glaubt, das Spiel sei defekt. Um das zu vermeiden, kannst du die Ladeanzeige für die Spiele einschalten, damit man sieht, dass das Spiel lädt.<br>
		<strong>Kommentar:</strong> Das Spiel wird lediglich in den Browsercache geladen. Wenn du das für deinen Browsercache nicht aktiviert hast, wird das Spiel zweimal geladen, und diese Methode wird lediglich den Spielstart verlangsamen.<br>
		<em>Diese Funktion ist unwirksam, wenn der Browsercache deaktiviert ist.</em>
	</li>
	<li>Es kann eingestellt werden, wieviele Benutzer in der Rekordliste angezeigt werden sollen. Dieser Wert kann zwischen 0 und 10 betragen.<br><br>
		<em class="arcade_attent">Beachte, dass diese Einstellungen nur mit einem System benutzt werden können, welches durch einen privaten Schlüssel aktiviert wurde. Diese Einstellungen sind nicht verfügbar bei einem kostenlos aktivierten System.</em>
	</li>
</ul>

<div>Benutzerfunktionen:</div>
<ul>
	<li>Das „JVA Game Intro“ ermöglicht es Benutzern, die Beschreibung des Spiels, der Steuerung und die Rekordliste anzusehen, bevor das Spiel startet.</li>
	<li>Es können bis zu 10 Rekordhalter und der aktuelle Superchampion in der Liste angezeigt werden.</li>
</ul>

<br>

<h2>„%1$s” Kommunikationsfunktionen</h2>
<hr>
<ul>
	<li><span>Bei jedem Spielstart wird eine Verbindung zur Webseite „%1$s“ aufgebaut.</span>
		<div><span>Diese Verbindung überträgt folgende Daten:</span></div>
		<ol>
			<li>Die verschlüsselte eigene phpBB Arcade Kennung (Einweg-Hash-Format).</li>
			<li>Derzeitige Version von „JVA Game Intro“.</li>
			<li>Verschlüsselte Adresse (PHP Base64) der Webseite, welche die Software benutzt.</li>
			<li>Den „phpBB Arcade“ Aktivierungsschlüssel in kodierter Form (Einweg-Hash).</li>
			<li>Die derzeitige Version der phpBB Arcade.</li>
			<li>Die derzeitige Version von phpBB.

				<br><br>

				<div><span>Die Aufgabe der gesendeten Daten:</span></div>
				<ol>
					<li>Die phpBB Arcade Kennung hilft dir, deine Seite auf sichere Weise identifizieren zu lassen.</li>
					<li>Die „JVA Game Intro“ Versionsprüfung hilft, eine Warnung zu senden, wenn du keine kompatible Version benutzt, oder wenn eine neuere Version veröffentlicht wurde.</li>
					<li>Die Webseitenadresse ist sehr wichtig, denn auf dieser Basis senden wir die Informationen zurück.</li>
					<li>Der Aktivierungsschlüssel hat mehrere Aufgaben:
						<ol>
							<li>Bei der als „Kostenlos“ aktivierten Software kann es zu Wartezeiten und Werbeeinblendungen kommen, außerdem kann die Anzahl der pro Tag spielbaren Spiele begrenzt sein.<br>
								Die Wartezeit wird eingeschaltet und bestimmt durch „%2$s“.<br>
								Die maximale Anzahl der spielbaren Spiele wird eingeschaltet und bestimmt durch „%2$s“.<br>
								Der „Kostenlos“-Schlüssel hat kein Ablaufdatum.
							</li>
							<li>Der private Schlüssel kann von einem Ablaufdatum abhängig sein, oder nur mit einer bestimmten phpBB Arcade-Version funktionieren. Mit privatem Schlüssel aktivierte Software ist vollständig von Werbeeinblendungen ausgenommen. <em>Dies gilt nur für das „JVA Game Intro“</em>.<br>Außerdem sind Webseiten, welche einen privaten Schlüssel verwenden, nicht von einer Begrenzung der täglichen Spielstarts betroffen.</li>
						</ol>
					</li>
					<li>Die Überprüfung der phpBB Arcade-Version ist auch sehr wichtig, damit die Version des „JVA Game Intro“ mit der vorhandenen Version kompatibel ist.</li>
				</ol>
			</li>
		</ol>
	</li>
	<li>Mit diesen Kommunikationsmöglichkeiten wird die Anzahl der Spielstarts gespeichert und in einer Statistik geführt. Auf der Grundlage dieser Statistiken kann die aktuelle Rangposition dieser Webseite bestimmt werden. Weitere Informationen <a onclick="window.open(this.href); return false;" href="%5$s"><strong>» HIER «</strong></a>.</li>
	<li>Wenn von unserer Webseite Werbung gesendet oder eine Wartezeit gesetzt ist, ist das so eingestellt, dass es vor dem Spielstart erscheint. Wenn das „JVA Game Intro“ nicht eingeschaltet ist, wird es automatisch aktiviert.</li>
	<li>Wenn die Anzahl der Spielstarts je Tag limitiert ist, können an diesem Tag keine weiteren Spiele gespielt werden, sobald auf der Webseite die entsprechende maximale Anzahl erreicht wurde.</li>
	<li>Es gibt zwei Möglichkeiten der Rücksendung von Informationen:
		<ol>
			<li>Eine Update-Information sendet dir „%1$s“ auf einfache Weise zurück. Sie erscheint in „JVA Game Intro“. Diese Information ist nur für die Gründer sichtbar und wird das Spiel nicht blockieren.</li>
			<li>Globale Informationen, die die vollständige „JVA Game Intro“ -Schnittstelle verwenden, um weitere Informationen zu ermöglichen. In diesem Fall wird das Spiel nicht funktionieren.
				<div><span>Gründe für Globale Informationen können sein:</span></div>
				<ol>
					<li>Sofortige Aktualisierung ist erforderlich.</li>
					<li>Wenn ein Spieletyp nicht unterstützt wird.</li>
					<li>Wenn eine Webseite das tägliche Spielstart-Limit erreicht hat.</li>
					<li>Wenn der Aktivierungsschlüssel abgelaufen ist. In diesem Fall musst du die Software erneut aktivieren, indem im ACP „Test“ oder „Kostenlos“ gewählt wird. Verfügst du über einen neuen privaten Schlüssel, wird dieser verwendet.</li>
					<li>Der Benutzer der Software verletzt die vertraglichen Bedingungen der <strong>„<a onclick="window.open(this.href); return false;" href="%4$s" title="JVA Lizenz">Lizenz</a>“</strong>, oder es liegt eine <strong>nicht registrierte</strong> Nutzung durch diese Webseite vor. In beiden Fällen kann die Funktion der Software deaktiviert werden.</li>
				</ol>
			</li>
		</ol>
	</li>
	<li>Die „%1$s“ kann folgende Daten zurücksenden:
		<ol>
			<li>Überprüfung der Webseiten.</li>
			<li>Wartezeit.</li>
			<li>Werbung.</li>
			<li>Rücksendung von Aktualisierungsinformationen.</li>
			<li>Rücksendung globaler Informationen.</li>
			<li>Die “%2$s” erklärt ausdrücklich, dass sie während der Verbindung keine Datenbankänderungen in anderen Webseiten durchführen kann und will! Das ist sehr wichtig, um während der Verbindung eine 100%%-ige Sicherheit zwischen den beiden Servern zu gewährleisten.<br>Aus diesem Grund kann die Software ausschließlich durch den Gründer der Webseite aktiviert werden.</li>
		</ol>
	</li>
	<li>Das „JVA Game Intro“ wird auf dem lokalen Host nicht unterstützt, die Software kann jedoch ausgeführt werden. Auf dem lokalen Host ist die Wartezeit standardmäßig auf 5 Sekunden eingestellt.</li>
</ul>',
	'ACP_PHPBB_ARCADE_SYSTEM_INSTRUCTION'			=> 'phpBB Arcade Anleitung',
	'ACP_PHPBB_ARCADE_SYSTEM_INSTRUCTION_EXPLAIN'	=> 'Die Software „phpBB Arcade“ wird <a onclick="window.open(this.href); return false;" href="%3$s" title="JVA Lizenz">lizenziert</a> und gewartet durch die Webseite „%1$s“.'
]);
