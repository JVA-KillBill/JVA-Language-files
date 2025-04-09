<?php
/**
*
* @package phpBB Arcade
* @version $Id: help_developer.php 173 2024-01-14 12:28:15Z KillBill $
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
	'ARCADE_ACP_HELP_FAQ_BLOCK_DATA'					=> 'Afficher des données arcade en dehors de l’arcade',
	'ARCADE_ACP_HELP_FAQ_BLOCK_GAMES'					=> 'Jeux',
	'ARCADE_ACP_HELP_FAQ_BLOCK_GENERAL'					=> 'Généralités',
	'ARCADE_ACP_HELP_FAQ_BLOCK_INSTALL'					=> 'Installation/Mise à jour/Désinstallation',
	'ARCADE_ACP_HELP_FAQ_BLOCK_MODULES'					=> 'Modules de l’arcade',
	'ARCADE_ACP_HELP_FAQ_BLOCK_SCORING'					=> 'Scores',
	'ARCADE_ACP_HELP_FAQ_DATA_EXT_ANSWER'				=> 'Oui, il existe des extensions pour le logiciel phpBB Arcade - ici : <a onclick="window.open(this.href); return false;" href="https://phpbbarcade.euroscadeaux.com/viewforum.php?f=18">Extensions</a>',
	'ARCADE_ACP_HELP_FAQ_DATA_EXT_QUESTION'				=> 'Oui, il existe des extensions pour le logiciel phpBB Arcade - voir : <a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/phpBB_Arcade_Extensions.html">Extensions</a>',
	'ARCADE_ACP_HELP_FAQ_GAMES_DELETE_ANSWER'			=> 'Vous pouvez supprimer des jeux à partir de la « Gestion de l’arcade » du PCA en passant par le module « Gérer les catégories ». Vous pouvez aussi utiliser le module « Gérer les jeux » et sélectionner un jeu à supprimer. Il est possible aussi de supprimer un jeu à partir de son édition. Dans tous les cas, vous aurez l’option de supprimer ou non les fichiers du serveur quand vous supprimerez un jeu. Pour que cette option soit réalisable, il faut vous assurer que vous avez bien les bonnes permissions pour pouvoir effacer des fichiers sur le serveur. N’utilisez cette option que si vous ne projetez pas de réinstaller le jeu.',
	'ARCADE_ACP_HELP_FAQ_GAMES_DELETE_QUESTION'			=> 'Comment supprimer des jeux ?',
	'ARCADE_ACP_HELP_FAQ_GAMES_HOW_INSTALL_ANSWER'		=> 'Il y a trois façons d’installer un jeu.<br>
															<ul>
																<li>Si vous téléchargez le jeu à l’aide du système de téléchargement intégré de phpBB Arcade, vous obtiendrez un fichier compressé que vous pourrez télécharger via FTP dans le fichier <strong>[ROOT]/arcade/install</strong> et installer via le PCA.</li>
																<li>Si vous téléchargez le jeu en utilisant le système de téléchargement intégré de phpBB Arcade, vous recevrez un fichier compressé que vous pourrez télécharger via le module PCA Télécharger/Décompresser. Après le téléchargement, le jeu peut être décompressé, puis le jeu peut être installé.</li>
																<li>Une troisième option est FTP. Téléchargez le jeu extrait à l’emplacement approprié dans le fichier <strong>« [ROOT]/arcade/games/{Premier signe}/ »</strong>. Cependant, cela n’est pas recommandé car les permissions pour les répertoires et les fichiers peuvent être différentes dans ce cas.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GAMES_HOW_INSTALL_QUESTION'	=> 'Comment installer un jeu ?',
	'ARCADE_ACP_HELP_FAQ_GAMES_INSTALL_ANSWER'			=> 'Le moyen le plus facile est d’utiliser des jeux qui sont déjà au format phpBB Arcade ou IBPro tar. L’arcade détecte automatiquement lorsque vous téléchargez ou décompressez un jeu. Si le format n’est pas correct, vous devez le changer au format correct, ou s’il ne fonctionne en aucune façon, vous pouvez le partager sur le site d’assistance et demander une vérification du jeu.',
	'ARCADE_ACP_HELP_FAQ_GAMES_INSTALL_QUESTION'		=> 'Quel est le moyen le plus simple d’installer des jeux ?',
	'ARCADE_ACP_HELP_FAQ_GAMES_INS_FILE_ANSWER'			=> 'Oui.<br><textarea rows="30" cols="30" readonly="readonly" onclick="this.focus(); this.select();">&lt;?php
/**
*
* @package phpBB Arcade
* @version 7.7.3
* @author 2011-2025 KillBill
* @copyright (c) 2014-2025 https://jv-arcade.com/ - https://jv-arcade.com/contact
* @license https://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
*	Fichier d’Installation de Jeu phpBB Arcade
*
*	On trouve ci-dessous des informations sur les paramètres à définir pour installer
*	un jeu dans l’arcade. Ce fichier est nécessaire pour réussir à installer un jeu
*	par le truchement du PCA de phpBB Arcade.
*
*	Les seules choses qu’on doit définir sont le nom, la description, le type,
*	la largeur, la hauteur et le type de score.
*
*	L’arcade prend en charge différents types de jeux pour enregistrer des scores. (phpBB Arcade, Activity Mod, IBPro, Arcadelib,
*	V3Arcade, IBProV32, Relax Arcade, Arcade room, Olympus Arcade et les jeux qui n’envoient pas de scores).
*	Utilisez les constantes suivantes pour le type d’enregistrement de score :
*
*	PHPBBARCADE_GAME
*	IBPRO_GAME
*	IBPROV3_GAME
*	PHPBB_RA_GAME
*	OLYMPUS_GAME
*	NOSCORE_GAME
*
*	Les contrôles de jeu seront définis avec les constantes suivantes :
*
*	GAME_CONTROL_KEYBOARD
*	GAME_CONTROL_KEYBOARD_TOUCH
*	GAME_CONTROL_KEYBOARD_MOUSE
*	GAME_CONTROL_MOUSE_TOUCH

*	Utiliser la constante GAME_CONTROL_KEYBOARD, si le jeu ne peut être joué que sur un clavier.
*	Utiliser la constante GAME_CONTROL_KEYBOARD_TOUCH, si le jeu peut être joué sur clavier ou écran tactile.
*	Utilisez la constante GAME_CONTROL_KEYBOARD_MOUSE si le jeu peut être joué avec le clavier et la souris.
*	Utiliser la constante GAME_CONTROL_MOUSE_TOUCH, si le jeu peut être joué avec la souris ou sur l’écran tactile.
*	Si vous souhaitez créer une description supplémentaire de la façon de jouer au jeu et avec quelles touches, vous pouvez l’écrire dans le champ « game_control_desc ».
*
*	Utilisez l’une des constantes suivantes pour spécifier la rotation du jeu :
*
*	ARCADE_SET_DISABLED
*	ARCADE_SET_ENABLED
*
*	Utilisez la variable ARCADE_SET_DISABLED si le jeu ne prend pas en charge l’affichage portrait et paysage.
*	Utilisez la constante ARCADE_SET_ENABLED si le jeu prend en charge à la fois l’apparence paysage et portrait.
*
*	Utilisez l’une des constantes suivantes pour spécifier le type de résultat :
*
*	SCORETYPE_HIGH
*	SCORETYPE_LOW
*
*	SCORETYPE_HIGH est pour les jeux dont le score le plus haut est le meilleur score.
*	SCORETYPE_LOW est pour les jeux dont le score le plus bas est le meilleur score.
*
*/

