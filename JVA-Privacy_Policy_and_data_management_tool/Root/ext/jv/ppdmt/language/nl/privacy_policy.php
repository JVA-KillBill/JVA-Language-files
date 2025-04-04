<?php
/**
*
* @package JVA - Privacy Policy and data management tool
* @version $Id$
* @author 2011-2025 KillBill
* @copyright (c) 2014-2025 https://jv-arcade.com/ - https://jv-arcade.com/contact
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
// 'Page %s of %s' you can (and should) write 'Page “%1$s” of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// Some characters you may want to copy&paste: ‚ ‘ ’ « » „ “ ” …

/*
%1$s :: Website name
%2$s :: Controller name
%3$s :: Contact email address
%4$s :: Phone number of the controller
%5$s :: Description of cookies in use
%6$s :: Added plus one line if we disable cookies for guests
*/

$lang = array_merge($lang, [
	'JVPPDMT_APPROVAL'						=> 'Goedkeuren',
	'JVPPDMT_CONFIRM'						=> 'Ik heb het privacybeleid gelezen en begrepen.',
	'JVPPDMT_COOKIE_CONFIRM'				=> 'Selecteer of de %s website cookies op je apparaat kan opslaan:',
	'JVPPDMT_COOKIE_DESC'					=> 'Aandacht! Deze website maakt gebruik van cookies om ervoor te zorgen dat je de beste ervaring op onze website krijgt. <a onclick="window.open(this.href); return false;" href="https://cookiesandyou.com/">Leer meer</a>.<br>Hier heeft u de mogelijkheid om cookies te accepteren of te weigeren, en op elk moment kan je het gebruik van website cookies in uw browser instellingen uitschakelen.',
	'JVPPDMT_DISABLED_COOKIE_GUEST_USER'	=> 'We hebben geen cookies opgeslaan op apparaten van gast gebruikers!',
	'JVPPDMT_NOT_CONFIRM'					=> 'Aandacht! Je hebt geen selectie gemaakt om te bevestigen.',
	'JVPPDMT_ONLY_ALREADY_EXISTING_DATA'	=> 'De reeds opgeslane gegevens keur ik goed, maar verder niets.<br><em>Houd er rekening mee dat als je voor deze optie kiest, u zich in een groep bevindt die alleen in aanmerking komt voor weergave. Uiteraard kan je deze beslissing later in de gebruikerspaneel/privacygegevens instellingen wijzigen.</em>',
	'JVPPDMT_ONLY_REGISTER_DATA'			=> 'De persoonlijke gegevens die vereist zijn voor registratie keur ik goed, maar verder niets.<br><em>Houd er rekening mee dat, als je voor deze optie kiest, je je in een groep bevindt die alleen in aanmerking komt voor weergave. Uiteraard kan je deze beslissing later in de gebruikerspaneel/privacygegevens instellingen wijzigen.</em>',
	'JVPPDMT_PERSONAL_DATA_CONFIRM'			=> 'Selecteer of de %s website je persoonlijke gegevens mag gebruiken en opslaan. De persoonlijke gegevens worden niet doorgegeven aan derden.',
	'JVPPDMT_PERSONAL_DATA_REG'				=> 'Aandacht! Tijdens de registratie moeten persoonlijke gegevens worden verstrekt.',
	'JVPPDMT_PRIVACY_POLICY'				=> 'Privacybeleid',
	'JVPPDMT_PRIVACY_POLICY_DESC'			=> 'Gegevensbescherming heeft een bijzonder hoge prioriteit voor het beheer van de website “%1$s”. Het gebruik van de internetpagina’s van de website “%1$s” is mogelijk zonder enige aanwijzing van persoonlijke gegevens; als een betrokkene via onze website speciale diensten wil gebruiken, kan het echter nodig zijn om persoonsgegevens te verwerken. Als de verwerking van persoonsgegevens noodzakelijk is en er geen wettelijke basis voor dergelijke verwerking bestaat, verkrijgen we doorgaans toestemming van de betrokkene.

De verwerking van persoonsgegevens, zoals de naam, het adres, het e-mailadres of telefoonnummer van een betrokkene, moet altijd in overeenstemming zijn met de Algemene Verordening Gegevensbescherming (AVG) en in overeenstemming met de land specifieke gegevensbeschermingsvoorschriften die van toepassing zijn op de website “%1$s”. Met behulp van deze privacyverklaring willen we het grote publiek informeren over de aard, de omvang en het doel van de persoonlijke gegevens die we verzamelen, gebruiken en verwerken. Bovendien worden betrokkenen door middel van deze verklaring inzake gegevensbescherming op de hoogte gebracht van de rechten waarop zij recht hebben.

De controller van de website “%1$s” heeft tal van technische en organisatorische maatregelen gecreëerd om de meest volledige bescherming van persoonsgegevens die via deze website worden verwerkt te waarborgen. Op internet gebaseerde gegevenstransmissies kunnen echter in principe beveiligingslacunes hebben, dus absolute bescherming kan mogelijk niet worden gegarandeerd. Om deze reden is elke betrokkene vrij om persoonlijke gegevens aan ons over te dragen via alternatieve middelen, bijvoorbeeld telefonisch.

<h3>Definities</h3>
De verklaring met betrekking tot de gegevensbescherming van de website “%1$s” is gebaseerd op de voorwaarden die door de Europese wetgever worden gebruikt voor de goedkeuring van de algemene verordening gegevensbescherming (AVG). Onze verklaring inzake gegevensbescherming moet leesbaar en begrijpelijk zijn voor het grote publiek, maar ook voor onze klanten en partners. Om dit te garanderen, willen we eerst de gebruikte terminologie toelichten.

In deze privacyverklaring gebruiken we onder meer de volgende voorwaarden:

<strong>a) Persoonlijke gegevens</strong>
Persoonlijke gegevens betekent alle informatie met betrekking tot een geïdentificeerde of identificeerbare natuurlijke persoon (“betrokkene”). Een identificeerbare natuurlijke persoon is iemand die direct of indirect kan worden geïdentificeerd, met name door te verwijzen naar een identificator zoals een naam, een identificatienummer, locatiegegevens, een online identificator of een of meer factoren die specifiek zijn voor de fysieke, fysiologische, genetische, mentale, economische, culturele of sociale identiteit van die natuurlijke persoon.

<strong>b) Betrokkene</strong>
Betrokkene is een geïdentificeerde of identificeerbare natuurlijke persoon, wiens persoonsgegevens worden verwerkt door de verantwoordelijke voor de verwerking.

<strong>c) Verwerken</strong>
Verwerking is elke bewerking of reeks handelingen die wordt uitgevoerd op persoonlijke gegevens of op een verzameling van persoonlijke gegevens, al dan niet met geautomatiseerde middelen, zoals verzameling, opname, organisatie, structurering, opslag, aanpassing of wijziging, opvraging, raadpleging, gebruik, openbaarmaking door verzending, verspreiding of anderszins beschikbaar stellen, aanpassing of combinatie, beperking, wissing of vernietiging.

<strong>d) Beperking van verwerking</strong>
Beperking van verwerking is het markeren van opgeslaan persoonlijke gegevens met het doel hun verwerking in de toekomst te beperken.

<strong>e) Controller verantwoordelijk voor de verwerking</strong>
Verantwoordelijke die verantwoordelijk is voor de verwerking is de natuurlijke of rechtspersoon, overheidsinstantie, agentschap of andere instantie die, alleen of samen met anderen, de doeleinden en middelen voor de verwerking van persoonsgegevens bepaalt; wanneer het doel en de middelen van een dergelijke verwerking worden bepaald door het recht van de Unie of de lidstaten, kan de voor de verwerking verantwoordelijke of de specifieke criteria voor de aanwijzing ervan door de wetgeving van de Unie of de lidstaten worden geregeld.

<strong>f) Verwerker</strong>
Verwerker is een natuurlijke of rechtspersoon, overheidsinstantie, agentschap of andere instantie die persoonsgegevens namens de controller verwerkt.

<strong>g) Ontvanger</strong>
De ontvanger is een natuurlijke persoon of rechtspersoon, een overheidsinstantie, een agentschap of een andere instantie waaraan de persoonsgegevens worden verstrekt, ongeacht of deze derden zijn of niet. Overheidsinstanties die in het kader van een bepaald onderzoek persoonsgegevens kunnen ontvangen in overeenstemming met de wetgeving van de Unie of de lidstaten, worden echter niet als ontvangers beschouwd; de verwerking van die gegevens door die overheidsinstanties moet in overeenstemming zijn met de toepasselijke gegevensbeschermingsregels overeenkomstig met de doeleinden van de verwerking.

<strong>h) Derde party</strong>
Derde partij is een natuurlijke of rechtspersoon, overheidsinstantie of instantie die niet de betrokkene, controller, verwerker en persoon is die, onder het directe gezag van de verantwoordelijke voor de verwerking of de verwerker, gemachtigd zijn om persoonsgegevens te verwerken.

<strong>i) Toestemming</strong>
Toestemming van de betrokkene is een vrije, specifieke, geïnformeerde en ondubbelzinnige indicatie van de wensen van de betrokkene waarmee hij of zij, door een verklaring of een duidelijke bevestigende handeling, instemt met de verwerking van persoonsgegevens die op hem of haar betrekking hebben .

<h3>Gegevens van de controller</h3>
Controller in het kader van de Algemene Verordening Gegevensbescherming (AVG), andere wetgeving inzake gegevensbescherming die van toepassing is in de lidstaten van de Europese Unie en andere bepalingen met betrekking tot gegevensbescherming is:

<strong>Controller:</strong> %2$s

<strong>Contact Email adres:</strong> %3$s
<strong>Telefoonnummer:</strong> %4$s

