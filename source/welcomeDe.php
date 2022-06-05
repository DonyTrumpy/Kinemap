<?php
	include '../abc/config.php';
	check();

	$userid=mysqli_real_escape_string($db,$_SESSION['u_userid']);
	$sql = "SELECT * FROM professionals WHERE (userid = '$userid')";
	$login = mysqli_query($db,$sql);
	$count = mysqli_num_rows($login);
	if ($count > 0) {
		while($row = mysqli_fetch_assoc($login)){
			$_SESSION['profID'] = $row['id'];
			$name = $row['fullname'];
			$email = $row['emailid'];
			$specialisations = $row['specialisations'];
			$telephone = $row['telephone'];
			$website = $row['website'];
			$agenda = $row['agenda'];
			$address = $row['address'];
			$online_therapy = $row['online_therapy'];
			$home_therapy = $row['home_therapy'];
			$conventional_therapy = $row['conventional_therapy'];
			$description = $row['description'];
			$image = $row['image'];
			$latitude = $row['latitude'];
			$longitude = $row['longitude'];
		}
		$addressParts = explode (",", $address);
		// $_SESSION['readSelected'] = explode (",", $specialisations);
		$_SESSION['readSelected'] = $specialisations;
		$specilisationsParts = explode (",", $specialisations);
	}
?>
<!DOCTYPE html>
<html>
   <head>
      <link rel="icon" href="../images/logo.png">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../abc/ol.css">
      <link rel="stylesheet" href="../abc/sweetalert.css">
			<link rel="stylesheet" href="../abc/css/bootstrap.min.css">
			<link rel="stylesheet" href="../abc/css/multi-select.css">
			<link rel="stylesheet" href="../abc/css/picker.min.css">
			<link rel="stylesheet" href="../abc/style.css">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">

      <script src="../js/jquery.min.js"></script>
      <script src="../js/notify.min.js"></script>
      <script src="../js/jquery.multi-select.js"></script>
      <script src="../js/ol.js"></script>
      <script src="../js/picker.min.js"></script>
      <script src="../js/code.js"></script>
				<?php
					if ($count != "")
						echo '<title>Kinemap | Welcome, '.$name.'</title>';
					else
						echo '<title>Kinemap | Welcome, '.$_SESSION['u_name'].'</title>';
				?>

				<style>
				  @import url('https://fonts.googleapis.com/css?family=Montserrat');



					body {
					  font-family: 'Montserrat', sans-serif;font-size: 14px;}

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
					    height: 84px;
					    width: 100%;
					    background: #fff;
					    align-items: center;
					    justify-content: space-between;
					    padding: 0 50px 0 100px;
					    flex-wrap: wrap;
					    border-bottom: 2px solid rgba(255,255, 255, 0.2);
					    border-top: 2px solid rgba(255,255, 255, 0.2);
					    position: static;
					    top: 0;
					    border-bottom-color:#059041;
					  }
					  @media screen and (min-width: 851px) {
					  nav {
					      width:100;
					    }
					  }
					  @media screen and (max-width: 850px) {
					    nav {
					      width:100%;position: static;
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
							text-decoration: none;
					  }
					  nav ul li a{
					    color: #000;
					    font-size: 18px;
					    font-weight: 500;
					    padding: 8px 15px;
					    border-radius: 5px;
					    letter-spacing: 1px;
							font-family: Montserrat;
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



						@media (max-width: 933px) {
 						 nav ul li a{
 							 display:none;
 						 }}




					.hovv:hover{color:#fff;background:#059041; text-decoration: none;}


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
					    left:30%;
					    border-radius: 16px;
					    transform:translate(-70%,-40%) scale(0);
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
					    transform:translate(-70%,-40%) scale(1);
					  }

						@media screen and (max-width: 933px) {
							.popup.active .content {
								left: 70%;
							}}

							@media screen and (max-width: 500px) {
								.popup.active .content {width:70vw;
								}
							}

					  #PopPop {
					    position:absolute;
					    top:4%;
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
						@media screen and (max-width: 850px) {
							#PopPop {
								top:3.5%;
							}
						}
						#a{color:#000;text-decoration: none;}





					#Logo{margin-left:15px;}

					@media screen and (max-width: 850px) {
					  #Logo {
					    margin-left:0px;
					  }
					}

					#WTFF{display:none;height: 40px;width:100%;background:#059041;}
					@media screen and (max-width: 933px) {
					  #WTFF {
					    display: block;
					  }
					  #WTFF a{color:#fff;text-decoration: none;margin-left: 15vw;}
					}

					@media screen and (max-width:500px){
						#WTFF{width:100%;}
						#WTFF a{margin-left:10vw;}}

					.container{margin-left: -15px;}

					@media screen and (max-width: 1220px) {
						.container { width:1200px;
						}
					}
					@media screen and (max-width: 933px) {
						.container { width:196vw; padding-bottom: 200px;padding
						}
					}

					@media screen and (max-width: 920px) {
						#map { width:600px;
						}
					}

