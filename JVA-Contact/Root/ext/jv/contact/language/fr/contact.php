<?php
/**
*
* @package JVA - Contact
* @version $Id: contact.php 667 2019-12-27 10:44:32Z killbill $
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
	'JV_CONTACT_PRIVACYPOLICY_CONFIRM'	=> 'La politique de confidentialité n’a pas été confirmée.',
	'JV_CONTACT_PRIVACYPOLICY_EXPLAIN'	=> 'J’accepte que mon nom, mon adresse e-mail, mon adresse IP, l’objet du message et le texte soient traités et stockés par le contrôleur de ce site Web comme spécifié dans la %sPolitique de confidentialité%s.',
	'JV_CONTACT_TOO_MANY_TRIES'			=> 'Vous avez dépassé le nombre maximal de tentatives pour cette session. Veuillez réessayer plus tard.',
]);
