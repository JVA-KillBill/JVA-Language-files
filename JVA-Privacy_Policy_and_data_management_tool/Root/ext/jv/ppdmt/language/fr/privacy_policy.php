<?php
/**
*
* @package JVA - Privacy Policy and data management tool
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
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page « %1$s » of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// Some characters you may want to copy&paste: ‚ ‘ ’ « » „ “ ” …

/*
%1$s :: Website name
%2$s :: Controller name
%3$s :: Contact email address
%4$s :: Phone number of the controller
%5$s :: Description of cookies in use
%6$s :: Added plus one line if we disable cookies for guests
*/

$lang = array_merge($lang, [
	'JVPPDMT_APPROVAL'						=> 'Approuver',
	'JVPPDMT_CONFIRM'						=> 'J’ai lu et compris la politique de confidentialité.',
	'JVPPDMT_COOKIE_CONFIRM'				=> 'Sélectionnez si le site Web %s peut stocker des cookies sur votre appareil :',
	'JVPPDMT_COOKIE_DESC'					=> 'Attention ! Ce site utilise des cookies pour vous garantir la meilleure expérience sur notre site. <a onclick="window.open(this.href); return false;" href="https://cookiesandyou.com/">En savoir plus</a>.<br>Ici, vous avez la possibilité d’accepter ou de refuser les cookies, et à tout moment vous pouvez désactiver l’utilisation des cookies du site Web dans les paramètres de votre navigateur.',
	'JVPPDMT_DISABLED_COOKIE_GUEST_USER'	=> 'Nous ne stockons pas de cookies sur les appareils des utilisateurs invités!',
	'JVPPDMT_NOT_CONFIRM'					=> 'Attention ! Vous n’avez pas fait de sélection à confirmer.',
	'JVPPDMT_ONLY_ALREADY_EXISTING_DATA'	=> 'Pour les données déjà enregistrées, j’approuve, mais rien d’autre.<br><em>Veuillez noter que si vous choisissez cette option, vous serez dans un groupe en lecture seule. Bien sûr, vous pouvez modifier cette décision plus tard dans les paramètres du panneau d’utilisateur/des données de confidentialité</em>',
	'JVPPDMT_ONLY_REGISTER_DATA'			=> 'Pour les données personnelles nécessaires à l’inscription, j’approuve, mais rien d’autre.<br><em>Veuillez noter que si vous choisissez cette option, vous serez dans un groupe en lecture seule. Bien sûr, vous pouvez modifier cette décision plus tard dans les paramètres du panneau d’utilisateur/des données de confidentia.</em>',
	'JVPPDMT_PERSONAL_DATA_CONFIRM'			=> 'Sélectionnez si le site Web %s peut utiliser et stocker vos informations personnelles. Les données personnelles ne seront pas transmises à des tiers.',
	'JVPPDMT_PERSONAL_DATA_REG'				=> 'Attention ! Les données personnelles doivent être fournies lors de l’inscription.',
	'JVPPDMT_PRIVACY_POLICY'		=> 'Politique de confidentialité',
	'JVPPDMT_PRIVACY_POLICY_DESC'	=> 'La protection des données a une priorité particulièrement élevée pour la gestion du site Web « %1$s ». L’utilisation des pages Internet du site Web « %1$s » est possible sans aucune indication de données personnelles; cependant, si une personne concernée souhaite utiliser des services spéciaux via notre site Web, il peut être nécessaire de traiter des données personnelles. Lorsque le traitement des données personnelles est nécessaire et qu’il n’existe aucune base légale pour un tel traitement, nous obtenons généralement le consentement de la personne concernée.

Le traitement des données personnelles, telles que le nom, l’adresse, l’adresse e-mail ou le numéro de téléphone d’une personne concernée, doit toujours être conforme au règlement général sur la protection des données (RGPD) et conformément aux réglementations nationales en matière de protection des données applicables au site Web « %1$s ». À l’aide de cette déclaration de confidentialité, nous souhaitons informer le grand public de la nature, de la portée et de la finalité des données personnelles que nous collectons, utilisons et traitons. En outre, les personnes concernées sont informées des droits auxquels elles peuvent prétendre au moyen de cette déclaration de protection des données.

Le contrôleur du site Web « %1$s » a mis en place de nombreuses mesures techniques et organisationnelles pour assurer la protection la plus complète des données personnelles traitées via ce site Web. Cependant, les transmissions de données sur Internet peuvent en principe présenter des failles de sécurité, de sorte qu’une protection absolue peut ne pas être garantie. Pour cette raison, toute personne concernée est libre de nous transférer des données personnelles par d’autres moyens, par exemple par téléphone.

<h3>Définitions</h3>
La déclaration de protection des données du site web « %1$s » est basé sur les termes utilisés par le législateur européen pour l’adoption du règlement général sur la protection des données (RGPD). Notre déclaration de protection des données doit être lisible et compréhensible pour le grand public, ainsi que pour nos clients et partenaires. Pour s’en assurer, nous voulons d’abord expliquer la terminologie utilisée.

Dans cette déclaration de confidentialité, nous utilisons, entre autres, les conditions suivantes:

<strong>a) Informations personnelles</strong>
Les données personnelles désignent toute information relative à une personne physique identifiée ou identifiable (« personne concernée »). Une personne physique identifiable est une personne qui peut être identifiée, directement ou indirectement, notamment par référence à un identifiant tel qu’un nom, un numéro d’identification, des données de localisation, un identifiant en ligne ou à un ou plusieurs facteurs propres à la condition physique, physiologique, l’identité génétique, mentale, économique, culturelle ou sociale de cette personne physique.

<strong>b) personne concernée</strong>
La personne concernée est une personne physique identifiée ou identifiable, dont les données personnelles sont traitées par le responsable du traitement.

<strong>c) Traiter</strong>
Le traitement est toute opération ou série d’opérations effectuées sur des données personnelles ou sur la collecte de données personnelles, que ce soit par des moyens automatisés ou non, tels que la collecte, l’enregistrement, l’organisation, la structuration, le stockage, l’adaptation ou la modification, la récupération, la consultation, l’utilisation, la divulgation par transmission, distribution ou mise à disposition, modification ou combinaison, limitation, effacement ou destruction.

<strong>d) Restriction du traitement</strong>
La restriction du traitement est le marquage des données personnelles stockées dans le but de restreindre leur traitement à l’avenir.

<strong>e) le responsable du traitement</strong>
Le responsable du traitement est la personne physique ou morale, l’autorité publique, l’agence ou tout autre organisme qui, seul ou conjointement avec d’autres, détermine les finalités et les moyens du traitement des données à caractère personnel ; lorsque les finalités et les moyens d’un tel traitement sont déterminés par le droit de l’Union ou des États membres, le responsable du traitement ou les critères spécifiques de sa désignation peuvent être régis par le droit de l’Union ou des États membres.

<strong>f) Processeur</strong>
Le sous-traitant est une personne physique ou morale, une autorité publique, un organisme ou un autre organisme qui traite des données à caractère personnel pour le compte du responsable du traitement.

<strong>g)Receveur</strong>
Le destinataire est une personne physique ou morale, une autorité publique, une agence ou un autre organisme auquel les données personnelles sont divulguées, qu’il s’agisse ou non de tiers. Toutefois, les autorités publiques susceptibles de recevoir des données à caractère personnel dans le cadre d’une enquête particulière conformément au droit de l’Union ou des États membres ne sont pas considérées comme des destinataires ; le traitement de ces données par ces autorités publiques devrait être conforme aux règles applicables en matière de protection des données conformément aux finalités du traitement.

<strong>h) Tierce personne</strong>
Un tiers est une personne physique ou morale, une autorité publique ou un organisme autre que la personne concernée, le responsable du traitement, le sous-traitant et la personne qui, sous l’autorité directe du responsable du traitement ou du sous-traitant, est autorisée à traiter les données personnelles.

<strong>i) Autorisation</strong>
Le consentement de la personne concernée est une indication libre, spécifique, éclairée et sans ambiguïté de la volonté de la personne concernée par laquelle elle, au moyen d’une déclaration ou d’un acte affirmatif clair, consent au traitement des données personnelles la concernant.

<h3>Données du contrôleur</h3>
Le responsable du traitement en vertu du règlement général sur la protection des données (RGPD), d’autres lois sur la protection des données applicables dans les États membres de l’Union européenne et d’autres dispositions relatives à la protection des données est:

<strong>contrôleur:</strong> %2$s

<strong>Adresse e-mail de contact:</strong> %3$s
<strong>numéro de téléphone:</strong> %4$s

<h3>Cookies</h3>
Le site web « %1$s » utilise des cookies. Les cookies sont des fichiers texte qui sont stockés dans un système informatique via un navigateur Internet.

