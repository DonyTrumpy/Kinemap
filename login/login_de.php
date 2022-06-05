<?php
	 include '../abc/config.php';
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


		<title>Kinemap | Login</title>

		<script src="../js/sweetalert.min.js"></script>
		<link rel="stylesheet" href="../abc/sweetalert.css">
		<link rel="stylesheet" href="../js/bootstrap.min.css">
		<link rel="stylesheet" href="../abc/styleHome.css">
	</head>
	<style>

	@import url('https://fonts.googleapis.com/css?family=Montserrat');
  @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

	::selection{
	background-color:#49E038;
	color:#fff;
	}


	body {

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

	#Logo{margin-left:30px;width:135px; height : 51px;margin-top:25px;}
	 @media screen and (max-width: 1100px) {
		#Logo {
		 padding-left:80px;
		 width:225px;

		}
	}

	@media screen and (max-width: 450px){
	#Logo{padding-left:20px;width:160px;
	}}

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
	.popup.active .content{width:80%;height:90vh;margin-top: 40px;
	}}

	#PopPop {
    position:absolute;
    top:35px;
    left:85%;
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

	@media screen and (max-width: 410px) {
		#PopPop{left:90%;}

	}



	#WTFF{display:none;height: 40px;width:100%;background:#059041;border-bottom-left-radius:18px;border-bottom-right-radius: 18px;font-family: sans-serif;}
	@media screen and (max-width: 1100px) {
	  #WTFF {
	    display: block;
	  }
	  #WTFF a{color:#fff;text-decoration: none;margin-left: 15vw;}
	}

	@media screen and (max-width: 450px) {
		#WTFF{font-size: 14px;}
		#WTFF a{margin-left: 8vw;}
	}

.container{
	position: relative;
	width:400px;
	margin:5vw;
	height:530px;
	background:rgba(0,0,0,.8);
	display:flex;
	justify-content: space-between;
	align-items:center;
	border-radius: 12px;
	left: 30%;
	top:-15%;
padding: 40px;
background: rgba(0,0,0,.8);
box-sizing: border-box;
box-shadow: 0 15px 25px rgba(0,0,0,.5);

font-family: sans-serif;}

@media screen and (max-width: 1000px) {
	.container{left:10%;}}

	@media screen and (max-width: 450px) {
		.container{left:1%;width:300px;}}








.container h3{margin: 0 0 30px;
padding: 0;
color:#fff;
text-align: center;
position: absolute;
top:10%;
left:40%;font-size: 26px;}

.form-signin{width: 100%;
padding: 10px;
font-size: 19px;
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

input, textarea{
  position:relative;
  background:transparent;
  outline:none;
  border:none;
  width: 230px;;
  color:#fff;
  padding-bottom:10px;
  font-size:16px;
  letter-spacing:1px;
  font-weight:300;
  border-bottom:2px solid rgba(255,255,255,0.5);
  font-family: sans-serif;
}

textarea{
  height: 100px;
  width: 10vw;
}

span{
  position: absolute;
  left:0;
  font-size:16px;
  font-weight: 300;
  display: inline-block;
  pointer-events: none;
  letter-spacing: 1px;
  color:rgba(255,255,255,0.5);
  transition: all 0.2s;
}


input:focus~span, textarea:focus~span,
input:valid~span, textarea:valid~span{
transform: translateY(-24px);
color:#C1B846;
font-size:14px;
}


input:focus, textarea:focus,
input:valid, textarea:valid{
  border-bottom-color: #fff;
}


#login{background:#059041;color: #fff;left:27%;top:68%;height:40px;padding-left:68px;
	border-radius: 16px;border: none;padding-right: 68px;}
 #login:hover{background:#C1B846;transition: 0.8s;}



#Title{position: absolute;top:5%;left:33%;}


#ForgotPassword{
  color: #A4A4A4;
  text-decoration: none;
  font-size:12px;
  font-weight: bold;
}

@media screen and (max-width: 450px) {
	#ForgotPassword{font-size: 10px;margin-left: -15px;}}

#ForgotPassword:hover{
  color:#C1B846;
  transition: 0.3s;
}

#Rolee{position:absolute;
left:12%;top:50%;}

