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
// 'Page %s of %s' you can (and should) write 'Page “%1$s” of %2$s', this allows
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
	'JVPPDMT_APPROVAL'						=> 'Approval',
	'JVPPDMT_CONFIRM'						=> 'I have read and understood the Privacy Policy.',
	'JVPPDMT_COOKIE_CONFIRM'				=> 'Please select whether the %s website could save cookies on your device:',
	'JVPPDMT_COOKIE_DESC'					=> 'Attention! This website uses cookies to ensure you get the best experience on our website. <a onclick="window.open(this.href); return false;" href="https://cookiesandyou.com/">Learn more</a>.<br>Here, you have the option to accept or deny cookies, and at any time you can disable the use of site cookies in your browser settings, too.',
	'JVPPDMT_DISABLED_COOKIE_GUEST_USER'	=> 'We did not save cookies to guest users devices!',
	'JVPPDMT_NOT_CONFIRM'					=> 'Attention! You have not made a selection for confirmation.',
	'JVPPDMT_ONLY_ALREADY_EXISTING_DATA'	=> 'For the data already stored I approve, but nothing else.<br><em>Note that if you choose this option, you will be in a group whose eligibility will only cover viewing. Of course, you can change that decision at any time later at the  User Control Panel / Privacy Data / Settings.</em>',
	'JVPPDMT_ONLY_REGISTER_DATA'			=> 'For the personal data required for registration I approve, but nothing else.<br><em>Note that if you choose this option, you will be in a group whose eligibility will only cover viewing. Of course, you can change that decision at any time later at the  User Control Panel / Privacy Data / Settings.</em>',
	'JVPPDMT_PERSONAL_DATA_CONFIRM'			=> 'Please select whether the %s website can use and store your personal data. The personal data will not be passed on to third parties.',
	'JVPPDMT_PERSONAL_DATA_REG'				=> 'Attention! During registration, personal data must be provided.',
	'JVPPDMT_PRIVACY_POLICY'				=> 'Privacy Policy',
	'JVPPDMT_PRIVACY_POLICY_DESC'			=> 'Data protection is of a particularly high priority for the management of the website “%1$s”. The use of the internet pages of the website “%1$s” is possible without any indication of personal data; however, if a data subject wants to use special services via our website, processing of personal data could become necessary. If the processing of personal data is necessary and there is no statutory basis for such processing, we generally obtain consent from the data subject.

The processing of personal data, such as the name, address, e-mail address, or telephone number of a data subject shall always be in line with the General Data Protection Regulation (GDPR), and in accordance with the country-specific data protection regulations applicable to the website “%1$s”. By means of this data protection declaration, we would like to inform the general public about the nature, scope, and purpose of the personal data we collect, use and process. Furthermore, data subjects are informed, by means of this data protection declaration, of the rights to which they are entitled.

The controller of the website “%1$s” has implemented numerous technical and organizational measures to ensure the most complete protection of personal data processed through this website. However, internet-based data transmissions may in principle have security gaps, so absolute protection may not be guaranteed. For this reason, every data subject is free to transfer personal data to us via alternative means, e.g. by telephone.

<h3>Definitions</h3>
The data protection declaration of the website “%1$s” is based on the terms used by the European legislator for the adoption of the General Data Protection Regulation (GDPR). Our data protection declaration should be legible and understandable for the general public, as well as our customers and partners. To ensure this, we would like to first explain the terminology used.

In this data protection declaration, we use, inter alia, the following terms:

<strong>a) Personal data</strong>
Personal data means any information relating to an identified or identifiable natural person (“data subject”). An identifiable natural person is one who can be identified, directly or indirectly, in particular by reference to an identifier such as a name, an identification number, location data, an online identifier or to one or more factors specific to the physical, physiological, genetic, mental, economic, cultural or social identity of that natural person.

<strong>b) Data subject</strong>
Data subject is any identified or identifiable natural person, whose personal data is processed by the controller responsible for the processing.

<strong>c) Processing</strong>
Processing is any operation or set of operations which is performed on personal data or on sets of personal data, whether or not by automated means, such as collection, recording, organisation, structuring, storage, adaptation or alteration, retrieval, consultation, use, disclosure by transmission, dissemination or otherwise making available, alignment or combination, restriction, erasure or destruction.

<strong>d) Restriction of processing</strong>
Restriction of processing is the marking of stored personal data with the aim of limiting their processing in the future.

<strong>e) Controller responsible for the processing</strong>
Controller responsible for the processing is the natural or legal person, public authority, agency or other body which, alone or jointly with others, determines the purposes and means of the processing of personal data; where the purposes and means of such processing are determined by Union or Member State law, the controller or the specific criteria for its nomination may be provided for by Union or Member State law.

<strong>f) Processor</strong>
Processor is a natural or legal person, public authority, agency or other body which processes personal data on behalf of the controller.

<strong>g) Recipient</strong>
Recipient is a natural or legal person, public authority, agency or another body, to which the personal data are disclosed, whether a third party or not. However, public authorities which may receive personal data in the framework of a particular inquiry in accordance with Union or Member State law shall not be regarded as recipients; the processing of those data by those public authorities shall be in compliance with the applicable data protection rules according to the purposes of the processing.

<strong>h) Third party</strong>
Third party is a natural or legal person, public authority, agency or body other than the data subject, controller, processor and persons who, under the direct authority of the controller or processor, are authorised to process personal data.

<strong>i) Consent</strong>
Consent of the data subject is any freely given, specific, informed and unambiguous indication of the data subject’s wishes by which he or she, by a statement or by a clear affirmative action, signifies agreement to the processing of personal data relating to him or her.

<h3>Data of the controller</h3>
Controller for the purposes of the General Data Protection Regulation (GDPR), other data protection laws applicable in Member states of the European Union and other provisions related to data protection is:

<strong>Controller:</strong> %2$s

<strong>Contact E-mail address:</strong> %3$s
<strong>Phone number:</strong> %4$s

<h3>Cookies</h3>
The internet pages of the website “%1$s” use cookies. Cookies are text files that are stored in a computer system via an Internet browser.

