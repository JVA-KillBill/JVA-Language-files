<?php
/**
*
* @package phpBB Arcade
* @version $Id: info_ucp_arcade.php 173 2024-01-14 12:28:15Z KillBill $
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
	'UCP_ARCADE'								=> 'phpBB Arcade',
	'UCP_ARCADE_BOARD_SESSION'					=> 'Afficher l’heure de la session du forum',
	'UCP_ARCADE_BOARD_SESSION_EXPLAIN'			=> 'Un compte à rebours pour la session du forum est affiché au-dessus de la plateforme de jeu. Si le compte à rebours atteint zéro, vous serez automatiquement déconnecté du forum.',
	'UCP_ARCADE_BUTTON_STYLE'					=> 'Style de bouton de menu',
	'UCP_ARCADE_BUTTON_WITHOUT_TEXT'			=> 'Bouton sans texte',
	'UCP_ARCADE_BUTTON_WITH_TEXT'				=> 'Bouton avec texte',
	'UCP_ARCADE_CAT_GAMES_STYLE'				=> 'Catégorie de style de jeu',
	'UCP_ARCADE_CAT_STYLE'						=> 'Style de catégorie',
	'UCP_ARCADE_DARK'							=> 'Sombre',
	'UCP_ARCADE_DELETE_FAVORITE'				=> [
		1										=> 'Supprimer le jeu préféré',
		2										=> 'Supprimer des jeux préférés',
	],
	'UCP_ARCADE_DELETE_FAVORITE_CONFIRM'		=> [
		1										=> 'Etes-vous sûr de vouloir supprimer ce jeu des favoris ?',
		2										=> 'Etes-vous sûr de vouloir supprimer ces jeux des favoris ?',
	],
	'UCP_ARCADE_DELETE_FAVORITE_SUCCESS'		=> [
		1										=> 'Jeu favoris supprimé avec succès.',
		2										=> 'Jeux favoris supprimés avec succès.',
	],
	'UCP_ARCADE_DEVICES_ALL'					=> 'Tous les appareils',
	'UCP_ARCADE_DEVICES_TOUCH_SCREEN'			=> 'Appareils à écran tactile',
	'UCP_ARCADE_DISPLAY_GAME_IMAGE'				=> 'Afficher l’image du jeu',
	'UCP_ARCADE_DISPLAY_POPUP_ICON'				=> 'Afficher l’icone popup',
	'UCP_ARCADE_EVERYWHERE'						=> 'Partout',
	'UCP_ARCADE_FAVORITES'						=> 'Gére les favoris',
	'UCP_ARCADE_FAVORITES_EXPLAIN'				=> 'Vous pouvez afficher, mettre en évidence et supprimer vos jeux préférés ci-dessous.',
	'UCP_ARCADE_GAME'							=> 'Paramètres du jeu',
	'UCP_ARCADE_GAME_AUTO_ZOOM'					=> 'Zoom automatique du jeu',
	'UCP_ARCADE_GAME_AUTO_ZOOM_EXPLAIN'			=> 'Si l’espace alloué au jeu est plus grand que la taille du jeu, le jeu sera automatiquement agrandi.<br><em class="arcade_attent">Notez que ce paramètre remplace l’activation de la taille personnalisée.</em>',
	'UCP_ARCADE_GAME_BORDER_ENABLE'				=> 'Afficher le bord autour du jeu',
	'UCP_ARCADE_GAME_CUSTOM_SIZE'				=> 'Activer la taille personnalisée',
	'UCP_ARCADE_GAME_CUSTOM_SIZE_EXPLAIN'		=> 'Si vous l’activez, la taille maximale que vous définissez sera utilisée.<br><em>Notez que si le jeu a moins d’espace disponible que la taille que vous avez définie, le jeu sera automatiquement ajusté à la taille de l’espace disponible. Parce que le logiciel ne permet en aucun cas d’apparaître en dehors de l’espace de jeu.</em>',
	'UCP_ARCADE_GAME_FILTER_KEYBOARD'			=> 'Filtrer les jeux de clavier',
	'UCP_ARCADE_GAME_FILTER_KEYBOARD_EXPLAIN'	=> 'Ici, vous avez la possibilité de filtrer les jeux qui nécessitent l’utilisation d’un clavier.',
	'UCP_ARCADE_GAME_FULLSCREEN'				=> 'Démarrer le jeu en plein écran',
	'UCP_ARCADE_GAME_FULLSCREEN_ALL'			=> 'Appareil avec plein écran',
	'UCP_ARCADE_GAME_FULLSCREEN_ALL_EXPLAIN'	=> 'Si « Démarrer le jeu en plein écran » est activé, vous pouvez spécifier s’il est valable pour tous les appareils ou uniquement pour les appareils à écran tactile.',
	'UCP_ARCADE_GAME_FULLSCREEN_EXPLAIN'		=> 'Si vous l’activez, cliquez sur le bouton de démarrage dans l’introduction du jeu et le jeu démarrera alors en plein écran.',
	'UCP_ARCADE_GAME_INTRO_STYLE'				=> 'Style d’introduction au jeu',
	'UCP_ARCADE_GAME_JUMP_TOP'					=> 'Position supérieure automatique',
	'UCP_ARCADE_GAME_JUMP_TOP_EXPLAIN'			=> 'Si vous éloignez le jeu de la position définie, puis cliquez sur le jeu, il reviendra automatiquement à la position définie.',
	'UCP_ARCADE_GAME_LANDSCAPE_WIDTH'			=> 'Largeur du jeu en paysage',
	'UCP_ARCADE_GAME_LANDSCAPE_WIDTH_EXPLAIN'	=> 'Pour les jeux en mode paysage, la largeur spécifiée ici peut être la taille maximale.',
	'UCP_ARCADE_GAME_MENU_ENABLE'				=> 'Activer le menu',
	'UCP_ARCADE_GAME_MENU_ENABLE_EXPLAIN'		=> 'Un menu collé avec plusieurs boutons est affecté à l’introduction et au jeu. Cela vous donne accès à une variété d’informations et de paramètres tout en jouant.',
	'UCP_ARCADE_GAME_MENU_POSITION'				=> 'Emplacement des menus',
	'UCP_ARCADE_GAME_ORIENTATION_EXPLAIN'		=> 'Si le jeu prend en charge le paysage et le portrait, il s’affichera comme défini ici.<br><em>Il est possible de faire pivoter le jeu pendant qu’on joue.<br>Pour les appareils rotatifs, la position de l’appareil sera prise en compte.</em>',
	'UCP_ARCADE_GAME_OVER_ANIMATION'			=> 'Jouer l’animation à la fin du jeu',
	'UCP_ARCADE_GAME_OVER_ANIMATION_SOUND'		=> 'Activer le son de l’animation',
	'UCP_ARCADE_GAME_OVER_RANDOM_GAMES'			=> 'Affiche des jeux aléatoires à la fin du jeu',
	'UCP_ARCADE_GAME_OVER_SOUND'				=> 'Jouez game over à la fin du jeu',
	'UCP_ARCADE_GAME_OVER_SUBMIT'				=> 'Autoriser l’envoi du score',
	'UCP_ARCADE_GAME_OVER_SUBMIT_EXPLAIN'		=> 'Si vous ne l’activez pas, le jeu ne soumettra pas notre score automatiquement ni après avoir cliqué sur le bouton « Soumettre ». Au lieu de soumettre le score, une interface « Game Over » s’ouvrira, vous permettant de rejouer le jeu immédiatement ou de soumettre le score.',
	'UCP_ARCADE_GAME_PORTRAIT_HEIGHT'			=> 'Hauteur du jeu de portrait',
	'UCP_ARCADE_GAME_PORTRAIT_HEIGHT_EXPLAIN'	=> 'Pour les jeux de portrait, la hauteur spécifiée ici peut être la taille maximale.',
	'UCP_ARCADE_GAME_PRELOADER'					=> 'Désactiver les préchargeurs',
	'UCP_ARCADE_GAME_PRELOADER_EXPLAIN'			=> 'Vous pouvez désactiver les préchargeurs ici si cela vous dérange. Mais notez que, lorsque vous désactivez les préchargeurs, et si votre connexion Internet est lente, vous ne verrez qu’un espace vide pendant une période plus longue lors du chargement.',
	'UCP_ARCADE_GAME_RESIZE_BUTTONS'			=> 'Activer les boutons de redimensionnement',
	'UCP_ARCADE_GAME_RESIZE_BUTTONS_EXPLAIN'	=> 'Des boutons de redimensionnement personnalisés facultatifs sont ajoutés. Les boutons ne sont actifs que lorsque vous jouez dans une fenêtre normale et que la fenêtre est en vue de bureau.',
	'UCP_ARCADE_GAME_SESSION'					=> 'Affichage de l’heure de la session de jeu',
	'UCP_ARCADE_GAME_SESSION_EXPLAIN'			=> 'Un compte à rebours de la session de jeu est affiché au-dessus de la plate-forme de jeu. Si le compte à rebours atteint zéro, il est certain que le jeu ne sauvera pas notre score.',
	'UCP_ARCADE_GAME_VERTICAL_POS'				=> 'Position verticale du jeu',
	'UCP_ARCADE_GAME_VERTICAL_POS_ACTIVE'		=> 'La position verticale du jeu est active',
	'UCP_ARCADE_GAME_VERTICAL_POS_ACTIVE_EXP'	=> 'Ce paramètre ne prend effet que lorsque la position médiane est définie.',
	'UCP_ARCADE_GAME_VERTICAL_POS_EXPLAIN'		=> 'Si la hauteur de l’écran est supérieure à la hauteur du jeu, le jeu sera ajusté à la position définie ici.',
	'UCP_ARCADE_LIGHT'							=> 'Claire',
	'UCP_ARCADE_LOCAL_STORAGE'					=> 'Gérer le stockage local',
	'UCP_ARCADE_LOCAL_STORAGE_DEL_CONFIRM'		=> 'Voulez-vous vraiment supprimer les données stockées de ce navigateur ?',
	'UCP_ARCADE_LOCAL_STORAGE_EMPTY'			=> 'Dans ce navigateur, le stockage local est vide.',
	'UCP_ARCADE_LOCAL_STORAGE_EXPLAIN'			=> 'Ici, vous pouvez voir ou supprimer les données dans le stockage local du navigateur que vous utilisez actuellement.<br>Diverses données peuvent également être incluses dans le stockage local, telles que : les paramètres de l’utilisateur et du site web, les données de progression du jeu.<br><em>Veuillez noter que la récupération des données est exclusive à ce site web, à cet appareil et à ce navigateur.</em>',
	'UCP_ARCADE_LOCAL_STORAGE_NOJS'				=> 'Le navigateur n’autorise pas « JavaScript », donc le stockage local n’est pas disponible !',
	'UCP_ARCADE_LOCAL_STORAGE_PRIVATE'			=> 'Le navigateur est en mode « Privé », donc le stockage local n’est pas disponible !',
	'UCP_ARCADE_MAX_FAV'						=> 'Vous avez atteint le nombre maximum de %s jeux préférés parmi lesquels choisir.',
	'UCP_ARCADE_MIDDLE'							=> 'Milieu',
	'UCP_ARCADE_NOTIFICATION_TYPE_GROUP_TOUR'	=> 'Tournois de groupe d’arcade',
	'UCP_ARCADE_NO_PERM_PM_LOSS_HIGHSCORE'		=> 'Vous n’êtes pas autorisé à recevoir des messages privés si vous perdez votre trophée.',
	'UCP_ARCADE_ONLY_POPUP_FULLSCREEN'			=> 'Seulement pop-up/plein écran',
	'UCP_ARCADE_PLAY_INFO_BOX'					=> 'Emplacement de la boîte d’information',
	'UCP_ARCADE_PLAY_INFO_BOX_ENABLE'			=> 'Activer la boîte d’information',
	'UCP_ARCADE_PLAY_INFO_BOX_EXPLAIN'			=> 'Les cases d’information apparaîtront à la position définie.',
	'UCP_ARCADE_PLAY_MOBILE_SCROLL'				=> 'Activer la barre de défilement dans la vue mobile',
	'UCP_ARCADE_PLAY_MOBILE_SCROLL_EXPLAIN'		=> 'En vue mobile, vous avez la possibilité de désactiver le web scroller si cela vous gêne.<br><em>Notez que vous pouvez y parvenir même si vous désactivez le rétroéclairage.</em>',
	'UCP_ARCADE_POPUP_VERTICAL_POS'				=> 'Position verticale de la fenêtre contextuelle',
	'UCP_ARCADE_POPUP_VERTICAL_POS_EXPLAIN'		=> 'Si la hauteur de l’écran est supérieure à la hauteur de la fenêtre contextuelle, la nouvelle fenêtre sera ajustée à la position définie ici.',
	'UCP_ARCADE_POST'							=> 'Paramètres de publication',
	'UCP_ARCADE_RESET_SETTINGS_CONFIRM'			=> 'Êtes-vous sûr de vouloir réinitialiser tous vos paramètres à leurs paramètres par défaut ?',
	'UCP_ARCADE_SELECTED_HIGHLIGHT'				=> 'Mettre la sélection en surbrillance',
	'UCP_ARCADE_SELECTED_HIGHLIGHT_REMOVE'		=> 'Supprimer la surbrillance de la sélection',
	'UCP_ARCADE_SEND_PM_EXPLAIN'				=> 'Si votre record est battu dans un jeu ou qu’un utilisateur veut vous défier dans un tournoi, un message privé vous en informera.',
	'UCP_ARCADE_SETTINGS'						=> 'Réglages généraux',
	'UCP_ARCADE_TOP'							=> 'Haut',
	'UCP_ARCADE_USER_INFO'						=> 'Remplacement du bloc d’informations utilisateur',
	'UCP_ARCADE_USER_INFO_EXPLAIN'				=> 'Ici, vous avez la possibilité de remplacer le bloc d’informations utilisateur dans le bloc de bienvenue, à la place vous pouvez choisir d’afficher les jeux les plus joués.<br><em>Cette option n’a aucun effet sur les pages de défis et tournoi.</em>',
	'UCP_CAT_ARCADE'							=> 'Salle de jeux',
	'UCP_CHALLENGE_ENABLED'						=> 'Activer le défi',
	'UCP_CHALLENGE_ENABLED_EXPLAIN'				=> 'Si vous l’activez, les utilisateurs peuvent défier un duel dans les jeux.',
]);
