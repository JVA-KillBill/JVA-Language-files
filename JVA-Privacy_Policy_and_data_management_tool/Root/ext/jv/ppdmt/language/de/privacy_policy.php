<?php
/**
*
* @package JVA - Privacy Policy and data management tool
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
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page „%1$s“ of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// Some characters you may want to copy&paste: ‚ ‘ ’ « » „ “ ” …

/*
%1$s :: Name der Webseite
%2$s :: Name des Verantwortlichen
%3$s :: E-Mail-Adresse für Kontakt
%4$s :: Telefonnummer des Verantwortlichen
%5$s :: Beschreibung der verwendeten Cookies
%6$s :: Eine weitere Zeile wird hinzugefügt, wenn wir Cookies für Gäste deaktivieren
*/

$lang = array_merge($lang, [
	'JVPPDMT_APPROVAL'						=> 'Zustimmung',
	'JVPPDMT_CONFIRM'						=> 'Ich habe die Datenschutzerklärung gelesen und verstanden.',
	'JVPPDMT_COOKIE_CONFIRM'				=> 'Bitte wähle, ob die Webseite %s Cookies auf deinem Gerät speichern darf:',
	'JVPPDMT_COOKIE_DESC'					=> 'Achtung! Diese Webseite benutzt Cookies,um für dich die bestmögliche Nutzererfahrung sicherzustellen. <a onclick="window.open(this.href); return false;" href="https://de.wikipedia.org/wiki/HTTP-Cookie">Mehr erfahren</a>.<br>Hier hast du die Wahl, Cookies zu akzeptieren oder abzulehnen, und außerdem kannst du auch jederzeit das Setzen von Cookies für unsere Webseite in deinen Browsereinstellungen deaktivieren.',
	'JVPPDMT_DISABLED_COOKIE_GUEST_USER'	=> 'Wir speichern keine Cookies auf Geräten von Gast-Benutzern!',
	'JVPPDMT_NOT_CONFIRM'					=> 'Achtung! Du hast keine Auswahl zur Bestätigung getroffen!',
	'JVPPDMT_ONLY_ALREADY_EXISTING_DATA'	=> 'Nur für bereits gespeicherte Daten stimme ich zu.<br><em>Beachte bitte, dass du, wenn du diese Option wählst, einer Benutzergruppe zugeordnet wirst, deren Berechtigung nur Leserechte abdeckt. Natürlich kannst du diese Entscheidung jederzeit später ändern. Natürlich kannst du diese Entscheidung jederzeit später ändern in deinem Persönlichen Bereich - Private Daten - Einstellungen.</em>',
	'JVPPDMT_ONLY_REGISTER_DATA'			=> 'Nur für die zur Registrierung erforderlichen persönlichen Daten stimme ich zu.<br><em>Beachte bitte, dass du, wenn du diese Option wählst, einer Benutzergruppe zugeordnet wirst, deren Berechtigung nur Leserechte abdeckt. Natürlich kannst du diese Entscheidung jederzeit später ändern in deinem Persönlichen Bereich - Private Daten - Einstellungen.</em>',
	'JVPPDMT_PERSONAL_DATA_CONFIRM'			=> 'Bitte wähle, ob die Webseite %s deine persönlichen Daten speichern und verwenden darf. Die persönlichen Daten werden nicht an Dritte weitergegeben.',
	'JVPPDMT_PERSONAL_DATA_REG'				=> 'Achtung! Während der Registrierung ist die Angabe persönlicher Daten erforderlich!.',
	'JVPPDMT_PRIVACY_POLICY'				=> 'Datenschutzerklärung',
	'JVPPDMT_PRIVACY_POLICY_DESC'			=> 'Datenschutz hat einen besonders hohen Stellenwert für die Betreiber von „%1$s“. Eine Nutzung der Internetseiten von „%1$s“ ist grundsätzlich ohne jede Angabe personenbezogener Daten möglich. Sofern eine betroffene Person besondere Dienste über unsere Internetseite in Anspruch nehmen möchte, könnte jedoch eine Verarbeitung personenbezogener Daten erforderlich werden. Ist die Verarbeitung personenbezogener Daten erforderlich und besteht für eine solche Verarbeitung keine gesetzliche Grundlage, holen wir generell eine Einwilligung der betroffenen Person ein.

Die Verarbeitung personenbezogener Daten, beispielsweise des Namens, der Anschrift, E-Mail-Adresse oder Telefonnummer einer betroffenen Person, erfolgt stets im Einklang mit der Datenschutz-Grundverordnung und in Übereinstimmung mit den für die Webseite „%1$s“ geltenden landesspezifischen Datenschutzbestimmungen. Mittels dieser Datenschutzerklärung möchten wir die Öffentlichkeit über Art, Umfang und Zweck der von uns erhobenen, genutzten und verarbeiteten personenbezogenen Daten informieren. Ferner werden betroffene Personen mittels dieser Datenschutzerklärung über die ihnen zustehenden Rechte aufgeklärt.

Der für die Verarbeitung Verantwortliche der Webseite „%1$s“ hat zahlreiche technische und organisatorische Maßnahmen umgesetzt, um einen möglichst lückenlosen Schutz der über diese Internetseite verarbeiteten personenbezogenen Daten sicherzustellen. Dennoch können internetbasierte Datenübertragungen grundsätzlich Sicherheitslücken aufweisen, sodass ein absoluter Schutz nicht gewährleistet werden kann. Aus diesem Grund steht es jeder betroffenen Person frei, personenbezogene Daten auch auf alternativen Wegen, beispielsweise telefonisch, an uns zu übermitteln.

<h3>Begriffsbestimmungen</h3>
Die Datenschutzerklärung der Webseite „%1$s“ beruht auf den Begrifflichkeiten, die durch den Europäischen Richtlinien- und Verordnungsgeber beim Erlass der Datenschutz-Grundverordnung (DS-GVO) verwendet wurden. Unsere Datenschutzerklärung soll sowohl für die Öffentlichkeit als auch für unsere Kunden und Partner einfach lesbar und verständlich sein. Um dies zu gewährleisten, möchten wir vorab die verwendeten Begrifflichkeiten erläutern.

Wir verwenden in dieser Datenschutzerklärung unter anderem die folgenden Begriffe:

<strong>a) Personenbezogene Daten</strong>
Personenbezogene Daten sind alle Informationen, die sich auf eine identifizierte oder identifizierbare natürliche Person (im Folgenden „betroffene Person“) beziehen. Als identifizierbar wird eine natürliche Person angesehen, die direkt oder indirekt, insbesondere mittels Zuordnung zu einer Kennung wie einem Namen, zu einer Kennnummer, zu Standortdaten, zu einer Online-Kennung oder zu einem oder mehreren besonderen Merkmalen, die Ausdruck der physischen, physiologischen, genetischen, psychischen, wirtschaftlichen, kulturellen oder sozialen Identität dieser natürlichen Person sind, identifiziert werden kann.

<strong>b) betroffene Person</strong>
Betroffene Person ist jede identifizierte oder identifizierbare natürliche Person, deren personenbezogene Daten von dem für die Verarbeitung Verantwortlichen verarbeitet werden.

<strong>c) Verarbeitung</strong>
Verarbeitung ist jeder mit oder ohne Hilfe automatisierter Verfahren ausgeführte Vorgang oder jede solche Vorgangsreihe im Zusammenhang mit personenbezogenen Daten, wie das Erheben, das Erfassen, die Organisation, das Ordnen, die Speicherung, die Anpassung oder Veränderung, das Auslesen, das Abfragen, die Verwendung, die Offenlegung durch Übermittlung, Verbreitung oder eine andere Form der Bereitstellung, den Abgleich oder die Verknüpfung, die Einschränkung, das Löschen oder die Vernichtung.

<strong>d) Einschränkung der Verarbeitung</strong>
Einschränkung der Verarbeitung ist die Markierung gespeicherter personenbezogener Daten mit dem Ziel, ihre künftige Verarbeitung einzuschränken.

<strong>e) Verantwortlicher oder für die Verarbeitung verantwortlicher</strong>
Verantwortlicher für die Verarbeitung ist die natürliche oder juristische Person, Behörde, Behörde oder sonstige Stelle, die allein oder gemeinsam mit anderen die Zwecke und Mittel der Verarbeitung personenbezogener Daten bestimmt; Wenn der Zweck und die Mittel für die Verarbeitung nach dem Recht der Union oder der Mitgliedstaaten bestimmt sind, können der für die Verarbeitung Verantwortliche oder die spezifischen Kriterien für seine Ernennung nach dem Recht der Union oder der Mitgliedstaaten festgelegt werden.

<strong>f) Auftragsverarbeiter</strong>
Auftragsverarbeiter ist eine natürliche oder juristische Person, Behörde, Einrichtung oder andere Stelle, die personenbezogene Daten im Auftrag des Verantwortlichen verarbeitet.

<strong>g) Empfänger</strong>
Empfänger ist eine natürliche oder juristische Person, Behörde, Einrichtung oder andere Stelle, der personenbezogene Daten offengelegt werden, unabhängig davon, ob es sich bei ihr um einen Dritten handelt oder nicht. Behörden, die im Rahmen eines bestimmten Untersuchungsauftrags nach dem Unionsrecht oder dem Recht der Mitgliedstaaten möglicherweise personenbezogene Daten erhalten, gelten jedoch nicht als Empfänger.

<strong>h) Dritter</strong>
Dritter ist eine natürliche oder juristische Person, Behörde, Einrichtung oder andere Stelle außer der betroffenen Person, dem Verantwortlichen, dem Auftragsverarbeiter und den Personen, die unter der unmittelbaren Verantwortung des Verantwortlichen oder des Auftragsverarbeiters befugt sind, die personenbezogenen Daten zu verarbeiten.

<strong>i) Einwilligung</strong>
Einwilligung ist jede von der betroffenen Person freiwillig für den bestimmten Fall in informierter Weise und unmissverständlich abgegebene Willensbekundung in Form einer Erklärung oder einer sonstigen eindeutigen bestätigenden Handlung, mit der die betroffene Person zu verstehen gibt, dass sie mit der Verarbeitung der sie betreffenden personenbezogenen Daten einverstanden ist.

<h3>Daten des Verantwortlichen</h3>
Verantwortlicher im Sinne der Datenschutz-Grundverordnung, sonstiger in den Mitgliedstaaten der Europäischen Union geltenden Datenschutzgesetze und anderer Bestimmungen mit datenschutzrechtlichem Charakter ist:

<strong>Verantwortlicher:</strong> %2$s

<strong>Kontakt E-Mail-Adresse:</strong> %3$s
<strong>Telefonnummer:</strong> %4$s

<h3>Cookies</h3>
Die Webseite „%1$s“ verwendet Cookies. Cookies sind Textdateien, welche über einen Internetbrowser auf einem Computersystem abgelegt und gespeichert werden.

