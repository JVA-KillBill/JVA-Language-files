<?php
/**
*
* @package JVA - Privacy Policy and data management tool
* @version $Id$
* @author 2011-2022 KillBill
* @copyright (c) 2014-2022 https://jv-arcade.com/ - https://jv-arcade.com/contact
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
// 'Page %s of %s' you can (and should) write 'Page „%1$s” of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// Some characters you may want to copy&paste: ‚ ‘ ’ « » „ “ ” …

/*
%1$s :: Weboldal neve
%2$s :: Adatkezelő neve
%3$s :: Kapcsolat e-mail cím
%4$s :: Adatkezelő telefonszáma
%5$s :: Használatban lévő cookik leírása
%6$s :: Hozzáad plusz egy sort, ha a vendégeknek kikapcsoljuk a cookie-kat
*/

$lang = array_merge($lang, array(
	'JVPPDMT_APPROVAL'						=> 'Jóváhagyom',
	'JVPPDMT_CONFIRM'						=> 'Az adatvédelmi irányelvet elolvastam és tudomásul veszem.',
	'JVPPDMT_COOKIE_CONFIRM'				=> 'Kérlek válaszd ki, hogy a(z) %s weboldal menthet-e cookie-kat az eszközödre:',
	'JVPPDMT_COOKIE_DESC'					=> 'Figyelem! Ez a weboldal cookie-kat használ, hogy a legjobb felhasználói élményt nyújthassa. <a onclick="window.open(this.href); return false;" href="https://cookiesandyou.com/">Tudj meg többet</a>.<br>Itt lehetőséged van elfogadni vagy megtagadni a cookie-k használatát, ezen kívül bármikor le is tilthatod a webhely cookie-k használatát a böngésződ beállításában is.',
	'JVPPDMT_DISABLED_COOKIE_GUEST_USER'	=> 'A vendég felhasználók eszközeire nem mentünk cookie-kat!',
	'JVPPDMT_NOT_CONFIRM'					=> 'Figyelem! A megerősítés nem lett kitöltve.',
	'JVPPDMT_ONLY_ALREADY_EXISTING_DATA'	=> 'Csak a már tárolt személyes adatok tárolását és használatát hagyom jóvá.<br><em>Vedd figyelembe, ha ezt az opciót választod, akkor bekerülsz egy olyan csoportba amelynek a jogosultsága csak a nézelődésre fog kiterjedni. Természetesen ezt a döntésedet bármikor megváltoztathatod a későbbiekben a Felhasználói vezérlőpult / Adatvédelmi adatok / Beállítások menüpont alatt.</em>',
	'JVPPDMT_ONLY_REGISTER_DATA'			=> 'Csak a regisztrációhoz szükséges személyes adatok tárolását és használatát hagyom jóvá.<br><em>Vedd figyelembe, ha ezt az opciót választod, akkor bekerülsz egy olyan csoportba amelynek a jogosultsága csak a nézelődésre fog kiterjedni. Természetesen ezt a döntésedet bármikor megváltoztathatod a későbbiekben a Felhasználói vezérlőpult / Adatvédelmi adatok / Beállítások menüpont alatt.</em>',
	'JVPPDMT_PERSONAL_DATA_CONFIRM'			=> 'Kérlek válaszd ki, hogy a(z) %s weboldal használhatja és tárolhatja-e a személyes adataidat. A személyes adatokat harmadik félnek nem adjuk tovább.',
	'JVPPDMT_PERSONAL_DATA_REG'				=> 'Figyelem! A regisztráció során személyes adatokat kell megadni.',
	'JVPPDMT_PRIVACY_POLICY'				=> 'Adatvédelmi irányelv',
	'JVPPDMT_PRIVACY_POLICY_DESC'			=> 'Az adatvédelem különösen fontos prioritást élvez a(z) „%1$s” irányításában. A(z) „%1$s” internetes oldalainak használata a személyes adatok bárminemű megjelölése nélkül lehetséges. Ha azonban az adatközlő weboldalunkon keresztül speciális szolgáltatásokat kíván használni, a személyes adatok feldolgozása szükségessé válhat. Ha a személyes adatok feldolgozása szükséges, és nincs törvényi alapja az ilyen feldolgozásnak, általában az érintetttől kapunk hozzájárulást.

A személyes adatok feldolgozása, mint például az adatalany neve, címe, e-mail címe vagy telefonszáma mindig összhangban van az általános adatvédelmi szabályzattal (GDPR) és az országspecifikus adatvédelemnek megfelelően a(z) „%1$s”-ra vonatkozó szabályok. Ezen adatvédelmi nyilatkozat segítségével szeretné tájékoztatni a nagyközönséget az általunk összegyűjtött, felhasználható és feldolgozott személyes adatok természetéről, hatóköréről és céljáról. Ezenkívül az adatalanyokat ezen adatvédelmi nyilatkozattal tájékoztatják azokról a jogokról, amelyekre jogosultak.

Az adatkezelő a(z) „%1$s” számos technikai és szervezeti intézkedést hajtott végre a weboldalon feldolgozott személyes adatok legteljesebb védelmének biztosítása érdekében. Azonban az internet alapú adatátvitelek elvileg biztonsági hiányosságok lehetnek, így az abszolút védelem nem biztosítható. Emiatt minden adatközlő személy szabadon továbbíthatja a személyes adatokat más eszközökkel, például telefonon.

<h3>Fogalommeghatározások</h3>
A(z) „%1$s” adatvédelmi nyilatkozata az európai jogalkotó által az általános adatvédelmi rendelet (GDPR) elfogadására használt kifejezéseken alapul. Adatvédelmi nyilatkozatunknak olvashatónak és érthetőnek kell lennie a nagyközönség számára, valamint ügyfeleink és partnereink számára. Ennek biztosítása érdekében először meg kell magyaráznunk a használt terminológiát.

Ebben az adatvédelmi nyilatkozatban többek között a következő kifejezéseket használjuk:

<strong>a) Személyes adatok</strong>
Személyes adatok: azonosított vagy azonosítható természetes személyre („adatalanyra”) vonatkozó információk. Az azonosítható természetes személy az, aki közvetlenül vagy közvetve azonosítható, különösen egy azonosítóval, például névvel, azonosítószámmal, helyadattal, online azonosítóval vagy egy vagy több, a fizikai, élettani, genetikai, mentális, gazdasági, kulturális vagy társadalmi identitását.

<strong>b) Az adatalany</strong>
Az adatalany minden azonosított vagy azonosítható természetes személy, akinek személyes adatait a feldolgozásért felelős adatkezelő dolgozza fel.

<strong>c) Feldolgozás</strong>
A feldolgozás minden olyan művelet vagy műveletcsoport, amelyet személyes adatokon vagy személyes adatokon keresztül, akár automatizált módon, akár gyűjtés, rögzítés, szervezés, strukturálás, tárolás, adaptálás vagy módosítás, visszanyerés, konzultáció, felhasználás, átruházás, terjesztés vagy más módon történő hozzáférhetővé tétel, összehangolás vagy kombináció, korlátozás, törlés vagy megsemmisítés.

<strong>d) A feldolgozás korlátozása</strong>
A feldolgozás korlátozása a tárolt személyes adatok megjelölése azzal a céllal, hogy a jövőben a feldolgozásukat korlátozzák.

<strong>e) A feldolgozásért felelős adatkezelő</strong>
A feldolgozásért felelős adatkezelő a természetes vagy jogi személy, hatóság, ügynökség vagy egyéb szerv, amely egyedül vagy másokkal közösen meghatározza a személyes adatok feldolgozásának célját és eszközeit; amennyiben az ilyen feldolgozás céljait és eszközeit az uniós vagy a tagállami jog határozza meg, az adatkezelő vagy a kinevezésére vonatkozó különleges kritériumok uniós vagy tagállami jogszabályok szerint biztosíthatók.

<strong>f) A feldolgozó</strong>
Feldolgozó olyan természetes vagy jogi személy, hatóság, ügynökség vagy egyéb szerv, amely az adatkezelő nevében feldolgozza a személyes adatokat.

<strong>g) Címzett</strong>
A kedvezményezett természetes vagy jogi személy, hatóság, ügynökség vagy más szerv, amelyhez a személyes adatokat nyilvánosságra hozzák, függetlenül attól, hogy harmadik fél vagy sem. Azok a hatóságok azonban, amelyek az uniós vagy a tagállami jogszabályokkal összhangban egy adott vizsgálat keretében személyes adatokat kaphatnak, nem tekinthetők címzetteknek; ezeknek az adatoknak az említett hatóságok általi feldolgozása a feldolgozás céljai szerint megfelel az alkalmazandó adatvédelmi szabályoknak.

<strong>h) Harmadik fél</strong>
Harmadik fél természetes személy vagy jogi személy, hatóság, ügynökség vagy szerv, kivéve az érintettet, az adatkezelőt, a feldolgozót és azokat a személyeket, akik az adatkezelő vagy feldolgozó közvetlen felügyelete alatt jogosultak személyes adatok feldolgozására.

<strong>i) Engedélyezés</strong>
Az adatalany beleegyezése minden olyan szabadon adott, konkrét, tájékozott és egyértelmű megjelölés, amelyre az adatalany kívánja, hogy nyilatkozattal vagy egyértelműen megerősítő cselekvéssel egyetértést jelent a vele kapcsolatos személyes adatok feldolgozásával kapcsolatban.

<h3>Az adatkezelő adatai</h3>
Az általános adatvédelmi rendelet (GDPR), az Európai Unió tagállamaiban érvényes adatvédelmi jogszabályok és az adatvédelemre vonatkozó egyéb rendelkezések tekintetében az adatkezelő:

