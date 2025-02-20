<?php
/**
*
* @package phpBB Arcade
* @version $Id: help_developer.php 173 2024-01-14 12:28:15Z KillBill $
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
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// Some characters you may want to copy&paste: ‚ ‘ ’ « » „ “ ” …

$lang = array_merge($lang, [
	'ARCADE_ACP_HELP_FAQ_BLOCK_DATA'					=> 'Toon arcade data buiten de arcade',
	'ARCADE_ACP_HELP_FAQ_BLOCK_GAMES'					=> 'Spellen',
	'ARCADE_ACP_HELP_FAQ_BLOCK_GENERAL'					=> 'Algemeen',
	'ARCADE_ACP_HELP_FAQ_BLOCK_INSTALL'					=> 'Installeren/Updaten/Verwijderen',
	'ARCADE_ACP_HELP_FAQ_BLOCK_MODULES'					=> 'phpBB Arcade modules',
	'ARCADE_ACP_HELP_FAQ_BLOCK_SCORING'					=> 'Scoren',
	'ARCADE_ACP_HELP_FAQ_DATA_EXT_ANSWER'				=> 'Ja, er zijn extensies voor de phpBB Arcade-software - zie: <a onclick="window.open(this.href); return false;" href="https://phpbbarcade.euroscadeaux.com/viewforum.php?f=18">Extensies</a>',
	'ARCADE_ACP_HELP_FAQ_DATA_EXT_QUESTION'				=> 'Ja, er zijn extensies voor de phpBB Arcade software-zie: <a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/phpBB_Arcade_Extensions.html">Extensies</a>',
	'ARCADE_ACP_HELP_FAQ_GAMES_DELETE_ANSWER'			=> 'Je kan spellen verwijderen door op de module “Beheer categorieën” of “Beheer spellen” in het acp te klikken en een spel te selecteren om te verwijderen. Je krijgt de optie om de bestanden van de server te verwijderen wanneer je het spel verwijdert. Om dit te laten werken, moet je ervoor zorgen dat je de juiste permissies hebt ingesteld op de server om bestanden te verwijderen. Gebruik deze optie alleen als je niet van plan bent het spel opnieuw te installeren.',
	'ARCADE_ACP_HELP_FAQ_GAMES_DELETE_QUESTION'			=> 'Hoe verwijder je spellen?',
	'ARCADE_ACP_HELP_FAQ_GAMES_HOW_INSTALL_ANSWER'		=> 'Er zijn drie manieren om een spel te installeren.<br>
															<ul>
																<li>Als je het spel downloadt met behulp van het ingebouwde download systeem van phpBB Arcade, krijg je een gecomprimeerde map die je via FTP kunt uploaden naar de map <strong>[ROOT]/arcade/install/</strong> en installeren via het ACP.</li>
																<li>Als je het spel downloadt met behulp van het ingebouwde download systeem van phpBB Arcade, krijg je een gecomprimeerde map die je kunt uploaden via de ACP Upload/Uitpak module. Na het uploaden kan het spel worden uitgepakt en vervolgens kan het spel worden geïnstalleerd.</li>
																<li>Een derde optie is FTP. Upload het uitgepakte spel naar de juiste locatie in de map <strong>“[ROOT]/arcade/games/{Eerste teken}/”</strong>. Dit wordt echter niet aanbevolen omdat de permissies voor de mappen en bestanden in dit geval anders kunnen zijn.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GAMES_HOW_INSTALL_QUESTION'	=> 'Hoe installeer ik spellen?',
	'ARCADE_ACP_HELP_FAQ_GAMES_INSTALL_ANSWER'			=> 'De gemakkelijkste manier is om spellen te gebruiken die al in phpBB Arcade of IBPro tar-formaat zijn. De arcade detecteert automatisch wanneer je een spel uploadt of uitpakt. Als het formaat niet goed is, moet je het veranderen in het juiste formaat, of als het op geen enkele manier werkt, wil je het misschien delen op de ondersteuningssite en om een spelcontrole vragen.',
	'ARCADE_ACP_HELP_FAQ_GAMES_INSTALL_QUESTION'		=> 'Wat is de makkelijkste manier om spellen te installeren?',
	'ARCADE_ACP_HELP_FAQ_GAMES_INS_FILE_ANSWER'			=> 'Ja.<br><textarea rows="30" cols="30" readonly="readonly" onclick="this.focus(); this.select();">&lt;?php
/**
*
* @package phpBB Arcade
* @version 7.7.3
* @author 2011-2025 KillBill
* @copyright (c) 2014-2025 https://jv-arcade.com/ - https://jv-arcade.com/contact
* @license https://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
*	phpBB Arcade Spel installatiebestand
*
*	Hieronder vindt je informatie over parameters die moeten worden ingesteld om een spel te kunnen
*	installeren in de arcade. Je hebt dit bestand nodig om het spel te laten zien
* 	in de phpBB Arcade van het ACP, om het te installeren.
*
*	De enige items die moeten worden ingesteld zijn de naam, beschrijving, controller,
*	breedte, hoogte, scoretype en score opslagtype.
*
*	De arcade ondersteunt verschillende typen spellen voor het opslaan van scores. (phpBB Arcade, IBPro,
*	IBProV32, Relax Arcade, Olympus Arcade en spellen die geen scores indienen)
*	Gebruik de volgende constanten voor het type score opslaan:
*
*	PHPBBARCADE_GAME
*	IBPRO_GAME
*	IBPROV3_GAME
*	PHPBB_RA_GAME
*	OLYMPUS_GAME
*	NOSCORE_GAME
*
*	De spelbesturing moet worden ingesteld met behulp van de volgende constanten:
*
*	GAME_CONTROL_KEYBOARD
*	GAME_CONTROL_KEYBOARD_TOUCH
*	GAME_CONTROL_KEYBOARD_MOUSE
*	GAME_CONTROL_MOUSE_TOUCH
*
*	Gebruik de GAME_CONTROL_KEYBOARD constante, als het spel alleen op een toetsenbord kan worden gespeeld.
*	Gebruik de GAME_CONTROL_KEYBOARD_TOUCH constante, als het spel op toetsenbord en touchscreen kan worden gespeeld.
*	Gebruik de GAME_CONTROL_KEYBOARD_MOUSE constante, als het spel kan worden gespeeld met toetsenbord en muis.
*	Gebruik de GAME_CONTROL_MOUSE_TOUCH constante, als het spel met muis en touchscreen kan worden gespeeld.
*	Als je een extra beschrijving wilt maken van hoe het spel moet worden gespeeld en met welke toetsen, kun je deze in het veld “game_control_desc” schrijven.
*
*	Gebruik een van de volgende constanten om de spelrotatie te specificeren:
*
*	ARCADE_SET_DISABLED
*	ARCADE_SET_ENABLED
*
*	Gebruik de ARCADE_SET_DISABLED constante, als het spel geen portret en lanschap weergave ondersteunt.
*	Gebruik de ARCADE_SET_ENABLED constante, als het spel zowel landschap als portret weergave ondersteunt.
*
*	Het scoretype moet worden ingesteld met behulp van de volgende constanten:
*
*	SCORETYPE_HIGH
*	SCORETYPE_LOW
*
*	SCORETYPE_HIGH is voor spellen die zo scoren, dat de beste score de hoogste is.
*	SCORETYPE_LOW is voor spellen die zo scoren, dat de beste score de laagste is.
*
*/

