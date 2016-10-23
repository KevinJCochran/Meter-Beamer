<?php
	// read in from html
	if(isset($_POST["submit"]) ){

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

		$cursor = $collection->findOne({"userName":$userName},{"password":$password});

		if(isset($cursor))
			$_SESSION["username"] = $cursor->userName;
	}
?>