<strong>Adatkezelő:</strong> %2$s

<strong>Kapcsolati E-mail cím:</strong> %3$s
<strong>Telefonszám:</strong> %4$s

<h3>Cookie-k</h3>
A(z) „%1$s” weboldal internetes oldala cookie-kat használ. A cookie-k olyan szöveges fájlok, amelyeket internetes böngészőn keresztül számítógépes rendszerben tárolnak.

Sok internetes oldal és szerver cookie-kat használ. Sok cookie tartalmaz egy úgynevezett cookie-azonosítót. A cookie-azonosító a cookie egyedi azonosítója. Olyan karakterláncot tartalmaz, amelyen keresztül az internetes oldalak és szerverek hozzárendelhetők az adott internetes böngészőhöz. Ez lehetővé tette a meglátogatott internetes oldalak és kiszolgálók megkülönböztetését. Egy adott internetes böngészőt az egyedi azonosítóval lehet használni és azonosítani.

A cookie-k használatával a(z) „%1$s” weboldal több felhasználóbarát szolgáltatást tud nyújtani a felhasználóknak, amelyek a cookie-beállítás nélkül nem lennének lehetségesek.

A cookie segítségével a weboldalunkon található információk és ajánlatok optimalizálhatók a felhasználó számára. A cookie-k lehetővé teszik számunkra, hogy amint az korábban említettük felismerje a webhelyet a felhasználó számára. Ennek a felismerésnek az a célja, hogy megkönnyítse a felhasználók számára a weboldalunk használatát. A weboldal felhasználó cookie-kat használ, pl. nem kell a hozzáférési adatot beírnia minden egyes alkalommal, hogy hozzáférjen a weboldalhoz, mivel a cookie-ból kiolvassa a már meglévő adatokat, ami a felhasználó számítógépes rendszerében található. Egy másik példa az online boltban lévő bevásárlókocsi cookie. Az online áruház emlékezik az olyan cikkekre, amelyeket az ügyfél a cookie-n keresztül a virtuális bevásárlókocsiba helyezett. A böngészős játékok mentheti az aktuális pontszám vagy az elért szint állapotát cookie-ba így a játék végén visszatérhet a tárolt ranglistához.

Konkrét példák a cookie-k használatára weboldalunkon:

%5$s

Az adatalany bármikor megakadályozhatja weboldalunkon keresztül a cookie-k fogadását az internetböngésző megfelelő beállítása révén, így akár véglegesen is megtagadhatja a cookie-k fogadását. Továbbá a már fogadott cookie-k bármikor törölhetők internetböngésző vagy más szoftverprogramok segítségével. Ez minden népszerű Internet böngészőben lehetséges. Ha az adatalany kikapcsolja a cookie-k fogadását az internetböngészőben, akkor egyes funkciók a honlapon nem fognak megfelelően működni.
%6$s
<h3>Általános adatok és információk gyűjtése</h3>
A(z) „%1$s” webhelye általános adatokat és információkat gyűjt össze. Ez az általános adat és információ tárolódik a kiszolgáló naplófájljaiba. Gyűjtés lehet (1) a használt böngésző típusok és verziók, (2) a hozzáférési rendszer által használt operációs rendszer, (3) az a weboldal, ahonnan egy hozzáférési rendszer elérte honlapunkat (úgynevezett hivatkozók (referrers)), (4) az al-weboldalak, (5) az internetes oldal elérésének napja és ideje, (6) Internetprotokoll cím (IP-cím), (7) a hozzáférési rendszer internetszolgáltatója, és (8) minden egyéb hasonló adat és információ, amelyet az információtechnológiai rendszerünk elleni támadások esetén használhatunk fel.

Ezen általános adatok és információk felhasználása esetén a(z) „%1$s” weboldal nem von le következtetéseket az érintettről. Inkább ezekre az információkra van szükség, mint (1) helyesen töltsük be weboldalunk tartalmát, (2) optimalizálja weboldalunk tartalmát és hirdetéseit, (3) biztosítsa informatikai rendszereink és honlaptechnológiánk hosszú távú életképességét , és (4) a bűnüldözési hatóságoknak a számítógépes támadás esetén büntetőeljáráshoz szükséges információkkal kell rendelkezniük. Ezért a(z) „%1$s” weboldal statisztikailag elemzi az anonim módon gyűjtött adatokat és információkat, azzal a céllal, hogy növeljük weboldalunk adatvédelmi és adatbiztonságát, és biztosítsuk az általunk feldolgozott személyes adatok optimális szintű védelmét.

<h3>Regisztráció honlapunkon</h3>
Az adatalanynak lehetősége van arra, hogy az adatkezelő honlapján a személyes adatok feltüntetésével regisztráljon. Az adatalany nyilvántartásba vétele a személyes adatok önkéntes megjelölésével lehetővé teszi az adatkezelő számára, hogy olyan tartalmat vagy szolgáltatásokat kínáljon, amelyek kizárólag a regisztrált felhasználók számára a szóban forgó ügy jellege miatt ajánlhatók fel. Mely személyes adatokat továbbítanak az adatkezelőnek, a bejegyzéshez használt megfelelő űrlap határozza meg. Az adatalany által bevitt személyes adatokat kizárólag az adatkezelő belső használatra és saját céljaira használja és tárolja.

Fiók regisztrálása az adatkezelő honlapján a következő személyes adatokra van szükség: egy egyedileg azonosítható felhasználónév, egy személyes jelszót, amely a fiókjába való bejelentkezéshez szükséges és egy érvényes e-mail cím. Ez az e-mail cím szükséges ahhoz, hogy megkapja a visszaigazoló linket, amely a regisztráció hitelesítéséhez szükséges és további üzenetek fogadására szolgál a weboldalon. A további üzenetek fogadása a sikeres bejelentkezés után a felhasználói vezérlőpultban választhatóan ki és bekapcsolható. A jelszavát titkosítja (egyirányú hash), formában tároljuk, hogy biztonságban legyen. Ugyanakkor javasoljuk, hogy ne használja újra ugyanazt a jelszót számos különböző webhelyen. Ezen jelszóval férhetsz hozzá a fiókodhoz ezen a webhelyen, ezért kérjük, óvatosan őrizd meg. Semmilyen körülmények között ne add ki a jelszavadat 3. félnek, még akkor se, ha itt a weboldalunkon kéri is azt valaki. Ha elfelejtette a fiókja jelszavát, akkor használja a szoftver által biztosított „Elfelejtettem a jelszavam” funkciót. Ez a folyamat felkéri Önt, hogy nyújtsa be a profiljában megadott felhasználónevet és e-mail címet, majd a szoftver új jelszót generál a fiók visszaszerzéséhez. Ezért ajánlott mindig az e-mail címet naprakészen tartani.

Az adatkezelő honlapján történő regisztrációval az internetszolgáltató (ISP) által kiosztott és az adatalany által használt és a regisztráció időpontját is használó IP-címet is tárolja. Ezen adatok tárolása háttérbe szorul, hogy ez az egyetlen módja annak, hogy megakadályozzuk szolgáltatásaink visszaélésszerű használatát, és szükség esetén lehetővé tegyük az elkövetett bűncselekmények kivizsgálását. Emiatt az adatok tárolása szükséges az adatkezelő biztosításához. Ezeket az adatokat nem továbbítják harmadik személyeknek, kivéve, ha törvényi kötelezettség terheli az adatok átadását, vagy ha az átruházás büntetőeljárás célját szolgálja.

Az adatkezelő honlapján történő regisztrációval az adatalany lehetővé teszi az adatkezelő számára, hogy az adatalany által regisztrált adatok és a profil részeként rögzített adatokat tárolja, valamint a folyamatban lévő hozzáférési adatokat (a felhasználás dátuma és időpontja, IP-cím , az adatátvitel böngészője által továbbított helyadatok, pontszámok és egyéb adatok), és használja a weboldal működtetéséhez. Meg kell jegyezni, hogy a profilban szereplő összes adat és az adatalany által írt bejegyzések elérhetők az interneten a konfigurációtól függően, és bárki felveheti. Ezenkívül az adatalany lehetővé teszi, hogy a weboldal felvehesse a kapcsolatot a felhasználói fiók megnyitásához és kezeléséhez szükséges adminisztratív üzenetek továbbításához.

A regisztrált személyek bármikor megváltoztathatják a regisztrálás során megadott személyes adatait, vagy teljesen törölhetik őket az adatkezelő adatállományából.

Az adatkezelő minden esetben kérésre tájékoztatást ad minden egyes adatalanynak arról, hogy milyen személyes adatokat tárol az érintettről. Ezenkívül az adatkezelő az érintett kérésére vagy adatairól kijavítja vagy törli a személyes adatokat, amennyiben nincsenek kötelező tárolási kötelezettségek. E tekintetben az adatkezelő alkalmazottai teljes körűen elérhetőek az érintett személyként.

<h3>Kapcsolatfelvétel a honlapon keresztül</h3>
A(z) „%1$s” weboldala olyan információkat tartalmaz, amelyek lehetővé teszik a gyors elektronikus kapcsolatot, valamint a velünk való közvetlen kommunikáció, amely magában foglalja az úgynevezett elektronikus levél (e-mail cím) általános címét is. Ha az adatalany e-mailen vagy kapcsolattartási formán keresztül kapcsolatba lép az adatkezelővel, az adatalany által továbbított személyes adatok automatikusan tárolódnak. Az adatkezelő által önkéntes alapon továbbított személyes adatokat az adatfeldolgozás vagy az adatkezelés céljából történő feldolgozás és tárolás. A személyes adatok harmadik félnek nem kerülnek átadásra.

