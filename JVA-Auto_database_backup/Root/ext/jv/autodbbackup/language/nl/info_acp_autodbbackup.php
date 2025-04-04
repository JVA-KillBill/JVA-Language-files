<?php
/**
*
* @package JVA - Auto database backup
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
	'ACP_CAT_JV_AUTO_DATABASE'					=> 'JVA - Auto database backup',
	'ACP_CAT_JV_AUTO_DATABASE_SETTINGS'			=> 'Automatische databaseback-up instellingen',
	'ACP_CAT_JV_AUTO_DATABASE_SETTINGS_EXPLAIN'	=> 'Hier kan je een automatisch back-upproces instellen dat een back-up maakt van alle phpBB-gerelateerde gegevens. Het resulterende pakket wordt opgeslaan in de store/map. Afhankelijk van je serverconfiguratie kan je het bestand op verschillende manieren comprimeren.',
	'ACP_JV_AUTO_BACKUPS'						=> 'Aantal back-ups',
	'ACP_JV_AUTO_BACKUPS_EXPLAIN'				=> 'Hier kan je het maximale aantal back-ups opgeven dat kan worden opgeslaan. Als je deze waarde overschrijdt, wordt de oudste back-up verwijderd.<br><em>Als je dit instelt op 0, kunnen onbeperkte back-ups worden gemaakt.</em>',
	'ACP_JV_AUTO_DATABASE_DAYS'					=> 'Backup-interval',
	'ACP_JV_AUTO_DATABASE_DAYS_EXPLAIN'			=> 'Voert elke dag een automatische databaseback-up uit.',
	'ACP_JV_AUTO_DATABASE_ENABLE'				=> 'Automatische database back-up',
	'ACP_JV_AUTO_DATABASE_OPTIMIZE'				=> 'Database optimalisatie',
	'ACP_JV_AUTO_DATABASE_OPTIMIZE_EXPLAIN'		=> 'Optimaliseer gefragmenteerde tabellen voordat je een back-up maakt voor betere prestaties.',

	'LOG_JV_AUTO_DB_BACKUP'						=> '<strong>Automatische database back-up</strong>',
	'LOG_JV_AUTO_DB_BACKUP_SETTINGS'			=> '<strong>Wijzig de instellingen van de automatische databaseback-up</strong>',
	'LOG_JV_AUTO_DB_OPTIMIZE_BACKUP'			=> '<strong>Automatische database-optimalisatie en back-up</strong>',
]);
