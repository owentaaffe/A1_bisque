<!--
A class for Evening menu. This gets data from an array menuArrays.php file in the content/menu folder.
-->
<?php
// include functions.php function in content/function folder
include_once "content/menu/menuArrays.php";

class EveningMenu {
	// get_evening_menu method
	public function get_evening_menu(){
		// Call array from content/menu folder
		global $eveningStarter;
		
		// Call array from content/menu folder
		global $eveningSharing;
		
		// Call array from content/menu folder
		global $eveningMains;
		
		// Call array from content/menu folder
		global $eveningDesserts;
		
		// html and for loop for starters 
		echo "<h2><strong>Starters</strong></h2>";
		for ($row = 0; $row < sizeof($eveningStarter); $row++) {
			
			echo "<p><strong>" . $eveningStarter[$row]["Title"] . "</strong></p> <em>" . $eveningStarter[$row]["Contents"] . "</em><br><br>";
		}	
		// html and for loop for starters to share and seperator image
		echo "<h2><strong>Starters to Share</strong></h2>";
		for ($row = 0; $row < sizeof($eveningSharing); $row++) {
			
			echo "<p><strong>" . $eveningSharing[$row]["Title"] . "</strong></p> <em>" . $eveningSharing[$row]["Contents"] . "</em><br><br>";
		}
		echo "<br><img src='content/images/seperator.png' width='100%' height='25em' alt='seperator'>";
		
		// html and for loop for mains and seperator image
		echo "<h2><strong>Mains</strong></h2>";
		for ($row = 0; $row < sizeof($eveningMains); $row++) {
			
			echo "<p><strong>" . $eveningMains[$row]["Title"] . "</strong></p> <em>" . $eveningMains[$row]["Contents"] . "</em><br><br>";
		}	
		echo "<br><img src='content/images/seperator.png' width='100%' height='25em' alt='seperator'>";
		
		// html and for loop for desserts
		echo "<h2><strong>Desserts</strong></h2>";
		for ($row = 0; $row < sizeof($eveningDesserts); $row++) {
			
			echo "<p><strong>" . $eveningDesserts[$row]["Title"] . "</strong></p> <em>" . $eveningDesserts[$row]["Contents"] . "</em><br><br>";
		}	
		echo "<br><br>";
	}
	
}

// instaniate evening class
$evening = new EveningMenu();

// call get_evening_menu() function
$evening-> get_evening_menu();