<h3>Cookies</h3>
De internetpagina’s van de website “%1$s” gebruiken cookies. Cookies zijn tekstbestanden die via een internetbrowser in een computersysteem worden opgeslaan.

Veel internetsites en servers gebruiken cookies. Veel cookies bevatten een zogenaamde cookie-ID. Een cookie-ID is een unieke identificatie van de cookie. Het bestaat uit een tekenreeks waarmee internetpagina’s en servers kunnen worden toegewezen aan de specifieke internetbrowser waarin de cookie is opgeslaan. Hierdoor kunnen bezochte internetsites en servers de individuele browser van de betrokkene onderscheiden van andere internetbrowsers die andere cookies bevatten. Een specifieke internetbrowser kan worden herkend en geïdentificeerd met behulp van de unieke cookie-ID.

Door het gebruik van cookies kan de website “%1$s” de gebruikers van deze website voorzien van gebruiksvriendelijkere diensten die niet mogelijk zouden zijn zonder de cookie-instelling.

Door middel van een cookie kunnen de informatie en aanbiedingen op onze website worden geoptimaliseerd met de gebruiker in gedachten. Cookies stellen ons in staat om, zoals eerder vermeld, onze website gebruikers te herkennen. Het doel van deze erkenning is om het voor gebruikers gemakkelijker te maken om onze website te gebruiken. De website gebruiker die cookies gebruikt hoeft geen toegangsgegevens in te voeren telkens wanneer de website wordt geopend, omdat deze wordt overgenomen door de website en de cookie en dus wordt opgeslaan op het computersysteem van de gebruiker. Een ander voorbeeld is de cookie van een winkelwagentje in een online winkel. De online winkel onthoudt de artikelen die een klant via een cookie in het virtuele winkelwagentje heeft geplaatst. Een browser spel kan de huidige score of level status opslaan in een cookie en aan het einde van het spel terugkeren naar het scorebord voor opslag.

Concrete voorbeelden van het gebruik van cookies op onze website:
%5$s

De betrokkene kan te allen tijde het plaatsen van cookies via onze website verhinderen door middel van een overeenkomstige instelling van de gebruikte internetbrowser en kan bijgevolg het instellen van cookies permanent weigeren. Bovendien kunnen reeds ingestelde cookies op elk moment worden verwijderd via een internetbrowser of andere softwareprogramma’s. Dit is mogelijk in alle populaire internetbrowsers. Als de betrokkene de instelling van cookies in de gebruikte internetbrowser deactiveert, zijn mogelijk niet alle functies van onze website volledig bruikbaar.
%6$s
<h3>Verzameling van algemene gegevens en informatie</h3>
De website “%1$s” verzamelt een reeks algemene gegevens en informatie wanneer een betrokkene of een geautomatiseerd systeem de website oproept. Deze algemene gegevens en informatie worden opgeslaan in de serverlogbestanden. Verzameld kan zijn (1) de gebruikte browser typen en versies, (2) het besturingssysteem gebruikt door het toegangssysteem, (3) de website vanwaar een toegangssysteem onze website bereikt (zogenaamde verwijzers), (4) de sub websites, (5) de datum en tijd van toegang tot de internetsite, (6) een internet protocol adres (IP-adres), (7) de internetprovider van het toegangssysteem, en (8) alle andere soortgelijke gegevens en informatie die kan worden gebruikt in het geval van aanvallen op onze informatietechnologie systemen.

Bij gebruik van deze algemene gegevens en informatie trekt de website “%1$s” geen conclusies over de betrokkene. Deze informatie is veeleer nodig om (1) de inhoud van onze website correct te leveren, (2) de inhoud van onze website en advertentie te optimaliseren, (3) de levensvatbaarheid op lange termijn van onze informatietechnologie systemen en website technologie te verzekeren. en (4) wetshandhavingsinstanties de informatie verstrekken die nodig is voor strafrechtelijke vervolging in geval van een cyberaanval. Daarom analyseert de website “%1$s” anoniem verzamelde gegevens en informatie statistisch, met het doel de gegevensbescherming en gegevensbeveiliging van onze website te vergroten en om een optimaal niveau van bescherming te garanderen voor de persoonlijke gegevens die we verwerken. De anonieme gegevens van de serverlogbestanden worden afzonderlijk opgeslaan van alle persoonlijke gegevens die door een betrokkene worden verstrekt.

<h3>Registratie op onze website</h3>
De betrokkene heeft de mogelijkheid om zich op de website van de verantwoordelijke te registreren met vermelding van persoonsgegevens. De registratie van de betrokkene, met vrijwillige vermelding van persoonsgegevens, is bedoeld om de voor de verwerking verantwoordelijke in staat te stellen de inhoud van de gegevenssubjecten of diensten aan te bieden die alleen aan geregistreerde gebruikers kunnen worden aangeboden vanwege de aard van de kwestie in kwestie. Welke persoonlijke gegevens naar de controller worden verzonden, wordt bepaald door het respectievelijke invoermasker dat voor de registratie wordt gebruikt. De persoonlijke gegevens die door de betrokkene worden ingevoerd, worden uitsluitend voor intern gebruik door de verantwoordelijke voor eigen doeleinden verzameld en opgeslaan.

Om een account te registreren op de website van de controller, zijn ten minste de volgende persoonlijke gegevens vereist: een unieke identificeerbare gebruikersnaam, een persoonlijk wachtwoord dat wordt gebruikt om in te loggen op je account en een persoonlijk geldig e-mailadres. Dit e-mailadres is vereist om de bevestigingslink te ontvangen die wordt gebruikt om de registratie te verifiëren en om verdere berichten van de website te ontvangen. De verdere berichten kunnen optioneel worden geselecteerd en gedeselecteerd in het gebruikerspaneel na het succesvol aanmelden. Je wachtwoord is versleuteld (een one-way hash) zodat het veilig is. Het wordt echter aanbevolen dat je hetzelfde wachtwoord niet opnieuw gebruikt op een aantal verschillende websites. Je wachtwoord is het middel om toegang te krijgen tot je account op deze website, dus bewaar het zorgvuldig. In geen geval zal iemand die is aangesloten bij deze website of een andere derde partij, u wettig om je wachtwoord vragen. Als je je wachtwoord voor je account bent vergeten, kan je de "Ik ben mijn wachtwoord vergeten" functie van de software gebruiken. Dit proces vraagt ​​u om de gebruikte gebruikersnaam en het e-mailadres in te voeren dat je in je profiel hebt ingevoerd. Vervolgens genereert de software een nieje wachtwoord om je account terug te vorderen. Om deze reden is het aanbevolen om het e-mailadres altijd up-to-date te houden.

Door zich te registreren op de website van de controller, worden ook het IP-adres toegewezen door de internetprovider (ISP) en gebruikt door de datum van het onderwerp en het tijdstip van registratie geregistreerd. De opslag van deze gegevens vindt plaats op de achtergrond omdat dit de enige manier is om misbruik van onze diensten te voorkomen en, indien nodig, om het mogelijk te maken om gepleegde delicten te onderzoeken. In zoverre is de opslag van deze gegevens noodzakelijk om de controller te beveiligen. Deze gegevens worden niet doorgegeven aan derden tenzij er een wettelijke verplichting is om de gegevens door te geven of als de overdracht strafrechtelijke vervolging tot doel heeft.

Door zich te registreren op de website van de controller, stelt de betrokkene de controller in staat om de gegevens die zijn ingevoerd door de betrokkene op te slaan als onderdeel van de registratie en in het profiel, evenals doorlopende toegangsgegevens (datum en tijd van gebruik, IP-adres locatiegegevens, scores en andere gegevens verzonden door de browser van de betrokkene), en te gebruiken voor de werking van de website. Opgemerkt moet worden dat alle gegevens die in het profiel zijn ingevoerd en berichten die door de betrokkene zijn geschreven, afhankelijk van de configuratie op internet beschikbaar kunnen zijn en door iedereen kunnen worden opgeroepen. Bovendien staat de betrokkene toe dat de website contact opneemt om de administratieve berichten te verzenden die nodig zijn om het gebruikersaccount te openen en te beheren.

Het staat geregistreerde personen vrij om op elk moment de persoonlijke gegevens te wijzigen die tijdens de registratie zijn opgegeven, of deze volledig uit de data opslag van de controller te verwijderen.

De voor de verwerking verantwoordelijke verstrekt op elk moment op verzoek informatie aan elke betrokkene over welke persoonsgegevens over de betrokkene zijn opgeslaan. Bovendien corrigeert of wist de voor de verwerking verantwoordelijke persoonsgegevens op verzoek of op aanwijzing van de betrokkene, voor zover er geen wettelijke opslag verplichtingen zijn. Het geheel van de medewerkers van de controller is in dit opzicht beschikbaar voor de betrokkene als contactpersonen.

<h3>Contact mogelijkheid via de website</h3>
De website “%1$s” bevat informatie die een snel elektronisch contact met ons mogelijk maakt, evenals directe communicatie met ons, die ook een algemeen adres van de zogenaamde elektronische post (e-mailadres) bevat. Als een betrokkene contact opneemt met de verantwoordelijke per e-mail of via een contact formulier, worden de door de betrokkene doorgegeven persoonlijke gegevens automatisch opgeslaan. Dergelijke persoonlijke gegevens die op vrijwillige basis door een betrokkene aan de gegevensbeheerder worden doorgegeven, worden opgeslaan met het doel deze te verwerken of contact op te nemen met de betrokkene. Er is geen overdracht van deze persoonlijke gegevens aan derden.

<h3>Routine wissen en blokkeren van persoonlijke gegevens</h3>
De voor de verwerking verantwoordelijke verwerkt en bewaart de persoonsgegevens van de betrokkene alleen voor de periode die nodig is om het doel van opslag te bereiken, of voor zover dit door de Europese wetgever of andere wetgevers wordt toegestaan in wet of regelgeving waaraan de voor de verwerking verantwoordelijke is aan onderworpen.