Many Internet sites and servers use cookies. Many cookies contain a so-called cookie ID. A cookie ID is a unique identifier of the cookie. It consists of a character string through which Internet pages and servers can be assigned to the specific Internet browser in which the cookie was stored. This allows visited Internet sites and servers to differentiate the individual browser of the dats subject from other Internet browsers that contain other cookies. A specific Internet browser can be recognized and identified using the unique cookie ID.

Through the use of cookies, the website “%1$s” can provide the users of this website with more user-friendly services that would not be possible without the cookie setting.

By means of a cookie, the information and offers on our website can be optimized with the user in mind. Cookies allow us, as previously mentioned, to recognize our website users. The purpose of this recognition is to make it easier for users to utilize our website. The website user that uses cookies, e.g. does not have to enter access data each time the website is accessed, because this is taken over by the website, and the cookie is thus stored on the user’s computer system. Another example is the cookie of a shopping cart in an online shop. The online store remembers the articles that a customer has placed in the virtual shopping cart via a cookie. A browser game can save the current score or level status in a cookie, and at the end of the game return to the leaderboard for storage.

Concrete examples of the use of cookies in our website:

%5$s

The data subject may, at any time, prevent the setting of cookies through our website by means of a corresponding setting of the Internet browser used, and may thus permanently deny the setting of cookies. Furthermore, already set cookies may be deleted at any time via an Internet browser or other software programs. This is possible in all popular Internet browsers. If the data subject deactivates the setting of cookies in the Internet browser used, not all functions of our website may be entirely usable.
%6$s
<h3>Collection of general data and information</h3>
The website “%1$s” collects a series of general data and information when a data subject or automated system calls up the website. This general data and information are stored in the server log files. Collected may be (1) the browser types and versions used, (2) the operating system used by the accessing system, (3) the website from which an accessing system reaches our website (so-called referrers), (4) the sub-websites, (5) the date and time of access to the Internet site, (6) an Internet protocol address (IP address), (7) the Internet service provider of the accessing system, and (8) any other similar data and information that may be used in the event of attacks on our information technology systems.

When using these general data and information, the website “%1$s” does not draw any conclusions about the data subject. Rather, this information is needed to (1) deliver the content of our website correctly, (2) optimize the content of our website as well as its advertisement, (3) ensure the long-term viability of our information technology systems and website technology, and (4) provide law enforcement authorities with the information necessary for criminal prosecution in case of a cyber-attack. Therefore, the website “%1$s” analyzes anonymously collected data and information statistically, with the aim of increasing the data protection and data security of our website, and to ensure an optimal level of protection for the personal data we process. The anonymous data of the server log files are stored separately from all personal data provided by a data subject.

<h3>Registration on our website</h3>
The data subject has the possibility to register on the website of the controller with the indication of personal data. The registration of the data subject, with the voluntary indication of personal data, is intended to enable the controller to offer the data subject contents or services that may only be offered to registered users due to the nature of the matter in question. Which personal data are transmitted to the controller is determined by the respective input mask used for the registration. The personal data entered by the data subject are collected and stored exclusively for internal use by the controller, and for his own purposes.

To register an account on the website of the controller, will be required at a bare minimum the following personal data: a uniquely identifiable username, a personal password used for logging into your account and a personal, valid e-mail address. This e-mail address is required to receive the confirmation link used to authenticate the registration and to receive further messages from the website. The further messages can optionally selected  and deselected in the user control panel after the successfully login. Your password is ciphered (a one-way hash) so that it is secure. However, it is recommended that you do not reuse the same password across a number of different websites. Your password is the means of accessing your account at this website, so please guard it carefully. Under no circumstances will anyone affiliated with this website or another 3rd party, legitimately ask you for your password. Should you forget your password for your account, you can use the “I forgot my password” feature provided by the software. This process will ask you to submit the used user name and e-mail address you entered in your profile, then the software will generate a new password to reclaim your account. For this reason, it is recommended to always keep the e-mail address up-to-date.

By registering on the website of the controller, the IP address—assigned by the Internet service provider (ISP) and used by the data subject—date, and time of the registration are also stored. The storage of this data takes place against the background that this is the only way to prevent the misuse of our services, and, if necessary, to make it possible to investigate committed offenses. Insofar, the storage of this data is necessary to secure the controller. This data is not passed on to third parties unless there is a statutory obligation to pass on the data, or if the transfer serves the aim of criminal prosecution.

By registering on the website of the controller, the data subject allows the controller, to store the data entered by the data subject as part of the registration and in the profile, as well as ongoing access data (date and time of use, IP address, location data, scores, and other data transmitted by the browser of the data subject), and to use for website operation. It should be noted that all data entered in the profile and posts written by the data subject can be available on the Internet depending on the configuration and can be called up by anyone. In addition the data subject allows, to be contacted by the website to transmit the administrative messages required to open and manage the user account.

Registered persons are free to change the personal data specified during the registration at any time, or to have them completely deleted from the data stock of the controller.

The data controller shall, at any time, provide information upon request to each data subject as to what personal data are stored about the data subject. In addition, the data controller shall correct or erase personal data at the request or indication of the data subject, insofar as there are no statutory storage obligations. The entirety of the controller’s employees are available to the data subject in this respect as contact persons.

<h3>Contact possibility via the website</h3>
The website “%1$s” contains information that enables a quick electronic contact to us, as well as direct communication with us, which also includes a general address of the so-called electronic mail (e-mail address). If a data subject contacts the controller by e-mail or via a contact form, the personal data transmitted by the data subject are automatically stored. Such personal data transmitted on a voluntary basis by a data subject to the data controller are stored for the purpose of processing or contacting the data subject. There is no transfer of this personal data to third parties.

<h3>Routine erasure and blocking of personal data</h3>
The data controller shall process and store the personal data of the data subject only for the period necessary to achieve the purpose of storage, or as far as this is granted by the European legislator or other legislators in laws or regulations to which the controller is subject to.

If the storage purpose is not applicable, or if a storage period prescribed by the European legislator or another competent legislator expires, the personal data are routinely blocked or erased in accordance with legal requirements.

<h3>Rights of the data subject</h3>
<strong>a) Right of confirmation</strong>
Each data subject shall have the right granted by the European legislator to obtain from the controller the confirmation as to whether or not personal data concerning him or her are being processed. If a data subject wishes to avail himself of this right of confirmation, he or she may, at any time, contact any employee of the controller.

