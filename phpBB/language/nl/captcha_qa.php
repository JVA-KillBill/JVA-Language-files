<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>, phpBBservice.nl <http://www.phpbbservice.nl>, phpBB.nl <http://www.phpbb.nl>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
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

$lang = array_merge($lang, array(
	'CAPTCHA_QA'				=> 'V&amp;A',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Deze vraag is er om automatische registraties door spambots te voorkomen.',
	'CONFIRM_QUESTION_WRONG'	=> 'Je hebt een onjuist antwoord gegeven op de vraag.',
	'CONFIRM_QUESTION_MISSING'	=> 'Vragen voor de captcha kunnen niet opgehaald worden. Neem contact op met de forumbeheerder.',

	'QUESTION_ANSWERS'			=> 'Antwoorden',
	'ANSWERS_EXPLAIN'			=> 'Vul hier de antwoorden op de vraag in, één antwoord per regel.',
	'CONFIRM_QUESTION'			=> 'Vraag',

	'ANSWER'					=> 'Antwoord',
	'EDIT_QUESTION'				=> 'Vraag wijzigen',
	'QUESTIONS'					=> 'Vragen',
	'QUESTIONS_EXPLAIN'			=> 'Bij elk verstuurd formulier waarvoor je de V&amp;A-plug-in hebt ingeschakeld, worden één van de volgende vragen gesteld aan de gebruikers die je hier hebt opgegeven. Je moet minimaal één vraag in de standaardtaal van het forum opgeven om deze plug-in te kunnen gebruiken. De vragen moeten simpel zijn voor je doelpubliek maar een bot moet deze niet kunnen opzoeken via Google. Het werkt meestal het best om slechts één goedwerkende vraag te gebruiken. Als er toch veel spam binnenkomt, dan dient de vraag veranderd te worden. Schakel de strikte controle in als je vraag afhankelijk is van hoofd- en kleine letters, interpunctie of spaties.',
	'QUESTION_DELETED'			=> 'Vraag verwijderd',
	'QUESTION_LANG'				=> 'Taal',
	'QUESTION_LANG_EXPLAIN'		=> 'De taal waarin deze vraag en het antwoord zijn geschreven.',
	'QUESTION_STRICT'			=> 'Strikte controle',
	'QUESTION_STRICT_EXPLAIN'	=> 'Schakel in om de controle hoofdletter-, interpunctie- en spatiegevoelig te laten zijn.',

	'QUESTION_TEXT'				=> 'Vraag',
	'QUESTION_TEXT_EXPLAIN'		=> 'De vraag die aan de gebruiker gesteld zal worden.',

	'QA_ERROR_MSG'				=> 'Vul alle velden in en geef minimaal één antwoord.',
	'QA_LAST_QUESTION'			=> 'Je kunt niet alle vragen verwijderen als de plug-in actief is.',

));