Als het opslagdoel niet van toepassing is, of als een door de Europese wetgever of een andere bevoegde wetgever voorgeschreven bewaartermijn vervalt, worden de persoonlijke gegevens routinematig geblokkeerd of gewist in overeenstemming met de wettelijke vereisten.

<h3>Rechten van de betrokkene</h3>
<strong>a) Recht op bevestiging</strong>
Elke betrokkene heeft het recht dat door de Europese wetgever wordt verleend om van de voor de verwerking verantwoordelijke de bevestiging te verkrijgen dat persoonsgegevens over hem of haar al dan niet worden verwerkt. Als een betrokkene gebruik wenst te maken van dit recht op bevestiging, kan hij of zij op enig moment contact opnemen met een medewerker van de verantwoordelijke voor de verwerking.

<strong>b) Recht van toegang</strong>
Elke betrokkene heeft het recht dat door de Europese wetgever wordt verleend om van de voor de verwerking verantwoordelijke kosteloos informatie over zijn of haar opgeslaan persoonlijke gegevens en een kopie van deze informatie te verkrijgen. Bovendien verlenen de Europese richtlijnen en verordeningen de betrokkene toegang tot de volgende informatie:

de doeleinden van de verwerking;
de betrokken categorieën persoonsgegevens;
de ontvangers of categorieën ontvangers aan wie de persoonsgegevens zijn of zullen worden bekendgemaakt, met name ontvangers in derde landen of internationale organisaties;
waar mogelijk de beoogde periode waarvoor de persoonsgegevens worden opgeslaan of, indien niet mogelijk, de criteria die worden gebruikt om die periode te bepalen;
het bestaan van het recht om bij de verwerkingsverantwoordelijke rectificatie of wissing van persoonsgegevens te verzoeken, of beperking van de verwerking van persoonsgegevens met betrekking tot de betrokkene, of bezwaar te maken tegen dergelijke verwerking;
het bestaan van het recht om een klacht in te dienen bij een toezichthoudende autoriteit;
indien de persoonsgegevens niet bij de betrokkene worden verzameld, alle beschikbare informatie over hun bron;
het bestaan van geautomatiseerde besluitvorming, inclusief profilering, als bedoeld in artikel 22(1) en (4) van de AVG en, althans in die gevallen, zinvolle informatie over de betrokken logica, alsmede de betekenis en beoogde gevolgen van dergelijke verwerking voor de betrokkene.
Bovendien heeft de betrokkene het recht informatie te verkrijgen over de vraag of persoonsgegevens worden doorgegeven aan een derde land of aan een internationale organisatie. Wanneer dit het geval is, heeft de betrokkene het recht te worden geïnformeerd over de passende waarborgen met betrekking tot de overdracht.

Als een betrokkene gebruik wenst te maken van dit recht op toegang, kan hij of zij op enig moment contact opnemen met een medewerker van de verantwoordelijke voor de verwerking.

<strong>c) Recht op rectificatie</strong>
Elke betrokkene heeft het recht dat door de Europese wetgever wordt verleend om onverwijld de rectificatie van onjuiste persoonsgegevens die op hem of haar betrekking hebben, bij de voor de verwerking verantwoordelijke te verkrijgen. Rekening houdend met de doeleinden van de verwerking heeft de betrokkene het recht onvolledige persoonsgegevens te vervolledigen, onder meer door een aanvullende verklaring te verstrekken.

Als een betrokkene dit recht op rectificatie wenst uit te oefenen, kan hij of zij op enig moment contact opnemen met een medewerker van de verantwoordelijke.

<strong>d) Recht om te wissen (recht om te worden vergeten)</strong>
Elke betrokkene heeft het recht dat door de Europese wetgever wordt verleend om van de voor de verwerking verantwoordelijke het wissen van persoonsgegevens over hem of haar te verkrijgen zonder onnodige vertraging, en de voor de verwerking verantwoordelijke is verplicht om persoonsgegevens zonder onnodige vertraging te wissen wanneer één van de volgende redenen van toepassing is, zolang de verwerking niet nodig is:

De persoonlijke gegevens zijn niet langer nodig met betrekking tot de doeleinden waarvoor ze zijn verzameld of anderszins zijn verwerkt.
De betrokkene trekt de toestemming in waarmee de verwerking is verwerkt in overeenkomstig artikel 6(1) volgens punt (a) van de AVG, of artikel 9(2) volgens punt (a) van de AVG, en wanneer er geen andere rechtsgrondslag is voor de verwerking.
De betrokkene heeft bezwaar tegen de verwerking overeenkomstig artikel 21(1) van de AVG en er zijn geen doorslaggevende gerechtvaardigde gronden voor de verwerking, of de betrokkene heeft bezwaar tegen de verwerking overeenkomstig artikel 21(2) van de AVG.
De persoonlijke gegevens zijn onrechtmatig verwerkt.
De persoonsgegevens moeten worden gewist om te voldoen aan een wettelijke verplichting in het recht van de Unie of de lidstaat waaraan de voor de verwerking verantwoordelijke is onderworpen.
De persoonsgegevens zijn verzameld met betrekking tot het aanbieden van diensten van de informatiemaatschappij als bedoeld in artikel 8(1) van de AVG.
Als een van de bovengenoemde redenen van toepassing is en een betrokkene om verwijdering van door de website “%1$s” opgeslaan persoonlijke gegevens verzoekt, kan hij of zij op enig moment contact opnemen met een medewerker van de verantwoordelijke. Een medewerker van “%1$s” zorgt er onmiddellijk voor dat aan het verzoek tot wissen onmiddellijk wordt voldaan.

Wanneer de voor de verwerking verantwoordelijke persoonsgegevens openbaar heeft gemaakt en overeenkomstig artikel 17(1) van de AVG verplicht is om de persoonsgegevens te wissen, neemt de voor de verwerking verantwoordelijke, rekening houdend met de beschikbare technologie en de kosten van de uitvoering, redelijke stappen, inclusief technische maatregelen; om andere controleurs die de persoonsgegevens verwerken te informeren dat de betrokkene verzocht heeft om door dergelijke controlemechanismen alle links naar of kopie of replicatie van die persoonsgegevens te wissen, voor zover verwerking niet vereist is. Een medewerker van de website “%1$s” zal in individuele gevallen de nodige maatregelen treffen.

<strong>e) Recht op beperking van verwerking</strong>
Elke betrokkene heeft het recht dat door de Europese wetgever wordt verleend om van de voor de verwerking verantwoordelijke een beperking van de verwerking te verkrijgen wanneer een van de volgende situaties van toepassing is:

De juistheid van de persoonsgegevens wordt door de betrokkene betwist, gedurende een periode die de controller in staat stelt de juistheid van de persoonsgegevens te verifiëren.
De verwerking is onwettig en de betrokkene is tegen het wissen van de persoonsgegevens en vraagt in plaats daarvan de beperking van het gebruik ervan.
De voor de verwerking verantwoordelijke heeft de persoonsgegevens niet langer nodig voor de doeleinden van de verwerking, maar deze worden door de betrokkene vereist voor het instellen, uitoefenen of verdedigen van wettelijke claims.
De betrokkene heeft bezwaar gemaakt tegen verwerking overeenkomstig met artikel 21(1) van de AVG in afwachting van de verificatie of de gerechtvaardigde gronden van de voor de verwerker voorrang hebben op die van de betrokkene.
Als aan één van de bovengenoemde voorwaarden is voldaan en een betrokkene de beperking van de verwerking van persoonlijke gegevens die is opgeslaan door de website “%1$s” wil aanvragen, kan hij of zij op elk gewenst moment contact opnemen met een medewerker van de controller. De medewerker van de website “%1$s” regelt de beperking van de verwerking.

<strong>f) Recht op gegevens overdracht</strong>
Elke betrokkene heeft het recht dat door de Europese wetgever wordt verleend om de hem betreffende persoonsgegevens die aan een verantwoordelijke zijn verstrekt, in een gestructureerd, veelgebruikt en machinaal leesbaar formaat te ontvangen. Hij of zij heeft het recht die gegevens aan een andere voor de verwerking verantwoordelijke over te maken zonder de verantwoordelijke voor de verwerking waarvan de persoonsgegevens zijn verstrekt, te belemmeren, mits de verwerking is gebaseerd op toestemming overeenkomstig artikel 6(1) onder punt (a) van de AVG of onder punt (a) van artikel 9(2) van de AVG, of een overeenkomst op grond van artikel 6(1) onder punt (b), van de AVG, en de verwerking gebeurt met geautomatiseerde middelen, zolang de verwerking niet nodig is voor de uitvoering van een taak die wordt uitgevoerd in het openbaar belang of bij de uitoefening van het openbaar gezag door de voor de verwerking verantwoordelijke.

Bovendien heeft de betrokkene bij de uitoefening van zijn recht op gegevensportabiliteit overeenkomstig artikel 20(1) van de AVG het recht persoonsgegevens rechtstreeks van de ene naar de andere te laten doorgeven, waar technisch mogelijk is en de rechten en vrijheden van anderen niet nadelig beïnvloedt.

Om het recht op gegevensportabiliteit te doen gelden, kan de betrokkene op elk moment contact opnemen met een medewerker van de website “%1$s”.

<strong>g) Recht op bezwaar</strong>
Elke betrokkene heeft het recht dat door de Europese wetgever wordt verleend om, om redenen die verband houden met zijn of haar specifieke situatie, te allen tijde bezwaar te maken tegen de verwerking van persoonsgegevens die op hem/haar betrekking hebben, die gebaseerd is op punt (e) of (f) van artikel 6(1) van de AVG. Dit geldt ook voor profilering op basis van deze bepalingen.

