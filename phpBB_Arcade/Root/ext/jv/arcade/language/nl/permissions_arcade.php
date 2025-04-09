<?php
/**
*
* @package phpBB Arcade
* @version $Id: permissions_arcade.php 173 2024-01-14 12:28:15Z KillBill $
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

// Define categories and permission types
$lang = array_merge($lang, [
	'ACL_A_ARCADE'						=> 'Kan arcade resetten',
	'ACL_A_ARCADE_ANNOUNCE'				=> 'Kan aankondigingen beheren',
	'ACL_A_ARCADE_BACKUP'				=> 'Kan een back-up maken van categorieën',
	'ACL_A_ARCADE_CAT'					=> 'Kan categorieën toevoegen/bewerken',
	'ACL_A_ARCADE_CLEARLOGS'			=> 'Kan logs wissen',
	'ACL_A_ARCADE_DELETE_CAT'			=> 'Kan categorieën verwijderen',
	'ACL_A_ARCADE_DELETE_GAME'			=> 'Kan spellen verwijderen',
	'ACL_A_ARCADE_DELETE_TOUR'			=> 'Kan toernooien verwijderen',
	'ACL_A_ARCADE_GAME'					=> 'Kan spellen toevoegen/bewerken',
	'ACL_A_ARCADE_INSTALL'				=> 'Kan installatie functies beheren',
	'ACL_A_ARCADE_MENU'					=> 'Kan menu beheren',
	'ACL_A_ARCADE_POINTS_SETTINGS'		=> 'Kan punteninstellingen beheren',
	'ACL_A_ARCADE_RANKS'				=> 'Kan rangen beheren',
	'ACL_A_ARCADE_RESET_GAME'			=> 'Kan spellen resetten',
	'ACL_A_ARCADE_SETTINGS'				=> 'Kan instellingen beheren',
	'ACL_A_ARCADE_TOUR'					=> 'Kan toernooi aanmaken/bewerken',
	'ACL_A_ARCADE_USER'					=> 'Kan gebruikers beheren',
	'ACL_A_ARCADE_UTILITIES'			=> 'Kan hulpprogramma’s gebruiken',
	'ACL_A_ARCADE_VIEWLOGS'				=> 'Kan logs bekijken',
	'ACL_A_CAUTH'						=> 'Kan toestemmingsklasse wijzigen',
	'ACL_CAT_ARCADE'					=> 'Arcade',
	'ACL_C_COMMENT'						=> 'Kan opmerkingen indienen',
	'ACL_C_DOWNLOAD'					=> 'Kan spellen downloaden',
	'ACL_C_DOWNLOADFREE'				=> 'Kan gratis spellen downloaden',
	'ACL_C_IGNORECONTROL'				=> 'Kan spelcontrole negeren',
	'ACL_C_IGNOREFLOOD_DOWNLOAD'		=> 'Kan download flood limiet negeren',
	'ACL_C_IGNOREFLOOD_PLAY'			=> 'Kan flood limiet negeren',
	'ACL_C_LIST'						=> 'Kan categorie weergeven',
	'ACL_C_PLAY'						=> 'Kan spellen spelen',
	'ACL_C_PLAYFREE'					=> 'Kan gratis spellen spelen',
	'ACL_C_RATE'						=> 'Kan spellen beoordelen',
	'ACL_C_REPORT'						=> 'Kan spellen rapporteren',
	'ACL_C_RE_RATE'						=> 'Kan eigen beoordelingen wijzigen',
	'ACL_C_SCORE'						=> 'Kan scores indienen. <em>Alleen voor geregistreerde gebruikers.</em>',
	'ACL_C_VIEW'						=> 'Kan categorie bekijken',
	'ACL_M_ARCADE_CHANGE_GAMENAME'		=> 'Kan spelnaam wijzigen',
	'ACL_M_ARCADE_CLEARLOGS'			=> 'Kan logs wissen',
	'ACL_M_ARCADE_GAME'					=> 'Kan spellen bewerken',
	'ACL_M_ARCADE_RESET_GAME'			=> 'Kan spellen resetten',
	'ACL_M_ARCADE_TOUR'					=> 'Kan toernooien aanmaken/bewerken',
	'ACL_M_ARCADE_TOUR_REWARD'			=> 'Kan beloningen toevoegen aan nieuwe toernooien',
	'ACL_M_ARCADE_VIEWLOGS'				=> 'Kan logs bekijken',
	'ACL_TYPE_C_'						=> 'Categorie permissies',
	'ACL_U_ARCADE'						=> 'Kan de arcade gebruiken',
	'ACL_U_ARCADE_CHALLENGE'			=> 'Kan de uitdaging gebruiken',
	'ACL_U_ARCADE_DOWNLOAD'				=> 'Kan spellen downloaden',
	'ACL_U_ARCADE_FAVORITES'			=> 'Kan favoriete spellen toevoegen/verwijderen',
	'ACL_U_ARCADE_IGNOREFLOOD_SEARCH'	=> 'Kan zoek flood limiet negeren',
	'ACL_U_ARCADE_PM'					=> 'Kan een privébericht krijgen bij verlies van een trofee',
	'ACL_U_ARCADE_POPUP'				=> 'Kan spellen spelen in een nieuw venster',
	'ACL_U_ARCADE_SEARCH'				=> 'Kan de spellen zoekfunctie gebruiken',
	'ACL_U_ARCADE_TOUR'					=> 'Kan het toernooi gebruiken',
	'ACL_U_ARCADE_VIEWSTATS'			=> 'Kan pagina met statistieken bekijken',
	'ACL_U_ARCADE_VIEW_WHOISPLAYING'	=> 'Kan zien wie een spel speelt'
]);