<strong>b) Right of access</strong>
Each data subject shall have the right granted by the European legislator to obtain from the controller free information about his or her personal data stored at any time and a copy of this information. Furthermore, the European directives and regulations grant the data subject access to the following information:

the purposes of the processing;
the categories of personal data concerned;
the recipients or categories of recipients to whom the personal data have been or will be disclosed, in particular recipients in third countries or international organisations;
where possible, the envisaged period for which the personal data will be stored, or, if not possible, the criteria used to determine that period;
the existence of the right to request from the controller rectification or erasure of personal data, or restriction of processing of personal data concerning the data subject, or to object to such processing;
the existence of the right to lodge a complaint with a supervisory authority;
where the personal data are not collected from the data subject, any available information as to their source;
the existence of automated decision-making, including profiling, referred to in Article 22(1) and (4) of the GDPR and, at least in those cases, meaningful information about the logic involved, as well as the significance and envisaged consequences of such processing for the data subject.
Furthermore, the data subject shall have a right to obtain information as to whether personal data are transferred to a third country or to an international organisation. Where this is the case, the data subject shall have the right to be informed of the appropriate safeguards relating to the transfer.

If a data subject wishes to avail himself of this right of access, he or she may, at any time, contact any employee of the controller.

<strong>c) Right to rectification</strong>
Each data subject shall have the right granted by the European legislator to obtain from the controller without undue delay the rectification of inaccurate personal data concerning him or her. Taking into account the purposes of the processing, the data subject shall have the right to have incomplete personal data completed, including by means of providing a supplementary statement.

If a data subject wishes to exercise this right to rectification, he or she may, at any time, contact any employee of the controller.

<strong>d) Right to erasure (Right to be forgotten)</strong>
Each data subject shall have the right granted by the European legislator to obtain from the controller the erasure of personal data concerning him or her without undue delay, and the controller shall have the obligation to erase personal data without undue delay where one of the following grounds applies, as long as the processing is not necessary:

The personal data are no longer necessary in relation to the purposes for which they were collected or otherwise processed.
The data subject withdraws consent to which the processing is based according to point (a) of Article 6(1) of the GDPR, or point (a) of Article 9(2) of the GDPR, and where there is no other legal ground for the processing.
The data subject objects to the processing pursuant to Article 21(1) of the GDPR and there are no overriding legitimate grounds for the processing, or the data subject objects to the processing pursuant to Article 21(2) of the GDPR.
The personal data have been unlawfully processed.
The personal data must be erased for compliance with a legal obligation in Union or Member State law to which the controller is subject.
The personal data have been collected in relation to the offer of information society services referred to in Article 8(1) of the GDPR.
If one of the aforementioned reasons applies, and a data subject wishes to request the erasure of personal data stored by the website “%1$s”, he or she may, at any time, contact any employee of the controller. An employee of “%1$s” shall promptly ensure that the erasure request is complied with immediately.

Where the controller has made personal data public and is obliged pursuant to Article 17(1) of the GDPR to erase the personal data, the controller, taking account of available technology and the cost of implementation, shall take reasonable steps, including technical measures, to inform other controllers processing the personal data that the data subject has requested erasure by such controllers of any links to, or copy or replication of, those personal data, as far as processing is not required. An employees of the website “%1$s” will arrange the necessary measures in individual cases.

<strong>e) Right of restriction of processing</strong>
Each data subject shall have the right granted by the European legislator to obtain from the controller restriction of processing where one of the following applies:

The accuracy of the personal data is contested by the data subject, for a period enabling the controller to verify the accuracy of the personal data.
The processing is unlawful and the data subject opposes the erasure of the personal data and requests instead the restriction of their use instead.
The controller no longer needs the personal data for the purposes of the processing, but they are required by the data subject for the establishment, exercise or defence of legal claims.
The data subject has objected to processing pursuant to Article 21(1) of the GDPR pending the verification whether the legitimate grounds of the controller override those of the data subject.
If one of the aforementioned conditions is met, and a data subject wishes to request the restriction of the processing of personal data stored by the website “%1$s”, he or she may at any time contact any employee of the controller. The employee of the website “%1$s” will arrange the restriction of the processing.

<strong>f) Right to data portability</strong>
Each data subject shall have the right granted by the European legislator, to receive the personal data concerning him or her, which was provided to a controller, in a structured, commonly used and machine-readable format. He or she shall have the right to transmit those data to another controller without hindrance from the controller to which the personal data have been provided, as long as the processing is based on consent pursuant to point (a) of Article 6(1) of the GDPR or point (a) of Article 9(2) of the GDPR, or on a contract pursuant to point (b) of Article 6(1) of the GDPR, and the processing is carried out by automated means, as long as the processing is not necessary for the performance of a task carried out in the public interest or in the exercise of official authority vested in the controller.

Furthermore, in exercising his or her right to data portability pursuant to Article 20(1) of the GDPR, the data subject shall have the right to have personal data transmitted directly from one controller to another, where technically feasible and when doing so does not adversely affect the rights and freedoms of others.

In order to assert the right to data portability, the data subject may at any time contact any employee of the website “%1$s”.

<strong>g) Right to object</strong>
Each data subject shall have the right granted by the European legislator to object, on grounds relating to his or her particular situation, at any time, to processing of personal data concerning him or her, which is based on point (e) or (f) of Article 6(1) of the GDPR. This also applies to profiling based on these provisions.

the website “%1$s” shall no longer process the personal data in the event of the objection, unless we can demonstrate compelling legitimate grounds for the processing which override the interests, rights and freedoms of the data subject, or for the establishment, exercise or defence of legal claims.

If the website “%1$s” processes personal data for direct marketing purposes, the data subject shall have the right to object at any time to processing of personal data concerning him or her for such marketing. This applies to profiling to the extent that it is related to such direct marketing. If the data subject objects to the website “%1$s” to the processing for direct marketing purposes, the website “%1$s” will no longer process the personal data for these purposes.

In addition, the data subject has the right, on grounds relating to his or her particular situation, to object to processing of personal data concerning him or her by the website “%1$s” for scientific or historical research purposes, or for statistical purposes pursuant to Article 89(1) of the GDPR, unless the processing is necessary for the performance of a task carried out for reasons of public interest.