De website “%1$s” verwerkt de persoonsgegevens niet langer in het geval van bezwaar, tenzij we overtuigende legitieme redenen voor de verwerking kunnen aantonen die de belangen, rechten en vrijheden van de betrokkene of de vestiging overschrijden, uitoefening of verdediging van juridische claims.

Als de website “%1$s” persoonsgegevens verwerkt voor direct marketingdoeleinden, heeft de betrokkene het recht om te allen tijde bezwaar te maken tegen de verwerking van persoonsgegevens die voor hem of haar van belang zijn voor dergelijke marketing. Dit geldt voor profilering voor zover het gerelateerd is aan dergelijke direct marketing. Als de betrokkene bezwaar maakt tegen de website “%1$s” voor de verwerking voor direct marketingdoeleinden, zal de website “%1$s” de persoonsgegevens voor deze doeleinden niet langer verwerken.

Bovendien heeft de betrokkene het recht om, om redenen die verband houden met zijn of haar specifieke situatie, bezwaar te maken tegen de verwerking van persoonsgegevens die hem of haar betreffen via de website “%1$s” voor wetenschappelijke of historische onderzoeksdoeleinden, of voor statistische doeleinden overeenkomstig artikel 89(1) van de AVG, tenzij de verwerking noodzakelijk is voor de vervulling van een taak die om redenen van openbaar belang wordt uitgevoerd.

Om het recht op bezwaar jeit te oefenen, kan de betrokkene contact opnemen met een medewerker van de website “%1$s”. Bovendien is de betrokkene vrij in het kader van het gebruik van diensten van de informatiemaatschappij en niettegenstaande Richtlijn 2002/58/EC, om zijn of haar recht om bezwaar te maken via geautomatiseerde middelen met behulp van technische specificaties.

<strong>h) Geautomatiseerde individuele besluitvorming, inclusief profilering</strong>
Elke betrokkene heeft het recht dat door de Europese wetgever is toegekend om niet het voorwerp te zijn van een beslissing die uitsluitend is gebaseerd op geautomatiseerde verwerking, inclusief profilering, die rechtsgevolgen in verband met hem of haar met zich meebrengt, of op dezelfde manier van invloed op hem is, zolang de beslissing (1) niet noodzakelijk is voor het aangaan of uitvoeren van een contract tussen de betrokkene en een voor de verwerking verantwoordelijke, of (2) niet is toegestaan krachtens de wetgeving van de Unie of de lidstaat waaraan de voor de verwerking verantwoordelijke is onderworpen en die ook passende maatregelen treffen om de rechten en vrijheden en legitieme belangen van de betrokkene te beschermen, of (3) niet gebaseerd is op uitdrukkelijke toestemming van de betrokkene.

Indien de beslissing (1) noodzakelijk is voor het aangaan of de uitvoering van een contract tussen de betrokkene en een gegevensbeheerder, of (2) deze is gebaseerd op uitdrukkelijke toestemming van de betrokkene, de website “%1$s” zal passende maatregelen nemen om de rechten en vrijheden en legitieme belangen van de betrokkene te beschermen, althans het recht op menselijke tussenkomst van de voor de verwerking verantwoordelijke, om zijn of haar standpunt kenbaar te maken en de beslissing te betwisten.

Als de betrokkene de rechten met betrekking tot geautomatiseerde individuele besluitvorming wenst uit te oefenen, kan hij of zij op elk moment contact opnemen met een medewerker van de website “%1$s”.

<strong>i) Recht om toestemming voor gegevensbescherming in te trekken</strong>
Elke betrokkene heeft het recht dat door de Europese wetgever wordt verleend om zijn of haar toestemming voor de verwerking van zijn of haar persoonlijke gegevens op elk moment in te trekken.

Als de betrokkene gebruik wil maken van het recht om de toestemming in te trekken, kan hij of zij op elk moment contact opnemen met een medewerker van de website “%1$s”.

<strong>j) Klacht in geval van datalekken</strong>
In het geval van inbreuken op de gegevensbescherming heeft de betrokkene het recht om een klacht in te dienen bij de bevoegde toezichthoudende autoriteit. De toezichthoudende autoriteit op het gebied van gegevensbescherming is de nationale functionaris voor gegevensbescherming van de staat waarin de betrokkene zijn vaste verblijfplaats heeft.

Een overzicht van de nationale gegevensbeschermingsautoriteiten en hun links en adressen kan je hier vinden: <a onclick="window.open(this.href); return false;" href="https://ico.org.uk/">https://ico.org.uk/ - adres voor Groot-Brittannië</a> of <a onclick="window.open(this.href); return false;" href="https://ec.europa.eu/newsroom/article29/item-detail.cfm?item_id=612080">https://ec.europa.eu - adressen en links voor Europese landen</a>.

<h3>Gegevensbeschermingsbepalingen betreffende de toepassing en het gebruik van profielfoto’s bij Gravatar</h3>
De controller heeft de Gravatar service op deze website geïntegreerd om de hulp van Gravatar te kunnen gebruiken om postschrijvers en commentaar schrijvers de gelegenheid te geven hun berichten te personaliseren met een profielfoto (ook bekend als een avatar). De exploitant van de dienst Gravatar is het Automattic Inc., 132 Hawthorne Street San Francisco, CA 94107, VS.

Gravatar is een dienst waarbij de betrokken persoon zich kan aanmelden en profielfoto’s met een e-mailadres kan opslaan. De daar gekozen gebruikersfoto kan vervolgens op veel verschillende websites worden gebruikt. Als de betrokkene berichten of opmerkingen op andere online sites met het respectievelijke e-mailadres schrijft, kan zijn profielfoto naast de berichten of opmerkingen worden weergegeven. Hiertoe wordt het door de betrokkene verstrekte e-mailadres versleuteld verzonden naar Gravatar om te controleren of hiervoor een profiel met een foto is opgeslaan. Dit is het enige doel van de overdracht van het e-mailadres.

Door de afbeeldingen weer te geven, is Gravatar op de hoogte van het huidige IP-adres van de betrokkene, omdat dit nodig is voor communicatie tussen een browser en een online dienst. Daarnaast ontvangt Gravatar informatie over de bezochte websites en waar de profielfoto wordt gebruikt. Deze gegevensverbindingen zijn niet onder onze controle en we zijn niet op de hoogte van de gebruikte of verzonden gegevens. Zie het Automattic Privacybeleid voor meer informatie over hoe Gravatar gegevens verzamelt en gebruikt: <a onclick="window.open (this.href); return false;" href="https://automattic.com/privacy/"> https://automattic.com/privacy/</a>.

Als de betrokkene niet wil dat een afbeelding in de berichten verschijnt, die is gekoppeld aan zijn e-mailadres bij Gravatar, moet deze worden gebruikt in het gebruikersaccount en voor de berichten of opmerkingen een e-mailadres, wat niet is gedeponeerd bij Gravatar. Gebruikers kunnen de overdracht van gegevens volledig voorkomen door geen Gravatar-afbeelding met hun gebruikersaccount of opmerkingen te verbinden, maar bij voorkeur een lokale gebruikersafbeelding te selecteren.

Automattic is gecertificeerd volgens de Privacy Shield overeenkomst, die een garantie biedt om te voldoen aan de Europese privacywetgeving. Meer informatie die u kunt vinden op <a onclick="window.open (this.href); return false;"href ="https://www.privacyshield.gov/participant?id=a2zt0000000CbqcAAC&status=Active">https://www.privacyshield.gov</a>.

<h3>Gegevensbeschermingsbepalingen over de toepassing en het gebruik van een speelkamer</h3>
Op deze website heeft de controller een spel component (ook wel arcade genoemd) met browser spellen geïntegreerd. Door de arcade modules te gebruiken, worden cookies ingesteld, zoals hierboven uitgelegd, die sessiegegevens opslaan en de aangepaste visuele weergave van de spellen en van de arcade pagina’s. Voor een goede werking is het noodzakelijk om gegevens te verzenden over de bereikte score per spel, het spelniveau, de datum van de bereikte score, het aantal keer dat een spel start, de duur van het spel, de rangorde ten opzichte van andere gebruikers en vergelijkbare statistieken, en deze op te slaan in combinatie met het gebruikers account. Het bevat mogelijk onderdelen van een tekst vertaaldienst, zoals Google Vertaler. Zie hieronder het Privacybeleid voor Google Vertalen. Het is ook mogelijk dat spellen datalinks bouwen naar buitenlandse sites die zullen resulteren in een specifieke ranking of statistieken voor dat spel. Er kunnen binnen de spellen ook links zijn naar zogenaamde sociale media, die hun ledenactiviteiten in dit opzicht volgen.

Als de betrokkene een gebruikersaccount op deze sites of sociale media bezit en daar is ingelogd, ontvangen deze sites mogelijk informatie over het bezoek van onze site, het betreffende spel en de behaalde scores. In ruil daarvoor is het mogelijk dat advertenties van deze pagina’s naar de betrokkene worden verzonden. Deze gegevensverbindingen zijn niet onder onze controle en we zijn niet op de hoogte van de gebruikte of verzonden gegevens. De betrokkene kan elke overdracht van persoonlijke gegevens daar voorkomen door zich af te melden van het betreffende account of de spellen niet te gebruiken. De arcade kan gedeeltelijk worden gebruikt zonder registratie en opslag van cookies of gegevens. Veel functies zijn echter niet beschikbaar en behaalde scores kunnen niet worden opgeslaan. Voor gasten wordt geen persoonlijke informatie opgeslaan buiten het algemene server toegang logboek. Gastspelers kunnen de spelscore echter ook niet opslaan en veel functies zijn niet beschikbaar.

