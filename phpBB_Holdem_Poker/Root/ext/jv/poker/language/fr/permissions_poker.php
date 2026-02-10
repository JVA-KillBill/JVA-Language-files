<?php
/**
*
* @package phpBB Holdem Póker
* @version $Id$
* @author 2011-2026 KillBill
* @copyright (c) 2014-2026 https://jv-arcade.com/ - https://jv-arcade.com/contact
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
	$lang = [];
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
	'ACL_A_JV_POKER'				=> 'Peut gérer la réinitialisation du poker',
	'ACL_A_JV_POKER_RADIO_DELETE'	=> 'Peut supprimer une station de radio',
	'ACL_A_JV_POKER_RADIO_MANAGE'	=> 'Peut gérer la radio',
	'ACL_A_JV_POKER_ROOMS_DELETE'	=> 'Peut supprimer des salles de poker',
	'ACL_A_JV_POKER_ROOMS_MANAGE'	=> 'Peut gérer des salles de poker',
	'ACL_A_JV_POKER_SETTINGS'		=> 'Peut gérer les paramètres de poker',
	'ACL_A_JV_POKER_STYLES'			=> 'Peut gérer les styles de salle',
	'ACL_A_JV_POKER_USERS_MANAGE'	=> 'Peut gérer les utilisateurs',
	'ACL_CAT_JV_POKER'				=> 'Poker',
	'ACL_M_JV_POKER_MSG_DELETE'		=> 'Peut supprimer des messages de l’archive shoutbox',
	'ACL_U_JV_POKER'				=> 'Peut utiliser le poker',
	'ACL_U_JV_POKER_PLAY'			=> 'Peut jouer au poker. <em>Cette option s’applique uniquement aux utilisateurs enregistrés.</em>',
	'ACL_U_JV_POKER_SHOUT'			=> 'Peut utiliser la shoutbox avec le poker. <em>Cette option ne s’applique qu’aux utilisateurs enregistrés.</em>',
	'ACL_U_JV_POKER_STATS'			=> 'Peut voir les données de statistiques du poker'
]);
