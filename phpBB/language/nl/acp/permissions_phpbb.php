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

/**
*	EXTENSION-DEVELOPERS PLEASE NOTE
*
*	You are able to put your permission sets into your extension.
*	The permissions logic should be added via the 'core.permissions' event.
*	You can easily add new permission categories, types and permissions, by
*	simply merging them into the respective arrays.
*	The respective language strings should be added into a language file, that
*	start with 'permissions_', so they are automatically loaded within the ACP.
*/

$lang = array_merge($lang, array(
	'ACL_CAT_ACTIONS'		=> 'Acties',
	'ACL_CAT_CONTENT'		=> 'Inhoud',
	'ACL_CAT_FORUMS'		=> 'Forums',
	'ACL_CAT_MISC'			=> 'Diverse',
	'ACL_CAT_PERMISSIONS'	=> 'Permissies',
	'ACL_CAT_PM'			=> 'Privéberichten',
	'ACL_CAT_POLLS'			=> 'Peilingen',
	'ACL_CAT_POST'			=> 'Bericht',
	'ACL_CAT_POST_ACTIONS'	=> 'Berichtacties',
	'ACL_CAT_POSTING'		=> 'Plaatsing',
	'ACL_CAT_PROFILE'		=> 'Profiel',
	'ACL_CAT_SETTINGS'		=> 'Instellingen',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'Onderwerpacties',
	'ACL_CAT_USER_GROUP'	=> 'Gebruikers &amp; Groepen',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=> 'Kan profielen, ledenlijst en “wie is er online” zien',
	'ACL_U_CHGNAME'		=> 'Kan gebruikersnaam wijzigen',
	'ACL_U_CHGPASSWD'	=> 'Kan wachtwoord wijzigen',
	'ACL_U_CHGEMAIL'	=> 'Kan e-mailadres wijzigen',
	'ACL_U_CHGAVATAR'	=> 'Kan avatar wijzigen',
	'ACL_U_CHGGRP'		=> 'Kan standaard gebruikersgroep wijzigen',
	'ACL_U_CHGPROFILEINFO'	=> 'Kan profielveld-informatie wijzigen',

	'ACL_U_ATTACH'		=> 'Kan bestanden bijvoegen',
	'ACL_U_DOWNLOAD'	=> 'Kan bestanden downloaden',
	'ACL_U_SAVEDRAFTS'	=> 'Kan concepten opslaan',
	'ACL_U_CHGCENSORS'	=> 'Kan woordcensuur uitschakelen',
	'ACL_U_SIG'			=> 'Kan onderschrift gebruiken',
    'ACL_U_EMOJI'		=> 'Kan emoji en UTF-8 tekens gebruiken in onderwerpen',

	'ACL_U_SENDPM'		=> 'Kan privéberichten versturen',
	'ACL_U_MASSPM'		=> 'Kan privéberichten naar meerdere gebruikers versturen',
	'ACL_U_MASSPM_GROUP'	=> 'Kan privéberichten naar groepen versturen',
	'ACL_U_READPM'		=> 'Kan privéberichten lezen',
	'ACL_U_PM_EDIT'		=> 'Kan eigen privéberichten wijzigen',
	'ACL_U_PM_DELETE'	=> 'Kan privéberichten uit eigen map verwijderen',
	'ACL_U_PM_FORWARD'	=> 'Kan privéberichten doorsturen',
	'ACL_U_PM_EMAILPM'	=> 'Kan privéberichten e-mailen',
	'ACL_U_PM_PRINTPM'	=> 'Kan privéberichten printen',
	'ACL_U_PM_ATTACH'	=> 'Kan bestanden bijvoegen in privéberichten',
	'ACL_U_PM_DOWNLOAD'	=> 'Kan bestanden downloaden in privéberichten',
	'ACL_U_PM_BBCODE'	=> 'Kan BBCode in privéberichten gebruiken',
	'ACL_U_PM_SMILIES'	=> 'Kan smilies in privéberichten gebruiken',
	'ACL_U_PM_IMG'		=> 'Kan [img] BBCode-tag in privéberichten gebruiken',
	'ACL_U_PM_FLASH'	=> 'Kan [flash] BBCode-tag in privéberichten gebruiken',

	'ACL_U_SENDEMAIL'	=> 'Kan e-mails versturen',
	'ACL_U_SENDIM'		=> 'Kan instant-berichten versturen',
	'ACL_U_IGNOREFLOOD'	=> 'Kan vloedbeperking negeren',
	'ACL_U_HIDEONLINE'	=> 'Kan online status verbergen',
	'ACL_U_VIEWONLINE'	=> 'Kan online verborgen gebruikers bekijken',
	'ACL_U_SEARCH'		=> 'Kan forum doorzoeken',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> 'Kan forum zien',
	'ACL_F_LIST_TOPICS'	=> 'Kan onderwerpen zien',
	'ACL_F_READ'		=> 'Kan forum lezen',
	'ACL_F_SEARCH'		=> 'Kan forum doorzoeken',
	'ACL_F_SUBSCRIBE'	=> 'Kan op forum abonneren',
	'ACL_F_PRINT'		=> 'Kan onderwerpen printen',
	'ACL_F_EMAIL'		=> 'Kan onderwerpen e-mailen',
	'ACL_F_BUMP'		=> 'Kan onderwerpen omhoog halen (bumpen)',
	'ACL_F_USER_LOCK'	=> 'Kan eigen onderwerpen sluiten',
	'ACL_F_DOWNLOAD'	=> 'Kan bestanden downloaden',
	'ACL_F_REPORT'		=> 'Kan berichten melden',

	'ACL_F_POST'		=> 'Kan nieuwe onderwerpen starten',
	'ACL_F_STICKY'		=> 'Kan stickies plaatsen',
	'ACL_F_ANNOUNCE'	=> 'Kan mededelingen plaatsen',
	'ACL_F_ANNOUNCE_GLOBAL'	=> 'Kan algemene mededelingen plaatsen',
	'ACL_F_REPLY'		=> 'Kan op onderwerpen reageren',
	'ACL_F_EDIT'		=> 'Kan eigen berichten wijzigen',
	'ACL_F_DELETE'		=> 'Kan eigen berichten permanent verwijderen',
	'ACL_F_SOFTDELETE'	=> 'Kan eigen berichten tijdelijk verwijderen<br /><em>Moderators die permissie hebben om berichten te kunnen goedkeuren, kunnen tijdelijk verwijderde berichten terughalen.</em>',
	'ACL_F_IGNOREFLOOD'=> 'Kan vloedbeperking negeren',
	'ACL_F_POSTCOUNT'	=> 'Berichtenteller verhogen<br /><em>Let op dat deze instelling alleen effect heeft op nieuwe berichten.</em>',
	'ACL_F_NOAPPROVE'	=> 'Kan berichten plaatsen zonder goedkeuring',

	'ACL_F_ATTACH'		=> 'Kan bestanden bijvoegen',
	'ACL_F_ICONS'		=> 'Kan onderwerp/berichteniconen gebruiken',
	'ACL_F_BBCODE'		=> 'Kan BBCode gebruiken',
	'ACL_F_FLASH'		=> 'Kan [flash] BBCode tag gebruiken',
	'ACL_F_IMG'			=> 'Kan [img] BBCode tag gebruiken',
	'ACL_F_SIGS'		=> 'Kan onderschriften gebruiken',
	'ACL_F_SMILIES'		=> 'Kan smilies gebruiken',

	'ACL_F_POLL'		=> 'Kan peilingen aanmaken',
	'ACL_F_VOTE'		=> 'Kan op peilingen stemmen',
	'ACL_F_VOTECHG'		=> 'Kan bestaande stem wijzigen',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> 'Kan berichten wijzigen',
	'ACL_M_DELETE'		=> 'Kan berichten permanent verwijderen',
	'ACL_M_SOFTDELETE'	=> 'Kan berichten tijdelijk verwijderen<br /><em>Moderators die permissie hebben om berichten te kunnen goedkeuren, kunnen tijdelijk verwijderde berichten terughalen.</em>',
	'ACL_M_APPROVE'		=> 'Kan berichten goedkeuren en herstellen',
	'ACL_M_REPORT'		=> 'Kan meldingen sluiten en verwijderen',
	'ACL_M_CHGPOSTER'	=> 'Kan berichtauteur wijzigen',

	'ACL_M_MOVE'	=> 'Kan onderwerpen verplaatsen',
	'ACL_M_LOCK'	=> 'Kan onderwerpen sluiten',
	'ACL_M_SPLIT'	=> 'Kan onderwerpen splitsen',
	'ACL_M_MERGE'	=> 'Kan onderwerpen samenvoegen',

	'ACL_M_INFO'	=> 'Kan berichtdetails bekijken',
	'ACL_M_WARN'	=> 'Kan waarschuwingen geven', 
	'ACL_M_PM_REPORT'	=> 'Kan meldingen over privéberichten sluiten en verwijderen',
	'ACL_M_BAN'		=> 'Kan verbanningen beheren', 
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> 'Kan foruminstellingen wijzigen/controleren op updates',
	'ACL_A_SERVER'		=> 'Kan server/communicatie-instellingen wijzigen',
	'ACL_A_JABBER'		=> 'Kan Jabberinstellingen wijzigen',
	'ACL_A_PHPINFO'		=> 'Kan PHP-instellingen bekijken',

	'ACL_A_FORUM'		=> 'Kan forums beheren',
	'ACL_A_FORUMADD'	=> 'Kan nieuwe forums toevoegen',
	'ACL_A_FORUMDEL'	=> 'Kan forums verwijderen',
	'ACL_A_PRUNE'		=> 'Kan forums opschonen',

	'ACL_A_ICONS'		=> 'Kan onderwerp/berichticonen en smilies wijzigen',
	'ACL_A_WORDS'		=> 'Kan woordcensuur wijzigen',
	'ACL_A_BBCODE'		=> 'Kan BBCode-tags definiëren',
	'ACL_A_ATTACH'		=> 'Kan bijlage gerelateerde instellingen wijzigen',

	'ACL_A_USER'		=> 'Kan gebruikers beheren<br /><em>Dit bevat ook het zien van de gebruikers browser agent in de “wie is er online”-lijst.</em>',
	'ACL_A_USERDEL'		=> 'Kan gebruikers verwijderen/opschonen',
	'ACL_A_GROUP'		=> 'Kan groepen beheren',
	'ACL_A_GROUPADD'	=> 'Kan nieuwe groepen toevoegen',
	'ACL_A_GROUPDEL'	=> 'Kan groepen verwijderen',
	'ACL_A_RANKS'		=> 'Kan rangen beheren',
	'ACL_A_PROFILE'		=> 'Kan eigen profielvelden beheren',
	'ACL_A_NAMES'		=> 'Kan niet toegestane gebruikersnamen beheren',
	'ACL_A_BAN'			=> 'Kan verbanningen beheren',

	'ACL_A_VIEWAUTH'	=> 'Kan permissiemaskers bekijken',
	'ACL_A_AUTHGROUPS'	=> 'Kan permissies voor individuele groepen wijzigen',
	'ACL_A_AUTHUSERS'	=> 'Kan permissies voor individuele gebruikers wijzigen',
	'ACL_A_FAUTH'		=> 'Kan forumpermissies-klasse wijzigen',
	'ACL_A_MAUTH'		=> 'Kan moderatorpermissies-klasse wijzigen',
	'ACL_A_AAUTH'		=> 'Kan beheerderspermissie-klasse wijzigen',
	'ACL_A_UAUTH'		=> 'Kan gebruikerspermissie-klasse wijzigen',
	'ACL_A_ROLES'		=> 'Kan rollen beheren',
	'ACL_A_SWITCHPERM'	=> 'Kan permissies van anderen gebruiken',

	'ACL_A_STYLES'		=> 'Kan stijlen beheren',
	'ACL_A_EXTENSIONS'	=> 'Kan extensies beheren',
	'ACL_A_VIEWLOGS'	=> 'Kan logs bekijken',
	'ACL_A_CLEARLOGS'	=> 'Kan logs legen',
	'ACL_A_MODULES'		=> 'Kan modules beheren',
	'ACL_A_LANGUAGE'	=> 'Kan taalpakketten beheren',
	'ACL_A_EMAIL'		=> 'Kan massa e-mail versturen',
	'ACL_A_BOTS'		=> 'Kan bots beheren',
	'ACL_A_REASONS'		=> 'Kan melding-/afkeurredenen beheren',
	'ACL_A_BACKUP'		=> 'Kan database back-up maken/terugzetten',
	'ACL_A_SEARCH'		=> 'Kan zoektechnieken en instellingen beheren',
));
