<?php
/**
*
* @package phpBB Arcade
* @version $Id: help_developer.php 2460 2022-01-16 01:15:57Z KillBill $
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

$lang = array_merge($lang, [
	'ARCADE_ACP_HELP_FAQ_BLOCK_DATA'					=> 'Játékterem adatainak bemutatása a fórum többi oldalán',
	'ARCADE_ACP_HELP_FAQ_BLOCK_GAMES'					=> 'Játékok',
	'ARCADE_ACP_HELP_FAQ_BLOCK_GENERAL'					=> 'Általános',
	'ARCADE_ACP_HELP_FAQ_BLOCK_INSTALL'					=> 'Telepítés/Frissítés/Törlés',
	'ARCADE_ACP_HELP_FAQ_BLOCK_MODULES'					=> 'phpBB Arcade modulok',
	'ARCADE_ACP_HELP_FAQ_BLOCK_SCORING'					=> 'Eredményszerzés',
	'ARCADE_ACP_HELP_FAQ_DATA_EXT_ANSWER'				=> 'Igen, van kiegészítő a phpBB Arcade szoftverhez - lásd: <a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/phpBB_Arcade_Extensions.html">Kiegészítők</a>',
	'ARCADE_ACP_HELP_FAQ_DATA_EXT_QUESTION'				=> 'Léteznek-e kiegészítők?',
	'ARCADE_ACP_HELP_FAQ_GAMES_DELETE_ANSWER'			=> 'A játék törléséhez kattints a „Kategóriák kezelése” vagy a „Játékok kezelése” AVP modulra és válaszd ki a törölni kívánt játékot. Itt lehetőség lesz megerősíteni a fájlok törlését a szerverről, ezt csak abban az esetben használd, ha véglegesen törölni szeretnéd a játékot és a későbbiekben sem szeretnéd már újratelepíteni.',
	'ARCADE_ACP_HELP_FAQ_GAMES_DELETE_QUESTION'			=> 'Hogyan törölhetek játékokat?',
	'ARCADE_ACP_HELP_FAQ_GAMES_HOW_INSTALL_ANSWER'		=> 'A játékok telepítésének két lehetséges módja is van.<br>
															<ul>
																<li>Ha letöltesz egy tömörített játékot a phpBB Arcade letöltési modul segítségével akkor neked a tömörített fájlt fel kell tölteni a <strong>[ROOT]/arcade/install/</strong> mappába és kicsomagolhatod az AVP-ben és utána telepíthető is.</li>
																<li>Ha letöltesz egy tömörített játékot a phpBB Arcade letöltési modul segítségével utána feltölthetted az AVP Játékok feltöltése, kicsomagolása modul segítségével. A feltöltés után a játék kicsomagolható és utána már telepíthető a játék.</li>
																<li>Harmadik lehetőség az, hogy FTP. töltsük fel a már kicsomagolt játékot a megfelelő helyre <strong>„[ROOT]/arcade/games/{Első karakter}/”</strong> mappába. Azonban ez nem javasolt mert a mappák és fájlok jogosultságai eltérőek lehetnek ebben az esetben.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GAMES_HOW_INSTALL_QUESTION'	=> 'Hogyan telepíthetek játékokat?',
	'ARCADE_ACP_HELP_FAQ_GAMES_INSTALL_ANSWER'			=> 'A legkönnyebb út olyan játékokat használni, amik már phpBB Arcade, vagy IBPro tar formátumban vannak. A játékterem automatikusan érzékelni fogja, ha feltöltesz vagy kicsomagolsz egy játékot. Ha a formátum nem jó, akkor módosítani kell a helyes formátumra illetve, ha semmiféleképpen nem működik, akkor a játékot érdemes megosztani a támogatási oldalon és kérni a játék ellenőrzését.',
	'ARCADE_ACP_HELP_FAQ_GAMES_INSTALL_QUESTION'		=> 'Mi a legkönnyebb módja, hogy játékokat telepítsünk?',
	'ARCADE_ACP_HELP_FAQ_GAMES_INS_FILE_ANSWER'			=> 'Igen.<br><textarea rows="30" cols="30" readonly="readonly" onclick="this.focus(); this.select();">&lt;?php
/**
*
* @package phpBB Arcade
* @version 7.7.3
* @author 2011-2025 KillBill
* @copyright (c) 2014-2025 https://jv-arcade.com/ - https://jv-arcade.com/contact
* @license https://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
*	phpBB Arcade, Játék telepítő fájl
*
*	A paramétereket be kell állítani a játékok számára,
*	hogy telepíthetőek legyenek.
*	A megadott paraméterek lesznek elmentve a játékterem adatbázisába.
*
*	A következő tételeket szükséges beállítani (játék nevét, leírását, vezérlőt,
*	szélességét, magasságát, pontszám típus és a pontszám mentésének típusa.
*
*	A játékterem számos eredmény mentési típust támogat a játékok részere. (phpBB Arcade, IBPro,
*	IBProV32, Relax Arcade, Olympus Arcade és a Nincs pontszerzési lehetőség)
*	Használd a következő konstansok egyikét a típus megadásához:
*
*	PHPBBARCADE_GAME
*	IBPRO_GAME
*	IBPROV3_GAME
*	PHPBB_RA_GAME
*	OLYMPUS_GAME
*	NOSCORE_GAME
*
*	Használd a következő konstansok egyikét a játékvezérlő megadásához:
*
*	GAME_CONTROL_KEYBOARD
*	GAME_CONTROL_KEYBOARD_TOUCH
*	GAME_CONTROL_KEYBOARD_MOUSE
*	GAME_CONTROL_MOUSE_TOUCH
*
*	Használd a GAME_CONTROL_KEYBOARD konstans, ha a játékot csak billentyűzettel lehet játszani.
*	Használd a GAME_CONTROL_KEYBOARD_TOUCH konstans, ha a játékot billentyűzettel és érintőképernyőn is lehet játszani.
*	Használd a GAME_CONTROL_KEYBOARD_MOUSE konstans, ha a játékot billentyűzettel és egérrel is lehet játszani.
*	Használd a GAME_CONTROL_MOUSE_TOUCH konstans, ha a játékot egérrel és érintőképernyőn is lehet játszani.
*	Ha szeretnél plusz leírást is készíteni, hogyan és mely billentyűkkel kell játszani a játékot akkor írd meg a „game_control_desc” mezőbe.
*
*	Használd a következő konstansok egyikét a játék forgatás megadásához:
*
*	ARCADE_SET_DISABLED
*	ARCADE_SET_ENABLED
*
*	Használd az ARCADE_SET_DISABLED változót, ha játék nem támogatja az álló és fekvő megjelenítést.
*	Használd az ARCADE_SET_ENABLED változót, ha a játék támogatja a fekvő és álló megjelenést is.
*
*	Használd a következő konstansok egyikét az eredmény típus megadásához:
*
*	SCORETYPE_HIGH
*	SCORETYPE_LOW
*
*	SCORETYPE_HIGH azoknál a játékoknál kell használni, ahol a legmagasabb eredmény a jobb.
*	SCORETYPE_LOW azoknál a játékoknál kell használni, ahol a legalacsonyabb eredmény a jobb.
*
*/

