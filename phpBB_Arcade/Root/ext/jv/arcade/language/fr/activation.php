<?php
/**
*
* @package phpBB Arcade
* @version $Id: activation.php 173 2024-01-14 12:28:15Z KillBill $
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

$lang = array_merge($lang, [
	'ACP_PHPBB_ARCADE_SYSTEM_EXPLAIN'				=> '<legend>Description détaillée de l’activation</legend>
Les données envoyées lors de l’activation peuvent être utilisées pour déterminer le niveau d’état du site web « %2$s ».<br>
En outre, la clé d’activation spécifiée nous dira que le site affecté est actif ou juste une page web de test.<br><br>
<div>Données stockées après activation :</div>
<ul>
	<li>Propre identifiant phpBB Arcade</li>
	<li>Adresse du site web de l’activateur</li>
	<li>Numéro de version phpBB utilisé</li>
	<li>Numéro de version phpBB Arcade utilisé</li>
	<li>Date d’activation</li>
	<li>Clé d’activation</li>
	<li>Délai d’attente dépendant de l’activation pour ignorer la publicité</li>
	<li>Limite de jeu quotidienne en fonction de l’activation</li>
</ul>

<div>Données personnelles stockées après l’activation :</div>
<ul>
	<li>Nom d’utilisateur de l’activateur</li>
	<li>Adresse IP de l’activateur</li>
	<li>Adresse e-mail de l’activateur</li>
</ul>

<div>Les sites web enregistrés vous permettent de récupérer des données personnelles supplémentaires à partir du site web « %2$s » :</div>
<ul>
	<li>Nom d’utilisateur de la personne activatrice à « %2$s »</li>
	<li>Groupe de la personne activatrice à « %2$s »</li>
	<li>Adresse e-mail de la personne activatrice à « %2$s »</li>
</ul>

<div>Utilisation des données :</div>
<ul>
	<li>L’identifiant phpBB Arcade vous aide à permettre à votre site de s’identifier en toute sécurité.</li>
	<li>L’adresse web permet de vérifier si le site web est enregistré sur le site web « %2$s ».</li>
	<li>Sur la base des versions phpBB et phpBB Arcade, nous pouvons déterminer si le site web en question est conforme ou non.</li>
	<li>La clé d’activation déterminera à quoi le site web concerné a droit.</li>
	<li>Le temps d’attente de la publicité est le temps pendant lequel l’utilisateur est autorisé à ignorer la publicité.</li>
	<li>La limite de parties quotidiennes limite le nombre de parties pouvant être jouées par jour. Une fois la limite atteinte, plus aucune partie ne peut être jouée ce jour-là</li>
</ul>

<div>Utilisation des données personnelles :</div>
<ul>
	<li>Le nom d’utilisateur permet de déterminer si l’utilisateur concerné est connu sur le « %2$s » site web.</li>
	<li>Nous utilisons l’adresse IP si l’utilisateur a enfreint une loi ou commis un crime.</li>
	<li>L’adresse e-mail est utilisée lorsque nous avons besoin de contacter l’utilisateur concerné.</li>
</ul>

<br>

<h2>Description détaillée de JVA Game Intro</h2>
<hr>
<div>Fonctions d’administrateur :</div>
<ul>
	<li>Le « JVA Game Intro » permet un certain nombre de paramètres. Tout d’abord, vous pouvez choisir si vous voulez voir l’introduction ou non. Si l’affichage n’est pas désiré, le jeu se charge immédiatement.</li>
	<li>Vous pouvez également définir votre logo, pour lequel il existe trois options :
		<ol>
			<li>Le logo de base apparaît.</li>
			<li>Vous pouvez créer un logo texte qui surécrit le logo de base.</li>
			<li>Vous pouvez créer votre propre logo, appelé « logo.png » et le télécharger dans « [root]/arcade/assets/images/ » qui remplace tout.</li>
		</ol>
	</li>
	<li>Beaucoup de jeux sont très grands. Ils peuvent être jusqu’à 100 Mio. Pour cette raison, l’utilisateur peut ne voir qu’une page blanche se charger pendant longtemps et pensé que le jeu est cassé. Pour éviter cela, vous pouvez activer l’indicateur de chargement des jeux afin que vous puissiez voir que le jeu est toujours en cours de chargement.<br>
		<strong>Commentaire :</strong> Le jeu ne sera téléchargé que dans le cache du navigateur. Si le cache du navigateur n’est pas activé, le jeu sera chargé deux fois, donc cette procédure ne fera que ralentir le lancement des jeux.<br>
		<em>Cette fonctionnalité est inutile si vous désactivez le cache du navigateur.</em>
	</li>
	<li>Vous pouvez définir le nombre de meilleurs scores à afficher, et cette valeur peut être comprise entre 0 et 10.<br><br>
		<em class="arcade_attent">Veuillez noter que ces paramètres ne peuvent être utilisés qu’avec un système activé par une clé privée. Ces paramètres ne sont pas disponibles sur un système activé par une clé gratuite.</em>
	</li>
</ul>

<div>Fonctions de l’utilisateur :</div>
<ul>
	<li>Le « JVA Game Intro » permet aux utilisateurs de voir les descriptions de jeux, les commandes et le tableau de bord actuel avant de commencer le jeu.</li>
	<li>Affiche jusqu’à 10 utilisateurs et le super champion actuel.</li>
</ul>

<br>

<h2>« %1$s » Fonctionnalités de communication</h2>
<hr>
<ul>
	<li><span>Une connexion est établie avec le site web « %1$s » lorsqu’un jeu est lancé.</span>
		<div><span>La connexion enverra les données suivantes :</span></div>
		<ol>
			<li>Le propre identifiant phpBB Arcade encodé (format de hash à sens unique).</li>
			<li>La version actuelle de « JVA Game Intro ».</li>
			<li>Adresse codée (PHP Base64) du site web qui utilise le logiciel.</li>
			<li>La clé d’activation codée (format de hash à sens unique) de « phpBB Arcade ».</li>
			<li>La version actuelle de phpBB Arcade.</li>
			<li>La version actuelle de phpBB.

				<br><br>

				<div><span>Le rôle des données à envoyer :</span></div>
				<ol>
					<li>L’identifiant phpBB Arcade nous aide à identifier votre site en toute sécurité.</li>
					<li>La vérification de la version « JVA Game Intro » permet d’envoyer un avertissement si vous n’utilisez pas une version compatible ou si une nouvelle version est sortie.</li>
					<li>L’adresse du site web est très importante car, sur cette base, nous pouvons renvoyer les informations dont nous avons besoin.</li>
					<li>En savoir plus sur le rôle de la clé d’activation :
						<ol>
							<li>Le logiciel activé « Gratuit » peut avoir un temps d’attente et d’affichage de publicités, ainsi qu’une limitation du nombre de jeux joués par jour.<br>
								Le temps d’attente s’active et peut être déterminé par le « %2$s ».<br>
								Le nombre maximum de jouer est activé et peut être déterminé par le « %2$s ».<br>
								La clé « Gratuit » n’a pas de date d’expiration.
							</li>
							<li>Une clé privée peut avoir une date d’expiration ou une version phpBB Arcade particulière. Le logiciel activé avec une clé privée bénéficie d’une liberté totale de publicité. <em>Cela ne s’applique qu’à « JVA Game Intro »</em>.<br>De plus, les sites web qui utilisent une clé privée ne sont pas soumis à la limite de nombre de fois pour jouer quotidienne.</li>
						</ol>
					</li>
					<li>Vérifier la version de phpBB Arcade est également très importante pour que le « JVA Game Intro » est compatible avec la version donnée.</li>
				</ol>
			</li>
		</ol>
	</li>
	<li>Avec ces options de communication, le nombre de fois où les jeux sont démarrés est stocké et transféré à une statistique. Sur la base de ces statistiques, le classement actuel de ce site web est déterminé. Pour plus d’informations <a onclick="window.open(this.href); return false;" href="%5$s"><strong>» ICI «</strong></a>.</li>
	<li>Si de la publicité est envoyée depuis notre site web ou si une période d’attente est définie, elle est définie de manière à ce qu’elle apparaisse avant le début du jeu. Si le « JVA Game Intro » n’est pas activé, il est automatiquement activé.</li>
	<li>Si le nombre de fois pour jouer par jour est limité, aucun autre jeu ne peut être joué ce jour-là sur des sites web dépassant la valeur maximale.</li>
	<li>Ces informations sont renvoyées de deux manières :
		<ol>
			<li>Le site web « %1$s » vous renvoient des informations de mise à jour fluide. Il apparaît dans « JVA Game Intro ». Ces informations ne seront visibles que par les fondateurs et ne bloqueront pas le jeu.</li>
			<li>Informations globales, qui utilisent l’interface complète « JVA Game Intro », donc ces informations ne permettent pas de continuer à jouer.
				<div><span>Les raisons de l’apparition d’une information globale :</span></div>
				<ol>
					<li>Une mise à jour instantanée est nécessaire.</li>
					<li>Si un type de jeu n’est pas pris en charge.</li>
					<li>Si un site web atteint la limite pour jouer quotidienne.</li>
					<li>La clé d’activation a expiré. Dans ce cas, vous devez réactiver le logiciel. Dans le PCA choisissez « Test » ou « Gratuit », si vous avez une nouvelle clé privée, vous pouvez l’utiliser.</li>
					<li>L’utilisateur du logiciel enfreint le <strong>« <a onclick="window.open(this.href); return false;" href="%4$s" title="GHV Licenc">license</a> »</strong>, ou un site web <strong>non-enregistré</strong> est utilisé. Dans les deux cas, l’utilisation du logiciel peut être désactivée.</li>
				</ol>
			</li>
		</ol>
	</li>
	<li>Le « %1$s » peut renvoyer les informations suivantes :
		<ol>
			<li>Verifier les sites web.</li>
			<li>Temps d’attente.</li>
			<li>Publicités.</li>
			<li>Renvoie les informations de mise à jour.</li>
			<li>Retour d’information globale.</li>
			<li>Le « %2$s » indique qu’il ne peut ni ne veut effectuer de modifications de base de données implémentée dans d’autres sites web lors de la connexion ! Il est très important d’avoir 100%% de sécurité entre les deux serveurs lors de la connexion. <br>Par conséquent, le logiciel ne peut être activé que par le fondateur du site web.</li>
		</ol>
	</li>
	<li>Le « JVA Game Intro » n’est pas pris en charge sur localhost, mais le logiciel peut être exécuté. Sur localhost, le temps d’attente est fixé à 5 secondes par défaut.</li>
</ul>',
	'ACP_PHPBB_ARCADE_SYSTEM_INSTRUCTION'			=> 'Instructions phpBB Arcade',
	'ACP_PHPBB_ARCADE_SYSTEM_INSTRUCTION_EXPLAIN'	=> 'Le logiciel « phpBB Arcade » est <a onclick="window.open(this.href); return false;" href="%3$s" title="JVA License">license</a> et entretenu par le « %1$s » site web.'
]);