De nombreux sites Internet et serveurs utilisent des cookies. De nombreux cookies contiennent ce que l’on appelle un identifiant de cookie. Un identifiant de cookie est un identifiant unique du cookie. Il se compose d’une chaîne qui permet d’attribuer des pages Internet et des serveurs au navigateur Internet spécifique dans lequel le cookie est stocké. Cela permet aux sites Internet et aux serveurs visités de distinguer le navigateur individuel de la personne concernée des autres navigateurs Internet qui contiennent d’autres cookies. Un navigateur Internet spécifique peut être reconnu et identifié à l’aide de l’ID de cookie unique.

L’utilisation de cookies permet au site Web « %1$s » de fournir aux utilisateurs de ce site Web des services plus conviviaux qui ne seraient pas possibles sans le paramétrage des cookies.

Au moyen d’un cookie, les informations et les offres de notre site Web peuvent être optimisées en pensant à l’utilisateur. Les cookies nous permettent, comme mentionné précédemment, de reconnaître les utilisateurs de notre site Web. Le but de cette reconnaissance est de faciliter l’utilisation de notre site Web par les utilisateurs. L’utilisateur du site Web qui utilise des cookies n’a pas à saisir de données d’accès à chaque ouverture du site Web, car elles sont reprises par le site Web et le cookie et ainsi stockées sur le système informatique de l’utilisateur. Un autre exemple est le cookie d’un panier dans une boutique en ligne. La boutique en ligne mémorise les articles qu1 un client a placés dans le panier virtuel via un cookie. Un jeu par navigateur peut stocker le score actuel ou l’état du niveau dans un cookie et revenir au tableau de bord pour le stockage à la fin du jeu.

Exemples concrets d’utilisation de cookies sur notre site Internet :

%5$s

La personne concernée peut à tout moment empêcher l’installation de cookies via notre site Web au moyen d’un réglage correspondant du navigateur Internet utilisé et peut donc refuser définitivement l’installation de cookies. En outre, les cookies déjà définis peuvent être supprimés à tout moment via un navigateur Internet ou d’autres logiciels. Ceci est possible dans tous les navigateurs Internet courants. Si la personne concernée désactive le paramétrage des cookies dans le navigateur Internet utilisé, toutes les fonctions de notre site Web peuvent ne pas être pleinement utilisables.
%6$s
<h3>Collecte de données et d’informations générales</h3>
Le site web « %1$s » collecte une série de données et d’informations générales lorsqu’une personne concernée ou un système automatisé appelle le site Web. Ces données et informations générales sont stockées dans les fichiers journaux du serveur. Les types et versions de navigateur utilisés peuvent être collectés, (2) le système d’exploitation utilisé par le système d’accès, (3) le site Web à partir duquel un système d’accès accède à notre site Web (appelés référents), (4) le sous- sites Web, (5) la date et l’heure d’accès au site Internet, (6) une adresse de protocole Internet (adresse IP), (7) le fournisseur de services Internet du système d’accès, et (8) toute autre donnée et information similaire pouvant être utilisé en cas d’attaque de nos systèmes informatiques.

Lors de l’utilisation de ces données et informations générales, le site Web « %1$s » ne tire aucune conclusion sur la personne concernée. Ces informations sont plutôt nécessaires pour (1) fournir correctement le contenu de notre site Web, (2) optimiser le contenu de notre site Web et de notre publicité, (3) assurer la viabilité à long terme de nos systèmes informatiques et de la technologie de notre site Web et (4) fournir aux autorités répressives les informations nécessaires aux poursuites pénales en cas de cyberattaque. Par conséquent, le site Web « %1$s » analyse statistiquement les données et informations collectées de manière anonyme, dans le but d’augmenter la protection et la sécurité des données de notre site Web et d’assurer un niveau de protection optimal pour les données personnelles que nous traitons. Les données anonymes des fichiers journaux du serveur sont stockées séparément de toutes les données personnelles fournies par une personne concernée.

<h3>Inscription sur notre site</h3>
La personne concernée a la possibilité de s’inscrire sur le site Internet du responsable du traitement en indiquant ses données personnelles. L’enregistrement de la personne concernée, avec indication volontaire des données personnelles, est destiné à permettre au responsable du traitement de fournir le contenu des personnes concernées ou des services qui ne peuvent être proposés qu’aux utilisateurs enregistrés en raison de la nature du sujet en question. Les données personnelles envoyées au contrôleur sont déterminées par le masque de saisie respectif utilisé pour l’enregistrement. Les données personnelles saisies par la personne concernée sont collectées et stockées uniquement pour un usage interne par le responsable du traitement à ses propres fins.

Pour créer un compte sur le site Web du responsable du traitement, au moins les informations personnelles suivantes sont requises : un nom d’utilisateur identifiable de manière unique, un mot de passe personnel utilisé pour se connecter à votre compte et une adresse e-mail personnelle valide. Cette adresse e-mail est nécessaire pour recevoir le lien de confirmation utilisé pour vérifier l’inscription et pour recevoir d’autres communications du site Web. Les autres messages peuvent éventuellement être sélectionnés et désélectionnés dans le panneau utilisateur après une connexion réussie. Votre mot de passe est crypté (un hachage à sens unique) afin qu’il soit sûr. Cependant, il est recommandé de ne pas réutiliser le même mot de passe sur plusieurs sites Web différents. Votre mot de passe est le moyen d’accéder à votre compte sur ce site, veuillez donc le conserver soigneusement. En aucun cas, une personne affiliée à ce site Web ou à tout autre tiers ne vous demandera légalement votre mot de passe. Si vous avez oublié votre mot de passe pour votre compte, vous pouvez utiliser la fonction « J’ai oublié mon mot de passe » du logiciel. Ce processus vous demandera de saisir le nom d’utilisateur utilisé et l’adresse e-mail que vous avez saisie dans votre profil. Ensuite, le logiciel générera un nouveau mot de passe pour récupérer votre compte. Pour cette raison, il est recommandé de toujours garder l’adresse e-mail à jour.

En s’inscrivant sur le site Web du responsable du traitement, l’adresse IP attribuée par le fournisseur d’accès Internet (FAI) et utilisée par le sujet, la date et l’heure de l’inscription sont également enregistrées. Le stockage de ces données a lieu en arrière-plan car c’est le seul moyen d’éviter une mauvaise utilisation de nos services et, si nécessaire, de permettre d’enquêter sur les crimes commis. Dans cette mesure, le stockage de ces données est nécessaire pour sécuriser le responsable du traitement. Ces données ne seront pas transmises à des tiers sauf s’il existe une obligation légale de transmettre les données ou si le transfert est à des fins de poursuites pénales.

En s’inscrivant sur le site Internet du responsable du traitement, la personne concernée permet au responsable du traitement de stocker les données saisies par la personne concernée dans le cadre de l’inscription et dans le profil, ainsi que les données d’accès en cours (date et heure d’utilisation, adresse IP, données de localisation , scores et autres données envoyées par le navigateur de la personne concernée) et à utiliser pour le fonctionnement du site Web. Il est à noter que, selon la configuration, toutes les données saisies dans le profil et les messages écrits par la personne concernée peuvent être disponibles sur Internet et accessibles par toute personne. En outre, la personne concernée permet au site Web de vous contacter afin de vous envoyer les messages administratifs nécessaires à l’ouverture et à la gestion du compte utilisateur.

Les personnes inscrites sont libres à tout moment de modifier les données personnelles fournies lors de l’inscription ou de les supprimer complètement du stockage de données du responsable du traitement.

Le responsable du traitement doit, à tout moment et sur demande, fournir à toute personne concernée des informations sur les données personnelles stockées concernant la personne concernée. En outre, le responsable du traitement corrige ou supprime les données personnelles à la demande ou sur instruction de la personne concernée, dans la mesure où il n’existe aucune obligation légale de conservation. L’intégralité des employés du responsable du traitement est à la disposition de la personne concernée en tant que personne de contact à cet égard.

<h3>Possibilité de contact via le site internet</h3>
Le site web « %1$s » contient des informations qui permettent un contact électronique rapide avec nous, ainsi qu’une communication directe avec nous, qui contient également une adresse générale du soi-disant courrier électronique (adresse e-mail). Si une personne concernée contacte le responsable du traitement par e-mail ou via un formulaire de contact, les données personnelles transmises par la personne concernée sont automatiquement stockées. Ces données personnelles, qui sont volontairement transmises par une personne concernée au responsable du traitement, sont stockées dans le but de traiter ou de contacter la personne concernée. Il n’y a aucun transfert de ces données personnelles à des tiers.

