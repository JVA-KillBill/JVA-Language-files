<?php
/**
*
* @package phpBB Arcade
* @version $Id: activation.php 173 2024-01-14 12:28:15Z KillBill $
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

$lang = array_merge($lang, [
	'ACP_PHPBB_ARCADE_SYSTEM_EXPLAIN'				=> '<legend>Gedetailleerde beschrijving van activering</legend>
De gegevens die tijdens de activering worden verzonden, geven het status niveau van de betrokken website “%2$s” weer.<br>
Bovendien kunnen we aan de hand van de verstrekte activeringssleutel achterhalen of de betreffende website live is of slechts een testweb pagina.<br><br>
<div>Gegevens opgeslaan na activering:</div>
<ul>
	<li>Eigen phpBB Arcade ID</li>
	<li>Website-adres van de activator</li>
	<li>Gebruikte phpBB versienummer</li>
	<li>Gebruikte phpBB Arcade versienummer</li>
	<li>Activatiedatum</li>
	<li>Activatiesleutel</li>
	<li>Tijd voor het overslaan van activerings advertenties</li>
	<li>Dagelijkse speellimiet voor activering</li>
</ul>

<div>Persoonlijke gegevens opgeslaan na activering:</div>
<ul>
	<li>Gebruikersnaam van de activator</li>
	<li>IP adres van de activator</li>
	<li>E-mail adres van de activator</li>
</ul>

<div>Geregistreerde websites stellen je in staat om aanvullende persoonlijke informatie op te halen van de “%2$s” website:</div>
<ul>
	<li>Gebruikersnaam van de activator op “%2$s”</li>
	<li>Groep van de activator op “%2$s”</li>
	<li>E-mail adres van de activator op “%2$s”</li>
</ul>

<div>Gebruik van gegevens:</div>
<ul>
	<li>Het phpBB Arcade ID helpt je om je website veilig te identificeren.</li>
	<li>Met het websiteadres kan je controleren of de website op de “%2$s” website is geregistreerd.</li>
	<li>Dankzij de phpBB en phpBB Arcade versienummers kunnen we bepalen of de betreffende website overeenstemmend is of niet.</li>
	<li>De activeringssleutel bepaalt waar de betrokken website recht op heeft.</li>
	<li>Tijd voor het overslaan van advertenties is het tijdstip waarop een gebruiker in aanmerking komt om een advertentie over te slaan.</li>
	<li>De dagelijkse speellimiet beperkt het aantal spellen dat per dag kan worden gespeeld. Zodra de limiet is bereikt, kunnen er die dag geen spellen meer worden gespeeld.</li>
</ul>

<div>Gebruik van persoonlijke informatie:</div>
<ul>
	<li>Met de gebruikersnaam kan je bepalen of de gebruiker in kwestie bekend is op de “%2$s” website.</li>
	<li>We gebruiken het IP-adres als de gebruiker een wet heeft overtreden of een misdrijf heeft begaan.</li>
	<li>Het e-mailadres wordt gebruikt wanneer we contact moeten opnemen met de betrokken gebruiker.</li>
</ul>

<br>

<h2>Gedetailleerde beschrijving van JVA Game Intro</h2>
<hr>
<div>Beheerdersfuncties:</div>
<ul>
	<li>“JVA Game Intro” maakt een aantal instellingen mogelijk. In de eerste plaats kan je kiezen of je het wilt weergeven of niet. Als je het niet wilt zien, wordt het spel onmiddellijk geladen.</li>
	<li>Je kan ook je eigen logo specificeren, dit werkt in drie stappen:
		<ol>
			<li>Het basislogo wordt weergegeven.</li>
			<li>Je kunt een tekstlogo maken dat het gewone logo overschrijft.</li>
			<li>Je kunt je eigen afbeeldingslogo maken en uploaden naar de map “[root]/arcade/assets/images/” met de naam “logo.png”, die alles zal overschrijven.</li>
		</ol>
	</li>
	<li>Veel spellen kunnen groot zijn. Sommige spellen kunnen tot 100 MB groot zijn, daarom zien gebruikers een lange tijd een wit leeg beeld wanneer ze een spel starten, dus ze kunnen vermoeden dat het spel defect is. Om dit te voorkomen, kan je de laadindicator voor de spellen inschakelen, zodat je kunt zien dat het spel nog steeds wordt geladen.<br>
		<strong>Opmerking:</strong> Het spel wordt alleen in de browsercache geladen. Als de browsercache niet is ingeschakeld, wordt het spel twee keer geladen, dus deze procedure zal het starten van spellen alleen maar vertragen.<br>
		<em>Deze functie is nutteloos als je het gebruik van de browsercache uitschakelt.</em>
	</li>
	<li>Je kunt het aantal hoogste scores instellen dat getoond moet worden en deze waarde kan liggen tussen 0 en 10.<br><br>
		<em class="arcade_attent">Houd er rekening mee dat deze instellingen alleen kunnen worden gebruikt met een systeem dat is geactiveerd met een prive-sleutel. Deze instellingen zijn niet beschikbaar op een systeem dat is geactiveerd met een gratis sleutel.</em>
	</li>
</ul>

<div>Gebruikersfuncties:</div>
<ul>
	<li>Met “JVA Game Intro” kunnen gebruikers spelbeschrijvingen, bedieningselementen en het huidige scorebord bekijken voordat het spel word gestart.</li>
	<li>Toont maximaal 10 gebruikers en de huidige superkampioen.</li>
</ul>

<br>

<h2>“%1$s” communicatiefuncties</h2>
<hr>
<ul>
	<li><span>Telkens dat je een spel start, wordt er verbinding gemaakt met de “%1$s” website.</span>
		<div><span>De volgende informatie wordt tijdens de verbinding verzonden:</span></div>
		<ol>
			<li>Het eigen phpBB Arcade-ID in gecodeerd (eenrichtingshash) formaat.</li>
			<li>Huidige versie van “JVA Game Intro”.</li>
			<li>Het adres van de website die de software gebruikt, in gecodeerde (PHP Base64) indeling.</li>
			<li>De activeringssleutel voor “phpBB Arcade” in gecodeerd (eenrichtingshash) formaat.</li>
			<li>De huidige versie van de phpBB Arcade.</li>
			<li>De huidige versie van phpBB.

				<br><br>

				<div><span>Rol van verzonden gegevens:</span></div>
				<ol>
					<li>Het phpBB Arcade ID helpt je om je website veilig te identificeren</li>
					<li>Door de “JVA Game Intro” versie aan te vinken, kan je een melding krijgen als je een onaangepaste versie gebruikt of als er een nieuwere versie wordt uitgebracht.</li>
					<li>Het adres van de website is erg belangrijk omdat het ons in staat stelt de informatie op basis daarvan terug te sturen.</li>
					<li>Meer over de rol van de activeringssleutel:
						<ol>
							<li>Het belangrijkste verschil tussen “Test” en “Gratis” is wanneer een wachttijd wordt geactiveerd. “Test” geactiveerde websites kunnen een langere wachttijd hebben en de website is dan geclassificeerd als een “test webpagina”. De “Test” en “Gratis” geactiveerde software kan advertenties weergeven en kan het aantal keren spelen beperken.<br>
								De wachttijd wordt ingeschakeld en kan worden bepaald door de “%2$s”.<br>
								Het maximum aantal keren spelen wordt ingeschakeld en kan worden bepaald door de “%2$s”.<br>
								De “Test” en de “Gratis” versies hebben geen vervaldatum.
							</li>
							<li>De privésleutel kan een vervaldatum hebben of kan alleen worden gebruikt voor een specifieke phpBB Arcade versie. Software geactiveerd met een privésleutel geniet van volledige advertentievrijheid. <em>Dit is alleen van toepassing op “JVA Game Intro”</em>.<br>Bovendien zijn websites die een privésleutel gebruiken niet onderworpen aan de dagelijkse speellimiet.</li>
						</ol>
					</li>
					<li>Het controleren van de phpBB Arcade versie is ook erg belangrijk om te kijken of “JVA Game Intro” in overeenstemming is met de opgegeven versie.</li>
				</ol>
			</li>
		</ol>
	</li>
	<li>Met deze communicatiemogelijkheden wordt het aantal keren dat spellen zijn gestart, opgeslaan en overgedragen naar een statistiek. Op basis van deze statistieken wordt de huidige positie van deze website bepaald. Voor meer informatie klik <a onclick="window.open(this.href); return false;" href="%5$s"><strong>» HIER «</strong></a>.</li>
	<li>Als er reclame wordt verzonden vanaf onze website of er is een wachttijd ingesteld, dan wordt deze zo ingesteld dat deze verschijnt voordat het spel begint. Als de “JVA Game Intro” niet is ingeschakeld, wordt deze automatisch geactiveerd.</li>
	<li>Als het aantal spellen per dag beperkt is, kunnen die dag geen spellen meer worden gespeeld op websites die de maximale waarde overschrijden.</li>
	<li>Deze informatie wordt op twee manieren teruggestuurd:
		<ol>
			<li>Vlotte update-informatie word door “%1$s” naar je teruggestuurd. Het verschijnt in “JVA Game Intro”. Deze informatieweergave is alleen zichtbaar voor de oprichters en blokkeert het spel niet.</li>
			<li>Algemene informatie, die de volledige “JVA Game Intro” interface gebruikt, dus deze informatie staat geen verder spelen meer toe.
				<div><span>De redenen voor het verschijnen van algemene informatie:</span></div>
				<ol>
					<li>Een onmiddellijke update is vereist.</li>
					<li>Als een speltype niet wordt ondersteund.</li>
					<li>Wanneer een website zijn dagelijkse limiet bereikt.</li>
					<li>De activeringssleutel is verlopen. In dit geval moet je de software opnieuw activeren. Kies in het ACP “Test” of “Gratis”, als je een nieuwe privésleutel hebt, kan je die gebruiken.</li>
					<li>De software gebruiker schendt het <strong>“<a onclick="window.open(this.href); return false;" href="%4$s" title="GHV license">licentie</a>”</strong> contract, of een <strong>niet geregistreerde</strong> website wordt gebruikt. In beide gevallen kan het gebruik van de software worden uitgeschakeld.</li>
				</ol>
			</li>
		</ol>
	</li>
	<li>De “%1$s” kan de volgende informatie terugsturen:
		<ol>
			<li>Verifieer websites.</li>
			<li>Wachttijd.</li>
			<li>Reclame.</li>
			<li>Stuurt update informatie terug.</li>
			<li>Stuurt algemene informatie terug.</li>
			<li>De “%2$s” stelt dat het tijdens de verbinding geen databasewijzigingen kan en wil doorvoeren die op andere websites zijn geïmplementeerd! Het is erg belangrijk om 100%% beveiliging te hebben tussen de twee servers tijdens de verbinding.<br>Daarom kan de software alleen worden geactiveerd door de oprichter van de website.</li>
		</ol>
	</li>
	<li>Het gebruik van “JVA Game Intro” op localhost wordt niet ondersteund, maar de software kan worden uitgevoerd. Er is geen dataverbinding op localhost, maar de wachttijd is standaard ingesteld op 5 seconden.</li>
</ul>',
	'ACP_PHPBB_ARCADE_SYSTEM_INSTRUCTION'			=> 'phpBB Arcade Instructies',
	'ACP_PHPBB_ARCADE_SYSTEM_INSTRUCTION_EXPLAIN'	=> 'De “phpBB Arcade” software is <a onclick="window.open(this.href); return false;" href="%3$s" title="JVA License">gelicencieerd</a> en onderhouden door de “%1$s” website.',
]);
