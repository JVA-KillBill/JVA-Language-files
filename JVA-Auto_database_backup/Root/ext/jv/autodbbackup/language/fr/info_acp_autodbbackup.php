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
	'ACP_CAT_JV_AUTO_DATABASE_SETTINGS'			=> 'Configurer la sauvegarde automatique de la base de données',
	'ACP_CAT_JV_AUTO_DATABASE_SETTINGS_EXPLAIN'	=> 'Ici, vous pouvez configurer un processus de sauvegarde automatique, qui sauvegarde toutes les données liées á phpBB. Le package résultant est enregistré dans le répertoire/store. Selon la configuration de votre serveur, vous pourrez peut-être compresser le fichier dans un certain nombre de formats.',
	'ACP_JV_AUTO_BACKUPS'						=> 'Nombre de sauvegardes',
	'ACP_JV_AUTO_BACKUPS_EXPLAIN'				=> 'Vous pouvez spécifier ici le nombre maximum de sauvegardes pouvant être stockées. Si vous dépassez cette valeur, la sauvegarde la plus ancienne sera supprimée.<br><em>Si elle est définie sur 0, des sauvegardes illimitées peuvent être créées.</em>',
	'ACP_JV_AUTO_DATABASE_DAYS'					=> 'Intervalle de sauvegarde',
	'ACP_JV_AUTO_DATABASE_DAYS_EXPLAIN'			=> 'Effectue une sauvegarde automatique de la base de données dans les jours spécifiés.',
	'ACP_JV_AUTO_DATABASE_ENABLE'				=> 'Sauvegarde automatique de la base de données',
	'ACP_JV_AUTO_DATABASE_OPTIMIZE'				=> 'Optimiser la base de données',
	'ACP_JV_AUTO_DATABASE_OPTIMIZE_EXPLAIN'		=> 'Optimisez les tables fragmentées avant la sauvegarder pour obtenir de meilleures performances.',

	'LOG_JV_AUTO_DB_BACKUP'						=> '<strong>Sauvegarde automatique de la base de données</strong>',
	'LOG_JV_AUTO_DB_BACKUP_SETTINGS'			=> '<strong>Modification des paramètres de sauvegarde automatique de la base de données</strong>',
	'LOG_JV_AUTO_DB_OPTIMIZE_BACKUP'			=> '<strong>Optimisation et sauvegarde automatique de la base de données',
]);
