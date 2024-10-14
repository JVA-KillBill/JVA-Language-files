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
	'JVA_CORE_EXT_NOT_FOUND'			=> 'A kiterjesztés nem kapcsolható be mert nem található a „JVA - Core” kiterjesztés!',
	'JV_INVITE'							=> 'Meghívó',
	'JV_INVITED_BY_USERS'				=> [
		1								=> '%s által meghívott tag',
		2								=> '%s által meghívott tagok',
	],
	'JV_INVITED_MEMBERLIST_VIEWING'		=> 'Meghívott tagok megtekintése',
	'JV_INVITED_MEMBERS'				=> [
		1								=> 'Meghívott tag',
		2								=> 'Meghívott tagok',
	],
	'JV_INVITE_DELETE_CONFIRM'			=> 'Ha szeretnéd törölni a meghívód akkor kattints %sIDE%s.',
	'JV_INVITE_DELETE_SUCCESS'			=> [
		1								=> 'A meghívód törlése sikeres.',
		2								=> 'A meghívóid törlése sikeres.',
	],
	'JV_INVITE_DISABLED'				=> 'A meghívó rendszer jelenleg ki van kapcsolva!',
	'JV_INVITE_EMAIL_NOT_MODIFY'		=> 'Nem módosítható!',
	'JV_INVITE_EXP'						=> 'Ismerős meghívása a weboldalra',
	'JV_INVITE_INVITED'					=> 'Meghívta',
	'JV_INVITE_KEY_ERROR'				=> '<div class="jv_invite_error">A meghívód érvénytelen!</div>',
	'JV_INVITE_MEMBER'					=> [
		1								=> 'tag %s',
		2								=> 'tagok %s',
	],
	'JV_INVITE_NOTIFICATION_MANAGE_ADD'	=> [
		1								=> '%s felhasználó kiutalt számodra %s meghívót.',
		2								=> '%s felhasználó kiutalt számodra %s meghívót.',
	],
	'JV_INVITE_NOTIFICATION_MANAGE_DEL'	=> '%s felhasználó törölte az összes meghívód.',
	'JV_INVITE_NOTIFICATION_MANAGE_SET'	=> '%s felhasználó módosította a meghívóid számát.<br>Új egyenleg: %s.',
	'JV_INVITE_NO_SELECTED_USERS'		=> 'A kiválasztott felhasználó még nem hívott meg senkit.',
	'JV_INVITE_NO_USERS'				=> 'Nincs meghívott felhasználó.',
	'JV_INVITE_PETITION'				=> [
		1								=> 'Meghívó iránti kérelem érkezett. Jelenlegi kérések száma: <b>%s</b> darab.',
		2								=> 'Meghívó iránti kérelmek érkeztek. Jelenlegi kérések száma: <b>%s</b> darab.',
	],
	'JV_INVITE_REGISTRATION'			=> '<div class="jv_invite_error">Jelenleg csak meghívóval lehet regisztrálni!</div>',
	'JV_INVITE_REGISTRATION_DISABLE'	=> 'A regisztrálás meghívóval átmenetileg kikapcsolva, kérlek nézz vissza később.',
]);
