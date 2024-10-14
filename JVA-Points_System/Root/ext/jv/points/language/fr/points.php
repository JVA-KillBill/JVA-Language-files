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
	'JV_POINTS_ADD_USER_EXPLAIN'			=> 'Saisissez le nom de l’utilisateur dont vous souhaitez modifier le solde.',
	'JV_POINTS_ALL_TRANSFER'				=> 'Tous les transferts',
	'JV_POINTS_AMOUNT'						=> 'Montant',
	'JV_POINTS_AMOUNT_USER_EXPLAIN'			=> 'Entrez le nombre de points que vous souhaitez ajouter pour modifier le solde de l’utilisateur.',
	'JV_POINTS_ATTACH_DOWNLOAD_NO_POINTS'	=> 'Vous n’avez pas assez de « %s » pour télécharger ce fichier.',
	'JV_POINTS_BALANCE'						=> 'Solde.',
	'JV_POINTS_CHANGE'						=> 'Change montant',
	'JV_POINTS_CHANGE_TITLE'				=> 'Modifier le montant de l’utilisateur.',
	'JV_POINTS_CONTROL_PANEL'				=> 'Panneau de contrôle du système de points.',
	'JV_POINTS_COST'						=> 'Coût',
	'JV_POINTS_COSTS'						=> 'Des coûts',
	'JV_POINTS_DISABLED'					=> 'Le système de points est actuellement désactivé.',
	'JV_POINTS_ERROR_MINUS_VALUE'			=> 'Le nombre de points spécifié n’est pas la valeur minimale.',
	'JV_POINTS_ERROR_TRANSFER_BALANCE'		=> 'Votre montant ne couvre pas le montant que vous souhaitez transférer.',
	'JV_POINTS_ERROR_TRANSFER_BALANCE_COST'	=> 'Votre montant ne couvre pas le montant que vous souhaitez transférer et ses frais.',
	'JV_POINTS_ERROR_ZERO_VALUE'			=> 'Le montant ne peut pas être nul.',
	'JV_POINTS_FAQ'							=> 'FAQ',
	'JV_POINTS_FAQ_VIEWING'					=> 'Consulter le guide du système de points',
	'JV_POINTS_GUIDE'						=> 'Guide du système de points',
	'JV_POINTS_INFO'						=> 'Information.',
	'JV_POINTS_INFO_EXPLAIN'				=> 'Ici, vous pouvez lire les paramètres actuels, pourquoi une récompense et quels sont les coûts. Gardez à l’esprit qu’un administrateur peut modifier ces paramètres à tout moment.',
	'JV_POINTS_INFO_TITLE'					=> 'Des renseignements généraux.',
	'JV_POINTS_INFO_VIEWING'				=> 'Afficher les paramètres généraux du système de points.',
	'JV_POINTS_LOGIN_EXPLAIN'				=> 'vous devez être connecté pour afficher le panneau de contrôle du système de points.',
	'JV_POINTS_MAIN'						=> 'Aperçu',
	'JV_POINTS_MAIN_EXPLAIN'				=> 'Bonjour %s!<br><br>Montant actuel : %s.',
	'JV_POINTS_MAIN_TITLE'					=> 'Utilisateurs avec le plus de montant',
	'JV_POINTS_MODIFY'						=> 'Changer',
	'JV_POINTS_MORE_INFO_HERE'				=> 'Plus d’information %sICIs.',
	'JV_POINTS_NEW_ATTACHS_COST_EXPLAIN'	=> 'Le coût du téléchargement s’applique aux extensions de fichiers suivantes : « %s ».',
	'JV_POINTS_NEW_ATTACH_COST'				=> 'Frais de téléchargement des pièces jointes',
	'JV_POINTS_NEW_ATTACH_COST_EXPLAIN'		=> 'Le coût de téléchargement s’applique à l’extension de fichier suivante : « %s ».',
	'JV_POINTS_NEW_POST_COST'				=> 'Coût de rédaction du message.',
	'JV_POINTS_NEW_POST_REWARD'				=> 'Écrire un nouveau message récompense',
	'JV_POINTS_NEW_TOPIC_REWARD'			=> 'Récompense de nouveau sujet',
	'JV_POINTS_NOTIFICATION_CHANGE_ADD'		=> 'Utilisateur %s a ajouté un montant à votre compte.<br>Montant ajouté : %s.',
	'JV_POINTS_NOTIFICATION_CHANGE_SET'		=> 'Utilisateur %s a changé votre montant.<br>Nouvel solde : %s.',
	'JV_POINTS_NOTIFICATION_CHANGE_SUB'		=> 'Utilisateur %s a déduit un montant de votre compte.<br>Montant déduit : %s.',
	'JV_POINTS_NOTIFICATION_SET'			=> 'Utilisateur %s a changé votre solde.<br>Ancien solde: %s<br>Nouvel solde : %s.',
	'JV_POINTS_NOTIFICATION_TRANSFER'		=> 'Utilisateur %s vous a fait un don de %s.',
	'JV_POINTS_NO_TRANSFER_LOG'				=> 'Aucun transfert n’a encore été effectué',
	'JV_POINTS_NO_USER'						=> 'Actuellement, le montant de chaque utilisateur est de zéro.',
	'JV_POINTS_RECEIVED'					=> 'Reçu',
	'JV_POINTS_REG_START_BALANCE'			=> 'Montant de départ nouvellement enregistré',
	'JV_POINTS_REWARDS'						=> 'Récompenses',
	'JV_POINTS_SENT'						=> 'Envoie',
	'JV_POINTS_SORT_AMOUNT'					=> 'Montant du don',
	'JV_POINTS_SORT_DATE'					=> 'Date d’expédition',
	'JV_POINTS_SORT_FROM'					=> 'De',
	'JV_POINTS_SORT_TO'						=> 'Vers',
	'JV_POINTS_SORT_TYPE'					=> 'Type d’envoi',
	'JV_POINTS_TRANSFER'					=> 'Transfert',
	'JV_POINTS_TRANSFER_AMOUNT'				=> 'Montant à transférer',
	'JV_POINTS_TRANSFER_AMOUNT_EXPLAIN'		=> 'Entrez le montant que vous souhaitez transférer.',
	'JV_POINTS_TRANSFER_COST'				=> 'Frais de transfert',
	'JV_POINTS_TRANSFER_COST_EXPLAIN'		=> 'Les frais de transfert s’élèvent à %1$s pour cent. Si vous effectuez un virement, le montant que vous souhaitez virer et %1$s pour cent seront déduits de votre montant.',
	'JV_POINTS_TRANSFER_LOG'				=> 'Journal de transfert',
	'JV_POINTS_TRANSFER_TITLE'				=> 'Transférer un montant spécifique à un autre utilisateur',
	'JV_POINTS_TRANSFER_TITLE_EXPLAIN'		=> 'Entrez le nom de l’utilisateur vers lequel vous souhaitez transférer.',
	'JV_POINTS_TRANSFER_YOURSELF_ERROR'		=> 'Vous ne pouvez pas déposer de montant pour vous-même.',
	'JV_POINTS_USER_CHANGED_SUCCESS'		=> 'Le montant d’utilisateur « %s » a été modifié avec succès.',
	'JV_POINTS_USER_TRANSFER_SUCCESS'		=> 'Le transfert à l’utilisateur « %s » a été complété avec succès.',
	'JV_POINTS_VIEWING'						=> 'Regarde le panneau de configuration du système de points',
	'JV_POINTS_WRITE_POST_NO_POINTS'		=> 'Tu n’as pas assez de « %s » pour écrire un nouveau message.',

	'JVA_CORE_EXT_NOT_FOUND'				=> 'L’extension ne peut pas être activée car l’extension « JVA - Core » est introuvable!',
));
