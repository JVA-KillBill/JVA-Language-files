<?php
/**
*
* @package phpBB Arcade
* @version $Id: help_user.php 173 2024-01-14 12:28:15Z KillBill $
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
	'ARCADE_HELP_FAQ_ARCADE_CREATE_ANSWER'				=> 'Cette extension (sous sa forme originale) a été créée par <a href="https://jv-arcade.com/">JV-Arcade Group</a>, qui est propriétaire du copyright. Elle a été développée et publiée sous la <a href="https://jv-arcade.com/License.html.">JV-Aracde License</a> et ne peut être distribué ou modifié. Pour plus d’informations voir le lien.',
	'ARCADE_HELP_FAQ_ARCADE_CREATE_QUESTION'			=> 'Qui a créé l’arcade ?',
	'ARCADE_HELP_FAQ_ARCADE_NOT_AVAILABLE_X_ANSWER'		=> 'Cette extension est fabriqué et sous licence par le JV-Arcade Group. Si vous pensez que plus de fonctionnalités ou de fonctionnalités sont nécessaires dans l’arcade, ou si vous avez trouvé un dysfonctionnement, visitez le <a href="https://jv-arcade.com/New_Ideas.html">JV-Arcade Centre des nouvelles idées</a>, où vous pouvez obtenir plus d’informations.',
	'ARCADE_HELP_FAQ_ARCADE_NOT_AVAILABLE_X_QUESTION'	=> 'Pourquoi la fonction X n’est-elle pas disponible ?',
	'ARCADE_HELP_FAQ_BLOCK_ARCADE'						=> 'Questions au sujet de phpBB Arcade',
	'ARCADE_HELP_FAQ_BLOCK_CAT'							=> 'Questions sur les catégories',
	'ARCADE_HELP_FAQ_BLOCK_CHALLENGE'					=> 'Questions sur les défis',
	'ARCADE_HELP_FAQ_BLOCK_FAV'							=> 'Questions sur les jeux favoris',
	'ARCADE_HELP_FAQ_BLOCK_GENERAL'						=> 'Questions générales',
	'ARCADE_HELP_FAQ_BLOCK_GROUP_TOUR'					=> 'Questions sur les tournois de groupe',
	'ARCADE_HELP_FAQ_BLOCK_INTRO'						=> 'Introduction',
	'ARCADE_HELP_FAQ_BLOCK_PLAYING'						=> 'Questions sur les jeux',
	'ARCADE_HELP_FAQ_BLOCK_POINTS'						=> 'Questions sur le système de points',
	'ARCADE_HELP_FAQ_BLOCK_SEARCH'						=> 'Questions sur la recherche',
	'ARCADE_HELP_FAQ_BLOCK_TOUR'						=> 'Questions sur les tournois',
	'ARCADE_HELP_FAQ_BLOCK_USER_SET'					=> 'Options du profil',
	'ARCADE_HELP_FAQ_CAT_AGE_ANSWER'					=> 'Les administrateurs peuvent avoir rassemblé des jeux spécifiques pour les enfants dans une catégorie où seuls les enfants ont le droit de jouer. Il est possible aussi qu’une catégorie soit réservée aux adultes car les jeux qui y se trouvent, ne conviennent pas au public mineur.',
	'ARCADE_HELP_FAQ_CAT_AGE_QUESTION'					=> 'Certaines catégories sont protégées par une limite d’âge, pourquoi ?',
	'ARCADE_HELP_FAQ_CAT_PASSWORD_ANSWER'				=> 'Si une catégorie est protégée par un mot de passe, il faut envoyer une demande à un administrateur.',
	'ARCADE_HELP_FAQ_CAT_PASSWORD_QUESTION'				=> 'Que puis-je faire si la catégorie a besoin d’un mot de passe ?',
	'ARCADE_HELP_FAQ_CAT_STAT_ANSWER'					=> 'Oui, lorsque vous cliquez sur une catégorie, vous verrez à côté du nom de la catégorie un lien « Voir les statistiques de la catégorie ».',
	'ARCADE_HELP_FAQ_CAT_STAT_QUESTION'					=> 'J’aimerais voir les statistiques d’une catégorie en particulier, est-ce possible ?',
	'ARCADE_HELP_FAQ_CAT_USER_PERMISSION_ANSWER'		=> 'Dans la page d’une catégorie, vous pouvez voir tout en bas « Permissions », et en-dessous sont listées vos permissions.',
	'ARCADE_HELP_FAQ_CAT_USER_PERMISSION_QUESTION'		=> 'Quelles permissions ai-je ?',
	'ARCADE_HELP_FAQ_CHALLENGE_ACCEPT_ANSWER'			=> 'Si vous avez été défié, vous devez en premier lieu accepter le défi sur la page des défis, et ensuite lancer le jeu au même endroit. Ainsi le défi se déroulera de façon correcte.',
	'ARCADE_HELP_FAQ_CHALLENGE_ACCEPT_QUESTION'			=> 'J’ai reçu un défi, puis j’ai joué au jeu, mais pourquoi cela indique-t-il toujours que j’ai reçu un défi ?',
	'ARCADE_HELP_FAQ_CHALLENGE_ARRIVED_ANSWER'			=> 'Quelqu’un veut jouer contre vous à un jeu et vous a envoyé un défi. Vous pouvez accepter ou décliner.',
	'ARCADE_HELP_FAQ_CHALLENGE_ARRIVED_QUESTION'		=> 'Que signifie « défi reçu » ?',
	'ARCADE_HELP_FAQ_CHALLENGE_BUG_GAME_ANSWER'			=> 'Dans ce cas, veuillez utiliser le lien « Rapport de jeu ». Le défi sera annulé immédiatement et le coût sera remboursé.<br><i>Notez qu’il n’est pas possible de rapporter un bogue du jeu si un administrateur désactive le système de rapport de bogue.</i>',
	'ARCADE_HELP_FAQ_CHALLENGE_BUG_GAME_QUESTION'		=> 'On m’a défié mais le jeu est défectueux, que faire ?',
	'ARCADE_HELP_FAQ_CHALLENGE_DRAW_BET_ANSWER'			=> 'Si un défi se termine par un match nul, la mise sera reversée à tous utilisateurs ayant participé.',
	'ARCADE_HELP_FAQ_CHALLENGE_DRAW_BET_QUESTION'		=> 'Qu’advient-il de la mise quand le défi se termine par une égalité ?',
	'ARCADE_HELP_FAQ_CHALLENGE_END_ANSWER'				=> 'Chaque utilisateur sera averti par message privé si l’envoi de messages privés est activé.',
	'ARCADE_HELP_FAQ_CHALLENGE_END_QUESTION'			=> 'Comment savoir si un défi est terminé ?',
	'ARCADE_HELP_FAQ_CHALLENGE_EXP_TIME_ANSWER'			=> 'La date d’expiration est le moment où les défis sont automatiquement supprimés. Les défis doivent être acceptés avant cette échéance.',
	'ARCADE_HELP_FAQ_CHALLENGE_EXP_TIME_QUESTION'		=> 'Qu’est-ce que la date d’expiration ?',
	'ARCADE_HELP_FAQ_CHALLENGE_GAME_CHAMP_ANSWER'		=> 'Si vous jouez dans une fenêtre normale, vous pouvez voir des box sur le côté incluant la box intitulée « Options du jeu ». Dans cette box vous trouverez le lien « défier le champion ». Vous pouvez défier simplement le détenteur du record en cliquant sur ce lien. Il devra accepter le défi avant que le duel ne commence.',
	'ARCADE_HELP_FAQ_CHALLENGE_GAME_CHAMP_QUESTION'		=> 'Comment puis-je défier simplement le champion d’un jeu ?',
	'ARCADE_HELP_FAQ_CHALLENGE_ONGOING_ANSWER'			=> 'Ce sont des défis lancés, qui ont été acceptés, et qui peuvent maintenant être joués par les deux participants. Si une erreur est rapportée pour le jeu, le défi sera annulé.',
	'ARCADE_HELP_FAQ_CHALLENGE_ONGOING_QUESTION'		=> 'Que signifie « défis en cours » ?',
	'ARCADE_HELP_FAQ_CHALLENGE_PERMISSION_ANSWER'		=> 'Les défis ne sont visibles que s’ils sont activés, et que si l’administrateur vous a donné la permission.',
	'ARCADE_HELP_FAQ_CHALLENGE_PERMISSION_QUESTION'		=> 'Je ne peux pas voir les défis, pourquoi ?',
	'ARCADE_HELP_FAQ_CHALLENGE_POINTS_ANSWER'			=> 'Si un utilisateur vous a défié et qu’il a défini un enjeu, par exemple 100 points, alors la mise vous est déduite au moment où vous recevez le défi. Si, de plus, le jeu a un coût, de 5 points par exemple, ce sera aussi déduit. Le système déduira donc un total de 105 points de votre solde pour couvrir le coût total du défi. Dans le cas où vous déclinez le défi, la somme est immédiatement remboursée. Et même si le défi est accepté, mais que la partie n’est pas jouée ou bien que la date d’expiration est dépassée, alors la mise et le coût du jeu sont remboursés aussi.',
	'ARCADE_HELP_FAQ_CHALLENGE_POINTS_QUESTION'			=> 'On m’a défié et j’ai perdu beaucoup de mes points, pourquoi ?',
	'ARCADE_HELP_FAQ_CHALLENGE_PRACTICE_ANSWER'			=> 'Oui, tant que vous n’avez pas accepté le défi. Ensuite, une fois que le défi est accepté, il n’y a plus moyen de s’entraîner au jeu.',
	'ARCADE_HELP_FAQ_CHALLENGE_PRACTICE_QUESTION'		=> 'Je vais participer à un défi, y a-t-il une façon de s’entraîner avant ?',
	'ARCADE_HELP_FAQ_CHALLENGE_PREVENT_ANSWER'			=> 'Vous pouvez désactiver les défis dans votre profil.',
	'ARCADE_HELP_FAQ_CHALLENGE_PREVENT_QUESTION'		=> 'Comment empêcher qu’on me défie ?',
	'ARCADE_HELP_FAQ_CHALLENGE_SENT_ANSWER'				=> 'Ce sont les défis que vous avez lancés à d’autres utilisateurs. Ces duels peuvent être annulés par vous-même.',
	'ARCADE_HELP_FAQ_CHALLENGE_SENT_QUESTION'			=> 'Que signifie « défis envoyés » ?',
	'ARCADE_HELP_FAQ_CHALLENGE_START_ANSWER'			=> 'Dans la page des défis, cliquez sur le bouton « défis », puis définissez les paramétres du défi. La procédure comprend les options suivantes :
															<ul>
																<li>Sélectionner un jeu.</li>
																<li>Sélectionner un jeu favori. <em>Seulement possible si vous avez des jeux favoris.</em></li>
																<li>Choisir un adversaire.</li>
																<li>Choisir un ami. <em>Seulement possible si vous avez marqué des utilisateurs comme amis.</em></li>
															</ul>
															<br>Après que vous avez choisi le jeu et l’adversaire, vous pouvez envoyer la demande en cliquant sur le bouton « Envoyer le défi ». Pour commencer le défi, il faut que l’adversaire réponde.
															<br>Note : <em>Si un système de points est installé et activé, vous pouvez aussi opter pour un enjeu. La mise peut être choisie librement, ou bien elle peut être fixe et prédéfinie par l’administrateur.</em>',
	'ARCADE_HELP_FAQ_CHALLENGE_START_QUESTION'			=> 'Comment lance-t-on un défi ?',
	'ARCADE_HELP_FAQ_FAV_ANSWER'						=> 'Quand un jeu est mis en valeur comme jeu favori, il n’est plus nécessaire de faire une recherche parmi une multitude de jeux. Vous pourrez le trouver rapidement dans votre liste de jeux favoris et gagner ainsi beaucoup de temps.',
	'ARCADE_HELP_FAQ_FAV_HIGHLIGHT_ANSWER'				=> 'Vous disposez de l’option de marquer en surbrillance des jeux fréquemment utilisés dans votre liste de jeux favoris. Vous pouvez le faire dans votre profil.',
	'ARCADE_HELP_FAQ_FAV_HIGHLIGHT_QUESTION'			=> 'J’ai trop de jeux favoris. Comment pourrais-je trouver certains jeux plus aisément ?',
	'ARCADE_HELP_FAQ_FAV_LIMIT_ANSWER'					=> 'Enregistré le nombre maximum de favoris dans le jeu prédéfinit par l’administrateur. Par conséquent, vous ne pouvez pas ajouter plus de jeu favoris à moins que vous supprimez les favoris de jeu plus anciens. Ou, si vous pensez que la limite est trop petite, vous pouvez demander à un administrateur d’augmenter la limite si possible.',
	'ARCADE_HELP_FAQ_FAV_LIMIT_QUESTION'				=> '« Limiter l’erreur » lors de l’ajout d’un jeu préféré, qu’est-ce que cela signifie ?',
	'ARCADE_HELP_FAQ_FAV_QUESTION'						=> 'Quel est l’intérêt de donner à un jeu le statut de jeu favori ?',
	'ARCADE_HELP_FAQ_GENERAL_GAME_BUG_ANSWER'			=> 'Les jeux défectueux doivent être signalés à l’administrateur afin que le jeu puisse être réparé dès que possible. Chaque jeu contient un lien vers un rapport d’erreur à utiliser dans ce cas. L’utilisation du lien est importante car il contient également toutes les informations de jeu que nous n’avons pas à écrire séparément, juste le phénomène d’erreur qui se produit. Dans la description de l’erreur, il est recommandé d’indiquer dans quel navigateur l’erreur s’est produite, car il n’est pas certain que l’erreur se produise lors de l’utilisation d’un autre navigateur. Il convient également de décrire l’appareil sur lequel l’erreur s’est produite Ex : (PC, tablette ou mobile). Veuillez également spécifier la résolution de l’écran sur lequel vous jouez, car l’erreur peut ne pas se produire avec une autre résolution.<br><i>Notez qu’il n’est pas possible de rapporter un bogue du jeu si un administrateur désactive le système de rapport de bogue.</i>',
	'ARCADE_HELP_FAQ_GENERAL_GAME_BUG_QUESTION'			=> 'Que faire quand un jeu ne marche pas ?',
	'ARCADE_HELP_FAQ_GENERAL_GAME_DOWNLOAD_ANSWER'		=> 'Oui, si c’est permis par l’administrateur.',
	'ARCADE_HELP_FAQ_GENERAL_GAME_DOWNLOAD_QUESTION'	=> 'Peut-on télécharger des jeux ?',
	'ARCADE_HELP_FAQ_GENERAL_GAME_NAME_LINK_ANSWER'		=> 'Les noms des jeux sont affichés sous forme de lien, seulement quand vous êtes autorisé à jouer à ce jeu.',
	'ARCADE_HELP_FAQ_GENERAL_GAME_NAME_LINK_QUESTION'	=> 'La plupart des noms de jeux sont des liens, mais certains apparaissent comme du texte brut, pourquoi ?',
	'ARCADE_HELP_FAQ_GENERAL_GAME_RANDOM_ANSWER'		=> 'Un jeu au hasard, choisi par le système, est une magnifique opportunité, car il n’y a pas de catégorie spécifiée pour désigner le jeu. C’est la surprise assurée, qui évite la routine et l’ennui sur le long terme puisqu’on ne va pas jouer toujours au même type de jeu, par exemple.',
	'ARCADE_HELP_FAQ_GENERAL_GAME_RANDOM_QUESTION'		=> 'Qu’est-ce qu’un jeu au hasard ?',
	'ARCADE_HELP_FAQ_GENERAL_GAME_RATING_ANSWER'		=> 'L’évaluation des jeux est une fonction très pratique car elle facilite la recherche pour les utilisateurs. En effet, plus un jeu est noté et bien noté, plus sa statistique sera affichée en tête. Les utilisateurs trouvent donc plus facilement les jeux les mieux évalués.',
	'ARCADE_HELP_FAQ_GENERAL_GAME_RATING_QUESTION'		=> 'Qu’est-ce que l’évaluation des jeux ?',
	'ARCADE_HELP_FAQ_GENERAL_GAME_USER_STAT_ANSWER'		=> 'Si vous disposez des permissions pour utiliser les menus, vous pouvez cliquer sur l’onglet « statistiques » et sélectionner « participants » dans le menu déroulant.',
	'ARCADE_HELP_FAQ_GENERAL_GAME_USER_STAT_QUESTION'	=> 'Comment voir les statistiques de jeu des utilisateurs ?',
	'ARCADE_HELP_FAQ_GENERAL_RANG_LIST_ANSWER'			=> 'Les rangs tiennent compte du nombre de trophées gagnés. Plus l’utilisateur a de victoires, plus haut est son rang. L’administrateur du site définit les rangs et les images associées. Il les paramètre en fonction du nombre de trophées.',
	'ARCADE_HELP_FAQ_GENERAL_RANG_LIST_QUESTION'		=> 'Qu’est-ce qu’un rang ?',
	'ARCADE_HELP_FAQ_GENERAL_SUPER_CHAMP_ANSWER'		=> 'Le super champion est l’utilisateur avec le score le plus élevé du jeu. Le super champion n’a pas de trophée s’il n’est pas aussi premier. Si l’administrateur réinitialise l’arcade, vous avez la possibilité de conserver les super champions, ce qui vous donne la possibilité de voir quel a été le score le plus élevé jamais enregistré dans un jeu.',
	'ARCADE_HELP_FAQ_GENERAL_SUPER_CHAMP_QUESTION'		=> 'Qu’est-ce qu’un super champion ?',
	'ARCADE_HELP_FAQ_GENERAL_USER_RECORD_ANSWER'		=> 'Oui, pour cela il faut cliquer dans l’arcade sur l’avatar de l’utilisateur pour accéder à son panneau info utilisateur, et ensuite cliquer sur le lien « Voir tous les records de l’utilisateur » sous l’avatar.',
	'ARCADE_HELP_FAQ_GENERAL_USER_RECORD_QUESTION'		=> 'Puis-je voir les records d’un utilisateur ?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_EXPT_ANSWER'			=> 'Oui, il sera affiché après le début du tournoi.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_EXPT_RESULT_QUESTION'	=> 'La date d’expiration est-elle visible ?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_EXP_ANSWER'				=> 'Si le tournoi commence, vous recevrez un délai d’expiration, si le tournoi n’est pas terminé dans ce délai, il sera automatiquement supprimé.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_EXP_RESULT_QUESTION'	=> 'Un tournoi en cours a disparu, pourquoi ?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_PLAY_ANSWER'			=> 'Vous pouvez jouer au jeu après le début du tournoi. Si vous continuez à atteindre le niveau suivant, la partie suivante commencera si votre adversaire a également atteint ce niveau. Mais à chaque début de jeu, si le jeu participe à une compétition, vous verrez des informations.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_PLAY_RESULT_QUESTION'	=> 'Quand puis-je jouer au jeu du tournoi ?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_SCORE_ANSWER'			=> 'Oui, après que vous ayez tous les deux joué au jeu. Pour voir le score atteint, déplacez la souris sur l’avatar de votre adversaire et vous pouvez déjà voir le score atteint.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_SCORE_RESULT_QUESTION'	=> 'Puis-je voir le score de mon adversaire ?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_START_ANSWER'			=> 'Le tournoi démarre automatiquement lorsque toutes les places sont occupées.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_START_RESULT_QUESTION'	=> 'Quand commence le tournoi ?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_SUB_ANSWER'				=> 'Vous pouvez voir s’il y a un nouveau tournoi sur la page principale des tournois de groupe. Dans la structure de l’arborescence du tournoi, cliquez sur un emplacement vide dans la rangée du bas et vous êtes inscrit.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_SUB_RESULT_QUESTION'	=> 'Comment puis-je m’inscrire au tournoi de groupe ?',
	'ARCADE_HELP_FAQ_GROUP_TOUR_UNSUB_ANSWER'			=> 'Oui, mais seulement si le tournoi n’a pas encore commencé. Pour vous désinscrire, cliquez sur votre avatar dans l’espace occupé.',
	'ARCADE_HELP_FAQ_GROUP_TOUR_UNSUB_RESULT_QUESTION'	=> 'Existe-t-il un moyen de se désinscrire du tournoi ?',
	'ARCADE_HELP_FAQ_INTRO_ARCADE_ANSWER'				=> 'L’arcade offre du divertissement aux utilisateurs avec une multitude de jeux. L’autorisation d’utiliser l’arcade est déterminée par l’administrateur, mais certaines fonctionnalités peuvent également être activées/désactivées dans votre panneau d’utilisateur. Par conséquent, il peut être utile de lire le guide de l’utilisateur.',
	'ARCADE_HELP_FAQ_INTRO_ARCADE_QUESTION'				=> 'Qu’est-ce que l’arcade ?',
	'ARCADE_HELP_FAQ_INTRO_FUN_ANSWER'					=> 'L’arcade inclut de nombreuses fonctionnalités, qui ne sont disponibles que quand elles sont activées par l’administrateur.
															<br><strong>Fonctions :</strong>
															<ul>
																<li>Paramètres et personnalisation.</li>
																<li>Catégories de jeux.</li>
																<li>Afficher les nouveaux jeux.</li>
																<li>Jouer au hasard.</li>
																<li>Mémoriser et sélectionner des jeux favoris.</li>
																<li>Evaluer les jeux.</li>
																<li>Rechercher des jeux.</li>
																<li>Faire des rapports d’erreurs de jeu.</li>
																<li>Télécharger des jeux.</li>
																<li>Jouer dans une nouvelle fenêtre (popup).</li>
																<li>Jouer en plein écran.</li>
																<li>Changer la résolution des jeux.</li>
																<li>Option de rétroéclairage pour les jeux.</li>
																<li>Menu en jeu.</li>
																<li>Tournois avec plusieurs jeux entre plusieurs utilisateurs.</li>
																<li>Lancer des défis en duel aux autres utilisateurs sur un jeu.</li>
																<li>défier au hasard.</li>
																<li>Statistiques détaillées distinctes.</li>
																<li>Statistiques de jeu.</li>
																<li>Statistiques de l’utilisateur.</li>
																<li>Classement.</li>
																<li>Statistiques de catégorie.</li>
																<li>Intégration d’un système de points.</li>
																<li>Et plus encore…</li>
															</ul>',
	'ARCADE_HELP_FAQ_INTRO_FUN_QUESTION'				=> 'Quelles sont les fonctionnalités de phpBB Arcade ?',
	'ARCADE_HELP_FAQ_INTRO_REG_ANSWER'					=> 'Selon les paramètres de l’administrateur de l’arcade, l’inscription peut ne pas être nécessaire pour jouer aux jeux. Veuillez noter que si vous vous enregistrez et utilisez l’arcade, vous pourrez alors utiliser plusieurs fonctions supplémentaires. (Par exemple, enregistrez votre score et votre progression, commentez les jeux, enregistrez vos jeux en tant que favoris, évaluez les jeux, envoyez un défi à d’autres utilisateurs, ou rejoignez un tournoi commencé, et bien d’autres options amusantes) L’utilisation de ces fonctions est biensûr selon les paramètres de l’administrateur, certaines fonctions peuvent ne pas être disponibles pour vous.',
	'ARCADE_HELP_FAQ_INTRO_REG_QUESTION'				=> 'Pourquoi devrais-je m’enregistrer après tout ?',
	'ARCADE_HELP_FAQ_PLAYING_BACKLIGHT_ANSWER'			=> 'Le rétro-éclairage correspond aux lumières des champs autour du jeu. La désactivation du rétroéclairage a trois fonctionnalités utiles.
															<ul>
																<li>Le jeu tourne dans le confort d’une pièce obscure.</li>
																<li>Les boutons et les liens tout autour du jeu sont désactivés, ainsi on ne risque pas de cliquer accidentellement sur eux, ce qui évite le chargement d’une autre page pendant le jeu.</li>
																<li>Le défilement des pages web sera désactivé pour éviter tout défilement accidentel pendant le jeu.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_BACKLIGHT_QUESTION'		=> 'Qu’est-ce que le rétroéclairage ?',
	'ARCADE_HELP_FAQ_PLAYING_BOARD_LOGOUT_ANSWER'		=> 'Il y a deux raisons possibles à cela :
															<ul>
																<li>La raison la plus probable est que la session du forum a expiré.</li>
																<li>L’administrateur a supprimé toutes les sessions utilisateur.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_BOARD_LOGOUT_QUESTION'		=> 'Quand vous enregistrez des scores, le site me jette dehors, pourquoi ?',
	'ARCADE_HELP_FAQ_PLAYING_GAME_MAX_MIN_ANSWER'		=> 'Le jeu démarrera toujours à sa propre taille définie par l’administrateur. Cependant, le logiciel vérifie toujours si la taille de l’ensemble correspond à l’espace alloué au jeu. Si l’espace est plus petit, le logiciel détectera automatiquement la taille de l’espace visible et ajustera la taille du jeu en conséquence. Si vous activez « Redimensionner automatiquement le jeu » dans vos propres paramètres, le logiciel tiendra également compte du fait que si le champ de vision est plus grand que la taille définie du jeu, le jeu sera automatiquement ajusté à cette taille plus grande. En aucun cas, le logiciel ne laissera la taille du jeu disparaître, et pour une telle détection, le logiciel interviendra et redimensionnera le jeu.',
	'ARCADE_HELP_FAQ_PLAYING_GAME_MAX_MIN_QUESTION'		=> 'A quelle taille le jeu démarre-t-il ?',
	'ARCADE_HELP_FAQ_PLAYING_GAME_RESIZE_ANSWER'		=> 'Il y a deux raisons possibles à cela :
															<ul>
																<li>Le jeu a atteint la largeur ou la hauteur minimale autorisée, qui est de 180 pixels.</li>
																<li>Le jeu a atteint la plus grande taille qui tienne dans le champ de vision.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_GAME_RESIZE_QUESTION'		=> 'Pourquoi les boutons de redimensionnement ne fonctionnent-ils pas ?',
	'ARCADE_HELP_FAQ_PLAYING_HIDDEN_SCORE_ANSWER'		=> 'Ce jeu fait partie d’un défi. Le résultat reste caché pour les utilisateurs concernés, jusqu’à la fin du défi.',
	'ARCADE_HELP_FAQ_PLAYING_HIDDEN_SCORE_QUESTION'		=> 'Dans la liste des résultats est écrit le mot « caché », au lieu du score du champion, pourquoi ?',
	'ARCADE_HELP_FAQ_PLAYING_HSD_ANSWER'				=> 'Oui, il y en a. Dans votre configuration, activez la fonction « Jeu à zoom automatique » et le jeu démarrera à la plus grande taille possible.',
	'ARCADE_HELP_FAQ_PLAYING_HSD_QUESTION'				=> 'J’utilise un écran haute résolution et tous les jeux commencent petit, y at-il une solution ?',
	'ARCADE_HELP_FAQ_PLAYING_INFO_BLOCK_ANSWER'			=> 'Si le bloc d’informations n’est pas visible, il est peut-être verrouillé et doit être ouvert depuis le menu.',
	'ARCADE_HELP_FAQ_PLAYING_INFO_BLOCK_QUESTION'		=> 'Le blocage des informations est activé dans mes paramètres, mais pourquoi je ne le vois toujours pas ?',
	'ARCADE_HELP_FAQ_PLAYING_MENU_BUT_ANSWER'			=> 'Il y a un total de 12 boutons dans le menu, mais les boutons affichés dépendent de plusieurs facteurs.<br>Boutons du menu et dépendances :
															<ul>
																<li>1. Information - Indique s’il existe des informations sur l’un des éléments suivants : (description du jeu, contrôleur de jeu, commentaire du champion ou si nous sommes autorisés à afficher « Qui joue dans l’arcade ? »).</li>
																<li>2. Plein écran/normal - Toujours visible si pris en charge par votre navigateur.</li>
																<li>3. Meilleurs scores - affiché lorsque les statistiques sont activées et que des résultats existent.</li>
																<li>4. Options - Toujours visible, mais le contenu peut varier en fonction des paramètres d’autorisation.</li>
																<li>5. Classement du jeu - affiché si nous en avons l’autorisation.</li>
																<li>6. Ajouter/supprimer des favoris - affiché lorsque nous avons l’autorisation et que nous n’avons pas atteint la limite maximale.</li>
																<li>7. Faire pivoter le jeu - visible uniquement si les paramètres du jeu le permettent et que vous utilisez un appareil qui ne peut pas pivoter.</li>
																<li>8. Activer/désactiver le rétroéclairage - Toujours visible dans une fenêtre normale.</li>
																<li>9. Temps de jeu - Toujours visible.</li>
																<li>10. Redémarrer le jeu - Toujours visible.</li>
																<li>11. Effacer les données du jeu - C’est visible lorsque le logiciel détecte que le jeu utilise le stockage de données local du navigateur.</li>
																<li>12. Info block ouvert/fermé - Visible si activé dans nos paramètres.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_MENU_BUT_QUESTION'			=> 'Quels boutons sont dans le menu et quand sont-ils visibles ?',
	'ARCADE_HELP_FAQ_PLAYING_MENU_DATA_CLOSE_ANSWER'	=> 'Le champ de données peut être fermé des manières suivantes :
															<ul>
																<li>1. Vous cliquez sur le titre des données.</li>
																<li>2. Vous cliquez sur le menu.</li>
																<li>3. Double-cliquez sur le champ de données.</li>
																<li>4. Vous cliquez en dehors du champ de données.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_MENU_DATA_CLOSE_QUESTION'	=> 'Comment fermer un champ de données demandé dans le menu ?',
	'ARCADE_HELP_FAQ_PLAYING_MENU_OPEN_ANSWER'			=> 'Pour des raisons de sécurité, le menu est équipé d’une minuterie pour l’empêcher de s’ouvrir automatiquement pendant le jeu. Le menu s’ouvre si vous le maintenez enfoncé pendant au moins 0,5 seconde.',
	'ARCADE_HELP_FAQ_PLAYING_MENU_OPEN_QUESTION'		=> 'Même si je clique sur le menu, il ne s’ouvre pas, pourquoi ?',
	'ARCADE_HELP_FAQ_PLAYING_MOBILE_ANSWER'				=> 'Oui, tous les jeux peuvent être lancés sur un téléphone mobile. Cependant, si vous ne voulez jouer que sur un téléphone mobile, vous pouvez activer le filtrage des jeux de clavier dans vos paramètres de jeu, car vous ne pourrez de toute façon pas jouer à ces jeux sans clavier.',
	'ARCADE_HELP_FAQ_PLAYING_MOBILE_QUESTION'			=> 'Puis-je jouer sur un téléphone portable ?',
	'ARCADE_HELP_FAQ_PLAYING_NOT_PLAY_ANSWER'			=> 'Il peut y avoir plusieurs raisons :
															<ul>
																<li>Peut-être que votre navigateur n’a pas « JavaScript » installé, ou il est désactivé sur cette page.</li>
																<li>L’administrateur ne vous a pas accordé les permissions pour jouer.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_NOT_PLAY_QUESTION'			=> 'Je ne peux pas jouer, pourquoi ?',
	'ARCADE_HELP_FAQ_PLAYING_NOT_SAVE_SCORE_ANSWER'		=> 'Il peut y avoir plusieurs raisons :
															<ul>
																<li>Assurez-vous que votre navigateur accepte les « Cookies ».</li>
																<li>Vérifiez que vous êtes bien logué sur le site.</li>
																<li>Le jeu doit être lancé correctement.</li>
																<li>Le jeu est défectueux.</li>
																<li>L’administrateur ne vous a pas accordé les permissions pour sauvegarder le score.</li>
															</ul>',
	'ARCADE_HELP_FAQ_PLAYING_NOT_SAVE_SCORE_QUESTION'	=> 'Je ne peux pas sauvegarder mes scores, pourquoi ?',
	'ARCADE_HELP_FAQ_PLAYING_POPUP_ANSWER'				=> 'Oui, si c’est autorisé par l’administrateur.',
	'ARCADE_HELP_FAQ_PLAYING_POPUP_QUESTION'			=> 'Est-ce que je peux lancer les jeux dans une nouvelle fenêtre ?',
	'ARCADE_HELP_FAQ_PLAYING_RESET_GAME_DATA_ANSWER'	=> 'Si le jeu enregistre les données dans le stockage local du navigateur, il existe deux options pour supprimer les données. Si le jeu enregistre les données dans un autre stockage, ce qui est très rare, vous devez les rechercher manuellement et les supprimer du navigateur. Dans ce cas, si vous souhaitez supprimer les données d’un jeu intégré, vous devez vous rendre sur le site internet où se trouve le jeu et rechercher les données du jeu en question dans les données de navigation de ce site internet et les supprimer.<br>
Pour supprimer les données de sauvegarde locales du navigateur :
<ul>
	<li>Si vous jouez actuellement au jeu, ouvrez le menu et cliquez sur le bouton « Supprimer les données du jeu ».</li>
	<li>Dans le panneau de configuration de l’utilisateur, utilisez le module « Gérer le stockage local » et là, vous pouvez choisir les données de jeu que vous souhaitez supprimer.</li>
</ul>',
	'ARCADE_HELP_FAQ_PLAYING_RESET_GAME_DATA_QUESTION'	=> 'Existe-t-il un moyen de démarrer le jeu à partir de zéro  ?',
	'ARCADE_HELP_FAQ_PLAYING_RESTART_ANSWER'			=> 'Le lien « redémarrer le jeu » ne sera actif qu’après le début de la partie. Après utilisation, le bouton/lien peut être à nouveau inactif pendant une période déterminée par l’administrateur à quelle fréquence il peut être réutilisé.',
	'ARCADE_HELP_FAQ_PLAYING_RESTART_QUESTION'			=> 'Le lien redémarrer le jeu est inactif, pourquoi ?',
	'ARCADE_HELP_FAQ_PLAYING_SESSION_ANSWER'			=> 'Oui, vous avez la possibilité d’activer/désactiver l’affichage dans les paramètres d’arcade. De cette façon, vous pouvez voir combien de temps de jeu reste sur la page avant l’expiration de la session.<br>S’il vous reste peu de temps, vous pouvez vous déconnecter et vous reconnecter au site web avant de jouer.',
	'ARCADE_HELP_FAQ_PLAYING_SESSION_QUESTION'			=> 'Puis-je afficher les heures de session ?',
	'ARCADE_HELP_FAQ_PLAYING_WHITE_SCREEN_ANSWER'		=> 'Peut-être que le jeu est volumineux et il faut attendre qu’il se charge, en raison d’un ralentissement de la connexion internet. Cela peut être évité si nous ne désactivons pas l’utilisation des « préchargeurs » dans nos paramètres.',
	'ARCADE_HELP_FAQ_PLAYING_WHITE_SCREEN_QUESTION'		=> 'Le jeu affiche un écran tout blanc, pourquoi ?',
	'ARCADE_HELP_FAQ_POINTS_COST_ANSWER'				=> 'Le coût du jeu est la somme qui sera déduite du solde à chaque nouvelle partie. Veuillez noter que les coûts pour chaque jeu en particulier ou une catégorie peuvent être différents. La valeur du coût est définie par l’administrateur.',
	'ARCADE_HELP_FAQ_POINTS_COST_QUESTION'				=> 'Qu’est-ce que le coût du jeu ?',
	'ARCADE_HELP_FAQ_POINTS_DOWNLOAD_COST_ANSWER'		=> 'Le coût de téléchargement est la somme qui sera déduite du solde à chaque téléchargement de jeu. Veuillez noter que les coûts pour chaque jeu en particulier ou une catégorie peuvent être différents. La valeur du coût est définie par l’administrateur.',
	'ARCADE_HELP_FAQ_POINTS_DOWNLOAD_COST_QUESTION'		=> 'Qu’est-ce que le coût de téléchargement ?',
	'ARCADE_HELP_FAQ_POINTS_JACKPOT_ANSWER'				=> 'Le jackpot se constitue avec le coût du jeu. Pris au démarrage de chaque partie, les coûts de jeu s’accumulent dans un pôt. Le pôt augmente, jusqu’à ce que quelqu’un gagne le jackpot, ou bien que la limite soit atteinte. Les valeurs minimum et maximum du jackpot sont définies par l’administrateur.',
	'ARCADE_HELP_FAQ_POINTS_JACKPOT_QUESTION'			=> 'Qu’est-ce que le jackpot ?',
	'ARCADE_HELP_FAQ_POINTS_REWARD_ANSWER'				=> 'La récompense normalement existe dans deux cas : quand un record est obtenu, et quand le titre de super champion est gagné. Le montant de la récompense est défini par l’administrateur.',
	'ARCADE_HELP_FAQ_POINTS_REWARD_QUESTION'			=> 'Qu’est-ce que la récompense ?',
	'ARCADE_HELP_FAQ_POINTS_SYSTEM_ANSWER'				=> 'Un système de points est un changement complexe que l’administrateur peut ajouter pour l’utiliser dans le forum ou l’arcade. Lors de l’utilisation du système de points dans l’arcade, différents coûts et récompenses peuvent être utilisés.',
	'ARCADE_HELP_FAQ_POINTS_SYSTEM_QUESTION'			=> 'Qu’est-ce que le système de points ?',
	'ARCADE_HELP_FAQ_SEARCH_100PH_GAME_ANSWER'			=> 'Oui, si vous mettez un <strong>@</strong> devant le nom du jeu que vous cherchez.',
	'ARCADE_HELP_FAQ_SEARCH_100PH_GAME_QUESTION'		=> 'Je voudrais que le moteur de recherche ne fournisse que le nom du jeu identique, est-il possible ?',
	'ARCADE_HELP_FAQ_SEARCH_EXISTS_NOT_FOUND_ANSWER'	=> 'Il y a trois raisons possibles à cela :
															<ul>
																<li>Le jeu a été supprimé.</li>
																<li>Vous n’êtes plus autorisé à jouer à ce jeu.</li>
																<li>Une catégorie a été sélectionnée dans le moteur de recherche et le jeu n’y est pas répertorié. Dans ce cas, changez la sélection de catégorie en « Toutes les catégories ».</li>
															</ul>',
	'ARCADE_HELP_FAQ_SEARCH_EXISTS_NOT_FOUND_QUESTION'	=> 'Je recherche un jeu dont je sais qu’il existe, mais pourquoi le moteur de recherche ne l’affiche-t-il pas ?',
	'ARCADE_HELP_FAQ_SEARCH_GAME_ANSWER'				=> 'Si la fonction de recherche est activée, vous la trouverez au milieu du champ de recherche où vous pourrez entrer le nom du jeu. Vous pouvez également rechercher les lettres initiales du jeu, il suffit de cliquer sur la lettre initiale de la recherche. Vous pouvez également limiter votre recherche à une catégorie spécifique en sélectionnant simplement une catégorie. Si vous ouvrez une catégorie et que vous y utilisez le moteur de recherche, le moteur de recherche recherchera automatiquement dans cette catégorie. Vous pouvez bien sûr l’utiliser pour toutes les catégories.',
	'ARCADE_HELP_FAQ_SEARCH_GAME_QUESTION'				=> 'Comment puis-je trouver un jeu en particulier ?',
	'ARCADE_HELP_FAQ_SEARCH_SNIP_GAME_ANSWER'			=> 'Le moteur de recherche prend automatiquement en compte la fin des mots. Ainsi, si vous tapez <strong>pac</strong>, vous obtenez le jeu <strong>Pacman</strong>. Si vous tapez le mot <strong>pac</strong> pour obtenir le jeu <strong>Big Pacman</strong>, saisissez <strong>*</strong> à la fin du nom que vous recherchez.',
	'ARCADE_HELP_FAQ_SEARCH_SNIP_GAME_QUESTION'			=> 'Comment puis-je rechercher un jeu, si je ne connais pas son nom exact ?',
	'ARCADE_HELP_FAQ_TOUR_NO_RESULT_ANSWER'				=> 'Seuls les membres des groupes autorisés pour ce tournoi peuvent participer. Assurez-vous de bien faire partie d’un de ces groupes.',
	'ARCADE_HELP_FAQ_TOUR_NO_RESULT_QUESTION'			=> 'J’ai joué à un jeu, mais rien n’apparaît dans les résultats du tournoi, pourquoi ?',
	'ARCADE_HELP_FAQ_TOUR_PLAY_NUM_ANSWER'				=> 'Toute partie commencée est comptabilisée, indépendamment du fait que le score ait été enregistré ou pas. De plus, les résultats des jeux non sauvegardés seront 0.',
	'ARCADE_HELP_FAQ_TOUR_PLAY_NUM_QUESTION'			=> 'J’ai fait une partie à un jeu sans que le score ne soit sauvegardé. Pourtant, le nombre de parties jouées a quand même augmenté. Pourquoi ?',
	'ARCADE_HELP_FAQ_TOUR_PRACTICE_ANSWER'				=> 'Oui avant que le tournoi ne démarre mais, une fois qu’il a démarré, on ne peut plus s’entraîner, les parties aux jeux du tournoi comptent.',
	'ARCADE_HELP_FAQ_TOUR_PRACTICE_QUESTION'			=> 'Y a-t-il moyen de s’entraîner ?',
	'ARCADE_HELP_FAQ_TOUR_RIGHT_RESULT_ANSWER'			=> 'Si le nombre maximum de parties spécifié pour un jeu est atteint, il ne sera pris en compte aucun autre résultat dans le tournoi.',
	'ARCADE_HELP_FAQ_TOUR_RIGHT_RESULT_QUESTION'		=> 'J’ai rejoué une partie en améliorant mon résultat, mais cela n’a pas compté pour le tournoi, pourquoi ?',
	'ARCADE_HELP_FAQ_USER_SET_CAT_STYLE_ANSWER'			=> 'L’arcade peut se présenter sous différents styles, sous la forme de forums ou de tuiles arcade. Vous pouvez personnaliser à votre goût si l’administrateur le permet.',
	'ARCADE_HELP_FAQ_USER_SET_CAT_STYLE_QUESTION'		=> 'Qu’est-ce que le style de catégorie ?',
	'ARCADE_HELP_FAQ_USER_SET_CHALL_DISABLE_ANSWER'		=> 'Si vous ne voulez pas être défié en duel par des autres utilisateurs, vous pouvez choisir de désactiver cette fonction. Si vous cochez non, vous-même ne pourrez défier d’autres utilisateurs non plus. Veuillez noter que les défis peuvent aussi être désactivés pour tous les utilisateurs par l’administrateur.',
	'ARCADE_HELP_FAQ_USER_SET_CHALL_DISABLE_QUESTION'	=> 'Voulez vous désactiver les défis ?',
	'ARCADE_HELP_FAQ_USER_SET_CONFIG_ANSWER'			=> 'Si vous êtes enregistré, tous vos paramètres sont stockés dans la base de données. Pour les modifier, cliquez sur votre profil (généralement en haut de la page). Là vous pouvez changer tous vos paramètres.',
	'ARCADE_HELP_FAQ_USER_SET_CONFIG_QUESTION'			=> 'Comment changer mes paramètres ?',
	'ARCADE_HELP_FAQ_USER_SET_FAV_MANAGE_ANSWER'		=> 'Là on peut supprimer des jeux favoris qu’on avait ajoutés, ou les marquer en les mettant en surbrillance.',
	'ARCADE_HELP_FAQ_USER_SET_FAV_MANAGE_QUESTION'		=> 'Qu’est-ce que la gestion des jeux favoris ?',
	'ARCADE_HELP_FAQ_USER_SET_IMG_DISABLE_ANSWER'		=> 'Vous pouvez choisir de désactiver l’affichage des images, par exemple si le chargement des pages est trop lent.',
	'ARCADE_HELP_FAQ_USER_SET_IMG_DISABLE_QUESTION'		=> 'Voulez vous que les avatars des utilisateurs et les images des jeux ne s’affichent plus ?'
]);
