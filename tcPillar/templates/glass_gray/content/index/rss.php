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
<h1><?php echo"All customers are subject to Terms of Sales";// $osC_Template->getPageTitle(); ?></h1>

<div class="moduleBox">
  <h6><?php  echo "Terms & Conditions";//echo $osC_Language->get('rss_categories'); ?></h6>
  
  <div class="content">
    <ul>
  	    <li>
	      <span style="float:right;"><?php //echo osc_link_object(osc_href_link(FILENAME_RSS, 'group=new'), osc_image(DIR_WS_IMAGES . 'rss16x16.png')); ?></span>
	      <?php echo "<strong>Product Availability</strong><br/> Inventory available is adjusted as sales are processed daily. 
		  Since items are listed on Multiple Sites, quantity is limited, and subject 
		  to prior sale.  Backorders are not available";//osc_link_object(osc_href_link(FILENAME_RSS, 'group=new'), $osC_Language->get('new_products')); ?>
	    </li><br/>
      <li>
        <span style="float:right;"><?php //echo osc_link_object(osc_href_link(FILENAME_RSS, 'group=special'), osc_image(DIR_WS_IMAGES . 'rss16x16.png')); ?></span>
        <?php echo "<strong>Payments Accepted</strong><br/>
					Credit Cards: Visa/MasterCard<br/>
					Certified Check<br/>
					Cash (local pickup)<br/>
					PayPal<br/><br/>
					Total Payment for both item & shipping fees is expected within 7 (seven) 
					days of order placement unless other arrangements have been made and approved. 
					All purchased items must be picked up within 30 days or the item(s) is/are forfeited without a refund. ";
					//osc_link_object(osc_href_link(FILENAME_RSS, 'group=special'), $osC_Language->get('special_products')); ?>
      </li><br/>
      <li>
        <span style="float:right;"><?php //echo osc_link_object(osc_href_link(FILENAME_RSS, 'group=feature'), osc_image(DIR_WS_IMAGES . 'rss16x16.png')); ?></span>
        <?php echo "<strong>Item Image Disclaimer</strong><br/>
					We do our best to provide detailed descriptions of our item/s for sale. 
					The item pictured is what is for sale. If a stock picture is being used, 
					this will be mentioned in the description along with the visual images 
					of the item. If a discrepancy between an item's description and the 
					images posted within the listing exists, the item's written description 
					takes precedent over the visual images. Items that may be shown in the 
					photo background are not included in sale unless specifically listed in 
					the item’s detailed description. ";// osc_link_object(osc_href_link(FILENAME_RSS, 'group=feature'), $osC_Language->get('feature_products')); ?>
      </li><br/>
	  
	  <li>
	  <?php echo "<strong>Warranty</strong><br/>
	  All Pillar Surplus items are sold as is, where-is with no warranty 
	  from Pillar Surplus and no guarantee of the manufacturer warranty 
	  coverage unless specifically listed in the item details. Returns 
	  will not be accepted or processed due to a non-functioning product 
	  unless specified in the item listing.";
	  ?>
	  </li>
    </ul>
  </div> 
</div>
