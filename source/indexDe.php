<?php
	include 'config.php';
?>

<!DOCTYPE html>
<html>
   <head>
      <link rel="icon" href="images\logo.png">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">


      <link rel="stylesheet" href="css/styleHome.css">

      <script src="js/jquery.min.js"></script>
      <script src="js/ol.js"></script>
      <script src="https://viglino.github.io/ol-ext/dist/ol-ext.js"></script>
      <script src="js/codeHome.js"></script>
      <title>Kinemap | Map</title>

<style>


  @import url('https://fonts.googleapis.com/css?family=Montserrat');

::selection{
background-color:#49E038;
color:#fff;
}


body{background:#fff; font-size: 14px;}


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
		top:1.6%;
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






.Crack{height:40px;width:100%;background:#059041;display: none;}
.Crock{color: #fff;text-decoration: none;font-family: Montserrat;padding-left: 8vw;padding-right: 7vw;}
@media screen and (max-width: 1100px) {
.Crack {
    display: block;
  }}




button:hover{background:#49E038;}

#Logo{padding-left: 9%;}



input[type=checkbox]:checked+label:before {
	background-color: #49E038;
	transition: 0.3s;
}

.inputApply{background:#CFF2CE;}

.divTableCell{background:none;}
.Blue{background:#059041;
	border-top-right-radius: 0px;
	border-bottom-right-radius: 0px;font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;}
	.Blue:hover{background:#059041;}



		@media screen and (max-width: 1100px) {
		.Column #BlueAdapt {
				display: inline-flex;
			}}




		@media screen and (max-width: 1100px) {
		#liPhone {
			position: absolute;top:95%;left:55%;
			}}
			@media screen and (max-width: 880px) {
			#liPhone {
					position: absolute;top:150%;left:55%;
				}}


			@media screen and (max-width: 1100px) {
			#liEmail {
					position: absolute;top:100%;left:55%;
				}}
				@media screen and (max-width: 880px) {
				#liEmail {
						position: absolute;top:155%;left:55%;
					}}


				@media screen and (max-width: 1100px) {
				#liWebsite {
						position: absolute;top:105%;left:55%;
					}}
					@media screen and (max-width: 880px) {
					#liWebsite {
							position: absolute;top:160%;left:55%;
						}}




					#liAgenda{text-decoration: none;color:#000;padding:10px;background:#C1B846;border-radius: 12px;
					position: absolute;top:76%;}	#liAgenda:hover{background:#D9C043;}



											@media screen and (max-width: 1300px) {
											#liAgenda {
													position: absolute;top:600px;left:83%;
												}}

														@media screen and (max-width: 1100px) {
														#liAgenda {
														position: absolute;top:870px;left:55%;
														}}
														@media screen and (max-width: 880px) {
														#liAgenda {
														position: absolute;top:1270px;left:55%;
														}}


					@media screen and (max-width: 1100px) {
					#liAddress {
							position: absolute;top:110%;left:55%;
						}}
						@media screen and (max-width: 880px) {
						#liAddress {
								position: absolute;top:165%;left:55%;
							}}


						@media screen and (max-width: 1100px) {
						#specialisations {
								position: absolute;top:70%;left:82vw; font-size: 14px;
							}}

							@media screen and (max-width: 880px) {
							#specialisations {
									position: absolute;top:123%;left:82vw;
								}}


	.row .pink {
	    background:#fff;
			font-family: sans-serif;
	}
	.row .pink:hover {
	    background:#fff;
			transition: 2s;
	}

	#Address{border-width: 2px;border-color:#059041; }

	.btnApply:hover {
		background: #1BA717;
		transition: 0.8s;
	}

#FSpecialization{font-size: 18px;
font-weight: bold;}

#FiltersOut:hover {
	background:#1BA717;
	transition: 0.8s;
}
#TName{margin-left: 10px;}
#TPP{border-radius: 12px;margin-left:25px;}
				@media screen and (max-width: 1100px) {
				#TPP {
					position: absolute;left:49vw; height: 50px; width: 55px;
					}}

					@media screen and (max-width: 600px) {
					#TPP {
						position: absolute;left:47%; height: 50px; width: 55px;
						}}



#DescriptionBlock{width:30vw;margin-left:2vw; resize: both; overflow: auto; min-height: 150px;}



