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
	'JV_POINTS_HELP_FAQ_BLOCK_GENERAL'						=> 'Általános kérdések',
	'JV_POINTS_HELP_FAQ_BLOCK_INTRO'						=> 'Bevezető',
	'JV_POINTS_HELP_FAQ_GENERAL_POST_REWARD_ANSWER'			=> 'Ha az új hozzászólásodat egy moderátornak jóvá kell hagynia, akkor a jutalmat csak a jóváhagyás után fogod megkapni.',
	'JV_POINTS_HELP_FAQ_GENERAL_POST_REWARD_MOD_ANSWER'		=> 'Ha egy új hozzászólásnak költsége van és azt valamilyen okból kifolyólag elutasítják, akkor a költség nem kerül visszatérítésre.',
	'JV_POINTS_HELP_FAQ_GENERAL_POST_REWARD_MOD_QUESTION'	=> 'Küldtem egy új hozzászólást, amit egy moderátor elutasított, de a költséget nem kaptam vissza, miért?',
	'JV_POINTS_HELP_FAQ_GENERAL_POST_REWARD_QUESTION'		=> 'Küldtem egy új hozzászólást, de a jutalmat nem kaptam meg, miért?',
	'JV_POINTS_HELP_FAQ_GENERAL_SAME_REWARD_COST_ANSWER'	=> 'Amennyiben véletlenül ilyen beállításra kerülne sor, abban az esetben az eredmény nulla lesz.',
	'JV_POINTS_HELP_FAQ_GENERAL_SAME_REWARD_COST_QUESTION'	=> 'Mi történik abban az esetben, ha a jutalom és a költség azonos értékű?',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_ANSWER'			=> 'Igen, amennyiben az adminisztrátor engedélyezi számodra a használatát.',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_COST_ANSWER'		=> 'Igen, de csak abban az esetben, ha az adminisztrátor meghatározz hozzá egy bizonyos költséget. A költség az átutalandó összeg egy bizonyos százaléka lehet.',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_COST_QUESTION'		=> 'Az átutalás terhel valamilyen költséggel?',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_ELOG_ANSWER'		=> 'Amennyiben nem látod már a naplóbejegyzéseket, úgy azt egy adminisztrátor törölte.',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_ELOG_QUESTION'		=> 'Eltűntek a napló bejegyzéseim, miért?',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_LOG_ANSWER'		=> 'Igen, minden átutalásról napló bejegyzés történik, ami az átutalási naplóban megtekinthető.',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_LOG_QUESTION'		=> 'Az átutalások nyomon követhetőek?',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_QUESTION'			=> 'Lehetséges egy másik felhasználónak átutalni egy bizonyos összeget?',
	'JV_POINTS_HELP_FAQ_INTRO_MODULES_ANSWER'				=> 'A pontrendszer számos modulokat tartalmaz, de csak azok érhetőek el, amiket az adminisztrátor bekapcsol és engedélyez.
															<br><br><strong>Modulok:</strong>
															<ul>
																<li><strong>Áttekintés</strong> - Itt látható a legnagyobb egyenleggel rendelkező felhasználók, továbbá itt tekinthető meg a saját aktuális egyenlegünk.</li>
																<li><strong>Általános információk</strong> - Itt olvashatod az aktuális beállításokat, hogy miért is jár jutalom, illetve mi jár költséggel.</li>
																<li><strong>Átutalás</strong> - Itt lehetőséged nyílik egy másik felhasználónak egy bizonyos összeget átutalni.</li>
																<li><strong>Átutalási napló</strong> - Itt lehetőséged nyílik megtekinteni az átutalási tranzakciókat.</li>
																<li><strong>Útmutató</strong></li>
															</ul>',
	'JV_POINTS_HELP_FAQ_INTRO_MODULES_QUESTION'				=> 'Milyen modulokat tartalmaz a pontrendszer?',
	'JV_POINTS_HELP_FAQ_INTRO_SYSTEM_ANSWER'				=> 'A pontrendszer lehetővé teszi a felhasználók számára, hogy bizonyos jutalmakat szerezhessenek, illetve az adott összeget felhasználják egyes helyeken. Az adminisztrátor határozhatja meg, hogy miként lehet bizonyos összeghez jutni, azaz mire használható fel. Ezzel együtt az alábbi útmutatót valószínűleg hasznosnak fogod találni.',
	'JV_POINTS_HELP_FAQ_INTRO_SYSTEM_QUESTION'				=> 'Mi az a pontrendszer?',
));