<h3>A személyes adatok rutin törlése és blokkolása</h3>
Az adatkezelő az adatalany személyes adatait csak a tárolás céljának eléréséhez szükséges idő alatt dolgozza fel és tárolja, vagy amennyiben azt az európai jogalkotó vagy más törvényhozók olyan jogszabályokban vagy más jogszabályokban biztosítják, amelyekre az adatkezelőre vonatkozik.

Ha a tárolási cél nem alkalmazható, vagy ha az európai jogalkotó vagy más illetékes törvényhozó által meghatározott tárolási idő lejár, a személyes adatokat a jogszabályi előírásoknak megfelelően rendszeresen blokkolják vagy törlik.

<h3>Az adatalany jogai</h3>
<strong>a) Visszaigazolás jog</strong>
Az európai jogalkotó minden adatalany számára biztosítja a jogot arra, hogy az adatkezelőtől megkaphassa annak megerősítését, hogy az őt érintő személyes adatokat feldolgozzák-e vagy sem. Ha az adatalany élni kívánja e megerősítési joggal, bármikor felveheti az adatkezelő bármely alkalmazottjával a kapcsolatot.

<strong>b) Hozzáférési jog</strong>
Az európai jogalkotó minden adatalany számára biztosítja a jogot arra, hogy az adatkezelőtől bármikor szabadon hozzáférhessen a személyes adatairól, és ezen információk egy példányáról. Továbbá az európai irányelvek és rendeletek az adatalany számára hozzáférést biztosítanak a következő információkhoz:

a feldolgozás célja;
az adatalany személyes adatok kategóriái;
a címzettek vagy a címzettek kategóriái, akiknek a személyes adatait nyilvánosságra hozták vagy fogják nyilvánosságra hozni, különösen a harmadik országokban vagy nemzetközi szervezetekben részesülők;
ahol lehetséges, a tervezett időszakot, amelyre a személyes adatokat tárolják, vagy ha ez nem lehetséges, az említett időszak meghatározására használt kritériumok;
az adatkezelőnek a személyes adatok javításával vagy törlésével kapcsolatos kérése, illetve az adatalany személyes adatainak feldolgozásának korlátozása, illetve az ilyen feldolgozás ellen kifogás kérése;
a panasz benyújtásának jogát a felügyeleti hatósághoz;
ahol a személyes adatokat nem gyűjtik az adatalanyról, minden rendelkezésre álló információ forrásukról;
a GDPR 22. cikkének (1) és (4) bekezdésében említett automatizált döntéshozatal, ideértve a profilalkotást is, és legalábbis ezekben az esetekben az értelmezhető logikával kapcsolatos lényeges információk, valamint a megvalósítás jelentősége és tervezett következményei ilyen feldolgozás az érintett számára.
Továbbá az adatalanynak joga van ahhoz, hogy információt szerezzen arról, hogy a személyes adatokat átruházták-e egy harmadik országra vagy egy nemzetközi szervezetre. Ebben az esetben az adatalanynak joga van tájékoztatni az átruházással kapcsolatos megfelelő biztosítékokról.

Ha egy adatalany igénybe kívánja venni e hozzáférési jogot, bármikor felveheti az adatkezelő bármely alkalmazottjával a kapcsolatot.

<strong>c) Javítási jog</strong>
Az európai jogalkotó minden adatalany számára biztosítja a jogot arra, hogy indokolatlan késedelem nélkül megkaphassa az adatkezelőtől az őt érintő pontatlan személyes adatok helyesbítését. A feldolgozás céljait figyelembe véve az adatalanynak joga van ahhoz, hogy hiányos személyes adatokat töltsön ki, beleértve kiegészítő nyilatkozatot is.

Ha az adatalany ezt a jogot helyesbítésre kívánja használni, bármikor felveheti az adatkezelő bármely alkalmazottjával a kapcsolatot.

<strong>d) Törlési jog (elfelejtendő)</strong>
Az európai jogalkotó minden adatalany számára biztosítja a jogot arra, hogy az adatkezelőtől indokolatlan késedelem nélkül megkaphassa az őt érintő személyes adatok törlésének jogát, és az adatkezelő köteles a személyes adatok törlését indokolatlan késedelem nélkül végrehajtani, amennyiben az alábbi okok valamelyike teljesül és a feldolgozás nem szükséges:

A személyes adatok már nem szükségesek az összegyűjtött vagy más módon feldolgozott célokhoz képest.
Az adatalany visszavonja az engedélyt, amelyre a feldolgozás a GDPR 6. cikke (1) bekezdésének a) pontja vagy a GDPR 9. cikke (2) bekezdésének a) pontja alapján történik, és ha nincs más jogalap a feldolgozáshoz.
Az adatalany kifogásolja a GDPR 21. cikkének (1) bekezdése szerinti feldolgozást, és a feldolgozásra vonatkozóan nincsen nyomós, jogos indok, vagy az adatalany a GDPR 21. cikkének (2) bekezdése szerinti feldolgozás tárgyát képezi.
A személyes adatokat jogellenesen feldolgozták.
A személyes adatokat törölni kell az uniós vagy tagállami jogszabályok szerinti jogi kötelezettségnek való megfeleléshez, amely az adatkezelőre vonatkozik.
A személyes adatokat a GDPR 8. cikkének (1) bekezdésében említett információs társadalombiztosítási szolgáltatásokkal kapcsolatban gyűjtötték össze.
Ha a fent említett okok egyike vonatkozik rá, és az adatalany a(z) „%1$s” weboldal által tárolt személyes adatok törlését kéri, bármikor felveheti az adatkezelő bármely alkalmazottjával a kapcsolatot. A(z) „%1$s” alkalmazottai haladéktalanul gondoskodnak arról, hogy a törlési kérelem azonnal teljesüljön.

Amennyiben az adatkezelő személyes adatokat nyilvánosságra hozott és a GDPR 17. cikk (1) bekezdése értelmében köteles törölni a személyes adatokat, az adatkezelő figyelembe veszi a rendelkezésre álló technológiát és a megvalósítás költségeit ésszerű lépéseket tesz, beleértve a technikai intézkedéseket. Tájékoztatja a többi adatkezelőt a személyes adatok feldolgozásáról, amelyről az adatalany azt kérte, hogy az adatkezelők töröljék az ilyen személyes adatokra mutató linkek, másolatok vagy azok másolatát, amennyiben a feldolgozás nem szükséges. A(z) „%1$s” weboldal adatkezelői egyedi esetekben gondoskodnak a szükséges intézkedésekről.

<strong>e) A feldolgozás korlátozásának joga</strong>
Az európai jogalkotó minden adatalany számára biztosítja a jogot arra, hogy megkapja az adatkezelőtől a feldolgozás korlátozását, amennyiben az alábbiak valamelyike érvényes:

A személyes adatok pontosságát vitatja az érintett, egy olyan időszakra, amely lehetővé teszi az adatkezelő számára a személyes adatok pontosságának ellenőrzését.
A feldolgozás jogellenes, és az adatalany tiltakozik a személyes adatok törlésével és a kérésekkel szemben a használatuk korlátozása helyett.
Az adatkezelőnek többé nincs szüksége a személyes adatok feldolgozás céljából történő feldolgozására, de az adatalany az állítólagos jogi követelések létrehozására, gyakorlásához vagy védelméhez szükséges.
Az adatalany kifogásolta a GDPR 21. cikkének (1) bekezdése szerinti feldolgozást, annak ellenőrzéséig, hogy az adatkezelő jogszerű okok miatt felülbírálják-e az érintett személyét.
Ha a fent említett feltételek egyike teljesül, és az adatalany kérni kívánja a(z) „%1$s” weboldalt által tárolt személyes adatok feldolgozásának korlátozását, bármikor felveheti a kapcsolatot az adatkezelő bármely alkalmazottjával. A(z) „%1$s” weboldalt alkalmazottja megszervezi a feldolgozás korlátozását.

<strong>f) Az adatok hordozhatóságának joga</strong>
Az európai jogalkotó minden adatalany számára biztosítja a jogot arra, hogy megkapja az őt érintő személyes adatokat, amelyet az adatkezelőnek nyújtott, strukturált, általánosan használt és gépileg olvasható formában. Joga van arra, hogy ezeket az adatokat egy másik adatkezelőnek átadja anélkül, hogy akadályozná az adatkezelőt, amelyhez a személyes adatokat megadták, amennyiben a feldolgozás a GDPR 6. cikk (1) bekezdésének a) pontja szerinti hozzájáruláson alapul vagy a GDPR 9. cikk (2) bekezdésének a) pontját vagy a GDPR 6. cikke (1) bekezdésének b) pontja szerinti szerződést, és a feldolgozást automatizált módon végzik, amennyiben a feldolgozás nem szükséges közfeladatot ellátó feladat ellátásához vagy az adatkezelőre ruházott hatósági jogkör gyakorlása során.

Ezenkívül a GDPR 20. cikkének (1) bekezdése szerinti adatátadáshoz való jogának gyakorlása során az adatalanynak joga van ahhoz, hogy a személyes adatok közvetlenül az egyik adatkezelőtől a másikig továbbíthatók legyenek, amennyiben ez technikailag kivitelezhető, és amikor ilyen hátrányosan befolyásolják mások jogait és szabadságait.

Az adatátvitelhez való jog érvényesítése érdekében az érintett bármikor felveheti a kapcsolatot a(z) „%1$s” weboldalt alkalmazottaival.

<strong>g) Tiltakozás jog</strong>
Az európai jogalkotó minden adatalany számára biztosítja a jogot arra, hogy saját helyzetére vonatkozó okokból bármikor a GDPR 6. cikkének (1) bekezdése e) vagy f) pontján alapuló személyes adatok feldolgozására kifogást emeljen. Ez vonatkozik az e rendelkezéseken alapuló profilalkotásra is.

