<?php
/**
*
* @package JVA - Points System
* @version $Id: info_acp_points.php 991 2021-12-12 10:10:48Z KillBill $
* @author 2011-2024 KillBill
* @copyright (c) 2014-2024 https://jv-arcade.com/ - https://jv-arcade.com/contact
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
// Some characters you may want to copy&paste: ‚ ‘ ’ « » “ “ ” …

$lang = array_merge($lang, array(
	'JV_ACP_CAT_POINTS'										=> 'Puntensysteem',
	'JV_ACP_POINTS'											=> 'JVA - Points System',
	'JV_ACP_POINTS_ADD'										=> 'Toevoegen',
	'JV_ACP_POINTS_AFTER'									=> 'Na',
	'JV_ACP_POINTS_AMOUNT_USERS_EXPLAIN'					=> 'Voer het bedrag in waarmee je het saldo van de gebruikers wilt aanpassen.',
	'JV_ACP_POINTS_BEFORE'									=> 'Voordat',
	'JV_ACP_POINTS_DELETE_SELECTED_TRANSFER_LOG_SUCCESS'	=> 'Geselecteerde overdrachtsvermeldingen succesvol verwijderd.',
	'JV_ACP_POINTS_DELETE_TRANSFER_LOG_CONFIRM'				=> 'Weet je zeker dat je de logboekvermeldingen wilt verwijderen?<br><em>Houd er rekening mee dat de gegevens na verwijdering niet meer kunnen worden hersteld en dat gebruikers geen toegang meer hebben tot deze logboekvermeldingen.</em>',
	'JV_ACP_POINTS_DELETE_TRANSFER_LOG_SUCCESS'				=> 'Overdrachtslog succesvol verwijderd.',
	'JV_ACP_POINTS_DISPLAY_MEMBERLIST'						=> 'Saldo weergeven in de ledenlijst',
	'JV_ACP_POINTS_DISPLAY_MEMBERLIST_EXPLAIN'				=> 'Als je het inschakelt, worden de saldi van gebruikers weergegeven in de ledenlijst.',
	'JV_ACP_POINTS_DISPLAY_TOP_USERS'						=> 'Toon topgebruikers',
	'JV_ACP_POINTS_DISPLAY_TOP_USERS_EXPLAIN'				=> 'Als je het aanzet, worden de gebruikers met het hoogste saldo weergegeven onder het tabblad “Puntensysteem controlepaneel/Overzicht”.',
	'JV_ACP_POINTS_ENABLE'									=> 'Puntensysteem aan',
	'JV_ACP_POINTS_ENABLE_EXPLAIN'							=> 'Gebruikers toestaan het puntensysteem te gebruiken.',
	'JV_ACP_POINTS_ERROR_NO_FUNCTION'						=> 'Je hebt geen functie opgegeven.',
	'JV_ACP_POINTS_ERROR_ZERO_VALUE'						=> 'Het ingevoerde bedrag mag niet nul zijn.',
	'JV_ACP_POINTS_GROUPS_CHANGED_SUCCESS'					=> 'De saldi van alle gebruikers zijn gewijzigd in de groep(en) “%s”.',
	'JV_ACP_POINTS_GROUP_ALL_USERS'							=> 'Alle gebruikers in de groep',
	'JV_ACP_POINTS_GROUP_ALL_USERS_EXPLAIN'					=> 'Als je “nee” selecteert, is dit alleen van toepassing op gebruikers van wie de geselecteerde groep ook de standaardgroep is.',
	'JV_ACP_POINTS_GROUP_CHANGED_SUCCESS'					=> 'Groep “%s” heeft met succes het saldo van alle gebruikers gewijzigd.',
	'JV_ACP_POINTS_LOG_FORMAT_GROUP'						=> 'Logformaat',
	'JV_ACP_POINTS_LOG_FORMAT_GROUP_EXPLAIN'				=> 'Hier kan je specificeren of de logboekinvoer groepsnamen of gebruikersnamen moet bevatten.',
	'JV_ACP_POINTS_MANAGE_GROUPS'							=> 'Groepen beheren',
	'JV_ACP_POINTS_MANAGE_USER'								=> 'Beheer gebruiker',
	'JV_ACP_POINTS_MANAGE_USERS'							=> 'Beheer gebruikers',
	'JV_ACP_POINTS_MANAGE_USERS_EXPLAIN'					=> 'Hier kan je het saldo van de gebruikers wijzigen. Individuele, meerdere gebruikers en groepswijzigingen zijn ook mogelijk.',
	'JV_ACP_POINTS_MANAGE_USER_EXPLAIN'						=> 'Hier kan je het saldo van de gebruiker wijzigen.',
	'JV_ACP_POINTS_NAME'									=> 'Puntennaam',
	'JV_ACP_POINTS_NAME_COLOR'								=> 'Kleur puntennaam',
	'JV_ACP_POINTS_NAME_COLOR_EXPLAIN'						=> 'Als je de kleur van “Puntennaam” wilt wijzigen, kan je dat hier doen.',
	'JV_ACP_POINTS_NAME_EXPLAIN'							=> 'De naam die op de website is ingevoerd, wordt gebruikt door het puntensysteem.',
	'JV_ACP_POINTS_NAME_POS'								=> 'Puntennaam positie',
	'JV_ACP_POINTS_NAME_POS_EXPLAIN'						=> 'Hier kan je aangeven of de “Puntennaam” voor of na het bedrag moet staan.',
	'JV_ACP_POINTS_NEW_ATTACH_EXT'							=> 'Kies bestandsextensies',
	'JV_ACP_POINTS_NEW_ATTACH_EXT_EXPLAIN'					=> 'Alleen de geselecteerde bestandsextensies zijn onderworpen aan de downloadkosten.',
	'JV_ACP_POINTS_SELECT_FUNC'								=> 'Antwoordfunctie:',
	'JV_ACP_POINTS_SELECT_GROUPS_NO_USER'					=> 'Er zijn geen gebruikers in de geselecteerde groepen.',
	'JV_ACP_POINTS_SELECT_GROUP_NO_USER'					=> 'Er zijn geen gebruikers in de geselecteerde groep.',
	'JV_ACP_POINTS_SET'										=> 'Vast',
	'JV_ACP_POINTS_SETTINGS'								=> 'Algemene instellingen',
	'JV_ACP_POINTS_SUBTRACT'								=> 'Aftrek',
	'JV_ACP_POINTS_TRANSFER'								=> 'Overdrachtsmodule inschakelen',
	'JV_ACP_POINTS_TRANSFER_EXPLAIN'						=> 'Hier kan je het gebruik van de doorschakelmodule inschakelen. Gebruikers hebben de mogelijkheid om een bepaald bedrag aan elkaar over te maken.',
	'JV_ACP_POINTS_TRANSFER_LOG'							=> 'Beheer van overdrachtlogboek',
	'JV_ACP_POINTS_TRANSFER_LOG_EXPLAIN'					=> 'Hier kun je alle transfers bekijken en heb je de mogelijkheid om logboekvermeldingen te verwijderen.',
	'JV_ACP_POINTS_USERS_CHANGED_SUCCESS'					=> 'Saldo van gebruikers) “%s” succesvol gewijzigd.',
	'JV_ACP_POINTS_USERS_DEFAULT_GROUPS_CHANGED_SUCCESS'	=> 'Standaard gebruikerssaldo groepen “%s” succesvol gewijzigd.',
	'JV_ACP_POINTS_USERS_DEFAULT_GROUP_CHANGED_SUCCESS'		=> 'Standaard gebruikerssaldo voor groep “%s” succesvol gewijzigd.',
	'JV_LOG_POINTS_ADD_GROUP'								=> '<strong>Voeg een bedrag voor alle gebruikers toe aan de volgende groep: %s</strong><br>» Toegevoegd bedrag: %s',
	'JV_LOG_POINTS_ADD_GROUPS'								=> '<strong>Voeg een bedrag toe voor alle gebruikers aan de volgende groepen: %s</strong><br>» Toegevoegd bedrag: %s',
	'JV_LOG_POINTS_ADD_USER'								=> '<strong>Voeg een bedrag toe aan de volgende gebruiker: %s</strong><br>» Toegevoegd bedrag: %s',
	'JV_LOG_POINTS_ADD_USERS'								=> '<strong>Voeg een bedrag toe voor de volgende gebruikers: %s</strong><br>» Toegevoegd bedrag: %s',
	'JV_LOG_POINTS_ADD_USERS_DEFAULT_GROUP'					=> '<strong>Een bedrag voor standaardgebruikers toevoegen aan de volgende groep: %s</strong><br>» Toegevoegd bedrag: %s',
	'JV_LOG_POINTS_ADD_USERS_DEFAULT_GROUPS'				=> '<strong>Voeg een bedrag toe voor standaardgebruikers aan de volgende groepen: %s</strong><br>» Toegevoegd bedrag: %s',
	'JV_LOG_POINTS_CLEAR_TRANSFER_LOG'						=> '<strong>Wis het overdrachtslogboek van het puntensysteem.</strong>',
	'JV_LOG_POINTS_SET_GROUP'								=> '<strong>Stel een bedrag in voor alle gebruikers voor de volgende groep: %s</strong><br>» Vast bedrag: %s',
	'JV_LOG_POINTS_SET_GROUPS'								=> '<strong>Stel een bedrag in voor alle gebruikers voor de volgende groepen: %s</strong><br>» Vast bedrag: %s',
	'JV_LOG_POINTS_SET_USER'								=> '<strong>Stel een bedrag in voor de volgende gebruiker: %s</strong><br>» Vast bedrag: %s',
	'JV_LOG_POINTS_SET_USERS'								=> '<strong>Stel een bedrag in voor de volgende gebruikers: %s</strong><br>» Vast bedrag: %s',
	'JV_LOG_POINTS_SET_USERS_DEFAULT_GROUP'					=> '<strong>Stel een bedrag in voor standaardgebruikers voor de volgende groep: %s</strong><br>» Vast bedrag: %s',
	'JV_LOG_POINTS_SET_USERS_DEFAULT_GROUPS'				=> '<strong>Stel een bedrag in voor standaardgebruikers voor de volgende groepen: %s</strong><br>» Vast bedrag: %s',
	'JV_LOG_POINTS_SUBTRACT_GROUP'							=> '<strong>Trek een bedrag voor alle gebruikers af van de volgende groep: %s</strong><br>» Bedrag in mindering gebracht: %s',
	'JV_LOG_POINTS_SUBTRACT_GROUPS'							=> '<strong>Trek een bedrag voor alle gebruikers af van de volgende groepen: %s</strong><br>» Bedrag in mindering gebracht: %s',
	'JV_LOG_POINTS_SUBTRACT_USER'							=> '<strong>Trek het volgende bedrag af van de volgende gebruiker: %s</strong><br>» Bedrag in mindering gebracht: %s',
	'JV_LOG_POINTS_SUBTRACT_USERS'							=> '<strong>Trek het volgende bedrag af van de volgende gebruikers: %s</strong><br>» Bedrag in mindering gebracht: %s',
	'JV_LOG_POINTS_SUBTRACT_USERS_DEFAULT_GROUP'			=> '<strong>Trek het bedrag voor de standaardgebruikers af van de volgende groep: %s</strong><br>» Bedrag in mindering gebracht: %s',
	'JV_LOG_POINTS_SUBTRACT_USERS_DEFAULT_GROUPS'			=> '<strong>Trek het bedrag af voor de standaardgebruikers van de volgende groepen: %s</strong><br>» Bedrag in mindering gebracht: %s',
	'JV_LOG_POINTS_USER_CHANGED'							=> '<strong>%s gebruikerssaldo wijzigen. Oorspronkelijke balans: %s</strong><br>» Nieuw saldo: %s',
	'JV_POINTS_NEW_ATTACH_COST_EXPLAIN'						=> 'Als een gebruiker een bijlage downloadt, wordt dit bedrag in mindering gebracht.',
	'JV_POINTS_NEW_POST_COST_EXPLAIN'						=> 'Als een gebruiker een nieuw bericht schrijft, wordt dit bedrag in mindering gebracht.',
	'JV_POINTS_NEW_POST_REWARD_EXPLAIN'						=> 'Als een gebruiker een nieuw bericht schrijft, ontvangt hij deze beloning.<br><em>Opmerking: deze beloning wordt aan de gebruiker gegeven, zelfs als hij een nieuw onderwerp opent.</em>',
	'JV_POINTS_NEW_TOPIC_REWARD_EXPLAIN'					=> 'Als een gebruiker een nieuw onderwerp opent, ontvangt hij deze beloning.',
	'JV_POINTS_REG_START_BALANCE_EXPLAIN'					=> 'Als een nieuw lid zich registreert op de website, is dit hun beginsaldo.',
	'JV_POINTS_TRANSFER_COST_EXPLAIN'						=> 'Een bepaald percentage van het bedrag dat je wilt overmaken.',
));