Voordat het spel wordt geladen, wordt een spel intro geladen die linken naar de website “https://connect.jv-arcade.com”. De “jv-arcade.com” controller geeft duidelijk aan dat het geen persoonlijke gegevens over de gebruikers verzendt tijdens de verbinding en maakt geen gebruik van cookies.

<h3>Gegevensbeschermingsbepalingen over de toepassing en het gebruik van chats</h3>
Op deze website heeft de controller zogenaamde chat-modules geïntegreerd (ook wel shoutbox of footer chat genoemd). Het doel van deze modules is om gebruikers in realtime rechtstreeks met elkaar te laten communiceren. Door een chatmodule te gebruiken, worden cookies ingesteld, zoals jeitgelegd onder punt 3., die de instellingen opslaan voor de respectievelijke chatbox (bijvoorbeeld geluid aan/uit, box ingeklapt of niet ingeklapt, of box positie binnen een pagina), en sessie of geschiedenisgegevens. Om een chatmodule correct te bedienen, is het noodzakelijk om gebruikersposten op te slaan samen met de tijd van creatie en in samenhang met zijn/haar gebruikersaccount in de database. Gastberichten worden opgeslaan in combinatie met het IP-adres. Dit is vereist om gebruikers inzendingen in de juiste chronologische volgorde weer te geven, toe te wijzen aan de auteurs en om eventuele schendingen van de gebruiksvoorwaarden of het toepasselijke recht te vervolgen. Conversatie inhoud in chatmodules kan openbaar zichtbaar zijn op internet, afhankelijk van de configuratie, en kan door iedereen worden gelezen of beoordeeld.

<h3>Gegevensbeschermingsbepalingen over de toepassing en het gebruik van Google AdSense</h3>
Op deze website heeft de controller Google AdSense geïntegreerd. Google AdSense is een online service waarmee advertenties op sites van derden kunnen worden geplaatst. Google Adsense is gebaseerd op een algoritme dat advertenties selecteert die worden weergegeven op sites van derden om overeen te komen met de inhoud van de desbetreffende site van derden. Google Adsense staat een op interesses gebaseerde targeting van de internetgebruiker toe, die wordt geïmplementeerd door middel van het genereren van individuele gebruikersprofielen.

De exploitant van de AdSense component van Google is Alphabet Inc., 1600 Amphitheatre Pkwy, Mountain View, CA 94043-1351, Verenigde Staten.

Het doel van de AdSense component van Google is de integratie van advertenties op onze website. Google AdSense plaatst een cookie in het informatietechnologie systeem van de betrokkene. De definitie van cookies is hierboven uitgelegd. Met de instelling van de cookie kan Alphabet Inc. het gebruik van onze website analyseren. Bij elke oproep naar een van de afzonderlijke pagina’s van deze internetsite, die wordt beheerd door de controller en waarin een Google AdSense component is geïntegreerd, verzendt de internetbrowser op het informatietechnologie systeem van de betrokkene automatisch gegevens via de Google AdSense component ten behoeve van online adverteren en de afrekening van commissies bij Alphabet Inc. Tijdens deze technische procedure verwerft de onderneming Alphabet Inc. kennis van persoonlijke gegevens, zoals het IP-adres van de betrokkene, dat het alfabet dient Inc., onder meer om de oorsprong van bezoekers en klikken te begrijpen en vervolgens provisies te maken.

De betrokkene kan, zoals hierboven vermeld, het plaatsen van cookies via onze website op elk moment voorkomen door middel van een overeenkomstige aanpassing van de gebruikte webbrowser en zo het instellen van cookies permanent weigeren. Een dergelijke aanpassing aan de gebruikte internetbrowser zou ook voorkomen dat Alphabet Inc. een cookie plaatst op het informatietechnologie systeem van de betrokkene. Bovendien kunnen cookies die al door Alphabet Inc. worden gebruikt, op elk moment worden verwijderd via een webbrowser of andere softwareprogramma’s.

Verder gebruikt Google AdSense ook zogenaamde trackingpixels. Een trackingpixel is een miniatuurafbeelding die is ingesloten in webpagina’s om logboekregistratie en analyse van een logbestand mogelijk te maken waarmee een statistische analyse kan worden uitgevoerd. Op basis van de ingesloten trackingpixels kan Alphabet Inc. bepalen of en wanneer een website is geopend door een betrokkene en op welke links door de betrokkene is geklikt. Trackingpixels dienen onder meer om de stroom bezoekers op een website te analyseren.

Via Google AdSense worden persoonlijke gegevens en informatie die ook het IP-adres bevat en noodzakelijk is voor het verzamelen en boekhouden van de weergegeven advertenties - verzonden naar Alphabet Inc. in de Verenigde Staten van Amerika. Deze persoonlijke gegevens worden opgeslaan en verwerkt in de Verenigde Staten van Amerika. The Alphabet Inc. kan de verzamelde persoonlijke gegevens doorgeven via deze technische procedure aan derden.

Google Adsense wordt verder uitgelegd onder de volgende link <a onclick="window.open (this.href); return false;" href="https://www.google.com/adsense/start/"> https://www.google.com/adsense/start/</a>.

<h3>Gegevensbeschermingsbepalingen over de toepassing en het gebruik van Google Analytics (met anonimisering functie)</h3>
Op deze website heeft de controller het onderdeel van Google Analytics geïntegreerd (met de anonimisering functie). Google Analytics is een webanalyseservice. Webanalyse is het verzamelen en analyseren van gegevens over het gedrag van bezoekers van websites. Een webanalyseservice verzamelt onder andere gegevens over de website waar iemand vandaan is gekomen (de zogenaamde verwijzer), welke subpagina’s zijn bezocht, of hoe vaak en voor welke duur een subpagina werd bekeken. Webanalyses worden voornamelijk gebruikt voor de optimalisatie van een website en voor het uitvoeren van een kosten-batenanalyse van internetreclame.

De exploitant van het Google Analytics-onderdeel is Google Inc., 1600 Amphitheatre Pkwy, Mountain View, CA 94043-1351, Verenigde Staten.

Voor de webanalyse via Google Analytics gebruikt de controller de toepassing “_gat. _anonymizeIp”. Door middel van deze applicatie wordt het IP-adres van de internetverbinding van de betrokkene ingekort door Google en geanonimiseerd bij het bezoeken van onze websites vanuit een lidstaat van de Europese Unie of een andere verdragsluitende staat bij de Overeenkomst betreffende de Europese Economische Ruimte.

Het doel van de Google Analytics component is om het verkeer op onze website te analyseren. Google gebruikt de verzamelde gegevens en informatie, onder meer om het gebruik van onze website te evalueren en om online rapporten te verstrekken, die de activiteiten op onze websites tonen, en om andere diensten aan te bieden met betrekking tot het gebruik van onze website voor ons.

Google Analytics plaatst een cookie op het informatietechnologie systeem van de betrokkene. De definitie van cookies is hierboven uitgelegd. Met het instellen van de cookie kan Google het gebruik van onze website analyseren. Bij elke oproep naar een van de afzonderlijke pagina’s van deze internetsite, die wordt beheerd door de controller en waarin een Google Analytics component is geïntegreerd, verzendt de internetbrowser op het informatietechnologie systeem van de betrokkene automatisch gegevens via de Google Analytics-component ten behoeve van online adverteren en de afrekening van commissies bij Google. In de loop van deze technische procedure verwerft de onderneming Google kennis van persoonlijke informatie, zoals het IP-adres van de betrokkene, die Google onder meer dient om de oorsprong van bezoekers en klikken te begrijpen en vervolgens provisie schikkingen te creëren.

De cookie wordt gebruikt om persoonlijke informatie op te slaan, zoals de toegangstijd, de locatie van waaruit toegang is verkregen en de frequentie van bezoeken van onze website door de betrokkene. Bij elk bezoek aan onze website zullen dergelijke persoonlijke gegevens, inclusief het IP-adres van de internettoegang die door de betrokkene wordt gebruikt, worden doorgestuurd naar Google in de Verenigde Staten van Amerika. Deze persoonlijke gegevens worden door Google in de Verenigde Staten van Amerika opgeslaan. Google kan deze persoonlijke gegevens die via de technische procedure zijn verzameld, doorgeven aan derden.

De betrokkene kan, zoals hierboven vermeld, het plaatsen van cookies via onze website op elk moment voorkomen door middel van een overeenkomstige aanpassing van de gebruikte webbrowser en zo het instellen van cookies permanent weigeren. Een dergelijke aanpassing aan de gebruikte internetbrowser zou ook voorkomen dat Google Analytics een cookie plaatst op het informatietechnologie systeem van de betrokkene. Daarnaast kunnen cookies die al in gebruik zijn door Google Analytics op elk moment worden verwijderd via een webbrowser of andere softwareprogramma’s.

Bovendien heeft de betrokkene de mogelijkheid om bezwaar te maken tegen een verzameling gegevens die wordt gegenereerd door Google Analytics, die verband houdt met het gebruik van deze website, evenals de verwerking van deze gegevens door Google en de kans om dergelijke gegevens te voorkomen. Voor dit doel moet de betrokkene een browser add-on downloaden onder de link <a onclick="window.open (this.href); return false;" href="https://tools.google.com/dlpage/gaoptout">https://tools.google.com/dlpage/gaoptout</a> en installeer het. Deze browser add-on vertelt Google Analytics via een JavaScript, dat alle gegevens en informatie over de bezoeken van internetpagina’s mogelijk niet worden doorgestuurd naar Google Analytics. De installatie van de browser add-ons wordt door Google als een bezwaar beschouwd. Als het informatietechnologie systeem van de betrokkene later wordt verwijderd, geformatteerd of opnieuw wordt geïnstalleerd, moet de betrokkene de browser add-ons opnieuw installeren om Google Analytics uit te schakelen. Als de invoegtoepassing voor de browser werd verwijderd door de betrokkene of een andere persoon die te wijten is aan hun competentiegebied, of is uitgeschakeld, is het mogelijk om de herinstallatie of reactivering van de invoegtoepassingen van de browser uit te voeren.

