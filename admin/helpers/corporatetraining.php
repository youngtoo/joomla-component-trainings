<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * HelloWorld component helper.
 *
 * @param   string  $submenu  The name of the active view.
 *
 * @return  void
 *
 * @since   1.6
 */
abstract class CorporateTrainingHelper extends JHelperContent
{
	/**
	 * Configure the Linkbar.
	 *
	 * @return Bool
	 */

	public static function addSubmenu($submenu) 
	{
		JHtmlSidebar::addEntry(
			JText::_('Courses'),
			'index.php?option=com_corporatetraining',
			$submenu == 'Corporate Training'
		);

		JHtmlSidebar::addEntry(
			JText::_('Course Category'),
			'index.php?option=com_categories&view=categories&extension=com_corporatetraining',
			$submenu == 'Categories'
		);

		// Set some global property
		$document = JFactory::getDocument();
        /*
        $document->addStyleDeclaration('.icon-48-helloworld ' .
                                        '{background-image: url(../media/com_helloworld/images/tux-48x48.png);}');
                                        */
		if ($submenu == 'categories') 
		{
			$document->setTitle(JText::_('Corporate Training - Categories'));
		}
	}
}