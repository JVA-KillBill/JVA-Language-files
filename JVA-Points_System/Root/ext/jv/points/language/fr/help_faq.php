<?php
/**
*
* @package JVA - Points System
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

$lang = array_merge($lang, array(
	'JV_POINTS_HELP_FAQ_BLOCK_GENERAL'						=> 'Questions générales',
	'JV_POINTS_HELP_FAQ_BLOCK_INTRO'						=> 'Introduction',
	'JV_POINTS_HELP_FAQ_GENERAL_POST_REWARD_ANSWER'			=> 'Si votre nouveau message doit être approuvé par un modérateur, vous ne recevrez la récompense qu’après approbation.',
	'JV_POINTS_HELP_FAQ_GENERAL_POST_REWARD_MOD_ANSWER'		=> 'Si un nouveau message a des frais et est rejeté pour une raison quelconque, les frais ne seront pas remboursés.',
	'JV_POINTS_HELP_FAQ_GENERAL_POST_REWARD_MOD_QUESTION'	=> 'J’ai envoyé un nouveau message qui a été rejeté par un modérateur mais je n’ai pas été remboursé, pourquoi ?',
	'JV_POINTS_HELP_FAQ_GENERAL_POST_REWARD_QUESTION'		=> 'J’ai envoyé un nouveau message mais je n’ai pas reçu la récompense, pourquoi ?',
	'JV_POINTS_HELP_FAQ_GENERAL_SAME_REWARD_COST_ANSWER'	=> 'Si un tel réglage est effectué par accident, le résultat sera nul.',
	'JV_POINTS_HELP_FAQ_GENERAL_SAME_REWARD_COST_QUESTION'	=> 'Que se passe-t-il si la récompense et le coût ont la même valeur ?',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_ANSWER'			=> 'Oui, si votre administrateur vous autorise à l’utiliser.',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_COST_ANSWER'		=> 'Oui, mais seulement si l’administrateur fixe un certain montant pour cela. Les frais peuvent représenter un certain pourcentage du montant à transférer.',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_COST_QUESTION'		=> 'Y a-t-il des frais associés à mon transfert ?',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_ELOG_ANSWER'		=> 'Si vous ne voyez plus les entrées du journal, elles ont été supprimées par un administrateur.',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_ELOG_QUESTION'		=> 'Mes entrées de journal sont manquantes, pourquoi?',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_LOG_ANSWER'		=> 'Oui, il existe une entrée de journal pour chaque transfert qui peut être consultée dans le journal des transferts.',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_LOG_QUESTION'		=> 'Les transferts sont-ils à suivre ?',
	'JV_POINTS_HELP_FAQ_GENERAL_TRANSFER_QUESTION'			=> 'Est-il possible de transférer un certain montant à un autre utilisateur ?',
	'JV_POINTS_HELP_FAQ_INTRO_MODULES_ANSWER'				=> 'Le système de points contient un certain nombre de modules, mais seuls les modules activés et activés par l’administrateur sont disponibles.
															<br><br><strong>Modules:</strong>
															<ul>
																<li><strong>Aperçu</strong> - Ici vous pouvez voir les utilisateurs avec le solde le plus élevé, ainsi que notre propre solde actuel.</li>
																<li><strong>Des renseignements généraux</strong> - Ici vous pouvez lire les paramètres actuels, pourquoi il y a des récompenses et quels sont les coûts.</li>
																<li><strong>Transfers</strong> - Ici, vous avez la possibilité de transférer un certain montant à un autre utilisateur.</li>
																<li><strong>Journal de transfert</strong> - Ici vous pouvez voir les transactions de transfert.</li>
																<li><strong>Guide</strong></li>
															</ul>',
	'JV_POINTS_HELP_FAQ_INTRO_MODULES_QUESTION'				=> 'De quels modules se compose le système de points ?',
	'JV_POINTS_HELP_FAQ_INTRO_SYSTEM_ANSWER'				=> 'Le système de points permet aux utilisateurs de gagner certaines récompenses ou d’utiliser ce montant à certains endroits. L’administrateur peut déterminer comment vous obtenez un certain montant, donc à quoi il peut être utilisé. Cependant, vous pouvez trouver le guide suivant utile.',
	'JV_POINTS_HELP_FAQ_INTRO_SYSTEM_QUESTION'				=> 'C’est quoi le système de points ?',
));
