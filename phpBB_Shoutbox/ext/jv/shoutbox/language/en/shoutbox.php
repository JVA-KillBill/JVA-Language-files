<?php
/**
*
* @package JVA - phpBB Shoutbox
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

$lang = array_merge($lang, array(
	'JV_SHOUTBOX'							=> 'Shoutbox',
	'JV_SHOUTBOX_AJAX_ERROR'				=> 'There was an error during processing.',
	'JV_SHOUTBOX_AUTO_REFRESH_TIME_TITLE'	=> 'Automatic refresh every %d seconds',
	'JV_SHOUTBOX_BBCODES'					=> 'BBCodes',
	'JV_SHOUTBOX_BBCODES_FAQ'				=> 'BBCode FAQ',
	'JV_SHOUTBOX_CLOSE'						=> 'Close shoutbox',
	'JV_SHOUTBOX_CONFIRM_DELETE_MSG'		=> 'Are you sure to delete this message?',
	'JV_SHOUTBOX_CUSTOM_BBCODES'			=> 'Custom BBCodes',
	'JV_SHOUTBOX_DELETE_MESSAGE'			=> 'Delete message',
	'JV_SHOUTBOX_EDIT_MESSAGE'				=> 'Edit message',
	'JV_SHOUTBOX_EMPTY_MSG_ERROR'			=> 'You can not send an empty message.',
	'JV_SHOUTBOX_EXPLAIN'					=> 'Members of public conversation.',
	'JV_SHOUTBOX_F_EDITED_POST'				=> '%3$s edited a post in the forum %1$s on the topic %2$s.',
	'JV_SHOUTBOX_F_NEW_POST'				=> '%3$s commented a post in the forum %1$s on the topic %2$s.',
	'JV_SHOUTBOX_F_NEW_POST_QUOTE'			=> '%3$s quoted a post in the forum %1$s on the topic %2$s.',
	'JV_SHOUTBOX_F_NEW_TOPIC'				=> '%3$s opened a new topic in the forum %1$s: %2$s.',
	'JV_SHOUTBOX_IP_BUTTON_TITLE'			=> 'User IP “%s” address details',
	'JV_SHOUTBOX_MSG_EDITED_TIMES'			=> array(
		1									=> 'Edited %d time.',
		2									=> 'Edited %d times.',
	),
	'JV_SHOUTBOX_MSG_FLOOD_ERROR'			=> 'You cannot send another message so soon after your last.',
	'JV_SHOUTBOX_MSG_MAX_CHARS_ERROR'		=> 'The message can not contain more than %d characters.',
	'JV_SHOUTBOX_MSG_MIN_CHARS_ERROR'		=> array(
		1									=> 'The message must contain a minimum of %d character.',
		2									=> 'The message must contain a minimum of %d characters.',
	),
	'JV_SHOUTBOX_MSG_NO_USER_IP'			=> 'The message does not exist or this message has no assigned IP.',
	'JV_SHOUTBOX_NEW_MSG_TITLE'				=> array(
		1									=> '(%d) new message arrived!',
		2									=> '(%d) new messages arrived!',
	),
	'JV_SHOUTBOX_NO_JS'						=> 'The use shoutbox, you need to enable use JavaScript!',
	'JV_SHOUTBOX_NO_MSG_ID'					=> 'The message could not be found.',
	'JV_SHOUTBOX_NO_PERMISSION_DELETE_MSG'	=> 'You do not have permission to delete message.',
	'JV_SHOUTBOX_NO_PERMISSION_EDIT_MSG'	=> 'You do not have permission to edit message.',
	'JV_SHOUTBOX_NO_PERMISSION_SEND_MSG'	=> 'You do not have permission to send message.',
	'JV_SHOUTBOX_OPEN'						=> 'Open Shoutbox',
	'JV_SHOUTBOX_PM_BUTTON_TITLE'			=> 'Send a private message',
	'JV_SHOUTBOX_QUOTE_BUTTON_TITLE'		=> 'Quote message',
	'JV_SHOUTBOX_RE_USER'					=> '@%s',
	'JV_SHOUTBOX_RE_USER_TITLE'				=> 'Respond to user',
	'JV_SHOUTBOX_SOUND_OFF_TITLE'			=> 'Sound off',
	'JV_SHOUTBOX_SOUND_ON_TITLE'			=> 'Sound on',
	'JV_SHOUTBOX_SUCCESS_DELETE_MSG'		=> 'The message was deleted successfully.',
	'JV_SHOUTBOX_VIEWING'					=> 'Viewing shoutbox',
));