<h3>Effacement et blocage de routine des données personnelles</h3>
Le responsable du traitement traite et stocke les données personnelles de la personne concernée uniquement pendant la période nécessaire à la réalisation de l’objectif de conservation, ou dans la mesure permise par le législateur européen ou d’autres législateurs dans la loi ou la réglementation auxquelles le traitement est soumis.

Si la finalité du stockage ne s’applique pas, ou si une période de conservation prescrite par le législateur européen ou un autre législateur compétent expire, les données personnelles sont systématiquement bloquées ou supprimées conformément aux exigences légales.

<h3>Droits de la personne concernée</h3>
<strong>a) Droit de confirmation</strong>
Chaque personne concernée a le droit accordé par le législateur européen d’obtenir du responsable du traitement la confirmation du traitement ou non des données à caractère personnel la concernant. Si une personne concernée souhaite exercer ce droit de confirmation, elle peut à tout moment contacter un employé du responsable du traitement.

<strong>b) Droit d’accès</strong>
Chaque personne concernée a le droit accordé par le législateur européen d’obtenir du responsable du traitement, gratuitement, des informations sur ses données personnelles stockées et une copie de ces informations. En outre, les directives et règlements européens accordent à la personne concernée l’accès aux informations suivantes :

les finalités du traitement ;
les catégories de données personnelles concernées ;
les destinataires ou catégories de destinataires auxquels les données personnelles ont été ou seront divulguées, notamment les destinataires dans des pays tiers ou des organisations internationales ;
si possible, la période prévue pour laquelle les données personnelles seront stockées ou, si cela n’est pas possible, les critères utilisés pour déterminer cette période ;
l’existence du droit de demander au responsable du traitement la rectification ou l’effacement des données personnelles, ou la limitation du traitement des données personnelles concernant la personne concernée, ou de s’opposer à un tel traitement ;
l’existence du droit d’introduire une réclamation auprès d’une autorité de contrôle ;
lorsque les données personnelles ne sont pas collectées auprès de la personne concernée, toutes les informations disponibles sur sa source ;
l’existence d’une prise de décision automatisée, y compris le profilage, telle que visée à l’article 22, paragraphes 1 et 4 du RGPD et, au moins dans ces cas, des informations utiles sur la logique impliquée, ainsi que sur l’importance et les conséquences prévues d’un tel traitement pour la personne concernée.
En outre, la personne concernée a le droit d’obtenir des informations sur le transfert de données à caractère personnel vers un pays tiers ou vers une organisation internationale. Dans ce cas, la personne concernée a le droit d’être informée des garanties appropriées concernant le transfert.

Si une personne concernée souhaite exercer ce droit d’accès, elle peut à tout moment contacter un employé du responsable du traitement.

<strong>c) Droit de rectification</strong>
Chaque personne concernée a le droit accordé par le législateur européen d’obtenir du responsable du traitement sans retard injustifié la rectification des données personnelles inexactes la concernant. Compte tenu des finalités du traitement, la personne concernée a le droit de faire compléter les données personnelles incomplètes, y compris en fournissant une déclaration complémentaire.

Si une personne concernée souhaite exercer ce droit de rectification, elle peut à tout moment contacter un employé du responsable du traitement.

<strong>d) Droit à l’effacement (droit à l’oubli)</strong>
Chaque personne concernée a le droit accordé par le législateur européen d’obtenir du responsable du traitement l’effacement des données à caractère personnel la concernant sans retard injustifié et le responsable du traitement est tenu d’effacer les données à caractère personnel sans retard indu lorsque l’une des raisons suivantes s’applique, comme tant que le traitement n’est pas nécessaire :

Les données personnelles ne sont plus nécessaires au regard des finalités pour lesquelles elles ont été collectées ou autrement traitées.
La personne concernée retire le consentement avec lequel le traitement a été traité conformément à l’article 6, paragraphe 1, point a) du RGPD, ou à l’article 9, paragraphe 2, point a) du RGPD, et lorsqu’il n’y a pas d’autre base légale du traitement.
La personne concernée s’oppose au traitement conformément à l’article 21, paragraphe 1, du RGPD et il n’existe aucun motif légitime impérieux pour le traitement, ou la personne concernée s’oppose au traitement conformément à l’article 21, paragraphe 2, du RGPD.
Les données personnelles ont été traitées illégalement.
Les données personnelles doivent être effacées afin de se conformer à une obligation légale en vertu du droit de l’Union ou des États membres à laquelle le responsable du traitement est soumis.
Les données personnelles ont été collectées dans le cadre de la fourniture de services de la société de l’information visés à l’article 8, paragraphe 1, du RGPD.
Si l’une des raisons ci-dessus s’applique et qu’une personne concernée demande la suppression des données personnelles stockées par le site Web « %1$s » elle peut à tout moment contacter un employé du responsable du traitement. Un employé de « %1$s » elle peut à tout moment contacter un employé du responsable du traitement. Un employé de « %1$s » s’assurera immédiatement que la demande de suppression est satisfaite immédiatement.

Lorsque le responsable du traitement a rendu des données personnelles publiques et est obligé d’effacer les données personnelles conformément à l’article 17, paragraphe 1, du RGPD, le responsable du traitement prendra des mesures raisonnables, en tenant compte de la technologie disponible et des coûts de mise en œuvre, y compris les mesures techniques ; d’informer les autres responsables du traitement des données personnelles que la personne concernée a demandé que ces mécanismes de contrôle suppriment tous les liens vers, ou copient ou répliquent ces données personnelles, dans la mesure où le traitement n’est pas requis. Un employé du site web « %1$s » prendra les mesures nécessaires dans les cas individuels.

<strong>e) Droit à la limitation du traitement</strong>
Chaque personne concernée a le droit accordé par le législateur européen d’obtenir du responsable du traitement une limitation du traitement lorsque l’un des éléments suivants s’applique :

L’exactitude des données personnelles est contestée par la personne concernée, pendant une période qui permet au responsable du traitement de vérifier l’exactitude des données personnelles.
Le traitement est illégal et la personne concernée s’oppose à l’effacement des données personnelles et demande à la place la restriction de leur utilisation.
Le responsable du traitement n’a plus besoin des données personnelles aux fins du traitement, mais elles sont nécessaires à la personne concernée pour la constatation, l’exercice ou la défense de droits en justice.
La personne concernée s’est opposée au traitement conformément à l’article 21, paragraphe 1, du RGPD en attendant de vérifier si les motifs légitimes du sous-traitant l’emportent sur ceux de la personne concernée.
Si l’une des conditions ci-dessus est remplie et qu’une personne concernée limite le traitement des données personnelles stockées par le site Web « %1$s » elle peut contacter un employé du responsable du traitement à tout moment. L’employé du site web « %1$s » réglemente la limitation du traitement.

<strong>f) Droit au transfert de données</strong>
Chaque personne concernée a le droit accordé par le législateur européen de recevoir les données personnelles la concernant, fournies à un responsable du traitement, dans un format structuré, couramment utilisé et lisible par machine. Il a le droit de transmettre ces données à un autre responsable du traitement sans entraver le responsable du traitement pour lequel les données personnelles ont été fournies, à condition que le traitement soit fondé sur le consentement conformément à l’article 6, paragraphe 1, point a) ) du RGPD ou en vertu de l’article 9, paragraphe 2, point a), du RGPD, ou d’un contrat en vertu de l’article 6, paragraphe 1, point b), du RGPD, et le traitement est effectué par des moyens automatisés, tant que le traitement n’est pas nécessaire à l’exécution d’une mission accomplie dans l’intérêt public ou dans l’exercice de l’autorité publique par le responsable du traitement.

En outre, lors de l’exercice de son droit à la portabilité des données conformément à l’article 20, paragraphe 1, du RGPD, la personne concernée a le droit de faire transférer ses données personnelles directement de l’une à l’autre, lorsque cela est techniquement possible et que les droits et libertés d’autrui ne sont pas affecte négativement.

Afin de faire valoir le droit à la portabilité des données, la personne concernée peut à tout moment contacter tout employé du site Web « %1$s ».

<strong>g) Droit d’opposition</strong>
Chaque personne concernée a le droit accordé par le législateur européen de s’opposer, pour des raisons liées à sa situation particulière, à tout moment au traitement des données à caractère personnel la concernant, qui se fonde sur le point (e) ou (f) de l’article 6, paragraphe 1, du RGPD. Ceci s’applique également au profilage basé sur ces dispositions.

Le site web « %1$s » ne traite plus les données personnelles en cas d’opposition, sauf si nous pouvons démontrer des motifs légitimes et impérieux pour le traitement qui prévalent sur les intérêts, droits et libertés de la personne concernée ou sur l’établissement, l’exercice ou la défense de droits en justice.

