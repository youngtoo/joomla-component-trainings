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
 * CorporateTraining View
 *
 * @since  0.0.1
 */
class CorporateTrainingViewTraining extends JViewLegacy
{
	/**
	 * View form
	 *
	 * @var         form
	 */
	protected $form = null;

	/**
	 * Display the Hello World view
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */
	public function display($tpl = null)
	{
		// Get the Data
		$this->form = $this->get('Form');
        $this->item = $this->get('Item');
        $this->script = $this->get('Script');

		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode('<br />', $errors));

			return false;
		}


		// Set the toolbar
        $this->addToolBar();
        $document = JFactory::getDocument();
        $document->addScript(JURI::root() . $this->script);
		$document->addScript(JURI::root() . "/administrator/components/com_corporatetraining"
		                                  . "/views/training/submitbutton.js");
		JText::script('Value not allowed');

		// Display the template
		parent::display($tpl);
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
		$input = JFactory::getApplication()->input;

		// Hide Joomla Administrator Main menu
		$input->set('hidemainmenu', true);

		$isNew = ($this->item->id == 0);

		if ($isNew)
		{
			$title = JText::_('New');
		}
		else
		{
			$title = JText::_('Edit');
		}

		JToolbarHelper::title($title, 'training');
		JToolbarHelper::save('training.save');
		JToolbarHelper::cancel(
			'training.cancel',
			$isNew ? 'JTOOLBAR_CANCEL' : 'JTOOLBAR_CLOSE'
		);
	}
}