In order to exercise the right to object, the data subject may contact any employee of the website “%1$s”. In addition, the data subject is free in the context of the use of information society services, and notwithstanding Directive 2002/58/EC, to use his or her right to object by automated means using technical specifications.

<strong>h) Automated individual decision-making, including profiling</strong>
Each data subject shall have the right granted by the European legislator not to be subject to a decision based solely on automated processing, including profiling, which produces legal effects concerning him or her, or similarly significantly affects him or her, as long as the decision (1) is not is necessary for entering into, or the performance of, a contract between the data subject and a data controller, or (2) is not authorised by Union or Member State law to which the controller is subject and which also lays down suitable measures to safeguard the data subject’s rights and freedoms and legitimate interests, or (3) is not based on the data subject’s explicit consent.

If the decision (1) is necessary for entering into, or the performance of, a contract between the data subject and a data controller, or (2) it is based on the data subject’s explicit consent, the website “%1$s” shall implement suitable measures to safeguard the data subject’s rights and freedoms and legitimate interests, at least the right to obtain human intervention on the part of the controller, to express his or her point of view and contest the decision.

If the data subject wishes to exercise the rights concerning automated individual decision-making, he or she may, at any time, contact any employee of the website “%1$s”.

<strong>i) Right to withdraw data protection consent</strong>
Each data subject shall have the right granted by the European legislator to withdraw his or her consent to processing of his or her personal data at any time.

If the data subject wishes to exercise the right to withdraw the consent, he or she may, at any time, contact any employee of the website “%1$s”.

<strong>j) Complaint in case of data breaches</strong>
In the case of data protection violations the person concerned has a right of complaint with the competent supervisory authority. Supervisory authority in data protection issues is the countrys data protection officer of the state in which the the data subject has its permanent residence.

An overview of the National Data Protection Authorities and there links and addresses you can find here: <a onclick="window.open(this.href); return false;" href="https://ico.org.uk/">https://ico.org.uk/ - address for Great Britain</a> or <a onclick="window.open(this.href); return false;" href="https://ec.europa.eu/newsroom/article29/item-detail.cfm?item_id=612080">https://ec.europa.eu - addresses and links for European countries</a>.

<h3>Data protection provisions about the application and use of profile pictures at Gravatar</h3>
The controller has integrated the Gravatar service on this website in order to be able to use the help of Gravatar to give the post and comment writers the opportunity to personalize their posts with a cross-page profile picture (also known as an avatar). The operator of the service Gravatar is the Automattic Inc., 132 Hawthorne Street San Francisco, CA 94107, USA.

Gravatar is a service where the person concerned can log in and save profile pictures with an e-mail address. The user picture chosen there can then be used on many different websites. If the data subject writes posts or comments on other online sites with the respective e-mail address, their profile picture can be displayed next to the posts or comments. For this, the e-mail address provided by the data subject is sent encrypted to Gravatar in order to check whether a profile with a picture is stored for this. This is the only purpose of the transfer of the e-mail address.

By displaying the images, Gravatar will be aware of the data subjects current IP address, as this is necessary for communication between a browser and an online service. In addition, Gravatar receives information about the visited websites, and where the profile picture is used. These data connections are not under our control and we are not aware of the data used or sent. For more information on how Gravatar collects and uses data, see the Automattic Privacy Policy: <a onclick="window.open(this.href); return false;" href="https://automattic.com/privacy/">https://automattic.com/privacy/</a>.

If the data subject does not want a picture to appear in the posts, which is linked to their e-mail address at Gravatar, it should be used in the user account and for the posts or comments an e-mail address, which is not deposited at Gravatar. Users can completely prevent the transmission of data by not connecting a Gravatar image with their user account or comments, but preferably selecting a local user image.

Automattic is certified under the Privacy Shield Agreement, which provides a guarantee to comply with European privacy legislation. More information you can find at <a onclick="window.open(this.href); return false;" href="https://www.privacyshield.gov/participant?id=a2zt0000000CbqcAAC&status=Active">https://www.privacyshield.gov</a>.

<h3>Data protection provisions about the application and use of a game room</h3>
On this website, the controller has integrated a game room component (also called arcade) with browser games. By using the arcade modules, cookies are set, as explained above, which store session data and the custom visual representation of the games and of the arcade pages. For proper operation, it is necessary to transmit data on reached score per game, game level, date of the reached score, number of game starts, duration of the game, ranking against other users and similar statistics, and store it in association with the user account. It may contain components of a text translation service, such as Google Translate. See the Privacy Policy for Google Translate below. It is also possible that games will build data links to foreign sites that will result in a specific ranking or stats for that game. There may also be links within the games to so-called social media, which track their members activities in this regard.

If the data subject owns a user account on these third-party sites or social media and is logged in there, these sites may receive information about the visit of our site, the respective game and the scores achieved. In return, it is possible that advertisements will be sent to the data subject from these pages. These data connections are not under our control and we are not aware of the data used or sent. The data subject can prevent any transfer of personal data there by logging out of the corresponding account or not using the games. The arcade can partly be used without registration and storage of cookies or data. However, many features are not available and achieved scores can not be saved. For guests, no personal information is stored outside the general server access log. However, guest players are also unable to save the game score, and many features are not available.

Before game is launched, a game intro will be loaded, linking to the “https://connect.jv-arcade.com” website. The “jv-arcade.com” controller clearly states that it does not transport any personal data about the users during the connection and does not use cookies.

<h3>Data protection provisions about the application and use of chats</h3>
On this website, the controller has integrated so-called chat modules (also called shoutbox or footer chat). The purpose of these modules is to allow users to communicate directly with each other in real time. By using a chat module cookies are set, as explained under point 3., which store settings for the respective chat box (e.g. sound on / off, box collapsed or uncollapsed, or box position within a page), and session or history data. To properly operate a chat module, it is necessary to store user posts along with the time of creation and in association with his user account in the database. Guest posts are stored in association with the IP address. This is required to display user submissions in the correct chronological order, assign them to the authors, and to prosecute any violations of the Terms of Use or applicable law. Conversation content in chat modules can be publicly visible on the Internet, depending on the configuration, and may be read or reviewed by anyone.

<h3>Data protection provisions about the application and use of Google AdSense</h3>
On this website, the controller has integrated Google AdSense. Google AdSense is an online service which allows the placement of advertising on third-party sites. Google AdSense is based on an algorithm that selects advertisements displayed on third-party sites to match with the content of the respective third-party site. Google AdSense allows an interest-based targeting of the Internet user, which is implemented by means of generating individual user profiles.

