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
// Some characters you may want to copy&paste: ‚ ‘ ’ « » „ «   » …

$lang = array_merge($lang, [
	'JV_POKER_HELP_AUTO_ACC_ANSWER'			=> 'Si l’utilisateur approuve la fonction « Check/Call automatique », lorsque c’est le tour du joueur, il passera automatiquement, ou s’il y a un call, il spécifiera automatiquement le montant appelé.',
	'JV_POKER_HELP_AUTO_ACC_QUESTION'		=> 'À quoi sert le Check/Call automatique ?',
	'JV_POKER_HELP_AUTO_ACF_ANSWER'			=> 'Si l’utilisateur approuve la fonction « Check/Foldé automatique », le joueur passera automatiquement les cartes ou se couchera lorsqu’il y aura un call.',
	'JV_POKER_HELP_AUTO_ACF_QUESTION'		=> 'À quoi sert le Check/Foldé automatique ?',
	'JV_POKER_HELP_AVATAR_BC_ANSWER'		=> 'Oui, les couleurs suivantes sont actuellement utilisées autour de l’avatar :
	<ul>
		<li>Blanc : En attente de jouer.</li>
		<li>Noir : Ceux qui sont dans le jeu.</li>
		<li>Jaune : Joueur réel.</li>
		<li>Bourgogne : Foldé les cartes.</li>
	</ul>',
	'JV_POKER_HELP_AVATAR_BC_ANSWER_2'		=> '<li>Bourgogne barré : Faire une pause.</li>',
	'JV_POKER_HELP_AVATAR_BC_ANSWER_3'		=> '<li>Bleu : Protection de pari.</li>',
	'JV_POKER_HELP_AVATAR_BC_QUESTION'		=> 'Les couleurs autour de l’avatar signifient-elles quelque chose ?',
	'JV_POKER_HELP_A_SHOUT_ANSWER'			=> 'Oui, tout joueur peut consulter les archives pendant le jeu.',
	'JV_POKER_HELP_A_SHOUT_QUESTION'		=> 'Existe-t-il un moyen d’afficher les anciens messages ?',
	'JV_POKER_HELP_A_SHOUT_RE_ANSWER'		=> 'Si les messages n’apparaissent pas, vous avez quitté ou mis en pause le jeu et vous n’êtes pas autorisé à utiliser le forum pendant une pause.',
	'JV_POKER_HELP_A_SHOUT_RE_QUESTION'		=> 'Après avoir rafraîchi l’archive, les messages ont disparu, pourquoi ?',
	'JV_POKER_HELP_A_SHOUT_R_ANSWER'		=> 'Oui, le bouton d’actualisation est situé sur le côté droit de la barre de titre.',
	'JV_POKER_HELP_A_SHOUT_R_QUESTION'		=> 'Existe-t-il un moyen de rafraîchir l’archive ?',
	'JV_POKER_HELP_BAN_CHIPS_ANSWER'		=> 'Oui, si un administrateur révoque votre autorisation de jouer au poker, vous pouvez automatiquement échanger tous vos jetons à tout moment %s<strong>ICI</strong>%s. Le changement automatique ne fonctionnera pas si le poker est désactivé, dans ce cas vous reviendrez plus tard et réessayerez.',
	'JV_POKER_HELP_BAN_CHIPS_QUESTION'		=> 'Si je perds ma permission de jouer au poker, y a-t-il un moyen d’échanger mes jetons ?',
	'JV_POKER_HELP_BLIND_ANSWER'			=> 'Le Petite Blind/Grande Blind dépend toujours du montant de départ minimum et maximum. Le montant de départ minimum (buy-in) est toujours de 10x la grande blind, tandis que le montant de départ maximum est de 200x le grande blind. Bien sûr, si les valeurs minimale et maximale sont identiques, cela dépend du réglage si la valeur minimale, moyenne ou maximale est utilisée comme base. La grande blind est toujours la moitié de la grosse blind. Cette règle diffère dans la salle de tournoi, où le Petite Blind/Grande Blind est toujours le double de la valeur de base. De plus, le Petite Blind/Grande Blind dans la salle de tournoi augmente régulièrement tout au long du tournoi.',
	'JV_POKER_HELP_BLIND_QUESTION'			=> 'Petite/grande blind bets entre les salles sont différentes, pourquoi ?',
	'JV_POKER_HELP_BLOCK_GAME'				=> 'Problèmes avec le jeu de poker',
	'JV_POKER_HELP_BLOCK_GENERAL'			=> 'Questions générales',
	'JV_POKER_HELP_BLOCK_POKER'				=> 'Questions sur phpBB Holdem Póker ',
	'JV_POKER_HELP_BLOCK_ROOMS'				=> 'Questions relatives aux salles de poker (Lobby)',
	'JV_POKER_HELP_BLOCK_SHOUT'				=> 'Questions sur la shoutbox de poker',
	'JV_POKER_HELP_BLOCK_STATS'				=> 'Questions sur les statistiques du poker',
	'JV_POKER_HELP_CHIPS_C_ANSWER'			=> 'Les valeurs des jetons de couleurs sont les suivantes :
	<ul>
		<li>Grijs: 1</li>
		<li>Zwart: 10</li>
		<li>Lichtblauw: 100</li>
		<li>Geel: 1.000</li>
		<li>Roze: 10.000</li>
		<li>Rood: 100.000</li>
		<li>Donkerblauw: 1.000.000</li>
		<li>Paars: 10.000.000</li>
		<li>Groen: 100.000.000</li>
		<li>Bruin: 1.000.000.000</li>
	</ul>',
	'JV_POKER_HELP_CHIPS_C_QUESTION'		=> 'Quelle est la valeur des jetons de différentes couleurs ?',
	'JV_POKER_HELP_CHIPS_DC_ANSWER'			=> 'Oui, tant que vous n’avez pas atteint le nombre maximum de jetons pouvant être affichés, qui est de 11.111.111.110, car il y a jusqu’à 10 éléments dans 1 jeton .',
	'JV_POKER_HELP_CHIPS_DC_QUESTION'		=> 'Les jetons sont-ils affichés au bon montant ?',
	'JV_POKER_HELP_CHIPS_ZERO_ANSWER'		=> 'Si tu mises toutes tes jetons pendant un tour et que tu perds, mais que le rachat automatique est activé et qu’il te reste encore des jetons hors jeu, alors tes jetons en jeu ne seront réapprovisionnées qu’au début d’un nouveau tour auquel tu participes activement.',
	'JV_POKER_HELP_CHIPS_ZERO_QUESTION'		=> 'J’ai des jetons, mais celles qui sont en jeu affichent zéro, pourquoi ?',
	'JV_POKER_HELP_CM_ANSWER'				=> '« Chaises » signifie le nombre de chaises disponibles pour les joueurs dans cette salle. Si le nombre de chaises est de 8, 8 utilisateurs peuvent s’asseoir dans la salle en même temps. « Joueurs » indique combien d’utilisateurs sont dans la salle. Si l’administrateur ferme la salle, cela signifie que la salle est pleine et qu’aucun autre membre ne peut entrer dans la salle avant qu’une chaise ne soit libérée.',
	'JV_POKER_HELP_CM_QUESTION'				=> 'Que signifie Joueurs/Chaises ?',
	'JV_POKER_HELP_CREATE_ANSWER'			=> 'Ce module complémentaire (dans sa forme originale) est créé, publié et protégé par les droits d’auteur du groupe <a href="https://jv-arcade.com/">JV-Arcade Group</a>. Il est disponible sous la licence <a href="https://jv-arcade.com/License.html">JVA Licence</a>, et ne peut être partagé ou distribué. Plus d’informations via le lien.',
	'JV_POKER_HELP_CREATE_QUESTION'			=> 'Qui a créé cette extension phpBB Holdem Póker ?',
	'JV_POKER_HELP_CTOP_ANSWER'				=> 'Oui, pour cela, utilisez le bouton « Échange de jetons » sur la page principale du poker à côté de l’affichage des jetons dans votre propre profil.',
	'JV_POKER_HELP_CTOP_QUESTION'			=> 'Les jetons peuvent-ils être échangés contre « %s » ?',
	'JV_POKER_HELP_DROP_TOKEN_ANSWER'		=> 'Dans ce cas, il y a 3 options disponibles :
	<ul>
		<li>1. Vous ne pouvez pas sortir les jetons d’une salle d’entraînement, donc tous les jetons qu’il vous reste seront annulés.</li>
		<li>2. Bien sûr, si vous êtes expulsé d’une salle normale, vous récupérerez vos jetons restants.</li>
		<li>3. S’ils m’expulsent du tournoi avant le début du tournoi, vous récupérerez votre buy-in. Si le tournoi a déjà commencé, vous perdrez le buy-in.</li>
	</ul>',
	'JV_POKER_HELP_DROP_TOKEN_QUESTION'		=> 'Qu’advient-il de mes jetons si je suis expulsée du jeu ?',
	'JV_POKER_HELP_DROP_USER_ANSWER'		=> 'Dans ce cas, 4 options sont disponibles :
	<ul>
		<li>1. Si vous perdez votre connexion Internet.</li>
		<li>2. Si vous êtes inactif et ne réagissez à rien, ce qui peut délibérément ralentir le cours du jeu.</li>
		<li>3. Si la fenêtre de jeu est déplacée en arrière-plan. Dans ce cas les navigateurs peuvent ralentir ou arrêter complètement la mise à jour des données d’arrière-plan, le jeu vous prendra en tant qu’utilisateur hors ligne, donc le jeu vous jettera dehors.</li>
		<li>4. L’administrateur n’autorise qu’un jeu avec un focus actif à s’exécuter, donc la situation est la même que celle décrite au point 3. Cependant, dans ce cas, l’inscription pause apparaît.</li>
	</ul>',
	'JV_POKER_HELP_DROP_USER_QUESTION'		=> 'Dans quels cas le jeu peut-il vous jeter dehors ?',
	'JV_POKER_HELP_EXIT_ANSWER'				=> 'Dans ce cas, 3 options s’offrent à vous :
	<ul>
		<li>1. Vous ne pouvez pas obtenir de jetons dans une salle de pratique, donc vos jetons seront retirés et vous quitterez la salle.</li>
		<li>2. Lorsque vous quittez la salle normale, les jetons que vous gagnez seront ajoutés à votre solde de jetons et vous quitterez la salle.</li>
		<li>3. Si vous quittez la salle de tournoi avant le début du tournoi, vous récupérerez votre buy-in. Si le tournoi a déjà commencé, vous perdrez le buy-in.</li>
	</ul>',
	'JV_POKER_HELP_EXIT_QUESTION'			=> 'Que se passe-t-il si j’appuie sur le bouton de sortie ?',
	'JV_POKER_HELP_E_SHOUT_ANSWER'			=> 'Si activé par l’administrateur, oui.',
	'JV_POKER_HELP_E_SHOUT_QUESTION'		=> 'Puis-je utiliser des smileys dans mes messages ? ',
	'JV_POKER_HELP_GAME_SOUND_ANSWER'		=> 'Oui. Le son du jeu peut être activé ou désactivé à tout moment pendant le jeu. Cela désactivera tous les sons de la parole, y compris le forum de discussion. Le réglage est toujours enregistré.',
	'JV_POKER_HELP_GAME_SOUND_QUESTION'		=> 'Puis-je couper le son du jeu ? ',
	'JV_POKER_HELP_INACTIVE_ANSWER'			=> 'Dans ce cas, les événements suivants peuvent se produire :
	<ul>
		<li>1. Si vous êtes dans une partie normale, vous vous relevez automatiquement à la fin de la %s. main.</li>
		<li>2. Si vous êtes dans un jeu de tournoi, vous vous relevez automatiquement à la fin de la %s. main.</li>
	</ul>
	C’est nécessaire car personne n’aime que quelqu’un ralentisse délibérément le jeu.',
	'JV_POKER_HELP_INACTIVE_QUESTION'		=> 'Que se passe-t-il si je ne réponds à rien pendant le jeu ?',
	'JV_POKER_HELP_JACKPOT_ANSWER'			=> 'Il y a trois façons de retirer les gains d’un JackPot. Seulement lors de la présentation des cartes et lorsque la vôtre est la main la plus forte.<br>
	<strong>Prix de JackPot :</strong>
	<ul>
		<li>1. Dans le cas de Le Carré 10% du JackPot.</li>
		<li>2. Dans le cas de La Quinte Couleur 30% du JackPot.</li>
		<li>3. Dans le cas d’une Quinte Couleur à l’as 80% du JackPot.</li>
	</ul>
	S’il y a plus d’un gagnant, le prix sera calculé au prorata.<br><br>
	<strong>Vous ne pouvez pas gagner le JackPot si :</strong>
	<ul>
		<li>1. Vous n’avez pas acheté de billet JackPot.</li>
		<li>2. Vous avez pliez des cartes.</li>
		<li>3. Tous les autres ont pliés leur cartes.</li>
		<li>4. Vos cartes ne sont pas la main la plus forte.</li>
	</ul>',
	'JV_POKER_HELP_JACKPOT_QUESTION'		=> 'Comment puis-je gagner le JackPot ?',
	'JV_POKER_HELP_LEADERS_ANSWER'			=> 'Les champions sont classés en fonction du nombre de jetons gagnés.',
	'JV_POKER_HELP_LEADERS_QUESTION'		=> 'Par quoi sont classés les champions ? ',
	'JV_POKER_HELP_LEARNER_ANSWER'			=> 'Tout le monde peut jouer dans cette salle, même s’il n’a pas ses propres jetons. Chaque joueur reçoit un nombre prédéterminé de jetons lorsqu’il s’assoit. Dans la salle, tous les joueurs jouent avec des cartes face visible, afin qu’ils aient une chance de s’enseigner les uns les autres. Les jetons gagnés dans cette salle ne peuvent pas être retirés de la salle ni échangés.',
	'JV_POKER_HELP_LEARNER_QUESTION'		=> 'Qu’est-ce que cela signifie d’être dans une salle d’apprentissage ?',
	'JV_POKER_HELP_LIMIT_ANSWER'			=> 'Nous avons déjà décrit la réponse à cette question dans « Comment jouer au poker ?/Règles du Limit ».',
	'JV_POKER_HELP_LIMIT_QUESTION'			=> 'Que signifie Limite fixe/Aucune limite ?',
	'JV_POKER_HELP_L_STATS_ANSWER'			=> 'Aucune donnée statistique n’est stockée dans les salles d’apprentissage et les salles pratiques.',
	'JV_POKER_HELP_L_STATS_QUESTION'		=> 'Les salles d’apprentissage et les salles pratiques stockent-elles également des données statistiques ?',
	'JV_POKER_HELP_MOVE_TIME_ANSWER'		=> 'Le « temps de mouvement » est le temps pendant lequel un utilisateur peut décider de checker, de miser ou de foldé les cartes. Une fois ce temps écoulé, deux options automatiques sont disponibles :
	<ul>
		<li>1. Si l’action du joueur précédent n’était pas un call, nous vérifierons automatiquement.</li>
		<li>2. Si l’action du joueur précédent était un call, nous avons foldé automatiquement nos cartes.</li>
	</ul>',
	'JV_POKER_HELP_MOVE_TIME_QUESTION'		=> 'Qu’est le temps de mouvement ?',
	'JV_POKER_HELP_NORMAL_ANSWER'			=> 'Dans une salle normale, seuls les utilisateurs qui possèdent leurs propres jetons et qui peuvent contribuer suffisamment pour le montant minimum d’entrée requis peuvent jouer. Chacune de ces salles a un montant minimum et maximum défini pour commencer. Les utilisateurs peuvent s’asseoir à la table avec le montant minimum. Les jetons gagnés dans cette salle peuvent être retirés de la salle et augmenter vos jetons. Ces jetons peuvent être échangés à nouveau.',
	'JV_POKER_HELP_NORMAL_QUESTION'			=> 'Qu’est-ce que cela signifie d’être dans une salle normale ?',
	'JV_POKER_HELP_OFFLINE_BL_ANSWER'		=> 'Si l’avatar de l’utilisateur clignote en gris, cela indique que l’utilisateur est actuellement hors ligne ou non connecté à la salle. Cela est possible pour deux raisons :
	<ul>	
		<li>La connexion Internet de l’utilisateur est perdue.</li>
		<li>L’administrateur n’autorise la salle à fonctionner que dans une fenêtre active. Si l’utilisateur consulte une autre page ou une autre page web, il ne recevra aucune nouvelle information sur l’état actuel du poker. Il y a une sorte de pause de recharge pour lui, et bien qu’il ne regarde pas activement le poker, il reste hors ligne.</li>
	</ul>',
	'JV_POKER_HELP_OFFLINE_BL_QUESTION'		=> 'L’avatar de l’utilisateur clignote en gris, qu’est-ce que cela signifie ?',
	'JV_POKER_HELP_OFFLINE_BP_ANSWER'		=> 'Dans ce cas, les événements suivants peuvent se produire :
	<ul>
		<li>1. Si vous revenez avant que ce soit votre tour et que votre temps de mouvement n’a pas expiré, vous pouvez toujours placer des paris supplémentaires.</li>
		<li>2. Si vous n’êtes pas en mesure de revenir à temps, votre pari sera placé en position de protection, mais vous ne pourrez plus placer de paris. De cette façon, vous avez une chance de gagner avec votre pari déjà placé même si vous restez hors ligne tout au long du jeu.</li>
	</ul>',
	'JV_POKER_HELP_OFFLINE_BP_QUESTION'		=> 'Qu’advient-il de mon pari si ma connexion Internet est perdue ?',
	'JV_POKER_HELP_OFFLINE_S_ANSWER'		=> 'Si le serveur est à nouveau disponible après moins de 10 minutes, les utilisateurs de retour peuvent reprendre le jeu là où ils l’ont laissé. Dans le cas où le serveur est en panne pendant au moins 10 minutes, le tournoi sera supprimé et tous les utilisateurs qui étaient encore dans le tournoi recevront un remboursement de leur buy-in.',
	'JV_POKER_HELP_OFFLINE_S_QUESTION'		=> 'Que se passe-t-il si le serveur est en panne ?',
	'JV_POKER_HELP_OFFLINE_U_ANSWER'		=> 'Dans ce cas, les événements suivants peuvent se produire :
	<ul>
		<li>1. Si vous êtes assis mais que vous ne jouez pas encore, vous vous lèverez automatiquement après 12 secondes.</li>
		<li>2. Si vous êtes dans une partie normale, vous vous relevez automatiquement à la fin de la %s. main.</li>
		<li>3. Si vous êtes dans une partie de tournoi, vous vous relevez automatiquement à la fin de la %s. main.</li>
	</ul>',
	'JV_POKER_HELP_OFFLINE_U_QUESTION'		=> 'Que se passe-t-il si ma connexion Internet est interrompue ?',
	'JV_POKER_HELP_PAUSE_ANSWER'			=> 'Appuyer sur le bouton pause équivaut à sortir du jeu, donc si le tour continue, vos cartes seront pliés. Cette option vaut la peine d’être utilisée si le joueur ne veut pas que quelqu’un d’autre prenne sa place entre-temps. Bien sûr, le temps de pause est limité. La limite est déterminée par l’administrateur.',
	'JV_POKER_HELP_PAUSE_QUESTION'			=> 'Que se passe-t-il si j’appuie sur le bouton pause ?',
	'JV_POKER_HELP_PD_ANSWER'				=> '« phpBB Holdem Poker » collecte et stocke l’adresse IP de chaque joueur actuel jusqu’à ce que l’utilisateur quitte la table. Lorsqu’un utilisateur se lève de la table, toutes les données sont effacées et seules les données statistiques sont conservées. L’adresse IP est stockée pendant la partie pour éviter que plusieurs joueurs à la même table n’utilisent la même adresse IP. Bien sûr, vous pouvez activer et désactiver cette vérification IP.',
	'JV_POKER_HELP_PD_QUESTION'				=> 'Est-ce que « phpBB Holdem Póker » stocke des données personnelles ?',
	'JV_POKER_HELP_PLAY_ANSWER'				=> 'Le poker est l’un des jeux de cartes les plus populaires au monde. Le but du jeu est de tirer le meilleur parti des cartes que vous avez reçues, en combinaison avec les cartes communes révélées, afin de finalement gagner la mise au milieu de la table (appelée « Pot » en anglais). Le jeu peut être joué par 2 à 8 personnes par salle de poker. Le jeu utilise une main française de 52 cartes sans joker. Chaque joueur reçoit deux cartes privées qui ne peuvent pas être vues et utilisées par les autres joueurs. Pendant le jeu, cinq cartes communes sont placées face visible sur la table, que tous les joueurs peuvent voir et utiliser. Le joueur essaie maintenant de faire la meilleure « combinaison de cinq cartes » possible de ses propres cartes et des cartes communes. Le joueur avec les cartes les plus fortes remporte la valeur de la mise. Un jeu de cartes françaises (sans jokers) a 4 couleurs différentes, et chaque couleur se compose de 13 cartes de valeurs différentes, ce qui donne le jeu de 52 feuilles. L’ordre des 4 couleurs : <span class="poker_cs">♣</span> trèfle <span class="poker_dh">♦</span> diamants  <span class="poker_dh">♥</span> cœur <span class="poker_cs">♠</span> pique. Toutes les couleurs sont égales pour l’évaluation des mains de poker. Les 13 valeurs de cartes dans leur ordre : A (As), 2, 3, 4, 5, 6, 7, 8, 9, 10, J (Valet), Q (Dame), K (Roi). Un as n’est pas seulement une valeur numérique de 1, il peut aussi être la carte la plus haute après le roi.
		<br><br><strong>Croupier:</strong><br>
		À la table de poker, il y a toujours une position de croupier. Le croupier manipule, mélange et distribue les cartes. Le bouton du croupier (D) indique le joueur qui occupe actuellement la position du croupier. Le croupier participe au jeu.

		<br><br><strong>Petite blinds et grande blinds :</strong><br>
		Le premier joueur à gauche du bouton du croupier est la « petite blind » et le premier joueur à gauche du petite blind est la « grande blind ». Ce sont les blinds qui doivent placer leurs paris sans connaître leurs propres cartes. La « petite blind » est la petite mise de départ, la « grande blind » est la grosse mise de départ, qu’ils doivent faire « à l’aveuglette ».

		<br><br><strong>Enchèrer :</strong><br>
		Le poker utilise des « Jetons » , pour enchérir, qui remplacent l’argent pendant la partie. Dans le tour d’enchères, les enchères sont toujours dans le sens de la gauche, et tous les « joueurs actifs » (qui n’ont pas encore foldé leurs cartes) misent et continuent tant qu’il n’y a plus de mises actives, maintenues ou fold. Le nombre d’enchères et de relances est conforme aux règles de limite.

		<br><br><strong>Partager :</strong><br>
		Le croupier mélange les cartes. Avant que les cartes ne soient distribuées, les mises de départ du « petite blind » et le « grande blind » sont placées, après quoi le croupier place toutes les cartes à gauche. Ensuite, le pré-flop (le premier tour d’enchères) commence, ce qui est différent des autres tours d’enchères du jeu.

		<br><br><strong>Pre-Flop (Premier tour d’enchères):</strong><br>
		Le premier tour d’enchères est lancé par le premier joueur à gauche du « grande blind » et trois enchères peuvent être faites :
		<ul>
			<li>Call - La mise existante sera payée.</li>
			<li>Raise - Paie la mise existante et l’augmente dans les règles de limite.</li>
			<li>Fold - Les cartes sont placées face cachée sur la table et quittent le tour (abandonnez).</li>
		</ul>

		Le tour d’enchères va à gauche et les joueurs peuvent enchérir. Si vous venez de faire le pari, alors:
		<ul>
			<li>La « petite blind » doit au moins relancer sa propre mise avec la petite blind ou foldé ses cartes et abandonner.</li>
			<li>Les « grande blinds » peuvent relancer la mise d’au moins leur grande blind, ils peuvent checker - pas faire une autre enchère - ou plier leurs cartes et abandonner.</li>
		</ul>

		Lorsqu’un joueur augmente la mise, les enchères commencent. À la fin du tour d’enchères, le croupier collecte les mises et les place dans le fonds du jeu, le « Pot ».
		<br><br><strong>Flop (Deuxième tour d’enchères) :</strong><br>
		Le croupier distribue trois cartes, le « Flop », qui est placé face visible au milieu de la table afin que tous les joueurs puissent les voir. Ensuite, le deuxième tour d’enchères du jeu commence.

		<br><br><strong>Contrairement au tour d’enchères pré-flop, tous les tours d’enchères après le flop peuvent toujours commencer avec le premier joueur actif à gauche du bouton du croupier et trois enchères peuvent être faites :</strong><br>
		<ul>
			<li>Check: Transmettez l’action au joueur suivant, pas call ni foldé vos cartes.</li>
			<li>Bet : Paie la mise d’ouverture selon les règles de la limite.</li>
			<li>Fold : Défaussez les cartes face cachée et abandonnez le tour.</li>
		</ul>

		Si un joueur place la mise d’ouverture, le premier joueur actif à sa gauche peut faire trois enchères:
		<ul>
			<li>Call - La mise existante sera payée.</li>
			<li>Raise - Paie la mise existante et l’augmente dans les règles de limite.</li>
			<li>Fold - Les cartes sont placées face cachée sur la table et quittent le tour (abandonnez).</li>
		</ul>

		Lorsqu’un joueur augmente la mise, les enchères commencent. À la fin du tour d’enchères, le croupier collecte les paris et les place dans le Pot.

		<br><br><strong>Turn (Troisième tour d’enchères)</strong><br>
		Le croupier donne une autre carte appelée « Turn » face visible aux cartes communes. Cela donne au joueur quatre cartes communes. Maintenant, le troisième tour d’enchères commence.

		<br><br><strong>River (Quatrième tour d’enchères)</strong><br>
		Le croupier distribue la dernière carte commune face visible, appelée « River ». Cela donne à chaque joueur un total de sept cartes. Cinq d’entre eux doivent être utilisés pour faire une main de poker, qui, espérons-le, sera de meilleure qualité que la main de l’adversaire.

		<br><br><strong>Showdown (présentation de cartes)</strong><br>
		S’il reste plus d’un joueur en jeu après la fin du dernier tour d’enchères, les cartes du gagnant et des joueurs All-In seront présentées. Le pot est attribué au joueur ayant la main la plus forte de 5 cartes. Dans le cas où deux joueurs ou plus ont la même main la plus forte, le pot sera partagé à parts égales. Si la valeur du pot n’est pas divisible proportionnellement, le premier joueur gagnant à gauche du bouton du croupier a droit au supérieur. Pour le tour suivant, le bouton du croupier est toujours déplacé d’une position vers la gauche. Le croupier est donc différent à chaque tour, et les blinds sont également attribués à d’autres joueurs.

		<br><br><strong>Evaluation des mains de poker</strong><br>
		Au poker, une main de poker est une combinaison de 5 cartes, que le joueur combine à partir de ses deux propres cartes et des cinq cartes communes de la table (c’est-à-dire un total de sept cartes). Le joueur peut utiliser une, les deux ou aucune de ses propres cartes. Les couleurs des cartes sont de valeur égale. Si deux joueurs ont la même combinaison, la carte correspondante détermine quel joueur gagne la partie. Une carte correspondante (kicker) ne fait pas partie de la combinaison, elle ne fait que l’accompagner et la « compléter ». Si deux joueurs sont à égalité, le botteur le plus élevé décide. S’il y a toujours égalité, le pot sera partagé entre les gagnants..

		<br><br><strong>Régles de limite</strong><br>
		La mise minimale est toujours la même que la grande blind.
		<ul>
			<li>Avec une limite fixe, il est possible de tripler la grosse blind pendant le pré-flop (premier tour d’enchères) et le flop (deuxième tour d’enchères). Pour les tours, Turn (troisième tour d’enchères) et River (quatrième tour d’enchères) ne peuvent être relancés par cette règle qu’avec la double grande blind.</li>
			<li>Aucune limite signifie que le montant et le nombre d’augmentations ne sont pas limités.</li>
		</ul>

		<strong>Mains de Poker :</strong>
		<ul>
			<li><strong>Une Quinte Couleur à l’as</strong>
				<ul><li>La combinaison de cartes la plus forte. 10, valet, dame, roi, as - tous dans la même couleur. Si deux sont à égalité, il y a égalité (le prix est partagé).<br>Exemple: 10<span class="poker_dh">♥</span>, J<span class="poker_dh">♥</span>, Q<span class="poker_dh">♥</span>, K<span class="poker_dh">♥</span>, A<span class="poker_dh">♥</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>La Quinte Couleur </strong>
				<ul><li>Couleur consécutive de cinq cartes de la même couleur. Si cela se produit plusieurs fois dans le tour, la carte la plus haute décide. Si deux sont à égalité, il y a égalité (le prix est partagé).<br>Exemple : 5<span class="poker_cs">♣</span>, 6<span class="poker_cs">♣</span>, 7<span class="poker_cs">♣</span>, 8<span class="poker_cs">♣</span>, 9<span class="poker_cs">♣</span></li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Poker (le carré)</strong>
				<ul><li>Il se compose de quatre cartes avec le même numéro ou caractère et de toute autre carte. Si plusieurs d’entre eux se rencontrent, le meilleur joueur de poker gagne.<br>Exemple : 7<span class="poker_dh">♥</span>, 7<span class="poker_cs">♠</span>, 7<span class="poker_cs">♣</span>, 7<span class="poker_dh">♦</span>, 10<span class="poker_cs">♠</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Le Full</strong>
				<ul><li>Il se compose de trois cartes avec le même numéro ou signe, et de deux autres cartes avec le même numéro ou signe. Si plusieurs d’entre eux se rencontrent, le plus élevé gagne three of a kind. S’il y a toujours égalité, la paire la plus élevée gagne.<br>Exemple : 5<span class="poker_dh">♦</span>, 5<span class="poker_cs">♣</span>, 5<span class="poker_cs">♠</span>, 8<span class="poker_dh">♥</span>, 8<span class="poker_cs">♠</span>.</li></ul
			</li>
		</ul>
		<ul>
			<li><strong>La Couleur</strong>
				<ul><li>Se compose de cinq cartes aléatoires de la même couleur. Si plusieurs d’entre eux se rencontrent, le joueur qui a la carte la plus haute que tous les joueurs n’ont pas gagne. Toujours en cas d’égalité, la deuxième carte la plus élevée marque, et ainsi de suite…<br>Exemple : 2<span class="poker_cs">♠</span>, 4<span class="poker_cs">♠</span>, 5<span class="poker_cs">♠</span>, 7<span class="poker_cs">♠</span>, 10<span class="poker_cs">♠</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Quinte</strong>
				<ul><li>Se compose de 5 cartes consécutives de chaque couleur. S’il y en a plusieurs, le joueur avec la carte la plus élevée gagne. Si aucune décision n’a encore été prise, il y aura un tirage au sort (le prix sera partagé).<br>Exemple : 4<span class="poker_dh">♥</span>, 5<span class="poker_dh">♦</span>, 6<span class="poker_cs">♠</span>, 7<span class="poker_cs">♠</span>, 8<span class="poker_cs">♣</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Le Brelan</strong>
				<ul><li>Il se compose de trois cartes avec le même numéro ou caractère et deux d’un autre. Si plusieurs d’entre eux se rencontrent, le trois plus élevé gagne. Si aucune décision n’est prise, la carte neutre la plus élevée décide que la carte la plus basse.<br>Exemple : 3<span class="poker_dh">♥</span>, 3<span class="poker_cs">♣</span>, 3<span class="poker_cs">♠</span>, 7<span class="poker_cs">♠</span>, 10<span class="poker_dh">♦</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Deux Paires</strong>
				<ul><li>Il se compose de deux fois deux cartes avec le même numéro ou personnage et une carte différente. S’il y a plusieurs doubles paires, la paire la plus élevée décide, puis la deuxième plus haute et, si nécessaire, la carte neutre.<br>Exemple : 5<span class="poker_cs">♠</span>, 5<span class="poker_dh">♦</span>, 8<span class="poker_cs">♠</span>, 8<span class="poker_cs">♣</span>, 10<span class="poker_dh">♦</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Une Paire</strong>
				<ul><li>Il se compose de deux cartes avec le même numéro ou signe, et de trois autres cartes. S’il y a plusieurs paires, la paire la plus élevée décide, puis les cartes neutres le sont.<br>Exemple : 3<span class="poker_dh">♥</span>, 5<span class="poker_cs">♠</span>, 7<span class="poker_cs">♣</span>, 10<span class="poker_dh">♦</span>, 10<span class="poker_cs">♠</span>.</li></ul>
			</li>
		</ul>
		<ul>
			<li><strong>Haute carte</strong>
				<ul><li>Chaque carte.
			</li>
		</ul>',
	'JV_POKER_HELP_PLAY_QUESTION'			=> 'Comment jouez-vous au poker ?',
	'JV_POKER_HELP_POKER_ANSWER'			=> 'PhpBB Holdem Póker est un jeu de cartes auquel les utilisateurs enregistrés peuvent jouer les uns contre les autres. Seul un administrateur peut autoriser l’utilisation du poker. Cependant, le guide suivant sera probablement utile.',
	'JV_POKER_HELP_POKER_QUESTION'			=> 'Qu’est-ce que phpBB Holdem Póker?',
	'JV_POKER_HELP_PRACTICE_ANSWER'			=> 'Tout le monde peut jouer dans cette salle, même s’il n’a pas ses propres jetons. Chaque joueur reçoit un nombre prédéterminé de jetons lorsqu’il s’assoit. Les jetons gagnés dans cette salle ne peuvent pas être retirés de la salle ni échangés.',
	'JV_POKER_HELP_PRACTICE_QUESTION'		=> 'Qu’est-ce que cela signifie d’être dans une salle de répétition ?',
	'JV_POKER_HELP_PTOC_ANSWER'				=> 'Oui, pour cela, utilisez le bouton « Échange de jetons » sur la page principale du poker à côté de l’affichage des jetons dans votre propre profil.',
	'JV_POKER_HELP_PTOC_QUESTION'			=> '« %s » peut-il être échangé contre des jetons ?',
	'JV_POKER_HELP_P_SHOUT_ANSWER'			=> 'Si activé par l’administrateur, oui. S’il n’est pas activé, seul le mot « Pause » apparaîtra sur le tableau d’affichage.',
	'JV_POKER_HELP_P_SHOUT_QUESTION'		=> 'Puis-je utiliser la shoutbox pendant une pause ?',
	'JV_POKER_HELP_REG_ANSWER'				=> 'Seuls les utilisateurs enregistrés peuvent jouer à phpBB Holdem Póker, c’est donc une bonne idée d’être un membre enregistré.',
	'JV_POKER_HELP_REG_QUESTION'			=> 'Pourquoi dois-je m’inscrire ?',
	'JV_POKER_HELP_SHOUT_ANSWER'			=> 'Si l’administrateur a donné l’autorisation, alors oui. Si vous n’avez pas les autorisations requises, vous ne pourrez lire que les messages sur la progression du jeu sur le mur.',
	'JV_POKER_HELP_SHOUT_QUESTION'			=> 'Puis-je utiliser le tableau d’affichage pendant une partie ?',
	'JV_POKER_HELP_SHOUT_SOUND_ANSWER'		=> 'Oui. Vous pouvez désactiver le forum individuellement. La désactivation du tableau d’affichage ne mettra pas le jeu en sourdine.',
	'JV_POKER_HELP_SHOUT_SOUND_QUESTION'	=> 'Puis-je désactiver le tableau d’affichage ?',
	'JV_POKER_HELP_SHOWDOWN_ANSWER'			=> 'L’heure de présentation des cartes à la fin de la partie est déterminée par l’administrateur.',
	'JV_POKER_HELP_SHOWDOWN_QUESTION'		=> 'Combien de temps les cartes sont-elles visibles à la fin de la partie ?',
	'JV_POKER_HELP_STAND_UP_ANSWER'			=> 'Dans ce cas, il y a deux possibilités :
	<ul>
		<li>1. Vous vous levez de table. Vous ne quittez pas la salle. Si vous êtes dans une salle d’entraînement, vous ne pourrez pas sortir vos jetons, ils seront donc annulés.</li>
		<li>2. Vous vous levez de table. Vous ne quittez pas la salle. Si vous êtes dans une salle normale, vos jetons gagnés seront ajoutés à votre solde.</li>
	</ul>',
	'JV_POKER_HELP_STAND_UP_QUESTION'		=> 'Que se passe-t-il si j’appuie sur le bouton se lever ?',
	'JV_POKER_HELP_STATUS_ANSWER'			=> 'Le champ sous « Statut » indique si cette salle est en jeu ou non.',
	'JV_POKER_HELP_STATUS_QUESTION'			=> 'Que signifie le statut ?',
	'JV_POKER_HELP_SU_SHOUT_ANSWER'			=> 'Non, le mur ne peut être utilisé que par un utilisateur assis.',
	'JV_POKER_HELP_SU_SHOUT_QUESTION'		=> 'Quand je me lève, puis-je utiliser le tableau d’affichage ?',
	'JV_POKER_HELP_S_SHOUT_ANSWER'			=> 'Dans tous les cas, le mur ne peut afficher que les 8 dernières lignes, vous ne pouvez donc pas faire défiler plus loin.',
	'JV_POKER_HELP_S_SHOUT_QUESTION'		=> 'Comment faire défiler les messages ?',
	'JV_POKER_HELP_TOUR_ANSWER'				=> 'Seuls les utilisateurs qui possèdent leurs propres jetons et qui peuvent contribuer suffisamment de jetons pour le montant minimum d’entrée requis peuvent jouer dans une salle de tournoi. Chacune de ces salles a un montant minimum fixe pour commencer. Les jetons gagnés dans cette salle peuvent être retirés de la salle et augmenter vos jetons. Ces jetons peuvent être échangés à nouveau.',
	'JV_POKER_HELP_TOUR_QUESTION'			=> 'Qu’est-ce que cela signifie d’être dans une salle de tournoi ?',
	'JV_POKER_HELP_USER_STATS_ANSWER'		=> 'Oui, si l’administrateur donne l’autorisation d’afficher les statistiques.',
	'JV_POKER_HELP_USER_STATS_QUESTION'		=> 'Puis-je voir les statistiques de l’utilisateur ?'
]);
