<?php
/**
*
* @package JVA - Core
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
	'ACP_CAT_JVA_CORE'						=> 'JVA - Core',
	'ACP_JVA_CORE'							=> 'JVA - Core extension',
	'ACP_JVA_CORE_DB_VERSSION'				=> 'Version de la base de données :',
	'ACP_JVA_CORE_EXPLAIN'					=> 'L’extension « JVA - Core » contient de nombreuses fonctions qui peuvent être librement utilisées par d’autres extensions. L’objectif est d’éviter d’avoir à placer ces fonctions dans chaque extension, évitant ainsi les doublons et réduisant le temps de chargement des données. Les fonctions disponibles de « JVA - Core » sont en constante expansion, ce qui affecte les fonctions PHP, Html et JavaScript.',
	'ACP_JVA_CORE_FILE_VERSSION'			=> 'Version du fichier :',
	'ACP_JVA_CORE_MAIN'						=> 'Principal',
	'ACP_JVA_CORE_VERSION_ERROR'			=> 'Le numéro de version du fichier et de la base de données ne correspond pas !<br><br>Si une mise à jour a été effectuée, l’extension doit être désactivée avant de télécharger de nouveaux fichiers et réactivée après un téléchargement de fichier réussi.',

	'JVA_CORE_EXT_DETECT_DISABLED'			=> 'Nous avons détecté que <strong>« %s »</strong> est installé mais actuellement désactivé.',
	'JVA_CORE_EXT_DETECT_ENABLED'			=> 'Nous avons détecté que <strong>« %s »</strong> est installé et actuellement activé.',
	'JVA_CORE_NO_SELECT_GROUP'				=> 'Vous n’avez pas sélectionné de groupe.',
	'JVA_CORE_POINTS_SYSTEM_SETTINGS'		=> 'Paramétres du systéme de points',
	'JVA_CORE_SELECT_GROUP'					=> 'Sélectionner un groupe',
	'JVA_CORE_SETTINGS'						=> 'Paramétres généraux',
	'JVA_CORE_SETTINGS_EXPLAIN'				=> 'Ici, vous pouvez personnaliser les paramétres généraux utilisés par l’extension.',
	'JVA_CORE_USE_POINTS_SYSTEM'			=> 'Activer le systéme de points',
	'JVA_CORE_USE_POINTS_SYSTEM_EXPLAIN'	=> 'Le systéme de points sera utilisé si vous l’activez ici, et si le systéme de points lui-même a également été activé.',

	'LOG_JVA_CORE_CONFIG_SETTINGS'			=> '<strong>Paramétres modifiés</strong><br>» %s',
]);