The operating company of Google’s AdSense component is Alphabet Inc., 1600 Amphitheatre Pkwy, Mountain View, CA 94043-1351, United States.

The purpose of Google’s AdSense component is the integration of advertisements on our website. Google AdSense places a cookie on the information technology system of the data subject. The definition of cookies is explained above. With the setting of the cookie, Alphabet Inc. is enabled to analyze the use of our website. With each call-up to one of the individual pages of this Internet site, which is operated by the controller and into which a Google AdSense component is integrated, the Internet browser on the information technology system of the data subject will automatically submit data through the Google AdSense component for the purpose of online advertising and the settlement of commissions to Alphabet Inc. During the course of this technical procedure, the enterprise Alphabet Inc. gains knowledge of personal data, such as the IP address of the data subject, which serves Alphabet Inc., inter alia, to understand the origin of visitors and clicks and subsequently create commission settlements.

The data subject may, as stated above, prevent the setting of cookies through our website at any time by means of a corresponding adjustment of the web browser used and thus permanently deny the setting of cookies. Such an adjustment to the Internet browser used would also prevent Alphabet Inc. from setting a cookie on the information technology system of the data subject. Additionally, cookies already in use by Alphabet Inc. may be deleted at any time via a web browser or other software programs.

Furthermore, Google AdSense also uses so-called tracking pixels. A tracking pixel is a miniature graphic that is embedded in web pages to enable a log file recording and a log file analysis through which a statistical analysis may be performed. Based on the embedded tracking pixels, Alphabet Inc. is able to determine if and when a website was opened by a data subject, and which links were clicked on by the data subject. Tracking pixels serve, inter alia, to analyze the flow of visitors on a website.

Through Google AdSense, personal data and information—which also includes the IP address, and is necessary for the collection and accounting of the displayed advertisements—is transmitted to Alphabet Inc. in the United States of America. These personal data will be stored and processed in the United States of America. The Alphabet Inc. may disclose the collected personal data through this technical procedure to third parties.

Google AdSense is further explained under the following link <a onclick="window.open(this.href); return false;" href="https://www.google.com/adsense/start/">https://www.google.com/adsense/start/</a>.

<h3>Data protection provisions about the application and use of Google Analytics (with anonymization function)</h3>
On this website, the controller has integrated the component of Google Analytics (with the anonymizer function). Google Analytics is a web analytics service. Web analytics is the collection, gathering, and analysis of data about the behavior of visitors to websites. A web analysis service collects, inter alia, data about the website from which a person has come (the so-called referrer), which sub-pages were visited, or how often and for what duration a sub-page was viewed. Web analytics are mainly used for the optimization of a website and in order to carry out a cost-benefit analysis of Internet advertising.

The operator of the Google Analytics component is Google Inc., 1600 Amphitheatre Pkwy, Mountain View, CA 94043-1351, United States.

For the web analytics through Google Analytics the controller uses the application “_gat. _anonymizeIp”. By means of this application the IP address of the Internet connection of the data subject is abridged by Google and anonymised when accessing our websites from a Member State of the European Union or another Contracting State to the Agreement on the European Economic Area.

The purpose of the Google Analytics component is to analyze the traffic on our website. Google uses the collected data and information, inter alia, to evaluate the use of our website and to provide online reports, which show the activities on our websites, and to provide other services concerning the use of our internet site for us.

Google Analytics places a cookie on the information technology system of the data subject. The definition of cookies is explained above. With the setting of the cookie, Google is enabled to analyze the use of our website. With each call-up to one of the individual pages of this Internet site, which is operated by the controller and into which a Google Analytics component was integrated, the Internet browser on the information technology system of the data subject will automatically submit data through the Google Analytics component for the purpose of online advertising and the settlement of commissions to Google. During the course of this technical procedure, the enterprise Google gains knowledge of personal information, such as the IP address of the data subject, which serves Google, inter alia, to understand the origin of visitors and clicks, and subsequently create commission settlements.

The cookie is used to store personal information, such as the access time, the location from which the access was made, and the frequency of visits of our website by the data subject. With each visit to our Internet site, such personal data, including the IP address of the Internet access used by the data subject, will be transmitted to Google in the United States of America. These personal data are stored by Google in the United States of America. Google may pass these personal data collected through the technical procedure to third parties.

The data subject may, as stated above, prevent the setting of cookies through our website at any time by means of a corresponding adjustment of the web browser used and thus permanently deny the setting of cookies. Such an adjustment to the Internet browser used would also prevent Google Analytics from setting a cookie on the information technology system of the data subject. In addition, cookies already in use by Google Analytics may be deleted at any time via a web browser or other software programs.

In addition, the data subject has the possibility of objecting to a collection of data that are generated by Google Analytics, which is related to the use of this website, as well as the processing of this data by Google and the chance to preclude any such. For this purpose, the data subject must download a browser add-on under the link <a onclick="window.open(this.href); return false;" href="https://tools.google.com/dlpage/gaoptout">https://tools.google.com/dlpage/gaoptout</a> and install it. This browser add-on tells Google Analytics through a JavaScript, that any data and information about the visits of Internet pages may not be transmitted to Google Analytics. The installation of the browser add-ons is considered an objection by Google. If the information technology system of the data subject is later deleted, formatted, or newly installed, then the data subject must reinstall the browser add-ons to disable Google Analytics. If the browser add-on was uninstalled by the data subject or any other person who is attributable to their sphere of competence, or is disabled, it is possible to execute the reinstallation or reactivation of the browser add-ons.

Further information and the applicable data protection provisions of Google may be retrieved under <a onclick="window.open(this.href); return false;" href="https://policies.google.com/privacy">https://policies.google.com/privacy</a> and under <a onclick="window.open(this.href); return false;" href="http://www.google.com/analytics/terms/us.html">http://www.google.com/analytics/terms/us.html</a>. Google Analytics is further explained under the following Link <a onclick="window.open(this.href); return false;" href="https://www.google.com/analytics/">https://www.google.com/analytics/</a>.

<h3>Data protection provisions about the application and use of DoubleClick</h3>
On this website, the controller has integrated components of DoubleClick by Google. DoubleClick is a trademark of Google, under which predominantly special online marketing solutions are marketed to advertising agencies and publishers.

