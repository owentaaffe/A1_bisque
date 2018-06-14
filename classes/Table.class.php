<?php
// include functions.php function in content/function folder
include_once "content/functions/functions.php";
// Customer Class
class Table {	
	// Constructer Method
	public function __construct() {}	
	// Setter Method for Customer Class
	public function set_table($date, $time, $message, $partyOf){
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Call the input variables function from functions folder
			tableInputVariables();			
		}
	}
	// Getter Method for Customer Class
	public function get_table() {
		if(isset($_POST['submit'])) {
			$date = test_input($_POST["date"]);
			// Ref: https://stackoverflow.com/questions/10306999/php-convert-date-format-dd-mm-yyyy-yyyy-mm-dd
			$var = $date;
			$time = test_input($_POST["time"]);	
			$message = test_input($_POST["message"]);
			$partyOf = test_input($_POST["partyOf"]);
				
			echo "Your prefered date of reservation is <strong>" . date("D d-M-Y", strtotime($var)) . "</strong> for <strong>" . $partyOf . "</strong> person(s) at <strong>" . $time . "</strong>";
			echo "<br>";
			/* 
				if statement to check if message box is empty
				if not empty show message with the input and id number if message entered,
				if left empty just a message and id number applies
			*/
			if(strlen($_POST['message']) > 0) {
				echo "We appreicate your comments <strong>" . $message . "</strong> and will take these into account with our reply<br>";	
				echo "Please ring/email us quoting id number <strong>BR100234</strong> if any help is needed to accommadate you that you have not thought of. <br><strong> Thank you</strong>";
			}elseif(!strlen($_POST['message']) > 0) {
				echo "Please ring/email us quoting id number <strong>BR100234</strong> if any help is needed to accommadate you that you have not thought of. <br><strong> Thank you</strong>, <em>from</em> <strong style='color:#33D4FF;'>Bisque Restaurant</strong>";
			}
			echo "<br> </div>";	
		}
	}	
}
// Call the newTable function from functions folder/file
newTable();