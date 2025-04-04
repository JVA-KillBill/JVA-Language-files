<?php
/**
*
* @package JVA - Privacy Policy and data management tool
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
	'ACL_U_JVPPDMT_MY_ACC_POST_DELETE'	=> 'Als je je registratie verwijdert, kun je je berichten verwijderen',

	'G_JVPPDMT_REGISTERED_VIEWER'		=> 'Geregistreerde kijkers',

	'JVPPDMT_COOKIE_INFO'				=> 'Beste lid, omdat je niet toestaat dat cookies op je apparaat worden opgeslaan zijn veel functies niet beschikbaar voor je.<br>Als je op enig moment je instellingen voor het opslaan van privacygegevens wilt wijzigen, klik je %sHIER%s.',
	'JVPPDMT_INFO_NO_USE_COOKIE_GUEST'	=> 'Geachte gast, we willen je laten weten dat we geen cookies opslaan voor gast gebruikers. Als je meer informatie wilt, lees dan ons %sPrivacybeleid%s.',
	'JVPPDMT_PHPBB_ERROR'				=> 'De extensie kan niet worden geactiveerd omdat de versie van <strong>“phpBB”</strong> lager is dan versie <strong>“%s”</strong>!',
	'JVPPDMT_SOMEONE'					=> 'Iemand',
	'JVPPDMT_VIEWER_GROUP_INFO'			=> 'Beste lid, je hebt met succes het opslaan van verdere persoonlijke gegevens afgewezen en je zit nu in de kijker groep. De kijker groep kan alleen pagina’s bekijken, maar geen formulieren indienen, omdat dit niet mogelijk is zonder gegevens op te slaan.<br>Klik %sHIER%s als je op enig moment je instellingen voor het opslaan van privacygegevens wilt wijzigen.',

	'LOG_JVPPDMT_MY_ACC_DELETE'			=> '<strong>Verwijder mijn registratie</strong><br>» %s',
	'LOG_JVPPDMT_MY_ACC_POST_DELETE'	=> '<strong>Verwijder mijn registratie samen met de berichten.</strong><br>» %s',

	'UCP_JVPPDMT_PRIVACY_DATA'			=> 'Privacy gegevens',
	'UCP_JVPPDMT_SETTINGS'				=> 'Instellingen',
	'UCP_PROFILE_JVPPDMT_MY_ACC_DELETE'	=> 'Verwijder mijn registratie',
]);
