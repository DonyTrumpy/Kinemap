<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="icon" href="../images/logo.png">
    <meta charset="utf-8">
    <title>Kinemap | Politique</title>

<style media="screen">

  @import url('https://fonts.googleapis.com/css?family=Montserrat');

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


body{font-family: sans-serif;}
  h1{color:#3A8442;}
  h2{color:#079015;}

  #header{
    width: 100%;
    height: 52px;
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
  	@media screen and (max-width: 450px) {
  	#header {
  	    width:374px;
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


.PLS{font-family:Montserrat;padding-left: 2rem;padding-right: 2rem;}


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
  		top:2.7%;
  		left:95%;
  		transform:translate(-98%,-5%);
  		border:none;
  		color:#222;
  		font-family:sans-serif;
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




  .Crack{height:40px;width:100%;background:#059041;display: none;}
  .Crock{color: #fff;text-decoration: none;font-family: sans-serif;padding-left: 8vw;padding-right: 7vw;}
  @media screen and (max-width: 1100px) {
  .Crack {
      display: block;
    }}
  	@media screen and (max-width: 400px) {
  	.Crock {
  	    font-size: 11px;
  	  }}




  button:hover{background:#49E038;}

  #Logo{padding-left: 9%;width: 145px; height : 50px;}
  @media screen and (max-width: 1100px) {
  #Logo {
      padding-left: 5%;width: 110px; height : 40px;margin-top: 6px;
    }}


</style>



  </head>
  <body>
    <nav id="header">   <img src = "../images/KinemapFullLogo.png" id="Logo" alt = "Logo" onclick="window.location='../'" > <ul id="ul">
     <li class="PLS"  id="li"><a id="a" href="../" class="active"> Home </a></li>
         <li class="PLS" id="li"><a id="a" href="../map/map_en.php"> Map</a></li>
           <li class="PLS" id="li"><a id="a" href="../login/login.php"> Log in | Sign up</a></li>
           <div class="WTF">

           </div>
   </ul>
   </nav>

   <div class="Crack">
   <a class="Crock" href="../">HOME</a>
   <a class="Crock" href="../map/map_en.php">MAP</a>
   <a class="Crock" href="../login/login.php">LOG IN | SIGN UP</a>
   </div>

   <div class="popup" id="popup-1">
   <div class="overlay"></div>
   <div class="content">
   <div class="close-btn" onclick="togglePopup()">&times;</div>
   <h1>Select a language</h1><br><br>
   <a id="a" href="map_en.php"> English</a><br><br>
   <a id="a" href="map_fr.php"> Français</a><br><br>
   <a id="a" href="map_ne.php"> Nederlands</a><br><br>
   <a id="a" href="map_de.php"> Deutsch</a>
   </div>
   </div>

   <button id="PopPop" onclick="togglePopup()">Language</button>
   <script type="text/javascript">
   function togglePopup(){
   document.getElementById("popup-1").classList.toggle("active");
   }
   </script>
<ul>
  	www.kinemap.be est un site internet appartenant à Alexis Ruessmann.
</ul>

<ul>
  	Les présentes conditions générales forment le contrat liant les parties. L’utilisateur est tenu de lire attentivement les Conditions Générales. En cochant la case « j’accepte les conditions générales d’utilisation du site » lorsqu’elles lui sont présentées, l’utilisateur indique en avoir pris entièrement connaissance et en accepter la teneur.
</ul>

<ul>
  Les présentes conditions générales sont susceptibles de recevoir des modifications. Le contenu de ces modifications sera porté à la connaissance de l’utilisateur par email. Dans cette hypothèse, l’utilisateur sera réputé avoir accepté lesdites modifications lors de sa connexion sur le site suivant la communication des modifications.
</ul>

<ul>
	L’utilisateur veille à ce que les informations qu’il fournit, qu’il s’agisse des informations relatives à son identité personnelle ou autres sont réelles et sincères. Il est informé que l’utilisation d’une fausse identité et la diffusion de fausses informations peut donner lieu à des poursuites civiles et/ou pénales.
</ul>

<ul>
  Service de recherche d'un Professionnel de Santé : Dans le cadre de la démocratisation de l'accès aux soins, et parallèlement à ses services payants, Kinemap permet également un référencement d'autres praticiens qui n'ont – quant à eux - pas souscrit aux services de prise de rendez-vous en ligne. Concrètement, Kinemap met à disposition de tous les utilisateurs, gratuitement et aux seules fins d'information, une fiche d'information relative aux praticiens établis dans leur région. La fiche reprend le prénom, le nom, la spécialité, le numéro de téléphone du cabinet, l’adresse mail, le site web et l'adresse. L'utilisateur qui souhaite entrer en contact avec le praticien en question peut ainsi le contacter directement, sans aucune intervention de la plateforme. Le référencement sur le Site est ouvert forme d’abonnement, qui peut être arrêté à tout moment, à l’ensemble des professionnels de santé et des professionnels exerçant dans le domaine de la santé.
</ul>

<ul>
  	Les services proposés par Kinemap permettent aux utilisateurs de trouver un kinésithérapeute en fonction de leurs spécialisations, d’avoir accès aux agendas en ligne des kinésithérapeutes inscrits et de solliciter un rendez-vous dans leur cabinet à des fins médicales (les Services). L’utilisateur est informé que Kinemap n’a en aucun cas vocation à répondre à des urgences médicales, dentaires, chirurgicales ou de tout autre ordre. En cas d’urgence, Kinemap recommande d’appeler les services de garde ou d’urgence ou d’appeler le 101.
</ul>

<ul>
  	L’utilisation de kinemap.be est strictement réservée aux personnes majeures. Les mineurs ne peuvent envoyer de demande de consultation à un kinésithérapeute via kinemap.be et ne pourront déposer une demande de consultation que par l’intermédiaire d’une personne majeure.
</ul>

<ul>
  	Le traitement des informations personnelles est effectué dans le strict respect des dispositions légales et est détaillé dans la politique de confidentialité figurant sur le site kinemap.be.
</ul>

<h2>Paiement</h2>

      <ul>
        	Le paiement désigne une empreinte bancaire par le praticien.Le paiement chez Kinemap est réalisé via Stripe, une solution de paiement sur internet sécurisée et spécialisée pour les professionnels.Le paiement est réalisé par le praticien avant la confirmation de la création d’un compte en ligne.
      </ul>

      <ul>
        	Pour assurer l’utilisation et le bon fonctionnement du paiement, le praticien utilisateur s’engage à compléter ses coordonnées bancaires de façon précise, qui devraient être à jour.Le praticien accepte que Kinemap effectue payement bancaire du montant indiqué sur le site même au moment de l’achat.
      </ul>

      <ul>
        	Les deux Parties s’engagent à respecter la confidentialité des informations confidentielles échangées.
      </ul>


    <p>Kinemap est autorisé à modifier les présentes conditions d’utilisation afin notamment de prendre en compte l’évolution des législations et réglementations. Tout contrat est régi par la version la plus récente des conditions d’utilisation.</p>

        <ul>
          kinemap.be met à la disposition des utilisateurs, dans la limite de ses possibilités, un service de qualité. Kinemap n’est en aucun cas responsable de dysfonctionnements informatiques, d’annulations de rendez-vous par les kinésithérapeutes figurant sur son site, ou de leurs tarifs. Les kinésithérapeutes inscrits sur kinemap.be endossent l’entière responsabilité de la gestion de leur agenda et d’une manière plus générale de l’utilisation des outils proposés par kinemap.be.
        </ul>


        <ul>
          L’utilisateur est informé que les systèmes informatiques comme les systèmes de transmission des communications, les systèmes informatiques assurant l’hébergement du portail internet ou les ordinateurs des kinésithérapteutes peuvent être susceptibles de connaitre des défaillances. Kinemap veille à résoudre dans les meilleurs délais les défaillances informatiques qui pourraient survenir sur son système, Kinemap ne peut en aucun cas être considérée responsable pour les interruptions des Services ou pour toutes défaillances techniques de quelque nature que ce soit. L’utilisateur renonce par les présentes à tout recours contre kinemap.be en raison d’une défaillance technique survenue dans l’utilisation des Services proposés. L’utilisateur ne saurait davantage motiver un refus de paiement ou réclamer une indemnisation à raison d’un dysfonctionnement du système ou d’un équipement informatique.
        </ul>

        <ul>
          Les présentes conditions d’utilisation sont régies par le droit belge. Les conventions auxquelles s'appliquent les présentes conditions générales seront soumises aux tribunaux de l’arrondissement judiciaire de Bruxelles ou de l’utilisateur, au choix de Kinemap.
        </ul>

        <ul>
          La nullité d’une clause des présentes conditions générales, pour quelque raison que ce soit, est sans effet sur les autres clauses des présentes.
        </ul>

        <ul>
          Pour toutes questions : Kinemap peut être contacté par mail à l’adresse suivante info@kinemap.be.
        </ul>

 </body>
</html>
