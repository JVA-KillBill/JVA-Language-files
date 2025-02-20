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
	'JVA_CORE_EXT_DETECT_DISABLED'			=> 'We hebben vastgesteld dat <strong>“%s”</strong> is geinstalleerd en momenteel is uitgeschakeld.',
	'JVA_CORE_EXT_DETECT_ENABLED'			=> 'We hebben vastgesteld dat <strong>“%s”</strong> is geinstalleerd en momenteel is ingeschakeld.',
	'JVA_CORE_USE_POINTS_SYSTEM'			=> 'Schakel puntensysteem in',
	'JVA_CORE_USE_POINTS_SYSTEM_EXPLAIN'	=> 'Het puntensysteem wordt gebruikt als je het hier inschakelt, en als het puntensysteem zelf ook is ingeschakeld.',
	'JVA_CORE_POINTS_SYSTEM_SETTINGS'		=> 'Puntensysteem instellingen',
	'JVA_CORE_SELECT_GROUP'					=> 'Selecteer een groep',
	'JVA_CORE_NO_SELECT_GROUP'				=> 'Je hebt geen groep geselecteerd.',
	'JVA_CORE_SETTINGS'						=> 'Algemene instellingen',
	'JVA_CORE_SETTINGS_EXPLAIN'				=> 'Hier kan je de algemene instellingen aanpassen die door de extensie worden gebruikt.',

	'LOG_JVA_CORE_CONFIG_SETTINGS'			=> '<strong>Gewijzigde instellingen</strong><br>» %s',
));
