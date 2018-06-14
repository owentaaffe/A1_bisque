<?php 

include "views/shared/_header.layout.html"; 

include_once "views/shared/_sideNav.layout.html";

include "views/shared/_menu_start.layout.html";

// html name/times for menu page
echo "<div id='content-1' align='center'>
	  	<p><strong style='color: #33D4FF;'>Breakfast | Brunch </strong> 8:00 am - 1:00 pm<hr></p>";

include "classes/BreakfastMenu.class.php";

include "views/shared/_menu_end.layout.html";
 
include "views/shared/_footer.layout.html";