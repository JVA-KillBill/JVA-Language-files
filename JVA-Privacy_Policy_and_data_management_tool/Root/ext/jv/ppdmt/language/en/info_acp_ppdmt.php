<?php
/**
*
* @package JVA - Privacy Policy and data management tool
* @version $Id$
* @author 2011-2022 KillBill
* @copyright (c) 2014-2022 https://jv-arcade.com/ - https://jv-arcade.com/contact
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
	'ACP_CAT_JVPPDMT'							=> 'Privacy policy and data management tool',
	'ACP_JVPPDMT'								=> 'JVA - Privacy Policy and data management tool',
	'ACP_JVPPDMT_CONTROLLER_NAME'				=> 'Controller name',
	'ACP_JVPPDMT_CONTROLLER_NAME_EXPLAIN'		=> 'Full name of the controller.',
	'ACP_JVPPDMT_CONTROLLER_PHONE'				=> 'Controller phone number',
	'ACP_JVPPDMT_CONTROLLER_PHONE_EXPLAIN'		=> 'The GDPR requires that at least two contacts should be provided, one has to be the contact email address and the second a phone number as a quick contact.<br><em>Enter the controller phone number along with the country code number. Example England: +44 …</em>',
	'ACP_JVPPDMT_COOIKE_INFO'					=> 'Display cookie information',
	'ACP_JVPPDMT_COOIKE_INFO_EXPLAIN'			=> 'If enabled, anyone who has not accepted the storage of cookies will see an information that many features are unavailable for him.  In addition, the information includes a link that will lead them to their personal data settings.',
	'ACP_JVPPDMT_GLOBAL_SETTINGS'				=> 'Privacy policy and data management tools settings',
	'ACP_JVPPDMT_GLOBAL_SETTINGS_EXPLAIN'		=> 'Here you can enable users to view the privacy policy and to accept it. In addition, you have the option to allow users to delete their own registration.',
	'ACP_JVPPDMT_HIDE_USERNAME_BOT'				=> 'Hide usernames for bots',
	'ACP_JVPPDMT_HIDE_USERNAME_GUEST'			=> 'Hide usernames for guests',
	'ACP_JVPPDMT_LAST_RESET_DATE'				=> 'Last reset date: %s',
	'ACP_JVPPDMT_PRIVACY_POLICY_ENABLE'			=> 'Privacy policy',
	'ACP_JVPPDMT_PRIVACY_POLICY_ENABLE_EXPLAIN'	=> 'If you enable this, users will see the privacy policy with the option to accept it.',
	'ACP_JVPPDMT_RESET'							=> 'Reset acceptance of the Privacy Policy',
	'ACP_JVPPDMT_RESET_CONFIRM'					=> 'Are you sure you want to reset acceptance of the privacy policy?',
	'ACP_JVPPDMT_RESET_EXPLAIN'					=> 'If you change the privacy policy, start this process by requiring users to read and accept the new privacy policy again.',
	'ACP_JVPPDMT_RESET_SUCCESS'					=> 'Reset the privacy policy is successful.',
	'ACP_JVPPDMT_SETTINGS'						=> 'Settings',
	'ACP_JVPPDMT_TERM_OF_USE_RESET'				=> 'Reset acceptance of the terms of use',
	'ACP_JVPPDMT_TERM_OF_USE_RESET_CONFIRM'		=> 'Are you sure you want to reset acceptance of the terms of use?',
	'ACP_JVPPDMT_TERM_OF_USE_RESET_EXPLAIN'		=> 'If you change the terms of use, start this process by requiring users to read and accept the new terms of use again.',
	'ACP_JVPPDMT_TERM_OF_USE_RESET_SUCCESS'		=> 'Reset the term of use is successful.',
	'ACP_JVPPDMT_USE_COOKIE_GUEST'				=> 'Cookie usage for guests',
	'ACP_JVPPDMT_USE_COOKIE_GUEST_EXPLAIN'		=> 'If this is disabled, guests will be blocked for the use of cookies, so there will be no need for the privacy policy to be accepted by guests.',
	'ACP_JVPPDMT_VIEWER_GROUP'					=> 'Viewer group',
	'ACP_JVPPDMT_VIEWER_GROUP_EXPLAIN'			=> 'The extension creates a new special group called <strong>“Registered viewers”</strong>. This group would ensure the rights of users who do not accept the storage of additional personal data. Note that the data controller should always pay attention to the rights of this group that they are always set correctly. The controller should create special roles for this group. Eligibility should always be set so that a user in this group can not submit a form anywhere. Be aware that if you create a new forum, you do not forget to update the permissions of this group. In this case, it is good to set this group permissions so that the user can only browse and nothing else. Make sure to always select the <strong>“NEVER”</strong> permissions setting field for other actions, because  it is the only way you can overwrite the access rights of the user from other group memberships. If you leave this group disabled, users, if they do not accept personal data storage, will be redirected to delete their registration.',
	'ACP_JVPPDMT_VIEWER_GROUP_INFO'				=> 'Display viewer group information',
	'ACP_JVPPDMT_VIEWER_GROUP_INFO_EXPLAIN'		=> 'If enabled, users in the viewer group will see information that they are in the viewer group and do not have permission to submit a form. In addition, the information includes a link that will lead them to their personal data settings.',
	'ACP_JVPPDMT_YOUR_PP_FILE'					=> 'Own privacy policy filename',
	'ACP_JVPPDMT_YOUR_PP_FILE_EXPLAIN'			=> 'Here you have the opportunity to enter the name of your own language file that contains your modified privacy policy. This is necessary if you want to change the text and do not want to lose it when updating the extension by overwriting the files. Upload your own file to [ROOT]/ext/jv/ppdmt/language/XY/ language folders. For example, if its name is “pp”, then it should be found in the [ROOT]/ext/jv/ppdmt/language/XY/pp.php. Also, note that substitution characters in %1$s … %5$s in the language file can not be removed and the language variable must also be the same. The simplest way to avoid making a mistake is if you copy the delivered original file privacy_policy.php, rename it and edit the text there in the renamed file.',

	'LOG_JVPPDMT_DOWNLOAD_PRIVACY_DATA'			=> '<strong>Download privacy data</strong>',
	'LOG_JVPPDMT_DOWNLOAD_PRIVACY_PMS'			=> '<strong>Download privacy private messages</strong>',
	'LOG_JVPPDMT_DOWNLOAD_PRIVACY_POSTS'		=> '<strong>Download privacy posts</strong>',
	'LOG_JVPPDMT_PRIVACY_SETTINGS'				=> '<strong>Altered privacy settings</strong>',
	'LOG_JVPPDMT_RESET'							=> '<strong>Reset privacy policy</strong>',
	'LOG_JVPPDMT_SETTINGS'						=> '<strong>Altered privacy policy and data management tools settings</strong>',
	'LOG_JVPPDMT_TERM_OF_USE_RESET'				=> '<strong>Reset terms of use</strong>',
));
