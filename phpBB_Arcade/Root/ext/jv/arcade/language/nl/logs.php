<?php
/**
*
* @package phpBB Arcade
* @version $Id: logs.php 176 2024-01-14 14:23:01Z Alexia1964 $
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
// All language files should use UTF-8 as their encoding en the files must not contain a BOM.
//
// Placeholders can now contain order invoormation, e.g. instead of
// 'Page %s of %s' you can (en should) write 'Page %1$s of %2$s', this allows
// translanaarrs naar re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used naar wrap text
// in a url you again do not need naar specify an order e.g., 'Click %sHERE%s' is fine
// Some characters you may want naar copy&paste: ‚ ‘ ’ « » „ “ ” …

//Arcade
$lang = array_merge($lang, [
	'ARCADE_SCORE_ERR_GAME_HACK'					=> 'Spelhack detectie',
	'ARCADE_SCORE_ERR_GG'							=> 'onjuiste spelcode ontvangen',
	'ARCADE_SCORE_ERR_GG_RANDCHAR'					=> 'spelcode niet ontvangen',
	'ARCADE_SCORE_ERR_GS'							=> 'onjuiste resultaatcode ontvangen',
	'ARCADE_SCORE_ERR_GS_GG_RANDCHAR'				=> 'resultaat en spelcode niet ontvangen',
	'ARCADE_SCORE_ERR_GS_RANDCHAR'					=> 'resultaatcode niet ontvangen',
	'ARCADE_SCORE_ERR_GS_VARIABLE'					=> 'geen score variabele ontvangen',
	'ARCADE_SCORE_ERR_MICRO_TIME'					=> 'controletijd overschreden',
	'ARCADE_SCORE_ERR_PCH'							=> 'onjuiste resultaat variabele code ontvangen',
	'ARCADE_SCORE_ERR_SAVE_TYPE'					=> 'Het ingestelde opslagtype is niet gebruikt',
	'ARCADE_SCORE_ERR_SEC_SESS'						=> 'Onjuiste beveiligings sessie ontvangen',

	'LOG_ACL_ADD_CATEGORY_LOCAL_C_'					=> '<strong>Categorie permissies toegevoegd of gewijzigd</strong> van %1$s<br>» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_C_'					=> '<strong>Groep categorie permissies toegevoegd of gewijzigd</strong> van %1$s<br>» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_C_'						=> '<strong>Gebruikers categorie permissies toegevoegd of gewijzigd</strong> van %1$s<br>» %2$s',
	'LOG_ACL_ARCADE_RESTORE_PERMISSIONS'			=> '<strong>Eigen permissies herstelt na het gebruiken van de permissies van</strong><br>» %s',
	'LOG_ACL_ARCADE_TRANSFER_PERMISSIONS'			=> '<strong>Permissies overgenomen van</strong><br>» %s',
	'LOG_ACL_DEL_CATEGORY_LOCAL_C_'					=> '<strong>Gebruiker/groep categorie permissies verwijderd</strong> van %1$s<br>» %2$s',
	'LOG_ARCADE_ACTIVATION_SETTINGS'				=> '<strong>Gewijzigde activeringsinstellingen</strong>',
	'LOG_ARCADE_ADD_CAT'							=> '<strong>Nieuwe categorie aangemaakt</strong><br>» %s',
	'LOG_ARCADE_ADD_GAME'							=> [
		1											=> '<strong>Installeer het spel in de %s categorie.</strong><br>» %s',
		2											=> '<strong>Installeer de spellen in de %s categorie.</strong><br>» %s',
	],
	'LOG_ARCADE_ALL_ANNOUNCE_RESTORE_DEFAULT_DATA'	=> '<strong>Alle standaard gegevensmededelingen hersteld</strong>',
	'LOG_ARCADE_ANNOUNCE_CREATE_DB_DATA'			=> '<strong>“%s” maakt een bericht aan in de database</strong><br>» Taal: %s',
	'LOG_ARCADE_ANNOUNCE_GENERAL_SETTINGS'			=> '<strong>Algemene instellingen mededelingen gewijzigd</strong>',
	'LOG_ARCADE_ANNOUNCE_RESET'						=> '<strong>Aankondigingsforum resetten</strong><br>» %s',
	'LOG_ARCADE_ARCADE_PM'							=> '<strong>Arcade privébericht gewijzigd</strong><br>» Taal: %s',
	'LOG_ARCADE_ARCADE_SUPER_CHAMPION_PM'			=> '<strong>Privébericht “superkampioen titel verloren” gewijzigd</strong><br>» Taal: %s',
	'LOG_ARCADE_AUTO_ACTIVATION'					=> '<strong>Automatische activering voor gratis sleutel</strong>',
	'LOG_ARCADE_AUTO_RESET_SCORE'					=> '<strong>Reset automatisch scores</strong>',
	'LOG_ARCADE_AUTO_RESET_SCORE_RP'				=> '<strong>Reset automatisch scores door het aantal keren spelen te behouden</strong>',
	'LOG_ARCADE_AUTO_RESET_SCORE_SETTINGS'			=> '<strong>Wijzigde de automatische scorereset instellingen</strong>',
	'LOG_ARCADE_AUTO_RESET_SCORE_SS'				=> '<strong>Reset automatisch scores en superkampioenen</strong>',
	'LOG_ARCADE_AUTO_RESET_SCORE_SS_RP'				=> '<strong>Reset automatisch scores en superkampioenen door het aantal keren spelen te behouden</strong>',
	'LOG_ARCADE_BACKUP_CAT'							=> [
		1											=> '<strong>Geback-upte categorie</strong><br>» %s',
		2											=> '<strong>Geback-upte categorieen</strong><br>» %s',
	],
	'LOG_ARCADE_BACKUP_EMPTY'						=> '<strong>Ledigde back-upmap</strong>',
	'LOG_ARCADE_CATEGORY_COPIED_PERMISSIONS'		=> '<strong>Kopieerde categorie permissies</strong> van %1$s<br>» %2$s',
	'LOG_ARCADE_CAT_EDIT'							=> '<strong>Bewerkte categorie details</strong><br>» %s',
	'LOG_ARCADE_CHALLENGE'							=> '<strong>Wijzigde uitdaging instellingen</strong>',
	'LOG_ARCADE_CHALLENGE_ACCEPT_PM'				=> '<strong>Wijzigde privébericht uitdaging “geaccepteerd”</strong><br>» Taal: %s',
	'LOG_ARCADE_CHALLENGE_FINAL_LOSER_PM'			=> '<strong>Wijzigde privebericht uitdaging “eindresultaat/verliezer”</strong><br>» Taal: %s',
	'LOG_ARCADE_CHALLENGE_FINAL_TIE_PM'				=> '<strong>Wijzigde privebericht uitdaging “eindresultaat/gelijk spel”</strong><br>» Taal: %s',
	'LOG_ARCADE_CHALLENGE_FINAL_WINNER_PM'			=> '<strong>Wijzigde privebericht uitdaging “eindresultaat”</strong><br>» Taal: %s',
	'LOG_ARCADE_CHALLENGE_PM'						=> '<strong>Wijzigde privebericht uitdaging </strong><br>» Taal: %s',
	'LOG_ARCADE_CHALLENGE_REJECT_PM'				=> '<strong>Wijzigde privebericht uitdaging “afgewezen”</strong><br>» Taal: %s',
	'LOG_ARCADE_CHALLENGE_REPORT_GAME_PM'			=> '<strong>Wijzigde privebericht uitdaging “fout spelrapport”</strong><br>» Taal: %s',
	'LOG_ARCADE_CHALLENGE_WITHDRAW_PM'				=> '<strong>Wijzigde privebericht uitdaging “ingetrokken”</strong><br>» Taal: %s',
	'LOG_ARCADE_CHAMPIONS_GAME_ANNOUNCE'			=> '<strong>Wijzigde topspelers aankondiging</strong><br>» Taal: %s',
	'LOG_ARCADE_CLEAR_ADMIN_LOG'					=> '<strong>Wiste beheerderslog</strong>',
	'LOG_ARCADE_CLEAR_ALL_USERS_BANNED'				=> '<strong>Ontbande alle gebruikers</strong>',
	'LOG_ARCADE_CLEAR_CRITICAL_LOG'					=> '<strong>Wiste foutenlog</strong>',
	'LOG_ARCADE_CLEAR_MOD_LOG'						=> '<strong>Wiste moderatorlog</strong>',
	'LOG_ARCADE_CLEAR_REPORTS'						=> '<strong>Wiste foutrapporten</strong>',
	'LOG_ARCADE_CLEAR_USERS_BANNED'					=> '<strong>Ontbande gebruikers</strong><br>» %s',
	'LOG_ARCADE_CLEAR_USERS_LOG'					=> '<strong>Wiste gebruikerslog</strong>',
	'LOG_ARCADE_CLEAR_USER_BANNED'					=> '<strong>Ontbande gebruiker</strong><br>» %s',
	'LOG_ARCADE_CREATE_INSTALL_FILE'				=> '<strong>Maakte spel installatiebestand</strong><br>» %s',
	'LOG_ARCADE_DELETE_GAME'						=> [
		1											=> '<strong>Verwijderde spel</strong><br>» %s',
		2											=> '<strong>Verwijderde spellen</strong><br>» %s',
	],
	'LOG_ARCADE_DELETE_GAME_FILES'					=> [
		1											=> '<strong>Verwijderde bestanden van het spel</strong><br>» %s',
		2											=> '<strong>Verwijderde bestanden van de spellen</strong><br>» %s',
	],
	'LOG_ARCADE_DELETE_SCORE'						=> '<strong>Verwijderde spelscore voor gebruiker: %3$s%1$s%2$s</strong><br>» %4$s',
	'LOG_ARCADE_DELETE_SUPER_CHAMPION_SCORE'		=> '<strong>Verwijderde super hoogste score voor gebruiker: %s</strong><br>» Spel: %s',
	'LOG_ARCADE_DEL_CAT'							=> '<strong>Verwijderde categorie</strong><br>» %s',
	'LOG_ARCADE_DEL_CATS'							=> '<strong>Verwijderde categorie en zijn subcategorieen</strong><br>» %s',
	'LOG_ARCADE_DEL_DELETED_GAMES'					=> '<strong>Verwijderde lijst van verwijderde spellen.</strong>',
	'LOG_ARCADE_DEL_GAMES'							=> '<strong>Verwijderde categorie en zijn spellen</strong><br>» %s',
	'LOG_ARCADE_DEL_GAMES_CATS'						=> '<strong>Verwijderde categorie en zijn spellen en subcategorieen</strong><br>» %s',
	'LOG_ARCADE_DEL_GAMES_MOVE_CATS'				=> '<strong>Verwijderde categorie en zijn spellen, verplaatste subcategorieen</strong> naar %1$s<br>» %2$s',
	'LOG_ARCADE_DEL_MOVE_CATS'						=> '<strong>Verwijderde categorie en verplaatste subcategories</strong> naar %1$s<br>» %2$s',
	'LOG_ARCADE_DEL_MOVE_GAMES'						=> '<strong>Verwijderde categorie en verplaatste spellen</strong> naar %1$s<br>» %2$s',
	'LOG_ARCADE_DEL_MOVE_GAMES_CATS'				=> '<strong>Verwijderde categorie en zijn subcategories, verplaatste spellen</strong> naar %1$s<br>» %2$s',
	'LOG_ARCADE_DEL_MOVE_GAMES_MOVE_CATS'			=> '<strong>Verwijderde categorie, verplaatste spellen</strong> naar %1$s <strong>en subcategoriess</strong> naar %2$s<br>» %3$s',
	'LOG_ARCADE_EDIT_GAME'							=> '<strong>Wijzigde spelinstellingen</strong><br>» %s',
	'LOG_ARCADE_EDIT_GAME_RESET_INSTALL_DATE'		=> '<strong>Bewerkte spel en installatiedatum gereset</strong><br>» %s',
	'LOG_ARCADE_EDIT_SCORE'							=> '<strong>Wijzigde spelscore data voor gebruiker: %1$s</strong><br>» %2$s',
	'LOG_ARCADE_ERROR_GAME_FILE_MISSING'			=> '<strong>Het spel “%s” heeft ontbrekende bestanden of extra bestanden</strong><br>» %s',
	'LOG_ARCADE_ERROR_PLAYING_TIME'					=> '<strong>Het spel “%s” heeft een score ingediend zonder speeltijd</strong><br>» Score: %s',
	'LOG_ARCADE_EXT_SETTINGS'						=> '<strong>Wijzigde extensies instellingen</strong>',
	'LOG_ARCADE_FEATURE'							=> '<strong>Wijzigde functie instellingen</strong>',
	'LOG_ARCADE_FORM_SCORE_ERROR'					=> [
		1											=> '<strong>Het spel “%s” heeft een onjuist resultaatformulier verzonden</strong><br>Opslagtype: %s<br>Speeltijd: %s<br>Score: %s<br><strong>Fout:</strong> (%s)',
		2											=> '<strong>Het spel “%s” heeft een onjuist resultaatformulier verzonden</strong><br>Opslagtype: %s<br>Speeltijd: %s<br>Score: %s<br><strong>Fouten:</strong> (%s)',
	],
	'LOG_ARCADE_GAME'								=> '<strong>Wijzigde spelinstellingen</strong>',
	'LOG_ARCADE_GAME_ANNOUNCE'						=> '<strong>Wijzigde spel aankondiging</strong><br>» Taal: %s',
	'LOG_ARCADE_GAME_ANNOUNCE_SYNC'					=> '<strong>Hersynchroniseerde spel aankondigingen</strong>',
	'LOG_ARCADE_GAME_DATA_EMPTY_ERROR'				=> '<strong>Het spel “%s” heeft geen arcadegid of enscore code verzonden. Het spel is beschadigd.</strong><br>» Speeltijd: %s<br>» Score: %s',
	'LOG_ARCADE_GAME_FILE_NOT_FOUND'				=> '<strong>Een bestand van spel “%s” kan niet gevonden worden</strong><br>» Bestand: %s',
	'LOG_ARCADE_GAME_INHERIT_FILE_NOT_FOUND'		=> '<strong>Het geërfde spelbestand van spel “%s” kan niet gevonden worden</strong><br>» Overgenomen bestand: %s',
	'LOG_ARCADE_GAME_INH_MAIN_UPDATE'				=> '<strong>Gegevens van het hoofdspel en %d geërfde spellen bijgewerkt</strong><br>» Gestart spel: %s',
	'LOG_ARCADE_GAME_INH_UPDATE'					=> '<strong>De gegevens van %d geërfde spellen bijgewerkt</strong><br>» Gestart spel: %s',
	'LOG_ARCADE_GAME_INSTALL_FILE_NOT_FOUND'		=> '<strong>Het spel installatiebestand van spel “%s” kan niet gevonden worden</strong><br>» Bestand: %s',
	'LOG_ARCADE_GAME_INSTALL_FILE_UNWRITABLE'		=> '<strong>Het spel installatiebestand van spel “%s” is niet beschrijfbaar</strong><br>» Bestand: %s',
	'LOG_ARCADE_GAME_NOT_DETECT_FILESIZE'			=> '<strong>Niet mogelijk om de grootte van de spelbestanden te bepalen</strong><br>» %s',
	'LOG_ARCADE_GAME_SAME_DESC_UPDATE'				=> '<strong>Update %d identieke spelbeschrijvingen</strong><br>» Gestart spel: %s',
	'LOG_ARCADE_GLOBAL_ANNOUNCE'					=> '<strong>Wijzigde algemene aankondiging</strong><br>» Taal: %s',
	'LOG_ARCADE_GROUP_TOURNAMENT'					=> '<strong>Gewijzigde groep toernooi instellingen</strong>',
	'LOG_ARCADE_GROUP_TOUR_ANNOUNCE'				=> '<strong>Gewijzigde aankondiging groep toernooi</strong><br>» Taal: %s',
	'LOG_ARCADE_GROUP_TOUR_ANNOUNCE_SYNC'			=> '<strong>Hersynchroniseren van groep toernooi aankondigingen</strong>',
	'LOG_ARCADE_GROUP_TOUR_CREATE'					=> '<strong>Groep toernooi gemaakt</strong><br>» %s',
	'LOG_ARCADE_GROUP_TOUR_DELETE'					=> '<strong>Groep toernooi geschrapt</strong><br>» %s',
	'LOG_ARCADE_GROUP_TOUR_EDIT'					=> '<strong>Groep toernooi bewerkt</strong><br>» %s',
	'LOG_ARCADE_GROUP_TOUR_END_ANNOUNCE'			=> '<strong>Gewijzigde aankondiging einde groep toernooi</strong><br>» Taal: %s',
	'LOG_ARCADE_GUEST_DEFAULT_SETTINGS'				=> '<strong>Wijzigde de standaardinstellingen van de gastgebruiker</strong>',
	'LOG_ARCADE_G_MOVE_DOWN'						=> '<strong>Spelvolgorde verplaatst</strong> %s <strong>naar omlaag</strong>',
	'LOG_ARCADE_G_MOVE_UP'							=> '<strong>Spelvolgorde verplaatst</strong> %s <strong>naar omhoog</strong>',
	'LOG_ARCADE_LOAD'								=> '<strong>Laadde instellingen</strong>',
	'LOG_ARCADE_MEMBERS_DEFAULT_SETTINGS'			=> '<strong>Wijzigde standaardinstellingen van de leden</strong>',
	'LOG_ARCADE_MENU_ADD'							=> '<strong>Menu toegevoegd</strong><br>» %s',
	'LOG_ARCADE_MENU_DELETE'						=> [
		1											=> '<strong>Verwijderde menu</strong><br>» %s',
		2											=> '<strong>Verwijderde menu met zijn submenus</strong><br>» %s',
	],
	'LOG_ARCADE_MENU_EDIT'							=> '<strong>Bewerkte menu</strong><br>» %s',
	'LOG_ARCADE_MENU_MOVE_DOWN'						=> '<strong>Verplaatste menu</strong> %1$s <strong>onder</strong> %2$s',
	'LOG_ARCADE_MENU_MOVE_UP'						=> '<strong>Verplaatste menu</strong> %1$s <strong>boven</strong> %2$s',
	'LOG_ARCADE_MOVE_DOWN'							=> '<strong>Verplaatste categorie</strong> %1$s <strong>onder</strong> %2$s',
	'LOG_ARCADE_MOVE_GAME'							=> [
		1											=> '<strong>Verplaatste spel van categorie %1$s naar nieuwe categorie %2$s</strong><br>» %3$s',
		2											=> '<strong>Verplaatste spellen van categorie %1$s naar nieuwe categorie %2$s</strong><br>» %3$s',
	],
	'LOG_ARCADE_MOVE_UP'							=> '<strong>Verplaatste categorie</strong> %1$s <strong>boven</strong> %2$s',
	'LOG_ARCADE_PAAR'								=> '<strong>Wijzigde phpBB Arcade - activiteitenrang</strong>',
	'LOG_ARCADE_PAGE'								=> '<strong>Wijzigde Pagina instellingen</strong>',
	'LOG_ARCADE_PATH'								=> '<strong>Wijzigde padinstellingen</strong>',
	'LOG_ARCADE_PURGE_SESSIONS'						=> '<strong>Ledigde spelsessies</strong>',
	'LOG_ARCADE_REPORT_GAME_ANNOUNCE'				=> '<strong>Wijzigde spelrapport aankondiging</strong><br>» Taal: %s',
	'LOG_ARCADE_RESET_ARCADE'						=> '<strong>Arcade gereset</strong>%s%s',
	'LOG_ARCADE_RESET_CHALLENGE'					=> '<strong>Uitdaging gereset</strong>',
	'LOG_ARCADE_RESET_COMMENT'						=> '<strong>Spel commentaren gereset</strong>',
	'LOG_ARCADE_RESET_DOWNLOADS'					=> '<strong>Download statistieken gereset</strong>',
	'LOG_ARCADE_RESET_GAME'							=> [
		1											=> '<strong>Reset spel data%s%s%s%s</strong><br>» %s',
		2											=> '<strong>Reset spellen data%s%s%s%s</strong><br>» %s',
	],
	'LOG_ARCADE_RESET_GAMES_REC'					=> '<strong>Reset spelverwijzing</strong>',
	'LOG_ARCADE_RESET_GAME_SCORES'					=> [
		1											=> '<strong>Reset spel scores%s%s</strong><br>» %s',
		2											=> '<strong>Reset spellen scores%s%s</strong><br>» %s',
	],
	'LOG_ARCADE_RESET_GROUP_TOURNAMENT'				=> '<strong>Reset groep toernooi</strong>',
	'LOG_ARCADE_RESET_INSTALL_DATE_GAME'			=> [
		1											=> '<strong>Reset de installatiedatum van spel</strong><br>» %s',
		2											=> '<strong>Reset installatiedatums van de spellen</strong><br>» %s',
	],
	'LOG_ARCADE_RESET_JACKPOT'						=> '<strong>Jackpot data gereset</strong>',
	'LOG_ARCADE_RESET_MENU'							=> '<strong>Herstel menustructuur</strong>',
	'LOG_ARCADE_RESET_PLAYING_RECORD'				=> '<strong>Meest spelende gebruikersteller gereset</strong>',
	'LOG_ARCADE_RESET_POINTS'						=> '<strong>Puntendata gereset</strong>',
	'LOG_ARCADE_RESET_SCORES_ALL'					=> '<strong>Verwijder alle gebruikers scores</strong>',
	'LOG_ARCADE_RESET_SUPER_CHAMPION'				=> '<strong>Reset superkampioen</strong>',
	'LOG_ARCADE_RESET_TOURNAMENT'					=> '<strong>Reset toernooi</strong>',
	'LOG_ARCADE_RESET_USERS_DATA'					=> '<strong>Alle gebruikersdata gereset</strong>',
	'LOG_ARCADE_RESET_USERS_SCORE'					=> '<strong>Alle scores gereset</strong>',
	'LOG_ARCADE_RESET_USERS_SETTINGS'				=> '<strong>Spelers instellingen gereset</strong>',
	'LOG_ARCADE_RESET_USER_ALL'						=> '<strong>Verwijder alle gebruikers gegevens</strong><br>» %s',
	'LOG_ARCADE_RESET_USER_SCORES'					=> '<strong>Reset scores%s%s</strong><br>» %s',
	'LOG_ARCADE_RESET_USER_SUPER_RECORDS'			=> '<strong>Verwijder super hoogste scores van gebruikers</strong><br>» %s',
	'LOG_ARCADE_RESTORE_DEFAULT_DATA_ANNOUNCE'		=> '<strong>Standaardgegevens van aankondiging gereset</strong><br>» %s',
	'LOG_ARCADE_RESTORE_DEFAULT_DATA_PM'			=> '<strong>Standaardgegevens privéberichten hersteld</strong><br>» %s',
	'LOG_ARCADE_RESYNC_TOTALS_DATA'					=> '<strong>Synchroniseer totale arcade gegevens opnieuw</strong>',
	'LOG_ARCADE_RESYNC_USERS_TOTAL_DATA'			=> '<strong>Synchroniseer gebruikers gegevens opnieuw</strong>',
	'LOG_ARCADE_SETTINGS'							=> '<strong>Algemene instellingen aangepast</strong>',
	'LOG_ARCADE_SYNC_CAT'							=> '<strong>Categorie gehersynchroniseerd</strong><br>» %s',
	'LOG_ARCADE_SYNC_GAME'							=> [
		1											=> '<strong>Hersynchronisatie spel</strong><br>» %s',
		2											=> '<strong>Hersynchronisatie spellen</strong><br>» %s',
	],
	'LOG_ARCADE_SYSTEM'								=> '<strong>Wijzigde systeeminstellingen</strong>',
	'LOG_ARCADE_TOURNAMENT'							=> '<strong>Wijzigde toernooi instellingen</strong>',
	'LOG_ARCADE_TOUR_ANNOUNCE'						=> '<strong>Wijzigde toernooi mededeling</strong><br>» Taal: %s',
	'LOG_ARCADE_TOUR_ANNOUNCE_SYNC'					=> '<strong>Hersynchroniseren van toernooi aankondigingen</strong>',
	'LOG_ARCADE_TOUR_CREATE'						=> '<strong>Toernooi aangemaakt</strong><br>» %s',
	'LOG_ARCADE_TOUR_DELETE'						=> '<strong>Toernooi verwijderd</strong><br>» %s',
	'LOG_ARCADE_TOUR_EDIT'							=> '<strong>Toernooi bewerkt</strong><br>» %s',
	'LOG_ARCADE_TOUR_END_ANNOUNCE'					=> '<strong>Wijzigde toernooi einde mededeling</strong><br>» Taal: %s',
	'LOG_ARCADE_UNDEFINED_SCORE'					=> '<strong>Het spel “%s” heeft een niet gedefinieerde score verzonden</strong>',
	'LOG_ARCADE_UNPACK_GAME'						=> [
		1											=> '<strong>Uitgepakt spel</strong><br>» %s',
		2											=> '<strong>Uitgepakte spellen</strong><br>» %s',
	],
	'LOG_ARCADE_UPLOAD_GAME'						=> [
		1											=> '<strong>Upload spel</strong><br>» %s',
		2											=> '<strong>Upload spellen</strong><br>» %s',
	],
	'LOG_ARCADE_USER_BANNED'						=> '<strong>Gebande gebruiker</strong><br>» %s',
	'LOG_ARCADE_USER_DELETE_FAVORITE'				=> [
		1											=> '<strong>Verwijderde favoriete spel</strong><br>» %s',
		2											=> '<strong>Verwijderde favoriete spellen</strong><br>» %s',
	],
	'LOG_ARCADE_USER_GAME_SETTINGS'					=> '<strong>Wijzigde spelinstellingen</strong>',
	'LOG_ARCADE_USER_HIGHLIGHT_FAVORITE'			=> [
		1											=> '<strong>Markeer je favoriete spel</strong><br>» %s',
		2											=> '<strong>Markeer je favoriete spellen</strong><br>» %s',
	],
	'LOG_ARCADE_USER_MAIN_SETTINGS'					=> '<strong>Wijzigde hoofdinstellingen</strong>',
	'LOG_ARCADE_USER_POST_SETTINGS'					=> '<strong>Wijzigde berichtinstellingen</strong>',
	'LOG_ARCADE_USER_REMOVE_HIGHLIGHT_FAVORITE'		=> [
		1											=> '<strong>Verwijder markering van favoriete spel</strong><br>» %s',
		2											=> '<strong>Verwijder markeringen van favoriete spellen</strong><br>» %s',
	],
	'LOG_ARCADE_USER_SET_UPDATE'					=> '<strong>Gebruikersdetails ge-update</strong><br>» %s',
	'LOG_ARCADE_VERSION_CHECK_DISABLED'				=> '<strong>Automatische versiecontrole uitgezet</strong>',
	'LOG_ARCADE_VERSION_CHECK_ENABLED'				=> '<strong>Automatische versiecontrole aangezet</strong>',
	'LOG_C_ROLE_ADD'								=> '<strong>Categorierol toegevoegd</strong><br>» %s',
	'LOG_C_ROLE_EDIT'								=> '<strong>Categorierol bewerkt</strong><br>» %s',
	'LOG_C_ROLE_REMOVED'							=> '<strong>Categorierol verplaatst</strong><br>» %s',
]);
