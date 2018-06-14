<?php 

include "views/shared/_header.layout.html"; 

include_once "views/shared/_sideNav.layout.html";

include "views/shared/_menu_start.layout.html";

// html name/times for menu page
echo "<div id='content-1' align='center'>
	  	<p><strong style='color: #33D4FF;'>Evening | late  </strong> 7:00 pm - 12:00 pm <hr>";

include "classes/EveningMenu.class.php";

include "views/shared/_menu_end.layout.html";
 
include "views/shared/_footer.layout.html";