Zahlreiche Internetseiten und Server verwenden Cookies. Viele Cookies enthalten eine sogenannte Cookie-ID. Eine Cookie-ID ist eine eindeutige Kennung des Cookies. Sie besteht aus einer Zeichenfolge, durch welche Internetseiten und Server dem konkreten Internetbrowser zugeordnet werden können, in dem das Cookie gespeichert wurde. Dies ermöglicht es den besuchten Internetseiten und Servern, den individuellen Browser der betroffenen Person von anderen Internetbrowsern, die andere Cookies enthalten, zu unterscheiden. Ein bestimmter Internetbrowser kann über die eindeutige Cookie-ID wiedererkannt und identifiziert werden.

Durch den Einsatz von Cookies kann die Webseite „%1$s“ den Nutzern dieser Internetseite nutzerfreundlichere Dienste bereitstellen, die ohne die Cookie-Setzung nicht möglich wären.

Mittels eines Cookies können die Informationen und Angebote auf unserer Internetseite im Sinne des Benutzers optimiert werden. Cookies ermöglichen uns, wie bereits erwähnt, die Benutzer unserer Internetseite wiederzuerkennen. Zweck dieser Wiedererkennung ist es, den Nutzern die Verwendung unserer Internetseite zu erleichtern. Der Benutzer einer Internetseite, die Cookies verwendet, muss beispielsweise nicht bei jedem Besuch der Internetseite erneut seine Zugangsdaten eingeben, weil dies von der Internetseite und dem auf dem Computersystem des Benutzers abgelegten Cookie übernommen wird. Ein weiteres Beispiel ist das Cookie eines Warenkorbes im Online-Shop. Der Online-Shop merkt sich die Artikel, die ein Kunde in den virtuellen Warenkorb gelegt hat, über ein Cookie. Ein Browserspiel kann den augenblicklich erreichten Spielstand oder Levelstatus in einem Cookie ablegen, und bei Spielende an die Rangliste zur Speicherung zurückgeben.

Konkrete Beispiele für die Verwendung von Cookies in unserer Website:

%5$s

Die betroffene Person kann die Setzung von Cookies durch unsere Internetseite jederzeit mittels einer entsprechenden Einstellung des genutzten Internetbrowsers verhindern und damit der Setzung von Cookies dauerhaft widersprechen. Ferner können bereits gesetzte Cookies jederzeit über einen Internetbrowser oder andere Softwareprogramme gelöscht werden. Dies ist in allen gängigen Internetbrowsern möglich. Deaktiviert die betroffene Person die Setzung von Cookies in dem genutzten Internetbrowser, sind unter Umständen nicht alle Funktionen unserer Internetseite vollumfänglich nutzbar.
%6$s
<h3>Erfassung von allgemeinen Daten und Informationen</h3>
Die Webseite „%1$s“ erfasst mit jedem Aufruf der Internetseite durch eine betroffene Person oder ein automatisiertes System eine Reihe von allgemeinen Daten und Informationen. Diese allgemeinen Daten und Informationen werden in den Logfiles des Servers gespeichert. Erfasst werden können die (1) verwendeten Browsertypen und Versionen, (2) das vom zugreifenden System verwendete Betriebssystem, (3) die Internetseite, von welcher ein zugreifendes System auf unsere Internetseite gelangt (sogenannte Referrer), (4) die Unterwebseiten, welche über ein zugreifendes System auf unserer Internetseite angesteuert werden, (5) das Datum und die Uhrzeit eines Zugriffs auf die Internetseite, (6) eine Internet-Protokoll-Adresse (IP-Adresse), (7) der Internet-Service-Provider des zugreifenden Systems und (8) sonstige ähnliche Daten und Informationen, die der Gefahrenabwehr im Falle von Angriffen auf unsere informationstechnologischen Systeme dienen.

Bei der Nutzung dieser allgemeinen Daten und Informationen zieht die Webseite „%1$s“ keine Rückschlüsse auf die betroffene Person. Diese Informationen werden vielmehr benötigt, um (1) die Inhalte unserer Internetseite korrekt auszuliefern, (2) die Inhalte unserer Internetseite sowie die Werbung für diese zu optimieren, (3) die dauerhafte Funktionsfähigkeit unserer informationstechnologischen Systeme und der Technik unserer Internetseite zu gewährleisten sowie (4) um Strafverfolgungsbehörden im Falle eines Cyberangriffes die zur Strafverfolgung notwendigen Informationen bereitzustellen. Diese anonym erhobenen Daten und Informationen werden durch die Webseite „%1$s“ daher einerseits statistisch und ferner mit dem Ziel ausgewertet, den Datenschutz und die Datensicherheit für unsere Webseite zu erhöhen, um letztlich ein optimales Schutzniveau für die von uns verarbeiteten personenbezogenen Daten sicherzustellen. Die anonymen Daten der Server-Logfiles werden getrennt von allen durch eine betroffene Person angegebenen personenbezogenen Daten gespeichert.

<h3>Registrierung auf unserer Internetseite</h3>
Die betroffene Person hat die Möglichkeit, sich auf der Internetseite des für die Verarbeitung Verantwortlichen unter Angabe von personenbezogenen Daten zu registrieren. Die Registrierung der betroffenen Person unter freiwilliger Angabe personenbezogener Daten dient dem für die Verarbeitung Verantwortlichen dazu, der betroffenen Person Inhalte oder Leistungen anzubieten, die aufgrund der Natur der Sache nur registrierten Benutzern angeboten werden können. Welche personenbezogenen Daten dabei an den für die Verarbeitung Verantwortlichen übermittelt werden, ergibt sich aus der jeweiligen Eingabemaske, die für die Registrierung verwendet wird. Die von der betroffenen Person eingegebenen personenbezogenen Daten werden ausschließlich für die interne Verwendung bei dem für die Verarbeitung Verantwortlichen und für eigene Zwecke erhoben und gespeichert.

Zur Registrierung eines Benutzerkontos auf der Internetseite des für die Verarbeitung Verantwortlichen sind mindestens folgende persönliche Angaben erforderlich: ein eindeutiger Benutzername, ein Passwort zur Anmeldung bei diesem Benutzerkonto, und eine gültige E-Mail-Adresse. Diese E-Mail-Adresse ist erforderlich zum Erhalt des Bestätigungslinks, der der Authentifizierung der Anmeldung dient, und zum Erhalt weiterer Nachrichten der Webseite. Die weiteren Nachrichten sind nach erfolgreicher Anmeldung optional auswählbar und abwählbar im Benutzerkontrollzentrum des Benutzers. Das Passwort wird mit einer Einwege-Verschlüsselung (Hash) gespeichert, so dass es sicher ist. Jedoch wird empfohlen, dieses Passwort nicht auf einer Vielzahl von Webseiten zu verwenden. Das Passwort ist der Schlüssel zum Benutzerkonto auf dieser Webseite, es sollte also sorgsam damit umgegangen werden. Insbesondere wird kein Vertreter des Betreibers oder ein Dritter berechtigterweise nach diesem Passwort fragen. Sollte das Passwort vergessen worden sein, so kann die Funktion „Ich habe mein Passwort vergessen“ benutzt werden. Die Software fragt dann nach dem verwendeten Benutzernamen und der im Profil eingetragenen E-Mail-Adresse, und sendet anschließend ein neu generiertes Passwort an diese Adresse, mit dem wieder auf die Webseite zugegriffen werden kann. Aus diesem Grund wird empfohlen, die E-Mail-Adresse stets aktuell zu halten.

Durch eine Registrierung auf der Internetseite des für die Verarbeitung Verantwortlichen wird ferner die vom Internet-Service-Provider (ISP) der betroffenen Person vergebene IP-Adresse, das Datum sowie die Uhrzeit der Registrierung gespeichert. Die Speicherung dieser Daten erfolgt vor dem Hintergrund, dass nur so der Missbrauch unserer Dienste verhindert werden kann, und diese Daten im Bedarfsfall ermöglichen, begangene Straftaten aufzuklären. Insofern ist die Speicherung dieser Daten zur Absicherung des für die Verarbeitung Verantwortlichen erforderlich. Eine Weitergabe dieser Daten an Dritte erfolgt grundsätzlich nicht, sofern keine gesetzliche Pflicht zur Weitergabe besteht oder die Weitergabe der Strafverfolgung dient.

Mit der Registrierung auf dieser Internetseite gestattet die betroffene Person dem Betreiber, die von der betroffenen Person im Rahmen der Registrierung und im Profil eingegebenen Daten, sowie laufende Zugriffsdaten (Datum und Uhrzeit der Nutzung, IP-Adresse, Standortdaten, Spielstände, und sonstige vom Browser der betroffenen Person übermittelte Daten) zu speichern, und für den Betrieb der Internetseite zu verwenden. Dabei ist zu beachten, dass alle im Profil eingegebenen Daten und von der betroffenen Person verfassten Beiträge konfigurationsabhängig im Internet verfügbar und für jedermann abrufbar sein können. Außerdem gestattet die betroffene Person die Kontaktaufnahme zur Übermittlung der administrativen Nachrichten, welche für die Eröffnung und Verwaltung des Benutzerkontos erforderlich sind.

Registrierten Personen steht die Möglichkeit frei, die bei der Registrierung angegebenen personenbezogenen Daten jederzeit abzuändern oder vollständig aus dem Datenbestand des für die Verarbeitung Verantwortlichen löschen zu lassen.

Der für die Verarbeitung Verantwortliche erteilt jeder betroffenen Person jederzeit auf Anfrage Auskunft darüber, welche personenbezogenen Daten über die betroffene Person gespeichert sind. Ferner berichtigt oder löscht der für die Verarbeitung Verantwortliche personenbezogene Daten auf Wunsch oder Hinweis der betroffenen Person, soweit dem keine gesetzlichen Aufbewahrungspflichten entgegenstehen. Die Gesamtheit der Mitarbeiter des für die Verarbeitung Verantwortlichen stehen der betroffenen Person in diesem Zusammenhang als Ansprechpartner zur Verfügung.

<h3>Kontaktmöglichkeit über die Internetseite</h3>
Die Webseite „%1$s“ enthält aufgrund von gesetzlichen Vorschriften Angaben, die eine schnelle elektronische Kontaktaufnahme zum Verantwortlichen sowie eine unmittelbare Kommunikation mit uns ermöglichen, was ebenfalls eine allgemeine Adresse der sogenannten elektronischen Post (E-Mail-Adresse) umfasst. Sofern eine betroffene Person per E-Mail oder über ein Kontaktformular den Kontakt mit dem für die Verarbeitung Verantwortlichen aufnimmt, werden die von der betroffenen Person übermittelten personenbezogenen Daten automatisch gespeichert. Solche auf freiwilliger Basis von einer betroffenen Person an den für die Verarbeitung Verantwortlichen übermittelten personenbezogenen Daten werden für Zwecke der Bearbeitung oder der Kontaktaufnahme zur betroffenen Person gespeichert. Es erfolgt keine Weitergabe dieser personenbezogenen Daten an Dritte.

<h3>Routinemäßige Löschung und Sperrung von personenbezogenen Daten</h3>
Der für die Verarbeitung Verantwortliche verarbeitet und speichert personenbezogene Daten der betroffenen Person nur für den Zeitraum, der zur Erreichung des Speicherungszwecks erforderlich ist oder sofern dies durch den Europäischen Richtlinien- und Verordnungsgeber oder einen anderen Gesetzgeber in Gesetzen oder Vorschriften, welchen der für die Verarbeitung Verantwortliche unterliegt, vorgesehen wurde.

