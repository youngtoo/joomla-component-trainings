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
?>

<section class="mt-3 mb-3">
<small class="d-block p-2">Overview</small>

        <p class="p-2 text-justify text-mured">
        As a professional, we recognize that your time is valuable. When looking for training, time, quality and location
        is critical. For convenience, we take these elements into consideration in offering our programmes to enable
        you achieve your professional goals.<br>

        </p>
</section>



<section style="min-height:200px;">
    <div class="accordion" id="courses">

    <?php
    if(isset($this->cat))
    {
        foreach($this->cat as $i => $c)
        {
    ?>

        <a href="#"  data-toggle="collapse" data-target="#collapseOne<?php echo $c->id;?>" aria-expanded="true" aria-controls="collapseOne" ><div class=" rounded p-2 mt-2 bg-light" style="border-left:3px #ff0613 solid; border-right:3px #ff0613 solid;"><?php echo $c->title;?> <i class="fa fa-plus float-right m-1"></i></div></a>
        <div id="collapseOne<?php echo $c->id;?>" class="collapse py-3 px-2 my-2" aria-labelledby="headingOne" data-parent="#courses">    
        <div class="list-group">
            <?php
            if(isset($this->programmes))
            {
                
                foreach($this->programmes as $int => $p){
                    if($c->id == $p->catid){
                        ?>
                            <a href="<?php echo JRoute::_('index.php?option=com_corporatetraining&view=course&id='.$p->courseid);?>" class="list-group-item list-group-item-action"><?php echo $p->coursename;?></a>
                        <?php
                    }
            }
                
            }
            
            ?>
            
        </div>
        </div>

    <?php 
        }
    }
    ?>




    </div>   
</section>