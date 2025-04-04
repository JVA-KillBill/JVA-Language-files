<?php
/**
*
* @package phpBB Arcade - Best rated games on forum index page
* @version $Id: listener.php 2377 2021-01-27 12:37:15Z KillBill $
* @author 2011-2025 KillBill
* @copyright (c) 2014-2025 https://jv-arcade.com/ - https://jv-arcade.com/contact
* @license https://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace jv\arcade_bestratedgamesforumindex\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	protected $ext_enable = false;
	protected $template, $arcade, $arcade_config;

	public function __construct($template, $ext, $arcade = null, $arcade_config = null)
	{
		if ($arcade && defined('ARCADE_MIN_EXT_VERSION') && phpbb_version_compare($ext->version, ARCADE_MIN_EXT_VERSION, '>='))
		{
			$this->ext_enable = true;
			$this->template = $template;
			$this->arcade = $arcade;
			$this->arcade_config = $arcade_config;
		}
	}

	public static function getSubscribedEvents()
	{
		return class_exists('\jv\arcade\inc\ext\base') ? array(
			'core.index_modify_page_title' => 'display'
		) : array();
	}

	public function display($event)
	{
		if ($this->ext_enable && $this->arcade_config['system_games_rating'] && $this->arcade_config['ext_best_rated_games_forum_index_display'] && $this->arcade->access('arcade', false, 'stats'))
		{
			$this->arcade->change_config('replace', 'gamename_maxchars', 10);
			$return = $this->arcade->display()->stats_data('game', 'best_rated_img', 50, 'most', 0, $this->arcade_config['ext_best_rated_games_forum_index_num'], true, 'ext_arcade_best_rated_games', '', false, false, true, $this->arcade->hour($this->arcade_config['cache_time']), false, false, true);
			$this->arcade->change_config('restore', 'gamename_maxchars');

			if ($return != false)
			{
				$this->template->assign_var('S_EXT_ARCADE_BEST_RATED_GAMES_FORUM_INDEX', true);
			}
		}
	}
}