// DÉVELOPPEURS VEUILLEZ NOTER modifié - (\'game_name\', \'game_desc\', \'game_control_desc\')
//
// Tous les fichiers d’installation doivent utiliser UTF-8 comme encodage et les fichiers ne doivent pas contenir de BOM.
//
// Certains caractères que vous voudrez peut-être copier et coller: ‚ ‘ ’ « » „ « » …
/*
if (!defined(\'IN_PHPBB\') || !defined(\'IN_PHPBB_ARCADE\'))
{
	exit;
}

$game_file = basename(__FILE__, \'.\' . substr(strrchr(__FILE__, \'.\'), 1));

$game_data = [
	\'game_name\'			=> \'Nom du jeu\',
	\'game_desc\'			=> \'Entrez la description du jeu ici\',
	\'game_control\'		=> GAME_CONTROL_MOUSE,
	\'game_control_desc\'	=> \'Entrez une description du contrôle requis du jeu\',
	\'game_image\'			=> $game_file . \'.gif\',
	\'game_scorevar\'		=> $game_file,
	\'game_width\'			=> 370,
	\'game_height\'			=> 550,
	\'game_rotatable\'		=> ARCADE_SET_DISABLED,
	\'game_scoretype\'		=> SCORETYPE_HIGH
	\'game_save_type\'		=> PHPBBARCADE_GAME
	\'game_inherit\'		=> \'Entrez le chemin de l’héritage du jeu, si nécessaire.\',
	\'privacy_desc\'		=> \'Entrez la politique de confidentialité du jeu ici si le jeu l’exige.\',
	\'privacy_link\'		=> \'Lien vers la politique de confidentialité du jeu en format HTML. S’il y a plusieurs liens, entrez-les tous sur une nouvelle ligne.\'
];
</textarea>',
	'ARCADE_ACP_HELP_FAQ_GAMES_INS_FILE_QUESTION'		=> 'Est-ce qu’il existe un fichier-modèle d’installation ?',
	'ARCADE_ACP_HELP_FAQ_GAMES_OWN_INS_FILE_ANSWER'		=> 'Non, bien qu’il puisse y avoir deux outils dans le PCA de phpBB Arcade qui vous aideront dans cette tâche.<br>
															<ul>
																<li>Il existe un outil pour créer un fichier d’installation à partir de zéro. Entrez simplement toutes les informations requises et vous pourrez télécharger, afficher ou créer le fichier d’installation sur le serveur.</li>
																<li>Il existe un outil pour télécharger ou afficher les fichiers d’installation existants des jeux déjà installés.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GAMES_OWN_INS_FILE_QUESTION'	=> 'Doit-je créer le fichier d’installation manuellement ?',
	'ARCADE_ACP_HELP_FAQ_GAMES_REQ_INSTALL_ANSWER'		=> 'Si vous souhaitez télécharger et installer un jeu qui a déjà été extrait, procédez comme suit :<br>
															Dans le fichier[ROOT]/arcade/<strong>« jeux »</strong> vous devez télécharger les principaux fichiers de jeu nécessaires à l’installation, qui sont les suivants :<br>
															<b>Html5</b>
															<ul>
																<li>1. test.php (Fichier d’installation de jeu)</li>
																<li>2. test.png (Image de jeu 60x60 px)</li>
																<li>3. Le fichier index.htm (est responsable du démarrage du jeu.)</li>
															</ul>
															<br>
															<b>Flash</b>
															<ul>
																<li>1. test.php (Fichiers d’installation de jeu)</li>
																<li>2. test.png (Image du jeu 60x60 px)</li>
																<li>3. test.swf (Le fichier test.swf contient les données nécessaires pour le jeu.)</li>
																<li>4. index.htm (l’index.htm est un fichier vide.)</li>
																<li>5. gd/ (Si le jeu contient un fichier « gamedata » renommer-le en « gd » parce que le nom du fichier gamedata n’est plus pris en charge.)</li>
															</ul>
															<br>
															Le nom du fichier de jeu doit toujours correspondre au nom du fichier d’installation du jeu.
															<br><br>
															Donc, dans ce cas, la structure correcte du fichier est la suivante :<br>
															<ul>
																<li>1. <strong>[ROOT]/arcade/games/t/test/</strong>test.php</li>
																<li>2. <strong>[ROOT]/arcade/games/t/test/</strong>index.html (Le fichier index.html est nécessaire pour démarrer le jeu.)</li>
															</ul>
															<br>
															Le fichier « t » après le fichier « jeux » est toujours appelé la première lettre du nom du fichier. Parce que « phpBB Arcade » met des jeux dans des fichiers dans l’ordre « ABC » pour une meilleure vue d’ensemble.
															<br>
															Le fichier <strong>« index.html »</strong> ne peut être inclus qu’une seule fois. Le nom de fichier correct est <strong>« index.htm »</strong> pour un fichier vide afin de protéger les sous-répertoires.',
	'ARCADE_ACP_HELP_FAQ_GAMES_REQ_INSTALL_QUESTION'	=> 'Que faut-il pour installer un jeu ?',
	'ARCADE_ACP_HELP_FAQ_GAMES_SAVE_TYPE_ANSWER'		=> 'L’arcade prend en charge les types de sauvegarde de jeu suivants :<br>
															<ul>
																<li>phpBB Arcade</li>
																<li>IBPro</li>
																<li>IBPro V32</li>
																<li>Relax Arcade</li>
																<li>Olympus Arcade</li>
																<li>Jeux sans score</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GAMES_SAVE_TYPE_QUESTION'		=> 'Quels types de parties sauvegardées sont pris en charge ?',
	'ARCADE_ACP_HELP_FAQ_GAMES_TYPE_ANSWER'				=> 'L’arcade prend en charge les types de jeux suivants :<br>
															<ul>
																<li>Html5</li>
																<li>Flash - Converti en Html5.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GAMES_TYPE_QUESTION'			=> 'Quels modes de jeux sont pris en charge ?',
	'ARCADE_ACP_HELP_FAQ_GAMES_ZIP_ANSWER'				=> 'Oui. La structure de répertoires suivante est requise pour une compression correcte :<br>
															<ul>
																<li>test/ (Fichier du jeu)</li>
																<li>test/test.php (Fichier d’installation du jeu)</li>
																<li>test/test.png (Image de jeu 60x60 px)</li>
																<li>test/index.html (Le fichier index.html est responsable du démarrage du jeu.)</li>
															</ul>
															<br>Si cela vous convient, vous pouvez emballer le jeu tout de suite. Le fichier compressé terminé sera nommé de manière appropriée test.zip ou test.tar.',
	'ARCADE_ACP_HELP_FAQ_GAMES_ZIP_QUESTION'			=> 'Puis-je créer mon propre fichier compressé pour installer un jeu ?',
	'ARCADE_ACP_HELP_FAQ_GENERAL_FEATURES_ANSWER'		=> '<ul>
																<li>Compatibilité étendue avec les jeux d’arcade</li>
																<li>Catégories, sous-catégories et liens illimités (imitant les forums phpBB3)</li>
																<li>Modules du panneau d’administration complet, du panneau du modérateur et du panneau de l’utilisateur</li>
																<li>Permissions d’administrateur pour les modules PCA d’arcade</li>
																<li>Permissions modérateur pour les modules PCM d’arcade</li>
																<li>Permissions globales basées sur les jeux d’arcade</li>
																<li>Permissions basées sur les catégories locales</li>
																<li>Catégories protégées par mot de passe</li>
																<li>Catégories protégées par la limite d’âge</li>
																<li>Installation très facile des jeux</li>
																<li>Convertir automatiquement tous les types de jeux de sauvegarde pris en charge en fichiers tar</li>
																<li>Afficher qui joue et à quel jeu</li>
																<li>Système de jeux favoris</li>
																<li>Système interne de téléchargement de jeux</li>
																<li>Statistiques détaillées</li>
																<li>Système d’évaluation de jeu</li>
																<li>Système de commentaires de jeu</li>
																<li>Système de défi de jeu</li>
																<li>Système de tournoi de jeu</li>
																<li>Système de tournoi de groupe de jeu</li>
																<li>Système de rapport de jeu</li>
																<li>Jouer dans une nouvelle fenêtre</li>
																<li>Système de recherche de jeux</li>
																<li>Intégration d’un système de points</li>
																<li>Et plus encore…</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GENERAL_FEATURES_QUESTION'		=> 'Quelles fonctionnalités sont incluses dans phpBB Arcade ?',
	'ARCADE_ACP_HELP_FAQ_GENERAL_LANGS_ANSWER'			=> '<ul>
																<li>Les langues prises en charge peuvent être télécharger <b><a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/phpBB_Arcade_Languages.html">ICI</a></b>.</li>
																<li>Si vous avez créé un nouveau pack de langue, veuillez le partager avec nous <b><a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/phpBB_Arcade_User_Languages.html">ICI</a></b>.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GENERAL_LANGS_QUESTION'		=> 'Quelles sont les langues supportées ?',
	'ARCADE_ACP_HELP_FAQ_GENERAL_STYLES_ANSWER'			=> '<ul>
																<li>Les styles supportés peuvent être téléchargés <b><a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/phpBB_Arcade_Styles.html">ICI</a></b>.</li>
																<li>Si vous avez un nouveau style, veuillez le partager avec nous <b><a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/phpBB_Arcade_User_Styles.html">ICI</a></b>.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_GENERAL_STYLES_IMG_ANSWER'		=> 'Oui. chaque image située dans le chemin d’image par défaut « [ROOT]/ext/jv/arcade/styles/all/theme/images/ » peut être spécifique au style. Tout ce que vous avez à faire est de placer une image avec le même nom dans le fichier « [ROOT]/ext/jv/arcade/styles/your_style/theme/images/ ». Si un style n’a pas l’image spécifique, l’image par défaut sera utilisée. Ceci s’applique également aux images de catégorie. Pour utiliser des images de catégorie spécifiées par le style, vous devez d’abord choisir l’image par défaut « [ROOT]/ext/jv/arcade/styles/all/theme/images/cats/ » lors de la création/modification de la catégorie, puis le téléchargement de l’image avec le même nom dans le fichier « [ROOT]/ext/jv/arcade/styles/your_style/theme/images/arcade/cats/ ».',
	'ARCADE_ACP_HELP_FAQ_GENERAL_STYLES_IMG_QUESTION'	=> 'Puis-je utiliser des images spécifiques à un style dans l’arcade ?',
	'ARCADE_ACP_HELP_FAQ_GENERAL_STYLES_QUESTION'		=> 'Quels sont les styles supportés ?',
	'ARCADE_ACP_HELP_FAQ_INSTALL_DB_ANSWER'				=> 'L’arcade devrait fonctionner correctement avec toutes les bases de données qui sont déjà compatibles avec phpBB3.',
	'ARCADE_ACP_HELP_FAQ_INSTALL_DB_QUESTION'			=> 'Quels types de bases de données sont compatibles avec phpBB Arcade ?',
	'ARCADE_ACP_HELP_FAQ_INSTALL_INSTALL_ANSWER'		=> '<ul>
																<li>Téléchargez la dernière version et dépaquetez-la.</li>
																<li>Copiez les fichiers du serveur dans le répertoire « [ROOT]/ » du forum avec préservation de la structure des fichiers.</li>
																<li>Allez dans le PCA et cliquez dans le menu « Personnaliser » sur le lien « Activer » phpBB Arcade, ce qui installera phpBB Arcade.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_INSTALL_INSTALL_QUESTION'		=> 'Comment installer phpBB Arcade ?',
	'ARCADE_ACP_HELP_FAQ_INSTALL_UNINSTALL_ANSWER'		=> 'Allez dans le PCA et cliquez sur « Désactiver » après le lien « Effacer données », ce qui supprimera tous les fichiers phpBB Arcade du serveur.',
	'ARCADE_ACP_HELP_FAQ_INSTALL_UNINSTALL_QUESTION'	=> 'Comment désinstaller phpBB Arcade ?',
	'ARCADE_ACP_HELP_FAQ_INSTALL_UPDATE_ANSWER'			=> '<ul>
																<li>Téléchargez la dernière version et dépaquetez-la.</li>
																<li>Copiez les fichiers du serveur dans le répertoire «[ROOT]/» du forum.</li>
																<li>Allez dans le PCA et cliquez sur « Désactiver » après le lien « Activer », ce qui mettra à jour phpBB Arcade.</li>
																<li>Allez dans le PCA et cliquez sur le menu « Personnalisations », cliquez à l’intérieur sur le lien phpBB Arcade « Désactiver ». Maintenant, cliquez sur le lien phpBB Arcade « Activer » et votre arcade phpBB est mis à jour.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_INSTALL_UPDATE_QUESTION'		=> 'Comment mettre à jour phpBB Arcade ?',
	'ARCADE_ACP_HELP_FAQ_MODULES_ADD_AUTH_ANSWER'		=> 'Une fois le phpBB Arcade installé, vous devrez définir les permissions dans PCA pour l’utiliser. L’arcade utilise des permissions basées sur les catégories, qui imitent les permissions basées sur le forum que phpBB3 utilise, y compris l’utilisation des rôles. Vous devez également définir les permissions globales des utilisateurs/groupes de phpBB Arcade. Vous pouvez également utiliser les permissions d’administrateur pour définir l’accès des utilisateurs/groupes aux modules PCA de phpBB Arcade.',
	'ARCADE_ACP_HELP_FAQ_MODULES_ADD_AUTH_QUESTION'		=> 'Où se trouvent les permissions à paramétrer ? Pourquoi n’ai-je pas la permission de voir et d’utiliser phpBB Arcade ?',
	'ARCADE_ACP_HELP_FAQ_MODULES_ANSWER'				=> '<strong><br>L’arcade contient les modules PCA suivants :<br></strong>
															<strong>Paramètres</strong><br>
															<ul>
																<li><strong>Paramètres de système</strong> - Permet l’activation et le désactivation général des systèmes.</li>
																<li><strong>Paramètres généraux</strong> - Contrôler les paramètres généraux de l’arcade</li>
																<li><strong>Paramètres des extensions</strong> - Contrôle les paramètres des extensions de pour l’arcade.</li>
																<li><strong>Paramètres des jeux</strong> - Contrôler les paramètres des jeux de l’arcade</li>
																<li><strong>Paramètres des défis</strong> - Contrôler les paramètres des défis de l’arcade</li>
																<li><strong>Paramètres des tournois</strong> - Contrôler les paramètres de tournoi de l’arcade.</li>
																<li><strong>Paramètres de tournoi de groupe</strong> - Gérer les paramètres de tournoi de groupe pour l’arcade.</li>
																<li><strong>Paramètres des options</strong> - Contrôler les paramètres des options de l’arcade</li>
																<li><strong>Paramètres des pages</strong> - Contrôler les paramètres des pages de l’arcade</li>
																<li><strong>Paramètres des chemins</strong> - Contrôler les paramètres des chemins de l’arcade (Path)</li>
																<li><strong>Paramètres de charge</strong> - Paramètres de charge pour l’arcade.</li>
																<li><strong>Paramètres de classement d’activité</strong> - Paramètres de classement d’activité pour l’arcade.</li>
															</ul><br>
															<strong>Gestion de l’arcade</strong><br>
															<ul>
																<li><strong>Gestion du menu</strong> - Ajouter ou éditer, supprimer des éléments du menu. On ne peut que déplacer ou renommer les boutons principaux du menu.</li>
																<li><strong>Gestion des catégories</strong> - Ajouter, éditer, supprimer, déplacer et resynchroniser des catégories et des jeux</li>
																<li><strong>Gestion des jeux</strong> - Editer, supprimer des jeux</li>
																<li><strong>Gestion des utilisateurs</strong> - Editer les scores de chaque jeu</li>
																<li><strong>Gestion des tournois</strong> - Vous permet de créer, modifier et supprimer des tournois.</li>
																<li><strong>Gérer les tournois de groupe</strong> - Vous permet de créer, modifier et supprimer des tournois de groupe.</li>
																<li><strong>Gestion des annonces</strong> - Paramètrer, éditer les annonces.</li>
																<li><strong>Gestion des rangs</strong> - Ajouter, éditer et supprimer les rangs.</li>
															</ul><br>
															<strong>Fonctions d’arcade</strong><br>
															<ul>
																<li><strong>Ajout de jeux</strong> - Ajouter un jeu à l’arcade. Plusieurs jeux peuvent être ajoutés en même temps à une catégorie.</li>
																<li><strong>Télécharger/décompresser</strong> - Si le fichier d’installation contient des jeux compressés, vous pouvez décompresser ou télécharger un ou plusieurs fichiers à la fois. Après le déballage, le(s) jeu(x) est (sont) prêts pour l’installation.</li>
																<li><strong>Sauvegarde de jeux</strong> - Sauvegarder tous les jeux des catégories sélectionnées (sauvegarde)</li>
																<li><strong>Téléchargement de jeux</strong> - Télécharger des jeux à partir de sites qui hébergent des jeux compatibles avec l’arcade et qui autorisent leur téléchargement</li>
															</ul><br>
															<strong>Utilitaires</strong><br>
															<ul>
																<li><strong>Afficher les erreurs de jeux</strong> - Répertorie toutes les erreurs de jeux soumises par les membres.</li>
																<li><strong>Jeux supprimés</strong> - Répertorie les jeux supprimés et leurs raisons.</li>
																<li><strong>Utilisateurs bannis</strong> - Affichez/débloquez les utilisateurs bannis.</li>
																<li><strong>Stats des téléchargements</strong> - Découvrez combien de jeux les utilisateurs ont déjà téléchargés et de quels jeux il s’agit.</li>
																<li><strong>Créer un fichier d’installation de jeu</strong> - Créez un nouveau fichier d’installation à télécharger/visualiser/enregistrer sur le serveur ou téléchargez/visualisez les fichiers d’installation de jeu existants.</li>
																<li><strong>Guide de l’utilisateur</strong> - Affichez le guide de l’utilisateur de phpBB Arcade.</li>
															</ul><br>
															<strong>Journaux d’arcade</strong><br>
															<ul>
																<li><strong>Journal de l’administrateur</strong> - Les actions des administrateurs sont listées ici.</li>
																<li><strong>Journal de modérateur</strong> - Les actions des modérateurs sont listées ici.</li>
																<li><strong>Journal des utilisateurs</strong> - Les actions des utilisateurs sont listées ici.</li>
																<li><strong>Journal des erreurs</strong> - Toutes sortes d’erreurs sont listées ici.</li>
															</ul><br>
															<strong>Modèles de permission</strong><br>
															<ul>
																<li><strong>Rôles de catégorie</strong> - Gèrer les rôles pour les permissions de catégorie d’arcade.</li>
															</ul><br>
															<strong>Permissions basées sur des catégories</strong><br>
															<ul>
																<li><strong>Permissions des catégories</strong> - Gérer les accès des utilisateurs et groupes aux catégories d’arcade.</li>
																<li><strong>Permissions d’arcade des utilisateurs</strong> - Assigner les permissions arcade aux utilisateurs.</li>
																<li><strong>Permissions d’arcade des groupes</strong> - Assigner les permissions arcade aux groupes.</li>
																<li><strong>Copier les permissions de catégories</strong> - Copier les permissions d’arcade d’une catégorie vers une ou plusieurs autres catégories.</li>
															</ul><br>
															<strong>Masques de permission</strong><br>
															<ul>
																<li><strong>Afficher les permissions basées sur les catégories</strong> - Voir les permissions d’arcade assignées aux utilisateurs/groupes et catégories sélectionnés.</li>
															</ul><br>
															<strong>Fonctions de l’installation</strong><br>
															<ul>
																<li><strong>Vérification de l’installation</strong> - Vérifie que phpBB Arcade est installé correctement.</li>
																<li><strong>Mise à jour des données de jeux</strong> - Détection et mise à jour automatique des tailles des jeux, si les données ne sont pas correctes.</li>
																<li><strong>Conversion des fichiers d’installation des jeux</strong> - Convertit les fichiers d’installation des jeux au dernier format.</li>
															</ul><br>
															<strong>L’arcade comprend les modules PCM suivants :</strong><br>
															<ul>
																<li><strong>Gestion des jeux</strong> - Editer, déplacer et réinitialiser un jeu.</li>
																<li><strong>Gestion de tournoi</strong> - Créer, éditer un tournoi.</li>
																<li><strong>Gérer les tournois de groupe</strong> - Créer/modifier des tournois de groupe.</li>
																<li><strong>Journal du modérateur</strong> - Les actions du modérateur sont répertoriées.</li>
															</ul><br>
															<strong>L’arcade comprend les modules PCU suivants :</strong><br>
															<ul>
																<li><strong>Gérer les paramètres</strong> - Ces paramètres contrôlent divers aspects de l’arcade.</li>
																<li><strong>Paramètres du jeu</strong> - Personnaliser les paramètres de la page de jeu.</li>
																<li><strong>Paramètres de messages</strong> - Personnalisez les paramètres des messages.</li>
																<li><strong>Gérer les favoris</strong> - Marquez et supprimez les jeux favoris.</li>
																<li><strong>Gérer le stockage local</strong> - Afficher et supprimer les données locales du navigateur de l’appareil.</li>
															</ul>',
	'ARCADE_ACP_HELP_FAQ_MODULES_AUTH_ANSWER'			=> 'Pour qu’un administrateur puisse voir les modules, les permissions doivent être définies, cela ne peut être fait que par un seul fondateur par défaut.',
	'ARCADE_ACP_HELP_FAQ_MODULES_AUTH_QUESTION'			=> 'Comment se fait-il que je ne peux pas voir tous les modules PCA de l’arcade ?',
	'ARCADE_ACP_HELP_FAQ_MODULES_DOWNLOAD_ANSWER'		=> 'Les utilisateurs peuvent télécharger un jeu si vous leur donnez des permissions, cela peut être des permissions individuelles ou de groupe, en plus vous avez la possibilité d’activer la liste de téléchargement dans le module PCA afin qu’ils puissent télécharger des jeux depuis votre site via PCA.',
	'ARCADE_ACP_HELP_FAQ_MODULES_DOWNLOAD_QUESTION'		=> 'Comment puis-je fournir un téléchargement pour les autres ?',
	'ARCADE_ACP_HELP_FAQ_MODULES_NO_FAV_ANSWER'			=> 'Le module favori n’est visible que si nous en avons la permission, les permissions ne peuvent être modifiées que par l’administrateur.',
	'ARCADE_ACP_HELP_FAQ_MODULES_NO_FAV_QUESTION'		=> 'Comment se fait-il que je ne vois pas le module de mes jeux favoris ?',
	'ARCADE_ACP_HELP_FAQ_MODULES_NO_GAMES_ANSWER'		=> 'Pour ajouter des jeux, vous devez d’abord créer une catégorie pour les jeux, vous pouvez le faire dans le menu Gérer les catégories. Ils sont très faciles à faire.',
	'ARCADE_ACP_HELP_FAQ_MODULES_NO_GAMES_QUESTION'		=> 'Pourquoi ne puis-je pas ajouter de jeux?',
	'ARCADE_ACP_HELP_FAQ_MODULES_QUESTION'				=> 'De quels modules le PCA de phpBB Arcade dispose-t-il?',
	'ARCADE_ACP_HELP_FAQ_MODULES_REQ_DOWNLOAD_ANSWER'	=> 'Ce module doit avoir le <strong>« allow_url_fopen »</strong> activé et la <strong>cURL library</strong> doit être installée. Cela peut être vérifié en vérifiant les informations php sur votre serveur. Si <strong>« allow_url_fopen »</strong> est désactivé et que la <strong>cURL library</strong> n’est pas installée, le module ne fonctionnera pas.',
	'ARCADE_ACP_HELP_FAQ_MODULES_REQ_DOWNLOAD_QUESTION'	=> 'Pourquoi le module de téléchargement du jeu ne fonctionne-t-il pas ?',
	'ARCADE_ACP_HELP_FAQ_MODULES_USE_DOWNLOAD_ANSWER'	=> 'Il vous suffit de saisir l’URL du répertoire racine du forum phpBB et une liste de jeux sera disponible en téléchargement. Si le nom du jeu est vert, c’est que ces jeux sont déjà sur le serveur. Gardez à l’esprit que les téléchargements sont toujours contrôlés par les permissions du site web à partir duquel vous les obtenez. Vous devrez donc peut-être être connecté et/ou faire partie d’un groupe spécial pour télécharger des jeux. Contactez l’administrateur du site web si vous avez des questions.<br><br><a onclick="window.open(this.href); return false;" href="https://jv-arcade.com/dev/images/acp_download_games.png"><img src="https://jv-arcade.com/dev/images/acp_download_games.png" width="300" alt="PCA Télécharger des jeux" title="PCA Télécharger des jeux"></a>',
	'ARCADE_ACP_HELP_FAQ_MODULES_USE_DOWNLOAD_QUESTION'	=> 'Comment utiliser le module « Téléchargement de jeux » ?',
	'ARCADE_ACP_HELP_FAQ_SCORING_GUEST_SAVE_ANSWER'		=> 'Même si vous donnez les bonnes permissions au groupe des invités, ils ne pourront pas soumettre des scores dans l’arcade. C’est immuable, l’arcade est conçue ainsi.',
	'ARCADE_ACP_HELP_FAQ_SCORING_GUEST_SAVE_QUESTION'	=> 'Pourquoi les invités ne peuvent-ils pas soumettre des scores, même quand ils ont la permission ?',
	'ARCADE_ACP_HELP_FAQ_SCORING_SAVE_ANSWER'			=> 'La première chose à vérifier est que le mode de jeu est pris en charge par l’arcade et que la variable de score est correctement définie. La dernière chose à vérifier est la configuration des cookies dans le PCA. Si l’URL de votre site s’appelle <strong>http://www.exemple.com</strong> alors le domaine du cookie devrait être <strong>exemple.com</strong>. De plus, la protection des cookies doit être désactivée dans le PCA, car la protection des cookies ne prend en charge que les types de jeux phpBB Arcade.',
	'ARCADE_ACP_HELP_FAQ_SCORING_SAVE_QUESTION'			=> 'Pourquoi mes scores ne sont-ils pas enregistrés ?',
	'ARCADE_ACP_HELP_FAQ_SCORING_TEST_ANSWER'			=> 'Cela vous permet désormais de jouer à des jeux dans une catégorie sans enregistrer les données ou les scores. Cela vous permet de tester des jeux pour vous assurer qu’ils fonctionnent correctement. Lorsque vous avez terminé avec un jeu, vous verrez un message détaillant ce qui a pu se passer. À la fin du jeu, les administrateurs recevront des informations détaillées sur le jeu si le système « phpBB-DEBUG » est activé.<br><em>Pour activer le système « phpBB-DEBUG », nous devons installer l’extension « JVA - Debug ».</em>',
	'ARCADE_ACP_HELP_FAQ_SCORING_TEST_CAT_ANSWER'		=> 'Aller dans le module « Gestion de l’arcade » du PCA. Vous devez activer le « Mode Test » puis régler le « Mode Test » sur oui.',
	'ARCADE_ACP_HELP_FAQ_SCORING_TEST_CAT_QUESTION'		=> 'Comment activer le « Mode Test » pour une catégorie ?',
	'ARCADE_ACP_HELP_FAQ_SCORING_TEST_QUESTION'			=> 'A quoi sert le « Mode Test » ?'
]);
