<?php include("scripts/session.php"); ?>
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
	<header class="container-fluid title">
		<div class="col-md-4"><h3>Meter Beamer</h3></div>
		
		<div class="col-md-8" id="alignright">
			<a href="index.html"><button type="button" class="btn btn-default navbar-btn">Home</button></a>
			<a href="signIn.php"><button type="button" class="btn btn-default navbar-btn">Sign in</button></a>
			<a href="createAccount.php"><button type="button" class="btn btn-default navbar-btn">Create Account</button></a>
			<button type="button" class="btn btn-default navbar-btn">Contact</button>
		</div>
	</header>

<div class="container-fluid" id="metersearch">
<div class="login-info">
	<div class="centerText">
		<h2>SIGN INTO YOUR ACCOUNT</h2>
	</div>

	<form method="POST" action="payPage.php">
	<div class="centerBox" id="marginTop">
		<div class="row">
			<div class="form-group">
				<label for="centerText">User Name</label>
			    <input class="form-control centerText" id="user_name" name="user_name" placeholder="User Name">
			</div>
		</div>

		<div class="row">
			<div class="form-group">
				<label>Password</label>
			   	<input type="password" class="form-control centerText" id="password" name="name" placeholder="Password">
			</div>
		</div>

		<button type="submit" class="btn btn-primary" style="width:200px">Submit</button>
	</div>
	</form>
	</div>

</body>
</html>