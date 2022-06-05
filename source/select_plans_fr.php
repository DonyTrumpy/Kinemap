<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Kinemap | Sign Up</title>
    <link rel="icon" href="../images/logo.png">
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

  #a{color:#000; text-decoration: none;}
  #a:hover{background:#059041;color:#fff;}



#Logo{margin-left:30px;}

@media screen and (max-width: 850px) {
  #Logo {
    margin-left:0px;
  }
}
@media screen and (max-width: 500px){#Logo{margin-left:-70px;}}


#WTFF{display:none;height: 40px;width:100%;background:#059041;border-bottom-left-radius:18px;border-bottom-right-radius: 18px;}
@media screen and (max-width: 920px) {
  #WTFF {
    display: block;
  }
  #WTFF a{color:#fff;text-decoration: none;margin-left: 15vw;}
}
@media screen and (max-width: 500px){#WTFF a{margin-left: 10vw;}}
@media screen and (max-width: 400px){#WTFF a{font-size: 12px;}}

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
@media screen and (max-width: 650px){.container1{left:10%;height: 230px;width:60%;}}

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

@media screen and (max-width: 650px){#h11{margin-left: 25%;}}

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
@media screen and (max-width: 650px){.container2{left:10%;height: 230px;width:60%;}}

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
@media screen and (max-width: 650px){#h12{margin-left: 25%;}}


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
@media screen and (max-width: 650px){.container3{left:10%;height: 230px;width:60%;}}

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
@media screen and (max-width: 650px){#h13{margin-left: 25%;}}



.P{position:absolute;top:30%;left:14vw;text-decorations:none;align-items: center;}
@media screen and (min-width: 851px) {
.P {
    font-size: 14px;
  }
}
@media screen and (max-width: 1000px) {
  .P {
    font-size: 12px;
    left:8vw;
  }
}


.Price{}

  #Mess{position: absolute;top:90px;left:72vw;}


  #Mes2{position: absolute;top:230px;left:72vw;color:#32cd32;}

  @media screen and (max-width: 1100px) {
  .Mes {font-size: 12px;}}

  @media screen and (max-width: 850px) {
  #Mess{font-size: 8px;top:200px;left:76vw;}
  #Mes2{font-size: 8px;left:76vw;}}

</style>


  </head>

    <body>
      <nav >
           <img src = "../images/KinemapFullLogooo.png" id="Logo" alt = "Logo" onclick="window.location='../home/home_fr.php'"
           style ="width: 135px; height : 50px;" >

           <ul>
     <li><a class="hovv" href="../home/home_fr.php">HOME</a></li>
     <li><a class="hovv" href="../map/map_fr.php">CARTE</a></li>
     <li><a class="hovv" href="../login/login_fr.php">LOG IN | SIGN UP</a></li>

     </ul>

          <div id="WTF">

          </div>

     </nav>


     <div id="WTFF">
       <a href="../home/home_fr.php">HOME</a>
       <a href="../map/map_fr.php">CARTE</a>
       <a href="../login/login_fr.php">LOG IN | SIGN UP</a>
     </div>



      <div class="popup" id="popup-1">
        <div class="overlay"></div>
        <div class="content">
          <div class="close-btn" onclick="togglePopup()">&times;</div>
          <h1>Selectionnez une langue</h1><br><br>
          <a id="a" href="../source/select_plans.php"> English</a><br><br><br>
          <a id="a" href="../source/select_plans_fr.php"> Français</a><br><br><br>
          <a id="a" href="../source/select_plans_ne.php"> Nederlands</a><br><br><br>
          <a id="a" href="../source/select_plans_de.php"> Deutsch</a>
        </div>
      </div>

      <button id="PopPop" onclick="togglePopup()">Langue</button>
      <script type="text/javascript">
      function togglePopup(){
      document.getElementById("popup-1").classList.toggle("active");
      }
      </script>







<a class= "container1" href="../abc/checkout.php?plan=1&price=14.99">
<h1 id="h11">Green Deal</h1> <div class="P"> <p>1 an</p> <p class="Price">14.99€ / an</p>

    <p>Réponse dans les 48h</p> <p>Accès à tous les produits</p>
  </div>
</a>

  <a class= "container2" href="../abc/checkout.php?plan=2&price=24.99">
  <h1 id="h12">Orange Deal</h1>
  <div class="P"> <p>2 ans</p> <p class="Price">24.99€  &nbsp;&nbsp;  ( 12.49€ / an)</p>

      <p>Réponse dans les 48h</p> <p>Accès à tous les produits</p>
    </div>
  </a>
<!-- ../abc/signup.php?plan=3&price=15 -->
    <a class= "container3" href="../abc/checkout.php?plan=3&price=40.99">
    <h1 id="h13">Blue Deal</h1>
    <div class="P">
<p>5 ans</p>
    <p class="Price">40.99€  &nbsp;&nbsp;  ( 8.19€ / an)</p>
      <p>Réponse dans les 48h</p> <p>Accès à tous les produits</p>
      </div>
</a>

<div id="Mess" class="Mes">
<h1>Un petit geste pour</h1>
<h1>sauver notre planète,</h1>
</div>
<div id="Mes2" class="Mes">
  <h1>60% de nos revenus sont</h1>
  <h1>Redistribué vers des projets humanitaires.</h1>
</div>





  </body>
</html>
