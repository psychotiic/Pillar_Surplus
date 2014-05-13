<?php
/*
  $Id: index.php $
  TomatoCart Open Source Shopping Cart Solutions
  http://www.tomatocart.com

  Copyright (c) 2009 Wuxi Elootec Technology Co., Ltd;  Copyright (c) 2006 osCommerce

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License v2 (1991)
  as published by the Free Software Foundation.
*/

?>

<h1><?php echo $osC_Template->getPageTitle(); ?></h1>

<?php
  if ($osC_Customer->isLoggedOn()) {
    echo '<p>' . sprintf($osC_Language->get('greeting_customer'), osc_output_string_protected($osC_Customer->getFirstName()), osc_href_link(FILENAME_PRODUCTS, 'new')) . '</p>';
  } else {
    echo '<p>' . sprintf($osC_Language->get('greeting_guest'), osc_href_link(FILENAME_ACCOUNT, 'login', 'SSL'), osc_href_link(FILENAME_PRODUCTS, 'new')) . '</p>';
  }
?>

<?php 
	echo $osC_Language->get('index_text');
	
/*	echo "<br/>We are a surplus supply company located in Gobles, Michigan 
	that is constantly expanding our product line. Unlike many other 
	surplus companies we do not deal in specialized categories.<br/><br/> "; 
	*/
 
	echo "<p>We have a wide variety of different type goods for sale. 
	With access to such a selection of items that we can offer it is 
	our motto that 'If We don't have it, You don't need it!' If you 
	see something you need, please make us an offer!</p>";
 
	/*echo "We try to provide fair and competitive pricing on surplus 
	industrial, electrical, tools, hardware and other miscellaneous 
	surplus items.  Many of our items do not have a fixed price so 
	we are able to make you a deal.<br/><br/> ";
	
	echo "Our inventory is contantly expanding and changing so it 
	would be nearly impossible for us to list everything we carry. 
	Click on a Product category below to view pictures and details 
	of our current stock. If you see something that interests you 
	or if you're looking for something specific please give us a 
	call or email us. <br/> "; */
 ?>