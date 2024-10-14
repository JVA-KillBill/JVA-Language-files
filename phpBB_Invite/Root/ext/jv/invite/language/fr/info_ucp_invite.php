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
	'POST_CONFIRM_EXPLAIN'						=> 'Vous devez saisir un code de confirmation pour empêcher l’envoi automatique de l’invitation. Le code est montré dans l’image ci-dessous. Si vous ne pouvez pas lire le code en raison de problèmes visuels ou autres, veuillez contacter l’ %sadministrateur du forum%s.',

	'UCP_CAT_JV_INVITE'							=> 'JVA - phpBB Invite',
	'UCP_JV_INVITE'								=> 'Invitation',
	'UCP_JV_INVITED_MEMBERS_EXPLAIN'			=> [
		1										=> 'Membre que vous avez invité.',
		2										=> 'Membres que vous avez invitées.',
	],
	'UCP_JV_INVITE_ADAT'						=> 'Détails de l’invitation',
	'UCP_JV_INVITE_BACK'						=> '<br><br>%sRetour au panneau d’utilisateur%s',
	'UCP_JV_INVITE_DAYF'						=> 'Invitations expédiées aujourd’hui',
	'UCP_JV_INVITE_DAYF_EXPLAIN'				=> 'Le nombre d’invitations envoyées aujourd’hui.',
	'UCP_JV_INVITE_DAY_OFF'						=> 'Nous n’envoyons plus d’invitations aujourd’hui.',
	'UCP_JV_INVITE_DB_KULDES'					=> 'Limite d’invitation quotidienne',
	'UCP_JV_INVITE_DB_KULDES_EXPLAIN'			=> 'Nombre maximum d’invitations que vous pouvez envoyer par jour.',
	'UCP_JV_INVITE_DB_MAX'						=> '<span class="jv_invite_tred">illimité!</span>',
	'UCP_JV_INVITE_DB_PENDING'					=> 'Invitations en attente',
	'UCP_JV_INVITE_DB_PENDING_EXPLAIN'			=> 'Le nombre d’utilisateurs que vous avez invités et qui ne se sont pas encore inscrits.',
	'UCP_JV_INVITE_DB_SZAM'						=> 'Nombre d’invitations',
	'UCP_JV_INVITE_DB_SZAM_EXPLAIN'				=> 'Le nombre d’invitations que vous pouvez envoyer',
	'UCP_JV_INVITE_DELETE'						=> 'Supprimer des invitations',
	'UCP_JV_INVITE_DELETE_ERROR'				=> 'L’invitation est introuvable ou le délai de suppression est expiré.',
	'UCP_JV_INVITE_DELETE_EXPLAIN'				=> 'Ici, vous avez la possibilité de supprimer les invitations envoyées à la mauvaise adresse.<br><em>Cela ne peut être fait que dans les %s minutes suivant l’envoi d’une invitation.</em>',
	'UCP_JV_INVITE_DELETE_NO_CONFIRM'			=> 'La suppression n’a pas été confirmée !',
	'UCP_JV_INVITE_DELETE_SUCCES'				=> [
		1										=> 'L’invitation a été supprimée avec succès.',
		2										=> 'Les invitations ont été supprimées avec succès.',
	],
	'UCP_JV_INVITE_DUP'							=> 'Une invitation a déjà été envoyée à l’adresse e-mail que vous avez fournie. -> %s',
	'UCP_JV_INVITE_EDUP'						=> 'Vous avez entré une adresse e-mail plus d’une fois. -> %s',
	'UCP_JV_INVITE_EMAILS_SENT'					=> 'Les invitations ont été envoyées avec succès.',
	'UCP_JV_INVITE_EMAIL_KERES_EXPLAIN'			=> 'Raison de tant d’invitations.',
	'UCP_JV_INVITE_EMAIL_LANG'					=> 'Langue des e-mails',
	'UCP_JV_INVITE_EMAIL_SELECT'				=> 'Sélection d’invitations',
	'UCP_JV_INVITE_EMAIL_SELECT_EXPLAIN'		=> 'Choisissez qui vous souhaitez supprimer de vos destinataires.',
	'UCP_JV_INVITE_EMAIL_SELECT_RESTORE_EXP'	=> 'Choisissez qui vous voulez restaurer parmi vos destinataires.',
	'UCP_JV_INVITE_EMAIL_SENT'					=> 'L’invitation a été envoyée avec succès.',
	'UCP_JV_INVITE_FLOOD_LIMIT'					=> 'Vous ne pouvez plus envoyer d’invitations. Réessayez plus tard.',
	'UCP_JV_INVITE_FRIEND'						=> 'Ajouter un ami',
	'UCP_JV_INVITE_FRIEND_EXPLAIN'				=> 'L’utilisateur invité sera ajouté à votre liste d’amis.',
	'UCP_JV_INVITE_FUG_LIMIT'					=> 'Vous ne pouvez envoyer que %s invitations aujourd’hui, mais vous avez spécifié %s destinataires.',
	'UCP_JV_INVITE_KERES'						=> 'Demander une invitation',
	'UCP_JV_INVITE_KERES_BUYS_SUCCES'			=> 'Invitations achetées.',
	'UCP_JV_INVITE_KERES_BUY_MIN'				=> 'Minimum (1) invitation à acheter.',
	'UCP_JV_INVITE_KERES_BUY_NO'				=> 'Vous n’avez pas assez de %s pour effectuer cet achat. pour acheter ce nombre d’invitations. Votre solde est actuellement %s %s.',
	'UCP_JV_INVITE_KERES_BUY_SUBMIT'			=> 'Achete',
	'UCP_JV_INVITE_KERES_BUY_SUBT'				=> 'Invitation à acheter',
	'UCP_JV_INVITE_KERES_BUY_SUBT_EXPLAIN'		=> 'Saisissez le nombre d’invitations que vous souhaitez acheter.<br>Le prix d’une invitation est de <strong>%s %s</strong>.<br>Vous êtes responsable de l’invité s’il fait quelque chose de mal.',
	'UCP_JV_INVITE_KERES_BUY_SUCCES'			=> 'Votre invitation a été achetée avec succès.',
	'UCP_JV_INVITE_KERES_BUY_TITLE'				=> 'Acheter une invitation.',
	'UCP_JV_INVITE_KERES_DISABLED'				=> 'La demande est désactivée!',
	'UCP_JV_INVITE_KERES_MAX'					=> 'Nombre maximum de demandes : (%s) invitation(s).',
	'UCP_JV_INVITE_KERES_MIN'					=> 'Nombre minimum de demandes : (1)',
	'UCP_JV_INVITE_KERES_NO_MES'				=> 'Vous n’avez pas écrit de message. Sans explication, vous ne pouvez pas demander autant d’invitations.',
	'UCP_JV_INVITE_KERES_OFF'					=> 'Votre demande d’invitation est en cours de traitement. Une fois qu’il a été examiné par un administrateur/modérateur, vous recevrez un e-mail à ce sujet.',
	'UCP_JV_INVITE_KERES_SOK_EXPLAIN'			=> '<strong>(%s)</strong> invitations demandées, expliquez pourquoi vous avez besoin d’autant d’invitations.<br>Si nous trouvons votre demande acceptable, nous vous enverrons des invitations. Si nous subissons des abus, cela peut également conduire à une interdiction.',
	'UCP_JV_INVITE_KERES_SUBMIT'				=> 'Soumet une demande',
	'UCP_JV_INVITE_KERES_SUCC'					=> 'La demande d’invitation a été envoyée avec succès.',
	'UCP_JV_INVITE_KERES_SUCCS'					=> 'La demande des invitations ont été envoyées avec succès.',
	'UCP_JV_INVITE_KERES_TITLE'					=> 'Invitations demandées',
	'UCP_JV_INVITE_KERES_TITLE_EXPLAIN'			=> 'Entrez le nombre d’invitations que vous souhaitez demander. Un maximum de <strong>(%s)</strong> invitations peut être demandé.<br>Vous êtes responsable de l’invité s’il fait quelque chose de mal.',
	'UCP_JV_INVITE_KULDES'						=> 'Envoyer une invitation',
	'UCP_JV_INVITE_KULDES_EMAIL_MAX'			=> 'Un maximum de %s adresses e-mail peut être utilisé. Cependant, vous avez répertorié %s.',
	'UCP_JV_INVITE_KULDES_MAX'					=> '<span class="jv_invite_tred">Actuellement, il n’y a pas de limite.</span>',
	'UCP_JV_INVITE_MAX'							=> 'Vous avez spécifié plus de destinataires que vous n’en avez invités.',
	'UCP_JV_INVITE_MAX_ERROR'					=> 'Actuellement, vous avez un nombre illimité d’invitations.',
	'UCP_JV_INVITE_MAX_RECIPIENTS'				=> 'Écrivez chaque adresse sur une nouvelle ligne<br>\le nombre maximum de destinataires',
	'UCP_JV_INVITE_MESSAGE_BODY_EXPLAIN'		=> 'Écrivez quelques lignes pour expliquer pourquoi vous aimeriez l’avoir comme membre sur le site.',
	'UCP_JV_INVITE_MIN_MEM_DAYS_ERROR'			=> 'Je suis désolé, mais vous ne pouvez pas envoyer d’invitations.<br>Raison : %s jours ne se sont pas écoulés depuis votre inscription.<br>L’envoi d’invitations sera disponible sur %s.',
	'UCP_JV_INVITE_NOTIFICATION_TYPE_MANAGE'	=> 'Quelqu’un modifie le nombre d’invitations.',
	'UCP_JV_INVITE_NOT_DELETED_INVITE'			=> 'Vous n’avez aucune invitation à supprimer!',
	'UCP_JV_INVITE_NOT_FOUND'					=> 'L’invitation est introuvable.',
	'UCP_JV_INVITE_NOT_RESTORED_INVITE'			=> 'Il n’y a pas d’invitation à restaurer.',
	'UCP_JV_INVITE_NO_EMAIL'					=> 'Vous n’avez pas fourni d’adresse e-mail.',
	'UCP_JV_INVITE_NO_INVITED_USER'				=> 'Personne n’a été invité par vous.',
	'UCP_JV_INVITE_NO_LOGIN'					=> 'Il/elle n’est pas inscrit sur ce site.',
	'UCP_JV_INVITE_NO_PERM_EMAIL'				=> 'Vous n’êtes pas autorisé à envoyer des e-mails!',
	'UCP_JV_INVITE_NULL'						=> 'Vous n’avez pas d’invitations.',
	'UCP_JV_INVITE_POINTS_AMOUNT'				=> 'Montant du cadeau',
	'UCP_JV_INVITE_POINTS_AMOUNT_EXPLAIN'		=> 'Le montant du cadeau pour le membre que vous avez invité et enregistré.',
	'UCP_JV_INVITE_POINTS_COST'					=> 'Prix d’invitation',
	'UCP_JV_INVITE_POINTS_COST_EXPLAIN'			=> 'Le prix de l’envoi d’une invitation.',
	'UCP_JV_INVITE_POST_LIMIT'					=> 'Vous devez avoir au moins %s messages pour envoyer une invitation',
	'UCP_JV_INVITE_REST'						=> 'Restaurer',
	'UCP_JV_INVITE_RESTORE'						=> 'Restaurer les invitations',
	'UCP_JV_INVITE_RESTORE_EXPLAIN'				=> 'Ici, vous avez la possibilité de restaurer les invitations supprimées accidentellement.',
	'UCP_JV_INVITE_RESTORE_NO_CONFIRM'			=> 'La restauration n’a pas été confirmée.',
	'UCP_JV_INVITE_RESTORE_SUCCES'				=> [
		1										=> 'L’invitation a été restaurée avec succès.',
		2 										=> 'Les invitations ont été restaurées avec succès.',
	],
	'UCP_JV_INVITE_SEND_SUBMIT'					=> 'Envoyer une invitation',
	'UCP_JV_INVITE_TIME_END'					=> 'Date d’expiration',
	'UCP_JV_INVITE_TIME_END_EXPLAIN'			=> 'Le temps pendant lequel l’utilisateur invité doit utiliser son invitation.',
	'UCP_JV_INVITE_UT_REG'						=> 'Dernier utilisateur',
	'UCP_JV_INVITE_UT_REG_EXPLAIN'				=> 'Le dernier utilisateur invité.',
	'UCP_JV_INVITE_UT_REG_INFO'					=> '<strong>%s</strong> inscrit %s',
	'UCP_JV_JV_INVITE_MEMBER_LIST_EXPLAIN'		=> [
		1										=> 'Vous pouvez voir le membre que vous avez invité.',
		2										=> 'Vous pouvez voir les membres que vous avez invités.',
	],
]);
