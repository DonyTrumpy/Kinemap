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


		<title>Kinemap | Login</title>

		<script src="js/sweetalert.min.js"></script>
		<link rel="stylesheet" href="css/sweetalert.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/styleHome.css">
	</head>
	<style>

	@import url('https://fonts.googleapis.com/css?family=Montserrat');
  @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

	::selection{
	background-color:#49E038;
	color:#fff;
	}


	body {

  background-image: url('http://localhost/Alexis/images/WW10.jpeg');
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
			font-family: Montserrat;
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

	#Logo{margin-left:30px;width:145px; height : 51px;margin-top:25px;}
	 @media screen and (max-width: 1100px) {
		#Logo {
		 padding-left:80px;
		 width:225px;

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





	#WTFF{display:none;height: 40px;width:100%;background:#059041;border-bottom-left-radius:18px;border-bottom-right-radius: 18px;}
	@media screen and (max-width: 1100px) {
	  #WTFF {
	    display: block;
	  }
	  #WTFF a{color:#fff;text-decoration: none;margin-left: 15vw;}
	}


.container{width:400px;
padding: 40px;
background: rgba(0,0,0,.8);
box-sizing: border-box;
box-shadow: 0 15px 25px rgba(0,0,0,.5);
border-radius:10px;}

.container h3{margin: 0 0 30px;
padding: 0;
color:#fff;
text-align: center;}

.form-signin{width: 100%;
padding: 10px;
font-size: 16px;
color: #fff;
letter-spacing:1px;
margin-bottom: 30px;
border: none;
border-bottom: 1px solid #fff;
outline: none;
background: transparent;}

.form-signin label{padding: 10px;
font-size: 16px;
color: #fff;
transition: .5s;}

#Login{background:#059041;} #Login:hover{background:#C1B846;transition: 0.8s;}

#ForgotPassword{
  color: #A4A4A4;
  text-decoration: none;
  font-size:12px;
  font-weight: bold;
}

#ForgotPassword:hover{
  color:#C1B846;
  transition: 0.3s;
}


#SignUp{
	  color: #fff;
	  font-size:12px;
	  font-weight: bold;
		margin-left: 115px;
		position: absolute;
		left:47%;
		top:83%;
	}
	@media screen and (max-width: 1100px) {
		#SignUp {
			top:89%;
		}}
	#SignUp:hover{
	  color:#C1B846;
	  transition: 0.3s;
	}

#role{border-radius: 12px;background:#2E2E2E;}

	</style>

		<body>
	    <nav id="header">   <img src = "http://localhost/Alexis/images/KinemapFullLogo.png" id="Logo" alt = "Logo" onclick="window.location='http://localhost/Alexis/css/OtherHomeEnglish.html'" > <ul id="ul">
	      <li id="li"><a id="a" href="http://localhost/Alexis/OtherHomeDe.html" class="active"> Home </a></li>
	          <li id="li"><a id="a" href="http://localhost/Alexis/index.php">Karte</a></li>
	            <li id="li"><a id="a" href="http://localhost/Alexis/loginDe.php"> Log in | Sign up</a></li>
	            <div class="WTF">

	            </div>
	    </ul>
	  </nav>

		     <div id="WTFF">
		       <a href="http://localhost/Alexis/OtherHomeDe.html">HOME</a>
		       <a href="http://localhost/Alexis/index.php">Karte</a>
		       <a href="http://localhost/Alexis/loginDe.php">LOG IN | SIGN UP</a>
		     </div>



		      <div class="popup" id="popup-1">
		        <div class="overlay"></div>
		        <div class="content">
		          <div class="close-btn" onclick="togglePopup()">&times;</div>
		          <h1>Wähle eine Sprache</h1><br><br>
		          <a id="a" href="http://localhost/Alexis/login.php"> English</a><br><br>
		          <a id="a" href="http://localhost/Alexis/loginFr.php"> Français</a><br><br>
		          <a id="a" href="http://localhost/Alexis/loginNe.php"> Nederlands</a><br><br>
		          <a id="a" href="http://localhost/Alexis/loginDe.php"> Deutsch</a>
		        </div>
		      </div>

		      <button id="PopPop" onclick="togglePopup()">Sprache</button>
		      <script type="text/javascript">
		      function togglePopup(){
		      document.getElementById("popup-1").classList.toggle("active");
		      }
		      </script>












			<br><br><br><br><br><br>
    <div class="container">

		<form class="form-signin" method="post" action="loginproc.php">
			<h3> Login</h3>
			<label for="username" class="sr-only">Nutzername</label>
			<input type="text" id="username" name ="username" class="form-control mb-2" placeholder="Username" required autofocus>
		<br>	<label for="password" class="sr-only">Passwort</label>
			<input type="password" id="password" name ="pass" class="form-control" placeholder="Password" required> <br><br>
			Wählen Sie Ihre Rolle</label>
			<select name ="role" id="role">
				<option value="A">Admin</option>
					<option value="U" selected>Benutzer</option>
			</select>
			<br><br><br><br>
			<button class="btn btn-md btn-primary btn-block" type="submit" name="submit" id="Login">Anmeldung</button>
			<br><br>
			  <a href="#" id="ForgotPassword"> Passwort vergessen? </a>
			<a href="http://localhost/Alexis/css/IWantT.html" id="SignUp">Anmelden</a>
		</form>

    </div> <!-- /container -->
  </body>
  <script src="js/jquery.min.js" ></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <?php
  if(isset($_GET['s'])){
      $s = $_GET['s'];
		switch ($s){
			case 'lot':
				echo  '<script type="text/javascript" language="javascript">
				swal("Success", "Log Out Successfully", "success");</script>';
			break;
			case 'lt':
				echo  '<script type="text/javascript" language="javascript">
				swal("Success", "Login Successful", "success");</script>';
			break;
			case 'lf':
				echo  '<script type="text/javascript" language="javascript">
				swal("Error", "It is possible that your role is different or your Email / Password are incorrect. Please try again.", "error");</script>';
			break;
			case 'fl':
				echo  '<script type="text/javascript" language="javascript">
				swal("Error", "Sorry, you need to log in first", "error");</script>';
			break;
			case 'success':
				echo  '<script type="text/javascript" language="javascript">
				swal("Success", "Registered successfully. Please login using credentials", "success");</script>';
			break;
			default:
		}
    }
    ?>
</html>
