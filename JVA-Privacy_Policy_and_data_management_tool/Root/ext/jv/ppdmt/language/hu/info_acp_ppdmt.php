<?php
/**
*
* @package JVA - Privacy Policy and data management tool
* @version $Id$
* @author 2011-2025 KillBill
* @copyright (c) 2014-2025 https://jv-arcade.com/ - https://jv-arcade.com/contact
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
	'ACP_CAT_JVPPDMT'							=> 'Adatvédelmi irányelv és adatkezelő eszköz',
	'ACP_JVPPDMT'								=> 'JVA - Privacy Policy and data management tool',
	'ACP_JVPPDMT_CONTROLLER_NAME'				=> 'Adatkezelő neve',
	'ACP_JVPPDMT_CONTROLLER_NAME_EXPLAIN'		=> 'Az adatkezelő teljes neve.',
	'ACP_JVPPDMT_CONTROLLER_PHONE'				=> 'Adatkezelő telefonszáma',
	'ACP_JVPPDMT_CONTROLLER_PHONE_EXPLAIN'		=> 'A GDPR előírja, hogy legalább két elérhetőséget kell biztosítani az egyik a kapcsolat e-mail cím a második pedig a telefonszám, mint gyors elérési lehetőség.<br><em>Adja meg az adatkezelő telefonszámát az országhívószámmal együtt. Pl Németország: +49 …</em>',
	'ACP_JVPPDMT_COOIKE_INFO'					=> 'Cookie információ kijelzése',
	'ACP_JVPPDMT_COOIKE_INFO_EXPLAIN'			=> 'Ha bekapcsolod, akkor aki nem fogadta el a cookie-k tárolását, annak megjelenik egy információ, amely tájékoztatja, hogy számos funkció nem érhető el a számára. Továbbá az információ tartalmazza a linket, amely elviszi az adatvédelmi adatok beállításához.',
	'ACP_JVPPDMT_GLOBAL_SETTINGS'				=> 'Adatvédelmi irányelv és adatkezelő eszközök beállításai',
	'ACP_JVPPDMT_GLOBAL_SETTINGS_EXPLAIN'		=> 'Itt engedélyezheted, hogy a felhasználók számára megjelenítésre kerüljön az adatvédelmi irányelv és annak elfogadása. Továbbá lehetőséged nyillik, hogy engedélyezd a felhasználók számára, hogy törölhessék saját regisztrációjukat.',
	'ACP_JVPPDMT_HIDE_USERNAME_BOT'				=> 'Felhasználónevek elrejtése a robotok számára',
	'ACP_JVPPDMT_HIDE_USERNAME_GUEST'			=> 'Felhasználónevek elrejtése a vendégek számára',
	'ACP_JVPPDMT_LAST_RESET_DATE'				=> 'Utolsó visszaállítás dátuma: %s',
	'ACP_JVPPDMT_PRIVACY_POLICY_ENABLE'			=> 'Adatvédelmi irányelv',
	'ACP_JVPPDMT_PRIVACY_POLICY_ENABLE_EXPLAIN'	=> 'Ha bekapcsolód akkor a felhasználóknak kijelzésre fog kerülni az adatvédelmi irányelv és annak elfogadása.',
	'ACP_JVPPDMT_RESET'							=> 'Adatvédelmi irányelv elfogadásának visszaállítása',
	'ACP_JVPPDMT_RESET_CONFIRM'					=> 'Biztos vagy benne, hogy újraindítod az adatvédelmi irányelv elfogadását?',
	'ACP_JVPPDMT_RESET_EXPLAIN'					=> 'Ha megváltoztatod az adatvédelmi irányelvet, akkor indítsd el ezt a folyamatot, hogy a felhasználóknak újra el kelljen olvasni és fogadni az új adatvédelmi irányelvet.',
	'ACP_JVPPDMT_RESET_SUCCESS'					=> 'Az adatvédelmi irányelv újraindítása sikeres.',
	'ACP_JVPPDMT_SETTINGS'						=> 'Beállítások',
	'ACP_JVPPDMT_TERM_OF_USE_RESET'				=> 'Felhasználási feltételek elfogadásának visszaállítása',
	'ACP_JVPPDMT_TERM_OF_USE_RESET_CONFIRM'		=> 'Biztos vagy benne, hogy újraindítod a felhasználási feltételek elfogadását?',
	'ACP_JVPPDMT_TERM_OF_USE_RESET_EXPLAIN'		=> 'Ha megváltoztatod a felhasználási feltételeket, akkor indítsd el ezt a folyamatot, hogy a felhasználóknak újra el kelljen olvasni és fogadni az új felhasználási feltételeket.',
	'ACP_JVPPDMT_TERM_OF_USE_RESET_SUCCESS'		=> 'A felhasználási feltételek újraindítása sikeres.',
	'ACP_JVPPDMT_USE_COOKIE_GUEST'				=> 'Cookie használat a vendégeknek',
	'ACP_JVPPDMT_USE_COOKIE_GUEST_EXPLAIN'		=> 'Ha kikapcsolód, akkor a vendégek számára blokkolva lesz a cookie használat, így a vendégek számára nem lesz szükséges az adatvédelmi irányelv elfogadása.',
	'ACP_JVPPDMT_VIEWER_GROUP'					=> 'Néző csoport',
	'ACP_JVPPDMT_VIEWER_GROUP_EXPLAIN'			=> 'A kiterjesztés létrehozott egy új speciális csoportot melynek neve <strong>„Regisztrált nézők”</strong>. Ez a csoport biztosítaná azok felhasználók jogait, amelyek nem fogadják ell a további személyes adatok tárolását. Vedd figyelembe, hogy az adatkezelőnek mindig figyelni kell arra, hogy ennek a csoportnak a jogosultságai mindig megfelelően legyen beállítva. A jogosultságot minden esetben úgy kell beállítani, hogy a felhasználó aki ebbe a csoportban van az ne tudjon űrlapot beküldeni sehol. Figyelj arra, ha új fórumot hozol létre ne felejtsd el ennek a csoportnak a jogosultságát is frissíteni. Abban az esetben jó ennek a csoportnak a jogosultság beállítása, ha a felhasználó csak is nézelődni tud és semmi mást. Jogosultság beállításnál ügyelj, hogy mindig a <strong>„SOHA”</strong> mezőt válaszd ki, mivel csak így tudod felülírni a felhasználó többi csoport jogosultságát. Amennyiben kikapcsolva hagyod ezt a csoportot, akkor a felhasználók, ha nem fogadják el a személyes adatok tárolását, akkor átirányításra kerülnek egyből a regisztráció törléséhez.',
	'ACP_JVPPDMT_VIEWER_GROUP_INFO'				=> 'Néző csoport információ kijelzése',
	'ACP_JVPPDMT_VIEWER_GROUP_INFO_EXPLAIN'		=> 'Ha bekapcsolod, akkor a néző csoport felhasználóinak megjelenik egy információ, amely tájékoztatja, hogy a néző csoportban vannak és nincs semmilyen jogosultságuk űrlap beküldéséhez. Továbbá az információ tartalmazza a linket, amely elviszi az adatvédelmi adatok beállításához.',
	'ACP_JVPPDMT_YOUR_PP_FILE'					=> 'Saját adatvédelmi irányelv fájlneve',
	'ACP_JVPPDMT_YOUR_PP_FILE_EXPLAIN'			=> 'Itt lehetőséged nyílik, hogy megadd a saját nyelvi fájlod nevét amely a te módosított adatvédelmi irányelvedet tartalmazza. Erre akkor van szükség, ha te módosítani szeretnéd a szöveget és nem szeretnéd elveszíteni a kiterjesztés frissítése során. Töltsd fel a saját fájlodat a [ROOT]/ext/jv/ppdmt/language/XY/ nyelvi könyvtárakba. Pl. ha a neve „pp”, akkor a következőnek kell, hogy szerepeljen [ROOT]/ext/jv/ppdmt/language/XY/pp.php fájlnak. Továbbá vedd figyelembe, hogy a nyelvi fájlban szereplő %1$s … %5$s tartó helyettesítő karaktereket nem távolíthatód el és a nyelvi változónak is azonosnak kell lennie. A legegyszerűbb módja, hogy ne keletkezzen hiba, ha egy az egyben átmásolod a tartalmat és csak utána szerkeszted a szöveget.',

	'LOG_JVPPDMT_DOWNLOAD_PRIVACY_DATA'			=> '<strong>Adatvédelmi adatok letöltése</strong>',
	'LOG_JVPPDMT_DOWNLOAD_PRIVACY_PMS'			=> '<strong>Adatvédelmi privát üzenetek letöltése</strong>',
	'LOG_JVPPDMT_DOWNLOAD_PRIVACY_POSTS'		=> '<strong>Adatvédelmi hozzászólások letöltése</strong>',
	'LOG_JVPPDMT_PRIVACY_SETTINGS'				=> '<strong>Adatvédelmi beállítások módosítása</strong>',
	'LOG_JVPPDMT_RESET'							=> '<strong>Adatvédelmi irányelv újraindítása</strong>',
	'LOG_JVPPDMT_SETTINGS'						=> '<strong>Adatvédelmi irányelv és adatkezelő eszközök beállításainak módosítása</strong>',
	'LOG_JVPPDMT_TERM_OF_USE_RESET'				=> '<strong>Felhasználási feltételek újraindítása</strong>',
]);
