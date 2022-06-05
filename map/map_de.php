<?php
	include '../abc/config.php';
?>

<!DOCTYPE html>
<html>
   <head>
      <link rel="icon" href="../images/logo.png">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="description" content="Alle Kinés Ihrer Region zusammen auf unserer Karte">


      <link rel="stylesheet" href="../abc/styleHome.css">

      <script src="../js/jquery.js"></script>
      <script src="../js/ol.js"></script>
      <script src="../js/ol-ext.js"></script>
      <script src="../js/umair.js?v=<?=time();?>"></script>
      <title>Kinemap | Karte mit unseren Kinés</title>

<style>

  @import url('https://fonts.googleapis.com/css?family=Montserrat');

::selection{
background-color:#49E038;
color:#fff;
}


body{background:#fff; font-size: 14px;  overflow-x: hidden;}



#header{
  width: 100%;
  height: 52px;
  background: #fff;
  border-bottom: 2px solid rgba(255,255, 255, 0.2);
  border-top: 2px solid rgba(255,255, 255, 0.2);
  position: sticky;
  top: 0;
  border-bottom-color:#059041;z-index: 5;
}
@media screen and (max-width: 1100px) {
#header {
    position: static;
  }}
	@media screen and (max-width: 500px) {
	#header {
	    width:100%;
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
		top:12px;
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
		letter-spacing: 1px;z-index: 5;

	}
	#PopPop:hover{background:#059041;color:#fff;}

	@media screen and (max-width: 500px) {
	#PopPop {
	    margin-top: 2px;left:85%;
	  }}




