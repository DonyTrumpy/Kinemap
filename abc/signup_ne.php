<?php
	include 'config.php';
?>

<!doctype html>
<html lang="en">
	<head>
		<link rel="icon" href="../images/logo.png">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">

		<title>Kinemap | Signup</title>

		<script src="..js/sweetalert.min.js"></script>
		<link rel="stylesheet" href="sweetalert.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="styleHome.css">
	</head>
	<style>

	::selection{
	background-color:#49E038;
	color:#fff;
	}

		body, html{
		height: 100%;
		width: 100%;
		background-image: url('../images/WW10.jpg');
		no-repeat center center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size:cover;
	}



	#header{
		width: 100%;
		height: 82px;
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
	#header ul li {font-size: 18px;margin-top:25px;
	padding-bottom:15px;

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
		font-family:sans-serif;
	}
	@media screen and (max-width: 1100px) {
		#header ul li a {
		 display: none;
		}
	}



	#a:hover{
		background: #059041;
		color:#fff;
	}
	.WTF{width:260px;}

#Logo{margin-left:70px;width:135px; height : 51px;margin-top:20px;}
 @media screen and (max-width: 1100px) {
	#Logo {
	 padding-left:80px;
	 width:225px;

	}
}

@media screen and (max-width: 450px) {
 #Logo {
	padding-left:0px;
	width:145px;
position: absolute;top:2px;left:-38px;
 }
}

.popup .overlay {
	position:fixed;
	top:0px;
	left:0px;
	width:100vw;
	height:100vh;
	background:rgba(0,0,0,0.7);
	z-index:1;
	display:none;
}

.popup .content {
	position:absolute;
	top:40%;
	left:50%;
	border-radius: 16px;
	transform:translate(-50%,-50%) scale(0);
	background:#fff;
	color:#059041;
	width:500px;
	height:490px;
	z-index:2;
	text-align:center;
	padding:20px;
	box-sizing:border-box;
	font-family:"Open Sans",sans-serif;
}
#a{color:#000;}

.popup .close-btn {
	cursor:pointer;
	position:absolute;
	right:20px;
	top:20px;
	width:30px;
	height:30px;
	background:#222;
	color:#fff;
	font-size:25px;
	font-weight:600;
	line-height:30px;
	text-align:center;
	border-radius:50%;
}

.popup.active .overlay {
	display:block;
}

.popup.active .content {
	transition:all 300ms ease-in-out;
	transform:translate(-50%,-50%) scale(1);
}

@media screen and (max-width: 500px){
.popup.active .content{width:80%;height:87vh;margin-top: 40px;
}}


#PopPop {
	position:absolute;
	top:4.5%;
	left:95%;
	transform:translate(-98%,-5%);
	border:none;
	color:#222;
	font-family: 'Montserrat', sans-serif;
	background:#fff;
	padding:5px 3px;
	font-size: 18px;
	font-weight: 500;
	padding: 8px 15px;
	border-radius: 5px;
	letter-spacing: 1px;

}
#PopPop:hover{background:#059041;color:#fff;}





#WTFF{display:none;height: 40px;width:100%;background:#059041;border-bottom-left-radius:18px;border-bottom-right-radius: 18px;font-family: sans-serif;}
@media screen and (max-width: 1100px) {
	#WTFF {
		display: block;
	}
	#WTFF a{color:#fff;text-decoration: none;margin-left: 15vw;}
}

@media screen and (max-width: 450px) {

	#WTFF a{font-size: 12px;margin-left: 11vw;}
}


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

@media screen and (max-width: 450px) {

.container{width:320px;}
}

#SignUp{background:#059041;} #SignUp:hover{background:#49E038;transition: 0.8s;}

	</style>

  <body>


		<nav id="header">   <img src = "../images/KinemapFullLogooo.png" id="Logo" alt = "Logo" onclick="window.location='../home/home_ne.php'" > <ul id="ul">
			<li id="li"><a id="a" href="../home/home_ne.php" class="active"> Home </a></li>
					<li id="li"><a id="a" href="../map/map_ne.php"> Kaart</a></li>
						<li id="li"><a id="a" href="../login/login_ne.php"> Log in | Inschrijven</a></li>
						<div class="WTF">

						</div>
		</ul>
	</nav>

			 <div id="WTFF">
				 <a href="../home/home_ne.php">HOME</a>
				 <a href="../map/map_ne.php">KAART</a>
				 <a href="../login/login_ne.php">LOG IN | Inschrijven</a>
			 </div>



				<div class="popup" id="popup-1">
					<div class="overlay"></div>
					<div class="content">
						<div class="close-btn" onclick="togglePopup()">&times;</div>
						<h1>Kies een taal</h1><br><br>
            <a id="a" href="../abc/signup.php"> English</a><br><br>
            <a id="a" href="../abc/signup_fr.php"> Français</a><br><br>
            <a id="a" href="../abc/signup_ne.php"> Nederlands</a><br><br>
            <a id="a" href="../abc/signup_de.php"> Deutsch</a>
					</div>
				</div>

				<button id="PopPop" onclick="togglePopup()">Taal</button>
				<script type="text/javascript">
				function togglePopup(){
				document.getElementById("popup-1").classList.toggle("active");
				}
				</script>



		<br><br>
    <div class="container">

		<form class="form-signin" method="post" action="registerUser.php">
			<h3> Sign Up</h3> <br>
			<input type="hidden" name="stateno" value="<?php echo $_GET['plan'] ?>">
			<input type="hidden" name="price" value="<?php echo $_GET['price'] ?>">
			<label for="stateno" class="sr-only">Volle naam</label><br>
			<input type="text" id="stateno" name ="fullname" class="form-control mb-2" placeholder="Volle naam" required autofocus>
			<label for="fullname" class="sr-only">E-mail</label><br>
			<input type="email" id="fullname" name ="emailid" class="form-control mb-2" placeholder="E-Mail" required autofocus>
			<label for="username" class="sr-only">Gebruikersnaam</label><br>
			<input type="text" id="username" name ="username" class="form-control mb-2" placeholder="Gebruikersnaam" required autofocus>
			<label for="password" class="sr-only">Wachtwoord</label><br>
			<input type="password" id="password" name ="password" class="form-control" placeholder="Wachtwoord" required> <br><br><br>
			<button class="btn btn-md btn-primary btn-block" type="submit" id="SignUp" name="submit">Sign up</button>
		</form>

    </div> <!-- /container -->
  </body>
  <script src="../js/jquery.min.js" ></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</html>
