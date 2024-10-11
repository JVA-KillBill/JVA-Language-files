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
$lang = array_merge($lang, [
	'JVA_CORE_EXT_NOT_FOUND'			=> 'The extension cannot be enabled because the “JVA - Core” extension cannot be found!',
	'JV_INVITE'							=> 'Invite',
	'JV_INVITED_BY_USERS'				=> [
		1								=> 'Member invited by %s',
		2								=> 'Members invited by %s',
	],
	'JV_INVITED_MEMBERLIST_VIEWING'		=> 'Viewing invited members',
	'JV_INVITED_MEMBERS'				=> [
		1								=> 'Invited member',
		2								=> 'Invited members',
	],
	'JV_INVITE_DELETE_CONFIRM'			=> 'If you want to delete the invitation, click %sHERE%s.',
	'JV_INVITE_DELETE_SUCCESS'			=> [
		1								=> 'Your invitation was successfully deleted.',
		2								=> 'Your invitations were successfully deleted.',
	],
	'JV_INVITE_DISABLED'				=> 'The invitation system is currently disabled!',
	'JV_INVITE_EMAIL_NOT_MODIFY'		=> 'Cannot be modified!',
	'JV_INVITE_EXP'						=> 'Invite a friend to our forum.',
	'JV_INVITE_INVITED'					=> 'Invited by',
	'JV_INVITE_KEY_ERROR'				=> '<div class="jv_invite_error">The invitation is not valid!</div>',
	'JV_INVITE_MEMBER'					=> [
		1								=> '%s member',
		2								=> '%s members',
	],
	'JV_INVITE_NOTIFICATION_MANAGE_ADD'	=> [
		1								=> 'User %s has allocated you %s invitation.',
		2								=> 'User %s has allocated you %s invitations.',
	],
	'JV_INVITE_NOTIFICATION_MANAGE_DEL'	=> 'User %s has deleted all your invitations.',
	'JV_INVITE_NOTIFICATION_MANAGE_SET'	=> 'User %s has changed the number of your invitations.<br> New balance: %s.',
	'JV_INVITE_NO_SELECTED_USERS'		=> 'The selected user has not invited anyone yet.',
	'JV_INVITE_NO_USERS'				=> 'No invited members.',
	'JV_INVITE_PETITION'				=> [
		1								=> 'Invitation request received! Current number of requests: <b>%s</b> invite.',
		2								=> 'Invitation request received! Current number of requests: <b>%s</b> invites.',
	],
	'JV_INVITE_REGISTRATION'			=> '<div class="jv_invite_error">Registration is currently by invitation only!</div>',
	'JV_INVITE_REGISTRATION_DISABLE'	=> 'The registration invitation is temporarily disabled, please check back later.',
]);