Verdere informatie en de toepasselijke gegevensbeschermingsbepalingen van Google kunnen worden opgehaald onder <a onclick="window.open (this.href); return false;" href="https://policies.google.com/privacy">https://policies.google.com/privacy</a> en onder <a onclick="window.open (this.href); return false; "href="http://www.google.com/analytics/terms/us.html"> http://www.google.com/analytics/terms/us.html</a>. Google Analytics wordt verder uitgelegd onder de volgende link <a onclick="window.open (this.href); return false;" href="https://www.google.com/analytics/">https://www.google.com/analytics/</a>.

<h3>Gegevensbeschermingsbepalingen over de toepassing en het gebruik van DoubleClick</h3>
Op deze website heeft de controller componenten van DoubleClick van Google geïntegreerd. DoubleClick is een handelsmerk van Google, waaronder overwegend speciale online marketingoplossingen worden aangeboden aan reclamebureaus en uitgevers.

De exploitant van DoubleClick by Google is Google Inc., 1600 Amphitheatre Pkwy, Mountain View, CA 94043-1351, VERENIGDE STATEN.

DoubleClick door Google verzendt gegevens naar de DoubleClick server met elke vertoning, kliks of andere activiteit. Elk van deze gegevensoverdrachten activeert een cookie aanvraag naar de browser van de betrokkene. Als de browser dit verzoek accepteert, gebruikt DoubleClick een cookie in het informatietechnologie systeem van de betrokkene. De definitie van cookies is hierboven uitgelegd. Het doel van de cookie is het optimaliseren en weergeven van advertenties. De cookie wordt onder meer gebruikt om gebruikersrelevante advertenties weer te geven en te plaatsen en om rapporten over advertentiecampagnes te maken of te verbeteren. Bovendien dient de cookie om meerdere weergave van dezelfde advertentie te vermijden.

DoubleClick gebruikt een cookie-ID die vereist is om het technische proces uit te voeren. De cookie-ID is bijvoorbeeld vereist om een advertentie in een browser weer te geven. DoubleClick kan ook de cookie-ID gebruiken om vast te leggen welke advertenties al in een browser zijn weergegeven om dubbel werk te voorkomen. Het is ook mogelijk voor DoubleClick om conversies bij te houden via de cookie-ID. Conversies worden bijvoorbeeld vastgelegd wanneer een gebruiker eerder een DoubleClick advertentie is getoond en hij of zij vervolgens via dezelfde internetbrowser een aankoop doet op de website van de adverteerder.

Een cookie van DoubleClick bevat geen persoonlijke gegevens. Een DoubleClick cookie kan echter extra campagne ID’s bevatten. Een campagne ID wordt gebruikt om campagnes te identificeren waarmee de gebruiker al in contact is geweest.

Bij elke oproep naar één van de afzonderlijke pagina’s van deze website, die wordt beheerd door de controller en waarop een DoubleClick component is geïntegreerd, wordt de internetbrowser op het informatietechnologie systeem van de betrokkene automatisch gevraagd door de betreffende DoubleClick component om gegevens te verzenden met het doel van online adverteren en facturering van commissies naar Google. Tijdens deze technische procedure verwerft Google kennis van alle gegevens die Google kan gebruiken om provisieberekeningen te maken. Google kan onder meer begrijpen dat de betrokkene op bepaalde links op onze website heeft geklikt.

De betrokkene kan, zoals hierboven vermeld, het plaatsen van cookies via onze website op elk moment voorkomen door middel van een overeenkomstige aanpassing van de gebruikte webbrowser en zo het instellen van cookies permanent weigeren. Een dergelijke aanpassing aan de gebruikte internetbrowser zou ook voorkomen dat Google een cookie plaatst op het informatietechnologie systeem van de betrokkene. Daarnaast kunnen cookies die al door Google worden gebruikt, op elk moment worden verwijderd via een webbrowser of andere softwareprogramma’s.

Verdere informatie en de van toepassing zijnde gegevensbeschermingsbepalingen van DoubleClick kunnen worden opgehaald in DoubleClick door Google <a onclick ="window.open (this.href); return false;" href="https://policies.google.com/"> https://policies.google.com/</a>.

<h3>Gegevensbeschermingsbepalingen over de toepassing en het gebruik van Google Vertaler</h3>
De controller heeft vertaal componenten van Google Vertaler op deze website geïntegreerd. Het doel van het onderdeel is om onze online service te verbeteren door de betrokkene in staat te stellen om berichten in vreemde talen automatisch te vertalen op de website van de controller. De exploitant van Google Vertaler is Google LLC, 1600 Amphitheatre Pkwy, Mountain View, CA 94043-1351, VS. Google Vertaler is een online vertaaldienst van Google LLC waarmee gebruikers individuele woorden, teksten, een webpagina of delen daarvan automatisch in verschillende talen kunnen vertalen. De vertalingen zijn echter niet altijd correct en bevatten soms misleidende, valse of beledigende uitingen. We nemen geen verantwoordelijkheid voor de nauwkeurigheid, betrouwbaarheid of tijdigheid van vertalingen en zijn niet aansprakelijk voor geleden schade.

Bij elke oproep naar een van de afzonderlijke pagina’s van deze internetsite die wordt beheerd door de controller en waarop een vertaal component is geïntegreerd, worden gegevens verzonden naar Google Vertaler. Google Vertaler stelt cookies in op het informatietechnologie systeem van de betrokkene zoals hierboven beschreven. Bij elk bezoek aan de internetsite van de controller worden persoonlijke gegevens, waaronder het IP-adres van de internettoegang gebruikt door de betrokkene, naar Google verzonden naar servers in de Verenigde Staten van Amerika en daar opgeslaan. Google kan deze persoonlijke gegevens die via de technische procedure zijn verzameld, doorgeven aan andere Google services en aan derden. Google ontvangt altijd informatie gedurende de hele duur van het verblijf op de website die de service heeft opgeroepen, wanneer deze werd opgeroepen, van welke site, met welk IP-adres en welke browser, en welke teksten door de betrokkene voor de vertaling zijn ingevoerd of opgehaald. Deze gegevens worden verwerkt op buitenlandse servers, meestal in de VS, en worden verzameld, opgeslaan, geanalyseerd en verwerkt door Google. Deze gegevens worden uitgewisseld tussen de verschillende Google services en de activiteiten van de betrokkene worden bijgehouden met behulp van cookies, een browser ID en het IP-adres. Als de betrokkene tegelijkertijd is aangemeld bij Google, worden de gegevens gekoppeld aan de gebruikers gegevens waarop Google zich aanmeldt en worden gebruikt, bijvoorbeeld voor promotionele doeleinden, ook op andere websites.

Bij gebruik van Google Vertalen op onze pagina’s gaat de betrokkene akkoord met het verzamelen, verwerken en gebruiken van automatisch verzamelde gegevens en de gegevens die door de betrokkene zelf zijn ingevoerd door Google, een van zijn agenten, diensten of derden volgens de Gebruiksvoorwaarden van Google en Privacybeleid. Als gegevens van de betreffende persoon niet naar Google mogen worden verzonden, mogen Google services niet worden gebruikt.

De gebruiksvoorwaarden van Google Translate zijn beschikbaar op <a onclick ="window.open (this.href); return false;"href="https://policies.google.com/terms">https://policies.google.com/terms</a>. De gegevensbeschermingsbepalingen van Google Translate beschikbaar op <a onclick ="window.open (this.href); return false;"href="https://policies.google.com/privacy">https://policies.google.com/privacy</a> bieden informatie over het verzamelen, verwerken en gebruiken van persoonlijke gegevens door Google.

Meer informatie over Google Translate is beschikbaar op: <a onclick="window.open(this.href); return false;" href="http://translate.google.com/manager/website/">http://translate.google.com/manager/website/</a>.

<h3>Gegevensbeschermingsbepalingen over de toepassing en het gebruik van Google Fonts</h3>
Op deze website heeft de controller externe lettertypen van Google Fonts geïntegreerd. De exploitant van Google Fonts is Google Inc., 1600 Amphitheater Pkwy, Mountain View, CA 94043-1351, VS. Google Fonts is een service voor het online gebruiken van lettertypen voor gebruik op verschillende websites. De lettertype bestanden moeten worden gedownload naar het informatietechnologie systeem van de betrokkene voordat ze kunnen worden weergegeven. Lettertypen die worden geleverd door de Google Fonts API worden automatisch gecomprimeerd voor een snellere download en eenmaal gedownload worden in de cache opgeslaan in de browser en opnieuw gebruikt door een andere webpagina die de Google Fonts API gebruikt.

Het doel van deze componenten is om het ontwerp van de website van de controller en de consistente presentatie van lettertypen op het gebruikers informatietechnologie systeem te verbeteren. De integratie van deze lettertypen gebeurt via een serveroproep, meestal een server van Google in de VS. Dit zorgt ervoor dat het informatietechnologie systeem van de betrokken persoon de lettertypen downloadt.