Entfällt der Speicherungszweck oder läuft eine vom Europäischen Richtlinien- und Verordnungsgeber oder einem anderen zuständigen Gesetzgeber vorgeschriebene Speicherfrist ab, werden die personenbezogenen Daten routinemäßig und entsprechend den gesetzlichen Vorschriften gesperrt oder gelöscht.

<h3>Rechte der betroffenen Person</h3>
<strong>a) Recht auf Bestätigung</strong>
Jede betroffene Person hat das vom Europäischen Richtlinien- und Verordnungsgeber eingeräumte Recht, von dem für die Verarbeitung Verantwortlichen eine Bestätigung darüber zu verlangen, ob sie betreffende personenbezogene Daten verarbeitet werden. Möchte eine betroffene Person dieses Bestätigungsrecht in Anspruch nehmen, kann sie sich hierzu jederzeit an einen Mitarbeiter des für die Verarbeitung Verantwortlichen wenden.

<strong>b) Recht auf Auskunft</strong>
Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom Europäischen Richtlinien- und Verordnungsgeber gewährte Recht, jederzeit von dem für die Verarbeitung Verantwortlichen unentgeltliche Auskunft über die zu seiner Person gespeicherten personenbezogenen Daten und eine Kopie dieser Auskunft zu erhalten. Ferner hat der Europäische Richtlinien- und Verordnungsgeber der betroffenen Person Auskunft über folgende Informationen zugestanden:

die Verarbeitungszwecke
die Kategorien personenbezogener Daten, die verarbeitet werden
die Empfänger oder Kategorien von Empfängern, gegenüber denen die personenbezogenen Daten offengelegt worden sind oder noch offengelegt werden, insbesondere bei Empfängern in Drittländern oder bei internationalen Organisationen
falls möglich die geplante Dauer, für die die personenbezogenen Daten gespeichert werden, oder, falls dies nicht möglich ist, die Kriterien für die Festlegung dieser Dauer
das Bestehen eines Rechts auf Berichtigung oder Löschung der sie betreffenden personenbezogenen Daten oder auf Einschränkung der Verarbeitung durch den Verantwortlichen oder eines Widerspruchsrechts gegen diese Verarbeitung
das Bestehen eines Beschwerderechts bei einer Aufsichtsbehörde
wenn die personenbezogenen Daten nicht bei der betroffenen Person erhoben werden: Alle verfügbaren Informationen über die Herkunft der Daten
das Bestehen einer automatisierten Entscheidungsfindung einschließlich Profiling gemäß Artikel 22 Abs.1 und 4 DS-GVO und — zumindest in diesen Fällen — aussagekräftige Informationen über die involvierte Logik sowie die Tragweite und die angestrebten Auswirkungen einer derartigen Verarbeitung für die betroffene Person
Ferner steht der betroffenen Person ein Auskunftsrecht darüber zu, ob personenbezogene Daten an ein Drittland oder an eine internationale Organisation übermittelt wurden. Sofern dies der Fall ist, so steht der betroffenen Person im Übrigen das Recht zu, Auskunft über die geeigneten Garantien im Zusammenhang mit der Übermittlung zu erhalten.

Möchte eine betroffene Person dieses Auskunftsrecht in Anspruch nehmen, kann sie sich hierzu jederzeit an einen Mitarbeiter des für die Verarbeitung Verantwortlichen wenden.

<strong>c) Recht auf Berichtigung</strong>
Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom Europäischen Richtlinien- und Verordnungsgeber gewährte Recht, die unverzügliche Berichtigung sie betreffender unrichtiger personenbezogener Daten zu verlangen. Ferner steht der betroffenen Person das Recht zu, unter Berücksichtigung der Zwecke der Verarbeitung, die Vervollständigung unvollständiger personenbezogener Daten — auch mittels einer ergänzenden Erklärung — zu verlangen.

Möchte eine betroffene Person dieses Berichtigungsrecht in Anspruch nehmen, kann sie sich hierzu jederzeit an einen Mitarbeiter des für die Verarbeitung Verantwortlichen wenden.

<strong>d) Recht auf Löschung (Recht auf vergessen werden)</strong>
Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom Europäischen Richtlinien- und Verordnungsgeber gewährte Recht, von dem Verantwortlichen zu verlangen, dass die sie betreffenden personenbezogenen Daten unverzüglich gelöscht werden, sofern einer der folgenden Gründe zutrifft und soweit die Verarbeitung nicht erforderlich ist:

Die personenbezogenen Daten wurden für solche Zwecke erhoben oder auf sonstige Weise verarbeitet, für welche sie nicht mehr notwendig sind.
Die betroffene Person widerruft ihre Einwilligung, auf die sich die Verarbeitung gemäß Art. 6 Abs. 1 Buchstabe a DS-GVO oder Art. 9 Abs. 2 Buchstabe a DS-GVO stützte, und es fehlt an einer anderweitigen Rechtsgrundlage für die Verarbeitung.
Die betroffene Person legt gemäß Art. 21 Abs. 1 DS-GVO Widerspruch gegen die Verarbeitung ein, und es liegen keine vorrangigen berechtigten Gründe für die Verarbeitung vor, oder die betroffene Person legt gemäß Art. 21 Abs. 2 DS-GVO Widerspruch gegen die Verarbeitung ein.
Die personenbezogenen Daten wurden unrechtmäßig verarbeitet.
Die Löschung der personenbezogenen Daten ist zur Erfüllung einer rechtlichen Verpflichtung nach dem Unionsrecht oder dem Recht der Mitgliedstaaten erforderlich, dem der Verantwortliche unterliegt.
Die personenbezogenen Daten wurden in Bezug auf angebotene Dienste der Informationsgesellschaft gemäß Art. 8 Abs. 1 DS-GVO erhoben.
Sofern einer der oben genannten Gründe zutrifft und eine betroffene Person die Löschung von personenbezogenen Daten, die bei der Webseite „%1$s“ gespeichert sind, veranlassen möchte, kann sie sich hierzu jederzeit an einen Mitarbeiter des für die Verarbeitung Verantwortlichen wenden. Der Mitarbeiter der Webseite „%1$s“ wird veranlassen, dass dem Löschverlangen unverzüglich nachgekommen wird.

Wurden die personenbezogenen Daten von der Webseite „%1$s“ öffentlich gemacht und ist der Betreiber dieser Webseite als Verantwortlicher gemäß Art. 17 Abs. 1 DS-GVO zur Löschung der personenbezogenen Daten verpflichtet, so trifft der Verantwortliche der Webseite „%1$s“ unter Berücksichtigung der verfügbaren Technologie und der Implementierungskosten angemessene Maßnahmen, auch technischer Art, um andere für die Datenverarbeitung Verantwortliche, welche die veröffentlichten personenbezogenen Daten verarbeiten, darüber in Kenntnis zu setzen, dass die betroffene Person von diesen anderen für die Datenverarbeitung Verantwortlichen die Löschung sämtlicher Links zu diesen personenbezogenen Daten oder von Kopien oder Replikationen dieser personenbezogenen Daten verlangt hat, soweit die Verarbeitung nicht erforderlich ist. Der Mitarbeiter der Webseite „%1$s“ wird im Einzelfall das Notwendige veranlassen.

<strong>e) Recht auf Einschränkung der Verarbeitung</strong>
Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom Europäischen Richtlinien- und Verordnungsgeber gewährte Recht, von dem Verantwortlichen die Einschränkung der Verarbeitung zu verlangen, wenn eine der folgenden Voraussetzungen gegeben ist:

Die Richtigkeit der personenbezogenen Daten wird von der betroffenen Person bestritten, und zwar für eine Dauer, die es dem Verantwortlichen ermöglicht, die Richtigkeit der personenbezogenen Daten zu überprüfen.
Die Verarbeitung ist unrechtmäßig, die betroffene Person lehnt die Löschung der personenbezogenen Daten ab und verlangt stattdessen die Einschränkung der Nutzung der personenbezogenen Daten.
Der Verantwortliche benötigt die personenbezogenen Daten für die Zwecke der Verarbeitung nicht länger, die betroffene Person benötigt sie jedoch zur Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen.
Die betroffene Person hat Widerspruch gegen die Verarbeitung gem. Art. 21 Abs. 1 DS-GVO eingelegt und es steht noch nicht fest, ob die berechtigten Gründe des Verantwortlichen gegenüber denen der betroffenen Person überwiegen.
Sofern eine der oben genannten Voraussetzungen gegeben ist und eine betroffene Person die Einschränkung von personenbezogenen Daten, die bei der Webseite „%1$s“ gespeichert sind, verlangen möchte, kann sie sich hierzu jederzeit an einen Mitarbeiter des für die Verarbeitung Verantwortlichen wenden. Der Mitarbeiter der Webseite „%1$s“ wird die Einschränkung der Verarbeitung veranlassen.

<strong>f) Recht auf Datenübertragbarkeit</strong>
Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom Europäischen Richtlinien- und Verordnungsgeber gewährte Recht, die sie betreffenden personenbezogenen Daten, welche durch die betroffene Person einem Verantwortlichen bereitgestellt wurden, in einem strukturierten, gängigen und maschinenlesbaren Format zu erhalten. Sie hat außerdem das Recht, diese Daten einem anderen Verantwortlichen ohne Behinderung durch den Verantwortlichen, dem die personenbezogenen Daten bereitgestellt wurden, zu übermitteln, sofern die Verarbeitung auf der Einwilligung gemäß Art. 6 Abs. 1 Buchstabe a DS-GVO oder Art. 9 Abs. 2 Buchstabe a DS-GVO oder auf einem Vertrag gemäß Art. 6 Abs. 1 Buchstabe b DS-GVO beruht und die Verarbeitung mithilfe automatisierter Verfahren erfolgt, sofern die Verarbeitung nicht für die Wahrnehmung einer Aufgabe erforderlich ist, die im öffentlichen Interesse liegt oder in Ausübung öffentlicher Gewalt erfolgt, welche dem Verantwortlichen übertragen wurde.

Ferner hat die betroffene Person bei der Ausübung ihres Rechts auf Datenübertragbarkeit gemäß Art. 20 Abs. 1 DS-GVO das Recht, zu erwirken, dass die personenbezogenen Daten direkt von einem Verantwortlichen an einen anderen Verantwortlichen übermittelt werden, soweit dies technisch machbar ist und sofern hiervon nicht die Rechte und Freiheiten anderer Personen beeinträchtigt werden.

Zur Geltendmachung des Rechts auf Datenübertragbarkeit kann sich die betroffene Person jederzeit an einen Mitarbeiter der Webseite „%1$s“ wenden.

<strong>g) Recht auf Widerspruch</strong>
Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom Europäischen Richtlinien- und Verordnungsgeber gewährte Recht, aus Gründen, die sich aus ihrer besonderen Situation ergeben, jederzeit gegen die Verarbeitung sie betreffender personenbezogener Daten, die aufgrund von Art. 6 Abs. 1 Buchstaben e oder f DS-GVO erfolgt, Widerspruch einzulegen. Dies gilt auch für ein auf diese Bestimmungen gestütztes Profiling.