.Crack{height:40px;width:100%;background:#059041;display: none;}
.Crock{color: #fff;text-decoration: none;font-family: Montserrat;padding-left: 8vw;padding-right: 7vw;}
@media screen and (max-width: 1100px) {
.Crack {
    display: block;
  }}
	@media screen and (max-width: 500px) {
	.Crock {
	    font-size: 11px;padding-left:6vw;
	  }.Crack{width:100%;}}



		button:hover{background:#49E038;}

		#Logo{padding-left: 4%;width: 115px; height : 50px;}


		.activia1{position: absolute;top: 5%; left:40%;}
		.activia2{position: absolute;top: 5%; left:53%;}
		.activia3{position: absolute;top: 5%; left:66%;}


		input[type=checkbox]:checked+label:before {
			background-color: #49E038;
			transition: 0.3s;
		}

		.inputApply{background:#CFF2CE;}

		.divTableCell{background:none;}
		.Blue{background:#059041;
			border-top-right-radius: 0px;
			border-bottom-right-radius: 0px;font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;height:900px;}
			.Blue:hover{background:#059041;}

			#map{height:900px;}



				@media screen and (max-width: 1100px) {
				.Column #BlueAdapt {
						display: inline-flex;
					}}



.Messazzz{visibility:hidden;}
@media screen and (max-width: 500px) {
	.Messazzz{visibility: visible;position: fixed; top: 90px;}
	.Messazzz{height: 90px; width:100%;background:#32754F; }
	.Messazzz p {margin-left:14px;margin-top:4px;font-size: 14px;font-family: "Gill Sans", sans-serif;color:#fff;}
	#messazzzz a{text-decoration: none;color: #fff;}

}


		@media screen and (max-width: 1100px) {
		#liPhone {
			position: absolute;top:580px;left:83%;
			}}
			@media screen and (max-width: 880px) {
			#liPhone {
					position: absolute;top:1160px;left:57%;
				}}
				@media screen and (max-width:500px) {
				#liPhone{
				left:5%;top:28%;
					}}



			@media screen and (max-width: 1100px) {
			#liEmail {
					position: absolute;top:610px;left:83%;
				}}
				@media screen and (max-width: 880px) {
				#liEmail {
						position: absolute;top:1200px;left:57%;
					}}
					@media screen and (max-width:500px) {
					#liEmail{
					left:5%;top:33%;
						}}



				@media screen and (max-width: 1100px) {
				#liWebsite {
						position: absolute;top:640px;left:83%;
					}}
					@media screen and (max-width: 880px) {
					#liWebsite {
							position: absolute;top:1240px;left:57%;
						}}
						@media screen and (max-width:500px) {
						#liWebsite{
						left:5%;top:38%;
							}}


											@media screen and (max-width: 1100px) {
											#headingContact {
													position: absolute;top:537px;left:83%;
												}}
												@media screen and (max-width: 880px) {
												#headingContact {
														position: absolute;top:1130px;left:57%;
													}}
													@media screen and (max-width:500px) {
													#headingContact{
													left:5%;top:25%;
														}}





					#liAgenda{text-decoration: none;color:#000;padding:10px;background:#C1B846;border-radius: 12px;
					position: absolute;top:635px;}	#liAgenda:hover{background:#D9C043;}



											@media screen and (max-width: 1300px) {
											#liAgenda {
													position: absolute;top:635px;left:83%;
												}}

														@media screen and (max-width: 1100px) {
														#liAgenda {
														position: absolute;top:735px;
														}}
														@media screen and (max-width: 880px) {
														#liAgenda {
														position: absolute;top:1350px;left:57%;
														}}
														@media screen and (max-width:500px) {
														#liAgenda{
														left:5%;top:49%;
															}}



					@media screen and (max-width: 1100px) {
					#liAddress {
							position: absolute;top:670px;left:83%;
						}}
						@media screen and (max-width: 880px) {
						#liAddress {
								position: absolute;top:1280px;left:57%;
							}}
							@media screen and (max-width:500px) {
							#liAddress{
							left:5%;top:43%;
								}}






							@media screen and (max-width: 880px) {
							.LastBlocks {
							position: absolute;top:1400px;left:50%;
							}}


						@media screen and (max-width: 1100px) {
						#specialisations {
								/* position: absolute;top:70%;left:82vw;  */
								font-size: 14px;
							}}

							@media screen and (max-width: 1000px) {
							#specialisations {
									font-size: 12px;
								}}

							@media screen and (max-width: 880px) {
							#specialisations {
									position: absolute;top:950px;left:82vw;font-size: 11px;
								}
							#SpeciTitle{position: absolute;top:900px;left:82vw;}}


							@media screen and (max-width: 500px) {
							#specialisations {
									position: absolute;top:50px;left:82vw;font-size: 11px;
								}
							#SpeciTitle{position: absolute;top:5px;left:54vw;}}


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
#TName{margin-left: 17px;}
#TPP{border-radius: 12px;margin-left:25px;}
				@media screen and (max-width: 1100px) {
					/* #TName{position: absolute;top:700px;left:49vw;} */
				#TPP {
					position: absolute;left:49vw; height: 50px; width: 55px;
					}}

					@media screen and (max-width: 600px) {
					#TPP {
						position: absolute;left:47%; height: 50px; width: 55px;
						}}
						@media screen and (max-width: 500px) {

						#TPP {
							position: absolute;left:0%; top:7%; height: 40px; width: 42px;
							}}


#DescriptionBlock{width:30vw;margin-left:2vw; resize: both; overflow: auto; min-height: 150px;}



@media screen and (max-width: 880px) {
#KHT {
    position:absolute;
		top:400px;
		left:2vw;
  }}
	@media screen and (max-width: 500px) {
	#KHT {
		position:absolute;
		top:-140px;
		}}




	@media screen and (max-width: 880px) {
	#KOT {
		position:absolute;
		top:500px;
		left:2vw;
	  }}
		@media screen and (max-width: 500px) {
		#KOT {
			position:absolute;
			top:-80px;
			}}


		@media screen and (max-width: 880px) {
		#KCT {
			position:absolute;
			top:600px;
			left:2vw;
		  }}
			@media screen and (max-width: 500px) {
			#KCT {
				position:absolute;
				top:-20px;
				}}



.checkers{font-size: 12px;}