Bij elk bezoek aan de internetsite van de controller waarop Google Fonts is geïntegreerd, worden persoonlijke gegevens, waaronder het IP-adres van de internettoegang die door de betrokkene wordt gebruikt, naar Google verzonden naar servers in de Verenigde Staten van Amerika en daar opgeslaan. Telkens wanneer een enkele pagina van de controllers website wordt aangeroepen waarop Google Fonts is geïntegreerd, wordt een aanvraag voor servers van Google Fonts ingediend voor de actualiteit van de gebruikte lettertypen. Verzoeken worden één dag bewaard, gedownloade lettertypen worden maximaal één jaar opgeslaan in het systeem voor gebruikers informatietechnologie. Hiertoe worden door Google cookies opgeslaan op het apparaat van de gebruiker, zoals hierboven beschreven, die het IP-adres, de toegangstijd en de browsergegevens van de betrokken persoon bevatten. Google kan deze persoonlijke gegevens die via de technische procedure zijn verzameld, doorgeven aan andere Google-services en aan derden.

Google ontvangt altijd informatie gedurende de hele duur van het verblijf op de website die de service heeft opgeroepen, wanneer deze werd opgeroepen, van welke site, met welk IP-adres en welke browser. Deze gegevens worden verwerkt op buitenlandse servers, meestal in de VS, en worden verzameld, opgeslaan, geanalyseerd en verwerkt door Google. Deze gegevens worden uitgewisseld tussen de verschillende Google services en de activiteiten van de betrokkene worden bijgehouden met behulp van cookies, een browser ID en het IP-adres. Als de betrokkene tegelijkertijd is aangemeld bij Google, worden de gegevens gekoppeld aan de gegevens gebruikers waarop Google zich aanmeldt en worden gebruikt, bijvoorbeeld voor promotionele doeleinden, ook op andere websites.

Als de browser of de instellingen van de gebruiker geen web lettertypen ondersteunen, wordt een lettertype gebruikt dat is geïnstalleerd op het informatietechnologie systeem van de betrokkene. Web lettertypen kunnen worden uitgeschakeld door add-ons in de browser te blokkeren.

Meer informatie over Google Fonts is beschikbaar op: <a onclick="window.open(this.href); return false;" href="https://fonts.google.com/about#">https://fonts.google.com/about#</a> en op <a onclick="window.open(this.href); return false;" href="https://developers.google.com/fonts/faq">https://developers.google.com/fonts/faq</a>.

Gebruiksvoorwaarden van Google Fonts zijn beschikbaar op <a onclick="window.open (this.href); return false;" href="https://policies.google.com/terms">https://policies.google.com/terms</a>. De gegevensbeschermingsbepalingen van Google Translate beschikbaar op <a onclick="window.open (this.href); return false;"href="https://policies.google.com/privacy"> https://policies.google.com/privacy</a> bieden informatie over het verzamelen, verwerken en gebruiken van persoonlijke gegevens door Google.

<h3>Gegevensbeschermingsbepalingen over de toepassing en het gebruik van Facebook</h3>
Op deze website heeft de controller geïntegreerde componenten van de onderneming Facebook. Facebook is een sociaal netwerk.

Een sociaal netwerk is een plaats voor sociale bijeenkomsten op internet, een online community, die gebruikers gewoonlijk in staat stelt om met elkaar te communiceren en in een virtuele ruimte te communiceren. Een sociaal netwerk kan dienen als een platform voor het uitwisselen van meningen en ervaringen, of de internetcommunity in staat stellen persoonlijke of bedrijfsgerelateerde informatie te verstrekken. Facebook biedt gebruikers van sociale netwerken de mogelijkheid om privé profielen te maken, foto’s te uploaden en te netwerken via vriendschapsverzoeken.

De exploitant van Facebook is Facebook, Inc., 1 Hacker Way, Menlo Park, CA 94025, Verenigde Staten. Als een persoon buiten de Verenigde Staten of Canada woont, is de controller de Facebook Ireland Ltd., 4 Grand Canal Square, Grand Canal Harbour, Dublin 2, Ierland.

Bij elke oproep op een van de afzonderlijke pagina’s van deze internetwebsite, die wordt beheerd door de controller en waarin een Facebook component (Facebook invoegtoepassingen) is geïntegreerd, is de webbrowser op het informatietechnologie systeem van de betrokkene automatisch gevraagd om de weergave van het bijbehorende Facebook onderdeel van Facebook te downloaden via het Facebook onderdeel. Een overzicht van alle Facebook plug-ins kan worden geopend onder <a onclick="window.open (this.href); return false;"href="https://developers.facebook.com/docs/plugins/">https://developers.facebook.com/docs/plugins/</a>. Tijdens deze technische procedure wordt Facebook op de hoogte gebracht van welke specifieke subsite van onze website door de betrokkene werd bezocht.

Als de betrokkene tegelijkertijd op Facebook is ingelogd, detecteert Facebook bij elke oproep op onze website door de betrokkene en voor de gehele duur van zijn verblijf op onze website welke specifieke subsite van onze internetpagina werd bezocht door de betrokkene. Deze informatie wordt verzameld via het Facebook onderdeel en gekoppeld aan het respectievelijke Facebook account van de betrokkene. Als de betrokkene op een van de Facebook knoppen klikt die in onze website zijn geïntegreerd, bijvoorbeeld de "Vind ik leuk" knop, of als de betrokkene een opmerking indient, dan stemt Facebook deze informatie overeen met de persoonlijke Facebook gebruikersaccount van de betrokkene en slaat deze de persoonlijke gegevens op.

Facebook ontvangt via het Facebook onderdeel altijd informatie over een bezoek aan onze website door de betrokkene, telkens wanneer de betrokkene tegelijkertijd op Facebook is ingelogd tijdens het oproepen van onze website. Dit gebeurt ongeacht of de betrokkene op de Facebook component klikt of niet. Als een dergelijke overdracht van informatie naar Facebook niet wenselijk is voor de betrokkene, kan hij of zij dit voorkomen door zich af te melden bij zijn Facebook account voordat een oproep naar onze website wordt gedaan.

De richtlijn voor gegevensbescherming gepubliceerd door Facebook, die beschikbaar is op <a onclick="window.open (this.href); return false;" href="https://facebook.com/about/privacy/">https://facebook.com/about/privacy/</a> biedt informatie over het verzamelen, verwerken en gebruiken van persoonlijke gegevens door Facebook. Daarnaast wordt hier uitgelegd welke instellingsopties Facebook biedt om de privacy van de betrokkene te beschermen. Daarnaast zijn er verschillende configuratie opties beschikbaar om de gegevensoverdracht naar Facebook te elimineren. Deze toepassingen kunnen door de betrokkene worden gebruikt om een gegevensoverdracht naar Facebook te elimineren.

<h3>Gegevensbeschermingsbepalingen over de toepassing en het gebruik van YouTube</h3>
Op deze website heeft de controller geïntegreerde componenten van YouTube. YouTube is een internet video portaal waarmee video uitgevers en andere gebruikers gratis kunnen uploaden, waardoor ze ook gratis kunnen worden bekeken en becommentarieerd. Met YouTube kun je allerlei soorten video’s publiceren, zodat je zowel via het internetportaal toegang hebt tot zowel volledige films en tv uitzendingen als muziekvideo’s, trailers en video’s die door gebruikers zijn gemaakt.

De exploitant van YouTube is YouTube, LLC, 901 Cherry Ave., San Bruno, CA 94066, VERENIGDE STATEN. De YouTube, LLC is een dochteronderneming van Google Inc., 1600 Amphitheater Pkwy, Mountain View, CA 94043-1351, VERENIGDE STATEN.

Bij elke oproep naar een van de afzonderlijke pagina’s van deze internetsite, die wordt beheerd door de controller en waarop een YouTube component (YouTube video) is geïntegreerd, wordt de internetbrowser in het informatietechnologie systeem van de betrokkene automatisch gevraagd om een weergave van het bijbehorende YouTube onderdeel te downloaden. Meer informatie over YouTube is te vinden onder <a onclick="window.open (this.href); return false;" href="https://www.youtube.com/yt/about/">https://www.youtube.com/yt/about/</a>. In de loop van deze technische procedure krijgen YouTube en Google kennis van welke specifieke subpagina van onze website door de betrokkene werd bezocht.

Als de betrokkene op YouTube is ingelogd, herkent YouTube bij elke oproep naar een sub-pagina met een YouTube video, welke specifieke sub-pagina van onze website door de betrokkene is bezocht. Deze informatie wordt verzameld door YouTube en Google en toegewezen aan het betreffende YouTube-account van de betrokkene.

YouTube en Google ontvangen via het YouTube onderdeel informatie dat de betrokkene onze website heeft bezocht, als de betrokkene op het moment van de oproep naar onze website op YouTube is ingelogd; dit gebeurt ongeacht of de persoon op een YouTube video klikt of niet. Als een dergelijke overdracht van deze informatie naar YouTube en Google niet wenselijk is voor de betrokkene, kan de levering worden voorkomen als de betrokkene zich afmeldt van zijn eigen YouTube account voordat een oproep naar onze website wordt gedaan.

YouTubes bepalingen voor gegevensbescherming beschikbaar op <a onclick="window.open (this.href); return false;" href="https://policies.google.com/privacy">https://policies.google.com/privacy</a> bieden informatie over het verzamelen, verwerken en gebruiken van persoonlijke gegevens door YouTube en Google.

<h3>Betaalmethode: bepalingen betreffende gegevensbescherming over het gebruik van PayPal als betalingsverwerker</h3>
Op deze website heeft de controller geïntegreerde componenten van PayPal. PayPal is een online betalingsdienstaanbieder. Betalingen worden verwerkt via zogenaamde PayPal rekeningen, die virtuele privé of zakelijke accounts vertegenwoordigen. PayPal kan ook virtuele betalingen verwerken via creditcards wanneer een gebruiker geen PayPal account heeft. Een PayPal rekening wordt beheerd via een e-mailadres, daarom zijn er geen klassieke accountnummers. PayPal maakt het mogelijk om online betalingen naar derden te activeren of om betalingen te ontvangen. PayPal accepteert ook de functies van trustee en biedt kopersbescherming services.

