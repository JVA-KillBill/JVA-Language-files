<?php
/**
*
* @package phpBB Arcade - Who is playing on forum index page
* @version $Id$
* @author 2011-2025 KillBill
* @copyright (c) 2014-2025 https://jv-arcade.com/ - https://jv-arcade.com/contact
* @license https://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace jv\arcade_whoisplayingforumindex\inc;

class acp_settings extends \jv\arcade\inc\ext\base
{
	public $version = '7.7.7';
	public $name = 'ARCADE_EXT_ARCADE_WHO_IS_PLAYING_FORUM_INDEX';

	public function get_language()
	{
		return array(
			'vendor'	=> 'jv/arcade_whoisplayingforumindex',
			'file'		=> 'acp_settings'
		);
	}

	public function get_template_acp()
	{
		$explain = (!defined('ARCADE_MIN_EXT_VERSION') || phpbb_version_compare($this->version, ARCADE_MIN_EXT_VERSION, '<')) ? 'ACP_ARCADE_EXT_DISABLED' : false;

		return array(
			'legend1'								=> array('name' => false, 'explain' => $explain),
			'ext_whoisplaying_forum_index_display'	=> array('lang' => 'ARCADE_EXT_ARCADE_WHO_IS_PLAYING_FORUM_INDEX',	'validate' => 'bool',	'type' => 'radio:enabled_disabled',	'explain' => true)
		);
	}
}
