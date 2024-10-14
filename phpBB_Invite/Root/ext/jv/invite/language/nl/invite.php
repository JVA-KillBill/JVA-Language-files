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
	'JVA_CORE_EXT_NOT_FOUND'			=> 'De extensie kan niet worden ingeschakeld omdat de “JVA - Core” extensie niet kan worden gevonden!',
	'JV_INVITE'							=> 'Uitnodiging',
	'JV_INVITED_BY_USERS'				=> [
		1								=> 'Lid uitgenodigd door %s',
		2								=> 'Leden uitgenodigd door %s',
	],
	'JV_INVITED_MEMBERLIST_VIEWING'		=> 'Bekijk uitgenodigde leden',
	'JV_INVITED_MEMBERS'				=> [
		1								=> 'Uitgenodigd lid',
		2								=> 'Uitgenodigde leden',
	],
	'JV_INVITE_DELETE_CONFIRM'			=> 'Als je je uitnodiging wil verwijderen, klik dan %sHERE%s.',
	'JV_INVITE_DELETE_SUCCESS'			=> [
		1								=> 'Je uitnodiging is succesvol verwijderd.',
		2								=> 'Je uitnodigingen zijn succesvol verwijderd.',
	],
	'JV_INVITE_DISABLED'				=> 'Het uitnodigingssysteem is momenteel uitgeschakeld!',
	'JV_INVITE_EMAIL_NOT_MODIFY'		=> 'Kan niet worden gewijzigd!',
	'JV_INVITE_EXP'						=> 'Nodig een vriend uit op ons forum.',
	'JV_INVITE_INVITED'					=> 'Uitgenodigd door',
	'JV_INVITE_KEY_ERROR'				=> '<div class="jv_invite_error">Je uitnodiging is ongeldig!</div>',
	'JV_INVITE_MEMBER'					=> [
		1								=> '%s lid',
		2								=> '%s leden'
	],
	'JV_INVITE_NOTIFICATION_MANAGE_ADD'	=> [
		1								=> 'Gebruiker %s heeft je %s uitnodiging toegewezen.',
		2								=> 'Gebruiker %s heeft je %s uitnodigingen toegewezen.'
	],
	'JV_INVITE_NOTIFICATION_MANAGE_DEL'	=> 'Gebruiker %s heeft al uw uitnodigingen verwijderd.',
	'JV_INVITE_NOTIFICATION_MANAGE_SET'	=> 'Gebruiker %s heeft het aantal uitnodigingen gewijzigd.<br> Nieuwe balans: %s.',
	'JV_INVITE_NO_SELECTED_USERS'		=> 'De geselecteerde gebruiker heeft nog niemand uitgenodigd.',
	'JV_INVITE_NO_USERS'				=> 'Geen uitgenodigde gebruikers.',
	'JV_INVITE_PETITION'				=> [
		1								=> 'Er is een uitnodigingsverzoek ontvangen. Aantal lopende verzoeken: <b>%s</b> uitnodiging.',
		2								=> 'Uitnodigingsverzoeken ontvangen. Aantal lopende verzoeken: <b>%s</b> uitnodigingen.',
	],
	'JV_INVITE_REGISTRATION'			=> '<div class="jv_invite_error">Momenteel kan je je alleen aanmelden op uitnodiging!</div>',
	'JV_INVITE_REGISTRATION_DISABLE'	=> 'Registratie met een uitnodiging is tijdelijk uitgeschakeld, kom later terug.',
]);
