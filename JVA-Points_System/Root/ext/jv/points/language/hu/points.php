<?php
/**
*
* @package JVA - Points System
* @version $Id: points.php 991 2021-12-12 10:10:48Z KillBill $
* @author 2011-2024 KillBill
* @copyright (c) 2014-2024 https://jv-arcade.com/ - https://jv-arcade.com/contact
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

$lang = array_merge($lang, array(
	'JV_POINTS_ADD_USER_EXPLAIN'			=> 'Add meg annak a felhasználónak a nevét akinek az egyenlegét módosítani szeretnéd.',
	'JV_POINTS_ALL_TRANSFER'				=> 'Összes átutalás',
	'JV_POINTS_AMOUNT'						=> 'Összeg',
	'JV_POINTS_AMOUNT_USER_EXPLAIN'			=> 'Add meg azt az összeget amire módosítani szeretnéd a felhasználó egyenlegét.',
	'JV_POINTS_ATTACH_DOWNLOAD_NO_POINTS'	=> 'Neked nincs elég „%s”, hogy letöltsd ezt az állományt.',
	'JV_POINTS_BALANCE'						=> 'Egyenleg',
	'JV_POINTS_CHANGE'						=> 'Egyenleg módosítás',
	'JV_POINTS_CHANGE_TITLE'				=> 'Felhasználó egyenlegének módosítása',
	'JV_POINTS_CONTROL_PANEL'				=> 'Pontrendszer vezérlőpult',
	'JV_POINTS_COST'						=> 'Költség',
	'JV_POINTS_COSTS'						=> 'Költségek',
	'JV_POINTS_DISABLED'					=> 'A pontrendszer jelenleg ki van kapcsolva.',
	'JV_POINTS_ERROR_MINUS_VALUE'			=> 'A megadott összeg nem lehet mínusz értékű.',
	'JV_POINTS_ERROR_TRANSFER_BALANCE'		=> 'Az egyenleged nem fedezi az átutalni kívánt összeget.',
	'JV_POINTS_ERROR_TRANSFER_BALANCE_COST'	=> 'Az egyenleged nem fedezi az átutalni kívánt összeget és annak költségét.',
	'JV_POINTS_ERROR_ZERO_VALUE'			=> 'Az összeg nem lehet nulla.',
	'JV_POINTS_FAQ'							=> 'GyIK',
	'JV_POINTS_FAQ_VIEWING'					=> 'Pontrendszer útmutató megtekintése',
	'JV_POINTS_GUIDE'						=> 'Pontrendszer útmutató',
	'JV_POINTS_INFO'						=> 'Információ',
	'JV_POINTS_INFO_EXPLAIN'				=> 'Itt olvashatod az aktuális beállításokat, hogy miért is jár jutalom illetve mi jár költséggel. Vedd figyelembe, hogy az adminisztrátor ezeket a beállításokat bármikor módosíthatja.',
	'JV_POINTS_INFO_TITLE'					=> 'Általános információk',
	'JV_POINTS_INFO_VIEWING'				=> 'Pontrendszer általános információk megtekintése',
	'JV_POINTS_LOGIN_EXPLAIN'				=> 'A pontrendszer vezérlőpult megtekintése előtt be kell jelentkezned.',
	'JV_POINTS_MAIN'						=> 'Áttekintés',
	'JV_POINTS_MAIN_EXPLAIN'				=> 'Helló %s!<br><br>Jelenlegi egyenleged: %s.',
	'JV_POINTS_MAIN_TITLE'					=> 'Legnagyobb egyenleggel rendelkezők',
	'JV_POINTS_MODIFY'						=> 'Módosítás',
	'JV_POINTS_MORE_INFO_HERE'				=> 'További információ %sITT%s.',
	'JV_POINTS_NEW_ATTACHS_COST_EXPLAIN'	=> 'A letöltési költség a következő fájl kiterjesztésekre vonatkozik: „%s”.',
	'JV_POINTS_NEW_ATTACH_COST'				=> 'Csatolmányok letöltésének költsége',
	'JV_POINTS_NEW_ATTACH_COST_EXPLAIN'		=> 'A letöltési költség a következő fájl kiterjesztésre vonatkozik: „%s”.',
	'JV_POINTS_NEW_POST_COST'				=> 'Hozzászólás írásának költsége',
	'JV_POINTS_NEW_POST_REWARD'				=> 'Új hozzászólásért járó jutalom',
	'JV_POINTS_NEW_TOPIC_REWARD'			=> 'Új téma nyitásért járó jutalom',
	'JV_POINTS_NOTIFICATION_CHANGE_ADD'		=> '%s felhasználó hozzáadott az egyenlegedhez.<br>Hozzáadott összeg: %s.',
	'JV_POINTS_NOTIFICATION_CHANGE_SET'		=> '%s felhasználó módosította az egyenleged.<br>Új egyenleg: %s.',
	'JV_POINTS_NOTIFICATION_CHANGE_SUB'		=> '%s felhasználó levont az egyenlegedből.<br>Levont összeg: %s.',
	'JV_POINTS_NOTIFICATION_SET'			=> '%s felhasználó módosította az egyenleged.<br>Eredeti egyenleg: %s<br>Új egyenleg: %s.',
	'JV_POINTS_NOTIFICATION_TRANSFER'		=> '%s felhasználó %s adományozott számodra.',
	'JV_POINTS_NO_TRANSFER_LOG'				=> 'Még nem történt átutalás',
	'JV_POINTS_NO_USER'						=> 'Jelenleg minden felhasználó egyenlege nulla.',
	'JV_POINTS_RECEIVED'					=> 'Kapott',
	'JV_POINTS_REG_START_BALANCE'			=> 'Új regisztrált tag kezdő egyenlege',
	'JV_POINTS_REWARDS'						=> 'Jutalmak',
	'JV_POINTS_SENT'						=> 'Küldött',
	'JV_POINTS_SORT_AMOUNT'					=> 'Adomány összege',
	'JV_POINTS_SORT_DATE'					=> 'Küldés időpontja',
	'JV_POINTS_SORT_FROM'					=> 'Feladó',
	'JV_POINTS_SORT_TO'						=> 'Címzett',
	'JV_POINTS_SORT_TYPE'					=> 'Küldés típusa',
	'JV_POINTS_TRANSFER'					=> 'Átutalás',
	'JV_POINTS_TRANSFER_AMOUNT'				=> 'Átutalni kívánt összeg',
	'JV_POINTS_TRANSFER_AMOUNT_EXPLAIN'		=> 'Add meg azt az összeget amit átszeretnél utalni.',
	'JV_POINTS_TRANSFER_COST'				=> 'Átutalás költsége',
	'JV_POINTS_TRANSFER_COST_EXPLAIN'		=> 'Az átutalás költsége %1$s százalék. Amennyiben átutalást kezdeményezel, úgy az átutalni kívánt összeg és annak %1$s százaléka levonásra fog kerülni az egyenlegedből.',
	'JV_POINTS_TRANSFER_LOG'				=> 'Átutalási napló',
	'JV_POINTS_TRANSFER_TITLE'				=> 'Egy bizonyos összeg átutalása egy másik felhasználónak',
	'JV_POINTS_TRANSFER_TITLE_EXPLAIN'		=> 'Add meg annak a felhasználónak a nevét, akinek szeretnél átutalni.',
	'JV_POINTS_TRANSFER_YOURSELF_ERROR'		=> 'Saját magadnak nem hajthatsz végre átutalást.',
	'JV_POINTS_USER_CHANGED_SUCCESS'		=> 'A(z) „%s” felhasználó egyenlege sikeresen módosítva.',
	'JV_POINTS_USER_TRANSFER_SUCCESS'		=> 'A(z) „%s” felhasználónak az átutalás sikeresen végrehajtva.',
	'JV_POINTS_VIEWING'						=> 'Pontrendszer vezérlőpult megtekintése',
	'JV_POINTS_WRITE_POST_NO_POINTS'		=> 'Neked nincs elég „%s”, hogy új hozzászólást írj.',

	'JVA_CORE_EXT_NOT_FOUND'				=> 'A kiterjesztés nem kapcsolható be mert nem található a „JVA - Core” kiterjesztés!',
));
