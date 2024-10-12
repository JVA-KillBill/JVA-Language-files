<?php
/**
*
* @package JVA - phpBB Invite
* @version $Id$
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

//These are used through out the invite

// Define categories and permission types
$lang = array_merge($lang, [
	'ACL_A_JV_INVITE_CONFIG'		=> 'Módosíthatja a beállításokat',
	'ACL_A_JV_INVITE_DELETE'		=> 'Törölheti a felhasználók meghívóját',
	'ACL_A_JV_INVITE_PEND'			=> 'Kezelheti a függőben lévő meghívókat',
	'ACL_A_JV_INVITE_REQUEST'		=> 'Kezelheti a meghívó kérelmeket',
	'ACL_A_JV_INVITE_SEND'			=> 'Kezelheti a felhasználók/csoportokat',
	'ACL_A_JV_INVITE_SYNC'			=> 'Szinkronizálhatja az adatokat',
	'ACL_A_JV_INVITE_USERS_LIST'	=> 'Láthatja a meghívott személyek listáját',
	'ACL_CAT_JV_INVITE'				=> 'Meghívó',
	'ACL_M_JV_INVITE_REQUEST_AP'	=> 'Kezelheti a meghívó kérelmeket',
	'ACL_U_JV_INVITE_DELETE'		=> 'Törölheti a már kiküldött meghívót<br><em>Ha rossz címre küldi netán a meghívót akkor esélye van azt törölni.</em>',
	'ACL_U_JV_INVITE_REQUEST'		=> 'Igényelhet meghívót',
	'ACL_U_JV_INVITE_RESTORE'		=> 'Visszaállíthatja a törölt meghívókat',
	'ACL_U_JV_INVITE_UNLIMITED'		=> 'Korlátlan meghívóval rendelkezzen',
	'ACL_U_JV_INVITE_USER'			=> 'Meghívhat új tagot az oldalra',
]);