Die Webseite „%1$s“ verarbeitet die personenbezogenen Daten im Falle des Widerspruchs nicht mehr, es sei denn, wir können zwingende schutzwürdige Gründe für die Verarbeitung nachweisen, die den Interessen, Rechten und Freiheiten der betroffenen Person überwiegen, oder die Verarbeitung dient der Geltendmachung, Ausübung oder Verteidigung von Rechtsansprüchen.

Verarbeitet die Webseite „%1$s“ personenbezogene Daten, um Direktwerbung zu betreiben, so hat die betroffene Person das Recht, jederzeit Widerspruch gegen die Verarbeitung der personenbezogenen Daten zum Zwecke derartiger Werbung einzulegen. Dies gilt auch für das Profiling, soweit es mit solcher Direktwerbung in Verbindung steht. Widerspricht die betroffene Person gegenüber dem Verantwortlichen der Webseite „%1$s“ der Verarbeitung für Zwecke der Direktwerbung, so wird die Webseite „%1$s“ die personenbezogenen Daten nicht mehr für diese Zwecke verarbeiten.

Zudem hat die betroffene Person das Recht, aus Gründen, die sich aus ihrer besonderen Situation ergeben, gegen die sie betreffende Verarbeitung personenbezogener Daten, die bei der Webseite „%1$s“ zu wissenschaftlichen oder historischen Forschungszwecken oder zu statistischen Zwecken gemäß Art. 89 Abs. 1 DS-GVO erfolgen, Widerspruch einzulegen, es sei denn, eine solche Verarbeitung ist zur Erfüllung einer im öffentlichen Interesse liegenden Aufgabe erforderlich.

Zur Ausübung des Rechts auf Widerspruch kann sich die betroffene Person direkt an jeden Mitarbeiter der Webseite „%1$s“ oder einen anderen Mitarbeiter wenden. Der betroffenen Person steht es ferner frei, im Zusammenhang mit der Nutzung von Diensten der Informationsgesellschaft, ungeachtet der Richtlinie 2002/58/EG, ihr Widerspruchsrecht mittels automatisierter Verfahren auszuüben, bei denen technische Spezifikationen verwendet werden.

<strong>h) Automatisierte Entscheidungen im Einzelfall einschließlich Profiling</strong>
Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom Europäischen Richtlinien- und Verordnungsgeber gewährte Recht, nicht einer ausschließlich auf einer automatisierten Verarbeitung — einschließlich Profiling — beruhenden Entscheidung unterworfen zu werden, die ihr gegenüber rechtliche Wirkung entfaltet oder sie in ähnlicher Weise erheblich beeinträchtigt, sofern die Entscheidung (1) nicht für den Abschluss oder die Erfüllung eines Vertrags zwischen der betroffenen Person und dem Verantwortlichen erforderlich ist, oder (2) aufgrund von Rechtsvorschriften der Union oder der Mitgliedstaaten, denen der Verantwortliche unterliegt, zulässig ist und diese Rechtsvorschriften angemessene Maßnahmen zur Wahrung der Rechte und Freiheiten sowie der berechtigten Interessen der betroffenen Person enthalten oder (3) mit ausdrücklicher Einwilligung der betroffenen Person erfolgt.

Ist die Entscheidung (1) für den Abschluss oder die Erfüllung eines Vertrags zwischen der betroffenen Person und dem Verantwortlichen erforderlich oder (2) erfolgt sie mit ausdrücklicher Einwilligung der betroffenen Person, trifft der Verantwortliche der Webseite „%1$s“ angemessene Maßnahmen, um die Rechte und Freiheiten sowie die berechtigten Interessen der betroffenen Person zu wahren, wozu mindestens das Recht auf Erwirkung des Eingreifens einer Person seitens des Verantwortlichen, auf Darlegung des eigenen Standpunkts und auf Anfechtung der Entscheidung gehört.

Möchte die betroffene Person Rechte mit Bezug auf automatisierte Entscheidungen geltend machen, kann sie sich hierzu jederzeit an einen Mitarbeiter des für die Verarbeitung Verantwortlichen wenden.

<strong>i) Recht auf Widerruf einer datenschutzrechtlichen Einwilligung</strong>
Jede von der Verarbeitung personenbezogener Daten betroffene Person hat das vom Europäischen Richtlinien- und Verordnungsgeber gewährte Recht, eine Einwilligung zur Verarbeitung personenbezogener Daten jederzeit zu widerrufen.

Möchte die betroffene Person ihr Recht auf Widerruf einer Einwilligung geltend machen, kann sie sich hierzu jederzeit an einen Mitarbeiter des für die Verarbeitung Verantwortlichen wenden.

<strong>j) Beschwerde bei datenrechtlichen Verstößen</strong>
Im Falle datenschutzrechtlicher Verstöße steht dem Betroffenen ein Beschwerderecht bei der zuständigen Aufsichtsbehörde zu. Zuständige Aufsichtsbehörde in datenschutzrechtlichen Fragen ist der Landesdatenschutzbeauftragte des Bundeslandes, in dem die betroffene Person ihren Sitz oder ständigen Aufenthalt hat.

Eine Liste der Datenschutzbeauftragten sowie deren Kontaktdaten können folgendem Link entnommen werden: <a onclick="window.open(this.href); return false;" href="https://www.bfdi.bund.de/DE/Infothek/Anschriften_Links/anschriften_links-node.html">www.bfdi.bund.de - Anschriften und Links für Deutschland</a> oder <a onclick="window.open(this.href); return false;" href="https://ec.europa.eu/newsroom/article29/item-detail.cfm?item_id=612080">https://ec.europa.eu - Anschriften und Links für Europa</a>.

<h3>Datenschutzbestimmungen zu Einsatz und Verwendung von Profilbildern bei Gravatar</h3>
Der für die Verarbeitung Verantwortliche hat auf dieser Internetseite den Dienst Gravatar integriert, um mit Hilfe von Gravatar den Beitrags- und Kommentarverfassern die Möglichkeit zu bieten ihre Beiträge mit einem seitenübergreifenden Profilbild (auch Avatar genannt) zu personalisieren. Die Betreibergesellschaft des Dienstes Gravatar ist die Automattic Inc., 132 Hawthorne Street San Francisco, CA 94107, USA.

Gravatar ist ein Dienst, bei dem sich die betroffene Person anmelden und Profilbilder mit einer E-Mail-Adresse hinterlegen kann. Das dort gewählte Benutzerbild kann dann auf vielen verschiedenen Webseiten benutzt werden. Wenn die betroffene Person mit der jeweiligen E-Mail-Adresse auf anderen Onlinepräsenzen Beiträge oder Kommentare schreibt, kann so deren Profilbild neben den Beiträgen oder Kommentaren dargestellt werden. Hierzu wird die von betroffenen Person mitgeteilte E-Mail-Adresse an Gravatar verschlüsselt gesendet, um zu prüfen, ob zu dieser ein Profil mit einem Bild gespeichert ist. Dies ist der einzige Zweck der Übermittlung der E-Mail-Adresse.

Durch die Anzeige der Bilder wird Gravatar die derzeitige IP-Adresse der betroffenen Person bekannt, da dies für eine Kommunikation zwischen einem Browser und einem Onlineservice notwendig ist. Außerdem erhält Gravatar Informationen über die besuchten Webseiten, und wo das Profilbild verwendet wird. Diese Datenverbindungen unterliegen nicht unserer Kontrolle, und wir erhalten keine Information über die verwendeten oder gesendeten Daten. Nähere Informationen zur Erhebung und Nutzung der Daten durch Gravatar finden sich in den Datenschutzhinweisen von Automattic: <a onclick="window.open(this.href); return false;" href="https://automattic.com/privacy/">https://automattic.com/privacy/</a>.

Wenn die betroffene Person nicht möchte, dass ein mit ihrer E-Mail-Adresse bei Gravatar verknüpftes Benutzerbild in den Beiträgen erscheint, sollte im Benutzerkonto und für die Beiträge oder Kommentare eine E-Mail-Adresse benutzt werden, welche nicht bei Gravatar hinterlegt ist. Benutzer können die Übertragung der Daten komplett verhindern, indem sie kein Gravatar-Bild mit ihrem Benutzerkonto oder Kommentaren verbinden, sondern möglichst ein lokales Benutzerbild wählen.

Automattic ist unter dem Privacy-Shield-Abkommen zertifiziert und bietet hierdurch eine Garantie, das europäische Datenschutzrecht einzuhalten. Näheres unter <a onclick="window.open(this.href); return false;" href="https://www.privacyshield.gov/participant?id=a2zt0000000CbqcAAC&status=Active">https://www.privacyshield.gov</a>.

<h3>Datenschutzbestimmungen zu Einsatz und Verwendung von Spielhallenmodulen</h3>
Der für die Verarbeitung Verantwortliche hat auf dieser Internetseite eine sogenannte Spielhalle (auch Arcade genannt) mit Browserspielen integriert. Durch die Benutzung der Spielhallenmodule werden, wie oben erklärt, Cookies gesetzt, welche Sitzungsdaten und die benutzerdefinierte optische Darstellung der Spiele und der Spielhallenseiten speichern. Es ist zum ordnungsgemäßen Betrieb erforderlich, Daten zu erzielten Punkten je Spiel, Spielstand, Datum des erreichten Spielstands, Anzahl der Spielstarts, Dauer des Spiels, Rangfolge gegenüber anderen Nutzern und ähnliche statistische Daten zu übertragen und in Verbindung mit dem Benutzerkonto zu speichern. Es können Komponenten eines Text-Übersetzungsdienstes wie Google Translate enthalten sein. Die Datenschutzbestimmungen zu Google Translate siehe weiter unten. Es ist außerdem möglich, dass Spiele Datenverbindungen zu fremden Seiten aufbauen, welche ein spezielles Ranking oder Statistiken für dieses Spiel führen. Es kann auch innerhalb der Spiele Verbindungen zu sogenannten sozialen Medien geben, welche Aktivitäten ihrer Mitglieder diesbezüglich verfolgen.

Wenn die betroffene Person ein Nutzerkonto bei diesen fremden Seiten oder sozialen Medien unterhält und dort angemeldet ist, können diese Seiten Kenntnis über den Aufruf unserer Seite, des betreffenden Spiels und des erreichten Spielstands erhalten. Im Gegenzug ist es möglich, dass von diesen Seiten Werbung an die betroffene Person gesendet wird. Diese Datenverbindungen unterliegen nicht unserer Kontrolle, und wir erhalten keine Kenntnis über die verwendeten Daten. Eine etwaige Übertragung persönlicher Daten dorthin kann die betroffene Person vermeiden, indem sie sich aus dem entsprechenden Konto ausloggt, oder die Spiele nicht verwendet. Die Spielhalle kann teilweise auch ohne Registrierung und Speicherung von Cookies oder Daten genutzt werden. Dann sind viele Funktionen allerdings nicht verfügbar, und Rekorde können nicht gespeichert werden. Für Gäste werden außerhalb des Serverprotokolls über den allgemeinen Zugriff keine Daten gespeichert. Allerdings ist es Gastspielern auch nicht möglich, den Spielstand zu speichern, und viele Funktionen sind nicht verfügbar.

