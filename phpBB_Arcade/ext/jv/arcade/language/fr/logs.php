<?php
/**
*
* @package phpBB Arcade
* @version $Id: logs.php 173 2024-01-14 12:28:15Z KillBill $
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

//Arcade
$lang = array_merge($lang, [
	'ARCADE_SCORE_ERR_GAME_HACK'					=> 'Détection de piratage de jeu',
	'ARCADE_SCORE_ERR_GG'							=> 'code de jeu incorrect reçu',
	'ARCADE_SCORE_ERR_GG_RANDCHAR'					=> 'code de jeu non reçu',
	'ARCADE_SCORE_ERR_GS'							=> 'code de score incorrect reçu',
	'ARCADE_SCORE_ERR_GS_GG_RANDCHAR'				=> 'code de jeu et score non reçu',
	'ARCADE_SCORE_ERR_GS_RANDCHAR'					=> 'code de score non reçu',
	'ARCADE_SCORE_ERR_GS_VARIABLE'					=> 'variable de score non reçue',
	'ARCADE_SCORE_ERR_MICRO_TIME'					=> 'dépassé le temps de contrôle',
	'ARCADE_SCORE_ERR_PCH'							=> 'code de variable de score incorrect reçu',
	'ARCADE_SCORE_ERR_SAVE_TYPE'					=> 'Le type de sauvegarde configuré n’a pas été utilisé',
	'ARCADE_SCORE_ERR_SEC_SESS'						=> 'Session de sécurité incorrecte reçue',

	'LOG_ACL_ADD_CATEGORY_LOCAL_C_'					=> '<strong>Autorisations de catégorie ajoutées ou modifiées</strong> à partir de %1$s<br>» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_C_'					=> '<strong>Accès à la catégorie des groupes ajoutés ou modifiés</strong> à partir de %1$s<br>» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_C_'						=> '<strong>Accès aux catégories d’utilisateurs ajoutés ou modifiés</strong> à partir de %1$s<br>» %2$s',
	'LOG_ACL_ARCADE_RESTORE_PERMISSIONS'			=> '<strong>Autorisations propres restaurées après avoir utilisé les autorisations de</strong><br>» %s',
	'LOG_ACL_ARCADE_TRANSFER_PERMISSIONS'			=> '<strong>Autorisations transférées depuis</strong><br>» %s',
	'LOG_ACL_DEL_CATEGORY_LOCAL_C_'					=> '<strong>Autorisations de catégorie Utilisateur/Groupe supprimées</strong> à partir de %1$s<br>» %2$s',
	'LOG_ARCADE_ADD_CAT'							=> '<strong>Nouvelle catégorie créée</strong><br>» %s',
	'LOG_ARCADE_ADD_GAME'							=> [
		1											=> '<strong>Ajoute un jeu à la catégorie %s.</strong><br>» %s',
		2											=> '<strong>Ajoute des jeux à la catégorie %s.</strong><br>» %s',
	],
	'LOG_ARCADE_ALL_ANNOUNCE_RESTORE_DEFAULT_DATA'	=> '<strong>Toutes les données par défaut de l’annonce ont été restaurées</strong>',
	'LOG_ARCADE_ANNOUNCE_CREATE_DB_DATA'			=> '<strong>« %s » crée un message dans la base de données</strong><br>» Langue : %s',
	'LOG_ARCADE_ANNOUNCE_GENERAL_SETTINGS'			=> '<strong>Paramètres généraux de l’annonce modifiés</strong>',
	'LOG_ARCADE_ANNOUNCE_RESET'						=> '<strong>Réinitialiser le forum d’annonce</strong><br>» %s',
	'LOG_ARCADE_ARCADE_PM'							=> '<strong>Message privé d’arcade modifié</strong><br>» Langue : %s',
	'LOG_ARCADE_ARCADE_SUPER_CHAMPION_PM'			=> '<strong>Message privé modifié « titre de super champion perdu »</strong><br>» Langue : %s',
	'LOG_ARCADE_AUTO_RESET_SCORE'					=> '<strong>Réinitialise automatiquement les scores</strong>',
	'LOG_ARCADE_AUTO_RESET_SCORE_RP'				=> '<strong>Réinitialise automatiquement les scores en conservant le nombre de fois joué</strong>',
	'LOG_ARCADE_AUTO_RESET_SCORE_SS'				=> '<strong>Réinitialise automatiquement les scores et les super champions</strong>',
	'LOG_ARCADE_AUTO_RESET_SCORE_SS_RP'				=> '<strong>Réinitialise automatiquement les scores et les super champions en conservant le nombre de fois joué</strong>',
	'LOG_ARCADE_AUTO_RESET_SCORE_SETTINGS'			=> '<strong>Modification automatique des paramètres de scores</strong>',
	'LOG_ARCADE_BACKUP_CAT'							=> [
		1											=> '<strong>Catégorie sauvegardée</strong><br>» %s',
		2											=> '<strong>Catégories sauvegardées</strong><br>» %s',
	],
	'LOG_ARCADE_BACKUP_EMPTY'						=> '<strong>Répertoire de sauvegarde vidé</strong>',
	'LOG_ARCADE_CATEGORY_COPIED_PERMISSIONS'		=> '<strong>Autorisations de catégorie copiées</strong> à partir de %1$s<br>» %2$s',
	'LOG_ARCADE_CAT_EDIT'							=> '<strong>Détails de la catégorie modifiés</strong><br>» %s',
	'LOG_ARCADE_CHALLENGE'							=> '<strong>Paramètres du défi modifiés</strong>',
	'LOG_ARCADE_CHALLENGE_ACCEPT_PM'				=> '<strong>Défi modifié « accepter » message privé</strong><br>» Langue : %s',
	'LOG_ARCADE_CHALLENGE_FINAL_LOSER_PM'			=> '<strong>Défi modifié « final/perdant » message privé</strong><br>» Langue : %s',
	'LOG_ARCADE_CHALLENGE_FINAL_TIE_PM'				=> '<strong>Défi modifié « finale/égalité » message privé</strong><br>» Langue : %s',
	'LOG_ARCADE_CHALLENGE_FINAL_WINNER_PM'			=> '<strong>Défi modifié « final/gagnant » message privé</strong><br>» Langue : %s',
	'LOG_ARCADE_CHALLENGE_PM'						=> '<strong>Message privé de défi modifié</strong><br>» Langue : %s',
	'LOG_ARCADE_CHALLENGE_REJECT_PM'				=> '<strong>Défi modifié « rejeté » message privé</strong><br>» Langue : %s',
	'LOG_ARCADE_CHALLENGE_REPORT_GAME_PM'			=> '<strong>Défi modifié « rapport de jeu de bug » message privé</strong><br>» Langue : %s',
	'LOG_ARCADE_CHALLENGE_WITHDRAW_PM'				=> '<strong>Défi modifié « retirer » message privé</strong><br>» Langue : %s',
	'LOG_ARCADE_CHAMPIONS_GAME_ANNOUNCE'			=> '<strong>Annonce des meilleurs joueurs modifiés</strong><br>» Langue : %s',
	'LOG_ARCADE_CLEAR_ADMIN_LOG'					=> '<strong>Journal administrateur effacé</strong>',
	'LOG_ARCADE_CLEAR_ALL_USERS_BANNED'				=> '<strong>Annulation de tous les bannissements des utilisateurs</strong>',
	'LOG_ARCADE_CLEAR_CRITICAL_LOG'					=> '<strong>Journal des erreurs effacé</strong>',
	'LOG_ARCADE_CLEAR_MOD_LOG'						=> '<strong>Journal modérateur effacé</strong>',
	'LOG_ARCADE_CLEAR_REPORTS'						=> '<strong>Journal de rapport effacé</strong>',
	'LOG_ARCADE_CLEAR_USERS_BANNED'					=> '<strong>Annulation des bannissement des utilisateurs</strong><br>» %s',
	'LOG_ARCADE_CLEAR_USERS_LOG'					=> '<strong>Journal utilisateur effacé</strong>',
	'LOG_ARCADE_CLEAR_USER_BANNED'					=> '<strong>Annulation du bannissement du membre</strong><br>» %s',
	'LOG_ARCADE_CREATE_INSTALL_FILE'				=> '<strong>Création du fichier d’installation pour le jeu</strong><br>» %s',
	'LOG_ARCADE_DELETE_GAME'						=> [
		1											=> '<strong>Jeu supprimé</strong><br>» %s',
		2											=> '<strong>Jeux supprimés</strong><br>» %s',
	],
	'LOG_ARCADE_DELETE_GAME_FILES'					=> [
		1											=> '<strong>Fichiers supprimés du jeu</strong><br>» %s',
		2											=> '<strong>Fichiers supprimés des jeux</strong><br>» %s',
	],
	'LOG_ARCADE_DELETE_SCORE'						=> '<strong>Score de jeu supprimé pour l’utilisateur : %3$s%1$s%2$s</strong><br>» %4$s',
	'LOG_ARCADE_DELETE_SUPER_CHAMPION_SCORE'		=> '<strong>Score de super champion supprimé pour l’utilisateur : %s</strong><br>» Jeu: %s',
	'LOG_ARCADE_DEL_CAT'							=> '<strong>Catégorie supprimée</strong><br>» %s',
	'LOG_ARCADE_DEL_CATS'							=> '<strong>Catégorie et ses sous-catégories supprimées</strong><br>» %s',
	'LOG_ARCADE_DEL_DELETED_GAMES'					=> '<strong>Liste de jeux supprimées supprimée.</strong>',
	'LOG_ARCADE_DEL_GAMES'							=> '<strong>Catégorie et ses jeux supprimée</strong><br>» %s',
	'LOG_ARCADE_DEL_GAMES_CATS'						=> '<strong>Catégorie, sous-catégories et ses jeux supprimé</strong><br>» %s',
	'LOG_ARCADE_DEL_GAMES_MOVE_CATS'				=> '<strong>Catégorie et ses jeux supprimé, sous-catégories déplacées</strong> vers %1$s<br>» %2$s',
	'LOG_ARCADE_DEL_MOVE_CATS'						=> '<strong>Catégorie supprimée et sous-catégories déplacées</strong> vers %1$s<br>» %2$s',
	'LOG_ARCADE_DEL_MOVE_GAMES'						=> '<strong>Suppression de la catégorie et déplacement des jeux </strong> vers %1$s<br>» %2$s',
	'LOG_ARCADE_DEL_MOVE_GAMES_CATS'				=> '<strong>Suppression de la catégorie et de ses sous-catégories, déplacement des jeux</strong> vers %1$s<br>» %2$s',
	'LOG_ARCADE_DEL_MOVE_GAMES_MOVE_CATS'			=> '<strong>Catégorie supprimée, jeux déplacés</strong> vers %1$s <strong>et sous-catégories</strong> vers %2$s<br>» %3$s',
	'LOG_ARCADE_EDIT_GAME'							=> '<strong>Paramètres de jeu modifiés</strong><br>» %s',
	'LOG_ARCADE_EDIT_GAME_RESET_INSTALL_DATE'		=> '<strong>Edition du jeu et réinitialer de la date d’installation</strong><br>» %s',
	'LOG_ARCADE_EDIT_SCORE'							=> '<strong>Données de score de jeu modifiées pour l’utilisateur : %1$s</strong><br>» %2$s',
	'LOG_ARCADE_ERROR_GAME_FILE_MISSING'			=> '<strong>Le jeu « %s » a des fichiers manquants ou des fichiers supplémentaires</strong><br>» %s',
	'LOG_ARCADE_ERROR_PLAYING_TIME'					=> '<strong>Le score du jeu « %s » a été soumis sans temps de jeu</strong><br>» Score : %s',
	'LOG_ARCADE_EXT_SETTINGS'						=> '<strong>Paramètres d’extensions modifiées</strong>',
	'LOG_ARCADE_FEATURE'							=> '<strong>Paramètres des fonctionnalités modifiés</strong>',
	'LOG_ARCADE_FORM_SCORE_ERROR'					=> [
		1											=> '<strong>Le jeu « %s » a envoyé un score incorrect</strong><br>Type de sauvegarde : %s<br>Temps de jouer : %s<br>Score : %s<br><strong>Erreur:</strong> (%s)',
		2											=> '<strong>Le jeu « %s » a envoyé un score incorrect</strong><br>Type de sauvegarde : %s<br>Temps de jouer : %s<br>Score : %s<br><strong>Erreurs:</strong> (%s)',
	],
	'LOG_ARCADE_GAME'								=> '<strong>Paramètres de jeu modifiés</strong>',
	'LOG_ARCADE_GAME_ANNOUNCE'						=> '<strong>Annonce du jeu modifiée</strong><br>» Langue: %s',
	'LOG_ARCADE_GAME_ANNOUNCE_SYNC'					=> '<strong>Resynchroniser les annonces de jeu</strong>',
	'LOG_ARCADE_GAME_DATA_EMPTY_ERROR'				=> '<strong>Le jeu « %s » n’a pas envoyé de code arcadegid ou enscore. Le jeu est endommagé.</strong><br>» Temps de jouer : %s<br>» Score : %s',
	'LOG_ARCADE_GAME_FILE_NOT_FOUND'				=> '<strong>Un fichier d’un jeu « %s » ne peut être trouvé</strong><br>» Fichier : %s',
	'LOG_ARCADE_GAME_INHERIT_FILE_NOT_FOUND'		=> '<strong>LLe fichier de jeu hérité du jeu « %s » est introuvable</strong><br>» Fichier hérité : %s',
	'LOG_ARCADE_GAME_INH_MAIN_UPDATE'				=> '<strong>Mise à jour des données du jeu principal et des %d jeux hérités</strong><br>» Jeu lancé : %s',
	'LOG_ARCADE_GAME_INH_UPDATE'					=> '<strong>Mise à jour des données de %d jeux hérités</strong><br>» Jeu lancé : %s',
	'LOG_ARCADE_GAME_INSTALL_FILE_NOT_FOUND'		=> '<strong>Le fichier d’installation du jeu pour « %s » est introuvable</strong><br>» Fichier : %s',
	'LOG_ARCADE_GAME_INSTALL_FILE_UNWRITABLE'		=> '<strong>Le fichier d’installation du jeu pour « %s » n’est pas accessible en écriture</strong><br>» Fichier : %s',
	'LOG_ARCADE_GAME_NOT_DETECT_FILESIZE'			=> '<strong>Impossible de déterminer la taille des fichiers du jeu</strong><br>» %s',
	'LOG_ARCADE_GAME_SAME_DESC_UPDATE'				=> '<strong>Mettre à jour %d descriptions de jeux identiques</strong><br>» Jeu lancé : %s',
	'LOG_ARCADE_GLOBAL_ANNOUNCE'					=> '<strong>Annonce globale modifiée</strong><br>» Langue : %s',
	'LOG_ARCADE_GROUP_TOURNAMENT'					=> '<strong>Paramètres de tournoi de groupe modifiés</strong>',
	'LOG_ARCADE_GROUP_TOUR_ANNOUNCE'				=> '<strong>Modification de l’annonce du tournoi de groupe</strong><br>» Langue : %s',
	'LOG_ARCADE_GROUP_TOUR_ANNOUNCE_SYNC'			=> '<strong>Resynchroniser les annonces des tournois de groupe</strong>',
	'LOG_ARCADE_GROUP_TOUR_CREATE'					=> '<strong>Tournoi de groupe créé</strong><br>» %s',
	'LOG_ARCADE_GROUP_TOUR_DELETE'					=> '<strong>Tournoi de groupe annulé</strong><br>» %s',
	'LOG_ARCADE_GROUP_TOUR_EDIT'					=> '<strong>Tournoi de groupe édité</strong><br>» %s',
	'LOG_ARCADE_GROUP_TOUR_END_ANNOUNCE'			=> '<strong>Modification de l’annonce fin du tournoi de groupe</strong><br>» Langue : %s',
	'LOG_ARCADE_GUEST_DEFAULT_SETTINGS'				=> '<strong>Modification des paramètres par défaut de l’utilisateur invité</strong>',
	'LOG_ARCADE_G_MOVE_DOWN'						=> '<strong>Ordre du jeu déplacé</strong> %s <strong>vers le bas</strong>',
	'LOG_ARCADE_G_MOVE_UP'							=> '<strong>Ordre du jeu déplacé</strong> %s <strong>vers le haut</strong>',
	'LOG_ARCADE_LOAD'								=> '<strong>Charger les paramètres</strong>',
	'LOG_ARCADE_MEMBERS_DEFAULT_SETTINGS'			=> '<strong>Modification des paramètres par défaut des membres</strong>',
	'LOG_ARCADE_MENU_ADD'							=> '<strong>Menu ajouté</strong><br>» %s',
	'LOG_ARCADE_MENU_DELETE'						=> [
		1											=> '<strong>Supprimer le menu</strong><br>» %s',
		2											=> '<strong>Menu et ses sous-menus supprimé</strong><br>» %s',
	],
	'LOG_ARCADE_MENU_EDIT'							=> '<strong>Menu édité</strong><br>» %s',
	'LOG_ARCADE_MENU_MOVE_DOWN'						=> '<strong>Menu déplacé</strong> %1$s <strong>sous</strong> %2$s',
	'LOG_ARCADE_MENU_MOVE_UP'						=> '<strong>Menu déplacé</strong> %1$s <strong>au dessus</strong> %2$s',
	'LOG_ARCADE_MOVE_DOWN'							=> '<strong>Catégorie déplacée</strong> %1$s <strong>sous</strong> %2$s',
	'LOG_ARCADE_MOVE_GAME'							=> [
		1											=> '<strong>Jeu déplacé de la catégorie %1$s vers la nouvelle catégorie %2$s</strong><br>» %3$s',
		2											=> '<strong>Jeux déplacés de la catégorie %1$s vers la nouvelle catégorie %2$s</strong><br>» %3$s',
	],
	'LOG_ARCADE_MOVE_UP'							=> '<strong>Catégorie déplacée</strong> %1$s <strong>au dessus</strong> %2$s',
	'LOG_ARCADE_PAAR'								=> '<strong>phpBB Arcade modifiée - classement d’activité</strong>',
	'LOG_ARCADE_PAGE'								=> '<strong>Paramètres de pages modifiés</strong>',
	'LOG_ARCADE_PATH'								=> '<strong>Paramètres de chemin modifiés</strong>',
	'LOG_ARCADE_PURGE_SESSIONS'						=> '<strong>Sessions de jeux purgées</strong>',
	'LOG_ARCADE_REPORT_GAME_ANNOUNCE'				=> '<strong>Annonce de rapport de jeu modifiée</strong><br>» Langue : %s',
	'LOG_ARCADE_RESET_ARCADE'						=> '<strong>Réinitialiser l’arcade</strong>%s%s',
	'LOG_ARCADE_RESET_CHALLENGE'					=> '<strong>Réinitialiser le défi</strong>',
	'LOG_ARCADE_RESET_COMMENT'						=> '<strong>Réinitialiser les commentaires des jeux</strong>',
	'LOG_ARCADE_RESET_DOWNLOADS'					=> '<strong>Réinitialiser les statistiques de téléchargement</strong>',
	'LOG_ARCADE_RESET_GAME'							=> [
		1											=> '<strong>Réinitialiser les données du jeu%s%s%s%s</strong><br>» %s',
		2											=> '<strong>Réinitialiser les données des jeux%s%s%s%s</strong><br>» %s',
	],
	'LOG_ARCADE_RESET_GAMES_REC'					=> '<strong>Réinitialiser la recommandation de jeux</strong>',
	'LOG_ARCADE_RESET_GAME_SCORES'					=> [
		1											=> '<strong>Réinitialiser les scores du jeu%s%s</strong><br>» %s',
		2											=> '<strong>Réinitialiser les scores des jeux%s%s</strong><br>» %s',
	],
	'LOG_ARCADE_RESET_GROUP_TOURNAMENT'				=> '<strong>Réinitialiser le tournoi de groupe</strong>',
	'LOG_ARCADE_RESET_INSTALL_DATE_GAME'			=> [
		1											=> '<strong>Réinitialiser la date d’installation d’un jeu</strong><br>» %s',
		2											=> '<strong>Réinitialiser plusieurs dates d’installation de jeux</strong><br>» %s',
	],
	'LOG_ARCADE_RESET_JACKPOT'						=> '<strong>Réinitialiser les données du jackpot</strong>',
	'LOG_ARCADE_RESET_MENU'							=> '<strong>Réinitialiser la structure du menu</strong>',
	'LOG_ARCADE_RESET_PLAYING_RECORD'				=> '<strong>Réinitialiser le compteur d’utilisateurs les plus joueurs</strong>',
	'LOG_ARCADE_RESET_POINTS'						=> '<strong>Réinitialiser les données des points</strong>',
	'LOG_ARCADE_RESET_SCORES_ALL'					=> '<strong>Supprimer tous les scores utilisateur</strong>',
	'LOG_ARCADE_RESET_SUPER_CHAMPION'				=> '<strong>Réinitialiser le super champion</strong>',
	'LOG_ARCADE_RESET_TOURNAMENT'					=> '<strong>Réinitialiser le tournoi</strong>',
	'LOG_ARCADE_RESET_USERS_DATA'					=> '<strong>Réinitialiser toutes les données des utilisateurs</strong>',
	'LOG_ARCADE_RESET_USERS_SCORE'					=> '<strong>Réinitialiser tous les scores</strong>',
	'LOG_ARCADE_RESET_USERS_SETTINGS'				=> '<strong>Réinitialiser les paramètres des utilisateurs</strong>',
	'LOG_ARCADE_RESET_USER_ALL'						=> '<strong>Réinitialiser toutes les données utilisateur</strong><br>» %s',
	'LOG_ARCADE_RESET_USER_SCORES'					=> '<strong>Réinitialiser les scores%s%s</strong><br>» %s',
	'LOG_ARCADE_RESET_USER_SUPER_RECORDS'			=> '<strong>Réinitialiser les super scores de l’utilisateur</strong><br>» %s',
	'LOG_ARCADE_RESTORE_DEFAULT_DATA_ANNOUNCE'		=> '<strong>Données par défaut des annonces restaurées</strong><br>» %s',
	'LOG_ARCADE_RESTORE_DEFAULT_DATA_PM'			=> '<strong>Données par défaut des messages privés restaurées</strong><br>» %s',
	'LOG_ARCADE_RESYNC_TOTALS_DATA'					=> '<strong>Resynchronisation totale des données d’arcade</strong>',
	'LOG_ARCADE_RESYNC_USERS_TOTAL_DATA'			=> '<strong>Resynchronisation des données totales des utilisateurs</strong>',
	'LOG_ARCADE_SETTINGS'							=> '<strong>Paramètres généraux modifiés</strong>',
	'LOG_ARCADE_SYNC_CAT'							=> '<strong>Catégorie resynchronisée</strong><br>» %s',
	'LOG_ARCADE_SYNC_GAME'							=> [
		1											=> '<strong>Jeu re-synchronisé</strong><br>» %s',
		2											=> '<strong>Jeux re-synchronisés</strong><br>» %s',
	],
	'LOG_ARCADE_SYSTEM'								=> '<strong>Paramètres système modifiés</strong>',
	'LOG_ARCADE_TOURNAMENT'							=> '<strong>Paramètres de tournoi modifiés</strong>',
	'LOG_ARCADE_TOUR_ANNOUNCE'						=> '<strong>Annonce du tournoi modifiée</strong><br>» Langue : %s',
	'LOG_ARCADE_TOUR_ANNOUNCE_SYNC'					=> '<strong>Resynchroniser les annonces de tournois</strong>',
	'LOG_ARCADE_TOUR_CREATE'						=> '<strong>Tournoi créé</strong><br>» %s',
	'LOG_ARCADE_TOUR_DELETE'						=> '<strong>Tournoi supprimé</strong><br>» %s',
	'LOG_ARCADE_TOUR_EDIT'							=> '<strong>Tournoi modifié</strong><br>» %s',
	'LOG_ARCADE_TOUR_END_ANNOUNCE'					=> '<strong>Annonce de fin de tournoi modifiée</strong><br>» Langue : %s',
	'LOG_ARCADE_UNDEFINED_SCORE'					=> '<strong>Le jeu « %s » a envoyé un score indéfini</strong>',
	'LOG_ARCADE_UNPACK_GAME'						=> [
		1											=> '<strong>Jeu déballé</strong><br>» %s',
		2											=> '<strong>Jeu déballés</strong><br>» %s',
	],
	'LOG_ARCADE_UPLOAD_GAME'						=> [
		1											=> '<strong>Télécharger le jeu</strong><br>» %s',
		2											=> '<strong>Télécharger les jeux</strong><br>» %s',
	],
	'LOG_ARCADE_USER_BANNED'						=> '<strong>Utilisateur banni</strong><br>» %s',
	'LOG_ARCADE_USER_DELETE_FAVORITE'				=> [
		1											=> '<strong>Supprimer le jeu favoris</strong><br>» %s',
		2											=> '<strong>Supprimer les jeux favoris</strong><br>» %s',
	],
	'LOG_ARCADE_USER_GAME_SETTINGS'					=> '<strong>Paramètres de jeu modifiés</strong>',
	'LOG_ARCADE_USER_HIGHLIGHT_FAVORITE'			=> [
		1											=> '<strong>Mettez en surbrillance votre jeu préféré</strong><br>» %s',
		2											=> '<strong>Mettez en surbrillance vos jeux préférés </strong><br>» %s',
	],
	'LOG_ARCADE_USER_MAIN_SETTINGS'					=> '<strong>Paramètres principaux modifiés</strong>',
	'LOG_ARCADE_USER_POST_SETTINGS'					=> '<strong>Paramètres de publication modifiés</strong>',
	'LOG_ARCADE_USER_REMOVE_HIGHLIGHT_FAVORITE'		=> [
		1											=> '<strong>Supprimer votre jeu préféré mis en surbrillance des favoris</strong><br>» %s',
		2											=> '<strong>Supprimer vos jeux préférés mis en surbrillance des favoris</strong><br>» %s',
	],
	'LOG_ARCADE_USER_SET_UPDATE'					=> '<strong>Informations utilisateur mises à jour</strong><br>» %s',
	'LOG_ARCADE_VERSION_CHECK_DISABLED'				=> '<strong>Vérification de version automatique désactivée</strong>',
	'LOG_ARCADE_VERSION_CHECK_ENABLED'				=> '<strong>Vérification de version automatique activée</strong>',
	'LOG_C_ROLE_ADD'								=> '<strong>Rôle de catégorie ajouté</strong><br>» %s',
	'LOG_C_ROLE_EDIT'								=> '<strong>Rôle de catégorie modifié</strong><br>» %s',
	'LOG_C_ROLE_REMOVED'							=> '<strong>Rôle de catégorie supprimé</strong><br>» %s',
]);
