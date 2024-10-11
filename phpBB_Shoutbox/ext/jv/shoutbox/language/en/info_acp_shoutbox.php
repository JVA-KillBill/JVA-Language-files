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
	'ACP_CAT_JV_SHOUTBOX_SETTINGS'						=> 'Shoutbox',
	'ACP_JV_SHOUTBOX'									=> 'JVA - phpBB Shoutbox',
	'ACP_JV_SHOUTBOX_AUTHOR'							=> 'Message author',
	'ACP_JV_SHOUTBOX_AUTHOR_EXPLAIN'					=> 'Here you can specify the author of the message sent. If you leave this field blank and if you have installed the “JVA - Add System Bot” extension, the message will be sent under his name. If there is no “System Bot” user, then the message will be sent under the actual user name.',
	'ACP_JV_SHOUTBOX_AVATAR'							=> 'Display avatar',
	'ACP_JV_SHOUTBOX_AVATAR_EXPLAIN'					=> 'If enabled, the user avatars are displayed.',
	'ACP_JV_SHOUTBOX_BBCODE_ALLOWED'					=> 'BBCode allowed',
	'ACP_JV_SHOUTBOX_BBCODE_ALLOWED_EXPLAIN'			=> 'The specified BBCodes only can be used for the shoutbox. For each new BBCodes use a new line.',
	'ACP_JV_SHOUTBOX_CUSTOM_BBCODE'						=> 'Custom BBCode allowed',
	'ACP_JV_SHOUTBOX_CUSTOM_BBCODE_EXPLAIN'				=> 'If allowed, the custom BBCode will also be displayed.',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE'						=> 'Allowed custom page',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_EXPLAIN'				=> 'Here you can allow the display of the shoutbox in a custom page.',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_ONLINE_LIST'			=> 'Display users online on custom page',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_ONLINE_LIST_EXPLAIN'	=> 'Here you can allow to display the users, who are online, on the custom page.',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_POPUP'					=> 'Custom page pop-up window',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_POPUP_EXPLAIN'			=> 'If enabled, then the custom page open a popup window.',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_POPUP_HEIGHT'			=> 'Pop-up window height',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_POPUP_WIDTH'			=> 'Pop-up window width',
	'ACP_JV_SHOUTBOX_DATE_FORMAT'						=> 'Date format',
	'ACP_JV_SHOUTBOX_DATE_FORMAT_EXPLAIN'				=> 'The syntax used is identical to the PHP <a href="https://php.net/manual/en/function.date.php">date()</a> function.',
	'ACP_JV_SHOUTBOX_DELETE_MESSAGES'					=> 'Delete messages',
	'ACP_JV_SHOUTBOX_DELETE_MESSAGES_CONFIRM'			=> 'Are you sure you want to delete all messages?',
	'ACP_JV_SHOUTBOX_DELETE_MESSAGES_EXPLAIN'			=> 'Here you can delete all messages.',
	'ACP_JV_SHOUTBOX_DELETE_MESSAGES_SUCCESS'			=> 'All messages successfully deleted.',
	'ACP_JV_SHOUTBOX_DISPLAY_ALL_MAIN_PAGES'			=> 'All main pages',
	'ACP_JV_SHOUTBOX_DISPLAY_ALL_PAGES'					=> 'All pages',
	'ACP_JV_SHOUTBOX_DISPLAY_ALL_PAGES_EXCEPT_ARCADE'	=> 'All pages, except the arcade',
	'ACP_JV_SHOUTBOX_DISPLAY_ALL_PAGES_EXCEPT_PORTAL'	=> 'All pages, except the portal',
	'ACP_JV_SHOUTBOX_DISPLAY_ARCADE'					=> 'Arcade main page',
	'ACP_JV_SHOUTBOX_DISPLAY_ARCADE_ALL'				=> 'All arcade pages',
	'ACP_JV_SHOUTBOX_DISPLAY_FORUM'						=> 'Forum main page',
	'ACP_JV_SHOUTBOX_DISPLAY_FORUM_ALL'					=> 'Forum all pages',
	'ACP_JV_SHOUTBOX_DISPLAY_NONE'						=> 'Don’t display',
	'ACP_JV_SHOUTBOX_DISPLAY_PORTAL'					=> 'Portal page',
	'ACP_JV_SHOUTBOX_EDIT_POST'							=> 'Display edited posts',
	'ACP_JV_SHOUTBOX_EDIT_POST_EXPLAIN'					=> 'If a user is editing a post, it will be displayed on the shoutbox.',
	'ACP_JV_SHOUTBOX_ENABLE'							=> 'Shoutbox enabled',
	'ACP_JV_SHOUTBOX_ENABLE_EXPLAIN'					=> 'If enabled, the shoutbox will be displayed on those pages, for which it is enabled.',
	'ACP_JV_SHOUTBOX_FLOOD_TIME'						=> 'Flood interval',
	'ACP_JV_SHOUTBOX_FLOOD_TIME_EXPLAIN'				=> 'Number of seconds a user must wait between posting new messages. To enable users to ignore this alter their permissions.',
	'ACP_JV_SHOUTBOX_FORUM_POST_SETTINGS'				=> 'Forum post settings',
	'ACP_JV_SHOUTBOX_HEIGHT'							=> 'Shoutbox height',
	'ACP_JV_SHOUTBOX_HEIGHT_ERROR'						=> 'The provided value for the setting “Shoutbox height” is too high the set “Number of Messages” compared. To make this right, the height should be assigned a minimum of “%d” messages.',
	'ACP_JV_SHOUTBOX_HEIGHT_EXPLAIN'					=> 'Enter the height of the shoutbox into which you want it to display.',
	'ACP_JV_SHOUTBOX_LOCATION'							=> 'Location',
	'ACP_JV_SHOUTBOX_LOCATION_EXPLAIN'					=> 'Here you can specify the location on the website, where you want to display the shoutbox.',
	'ACP_JV_SHOUTBOX_MAX_MSG_LIMIT'						=> 'Maximum number of messages',
	'ACP_JV_SHOUTBOX_MAX_MSG_LIMIT_EXPLAIN'				=> 'Here you can limit the maximum amount of messages visible in the shoutbox. For example: if the specified value is 100 and the primary load 10, in this case, you can still retrieve 90 old messages. If the value is 0, then the user is able to read all the old messages.',
	'ACP_JV_SHOUTBOX_MIN_MAX_ERROR'						=> 'The “%s” can not be smaller than “%s”.',
	'ACP_JV_SHOUTBOX_MSG_LIMIT'							=> 'Number of messages',
	'ACP_JV_SHOUTBOX_MSG_LIMIT_EXPLAIN'					=> 'Here you can specify that by default this number of messages is loaded into the shoutbox. The same applies to the setting for loading of old messages.',
	'ACP_JV_SHOUTBOX_MSG_MAX_CHARS'						=> 'Maximum characters per message',
	'ACP_JV_SHOUTBOX_MSG_MAX_CHARS_EXPLAIN'				=> 'The number of characters allowed within a message. Set to 0 for unlimited characters.',
	'ACP_JV_SHOUTBOX_MSG_MIN_CHARS'						=> 'Minimum characters per message',
	'ACP_JV_SHOUTBOX_MSG_MIN_CHARS_EXPLAIN'				=> 'The minimum number of characters the user need to enter within a message. The minimum for this setting is 1.',
	'ACP_JV_SHOUTBOX_MSG_POSITION'						=> 'Message position',
	'ACP_JV_SHOUTBOX_MSG_POSITION_EXPLAIN'				=> 'Here you can specify if new new messages are displayed at the top or the bottom.',
	'ACP_JV_SHOUTBOX_MSG_SETTINGS'						=> 'Message settings',
	'ACP_JV_SHOUTBOX_NEW_REPLY_POST'					=> 'Display new posts',
	'ACP_JV_SHOUTBOX_NEW_REPLY_POST_EXPLAIN'			=> 'If a new post has been created in a topic, it will be displayed on the shoutbox.',
	'ACP_JV_SHOUTBOX_NEW_REPLY_QUOTE_POST'				=> 'Display new quoted posts',
	'ACP_JV_SHOUTBOX_NEW_REPLY_QUOTE_POST_EXPLAIN'		=> 'If  a new quoted post has been created in a topic, it will be displayed on the shoutbox.',
	'ACP_JV_SHOUTBOX_NEW_TOPIC_POST'					=> 'Display new topics',
	'ACP_JV_SHOUTBOX_NEW_TOPIC_POST_EXPLAIN'			=> 'If you new topics are created in a forum, it will be displayed on the shoutbox.',
	'ACP_JV_SHOUTBOX_PAGE'								=> 'Display shoutbox',
	'ACP_JV_SHOUTBOX_PAGE_EXPLAIN'						=> 'If enabled, the shoutbox will be added to the page where you want to display it. Note, that smilies and BBCode will not be available in the shoutbox while you use the posting pages, PM and Signature.',
	'ACP_JV_SHOUTBOX_POSITION_BOTTOM'					=> 'Bottom',
	'ACP_JV_SHOUTBOX_POSITION_TOP'						=> 'Top',
	'ACP_JV_SHOUTBOX_POST_IGNORE_FORUMS'				=> 'Ignored forums',
	'ACP_JV_SHOUTBOX_POST_IGNORE_FORUMS_EXPLAIN'		=> 'Topic in the selected forums not made automatic message. Select/Deselect multiple forums by holding CTRL and clicking.',
	'ACP_JV_SHOUTBOX_PRUNE'								=> 'Pruning messages',
	'ACP_JV_SHOUTBOX_PRUNE_EXPLAIN'						=> 'If enabled, the shoutbox will be pruned at the intervals that you set. Only the set maximum amount of messages retain.',
	'ACP_JV_SHOUTBOX_PRUNE_MSG_NUM'						=> 'Number of messages to retain',
	'ACP_JV_SHOUTBOX_PRUNE_MSG_NUM_EXPLAIN'				=> 'If the pruning is executed, this number of messages will be retained.',
	'ACP_JV_SHOUTBOX_PRUNE_TIME'						=> 'Pruning interval',
	'ACP_JV_SHOUTBOX_PRUNE_TIME_EXPLAIN'				=> 'Enter the intervals at which the messages are to be pruned.',
	'ACP_JV_SHOUTBOX_REFRESH'							=> 'Refresh (check) Interval',
	'ACP_JV_SHOUTBOX_REFRESH_EXPLAIN'					=> 'At the specified intervals the receive of new messages will be checked.',
	'ACP_JV_SHOUTBOX_ROUND_AVATAR'						=> 'Round avatar',
	'ACP_JV_SHOUTBOX_ROUND_AVATAR_EXPLAIN'				=> 'If enabled, the avatars will be displayed in a round shape.',
	'ACP_JV_SHOUTBOX_SETTINGS'							=> 'Shoutbox settings',
	'ACP_JV_SHOUTBOX_SETTINGS_EXPLAIN'					=> 'Here you can customize the shoutbox and the message settings.',
	'ACP_JV_SHOUTBOX_SMILIE_ENABLE'						=> 'Enable smileys',
	'ACP_JV_SHOUTBOX_SMILIE_ENABLE_EXPLAIN'				=> 'Here you can enable the use of smileys.',
	'ACP_JV_SHOUTBOX_SMILIE_SCROLL_BOX'					=> 'Display smileys scroll box',
	'ACP_JV_SHOUTBOX_SMILIE_SCROLL_BOX_EXPLAIN'			=> 'If display of too many smileys is allowed, here you allows the scroll box to close the smileys.',

	'JVA_CORE_EXT_NOT_FOUND'							=> 'The extension cannot be enabled because the “JVA - Core” extension cannot be found!',

	'LOG_JV_SHOUTBOX_CONFIG_SETTINGS'					=> '<strong>Modifying shoutbox settings.</strong>',
	'LOG_JV_SHOUTBOX_DELETE_MESSAGES'					=> '<strong>All shoutbox messages deleted.</strong>',
	'LOG_JV_SHOUTBOX_MESSAGES_PRUNING'					=> '<strong>Shoutbox messages pruning out.</strong><br>» Removed %d messages',
));