Si le site Web « %1$s » traite des données personnelles à des fins de marketing direct, la personne concernée a le droit de s’opposer à tout moment au traitement des données personnelles qui l’intéressent pour un tel marketing. Ceci s’applique au profilage dans la mesure où il est lié à un tel marketing direct. Si la personne concernée s’oppose au traitement du site Web « %1$s » à des fins de marketing direct, le site Web « %1$s » ne traitera plus les données personnelles à ces fins.

En outre, la personne concernée a le droit, pour des motifs tenant à sa situation particulière, de s’opposer au traitement des données personnelles la concernant via le site Internet « %1$s » và des fins de recherche scientifique ou historique, ou pour à des fins statistiques conformément à l’article 89, paragraphe 1, du RGPD, à moins que le traitement ne soit nécessaire à l’exécution d’une mission effectuée pour des raisons d’intérêt public.

Pour exercer son droit d’opposition, la personne concernée peut contacter un employé du site Internet « %1$s ». En outre, la personne concernée est libre dans le cadre de l’utilisation des services de la société de l’information et nonobstant la directive 2002/58/CE, d’exercer son droit d’opposition par des moyens automatisés utilisant des spécifications techniques.

<strong>h) Prise de décision individuelle automatisée, y compris le profilage</strong>
Chaque personne concernée a le droit accordé par le législateur européen de ne pas faire l’objet d’une décision fondée uniquement sur un traitement automatisé, y compris le profilage, produisant des effets juridiques la concernant, ou l’affectant de la même manière, pour autant que le décision (1) n’est pas nécessaire à la conclusion ou à l’exécution d’un contrat entre la personne concernée et un responsable du traitement, ou (2) n’est pas autorisée en vertu du droit de l’Union ou de l’État membre vers lequel la personne concernée est responsable du traitement et qui prennent également des mesures appropriées pour protéger les droits et libertés et les intérêts légitimes de la personne concernée, ou (3) ne repose pas sur le consentement explicite de la personne concernée.

Si la décision (1) est nécessaire à la conclusion ou à l’exécution d’un contrat entre la personne concernée et un responsable du traitement, ou (2) elle est fondée sur le consentement exprès de la personne concernée, le site Web « %1$s » zprendra des mesures appropriées pour protéger les droits et libertés et les intérêts légitimes de la personne concernée, au moins le droit d’obtenir une intervention humaine de la part du responsable du traitement, d’exprimer son point de vue et de contester la décision.

Si la personne concernée souhaite exercer les droits liés à la prise de décision individuelle automatisée, elle peut à tout moment contacter un employé du site « %1$s ».

<strong>i) Droit de retirer le consentement à la protection des données</strong>
Chaque personne concernée a le droit accordé par le législateur européen de retirer à tout moment son consentement au traitement de ses données personnelles.

Si la personne concernée souhaite exercer le droit de retirer son consentement, elle peut à tout moment contacter un employé du sitee « %1$s ».

<strong>j) Réclamation en cas de fuite de données</strong>
En cas de violation de la protection des données, la personne concernée a le droit de déposer une plainte auprès de l’autorité de contrôle compétente. L’autorité de contrôle de la protection des données est le délégué national à la protection des données de l’État dans lequel la personne concernée a sa résidence habituelle.

Un aperçu des autorités nationales de protection des données et de leurs liens et adresses est disponible ici: <a onclick="window.open(this.href); return false;" href="https://ico.org.uk/">https://ico.org.uk/ - adresse pour la Grande-Bretagne</a> of <a onclick="window.open(this.href); return false;" href="https://ec.europa.eu/newsroom/article29/item-detail.cfm?item_id=612080">https://ec.europa.eu - adresses et liens pour les pays européens</a>.

<h3>Dispositions relatives à la protection des données concernant l’application et l’utilisation des photos de profil chez Gravatar</h3>
Le contrôleur a intégré le service Gravatar sur ce site Web afin d’utiliser l’aide de Gravatar pour permettre aux rédacteurs de messages et aux rédacteurs de commentaires de personnaliser leurs messages avec une photo de profil (également appelée avatar). L’opérateur du service Gravatar est le Automattic Inc., 132 Hawthorne Street San Francisco, CA 94107, ETATS-UNIS.

Gravatar est un service où la personne concernée peut s’inscrire et enregistrer des photos de profil avec une adresse e-mail. La photo de l’utilisateur choisie ici peut ensuite être utilisée sur de nombreux sites Web différents. Si la personne concernée écrit des messages ou des commentaires sur d’autres sites en ligne avec l’adresse e-mail respective, sa photo de profil peut être affichée à côté des messages ou des commentaires. À cette fin, l’adresse e-mail fournie par la personne concernée est cryptée et envoyée à Gravatar pour vérifier si un profil avec une photo a été stocké à cette fin. C’est le seul but du transfert d’adresse e-mail.

En affichant les images, Gravatar connaît l’adresse IP actuelle de la personne concernée, car cela est nécessaire pour la communication entre un navigateur et un service en ligne. De plus, Gravatar reçoit des informations sur les sites Web visités et où la photo de profil est utilisée. Ces connexions de données ne sont pas sous notre contrôle et nous ne sommes pas au courant des données utilisées ou transmises. Pour plus d’informations sur la façon dont Gravatar collecte et utilise les données, consultez la politique de confidentialité d’Automtic : <a onclick="window.open (this.href); return false;" href="https://automattic.com/privacy/"> https://automattic.com/privacy/</a>.

Si la personne concernée ne souhaite pas qu’une image apparaisse dans les messages, qui est associée à son adresse e-mail chez Gravatar, elle doit être utilisée dans le compte utilisateur et pour les messages ou commentaires une adresse e-mail, qui n’est pas enregistré auprès de Gravatar. Les utilisateurs peuvent empêcher complètement le transfert de données en ne connectant pas une image Gravatar à leur compte utilisateur ou à leurs commentaires, mais en sélectionnant de préférence une image utilisateur locale.

Automattic est certifié dans le cadre de l’accord Privacy Shield, qui garantit le respect de la législation européenne en matière de confidentialité. Vous trouverez plus d’informations sur<a onclick="window.open (this.href); return false;"href ="https://www.privacyshield.gov/participant?id=a2zt0000000CbqcAAC&status=Active">https://www.privacyshield.gov</a>.

<h3>Dispositions relatives à la protection des données concernant l’application et l’utilisation d’une salle de jeux</h3>
Sur ce site, la manette a intégré un composant de jeu (appelé aussi arcade) avec des jeux par navigateur. En utilisant les modules d’arcade, des cookies sont définis, comme expliqué ci-dessus, qui stockent les données de session et la représentation visuelle personnalisée des jeux et des pages d’arcade. Pour un bon fonctionnement, il est nécessaire d’envoyer des données sur le score atteint par match, le niveau de jeu, la date du score atteint, le nombre de fois qu’un jeu commence, la durée du jeu, le classement par rapport aux autres utilisateurs et comparables statistiques et les stocker en combinaison avec le compte utilisateur. Il peut contenir des composants d’un service de traduction de texte, tel que Google Translator. Consultez la politique de confidentialité de Google Translate ci-dessous. Il est également possible pour les jeux de créer des liens de données vers des sites étrangers qui se traduiront par un classement ou des statistiques spécifiques pour ce jeu. Il peut également y avoir des liens dans les jeux vers des réseaux sociaux, qui surveillent les activités de leurs membres à cet égard.

Si la personne concernée dispose d’un compte d’utilisateur sur ces sites ou réseaux sociaux et y est connectée, ces sites peuvent recevoir des informations sur la visite de notre site, le jeu respectif et les scores obtenus. En retour, il est possible que des publicités de ces pages soient envoyées à la personne concernée. Ces connexions de données ne sont pas sous notre contrôle et nous ne sommes pas au courant des données utilisées ou transmises. La personne concernée peut y empêcher tout transfert de données personnelles en se déconnectant du compte respectif ou en n’utilisant pas les jeux. L’arcade peut être utilisée partiellement sans enregistrement et stockage de cookies ou de données. Cependant, de nombreuses fonctions ne sont pas disponibles et les scores obtenus ne peuvent pas être sauvegardés. Pour les invités, aucune information personnelle n’est stockée en dehors du journal d’accès global au serveur. Cependant, les joueurs invités ne peuvent pas non plus enregistrer le score du jeu et de nombreuses fonctionnalités ne sont pas disponibles.

Avant le chargement du jeu, une intro de jeu est chargée avec un lien vers le site Web « https://connect.jv-arcade.com ». Le « jv-arcade.com » controller indique clairement qu’il n’envoie aucune donnée personnelle sur les utilisateurs lors de la connexion et n’utilise pas de cookies.