A(z) „%1$s” weboldalt a személyes adatok feldolgozását a kifogás esetén nem folytathatja, hacsak nem bizonyíthatjuk az adatfeldolgozás kényszerítő jogos indokait, amelyek felülbírálják az érintettek érdekeit, jogait és szabadságait, vagy a jogi igények.

Ha a(z) „%1$s” weboldalt a személyes adatokat közvetlen marketing célokra dolgozza fel, az adatalanynak jogában áll bármikor kifogásolni az ilyen marketingre vonatkozó személyes adatok feldolgozását. Ez olyan mértékű profilalkotásra vonatkozik, amely az ilyen közvetlen marketinghez kapcsolódik. Ha az adatalany a(z) „%1$s” weboldalt ellen kifogást emel a közvetlen marketing célokra történő feldolgozás céljából, a(z) „%1$s” weboldalt a továbbiakban nem fogja feldolgozni a személyes adatokat.

Ezenkívül az adatalany a saját helyzetével kapcsolatos okokból kifolyólag kifogást emelhet az őt érintő személyes adatok feldolgozásával a(z) „%1$s” weboldalt számára tudományos vagy történeti kutatási célból vagy statisztikai célokra a GDPR 89. cikkének (1) bekezdése értelmében, kivéve, ha az adatfeldolgozás közérdekű feladat elvégzéséhez szükséges.

A kifogás joga gyakorlásához az adatalanynak kapcsolatba kell lépnie a(z) „%1$s” weboldalt bármely alkalmazottjával. Ezenkívül az adatalany az információs társadalommal összefüggő szolgáltatások használatával összefüggésben és a 2002/58 / EK irányelv rendelkezéseitől függetlenül szabadon felhasználhatja az automatizált eszközökkel szembeni, a műszaki előírásokkal szembeni jogát.

<strong>h) Automatizált egyéni döntéshozatal, beleértve a profilalkotást is</strong>
Az európai jogalkotó minden adatalany számára biztosítja a jogot arra, hogy ne kizárólag olyan automatizált feldolgozáson alapuló döntést hozzon, amely kizárólag az automatizált feldolgozáson alapul, beleértve a profilalkotást is, amely joghatással jár az őt érintő joghatással szemben, vagy hasonlóan jelentősen érinti őt, (1) nem szükséges az érintett és az adatkezelő közötti szerződés megkötéséhez vagy teljesítéséhez, vagy (2) az uniós vagy tagállami jogszabályok nem engedélyezik, amelyekre az adatkezelő vonatkozik, és amely szintén előírja megfelelő intézkedéseket hoz az érintett jogainak és szabadságainak és jogos érdekeinek védelme érdekében, vagy (3) nem az adatalany kifejezett beleegyezésén alapul.

Ha a határozat (1) az adatalany és az adatkezelő közötti szerződés megkötéséhez vagy annak teljesítéséhez szükséges, vagy (2) az adatalany kifejezett hozzájárulásán alapul, a(z) „%1$s” weboldalt megfelelő intézkedéseket tesz az adatalany jogait és szabadságait és jogos érdekeit, legalábbis az adatkezelő részéről az emberi beavatkozás megszerzéséhez való jogot, az álláspontját és a határozat vitatását.

Ha az adatalany az automatizált egyéni döntéshozatalhoz kapcsolódó jogokat kívánja gyakorolni, bármikor felveheti a kapcsolatot a(z) „%1$s” weboldalt bármely alkalmazottjával.

<strong>i) Az adatvédelmi engedély visszavonására vonatkozó jog</strong>
Az európai jogalkotó minden adatalany számára biztosítja a jogot arra, hogy bármikor visszavonja hozzájárulását a személyes adatai feldolgozásához.

Ha az adatalany élvezi a hozzájárulás visszavonásának jogát, bármikor felveheti a kapcsolatot a(z) „%1$s” weboldalt bármely alkalmazottjával.

<strong>j) Adatszegés esetén panasz</strong>
Az adatvédelem megsértése esetén az érintett személynek jogában áll panaszt tenni az illetékes felügyeleti hatóságnál. Az adatvédelmi kérdések felügyelő hatósága az az ország adatvédelmi tisztviselője, amelyben az adatalany állandó lakóhellyel rendelkezik.

Az Országos Adatvédelmi Hatóságok áttekintése az itt látható linkek és címek: <a onclick="window.open(this.href); return false;" href="https://ico.org.uk/">https://ico.org.uk/ - cím Nagy-Britannia számára</a> vagy <a onclick="window.open(this.href); return false;" href="https://ec.europa.eu/newsroom/article29/item-detail.cfm?item_id=612080">https://ec.europa.eu - címek és linkek az európai országok számára</a>.

<h3>A Gravatar alkalmazásával és használatával kapcsolatos adatvédelmi rendelkezések</h3>
Ezen a weboldalon az adatkezelő integrálta a Gravatar komponenseit annak érdekében, hogy a Gravatar segítségével segítséget nyújtson a hozzászólásoknak és a kommentároknak, hogy személyre szabhassák bejegyzéseiket egy keresztoldalas profilképen (más néven avatárként is). A Gravatar szolgáltatás üzemeltetője az Automattic Inc., 132 Hawthorne Street San Francisco, CA 94107, USA.

A Gravatar egy olyan szolgáltatás, ahol az érintett személy e-mail címmel jelentkezhet be és mentheti el a profilképeket. A kiválasztott felhasználói kép felhasználható számos különböző weboldalon. Ha az adatalany olyan bejegyzéseket vagy megjegyzéseket ír le más internetes oldalakra, amelyek a megfelelő e-mail címmel rendelkeznek, a profilképük megjeleníthető a bejegyzések vagy megjegyzések mellett. Ehhez az adatalany által megadott e-mail címet a Gravatarnak titkosítva küldjük el, hogy ellenőrizzük, van-e tárolva egy profil. Ez az egyetlen célja az e-mail cím átvitelének.

A képek megjelenítésével a Gravatar tudatában van az adatalanyoknak az aktuális IP-címnek, mivel ez szükséges a böngésző és az online szolgáltatás közötti kommunikációhoz. Ezenkívül a Gravatar információt kap a meglátogatott weboldalakról, és a profilképet használja. Ezek az adatkapcsolatok nem állnak irányításunk alatt, és nem ismerjük a felhasznált vagy elküldött adatokat. Ha többet szeretne megtudni arról, hogy a Gravatar összegyűjti-e és hogyan használja az adatokat, olvassa el az Automattic adatvédelmi szabályzatát: <a onclick="window.open(this.href); return false;" href="https://automattic.com/privacy/">https://automattic.com/privacy/</a>.

Ha az adatalany nem kíván képeket megjeleníteni a hozzászólásokban, amelyek a Gravatar által e-mail címéhez kapcsolódnak, akkor azt a felhasználói fiókban tudja módosítani a bejegyzésekhez vagy megjegyzésekhez pedig egy e-mail címet kell megadni, amely nem letétbe helyezett Gravatar. A felhasználók teljesen megakadályozhatják az adatok továbbítását, ha nem használnak Gravatar képet a felhasználói fiókjukkal vagy megjegyzéseikkel, de lehetőleg helyi felhasználói képet választanak ki.

Az Automattic a Privacy Shield megállapodással rendelkezik, amely garantálja az európai adatvédelmi jogszabályok betartását. További információ a <a onclick="window.open(this.href); return false;" href="https://www.privacyshield.gov/participant?id=a2zt0000000CbqcAAC&status=Active">https://www.privacyshield.gov</a> címen található.

<h3>A játékterem alkalmazásával és használatával kapcsolatos adatvédelmi rendelkezések</h3>
Ezen a weboldalon az adatkezelő integrálta a játéktermet (más néven arcade), amely lehetővé teszi a böngészős játékok futtatását illetve annak játszását. A játéktermi modulok használatával a cookie-kat a fent leírtak szerint állítjuk be, amelyek tárolják a munkamenetet és a játékok illetve a játéktermi oldalak egyedi vizuális ábrázolását. A megfelelő működés érdekében a játékonkénti pontszámot, a játék szintjét, az elérni kívánt pontszámot, a játék kezdeteinek számát, a játék időtartamát, a többi felhasználóval szembeni rangsorolást és hasonló statisztikákat kell továbbítani, és tárolja a felhasználói fiókkal együtt. Tartalmazhat szövegszerkesztő szolgáltatás komponenseit, például a Google Fordítót. Lásd a Google Fordító adatvédelmi irányelveit alább. Lehetséges továbbá, hogy a játékok idegen weboldalakra mutató adatkapcsolatokat építenek ki, amelyek egy adott rangsorhoz vagy statisztikához fognak vezetni.

Ha az adatalany ezen a harmadik fél webhelyén vagy közösségi médiumon felhasználói fiókot birtokol, és ott van bejelentkezve, ezek a webhelyek információt kaphatnak webhelyünk látogatásáról, az adott játékról és az elért pontszámokról. Viszonzásul lehetséges, hogy ezen oldalakról hirdetéseket fognak kapni az érintettek. Ezek az adatkapcsolatok nem állnak irányításunk alatt, és nem ismerjük a felhasznált vagy elküldött adatokat. Az adatalany megakadályozhatja a személyes adatok bárminemű szállítását azáltal, hogy kijelentkezik a megfelelő fiókból, vagy nem használja a játékokat. A játékterem részben felhasználható cookie-k és adatok regisztrálása és tárolása nélkül. Azonban sok funkció nem áll rendelkezésre, és az elért pontszámok nem menthetők. A vendégek számára az általános szerver hozzáférési naplón kívül semmilyen személyes adatot nem tárolnak. Azonban a vendég játékosok sem tudják menteni a játékot.

