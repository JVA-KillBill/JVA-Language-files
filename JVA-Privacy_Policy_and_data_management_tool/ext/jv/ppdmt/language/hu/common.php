<?php
/**
*
* @package JVA - Privacy Policy and data management tool
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
	'ACL_U_JVPPDMT_MY_ACC_POST_DELETE'	=> 'Regisztráció törlése esetén törölheti a hozzászólásait',

	'G_JVPPDMT_REGISTERED_VIEWER'		=> 'Regisztrált nézők',

	'JVPPDMT_COOKIE_INFO'				=> 'Kedves felhasználó, mivel elutasítottad a cookie-k mentését az eszközödre, így számodra számos funkció nem elérhető.<br>Ha bármikor módosítani szeretnéd az adatvédelmi adatok tárolására vonatkozó beállításaidat, akkor kattints %sIDE%s.',
	'JVPPDMT_INFO_NO_USE_COOKIE_GUEST'	=> 'Kedves vendégünk, szeretnénk tájékoztatni arról, hogy a cookie-kat nem tároljuk a vendégek számára. Ha több információt szeretnél, akkor olvasd el az %sAdatvédelmi irányelvet%s.',
	'JVPPDMT_PHPBB_ERROR'				=> 'A kiterjesztés nem kapcsolható be, mert a <strong>„phpBB”</strong> verziója kisebb mint <strong>„%s”</strong> verzió!',
	'JVPPDMT_SOMEONE'					=> 'Valaki',
	'JVPPDMT_VIEWER_GROUP_INFO'			=> 'Kedves felhasználó, mivel elutasítottad a további személyes adatok mentését, így bekerültél a néző csoportba. A néző csoport csak az oldalak megtekintését teszi lehetővé és nem küldhet be semmilyen űrlapot, mivel az nem lehetséges az adatok mentése nélkül.<br>Ha bármikor módosítani szeretnéd az adatvédelmi adatok tárolására vonatkozó beállításaidat, akkor kattints %sIDE%s.',

	'LOG_JVPPDMT_MY_ACC_DELETE'			=> '<strong>Saját regisztráció törlése</strong><br>» %s',
	'LOG_JVPPDMT_MY_ACC_POST_DELETE'	=> '<strong>Saját regisztráció törlése, hozzászólásokkal együtt.</strong><br>» %s',

	'UCP_JVPPDMT_PRIVACY_DATA'			=> 'Adatvédelmi adatok',
	'UCP_JVPPDMT_SETTINGS'				=> 'Beállítások',
	'UCP_PROFILE_JVPPDMT_MY_ACC_DELETE'	=> 'Regisztráció törlése',
));
