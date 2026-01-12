<?php
/**
*
* @package phpBB Arcade
* @version $Id: info_ucp_arcade.php 173 2024-01-14 12:28:15Z KillBill $
* @author 2011-2026 KillBill
* @copyright (c) 2014-2026 https://jv-arcade.com/ - https://jv-arcade.com/contact
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
	$lang = [];
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

//Arcade
$lang = array_merge($lang, [
	'UCP_ARCADE'								=> 'phpBB Arcade',
	'UCP_ARCADE_BOARD_SESSION'					=> 'Tijdsweergave van forumsessie',
	'UCP_ARCADE_BOARD_SESSION_EXPLAIN'			=> 'Het aftellen van de forumsessie verschijnt boven het spelplatform. Als het aftellen nul bereikt, loggen we je automatisch uit van het forum.',
	'UCP_ARCADE_BUTTON_STYLE'					=> 'Stijlmenuknop',
	'UCP_ARCADE_BUTTON_WITHOUT_TEXT'			=> 'Knop zonder tekst',
	'UCP_ARCADE_BUTTON_WITH_TEXT'				=> 'Knop met tekst',
	'UCP_ARCADE_CAT_GAMES_STYLE'				=> 'Categorie spelstijl',
	'UCP_ARCADE_CAT_STYLE'						=> 'Categorie stijl',
	'UCP_ARCADE_DARK'							=> 'Donker',
	'UCP_ARCADE_DELETE_FAVORITE'				=> [
		1										=> 'Verwijder favoriete spel',
		2										=> 'Verwijder favoriete spellen'
	],
	'UCP_ARCADE_DELETE_FAVORITE_CONFIRM'		=> [
		1										=> 'Weet je zeker dat je dit favoriete spel wilt verwijderen?',
		2										=> 'Weet je zeker dat je deze favoriete spellen wilt verwijderen?'
	],
	'UCP_ARCADE_DELETE_FAVORITE_SUCCESS'		=> [
		1										=> 'Favoriete spel is verwijderd.',
		2										=> 'Favoriete spellen zijn verwijderd.'
	],
	'UCP_ARCADE_DEVICES_ALL'					=> 'Alle apparaten',
	'UCP_ARCADE_DEVICES_TOUCH_SCREEN'			=> 'Apparaten met aanraakscherm',
	'UCP_ARCADE_DISPLAY_GAME_IMAGE'				=> 'Spelafbeeldingen weergeven',
	'UCP_ARCADE_DISPLAY_POPUP_ICON'				=> 'Pop-up pictogram weergeven',
	'UCP_ARCADE_EVERYWHERE'						=> 'Overal',
	'UCP_ARCADE_FAVORITES'						=> 'Favorieten beheren',
	'UCP_ARCADE_FAVORITES_EXPLAIN'				=> 'Je kunt je favoriete spellen hieronder bekijken, markeren en verwijderen.',
	'UCP_ARCADE_FLASH_WATERMARK'				=> 'Flash watermerk weergeven',
	'UCP_ARCADE_FLASH_WATERMARK_EXPLAIN'		=> 'Als je het inschakelt, wordt het Flash-watermerk toegevoegd aan de spel afbeeldingen.',
	'UCP_ARCADE_GAME'							=> 'Spelinstellingen',
	'UCP_ARCADE_GAME_AUTO_ZOOM'					=> 'Automatisch inzoomen op een spel',
	'UCP_ARCADE_GAME_AUTO_ZOOM_EXPLAIN'			=> 'Als de aan het spel toegewezen ruimte groter is dan de grootte van het spel, wordt het spel automatisch vergroot.<br><em class="arcade_attent">Houd er rekening mee dat deze instelling het inschakelen van het aangepast formaat overschrijft.</em>',
	'UCP_ARCADE_GAME_BORDER_ENABLE'				=> 'Rand rond het spel weergeven',
	'UCP_ARCADE_GAME_CUSTOM_SIZE'				=> 'Aangepast formaat inschakelen',
	'UCP_ARCADE_GAME_CUSTOM_SIZE_EXPLAIN'		=> 'Als je dit inschakelt, wordt de maximale grootte die je definieert gebruikt.<br><em>Houd er rekening mee dat als het spel minder beschikbare ruimte heeft dan de grootte die je hebt ingesteld, het spel automatisch wordt aangepast aan de grootte van de beschikbare ruimte. Omdat de software onder geen enkele omstandigheid toelaat om buiten het speelveld te verschijnen.</em>',
	'UCP_ARCADE_GAME_FILTER_KEYBOARD'			=> 'Toetsenbord spellen filtreren',
	'UCP_ARCADE_GAME_FILTER_KEYBOARD_EXPLAIN'	=> 'Hier heb je de mogelijkheid om spellen te filtreren die het gebruik van een toetsenbord vereisen.',
	'UCP_ARCADE_GAME_FULLSCREEN'				=> 'Start spel op volledig scherm',
	'UCP_ARCADE_GAME_FULLSCREEN_ALL'			=> 'Apparaat met volledig scherm',
	'UCP_ARCADE_GAME_FULLSCREEN_ALL_EXPLAIN'	=> 'Als “Start spel met volledig scherm” is ingeschakeld, kan je opgeven of het geldig is voor alle apparaten of alleen voor apparaten met aanraakscherm.',
	'UCP_ARCADE_GAME_FULLSCREEN_EXPLAIN'		=> 'Als je het inschakelt, klik dan op de startknop in de spel introductie en het spel zal dan op volledig scherm starten.',
	'UCP_ARCADE_GAME_INTRO_STYLE'				=> 'Inleidende stijl van het spel',
	'UCP_ARCADE_GAME_JUMP_TOP'					=> 'Automatische toppositie',
	'UCP_ARCADE_GAME_JUMP_TOP_EXPLAIN'			=> 'Als je het spel van de ingestelde positie verwijdert en vervolgens op het spel klikt, keert het automatisch terug naar de ingestelde positie.',
	'UCP_ARCADE_GAME_LANDSCAPE_WIDTH'			=> 'Breedte van het landschap spel',
	'UCP_ARCADE_GAME_LANDSCAPE_WIDTH_EXPLAIN'	=> 'Voor landschap spellen kan de hier opgegeven breedte de maximale grootte zijn.',
	'UCP_ARCADE_GAME_MENU_ENABLE'				=> 'Menu inschakelen',
	'UCP_ARCADE_GAME_MENU_ENABLE_EXPLAIN'		=> 'Er is een glossy menu met meerdere knoppen toegewezen aan de introductie van het spel. Hierdoor heb je tijdens het spelen toegang tot allerlei informatie en instellingen.',
	'UCP_ARCADE_GAME_MENU_POSITION'				=> 'Menu positie',
	'UCP_ARCADE_GAME_ORIENTATION_EXPLAIN'		=> 'Als het spel landschap en portret ondersteunt, wordt het weergegeven zoals hier is ingesteld.<br><em>Het spel draaien tijdens het spelen is mogelijk.<br>Bij draaibare apparaten wordt rekening gehouden met de positie van het apparaat.</em>',
	'UCP_ARCADE_GAME_OVER_ANIMATION'			=> 'Speel animatie af aan het einde van het spel',
	'UCP_ARCADE_GAME_OVER_ANIMATION_SOUND'		=> 'Animatiegeluid inschakelen',
	'UCP_ARCADE_GAME_OVER_RANDOM_GAMES'			=> 'Geeft willekeurige spellen weer aan het einde van het spel',
	'UCP_ARCADE_GAME_OVER_SOUND'				=> 'Speel game over geluid af aan het einde van het spel',
	'UCP_ARCADE_GAME_OVER_SUBMIT'				=> 'Submit score toestaan',
	'UCP_ARCADE_GAME_OVER_SUBMIT_EXPLAIN'		=> 'Als je het niet inschakelt, zal het spel de score niet automatisch indienen of nadat je op de knop “Verzenden” hebt gedrukt. In plaats van de score in te dienen, wordt een “Game Over”-interface geopend, zodat je het spel onmiddellijk opnieuw kunt spelen of de score kunt indienen.',
	'UCP_ARCADE_GAME_PORTRAIT_HEIGHT'			=> 'Hoogte van portret spel',
	'UCP_ARCADE_GAME_PORTRAIT_HEIGHT_EXPLAIN'	=> 'Voor portret spellen kan de hier opgegeven hoogte de maximale grootte zijn.',
	'UCP_ARCADE_GAME_PRELOADER'					=> 'Preloaders uitschakelen',
	'UCP_ARCADE_GAME_PRELOADER_EXPLAIN'			=> 'Je kunt preloaders hier uitschakelen als je er last van hebt. Maar houd er rekening mee dat wanneer je de preloaders uitschakelt, en als je internetverbinding traag is, je alleen gedurende een langere periode een lege ruimte ziet tijdens het laden.',
	'UCP_ARCADE_GAME_RESIZE_BUTTONS'			=> 'Knoppen inschakelen om het formaat te wijzigen',
	'UCP_ARCADE_GAME_RESIZE_BUTTONS_EXPLAIN'	=> 'Als extra optie zijn aangepaste formaatknoppen toegevoegd. De knoppen zijn alleen actief als je in een normaal venster speelt en het venster zich in desktop weergave bevindt.',
	'UCP_ARCADE_GAME_SESSION'					=> 'Tijd van spelsessie weergeven',
	'UCP_ARCADE_GAME_SESSION_EXPLAIN'			=> 'Boven het spel platform wordt een aftelling van de spelsessie weergegeven. Als het aftellen nul bereikt, is het zeker dat het spel je score niet zal opslaan.',
	'UCP_ARCADE_GAME_VERTICAL_POS'				=> 'Verticale positie van het spel',
	'UCP_ARCADE_GAME_VERTICAL_POS_ACTIVE'		=> 'Verticale positie van het spel is actief',
	'UCP_ARCADE_GAME_VERTICAL_POS_ACTIVE_EXP'	=> 'Deze instelling wordt alleen van kracht als de middelste stand is ingesteld.',
	'UCP_ARCADE_GAME_VERTICAL_POS_EXPLAIN'		=> 'Als de hoogte van het scherm hoger is dan de hoogte van het spel, wordt het spel aangepast aan de hier ingestelde positie.',
	'UCP_ARCADE_HTML5_WATERMARK'				=> 'Html5 watermerk weergeven',
	'UCP_ARCADE_HTML5_WATERMARK_EXPLAIN'		=> 'Als je het inschakelt, wordt het Html5-watermerk toegevoegd aan de spel afbeeldingen.',
	'UCP_ARCADE_LIGHT'							=> 'Licht',
	'UCP_ARCADE_LOCAL_STORAGE'					=> 'Lokale opslag beheren',
	'UCP_ARCADE_LOCAL_STORAGE_DEL_CONFIRM'		=> 'Weet je zeker dat je de opgeslagen gegevens uit deze browser wilt verwijderen?',
	'UCP_ARCADE_LOCAL_STORAGE_EMPTY'			=> 'In deze browser is de lokale opslag leeg.',
	'UCP_ARCADE_LOCAL_STORAGE_EXPLAIN'			=> 'Hier kan je de gegevens zien of verwijderen in de lokale opslag van de browser die je momenteel gebruikt.<br>In de lokale opslag kunnen ook verschillende gegevens worden opgenomen, zoals: Gebruikers- en website-instellingen, voortgangsgegevens van het spel.<br><em>Houd er rekening mee dat het ophalen van gegevens exclusief is voor deze website, apparaat en browser.</em>',
	'UCP_ARCADE_LOCAL_STORAGE_NOJS'				=> 'De browser staat geen “JavaScript” toe, dus lokale opslag is niet beschikbaar!',
	'UCP_ARCADE_LOCAL_STORAGE_PRIVATE'			=> 'De browser staat in de “Privé” modus, dus lokale opslag is niet beschikbaar!',
	'UCP_ARCADE_MAX_FAV'						=> 'Je hebt het maximale aantal %s favoriete spellen bereikt om uit te kiezen.',
	'UCP_ARCADE_MIDDLE'							=> 'Midden',
	'UCP_ARCADE_NOTIFICATION_TYPE_GROUP_TOUR'	=> 'Arcade groep toernooi',
	'UCP_ARCADE_NO_PERM_PM_LOSS_HIGHSCORE'		=> 'Je hebt geen toestemming om privéberichten te ontvangen als je je trofee verliest.',
	'UCP_ARCADE_ONLY_POPUP_FULLSCREEN'			=> 'Alleen pop-up/volledig scherm',
	'UCP_ARCADE_PLAY_INFO_BOX'					=> 'Positie informatievak',
	'UCP_ARCADE_PLAY_INFO_BOX_ENABLE'			=> 'Informatievak inschakelen',
	'UCP_ARCADE_PLAY_INFO_BOX_EXPLAIN'			=> 'De informatievakken verschijnen op de ingestelde positie.',
	'UCP_ARCADE_PLAY_MOBILE_SCROLL'				=> 'Schuifbalk inschakelen in mobiele weergave',
	'UCP_ARCADE_PLAY_MOBILE_SCROLL_EXPLAIN'		=> 'In de mobiele weergave heb je de mogelijkheid om de webscroller uit te schakelen als dit vervelend voor je is.<br><em>Merk op dat je dit zelfs kunt bereiken als je de achtergrondverlichting uitschakelt.</em>',
	'UCP_ARCADE_POPUP_VERTICAL_POS'				=> 'Pop-up verticale positie',
	'UCP_ARCADE_POPUP_VERTICAL_POS_EXPLAIN'		=> 'Als de hoogte van het scherm groter is dan de hoogte van het pop-up venster, wordt het nieuwe venster aangepast naar de hier ingestelde positie.',
	'UCP_ARCADE_POST'							=> 'Berichtinstellingen',
	'UCP_ARCADE_RESET_SETTINGS_CONFIRM'			=> 'Weet je zeker dat je al je instellingen naar de standaardinstellingen wilt terugzetten?',
	'UCP_ARCADE_SELECTED_HIGHLIGHT'				=> 'Geselecteerde markering',
	'UCP_ARCADE_SELECTED_HIGHLIGHT_REMOVE'		=> 'Geselecteerde markering verwijderen',
	'UCP_ARCADE_SEND_PM_EXPLAIN'				=> 'Als je record wordt verbroken in een spel of als een gebruiker je wil uitdagen voor een toernooi, ontvang je een privébericht.',
	'UCP_ARCADE_SETTINGS'						=> 'Algemene instellingen',
	'UCP_ARCADE_TOP'							=> 'Bovenkant',
	'UCP_ARCADE_USER_INFO'						=> 'Vervanging van gebruiker informatieblok',
	'UCP_ARCADE_USER_INFO_EXPLAIN'				=> 'Hier heb je de mogelijkheid om het gebruiker informatieblok en het welkomst blok te vervangen, in plaats daarvan kun je ervoor kiezen om de meest gespeelde spellen weer te geven.<br><em>Deze optie heeft geen effect op de uitdaging- en toernooi paginas.</em>',
	'UCP_CAT_ARCADE'							=> 'Arcade',
	'UCP_CHALLENGE_ENABLED'						=> 'Uitdaging inschakelen',
	'UCP_CHALLENGE_ENABLED_EXPLAIN'				=> 'Als je dit inschakelt, kunnen gebruikers je uitdagen voor een duel in spellen.'
]);
