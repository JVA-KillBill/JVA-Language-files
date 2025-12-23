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
	'JV_POKER'							=> 'Poker',
	'JV_POKER_ALL'						=> 'Tous',
	'JV_POKER_AMOUNT'					=> 'Montant',
	'JV_POKER_AMOUNT_BALANCE_ERROR'		=> 'Le montant que vous indiquez est supérieur à votre solde.',
	'JV_POKER_AMOUNT_TOO_SMALL_ERROR'	=> 'Le montant spécifié est trop petit.',
	'JV_POKER_ARCHIVE_REFRESH'			=> 'Rafraîchissement de l’archive',
	'JV_POKER_BALANCE'					=> 'Chips : <strong>%s</strong>',
	'JV_POKER_BUY_IN'					=> 'Buy-in',
	'JV_POKER_CHAIR'					=> 'Chaise',
	'JV_POKER_CHIPS'					=> 'Chips',
	'JV_POKER_CHIPS_BALANCE'			=> 'Solde de chips : <strong class="jv_poker_balance">%s</strong>',
	'JV_POKER_CHIPS_EXCHANGE'			=> 'Échange de chips',
	'JV_POKER_CHIPS_EXCHANGE_EXPLAIN'	=> 'Entrez le montant que vous échangez contre des chips.',
	'JV_POKER_CHIPS_EXCHENGE_COST'		=> 'De plus, le coût de %s a été déduit de votre solde %s.',
	'JV_POKER_CHIPS_EXCHENGE_SUCCESS'	=> '%s chips ont été échangés avec succès.',
	'JV_POKER_CHIPS_FORMAT'				=> 'KMBT',
	'JV_POKER_CHIPS_PF'					=> 'chips : %s',
	'JV_POKER_COMMENT'					=> 'Commenter',
	'JV_POKER_DAILY_GIFT'				=> 'Cadeau quotidien poker',
	'JV_POKER_ENTRY_FEE'				=> 'Buy-in',
	'JV_POKER_EXCHANGE_COST'			=> 'Frais de change : %s%%.',
	'JV_POKER_EXCHANGE_COST_ERROR'		=> 'Le montant spécifié et les frais associés sont supérieurs à votre solde. Le montant de conversion maximal est %s.',
	'JV_POKER_EXCHANGE_TYPE_CHIPS'		=> '%s » chips',
	'JV_POKER_EXCHANGE_TYPE_POINTS'		=> 'Chips » %s',
	'JV_POKER_FAQ'						=> 'Guide du poker',
	'JV_POKER_FAQ_VIEWING'				=> 'Voir le guide du poker',
	'JV_POKER_FIX_LIMIT'				=> 'Fixer la limite',
	'JV_POKER_GAME_INFO'				=> 'Informations sur le jeu',
	'JV_POKER_GAME_TIME'				=> 'Temps de jeu',
	'JV_POKER_GET_IT'					=> 'Obtient le',
	'JV_POKER_HI_JP_WIN'				=> '{color}%s{/color} vient de gagner{color}%d{/color}des chips du JackPot.',
	'JV_POKER_HI_TOUR_START'			=> 'Attention ! Le tournoi de poker commence dans moins de %s minutes !',
	'JV_POKER_INDEX'					=> 'Poker index',
	'JV_POKER_KEYWORDS'					=> 'phpBB, holdem, poker',
	'JV_POKER_LARGEST_POT_WON'			=> 'Le plus gros Pot gagne : <strong>%s</strong>',
	'JV_POKER_LAST_PLAY'				=> 'Dernière partie : <strong>%s</strong>',
	'JV_POKER_LEADERS'					=> 'Gagnants de poker',
	'JV_POKER_LEARNER'					=> 'Apprenant',
	'JV_POKER_LEARNER_ROOM'				=> 'Salle des apprenants',
	'JV_POKER_LEARNER_ROOMS'			=> 'Salles des apprenants',
	'JV_POKER_LEAST_PLAYED_USERS'		=> 'Utilisateurs qui jouent le moins',
	'JV_POKER_LIMIT'					=> 'Limite',
	'JV_POKER_LOBBY'					=> 'Lobby',
	'JV_POKER_LOCKED'					=> 'Verrouillé',
	'JV_POKER_LONGEST_PLAYTIME'			=> 'Temps de jeu le plus long',
	'JV_POKER_MOST_PLAYED_USERS'		=> 'Utilisateurs qui jouent le plus',
	'JV_POKER_MOVETIME'					=> 'Temps de déplacement',
	'JV_POKER_MSG_DELETE'				=> 'Supprimer le message',
	'JV_POKER_MSG_DELETE_NO_PERMISSION'	=> 'Vous n’êtes pas autorisée à supprimer ce message.',
	'JV_POKER_MSG_DELETE_SUCCESS'		=> 'Message supprimé avec succès.',
	'JV_POKER_NLOSE'					=> [
		1								=> 'Jeu perdue : <strong>%s</strong>',
		2								=> 'Jeux perdus : <strong>%s</strong>'
	],
	'JV_POKER_NORMAL'					=> 'Normale',
	'JV_POKER_NORMAL_ROOM'				=> 'Salle normale',
	'JV_POKER_NORMAL_ROOMS'				=> 'Salles normaux',
	'JV_POKER_NOT_FOUND_ROOM'			=> 'La salle demandée n’a pas été trouvée !',
	'JV_POKER_NOT_PLAYING'				=> 'Ne joue pas',
	'JV_POKER_NO_CHAMPION'				=> 'Il n’y a actuellement aucun champion.',
	'JV_POKER_NO_LIMIT'					=> 'Pas de limite',
	'JV_POKER_NO_PERMISSION'			=> 'Vous n’avez pas la permission d’utiliser le poker.',
	'JV_POKER_NO_ROOM'					=> 'Il n’y a actuellement aucune salle de poker',
	'JV_POKER_NO_ROOM_ID'				=> 'L’ID de salle demandé n’existe pas !',
	'JV_POKER_NO_STATS_DATA'			=> 'Il n’y a pas de données statistiques disponibles.',
	'JV_POKER_NO_STYLE'					=> 'Le style utilisé dans cette pièce n’existe pas !',
	'JV_POKER_NO_USER_STATS'			=> 'Aucune statistique n’est disponible pour L’utilisateur que vous recherchez.',
	'JV_POKER_NWON'						=> [
		1								=> 'Partie gagnée : <strong>%s</strong>',
		2								=> 'Parties gagnées : <strong>%s</strong>'
	],
	'JV_POKER_PARTICIPANTS'				=> 'Participants',
	'JV_POKER_PLACE'					=> '%s. place',
	'JV_POKER_PLAYED'					=> 'Joué',
	'JV_POKER_PLAYED_NPARTY'			=> [
		1								=> 'Joué en jeu : <strong>%s</strong>',
		2								=> 'Joué à des jeux : <strong>%s</strong>'
	],
	'JV_POKER_PLAYED_VPARTY'			=> [
		1								=> 'Joué en tournoi : <strong>%s</strong>',
		2								=> 'Joué en tournois : <strong>%s</strong>'
	],
	'JV_POKER_PLAYING'					=> 'Jouer',
	'JV_POKER_PLAYING_ROOMS_USER'		=> 'Il y a actuellement %s salles utilisées, avec un total de %s utilisateur.',
	'JV_POKER_PLAYING_ROOMS_USERS'		=> 'Il y a actuellement %s salles utilisées, avec un total de %s utilisateurs.',
	'JV_POKER_PLAYING_ROOM_USER'		=> 'Il y a actuellement %s salle en cours d’utilisation, avec un total de %s utilisateur.',
	'JV_POKER_PLAYING_ROOM_USERS'		=> 'Il y a actuellement %s salle en cours d’utilisation, avec un total de %s utilisateurs.',
	'JV_POKER_PLAYING_TIMES'			=> 'Temps total joué : <strong>%s</strong>',
	'JV_POKER_POINTS_BALANCE'			=> '%s solde : <strong>%s</strong>',
	'JV_POKER_POINTS_EXCHANGE_EXPLAIN'	=> 'Entrez le montant que vous souhaitez convertir %s.',
	'JV_POKER_POINTS_EXCHENGE_SUCCESS'	=> '%1$s %2$s ont été échangés avec succès.',
	'JV_POKER_PRACTICE'					=> 'Pratiquer',
	'JV_POKER_PRACTICE_ROOM'			=> 'Salle de pratique',
	'JV_POKER_PRACTICE_ROOMS'			=> 'Salles de pratique',
	'JV_POKER_PRIVATE'					=> 'Privé',
	'JV_POKER_PRIZE'					=> 'Prix',
	'JV_POKER_RANK'						=> 'Classement',
	'JV_POKER_RETURN_EXCHENGE_PAGE'		=> '%sRetour à la page d’échange de chips.%s',
	'JV_POKER_RETURN_INDEX_PAGE'		=> '%sRetour à la page principale du poker.%s',
	'JV_POKER_ROOM'						=> 'Salle de poker',
	'JV_POKER_ROOMS_VIEWING'			=> 'Visualisation des salles de poker',
	'JV_POKER_ROOM_DISABLED'			=> 'Le poker est actuellement désactivé.',
	'JV_POKER_ROOM_NAME'				=> 'Nom',
	'JV_POKER_ROOM_PLAYERS'				=> 'Membres/Chaises',
	'JV_POKER_ROOM_PLAYING_USERS'		=> 'Dans la salle <strong>%s</strong> en train de jouer : %s',
	'JV_POKER_ROOM_PLAY_USERS'			=> '%1$s / %2$s',
	'JV_POKER_ROOM_STATUS'				=> 'Statut',
	'JV_POKER_ROOM_TYPE'				=> 'Type',
	'JV_POKER_ROOM_VIEWING'				=> 'Visionner la salle de poker %s',
	'JV_POKER_ROOM_WAIT_USERS'			=> 'Dans la salle <strong>%s</strong> en attente : %s',
	'JV_POKER_RULES'					=> 'Règles du poker',
	'JV_POKER_SELECT_EXCHANGE_TYPE'		=> 'Sélectionnez ce que vous souhaitez échanger',
	'JV_POKER_SHORTEST_PLAYTIME'		=> 'Temps de jeu le plus court',
	'JV_POKER_SHOUT_ARCHIVE'			=> 'Archive du shoutbox',
	'JV_POKER_SHOUT_ARCHIVE_NO_MSG'		=> 'Il n’y a actuellement aucun message à afficher.',
	'JV_POKER_SHOUT_ROOM_ARCHIVE'		=> 'Salle de Poker %s shoutbox archive',
	'JV_POKER_SMALL_BIG_BLIND'			=> 'Petite/grande blind',
	'JV_POKER_STAT'						=> 'Statistiques',
	'JV_POKER_STATS'					=> 'Statistiques de Poker',
	'JV_POKER_STATS_ALLINS'				=> [
		1								=> 'Nombre total tout compris : <strong>%s</strong>',
		2								=> 'Les totaux tout compris : <strong>%s</strong>'
	],
	'JV_POKER_STATS_CALLS'				=> [
		1								=> 'Nombre total de call saisis : <strong>%s</strong>',
		2								=> 'Les totaux de calls saisis : <strong>%s</strong>'
	],
	'JV_POKER_STATS_CHECKS'				=> [
		1								=> 'Nombre total de check saisis : <strong>%s</strong>',
		2								=> 'Les totaux de checks saisis : <strong>%s</strong>'
	],
	'JV_POKER_STATS_FOLDS'				=> [
		1								=> 'Nombre total de cartes fold saisies : <strong>%s</strong>',
		2								=> 'Les totaux de cartes fold saisies : <strong>%s</strong>'
	],
	'JV_POKER_STATS_NO_PERMISSION'		=> 'Vous n’êtes pas autorisé à consulter les statistiques de poker.',
	'JV_POKER_STATS_PLAYS'				=> [
		1								=> 'joue %s partie.',
		2								=> 'joues %s parties.'
	],
	'JV_POKER_STATS_PLAYS_TOURS'		=> [
		1								=> 'joue %s tournoi.',
		2								=> 'joues %s tournois.'
	],
	'JV_POKER_STATS_RAISES'				=> [
		1								=> 'Nombre total de raise saisis : <strong>%s</strong>',
		2								=> 'Les totaux des raises saisies : <strong>%s</strong>'
	],
	'JV_POKER_STATS_VIEWING'			=> 'Affichage des statistiques de poker',
	'JV_POKER_STATS_WON_TOURS'			=> [
		1								=> 'tournoi gagné %s',
		2								=> 'tournois gagnés %s'
	],
	'JV_POKER_TOTAL_DATA'				=> 'Un total de <strong>%s</strong> utilisateurs ont joué un total de <strong>%s</strong> mains.<br>Temps total passé à jouer <strong>%s</strong>',
	'JV_POKER_TOTAL_DATA_CHIPS'			=> 'Total des chips : <strong>%s</strong>',
	'JV_POKER_TOTAL_MSG'				=> 'Total des messages %s',
	'JV_POKER_TOTAL_TOURS'				=> 'Total du tournois (%s)',
	'JV_POKER_TOURNAMENT'				=> 'Tournoi',
	'JV_POKER_TOURNAMENT_ROOM'			=> 'Salle de tournoi',
	'JV_POKER_TOURNAMENT_ROOMS'			=> 'Salles de tournoi',
	'JV_POKER_TOUR_END'					=> 'Fin',
	'JV_POKER_TOUR_LEADERS'				=> 'Gagnants de tournois de poker',
	'JV_POKER_TOUR_START'				=> 'Démarrer',
	'JV_POKER_TOUR_STATS'				=> 'Statistiques du tournoi',
	'JV_POKER_TOUR_STATS_VIEWING'		=> 'Affichage des statistiques du tournoi de poker',
	'JV_POKER_UNKNOWN'					=> 'Inconnu',
	'JV_POKER_UNLOCKED'					=> 'Déverrouillé',
	'JV_POKER_USER_INFO'				=> 'Informations utilisateur',
	'JV_POKER_USER_STAT'				=> 'Statistiques utilisateurs',
	'JV_POKER_USER_STATS'				=> '%s statistiques de poker',
	'JV_POKER_USER_STATS_VIEWING'		=> 'Affichage des statistiques de poker %s',
	'JV_POKER_VIEW_MEMBER_PROFILE'		=> 'Voir le profil utilisateur',
	'JV_POKER_VIEW_STAT'				=> 'Voir les statistiques du poker',
	'JV_POKER_VIEW_STATS'				=> 'Voir les statistiques',
	'JV_POKER_VIEW_USER_STATS'			=> 'Afficher les statistiques des utilisateurs',
	'JV_POKER_VLOSE'					=> [
		1								=> 'Tournoi perdu : <strong>%s</strong>',
		2								=> 'Tournois perdus : <strong>%s</strong>'
	],
	'JV_POKER_VWON'						=> [
		1								=> 'Tournoi gagné : <strong>%s</strong>',
		2								=> 'Tournois gagnés : <strong>%s</strong>'
	],
	'JV_POKER_WAITING'					=> 'En attente',
	'JV_POKER_WELCOME'					=> 'Bienvenue dans la salle de poker %s !',
	'JV_POKER_WHO_IS_PLAYING'			=> 'Qui joue dans les salles de poker ?',
	'JV_POKER_WINNER'					=> 'Gagnant',
	'JV_POKER_WONS_RATE'				=> 'Ratio de gains : <strong>%s%%</strong>',
	'JV_POKER_WON_PARTY'				=> [
		1								=> 'Partie poker gagnée',
		2								=> 'Parties poker gagnées'
	],
	'JV_POKER_WON_TOUR'					=> [
		1								=> 'Tournoi de poker gagné',
		2								=> 'Tournois de poker gagnés'
	],
]);
