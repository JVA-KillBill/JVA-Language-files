<?php
/**
*
@package JVA - Points System
* @version $Id: info_ucp_points.php 991 2021-12-12 10:10:48Z KillBill $
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
	'JV_POINTS_ADD_USER_EXPLAIN'			=> 'Geef de naam in van de gebruiker van wie je het saldo wil veranderen.',
	'JV_POINTS_ALL_TRANSFER'				=> 'Alle overdrachten',
	'JV_POINTS_AMOUNT'						=> 'Hoeveelheid',
	'JV_POINTS_AMOUNT_USER_EXPLAIN'			=> 'Geef het aantal punten in wat je wil toevoegen om het saldo van de gebruiker te veranderen.',
	'JV_POINTS_ATTACH_DOWNLOAD_NO_POINTS'	=> 'Je hebt niet genoeg “%s” om dit bestand te downloaden.',
	'JV_POINTS_BALANCE'						=> 'Saldo.',
	'JV_POINTS_CHANGE'						=> 'Wijzig saldo',
	'JV_POINTS_CHANGE_TITLE'				=> 'Wijzig gebruikerssaldo.',
	'JV_POINTS_CONTROL_PANEL'				=> 'Puntensysteem controlepaneel.',
	'JV_POINTS_COST'						=> 'Kost',
	'JV_POINTS_COSTS'						=> 'Kosten',
	'JV_POINTS_DISABLED'					=> 'Puntensysteem is momenteel uitgeschakeld.',
	'JV_POINTS_ERROR_MINUS_VALUE'			=> 'Het opgegeven bedrag mag geen minwaarde zijn.',
	'JV_POINTS_ERROR_TRANSFER_BALANCE'		=> 'Je saldo dekt niet het bedrag dat je wilt overschrijven.',
	'JV_POINTS_ERROR_TRANSFER_BALANCE_COST'	=> 'Je saldo dekt niet het bedrag dat je wilt overschrijven en de kosten ervan.',
	'JV_POINTS_ERROR_ZERO_VALUE'			=> 'Het bedrag kan niet nul zijn.',
	'JV_POINTS_FAQ'							=> 'FAQ',
	'JV_POINTS_FAQ_VIEWING'					=> 'Bekijk de puntensysteemgids',
	'JV_POINTS_GUIDE'						=> 'Puntensysteem gids',
	'JV_POINTS_INFO'						=> 'Informatie.',
	'JV_POINTS_INFO_EXPLAIN'				=> 'Hier kun je de huidige instellingen lezen, waarom beloningen en wat de kosten zijn. Hou in de gaten dat een beheerder ten alle tijden deze instellingen kan wijzigen.',
	'JV_POINTS_INFO_TITLE'					=> 'Algemene informatie.',
	'JV_POINTS_INFO_VIEWING'				=> 'Bekijk de algemene instellingen van het puntensysteem.',
	'JV_POINTS_LOGIN_EXPLAIN'				=> 'Je moet ingelogd zijn voordat je het puntensysteem controlepaneel kan bekijken.',
	'JV_POINTS_MAIN'						=> 'Overzicht',
	'JV_POINTS_MAIN_EXPLAIN'				=> 'Hallo %s!<br><br>Huidig saldo: %s.',
	'JV_POINTS_MAIN_TITLE'					=> 'Gebruikers met het meeste saldo',
	'JV_POINTS_MODIFY'						=> 'Wijzigen',
	'JV_POINTS_MORE_INFO_HERE'				=> 'Meer informatie %sHIERs.',
	'JV_POINTS_NEW_ATTACHS_COST_EXPLAIN'	=> 'De kosten van de downloaden zijn van toepassing op de volgende bestandsextensies: “%s”.',
	'JV_POINTS_NEW_ATTACH_COST'				=> 'Bijlagen download kosten',
	'JV_POINTS_NEW_ATTACH_COST_EXPLAIN'		=> 'De kosten van downloaden is van toepassing op de volgende bestandsextensie: “%s”.',
	'JV_POINTS_NEW_POST_COST'				=> 'Bericht schrijven kosten ',
	'JV_POINTS_NEW_POST_REWARD'				=> 'Nieuw bericht schrijven beloning',
	'JV_POINTS_NEW_TOPIC_REWARD'			=> 'Nieuw onderwerp beloning',
	'JV_POINTS_NOTIFICATION_CHANGE_ADD'		=> 'Gebruiker %s heeft saldo aan je account toegevoegd.<br>Toegevoegd bedrag: %s.',
	'JV_POINTS_NOTIFICATION_CHANGE_SET'		=> 'Gebruiker %s heeft je saldo gewijzigd.<br>Nieuwe balans: %s.',
	'JV_POINTS_NOTIFICATION_CHANGE_SUB'		=> 'Gebruiker %s afgetrokken saldo van je account.<br>Afgetrokken bedrag: %s.',
	'JV_POINTS_NOTIFICATION_SET'			=> 'Gebruiker %s heeft je balans gewijzigd.<br>Oude balans: %s<br>Nieuwe balans: %s.',
	'JV_POINTS_NOTIFICATION_TRANSFER'		=> 'Gebruiker %s heeft %s aan je gedoneerd.',
	'JV_POINTS_NO_TRANSFER_LOG'				=> 'Er is nog geen overdracht gemaakt',
	'JV_POINTS_NO_USER'						=> 'Momenteel is het saldo van elke gebruiker nul.',
	'JV_POINTS_RECEIVED'					=> 'Ontvangen',
	'JV_POINTS_REG_START_BALANCE'			=> 'Nieuw geregistreerd beginsaldo',
	'JV_POINTS_REWARDS'						=> 'Beloningen',
	'JV_POINTS_SENT'						=> 'Verstuurd',
	'JV_POINTS_SORT_AMOUNT'					=> 'Bedrag van de gift',
	'JV_POINTS_SORT_DATE'					=> 'Verzenddatum',
	'JV_POINTS_SORT_FROM'					=> 'Van',
	'JV_POINTS_SORT_TO'						=> 'Naar',
	'JV_POINTS_SORT_TYPE'					=> 'Zend type',
	'JV_POINTS_TRANSFER'					=> 'Overdracht',
	'JV_POINTS_TRANSFER_AMOUNT'				=> 'Over te dragen bedrag',
	'JV_POINTS_TRANSFER_AMOUNT_EXPLAIN'		=> 'Geef het bedrag in dat je wilt overschrijven.',
	'JV_POINTS_TRANSFER_COST'				=> 'Overdrachtskosten',
	'JV_POINTS_TRANSFER_COST_EXPLAIN'		=> 'De overdrachtskosten bedragen %1$s procent. Als je een overschrijven doet, wordt het bedrag dat je wilt overschrijven en %1$s procent daarvan van je saldo afgetrokken.',
	'JV_POINTS_TRANSFER_LOG'				=> 'Overdrachtslog',
	'JV_POINTS_TRANSFER_TITLE'				=> 'Een bepaald bedrag overdragen naar een andere gebruiker',
	'JV_POINTS_TRANSFER_TITLE_EXPLAIN'		=> 'Voer de naam in van de gebruiker naar wie je wilt overschrijven.',
	'JV_POINTS_TRANSFER_YOURSELF_ERROR'		=> 'Je kunt niet naar jezelf overschrijven.',
	'JV_POINTS_USER_CHANGED_SUCCESS'		=> 'Het saldo van gebruiker “%s” is met succes gewijzigd.',
	'JV_POINTS_USER_TRANSFER_SUCCESS'		=> 'De overschrijving aan gebruiker “%s” is met succes voltooid.',
	'JV_POINTS_VIEWING'						=> 'Bekijkt het Puntensysteem Controlepaneel',
	'JV_POINTS_WRITE_POST_NO_POINTS'		=> 'Je hebt niet genoeg “%s” om een nieuw bericht te schrijven.',

	'JVA_CORE_EXT_NOT_FOUND'				=> 'De extensie kan niet worden ingeschakeld omdat de extensie “JVA - Core” niet kan worden gevonden!',
));
