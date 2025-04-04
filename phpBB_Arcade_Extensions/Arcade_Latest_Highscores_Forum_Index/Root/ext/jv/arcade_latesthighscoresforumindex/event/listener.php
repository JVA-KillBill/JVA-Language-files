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

namespace jv\arcade_latesthighscores\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	protected $ext_enable = false;
	protected $arcade, $arcade_config;

	public function __construct($ext, $arcade = null, $arcade_config = null)
	{
		if ($arcade && defined('ARCADE_MIN_EXT_VERSION') && phpbb_version_compare($ext->version, ARCADE_MIN_EXT_VERSION, '>='))
		{
			$this->ext_enable = true;
			$this->arcade = $arcade;
			$this->arcade_config = $arcade_config;
		}
	}

	public static function getSubscribedEvents()
	{
		return class_exists('\jv\arcade\inc\ext\base') ? [
			'core.index_modify_page_title' => 'display'
		] : [];
	}

	public function display($event)
	{
		if ($this->ext_enable && $this->arcade_config['ext_a_latest_highs_fi'] && $this->arcade->access('arcade', false, 'stats'))
		{
			$this->arcade->change_config('replace', 'display_game_popup_icon', $this->arcade_config['ext_a_latest_highs_fi_popup_icon']);
			$this->arcade->display()->stats_data('user', 'latest_highscores', $this->arcade_config['ext_a_latest_highs_fi_avatar'] ? 20 : 0, 'most', 0, $this->arcade_config['ext_a_latest_highs_fi'], true, 'ext_arcade_latest_highs_fi', '', false, false, true, $this->arcade->hour($this->arcade_config['cache_time']));
			$this->arcade->change_config('restore', 'display_game_popup_icon');
		}
	}
}
