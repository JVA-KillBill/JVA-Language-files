<?php
/**
*
* @package JVA - phpBB Invite
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

//These are used through out the invite
$lang = array_merge($lang, [
	'POST_CONFIRM_EXPLAIN'						=> 'Die Eingabe des Codes verhindert die automatische Einladung durch Bots. Du kannst den Code auf dem folgenden Bild sehen. Falls du ihn aufgrund von visuellen oder anderen Problemen nicht sehen kannst, kontaktiere bitte den %sAdministrator%s.',

	'UCP_CAT_JV_INVITE'							=> 'JVA - phpBB Invite',
	'UCP_JV_INVITE'								=> 'Einladung',
	'UCP_JV_INVITED_MEMBERS_EXPLAIN'			=> [
		1										=> 'Mitglied, welches du eingeladen hast.',
		2										=> 'Mitglieder, welche du eingeladen hast.',
	],
	'UCP_JV_INVITE_ADAT'						=> 'Einladungsdetails',
	'UCP_JV_INVITE_BACK'						=> '<br><br>%sZurück zum persönlichen Bereich%s',
	'UCP_JV_INVITE_DAYF'						=> 'Heute versandte Einladungen',
	'UCP_JV_INVITE_DAYF_EXPLAIN'				=> 'Die Anzahl der Einladungen, die du heute versandt hast.',
	'UCP_JV_INVITE_DAY_OFF'						=> 'Wir versenden heute keine Einladungen mehr.',
	'UCP_JV_INVITE_DB_KULDES'					=> 'Tägliche Einladungsgrenze',
	'UCP_JV_INVITE_DB_KULDES_EXPLAIN'			=> 'Die Höchstzahl an Einladungen, die du pro Tag versenden kannst.',
	'UCP_JV_INVITE_DB_MAX'						=> '<span class="jv_invite_tred">Unbegrenzt!</span>',
	'UCP_JV_INVITE_DB_PENDING'					=> 'Ausstehende Einladungen',
	'UCP_JV_INVITE_DB_PENDING_EXPLAIN'			=> 'Die Anzahl an von dir eingeladenen Benutzern, die sich noch nicht registriert haben.',
	'UCP_JV_INVITE_DB_SZAM'						=> 'Anzahl an Einladungen',
	'UCP_JV_INVITE_DB_SZAM_EXPLAIN'				=> 'Dein verbleibendes Einladungskontingent',
	'UCP_JV_INVITE_DELETE'						=> 'Einladungen löschen',
	'UCP_JV_INVITE_DELETE_ERROR'				=> 'Die Einladung kann nicht gefunden werden, oder die für die Löschung verfügbare Zeitspanne ist abgelaufen.',
	'UCP_JV_INVITE_DELETE_EXPLAIN'				=> 'Falls du irgendwelche Einladungen an die falsche Adresse gesendet hast, so kannst du diese hier ungültig machen.<br><em>Dies ist nur in den ersten %s Minuten nach der Einladung möglich.</em>',
	'UCP_JV_INVITE_DELETE_NO_CONFIRM'			=> 'Die Löschung wurde nicht bestätigt.',
	'UCP_JV_INVITE_DELETE_SUCCES'				=> [
		1										=> 'Die Einladung wurde erfolgreich gelöscht.',
		2										=> 'Die Einladungen wurde erfolgreich gelöscht.',
	],
	'UCP_JV_INVITE_DUP'							=> 'Der E-Mail-Adresse wurde bereits eine Einladung gesendet. -> %s',
	'UCP_JV_INVITE_EDUP'						=> 'Eine E-Mail-Adresse wurde wiederholt aufgerufen. -> %s',
	'UCP_JV_INVITE_EMAILS_SENT'					=> 'Die Einladungen wurden erfolgreich versandt.',
	'UCP_JV_INVITE_EMAIL_KERES_EXPLAIN'			=> 'Grund für die angeforderten Einladungen.',
	'UCP_JV_INVITE_EMAIL_LANG'					=> 'E-Mail-Sprache',
	'UCP_JV_INVITE_EMAIL_SELECT'				=> 'Einladungsauswahl',
	'UCP_JV_INVITE_EMAIL_SELECT_EXPLAIN'		=> 'Wähle aus, wen von deinen Empfängern du löschen möchtest.',
	'UCP_JV_INVITE_EMAIL_SELECT_RESTORE_EXP'	=> 'Wähle aus, wen von deinen Empfängern du wiederherstellen möchtest.',
	'UCP_JV_INVITE_EMAIL_SENT'					=> 'Die Einladung wurde erfolgreich versandt.',
	'UCP_JV_INVITE_FLOOD_LIMIT'					=> 'Du kannst keine weiteren Einladungen versenden. Bitte versuche es später erneut.',
	'UCP_JV_INVITE_FRIEND'						=> 'Einen Freund hinzufügen',
	'UCP_JV_INVITE_FRIEND_EXPLAIN'				=> 'Der eingeladene Benutzer wird deiner Freundesliste hinzugefügt.',
	'UCP_JV_INVITE_FUG_LIMIT'					=> 'Nur %s Einladungen können heute versandt werden. Du hast jedoch %s Empfänger aufgeführt.',
	'UCP_JV_INVITE_KERES'						=> 'Einladungsanfrage',
	'UCP_JV_INVITE_KERES_BUYS_SUCCES'			=> 'Du hast erfolgreich Einladungen erworben.',
	'UCP_JV_INVITE_KERES_BUY_MIN'				=> 'Mindestens (1) Einladung muss angefragt werden.',
	'UCP_JV_INVITE_KERES_BUY_NO'				=> 'Du hast nicht genügend %s, um so viele Einladungen zu erwerben. Dein Guthaben beträgt derzeit %s %s.',
	'UCP_JV_INVITE_KERES_BUY_SUBMIT'			=> 'Kaufen',
	'UCP_JV_INVITE_KERES_BUY_SUBT'				=> 'Einladungen, die du kaufen möchtest',
	'UCP_JV_INVITE_KERES_BUY_SUBT_EXPLAIN'		=> 'Gebe die Anzahl an Einladungen ein, die du kaufen möchtest.<br>Der Preis für eine Einladung beträgt <strong>%s %s</strong>.<br>Du trägst die Verantwortung für von dir eingeladene Benutzer, falls sie sich unangemessen verhalten.',
	'UCP_JV_INVITE_KERES_BUY_SUCCES'			=> 'Der Einladungskauf war erfolgreich.',
	'UCP_JV_INVITE_KERES_BUY_TITLE'				=> 'Einladung kaufen.',
	'UCP_JV_INVITE_KERES_DISABLED'				=> 'Die Anfrage ist ausgeschaltet!',
	'UCP_JV_INVITE_KERES_MAX'					=> 'Höchstanzahl an Anfragen: (%s) Einladung(en).',
	'UCP_JV_INVITE_KERES_MIN'					=> 'Mindestanzahl an Einladungsanfragen: (1)',
	'UCP_JV_INVITE_KERES_NO_MES'				=> 'Du hast keine Nachricht eingegeben. Grundlos kannst du nicht so viele Einladungen beanspruchen.',
	'UCP_JV_INVITE_KERES_OFF'					=> 'Deine Einladungsanfrage ist in der Warteschlange. Wenn ein Administrator/Moderator deine Anfrage bearbeitet hat, erhältst du eine E-Mail Nachricht.',
	'UCP_JV_INVITE_KERES_SOK_EXPLAIN'			=> 'Wenn du mehr als <strong>(%s)</strong> Anfragen versendest, ist eine Erklärung nötig. Bitte erkläre, warum du so viele Einladungen benötigst.<br>Wenn wir glauben, deine Anfrage sei akzeptabel, wirst du die Einladungen erhalten. Falls wir Missbrauch feststellen, kann dein Benutzerkonto gesperrt werden.',
	'UCP_JV_INVITE_KERES_SUBMIT'				=> 'Anfrage senden',
	'UCP_JV_INVITE_KERES_SUCC'					=> 'Die Einladungsanfrage wurde erfolgreich versandt.',
	'UCP_JV_INVITE_KERES_SUCCS'					=> 'Die Einladungsanfragen wurden erfolgreich versandt',
	'UCP_JV_INVITE_KERES_TITLE'					=> 'Benötigte Einladungen',
	'UCP_JV_INVITE_KERES_TITLE_EXPLAIN'			=> 'Gebe die Anzahl an Einladungen ein, die du beantragen möchtest. Es gibt eine Höchstgrenze von <strong>(%s)</strong> verfügbaren Einladungen.<br>Du übernimmst die volle Haftung für jeden von dir eingeladenen Benutzer, falls er sich unangemessen verhält.',
	'UCP_JV_INVITE_KULDES'						=> 'Einladung senden',
	'UCP_JV_INVITE_KULDES_EMAIL_MAX'			=> 'Höchstens %s E-Mail-Adressen können verwendet werden. Du hast aber %s aufgeführt.',
	'UCP_JV_INVITE_KULDES_MAX'					=> '<span class="jv_invite_tred">Momentan gibt es keine Grenze.</span>',
	'UCP_JV_INVITE_MAX'							=> 'Du hast mehr Empfänger angegeben, als Einladungen für dich verfügbar sind.',
	'UCP_JV_INVITE_MAX_ERROR'					=> 'Momentan hast du unbegrenzte Einladungen.',
	'UCP_JV_INVITE_MAX_RECIPIENTS'				=> 'Gebe alle Adressen in je einer neuen Zeile ein.<br>Höchstanzahl an Empfängern',
	'UCP_JV_INVITE_MESSAGE_BODY_EXPLAIN'		=> 'Schreibe ein paar Zeilen und erläutere, warum sie beitreten sollen.',
	'UCP_JV_INVITE_MIN_MEM_DAYS_ERROR'			=> 'Es tut mir leid, aber du kannst keine Einladungen versenden.<br>Begründung: Es sind noch nicht %s Tage seit deiner Registrierung vergangen.<br>Das Senden von Einladungen wird für dich verfügbar am %s.',
	'UCP_JV_INVITE_NOTIFICATION_TYPE_MANAGE'	=> 'Jemand hat die Anzahl deiner Einladungen geändert.',
	'UCP_JV_INVITE_NOT_DELETED_INVITE'			=> 'Es ist keine Einladung zu löschen.',
	'UCP_JV_INVITE_NOT_FOUND'					=> 'Die Einladung kann nicht mehr gefunden werden.',
	'UCP_JV_INVITE_NOT_RESTORED_INVITE'			=> 'Es ist keine Einladung vorhanden, die wiederhergestellt werden kann.',
	'UCP_JV_INVITE_NO_EMAIL'					=> 'Du hast keine E-Mail-Adresse angegeben.',
	'UCP_JV_INVITE_NO_INVITED_USER'				=> 'Niemand wurde von dir eingeladen.',
	'UCP_JV_INVITE_NO_LOGIN'					=> 'Er/sie hat sich nicht auf der Seite registriert.',
	'UCP_JV_INVITE_NO_PERM_EMAIL'				=> 'Du bist nicht befugt, E-Mails zu versenden.',
	'UCP_JV_INVITE_NULL'						=> 'Du hast keine Einladungen.',
	'UCP_JV_INVITE_POINTS_AMOUNT'				=> 'Geschenkbetrag',
	'UCP_JV_INVITE_POINTS_AMOUNT_EXPLAIN'		=> 'Höhe des Betrages, den ein Mitglied bekommt, wenn sein eingeladener Benutzer sich registriert.',
	'UCP_JV_INVITE_POINTS_COST'					=> 'Einladungspreis',
	'UCP_JV_INVITE_POINTS_COST_EXPLAIN'			=> 'Die Kosten für das Versenden einer Einladung.',
	'UCP_JV_INVITE_POST_LIMIT'					=> 'Um Einladungen versenden zu können, ist folgende Mindestanzahl an erstellten Beiträgen erforderlich: %s.',
	'UCP_JV_INVITE_REST'						=> 'Wiederherstellen',
	'UCP_JV_INVITE_RESTORE'						=> 'Einladungen wiederherstellen',
	'UCP_JV_INVITE_RESTORE_EXPLAIN'				=> 'Hier hast du die Möglichkeit, versehentlich gelöschte Einladungen wiederherzustellen.',
	'UCP_JV_INVITE_RESTORE_NO_CONFIRM'			=> 'Die Wiederherstellung wurde nicht bestätigt.',
	'UCP_JV_INVITE_RESTORE_SUCCES'				=> [
		1										=> 'Die Einladung wurde erfolgreich wiederhergestellt.',
		2										=> 'Die Einladungen wurden erfolgreich wiederhergestellt.',
	],
	'UCP_JV_INVITE_SEND_SUBMIT'					=> 'Einladung senden',
	'UCP_JV_INVITE_TIME_END'					=> 'Ablaufdatum',
	'UCP_JV_INVITE_TIME_END_EXPLAIN'			=> 'Der eingeladene Benutzer muss sich in dieser Zeitspanne registrieren.',
	'UCP_JV_INVITE_UT_REG'						=> 'Letzter Benutzer',
	'UCP_JV_INVITE_UT_REG_EXPLAIN'				=> 'Der letzte von dir eingeladene Benutzer.',
	'UCP_JV_INVITE_UT_REG_INFO'					=> '<strong>%s</strong> registrierte sich am %s',
	'UCP_JV_JV_INVITE_MEMBER_LIST_EXPLAIN'		=> [
		1										=> 'Hier kannst du die von dir eingeladenen Mitglieder ansehen.',
		2										=> 'Hier kannst du die von dir eingeladenen Mitglieder ansehen.',
	],
]);
