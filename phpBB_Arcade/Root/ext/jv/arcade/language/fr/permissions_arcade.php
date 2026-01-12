<?php
/**
*
* @package phpBB Arcade
* @version $Id: permissions_arcade.php 173 2024-01-14 12:28:15Z KillBill $
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

// Define categories and permission types
$lang = array_merge($lang, [
	'ACL_A_ARCADE'						=> 'Peut gérer la réinitialisation d’arcade',
	'ACL_A_ARCADE_ANNOUNCE'				=> 'Peut gérer les annonces',
	'ACL_A_ARCADE_BACKUP'				=> 'Peut sauvegarder les catégories',
	'ACL_A_ARCADE_CAT'					=> 'Peut ajouter/modifier des catégories',
	'ACL_A_ARCADE_CLEARLOGS'			=> 'Peut effacer les journaux',
	'ACL_A_ARCADE_DELETE_CAT'			=> 'Peut supprimer des catégories',
	'ACL_A_ARCADE_DELETE_GAME'			=> 'Peut supprimer des jeux',
	'ACL_A_ARCADE_DELETE_TOUR'			=> 'Peut supprimer des tournois',
	'ACL_A_ARCADE_GAME'					=> 'Peut ajouter/éditer des jeux',
	'ACL_A_ARCADE_INSTALL'				=> 'Peut gérer les fonctionnalités d’installation',
	'ACL_A_ARCADE_MENU'					=> 'Peut gérer le menu',
	'ACL_A_ARCADE_POINTS_SETTINGS'		=> 'Peut gérer les paramètres des points',
	'ACL_A_ARCADE_RANKS'				=> 'Peut gérer les rangs',
	'ACL_A_ARCADE_RESET_GAME'			=> 'Peut réinitialiser les jeux',
	'ACL_A_ARCADE_SETTINGS'				=> 'Peut gérer les paramètres',
	'ACL_A_ARCADE_TOUR'					=> 'Peut créer/éditer un tournoi',
	'ACL_A_ARCADE_USER'					=> 'Peut gérer les utilisateurs',
	'ACL_A_ARCADE_UTILITIES'			=> 'Peut utiliser les utilitaires',
	'ACL_A_ARCADE_VIEWLOGS'				=> 'Peut afficher les journaux',
	'ACL_A_CAUTH'						=> 'Peut modifier la classe d’autorisation',
	'ACL_CAT_ARCADE'					=> 'Arcade',
	'ACL_C_COMMENT'						=> 'Peut soumettre des commentaires',
	'ACL_C_DOWNLOAD'					=> 'Peut télécharger des jeux',
	'ACL_C_DOWNLOADFREE'				=> 'Peut télécharger des jeux gratuitement',
	'ACL_C_IGNORECONTROL'				=> 'Peut ignorer le contrôle de limite de jeu',
	'ACL_C_IGNOREFLOOD_DOWNLOAD'		=> 'Peut ignorer la limite de flood de téléchargement',
	'ACL_C_IGNOREFLOOD_PLAY'			=> 'Peut ignorer la limite de flood de limite de jeu',
	'ACL_C_LIST'						=> 'Peut lister la catégorie',
	'ACL_C_PLAY'						=> 'Peut jouer à des jeux',
	'ACL_C_PLAYFREE'					=> 'Peut jouer à des jeux gratuitement',
	'ACL_C_RATE'						=> 'Peut noter les jeux',
	'ACL_C_REPORT'						=> 'Peut signaler les jeux',
	'ACL_C_RE_RATE'						=> 'Peut changer ses propres notes',
	'ACL_C_SCORE'						=> 'Peut soumettre des scores. <em>Uniquement pour les utilisateurs enregistrés.</em>',
	'ACL_C_VIEW'						=> 'Peut voir la catégorie',
	'ACL_M_ARCADE_CHANGE_GAMENAME'		=> 'Peut changer le nom du jeu',
	'ACL_M_ARCADE_CLEARLOGS'			=> 'Peut effacer les journaux',
	'ACL_M_ARCADE_GAME'					=> 'Peut éditer des jeux',
	'ACL_M_ARCADE_RESET_GAME'			=> 'Peut réinitialiser les jeux',
	'ACL_M_ARCADE_TOUR'					=> 'Peut créer/éditer des tournois',
	'ACL_M_ARCADE_TOUR_REWARD'			=> 'Peut ajouter des récompenses aux nouveaux tournois',
	'ACL_M_ARCADE_VIEWLOGS'				=> 'Peut afficher les journaux',
	'ACL_TYPE_C_'						=> 'Autorisations de catégorie',
	'ACL_U_ARCADE'						=> 'Peut utiliser l’arcade',
	'ACL_U_ARCADE_CHALLENGE'			=> 'Peut utiliser le défi',
	'ACL_U_ARCADE_DOWNLOAD'				=> 'Peut télécharger des jeux',
	'ACL_U_ARCADE_FAVORITES'			=> 'Peut ajouter/supprimer des jeux favoris',
	'ACL_U_ARCADE_IGNOREFLOOD_SEARCH'	=> 'Peut ignorer la limite de flood de recherche',
	'ACL_U_ARCADE_PM'					=> 'Peut recevoir un message privé en cas de perte d’un trophée',
	'ACL_U_ARCADE_POPUP'				=> 'Peut jouer à des jeux dans une nouvelle fenêtre',
	'ACL_U_ARCADE_SEARCH'				=> 'Peut utiliser la recherche de jeux',
	'ACL_U_ARCADE_TOUR'					=> 'Peut utiliser le tournoi',
	'ACL_U_ARCADE_VIEWSTATS'			=> 'Peut voir la page de statistiques',
	'ACL_U_ARCADE_VIEW_WHOISPLAYING'	=> 'Peut voir qui joue à des jeux'
]);
