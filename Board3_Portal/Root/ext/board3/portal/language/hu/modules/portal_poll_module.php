<?php
/**
*
* @package Board3 Portal v2.3 - Poll
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
	'ACP_PORTAL_POLLS_SETTINGS'		=> 'Poll settings',
	'ACP_PORTAL_POLLS_SETTINGS_EXP'	=> 'This is where you customize the poll block.',

	'LATEST_POLLS'					=> 'legújabb szavazások',

	'NO_OPTIONS'					=> 'Ezen a szavazáson nem áll rendelkezésre opciók.',
	'NO_POLL'						=> 'Nincs elérhető szavazás',

	'PORTAL_POLL'					=> 'Szavazás',
	'PORTAL_POLL_ALLOW_VOTE'		=> 'Allow voting',
	'PORTAL_POLL_ALLOW_VOTE_EXP'	=> 'Allow users with the required permissions to vote from the portal page.',
	'PORTAL_POLL_EXCLUDE_ID'		=> 'Exclude Forums',
	'PORTAL_POLL_EXCLUDE_ID_EXP'	=> 'Select "Yes" if you want to exlude the selected forums from the polls block, and "No" if you only want to see the polls from the selected forums in the polls block.',
	'PORTAL_POLL_HIDE'				=> 'Hide expired polls?',
	'PORTAL_POLL_LIMIT'				=> 'Poll display limit',
	'PORTAL_POLL_LIMIT_EXP'			=> 'The number of polls you would like to display on the portal page.',
	'PORTAL_POLL_TOPIC_ID'			=> 'Poll forum(s)',
	'PORTAL_POLL_TOPIC_ID_EXP'		=> 'The forum(s) from which the polls should be displayed. If "Exclude forums" is set to "Yes", select the forums you want to exclude.<br>If "Exclude forums" is set to "No" select the forums you want to see.<br>Select/Deselect multiple forums by holding <samp>CTRL</samp> and clicking.',

	'RETURN_PORTAL'					=> '%sVissza a portálra%s',
]);