<h3>Dispositions relatives à la protection des données concernant l’application et l’utilisation des chats</h3>
Sur ce site Web, le contrôleur a intégré des modules de chat (également appelés shoutbox ou tchat ). Le but de ces modules est de permettre aux utilisateurs de communiquer directement entre eux en temps réel. En utilisant un module de discussion, des cookies sont définis, comme expliqué au point 3., qui stockent les paramètres de la boîte de discussion respective (par exemple, son activé/désactivé, boîte réduite ou non réduite, ou position de la boîte dans une page), et session ou données historiques. Pour faire fonctionner correctement un module de chat, il est nécessaire de stocker les messages de l’utilisateur avec l’heure de création et en conjonction avec son compte utilisateur dans la base de données. Les messages d’invité sont stockés en conjonction avec l’adresse IP. Cela est nécessaire pour répertorier les soumissions des utilisateurs dans l’ordre chronologique, les attribuer aux auteurs et poursuivre toute violation des conditions d’utilisation ou de la loi applicable. Le contenu de conversation dans les modules de discussion peut être visible publiquement sur le Web, selon la configuration, et peut être lu ou révisé par n’importe qui.

<h3>Dispositions relatives à la protection des données concernant l’application et l’utilisation de Google AdSense</h3>
Le contrôleur a intégré Google AdSense sur ce site Web. Google AdSense est un service en ligne qui permet de placer des annonces sur des sites tiers. Google Adsense est basé sur un algorithme qui sélectionne les publicités affichées sur des sites tiers pour correspondre au contenu de ce site tiers. Google Adsense permet un ciblage basé sur les intérêts de l’internaute, qui est mis en œuvre en générant des profils d’utilisateurs individuels.

L’opérateur du composant AdSense de Google est Alphabet Inc., 1600 Amphitheatre Pkwy, Mountain View, CA 94043-1351, Etats Unis.

L’objectif du composant AdSense de Google est l’intégration de publicités sur notre site Web. Google AdSense place un cookie dans le système informatique de la personne concernée. La définition des cookies a été expliquée ci-dessus. Avec le paramétrage du cookie, Alphabet Inc. analyser l’utilisation de notre site Web. À chaque appel à l’une des pages individuelles de ce site Internet, qui est exploité par le responsable du traitement et dans lequel un composant Google AdSense a été intégré, le navigateur Internet du système informatique de la personne concernée transmet automatiquement des données via le Composant Google AdSense à des fins de publicité en ligne et de règlement des commissions chez Alphabet Inc. Au cours de cette procédure technique, la société acquiert Alphabet Inc. connaissance des données personnelles, telles que l’adresse IP de la personne concernée, qui sert entre autres à Alphabet Inc. pour comprendre l’origine des visiteurs et des clics, puis effectuer des commissions.

La personne concernée peut, comme mentionné ci-dessus, empêcher l’installation de cookies via notre site Web à tout moment au moyen d’un ajustement correspondant du navigateur Web utilisé et ainsi refuser définitivement l’installation de cookies. Un tel ajustement du navigateur Internet utilisé empêcherait également Alphabet Inc. place un cookie sur le système informatique de la personne concernée. De plus, les cookies déjà définis par Alphabet Inc. utilisé, peut être supprimé à tout moment via un navigateur Web ou d’autres logiciels.

De plus, Google AdSense utilise également des pixels de suivi. Un pixel de suivi est une image miniature intégrée dans les pages Web pour permettre la journalisation et l’analyse d’un fichier journal pour effectuer une analyse statistique. Sur la base des pixels de suivi intégrés, Alphabet Inc. déterminer si et quand un site Web a été consulté par une personne concernée et quels liens ont été cliqués par la personne concernée. Les pixels de suivi servent, entre autres, à analyser le flux de visiteurs d’un site Web.

Grâce à Google AdSense, les données personnelles et les informations qui incluent également l’adresse IP et sont nécessaires à la collecte et à la comptabilisation des publicités affichées - sont envoyées à Alphabet Inc. aux États-Unis d’Amérique. Ces données personnelles sont stockées et traitées aux États-Unis d’Amérique. L’Alphabet Inc. peut transférer les données personnelles collectées à des tiers par le biais de cette procédure technique.

Google Adsense est expliqué plus en détail sous le lien suivant <a onclick="window.open (this.href); return false;" href="https://www.google.com/adsense/start/"> https://www.google.com/adsense/start/</a>.

<h3>Dispositions relatives à la protection des données concernant l’application et l’utilisation de Google Analytics (met anonimisering functie)</h3>
Sur ce site Web, le responsable du traitement a intégré le composant de Google Analytics (avec la fonction d’anonymisation). Google Analytics est un service d’analyse Web. L’analyse Web est la collecte et l’analyse de données sur le comportement des visiteurs des sites Web. Un service d’analyse Web collecte, entre autres, des données sur le site Web d’où provient une personne (le soi-disant référent), quelles sous-pages ont été visitées ou à quelle fréquence et pendant quelle durée une sous-page a été consultée. L’analyse Web est principalement utilisée pour l’optimisation d’un site Web et pour effectuer une analyse coûts-avantages de la publicité sur Internet.

L’exploitant du composant Google Analytics est Google Inc., 1600 Amphitheatre Pkwy, Mountain View, CA 94043-1351, Etats Unis.

Pour l’analyse Web via Google Analytics, le contrôleur utilise l’application « _gat. _anonymizeIp ». Grâce à cette application, l’adresse IP de la connexion Internet de la personne concernée est tronquée par Google et anonymisée lors de la visite de nos sites Internet depuis un État membre de l’Union européenne ou un autre État contractant à l’Accord sur l’Espace économique européen.

Le composant Google Analytics a pour objectif d’analyser le trafic sur notre site Web. Google utilise les données et informations collectées, entre autres pour évaluer l’utilisation de notre site Web et pour fournir des rapports en ligne, qui montrent les activités sur nos sites Web, et pour fournir d’autres services liés à l’utilisation de notre site Web pour nous.

Google Analytics place un cookie sur le système informatique de la personne concernée. La définition des cookies a été expliquée ci-dessus. En définissant le cookie, Google peut analyser l’utilisation de notre site Web. À chaque appel à l’une des pages individuelles de ce site Internet, qui est exploité par le responsable  et dans lequel un composant Google Analytics a été intégré, le navigateur Internet du système informatique de la personne concernée transmet automatiquement des données via le Composant Google Analytics à des fins de publicité en ligne et de règlement des commissions chez Google. Au cours de cette procédure technique, la société Google acquiert la connaissance d’informations personnelles, telles que l’adresse IP de la personne concernée, qui servent entre autres à Google pour comprendre l’origine des visiteurs et des clics et ensuite pour créer des règlements de commissions.

Le cookie est utilisé pour stocker des informations personnelles telles que l’heure d’accès, l’emplacement à partir duquel l’accès a été obtenu et la fréquence des visites sur notre site Web par la personne concernée. À chaque visite sur notre site Web, ces données personnelles, y compris l’adresse IP de l’accès Internet utilisé par la personne concernée, seront transmises à Google aux États-Unis d’Amérique. Ces données personnelles sont stockées par Google aux États-Unis d’Amérique. Google peut transférer ces données personnelles collectées via la procédure technique à des tiers.

La personne concernée peut, comme mentionné ci-dessus, empêcher l’installation de cookies via notre site Web à tout moment au moyen d’un ajustement correspondant du navigateur Web utilisé et ainsi refuser définitivement l’installation de cookies. Une telle adaptation du navigateur Internet utilisé empêcherait également Google Analytics de placer un cookie sur le système informatique de la personne concernée. En outre, les cookies déjà utilisés par Google Analytics peuvent être supprimés à tout moment via un navigateur Web ou d’autres logiciels.

En outre, la personne concernée a la possibilité de s’opposer à une collecte de données générées par Google Analytics, qui est liée à l’utilisation de ce site Web, ainsi qu’au traitement de ces données par Google et à la possibilité d’empêcher ces données. À cette fin, la personne concernée doit télécharger un module complémentaire de navigateur sous le lien <a onclick="window.open (this.href); return false;" href="https://policies.google.com/privacy">https://policies.google.com/privacy</a> et sous <a onclick="window.open (this.href); return false; "href="http://www.google.com/analytics/terms/us.html"> http://www.google.com/analytics/terms/us.html</a>. Google Analytics est expliqué plus en détail sous le lien suivant <a onclick="window.open (this.href); return false;" href="https://www.google.com/analytics/">https://www.google.com/analytics/</a>.

Vous trouverez de plus amples informations et les dispositions applicables en matière de protection des données de Google sous <a onclick="window.open (this.href); return false;" href="https://policies.google.com/privacy">https://policies.google.com/privacy</a> et sous <a onclick="window.open (this.href); return false; "href="http://www.google.com/analytics/terms/us.html"> http://www.google.com/analytics/terms/us.html</a>. Google Analytics est expliqué plus en détail sous le lien suivant <a onclick="window.open (this.href); return false;" href="https://www.google.com/analytics/">https://www.google.com/analytics/</a>.