Minden játék indítás előtt, betöltésre kerül egy játék bevezető, ami kapcsolatot létesít a „https://connect.jv-arcade.com” weboldallal. A „jv-arcade.com” adatkezelője világosan kijelenti, hogy a kapcsolat során a felhasználókról nem szállít személyes adatokat és nem használ cookie-kat.

<h3>A chat-ek alkalmazásával és használatával kapcsolatos adatvédelmi rendelkezések</h3>
Ezen a weboldalon az adatkezelő integrálta a csevegő modulokat (úgynevezett shoutbox ill. lábléc chat). A modulok célja, hogy lehetővé tegyék a felhasználók számára, hogy valós időben közvetlenül kommunikáljanak egymással. Csevegő modul segítségével a cookie-kat a 3. pontban leírtak szerint állítják be, amelyek tárolják a megfelelő csevegőbeállítások beállításait (például a hang be / ki, a doboz összecsukva vagy az összecsukott vagy az oldalon belül lévő dobozhely), valamint a munkamenet és az előzmény. A csevegőmodul megfelelő működtetéséhez tároljuk az elküldött üzenetet a hozzátartozó időt és a felhasználói azonosítót az adatbázisban. A vendégek bejegyzései az IP-címhez társítva vannak. Erre azért van szükség, hogy megjelenítse a felhasználói beadványokat a megfelelő időrendben és a hozzá tartozó szerzőket, valamint a Felhasználási feltételek vagy az alkalmazandó jogszabályok megsértése elleni büntetőeljárás lefolytatása véget. A csevegési modul beszélgetéseinek tartalma nyilvánosan is látható lehet az interneten, a konfigurációtól függően, így bárki olvashatja illetve megtekintheti.

<h3>A Google AdSense alkalmazásával és használatával kapcsolatos adatvédelmi rendelkezések</h3>
Ezen a weboldalon az adatkezelő integrálta a Google AdSense komponenseit. A Google AdSense olyan online szolgáltatás, amely lehetővé teszi a hirdetések harmadik fél webhelyeken történő elhelyezését. A Google AdSense olyan algoritmuson alapul, amely kiválasztja a harmadik fél webhelyén megjelenített hirdetéseket, hogy megfeleljen a harmadik fél webhelyének tartalmának. A Google AdSense lehetővé teszi az internethasználó érdeklődésen alapuló célzását, amelyet egyéni felhasználói profilok létrehozásával valósítanak meg.

A Google AdSense-komponensének üzemeltetője az Alphabet Inc., az 1600-as Amphitheatre Pkwy, a Mountain View, CA 94043-1351, Egyesült Államok.

A Google AdSense összetevőjének célja a hirdetések weboldalon történő integrálása. A Google AdSense cookie-t helyez az adatkezelő informatikai rendszerére. A cookie-k meghatározását a fentiekben ismertettük. A cookie beállításával az Alphabet Inc. engedélyezi honlapunk használatának elemzését. Az internetes oldal egyikének, amely az adatkezelő által működtetett és amelyhez egy Google AdSense összetevő integrálva van, az internetes böngésző az adatkezelő informatikai rendszerén automatikusan elküldi az adatokat a A Google AdSense eleme az online hirdetések és az ABC betűk jutalékainak rendezéséhez. A technikai eljárás során a vállalati ABC betűk ismerik a személyes adatokat,

Az adatalany - a fentiek szerint - bármikor megakadályozhatja a cookie-k weblapunkon történő fogadását az alkalmazott böngésző megfelelő beállításával, és ezzel véglegesen tagadja a cookie-k fogadását. Az alkalmazott internetes böngésző ilyen beállítása megakadályozná az Alphabet Inc. számára, hogy cookie-t állítson be az adatalany informatikai rendszerén. Továbbá az Alphabet Inc. által már használatban lévő cookie-k bármikor törölhetőek a böngészővel vagy más szoftverprogramokkal.

Továbbá a Google AdSense az úgynevezett nyomkövetési képpontokat is használja. A nyomkövető képpont olyan miniatűr grafika, amely beágyazódik a weboldalba, hogy lehetővé tegye a naplófájl rögzítését és a naplófájl-elemzést, amelyen keresztül statisztikai elemzés végezhető. A beágyazott követési képpontok alapján az Alphabet Inc. meg tudja határozni, hogy egy adott weboldal megnyitotta-e és mikor nyitott meg egy weboldalt, és mely linkeket kattintott az érintett. A követési képpontok többek között szolgálják a látogatók látogatásának elemzését egy webhelyen.

A Google AdSense szolgáltatáson keresztül az Amerikai Egyesült Államokban az Alphabet Inc.-nek átadják a személyes adatokat és információkat - amely szintén tartalmazza az IP-címet, és szükséges a megjelenített hirdetések összegyűjtéséhez és elszámolásához. Ezeket a személyes adatokat az Amerikai Egyesült Államokban tárolják és feldolgozzák. Az ábécé Rész. A technikai eljárás során személyes adatokat gyűjthet harmadik felek számára.

A Google AdSense további magyarázata a <a onclick="window.open(this.href); return false;" href="https://www.google.com/adsense/start/">https://www.google.com/adsense/start/</a> link alatt található.

<h3>Adatvédelmi rendelkezések a Google Analytics alkalmazásával és használatával kapcsolatban (névtelenítési funkcióval)</h3>
Ezen a weboldalon az adatkezelő integrálta a Google Analytics komponenseit (az anonymizer funkcióval). A Google Analytics webes elemzési szolgáltatás. A webes elemzés a webhelyek látogatóinak viselkedésére vonatkozó adatok gyűjtése, összegyűjtése és elemzése. A webes elemző szolgáltatás többek között olyan adatokat gyűjt össze a webhelyről, amelyről egy személy jött (úgynevezett referrer), mely aloldalakat látogattak meg, illetve milyen gyakorisággal és milyen időtartamra nézett egy aloldal. A webes elemzést elsősorban a weboldal optimalizálására és az internetes hirdetések költség-haszon elemzésének elvégzésére használják.

A Google Analytics elem üzemeltetője a Google Inc., az 1600-as Amphitheatre Pkwy, a Mountain View, CA 94043-1351, Egyesült Államok.

A Google Analytics segítségével végzett webes elemzéseknél a vezérlő az „_gat. _anonymizeIp” alkalmazást használja. Ennek az alkalmazásnak az alkalmazásával az internetes kapcsolat IP-címét a Google rövidíti, és névtelenül adja meg honlapjainknak az Európai Unió valamely tagállama vagy egy másik Szerződő Állam hozzáférését az Európai Gazdasági Térségről szóló megállapodáshoz.

A Google Analytics elemének célja, hogy elemezze a webhelyünk forgalmát. A Google az összegyűjtött adatokat és információkat többek között felméri weboldalunk használatának értékelésére, valamint internetes jelentések készítésére, amelyek weboldalainkat bemutatják, és más szolgáltatásokat nyújtanak internetes oldalunk használatával kapcsolatban.

A Google Analytics cookie-t helyez el az adatalany informatikai rendszerére. A cookie-k meghatározását a fentiekben ismertettük. A cookie beállításával a Google engedélyezi honlapunk használatának elemzését. Az internetes oldal egyikének, amelyre az adatkezelő működik, és amelybe a Google Analytics elemet integrálták, az érintettek információtechnológiai rendszerének internetböngészője automatikusan továbbítja az adatokat a Google Analytics elem az online hirdetés és a jutalékok rendezése céljából a Google számára. E technikai eljárás során a vállalat a Google személyes adatait ismerte fel, például az adatalany IP-címét, amely a Google számára szolgál többek között a látogatók eredetének és a kattintások megismerésének,

A cookie-t olyan személyes adatok tárolására használják, mint például a hozzáférési idő, a hozzáférés helyszíne és a weboldal látogatóinak gyakorisága. Az internetes oldalunkon tett látogatások során az ilyen személyes adatokat, köztük az adatalany által használt internet-hozzáférés IP-címét, továbbítják a Google-nak az Amerikai Egyesült Államokban. Ezeket a személyes adatokat a Google tárolja az Amerikai Egyesült Államokban. A Google a technikai eljárás során összegyűjtött személyes adatokat átadhatja harmadik feleknek.

Az adatalany - a fentiek szerint - bármikor megakadályozhatja a cookie-k weblapunkon történő fogadását az alkalmazott böngésző megfelelő beállításával, és ezzel véglegesen tagadja a cookie-k fogadását. Az alkalmazott internetes böngésző ilyen beállítása megakadályozná a Google Analytics számára, hogy cookie-t állítson be az adatalany informatikai rendszerén. Ezenkívül a Google Analytics által már használt cookie-k bármikor törölhetőek a böngészővel vagy más szoftveren keresztül.

Ezenkívül az adatalanynak lehetősége van arra, hogy kifogást emeljen a Google Analytics által létrehozott, a weboldal használatával kapcsolatos adatok gyűjtéséért, valamint ezen adatok Google általi feldolgozásáért, valamint annak lehetőségétől, hogy kizárják az ilyet. E célból az adatalanynak le kell töltenie egy böngészőbővítményt a <a onclick="window.open(this.href); return false;" href="https://tools.google.com/dlpage/gaoptout">https://tools.google.com/dlpage/gaoptout</a> hivatkozás alatt és telepítenie kell. Ez a böngészőbővítmény a Google Analytics segítségével javasolja JavaScript használatát, hogy az internetes oldalak látogatásával kapcsolatos adatok és információk esetleg nem kerülnek továbbításra a Google Analytics szolgáltatásban. A böngésző bővítményeinek telepítését a Google kifogásnak tekinti. Ha az adatalany informatikai rendszerét később törlik, formázzák vagy újonnan telepítik, akkor az érintettnek újra kell telepítenie a böngészőbővítményeket a Google Analytics letiltásához. Ha a böngésző bővítményét az érintett vagy bármely más olyan személy távolította el, aki a saját hatáskörébe tartozik, vagy le van tiltva, lehetőség van a böngésző kiegészítők újratelepítésére vagy újbóli aktiválására.

