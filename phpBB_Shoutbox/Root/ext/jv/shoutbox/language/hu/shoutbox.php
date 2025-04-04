<?php
/**
*
* @package JVA - phpBB Shoutbox
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
	'JV_SHOUTBOX'							=> 'Üzenőfal',
	'JV_SHOUTBOX_AJAX_ERROR'				=> 'Hiba keletkezett a feldolgozás közben.',
	'JV_SHOUTBOX_AUTO_REFRESH_TIME_TITLE'	=> 'Automatikus újratöltés %d másodpercenként',
	'JV_SHOUTBOX_BBCODES'					=> 'BBKódok',
	'JV_SHOUTBOX_BBCODES_FAQ'				=> 'BBKód GyIK',
	'JV_SHOUTBOX_CLOSE'						=> 'Üzenőfal becsukása',
	'JV_SHOUTBOX_CONFIRM_DELETE_MSG'		=> 'Biztos vagy benne, hogy törölni szeretnéd ezt az üzenetet?',
	'JV_SHOUTBOX_CUSTOM_BBCODES'			=> 'Egyéni BBKódok',
	'JV_SHOUTBOX_DELETE_MESSAGE'			=> 'Üzenet törlése',
	'JV_SHOUTBOX_EDIT_MESSAGE'				=> 'Üzenet szerkesztése',
	'JV_SHOUTBOX_EMPTY_MSG_ERROR'			=> 'Nem küldhetsz üres üzenetet.',
	'JV_SHOUTBOX_EXPLAIN'					=> 'Felhasználók nyilvános beszélgetése.',
	'JV_SHOUTBOX_F_EDITED_POST'				=> 'A(z) %1$s fórumba, %3$s szerkesztett egy hozzászólást a(z) %2$s témában.',
	'JV_SHOUTBOX_F_NEW_POST'				=> 'A(z) %1$s fórumba, %3$s hozzászólt a(z) %2$s témához.',
	'JV_SHOUTBOX_F_NEW_POST_QUOTE'			=> 'A(z) %1$s fórumba, %3$s idézett egy hozzászólást a(z) %2$s témában.',
	'JV_SHOUTBOX_F_NEW_TOPIC'				=> 'A(z) %1$s fórumba, %3$s új témát nyitott: %2$s.',
	'JV_SHOUTBOX_IP_BUTTON_TITLE'			=> 'Felhasználó IP „%s” címének adatai',
	'JV_SHOUTBOX_MSG_EDITED_TIMES'			=> [
		1									=> 'Szerkesztve %d alkalommal.',
		2									=> 'Szerkesztve %d alkalommal.',
	],
	'JV_SHOUTBOX_MSG_FLOOD_ERROR'			=> 'Most nem küldhetsz újabb üzenetet, mivel az előzőt nemrég küldted el.',
	'JV_SHOUTBOX_MSG_MAX_CHARS_ERROR'		=> 'Az üzenet maximum %d karaktert tartalmazhat.',
	'JV_SHOUTBOX_MSG_MIN_CHARS_ERROR'		=> [
		1									=> 'Az üzenetnek minimum %d karaktert kell tartalmaznia.',
		2									=> 'Az üzenetnek minimum %d karaktert kell tartalmaznia.',
	],
	'JV_SHOUTBOX_MSG_NO_USER_IP'			=> 'Az üzenet nem létezik, vagy ehhez az üzenethez nincs IP hozzárendelve.',
	'JV_SHOUTBOX_NEW_MSG_TITLE'				=> [
		1									=> '(%d) új üzenet érkezett!',
		2									=> '(%d) új üzenet érkezett!',
	],
	'JV_SHOUTBOX_NO_JS'						=> 'Az üzenőfal használatához, engedélyezned kell a javascript futtatását!',
	'JV_SHOUTBOX_NO_MSG_ID'					=> 'Az üzenet nem található.',
	'JV_SHOUTBOX_NO_PERMISSION_DELETE_MSG'	=> 'Nincs jogosultságod az üzenetet törölni.',
	'JV_SHOUTBOX_NO_PERMISSION_EDIT_MSG'	=> 'Nincs jogosultságod az üzenet szerkesztéséhez.',
	'JV_SHOUTBOX_NO_PERMISSION_SEND_MSG'	=> 'Nincs jogosultságod üzenetet küldeni.',
	'JV_SHOUTBOX_OPEN'						=> 'Üzenőfal kinyitása',
	'JV_SHOUTBOX_PM_BUTTON_TITLE'			=> 'Privát üzenet küldése',
	'JV_SHOUTBOX_QUOTE_BUTTON_TITLE'		=> 'Üzenet idézése',
	'JV_SHOUTBOX_RE_USER'					=> '@%s',
	'JV_SHOUTBOX_RE_USER_TITLE'				=> 'Válasz küldése a felhasználónak',
	'JV_SHOUTBOX_SOUND_OFF_TITLE'			=> 'Hang kikapcsolása',
	'JV_SHOUTBOX_SOUND_ON_TITLE'			=> 'Hang bekapcsolása',
	'JV_SHOUTBOX_SUCCESS_DELETE_MSG'		=> 'Az üzenet sikeresen törlésre került.',
	'JV_SHOUTBOX_VIEWING'					=> 'Üzenőfal megtekintése',
]);
