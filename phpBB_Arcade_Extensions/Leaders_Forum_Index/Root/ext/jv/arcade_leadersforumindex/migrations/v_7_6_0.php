<?php
/**
*
* @package phpBB Arcade - Leaders on forum index.
* @version $Id: v_7_6_0.php 2483 2022-03-16 11:25:49Z KillBill $
* @author 2011-2025 KillBill
* @copyright (c) 2014-2025 https://jv-arcade.com/ - https://jv-arcade.com/contact
* @license https://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace jv\arcade_leadersforumindex\migrations;

use jv\arcade\inc\install\install as arcade_install;

class v_7_6_0 extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return ['\jv\arcade_leadersforumindex\migrations\v_1_0_0'];
	}

	public function update_data()
	{
		return [
			['custom', [[$this, 'install_data']]]
		];
	}

	public function revert_data()
	{
		return [
			['custom', [[$this, 'remove_data']]]
		];
	}

	public function install_data()
	{
		$arcade_install = new arcade_install($this->db, $this->php_ext, $this->table_prefix);

		$configs = [
			['ext_leaders_forum_index_avatar_size', 50]
		];

		$arcade_install->set_config($configs);
	}

	public function remove_data()
	{
		if ($this->db_tools->sql_table_exists("{$this->table_prefix}arcade_config"))
		{
			$sql = "DELETE FROM {$this->table_prefix}arcade_config
					WHERE config_name = '" . $this->db->sql_escape('ext_leaders_forum_index_avatar_size') . "'";
			$this->db->sql_query($sql);
		}
	}
}