De Europese exploitant van PayPal is PayPal (Europe) S.à.r.l. & Cie. S.C.A., 22-24 Boulevard Royal, 2449 Luxembourg, Luxembourg.

Als de betrokkene kiest voor “PayPal” als donatieoptie, verzenden we de gegevens van de betrokkene automatisch naar PayPal. Door deze betalingsoptie te selecteren, gaat de betrokkene akkoord met de overdracht van persoonlijke gegevens die nodig zijn voor de verwerking van betalingen.

De persoonlijke gegevens die aan PayPal worden doorgegeven, zijn meestal voornaam, achternaam, adres, e-mailadres, IP-adres, telefoonnummer, mobiel telefoonnummer of andere gegevens die nodig zijn voor de verwerking van betalingen.

De overdracht van de gegevens is gericht op betalingsverwerking en fraudepreventie. De controller zal persoonlijke gegevens overdragen aan PayPal, in het bijzonder als een legitiem belang bij de verzending wordt gegeven. De persoonlijke gegevens die tussen PayPal en de verantwoordelijke voor de verwerking van de gegevens worden uitgewisseld, worden door PayPal aan economische kredietbureaus doorgegeven. Deze verzending is bedoeld voor identiteits en kredietwaardigheidscontroles.

PayPal zal, indien nodig, persoonlijke gegevens doorgeven aan gelieerde ondernemingen en serviceproviders of onderaannemers, voor zover dit noodzakelijk is om te voldoen aan contractuele verplichtingen of om gegevens te verwerken die in de bestelling moeten worden verwerkt.

De betrokkene heeft op elk moment de mogelijkheid om de toestemming voor de verwerking van persoonlijke gegevens van PayPal in te trekken. Een intrekking heeft geen effect op persoonsgegevens die moeten worden verwerkt, gebruikt of verzonden in overeenstemming met (contractuele) betalingsverwerking.

De van toepassing zijnde gegevensbeschermingsbepalingen van PayPal kunnen worden geraadpleegd onder <a onclick="window.open(this.href); return false;" href="https://www.paypal.com/us/webapps/mpp/ua/privacy-full">https://www.paypal.com/us/webapps/mpp/ua/privacy-full</a>

<h3>Rechtsgrondslag voor de verwerking</h3>
Art. 6(1) lid. een AVG dient als rechtsgrondslag voor verwerkingen waarvoor we toestemming verkrijgen voor een specifiek verwerkingsdoel. Indien de verwerking van persoonsgegevens noodzakelijk is voor de uitvoering van een contract waarbij de betrokkene partij is, zoals het geval is, bijvoorbeeld wanneer verwerkingen nodig zijn voor de levering van goederen of om een andere dienst te verlenen, is de verwerking op basis van artikel 6(1) lit. b AVG. Hetzelfde geldt voor dergelijke verwerkingshandelingen die nodig zijn voor het uitvoeren van precontractuele maatregelen, bijvoorbeeld in geval van onderzoeken met betrekking tot onze producten of diensten. Is ons bedrijf onderworpen aan een wettelijke verplichting waardoor verwerking van persoonlijke gegevens vereist is, zoals voor het voldoen aan belastingverplichtingen, de verwerking is gebaseerd op art. 6(1) lit. d AVG. In zeldzame gevallen kan de verwerking van persoonsgegevens noodzakelijk zijn om de vitale belangen van de betrokkene of van een andere natuurlijke persoon te beschermen. Dit zou bijvoorbeeld het geval zijn als een bezoeker gewond zou zijn geraakt in ons bedrijf en zijn naam, leeftijd, ziekteverzekeringsgegevens of andere essentiële informatie zouden moeten worden doorgegeven aan een arts, ziekenhuis of andere derde partij. Dan zou de verwerking gebaseerd zijn op Art. 6(1) lit. f AVG. Ten slotte zouden de verwerkingshandelingen gebaseerd kunnen zijn op Art. 6(1) lit. f AVG. Deze rechtsgrondslag wordt gebruikt voor verwerkingen die niet onder een van de bovenvermelde rechtsgronden vallen, indien verwerking noodzakelijk is voor de legitieme belangen die door ons bedrijf of door een derde worden nagestreefd, tenzij deze belangen worden geschonden. of fundamentele rechten en vrijheden van de betrokkene die bescherming van persoonsgegevens vereisen. Dergelijke verwerkingen zijn met name toegestaan omdat ze specifiek zijn genoemd door de Europese wetgever. Hij was van mening dat een legitiem belang kan worden verondersteld als de betrokkene een cliënt van de verantwoordelijke is (overweging 47, zin 2 AVG).

<h3>Periode waarvoor de persoonlijke gegevens worden opgeslaan</h3>
De criteria die worden gebruikt om de periode van opslag van persoonlijke gegevens te bepalen, is de respectievelijke wettelijke bewaarperiode. Na het verstrijken van die periode worden de bijbehorende gegevens routinematig verwijderd, zolang dit niet langer nodig is voor de uitvoering van het contract of het aangaan van een contract.

<h3>Verstrekking van persoonsgegevens als wettelijke of contractuele vereiste; Vereiste noodzakelijk om een contract aan te gaan; Verplichting van de betrokkene om de persoonsgegevens te verstrekken; mogelijke gevolgen van het niet verstrekken van dergelijke gegevens</h3>
We verduidelijken dat het verstrekken van persoonsgegevens gedeeltelijk wettelijk vereist is (bijvoorbeeld belastingvoorschriften) of ook kan voortvloeien uit contractuele bepalingen (bijvoorbeeld informatie over de contractpartner). Soms kan het nodig zijn om een contract af te sluiten dat de betrokkene ons persoonlijke gegevens verstrekt, die vervolgens door ons moeten worden verwerkt. De betrokkene is bijvoorbeeld verplicht om ons persoonlijke gegevens te verstrekken wanneer ons bedrijf een contract met hem of haar ondertekent. Het niet verstrekken van de persoonsgegevens zou tot gevolg kunnen hebben dat het contract met de betrokkene niet kon worden afgesloten. Voordat persoonsgegevens door de betrokkene worden verstrekt, moet de betrokkene contact opnemen met een werknemer. De werknemer verduidelijkt aan de betrokkene of het verstrekken van de persoonsgegevens wettelijk of contractueel vereist is of noodzakelijk is voor het afsluiten van het contract, of er een verplichting is om de persoonlijke gegevens te verstrekken en de gevolgen van niet verstrekking van de persoonlijke gegevens.

<h3>Beëindiging van je contract</h3>
Iedereen op onze website kan op elk moment naar eigen goeddunken zijn registratie verwijderen. Alle persoonlijke gegevens worden verwijderd wanneer de registratie wordt geannuleerd. Na verwijdering kunnen we de gegevens niet herstellen.',
	'JVPPDMT_REJECTION'						=> 'Afkeuren',
	'JVPPDMT_USED_COOKIE' => [
		'<strong>Cookies gebruikt door phpBB forum:</strong>',
		'%1$s_cookie_status: Wanneer je onze website bezoekt, wordt een bevestiging van acceptatie van het gebruik van cookies opgeslaan.',
		'%1$s_k: Wordt gebruikt om de automatische inlog service te gebruiken (onthoud mij).',
		'%1$s_lang: Als de gastgebruiker de taal wijzigt, wordt deze cookie gemaakt. Deze sessie eindigt wanneer het browsen stopt.',		
		'%1$s_sid: Bevat de sessie ID. Deze cookie wordt gebruikt om de gebruiker te identificeren samen met %1$s_u.',
		'%1$s_u: De gebruikers ID van de gebruiker wordt hier opgeslaan.',
		'%1$s_track: Markering van gelezen berichten voor gasten.',

		/* Als je de extensie (phpBB Arcade) niet gebruikt, voeg dan de opmerking // toe aan het begin van de regel. */
		'<br><strong>Cookies gebruikt door de arcade:</strong>',
		'%1$s_arcade_sid: Bevat de spel sessie ID voor gebruik met phpBB Arcade.',
		'%1$s_arcade_pd: Bevat het spel ID voor gebruik met phpBB Arcade.',
		'%1$s_arcade_popup: Bevat de instellingen bij het spelen van een spel in het pop-up venster.',
		'%1$s_arcade_lighting: Bevat de gebruikersvoorkeur voor achtergrondverlichting voor spellen.',
		'%1$s_arcade_info_block: Bevat de gebruikersvoorkeur voor de zichtbaarheid van het informatieblok tijdens het spelen.',

		/* Als je de extensie (JV Footer Chat) niet gebruikt, voeg dan de opmerking // toe aan het begin van de regel. */
		'<br><strong>Cookie gebruikt door JV footer chat:</strong>',
		'%1$s_jv_chat_data: Bevat de footer chatmodule instellingen en het ID nummer van de gebruikers waarmee we chatten.',

		/* Als je de extensie (JV SHoutbox) niet gebruikt, voeg dan de opmerking // toe aan het begin van de regel. */
		'<br><strong>Cookie gebruikt door JV Shoutbox:</strong>',
		'%1$s_jv_shout_close_: Wordt gebruikt op alle pagina’s waar je het shoutbox blok hebt gesloten. Elke pagina maakt een cookie in zijn eigen naam. De indexpagina heeft bijvoorbeeld de naam: %1$s_jv_shout_close_index.',

		/* Als je de extensie (Collapsible Forum Categories) niet gebruikt, voeg dan de opmerking // toe aan het begin van de regel. */
		'<br><strong>Cookie gebruikt door inklapbare forum categorieën:</strong>',
		'%1$s_ccat: Bewaart de persoonlijke voorkeuren van de gebruikers over samengevouwen of uitgebreide categorie velden.',
	],
]);
