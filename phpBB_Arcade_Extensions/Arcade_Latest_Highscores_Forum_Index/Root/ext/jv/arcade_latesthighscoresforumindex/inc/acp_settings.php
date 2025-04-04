<?php
/**
*
* @package phpBB Arcade - Arcade latest highscores on forum index.
* @version $Id$
* @author 2011-2025 KillBill
* @copyright (c) 2014-2025 https://jv-arcade.com/ - https://jv-arcade.com/contact
* @license https://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace jv\arcade_latesthighscores\inc;

class acp_settings extends \jv\arcade\inc\ext\base
{
	public $version = '7.7.7';
	public $version_explain = true;
	public $name = 'ARCADE_EXT_A_LATEST_HIGHSCORES_FORUM_INDEX';

	public function get_language()
	{
		return [
			'vendor'	=> 'jv/arcade_latesthighscores',
			'file'		=> 'acp_settings'
		];
	}

	public function get_template_acp()
	{
		$explain = (!defined('ARCADE_MIN_EXT_VERSION') || phpbb_version_compare($this->version, ARCADE_MIN_EXT_VERSION, '<')) ? 'ACP_ARCADE_EXT_DISABLED' : false;

		return [
			'legend1'							=> ['name' => false, 'explain' => $explain],
			'ext_a_latest_highs_fi'				=> ['lang' => 'ARCADE_LATEST_HIGHSCORES',		'validate' => 'int:3:20',	'type' => 'number:3:20',	'explain' => false],
			'ext_a_latest_highs_fi_avatar'		=> ['lang' => 'ARCADE_DISPLAY_USER_AVATAR',		'validate' => 'bool',		'type' => 'radio:yes_no',	'explain' => false],
			'ext_a_latest_highs_fi_popup_icon'	=> ['lang' => 'ARCADE_DISPLAY_GAME_POPUP_ICON',	'validate' => 'bool',		'type' => 'radio:yes_no',	'explain' => false],
		];
	}
}
