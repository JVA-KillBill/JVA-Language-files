<?php
/**
*
* @package phpBB Arcade
* @version $Id: logs.php 2450 2021-12-13 20:24:43Z KillBill $
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

//Arcade
$lang = array_merge($lang, [
	'ARCADE_SCORE_ERR_GAME_HACK'					=> 'Játék hackelésének érzékelése',
	'ARCADE_SCORE_ERR_GG'							=> 'helytelen játék kód érkezett',
	'ARCADE_SCORE_ERR_GG_RANDCHAR'					=> 'játék kód nem érkezett',
	'ARCADE_SCORE_ERR_GS'							=> 'helytelen eredmény kód érkezett',
	'ARCADE_SCORE_ERR_GS_GG_RANDCHAR'				=> 'eredmény, játék kód nem érkezett',
	'ARCADE_SCORE_ERR_GS_RANDCHAR'					=> 'eredmény kód nem érkezett',
	'ARCADE_SCORE_ERR_GS_VARIABLE'					=> 'eredmény változó nem érkezett',
	'ARCADE_SCORE_ERR_MICRO_TIME'					=> 'túllépte az ellenőrzési időt',
	'ARCADE_SCORE_ERR_PCH'							=> 'helytelen eredmény változó kód érkezett',
	'ARCADE_SCORE_ERR_SAVE_TYPE'					=> 'Nem a beállított mentési típus lett használva',
	'ARCADE_SCORE_ERR_SEC_SESS'						=> 'Helytelen biztonsági munkamenet érkezett',

	'LOG_ACL_ADD_CATEGORY_LOCAL_C_'					=> '<strong>Kategória jogosultság szerkesztése</strong> Kategória=(%1$s)<br>» Megváltoztatott jog=(%2$s)',
	'LOG_ACL_ADD_GROUP_LOCAL_C_'					=> '<strong>Csoport jogosultság szerkesztése</strong> Kategória=(%1$s)<br>» Megváltoztatott jog=(%2$s)',
	'LOG_ACL_ADD_USER_LOCAL_C_'						=> '<strong>Felhasználói jogosultság szerkesztése</strong> Kategória=(%1$s)<br>» Megváltoztatott jog=(%2$s)',
	'LOG_ACL_ARCADE_RESTORE_PERMISSIONS'			=> '<strong>Saját jogosultság helyreállítása, miután más jogosultságát használta</strong><br>» %s',
	'LOG_ACL_ARCADE_TRANSFER_PERMISSIONS'			=> '<strong>Jogosultság átvétele</strong><br>» %s',
	'LOG_ACL_DEL_CATEGORY_LOCAL_C_'					=> '<strong>Felhasználó/csoport kategória jogosultság eltávolítása</strong> innen: %1$s<br>» %2$s',
	'LOG_ARCADE_ADD_CAT'							=> '<strong>Új kategória létrehozása</strong><br>» Új kategória neve:(%s)',
	'LOG_ARCADE_ADD_GAME'							=> [
		1											=> '<strong>Játék telepítése a(z) %s kategóriába</strong><br>» %s',
		2											=> '<strong>Játékok telepítése a(z) %s kategóriába</strong><br>» %s',
	],
	'LOG_ARCADE_ALL_ANNOUNCE_RESTORE_DEFAULT_DATA'	=> '<strong>Összes közlemény adatai, alaphelyzetbe állítása</strong>',
	'LOG_ARCADE_ANNOUNCE_CREATE_DB_DATA'			=> '<strong>„%s” üzenet létrehozása az adatbázisba</strong><br>» Nyelv: %s',
	'LOG_ARCADE_ANNOUNCE_GENERAL_SETTINGS'			=> '<strong>Közlemény elsődleges beállítások szerkesztése</strong>',
	'LOG_ARCADE_ANNOUNCE_RESET'						=> '<strong>Közlemény fórum kiürítése</strong><br>» %s',
	'LOG_ARCADE_ARCADE_PM'							=> '<strong>Játéktermi privát üzenet szerkesztése</strong><br>» Nyelv: %s',
	'LOG_ARCADE_ARCADE_SUPER_CHAMPION_PM'			=> '<strong>„Szuperbajnoki cím elvesztése” privát üzenet szerkesztése</strong><br>» Nyelv: %s',
	'LOG_ARCADE_AUTO_RESET_SCORE'					=> '<strong>Eredmények automatikus visszaállítása</strong>',
	'LOG_ARCADE_AUTO_RESET_SCORE_RP'				=> '<strong>Eredmények automatikus visszaállítása a játszások számának megtartásával</strong>',
	'LOG_ARCADE_AUTO_RESET_SCORE_SETTINGS'			=> '<strong>Eredmények automatikus visszaállítás beállítások szerkesztése</strong>',
	'LOG_ARCADE_AUTO_RESET_SCORE_SS'				=> '<strong>Eredmények és a szuperbajnokok automatikus visszaállítása</strong>',
	'LOG_ARCADE_AUTO_RESET_SCORE_SS_RP'				=> '<strong>Eredmények és a szuperbajnokok automatikus visszaállítása a játszások számának megtartásával</strong>',
	'LOG_ARCADE_BACKUP_CAT'							=> [
		1											=> '<strong>Biztonsági mentés</strong><br>» Kategória: %s',
		2											=> '<strong>Biztonsági mentés</strong><br>» Kategóriák: %s',
	],
	'LOG_ARCADE_BACKUP_EMPTY'						=> '<strong>Biztonsági könyvtár kiürítése</strong>',
	'LOG_ARCADE_CATEGORY_COPIED_PERMISSIONS'		=> '<strong>Kategória jogosultság másolása</strong> honnan %1$s<br>» %2$s',
	'LOG_ARCADE_CAT_EDIT'							=> '<strong>Kategória szerkesztése</strong><br>» %s',
	'LOG_ARCADE_CHALLENGE'							=> '<strong>Kihívás beállítások szerkesztése</strong>',
	'LOG_ARCADE_CHALLENGE_ACCEPT_PM'				=> '<strong>Kihívás „elfogadása” privát üzenet szerkesztése</strong><br>» Nyelv: %s',
	'LOG_ARCADE_CHALLENGE_FINAL_LOSER_PM'			=> '<strong>Kihívás „vége/vesztes” privát üzenet szerkesztése</strong><br>» Nyelv: %s',
	'LOG_ARCADE_CHALLENGE_FINAL_TIE_PM'				=> '<strong>Kihívás „vége/döntetlen” privát üzenet szerkesztése</strong><br>» Nyelv: %s',
	'LOG_ARCADE_CHALLENGE_FINAL_WINNER_PM'			=> '<strong>Kihívás „vége/nyertes” privát üzenet szerkesztése</strong><br>» Nyelv: %s',
	'LOG_ARCADE_CHALLENGE_PM'						=> '<strong>Kihívás privát üzenet szerkesztése</strong><br>» Nyelv: %s',
	'LOG_ARCADE_CHALLENGE_REJECT_PM'				=> '<strong>Kihívás „visszautasítása” privát üzenet szerkesztése</strong><br>» Nyelv: %s',
	'LOG_ARCADE_CHALLENGE_REPORT_GAME_PM'			=> '<strong>Kihívás „hibás játék jelentése” privát üzenet szerkesztése</strong><br>» Nyelv: %s',
	'LOG_ARCADE_CHALLENGE_WITHDRAW_PM'				=> '<strong>Kihívás „visszavonása” privát üzenet szerkesztése</strong><br>» Nyelv: %s',
	'LOG_ARCADE_CHAMPIONS_GAME_ANNOUNCE'			=> '<strong>Top játékos közlemény szerkesztése</strong><br>» Nyelv: %s',
	'LOG_ARCADE_CLEAR_ADMIN_LOG'					=> '<strong>Adminisztrátori napló kiürítése</strong>',
	'LOG_ARCADE_CLEAR_ALL_USERS_BANNED'				=> '<strong>Összes felhasználó kitiltásának feloldása</strong>',
	'LOG_ARCADE_CLEAR_CRITICAL_LOG'					=> '<strong>Hibanapló kiürítése</strong>',
	'LOG_ARCADE_CLEAR_MOD_LOG'						=> '<strong>Moderátori napló kiürítése</strong>',
	'LOG_ARCADE_CLEAR_REPORTS'						=> '<strong>Hibabejelentések törlése</strong>',
	'LOG_ARCADE_CLEAR_USERS_BANNED'					=> '<strong>Felhasználók kitiltásának feloldása</strong><br>» %s',
	'LOG_ARCADE_CLEAR_USERS_LOG'					=> '<strong>Felhasználói napló kiürítése</strong>',
	'LOG_ARCADE_CLEAR_USER_BANNED'					=> '<strong>Felhasználó kitiltásának feloldása</strong><br>» %s',
	'LOG_ARCADE_CREATE_INSTALL_FILE'				=> '<strong>Játék telepítő fájl készítése</strong><br>» %s',
	'LOG_ARCADE_DELETE_GAME'						=> [
		1											=> '<strong>Törölt játék</strong><br>» %s',
		2											=> '<strong>Törölt játékok</strong><br>» %s',
	],
	'LOG_ARCADE_DELETE_GAME_FILES'					=> [
		1											=> '<strong>Fájlok törlése a következő játéknak</strong><br>» %s',
		2											=> '<strong>Fájlok törlése a következő játékoknak</strong><br>» %s',
	],
	'LOG_ARCADE_DELETE_SCORE'						=> '<strong>Játékpont törlése, felhasználó: (%3$s)%1$s%2$s</strong><br>» (%4$s)',
	'LOG_ARCADE_DELETE_SUPER_CHAMPION_SCORE'		=> '<strong>%s felhasználó szuperbajnok eredmény törlése</strong><br>» Játék: %s',
	'LOG_ARCADE_DEL_CAT'							=> '<strong>Kategória törlése</strong><br>» %s',
	'LOG_ARCADE_DEL_CATS'							=> '<strong>Kategória törlése az alkategóriákkal együtt</strong><br>» %s',
	'LOG_ARCADE_DEL_DELETED_GAMES'					=> '<strong>Törölt játékok listájának törlése.</strong>',
	'LOG_ARCADE_DEL_GAMES'							=> '<strong>Kategória törlése a játékokkal együtt</strong><br>» Kategória=%s',
	'LOG_ARCADE_DEL_GAMES_CATS'						=> '<strong>Kategória törlése játékokkal és alkategóriákkal együtt</strong><br>» Kategória neve:(%s)',
	'LOG_ARCADE_DEL_GAMES_MOVE_CATS'				=> '<strong>(%2$s) kategória törlése játékokkal együtt</strong><br>» Alkategóriák áthelyezve:(%1$s) kategóriába',
	'LOG_ARCADE_DEL_MOVE_CATS'						=> '<strong>Kategória törlése, alkategóriák áthelyezve</strong> (%1$s)<br>» (%2$s)',
	'LOG_ARCADE_DEL_MOVE_GAMES'						=> '<strong>(%2$s) kategóriának törlése, benne lévő játékok áthelyezve</strong><br>» Játékok új kategóriája=(%1$s)',
	'LOG_ARCADE_DEL_MOVE_GAMES_CATS'				=> '<strong>(%2$s) kategória törlése az alkategóriákkal együtt</strong><br>» játékok áthelyezése:(%1$s)-kategóriába',
	'LOG_ARCADE_DEL_MOVE_GAMES_MOVE_CATS'			=> '<strong>(%3$s) kategória törlése</strong><br>» Alkategóriák áthelyezve:(%2$s)-kategóriába<br>» Játékok áthelyezve:(%1$s)-kategóriába',
	'LOG_ARCADE_EDIT_GAME'							=> '<strong>Játék szerkesztése</strong><br>» %s',
	'LOG_ARCADE_EDIT_GAME_RESET_INSTALL_DATE'		=> '<strong>Játék szerkesztése és a telepítési dátum alaphelyzetbe állítása</strong><br>» %s',
	'LOG_ARCADE_EDIT_SCORE'							=> '<strong>%1$s felhasználó eredmény szerkesztése</strong><br>» Játék: %2$s',
	'LOG_ARCADE_ERROR_GAME_FILE_MISSING'			=> '<strong>A „%s” játéknak hiányoznak egyes fájljai vagy extra fájljai</strong><br>» %s',
	'LOG_ARCADE_ERROR_PLAYING_TIME'					=> '<strong>A „%s” játék játszási ideje elveszett</strong><br>» Elért eredmény: %s',
	'LOG_ARCADE_EXT_SETTINGS'						=> '<strong>Kiterjesztések beállításainak szerkesztése</strong>',
	'LOG_ARCADE_FEATURE'							=> '<strong>Funkció beállítások szerkesztése</strong>',
	'LOG_ARCADE_FORM_SCORE_ERROR'					=> [
		1											=> '<strong>A „%s” játék helytelen eredmény űrlapot küldött</strong><br>Mentési típus: %s<br>Játszási idő: %s<br>Eredmény: %s<br><strong>Hiba:</strong> (%s)',
		2											=> '<strong>A „%s” játék helytelen eredmény űrlapot küldött</strong><br>Mentési típus: %s<br>Játszási idő: %s<br>Eredmény: %s<br><strong>Hibák:</strong> (%s)',
	],
	'LOG_ARCADE_GAME'								=> '<strong>Játék beállítások szerkesztése</strong>',
	'LOG_ARCADE_GAME_ANNOUNCE'						=> '<strong>Játék közlemény szerkesztése</strong><br>» Nyelv: %s',
	'LOG_ARCADE_GAME_ANNOUNCE_SYNC'					=> '<strong>Játék közlemények újraszinkronizálása</strong>',
	'LOG_ARCADE_GAME_DATA_EMPTY_ERROR'				=> '<strong>A „%s” játék nem küldött (arcadegid vagy enscore) kódot, a játék valószínűleg hibás</strong><br>» Játszási idő: %s<br>» Eredmény: %s',
	'LOG_ARCADE_GAME_FILE_NOT_FOUND'				=> '<strong>A „%s” játék egyik fájlja nem található</strong><br>» Fájl: %s',
	'LOG_ARCADE_GAME_INHERIT_FILE_NOT_FOUND'		=> '<strong>A „%s” játék örökölt játék fájlja nem található</strong><br>» Örökölt fájl: %s',
	'LOG_ARCADE_GAME_INH_MAIN_UPDATE'				=> '<strong>Fő játék és %d darab örökölt játékok adatainak frissítése</strong><br>» Kezdeményezett játék: %s',
	'LOG_ARCADE_GAME_INH_UPDATE'					=> '<strong>%d darab örökölt játékok adatainak frissítése</strong><br>» Kezdeményezett játék: %s',
	'LOG_ARCADE_GAME_INSTALL_FILE_NOT_FOUND'		=> '<strong>A „%s” játék telepítő fájlja nem található</strong><br>» Fájl: %s',
	'LOG_ARCADE_GAME_INSTALL_FILE_UNWRITABLE'		=> '<strong>A „%s” játék telepítő fájlja nem írható</strong><br>» Fájl: %s',
	'LOG_ARCADE_GAME_NOT_DETECT_FILESIZE'			=> '<strong>Nem sikerült meghatározni a játék fájljainak méretét</strong><br>» %s',
	'LOG_ARCADE_GAME_SAME_DESC_UPDATE'				=> '<strong>%d darab azonos játékleírások frissítése</strong><br>» Kezdeményezett játék: %s',
	'LOG_ARCADE_GLOBAL_ANNOUNCE'					=> '<strong>Globális közlemény szerkesztése</strong><br>» Nyelv: %s',
	'LOG_ARCADE_GROUP_TOURNAMENT'					=> '<strong>Csoportverseny beállítások szerkesztése</strong>',
	'LOG_ARCADE_GROUP_TOUR_ANNOUNCE'				=> '<strong>Csoportverseny közlemény szerkesztése</strong><br>» Nyelv: %s',
	'LOG_ARCADE_GROUP_TOUR_ANNOUNCE_SYNC'			=> '<strong>Csoport verseny közlemények újraszinkronizálása</strong>',
	'LOG_ARCADE_GROUP_TOUR_CREATE'					=> '<strong>Csoportverseny létrehozása</strong><br>» %s',
	'LOG_ARCADE_GROUP_TOUR_DELETE'					=> '<strong>Csoportverseny törlése</strong><br>» %s',
	'LOG_ARCADE_GROUP_TOUR_EDIT'					=> '<strong>Csoportverseny szerkesztése</strong><br>» %s',
	'LOG_ARCADE_GROUP_TOUR_END_ANNOUNCE'			=> '<strong>Csoportverseny vége közlemény szerkesztése</strong><br>» Nyelv: %s',
	'LOG_ARCADE_GUEST_DEFAULT_SETTINGS'				=> '<strong>Vendég felhasználó alapértelmezett beállításainak szerkesztése</strong>',
	'LOG_ARCADE_G_MOVE_DOWN'						=> '%s <strong>játék mozgatása lefele</strong>',
	'LOG_ARCADE_G_MOVE_UP'							=> '%s <strong>játék mozgatása felfele</strong>',
	'LOG_ARCADE_LOAD'								=> '<strong>Terhelés beállítások szerkesztése</strong>',
	'LOG_ARCADE_MEMBERS_DEFAULT_SETTINGS'			=> '<strong>Tagok alapértelmezett beállításainak szerkesztése</strong>',
	'LOG_ARCADE_MENU_ADD'							=> '<strong>Új menű hozzáadása</strong><br>» %s',
	'LOG_ARCADE_MENU_DELETE'						=> [
		1											=> '<strong>Menü törlése</strong><br>» %s',
		2											=> '<strong>Menü törlése az almenükkel együtt</strong><br>» %s',
	],
	'LOG_ARCADE_MENU_EDIT'							=> '<strong>Menü szerkesztése</strong><br>» %s',
	'LOG_ARCADE_MENU_MOVE_DOWN'						=> '%1$s <strong>menü mozgatása lefele</strong> a %2$s menü alá',
	'LOG_ARCADE_MENU_MOVE_UP'						=> '%1$s <strong>menü mozgatása felfele</strong> a %2$s menü fölé',
	'LOG_ARCADE_MOVE_DOWN'							=> '%1$s <strong>kategória mozgatása lefele</strong> a %2$s kategória alá',
	'LOG_ARCADE_MOVE_GAME'							=> [
		1											=> '<strong>Játék áthelyezése a(z) %1$s kategóriából a(z) %2$s kategóriába</strong><br>» %3$s',
		2											=> '<strong>Játékok áthelyezése a(z) %1$s kategóriából a(z) %2$s kategóriába</strong><br>» %3$s',
	],
	'LOG_ARCADE_MOVE_UP'							=> '%1$s <strong>kategória mozgatása felfele</strong> a %2$s kategória fölé',
	'LOG_ARCADE_PAAR'								=> '<strong>phpBB Arcade - Aktivitási rang szerkesztése</strong>',
	'LOG_ARCADE_PAGE'								=> '<strong>Oldal beállítások szerkesztése</strong>',
	'LOG_ARCADE_PATH'								=> '<strong>Útvonal beállítások szerkesztése</strong>',
	'LOG_ARCADE_PURGE_SESSIONS'						=> '<strong>Játék munkamenetek kiürítése</strong>',
	'LOG_ARCADE_REPORT_GAME_ANNOUNCE'				=> '<strong>Játék hibabejelentés közlemény szerkesztése</strong><br>» Nyelv: %s',
	'LOG_ARCADE_RESET_ARCADE'						=> '<strong>Játékterem újraindítása</strong>%s%s',
	'LOG_ARCADE_RESET_CHALLENGE'					=> '<strong>Kihívások újraindítása</strong>',
	'LOG_ARCADE_RESET_COMMENT'						=> '<strong>Játék kommentek újraindítása</strong>',
	'LOG_ARCADE_RESET_DOWNLOADS'					=> '<strong>Letöltési statisztika újraindítása</strong>',
	'LOG_ARCADE_RESET_GAME'							=> [
		1											=> '<strong>Játék adatok újraindítása%s%s%s%s</strong><br>» %s',
		2											=> '<strong>Játékok adatainak újraindítása%s%s%s%s</strong><br>» %s',
	],
	'LOG_ARCADE_RESET_GAMES_REC'					=> '<strong>Játék ajánló újraindítása</strong>',
	'LOG_ARCADE_RESET_GAME_SCORES'					=> [
		1											=> '<strong>Játék eredmények újraindítása%s%s</strong><br>» %s',
		2											=> '<strong>Játékok eredményeinek újraindítása%s%s</strong><br>» %s',
	],
	'LOG_ARCADE_RESET_GROUP_TOURNAMENT'				=> '<strong>Csoportversenyek újraindítása</strong>',
	'LOG_ARCADE_RESET_INSTALL_DATE_GAME'			=> [
		1											=> '<strong>Játék telepítési dátum alaphelyzetbe állítása</strong><br>» %s',
		2											=> '<strong>Játékok telepítési dátumok alaphelyzetbe állítása</strong><br>» %s',
	],
	'LOG_ARCADE_RESET_JACKPOT'						=> '<strong>Összes játék főnyereményének újraindítása</strong>',
	'LOG_ARCADE_RESET_MENU'							=> '<strong>Menüstruktúra visszaállítása</strong>',
	'LOG_ARCADE_RESET_PLAYING_RECORD'				=> '<strong>Valaha játszott felhasználó számának lenullázása</strong>',
	'LOG_ARCADE_RESET_POINTS'						=> '<strong>Összes pont újraindítása</strong>',
	'LOG_ARCADE_RESET_SCORES_ALL'					=> '<strong>Összes felhasználó eredményének törlése</strong>',
	'LOG_ARCADE_RESET_SUPER_CHAMPION'				=> '<strong>Szuperbajnokok újraindítása</strong>',
	'LOG_ARCADE_RESET_TOURNAMENT'					=> '<strong>Versenyek újraindítása</strong>',
	'LOG_ARCADE_RESET_USERS_DATA'					=> '<strong>Összes felhasználó adatainak törlése</strong>',
	'LOG_ARCADE_RESET_USERS_SCORE'					=> '<strong>Összes felhasználó elért eredményeinek törlése</strong>',
	'LOG_ARCADE_RESET_USERS_SETTINGS'				=> '<strong>Felhasználók beállításainak alaphelyzetbe állítása</strong>',
	'LOG_ARCADE_RESET_USER_ALL'						=> '<strong>Felhasználó adatainak törlése</strong><br>» %s',
	'LOG_ARCADE_RESET_USER_SCORES'					=> '<strong>Felhasználó eredményeinek törlése%s%s</strong><br>» %s',
	'LOG_ARCADE_RESET_USER_SUPER_RECORDS'			=> '<strong>Felhasználó szuper rekordjainak törlése</strong><br>» %s',
	'LOG_ARCADE_RESTORE_DEFAULT_DATA_ANNOUNCE'		=> '<strong>Közlemény adatok alaphelyzetbe állítása</strong><br>» %s',
	'LOG_ARCADE_RESTORE_DEFAULT_DATA_PM'			=> '<strong>Privát üzenet adatok alaphelyzetbe állítása</strong><br>» %s',
	'LOG_ARCADE_RESYNC_TOTALS_DATA'					=> '<strong>Játéktermi adatok újraszinkronizálása</strong>',
	'LOG_ARCADE_RESYNC_USERS_TOTAL_DATA'			=> '<strong>Felhasználók adatainak újraszinkronizálása</strong>',
	'LOG_ARCADE_SETTINGS'							=> '<strong>Elsődleges beállítások szerkesztése</strong>',
	'LOG_ARCADE_SYNC_CAT'							=> '<strong>Kategória szinkronizálása</strong><br>» Kategória=%s',
	'LOG_ARCADE_SYNC_GAME'							=> [
		1											=> '<strong>Játék szinkronizálása</strong><br>» Játék=%s',
		2											=> '<strong>Játékok szinkronizálása</strong><br>» Játékok=%s',
	],
	'LOG_ARCADE_SYSTEM'								=> '<strong>Rendszer beállítások szerkesztése</strong>',
	'LOG_ARCADE_TOURNAMENT'							=> '<strong>Verseny beállítások szerkesztése</strong>',
	'LOG_ARCADE_TOUR_ANNOUNCE'						=> '<strong>Verseny közlemény szerkesztése</strong><br>» Nyelv: %s',
	'LOG_ARCADE_TOUR_ANNOUNCE_SYNC'					=> '<strong>Verseny közlemények újraszinkronizálása</strong>',
	'LOG_ARCADE_TOUR_CREATE'						=> '<strong>Verseny létrehozása</strong><br>» %s',
	'LOG_ARCADE_TOUR_DELETE'						=> '<strong>Verseny törlése</strong><br>» %s',
	'LOG_ARCADE_TOUR_EDIT'							=> '<strong>Verseny szerkesztése</strong><br>» %s',
	'LOG_ARCADE_TOUR_END_ANNOUNCE'					=> '<strong>Verseny vége közlemény szerkesztése</strong><br>» Nyelv: %s',
	'LOG_ARCADE_UNDEFINED_SCORE'					=> '<strong>A „%s” játék meghatározatlan éredményt küldött</strong>',
	'LOG_ARCADE_UNPACK_GAME'						=> [
		1											=> '<strong>Játék kicsomagolása</strong><br>» %s',
		2											=> '<strong>Játékok kicsomagolása</strong><br>» %s',
	],
	'LOG_ARCADE_UPLOAD_GAME'						=> [
		1											=> '<strong>Játék feltöltése</strong><br>» %s',
		2											=> '<strong>Játékok feltöltése</strong><br>» %s',
	],
	'LOG_ARCADE_USER_BANNED'						=> '<strong>Felhasználó kitiltása</strong><br>» %s',
	'LOG_ARCADE_USER_DELETE_FAVORITE'				=> [
		1											=> '<strong>Kedvenc játék törlése</strong><br>» %s',
		2											=> '<strong>Kedvenc játékok törlése</strong><br>» %s',
	],
	'LOG_ARCADE_USER_GAME_SETTINGS'					=> '<strong>Játék beállítások szerkesztése</strong>',
	'LOG_ARCADE_USER_HIGHLIGHT_FAVORITE'			=> [
		1											=> '<strong>Kedvenc játék kiemelése</strong><br>» %s',
		2											=> '<strong>Kedvenc játékok kiemelése</strong><br>» %s',
	],
	'LOG_ARCADE_USER_MAIN_SETTINGS'					=> '<strong>Főbeállítások szerkesztése</strong>',
	'LOG_ARCADE_USER_POST_SETTINGS'					=> '<strong>Hozzászólás beállítások szerkesztése</strong>',
	'LOG_ARCADE_USER_REMOVE_HIGHLIGHT_FAVORITE'		=> [
		1											=> '<strong>Kedvenc játék kiemelés eltávolítása</strong><br>» %s',
		2											=> '<strong>Kedvenc játékok kiemeléseinek eltávolítása</strong><br>» %s',
	],
	'LOG_ARCADE_USER_SET_UPDATE'					=> '<strong>Felhasználó beállításainak szerkesztése</strong><br>» %s',
	'LOG_ARCADE_VERSION_CHECK_DISABLED'				=> '<strong>Automatikus verzió ellenőrzés kikapcsolása</strong>',
	'LOG_ARCADE_VERSION_CHECK_ENABLED'				=> '<strong>Automatikus verzió ellenőrzés bekapcsolása</strong>',
	'LOG_C_ROLE_ADD'								=> '<strong>Kategória szerep hozzáadása</strong><br>» %s',
	'LOG_C_ROLE_EDIT'								=> '<strong>Kategória szerep szerkesztése</strong><br>» %s',
	'LOG_C_ROLE_REMOVED'							=> '<strong>Kategória szerep törlése</strong><br>» %s',
]);
