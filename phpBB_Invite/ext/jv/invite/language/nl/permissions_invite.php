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
	'ACL_A_JV_INVITE_CONFIG'		=> 'Kan instellingen wijzigen',
	'ACL_A_JV_INVITE_DELETE'		=> 'Kan uitnodigingen verwijderen',
	'ACL_A_JV_INVITE_PEND'			=> 'Kan lopende uitnodigingen beheren',
	'ACL_A_JV_INVITE_REQUEST'		=> 'Kan uitnodigingsverzoeken afhandelen',
	'ACL_A_JV_INVITE_SEND'			=> 'Kan gebruikers/groepen beheren',
	'ACL_A_JV_INVITE_SYNC'			=> 'Kan gegevens synchroniseren',
	'ACL_A_JV_INVITE_USERS_LIST'	=> 'Kan de lijst met uitgenodigde gebruikers zien',
	'ACL_CAT_JV_INVITE'				=> 'Uitnodiging',
	'ACL_M_JV_INVITE_REQUEST_AP'	=> 'Kan uitnodigingsverzoeken afhandelen ',
	'ACL_U_JV_INVITE_DELETE'		=> 'Kan een reeds verzonden uitnodiging verwijderen<br><em>Gebruiker kan een door hem verzonden uitnodiging verwijderen.</em>',
	'ACL_U_JV_INVITE_REQUEST'		=> 'Kan een uitnodiging aanvragen',
	'ACL_U_JV_INVITE_RESTORE'		=> 'Kan verwijderde uitnodigingen herstellen',
	'ACL_U_JV_INVITE_UNLIMITED'		=> 'Heeft onbeperkte uitnodigingen',
	'ACL_U_JV_INVITE_USER'			=> 'Kan een nieuw lid op het forum uitnodigen',
]);
