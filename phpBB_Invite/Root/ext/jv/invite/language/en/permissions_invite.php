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

// Define categories and permission types
$lang = array_merge($lang, [
	'ACL_A_JV_INVITE_CONFIG'		=> 'Can modify invitation settings',
	'ACL_A_JV_INVITE_DELETE'		=> 'Can delete invitations',
	'ACL_A_JV_INVITE_PEND'			=> 'Can manage pending invitations',
	'ACL_A_JV_INVITE_REQUEST'		=> 'Can manage requested invitations',
	'ACL_A_JV_INVITE_SEND'			=> 'Can manage users/groups',
	'ACL_A_JV_INVITE_SYNC'			=> 'Can synchronize data',
	'ACL_A_JV_INVITE_USERS_LIST'	=> 'Can see a list of invited members',
	'ACL_CAT_JV_INVITE'				=> 'Invite',
	'ACL_M_JV_INVITE_REQUEST_AP'	=> 'Can manage requested invitations',
	'ACL_U_JV_INVITE_DELETE'		=> 'Can revoke invitation<br><em>User can cancel an invitation he has sent.</em>',
	'ACL_U_JV_INVITE_REQUEST'		=> 'Can request invitation',
	'ACL_U_JV_INVITE_RESTORE'		=> 'Can restore deleted invitations',
	'ACL_U_JV_INVITE_UNLIMITED'		=> 'Can have unlimited invitations',
	'ACL_U_JV_INVITE_USER'			=> 'Can invite new members to the site',
]);