#DescriptionBlock{width:90%;}
@media screen and (max-width:1100px) {
#DescriptionBlock {
position: absolute;top: 1120px;width: 43vw;
	}}

@media screen and (max-width:880px) {
#DescriptionBlock {
position: absolute;top: 1600px;width: 43vw;
	}}

	@media screen and (max-width:500px) {
	#DescriptionBlock {
	position: absolute;top: 700px;left: 20px;width:270px;
		}}




	@media screen and (max-width:1100px) {
	.Blue {
		font-size: 12px; height: 950px;
		}
		/* .Blue h3{background-color: #000;position:absolute;top:500px;left:49vw; */
		}
		#map{height:950px;}}

		@media screen and (max-width:700px) {
		.Blue {
			font-size: 12px; height: 1100px;
		}
	}
	@media screen and (max-width:500px) {
	.Blue {
		position: absolute;top:500px;width:100%;height: 1000px;
		}}



	@media screen and (max-width:880px) {
	.Wyte {
		height:800px;
		}}
		.ABBA{font-size: 13px;}
		@media screen and (max-width:880px) {
		.ABBA {
			position:absolute;top:190px;left:53%;
			}
			#FSpecialization {
			position: absolute;top:130px;
			}
		#FiltersOut{position: absolute;top:110px;}}
			.Milf{font-size: 13px;}
		@media screen and (max-width:880px) {
		.Milf {
			position:absolute;top:385px;left:53%;
			}}
			.Peri{font-size: 13px;}
			@media screen and (max-width:880px) {
			.Peri {
				position:absolute;top:660px;left:53%;
				}}


			@media screen and (max-width:1100px) {
			.Row {
				font-size: 12px; height:400px;
				}}

							@media screen and (max-width:880px) {
							.Row {
								font-size: 12px; height:500px;
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
							margin-top: 0px;}
							.Milf {
								margin-top: 55px;
								}
							}




								@media screen and (max-width: 500px) {
								.divTable {
								    position: absolute;top: 25%;
										left:5%;
								  }}
									@media screen and (max-width: 500px) {
									.Wyte {
									    height:1500px;width:100%;position: absolute;top:1517px;background-color: #fff;
									  }}
										@media screen and (max-width: 500px) {
										.ABBA {
											position: absolute;top:37%;
											left:5%;
										  }}
											@media screen and (max-width: 500px) {
											.Milf {
												position: absolute;top: 50%;
												left:5%;
												}}

											@media screen and (max-width: 500px) {
											.Peri {
												position: absolute;top:68.5%;
												left:5%;
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


#FiltersOuttt{display: none;}
	@media screen and (max-width:500px) {
	#FSpecialization {
		position: absolute;left:5%;top:30%;
		}}
		@media screen and (max-width:500px) {
		#FiltersOut {
			position: absolute;left:60%;top:20px;font-size: 9px;
			}}
	@media screen and (max-width:500px) {
			#map {
				position: absolute;left:0%;top:97px;height:500px;width:100%;
				}}
				@media screen and (max-width:500px) {
				.LastBlocks {
				position: absolute;top: 64%;left:5%;
					}

				#City{position: absolute;top:-300px;}
				#FC{position: absolute;top:-320px;}
				#GoCity{position: absolute;top:-300px;left: 50%;}
				#Address{position: absolute;top:-250px;}
				#FA{position: absolute;top:-270px;}
				#GoAddress{position: absolute;top:-250px;left:50%;}
				#Name{position: absolute;top:-200px;}
				#FN{position: absolute;top:-220px;}
				#GoName{position: absolute;top:-200px;left:50%;}}

.onoffswitch{padding-left: 4vw;}
@media screen and (max-width:600px) {
#OT{font-size: 10px;}
#CT{font-size: 10px;}
#HT{font-size: 10px;}
}

@media screen and (max-width:500px) {#specialisations {
		left:56vw;font-size: 11px;

	}}

	@media screen and (max-width:500px){
	#FiltersOuttt{display: contents;font-size: 14px;color:#1BA717;padding-left:12px ;padding-right:12px;}
	#FiltersOuttt:hover {
		background:#1BA717;
		transition: 0.8s;
	}
