<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" content="width=device-width, initial-scale=1">
    <title>Kinemap | Sign Up</title>
    <link rel="icon" href="http://localhost/Alexis/images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>

<style>

  @import url('https://fonts.googleapis.com/css?family=Montserrat');
  @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

  body {
    font-family: 'Montserrat', sans-serif;
    background-color: #fff;
    color: #C1B846;
  }


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

  nav{
    display: flex;
    height: 70px;
    width: 90%;
    background: #fff;
    align-items: center;
    justify-content: space-between;
    padding: 0 50px 0 100px;
    flex-wrap: wrap;
    border-bottom: 2px solid rgba(255,255, 255, 0.2);
    border-top: 2px solid rgba(255,255, 255, 0.2);
    position: sticky;
    top: 0;
    border-bottom-color:#059041;
  }
  @media screen and (min-width: 851px) {
  nav {
      width:88.2%;
    }
  }
  @media screen and (max-width: 850px) {
    nav {
      width:68.2%;
    }
  }

  nav ul{
    display: flex;
    flex-wrap: wrap;
    list-style: none;
  }
  nav ul li{
    padding-top:15px;
    padding-bottom:15px;
    margin-left: 3vw;
  }
  nav ul li a{
    color: #000;
    text-decoration: none;
    font-size: 18px;
    font-weight: 500;
    padding: 8px 15px;
    border-radius: 5px;
    letter-spacing: 1px;
  }

  nav ul li:hover{
    background: #059041;
  }
  nav .menu-btn i{
    color: #fff;
    font-size: 22px;
    cursor: pointer;
    display: none;
  }


  @media (max-width: 920px) {
    nav .menu-btn i{
      display: block;
    }

    nav ul{
      position: fixed;
      top: 80px;
      left: -300%;
      background: #111;
      height: 100vh;
      width: 100%;
      text-align: center;
      display: block;
      transition: all 0.3s ease;
    }

    nav ul li a:hover{
      background: none;
    }
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





#Logo{margin-left:30px;}

@media screen and (max-width: 850px) {
  #Logo {
    margin-left:0px;
  }
}

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
}

.container1:hover{left:29%; box-shadow: 5px 10px #888888; transition:0.3s;}

#h11 {
  color: #fff;
  font-weight:500;


  letter-spacing:2px;
  margin-bottom:150px;
  margin-left:30%;

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
}
.container2:hover{left:29%; box-shadow: 5px 10px #888888; transition:0.3s;}
#h12 {
  color: #fff;
  font-weight:500;
  font-size:2vw;
  letter-spacing:2px;
  margin-bottom:150px;
  margin-left:30%;

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
}
.container3:hover{left:29%; box-shadow: 5px 10px #888888; transition:0.3s;}
#h13 {
  color: #fff;
  font-weight:500;
  font-size:2vw;
  letter-spacing:2px;
  margin-bottom:150px;
  margin-left:30%;

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


  </head>

    <body>
      <nav >
           <img src = "http://localhost/Alexis/images/KinemapFullLogo.png" id="Logo" alt = "Logo" onclick="window.location='http://localhost/Alexis/css/OtherHomeEnglish.html'"
           style ="width: 142px; height : 50px;" >

           <ul>
     <li><a class="hovv" href="http://localhost/Alexis/css/OtherHomeEnglish.html">HOME</a></li>
     <li><a class="hovv" href="http://localhost/Alexis/index.php">MAP</a></li>
     <li><a class="hovv" href="http://localhost/Alexis/login.php">LOG IN | SIGN UP</a></li>

     </ul>

          <div id="WTF">

          </div>

     </nav>


     <div id="WTFF">
       <a href="http://localhost/Alexis/css/OtherHomeEnglish.html">HOME</a>
       <a href="http://localhost/Alexis/index.php">MAP</a>
       <a href="http://localhost/Alexis/login.php">LOG IN | SIGN UP</a>
     </div>



      <div class="popup" id="popup-1">
        <div class="overlay"></div>
        <div class="content">
          <div class="close-btn" onclick="togglePopup()">&times;</div>
          <h1>Select a language</h1><br><br>
          <a id="a" href="http://localhost/Alexis/css/OtherHomeEnglish.html"> English</a><br><br>
          <a id="a" href="http://localhost/Alexis/OtherHomeFr.html"> Français</a><br><br>
          <a id="a" href="http://localhost/Alexis/OtherHomeNe.html"> Nederlands</a><br><br>
          <a id="a" href="http://localhost/Alexis/OtherHomeDe.html"> Deutsch</a>
        </div>
      </div>

      <button id="PopPop" onclick="togglePopup()">Language</button>
      <script type="text/javascript">
      function togglePopup(){
      document.getElementById("popup-1").classList.toggle("active");
      }
      </script>







<div class= "container1">
<h1 id="h11">One year plan</h1> <div class="P"><p class="Price">25.00€ / year</p>

    <p>48h Response</p> <p>Access to the map</p>
  </div>
  </div>

  <div class= "container2">
  <h1 id="h12">Two years plan</h1>
  <div class="P"><p class="Price">23.00€ / year</p>

      <p>48h Response</p> <p>Access to the map</p>
    </div>
    </div>

    <div class= "container3">
    <h1 id="h13">Five years plan</h1>
    <div class="P">

    <p class="Price">20.00€ / year</p>
      <p>48h Response</p> <p>Access to the map</p>
      </div>
</div>





  </body>
</html>
