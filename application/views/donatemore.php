<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View your forest</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<style>

		body {
			color: white;
		}

		.left {
			background-color: #f8f8ff;
			float: left;
			width: 60%;
			padding-top: 30px;
		}

		.right {
			background-color: #43c86a;
			float: left;
			width: 40%;
			height: 100vh;
			padding-top: 15%;
			text-align: center;
		}
		
		.sizing {
			width: 75%;
			display: inline-block;
			margin-left: 0;
			margin-right: 0;
		}

		.centerbutton {
			display: inline-block;
			margin-left: 0;
			margin-right: 0;
		}

	</style>

</head>
<body>
	<div class="left">
		<div class="container-fluid">
			<h1>Insert the map here</h1>
			<div id="map"></div>
		</div>
	</div>

	<div class="right">
		<div class="container-fluid">
			<h1>Please fill out the form below to save the rainforests in Costa Rica</h1>
			<p class="lead">Thank you for your generous interest</p>
		
			<form action="ADDHERE" method="POST">
				<div class="sizing form-group">
					<label class="form-check-label">
		               How many squared meters would you like to adopt? (With only €2,50 we can already save 1 squared meter)
		           </label>
				    <input type="text" class="form-control" id="donatemore" name="donatemore" placeholder="m2*"" width="200px">
				</div>
				<div class="sizing form-group">
					<label class="form-check-label">
			    	<input type="checkbox" class="form-check-input" name="iban_agree">
			    	Yes, I agree with the automatic bank draft of Adopt Rainforest*
			    </label>
			    </div>

			    <br>
			    <br>
				
				<div class="donatemore">
					<input class="centerbutton button form-control" type="submit" name="donatenow" value="Donate more">
				</div>		
			</form>

		</div> <!-- end div class="container-fluid" -->

	</div>

</body>
</html>