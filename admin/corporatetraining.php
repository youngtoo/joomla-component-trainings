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

// Require helper file
JLoader::register('CorporateTrainingHelper', JPATH_COMPONENT . '/helpers/corporatetraining.php');

// Get an instance of the controller prefixed by HelloWorld
$controller = JControllerLegacy::getInstance('CorporateTraining');

// Perform the Request task
$controller->execute(JFactory::getApplication()->input->get('task'));

// Redirect if set by the controller
$controller->redirect();