The operating company of DoubleClick by Google is Google Inc., 1600 Amphitheatre Pkwy, Mountain View, CA 94043-1351, UNITED STATES.

DoubleClick by Google transmits data to the DoubleClick server with each impression, clicks, or other activity. Each of these data transfers triggers a cookie request to the data subject’s browser. If the browser accepts this request, DoubleClick uses a cookie on the information technology system of the data subject. The definition of cookies is explained above. The purpose of the cookie is the optimization and display of advertising. The cookie is used, inter alia, to display and place user-relevant advertising as well as to create or improve reports on advertising campaigns. Furthermore, the cookie serves to avoid multiple display of the same advertisement.

DoubleClick uses a cookie ID that is required to execute the technical process. For example, the cookie ID is required to display an advertisement in a browser. DoubleClick may also use the Cookie ID to record which advertisements have already been displayed in a browser in order to avoid duplications. It is also possible for DoubleClick to track conversions through the cookie ID. For instance, conversions are captured, when a user has previously been shown a DoubleClick advertising ad, and he or she subsequently makes a purchase on the advertiser’s website using the same Internet browser.

A cookie from DoubleClick does not contain any personal data. However, a DoubleClick cookie may contain additional campaign IDs. A campaign ID is used to identify campaigns that the user has already been in contact with.

With each call-up to one of the individual pages of this website, which is operated by the controller and on which a DoubleClick component was integrated, the internet browser on the information technology system of the data subject is automatically prompted by the respective DoubleClick component to send data for the purpose of online advertising and billing of commissions to Google. During the course of this technical procedure, Google gains knowledge of any data that Google may use to create commission calculations. Google may, inter alia, understand that the data subject has clicked on certain links on our website.

The data subject may, as stated above, prevent the setting of cookies through our website at any time by means of a corresponding adjustment of the web browser used and thus permanently deny the setting of cookies. Such an adjustment to the Internet browser used would also prevent Google from setting a cookie on the information technology system of the data subject. In addition, cookies already in use by Google may be deleted at any time via a web browser or other software programs.

Further information and the applicable data protection provisions of DoubleClick may be retrieved under DoubleClick by Google <a onclick="window.open(this.href); return false;" href="https://policies.google.com/">https://policies.google.com/</a>.

<h3>Data protection provisions about the application and use of Google Translate</h3>
The controller has integrated translation components from Google Translate on this website. The purpose of the component is to improve our online service by enabling the data subject to translate foreign language posts automatically on the controllers website. The operating company of Google Translate is the Google LLC, 1600 Amphitheatre Pkwy, Mountain View, CA 94043-1351, USA. Google Translate is an online translation service provided by Google LLC that allows users to automatically translate individual words, texts, a web page or parts thereof into different languages. However, the translations are not always correct and may sometimes include misleading, false or offensive expressions. We assume no responsibility for its accuracy, reliability or timeliness of translations, and are not liable for damages incurred.

With each call-up to one of the individual pages of this internet site which is operated by the controller, and on which a translation component has been integrated, data is transmitted to Google Translate. Google Translate sets cookies on the information technology system of the data subject as described above. With each visit to the internet site of the controller personal data, including the IP address of the internet access used by the data subject, will be transmitted to Google to servers located in the United States of America and stored there. Google may pass these personal data collected through the technical procedure to other Google services and third parties. Google always receives information throughout the duration of stay on the website that the service was called, when it was called, from which site, with which IP address and which browser, and which texts were entered or retrieved by the data subject for the translation. These data are processed on foreign servers, usually in the US, and are collected, stored, analyzed and processed by Google. This data is exchanged between the various Google services and activities of the data subject are tracked using Cookies, a browser ID and the IP address. If the data subject is logged in to Google at the same time, the data will be associated with the data subjects Google user login and used e.g. for promotional purposes, also on other websites.

When using Google Translate on our pages the data subject agrees with the collection, processing and use of automatically collected data and the data entered by the data subject himself by Google, one of its agents, services or third parties according to Googles Terms of Use and Privacy Policy. If data of the person concerned should not be sent to Google, Google services should not be used.

The Terms of Use of Google Translate are available at <a onclick="window.open(this.href); return false;" href="https://policies.google.com/terms">https://policies.google.com/terms</a>. The data protection provisions of Google Translate available at <a onclick="window.open(this.href); return false;" href="https://policies.google.com/privacy">https://policies.google.com/privacy</a> provide information about the collection, processing and use of personal data by Google.

More information about Google Translate is available at: <a onclick="window.open(this.href); return false;" href="http://translate.google.com/manager/website/">http://translate.google.com/manager/website/</a>.

<h3>Data protection provisions about the application and use of Google Fonts</h3>
On this website, the controller has integrated external fonts from Google Fonts. The operating company of Google Fonts is the Google inc., 1600 Amphitheatre Pkwy, Mountain View, CA 94043-1351, USA. Google Fonts is a service to serve fonts online for using on several websites. The font files have to be downloaded to the information technology system of the data subject before they can be displayed. Fonts served by the Google Fonts API are automatically compressed for a faster download, and once downloaded are cached in the browser and reused by any other web page that uses the Google Fonts API.

The purpose of these components is to improve the design of the controllers website and the consistent presentation of fonts on the users information technology system. The integration of these fonts is done by a server call, usually a Google server in the USA. This causes the information technology system of the person concerned to download the fonts.

With each visit to the internet site of the controller on which Google Fonts has been integrated, personal data, including the IP address of the internet access used by the data subject, will be transmitted to Google to servers located in the United States of America and stored there. Each time a single page of the controllers website is called on which Google Fonts has been integrated, a request to Google Fonts servers will be made for the actuality of the used fonts. Requests are saved for one day, downloaded fonts are stored for a maximum of one year on the users information technology system. For this purpose, cookies are stored on the users device by Google, as described above, which contain the IP address, the access time, and the browser data of the person concerned. Google may pass these personal data collected through the technical procedure to other Google services and third parties.

