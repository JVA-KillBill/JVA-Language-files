<?php
/**
*
* @package JVA - Contact
* @version $Id: contact.php 1021 2022-06-27 14:04:28Z KillBill $
* @author 2011-2022 KillBill
* @copyright (c) 2014-2022 https://jv-arcade.com/ - https://jv-arcade.com/contact
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

$lang = array_merge($lang, array(
	'JV_CONTACT_TOO_MANY_TRIES'			=> 'You have exceeded the maximum number of attempts for this session. Please try again later.',
	'JV_CONTACT_PRIVACYPOLICY_EXPLAIN'	=> 'I accept that my name, email address, IP address, message subject and text are processed and stored by the controller of this site as specified in the %sPrivacy Policy%s.',
	'JV_CONTACT_PRIVACYPOLICY_CONFIRM'	=> 'The Privacy Policy has not been confirmed.',
));