@media screen and (max-width: 1100px) {
#KHT {
    position:absolute;
		top:49%;
		left:2vw;
  }}
	@media screen and (max-width: 1100px) {
	#KOT {
		position:absolute;
		top:54%;
		left:2vw;
	  }}

		@media screen and (max-width: 1100px) {
		#KCT {
			position:absolute;
			top:59%;
			left:2vw;
		  }}


.checkers{font-size: 12px;}

#DescriptionBlock{width:90%;}
@media screen and (max-width:1100px) {
#DescriptionBlock {
position: absolute;top: 1080px;width: 43vw;
	}}

@media screen and (max-width:880px) {
#DescriptionBlock {
position: absolute;top: 1480px;width: 43vw;
	}}



	@media screen and (max-width:1100px) {
	.Blue {
		font-size: 12px; height: 812px;
		}#map{height:842px;}}
		@media screen and (max-width:700px) {
		.Blue {
			font-size: 12px; height: 812px;
		}
	}


	@media screen and (max-width:880px) {
	.Wyte {
		height:800px;
		}}
		.ABBA{font-size: 13px;}
		@media screen and (max-width:880px) {
		.ABBA {
			position:absolute;top:190px;left:53%;
			}}
			.Milf{font-size: 13px;}
		@media screen and (max-width:880px) {
		.Milf {
			position:absolute;top:355px;left:53%;
			}}
			.Peri{font-size: 13px;}
			@media screen and (max-width:880px) {
			.Peri {
				position:absolute;top:605px;left:53%;
				}}


			@media screen and (max-width:1100px) {
			.Row {
				font-size: 12px; height:400px;
				}}

				@media screen and (max-width:1100px) {
				.Milf {
					margin-top: 28px;
					}}
					@media screen and (max-width:1100px) {
					.Peri {
						margin-top: 18px;
						}}

						@media screen and (max-width:880px) {
						.Peri {
							margin-top: 0px;
							}}



					@media screen and (max-width:1100px) {
					.Column h3 {
						display: none;
						}}


						@media screen and (max-width:1100px) {
						body {
							height: 1380px;
							}}

.ol-zoom{
	position: absolute;
    top: 5px;
    left: 2px;
}
</style>

   </head>
   <body onload="init()">

		 <nav id="header">   <img src = "http://localhost/Alexis/images/KinemapFullLogo.png" id="Logo" alt = "Logo" onclick="window.location='http://localhost/Alexis/OtherHomeDe.html'" style ="width: 145px; height : 50px;" > <ul id="ul">
 			<li id="li"><a id="a" href="http://localhost/Alexis/OtherHomeDe.html" class="active"> Home </a></li>
 					<li id="li"><a id="a" href="http://localhost/Alexis/indexDe.php">Karte</a></li>
 						<li id="li"><a id="a" href="http://localhost/Alexis/loginDe.php"> Log in | Sign up</a></li>
 						<div class="WTF">

 						</div>
 		</ul>
 	</nav>

<div class="Crack">
	<a class="Crock" href="http://localhost/Alexis/css/OtherHomeEnglish.html">HOME</a>
	<a class="Crock" href="http://localhost/Alexis/index.php">KARTE</a>
	<a class="Crock" href="http://localhost/Alexis/login.php">LOG IN | SIGN UP</a>
</div>

<div class="popup" id="popup-1">
	<div class="overlay"></div>
	<div class="content">
		<div class="close-btn" onclick="togglePopup()">&times;</div>
		<h1>Wähle eine Sprache</h1><br><br>
		<a id="a" href="http://localhost/Alexis/index.php"> English</a><br><br>
		<a id="a" href="http://localhost/Alexis/indexFr.php"> Français</a><br><br>
		<a id="a" href="http://localhost/Alexis/indexNe.php"> Nederlands</a><br><br>
		<a id="a" href="http://localhost/Alexis/indexDe.php"> Deutsch</a>
	</div>
</div>

<button id="PopPop" onclick="togglePopup()">Sprache</button>
<script type="text/javascript">
function togglePopup(){
document.getElementById("popup-1").classList.toggle("active");
}
</script>






		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6">
					<div class="row">
						<div class="col-xs-12 pink">
<div class="Wyte">

							<div class="Row" style="color: black;">
								<div class="Column" style="width:50%;">
								<div class="divTable">
								   <div class="divTableBody">
									  <div class="divTableRow">
										 <div class="divTableCell">
											<h3>Füllen Sie einen oder mehrere der folgenden Filter aus:</h3>
										 </div>
									  </div>
									  <div class="divTableRow">
										 <div class="divTableCell">
											<span class="FCity">Welche Stadt?</span>
										 </div>
									  </div>
									  <div class="divTableRow">
										 <div class="divTableCell"><input type="text" class="inputApply" name="City" id="City" placeholder="&nbsp;Enter city" maxlength="20">&nbsp;&nbsp;<button id="GoCity" class="btnApply">Go</button></div>
										 <div id ="KHT" class="divTableCell">
											<input type="checkbox" id="FHome" name="FHome" value="Home" onchange="getFilteredFeatures();">
											<label for="FHome">&nbsp;Heimtherapie</label>
										 </div>
									  </div>
									  <div class="divTableRow">
										 <div class="divTableCell"><span class="FCity">Welche Adresse?</span></div>
									  </div>
									  <div class="divTableRow">
										 <div class="divTableCell"><input type="Address" class="inputApply" name="Address" id="Address" placeholder="&nbsp;Enter address" maxlength="50">&nbsp;&nbsp;<button id="GoAddress" class="btnApply">Go</button></div>
										 <div id ="KOT" class="divTableCell">
											<input type="checkbox" id="FOnline" name="Online" value="Online" onchange="getFilteredFeatures();">
											<label for="FOnline">&nbsp;Online-Therapie</label>
										 </div>
									  </div>
									  <div class="divTableRow">
										 <div class="divTableCell"><span class="FCity">Was ist sein Name?</span></div>
									  </div>
									  <div class="divTableRow">
											 <div class="divTableCell"><input type="text" class="inputApply" name="Name" id="Name" placeholder="&nbsp;Enter name" maxlength="35">&nbsp;&nbsp;<button id="GoName" class="btnApply">Go</button></div>
										 <div id ="KCT" class="divTableCell">
											<input type="checkbox" id="FConvention" name="FConvention" value="Conventionated" onchange="getFilteredFeatures();">
											<label for="FConvention">&nbsp;Konventionierter Therapeut&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
										 </div>
									  </div>
								   </div>
								</div>
								</div>
								<div class="Column">
									<p id="FSpecialization">Spezialisierung auswählen:</p><div class="ABBA">
									<input type="checkbox" id="1" name="1" value="Aquatherapy" onchange="getFilteredFeatures();">
									<label for="1">&nbsp;Aquatherapie</label>
									<input type="checkbox" id="2" name="2" value="Cardiovascular therapy" onchange="getFilteredFeatures();">
									<label for="2">&nbsp;Herz-Kreislauf-Therapie</label>
									<input type="checkbox" id="3" name="3" value="Dry needling | Acupuncture" onchange="getFilteredFeatures();">
									<label for="3">&nbsp;Dry needling | Akupunktur</label>
									<input type="checkbox" id="4" name="4" value="Electrotherapy" onchange="getFilteredFeatures();">
									<label for="4">&nbsp;Elektrotherapie</label>
									<input type="checkbox" id="5" name="5" value="Gerontology" onchange="getFilteredFeatures();">
									<label for="5">&nbsp;Gerontologie</label>
									<input type="checkbox" id="6" name="6" value="Internal disorders" onchange="getFilteredFeatures();">
									<label for="6">&nbsp;viszerale Therapie</label>
									<input type="checkbox" id="7" name="7" value="Crochetage" onchange="getFilteredFeatures();">
									<label for="7">&nbsp;Crochetage</label>
								</div></div>
								<div id="Milf" class="Column">
<br><br>
<div class="Milf">

									<input type="checkbox" id="8" name="8" value="Lymphatic drainage" onchange="getFilteredFeatures();">
									<label for="8">&nbsp;Lymphdrainage</label>
									<input type="checkbox" id="9" name="9" value="Manual therapy" onchange="getFilteredFeatures();">
									<label for="9">&nbsp;Manuelle Therapie</label>
									<input type="checkbox" id="10" name="10" value="Neurophysician" onchange="getFilteredFeatures();">
									<label for="10">&nbsp;Neurophysiker</label>
									<input type="checkbox" id="11" name="11" value="Oro-facial | Maxillo-facial" onchange="getFilteredFeatures();">
									<label for="11">&nbsp;Oro-facial | Maxillo-facial</label>
									<input type="checkbox" id="12" name="12" value="Osteopathy" onchange="getFilteredFeatures();">
									<label for="12">&nbsp;Osteopathie</label>
									<input type="checkbox" id="13" name="13" value="Pediatry" onchange="getFilteredFeatures();">
									<label for="13">&nbsp;Pädiatrie</label>
									<input type="checkbox" id="14" name="14" value="Pelvical reeducation" onchange="getFilteredFeatures();">
									<label for="14">&nbsp;Beckenerziehung</label>
									<input type="checkbox" id="15" name="15" value="General physical therapy" onchange="getFilteredFeatures();">
									<label for="15">&nbsp;Allgemeine Physiotherapie</label>
								</div>
								</div>
								<div class="Column">
									<button id="FiltersOut" onclick="removeAllFilters();">Filter entfernen</button>
<br><br> <div class="Peri">

									<input type="checkbox" id="16" name="16" value="Perinatal therapy" onchange="getFilteredFeatures();">
									<label for="16">&nbsp;Perinatale Therapie</label>
									<input type="checkbox" id="17" name="17" value="Respiratory therapy" onchange="getFilteredFeatures();">
									<label for="17">&nbsp;Atemtherapie</label>
									<input type="checkbox" id="18" name="18" value="Sports medicine" onchange="getFilteredFeatures();">
									<label for="18")>&nbsp;Sportmedizin</label>
									<input type="checkbox" id="19" name="19" value="Ultrasound | Shockwave" onchange="getFilteredFeatures();">
									<label for="19">&nbsp;Ultrasound | Shockwave</label>
									<input type="checkbox" id="20" name="20" value="Uro-Gynecology" onchange="getFilteredFeatures();">
									<label for="20">&nbsp;Uro-Gynäkologie</label>
									<input type="checkbox" id="21" name="21" value="Vestibular therapy" onchange="getFilteredFeatures();">
									<label for="21">&nbsp;Vestibuläre Therapie</label>
									<input type="checkbox" id="22" name="22" value="Cryotherapy" onchange="getFilteredFeatures();">
									<label for="22">&nbsp;Kryotherapie</label>
									</div>
								</div>
							</div>
						</div>
						</div>
						<div class="col-xs-12 green">
							<div class="containerDivider">
								<div id="map" class="left">
								</div>
								<div class="right">
									<div class="Blue">
										<div class="Row">
											<div class="Column">
												<h3 id="TName">Bitte wählen Sie jemanden aus</h3>
												<div>
												  &nbsp; <img src="images/profile.png" id="TPP" alt="" style="width: 150px; height : 160px;">
												</div>
											</div>
											<div class="Column">
													<h3>Spezialisierungen</h3>
													<div id='specialisations'></div>
											</div>
											<div id="BlueAdapt" class="Column">
												<h3>Kontakt</h3>
												<p id="liPhone">&nbsp;Tel:&nbsp;</p>
												<p id="liEmail">&nbsp;email:&nbsp;</p>
												<p id="liWebsite">&nbsp;website:&nbsp;</p>
												<p id="liAddress">&nbsp;address:&nbsp;</p>
												<a id="liAgenda">Einen Termin machen</a>
											</div>
										</div>
										<br><br><br><br>
										<div class="Row">
											<div class="Column">
												<div class="onoffswitch">
													<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="homeTherapy" disabled>
													<label class="onoffswitch-label" for="homeTherapy">&nbsp;&nbsp;Heimtherapie</label>

												</div>

											</div>

											<div class="Column">
												<div class="onoffswitch">
													<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="onlineTherapy" disabled>
													<label class="onoffswitch-label" for="onlineTherapy">&nbsp;&nbsp;Online-Therapie</label>
												</div>

											</div>
											<div class="Column">
												<div class="onoffswitch">
													<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="conventionTherapy" disabled>
													<label class="onoffswitch-label" for="conventionTherapy">&nbsp;&nbsp;Konventionierter Therapeut</label>
												</div>

											</div>
										</div>
										<br><br><br>
										<div id="DescriptionBlock">Dies ist nur ein Beispiel. Schauen Sie
											sich die Karte an und verwenden Sie die Filter, um den perfekten Therapeuten für Sie zu finden.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
      <div id="footer">&copy; 2020 Kinemap</div>
				<div id="popup" class="ol-popup">
					<a href="#" id="popup-closer" class="ol-popup-closer"></a>
					<div id="popup-content"></div>
				</div>
   </body>
</html>
