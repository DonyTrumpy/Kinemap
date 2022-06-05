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

<h1>Politique de protection des données </h1>

<p>La présente politique de protection des données à caractère personnel (ci-après, la « Politique de protection des données ») s’applique aux services en ligne fournis par l’entremise du site Web www.kinemap.be (ci-après, le « site ») développée par Kinemap (ci-après, « KINEMAP »).
Par l’acceptation des conditions générales de services de KINEMAP, l’utilisateur accepte expressément les dispositions ci-dessous relatives à la politique de protection des données à caractère personnel de KINEMAP.
Les services fournis par KINEMAP au travers du site (ci-après, les « Services ») permettent aux utilisateurs de jouir de diverses facilités liées à la recherche d’un praticien dans le domaine de la santé et à la réservation/gestion des rendez-vous médicaux. Ainsi, deux catégories d’utilisateurs peuvent être distinguées :
<ul>	L’utilisateur praticien, qui souhaite bénéficier des services afin de jouir d’une visibilité plus accrue de ses services médicaux aux patients.</ul>
<ul>	L’utilisateur patient, qui souhaite pouvoir trouver un kinésithérapeute pour avoir accès aux coordonnées des kinésithérapeutes inscrits sur KINEMAP et de solliciter un rendez-vous dans leur cabinet à des fins médicales.</ul>
Ces deux types d’utilisateurs sont regroupés, pour les besoins de la présente, sous dénomination d’« utilisateur(s) ».
Le site permet à ses utilisateurs de bénéficier des services.
KINEMAP agit en qualité de « responsable de traitement » conformément aux lois belges relatives à la protection de la vie privée et, en tant que tel, KINEMAP est responsable de la collecte et de l’utilisation des données personnelles des utilisateurs.
La présente déclaration explique les différents éléments des données personnelles qui seront recueillis, les buts de la collecte, ou du partage de ces données avec des tiers, les droits des utilisateurs en tant que personnes concernées et les mesures mises en place pour protéger leurs données personnelles. KINEMAP attire l’attention de l’utilisateur sur le fait que les services impliquent nécessairement que nous recueillons et stockons des données personnelles le concernant et que KINEMAP communiquera certains éléments de ses données personnelles.
La présente politique de protection des données ne décrit que le traitement des données personnelles effectué par KINEMAP ou en son nom dans le cadre des services – les fournisseurs de services et les contrôleurs d’identité traitent également les données personnelles en tant que responsables de traitement dans le cadre de leurs propres services ou activités : pour ces activités de traitement, KINEMAP prie l’utilisateur de consulter leurs politiques de protection des données à caractère personnel.
</p>
<h2>1. LES DONNEES PERSONNELLES QUE KINEMAP COLLECTE ET LA FACON DONT ELLES SONT COLLECTEES</h2>
  <h3>1.1. Les données personnelles que KINEMAP traite</h3>

            <p>Afin d’offrir les services tel qu’exposé dans la présente politique de protection des données, KINEMAP traite différentes catégories de données personnelles :
            <ul>•	Données relatives à la recherche d’un praticien et à la prise/gestion de rendez-vous (via un site relié grâce à un lien fournit par le praticien même), qui nous permettent de proposer à l’utilisateur les coordonnées d’un praticien dans la région géographique souhaitée, et d’éventuellement réserver un horaire de rendez-vous :

                  <ul>
                  Spécialité recherchée, nom du praticien ou du centre médical recherché ;
                  </ul>
                  <ul>
                  Zone géographique de recherche du praticien recherché ;
                  </ul>
                  <ul>Nom, prénom, adresse, spécialité, numéro de téléphone de contact, adresse mail, site web;</ul>
            </ul>

            <ul>
                Données d’identité, qui nous permettent d’identifier l’utilisateur. Cette catégorie couvre différentes sortes de données :

                <ul>	Nom complet, équipement informatique utilisé pour la navigation et adresse IP, cookies du navigateur.</ul>
                <ul>Informations de contact (adresse e-mail);</ul>

            </ul>

            <ul>
            Données d’inscription, qui sont spécifiques au processus d’inscription et couvrent les informations
             telles que le consentement de l’utilisateur aux conditions générales d’utilisation du site et la politique de protection des données de KINEMAP. Dans le cadre de l’inscription,
             KINEMAP collecte le nom d’utilisateur et le mot de passe choisis par l’utilisateur.
            </ul>

            Toutes les données mentionnées ci-dessus sont obligatoires afin de bénéficier des services. KINEMAP pourra traiter d’autres données sur une base volontaire, mais dans ce cas,
            KINEMAP en informera l’utilisateur et lui demandera son consentement préalable.

                </p>




