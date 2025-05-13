<?php
/**
*
* @package phpBB Holdem Póker
* @version $Id$
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

$lang = array_merge($lang, [
	'JV_POKER_HELP_AUTO_ACC_ANSWER'			=> 'If the user approves the “Automatic Check/Call” function, when it is the players turn, it will automatically pass, or if there is a call, it will automatically specify the amount called.',
	'JV_POKER_HELP_AUTO_ACC_QUESTION'		=> 'What Does Automatic Check/Call do?',
	'JV_POKER_HELP_AUTO_ACF_ANSWER'			=> 'If the user approves the “Automatic Check/Fold” function, when it is the players turn, it will automatically pass or fold the cards automatically if there is a call.',
	'JV_POKER_HELP_AUTO_ACF_QUESTION'		=> 'What Does Automatic Check/Fold do?',
	'JV_POKER_HELP_AVATAR_BC_ANSWER'		=> 'Yes, the following colors are currently used around the avatar:
	<ul>
		<li>White: Waiting to play.</li>
		<li>Black: Those in play.</li>
		<li>Yellow: Actual player.</li>
		<li>Burgundy: Folded cards.</li>
	</ul>',
	'JV_POKER_HELP_AVATAR_BC_ANSWER_2'		=> '<li>Burgundy crossed out: Taking a pause.</li>',
	'JV_POKER_HELP_AVATAR_BC_ANSWER_3'		=> '<li>Blue: Bet protection.</li>',
	'JV_POKER_HELP_AVATAR_BC_QUESTION'		=> 'The colors around the avatar mean anything?',
	'JV_POKER_HELP_A_SHOUT_ANSWER'			=> 'Yes, each player can view the archive during the game.',
	'JV_POKER_HELP_A_SHOUT_QUESTION'		=> 'Is there a way to view older messages?',
	'JV_POKER_HELP_A_SHOUT_RE_ANSWER'		=> 'If the messages are not displayed, you have either left the game or paused and you are not allowed to use the message board during a pause.',
	'JV_POKER_HELP_A_SHOUT_RE_QUESTION'		=> 'After refreshing the archive, the messages disappeared, why?',
	'JV_POKER_HELP_A_SHOUT_R_ANSWER'		=> 'Yes, the refresh button can be found on the right side of the title bar.',
	'JV_POKER_HELP_A_SHOUT_R_QUESTION'		=> 'Is there a way to refresh the archive?',
	'JV_POKER_HELP_BAN_CHIPS_ANSWER'		=> 'Yes, if an administrator delete your permission for poker, you can automatically exchange all your chips at any time %s<strong>HERE</strong>%s. Automatic exchange will not work if poker has been disabled, in which case please check back later and try again.',
	'JV_POKER_HELP_BAN_CHIPS_QUESTION'		=> 'If I lose my permission for poker, is there a way to exchange my chips?',
	'JV_POKER_HELP_BLIND_ANSWER'			=> 'The Small Blind/Big Blind always depends on the minimum and maximum starting amount. The minimum starting amount (Buy-in) is always 10x the Big Blind, while the maximum starting amount is 200x the Big Blind. Of course, if the minimum and maximum values are equal, it depends on the setting whether the minimum, medium or maximum value is used as a basis. The Small Blind is always half of the Big Blind. This rule differs in the tournament room, where the Small Blind/Big Blind is always twice the base value. In addition, in the tournament room the Small Blind/Big Blind is growing steadily throughout the tournament.',
	'JV_POKER_HELP_BLIND_QUESTION'			=> 'Small/big blind bets between rooms are different, why?',
	'JV_POKER_HELP_BLOCK_GAME'				=> 'Poker game issues',
	'JV_POKER_HELP_BLOCK_GENERAL'			=> 'General questions',
	'JV_POKER_HELP_BLOCK_POKER'				=> 'phpBB Holdem Póker questions',
	'JV_POKER_HELP_BLOCK_ROOMS'				=> 'Questions relating to poker rooms (Lobby)',
	'JV_POKER_HELP_BLOCK_SHOUT'				=> 'Poker shoutbox questions',
	'JV_POKER_HELP_BLOCK_STATS'				=> 'Questions about poker statistics',
	'JV_POKER_HELP_CHIPS_C_ANSWER'			=> 'The values for colors chips are as follows:
	<ul>
		<li>Gray: 1</li>
		<li>Black: 10</li>
		<li>Light blue: 100</li>
		<li>Yellow: 1,000</li>
		<li>Pink: 10,000</li>
		<li>Red: 100,000</li>
		<li>Dark blue: 1,000,000</li>
		<li>Purple: 10,000,000</li>
		<li>Green: 100,000,000</li>
		<li>Brown: 1,000,000,000</li>
	</ul>',
	'JV_POKER_HELP_CHIPS_C_QUESTION'		=> 'What is the value of the different colored chips?',
	'JV_POKER_HELP_CHIPS_DC_ANSWER'			=> 'Yes, as long as you don’t have reached the maximum amount of chips that can be displayed, which is 11,111,111,110 as there are up to 10 items in 1 chip.',
	'JV_POKER_HELP_CHIPS_DC_QUESTION'		=> 'Are the chips displayed at the right amount?',
	'JV_POKER_HELP_CM_ANSWER'				=> '“Chairs” means how many chairs are available for players in this room. If the number of chairs is 8, 8 users can sit in the room at the same time. “Players” indicates how many users are in the room. If the administrator closes the room, it means the room is full and no other member can enter the room before a chair is vacated.',
	'JV_POKER_HELP_CM_QUESTION'				=> 'What means Players/Chairs?',
	'JV_POKER_HELP_CREATE_ANSWER'			=> 'This add-on (in its original form) was created, published, and copyrighted by the <a href="https://jv-arcade.com/">JV-Arcade Group</a>. It is available under the <a href="https://jv-arcade.com/License.html">JVA License</a>, and may not be shared or distributed. Further information under the link.',
	'JV_POKER_HELP_CREATE_QUESTION'			=> 'Who made this phpBB Holdem Póker extension?',
	'JV_POKER_HELP_CTOP_ANSWER'				=> 'Yes, for this, use the “Chips exchange” button on the poker main page next to the chips display in your own profile.',
	'JV_POKER_HELP_CTOP_QUESTION'			=> 'Can chips be exchanged for “%s”?',
	'JV_POKER_HELP_DROP_TOKEN_ANSWER'		=> 'In this case, 3 options are available:
	<ul>
		<li>1. You can not take out chips from a practice room so your chips that are still in will be canceled.</li>
		<li>2. Of course, if you are thrown out of a normal room, your remaining chips will be returned.</li>
		<li>3. If they throw me out of the tournament room before the start of the tournament, you will get your Buy-In back. If the tournament has already started, you will lose the Buy-In.</li>
	</ul>',
	'JV_POKER_HELP_DROP_TOKEN_QUESTION'		=> 'What happens to my chips if I am thrown out of the game?',
	'JV_POKER_HELP_DROP_USER_ANSWER'		=> 'In this case, 4 options are available:
	<ul>
		<li>1. If you lose your internet connection.</li>
		<li>2. If you are idle and do not react to anything, which can deliberately slow down the course of the game.</li>
		<li>3. If the game window is moved to the background. In this case multiple browsers can slow down or stop updating background data entirely, the game will take you as an offline user, so the game will throw you out.</li>
		<li>4. The administrator only allows a game with active focus to run, so the situation is the same as described in point 3. However, in this case, the pause inscription appears.</li>
	</ul>',
	'JV_POKER_HELP_DROP_USER_QUESTION'		=> 'In what cases can the game throw you out?',
	'JV_POKER_HELP_EXIT_ANSWER'				=> 'In this case, 3 options are available:
	<ul>
		<li>1. You can‘t take out chips from a practice room so your chips inside will be deleted and you leave the room.</li>
		<li>2. If you exit the normal room, the chips you earn will be added to your chips balance and you will leave the room.</li>
		<li>3. If you exit the tournament room before the start of the tournament, you will get your Buy-In back. If the tournament has already started, you will lose the Buy-In.</li>
	</ul>',
	'JV_POKER_HELP_EXIT_QUESTION'			=> 'What happens when I press the exit button?',
	'JV_POKER_HELP_E_SHOUT_ANSWER'			=> 'If enabled by the administrator, yes.',
	'JV_POKER_HELP_E_SHOUT_QUESTION'		=> 'Can I use smileys in my messages?',
	'JV_POKER_HELP_GAME_SOUND_ANSWER'		=> 'Yes. The game sound can be switched on/off at any time during the game. With this, all voice sounds including the message board are turned off. The setting is always saved.',
	'JV_POKER_HELP_GAME_SOUND_QUESTION'		=> 'Can I switch off the sound of the game?',
	'JV_POKER_HELP_INACTIVE_ANSWER'			=> 'In this case, the following can happen:
	<ul>
		<li>1. If you are in a normal game, you will be stand up automatically at the end of the %s. hand.</li>
		<li>2. If you are in a tournament game, you are automatically stand up at the end of the %s. hand.</li>
	</ul>
	This is necessary because nobody likes someone deliberately slowing down the game.',
	'JV_POKER_HELP_INACTIVE_QUESTION'		=> 'What happens if I do not respond to anything during the game?',
	'JV_POKER_HELP_JACKPOT_ANSWER'			=> 'There are three ways to withdraw winnings from a JackPot. Only when presenting cards and when yours is the strongest hand.<br>
	<strong>JackPot prizes:</strong>
	<ul>
		<li>1. In the case of Four of a Kind 10% of the JackPot.</li>
		<li>2. In the case of Straight Flush 30% of the JackPot.</li>
		<li>3. In the case of Royal Flush 80% of the JackPot.</li>
	</ul>
	If there is more than one winner, the prize will be distributed proportionally.<br><br>
	<strong>You cannot win from the JackPot if:</strong>
	<ul>
		<li>1. You have not purchased a JackPot ticket.</li>
		<li>2. You folded cards.</li>
		<li>3. Everyone else folds their cards.</li>
		<li>4. Your cards are not the strongest hand.</li>
	</ul>',
	'JV_POKER_HELP_JACKPOT_QUESTION'		=> 'How do I win the JackPot?',
	'JV_POKER_HELP_LEADERS_ANSWER'			=> 'Champions are ranked according to the amount of chips earned.',
	'JV_POKER_HELP_LEADERS_QUESTION'		=> 'What are the champions ranked based on?',
	'JV_POKER_HELP_LEARNER_ANSWER'			=> 'Everyone can play in this room, even if they do not have their own chips. Each player receives a predetermined number of chips when sitting down. In the room, all players play with open cards, so they have a chance to teach each other. The chips won in this room can not be taken out of the room or exchanged.',
	'JV_POKER_HELP_LEARNER_QUESTION'		=> 'What does it mean to be in a learner room?',
	'JV_POKER_HELP_LIMIT_ANSWER'			=> 'We have already described the answer to this question in “How to play poker?/Limit rules”.',
	'JV_POKER_HELP_LIMIT_QUESTION'			=> 'What means Fix limit/No limit?',
	'JV_POKER_HELP_L_STATS_ANSWER'			=> 'No statistical data is stored in the learner and practice rooms.',
	'JV_POKER_HELP_L_STATS_QUESTION'		=> 'Do learner and practice rooms also save statistical data?',
	'JV_POKER_HELP_MOVE_TIME_ANSWER'		=> '“Move Time” is the time during which a user may decide to check, bet or fold. If this time expires, two automatic options are available:
	<ul>
		<li>1. If the action of the previous player was not a call, we automatically check.</li>
		<li>2. If the action of the previous player was a call, we fold our cards automatically.</li>
	</ul>',
	'JV_POKER_HELP_MOVE_TIME_QUESTION'		=> 'What is the move time?',
	'JV_POKER_HELP_NORMAL_ANSWER'			=> 'In a normal room can play only users who own their own chips, and who can bring in enough chips for the required minimum entry amount. Each of these rooms has a fixed minimum and maximum amount to get started. Users can sit down with the minimum amount at the table. Chips won in this room can be taken out of the room and increase your chips balance. These chips can be exchanged back.',
	'JV_POKER_HELP_NORMAL_QUESTION'			=> 'What does it mean to be in a normal room?',
	'JV_POKER_HELP_OFFLINE_BL_ANSWER'		=> 'If the user‘s avatar is blinking gray, this indicates that the user is currently offline or not connected to the room. This is possible for two reasons:
	<ul>
		<li>The user‘s internet connection has been terminated.</li>
		<li>The administrator only allows the room to operate in an active window. If the user is viewing another page or web page, the user will not receive any new data about the current status of poker. There is a kind of charging break for him and while he is not actively watching poker, he remains offline.</li>
	</ul>',
	'JV_POKER_HELP_OFFLINE_BL_QUESTION'		=> 'The user‘s avatar flashes gray, what does that mean?',
	'JV_POKER_HELP_OFFLINE_BP_ANSWER'		=> 'In this case, the following can happen:
	<ul>
		<li>1. If you return before it is your turn and your move time has not expired, you can still place additional bets.</li>
		<li>2. If you are unable to return in time, your bet will be placed in a defensive position, but you will not be able to place any more bets. This way, you have a chance to win with your already placed bet even if you remain offline throughout the game.</li>
	</ul>',
	'JV_POKER_HELP_OFFLINE_BP_QUESTION'		=> 'What happens to my bet if my internet connection is lost?',
	'JV_POKER_HELP_OFFLINE_S_ANSWER'		=> 'If the server is available again after less than 10 minutes, returning users can continue the game from where they left off. In the event that the server is not available for at least 10 minutes, the tournament will be deleted and all users who were still in the tournament will receive their Buy-In back.',
	'JV_POKER_HELP_OFFLINE_S_QUESTION'		=> 'What happens if the server is unavailable?',
	'JV_POKER_HELP_OFFLINE_U_ANSWER'		=> 'In this case, the following can happen:
	<ul>
		<li>1. If you are already sitting but not playing yet, you’ll automatically stand up after 12 seconds.</li>
		<li>2. If you are in a normal game, you will be stand up automatically at the end of the %s. hand.</li>
		<li>3. If you are in a tournament game, you are automatically stand up at the end of the %s. hand.</li>
	</ul>',
	'JV_POKER_HELP_OFFLINE_U_QUESTION'		=> 'What happens if my internet connection is lost?',
	'JV_POKER_HELP_PAUSE_ANSWER'			=> 'If you press the pause button, it is equal to getting out of the game, so if the round goes on, your cards will be folded. This option is worth using if the player does not want someone else to take his place in the meantime. Of course, the pause time is limited. The limit is defined by the administrator.',
	'JV_POKER_HELP_PAUSE_QUESTION'			=> 'What happens if I press the pause button?',
	'JV_POKER_HELP_PD_ANSWER'				=> '“phpBB Holdem Póker” collects and stores the IP address of each current player until the user leaves the table. When a user stands up from the table, all data is erased and only the statistical data is retained. The IP address is stored during the game to prevent multiple players at the same table from using the same IP address. Of course, you can enable and disable this IP check.',
	'JV_POKER_HELP_PD_QUESTION'				=> 'Does “phpBB Holdem Póker” store personal data?',
	'JV_POKER_HELP_PLAY_ANSWER'				=> 'Poker is one of the most popular card games in the world. The aim of the game is to get the most out of the cards you have received, in combination with the revealed community cards, in order to finally win the bet in the middle of the table (called “Pot” in English). Per poker room, the game can be played by 2-8 people. The game uses a French 52-card hand with no Joker. Each player receives two private cards that cannot be seen and used by other players. During the game, five community cards are laid open on the table, which all players can see and use. The player now tries to make the best possible “five card combination” from his own cards and the community cards. The player with the strongest cards wins the value of the bet. A deck of French cards (without jokers) has 4 different colors and each color consists of 13 cards of different values, which gives the 52-sheet deck. The order of the 4 colors: <span class="poker_cs">♣</span> clubs <span class="poker_dh">♦</span> diamonds  <span class="poker_dh">♥</span> hearts <span class="poker_cs">♠</span> spades. All colors are equal for the evaluation of poker hands. The 13 card values in their order: A (Ace), 2, 3, 4, 5, 6, 7, 8, 9, 10, J (Jack), Q (Queen), K (King). An ace is not just a numerical value of 1, it can also be the highest card after the king.
		<br><br><strong>Dealer:</strong><br>
		At the poker table there is always a dealer position. The dealer handles the cards, mixes and distributes them. The dealer button (D) indicates the player who currently holds the dealer position. The dealer participates in the game.

		<br><br><strong>Small blinds and big blinds:</strong><br>
		The first player to the left of the dealer button is the “small blind”, and the first player to the left of the small blind is the “big blind”. They are the blind people who have to make their bets without knowing their own cards. The “small blind” is the small starting bet, the “big blind” is the big starting bet, which they have to do “blindly”.

		<br><br><strong>Bidding:</strong><br>
		Poker uses “Chips” for bidding, which replaces cash during the game. In the betting round, bidding always goes in the left direction, and all “active players” (who have not yet folded their cards) are betting and continue as long as active bets are no longer raised, held, or folded. The number of bids and raises is in accordance with the limit rules.

		<br><br><strong>Dealing:</strong><br>
		The dealer shuffles the deck. Before the cards are dealt, the “small blind” and the “big blind” place their starting bets, and then the dealer puts all the cards to the left. Then the Pre-Flop (the first betting round) begins, which is different from the other betting rounds in the game.

		<br><br><strong>Pre-Flop (first betting round):</strong><br>
		The first betting round is started by the first player to the left of the “big blind” and, and three bids can be made:
		<ul>
			<li>Call - the existing bet is paid.</li>
			<li>Raise - pays the existing bet and increases it within the limit rules.</li>
			<li>Fold - the cards are placed face down on the table and leave the round (give up).</li>
		</ul>

		The betting round goes to the left and players can bid. If you just held the bet, then:
		<ul>
			<li>The “small blind” must raise at least with the small blind his own bet or fold his cards and give up.</li>
			<li>The “big blinds” can raise the bet with at least their big blind, they can check - do not make another bid -, or fold their cards and give up.</li>
		</ul>

		When a player raises the bet, the bidding starts. At the end of the betting round, the Dealer collects the bets and put them in the game fund, the “Pot”.
		<br><br><strong>Flop (second betting round):</strong><br>
		The dealer deals three cards, the “Flop”, which are placed face up in the middle of the table so that all players can see them. Then the second betting round of the game begins.

		<br><br><strong>Unlike the Pre-Flop betting round, all betting rounds after the flop can always start with the first active player to the left of the dealer button, and can make three bids:</strong><br>
		<ul>
			<li>Check: pass action to the next player, do not call and do not fold your cards.</li>
			<li>Bet: pays the opening bet according to the limit rules.</li>
			<li>Fold: discard the cards with the color down and give up the round.</li>
		</ul>

		If a player places the opening bet, the first active player to his left can make three bids:
		<ul>
			<li>Call - the existing bet is paid.</li>
			<li>Raise - pays the existing bet and increases it within the limit rules.</li>
			<li>Fold - the cards are placed face down on the table and leave the round (give up).</li>
		</ul>

		When a player raises the bet, the bidding starts. At the end of the betting round, the Dealer collects the bets and put them in the Pot.

		<br><br><strong>Turn (third betting round)</strong><br>
		The dealer hands another card named “Turn” face up to the community cards. This gives the player four community cards. Now begins the third betting round.

		<br><br><strong>River (fourth betting round)</strong><br>
		The dealer deals the final face up community card, called “River”. This gives each player seven cards in total. Five of them have to be used to make a poker hand, which hopefully is higher in quality than the opponents hand.

		<br><br><strong>Showdown (presentation of cards)</strong><br>
		If more than one player remains in the game after the end of the last betting round, the cards of the winner and the All-In players will be presented. The Pot is awarded to the player with the strongest 5-card hand. In the event that two or more players show the same strongest hand, the Pot will be distributed proportionally. If the Pot value is not divisible proportionally, the first winning player to the left of the dealer button is entitled to the surplus. Before the next round, the dealer button is always moved one position to the left. The dealer is therefore different in each round, and the blinds are also assigned to other players.

		<br><br><strong>Rating of poker hands</strong><br>
		In poker, a poker hand is a combination of 5 cards, which the player combines from his own two and the five community cards from the table (that is, a total of seven cards). The player can use one, both, or none of his own cards. The colors of the cards are of equal value. If two players have the same combination, the accompanying card decides which player wins the game. An accompanying card (kicker) is not part of the combination, it only accompanies and “complements” it. If two players tie, then the higher kicker decides. If there is still a tie, the Pot is divided between the winners.

		<br><br><strong>Limit rules</strong><br>
		The minimum bet is always the same as the big blind.
		<ul>
			<li>With a fixed limit it is possible to triple the big blind during the Pre-Flop (first betting round) and the Flop (second betting round). For the rounds Turn (third betting round) and River (fourth betting round) can be increased by this rule only with the double big blind.</li>
			<li>No limit means that the amount and the number of increases are not limited.</li>
		</ul>

		<strong>Poker Hands:</strong>
		<ul>
			<li><strong>Royal Flush</strong>
				<ul><li>The strongest card combination. 10, jack, queen, king, ace - all in the same color. If two are equal, there is a tie (the prize is divided).<br>Example: 10<span class="poker_dh">♥</span>, J<span class="poker_dh">♥</span>, Q<span class="poker_dh">♥</span>, K<span class="poker_dh">♥</span>, A<span class="poker_dh">♥</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Straight Flush</strong>
				<ul><li>A successive sequence of five cards of the same color. If it occurs several times in the round, the highest card decides. If two are equal, there is a tie (the prize is divided).<br>Example: 5<span class="poker_cs">♣</span>, 6<span class="poker_cs">♣</span>, 7<span class="poker_cs">♣</span>, 8<span class="poker_cs">♣</span>, 9<span class="poker_cs">♣</span></li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Four of a Kind</strong>
				<ul><li>It consists of four cards with the same number or sign and any other card. If several of them meet, the higher poker wins.<br>Example: 7<span class="poker_dh">♥</span>, 7<span class="poker_cs">♠</span>, 7<span class="poker_cs">♣</span>, 7<span class="poker_dh">♦</span>, 10<span class="poker_cs">♠</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Full house</strong>
				<ul><li>It consists of three cards with the same number or sign, and two other cards with the same number or sign. If several of them meet, the higher three of a kind wins. If it is still a tie, the higher pair wins.<br>Example: 5<span class="poker_dh">♦</span>, 5<span class="poker_cs">♣</span>, 5<span class="poker_cs">♠</span>, 8<span class="poker_dh">♥</span>, 8<span class="poker_cs">♠</span>.</li></ul
			</li>
		</ul>
		<ul>
			<li><strong>Flush</strong>
				<ul><li>Consists of five arbitrary same-colored cards. If several of them meet, the player wins who has the highest card that not every player has. Still in a tie, the second highest card scores, and so on…<br>Example: 2<span class="poker_cs">♠</span>, 4<span class="poker_cs">♠</span>, 5<span class="poker_cs">♠</span>, 7<span class="poker_cs">♠</span>, 10<span class="poker_cs">♠</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Straight</strong>
				<ul><li>Consists of 5 consecutive cards of any color. If more than one of them occurs, the player with the highest card wins. If no decision is yet to be reached, there is a tie (the prize is divided).<br>Example: 4<span class="poker_dh">♥</span>, 5<span class="poker_dh">♦</span>, 6<span class="poker_cs">♠</span>, 7<span class="poker_cs">♠</span>, 8<span class="poker_cs">♣</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Three of a Kind</strong>
				<ul><li>It consists of three cards of the same number or sign and two of any other. If several of them meet, the higher three of a kind wins. If no decision is reached, the higher neutral card decides, than the lower card. <br>Example: 3<span class="poker_dh">♥</span>, 3<span class="poker_cs">♣</span>, 3<span class="poker_cs">♠</span>, 7<span class="poker_cs">♠</span>, 10<span class="poker_dh">♦</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Two pairs</strong>
				<ul><li>It consists of two times two cards with the same number or sign and one other card. If there are several double pairs, the higher pair decides, then the second highest and, if necessary, the neutral card.<br>Example: 5<span class="poker_cs">♠</span>, 5<span class="poker_dh">♦</span>, 8<span class="poker_cs">♠</span>, 8<span class="poker_cs">♣</span>, 10<span class="poker_dh">♦</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>One pair</strong>
				<ul><li>It consists of two cards with the same number or sign, and three other cards. If there are several pairs the higher pair decides, then the neutral cards.<br>Example: 3<span class="poker_dh">♥</span>, 5<span class="poker_cs">♠</span>, 7<span class="poker_cs">♣</span>, 10<span class="poker_dh">♦</span>, 10<span class="poker_cs">♠</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>High card</strong>
				<ul><li>Any card.
			</li>
		</ul>',
	'JV_POKER_HELP_PLAY_QUESTION'			=> 'How to play poker?',
	'JV_POKER_HELP_POKER_ANSWER'			=> 'PhpBB Holdem Póker is a card game that registered users can play against each other. Only an administrator can authorize the use of Poker. However, the following guide will probably be helpful.',
	'JV_POKER_HELP_POKER_QUESTION'			=> 'What is phpBB Holdem Póker?',
	'JV_POKER_HELP_PRACTICE_ANSWER'			=> 'Everyone can play in this room, even if they do not have their own chips. Each player receives a predetermined number of chips when sitting down. The chips won in this room can not be taken out of the room or exchanged.',
	'JV_POKER_HELP_PRACTICE_QUESTION'		=> 'What does it mean to be in a practice room?',
	'JV_POKER_HELP_PTOC_ANSWER'				=> 'Yes, for this, use the “Chips exchange” button on the poker main page next to the chips display in your own profile.',
	'JV_POKER_HELP_PTOC_QUESTION'			=> 'Can “%s” be exchanged for chips?',
	'JV_POKER_HELP_P_SHOUT_ANSWER'			=> 'If enabled by the administrator, yes. If it is not enabled, only the word “Pause” will appear on the message board.',
	'JV_POKER_HELP_P_SHOUT_QUESTION'		=> 'Can I use the shoutbox during a pause?',
	'JV_POKER_HELP_REG_ANSWER'				=> 'Only registered users can play phpBB Holdem Póker, so it´s a good idea to be a registered member.',
	'JV_POKER_HELP_REG_QUESTION'			=> 'Why do I have to register at all?',
	'JV_POKER_HELP_SHOUT_ANSWER'			=> 'If the administrator has given permission, then yes. If you do not have the required permissions, you can only read messages about the game’s progress on the message board.',
	'JV_POKER_HELP_SHOUT_QUESTION'			=> 'Can I use the message board during a game?',
	'JV_POKER_HELP_SHOUT_SOUND_ANSWER'		=> 'Yes. You can turn off the message board separately. Turning off the message board does not turn off the sound of the game.',
	'JV_POKER_HELP_SHOUT_SOUND_QUESTION'	=> 'Can I switch off the message board?',
	'JV_POKER_HELP_SHOWDOWN_ANSWER'			=> 'The time of presentation of the cards at the end of the game is determined by the administrator.',
	'JV_POKER_HELP_SHOWDOWN_QUESTION'		=> 'How long are the cards visible at the end of the game?',
	'JV_POKER_HELP_STAND_UP_ANSWER'			=> 'In this case, there are two possibilities:
	<ul>
		<li>1. You stand up from the table. You do not leave the room. If you are in a practice room, you can not take out your chips, so they will be canceled.</li>
		<li>2. You get up from the table. You do not leave the room. If you are in a normal room, your won chips will be added to your balance.</li>
	</ul>',
	'JV_POKER_HELP_STAND_UP_QUESTION'		=> 'What happens when I press the stand up button?',
	'JV_POKER_HELP_STATUS_ANSWER'			=> 'The field under “Status” indicates whether or not this room is in a game.',
	'JV_POKER_HELP_STATUS_QUESTION'			=> 'What does status mean?',
	'JV_POKER_HELP_SU_SHOUT_ANSWER'			=> 'No, the message board can only be used by a sitting user.',
	'JV_POKER_HELP_SU_SHOUT_QUESTION'		=> 'If I stand up can I use the message board?',
	'JV_POKER_HELP_S_SHOUT_ANSWER'			=> 'In any case, the message board can only display the last 8 lines, so no further scrolling is possible.',
	'JV_POKER_HELP_S_SHOUT_QUESTION'		=> 'How do I scroll messages?',
	'JV_POKER_HELP_TOUR_ANSWER'				=> 'In a tournament room can play only users who own their own chips, and who can bring in enough chips for the required minimum entry amount. Each of these rooms has a fixed minimum amount to get started. Chips won in this room can be taken out of the room and increase your chips balance. These chips can be exchanged back.',
	'JV_POKER_HELP_TOUR_QUESTION'			=> 'What does it mean to be in a tournament room?',
	'JV_POKER_HELP_USER_STATS_ANSWER'		=> 'Yes, if the administrator allows viewing statistics.',
	'JV_POKER_HELP_USER_STATS_QUESTION'		=> 'Can I see user’s statistics?'
]);
