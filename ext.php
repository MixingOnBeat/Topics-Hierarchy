<?php
/**
 *
 * Topics Hierarchy. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2016, 2017 -3Di, http://3di.space/32/
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
	 * @return bool ||
	 */
	public function is_enableable()
	{
		/**
		 * We rely on constants.php because this extension uses
		 * PHP events not present in lesser versions/releases and there are differencies within CSS classes.
		 */
		if ( phpbb_version_compare(PHPBB_VERSION, '3.1.10', '>=') && phpbb_version_compare(PHPBB_VERSION, '3.2.0@dev', '<') )
		{
			return true;
		}
		else
		{
			SELF::verbose_it();
		}
	}

	/**
	 * Let's tell the user what exactly is going on and provide a back-link.
	 * Using the User Object for BC.
	 */
	function verbose_it()
	{
		$this->container->get('user')->add_lang_ext('threedi/topicshierarchy', 'common');

		trigger_error($this->container->get('user')->lang['EXTENSION_REQUIREMENTS_NOTICE'] . adm_back_link(append_sid('index.' . $this->container->getParameter('core.php_ext'), 'i=acp_extensions&amp;mode=main')), E_USER_WARNING);
	}
}
