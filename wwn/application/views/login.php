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
			/*background-color: #43c86a;*/
			color: white;
		}

		.left {
			background-color: #f8f8ff;
			float: left;
			width: 60%;
			/*height: 100%;*/
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
		
		.placeholder_image {
			width: 100%;
		}

		.button
		{
			border-radius: 50px;
			width: 350px;
			background-color: white;
			color: #43c86a;
			font-weight: bold;
			}
		
		.sizing {
			width: 80%;
			display: inline-block;
			margin-left: 0;
			margin-right: 0;
		}

		.find {
			display: inline-block;
			margin-left: 0;
			margin-right: 0;
		}

		.registration {
			width: 70%;
			display: inline-block;
			margin-left: 0 auto;
			margin-right: 0 auto;
			border-radius: 50px;
			border: 2px solid white;
			color: white;
			background-color: #43c86a;
			font-weight: bold;
		}


	</style>


</head>
<body>
	<div class="left">
		<div class="container-fluid">
			<h1>Insert the map here (image as placeholder)</h1>
			<div id="map"></div>
			<!-- <img class="placeholder_image" src="<!-- https://images.unsplash.com/photo-1516752230528-a26560af7701?ixlib=rb-0.3.5&s=1aa4fcaa03bd6ec1e9d3bf5a771e74aa&auto=format&fit=crop&w=1534&q=80" alt="rainforest"> -->
		</div>
	</div>

	<div class="right">
		<div class="container-fluid">
			<h1>Take a look at your piece of rainforest</h1>
			<p class="lead">Are you one of our heroes and adopted a square meter of Costa Rican rainforest? Fly to it and explore!</p>
		
			<form action="/login" method="POST">
				<div class="sizing form-group">
				    <input type="text" class="form-control" id="email" name="email" placeholder="Your Email*">
				</div>
				<div class="sizing form-group">
				    <input type="text" class="form-control" id=password name="password" placeholder="Your Password*">
				</div>
				<div class="find">
					<input class="button form-control" type="submit" name="find" value="Find">
				</div>		
			</form>
			
			<br>
			<br>

			<hr>

			<form action="individualcontroller/register" method="POST">
 				<div class="form-group">
				    <input type="submit" class="registration form-control" id="formGroupExampleInput" value="Adopt a square meter for only €2,50">
			  	</div>
		  	</form>

		  <!-- 	<form class="registration" action="companycontroller/register" method="POST" >
			  	<div class="form-group">
 			    <input type="submit" class="form-control" id="formGroupExampleInput2" value="I want to adopt rainforest (register as a company)">
			  	</div>
			</form> -->

		</div> <!-- end div class="container-fluid" -->


	</div>


</body>

</html>