<?php
/**
*
* @package Board3 Portal v2.3 - Announcements
* @copyright (c) 2013 Board3 Group ( www.board3.de )
* @license GNU General Public License, version 2 (GPL-2.0-only)
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
$lang = array_merge($lang, [
	'ACP_PORTAL_ANNOUNCE_SETTINGS'				=> 'Algemene aankondigingen instellingen',
	'ACP_PORTAL_ANNOUNCE_SETTINGS_EXP'			=> 'Hier kan je het algemene aankondigingen blok aanpassen.',

	'COMMENTS'									=> 'Reacties',

	'GLOBAL_ANNOUNCEMENT'						=> 'Algemene aankondiging',
	'GLOBAL_ANNOUNCEMENTS'						=> 'Algemene aankondigingen',

	'JUMP_FIRST'								=> 'Spring naar eerste bericht',
	'JUMP_NEWEST'								=> 'Spring naar nieuwste bericht',
	'JUMP_TO_POST'								=> 'Spring naar bericht',

	'LATEST_ANNOUNCEMENTS'						=> 'Laatste algemene aankondigingen',

	'NO_ANNOUNCEMENTS'							=> 'Geen algemene aankondigingen',

	'PORTAL_ANNOUNCEMENTS'						=> 'Algemene aankondigingen weergeven',
	'PORTAL_ANNOUNCEMENTS_ARCHIVE'				=> 'Het aankondigingen archiefsysteem inschakelen',
	'PORTAL_ANNOUNCEMENTS_ARCHIVE_EXP'			=> 'Indien ingeschakeld, zal het aankondigingen archiefsyteem/paginanummers weergeven.',
	'PORTAL_ANNOUNCEMENTS_DAY'					=> 'Aantal dagen om de aankondiging weer te geven',
	'PORTAL_ANNOUNCEMENTS_DAY_EXP'				=> '0 betekent oneindig',
	'PORTAL_ANNOUNCEMENTS_EXP'					=> 'Geef dit blok weer op het portaal.',
	'PORTAL_ANNOUNCEMENTS_FORUM_EXCLUDE'		=> 'Forums uitsluiten',
	'PORTAL_ANNOUNCEMENTS_FORUM_EXCLUDE_EXP'	=> 'Selecteer “Ja” als je de geselecteerde forums wilt uitsluiten van het aankondigingen blok, en “Nee” als je alleen de geselecteerde forums wilt zien in het aankondigingenblok.',
	'PORTAL_ANNOUNCEMENTS_LENGTH'				=> 'Maximum grootte/lengte van algemene aankondigingen',
	'PORTAL_ANNOUNCEMENTS_LENGTH_EXP'			=> '0 betekent oneindig',
	'PORTAL_ANNOUNCEMENTS_PERMISSIONS'			=> 'Permissies in-/uitschakelen',
	'PORTAL_ANNOUNCEMENTS_PERMISSIONS_EXP'		=> 'Tijdens het weergeven van aankondigingen, de weergave permissies van het gebruikersforum in de gaten houden.',
	'PORTAL_ANNOUNCEMENTS_STYLE'				=> 'Compacte algemene aankondigingen blokstijl',
	'PORTAL_ANNOUNCEMENTS_STYLE_EXP'			=> '“Ja” betekent het gebruik van de compacte stijl voor algemene aankondigingen. “Nee” betekent het gebruik van de grote stijl (tekst weergave).',
	'PORTAL_GLOBAL_ANNOUNCEMENTS_FORUM'			=> 'Aankondigingsforums',
	'PORTAL_GLOBAL_ANNOUNCEMENTS_FORUM_EXP'		=> 'Forum(s) waaruit we de aankondigingen halen. Laat dit leeg om de aankondigingen uit alle forums te halen. Als “Forums uitsluiten” is ingesteld op “Ja”, selecteer dan de forums die je wilt uitsluiten.<br>Als “Forums uitsluiten” is ingesteld op “Nee”, selecteer dan de forums die je wilt zien.<br>Selecteer/Deselecteer meerdere forums door het vasthouden van <samp>CTRL</samp> en klikken met je muis.',
	'PORTAL_NUMBER_OF_ANNOUNCEMENTS'			=> 'Aantal aankondigingen op het portaal',
	'PORTAL_NUMBER_OF_ANNOUNCEMENTS_EXP'		=> '0 betekent oneindig',
	'PORTAL_POST_REPLY'							=> 'Schrijf reactie',
	'PORTAL_SHOW_REPLIES_VIEWS'					=> 'Het aantal reacties en weergaven weergeven',
	'PORTAL_SHOW_REPLIES_VIEWS_EXP'				=> 'Deze instelling betreft het compacte blok.<br>Wanneer “Ja” is geselecteerd, dan worden het aantal reacties en weergaven getoond in 2 extra kolommen. Wanneer “Nee” is geselecteerd, dan worden de reacties en weergaven naast de forumnaam getoond. Selecteer “Nee” als je problemen hebt met het weergeven van de extra kolommen vanwege de extra vereiste breedte.',
	'POSTED_BY'									=> 'Auteur',

	'READ_FULL'									=> 'Lees alles',

	'TOPIC_VIEWS'								=> 'Weergaven',

	'VIEW_COMMENTS'								=> 'Bekijk reacties',
	'VIEW_LATEST_ANNOUNCEMENT'					=> '1 aankondiging',
	'VIEW_LATEST_ANNOUNCEMENTS'					=> '%d aankondigingen',
]);
