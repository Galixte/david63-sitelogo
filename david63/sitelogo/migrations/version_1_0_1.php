<?php
/**
*
* @package Site Logo Extension
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\sitelogo\migrations;

class version_1_0_1 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('david63\sitelogo\migrations\version_1_0_0');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('site_name_below', '0')),

			array('config.remove', array('version_sitelogo')),
		);
	}
}
