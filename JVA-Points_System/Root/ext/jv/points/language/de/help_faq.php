<?php
/**
*
* @package JVA - Points System
* @version $Id: help_faq.php 991 2021-12-12 10:10:48Z KillBill $
* @author 2011-2024 KillBill
* @copyright (c) 2014-2024 https://jv-arcade.com/ - https://jv-arcade.com/contact
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
	'JV_POINTS_HELP_FAQ_BLOCK_GENERAL'						=> 'Allgemeine Fragen',
	'JV_POINTS_HELP_FAQ_BLOCK_INTRO'						=> 'Einführung',
	'JV_POINTS_HELP_FAQ_GENERAL_POST_REWARD_ANSWER'			=> 'Wenn dein neuer Beitrag zuerst duch einen Moderator genehmigt werden muss, wirst du die Belohnung nur nach seiner Bestätigung erhalten.',
	'JV_POINTS_HELP_FAQ_GENERAL_POST_REWARD_MOD_ANSWER'		=> 'Wenn ein neuer Beitrag kostenpflichtig ist, und er aus irgendeinem Grund abgelehnt wird, dann werden die Kosten nicht erstattet.',
	'JV_POINTS_HELP_FAQ_GENERAL_POST_REWARD_MOD_QUESTION'	=> 'Ich sendete einen neuen Beitrag ab, welcher durch einen Moderator abgelehnt wurde, aber ich erhielt die Kosten nicht zurück. Warum?',
	'JV_POINTS_HELP_FAQ_GENERAL_POST_REWARD_QUESTION'		=> 'Ich sendete einen neuen Beitrag ab, aber ich erhielt keine Belohnung. Warum?',
	'JV_POINTS_HELP_FAQ_GENERAL_SAME_REWARD_COST_ANSWER'	=> 'Wenn tatsächlich versehentlich eine solche Einstellung vorgenommen würde, wäre in dem Fall das Ergebnis Null.',
	'JV_POINTS_HELP_FAQ_GENERAL_SAME_REWARD_COST_QUESTION'	=> 'Was passiert in dem Fall, wenn Belohnung und Kosten den selben Wert haben?',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_ANSWER'			=> 'Ja, wenn der Administrator die Verwendung erlaubt hat.',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_COST_ANSWER'		=> 'Ja, aber nur, wenn der Administrator Kosten dafür festgesetzt hat. Die Kosten können aus einem Prozentsatz der transferierten Summe bestehen.',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_COST_QUESTION'		=> 'Ist die Übertragung kostenpflichtig?',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_ELOG_ANSWER'		=> 'Wenn du keine Protokolleinträge siehst, hat ein Administrator diese gelöscht.',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_ELOG_QUESTION'		=> 'Meine Protokolleinträge sind verschwunden, warum?',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_LOG_ANSWER'		=> 'Ja, jeder Transfer erhält einen Protokolleintrag, welcher im Transferprotokoll angesehen werden kann.',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_LOG_QUESTION'		=> 'Können die Transfers verfolgt werden?',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_QUESTION'			=> 'Ist es möglich, einen bestimmten Betrag an einen anderen Benutzer zu übertragen?',
	'JV_POINTS_HELP_FAQ_INTRO_MODULES_ANSWER'				=> 'Im Punktesystem sind viele Module enthalten, doch es sind nur diejenigen verfügbar, die durch den Administrator aktiviert wurden. 
																<br><br><strong>Module:</strong>
																<ul>
																	<li><strong>Übersicht</strong> - Die hier angezeigten Benutzer haben das höchste Guthaben. Zusätzlich kann hier dein eigenes Guthaben angesehen werden.</li>
																	<li><strong>Allgemeine Informationen</strong> - Hier kannst du die augenblicklichen Einstellungen sehen, welche Belohnungen oder Kosten es gibt.</li>
																	<li><strong>Transfer</strong> - Hier kannst du einem anderen Benutzer Guthaben übertragen.</li>
																	<li><strong>Transferprotokoll</strong> - Hier kannst du das Transaktionsprotokoll einsehen.</li>
																	<li><strong>Handbuch</strong></li>
																</ul>',
	'JV_POINTS_HELP_FAQ_INTRO_MODULES_QUESTION'				=> 'Welche Module beinhaltet das Punktesystem?',
	'JV_POINTS_HELP_FAQ_INTRO_SYSTEM_ANSWER'				=> 'Das Punktesystem erlaubt den Benutzern, verschiedene Belohnungen zu erwerben, oder der fragliche Betrag wird an unterschiedlichen Stellen der Webseite verwendet. Der Administrator kann festlegen, wie  ein bestimmter Betrag erreicht, und wofür er verwendet wird. Dennoch magst du die folgende Anleitung hilfreich finden.',
	'JV_POINTS_HELP_FAQ_INTRO_SYSTEM_QUESTION'				=> 'Was ist das Punktesystem?',
));
