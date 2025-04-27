<?php
/**
*
* @package JVA - Points System
* @version $Id: info_acp_points.php 953 2021-05-02 05:18:36Z KillBill $
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
	'JV_ACP_CAT_POINTS'										=> 'Système de points',
	'JV_ACP_POINTS'											=> 'JVA - Points System',
	'JV_ACP_POINTS_ADD'										=> 'Ajouter',
	'JV_ACP_POINTS_AFTER'									=> 'Après',
	'JV_ACP_POINTS_AMOUNT_USERS_EXPLAIN'					=> 'Saisissez le montant par lequel vous souhaitez ajuster le solde des utilisateurs.',
	'JV_ACP_POINTS_BEFORE'									=> 'Avant',
	'JV_ACP_POINTS_DELETE_SELECTED_TRANSFER_LOG_SUCCESS'	=> 'Entrées de transfert sélectionnées supprimées avec succès.',
	'JV_ACP_POINTS_DELETE_TRANSFER_LOG_CONFIRM'				=> 'Êtes-vous sûr de vouloir supprimer les entrées de journal ?<br><em>Veuillez noter qu’une fois supprimées, les données ne peuvent pas être récupérées et les utilisateurs ne pourront plus accéder à ces entrées de journal.</em>',
	'JV_ACP_POINTS_DELETE_TRANSFER_LOG_SUCCESS'				=> 'Journal de transfert supprimé avec succès.',
	'JV_ACP_POINTS_DISPLAY_MEMBERLIST'						=> 'Afficher le solde dans la liste des membres',
	'JV_ACP_POINTS_DISPLAY_MEMBERLIST_EXPLAIN'				=> 'Si vous l’activez, les soldes des utilisateurs seront affichés dans la liste des membres.',
	'JV_ACP_POINTS_DISPLAY_TOP_USERS'						=> 'Afficher les utilisateurs le plus riches',
	'JV_ACP_POINTS_DISPLAY_TOP_USERS_EXPLAIN'				=> 'Si vous l’activez, les utilisateurs avec le solde le plus élevé seront affichés sous l’onglet « Panneau de configuration du système de points/Aperçu ».',
	'JV_ACP_POINTS_ENABLE'									=> 'Système de points activé',
	'JV_ACP_POINTS_ENABLE_EXPLAIN'							=> 'Autoriser les utilisateurs à utiliser le système de points.',
	'JV_ACP_POINTS_ERROR_NO_FUNCTION'						=> 'Vous n’avez pas spécifié de fonction.',
	'JV_ACP_POINTS_ERROR_ZERO_VALUE'						=> 'Le montant saisi ne peut pas être nul.',
	'JV_ACP_POINTS_GROUPS_CHANGED_SUCCESS'					=> 'Les soldes de tous les utilisateurs ont été modifiés dans le(s) groupe(s) « %s ».',
	'JV_ACP_POINTS_GROUP_ALL_USERS'							=> 'Tous les utilisateurs du groupe',
	'JV_ACP_POINTS_GROUP_ALL_USERS_EXPLAIN'					=> 'La sélection de «non» s’applique uniquement aux utilisateurs dont le groupe sélectionné est également le groupe par défaut.',
	'JV_ACP_POINTS_GROUP_CHANGED_SUCCESS'					=> 'Groupe « %s » a réussi à modifier l’équilibre de tous les utilisateurs.',
	'JV_ACP_POINTS_LOG_FORMAT_GROUP'						=> 'Format du journal',
	'JV_ACP_POINTS_LOG_FORMAT_GROUP_EXPLAIN'				=> 'Ici, vous pouvez spécifier si l’entrée de journal doit contenir des noms de groupe ou des noms d’utilisateur.',
	'JV_ACP_POINTS_MANAGE_GROUPS'							=> 'Gérer les groupes',
	'JV_ACP_POINTS_MANAGE_USER'								=> 'Gestion d’utilisateur',
	'JV_ACP_POINTS_MANAGE_USERS'							=> 'Gestion des utilisateurs',
	'JV_ACP_POINTS_MANAGE_USERS_EXPLAIN'					=> 'Ici, vous pouvez modifier le solde des utilisateurs. Des modifications individuelles, d’utilisateurs multiples et de groupe sont également possibles.',
	'JV_ACP_POINTS_MANAGE_USER_EXPLAIN'						=> 'Ici, vous pouvez modifier le solde de l’utilisateur.',
	'JV_ACP_POINTS_NAME'									=> 'Nom des points',
	'JV_ACP_POINTS_NAME_COLOR'								=> 'Couleur du nom des points',
	'JV_ACP_POINTS_NAME_COLOR_EXPLAIN'						=> 'Si vous souhaitez changer la couleur du « Nom des points », vous pouvez le faire ici.',
	'JV_ACP_POINTS_NAME_EXPLAIN'							=> 'Le nom saisi sur le site est utilisé par le système de points.',
	'JV_ACP_POINTS_NAME_POS'								=> 'Position du nom des points',
	'JV_ACP_POINTS_NAME_POS_EXPLAIN'						=> 'Ici, vous pouvez indiquer si le « Nom des points » doit être avant ou après le montant.',
	'JV_ACP_POINTS_NEW_ATTACH_EXT'							=> 'Choisissez les extensions de fichiers',
	'JV_ACP_POINTS_NEW_ATTACH_EXT_EXPLAIN'					=> 'Les extensions de fichiers sélectionnées ne s’appliquent qu’aux frais de téléchargement.',
	'JV_ACP_POINTS_SELECT_FUNC'								=> 'Fonction de réponse :',
	'JV_ACP_POINTS_SELECT_GROUPS_NO_USER'					=> 'Il n’y a aucun utilisateur dans les groupes sélectionnés.',
	'JV_ACP_POINTS_SELECT_GROUP_NO_USER'					=> 'Il n’y a pas des utilisateurs dans le groupe sélectionné.',
	'JV_ACP_POINTS_SET'										=> 'Fixe',
	'JV_ACP_POINTS_SETTINGS'								=> 'paramètres généraux',
	'JV_ACP_POINTS_SUBTRACT'								=> 'Déduction',
	'JV_ACP_POINTS_TRANSFER'								=> 'Activer le module de transfert',
	'JV_ACP_POINTS_TRANSFER_EXPLAIN'						=> 'Ici, vous pouvez activer l’utilisation du module de déviation. Les utilisateurs ont la possibilité de transférer un certain montant entre eux.',
	'JV_ACP_POINTS_TRANSFER_LOG'							=> 'Gestion des journaux de transfert',
	'JV_ACP_POINTS_TRANSFER_LOG_EXPLAIN'					=> 'Ici, vous pouvez voir tous les transferts et avoir la possibilité de supprimer des entrées de journal.',
	'JV_ACP_POINTS_USERS_CHANGED_SUCCESS'					=> 'Le solde des utilisateurs « %s » a été modifié avec succès.',
	'JV_ACP_POINTS_USERS_DEFAULT_GROUPS_CHANGED_SUCCESS'	=> 'Les montants des groupes d’utilisateur par défaut.',
	'JV_ACP_POINTS_USERS_DEFAULT_GROUP_CHANGED_SUCCESS'		=> 'Les montants de groupe d’utilisateur « %s » ont été modifiés avec succès.',
	'JV_LOG_POINTS_ADD_GROUP'								=> '<strong>Ajouter un montant pour tous les utilisateurs au groupe suivant : %s</strong><br>» Montant ajouté : %s',
	'JV_LOG_POINTS_ADD_GROUPS'								=> '<strong>Ajoutez un montant pour tous les utilisateurs des groupes suivants : %s</strong><br>» Montant ajouté : %s',
	'JV_LOG_POINTS_ADD_USER'								=> '<strong>Ajouter un montant au prochain utilisateur: %s</strong><br>» Montant ajouté : %s',
	'JV_LOG_POINTS_ADD_USERS'								=> '<strong>Ajoutez un montant pour les utilisateurs suivants : %s</strong><br>» Montant ajouté : %s',
	'JV_LOG_POINTS_ADD_USERS_DEFAULT_GROUP'					=> '<strong>Ajouter un montant pour les utilisateurs standard au groupe suivant : %s</strong><br>» Montant ajouté : %s',
	'JV_LOG_POINTS_ADD_USERS_DEFAULT_GROUPS'				=> '<strong>Ajoutez un montant pour les utilisateurs standard aux groupes suivants : %s</strong><br>» Montant ajouté : %s',
	'JV_LOG_POINTS_CLEAR_TRANSFER_LOG'						=> '<strong>Effacer le journal de transfert du système de points.</strong>',
	'JV_LOG_POINTS_SET_GROUP'								=> '<strong>Définir un montant pour tous les utilisateurs pour le groupe suivant : %s</strong><br>» Montant fixé : %s',
	'JV_LOG_POINTS_SET_GROUPS'								=> '<strong>Définir un montant pour tous les utilisateurs pour les groupes suivants : %s</strong><br>» Montant fixé : %s',
	'JV_LOG_POINTS_SET_USER'								=> '<strong>Fixez un montant pour le prochain utilisateur : %s</strong><br>» Montant fixé : %s',
	'JV_LOG_POINTS_SET_USERS'								=> '<strong>Fixez un montant pour les utilisateurs suivant s: %s</strong><br>» Montant fixé : %s',
	'JV_LOG_POINTS_SET_USERS_DEFAULT_GROUP'					=> '<strong>Définir un montant pour les utilisateurs standard pour le groupe suivant : %s</strong><br>» Montant fixé : %s',
	'JV_LOG_POINTS_SET_USERS_DEFAULT_GROUPS'				=> '<strong>Définir un montant pour les utilisateurs standard pour les groupes suivants : %s</strong><br>» Montant fixé : %s',
	'JV_LOG_POINTS_SUBTRACT_GROUP'							=> '<strong>Soustraire un montant pour tous les utilisateurs du groupe suivant : %s</strong><br>» Montant déduit : %s',
	'JV_LOG_POINTS_SUBTRACT_GROUPS'							=> '<strong>Soustraire un montant pour tous les utilisateurs des groupes suivants : %s</strong><br>» Montant déduit : %s',
	'JV_LOG_POINTS_SUBTRACT_USER'							=> '<strong>Soustraire le montant suivant à l’utilisateur suivant : %s</strong><br>» Montant déduit : %s',
	'JV_LOG_POINTS_SUBTRACT_USERS'							=> '<strong>Soustraire le montant suivant aux utilisateurs suivants : %s</strong><br>» Montant déduit : %s',
	'JV_LOG_POINTS_SUBTRACT_USERS_DEFAULT_GROUP'			=> '<strong>Soustraire le montant pour les utilisateurs standard du groupe suivant : %s</strong><br>» Montant déduit : %s',
	'JV_LOG_POINTS_SUBTRACT_USERS_DEFAULT_GROUPS'			=> '<strong>Soustrayez le montant pour les utilisateurs standard des groupes suivants : %s</strong><br>» Montant déduit : %s',
	'JV_LOG_POINTS_USER_CHANGED'							=> '<strong>%s modifier le solde de l’utilisateur. Solde d’origine : %s</strong><br>» Nouvel montant : %s',
	'JV_POINTS_NEW_ATTACH_COST_EXPLAIN'						=> 'Si un utilisateur télécharge une pièce jointe, ce montant sera déduit.',
	'JV_POINTS_NEW_POST_COST_EXPLAIN'						=> 'Lorsqu’un utilisateur écrit un nouveau message, ce montant sera déduit.',
	'JV_POINTS_NEW_POST_REWARD_EXPLAIN'						=> 'Si un utilisateur écrit un nouveau message, il recevra cette récompense.<br><em>Remarque : Cette récompense sera donnée à l’utilisateur même s’il ouvre un nouveau sujet.</em>',
	'JV_POINTS_NEW_TOPIC_REWARD_EXPLAIN'					=> 'Si un utilisateur ouvre un nouveau sujet, il recevra cette récompense.',
	'JV_POINTS_REG_START_BALANCE_EXPLAIN'					=> 'Lorsqu’un nouveau membre s’inscrit sur le site Web, il s’agit de son solde de départ.',
	'JV_POINTS_TRANSFER_COST_EXPLAIN'						=> 'Un certain pourcentage du montant que vous souhaitez transférer.',
));
