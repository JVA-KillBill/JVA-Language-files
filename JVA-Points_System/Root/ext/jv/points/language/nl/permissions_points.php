<?php
/**
*
@package JVA - Points System
* @version $Id: info_ucp_points.php 991 2021-12-12 10:10:48Z KillBill $
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
// Some characters you may want to copy&paste: ‚ ‘ ’ « » “ “ ” …

$lang = array_merge($lang, array(
	'ACL_A_JV_POINTS'						=> 'Je kunt het puntensysteem beheren',
	'ACL_CAT_JV_POINTS'						=> 'Punten',
	'ACL_M_JV_POINTS_CHG'					=> 'Je kunt de saldi van gebruikers wijzigen',
	'ACL_U_JV_POINTS_IGNORE_DOWNLOAD_COST'	=> 'Je kunt de downloadkosten negeren',
	'ACL_U_JV_POINTS_IGNORE_POST_COST'		=> 'Je kunt de kosten van het schrijven van een bericht negeren',
	'ACL_U_JV_POINTS_TRANSFER'				=> 'Je kunt een bepaald bedrag overmaken naar andere gebruikers',
));
