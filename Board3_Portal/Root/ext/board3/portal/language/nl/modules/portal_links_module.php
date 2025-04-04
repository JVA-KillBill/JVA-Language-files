<?php
/**
*
* @package Board3 Portal v2.3 - Links
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
	'ACP_PORTAL_LINKS'					=> 'Link instellingen',
	'ACP_PORTAL_LINKS_EXP'				=> 'Pas de linken aan die in de linkenblok staan',
	'ACP_PORTAL_LINKS_NEW_WINDOW'		=> 'Open externe links in een nieuw scherm',
	'ACP_PORTAL_LINK_ADD'				=> 'Nieuwe navigatielink toevoegen',
	'ACP_PORTAL_LINK_EXT'				=> 'Externe link',
	'ACP_PORTAL_LINK_INT'				=> 'Interne link',
	'ACP_PORTAL_LINK_PERMISSION'		=> 'Linkpermissies',
	'ACP_PORTAL_LINK_PERMISSION_EXP'	=> 'Selecteer de groepen die de link kunnen zien. Als je wilt dat alle gebruikers de link kunnen zien, selecteer dan niks.<br>Selecteer/Deselecteer meerdere groepen door middel van <samp>CTRL</samp> en klikken.',
	'ACP_PORTAL_LINK_TITLE'				=> 'Titel',
	'ACP_PORTAL_LINK_TYPE'				=> 'Linktype',
	'ACP_PORTAL_LINK_TYPE_EXP'			=> 'Als je een link naar een pagina van je forum hebt, kies dan “Interne link” om ongewenste afmeldingen te voorkomen.',
	'ACP_PORTAL_LINK_URL'				=> 'Link-URL',
	'ACP_PORTAL_LINK_URL_EXP'			=> 'Externe links:<br>Alle linken moeten ingevoerd worden met een http://<br><br>Interne linken:<br>Vul alleen het php bestand in als link-url, bijv. index.php?style=4.',

	'LINKS_NO_LINKS'					=> 'Geen links',

	'NO_LINK_TITLE'						=> 'Je moet een titel invoeren voor deze link.',
	'NO_LINK_URL'						=> 'Je moet een link-URL invoeren.',

	'PORTAL_LINKS'						=> 'Links',
]);
