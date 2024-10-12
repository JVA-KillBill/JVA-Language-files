<?php
/**
*
* @package JVA - Points System
* @version $Id: points.php 953 2021-05-02 05:18:36Z KillBill $
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

$lang = array_merge($lang, array(
	'JV_POINTS_ADD_USER_EXPLAIN'			=> 'Enter the name of the user whose balance you want to change.',
	'JV_POINTS_ALL_TRANSFER'				=> 'All transfer',
	'JV_POINTS_AMOUNT'						=> 'Amount',
	'JV_POINTS_AMOUNT_USER_EXPLAIN'			=> 'Enter the amount to which you want to change the user’s balance.',
	'JV_POINTS_ATTACH_DOWNLOAD_NO_POINTS'	=> 'You do not have enough “%s” to download this file.',
	'JV_POINTS_BALANCE'						=> 'Balance',
	'JV_POINTS_CHANGE'						=> 'Change balance',
	'JV_POINTS_CHANGE_TITLE'				=> 'Change user balance',
	'JV_POINTS_CONTROL_PANEL'				=> 'Points system control panel',
	'JV_POINTS_COST'						=> 'Cost',
	'JV_POINTS_COSTS'						=> 'Costs',
	'JV_POINTS_DISABLED'					=> 'The points system is currently disabled.',
	'JV_POINTS_ERROR_MINUS_VALUE'			=> 'The specified amount must not be a minus value.',
	'JV_POINTS_ERROR_TRANSFER_BALANCE'		=> 'Your balance does not cover the amount you want to transfer.',
	'JV_POINTS_ERROR_TRANSFER_BALANCE_COST'	=> 'Your balance does not cover the amount you intend to transfer and its cost.',
	'JV_POINTS_ERROR_ZERO_VALUE'			=> 'The amount cannot be zero.',
	'JV_POINTS_FAQ'							=> 'FAQ',
	'JV_POINTS_FAQ_VIEWING'					=> 'Viewing points system guide',
	'JV_POINTS_GUIDE'						=> 'Points system guide',
	'JV_POINTS_INFO'						=> 'Information',
	'JV_POINTS_INFO_EXPLAIN'				=> 'Here you can read the current settings, why reward are and what’s costs. Note that the administrator can change these settings at any time.',
	'JV_POINTS_INFO_TITLE'					=> 'General information',
	'JV_POINTS_INFO_VIEWING'				=> 'Viewing points system general information',
	'JV_POINTS_LOGIN_EXPLAIN'				=> 'You must be logged in before you can view the points system control panel.',
	'JV_POINTS_MAIN'						=> 'Overview',
	'JV_POINTS_MAIN_EXPLAIN'				=> 'Hello %s!<br><br>Current balance: %s.',
	'JV_POINTS_MAIN_TITLE'					=> 'Those with the highest balance',
	'JV_POINTS_MODIFY'						=> 'Modify',
	'JV_POINTS_MORE_INFO_HERE'				=> 'More information %sHERE%s.',
	'JV_POINTS_NEW_ATTACHS_COST_EXPLAIN'	=> 'The cost of the download applies to the following file extensions: “%s”.',
	'JV_POINTS_NEW_ATTACH_COST'				=> 'Attachments download cost',
	'JV_POINTS_NEW_ATTACH_COST_EXPLAIN'		=> 'The cost of the download applies to the following file extension: “%s”.',
	'JV_POINTS_NEW_POST_COST'				=> 'Post writing cost',
	'JV_POINTS_NEW_POST_REWARD'				=> 'New post reward',
	'JV_POINTS_NEW_TOPIC_REWARD'			=> 'New topic reward',
	'JV_POINTS_NOTIFICATION_CHANGE_ADD'		=> 'User %s added balance to your account.<br>Added amount: %s.',
	'JV_POINTS_NOTIFICATION_CHANGE_SET'		=> 'User %s changed your balance.<br>New balance: %s.',
	'JV_POINTS_NOTIFICATION_CHANGE_SUB'		=> 'User %s subtracted balance from your account.<br>Subtracted amount: %s.',
	'JV_POINTS_NOTIFICATION_SET'			=> 'User %s changed your balance.<br>Old balance: %s<br>New balance: %s.',
	'JV_POINTS_NOTIFICATION_TRANSFER'		=> 'The user %s has donated %s to you.',
	'JV_POINTS_NO_TRANSFER_LOG'				=> 'No transfer has yet been made',
	'JV_POINTS_NO_USER'						=> 'Currently each user’s balance is zero.',
	'JV_POINTS_RECEIVED'					=> 'Received',
	'JV_POINTS_REG_START_BALANCE'			=> 'New registered member starting balance',
	'JV_POINTS_REWARDS'						=> 'Rewards',
	'JV_POINTS_SENT'						=> 'Sent',
	'JV_POINTS_SORT_AMOUNT'					=> 'Amount of donation',
	'JV_POINTS_SORT_DATE'					=> 'Sending date',
	'JV_POINTS_SORT_FROM'					=> 'From',
	'JV_POINTS_SORT_TO'						=> 'To',
	'JV_POINTS_SORT_TYPE'					=> 'Send type',
	'JV_POINTS_TRANSFER'					=> 'Transfer',
	'JV_POINTS_TRANSFER_AMOUNT'				=> 'Amount to be transferred',
	'JV_POINTS_TRANSFER_AMOUNT_EXPLAIN'		=> 'Enter the amount you want to transfer.',
	'JV_POINTS_TRANSFER_COST'				=> 'Transfer cost',
	'JV_POINTS_TRANSFER_COST_EXPLAIN'		=> 'The transfer cost is %1$s percent. If you do a transfer, the amount you wish to transfer and %1$s percent of it will be deducted from your balance.',
	'JV_POINTS_TRANSFER_LOG'				=> 'Transfer log',
	'JV_POINTS_TRANSFER_TITLE'				=> 'Transferring a certain amount to another user',
	'JV_POINTS_TRANSFER_TITLE_EXPLAIN'		=> 'Enter the name of the user you want to transfer to.',
	'JV_POINTS_TRANSFER_YOURSELF_ERROR'		=> 'You cannot do a transfer for yourself.',
	'JV_POINTS_USER_CHANGED_SUCCESS'		=> 'The balance of user “%s” was changed successfully.',
	'JV_POINTS_USER_TRANSFER_SUCCESS'		=> 'The transfer to the user “%s” was successfully completed.',
	'JV_POINTS_VIEWING'						=> 'Viewing points system control panel',
	'JV_POINTS_WRITE_POST_NO_POINTS'		=> 'You do not have enough “%s” to write a new post.',

	'JVA_CORE_EXT_NOT_FOUND'				=> 'The extension cannot be enabled because the “JVA - Core” extension cannot be found!',
));
