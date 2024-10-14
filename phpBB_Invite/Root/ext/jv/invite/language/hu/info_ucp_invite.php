<?php
/**
*
* @package JVA - phpBB Invite
* @version $Id$
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

//These are used through out the invite
$lang = array_merge($lang, [
	'POST_CONFIRM_EXPLAIN'						=> 'Az automatikus meghívó küldés megakadályozása érdekében meg kell adnod egy megerősítő kódot. A kód az alábbi képen szerepel. Ha látási vagy egyéb problémák miatt nem tudod elolvasni a kódot, lépj kapcsolatba a %sfórum adminisztrátorával%s.',

	'UCP_CAT_JV_INVITE'							=> 'JVA - phpBB Invite',
	'UCP_JV_INVITE'								=> 'Meghívó',
	'UCP_JV_INVITED_MEMBERS_EXPLAIN'			=> [
		1										=> 'Az általad eddig meghívott tagszám.',
		2										=> 'Az általad eddig meghívott tagok száma.',
	],
	'UCP_JV_INVITE_ADAT'						=> 'Meghívó adatok',
	'UCP_JV_INVITE_BACK'						=> '<br><br>%sVissza a felhasználói vezérlőpultba%s',
	'UCP_JV_INVITE_DAYF'						=> 'Ma elküldött meghívó',
	'UCP_JV_INVITE_DAYF_EXPLAIN'				=> 'A mai napon eddig ennyi meghívott küldtél el.',
	'UCP_JV_INVITE_DAY_OFF'						=> 'A mai napon már nem küldhetsz ki több meghívót.',
	'UCP_JV_INVITE_DB_KULDES'					=> 'Kiküldhető meghívó/nap',
	'UCP_JV_INVITE_DB_KULDES_EXPLAIN'			=> 'Maximum ennyi meghívót küldhetsz ki naponta.',
	'UCP_JV_INVITE_DB_MAX'						=> '<span class="jv_invite_tred">Korlátlan!</span>',
	'UCP_JV_INVITE_DB_PENDING'					=> 'Függőben lévő meghívó',
	'UCP_JV_INVITE_DB_PENDING_EXPLAIN'			=> 'Itt láthatód, hogy a kiküldött meghívóiddal még mennyien nem regisztráltak be.',
	'UCP_JV_INVITE_DB_SZAM'						=> 'Meghívóid száma',
	'UCP_JV_INVITE_DB_SZAM_EXPLAIN'				=> 'A kiküldhető meghívóid száma.',
	'UCP_JV_INVITE_DELETE'						=> 'Meghívók törlése',
	'UCP_JV_INVITE_DELETE_ERROR'				=> 'A meghívó nem található vagy lejárt a törlésre rendelkezésre járó idő.',
	'UCP_JV_INVITE_DELETE_EXPLAIN'				=> 'Itt lehetőséged van a rossz címre kiküldött meghívókat törölni.<br><em>Elküldéstől számított %s percig.</em>',
	'UCP_JV_INVITE_DELETE_NO_CONFIRM'			=> 'A törlés nem lett megerősítve.',
	'UCP_JV_INVITE_DELETE_SUCCES'				=> [
		1										=> 'A meghívó törlése sikeres.',
		2										=> 'A meghívók törlése sikeres.',
	],
	'UCP_JV_INVITE_DUP'							=> 'A megadott e-mail címre már lett kiküldve meghívó. -> %s',
	'UCP_JV_INVITE_EDUP'						=> 'Egy e-mail címet többször is megadtál. -> %s',
	'UCP_JV_INVITE_EMAILS_SENT'					=> 'A meghívók sikeresen elküldve.',
	'UCP_JV_INVITE_EMAIL_KERES_EXPLAIN'			=> 'Írj pár sort miért is van szükséged ennyi meghívóra.',
	'UCP_JV_INVITE_EMAIL_LANG'					=> 'E-mail nyelv',
	'UCP_JV_INVITE_EMAIL_SELECT'				=> 'Meghívó kiválasztása',
	'UCP_JV_INVITE_EMAIL_SELECT_EXPLAIN'		=> 'Válaszd ki, hogy kit szeretnél törölni a címzettek közül.',
	'UCP_JV_INVITE_EMAIL_SELECT_RESTORE_EXP'	=> 'Válaszd ki, hogy kit szeretnél visszaállítani a címzettek közül.',
	'UCP_JV_INVITE_EMAIL_SENT'					=> 'A meghívó sikeresen elküldve.',
	'UCP_JV_INVITE_FLOOD_LIMIT'					=> 'Most nem küldhetsz több meghívót. Kérjük, próbálkozz később.',
	'UCP_JV_INVITE_FRIEND'						=> 'Barát hozzáadása',
	'UCP_JV_INVITE_FRIEND_EXPLAIN'				=> 'A meghívott felhasználó hozzáadásra kerül a barát listádhoz.',
	'UCP_JV_INVITE_FUG_LIMIT'					=> 'A mai nap már csak %s meghívót küldhetsz ki te viszont %s címzettet adtál meg.',
	'UCP_JV_INVITE_KERES'						=> 'Meghívó igénylése',
	'UCP_JV_INVITE_KERES_BUYS_SUCCES'			=> 'A meghívók vásárlása sikeres.',
	'UCP_JV_INVITE_KERES_BUY_MIN'				=> 'Minimum (1) meghívó vásárolható.',
	'UCP_JV_INVITE_KERES_BUY_NO'				=> 'Neked nincs elég %s ehhez a vásárláshoz. A te egyenleged jelenleg %s %s.',
	'UCP_JV_INVITE_KERES_BUY_SUBMIT'			=> 'Vásárlás',
	'UCP_JV_INVITE_KERES_BUY_SUBT'				=> 'Vásárolni kívánt meghívó',
	'UCP_JV_INVITE_KERES_BUY_SUBT_EXPLAIN'		=> 'Írd be a vásárolni kívánt meghívók számát.<br>Egy meghívó ára <strong>%s %s</strong>.<br>A meghívott személyért a felelősséget te vállalod, amennyiben a meghívott személy rendbontást csinál.',
	'UCP_JV_INVITE_KERES_BUY_SUCCES'			=> 'A meghívó vásárlása sikeres.',
	'UCP_JV_INVITE_KERES_BUY_TITLE'				=> 'Meghívó vásárlása',
	'UCP_JV_INVITE_KERES_DISABLED'				=> 'Az igénylés jelenleg ki van kapcsolva!',
	'UCP_JV_INVITE_KERES_MAX'					=> 'Maximum igénylések száma (%s) darab.',
	'UCP_JV_INVITE_KERES_MIN'					=> 'Minimum igénylések száma (1) darab.',
	'UCP_JV_INVITE_KERES_NO_MES'				=> 'Nem írtál üzenetet. Indoklás nélkül nem igényelhető ennyi meghívó.',
	'UCP_JV_INVITE_KERES_OFF'					=> 'A meghívó iránti kérelmed még nincs elbírálva, amint egy adminisztrátor/moderátor elbírálja, kapni fogsz róla egy e-mail üzenetet.',
	'UCP_JV_INVITE_KERES_SOK_EXPLAIN'			=> '<strong>(%s)</strong> darab meghívó igénylésétől indoklás szükséges, kérlek indokold meg, hogy miért is van szükséged ennyi meghívóra.<br>Amennyiben úgy látjuk, hogy kérésed elfogadható, akkor a meghívókat kiutaljuk számodra. Ha visszaélést tapasztalunk, akkor az kitiltással is járhat.',
	'UCP_JV_INVITE_KERES_SUBMIT'				=> 'Igény elküldése',
	'UCP_JV_INVITE_KERES_SUCC'					=> 'A meghívóra az igénylésed elküldésre került.',
	'UCP_JV_INVITE_KERES_SUCCS'					=> 'A meghívókra az igénylésed elküldésre került.',
	'UCP_JV_INVITE_KERES_TITLE'					=> 'Igényelt meghívó',
	'UCP_JV_INVITE_KERES_TITLE_EXPLAIN'			=> 'Írd be az igényelni kívánt meghívók számát maximum <strong>(%s)</strong> darab meghívó igényelhető.<br>A meghívott személyért a felelősséget te vállalod, amennyiben a meghívott személy rendbontást csinál.',
	'UCP_JV_INVITE_KULDES'						=> 'Meghívó kiküldése',
	'UCP_JV_INVITE_KULDES_EMAIL_MAX'			=> 'Maximum %s email címet lehet megadni, te viszont %s adtál meg.',
	'UCP_JV_INVITE_KULDES_MAX'					=> '<span class="jv_invite_tred">Jelenleg nincs korlátozva.</span>',
	'UCP_JV_INVITE_MAX'							=> 'Több címzettet adtál meg, mint amennyi meghívód van.',
	'UCP_JV_INVITE_MAX_ERROR'					=> 'Jelenleg korlátlan meghívóval rendelkezel így nincs szükséged az igénylésre.',
	'UCP_JV_INVITE_MAX_RECIPIENTS'				=> 'Minden címet új sorba írj.<br>Maximum megadható címzettek száma',
	'UCP_JV_INVITE_MESSAGE_BODY_EXPLAIN'		=> 'Írj pár sort miért is csatlakozzon az illető.',
	'UCP_JV_INVITE_MIN_MEM_DAYS_ERROR'			=> 'Sajnálom, de nem küldhetsz meghívót.<br>Indok: A regisztrációd óta nem telt el %s nap.<br>A meghívó küldés számodra elérhetővé válik %s.',
	'UCP_JV_INVITE_NOTIFICATION_TYPE_MANAGE'	=> 'Valaki módosítja a meghívóid mennyiségét',
	'UCP_JV_INVITE_NOT_DELETED_INVITE'			=> 'Nincs törölhető meghívód.',
	'UCP_JV_INVITE_NOT_FOUND'					=> 'A meghívó már nem található.',
	'UCP_JV_INVITE_NOT_RESTORED_INVITE'			=> 'Nincs visszaállítható meghívó.',
	'UCP_JV_INVITE_NO_EMAIL'					=> 'Nem adtál meg e-mail címet.',
	'UCP_JV_INVITE_NO_INVITED_USER'				=> 'Még nem hívtál meg senkit.',
	'UCP_JV_INVITE_NO_LOGIN'					=> 'Még nem lépet be.',
	'UCP_JV_INVITE_NO_PERM_EMAIL'				=> 'Nincs jogosultságod emailt küldeni.',
	'UCP_JV_INVITE_NULL'						=> 'Nincs rendelkezésedre álló meghívód.',
	'UCP_JV_INVITE_POINTS_AMOUNT'				=> 'Ajándék összege',
	'UCP_JV_INVITE_POINTS_AMOUNT_EXPLAIN'		=> 'Az általad meghívott és be is regisztrált tag után járó ajándék összege.',
	'UCP_JV_INVITE_POINTS_COST'					=> 'Meghívó ára',
	'UCP_JV_INVITE_POINTS_COST_EXPLAIN'			=> 'Vásárlás esetén ennyibe fog kerülni egy darab meghívó.',
	'UCP_JV_INVITE_POST_LIMIT'					=> 'Minimum %s hozzászólással kell rendelkezned ahhoz, hogy meghívót küldhess ki.',
	'UCP_JV_INVITE_REST'						=> 'Visszaállítás',
	'UCP_JV_INVITE_RESTORE'						=> 'Meghívók visszaállítása',
	'UCP_JV_INVITE_RESTORE_EXPLAIN'				=> 'Itt lehetőséged van a véletlen törölt meghívók visszaállítására.',
	'UCP_JV_INVITE_RESTORE_NO_CONFIRM'			=> 'A visszaállítás nem lett megerősítve.',
	'UCP_JV_INVITE_RESTORE_SUCCES'				=> [
		1										=> 'A meghívó visszaállítása sikeres.',
		2										=> 'A meghívók visszaállítása sikeres.',
	],
	'UCP_JV_INVITE_SEND_SUBMIT'					=> 'Meghívó elküldése',
	'UCP_JV_INVITE_TIME_END'					=> 'Lejárati idő',
	'UCP_JV_INVITE_TIME_END_EXPLAIN'			=> 'Azaz idő ami alatt a meghívott felhasználónak fel kell használnia a meghívóját.',
	'UCP_JV_INVITE_UT_REG'						=> 'Utolsó felhasználó',
	'UCP_JV_INVITE_UT_REG_EXPLAIN'				=> 'A meghívásodra érkező utolsó felhasználó.',
	'UCP_JV_INVITE_UT_REG_INFO'					=> '<strong>%s</strong> regisztrált %s',
	'UCP_JV_JV_INVITE_MEMBER_LIST_EXPLAIN'		=> [
		1										=> 'Megtekintheted az általad meghívott tagot.',
		2										=> 'Megtekintheted az általad meghívott tagokat.',
	],
]);
