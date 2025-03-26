<?php
/**
*
* @package JVA - phpBB Shoutbox
* @version $Id$
* @author 2011-2020 KillBill
* @copyright (c) 2014-2020 https://jv-arcade.com/ - https://jv-arcade.com/contact
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
	'JV_SHOUTBOX'							=> 'Shoutbox',
	'JV_SHOUTBOX_AJAX_ERROR'				=> 'Une erreur s’est produite lors du traitement.',
	'JV_SHOUTBOX_AUTO_REFRESH_TIME_TITLE'	=> 'Rechargement automatique toutes les %d secondes',
	'JV_SHOUTBOX_BBCODES'					=> 'BBCodes',
	'JV_SHOUTBOX_BBCODES_FAQ'				=> 'BBCodes FAQ',
	'JV_SHOUTBOX_CLOSE'						=> 'Fermer la shoutbox',
	'JV_SHOUTBOX_CONFIRM_DELETE_MSG'		=> 'Voulez-vous vraiment supprimer ce message ?',
	'JV_SHOUTBOX_CUSTOM_BBCODES'			=> 'BBC-codes personnalisés',
	'JV_SHOUTBOX_DELETE_MESSAGE'			=> 'Supprimer le message',
	'JV_SHOUTBOX_EDIT_MESSAGE'				=> 'Modifier le message',
	'JV_SHOUTBOX_EMPTY_MSG_ERROR'			=> 'Vous ne pouvez pas envoyer un message vide.',
	'JV_SHOUTBOX_EXPLAIN'					=> 'Chat public avec les utilisateurs.',
	'JV_SHOUTBOX_F_EDITED_POST'				=> '%3$s a édité un message dans le forum %1$s sur le sujet %2$s.',
    'JV_SHOUTBOX_F_NEW_POST'                => '%3$s a commenté un message dans le forum %1$s sur le sujet %2$s.',
    'JV_SHOUTBOX_F_NEW_POST_QUOTE'          => '%3$s a cité un message dans le forum %1$s sur le sujet %2$s.',
    'JV_SHOUTBOX_F_NEW_TOPIC'               => '%3$s a ouvert un nouveau sujet dans le forum %1$s : %2$s.',
	'JV_SHOUTBOX_IP_BUTTON_TITLE'			=> 'Information sur l’adresse IP d’utilisateur « %s » ',
	'JV_SHOUTBOX_MSG_EDITED_TIMES'			=> array(
		1									=> 'Modifié %d fois.',
		2									=> 'Modifié %d fois.',
	),
	'JV_SHOUTBOX_MSG_FLOOD_ERROR'			=> 'Vous ne pouvez pas poster un autre message car vous venez d’envoyer le précédent.',
	'JV_SHOUTBOX_MSG_MAX_CHARS_ERROR'		=> 'Le message peut contenir jusqu’à %d caractères.',
	'JV_SHOUTBOX_MSG_MIN_CHARS_ERROR'		=> array(
		1									=> 'Le message doit contenir au moins %d caractère.',
		2									=> 'Le message doit contenir au moins %d caractères.',
	),
	'JV_SHOUTBOX_MSG_NO_USER_IP'			=> 'Le message n’existe pas ou aucune IP n’a été attribuée à ce message.',
	'JV_SHOUTBOX_NEW_MSG_TITLE'				=> array(
		1									=> '(%d) nouveau message arrivé !',
		2									=> '(%d) nouveaux messages arrivés !',
	),
	'JV_SHOUTBOX_NO_JS'						=> 'Pour utiliser la shoutbox, javascript doit être activé pour que cela fonctionne !',
	'JV_SHOUTBOX_NO_MSG_ID'					=> 'Message non trouvé.',
	'JV_SHOUTBOX_NO_PERMISSION_DELETE_MSG'	=> 'Vous n’êtes pas autorisé à supprimer ce message.',
	'JV_SHOUTBOX_NO_PERMISSION_EDIT_MSG'	=> 'Vous n’avez pas la permission de modifier ce message.',
	'JV_SHOUTBOX_NO_PERMISSION_SEND_MSG'	=> 'Vous n’êtes pas autorisé à envoyer des messages.',
	'JV_SHOUTBOX_OPEN'						=> 'Ouvrir la shoutbox',
	'JV_SHOUTBOX_PM_BUTTON_TITLE'			=> 'Envoyer un message privé',
	'JV_SHOUTBOX_QUOTE_BUTTON_TITLE'		=> 'Cite un message',
	'JV_SHOUTBOX_RE_USER'					=> '@%s',
	'JV_SHOUTBOX_RE_USER_TITLE'				=> 'Envoyer une réponse à l’utilisateur',
	'JV_SHOUTBOX_SOUND_OFF_TITLE'			=> 'Son désactivé',
	'JV_SHOUTBOX_SOUND_ON_TITLE'			=> 'Son activé',
	'JV_SHOUTBOX_SUCCESS_DELETE_MSG'		=> 'Le message a été supprimé avec succès.',
	'JV_SHOUTBOX_VIEWING'					=> 'Afficher la shoutbox',
));
