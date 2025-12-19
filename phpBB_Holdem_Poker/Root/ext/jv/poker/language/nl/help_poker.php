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
	'JV_POKER_HELP_AUTO_ACC_ANSWER'			=> 'Als de gebruiker de functie “Automatische Check/Call” goedkeurt en wanneer de speler aan de beurt is, zal deze automatisch passen, of als er een call is, zal hij automatisch het gecallde bedrag specificeren.',
	'JV_POKER_HELP_AUTO_ACC_QUESTION'		=> 'Wat doet automatische Check/Call?',
	'JV_POKER_HELP_AUTO_ACF_ANSWER'			=> 'Als de gebruiker de “Automatische Check/Fold” functie goedkeurt, zal de speler automatisch de kaarten doorgeven of folden als er een call is.',
	'JV_POKER_HELP_AUTO_ACF_QUESTION'		=> 'Wat doet de Automatische Check/Fold?',
	'JV_POKER_HELP_AVATAR_BC_ANSWER'		=> 'Ja, de volgende kleuren worden momenteel gebruikt rond de avatar:
	<ul>
		<li>Wit: Wachten om te spelen.</li>
		<li>Grijs: Degenen die in het spel zijn.</li>
		<li>Geel: Werkelijke speler.</li>
		<li>Rood: Fold kaarten.</li>
	</ul>',
	'JV_POKER_HELP_AVATAR_BC_ANSWER_2'		=> '<li>Blauw: Bescherming tegen weddenschappen.</li>',
	'JV_POKER_HELP_AVATAR_BC_QUESTION'		=> 'Betekenen de kleuren rondom de avatar iets?',
	'JV_POKER_HELP_A_SHOUT_ANSWER'			=> 'Ja, elke speler kan het archief tijdens het spel bekijken.',
	'JV_POKER_HELP_A_SHOUT_QUESTION'		=> 'Is er een manier om oudere berichten te bekijken?',
	'JV_POKER_HELP_A_SHOUT_RE_ANSWER'		=> 'Als de berichten niet worden weergegeven, heb je je stoel verlaten.',
	'JV_POKER_HELP_A_SHOUT_RE_QUESTION'		=> 'Na het verversen van het archief verdwenen de berichten, waarom?',
	'JV_POKER_HELP_A_SHOUT_R_ANSWER'		=> 'Ja, de knop vernieuwen bevindt zich aan de rechterkant van de titelbalk.',
	'JV_POKER_HELP_A_SHOUT_R_QUESTION'		=> 'Is er een manier om het archief op te frissen?',
	'JV_POKER_HELP_BAN_CHIPS_ANSWER'		=> 'Ja, als een beheerder je toestemming voor poker intrekt, kun je automatisch al je chips inwisselen op elk gewenst moment %s<strong>HIER</strong>%s. Automatisch wisselen werkt niet als poker is uitgeschakeld, in dat geval kom je later terug en probeer je het opnieuw.',
	'JV_POKER_HELP_BAN_CHIPS_QUESTION'		=> 'Als ik mijn toestemming voor poker verlies, is er dan een manier om mijn chips in te wisselen?',
	'JV_POKER_HELP_BET_BACK_ANSWER'			=> 'Dit kan gebeuren als er overtollige chips in je inzet zijn die niemand heeft aangesproken of als er meerdere winnaars zijn, in dat geval worden de overtollige chips aan jou teruggegeven en niet aan de Pot, zodat ze niet worden meegerekend bij de evaluatie.',
	'JV_POKER_HELP_BET_BACK_QUESTION'		=> 'Een deel van mijn inzet kwam terug naar mij en niet naar de Pot, waarom?',
	'JV_POKER_HELP_BET_BANK_ANSWER'			=> 'Dit kan gebeuren als er overtollige chips in je inzet zijn die niemand heeft aangesproken en je bent opgestaan, in dit geval zullen de overtollige chips naar de bank gaan.',
	'JV_POKER_HELP_BET_BANK_QUESTION'		=> 'Een deel van mijn inzet ging naar de dealer en niet naar de Pot, waarom?',
	'JV_POKER_HELP_BLIND_ANSWER'			=> 'De Small Blind/Big Blind zijn altijd afhankelijk van het minimale en maximale startbedrag. Het minimale startbedrag (Buy-in) is altijd 10x de big blind, terwijl het maximale startbedrag 200x de big blind is. Als de minimum- en maximumwaarden gelijk zijn, hangt het natuurlijk van de instelling af of de minimum-, medium- of maximumwaarde als basis wordt gebruikt. De small blind is altijd de helft van de big blind. Deze regel verschilt in de toernooikamer, waar de Small Blind/Big Blind altijd twee keer de basiswaarde is. Daarnaast groeit in de toernooizaal de Small Blind/Big Blind gestaag gedurende het toernooi.',
	'JV_POKER_HELP_BLIND_QUESTION'			=> 'Small/Big Blind bets tussen kamers zijn verschillend, waarom?',
	'JV_POKER_HELP_BLOCK_GAME'				=> 'Problemen met pokerspel',
	'JV_POKER_HELP_BLOCK_GENERAL'			=> 'Algemene vragen',
	'JV_POKER_HELP_BLOCK_POKER'				=> 'phpBB Holdem Póker vragen',
	'JV_POKER_HELP_BLOCK_ROOMS'				=> 'Vragen met betrekking tot pokerkamers (Lobby)',
	'JV_POKER_HELP_BLOCK_SHOUT'				=> 'Poker shoutbox vragen',
	'JV_POKER_HELP_BLOCK_STATS'				=> 'Vragen over pokerstatistieken',
	'JV_POKER_HELP_CHIPS_C_ANSWER'			=> 'De waarden voor kleurenchips zijn als volgt:
	<ul>
		<li>Grijs: 1</li>
		<li>Zwart: 10</li>
		<li>Lichtblauw: 100</li>
		<li>Geel: 1.000</li>
		<li>Roze: 10.000</li>
		<li>Rood: 100.000</li>
		<li>Donkerblauw: 1.000.000</li>
		<li>Paars: 10.000.000</li>
		<li>Groen: 100.000.000</li>
		<li>Bruin: 1.000.000.000</li>
	</ul>',
	'JV_POKER_HELP_CHIPS_C_QUESTION'		=> 'Wat is de waarde van de verschillende gekleurde chips?',
	'JV_POKER_HELP_CHIPS_DC_ANSWER'			=> 'Ja, zolang je het maximale aantal chips dat kan worden weergegeven niet hebt bereikt, namelijk 11.111.111.110, aangezien er maximaal 10 items in 1 chip zitten.',
	'JV_POKER_HELP_CHIPS_DC_QUESTION'		=> 'Worden de chips op de juiste hoeveelheid weergegeven?',
	'JV_POKER_HELP_CHIPS_ZERO_ANSWER'		=> 'Als je al je chips in een ronde inzet en verliest, en bijkopen is ingeschakeld terwijl je nog chips buiten hebt, worden je chips binnen pas opnieuw aangekocht bij de start van een nieuwe ronde waarin je een actieve speler bent.',
	'JV_POKER_HELP_CHIPS_ZERO_QUESTION'		=> 'Ik heb chips, maar de chips die binnen liggen tonen nul, waarom?',
	'JV_POKER_HELP_CM_ANSWER'				=> '“Stoelen” betekent hoeveel plaatsen er beschikbaar zijn voor spelers in deze kamer. Als het aantal zitplaatsen 8 is, kunnen er 8 gebruikers tegelijk in de zaal zitten. “Spelers” geeft aan hoeveel gebruikers er in de kamer zijn. Als de beheerder de kamer sluit, betekent dit dat de kamer vol is en dat geen enkel ander lid de kamer kan betreden voordat er een stoel is vrijgekomen.',
	'JV_POKER_HELP_CM_QUESTION'				=> 'Wat betekent Spelers/Stoelen?',
	'JV_POKER_HELP_CREATE_ANSWER'			=> 'Deze add-on (in zijn oorspronkelijke vorm) is gemaakt, gepubliceerd en auteursrechtelijk beschermd door de <a href="https://jv-arcade.com/">JV-Arcade Group</a>. Het is beschikbaar onder de <a href="https://jv-arcade.com/License.html">JVA Licence</a>, en mag niet worden gedeeld of gedistribueerd. Meer informatie via de link.',
	'JV_POKER_HELP_CREATE_QUESTION'			=> 'Wie maakte deze phpBB Holdem Póker extensie?',
	'JV_POKER_HELP_CTOP_ANSWER'				=> 'Ja, gebruik hiervoor de knop “Chips wisselen” op de hoofdpagina van de pokerpagina naast de chips die in je eigen profiel worden weergegeven.',
	'JV_POKER_HELP_CTOP_QUESTION'			=> 'Kunnen chips worden ingewisseld voor “%s”?',
	'JV_POKER_HELP_DROP_TOKEN_ANSWER'		=> 'In dit geval zijn er 3 opties beschikbaar:
	<ul>
		<li>1. Je kunt geen chips uit een oefenkamer halen, dus je chips die er nog zijn, worden geannuleerd.</li>
		<li>2. Natuurlijk, als je uit een normale kamer wordt gegooid, krijg je je resterende chips terug.</li>
		<li>3. Als ze me voor het begin van het toernooi uit de toernooizaal gooien, krijg je je Buy-in terug. Als het toernooi al is begonnen, verlies je de Buy-in.</li>
	</ul>',
	'JV_POKER_HELP_DROP_TOKEN_QUESTION'		=> 'Wat gebeurt er met mijn chips als ik uit het spel word gegooid?',
	'JV_POKER_HELP_DROP_USER_ANSWER'		=> 'In dit geval zijn er 3 opties beschikbaar:
	<ul>
		<li>1. Als je internetverbinding wegvalt.</li>
		<li>2. Als je inactief bent en nergens op reageert, wat het verloop van het spel opzettelijk kan vertragen.</li>
		<li>3. Als het spelvenster naar de achtergrond wordt verplaatst. In dit geval kunnen meerdere browsers het bijwerken van achtergrondgegevens vertragen of helemaal stoppen, het spel neemt je mee als een offline gebruiker, dus het spel gooit je eruit.</li>
	</ul>',
	'JV_POKER_HELP_DROP_USER_QUESTION'		=> 'In welke gevallen kan het spel je eruit gooien?',
	'JV_POKER_HELP_E_SHOUT_ANSWER'			=> 'Indien ingeschakeld door de beheerder, ja.',
	'JV_POKER_HELP_E_SHOUT_QUESTION'		=> 'Kan ik smileys gebruiken in mijn berichten?',
	'JV_POKER_HELP_GAME_SOUND_ANSWER'		=> 'Ja. Het spelgeluid kan op elk moment tijdens het spel worden in- of uitgeschakeld. Hiermee worden alle spraakgeluiden inclusief het prikbord uitgeschakeld. De instelling wordt altijd opgeslagen.',
	'JV_POKER_HELP_GAME_SOUND_QUESTION'		=> 'Kan ik het geluid van het spel uitzetten?',
	'JV_POKER_HELP_INACTIVE_ANSWER'			=> 'In dit geval kan het volgende gebeuren:
	<ul>
		<li>1. Als je in een normaal spel zit, sta je aan het einde van de %s. hand automatisch op.</li>
		<li>2. Als je in een toernooispel zit, sta je automatisch op aan het einde van de %s. hand.</li>
	</ul>
	Dit is nodig omdat niemand het leuk vindt dat iemand het spel opzettelijk vertraagt.',
	'JV_POKER_HELP_INACTIVE_QUESTION'		=> 'Wat gebeurt er als ik nergens op reageer tijdens het spel?',
	'JV_POKER_HELP_JACKPOT_ANSWER'			=> 'Er zijn drie manieren om winsten uit een JackPot op te nemen. Alleen bij het presenteren van kaarten en wanneer de jouwe de sterkste hand is.<br>
	<strong>JackPot prijzen:</strong>
	<ul>
		<li>1. In het geval van Four of a Kind 10% van de JackPot.</li>
		<li>2. In het geval van Straight Flush 30% van de JackPot.</li>
		<li>3. In het geval van Royal Flush 80% van de JackPot.</li>
	</ul>
	Is er meer dan één winnaar, dan wordt de prijs naar rato verdeeld.<br><br>
	<strong>Je kunt niet winnen van de JackPot als:</strong>
	<ul>
		<li>1. Je hebt geen JackPot-ticket gekocht.</li>
		<li>2. Je hebt kaarten gefold.</li>
		<li>3. Alle anderen folden hun kaarten.</li>
		<li>4. Je kaarten zijn niet de sterkste hand.</li>
	</ul>',
	'JV_POKER_HELP_JACKPOT_QUESTION'		=> 'Hoe win ik de JackPot?',
	'JV_POKER_HELP_LEADERS_ANSWER'			=> 'Kampioenen worden gerangschikt op basis van het aantal verdiende chips.',
	'JV_POKER_HELP_LEADERS_QUESTION'		=> 'Waar worden de kampioenen op gerangschikt?',
	'JV_POKER_HELP_LEARNER_ANSWER'			=> 'Iedereen kan in deze kamer spelen, zelfs als ze geen eigen chips hebben. Elke speler krijgt een vooraf bepaald aantal chips als hij gaat zitten. In de kamer spelen alle spelers met open kaarten, zodat ze de kans krijgen om elkaar les te geven. De chips die in deze kamer worden gewonnen, kunnen niet uit de kamer worden gehaald of worden geruild.',
	'JV_POKER_HELP_LEARNER_QUESTION'		=> 'Wat betekent het om in een leerkamer te zijn?',
	'JV_POKER_HELP_LIMIT_ANSWER'			=> 'We hebben het antwoord op deze vraag al beschreven in “Hoe speel je poker?/Limietregels”.',
	'JV_POKER_HELP_LIMIT_QUESTION'			=> 'Wat betekent Vaste limiet/Geen limiet?',
	'JV_POKER_HELP_LP_CHIPS_ANSWER'			=> 'Ja, maar alleen als je een JackPot-ticket koopt.',
	'JV_POKER_HELP_LP_CHIPS_QUESTION'		=> 'Kunnen mijn chips verminderen in de leer- en oefenruimtes?',
	'JV_POKER_HELP_LP_STATS_ANSWER'			=> 'Er worden geen statistische gegevens opgeslaan in de leer- en praktijkkamers.',
	'JV_POKER_HELP_LP_STATS_QUESTION'		=> 'Slaan de leer- en praktijkkamers ook statistische gegevens op?',
	'JV_POKER_HELP_MOVE_TIME_ANSWER'		=> '“Bewegingstijd” is de tijd waarin een gebruiker kan beslissen om te checken, in te zetten of te folden. Als deze tijd is verstreken, zijn er twee automatische opties beschikbaar:
	<ul>
		<li>1. Als de actie van de vorige speler geen call was, controleren we automatisch.</li>
		<li>2. Als de actie van de vorige speler een call was, folden we onze kaarten automatisch.</li>
	</ul>',
	'JV_POKER_HELP_MOVE_TIME_QUESTION'		=> 'Wat is de bewegingstijd?',
	'JV_POKER_HELP_NORMAL_ANSWER'			=> 'In een normale kamer kunnen alleen gebruikers spelen die hun eigen chips bezitten en die genoeg chips kunnen inbrengen voor het vereiste minimale instapbedrag. Elk van deze kamers heeft een vast minimum- en maximumbedrag om aan de slag te gaan. Gebruikers kunnen met het minimale bedrag aan tafel gaan zitten. Chips die in deze kamer zijn gewonnen, kunnen uit de kamer worden gehaald en je chips verhogen. Deze chips kunnen weer worden ingewisseld.',
	'JV_POKER_HELP_NORMAL_QUESTION'			=> 'Wat betekent het om in een normale kamer te zijn?',
	'JV_POKER_HELP_OFFLINE_BL_ANSWER'		=> 'Als de avatar van de gebruiker grijs knippert, betekent dit dat de gebruiker momenteel offline is.',
	'JV_POKER_HELP_OFFLINE_BL_QUESTION'		=> 'De avatar van de gebruiker knippert grijs, wat betekent dat?',
	'JV_POKER_HELP_OFFLINE_BP_ANSWER'		=> 'In dit geval kan het volgende gebeuren:
	<ul>
		<li>1. Als je terugkeert voordat je aan de beurt bent en je zittijd is nog niet verstreken, kun je nog steeds extra inzetten plaatsen.</li>
		<li>2. Als je niet op tijd kunt terugkeren, wordt je weddenschap in een beschermende positie geplaatst maar kun je geen weddenschappen meer plaatsen. Op deze manier heb je een kans om te winnen met je reeds geplaatste weddenschap, zelfs als je tijdens het spel offline blijft.</li>
	</ul>',
	'JV_POKER_HELP_OFFLINE_BP_QUESTION'		=> 'Wat gebeurt er met mijn weddenschap als mijn internetverbinding wegvalt?',
	'JV_POKER_HELP_OFFLINE_S_ANSWER'		=> 'Als de server na minder dan 10 minuten weer beschikbaar is, kunnen terugkerende gebruikers het spel voortzetten waar ze waren gebleven. In het geval dat de server minstens 10 minuten niet beschikbaar is, wordt het toernooi verwijderd en krijgen alle gebruikers die nog in het toernooi zaten hun Buy-in terug.',
	'JV_POKER_HELP_OFFLINE_S_QUESTION'		=> 'Wat gebeurt er als de server niet beschikbaar is?',
	'JV_POKER_HELP_OFFLINE_U_ANSWER'		=> 'In dit geval kan het volgende gebeuren:
	<ul>
		<li>1. Als je zit maar nog niet speelt, sta je na 12 seconden automatisch op.</li>
		<li>2. Als je in een normaal spel zit, sta je automatisch op aan het einde van de %s. hand.</li>
		<li>3. Als je in een toernooispel zit, sta je automatisch op aan het einde van de %s. hand.</li>
	</ul>',
	'JV_POKER_HELP_OFFLINE_U_QUESTION'		=> 'Wat gebeurt er als mijn internetverbinding wegvalt?',
	'JV_POKER_HELP_PD_ANSWER'				=> '“phpBB Holdem Póker” verzamelt en bewaart het IP-adres van elke huidige speler totdat de gebruiker de tafel verlaat. Wanneer een gebruiker opstaat van de tafel, worden alle gegevens gewist en blijven alleen de statistische gegevens behouden. Het IP-adres wordt tijdens het spel opgeslagen om te voorkomen dat meerdere spelers aan dezelfde tafel hetzelfde IP-adres gebruiken. Uiteraard kan je deze IP-check in- en uitschakelen.',
	'JV_POKER_HELP_PD_QUESTION'				=> 'Slaat “phpBB Holdem Póker” persoonsgegevens op?',
	'JV_POKER_HELP_PLAY_ANSWER'				=> 'Poker is een van de meest populaire kaartspellen ter wereld. Het doel van het spel is om het meeste te halen uit de kaarten die je hebt ontvangen, in combinatie met de onthulde gemeenschappelijke kaarten, om uiteindelijk de inzet in het midden van de tafel te winnen (in het Engels “Pot” genoemd). Per pokerkamer kan het spel door 2-8 personen gespeeld worden. Het spel maakt gebruik van een Franse hand van 52 kaarten zonder joker. Elke speler krijgt twee privékaarten die niet door andere spelers kunnen worden gezien en gebruikt. Tijdens het spel worden vijf gemeenschappelijke kaarten zichtbaar op tafel, die alle spelers kunnen zien en gebruiken. De speler probeert nu een zo goed mogelijke “vijfkaartcombinatie” te maken van zijn eigen kaarten en de gemeenschappelijke kaarten. De speler met de sterkste kaarten wint de waarde van de inzet. Een deck Franse kaarten (zonder jokers) heeft 4 verschillende kleuren en elke kleur bestaat uit 13 kaarten van verschillende waarden, wat het deck van 52 kaarten oplevert. De volgorde van de 4 kleuren: <span class="poker_cs">♣</span> klaveren <span class="poker_dh">♦</span> ruiten <span class="poker_dh">♥</span> harten <span class="poker_cs">♠</span> schoppen. Alle kleuren zijn gelijk voor de evaluatie van pokerhanden. De 13 kaartwaarden in hun volgorde: A (Aas), 2, 3, 4, 5, 6, 7, 8, 9, 10, J (Boer), Q (Vrouw), K (Heer). Een aas is niet alleen een numerieke waarde van 1, het kan ook de hoogste kaart zijn na de koning.
		<br><br><strong>Dealer:</strong><br>
		Aan de pokertafel is er altijd een dealerpositie. De dealer behandelt de kaarten, mengt en verdeelt ze. De dealerbutton (D) geeft de speler aan die op dat moment de dealerpositie bekleedt. De dealer neemt deel aan het spel.

		<br><br><strong>Small blinds en big blinds:</strong><br>
		De eerste speler links van de dealerknop is de “small blind”, en de eerste speler links van de small blind is de “big blind”. Het zijn de blind spelers die hun weddenschappen moeten plaatsen zonder hun eigen kaarten te kennen. De “small blind” is de kleine startinzet, de “big blind” is de grote startinzet, die ze “blindelings” moeten doen.

		<br><br><strong>Bieden:</strong><br>
		Poker gebruikt “Chips” om te bieden, wat contant geld tijdens het spel vervangt. In de inzetronde gaat het bieden altijd in de linkerrichting en alle “actieve spelers” (die hun kaarten nog niet hebben gefold) zetten in en gaan door zolang er geen actieve inzetten meer worden verhoogd, vastgehouden of gefold. Het aantal biedingen en verhogingen zijn in overeenstemming met de limietregels.

		<br><br><strong>Delen:</strong><br>
		De dealer schudt het kaartspel. Voordat de kaarten worden gedeeld, worden de startinzetten van de “small blind” en de “big blind” geplaatst, waarna de dealer alle kaarten naar links legt. Dan begint de Pre-Flop (de eerste inzetronde), die anders is dan de andere inzetrondes in het spel.

		<br><br><strong>Pre-Flop (eerste biedingsronde):</strong><br>
		De eerste inzetronde wordt gestart door de eerste speler links van de “big blind” en er kunnen drie biedingen worden gedaan:
		<ul>
			<li>Call - De bestaande inzet wordt uitbetaald.</li>
			<li>Raise - betaalt de bestaande inzet uit en verhoogt deze binnen de limietregels.</li>
			<li>Fold - De kaarten worden met de afbeelding naar beneden op tafel gelegd en verlaten de ronde (opgeven).</li>
		</ul>

		De inzetronde gaat naar links en spelers kunnen bieden. Als je net de weddenschap hebt vastgehouden, dan:
		<ul>
			<li>De “small blind” moet in ieder geval met de small blind zijn eigen inzet verhogen of zijn kaarten folden en opgeven.</li>
			<li>De “big blinds” kunnen de inzet verhogen met in ieder geval hun big blind, ze kunnen checken - niet nog een bod doen - of hun kaarten folden en opgeven.</li>
		</ul>

		Wanneer een speler de inzet verhoogt, begint het bieden. Aan het einde van de inzetronde verzamelt de dealer de inzetten en stopt ze in het spelfonds, de “Pot”.
		<br><br><strong>Flop (tweede biedingsronde):</strong><br>
		De dealer deelt drie kaarten, de “Flop”, die open in het midden van de tafel word gelegd, zodat alle spelers ze kunnen zien. Dan begint de tweede inzetronde van het spel.

		<br><br><strong>In tegenstelling tot de Pre-Flop inzetronde, kunnen alle inzetrondes na de flop altijd beginnen met de eerste actieve speler links van de dealerbutton en kunnen er drie biedingen worden gedaan:</strong><br>
		<ul>
			<li>Check: Geef de actie door aan de volgende speler, call niet en fold je kaarten niet.</li>
			<li>Bet: Betaalt de openingsinzet volgens de limietregels.</li>
			<li>Fold: Leg de kaarten met de kleur naar beneden en geef de ronde op.</li>
		</ul>

		Als een speler de openingsinzet plaatst, kan de eerste actieve speler links van hem drie biedingen doen:
		<ul>
			<li>Call - De bestaande inzet wordt uitbetaald.</li>
			<li>Raise - Betaalt de bestaande inzet uit en verhoogt deze binnen de limietregels.</li>
			<li>Fold - De kaarten worden met de afbeelding naar beneden op tafel gelegd en verlaten de ronde (opgeven).</li>
		</ul>

		Wanneer een speler de inzet verhoogt, begint het bieden. Aan het einde van de inzetronde verzamelt de dealer de inzetten en plaatst ze in de Pot.
		<br><br><strong>Turn (derde biedingsronde)</strong><br>
		De dealer geeft een andere kaart met de naam “Turn” open naar boven aan de gemeenschappelijke kaarten. Dit geeft de speler vier gemeenschappelijke kaarten. Nu begint de derde inzetronde.

		<br><br><strong>River (vierde biedingsronde)</strong><br>
		De dealer deelt de laatste open gemeenschappelijke kaart, genaamd “River”. Dit geeft elke speler in totaal zeven kaarten. Vijf daarvan moeten worden gebruikt om een pokerhand te maken, die hopelijk van hogere kwaliteit is dan de hand van de tegenstander.

		<br><br><strong>Showdown (kaartpresentatie)</strong><br>
		Als er meer dan één speler in het spel blijft na het einde van de laatste inzetronde, worden de kaarten van de winnaar en de All-In spelers gepresenteerd. De pot wordt toegekend aan de speler met de sterkste hand van 5 kaarten. In het geval dat twee of meer spelers dezelfde sterkste hand hebben, wordt de Pot evenredig verdeeld. Als de waarde van de pot niet evenredig deelbaar is, heeft de eerste winnende speler links van de dealerknop recht op het meertal. Voor de volgende ronde wordt de dealerknop altijd een positie naar links verplaatst. De dealer is dus in elke ronde anders, en de blinds worden ook aan andere spelers toegewezen.

		<br><br><strong>Beoordeling van pokerhanden</strong><br>
		Bij poker is een pokerhand een combinatie van 5 kaarten, die de speler combineert van zijn eigen twee en de vijf gemeenschappelijke kaarten van de tafel (dat wil zeggen, in totaal zeven kaarten). De speler kan één, beide of geen van zijn eigen kaarten gebruiken. De kleuren van de kaarten zijn van gelijke waarde. Als twee spelers dezelfde combinatie hebben, bepaalt de bijbehorende kaart welke speler het spel wint. Een bijbehorende kaart (kicker) maakt geen deel uit van de combinatie, het begeleidt en “vult” het alleen aan. Als twee spelers gelijk spelen, dan beslist de hogere kicker. Als er nog steeds een gelijke stand is, wordt de pot verdeeld onder de winnaars.

		<br><br><strong>Limietregels</strong><br>
		De minimale inzet is altijd hetzelfde als de big blind.
		<ul>
			<li>Met een vaste limiet is het mogelijk om de big blind te verdrievoudigen tijdens de Pre-Flop (eerste inzetronde) en de Flop (tweede inzetronde). Voor de rondes kunnen Turn (derde inzetronde) en River (vierde inzetronde) alleen met de dubbele big blind door deze regel worden verhoogd.</li>
			<li>Geen limiet betekent dat het bedrag en het aantal verhogingen niet beperkt zijn.</li>
		</ul>

		<strong>Poker Hands:</strong>
		<ul>
			<li><strong>Royal Flush</strong>
				<ul><li>De sterkste kaartcombinatie. 10, boer, vrouw, koning, aas - allemaal in dezelfde kleur. Als er twee gelijk zijn, is er een gelijkspel (de prijs wordt verdeeld).<br>Voorbeeld: 10<span class="poker_dh">♥</span>, J<span class="poker_dh">♥</span>, Q<span class="poker_dh">♥</span>, K<span class="poker_dh">♥</span>, A<span class="poker_dh">♥</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Straight Flush</strong>
				<ul><li>opeenvolgende reeks van vijf kaarten van dezelfde kleur. Als het meerdere keren in de ronde voorkomt, beslist de hoogste kaart. Als er twee gelijk zijn, is er een gelijkspel (de prijs wordt verdeeld).<br>Voorbeeld: 5<span class="poker_cs">♣</span>, 6<span class="poker_cs">♣</span>, 7<span class="poker_cs">♣</span>, 8<span class="poker_cs">♣</span>, 9<span class="poker_cs">♣</span></li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Poker (four of a kind)</strong>
				<ul><li>Het bestaat uit vier kaarten met hetzelfde nummer of teken en elke andere kaart. Als meerdere van hen elkaar ontmoeten, wint de hoogste poker.<br>Voorbeeld: 7<span class="poker_dh">♥</span>, 7<span class="poker_cs">♠</span>, 7<span class="poker_cs">♣</span>, 7<span class="poker_dh">♦</span>, 10<span class="poker_cs">♠</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Full house</strong>
				<ul><li>Het bestaat uit drie kaarten met hetzelfde nummer of teken, en twee andere kaarten met hetzelfde nummer of teken. Als meerdere van hen elkaar ontmoeten, wint de hoogste three of a kind. Als het nog steeds een gelijkspel is, wint het hogere paar.<br>Voorbeeld: 5<span class="poker_dh">♦</span>, 5<span class="poker_cs">♣</span>, 5<span class="poker_cs">♠</span>, 8<span class="poker_dh">♥</span>, 8<span class="poker_cs">♠</span>.</li></ul
			</li>
		</ul>
		<ul>
			<li><strong>Flush</strong>
				<ul><li>Bestaat uit vijf willekeurige kaarten van dezelfde kleur. Als meerdere van hen elkaar ontmoeten, wint de speler die de hoogste kaart heeft die niet elke speler heeft. Nog steeds bij een gelijkspel, de op één na hoogste kaartscores, enzovoort…<br>Voorbeeld: 2<span class="poker_cs">♠</span>, 4<span class="poker_cs">♠</span>, 5<span class="poker_cs">♠</span>, 7<span class="poker_cs">♠</span>, 10<span class="poker_cs">♠</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Straight</strong>
				<ul><li>Bestaat uit 5 opeenvolgende kaarten van elke kleur. Als er meer dan één voorkomt, wint de speler met de hoogste kaart. Als er nog geen beslissing moet worden genomen, is er een gelijkspel (de prijs wordt verdeeld).<br>Voorbeeld: 4<span class="poker_dh">♥</span>, 5<span class="poker_dh">♦</span>, 6<span class="poker_cs">♠</span>, 7<span class="poker_cs">♠</span>, 8<span class="poker_cs">♣</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Three of a kind (trips)</strong>
				<ul><li>Het bestaat uit drie kaarten met hetzelfde nummer of teken en twee van een ander. Als meerdere van hen elkaar ontmoeten, wint de hoogste three of a kind. Als er geen beslissing wordt genomen, beslist de hogere neutrale kaart dan de lagere kaart. <br>Voorbeeld: 3<span class="poker_dh">♥</span>, 3<span class="poker_cs">♣</span>, 3<span class="poker_cs">♠</span>, 7<span class="poker_cs">♠</span>, 10<span class="poker_dh">♦</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Two pairs</strong>
				<ul><li>Het bestaat uit twee keer twee kaarten met hetzelfde nummer of teken en een andere kaart. Als er meerdere dubbele paren zijn, beslist het hogere paar, dan de op één na hoogste en, indien nodig, de neutrale kaart.<br>Voorbeeld: 5<span class="poker_cs">♠</span>, 5<span class="poker_dh">♦</span>, 8<span class="poker_cs">♠</span>, 8<span class="poker_cs">♣</span>, 10<span class="poker_dh">♦</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>One pair</strong>
				<ul><li>Het bestaat uit twee kaarten met hetzelfde nummer of teken, en drie andere kaarten. Als er meerdere paren zijn, beslist het hogere paar, dan zijn de neutrale kaarten.<br>Voorbeeld: 3<span class="poker_dh">♥</span>, 5<span class="poker_cs">♠</span>, 7<span class="poker_cs">♣</span>, 10<span class="poker_dh">♦</span>, 10<span class="poker_cs">♠</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>High card</strong>
				<ul><li>Elke Kaart.
			</li>
		</ul>',
	'JV_POKER_HELP_PLAY_QUESTION'			=> 'Hoe speel je poker?',
	'JV_POKER_HELP_POKER_ANSWER'			=> 'PhpBB Holdem Póker is een kaartspel dat geregistreerde gebruikers tegen elkaar kunnen spelen. Alleen een beheerder kan het gebruik van poker toelaten. De volgende gids zal echter waarschijnlijk nuttig zijn.',
	'JV_POKER_HELP_POKER_QUESTION'			=> 'Wat is phpBB Holdem Póker?',
	'JV_POKER_HELP_PRACTICE_ANSWER'			=> 'Iedereen kan in deze kamer spelen, ook als ze geen eigen chips hebben. Elke speler krijgt een vooraf bepaald aantal chips als hij gaat zitten. De chips die in deze kamer worden gewonnen, kunnen niet uit de kamer worden gehaald of worden geruild.',
	'JV_POKER_HELP_PRACTICE_QUESTION'		=> 'Wat betekent het om in een praktijkkamer te zijn?',
	'JV_POKER_HELP_PROFIT_ANSWER'			=> 'De beheerder heeft het winst systeem geactiveerd, wat betekent dat voor elke nieuwe hand, 40% van de small blind van elke speler wordt afgetrokken.',
	'JV_POKER_HELP_PROFIT_JP_ANSWER'		=> '80% van dit afgetrokken bedrag gaat naar het JackPot fonds.',
	'JV_POKER_HELP_PROFIT_QUESTION'			=> 'Mijn chips zullen minder zijn voor elke nieuwe hand, waarom?',
	'JV_POKER_HELP_PTOC_ANSWER'				=> 'Ja, gebruik hiervoor de knop “Chips wisselen” op de hoofdpagina van poker naast de chips die in je eigen profiel worden weergegeven.',
	'JV_POKER_HELP_PTOC_QUESTION'			=> 'Kunnen “%s” worden ingewisseld voor chips?',
	'JV_POKER_HELP_REG_ANSWER'				=> 'Alleen geregistreerde gebruikers kunnen phpBB Holdem Póker spelen, dus het is een goed idee om een geregistreerd lid te zijn.',
	'JV_POKER_HELP_REG_QUESTION'			=> 'Waarom moet ik me überhaupt registreren?',
	'JV_POKER_HELP_SHOUT_ANSWER'			=> 'Als de beheerder toestemming heeft gegeven, dan wel. Als je niet over de vereiste machtigingen beschikt, kun je alleen berichten over de voortgang van het spel op het prikbord lezen.',
	'JV_POKER_HELP_SHOUT_QUESTION'			=> 'Kan ik het prikbord gebruiken tijdens een spel?',
	'JV_POKER_HELP_SHOUT_SOUND_ANSWER'		=> 'Ja. Je kan het prikbord afzonderlijk uitschakelen. Als je het prikbord uitschakelt, wordt het geluid van het spel niet uitgeschakeld.',
	'JV_POKER_HELP_SHOUT_SOUND_QUESTION'	=> 'Kan ik het prikbord uitzetten?',
	'JV_POKER_HELP_STATUS_ANSWER'			=> 'Het veld onder “Status” geeft aan of deze kamer al dan niet in een spel zit.',
	'JV_POKER_HELP_STATUS_QUESTION'			=> 'Wat betekent status?',
	'JV_POKER_HELP_SU_SHOUT_ANSWER'			=> 'Nee, het prikbord kan alleen worden gebruikt door een zittende gebruiker.',
	'JV_POKER_HELP_SU_SHOUT_QUESTION'		=> 'Als ik opsta, kan ik dan het prikbord gebruiken?',
	'JV_POKER_HELP_S_SHOUT_ANSWER'			=> 'Het prikbord kan in ieder geval alleen de laatste 8 regels weergeven, dus verder scrollen is niet mogelijk.',
	'JV_POKER_HELP_S_SHOUT_QUESTION'		=> 'Hoe scroll ik door berichten?',
	'JV_POKER_HELP_TOUR_ANSWER'				=> 'In een toernooikamer kunnen alleen gebruikers spelen die hun eigen chips bezitten en die genoeg chips kunnen inbrengen voor het vereiste minimale inschrijfbedrag. Elk van deze kamers heeft een vast minimumbedrag om aan de slag te gaan. Chips die in deze kamer zijn gewonnen, kunnen uit de kamer worden gehaald en je chips verhogen. Deze chips kunnen weer worden ingewisseld.',
	'JV_POKER_HELP_TOUR_QUESTION'			=> 'Wat betekent het om in een toernooikamer te zitten?',
	'JV_POKER_HELP_USER_STATS_ANSWER'		=> 'Ja, als de beheerder toestemming geeft om statistieken te bekijken.',
	'JV_POKER_HELP_USER_STATS_QUESTION'		=> 'Kan ik de statistieken van de gebruiker zien?'
]);
