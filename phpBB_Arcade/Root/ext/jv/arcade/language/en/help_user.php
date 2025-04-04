<?php
/**
*
* @package phpBB Arcade
* @version $Id: help_user.php 2473 2022-02-01 12:48:39Z KillBill $
* @author 2011-2025 KillBill
* @copyright (c) 2014-2025 https://jv-arcade.com/ - https://jv-arcade.com/contact
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

$lang = array_merge($lang, [
	'ARCADE_HELP_FAQ_ARCADE_CREATE_ANSWER'				=> 'This extension (original form) was created by <a href="https://jv-arcade.com/">JV-Arcade Group</a>, which owns the copyright. It was developed and published under the <a href="https://jv-arcade.com/License.html.">JV-Aracde License</a> and may not be distributed and not modified. See the link for more information.',
	'ARCADE_HELP_FAQ_ARCADE_CREATE_QUESTION'			=> 'Who wrote the Arcade?',
	'ARCADE_HELP_FAQ_ARCADE_NOT_AVAILABLE_X_ANSWER'		=> 'This extension was created and licensed by JV-Arcade Group. If you believe, that new services or features are necessary, or you have found mistakes, visit the <a href="https://jv-arcade.com/New_Ideas.html">JV-Arcade New Ideas Centre</a>, please, where additional information is available.',
	'ARCADE_HELP_FAQ_ARCADE_NOT_AVAILABLE_X_QUESTION'	=> 'Why is feature X not available?',
	'ARCADE_HELP_FAQ_BLOCK_ARCADE'						=> 'Questions about phpBB Arcade',
	'ARCADE_HELP_FAQ_BLOCK_CAT'							=> 'Questions about categories',
	'ARCADE_HELP_FAQ_BLOCK_CHALLENGE'					=> 'Questions about challenges',
	'ARCADE_HELP_FAQ_BLOCK_FAV'							=> 'Questions about favorite games',
	'ARCADE_HELP_FAQ_BLOCK_GENERAL'						=> 'General Questions',
	'ARCADE_HELP_FAQ_BLOCK_GROUP_TOUR'					=> 'Questions about group tournaments',
	'ARCADE_HELP_FAQ_BLOCK_INTRO'						=> 'Introduction',
	'ARCADE_HELP_FAQ_BLOCK_PLAYING'						=> 'Questions about playing',
	'ARCADE_HELP_FAQ_BLOCK_POINTS'						=> 'Questions about points system',
	'ARCADE_HELP_FAQ_BLOCK_SEARCH'						=> 'Questions about search',
	'ARCADE_HELP_FAQ_BLOCK_TOUR'						=> 'Questions about tournaments',
	'ARCADE_HELP_FAQ_BLOCK_USER_SET'					=> 'User settings',
	'ARCADE_HELP_FAQ_CAT_AGE_ANSWER'					=> 'It is possible for administrators to collect easy games for children in a category, and minors only can play in it. It is also possible that games are in a category that are not suitable for minors, and these should only be played by adults.',
	'ARCADE_HELP_FAQ_CAT_AGE_QUESTION'					=> 'Some categories are protected by an age limit, why?',
	'ARCADE_HELP_FAQ_CAT_PASSWORD_ANSWER'				=> 'If a category is password protected, you have to send a request to an administrator.',
	'ARCADE_HELP_FAQ_CAT_PASSWORD_QUESTION'				=> 'The category requires a password, what can I do?',
	'ARCADE_HELP_FAQ_CAT_STAT_ANSWER'					=> 'Yes, if you enter a category, you will see a link “View category statistics” next to the category name.',
	'ARCADE_HELP_FAQ_CAT_STAT_QUESTION'					=> 'I would like to see statistics for individual categories, is it possible?',
	'ARCADE_HELP_FAQ_CAT_USER_PERMISSION_ANSWER'		=> 'If you enter a category you can find “Permissions” at the bottom of the screen and your permissions are listed below that.',
	'ARCADE_HELP_FAQ_CAT_USER_PERMISSION_QUESTION'		=> 'Which permissions apply to me?',
	'ARCADE_HELP_FAQ_CHALLENGE_ACCEPT_ANSWER'			=> 'If you have received a challenge, you need to accept it first on the challenge page and start the game there. Then the challenge will start correctly.',
	'ARCADE_HELP_FAQ_CHALLENGE_ACCEPT_QUESTION'			=> 'I have received a challenge, then I played the game, but it is still saying that I have received a challenge. Why is the game not counted?',
	'ARCADE_HELP_FAQ_CHALLENGE_ARRIVED_ANSWER'			=> 'Somebody wants to play a game against you and sent you a challenge. You can accept or decline.',
	'ARCADE_HELP_FAQ_CHALLENGE_ARRIVED_QUESTION'		=> 'What is a “Challenge request”?',
	'ARCADE_HELP_FAQ_CHALLENGE_BUG_GAME_ANSWER'			=> 'In this case use “Report game” link, please. You will find it in game options of every game. Your bet and game cost will be refunded immediately.<br><i>Note that it is not possible to report the game as a bug if an administrator disables the bug reporting system.</i>',
	'ARCADE_HELP_FAQ_CHALLENGE_BUG_GAME_QUESTION'		=> 'I was challenged, but that game is broken, what should I do?',
	'ARCADE_HELP_FAQ_CHALLENGE_DRAW_BET_ANSWER'			=> 'If a challenge ends with a tie the cost of the bet will be transferred back to each player.',
	'ARCADE_HELP_FAQ_CHALLENGE_DRAW_BET_QUESTION'		=> 'What happens to the bet if the challenge ends in a draw?',
	'ARCADE_HELP_FAQ_CHALLENGE_END_ANSWER'				=> 'Each user is notified by private message, if it is enabled for the user.',
	'ARCADE_HELP_FAQ_CHALLENGE_END_QUESTION'			=> 'How do I know that the challenge has ended?',
	'ARCADE_HELP_FAQ_CHALLENGE_EXP_TIME_ANSWER'			=> 'The expiration date is the time when the challenges are deleted automatically. Until then the challenges have to be accepted.',
	'ARCADE_HELP_FAQ_CHALLENGE_EXP_TIME_QUESTION'		=> 'What is the “Expiration time”?',
	'ARCADE_HELP_FAQ_CHALLENGE_GAME_CHAMP_ANSWER'		=> 'If you play in normal window, you can find boxes at the side including the box “Game options”. In this box you will find the link “Challenge champion”. You can simply challenge the record holder by clicking on this link. He/she has to accept the challenge before the duel can start.',
	'ARCADE_HELP_FAQ_CHALLENGE_GAME_CHAMP_QUESTION'		=> 'How can I simply challenge a game champion?',
	'ARCADE_HELP_FAQ_CHALLENGE_ONGOING_ANSWER'			=> 'These are launched challenges which have been accepted and which can be played by both parties now. If an error is reported for this game the challenge will be canceled.',
	'ARCADE_HELP_FAQ_CHALLENGE_ONGOING_QUESTION'		=> 'What is “Ongoing Challenges”?',
	'ARCADE_HELP_FAQ_CHALLENGE_PERMISSION_ANSWER'		=> 'The challenge is only visible if it is activated, and if the administrator has allowed you to access challenges.',
	'ARCADE_HELP_FAQ_CHALLENGE_PERMISSION_QUESTION'		=> 'I can’t see the challenges, why?',
	'ARCADE_HELP_FAQ_CHALLENGE_POINTS_ANSWER'			=> 'If a user challenged you and has set a bet, for example, 100 points, then this will be deducted from your balance at the same time challenge is incoming. If the game costs 5 points, for example, this is deducted, too. So the system will deduct a total of 105 points from your balance to cover the full cost of the challenge. In the case you decline this challenge you will be immediately refunded this amount. Even if the challenge is accepted, but the game isn’t played, or the challenge time runs out before you start, your bet and game cost will also be refunded.',
	'ARCADE_HELP_FAQ_CHALLENGE_POINTS_QUESTION'			=> 'I was challenged and lost a lot of my balance, why?',
	'ARCADE_HELP_FAQ_CHALLENGE_PRACTICE_ANSWER'			=> 'Yes, wait to accept the challenge and you can play this game without being in the duel. But once you have accepted the challenge it will be evaluated and there is no chance for further practice.',
	'ARCADE_HELP_FAQ_CHALLENGE_PRACTICE_QUESTION'		=> 'A challenge has arrived for me, is there a way to practice?',
	'ARCADE_HELP_FAQ_CHALLENGE_PREVENT_ANSWER'			=> 'You can deactivate challenges in your User Control Panel.',
	'ARCADE_HELP_FAQ_CHALLENGE_PREVENT_QUESTION'		=> 'How do I prevent becoming challenged?',
	'ARCADE_HELP_FAQ_CHALLENGE_SENT_ANSWER'				=> 'These are the challenges that you launched against other users. These duels may also be canceled.',
	'ARCADE_HELP_FAQ_CHALLENGE_SENT_QUESTION'			=> 'What is “Challenges sent”?',
	'ARCADE_HELP_FAQ_CHALLENGE_START_ANSWER'			=> 'On the challenge page you click on the button "challenge", and then choose the required settings from the form. Here you have the following options:
															<ul>
																<li>Select a game from the list.</li>
																<li>Select a favorite game. <em>Possible only if you have marked some favorite games.</em></li>
																<li>Select the opponent from user list.</li>
																<li>Select a friend. <em>Possible only if you have marked users as friends.</em></li>
															</ul>
															<br>After you have chosen a game and opponent, you can send this request by clicking the “Challenge”. To start the challenge the opponent has to respond to the request.
															<br>Note: <em>If a points system is installed and active, you can also specify a bet. The bet can be freely selectable, or it can be predefined by administrator.</em>',
	'ARCADE_HELP_FAQ_CHALLENGE_START_QUESTION'			=> 'How do I start a challenge?',
	'ARCADE_HELP_FAQ_FAV_ANSWER'						=> 'When you highlight a game as favorite game, it is no longer necessary to seek it among the large number of games. In your favorites list you can find it quickly, and you will save a lot of time.',
	'ARCADE_HELP_FAQ_FAV_HIGHLIGHT_ANSWER'				=> 'You have the option, to additional highlight the games you play most frequently among the favorite games. You can do that in your User Control Panel.',
	'ARCADE_HELP_FAQ_FAV_HIGHLIGHT_QUESTION'			=> 'I have too many favorite games. How can I find some games easier?',
	'ARCADE_HELP_FAQ_FAV_LIMIT_ANSWER'					=> 'You have saved the maximum number of game favorites that the administrator has preset. Therefore you can’t add any more game favorites unless you delete older game favorites. Or, if you think the limit is too small, you can ask an administrator to increase the limit if possible.',
	'ARCADE_HELP_FAQ_FAV_LIMIT_QUESTION'				=> 'I see “Limit error” when adding a favorite game, what does that mean?',
	'ARCADE_HELP_FAQ_FAV_QUESTION'						=> 'What is the advantage to mark a game as favorite game?',
	'ARCADE_HELP_FAQ_GENERAL_GAME_BUG_ANSWER'			=> 'At first wait a moment, please. Some games load a little bit longer, because of their size. A broken game should be reported to the administrator, so that he/she can solve the problem as quickly as possible. Each game contains a link for an error message to be used for this. Please use this link, because it contains all specific information about the game, that is important for us, and you can choose what type of problem has occurred. A more extensive error description is desirable. Please also let us know which browser and which version was used, because it isn’t sure that this error also occurs in other browsers. Also, you might want to describe the device that made the error (e.g. Pc, tablet or mobile). Also, specify the resolution of your screen on which you play the game, because the error may not occur at another resolution.<br><i>Note that it is not possible to report the game as a bug if an administrator disables the bug reporting system.</i>',
	'ARCADE_HELP_FAQ_GENERAL_GAME_BUG_QUESTION'			=> 'What to do if a game doesn’t work?',
	'ARCADE_HELP_FAQ_GENERAL_GAME_DOWNLOAD_ANSWER'		=> 'Yes, if authorized by the administrator.',
	'ARCADE_HELP_FAQ_GENERAL_GAME_DOWNLOAD_QUESTION'	=> 'Can the games be downloaded?',
	'ARCADE_HELP_FAQ_GENERAL_GAME_NAME_LINK_ANSWER'		=> 'The game’s name appears as a link, if you are authorized to play this game.',
	'ARCADE_HELP_FAQ_GENERAL_GAME_NAME_LINK_QUESTION'	=> 'The most names of the games are links, but some names will appear as plain text, why?',
	'ARCADE_HELP_FAQ_GENERAL_GAME_RANDOM_ANSWER'		=> 'A random game, chosen by the system, is a beautiful thing because it isn’t chosen from a specific category. So, it will not be boring in the long run, because you don’t always play in the same category, for example.',
	'ARCADE_HELP_FAQ_GENERAL_GAME_RANDOM_QUESTION'		=> 'What is a random game?',
	'ARCADE_HELP_FAQ_GENERAL_GAME_RATING_ANSWER'		=> 'The game rating is a useful feature. It makes it easy for users to search according to how users have rated it and if a game is rated good then it will be more popular. The statistics of the game is always at the top of the screen so users can find easily the best rated games.',
	'ARCADE_HELP_FAQ_GENERAL_GAME_RATING_QUESTION'		=> 'What is the game rating?',
	'ARCADE_HELP_FAQ_GENERAL_GAME_USER_STAT_ANSWER'		=> 'If the permission was granted to use the menus, you can click the button “Statistics” button and select “User” below.',
	'ARCADE_HELP_FAQ_GENERAL_GAME_USER_STAT_QUESTION'	=> 'How do I view the game statistics of users?',
	'ARCADE_HELP_FAQ_GENERAL_RANG_LIST_ANSWER'			=> 'The ranking takes into account the amount of trophies earned, the more trophy has a user is better rank. The rank image determination administrator, add the picture, in a way that connects the trophy given quantity of some rank images.',
	'ARCADE_HELP_FAQ_GENERAL_RANG_LIST_QUESTION'		=> 'What is a ranking?',
	'ARCADE_HELP_FAQ_GENERAL_SUPER_CHAMP_ANSWER'		=> 'The super champion is the top champion of all users, who holds the highest-ever achieved record of games. The super champion has no regular trophy, unless he holds a record at the first place in the current period, too. If the administrator resets the arcade it is possible to retain the super champions highscores, so you can always view the highest result ever achieved for the game.',
	'ARCADE_HELP_FAQ_GENERAL_SUPER_CHAMP_QUESTION'		=> 'What is a super champion?',
	'ARCADE_HELP_FAQ_GENERAL_USER_RECORD_ANSWER'		=> 'Yes, in the arcade, you have to click on the user’s avatar to open the user information, and then click on the link “View all user’s highscores” under his avatar.',
	'ARCADE_HELP_FAQ_GENERAL_USER_RECORD_QUESTION'		=> 'Can I view only the records of a user?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_EXPT_ANSWER'			=> 'Yes, it will be displayed after the start of the tournament.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_EXPT_RESULT_QUESTION'	=> 'Is the expiration date visible?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_EXP_ANSWER'				=> 'If the tournament starts, you will be given an expiration time, if the tournament is not completed within this time, it will be automatically deleted.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_EXP_RESULT_QUESTION'	=> 'An ongoing tournament has disappeared, why?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_PLAY_ANSWER'			=> 'You can play the game after the start of the tournament. If you continue to reach the next level, then the next play will start if your opponent has also reached that level. But at every game start, if the game participates in a tournament, you will see information.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_PLAY_RESULT_QUESTION'	=> 'When can I play the tournament game?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_SCORE_ANSWER'			=> 'Yes, after you’ve both played the game. To view the achieved score, move the mouse over your opponent’s avatar and you can already see the achieved score.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_SCORE_RESULT_QUESTION'	=> 'Can I see my opponent’s score?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_START_ANSWER'			=> 'The tournament starts automatically when all the places are occupated.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_START_RESULT_QUESTION'	=> 'When does the tournament start?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_SUB_ANSWER'				=> 'You can see on the main page of the group tournament, if there is a new tournament. In the structure of the tournament tree, click on an empty space in the bottom row, and you have subscribed.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_SUB_RESULT_QUESTION'	=> 'How can I subscribe for the group tournament?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_UNSUB_ANSWER'			=> 'Yes, but only if the tournament hasn’t started yet. To unsubscribe, click on your avatar in the occupied space.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_UNSUB_RESULT_QUESTION'	=> 'Is there a way to unsubscribe from the tournament?',
	'ARCADE_HELP_FAQ_INTRO_ARCADE_ANSWER'				=> 'The arcade provides entertainment for the users with a multitude of games. Permission to use the arcade is defined by the administrator, but certain services can also be enabled/disabled in your User Control Panel. Even with this you may find the following guide useful.',
	'ARCADE_HELP_FAQ_INTRO_ARCADE_QUESTION'				=> 'What is the arcade?',
	'ARCADE_HELP_FAQ_INTRO_FUN_ANSWER'					=> 'In the arcade many features are included, but only those are available which are activated by the administrator.
															<br><strong>Functions:</strong>
															<ul>
																<li>Settings and customizations.</li>
																<li>Game categories.</li>
																<li>Display of new games.</li>
																<li>Playing of random games.</li>
																<li>Store and select favorite games.</li>
																<li>Rating games.</li>
																<li>Search games.</li>
																<li>Report game errors.</li>
																<li>Download games.</li>
																<li>Play games in a new window (popup).</li>
																<li>Play in full screen.</li>
																<li>Change game screen size.</li>
																<li>Backlight for games on/off.</li>
																<li>Game integrated menu.</li>
																<li>Tournaments with several games between multiple users.</li>
																<li>Challenge other members in individual games.</li>
																<li>Create of random challenges.</li>
																<li>Separate detailed statistics.</li>
																<li>Game statistics.</li>
																<li>User statistics.</li>
																<li>Category statistics.</li>
																<li>Ranking.</li>
																<li>Use of point systems (via the Points mod).</li>
																<li>And much more…</li>
															</ul>',
	'ARCADE_HELP_FAQ_INTRO_FUN_QUESTION'				=> 'What features are included in the arcade?',
	'ARCADE_HELP_FAQ_INTRO_REG_ANSWER'					=> 'Depending on the settings of the administrator of the arcade, it may be possible that registration isn’t necessary to use the games. Please note that if you register and enter the arcade, then many additional useful functions can be accessed within. (For example, you can save your score and progress, comment games, save your games as favorites, rate the games, send a challenge to other users for a duel, participate in a started tournament, and other useful things.) Of course, use of these features depends on the settings of the administrator. Because of your permissions or membergroup, some of them may or may not not be available for you.',
	'ARCADE_HELP_FAQ_INTRO_REG_QUESTION'				=> 'Why should I register at all?',
	'ARCADE_HELP_FAQ_PLAYING_BACKLIGHT_ANSWER'			=> 'The backlight is the brightness of the fields around the game. There are three useful features to turn off the backlight.
															<ul>
																<li>The game is running in the comfort of a darkened room.</li>
																<li>The buttons and links are inactive outside of the game, so you can’t accidentally click on it. This prevents the loading of another page during the game.</li>
																<li>Web page scrolling is disabled to prevent accidental scrolling during gameplay.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_BACKLIGHT_QUESTION'		=> 'What is the backlight?',
	'ARCADE_HELP_FAQ_PLAYING_BOARD_LOGOUT_ANSWER'		=> 'There are two possible reasons for this:
															<ul>
																<li>The most likely reason is that your forum session has expired.</li>
																<li>The administrator has deleted all user sessions.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_BOARD_LOGOUT_QUESTION'		=> 'When saving scores, the website throws me out, why?',
	'ARCADE_HELP_FAQ_PLAYING_GAME_MAX_MIN_ANSWER'		=> 'The game always starts in its own display size set by the administrator. However, the software always checks whether the set size fits into the space provided for the game. If the room is smaller, the software will automatically detect the size of the visible room and adjust the game size accordingly. If you activate “Automatically change game size” in your own settings, the software also takes into account that the game will automatically be adjusted to this largest size if the field of view is larger than the set size of the game. Under no circumstances will the software allow any part of the game to go out of sight. If this is detected, the software will intervene and change the games display size.',
	'ARCADE_HELP_FAQ_PLAYING_GAME_MAX_MIN_QUESTION'		=> 'What size does the game start?',
	'ARCADE_HELP_FAQ_PLAYING_GAME_RESIZE_ANSWER'		=> 'There are two possible reasons for this:
															<ul>
																<li>The game has reached the minimum allowed width or height size, which is 180px.</li>
																<li>The game has reached the largest size that fits in the field of view.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_GAME_RESIZE_QUESTION'		=> 'Why don’t the resize buttons work?',
	'ARCADE_HELP_FAQ_PLAYING_HIDDEN_SCORE_ANSWER'		=> 'This game is in a challenge with two or more players. The result for all involved users are hidden until the challenge is finished.',
	'ARCADE_HELP_FAQ_PLAYING_HIDDEN_SCORE_QUESTION'		=> 'In the list of results the text “hidden” is written, instead of of the champion’s score, why?',
	'ARCADE_HELP_FAQ_PLAYING_HSD_ANSWER'				=> 'Yes, there is. In your setting, turn on the “Automatically zoom in on a game” function and the game will start at the largest possible size.',
	'ARCADE_HELP_FAQ_PLAYING_HSD_QUESTION'				=> 'I use a high resolution display and all the games start small, is there a solution?',
	'ARCADE_HELP_FAQ_PLAYING_INFO_BLOCK_ANSWER'			=> 'If the information block isn’t visible, it has probably been closed, so you need to open it from the menu.',
	'ARCADE_HELP_FAQ_PLAYING_INFO_BLOCK_QUESTION'		=> 'The information block is enabled in my settings, but it still doesn’t show up, why?',
	'ARCADE_HELP_FAQ_PLAYING_MENU_BUT_ANSWER'			=> 'There are a total of 12 buttons in the menu, but which buttons are displayed depends on several factors.<br>Menu buttons and dependencies:
															<ul>
																<li>1. Information - Visible if you have information about one of the following: (game description, game controller, champion comment, or if we have permission to view “Who is playing in the arcade?”).</li>
																<li>2. Full/Normal screen - Always visible if supported by the browser.</li>
																<li>3. Highscores - Visible if access to statistics is enabled and a result exists.</li>
																<li>4. Options - Always visible, but the content may vary due to permission settings.</li>
																<li>5. Game rating - Visible if we have permission.</li>
																<li>6. Add/Delete favorites - Visible if you have permission and have not yet reached the maximum limit.</li>
																<li>7. Rotate game - Only visible if the game settings allow it and you are using a non-rotatable device.</li>
																<li>8. Backlight on/off - Always visible in normal window.</li>
																<li>9. Playing time - Always visible.</li>
																<li>10. Restart game - Always visible.</li>
																<li>11. Delete game data - Visible when the software detects that the game is using the browser local data storage.</li>
																<li>12. Information block Open/Close - Visible if enabled in our settings.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_MENU_BUT_QUESTION'			=> 'Which buttons are in the menu and when are they visible?',
	'ARCADE_HELP_FAQ_PLAYING_MENU_DATA_CLOSE_ANSWER'	=> 'The data field can be closed in the following ways:
															<ul>
																<li>1. Click on the data title.</li>
																<li>2. Click on the menu.</li>
																<li>3. Double-click on the data field.</li>
																<li>4. Click outside the data field.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_MENU_DATA_CLOSE_QUESTION'	=> 'How do I close a data field requested from the menu?',
	'ARCADE_HELP_FAQ_PLAYING_MENU_OPEN_ANSWER'			=> 'For security reasons, the menu is equipped with a timer to prevent it from opening automatically during the game. The menu opens if you press and hold it for at least 0.5 seconds.',
	'ARCADE_HELP_FAQ_PLAYING_MENU_OPEN_QUESTION'		=> 'If I click on the menu it doesn’t open, why?',
	'ARCADE_HELP_FAQ_PLAYING_MOBILE_ANSWER'				=> 'Yes, all games can be started on a mobile phone. However, if you want to play only on a mobile phone, you may want to turn on filter out keyboard games in your game settings, because you won’t be able to play these games without a keyboard anyway.',
	'ARCADE_HELP_FAQ_PLAYING_MOBILE_QUESTION'			=> 'Can I play on a mobile phone?',
	'ARCADE_HELP_FAQ_PLAYING_NOT_PLAY_ANSWER'			=> 'This can have many causes:
															<ul>
																<li>Maybe your browser doesn’t have “JavaScript” installed, or it is disabled on this page.</li>
																<li>The administrator didn’t grant you permission to play.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_NOT_PLAY_QUESTION'			=> 'I can’t play games, why?',
	'ARCADE_HELP_FAQ_PLAYING_NOT_SAVE_SCORE_ANSWER'		=> 'This can have many causes:
															<ul>
																<li>First make sure that your browser is enabled to use “Cookies”.</li>
																<li>Make sure that you are logged in.</li>
																<li>The game doesn’t start correctly.</li>
																<li>The game is broken.</li>
																<li>The administrator hasn’t granted you permission to save the scores.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_NOT_SAVE_SCORE_QUESTION'	=> 'I can’t save my scores, why?',
	'ARCADE_HELP_FAQ_PLAYING_POPUP_ANSWER'				=> 'Yes, if it is allowed by administrator.',
	'ARCADE_HELP_FAQ_PLAYING_POPUP_QUESTION'			=> 'Can I play games in a new window?',
	'ARCADE_HELP_FAQ_PLAYING_RESET_GAME_DATA_ANSWER'	=> 'If the game saves the data in the browser local storage, we provide two options for deleting the data. If the game saves the data in another storage, which is very rare, you have to find it manually and delete it from the browser. If you want to delete the data of an embedded game, then in this case you have to visit the website where the game is located and find the data of the game in question from the browsing data of that website and delete it.<br>
Delete browser local storage data:
<ul>
	<li>If you are currently playing the game, open the menu and click the “Delete game data” button.</li>
	<li>In the user control panel, use the “Manage local storage” module and there you can choose which game data you want to delete.</li>
</ul>',
	'ARCADE_HELP_FAQ_PLAYING_RESET_GAME_DATA_QUESTION'	=> 'Is there a way to restart the game completely from the beginning?',
	'ARCADE_HELP_FAQ_PLAYING_RESTART_ANSWER'			=> 'The “Restart game” link will only be active after the game has started. After use, the button/link may be inactive again for a period of time, which is determined by the administrator at how often it can be used again.',
	'ARCADE_HELP_FAQ_PLAYING_RESTART_QUESTION'			=> 'The Restart game link is inactive, why?',
	'ARCADE_HELP_FAQ_PLAYING_SESSION_ANSWER'			=> 'Yes, you have the option to turn the display on / off in the game room settings. This way, you can see how much time is left on the game page before your session expires.<br>If you have little time left, you may want to log out and log back in to the website before playing.',
	'ARCADE_HELP_FAQ_PLAYING_SESSION_QUESTION'			=> 'Can I view session times?',
	'ARCADE_HELP_FAQ_PLAYING_WHITE_SCREEN_ANSWER'		=> 'It may be that the game is very extensive, and you have to wait until it has loaded, due to a slower internet connection. This can be avoided if we do’nt disable the use of “Preloaders” in our settings.',
	'ARCADE_HELP_FAQ_PLAYING_WHITE_SCREEN_QUESTION'		=> 'Game launches a white screen, why?',
	'ARCADE_HELP_FAQ_POINTS_COST_ANSWER'				=> 'The game cost is the sum, which will be deducted from your balance for each game start. Please note, that the cost of individual games or categories may be different. The amount of the cost is defined by the administrator.',
	'ARCADE_HELP_FAQ_POINTS_COST_QUESTION'				=> 'What is the game cost?',
	'ARCADE_HELP_FAQ_POINTS_DOWNLOAD_COST_ANSWER'		=> 'The download cost is the sum, which will be deducted from your balance for each game you download. Please note, that the cost of individual games or categories may be different. The amount of the cost is defined by the administrator.',
	'ARCADE_HELP_FAQ_POINTS_DOWNLOAD_COST_QUESTION'		=> 'What is the download cost?',
	'ARCADE_HELP_FAQ_POINTS_JACKPOT_ANSWER'				=> 'The jackpot is formed from the cost of the game. At the start of each game, the game costs are collected in a pot. It grows, until someone has won this jackpot, or until the limit is reached. The minimum/maximum amount of this jackpot is defined by the administrator.',
	'ARCADE_HELP_FAQ_POINTS_JACKPOT_QUESTION'			=> 'What is the jackpot?',
	'ARCADE_HELP_FAQ_POINTS_REWARD_ANSWER'				=> 'The reward is normally available in two cases: if a record is obtained, and if a Super Champion title will be won. The amount of the reward is defined by the administrator.',
	'ARCADE_HELP_FAQ_POINTS_REWARD_QUESTION'			=> 'What is the reward?',
	'ARCADE_HELP_FAQ_POINTS_SYSTEM_ANSWER'				=> 'A points system is a complex modification the administrator can add to use in the forum or the arcade. If the points system is used in the arcade, a variety of costs and rewards can be used.',
	'ARCADE_HELP_FAQ_POINTS_SYSTEM_QUESTION'			=> 'What is the point system?',
	'ARCADE_HELP_FAQ_SEARCH_100PH_GAME_ANSWER'			=> 'Yes, if you put a <strong>@</strong> in front of the name of the game you are looking for.',
	'ARCADE_HELP_FAQ_SEARCH_100PH_GAME_QUESTION'		=> 'I would like the search engine to only give out the entirely identical game name, is it possible?',
	'ARCADE_HELP_FAQ_SEARCH_EXISTS_NOT_FOUND_ANSWER'	=> 'There are three possible reasons for this:
															<ul>
																<li>The game has been deleted.</li>
																<li>You no longer have permission to this game.</li>
																<li>A category has been selected in the search engine and the game isn’t listed there, in this case change the category selection to “All categories”.</li>
															</ul>',
	'ARCADE_HELP_FAQ_SEARCH_EXISTS_NOT_FOUND_QUESTION'	=> 'I’m looking for a game that I know exists but the search engine doesn’t show it, why?',
	'ARCADE_HELP_FAQ_SEARCH_GAME_ANSWER'				=> 'If the search function is active, you will find a search box around the middle of the page, where you can enter the name of the game. In addition you have the option to search for the initials of the game, just click on the action letter. You can also narrow your search to a specific category by selecting a category. If you open a category and the search engine is active there, the search engine will automatically select that category. Of course you can change that, for example, to “all categories”.',
	'ARCADE_HELP_FAQ_SEARCH_GAME_QUESTION'				=> 'How can I find a specific game?',
	'ARCADE_HELP_FAQ_SEARCH_SNIP_GAME_ANSWER'			=> 'The search engine automatically takes the word endings into account. For example, if you type in the search box <strong>pac</strong> you will get the <strong>Pacman</strong> game.<br>However, if you want the word <strong>pac</strong> to have the name <strong>Big Pacman</strong> put a <strong>*</strong> in front of the name you are looking for.',
	'ARCADE_HELP_FAQ_SEARCH_SNIP_GAME_QUESTION'			=> 'How can I search a game, if I don’t know the name exactly?',
	'ARCADE_HELP_FAQ_TOUR_NO_RESULT_ANSWER'				=> 'Only the group(s) that are authorized for this tournament can participate. Make sure you are a member of this group(s).',
	'ARCADE_HELP_FAQ_TOUR_NO_RESULT_QUESTION'			=> 'I have played a game, but I don’t see any tournament results, why?',
	'ARCADE_HELP_FAQ_TOUR_PLAY_NUM_ANSWER'				=> 'Each game start is counted, irrespective of whether the score has been stored or not. Also, the results of unsaved games will be 0.',
	'ARCADE_HELP_FAQ_TOUR_PLAY_NUM_QUESTION'			=> 'I have played a game, but the points were not saved. Nevertheless, the number of game plays was increased. Why?',
	'ARCADE_HELP_FAQ_TOUR_PRACTICE_ANSWER'				=> 'Yes, before the tournament starts you can play the games without evaluation. But if it has already started, all the games contained therein will be evaluated for tournament, regardless of which place they are started, and there is no way for further practice.',
	'ARCADE_HELP_FAQ_TOUR_PRACTICE_QUESTION'			=> 'Is there any way to practice for tournaments?',
	'ARCADE_HELP_FAQ_TOUR_RIGHT_RESULT_ANSWER'			=> 'If reached the specified maximum number of game plays, no further results will be counted in the tournament.',
	'ARCADE_HELP_FAQ_TOUR_RIGHT_RESULT_QUESTION'		=> 'I have played a game again with better results, but it wasn’t written into the tournament, why?',
	'ARCADE_HELP_FAQ_USER_SET_CAT_STYLE_ANSWER'			=> 'The arcade can be shown in different styles, you can customize which one you like. This option can be disabled by the administrator.',
	'ARCADE_HELP_FAQ_USER_SET_CAT_STYLE_QUESTION'		=> 'What is the category style?',
	'ARCADE_HELP_FAQ_USER_SET_CHALL_DISABLE_ANSWER'		=> 'If you don’t want to be challenged by other users to a duel, you can choose to disable this function. If you turn it off you will not be able to challenge another user, too. Please note, challenge can also be disabled for all users by the administrator.',
	'ARCADE_HELP_FAQ_USER_SET_CHALL_DISABLE_QUESTION'	=> 'You want to deactivate the challenges?',
	'ARCADE_HELP_FAQ_USER_SET_CONFIG_ANSWER'			=> 'If you are registered all your settings are stored in the database. To alter them click the UCP link (generally at the top of the page). Here you can change all your settings.',
	'ARCADE_HELP_FAQ_USER_SET_CONFIG_QUESTION'			=> 'How do I change my settings?',
	'ARCADE_HELP_FAQ_USER_SET_FAV_MANAGE_ANSWER'		=> 'Here you can remove your added favorite games, or mark and highlight them.',
	'ARCADE_HELP_FAQ_USER_SET_FAV_MANAGE_QUESTION'		=> 'What is manage favorites?',
	'ARCADE_HELP_FAQ_USER_SET_IMG_DISABLE_ANSWER'		=> 'You can choose to deactivate it if the page loading is too slowly. For example, you may have a slow internet connection or a slow server connection.',
	'ARCADE_HELP_FAQ_USER_SET_IMG_DISABLE_QUESTION'		=> 'You want to turn off display of avatars and game images?',
]);
