<?php
/**
*
* @package phpBB Arcade
* @version $Id: info_ucp_arcade.php 2478 2022-02-02 10:39:29Z KillBill $
* @author 2011-2026 KillBill
* @copyright (c) 2014-2026 https://jv-arcade.com/ - https://jv-arcade.com/contact
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

//Arcade
$lang = array_merge($lang, [
	'UCP_ARCADE'								=> 'phpBB Arcade',
	'UCP_ARCADE_BOARD_SESSION'					=> 'Fórum munkamenet idő kijelzése',
	'UCP_ARCADE_BOARD_SESSION_EXPLAIN'			=> 'A játék platform felett megjelenik a fórum munkamenet visszaszámlálása. Amennyiben a visszaszámláló nullára ér, úgy a fórumból automatikusan kijelentkezünk.',
	'UCP_ARCADE_BUTTON_STYLE'					=> 'Menü gomb stílusa',
	'UCP_ARCADE_BUTTON_WITHOUT_TEXT'			=> 'Gomb szöveg nélkül',
	'UCP_ARCADE_BUTTON_WITH_TEXT'				=> 'Gomb szöveggel',
	'UCP_ARCADE_CAT_GAMES_STYLE'				=> 'Kategória játék stílus',
	'UCP_ARCADE_CAT_STYLE'						=> 'Kategória stílus',
	'UCP_ARCADE_DARK'							=> 'Sötét',
	'UCP_ARCADE_DELETE_FAVORITE'				=> [
		1										=> 'Kedvenc játék törlése',
		2										=> 'Kedvenc játékok törlése'
	],
	'UCP_ARCADE_DELETE_FAVORITE_CONFIRM'		=> [
		1										=> 'Biztos vagy benne, hogy törlöd ezt a kedvenc játékot?',
		2										=> 'Biztos vagy benne, hogy törlöd ezeket a kedvenc játékokat?'
	],
	'UCP_ARCADE_DELETE_FAVORITE_SUCCESS'		=> [
		1										=> 'Kedvenc játék sikeresen törölve.',
		2										=> 'Kedvenc játékok sikeresen törölve.'
	],
	'UCP_ARCADE_DEVICES_ALL'					=> 'Összes eszköz',
	'UCP_ARCADE_DEVICES_TOUCH_SCREEN'			=> 'Érintőképernyős eszközök',
	'UCP_ARCADE_DISPLAY_GAME_IMAGE'				=> 'Játék képek megjelenítése',
	'UCP_ARCADE_DISPLAY_POPUP_ICON'				=> 'Felugró ablak ikon megjelenítése',
	'UCP_ARCADE_EVERYWHERE'						=> 'Mindenhol',
	'UCP_ARCADE_FAVORITES'						=> 'Kedvencek kezelése',
	'UCP_ARCADE_FAVORITES_EXPLAIN'				=> 'Itt megtekintheted, kiemelheted és törölhetted a kedvenc játékaidat.',
	'UCP_ARCADE_FLASH_WATERMARK'				=> 'Flash vízjel megjelenítése',
	'UCP_ARCADE_FLASH_WATERMARK_EXPLAIN'		=> 'Ha engedélyezed, akkor a játék képekhez hozzá lesz adva a Flash vízjel.',
	'UCP_ARCADE_GAME'							=> 'Játék beállítások',
	'UCP_ARCADE_GAME_AUTO_ZOOM'					=> 'Játék automatikus nagyítása',
	'UCP_ARCADE_GAME_AUTO_ZOOM_EXPLAIN'			=> 'Ha a játéknak kijelölt hely nagyobb mint a játék mérete, akkor automatikusan felnagyításra kerül a játék.<br><em class="arcade_attent">Vedd figyelembe, hogy ez a beállítás felülbírálja az egyéni méret engedélyezését.</em>',
	'UCP_ARCADE_GAME_BORDER_ENABLE'				=> 'Játék körüli keret kijelzése',
	'UCP_ARCADE_GAME_CUSTOM_SIZE'				=> 'Egyéni méret engedélyezése',
	'UCP_ARCADE_GAME_CUSTOM_SIZE_EXPLAIN'		=> 'Ha engedélyezed, akkor a te általad meghatározott maximális méretek lesznek használva.<br><em>Vedd figyelembe, hogy ha a játéknak kisebb hely áll rendelkezésre mint az általad beállított méret, akkor automatikusan a rendelkező hely méretéhez lesz igazítva a játék. Mivel a szoftver semmilyen körülmények között nem engedélyezi a játéktéren kívüli megjelenést.</em>',
	'UCP_ARCADE_GAME_FILTER_KEYBOARD'			=> 'Billentyűzetes játékok kiszűrése',
	'UCP_ARCADE_GAME_FILTER_KEYBOARD_EXPLAIN'	=> 'Itt lehetőséged van olyan játékok kiszűrésére, amelyekhez nélkülözhetetlen a billentyűzet használat.',
	'UCP_ARCADE_GAME_FULLSCREEN'				=> 'Játék induljon teljes képernyőn',
	'UCP_ARCADE_GAME_FULLSCREEN_ALL'			=> 'Teljes képernyős eszköz',
	'UCP_ARCADE_GAME_FULLSCREEN_ALL_EXPLAIN'	=> 'Ha engedélyezve van a „Játék induljon teljes képernyőn”, akkor itt megadhatód, hogy minden eszközre legyen érvényes vagy csak az érintőképernyős eszközökre.',
	'UCP_ARCADE_GAME_FULLSCREEN_EXPLAIN'		=> 'Ha engedélyezed, akkor a játék előtti bevezetőben lévő start gombra kattintva a játék teljes képernyőn fog elindulni.',
	'UCP_ARCADE_GAME_INTRO_STYLE'				=> 'Játék bevezető stílusa',
	'UCP_ARCADE_GAME_JUMP_TOP'					=> 'Automatikus top pozició',
	'UCP_ARCADE_GAME_JUMP_TOP_EXPLAIN'			=> 'Ha a játékot elgörgetjük a beállított pozícióból és utána rákattintunk a játékra, akkor automatikusan visszaáll a beállított pozícióba.',
	'UCP_ARCADE_GAME_LANDSCAPE_WIDTH'			=> 'Fekvő játék szélessége',
	'UCP_ARCADE_GAME_LANDSCAPE_WIDTH_EXPLAIN'	=> 'A fekvő játékokhoz az itt megadott szélesség lehet a maximális méret.',
	'UCP_ARCADE_GAME_MENU_ENABLE'				=> 'Menü engedélyezése',
	'UCP_ARCADE_GAME_MENU_ENABLE_EXPLAIN'		=> 'A bevezetőhöz és a játékhoz hozzárendelésre kerül egy beragasztott menü, amely számos gombot tartalmazz. Így játék közben is számos információhoz és beállításhoz férhetünk hozzá.',
	'UCP_ARCADE_GAME_MENU_POSITION'				=> 'Menü pozició',
	'UCP_ARCADE_GAME_ORIENTATION_EXPLAIN'		=> 'Ha a játék támogatja a fekvő és álló megjelenést, akkor az itt beállított módon fog megjelenni.<br><em>A játék forgatása, játék közben is lehetséges.<br>Forgatható eszközök esetében az eszköz pozíciója lesz figyelembe véve.</em>',
	'UCP_ARCADE_GAME_OVER_ANIMATION'			=> 'Animáció lejátszása a játék végén',
	'UCP_ARCADE_GAME_OVER_ANIMATION_SOUND'		=> 'Animáció hang engedélyezése',
	'UCP_ARCADE_GAME_OVER_RANDOM_GAMES'			=> 'Véletlen játékok kijelzése a játék végén',
	'UCP_ARCADE_GAME_OVER_SOUND'				=> 'Game over hang lejátszása a játék végén',
	'UCP_ARCADE_GAME_OVER_SUBMIT'				=> 'Eredmény beküldés engedélyezése',
	'UCP_ARCADE_GAME_OVER_SUBMIT_EXPLAIN'		=> 'Ha nem engedélyezzük, akkor a játék sem automatikusan sem pedig az „Eredmény beküldés” gomb megnyomása után sem fogja beküldeni az elért eredményünket. Az eredmény beküldés helyett egy „Game Over” felület fog kinyílni, ami lehetőséget biztosít a játék azonnali újrajátszására vagy a pontszámunk elmentésére.',
	'UCP_ARCADE_GAME_PORTRAIT_HEIGHT'			=> 'Álló játék magassága',
	'UCP_ARCADE_GAME_PORTRAIT_HEIGHT_EXPLAIN'	=> 'Az álló játékokhoz az itt megadott magasság lehet a maximális méret.',
	'UCP_ARCADE_GAME_PRELOADER'					=> 'Előtöltők letiltása',
	'UCP_ARCADE_GAME_PRELOADER_EXPLAIN'			=> 'Itt letilthatod az előtöltőket, ha az zavar téged, de vedd figyelembe, hogy az előtöltők letiltása során, ha az internet kapcsolatod lassú, akkor hosszabb ideig üres helyet fogsz csak látni a betöltés ideje alatt.',
	'UCP_ARCADE_GAME_RESIZE_BUTTONS'			=> 'Átméretezési gombok engedélyezése',
	'UCP_ARCADE_GAME_RESIZE_BUTTONS_EXPLAIN'	=> 'További opcióként hozzáadásra kerülnek az egyéni átméretezési gombok. A gombok csak akkor aktívak, ha normál ablakban játszunk és az ablak asztali nézetben van.',
	'UCP_ARCADE_GAME_SESSION'					=> 'Játék munkamenet idő kijelzése',
	'UCP_ARCADE_GAME_SESSION_EXPLAIN'			=> 'A játék platform felett megjelenik a játék munkamenet visszaszámlálása. Amennyiben a visszaszámláló nullára ér, úgy a játék már biztos, hogy nem fogja elmenteni az elért pontszámunkat.',
	'UCP_ARCADE_GAME_VERTICAL_POS'				=> 'Játék függőleges pozíciója',
	'UCP_ARCADE_GAME_VERTICAL_POS_ACTIVE'		=> 'Játék függőleges pozíciója aktív',
	'UCP_ARCADE_GAME_VERTICAL_POS_ACTIVE_EXP'	=> 'Ez a beállítás csak akkor lép életbe, ha a közép pozíció van beállítva.',
	'UCP_ARCADE_GAME_VERTICAL_POS_EXPLAIN'		=> 'Ha a képernyő magassága nagyobb, mint a játék magassága, akkor az itt beállított pozícióhoz lesz igazítva a játék.',
	'UCP_ARCADE_HTML5_WATERMARK'				=> 'Html5 vízjel megjelenítése',
	'UCP_ARCADE_HTML5_WATERMARK_EXPLAIN'		=> 'Ha engedélyezed, akkor a játék képekhez hozzá lesz adva a Html5 vízjel.',
	'UCP_ARCADE_LIGHT'							=> 'Világos',
	'UCP_ARCADE_LOCAL_STORAGE'					=> 'Helyi tároló kezelése',
	'UCP_ARCADE_LOCAL_STORAGE_DEL_CONFIRM'		=> 'Biztos vagy benne, hogy törlöd a tárolt adatokat ebből a böngészőből?',
	'UCP_ARCADE_LOCAL_STORAGE_EMPTY'			=> 'Ebben a böngészőben a helyi tároló üres.',
	'UCP_ARCADE_LOCAL_STORAGE_EXPLAIN'			=> 'Itt megtekintheted illetve törölheted az éppen használatban lévő böngésző helyi tárolójában lévő adatokat.<br>A helyi tárolóban különféle adatok is szerepelhetnek, mint például: Felhasználó és weboldal beállítások, játékok előrehaladási  adatok.<br><em>Vedd figyelembe, hogy az adatok lekérése kizárólag erre a weboldalra, eszközre és böngészőre vonatkoznak.</em>',
	'UCP_ARCADE_LOCAL_STORAGE_NOJS'				=> 'A böngésző nem engedélyezi a „JavaScript” használatát, így a helyi tároló nem érhető el!',
	'UCP_ARCADE_LOCAL_STORAGE_PRIVATE'			=> 'A böngésző „Privát” módban van, így a helyi tároló nem érhető el!',
	'UCP_ARCADE_MAX_FAV'						=> 'Elérted a maximum %s választható kedvenc játékok számát.',
	'UCP_ARCADE_MIDDLE'							=> 'Középen',
	'UCP_ARCADE_NOTIFICATION_TYPE_GROUP_TOUR'	=> 'Játéktermi csoport verseny',
	'UCP_ARCADE_NO_PERM_PM_LOSS_HIGHSCORE'		=> 'Nincs jogosultságod a privát üzenetek fogadására, trófea elvesztése esetén.',
	'UCP_ARCADE_ONLY_POPUP_FULLSCREEN'			=> 'Csak felugró/teljes képernyön.',
	'UCP_ARCADE_PLAY_INFO_BOX'					=> 'Információ box pozíció',
	'UCP_ARCADE_PLAY_INFO_BOX_ENABLE'			=> 'Információ box engedélyezése',
	'UCP_ARCADE_PLAY_INFO_BOX_EXPLAIN'			=> 'Az információ boxok a beállított pozíción fognak megjelenni.',
	'UCP_ARCADE_PLAY_MOBILE_SCROLL'				=> 'Mobil nézetben görgetősáv engedélyezése',
	'UCP_ARCADE_PLAY_MOBILE_SCROLL_EXPLAIN'		=> 'Mobil nézetben lehetőség van a weboldal görgetőjének letiltására, amennyiben ez zavaró a számodra.<br><em>Vedd figyelembe, hogy ezt elérheted akkor is, ha kikapcsolod a háttérvilágítást.</em>',
	'UCP_ARCADE_POPUP_VERTICAL_POS'				=> 'Felugró ablak függőleges pozíciója',
	'UCP_ARCADE_POPUP_VERTICAL_POS_EXPLAIN'		=> 'Ha a képernyő magassága nagyobb, mint a felugró ablak magassága, akkor az itt beállított pozícióhoz lesz igazítva az új ablak.',
	'UCP_ARCADE_POST'							=> 'Hozzászólás beállítások',
	'UCP_ARCADE_RESET_SETTINGS_CONFIRM'			=> 'Biztos vagy benne, hogy visszaállítod az összes beállításaidat az alapértelmezett beállításra?',
	'UCP_ARCADE_SELECTED_HIGHLIGHT'				=> 'Kijelöltek kiemelése',
	'UCP_ARCADE_SELECTED_HIGHLIGHT_REMOVE'		=> 'Kijelöltek kiemelésének eltávolítása',
	'UCP_ARCADE_SEND_PM_EXPLAIN'				=> 'Ha egy játékban megdöntik a rekordodat vagy ép szeretne egy felhasználó kihívni egy versenyre, akkor privát üzenet fog értesíteni.',
	'UCP_ARCADE_SETTINGS'						=> 'Általános beállítások',
	'UCP_ARCADE_TOP'							=> 'Fent',
	'UCP_ARCADE_USER_INFO'						=> 'Felhasználói információ blokk cseréje',
	'UCP_ARCADE_USER_INFO_EXPLAIN'				=> 'Itt lehetőséged van az üdvözlő blokkban lévő felhasználói információ blokk lecserélésére, helyette választhatod a legtöbbet játszott játékok kijelzését.<br><em>Ez az opció nincs hatással a kihívás és a verseny oldalon.</em>',
	'UCP_CAT_ARCADE'							=> 'Játékterem',
	'UCP_CHALLENGE_ENABLED'						=> 'Kihívás engedélyezése',
	'UCP_CHALLENGE_ENABLED_EXPLAIN'				=> 'Ha engedélyezed, akkor a felhasználók kihívhatnak a játékokban egy párbajra.'
]);