#vul{visibility: hidden;}}}

#TakeALook{display: none;text-decoration:none;font-family: sans-serif;color:#1BA717;}
	@media screen and (max-width:880px){
		#TakeALook{display: contents;}
	}



</style>

   </head>
   <body onload="init()">

		 <nav id="header">   <img src = "../images/KinemapFullLogooo.png" id="Logo" alt = "Logo" onclick="window.location='../home/home_fr.php'">
 			<li id="li"><a id="a" href="../home/home_fr.php" class="activia1"> Home </a></li>
 					<li id="li"><a id="a" href="map_fr.php" class="activia2"> Karte</a></li>
 						<li id="li"><a id="a" href="../login/login_fr.php" class="activia3"> Log in | Sign up</a></li>
 						<div class="WTF">

 						</div>
 		</ul>
 	</nav>

<div class="Crack">
	<a class="Crock" href="../home/home_de.php">HOME</a>
	<a class="Crock" href="../map/map_en.php">KARTE</a>
	<a class="Crock" href="../login/login_de.php">LOG IN | SIGN UP</a>
</div>

<div class="popup" id="popup-1">
	<div class="content">
		<div class="close-btn" onclick="togglePopup()">&times;</div>
		<h1>Wähle eine Sprache</h1><br><br>
		<a id="a" href="map_en.php"> English</a><br><br>
		<a id="a" href="map_fr.php"> Français</a><br><br>
		<a id="a" href="map_ne.php"> Nederlands</a><br><br>
		<a id="a" href="map_de.php"> Deutsch</a>
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
	<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


							<div class="Row" style="color: black;">
								<div class="Column" style="width:50%;">
								<div class="divTable">
								   <div class="divTableBody">
									  <div class="divTableRow">
										 <div class="divTableCell">
											<h3 id="vul">Füllen Sie einen oder mehrere der folgenden Filter aus:</h3>
										 </div>
									  </div>
									  <div class="divTableRow">
										 <div class="divTableCell">
											<span class="FCity" id="FC">Welche Gemeinde?</span>
										 </div>
									  </div>
									  <div class="divTableRow">
										 <div class="divTableCell"><input type="text" class="inputApply" name="City" id="City" placeholder="&nbsp;Gemeinde eingeben" maxlength="20">&nbsp;&nbsp;<button id="GoCity" class="btnApply">Go</button></div>
										 <div id ="KHT" class="divTableCell">
											<input type="checkbox" id="FHome" name="FHome" value="Home" onchange="getFilteredFeatures();">
											<label for="FHome" id="FHomeLB">&nbsp;Heimtherapie</label>
										 </div>
									  </div>
									  <div class="divTableRow">
										 <div class="divTableCell"><span class="FCity" id="FA">Welche Adresse?</span></div>
									  </div>
									  <div class="divTableRow">
										 <div class="divTableCell"><input type="Address" class="inputApply" name="Address" id="Address" placeholder="&nbsp;Adresse eingeben" maxlength="50">&nbsp;&nbsp;<button id="GoAddress" class="btnApply">Go</button></div>
										 <div id ="KOT" class="divTableCell">
											<input type="checkbox" id="FOnline" name="Online" value="Online" onchange="getFilteredFeatures();">
											<label for="FOnline" id="FOnlineLB">&nbsp;Online-Therapie</label>
										 </div>
									  </div>
									  <div class="divTableRow">
										 <div class="divTableCell"><span class="FCity" id="FN">Was ist sein Name?</span></div>
									  </div>
									  <div class="divTableRow">
											 <div class="divTableCell"><input type="text" class="inputApply" name="Name" id="Name" placeholder="&nbsp;Name eingeben" maxlength="35">&nbsp;&nbsp;<button id="GoName" class="btnApply">Go</button></div>
										 <div id ="KCT" class="divTableCell">
											<input type="checkbox" id="FConvention" name="FConvention" value="Conventionated" onchange="getFilteredFeatures();">
											<label for="FConvention" id="FConventionLB">&nbsp;Konventionierter Therapeut&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
										 </div>
									  </div>
								   </div>
								</div>
								</div>
								<div class="Column">
									<p id="FSpecialization">Spezialisierung auswählen:</p><div class="ABBA">
									<input type="checkbox" id="15" name="15" value="Kinésithérapie générale" onchange="getFilteredFeatures();">
									<label for="15">&nbsp;Allgemeine Physiotherapie</label>
									<input type="checkbox" id="1" name="1" value="Aquathérapie" onchange="getFilteredFeatures();">
									<label for="1">&nbsp;Hydrotherapie</label>
									<input type="checkbox" id="17" name="17" value="Thérapie respiratoire" onchange="getFilteredFeatures();">
									<label for="17">&nbsp;Atemtherapie</label>
									<input type="checkbox" id="14" name="14" value="Rééducation pelvienne" onchange="getFilteredFeatures();">
									<label for="14">&nbsp;Beckenerziehung</label>
									<input type="checkbox" id="7" name="7" value="Crochetage" onchange="getFilteredFeatures();">
									<label for="7">&nbsp;Crochetage</label>
									<input type="checkbox" id="3" name="3" value="Dry needling | Acupuncture" onchange="getFilteredFeatures();">
									<label for="3">&nbsp;Dry needling | Akupunktur</label>
									<input type="checkbox" id="4" name="4" value="Electrothérapie" onchange="getFilteredFeatures();">
									<label for="4">&nbsp;Elektrotherapie</label>
									<input type="checkbox" id="25" name="25" value="Fasciathérapie" onchange="getFilteredFeatures();">
									<label for="25">&nbsp;Fasciatherapie</label>
									<input type="checkbox" id="23" name="23" value="Gériatrie" onchange="getFilteredFeatures();">
									<label for="23">&nbsp;Geriatrie</label>



								</div></div>
								<div id="Milf" class="Column">
