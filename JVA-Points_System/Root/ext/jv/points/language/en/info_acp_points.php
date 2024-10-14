<?php
/**
*
* @package JVA - Points System
* @version $Id: info_acp_points.php 953 2021-05-02 05:18:36Z KillBill $
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
	'JV_ACP_CAT_POINTS'										=> 'Points system',
	'JV_ACP_POINTS'											=> 'JVA - Points System',
	'JV_ACP_POINTS_ADD'										=> 'Add',
	'JV_ACP_POINTS_AFTER'									=> 'After',
	'JV_ACP_POINTS_AMOUNT_USERS_EXPLAIN'					=> 'Enter the amount to which you want to change the users balance.',
	'JV_ACP_POINTS_BEFORE'									=> 'Before',
	'JV_ACP_POINTS_DELETE_SELECTED_TRANSFER_LOG_SUCCESS'	=> 'The selected transfer entries have been successfully deleted.',
	'JV_ACP_POINTS_DELETE_TRANSFER_LOG_CONFIRM'				=> 'Are you sure you want to delete the log entries?<br><em>Please note that the data may not be restored after deletion, and no users will be able to access these log entries anymore.</em>',
	'JV_ACP_POINTS_DELETE_TRANSFER_LOG_SUCCESS'				=> 'The transfer log has been successfully deleted.',
	'JV_ACP_POINTS_DISPLAY_MEMBERLIST'						=> 'Displays balance in the members list',
	'JV_ACP_POINTS_DISPLAY_MEMBERLIST_EXPLAIN'				=> 'If enabled, the user balances are displayed in the members list.',
	'JV_ACP_POINTS_DISPLAY_TOP_USERS'						=> 'Display top users',
	'JV_ACP_POINTS_DISPLAY_TOP_USERS_EXPLAIN'				=> 'If enable it, under the “Points System Control Panel/Overview” tab, users with the biggest balance will be displayed.',
	'JV_ACP_POINTS_ENABLE'									=> 'Enable points system',
	'JV_ACP_POINTS_ENABLE_EXPLAIN'							=> 'Allow users to use the points system',
	'JV_ACP_POINTS_ERROR_NO_FUNCTION'						=> 'You have not specified a function.',
	'JV_ACP_POINTS_ERROR_ZERO_VALUE'						=> 'The specified amount may not be zero.',
	'JV_ACP_POINTS_GROUPS_CHANGED_SUCCESS'					=> 'For the groups “%s” all users balance changed successfully.',
	'JV_ACP_POINTS_GROUP_ALL_USERS'							=> 'All users in the group',
	'JV_ACP_POINTS_GROUP_ALL_USERS_EXPLAIN'					=> 'If you select “No”, it will only apply to the users, for which this group is the default group.',
	'JV_ACP_POINTS_GROUP_CHANGED_SUCCESS'					=> 'For the group “%s” all users balance changed successfully.',
	'JV_ACP_POINTS_LOG_FORMAT_GROUP'						=> 'Logging format',
	'JV_ACP_POINTS_LOG_FORMAT_GROUP_EXPLAIN'				=> 'Here you specify whether the log entry contains the group names or the users names.',
	'JV_ACP_POINTS_MANAGE_GROUPS'							=> 'Manage groups',
	'JV_ACP_POINTS_MANAGE_USER'								=> 'Manage user',
	'JV_ACP_POINTS_MANAGE_USERS'							=> 'Manage users',
	'JV_ACP_POINTS_MANAGE_USERS_EXPLAIN'					=> 'Here you can change the users balance. It is possible to modify it for an individual, for multiple users and groups as well.',
	'JV_ACP_POINTS_MANAGE_USER_EXPLAIN'						=> 'Here you can change the user’s balance.',
	'JV_ACP_POINTS_NAME'									=> 'Points name',
	'JV_ACP_POINTS_NAME_COLOR'								=> 'Points name color',
	'JV_ACP_POINTS_NAME_COLOR_EXPLAIN'						=> 'If you want to change the “Points name” color, you can do it here.',
	'JV_ACP_POINTS_NAME_EXPLAIN'							=> 'The points name you want to display instead of the word “points” on your board.',
	'JV_ACP_POINTS_NAME_POS'								=> 'Points name position',
	'JV_ACP_POINTS_NAME_POS_EXPLAIN'						=> 'Here you can define that the “Points name” is positioned before or after the amount.',
	'JV_ACP_POINTS_NEW_ATTACH_EXT'							=> 'Select file extensions',
	'JV_ACP_POINTS_NEW_ATTACH_EXT_EXPLAIN'					=> 'The selected file extensions only will apply to the download cost.',
	'JV_ACP_POINTS_SELECT_FUNC'								=> 'Select function',
	'JV_ACP_POINTS_SELECT_GROUPS_NO_USER'					=> 'User could not be found in the selected groups.',
	'JV_ACP_POINTS_SELECT_GROUP_NO_USER'					=> 'User could not be found in the selected group.',
	'JV_ACP_POINTS_SET'										=> 'Set',
	'JV_ACP_POINTS_SETTINGS'								=> 'General settings',
	'JV_ACP_POINTS_SUBTRACT'								=> 'Subtract',
	'JV_ACP_POINTS_TRANSFER'								=> 'Enable transfer module',
	'JV_ACP_POINTS_TRANSFER_EXPLAIN'						=> 'Here you can enable the use of the remittance module. Users have the opportunity to transfer a certain amount of funds between themselves.',
	'JV_ACP_POINTS_TRANSFER_LOG'							=> 'Manage transfer log',
	'JV_ACP_POINTS_TRANSFER_LOG_EXPLAIN'					=> 'You can view all the transfers and you have the option to delete the journal entries.',
	'JV_ACP_POINTS_USERS_CHANGED_SUCCESS'					=> 'The balance of the users “%s” was changed successfully.',
	'JV_ACP_POINTS_USERS_DEFAULT_GROUPS_CHANGED_SUCCESS'	=> 'The balance of the default users in groups “%s” was changed successfully.',
	'JV_ACP_POINTS_USERS_DEFAULT_GROUP_CHANGED_SUCCESS'		=> 'The balance of the default users in group “%s” was changed successfully.',
	'JV_LOG_POINTS_ADD_GROUP'								=> '<strong>Adding amount for all users in the following group: %s</strong><br>» Added amount: %s',
	'JV_LOG_POINTS_ADD_GROUPS'								=> '<strong>Adding amount for all users in the following groups: %s</strong><br>» Added amount: %s',
	'JV_LOG_POINTS_ADD_USER'								=> '<strong>Adding amount for the following user: %s</strong><br>» Added amount: %s',
	'JV_LOG_POINTS_ADD_USERS'								=> '<strong>Adding amount for the following users: %s</strong><br>» Added amount: %s',
	'JV_LOG_POINTS_ADD_USERS_DEFAULT_GROUP'					=> '<strong>Adding amount for default users in the following group: %s</strong><br>» Added amount: %s',
	'JV_LOG_POINTS_ADD_USERS_DEFAULT_GROUPS'				=> '<strong>Adding amount for default users in the following groups: %s</strong><br>» Added amount: %s',
	'JV_LOG_POINTS_CLEAR_TRANSFER_LOG'						=> '<strong>Points system cleared the transfer log.</strong>',
	'JV_LOG_POINTS_SET_GROUP'								=> '<strong>Set amount for all users in the following group: %s</strong><br>» Set amount: %s',
	'JV_LOG_POINTS_SET_GROUPS'								=> '<strong>Set amount for all users in the following groups: %s</strong><br>» Set amount: %s',
	'JV_LOG_POINTS_SET_USER'								=> '<strong>Set amount the following user: %s</strong><br>» Set amount: %s',
	'JV_LOG_POINTS_SET_USERS'								=> '<strong>Set amount the following users: %s</strong><br>» Set amount: %s',
	'JV_LOG_POINTS_SET_USERS_DEFAULT_GROUP'					=> '<strong>Set amount for default users in the following group: %s</strong><br>» Set amount: %s',
	'JV_LOG_POINTS_SET_USERS_DEFAULT_GROUPS'				=> '<strong>Set amount for default users in the following groups: %s</strong><br>» Set amount: %s',
	'JV_LOG_POINTS_SUBTRACT_GROUP'							=> '<strong>Subtract amount for all users in the following group: %s</strong><br>» Subtracted amount: %s',
	'JV_LOG_POINTS_SUBTRACT_GROUPS'							=> '<strong>Subtract amount for all users in the following groups: %s</strong><br>» Subtracted amount: %s',
	'JV_LOG_POINTS_SUBTRACT_USER'							=> '<strong>Subtract amount the following user: %s</strong><br>» Subtracted amount: %s',
	'JV_LOG_POINTS_SUBTRACT_USERS'							=> '<strong>Subtract amount the following users: %s</strong><br>» Subtracted amount: %s',
	'JV_LOG_POINTS_SUBTRACT_USERS_DEFAULT_GROUP'			=> '<strong>Subtract amount for default users in the following group: %s</strong><br>» Subtracted amount: %s',
	'JV_LOG_POINTS_SUBTRACT_USERS_DEFAULT_GROUPS'			=> '<strong>Subtract amount for default users in the following groups: %s</strong><br>» Subtracted amount: %s',
	'JV_LOG_POINTS_USER_CHANGED'							=> '<strong>User balance of %s changed. Original balance: %s</strong><br>» New balance: %s',
	'JV_POINTS_NEW_ATTACH_COST_EXPLAIN'						=> 'If a user downloads an attachment, this amount will be subtracted.',
	'JV_POINTS_NEW_POST_COST_EXPLAIN'						=> 'If a user writes a new post, this amount will be subtracted.',
	'JV_POINTS_NEW_POST_REWARD_EXPLAIN'						=> 'If a user writes a new post, he will receive this reward.<br><em>Note: This reward will also received additionally if a user opens a new topic.</em>',
	'JV_POINTS_NEW_TOPIC_REWARD_EXPLAIN'					=> 'If a user opens a new topic, he will receive this reward.',
	'JV_POINTS_REG_START_BALANCE_EXPLAIN'					=> 'If a new member registers on the website, it will receive this starting balance.',
	'JV_POINTS_TRANSFER_COST_EXPLAIN'						=> 'A percentage of the amount to be transferred.',
));
