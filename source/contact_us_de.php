<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <title>Kinemap | Contact</title>
        <link rel="icon" href="../images/logo.png">

        <style>
            @import url('https://fonts.googleapis.com/css?family=Montserrat');

            body {
                font-family: 'Montserrat', sans-serif;
                background-color: #fff;
                color: #C1B846;
                background-position:center;
                background-repeat:no-repeat;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }

            .container{
                position: relative;
                width:80%;
                margin:5vw;
                height:600px;
                background:rgba(0,0,0,.8);
                display:flex;
                justify-content: space-between;
                align-items:center;
                border-radius: 12px;
                left: 5vw;
            }

            .FormBox{
                margin:0;
                padding:0;
                font-family:sans-serif;
                box-sizing: border-box;
                width:50%;
                display:flex;
                justify-content:center;
                align-items:center;
            }

            form {
                position:relative;
                width: 100%;
                padding: 0 0 0 75px;
            }

            #h2 {
                color: #fff;
                font-weight:500;
                font-size:2em;
                text-transform:uppercase;
                letter-spacing:2px;
                margin-bottom:40px;
            }

            .InputBox{
                position:relative;
                margin-bottom:40px;
            }

            #Submit{
                margin-bottom:0px;
            }

            input, textarea{
                position:relative;
                background:transparent;
                outline:none;
                border:none;
                width: 30vw;
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
                width: 40vw;
            }

            #submittt{
                background:#fff;
                padding:8px 20px;
                margin-top: -10px;
                width:130px;
                cursor:pointer;
                background:#059041;
                color:#fff;
                font-size:18px;
                font-weight:400;
                border:none;
                text-transform: uppercase;
                letter-spacing: 4px;
                border-radius: 15px;
            }

            #submittt:hover{
                background: #14881E;
                transition: 0.8s;
            }

            @media screen and (max-width: 600px){#submittt{margin-top: 10px;}}

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
            @media screen and (max-width: 1100px) {
            #header {
                position: static;
              }}



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
              padding: 0 1px;
            	padding-left: 1.5px;
              text-decoration: none;
              text-transform: uppercase;
              font-weight: lighter;
            	font-size: 14px;
              line-height: 50px;
            font-family: Montserrat;
            }
            #a:hover{
              background: #059041;
              color:#fff;
            }
            .WTF{width:110px;}

            @media screen and (max-width: 1100px) {
            #header li {
                display: none;
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
            		height:450px;
            		z-index:2;
            		text-align:center;

            		box-sizing:border-box;
            		font-family:"Open Sans",sans-serif;
            	}

            	@media screen and (max-width: 1100px) {
            	.popup .content {
            	    width:300px;height:420px;
            	  }}
            		@media screen and (max-width: 1100px) {
            		.popup .content h1 {
            				font-size: 18px;margin-top:30px;
            			}}


            	#a{color:#000;text-decoration: none;}

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
            	.popup.content a{color:#000;}

            	.popup.active .overlay {
            		display:block;
            	}

            	.popup.active .content {
            		transition:all 300ms ease-in-out;
            		transform:translate(-50%,-50%) scale(1);
            	}

            	#PopPop {
            		position:absolute;
            		top:22px;
            		left:95%;
            		transform:translate(-98%,-5%);
            		border:none;
            		color:#222;
            		font-family: 'Montserrat', sans-serif;
            		background:#fff;
            		padding:5px 3px;
            		font-size: 14px;
            		font-weight: 500;
            		padding: 8px 15px;
            		border-radius: 5px;
            		letter-spacing: 1px;

            	}
            	#PopPop:hover{background:#059041;color:#fff;}

            	@media screen and (max-width: 400px) {
            	#PopPop {
            	    margin-top: 8px;
            	  }}




            .Crack{height:40px;width:100%;background:#059041;display: none;border-bottom-right-radius:32px;border-bottom-left-radius:32px;}
            .Crock{color: #fff;text-decoration: none;font-family: Montserrat;padding-left: 8vw;padding-right: 7vw;margin-left: 2vw;}
            @media screen and (max-width: 1100px) {
            .Crack {
                display: block;
              }}
            	@media screen and (max-width: 520px) {
            	.Crock {
            	    font-size: 11px;
            	  }}
                @media screen and (max-width: 380px) {
              	.Crock {
              	    margin-left: -2vw;
              	  }}

                #Logo{padding-left: 9%;width: 135px; height : 50px;}
                @media screen and (max-width: 1100px) {
                #Logo {
                    padding-left: 5%;width: 115px; height : 40px;margin-top: 6px;
                  }}

                @media screen and (max-width: 450px) {
                #Logo {
                    padding-left: 5%;width: 120px; height : 40px;margin-top: 6px;
                  }}

                  .aa{position: absolute;left:55%;}
              		.ab{position: absolute;left:63%;}
              		.ac{position: absolute;left:71%;}



          #success{position: absolute;top:48%;left:60vw;}
          #failed{position: absolute;top:48%;left:60vw;}
        </style>
    </head>
    <body background = "../images/WW11.jpg">
      <nav id="header">   <img src = "../images/KinemapFullLogooo.png" id="Logo" alt = "Logo" onclick="window.location='../home/home_de.php'" > <ul id="ul">
       <li id="li"><a id="a" href="../home/home_de.php" class="aa"> Home </a></li>
           <li id="li"><a id="a" href="../map/map_de.php" class="ab">Karte</a></li>
             <li id="li"><a id="a" href="../login/login_de.php" class="ac"> Log in | Sign up</a></li>
             <div class="WTF">

             </div>
     </ul>
   </nav>

  <div class="Crack">
   <a class="Crock" href="../home/home_de.php">HOME</a>
   <a class="Crock" href="../map/map_de.php">KARTE</a>
   <a class="Crock" href="../login/login_de.php">LOG IN | SIGN UP</a>
  </div>

  <div class="popup" id="popup-1">
   <div class="overlay"></div>
   <div class="content">
     <div class="close-btn" onclick="togglePopup()">&times;</div>
     <br><br><br>
     <h1>Wähle eine Sprache</h1><br><br>
     <a id="a" href="../source/contact_us.php"> English</a><br><br><br><br>
    <a id="a" href="../source/contact_us_fr.php"> Français</a><br><br><br><br>
    <a id="a" href="../source/contact_us_ne.php"> Nederlands</a><br><br><br><br>
    <a id="a" href="../source/contact_us_de.php"> Deutsch</a>
   </div>
  </div>

  <button id="PopPop" onclick="togglePopup()">Sprache</button>
  <script type="text/javascript">
  function togglePopup(){
  document.getElementById("popup-1").classList.toggle("active");
  }
  </script>




        <div class= "container">
            <div class="FormBox">
                <form method="post">
                    <h2 id="h2">KONTAKTIERE UNS</h2>
                    <div class="InputBox">
                        <input type="text" name="name" required="required">
                        <span>Name</span>
                    </div>
                    <div class="InputBox">
                        <input type="email" name="email" required="required">
                        <span>E-Mail-Addresse</span>
                    </div>
                    <div class="InputBox">
                        <textarea name="message" required="required"></textarea>
                        <span>Geben Sie Ihre Nachricht ein</span>
                    </div>
                    <div class="InputBox" id="Submit">
                        <input type="submit" id="submittt" value="Senden">
                    </div>
                </form>
            </div>
              </div>


    </body>
</html>
<?php
    if(!empty($_POST))
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        $subject = "Contact";
        $toEmail = "info@kinemap.be";

        $mailHeaders = "From: " . $name . "<". $email .">\r\n";

        if (mail($toEmail, $subject, $message, $mailHeaders)) {
            echo "<alert id='success'> Vielen Dank für Ihre Nachricht. <br> <br> Wir werden uns so schnell wie möglich <br><br> bei Ihnen melden! </alert>";
        }
	else {
            echo "<alert id='failed'> Nachricht konnte nicht gesendet werden, <br> <br> versuchen Sie es erneut oder machen Sie sich keine Sorgen <br> <br> wir arbeiten daran! </alert>";
        }
    }
?>

<!-- info@kinemap.be -->
<script type="text/javascript">
    function togglePopup(){
        document.getElementById("popup-1").classList.toggle("active");
    }
</script>
