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

<section class="my-3">
    <div class="p-2">
        <h4 class="p-2"><?php echo $this->msg->coursename;?> <small>- <?php echo $this->msg->location;?></small></h4>
        <div class="p-2"><small>Course Overview</small></div>
        <p class="p-2">
            <?php echo $this->msg->overview;?>
        </p>
    </div>
</section>

<div style="min-height:300px;">
    <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Who Should Attend?</a>
        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Expected Outcome</a>
        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Other Details</a>
    </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <p class="p-2"><?php echo $this->msg->attendance;?></p>
    </div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <p class="p-2"><?php echo $this->msg->outcomes;?></p>
    </div>
    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
        <p class="p-2 mt-2">
        <p><strong>CONTACT INFORMATION</strong></p>
        admissions@kra.go.ke<br>
        @Kenya Revenue Authority @KESRA_KRA @schoolofrevenueadministration<br>
        0709013161 / 020-2814153 / 0715877539/ 5/ 073642420
        </p>
    </div>
    </div>
</div>
