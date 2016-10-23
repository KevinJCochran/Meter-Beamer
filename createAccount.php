<!DOCTYPE html>
<html>
<head>
	<title>Meter Beamer</title>
	<meta charset="utf-8"/>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

	<link rel="icon" type="image/ico" href="images/favicon.ico">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">

	<!-- BOOTSTRAP & JQUERY -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
	<?php include("scripts/con.php"); ?>

	<header class="container-fluid title">
		<div class="col-md-4"><h3>Meter Beamer</h3></div>
		
		<div class="col-md-8" id="alignright">
			<a href="index.html"><button type="button" class="btn btn-default navbar-btn">Home</button></a>
			<a href="signIn.html"><button type="button" class="btn btn-default navbar-btn">Sign in</button></a>
			<a href="#"><button type="button" class="btn btn-default navbar-btn">Create Account</button></a>
			<button type="button" class="btn btn-default navbar-btn">Contact</button>
		</div>
	</header>

	<div class="centerInput" id="marginTop2">
		<h2>CREATE A NEW ACCOUNT</h2>
	</div>

	<form method="POST">
	<div class="container" id="marginTop">
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<div class="form-group">
		  			<label for="text">First Name:</label>
		    		<input class="form-control" id="first_name" name="first_name" style="width: 200px" placeholder="First Name">
				</div>
			</div>

			<div class="col-md-3">
				<div class="form-group">
	  				<label for="example-search-input">Last Name:</label>
	    			<input class="form-control" id="last_name" name="last_name" style="width: 200px" placeholder="Last Name">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<div class="form-group">
					<label for="example-email-input">Street Address:</label>
			    	<input class="form-control" id="address" name="address" style="width: 490px" placeholder="123 College Ave">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<div class="form-group">
					<label for="example-email-input">User Name:</label>
	    			<input class="form-control" id="user_name" name="user_name" style="width: 200px" placeholder="User Name">
				</div>
			</div>

			<div class="col-md-3">
				<div class="form-group">
					<label for="example-email-input">Password:</label>
	    			<input type="password" class="form-control" id="password" name="password" style="width: 200px" placeholder="Password">
				</div>
			</div>
		</div>
	</div>

	<button type="submit" class="btn btn-primary" id="alignButton" style="width:205px" name="submit">Submit</button>
	</form>

	<!-- CAPITAL ONE -->
	<script src="scripts/capitalone.js"></script>

	<?php include("scripts/conn.php"); ?>
</body>
</html>