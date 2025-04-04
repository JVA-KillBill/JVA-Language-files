<?php
/**
*
* @package JVA - Privacy Policy and data management tool
* @version $Id$
* @author 2011-2025 KillBill
* @copyright (c) 2014-2025 https://jv-arcade.com/ - https://jv-arcade.com/contact
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

$lang = array_merge($lang, [
	'ACL_U_JVPPDMT_MY_ACC_POST_DELETE'	=> 'Can delete posts when deleting registration',

	'G_JVPPDMT_REGISTERED_VIEWER'		=> 'Registered viewers',

	'JVPPDMT_COOKIE_INFO'				=> 'Dear member, because you did not allow cookies to be saved to your device, so many features are not available for you.<br>If at any time you would like to modify your settings for storing privacy data, please click %sHERE%s.',
	'JVPPDMT_INFO_NO_USE_COOKIE_GUEST'	=> 'Dear guest, we want to inform you, that we don’t save cookies for guest users. If you’d like more information, read our %sPrivacy Policy%s.',
	'JVPPDMT_PHPBB_ERROR'				=> 'The extension can not be activated because the version of <strong>“phpBB”</strong> is below version <strong>“%s”</strong>!',
	'JVPPDMT_SOMEONE'					=> 'Someone',
	'JVPPDMT_VIEWER_GROUP_INFO'			=> 'Dear member, you have successfully rejected the saving of further personal data, and you are now in the viewer group. The viewer group can only view pages, but not submit any forms, because this is not possible without saving it.<br>If at any time you would like to modify your settings for storing privacy data, please click %sHERE%s.',

	'LOG_JVPPDMT_MY_ACC_DELETE'			=> '<strong>Delete my registration</strong><br>» %s',
	'LOG_JVPPDMT_MY_ACC_POST_DELETE'	=> '<strong>Delete my registration along with the posts.</strong><br>» %s',

	'UCP_JVPPDMT_PRIVACY_DATA'			=> 'Privacy data',
	'UCP_JVPPDMT_SETTINGS'				=> 'Settings',
	'UCP_PROFILE_JVPPDMT_MY_ACC_DELETE'	=> 'Delete my registration',
]);
