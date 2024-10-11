<?php
/**
*
* @package phpBB Arcade
* @version $Id: activation.php 2450 2021-12-13 20:24:43Z KillBill $
* @author 2011-2024 KillBill
* @copyright (c) 2014-2024 https://jv-arcade.com/ - https://jv-arcade.com/contact
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

$lang = array_merge($lang, [
	'ACP_PHPBB_ARCADE_SYSTEM_EXPLAIN'				=> '<legend>Aktiválás részletes leírása</legend>
Az aktiválás során elküldött adatokból megállapítható, hogy az érintett weboldal milyen szintű státusszal rendelkezik a „%2$s” weboldalon.<br>
Továbbá a megadott aktiváló kulcsból megtudhatjuk, hogy az érintett weboldal éles vagy csak egy teszt weboldal.<br><br>
<div>Tárolt adatok az aktiválást követően:</div>
<ul>
	<li>Saját phpBB Arcade azonosító</li>
	<li>Aktiváló személy weboldal címe</li>
	<li>Használt phpBB verzió száma</li>
	<li>Használt phpBB Arcade verzió száma</li>
	<li>Aktiválás dátuma</li>
	<li>Aktivációs kulcs</li>
	<li>Az aktiváláshoz tartozó reklám átugrási idő</li>
	<li>Az aktiváláshoz tartozó napi játszási limit.</li>
</ul>

<div>Tárolt személyes adatok az aktiválást követően:</div>
<ul>
	<li>Aktiváló személy felhasználói neve</li>
	<li>Aktiváló személy IP címe</li>
	<li>Aktiváló személy E-mail címe</li>
</ul>

<div>A regisztrált weboldalak további személyes adatok lehívását teszi lehetővé a „%2$s” weboldalról:</div>
<ul>
	<li>Aktiváló személy felhasználói neve a „%2$s” weboldalon</li>
	<li>Aktiváló személy csoportja a „%2$s” weboldalon</li>
	<li>Aktiváló személy E-mail címe a „%2$s” weboldalon</li>
</ul>

<div>Adatok felhasználása:</div>
<ul>
	<li>A phpBB Arcade azonosító segít a weboldal biztonságos azonosításában.</li>
	<li>A weboldal címe lehetőséget nyújt, hogy ellenőrizzük a weboldal regisztrálva-e lett a „%2$s” weboldalon.</li>
	<li>A phpBB és a phpBB Arcade verzió számának köszönhetően megállapíthatjuk, hogy az érintett weboldal kompatibilis-e vagy sem.</li>
	<li>Az aktivációs kulcs határozza meg, hogy az érintett weboldal mire jogosult.</li>
	<li>A reklám átugrási idő azaz idő amikor a felhasználó jogosult lesz a reklám átugrására.</li>
	<li>A napi játszási limit korlátozza a játékok naponta játszható játékok számát. A limit elérése után aznap már nem játszható több játék.</li>
</ul>

<div>Személyes adatok felhasználása:</div>
<ul>
	<li>A felhasználói név lehetőséget biztosít, hogy megállapítsuk, hogy az érintett felhasználó ismert-e a „%2$s” weboldalon.</li>
	<li>Az IP címet abban az esetben használjuk fel, ha a felhasználó jogszabályt vagy bűncselekményt követett el.</li>
	<li>Az E-mail címet akkor használjuk fel, ha az érintett felhasználóval fel kell venni a kapcsolatot.</li>
</ul>

<br>

<h2>JVA Game Intro részletes leírása</h2>
<hr>
<div>Adminisztrátori funkciók:</div>
<ul>
	<li>A „JVA Game Intro” számos beállítást tesz lehetővé. Elsősorban megadhatjuk, hogy megjelenítésre kerüljön-e, vagy se. Amennyiben nem kérjük a megjelenítését, úgy a játék azonnal betöltésre kerül.</li>
	<li>Megadhatunk egy saját logót is melynek működése három lépésből áll:
		<ol>
			<li>Az alap logó fog megjelenni.</li>
			<li>Megadhatunk egy szöveges logót, ami felülírja az alapot.</li>
			<li>Készíthetünk egy saját kép logót, amit a „[root]/arcade/assets/images/” könyvtárba kell feltölteni „logo.png” névvel, ez felülír mindent.</li>
		</ol>
	</li>
	<li>Sok játék lehet nagy méretű „egyes játékok akár 100MB-osak is lehetnek”, ezért a felhasználók játék elindításánál hosszú időn át csak egy fehér üres képet látnak, így azt híhetik, hogy a játék hibás. Ennek elkerülése végett bekapcsolhatjuk a „játék betöltésének kijelzését”, így a felhasználók nem egy üres fehér képet fognak látni, hanem azt, hogy a játék betöltése hol tart.<br>
		<strong>Megjegyzés:</strong> A játék kizárólag a böngésző gyorsítótárába lesz betöltve. Amennyiben nincs engedélyezve a böngésző gyorsítótár használata, akkor a játék kétszer fog betöltődni, így ez az eljárás csak lassítaná a játékok elindulását.<br>
		<em>Ez a funkció hasztalan, hogy ha letiltjuk a böngésző gyorsítótár használatát.</em>
	</li>
	<li>Megadhatjuk, hogy a toplistában mennyi felhasználó kerüljön bemutatásra, ez az érték 0 és 10 között lehet.<br><br>
		<em class="arcade_attent">Figyelem ezek a beállítások csak privát kulccsal aktivált rendszernél használhatók. Ingyenesen aktivált rendszer esetében ezek a beállítások nem elérhetőek.</em>
	</li>
</ul>

<div>Felhasználói funkciók:</div>
<ul>
	<li>A „JVA Game Intro” lehetővé teszi a felhasználók számára, hogy megtekintsék a játék leírását, vezérlését és az aktuális toplistát a játék elindítása előtt.</li>
	<li>A Toplista maximum 10 felhasználót tudd megjeleníteni és az aktuális szuper bajnokot.</li>
</ul>

<br>

<h2>„%1$s” kommunikációs funkciói</h2>
<hr>
<ul>
	<li><span>Minden egyes játék elindításánál kapcsolat létesül a „%1$s” weboldallal.</span>
		<div><span>A kapcsolat során elküldésre kerülnek a következő adatok:</span></div>
		<ol>
			<li>Saját phpBB Arcade azonosító kódolva (egyirányú hash) formában.</li>
			<li>„JVA Game Intro” aktuális verziója.</li>
			<li>A szoftvert használó weboldal címe kódolva (PHP Base64) formában.</li>
			<li>A „phpBB Arcade” aktivációs kulcsa kódolva (egyirányú hash) formában.</li>
			<li>A phpBB Arcade aktuális verziója.</li>
			<li>A phpBB aktuális verziója.

				<br><br>

				<div><span>Elküldött adatok szerepe:</span></div>
				<ol>
					<li>A phpBB Arcade azonosító segít a weboldal biztonságos azonosításában.</li>
					<li>A „JVA Game Intro” verzió ellenőrzése segít abban, hogy figyelmeztetést tudjunk visszaküldeni, amennyiben nem kompatibilis verziót használ, vagy ha megjelent egy újabb verzió.</li>
					<li>A weboldal címe nagyon fontos, mivel ez alapján tudjuk visszaküldeni az információkat.</li>
					<li>Az aktivációs kulcsnak több szerepe is van:
						<ol>
							<li>A „Teszt” és az „Ingyenes” kulcs között annyi a különbség, hogy ha a várakozási idő aktiválva van akkor a „Teszt” kulccsal aktivált weboldalakon magasabb lehet a várakozási idő, továbbá a weboldal „Teszt weboldalnak” lesz besorolva. A „Teszt” és az „Ingyenes” kulccsal aktivált szoftver reklámokat jeleníthet meg és korlátozhatja a lejátszások számát.<br>
								A várakozási időt a „%2$s” kapcsolhatja be és határozhatja meg.<br>
								A maximális játszások számát a „%2$s” kapcsolhatja be és határozhatja meg.<br>
								A „Teszt” és az „Ingyenes” kulcsnak nincs lejárati ideje.
							</li>
							<li>A privát kulcshoz lejárati idő is tartozhat, vagy kizárólag egy adott phpBB Arcade verzióhoz használható fel. A privát kulccsal aktivált szoftver teljes reklám mentességet élvez. <em>Ez csak a „JVA Game Intro”-ra érvényes</em>.<br>Továbbá a privát kulcsot használó weboldalakra a napi játszási limit sem vonatkozik.</li>
						</ol>
					</li>
					<li>A phpBB Arcade verzió ellenőrzése is igen fontos, hogy a „JVA Game Intro” az adott verzióval kompatibilis-e.</li>
				</ol>
			</li>
		</ol>
	</li>
	<li>A kapcsolattartásnak köszönhetően lehetőség adódik a játszások számát eltárolni és ennek alapján felállítani egy statisztikát. A statisztika alapján megtekinthető a weboldalunk jelenlegi aktuális rangja. Bővebb információ <a onclick="window.open(this.href); return false;" href="%5$s"><strong>» ITT «</strong></a>.</li>
	<li>Amennyiben visszaérkezik reklám, vagy várakozási idő a weboldalunkra, akkor az megjelenik a játék indítása előtt. Hogyha a „JVA Game Intro” nincs bekapcsolva, abban az esetben automatikusan bekapcsolásra fog kerülni.</li>
	<li>Amennyiben a játszások száma/nap limitálva van, úgy a maximális értéket meghaladó weboldalakon aznap már nem játszható több játék.</li>
	<li>Információ visszaküldése két módon történhet:
		<ol>
			<li>Sima frissítési információt küld vissza a „%1$s”, akkor az megjelenik a „JVA Game Intro”-ban. Ez az információ kijelzés csak az alapítók számára lesz látható és a játékot sem fogja blokkolni.</li>
			<li>Globális információ az, ami felhasználja a teljes „JVA Game Intro” felületét, ezért ez a tájékoztatás nem teszi lehetővé a további játszásokat.
				<div><span>A globális információ megjelenésének okai:</span></div>
				<ol>
					<li>Azonnali frissítésre van szükség.</li>
					<li>Ha egy játék típus nem támogatott.</li>
					<li>Ha egy weboldal eléri a napi limitet.</li>
					<li>Aktivációs kulcs lejárt. Ebben az esetben újra kell aktiválni a szoftvert, az adminisztrátori vezérlőpultban a „Teszt” vagy az „Ingyenes” kulccsal, amennyiben rendelkezünk új privát kulccsal, akkor azt használjuk fel.</li>
					<li>A szoftvert használója megszegi a <strong>„<a onclick="window.open(this.href); return false;" href="%4$s" title="JVA Licensz">Licenc</a>”</strong> szerződést, vagy egy <strong>nem regisztrált</strong> weboldalon használják. Mindkét esetben letiltásra kerülhet a szoftver használata.</li>
				</ol>
			</li>
		</ol>
	</li>
	<li>A „%1$s” a következő információkat tudja visszaküldeni:
		<ol>
			<li>Weboldalak ellenőrzése.</li>
			<li>Várakozási idő.</li>
			<li>Reklám.</li>
			<li>Frissítési információ visszaküldése.</li>
			<li>Globális információ visszaküldése.</li>
			<li>A „%2$s” kijelenti, hogy a kapcsolat során nem végez és nem is tud semmilyen adatbázis módosítást végrehajtani mások weboldalain! Ez azért nagyon fontos, hogy a kapcsolat során megőrizzük a két szerver közti 100%%-os biztonságot.<br>Pont ezért a szoftvert is csak a weboldal alapítója tudja aktiválni.</li>
		</ol>
	</li>
	<li>A „JVA Game Intro” localhost-on való használata nem támogatott, azonban a szoftver futtatható. A localhost-on nincs semmilyen adatkapcsolat, azonban a várakozási idő alapból 5 másodpercre van beállítva.</li>
</ul>',
	'ACP_PHPBB_ARCADE_SYSTEM_INSTRUCTION'			=> 'phpBB Arcade Instrukció',
	'ACP_PHPBB_ARCADE_SYSTEM_INSTRUCTION_EXPLAIN'	=> 'A „phpBB Arcade” szoftvert a „%1$s” weboldal <a onclick="window.open(this.href); return false;" href="%3$s" title="JVA Licensz">licenszeli</a> és tartja karban.',
]);