<h3>1.2. Comment les données personnelles sont collectées</h3>
        <p>Les différentes catégories de données personnelles décrites sont collectées directement auprès de l’utilisateur ou par KINEMAP ou un membre KINEMAP:
        <ul>
          •	Les Données relatives à la recherche d’un praticien sont collectées directement auprès de l’utilisateur lors de son utilisation du site ou auprès des praticiens ayant donné leur consentement soit en souscrivant aux services, soit en ayant accepté que leurs informations de contact figurent sur le site.
        </ul>
        <ul>
          •	Les Données d’identité sont collectées soit directement auprès de l’utilisateur soit auprès du contrôleur d’identité auquel il s’est inscrit pour l’application. Lorsque l'utilisateur s'est inscrit, il a consenti au transfert de ses données d’identification à KINEMAP.
        </ul>
        </p>

<h2>2. A QUELLES FINS LES DONNEES PERSONNELLES DE L'UTILISATEUR SONT-ELLES UTILISEES</h2>
      <p>Les données personnelles que KINEMAP recueille servent à fournir à l'utilisateur les services suivants :
              <ul>
                •	offrir à l’utilisateur la possibilité de trouver un praticien dans une zone géographique définie ;
              </ul>

              <ul>
                •	effectuer les opérations que l’utilisateur demande d’effectuer avec le site et plus généralement, l’exploitation du site ;
              </ul>

              <ul>
                •	exploiter, évaluer et améliorer les services offerts par KINEMAP, tels que : (i) la gestion de nos communications avec l’utilisateur, (ii) le suivi de l’utilisation du site suite à une campagne de publicité ou de marketing (à destination des professionnels de santé), (iii) l’analyse des produits, services et sites web de KINEMAP, (iv) la facilitation des fonctionnalités du Site, (v) la présentation par KINEMAP de services complémentaires qui pourraient intéresser l’utilisateur et (vi) l’exécution des activités de comptabilité, d’audit, de facturation, de rapprochement et de collecte.
              </ul>

              <ul>
                •	gérer les fraudes et les risques ;
              </ul>

              <ul>
                •	tout traitement requis pour se conformer aux exigences légales applicables et aux normes et politiques de l’industrie applicables à KINEMAP.
              </ul>



          Les différentes catégories de données personnelles sont traitées aux fins et de la manière décrite ci-dessous.
      </p>

  <h3>2.1. Quand les données relatives à la recherche d’un praticien et à la prise/gestion de rendez-vous via le site sont-elles traitées et comment ?</h3>
          <ul>
            •	Recherches effectuées par l’utilisateur : Les données relatives à la recherche d’un praticien sont recueillies dès la première utilisation du site. L’utilisateur y a expressément consenti par l’acceptation des conditions générales de KINEMAP.
          </ul>

          <ul>
            •	Archivage : Une fois que la réalisation des services est achevée, les données récoltées seront anonymisées à des fins statistiques.
          </ul>

<h3>2.2. Quand les données d’Identité sont-elles traitées et comment sont-elles traitées</h3>
          <ul>
            •	Enregistrement pour les services : nous recueillons les données d’identité lorsque l'utilisateur accepte les conditions générales de KINEMAP. L'utilisateur y a expressément consenti par leur acceptation.
          </ul>

          <ul>
            •	Enregistrement auprès d’un fournisseur de services : chaque fois que l’utilisateur s’inscrit pour la première fois auprès d’un fournisseur de services via l’application, son consentement est demandé. C’est parce que dans ce cas, KINEMAP doit transférer des éléments des données d’identité de l’utilisateur. L’utilisateur sera invité à consentir à chaque transfert de données et à toute demande de données supplémentaires si cela se présente.
          </ul>

          <ul>
            •	Archivage : une fois que l’utilisateur aura terminé son utilisation des services ou après une période d’inactivité d’un an, les données seront archivées à des fins de preuve pour une période de deux ans, suite à quoi elles seront détruites.
          </ul>
        <p>Tous les éléments de ses données d’identité qui sont communiquées aux fournisseurs de services seront traités par les fournisseurs de services agissant comme contrôleurs de données conformément à leur propre politique de confidentialité.</p>


