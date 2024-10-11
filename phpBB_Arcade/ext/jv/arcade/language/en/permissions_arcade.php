<?php
/**
*
* @package phpBB Arcade
* @version $Id: permissions_arcade.php 2450 2021-12-13 20:24:43Z KillBill $
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

// Define categories and permission types
$lang = array_merge($lang, [
	'ACL_A_ARCADE'						=> 'Can manage arcade reset',
	'ACL_A_ARCADE_ANNOUNCE'				=> 'Can manage announcements',
	'ACL_A_ARCADE_BACKUP'				=> 'Can backup categories',
	'ACL_A_ARCADE_CAT'					=> 'Can add/edit categories',
	'ACL_A_ARCADE_CLEARLOGS'			=> 'Can clear logs',
	'ACL_A_ARCADE_DELETE_CAT'			=> 'Can delete categories',
	'ACL_A_ARCADE_DELETE_GAME'			=> 'Can delete games',
	'ACL_A_ARCADE_DELETE_TOUR'			=> 'Can delete tournaments',
	'ACL_A_ARCADE_GAME'					=> 'Can add/edit games',
	'ACL_A_ARCADE_INSTALL'				=> 'Can manage installation features',
	'ACL_A_ARCADE_MENU'					=> 'Can manage menu',
	'ACL_A_ARCADE_POINTS_SETTINGS'		=> 'Can manage points settings',
	'ACL_A_ARCADE_RANKS'				=> 'Can manage ranks',
	'ACL_A_ARCADE_RESET_GAME'			=> 'Can reset games',
	'ACL_A_ARCADE_SETTINGS'				=> 'Can manage settings',
	'ACL_A_ARCADE_TOUR'					=> 'Can create/edit tournament',
	'ACL_A_ARCADE_USER'					=> 'Can manage users',
	'ACL_A_ARCADE_UTILITIES'			=> 'Can use utilities',
	'ACL_A_ARCADE_VIEWLOGS'				=> 'Can view logs',
	'ACL_A_CAUTH'						=> 'Can alter permission class',
	'ACL_CAT_ARCADE'					=> 'Arcade',
	'ACL_C_COMMENT'						=> 'Can submit comments',
	'ACL_C_DOWNLOAD'					=> 'Can download games',
	'ACL_C_DOWNLOADFREE'				=> 'Can download games for free',
	'ACL_C_IGNORECONTROL'				=> 'Can ignore play control',
	'ACL_C_IGNOREFLOOD_DOWNLOAD'		=> 'Can ignore download flood limit',
	'ACL_C_IGNOREFLOOD_PLAY'			=> 'Can ignore play flood limit',
	'ACL_C_LIST'						=> 'Can list category',
	'ACL_C_PLAY'						=> 'Can play games',
	'ACL_C_PLAYFREE'					=> 'Can play games for free',
	'ACL_C_RATE'						=> 'Can rate games',
	'ACL_C_REPORT'						=> 'Can report about games',
	'ACL_C_RE_RATE'						=> 'Can change own ratings',
	'ACL_C_SCORE'						=> 'Can submit scores. <em>Only for registered users.</em>',
	'ACL_C_VIEW'						=> 'Can view category',
	'ACL_M_ARCADE_CHANGE_GAMENAME'		=> 'Can change game name',
	'ACL_M_ARCADE_CLEARLOGS'			=> 'Can clear logs',
	'ACL_M_ARCADE_GAME'					=> 'Can edit games',
	'ACL_M_ARCADE_RESET_GAME'			=> 'Can reset games',
	'ACL_M_ARCADE_TOUR'					=> 'Can create/edit tournaments',
	'ACL_M_ARCADE_TOUR_REWARD'			=> 'Can add rewards to new tournaments',
	'ACL_M_ARCADE_VIEWLOGS'				=> 'Can view logs',
	'ACL_TYPE_C_'						=> 'Category permissions',
	'ACL_U_ARCADE'						=> 'Can use the arcade',
	'ACL_U_ARCADE_CHALLENGE'			=> 'Can use the challenge',
	'ACL_U_ARCADE_DOWNLOAD'				=> 'Can download games',
	'ACL_U_ARCADE_FAVORITES'			=> 'Can add/remove favorite games',
	'ACL_U_ARCADE_IGNOREFLOOD_SEARCH'	=> 'Can ignore search flood limit',
	'ACL_U_ARCADE_PM'					=> 'Can get a private message on loss of a trophy',
	'ACL_U_ARCADE_POPUP'				=> 'Can play games in a new window',
	'ACL_U_ARCADE_SEARCH'				=> 'Can use the games search',
	'ACL_U_ARCADE_TOUR'					=> 'Can use the tournament',
	'ACL_U_ARCADE_VIEWSTATS'			=> 'Can view stats page',
	'ACL_U_ARCADE_VIEW_WHOISPLAYING'	=> 'Can view who is playing games',
]);
