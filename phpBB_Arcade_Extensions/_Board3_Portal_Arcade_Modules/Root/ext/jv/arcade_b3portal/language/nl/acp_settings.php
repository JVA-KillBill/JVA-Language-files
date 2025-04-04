<?php
/**
*
* @package phpBB Arcade - Board3 portal arcade modules
* @version $Id: acp_settings.php 2379 2021-01-27 13:09:11Z KillBill $
* @author 2011-2025 KillBill
* @copyright (c) 2014-2025 https://jv-arcade.com/ - https://jv-arcade.com/contact
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

//These are used through out the arcade
$lang = array_merge($lang, [
	'ARCADE_EXT_B3PORTAL'						=> 'Board3 portaal arcade modules',
	'ARCADE_EXT_B3PORTAL_DETECT'				=> 'De “Board3 Portaal” extensie is niet geinstalleerd of uitgeschakeld, dus deze extensie is inactief.',
	'ARCADE_EXT_B3PORTAL_EXPLAIN'				=> 'Alle geinstalleerde arcade portaal-modules worden weergegeven op het portaal.',
	'ARCADE_EXT_B3PORTAL_STATS_AUTH'			=> 'Statistieken permissie controle',
	'ARCADE_EXT_B3PORTAL_STATS_AUTH_EXPLAIN'	=> 'Indien je de statistieken permissie controle uitschakelt kunnen diegene die geen permissie hebben om de arcade statistieken te bekijken, de arcade portaal modules wel bekijken.',
]);