A Google további információi és a vonatkozó adatvédelmi rendelkezések letölthetők a <a onclick="window.open(this.href); return false;" href="https://policies.google.com/privacy">https://policies.google.com/privacy</a> címen és a <a onclick="window.open(this.href); return false;" href="http://www.google.com/analytics/terms/hu.html">http://www.google.com/analytics/terms/hu.html</a> címen. A Google Analytics további magyarázata a <a onclick="window.open(this.href); return false;" href="https://www.google.com/analytics/">https://www.google.com/analytics/</a> címen található.

<h3>Adatvédelmi rendelkezések a DoubleClick alkalmazásáról és használatáról</h3>
Ezen a weboldalon az adatkezelő integrálta a Google DoubleClick komponenseit. A DoubleClick a Google védjegye, amelynek értelmében elsősorban speciális online marketing megoldásokat hirdetnek a reklámügynökségek és a kiadók számára.

A Google DoubleClick üzemeltetője a Google Inc., 1600 Amphitheatre Pkwy, Mountain View, CA 94043-1351, Egyesült Államok.

A Google DoubleClick minden adatot, kattintást vagy más tevékenységet továbbít a DoubleClick kiszolgálónak. Az adatátvitel mindegyike egy cookie-kérést indít az adatalany böngészőjéhez. Ha a böngésző elfogadja ezt a kérelmet, a DoubleClick cookie-t használ az adatalany informatikai rendszerén. A cookie-k meghatározását a fentiekben ismertettük. A cookie célja a hirdetés optimalizálása és megjelenítése. A cookie-t többek között a felhasználó által releváns hirdetések megjelenítésére és elhelyezésére, valamint hirdetési kampányok jelentéseinek létrehozására vagy javítására használják. Továbbá, a cookie arra szolgál, hogy elkerülje az ugyanazon hirdetés több megjelenítését.

A DoubleClick olyan cookie-azonosítót használ, amely a technikai folyamat végrehajtásához szükséges. Például a cookie-azonosítónak hirdetni kell egy hirdetést a böngészőben. A DoubleClick a cookie-azonosító használatával is rögzítheti, hogy mely hirdetések már megjelennek a böngészőben a duplikációk elkerülése érdekében. A DoubleClick a cookie-azonosítón keresztül is nyomon követheti a konverziókat. Például, a konverziók rögzítésre kerülnek, amikor egy felhasználó korábban megjelenített egy DoubleClick hirdetési hirdetést, és azt követően ugyanazt az internetes böngészőt használva vásárolja meg a hirdető webhelyén.

A DoubleClick cookie-ja nem tartalmaz személyes adatokat. A DoubleClick cookie azonban további kampányazonosítót is tartalmazhat. A kampányazonosító azon kampányok azonosítására szolgál, amelyekkel a felhasználó már kapcsolatba került.

A weboldal egyes oldalainak, amelyek az adatkezelő által működtetett és amelyen a DoubleClick összetevő integrálva van, az adott személy adattechnológiai rendszerének internetböngészőjét az adott DoubleClick összetevő kéri automatikusan adatokat küldeni az online hirdetések és a jutalékok számlázása céljából a Google-nak. E technikai eljárás során a Google tudomással rendelkezik minden olyan adatról, amelyet a Google a megbízási számítások létrehozásához használhat. A Google többek között meg tudja érteni, hogy az adatalany a weboldalunkon található egyes linkekre kattintott.

Az adatalany - a fentiek szerint - bármikor megakadályozhatja a cookie-k weblapunkon történő fogadását az alkalmazott böngésző megfelelő beállításával, és ezzel véglegesen tagadja a cookie-k fogadását. Az alkalmazott internetböngésző ilyen beállítása megakadályozná a Google számára, hogy cookie-t állítson be az adatalany informatikai rendszerén. Ezenkívül a Google által már használt cookie-k bármikor törölhetőek a böngészővel vagy más szoftveren keresztül.

A DoubleClick további információi és a vonatkozó DoubleClick adatvédelmi előírások a Google <a onclick="window.open(this.href); return false;" href="https://policies.google.com/">https://policies.google.com/</a> címen keresztül tölthetők le.

<h3>Adatvédelmi rendelkezések a Google fordító alkalmazásáról és használatáról</h3>
Ezen a weboldalon az adatkezelő integrálta a Google fordító komponenseit. Az összetevő célja, hogy javítsa az online szolgáltatásunkat, lehetővé téve az adatszolgáltatóknak az idegen nyelvű bejegyzések automatikus lefordítását az adatkezelő weboldalán. A Google Fordító üzemeltetője a Google LLC, 1600 Amphitheatre Pkwy, Mountain View, CA 94043-1351, USA. A Google Fordító egy olyan online fordítási szolgáltatás, amelyet a Google LLC biztosít, amely lehetővé teszi a felhasználók számára, hogy automatikusan lefordítsák az egyes szavakat, szövegeket, weboldalt vagy annak egyes részeit különböző nyelvekre. A fordítások azonban nem mindig helyesek, és esetenként félrevezető, hamis vagy támadó kifejezéseket tartalmazhatnak. Nem vállalunk felelősséget a fordítás pontosságáért, megbízhatóságáért vagy időszerűségéért, és nem vállalunk felelősséget a felmerülő károkért.

Minden olyan hívásnál, amely az internetes oldal egyik oldalára vonatkozik, amelyet az adatkezelő működtet, és amelyen egy fordítási komponens beépült, az adatok továbbítása a Google Fordítóhoz történik. A Google Fordító beállítja a cookie-kat az adatalany informatikai rendszerén, a fent leírt módon. Az adatkezelő internetes oldalán minden látogatás során a személyes adatokat, beleértve az adatalany által használt internet-hozzáférés IP-címét is, továbbítják a Google-nak az Amerikai Egyesült Államokban található és az ott tárolt szerverekhez. A Google a műszaki eljárás során összegyűjtött személyes adatokat átadhatja más Google-szolgáltatásoknak és harmadik feleknek. A Google mindig a weboldalon való tartózkodás időtartama alatt információt kap arról, hogy a szolgáltatást meghívták, amikor megtörténik a meghívás, akkor adatokat kap mely helyről és mely IP-címmel és böngészővel, illetve mely szövegeket írta be vagy töltötte be az adatkezelő. Ezeket az adatokat külföldi szervereken, általában az Egyesült Államokban dolgozzák fel, és összegyűjtik, tárolják, elemzik és feldolgozza a Google. Ezeket az adatokat kicserélik az egyes Google szolgáltatások és az érintettek tevékenységei között a Cookie-k, a böngésző azonosítója és az IP-cím segítségével. Ha az adatalany egyszerre jelentkezett be a Google-ba, az adatok az érintettekhez csatlakoznak a Google felhasználói bejelentkezéshez, és felhasználják például a következőket: promóciós célokra, más weboldalakon is.

A Google Fordító oldalain való felhasználásakor az adatalany egyetért az automatikusan gyűjtött adatok gyűjtésével, feldolgozásával és használatával, valamint az adatkezelő által a Google, az egyik ügynöke, szolgáltatásai vagy harmadik felek által a Google Általános Szerződési Feltételei és Adatvédelmi irányelvek. Ha az érintett személy adatait nem lehet elküldeni a Google-nak, akkor a Google szolgáltatásokat nem lehet használni.

A Google Fordító Általános Szerződési Feltételei a <a onclick="window.open(this.href); return false;" href="https://policies.google.com/terms">https://policies.google.com/terms</a> címen érhető el. A <a onclick="window.open(this.href); return false;" href="https://policies.google.com/privacy">https://policies.google.com/privacy</a> adatvédelmi rendelkezései a Google adatainak gyűjtésével, feldolgozásával és felhasználásával kapcsolatos információkat tartalmaznak. 

További információ a Google Fordítóról a következő címen érhető el: <a onclick="window.open(this.href); return false;" href="http://translate.google.com/manager/website/">http://translate.google.com/manager/website/</a>.

<h3>Adatvédelmi rendelkezések a Google betűtípusok alkalmazásáról és használatáról</h3>
Ezen a weboldalon az adatkezelő integrálta a Google betűtípusok komponenseit. A Google Betűtípusok üzemeltetője a Google inc., 1600 Amphitheatre Pkwy, Mountain View, CA 94043-1351, USA. A Google Betűtípusok olyan szolgáltatások, amelyek segítségével online betűtípusokat lehet használni több webhelyen történő használatához. A betűtípus-fájlokat az adatalany informatikai rendszerébe kell letölteni, mielőtt azok megjeleníthetők. A Google Betűkészletek API által szolgáltatott betűtípusok automatikusan tömörített a gyorsabb letöltés érdekében, és letöltött elemek bekerülnek a  böngésző gyorsítótárába, és újra felhasználják azokat a Google Betűkészletek API-t használó más weboldalak.

Ezeknek az összetevőknek a célja a vezérlő honlapjának kialakítása és a betűkészleteknek a felhasználók informatikai rendszerének következetes bemutatása. A betűkészletek integrálását szerverhívás végzi, rendszerint egy Google szerver az Egyesült Államokban. Ennek következtében az érintett személy információtechnológiai rendszere le tudja tölteni a betűtípusokat.

