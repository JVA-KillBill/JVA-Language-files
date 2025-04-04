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
	'JVPPDMT_COOKIE_SETTING'				=> 'Receiving cookies',
	'JVPPDMT_COOKIE_SETTING_EXPLAIN'		=> 'Here you can set whether this website can save cookies on your device or not. For more information, read the %sPrivacy Policy%s.<br><em>Note that if you do not enable cookies, many features will not work.</em>',
	'JVPPDMT_CREATE_TIME'					=> 'Creation time',
	'JVPPDMT_DOWNLOAD'						=> 'Download',
	'JVPPDMT_FORUM_POSTS'					=> 'Forum posts',
	'JVPPDMT_ID'							=> 'Identification number',
	'JVPPDMT_MY_ACC_DELETE_CONFIRM'			=> 'Delete my registration confirmation',
	'JVPPDMT_MY_ACC_DELETE_CONFIRM_ERROR'	=> 'Deletion of registration has not been confirmed!',
	'JVPPDMT_MY_ACC_DELETE_EXPLAIN'			=> 'Delete my registration<br><em>Please note, if you do then there is no way to restore your data!</em>',
	'JVPPDMT_MY_ACC_DELETE_FOUNDER_ERROR'	=> 'Founding user can not delete his own registration! This operation can only be performed by another founding user.',
	'JVPPDMT_MY_ACC_DELETE_SUCCESS'			=> 'Registration is successfully deleted.',
	'JVPPDMT_MY_ACC_POST_ANONYM_IP'			=> 'Remove the IP address of all my posts',
	'JVPPDMT_MY_ACC_POST_DELETE'			=> 'Post delete',
	'JVPPDMT_MY_ACC_POST_DELETE_EXPLAIN'	=> 'your posts will be deleted on the board',
	'JVPPDMT_NOT_FOUND_PM'					=> 'You do not have a private message.',
	'JVPPDMT_NOT_FOUND_POST'				=> 'You do not have a post.',
	'JVPPDMT_PD_ACCEPT'						=> 'I approve to use and save my personal data',
	'JVPPDMT_PD_PARTIAL_ACCEPT'				=> 'Only use my existing data and do not save additional personal data',
	'JVPPDMT_PD_REJECT'						=> 'I reject the use and storage of my personal data',
	'JVPPDMT_PD_SETTING'					=> 'Storage of personal data',
	'JVPPDMT_PD_SETTING_EXPLAIN'			=> 'Here you can set how to proceed the website with your personal data. Of course, you can change that decision at any time later.',
	'JVPPDMT_PRIVACY_POLICY_ACCEPT_DATE'	=> 'Last privacy policy acceptance time',
	'JVPPDMT_REGISTRATION_DATE'				=> 'Registration time',
	'JVPPDMT_REGISTRATION_IP'				=> 'Registration IP address',
	'JVPPDMT_REL_IP'						=> 'Related IP address',
	'JVPPDMT_SELECT_DOWNLOAD_FORMAT'		=> 'Select download format',
	'JVPPDMT_SENT_PRIVATE_MESSAGES'			=> 'Sent private messages',
	'JVPPDMT_TERM_OF_USE_ACCEPT_DATE'		=> 'Last terms of use acceptance time',
	'JVPPDMT_YOUR_PM_NUMBER'				=> 'Number of private messages',
	'JVPPDMT_YOUR_POST_NUMBER'				=> 'Number of posts',
]);
