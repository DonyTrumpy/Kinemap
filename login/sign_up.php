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

		<title>Kinemap | Signup</title>

		<script src="../js/sweetalert.min.js"></script>
		<link rel="stylesheet" href="../css/sweetalert.css">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/styleHome.css">
	</head>
	<style>

	::selection{
  background-color:#49E038;
  color:#fff;
  }


  ::-webkit-scrollbar {
    background: #ddd;
    width: 12px;
  }

  ::-webkit-scrollbar-track {
    box-shadow: inset 0 0 10px #00000070;
    border-radius: 10px;
  }

  ::-webkit-scrollbar-thumb {
    background: #3E3A3A;
    border-radius: 10px;
  }









.hovv:hover{color:#fff;}


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
    height:350px;
    z-index:2;
    text-align:center;
    padding:20px;
    box-sizing:border-box;
    font-family:"Open Sans",sans-serif;
  }

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

  #a{color:#000; text-decoration: none;}
  #a:hover{background:#059041;color:#fff;}


#WTFF{display:none;height: 40px;width:100%;background:#059041;border-bottom-left-radius:18px;border-bottom-right-radius: 18px;}
@media screen and (max-width: 920px) {
  #WTFF {
    display: block;
  }
  #WTFF a{color:#fff;text-decoration: none;margin-left: 15vw;}
}


.container1{
  position: relative;
  width:35%;
  margin:20px;
  height:200px;
  background:#059041;
  color:#fff;
  display:flex;
  justify-content: space-between;
  align-items:center;
  border-radius: 12px;
  left: 30%;
  text-decoration: none;
}

.container1:hover{left:29%; box-shadow: 5px 10px #888888; transition:0.3s;}

#h11 {
  color: #fff;
  font-weight:500;


  letter-spacing:2px;
  margin-bottom:150px;
  margin-left:35%;

  border-radius:8px;
}

@media screen and (min-width: 851px) {
#h11 {
    font-size: 24px;
  }
}
@media screen and (max-width: 850px) {
  #h11 {
    font-size: 14px;left:8vw;
  }
}


.container2{
  position: relative;
  width: 35%;
  margin:20px;
  height:200px;
  background:#C28F36;
  color:#fff;
  display:flex;
  justify-content: space-between;
  align-items:center;
  border-radius: 12px;
  left: 30%;
  text-decoration: none;
}
.container2:hover{left:29%; box-shadow: 5px 10px #888888; transition:0.3s;}
#h12 {
  color: #fff;
  font-weight:500;
  font-size:2vw;
  letter-spacing:2px;
  margin-bottom:150px;
  margin-left:35%;

  border-radius:8px;
}

@media screen and (min-width: 851px) {
#h12 {
    font-size: 24px;
  }
}
@media screen and (max-width: 850px) {
  #h12 {
    font-size: 14px;left:8vw;
  }
}


.container3{
  position: relative;
  width:35%;;
  margin:20px;
  height:200px;
  background:#2D754C;
  color:#fff;
  display:flex;
  justify-content: space-between;
  align-items:center;
  border-radius: 12px;
  left: 30%;
  text-decoration: none;
}
.container3:hover{left:29%; box-shadow: 5px 10px #888888; transition:0.3s;}
#h13 {
  color: #fff;
  font-weight:500;
  font-size:2vw;
  letter-spacing:2px;
  margin-bottom:150px;
  margin-left:36%;

  border-radius:8px;
}

@media screen and (min-width: 851px) {
#h13 {
    font-size: 24px;
  }
}
@media screen and (max-width: 850px) {
  #h13 {
    font-size: 14px;left:8vw;
  }
}




.P{position:absolute;top:30%;left:14vw;text-decorations:none;align-items: center;}
@media screen and (min-width: 851px) {
.P {
    font-size: 14px;
  }
}
@media screen and (max-width: 850px) {
  .P {
    font-size: 12px;
    left:8vw;
  }
}


.Price{}

</style>

  <body>



		<nav id="header">   <img src = "../images/KinemapFullLogo.png" id="Logo" alt = "Logo" onclick="window.location='../css/OtherHomeEnglish.html'" style ="width: 280px; height : 50px;" > <ul id="ul">
			<li id="li"><a id="a" href="http://localhost/Alexis/css/OtherHomeEnglish.html" class="active"> Home </a></li>
					<li id="li"><a id="a" href="../"> Map</a></li>
						<li id="li"><a id="a" href="login/login.php"> Log in | Sign up</a></li>
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
