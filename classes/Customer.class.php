<?php
// include functions.php function in content/function folder
include_once "content/functions/functions.php";
// Customer Class
class Customer {
	// Constructer Method
	public function __construct() {}
	// Setter Method for Customer Class
	public function set_customer($name, $email, $phone){
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Call the input variables Function from functions folder/file
			customerInputVariables();
		}
	}
	// Getter Method for Customer Class
	public function get_customer() {
		if(isset($_POST['submit'])) {
			//inputVariables();
			$name = test_input($_POST["name"]);
			$email = test_input($_POST["email"]);
			$phone = test_input($_POST["phone"]);
			
			echo "<div class='message_customer'>";
			echo "<h2>Message from Bisque Restaurent</h2>";
			echo "Hello and welcome<strong> " . $name . "</strong>";
			echo "<br>";
			echo "You will soon get an email from us to <strong>" . $email . "</strong> to confirm this booking";
			echo "<br>";
			echo "And/or get a text/phone call to <strong> " . $phone . "</strong> ";
			echo "<br>";
		}
	}
}
// Call the new customer Functions in functions folder
newCustomer();