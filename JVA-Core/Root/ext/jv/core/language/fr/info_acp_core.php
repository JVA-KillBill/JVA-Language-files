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

$lang = array_merge($lang, array(
	'JVA_CORE_EXT_DETECT_DISABLED'			=> 'Nous avons détecté que <strong>« %s »</strong> est installé mais actuellement désactivé.',
	'JVA_CORE_EXT_DETECT_ENABLED'			=> 'Nous avons détecté que <strong>« %s »</strong> est installé et actuellement activé.',
	'JVA_CORE_USE_POINTS_SYSTEM'			=> 'Activer le systéme de points',
	'JVA_CORE_USE_POINTS_SYSTEM_EXPLAIN'	=> 'Le systéme de points sera utilisé si vous l’activez ici, et si le systéme de points lui-même a également été activé.',
	'JVA_CORE_POINTS_SYSTEM_SETTINGS'		=> 'Paramétres du systéme de points',
	'JVA_CORE_SELECT_GROUP'					=> 'Sélectionner un groupe',
	'JVA_CORE_NO_SELECT_GROUP'				=> 'Vous n’avez pas sélectionné de groupe.',
	'JVA_CORE_SETTINGS'						=> 'Paramétres généraux',
	'JVA_CORE_SETTINGS_EXPLAIN'				=> 'Ici, vous pouvez personnaliser les paramétres généraux utilisés par l’extension.',

	'LOG_JVA_CORE_CONFIG_SETTINGS'			=> '<strong>Paramétres modifiés</strong><br>» %s',
));