<h3>Dispositions relatives à la protection des données concernant l’application et l’utilisation de DoubleClick</h3>
Sur ce site Web, le contrôleur a intégré des composants de DoubleClick de Google. DoubleClick est une marque de Google, sous laquelle des solutions de marketing en ligne principalement dédiées sont proposées aux agences de publicité et aux éditeurs.

L’opérateur de DoubleClick by Google est Google Inc., 1600 Amphitheatre Pkwy, Mountain View, CA 94043-1351, ETATS-UNIS.

DoubleClick by Google envoie des données au serveur DoubleClick à chaque impression, clic ou autre activité. Chacun de ces transferts de données déclenche une demande de cookie au navigateur de la personne concernée. Si le navigateur accepte cette demande, DoubleClick utilise un cookie dans le système informatique de la personne concernée. La définition des cookies a été expliquée ci-dessus. Le cookie a pour but d’optimiser et d’afficher des publicités. Le cookie est utilisé, entre autres, pour afficher et placer des publicités pertinentes pour l’utilisateur et pour créer ou améliorer des rapports sur les campagnes publicitaires. De plus, le cookie sert à éviter plusieurs affichages de la même publicité.

DoubleClick utilise un identifiant de cookie requis pour effectuer le processus technique. Par exemple, l’ID de cookie est requis pour afficher une publicité dans un navigateur. DoubleClick peut également utiliser l’ID de cookie pour enregistrer les annonces qui ont déjà été affichées dans un navigateur afin d’éviter les doublons. Il est également possible pour DoubleClick de suivre les conversions via l’ID de cookie. Par exemple, les conversions sont enregistrées lorsqu’un utilisateur a déjà vu une annonce DoubleClick et qu’il effectue ensuite un achat sur le site Web de l’annonceur à l’aide du même navigateur Internet.

Un cookie DoubleClick ne contient aucune information personnelle. Cependant, un cookie DoubleClick peut contenir des identifiants de campagne supplémentaires. Un ID de campagne est utilisé pour identifier les campagnes avec lesquelles l’utilisateur a déjà interagi.

À chaque appel à l’une des pages individuelles de ce site Web, qui est exploité par le contrôleur et sur lequel un composant DoubleClick a été intégré, le navigateur Internet sur le système informatique de la personne concernée est automatiquement invité par le DoubleClick respectif composant pour transmettre des données à des fins de publicité en ligne et de facturation de commissions à Google. Au cours de cette procédure technique, Google prend connaissance de toutes les données que Google peut utiliser pour effectuer des calculs de commission. Entre autres choses, Google peut comprendre que la personne concernée a cliqué sur certains liens de notre site Web.

La personne concernée peut, comme mentionné ci-dessus, empêcher l’installation de cookies via notre site Web à tout moment au moyen d’un ajustement correspondant du navigateur Web utilisé et ainsi refuser définitivement l’installation de cookies. Une telle adaptation du navigateur Internet utilisé empêcherait également Google de placer un cookie sur le système informatique de la personne concernée. En outre, les cookies déjà utilisés par Google peuvent être supprimés à tout moment via un navigateur Web ou d’autres logiciels.

De plus amples informations et les dispositions applicables en matière de protection des données de DoubleClick peuvent être récupérées dans DoubleClick by Google <a onclick ="window.open (this.href); return false;" href="https://policies.google.com/"> https://policies.google.com/</a>.

<h3>Dispositions relatives à la protection des données concernant l’application et l’utilisation de Google Translator</h3>
Le contrôleur a intégré des composants de traduction de Google Translator sur ce site Web. L’objectif du composant est d’améliorer notre service en ligne en permettant à la personne concernée de traduire automatiquement les messages en langues étrangères sur le site Web du responsable du traitement. L’opérateur de Google Translator est Google LLC, 1600 Amphitheatre Pkwy, Mountain View, CA 94043-1351, ETATS-UNIS. Google Translator est un service de traduction en ligne de Google LLC qui permet aux utilisateurs de traduire automatiquement des mots individuels, des textes, une page Web ou des parties de celle-ci dans différentes langues. Cependant, les traductions ne sont pas toujours correctes et contiennent parfois des déclarations trompeuses, fausses ou insultantes. Nous déclinons toute responsabilité quant à l’exactitude, la fiabilité ou l’actualité des traductions et ne sommes pas responsables des dommages encourus.

À chaque appel à l’une des pages individuelles de ce site Web exploité par le responsable du traitement et sur lequel un composant de traduction est intégré, des données sont envoyées à Google Translator. Google Translator place des cookies sur le système informatique de la personne concernée comme décrit ci-dessus. À chaque visite sur le site Internet du responsable du traitement, des données personnelles, y compris l’adresse IP de l’accès Internet utilisé par la personne concernée, sont transmises à Google à des serveurs aux États-Unis d’Amérique et y sont stockées. Google peut transférer ces données personnelles collectées via le processus technique à d’autres services Google et à des tiers. Google reçoit toujours des informations pendant toute la durée du séjour sur le site Web qui a appelé le service, quand il a été appelé, à partir de quel site, avec quelle adresse IP et quel navigateur, et quels textes ont été saisis par la personne concernée pour traduction ou récupéré. Ces données sont traitées sur des serveurs étrangers, généralement aux États-Unis, et sont collectées, stockées, analysées et traitées par Google. Ces données sont échangées entre les différents services Google et les activités de la personne concernée sont suivies à l’aide de cookies, d’un identifiant de navigateur et de l’adresse IP. Si la personne concernée est connectée à Google en même temps, les données seront liées aux données d’utilisateur auxquelles Google se connecte et sont utilisées, par exemple à des fins promotionnelles, également sur d’autres sites Web.

En utilisant Google Translate sur nos pages, la personne concernée accepte la collecte, le traitement et l’utilisation des données collectées automatiquement et des données saisies par la personne concernée elle-même par Google, l’un de ses agents, services ou tiers conformément aux Conditions d’utilisation de Google. Politique d’utilisation et de confidentialité. Si les données de la personne concernée ne sont pas autorisées à être transmises à Google, les services Google ne peuvent pas être utilisés.

Les conditions d’utilisation de Google Translate sont disponibles sur <a onclick ="window.open (this.href); return false;"href="https://policies.google.com/terms">https://policies.google.com/terms</a>. Dispositions relatives à la protection des données de Google Translate disponibles sur <a onclick ="window.open (this.href); return false;"href="https://policies.google.com/privacy">https://policies.google.com/privacy</a> fournir des informations sur la collecte, le traitement et l’utilisation des données personnelles par Google.

Plus d’informations sur Google Translate sont disponibles sur : <a onclick="window.open(this.href); return false;" href="http://translate.google.com/manager/website/">http://translate.google.com/manager/website/</a>.

<h3>Dispositions relatives à la protection des données concernant l’application et l’utilisation de Google Fonts</h3>
Sur ce site Web, le contrôleur a intégré des polices externes de Google Fonts. L’opérateur de Google Fonts est Google Inc., 1600 Amphitheater Pkwy, Mountain View, CA 94043-1351, ETATS-UNIS. Google Fonts est un service d’utilisation de polices en ligne pour une utilisation sur divers sites Web. Les fichiers de polices doivent être téléchargés dans le système informatique de la personne concernée avant de pouvoir être affichés. Les polices fournies par l’API Google Fonts sont automatiquement compressées pour un téléchargement plus rapide et une fois téléchargées, elles sont mises en cache dans le navigateur et réutilisées par une autre page Web qui utilise l’API Google Fonts.

Le but de ces composants est d’améliorer la conception du site Web du responsable du traitement et la présentation cohérente des polices sur le système informatique de l’utilisateur. L’intégration de ces polices se fait via un appel de serveur, généralement un serveur Google aux USA. Cela amène le système informatique de la personne concernée à télécharger les polices.

À chaque visite du site Internet du responsable du traitement sur lequel Google Fonts est intégré, des données personnelles, y compris l’adresse IP de l’accès Internet utilisé par la personne concernée, sont transmises à Google à des serveurs aux États-Unis d’Amérique et y sont stockées. A chaque appel d’une seule page du site Internet du responsable du traitement sur laquelle Google Fonts est intégré, une demande est adressée aux serveurs de Google Fonts pour l’actualisation des polices utilisées. Les demandes sont conservées pendant une journée, les polices téléchargées sont stockées dans le système informatique de l’utilisateur jusqu’à un an. À cette fin, Google stocke des cookies sur l’appareil de l’utilisateur, comme décrit ci-dessus, qui contiennent l’adresse IP, l’heure d’accès et les données de navigateur de la personne concernée. Google peut transférer ces données personnelles collectées via le processus technique à d’autres services Google et à des tiers.

