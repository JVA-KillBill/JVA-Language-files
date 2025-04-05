<?php
/**
*
* @package JVA - Privacy Policy and data management tool
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
	'JVPPDMT_COOKIE_SETTING'				=> 'Recevoir des cookies',
	'JVPPDMT_COOKIE_SETTING_EXPLAIN'		=> 'Ici, vous pouvez définir si ce site Web peut ou non stocker des cookies sur votre appareil. Pour plus d’informations, lisez-le %sPolitique de confidentialité%s.<br><em>Notez que si vous n’activez pas les cookies, de nombreuses fonctionnalités ne fonctionneront pas.</em>',
	'JVPPDMT_CREATE_TIME'					=> 'Date de création',
	'JVPPDMT_DOWNLOAD'						=> 'Télécharger',
	'JVPPDMT_FORUM_POSTS'					=> 'Messages du forum,',
	'JVPPDMT_ID'							=> 'Numéro d’identification',
	'JVPPDMT_MY_ACC_DELETE_CONFIRM'			=> 'Confirmation de Supprimer mon inscription',
	'JVPPDMT_MY_ACC_DELETE_CONFIRM_ERROR'	=> 'La désinscription n’a pas été confirmée !',
	'JVPPDMT_MY_ACC_DELETE_EXPLAIN'			=> 'Supprimer mon inscription<br><em>Veuillez noter que si vous le faites, il n’y a aucun moyen de récupérer vos données !</em>',
	'JVPPDMT_MY_ACC_DELETE_FOUNDER_ERROR'	=> 'L’utilisateur fondateur ne peut pas supprimer sa propre inscription ! Cette opération ne peut être effectuée que par un autre fondateur.',
	'JVPPDMT_MY_ACC_DELETE_SUCCESS'			=> 'Inscription supprimée avec succès.',
	'JVPPDMT_MY_ACC_POST_ANONYM_IP'			=> 'Supprimer l’adresse IP de tous mes messages',
	'JVPPDMT_MY_ACC_POST_DELETE'			=> 'Supprimer des messages',
	'JVPPDMT_MY_ACC_POST_DELETE_EXPLAIN'	=> 'Vos messages seront supprimés du forum',
	'JVPPDMT_NOT_FOUND_PM'					=> 'Vous n’avez pas de message privé.',
	'JVPPDMT_NOT_FOUND_POST'				=> 'Vous n’avez pas de message.',
	'JVPPDMT_PD_ACCEPT'						=> 'J’approuve et stocke mes données personnelles',
	'JVPPDMT_PD_PARTIAL_ACCEPT'				=> 'Utiliser uniquement mes données existantes et ne pas stocker de données personnelles supplémentaires',
	'JVPPDMT_PD_REJECT'						=> 'Je refuse l’utilisation et le stockage de mes données personnelles',
	'JVPPDMT_PD_SETTING'					=> 'Stockage des données personnelles',
	'JVPPDMT_PD_SETTING_EXPLAIN'			=> 'Ici, vous pouvez définir la manière dont vous traitez vos données personnelles sur le site Web. Bien sûr, vous pouvez modifier cette décision à tout moment plus tard.',
	'JVPPDMT_PRIVACY_POLICY_ACCEPT_DATE'	=> 'Dernière heure d’acceptation de la politique de confidentialité',
	'JVPPDMT_REGISTRATION_DATE'				=> 'Heure d’inscription',
	'JVPPDMT_REGISTRATION_IP'				=> 'Adresse IP d’enregistrement',
	'JVPPDMT_REL_IP'						=> 'Adresse IP associée',
	'JVPPDMT_SELECT_DOWNLOAD_FORMAT'		=> 'Sélectionnez le format de téléchargement',
	'JVPPDMT_SENT_PRIVATE_MESSAGES'			=> 'Messages privés envoyés',
	'JVPPDMT_TERM_OF_USE_ACCEPT_DATE'		=> 'La dernière heure d’acceptation des conditions d’utilisation',
	'JVPPDMT_YOUR_PM_NUMBER'				=> 'Nombre de messages privés',
	'JVPPDMT_YOUR_POST_NUMBER'				=> 'Nombre de messages',
]);
