<?php
/**
*
* @package Board3 Portal v2.3 - Calendar
* @copyright (c) 2013 Board3 Group ( www.board3.de )
* @license GNU General Public License, version 2 (GPL-2.0-only)
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
$lang = array_merge($lang, [
	'ACP_PORTAL_CALENDAR'					=> 'Calendar settings',
	'ACP_PORTAL_CALENDAR_END_INCORRECT'		=> 'The end time you entered was incorrect. Please follow the instructions carefully.',
	'ACP_PORTAL_CALENDAR_EVENT_PAST'		=> 'The event start time needs to be in the future.',
	'ACP_PORTAL_CALENDAR_EVENT_START_FIRST'	=> 'The end of the event has to be after the start of the event.',
	'ACP_PORTAL_CALENDAR_EXP'				=> 'This is where you customize the calendar block.',
	'ACP_PORTAL_CALENDAR_PERMISSION'		=> 'Event permissions',
	'ACP_PORTAL_CALENDAR_PERMISSION_EXP'	=> 'Select the groups that should be authorized to view the event. If you want all users to be able to view the event, don’t select anything.<br>Select/Deselect multiple groups by holding <samp>CTRL</samp> and clicking.',
	'ACP_PORTAL_CALENDAR_START_INCORRECT'	=> 'The start time you entered was incorrect. Please follow the instructions carefully.',
	'ACP_PORTAL_EVENTS'						=> 'Calendar events',
	'ACP_PORTAL_EVENT_END_DATE'				=> 'Event end date',
	'ACP_PORTAL_EVENT_END_DATE_EXP'			=> 'Enter the date and time the event ends. The date has to be in a similar format: MM/DD/YYYY 3:00 PM',
	'ACP_PORTAL_EVENT_START_DATE'			=> 'Event start date',
	'ACP_PORTAL_EVENT_START_DATE_EXP'		=> 'Enter the date and time the event starts. The date has to be in a similar format: MM/DD/YYYY 3:00 PM',
	'ADD_EVENT'								=> 'Add new event',

	'CURRENT_EVENTS'						=> 'Current Events',

	'EVENT_ADDED'							=> 'Event added successfully.',
	'EVENT_ALL_DAY'							=> 'All Day Event',
	'EVENT_DESC'							=> 'Event description',
	'EVENT_END'								=> 'To',
	'EVENT_LINK'							=> 'Event link',
	'EVENT_LINK_EXP'						=> 'Enter the link to a topic or website with the announcement or discussion topic of the event.',
	'EVENT_START'							=> 'From',
	'EVENT_TIME'							=> 'Time',
	'EVENT_TITLE'							=> 'Event title',
	'EVENT_UPDATED'							=> 'Event updated successfully.',

	'LOG_PORTAL_EVENT_ADDED'				=> '<strong>Added Event</strong><br>&raquo; %s',
	'LOG_PORTAL_EVENT_REMOVED'				=> '<strong>Removed Event</strong><br>&raquo; %s',
	'LOG_PORTAL_EVENT_UPDATED'				=> '<strong>Updated Event</strong><br>&raquo; %s',

	'NO_CUR_EVENTS'							=> 'No current events',
	'NO_EVENT'								=> 'No event specified.',
	'NO_EVENTS'								=> 'No events',
	'NO_EVENT_START'						=> 'You haven’t specified a start time for the event.',
	'NO_EVENT_TITLE'						=> 'You haven’t specified a title for the event.',
	'NO_UPCOMING_EVENTS'					=> 'No upcoming events',

	'PORTAL_CALENDAR'						=> 'Naptár',
	'PORTAL_CALENDAR_SUNDAY_COLOR'			=> 'Color for sunday',
	'PORTAL_CALENDAR_SUNDAY_COLOR_EXP'		=> 'HEX or named colors are allowed such as #FFFFFF for white, or color names like violet.',
	'PORTAL_CALENDAR_TODAY_COLOR'			=> 'Active day color',
	'PORTAL_CALENDAR_TODAY_COLOR_EXP'		=> 'HEX or named colors are allowed such as #FFFFFF for white, or color names like violet.',
	'PORTAL_DISPLAY_EVENTS'					=> 'Display events',
	'PORTAL_DISPLAY_EVENTS_EXP'				=> 'Display events that have been created in the calendar block',
	'PORTAL_EVENTS_MANAGE'					=> 'Manage events',
	'PORTAL_EVENTS_URL_NEW_WINDOW'			=> 'Open external event links in a new window',
	'PORTAL_LONG_MONTH'						=> 'Show full month names',
	'PORTAL_LONG_MONTH_EXP'					=> 'If disabled the months will be shortened e.g. Aug. instead of August.',
	'PORTAL_SUNDAY_FIRST'					=> 'First day of the week',
	'PORTAL_SUNDAY_FIRST_EXP'				=> 'If disabled the calendar will show Mo. --> Su., else Su. --> Sa.',

	'UPCOMING_EVENTS'						=> 'Upcoming Events',

	'VIEW_NEXT_MONTH'						=> 'Következő hónap',
	'VIEW_PREVIOUS_MONTH'					=> 'Előző hónap',

	'mini_cal'								=> [
		'day'								=> [
			1								=> 'V',
			2								=> 'H',
			3								=> 'K',
			4								=> 'Sze',
			5								=> 'CS',
			6								=> 'P',
			7								=> 'Szo',
		],
		'month'								=> [
			1								=> 'Jan.',
			2								=> 'Feb.',
			3								=> 'Márc.',
			4								=> 'Ápr.',
			5								=> 'Máj.',
			6								=> 'Jún.',
			7								=> 'Júl.',
			8								=> 'Aug.',
			9								=> 'Szept.',
			10							=> 'Okt.',
			11							=> 'Nov.',
			12							=> 'Dec.',
		],
		'long_month'						=> [
			1								=> 'January',
			2								=> 'February',
			3								=> 'March',
			4								=> 'April',
			5								=> 'May',
			6								=> 'June',
			7								=> 'July',
			8								=> 'August',
			9								=> 'September',
			10							=> 'October',
			11							=> 'November',
			12							=> 'December',
		],
	],
]);