Bevor ein Spiel startet, wird ein Intro geladen, welches mit der Webseite „https://connect.jv-arcade.com“ verbunden ist. Der für „jv-arcade.com“ Verantwortliche erklärt in seiner Datenschutzerklärung eindeutig, dass diese Verbindung keinerlei persönliche Daten über die Benutzer transportiert, und auch keine Cookies verwendet.

<h3>Datenschutzbestimmungen zu Einsatz und Verwendung von Chatmodulen</h3>
Der für die Verarbeitung Verantwortliche hat auf dieser Internetseite sogenannte Chatmodule (auch Shoutbox oder Footerchat genannt) integriert. Diese Module haben den Zweck, den Benutzern eine direkte Unterhaltung miteinander in Echtzeit zu ermöglichen. Durch die Benutzung eines Chatmoduls werden, wie oben erklärt, Cookies gesetzt, welche Einstellungen für die jeweilige Chatbox (z.B. Ton an/aus, Box ein- oder ausgeklappt, oder Box-Position innerhalb einer Seite), und Sitzungs- oder Verlaufsdaten speichern. Zum ordnungsgemäßen Betrieb eines Chatmoduls ist es erforderlich, dass vom Benutzer dort eingegebene Beiträge mit der Zeit der Erstellung und in Verbindung mit seinem Benutzerkonto in der Datenbank gespeichert werden. Gast-Beiträge werden in Verbindung mit der IP-Adresse gespeichert. Dies ist erforderlich, um Beiträge in der korrekten zeitlichen Reihenfolge anzuzeigen, sie den Verfassern zuzuordnen, und um eventuelle Verstöße gegen die Nutzungsbedingungen oder gegen geltendes Recht verfolgen zu können. Inhalte von Unterhaltungen in Chatmodulen können konfigurationsabhängig öffentlich im Internet sichtbar sein, und möglicherweise von jedem mitgelesen oder nachgelesen werden.

<h3>Datenschutzbestimmungen zu Einsatz und Verwendung von Google AdSense</h3>
Der für die Verarbeitung Verantwortliche hat auf dieser Internetseite Google AdSense integriert. Google AdSense ist ein Online-Dienst, über welchen eine Vermittlung von Werbung auf Drittseiten ermöglicht wird. Google AdSense beruht auf einem Algorithmus, welcher die auf Drittseiten angezeigten Werbeanzeigen passend zu den Inhalten der jeweiligen Drittseite auswählt. Google AdSense gestattet ein interessenbezogenes Targeting des Internetnutzers, welches mittels Generierung von individuellen Benutzerprofilen umgesetzt wird.

Betreibergesellschaft der Google-AdSense-Komponente ist die Alphabet Inc., 1600 Amphitheatre Pkwy, Mountain View, CA 94043-1351, USA.

Der Zweck der Google-AdSense-Komponente ist die Einbindung von Werbeanzeigen auf unserer Internetseite. Google-AdSense setzt ein Cookie auf dem informationstechnologischen System der betroffenen Person. Was Cookies sind, wurde oben bereits erläutert. Mit der Setzung des Cookies wird der Alphabet Inc. eine Analyse der Benutzung unserer Internetseite ermöglicht. Durch jeden Aufruf einer der Einzelseiten dieser Internetseite, die durch den für die Verarbeitung Verantwortlichen betrieben wird und auf welcher eine Google-AdSense-Komponente integriert wurde, wird der Internetbrowser auf dem informationstechnologischen System der betroffenen Person automatisch durch die jeweilige Google-AdSense-Komponente veranlasst, Daten zum Zwecke der Online-Werbung und der Abrechnung von Provisionen an die Alphabet Inc. zu übermitteln. Im Rahmen dieses technischen Verfahrens erhält die Alphabet Inc. Kenntnis über personenbezogene Daten, wie der IP-Adresse der betroffenen Person, die der Alphabet Inc. unter anderem dazu dienen, die Herkunft der Besucher und Klicks nachzuvollziehen und in der Folge Provisionsabrechnungen zu ermöglichen.

Die betroffene Person kann die Setzung von Cookies durch unsere Internetseite, wie oben bereits dargestellt, jederzeit mittels einer entsprechenden Einstellung des genutzten Internetbrowsers verhindern und damit der Setzung von Cookies dauerhaft widersprechen. Eine solche Einstellung des genutzten Internetbrowsers würde auch verhindern, dass die Alphabet Inc. ein Cookie auf dem informationstechnologischen System der betroffenen Person setzt. Zudem kann ein von der Alphabet Inc. bereits gesetzter Cookie jederzeit über den Internetbrowser oder andere Softwareprogramme gelöscht werden.

Google AdSense verwendet zudem sogenannte Zählpixel. Ein Zählpixel ist eine Miniaturgrafik, die in Internetseiten eingebettet wird, um eine Logdatei-Aufzeichnung und eine Logdatei-Analyse zu ermöglichen, wodurch eine statistische Auswertung durchgeführt werden kann. Anhand des eingebetteten Zählpixels kann die Alphabet Inc. erkennen, ob und wann eine Internetseite von einer betroffenen Person geöffnet wurde und welche Links von der betroffenen Person angeklickt wurden. Zählpixel dienen unter anderem dazu, den Besucherfluss einer Internetseite auszuwerten.

Über Google AdSense werden personenbezogene Daten und Informationen, was auch die IP-Adresse umfasst und zur Erfassung und Abrechnung der angezeigten Werbeanzeigen notwendig ist, an die Alphabet Inc. in die Vereinigten Staaten von Amerika übertragen. Diese personenbezogenen Daten werden in den Vereinigten Staaten von Amerika gespeichert und verarbeitet. Die Alphabet Inc. gibt diese über das technische Verfahren erhobenen personenbezogenen Daten unter Umständen an Dritte weiter.

Google-AdSense wird unter diesem Link <a onclick="window.open(this.href); return false;" href="https://www.google.com/adsense/start/">https://www.google.com/adsense/start/</a> genauer erläutert.

<h3>Datenschutzbestimmungen zu Einsatz und Verwendung von Google Analytics (mit Anonymisierungsfunktion)</h3>
Der für die Verarbeitung Verantwortliche hat auf dieser Internetseite die Komponente Google Analytics (mit Anonymisierungsfunktion) integriert. Google Analytics ist ein Web-Analyse-Dienst. Web-Analyse ist die Erhebung, Sammlung und Auswertung von Daten über das Verhalten von Besuchern von Internetseiten. Ein Web-Analyse-Dienst erfasst unter anderem Daten darüber, von welcher Internetseite eine betroffene Person auf eine Internetseite gekommen ist (sogenannte Referrer), auf welche Unterseiten der Internetseite zugegriffen oder wie oft und für welche Verweildauer eine Unterseite betrachtet wurde. Eine Web-Analyse wird überwiegend zur Optimierung einer Internetseite und zur Kosten-Nutzen-Analyse von Internetwerbung eingesetzt.

Betreibergesellschaft der Google-Analytics-Komponente ist die Google Inc., 1600 Amphitheatre Pkwy, Mountain View, CA 94043-1351, USA.

Der für die Verarbeitung Verantwortliche verwendet für die Web-Analyse über Google Analytics den Zusatz „_gat._anonymizeIp“. Mittels dieses Zusatzes wird die IP-Adresse des Internetanschlusses der betroffenen Person von Google gekürzt und anonymisiert, wenn der Zugriff auf unsere Internetseiten aus einem Mitgliedstaat der Europäischen Union oder aus einem anderen Vertragsstaat des Abkommens über den Europäischen Wirtschaftsraum erfolgt.

Der Zweck der Google-Analytics-Komponente ist die Analyse der Besucherströme auf unserer Internetseite. Google nutzt die gewonnenen Daten und Informationen unter anderem dazu, die Nutzung unserer Internetseite auszuwerten, um für uns Online-Reports, welche die Aktivitäten auf unseren Internetseiten aufzeigen, zusammenzustellen, und um weitere mit der Nutzung unserer Internetseite in Verbindung stehende Dienstleistungen zu erbringen.

Google Analytics setzt ein Cookie auf dem informationstechnologischen System der betroffenen Person. Was Cookies sind, wurde oben bereits erläutert. Mit Setzung des Cookies wird Google eine Analyse der Benutzung unserer Internetseite ermöglicht. Durch jeden Aufruf einer der Einzelseiten dieser Internetseite, die durch den für die Verarbeitung Verantwortlichen betrieben wird und auf welcher eine Google-Analytics-Komponente integriert wurde, wird der Internetbrowser auf dem informationstechnologischen System der betroffenen Person automatisch durch die jeweilige Google-Analytics-Komponente veranlasst, Daten zum Zwecke der Online-Analyse an Google zu übermitteln. Im Rahmen dieses technischen Verfahrens erhält Google Kenntnis über personenbezogene Daten, wie der IP-Adresse der betroffenen Person, die Google unter anderem dazu dienen, die Herkunft der Besucher und Klicks nachzuvollziehen und in der Folge Provisionsabrechnungen zu ermöglichen.

Mittels des Cookies werden personenbezogene Informationen, beispielsweise die Zugriffszeit, der Ort, von welchem ein Zugriff ausging und die Häufigkeit der Besuche unserer Internetseite durch die betroffene Person, gespeichert. Bei jedem Besuch unserer Internetseiten werden diese personenbezogenen Daten, einschließlich der IP-Adresse des von der betroffenen Person genutzten Internetanschlusses, an Google in den Vereinigten Staaten von Amerika übertragen. Diese personenbezogenen Daten werden durch Google in den Vereinigten Staaten von Amerika gespeichert. Google gibt diese über das technische Verfahren erhobenen personenbezogenen Daten unter Umständen an Dritte weiter.

Die betroffene Person kann die Setzung von Cookies durch unsere Internetseite, wie oben bereits dargestellt, jederzeit mittels einer entsprechenden Einstellung des genutzten Internetbrowsers verhindern und damit der Setzung von Cookies dauerhaft widersprechen. Eine solche Einstellung des genutzten Internetbrowsers würde auch verhindern, dass Google ein Cookie auf dem informationstechnologischen System der betroffenen Person setzt. Zudem kann ein von Google Analytics bereits gesetzter Cookie jederzeit über den Internetbrowser oder andere Softwareprogramme gelöscht werden.