A Google Betűtípus integrált adatkezelőjének internetes oldalán minden személyes adatot, beleértve az adatalany által használt internet-hozzáférés IP-címét, az Amerikai Egyesült Államokban található kiszolgálókhoz továbbítják a Google-nak ott tárolják. Minden alkalommal, amikor az adatkezelő weboldalának egyetlen oldala hívódik meg, amelyen a Google Betűtípusok integrálva vannak, a Google Betűkészletek kiszolgálókra vonatkozó kérelmet fognak tenni a használt betűtípusok aktuális állapotára vonatkozóan. A kérések egy napra kerülnek mentésre, a betöltött betűkészletek legfeljebb egy évig tárolódnak a felhasználók információtechnológiai rendszerén. Ebből a célból a cookie-kat a felhasználó a Google-nak a fent leírt módon tárolja, amely tartalmazza az érintett személy IP-címét, hozzáférési idejét és böngésző adatait.

A Google mindig kap információt a tartózkodás időtartama alatt azon weboldalon, amelyen a szolgáltatást hívták, amikor hívták, melyik helyről, mely IP-címmel és melyik böngészővel. Ezeket az adatokat külföldi szervereken, általában az Egyesült Államokban dolgozzák fel, és összegyűjtik, tárolják, elemzik és feldolgozza a Google. Ezeket az adatokat kicserélik az egyes Google szolgáltatások és az érintettek tevékenységei között a Cookie-k, a böngésző azonosítója és az IP-cím segítségével. Ha az adatalany egyszerre jelentkezett be a Google-ba, akkor az adatokat a Google felhasználói bejelentkezési adataival társítják, és pl. Promóciós célokra, más webhelyekhez is felhasználják.

Ha a böngésző vagy a felhasználó beállításai nem támogatják a webes betűtípusokat, akkor az adatalany informatikai rendszerén telepített betűtípust használják. A webes betűkészletek letilthatók a böngésző parancsfájl-blokkoló adataival. 

További információ a Google Betűtípusokról: <a onclick="window.open(this.href); return false;" href="https://fonts.google.com/about#">https://fonts.google.com/about#</a> és a <a onclick="window.open(this.href); return false;"https://developers.google.com/fonts/faq"> https://developers.google.com/fonts/faq</a>.

A Google Betűtípusok Általános Szerződési Feltételei elérhetők a <a onclick="window.open(this.href); return false;" href="https://policies.google.com/terms">https://policies.google.com/terms</a> címen . A <a onclick="window.open(this.href); return false;" href="https://policies.google.com/privacy">https://policies.google.com/privacy</a> adatvédelmi rendelkezései a Google adatainak gyűjtésével, feldolgozásával és felhasználásával kapcsolatos információkat tartalmaznak.

<h3>Adatvédelmi rendelkezések a Facebook alkalmazásáról és használatáról</h3>
Ezen a weboldalon az adatkezelő integrálta a Facebook komponenseit. A Facebook egy közösségi hálózat.

A közösségi hálózat az interneten, az online közösségben folytatott szociális találkozók helyszíne, amely általában lehetővé teszi a felhasználók számára, hogy kommunikáljanak egymással és virtuális térben kommunikáljanak egymással. A közösségi hálózat platformként szolgálhat a vélemények és tapasztalatok cseréjéhez, vagy lehetővé teheti az internetes közösség számára, hogy személyes vagy üzleti jellegű információkat szolgáltasson. A Facebook lehetővé teszi a közösségi hálózati felhasználók számára, hogy a barátok kérései révén magába foglalják a privát profilok létrehozását, fényképek és hálózatok feltöltését.

A Facebook üzemeltetője Facebook, Inc., 1 Hacker Way, Menlo Park, CA 94025, Egyesült Államok. Ha egy személy az Egyesült Államokon vagy Kanadán kívül él, az adatkezelő a Facebook Ireland Ltd., a Grand Canal Square, a Grand Canal Harbour, Dublin 2, Írország.

Az internetes oldal egyikének, amely az adatkezelő által működtetett, és amelyhez egy Facebook-összetevő (Facebook bővítmény) integrálódott, az adatfeldolgozó informatikai rendszerének webböngészője automatikusan kéri, hogy töltse le a megfelelő Facebook összetevőt a Facebookról a Facebook összetevőn keresztül. Az összes Facebook-bővítmény áttekintése a <a onclick="window.open(this.href); return false;" href="https://developers.facebook.com/docs/plugins/">https://developers.facebook.com/docs/plugins/</a> címen érhető el. A technikai eljárás során a Facebook tudatában van annak, hogy a weboldalunk mely al-oldalát látogatta az adatalany.

Ha az adatalany egyszerre jelentkezik be a Facebook-on, a Facebook felismeri az internetes oldalunkkal kapcsolatos minden felkérést, és az internetes oldalunkon való tartózkodásuk teljes időtartama alatt - mely internetes részterületünk oldalt az adatalany látogatta. Ezt az információt a Facebook-összetevőn keresztül gyűjtik össze, és az érintett Facebook-fiókjához kapcsolódik. Ha az adatalany a weboldalunkba integrált Facebook gombok valamelyikére kattint, pl. A "Like" gombot, vagy ha az adatalany észrevételt tesz, akkor a Facebook megegyezik ezen adatokkal az adatalany személyes Facebook felhasználói fiókjával, és tárolja a személyes adatok.

A Facebook Facebook-on keresztül mindig megkapja az adatalany honlapjáról való meglátogatását, amikor az adatalany egyszerre jelentkezik a Facebook-on a weboldalunkon való hívás idején. Ez megtörténik függetlenül attól, hogy az adatalany a Facebook komponensre kattint, vagy sem. Ha az ilyen információ továbbítása a Facebook-ra nem kívánatos az érintett számára, akkor ezt megakadályozhatja, ha bejelentkezik a Facebook számlájáról, mielőtt honlapunkra felszólít.

A Facebook által közzétett, a <a onclick="window.open(this.href); return false;" href="https://facebook.com/about/privacy/">https://facebook.com/about/privacy/</a> címen elérhető adatvédelmi irányelv tájékoztatást nyújt a személyes adatok gyűjtéséről, feldolgozásáról és felhasználásáról a Facebook-on keresztül. Ezenkívül megmagyarázzuk, hogy a Facebook beállítási lehetőségei milyen módon védik az adatalany magánéletét. Ezenkívül különböző konfigurációs beállítások állnak rendelkezésre, amelyek lehetővé teszik az adatátvitelnek a Facebookon történő eltávolítását. Ezeket az alkalmazásokat az adatalany használhatja a Facebookon keresztüli adatátvitel megszüntetésére.

<h3>Adatvédelmi rendelkezések a YouTube alkalmazásáról és használatáról</h3>
Ezen a webhelyen a vezérlő integrálta a YouTube komponenseit. A YouTube egy olyan internetes videoportál, amely lehetővé teszi a videokiadók számára, hogy videoklipeket és más felhasználókat ingyen teremtsenek meg, amely szabadon megtekintheti, áttekintheti és megjegyezheti is őket. A YouTube lehetővé teszi a különböző típusú videók közzétételét, így az internetes portálon keresztül elérheti a teljes filmeket és tévéműsorokat, valamint a felhasználók által készített videókat, előadókat és videókat.

A YouTube üzemeltetője a YouTube, LLC, a 901 Cherry Ave., a San Bruno, CA 94066, az Egyesült Államok. A YouTube, LLC a Google Inc. leányvállalata, az 1600-as Amphitheatre Pkwy, Mountain View, CA 94043-1351, Egyesült Államok.

Az internetes oldal egyikének, amelyet az adatkezelő működtet, és amelyen egy YouTube-komponens (YouTube videó) került beépítésre, automatikusan felhívja az adatalany informatikai rendszerének internetböngészőjét letöltheti a megfelelő YouTube-összetevő megjelenítését. További információ a YouTube-ról a <a onclick="window.open(this.href); return false;" href="https://www.youtube.com/yt/about/">https://www.youtube.com/yt/about/</a> címen érhető el. E technikai eljárás során a YouTube és a Google tudomással bír arról, hogy a weboldalunk mely aloldalát látogatta az adatalany.

Ha az adatalany bejelentkezett a YouTube-on, a YouTube felismeri minden olyan feljegyzést, amely egy YouTube-videót tartalmazó aloldal, melyet az internetes oldalunk egy bizonyos aloldalát az érintett vette fel. Ezt az információt a YouTube és a Google gyűjti össze, és hozzárendeli az érintett érintett YouTube-fiókjához.

A YouTube és a Google információt fog kapni a YouTube-komponensen keresztül, amelyet az érintett látogatta meg weboldalunkon, ha a weboldalunkon lévő hívás időpontjában az érintett bejelentkezett a YouTube-on; ez függetlenül attól, hogy a személy egy YouTube-videóra kattint, vagy sem. Ha az ilyen információk YouTube-ra és Google-ra történő továbbítása nem kívánatos az érintett számára, a kézbesítés megakadályozható, ha az érintett bejelentkezik saját YouTube-fiókjáról, mielőtt weboldalunkra felszólít.

A YouTube adatvédelmi rendelkezései, amelyek a <a onclick="window.open(this.href); return false;" href="https://policies.google.com/privacy">https://policies.google.com/privacy</a> címen érhetők el, a YouTube és a Google személyes adatainak gyűjtésére, feldolgozására és felhasználására vonatkozó információkat tartalmaznak.

