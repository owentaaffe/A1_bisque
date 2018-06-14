<!--
A class for EarlyBird menu. This gets data from an array menuArrays.php file in the content/menu folder.
-->
<?php
// include functions.php function in content/function folder
include_once "content/menu/menuArrays.php";

class EarlyBird {
	// get_early_bird_menu method
	public function get_early_bird_menu(){
		// Call array from content/menu folder
		global $earlyBirdStarter;
		
        // Call array from content/menu folder		
		global $earlyBirdMains; 
		
		// Call array from content/menu folder
		global $earlyBirdDesserts; 
		
		// html and for loop for starters and seperator image
		echo "<h2><b>Starters</b></h2>";
		for ($row = 0; $row < sizeof($earlyBirdStarter); $row++) {
			
			echo "<p><strong>" . $earlyBirdStarter[$row]["Title"] . "</strong></p> <i>" . $earlyBirdStarter[$row]["Contents"] . "</i><br><br>";
		}	
		echo "<br><img src='content/images/seperator.png' width='100%' height='25em' alt='seperator'>";
		
		// html and for loop for mains and seperator image
		echo "<h2><strong>Mains</strong></h2>";
		for ($row = 0; $row < sizeof($earlyBirdMains); $row++) {
			
			echo "<p><strong>" . $earlyBirdMains[$row]["Title"] . "</strong></p> <i>" . $earlyBirdMains[$row]["Contents"] . "</i><br><br>";
		}	
		echo "<br><img src='content/images/seperator.png' width='100%' height='25em' alt='seperator'>";
		
		// html and for loop for desserts
		echo "<h2><b>Desserts</b></h2>";
		for ($row = 0; $row < sizeof($earlyBirdDesserts); $row++) {
			
			echo "<p><strong>" . $earlyBirdDesserts[$row]["Title"] . "</strong></p> <i>" . $earlyBirdDesserts[$row]["Contents"] . "</i><br><br>";
		}	
		echo "<br><br>";
	}
	
}

// instaniate EarlyBird class
$earlyBird = new EarlyBird();

// call get_early_bird_menu() function
$earlyBird-> get_early_bird_menu();