Ferner besteht für die betroffene Person die Möglichkeit, einer Erfassung der durch Google Analytics erzeugten, auf eine Nutzung dieser Internetseite bezogenen Daten sowie der Verarbeitung dieser Daten durch Google zu widersprechen und eine solche zu verhindern. Hierzu muss die betroffene Person ein Browser-Add-On unter dem Link <a onclick="window.open(this.href); return false;" href="https://tools.google.com/dlpage/gaoptout">https://tools.google.com/dlpage/gaoptout</a> herunterladen und installieren. Dieses Browser-Add-On teilt Google Analytics über JavaScript mit, dass keine Daten und Informationen zu den Besuchen von Internetseiten an Google Analytics übermittelt werden dürfen. Die Installation des Browser-Add-Ons wird von Google als Widerspruch gewertet. Wird das informationstechnologische System der betroffenen Person zu einem späteren Zeitpunkt gelöscht, formatiert oder neu installiert, muss durch die betroffene Person eine erneute Installation des Browser-Add-Ons erfolgen, um Google Analytics zu deaktivieren. Sofern das Browser-Add-On durch die betroffene Person oder einer anderen Person, die ihrem Machtbereich zuzurechnen ist, deinstalliert oder deaktiviert wird, besteht die Möglichkeit der Neuinstallation oder der erneuten Aktivierung des Browser-Add-Ons.

Weitere Informationen und die geltenden Datenschutzbestimmungen von Google können unter <a onclick="window.open(this.href); return false;" href="https://policies.google.com/privacy">https://policies.google.com/privacy</a> und unter <a onclick="window.open(this.href); return false;" href="http://www.google.com/analytics/terms/de.html">http://www.google.com/analytics/terms/de.html</a> abgerufen werden. Google Analytics wird unter diesem Link <a onclick="window.open(this.href); return false;" href="https://www.google.com/analytics/">https://www.google.com/analytics/</a> genauer erläutert.

<h3>Datenschutzbestimmungen zu Einsatz und Verwendung von DoubleClick</h3>
Der für die Verarbeitung Verantwortliche hat auf dieser Internetseite Komponenten von DoubleClick by Google integriert. DoubleClick ist eine Marke von Google, unter welcher vorwiegend spezielle Online-Marketing-Lösungen an Werbeagenturen und Verlage vermarktet werden.

Betreibergesellschaft von DoubleClick by Google ist die Google Inc., 1600 Amphitheatre Pkwy, Mountain View, CA 94043-1351, USA.

DoubleClick by Google überträgt sowohl mit jeder Impression als auch mit Klicks oder anderen Aktivitäten Daten auf den DoubleClick-Server. Jede dieser Datenübertragungen löst eine Cookie-Anfrage an den Browser der betroffenen Person aus. Akzeptiert der Browser diese Anfrage, setzt DoubleClick ein Cookie auf dem informationstechnologischen System der betroffenen Person. Was Cookies sind, wurde oben bereits erläutert. Zweck des Cookies ist die Optimierung und Einblendung von Werbung. Das Cookie wird unter anderem dazu verwendet, nutzerrelevante Werbung zu schalten und anzuzeigen sowie um Berichte zu Werbekampagnen zu erstellen oder diese zu verbessern. Ferner dient das Cookie dazu, Mehrfacheinblendungen derselben Werbung zu vermeiden.

DoubleClick verwendet eine Cookie-ID, die zur Abwicklung des technischen Verfahrens erforderlich ist. Die Cookie-ID wird beispielsweise benötigt, um eine Werbeanzeige in einem Browser anzuzeigen. DoubleClick kann über die Cookie-ID zudem erfassen, welche Werbeanzeigen bereits in einem Browser eingeblendet wurden, um Doppelschaltungen zu vermeiden. Ferner ist es DoubleClick durch die Cookie-ID möglich, Conversions zu erfassen. Conversions werden beispielsweise dann erfasst, wenn einem Nutzer zuvor eine DoubleClick-Werbeanzeige eingeblendet wurde und dieser in der Folge mit dem gleichen Internetbrowser einen Kauf auf der Internetseite des Werbetreibenden vollzieht.

Ein Cookie von DoubleClick enthält keine personenbezogenen Daten. Ein DoubleClick-Cookie kann aber zusätzliche Kampagnen-Kennungen enthalten. Eine Kampagnen-Kennung dient einer Identifizierung der Kampagnen, mit denen der Nutzer bereits in Kontakt war.

Durch jeden Aufruf einer der Einzelseiten dieser Internetseite, die durch den für die Verarbeitung Verantwortlichen betrieben wird und auf welcher eine DoubleClick-Komponente integriert wurde, wird der Internetbrowser auf dem informationstechnologischen System der betroffenen Person automatisch durch die jeweilige DoubleClick-Komponente veranlasst, Daten zum Zwecke der Online-Werbung und der Abrechnung von Provisionen an Google zu übermitteln. Im Rahmen dieses technischen Verfahrens erhält Google Kenntnis über Daten, die Google auch dazu dienen, Provisionsabrechnungen zu erstellen. Google kann unter anderem nachvollziehen, dass die betroffene Person bestimmte Links auf unserer Internetseite angeklickt hat.

Die betroffene Person kann die Setzung von Cookies durch unsere Internetseite, wie oben bereits dargestellt, jederzeit mittels einer entsprechenden Einstellung des genutzten Internetbrowsers verhindern und damit der Setzung von Cookies dauerhaft widersprechen. Eine solche Einstellung des genutzten Internetbrowsers würde auch verhindern, dass Google ein Cookie auf dem informationstechnologischen System der betroffenen Person setzt. Zudem können von Google bereits gesetzte Cookies jederzeit über einen Internetbrowser oder andere Softwareprogramme gelöscht werden.

Weitere Informationen und die geltenden Datenschutzbestimmungen von DoubleClick by Google können unter <a onclick="window.open(this.href); return false;" href="https://policies.google.com/">https://policies.google.com/</a> abgerufen werden.

<h3>Datenschutzbestimmungen zu Einsatz und Verwendung von Google Translate bzw. Google Übersetzer</h3>
Der für die Verarbeitung Verantwortliche hat auf dieser Internetseite Übersetzungskomponenten von Google Translate integriert. Zweck der Komponente ist die Verbesserung unseres Onlineangebotes, indem die betroffene Person in die Lage versetzt wird, fremdsprachige Beiträge auf der Internetseite des Betreibers automatisch übersetzen zu lassen. Betreibergesellschaft von Google Translate ist die Google LLC, 1600 Amphitheatre Pkwy, Mountain View, CA 94043-1351, USA. Google Translate ist ein Online-Übersetzungsdienst von Google LLC, der Benutzern ermöglicht, einzelne Worte, Texte, eine Webseite oder Teile davon automatisch in verschiedene Sprachen zu übersetzen. Die Übersetzungen sind allerdings nicht in jedem Falle zutreffend, und können manchmal irreführende, falsche oder beleidigende Ausdrücke enthalten. Wir übernehmen keine Gewähr für Richtigkeit, Zuverlässigkeit oder Aktualität der Übersetzungen, und haften nicht für entstandene Schäden.

Bei jedem Aufruf einer der Einzelseiten dieser Internetseite, die durch den für die Verarbeitung Verantwortlichen betrieben wird, und auf welcher eine Übersetzungskomponente integriert wurde, werden Daten an Google Translate übermittelt. Google Translate setzt Cookies auf dem informationstechnologischen System der betroffenen Person, wie oben beschrieben. Mit jedem Besuch unserer Internetseite werden persönliche Daten, einschließlich der IP-Adresse des Internetzugriffs der betroffenen Person, an Google auf Server in den Vereinigten Staaten von Amerika übertragen und dort gespeichert. Google kann diese gesammelten persönlichen Daten an andere Google Dienste oder Drittanbieter weitergeben. Google erhält während der gesamten Dauer des Aufenthalts auf der Webseite immer eine Information darüber, dass der Dienst aufgerufen wurde, wann er aufgerufen wurde, von welcher Seite, mit welcher IP-Adresse und welchem Browser, und welche Texte von der betroffenen Person zur Übersetzung eingegeben oder abgerufen wurden. Diese Daten werden auf ausländischen Servern bearbeitet, in der Regel in den USA, und von Google erfasst, gespeichert, analysiert und verarbeitet. Dabei werden Daten auch zwischen den einzelnen Google Diensten ausgetauscht, und Aktivitäten der betroffenen Person mittels Cookies, einer Browserkennung und der IP-Adresse verfolgt. Wenn die betroffene Person gleichzeitig bei Google angemeldet ist, werden die Daten in Verbindung mit der Google-Benutzeranmeldung der betroffenen Person gebracht, und beispielsweise für Werbezwecke auch auf anderen Webseiten verwendet.

Wenn die betroffene Person Google Translate auf unseren Seiten verwendet, erklärt sie sich einverstanden mit der Erfassung, Bearbeitung sowie der Nutzung der automatisch erhobenen sowie der von der betroffenen Person selbst eingegeben Daten durch Google, einen seiner Dienste, Vertreter oder Drittanbieter laut den Nutzungsbedingungen und der Datenschutzerklärung von Google. Sollen keine Daten der betroffenen Person an Google übermittelt werden, sollten keine Google Dienste verwendet werden.

Die Nutzungsbedingungen für Google Translate sind verfügbar unter <a onclick="window.open(this.href); return false;" href="https://policies.google.com/terms">https://policies.google.com/terms</a>. Aufschluss über die Erhebung, Verarbeitung und Nutzung personenbezogener Daten durch Google können Sie unter <a onclick="window.open(this.href); return false;" href="https://policies.google.com/privacy">https://policies.google.com/privacy</a> erhalten.

Weitere Informationen über Google Translate stehen Ihnen auf folgender Seite bereit: <a onclick="window.open(this.href); return false;" href="http://translate.google.com/manager/website/">http://translate.google.com/manager/website/</a>.

<h3>Datenschutzbestimmungen zu Einsatz und Verwendung von Verwendung von Google Fonts</h3>
Der für die Verarbeitung Verantwortliche hat auf dieser Internetseite externe Schriften von Google Fonts integriert. Betreibergesellschaft von Google Fonts ist die Google inc., 1600 Amphitheatre Pkwy, Mountain View, CA 94043-1351, USA. Google Fonts ist ein Dienst, welcher Schriftarten online speichert zur Benutzung auf unterschiedlichen Internetseiten. Die Schriftarten müssen auf das informationstechnologische System der betroffenen Person heruntergeladen werden, ehe sie angezeigt werden können. Schriftarten, die von der Google Fonts API angeboten werden, werden automatisch komprimiert, um einen schnelleren Download zu ermöglichen. Wenn sie einmal heruntergeladen wurden, werden sie im Browsercache gespeichert, und auf jeder weiteren Webseite benutzt, welche die Google Fonts API verwendet.

Zweck dieser Kompenente ist die Verbesserung des Designs der Webseite des für die Verarbeitung Verantwortlichen und die einheitliche Darstellung von Schriftarten auf dem informationstechnologischen System des Benutzers. Die Einbindung dieser Schriftarten erfolgt durch einen Serveraufruf, in der Regel ein Server von Google in den USA. Dabei wird das informationstechnologische System der betroffenen Person veranlasst, die Schriftarten herunterzuladen.