@media screen and (max-width: 450px) {
	#Rolee{font-size: 14px;left:22%;}}

#SignUp{
	  color: #fff;
	  font-size:14px;
	  font-weight: bold;
		margin-left: 50px;
	}

	@media screen and (max-width: 450px) {
		#SignUp{font-size: 12px;margin-left: 5px;}}

	#SignUp:hover{
	  color:#C1B846;
	  transition: 0.3s;
	}

#role{border-radius: 12px;background:#2E2E2E;color:#fff;position: absolute;top:274px; left:65%;}
@media screen and (max-width: 450px) {
	#role{top:300px;left:37%;}}

	</style>

		<body>
	    <nav id="header">   <img src = "../images/KinemapFullLogooo.png" id="Logo" alt = "Logo" onclick="window.location='../home/home_de.php'" > <ul id="ul">
	      <li id="li"><a id="a" href="../home/home_de.php" class="active"> Home </a></li>
	          <li id="li"><a id="a" href="../map/map_de.php">Karte</a></li>
	            <li id="li"><a id="a" href="../login/login_de.php"> Log in | Sign up</a></li>
	            <div class="WTF">

	            </div>
	    </ul>
	  </nav>

		     <div id="WTFF">
		       <a href="../home/home_de.php">HOME</a>
		       <a href="../map/map_de.php">KARTE</a>
		       <a href="../login/login_de.php">LOG IN | SIGN UP</a>
		     </div>



		      <div class="popup" id="popup-1">
		        <div class="overlay"></div>
		        <div class="content">
		          <div class="close-btn" onclick="togglePopup()">&times;</div>
		          <h1>Wähle eine Sprache</h1><br><br>
		          <a id="a" href="../login/login.php"> English</a><br><br>
		          <a id="a" href="../login/login_fr.php"> Français</a><br><br>
		          <a id="a" href="../login/login_ne.php"> Nederlands</a><br><br>
		          <a id="a" href="../login/login_de.php"> Deutsch</a>
		        </div>
		      </div>

		      <button id="PopPop" onclick="togglePopup()">Sprache</button>
		      <script type="text/javascript">
		      function togglePopup(){
		      document.getElementById("popup-1").classList.toggle("active");
		      }
		      </script>












			<br><br><br><br><br>
    <div class="container">

		<form class="form-signin" method="post" action="../source/loginproc.php">
			<h3 id="Title">Einloggen</h3><br><br><br>
			<label for="username" class="sr-only"></label>
			<input type="text" id="username" name ="username" class="form-control mb-2" placeholder="Nutzername" required autofocus><br>
		<br>	<label for="password" class="sr-only"></label>
			<input type="password" id="password" name ="pass" class="form-control" placeholder="Passwort" required> <br><br><br><br><br>
			<label id="Rolee">Wählen Sie Ihre Rolle</label>
			<select name ="role" id="role">
				<option value="A">Admin</option>
					<option id="Nutzer" value="U" selected>Nutzer</option>
			</select>

			<button class="btn btn-md btn-primary btn-block" type="submit" name="submit" id="login">Einloggen</button>
			<br><br>
			  <a href="../source/contact_us_de.php" id="ForgotPassword"> Passwort vergessen? </a>
			<a href="../source/select_plans_de.php" id="SignUp">Registrieren</a>
		</form>

    </div> <!-- /container -->
  </body>
  <script src="../js/jquery.min.js" ></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <?php
  if(isset($_GET['s'])){
      $s = $_GET['s'];
		switch ($s){
			case 'lot':
				echo  '<script type="text/javascript" language="javascript">
				swal("Success", "Melden Sie sich erfolgreich ab", "success");</script>';
			break;
			case 'lt':
				echo  '<script type="text/javascript" language="javascript">
				swal("Success", "Anmeldung erfolgreich", "success");</script>';
			break;
			case 'lf':
				echo  '<script type="text/javascript" language="javascript">
				swal("Error", "Möglicherweise ist Ihre Rolle anders oder Ihre E-Mail-Adresse / Ihr Passwort sind falsch. Bitte versuche es erneut.", "error");</script>';
			break;
			case 'fl':
				echo  '<script type="text/javascript" language="javascript">
				swal("Error", "Entschuldigung, Sie müssen sich zuerst anmelden", "error");</script>';
			break;
			case 'success':
				echo  '<script type="text/javascript" language="javascript">
				swal("Success", "Erfolgreich registriert. Bitte melden Sie sich mit Ihren Anmeldeinformationen an.", "success");</script>';
			break;
			default:
		}
    }
    ?>
</html>