<h3>2.3. Quand les données d’Inscription seront-elles traitées et comment ?</h3>

         <ul>
           •	A l’inscription : les données d’inscription seront générées et collectées au moment de l’Inscription de l’utilisateur auprès des services;
         </ul>


        <ul>
          •	Preuve et archivage : les données d’inscription sont conservées dans la base de données soit par le contrôleur d’identité (agissant en tant que sous-traitant pour KINEMAP), ou directement par KINEMAP à des fins de preuve. Lorsque l’utilisateur aura terminé son utilisation des services ou après une période d’inactivité d’un an, les données seront archivées pour une période de deux ans. Après cette période, les données d’inscription seront détruites.
        </ul>




<h2>3. LES DONNEES PERSONNELLES ET LEUR PARTAGE</h2>
        <p>KINEMAP ne vend ni divulgue de quelque manière que ce soit les données personnelles qu’il recueille au sujet de l’utilisateur à des tiers, à l’exception de ce qui est prévu dans la présente politique de protection des données (ci-dessus et ci-dessous). KINEMAP ne partage des données personnelles que pour permettre l’exécution de tout service auquel l’utilisateur a consenti. A cet égard, KINEMAP peut partager les données personnelles de l’utilisateur avec nos membres, en ce compris les fournisseurs de services, tel que décrit ci-dessus.
        KINEMAP transfère des données à des tiers qui poursuivent des activités de traitement de données liées aux services au nom de KINEMAP (sous-traitants). Ces acteurs ne sont pas autorisés à utiliser les données ou à les divulguer de quelque manière que ce soit, sauf tel que décrit ci-dessus ou en vue de respecter des exigences légales. KINEMAP exige contractuellement de ces tiers et de ses membres qu’ils protègent de manière appropriée la confidentialité et la sécurité des données personnelles qu’ils traitent en son nom.
        KINEMAP peut également divulguer des données au sujet de l’utilisateur (i) si KINEMAP est tenu de le faire par la loi ou une procédure judiciaire, (ii) aux autorités chargées de l’application de la loi ou à d’autres fonctionnaires gouvernementaux conformément à leurs capacités légitimes, ou  (iii) lorsque KINEMAP est convaincu que la divulgation est nécessaire ou appropriée afin de prévenir des dommages physiques, ou (iv) dans le cadre d’une enquête sur une activité frauduleuse ou illégale suspectée ou existante.
        KINEMAP se réserve également le droit de transférer les données personnelles que KINEMAP possède au sujet de l’utilisateur dans l’hypothèse où KINEMAP vend ou transfère tout ou partie de son entreprise ou des actifs affectant les services. Si une telle vente ou un tel transfert devait se produire, KINEMAP veillera à ce que les informations personnelles que l’utilisateur lui a communiquées restent traitées de manière conforme à la présente politique de protection des données.
        Kinemap certifie une utilisation et une protection des données utilisateur en accord avec la réglementation RGPD
        </p>

<h2>4. LES DROITS ET CHOIX DE L'UTILISATEUR</h2>
    <h3>4.1. Accès, rectification et portabilité des données</h3>
                <p>L’utilisateur peut exercer à tout moment son droit d’accès et de rectification de ses données personnelles que KINEMAP pourrait conserver en relation avec les services, conformément aux lois applicables en matière de protection des données, soit par l’intermédiaire de l’interface du site lui-même, soit en envoyant une demande avec une copie du recto de sa carte d’identité, passeport ou toute autre preuve d’identité vers l’adresse suivante : info@kinemap.be.
