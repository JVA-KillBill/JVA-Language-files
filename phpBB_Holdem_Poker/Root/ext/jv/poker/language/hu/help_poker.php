<?php
/**
*
* @package phpBB Holdem Póker
* @version $Id$
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
	'JV_POKER_HELP_AUTO_ACC_ANSWER'			=> 'Amennyiben a felhasználó jóváhagyja az „Automata Passz/Megad” funkciót, úgy ha ráesik a sor, akkor automatikusan passzolni fog vagy, ha van hívás, akkor automatikusan megadja a hívott összeget.',
	'JV_POKER_HELP_AUTO_ACC_QUESTION'		=> 'Mit jelent, hogy Automata Passz/Megad?',
	'JV_POKER_HELP_AUTO_ACF_ANSWER'			=> 'Amennyiben a felhasználó jóváhagyja az „Automata Passz/Bedob” funkciót, úgy ha ráesik a sor, akkor automatikusan passzolni fog vagy, ha van hívás, akkor automatikusan bedobja a lapjait.',
	'JV_POKER_HELP_AUTO_ACF_QUESTION'		=> 'Mit jelent, hogy Automata Passz/Bedob?',
	'JV_POKER_HELP_AVATAR_BC_ANSWER'		=> 'Igen, jelenleg az avatar körül a következő színek vannak használatban:
	<ul>
		<li>Fehér: Játékra várakozó.</li>
		<li>Szürke: Játékban lévők.</li>
		<li>Sárga: Aktuális játékos.</li>
		<li>Piros: Dobta a lapjait.</li>
	</ul>',
	'JV_POKER_HELP_AVATAR_BC_ANSWER_2'		=> '<li>Bordó áthúzva: Szünetet tart.</li>',
	'JV_POKER_HELP_AVATAR_BC_ANSWER_3'		=> '<li>Kék: Tét védelembe.</li>',
	'JV_POKER_HELP_AVATAR_BC_QUESTION'		=> 'Az avatar körüli színek jelentenek valamit?',
	'JV_POKER_HELP_A_SHOUT_ANSWER'			=> 'Igen, minden játékos megtekintheti az archívumot a játék során.',
	'JV_POKER_HELP_A_SHOUT_QUESTION'		=> 'Van-e mód a régebbi üzenetek megtekintésére?',
	'JV_POKER_HELP_A_SHOUT_RE_ANSWER'		=> 'Ha nem jelennek meg az üzenetek, akkor vagy elhagytad a játékot vagy ép szünetet tartasz és szünet időben nincs engedélyezve az üzenőfal használata.',
	'JV_POKER_HELP_A_SHOUT_RE_QUESTION'		=> 'Archívum frissítése után eltűntek az üzenetek, miért?',
	'JV_POKER_HELP_A_SHOUT_R_ANSWER'		=> 'Igen, a címsor jobb oldalán megtalálható a frissítési gomb.',
	'JV_POKER_HELP_A_SHOUT_R_QUESTION'		=> 'Van-e mód az archívum frissítésére?',
	'JV_POKER_HELP_BAN_CHIPS_ANSWER'		=> 'Igen, abban az esetben, ha egy adminisztrátor elveszi a jogosultságodat a póker használatától, akkor %s<strong>ITT</strong>%s bármikor automatikusan visszaválthatód az összes megszerzett zsetonod. Az automatikus átváltás abban az esetben nem fog működni, ha a póker ki lett kapcsolva, ebben az esetben nézzünk vissza később és próbáljuk újra.',
	'JV_POKER_HELP_BAN_CHIPS_QUESTION'		=> 'Ha elveszik a jogosultságomat a póker használatától, akkor van-e mód visszaváltanom a zsetonjaimat?',
	'JV_POKER_HELP_BET_BACK_ANSWER'			=> 'Ez akkor fordulhat elő, ha a tétedbe többlet zseton van, amit nem adott meg senki vagy több nyertes van, ebben az esetben a többlet zseton visszakerül hozzád és nem a Pot-ba, hogy a kiértékelésbe ne számítson bele.',
	'JV_POKER_HELP_BET_BACK_QUESTION'		=> 'A tétem egy része vissza került hozzám és nem a Pot-ba, miért?',
	'JV_POKER_HELP_BET_BANK_ANSWER'			=> 'Ez akkor fordulhat elő, ha a tétedbe többlet zseton van, amit nem adott meg senki és te felálltál, ebben az esetben a többlet zseton a banké lesz.',
	'JV_POKER_HELP_BET_BANK_QUESTION'		=> 'A tétem egy része elment az osztónak és nem a Pot-ba, miért?',
	'JV_POKER_HELP_BLIND_ANSWER'			=> 'A kis/nagyvak mindig a minimum és maximum beszálló összegtől függnek. A minimum beszálló összeg mindig a nagyvak 10-szerese, míg a maximum beszálló összeg a nagyvak 200-szorosa. Természetesen, ha a minimum és maximum értékek egyenlőek, akkor az már beállítás függő, hogy a minimum, közép vagy maximum értéket veszi-e alapul. A kisvak meg mindig a nagyvak fele. Ez a szabály a verseny szobában annyival tér el, hogy a kis/nagyvak mindig az alap érték kétszerese. Továbbá a verseny szobában a kis/nagyvak a verseny előre haladtával folyamatosan emelkedni fog.',
	'JV_POKER_HELP_BLIND_QUESTION'			=> 'A szobák közti kis/nagyvak tétek különböznek, miért?',
	'JV_POKER_HELP_BLOCK_GAME'				=> 'Póker játék kérdések',
	'JV_POKER_HELP_BLOCK_GENERAL'			=> 'Általános kérdések',
	'JV_POKER_HELP_BLOCK_POKER'				=> 'phpBB Holdem Póker kérdések',
	'JV_POKER_HELP_BLOCK_ROOMS'				=> 'Póker szobákkal (Lobby) kapcsolatos kérdések',
	'JV_POKER_HELP_BLOCK_SHOUT'				=> 'Póker üzenőfal kérdések',
	'JV_POKER_HELP_BLOCK_STATS'				=> 'Póker statisztikai kérdések',
	'JV_POKER_HELP_CHIPS_C_ANSWER'			=> 'A zseton színekhez tartozó értékek a következők:
	<ul>
		<li>Szürke: 1</li>
		<li>Fekete: 10</li>
		<li>Világos kék: 100</li>
		<li>Sárga: 1,000</li>
		<li>Rózsaszín: 10,000</li>
		<li>Piros: 100,000</li>
		<li>Sötétkék: 1,000,000</li>
		<li>Lila: 10,000,000</li>
		<li>Zöld: 100,000,000</li>
		<li>Barna: 1,000,000,000</li>
	</ul>',
	'JV_POKER_HELP_CHIPS_C_QUESTION'		=> 'Mi az értékük a különféle színű zsetonoknak?',
	'JV_POKER_HELP_CHIPS_DC_ANSWER'			=> 'Igen mindaddig, amíg el nem érik a maximum megjeleníthető zseton mennyiségét, ami 11,111,111,110 mivel egy zsetonból maximum 10 darab jelenik meg.',
	'JV_POKER_HELP_CHIPS_DC_QUESTION'		=> 'A zsetonok a megfelelő összeg szerint jelennek-e meg?',
	'JV_POKER_HELP_CHIPS_ZERO_ANSWER'		=> 'Ha egy körben felteszed az összes zsetonod és elveszted, de az újratöltés nálad aktív és még van kint zsetonod, akkor a bent lévő zsetonod csak, akkor töltődik újra, amikor az új kör elkezdődik és te is aktív játékos vagy.',
	'JV_POKER_HELP_CHIPS_ZERO_QUESTION'		=> 'Van zsetonom, de a bent ülő zsetonom nullát mutat, miért?',
	'JV_POKER_HELP_CM_ANSWER'				=> 'A „Szék” az jelenti, hogy az adott szobában mennyi ülőhely van engedélyezve. Ha az ülőhelyek száma 8, akkor 8 felhasználó ülhet be egyszerre az adott szobában. A „Játékos” azt takarja, hogy a szobában mennyi felhasználó ült már le. Ha az adminisztrátor lezárja a szobát az azt jelenti, hogy ha a szoba megtelt, akkor további felhasználó már nem mehet be az érintett szobába, addig míg egy ülőhely meg nem üresedik.',
	'JV_POKER_HELP_CM_QUESTION'				=> 'Mit jelent a Szék/Játékos?',
	'JV_POKER_HELP_CREATE_ANSWER'			=> 'Ezt a kiegészítőt (eredeti formájában) a <a href="https://jv-arcade.com/">JV-Arcade Group</a> készítette, adta ki, és gyakorolja a szerzői jogokat felette. A <a href="https://jv-arcade.com/License.html">JVA licensz</a> alatt érhető el, és nem terjeszthető. További információért lásd a linket.',
	'JV_POKER_HELP_CREATE_QUESTION'			=> 'Ki készítette ezt a phpBB Holdem Póker kiterjesztést?',
	'JV_POKER_HELP_CTOP_ANSWER'				=> 'Igen, ehhez használd a póker főoldalán a saját profilodban lévő zseton kijelzés mellett a „Zseton váltó” gombot.',
	'JV_POKER_HELP_CTOP_QUESTION'			=> 'Válthatók-e át zsetont „%s”-ra?',
	'JV_POKER_HELP_DROP_TOKEN_ANSWER'		=> 'Ebben az esetben 3 opció lehetséges:
	<ul>
		<li>1. Gyakorló szobából nem lehet kivinni zsetont, így a még bent lévő zsetonjaid törlésre fognak kerülni.</li>
		<li>2. A Normál szobából, ha kidobásra kerülsz, akkor természetesen a még meglévő zsetonod visszaadásra kerül.</li>
		<li>3. Ha verseny szobából kerülsz kidobásra még a verseny megkezdése előtt, akkor visszakapod a nevezési díjat. Ha a verseny már elkezdődött, akkor a nevezési díjat elveszted.</li>
	</ul>',
	'JV_POKER_HELP_DROP_TOKEN_QUESTION'		=> 'Mi történik a zsetonommal, ha kidob a játék?',
	'JV_POKER_HELP_DROP_USER_ANSWER'		=> 'Ebben az esetben 4 opció lehetséges:
	<ul>
		<li>1. Ha megszakad az internet kapcsolatod.</li>
		<li>2. Ha tétlen vagy és nem reagálsz semmire vagyis szándékosan lassítod a játék menetét.</li>
		<li>3. Ha a játék ablaka a háttérbe kerül, mivel több böngésző ebben az esetben lelassíthatja vagy teljesen le is állíthatja a háttérben futó adatok frissítését, így a játék úgy fogja venni, hogy offline felhasználó vagy, így a játék kidob.</li>
		<li>4. Az adminisztrátor csak aktív fókuszban lévő játék futtatását engedélyezi, így ugyan az a helyzet mint a 3. pontban leírtak. Azonban ebben az esetben megjelenik a szünet felírat.</li>
	</ul>',
	'JV_POKER_HELP_DROP_USER_QUESTION'		=> 'Milyen esetekben dobhat ki a játék?',
	'JV_POKER_HELP_E_SHOUT_ANSWER'			=> 'Amennyiben az adminisztrátor engedélyezi, akkor igen.',
	'JV_POKER_HELP_E_SHOUT_QUESTION'		=> 'Használhatók-e az üzeneteimben szmájlikat?',
	'JV_POKER_HELP_GAME_SOUND_ANSWER'		=> 'Igen. A játék során bármikor ki/be kapcsolható a játék hangja. Ezzel az összes játék hang beleértve az üzenőfal hangja is kikapcsolásra kerül. A beállítás minden esetben megjegyzésre kerül.',
	'JV_POKER_HELP_GAME_SOUND_QUESTION'		=> 'Kitudom kapcsolni a játék hangját?',
	'JV_POKER_HELP_INACTIVE_ANSWER'			=> 'Ebben az esetben a következők történhetnek:
	<ul>
		<li>1. Ha normál játékban vagy úgy a %s. leosztás végén automatikusan felállításra kerülsz.</li>
		<li>2. Ha verseny játékban vagy úgy a %s. leosztás végén automatikusan felállításra kerülsz.</li>
	</ul>
	Erre azért van szükség, mert senki sem szereti, ha valaki szándékosan lelassítja a játék menetét.',
	'JV_POKER_HELP_INACTIVE_QUESTION'		=> 'Mi történik, ha a játék során nem reagálok semmire?',
	'JV_POKER_HELP_JACKPOT_ANSWER'			=> 'A JackPot-ból háromféleképpen lehet kivenni a nyereményt. Kizárólag lapbemutatás esetében és, ha a tiéd a legerősebb kéz.<br>
	<strong>JackPot nyeremények:</strong>
	<ul>
		<li>1. Póker esetében 10% a JackPot-ból.</li>
		<li>2. Színsor esetében 30% a JackPot-ból.</li>
		<li>3. Royal Flush esetében 80% a JackPot-ból.</li>
	</ul>
	Amennyiben több nyertes is van, úgy részarányosan a nyeremény szétosztódik.<br><br>
	<strong>Nem nyerhetsz a JackPot-ból, ha:</strong>
	<ul>
		<li>1. Nem vásároltad meg a JackPot sorsjegyet.</li>
		<li>2. Bedobtad a lapjaid.</li>
		<li>3. Mindenki más bedobja a lapjait.</li>
		<li>4. Nem a te lapjaid a legerősebb kéz.</li>
	</ul>',
	'JV_POKER_HELP_JACKPOT_QUESTION'		=> 'Hogyan nyerhetem meg a JackPot-ot?',
	'JV_POKER_HELP_LEADERS_ANSWER'			=> 'A bajnokok a megszerzett zseton mennyiség szerint vannak rangsorolva.',
	'JV_POKER_HELP_LEADERS_QUESTION'		=> 'Mi alapján vannak rangsorolva a bajnokok?',
	'JV_POKER_HELP_LEARNER_ANSWER'			=> 'A szobába bárki bemehet játszani még, akkor is, ha nincs saját zsetonja. Leüléskor az előre meghatározott beszálló zsetonokat minden játékos megkap. A szobában minden játékos nyílt kártyákkal játszanak, így esélyük van az egymás tanítására. A szobából a megnyert zsetonokat nem lehet kivinni.',
	'JV_POKER_HELP_LEARNER_QUESTION'		=> 'Mit jelent, hogy tanuló szoba?',
	'JV_POKER_HELP_LIMIT_ANSWER'			=> 'Erre a kérdésre már leírtuk a választ a „Hogyan kell játszani a pókert/Limitszabályok” alatt.',
	'JV_POKER_HELP_LIMIT_QUESTION'			=> 'Mit jelent, hogy Fix/Nincs limit?',
	'JV_POKER_HELP_L_STATS_ANSWER'			=> 'A tanuló és a gyakorló szobákban a statisztikai adatok nem kerülnek tárolásra.',
	'JV_POKER_HELP_L_STATS_QUESTION'		=> 'A tanuló és a gyakorló szobák is mentik a statisztikai adatokat?',
	'JV_POKER_HELP_MOVE_TIME_ANSWER'		=> 'A „Mozgási idő” az az idő amely alatt egy felhasználó megteheti a döntését, hogy passzol, tétet emel vagy esetleg bedobja a lapjait. Ha ez az idő letelik, akkor automatikusan két opció lehetséges:
	<ul>
		<li>1. Ha nincs hívás, akkor automatikusan passzolunk.</li>
		<li>2. Ha van hívás, akkor automatikusan bedobjuk a lapjainkat.</li>
	</ul>',
	'JV_POKER_HELP_MOVE_TIME_QUESTION'		=> 'Mi az a mozgási idő?',
	'JV_POKER_HELP_NORMAL_ANSWER'			=> 'A szobába csak azok a felhasználók játszhatnak, akiknek van saját zsetonjuk és a zsetonjuk mennyisége eléri a minimum beszálló összegét. Minden szobának van egy beállított minimum és egy maximum beszálló összeg meghatározva. A felhasználók minimum maximum ennyi zsetonnal tudnak leülni az asztalhoz. A szobából a megnyert zsetonok kivihető, így növelve a zseton egyenlegünk.',
	'JV_POKER_HELP_NORMAL_QUESTION'			=> 'Mit jelent, hogy normál szoba?',
	'JV_POKER_HELP_OFFLINE_BL_ANSWER'		=> 'Ha a felhasználó avatarja szürkén villog az azt jelzi, hogy a felhasználó jelenleg offline vagyis nincs a szobával internet kapcsolata. Ez két okból lehetséges:
	<ul>
		<li>A felhasználó internet kapcsolata megszűnt.</li>
		<li>Az adminisztrátor csak aktív ablakban engedélyezi a szoba működését vagyis a felhasználó éppen egy másik weblapot, oldalt nézeget. Ebben az esetben a felhasználó semmilyen új adatot nem kap a póker jelenlegi állásáról. Egyfajta töltési szünet jelenik meg számára és míg nem nézi újra aktívan a pókert, addig offline is marad.</li>
	</ul>',
	'JV_POKER_HELP_OFFLINE_BL_QUESTION'		=> 'A felhasználó avatarja szürkén villog, ez mit jelent?',
	'JV_POKER_HELP_OFFLINE_BP_ANSWER'		=> 'Ebben az esetben a következők történhetnek:
	<ul>
		<li>1. Ha visszatérsz mielőtt te következel és a mozgatási időd még nem telt le, akkor tehetsz még további téteket.</li>
		<li>2. Ha nem tudsz időben visszatérni, akkor védelmi pozícióba kerül a téted, de már további téteket nem tehetsz. Így esélyed van nyerni a már bent lévő téteddel még akkor is ha végig offline maradsz a játék során.</li>
	</ul>',
	'JV_POKER_HELP_OFFLINE_BP_QUESTION'		=> 'Mi történik a tétemmel, ha megszakad az internet kapcsolatom?',
	'JV_POKER_HELP_OFFLINE_S_ANSWER'		=> 'Ha a szerver kevesebb mint 10 perc után újra elérhető, akkor a vissza érkező felhasználók folytathatják a játékot onnan ahol félbe maradt. Abban az esetben, ha a szerver nem elérhető legalább 10 percig, akkor a verseny törlésre fog kerülni és az összes felhasználó, aki még a versenyben volt az visszakapja a nevezési díjat.',
	'JV_POKER_HELP_OFFLINE_S_QUESTION'		=> 'Mi történik, ha a szerver nem elérhető?',
	'JV_POKER_HELP_OFFLINE_U_ANSWER'		=> 'Ebben az esetben a következők történhetnek:
	<ul>
		<li>1. Ha ülsz, de nem vagy játékban, úgy 12 másodperc után automatikusan felállításra kerülsz.</li>
		<li>2. Ha normál játékban vagy úgy az %s. leosztás végén automatikusan felállításra kerülsz.</li>
		<li>3. Ha verseny játékban vagy úgy az %s. leosztás végén automatikusan felállításra kerülsz.</li>
	</ul>',
	'JV_POKER_HELP_OFFLINE_U_QUESTION'		=> 'Mi történik, ha megszakad az internet kapcsolatom?',
	'JV_POKER_HELP_PAUSE_ANSWER'			=> 'Ha megnyomod a szünet gombot az egyenlő azzal, hogy kiszállsz a játékból, tehát ha játékban vagy, akkor a lapjaid bedobásra kerülnek. Ezt az opciót, akkor érdemes használni, ha még játszani szeretnél és nem szeretnéd, hogy valaki elfoglalná a helyedet. Természetesen a szünet ideje limitálva van, amit az adminisztrátor határozz meg.',
	'JV_POKER_HELP_PAUSE_QUESTION'			=> 'Mi történik, ha megnyomom a szünet gombot?',
	'JV_POKER_HELP_PD_ANSWER'				=> 'A „phpBB Holdem Póker” minden aktuális játékos IP-címét menti és tárolja addig, amíg a felhasználó fel nem áll az asztaltól, mivel ha egy felhasználó feláll az asztaltól, akkor minden adat törlésre kerül és csak a statisztikai adatok maradnak meg. Az IP cím azért kerül tárolásra a játszás során, hogy megakadályozhassuk, hogy egy IP címmel több felhasználó ülhessen le egy asztalhoz. Természetesen az IP címek ellenőrzését az adminisztrátor ki/be kapcsolhatja.',
	'JV_POKER_HELP_PD_QUESTION'				=> 'A „phpBB Holdem Póker” tárol-e személyes adatokat?',
	'JV_POKER_HELP_PLAY_ANSWER'				=> 'A póker az egyik legnépszerűbb kártyajáték a világon. A lényege, hogy a játékosok a zárt kártyáikból a legjobbat kihozva elvigyék az asztal közepén lévő kasszát (angolul POT-nak nevezik). Ezt a legjobb lap kombinációval tehetik meg, tehát minden játékosnak arra kell törekednie, hogy a saját kezében legyen a legjobb. A játékot 2-8 főig játszható egy szobában. A játékban 52 lapos francia kártyát használunk, jokerek nélkül. Minden játékos két saját zárt lapot kap, amit a többi játékos nem láthat és nem használhat. A játék során az asztalra öt közös nyílt lapot osztanak színnel fölfelé, amit minden játékos lát és felhasználhat. A játékos a saját lapjaiból és a közös lapokból igyekszik a lehető legjobb „ötlapos kombináció”-t összeállítani. Az a játékos nyeri meg a licitálások során összegyűlt értéket, akinek a legerősebb lapjai vannak. Egy pakli francia kártyának (jokerek nélkül) 4 különböző színe van, és minden szín 13 különböző értékű lapból áll, ez adja ki az 52 lapos paklit. A 4 szín sorrendje: <span class="poker_cs">♣</span> treff (clubs) <span class="poker_dh">♦</span> káró (diamond) <span class="poker_dh">♥</span> kőr (hearts) <span class="poker_cs">♠</span> pikk (spades). Minden szín egyenlő értékűnek számít a pókerkezek értékelésénél. A 13 lap értékének sorrendje: A (ász), 2, 3, 4, 5, 6, 7, 8, 9, 10, J (bubi), Q (dáma), K (király). Az ász nem csak az egyes számot jelöli, hanem a király után egy ász lap, vagyis a legmagasabb lapnak minősül.
		<br><br><strong>Osztó:</strong><br>
		Egy pókerasztalnál mindig van egy osztó (Dealer) pozíció. Az osztó kezeli a kártyákat, megkeveri és kiosztja azokat. Az osztógomb (D) jelzi a „játékos osztó”-t, aki az osztó lesz és részt is vesz a játékban.

		<br><br><strong>A kisvak és a nagyvak:</strong><br>
		Az osztógombtól balra lévő első játékos a kisvak (Small Blind) és a kisvaktól balra lévő első játékos pedig a nagyvak (Big Blind). Ők a vakok, azok a játékosok, akik még az osztás előtt, a saját lapok ismerete nélkül, beteszik a vaktéteket. A kisvak a kisvak-tétet, a nagyvak a nagyvak-tétet, amit kötelesek megadni.

		<br><br><strong>A licitálás:</strong><br>
		A pókerben zsetonokat, „Chip”-eket használnak a licitáláshoz, ami a készpénzt helyettesíti a játék során. A licitkörben a licitálás mindig bal irányba halad, és minden „aktív játékos” (aki még nem dobta el a lapjait) licitál, és addig folytatódik, amíg az aktív játékosok az emelt tétet tovább már nem emelik, csak tartják, vagy a lapjaikat eldobják. A licitálások, az emelések száma a limitszabályoknak megfelelően történik.

		<br><br><strong>Osztás:</strong><br>
		Az osztó megkeveri a paklit. A lapok kiosztása előtt a kisvak beteszi a kisvak-tétet, a nagyvak pedig a nagyvak-tétet, ezt követően az osztó bal irányba minden játékosnak kiosztja a lapjait. Ezután kezdődik a Pre-Flop (az első licitkör), amely eltér a játékban lévő többi licitkörtől.

		<br><br><strong>Pre-Flop (első licitkör):</strong><br>
		Az első licitkört a nagyvaktól balra lévő első játékos kezdi meg, és három licitet tehet:
		<ul>
			<li>Megad (Call) megadja a tétet.</li>
			<li>Emelés (Raise) emeli a tétet, a limitszabályok szerint.</li>
			<li>Eldobás (Fold) eldobja a lapjait, színükkel lefelé, így kiesik a játékból.</li>
		</ul>

		A licitkör bal irányba halad, és a játékosok licitálhatnak. Ha csak tartották a tétet, akkor:
		<ul>
			<li>A kisvaknak minimum a kisvak-téttel meg kell emelnie a saját tétjét, vagy el kell dobnia a lapjait.</li>
			<li>A nagyvak tartja, így nem tesz be újabb tétet, vagy emeli a tétet minimum a nagyvak értékével megegyezően vagy többel, esetleg eldobja a lapjait.</li>
		</ul>

		Ha egy játékos emeli a tétet, akkor megkezdődik a licitálás. A licitkör végén az osztó összeszedi a téteket és a „Pot”-ba, a kasszába teszi.
		<br><br><strong>Flop (második licitkör):</strong><br>
		Az osztó kiosztja a három lapból álló közös lapokat, a „Flop”-ot, amelyeket színnel fölfelé helyez el az asztal közepén és így minden játékos látja. Ezt követően a játék során megkezdődik a második licitkör.

		<br><br><strong>A Pre-Flop licitkörtől eltérően, a flop utáni összes licitkört mindig az osztógombtól balra lévő első aktív játékos kezdheti, és három licitet tehet:</strong><br>
		<ul>
			<li>Passzolás (Check): passzol, nem hív tétet és nem dobja el a lapjait.</li>
			<li>Nyitás (Bet): beteszi a nyitó tétet, a limitszabályok szerint.</li>
			<li>Eldobás (Fold): eldobja a lapjait, színükkel lefelé, így kiesik a játékból.</li>
		</ul>

		Ha egy játékos beteszi a nyitó tétet, a tőle balra lévő első aktív játékos három licitet tehet:
		<ul>
			<li>Megad (Call): megadja a tétet.</li>
			<li>Emelés (Raise): emeli a tétet, a limitszabályok szerint.</li>
			<li>Eldobás (Fold): eldobja a lapjait, színükkel lefelé, így kiesik a játékból.</li>
		</ul>

		Ha egy játékos emeli a tétet, akkor megkezdődik a licitálás. A licitkör végén az osztó összeszedi a téteket és a „Pot”-ba, a kasszába teszi.
		<br><br><strong>Turn (harmadik licitkör)</strong><br>
		Az osztó leoszt egy „Turn” kártyát a közös lapok közé. Így már négy közös lapot látnak a játékosok. Ezt követően a harmadik licitkör kezdődik.

		<br><br><strong>River (negyedik licitkör)</strong><br>
		Az osztó leosztja a közös lapok közé az utolsó, ötödik, úgynevezett „River” kártyát. Most már mindenkinek hét lapja van és ezek közül ötöt kell felhasználni ahhoz, hogy kialakítson egy pókerkezet, ami valószínűleg erősebb, mint a többi játékosé. Ekkor az utolsó, negyedik licitkör kezdődik, és mikor befejeződött, az osztó megkéri az aktív játékosokat, hogy fedjék fel a lapjaikat.

		<br><br><strong>Showdown (lapok bemutatása)</strong><br>
		Amennyiben az utolsó licitkör befejezése után egynél több játékos marad a játékban, úgy a nyertes és aki All-In-t rakott játékosok kártyái bemutatásra kerülnek. A Pot-ot az a játékos kapja, akinek a legerősebb 5 lapos leosztása van. Abban az esetben, ha két vagy több játékos ugyanazt a legerősebb kezet mutatja, akkor a Pot részarányosan szétosztásra kerül. Ha a Pot értéke nem osztható részarányosan, akkor az osztógombtól balra lévő első nyertes játékos jogosult a többletre. A következő osztás előtt az osztógombot mindig eggyel balra kell tenni, így minden játékban más és más az osztó, és mások adják a vakokat is.

		<br><br><strong>A pókerkezek értékelése</strong><br>
		A pókerben a pókerkéz, egy olyan ötlapos kombináció, amit a játékos a két saját lapjából és az asztalon lévő öt közös lapból (összesen hét lapból) állít össze. A játékos a saját lapokból akár egyet sem, vagy bármelyiket felhasználhatja. A lapok színei egyenlő értékűek, azonos kombináció esetén a kísérő lap dönti el, hogy melyik játékos nyeri a játékot. A kísérő (Kicker) az a lap, amelyik nem tartozik a kombinációhoz, csak kiegészíti, „kíséri” az ötlapos kombinációt. Ha minden lap azonos, akkor a Pot-ot egymás között szétosztják a nyertesek.

		<br><br><strong>Limitszabályok</strong><br>
		A legkisebb tét mindig megegyezik a nagyvak összegével.
		<ul>
			<li>Fix limit esetében maximum háromszor lehetséges a nagyvak összegével azonos mértékével emelni a Pre-Flop (első licitkör) és a Flop (második licitkör)-ben. A Turn (harmadik licitkör) és River (negyedik licitkör) esetében ugyan ez a szabály csak itt a nagyvak kétszeresével lehet már emelni a tétet.</li>
			<li>Nincs limit esetében bármekkora összeggel emelhető a tét és az emelések száma sincs korlátozva.</li>
		</ul>

		<strong>Pókerkezek:</strong>
		<ul>
			<li><strong>Royal Flush (Royal Flush)</strong>
				<ul><li>A legerősebb lapkombináció. Egyszínű 10-es, bubi, dáma, király, ász lapokból áll. Ha két ilyen találkozik, akkor döntetlen (osztozás a nyereményen).<br>Példa: 10<span class="poker_dh">♥</span>, J<span class="poker_dh">♥</span>, Q<span class="poker_dh">♥</span>, K<span class="poker_dh">♥</span>, A<span class="poker_dh">♥</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Színsor (Straight Flush)</strong>
				<ul><li>Öt egyszínű sorba rendezhető lapból áll. Ha két ilyen találkozik, a legmagasabb lap dönt. Ha egyforma, akkor döntetlen (osztozás a nyereményen).<br>Példa: 5<span class="poker_cs">♣</span>, 6<span class="poker_cs">♣</span>, 7<span class="poker_cs">♣</span>, 8<span class="poker_cs">♣</span>, 9<span class="poker_cs">♣</span></li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Póker (Four of a Kind)</strong>
				<ul><li>Négy ugyanolyan számozású vagy jelű lapból és egy akármilyen másik lapból áll. Ha két ilyen találkozik, a magasabb póker nyer.<br>Példa: 7<span class="poker_dh">♥</span>, 7<span class="poker_cs">♠</span>, 7<span class="poker_cs">♣</span>, 7<span class="poker_dh">♦</span>, 10<span class="poker_cs">♠</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Full House (Full House)</strong>
				<ul><li>Három ugyanolyan számozású vagy jelű lapból és két másik ugyanolyan számozású vagy jelű lapból áll. Ha két ilyen találkozik, a magasabb drill nyer. Ha egyforma, a magasabb pár nyer.<br>Példa: 5<span class="poker_dh">♦</span>, 5<span class="poker_cs">♣</span>, 5<span class="poker_cs">♠</span>, 8<span class="poker_dh">♥</span>, 8<span class="poker_cs">♠</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Flush (Flush)</strong>
				<ul><li>Öt ugyanolyan színű lapból áll. Ha két ilyen találkozik, a legmagasabb lap dönt. Ha egyforma, a második legmagasabb dönt, és így tovább…<br>Példa: 2<span class="poker_cs">♠</span>, 4<span class="poker_cs">♠</span>, 5<span class="poker_cs">♠</span>, 7<span class="poker_cs">♠</span>, 10<span class="poker_cs">♠</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Sor (Straight)</strong>
				<ul><li>Öt sorba rendezhető lapból áll. Ha két ilyen találkozik, a legmagasabb lap dönt. Ha egyforma, akkor döntetlen (osztozás a nyereményen).<br>Példa: 4<span class="poker_dh">♥</span>, 5<span class="poker_dh">♦</span>, 6<span class="poker_cs">♠</span>, 7<span class="poker_cs">♠</span>, 8<span class="poker_cs">♣</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Drill (Three of a Kind)</strong>
				<ul><li>Három ugyanolyan számozású vagy jelű lapból és két akármilyen másik lapból áll. Ha két ilyen találkozik, a magasabb drill nyer. Ha egyforma, a magasabb semleges lap, majd az alacsonyabb dönt.<br>Példa: 3<span class="poker_dh">♥</span>, 3<span class="poker_cs">♣</span>, 3<span class="poker_cs">♠</span>, 7<span class="poker_cs">♠</span>, 10<span class="poker_dh">♦</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Két pár (Two Pair)</strong>
				<ul><li>Kétszer két ugyanolyan számozású vagy jelű lapból áll. Ha két ilyen találkozik, a magasabb pár, majd az alacsonyabb, majd a semleges lap erőssége dönt.<br>Példa: 5<span class="poker_cs">♠</span>, 5<span class="poker_dh">♦</span>, 8<span class="poker_cs">♠</span>, 8<span class="poker_cs">♣</span>, 10<span class="poker_dh">♦</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Egy pár (One Pair)</strong>
				<ul><li>Két ugyanolyan számozású vagy jelű lapból és három akármilyen másik lapból áll. Ha két ilyen találkozik, a magasabb pár nyer. Ha egyforma, a semleges lapok döntenek.<br>Példa: 3<span class="poker_dh">♥</span>, 5<span class="poker_cs">♠</span>, 7<span class="poker_cs">♣</span>, 10<span class="poker_dh">♦</span>, 10<span class="poker_cs">♠</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Magas lap (High Card)</strong>
				<ul><li>Bármilyen lap.
			</li>
		</ul>',
	'JV_POKER_HELP_PLAY_QUESTION'			=> 'Hogyan kell játszani a pókert?',
	'JV_POKER_HELP_POKER_ANSWER'			=> 'A phpBB Holdem Póker egy kártyajáték, amit a regisztrált felhasználók játszhatnak egymás ellen. A póker használatát kizárólag egy adminisztrátor engedélyezheti. Ezzel együtt az alábbi útmutatót valószínűleg hasznosnak fogod találni.',
	'JV_POKER_HELP_POKER_QUESTION'			=> 'Mi az a phpBB Holdem Póker?',
	'JV_POKER_HELP_PRACTICE_ANSWER'			=> 'A szobába bárki bemehet játszani még, akkor is, ha nincs saját zsetonja. Leüléskor az előre meghatározott beszálló zsetonokat minden játékos megkap. A szobából a megnyert zsetonokat nem lehet kivinni.',
	'JV_POKER_HELP_PRACTICE_QUESTION'		=> 'Mit jelent, hogy gyakorló szoba?',
	'JV_POKER_HELP_PROFIT_ANSWER'			=> 'Az adminisztrátor aktiválta a profit rendszert, ami annyit tesz, hogy minden új leosztásnál minden játékostól a kisvak 40% levonásra kerül.',
	'JV_POKER_HELP_PROFIT_JP_ANSWER'		=> 'Ebből a levont összegből 80% a JackPot alapba kerül.',
	'JV_POKER_HELP_PROFIT_QUESTION'			=> 'Minden új leosztásnál kevesebb lesz a zsetonom, miért?',
	'JV_POKER_HELP_PTOC_ANSWER'				=> 'Igen, ehhez használd a póker főoldalán a saját profilodban lévő zseton kijelzés mellett a „Zseton váltó” gombot.',
	'JV_POKER_HELP_PTOC_QUESTION'			=> 'Válthatók-e át „%s”-ot zsetonra?',
	'JV_POKER_HELP_P_SHOUT_ANSWER'			=> 'Amennyiben az adminisztrátor engedélyezi, akkor igen. Ha nem engedélyezi, akkor az üzenőfalon csak a „Szünet” felírat lesz látható.',
	'JV_POKER_HELP_P_SHOUT_QUESTION'		=> 'Szünet idő alatt használhatom-e az üzenőfalat?',
	'JV_POKER_HELP_REG_ANSWER'				=> 'A phpBB Holdem Póker-t csak is a regisztrált felhasználók tudják játszani, ezért érdemes regisztrált tagnak lenni.',
	'JV_POKER_HELP_REG_QUESTION'			=> 'Miért kell egyáltalán regisztrálnom?',
	'JV_POKER_HELP_SHOUT_ANSWER'			=> 'Amennyiben az adminisztrátor adott rá engedélyt, akkor igen. Ha nem rendelkezünk a szükséges engedélyekkel, akkor az üzenőfalon csak a játék menetéről szóló üzeneteket olvashatjuk el.',
	'JV_POKER_HELP_SHOUT_QUESTION'			=> 'Játék során használhatom-e az üzenőfalat?',
	'JV_POKER_HELP_SHOUT_SOUND_ANSWER'		=> 'Igen. Az üzenőfal hangja külön kikapcsolható. Az üzenőfal hangjának kikapcsolása nem kapcsolja ki a játék hangját.',
	'JV_POKER_HELP_SHOUT_SOUND_QUESTION'	=> 'Kitudom kapcsolni az üzenőfal hangját?',
	'JV_POKER_HELP_STATUS_ANSWER'			=> 'A „Státusz” alatti mezőből olvasható ki, hogy az adott szobában játszanak-e éppen vagy nem.',
	'JV_POKER_HELP_STATUS_QUESTION'			=> 'Mit jelent a státusz?',
	'JV_POKER_HELP_SU_SHOUT_ANSWER'			=> 'Nem, az üzenőfalat csak ülő felhasználó használhatja.',
	'JV_POKER_HELP_SU_SHOUT_QUESTION'		=> 'Ha felállok használhatom-e az üzenőfalat?',
	'JV_POKER_HELP_S_SHOUT_ANSWER'			=> 'Az üzenőfal minden esetben csak az utolsó 8 sort tudja megjeleníteni, így további görgetésre nincs lehetőség.',
	'JV_POKER_HELP_S_SHOUT_QUESTION'		=> 'Hogyan tudom görgetni az üzeneteket?',
	'JV_POKER_HELP_TOUR_ANSWER'				=> 'A szobába csak azok a felhasználók játszhatnak, akiknek van saját zsetonjuk és a zsetonjuk mennyisége eléri a beszálló összegét. A szobából a megnyert zsetonok kivihető, így növelve a zseton egyenlegünk.',
	'JV_POKER_HELP_TOUR_QUESTION'			=> 'Mit jelent, hogy verseny szoba?',
	'JV_POKER_HELP_USER_STATS_ANSWER'		=> 'Igen, ha az adminisztrátor engedélyezi a statisztikai adatok megtekintését.',
	'JV_POKER_HELP_USER_STATS_QUESTION'		=> 'Megtudom tekinteni a felhasználók statisztikai adatait?'
]);
