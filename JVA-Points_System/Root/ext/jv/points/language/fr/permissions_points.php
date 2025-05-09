<?php
/**
*
* @package JVA - Points System
* @version $Id$
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
	'ACL_A_JV_POINTS'						=> 'Vous pouvez gérer le système de points',
	'ACL_CAT_JV_POINTS'						=> 'Points',
	'ACL_M_JV_POINTS_CHG'					=> 'Vous pouvez modifier les soldes des utilisateurs',
	'ACL_U_JV_POINTS_IGNORE_DOWNLOAD_COST'	=> 'Vous pouvez ignorer les frais de téléchargement',
	'ACL_U_JV_POINTS_IGNORE_POST_COST'		=> 'Vous pouvez ignorer le coût de la rédaction d’un message',
	'ACL_U_JV_POINTS_TRANSFER'				=> 'Vous pouvez transférer un certain montant à d’autres utilisateurs',
));