KINEMAP attire l’attention de l’utilisateur sur le fait que certains éléments de ses données personnelles peuvent être consultés via l’interface du site et à titre d’utilisateur, il a le droit de rectifier et de modifier ces données en tout temps. Toutefois, étant donné que la sécurité des services dépend de l’intégrité des données d’identité de base, KINEMAP se réserve le droit de supprimer et ne pas rembourser tout compte contenant des fausses informations ou n’étant pas en lien avec la kinésithérapie. En cas de supprimation de compte, l’utilisateur sera d’abord prévenu de modifier le contenu ou de supprimer le compte lui-même. S’il ne répond pas à cet appel, KINEMAP se réserve le droit de supprimer ce dernier compte par soi-même.
Enfin, dès que cela sera applicable, l’utilisateur aura également le droit à la portabilité de ses données conformément aux lois applicables en matière de protection des données.

            </p>

    <h3>4.2. Effacement</h3>
            <p>L’utilisateur peut à tout moment exercer son droit à l’effacement de ses données conformément aux lois applicables en matière de protection des données en envoyant une demande avec une copie du recto de sa carte d’identité, passeport ou toute autre preuve d’identité vers l’adresse suivante : info@kinemap.be. KINEMAP s’abstiendra d’utiliser toute donnée personnelle figurant sur cette demande et ne continuera à conserver les données personnelles passées uniquement à des fins de preuve pendant une période de 2 ans, après quoi elles seront effacées. Une fois que les données auront été supprimées, l’utilisateurs ne pourra plus utiliser les services.</p>

    <h3>4.3. Opposition</h3>
            <p>Lors de l’utilisation du site ou des services, l’utilisateur est invité à consentir à certaines activités de traitement de données. L’utilisateur aura le droit de retirer son consentement pour de telles activités à tout moment, en envoyant une demande avec une copie du recto de votre carte d’identité, passeport ou toute autre preuve d’identité vers l’adresse suivante : info@kinemap.. Ce retrait n’affectera pas la légalité du traitement des données passées. L’utilisateur note que  le fait de s’opposer à un certain traitement peut toutefois influer sur son utilisation des services car KINEMAP ne peut pas fournir les services sans traiter les éléments nécessaires à ses données personnelles.
              A tout moment, si l’utilisateur considère que ses droits n’ont pas été respectés, il peut également déposer une plainte auprès de la commission belge pour la protection de la vie privée, rue de la Presse, 35 à 1000-Bruxelles.

        </p>


