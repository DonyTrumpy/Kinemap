<?php
	include 'config.php';
?>

<!doctype html>
<html lang="en">
	<head>
		<link rel="icon" href="images\logo.png">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">

		<title>Kinemap | Signup</title>

		<script src="js/sweetalert.min.js"></script>
		<link rel="stylesheet" href="css/sweetalert.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/styleHome.css">
	</head>
	<style>

	::selection{
	background-color:#49E038;
	color:#fff;
	}

		body, html{
		height: 100%;
		width: 100%;
		background-image: url('http://localhost/Alexis/images/WW10.jpeg');
		no-repeat center center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size:cover;
	}



	#header{
	  width: 100%;
	  height: 56px;
	  background: #fff;
	  border-bottom: 2px solid rgba(255,255, 255, 0.2);
	  border-top: 2px solid rgba(255,255, 255, 0.2);
	  position: sticky;
	  top: 0;
	  border-bottom-color:#059041;
	}



	#header ul{
	  display: flex;
	  margin:0;
	  padding:0 100px;
	  float:right;
	}
	#header ul li {
	  list-style: none;
	}
	#header ul li a{
	  display: block;
	  color: #000000;
	  padding: 0 20px;
	  text-decoration: none;
	  text-transform: uppercase;
	  font-weight: lighter;
	  line-height: 50px;

	}
	#a:hover{
	  background: #059041;
	  color:#fff;
	}
	.WTF{width:110px;}

#Logo{padding-left: 9%;}

.container{width:400px;
height: 600px;
padding: 40px;
background: rgba(0,0,0,.8);
box-sizing: border-box;
box-shadow: 0 15px 25px rgba(0,0,0,.5);
border-radius:10px;}

.container h3{margin: 0 0 30px;
padding: 0;
color:#fff;
text-align: center;}

#SignUp{background:#059041;} #SignUp:hover{background:#49E038;transition: 0.8s;}

	</style>

  <body>



		<nav id="header">   <img src = "http://localhost/Alexis/images/KinemapFullLogo.png" id="Logo" alt = "Logo" onclick="window.location='http://localhost/Alexis/css/OtherHomeEnglish.html'" style ="width: 280px; height : 50px;" > <ul id="ul">
			<li id="li"><a id="a" href="http://localhost/Alexis/css/OtherHomeEnglish.html" class="active"> Home </a></li>
					<li id="li"><a id="a" href="http://localhost/Alexis/index.php"> Map</a></li>
						<li id="li"><a id="a" href="http://localhost/Alexis/login.php"> Log in | Sign up</a></li>
						<div class="WTF">

						</div>
		</ul>
	</nav>



		<br><br>
    <div class="container">

		<form class="form-signin" method="post" action="registerUser.php">
			<h3> Sign Up</h3> <br>
			<label for="stateno" class="sr-only">First Name</label><br>
			<input type="text" id="stateno" name ="stateno" class="form-control mb-2" placeholder="First Name" required autofocus>
			<label for="fullname" class="sr-only">Family Name</label><br>
			<input type="text" id="fullname" name ="fullname" class="form-control mb-2" placeholder="Family Name" required autofocus>
		<br>
			<br><br>
			<label for="username" class="sr-only">Username</label><br>
			<input type="text" id="username" name ="username" class="form-control mb-2" placeholder="Username" required autofocus>
			<label for="password" class="sr-only">Password</label><br>
			<input type="password" id="password" name ="password" class="form-control" placeholder="Password" required> <br><br><br>
			<button class="btn btn-md btn-primary btn-block" type="submit" id="SignUp" name="submit">Sign up</button>
		</form>

    </div> <!-- /container -->
  </body>
  <script src="js/jquery.min.js" ></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