Pendant toute la durée du séjour sur le site Internet qui a appelé le service, Google reçoit toujours des informations, à quel moment il a été appelé, à partir de quel site, avec quelle adresse IP et quel navigateur. Ces données sont traitées sur des serveurs étrangers, généralement aux États-Unis, et sont collectées, stockées, analysées et traitées par Google. Ces données sont échangées entre les différents services Google et les activités de la personne concernée sont suivies à l’aide de cookies, d’un identifiant de navigateur et de l’adresse IP. Si la personne concernée est connectée à Google en même temps, les données seront liées aux utilisateurs de données auxquels Google se connecte et sont utilisées, par exemple à des fins promotionnelles, également sur d’autres sites Web.

Si le navigateur ou les paramètres de l’utilisateur ne prennent pas en charge les polices Web, une police installée sur le système informatique de la personne concernée est utilisée. Les polices Web peuvent être désactivées en bloquant les modules complémentaires dans le navigateur.

Plus d’informations sur Google Fonts sont disponibles sur : <a onclick="window.open(this.href); return false;" href="https://fonts.google.com/about#">https://fonts.google.com/about#</a> et sur <a onclick="window.open(this.href); return false;" href="https://developers.google.com/fonts/faq">https://developers.google.com/fonts/faq</a>.

Les conditions d1 utilisation de Google Fonts sont disponibles sur <a onclick="window.open (this.href); return false;" href="https://policies.google.com/terms">https://policies.google.com/terms</a>. Dispositions relatives à la protection des données de Google Translate disponibles sur <a onclick="window.open (this.href); return false;"href="https://policies.google.com/privacy"> https://policies.google.com/privacy</a> fournir des informations sur la collecte, le traitement et l’utilisation des données personnelles par Google.

<h3>Dispositions relatives à la protection des données concernant l’application et l’utilisation de Facebook</h3>
Sur ce site Web, le responsable du traitement a intégré des composants de la société Facebook. Facebook est un réseau social.

Un réseau social est un lieu de rassemblement social sur Internet, une communauté en ligne, qui permet généralement aux utilisateurs d’interagir entre eux et d’interagir dans un espace virtuel. Un réseau social peut servir de plate-forme pour l’échange d’opinions et d’expériences, ou permettre à la communauté Internet de fournir des informations personnelles ou professionnelles. Facebook permet aux utilisateurs de réseaux sociaux de créer des profils privés, de télécharger des photos et de créer des réseaux via des demandes d’amis. Inc., 1 Hacker Way, Menlo Park, CA 94025, Etats Unis. Si une personne réside en dehors des États-Unis ou du Canada, le responsable du traitement est Facebook Ireland Ltd., 4 Grand Canal Square, Grand Canal Harbour, Dublin 2, Irlande.

L’opérateur de Facebook est Facebook, Inc., 1 Hacker Way, Menlo Park, CA 94025, États-Unis. Si une personne vit en dehors des États-Unis ou du Canada, le responsable du traitement est Facebook Ireland Ltd., 4 Grand Canal Square, Grand Canal Harbour, Dublin 2, Irlande.

À chaque appel à l’une des pages individuelles de ce site Internet, qui est exploité par le responsable du traitement et dans lequel un composant Facebook (plug-ins Facebook) a été intégré, le navigateur Internet du système informatique de la personne concernée est automatiquement invité à afficher la partie Facebook correspondante de Facebook peut être téléchargée à partir de la partie Facebook. Un aperçu de tous les plug-ins Facebook peut être ouvert sous <a onclick="window.open (this.href); return false;"href="https://developers.facebook.com/docs/plugins/">https://developers.facebook.com/docs/plugins/</a>. Au cours de cette procédure technique, Facebook est informé du sous-site spécifique de notre site Web qui a été visité par la personne concernée.

Si la personne concernée est connectée en même temps sur Facebook, Facebook détecte à chaque appel sur notre site Web par la personne concernée et pendant toute la durée de son séjour sur notre site Web quel sous-site spécifique de notre page Internet a été visité par la personne concernée. Ces informations sont collectées via la section Facebook et liées au compte Facebook respectif de la personne concernée. Si la personne concernée clique sur l’un des boutons Facebook intégrés à notre site Web, par exemple le bouton « J’aime », ou si la personne concernée soumet un commentaire, Facebook associe ces informations au compte d’utilisateur Facebook personnel de la personne concernée et les stocke. les données personnelles.

Facebook reçoit toujours des informations via la section Facebook concernant une visite de notre site Web par la personne concernée, chaque fois que la personne concernée est connectée à Facebook en même temps qu’elle consulte notre site Web. Cela se produit indépendamment du fait que la personne concernée clique ou non sur le composant Facebook. Si un tel transfert d’informations vers Facebook n’est pas souhaitable pour la personne concernée, elle peut l’empêcher en se déconnectant de son compte Facebook avant d’appeler notre site Web.

La directive sur la protection des données publiée par Facebook, disponible sur <a onclick="window.open (this.href); return false;" href="https://facebook.com/about/privacy/">https://facebook.com/about/privacy/</a> fournit des informations sur la collecte, le traitement et l’utilisation des données personnelles par Facebook. De plus, il est expliqué ici quelles options de configuration Facebook propose pour protéger la vie privée de la personne concernée. De plus, plusieurs options de configuration sont disponibles pour éliminer le transfert de données vers Facebook. Ces applications peuvent être utilisées par la personne concernée pour éliminer une transmission de données à Facebook.

<h3>Dispositions relatives à la protection des données concernant l’application et l’utilisation de YouTube</h3>
Sur ce site Web, le contrôleur a intégré des composants de YouTube. YouTube est un portail vidéo Internet qui permet aux éditeurs de vidéos et à d’autres utilisateurs de les télécharger gratuitement, ainsi que de les visualiser et de les commenter gratuitement. YouTube vous permet de publier toutes sortes de vidéos, de sorte que vous puissiez accéder à des longs métrages et à des émissions télévisées ainsi qu’à des clips musicaux, des bandes-annonces et des vidéos créées par les utilisateurs via le portail Internet.

L’opérateur de YouTube est YouTube, LLC, 901 Cherry Ave., San Bruno, CA 94066, ETATS-UNIS. YouTube, LLC est une filiale de Google Inc., 1600 Amphitheater Pkwy, Mountain View, CA 94043-1351, ETATS-UNIS.

À chaque appel à l’une des pages individuelles de ce site Web, qui est exploité par le contrôleur et sur lequel un composant YouTube (vidéo YouTube) a été intégré, le navigateur Internet dans le système informatique de la personne concernée est automatiquement invité pour une représentation de la partie YouTube correspondante à télécharger. Vous trouverez plus d’informations sur YouTube sous <a onclick="window.open (this.href); return false;" href="https://www.youtube.com/yt/about/">https://www.youtube.com/yt/about/</a>. Au cours de cette procédure technique, YouTube et Google prennent connaissance de la sous-page spécifique de notre site Web qui a été visitée par la personne concernée.

Si la personne concernée est connectée à YouTube, YouTube reconnaît à chaque appel d’une sous-page avec une vidéo YouTube, quelle sous-page spécifique de notre site Web a été visitée par la personne concernée. Ces informations sont collectées par YouTube et Google et attribuées au compte YouTube respectif de la personne concernée.ene.

YouTube et Google reçoivent des informations via le composant YouTube que la personne concernée a visité notre site Web si la personne concernée est connectée sur YouTube au moment de l’appel à notre site Web; cela se produit, que la personne clique ou non sur une vidéo YouTube. Si un tel transfert de ces informations vers YouTube et Google n’est pas souhaitable pour la personne concernée, la livraison peut être empêchée si la personne concernée se déconnecte de son propre compte YouTube avant d’appeler notre site Web.

Les dispositions de protection des données de YouTube sont disponibles sur <a onclick="window.open (this.href); return false;" href="https://policies.google.com/privacy">https://policies.google.com/privacy</a> fournir des informations sur la collecte, le traitement et l’utilisation des données personnelles par YouTube et Google.

<h3>Mode de paiement : dispositions relatives à la protection des données concernant l’utilisation de PayPal en tant que processeur de paiement</h3>
Sur ce site Web, le contrôleur a intégré des composants de PayPal. PayPal est un fournisseur de services de paiement en ligne. Les paiements sont traités via des comptes PayPal, qui représentent des comptes virtuels privés ou professionnels. PayPal peut également traiter les paiements virtuels par carte de crédit lorsqu’un utilisateur n’a pas de compte PayPal. Un compte PayPal est géré via une adresse e-mail, il n’y a donc pas de numéro de compte classique. PayPal permet d’activer des paiements en ligne à des tiers ou de recevoir des paiements. PayPal accepte également les fonctions de fiduciaire et propose des services de protection des acheteurs.

