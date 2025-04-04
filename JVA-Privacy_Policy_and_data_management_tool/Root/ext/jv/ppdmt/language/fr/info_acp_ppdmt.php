<?php
/**
*
* @package JVA - Privacy Policy and data management tool
* @version $Id$
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

$lang = array_merge($lang, [
	'ACP_CAT_JVPPDMT'							=> 'Politique de confidentialité et outil de gestion des données',
	'ACP_JVPPDMT'								=> 'JVA - Privacy Policy and data management tool',
	'ACP_JVPPDMT_CONTROLLER_NAME'				=> 'Nom du contrôleur',
	'ACP_JVPPDMT_CONTROLLER_NAME_EXPLAIN'		=> 'Nom complet du contrôleur.',
	'ACP_JVPPDMT_CONTROLLER_PHONE'				=> 'Numéro de téléphone du contrôleur',
	'ACP_JVPPDMT_CONTROLLER_PHONE_EXPLAIN'		=> 'Le RGPD exige qu’au moins deux contacts soient fournis, l’un doit être l’adresse e-mail pour le contact et le second un numéro de téléphone comme contact rapide.<br><em>Entrez le numéro de téléphone du contrôleur ainsi que le code du pays. Exemple Belgique: +32 …</em>',
	'ACP_JVPPDMT_COOIKE_INFO'					=> 'Afficher les informations sur les cookies',
	'ACP_JVPPDMT_COOIKE_INFO_EXPLAIN'			=> 'Si cette option est activée, toute personne qui n’a pas accepté le stockage de cookies verra des informations indiquant que de nombreuses fonctionnalités ne lui sont pas disponibles. De plus, les informations incluent un lien qui les dirige vers leurs paramètres de données personnelles.',
	'ACP_JVPPDMT_GLOBAL_SETTINGS'				=> 'Politique de confidentialité et paramètres des outils de gestion des données',
	'ACP_JVPPDMT_GLOBAL_SETTINGS_EXPLAIN'		=> 'Ici, vous pouvez permettre aux utilisateurs de voir et d’accepter la politique de confidentialité. De plus, vous avez la possibilité de permettre aux utilisateurs de supprimer leur propre inscription.',
	'ACP_JVPPDMT_HIDE_USERNAME_BOT'				=> 'Masquer les noms d’utilisateur des robots',
	'ACP_JVPPDMT_HIDE_USERNAME_GUEST'			=> 'Masquer les noms d’utilisateur des invités',
	'ACP_JVPPDMT_LAST_RESET_DATE'				=> 'Dernière date de réinitialisation: %s',
	'ACP_JVPPDMT_PRIVACY_POLICY_ENABLE'			=> 'Politique de confidentialité',
	'ACP_JVPPDMT_PRIVACY_POLICY_ENABLE_EXPLAIN'	=> 'Si vous l’activez, les utilisateurs verront la politique de confidentialité avec la possibilité de l’accepter.',
	'ACP_JVPPDMT_RESET'							=> 'Réinitialiser l acceptation de la politique de confidentialité',
	'ACP_JVPPDMT_RESET_CONFIRM'					=> 'Êtes-vous sûr de vouloir réinitialiser l’acceptation de la politique de confidentialité?',
	'ACP_JVPPDMT_RESET_EXPLAIN'					=> 'Si vous modifiez la politique de confidentialité, démarrez ce processus en demandant aux utilisateurs de relire et d’accepter la nouvelle politique de confidentialité.',
	'ACP_JVPPDMT_RESET_SUCCESS'					=> 'La réinitialisation de la politique de confidentialité a réussi.',
	'ACP_JVPPDMT_SETTINGS'						=> 'Paramètres',
	'ACP_JVPPDMT_TERM_OF_USE_RESET'				=> 'Réinitialiser l’acceptation des conditions d’utilisation',
	'ACP_JVPPDMT_TERM_OF_USE_RESET_CONFIRM'		=> 'Voulez-vous vraiment réinitialiser l’acceptation des conditions d’utilisation?',
	'ACP_JVPPDMT_TERM_OF_USE_RESET_EXPLAIN'		=> 'Si vous avez modifié les conditions d’utilisation, recommencez ce processus en demandant aux utilisateurs de lire et d’accepter les nouvelles conditions d’utilisation.',
	'ACP_JVPPDMT_TERM_OF_USE_RESET_SUCCESS'		=> 'La réinitialisation des conditions d’utilisation a réussi..',
	'ACP_JVPPDMT_USE_COOKIE_GUEST'				=> 'Utilisation de cookies pour les invités',
	'ACP_JVPPDMT_USE_COOKIE_GUEST_EXPLAIN'		=> 'Si cette option est désactivée, les invités ne pourront pas utiliser de cookies, de sorte que la politique de confidentialité n’a pas à être acceptée par les invités.',
	'ACP_JVPPDMT_VIEWER_GROUP'					=> 'Groupe de téléspectateurs',
	'ACP_JVPPDMT_VIEWER_GROUP_EXPLAIN'			=> 'L’extension créera un nouveau groupe spécial appelé <strong>« Téléspectateurs enregistrés »</strong>. Ce groupe protège les droits des utilisateurs qui n’acceptent pas le stockage de données personnelles supplémentaires. Veuillez noter que le contrôleur doit toujours faire attention aux droits de ce groupe pour qu’ils soient toujours correctement définis. Le contrôleur doit créer des rôles spéciaux pour ce groupe. L’éligibilité doit toujours être définie de manière à ce qu’un utilisateur de ce groupe ne puisse pas soumettre un formulaire n’importe où. Veuillez noter que lorsque vous créez un nouveau forum, n’oubliez pas de mettre à jour les autorisations de ce groupe. Dans ce cas, il est bon de définir ce groupe d’autorisations pour que l’utilisateur ne puisse que parcourir et rien d’autre. Assurez-vous de toujours définir le champ d’autorisations<strong>« JAMAIS »</strong> pour d’autres actions, car c’est le seul moyen de remplacer les droits d’accès de l’utilisateur à partir d’autres appartenances au groupe. Si vous laissez ce groupe désactivé, si les utilisateurs n’acceptent pas le stockage de données personnelles, ils seront redirigés pour supprimer leur inscription.',
	'ACP_JVPPDMT_VIEWER_GROUP_INFO'				=> 'Afficher les informations du groupe de téléspectateurs',
	'ACP_JVPPDMT_VIEWER_GROUP_INFO_EXPLAIN'		=> 'Lorsque cette option est activée, les utilisateurs du groupe de téléspectateurs verront des informations indiquant qu’ils font partie du groupe de téléspectateurs et n’ont pas l’autorisation de soumettre un formulaire. De plus, les informations incluent un lien qui les dirige vers leurs paramètres de données personnelles.',
	'ACP_JVPPDMT_YOUR_PP_FILE'					=> 'Propre nom de fichier pour la politique de confidentialité',
	'ACP_JVPPDMT_YOUR_PP_FILE_EXPLAIN'			=> 'Ici, vous avez la possibilité d’entrer le nom de votre propre fichier de langue qui contient votre politique de confidentialité modifiée. Ceci est nécessaire si vous souhaitez modifier le texte et ne pas le perdre lorsque vous mettez à jour le’xtension en écrasant les fichiers. Téléchargez votre propre fichier sur le [ROOT]/ext/jv/ppdmt/language/FR/ fichier de langue. Par exemple, si le nom est « pp », il doit se trouver dans [ROOT]/ext/jv/ppdmt/language/FR/pp.php. Notez également que les caractères de remplacement dans %1$s ... %5$s dans le fichier de langue ne peut pas être supprimé et que la variable de langue doit également être la même. Le moyen le plus simple d’éviter une erreur est de copier le fichier privacy_policy.php d’origine, de le renommer et de modifier le texte dans le fichier renommé.',

	'LOG_JVPPDMT_DOWNLOAD_PRIVACY_DATA'			=> '<strong>Télécharger les données de confidentialité</strong>',
	'LOG_JVPPDMT_DOWNLOAD_PRIVACY_PMS'			=> '<strong>Télécharger les messages privés de confidentialité</strong>',
	'LOG_JVPPDMT_DOWNLOAD_PRIVACY_POSTS'		=> '<strong>Télécharger les messages de confidentialité</strong>',
	'LOG_JVPPDMT_PRIVACY_SETTINGS'				=> '<strong>Paramètres de confidentialité modifiés</strong>',
	'LOG_JVPPDMT_RESET'							=> '<strong>Réinitialiser la politique de confidentialité</strong>',
	'LOG_JVPPDMT_SETTINGS'						=> '<strong>Paramètres modifiés pour la politique de confidentialité et les outils de gestion des données</strong>',
	'LOG_JVPPDMT_TERM_OF_USE_RESET'				=> '<strong>Réinitialiser les conditions d’utilisation</strong>',
]);
