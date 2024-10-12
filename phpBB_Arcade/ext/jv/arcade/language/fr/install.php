<?php
/**
*
* @package phpBB Arcade
* @version $Id: install.php 173 2024-01-14 12:28:15Z KillBill $
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
// Some characters you may want to copy&paste: ‚ ‘ ’ « » „ “ ” … ≧

$lang = array_merge($lang, [
	'INSTALL_ARCADE_ALL_FOUND'							=> 'Tout trouvé',
	'INSTALL_ARCADE_BBCODE_HELPLINE'					=> 'Ligne d’aide',
	'INSTALL_ARCADE_BBCODE_REQD'						=> 'Vérification du BBCode',
	'INSTALL_ARCADE_BBCODE_REQD_EXPLAIN'				=> '<strong>Requis</strong> - Ajout de BBCode pour que phpBB Arcade fonctionne correctement.',
	'INSTALL_ARCADE_BBCODE_USAGE'						=> 'Structure du BBCode',
	'INSTALL_ARCADE_DIRS_FILES_REQD'					=> 'Fichiers et répertoires',
	'INSTALL_ARCADE_DIRS_FILES_REQD_EXPLAIN'			=> '<strong>Requis</strong> - Pour fonctionner correctement, phpBB Arcade doit pouvoir accéder à certains fichiers ou répertoires pour éventuellement écrire dedans. Si vous voyez « Ne peut trouver », il faut créer le fichier ou répertoire en question. Si vous voyez « Non inscriptible », il faut donner les permissions en écriture au fichier ou répertoire concerné.',
	'INSTALL_ARCADE_DISPLAY_ON_POSTING'					=> 'Afficher sur la page de messages',
	'INSTALL_ARCADE_DONATE_TITLE'						=> 'phpBB Arcade - Donation',
	'INSTALL_ARCADE_FINISH'								=> 'La vérification de phpBB Arcade s’est totalement déroulée avec succès. Merci d’avoir choisi le logiciel phpBB Arcade.',
	'INSTALL_ARCADE_FOUND'								=> 'Trouvé',
	'INSTALL_ARCADE_HTML_REPLACEMENT'					=> 'Code HTML',
	'INSTALL_ARCADE_JVA_CORE_REQD'						=> 'Version de JVA - Core ≧ %s',
	'INSTALL_ARCADE_JVA_CORE_REQD_EXPLAIN'				=> '<strong>Requis</strong> - Vous devez utiliser au moins la version « %s » de « JVA - Core » pour pouvoir utiliser phpBB Arcade.',
	'INSTALL_ARCADE_MAIN_PAGE'							=> 'Aller à la page principale du PCA de phpBB Arcade',
	'INSTALL_ARCADE_NEXT_STEP'							=> 'Passer à l’étape suivante',
	'INSTALL_ARCADE_NOT_FOUND'							=> 'Pas trouvé',
	'INSTALL_ARCADE_PHPBB_REQD'							=> 'Version de phpBB ≧ %s',
	'INSTALL_ARCADE_PHPBB_REQD_EXPLAIN'					=> '<strong>Requis</strong> - Vous devez utiliser au moins la version « %s » de « phpBB » pour pouvoir utiliser phpBB Arcade.',
	'INSTALL_ARCADE_PHP_CURL_SUPPORT'					=> 'Le paramètre PHP <var>curl</var> est disponible',
	'INSTALL_ARCADE_PHP_CURL_SUPPORT_EXPLAIN'			=> '<strong>Optionnel</strong> - Cette fonction est optionnelle, cependant certains modules phpBB Arcade comme le module PCA de téléchargements ne marcheront pas sans cela.',
	'INSTALL_ARCADE_PHP_GETIMAGESIZE_SUPPORT'			=> 'La fonction PHP getimagesize() est disponible',
	'INSTALL_ARCADE_PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Requis</strong> - Pour que phpBB Arcade fonctionne correctement, il faut que la fonction getimagesize soit active.',
	'INSTALL_ARCADE_PHP_REQD'							=> 'Version de PHP ≧ %s',
	'INSTALL_ARCADE_PHP_REQD_EXPLAIN'					=> '<strong>Requis</strong> - Vous devez avoir au moins la version « %s » de PHP pour pouvoir utiliser phpBB Arcade.',
	'INSTALL_ARCADE_PHP_SETTINGS'						=> 'Version PHP et paramètres',
	'INSTALL_ARCADE_PHP_URL_FOPEN_SUPPORT'				=> 'Le paramètre PHP <var>allow_url_fopen</var> est activé',
	'INSTALL_ARCADE_PHP_URL_FOPEN_SUPPORT_EXPLAIN'		=> '<strong>Optionnel</strong> - Ce réglage est optionnel, cependant certaines fonctions de phpBB Arcade comme le module PCA de téléchargements ne marcheront pas correctement sans cela.',
	'INSTALL_ARCADE_REQUIREMENTS'						=> 'Conditions requises pour l’installation de phpBB Arcade.',
	'INSTALL_ARCADE_REQUIREMENTS_EXPLAIN'				=> 'Faire des tests sur le serveur pour vous assurer que vous avez bien installé phpBB Arcade. Veuillez lire les résultats attentivement et ne poursuivez pas tant que tous les tests ne sont pas finis. Si vous souhaitez utiliser des fonctionnalités liées aux tests optionnels, vous devez vous assurer aussi que tous ces tests aient été exécutés.',
	'INSTALL_ARCADE_SOFTWARE_VERSION'					=> 'Version du logiciel',
	'INSTALL_ARCADE_TEST_AGAIN'							=> 'Tester à nouveau',
	'INSTALL_ARCADE_UNWRITABLE'							=> 'Pas inscriptible',
	'INSTALL_ARCADE_VERIFY_DB'							=> 'Vérifier la base de données de phpBB Arcade',
	'INSTALL_ARCADE_VERIFY_DB_ACP_MODULES'				=> 'Vérifier les modules PCA',
	'INSTALL_ARCADE_VERIFY_DB_ARCADE_PERMISSIONS'		=> 'Vérifier les permissions phpBB Arcade',
	'INSTALL_ARCADE_VERIFY_DB_CONFIGS'					=> 'Vérifier les configurations',
	'INSTALL_ARCADE_VERIFY_DB_DATA'						=> 'Vérifier la base de données',
	'INSTALL_ARCADE_VERIFY_DB_EXPLAIN'					=> 'Il sera vérifié que toutes les données de la base de données d’arcade sont correctes dans la base de données.',
	'INSTALL_ARCADE_VERIFY_DB_MCP_MODULES'				=> 'Vérifier les modules PCM',
	'INSTALL_ARCADE_VERIFY_DB_PERMISSIONS'				=> 'Vérifier les permissions',
	'INSTALL_ARCADE_VERIFY_DB_PHPBB_PERMISSIONS'		=> 'Vérifier les permissions phpBB',
	'INSTALL_ARCADE_VERIFY_DB_TABLES'					=> 'Vérifier les tables',
	'INSTALL_ARCADE_VERIFY_DB_UCP_MODULES'				=> 'Vérifier les modules PCU',
	'INSTALL_ARCADE_VERIFY_ERROR_DB_VERSION'			=> 'La vérification de phpBB Arcade ne se lance pas car une nouvelle version du logiciel a été détectée. Veuillez lancer %sla mise à jour de phpBB Arcade%s.',
	'INSTALL_ARCADE_VERIFY_FILES'						=> 'Vérifier les fichiers phpBB Arcade',
	'INSTALL_ARCADE_VERIFY_FILES_EXIST'					=> 'Vérifier si les fichiers existent',
	'INSTALL_ARCADE_VERIFY_FILES_EXPLAIN'				=> 'Cela vérifiera que tous les fichiers de phpBB Arcade sont présents sur le serveur et vérification des répertoires et fichiers anciens ou inutilisés en attente de suppression',
	'INSTALL_ARCADE_VERIFY_OLD_FILES_EXIST'				=> 'Recherchez les répertoires et fichiers anciens ou inutilisés.',
	'INSTALL_ARCADE_WRITABLE'							=> 'Inscriptible',
	'INS_ARCADE_ADD_ERROR_LOG'							=> 'Les erreurs qui se sont produites ont été enregistrées.',
	'INS_ARCADE_CONVERT_GAME_INSTALL_FILE_END'			=> 'Le processus de conversion est terminé, vous pouvez voir les résultats ci-après.',
	'INS_ARCADE_CONVERT_GAME_INSTALL_FILE_EXPLAIN'		=> 'Ci-dessous on peut voir que le processus est en progrès. Ne fermez pas votre navigateur.',
	'INS_ARCADE_CONVERT_GAME_INSTALL_FILE_PROCESSING'	=> 'Veuillez patienter…<br>%1$s<br>Processus en cours sur les fichiers d’installation de jeux %2$s sur %3$s.',
	'INS_ARCADE_CONVERT_GAME_INSTALL_FILE_START'		=> 'Lancer la conversion',
	'INS_ARCADE_CONVERT_TOTAL_GAME_INSTALL_FILES'		=> 'Fichiers convertis',
	'INS_ARCADE_DATA_FILES_CORRECT'						=> 'Fichiers avec des données correctes',
	'INS_ARCADE_DELETE_DUPLICATE_GAME'					=> [
		1												=> 'Jeu en double supprimé',
		2												=> 'Jeux en double supprimés',
	],
	'INS_ARCADE_ENABLE_ERROR'							=> 'L’extension ne peut pas être activée parce que la version de <strong>« phpBB »</strong> est inférieure à la version <strong>« %s »</strong> !',
	'INS_ARCADE_FILES_ALL_EXISTS'						=> 'Tous les fichiers existent',
	'INS_ARCADE_FILE_WRITE_EXPLAIN'						=> '<span style="color: #ff0000;">Attention:</span> La mise à jour des fichiers d’installation de jeux ne réussira que si les fichiers sont inscriptibles, aussi veuillez vous assurer que les permissions sont correctement définies.',
	'INS_ARCADE_GAME_CONVERT_FILE'						=> 'Convertir les fichiers d’installation de jeux',
	'INS_ARCADE_GAME_CONVERT_FILE_EXPLAIN'				=> 'Ici vous avez la possibilité de convertir les fichiers d’installation des jeux existants au format de la dernière version.',
	'INS_ARCADE_GAME_DATA_CORRECT'						=> 'Jeux avec des données correctes',
	'INS_ARCADE_GAME_DATA_UPDATED'						=> 'Jeux mis à jour',
	'INS_ARCADE_GAME_FILES_NOT_FOUND'					=> 'Fichiers de jeu pas trouvés',
	'INS_ARCADE_GAME_INSTALL_FILES_NOT_FOUND'			=> 'Les fichiers d’installation de jeux n’ont pas été trouvés',
	'INS_ARCADE_GAME_INSTALL_FILES_UNWRITABLE'			=> 'Fichiers non inscriptibles',
	'INS_ARCADE_GAME_INSTALL_FILE_UPDATED'				=> 'Fichiers d’installation de jeux mis à jour',
	'INS_ARCADE_UND_GAMES_FILESIZE'						=> 'La taille des fichiers et des jeux est indéterminable',
	'INS_ARCADE_UPDATE_GAME_DATA_END'					=> 'Le processus de mise à jour est terminé, vous pouvez voir les résultats ci-dessous.',

	'JVA_CORE_EXT_NOT_FOUND'							=> 'L’extension ne peut pas être activée car l’extension « JVA - Core » ne peut pas être trouvée !',
]);