L’opérateur européen de PayPal est PayPal (Europe) S.à.r.l. & Cie. S.C.A., 22-24 Boulevard Royal, 2449 Luxembourg, Luxembourg.

Si la personne concernée choisit « PayPal » comme option de don, nous transmettons automatiquement les données de la personne concernée à PayPal. En sélectionnant cette option de paiement, la personne concernée accepte le transfert des données personnelles nécessaires au traitement du paiement.

Les données personnelles transmises à PayPal sont généralement le prénom, le nom, l’adresse, l’adresse e-mail, l’adresse IP, le numéro de téléphone, le numéro de téléphone portable ou d’autres données nécessaires au traitement du paiement.

Le transfert des données est destiné au traitement des paiements et à la prévention de la fraude. Le responsable du traitement transférera les données personnelles à PayPal, en particulier si un intérêt légitime à la transmission est donné. Les données personnelles échangées entre PayPal et le responsable du traitement sont transmises par PayPal aux bureaux de crédit économiques. Cette transmission est destinée aux vérifications d’identité et de crédit.

PayPal transférera, si nécessaire, les données personnelles aux sociétés affiliées et prestataires de services ou sous-traitants dans la mesure nécessaire pour remplir les obligations contractuelles ou pour traiter les données à traiter dans la commande.

La personne concernée a la possibilité à tout moment de retirer son consentement au traitement des données personnelles par PayPal. Un retrait n’a aucun effet sur les données personnelles qui doivent être traitées, utilisées ou transmises conformément au traitement (contractuel) des paiements.

Les dispositions applicables de PayPal en matière de protection des données peuvent être consultées sous <a onclick="window.open(this.href); return false;" href="https://www.paypal.com/us/webapps/mpp/ua/privacy-full">https://www.paypal.com/us/webapps/mpp/ua/privacy-full</a>

<h3>Base juridique du traitement</h3>
Art. 6(1) allumé un RGPD sert de base légale pour le traitement de la température pour laquelle nous obtenons le consentement pour une finalité de traitement spécifique. Si le traitement de données à caractère personnel est nécessaire à l’exécution d’un contrat auquel la personne concernée est partie, comme c’est le cas, par exemple, lorsque des opérations de traitement sont nécessaires à la fourniture de biens ou à la fourniture d’un autre service, le traitement est sur la base de l’article 6 (1) lit. b RGPD. Il en va de même pour les traitements nécessaires à l’exécution de mesures précontractuelles, par exemple dans le cas d’enquêtes relatives à nos produits ou services. Notre société est-elle soumise à une obligation légale qui nécessite le traitement de données à caractère personnel, par exemple pour l’accomplissement d’obligations fiscales, le traitement est basé sur l’art. 6(1) lit. d RGPD. Dans de rares cas, le traitement des données personnelles peut être nécessaire pour protéger les intérêts vitaux de la personne concernée ou d’une autre personne physique. Ce serait le cas, par exemple, si un visiteur était blessé dans notre entreprise et que son nom, son âge, les détails de son assurance maladie ou d’autres informations vitales devraient être transmis à un médecin, un hôpital ou un autre tiers. Le traitement serait alors basé sur l’art. 6(1) lit. f RGPD. Enfin, les opérations de traitement pourraient être fondées sur l’art. 6(1) lit. f RGPD. Cette base légale est utilisée pour les opérations de traitement qui ne sont pas couvertes par l’un des motifs juridiques ci-dessus, si le traitement est nécessaire aux intérêts légitimes poursuivis par notre société ou par un tiers, sauf si ces intérêts sont prépondérants. ou les droits et libertés fondamentaux de la personne concernée qui nécessitent la protection des données personnelles. Un tel traitement est autorisé notamment parce qu’il a été spécifiquement mentionné par le législateur européen. Il a estimé qu’un intérêt légitime peut être présumé si la personne concernée est un client du responsable du traitement (considérant 47, phrase 2 RGPD).

<h3>Durée de conservation des données personnelles</h3>
Le critère utilisé pour déterminer la durée de conservation des données personnelles est la durée de conservation légale respective. Après l’expiration de ce délai, les données associées sont systématiquement supprimées, tant qu’elles ne sont plus nécessaires à l’exécution du contrat ou à la conclusion d’un contrat.

<h3>Fourniture de données personnelles en tant qu’exigence légale ou contractuelle ; Exigence nécessaire pour conclure un contrat ; Obligation de la personne concernée de fournir les données personnelles ; conséquences possibles de la non-fourniture de ces données</h3>
Nous précisons que la fourniture de données à caractère personnel est en partie requise par la loi (par exemple, les réglementations fiscales) ou peut également résulter de dispositions contractuelles (par exemple, des informations sur le partenaire contractuel). Parfois, il peut être nécessaire de conclure un contrat selon lequel la personne concernée nous fournit des données personnelles, qui doivent ensuite être traitées par nous. Par exemple, la personne concernée est obligée de nous fournir des données personnelles lorsque notre entreprise signe un contrat avec elle. Le défaut de fournir les données personnelles signifierait que le contrat avec la personne concernée ne pourrait pas être conclu. Avant que des données personnelles ne soient fournies par la personne concernée, la personne concernée doit contacter un employé. L’employé précise à la personne concernée si la fourniture des données personnelles est légalement ou contractuellement requise ou nécessaire à la conclusion du contrat, s’il existe une obligation de fournir les données personnelles et les conséquences de la non-fourniture des données personnelles.

<h3>Résiliation de votre contrat</h3>
Toute personne sur notre site Web peut supprimer son inscription à tout moment à sa seule discrétion. Toutes les données personnelles seront supprimées lors de l’annulation de l’inscription. Après la suppression, nous ne pouvons pas récupérer les données.',
	'JVPPDMT_REJECTION'						=> 'désapprouver',
	'JVPPDMT_USED_COOKIE' => [
		'<strong>Cookies utilisés par le forum phpBB:</strong>',
		'%1$s_cookie_status : Lorsque vous visitez notre site Web, une confirmation d’acceptation de l’utilisation des cookies est enregistrée.',
		'%1$s_k : Utilisé pour utiliser le service de connexion automatique (souvenez-vous de moi).',
		'%1$s_lang : Si l’utilisateur invité change la langue, ce cookie est créé. Cette session se termine lorsque la navigation s’arrête.',		
		'%1$s_sid : Contient l’ID de session. Ce cookie est utilisé pour identifier l’utilisateur avec %1$s_u.',
		'%1$s_u : L’ID utilisateur de l’utilisateur est stocké ici.',
		'%1$s_track : Marquage des messages lus pour les invités.',

		/* Si vous n’utilisez pas l’extension (phpBB Arcade) ajoutez le commentaire // au début de la ligne.. */
		'<br><strong>Cookies utilisé par Arcade:</strong>',
		'%1$s_arcade_sid : Contient l’ID de session de jeu à utiliser avec phpBB Arcade.',
		'%1$s_arcade_pd : Comprend l’identifiant du jeu à utiliser avec phpBB Arcade.',
		'%1$s_arcade_popup : Contient les paramètres lors de la lecture d’un jeu dans la fenêtre contextuelle.',
		'%1$s_arcade_lighting : Comprend les préférences de l’utilisateur du rétroéclairage des jeux.',
		'%1$s_arcade_info_block : Contient la préférence de l’utilisateur pour la visibilité du bloc d’informations pendant les jeux.',

		/* Si vous n’utilisez pas l’extension (JV Footer Chat) ajoutez le commentaire // au début de la ligne.. */
		'<br><strong>Cookie utilisé par JV footer chat :</strong>',
		'%1$s_jv_chat_data : Contient les paramètres du module tchat et le numéro d’identification des utilisateurs avec lesquels nous discutons.',

		/*Si vous n’utilisez pas l’extension (JV SHoutbox) ajoutez le commentaire // au début de la ligne.. */
		'<br><strong>Cookie utilisé par JV Shoutbox:</strong>',
		'%1$s_jv_shout_close_: Utilisé sur toutes les pages où vous avez fermé le bloc shoutbox. Chaque page crée un cookie en son propre nom. Par exemple, la page d’index est nommée: %1$s_jv_shout_close_index.',

		/* Si vous n’utilisez pas l’extension (Collapsible Forum Categories) ajoutez le commentaire // au début de la ligne. */
		'<br><strong>Cookie utilisé par les catégories de forum réductibles:</strong>',
		'%1$s_ccat : Stocke les préférences personnelles des utilisateurs dans les champs de catégorie réduits ou étendus.',
	],
]);
