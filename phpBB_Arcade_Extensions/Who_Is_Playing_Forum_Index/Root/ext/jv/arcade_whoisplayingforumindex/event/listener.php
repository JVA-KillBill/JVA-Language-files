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

namespace jv\arcade_whoisplayingforumindex\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	protected $ext_enable = false;
	protected $arcade, $arcade_config, $auth;

	public function __construct($ext, $arcade = null, $arcade_config = null, $auth)
	{
		if ($arcade && defined('ARCADE_MIN_EXT_VERSION') && phpbb_version_compare($ext->version, ARCADE_MIN_EXT_VERSION, '>='))
		{
			$this->ext_enable = true;
			$this->arcade = $arcade;
			$this->arcade_config = $arcade_config;
			$this->auth = $auth;
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
		if ($this->ext_enable && $this->arcade_config['ext_whoisplaying_forum_index_display'] && $this->arcade->access('arcade', false) && $this->auth->acl_get('u_arcade_view_whoisplaying'))
		{
			$this->arcade->display()->online_playing();
		}
	}
}
