<?php
/**
*
* @package Board3 Portal v2.3
* @copyright (c) 2023 Board3 Group ( www.board3.de )
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
	'ACP_FA'							=> 'Font Awesome styles',
	'ACP_FA_EXP'						=> 'Here you can define which styles should use the Font Awesome icons.',
	'ACP_PORTAL_COLUMN_WIDTH_SETTINGS'	=> 'Left and right column width settings',
	'ACP_PORTAL_CONFIG_INFO'			=> 'General settings',
	'ACP_PORTAL_GENERAL_TITLE'			=> 'Portal Administration',
	'ACP_PORTAL_GENERAL_TITLE_EXP'		=> 'Thank you for choosing Board3 Portal! This is where you can manage your portal page. The options below let you customize the various general settings.',
	'ACP_PORTAL_MODULES_EXP'			=> 'You can manage your portal modules here. If you turn off all modules, please also disable the Portal.',
	'ACP_PORTAL_SHOW_ALL'				=> 'Show portal on all pages',
	'ACP_PORTAL_SHOW_ALL_EXP'			=> 'Display the portal on all pages',
	'ADD_MODULE'						=> 'Add module',

	'B3P_FILE_NOT_FOUND'				=> 'The requested file could not be found',

	'CHOOSE_MODULE'						=> 'Choose module',
	'CHOOSE_MODULE_EXP'					=> 'Choose a module from the drop-down list',

	'DELETE_MODULE_CONFIRM'				=> 'Are you sure you wish to delete the module “%1$s”?',

	'LINK_ADDED'						=> 'The link has been successfully added',
	'LINK_UPDATED'						=> 'The link has been successfully updated',

	'MODULE_ADD_ONCE'					=> 'This module can only be added once.',
	'MODULE_FA'							=> 'Font Awesome icon',
	'MODULE_FA_EXP'						=> 'Here you can select a <a href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener noreferrer"><strong>Font Awesome</strong></a> icon. This will be used when your selected style uses Font Awesome icons.',
	'MODULE_FA_SIZE'					=> 'Font Awesome icon size',
	'MODULE_FA_SIZE_EXP'				=> 'Here you can change the size of the Font Awesome icon in pixel.',
	'MODULE_IMAGE'						=> 'Module image',
	'MODULE_IMAGE_ERROR'				=> 'There was an error while checking for the module image:',
	'MODULE_IMAGE_EXP'					=> 'Enter the filename of the module image. Images need to be in the styles/all/theme/images/portal/ folder.',
	'MODULE_IMAGE_HEIGHT'				=> 'Module image height',
	'MODULE_IMAGE_HEIGHT_EXP'			=> 'Enter the height of the module image in pixels.',
	'MODULE_IMAGE_WIDTH'				=> 'Module image width',
	'MODULE_IMAGE_WIDTH_EXP'			=> 'Enter the width of the module image in pixels.<br>If you do not want a module image, enter <strong>0</strong> as the value.',
	'MODULE_NAME'						=> 'Module name',
	'MODULE_NAME_EXP'					=> 'Enter the name of the Module that should be displayed in the Module configuration.',
	'MODULE_NOT_EXISTS'					=> 'The selected module does not exist.',
	'MODULE_OPTIONS'					=> 'Module options',
	'MODULE_PERMISSIONS'				=> 'Module permissions',
	'MODULE_PERMISSIONS_EXP'			=> 'Select the groups that should be authorized to view the module. If you want all users to be able to view the module, don’t select anything.<br>Select/Deselect multiple groups by holding <samp>CTRL</samp> and clicking.',
	'MODULE_POS_BOTTOM'					=> 'Bottom',
	'MODULE_POS_CENTER'					=> 'Center column',
	'MODULE_POS_LEFT'					=> 'Left column',
	'MODULE_POS_RIGHT'					=> 'Right column',
	'MODULE_POS_TOP'					=> 'Top',
	'MODULE_RESET'						=> 'Reset module configuration',
	'MODULE_RESET_CONFIRM'				=> 'Are you sure you wish to reset the settings of the module “%1$s”?',
	'MODULE_RESET_EXP'					=> 'This will reset all settings to the default!<br>Due to technical reason, Font Awesome Icons will have to be set manually again after the reset!<br>Fitting icons can be selected from the <a href="https://github.com/board3/Board3-Portal/wiki#empfohlene-fa-icons--recommended-fa-icons" target="_blank" rel="noopener noreferrer"><strong>list of recommended FA icons</strong></a>.',
	'MODULE_RESET_SUCCESS'				=> 'Successfully reset the module settings.',
	'MODULE_STATUS'						=> 'Enable module',
	'MOVE_LEFT'							=> 'Move left',
	'MOVE_RIGHT'						=> 'Move right',

	'NO_MODULES'						=> 'No modules have been detected.',

	'PORTAL_BASIC_INSTALL'				=> 'Adding basic set of modules',
	'PORTAL_BASIC_UNINSTALL'			=> 'Removing modules from database',
	'PORTAL_DISPLAY_JUMPBOX'			=> 'Display jumpbox',
	'PORTAL_DISPLAY_JUMPBOX_EXP'		=> 'Display the jumpbox on the portal. The jumpbox will only be displayed if it is also enabled in Server configuration/Load settings.',
	'PORTAL_ENABLE'						=> 'Enable Portal',
	'PORTAL_ENABLE_EXP'					=> 'Turns the whole portal on or off',
	'PORTAL_LEFT_COLUMN'				=> 'Enable left column',
	'PORTAL_LEFT_COLUMN_EXP'			=> 'Switch to no if you wish to turn off the left column',
	'PORTAL_LEFT_COLUMN_WIDTH'			=> 'Width of the left column',
	'PORTAL_LEFT_COLUMN_WIDTH_EXP'		=> 'Change the width of the left column in pixels; recommended value is 180',
	'PORTAL_RIGHT_COLUMN'				=> 'Enable right column',
	'PORTAL_RIGHT_COLUMN_EXP'			=> 'Switch to no if you wish to turn off the right column',
	'PORTAL_RIGHT_COLUMN_WIDTH'			=> 'Width of the right column',
	'PORTAL_RIGHT_COLUMN_WIDTH_EXP'		=> 'Change the width of the right column in pixels; recommended value is 180',
	'PORTAL_SHOW_ALL_LEFT'				=> 'Left',
	'PORTAL_SHOW_ALL_RIGHT'				=> 'Right',
	'PORTAL_SHOW_ALL_SIDE'				=> 'Column to display on all pages',
	'PORTAL_SHOW_ALL_SIDE_EXP'			=> 'Choose which column should be shown on all pages.',

	'SUCCESS_ADD'						=> 'The module was added successfully.',
	'SUCCESS_DELETE'					=> 'The module was removed successfully.',

	'UNABLE_TO_ADD_MODULE'				=> 'It is not possible to add the module to the selected column.',
	'UNABLE_TO_MOVE'					=> 'It is not possible to move the block to the selected column.',
	'UNABLE_TO_MOVE_ROW'				=> 'It is not possible to move the block to the selected row.',
	'UNKNOWN_MODULE_METHOD'				=> 'The %1$s module’s module method couldn’t be resolved.',
]);
