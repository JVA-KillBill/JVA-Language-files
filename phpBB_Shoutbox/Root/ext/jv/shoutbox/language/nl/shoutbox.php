<?php
/**
*
* @package JVA - phpBB Shoutbox
* @version $Id$
* @author 2011-2022 KillBill
* @copyright (c) 2014-2022 https://jv-arcade.com/ - https://jv-arcade.com/contact
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

$lang = array_merge($lang, array(
	'JV_SHOUTBOX'							=> 'Shoutbox',
	'JV_SHOUTBOX_AJAX_ERROR'				=> 'Er is een fout opgetreden tijdens de verwerking.',
	'JV_SHOUTBOX_AUTO_REFRESH_TIME_TITLE'	=> 'Automatisch laden elke %d seconden',
	'JV_SHOUTBOX_BBCODES'					=> 'BBCodes',
	'JV_SHOUTBOX_BBCODES_FAQ'				=> 'BBCodes FAQ',
	'JV_SHOUTBOX_CLOSE'						=> 'De shoutbox sluiten',
	'JV_SHOUTBOX_CONFIRM_DELETE_MSG'		=> 'Weet je zeker dat je dit bericht wil verwijderen?',
	'JV_SHOUTBOX_CUSTOM_BBCODES'			=> 'Aangepaste BBC-codes',
	'JV_SHOUTBOX_DELETE_MESSAGE'			=> 'Verwijder bericht',
	'JV_SHOUTBOX_EDIT_MESSAGE'				=> 'Bericht bewerken',
	'JV_SHOUTBOX_EMPTY_MSG_ERROR'			=> 'Je kan geen leeg bericht verzenden.',
	'JV_SHOUTBOX_EXPLAIN'					=> 'Openbare chat met gebruikers.',
	'JV_SHOUTBOX_F_EDITED_POST'				=> '%3$s heeft een bericht bewerkt in het forum %1$s over het onderwerp %2$s.',
    'JV_SHOUTBOX_F_NEW_POST'                => '%3$s heeft gereageerd op een bericht in het forum %1$s over het onderwerp %2$s.',
    'JV_SHOUTBOX_F_NEW_POST_QUOTE'          => '%3$s citeerde een bericht in het forum %1$s over het onderwerp %2$s.',
    'JV_SHOUTBOX_F_NEW_TOPIC'               => '%3$s heeft een nieuw onderwerp geopend in het forum %1$s: %2$s.',
	'JV_SHOUTBOX_IP_BUTTON_TITLE'			=> 'Adresinformatie van gebruikers IP “%s” ',
	'JV_SHOUTBOX_MSG_EDITED_TIMES'			=> array(
		1									=> 'Bewerkt %d keer.',
		2									=> 'Bewerkt %d keren.',
	),
	'JV_SHOUTBOX_MSG_FLOOD_ERROR'			=> 'Je kunt geen ander bericht plaatsen omdat je net het vorige hebt verzonden.',
	'JV_SHOUTBOX_MSG_MAX_CHARS_ERROR'		=> 'Het bericht kan maximaal %d tekens bevatten.',
	'JV_SHOUTBOX_MSG_MIN_CHARS_ERROR'		=> array(
		1									=> 'Het bericht moet minimaal %d teken bevatten.',
		2									=> 'Het bericht moet minimaal %d tekens bevatten.',
	),
	'JV_SHOUTBOX_MSG_NO_USER_IP'			=> 'Het bericht bestaat niet of er is geen IP toegewezen aan dit bericht.',
	'JV_SHOUTBOX_NEW_MSG_TITLE'				=> array(
		1									=> '(%d) nieuw bericht binnengekomen!',
		2									=> '(%d) nieuwe berichten binnengekomen!',
	),
	'JV_SHOUTBOX_NO_JS'						=> 'Om de shoutbox te gebruiken, moet javascript ingeschakeld zijn om te kunnen werken!',
	'JV_SHOUTBOX_NO_MSG_ID'					=> 'Bericht niet gevonden.',
	'JV_SHOUTBOX_NO_PERMISSION_DELETE_MSG'	=> 'Je hebt geen toestemming om dit bericht te verwijderen.',
	'JV_SHOUTBOX_NO_PERMISSION_EDIT_MSG'	=> 'Je hebt geen toestemming om dit bericht te bewerken.',
	'JV_SHOUTBOX_NO_PERMISSION_SEND_MSG'	=> 'Je hebt geen toestemming om berichten te verzenden.',
	'JV_SHOUTBOX_OPEN'						=> 'Open de shoutbox',
	'JV_SHOUTBOX_PM_BUTTON_TITLE'			=> 'Stuur een privébericht',
	'JV_SHOUTBOX_QUOTE_BUTTON_TITLE'		=> 'Citeer een bericht',
	'JV_SHOUTBOX_RE_USER'					=> '@%s',
	'JV_SHOUTBOX_RE_USER_TITLE'				=> 'Stuur een antwoord naar de gebruiker',
	'JV_SHOUTBOX_SOUND_OFF_TITLE'			=> 'Geluid uit',
	'JV_SHOUTBOX_SOUND_ON_TITLE'			=> 'Geluid aan',
	'JV_SHOUTBOX_SUCCESS_DELETE_MSG'		=> 'Het bericht is succesvol verwijderd.',
	'JV_SHOUTBOX_VIEWING'					=> 'Bekijk shoutbox',
));