<h2>5. COMMENT NOUS PROTEGEONS LES DONNEES PERSONNELLES DE L'UTILISATEUR</h2>
      <h3>5.1. Comment garantissons-nous l’intégralité des données conservées</h3>
              <p>KINEMAP maintient des garanties techniques et physiques appropriées afin de protéger les données personnelles contre la destruction accidentelle ou illégale, la perte accidentelle, la modification non autorisée, la divulgation ou l’accès non autorisé, l’utilisation abusive et toute autre forme illégale de traitement des données personnelles qui sont en sa possession.
              Les mesures de sécurité que nous adoptons dépendent des différents types d’information collectées et conservées.
                <ul>
                  Conservation des données:

                  Toutes les données personnelles de l’utilisateur, qu’elles soient utilisées activement ou archivées, sont conservées dans le site lui-même ou encore dans l’application elle-même. Accès restreint
                  L’accès interne aux données personnelles sera limité sur une base stricte de « besoin de savoir ». Seul le personnel autorisé, dont l’activité sera surveillée pour éviter toute utilisation abusive, pourra accéder aux données.
                </ul>

              </p>

  <h2>6. ACCORD D'UTILISATION DES DONNÉES</h2>

                    <p>Dans la présente section du contrat, le terme « sous-traitant » désigne Kinemap; et le terme « responsable du traitement des données » désigne le praticien engagé avec Kinemap par un contrat de vente de service.
                  </p>
                  <p>
                  La qualité de sous-traitant ne dispense cependant pas Kinemap de se conformer au règlement (UE) 2016/679 dit « Règlement Général sur la Protection des Données » et ci-après dénommé « RGDP ». Conformément à l’article 28 du RGDP, le sous-traitant doit présenter des garanties suffisantes quant à la mise en œuvre de mesures techniques et organisationnelles appropriées, de manière à ce que le traitement réponde aux exigences du RGDP et garantisse la protection des droits de la personne concernée.
                  </p><p>
                  Le sous-traitant ne peut pas recruter un autre sous-traitant sans l’autorisation écrite préalable, spécifique ou générale, du responsable de traitement.
                  </p><p>
                  Le RGDP impose au responsable du traitement des données et au sous-traitant de souscrire un contrat et en précise les contours. Ainsi, la durée du traitement, la nature et la finalité du traitement, le type de données à caractère personnel et les catégories de personnes concernées, et les obligations et les droits du responsable de traitement.
                  </p>

                  <p>
                  Ce contrat prévoit, notamment, que le sous-traitant :
                  <ul>
                    •	ne traite les données à caractère personnel que sur instruction documentée du responsable du traitement des données,
                  </ul>

                  <ul>
                    •	veille à ce que les personnes autorisées à traiter les données à caractère personnel s’engagent à respecter la confidentialité ou soient soumises à une obligation légale appropriée de confidentialité,
                  </ul>

                  <ul>
                    •	prend toutes les mesures requises par l’article 32 du RGDP au titre de la sécurité des données à caractère personnel,
                  </ul>

                  <ul>
                    •	dans l’hypothèse où il serait autorisé à recourir lui-même à un autre sous-traitant, applique les mêmes obligations, standards et exigences à ce dernier que ceux s’appliquant à elle-même dans le cadre du contrat conclu avec le responsable de traitement,
                  </ul>

                  <ul>
                    •	tient compte de la nature du traitement, aide le responsable du traitement des données, par des mesures techniques et organisationnelles appropriées, dans toute la mesure du possible, à s’acquitter de son obligation de donner suite aux demandes dont les personnes concernées le saisissent en vue d’exercer leurs droits,
                  </ul>

                  <ul>
                    •	aide le responsable du traitement des données à garantir le respect des obligations prévues aux articles 32 à 36 du RGDP (sécurité des données, notification à l’autorité de contrôle d’une violation de données à caractère personnel, communication de celle-ci à la personne concernée, analyse d’impact, consultation préalable), compte tenu de la nature du traitement et des informations à la disposition du sous-traitant,
                  </ul>

                  <ul>
                    •	selon le choix du responsable de traitement, supprime toutes les données à caractère personnel ou les renvoie au responsable de traitement au terme de la prestation de services relatifs au traitement, et détruit les copies existantes, à moins que la réglementation n’exige la conservation desdites données,
                  </ul>

                  <ul>
                    •	met à la disposition du responsable de traitement toutes les informations nécessaires pour démontrer le respect des obligations exposées ci-devant et pour permettre la réalisation d’audits, y compris des inspections, par le responsable du traitement des données ou un autre auditeur qu’il a mandaté, et contribuer à ces audits.
                  </ul>


                  </p>


<h2>7. TRANSFERT DES DONNÉES</h2>

  <p>KINEMAP ne transfère aucune des données personnelles de l’utilisateur en dehors de l’Espace Economique Européen, ni de quelque manière autre que ce soit non spécifiée ci-dessus.</p>

<h2>8. MISE À JOUR DE LA POLITIQUE DE CONFIDENTIALITÉ</h2>
  <p>La présente politique de protection des données peut être mise à jour périodiquement pour refléter les changements opérés dans le cadre de nos pratiques de données personnelles. KINEMAP publiera un avis sur son site pour informer l’utilisateur de tout changement important à sa politique de protection des données et précisera en haut de l’avis lorsqu’il a été mis à jour. Si nécessaire KINEMAP demandera à l’utilisateur de renouveler son consentement à cette politique de protection des données.</p>

<h2>9. COMMENT NOUS CONTACTER</h2>
  <p>Si l’utilisateur a des questions ou des commentaires relatifs à la présente politique de protection des données, s’il souhaite exercer ses droits ou mettre à jour les informations que KINEMAP a à son sujet ou ses préférences, l’utilisateur est prié de contacter KINEMAP ici : KINEMAP SPRL, Tel : +32 472 75 66 13, Email : info@kinemap.be.</p>


  </body>
</html>