Mit jedem Aufruf der Internetseite des für die Verarbeitung Verantwortlichen, auf der Google Fonts integriert ist, werden persönliche Daten, eingeschlossen die IP-Adresse der betroffenen Person während des Internetzugriffs, an Google auf Server in den Vereinigten Staaten von Amerika übermittelt, und dort gespeichert. Mit jedem Aufruf einer Einzelseite der Internetseite des für die Verarbeitung Verantwortlichen, auf der Google Fonts integriert ist, wird eine Anfrage zur Aktualität der benutzten Schriftarten an Google Fonts Server gesendet. Anfragen werden für einen Tag, heruntergeladene Schriftarten für maximal ein Jahr auf dem informationstechnologischen System der betroffenen Person gespeichert. Zu diesem Zweck speichert Google Cookies auf dem Gerät des Benutzers, wie oben erklärt, welche die IP-Adresse, die Zugriffszeit und die Browserdaten der betroffenen Person enthalten. Google kann die durch diese Technik gesammelten Daten an andere Google Dienste und an Dritte weitergeben.

Google erhält während der gesamten Dauer des Aufenthalts auf der Webseite immer eine Information darüber, dass der Dienst aufgerufen wurde, wann er aufgerufen wurde, von welcher Seite, mit welcher IP-Adresse und welchem Browser, und welche Texte von der betroffenen Person zur Übersetzung eingegeben oder abgerufen wurden. Diese Daten werden auf ausländischen Servern bearbeitet, in der Regel in den USA, und von Google erfasst, gespeichert, analysiert und verarbeitet. Dabei werden Daten auch zwischen den einzelnen Google Diensten ausgetauscht, und Aktivitäten der betroffenen Person mittels Cookies, einer Browserkennung und der IP-Adresse verfolgt. Wenn die betroffene Person gleichzeitig bei Google angemeldet ist, werden die Daten in Verbindung mit der Google-Benutzeranmeldung der betroffenen Person gebracht, und beispielsweise für Werbezwecke auch auf anderen Webseiten verwendet.

Wenn der Browser oder die Einstellungen des Benutzers keine Webschriftarten unterstützen, wird eine auf dem informationstechnologischen System der betroffenen Person installierte Schriftart verwendet. Webschriftarten können deaktiviert werden durch Scriptblocker-Addons für den Browser.

Nähere Informationen zu Google Fonts sind auf <a onclick="window.open(this.href); return false;" href="https://fonts.google.com/about#">https://fonts.google.com/about#</a> und auf <a onclick="window.open(this.href); return false;"https://developers.google.com/fonts/faq"> https://developers.google.com/fonts/faq</a> verfügbar.

Die Nutzungsbedingungen für Google Fonts sind verfügbar unter <a onclick="window.open(this.href); return false;" href="https://policies.google.com/terms">https://policies.google.com/terms</a>. Aufschluss über die Erhebung, Verarbeitung und Nutzung personenbezogener Daten durch Google können Sie unter <a onclick="window.open(this.href); return false;" href="https://policies.google.com/privacy">https://policies.google.com/privacy</a> erhalten.

<h3>Datenschutzbestimmungen zu Einsatz und Verwendung von Facebook</h3>
Der für die Verarbeitung Verantwortliche hat auf dieser Internetseite Komponenten des Unternehmens Facebook integriert. Facebook ist ein soziales Netzwerk.

Ein soziales Netzwerk ist ein im Internet betriebener sozialer Treffpunkt, eine Online-Gemeinschaft, die es den Nutzern in der Regel ermöglicht, untereinander zu kommunizieren und im virtuellen Raum zu interagieren. Ein soziales Netzwerk kann als Plattform zum Austausch von Meinungen und Erfahrungen dienen oder ermöglicht es der Internetgemeinschaft, persönliche oder unternehmensbezogene Informationen bereitzustellen. Facebook ermöglicht den Nutzern des sozialen Netzwerkes unter anderem die Erstellung von privaten Profilen, den Upload von Fotos und eine Vernetzung über Freundschaftsanfragen.

Betreibergesellschaft von Facebook ist die Facebook, Inc., 1 Hacker Way, Menlo Park, CA 94025, USA. Für die Verarbeitung personenbezogener Daten Verantwortlicher ist, wenn eine betroffene Person außerhalb der USA oder Kanada lebt, die Facebook Ireland Ltd., 4 Grand Canal Square, Grand Canal Harbour, Dublin 2, Ireland.

Durch jeden Aufruf einer der Einzelseiten dieser Internetseite, die durch den für die Verarbeitung Verantwortlichen betrieben wird und auf welcher eine Facebook-Komponente (Facebook-Plug-In) integriert wurde, wird der Internetbrowser auf dem informationstechnologischen System der betroffenen Person automatisch durch die jeweilige Facebook-Komponente veranlasst, eine Darstellung der entsprechenden Facebook-Komponente von Facebook herunterzuladen. Eine Gesamtübersicht über alle Facebook-Plug-Ins kann unter <a onclick="window.open(this.href); return false;" href="https://developers.facebook.com/docs/plugins/">https://developers.facebook.com/docs/plugins/</a> abgerufen werden. Im Rahmen dieses technischen Verfahrens erhält Facebook Kenntnis darüber, welche konkrete Unterseite unserer Internetseite durch die betroffene Person besucht wird.

Sofern die betroffene Person gleichzeitig bei Facebook eingeloggt ist, erkennt Facebook mit jedem Aufruf unserer Internetseite durch die betroffene Person und während der gesamten Dauer des jeweiligen Aufenthaltes auf unserer Internetseite, welche konkrete Unterseite unserer Internetseite die betroffene Person besucht. Diese Informationen werden durch die Facebook-Komponente gesammelt und durch Facebook dem jeweiligen Facebook-Account der betroffenen Person zugeordnet. Betätigt die betroffene Person einen der auf unserer Internetseite integrierten Facebook-Buttons, beispielsweise den „Gefällt mir“-Button, oder gibt die betroffene Person einen Kommentar ab, ordnet Facebook diese Information dem persönlichen Facebook-Benutzerkonto der betroffenen Person zu und speichert diese personenbezogenen Daten.

Facebook erhält über die Facebook-Komponente immer dann eine Information darüber, dass die betroffene Person unsere Internetseite besucht hat, wenn die betroffene Person zum Zeitpunkt des Aufrufs unserer Internetseite gleichzeitig bei Facebook eingeloggt ist; dies findet unabhängig davon statt, ob die betroffene Person die Facebook-Komponente anklickt oder nicht. Ist eine derartige Übermittlung dieser Informationen an Facebook von der betroffenen Person nicht gewollt, kann diese die Übermittlung dadurch verhindern, dass sie sich vor einem Aufruf unserer Internetseite aus ihrem Facebook-Account ausloggt.

Die von Facebook veröffentlichte Datenrichtlinie, die unter <a onclick="window.open(this.href); return false;" href="https://facebook.com/about/privacy/">https://facebook.com/about/privacy/</a> abrufbar ist, gibt Aufschluss über die Erhebung, Verarbeitung und Nutzung personenbezogener Daten durch Facebook. Ferner wird dort erläutert, welche Einstellungsmöglichkeiten Facebook zum Schutz der Privatsphäre der betroffenen Person bietet. Zudem sind unterschiedliche Applikationen erhältlich, die es ermöglichen, eine Datenübermittlung an Facebook zu unterdrücken. Solche Applikationen können durch die betroffene Person genutzt werden, um eine Datenübermittlung an Facebook zu unterdrücken.

<h3>Datenschutzbestimmungen zu Einsatz und Verwendung von YouTube</h3>
Der für die Verarbeitung Verantwortliche hat auf dieser Internetseite Komponenten von YouTube integriert. YouTube ist ein Internet-Videoportal, dass Video-Publishern das kostenlose Einstellen von Videoclips und anderen Nutzern die ebenfalls kostenfreie Betrachtung, Bewertung und Kommentierung dieser ermöglicht. YouTube gestattet die Publikation aller Arten von Videos, weshalb sowohl komplette Film- und Fernsehsendungen, aber auch Musikvideos, Trailer oder von Nutzern selbst angefertigte Videos über das Internetportal abrufbar sind.

Betreibergesellschaft von YouTube ist die YouTube, LLC, 901 Cherry Ave., San Bruno, CA 94066, USA. Die YouTube, LLC ist einer Tochtergesellschaft der Google Inc., 1600 Amphitheatre Pkwy, Mountain View, CA 94043-1351, USA.

Durch jeden Aufruf einer der Einzelseiten dieser Internetseite, die durch den für die Verarbeitung Verantwortlichen betrieben wird und auf welcher eine YouTube-Komponente (YouTube-Video) integriert wurde, wird der Internetbrowser auf dem informationstechnologischen System der betroffenen Person automatisch durch die jeweilige YouTube-Komponente veranlasst, eine Darstellung der entsprechenden YouTube-Komponente von YouTube herunterzuladen. Weitere Informationen zu YouTube können unter <a onclick="window.open(this.href); return false;" href="https://www.youtube.com/yt/about/">https://www.youtube.com/yt/about/</a> abgerufen werden. Im Rahmen dieses technischen Verfahrens erhalten YouTube und Google Kenntnis darüber, welche konkrete Unterseite unserer Internetseite durch die betroffene Person besucht wird.

Sofern die betroffene Person gleichzeitig bei YouTube eingeloggt ist, erkennt YouTube mit dem Aufruf einer Unterseite, die ein YouTube-Video enthält, welche konkrete Unterseite unserer Internetseite die betroffene Person besucht. Diese Informationen werden durch YouTube und Google gesammelt und dem jeweiligen YouTube-Account der betroffenen Person zugeordnet.

YouTube und Google erhalten über die YouTube-Komponente immer dann eine Information darüber, dass die betroffene Person unsere Internetseite besucht hat, wenn die betroffene Person zum Zeitpunkt des Aufrufs unserer Internetseite gleichzeitig bei YouTube eingeloggt ist; dies findet unabhängig davon statt, ob die betroffene Person ein YouTube-Video anklickt oder nicht. Ist eine derartige Übermittlung dieser Informationen an YouTube und Google von der betroffenen Person nicht gewollt, kann diese die Übermittlung dadurch verhindern, dass sie sich vor einem Aufruf unserer Internetseite aus ihrem YouTube-Account ausloggt.

Die von YouTube veröffentlichten Datenschutzbestimmungen, die unter <a onclick="window.open(this.href); return false;" href="https://policies.google.com/privacy">https://policies.google.com/privacy</a> abrufbar sind, geben Aufschluss über die Erhebung, Verarbeitung und Nutzung personenbezogener Daten durch YouTube und Google.

<h3>Zahlungsart: Datenschutzbestimmungen zu PayPal als Zahlungsart</h3>
Der für die Verarbeitung Verantwortliche hat auf dieser Internetseite Komponenten von PayPal integriert. PayPal ist ein Online-Zahlungsdienstleister. Zahlungen werden über sogenannte PayPal-Konten abgewickelt, die virtuelle Privat- oder Geschäftskonten darstellen. Zudem besteht bei PayPal die Möglichkeit, virtuelle Zahlungen über Kreditkarten abzuwickeln, wenn ein Nutzer kein PayPal-Konto unterhält. Ein PayPal-Konto wird über eine E-Mail-Adresse geführt, weshalb es keine klassische Kontonummer gibt. PayPal ermöglicht es, Online-Zahlungen an Dritte auszulösen oder auch Zahlungen zu empfangen. PayPal übernimmt ferner Treuhänderfunktionen und bietet Käuferschutzdienste an.

