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
	<?php 
		include("scripts/check.php");
		include("scripts/conn.php"); 
	?>

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
				<?php if(isset($_SESSION["username"])) { ?>
					<h2>PAYMENT INFORMATION</h2>
				<?php 
				} else { ?>
					<h2>PLEASE LOGIN</h2>
				<?php } ?>
			</div>

			<?php if(isset($_SESSION["username"])) { ?>
			<div class="centerBox" id="marginTop">
				<div class="row">
					<div class="form-group">
				  		<label>Meter ID</label>
				   		<input class="form-control centerText" id="meter_id" name="meter_id" placeholder="Meter ID">
					</div>

					<div class="row">
						<div class="form-group">
			  				<label>Drop Down</label>
			    			<input class="form-control centerText" id="last_name" name="last_name" placeholder="Last Name">
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>

</body>
</html>