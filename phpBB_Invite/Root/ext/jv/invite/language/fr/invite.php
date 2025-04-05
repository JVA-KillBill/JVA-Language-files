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
$lang = array_merge($lang, [
	'JVA_CORE_EXT_NOT_FOUND'			=> 'L’extension ne peut pas être activée car l’extension « JVA - Core » est introuvable !',
	'JV_INVITE'							=> 'Invitation',
	'JV_INVITED_BY_USERS'				=> [
		1								=> 'membre invité par %s',
		2								=> 'membres invité par %s',
	],
	'JV_INVITED_MEMBERLIST_VIEWING'		=> 'Voir les membres invités',
	'JV_INVITED_MEMBERS'				=> [
		1								=> 'Membre invité',
		2								=> 'Membres invité',
	],
	'JV_INVITE_DELETE_CONFIRM'			=> 'Si vous souhaitez supprimer votre invitation, cliquez %sICI%s.',
	'JV_INVITE_DELETE_SUCCESS'			=> [
		1								=> 'Votre invitation a été supprimée.',
		2								=> 'Vos invitations sont supprimées.',
	],
	'JV_INVITE_DISABLED'				=> 'Le système d’invitation est actuellement désactivé !',
	'JV_INVITE_EMAIL_NOT_MODIFY'		=> 'Ne peut pas être modifié !',
	'JV_INVITE_EXP'						=> 'Invitez un ami sur notre forum.',
	'JV_INVITE_INVITED'					=> 'invité',
	'JV_INVITE_KEY_ERROR'				=> '<div class="jv_invite_error">Votre invitation n’est pas valide !</div>',
	'JV_INVITE_MEMBER'					=> [
		1								=> '%s membre',
		2								=> '%s membres'
	],
	'JV_INVITE_NOTIFICATION_MANAGE_ADD'	=> [
		1								=> 'L’utilisateur %s vous a envoyé %s invitation.',
		2								=> 'L’utilisateur %s vous a envoyé %s invitations.'
	],
	'JV_INVITE_NOTIFICATION_MANAGE_DEL'	=> 'L’utilisateur %s a supprimé toutes vos invitations.',
	'JV_INVITE_NOTIFICATION_MANAGE_SET'	=> 'L’utilisateur %s a changé le nombre d’invitations.<br> balance : %s.',
	'JV_INVITE_NO_SELECTED_USERS'		=> 'L’utilisateur sélectionné n’a encore invité personne.',
	'JV_INVITE_NO_USERS'				=> 'Aucun utilisateur invité.',
	'JV_INVITE_PETITION'				=> [
		1								=> 'Demande d’invitation reçue. Nombre de demandes en attente : <b>%s</b> invitation.',
		2								=> 'Demande d’invitations reçues. Nombre de demandes en attente : <b>%s</b> invitations.',
	],
	'JV_INVITE_REGISTRATION'			=> '<div class="jv_invite_error">Actuellement, vous ne pouvez vous inscrire que sur invitation !</div>',
	'JV_INVITE_REGISTRATION_DISABLE'	=> 'L’inscription avec une invitation est temporairement désactivée, revenez plus tard.',
]);
