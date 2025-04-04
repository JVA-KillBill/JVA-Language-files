<?php
/**
*
* @package JVA - phpBB Invite
* @version $Id$
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

//These are used through out the invite
$lang = array_merge($lang, [
	'POST_CONFIRM_EXPLAIN'						=> 'Je moet een bevestigingscode invoeren om te voorkomen dat de uitnodiging automatisch wordt verzonden. De code wordt weergegeven in de onderstaande afbeelding. Als je de code niet kunt lezen vanwege visuele of andere problemen, neem dan contact op met de %sforumbeheerder%s.',

	'UCP_CAT_JV_INVITE'							=> 'JVA - phpBB Invite',
	'UCP_JV_INVITE'								=> 'Uitnodiging',
	'UCP_JV_INVITED_MEMBERS_EXPLAIN'			=> [
		1										=> 'Lid dat je hebt uitgenodigd.',
		2										=> 'Leden die je hebt uitgenodigd.',
	],
	'UCP_JV_INVITE_ADAT'						=> 'Uitnodiging details',
	'UCP_JV_INVITE_BACK'						=> '<br><br>%sKeer terug naar het gebruikerspaneel%s',
	'UCP_JV_INVITE_DAYF'						=> 'Uitnodigingen vandaag verzonden',
	'UCP_JV_INVITE_DAYF_EXPLAIN'				=> 'Het aantal uitnodigingen vandaag verstuurd.',
	'UCP_JV_INVITE_DAY_OFF'						=> 'We versturen vandaag geen uitnodigingen meer.',
	'UCP_JV_INVITE_DB_KULDES'					=> 'Dagelijkse uitnodigingslimiet',
	'UCP_JV_INVITE_DB_KULDES_EXPLAIN'			=> 'Maximaal aantal uitnodigingen dat je per dag kan verzenden.',
	'UCP_JV_INVITE_DB_MAX'						=> '<span class="jv_invite_tred">Onbeperkt!</span>',
	'UCP_JV_INVITE_DB_PENDING'					=> 'Wachtende uitnodigingen',
	'UCP_JV_INVITE_DB_PENDING_EXPLAIN'			=> 'Het aantal door jou uitgenodigde gebruikers die zich nog niet hebben geregistreerd.',
	'UCP_JV_INVITE_DB_SZAM'						=> 'Aantal uitnodigingen',
	'UCP_JV_INVITE_DB_SZAM_EXPLAIN'				=> 'Het aantal uitnodigingen die je kan verzenden',
	'UCP_JV_INVITE_DELETE'						=> 'Uitnodigingen verwijderen',
	'UCP_JV_INVITE_DELETE_ERROR'				=> 'De uitnodiging kan niet worden gevonden of de beschikbare tijd voor verwijdering is verstreken.',
	'UCP_JV_INVITE_DELETE_EXPLAIN'				=> 'Hier heb je de mogelijkheid om uitnodigingen die naar het verkeerde adres zijn verzonden, te verwijderen.<br><em>Dit is enkel mogelijk binnen %s minuten nadat je een uitnodiging hebt verzonden.</em>',
	'UCP_JV_INVITE_DELETE_NO_CONFIRM'			=> 'De verwijdering is niet bevestigd.',
	'UCP_JV_INVITE_DELETE_SUCCES'				=> [
		1										=> 'De uitnodiging is met succes verwijderd.',
		2										=> 'De uitnodigingen zijn met succes verwijderd.',
	],
	'UCP_JV_INVITE_DUP'							=> 'Er is al een uitnodiging verzonden naar het e-mailadres dat je hebt opgegeven. -> %s',
	'UCP_JV_INVITE_EDUP'						=> 'Je hebt meer dan één keer een e-mailadres gebruikt. -> %s',
	'UCP_JV_INVITE_EMAILS_SENT'					=> 'De uitnodigingen zijn succesvol verzonden.',
	'UCP_JV_INVITE_EMAIL_KERES_EXPLAIN'			=> 'Reden voor aangevraagde uitnodigingen.',
	'UCP_JV_INVITE_EMAIL_LANG'					=> 'E-mail taal',
	'UCP_JV_INVITE_EMAIL_SELECT'				=> 'Uitnodigings selectie',
	'UCP_JV_INVITE_EMAIL_SELECT_EXPLAIN'		=> 'Kies wie je wilt verwijderen uit je ontvangers.',
	'UCP_JV_INVITE_EMAIL_SELECT_RESTORE_EXP'	=> 'Kies wie je wilt herstellen van je ontvangers.',
	'UCP_JV_INVITE_EMAIL_SENT'					=> 'De uitnodiging is succesvol verzonden.',
	'UCP_JV_INVITE_FLOOD_LIMIT'					=> 'Je kan nu geen uitnodigingen meer verzenden. Probeer het later opnieuw.',
	'UCP_JV_INVITE_FRIEND'						=> 'Voeg een vriend toe',
	'UCP_JV_INVITE_FRIEND_EXPLAIN'				=> 'De uitgenodigde gebruiker wordt toegevoegd aan je vriendenlijst.',
	'UCP_JV_INVITE_FUG_LIMIT'					=> 'Je kunt vandaag alleen %s uitnodigingen verzenden, maar je hebt %s ontvangers opgegeven.',
	'UCP_JV_INVITE_KERES'						=> 'Vraag een uitnodiging aan',
	'UCP_JV_INVITE_KERES_BUYS_SUCCES'			=> 'Uitnodigingen gekocht met succes.',
	'UCP_JV_INVITE_KERES_BUY_MIN'				=> 'Minimum (1) uitnodiging om te kopen.',
	'UCP_JV_INVITE_KERES_BUY_NO'				=> 'Je hebt niet genoeg %s om dit aantal uitnodigingen te kopen. Je saldo is momenteel %s %s.',
	'UCP_JV_INVITE_KERES_BUY_SUBMIT'			=> 'Koop',
	'UCP_JV_INVITE_KERES_BUY_SUBT'				=> 'Uitnodigingen die je wil kopen',
	'UCP_JV_INVITE_KERES_BUY_SUBT_EXPLAIN'		=> 'Voer het aantal uitnodigingen in die je wilt kopen.<br>De prijs van een uitnodiging is <strong>%s %s</strong>.<br>Je bent verantwoordelijk voor de uitgenodigde persoon als die iets fout doet.',
	'UCP_JV_INVITE_KERES_BUY_SUCCES'			=> 'Je uitnodiging is succesvol gekocht.',
	'UCP_JV_INVITE_KERES_BUY_TITLE'				=> 'Koop een uitnodiging.',
	'UCP_JV_INVITE_KERES_DISABLED'				=> 'Het verzoek is uitgeschakeld!',
	'UCP_JV_INVITE_KERES_MAX'					=> 'Maximaal aantal verzoeken: (%s) Verzoek(en).',
	'UCP_JV_INVITE_KERES_MIN'					=> 'Minimum aantal aangevraagde uitnodigingen: (1)',
	'UCP_JV_INVITE_KERES_NO_MES'				=> 'Je hebt geen bericht geschreven. Zonder uitleg kun je geen aanspraak maken op zoveel uitnodigingen.',
	'UCP_JV_INVITE_KERES_OFF'					=> 'Je uitnodigingsverzoek is in behandeling. Zodra het is beoordeeld door een beheerder/moderator, ontvang je hierover een e-mail.',
	'UCP_JV_INVITE_KERES_SOK_EXPLAIN'			=> 'Bij het versturen van meer dan <strong>(%s)</strong> verzoeken, is een uitleg aan de admin noodzakelijk. Gelieve uit te leggen waarom je zoveel uitnodigingen nodig hebt.<br>Als we je verzoek aanvaardbaar is, zullen we je uitnodigingen sturen. Als we misbruik ervaren, kan dit ook leiden tot een ban.',
	'UCP_JV_INVITE_KERES_SUBMIT'				=> 'Dien een verzoek in',
	'UCP_JV_INVITE_KERES_SUCC'					=> 'Het uitnodigingsverzoek is met succes verzonden.',
	'UCP_JV_INVITE_KERES_SUCCS'					=> 'De uitnodigingsverzoeken zijn met succes verzonden.',
	'UCP_JV_INVITE_KERES_TITLE'					=> 'Aangevraagde uitnogigingen',
	'UCP_JV_INVITE_KERES_TITLE_EXPLAIN'			=> 'Voer het aantal uitnodigingen in die je wilt aanvragen. Er kunnen maximaal <strong>(%s)</strong> uitnodigingen worden aangevraagd.<br>Je bent verantwoordelijk voor de uitgenodigde persoon als deze iets verkeerd doet.',
	'UCP_JV_INVITE_KULDES'						=> 'Een uitnodiging sturen',
	'UCP_JV_INVITE_KULDES_EMAIL_MAX'			=> 'Je kan maximaal %s e-mail adressen gebruiken, maar je hebt er %s ingevoerd.',
	'UCP_JV_INVITE_KULDES_MAX'					=> '<span class="jv_invite_tred">Momenteel is er geen limiet.</span>',
	'UCP_JV_INVITE_MAX'							=> 'Je hebt meer ontvangers gespecificeerd dan je hebt uitgenodigd.',
	'UCP_JV_INVITE_MAX_ERROR'					=> 'Momenteel heb je een onbeperkt aantal uitnodigingen.',
	'UCP_JV_INVITE_MAX_RECIPIENTS'				=> 'Schrijf elk adres op een nieuwe regel.<br>Het maximale aantal ontvangers',
	'UCP_JV_INVITE_MESSAGE_BODY_EXPLAIN'		=> 'Schrijf een paar regels om uit te leggen waarom je graag wil dat je hem/haar als lid erbij wil hebben.',
	'UCP_JV_INVITE_MIN_MEM_DAYS_ERROR'			=> 'Het spijt me, maar je kunt geen uitnodigingen versturen.<br>Reden: %s dagen zijn niet verstreken sinds je registratie.<br>Het versturen van uitnodigingen komt voor jouw beschikbaar op %s.',
	'UCP_JV_INVITE_NOTIFICATION_TYPE_MANAGE'	=> 'Iemand veranderde het aantal uitnodigingen.',
	'UCP_JV_INVITE_NOT_DELETED_INVITE'			=> 'Er is geen uitnodiging om te verwijderen.',
	'UCP_JV_INVITE_NOT_FOUND'					=> 'De uitnodiging kan niet meer worden gevonden.',
	'UCP_JV_INVITE_NOT_RESTORED_INVITE'			=> 'Er is geen uitnodiging om te herstellen.',
	'UCP_JV_INVITE_NO_EMAIL'					=> 'Je hebt geen e-mailadres opgegeven.',
	'UCP_JV_INVITE_NO_INVITED_USER'				=> 'Je hebt nog niemand uitgenodigd.',
	'UCP_JV_INVITE_NO_LOGIN'					=> 'Hij/zij is niet geregistreerd op deze website.',
	'UCP_JV_INVITE_NO_PERM_EMAIL'				=> 'Je hebt geen toestemming om e-mail te verzenden.',
	'UCP_JV_INVITE_NULL'						=> 'Je hebt geen uitnodigingen.',
	'UCP_JV_INVITE_POINTS_AMOUNT'				=> 'Geschenkbedrag',
	'UCP_JV_INVITE_POINTS_AMOUNT_EXPLAIN'		=> 'Bedrag dat een lid ontvangt wanneer hij iemand heeft uitgenodigd en als deze uitgenodigde persoon een geregistreerd lid wordt.',
	'UCP_JV_INVITE_POINTS_COST'					=> 'Uitnodigingsprijs',
	'UCP_JV_INVITE_POINTS_COST_EXPLAIN'			=> 'De kostprijs voor het versturen van een uitnodiging.',
	'UCP_JV_INVITE_POST_LIMIT'					=> 'Je moet ten minste %s berichten hebben om een uitnodiging te verzenden',
	'UCP_JV_INVITE_REST'						=> 'Herstel',
	'UCP_JV_INVITE_RESTORE'						=> 'Herstel uitnodigingen',
	'UCP_JV_INVITE_RESTORE_EXPLAIN'				=> 'Hier heb je de mogelijkheid om per ongeluk verwijderde uitnodigingen te herstellen.',
	'UCP_JV_INVITE_RESTORE_NO_CONFIRM'			=> 'Het herstel is niet bevestigd.',
	'UCP_JV_INVITE_RESTORE_SUCCES'				=> [
		1										=> 'De uitnodiging is succesvol hersteld.',
		2										=> 'De uitnodigingen zijn succesvol hersteld.',
	],
	'UCP_JV_INVITE_SEND_SUBMIT'					=> 'Verstuur uitnodiging',
	'UCP_JV_INVITE_TIME_END'					=> 'Vervaldatum',
	'UCP_JV_INVITE_TIME_END_EXPLAIN'			=> 'De tijd gedurende welke de uitgenodigde gebruiker zijn uitnodiging moet gebruiken.',
	'UCP_JV_INVITE_UT_REG'						=> 'Laatste gebruiker',
	'UCP_JV_INVITE_UT_REG_EXPLAIN'				=> 'De laatste gebruiker die is uitgenodigd.',
	'UCP_JV_INVITE_UT_REG_INFO'					=> '<strong>%s</strong> geregistreerd %s',
	'UCP_JV_JV_INVITE_MEMBER_LIST_EXPLAIN'		=> [
		1										=> 'Je kunt het lid bekijken dat je hebt uitgenodigd.',
		2										=> 'Je kunt de leden bekijken die je hebt uitgenodigd.',
	],
]);
