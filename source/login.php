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





	#WTFF{display:none;height: 40px;width:100%;background:#059041;border-bottom-left-radius:18px;border-bottom-right-radius: 18px;font-family: sans-serif;}
	@media screen and (max-width: 1100px) {
	  #WTFF {
	    display: block;
	  }
	  #WTFF a{color:#fff;text-decoration: none;margin-left: 15vw;}
	}


.container{
	position: relative;
	width:400px;;
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
}
@media screen and (max-width: 400px) {
	.container{left:3%;}}
}






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



#Title{position: absolute;top:5%;left:40%;}


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

#Rolee{position:absolute;
left:15%;top:50%;}

#SignUp{
	  color: #fff;
	  font-size:12px;
	  font-weight: bold;
		margin-left: 115px;
	}
	#SignUp:hover{
	  color:#C1B846;
	  transition: 0.3s;
	}

#role{border-radius: 12px;background:#2E2E2E;color:#fff;position: absolute;top:52%; left:57%;}

	</style>

		<body>
	    <nav id="header">   <img src = "../images/KinemapFullLogo.png" id="Logo" alt = "Logo" onclick="window.location='../'" > <ul id="ul">
	      <li id="li"><a id="a" href="../home/home_en.php" class="active"> Home </a></li>
	          <li id="li"><a id="a" href="../map/map_en.php"> Map</a></li>
	            <li id="li"><a id="a" href="../login/login.php"> Log in | Sign up</a></li>
	            <div class="WTF">

	            </div>
	    </ul>
	  </nav>

		     <div id="WTFF">
		       <a href="../home/home_en.php">HOME</a>
		       <a href="../map/map_en.php">MAP</a>
		       <a href="../login/login.php">LOG IN | SIGN UP</a>
		     </div>



		      <div class="popup" id="popup-1">
		        <div class="overlay"></div>
		        <div class="content">
		          <div class="close-btn" onclick="togglePopup()">&times;</div>
		          <h1>Select a language</h1><br><br>
		          <a id="a" href="../login/login.php"> English</a><br><br>
		          <a id="a" href="../login/login_fr.php"> Français</a><br><br>
		          <a id="a" href="../login/login_ne.php"> Nederlands</a><br><br>
		          <a id="a" href="../login/login_de.php"> Deutsch</a>
		        </div>
		      </div>

		      <button id="PopPop" onclick="togglePopup()">Language</button>
		      <script type="text/javascript">
		      function togglePopup(){
		      document.getElementById("popup-1").classList.toggle("active");
		      }
		      </script>












			<br><br><br><br><br><br>
    <div class="container">

		<form class="form-signin" method="post" action="../source/loginproc.php">
			<h3 id="Title"> Login</h3><br><br><br>
			<label for="username" class="sr-only"></label>
			<input type="text" id="username" name ="username" class="form-control mb-2" placeholder="Username" required autofocus><br>
		<br>	<label for="password" class="sr-only"></label>
			<input type="password" id="password" name ="pass" class="form-control" placeholder="Password" required> <br><br><br><br><br>
			<label id="Rolee">Select Your Role</label>
			<select name ="role" id="role">
				<option value="A">Admin</option>
					<option value="U" selected>User</option>
			</select>

			<button class="btn btn-md btn-primary btn-block" type="submit" name="submit" id="login">Login</button>
			<br><br>
			  <a href="../source/contact_us.php" id="ForgotPassword"> Forgot password? </a>
			<a href="../source/select_plans.php" id="SignUp">Sign up</a>
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
