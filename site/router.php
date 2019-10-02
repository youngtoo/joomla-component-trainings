<?php
/**
 * 
 */
jimport( 'joomla.application.menu' );


 class corporatetrainingRouter  extends JComponentRouterView
 {
	 

    public function build(&$query)
    {
        $segments = array();
        if (isset($query['id']))
		{
			/*$db = JFactory::getDbo();
			$qry = $db->getQuery(true);
			$qry->select('alias');
			$qry->from('#__ievent');
			$qry->where('id = ' . $db->quote($query['id']));
			$db->setQuery($qry);
			$alias = $db->loadResult();
			$segments[] = $alias;*/
			unset($query['id']);
		}
		//$query['itemid'] = JFactory::getApplication()->getMenu()->getActive()->id ;
		unset($query['view']);
		//unset($query['option']);
		

        return $segments;
    }



    public function parse(&$segments)
    {
        $vars = array();
    switch($segments[0])
    {
        case 'corporatetraining':
            $vars['view'] = 'corporatetraining';
            break;
        case 'course':
            $vars['view'] = 'course';
            $id = explode(':', $segments[1]);
            $vars['id'] = (int) $id[0];
            break;
    }
    return $vars;
    }

    public function preprocess($query)
	{
		return $query;
	}

 }