#White{color:#fff;}


					#Speci{margin-top: 50px;}
					#Cont{margin-top: 50px;}
					.Row{padding-top: 47px;}

				#submit{
					background: #BEA535;
				  margin-left: 40%;
					margin-top: 50px;
				}

				#submit:hover{
					background: #E2BC15;
					transition: 0.8s;
				}

				@media screen and (max-width: 573px) {#submit{margin-top:20px;}}

				.TSpecialisation p{
					font-family: sans-serif;
					color: #000;
					font-size: 16px;
					font-weight: bold;
				}

				.left{
					/* height: 780px;  */
					background: #fff;
					box-sizing: border-box;
				}
				.box{background:#059041;height: 1200px;width:50vw;}
				.box h2 {position: absolute;left:5vw;}

.column{height:500px;}
.TPP{margin-top: 80px;}
#Speci{margin-top: 80px;}
#Cont{margin-top: 80px;}
#DescriptionScript{width: 45vw;margin-left: 1.5vw;}

#map{height:1200px;float: none;position: absolute;left:50%;width:49.6vw;}
				#MapHead{background:#059041;color:#fff;
}


@media screen and (max-width: 933px) {
				#map { position: absolute;top:1500px;width:98vw;
				}
			}




							@media screen and (max-width: 1380px) {
										#Cont { margin-top: -12vw; margin-left:2vw;
											}

										#Speci{margin-left: 12vw;}

										.box{height: 1450px;}
										#map{height:1450px; width:49.5vw;}

										}

										@media screen and (max-width: 933px) {
													.TInfo { width:28vw;
														}
														.box{width:100vw;}
														#map{width:100%;position: absolute;left:0px;}
															#DescriptionScript{width: 85vw;margin-left: 1.5vw;}}




							@media screen and (max-width: 770px) {
										#Cont { margin-top: -20vw; margin-left:2vw;
											}
										#Speci {margin-left: 25vw;
														}
										#map{position: absolute;left:0px; top:1500px;width:100%;}
										.container{width:100%;}
										}
										@media screen and (max-width: 575px;){
										#map{width:1500px;}}
#lol{color:#fff;}

.arrow{
	position: fixed;
	bottom: 73px;
	right: 30px;
	z-index: 9;
	visibility: hidden;
}


.arrow a{
	height: 39px;
	width: 37px;
	text-align: center;
	background: #1b1b1b;
	display: block;
	border-radius: 3px;
}
.arrow a span{
	color: #f2f2f2;
	font-size: 25px;
	line-height: 39px;
	cursor: pointer;
}

@media screen and (max-width:933px){
	.arrow{visibility: visible;}
}

.arroww{
	position: fixed;
	bottom: 30px;
	right: 30px;
	z-index: 9;
	visibility: hidden;
}


.arroww a{
	height: 39px;
	width: 37px;
	text-align: center;
	background: #1b1b1b;
	display: block;
	border-radius: 3px;
}
.arroww a span{
	color: #f2f2f2;
	font-size: 25px;
	line-height: 39px;
	cursor: pointer;
}
.arroww a span{
	color: #f2f2f2;
	font-size: 25px;
	line-height: 39px;
	cursor: pointer;
}

@media screen and (max-width: 933px){
	.arroww{visibility: visible;}
}


				</style>
   </head>
   <body onload="init()">

		 <nav >
					<img src = "../images/KinemapFullLogooo.png" id="Logo" alt = "Logo" onclick="window.location='../home/home_de.php'"
					style ="width: 140px; height : 60px;" >

					<ul>
		<li><a class="hovv" href="../home/home_de.php">HOME</a></li>
		<li><a class="hovv" href="../map/map_de.php">KARTE</a></li>
		<li><a class="hovv" href="../login/login_de.php">LOG IN | SIGN UP</a></li>

		</ul>

				 <div id="WTF">

				 </div>

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
				 <a id="a" href="../source/welcome.php"> English</a><br><br>
				 <a id="a" href="../source/welcomeFr.php"> Français</a><br><br>
				 <a id="a" href="../source/welcomeNe.php"> Nederlands</a><br><br>
				 <a id="a" href="../source/welcomeDe.php"> Deutsch</a>
			 </div>
		 </div>

		 <button id="PopPop" onclick="togglePopup()">Sprache</button>
		 <script type="text/javascript">
		 function togglePopup(){
		 document.getElementById("popup-1").classList.toggle("active");
		 }
		 </script>






      <div class="container">
				<div class="Edit">
				<?php
					if ($_SESSION["u_rolecode"] == "A")
					echo 'Select a user you want to edit<select name="basic" id="allusers" onchange="getUserDetails(this);"><select><img id="delProfile" src="images/delete.png" height=30 width=40 style="cursor: pointer;"/>';
				?>
					</div>
         <div class="left">
            <div class="box">
               <h2 id="White"> Vervollständigen Sie Ihre Angaben </h2>
               <div class="container-fluid" class="row">
                  <div class="columnFirst">


										<div class="TPP">
				 <form method="post" action="" enctype="multipart/form-data" id="myform">
											 <center>
					 <div class='preview'>
						 <?php
							 if ($count != "")
								 echo '<img src='.$image.' id="img" width="100" height="100">';
							 else
								 echo '<img src="../images/profile.png" id="img" width="100" height="100">';
						 ?>
					 </div>
											 </center>
											 <label id="lblPic">Wählen Sie ein Profilbild</label>
				 </form>
											 <script type="text/javascript">
													function previewImage(){
							 var fd = new FormData();
							 var files = $('#file')[0].files[0];
							 fd.append('file',files);

							 $.ajax({
								 url: '../abc/upload.php',
								 type: 'post',
								 data: fd,
								 contentType: false,
								 processData: false,
								 success: function(response){
									 if(response != 0){
										 $("#img").attr("src",response);
										 $(".preview img").show(); // Display image element
									 }else{
										 alert('file not uploaded');
									 }
								 },
							 });
													}
											 </script>
										</div>

                     <div class="marginDiv">
						<input type="file" class="fileField" id="file" name="file" onchange="previewImage(event)" required />
                     </div>
                     <div class="marginDiv">
				 							<?php
				 								if ($count != "")
				 									echo '<input type="text" name="UserName" id="TName" class="TName" placeholder="&nbsp;Ihr vollständiger Name" maxlength="25" required value='.$name.'>';
				 								else
				 									echo '<input type="text" name="UserName" id="TName" class="TName" placeholder="&nbsp;Ihr vollständiger Name" maxlength="25" required>';
				 							?>
												<input type="password" name="password" id="password" class="TName" placeholder="&nbsp;Passwort" maxlength="25" required>
                     </div>
                  </div>
									<div id="Speci" class="column">
						<select multiple="multiple" id="my-select" name="my-select[]">
							<?php
								if ($count != "")
								 echo '
									 <option value="Aquatherapy" '.((in_array("Aquatherapy",$specilisationsParts))?'selected="selected"':"").'>Hydrotherapie</option>
									 <option value="Cardiovascular therapy" '.((in_array("Cardiovascular therapy",$specilisationsParts))?'selected="selected"':"").'>Cardiovascular therapie</option>
									 <option value="Crochetage" '.((in_array("Crochetage",$specilisationsParts))?'selected="selected"':"").'>Crochetage</option>
									 <option value="Cryotherapy" '.((in_array("Cryotherapy",$specilisationsParts))?'selected="selected"':"").'>Cryotherapie</option>
									 <option value="Dry needling | Acupuncture" '.((in_array("Dry needling/ Acupuncture",$specilisationsParts))?'selected="selected"':"").'>Dry needling | Acupuncture</option>
									 <option value="Electrotherapy" '.((in_array("Electrotherapy",$specilisationsParts))?'selected="selected"':"").'>Electrotherapie</option>
									  <option value="Fasciatherapy" '.((in_array("Fasciatherapy",$specilisationsParts))?'selected="selected"':"").'>Fasciatherapie</option>
									 <option value="General physical therapy" '.((in_array("General physical therapy",$specilisationsParts))?'selected="selected"':"").'>General physical therapy</option>
									 <option value="Geriatry" '.((in_array("Geriatry",$specilisationsParts))?'selected="selected"':"").'>Geriatrie</option>
									 <option value="Gerontology" '.((in_array("Gerontology",$specilisationsParts))?'selected="selected"':"").'>Gerontologie</option>
									 <option value="Inwendige aandoeningen" '.((in_array("Inwendige aandoeningen",$specilisationsParts))?'selected="selected"':"").'>Inwendige aandoeningen</option>
									 <option value="Lymphatic drainage" '.((in_array("Lymphatic drainage",$specilisationsParts))?'selected="selected"':"").'>Lymfedrainage</option>
									 <option value="Manual therapy" '.((in_array("Manual therapy",$specilisationsParts))?'selected="selected"':"").'>Manuele therapie</option>
									 <option value="Neurophysician" '.((in_array("Neurophysician",$specilisationsParts))?'selected="selected"':"").'>Neurofysicus</option>
									 <option value="Oncology" '.((in_array("Oncology",$specilisationsParts))?'selected="selected"':"").'>Oncologie</option>
									 <option value="Oro-facial | Maxillo-facial" '.((in_array("Oro-facial / Maxillo-facial",$specilisationsParts))?'selected="selected"':"").'>Oro-faciaal | Maxillo-faciaal</option>
									 <option value="Osteopathy" '.((in_array("Osteopathy",$specilisationsParts))?'selected="selected"':"").'>Osteopathie</option>
									 <option value="Pediatry" '.((in_array("Pediatry",$specilisationsParts))?'selected="selected"':"").'>Pediatrie</option>
									 <option value="Pelvical reeducation" '.((in_array("Pelvical reeducation",$specilisationsParts))?'selected="selected"':"").'>Pelvische reeducatie</option>
									 <option value="Perinatal therapy" '.((in_array("Perinatal therapy",$specilisationsParts))?'selected="selected"':"").'>Perinatale therapie</option>
									 <option value="Respiratory therapy" '.((in_array("Respiratory therapy",$specilisationsParts))?'selected="selected"':"").'>Respiratoire therapie</option>
									 <option value="Sports medicine" '.((in_array("Sports medicine",$specilisationsParts))?'selected="selected"':"").'>Sportkinesitherapie</option>
									 <option value="Ultrasound | Shockwave" '.((in_array("Ultrasound / Shockwave",$specilisationsParts))?'selected="selected"':"").'>Ultrasound | Shockwave</option>
									 <option value="Uro-Gynecology" '.((in_array("Uro-Gynecology",$specilisationsParts))?'selected="selected"':"").'>Uro-Gynecologie</option>
									 <option value="Vestibular therapy" '.((in_array("Vestibular therapy",$specilisationsParts))?'selected="selected"':"").'>Vestibulaire therapie</option>

 									 ';
							 else
								echo '
									 <option value="Cardiovascular therapy">Cardiovasculaire therapie</option>
									 <option value="Crochetage">Crochetage</option>
									 <option value="Cryotherapy">Cryotherapie</option>
									 <option value="Dry needling/ Acupuncture">Dry needling | Acupuncture</option>
									 <option value="Electrotherapy">Electrotherapie</option>
									 <option value="Fasciatherapy">Fasciatherapie</option>
									 <option value="General physical therapy">Algemene kinésithérapie</option>
									 <option value="Geriatry">Geriatry</option>
									 <option value="Gerontology">Gerontologie</option>
									 <option value="Aquatherapy">Hydrotherapie</option>
									 <option value="Inwendige aandoeningen">Inwendige aandoeningen</option>
									 <option value="Lymphatic drainage">Lymfedrainage</option>
									 <option value="Manual therapy">Manuele therapie</option>
									 <option value="Neurophysician">Neurofysicus</option>
									 <option value="Oncology">Oncologie</option>
									 <option value="Oro-facial / Maxillo-facial">Oro-faciaal | Maxillo-faciaal</option>
									 <option value="Osteopathy">Osteopathie</option>
									 <option value="Pediatry">Pediatrie</option>
									 <option value="Pelvical reeducation">Pelvische reeducatie</option>
									 <option value="Perinatal therapy">Perinatale therapie</option>
									 <option value="Respiratory therapy">Respiratoire therapie</option>
									 <option value="Sports medicine">Sportkinesitherapie</option>
									 <option value="Ultrasound / Shockwave">Ultrasound | Shockwave</option>
									 <option value="Uro-Gynecology">Uro-Gynecologie</option>
									 <option value="Vestibular therapy">Vestibulaire therapie</option>
									 ';
						 ?>
						</select>
					</div>
                  <div id="Cont" class="column">
                     <div class="TSpecialisation">
                        <p id="lol">Kontakt</p>
                        <div class="marginDiv">
                           <span id="liPhone">Tel: <br>
							 							<?php
							 								if ($count != "")
							 									echo '<input type="number" name="PhoneNumber" id="TPhone" class="TInfo" placeholder="Telefonnummer" maxlength="12" required value='.$telephone.'>';
							 								else
							 									echo '<input type="number" name="PhoneNumber" id="TPhone" class="TInfo" placeholder="Telefonnummer" maxlength="12" required>';
							 							?>
                           </span>
                        </div>
                        <div class="marginDiv">
                           <span id="liEmail">&nbsp;Email:<br>
							 							<?php
							 								if ($count != "")
							 									echo '<input type="text" name="Email" id="TEmail" class="TInfo" placeholder="Email" maxlength="30" required value='.$email.'>';
							 								else
							 									echo '<input type="text" name="Email" id="TEmail" class="TInfo" placeholder="Email" maxlength="30" required>';
							 							?>
                           </span>
                        </div>
                        <div class="marginDiv">
                           <span id="liWebsite">&nbsp;Webseite:<br>
							 							<?php
							 								if ($count != "")
							 									echo '<input type="text" name="Website" id="TWebsite" class="TInfo" placeholder="Webseite" maxlength="30" required value='.$website.'>';
							 								else
							 									echo '<input type="text" name="Website" id="TWebsite" class="TInfo" placeholder="Webseite" maxlength="30" required>';
							 							?>
                           </span>
                        </div>
                        <div class="marginDiv">
                           <span id="liAddress">&nbsp;Adresse:<br></span>
							 							<?php
							 								if ($count != "")
							 									echo '<input type="text" name="Street" id="TStreet" class="TInfo" placeholder="Straße und Nummer" maxlength="50" required value='.$addressParts[0].'>
				                        <div class="marginDiv">
																	<input type="text" name="Zipcode" id="TZip" class="TInfo" placeholder="Postleitzahl" maxlength="20" required value='.$addressParts[2].'>
				                        </div>
				                        <div class="marginDiv">
				                           <input type="text" name="City" id="TCity" class="TInfo" placeholder="Stadt" maxlength="20" required value='.$addressParts[1].'>
				                        </div>';
							 								else
							 									echo '<input type="text" name="Street" id="TStreet" class="TInfo" placeholder="Straße und Nummer" maxlength="50" required>

				                        <div class="marginDiv">
																	<input type="text" name="Zipcode" id="TZip" class="TInfo" placeholder="Postleitzahl" maxlength="20" required>
				                        </div>
				                        <div class="marginDiv">
				                           <input type="text" name="City" id="TCity" class="TInfo" placeholder="Stadt" maxlength="20" required>
				                        </div>';
							 							?>
                        </div>
                        <div class="marginDiv">
                           <span id="liWebsite">&nbsp;Link zur Online-Agenda:<br>
							 							<?php
							 								if ($count != "")
							 									echo '<input type="text" name="Agenda" id="TAgenda" class="TInfo" placeholder="Agenda" maxlength="80" required value='.$agenda.'>';
							 								else
							 									echo '<input type="text" name="Agenda" id="TAgenda" class="TInfo" placeholder="Agenda" maxlength="80" required>';
							 							?>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="Row">
                  <div id = "HHT" class="Column">
                     <div class="onoffswitch">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="homeTherapy" tabindex="0" <?php if ($home_therapy == 1) echo 'checked'; else echo 'unchecked';?>>
                        <label class="onoffswitch-label" for="homeTherapy"></label>
                     </div>
                     <p>Heimtherapie</p>
                  </div>
                  <div id = "HOT" class="Column">
                     <div class="onoffswitch">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="onlineTherapy" tabindex="0" <?php if ($online_therapy == 1) echo 'checked'; else echo 'unchecked';?>>
                        <label class="onoffswitch-label" for="onlineTherapy"></label>
                     </div>
                     <p>Online-Therapie</p>
                  </div>
                  <div id = "HCT" class="Column">
                     <div class="onoffswitch">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="conventionTherapy" tabindex="0" <?php if ($conventional_therapy == 1) echo 'checked'; else echo 'unchecked';?>>
                        <label class="onoffswitch-label" for="conventionTherapy"></label>
                     </div>
                     <p>Registrierter Therapeut</p>
                  </div>
               </div>
               <div class="Row" id='locationDiv'>
					Ausgewählte Vermietung:
					<div class="Column">
					 <?php
						 if ($count != "")
							 echo '<p id="lati">Latitude: '.$latitude.'</p>';
						 else
							 echo '<p id="lati"></p>';
					 ?>
					</div>
					<div class="Column">
					 <?php
 						 if ($count != "")
 							 echo '<p id="longi">Longitude: '.$longitude.'</p>';
 						 else
 							 echo '<p id="longi"></p>';
 					 ?>
					</div>
               </div>


<br><br><br>
		 					 <?php
		  						 if ($count != "")
               			echo '<textarea type="text" id="DescriptionScript" placeholder="Ich habe 2022 meinen Abschluss als Physiotherapeutin an der VUB mit einem Master-Abschluss in manueller Therapie gemacht. Ich behandle die ganze Woche nur nach Vereinbarung von 8 bis 20 Uhr und arbeite nur am Wochenende am Samstagmorgen bis 13 Uhr. Mein Ziel ist es, Sie in die bestmögliche Form zu bringen." maxlength="8500" style="resize: none;" required>'.$description.'</textarea>';
		  						 else
	               			echo '<textarea type="text" id="DescriptionScript" placeholder="Ich habe 2022 meinen Abschluss als Physiotherapeutin an der VUB mit einem Master-Abschluss in manueller Therapie gemacht. Ich behandle die ganze Woche nur nach Vereinbarung von 8 bis 20 Uhr und arbeite nur am Wochenende am Samstagmorgen bis 13 Uhr. Mein Ziel ist es, Sie in die bestmögliche Form zu bringen." maxlength="8000" style="resize: none;" required></textarea>';
		  					 ?>
               <input type="submit" id="submit" name="" value="Submit">
            </div>
         </div>
         <div id="map" class="right">
            <p id="MapHead">Suchen Sie Ihren Arbeitsplatz</p>
         </div>
      </div>

			<div class="arrow">
					 <a href="#" title="Back to Top"><span class="fas fa-angle-up"></span></a>
				 </div>
				 <div class="arroww">
							<a href="#map" title="Back to Bottom"><span class="fas fa-angle-down"></span></a>
						</div>



   </body>
</html>
