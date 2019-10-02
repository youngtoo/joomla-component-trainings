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
 * HelloWorlds View
 *
 * @since  0.0.1
 */
class CorporateTrainingViewTrainings extends JViewLegacy
{
	/**
	 * Display the Hello World view
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */
	function display($tpl = null)
	{
        // Get application
		$app = JFactory::getApplication();
        $context = "training.list.admin.training";
        
		// Get data from the model
		$this->items		= $this->get('Items');
        $this->pagination	= $this->get('Pagination');
        
        $this->state			= $this->get('State');
		$this->filter_order 	= $app->getUserStateFromRequest($context.'filter_order', 'filter_order', 'coursename', 'cmd');
		$this->filter_order_Dir = $app->getUserStateFromRequest($context.'filter_order_Dir', 'filter_order_Dir', 'asc', 'cmd');
		$this->filterForm    	= $this->get('FilterForm');
		$this->activeFilters 	= $this->get('ActiveFilters');

		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode('<br />', $errors));

			return false;
		}
		 // Set the submenu
		 CorporateTrainingHelper::addSubmenu('Corporate Training');
        
        // Set the toolbar
		$this->addToolBar();

		// Display the template
        parent::display($tpl);
        
        // Set the document
        $this->setDocument();
        
       
    }

    /**
	 * Add the page title and toolbar.
	 *
	 * @return  void
	 *
	 * @since   1.6
	 */
	protected function addToolBar()
	{
		JToolbarHelper::title(JText::_('Corporate Training'));
		JToolbarHelper::addNew('training.add');
		JToolbarHelper::editList('training.edit');
		JToolbarHelper::deleteList('', 'trainings.delete');
    }
    
    /**
	 * Method to set up the document properties
	 *
	 * @return void
	 */
	protected function setDocument() 
	{
		$document = JFactory::getDocument();
		$document->setTitle(JText::_('Corporate Training Administrator'));
	}
    
    
}