<?php
/**
*
* @package phpBB Arcade - New games on forum index page
* @version $Id: ext.php 2361 2020-11-20 15:10:59Z KillBill $
* @author 2011-2025 KillBill
* @copyright (c) 2014-2025 https://jv-arcade.com/ - https://jv-arcade.com/contact
* @license https://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace jv\arcade_newgamesforumindex;

use phpbb\extension\base;

class ext extends base
{
	public function is_enableable()
	{
		$rv = '7.0.0';
		$error = false;
		$is_enableable = false;
		$em = $this->container->get('ext.manager');

		if (/*!$em->is_available('jv/arcade') ||*/ !$em->is_enabled('jv/arcade'))
		{
			$error = 1;
		}
		else
		{
			$arcade_config = $this->container->get('jv.arcade.config');
			$is_enableable = version_compare($arcade_config['version'], $rv, '>=');

			if (!$is_enableable)
			{
				$error = 2;
			}
		}

		if ($error)
		{
			$lang = $this->container->get('language');
			$lang->add_lang('error', 'jv/arcade_newgamesforumindex');

			trigger_error($lang->lang('ARCADE_EXT_NGF_ERROR_ENABLE' . $error, $rv), E_USER_WARNING);
		}

		return $is_enableable;
	}
}
