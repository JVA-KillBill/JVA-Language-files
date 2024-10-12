<?php
/**
*
* @package phpBB Arcade
* @version $Id: install.php 173 2024-01-14 12:28:15Z KillBill $
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
// Some characters you may want to copy&paste: ‚ ‘ ’ « » „ “ ” … ≧

$lang = array_merge($lang, [
	'INSTALL_ARCADE_ALL_FOUND'							=> 'Alles gevonden',
	'INSTALL_ARCADE_BBCODE_HELPLINE'					=> 'Help',
	'INSTALL_ARCADE_BBCODE_REQD'						=> 'BBCode controle',
	'INSTALL_ARCADE_BBCODE_REQD_EXPLAIN'				=> '<strong>Vereist</strong> - er moet wat BBCode worden toegevoegd om de phpBB Arcade goed te laten werken.',
	'INSTALL_ARCADE_BBCODE_USAGE'						=> 'BBCode gebruik',
	'INSTALL_ARCADE_DIRS_FILES_REQD'					=> 'Bestanden en mappen',
	'INSTALL_ARCADE_DIRS_FILES_REQD_EXPLAIN'			=> '<strong>Vereist</strong> - Om correct te kunnen functioneren moet phpBB Arcade toegang hebben tot of schrijven naar bepaalde bestanden of mappen. Als je “Niet gevonden” ziet, moet je het relevante bestand of map maken. Als je “Onbeschrijfbaar” ziet, moet je de permissies voor het bestand of de map wijzigen zodat phpBB Arcade ernaar kan schrijven.',
	'INSTALL_ARCADE_DISPLAY_ON_POSTING'					=> 'Toon op bericht pagina',
	'INSTALL_ARCADE_DONATE_TITLE'						=> 'phpBB Arcade donatie',
	'INSTALL_ARCADE_FINISH'								=> 'De phpBB Arcade-controle is succesvol afgerond. Bedankt voor het kiezen van phpBB Arcade software.',
	'INSTALL_ARCADE_FOUND'								=> 'Gevonden',
	'INSTALL_ARCADE_HTML_REPLACEMENT'					=> 'HTML vervanging',
	'INSTALL_ARCADE_JVA_CORE_REQD'						=> 'JVA - Core versie ≧ %s',
	'INSTALL_ARCADE_JVA_CORE_REQD_EXPLAIN'				=> '<strong>Vereist</strong> - Je moet minimaal versie “%s” van “JVA - Core” hebben om de phpBB Arcade goed te laten werken.',
	'INSTALL_ARCADE_MAIN_PAGE'							=> 'Ga naar de phpBB Arcade ACP hoofdpagina',
	'INSTALL_ARCADE_NEXT_STEP'							=> 'Ga naar de volgende stap',
	'INSTALL_ARCADE_NOT_FOUND'							=> 'Niet gevonden',
	'INSTALL_ARCADE_PHPBB_REQD'							=> 'phpBB versie ≧ %s',
	'INSTALL_ARCADE_PHPBB_REQD_EXPLAIN'					=> '<strong>Vereist</strong> - Je moet minimaal versie “%s” van “phpBB” hebben om de phpBB Arcade goed te laten werken.',
	'INSTALL_ARCADE_PHP_CURL_SUPPORT'					=> 'PHP instelling <var>curl</var> is beschikbaar',
	'INSTALL_ARCADE_PHP_CURL_SUPPORT_EXPLAIN'			=> '<strong>Optioneel</strong> - Deze functie is optioneel, hoewel sommige modules in phpBB Arcade, zoals de ACP-download module, zonder deze niet goed zullen werken.',
	'INSTALL_ARCADE_PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP function getimagesize() is beschikbaar',
	'INSTALL_ARCADE_PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Vereist</strong> - Om ervoor te zorgen dat phpBB Arcade correct werkt, moet de functie getimagesize beschikbaar zijn.',
	'INSTALL_ARCADE_PHP_REQD'							=> 'PHP versie ≧ %s',
	'INSTALL_ARCADE_PHP_REQD_EXPLAIN'					=> '<strong>Vereist</strong> - Je moet minimaal PHP versie “%s” hebben om goed te werken met phpBB Arcade.',
	'INSTALL_ARCADE_PHP_SETTINGS'						=> 'PHP versie en instellingen',
	'INSTALL_ARCADE_PHP_URL_FOPEN_SUPPORT'				=> 'PHP instelling <var>allow_url_fopen</var> is ingeschakeld',
	'INSTALL_ARCADE_PHP_URL_FOPEN_SUPPORT_EXPLAIN'		=> '<strong>Optioneel</strong> - Deze instelling is optioneel, hoewel sommige modules in phpBB Arcade, zoals de ACP-download module, zonder deze niet goed zullen werken.',
	'INSTALL_ARCADE_REQUIREMENTS'						=> 'phpBB Arcade installatie vereisten.',
	'INSTALL_ARCADE_REQUIREMENTS_EXPLAIN'				=> 'Geef enkele tests uit op de server om er zeker van te zijn dat je de phpBB Arcade met succes hebt geïnstalleerd. Zorg ervoor dat je de resultaten grondig doorleest en ga niet verder voordat alle vereiste tests zijn geslaagd. Als je een van de functies wilt gebruiken die afhankelijk zijn van de optionele tests, moet je ervoor zorgen dat deze tests ook worden doorstaan.',
	'INSTALL_ARCADE_SOFTWARE_VERSION'					=> 'Software versie',
	'INSTALL_ARCADE_TEST_AGAIN'							=> 'Test opnieuw',
	'INSTALL_ARCADE_UNWRITABLE'							=> 'Onbeschrijfbaar',
	'INSTALL_ARCADE_VERIFY_DB'							=> 'Controleer phpBB Arcade database data',
	'INSTALL_ARCADE_VERIFY_DB_ACP_MODULES'				=> 'Controleer ACP modules',
	'INSTALL_ARCADE_VERIFY_DB_ARCADE_PERMISSIONS'		=> 'Controleer phpBB Arcade permissies',
	'INSTALL_ARCADE_VERIFY_DB_CONFIGS'					=> 'Controleer configuraties',
	'INSTALL_ARCADE_VERIFY_DB_DATA'						=> 'Controleer database data',
	'INSTALL_ARCADE_VERIFY_DB_EXPLAIN'					=> 'Er wordt gecontroleerd of alle gegevens van de arcade-database correct zijn in de database.',
	'INSTALL_ARCADE_VERIFY_DB_MCP_MODULES'				=> 'Controleer MCP modules',
	'INSTALL_ARCADE_VERIFY_DB_PERMISSIONS'				=> 'Controleer permissies',
	'INSTALL_ARCADE_VERIFY_DB_PHPBB_PERMISSIONS'		=> 'Controleer phpBB permissies',
	'INSTALL_ARCADE_VERIFY_DB_TABLES'					=> 'Controleer tabellen',
	'INSTALL_ARCADE_VERIFY_DB_UCP_MODULES'				=> 'Controleer UCP modules',
	'INSTALL_ARCADE_VERIFY_ERROR_DB_VERSION'			=> 'Het controleren van de phpBB Arcade is niet uitgevoerd omdat er een nieuwe softwareversie is gedetecteerd. Doe de %sphpBB Arcade update%s.',
	'INSTALL_ARCADE_VERIFY_FILES'						=> 'Controleer phpBB Arcade bestanden',
	'INSTALL_ARCADE_VERIFY_FILES_EXIST'					=> 'Controleren of bestanden bestaan',
	'INSTALL_ARCADE_VERIFY_FILES_EXPLAIN'				=> 'Er wordt gecontroleerd of alle phpBB Arcade-bestanden te vinden zijn op de server, controleert ook op oude of ongebruikte mappen en bestanden die wachten om te worden verwijderd.',
	'INSTALL_ARCADE_VERIFY_OLD_FILES_EXIST'				=> 'Controleer op oude of ongebruikte mappen en bestanden',
	'INSTALL_ARCADE_WRITABLE'							=> 'Beschrijfbaar',
	'INS_ARCADE_ADD_ERROR_LOG'							=> 'Alle voorkomende fouten zijn gelogd.',
	'INS_ARCADE_CONVERT_GAME_INSTALL_FILE_END'			=> 'Het omzettingsproces is voltooid, je kan het resultaat hieronder zien.',
	'INS_ARCADE_CONVERT_GAME_INSTALL_FILE_EXPLAIN'		=> 'Hieronder kan je zien waar we ons bevinden in het omzettingsproces. Sluit je browser nog niet af.',
	'INS_ARCADE_CONVERT_GAME_INSTALL_FILE_PROCESSING'	=> 'Even geduld…<br>%1$s<br>Bezig met verwerken van spel installatiebestand %2$s of %3$s.',
	'INS_ARCADE_CONVERT_GAME_INSTALL_FILE_START'		=> 'Start omzetten',
	'INS_ARCADE_CONVERT_TOTAL_GAME_INSTALL_FILES'		=> 'Omgezette bestanden',
	'INS_ARCADE_DATA_FILES_CORRECT'						=> 'Bestanden met correcte gegevens',
	'INS_ARCADE_DELETE_DUPLICATE_GAME'					=> [
		1												=> 'Verwijder dubbel spel',
		2												=> 'Verwijder dubbele spellen',
	],
	'INS_ARCADE_ENABLE_ERROR'							=> 'De extensie kan niet worden geactiveerd omdat de versie van <strong>“phpBB”</strong> lager is dan <strong>“%s”</strong>!',
	'INS_ARCADE_FILES_ALL_EXISTS'						=> 'Alle bestanden zijn aanwezig',
	'INS_ARCADE_FILE_WRITE_EXPLAIN'						=> '<span style="color: #ff0000;">Waarschuwing:</span> Het updaten van de spel-installatiebestanden zal alleen slagen als de bestanden beschrijfbaar zijn, dus zorg ervoor dat de permissies correct zijn ingesteld.',
	'INS_ARCADE_GAME_CONVERT_FILE'						=> 'Spel installatiebestanden worden geconverteerd',
	'INS_ARCADE_GAME_CONVERT_FILE_EXPLAIN'				=> 'Hier heb je de optie om de spel installatiebestanden naar de nieuwste versie te converteren.',
	'INS_ARCADE_GAME_DATA_CORRECT'						=> 'Spellen met correcte gegevens',
	'INS_ARCADE_GAME_DATA_UPDATED'						=> 'Bijgewerkte spellen',
	'INS_ARCADE_GAME_FILES_NOT_FOUND'					=> 'Geen spelbestanden gevonden',
	'INS_ARCADE_GAME_INSTALL_FILES_NOT_FOUND'			=> 'Spel installatie bestanden niet gevonden',
	'INS_ARCADE_GAME_INSTALL_FILES_UNWRITABLE'			=> 'Onbeschrijfbare bestanden',
	'INS_ARCADE_GAME_INSTALL_FILE_UPDATED'				=> 'Bijgewerkte spel installatiebestanden',
	'INS_ARCADE_UND_GAMES_FILESIZE'						=> 'Ongespecificeerde bestandsgrootte, spellen',
	'INS_ARCADE_UPDATE_GAME_DATA_END'					=> 'Het bijwerking proces is voltooid, je kunt de resultaten hieronder zien.',

	'JVA_CORE_EXT_NOT_FOUND'							=> 'De extensie kan niet worden ingeschakeld omdat de “JVA - Core” extensie niet kan worden gevonden!',
]);
