<?php
/**
*
* @package JVA - Privacy Policy and data management tool
* @version $Id$
* @author 2011-2025 KillBill
* @copyright (c) 2014-2025 https://jv-arcade.com/ - https://jv-arcade.com/contact
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

$lang = array_merge($lang, [
	'ACL_U_JVPPDMT_MY_ACC_POST_DELETE'	=> 'Si vous supprimez votre inscription, vous pouvez supprimer vos messages',

	'G_JVPPDMT_REGISTERED_VIEWER'		=> 'Téléspectateurs enregistrés',

	'JVPPDMT_COOKIE_INFO'				=> 'Cher utilisateur, du fait que vous avez refusé d’enregistrer des cookies sur votre terminal, de nombreuses fonctionnalités ne vous sont pas accessibles.<br>Si vous souhaitez modifier vos paramètres de confidentialité à tout moment, cliquez sur %sICI%s.',
	'JVPPDMT_INFO_NO_USE_COOKIE_GUEST'	=> 'Cher invité, nous tenons à vous informer que nous ne stockons pas de cookies pour les utilisateurs invités. Si vous souhaitez plus d‘informations, veuillez lire notre %spolitique de confidentialité%s.',
	'JVPPDMT_PHPBB_ERROR'				=> 'L’extension ne peut pas être activée car la version de <strong>« phpBB »</strong> est inférieure à la version <strong>« %s »</strong>!',
	'JVPPDMT_SOMEONE'					=> 'Quelqu’un',
	'JVPPDMT_VIEWER_GROUP_INFO'			=> 'Cher membre, vous avez refusé avec succès le stockage d‘autres données personnelles et vous faites maintenant partie du groupe de téléspectateurs. Le groupe de téléspectateurs ne peut regarder que les pages mais pas soumettre de formulaires car cela n‘est pas possible sans enregistrer les données.<br>Clique %sICI%s si vous souhaitez modifier vos paramètres d‘enregistrement des données de confidentialité à tout moment.',

	'LOG_JVPPDMT_MY_ACC_DELETE'			=> '<strong>Supprimer mon inscription</strong><br>» %s',
	'LOG_JVPPDMT_MY_ACC_POST_DELETE'	=> '<strong>Supprimer mon inscription ensemble avec les messages.</strong><br>» %s',

	'UCP_JVPPDMT_PRIVACY_DATA'			=> 'Les données de confidentialité',
	'UCP_JVPPDMT_SETTINGS'				=> 'Paramètres',
	'UCP_PROFILE_JVPPDMT_MY_ACC_DELETE'	=> 'Supprimer mon inscription',
]);