// ONTWIKKELAARS LET OP gewijzigd: - (\'game_name\', \'game_desc\', \'game_control_desc\')
//
// Alle installatiebestanden moeten UTF-8 als codering gebruiken en de bestanden mogen geen BOM bevatten.
//
// Sommige tekens die je misschien wilt kopiëren en plakken: ‚ ‘ ’ « » „ “ ” …

if (!defined(\'IN_PHPBB\') || !defined(\'IN_PHPBB_ARCADE\'))
{
	exit;
}

$game_file = basename(__FILE__, \'.\' . substr(strrchr(__FILE__, \'.\'), 1));

$game_data = [
	\'game_name\'			=> \'Spel naam\',
	\'game_desc\'			=> \'Geef hier de beschrijving van het spel in.\',
	\'game_control\'		=> GAME_CONTROL_MOUSE_TOUCH,
	\'game_control_desc\'	=> \'Geef een beschrijving in van de benodigde besturing van het spel.\',
	\'game_image\'			=> $game_file . \'.png\',
	\'game_scorevar\'		=> $game_file,
	\'game_width\'			=> 370,
	\'game_height\'			=> 550,
	\'game_rotatable\'		=> ARCADE_SET_DISABLED,
	\'game_scoretype\'		=> SCORETYPE_HIGH,
	\'game_save_type\'		=> PHPBBARCADE_GAME,
	\'game_inherit\'		=> \'Geef indien nodig het overervingspad van het spel in.\',
	\'privacy_desc\'		=> \'Geef hier het spel privacybeleid in als het spel dit vereist.\',
	\'privacy_link\'		=> \'Geef de link in naar het spel privacybeleid in HTML-formaat. Als er meer dan één link is, voer ze dan allemaal in op hun eigen nieuwe regel.\'
];
</textarea>',
	'ARCADE_ACP_HELP_FAQ_GAMES_INS_FILE_QUESTION'		=> 'Is er een voorbeeld installatiebestand?',
	'ARCADE_ACP_HELP_FAQ_GAMES_OWN_INS_FILE_ANSWER'		=> 'Nee, hoewel het mogelijk is dat er twee gereedschappen in het phpBB Arcade beheerderspaneel zitten die je in deze taak zullen helpen.<br>
															<ul>
																<li>Er is een tool om vanaf nul een installatiebestand te maken. Geef gewoon alle vereiste informatie in en je kunt het installatiebestand laten downloaden, weergeven of op de server maken.</li>
																<li>Er is een tool om bestaande installatiebestanden van de reeds geïnstalleerde spellen te downloaden of te bekijken.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GAMES_OWN_INS_FILE_QUESTION'	=> 'Moet ik het installatie bestand handmatig aanmaken?',
	'ARCADE_ACP_HELP_FAQ_GAMES_REQ_INSTALL_ANSWER'		=> 'Als je een spel wilt uploaden en installeren dat al is uitgepakt, zijn dit de volgende stappen:<br>
															In de [ROOT]/arcade/<strong>“games”</strong>/t/ map moet je de hoofdbestanden van het spel uploaden die nodig zijn voor de installatie, dit zijn de volgende:<br><br>
															<b>Html5</b>
															<ul>
																<li>1. test.php (Spel installatie bestand)</li>
																<li>2. test.png (Spelafbeelding 60x60 px)</li>
																<li>3. index.html (Het bestand index.html is verantwoordelijk voor het starten van het spel.)</li>
															</ul>
															<br>
															<b>Flash</b>
															<ul>
																<li>1. test.php (Spel installatiebestand)</li>
																<li>2. test.png (Spelafbeelding 60x60 px)</li>
																<li>3. test.swf (Het test.swf bestand bevat de gegevens die nodig zijn voor het spel.)</li>
																<li>4. index.htm (Index.htm is een leeg bestand.)</li>
																<li>5. gd/ (Als het spel een map “gamedata” bevat, hernoem je deze naar “gd”, omdat de mapnaam van gamedata niet langer meer wordt ondersteund.)</li>
															</ul>
															<br>
															De naam van de spelmap moet altijd overeenkomen met de naam van het spel installatiebestand.
															<br><br>
															Dus in dit geval is de juiste mapstructuur als volgt:<br>
															<ul>
																<li>1. <strong>[ROOT]/arcade/games/t/test/</strong>test.php</li>
																<li>2. <strong>[ROOT]/arcade/games/t/test/</strong>index.html (Het index.html bestand is verantwoordelijk voor het starten van het spel.)</li>
															</ul>
															<br>
															De “t” map na de “games” map wordt altijd bedoeld als de eerste letter van de bestandsnaam. Omdat “phpBB Arcade” spellen plaatst in “ABC” volgorde mappen voor een beter overzicht.
															<br>
															De map <strong>“index.html”</strong> kan maar één keer worden opgenomen. De juiste bestandsnaam is <strong>“index.htm”</strong> voor een leeg bestand om de submappen te beschermen.',
	'ARCADE_ACP_HELP_FAQ_GAMES_REQ_INSTALL_QUESTION'	=> 'Wat is er nodig om een spel te installeren?',
	'ARCADE_ACP_HELP_FAQ_GAMES_SAVE_TYPE_ANSWER'		=> 'De arcade ondersteunt de volgende opslagtypen voor spellen:<br>
															<ul>
																<li>phpBB Arcade</li>
																<li>IBPro</li>
																<li>IBPro V32</li>
																<li>Relax Arcade</li>
																<li>Olympus Arcade</li>
																<li>Geen score spellen</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GAMES_SAVE_TYPE_QUESTION'		=> 'Welke soorten opgeslagen spellen worden ondersteund?',
	'ARCADE_ACP_HELP_FAQ_GAMES_TYPE_ANSWER'				=> 'De arcade ondersteunt de volgende speltypes:<br>
															<ul>
																<li>Html5</li>
																<li>Flash - Geconverteerd naar Html5.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GAMES_TYPE_QUESTION'			=> 'Welke speltypes worden ondersteund?',
	'ARCADE_ACP_HELP_FAQ_GAMES_ZIP_ANSWER'				=> 'Ja. Voor de juiste compressie is de volgende mapstructuur vereist:<br>
															<ul>
																<li>test/ (Spelbestand)</li>
																<li>test/test.php (Spel installatie bestand)</li>
																<li>test/test.png (Spelafbeelding 60x60 px)</li>
																<li>test/index.html (Het bestand index.html is verantwoordelijk voor het starten van het spel.)</li>
															</ul>
															<br>Als dat in orde is, kun je het spel direct inpakken. Het voltooide gecomprimeerde bestand zal de juiste naam test.zip of test.tar krijgen.',
	'ARCADE_ACP_HELP_FAQ_GAMES_ZIP_QUESTION'			=> 'Kan ik mijn eigen gecomprimeerde bestand maken om een spel te installeren?',
	'ARCADE_ACP_HELP_FAQ_GENERAL_FEATURES_ANSWER'		=> '<ul>
																<li>Uitgebreide arcade-ondersteuning</li>
																<li>Ongelimiteerde categorieën, subcategorieën en linken (bootst phpBB3 forums na)</li>
																<li>Volledige beheerderspaneel, moderatorpaneel en gebruikerspaneel modules</li>
																<li>Beheerder permissies voor arcade ACP modules</li>
																<li>Moderator permissies voor arcade MCP modules</li>
																<li>Algemene arcade gebaseerde permissies</li>
																<li>Lokale categorie gebaseerde permissies</li>
																<li>Met wachtwoord beveiligde categorieen</li>
																<li>Leeftijd beschermende categorieën</li>
																<li>Zeer eenvoudige spel installatie</li>
																<li>Converteer automatisch alle ondersteunde back-up speltypes naar tar bestanden</li>
																<li>Laat zien wie welk spel speelt</li>
																<li>Favoriete spel systeem</li>
																<li>Download systeem voor spellen</li>
																<li>Gedetailleerde statistieken</li>
																<li>Spel beoordelingssysteem</li>
																<li>Spel commentaar systeem</li>
																<li>Spel uitdagingssysteem</li>
																<li>Spel toernooi systeem</li>
																<li>Toernooi systeem voor spelgroepen</li>
																<li>Rapportage systeem voor spelfouten</li>
																<li>Speel in een nieuw venster</li>
																<li>Zoeksysteem voor spellen</li>
																<li>Puntensysteem integratie</li>
																<li>En nog meer…</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GENERAL_FEATURES_QUESTION'		=> 'Welke functies zijn opgenomen in phpBB Arcade?',
	'ARCADE_ACP_HELP_FAQ_GENERAL_LANGS_ANSWER'			=> '<ul>
																<li>Ondersteunde talen kunnen <b><a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/phpBB_Arcade_Languages.html">HIER</a></b> gedownload worden.</li>
																<li>Als je een nieuw taalpakket hebt gemaakt, deel dit dan <b><a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/phpBB_Arcade_User_Languages.html">HIER</a></b> met ons.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GENERAL_LANGS_QUESTION'		=> 'Welke talen worden ondersteund?',
	'ARCADE_ACP_HELP_FAQ_GENERAL_STYLES_ANSWER'			=> '<ul>
																<li>Ondersteunde stijlen kunnen <b><a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/phpBB_Arcade_Styles.html">HIER</a></b> gedownload worden.</li>
																<li>Als je een nieuwe stijl hebt, deel deze dan <b><a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/phpBB_Arcade_User_Styles.html">HIER</a></b> met ons.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GENERAL_STYLES_IMG_ANSWER'		=> 'Ja, elke afbeelding die zich in het standaard afbeelding pad “[ROOT]/ext/jv/arcade/styles/all/theme/images/” bevind, kan stijl specifiek zijn. Alles wat je hoeft te doen is een afbeelding te plaatsen met dezelfde naam in de “[ROOT]/ext/jv/arcade/styles/jouw_stijl/theme/images/” map. Als een stijl de specifieke afbeelding niet heeft, zal de standaard afbeelding gebruikt worden. Dit geldt ook voor categorie afbeeldingen. Om gebruik te maken van stijl gespecificeerde categorie afbeeldingen moet je eerst de standaard “[ROOT]/ext/jv/arcade/styles/all/theme/images/cats/” afbeelding kiezen tijdens het maken/bewerken van de categorie en dan de afbeelding uploaden met dezelfde naam naar de “[ROOT]/ext/jv/arcade/styles/jouw_stijl/theme/images/cats/” map.',
	'ARCADE_ACP_HELP_FAQ_GENERAL_STYLES_IMG_QUESTION'	=> 'Kan ik stijl gespecificeerde afbeeldingen gebruiken in de arcade?',
	'ARCADE_ACP_HELP_FAQ_GENERAL_STYLES_QUESTION'		=> 'Welke stijlen worden ondersteund?',
	'ARCADE_ACP_HELP_FAQ_INSTALL_DB_ANSWER'				=> 'De arcade moet correct werken met elke database die wordt ondersteund door phpBB3.',
	'ARCADE_ACP_HELP_FAQ_INSTALL_DB_QUESTION'			=> 'Welke databases worden ondersteund door de phpBB Arcade?',
	'ARCADE_ACP_HELP_FAQ_INSTALL_INSTALL_ANSWER'		=> '<ul>
																<li>Download de laatste versie en pak die uit.</li>
																<li>Kopieer de bestanden naar de server in de map “[ROOT]/” van het forum met behoud van de structuur van mappen.</li>
																<li>Ga naar het beheerderspaneel en klik op het menu-item “Aanpassen” in de link “Inschakelen” in phpBB Arcade, om phpBB Arcade te installeren.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_INSTALL_INSTALL_QUESTION'		=> 'Hoe installeer ik de phpBB Arcade?',
	'ARCADE_ACP_HELP_FAQ_INSTALL_UNINSTALL_ANSWER'		=> 'Ga naar het beheerder configuratiescherm en klik op het menu “Aanpassen”, vervolgens op de link “Uitschakelen” in phpBB Arcade en vervolgens op de link “Gegevens verwijderen” en verwijder vervolgens alle phpBB Arcade bestanden van de server.',
	'ARCADE_ACP_HELP_FAQ_INSTALL_UNINSTALL_QUESTION'	=> 'Hoe kan ik phpBB Arcade verwijderen?',
	'ARCADE_ACP_HELP_FAQ_INSTALL_UPDATE_ANSWER'			=> '<ul>
																<li>Download de laatste versie en pak die uit.</li>
																<li>Ga naar het beheerderspaneel en klik op het “Aanpassen” menu, klik er binnenin op de “uitschakelen” link om de phpBB Arcade uit te schakelen.</li>
																<li>Kopieer de bestanden naar je server naar de map “[ROOT]/” van het forum terwijl je de mappenstructuur behoudt.</li>
																<li>Ga naar het Beheerderspaneel en klik op het “Aanpassen” menu, klik er binnenin op de phpBB Arcade “Inschakelen” en je phpBB Arcade is bijgewerkt.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_INSTALL_UPDATE_QUESTION'		=> 'Hoe update ik de phpBB Arcade?',
	'ARCADE_ACP_HELP_FAQ_MODULES_ADD_AUTH_ANSWER'		=> 'Zodra de phpBB Arcade is geïnstalleerd, moet je de permissies in het ACP instellen om deze te gebruiken. De arcade maakt gebruik van op categorieën gebaseerde permissies, die de op het forum gebaseerde permissies nabootsen, die phpBB3 gebruikt, inclusief het gebruik van rollen. Je moet ook globale phpBB Arcade gebruikers-/groeps permissies instellen. Je kunt ook beheerders permissies gebruiken om gebruikers-/groepstoegang tot phpBB Arcade ACP-modules in te stellen.',
	'ARCADE_ACP_HELP_FAQ_MODULES_ADD_AUTH_QUESTION'		=> 'Waar zijn de permissies om phpBB Arcade in te stellen?/Waarom heb ik geen toestemming om de phpBB Arcade te bekijken/gebruiken?',
	'ARCADE_ACP_HELP_FAQ_MODULES_ANSWER'				=> '<strong><br>De arcade bevat de volgende ACP modules:<br></strong>
															<strong>Instellingen</strong><br>
															<ul>
																<li><strong>Systeem instellingen</strong> - Maakt algemeen in- en uitschakelen van systemen mogelijk.</li>
																<li><strong>Algemene instellingen</strong> - Controle-instellingen voor de arcade.</li>
																<li><strong>Extensie instellingen</strong> - Beheer instellingen voor extensies in de arcade.</li>
																<li><strong>Spel instellingen</strong> - Beheer de spelinstellingen voor de arcade.</li>
																<li><strong>Uitdaging instellingen</strong> - Beheer de uitdagingsinstellingen voor de arcade.</li>
																<li><strong>Toernooi instellingen</strong> - Beheer de toernooi instellingen voor de arcade.</li>
																<li><strong>Instellingen voor groep toernooien</strong> - Beheer groep toernooi instellingen voor de arcade.</li>
																<li><strong>Functie instellingen</strong> - Beheer de functie instellingen voor de arcade.</li>
																<li><strong>Pagina instellingen</strong> - Beheer de pagina instellingen voor de arcade.</li>
																<li><strong>Pad instellingen</strong> - Beheer de pad instellingen voor de arcade.</li>
																<li><strong>Laad instellingen</strong> - Laad instellingen voor de arcade.</li>
																<li><strong>Instellingen voor activiteitenrang</strong> - Instellingen voor activiteitenrang voor de arcade.</li>
															</ul><br>
															<strong>Beheer arcade</strong><br>
															<ul>
																<li><strong>Beheer menu</strong> - Je kunt nieuwe menuknoppen toevoegen, bewerken, verwijderen. Basis menuknoppen kunnen alleen worden verplaatst of hernoemd.</li>
																<li><strong>Beheer categorieën</strong> - Toevoegen, bewerken, verwijderen, verplaatsen en synchroniseren van categorieën en spellen.</li>
																<li><strong>Beheer spellen</strong> - Wijzigen/verwijderen van spellen.</li>
																<li><strong>Beheer gebruikers</strong> - De behaalde resultaten van de spellen kunnen worden bewerkt/verwijderd.</li>
																<li><strong>Beheer toernooien</strong> - Hiermee kan je toernooien maken, bewerken en verwijderen.</li>
																<li><strong>Groep toernooien beheren</strong> - Hiermee kan je groep toernooien maken, bewerken en verwijderen.</li>
																<li><strong>Beheer mededelingen</strong> - Wijzigen/verwijderen mededelingen.</li>
																<li><strong>Beheer rangen</strong> - Rangen aanmaken/wijzigen/verwijderen.</li>
															</ul><br>
															<strong>Arcade functies</strong><br>
															<ul>
																<li><strong>Spellen toevoegen</strong> - Een spel toevoegen aan de arcade, meerdere spellen kunnen worden toegevoegd aan een categorie in één keer.</li>
																<li><strong>Uploaden/Uitpakken spellen</strong> - Als de installatiemap gecomprimeerde spellen bevat, kan je deze uitpakken of je kan een of meer bestanden tegelijk uploaden. Na het uitpakken zijn de spel(len) klaar voor installatie.</li>
																<li><strong>Back-up spellen</strong> - Maak een reservekopie van alle spellen in een of meerdere geselecteerde categorieen.</li>
																<li><strong>Download spellen</strong> - Hier kan je verbinding maken met een andere website waar je, indien beschikbaar, spellen kunt downloaden.</li>
															</ul><br>
															<strong>Nuttige modules</strong><br>
															<ul>
																<li><strong>Spel foutmeldingen bekijken</strong> - Geeft een overzicht van alle spel foutmeldingen die ingezonden zijn door de leden.</li>
																<li><strong>Verwijderde spellen</strong> - Geeft een overzicht van verwijderde spellen en de redenen ervan.</li>
																<li><strong>Verbannen gebruikers</strong> - Bekijk/deblokkeer verbannen gebruikers.</li>
																<li><strong>Download statistieken</strong> - Bekijk hoeveel spellen de gebruikers al hebben gedownload en welke spellen het zijn.</li>
																<li><strong>Spel installatiebestand aanmaken</strong> - Nieuw installatiebestand aanmaken om gedownload/bekeken/opgeslaan te worden op de server of bestaande spel installatiebestanden downloaden/bekijken.</li>
																<li><strong>Gebruikersgids</strong> - Laat de phpBB Arcade gebruikersgids zien.</li>
															</ul><br>
															<strong>Arcade logs</strong><br>
															<ul>
																<li><strong>Beheerderslog</strong> - Beheerdersacties worden opgeslaan.</li>
																<li><strong>Moderatorlog</strong> - Moderatoracties worden opgeslaan.</li>
																<li><strong>Gebruikerslog</strong> - Gebruikersacties worden opgeslaan.</li>
																<li><strong>Foutenlog</strong> - Diverse fouten worden opgeslaan.</li>
															</ul><br>
															<strong>Permissierollen</strong><br>
															<ul>
																<li><strong>Categorierollen</strong> - Beheer de rollen voor arcade categorie permissies.</li>
															</ul><br>
															<strong>Categorie gebaseerde permissies</strong><br>
															<ul>
																<li><strong>Categorie permissies</strong> - Beheer welke gebruikers en groepen gebruik kunnen maken van welke arcade categorieën.</li>
																<li><strong>Gebruikers categorie permissies</strong> - Wijs arcade permissies toe aan gebruikers.</li>
																<li><strong>Groepen categorie permissies</strong> - Wijs arcade permissies toe aan groepen.</li>
																<li><strong>Kopieer categorie permissies</strong> - Kopieer categorie permissies van een categorie naar 1 of meerdere categorieën.</li>
															</ul><br>
															<strong>Permissie maskers</strong><br>
															<ul>
																<li><strong>Bekijk categorie gebaseerde permissies</strong> - Bekijk de arcade permissies die zijn toegewezen aan de geselecteerde gebruikers/groepen en categorieën.</li>
															</ul><br>
															<strong>Installatie functies</strong><br>
															<ul>
																<li><strong>Installatie verifiëren</strong> - Controleer of phpBB Arcade correct is geïnstalleerd.</li>
																<li><strong>Spelgegevens bijwerken</strong> - Detecteer en update automatisch de spelgrootte als de gegevens onjuist zijn.</li>
																<li><strong>Spel installatiebestanden converteren</strong> - Spel installatiebestanden converteren naar de nieuwste versie.</li>
															</ul><br>
															<strong>De arcade heeft de volgende MCP modules:</strong><br>
															<ul>
																<li><strong>Beheer spellen</strong> - Spel wijzigen/verplaatsen en resetten.</li>
																<li><strong>Beheer toernooien</strong> - Toernooien aanmaken, wijzigen.</li>
																<li><strong>Groep toernooien beheren</strong> - Creëer/bewerk groep toernooien.</li>
																<li><strong>Moderatorlog</strong> - Moderator acties worden vermeld.</li>
															</ul><br>
															<strong>De arcade heeft de volgende gebruikerspaneel modules:</strong><br>
															<ul>
																<li><strong>Beheer instellingen</strong> - Deze instellingen bepalen verschillende aspecten van de arcade.</li>
																<li><strong>Spelinstellingen</strong> - Pas de instellingen van de spelpagina aan.</li>
																<li><strong>Berichten instellingen</strong> - Pas berichten instellingen aan.</li>
																<li><strong>Beheer favorieten</strong> - Markeer en verwijder favoriete spellen.</li>
																<li><strong>Lokale opslag beheren</strong> - Bekijk en verwijder lokale gegevens van de apparaat browser.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_MODULES_AUTH_ANSWER'			=> 'Om ervoor te zorgen dat een beheerder de modules kan zien, moeten de permissies ingesteld zijn, dit kan standaard alleen door één oprichter worden gedaan.',
	'ARCADE_ACP_HELP_FAQ_MODULES_AUTH_QUESTION'			=> 'Hoe kan het dat ik niet alle modules van de arcade in het beheerderspaneel kan zien?',
	'ARCADE_ACP_HELP_FAQ_MODULES_DOWNLOAD_ANSWER'		=> 'Gebruikers kunnen een spel downloaden als je ze permissies geeft, dit kunnen individuele of groepspermissies zijn, daarnaast heb je de optie om de download lijst in de ACP-module in te schakelen, zodat ze spellen van je website via ACP kunnen downloaden.',
	'ARCADE_ACP_HELP_FAQ_MODULES_DOWNLOAD_QUESTION'		=> 'Hoe kan ik een download voor anderen verstrekken?',
	'ARCADE_ACP_HELP_FAQ_MODULES_NO_FAV_ANSWER'			=> 'De favorieten module is alleen zichtbaar als we er toestemming voor hebben, de permissies kunnen alleen door de beheerder worden gewijzigd.',
	'ARCADE_ACP_HELP_FAQ_MODULES_NO_FAV_QUESTION'		=> 'Waarom kan je je favorieten module niet zien?',
	'ARCADE_ACP_HELP_FAQ_MODULES_NO_GAMES_ANSWER'		=> 'Om spellen toe te voegen, moet je eerst een categorie voor de spellen aanmaken, je kan dit doen in het menu Categorieën beheren. Ze zijn heel gemakkelijk te maken.',
	'ARCADE_ACP_HELP_FAQ_MODULES_NO_GAMES_QUESTION'		=> 'Waarom kan ik geen spellen toevoegen?',
	'ARCADE_ACP_HELP_FAQ_MODULES_QUESTION'				=> 'Welke beheerderspaneel modules heeft phpBB Arcade?',
	'ARCADE_ACP_HELP_FAQ_MODULES_REQ_DOWNLOAD_ANSWER'	=> 'Deze module moet de <strong>“allow_url_fopen”</strong> ingeschakeld hebben of de <strong>cURL library</strong> moet geïnstalleerd zijn. Dit kan gecontroleerd worden door de php-info te bekijken op je server. Als <strong>“allow_url_fopen”</strong> uitgeschakeld is en de <strong>cURL library</strong> niet is geïnstalleerd, zal de module niet werken.',
	'ARCADE_ACP_HELP_FAQ_MODULES_REQ_DOWNLOAD_QUESTION'	=> 'Waarom werkt de downloadmodule voor spellen niet?',
	'ARCADE_ACP_HELP_FAQ_MODULES_USE_DOWNLOAD_ANSWER'	=> 'Het enige wat je hoeft te doen is de URL naar de hoofdmap van het phpBB-forum in te geven en een lijst met spellen zal beschikbaar zijn om te downloaden. Als de naam van het spel groen is, komt dat omdat die spellen al op de server staan. Onthoud dat de downloads nog steeds beheerst worden door de permissies op de website waar je ze vandaan haalt. Het kan dus zijn dat je aangemeld moet zijn en/of deel moet uitmaken van een speciale groep om spellen te downloaden. Neem contact op met de website beheerder als je vragen hebt.<br><br><a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/dev/images/acp_download_games.png"><img src="https://jv-arcade.com/dev/images/acp_download_games.png" width="300" alt="ACP Download spellen" title="ACP Download spellen"></a>',
	'ARCADE_ACP_HELP_FAQ_MODULES_USE_DOWNLOAD_QUESTION'	=> 'Hoe gebruik ik de “Download spellen” module?',
	'ARCADE_ACP_HELP_FAQ_SCORING_GUEST_SAVE_ANSWER'		=> 'Als je de gastgroep de juiste permissie geeft, kunnen ze geen resultaten indienen. Dit is opzettelijk zo.',
	'ARCADE_ACP_HELP_FAQ_SCORING_GUEST_SAVE_QUESTION'	=> 'Waarom kunnen gasten geen scores indienen, ook al hebben ze de juiste permissies?',
	'ARCADE_ACP_HELP_FAQ_SCORING_SAVE_ANSWER'			=> 'Het eerste wat je moet controleren is of het speltype ondersteund wordt door de arcade en dat de scorevariabele correct is ingesteld. Het laatste wat je moet controleren zijn de cookie instellingen in het beheerderspaneel. Indien je site url <strong>http://www.example.com</strong> heet, dan moet het cookie domein <strong>example.com</strong> heten. Ook de cookie beveiliging moet uitgeschakeld worden in het ACP, want de cookie beveiliging ondersteund enkel de phpBB Arcade speltypes.',
	'ARCADE_ACP_HELP_FAQ_SCORING_SAVE_QUESTION'			=> 'Waarom worden mijn scores niet opgeslaan?',
	'ARCADE_ACP_HELP_FAQ_SCORING_TEST_ANSWER'			=> 'Hierdoor kun je nu spellen in een categorie spelen zonder dat er gegevens of scores worden opgeslaan. Hiermee kan je spellen testen om er zeker van te zijn dat ze correct werken. Als je klaar bent met een spel, krijg je een bericht te zien met details over wat er zou zijn gebeurd. Aan het einde van het spel zullen beheerders gedetailleerde informatie over het spel ontvangen als het “phpBB-DEBUG” system ingeschakeld is.<br><em>Om het “phpBB-DEBUG” systeem in te schakelen, moeten we de “JVA - Debug” extensie installeren.</em>',
	'ARCADE_ACP_HELP_FAQ_SCORING_TEST_CAT_ANSWER'		=> 'Ga naar de “Beheer arcade” ACP module. Klik daar op bewerken. Je moet de “Test modus” inschakelen en dan de “Test modus” instellen op ja.',
	'ARCADE_ACP_HELP_FAQ_SCORING_TEST_CAT_QUESTION'		=> 'Hoe schakel ik de “Test modus” in voor een categorie?',
	'ARCADE_ACP_HELP_FAQ_SCORING_TEST_QUESTION'			=> 'Wat doet de “Test modus”?',
]);
