<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_corporatetraining
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * CorporateTraining Model
 *
 * @since  0.0.1
 */
class CorporateTrainingModelCourse extends JModelItem
{
	/**
	 * @var string message
	 */
	protected $message;

	/**
	 * Get the message
         *
	 * @return  string  The message to be displayed to the user
	 */
	public function getMsg()
	{
		$jinput = JFactory::getApplication()->input;
		$id = $jinput->get('id','INT');
		// Get a db connection.
        $db = JFactory::getDbo();

        // Create a new query object.
		$query = $db->getQuery(true);
		
		$query->select('*');
        $query->from($db->quoteName('#__trainings'));
        $query->where($db->quoteName('id') . ' = '. $db->quote($id));
		
		$db->setQuery($query);

		return $this->message = $db->loadObject();
	}
}