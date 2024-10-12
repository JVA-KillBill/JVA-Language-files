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
	'POST_CONFIRM_EXPLAIN'						=> 'Typing the code prevents the automatic invitation of bots. You can find the code in the following picture. If you cannot read the code because of visual or other problems please contact the %sforum administrator%s.',

	'UCP_CAT_JV_INVITE'							=> 'JVA - phpBB Invite',
	'UCP_JV_INVITE'								=> 'Invitation',
	'UCP_JV_INVITED_MEMBERS_EXPLAIN'			=> [
		1										=> 'Member you have invited.',
		2										=> 'Members you have invited.',
	],
	'UCP_JV_INVITE_ADAT'						=> 'Invitation details',
	'UCP_JV_INVITE_BACK'						=> '<br><br>%sBack to the user control panel%s',
	'UCP_JV_INVITE_DAYF'						=> 'Invitations sent today',
	'UCP_JV_INVITE_DAYF_EXPLAIN'				=> 'The number of invitations that you sent today.',
	'UCP_JV_INVITE_DAY_OFF'						=> 'We are not sending out any more invitations today.',
	'UCP_JV_INVITE_DB_KULDES'					=> 'Daily invitation limit',
	'UCP_JV_INVITE_DB_KULDES_EXPLAIN'			=> 'Maximum number of invitations per day you can send out.',
	'UCP_JV_INVITE_DB_MAX'						=> '<span class="jv_invite_tred">Unlimited!</span>',
	'UCP_JV_INVITE_DB_PENDING'					=> 'Pending invitations',
	'UCP_JV_INVITE_DB_PENDING_EXPLAIN'			=> 'The number of users you invited who have not yet registered.',
	'UCP_JV_INVITE_DB_SZAM'						=> 'Number of invitations',
	'UCP_JV_INVITE_DB_SZAM_EXPLAIN'				=> 'Your remaining invitation limit',
	'UCP_JV_INVITE_DELETE'						=> 'Delete invitations',
	'UCP_JV_INVITE_DELETE_ERROR'				=> 'The invitation cannot be found or the time available for deletion has expired.',
	'UCP_JV_INVITE_DELETE_EXPLAIN'				=> 'If you sent any invitations to the wrong addresses, you may revoke those invitations here.<br><em>This is only possible to do within %s minutes of having sent an invitation.</em>',
	'UCP_JV_INVITE_DELETE_NO_CONFIRM'			=> 'The deletion has not been confirmed.',
	'UCP_JV_INVITE_DELETE_SUCCES'				=> [
		1										=> 'The invitation has successfully been deleted.',
		2										=> 'The invitations has successfully been deleted.',
	],
	'UCP_JV_INVITE_DUP'							=> 'The e-mail address has already been sent out an invitation. -> %s',
	'UCP_JV_INVITE_EDUP'						=> 'An e-mail address repeatedly entered. -> %s',
	'UCP_JV_INVITE_EMAILS_SENT'					=> 'The invitations has been successfully sent.',
	'UCP_JV_INVITE_EMAIL_KERES_EXPLAIN'			=> 'Reason for requested invitations.',
	'UCP_JV_INVITE_EMAIL_LANG'					=> 'E-mail language',
	'UCP_JV_INVITE_EMAIL_SELECT'				=> 'Invitation selection',
	'UCP_JV_INVITE_EMAIL_SELECT_EXPLAIN'		=> 'Choose who you want to delete from your recipients.',
	'UCP_JV_INVITE_EMAIL_SELECT_RESTORE_EXP'	=> 'Choose who you want to restore from your recipients.',
	'UCP_JV_INVITE_EMAIL_SENT'					=> 'The invitation has been successfully sent.',
	'UCP_JV_INVITE_FLOOD_LIMIT'					=> 'You can not send any more invitations. Please try again later.',
	'UCP_JV_INVITE_FRIEND'						=> 'Add a friend',
	'UCP_JV_INVITE_FRIEND_EXPLAIN'				=> 'The invited user will be added to your friends list.',
	'UCP_JV_INVITE_FUG_LIMIT'					=> 'Only %s invitations can be sent out today. However you listed %s recipients.',
	'UCP_JV_INVITE_KERES'						=> 'Invitation request',
	'UCP_JV_INVITE_KERES_BUYS_SUCCES'			=> 'You successfully purchased invitations.',
	'UCP_JV_INVITE_KERES_BUY_MIN'				=> 'Minimum (1) invitation to be purchased.',
	'UCP_JV_INVITE_KERES_BUY_NO'				=> 'You have not got enough %s to purchase this amount of invitations. Your balance is currently %s %s.',
	'UCP_JV_INVITE_KERES_BUY_SUBMIT'			=> 'Buy',
	'UCP_JV_INVITE_KERES_BUY_SUBT'				=> 'Invitations you want to buy',
	'UCP_JV_INVITE_KERES_BUY_SUBT_EXPLAIN'		=> 'Type the number of invitations you want to buy.<br>The price for one invitation is <strong>%s %s</strong>.<br>You take responsibility for your invited person  if the invited person causes inappropriate incidents.',
	'UCP_JV_INVITE_KERES_BUY_SUCCES'			=> 'Invitation purchase was successful.',
	'UCP_JV_INVITE_KERES_BUY_TITLE'				=> 'Buy Invitation.',
	'UCP_JV_INVITE_KERES_DISABLED'				=> 'The request is switched off!',
	'UCP_JV_INVITE_KERES_MAX'					=> 'Maximum number of requests: (%s) invite(s).',
	'UCP_JV_INVITE_KERES_MIN'					=> 'Minimum number of requested invitations: (1)',
	'UCP_JV_INVITE_KERES_NO_MES'				=> 'You did not write a message. Without an explanation you can not claim so many invitations.',
	'UCP_JV_INVITE_KERES_OFF'					=> 'Your invitation request is pending. When an administrator/moderator evaluates your request, you will receive a e-mail message.',
	'UCP_JV_INVITE_KERES_SOK_EXPLAIN'			=> 'When sending more than <strong>(%s)</strong> requests, an explanation to the admin is necessary. Please explain why you need so many invitations.<br>If we think your request is acceptable, we will give the invitations to you. If we encounter abuse, it can be a reason to ban your account.',
	'UCP_JV_INVITE_KERES_SUBMIT'				=> 'Send request',
	'UCP_JV_INVITE_KERES_SUCC'					=> 'The invitation request has been successfully sent.',
	'UCP_JV_INVITE_KERES_SUCCS'					=> 'The invitation requests have been successfully sent.',
	'UCP_JV_INVITE_KERES_TITLE'					=> 'Required invitations',
	'UCP_JV_INVITE_KERES_TITLE_EXPLAIN'			=> 'Enter the number of invitations you want to request. There is a maximum of <strong>(%s)</strong> invitation(s) available.<br>You take responsibility for your invited person  if the invited person causes inappropriate incidents.',
	'UCP_JV_INVITE_KULDES'						=> 'Send invitation',
	'UCP_JV_INVITE_KULDES_EMAIL_MAX'			=> 'Maximum %s e-mail addresses can be used. However you listed %s.',
	'UCP_JV_INVITE_KULDES_MAX'					=> '<span class="jv_invite_tred">Currently there is no limit.</span>',
	'UCP_JV_INVITE_MAX'							=> 'You have specified more recipients than you have invitations.',
	'UCP_JV_INVITE_MAX_ERROR'					=> 'Currently you have unlimited invitations.',
	'UCP_JV_INVITE_MAX_RECIPIENTS'				=> 'Type all addresses in a new line.<br>Maximum number of recipients',
	'UCP_JV_INVITE_MESSAGE_BODY_EXPLAIN'		=> 'Write a few lines telling them why they should join.',
	'UCP_JV_INVITE_MIN_MEM_DAYS_ERROR'			=> 'I’m sorry, but you cannot send invitations.<br>Reason: %s days are not passed since your registration.<br>Sending invitations will become available for you on %s.',
	'UCP_JV_INVITE_NOTIFICATION_TYPE_MANAGE'	=> 'Someone changed the number of your invitations.',
	'UCP_JV_INVITE_NOT_DELETED_INVITE'			=> 'There is no invitation to delete.',
	'UCP_JV_INVITE_NOT_FOUND'					=> 'The invitation can no longer be found.',
	'UCP_JV_INVITE_NOT_RESTORED_INVITE'			=> 'There is no invitation to restore.',
	'UCP_JV_INVITE_NO_EMAIL'					=> 'You have not provided an e-mail address.',
	'UCP_JV_INVITE_NO_INVITED_USER'				=> 'Nobody has been invited by you.',
	'UCP_JV_INVITE_NO_LOGIN'					=> 'He/she has not registered at this site.',
	'UCP_JV_INVITE_NO_PERM_EMAIL'				=> 'You are not authorized to send e-mail.',
	'UCP_JV_INVITE_NULL'						=> 'You don’t have any invitations.',
	'UCP_JV_INVITE_POINTS_AMOUNT'				=> 'Gift amount',
	'UCP_JV_INVITE_POINTS_AMOUNT_EXPLAIN'		=> 'Amount a member will receive when he has invited somebody and if this invited person becomes a registered member.',
	'UCP_JV_INVITE_POINTS_COST'					=> 'Invitation price',
	'UCP_JV_INVITE_POINTS_COST_EXPLAIN'			=> 'The cost of sending an invitation.',
	'UCP_JV_INVITE_POST_LIMIT'					=> 'In order to be able to send invitations, the following minimum number of posts is required: %s',
	'UCP_JV_INVITE_REST'						=> 'Restore',
	'UCP_JV_INVITE_RESTORE'						=> 'Restore invitations',
	'UCP_JV_INVITE_RESTORE_EXPLAIN'				=> 'Here you have the option to restore accidentally deleted invitations.',
	'UCP_JV_INVITE_RESTORE_NO_CONFIRM'			=> 'The restore has not been confirmed.',
	'UCP_JV_INVITE_RESTORE_SUCCES'				=> [
		1										=> 'The invitation has successfully been restored.',
		2										=> 'The invitations has successfully been restored.',
	],
	'UCP_JV_INVITE_SEND_SUBMIT'					=> 'Send invitation',
	'UCP_JV_INVITE_TIME_END'					=> 'Expiration time',
	'UCP_JV_INVITE_TIME_END_EXPLAIN'			=> 'The invited user will have to register during this time.',
	'UCP_JV_INVITE_UT_REG'						=> 'Last user',
	'UCP_JV_INVITE_UT_REG_EXPLAIN'				=> 'Last user from your invitations.',
	'UCP_JV_INVITE_UT_REG_INFO'					=> '<strong>%s</strong> registered %s',
	'UCP_JV_JV_INVITE_MEMBER_LIST_EXPLAIN'		=> [
		1										=> 'You can view the member you have invited.',
		2										=> 'You can view the members you have invited.',
	],
]);