<br><br>
<div class="Milf">
									<input type="checkbox" id="5" name="5" value="Gérontologie" onchange="getFilteredFeatures();">
									<label for="5">&nbsp;Gerontologie</label>
									<input type="checkbox" id="2" name="2" value="Thérapie cardiovasculaire" onchange="getFilteredFeatures();">
									<label for="2">&nbsp;Herz-Kreislauf-Therapie</label>
									<input type="checkbox" id="22" name="22" value="Cryothérapie" onchange="getFilteredFeatures();">
									<label for="22">&nbsp;Kryotherapie</label>
									<input type="checkbox" id="8" name="8" value="Drainage lymphatique" onchange="getFilteredFeatures();">
									<label for="8">&nbsp;Lymphdrainage</label>
									<input type="checkbox" id="9" name="9" value="Thérapie Manuelle" onchange="getFilteredFeatures();">
									<label for="9">&nbsp;Manuelle Therapie</label>
									<input type="checkbox" id="10" name="10" value="Neurophysicien" onchange="getFilteredFeatures();">
									<label for="10">&nbsp;Neurophysiker</label>
									<input type="checkbox" id="24" name="24" value="Oncologie" onchange="getFilteredFeatures();">
									<label for="24">&nbsp;Oncologie</label>
									<input type="checkbox" id="11" name="11" value="Oro-facial | Maxillo-facial" onchange="getFilteredFeatures();">
									<label for="11">&nbsp;Oro-facial | Maxillo-facial</label>



								</div>
								</div>
								<div class="Column">
									<button id="FiltersOut" onclick="removeAllFilters();">Filter entfernen</button>
