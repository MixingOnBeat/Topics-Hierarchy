<?php
/**
 *
 * Topics Hierarchy. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016, 3Di, http://3di.space/32/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace threedi\topicshierarchy;

/**
 * Topics Hierarchy Extension base
 */
class ext extends \phpbb\extension\base
{
	/**
	 * Check whether or not the extension can be enabled.
	 *
	 * @return bool
	 */
	public function is_enableable()
	{
		$config = $this->container->get('config');
		return phpbb_version_compare($config['version'], '3.1.10', '>=') && phpbb_version_compare($config['version'], '3.2.0dev', '<');
	}
}
