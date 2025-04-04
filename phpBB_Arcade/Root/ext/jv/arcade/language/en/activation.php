<?php
/**
*
* @package phpBB Arcade
* @version $Id: activation.php 2450 2021-12-13 20:24:43Z KillBill $
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
	'ACP_PHPBB_ARCADE_SYSTEM_EXPLAIN'				=> '<legend>Activation detailed description</legend>
Data sent during activation can be used to determine the level of status of the website concerned at “%2$s”.<br>
Additionally, the specified activation key will tell us that the affected site is life or just a test webpage.<br><br>
<div>Stored data after activation:</div>
<ul>
	<li>Own phpBB Arcade identifier</li>
	<li>Website address of the activator</li>
	<li>Used phpBB version number</li>
	<li>Used phpBB Arcade version number</li>
	<li>Activation date</li>
	<li>Activation key</li>
	<li>Activation-dependend wait time to skip advertising</li>
	<li>Activation-dependend daily plays limit</li>
</ul>

<div>Stored personal data after activation:</div>
<ul>
	<li>User name of the activator</li>
	<li>IP address of the activator</li>
	<li>E-mail address of the activator</li>
</ul>

<div>Registered websites allow you to retrieve additional personal data from the “%2$s” website:</div>
<ul>
	<li>User name of the activating person at “%2$s”</li>
	<li>Group of the activating person at “%2$s”</li>
	<li>E-mail address of the activating person at “%2$s”</li>
</ul>

<div>Use of data:</div>
<ul>
	<li>The phpBB Arcade identifier helps you to let your site identify safely.</li>
	<li>The web address is an opportunity to check if the web site is registered on the “%2$s” website.</li>
	<li>Based on the phpBB- and phpBB Arcade version, we can determine whether the website concerned is compliant or not.</li>
	<li>The activation key will determine what the website concerned is entitled.</li>
	<li>Advertising wait time is the time when the user is entitled to skip the advertisement.</li>
	<li>The daily plays limit limits the number of games that can be played per day. Once the limit is reached, no more games can be played that day.</li>
</ul>

<div>Use of personal data:</div>
<ul>
	<li>The user name provides an opportunity to determine whether the user concerned is known on the “%2$s” website.</li>
	<li>The IP address will be used when the user has committed a law or a criminal offense.</li>
	<li>The e-mail address is used when we need to contact the affected user.</li>
</ul>

<br>

<h2>JVA Game Intro detailed description</h2>
<hr>
<div>Administrator functions:</div>
<ul>
	<li>The “JVA Game Intro” allow a number of settings. First, you can choose if you wish to display the Intro or not. If the display isn’t desired, the game is loaded immediately.</li>
	<li>You can also define your own logo, for which there are three options:
		<ol>
			<li>The basic logo appears.</li>
			<li>You can create a text logo which overwrites the basic logo.</li>
			<li>You can create your own image logo, named “logo.png” and upload it into “[root]/arcade/assets/images/” that overrides all.</li>
		</ol>
	</li>
	<li>Many games are very large. They can be up to 100 MB. Because of this, the user may only see a white page loading for a long time and believes that the game is broken. To avoid this, you can turn on the loading indicator for the games so that you can see the game is still loading.<br>
		<strong>Comment:</strong> The game will only be loaded in the browser cache. If it isn’t enabled for your browser cache, then the game will be loaded twice, so this method can only slow down the games starting.<br>
		<em>This feature is useless if you disable the browser’s cache.</em>
	</li>
	<li>You can set the amount of highscores to be shown and this value can be between 0 and 10.<br><br>
		<em class="arcade_attent">Please note, that these settings can only be used with a system activated by a private key. These settings are not available on a system activated by a free key.</em>
	</li>
</ul>

<div>User functions:</div>
<ul>
	<li>The “JVA Game Intro” allows users to see the game description, game control and the current toplist before the game starts.</li>
	<li>The Toplist can display up to 10 users and the current super champion.</li>
</ul>

<br>

<h2>„%1$s” Communications features</h2>
<hr>
<ul>
	<li><span>A connection is established to the “%1$s” website when a game is launched.</span>
		<div><span>The connection will send the following data:</span></div>
		<ol>
			<li>The encoded own phpBB Arcade identifier (one-way hash format).</li>
			<li>The current version of “JVA Game Intro”.</li>
			<li>Encoded address (PHP Base64) of the website that uses the software.</li>
			<li>The encoded activation key (one-way hash format) of “phpBB Arcade”.</li>
			<li>The current version of the phpBB Arcade.</li>
			<li>The current version of the phpBB.

				<br><br>

				<div><span>The role of data to be sent:</span></div>
				<ol>
					<li>The phpBB Arcade identifier helps us to identify your site safely.</li>
					<li>The “JVA Game Intro” version check helps to be able to send a warning if you are not using a compatible version, or if a new version was released.</li>
					<li>The website address is very important because, based on this, we can return the information we need.</li>
					<li>More about the role of the activation key:
						<ol>
							<li>The “Free” activated software may have a wait time and display ads, as well as a limit of the number of games played per day.<br>
								The waiting time turns on and can be determined by the “%2$s”.<br>
								The maximum number of plays turns on and can be determined by the “%2$s”.<br>
								The “Free” key has no expiration date.
							</li>
							<li>A private key can have an expiration date or can be used for a particular phpBB Arcade version. Private key activated software is fully exempt from advertising. <em>This only concerns the “JVA Game Intro”</em>.<br>Additionally, websites that use a private key are not subject to a daily plays limit.</li>
						</ol>
					</li>
					<li>Checking the phpBB Arcade version is also very important that the “JVA Game Intro” is compatible with the given version.</li>
				</ol>
			</li>
		</ol>
	</li>
	<li>With these communication options, the number of times that games are started is stored and transferred to a statistic. Based on these statistics, the current rank of this website is determined. For more information <a onclick="window.open(this.href); return false;" href="%5$s"><strong>» HERE «</strong></a>.</li>
	<li>If an advertisement or waiting time returns to our website, it will be displayed before the game starts. If the “JVA Game Intro” isn’t turned on, it is automatically activated.</li>
	<li>If the number of games per day is limited, no more games can be played that day on websites exceeding the maximum value.</li>
	<li>This information is returned in two ways:
		<ol>
			<li>Smooth update information sends back “%1$s” to you. It appears in “JVA Game Intro”. This information will only be visible to the founders and will not block the game.</li>
			<li>Global information, which uses the entire “JVA Game Intro” interface, so this information doesn’t allow further play.
				<div><span>The reasons for the appearance of a global information:</span></div>
				<ol>
					<li>An instant update is needed.</li>
					<li>If a game type isn’t supported.</li>
					<li>If a website reaches the daily limit.</li>
					<li>The activation key has expired. In this case, you must re-activate the software. In the Administration Control Panel choose “Test” or “Free”, if you have a new private key you can use it.</li>
					<li>The software user violates the <strong>“<a onclick="window.open(this.href); return false;" href="%4$s" title="JVA Licenc">license</a>”</strong> contract, or an <strong>unregistered</strong> website is used. In either case, use of the software can be disabled.</li>
				</ol>
			</li>
		</ol>
	</li>
	<li>The “%1$s” can send back the following information:
		<ol>
			<li>Check websites.</li>
			<li>Waiting time.</li>
			<li>Advertising.</li>
			<li>Update information return.</li>
			<li>Global information return.</li>
			<li>The “%2$s” states that it can’t and doesn’t want to do any database changes implemented in other websites during the connection! It is very important to have 100%% security between the two servers during the connection.<br>That is why the software can only be activated by the founder of the website.</li>
		</ol>
	</li>
	<li>The “JVA Game Intro” is not supported on localhost, but the software can be run. On localhost, the wait time is set to 5 seconds by default.</li>
</ul>',
	'ACP_PHPBB_ARCADE_SYSTEM_INSTRUCTION'			=> 'phpBB Arcade Instructions',
	'ACP_PHPBB_ARCADE_SYSTEM_INSTRUCTION_EXPLAIN'	=> 'The “phpBB Arcade” software is <a onclick="window.open(this.href); return false;" href="%3$s" title="JVA License">licensed</a> and maintained by “%1$s” website.',
]);
