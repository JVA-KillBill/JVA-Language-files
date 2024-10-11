<?php
/**
*
* @package JVA - Footer Chat
* @version $Id$
* @author 2011-2024 KillBill
* @copyright (c) 2014-2024 https://jv-arcade.com/ - https://jv-arcade.com/contact
* @license https://jv-arcade.com/License.html JVA License v1
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
	'JVA_CORE_EXT_NOT_FOUND'		=> 'L’extension ne peut pas être activée car l’extension « JVA - Core » est introuvable!',
	'JV_CHAT'						=> 'Tchat',
	'JV_CHAT_SOUND_OFF'				=> 'Le son du tchat est éteint',
	'JV_CHAT_SOUND_ON'				=> 'Le son du tchat est activé',
	'JV_CHAT_ONLINE'				=> 'Le tchat est activé',
	'JV_CHAT_OFFLINE'				=> 'Le tchat est désactivé',
	'JV_CHAT_DONT_DISTURB'			=> 'Ne pas déranger',
	'JV_CHAT_ALL_USERS'				=> 'Tous les utilisateurs',
	'JV_CHAT_ONLY_ONLINE_USERS'		=> 'Utilisateurs en ligne uniquement.',
	'JV_CHAT_NO_ONLINE_USERS'		=> 'Aucun utilisateur disponible.',
	'JV_CHAT_USER_LOGIN'			=> 'Vous n’êtes pas connecté, reconnectez-vous.',
	'JV_CHAT_NEW_MSG'				=> '%s nouveau message reçu',
	'JV_CHAT_DELETE_MSGS'			=> 'Supprimer des messages',
	'JV_CHAT_DELETE_MSGS_CONFIRM'	=> 'Êtes-vous sûr de vouloir supprimer les messages?',
));
