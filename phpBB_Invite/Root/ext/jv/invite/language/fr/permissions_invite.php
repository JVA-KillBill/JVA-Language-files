<?php
/**
*
* @package JVA - phpBB Invite
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

//These are used through out the invite

// Define categories and permission types
$lang = array_merge($lang, [
	'ACL_A_JV_INVITE_CONFIG'		=> 'Modifier les paramètres',
	'ACL_A_JV_INVITE_DELETE'		=> 'Supprimer l’invitation pour les utilisateurs',
	'ACL_A_JV_INVITE_PEND'			=> 'Gérer les invitations en attente',
	'ACL_A_JV_INVITE_REQUEST'		=> 'Gérer les demandes d’invitation',
	'ACL_A_JV_INVITE_SEND'			=> 'Gérer les utilisateurs/groupes',
	'ACL_A_JV_INVITE_SYNC'			=> 'Synchroniser les données',
	'ACL_A_JV_INVITE_USERS_LIST'	=> 'Voir la liste des personnes invitées',
	'ACL_CAT_JV_INVITE'				=> 'Invitation',
	'ACL_M_JV_INVITE_REQUEST_AP'	=> 'Gérer les demandes d’invitation ',
	'ACL_U_JV_INVITE_DELETE'		=> 'Supprimer une invitation qui a déjà été envoyée<br><em>Si vous envoyez l’invitation à la mauvaise adresse, vous avez la possibilité de la supprimer.</em>',
	'ACL_U_JV_INVITE_REQUEST'		=> 'Demander une invitation',
	'ACL_U_JV_INVITE_RESTORE'		=> 'Restaurer les invitations supprimées',
	'ACL_U_JV_INVITE_UNLIMITED'		=> 'Vous avez des invitations illimitées',
	'ACL_U_JV_INVITE_USER'			=> 'Inviter un nouveau membre sur le site',
]);
