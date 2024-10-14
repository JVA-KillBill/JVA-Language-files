<?php
/**
*
* @package phpBB Holdem Póker
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
	'JV_POKER_HELP_AUTH_ANSWER'				=> 'Jelenleg 3 felhasználói jogosultság létezik:
	<ul>
		<li>Használhatod-e a pókert.</li>
		<li>Használhatod-e az üzenőfalat.</li>
		<li>Megtekintheted-e a statisztikai adatokat.</li>
	</ul>',
	'JV_POKER_HELP_AUTH_QUESTION'			=> 'Milyen jogosultságok léteznek',
	'JV_POKER_HELP_AUTO_ACC_ANSWER'			=> 'Amennyiben a felhasználó jóváhagyja az „Automata Passz/Megad” funkciót, úgy ha ráesik a sor, akkor automatikusan passzolni fog vagy, ha van hívás, akkor automatikusan megadja a hívott összeget.',
	'JV_POKER_HELP_AUTO_ACC_QUESTION'		=> 'Mit jelent, hogy Automata Passz/Megad?',
	'JV_POKER_HELP_AUTO_ACF_ANSWER'			=> 'Amennyiben a felhasználó jóváhagyja az „Automata Passz/Bedob” funkciót, úgy ha ráesik a sor, akkor automatikusan passzolni fog vagy, ha van hívás, akkor automatikusan bedobja a lapjait.',
	'JV_POKER_HELP_AUTO_ACF_QUESTION'		=> 'Mit jelent, hogy Automata Passz/Bedob?',
	'JV_POKER_HELP_A_SHOUT_ANSWER'			=> 'Igen, minden játékos megtekintheti az archívumot a játék során.',
	'JV_POKER_HELP_A_SHOUT_QUESTION'		=> 'Van-e mód a régebbi üzenetek megtekintésére?',
	'JV_POKER_HELP_A_SHOUT_RE_ANSWER'		=> 'Ha nem jelennek meg az üzenetek, akkor vagy elhagytad a játékot vagy ép szünetet tartasz és szünet időben nincs engedélyezve az üzenőfal használata.',
	'JV_POKER_HELP_A_SHOUT_RE_QUESTION'		=> 'Archívum frissítése után eltűntek az üzenetek, miért?',
	'JV_POKER_HELP_A_SHOUT_R_ANSWER'		=> 'Igen, a címsor jobb oldalán megtalálható a frissítési gomb.',
	'JV_POKER_HELP_A_SHOUT_R_QUESTION'		=> 'Van-e mód az archívum frissítésére?',
	'JV_POKER_HELP_BAN_CHIPS_ANSWER'		=> 'Igen, abban az esetben, ha egy adminisztrátor elveszi a jogosultságodat a póker használatától, akkor %s<strong>ITT</strong>%s bármikor automatikusan visszaválthatód az összes megszerzett zsetonod.',
	'JV_POKER_HELP_BAN_CHIPS_QUESTION'		=> 'Ha elveszik a jogosultságomat a póker használatától, akkor van-e mód visszaváltanom a zsetonjaimat?',
	'JV_POKER_HELP_BET_ANSWER'				=> 'A tizedes érték a zsetonunk mennyiségétől függ. Ha több mint $100 zsetonunk van, akkor egész számmal emelhetünk például: ($5), ha kevesebb mint $100, de nagyobb mint $50 zsetonunk van, akkor egy tizedes értékkel emelhetünk például: ($5.50), ha a zsetonunk száma eléri a $50 vagy kevesebb, akkor már két tizedesig tehetünk tétet például: ($5.55).',
	'JV_POKER_HELP_BET_QUESTION'			=> 'Mitől függ a tét rakásnál a tizedes érték?',
	'JV_POKER_HELP_BLIND_ANSWER'			=> 'A kis/nagy vak mindig a minimum és maximum beszálló összegtől függnek. A minimum beszálló összeg mindig a nagy vak 20 szorosa, míg a maximum beszálló összeg a nagy vak 100 szorosa. A kis vak meg majdnem mindig esetben a nagy vak fele. Ez a szabály a verseny szobában annyival tér el, hogy a kis/nagy vak mindig az alap érték kétszerese. Továbbá a verseny szobában a kis/nagy vak a verseny előre haladásával folyamatosan nőni fog.',
	'JV_POKER_HELP_BLIND_QUESTION'			=> 'A szobák közti kis/nagy vak tétek különböznek, miért?',
	'JV_POKER_HELP_BLOCK_ADMIN'				=> 'Adminisztrátor beavatkozási kérdések',
	'JV_POKER_HELP_BLOCK_GAME'				=> 'Póker játék kérdések',
	'JV_POKER_HELP_BLOCK_GENERAL'			=> 'Általános kérdések',
	'JV_POKER_HELP_BLOCK_POKER'				=> 'phpBB Holdem Póker kérdések',
	'JV_POKER_HELP_BLOCK_ROOMS'				=> 'Póker szobákkal (Lobby) kapcsolatos kérdések',
	'JV_POKER_HELP_BLOCK_SHOUT'				=> 'Póker üzenőfal kérdések',
	'JV_POKER_HELP_BLOCK_STATS'				=> 'Póker statisztikai kérdések',
	'JV_POKER_HELP_CHIPS_C_ANSWER'			=> 'A zseton színekhez tartozó értékek a következők:
	<ul>
		<li>Fekete „C”: 0.01</li>
		<li>Fekete világos barna „C”: 0.10</li>
		<li>Szürke: $1</li>
		<li>Sárga: $10</li>
		<li>Rózsaszín: $100</li>
		<li>Piros: $500</li>
		<li>Kék: $1000</li>
		<li>Lila: $2000</li>
		<li>Zöld: $5000</li>
		<li>Barna: $10000</li>
	</ul>',
	'JV_POKER_HELP_CHIPS_C_QUESTION'		=> 'Mi az értékük a különféle színű zsetonoknak?',
	'JV_POKER_HELP_CHIPS_DC_ANSWER'			=> 'Igen mindaddig, amíg el nem érik a maximum megjeleníthető zseton mennyiségét, ami $186111.1 mivel egy zsetonból maximum 10 darab jelenik meg.',
	'JV_POKER_HELP_CHIPS_DC_QUESTION'		=> 'A zsetonok a megfelelő összeg szerint jelennek-e meg?',
	'JV_POKER_HELP_CM_ANSWER'				=> 'A „Szék” az jelenti, hogy az adott szobában mennyi ülőhely van engedélyezve. Ha az ülőhelyek száma 8, akkor 8 felhasználó ülhet be egyszerre az adott szobában. A „Tag” azt takarja, hogy a szobában mennyi felhasználó ült már le. Ha az adminisztrátor lezárja a szobát az azt jelenti, hogy ha a szoba megtelt, akkor további felhasználó már nem mehet be az érintett szobába, addig míg egy ülőhely meg nem üresedik.',
	'JV_POKER_HELP_CM_QUESTION'				=> 'Mit jelent a Szék/Tag?',
	'JV_POKER_HELP_CONFIG_ANSWER'			=> 'Számos globális beállítás létezik, de erről csak néhányat említünk meg, ami befolyásolhatja a játékot:
	<ul>
		<li>IP ellenőrzés.</li>
		<li>Üzenőfal engedélyezése.</li>
		<li>Üzenőfal szünet időben.</li>
		<li>Emotikonok engedélyezése.</li>
		<li>Kidobási idő.</li>
		<li>Szünet idő.</li>
		<li>Tétlenségi idő.</li>
		<li>Kártyalapok bemutatásának ideje.</li>
	</ul>',
	'JV_POKER_HELP_CONFIG_QUESTION'			=> 'Milyen globális beállítások léteznek',
	'JV_POKER_HELP_CREATE_ANSWER'			=> 'Ezt a kiegészítőt (eredeti formájában) a <a href="https://jv-arcade.com/">JV-Arcade Group</a> készítette, adta ki, és gyakorolja a szerzői jogokat felette. A <a href="https://jv-arcade.com/License.html">JVA JV-Arcade licensz</a> alatt érhető el, és nem terjeszthető. További információért lásd a linket.',
	'JV_POKER_HELP_CREATE_QUESTION'			=> 'Ki készítette ezt a phpBB Holdem Póker kiterjesztést?',
	'JV_POKER_HELP_DISABLE_ANSWER'			=> 'Ebben az esetben 3 opció lehetséges:
	<ul>
		<li>1. Az összes gyakorló szoba azonnal leállításra kerül és az összes felhasználó feláll.</li>
		<li>2. A normál szobák tovább üzemelnek az aktuális parti végéig. A parti végén az összes felhasználó automatikusan felállításra kerül.</li>
		<li>3. A Verseny szobák tovább üzemelnek a verseny végéig. A verseny végeztével az összes felhasználó automatikusan felállításra kerül.</li>
	</ul>',
	'JV_POKER_HELP_DISABLE_QUESTION'		=> 'Mi történik, ha az adminisztrátor kikapcsolja a fórumot vagy a pókert?',
	'JV_POKER_HELP_DROP_TIME_ANSWER'		=> 'Ebben az esetben életbe lép a várakozási (kidobási) idő visszaszámlálása, amit az adminisztrátor beállított. Például: Ha a kidobási idő 5 perc, akkor 5 percig maradsz ülve az asztalnál és ez idő leteltével az aktuális parti végénél, automatikusan felállításra kerülsz. Ha a beállított időn belül visszatér az interneted, akkor onnan folytatod a játékot ahol éppen tart.',
	'JV_POKER_HELP_DROP_TIME_QUESTION'		=> 'Mi történik, ha megszakad az internet kapcsolatom?',
	'JV_POKER_HELP_DROP_TOKEN_ANSWER'		=> 'Ebben az esetben 3 opció lehetséges:
	<ul>
		<li>1. Gyakorló szobából nem lehet kivinni zsetont, így a még bent lévő zsetonjaid törlésre fognak kerülni.</li>
		<li>2. A Normál szobából, ha kidobásra kerülsz, akkor természetesen a még meglévő zsetonod visszaadásra kerül.</li>
		<li>3. A Verseny szobából csak is a győztes viheti ki a nyereményt. Tehát, ha a verseny alatt kerülsz kidobásra, akkor a még meglévő zsetonod részarányosan szétosztásra fog kerülni az aktuális játékosok között. Ha a verseny megkezdése előtt kerülsz kidobásra, akkor a zsetonod visszaadásra kerül.</li>
	</ul>',
	'JV_POKER_HELP_DROP_TOKEN_QUESTION'		=> 'Mi történik a zsetonommal, ha kidobásra kerülök?',
	'JV_POKER_HELP_ER_ANSWER'				=> 'Az adminisztrátor játék közben csak is a gyakorló szobákat tudja módosítani. A normál és a verseny szobák aktív játék alatt nem módosíthatók és nem is törölhetők. Azonban a jogosultságokat és a globális beállításokat bármikor módosíthatja és ezek a jogosultságok illetve beállítások minden szobára illetve felhasználóra kihatással lehetnek.',
	'JV_POKER_HELP_ER_QUESTION'				=> 'Mi történik, ha az adminisztrátor módosítja a szoba beállításait?',
	'JV_POKER_HELP_EXIT_ANSWER'				=> 'Ebben az esetben 3 opció lehetséges:
	<ul>
		<li>1. Gyakorló szobából nem lehet kivinni zsetont, így a bent lévő zsetonjaid törlésre fognak kerülni és a szobát elhagyod.</li>
		<li>2. Ha Normál szobából kilépsz, akkor a megszerzett zsetonok hozzáadásra fognak kerülni a zseton egyenlegedhez és a szobát elhagyod.</li>
		<li>3. A Verseny szobából csak is a győztes viheti ki a nyereményt. Tehát, ha a verseny alatt kilépsz a játékból, akkor a meglévő zsetonod részarányosan szétosztásra fog kerülni az aktuális játékosok között. Ha még a verseny megkezdése előtt kilépsz, akkor a zsetonod visszaadásra kerül és a szobát elhagyod.</li>
	</ul>',
	'JV_POKER_HELP_EXIT_QUESTION'			=> 'Mi történik, ha megnyomom a kilépés gombot?',
	'JV_POKER_HELP_EXT_DIS_ANSWER'			=> 'Ebben az esetben az összes szoba típus leáll. Ha az adminisztrátor visszakapcsolja a kidobási idő előtt, akkor a játékok folytatódhatnak. Amennyiben a kidobási idő után kapcsolja vissza, akkor az aktuális játékok kiértékelésre kerülnek, ha valaki belép az adott szobába.',
	'JV_POKER_HELP_EXT_DIS_QUESTION'		=> 'Mi történik, ha az adminisztrátor kikapcsolja a „phpBB Holdem Póker” kiterjesztést?',
	'JV_POKER_HELP_E_SHOUT_ANSWER'			=> 'Amennyiben az adminisztrátor engedélyezi, akkor igen.',
	'JV_POKER_HELP_E_SHOUT_QUESTION'		=> 'Használhatók-e az üzeneteimben szmájlikat?',
	'JV_POKER_HELP_GAME_SOUND_ANSWER'		=> 'Igen. A játék során bármikor ki/be kapcsolható a játék hangja. Ezzel az összes játék hang beleértve az üzenőfal hangja is kikapcsolásra kerül. A beállítás minden esetben megjegyzésre kerül.',
	'JV_POKER_HELP_GAME_SOUND_QUESTION'		=> 'Kitudom kapcsolni a játék hangját?',
	'JV_POKER_HELP_INACTIVE_ANSWER'			=> 'Ebben az esetben életbe lép a „Tétlenségi idő” visszaszámlálása, amit az adminisztrátor beállított. Például: Ha a tétlenségi idő 10 perc, akkor 10 percig maradhatsz ügy ülve, hogy nem reagálsz semmire. Az idő leteltével az aktuális parti végénél, automatikusan felállításra kerülsz. Erre azért van szükség, mert senki sem szereti, ha valaki szándékosan lelassítja a játék menetét.',
	'JV_POKER_HELP_INACTIVE_QUESTION'		=> 'Mi történik, ha a játék során nem reagálok semmire?',
	'JV_POKER_HELP_INCOME_ANSWER'			=> 'Alap esetben a jövedelmet csak a „Normál” és a „Verseny” szobák tárolják. A jövedelem az az összeg, amit egy felhasználó nyer vagy veszít a játéka során. A jövedelem csak is a játszott összeget veszi figyelembe. Tehát ha például egy „Normál” szobába beül egy felhasználó $100-al és ebből az összegből bekerül a főnyeremény alapba pl. 5% az az $5, akkor a játszott összeg $95 lesz figyelembe véve. Ha ezt az összeget a felhasználó elveszíti, akkor a jövedelme $-95 zseton lesz.',
	'JV_POKER_HELP_INCOME_QUESTION'			=> 'Mi az a jövedelem?',
	'JV_POKER_HELP_JACKPOT_ANSWER'			=> 'A főnyeremény használatot az adminisztrátor kapcsolhatja be és határozza meg milyen százalékban dolgozzon. A főnyeremény alap a Normál szobákban halmozódhatnak fel a beállított százalék alapján, amit a felhasználók gyűjtenek össze a saját zseton készletükből minden egyes leülés esetében. A főnyeremény kivételére két lehetőség van:
	<ul>
		<li>Az adminisztrátor átkapcsolja a szoba típusát Normál-ról Verseny-re. Így a verseny győztese megszerezheti a felhalmozódott főnyereményt is a nyereménye mellé.</li>
		<li>Az adminisztrátor létrehoz egy új verseny szobát és a főnyeremény értékét átviszi a Normál szobából a Verseny szobába.</li>
	</ul>',
	'JV_POKER_HELP_JACKPOT_QUESTION'		=> 'Mi az a főnyeremény és hogyan szerezhető meg?',
	'JV_POKER_HELP_LEADERS_ANSWER'			=> 'A bajnokok a jövedelem alapján vannak elsősorban rangsorolva és másodlagosan a győzelmi arány szerint.',
	'JV_POKER_HELP_LEADERS_QUESTION'		=> 'Mi alapján vannak rangsorolva a bajnokok?',
	'JV_POKER_HELP_LEARNER_ANSWER'			=> 'A szobába bárki bemehet játszani még, akkor is, ha nincs saját zsetonja. Leüléskor az előre meghatározott beszálló zsetonokat minden játékos megkap. A szobában minden játékos nyílt kártyákkal játszanak, így esélyük van az egymás tanítására. A szobából a megnyert zsetonokat nem lehet kivinni.',
	'JV_POKER_HELP_LEARNER_QUESTION'		=> 'Mit jelent, hogy tanuló szoba?',
	'JV_POKER_HELP_LIMIT_ANSWER'			=> 'Erre a kérdésre már leírtuk a választ a „Hogyan kell játszani a pókert/Limitszabályok” alatt.',
	'JV_POKER_HELP_LIMIT_QUESTION'			=> 'Mit jelent, hogy Fix/Nincs limit?',
	'JV_POKER_HELP_L_STATS_ANSWER'			=> 'A tanuló szobákban a statisztikai adatok nem kerülnek tárolásra.',
	'JV_POKER_HELP_L_STATS_QUESTION'		=> 'A tanuló szobák is mentik a statisztikai adatokat?',
	'JV_POKER_HELP_MAX_CHIPS_ANSWER'		=> 'Ebben az esetben 2 opció lehetséges:
	<ul>
		<li>1. A Gyakorló, Normál szobában igen. Ha folyamatosan nyersz és nem állsz fel az asztaltól, akkor a zsetonjaid bármeddig növekedhet.</li>
		<li>2. A Verseny szobákban nem.</li>
	</ul>',
	'JV_POKER_HELP_MAX_CHIPS_QUESTION'		=> 'Játszhatók-e több zsetonnal, mint ami a maximum beszálló?',
	'JV_POKER_HELP_MOVETIME_ANSWER'			=> 'Ha ilyen problémánk van, akkor azt jelentsük egy adminisztrátornak.',
	'JV_POKER_HELP_MOVETIME_QUESTION'		=> 'A mozgási idő túl kicsi mi a teendő?',
	'JV_POKER_HELP_MOVE_TIME_ANSWER'		=> 'A „Mozgási idő” az az idő amely alatt egy felhasználó megteheti a döntését, hogy passzol, tétet emel vagy esetleg bedobja a lapjait. Ha ez az idő letelik, akkor automatikusan két opció lehetséges:
	<ul>
		<li>1. Ha nincs hívás, akkor automatikusan passzolunk.</li>
		<li>2. Ha van hívás, akkor automatikusan bedobjuk a lapjainkat.</li>
	</ul>',
	'JV_POKER_HELP_MOVE_TIME_QUESTION'		=> 'Mi az a mozgási idő?',
	'JV_POKER_HELP_NORMAL_ANSWER'			=> 'A szobába csak azok a felhasználók játszhatnak, akiknek van saját zsetonjuk és a zsetonjuk mennyisége eléri a minimum beszálló összeget. Minden szobának van egy beállított minimum és egy maximum beszálló összeg meghatározva. A felhasználók minimum maximum ennyi zsetonnal tudnak leülni az asztalhoz. A szobából a megnyert zsetonok kivihető, így növelve a zseton egyenlegünk.',
	'JV_POKER_HELP_NORMAL_QUESTION'			=> 'Mit jelent, hogy normál szoba?',
	'JV_POKER_HELP_OFFLINE_ANSWER'			=> 'Ha a felhasználó avatarja szürkén villog az azt jelzi, hogy a felhasználó jelenleg offline vagyis nincs a szobával internet kapcsolata. Ez két okból lehetséges:
	<ul>
		<li>A felhasználó internet kapcsolata megszűnt.</li>
		<li>Az adminisztrátor csak aktív ablakban engedélyezi a szoba működését vagyis a felhasználó éppen egy másik weblapot, oldalt nézeget. Ebben az esetben a felhasználó semmilyen új adatot nem kap a póker jelenlegi állásáról. Egyfajta töltési szünet jelenik meg számára és míg nem nézi újra aktívan a pókert, addig offline is marad.</li>
	</ul>',
	'JV_POKER_HELP_OFFLINE_QUESTION'		=> 'A felhasználó avatarja szürkén villog, ez mit jelent?',
	'JV_POKER_HELP_PAUSE_ANSWER'			=> 'Ha megnyomod a szünet gombot az egyenlő azzal, hogy kiszállsz a játékból, így ha a parti folyik, akkor a lapjaid bedobásra fognak kerülni. Ezt az opciót, akkor érdemes használni, ha a játékos még játszani akar és nem szeretné, hogy valaki más elfoglalná a helyét. Természetesen a szünet ideje limitálva van, amit az adminisztrátor határozz meg.',
	'JV_POKER_HELP_PAUSE_QUESTION'			=> 'Mi történik, ha megnyomom a szünet gombot?',
	'JV_POKER_HELP_PD_ANSWER'				=> 'A „phpBB Holdem Póker” minden aktuális játékos IP-címét menti és tárolja addig, amíg a felhasználó fel nem áll az asztaltól, mivel ha egy felhasználó feláll az asztaltól, akkor minden adat törlésre kerül és csak a statisztikai adatok maradnak meg. Az IP cím azért kerül tárolásra a játszás során, hogy megakadályozhassuk, hogy egy IP címmel több felhasználó ülhessen le egy asztalhoz. Természetesen az IP címek ellenőrzését az adminisztrátor ki/be kapcsolhatja.',
	'JV_POKER_HELP_PD_QUESTION'				=> 'A „phpBB Holdem Póker” tárol-e személyes adatokat?',
	'JV_POKER_HELP_PLAY_ANSWER'				=> 'A póker az egyik legnépszerűbb kártyajáték a világon. A lényege, hogy a játékosok a zárt kártyáikból a legjobbat kihozva elvigyék az asztal közepén lévő kasszát (angolul POT-ot). Ezt a legjobb lap kombinációval tehetik meg, tehát minden játékosnak arra kell törekednie, hogy a saját kezében legyen a legjobb. A játékot 2-8 főig játszható egy szobában. A játékban 52 lapos francia kártyát használunk, jokerek nélkül. Minden játékos két saját zárt lapot kap, amit a többi játékos nem láthat és nem használhat. A játék során az asztalra öt közös nyílt lapot osztanak színnel fölfelé, amit minden játékos lát és felhasználhat. A játékos a saját lapjaiból és a közös lapokból igyekszik a lehető legjobb „ötlapos kombináció”-t összeállítani. Az a játékos nyeri meg a licitálások során összegyűlt értéket, akinek a legerősebb lapjai vannak. Egy pakli francia kártyának (jokerek nélkül) 4 különböző színe van, és minden szín 13 különböző értékű lapból áll, ez adja ki az 52 lapos paklit. A 4 szín sorrendje: <span class="poker_cs">♣</span> treff (clubs) <span class="poker_dh">♦</span> káró (diamond) <span class="poker_dh">♥</span> kőr (hearts) <span class="poker_cs">♠</span> pikk (spades). Minden szín egyenlő értékűnek számít a pókerkezek értékelésénél. A 13 lap értékének sorrendje: A (ász), 2, 3, 4, 5, 6, 7, 8, 9, 10, J (bubi), Q (dáma), K (király). Az ász nem csak az egyes számot jelöli, hanem a király után egy ász lap, vagyis a legmagasabb lapnak minősül.
		<br><br><strong>Osztó:</strong><br>
		Egy pókerasztalnál mindig van egy osztó (Dealer) pozíció. Az osztó kezeli a kártyákat, megkeveri és kiosztja azokat. Az osztógomb (D) jelzi a „játékos osztó”-t, aki az osztó lesz és részt is vesz a játékban.

		<br><br><strong>A kis vak és a nagy vak:</strong><br>
		Az osztógombtól balra lévő első játékos a kis vak (Small Blind) és a kis vaktól balra lévő első játékos pedig a nagy vak (Big Blind). Ők a vakok, azok a játékosok, akik még az osztás előtt, a saját lapok ismerete nélkül, beteszik a vaktéteket. A kis vak a kis vak-tétet, a nagy vak a nagy vak-tétet, amit kötelesek megadni.

		<br><br><strong>A licitálás:</strong><br>
		A pókerben zsetonokat, „Chip”-eket használnak a licitáláshoz, ami a készpénzt helyettesíti a játék során. A licitkörben a licitálás mindig bal irányba halad, és minden „aktív játékos” (aki még nem dobta el a lapjait) licitál, és addig folytatódik, amíg az aktív játékosok az emelt tétet tovább már nem emelik, csak tartják, vagy a lapjaikat eldobják. A licitálások, az emelések száma a limitszabályoknak megfelelően történik.

		<br><br><strong>Osztás:</strong><br>
		Az osztó megkeveri a paklit. A lapok kiosztása előtt a kis vak beteszi a kis vak-tétet, a nagy vak pedig a nagy vak-tétet, ezt követően az osztó bal irányba minden játékosnak kiosztja a lapjait. Ezután kezdődik a Pre-Flop (az első licitkör), amely eltér a játékban lévő többi licitkörtől.

		<br><br><strong>Pre-Flop (első licitkör):</strong><br>
		Az első licitkört a nagy vaktól balra lévő első játékos kezdi meg, és három licitet tehet:
		<ul>
			<li>Megad (Call) megadja a tétet.</li>
			<li>Emelés (Raise) emeli a tétet, a limitszabályok szerint.</li>
			<li>Eldobás (Fold) eldobja a lapjait, színükkel lefelé, így kiesik a játékból.</li>
		</ul>

		A licitkör bal irányba halad, és a játékosok licitálhatnak. Ha csak tartották a tétet, akkor:
		<ul>
			<li>A kis vaknak minimum a kis vak-téttel meg kell emelnie a saját tétjét, vagy el kell dobnia a lapjait.</li>
			<li>A nagy vak tartja, így nem tesz be újabb tétet, vagy emeli a tétet minimum a nagy vak értékével megegyezően vagy többel, esetleg eldobja a lapjait.</li>
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

		Ha egy játékos emeli a tétet, akkor megkezdődik a licitálás. Egy licitkör végén az osztó összeszedi a téteket és a Potba teszi.

		<br><br><strong>Turn (harmadik licitkör)</strong><br>
		Az osztó leoszt egy „Turn” kártyát a közös lapok közé. Így már négy közös lapot látnak a játékosok. Ezt követően a harmadik licitkör kezdődik.

		<br><br><strong>River (negyedik licitkör)</strong><br>
		Az osztó leosztja a közös lapok közé az utolsó, ötödik, úgynevezett „River” kártyát. Most már mindenkinek hét lapja van és ezek közül ötöt kell felhasználni ahhoz, hogy kialakítson egy pókerkezet, ami valószínűleg erősebb, mint a többi játékosé. Ekkor az utolsó, negyedik licitkör kezdődik, és mikor befejeződött, az osztó megkéri az aktív játékosokat, hogy fedjék fel a lapjaikat.

		<br><br><strong>Showdown (lapok bemutatása)</strong><br>
		Amennyiben az utolsó licitkör befejezése után egynél több játékos marad a játékban, úgy az aktív játékosok lapjai bemutatásra kerülnek. A Pot-ot a legerősebb pókerkezet birtokló játékos nyeri el. Abban az esetben, ha kettő vagy több játékos egyforma pókerkezet mutat fel, akkor a Pot egyenlő arányban szétosztásra kerül. Ha a Pot értéke nem osztható egyenlő arányban, akkor az osztógombtól balra lévő első nyertes játékost illeti meg a többlet. A következő osztás előtt az osztógombot mindig eggyel balra kell tenni, így minden játékban más és más az osztó, és mások adják a vakokat is.

		<br><br><strong>A pókerkezek értékelése</strong><br>
		A pókerben a pókerkéz, egy olyan ötlapos kombináció, amit a játékos a két saját lapjából és az asztalon lévő öt közös lapból (összesen hét lapból) állít össze. A játékos a saját lapokból akár egyet sem, vagy bármelyiket felhasználhatja. A lapok színei egyenlő értékűek, azonos kombináció esetén a kísérő lap dönti el, hogy melyik játékos nyeri a játékot. A kísérő (Kicker) az a lap, amelyik nem tartozik a kombinációhoz, csak kiegészíti, „kíséri” az ötlapos kombinációt. Ha minden lap azonos, akkor a Pot-ot egymás között szétosztják a nyertesek.

		<br><br><strong>Limitszabályok</strong><br>
		A legkisebb tét mindig megegyezik a nagy vak összegével.
		<ul>
			<li>Fix limit esetében maximum háromszor lehetséges a nagy vak összegével azonos mértékével emelni a Pre-Flop (első licitkör) és a Flop (második licitkör)-ben. A Turn (harmadik licitkör) és River (negyedik licitkör) esetében ugyan ez a szabály csak itt a nagy vak kétszeresével lehet már emelni a tétet.</li>
			<li>Nincs limit esetében bármekkora összeggel emelhető a tét és az emelések száma sincs korlátozva.</li>
		</ul>

		<strong>Pókerkezek:</strong>
		<ul>
			<li><strong>Royal flöss (royal flush)</strong>
				<ul><li>A legerősebb lapkombináció. Egyszínű 10-es, bubi, dáma, király, ász lapokból áll. Ha két ilyen találkozik, akkor döntetlen (osztozás a nyereményen).<br>Példa: 10<span class="poker_dh">♥</span>, J<span class="poker_dh">♥</span>, Q<span class="poker_dh">♥</span>, K<span class="poker_dh">♥</span>, A<span class="poker_dh">♥</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Színsor (straight flush)</strong>
				<ul><li>Öt egyszínű sorba rendezhető lapból áll. Ha két ilyen találkozik, a legmagasabb lap dönt. Ha egyforma, akkor döntetlen (osztozás a nyereményen).<br>Példa: 5<span class="poker_cs">♣</span>, 6<span class="poker_cs">♣</span>, 7<span class="poker_cs">♣</span>, 8<span class="poker_cs">♣</span>, 9<span class="poker_cs">♣</span></li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Póker (four of a kind)</strong>
				<ul><li>Négy ugyanolyan számozású vagy jelű lapból és egy akármilyen másik lapból áll. Ha két ilyen találkozik, a magasabb póker nyer.<br>Példa: 7<span class="poker_dh">♥</span>, 7<span class="poker_cs">♠</span>, 7<span class="poker_cs">♣</span>, 7<span class="poker_dh">♦</span>, 10<span class="poker_cs">♠</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Full (full house)</strong>
				<ul><li>Három ugyanolyan számozású vagy jelű lapból és két másik ugyanolyan számozású vagy jelű lapból áll. Ha két ilyen találkozik, a magasabb drill nyer. Ha egyforma, a magasabb pár nyer.<br>Példa: 5<span class="poker_dh">♦</span>, 5<span class="poker_cs">♣</span>, 5<span class="poker_cs">♠</span>, 8<span class="poker_dh">♥</span>, 8<span class="poker_cs">♠</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Flöss (flush)</strong>
				<ul><li>Öt ugyanolyan színű lapból áll. Ha két ilyen találkozik, a legmagasabb lap dönt. Ha egyforma, a második legmagasabb dönt, és így tovább…<br>Példa: 2<span class="poker_cs">♠</span>, 4<span class="poker_cs">♠</span>, 5<span class="poker_cs">♠</span>, 7<span class="poker_cs">♠</span>, 10<span class="poker_cs">♠</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Sor (straight)</strong>
				<ul><li>Öt sorba rendezhető lapból áll. Ha két ilyen találkozik, a legmagasabb lap dönt. Ha egyforma, akkor döntetlen (osztozás a nyereményen).<br>Példa: 4<span class="poker_dh">♥</span>, 5<span class="poker_dh">♦</span>, 6<span class="poker_cs">♠</span>, 7<span class="poker_cs">♠</span>, 8<span class="poker_cs">♣</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Drill (three of a kind)</strong>
				<ul><li>Három ugyanolyan számozású vagy jelű lapból és két akármilyen másik lapból áll. Ha két ilyen találkozik, a magasabb drill nyer. Ha egyforma, a magasabb semleges lap, majd az alacsonyabb dönt.<br>Példa: 3<span class="poker_dh">♥</span>, 3<span class="poker_cs">♣</span>, 3<span class="poker_cs">♠</span>, 7<span class="poker_cs">♠</span>, 10<span class="poker_dh">♦</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Két pár (two pairs)</strong>
				<ul><li>Kétszer két ugyanolyan számozású vagy jelű lapból áll. Ha két ilyen találkozik, a magasabb pár, majd az alacsonyabb, majd a semleges lap erőssége dönt.<br>Példa: 5<span class="poker_cs">♠</span>, 5<span class="poker_dh">♦</span>, 8<span class="poker_cs">♠</span>, 8<span class="poker_cs">♣</span>, 10<span class="poker_dh">♦</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Egy pár (one pair)</strong>
				<ul><li>Két ugyanolyan számozású vagy jelű lapból és három akármilyen másik lapból áll. Ha két ilyen találkozik, a magasabb pár nyer. Ha egyforma, a semleges lapok döntenek.<br>Példa: 3<span class="poker_dh">♥</span>, 5<span class="poker_cs">♠</span>, 7<span class="poker_cs">♣</span>, 10<span class="poker_dh">♦</span>, 10<span class="poker_cs">♠</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Magas lap (high card)</strong>
				<ul><li>Bármilyen lap.
			</li>
		</ul>',
	'JV_POKER_HELP_PLAY_QUESTION'			=> 'Hogyan kell játszani a pókert?',
	'JV_POKER_HELP_POINTS_ANSWER'			=> 'Természetesen, ugyan úgy ahogy a zsetonváltás történik.',
	'JV_POKER_HELP_POINTS_QUESTION'			=> 'A megszerzett zsetonokat vissza lehet váltani?',
	'JV_POKER_HELP_POKER_ANSWER'			=> 'A phpBB Holdem Póker egy kártyajáték, amit a regisztrált felhasználók játszhatnak egymás ellen. A póker használatát kizárólag egy adminisztrátor engedélyezheti. Ezzel együtt az alábbi útmutatót valószínűleg hasznosnak fogod találni.',
	'JV_POKER_HELP_POKER_QUESTION'			=> 'Mi az a phpBB Holdem Póker?',
	'JV_POKER_HELP_PRACTICE_ANSWER'			=> 'A szobába bárki bemehet játszani még, akkor is, ha nincs saját zsetonja. Leüléskor az előre meghatározott beszálló zsetonokat minden játékos megkap. A szobából a megnyert zsetonokat nem lehet kivinni.',
	'JV_POKER_HELP_PRACTICE_QUESTION'		=> 'Mit jelent, hogy gyakorló szoba?',
	'JV_POKER_HELP_PS_ANSWER'				=> 'Ebben az esetben az összes Normál és Verseny szoba leáll. Ha az adminisztrátor visszakapcsolja a kidobási idő előtt, akkor a játékok folytatódhatnak. Amennyiben a kidobási idő után kapcsolja vissza, akkor az aktuális játékok kiértékelésre kerülnek, ha valaki belép az adott szobába.',
	'JV_POKER_HELP_PS_QUESTION'				=> 'Mi történik, ha az adminisztrátor kikapcsolja a „Pontrendszert”?',
	'JV_POKER_HELP_P_SHOUT_ANSWER'			=> 'Amennyiben az adminisztrátor engedélyezi, akkor igen. Ha nem engedélyezi, akkor az üzenőfalon csak a „Szünet” felírat lesz látható.',
	'JV_POKER_HELP_P_SHOUT_QUESTION'		=> 'Szünet idő alatt használhatom-e az üzenőfalat?',
	'JV_POKER_HELP_P_STATS_ANSWER'			=> 'Alap esetben igen kivéve a jövedelmet. Ha az adminisztrátor engedélyezi a gyakorló szobákban is a jövedelem tárolását, akkor minden statisztikai adatot a gyakorló szobák is tárolnak.',
	'JV_POKER_HELP_P_STATS_QUESTION'		=> 'A gyakorló szobák is mentik a statisztikai adatokat?',
	'JV_POKER_HELP_REG_ANSWER'				=> 'A phpBB Holdem Póker-t csak is a regisztrált felhasználók tudják játszani, ezért érdemes regisztrált tagnak lenni.',
	'JV_POKER_HELP_REG_QUESTION'			=> 'Miért kell egyáltalán regisztrálnom?',
	'JV_POKER_HELP_RESET_ANSWER'			=> 'Ebben az esetben a törlés előtt automatikusan átváltásra kerül az összes felhasználó zsetonja.',
	'JV_POKER_HELP_RESET_QUESTION'			=> 'Mi történik a zsetonommal, ha egy adminisztrátor törli a felhasználók póker adatait?',
	'JV_POKER_HELP_RH_ANSWER'				=> 'Ha egy szoba kiírás piros kiemelést kap, akkor az azt jelenti, hogy a szobában már nem tartózkodik senki, de egy aktív még NEM befejezett játék van folyamatban. Ennek számos okai lehetnek:
	<ul>
		<li>1. A szerver az adott játék alatt leállt.</li>
		<li>2. Az adminisztrátor kikapcsolta a fórumot.</li>
		<li>3. Az adminisztrátor kikapcsolta a phpBB Holdem Póker-t.</li>
		<li>4. Az adminisztrátor kikapcsolta a phpBB Holdem Póker-hez társított pontrendszert.</li>
		<li>5. Az adminisztrátor kikapcsolta az adott szobát.</li>
		<li>6. Az adminisztrátor megváltoztatta az adott szoba típusát.</li>
		<li>7. A felhasználók nem léptek ki rendesen a szobából. Például csak bezárták a böngésző ablakot még a játék alatt.</li>
		<li>8. A felhasználók internet kapcsolata megszakadt a webhellyel.</li>
	</ul>
	Ha egy ilyen kiemelt szobába belépünk, akkor a még éppen zajló játék azonnali kiértékelésre és befejezésre kerül. Természetesen a belépő felhasználó ebből semmit sem fog látni. Illetve ha leül az asztalhoz, akkor láthatja az üzenőfalon, hogy ki nyerte az utolsó partit.',
	'JV_POKER_HELP_RH_QUESTION'				=> 'Láttam olyan szoba kiírást aminek a háttere piros kiemelést kapott, miért?',
	'JV_POKER_HELP_SHOUT_ANSWER'			=> 'Amennyiben az adminisztrátor adott rá engedélyt, akkor igen. Ha nem rendelkezünk a szükséges engedélyekkel, akkor az üzenőfalon csak a játék menetéről szóló üzeneteket olvashatjuk el.',
	'JV_POKER_HELP_SHOUT_QUESTION'			=> 'Játék során használhatom-e az üzenőfalat?',
	'JV_POKER_HELP_SHOUT_SOUND_ANSWER'		=> 'Igen. Az üzenőfal hangja külön kikapcsolható. Az üzenőfal hangjának kikapcsolása nem kapcsolja ki a játék hangját.',
	'JV_POKER_HELP_SHOUT_SOUND_QUESTION'	=> 'Kitudom kapcsolni az üzenőfal hangját?',
	'JV_POKER_HELP_SHOWDOWN_ANSWER'			=> 'A játék végén lévő lapok bemutatásának idejét az adminisztrátor határozza meg.',
	'JV_POKER_HELP_SHOWDOWN_QUESTION'		=> 'A játék végén meddig láthatók a kártyák?',
	'JV_POKER_HELP_STAND_UP_ANSWER'			=> 'Ebben az esetben 2 opció lehetséges:
	<ul>
		<li>1. Gyakorló szobából nem lehet kivinni zsetont, így a bent lévő zsetonjaid törlésre fognak kerülni és a szobát nem hagyod el.</li>
		<li>2. Ha a Normál szobából felállsz, akkor a megszerzett zsetonok hozzáadásra fognak kerülni a zseton egyenlegedhez és a szobát nem hagyod el.</li>
	</ul>',
	'JV_POKER_HELP_STAND_UP_QUESTION'		=> 'Mi történik, ha megnyomom a feláll gombot?',
	'JV_POKER_HELP_STATUS_ANSWER'			=> 'A „Státusz” alatti mezőből olvasható ki, hogy az adott szobában játszanak-e éppen vagy nem.',
	'JV_POKER_HELP_STATUS_QUESTION'			=> 'Mit jelent a státusz?',
	'JV_POKER_HELP_SU_SHOUT_ANSWER'			=> 'Nem, az üzenőfalat csak ülő felhasználó használhatja.',
	'JV_POKER_HELP_SU_SHOUT_QUESTION'		=> 'Ha felállok használhatom-e az üzenőfalat?',
	'JV_POKER_HELP_S_SHOUT_ANSWER'			=> 'Az üzenőfal minden esetben csak az utolsó 8 sort tudja megjeleníteni, így további görgetésre nincs lehetőség.',
	'JV_POKER_HELP_S_SHOUT_QUESTION'		=> 'Hogyan tudom görgetni az üzeneteket?',
	'JV_POKER_HELP_TOKEN_ANSWER'			=> 'A zseton váltás csak, akkor lehetséges, ha a „phpBB Holdem Póker”-hez társítva lett egy „Pontrendszer”. Ha a társítás már megtörtént, akkor a felhasználók a póker főoldalán a saját profiljukban lévő zseton kijelzése mellett, megtalálható lesz a „Zseton váltó” gomb.',
	'JV_POKER_HELP_TOKEN_QUESTION'			=> 'Hogyan tudok zsetont váltani?',
	'JV_POKER_HELP_TOUR_ANSWER'				=> 'A szobába csak azok a felhasználók játszhatnak, akiknek van saját zsetonjuk és a zsetonjuk mennyisége eléri a beszálló összeget. A szobából a megnyert zsetonok kivihető, így növelve a zseton egyenlegünk.',
	'JV_POKER_HELP_TOUR_QUESTION'			=> 'Mit jelent, hogy verseny szoba?',
	'JV_POKER_HELP_USER_STATS_ANSWER'		=> 'Igen, ha az adminisztrátor engedélyezi a statisztikai adatok megtekintését.',
	'JV_POKER_HELP_USER_STATS_QUESTION'		=> 'Megtudom tekinteni a felhasználók statisztikai adatait?',
	'JV_POKER_HELP_U_INCOME_ANSWER'			=> 'A jövedelem minden esetben csak akkor frissül, ha a felhasználó feláll az asztaltól.',
	'JV_POKER_HELP_U_INCOME_QUESTION'		=> 'Játék közben a jövedelmem nem változik, miért?',
	'JV_POKER_HELP_W_SHOUT_ANSWER'			=> 'Az üzenőfalra kiírt megnyert zsetonok száma csak is a valós megnyert összeget takarja. A nyert összeg egy esetben térhet el a „Pot” azaz a kassza értékétől. Például, ha valaki több zsetont tett fel tétnek mint te, és tételezzük fel, hogy te nyersz, akkor a különbséget vissza kell adni a jogos tulajdonosának. Mindig csak annyit nyerhetünk, amit mi magunk is megtudunk adni tétnek.',
	'JV_POKER_HELP_W_SHOUT_QUESTION'		=> 'Az üzenőfalon kiírt nyeremény nem egyezik a Pot-ban lévő összeggel miért?',
));
