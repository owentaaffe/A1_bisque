<!--
A class for breakfast menu. This gets data from an array menuArrays.php file in the content/menu folder.
-->
<?php
// include functions.php function in content/function folder
include_once "content/menu/menuArrays.php";

class BreakfastMenu {
	// get_breakfast_menu method
	public function get_breakfast_menu(){
		// Call array from content/menu folder
		global $breakfastMenu;
		
		// for loop for each item in breakfast menu
		for ($row = 0; $row < sizeof($breakfastMenu); $row++) {			
			echo "<p><strong>" . $breakfastMenu[$row]["Title"] . "</strong></p><em>" . $breakfastMenu[$row]["Contents"] . "</em><br><br>";
		}	
	}
	
}
// instantiate BreakfastMenu 
$breakfast = new BreakfastMenu();
// call get_breakfast_menu method
$breakfast-> get_breakfast_menu();