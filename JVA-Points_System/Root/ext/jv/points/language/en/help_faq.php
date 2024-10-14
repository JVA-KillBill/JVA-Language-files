<?php
/**
*
* @package JVA - Points System
* @version $Id: help_faq.php 953 2021-05-02 05:18:36Z KillBill $
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
	'JV_POINTS_HELP_FAQ_BLOCK_GENERAL'						=> 'General Questions',
	'JV_POINTS_HELP_FAQ_BLOCK_INTRO'						=> 'Introduction',
	'JV_POINTS_HELP_FAQ_GENERAL_POST_REWARD_ANSWER'			=> 'If your new post must be approved by a moderator, you will receive the reward only after confirmation.',
	'JV_POINTS_HELP_FAQ_GENERAL_POST_REWARD_MOD_ANSWER'		=> 'If the new post has costs and is rejected for any reason, then the cost will not be refunded.',
	'JV_POINTS_HELP_FAQ_GENERAL_POST_REWARD_MOD_QUESTION'	=> 'I sent a new post, which was rejected by a moderator, but I did not get back the cost, why?',
	'JV_POINTS_HELP_FAQ_GENERAL_POST_REWARD_QUESTION'		=> 'I sent a new post, but did not get the reward, why?',
	'JV_POINTS_HELP_FAQ_GENERAL_SAME_REWARD_COST_ANSWER'	=> 'If accidentally such setting would take place, in this case the result will be zero.',
	'JV_POINTS_HELP_FAQ_GENERAL_SAME_REWARD_COST_QUESTION'	=> 'What happens in the case when the reward and the cost have the same value?',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_ANSWER'			=> 'Yes, if the administrator allows you to use it.',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_COST_ANSWER'		=> 'Yes, but only if the administrator is to specify a certain cost. The cost can be a certain percentage of the amount to be transferred.',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_COST_QUESTION'		=> 'Is the transfer charged at some cost?',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_ELOG_ANSWER'		=> 'If you do not see log entries, an administrator has deleted it.',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_ELOG_QUESTION'		=> 'My log entries have disappeared, why?',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_LOG_ANSWER'		=> 'Yes, each transfer has a log entry, which can be viewed in the transfer log.',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_LOG_QUESTION'		=> 'The transfers can be traced?',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_QUESTION'			=> 'Is it possible to transfer a certain amount to another user?',
	'JV_POINTS_HELP_FAQ_INTRO_MODULES_ANSWER'				=> 'In the points system many modules are included, but only those are available which are activated by the administrator. 
																<br><br><strong>Modules:</strong>
																<ul>
																	<li><strong>Overview</strong> - Shown here users have the highest balance. In addition, your own current balance can be viewed here.</li>
																	<li><strong>General information</strong> - Here you can read the current settings, which rewards there are and which costs.</li>
																	<li><strong>Transfer</strong> - Here you will be able to transfer balance to another user.</li>
																	<li><strong>Transfer logs</strong> - Here you will be able to see the transfer transactions.</li>
																	<li><strong>Guide</strong></li>
																</ul>',
	'JV_POINTS_HELP_FAQ_INTRO_MODULES_QUESTION'				=> 'What modules are included in the points system?',
	'JV_POINTS_HELP_FAQ_INTRO_SYSTEM_ANSWER'				=> 'The points system allows the users to acquire certain rewards, or the amount in question is used in some places of this website. The administrator can define how to reach a certain amount, and what it is used for. Even with this you may find the following guide useful.',
	'JV_POINTS_HELP_FAQ_INTRO_SYSTEM_QUESTION'				=> 'What is the points system?',
));
