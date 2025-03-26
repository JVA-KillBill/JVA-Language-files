<?php
/**
*
* @package JVA - phpBB Shoutbox
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
	'ACP_CAT_JV_SHOUTBOX_SETTINGS'						=> 'Shoutbox',
	'ACP_JV_SHOUTBOX'									=> 'JVA - phpBB Shoutbox',
	'ACP_JV_SHOUTBOX_AUTHOR'							=> 'Auteur du message',
	'ACP_JV_SHOUTBOX_AUTHOR_EXPLAIN'					=> 'Ici, vous pouvez définir l’auteur qui envoie les annonces. Si vous laissez ce champ vide et installez l’extension « JV Add System Bot », l’annonce sera envoyée sous ce nom. S’il n’y a pas d’utilisateur « System Bot », le nom d’utilisateur actuellement configuré sera utilisé pour les annonces.',
	'ACP_JV_SHOUTBOX_AVATAR'							=> 'Afficher l’avatar',
	'ACP_JV_SHOUTBOX_AVATAR_EXPLAIN'					=> 'Lorsqu’il est activé, les avatars seront affichés.',
	'ACP_JV_SHOUTBOX_BBCODE_ALLOWED'					=> 'BBCode autorisé',
	'ACP_JV_SHOUTBOX_BBCODE_ALLOWED_EXPLAIN'			=> 'Le BBCode spécifié ne peut être utilisé que dans la shoutbox. Écrivez chaque nouveau BBCode sur une nouvelle ligne.',
	'ACP_JV_SHOUTBOX_CUSTOM_BBCODE'						=> 'BBCode personnalisé autorisé',
	'ACP_JV_SHOUTBOX_CUSTOM_BBCODE_EXPLAIN'				=> 'Si autorisé, le BBCode personnalisé sera également affiché.',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE'						=> 'Page personnalisée autorisée.',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_EXPLAIN'				=> 'Ici, vous pouvez activer l’affichage de la shoutbox sur une page personnalisée.',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_ONLINE_LIST'			=> 'Affichage de page personnalisé pour les utilisateurs en ligne',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_ONLINE_LIST_EXPLAIN'	=> 'Ici, vous pouvez activer l’affichage des utilisateurs en ligne sur la page personnalisée',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_POPUP'					=> 'Fenêtre contextuelle de page personnalisée',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_POPUP_EXPLAIN'			=> 'Si vous l’activez, la page personnalisée s’ouvrira dans une fenêtre pop-up.',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_POPUP_HEIGHT'			=> 'Fenêtre contextuelle de hauteur',
	'ACP_JV_SHOUTBOX_CUSTOM_PAGE_POPUP_WIDTH'			=> 'Largeur de la fenêtre pop-up',
	'ACP_JV_SHOUTBOX_DATE_FORMAT'						=> 'Format de date',
	'ACP_JV_SHOUTBOX_DATE_FORMAT_EXPLAIN'				=> 'La syntaxe utilisée est identique à PHP <a href="https://php.net/manual/en/function.date.php">date()</a> function.',
	'ACP_JV_SHOUTBOX_DELETE_MESSAGES'					=> 'Supprimer des messages',
	'ACP_JV_SHOUTBOX_DELETE_MESSAGES_CONFIRM'			=> 'Êtes-vous sûr de vouloir supprimer tous les messages ?',
	'ACP_JV_SHOUTBOX_DELETE_MESSAGES_EXPLAIN'			=> 'Ici, vous pouvez supprimer tous les messages.',
	'ACP_JV_SHOUTBOX_DELETE_MESSAGES_SUCCESS'			=> 'Tous les messages supprimés.',
	'ACP_JV_SHOUTBOX_DISPLAY_ALL_MAIN_PAGES'			=> 'Toutes les pages principales',
	'ACP_JV_SHOUTBOX_DISPLAY_ALL_PAGES'					=> 'Chaque page',
	'ACP_JV_SHOUTBOX_DISPLAY_ALL_PAGES_EXCEPT_ARCADE'	=> 'Toutes les pages sauf l’arcade',
	'ACP_JV_SHOUTBOX_DISPLAY_ALL_PAGES_EXCEPT_PORTAL'	=> 'Toutes les pages sauf le portail',
	'ACP_JV_SHOUTBOX_DISPLAY_ARCADE'					=> 'Page d’index d’arcade',
	'ACP_JV_SHOUTBOX_DISPLAY_ARCADE_ALL'				=> 'Arcade toutes les pages',
	'ACP_JV_SHOUTBOX_DISPLAY_FORUM'						=> 'Page d’index du forum',
	'ACP_JV_SHOUTBOX_DISPLAY_FORUM_ALL'					=> 'Forum toutes les pages',
	'ACP_JV_SHOUTBOX_DISPLAY_NONE'						=> 'Ne pas afficher',
	'ACP_JV_SHOUTBOX_DISPLAY_PORTAL'					=> 'Pages du portail',
	'ACP_JV_SHOUTBOX_EDIT_POST'							=> 'Afficher les messages modifiés',
	'ACP_JV_SHOUTBOX_EDIT_POST_EXPLAIN'					=> 'Lorsqu’un utilisateur modifie son message, il sera affiché dans la shoutbox.',
	'ACP_JV_SHOUTBOX_ENABLE'							=> 'Activer la shoutbox',
	'ACP_JV_SHOUTBOX_ENABLE_EXPLAIN'					=> 'Si vous l’activez, la shoutbox sera affichée sur les pages où elle est activée.',
	'ACP_JV_SHOUTBOX_FLOOD_TIME'						=> 'Flood Intervalle',
	'ACP_JV_SHOUTBOX_FLOOD_TIME_EXPLAIN'				=> 'C’est le nombre de secondes que l’utilisateur doit attendre entre deux messages. Vous pouvez utiliser des autorisations pour exclure des utilisateurs spécifiques.',
	'ACP_JV_SHOUTBOX_FORUM_POST_SETTINGS'				=> 'Paramètres des messages du forum',
	'ACP_JV_SHOUTBOX_HEIGHT'							=> 'Hauteur de la Shoutbox',
	'ACP_JV_SHOUTBOX_HEIGHT_ERROR'						=> 'La valeur définie pour « Hauteur de la shoutbox » est trop élevée par rapport au « Nombre de messages ». Un minimum de « %d » messages doit être affecté à cette hauteur.',
	'ACP_JV_SHOUTBOX_HEIGHT_EXPLAIN'					=> 'Entrez la hauteur de la shoutbox que vous souhaitez afficher.',
	'ACP_JV_SHOUTBOX_LOCATION'							=> 'Emplacement',
	'ACP_JV_SHOUTBOX_LOCATION_EXPLAIN'					=> 'Ajoutez un emplacement où la Shoutbox peut être vue sur le site Web.',
	'ACP_JV_SHOUTBOX_MAX_MSG_LIMIT'						=> 'Nombre maximum de messages',
	'ACP_JV_SHOUTBOX_MAX_MSG_LIMIT_EXPLAIN'				=> 'Ici, vous pouvez limiter le nombre maximum de messages pouvant être affichés dans la shoutbox, par exemple si la valeur spécifiée est 100 et la charge par défaut est 10, 90 anciens messages peuvent être relus. Si la valeur est 0, les utilisateurs peuvent relire tous les anciens messages.',
	'ACP_JV_SHOUTBOX_MIN_MAX_ERROR'						=> '« %s » ne peut pas être inférieur à « %s ».',
	'ACP_JV_SHOUTBOX_MSG_LIMIT'							=> 'Nombre de messages',
	'ACP_JV_SHOUTBOX_MSG_LIMIT_EXPLAIN'					=> 'Ici, vous pouvez spécifier combien de messages doivent être chargés dans la shoutbox par défaut. Le même paramètre s’applique au chargement des anciens messages.',
	'ACP_JV_SHOUTBOX_MSG_MAX_CHARS'						=> 'Nombre de caractères maximum par message',
	'ACP_JV_SHOUTBOX_MSG_MAX_CHARS_EXPLAIN'				=> 'Le nombre de caractères autorisés dans un message. Définissez 0 pour un nombre illimité de caractères.',
	'ACP_JV_SHOUTBOX_MSG_MIN_CHARS'						=> 'Nombre minimum de caractères par message',
	'ACP_JV_SHOUTBOX_MSG_MIN_CHARS_EXPLAIN'				=> 'Les utilisateurs ne peuvent envoyer que des messages avec au moins ce nombre de caractères. La valeur minimale qui peut être saisie est 1.',
	'ACP_JV_SHOUTBOX_MSG_POSITION'						=> 'Position du message',
	'ACP_JV_SHOUTBOX_MSG_POSITION_EXPLAIN'				=> 'Sélectionnez si les nouveaux messages sont affichés en haut ou en bas.',
	'ACP_JV_SHOUTBOX_MSG_SETTINGS'						=> 'Paramètres des messages',
	'ACP_JV_SHOUTBOX_NEW_REPLY_POST'					=> 'Afficher le nouveau message',
	'ACP_JV_SHOUTBOX_NEW_REPLY_POST_EXPLAIN'			=> 'Quand un nouveau message arrive dans un sujet, il sera affiché dans la shoutbox.',
	'ACP_JV_SHOUTBOX_NEW_REPLY_QUOTE_POST'				=> 'Afficher un message cité',
	'ACP_JV_SHOUTBOX_NEW_REPLY_QUOTE_POST_EXPLAIN'		=> 'Lorsqu’un message nouvellement cité arrive dans un sujet, il sera affiché dans la shoutbox.',
	'ACP_JV_SHOUTBOX_NEW_TOPIC_POST'					=> 'Afficher un nouveau sujet',
	'ACP_JV_SHOUTBOX_NEW_TOPIC_POST_EXPLAIN'			=> 'Si un nouveau sujet est créé dans le forum, il sera affiché dans la shoutbox.',
	'ACP_JV_SHOUTBOX_PAGE'								=> 'Afficher la shoutbox',
	'ACP_JV_SHOUTBOX_PAGE_EXPLAIN'						=> 'Ici, vous pouvez spécifier la page où vous souhaitez que le shoutbox apparaisse. Veuillez noter que l’utilisation d’émoticônes et de codes BB n’est pas disponible dans la shoutbox lors de la rédaction d’un message, d’une signature et d’un message en MP.',
	'ACP_JV_SHOUTBOX_POSITION_BOTTOM'					=> 'Bas',
	'ACP_JV_SHOUTBOX_POSITION_TOP'						=> 'Haut',
	'ACP_JV_SHOUTBOX_POST_IGNORE_FORUMS'				=> 'Forums ignorés',
	'ACP_JV_SHOUTBOX_POST_IGNORE_FORUMS_EXPLAIN'		=> 'Les sujets des forums sélectionnés ne sont pas automatiquement publiés.<br><em>Vous pouvez sélectionner ou désélectionner plusieurs forums en maintenant la touche CTRL enfoncée.</em>',
	'ACP_JV_SHOUTBOX_PRUNE'								=> 'Réduire les messages',
	'ACP_JV_SHOUTBOX_PRUNE_EXPLAIN'						=> 'Si vous l’activez, seul le nombre maximum de messages défini restera aux intervalles définis.',
	'ACP_JV_SHOUTBOX_PRUNE_MSG_NUM'						=> 'Nombre de messages conservés',
	'ACP_JV_SHOUTBOX_PRUNE_MSG_NUM_EXPLAIN'				=> 'Si l’élagage est activé, le nombre de messages défini sera enregistré.',
	'ACP_JV_SHOUTBOX_PRUNE_TIME'						=> 'Intervalle de l’élagage',
	'ACP_JV_SHOUTBOX_PRUNE_TIME_EXPLAIN'				=> 'Entrez le nombre d’intervalles pour supprimer les messages lors de l’élagage.',
	'ACP_JV_SHOUTBOX_REFRESH'							=> 'Intervalle de chargement (vérification)',
	'ACP_JV_SHOUTBOX_REFRESH_EXPLAIN'					=> 'Les intervalles spécifiés sont vérifiés pour les nouveaux messages.',
	'ACP_JV_SHOUTBOX_ROUND_AVATAR'						=> 'Avatar rond',
	'ACP_JV_SHOUTBOX_ROUND_AVATAR_EXPLAIN'				=> 'Si coché, les avatars seront affichés dans une forme ronde.',
	'ACP_JV_SHOUTBOX_SETTINGS'							=> 'Paramètres de la shoutbox',
	'ACP_JV_SHOUTBOX_SETTINGS_EXPLAIN'					=> 'Ici, vous pouvez personnaliser les paramètres de shoutbox et de message.',
	'ACP_JV_SHOUTBOX_SMILIE_ENABLE'						=> 'Activer les smileys',
	'ACP_JV_SHOUTBOX_SMILIE_ENABLE_EXPLAIN'				=> 'Ici, vous pouvez activer l’utilisation des smileys.',
	'ACP_JV_SHOUTBOX_SMILIE_SCROLL_BOX'					=> 'Des smileys apparaissent dans la boîte de défilement',
	'ACP_JV_SHOUTBOX_SMILIE_SCROLL_BOX_EXPLAIN'			=> 'Si trop de smileys sont activés, vous pouvez verrouiller les smileys dans une boîte de défilement ici.',

	'JVA_CORE_EXT_NOT_FOUND'							=> 'L’extension n’a pas pu être activée car l’extension « JVA - Core » est introuvable!',

	'LOG_JV_SHOUTBOX_CONFIG_SETTINGS'					=> '<strong>Modifier les paramètres de la shoutbox.</strong>',
	'LOG_JV_SHOUTBOX_DELETE_MESSAGES'					=> '<strong>Supprimer tous les messages de la shoutbox.</strong>',
	'LOG_JV_SHOUTBOX_MESSAGES_PRUNING'					=> '<strong>Messages shoutbox vidés.</strong><br>» %d messages supprimés',
]);
