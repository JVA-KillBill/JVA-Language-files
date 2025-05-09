<?php
/**
*
* This file is part of the french language pack for the phpBB Forum Software package.
* This file is translated by phpBB-fr.com <http://www.phpbb-fr.com>
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
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
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'CONTROLLER_ARGUMENT_VALUE_MISSING'	=> 'Valeur manquante pour l’argument #%1$s : <strong>%3$s</strong> dans la classe <strong>%2$s</strong>',
	'CONTROLLER_NOT_SPECIFIED'			=> 'Aucun contrôleur n’a été spécifié.',
	'CONTROLLER_METHOD_NOT_SPECIFIED'	=> 'Aucune méthode n’a été spécifiée pour le contrôleur.',
	'CONTROLLER_SERVICE_UNDEFINED'		=> 'Le service du contrôleur « <strong>%s</strong> » n’est pas défini dans ./config/services.yml.',
));
