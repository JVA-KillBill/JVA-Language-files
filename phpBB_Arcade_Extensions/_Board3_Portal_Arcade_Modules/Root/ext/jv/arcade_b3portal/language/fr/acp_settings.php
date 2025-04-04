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
	'ARCADE_EXT_B3PORTAL'						=> 'Modules d’arcade de portail Board3',
	'ARCADE_EXT_B3PORTAL_DETECT'				=> 'L’extension « Board3 Portal » n’est pas installée ou désactivée, donc cette extension est inactive.',
	'ARCADE_EXT_B3PORTAL_EXPLAIN'				=> 'Tous les modules de portail d’arcade installés seront affichés sur le portail.',
	'ARCADE_EXT_B3PORTAL_STATS_AUTH'			=> 'Statistiques de vérification des autorisations',
	'ARCADE_EXT_B3PORTAL_STATS_AUTH_EXPLAIN'	=> 'Si vous désactivez les statistiques de vérification des autorisations, ceux qui n’ont pas la permission d’afficher les statistiques d’arcade pourront afficher les modules du portail d’arcade.',
]);