// FEJLESZTŐK KÉRJÜK, vegye figyelembe a módosított - (\'game_name\', \'game_desc\', \'game_control_desc\')
//
// A telepítési fájl mentése során használjon UTF-8 BOM nélküli karakter kódolást.
//
// Egyes karakterek esetében használd a következő karaktereket a másolás és beillesztés segítségével: ‚ ‘ ’ « » „ “ ” …

if (!defined(\'IN_PHPBB\') || !defined(\'IN_PHPBB_ARCADE\'))
{
	exit;
}

$game_file = basename(__FILE__, \'.\' . substr(strrchr(__FILE__, \'.\'), 1));

$game_data = [
	\'game_name\'			=> \'Játék neve\',
	\'game_desc\'			=> \'Ide kell beírni a játékleírást.\',
	\'game_control\'		=> GAME_CONTROL_MOUSE_TOUCH,
	\'game_control_desc\'	=> \'Ide kell beírni a játék irányításához szükséges leírást.\',
	\'game_image\'			=> $game_file . \'.png\',
	\'game_scorevar\'		=> $game_file,
	\'game_width\'			=> 370,
	\'game_height\'			=> 550,
	\'game_rotatable\'		=> ARCADE_SET_DISABLED,
	\'game_scoretype\'		=> SCORETYPE_HIGH,
	\'game_save_type\'		=> PHPBBARCADE_GAME,
	\'game_inherit\'		=> \'Ide kell beírni a játék öröklési útvonalát, ha szükséges.\',
	\'privacy_desc\'		=> \'Ide kell beírni a Játék Adatvédelmi Irányelvét, ha a játék megköveteli.\',
	\'privacy_link\'		=> \'Ide kell beírni a Játék Adatvédelmi Irányelvére mutató linket Html formátumban. Ha több is van, akkor mindegyiket írd új sorba.\'
];
</textarea>',
	'ARCADE_ACP_HELP_FAQ_GAMES_INS_FILE_QUESTION'		=> 'Van-e minta telepítő fájl?',
	'ARCADE_ACP_HELP_FAQ_GAMES_OWN_INS_FILE_ANSWER'		=> 'Nem, bár lehetőség van két eszköz használatára a phpBB Arcade AVP-ben, amik segítenek ebben.<br>
															<ul>
																<li>Van egy, ami létrehoz egy telepítő fájlt a semmiből, csak írjuk be a szükséges adatokat, utána lehetőség van letölteni ezt a telepítő fájlt vagy letárolni a szerveren.</li>
																<li>A másik megoldás az, hogy már egy telepített játék, telepítő fájlját használjuk fel.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GAMES_OWN_INS_FILE_QUESTION'	=> 'Csinálhatok-e saját kezűleg üzembe helyezési fájlt?',
	'ARCADE_ACP_HELP_FAQ_GAMES_REQ_INSTALL_ANSWER'		=> 'Ha egy már kicsomagolt játékot szeretnél feltölteni és telepíteni, akkor a következőknek kell, hogy megfeleljen:<br>
															A [ROOT]/arcade/<strong>„games”</strong>/t/ mappába kell, hogy feltöltsd a játék fő fájljait, ami a telepítéshez szükséges, ezek a következők:<br><br>
															<b>Html5</b>
															<ul>
																<li>1. test.php (Játék telepítési fájlja)</li>
																<li>2. test.png (Játék kisképe 60x60 px)</li>
																<li>3. index.html (Az index.html fájl felelős a játék indításáért.)</li>
															</ul>
															<br>
															<b>Flash</b>
															<ul>
																<li>1. test.php (Játék telepítési fájlja)</li>
																<li>2. test.png (Játék kisképe 60x60 px)</li>
																<li>3. test.swf (A test.swf fájl tartalmazza a játékhoz szükséges adatokat.)</li>
																<li>4. index.htm (Az index.htm egy üres fájl)</li>
																<li>5. gd/ (Ha a játék rendelkezik „gamedata” mappával, akkor nevezzük át „gd”-re, mivel a gamedata mappa név már nem támogatott.</li>
															</ul>
															<br>
															A játék mappának a neve mindig meg kell, hogy egyezzen a játék telepítő fájl nevével.
															<br><br>
															Tehát ebben az esetben a helyes mappa szerkezet a következő:<br>
															<ul>
																<li>1. <strong>[ROOT]/arcade/games/t/test/</strong>test.php</li>
																<li>2. <strong>[ROOT]/arcade/games/t/test/</strong>index.html (Az index.html fájl felelős a játék indításáért.)</li>
															</ul>
															<br>
															A „games” mappa után lévő „t” mappa, mindig a fájlnév első betűje. Mivel a „phpBB Arcade” a játékokat „ABC” sorrendű mappákba helyezi el a jobb áttekintés érdekében.
															<br>
															Az <strong>„index.html”</strong> fájl csak egyszer szerepelhet. Az almappák védelmébe mindig a helyes fájlnév az <strong>„index.htm”</strong> ami egy üres fájl.',
	'ARCADE_ACP_HELP_FAQ_GAMES_REQ_INSTALL_QUESTION'	=> 'Mi a feltétele a játék telepítésének?',
	'ARCADE_ACP_HELP_FAQ_GAMES_SAVE_TYPE_ANSWER'		=> 'A következő játék mentési típusokat támogatja a játékterem:<br>
															<ul>
																<li>phpBB Arcade</li>
																<li>IBPro</li>
																<li>IBPro V32</li>
																<li>Relax Arcade</li>
																<li>Olympus Arcade</li>
																<li>Nincs pontszerzési lehetőség</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GAMES_SAVE_TYPE_QUESTION'		=> 'Milyen játék mentési típusok vannak támogatva?',
	'ARCADE_ACP_HELP_FAQ_GAMES_TYPE_ANSWER'				=> 'A következő játék típusokat támogatja a játékterem:<br>
															<ul>
																<li>Html5</li>
																<li>Flash - Átalakítva Html5-re.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GAMES_TYPE_QUESTION'			=> 'Milyen játék típusok vannak támogatva?',
	'ARCADE_ACP_HELP_FAQ_GAMES_ZIP_ANSWER'				=> 'Igen. A helyes tömörítés érdekében a következő mappa szerkezetre van szükség:<br>
															<ul>
																<li>test/ (Játék mappa)</li>
																<li>test/test.php (Játék telepítési fájlja)</li>
																<li>test/test.png (Játék kisképe 60x60 px)</li>
																<li>test/index.html (Az index.html fájl felelős a játék indításáért.)</li>
															</ul>
															<br>Ha ez így mind helyes, akkor közvetlenül már csomagolhatjuk is a játékot. Az elkészült tömörített fájl neve meg helyesen test.zip vagy test.tar lesz.',
	'ARCADE_ACP_HELP_FAQ_GAMES_ZIP_QUESTION'			=> 'Tudok saját tömörített játék fájlt létrehozni?',
	'ARCADE_ACP_HELP_FAQ_GENERAL_FEATURES_ANSWER'		=> '<ul>
																<li>Széleskörű játékok támogatása</li>
																<li>Korlátlan kategóriák és alkategóriák létrehozása és linkek (utánozva a phpBB3 fórum)</li>
																<li>Teljes AVP, MVP és FVP modulok</li>
																<li>Adminisztrátori jogosultságok a játékterem AVP moduloknak</li>
																<li>Moderátori jogosultságok a játékterem MVP moduloknak</li>
																<li>Globális játékterem alapú jogosultságok</li>
																<li>Helyi kategória alapú jogosultságok</li>
																<li>Jelszó által védett kategóriák</li>
																<li>Életkor által védett kategóriák</li>
																<li>Nagyon egyszerű játék telepítés</li>
																<li>Automatikusan konvertálja az összes támogatott mentési típusú játék tar fájlokat</li>
																<li>Megjelenítés ki játszik, milyen játékot</li>
																<li>Kedvenc játékok rendszer</li>
																<li>Játék letöltési rendszer</li>
																<li>Részletes statisztika</li>
																<li>Játék értékelési rendszer</li>
																<li>Játék komment rendszer</li>
																<li>Játék kihívás rendszer</li>
																<li>Játék verseny rendszer</li>
																<li>Játék csoport verseny rendszer</li>
																<li>Játék hibabejelentési rendszer</li>
																<li>Játszás új ablakban</li>
																<li>Kereső rendszer a játékoknak</li>
																<li>Pont rendszer integráció</li>
																<li>És még sok más…</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GENERAL_FEATURES_QUESTION'		=> 'Milyen jellemzők tartoznak bele a phpBB Arcade?',
	'ARCADE_ACP_HELP_FAQ_GENERAL_LANGS_ANSWER'			=> '<ul>
																<li>A támogatott fordításokat <b><a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/phpBB_Arcade_Languages.html">ITT</a></b> letöltheted.</li>
																<li>Amennyiben rendelkezel új fordítással, úgy kérlek oszd meg velünk <b><a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/phpBB_Arcade_User_Languages.html">ITT</a></b>.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GENERAL_LANGS_QUESTION'		=> 'Milyen nyelveket támogat?',
	'ARCADE_ACP_HELP_FAQ_GENERAL_STYLES_ANSWER'			=> '<ul>
																<li>A támogatott megjelenéseket <b><a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/phpBB_Arcade_Styles.html">ITT</a></b> letöltheted.</li>
																<li>Amennyiben rendelkezel új megjelenéssel, úgy kérlek oszd meg velünk <b><a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/phpBB_Arcade_User_Styles.html">ITT</a></b>.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GENERAL_STYLES_IMG_ANSWER'		=> 'Igen. Minden olyan kép, ami az alapértelmezett „[ROOT]/ext/jv/arcade/styles/all/theme/images/” könyvtárban található. Neked annyi a dolgod, hogy feltöltsd a képet a „[ROOT]/ext/jv/arcade/styles/saját_megjelenés_neve/theme/images/” könyvtárba, ha egy stílus nem kap képet akkor az alapértelmezett képeket fogja használni, a kategória képek is az alapértelmezettet „[ROOT]/ext/jv/arcade/styles/all/theme/images/cats/” könyvtárból fogja használni, míg nem töltesz fel saját képet a „[ROOT]/ext/jv/arcade/styles/saját_megjelenés_neve/theme/images/cats/” könyvtárba.',
	'ARCADE_ACP_HELP_FAQ_GENERAL_STYLES_IMG_QUESTION'	=> 'Stílus-képeket tudok-e használni a játékterembe?',
	'ARCADE_ACP_HELP_FAQ_GENERAL_STYLES_QUESTION'		=> 'Milyen megjelenéseket támogat?',
	'ARCADE_ACP_HELP_FAQ_INSTALL_DB_ANSWER'				=> 'A játékteremnek működni-e kell minden adatbázis típussal amit a phpBB3 támogat.',
	'ARCADE_ACP_HELP_FAQ_INSTALL_DB_QUESTION'			=> 'Mely adatbázisokat támogatja a phpBB Arcade?',
	'ARCADE_ACP_HELP_FAQ_INSTALL_INSTALL_ANSWER'		=> '<ul>
																<li>Töltsd le a legújabb kiadást és csomagold ki.</li>
																<li>Másold fel a fájlokat a szerverre a fórum „[ROOT]/” könyvtárba.</li>
																<li>Menj az Adminisztrátori vezérlőpultba és kattints a „Testreszabás” menü pontra azon belül a phpBB Arcade „Engedélyezés” linkre, ezzel telepítve is lett a phpBB Arcade.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_INSTALL_INSTALL_QUESTION'		=> 'Hogyan telepíthetem a phpBB Arcade?',
	'ARCADE_ACP_HELP_FAQ_INSTALL_UNINSTALL_ANSWER'		=> 'Menj az Adminisztrátori vezérlőpultba és kattints a „Testreszabás” menü pontra azon belül a phpBB Arcade „Letiltás” linkre majd az „Adatok törlése” linkre, ezután töröld a phpBB Arcade összes fájlját a szerverről.',
	'ARCADE_ACP_HELP_FAQ_INSTALL_UNINSTALL_QUESTION'	=> 'Hogyan törölhettem a phpBB Arcade?',
	'ARCADE_ACP_HELP_FAQ_INSTALL_UPDATE_ANSWER'			=> '<ul>
																<li>Töltsd le a legújabb kiadást és csomagold ki.</li>
																<li>Menj az Adminisztrátori vezérlőpultba és kattints a „Testreszabás” menü pontra azon belül a phpBB Arcade „Letiltás” linkre.</li>
																<li>Másold fel a fájlokat a szerverre a fórum „[ROOT]/” könyvtárba.</li>
																<li>Menj az Adminisztrátori vezérlőpultba és kattints a „Testreszabás” menü pontra azon belül a phpBB Arcade „Engedélyezés” linkre, ezzel frissítve is lesz a phpBB Arcade.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_INSTALL_UPDATE_QUESTION'		=> 'Hogyan frissíthetem a phpBB Arcade?',
	'ARCADE_ACP_HELP_FAQ_MODULES_ADD_AUTH_ANSWER'		=> 'Amint a phpBB Arcade telepítve van, be kell állítani a használni kívánt jogosultságokat. A játékterem használ kategória alapú jogosultságokat is, amit a phpBB is használ a fórum alapú jogosultságokra, ugyanígy a szerepeket is. Be kell még állítani a globális játékterem felhasználó/csoport jogosultságokat is, továbbá az adminisztrátor jogosultságokat felhasználó/csoport hozzáférést a phpBB Arcade AVP moduljaihoz.',
	'ARCADE_ACP_HELP_FAQ_MODULES_ADD_AUTH_QUESTION'		=> 'Mire jó a phpBB Arcade jogosultság kiosztása?',
	'ARCADE_ACP_HELP_FAQ_MODULES_ANSWER'				=> '<strong><br>A játékterem AVP moduljai:<br></strong>
															<strong>Főbeállítások</strong><br>
															<ul>
																<li><strong>Rendszerbeállítások</strong> - A rendszerek globális ki/be kapcsolását teszi lehetővé.</li>
																<li><strong>Elsődleges beállítások</strong> - Ellenőrző beállítások a játékteremnek.</li>
																<li><strong>Kiterjesztések beállításai</strong> - Ellenőrző beállítások a kiterjesztéseknek a játékteremben.</li>
																<li><strong>Játék beállítások</strong> - Ellenőrző beállítások a játékoknak a játékteremben.</li>
																<li><strong>Kihívás beállítások</strong> - Ellenőrző beállítások a kihívásnak a játékteremben.</li>
																<li><strong>Verseny beállítások</strong> - Ellenőrző beállítások a versenyeknek a játékteremben.</li>
																<li><strong>Csoport verseny beállítások</strong> - Ellenőrző beállítások a csoport versenyeknek a játékteremben.</li>
																<li><strong>Funkció beállítások</strong> - Ellenőrző funkciók beállításai a játékteremnek.</li>
																<li><strong>Oldal beállítások</strong> - Ellenőrző beállítások a játékterem oldalainak.</li>
																<li><strong>Útvonal beállítások</strong> - Ellenőrző beállítások a könyvtárak útvonalainak.</li>
																<li><strong>Terhelés beállítások</strong> - Ellenőrző beállítások a játékterem terhelésének.</li>
																<li><strong>Aktivitási rang beállítások</strong> - Ellenőrző beállítások a játékterem aktivitási rang megjelenésének.</li>
															</ul><br>
															<strong>Játékterem kezelése</strong><br>
															<ul>
																<li><strong>Menü kezelése</strong> - Hozzáadhatsz új menü gombokat illetve szerkesztheted, törölhetted. Az alap menü gombokat csak áthelyezni vagy átnevezni lehet.</li>
																<li><strong>Kategóriák kezelése</strong> - Hozzáadás, szerkesztés, törlés, mozgatás és játékok/kategóriák szinkronizálása.</li>
																<li><strong>Játékok kezelése</strong> - Játékok szerkesztése/törlése.</li>
																<li><strong>Felhasználók kezelése</strong> - A játékokban elért eredményeket lehet szerkeszteni/törölni.</li>
																<li><strong>Versenyek kezelése</strong> - Versenyek létrehozását, szerkesztését és törlését teszi lehetővé.</li>
																<li><strong>Csoport versenyek kezelése</strong> - Csoport versenyek létrehozását, szerkesztését és törlését teszi lehetővé.</li>
																<li><strong>Közlemények kezelése</strong> - Közlemények beállítása/szerkesztése.</li>
																<li><strong>Rangok kezelése</strong> - Rangok hozzáadása/szerkesztése és törlése.</li>
															</ul><br>
															<strong>Játék funkciók</strong><br>
															<ul>
																<li><strong>Játékok telepítése</strong> - Játék telepítése a játékterembe, több játék is telepíthető egyszerre egy kategóriához.</li>
																<li><strong>Játékok feltöltése, kicsomagolása</strong> - A telepítési mappába feltöltött becsomagolt játékokat itt tudod kicsomagolni vagy feltölthetsz egy vagy több fájlt egyszerre. Kicsomagolás utána a játék(ok) már készen állnak a telepítésre.</li>
																<li><strong>Játékok biztonsági mentése</strong> - Egy vagy több kiválasztott kategóriában lévő összes játék lementésére szolgál.</li>
																<li><strong>Játékok letöltése</strong> - Itt tudsz csatlakozni egy másik oldalhoz ahonnan is, ha van rá lehetőség akkor játékokat tudsz letölteni.</li>
															</ul><br>
															<strong>Segédfunkciók</strong><br>
															<ul>
																<li><strong>Jelentett hibás játékok</strong> - A felhasználók által bejelentett hibás játékokat sorolja fel.</li>
																<li><strong>Törölt játékok</strong> - A törölt játékokat sorolja fel és annak okait.</li>
																<li><strong>Kitiltott felhasználók</strong> - Kitiltott felhasználók megtekintése/feloldása a kitiltás alól.</li>
																<li><strong>Letöltési statisztika</strong> - Itt láthatod, hogy a felhasználók mennyi játékot töltöttek már le illetve mely játékokat.</li>
																<li><strong>Telepítő fájl létrehozása</strong> - Új telepítő fájl létrehozása ill. letöltés/megtekintés/lementés a szerverre vagy letölthetünk egy már meglévőt.</li>
																<li><strong>Felhasználói kézikönyv</strong> - A phpBB Arcade leírását tartalmazza.</li>
															</ul><br>
															<strong>Játéktermi naplók</strong><br>
															<ul>
																<li><strong>Adminisztrátori napló</strong> - Adminisztrációs cselekedetek felsorolása.</li>
																<li><strong>Moderátori napló</strong> - Moderátori cselekedetek felsorolása.</li>
																<li><strong>Felhasználói napló</strong> - Felhasználói cselekedetek felsorolása.</li>
																<li><strong>Hibanapló</strong> - Különböző hibák felsorolása.</li>
															</ul><br>
															<strong>Jogosultság szerepek</strong><br>
															<ul>
																<li><strong>Kategóriaszerepek</strong> - Az itt lévő szerepek tartalmazzák a kategória jogosultságokat.</li>
															</ul><br>
															<strong>Kategória alapú jogosultságok</strong><br>
															<ul>
																<li><strong>Kategóriák jogosultságai</strong> - Felhasználók/csoportok kategória jogosultságainak kezelése.</li>
																<li><strong>Felhasználok kategória jogosultságai</strong> - Felhasználók kategória jogosultságainak kezelése.</li>
																<li><strong>Csoportok kategóriai jogosultságai</strong> - Csoportok kategória jogosultságainak kezelése.</li>
																<li><strong>Kategória jogosultságok másolása</strong> - Egy kategóriára beállított jogosultságokat átmásolhatunk egy vagy több kategóriára.</li>
															</ul><br>
															<strong>Effektív jogosultságok</strong><br>
															<ul>
																<li><strong>Kategória alapú jogosultságok megtekintése</strong> - Megtekinthetjük a kategóriákra ténylegesen beállított jogosultságokat.</li>
															</ul><br>
															<strong>Telepítési funkciók</strong><br>
															<ul>
																<li><strong>Telepítés ellenőrzése</strong> - phpBB Arcade helyes telepítésének ellenőrzése.</li>
																<li><strong>Játék adatok frissítése</strong> - Játékok méretének automatikus érzékelése és frissítése, ha az adatok nem helyesek.</li>
																<li><strong>Játék telepítő fájlok átkonvertálása</strong> - Játék telepítő fájlok a legújabb verzióra való konvertálása.</li>
															</ul><br>
															<strong>A játékterem MVP moduljai:</strong><br>
															<ul>
																<li><strong>Játékok kezelése</strong> - Játékok szerkesztése/áthelyezése és újraindítása.</li>
																<li><strong>Versenyek kezelése</strong> - Versenyek létrehozása/szerkesztése.</li>
																<li><strong>Csoportversenyek kezelése</strong> - Csoportversenyek létrehozása/szerkesztése.</li>
																<li><strong>Moderátori napló</strong> - Moderátori cselekedetek felsorolása.</li>
															</ul><br>
															<strong>A játékterem FVP moduljai:</strong><br>
															<ul>
																<li><strong>Beállítások kezelése</strong> - Játékterem beállításainak személyre szabása.</li>
																<li><strong>Játék beállítások</strong> - Játék oldalra vonatkozó beállítások személyre szabása.</li>
																<li><strong>Hozzászólás beállítások</strong> - Hozzászólás beállítások személyre szabása.</li>
																<li><strong>Kedvencek kezelése</strong> - Kedvenc játékok kiemelése és törlése.</li>
																<li><strong>Helyi tároló kezelése</strong> - Eszköz böngésző helyi adatok megtekintése és törlése.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_MODULES_AUTH_ANSWER'			=> 'Ahhoz, hogy egy admin lássa a modulokat be kell állítani a jogosultságokat, ezt alap esetben csak egy alapító teheti meg.',
	'ARCADE_ACP_HELP_FAQ_MODULES_AUTH_QUESTION'			=> 'Miért van az, hogy én nem látom az összes AVP modulját a játékteremnek?',
	'ARCADE_ACP_HELP_FAQ_MODULES_DOWNLOAD_ANSWER'		=> 'A felhasználók akkor lesznek képesek letölteni a játékot, ha jogot adsz nekik, ez lehet egyéni vagy csoportos jogosultságok kiosztása, ezen kívül lehetőséged van engedélyezni az AVP modulban a letöltési listát így az oldaladon keresztül képesek lesznek letölteni a játékokat AVP-ből.',
	'ARCADE_ACP_HELP_FAQ_MODULES_DOWNLOAD_QUESTION'		=> 'Hogyan tudok letöltést biztosítani másoknak?',
	'ARCADE_ACP_HELP_FAQ_MODULES_NO_FAV_ANSWER'			=> 'A kedvenc modul csak akkor látható, ha van rá jogosultságunk, a jogosultságokat csak az adminisztrátor módosíthatja.',
	'ARCADE_ACP_HELP_FAQ_MODULES_NO_FAV_QUESTION'		=> 'Miért van az, hogy nem látom a kedvenc modult?',
	'ARCADE_ACP_HELP_FAQ_MODULES_NO_GAMES_ANSWER'		=> 'Ahhoz, hogy játékokat adjunk hozzá először is létre kell hozni a játékoknak egy kategóriát, ezt megteheted a Kategóriák kezelése menüpontban. Az elkészítésük nagyon egyszerűen végrehajtható.',
	'ARCADE_ACP_HELP_FAQ_MODULES_NO_GAMES_QUESTION'		=> 'Miért nem tudok hozzáadni játékokat?',
	'ARCADE_ACP_HELP_FAQ_MODULES_QUESTION'				=> 'Milyen modulok találhatóak a phpBB Arcade?',
	'ARCADE_ACP_HELP_FAQ_MODULES_REQ_DOWNLOAD_ANSWER'	=> 'A modulnak szüksége van az <strong>„allow_url_fopen”</strong> bekapcsolására és telepítve kell, hogy legyen a <strong>cURL library</strong>. Ezt lehet ellenőrizni a PHP információban vagy, ha futtatod az ellenőrzést. Ha az <strong>„allow_url_fopen”</strong> ki van kapcsolva és a <strong>cURL library</strong> nincs telepítve akkor a modul nem fog működni.',
	'ARCADE_ACP_HELP_FAQ_MODULES_REQ_DOWNLOAD_QUESTION'	=> 'Miért nem működik a játék letöltési modult?',
	'ARCADE_ACP_HELP_FAQ_MODULES_USE_DOWNLOAD_ANSWER'	=> 'Mindössze annyit kell tenned, hogy megadod az URL-t a phpBB fórum gyökér könyvtárához, ekkor megjelenik egy lista a játékokról ami letölthető. Ha a játék neve zöld színű akkor az azért van, mert azok a játékot már megtalálhatóak a szerveren. Kérjük vedd figyelembe, hogy a letöltések jogosultsághoz vannak kötve így a letölteni kívánt weboldalra be kell regisztrálni, ha még be is regisztrálsz az idegen weboldalra akkor se biztos, hogy lesz jogosultságod a játékok letöltésére, mert lehetséges, hogy csak speciális csoportoknak vannak engedélyezve, ez esetben érdemes felkeresni a weboldal adminisztrátorát.<br><br><a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/dev/images/acp_download_games.png"><img src="https://jv-arcade.com/dev/images/acp_download_games.png" width="300" alt="AVP Játékok letöltése" title="AVP Játékok letöltése"></a>',
	'ARCADE_ACP_HELP_FAQ_MODULES_USE_DOWNLOAD_QUESTION'	=> 'Hogyan kell használni a „Játékok letöltése” modult?',
	'ARCADE_ACP_HELP_FAQ_SCORING_GUEST_SAVE_ANSWER'		=> 'Ha megadod a vendég csoportnak a megfelelő engedélyt, akkor se nyújthatnak be eredményt. Ez szándékosan van így.',
	'ARCADE_ACP_HELP_FAQ_SCORING_GUEST_SAVE_QUESTION'	=> 'Miért nem tudnak a vendégek eredményeket benyújtani, mikor van rá jogosultságuk?',
	'ARCADE_ACP_HELP_FAQ_SCORING_SAVE_ANSWER'			=> 'Először is ellenőrizd, hogy a beállított játéktípust támogatja-e a játékterem, ha igen akkor ellenőrizd a cookie (sütik) beállításait. Ha az oldalad URL-je <strong>http://www.example.com</strong> akkor a cookie domainnek ilyennek kéne lennie <strong>example.com</strong>, valamint a süti biztonságot az AVP-ben ki kell kapcsolni, mert a süti biztonságot csak a phpBB Arcade játék típus támogatja.',
	'ARCADE_ACP_HELP_FAQ_SCORING_SAVE_QUESTION'			=> 'Miért nem kerülnek mentésre az eredményeim?',
	'ARCADE_ACP_HELP_FAQ_SCORING_TEST_ANSWER'			=> 'A teszt mód arra a célra készült, hogy tesztelni lehessen a játékokat, hogy megfelelően-e működnek. A teszt módban nem lehet elmenteni az elért eredményeket. A játék végén az adminisztrátorok részletes információt kapnak a játékról, ha be van kapcsolva a „phpBB-DEBUG” rendszer.<br><em>A „phpBB-DEBUG” rendszert bekapcsolásához telepítenünk kell a „JVA - Debug” kiterjesztést.</em>',
	'ARCADE_ACP_HELP_FAQ_SCORING_TEST_CAT_ANSWER'		=> 'Lépj be az AVP-be és kattints a kategóriák szerkesztésére, válaszd ki a szerkeszteni kívánt kategóriát és kapcsold át teszt üzemmódba.',
	'ARCADE_ACP_HELP_FAQ_SCORING_TEST_CAT_QUESTION'		=> 'Hogyan tudok tesztelni egy kategóriát?',
	'ARCADE_ACP_HELP_FAQ_SCORING_TEST_QUESTION'			=> 'Mit érek el a teszt üzemmóddal?'
]);