Die Europäische Betreibergesellschaft von PayPal ist die PayPal (Europe) S.à.r.l. & Cie. S.C.A., 22-24 Boulevard Royal, 2449 Luxembourg, Luxemburg.

Wählt die betroffene Person während des Bestellvorgangs in unserem Online-Shop als Zahlungsmöglichkeit „PayPal“ aus, werden automatisiert Daten der betroffenen Person an PayPal übermittelt. Mit der Auswahl dieser Zahlungsoption willigt die betroffene Person in die zur Zahlungsabwicklung erforderliche Übermittlung personenbezogener Daten ein.

Bei den an PayPal übermittelten personenbezogenen Daten handelt es sich in der Regel um Vorname, Nachname, Adresse, Email-Adresse, IP-Adresse, Telefonnummer, Mobiltelefonnummer oder andere Daten, die zur Zahlungsabwicklung notwendig sind.

Die Übermittlung der Daten bezweckt die Zahlungsabwicklung und die Betrugsprävention. Der für die Verarbeitung Verantwortliche wird PayPal personenbezogene Daten insbesondere dann übermitteln, wenn ein berechtigtes Interesse für die Übermittlung gegeben ist. Die zwischen PayPal und dem für die Verarbeitung Verantwortlichen ausgetauschten personenbezogenen Daten werden von PayPal unter Umständen an Wirtschaftsauskunfteien übermittelt. Diese Übermittlung bezweckt die Identitäts- und Bonitätsprüfung.

PayPal gibt die personenbezogenen Daten gegebenenfalls an verbundene Unternehmen und Leistungserbringer oder Subunternehmer weiter, soweit dies zur Erfüllung der vertraglichen Verpflichtungen erforderlich ist oder die Daten im Auftrag verarbeitet werden sollen.

Die betroffene Person hat die Möglichkeit, die Einwilligung zum Umgang mit personenbezogenen Daten jederzeit gegenüber PayPal zu widerrufen. Ein Widerruf wirkt sich nicht auf personenbezogene Daten aus, die zwingend zur (vertragsgemäßen) Zahlungsabwicklung verarbeitet, genutzt oder übermittelt werden müssen.

Die geltenden Datenschutzbestimmungen von PayPal können unter <a onclick="window.open(this.href); return false;" href="https://www.paypal.com/de/webapps/mpp/ua/privacy-full">https://www.paypal.com/de/webapps/mpp/ua/privacy-full</a> abgerufen werden.

<h3>Rechtsgrundlage der Verarbeitung</h3>
Art. 6 I lit. a DS-GVO dient dem Betreiber dieser Webseiten als Rechtsgrundlage für Verarbeitungsvorgänge, bei denen wir eine Einwilligung für einen bestimmten Verarbeitungszweck einholen. Ist die Verarbeitung personenbezogener Daten zur Erfüllung eines Vertrags, dessen Vertragspartei die betroffene Person ist, erforderlich, wie dies beispielsweise bei Verarbeitungsvorgängen der Fall ist, die für eine Lieferung von Waren oder die Erbringung einer sonstigen Leistung oder Gegenleistung notwendig sind, so beruht die Verarbeitung auf Art. 6 I lit. b DS-GVO. Gleiches gilt für solche Verarbeitungsvorgänge die zur Durchführung vorvertraglicher Maßnahmen erforderlich sind, etwa in Fällen von Anfragen zur unseren Produkten oder Leistungen. Unterliegt der Betreiber dieser Webseite einer rechtlichen Verpflichtung durch welche eine Verarbeitung von personenbezogenen Daten erforderlich wird, wie beispielsweise zur Erfüllung steuerlicher Pflichten, so basiert die Verarbeitung auf Art. 6 I lit. c DS-GVO. In seltenen Fällen könnte die Verarbeitung von personenbezogenen Daten erforderlich werden, um lebenswichtige Interessen der betroffenen Person oder einer anderen natürlichen Person zu schützen. Dies wäre beispielsweise der Fall, wenn ein Besucher in unseren Räumen verletzt werden würde und daraufhin sein Name, sein Alter, seine Krankenkassendaten oder sonstige lebenswichtige Informationen an einen Arzt, ein Krankenhaus oder sonstige Dritte weitergegeben werden müssten. Dann würde die Verarbeitung auf Art. 6 I lit. d DS-GVO beruhen. Letztlich könnten Verarbeitungsvorgänge auf Art. 6 I lit. f DS-GVO beruhen. Auf dieser Rechtsgrundlage basieren Verarbeitungsvorgänge, die von keiner der vorgenannten Rechtsgrundlagen erfasst werden, wenn die Verarbeitung zur Wahrung eines berechtigten Interesses des Betreibers oder eines Dritten erforderlich ist, sofern die Interessen, Grundrechte und Grundfreiheiten des Betroffenen nicht überwiegen. Solche Verarbeitungsvorgänge sind uns insbesondere deshalb gestattet, weil sie durch den Europäischen Gesetzgeber besonders erwähnt wurden. Er vertrat insoweit die Auffassung, dass ein berechtigtes Interesse anzunehmen sein könnte, wenn die betroffene Person ein Kunde des Verantwortlichen ist (Erwägungsgrund 47 Satz 2 DS-GVO).

<h3>Dauer, für die die personenbezogenen Daten gespeichert werden</h3>
Das Kriterium für die Dauer der Speicherung von personenbezogenen Daten ist die jeweilige gesetzliche Aufbewahrungsfrist. Nach Ablauf der Frist werden die entsprechenden Daten routinemäßig gelöscht, sofern sie nicht mehr zur Vertragserfüllung oder Vertragsanbahnung erforderlich sind.

<h3>Gesetzliche oder vertragliche Vorschriften zur Bereitstellung der personenbezogenen Daten; Erforderlichkeit für den Vertragsabschluss; Verpflichtung der betroffenen Person, die personenbezogenen Daten bereitzustellen; mögliche Folgen der Nichtbereitstellung</h3>
Wir klären Sie darüber auf, dass die Bereitstellung personenbezogener Daten zum Teil gesetzlich vorgeschrieben ist (z.B. Steuervorschriften) oder sich auch aus vertraglichen Regelungen (z.B. Angaben zum Vertragspartner) ergeben kann. Mitunter kann es zu einem Vertragsschluss erforderlich sein, dass eine betroffene Person uns personenbezogene Daten zur Verfügung stellt, die in der Folge durch uns verarbeitet werden müssen. Die betroffene Person ist beispielsweise verpflichtet uns personenbezogene Daten bereitzustellen, wenn der Betreiber dieser Webseite mit ihr einen Vertrag abschließt. Eine Nichtbereitstellung der personenbezogenen Daten hätte zur Folge, dass der Vertrag mit dem Betroffenen nicht geschlossen werden könnte. Vor einer Bereitstellung personenbezogener Daten durch den Betroffenen muss sich der Betroffene an einen unserer Mitarbeiter wenden. Unser Mitarbeiter klärt den Betroffenen einzelfallbezogen darüber auf, ob die Bereitstellung der personenbezogenen Daten gesetzlich oder vertraglich vorgeschrieben oder für den Vertragsabschluss erforderlich ist, ob eine Verpflichtung besteht, die personenbezogenen Daten bereitzustellen, und welche Folgen die Nichtbereitstellung der personenbezogenen Daten hätte.

<h3>Beendigung deines Nutzungsvertrages</h3>
Jedermann auf unserer Webseite kann im eigenen Ermessen sein Benutzerkonto selbständig löschen. Mit dieser Löschung werden alle persönlichen Daten entfernt, und wir können sie nicht wiederherstellen.',
	'JVPPDMT_REJECTION'						=> 'Ablehnung',
	'JVPPDMT_USED_COOKIE' => [
		'<strong>Cookies, die vom phpBB-Forum verwendet werden:</strong>',
		'%1$s_cookie_status: Wird benutzt, um die Erlaubnis zur Verwendung von Cookies zu speichern, wenn du unsere Webseite besuchst.',
		'%1$s_k: Wird benutzt, um den automatischen Login Dienst zu nutzen (Angemeldet bleiben).',
		'%1$s_lang: Wenn ein Gastbenutzer die Sprache ändert, wird dieses Cookie erstellt. Diese sitzung endet, wenn der Browser geschlossen wird.',
		'%1$s_sid: Beinhaltet die Sitzungs-ID. Mit diesem Cookie wird in Verbindung mit %1$s_u der Nutzer identifiziert.',
		'%1$s_u: Die Benutzer-ID des Benutzers wird hier abgelegt.',
		'%1$s_track: Markieren von gelesenen Beiträgen für Gäste.',

		/* Wenn du die Erweiterung (phpBB Arcade) nicht verwendest, dann füge die Kommentarzeichen // am Beginn der Zeile ein. */
		'<br><strong>Cookies, die von der Spielhalle verwendet werden:</strong>',
		'%1$s_arcade_sid: Enthält die Kennung (ID) der Spielesitzung zur Verwendung in der phpBB Arcade.',
		'%1$s_arcade_pd: Enthält die Kennung (ID) des aktuellen Spiels zur Verwendung in der phpBB Arcade.',
		'%1$s_arcade_popup: Beinhaltet die Einstellungen, wenn ein Spiel im Pop-Up-Fenster gespielt wird.',
		'%1$s_arcade_lighting: Beinhaltet die Benutzereinstellung zur Hintergrundbeleuchtung für Spiele.',
		'%1$s_arcade_info_block: Beinhaltet die Benutzereinstellung zur Sichtbarkeit des Infoblocks während des Spiels.',

		/* Wenn du die Erweiterung (JV Footer chat) nicht verwendest, dann füge die Kommentarzeichen // am Beginn der Zeile ein. */
		'<br><strong>Cookie, welches vom JV Footer Chat benutzt wird:</strong>',
		'%1$s_jv_chat_data: Enthält die Einstellungen des Footer Chat-Moduls und die Kennung (ID) der Benutzer, mit denen wir uns unterhalten.',

		/* Wenn du die Erweiterung (JV Shoutbox)  nicht verwendest, dann füge die Kommentarzeichen // am Beginn der Zeile ein. */
		'<br><strong>Cookie, welches von der JV Shoutbox verwendet wird:</strong>',
		'%1$s_jv_shout_close_: Wird auf allen Seiten verwendet, auf denen du den Shoutbox-Block geschlossen hast. Jede Seite erstellt ein Cookie im eigenen Namen. Zum Beispiel wird es auf der Forenübersicht wie folgt benannt werden: %1$s_jv_shout_close_index.',

		/* Wenn du die Erweiterung (Collapsible Forum Categories)  nicht verwendest, dann füge die Kommentarzeichen // am Beginn der Zeile ein. */
		'<br><strong>Cookie, welches von Collapsible Forum Categories verwendet wird:</strong>',
		'%1$s_ccat: Speichert die persönliche Einstellung über ein- oder ausgeklappte Kategorieboxen.',
	],
]);
