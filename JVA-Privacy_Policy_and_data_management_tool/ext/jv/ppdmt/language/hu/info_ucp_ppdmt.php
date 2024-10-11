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
	'JVPPDMT_COOKIE_SETTING'				=> 'Cookie-k fogadása',
	'JVPPDMT_COOKIE_SETTING_EXPLAIN'		=> 'Itt beállíthatod, hogy a weboldal menthet-e cookie-kat az eszközödre vagy nem. Bővebb információért olvasd el az %sAdatvédelmi Irányelvet%s.<br><em>Vedd figyelembe, hogy ha nem engedélyezed a cookie-kat , akkor számos funkció nem fog működni.</em>',
	'JVPPDMT_CREATE_TIME'					=> 'Létrehozás ideje',
	'JVPPDMT_DOWNLOAD'						=> 'Letöltés',
	'JVPPDMT_FORUM_POSTS'					=> 'Fórum hozzászólások',
	'JVPPDMT_ID'							=> 'Azonosítószám',
	'JVPPDMT_MY_ACC_DELETE_CONFIRM'			=> 'Regisztráció törlésének megerősítése',
	'JVPPDMT_MY_ACC_DELETE_CONFIRM_ERROR'	=> 'A regisztráció törlése nem lett megerősítve!',
	'JVPPDMT_MY_ACC_DELETE_EXPLAIN'			=> 'Saját regisztráció törlése.<br><em>Vedd figyelembe, ha megteszed akkor nincs mód az adataid visszaállítására a későbbiekben!</em>',
	'JVPPDMT_MY_ACC_DELETE_FOUNDER_ERROR'	=> 'Alapító felhasználó nem törölheti a saját regisztrációját! Ezt a műveletet csak egy másik alapító felhasználó végezheti el.',
	'JVPPDMT_MY_ACC_DELETE_SUCCESS'			=> 'A regisztráció törlése sikeres.',
	'JVPPDMT_MY_ACC_POST_ANONYM_IP'			=> 'Az összes hozzászólásom IP címének eltávolítása',
	'JVPPDMT_MY_ACC_POST_DELETE'			=> 'Hozzászólásaim törlése',
	'JVPPDMT_MY_ACC_POST_DELETE_EXPLAIN'	=> 'A fórumból törlésre kerülnek a hozzászólásaid.',
	'JVPPDMT_NOT_FOUND_PM'					=> 'Nincs privát üzeneted.',
	'JVPPDMT_NOT_FOUND_POST'				=> 'Nincs hozzászólásod.',
	'JVPPDMT_PD_ACCEPT'						=> 'Jóváhagyom a személyes adataim tárolását és használatát',
	'JVPPDMT_PD_PARTIAL_ACCEPT'				=> 'Csak a már tárolt személyes adatok tárolását és használatát hagyom jóvá',
	'JVPPDMT_PD_REJECT'						=> 'Elutasítom a személyes adataim tárolását és használatát',
	'JVPPDMT_PD_SETTING'					=> 'Személyes adatok tárolása',
	'JVPPDMT_PD_SETTING_EXPLAIN'			=> 'Itt beállíthatod, hogy weboldalunk miként járjon el a személyes adataiddal. Természetesen a döntésedet a későbbiekben is bármikor megváltoztathatod.',
	'JVPPDMT_PRIVACY_POLICY_ACCEPT_DATE'	=> 'Utolsó adatvédelmi irányelv elfogadásának időpontja',
	'JVPPDMT_REGISTRATION_DATE'				=> 'Regisztráció ideje',
	'JVPPDMT_REGISTRATION_IP'				=> 'Regisztrációs IP cím',
	'JVPPDMT_REL_IP'						=> 'Hozzátartozó IP cím',
	'JVPPDMT_SELECT_DOWNLOAD_FORMAT'		=> 'Válassz letöltési formátumot',
	'JVPPDMT_SENT_PRIVATE_MESSAGES'			=> 'Elküldött privát üzenetek',
	'JVPPDMT_TERM_OF_USE_ACCEPT_DATE'		=> 'Utolsó használati feltételek elfogadásának időpontja',
	'JVPPDMT_YOUR_PM_NUMBER'				=> 'Privát üzeneteim száma',
	'JVPPDMT_YOUR_POST_NUMBER'				=> 'Hozzászólásaim száma',
));
