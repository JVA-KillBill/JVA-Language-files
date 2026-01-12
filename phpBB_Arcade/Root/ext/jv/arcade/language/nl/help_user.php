<?php
/**
*
* @package phpBB Arcade
* @version $Id: help_user.php 174 2024-01-14 13:44:56Z Alexia1964 $
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
	'ARCADE_HELP_FAQ_ARCADE_CREATE_ANSWER'				=> 'Deze extensie (originele vorm) is gemaakt door <a href="https://jv-arcade.com/">JV-Arcade Group</a>, tevens eigenaar van de auteursrechten. Het werd ontwikkeld en gepubliceerd onder de <a href="https://jv-arcade.com/License.html.">JV-Aracde License</a> en mag niet worden verspreid of gewijzigd. Voor meer informatie zie de link.',
	'ARCADE_HELP_FAQ_ARCADE_CREATE_QUESTION'			=> 'Wie schreef de arcade?',
	'ARCADE_HELP_FAQ_ARCADE_NOT_AVAILABLE_X_ANSWER'		=> 'Deze extensie is vervaardigd en in licentie gegeven door de JV-Arcade Group. Als je denkt dat er meer functies of functionaliteiten nodig zijn in de arcade, of als je een fout hebt gevonden, bezoek dan de <a href="https://jv-arcade.com/New_Ideas.html">JV-Arcade Nieuw Idëen Centrum</a>, waar je meer informatie kunt krijgen.',
	'ARCADE_HELP_FAQ_ARCADE_NOT_AVAILABLE_X_QUESTION'	=> 'Waarom is functie X niet aanwezig?',
	'ARCADE_HELP_FAQ_BLOCK_ARCADE'						=> 'Vragen over phpBB Arcade',
	'ARCADE_HELP_FAQ_BLOCK_CAT'							=> 'Vragen over categorieën',
	'ARCADE_HELP_FAQ_BLOCK_CHALLENGE'					=> 'Vragen over uitdagingen',
	'ARCADE_HELP_FAQ_BLOCK_FAV'							=> 'Vragen over favoriete spellen',
	'ARCADE_HELP_FAQ_BLOCK_GENERAL'						=> 'Algemene vragen',
	'ARCADE_HELP_FAQ_BLOCK_GROUP_TOUR'					=> 'Vragen over groep toernooien',
	'ARCADE_HELP_FAQ_BLOCK_INTRO'						=> 'Inleiding',
	'ARCADE_HELP_FAQ_BLOCK_PLAYING'						=> 'Vragen over spelen',
	'ARCADE_HELP_FAQ_BLOCK_POINTS'						=> 'Vragen over het puntensysteem',
	'ARCADE_HELP_FAQ_BLOCK_SEARCH'						=> 'Vragen over zoeken',
	'ARCADE_HELP_FAQ_BLOCK_TOUR'						=> 'Vragen over toernooien',
	'ARCADE_HELP_FAQ_BLOCK_USER_SET'					=> 'Gebruikersinstellingen',
	'ARCADE_HELP_FAQ_CAT_AGE_ANSWER'					=> 'Het is mogelijk voor beheerders om eenvoudige spelletjes voor kinderen in een categorie te verzamelen en alleen minderjarigen kunnen erin spelen. Het is ook mogelijk dat spellen in een categorie staan die niet geschikt zijn voor minderjarigen, en deze alleen door volwassenen mogen worden gespeeld.',
	'ARCADE_HELP_FAQ_CAT_AGE_QUESTION'					=> 'Waarom zijn sommige categorieën beschermd door een leeftijdsgrens?',
	'ARCADE_HELP_FAQ_CAT_PASSWORD_ANSWER'				=> 'Als een categorie beveiligd is met een wachtwoord, moet je een verzoek indienen bij de beheerder.',
	'ARCADE_HELP_FAQ_CAT_PASSWORD_QUESTION'				=> 'Wat kan ik doen als de categorie een wachtwoord nodig heeft?',
	'ARCADE_HELP_FAQ_CAT_STAT_ANSWER'					=> 'Ja, wanneer je een categorie aanklikt, vind je een link “categorie statistieken bekijken” naast de categorienaam.',
	'ARCADE_HELP_FAQ_CAT_STAT_QUESTION'					=> 'Is het mogelijk dat ik de statistieken kan zien voor individuele categorieën?',
	'ARCADE_HELP_FAQ_CAT_USER_PERMISSION_ANSWER'		=> 'Als je een categorie opent, vindt je onderaan het scherm “Permissies”, en jouw permissies zie je daaronder.',
	'ARCADE_HELP_FAQ_CAT_USER_PERMISSION_QUESTION'		=> 'Welke permissies zijn van toepassing voor mij?',
	'ARCADE_HELP_FAQ_CHALLENGE_ACCEPT_ANSWER'			=> 'Als je een uitdaging hebt ontvangen, moet je die eerst accepteren op de uitdagingen pagina en het spel daar starten. Dan zal de uitdaging correct starten.',
	'ARCADE_HELP_FAQ_CHALLENGE_ACCEPT_QUESTION'			=> 'Ik heb een uitdaging ontvangen, daarna het spel gespeeld, maar waarom geeft het nog steeds aan dat ik een uitdaging heb ontvangen?',
	'ARCADE_HELP_FAQ_CHALLENGE_ARRIVED_ANSWER'			=> 'Iemand wil een uitdaging met je spelen en stuurde je een uitnodiging. Je kunt het accepteren of weigeren.',
	'ARCADE_HELP_FAQ_CHALLENGE_ARRIVED_QUESTION'		=> 'Wat is een “verzoek voor uitdaging”?',
	'ARCADE_HELP_FAQ_CHALLENGE_BUG_GAME_ANSWER'			=> 'In dat geval gebruik je de link “Spel melden”. De uitdaging wordt onmiddellijk geannuleerd en de kosten worden teruggegeven.<br><i>Merk op dat het niet mogelijk is om fouten in het spel te rapporteren als een beheerder het systeem voor het melden van fouten uitschakelt.</i>',
	'ARCADE_HELP_FAQ_CHALLENGE_BUG_GAME_QUESTION'		=> 'Ik was uitgedaagd maar het spel is stuk, wat moet ik dan doen?',
	'ARCADE_HELP_FAQ_CHALLENGE_DRAW_BET_ANSWER'			=> 'Als een uitdaging met een gelijkspel eindigt, zal de inzet teruggegeven worden aan elke speler die deelnam.',
	'ARCADE_HELP_FAQ_CHALLENGE_DRAW_BET_QUESTION'		=> 'Wat gebeurt er met de inzet als de uitdaging in een gelijkspel eindigt?',
	'ARCADE_HELP_FAQ_CHALLENGE_END_ANSWER'				=> 'Elke gebruiker zal een melding ontvangen via privébericht als het zenden van privéberichten ingeschakeld is.',
	'ARCADE_HELP_FAQ_CHALLENGE_END_QUESTION'			=> 'Hoe weet ik dat een uitdaging is geëindigd?',
	'ARCADE_HELP_FAQ_CHALLENGE_EXP_TIME_ANSWER'			=> 'De vervaldatum geeft de tijd aan waarop de uitdaging automatisch wordt geannuleerd, gedurende deze tijd moeten de uitdagingen worden aanvaard.',
	'ARCADE_HELP_FAQ_CHALLENGE_EXP_TIME_QUESTION'		=> 'Wat is de “Vervaltijd”?',
	'ARCADE_HELP_FAQ_CHALLENGE_GAME_CHAMP_ANSWER'		=> 'Als je in het normale scherm speelt, kun je vakken aan de zijkant vinden, inclusief het vak “Spelopties”. In dit vak vind je de link “Kampioen uitdagen”. Je kunt de spelkampioen eenvoudig uitdagen door op deze link te klikken. Hij/zij moet de uitdaging aangaan voordat het duel kan beginnen.',
	'ARCADE_HELP_FAQ_CHALLENGE_GAME_CHAMP_QUESTION'		=> 'Hoe kan ik eenvoudig een spel kampioen uitdagen?',
	'ARCADE_HELP_FAQ_CHALLENGE_ONGOING_ANSWER'			=> 'Dit zijn gestarte uitdagingen die zijn geaccepteerd en die nu door beide partijen gespeeld kunnen worden. Als er een fout wordt gerapporteerd voor het spel, zal de uitdaging worden geannuleerd.',
	'ARCADE_HELP_FAQ_CHALLENGE_ONGOING_QUESTION'		=> 'Wat betekent “lopende uitdagingen”?',
	'ARCADE_HELP_FAQ_CHALLENGE_PERMISSION_ANSWER'		=> 'De uitdaging is alleen zichtbaar als deze is geactiveerd en als de beheerder je toegang heeft gegeven tot de uitdagingen.',
	'ARCADE_HELP_FAQ_CHALLENGE_PERMISSION_QUESTION'		=> 'Waarom kan ik de uitdagingen niet zien?',
	'ARCADE_HELP_FAQ_CHALLENGE_POINTS_ANSWER'			=> 'Als een gebruiker je heeft uitgedaagd en een weddenschap heeft ingesteld, bijvoorbeeld 100 punten, dan wordt dit van je saldo afgetrokken op het moment dat de uitdaging binnenkomt. Als het spel bijvoorbeeld 5 punten kost, wordt dit ook afgetrokken. Het systeem zal dus in totaal 105 punten van je saldo aftrekken om de volledige kosten van de uitdaging te dekken. Als je deze uitdaging afwijst, krijg je dit bedrag onmiddellijk terug. Zelfs als de uitdaging wordt geaccepteerd, maar het spel niet wordt gespeeld, of de tijd van de uitdaging is verstreken voordat je begint, worden je inzet en spelkosten ook terugbetaald.',
	'ARCADE_HELP_FAQ_CHALLENGE_POINTS_QUESTION'			=> 'Ik werd uitgedaagd en verloor veel van mijn saldo, waarom?',
	'ARCADE_HELP_FAQ_CHALLENGE_PRACTICE_ANSWER'			=> 'Ja, wacht om de uitdaging aan te gaan en je kunt dit spel spelen zonder in het duel te zijn. Maar als je de uitdaging eenmaal hebt aangenomen, wordt deze geëvalueerd en is er geen kans meer om verder te oefenen.',
	'ARCADE_HELP_FAQ_CHALLENGE_PRACTICE_QUESTION'		=> 'Er is een uitdaging voor mij binnengekomen, is er een manier om te oefenen?',
	'ARCADE_HELP_FAQ_CHALLENGE_PREVENT_ANSWER'			=> 'Je kunt uitdagingen deactiveren in je gebruikerspaneel.',
	'ARCADE_HELP_FAQ_CHALLENGE_PREVENT_QUESTION'		=> 'Hoe kan ik voorkomen dat ik word uitgedaagd?',
	'ARCADE_HELP_FAQ_CHALLENGE_SENT_ANSWER'				=> 'Dit zijn de uitdagingen die je aan andere gebruikers hebt aangevraagd. Deze duels kunnen ook worden afgelast.',
	'ARCADE_HELP_FAQ_CHALLENGE_SENT_QUESTION'			=> 'Wat betekent “uitdaging verzonden”?',
	'ARCADE_HELP_FAQ_CHALLENGE_START_ANSWER'			=> 'Op de uitdagingen pagina klik je op de knop “uitdaging”, en kies je vervolgens de gewenste instellingen uit het formulier. Hier heb je de volgende opties:
															<ul>
																<li>Selecteer een spel uit de lijst.</li>
																<li>Selecteer een favoriete spel. <em>Alleen mogelijk als je een aantal favoriete spellen hebt gemarkeerd.</em></li>
																<li>Selecteer de tegenstander uit de gebruikerslijst.</li>
																<li>Selecteer een vriend. <em>Alleen mogelijk als je vrienden hebt gemarkeerd.</em></li>
															</ul>
															<br>Nadat je een spel en tegenstander hebt gekozen, kun je dit verzoek verzenden door op “Uitdaging” te klikken. Om de uitdaging aan te gaan, moet de tegenstander op het verzoek reageren.
															<br>Opmerking: <em>Als een puntensysteem is geïnstalleerd en actief is, kan je ook een weddenschap opgeven. De weddenschap kan vrij worden gekozen, of kan vooraf worden gedefinieerd door de beheerder.</em>',
	'ARCADE_HELP_FAQ_CHALLENGE_START_QUESTION'			=> 'Hoe start ik een uitdaging?',
	'ARCADE_HELP_FAQ_FAV_ANSWER'						=> 'Als je een spel als favoriet spel markeert, is het niet langer nodig om het te zoeken tussen het grote aantal spellen. In je favorietenlijst vind je die snel terug en je bespaart veel tijd.',
	'ARCADE_HELP_FAQ_FAV_HIGHLIGHT_ANSWER'				=> 'Je hebt de mogelijkheid om de spellen die je het vaakst speelt onder de favoriete spellen te markeren. Je kan dat doen in je gebruiker configuratiescherm.',
	'ARCADE_HELP_FAQ_FAV_HIGHLIGHT_QUESTION'			=> 'Ik heb te veel favoriete spellen. Hoe kan ik sommige spellen gemakkelijker vinden?',
	'ARCADE_HELP_FAQ_FAV_LIMIT_ANSWER'					=> 'Je hebt het maximale aantal spel favorieten opgeslaan dat de beheerder heeft ingesteld. Daarom kun je geen spel favorieten meer toevoegen, tenzij je oudere spel favorieten verwijdert. Of, als je de limiet te klein vindt, kan je een beheerder vragen om de limiet, indien mogelijk, te verhogen.',
	'ARCADE_HELP_FAQ_FAV_LIMIT_QUESTION'				=> '“Beperk fout” bij het toevoegen van een favoriet spel, wat betekent dat?',
	'ARCADE_HELP_FAQ_FAV_QUESTION'						=> 'Wat is het voordeel om een spel te markeren als favoriet spel?',
	'ARCADE_HELP_FAQ_GENERAL_GAME_BUG_ANSWER'			=> 'Defecte spellen dienen gemeld te worden aan de beheerder zodat het spel zo snel mogelijk gerepareerd kan worden. Elk spel bevat een link naar een meld spel die in dit geval moet worden gebruikt. Het gebruik van de link is belangrijk omdat deze ook alle spelinformatie bevat die we niet apart hoeven te schrijven, alleen het fout verschijnsel dat optreedt. In de beschrijving van de fout is het raadzaam om aan te geven in welke browser de fout is opgetreden, omdat het niet zeker is dat de fout optreedt bij gebruik van een andere browser. Het is ook de moeite waard om het apparaat te beschrijven waarop de fout is opgetreden Vb: (pc, tablet of mobiel). Geef ook de resolutie op van het scherm waarop je het spel speelt, aangezien de fout mogelijk niet optreedt bij een andere resolutie.<br><i>Merk op dat het niet mogelijk is om fouten in het spel te rapporteren als een beheerder het systeem voor het melden van fouten uitschakelt.</i>',
	'ARCADE_HELP_FAQ_GENERAL_GAME_BUG_QUESTION'			=> 'Wat moet je doen als een spel niet werkt?',
	'ARCADE_HELP_FAQ_GENERAL_GAME_DOWNLOAD_ANSWER'		=> 'Ja, als het is toegestaan door de beheerder.',
	'ARCADE_HELP_FAQ_GENERAL_GAME_DOWNLOAD_QUESTION'	=> 'Kunnen de spellen gedownload worden?',
	'ARCADE_HELP_FAQ_GENERAL_GAME_NAME_LINK_ANSWER'		=> 'De spelnamen worden getoond als een link, indien je toestemming hebt om het spel te spelen.',
	'ARCADE_HELP_FAQ_GENERAL_GAME_NAME_LINK_QUESTION'	=> 'De meeste namen van de spellen zijn linken, maar sommige verschijnen als gewone platte tekst. Waarom?',
	'ARCADE_HELP_FAQ_GENERAL_GAME_RANDOM_ANSWER'		=> 'Een willekeurig spel wordt gekozen door het systeem, het is een leuke optie daar de spellen willekeurig gekozen worden uit alle categorieën. Het zal dan ook op lange termijn nooit vervelen omdat je nooit hetzelfde spel speelt.',
	'ARCADE_HELP_FAQ_GENERAL_GAME_RANDOM_QUESTION'		=> 'Wat is een willekeurig spel?',
	'ARCADE_HELP_FAQ_GENERAL_GAME_RATING_ANSWER'		=> 'Spelbeoordeling is een zeer handige functie. Het maakt het voor gebruikers gemakkelijker om te zoeken, want als een spel zo goed mogelijk wordt beoordeeld, zal het spel altijd hoger in de statistieken komen, zodat gebruikers het best beoordeelde spel gemakkelijk kunnen vinden.',
	'ARCADE_HELP_FAQ_GENERAL_GAME_RATING_QUESTION'		=> 'Wat heb je aan het beoordelen van spellen?',
	'ARCADE_HELP_FAQ_GENERAL_GAME_USER_STAT_ANSWER'		=> 'Als je de permissie hebt om dit te doen, klik dan op het menu item “Statistieken” in het arcade menu en selecteer het betreffende spel en de betreffende gebruiker onderaan de pagina.',
	'ARCADE_HELP_FAQ_GENERAL_GAME_USER_STAT_QUESTION'	=> 'Hoe bekijk ik gebruikers statistieken voor een specifiek spel?',
	'ARCADE_HELP_FAQ_GENERAL_RANG_LIST_ANSWER'			=> 'De ranglijst houdt rekening met het aantal verdiende trofeeën, hoe meer trofeeën een gebruiker heeft, hoe beter de rang. De definitie van de rangafbeelding wordt bepaald door de beheerder door elke rang afbeelding te koppelen aan een bepaald aantal trofeeën.',
	'ARCADE_HELP_FAQ_GENERAL_RANG_LIST_QUESTION'		=> 'Wat is een ranglijst',
	'ARCADE_HELP_FAQ_GENERAL_SUPER_CHAMP_ANSWER'		=> 'De superkampioen is de gebruiker met de hoogste score in het spel. De superkampioen heeft geen trofee tenzij hij ook op de eerste plaats staat. Als de beheerder de arcade reset, heb je de mogelijkheid om de superkampioenen te behouden, zodat je de mogelijkheid hebt om te zien wat de hoogste score ooit in een spel was.',
	'ARCADE_HELP_FAQ_GENERAL_SUPER_CHAMP_QUESTION'		=> 'Wat is een superkampioen?',
	'ARCADE_HELP_FAQ_GENERAL_USER_RECORD_ANSWER'		=> 'Ja, klik op de link “Alle scores bekijken” onder de avatar in de gebruikers statistieken.',
	'ARCADE_HELP_FAQ_GENERAL_USER_RECORD_QUESTION'		=> 'Kan ik de resultaten van een gebruiker bekijken?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_EXPT_ANSWER'			=> 'Ja, het wordt weergegeven na de start van het toernooi.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_EXPT_RESULT_QUESTION'	=> 'Is de vervaldatum zichtbaar?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_EXP_ANSWER'				=> 'Als het toernooi begint, krijg je een vervaltijd, als het toernooi niet binnen deze tijd is voltooid, wordt het automatisch verwijderd.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_EXP_RESULT_QUESTION'	=> 'Een lopend toernooi is verdwenen, waarom?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_PLAY_ANSWER'			=> 'Je kunt het spel spelen na de start van het toernooi. Als je doorgaat met het bereiken van het volgende niveau, dan begint het volgende spel als je tegenstander dat niveau ook heeft bereikt. Maar bij elke start van het spel, als het spel deelneemt aan een wedstrijd, zie je informatie.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_PLAY_RESULT_QUESTION'	=> 'Wanneer kan ik het toernooispel spelen?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_SCORE_ANSWER'			=> 'Ja, nadat jullie allebei het spel hebben gespeeld. Om de behaalde score te bekijken beweeg je de muis over de avatar van je tegenstander en je ziet de behaalde score al.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_SCORE_RESULT_QUESTION'	=> 'Kan ik de score van mijn tegenstander zien?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_START_ANSWER'			=> 'Het toernooi begint automatisch wanneer alle plaatsen zijn bezet.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_START_RESULT_QUESTION'	=> 'Wanneer begint het toernooi?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_SUB_ANSWER'				=> 'Je kunt op de hoofdpagina van het groep toernooi zien of er een nieuw toernooi is. Klik in de structuur van de toernooiboom op een lege plek in de onderste rij en je hebt je ingeschreven.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_SUB_RESULT_QUESTION'	=> 'Hoe kan ik me inschrijven voor het groep toernooi?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_UNSUB_ANSWER'			=> 'Ja, maar alleen als het toernooi nog niet is begonnen. Om je af te melden, klik je op je avatar in de bezette ruimte.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_UNSUB_RESULT_QUESTION'	=> 'Is er een manier om je uit te schrijven voor het toernooi?',
	'ARCADE_HELP_FAQ_INTRO_ARCADE_ANSWER'				=> 'De arcade biedt ontspanning voor de gebruikers met een veelheid van spellen. Toestemming voor het gebruik van de arcade wordt bepaald door de beheerder, maar bepaalde functies kunnen ook worden ingeschakeld/uitgeschakeld in je gebruikerspaneel. Daarom kan het handig zijn om de gebruikersgids door te lezen.',
	'ARCADE_HELP_FAQ_INTRO_ARCADE_QUESTION'				=> 'Wat is de arcade?',
	'ARCADE_HELP_FAQ_INTRO_FUN_ANSWER'					=> 'In de arcade zijn veel functies opgenomen, maar zijn alleen beschikbaar als de beheerder ze heeft geactiveerd.
															<br><strong>Functies:</strong>
															<ul>
																<li>Instellingen en aanpassingen.</li>
																<li>Spelcategorieën.</li>
																<li>Weergave van nieuwe spellen.</li>
																<li>Spelen van willekeurige spellen.</li>
																<li>Selecteren en opslaan favoriete spellen.</li>
																<li>Spellen waarderen.</li>
																<li>Spellen zoeken.</li>
																<li>Rapporteren van spelfouten.</li>
																<li>Downloaden van spellen.</li>
																<li>Spellen spelen in een nieuw scherm(popup).</li>
																<li>Spelen met volledig scherm.</li>
																<li>Spelgrootte aanpassen.</li>
																<li>Achtergrondverlichting voor spellen aan/uit.</li>
																<li>In-spel menu.</li>
																<li>Toernooien met diverse spellen tussen meerdere gebruikers.</li>
																<li>Daag andere leden uit met individuele spellen.</li>
																<li>Het creëren van willekeurige uitdagingen.</li>
																<li>Afzonderlijke gedetailleerde statistieken.</li>
																<li>Spel statistieken.</li>
																<li>Gebruikers statistieken.</li>
																<li>Categorie statistieken.</li>
																<li>Rangorde.</li>
																<li>Gebruik van puntensysteem (via de Punten-mod).</li>
																<li>En nog veel meer…</li>
															</ul>',
	'ARCADE_HELP_FAQ_INTRO_FUN_QUESTION'				=> 'Welke functies zijn opgenomen in de arcade?',
	'ARCADE_HELP_FAQ_INTRO_REG_ANSWER'					=> 'Afhankelijk van de instellingen van de beheerder van de arcade, kan het mogelijk zijn dat registratie niet nodig is om de spellen te spelen. Houd er rekening mee dat als je jezelf registreert en gebruik maakt van de arcade, je vervolgens gebruik kunt maken van meerdere extra functies. (Bijvoorbeeld, je score en vooruitgang bewaren, commentaar geven op spellen, je spellen als favoriet bewaren, spellen waarderen, een uitdaging sturen naar andere gebruikers, of meedoen met een gestart toernooi, en veel meer leuke opties). Het gebruik van deze functies is natuurlijk afhankelijk van de instellingen van de beheerder, het kan zijn dat sommige functies dan niet beschikbaar zijn voor jouw.',
	'ARCADE_HELP_FAQ_INTRO_REG_QUESTION'				=> 'Waarom moet ik me toch registreren?',
	'ARCADE_HELP_FAQ_PLAYING_BACKLIGHT_ANSWER'			=> 'De achtergrondverlichting is de verlichting van de velden rond het spel. Het uitschakelen van de achtergrondverlichting heeft drie handige eigenschappen.
															<ul>
																<li>Het verduistert de ruimte rond het spel om je niet te storen.</li>
																<li>Schakelt de knoppen rond het spel uit, zodat je niet per ongeluk op een link klikt, waardoor een andere pagina niet kan worden geladen terwijl je aan het spelen bent.</li>
																<li>Scrollen op webpagina’s is uitgeschakeld om per ongeluk scrollen tijdens het spel te voorkomen.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_BACKLIGHT_QUESTION'		=> 'Wat is de achtergrondverlichting?',
	'ARCADE_HELP_FAQ_PLAYING_BOARD_LOGOUT_ANSWER'		=> 'Hiervoor zijn twee mogelijke redenen:
															<ul>
																<li>De meest waarschijnlijke reden is dat je forumsessie is verlopen.</li>
																<li>De beheerder heeft alle gebruikers sessies verwijderd.</li>
																</ul>',
	'ARCADE_HELP_FAQ_PLAYING_BOARD_LOGOUT_QUESTION'		=> 'Bij het opslaan van een resultaat gooit de website me eruit, waarom?',
	'ARCADE_HELP_FAQ_PLAYING_GAME_MAX_MIN_ANSWER'		=> 'Het spel start altijd op de door de beheerder ingestelde grootte. De software controleert echter altijd of het ingestelde formaat past in de ruimte die voor het spel is toegewezen. Als de ruimte kleiner is, zal de software automatisch de grootte van de zichtbare ruimte detecteren en de grootte van het spel dienovereenkomstig aanpassen. Als je “Automatisch formaat spel aanpassen” in je eigen instellingen aanzet, dan houdt de software er ook rekening mee dat als het gezichtsveld groter is dan de ingestelde grootte van het spel, het spel automatisch wordt aangepast naar deze grootste maat. In geen geval zal de software toestaan dat de grootte van het spel uit het zicht verdwijnt, en voor een dergelijke detectie zal de software het spel verstoren en het formaat wijzigen.',
	'ARCADE_HELP_FAQ_PLAYING_GAME_MAX_MIN_QUESTION'		=> 'Op welke grootte start het spel?',
	'ARCADE_HELP_FAQ_PLAYING_GAME_RESIZE_ANSWER'		=> 'Hier zijn twee mogelijke redenen voor:
															<ul>
																<li>Het spel heeft de minimaal toegestane breedte of hoogte bereikt, namelijk 180px.</li>
																<li>Het spel heeft zijn maximale grootte in het gezichtsveld bereikt.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_GAME_RESIZE_QUESTION'		=> 'Waarom werken de formaatknoppen niet?',
	'ARCADE_HELP_FAQ_PLAYING_HIDDEN_SCORE_ANSWER'		=> 'Dit spel is een uitdaging met twee of meer spelers. Het resultaat voor alle betrokken gebruikers is verborgen totdat de uitdaging is afgelopen.',
	'ARCADE_HELP_FAQ_PLAYING_HIDDEN_SCORE_QUESTION'		=> 'Waarom staat de tekst “Verborgen” op de resultatenlijst of in de plaats van de uitslag van de kampioen?',
	'ARCADE_HELP_FAQ_PLAYING_HSD_ANSWER'				=> 'Ja dat is er. Zet Auto Zoom Spel aan in je instellingen en het spel begint op de grootst mogelijke grootte.',
	'ARCADE_HELP_FAQ_PLAYING_HSD_QUESTION'				=> 'Ik gebruik een beeldscherm met hoge resolutie en alle spellen beginnen klein, is er een oplossing?',
	'ARCADE_HELP_FAQ_PLAYING_INFO_BLOCK_ANSWER'			=> 'Als het infoblok niet zichtbaar is, kan het vergrendeld zijn en moet het vanuit het menu worden geopend.',
	'ARCADE_HELP_FAQ_PLAYING_INFO_BLOCK_QUESTION'		=> 'Het informatieblok staat aan in mijn instellingen, maar waarom zie ik het nog steeds niet?',
	'ARCADE_HELP_FAQ_PLAYING_MENU_BUT_ANSWER'			=> 'Er zijn in totaal 12 knoppen in het menu, maar het hangt van verschillende factoren af welke knoppen worden getoond.<br>Menuknoppen en hun functies:
															<ul>
																<li>1. Informatie - Geeft aan of er informatie is over een van de volgende dingen: (spelbeschrijving, spelbesturing, kampioen commentaar, of als we toestemming hebben om “Wie speelt er in de arcade?”) te bekijken.</li>
																<li>2. Volledig/normaal scherm - Altijd zichtbaar indien ondersteund door je browser.</li>
																<li>3. Topscores - Wordt weergegeven wanneer statistieken zijn ingeschakeld en er resultaten zijn.</li>
																<li>4. Opties - Altijd zichtbaar, maar de inhoud kan variëren als gevolg van permissie instellingen.</li>
																<li>5. Spelwaardering - Wordt weergegeven als we er toestemming voor hebben.</li>
																<li>6. Favorieten toevoegen/verwijderen - Wordt weergegeven wanneer we er toestemming voor hebben en de maximale limiet niet hebben bereikt.</li>
																<li>7. Spel draaien - Alleen zichtbaar als de spelinstelling dit toestaat en je een niet draaibaar apparaat gebruikt.</li>
																<li>8. Achtergrondverlichting in-/uitschakelen - Altijd zichtbaar in een normaal venster.</li>
																<li>9. Afspeeltijd - Altijd zichtbaar.</li>
																<li>10. Spel opnieuw starten - Altijd zichtbaar.</li>
																<li>11. Spelgegevens wissen - Het is zichtbaar wanneer de software detecteert dat het spel de lokale gegevensopslag van de browser gebruikt.</li>
																<li>12. Infoblok Openen/Sluiten - Zichtbaar indien ingeschakeld in onze instellingen.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_MENU_BUT_QUESTION'			=> 'Welke knoppen staan in het menu en wanneer zijn ze zichtbaar?',
	'ARCADE_HELP_FAQ_PLAYING_MENU_DATA_CLOSE_ANSWER'	=> 'Het gegevensveld kan op de volgende manieren worden gesloten:
															<ul>
																<li>1. Klik op de gegevenstitel.</li>
																<li>2. Klik op het menu.</li>
																<li>3. Dubbelklik op het gegevensveld.</li>
																<li>4. Klik buiten het gegevensveld.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_MENU_DATA_CLOSE_QUESTION'	=> 'Hoe sluit ik een gegevensveld dat in het menu is opgevraagd?',
	'ARCADE_HELP_FAQ_PLAYING_MENU_OPEN_ANSWER'			=> 'Om veiligheidsredenen is het menu uitgerust met een timer om te voorkomen dat het automatisch opent tijdens het afspelen. Het menu wordt geopend als je de knop minstens 0,5 seconde ingedrukt houdt.',
	'ARCADE_HELP_FAQ_PLAYING_MENU_OPEN_QUESTION'		=> 'Waarom word het menu niet geopend, zelfs als ik erop klik?',
	'ARCADE_HELP_FAQ_PLAYING_MOBILE_ANSWER'				=> 'Ja, alle spellen kunnen op een mobiele telefoon worden gestart. Als je echter alleen op een mobiele telefoon wilt spelen, kun je toetsenbordspellen uitfilteren in je spelinstellingen, omdat je deze spellen toch niet zonder toetsenbord kunt spelen.',
	'ARCADE_HELP_FAQ_PLAYING_MOBILE_QUESTION'			=> 'Kan ik op een mobiele telefoon spelen?',
	'ARCADE_HELP_FAQ_PLAYING_NOT_PLAY_ANSWER'			=> 'Dit kan vele oorzaken hebben:
															<ul>
																<li>Misschien heeft je browser “JavaScript” niet geïnstalleerd of is deze uitgeschakeld op deze pagina.</li>
																<li>De beheerder heeft je geen toestemming gegeven om te spelen.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_NOT_PLAY_QUESTION'			=> 'Ik kan geen spel spelen, waarom niet?',
	'ARCADE_HELP_FAQ_PLAYING_NOT_SAVE_SCORE_ANSWER'		=> 'Dit kan verschillende oorzaken hebben:
															<ul>
																<li>Zorg er eerst voor dat je browser is ingeschakeld om “Cookies” te gebruiken.</li>
																<li>Zorg dat je ingelogd bent.</li>
																<li>Het spel start niet correct.</li>
																<li>Het spel is stuk.</li>
																<li>De beheerder heeft geen toestemming gegeven voor het opslaan van scores.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_NOT_SAVE_SCORE_QUESTION'	=> 'Waarom kan ik mijn scores niet opslaan?',
	'ARCADE_HELP_FAQ_PLAYING_POPUP_ANSWER'				=> 'Ja, als dit is toegestaan door de beheerder.',
	'ARCADE_HELP_FAQ_PLAYING_POPUP_QUESTION'			=> 'Kan ik een spel spelen in een nieuw scherm?',
	'ARCADE_HELP_FAQ_PLAYING_RESET_GAME_DATA_ANSWER'	=> 'Als het spel de gegevens opslaat in de lokale opslag van de browser, zijn er twee opties voor het verwijderen van de gegevens. Als het spel de gegevens opslaat in een andere opslag, wat zeer zeldzaam is, moet je deze handmatig vinden en uit de browser verwijderen. Als je de gegevens van een ingesloten spel wilt verwijderen, moet je in dit geval naar de website gaan waar het spel zich bevindt en de gegevens van het spel in kwestie opzoeken in de browsegegevens van die website en deze verwijderen.<br>
Lokale opslaggegevens van browser verwijderen:
<ul>
	<li>Als je het spel momenteel speelt, open je het menu en klik je op de knop “Spelgegevens verwijderen”.</li>
	<li>Gebruik in het gebruiker configuratiescherm de module “Lokale opslag beheren” en daar kun je kiezen welke spelgegevens je wilt verwijderen.</li>
</ul>',
	'ARCADE_HELP_FAQ_PLAYING_RESET_GAME_DATA_QUESTION'	=> 'Is er een manier om het spel helemaal opnieuw te starten vanaf het begin?',
	'ARCADE_HELP_FAQ_PLAYING_RESTART_ANSWER'			=> 'De “Spel opnieuw starten” link is pas actief nadat het spel is gestart. Na gebruik kan de knop/link weer een tijd inactief zijn, hoe vaak deze weer gebruikt kan worden, wordt bepaald door de beheerder.',
	'ARCADE_HELP_FAQ_PLAYING_RESTART_QUESTION'			=> 'De link Spel opnieuw starten is inactief, waarom?',
	'ARCADE_HELP_FAQ_PLAYING_SESSION_ANSWER'			=> 'Ja, je hebt de mogelijkheid om het scherm in/uit te schakelen in de instellingen van de arcade. Op deze manier kun je zien hoeveel tijd er nog over is op de spelpagina voordat je sessie afloopt.<br>Als je weinig tijd over hebt, kun je best eerst uitloggen en dan weer inloggen voordat je gaat spelen.',
	'ARCADE_HELP_FAQ_PLAYING_SESSION_QUESTION'			=> 'Kan ik de tijd van mijn sessies zien?',
	'ARCADE_HELP_FAQ_PLAYING_WHITE_SCREEN_ANSWER'		=> 'Het kan een groot spel zijn, je zult dan moeten wachten totdat het geladen is, vaak is de oorzaak een trage internetverbinding. Dit kan worden voorkomen als we het gebruik van “Preloaders” niet uitschakelen in onze instellingen.',
	'ARCADE_HELP_FAQ_PLAYING_WHITE_SCREEN_QUESTION'		=> 'Waarom zie ik een wit scherm bij het opstarten van een spel?',
	'ARCADE_HELP_FAQ_POINTS_COST_ANSWER'				=> 'De spelkosten zijn de som, die bij elke start van het spel van je saldo wordt afgetrokken. Houd er rekening mee dat de kosten van afzonderlijke spellen of categorieën kunnen verschillen. De hoogte van de kosten wordt bepaald door de beheerder.',
	'ARCADE_HELP_FAQ_POINTS_COST_QUESTION'				=> 'Wat kost het om een spel te spelen?',
	'ARCADE_HELP_FAQ_POINTS_DOWNLOAD_COST_ANSWER'		=> 'De downloadkosten zijn het bedrag dat van je saldo wordt afgetrokken voor elk spel dat je downloadt. Houd er rekening mee dat de kosten van afzonderlijke spellen of categorieën kunnen verschillen. De hoogte van de kosten wordt bepaald door de beheerder.',
	'ARCADE_HELP_FAQ_POINTS_DOWNLOAD_COST_QUESTION'		=> 'Wat zijn de downloadkosten?',
	'ARCADE_HELP_FAQ_POINTS_JACKPOT_ANSWER'				=> 'De jackpot wordt gevormd door de kosten van het spel. Aan het begin van elk spel worden de spelkosten verzameld in een pot. Het groeit, totdat iemand deze jackpot heeft gewonnen, of totdat de limiet is bereikt. Het minimum/maximum bedrag van deze jackpot wordt bepaald door de beheerder.',
	'ARCADE_HELP_FAQ_POINTS_JACKPOT_QUESTION'			=> 'Wat is de jackpot?',
	'ARCADE_HELP_FAQ_POINTS_REWARD_ANSWER'				=> 'De beloning is normaal gesproken beschikbaar in twee gevallen: als een record wordt behaald en als er een superkampioen titel wordt gewonnen. Het bedrag van de beloning wordt bepaald door de beheerder.',
	'ARCADE_HELP_FAQ_POINTS_REWARD_QUESTION'			=> 'Wat is de beloning?',
	'ARCADE_HELP_FAQ_POINTS_SYSTEM_ANSWER'				=> 'Een puntensysteem is een complexe wijziging die de beheerder kan toevoegen om te gebruiken in het forum of de arcade. Als het puntensysteem in de arcade wordt gebruikt, kunnen verschillende kosten en beloningen worden gebruikt.',
	'ARCADE_HELP_FAQ_POINTS_SYSTEM_QUESTION'			=> 'Wat is het puntensysteem?',
	'ARCADE_HELP_FAQ_SEARCH_100PH_GAME_ANSWER'			=> 'Ja, als de naam van het spel dat je zoekt voorafgegaan wordt door een <strong>@</strong> teken.',
	'ARCADE_HELP_FAQ_SEARCH_100PH_GAME_QUESTION'		=> 'Ik wil dat de zoekmachine alleen de volledig identieke spelnaam geeft, is dat mogelijk?',
	'ARCADE_HELP_FAQ_SEARCH_EXISTS_NOT_FOUND_ANSWER'	=> 'Hier zijn drie mogelijke redenen voor:
															<ul>
																<li>Het spel is verwijderd.</li>
																<li>Je hebt geen toestemming meer om dit spel te spelen.</li>
																<li>Er is een categorie geselecteerd in de zoekmachine en het spel wordt daar niet vermeld. Wijzig in dat geval de categorie selectie in “Alle categorieën”.</li>
															</ul>',
	'ARCADE_HELP_FAQ_SEARCH_EXISTS_NOT_FOUND_QUESTION'	=> 'Ik ben op zoek naar een spel waarvan ik weet dat het bestaat, maar waarom geeft de zoekmachine het niet weer?',
	'ARCADE_HELP_FAQ_SEARCH_GAME_ANSWER'				=> 'Als de zoekfunctie aanstaat, dan vind je die in het midden van het zoekveld waar je de naam van het spel kunt ingeven. Je kunt ook naar de initialen van het spel zoeken door gewoon op de beginletter in de zoekopdracht te klikken. Je kan je zoekopdracht ook beperken tot een specifieke categorie door gewoon een categorie te selecteren. Als je een categorie opent en daar de zoekmachine gebruikt, zoekt de zoekmachine automatisch in die categorie Je kan dat natuurlijk voor alle categorieën gebruiken.',
	'ARCADE_HELP_FAQ_SEARCH_GAME_QUESTION'				=> 'Hoe kan ik een specifiek spel vinden?',
	'ARCADE_HELP_FAQ_SEARCH_SNIP_GAME_ANSWER'			=> 'De zoekmachine houdt automatisch rekening met de woorduitgangen. Als je dus <strong>pac</strong> intikt, krijg je het <strong>Pacman</strong> spel. Als je het woord <strong>pac</strong> intikt om het spel <strong>Big Pacman</strong> te krijgen, voer dan <strong>*</strong> in aan het einde van de naam waar je naar zoekt.',
	'ARCADE_HELP_FAQ_SEARCH_SNIP_GAME_QUESTION'			=> 'Hoe kan ik een spel zoeken als ik de naam niet precies weet?',
	'ARCADE_HELP_FAQ_TOUR_NO_RESULT_ANSWER'				=> 'Alleen de groep(en) die toelating hebben voor dit toernooi, kunnen deelnemen. Zorg ervoor dat je lid bent van deze groep(en).',
	'ARCADE_HELP_FAQ_TOUR_NO_RESULT_QUESTION'			=> 'Ik heb een spel gespeeld, maar waarom zie ik geen toernooi resultaten?',
	'ARCADE_HELP_FAQ_TOUR_PLAY_NUM_ANSWER'				=> 'Elke start van een spel wordt geteld, ongeacht of de score is opgeslaan of niet. Ook zullen de resultaten van niet opgeslagen spellen 0 zijn.',
	'ARCADE_HELP_FAQ_TOUR_PLAY_NUM_QUESTION'			=> 'Ik heb een spel gespeeld, maar de punten zijn niet opgeslaan. Waarom werd het aantal gespeelde spellen toch verhoogd?',
	'ARCADE_HELP_FAQ_TOUR_PRACTICE_ANSWER'				=> 'Ja, voordat het toernooi begint, kun je de spellen spelen om te oefenen. Maar als het toernooi al is begonnen, worden alle spellen die daarin zijn opgenomen, beoordeeld voor toernooien, ongeacht op welke plaats ze zijn begonnen en dan is er geen manier meer om verder te oefenen.',
	'ARCADE_HELP_FAQ_TOUR_PRACTICE_QUESTION'			=> 'Is er een manier om te oefenen voor toernooien?',
	'ARCADE_HELP_FAQ_TOUR_RIGHT_RESULT_ANSWER'			=> 'Als het opgegeven maximum aantal gespeelde spellen is bereikt, worden er geen resultaten meer geteld in het toernooi.',
	'ARCADE_HELP_FAQ_TOUR_RIGHT_RESULT_QUESTION'		=> 'Ik heb een spel gespeeld, maar ik zie geen resultaat in het toernooi, waarom niet?',
	'ARCADE_HELP_FAQ_USER_SET_CAT_STYLE_ANSWER'			=> 'De arcade kan getoond worden in verschillende stijlen, je kunt dit aanpassen naar de stijl die jij wilt. Let op: deze optie kan door de beheerder uitgezet worden.',
	'ARCADE_HELP_FAQ_USER_SET_CAT_STYLE_QUESTION'		=> 'Wat is de categorie stijl?',
	'ARCADE_HELP_FAQ_USER_SET_CHALL_DISABLE_ANSWER'		=> 'Misschien wil je het uitschakelen als je niet wilt dat een andere gebruiker je uitdaagt voor een kleine wedstrijd. Als je het uitschakelt, kan je zelf geen andere gebruiker uitdagen. Merk op dat de uitdaging ook kan worden uitgeschakeld door de beheerder.',
	'ARCADE_HELP_FAQ_USER_SET_CHALL_DISABLE_QUESTION'	=> 'Kan je de uitdaging ook uitschakelen?',
	'ARCADE_HELP_FAQ_USER_SET_CONFIG_ANSWER'			=> 'Als je een geregistreerde gebruiker bent, worden al je instellingen opgeslaan in de database. Om deze aan te passen klik je op de link gebruikerspaneel (meestal te vinden boven aan de pagina). Hier kun je al je instellingen veranderen.',
	'ARCADE_HELP_FAQ_USER_SET_CONFIG_QUESTION'			=> 'Hoe verander ik mijn instellingen?',
	'ARCADE_HELP_FAQ_USER_SET_FAV_MANAGE_ANSWER'		=> 'Hier kun je je favoriete spelletjes toevoegen, verwijderen of markeren.',
	'ARCADE_HELP_FAQ_USER_SET_FAV_MANAGE_QUESTION'		=> 'Wat betekent favorieten beheren?',
	'ARCADE_HELP_FAQ_USER_SET_IMG_DISABLE_ANSWER'		=> 'Je kunt er voor kiezen deze functie te deactiveren als de laadtijd van de pagina te langzaam is.',
	'ARCADE_HELP_FAQ_USER_SET_IMG_DISABLE_QUESTION'		=> 'Wil je de weergave van avatars en spelafbeeldingen uitschakelen?'
]);
