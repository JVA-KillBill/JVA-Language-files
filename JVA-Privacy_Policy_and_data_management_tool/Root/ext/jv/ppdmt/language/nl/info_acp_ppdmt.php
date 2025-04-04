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
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// Some characters you may want to copy&paste: ‚ ‘ ’ « » „ “ ” …

$lang = array_merge($lang, [
	'ACP_CAT_JVPPDMT'							=> 'Privacybeleid en data management tool',
	'ACP_JVPPDMT'								=> 'JVA - Privacy Policy and data management tool',
	'ACP_JVPPDMT_CONTROLLER_NAME'				=> 'Controller naam',
	'ACP_JVPPDMT_CONTROLLER_NAME_EXPLAIN'		=> 'Volledige naam van de controller.',
	'ACP_JVPPDMT_CONTROLLER_PHONE'				=> 'Controller telefoonnummer',
	'ACP_JVPPDMT_CONTROLLER_PHONE_EXPLAIN'		=> 'De AVG vereist dat er ten minste twee contacten worden verstrekt, één moet het e-mailadres voor contact zijn en de tweede een telefoonnummer als snel contact.<br><em>Voer het telefoonnummer van de controller in samen met het landnummer. Voorbeeld België: +32 …</em>',
	'ACP_JVPPDMT_COOIKE_INFO'					=> 'Toon cookie informatie',
	'ACP_JVPPDMT_COOIKE_INFO_EXPLAIN'			=> 'Indien ingeschakeld, zal iedereen die de opslag van cookies niet heeft geaccepteerd informatie zien dat veel functies niet beschikbaar zijn voor hen. Bovendien bevat de informatie een koppeling die hen naar hun persoonlijke gegevensinstellingen leidt.',
	'ACP_JVPPDMT_GLOBAL_SETTINGS'				=> 'Privacybeleid en instellingen voor databeheer tools',
	'ACP_JVPPDMT_GLOBAL_SETTINGS_EXPLAIN'		=> 'Hier kan je gebruikers in staat stellen het privacybeleid te bekijken en te accepteren. Daarnaast heb je de mogelijkheid om gebruikers hun eigen registratie te laten verwijderen.',
	'ACP_JVPPDMT_HIDE_USERNAME_BOT'				=> 'Gebruikersnamen verbergen voor robots',
	'ACP_JVPPDMT_HIDE_USERNAME_GUEST'			=> 'Gebruikersnamen verbergen voor gasten',
	'ACP_JVPPDMT_LAST_RESET_DATE'				=> 'Laatste reset datum: %s',
	'ACP_JVPPDMT_PRIVACY_POLICY_ENABLE'			=> 'Privacybeleid',
	'ACP_JVPPDMT_PRIVACY_POLICY_ENABLE_EXPLAIN'	=> 'Als je dit inschakelt, zien gebruikers het privacybeleid met de optie om het te accepteren.',
	'ACP_JVPPDMT_RESET'							=> 'Reset acceptatie van het privacybeleid',
	'ACP_JVPPDMT_RESET_CONFIRM'					=> 'Weet je zeker dat je de acceptatie van het privacybeleid opnieuw wilt instellen?',
	'ACP_JVPPDMT_RESET_EXPLAIN'					=> 'Als je het privacybeleid wijzigt, start je dit proces door gebruikers opnieuw te laten lezen en het nieuwe privacybeleid te accepteren.',
	'ACP_JVPPDMT_RESET_SUCCESS'					=> 'Reset van het privacybeleid is succesvol verlopen.',
	'ACP_JVPPDMT_SETTINGS'						=> 'Instellingen',
	'ACP_JVPPDMT_TERM_OF_USE_RESET'				=> 'Reset acceptatie van de gebruiksvoorwaarden',
	'ACP_JVPPDMT_TERM_OF_USE_RESET_CONFIRM'		=> 'Weet je zeker dat je de acceptatie van de gebruiksvoorwaarden opnieuw wilt instellen?',
	'ACP_JVPPDMT_TERM_OF_USE_RESET_EXPLAIN'		=> 'Als je de gebruiksvoorwaarden hebt gewijzigd, start je dit proces door gebruikers opnieuw te vragen de nieuwe gebruiksvoorwaarden te lezen en te accepteren.',
	'ACP_JVPPDMT_TERM_OF_USE_RESET_SUCCESS'		=> 'Reset van de gebruiksvoorwaarden is succesvol verlopen.',
	'ACP_JVPPDMT_USE_COOKIE_GUEST'				=> 'Gebruik van cookies voor gasten',
	'ACP_JVPPDMT_USE_COOKIE_GUEST_EXPLAIN'		=> 'Als dit is uitgeschakeld, worden gasten geblokkeerd voor het gebruik van cookies, dus het privacybeleid hoeft niet te worden geaccepteerd door gasten.',
	'ACP_JVPPDMT_VIEWER_GROUP'					=> 'Kijkergroep',
	'ACP_JVPPDMT_VIEWER_GROUP_EXPLAIN'			=> 'De extensie maakt een nieuwe speciale groep aan met de naam <strong>“Geregistreerde kijkers”</strong>. Deze groep waarborgt de rechten van gebruikers die geen opslag van extra persoonlijke gegevens accepteren. Merk op dat de verantwoordelijke voor de verwerking altijd aandacht moet besteden aan de rechten van deze groep dat deze altijd correct zijn ingesteld. De controller moet speciale rollen voor deze groep maken. De geschiktheid moet altijd zo zijn ingesteld dat een gebruiker in deze groep nergens een formulier kan indienen. Houd er rekening mee dat als je een nieuw forum maakt, je niet vergeet om de rechten van deze groep bij te werken. In dit geval is het goed om deze groep permissies in te stellen, zodat de gebruiker alleen kan bladeren en niets anders. Zorg ervoor dat je altijd het veld <strong>“NOOIT”</strong> permissies instelt voor andere acties, omdat dit de enige manier is om de toegangsrechten van de gebruiker van andere groepslidmaatschappen te overschrijven. Als je deze groep uitgeschakeld laat, zullen gebruikers, indien zij geen persoonlijke gegevensopslag accepteren, worden doorgestuurd om hun registratie te verwijderen.',
	'ACP_JVPPDMT_VIEWER_GROUP_INFO'				=> 'Toon kijkersgroep informatie',
	'ACP_JVPPDMT_VIEWER_GROUP_INFO_EXPLAIN'		=> 'Indien ingeschakeld, zien gebruikers in de kijkersgroep informatie dat ze in de kijkersgroep zitten en niet gemachtigd zijn een formulier in te dienen. Bovendien bevat de informatie een koppeling die hen naar hun persoonlijke gegevensinstellingen leidt.',
	'ACP_JVPPDMT_YOUR_PP_FILE'					=> 'Eigen bestandsnaam voor privacybeleid',
	'ACP_JVPPDMT_YOUR_PP_FILE_EXPLAIN'			=> 'Hier heb je de mogelijkheid om de naam in te voeren van je eigen taalbestand dat je gewijzigde privacybeleid bevat. Dit is nodig als je de tekst wilt wijzigen en niet wilt verliezen wanneer je de extensie bijwerkt door de bestanden te overschrijven. Upload je eigen bestand naar de [ROOT]/ext/jv/ppdmt/language/NL/ taal folder. Als de naam bijvoorbeeld “pp” is, moet deze worden gevonden in [ROOT]/ext/jv/ppdmt/language/NL/pp.php. Merk ook op dat vervangende tekens in %1$s ... %5$s in het taalbestand niet kunnen worden verwijderd en dat de taalvariabele ook dezelfde moet zijn. De eenvoudigste manier om een vergissing te voorkomen, is door het originele bestand privacy_policy.php te kopiëren, de naam ervan te wijzigen en de tekst daar in het hernoemde bestand te bewerken.',

	'LOG_JVPPDMT_DOWNLOAD_PRIVACY_DATA'			=> '<strong>Download privacy gegevens</strong>',
	'LOG_JVPPDMT_DOWNLOAD_PRIVACY_PMS'			=> '<strong>Download privacy privé berichten</strong>',
	'LOG_JVPPDMT_DOWNLOAD_PRIVACY_POSTS'		=> '<strong>Download privacy berichten</strong>',
	'LOG_JVPPDMT_PRIVACY_SETTINGS'				=> '<strong>Wijzigde privacy instellingen</strong>',
	'LOG_JVPPDMT_RESET'							=> '<strong>Reset privacybeleid</strong>',
	'LOG_JVPPDMT_SETTINGS'						=> '<strong>Wijzigde instellingen voor privacybeleid en data management tool</strong>',
	'LOG_JVPPDMT_TERM_OF_USE_RESET'				=> '<strong>Reset gebruiksvoorwaarden</strong>',
]);
