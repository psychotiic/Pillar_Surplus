<?php
/*
  $Id: rss.php $
  TomatoCart Open Source Shopping Cart Solutions
  http://www.tomatocart.com

  Copyright (c) 2009 Wuxi Elootec Technology Co., Ltd

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License v2 (1991)
  as published by the Free Software Foundation.
*/

require_once('includes/classes/rss.php');

$Qcategories = toC_RSS::getCategories();
?>
<h1><?php echo"All customers are subject to TOS, orders may not be shipped/cancled if TOS are not aheard by";// $osC_Template->getPageTitle(); ?></h1>

<div class="moduleBox">
  <h6><?php  echo "Terms & Conditions";//echo $osC_Language->get('rss_categories'); ?></h6>
  
  <div class="content">
    <ul>
    <?php echo "Terms and Conditions Test ";
     // while ($Qcategories->next()) {echo"this is a test to get this done";}
  	   /* echo  '<li>
  	            <span style="float: right">' . osc_link_object(osc_href_link(FILENAME_RSS, 'categories_id=' . $Qcategories->value('categories_id')), osc_image(DIR_WS_IMAGES . 'rss16x16.png')) .'</span>         
                ' . osc_link_object(osc_href_link(FILENAME_RSS, 'categories_id=' . $Qcategories->value('categories_id')), $Qcategories->value('categories_name')) . '
          	   </li>';
      } 
      
      $Qcategories->freeResult();*/
    ?>
	    <li>
	      <span style="float:right;"><?php //echo osc_link_object(osc_href_link(FILENAME_RSS, 'group=new'), osc_image(DIR_WS_IMAGES . 'rss16x16.png')); ?></span>
	      <?php echo " These are the terms for new products";//osc_link_object(osc_href_link(FILENAME_RSS, 'group=new'), $osC_Language->get('new_products')); ?>
	    </li>
      <li>
        <span style="float:right;"><?php //echo osc_link_object(osc_href_link(FILENAME_RSS, 'group=special'), osc_image(DIR_WS_IMAGES . 'rss16x16.png')); ?></span>
        <?php echo "This is another Term";//osc_link_object(osc_href_link(FILENAME_RSS, 'group=special'), $osC_Language->get('special_products')); ?>
      </li>
      <li>
        <span style="float:right;"><?php //echo osc_link_object(osc_href_link(FILENAME_RSS, 'group=feature'), osc_image(DIR_WS_IMAGES . 'rss16x16.png')); ?></span>
        <?php echo "This is a third term for demo ";// osc_link_object(osc_href_link(FILENAME_RSS, 'group=feature'), $osC_Language->get('feature_products')); ?>
      </li>
    </ul>
  </div> 
</div>
