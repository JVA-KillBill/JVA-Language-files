<?php
/**
*
* @package phpBB Arcade - Leaders on forum index.
* @version $Id$
* @author 2011-2025 KillBill
* @copyright (c) 2014-2025 https://jv-arcade.com/ - https://jv-arcade.com/contact
* @license https://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace jv\arcade_leadersforumindex\inc;

class acp_settings extends \jv\arcade\inc\ext\base
{
	public $version = '7.7.7';
	public $version_explain = true;
	public $name = 'ARCADE_EXT_LEADERS_FORUM_INDEX';

	public function get_language()
	{
		return array(
			'vendor'	=> 'jv/arcade_leadersforumindex',
			'file'		=> 'acp_settings'
		);
	}

	public function get_template_acp()
	{
		$explain = (!defined('ARCADE_MIN_EXT_VERSION') || phpbb_version_compare($this->version, ARCADE_MIN_EXT_VERSION, '<')) ? 'ACP_ARCADE_EXT_DISABLED' : false;

		return array(
			'legend1'								=> array('name' => false, 'explain' => $explain),
			'ext_leaders_forum_index_arcade'		=> array('lang' => 'ARCADE_LEADERS',				'validate' => 'int:0:30',	'type' => 'number:0:30',	'explain' => true,	'lang_explain'=> 'LEADERS_EXPLAIN'),
			'ext_leaders_forum_index_challenge'		=> array('lang' => 'ARCADE_CHALLENGE_LEADERS',		'validate' => 'int:0:30',	'type' => 'number:0:30',	'explain' => true,	'lang_explain'=> 'LEADERS_EXPLAIN'),
			'ext_leaders_forum_index_tournament'	=> array('lang' => 'ARCADE_TOURNAMENT_LEADERS',		'validate' => 'int:0:30',	'type' => 'number:0:30',	'explain' => true,	'lang_explain'=> 'LEADERS_EXPLAIN'),
			'ext_leaders_forum_index_avatar'		=> array('lang' => 'ARCADE_DISPLAY_USER_AVATAR',	'validate' => 'bool',		'type' => 'radio:yes_no',	'explain' => false),
			'ext_leaders_forum_index_avatar_size'	=> array('lang' => 'ARCADE_USER_AVATAR_SIZE',		'validate' => 'int:30:80',	'type' => 'number:30:80',	'explain' => false)
		);
	}
}
