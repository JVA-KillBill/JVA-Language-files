<?php
/**
*
* @package Board3 Portal v2.3
* @copyright (c) 2013 Board3 Group ( www.board3.de )
* @license GNU General Public License, version 2 (GPL-2.0-only)
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

$lang = array_merge($lang, [
	'ACP_PORTAL'				=> 'Portail',
	'ACP_PORTAL_GENERAL_INFO'	=> 'Paramètres généraux',
	'ACP_PORTAL_MODULES'		=> 'Modules du portail',
	'ACP_PORTAL_UPLOAD'			=> 'Module de transfert',

	'LOG_PORTAL_CONFIG'			=> '<strong>Paramètres du portail modifiés</strong><br>&raquo; %s',
	'LOG_PORTAL_EVENT_ADDED'	=> '<strong>Paramètres du portail modifiés</strong><br>&raquo; Évènement ajouté : %s ',
	'LOG_PORTAL_EVENT_REMOVED'	=> '<strong>Paramètres du portail modifiés</strong><br>&raquo; Évènement retiré : %s ',
	'LOG_PORTAL_EVENT_UPDATED'	=> '<strong>Paramètres du portail modifiés</strong><br>&raquo; Évènement mis à jour : %s ',
	'LOG_PORTAL_LINK_ADDED'		=> '<strong>Paramètres du portail modifiés</strong><br>&raquo; Lien ajouté : %s ',
	'LOG_PORTAL_LINK_REMOVED'	=> '<strong>Paramètres du portail modifiés</strong><br>&raquo; Lien retiré : %s ',
	'LOG_PORTAL_LINK_UPDATED'	=> '<strong>Paramètres du portail modifiés</strong><br>&raquo; Lien mis à jour : %s ',
]);