Google always receives information throughout the duration of stay on the website that the service was called, when it was called, from which site, with which IP address and which browser. These data are processed on foreign servers, usually in the US, and are collected, stored, analyzed and processed by Google. This data is exchanged between the various Google services and activities of the data subject are tracked using Cookies, a browser ID and the IP address. If the data subject is logged in to Google at the same time, the data will be associated with the data subjects Google user login and used e.g. for promotional purposes, also on other websites.

If the browser or the settings of the user do not support web fonts a font installed on the information technology system of the data subject is used. Web fonts can be disabled by script blocking addons in the browser.

More information about Google Fonts is available at: <a onclick="window.open(this.href); return false;" href="https://fonts.google.com/about#">https://fonts.google.com/about#</a> and at <a onclick="window.open(this.href); return false;"https://developers.google.com/fonts/faq"> https://developers.google.com/fonts/faq</a>.

Google Fonts Terms of Use are available at <a onclick="window.open(this.href); return false;" href="https://policies.google.com/terms">https://policies.google.com/terms</a>. The data protection provisions of Google Translate available at <a onclick="window.open(this.href); return false;" href="https://policies.google.com/privacy">https://policies.google.com/privacy</a> provide information about the collection, processing and use of personal data by Google.

<h3>Data protection provisions about the application and use of Facebook</h3>
On this website, the controller has integrated components of the enterprise Facebook. Facebook is a social network.

A social network is a place for social meetings on the Internet, an online community, which usually allows users to communicate with each other and interact in a virtual space. A social network may serve as a platform for the exchange of opinions and experiences, or enable the Internet community to provide personal or business-related information. Facebook allows social network users to include the creation of private profiles, upload photos, and network through friend requests.

The operating company of Facebook is Facebook, Inc., 1 Hacker Way, Menlo Park, CA 94025, United States. If a person lives outside of the United States or Canada, the controller is the Facebook Ireland Ltd., 4 Grand Canal Square, Grand Canal Harbour, Dublin 2, Ireland.

With each call-up to one of the individual pages of this Internet website, which is operated by the controller and into which a Facebook component (Facebook plug-ins) was integrated, the web browser on the information technology system of the data subject is automatically prompted to download display of the corresponding Facebook component from Facebook through the Facebook component. An overview of all the Facebook Plug-ins may be accessed under <a onclick="window.open(this.href); return false;" href="https://developers.facebook.com/docs/plugins/">https://developers.facebook.com/docs/plugins/</a>. During the course of this technical procedure, Facebook is made aware of what specific sub-site of our website was visited by the data subject.

If the data subject is logged in at the same time on Facebook, Facebook detects with every call-up to our website by the data subject—and for the entire duration of their stay on our Internet site—which specific sub-site of our Internet page was visited by the data subject. This information is collected through the Facebook component and associated with the respective Facebook account of the data subject. If the data subject clicks on one of the Facebook buttons integrated into our website, e.g. the "Like" button, or if the data subject submits a comment, then Facebook matches this information with the personal Facebook user account of the data subject and stores the personal data.

Facebook always receives, through the Facebook component, information about a visit to our website by the data subject, whenever the data subject is logged in at the same time on Facebook during the time of the call-up to our website. This occurs regardless of whether the data subject clicks on the Facebook component or not. If such a transmission of information to Facebook is not desirable for the data subject, then he or she may prevent this by logging off from their Facebook account before a call-up to our website is made.

The data protection guideline published by Facebook, which is available at <a onclick="window.open(this.href); return false;" href="https://facebook.com/about/privacy/">https://facebook.com/about/privacy/</a> provides information about the collection, processing and use of personal data by Facebook. In addition, it is explained there what setting options Facebook offers to protect the privacy of the data subject. In addition, different configuration options are made available to allow the elimination of data transmission to Facebook. These applications may be used by the data subject to eliminate a data transmission to Facebook.

<h3>Data protection provisions about the application and use of YouTube</h3>
On this website, the controller has integrated components of YouTube. YouTube is an Internet video portal that enables video publishers to set video clips and other users free of charge, which also provides free viewing, review and commenting on them. YouTube allows you to publish all kinds of videos, so you can access both full movies and TV broadcasts, as well as music videos, trailers, and videos made by users via the Internet portal.

The operating company of YouTube is YouTube, LLC, 901 Cherry Ave., San Bruno, CA 94066, UNITED STATES. The YouTube, LLC is a subsidiary of Google Inc., 1600 Amphitheatre Pkwy, Mountain View, CA 94043-1351, UNITED STATES.

With each call-up to one of the individual pages of this Internet site, which is operated by the controller and on which a YouTube component (YouTube video) was integrated, the Internet browser on the information technology system of the data subject is automatically prompted to download a display of the corresponding YouTube component. Further information about YouTube may be obtained under <a onclick="window.open(this.href); return false;" href="https://www.youtube.com/yt/about/">https://www.youtube.com/yt/about/</a>. During the course of this technical procedure, YouTube and Google gain knowledge of what specific sub-page of our website was visited by the data subject.

If the data subject is logged in on YouTube, YouTube recognizes with each call-up to a sub-page that contains a YouTube video, which specific sub-page of our Internet site was visited by the data subject. This information is collected by YouTube and Google and assigned to the respective YouTube account of the data subject.

YouTube and Google will receive information through the YouTube component that the data subject has visited our website, if the data subject at the time of the call to our website is logged in on YouTube; this occurs regardless of whether the person clicks on a YouTube video or not. If such a transmission of this information to YouTube and Google is not desirable for the data subject, the delivery may be prevented if the data subject logs off from their own YouTube account before a call-up to our website is made.

YouTubes data protection provisions available at <a onclick="window.open(this.href); return false;" href="https://policies.google.com/privacy">https://policies.google.com/privacy</a> provide information about the collection, processing and use of personal data by YouTube and Google.

<h3>Payment Method: Data protection provisions about the use of PayPal as a payment processor</h3>
On this website, the controller has integrated components of PayPal. PayPal is an online payment service provider. Payments are processed via so-called PayPal accounts, which represent virtual private or business accounts. PayPal is also able to process virtual payments through credit cards when a user does not have a PayPal account. A PayPal account is managed via an e-mail address, which is why there are no classic account numbers. PayPal makes it possible to trigger online payments to third parties or to receive payments. PayPal also accepts trustee functions and offers buyer protection services.

The European operating company of PayPal is PayPal (Europe) S.à.r.l. & Cie. S.C.A., 22-24 Boulevard Royal, 2449 Luxembourg, Luxembourg.

