<?php
	
	// read in from html
	if( isset($_POST["submit"]) ){

		$firstName = $_POST["first_name"];
		$lastName = $_POST["last_name"];
		$address = $_POST["address"];
		$userName = $_POST["user_name"];
		$password = $_POST["password"];

		// connect to mongodb
		$m = new MongoClient();
		echo "Connection to database successfully";
		// select a database
		$db = $m->parkdb;
		echo "Database parkdb selected";

		// select collection
		$collection = $db->users;
		echo "Collection selected succsessfully";

		$document = array( 
	      	"firstName" => $firstName, 
	      	"lastName" => $lastName, 
	      	"address" => $address,
	      	"userName" => $userName,
	      	"password" => $password
		);
	
		$collection->insert($document);
		echo "Document inserted successfully";
	}
?>