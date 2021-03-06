<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_installer
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * @package     Joomla.Administrator
 * @subpackage  com_installer
 */
class InstallerControllerDiscover extends JControllerLegacy
{
	/**
	 * Refreshes the cache of discovered extensions.
	 *
	 * @since	1.6
	 */
	public function refresh()
	{
		$model = $this->getModel('discover');
		$model->discover();
		$this->setRedirect(JRoute::_('index.php?option=com_installer&view=discover', false));
	}

	/**
	 * Install a discovered extension.
	 *
	 * @since	1.6
	 */
	public function install()
	{
		$model = $this->getModel('discover');
		$model->discover_install();
		$this->setRedirect(JRoute::_('index.php?option=com_installer&view=discover', false));
	}

	/**
	 * Clean out the discovered extension cache.
	 *
	 * @since	1.6
	 */
	public function purge()
	{
		$model = $this->getModel('discover');
		$model->purge();
		$this->setRedirect(JRoute::_('index.php?option=com_installer&view=discover', false), $model->_message);
	}
}
