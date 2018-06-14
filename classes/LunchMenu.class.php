<!--
A class for Lunch menu. This gets data from an array menuArrays.php file in the content/menu folder.
-->
<?php
// include functions.php function in content/function folder
include_once "content/menu/menuArrays.php";

class LunchMenu {
	// get_lunch_menu method
	public function get_lunch_menu(){
		// Call array from content/menu folder
		global $lunchMenu;
		
		// for loop for each item in lunch menu
		for ($row = 0; $row < sizeof($lunchMenu); $row++) {
			
			echo "<p><strong>" . $lunchMenu[$row]["Title"] . "</strong></p> <em>" . $lunchMenu[$row]["Contents"] . "</em><br><br>";
		}	
	}
	
}

// instantiate LunchMenu 
$lunch = new LunchMenu();
// call get_lunch_menu method
$lunch-> get_lunch_menu();