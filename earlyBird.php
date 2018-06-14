<?php 
include "views/shared/_header.layout.html"; 

include_once "views/shared/_sideNav.layout.html"; 

include "views/shared/_menu_start.layout.html";

// html name/times for menu page
echo "<div id='content-1' align='center'>
	  	<p><strong style='color: #33D4FF;'>Early Bird </strong> 5:00 pm - 7:00 pm <br>2 Course | 3 Course</p><hr>";

include "classes/EarlyBirdMenu.class.php";

include "views/shared/_menu_end.layout.html";

include "views/shared/_footer.layout.html";