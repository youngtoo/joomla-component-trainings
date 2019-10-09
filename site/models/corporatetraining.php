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
class CorporateTrainingModelCorporateTraining extends JModelItem
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
		if (!isset($this->message))
		{
			$this->message = 'Hello World!';
		}

		return $this->message;
	}

	/**
	 * get the categories first
	 */

	 public function getProgrammes()
	 {
		 // Initialize variables.
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);

		$query->select('a.id as courseid, a.catid as catid, a.dateto as dto, a.datefrom as dfrom, a.datenext as dnext, a.url as url, a.location as location, a.attendance as attendance, a.overview as overview, a.outcomes as outcomes ,a.coursename as coursename, a.catid as catid,  a.published as published')->from($db->quoteName('#__trainings', 'a'));
  		// Join over the categories.
		$query->select('c.title as category_title, c.id as cid')->join('LEFT', $db->quoteName('#__categories', 'c') . ' ON c.id = a.catid');
		

		$query->where('a.published = 1');
		$query->where('c.published = 1');
		$db->setQuery($query);

		$results = $db->loadObjectList();


		return $results;
	 }


	 /**
	 * get the categories first
	 */

	public function getCat()
	{
		// Initialize variables.
	   $db    = JFactory::getDbo();
	   $query = $db->getQuery(true);
	   

	   $query->select('*')->from('#__categories');
		 // Join over the categories.
	  // $query->select('DISTINCT c.catid as id')->join('RIGHT', $db->quoteName('#__trainings', 'c') . ' ON c.catid = a.id');
	   

	  $query->where($db->quoteName('published') .' = '. $db->quote('1') . ' AND '. $db->quoteName('extension') .' like '. $db->quote('com_corporatetraining'));
	   $db->setQuery($query);

	   $results = $db->loadObjectList();


	   return $results;
	}

	public function getAllProgrammes()
	{
		// Initialize variables.
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);

		$query->select('*')->from('#__trainings');
  		// Join over the categories.
		

		$query->where('published = 1');
		//$query->where('extension = com_corporatetraining');
		$db->setQuery($query);

		$results = $db->loadObjectList();


		return $results;
	}
}