<h3>Fizetési mód: Adatvédelmi rendelkezések a PayPal fizetési folyamatként való használatáról</h3>
Ezen a weboldalon az adatkezelő integrálta a PayPal komponenseit. A PayPal egy online fizetési szolgáltató. A kifizetéseket az úgynevezett PayPal-fiókokon keresztül kell feldolgozni, amelyek virtuális, magán vagy üzleti fiókokat tartalmaznak. A PayPal a virtuális fizetéseket hitelkártyával is képes feldolgozni, ha a felhasználónak nincs PayPal-fiókja. A PayPal-fiókot e-mail cím segítségével kezeljük, ezért nincsenek klasszikus számlaszámok. A PayPal lehetővé teszi az online kifizetések harmadik felek részére történő kiutalását vagy fizetések fogadását. A PayPal elismeri továbbá a megbízott funkciókat és vevővédelmi szolgáltatásokat kínál.

A PayPal európai operatív vállalata a PayPal (Europe) S.a.rl & Cie. SCA, 22-24 Boulevard Royal, 2449 Luxembourg, Luxemburg.

Ha az adatalany adomány opcióként a „PayPal” -t választja, automatikusan továbbítja az adatalany adatait a PayPal-nak. A fizetési lehetőség kiválasztásával az adatalany elfogadja a fizetés feldolgozásához szükséges személyes adatok átadását.

A PayPal-hoz továbbított személyes adatok általában a vezetéknév, keresztnév, a cím, az e-mail cím, az IP-cím, a telefonszám, a mobiltelefonszám vagy a fizetés feldolgozásához szükséges egyéb adatok.

Az adatok továbbítása a fizetés feldolgozására és a csalás megelőzésére irányul. Az adatkezelő személyes adatokat továbbít a PayPal-ba, különösen ha az adatátvitelhez jogos érdekeltségről van szó. A PayPal és az adatfeldolgozó közötti adatcserét végző személyes adatokat a PayPal továbbítja a gazdasági hitelintézeteknek. Ez a továbbítás személyazonossági és hitelképességi ellenőrzésre szolgál.

A PayPal szükség esetén átadja a személyes adatokat a leányvállalatoknak, a szolgáltatóknak vagy az alvállalkozóknak, amennyiben ez a szerződéses kötelezettségek teljesítéséhez vagy a megrendelésben feldolgozandó adatokhoz szükséges.

Az adatalany bármikor visszavonhatja a személyes adatok kezeléséhez szükséges hozzájárulást a PayPal-tól. A visszavonásnak nincs semmilyen hatása a személyes adatokra, amelyeket a (szerződéses) fizetési feldolgozással összhangban kell feldolgozni, felhasználni vagy továbbítani.

A PayPal vonatkozó adatvédelmi rendelkezései letölthetők a <a onclick="window.open(this.href); return false;" href="https://www.paypal.com/hu/webapps/mpp/ua/privacy-full">https://www.paypal.com/hu/webapps/mpp/ua/privacy-full</a> címen.

<h3>A feldolgozás jogalapja</h3>
A GDPR 6. cikk (1) bekezdésének a) pontja jogalapot biztosít azon műveletek feldolgozásához, amelyekhez egy meghatározott feldolgozási célra hozzájárulást kapunk. Ha a személyes adatok feldolgozása olyan szerződés teljesítéséhez szükséges, amelyhez az adatalany részt vesz, például, amikor az adatfeldolgozás műveletek szükségesek az áruk szállításához vagy más szolgáltatások nyújtásához, akkor a feldolgozás a GDPR alapján határozták meg. Ugyanez vonatkozik az olyan feldolgozási műveletekre, amelyek a szerződéskötést megelőző intézkedések végrehajtásához szükségesek, például termékünkkel vagy szolgáltatásainkkal kapcsolatos vizsgálatok esetén. Társaságunkra jogi kötelezettség vonatkozik arra, hogy személyes adatok feldolgozására van szükség, például az adókötelezettségek teljesítéséhez, a feldolgozás GDPR 6. cikk (1) bekezdésének c) pontján alapul. Ritkán előfordulhat, hogy a személyes adatok feldolgozása az érintett vagy más természetes személy létfontosságú érdekeinek védelme érdekében szükséges. Ez lenne például akkor, ha egy látogatót megsértettünk a cégünkben, és nevét, életkorát, egészségbiztosítási adatait vagy egyéb fontos információkat továbbítanánk orvosnak, kórháznak vagy más harmadik félnek. Ezután a feldolgozás a GDPR 6. cikk (1) bekezdésének d) pontján alapulna. Végül a feldolgozási műveletek a GDPR-re vonatkozhatnak. Ez a jogalap azon műveletek feldolgozására szolgál, amelyekre a fent említett jogi okok egyike sem vonatkozik, amennyiben a feldolgozás a társaságunk vagy harmadik fél által folytatott jogos érdekek alkalmazásához szükséges, kivéve, ha az érdekeket felülmúlja az érdekeltek vagy az adatalany alapvető jogai és szabadságai, amelyek a személyes adatok védelmét igénylik. Az ilyen feldolgozási műveletek különösen megengedettek, mivel azokat kifejezetten az európai jogalkotó említette. Úgy ítélte meg, hogy jogszerű érdeklődést feltételezhet, ha az érintett az adatkezelő ügyfele (a 47. mondat (2) bekezdés GDPR).

<h3>A személyes adatok tárolásának időszaka</h3>
A személyes adatok tárolási idejének meghatározására használt kritériumok a megfelelő törvényes megőrzési időszak. Ezen időszak lejártát követően a megfelelő adatokat rendszeresen törlik, feltéve, hogy ez már nem szükséges a szerződés teljesítéséhez vagy a szerződés megkötéséhez.

<h3>A személyes adatok megadása törvényes vagy szerződéses követelményként. A szerződés megkötéséhez szükséges követelmény. Az adatalany kötelezettsége a személyes adatok átadására. az ilyen adatok nem teljesítésének lehetséges következményei</h3>
Tisztázzuk, hogy a személyes adatok átadását részben törvényi előírja (pl. Adószabályok), vagy szerződéses rendelkezésekből (pl. A szerződéses partnerről). Néha szükség lehet szerződés megkötésére, hogy az adatalany személyes adatokat szolgáltasson, amelyeket később feldolgozni kell. Az adatalany például köteles személyes adatait megadni, amikor cégünk szerződést köt vele. A személyes adatok nem nyújtása azzal járna, hogy az adatalanygal kötött szerződést nem lehetett megkötni. Mielőtt az adatalany személyes adatokat szolgáltatna, az adatalanynak fel kell vennie a kapcsolatot bármelyik alkalmazottal.

<h3>A szerződés megszűntetése</h3>
A weboldalunkon mindenki saját döntése szerint bármikor törölheti saját regisztrációját. A regisztráció törlése folyamán minden személyes adat törlésre fog kerülni. A törlés után nem áll módunkban visszaállítani az adatokat.',
	'JVPPDMT_REJECTION'						=> 'Elutasítom',
	'JVPPDMT_USED_COOKIE'			=> array(
		'<strong>phpBB fórum által használt cookie:</strong>',
		'%1$s_cookie_status: Weblapunk meglátogatása során tárolja a visszaigazolást a cookie elfogadásáról.',
		'%1$s_k: Használja az automatikus bejelentkezési szolgáltatás (emlékezzen rám).',
		'%1$s_lang: Ha a vendég felhasználó nyelvet módosít, akkor ez a cookie létrejön. A munkamenete lejár, ha a böngészés megszűnik.',
		'%1$s_sid: Tartalmazza a munkamenet azonosítót (ID). Ez a cookie azonosítja a felhasználót a %1$s_u cookie-val együtt.',
		'%1$s_u: A felhasználó azonosítóját (ID) tárolja.',
		'%1$s_track: Nem olvasott hozzászólások megjelölése a vendégek számára, ha aktív ez a funkció.',

		/* Ha nem használja a (phpBB Arcade) kiterjesztést, akkor add hozzá a // karaktereket a sor elejéhez. */
		'<br><strong>Játékterem által használt cookie:</strong>',
		'%1$s_arcade_sid: Tartalmazza a játék munkamenet azonosítót (ID) a phpBB Arcade használatához.',
		'%1$s_arcade_pd: Tartalmazza a játék azonosítót (ID).',
		'%1$s_arcade_popup: Tartalmazza a beállításokat új ablakban való játszás esetén.',
		'%1$s_arcade_lighting: Tartalmazza a háttérvilágítás beállítását a játékok során.',
		'%1$s_arcade_info_block: Tartalmazza a felhasználó beállítását az információs blokk láthatóságának megtekintéséért a játékok során.',

		/* Ha nem használja a (JV Footer chat) kiterjesztést, akkor add hozzá a // karaktereket a sor elejéhez. */
		'<br><strong>JV lábléc chat által használt cookie:</strong>',
		'%1$s_jv_chat_data: Tartalmazza a lábléc chat modul beállításait és azoknak a felhasználóknak az ID számát akivel ép beszélgetünk.',

		/* Ha nem használja a (JV Shoutbox) kiterjesztést, akkor add hozzá a // karaktereket a sor elejéhez. */
		'<br><strong>JV üzenőfal által használt cookie:</strong>',
		'%1$s_jv_shout_close_: Tartalmazza az összes olyan oldalt ahol bezárja az üzenőfal blokkot. Minden oldalnak a saját nevén hozza létre a cookie-t. Pl. az index oldalon a neve: %1$s_jv_shout_close_index.',

		/* Ha nem használja a (Collapsible Forum Categories) kiterjesztést, akkor add hozzá a // karaktereket a sor elejéhez. */
		'<br><strong>Összecsukható fórum kategóriák által használt cookie:</strong>',
		'%1$s_ccat: A felhasználó személyes beállításait tárolja az összecsukott vagy kinyitott kategóriákról (Blokkokról).',
	),
));
