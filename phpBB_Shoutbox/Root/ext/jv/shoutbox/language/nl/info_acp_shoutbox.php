<?php
/**
*
* @package JVA - phpBB Shoutbox
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
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// Some characters you may want to copy&paste: ‚ ‘ ’ « » „ “ ” …

$lang = array_merge($lang, [
	'ACP_CAT_JV_SHOUTBOX_SETTINGS'						=> 'Shoutbox',
	'ACP_JV_SHOUTBOX'									=> 'JVA - phpBB Shoutbox',
	'ACP_JV_SHOUTBOX_AUTHOR'							=> 'Auteur van het bericht',
	'ACP_JV_SHOUTBOX_AUTHOR_EXPLAIN'					=> 'Hier kan je de auteur instellen die de aankondigingen verzend. Als je dit veld leeg laat en “JV Add System Bot” extensie installeert, worden de aankondiging onder die naam verzonden. Als er geen “System Bot” gebruiker is dan zal de actuele ingestelde gebruikersnaam gebruikt worden voor de aankondigingen.',
	'ACP_JV_SHOUTBOX_AVATAR'							=> 'Laat avatar zien',
	'ACP_JV_SHOUTBOX_AVATAR_EXPLAIN'					=> 'Indien aangezet, worden de avatars weergegeven.',
	'ACP_JV_SHOUTBOX_BBCODE_ALLOWED'					=> 'BBCode toegestaan',
	'ACP_JV_SHOUTBOX_BBCODE_ALLOWED_EXPLAIN'			=> 'De gespecificeerde BBCode kan alleen gebruikt worden in de shoutbox. Elke nieuwe BBCode op een nieuwe lijn schrijven.',
	'ACP_JV_SHOUTBOX_CUSTOM_BBCODE'						=> 'Aangepaste BBCode toegestaan',
	'ACP_JV_SHOUTBOX_CUSTOM_BBCODE_EXPLAIN'				=> 'Indien toegestaan, wordt ook de aangepaste BBCode weergegeven.',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE'						=> 'Aangepaste pagina toegestaan.',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_EXPLAIN'				=> 'Hier kan je de weergave van de shoutbox op een aangepaste pagina inschakelen.',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_ONLINE_LIST'			=> 'Aangepaste paginaweergave voor online gebruikers',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_ONLINE_LIST_EXPLAIN'	=> 'Hier kan je de weergave van online gebruikers op de aangepaste pagina inschakelen',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_POPUP'					=> 'Aangepaste pagina pop-up',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_POPUP_EXPLAIN'			=> 'Als je het inschakelt, wordt de aangepaste pagina geopend in een pop-upvenster.',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_POPUP_HEIGHT'			=> 'Hoogte pop-upvenster',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_POPUP_WIDTH'			=> 'Breedte pop-upvenster',
	'ACP_JV_SHOUTBOX_DATE_FORMAT'						=> 'Datum notatie',
	'ACP_JV_SHOUTBOX_DATE_FORMAT_EXPLAIN'				=> 'De syntax die wordt gebruikt is identiek aan PHP <a href="https://php.net/manual/en/function.date.php">date()</a> functie.',
	'ACP_JV_SHOUTBOX_DELETE_MESSAGES'					=> 'Verwijder berichten',
	'ACP_JV_SHOUTBOX_DELETE_MESSAGES_CONFIRM'			=> 'Weet je zeker dat je al de berichten wilt verwijderen?',
	'ACP_JV_SHOUTBOX_DELETE_MESSAGES_EXPLAIN'			=> 'Hier kun je alle berichten verwijderen.',
	'ACP_JV_SHOUTBOX_DELETE_MESSAGES_SUCCESS'			=> 'Alle berichten verwijderd.',
	'ACP_JV_SHOUTBOX_DISPLAY_ALL_MAIN_PAGES'			=> 'Alle hoofd paginas',
	'ACP_JV_SHOUTBOX_DISPLAY_ALL_PAGES'					=> 'Elke pagina',
	'ACP_JV_SHOUTBOX_DISPLAY_ALL_PAGES_EXCEPT_ARCADE'	=> 'Alle paginas, behalve de arcade',
	'ACP_JV_SHOUTBOX_DISPLAY_ALL_PAGES_EXCEPT_PORTAL'	=> 'Alle paginas, behalve het portaal',
	'ACP_JV_SHOUTBOX_DISPLAY_ARCADE'					=> 'Arcade index pagina',
	'ACP_JV_SHOUTBOX_DISPLAY_ARCADE_ALL'				=> 'Arcade alle paginas',
	'ACP_JV_SHOUTBOX_DISPLAY_FORUM'						=> 'Forum index pagina',
	'ACP_JV_SHOUTBOX_DISPLAY_FORUM_ALL'					=> 'Forum alle paginas',
	'ACP_JV_SHOUTBOX_DISPLAY_NONE'						=> 'Niet laten zien',
	'ACP_JV_SHOUTBOX_DISPLAY_PORTAL'					=> 'Portaal paginas',
	'ACP_JV_SHOUTBOX_EDIT_POST'							=> 'Bewerkte berichten weergeven',
	'ACP_JV_SHOUTBOX_EDIT_POST_EXPLAIN'					=> 'Wanneer een gebruiker zijn bericht bewerkt, wordt het weergegeven in de shoutbox.',
	'ACP_JV_SHOUTBOX_ENABLE'							=> 'Shoutbox aanzetten',
	'ACP_JV_SHOUTBOX_ENABLE_EXPLAIN'					=> 'Als je het inschakelt, wordt de shoutbox weergegeven op de paginas waar het is ingeschakeld.',
	'ACP_JV_SHOUTBOX_FLOOD_TIME'						=> 'Flood interval',
	'ACP_JV_SHOUTBOX_FLOOD_TIME_EXPLAIN'				=> 'Dit is het aantal seconden dat de gebruiker moet wachten tussen twee berichten. Je kan permissies gebruiken om bepaalde gebruikers uit te sluiten.',
	'ACP_JV_SHOUTBOX_FORUM_POST_SETTINGS'				=> 'Instellingen voor forumberichten',
	'ACP_JV_SHOUTBOX_HEIGHT'							=> 'Shoutbox hoogte',
	'ACP_JV_SHOUTBOX_HEIGHT_ERROR'						=> 'De ingestelde waarde voor “Hoogte shoutbox” is te hoog in vergelijking met het ingestelde “Aantal berichten”. Aan deze hoogte moeten minimaal “%d” berichten worden toegewezen.',
	'ACP_JV_SHOUTBOX_HEIGHT_EXPLAIN'					=> 'Voer de hoogte van de shoutbox in die je wil weergeven.',
	'ACP_JV_SHOUTBOX_LOCATION'							=> 'Locatie',
	'ACP_JV_SHOUTBOX_LOCATION_EXPLAIN'					=> 'Voeg de locatie toe waar de schoutbox te zien is op de website.',
	'ACP_JV_SHOUTBOX_MAX_MSG_LIMIT'						=> 'Maximum aantal berichten',
	'ACP_JV_SHOUTBOX_MAX_MSG_LIMIT_EXPLAIN'				=> 'Hier kan je het maximale aantal berichten beperken dat in de shoutbox kan worden weergegeven, bijvoorbeeld als de opgegeven waarde 100 is en de standaardbelasting 10 is, dan kunnen 90 oude berichten worden teruggelezen. Als de waarde 0 is, kunnen gebruikers alle oude berichten teruglezen.',
	'ACP_JV_SHOUTBOX_MIN_MAX_ERROR'						=> '“%s“ kan niet kleiner zijn dan “%s”.',
	'ACP_JV_SHOUTBOX_MSG_LIMIT'							=> 'Aantal berichten',
	'ACP_JV_SHOUTBOX_MSG_LIMIT_EXPLAIN'					=> 'Hier kan je specificeren hoeveel berichten standaard in de shoutbox moeten worden geladen. Dezelfde instelling is van toepassing op het laden van oude berichten.',
	'ACP_JV_SHOUTBOX_MSG_MAX_CHARS'						=> 'Maximaal aantal tekens per bericht',
	'ACP_JV_SHOUTBOX_MSG_MAX_CHARS_EXPLAIN'				=> 'Het aantal tekens dat is toegestaan binnen een bericht. Stel 0 in voor onbeperkt aantal tekens.',
	'ACP_JV_SHOUTBOX_MSG_MIN_CHARS'						=> 'Minimale aantal tekens per bericht',
	'ACP_JV_SHOUTBOX_MSG_MIN_CHARS_EXPLAIN'				=> 'Gebruikers kunnen alleen berichten van ten minste zoveel tekens verzenden. De minimale waarde die kan worden ingevoerd is 1.',
	'ACP_JV_SHOUTBOX_MSG_POSITION'						=> 'Bericht positie',
	'ACP_JV_SHOUTBOX_MSG_POSITION_EXPLAIN'				=> 'Geef aan of de nieuwe berichten worden weergegeven aan de boven- of onderkant.',
	'ACP_JV_SHOUTBOX_MSG_SETTINGS'						=> 'Bericht instellingen',
	'ACP_JV_SHOUTBOX_NEW_REPLY_POST'					=> 'Laat een nieuw bericht zien',
	'ACP_JV_SHOUTBOX_NEW_REPLY_POST_EXPLAIN'			=> 'Wanneer een nieuw bericht in een onderwerp binnenkomt, wordt het weergegeven in de shoutbox.',
	'ACP_JV_SHOUTBOX_NEW_REPLY_QUOTE_POST'				=> 'Laat een geciteerde bericht zien',
	'ACP_JV_SHOUTBOX_NEW_REPLY_QUOTE_POST_EXPLAIN'		=> 'Wanneer een nieuw geciteerd bericht in een onderwerp binnenkomt, wordt het weergegeven in de shoutbox.',
	'ACP_JV_SHOUTBOX_NEW_TOPIC_POST'					=> 'laat een nieuw onderwerp zien',
	'ACP_JV_SHOUTBOX_NEW_TOPIC_POST_EXPLAIN'			=> 'Als er een nieuw onderwerp wordt aangemaakt in het forum, zal dit worden weergegeven in de shoutbox.',
	'ACP_JV_SHOUTBOX_PAGE'								=> 'Laat shoutbox zien',
	'ACP_JV_SHOUTBOX_PAGE_EXPLAIN'						=> 'Hier kan je de pagina specificeren waar je de shoutbox wil laten verschijnen. Houd er rekening mee dat het gebruik van emoticons en BB-codes niet beschikbaar is in de shoutbox tijdens het schrijven van een bericht, handtekening en pm-bericht.',
	'ACP_JV_SHOUTBOX_POSITION_BOTTOM'					=> 'Onderaan',
	'ACP_JV_SHOUTBOX_POSITION_TOP'						=> 'Boven',
	'ACP_JV_SHOUTBOX_POST_IGNORE_FORUMS'				=> 'Genegeerde forums',
	'ACP_JV_SHOUTBOX_POST_IGNORE_FORUMS_EXPLAIN'		=> 'Onderwerpen in de geselecteerde forums worden niet automatisch geplaatst.<br><em>Je kan meerdere forums selecteren of deselecteren door de CTRL-toets ingedrukt te houden.</em>',
	'ACP_JV_SHOUTBOX_PRUNE'								=> 'Verminder berichten',
	'ACP_JV_SHOUTBOX_PRUNE_EXPLAIN'						=> 'Als je het aanzet, blijft alleen het ingestelde maximum aantal berichten over op de ingestelde intervallen.',
	'ACP_JV_SHOUTBOX_PRUNE_MSG_NUM'						=> 'Aantal behouden berichten',
	'ACP_JV_SHOUTBOX_PRUNE_MSG_NUM_EXPLAIN'				=> 'Indien pruning is aangezet, zal het aantal ingestelde berichten bewaard blijven.',
	'ACP_JV_SHOUTBOX_PRUNE_TIME'						=> 'Pruning interval',
	'ACP_JV_SHOUTBOX_PRUNE_TIME_EXPLAIN'				=> 'Voer het aantal intervals in om berichten te verwijderen tijdens de pruning.',
	'ACP_JV_SHOUTBOX_REFRESH'							=> 'Laad (controle) interval',
	'ACP_JV_SHOUTBOX_REFRESH_EXPLAIN'					=> 'De opgegeven intervallen worden gecontroleerd op nieuwe berichten.',
	'ACP_JV_SHOUTBOX_ROUND_AVATAR'						=> 'Ronde avatar',
	'ACP_JV_SHOUTBOX_ROUND_AVATAR_EXPLAIN'				=> 'Indien aangezet, zullen de avatars worden weergegeven in een ronde vorm.',
	'ACP_JV_SHOUTBOX_SETTINGS'							=> 'Shoutbox instellingen',
	'ACP_JV_SHOUTBOX_SETTINGS_EXPLAIN'					=> 'Hier kan je de shoutbox en de berichtinstellingen aanpassen.',
	'ACP_JV_SHOUTBOX_SMILIE_ENABLE'						=> 'Zet smilies aan',
	'ACP_JV_SHOUTBOX_SMILIE_ENABLE_EXPLAIN'				=> 'Hier kun je het gebruik van smilies aanzetten.',
	'ACP_JV_SHOUTBOX_SMILIE_SCROLL_BOX'					=> 'Smileys verschijnen in het schuifvenster',
	'ACP_JV_SHOUTBOX_SMILIE_SCROLL_BOX_EXPLAIN'			=> 'Als er te veel smilies zijn ingeschakeld, kun je de smilies hier in een schuifvak vergrendelen.',

	'JVA_CORE_EXT_NOT_FOUND'							=> 'De extensie kon niet worden ingeschakeld omdat de extensie “JVA - Core” niet kon worden gevonden!',

	'LOG_JV_SHOUTBOX_CONFIG_SETTINGS'					=> '<strong>Wijzig shoutbox instellingen.</strong>',
	'LOG_JV_SHOUTBOX_DELETE_MESSAGES'					=> '<strong>Verwijder alle shoutbox berichten.</strong>',
	'LOG_JV_SHOUTBOX_MESSAGES_PRUNING'					=> '<strong>Shoutbox berichten geleegd.</strong><br>» Verwijderde %d berichten',
]);
