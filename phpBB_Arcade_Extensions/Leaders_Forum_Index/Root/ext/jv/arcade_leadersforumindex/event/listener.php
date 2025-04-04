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

namespace jv\arcade_leadersforumindex\event;

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
		return class_exists('\jv\arcade\inc\ext\base') ? array(
			'core.index_modify_page_title' => 'display'
		) : array();
	}

	public function display($event)
	{
		if ($this->ext_enable)
		{
			$types = array('arcade', 'challenge', 'tournament');

			foreach ($types as $type)
			{
				if ($this->arcade_config['ext_leaders_forum_index_' . $type])
				{
					if ($this->arcade->access('arcade', false, 'stats'))
					{
						$this->arcade->change_config('replace', 'leaders', $this->arcade_config['ext_leaders_forum_index_' . $type]);
						$this->arcade->change_config('replace', 'leaders_avatar', $this->arcade_config['ext_leaders_forum_index_avatar']);
						$this->arcade->change_config('replace', 'leaders_avatar_size', $this->arcade_config['ext_leaders_forum_index_avatar_size']);

						$this->arcade->display()->leaders($type, "ext_arcade_leaders_forum_index_{$type}");

						$this->arcade->change_config('restore', 'leaders');
						$this->arcade->change_config('restore', 'leaders_avatar');
						$this->arcade->change_config('restore', 'leaders_avatar_size');
					}
				}
			}
		}
	}
}