<br><br> <div class="Peri">

									<input type="checkbox" id="12" name="12" value="Ostéopathie" onchange="getFilteredFeatures();">
									<label for="12">&nbsp;Osteopathie</label>
									<input type="checkbox" id="13" name="13" value="Pédiatrie" onchange="getFilteredFeatures();">
									<label for="13">&nbsp;Pädiatrie</label>
									<input type="checkbox" id="16" name="16" value="Thérapie périnatale" onchange="getFilteredFeatures();">
									<label for="16">&nbsp;Perinatale Therapie</label>
									<input type="checkbox" id="18" name="18" value="Sports medicine" onchange="getFilteredFeatures();">
									<label for="18")>&nbsp;Sportmedizin</label>
									<input type="checkbox" id="19" name="19" value="Ultrasound | Shockwave" onchange="getFilteredFeatures();">
									<label for="19">&nbsp;Ultrasound | Shockwave</label>
									<input type="checkbox" id="20" name="20" value="Uro-Gynecologie" onchange="getFilteredFeatures();">
									<label for="20">&nbsp;Uro-Gynäkologie</label>
									<input type="checkbox" id="21" name="21" value="Thérapie vestibulaire" onchange="getFilteredFeatures();">
									<label for="21">&nbsp;Vestibuläre Therapie</label>
									<input type="checkbox" id="6" name="6" value="Thérapie viscérale" onchange="getFilteredFeatures();">
									<label for="6">&nbsp;Viszerale Therapie</label>


									</div>
								</div>
							</div>
						</div>
						</div>
						<div class="col-xs-12 green">
							<div class="containerDivider">
								<div id="map" class="left">
								</div>
								<div id="popup" class="ol-popup">
						      <a href="#" id="popup-closer" class="ol-popup-closer"></a>
						      <div id="popup-content"></div>
						    </div>
								<div class="right">
									<div class="Blue">
										<div class="Row">
											<div class="Column">
												<h3 id="TName">Bitte wählen Sie jemanden aus</h3>
												<div>
												  &nbsp; <img src="../images/profile.png" id="TPP" alt="" style="width: 130px; height : 138px;">
												</div>
											</div>
											<div class="Column">
													<h3 id="SpeciTitle">Spezialisierungen</h3>
													<div id='specialisations'></div>
											</div>
											<div id="BlueAdapt" class="Column">
												<h3 id='headingContact'>Kontakt</h3>
												<p id="liPhone">&nbsp;Tel:&nbsp;</p>
												<p id="liEmail">&nbsp;email:&nbsp;</p>
												<p id="liWebsite">&nbsp;website:&nbsp;</p>
												<p id="liAddress">&nbsp;address:&nbsp;</p>
												<a id="liAgenda">Einen Termin machen</a>
											</div>
										</div>
										<br><br><br><br><br><br><br>
										<div class="Row">
											<div class="Column">
												<div class="onoffswitch">
													<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="homeTherapy" disabled>
													<label class="onoffswitch-label" for="homeTherapy" id="HT">&nbsp;&nbsp;Heimtherapie</label>

												</div>

											</div>

											<div class="Column">
												<div class="onoffswitch">
													<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="onlineTherapy" disabled>
													<label class="onoffswitch-label" for="onlineTherapy"  id="OT">&nbsp;&nbsp;Online-Therapie</label>
												</div>

											</div>
											<div class="Column">
												<div class="onoffswitch">
													<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="conventionTherapy" disabled>
													<label class="onoffswitch-label" for="conventionTherapy" id="CT">&nbsp;&nbsp;Konventionierter Therapeut</label>
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
			<div class="Messazzz">
						<p id="messazzzz">Voir &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" title="Back to Top"><span class="fas fa-angle-down"></span>&nbsp;&nbsp;la carte</a>
						<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="#TPP" title="Back to Middle"><span class="fas fa-angle-down"></span>&nbsp;&nbsp;le profil sélectionné</a>
						<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<a href="#FC" title="Back to Middle"><span class="fas fa-angle-down"></span>&nbsp;&nbsp;ajouter des filtres</a>
					</p>
			</div>
			<div class="boxFAQ" id="questionMarkId" style="display: none;">
				<span id="divTitle"></span>
				<a href="#" title="Back to Top" id="TakeALook"><span class="fas fa-angle-down"></span>&nbsp;&nbsp;Voir sur la carte</a>
			</div>
 </body>
</html>
