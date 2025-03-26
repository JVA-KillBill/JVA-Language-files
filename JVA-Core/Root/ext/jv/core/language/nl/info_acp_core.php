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
	'ACP_JVA_CORE'							=> 'JVA - Core extensie',
	'ACP_JVA_CORE_DB_VERSSION'				=> 'Database versie:',
	'ACP_JVA_CORE_EXPLAIN'					=> 'De extensie “JVA - Core” bevat veel functies die vrij kunnen worden gebruikt door andere extensies. Het doel is om te voorkomen dat deze functies in elke extensie moeten worden geplaatst, waardoor duplicatie wordt voorkomen en de laadtijd van gegevens wordt verkort. De beschikbare functies van “JVA - Core” worden voortdurend uitgebreid, wat van invloed is op PHP-, Html- en JavaScript-functies.',
	'ACP_JVA_CORE_FILE_VERSSION'			=> 'Bestand versie:',
	'ACP_JVA_CORE_MAIN'						=> 'Voornaamste',
	'ACP_JVA_CORE_VERSION_ERROR'			=> 'Het versienummer van het bestand en de database komt niet overeen!<br><br>Als er een update is uitgevoerd, moet de extensie worden uitgeschakeld voordat nieuwe bestanden worden geüpload en opnieuw worden ingeschakeld na een succesvolle bestandsupload.',

	'JVA_CORE_EXT_DETECT_DISABLED'			=> 'We hebben vastgesteld dat <strong>“%s”</strong> is geinstalleerd en momenteel is uitgeschakeld.',
	'JVA_CORE_EXT_DETECT_ENABLED'			=> 'We hebben vastgesteld dat <strong>“%s”</strong> is geinstalleerd en momenteel is ingeschakeld.',
	'JVA_CORE_NO_SELECT_GROUP'				=> 'Je hebt geen groep geselecteerd.',
	'JVA_CORE_POINTS_SYSTEM_SETTINGS'		=> 'Puntensysteem instellingen',
	'JVA_CORE_SELECT_GROUP'					=> 'Selecteer een groep',
	'JVA_CORE_SETTINGS'						=> 'Algemene instellingen',
	'JVA_CORE_SETTINGS_EXPLAIN'				=> 'Hier kan je de algemene instellingen aanpassen die door de extensie worden gebruikt.',
	'JVA_CORE_USE_POINTS_SYSTEM'			=> 'Schakel puntensysteem in',
	'JVA_CORE_USE_POINTS_SYSTEM_EXPLAIN'	=> 'Het puntensysteem wordt gebruikt als je het hier inschakelt, en als het puntensysteem zelf ook is ingeschakeld.',

	'LOG_JVA_CORE_CONFIG_SETTINGS'			=> '<strong>Gewijzigde instellingen</strong><br>» %s',
]);
