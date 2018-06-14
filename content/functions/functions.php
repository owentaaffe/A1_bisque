<?php
// instantiate Customer class  
// with set_customer and get_customer methods
function newCustomer() {
	$customer = new Customer();
	$customer->set_customer('name', 'email', 'phone');
	$customer->get_customer();
}
// instantiate Table class  
// with set_tableand get_table methods
function newTable() {
	$table = new Table();
	$table->set_table('date', 'time', 'message', 'partyOf');
	$table->get_table();
}

function customerInputVariables() {
	$name = test_input($_POST["name"]);
	$email = test_input($_POST["email"]);
	$phone = test_input($_POST["phone"]);
}

function tableInputVariables() {
	// Ref: https://stackoverflow.com/questions/10306999/php-convert-date-format-dd-mm-yyyy-yyyy-mm-dd
	$date = test_input($_POST["date"]);
	$var = $date;
	$time = test_input($_POST["time"]);	
	$message = test_input($_POST["message"]);
	$partyOf = test_input($_POST["partyOf"]);
}

// clean data 
// https://www.w3schools.com/php/php_form_validation.asp 
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