If the data subject chooses “PayPal” as the donation option in the during the ordering process, we automatically transmit the data of the data subject to PayPal. By selecting this payment option, the data subject agrees to the transfer of personal data required for payment processing.

The personal data transmitted to PayPal is usually first name, last name, address, email address, IP address, telephone number, mobile phone number, or other data necessary for payment processing.

The transmission of the data is aimed at payment processing and fraud prevention. The controller will transfer personal data to PayPal, in particular, if a legitimate interest in the transmission is given. The personal data exchanged between PayPal and the controller for the processing of the data will be transmitted by PayPal to economic credit agencies. This transmission is intended for identity and creditworthiness checks.

PayPal will, if necessary, pass on personal data to affiliates and service providers or subcontractors to the extent that this is necessary to fulfill contractual obligations or for data to be processed in the order.

The data subject has the possibility to revoke consent for the handling of personal data at any time from PayPal. A revocation shall not have any effect on personal data which must be processed, used or transmitted in accordance with (contractual) payment processing.

The applicable data protection provisions of PayPal may be retrieved under <a onclick="window.open(this.href); return false;" href="https://www.paypal.com/us/webapps/mpp/ua/privacy-full">https://www.paypal.com/us/webapps/mpp/ua/privacy-full</a>

<h3>Legal basis for the processing</h3>
Art. 6(1) lit. a GDPR serves as the legal basis for processing operations for which we obtain consent for a specific processing purpose. If the processing of personal data is necessary for the performance of a contract to which the data subject is party, as is the case, for example, when processing operations are necessary for the supply of goods or to provide any other service, the processing is based on Article 6(1) lit. b GDPR. The same applies to such processing operations which are necessary for carrying out pre-contractual measures, for example in the case of inquiries concerning our products or services. Is our company subject to a legal obligation by which processing of personal data is required, such as for the fulfillment of tax obligations, the processing is based on Art. 6(1) lit. c GDPR. In rare cases, the processing of personal data may be necessary to protect the vital interests of the data subject or of another natural person. This would be the case, for example, if a visitor were injured in our company and his name, age, health insurance data or other vital information would have to be passed on to a doctor, hospital or other third party. Then the processing would be based on Art. 6(1) lit. d GDPR. Finally, processing operations could be based on Article 6(1) lit. f GDPR. This legal basis is used for processing operations which are not covered by any of the abovementioned legal grounds, if processing is necessary for the purposes of the legitimate interests pursued by our company or by a third party, except where such interests are overridden by the interests or fundamental rights and freedoms of the data subject which require protection of personal data. Such processing operations are particularly permissible because they have been specifically mentioned by the European legislator. He considered that a legitimate interest could be assumed if the data subject is a client of the controller (Recital 47 Sentence 2 GDPR).

<h3>Period for which the personal data will be stored</h3>
The criteria used to determine the period of storage of personal data is the respective statutory retention period. After expiration of that period, the corresponding data is routinely deleted, as long as it is no longer necessary for the fulfillment of the contract or the initiation of a contract.

<h3>Provision of personal data as statutory or contractual requirement; Requirement necessary to enter into a contract; Obligation of the data subject to provide the personal data; possible consequences of failure to provide such data</h3>
We clarify that the provision of personal data is partly required by law (e.g. tax regulations) or can also result from contractual provisions (e.g. information on the contractual partner). Sometimes it may be necessary to conclude a contract that the data subject provides us with personal data, which must subsequently be processed by us. The data subject is, for example, obliged to provide us with personal data when our company signs a contract with him or her. The non-provision of the personal data would have the consequence that the contract with the data subject could not be concluded. Before personal data is provided by the data subject, the data subject must contact any employee. The employee clarifies to the data subject whether the provision of the personal data is required by law or contract or is necessary for the conclusion of the contract, whether there is an obligation to provide the personal data and the consequences of non-provision of the personal data.

<h3>Termination of your contract</h3>
Everyone on our website at any time at its discretion may delete his registration. All personal data will be deleted when the registration is canceled. After deletion, we can not recover the data.',
	'JVPPDMT_REJECTION'						=> 'Rejection',
	'JVPPDMT_USED_COOKIE' => [
		'<strong>Cookies used by phpBB forum:</strong>',
		'%1$s_cookie_status: When you visit our website it will store a confirmation of acceptance of using cookies.',
		'%1$s_k: Is used to use the automatic login service (remember me).',
		'%1$s_lang: If the guest user changes the language, this cookie will be created. This session will end when browsing stops.',
		'%1$s_sid: Contains the session ID. This cookie is used to identify the user along with %1$s_u.',
		'%1$s_u: The user ID of the user is stored here.',
		'%1$s_track: Marking of read posts for guests.',

		/* If you are not using the extension (phpBB Arcade) then add the comment // at the beginning of the line. */
		'<br><strong>Cookies used by Arcade:</strong>',
		'%1$s_arcade_sid: Contains the game session identifier (ID) for using with phpBB Arcade.',
		'%1$s_arcade_pd: Contains the game identifier (ID) for using with phpBB Arcade.',
		'%1$s_arcade_popup: Contains the settings when playing a game in the pop-up window.',
		'%1$s_arcade_lighting: Contains the backlight user preference for games.',
		'%1$s_arcade_info_block: Contains the user preference for the visibility of the info block during the games.',

		/* If you are not using the extension (JV Footer chat) then add the comment // at the beginning of the line. */
		'<br><strong>Cookie used by JV footer chat:</strong>',
		'%1$s_jv_chat_data: Contains the footer chat module settings and the identifier (ID) number of the users we are talking to.',

		/* If you are not using the extension (JV Shoutbox) then add the comment // at the beginning of the line. */
		'<br><strong>Cookie used by JV Shoutbox:</strong>',
		'%1$s_jv_shout_close_: Will be used on all pages where you closed the shoutbox block. Each page creates a cookie in its own name. For example, the index page is named: %1$s_jv_shout_close_index.',

		/* If you are not using the extension (Collapsible Forum Categories) then add the comment // at the beginning of the line. */
		'<br><strong>Cookie used by Collapsible Forum Categories:</strong>',
		'%1$s_ccat: Stores the users personal preference about collapsed or expanded category boxes.',
	],
]);
