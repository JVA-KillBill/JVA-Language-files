<?php
/**
*
* @package JVA - Points System
* @version $Id: help_faq.php 953 2021-05-02 05:18:36Z KillBill $
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
// Some characters you may want to copy&paste: ‚ ‘ ’ « » „ “ ” …

$lang = array_merge($lang, array(
	'JV_POINTS_HELP_FAQ_BLOCK_GENERAL'						=> 'Algemene vragen',
	'JV_POINTS_HELP_FAQ_BLOCK_INTRO'						=> 'Introductie',
	'JV_POINTS_HELP_FAQ_GENERAL_POST_REWARD_ANSWER'			=> 'Als je nieuwe bericht moet worden goedgekeurd door een moderator, ontvang je de beloning pas na bevestiging.',
	'JV_POINTS_HELP_FAQ_GENERAL_POST_REWARD_MOD_ANSWER'		=> 'Als het nieuwe bericht kosten heeft en om welke reden dan ook wordt afgewezen, worden de kosten niet terugbetaald.',
	'JV_POINTS_HELP_FAQ_GENERAL_POST_REWARD_MOD_QUESTION'	=> 'Ik heb een nieuw bericht gestuurd, dat is afgewezen door een moderator, maar ik heb de kosten niet teruggekregen, waarom?',
	'JV_POINTS_HELP_FAQ_GENERAL_POST_REWARD_QUESTION'		=> 'Ik heb een nieuw bericht gestuurd, maar ik heb de beloning niet gekregen, waarom?',
	'JV_POINTS_HELP_FAQ_GENERAL_SAME_REWARD_COST_ANSWER'	=> 'Als een dergelijke instelling per ongeluk zou plaatsvinden, is het resultaat in dit geval nul.',
	'JV_POINTS_HELP_FAQ_GENERAL_SAME_REWARD_COST_QUESTION'	=> 'Wat gebeurt er als de beloning en de kosten dezelfde waarde hebben?',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_ANSWER'			=> 'Ja, als de beheerder je toestemming geeft om het te gebruiken.',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_COST_ANSWER'		=> 'Ja, maar alleen als de beheerder bepaalde kosten moet specificeren. De kosten kunnen een bepaald percentage zijn van het over te maken bedrag.',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_COST_QUESTION'		=> 'Zijn er kosten verbonden aan de overschrijving?',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_ELOG_ANSWER'		=> 'Als je geen logitems ziet, heeft een beheerder het verwijderd.',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_ELOG_QUESTION'		=> 'Mijn loggegevens zijn verdwenen, waarom?',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_LOG_ANSWER'		=> 'a, elke overdracht heeft een logboekinvoer, die kan worden bekeken in het overdrachtslogboek.',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_LOG_QUESTION'		=> 'Kunnen de overschrijvingen getraceerd worden?',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_QUESTION'			=> 'Is het mogelijk om een bepaald bedrag over te maken naar een andere gebruiker?',
	'JV_POINTS_HELP_FAQ_INTRO_MODULES_ANSWER'				=> 'In het puntensysteem zijn veel modules opgenomen, maar alleen degene die door de beheerder zijn geactiveerd, zijn beschikbaar. 
																<br><br><strong>Modules:</strong>
																<ul>
																	<li><strong>Overzicht</strong> - De hier weergegeven gebruikers hebben het hoogste saldo. Daarnaast kan je hier je eigen actuele saldo bekijken.</li>
																	<li><strong>Algemene informatie</strong> - Hier lees je de huidige instellingen, welke beloningen er zijn en welke kosten.</li>
																	<li><strong>Overdracht</strong> - Hier kan je saldo overdragen aan een andere gebruiker.</li>
																	<li><strong>Overdrachtslogboeken</strong> - Hier kan je de overdrachtstransacties bekijken.</li>
																	<li><strong>Gids</strong></li>
																</ul>',
	'JV_POINTS_HELP_FAQ_INTRO_MODULES_QUESTION'				=> 'Welke modules zijn opgenomen in het puntensysteem?',
	'JV_POINTS_HELP_FAQ_INTRO_SYSTEM_ANSWER'				=> 'Het puntensysteem stelt de gebruikers in staat om bepaalde beloningen te verwerven, of het betreffende bedrag wordt op sommige plaatsen van deze website gebruikt. De beheerder kan bepalen hoe een bepaald bedrag wordt bereikt en waarvoor het wordt gebruikt. Zelfs met dit, kan de volgende gids nuttig zijn.',
	'JV_POINTS_HELP_FAQ_INTRO_SYSTEM_QUESTION'				=> 'Wat is het puntensysteem?',
));
