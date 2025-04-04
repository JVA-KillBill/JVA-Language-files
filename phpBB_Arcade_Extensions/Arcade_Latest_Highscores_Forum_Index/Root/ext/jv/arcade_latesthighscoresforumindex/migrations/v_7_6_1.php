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

namespace jv\arcade_latesthighscores\migrations;

use jv\arcade\inc\install\install as arcade_install;

class v_7_6_1 extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return ['\jv\arcade\migrations\v_7_6_1'];
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
			['ext_a_latest_highs_fi', 8],
			['ext_a_latest_highs_fi_avatar', 1],
			['ext_a_latest_highs_fi_popup_icon', 1]
		];

		$arcade_install->set_config($configs);
	}

	public function remove_data()
	{
		if ($this->db_tools->sql_table_exists("{$this->table_prefix}arcade_config"))
		{
			$sql = "DELETE FROM {$this->table_prefix}arcade_config
					WHERE " . $this->db->sql_in_set('config_name', ['ext_a_latest_highs_fi', 'ext_a_latest_highs_fi_avatar', 'ext_a_latest_highs_fi_popup_icon']);
			$this->db->sql_query($sql);
		}
	}
}
