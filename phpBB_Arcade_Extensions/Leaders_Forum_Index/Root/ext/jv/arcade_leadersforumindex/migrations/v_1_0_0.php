<?php
/**
*
* @package phpBB Arcade - Leaders on forum index.
* @version $Id: v_1_0_0.php 2483 2022-03-16 11:25:49Z KillBill $
* @author 2011-2025 KillBill
* @copyright (c) 2014-2025 https://jv-arcade.com/ - https://jv-arcade.com/contact
* @license https://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace jv\arcade_leadersforumindex\migrations;

use jv\arcade\inc\install\install as arcade_install;

class v_1_0_0 extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return array('\jv\arcade\migrations\v_4_2_2');
	}

	public function update_data()
	{
		return array(
			array('custom', array(array($this, 'install_data')))
		);
	}

	public function revert_data()
	{
		return array(
			array('custom', array(array($this, 'remove_data')))
		);
	}

	public function install_data()
	{
		$arcade_install = new arcade_install($this->db, $this->php_ext, $this->table_prefix);

		$configs = array(
			array('ext_leaders_forum_index_arcade', 3),
			array('ext_leaders_forum_index_challenge', 0),
			array('ext_leaders_forum_index_tournament', 0),
			array('ext_leaders_forum_index_avatar', 1)
		);

		$arcade_install->set_config($configs);
	}

	public function remove_data()
	{
		if ($this->db_tools->sql_table_exists("{$this->table_prefix}arcade_config"))
		{
			$sql = "DELETE FROM {$this->table_prefix}arcade_config
					WHERE " . $this->db->sql_in_set('config_name', array('ext_leaders_forum_index_arcade', 'ext_leaders_forum_index_challenge', 'ext_leaders_forum_index_tournament', 'ext_leaders_forum_index_avatar'));
			$this->db->sql_query($sql);
		}
	}
}
