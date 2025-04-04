<?php
/**
*
* @package phpBB Arcade
* @version $Id: help_user.php 2473 2022-02-01 12:48:39Z KillBill $
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

$lang = array_merge($lang, [
	'ARCADE_HELP_FAQ_ARCADE_CREATE_ANSWER'				=> 'Ezt a kiegészítőt (eredeti formájában) a <a href="https://jv-arcade.com/">JV-Arcade Group</a> készítette, adta ki, és gyakorolja a szerzői jogokat felette. A <a href="https://jv-arcade.com/License.html.">JV-Aracde Engedély</a> alapján fejlesztették és tették közzé, és nem terjeszthető és nem módosítható. További információért lásd a linket.',
	'ARCADE_HELP_FAQ_ARCADE_CREATE_QUESTION'			=> 'Ki készítette ezt a játéktermet?',
	'ARCADE_HELP_FAQ_ARCADE_NOT_AVAILABLE_X_ANSWER'		=> 'Ezt a kiegészítőt a JV-Arcade Group készítette, és licenceli. Ha úgy gondolod, hogy újabb szolgáltatások, funkciók szükségesek a játékterembe, vagy valamilyen működési hibát találtál, látogasd meg a <a href="https://jv-arcade.com/New_Ideas.html">Játékterem, új ötletek centrumát</a>, ahol ezzel kapcsolatban további információkat kaphatsz.',
	'ARCADE_HELP_FAQ_ARCADE_NOT_AVAILABLE_X_QUESTION'	=> 'Miért nem érhető el az X szolgáltatás?',
	'ARCADE_HELP_FAQ_BLOCK_ARCADE'						=> 'phpBB Arcade kérdések',
	'ARCADE_HELP_FAQ_BLOCK_CAT'							=> 'Kategóriákkal kapcsolatos kérdések',
	'ARCADE_HELP_FAQ_BLOCK_CHALLENGE'					=> 'Kihívással kapcsolatos kérdések',
	'ARCADE_HELP_FAQ_BLOCK_FAV'							=> 'Kedvenc játékokkal kapcsolatos kérdések',
	'ARCADE_HELP_FAQ_BLOCK_GENERAL'						=> 'Általános kérdések',
	'ARCADE_HELP_FAQ_BLOCK_GROUP_TOUR'					=> 'Csoport versennyel kapcsolatos kérdések',
	'ARCADE_HELP_FAQ_BLOCK_INTRO'						=> 'Bevezető',
	'ARCADE_HELP_FAQ_BLOCK_PLAYING'						=> 'Játszással kapcsolatos kérdések',
	'ARCADE_HELP_FAQ_BLOCK_POINTS'						=> 'Pontrendszerrel kapcsolatos kérdések',
	'ARCADE_HELP_FAQ_BLOCK_SEARCH'						=> 'Kereséssel kapcsolatos kérdések',
	'ARCADE_HELP_FAQ_BLOCK_TOUR'						=> 'Versennyel kapcsolatos kérdések',
	'ARCADE_HELP_FAQ_BLOCK_USER_SET'					=> 'Felhasználói beállítások',
	'ARCADE_HELP_FAQ_CAT_AGE_ANSWER'					=> 'Előfordulhat, hogy egy kategóriába az adminisztrátorok gyenge, könnyen játszható játékokat gyűjtenek össze a kiskorúak számára, ezért csak a fiatalok játszhatnak abban a kategóriában. Ezen kívül vannak olyan játékok amiket viszont a kiskorúaktól akarnak távol tartani ezért csak nagykorúak léphetnek be egyes kategóriákba.',
	'ARCADE_HELP_FAQ_CAT_AGE_QUESTION'					=> 'Egyes kategóriákat életkor határ véd, miért?',
	'ARCADE_HELP_FAQ_CAT_PASSWORD_ANSWER'				=> 'Ha egy kategóriát jelszó véd akkor azt egy adminisztrátortól kell kikérni.',
	'ARCADE_HELP_FAQ_CAT_PASSWORD_QUESTION'				=> 'Kategória jelszót kér, mi a teendő?',
	'ARCADE_HELP_FAQ_CAT_STAT_ANSWER'					=> 'Igen, ha belépsz a kategóriába akkor a kategória neve mellett fogod megtalálni a „Kategória statisztika megtekintése” linket.',
	'ARCADE_HELP_FAQ_CAT_STAT_QUESTION'					=> 'Szeretném a kategóriák egyenkénti statisztikáját megtekinteni, lehetséges?',
	'ARCADE_HELP_FAQ_CAT_USER_PERMISSION_ANSWER'		=> 'Ha belépsz egy kategóriába akkor alul megtalálod a „Játéktermi jogosultságok” címet, és alatta fel van sorolva a rád vonatkozó jogosultságok.',
	'ARCADE_HELP_FAQ_CAT_USER_PERMISSION_QUESTION'		=> 'Milyen jogosultságok vonatkoznak rám?',
	'ARCADE_HELP_FAQ_CHALLENGE_ACCEPT_ANSWER'			=> 'Amennyiben érkezik számodra egy kihívás az akkor teljes amikor a kihívás oldalon elfogadod, vagy elutasítod, ha ez megtörtént utána lehet játszani.',
	'ARCADE_HELP_FAQ_CHALLENGE_ACCEPT_QUESTION'			=> 'Érkezett számomra egy kihívás, lejátszottam a játékot, de továbbra is azt jelzi, hogy érkezett számomra egy kihívás, miért?',
	'ARCADE_HELP_FAQ_CHALLENGE_ARRIVED_ANSWER'			=> 'Azok a kihívások amik számodra érkeztek. Elfogadhatod, vagy elutasíthatod őket.',
	'ARCADE_HELP_FAQ_CHALLENGE_ARRIVED_QUESTION'		=> 'Mit jelent az „Érkezett kihívás”?',
	'ARCADE_HELP_FAQ_CHALLENGE_BUG_GAME_ANSWER'			=> 'Ilyen esetben a folyamatban lévő kihívásoknál szerepelő hibabejelentési linket kell használni, a jelentett játék kihívása azonnal törlésre fog kerülni, ha volt tét akkor azt visszautalja a rendszer.<br><i>Vedd figyelembe, hogy a játék hibabejelentése nem lehetséges, ha egy adminisztrátor kikapcsolja a hibabejelentési rendszert.</i>',
	'ARCADE_HELP_FAQ_CHALLENGE_BUG_GAME_QUESTION'		=> 'Kihívtak, de az érintett játék hibás, mi a teendő?',
	'ARCADE_HELP_FAQ_CHALLENGE_DRAW_BET_ANSWER'			=> 'Amennyiben egy kihívás döntetlen úgy a feltett tét mindkét felhasználónak visszautalásra fog kerülni.',
	'ARCADE_HELP_FAQ_CHALLENGE_DRAW_BET_QUESTION'		=> 'Mi történik a téttel akkor, ha a kihívás döntetlen lesz?',
	'ARCADE_HELP_FAQ_CHALLENGE_END_ANSWER'				=> 'A kihívás minden egyes menetéről privát üzenet értesít, amennyiben engedélyezve van a privát üzenet.',
	'ARCADE_HELP_FAQ_CHALLENGE_END_QUESTION'			=> 'Honnan tudom, hogy vége a kihívásnak?',
	'ARCADE_HELP_FAQ_CHALLENGE_EXP_TIME_ANSWER'			=> 'A lejárati idő azt az időt jelzi mikor is a kihívás automatikusan törlésre kerül, ez idő alatt a kihívást teljesíteni kell.',
	'ARCADE_HELP_FAQ_CHALLENGE_EXP_TIME_QUESTION'		=> 'Mi az a „Lejárati idő”?',
	'ARCADE_HELP_FAQ_CHALLENGE_GAME_CHAMP_ANSWER'		=> 'Ha normál ablakban játszol akkor a játék opciók táblában szerepel a „Bajnok kihívása” link. Kattints rá, és akkor egyszerűen kihívhatod a bajnokot.',
	'ARCADE_HELP_FAQ_CHALLENGE_GAME_CHAMP_QUESTION'		=> 'Hogyan tudom egyszerűen kihívni egy játék bajnokát?',
	'ARCADE_HELP_FAQ_CHALLENGE_ONGOING_ANSWER'			=> 'Azok a kihívások amik már el lettek fogadva, és a kihívás már mind két fél számára játszható, de te vagy a másik fél se játszotta még le. Ha egy játék hibás lenne akkor esélyünk van bejelenteni, és a kihívás ebben az esetben törlésre kerül.',
	'ARCADE_HELP_FAQ_CHALLENGE_ONGOING_QUESTION'		=> 'Mit jelent a „Folyamatban lévő kihívás”?',
	'ARCADE_HELP_FAQ_CHALLENGE_PERMISSION_ANSWER'		=> 'A kihívás csak akkor látható, ha be van kapcsolva és az adminisztrátor engedélyezi a hozzáférést.',
	'ARCADE_HELP_FAQ_CHALLENGE_PERMISSION_QUESTION'		=> 'Miért nem látom a kihívást?',
	'ARCADE_HELP_FAQ_CHALLENGE_POINTS_ANSWER'			=> 'Ha kihív téged egy felhasználó, és tétnek meghatározz például 100 pontot akkor az a kihívás pillanatában levonásra kerül az egyenlegedből, ha az érintett játéknak költsége is van például: 5 pont, akkor az is levonásra kerül, tehát összesen ebben az esetben 105 pontot von le tőled a rendszer, azért, hogy fedezve legyen a teljes kihívás lejátszása. Amennyiben elutasítod a kihívást abban az esetben azonnal visszatérítésre kerül a levont összeg. Ha egy kihívás elfogadásra kerül, de a játék nem kerül lejátszásra, és közben a kihívás ideje lejár, akkor is vissza utalásra kerül a tét és a játék költség.',
	'ARCADE_HELP_FAQ_CHALLENGE_POINTS_QUESTION'			=> 'Kihívtak, és eltűnt egy csomó pontom, miért?',
	'ARCADE_HELP_FAQ_CHALLENGE_PRACTICE_ANSWER'			=> 'Míg a kihívást nem fogadod el addig igen, de miután már elfogadtad a kihívást már nincs lehetőség további gyakorlásra.',
	'ARCADE_HELP_FAQ_CHALLENGE_PRACTICE_QUESTION'		=> 'Érkezett számomra egy kihívás, van-e mód gyakorlásra?',
	'ARCADE_HELP_FAQ_CHALLENGE_PREVENT_ANSWER'			=> 'A felhasználói vezérlőpultban bármikor lehetőséged van kikapcsolni a kihívást.',
	'ARCADE_HELP_FAQ_CHALLENGE_PREVENT_QUESTION'		=> 'Hogyan tudom megakadályozni, hogy kihívjanak?',
	'ARCADE_HELP_FAQ_CHALLENGE_SENT_ANSWER'				=> 'Azok a kihívások, amiket te indítottál más felhasználók felé. Ezeket a kihívásokat vissza is vonhatod.',
	'ARCADE_HELP_FAQ_CHALLENGE_SENT_QUESTION'			=> 'Mit jelent a „Küldött kihívás”?',
	'ARCADE_HELP_FAQ_CHALLENGE_START_ANSWER'			=> 'A kihívás oldalán klikk a kihívás gombra, erre betöltődik az adott űrlap, amiben a következők szerepelnek:
															<ul>
																<li>Játékok listája.</li>
																<li>Kedvencek listája. <em>Amennyiben van felvéve kedvenc játék.</em></li>
																<li>Felhasználói lista, vagy felhasználó megadása.</li>
																<li>Barátok listája. <em>Amennyiben van felvéve barát.</em></li>
															</ul>
															<br>Itt egy játékot és felhasználót kell, hogy ki válasz amennyiben ez megtörtént klikk a kihívás elküldése gombra.
															<br>Megjegyzés: <em>Amennyiben használatban van egy pontrendszer, tétet is meg lehet adni. A tétet megszabhatja, vagy akár fix tétet is beállíthat egy adminisztrátor.</em>',
	'ARCADE_HELP_FAQ_CHALLENGE_START_QUESTION'			=> 'Hogyan tudok elindítani egy kihívást?',
	'ARCADE_HELP_FAQ_FAV_ANSWER'						=> 'Ha egy játékot kedvencnek jelölsz akkor nem kell később azzal foglalkozni, hogy kikeresd a számos játékok közül, hanem egyszerűen megtalálhatod a kedvenceid közt. Ezzel magadnak spórolsz egy csomó időt.',
	'ARCADE_HELP_FAQ_FAV_HIGHLIGHT_ANSWER'				=> 'Lehetőséged van a kedvencek közül is kiemelni azokat a játékokat amivel leginkább játszol, ezt megteheted a felhasználói vezérlő pultban.',
	'ARCADE_HELP_FAQ_FAV_HIGHLIGHT_QUESTION'			=> 'Túl sok a kedvenc játékom, hogyan tudok könnyebben rátalálni egyes játékokra?',
	'ARCADE_HELP_FAQ_FAV_LIMIT_ANSWER'					=> 'Az adminisztrátor által beállított maximum felvehető kedvenc játékok számát elérted. Így nem tudsz további kedvenc játékokat felvenni, kivéve, ha törölsz egy két régebbi kedvenc játékot. Illetve, ha úgy véled, hogy túl kicsi a limit szám, akkor érdemes megkérni egy adminisztrátort, hogy ha lehetséges emeljen a limiten.',
	'ARCADE_HELP_FAQ_FAV_LIMIT_QUESTION'				=> 'Kedvenc hozzáadása azt írja „Limit hiba”, mi ez?',
	'ARCADE_HELP_FAQ_FAV_QUESTION'						=> 'Mire jó egy játékot kedvencnek jelölni?',
	'ARCADE_HELP_FAQ_GENERAL_GAME_BUG_ANSWER'			=> 'A hibás játékokat célszerű jelenteni az adminisztrátornak, hogy a játékot mihamarabb javítani tudják. Minden játék tartalmaz egy hibabejelentési linket amit ilyen esetben kell használni. A link használata azért fontos mert az tartalmazza az összes játék információt is, amit külön nekünk nem kell megírni, csak is a felmerülő hiba jelenséget. A hiba leírásába célszerű megadni, hogy a hiba melyik böngészőnél jelentkezett, ugyanis nem biztos, hogy a hiba előfordul másik böngésző használata esetében is. Továbbá érdemes az is leírni, hogy milyen eszközön történt a hiba Pl:(Pc, tablet vagy mobil). Továbbá adjuk meg a képernyőnk felbontását is, amelyen a játékot játszuk, mert lehet, hogy más felbontásban a hiba nem fog jelentkezni.<br><i>Vedd figyelembe, hogy a játék hibabejelentése nem lehetséges, ha egy adminisztrátor kikapcsolja a hibabejelentési rendszert.</i>',
	'ARCADE_HELP_FAQ_GENERAL_GAME_BUG_QUESTION'			=> 'Ha egy játék hibás akkor mi a teendő?',
	'ARCADE_HELP_FAQ_GENERAL_GAME_DOWNLOAD_ANSWER'		=> 'Igen, amennyiben az adminisztrátor engedélyezi.',
	'ARCADE_HELP_FAQ_GENERAL_GAME_DOWNLOAD_QUESTION'	=> 'A játékokat le lehet tölteni?',
	'ARCADE_HELP_FAQ_GENERAL_GAME_NAME_LINK_ANSWER'		=> 'Amennyiben van jogosultságod a játékkal játszani abban az esetben a játék neve linkként jelenik meg.',
	'ARCADE_HELP_FAQ_GENERAL_GAME_NAME_LINK_QUESTION'	=> 'A játék nevek többsége link, de egyes nevek sima szövegként jelennek meg, miért?',
	'ARCADE_HELP_FAQ_GENERAL_GAME_RANDOM_ANSWER'		=> 'A véletlen játék azért jó, mert nem egy bizonyos kategóriából választ ki egy játékot, hanem bármit elénk tárhat így nem válik unalmassá, ha például állandóan egy kategóriának a játékaival játszunk.',
	'ARCADE_HELP_FAQ_GENERAL_GAME_RANDOM_QUESTION'		=> 'Mire jó a véletlen játék?',
	'ARCADE_HELP_FAQ_GENERAL_GAME_RATING_ANSWER'		=> 'A játékok értékelése egy igen hasznos funkció. A felhasználók számára megkönnyíti a keresést, ugyanis, ha egy játékot minél többen értékelnek jóra akkor a játék a statisztikában is mindig előrébb kerül, így a legjobbra értékelt játékot a felhasználók könnyen megtalálják.',
	'ARCADE_HELP_FAQ_GENERAL_GAME_RATING_QUESTION'		=> 'Mire jó a játékok értékelése?',
	'ARCADE_HELP_FAQ_GENERAL_GAME_USER_STAT_ANSWER'		=> 'Amennyiben van rá jogosultságod a játéktermi menüben kattints a „Statisztikák” menü pontra, és ott a lap alján válaszd ki az adott játékot, felhasználót.',
	'ARCADE_HELP_FAQ_GENERAL_GAME_USER_STAT_QUESTION'	=> 'Hogyan tekinthetem meg egy adott játék, felhasználó statisztikai adatait?',
	'ARCADE_HELP_FAQ_GENERAL_RANG_LIST_ANSWER'			=> 'A ranglista a megszerzett trófeák mennyiségét veszi figyelembe, minél több trófeával rendelkezik egy felhasználó annál jobb rangsorolásba kerül. A rang kép meghatározását az adminisztrátor adja meg, mégpedig úgy, hogy adott mennyiségű trófeához köti az egyes rang képeket.',
	'ARCADE_HELP_FAQ_GENERAL_RANG_LIST_QUESTION'		=> 'Mi az a ranglista?',
	'ARCADE_HELP_FAQ_GENERAL_SUPER_CHAMP_ANSWER'		=> 'A szuperbajnok az a felhasználó aki tartja a legmagasabb elért eredményt az adott játékban. A szuperbajnok nem rendelkezik trófeával, kivéve, ha ő áll az első helyen is. Ha az adminisztrátor újraindítja a játéktermet akkor lehetősége van megtartani a szuperbajnokokat, így lehetőség van látni, hogy mi is volt az eddig legmagasabb elért eredmény egy játékban.',
	'ARCADE_HELP_FAQ_GENERAL_SUPER_CHAMP_QUESTION'		=> 'Mi az a szuperbajnok?',
	'ARCADE_HELP_FAQ_GENERAL_USER_RECORD_ANSWER'		=> 'Igen, a felhasználó statisztikai adatainál az avatar alatt kattints az „Összes rekord megtekintése” linkre.',
	'ARCADE_HELP_FAQ_GENERAL_USER_RECORD_QUESTION'		=> 'Megtudom-e nézni egy felhasználónak, csak a rekordjait?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_EXPT_ANSWER'			=> 'Igen, a verseny indulása után kijelzésre kerül.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_EXPT_RESULT_QUESTION'	=> 'Látható-e a lejárati idő?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_EXP_ANSWER'				=> 'Ha a verseny elindul, akkor kap egy lejárati időt, amennyiben ez idő alatt a verseny nem kerül befejezésre, akkor az automatikusan törlődik.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_EXP_RESULT_QUESTION'	=> 'Eltűnt egy folyamatban lévő verseny, miért?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_PLAY_ANSWER'			=> 'A játékot a verseny indulását követően lejátszhatod, amennyiben tovább jutsz a következő szintre, akkor abban az esetben, akkor indul a következő játszás, ha az ellenfeled is feljutott ugyan arra a szintre, de minden játék indításnál, ha a játék versenyben vesz részt, akkor erről információt fogsz látni.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_PLAY_RESULT_QUESTION'	=> 'Mikor játszhatom le a verseny játékot?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_SCORE_ANSWER'			=> 'Igen, miután már mindketten lejátszottátok a játékot. Az elért pontszám megtekintéséhez vidd az ellenfeled avatarjára az egeret és már is láthatód az elért pontszámát.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_SCORE_RESULT_QUESTION'	=> 'Láthatóm-e az ellenfelem elért pontszámát?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_START_ANSWER'			=> 'A verseny automatikusan elindul, amikor is az összes férőhely betelt.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_START_RESULT_QUESTION'	=> 'Mikor indul el a verseny?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_SUB_ANSWER'				=> 'A csoportverseny főoldalán láthatód, ha van új verseny. A verseny fa felépítésében a legalsó sorban kattints egy üres helyre, ezzel fel is iratkoztál.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_SUB_RESULT_QUESTION'	=> 'Hogyan iratkozhatok fel a csoportversenyre?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_UNSUB_ANSWER'			=> 'Igen, de csak abban az esetben, ha a verseny még nem indult el. A leiratkozáshoz az elfoglalt helyen kattints az avatarodra.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_UNSUB_RESULT_QUESTION'	=> 'Van-e mód a versenyről leiratkozni?',
	'ARCADE_HELP_FAQ_INTRO_ARCADE_ANSWER'				=> 'A játékterem a felhasználók szórakoztatását biztosítja, különféle játékokkal. A játékterem használatának engedélyezése az adminisztrátortól függ, de neked is lehetőséged van ki- vagy bekapcsolni egyes szolgáltatásokat a felhasználói vezérlő pultban. Ezzel együtt az alábbi útmutatót valószínűleg hasznosnak fogod találni.',
	'ARCADE_HELP_FAQ_INTRO_ARCADE_QUESTION'				=> 'Mi az a játékterem?',
	'ARCADE_HELP_FAQ_INTRO_FUN_ANSWER'					=> 'A játékterem számos funkciókat tartalmaz, de csak azok elérhetőek amiket az adminisztrátor bekapcsol illetve engedélyez.
															<br><strong>Funkciók:</strong>
															<ul>
																<li>Beállítások, személyre szabás.</li>
																<li>Kategorizált játékok.</li>
																<li>Új játékok megtekintése.</li>
																<li>Véletlen játék játszása.</li>
																<li>Kedvenc játékok kiválasztása ill. kiemelése.</li>
																<li>Játékok értékelése.</li>
																<li>Játékok keresése.</li>
																<li>Játékok hibabejelentése.</li>
																<li>Játékok letöltése.</li>
																<li>Játszás új ablakban.</li>
																<li>Játszás teljes képernyőn.</li>
																<li>Játékok átméretezése.</li>
																<li>Játék háttérvilágítás ki/be kapcsolása.</li>
																<li>Játékba integrált menü.</li>
																<li>Verseny, több játék és felhasználó között.</li>
																<li>Felhasználók kihívása egy játékban.</li>
																<li>Véletlen kihívás generálása.</li>
																<li>Részletes különálló statisztikák</li>
																<li>Játékok statisztikái.</li>
																<li>Felhasználók statisztikái.</li>
																<li>Kategóriák statisztikái.</li>
																<li>Ranglista.</li>
																<li>Pontrendszer használat.</li>
																<li>És még sok más…</li>
															</ul>',
	'ARCADE_HELP_FAQ_INTRO_FUN_QUESTION'				=> 'Milyen funkciókat tartalmaz a játékterem?',
	'ARCADE_HELP_FAQ_INTRO_REG_ANSWER'					=> 'A regisztráció nem feltétlenül kötelező, a játékterem adminisztrátorán múlik, hogy a játék használatához szükséges-e. Vedd figyelembe, hogy ha regisztrálsz és belépsz a játékterembe akkor számos további hasznos funkcióhoz férhetsz hozzá, mint például: (Az elért pontszámaidat elmentheted, kommentálhatod a játékokat, kijelölhetsz kedvenc játékokat, értékelheted a játékokat, más felhasználókat kihívhatsz egy versenyre, vagy akár részt is vehetsz egy elindított versenyen és még sok más hasznos dolog…), természetesen ezek a funkciók használatát is az adminisztrátor állítja be így lehet egyes funkciók nincsenek használatban.',
	'ARCADE_HELP_FAQ_INTRO_REG_QUESTION'				=> 'Miért kell egyáltalán regisztrálnom?',
	'ARCADE_HELP_FAQ_PLAYING_BACKLIGHT_ANSWER'			=> 'A háttérvilágítás a játék körüli mezők fényei. A háttérvilágítás kikapcsolásának három hasznos tulajdonsága van.
															<ul>
																<li>A játék körüli teret elsötétíti, hogy ne zavarjon.</li>
																<li>A játék körüli gombokat inaktívvá teszi, hogy véletlenül se kattintsunk egy linkre, ez megakadályozza, hogy másik oldal töltődjön be játék közben.</li>
																<li>Letiltásra kerül a weboldal görgetése, így elkerüljük a játék közbeni véletlen görgetéseket.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_BACKLIGHT_QUESTION'		=> 'Mi az a háttérvilágítás?',
	'ARCADE_HELP_FAQ_PLAYING_BOARD_LOGOUT_ANSWER'		=> 'Ennek két oka lehet:
															<ul>
																<li>A legvalószínűbb ok, hogy a fórum munkameneted lejárt.</li>
																<li>Az adminisztrátor törölte minden felhasználó munkamenetét.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_BOARD_LOGOUT_QUESTION'		=> 'Eredmény mentésnél kidob a weboldal, miért?',
	'ARCADE_HELP_FAQ_PLAYING_GAME_MAX_MIN_ANSWER'		=> 'A játék minden esetben a saját méretén indul el amit az adminisztrátor állított be. Azonban a szoftver minden esetben ellenőrzi, hogy a beállított méret elfér-e a játéknak kiszabott helyen. Amennyiben a hely kisebb, úgy a szoftver automatikusan felderíti a látható tér méretét és annak megfelelően állítja be a játék méretét. Amennyiben a saját beállításunkban engedélyezzük a „Játék automatikus átméretezését” akkor ebben az esetben a szoftver figyelembe veszi azt is, hogy ha a látótér nagyobb mint a játék beállított mérete, akkor a játék automatikusan ehhez a legnagyobb mérethez lesz hozzáigazítva. A szoftver semmilyen körülmény között nem engedélyezi, hogy a látókörön kívül essen a játék mérete, minden ilyennemű észlelés esetében a szoftver beavatkozik és átméretezi a játékot.',
	'ARCADE_HELP_FAQ_PLAYING_GAME_MAX_MIN_QUESTION'		=> 'A játék milyen méretben indul el?',
	'ARCADE_HELP_FAQ_PLAYING_GAME_RESIZE_ANSWER'		=> 'Ennek két oka lehet:
															<ul>
																<li>A játék elérte a legkisebb megengedett szélességi vagy magassági méretet, ami 180px.</li>
																<li>A játék elérte a legnagyobb méretet, amely belefér a látótérbe.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_GAME_RESIZE_QUESTION'		=> 'Miért nem működnek az átméretezési gombok?',
	'ARCADE_HELP_FAQ_PLAYING_HIDDEN_SCORE_ANSWER'		=> 'Az érintett játék kihívás alatt áll, ezért az érintett felhasználók eredménye rejtve van mindenki számára, míg a kihívás véget nem ér.',
	'ARCADE_HELP_FAQ_PLAYING_HIDDEN_SCORE_QUESTION'		=> 'Az eredmény felsorolásnál illetve, a bajnok eredménye helyén a „Rejtve” szöveg található, miért?',
	'ARCADE_HELP_FAQ_PLAYING_HSD_ANSWER'				=> 'Igen van. A beállításodban kapcsold be a „Játék automatikus nagyítása” funkciót és a játék a lehető legnagyobb méretben fog elindulni.',
	'ARCADE_HELP_FAQ_PLAYING_HSD_QUESTION'				=> 'Nagy felbontású kijelzőt használok és az összes játék kicsibe indul, van-e megoldás?',
	'ARCADE_HELP_FAQ_PLAYING_INFO_BLOCK_ANSWER'			=> 'Ha az információs blokk nem látszik, akkor valószínűleg be van zárva, így a menüből kell kinyitni.',
	'ARCADE_HELP_FAQ_PLAYING_INFO_BLOCK_QUESTION'		=> 'Az információ blokk a beállításomban be van kapcsolva, de mégsem látszik, miért?',
	'ARCADE_HELP_FAQ_PLAYING_MENU_BUT_ANSWER'			=> 'A menüben összesen 12 gomb található, de több tényezőtől is függnek, hogy mely gombok láthatóak.<br>Menü gombok és függőségei:
															<ul>
																<li>1. Információ - Látható, ha van információ a következők egyikéről: (játékleírás, játékvezérlő, bajnok komment vagy, ha van jogosultságunk a „Kik játszanak a játékteremben?” megtekintésére).</li>
																<li>2. Teljes/Normál képernyő - Minden esetben látható, ha a böngésző támogatja.</li>
																<li>3. Rekordok - Látható, ha engedélyezve van a statisztika elérése és létezik eredmény.</li>
																<li>4. Opciók - Mindig látható, de a tartalom eltérő lehet a jogosultság beállítások miatt.</li>
																<li>5. Játék értékelése - Látható, ha van jogosultságunk.</li>
																<li>6. Kedvencek hozzáadása/Törlése - Látható, ha van jogosultságunk és még nem értük el maximum limitet.</li>
																<li>7. Játék elforgatása - Csak akkor látható, ha a játék beállítása ezt engedélyezi és nem forgatható eszközt használunk.</li>
																<li>8. Háttérvilágítás le/fel kapcsolása - Normál ablakban mindig látható.</li>
																<li>9. Játékidő - Mindig látható.</li>
																<li>10. Játék újraindítása - Mindig látható.</li>
																<li>11. Játék adatok törlése - Látható, ha a szoftver úgy érzékeli, hogy a játék használja a böngésző helyi adat tárolását.</li>
																<li>12. Információ blokk nyitás/zárás - Látható, ha engedélyezve van a beállításunkban.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_MENU_BUT_QUESTION'			=> 'Milyen gombok vannak a menüben és mikor láthatóak?',
	'ARCADE_HELP_FAQ_PLAYING_MENU_DATA_CLOSE_ANSWER'	=> 'Az adatmező a következő módokon zárható be:
															<ul>
																<li>1. Az adat címre kattintasz.</li>
																<li>2. A menüre kattintasz.</li>
																<li>3. Dupla kattintás az adatmezőre.</li>
																<li>4. Adatmezőn kívül kattintasz.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_MENU_DATA_CLOSE_QUESTION'	=> 'A menüből kikért adatmezőt hogyan zárhatom be?',
	'ARCADE_HELP_FAQ_PLAYING_MENU_OPEN_ANSWER'			=> 'A menü biztonsági okból el van látva egy időzítővel, hogy ne nyílhasson ki magától játszás közben. A menü abban az esetben nyílik ki, ha legalább 0.5 másodpercig nyomva tartjuk.',
	'ARCADE_HELP_FAQ_PLAYING_MENU_OPEN_QUESTION'		=> 'Hiába kattintok a menüre nem nyílik ki, miért?',
	'ARCADE_HELP_FAQ_PLAYING_MOBILE_ANSWER'				=> 'Igen, minden játék elindítható mobiltelefonon. Azonban, ha csak mobiltelefonon szeretnél játszani, akkor érdemes a beállításodban bekapcsolnod a billentyűzetes játékok kiszűrését, mivel ezekkel a játékokkal úgysem fogsz tudni játszani billentyűzet nélkül.',
	'ARCADE_HELP_FAQ_PLAYING_MOBILE_QUESTION'			=> 'Játszhatok-e mobiltelefonon?',
	'ARCADE_HELP_FAQ_PLAYING_NOT_PLAY_ANSWER'			=> 'Ennek számos oka lehet:
															<ul>
																<li>A böngészőben nincs engedélyezve a „javascript futtatása”.</li>
																<li>Az adminisztrátor nem adott engedélyt az adott játék játszására.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_NOT_PLAY_QUESTION'			=> 'Miért nem tudok játszani?',
	'ARCADE_HELP_FAQ_PLAYING_NOT_SAVE_SCORE_ANSWER'		=> 'Ennek számos oka lehet:
															<ul>
																<li>Először is győződj meg, hogy a böngésződben engedélyezve legyen a „Cookies”, azaz a sütik használata.</li>
																<li>Győződj meg arról, hogy be-e vagy jelentkezve.</li>
																<li>A játék helytelen elindítása.</li>
																<li>A játék hibás.</li>
																<li>Az adminisztrátor nem adott engedélyt az adott játék eredmény benyújtására.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_NOT_SAVE_SCORE_QUESTION'	=> 'Miért nem tudom menteni az elért pontszámaimat?',
	'ARCADE_HELP_FAQ_PLAYING_POPUP_ANSWER'				=> 'Igen, amennyiben az adminisztrátor engedélyezi.',
	'ARCADE_HELP_FAQ_PLAYING_POPUP_QUESTION'			=> 'Játszhatok-e egy játékot új ablakban?',
	'ARCADE_HELP_FAQ_PLAYING_RESET_GAME_DATA_ANSWER'	=> 'Ha a játék a böngésző helyi tárolójába menti az adatokat, akkor két lehetőséget is biztosítunk az adatok törlésére. Amennyiben a játék más tárolóba menti az adatokat, ami igen ritka, úgy neked azt manuálisan kell megkeresni és törölni a böngészőből. Ha egy beágyazott játék adatait szeretnéd törölni, akkor ebben az esetben fel kell keresni azt a weboldalt ahol a játék megtalálható és az ahhoz a weboldalhoz tartozó böngészési adatokból ki kell keresni az érintett játék adatait és törölni.<br>
Böngésző helyi tároló adatok törlése:
<ul>
	<li>Ha a játékkal éppen játszol, akkor nyisd meg a menüt és kattints a „Játék adatok törlése” gombra.</li>
	<li>A felhasználói vezérlőpultban használd a „Helyi tároló kezelése” modult és ott kiválaszthatód, hogy mely játékhoz tartozó adatokat szeretnéd törölni.</li>
</ul>',
	'ARCADE_HELP_FAQ_PLAYING_RESET_GAME_DATA_QUESTION'	=> 'Van-e lehetőség a játékot teljesen az elejéről újrakezdeni?',
	'ARCADE_HELP_FAQ_PLAYING_RESTART_ANSWER'			=> 'A „Játék újraindítása” link csak a játék elindítása után lesz aktív. Használat után a gomb/link újra inaktív lehet egy ideig, amit az adminisztrátor határoz meg, hogy milyen időközönként használható újra.',
	'ARCADE_HELP_FAQ_PLAYING_RESTART_QUESTION'			=> 'A Játék újraindítása link inaktív, miért?',
	'ARCADE_HELP_FAQ_PLAYING_SESSION_ANSWER'			=> 'Igen, a játéktermi beállításokban lehetőséged van ki/be kapcsolni a kijelzést. Így a játszási oldalon láthatod, hogy még mennyi idő van hátra mielőtt lejárna a munkameneted.<br>Amennyiben már kevés idő van hátra, akkor érdemes kilépni és újra bejelentkezni a weboldalra még a játszás előtt.',
	'ARCADE_HELP_FAQ_PLAYING_SESSION_QUESTION'			=> 'Meg tudom-e tekinteni a munkameneteim idejét?',
	'ARCADE_HELP_FAQ_PLAYING_WHITE_SCREEN_ANSWER'		=> 'Előfordulhat, hogy egy játék igen nagy terjedelmű ezért a lassabb internet kapcsolat esetében várni kell míg a játék betöltődik. Ezt elkerülhetjük, ha a beállításunkban nem tiltjuk le az „Előtöltők” használatát.',
	'ARCADE_HELP_FAQ_PLAYING_WHITE_SCREEN_QUESTION'		=> 'Játék elindításánál fehér képernyő, miért?',
	'ARCADE_HELP_FAQ_POINTS_COST_ANSWER'				=> 'A játék költség azaz összeg ami levonásra kerül minden egyes játék elindításánál, vedd figyelembe, hogy a költségek egyes kategóriákban, játékokban eltérő lehet. A költség összegét az adminisztrátor határozza meg.',
	'ARCADE_HELP_FAQ_POINTS_COST_QUESTION'				=> 'Mit takar a játék költség?',
	'ARCADE_HELP_FAQ_POINTS_DOWNLOAD_COST_ANSWER'		=> 'A játék letöltési költség azaz összeg ami levonásra kerül minden egyes játék letöltése esetén, vedd figyelembe, hogy a költségek egyes kategóriákban, játékokban eltérő lehet. A költség összegét az adminisztrátor határozza meg.',
	'ARCADE_HELP_FAQ_POINTS_DOWNLOAD_COST_QUESTION'		=> 'Mit takar a játék letöltési költség?',
	'ARCADE_HELP_FAQ_POINTS_JACKPOT_ANSWER'				=> 'A főnyeremény a játék költségéből származik. Minden játék indításánál a játék költsége hozzáadásra kerül a főnyereményhez, így a főnyeremény mindaddig növekszik míg azt valaki meg nem szerzi. A főnyeremény min/max. összegét az adminisztrátor meghatározhatja.',
	'ARCADE_HELP_FAQ_POINTS_JACKPOT_QUESTION'			=> 'Mit takar a főnyeremény?',
	'ARCADE_HELP_FAQ_POINTS_REWARD_ANSWER'				=> 'A jutalom alapesetben két esetben kapható meg: Szuperbajnoki, bajnoki cím megszerzése esetén. A jutalom összegét az adminisztrátor határozza meg.',
	'ARCADE_HELP_FAQ_POINTS_REWARD_QUESTION'			=> 'Mit takar a jutalom?',
	'ARCADE_HELP_FAQ_POINTS_SYSTEM_ANSWER'				=> 'A pontrendszer egy összetett kiegészítő amit az adminisztrátor adhat hozzá a fórumhoz illetve a játékterem használatához. A pontrendszer használatakor a játékterem használhat különféle jutalmakat és költségeket, ezeket is az adminisztrátor határozza meg.',
	'ARCADE_HELP_FAQ_POINTS_SYSTEM_QUESTION'			=> 'Mi az a pontrendszer?',
	'ARCADE_HELP_FAQ_SEARCH_100PH_GAME_ANSWER'			=> 'Igen, ha a keresendő játék neve elé egy <strong>@</strong> teszünk.',
	'ARCADE_HELP_FAQ_SEARCH_100PH_GAME_QUESTION'		=> 'Szeretném, ha a kereső csak is a teljesen megegyező játéknevet adja ki, lehetséges ez?',
	'ARCADE_HELP_FAQ_SEARCH_EXISTS_NOT_FOUND_ANSWER'	=> 'Ennek három oka is lehet:
															<ul>
																<li>A játék törölve lett.</li>
																<li>A játékhoz már nincs jogosultságod.</li>
																<li>A keresőben kiválasztásra került egy kategória és a játék ott nem szerepel, ebben az esetben a kategória választást módosítsd az „Összes kategóriára”.</li>
															</ul>',
	'ARCADE_HELP_FAQ_SEARCH_EXISTS_NOT_FOUND_QUESTION'	=> 'Keresek egy olyan játékot, amit tudok, hogy létezik, de a kereső nem adja ki, miért?',
	'ARCADE_HELP_FAQ_SEARCH_GAME_ANSWER'				=> 'Ha a keresési funkció be van kapcsolva, akkor középtájt találod meg a keresési mezőt ahova beírhatod a kereset játék nevét. Továbbá lehetőség van a játék kezdőbetűire is rákeresned, ehhez elég rákattintanod a kereset kezdőbetűre. Továbbá szűkítheted a keresést egy adott kategóriára, ehhez csak azt kell tenned, hogy kiválasztasz egy kategóriát. Amennyiben megnyitsz egy kategóriát és ott is aktív a kereső használata, akkor automatikusan a kereső kijelöli az adott kategóriát, amit természetesen módosíthatsz, például az összes kategóriára.',
	'ARCADE_HELP_FAQ_SEARCH_GAME_QUESTION'				=> 'Hogyan tudok megkeresni egy játékot?',
	'ARCADE_HELP_FAQ_SEARCH_SNIP_GAME_ANSWER'			=> 'A kereső figyelembe veszi automatikusan a szó végeket. Tehát, ha az írjuk a keresőbe, hogy <strong>pac</strong>, akkor a <strong>Pacman</strong> nevű játékot is ki fogja adni.<br>Ha azonban azt szeretnénk, hogy a <strong>pac</strong> szóra kiadja a <strong>Big Pacman</strong> nevet is, akkor a keresendő név elé tegyünk egy <strong>*</strong>-ot.',
	'ARCADE_HELP_FAQ_SEARCH_SNIP_GAME_QUESTION'			=> 'Hogyan keresek meg egy olyan játékot aminek nem ismerem a pontos nevét?',
	'ARCADE_HELP_FAQ_TOUR_NO_RESULT_ANSWER'				=> 'A versenyben előre megadott csoport(ok) vehetnek részt, győződj meg arról, hogy te tagja-e vagy a megadott csoport(ok)nak. Amennyiben mégis tagja lennél az adott csoportnak, úgy fordulj egy adminisztrátorhoz.',
	'ARCADE_HELP_FAQ_TOUR_NO_RESULT_QUESTION'			=> 'Játszottam egy játékot, de az eredményt nem látom a versenyben, miért?',
	'ARCADE_HELP_FAQ_TOUR_PLAY_NUM_ANSWER'				=> 'Minden egyes elindított játék azonnal beszámításra kerül független attól, hogy mentjük-e az eredményt. Továbbá a nem mentett játékok eredményei 0 lesz.',
	'ARCADE_HELP_FAQ_TOUR_PLAY_NUM_QUESTION'			=> 'Játszok egy játékot, de nem mentem el az elért eredményt, a játszások száma még is növekszik a versenyben, miért?',
	'ARCADE_HELP_FAQ_TOUR_PRACTICE_ANSWER'				=> 'A verseny elindulása előtt igen, de ha már elindult a verseny nincs mód további gyakorlásra. A versenyhez tartozó összes játék kiértékelésre kerül, függetlenül, hogy hányadik helyen álltál.',
	'ARCADE_HELP_FAQ_TOUR_PRACTICE_QUESTION'			=> 'Van-e mód gyakorlásra?',
	'ARCADE_HELP_FAQ_TOUR_RIGHT_RESULT_ANSWER'			=> 'Ha a versenyben megadott maximum játszások számát eléred, akkor a további játszás eredményei már nem kerülnek be a versenybe.',
	'ARCADE_HELP_FAQ_TOUR_RIGHT_RESULT_QUESTION'		=> 'Újra játszottam egy játékot jobb eredménnyel, de nem íródott be a versenybe, miért?',
	'ARCADE_HELP_FAQ_USER_SET_CAT_STYLE_ANSWER'			=> 'A játékterem több stílusban is meg tud jelenni, személyre szabhatod, hogy neked melyik tetszik, ezt az opciót az adminisztrátor felülbírálhatja.',
	'ARCADE_HELP_FAQ_USER_SET_CAT_STYLE_QUESTION'		=> 'Mi az a kategória stílus?',
	'ARCADE_HELP_FAQ_USER_SET_CHALL_DISABLE_ANSWER'		=> 'Akkor érdemes kikapcsolni, ha nem szeretnéd, hogy más felhasználó kihívhasson téged egy jó kis versenyre, amennyiben kikapcsolód te magad sem fogsz tudni kihívni egy másik felhasználót. Vedd figyelembe, hogy a kihívást az adminisztrátor is kikapcsolhatja.',
	'ARCADE_HELP_FAQ_USER_SET_CHALL_DISABLE_QUESTION'	=> 'Kihívás engedélyezése, érdemes kikapcsolni?',
	'ARCADE_HELP_FAQ_USER_SET_CONFIG_ANSWER'			=> 'Amennyiben regisztrált felhasználó vagy, minden beállításod az adatbázisban kerül tárolásra. Ezek megváltoztatásához kattints a Felhasználói vezérlőpult linkre (általában az oldal tetején található). Itt megváltoztathatod az összes beállításodat.',
	'ARCADE_HELP_FAQ_USER_SET_CONFIG_QUESTION'			=> 'Hogyan tudom megváltoztatni a beállításaimat?',
	'ARCADE_HELP_FAQ_USER_SET_FAV_MANAGE_ANSWER'		=> 'Itt tudod a már felvett kedvenc játékaidat eltávolítani a kedvencek közül, továbbá kiemelté teheted az egyes játékokat.',
	'ARCADE_HELP_FAQ_USER_SET_FAV_MANAGE_QUESTION'		=> 'Mi az a kedvencek kezelése?',
	'ARCADE_HELP_FAQ_USER_SET_IMG_DISABLE_ANSWER'		=> 'Akkor érdemes kikapcsolni, ha számodra az oldal betöltése túl lassú.',
	'ARCADE_HELP_FAQ_USER_SET_IMG_DISABLE_QUESTION'		=> 'Avatarok, játék képek megjelenítése, érdemes kikapcsolni?',
]);
